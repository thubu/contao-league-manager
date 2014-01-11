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
 * Class lm_contestreader_teams
 *
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    Controller
 */
class lm_contestreader_basic extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'lm_contestreader_basic';


	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$return = "Contest reader - Basic information<br />";
			if($this->lm_usefixedcontest=="1"){
				$objContest =$this->Database->prepare("SELECT * FROM tl_lm_contests WHERE id=?")->execute($this->lm_contest);
				$return.="Fixed contest: " . $objContest->name . "<br />";
			}
			else
			{
				$return.="Variable contest <br />";
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
			$arrTeams = array();
			$objContest = $this->Database->prepare("SELECT * FROM tl_lm_contests WHERE id=?")->execute($contestid);
			$this->Template->contest = $objContest->name;
			switch($objContest->mode)
			{
				case 'L':
					$this->Template->mode=$GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['type_league'];
					break;
				case 'T':
					$this->Template->mode=$GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['type_tournament'];
					break;
				default:
					$this->Template->mode=$GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['type_tournament'];
					break;
			}
			$this->Template->date_start = date($GLOBALS['TL_CONFIG']['dateFormat'],$objContest->date_start);
			$this->Template->date_end = date($GLOBALS['TL_CONFIG']['dateFormat'],$objContest->date_end);
			$this->Template->place_decent_comment = $objContest->place_decent_comment;
			$this->Template->place_decentrelegation_comment = $objContest->place_decentrelegation_comment;
			$this->Template->place_ascent_comment = $objContest->place_ascent_comment;
			$this->Template->place_ascentrelegation_comment = $objContest->place_ascentrelegation_comment;

			$this->Template->place_specialplace_comment = $objContest->place_specialplace_comment;
			$this->Template->playingtime = $objContest->playingtime;
			$this->Template->playingperiods = $objContest->playingperiods;
			$this->Template->halftimebreak = $objContest->halftimebreak;
			$this->Template->overtime = $objContest->overtime;
			$this->Template->overtime_time = $objContest->overtime_time;
			$this->Template->overtime_break = $objContest->overtime_break;
			$this->Template->overtime_periods = $objContest->overtime_periods;
			$this->Template->overtime_comment = $objContest->overtime_comment;
			$this->Template->penalty_shootout = $objContest->penalty_shootout;
			$this->Template->hasContestid=$contestid;
		}//if($contestid)
	}
}
