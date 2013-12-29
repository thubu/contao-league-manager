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
$GLOBALS['TL_LANG']['tl_lm_teams']['name']		= array ('Name', 'Der vollst&auml;ndige Name der Mannschaft');
$GLOBALS['TL_LANG']['tl_lm_teams']['shortname']	= array ('Kurzname', 'Das K&uuml;rzel der Mannschaft');
$GLOBALS['TL_LANG']['tl_lm_teams']['sortstring']	= array ('Sortierbegriff', 'Begriff um Mannschaften in Listen zu gruppieren');

$GLOBALS['TL_LANG']['tl_lm_teams']['team_location'] = 'Adresse';
$GLOBALS['TL_LANG']['tl_lm_teams']['location'] = array('Ort', 'Name der Heimlokation (Z.B. Stadionname)');
$GLOBALS['TL_LANG']['tl_lm_matches']['street'] = array('Stra&szlig;e', 'Stra&szlig;e der Heimlokation');
$GLOBALS['TL_LANG']['tl_lm_matches']['zip'] = array('Postleitzahl', 'Postleitzahl der Heimlokation');
$GLOBALS['TL_LANG']['tl_lm_matches']['city'] = array('Stadt', 'Stadt der Heimlokation');
$GLOBALS['TL_LANG']['tl_lm_matches']['region'] = array('Region', 'Region der Heimlokation (z.B. Staat)');

$GLOBALS['TL_LANG']['tl_lm_teams']['add_info'] = 'Zus&auml;tzliche Informationen';
$GLOBALS['TL_LANG']['tl_lm_teams']['website']	= array ('Webseite', 'Adresse der Webseite');
$GLOBALS['TL_LANG']['tl_lm_teams']['logo']		= array ('Logo', 'Pfad zum Logo der Mannschaft');
$GLOBALS['TL_LANG']['tl_lm_teams']['ownteam']	= array ('Eigene Mannschaft', 'Anklicken, wenn diese Mannschaft die eigene ist');
$GLOBALS['TL_LANG']['tl_lm_teams']['internal_page']	= array ('Interne Seite', 'Interne Seite der Mannschaft');
$GLOBALS['TL_LANG']['tl_lm_teams']['hasinternal_page']	= array ('Hat interne Seite', 'Anklicken, wenn die Mannschaft eine interne Seite hat');
/**
 * Reference
 */



/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_lm_teams']['new']    = array('Mannschaft hinzuf&uuml;gen', 'F&uuml;gt eine Mannschaft hinzu');
$GLOBALS['TL_LANG']['tl_lm_teams']['edit']   = array('Mannschaft bearbeiten', 'Bearbeitet die Mannschaft');
$GLOBALS['TL_LANG']['tl_lm_teams']['copy']   = array('Mannschaft kopieren', 'Erstellt eine Kopie der Mannschaft');
$GLOBALS['TL_LANG']['tl_lm_teams']['delete'] = array('Mannschaft l&ouml;schen', 'Entfernt die Mannschaft');
$GLOBALS['TL_LANG']['tl_lm_teams']['show']   = array('Mannschaft anzeigen', 'Zeigt die Mannschaft an');

?>