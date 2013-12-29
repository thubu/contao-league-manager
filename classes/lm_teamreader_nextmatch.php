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
 * Class lm_teamreader_nextmatch
 *
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    Controller
 */
class lm_teamreader_nextmatch extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'lm_teamreader_nextmatch';


	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$return="Next match per team<br />";
			if($this->lm_usefixedteam=="1"){
				$objTeam =$this->Database->prepare("SELECT * FROM tl_lm_teams WHERE id=?")->execute($this->lm_team);
				$return.="Fixed team: " . $objTeam->name;
			}
			else
			{
				$return.="Variable team";
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
			$objMatch = $this->Database->prepare("SELECT * FROM tl_lm_matches WHERE (team_home=? OR team_away=?) AND starttime>? ORDER BY starttime ASC LIMIT 0,1")->execute($teamid,$teamid,time());

			if($objMatch->numRows>0)
			{
				$home=$this->Database->prepare("SELECT * FROM tl_lm_teams WHERE id=?")->execute($objMatch->team_home);
				$away=$this->Database->prepare("SELECT * FROM tl_lm_teams WHERE id=?")->execute($objMatch->team_away);
				$this->Template->show_logo=$this->lm_showlogo;
				$this->Template->home_name=$home->name;
				$this->Template->home_logo=$home->logo;
				$this->Template->home_own=$home->ownteam;
				$this->Template->away_name=$away->name;
				$this->Template->away_logo=$away->logo;
				$this->Template->away_own=$away->ownteam;
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
