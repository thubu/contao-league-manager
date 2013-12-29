<?php if

/**
 * PHP version 5
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    leaguemanager
 * @license    LGPL
 * @filesource
 */


/**
 * Class lm_contestreader_crosstable
 *
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    Controller
 */
class lm_contestreader_crosstable extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'lm_contestreader_crosstable';


	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$return = "Contest reader - cross table<br />";
			if($this->lm_usefixedcontest=="1"){
				$objContest =$this->Database->prepare("SELECT * FROM tl_lm_contests WHERE id=?")->execute($this->lm_contest);
				$return.="Fixed contest: " . $objContest->name;
			}
			else
			{
				$return.="Variable contest";
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
			$arrTeams=array();
			$objContest =$this->Database->prepare("SELECT * FROM tl_lm_contests WHERE id=?")->execute($this->lm_contest);
			$teams=$this->Database->prepare("SELECT * FROM tl_lm_team_to_contest WHERE contest=? ORDER BY team ASC")->execute($this->lm_contest);
			while($teams->next()){
				$objTeam = $this->Database->prepare("SELECT * FROM tl_lm_teams WHERE id=?")->execute($teams->team);
				$arrTeams[$teams->team]=array(
				'id'=>$objTeam->id,
				'shortname'=>$objTeam->shortname,
				'teamname'=>$objTeam->name,
				'logo'=>$objTeam->logo,
				'ownteam'=>$objTeam->ownteam);
			}
			if ($this->lm_useredirectmatch==1)
			{
				$objTargetPage = $this->Database->prepare("SELECT id, alias FROM tl_page WHERE id=?")
														->limit(1)
														->execute($this->lm_redirectmatch);
			}
			$matches=array();
			$objRounds = $this->Database->prepare("SELECT * FROM tl_lm_rounds WHERE pid=? ORDER BY round_no ASC")->execute($this->lm_contest);
			while($objRounds->next()){
				$objMatches = $this->Database->prepare("SELECT * FROM tl_lm_matches WHERE pid=?")->execute($objRounds->id);
				while($objMatches->next()){
					$css_class='';
					if($objMatches->score_home==''){$score_home="-";}else{$score_home=$objMatches->score_home;} //set score to 0, when one part is missing
					if($objMatches->score_away==''){$score_away="-";}else{$score_away=$objMatches->score_away;}
					if(($arrTeams[$objMatches->team_home]['ownteam']==1	)||($arrTeams[$objMatches->team_away]['ownteam']==1)){$css_class='own';}
					if(($this->lm_useredirectmatch==1)&&($this->lm_redirectmatch!=0))
					{
						$redirect=$this->generateFrontendUrl($objTargetPage->row(),'/lm_match/' . $objMatches->id);
					}
					else
					{
						$redirect='';
					}
					$matches[$objMatches->team_home][$objMatches->team_away]=array('class'=>$css_class,'score_home'=>$score_home,'score_away'=>$score_away,'redirect'=>$redirect);
				}//end of while($objMatches->next())
			}//end of while($objRounds->next())
			$this->Template->teams=$arrTeams;
			$this->Template->matches=$matches;
			$this->Template->fields=deserialize($this->lm_tablefields);
			$this->Template->penalties=$arrPenalties;
			$this->Template->hasContestid=$contestid;
			$this->Template->useredirectmatch=$this->lm_useredirectmatch;
		}//if($contestid)
	}
}
