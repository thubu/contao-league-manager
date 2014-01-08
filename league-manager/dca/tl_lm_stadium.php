<?php

/**
 * PHP version 5
 * @copyright  2013 Thomas Unterbusch
 * @author     Thomas Unterbusch
 * @package    sportsmanager
 * @license    LGPL
 * @filesource
 */


/**
 * Table tl_lm_stadium
 */
$GLOBALS['TL_DCA']['tl_lm_stadium'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'enableVersioning'            => true,
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
			'fields'                  => array('name','city','country'),
			'format'                  => '%s (%s, %s)'
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
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_stadium']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif',
				'attributes'          => 'class="contextmenu"'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_stadium']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_stadium']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_stadium']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			),
			'assignstadium' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_stadium']['assignstadium'],
				'href'                => 'table=tl_lm_teams_to_stadium',
				'icon'                => 'edit.gif',
				'attributes'          => 'class="contextmenu"'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array('hasinternal_page'),
		'default'                     => 'name, shortname, sortstring, buildyear;{stadion_adress}, zip, city, street, country;{add_info},website, mail, phone, fax;{stadion_data},capacity,capacityinternational,seats,seatsroofed,standings,standingsroofed,lodges;{stadion_features},subsoil,undersoilheating,fieldsize,track; logo,hasinternal_page;'

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
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_stadium']['name'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'alnum', 'maxlength'=>255, 'tl_class'=>'w50')
		),
		'shortname' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_stadium']['shortname'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'rgxp'=>'alnum', 'unique'=>true, 'tl_class'=>'w50')
		),
		'sortstring' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_stadium']['sortstring'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50')
		),
		'zip' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_stadium']['zip'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>25, 'tl_class'=>'w50')
		),
		'city' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_stadium']['city'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50')
		),
		'street' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_stadium']['street'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'rgxp'=>'alnum', 'tl_class'=>'w50')
		),
		'country' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_stadium']['country'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50')
		),
		'website' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_stadium']['website'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50', 'rgxp'=>'url')
		),
		'mail' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_stadium']['mail'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50')
		),
		'phone' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_stadium']['phone'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'rgxp'=>'phone', 'tl_class'=>'w50')
		),
		'fax' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_stadium']['fax'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'rgxp'=>'phone', 'tl_class'=>'w50')
		),
		'buildyear' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_stadium']['buildyear'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>10, 'tl_class'=>'w50')
		),
		'logo' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_stadium']['logo'],
			'exclude'                 => false,
			'inputType'               => 'fileTree',
			'eval'                    => array('mandatory'=>false, 'fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'storeId=>true')
		),
		'capacity' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_stadium']['capacity'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>10, 'rgxp'=>'num',  'tl_class'=>'w50')
		),
		'capacityinternational' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_stadium']['capacityinternational'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>10, 'rgxp'=>'num',  'tl_class'=>'w50')
		),
		'seats' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_stadium']['seats'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>10, 'rgxp'=>'num',  'tl_class'=>'w50')
		),
		'seatsroofed' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_stadium']['seatsroofed'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>10, 'rgxp'=>'num',  'tl_class'=>'w50')
		),
		'standings' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_stadium']['standings'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>10, 'rgxp'=>'num',  'tl_class'=>'w50')
		),
		'standingsroofed' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_stadium']['standingsroofed'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>10, 'rgxp'=>'num',  'tl_class'=>'w50')
		),
		'lodges' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_stadium']['lodges'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>10, 'rgxp'=>'num',  'tl_class'=>'w50')
		),
		'subsoil' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_stadium']['subsoil'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50')
		),
		'undersoilheating' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_stadium']['undersoilheating'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50')
		),
		'track' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_stadium']['track'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50')
		),
		'fieldsize' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_stadium']['fieldsize'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50')
		),
		'hasinternal_page'=>array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_stadium']['hasinternal_page'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true)
		),
		'internal_page' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_stadium']['internal_page'],
			'exclude'                 => false,
			'inputType'               => 'pageTree',
			'eval'                    => array('mandatory'=>false,'fieldType'=>'radio', 'tl_class'=>'clr')
		)

	)
);

class tl_lm_stadium extends Backend
{
	public function editHeader($row, $href, $label, $title, $icon, $attributes)
	{
		return  '<a href="'.$this->addToUrl($href.'&amp;id='.$row['id']).'" title="'.specialchars($title).'"'.$attributes.'>'.$this->generateImage($icon, $label).'</a> ';
	}
}
