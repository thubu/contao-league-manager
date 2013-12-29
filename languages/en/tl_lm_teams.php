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
$GLOBALS['TL_LANG']['tl_lm_teams']['name']		= array ('Name', 'The complete name of the team');
$GLOBALS['TL_LANG']['tl_lm_teams']['shortname']	= array ('Shortname', 'The shortname of the team');
$GLOBALS['TL_LANG']['tl_lm_teams']['sortstring']	= array ('Sort string', 'Term to group teams in lists');

$GLOBALS['TL_LANG']['tl_lm_teams']['team_location'] = 'Home location';
$GLOBALS['TL_LANG']['tl_lm_teams']['location'] = array('Location', 'Name of the home location. E.g. the stadium');
$GLOBALS['TL_LANG']['tl_lm_teams']['street'] = array('Street', 'Street of the location');
$GLOBALS['TL_LANG']['tl_lm_teams']['zip'] = array('Zip', 'Zip code of the location');
$GLOBALS['TL_LANG']['tl_lm_teams']['city'] = array('City', 'City of the location');
$GLOBALS['TL_LANG']['tl_lm_teams']['region'] = array('Region', 'Region of the location (e.g. state)');

$GLOBALS['TL_LANG']['tl_lm_teams']['add_info'] = 'Additional information';
$GLOBALS['TL_LANG']['tl_lm_teams']['ownteam']	= array ('Own team', 'Check if this is your own team');
$GLOBALS['TL_LANG']['tl_lm_teams']['website']	= array ('Website', 'Address of the website');
$GLOBALS['TL_LANG']['tl_lm_teams']['logo']		= array ('Logo', 'Path to the logo of the team');
$GLOBALS['TL_LANG']['tl_lm_teams']['internal_page']	= array ('Interne Seite', 'Interne Seite des Teams');
$GLOBALS['TL_LANG']['tl_lm_teams']['internal_page']	= array ('Has internal page', 'Internal page of this team');
$GLOBALS['TL_LANG']['tl_lm_teams']['hasinternal_page']	= array ('Internal page', 'Check, if team has an internal page');

/**
 * Reference
 */


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_lm_teams']['new']    = array('Add team', 'Adds a new team');
$GLOBALS['TL_LANG']['tl_lm_teams']['edit']   = array('Edit team', 'Edit the team');
$GLOBALS['TL_LANG']['tl_lm_teams']['copy']   = array('Copy team', 'Creates a copy of the team');
$GLOBALS['TL_LANG']['tl_lm_teams']['delete'] = array('Delete team', 'Deletes the team');
$GLOBALS['TL_LANG']['tl_lm_teams']['show']   = array('Show team', 'Displays the team');

?>