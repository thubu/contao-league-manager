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
$GLOBALS['TL_LANG']['tl_lm_players']['name']		= array ('Name', 'The complete name of the player');
$GLOBALS['TL_LANG']['tl_lm_players']['shortname']	= array ('Shortname', 'The shortname of the player');
$GLOBALS['TL_LANG']['tl_lm_players']['nickname']	= array ('Nickname', 'Nickname of this player');
$GLOBALS['TL_LANG']['tl_lm_players']['sortstring'] = array ('Sort string', 'Enter a term to group players in lists');
$GLOBALS['TL_LANG']['tl_lm_players']['website']	= array ('Website', 'Address of the player');
$GLOBALS['TL_LANG']['tl_lm_players']['internal_page']	= array ('Has internal page', 'Internal page of this player');
$GLOBALS['TL_LANG']['tl_lm_players']['hasinternal_page']	= array ('Internal page', 'Check, if player has an internal page');
$GLOBALS['TL_LANG']['tl_lm_players']['picture']		= array ('Picture', 'Path to the picture or logo of the player');
$GLOBALS['TL_LANG']['tl_lm_players']['position']	= array ('Position', 'Position of the player within the team or in a match');
$GLOBALS['TL_LANG']['tl_lm_players']['addinfo']	= array ('Additional information', 'Additional information (like biographie) of the player');
$GLOBALS['TL_LANG']['tl_lm_players']['birthday']	= array ('Birthday', 'Date of birth of the player');


/**
 * Reference
 */


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_lm_players']['new']    = array('Add player', 'Adds a new player');
$GLOBALS['TL_LANG']['tl_lm_players']['edit']   = array('Edit player', 'Edits the player');
$GLOBALS['TL_LANG']['tl_lm_players']['copy']   = array('Copy player', 'Creates a copy of the player');
$GLOBALS['TL_LANG']['tl_lm_players']['delete'] = array('Delete player', 'Deletes the player');
$GLOBALS['TL_LANG']['tl_lm_players']['show']   = array('Show player', 'Displays the player');
$GLOBALS['TL_LANG']['tl_lm_players']['assign_teams']   = array('Assign to teams', 'Assign this player to teams');
?>