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
$GLOBALS['TL_LANG']['tl_lm_contests']['name']		= array ('Name', 'The complete name of the contest');
$GLOBALS['TL_LANG']['tl_lm_contests']['shortname']	= array ('Shortname', 'The shortname of the contest');
$GLOBALS['TL_LANG']['tl_lm_contests']['sortstring'] = array ('Sort string', 'Enter a term to group contests in lists');
$GLOBALS['TL_LANG']['tl_lm_contests']['mode']		= array ('Mode', 'The type of contest');
$GLOBALS['TL_LANG']['tl_lm_contests']['pairing']	= array ('Pairing', 'Defines who is participating in matches.');
$GLOBALS['TL_LANG']['tl_lm_contests']['teams']	= array ('Teams', 'The participating teams');
$GLOBALS['TL_LANG']['tl_lm_contests']['date_start']	= array ('Start date', 'The date this contest begins.');
$GLOBALS['TL_LANG']['tl_lm_contests']['date_end']	= array ('End date', 'The date this contest ends.');
$GLOBALS['TL_LANG']['tl_lm_contests']['rules']	= 'Rules';
$GLOBALS['TL_LANG']['tl_lm_contests']['home_wins_points_home']	= array ('Home wins: Points home', 'Points for the home team in case home wins');
$GLOBALS['TL_LANG']['tl_lm_contests']['home_wins_points_away']	= array ('Home wins: Points away', 'Points for the away team in case home wins');
$GLOBALS['TL_LANG']['tl_lm_contests']['draw_points_home']	= array ('Draw: Points home', 'Points for the home team in case of a draw');
$GLOBALS['TL_LANG']['tl_lm_contests']['draw_points_away']	= array ('Draw: Points away', 'Points for the away team in case of a draw');
$GLOBALS['TL_LANG']['tl_lm_contests']['away_wins_points_home']	= array ('Away wins: Points home', 'Points for the home team in case away wins');
$GLOBALS['TL_LANG']['tl_lm_contests']['away_wins_points_away']	= array ('Away wins: Points away', 'Points for the away team in case away wins');


$GLOBALS['TL_LANG']['tl_lm_contests']['create_rounds_header'] = 'Add rounds/matchdays';
$GLOBALS['TL_LANG']['tl_lm_contests']['create_rounds'] = array ('Add rounds/matchdays', 'Enter the number of rounds/matchdays you want to add');
$GLOBALS['TL_LANG']['tl_lm_contests']['create_rounds']['Title_Tournament'] = 'Round';
$GLOBALS['TL_LANG']['tl_lm_contests']['create_rounds']['Title_League'] = 'Matchday';

/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_lm_contests']['mode']['reference']['L'] = 'League'; 
$GLOBALS['TL_LANG']['tl_lm_contests']['mode']['reference']['T'] = 'Tournament'; 

$GLOBALS['TL_LANG']['tl_lm_contests']['pairing']['reference']['T'] = 'Teams'; 
$GLOBALS['TL_LANG']['tl_lm_contests']['pairing']['reference']['P'] = 'Players';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_lm_contests']['new']    = array('Add contest', 'Adds a new contest');
$GLOBALS['TL_LANG']['tl_lm_contests']['edit']   = array('Edit contest', 'Edit the contest');
$GLOBALS['TL_LANG']['tl_lm_contests']['copy']   = array('Copy contest', 'Creates a copy of the contest');
$GLOBALS['TL_LANG']['tl_lm_contests']['delete'] = array('Delete contest', 'Removes the contest');
$GLOBALS['TL_LANG']['tl_lm_contests']['show']   = array('Show contest', 'Displays the contest');
$GLOBALS['TL_LANG']['tl_lm_contests']['rounds']   = array('Rounds', 'Edit rounds or matchdays of this contest');
$GLOBALS['TL_LANG']['tl_lm_contests']['penalties']	= array ('Penalties', 'Add or substracts points from teams');
$GLOBALS['TL_LANG']['tl_lm_contests']['fixMatches']	= array ('Fix matches', 'Fix the times of matches');
?>