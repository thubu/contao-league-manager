<?php

/**
 * PHP version 5
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    leaguemanager
 * @license    LGPL
 * @filesource
 */


/**
 * Class lm_matchreader_basic
 *
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    Controller
 */
class lm_matchreader_basic extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'lm_matchreader_basic';


	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$return = "Match reader - Basic Information<br />";
			if($this->lm_usefixedmatch=="1"){
				$objMatch =$this->Database->prepare("SELECT * FROM tl_lm_matches WHERE id=?")->execute($this->lm_match);
				$return.="Fixed match: " . $objMatch->team_home . " vs. " . $objMatch->team_away;
			}
			else
			{
				$return.="Variable match";
			}
			return $return;
		}
		return parent::generate();
	}

	/**
	 * Generate module
	 */
	protected function compile()
	{
		//Get match id from get variable or from content element settings
		if($this->lm_usefixedmatch=="1"){
			$matchid = $this->lm_match;
		}
		else
		{
			$matchid = $this->Input->get('lm_match');
		}

		if($matchid)
		{
			$arrMatch=array();
			$objMatch=$this->Database->prepare("SELECT * FROM tl_lm_matches WHERE id=?")->execute($matchid);
			if ($objMatch->numRows>0){
				if($objMatch->score_home=="")
				{
					$score_home='-';
				}
				else
				{
					$score_home=$objMatch->score_home;
				}

				if($objMatch->score_away=="")
				{
					$score_away='-';
				}
				else
				{
					$score_away=$objMatch->score_away;
				}

				$team_home=$this->Database->prepare("SELECT * FROM tl_lm_teams WHERE id=?")->execute($objMatch->team_home);
				$team_away=$this->Database->prepare("SELECT * FROM tl_lm_teams WHERE id=?")->execute($objMatch->team_away);
				$formated_start=new DateTime(date("r",$objMatch->starttime));
				$formated_end=new DateTime(date("r",$objMatch->endtime));
				switch($objMatch->venue)
				{
					case 'H':
						$location=$team_home->location;
						$street=$team_home->street;
						$zip=$team_home->zip;
						$city=$team_home->city;
						$region=$team_home->region;
						break;
					case 'A':
						$location=$team_away->location;
						$street=$team_away->street;
						$zip=$team_away->zip;
						$city=$team_away->city;
						$region=$team_away->region;
						break;
					case 'O':
						$location=$objMatch->location;
						$street=$objMatch->street;
						$zip=$objMatch->zip;
						$city=$objMatch->city;
						$region=$objMatch->region;
						break;
					default:
						$location=$team_home->location;
						$street=$team_home->street;
						$zip=$team_home->zip;
						$city=$team_home->city;
						$region=$team_home->region;
				}
				$arrMatch=array(
					'team_home'=>$team_home->name,
					'team_away'=>$team_away->name,
					'home_own'=>$team_home->ownteam,
					'away_own'=>$team_away->ownteam,
					'date_start'=>$objMatch->startdate,
					'time_start'=>$objMatch->starttime,
					'formated_start'=>$formated_start->format("c"),
					'date_end'=>$objMatch->enddate,
					'time_end'=>$objMatch->endtime,
					'formated_end'=>$formated_end->format("c"),
					'score_home'=>$score_home,
					'score_away'=>$score_away,
					'result_confirmed'=>$objMatch->result_confirmed,
					'different_points'=>$objMatch->different_points,
					'location'=>$location,
					'street'=>$street,
					'zip'=>$zip,
					'city'=>$city,
					'region'=>$region,
					'website'=>$objMatch->website,
					'picture'=>$objMatch->picture
				);
				$this->Template->arrMatch=$arrMatch;
				$this->Template->se_friendly_tags=$this->lm_se_friendly;
				$this->Template->hasMatchid=$matchid;
			}
		}//if($matchid)
	}
}
