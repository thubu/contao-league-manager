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
 * Table tl_lm_contest_penalties
 */
$GLOBALS['TL_DCA']['tl_lm_contest_penalties'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'ptable'                      => 'tl_lm_contests',
		'enableVersioning'            => true
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 4,
			'fields'                  => array('points'),
			'flag'                    => 11,
			'headerFields'            => array('name'),
			'disableGrouping'         => true,
			'panelLayout'             => 'filter;search,limit',
			'child_record_callback'   => array('tl_lm_contest_penalties', 'listPenalties')
		),
		'label' => array
		(
			'fields'                  => array('team','points'),
			'format'                  => '%s: <strong>%s</strong>'
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
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_contest_penalties']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif',
				'attributes'          => 'class="contextmenu"'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_contest_penalties']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_contest_penalties']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_contest_penalties']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array(''),
		'default'                     => 'team,points,reason;'
	),

	// Subpalettes
	'subpalettes' => array
	(
		''                            => ''
	),

	// Fields
	'fields' => array
	(
		'team' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_contest_penalties']['team'],
			'exclude'                 => false,
			'inputType'               => 'select',
			'options_callback' 		  => array('tl_lm_contest_penalties', 'getTeams')
		),
		'points' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_contest_penalties']['points'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'filter'				  => true,
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255)
		),
		'reason' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_contest_penalties']['reason'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255)
		)
	)
);

class tl_lm_contest_penalties extends Backend
{

	public function getTeams(DataContainer $dc)
	{
		$participatingTeams = $this->Database->prepare("SELECT team FROM tl_lm_team_to_contest WHERE contest=?")->execute($dc->activeRecord->pid);
		$return=array();
		while($participatingTeams->next())
		{
			$objTeams=$this->Database->prepare("SELECT name,sortstring,id FROM tl_lm_teams WHERE id=? ORDER BY name ASC")->execute($participatingTeams->team);
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

	public function listPenalties($arrRow)
	{
		$team = $this->Database->prepare("SELECT name FROM tl_lm_teams WHERE id=?")->execute($arrRow['team']);
		$label=$team->name . " : <strong>" . $arrRow['points'] . "</strong>";
		return $label;
	}

}
