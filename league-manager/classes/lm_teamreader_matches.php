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
 * Class lm_contestreader_matches
 *
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    Controller
 */
class lm_teamreader_matches extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'lm_teamreader_matches';

	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$return="Team reader - matches<br />";
			if($this->lm_usefixedteam=="1"){
				$objTeam =$this->Database->prepare("SELECT * FROM tl_lm_teams WHERE id=?")->execute($this->lm_team);
				$return.="Fixed team: " . $objTeam->name;
			}
			else
			{
				$return.="Variable team";
			}
			if($this->lm_usefixedcontest=="1"){
				$objContest =$this->Database->prepare("SELECT * FROM tl_lm_contests WHERE id=?")->execute($this->lm_contest);
				$return.="Fixed contest: " . $objContest->name . " <br />";
			}
			else
			{
				$return.="Variable contest <br />";
			}
			if($this->lm_template=="div")
			{
				$return.=$GLOBALS['TL_LANG']['league-manager']['misc']['with_div'];
			}
			else
			{
				$return.=$GLOBALS['TL_LANG']['league-manager']['misc']['with_table'];
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
		switch($this->lm_template){
			case "div":
				$objTemplate = new FrontendTemplate("lm_teamreader_matches");
				break;
			case "table":
				$objTemplate = new FrontendTemplate("lm_teamreader_matches_table");
				break;
			default:
				$objTemplate = new FrontendTemplate("lm_teamreader_matches");
		}
		$this->Template=$objTemplate;

		//Get contest id from get variable or from content element settings
		if($this->lm_usefixedteam=="1"){
			$teamid = $this->lm_team;
		}
		else
		{
			$teamid = $this->Input->get('lm_team');
		}

		if($teamid)
		{
			$arrMatches = array();
			$arrRounds=array();
			if($this->lm_usefixedcontest=="1"){
				$contestid = $this->lm_contest;
			}
			else
			{
				$contestid = $this->Input->get('lm_contest');
			}
			if ($this->lm_useredirectmatch==1)
			{
				$objTargetPage = $this->Database->prepare("SELECT id, alias FROM tl_page WHERE id=?")
														->limit(1)
														->execute($this->lm_redirectmatch);
			}
			if($contestid)
			{
				$objRounds= $this->Database->prepare("SELECT * FROM tl_lm_rounds WHERE pid=? ORDER BY round_no ASC")->execute($contestid);
				$i=0;
				while($objRounds->next()){
					$i++;
					$arrRounds[$i]=array(
						'roundid'=>$objRounds->id,
						'roundname'=>$objRounds->name,
						'dates_finalized'=>$objRounds->dates_finalized
					);
					$objMatches = $this->Database->prepare("SELECT * FROM tl_lm_matches WHERE pid=? AND (team_home=? OR team_away=?) ORDER BY startdate,starttime ASC")->execute($objRounds->id,$teamid,$teamid);
					while($objMatches->next()){
						$home = $this->Database->prepare("SELECT * FROM tl_lm_teams WHERE id=?")->execute($objMatches->team_home);
						$away = $this->Database->prepare("SELECT * FROM tl_lm_teams WHERE id=?")->execute($objMatches->team_away);

						if($objMatches->score_home!=""){
							$homescore=$objMatches->score_home;
						}
						else{
							$homescore='-';
						}
						if($objMatches->score_away!=""){
							$awayscore=$objMatches->score_away;
						}
						else{
							$awayscore='-';
						}

						if($objMatches->halftimescore_home!=""){
							$homescorehalftime=$objMatches->halftimescore_home;
						}
						else{
							$homescorehalftime='-';
						}
						if($objMatches->halftimescore_away!=""){
							$awayscorehalftime=$objMatches->halftimescore_away;
						}
						else{
							$awayscorehalftime='-';
						}

						if(($this->lm_useredirectmatch==1)&&($this->lm_redirectmatch!=0))
						{
							$redirect=$this->generateFrontendUrl($objTargetPage->row(),'/lm_match/' . $objMatches->id);
						}
						else
						{
							$redirect='';
						}

				if (!is_numeric($home->logo))
				{
				    return '<p class="error">'.$GLOBALS['TL_LANG']['ERR']['version2format'].'</p>';
				}
				$objFile = \FilesModel::findByPk($home->logo);
				$home->logo = $objFile->path;




						$arrMatches[$i][]=array(
							'matchid'=>$objMatches->id,
							'startdate'=>$objMatches->startdate,
							'starttime'=>$objMatches->starttime,
							'home'=>$home->name,
							'homeid'=>$home->id,
							'homeshort'=>$home->shortname,
							'homelogo'=>$home->logo,
							'homescore'=>$homescore,
							'homescorehalftime'=>$homescorehalftime,
							'home_own'=>$home->ownteam,
							'away'=>$away->name,
							'awayid'=>$away->id,
							'awayshort'=>$away->shortname,
							'awaylogo'=>$away->logo,
							'awayscore'=>$awayscore,
							'awayscorehalftime'=>$awayscorehalftime,
							'away_own'=>$away->ownteam,
							'resultconfirmed'=>$objMatches->result_confirmed,
							'different_points'=>$objMatches->different_points,
							'points_home'=>$objMatches->points_home,
							'points_away'=>$objMatches->points_away,
							'redirect'=>$redirect
						);
					}
				}
			}//if(contestid)
			else
			{
				$objMatches = $this->Database->prepare("SELECT * FROM tl_lm_matches WHERE (team_home=? OR team_away=?) ORDER BY startdate,starttime ASC")->execute($objRounds->id,$teamid,$teamid);
				while($objMatches->next()){
					$home = $this->Database->prepare("SELECT * FROM tl_lm_teams WHERE id=?")->execute($objMatches->team_home);
					$away = $this->Database->prepare("SELECT * FROM tl_lm_teams WHERE id=?")->execute($objMatches->team_away);

					if($objMatches->score_home!=""){
						$homescore=$objMatches->score_home;
					}
					else{
						$homescore='-';
					}
					if($objMatches->score_away!=""){
						$awayscore=$objMatches->score_away;
					}
					else{
						$awayscore='-';
					}

					if($objMatches->halftimescore_home!=""){
						$homescorehalftime=$objMatches->halftimescore_home;
					}
					else{
						$homescorehalftime='-';
					}
					if($objMatches->halftimescore_away!=""){
						$awayscorehalftime=$objMatches->halftimescore_away;
					}
					else{
						$awayscorehalftime='-';
					}


				if (!is_numeric($home->logo))
				{
				    return '<p class="error">'.$GLOBALS['TL_LANG']['ERR']['version2format'].'</p>';
				}
				$objFile = \FilesModel::findByPk($objMatches->homelogo);
				$home->logo = $objFile->path;


					$arrMatches[$i][]=array(
						'matchid'=>$objMatches->id,
						'startdate'=>$objMatches->startdate,
						'starttime'=>$objMatches->starttime,
						'home'=>$home->name,
						'homeid'=>$home->id,
						'homeshort'=>$home->shortname,
						'homelogo'=>$home->logo,
						'homescore'=>$homescore,
						'homescorehalftime'=>$homescorehalftime,
						'home_own'=>$home->ownteam,
						'away'=>$away->name,
						'awayid'=>$away->id,
						'awayshort'=>$away->shortname,
						'awaylogo'=>$away->logo,
						'awayscore'=>$awayscore,
						'awayscorehalftime'=>$awayscorehalftime,
						'away_own'=>$away->ownteam,
						'resultconfirmed'=>$objMatches->result_confirmed,
						'different_points'=>$objMatches->different_points,
						'points_home'=>$objMatches->points_home,
						'points_away'=>$objMatches->points_away,
						'redirect'=>$this->generateFrontendUrl($objTargetPage->row(),'/lm_match/' . $objMatches->id)
					);
				}
			}
			$this->Template->round_no=$i;
			$this->Template->rounds=$arrRounds;
			$this->Template->matches=$arrMatches;
			$this->Template->useredirectmatch=$this->lm_useredirectmatch;
			$this->Template->show_logo=$this->lm_showlogo;

			$this->Template->hasTeamid=$teamid;
		}//if($teamid)
	} //protected function compile()
}
