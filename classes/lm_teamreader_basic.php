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
 * Class lm_teamreader_basic
 *
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    Controller
 */
class lm_teamreader_basic extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'lm_teamreader_basic';


	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$return = "Team reader - Basic data<br />";
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
			$contests=array();
			$objteam =$this->Database->prepare("SELECT * FROM tl_lm_teams WHERE id=?")->execute($teamid);
			if ($objteam->numRows>0){
				$this->Template->team_found=1;
				$this->Template->id=$objteam->id;
				$this->Template->name=$objteam->name;
				$this->Template->shortname=$objteam->shortname;
				if($objteam->website!='')
				{
					if (strtolower(substr($objteam->website, 0, 4))!='http')
					{
						$website='http://' . $objteam->website;
					}
					else
					{
						$website=$objteam->website;
					}
				}
				else
				{
					$website='';
				}

				$this->Template->website=$website;
				$this->Template->location=$objteam->location;
				$this->Template->street=$objteam->street;
				$this->Template->zip=$objteam->zip;
				$this->Template->city=$objteam->city;
				$this->Template->region=$objteam->region;
				if($this->lm_showlogo==1)
				{
					$this->Template->logo=$objteam->logo;
				}
				else
				{
					$this->Template->logo='';
				}

			}
			else{
				$this->Template->team_found=0;
			}
			$this->Template->hasTeamid=$teamid;
			$this->Template->se_friendly=$this->lm_se_friendly;
		}//if($teamid)
	}
}
