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
 * -------------------------------------------------------------------------
 * BACK END MODULES
 * -------------------------------------------------------------------------
*/
 $GLOBALS['BE_MOD']['league-manager'] = array
 (

	 'tl_lm_teams' => array
	 (
	    'tables' => array('tl_lm_teams'),
		'icon'   => 'system/modules/league-manager/assets/images/teams.png'
	 ),
	 'tl_lm_players' => array
	 (
	    'tables' => array('tl_lm_players','tl_lm_players_to_team'),
		'icon'   => 'system/modules/league-manager/assets/images/player.png'
	 ),
	 'tl_lm_clubs' => array
	 (
	    'tables' => array('tl_lm_clubs','tl_lm_teams_to_club'),
		'icon'   => 'system/modules/league-manager/assets/images/club.png'
	 ),
	 'tl_lm_contests' => array
	 (
        'tables' => array('tl_lm_contests','tl_lm_rounds','tl_lm_matches','tl_lm_match_reports','tl_lm_match_events','tl_lm_contest_penalties'),
        'icon'   => 'system/modules/league-manager/assets/images/ball.gif',
		'fixMatches' => array('lm_fixes','fixMatches')
	 )

);
$GLOBALS['BE_MOD']['league-manager-settings'] = array
 (
	'tl_lm_event_masters' => array
	 (
	    'tables' => array('tl_lm_event_masters'),
		'icon'   => 'system/modules/league-manager/assets/images/ball.gif'
	 ),

);
/**
 * -------------------------------------------------------------------------
 * FRONT END MODULES
 * -------------------------------------------------------------------------
 */


/**
 * -------------------------------------------------------------------------
 * CONTENT ELEMENTS
 * -------------------------------------------------------------------------
 */
$GLOBALS['TL_CTE']['league-manager']['lm_contestreader_basic'] = 'lm_contestreader_basic';
$GLOBALS['TL_CTE']['league-manager']['lm_contestreader_teams'] = 'lm_contestreader_teams';
$GLOBALS['TL_CTE']['league-manager']['lm_contestreader_rounds'] = 'lm_contestreader_rounds';
$GLOBALS['TL_CTE']['league-manager']['lm_contestreader_matches'] = 'lm_contestreader_matches';
$GLOBALS['TL_CTE']['league-manager']['lm_contestreader_crosstable'] = 'lm_contestreader_crosstable';
$GLOBALS['TL_CTE']['league-manager']['lm_contestreader_table'] = 'lm_contestreader_table';
$GLOBALS['TL_CTE']['league-manager']['lm_contestreader_hometable'] = 'lm_contestreader_hometable';
$GLOBALS['TL_CTE']['league-manager']['lm_contestreader_awaytable'] = 'lm_contestreader_awaytable';
$GLOBALS['TL_CTE']['league-manager']['lm_teamreader_basic'] = 'lm_teamreader_basic';
$GLOBALS['TL_CTE']['league-manager']['lm_teamreader_nextmatch'] = 'lm_teamreader_nextmatch';
$GLOBALS['TL_CTE']['league-manager']['lm_teamreader_lastmatch'] = 'lm_teamreader_lastmatch';
$GLOBALS['TL_CTE']['league-manager']['lm_teamreader_matches'] = 'lm_teamreader_matches';
$GLOBALS['TL_CTE']['league-manager']['lm_matchreader_basic'] = 'lm_matchreader_basic';
$GLOBALS['TL_CTE']['league-manager']['lm_matchreader_events'] = 'lm_matchreader_events';
$GLOBALS['TL_CTE']['league-manager']['lm_matchreader_reports'] = 'lm_matchreader_reports';
$GLOBALS['TL_CTE']['league-manager']['lm_playerreader_basic'] = 'lm_playerreader_basic';
/**
 * -------------------------------------------------------------------------
 * BACK END FORM FIELDS
 * -------------------------------------------------------------------------
 */


/**
 * -------------------------------------------------------------------------
 * FRONT END FORM FIELDS
 * -------------------------------------------------------------------------
 */


/**
 * -------------------------------------------------------------------------
 * CACHE TABLES
 * -------------------------------------------------------------------------
 */


/**
 * -------------------------------------------------------------------------
 * HOOKS
 * -------------------------------------------------------------------------
 */


/**
 * -------------------------------------------------------------------------
 * PAGE TYPES
 * -------------------------------------------------------------------------
 */

?>