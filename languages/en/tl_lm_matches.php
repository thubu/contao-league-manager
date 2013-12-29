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
$GLOBALS['TL_LANG']['tl_lm_matches']['datetime'] = 'Date and time';
$GLOBALS['TL_LANG']['tl_lm_matches']['startdate'] = array('Start Date', 'Date the match begins');
$GLOBALS['TL_LANG']['tl_lm_matches']['starttime'] = array('Start Time', 'Time the match begins');
$GLOBALS['TL_LANG']['tl_lm_matches']['enddate'] = array('End Date', 'Date the match ends');
$GLOBALS['TL_LANG']['tl_lm_matches']['endtime'] = array('End Time', 'Time the match ends');

$GLOBALS['TL_LANG']['tl_lm_matches']['home'] = 'Home team';
$GLOBALS['TL_LANG']['tl_lm_matches']['team_home'] = array('Home team', 'Name of the home team');
$GLOBALS['TL_LANG']['tl_lm_matches']['score_home'] = array('Score home team', 'Score of the home team');

$GLOBALS['TL_LANG']['tl_lm_matches']['away'] = 'Away team';
$GLOBALS['TL_LANG']['tl_lm_matches']['team_away'] = array('Away team', 'Name of the away team');
$GLOBALS['TL_LANG']['tl_lm_matches']['score_away'] = array('Score away team', 'Score of the away team');

$GLOBALS['TL_LANG']['tl_lm_matches']['points'] = 'Points';
$GLOBALS['TL_LANG']['tl_lm_matches']['different_points'] = array('Divergent points', 'The points for the teams differ from the rules set in the contest.');
$GLOBALS['TL_LANG']['tl_lm_matches']['points_home'] = array('Points home team', 'Points for the home team');
$GLOBALS['TL_LANG']['tl_lm_matches']['points_away'] = array('Points away team', 'Points for the away team');
$GLOBALS['TL_LANG']['tl_lm_matches']['confirmed'] = 'Result confirmed';
$GLOBALS['TL_LANG']['tl_lm_matches']['result_confirmed'] = array('Confirmed result', 'Check if the result has been confirmed officially');

$GLOBALS['TL_LANG']['tl_lm_matches']['matchlocation'] = 'Venue';
$GLOBALS['TL_LANG']['tl_lm_matches']['venue'] = array('Venue', 'Defines where the match takes place');
$GLOBALS['TL_LANG']['tl_lm_matches']['location'] = array('Location', 'Location where the match takes place');
$GLOBALS['TL_LANG']['tl_lm_matches']['street'] = array('Street', 'Street of the location');
$GLOBALS['TL_LANG']['tl_lm_matches']['zip'] = array('Zip', 'Zip code of the location');
$GLOBALS['TL_LANG']['tl_lm_matches']['city'] = array('City', 'City where the match takes place');
$GLOBALS['TL_LANG']['tl_lm_matches']['region'] = array('Region', 'Region of the location (e.g. state)');

$GLOBALS['TL_LANG']['tl_lm_matches']['add_information'] = 'Additional Information';
$GLOBALS['TL_LANG']['tl_lm_matches']['picture'] = array('Picture', 'Picture describing this match');
$GLOBALS['TL_LANG']['tl_lm_matches']['website'] = array('Website', 'External website with additional information about this match');

/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_lm_matches']['venue']['reference']['H']='Home team`s address';
$GLOBALS['TL_LANG']['tl_lm_matches']['venue']['reference']['A']='Away team`s address';
$GLOBALS['TL_LANG']['tl_lm_matches']['venue']['reference']['O']='Other address';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_lm_matches']['new']    = array('Add match', 'Creates a new match');
$GLOBALS['TL_LANG']['tl_lm_matches']['edit']   = array('Edit match', 'Edit this match');
$GLOBALS['TL_LANG']['tl_lm_matches']['copy']   = array('Copy match', 'Creates a copy of this match');
$GLOBALS['TL_LANG']['tl_lm_matches']['delete'] = array('Delete match', 'Removes this match');
$GLOBALS['TL_LANG']['tl_lm_matches']['show']   = array('Show match', 'Displays this match');
$GLOBALS['TL_LANG']['tl_lm_matches']['reports']   = array('Reports', 'Create and edit reports for this match');
$GLOBALS['TL_LANG']['tl_lm_matches']['events']   = array('Events', 'Create and edit events of this match');

?>