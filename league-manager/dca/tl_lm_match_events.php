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
 * Table tl_lm_match_events
 */
$GLOBALS['TL_DCA']['tl_lm_match_events'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'ptable'                      => 'tl_lm_matches',
		'enableVersioning'            => true,
		'onload_callback' => array
		(
			array('tl_lm_match_events', 'checkPalettes'),
			array('tl_lm_match_events', 'processOnload')
		)
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 4,
			'fields'                  => array('event_order'),
			'flag'                    => 1,
			'disableGrouping'         => true,
			'headerFields'            => array('team_home','team_away'),
			'panelLayout'             => 'filter;search,limit',
			'child_record_callback'   => array('tl_lm_match_events', 'listEvents')
		),
		'label' => array
		(
			'fields'                  => array('eventtype'),
			'format'                  => '%s'
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset();" accesskey="e"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_match_events']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif',
				'attributes'          => 'class="contextmenu"'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_match_events']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_match_events']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_match_events']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			),
			'up' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_match_events']['up'],
				'href'                => 'lm_act=up',
				'icon'                => 'up.gif'
			),
			'down' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_match_events']['down'],
				'href'                => 'lm_act=down',
				'icon'                => 'down.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array(''),
		'default'                     => 'event_type;{results},result_home,result_away;{teams},team1,team2;eventtext,picture'
	),

	// Subpalettes
	'subpalettes' => array
	(
		''                            => ''
	),

	// Fields
	'fields' => array
	(
		'event_type' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_match_events']['event_type'],
			'inputType'               => 'select',
			'reference'				  => &$GLOBALS['TL_LANG']['tl_lm_match_events']['event_type']['reference'],
			'options_callback'        => array('tl_lm_match_events', 'getEventtypes'),
			'eval'                    => array('mandatory'=>true,'submitOnChange'=>true,'includeBlankOption'=>true)
		),
		'event_order' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_match_events']['event_order'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'save_callback' => array
			(
				array('tl_lm_match_events', 'getOrderno')
			)
		),
		'event_time' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_match_events']['event_time'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false,'tl_class'=>'w50')
		),
		'event_time_unit' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_match_events']['event_time_unit'],
			'exclude'                 => false,
			'inputType'               => 'select',
			'options'				  => array('sec','min','hour','halftime','round','match','quarter','inning'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_lm_match_events']['event_time_unit']['reference'],
			'eval'                    => array('mandatory'=>false,'tl_class'=>'w50')
		),
		'result_home' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_match_events']['result_home'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false,'tl_class'=>'w50')
		),
		'result_away' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_match_events']['result_away'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false,'tl_class'=>'w50')
		),
		'team1' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_match_events']['team1'],
			'exclude'                 => false,
			'inputType'               => 'select',
			'options_callback'        => array('tl_lm_match_events', 'getTeams'),
			'eval'                    => array('mandatory'=>false,'tl_class'=>'w50')
		),
		'team2' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_match_events']['team2'],
			'exclude'                 => false,
			'inputType'               => 'select',
			'options_callback'        => array('tl_lm_match_events', 'getTeams'),
			'eval'                    => array('mandatory'=>false,'tl_class'=>'w50')
		),
		'player1' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_match_events']['player1'],
			'exclude'                 => false,
			'inputType'               => 'select',
			'options_callback'        => array('tl_lm_match_events', 'getPlayers'),
			'eval'                    => array('mandatory'=>false,'tl_class'=>'w50')
		),
		'player2' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_match_events']['player2'],
			'exclude'                 => false,
			'inputType'               => 'select',
			'options_callback'        => array('tl_lm_match_events', 'getPlayers'),
			'eval'                    => array('mandatory'=>false,'tl_class'=>'w50')
		),
		'text1' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_match_events']['text1'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false,'maxlength'=>255,'tl_class'=>'w50')
		),
		'text2' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_match_events']['text2'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false,'maxlength'=>255,'tl_class'=>'w50')
		),
		'number1' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_match_events']['number1'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false,'rgxp'=>'digit','tl_class'=>'w50')
		),
		'number2' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_match_events']['number2'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false,'rgxp'=>'digit','tl_class'=>'w50')
		),
		'additional_text' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_match_events']['additional_text'],
			'exclude'                 => false,
			'inputType'               => 'textarea',
			'eval'                    => array('mandatory'=>false, 'rte'=>'tinyMCE')
		),
		'picture' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_match_events']['picture'],
			'exclude'                 => false,
			'inputType'               => 'fileTree',
			'eval'                    => array('mandatory'=>false, 'fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true)
		)
	)
);

class tl_lm_match_events extends Backend
{
	public function editHeader($row, $href, $label, $title, $icon, $attributes)
	{
		return  '<a href="'.$this->addToUrl($href.'&amp;id='.$row['id']).'" title="'.specialchars($title).'"'.$attributes.'>'.$this->generateImage($icon, $label).'</a> ';
	}

	public function getEventtypes($dc)
	{
		$return = array();
		$arrTypes = $this->Database->prepare("SELECT name,id,sortstring FROM tl_lm_event_masters ORDER BY name ASC")->execute();

		if ($arrTypes->numRows < 1)
		{
			return array();
		}

		while ($arrTypes->next())
		{
			if($arrTypes->sortstring=="")
			{
				$return[$GLOBALS['TL_LANG']['league-manager']['misc']['nosortstring']][$arrTypes->id] = $arrTypes->name;
			}
			else
			{
				$return[$arrTypes->sortstring][$arrTypes->id] = $arrTypes->name;
			}
		}

		return $return;
	}

	public function getTeams($dc)
	{
		$return = array();
		$objTeams = $this->Database->prepare("SELECT name,id,sortstring FROM tl_lm_teams ORDER BY name ASC")->execute();

		if ($objTeams->numRows < 1)
		{
			return array();
		}

		while ($objTeams->next())
		{
			if($objTeams->sortstring=="")
			{
				$return[$GLOBALS['TL_LANG']['league-manager']['misc']['nosortstring']][$objTeams->id] = $objTeams->name;
			}
			else
			{
				$return[$objTeams->sortstring][$objTeams->id] = $objTeams->name;
			}
		}

		return $return;
	}

	public function getPlayers($dc)
	{
		$return = array();
		$objMatch= $this->Database->prepare("SELECT team_home,team_away FROM tl_lm_matches WHERE id=?")->execute($dc->activeRecord->pid);

		$arrPlayers = $this->Database->prepare("SELECT p.id as id , p.name as name, p.sortstring as sortstring FROM tl_lm_players as p JOIN tl_lm_players_to_team as ptt ON ptt.pid=p.id WHERE ptt.team=? OR ptt.team=? ORDER BY p.name ASC")->execute($objMatch->team_home,$objMatch->team_away);
		if ($arrPlayers->numRows < 1)
		{
			return array();
		}

		while ($arrPlayers->next())
		{
			if($arrPlayers->sortstring=="")
			{
				$return[$GLOBALS['TL_LANG']['league-manager']['misc']['nosortstring']][$arrPlayers->id] = $arrPlayers->name;
			}
			else
			{
				$return[$arrPlayers->sortstring][$arrPlayers->id] = $arrPlayers->name;
			}
		}

		return $return;
	}

	public function listEvents($arrRow)
	{
		$event_type=$this->Database->prepare("SELECT * FROM tl_lm_event_masters WHERE id=?")->execute($arrRow['event_type']);
		$return='<div><strong>' . $event_type->name . '</strong> ';
		if($event_type->show_times==1)
		{
			$return.='[' .  $arrRow['event_time'] . ' ' . $GLOBALS['TL_LANG']['tl_lm_match_events']['event_time_unit']['reference'][$arrRow['event_time_unit']] . ']';
		}
		$return.='<br /><br />' . $arrRow['additional_text'] . '</div>' . "\n";
		return $return;
	}

	public function checkPalettes()
	{
		$id=$this->Input->get('id');
		$event_type=$this->Database->prepare("SELECT event_type FROM tl_lm_match_events WHERE id=?")
								   ->execute($id);
		if($event_type->event_type=="0"||$event_type->event_type==""){
			$GLOBALS['TL_DCA']['tl_lm_match_events']['palettes']['default']='event_type;';
		}
		else{

			$event_master=$this->Database->prepare("SELECT * FROM tl_lm_event_masters WHERE id=?")->execute($event_type->event_type);
			$default='event_type;';

			if($event_master->show_times=="1"){
				$default.='{times}';
				if($event_master->event_time=="1"){
					$default.=',event_time';
				}
				if($event_master->event_time_unit=="1"){
					$default.=',event_time_unit';
				}
				$default.=';';
			}

			if($event_master->show_player=="1"){
				$default.='{player}';
				if($event_master->player1=="1"){
					$default.=',player1';
				}
				if($event_master->player2=="1"){
					$default.=',player2';
				}
				$default.=';';
			}

			if($event_master->show_teams=="1"){
				$default.='{teams}';
				if($event_master->team1=="1"){
					$default.=',team1';
				}
				if($event_master->team2=="1"){
					$default.=',team2';
				}
				$default.=';';
			}

			if($event_master->show_results=="1"){
				$default.='{results}';
				if($event_master->result_home=="1"){
					$default.=',result_home';
				}
				if($event_master->result_away=="1"){
					$default.=',result_away';
				}
				$default.=';';
			}
			if($event_master->show_texts=="1"){
				$default.='{texts}';
				if($event_master->text1=="1"){
					$default.=',text1';
				}
				if($event_master->text2=="1"){
					$default.=',text2';
				}
				$default.=';';
			}
			if($event_master->show_numbers=="1"){
				$default.='{numbers}';
				if($event_master->number1=="1"){
					$default.=',number1';
				}
				if($event_master->number2=="1"){
					$default.=',number2';
				}
				$default.=';';
			}
			$default.='{additional_information},additional_text,picture;';
			$GLOBALS['TL_DCA']['tl_lm_match_events']['palettes']['default']=$default;
		}//if($event_type->event_type==""){
	}//public function checkPalettes()

	public function getOrderno($varValue, DataContainer $dc)
	{
		if ($varValue=='0'){
			$arrEvents = $this->Database->prepare("SELECT max(event_order) AS max_event FROM tl_lm_match_events WHERE pid=?")->execute($dc->activeRecord->pid);
			if ($arrEvents->numRows==0){
				$varValue='1';
			}
			else{
				$varValue= $arrEvents->max_event + 1;
			}
		}
		else{
			$varValue= $varValue;
		}
		return $varValue;
	}

	public function processOnload()
	{
		$id=$this->Input->get('id');
		$act=$this->Input->get('lm_act');
		switch($act)
		{
			case "up":
				$currentEvent=$this->Database->prepare("SELECT * FROM tl_lm_match_events WHERE id=?")->execute($id);
				$previousEvent=$this->Database->prepare("SELECT * FROM tl_lm_match_events WHERE event_order<? ORDER BY event_order DESC LIMIT 0,1")->execute($currentEvent->event_order);
				if ($previousEvent->numRows > 0) //Is there a previous round?
				{
					//Update current event
					$this->Database->prepare("UPDATE tl_lm_match_events SET event_order=? WHERE id=?")->execute($previousEvent->event_order,$currentEvent->id);
					//Update previous event
					$this->Database->prepare("UPDATE tl_lm_match_events SET event_order=? WHERE id=?")->execute($currentEvent->event_order,$previousEvent->id);
				}
				//Go back to inital page. Otherwise contao will show a blank list
				$this->redirect('contao/main.php?do=tl_lm_matches&table=tl_lm_match_events&id=' . $currentRound->pid);
				break;
			case "down":
				$currentEvent=$this->Database->prepare("SELECT * FROM tl_lm_match_events WHERE id=?")->execute($id);
				$nextEvent=$this->Database->prepare("SELECT * FROM tl_lm_match_events WHERE event_order>? ORDER BY event_order ASC LIMIT 0,1")->execute($currentEvent->event_order);
				if ($nextEvent->numRows > 0) //Is there a previous round?
				{
					//Update current event
					$this->Database->prepare("UPDATE tl_lm_match_events SET event_order=? WHERE id=?")->execute($nextEvent->event_order,$currentEvent->id);
					//Update previous event
					$this->Database->prepare("UPDATE tl_lm_match_events SET event_order=? WHERE id=?")->execute($currentEvent->event_order,$nextEvent->id);
				}
				//Go back to inital page. Otherwise contao will show a blank list
				$this->redirect('contao/main.php?do=tl_lm_matches&table=tl_lm_match_events&id=' . $currentRound->pid);
				break;
		}//switch($act)
	}//public function processOnload
}