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
 * Class lm_matchreader_events
 *
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    Controller
 */
class lm_matchreader_events extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'lm_matchreader_events';


	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$return = "Match reader - events<br />";
			if($this->lm_usefixedmatch=="1"){
				$objEvent =$this->Database->prepare("SELECT * FROM tl_lm_matches WHERE id=?")->execute($this->lm_match);
				$return.="Fixed match: " . $objEvent->team_home . " vs. " . $objEvent->team_away . "<br />";
			}
			else
			{
				$return.="Variable match<br />";
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
				$objTemplate = new FrontendTemplate("lm_matchreader_events");
				break;
			case "table":
				$objTemplate = new FrontendTemplate("lm_matchreader_events_table");
				break;
			default:
				$objTemplate = new FrontendTemplate("lm_matchreader_events");
		}
		$this->Template=$objTemplate;

		//Get match id from get variable or from content element settings
		if($this->lm_usefixedmatch=="1"){
			$matchid = $this->lm_match;
		}
		else
		{
			$matchid = $this->Input->get('lm_match');
		}


		$arrEvents=array();
		if($matchid)
		{
			$objEvent =$this->Database->prepare("SELECT * FROM tl_lm_match_events WHERE pid=?")->execute($matchid);
			while($objEvent->next())
			{
				$objEventmaster=$this->Database->prepare("SELECT * FROM tl_lm_event_masters WHERE id=?")->execute($objEvent->event_type);
				$master_picture=$objEventmaster->picture;
				$picture=$objEvent->picture;
				$add_text=$objEvent->additional_text;
				$text=$objEventmaster->eventtext;
				$objTeam1=$this->Database->prepare("SELECT id,name,website,hasinternal_page,internal_page FROM tl_lm_teams WHERE id=?")->execute($objEvent->team1);
				$objTeam2=$this->Database->prepare("SELECT id,name,website,hasinternal_page,internal_page FROM tl_lm_teams WHERE id=?")->execute($objEvent->team2);
				$objPlayer1=$this->Database->prepare("SELECT id,name,website,hasinternal_page,internal_page FROM tl_lm_players WHERE id=?")->execute($objEvent->player1);
				$objPlayer2=$this->Database->prepare("SELECT id,name,website,hasinternal_page,internal_page FROM tl_lm_players WHERE id=?")->execute($objEvent->player2);

				$text=str_replace('%et%',$objEvent->event_time,$text);
				$add_text=str_replace('%et%',$objEvent->event_time,$add_text);

				$text=str_replace('%etu%',$objEvent->event_time_unit,$text);
				$add_text=str_replace('%etu%',$objEvent->event_time_unit,$add_text);

				$text=str_replace('%rh%',$objEvent->result_home,$text);
				$add_text=str_replace('%rh%',$objEvent->result_home,$add_text);

				$text=str_replace('%ra%',$objEvent->result_away,$text);
				$add_text=str_replace('%ra%',$objEvent->result_away,$add_text);

				Switch($this->lm_linktype_player)
				{
					case 'NOL':
						$text=str_replace('%p1%',$objPlayer1->name,$text);
						$text=str_replace('%p2%',$objPlayer2->name,$text);
						$add_text=str_replace('%p1%',$objPlayer1->name,$add_text);
						$add_text=str_replace('%p2%',$objPlayer2->name,$add_text);
						break;
					case 'FIX':
						if($this->lm_redirect!=0)
						{
							$objTargetPagePlayer = $this->Database->prepare("SELECT id, alias FROM tl_page WHERE id=?")
															->limit(1)
															->execute($this->lm_redirectplayer);


							$redirectplayer = $this->generateFrontendUrl($objTargetPagePlayer->row(),'/lm_player/' . $objPlayer1->id);
							$text=str_replace('%p1%','<a href="' . $redirectplayer . '">' . $objPlayer1->name . '</a>',$text);
							$add_text=str_replace('%p1%','<a href="' . $redirectplayer . '">' . $objPlayer1->name . '</a>',$add_text);

							$redirectplayer = $this->generateFrontendUrl($objTargetPagePlayer->row(),'/lm_player/' . $objPlayer2->id);
							$text=str_replace('%p2%','<a href="' . $redirectplayer . '">' . $objPlayer2->name . '</a>',$text);
							$add_text=str_replace('%p2%','<a href="' . $redirectplayer . '">' . $objPlayer2->name . '</a>',$add_text);
						}
						else
						{
							$text=str_replace('%p1%',$objPlayer1->name,$text);
							$text=str_replace('%p2%',$objPlayer2->name,$text);
							$add_text=str_replace('%p1%',$objPlayer1->name,$add_text);
							$add_text=str_replace('%p2%',$objPlayer2->name,$add_text);
						}

						break;
					case 'INT':
						if(($objPlayer1->hasinternal_page==1)&&($objPlayer1->internal_page!=0))
						{
							$objTargetPagePlayer = $this->Database->prepare("SELECT id, alias FROM tl_page WHERE id=?")
														->limit(1)
														->execute($objPlayer1->internal_page);
							$redirectplayer = $this->generateFrontendUrl($objTargetPagePlayer->row(),'/lm_player/' . $objPlayer1->id);
							$text=str_replace('%p1%','<a href="' . $redirectplayer . '">' . $objPlayer1->name . '</a>',$text);
							$add_text=str_replace('%p1%','<a href="' . $redirectplayer . '">' . $objPlayer1->name . '</a>',$add_text);
						}
						else
						{
							$text=str_replace('%p1%',$objPlayer1->name,$text);
							$add_text=str_replace('%p1%',$objPlayer1->name,$add_text);
						}

						if(($objPlayer2->hasinternal_page==1) && ($objPlayer2->internal_page!=0))
						{
							$objTargetPagePlayer = $this->Database->prepare("SELECT id, alias FROM tl_page WHERE id=?")
														->limit(1)
														->execute($objPlayer2->internal_page);
							$redirectplayer = $this->generateFrontendUrl($objTargetPagePlayer->row(),'/lm_player/' . $objPlayer2->id);
							$text=str_replace('%p2%','<a href="' . $redirectplayer . '">' . $objPlayer2->name . '</a>',$text);
							$add_text=str_replace('%p2%','<a href="' . $redirectplayer . '">' . $objPlayer2->name . '</a>',$add_text);
						}
						else
						{
							$text=str_replace('%p2%',$objPlayer2->name,$text);
							$add_text=str_replace('%p2%',$objPlayer2->name,$add_text);
						}
						break;
					case 'EXT':
						if($objPlayer1->website!='')
						{
							$text=str_replace('%p1%','<a href="' . $objPlayer1->website . '">' . $objPlayer1->name . '</a>',$text);
							$add_text=str_replace('%p1%','<a href="' . $objPlayer1->website . '">' . $objPlayer1->name . '</a>',$add_text);
						}
						else
						{
							$text=str_replace('%p1%',$objPlayer1->name,$text);
							$add_text=str_replace('%p1%',$objPlayer1->name,$add_text);
						}

						if($objPlayer2->website!='')
						{
							$text=str_replace('%p2%','<a href="' . $objPlayer2->website . '">' . $objPlayer2->name . '</a>',$text);
							$add_text=str_replace('%p2%','<a href="' . $objPlayer2->website . '">' . $objPlayer2->name . '</a>',$add_text);
						}
						else
						{
							$text=str_replace('%p2%',$objPlayer2->name,$text);
							$add_text=str_replace('%p2%',$objPlayer2->name,$add_text);
						}
						break;
					default:
						$text=str_replace('%p1%',$objPlayer1->name,$text);
						$text=str_replace('%p2%',$objPlayer2->name,$text);
						$add_text=str_replace('%p1%',$objPlayer1->name,$add_text);
						$add_text=str_replace('%p2%',$objPlayer2->name,$add_text);
				}

				switch($this->lm_linktype_team)
				{
					case 'NOL':
						$text=str_replace('%t1%',$objTeam1->name,$text);
						$text=str_replace('%t2%',$objTeam2->name,$text);
						$add_text=str_replace('%t1%',$objTeam1->name,$add_text);
						$add_text=str_replace('%t2%',$objTeam2->name,$add_text);
						break;
					case 'FIX':
						if($this->lm_redirectteam!=0)
						{
							$objTargetPageTeam = $this->Database->prepare("SELECT id, alias FROM tl_page WHERE id=?")
														->limit(1)
														->execute($this->lm_redirectteam);
							$redirectteam = $this->generateFrontendUrl($objTargetPageTeam->row(),'/lm_team/' . $objTeam1->id);
							$text=str_replace('%t1%','<a href="' . $redirectteam . '">' . $objTeam1->name . '</a>',$text);
							$add_text=str_replace('%t1%','<a href="' . $redirectteam . '">' . $objTeam1->name . '</a>',$add_text);
							$redirectteam = $this->generateFrontendUrl($objTargetPageTeam->row(),'/lm_team/' . $objTeam2->id);
							$text=str_replace('%t2%','<a href="' . $redirectteam . '">' . $objTeam2->name . '</a>',$text);
							$add_text=str_replace('%t2%','<a href="' . $redirectteam . '">' . $objTeam2->name . '</a>',$add_text);
						}
						else
						{
							$text=str_replace('%t1%',$objTeam1->name,$text);
							$text=str_replace('%t2%',$objTeam2->name,$text);
							$add_text=str_replace('%t1%',$objTeam1->name,$add_text);
							$add_text=str_replace('%t2%',$objTeam2->name,$add_text);
						}

						break;
					case 'INT':
						if(($objTeam1->hasinternal_page==1)&&($objTeam1->internal_page!=0))
						{
							$objTargetPageTeam = $this->Database->prepare("SELECT id, alias FROM tl_page WHERE id=?")
														->limit(1)
														->execute($objTeam1->internal_page);
							$redirectteam = $this->generateFrontendUrl($objTargetPageTeam->row(),'/lm_team/' . $objTeam1->id);
							$text=str_replace('%t1%','<a href="' . $redirectteam . '">' . $objTeam1->name . '</a>',$text);
							$add_text=str_replace('%t1%','<a href="' . $redirectteam . '">' . $objTeam1->name . '</a>',$add_text);
						}
						else
						{
							$text=str_replace('%t1%',$objTeam1->name,$text);
							$add_text=str_replace('%t1%',$objTeam1->name,$add_text);
						}
						if(($objTeam2->hasinternal_page==1)&&($objTeam2->internal_page!=0))
						{
							$objTargetPageTeam = $this->Database->prepare("SELECT id, alias FROM tl_page WHERE id=?")
														->limit(1)
														->execute($objTeam2->internal_page);
							$redirectteam = $this->generateFrontendUrl($objTargetPageTeam->row(),'/lm_team/' . $objTeam2->id);
							$text=str_replace('%t2%','<a href="' . $redirectteam . '">' . $objTeam2->name . '</a>',$text);
							$add_text=str_replace('%t2%','<a href="' . $redirectteam . '">' . $objTeam2->name . '</a>',$add_text);
						}
						else
						{
							$text=str_replace('%t2%',$objTeam2->name,$text);
							$add_text=str_replace('%t2%',$objTeam2->name,$add_text);
						}
						break;
					case 'EXT':
						if($objTeam1->website!='')
						{
							$text=str_replace('%t1%','<a href="' . $objTeam1->website . '">' . $objTeam1->name . '</a>',$text);
							$add_text=str_replace('%t1%','<a href="' . $objTeam1->website . '">' . $objTeam1->name . '</a>',$add_text);
						}
						else
						{
							$text=str_replace('%t1%',$objTeam1->name,$text);
							$add_text=str_replace('%t1%',$objTeam1->name,$add_text);
						}
						if($objTeam2->website!='')
						{
							$text=str_replace('%t2%','<a href="' . $objTeam2->website . '">' . $objTeam2->name . '</a>',$text);
							$add_text=str_replace('%t2%','<a href="' . $objTeam2->website . '">' . $objTeam2->name . '</a>',$add_text);
						}
						else
						{
							$text=str_replace('%t2%',$objTeam2->name,$text);
							$add_text=str_replace('%t2%',$objTeam2->name,$add_text);
						}
					default:
						$text=str_replace('%t1%',$objTeam1->name,$text);
						$text=str_replace('%t2%',$objTeam2->name,$text);
				}

				$text=str_replace('%txt1%',$objEvent->text1,$text);
				$add_text=str_replace('%txt1%',$objEvent->text1,$add_text);

				$text=str_replace('%txt2%',$objEvent->text2,$text);
				$add_text=str_replace('%txt2%',$objEvent->text2,$add_text);

				$text=str_replace('%num1%',$objEvent->number1,$text);
				$add_text=str_replace('%num1%',$objEvent->number1,$add_text);

				$text=str_replace('%num2%',$objEvent->number2,$text);
				$add_text=str_replace('%num2%',$objEvent->number2,$add_text);

				$text=str_replace('%pd%',$objEvent->penalty_duration,$text);
				$add_text=str_replace('%pd%',$objEvent->penalty_duration,$add_text);

				$text=str_replace('%pdu%',$objEvent->penalty_duration_unit,$text);
				$add_text=str_replace('%pdu%',$objEvent->penalty_duration_unit,$add_text);


				$arrEvents[]=array(
					'text'=>$text,
					'master_picture'=>$master_picture,
					'picture'=>$picture,
					'add_text'=>$add_text
				);
			}


			$this->Template->events=$arrEvents;
			$this->Template->hasMatchid=$matchid;
		}
	}
}
