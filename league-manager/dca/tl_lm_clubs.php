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
 * Table tl_lm_clubs
 */
$GLOBALS['TL_DCA']['tl_lm_clubs'] = array
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
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_clubs']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif',
				'attributes'          => 'class="contextmenu"'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_clubs']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_clubs']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_clubs']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			),
			'assignteams' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_clubs']['assignteams'],
				'href'                => 'table=tl_lm_teams_to_club',
				'icon'                => 'edit.gif',
				'attributes'          => 'class="contextmenu"'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array(''),
		'default'                     => 'name,shortname,sortstring,ownclub,website,logo'
	),

	// Subpalettes
	'subpalettes' => array
	(
		''                            => ''
	),

	// Fields
	'fields' => array
	(
		'name' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_clubs']['name'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255)
		),
		'shortname' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_clubs']['shortname'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>10, 'rgxp'=>'alnum', 'unique'=>true)
		),
		'sortstring' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_clubs']['sortstring'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255)
		),
		'website' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_clubs']['website'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'rgxp'=>'url')
		),
		'logo' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_clubs']['logo'],
			'exclude'                 => false,
			'inputType'               => 'fileTree',
			'eval'                    => array('mandatory'=>false, 'fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'storeId=>true')
		),
		'ownclub' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_clubs']['ownclub'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('mandatory'=>false)
		)
	)
);


class tl_lm_clubs extends Backend
{
	public function editHeader($row, $href, $label, $title, $icon, $attributes)
	{
		return  '<a href="'.$this->addToUrl($href.'&amp;id='.$row['id']).'" title="'.specialchars($title).'"'.$attributes.'>'.$this->generateImage($icon, $label).'</a> ';
	}
}
