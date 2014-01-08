<?php

/**
 * PHP version 5
 * @copyright  2014 Thomas Unterbusch
 * @author     Thomas Unterbusch
 * @package    sportsmanager
 * @license    LGPL
 * @filesource
 */


/**
 * Table tl_lm_teams_to_stadium
 */
$GLOBALS['TL_DCA']['tl_lm_teams_to_stadium'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'enableVersioning'            => true,
		'ptable'                      => 'tl_lm_stadium',
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 4,
			'fields'                  => array('team'),
			'flag'                    => 11,
			'panelLayout'             => 'filter;search,limit',
			'headerFields'            => array('name'),
			'disableGrouping'		  => true,
			'child_record_callback'   => array('tl_lm_teams_to_stadium', 'listTeams')
		),
		'label' => array
		(

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
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_teams_to_stadium']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_teams_to_stadium']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_teams_to_stadium']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_teams_to_stadium']['show'],
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
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_teams_to_stadium']['team'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'select',
			'includeBlankOption'	  => true,
			'options_callback'        => array('tl_lm_teams_to_stadium', 'getTeams'),
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255)
		),
		'date_from' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_teams_to_stadium']['date_from'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'rgxp'=>'date', 'datepicker'=>$this->getDatePickerString(), 'tl_class'=>'w50')
		),
		'date_to' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_teams_to_stadium']['date_to'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'rgxp'=>'date', 'datepicker'=>$this->getDatePickerString(), 'tl_class'=>'w50')
		)
	)
);


class tl_lm_teams_to_stadium extends Backend
{
	public function listTeams($arrRow)
	{
		$objTeam = $this->Database->prepare("SELECT name FROM tl_lm_teams WHERE id=? ORDER BY name ASC")->execute($arrRow['team']);
		return $objTeam->name;
	}

	public function getTeams($dc)
	{
		$return = array();
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
}
