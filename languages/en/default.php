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
 * @package    Language
 * @license    LGPL 
 * @filesource
 */



 
/**
* Content elements
*/
$GLOBALS['TL_LANG']['CTE']['league-manager'] = 'League Manager';
$GLOBALS['TL_LANG']['CTE']['lm_contestreader_basic']   = array('League Manager - Contest reader - Basic Information', 'Displays basic Information about a contest');
$GLOBALS['TL_LANG']['CTE']['lm_contestreader_teams']   = array('League Manager - Contest reader - Teams', 'Lists all teams participating in a contest.');
$GLOBALS['TL_LANG']['CTE']['lm_contestreader_rounds']   = array('League Manager - Contest reader - Rounds', 'Lists all rounds in a contest.');
$GLOBALS['TL_LANG']['CTE']['lm_contestreader_matches']   = array('League Manager - Contest reader - Matches', 'Lists all matches and their results in a contest.');
$GLOBALS['TL_LANG']['CTE']['lm_contestreader_table']   = array('League Manager - Contest reader - Table', 'Generates a result table for a contest.');
$GLOBALS['TL_LANG']['CTE']['lm_contestreader_crosstable']   = array('League Manager - Contest reader - Cross table', 'Generates a cross table for a contest.');

$GLOBALS['TL_LANG']['CTE']['lm_teamreader_nextmatch']   = array('League Manager - Team reader - Next match', 'Shows the next match of a team.');
$GLOBALS['TL_LANG']['CTE']['lm_teamreader_basic']   = array('League Manager - Team reader - Basic Information', 'Displays basic information about a team.');
$GLOBALS['TL_LANG']['CTE']['lm_teamreader_matches']   = array('League Manager - Team reader - Matches', 'Displays matches of a team');

$GLOBALS['TL_LANG']['CTE']['lm_matchreader_events']   = array('League Manager - Match reader - Events', 'Lists all events of a match.');
$GLOBALS['TL_LANG']['CTE']['lm_matchreader_basic']   = array('League Manager - Match reader - Basic Information', 'Displays basic information about a match.');
$GLOBALS['TL_LANG']['CTE']['lm_matchreader_reports']   = array('League Manager - Match reader - Reports', 'Displays reports of a match.');

$GLOBALS['TL_LANG']['CTE']['lm_playerreader_basic']   = array('League Manager - Player reader - Basic Information', 'Displays basic information about a player.');


/**
 * Miscellaneous
 */
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Logo']   = 'Logo';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Team']   = 'Team';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Matches']  = 'Matches';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Win']   = 'W';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Draw']   = 'D';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Lose']   = 'L';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Resplus']   = 'Res +';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Resminus']   = 'Res -';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Resdiff']   = 'Res diff';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Pointsplus']   = 'P+';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Pointsminus']   = 'P-';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Pointsdiff']   = 'P diff';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Pointstotal']   = 'P total';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Pointspenalty']   = 'P penal.';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['select_round_from']   = 'Show rounds from';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['select_round_to']   = 'to';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['select_round_submit']   = 'Show';

$GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['league']   = 'League:';
$GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['start']   = 'Starts:';
$GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['end']   = 'Ends:';
$GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['modus']   = 'Modus:';
$GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['type_league']   = 'League';
$GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['type_tournament']   = 'Tournament';

$GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['name']   = 'Team:';
$GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['shortname']   = 'Shortname:';
$GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['website']   = 'Homepage:';
$GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['location']   = 'Home location:';
$GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['street']   = 'Street:';
$GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['zip']   = 'Zip:';
$GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['city']   = 'City:';
$GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['region']   = 'Region:';

$GLOBALS['TL_LANG']['league-manager']['playerreader_basic']['name']   = 'Player:';
$GLOBALS['TL_LANG']['league-manager']['playerreader_basic']['position']   = 'Position:';
$GLOBALS['TL_LANG']['league-manager']['playerreader_basic']['nickname']   = 'Nickname:';
$GLOBALS['TL_LANG']['league-manager']['playerreader_basic']['birthday']   = 'Birthday:';
$GLOBALS['TL_LANG']['league-manager']['playerreader_basic']['website']   = 'Website:';
$GLOBALS['TL_LANG']['league-manager']['playerreader_basic']['addinfo']   = 'Additional information:';

$GLOBALS['TL_LANG']['league-manager']['matchreader_basic']['startdate']   = 'Start date:';
$GLOBALS['TL_LANG']['league-manager']['matchreader_basic']['enddate']   = 'End date:';
$GLOBALS['TL_LANG']['league-manager']['matchreader_basic']['location']   = 'Location:';
$GLOBALS['TL_LANG']['league-manager']['matchreader_basic']['street']   = 'Street:';
$GLOBALS['TL_LANG']['league-manager']['matchreader_basic']['zip']   = 'Zip:';
$GLOBALS['TL_LANG']['league-manager']['matchreader_basic']['city']   = 'City:';
$GLOBALS['TL_LANG']['league-manager']['matchreader_basic']['region']   = 'Region:';
$GLOBALS['TL_LANG']['league-manager']['matchreader_basic']['website']   = 'Website';

$GLOBALS['TL_LANG']['league-manager']['matchreader_nextmatch']['matchinfos']   = 'More information about the match';

$GLOBALS['TL_LANG']['league-manager']['misc']['nosortstring']   = '(No sortstring)';
$GLOBALS['TL_LANG']['league-manager']['misc']['with_div']   = 'With DIV elements';
$GLOBALS['TL_LANG']['league-manager']['misc']['with_table']   = 'As Table';
?>