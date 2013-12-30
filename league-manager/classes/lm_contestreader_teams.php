<?php

/**
 *
 * PHP version 5
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    leaguemanager
 * @license    LGPL
 * @filesource
 */


/**
 * Class lm_contestreader_teams
 *
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    Controller
 */
class lm_contestreader_teams extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'lm_contestreader_teams';


	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$return = "Contest reader - teams<br />";
			if($this->lm_usefixedcontest=="1"){
				$objContest =$this->Database->prepare("SELECT * FROM tl_lm_contests WHERE id=?")->execute($this->lm_contest);
				$return.="Fixed contest: " . $objContest->name . "<br />";
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
			switch($this->lm_template){
				case "div":
					$objTemplate = new FrontendTemplate("lm_contestreader_teams");
					break;
				case "table":
					$objTemplate = new FrontendTemplate("lm_contestreader_teams_table");
					break;
				default:
					$objTemplate = new FrontendTemplate("lm_contestreader_teams");
			}
			$this->Template=$objTemplate;
			$arrTeams = array();
			$objContest = $this->Database->prepare("SELECT * FROM tl_lm_contests WHERE id=?")->execute($contestid);
			$arrTeamsid = deserialize($objContest->teams);
			$this->Template->contest = $objContest->name;
			$this->Template->mode = $objContest->mode;
			$this->Template->date_start = date($GLOBALS['TL_CONFIG']['dateFormat'],$objContest->date_start);
			$this->Template->date_end = date($GLOBALS['TL_CONFIG']['dateFormat'],$objContest->date_end);
			$this->Template->showlogo = $this->lm_showlogo;
			$this->Template->useredirectcontest=$this->lm_useredirectcontest;

			$i=0;
			$arrTeams=array();
			if(is_array($arrTeamsid))
			{
				foreach($arrTeamsid as $teamid){
					$i=$i+1;
					$team = $this->Database->prepare("SELECT * FROM tl_lm_teams WHERE id=?")->execute($teamid);
					switch($this->lm_linktype_team)
					{
						case 'NOL':
							$redirect='';
							break;
						case 'INT':
							if(($team->hasinternal_page==1)&&($this->internal_page!=0))
							{
								$objTargetPage = $this->Database->prepare("SELECT id, alias FROM tl_page WHERE id=?")
														->limit(1)
														->execute($this->internal_page);
								$redirect= $this->generateFrontendUrl($objTargetPage->row(),'/lm_team/' . $team->id);
							}
							else
							{
								$redirect='';
							}
							break;
						case 'EXT':
							if($team->website!='')
							{
								$redirect=$team->website;
							}
							else
							{
								$redirect='';
							}
							break;
						case 'FIX':
							if($this->lm_redirectteam!=0)
							{
								$objTargetPage = $this->Database->prepare("SELECT id, alias FROM tl_page WHERE id=?")
														->limit(1)
														->execute($this->lm_redirectteam);
								$redirect= $this->generateFrontendUrl($objTargetPage->row(),'/lm_team/' . $team->id);
							}
							else
							{
								$redirect='';
							}

							break;
						default:
							$redirect='';
					}
					$arrTeams[]=array(
					'id'=>$team->id,
					'name'=>$team->name,
					'shortname'=>$team->shortname,
					'logo'=>$team->logo,
					'redirect'=>$redirect,
					'class'=>(($team->ownteam == true) ? 'own ' : '') . (($i == 1) ? 'first ' : '') . (($i == count($arrTeamsid)) ? 'last ' : '') . ((($i % 2) == 0) ? 'odd' : 'even')
					);
				}
			}
			$this->Template->teams = $arrTeams;
			$this->Template->hasContestid=$contestid;
		}//if($contestid)
	}
}

