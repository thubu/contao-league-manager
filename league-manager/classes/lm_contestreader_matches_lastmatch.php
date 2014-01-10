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
 * Class lm_contestreader_matches_lastmatch
 *
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    Controller
 */
class lm_contestreader_matches_lastmatch extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'lm_contestreader_matches_lastmatch';


	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$return="Contest reader - matches_lastmatch<br />";
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
				$objTemplate = new FrontendTemplate("lm_contestreader_matches_lastmatch");
				break;
			case "table":
				$objTemplate = new FrontendTemplate("lm_contestreader_matches_lastmatch_table");
				break;
			default:
				$objTemplate = new FrontendTemplate("lm_contestreader_matches_lastmatch");
		}
		$this->Template=$objTemplate;

		//Get contest id from get variable or from content element settings
		if($this->lm_usefixedcontest=="1"){
			$contestid = $this->lm_contest;
		}
		else
		{
			$contestid = $this->Input->get('lm_contest');
		}

		if($contestid)
		{
			$arrMatches = array();
			$arrRounds=array();
			$objRounds= $this->Database->prepare("SELECT * FROM tl_lm_rounds WHERE pid=? ORDER BY round_no ASC")->execute($contestid);
			if ($this->lm_useredirectmatch==1)
			{
				$objTargetPage = $this->Database->prepare("SELECT id, alias FROM tl_page WHERE id=?")
														->limit(1)
														->execute($this->lm_redirectmatch);
			}
			$i=0;
			while($objRounds->next()){
				$i++;
				$arrRounds[$i]=array(
					'roundid'=>$objRounds->id,
					'roundname'=>$objRounds->name,
					'dates_finalized'=>$objRounds->dates_finalized
				);
				$objMatches = $this->Database->prepare("SELECT * FROM tl_lm_matches WHERE pid=? ORDER BY startdate,starttime DESC LIMIT 0,1")->execute($objRounds->id);
				while($objMatches->next()){
					$home = $this->Database->prepare("SELECT * FROM tl_lm_teams WHERE id=?")->execute($objMatches->team_home);
					$away = $this->Database->prepare("SELECT * FROM tl_lm_teams WHERE id=?")->execute($objMatches->team_away);

					if($objMatches->score_home!=''){
						$homescore=$objMatches->score_home;
					}
					else{
						$homescore='-';
					}
					if($objMatches->score_away!=''){
						$awayscore=$objMatches->score_away;
					}
					else{
						$awayscore='-';
					}
					if(($this->lm_useredirectmatch==1)&&($this->lm_redirectmatch!=0))
					{
						$redirect=$this->generateFrontendUrl($objTargetPage->row(),'/lm_match/' . $objMatches->id);
					}
					else
					{
						$redirect='';
					}
					$arrMatches[$i][]=array(
						'matchid'=>$objMatches->id,
						'startdate'=>$objMatches->startdate,
						'starttime'=>$objMatches->starttime,
						'home'=>$home->name,
						'homeid'=>$home->id,
						'homeshort'=>$home->shortname,
						'homelogo'=>$home->logo,
						'homescore'=>$homescore,
						'home_own'=>$home->ownteam,
						'away'=>$away->name,
						'awayid'=>$away->id,
						'awayshort'=>$away->shortname,
						'awaylogo'=>$away->logo,
						'awayscore'=>$awayscore,
						'away_own'=>$away->ownteam,
						'resultconfirmed'=>$objMatches->result_confirmed,
						'different_points'=>$objMatches->different_points,
						'points_home'=>$objMatches->points_home,
						'points_away'=>$objMatches->points_away,
						'redirect'=>$redirect
					);
				}
			}
			$this->Template->round_no=$i;
			$this->Template->rounds=$arrRounds;
			$this->Template->matches=$arrMatches;
			$this->Template->useredirectmatch=$this->lm_useredirectmatch;

			$this->Template->hasContestid=$contestid;
		}//if($contestid)
	} //protected function compile()
}
