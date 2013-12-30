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
 * Table tl_lm_rounds
 */
$GLOBALS['TL_DCA']['tl_lm_rounds'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'ctable'                      => array('tl_lm_matches'),
		'ptable'                      => 'tl_lm_contests',
		'enableVersioning'            => true,
		'onload_callback' => array
		(
			array('tl_lm_rounds', 'processOnload')
		),
		'oncopy_callback' => array
		(
			array('tl_lm_rounds', 'processOncopy')
		),
		'onsubmit_callback' => array
		(
			array('tl_lm_rounds', 'processOnsubmit')
		)
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 4,
			'fields'                  => array('round_no'),
			'flag'                    => 12,
			'headerFields'            => array('name'),
			'disableGrouping'		  => true,
			'panelLayout'             => 'filter;search,limit',
			'child_record_callback'   => array('tl_lm_rounds', 'listRound')
		),
		'label' => array
		(
			'fields'                  => array('name'),
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
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_rounds']['edit'],
				'href'                => 'table=tl_lm_matches',
				'icon'                => 'edit.gif',
				'attributes'          => 'class="contextmenu"'
			),
			'editheader' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_rounds']['editheader'],
				'href'                => 'act=edit',
				'icon'                => 'header.gif',
				'button_callback'     => array('tl_lm_rounds', 'editHeader'),
				'attributes'          => 'class="edit-header"'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_rounds']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_rounds']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_rounds']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			),
			'up' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_rounds']['up'],
				'href'                => 'lm_act=up',
				'icon'                => 'up.gif'
			),
			'down' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_rounds']['down'],
				'href'                => 'lm_act=down',
				'icon'                => 'down.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array(''),
		'default'                     => 'name;{dates},dates_finalized;'
	),

	// Subpalettes
	'subpalettes' => array
	(
		''                            => ''
	),

	// Fields
	'fields' => array
	(
		'round_no' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_rounds']['round_no'],
			'exclude'                 => false,
			'inputType'               => 'text',
		),
		'name' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_rounds']['name'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'filter'				  => true,
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255)
		),
		'dates_finalized' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_rounds']['dates_finalized'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'filter'				  => true,
			'eval'                    => array('mandatory'=>false)
		)
	)
);

class tl_lm_rounds extends Backend
{

	public function editHeader($row, $href, $label, $title, $icon, $attributes)
	{
		return  '<a href="'.$this->addToUrl($href.'&id='.$row['id']).'" title="'.specialchars($title).'"'.$attributes.'>'.$this->generateImage($icon, $label).'</a> ';
	}

	public function listRound($arrRow)
	{
		return '<div>' . $arrRow['name'] . '</div>' . "\n";
	}

	public function processOnload()
	{
		$id=$this->Input->get('id');
		$act=$this->Input->get('lm_act');
		switch($act)
		{
			case "up":
				$currentRound=$this->Database->prepare("SELECT * FROM tl_lm_rounds WHERE id=?")->execute($id);
				$previousRound=$this->Database->prepare("SELECT * FROM tl_lm_rounds WHERE round_no<? ORDER BY round_no DESC LIMIT 0,1")->execute($currentRound->round_no);
				if ($previousRound->numRows > 0) //Is there a previous round?
				{
					//Update current round
					$this->Database->prepare("UPDATE tl_lm_rounds SET round_no=? WHERE id=?")->execute($previousRound->round_no,$currentRound->id);
					//Update previous round
					$this->Database->prepare("UPDATE tl_lm_rounds SET round_no=? WHERE id=?")->execute($currentRound->round_no,$previousRound->id);
				}
				//Go back to inital page. Otherwise contao will show a blank list
				$this->redirect('contao/main.php?do=tl_lm_contests&table=tl_lm_rounds&id=' . $currentRound->pid);
				break;
			case "down":
				$currentRound=$this->Database->prepare("SELECT * FROM tl_lm_rounds WHERE id=?")->execute($id);
				$nextRound=$this->Database->prepare("SELECT * FROM tl_lm_rounds WHERE round_no>? ORDER BY round_no ASC LIMIT 0,1")->execute($currentRound->round_no);
				if ($nextRound->numRows > 0) //Is there a previous round?
				{
					//Update current round
					$this->Database->prepare("UPDATE tl_lm_rounds SET round_no=? WHERE id=?")->execute($nextRound->round_no,$currentRound->id);
					//Update previous round
					$this->Database->prepare("UPDATE tl_lm_rounds SET round_no=? WHERE id=?")->execute($currentRound->round_no,$nextRound->id);
				}
				//Go back to inital page. Otherwise contao will show a blank list
				$this->redirect('contao/main.php?do=tl_lm_contests&table=tl_lm_rounds&id=' . $currentRound->pid);
				break;
		}//switch($act)
	}//public function processOnload

	public function processOncopy($intId=0)
	{
		$objRound = $this->Database->prepare("SELECT * FROM tl_lm_rounds WHERE id=?")->executeUncached($intId);
		$arrRounds = $this->Database->prepare("SELECT max(round_no) AS max_round FROM tl_lm_rounds WHERE pid=?")->executeUncached($objRound->pid);
		if ($arrRounds->numRows==0){
			$round_no=1;
		}
		else{
			$round_no = $arrRounds->max_round + 1;
		}
		$this->Database->prepare("UPDATE tl_lm_rounds SET round_no=? WHERE id=?")->execute($round_no, $intId);
		return;
	}//public function processOncopy

	public function processOnsubmit(DataContainer $dc)
	{
		if (!$dc->activeRecord)
		{
			return;
		}
		if($dc->activeRecord->round_no=='0')
		{
			$arrRounds = $this->Database->prepare("SELECT max(round_no) AS max_round FROM tl_lm_rounds WHERE pid=?")->execute($dc->activeRecord->pid);
			if ($arrRounds->numRows==0){
				$roundno=1;
			}
			else{
				$round_no= $arrRounds->max_round + 1;
			}
			$this->Database->prepare("UPDATE tl_lm_rounds SET round_no=? WHERE id=?")->execute($round_no, $dc->activeRecord->id);
			return;
		}
	}//public function processOnsubmit
}
