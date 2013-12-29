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



/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_lm_match_events']['event_type']				= array ('Event Type', 'Defines the type of event');

$GLOBALS['TL_LANG']['tl_lm_match_events']['times']					= 'Time Information';
$GLOBALS['TL_LANG']['tl_lm_match_events']['event_time']				= array ('Event time', 'The time of this event');
$GLOBALS['TL_LANG']['tl_lm_match_events']['event_time_unit']			= array ('Event time unit', 'The unit of time of this event (e.g. minutes, round, inning)');

$GLOBALS['TL_LANG']['tl_lm_match_events']['player']					= 'Player Information';
$GLOBALS['TL_LANG']['tl_lm_match_events']['player1']					= array ('Player 1', 'First player of this event');
$GLOBALS['TL_LANG']['tl_lm_match_events']['player2']					= array ('Player 2', 'Second player of this event');

$GLOBALS['TL_LANG']['tl_lm_match_events']['team']					= 'Team Information';
$GLOBALS['TL_LANG']['tl_lm_match_events']['team1']					= array ('Team 1', 'First team of this event');
$GLOBALS['TL_LANG']['tl_lm_match_events']['team2']					= array ('Team 2', 'Second team of this event');

$GLOBALS['TL_LANG']['tl_lm_match_events']['result']					= 'Result Information';
$GLOBALS['TL_LANG']['tl_lm_match_events']['result_home']				= array ('Result home', 'Result of the home team');
$GLOBALS['TL_LANG']['tl_lm_match_events']['result_away']				= array ('Result away', 'Result of the away team');

$GLOBALS['TL_LANG']['tl_lm_match_events']['additional_information']	= 'Additional Information';
$GLOBALS['TL_LANG']['tl_lm_match_events']['additional_text']			= array ('Additional text', 'Adds an additional text to this event');
$GLOBALS['TL_LANG']['tl_lm_match_events']['picture']					= array ('Picture', 'Picture of this event');

$GLOBALS['TL_LANG']['tl_lm_match_events']['texts']					= 'Text fields';
$GLOBALS['TL_LANG']['tl_lm_match_events']['text1']					= array ('Text 1', 'First text field');
$GLOBALS['TL_LANG']['tl_lm_match_events']['text2']					= array ('Text 2', 'Second text field');

$GLOBALS['TL_LANG']['tl_lm_match_events']['numbers']				= 'Number fields';
$GLOBALS['TL_LANG']['tl_lm_match_events']['number1']				= array ('Number 1', 'First number field');
$GLOBALS['TL_LANG']['tl_lm_match_events']['number2']				= array ('Number 2', 'Second number field');
/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_lm_match_events']['event_time_unit']['reference']['sec']		= 'second';
$GLOBALS['TL_LANG']['tl_lm_match_events']['event_time_unit']['reference']['min']		= 'minute';
$GLOBALS['TL_LANG']['tl_lm_match_events']['event_time_unit']['reference']['hour']	= 'hour';
$GLOBALS['TL_LANG']['tl_lm_match_events']['event_time_unit']['reference']['haltime']	= 'halftime';
$GLOBALS['TL_LANG']['tl_lm_match_events']['event_time_unit']['reference']['round']	= 'round';
$GLOBALS['TL_LANG']['tl_lm_match_events']['event_time_unit']['reference']['quarter']	= 'Quarter';
$GLOBALS['TL_LANG']['tl_lm_match_events']['event_time_unit']['reference']['inning']	= 'Inning';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_lm_match_events']['new']    = array('Add event', 'Adds an event');
$GLOBALS['TL_LANG']['tl_lm_match_events']['edit']   = array('Edit event', 'Edits the event');
$GLOBALS['TL_LANG']['tl_lm_match_events']['copy']   = array('Copy event', 'Creates a copy of the event');
$GLOBALS['TL_LANG']['tl_lm_match_events']['delete'] = array('Delete event', 'Removes the event');
$GLOBALS['TL_LANG']['tl_lm_match_events']['show']   = array('Show event', 'Displays the event');

?>