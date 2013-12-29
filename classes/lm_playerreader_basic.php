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
 * Class lm_playerreader_basic
 *
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    Controller
 */
class lm_playerreader_basic extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'lm_playerreader_basic';


	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$return = "Player reader - Basic information<br />";
			if($this->lm_usefixedplayer=="1"){
				$objPlayer =$this->Database->prepare("SELECT * FROM tl_lm_players WHERE id=?")->execute($this->lm_player);
				$return.="Fixed player: " . $objPlayer->name;
			}
			else
			{
				$return.="Variable player";
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
		//Get player id from get variable or from content element settings
		if($this->lm_usefixedplayer=="1"){
			$playerid = $this->lm_player;
		}
		else
		{
			$playerid = $this->Input->get('lm_player');
		}


		if($playerid)
		{
			$objPlayer=$this->Database->prepare("SELECT * FROM tl_lm_players WHERE id=?")->execute($playerid);

			$arrPlayer=array(
				'name'=>$objPlayer->name,
				'picture'=>$objPlayer->picture,
				'position'=>$objPlayer->position,
				'nickname'=>$objPlayer->nickname,
				'website'=>$objPlayer->website,
				'birthday'=>$objPlayer->birthday,
				'addinfo'=>$objPlayer->addinfo
			);
			$this->Template->player=$arrPlayer;
			$this->Template->hasPlayerid=$playerid;
			$this->Template->se_friendly_tags=$this->lm_se_friendly;
		}
	}
}
