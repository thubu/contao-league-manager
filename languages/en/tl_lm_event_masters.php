<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    leaguemanager 
 * @license    LGPL 
 * @filesource
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_lm_event_masters']['name']				= array ('Name', 'The name of the event master');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['sortstring']		= array ('Sort string', 'Term to group event masters');

$GLOBALS['TL_LANG']['tl_lm_event_masters']['time']				= 'Time fields';
$GLOBALS['TL_LANG']['tl_lm_event_masters']['show_times']		= array ('Show time fields', 'Check to display time fields');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['event_time']		= array ('Event time field', 'Check to display the Event Time Field');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['event_time_unit']	= array ('Event time unit field', 'Check to display the Event Time Field');

$GLOBALS['TL_LANG']['tl_lm_event_masters']['player']			= 'Player fields';
$GLOBALS['TL_LANG']['tl_lm_event_masters']['show_player']		= array ('Show player fields', 'Check to display player fields');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['player1']			= array ('Player 1 field', 'Check to display the Player 1 Field');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['player2']			= array ('Player 2 field', 'Check to display the Player 2 Field');

$GLOBALS['TL_LANG']['tl_lm_event_masters']['team']				= 'Team fields';
$GLOBALS['TL_LANG']['tl_lm_event_masters']['show_teams']			= array ('Show team fields', 'Check to display team fields');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['team1']				= array ('Team 1 field', 'Check to display the Team 1 Field');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['team2']				= array ('Team 2 field', 'Check to display the Team 2 Field');

$GLOBALS['TL_LANG']['tl_lm_event_masters']['result']			= 'Result fields';
$GLOBALS['TL_LANG']['tl_lm_event_masters']['show_results']		= array ('Show result fields', 'Check to display result fields');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['result_home']		= array ('Result home field', 'Check to display the Result Home Field');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['result_away']		= array ('Result away field', 'Check to display the Result Away Field');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['intermediate_result']= array ('Intermediate Result', 'Check if the result should be handled as intermediate result');

$GLOBALS['TL_LANG']['tl_lm_event_masters']['other']				= 'Other fields';
$GLOBALS['TL_LANG']['tl_lm_event_masters']['show_texts']		= array ('Show text fields', 'Check to display additional text fields');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['text1']				= array ('Show text1 field', 'Check to display the text1 field');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['text2']				= array ('Show text2 field', 'Check to display the text2 field');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['show_numbers']		= array ('Show number fields', 'Check to display additional number fields');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['number1']			= array ('Show number1 field', 'Check to display the number1 field');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['number2']			= array ('Show number2 field', 'Check to display the number2 field');


$GLOBALS['TL_LANG']['tl_lm_event_masters']['additional_information']	= 'Additional Information';
$GLOBALS['TL_LANG']['tl_lm_event_masters']['eventtext']			= array ('Event text', 'The text for this type of events');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['picture']			= array ('Picture', 'Picture for this type of events');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['statistical_event']	= array ('Statistical Event', 'Check if this event is for statistics only (Event will be hidden from lists).');
/**
 * Reference
 */


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_lm_event_masters']['new']    = array('Add event master', 'Creates a new event master');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['edit']   = array('Edit event master', 'Edit the event master');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['copy']   = array('Copy event master', 'Creates a copy of the event master');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['delete'] = array('Delete event master', 'Removes the event master');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['show']   = array('Show event master', 'Displays the event master');

?>