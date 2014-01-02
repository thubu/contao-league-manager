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
 * Table tl_lm_matches
 */
$GLOBALS['TL_DCA']['tl_lm_matches'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'ptable'                      => 'tl_lm_rounds',
		'enableVersioning'            => true,
		'onsubmit_callback' => array
		(
			array('tl_lm_matches', 'adjustTime')
		)
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 4,
			'fields'                  => array('startdate'),
			'headerFields'            => array('pid','name'),
			'flag'                    => 12,
			'panelLayout'             => 'filter;search,limit',
			'child_record_callback'   => array('tl_lm_matches', 'listMatch')
		),
		'label' => array
		(
			'fields'                  => array('team_home','team_away','score_home','score_away','halftimescore_home','halftimescore_away'),
			'format'                  => '%s vs. %s  <strong>(%s : %s)</strong>',
			'group_callback'		  => array('tl_lm_matches','getGrouplabel')
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
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_matches']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_matches']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_matches']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_matches']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			),
			'reports' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_matches']['reports'],
				'href'                => 'table=tl_lm_match_reports',
				'icon'                => 'system/modules/league-manager/assets/images/report.png'
			),
			'events' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_matches']['events'],
				'href'                => 'table=tl_lm_match_events',
				'icon'                => 'taskcenter.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array('different_points','venue'),
		'default'                     => '{assignment},contest,pid,group;{datetime},startdate,starttime,enddate,endtime;{add_information},picture,website;{home},team_home,score_home,halftimescore_home;{away},team_away,score_away,halftimescore_away;{matchlocation},venue;{points},different_points;{confirmed},result_confirmed'
	),

	// Subpalettes
	'subpalettes' => array
	(
		'different_points'                            => 'points_home,points_away',
		'venue_H'			                          => '',
		'venue_A'			                          => '',
		'venue_O'			                          => 'location,street,zip,city,region'
	),

	// Fields
	'fields' => array
	(
		'startdate' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_matches']['startdate'],
			'exclude'                 => false,
			'filter'				  => true,
			'default'				  => '0',
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false,'rgxp'=>'date', 'datepicker'=>$this->getDatePickerString(), 'tl_class'=>'w50')
		),
		'starttime' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_matches']['starttime'],
			'exclude'                 => false,
			'default'                 => '0',
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'rgxp'=>'time','tl_class'=>'w50')
		),
		'enddate' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_matches']['enddate'],
			'exclude'                 => false,
			'filter'				  => true,
			'default'				  => '0',
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false,'rgxp'=>'date', 'datepicker'=>$this->getDatePickerString(), 'tl_class'=>'w50')
		),
		'endtime' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_matches']['endtime'],
			'exclude'                 => false,
			'default'                 => '0',
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'rgxp'=>'time','tl_class'=>'w50')
		),
		'team_home' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_matches']['team_home'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'select',
			'eval'                    => array('mandatory'=>false, 'tl_class'=>'w50','includeBlankOption'=>true),
			'options_callback'        => array('tl_lm_matches', 'getTeams')
		),
		'score_home' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_matches']['score_home'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50')
		),
		'halftimescore_home' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_matches']['halftimescore_home'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50')
		),
		'team_away' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_matches']['team_away'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'select',
			'eval'                    => array('mandatory'=>false, 'tl_class'=>'w50','includeBlankOption'=>true),
			'options_callback'        => array('tl_lm_matches', 'getTeams')
		),
		'score_away' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_matches']['score_away'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'filter'				  => true,
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50')
		),
		'halftimescore_away' => array
				(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_matches']['halftimescore_away'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'filter'				  => true,
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50')
		),
		'different_points' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_matches']['different_points'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('mandatory'=>false,'submitOnChange'=>true)
		),
		'points_home' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_matches']['points_home'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>10, 'rgxp'=>digit, 'tl_class'=>'w50')
		),
		'points_away' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_matches']['points_away'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>10, 'rgxp'=>digit, 'tl_class'=>'w50')
		),
		'result_confirmed' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_matches']['result_confirmed'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'filter'				  => true,
			'eval'                    => array('mandatory'=>false)
		),
		'venue' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_matches']['venue'],
			'exclude'                 => false,
			'inputType'               => 'select',
			'options'				  => array('H','A','O'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_lm_matches']['venue']['reference'],
			'eval'                    => array('mandatory'=>true, 'tl_class'=>'clr','submitOnChange'=>true)
		),
		'location' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_matches']['location'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255)
		),
		'street' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_matches']['street'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255)
		),
		'zip' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_matches']['zip'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>10, 'rgxp'=>digit, 'tl_class'=>'w50')
		),
		'city' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_matches']['city'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>30, 'tl_class'=>'w50')
		),
		'region' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_matches']['region'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255)
		),
		'website' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_matches']['website'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255)
		),
		'picture' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_matches']['picture'],
			'exclude'                 => false,
			'inputType'               => 'fileTree',
			'eval'                    => array('mandatory'=>false, 'fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true)
		)
	)
);

class tl_lm_matches extends Backend
{

	public function getTeams($dc)
	{
		$return = array();
			$objParentRound=$this->Database->prepare("SELECT * FROM tl_lm_rounds WHERE id=?")->execute($dc->activeRecord->pid);
			$objParentContest=$this->Database->prepare("SELECT * FROM tl_lm_contests WHERE id=?")->execute($objParentRound->pid);
			$objTeams = $this->Database->prepare("SELECT tl_lm_teams.id as id, tl_lm_teams.name as name, tl_lm_teams.sortstring as sortstring FROM tl_lm_teams INNER JOIN tl_lm_team_to_contest ON tl_lm_team_to_contest.team=tl_lm_teams.id WHERE tl_lm_team_to_contest.contest=? ORDER BY name ASC")->execute($objParentContest->id);

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

	public function adjustTime(DataContainer $dc)
	{
		// Return if there is no active record (override all)
		if (!$dc->activeRecord)
		{
			return;
		}

		// Adjust start and end time
		$arrSet['starttime'] = strtotime(date('Y-m-d', $dc->activeRecord->startdate) . ' ' . date('H:i:s', $dc->activeRecord->starttime));
		$arrSet['endtime'] = strtotime(date('Y-m-d', $dc->activeRecord->enddate) . ' ' . date('H:i:s', $dc->activeRecord->endtime));

		$this->Database->prepare("UPDATE tl_lm_matches %s WHERE id=?")->set($arrSet)->execute($dc->id);
	}

	public function listMatch($arrRow)
	{
		//$label="%s vs. %s  <strong>(%s : %s)</strong>";
		$label = '[' . date($GLOBALS['TL_CONFIG']['timeFormat'],$arrRow['starttime']) . '] ';
		$return = $this->Database->prepare("SELECT name FROM tl_lm_teams WHERE id=? ORDER BY name ASC")->execute($arrRow['team_home']);
		$label .= $return->name . " vs. ";
		$return = $this->Database->prepare("SELECT name FROM tl_lm_teams WHERE id=? ORDER BY name ASC")->execute($arrRow['team_away']);
		$label = $label . $return->name . " <strong>" . $arrRow['score_home'] . ":" . $arrRow['score_away'] . "</strong>";
		$label .=  " / ";
		$label = $label . " <strong>(" . $arrRow['halftimescore_home'] . ":" . $arrRow['halftimescore_away'] . ")</strong>";
		if($arrRow['result_confirmed']=="1"){$label=$label . " *";}
		if($arrRow['different_points']=="1"){$label=$label . " <strong>P</strong>";}
		return $label;
	}


	public function getGrouplabel($label)
	{
		$label = date($GLOBALS['TL_CONFIG']['dateFormat'],(int)$label);
		return $label;
	}
}
