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
 * Table tl_lm_players_to_team
 */
$GLOBALS['TL_DCA']['tl_lm_players_to_team'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'ptable'                      => 'tl_lm_players',
		'enableVersioning'            => true,
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 4,
			'fields'                  => array('club'),
			'flag'                    => 1,
			'headerFields'            => array('name'),
			'panelLayout'             => 'filter;search,limit',
			'child_record_callback'   => array('tl_lm_players_to_team', 'listTeam'),
			'disableGrouping'		  => true
		),
		'label' => array
		(
			'fields'                  => array('team'),
			'format'                  => '%s',
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
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_players_to_team']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_players_to_team']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_players_to_team']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_players_to_team']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array(''),
		'default'                     => 'team;{dates},date_from,date_to;'
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
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_players_to_team']['team'],
			'exclude'                 => false,
			'inputType'               => 'select',
			'eval'                    => array(),
			'options_callback'        => array('tl_lm_players_to_team', 'getTeams')
		),
		'date_from' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_players_to_team']['date_from'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'rgxp'=>'date', 'datepicker'=>$this->getDatePickerString(), 'tl_class'=>'w50')
		),
		'date_to' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_players_to_team']['date_to'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'rgxp'=>'date', 'datepicker'=>$this->getDatePickerString(), 'tl_class'=>'w50')
		)
	)
);

class tl_lm_players_to_team extends Backend
{

	public function getTeams(DataContainer $dc)
	{
		$return = array();
		$objTeams=array();

			$objTeams = $this->Database->prepare("SELECT id, name FROM tl_lm_teams ORDER BY name ASC")->execute();

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

	public function listTeam($arrRow)
	{
		$arrTeams = $this->Database->prepare("SELECT name FROM tl_lm_teams WHERE id=?")->execute($arrRow['team']);
		$label="<div>" . $arrTeams->name . "</div>";
		return $label;
	}

	public function getGrouplabel($label)
	{
		$arrClubs = $this->Database->prepare("SELECT name FROM tl_lm_clubs WHERE id=?")->execute($label);
		$label = $arrClubs->name;
		return $label;
	}

}
