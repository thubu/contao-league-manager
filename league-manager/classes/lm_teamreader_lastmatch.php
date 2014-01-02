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
 * Class lm_teamreader_lastmatch
 *
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    Controller
 */
class lm_teamreader_lastmatch extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'lm_teamreader_lastmatch';

	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$return="Last match per team<br />";
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
					$objTemplate = new FrontendTemplate("lm_teamreader_lastmatch");
					break;
				case "table":
					$objTemplate = new FrontendTemplate("lm_teamreader_lastmatch_table");
					break;
				default:
					$objTemplate = new FrontendTemplate("lm_teamreader_lastmatch");
			}
		$this->Template=$objTemplate;



		//Get team id from get variable or from content element settings
		if($this->lm_usefixedteam=="1"){
			$teamid = $this->lm_team;
		}
		else
		{
			$teamid = $this->Input->get('lm_team');
		}
		if($teamid)
		{
			$objMatch = $this->Database->prepare("SELECT * FROM tl_lm_matches WHERE (team_home=? or team_away=?) AND starttime<? AND result_confirmed=1 ORDER BY starttime DESC LIMIT 0,1")->execute($teamid,$teamid,time());

			if($objMatch->numRows>0)
			{

				$home=$this->Database->prepare("SELECT * FROM tl_lm_teams WHERE id=?")->execute($objMatch->team_home);
				$away=$this->Database->prepare("SELECT * FROM tl_lm_teams WHERE id=?")->execute($objMatch->team_away);
				$this->Template->show_logo=$this->lm_showlogo;
				$this->Template->home_name=$home->name;


				if (!is_numeric($home->logo))
				{
				    return '<p class="error">'.$GLOBALS['TL_LANG']['ERR']['version2format'].'</p>';
				}
				$objFile = \FilesModel::findByPk($home->logo);
				$home->logo = $objFile->path;
				$this->Template->home_logo=$objFile->path;
				$this->Template->home_own=$home->ownteam;
				$this->Template->away_name=$away->name;
				if($objMatch->venue == 'H'){
					$this->Template->location=$home->location;
					$this->Template->city=$home->city;
				}
				else if($objMatch->venue == 'O'){
					$this->Template->location=$objMatch->location;
					$this->Template->city=$objMatch->city;
				}
				else{
					$this->Template->location=$away->location;
					$this->Template->city=$away->city;
				}
				$this->Template->away_name=$away->name;
				if (!is_numeric($away->logo))
				{
				    return '<p class="error">'.$GLOBALS['TL_LANG']['ERR']['version2format'].'</p>';
				}
				$objFile = \FilesModel::findByPk($away->logo);
				$away->logo = $objFile->path;
				$this->Template->away_logo=$objFile->path;


				$this->Template->away_own=$away->ownteam;
				$this->Template->bericht='index.php/matchleser/lm_match/' . $objMatch->id.'.html';
				$this->Template->home_score=$objMatch->score_home;
				$this->Template->away_score=$objMatch->score_away;
				$this->Template->home_halftimescore=$objMatch->halftimescore_home;
				$this->Template->away_halftimescore=$objMatch->halftimescore_away;
				$this->Template->match_found=1;
				$this->Template->date=date($GLOBALS['TL_CONFIG']['dateFormat'],$objMatch->startdate);
				$this->Template->time=date($GLOBALS['TL_CONFIG']['timeFormat'],$objMatch->starttime);
				$this->Template->useredirectteam=$this->lm_useredirectteam;
				$this->Template->useredirectmatch=$this->lm_useredirectmatch;
				if (($this->lm_useredirectteam==1)&&($this->lm_redirectteam!=0))
				{
					$objTargetPage = $this->Database->prepare("SELECT id, alias FROM tl_page WHERE id=?")
															->limit(1)
															->execute($this->lm_redirectteam);
					$this->Template->redirecthome = $this->generateFrontendUrl($objTargetPage->row(),'/lm_team/' . $home->id);
					$this->Template->redirectaway = $this->generateFrontendUrl($objTargetPage->row(),'/lm_team/' . $away->id);
				}
				else
				{
					$this->Template->redirecthome='';
					$this->Template->redirectaway='';
				}

				if (($this->lm_useredirectmatch==1)&&($this->lm_redirectmatch!=0))
				{
					$objTargetPage = $this->Database->prepare("SELECT id, alias FROM tl_page WHERE id=?")
															->limit(1)
															->execute($this->lm_redirectmatch);
					$this->Template->redirectmatch = $this->generateFrontendUrl($objTargetPage->row(),'/lm_match/' . $objMatch->id);
				}
				else
				{
					$this->Template->redirectmatch='';
				}
			}
			else
			{
				$this->Template->match_found=0;
			}
			$this->Template->hasTeamid=$teamid;
		}//if($teamid)
	}

}












