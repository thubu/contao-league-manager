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
 * Table tl_lm_contests
 */
$GLOBALS['TL_DCA']['tl_lm_contests'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'enableVersioning'            => true,
		'ctable'                      => array('tl_lm_rounds','tl_lm_contest_penalties'),
		'onsubmit_callback' => array
		(
			array('tl_lm_contests', 'fillITable')
		)
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 1,
			'fields'                  => array('mode','name'),
			'flag'                    => 12,
			'panelLayout'             => 'filter;search,limit'
		),
		'label' => array
		(
			'fields'                  => array('shortname', 'name'),
			'format'                  => '[%s] %s'
		),
		'global_operations' => array
		(
			'fixMatches' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_contests']['fixMatches'],
				'href'                => 'key=fixMatches',
				'class'               => 'header_theme_import',
				'attributes'          => 'onclick="Backend.getScrollOffset();"'
			),
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
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_contests']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif',
				'attributes'          => 'class="contextmenu"'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_contests']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_contests']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_contests']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			),
			'rounds' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_contests']['rounds'],
				'href'                => 'table=tl_lm_rounds',
				'icon'                => 'system/modules/league-manager/assets/images/rounds.gif',
				'attributes'          => 'class="contextmenu"'
			),
			'penalties' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_contests']['penalties'],
				'href'                => 'table=tl_lm_contest_penalties',
				'icon'                => 'system/modules/league-manager/assets/images/penalty.png',
				'attributes'          => 'class="contextmenu"'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array(''),
		'default'                     => 'name,shortname,sortstring,mode,date_start,date_end,teams;{rules},home_wins_points_home,home_wins_points_away,draw_points_home,draw_points_away,away_wins_points_home,away_wins_points_away;{create_rounds_header},create_rounds;'
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
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_contests']['name'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255)
		),
		'shortname' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_contests']['shortname'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>10, 'rgxp'=>'alnum', 'unique'=>true,)
		),
		'sortstring' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_contests']['sortstring'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'filter'				  => true,
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255)
		),
		'mode' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_contests']['mode'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'select',
			'options'				  => array('L','T'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_lm_contests']['mode']['reference'],
			'eval'                    => array('mandatory'=>true)
		),
		'pairing' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_contests']['pairing'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'select',
			'options'				  => array('T','P'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_lm_contests']['pairing']['reference'],
			'eval'                    => array('mandatory'=>true)
		),
		'date_start' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_contests']['date_start'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'date', 'datepicker'=>$this->getDatePickerString(), 'tl_class'=>'w50')
		),
		'date_end' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_contests']['date_end'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'date', 'datepicker'=>$this->getDatePickerString(), 'tl_class'=>'w50')
		),
		'teams' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_contests']['teams'],
			'exclude'                 => false,
			'inputType'               => 'select',
			'options_callback'        => array('tl_lm_contests', 'getTeams'),
			'eval'                    => array('multiple'=>true)
		),
		'home_wins_points_home' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_contests']['home_wins_points_home'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>10, 'rgxp'=>digit, 'tl_class'=>'w50')
		),
		'home_wins_points_away' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_contests']['home_wins_points_away'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>10, 'rgxp'=>digit, 'tl_class'=>'w50')
		),
		'draw_points_home' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_contests']['draw_points_home'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>10, 'rgxp'=>digit, 'tl_class'=>'w50')
		),
		'draw_points_away' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_contests']['draw_points_away'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>10, 'rgxp'=>digit, 'tl_class'=>'w50')
		),
		'away_wins_points_home' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_contests']['away_wins_points_home'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>10, 'rgxp'=>digit, 'tl_class'=>'w50')
		),
		'away_wins_points_away' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_contests']['away_wins_points_away'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>10, 'rgxp'=>digit, 'tl_class'=>'w50')
		),
		'create_rounds' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_contests']['create_rounds'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>10, 'rgxp'=>digit),
			'save_callback' => array
			(
				array('tl_lm_contests', 'save_create_rounds')
			),
			'load_callback' => array
			(
				array('tl_lm_contests', 'load_create_rounds')
			)
		)
	)
);

class tl_lm_contests extends Backend
{
	public function getTeams()
	{
		$objTeams = $this->Database->prepare("SELECT id, name FROM tl_lm_teams ORDER BY name ASC")->execute();

		if ($objTeams->numRows < 1)
		{
			return array();
		}

		$return = array();

		while ($objTeams->next())
		{
			$return[$objTeams->id] = $objTeams->name;
		}

		return $return;
	}

	public function fillITable(DataContainer $dc)
	{
		$ret=$this->Database->prepare("DELETE FROM tl_lm_team_to_contest WHERE contest=?")->execute($dc->activeRecord->id);
		$arrTeams=deserialize($dc->activeRecord->teams);
		if(count($arrTeams)>0)
		{
			foreach($arrTeams as $team){
				$ret=$this->Database->prepare("INSERT INTO tl_lm_team_to_contest (team,contest) VALUES (?,?)")->execute($team,$dc->activeRecord->id);
			}
		}
	}

	public function editHeader($row, $href, $label, $title, $icon, $attributes)
	{
		return  '<a href="'.$this->addToUrl($href.'&amp;id='.$row['id']).'" title="'.specialchars($title).'"'.$attributes.'>'.$this->generateImage($icon, $label).'</a> ';
	}

	public function load_create_rounds()
	{
		return "0";
	}

	public function save_create_rounds($varValue, DataContainer $dc)
	{

		switch ($dc->activeRecord->mode)
		{
			case "T":
				$name=$GLOBALS['TL_LANG']['tl_lm_contests']['create_rounds']['Title_Tournament'];
				break;
			case "L":
				$name=$GLOBALS['TL_LANG']['tl_lm_contests']['create_rounds']['Title_League'];
				break;
			default:
				$name=$GLOBALS['TL_LANG']['tl_lm_contests']['create_rounds']['Title_Tournament'];
		}
		$round_count=array();
		$max_round=array();
		$round_count=$this->Database->prepare("SELECT count(id) as cnt FROM tl_lm_rounds WHERE pid=?")->execute($dc->activeRecord->id);
		$rnd_cnt=$round_count->cnt;
		$max_round=$this->Database->prepare("SELECT max(round_no) as rnd FROM tl_lm_rounds WHERE pid=?")->execute($dc->activeRecord->id);
		$max_rnd=$max_round->rnd;
		if($varValue>0){
			for($i=1;$i<=$varValue;$i++)
			{
				$ret=$this->Database->prepare("INSERT INTO tl_lm_rounds (name,round_no,pid) VALUES (?,?,?)")->execute($rnd_cnt+$i . " . " . $name,$max_rnd+$i,$dc->activeRecord->id);
			}
		}
		else
		{
			//Nothing to do here
		}
		$dc->activeRecord->create_rounds=0;
		return "0";
	}
}
