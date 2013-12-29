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
$GLOBALS['TL_LANG']['tl_lm_rounds']['round_no'] = array('Round number', 'Defines the order of the rounds. Enter 0 for automated numbering.');
$GLOBALS['TL_LANG']['tl_lm_rounds']['name'] = array('Name', 'Name of the round');

$GLOBALS['TL_LANG']['tl_lm_rounds']['dates'] = 'Dates';
$GLOBALS['TL_LANG']['tl_lm_rounds']['dates_finalized'] = array('Dates finalized', 'Check if date and time of the matches are finalized');


/**
 * Reference
 */

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_lm_rounds']['new']    = array('Add round', 'Adds a new round to a league or tournament');
$GLOBALS['TL_LANG']['tl_lm_rounds']['edit']   = array('Edit round', 'Edits the round');
$GLOBALS['TL_LANG']['tl_lm_rounds']['copy']   = array('Copy round', 'Creates a copy of this round');
$GLOBALS['TL_LANG']['tl_lm_rounds']['delete'] = array('Delete round', 'Removes this round');
$GLOBALS['TL_LANG']['tl_lm_rounds']['show']   = array('Show round', 'Displays this round');

?>