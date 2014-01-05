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
 * Class lm_clubreader_basic
 *
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    Controller
 */
class lm_clubreader_basic extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'lm_clubreader_basic';


	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$return = "Club reader - Basic data<br />";
			if($this->lm_usefixedclub=="1")
			{
				$objClub =$this->Database->prepare("SELECT * FROM tl_lm_clubs WHERE id=?")->execute($this->lm_club);
				$return.="Fixed club: " . $objClub->name;
			}
			else
			{
				$return.="Variable club";
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
		//Get club id from get variable or from content element settings
		if($this->lm_usefixedclub=="1")
		{
			$clubid = $this->lm_club;
		}
		else
		{
			$clubid = $this->Input->get('lm_club');
		}

		if($clubid)
		{
			$contests=array();
			$objclub =$this->Database->prepare("SELECT * FROM tl_lm_clubs WHERE id=?")->execute($clubid);

			if (!is_numeric($objclub->logo))
			{
			    return '<p class="error">'.$GLOBALS['TL_LANG']['ERR']['version2format'].'</p>';
			}
			$objFile = \FilesModel::findByPk($objclub->logo);
			$objclub->logo=$objFile->path;

			if ($objclub->numRows>0)
				{
				$this->Template->club_found=1;
				$this->Template->id=$objclub->id;
				$this->Template->name=$objclub->name;
				$this->Template->shortname=$objclub->shortname;
				if($objclub->website!='')
				{
					if (strtolower(substr($objclub->website, 0, 4))!='http')
					{
						$website='http://' . $objclub->website;
					}
					else
					{
						$website=$objclub->website;
					}
				}
				else
				{
					$website='';
				}

				$this->Template->website=$website;
				$this->Template->location=$objclub->founded;
				$this->Template->street=$objclub->street;
				$this->Template->zip=$objclub->zip;
				$this->Template->city=$objclub->city;
				$this->Template->country=$objclub->country;
				$this->Template->phone=$objclub->phone;
				$this->Template->fax=$objclub->fax;
				$this->Template->mail=$objclub->mail;
				if($this->lm_showlogo==1)
				{
					$this->Template->logo=$objFile->path;
				}
				else
				{
					$this->Template->logo='';
				}

			}
			else
			{
				$this->Template->club_found=0;
			}
			$this->Template->hasClubid=$clubid;
			$this->Template->se_friendly=$this->lm_se_friendly;
		}//if($clubid)
	}
}

