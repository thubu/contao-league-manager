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
$GLOBALS['TL_LANG']['tl_lm_matches']['datetime'] = 'Datum / Uhrzeit';
$GLOBALS['TL_LANG']['tl_lm_matches']['startdate'] = array('Startdatum', 'Datum des Matches');
$GLOBALS['TL_LANG']['tl_lm_matches']['starttime'] = array('Startzeit', 'Startzeit des Matches');
$GLOBALS['TL_LANG']['tl_lm_matches']['enddate'] = array('Enddatum', 'Datum des Endes des Matches');
$GLOBALS['TL_LANG']['tl_lm_matches']['endtime'] = array('Endzeit', 'Uhrzeit des Endes des Matches');


$GLOBALS['TL_LANG']['tl_lm_matches']['home'] = 'Heimmannschaft';
$GLOBALS['TL_LANG']['tl_lm_matches']['team_home'] = array('Heimmannschaft', 'Name der Heimmannschaft');
$GLOBALS['TL_LANG']['tl_lm_matches']['score_home'] = array('Ergebnis Heimmannschaft', 'Punkte der Heimmannschaft');

$GLOBALS['TL_LANG']['tl_lm_matches']['away'] = 'Ausw&auml;rtsmannschaft';
$GLOBALS['TL_LANG']['tl_lm_matches']['team_away'] = array('Ausw&auml;rtsmannschaft', 'Name der Heimmannschaft');
$GLOBALS['TL_LANG']['tl_lm_matches']['score_away'] = array('Ergebnis Ausw&auml;rtsmannschaft', 'Punkte der Ausw&auml;rtsmannschaft');

$GLOBALS['TL_LANG']['tl_lm_matches']['points'] = 'Punkte';
$GLOBALS['TL_LANG']['tl_lm_matches']['different_points'] = array('Abweichende Punktevergabe', 'Die Punkte f&uuml;r die Mannschaften weichen von den Einstellungen im Wettkampf ab.');
$GLOBALS['TL_LANG']['tl_lm_matches']['points_home'] = array('Punkte Heimmannschaft', 'Punkte f&uuml;r die Heimmannschaft.');
$GLOBALS['TL_LANG']['tl_lm_matches']['points_away'] = array('Punkte Gastmannschaft', 'Punkte f&uuml;r die Gastmannschaft.');

$GLOBALS['TL_LANG']['tl_lm_matches']['confirmed'] = 'Ergebnis best&auml;tigt';
$GLOBALS['TL_LANG']['tl_lm_matches']['result_confirmed'] = array('Ergebnis best&auml;tigt', 'Ausw&auml;hlen, wenn das Ergebnis offiziell best&auml;tigt wurde');

$GLOBALS['TL_LANG']['tl_lm_matches']['matchlocation'] = 'Austragungsort';
$GLOBALS['TL_LANG']['tl_lm_matches']['venue'] = array('Ort', 'Definiert den Austragungsort des Matches');
$GLOBALS['TL_LANG']['tl_lm_matches']['location'] = array('Lokation', 'Ort, an dem das Match statt findet');
$GLOBALS['TL_LANG']['tl_lm_matches']['street'] = array('Stra&szlig;e', 'Stra&szlig;e des Austragungsortes');
$GLOBALS['TL_LANG']['tl_lm_matches']['zip'] = array('Postleitzahl', 'Postleitzahl des Austragungsortes');
$GLOBALS['TL_LANG']['tl_lm_matches']['city'] = array('Stadt', 'Stadt in der das Match stattfindet');
$GLOBALS['TL_LANG']['tl_lm_matches']['region'] = array('Region', 'Region in der das Match stattfindet (z.B. Staat)');

$GLOBALS['TL_LANG']['tl_lm_matches']['add_information'] = 'Zus&auml;tzliche Informationen';
$GLOBALS['TL_LANG']['tl_lm_matches']['picture'] = array('Bild', 'Bild des Ereignisses');
$GLOBALS['TL_LANG']['tl_lm_matches']['website'] = array('Webseite', 'Externe Webseite mit zus&auml;tzlichen Informationen &uuml;ber das Spiels');
/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_lm_matches']['venue']['reference']['H']='Adresse der Heimmannschaft';
$GLOBALS['TL_LANG']['tl_lm_matches']['venue']['reference']['A']='Adresse der Ausw&auml;rtsmannschaft';
$GLOBALS['TL_LANG']['tl_lm_matches']['venue']['reference']['O']='Andere Adresse';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_lm_matches']['new']    = array('Match hinzuf&uuml;gen', 'Erstellt ein neues Match');
$GLOBALS['TL_LANG']['tl_lm_matches']['edit']   = array('Match bearbeiten', 'Dieses Match bearbeiten');
$GLOBALS['TL_LANG']['tl_lm_matches']['copy']   = array('Match kopieren', 'Erstellt eine Kopie dieses Matches');
$GLOBALS['TL_LANG']['tl_lm_matches']['delete'] = array('Match l&ouml;schen', 'L&ouml;scht dieses Match');
$GLOBALS['TL_LANG']['tl_lm_matches']['show']   = array('Match anzeigen', 'Zeigt dieses Match an');
$GLOBALS['TL_LANG']['tl_lm_matches']['reports']   = array('Berichte', 'Berichte des Matches erstellen oder bearbeiten');
$GLOBALS['TL_LANG']['tl_lm_matches']['events']   = array('Ereignisse', 'Ereignisse des Matches erstellen oder bearbeiten');
?>