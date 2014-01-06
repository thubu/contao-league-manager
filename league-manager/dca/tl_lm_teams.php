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
 * Table tl_lm_teams
 */
$GLOBALS['TL_DCA']['tl_lm_teams'] = array
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
			'panelLayout'             => 'filter;search,limit',
			'headerFields'            => array('name'),
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
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_teams']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_teams']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_teams']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_teams']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array('hasinternal_page'),
		'default'                     => 'name,shortname,sortstring;{team_location},location,street,zip,city,country;{team_training},locationtraining,streettraining,ziptraining,citytraining,countrytraining;{add_info},ownteam,website,hasinternal_page,logo'
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
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_teams']['name'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255)
		),
		'shortname' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_teams']['shortname'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>10, 'rgxp'=>'alnum', 'unique'=>true)
		),
		'sortstring' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_teams']['sortstring'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255)
		),
		'location' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_teams']['location'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50')
		),
		'street' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_teams']['street'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50')
		),
		'zip' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_teams']['zip'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>10, 'rgxp'=>digit, 'tl_class'=>'w50')
		),
		'city' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_teams']['city'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>30, 'tl_class'=>'w50')
		),
		'country' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_teams']['country'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>30, 'tl_class'=>'w50')
		),
		'locationtraining' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_teams']['locationtraining'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50')
		),
		'streettraining' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_teams']['streettraining'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50')
		),
		'ziptraining' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_teams']['ziptraining'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>10, 'rgxp'=>digit, 'tl_class'=>'w50')
		),
		'citytraining' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_teams']['citytraining'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>30, 'tl_class'=>'w50')
		),
		'countrytraining' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_teams']['countrytraining'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>30, 'tl_class'=>'w50')
		),
		'website' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_teams']['website'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'rgxp'=>'url')
		),
		'hasinternal_page'=>array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_teams']['hasinternal_page'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true)
		),
		'internal_page' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_teams']['internal_page'],
			'exclude'                 => false,
			'inputType'               => 'pageTree',
			'eval'                    => array('mandatory'=>false,'fieldType'=>'radio', 'tl_class'=>'clr')
		),
		'logo' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_teams']['logo'],
			'exclude'                 => false,
			'inputType'               => 'fileTree',
			'eval'                    => array('mandatory'=>false, 'fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'storeId=>true')
		),
		'ownteam' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_teams']['ownteam'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('mandatory'=>false)
		)
	)
);


class tl_lm_teams extends Backend
{
}
