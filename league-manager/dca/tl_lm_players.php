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
 * Table tl_lm_players
 */
$GLOBALS['TL_DCA']['tl_lm_players'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'enableVersioning'            => true
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 1,
			'fields'                  => array('name'),
			'flag'                    => 1,
			'panelLayout'             => 'filter;search,limit'
		),
		'label' => array
		(
			'fields'                  => array('name','shortname'),
			'format'                  => '%s (%s)'
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
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_players']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_players']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_players']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_players']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			),
			'assign_teams' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_players']['assign_teams'],
				'href'                => 'table=tl_lm_players_to_team',
				'icon'                => 'edit.gif'
			)

		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array('hasinternal_page'),
		'default'                     => 'name,shortname,nickname,sortstring,birthday,position,website,hasinternal_page,picture,addinfo'
	),

	// Subpalettes
	'subpalettes' => array
	(
		'hasinternal_page'            => 'internal_page'
	),

	// Fields
	'fields' => array
	(
		'name' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_players']['name'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255)
		),
		'shortname' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_players']['shortname'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>10, 'rgxp'=>'alnum', 'unique'=>true)
		),
		'sortstring' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_players']['sortstring'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255)
		),
		'nickname' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_players']['nickname'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255)
		),
		'website' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_players']['website'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'rgxp'=>'url')
		),
		'hasinternal_page'=>array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_players']['hasinternal_page'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true)
		),
		'internal_page' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_players']['internal_page'],
			'exclude'                 => false,
			'inputType'               => 'pageTree',
			'eval'                    => array('mandatory'=>false,'fieldType'=>'radio', 'tl_class'=>'clr')
		),
		'picture' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_players']['picture'],
			'exclude'                 => false,
			'inputType'               => 'fileTree',
			'eval'                    => array('mandatory'=>false, 'fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true)
		),
		'position' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_players']['position'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255)
		),
		'addinfo' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_players']['addinfo'],
			'exclude'                 => false,
			'inputType'               => 'textarea',
			'eval'                    => array('mandatory'=>false, 'cols'=>80, 'rows'=>40,'wrap'=>'soft')
		),
		'birthday' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_players']['birthday'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false,'rgxp'=>'date', 'datepicker'=>$this->getDatePickerString())
		)
	)
);


class tl_lm_players extends Backend
{
	public function editHeader($row, $href, $label, $title, $icon, $attributes)
	{
		return  '<a href="'.$this->addToUrl($href.'&amp;id='.$row['id']).'" title="'.specialchars($title).'"'.$attributes.'>'.$this->generateImage($icon, $label).'</a> ';
	}
}