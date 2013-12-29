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
$GLOBALS['TL_LANG']['tl_lm_event_masters']['name']				= array ('Name', 'Name der Vorlage');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['sortstring']		= array ('Sortierbegriff', 'Begriff um Vorlagen zu gruppieren');

$GLOBALS['TL_LANG']['tl_lm_event_masters']['time']				= 'Zeit-Felder';
$GLOBALS['TL_LANG']['tl_lm_event_masters']['show_times']			= array ('Zeit-Felder anzeigen', 'Anklicken, um die Zeit-Felder anzuzeigen');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['event_time']			= array ('Zeit-Feld', 'Anklicken, um das Zeit-Feld anzuzeigen');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['event_time_unit']	= array ('Zeit-Einheit-Feld', 'Anklicken, um das Zeit-Einheit-Feld anzuzeigen');

$GLOBALS['TL_LANG']['tl_lm_event_masters']['player']				= 'Spieler-Felder';
$GLOBALS['TL_LANG']['tl_lm_event_masters']['show_player']		= array ('Spieler-Felder anzeigen', 'Anklicken, um die Spieler-Felder anzuzeigen');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['player1']			= array ('Spieler 1-Feld', 'Anklicken, um das Spieler 1-Feld anzuzeigen');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['player2']			= array ('Spieler 2-Feld', 'Anklicken, um das Spieler 2-Feld anzuzeigen');

$GLOBALS['TL_LANG']['tl_lm_event_masters']['team']				= 'Mannschaft-Felder';
$GLOBALS['TL_LANG']['tl_lm_event_masters']['show_teams']			= array ('Mannschaft-Felder anzeigen', 'Anklicken, um die Mannschaft-Felder anzuzeigen');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['team1']				= array ('Mannschaft 1-Feld', 'Anklicken, um das Mannschaft 1-Feld anzuzeigen');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['team2']				= array ('Mannschaft 2-Feld', 'Anklicken, um das Mannschaft 2-Feld anzuzeigen');

$GLOBALS['TL_LANG']['tl_lm_event_masters']['result']				= 'Ergebnis-Felder';
$GLOBALS['TL_LANG']['tl_lm_event_masters']['show_results']		= array ('Ergebnis-Felder anzeigen', 'Anklicken, um die Ergebnis-Felder anzuzeigen');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['result_home']		= array ('Heimergebnis', 'Anklicken, um das Heimergebnis-Feld anzuzeigen');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['result_away']		= array ('Ausw&auml;rtsergebnis', 'Anklicken, um das Ausw&auml;rtsergebnis-Feld anzuzeigen');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['intermediate_result']= array ('Zwischenergebnis', 'Anklicken, um dieses Ergebnis als Zwischenergebnis zu handhaben');

$GLOBALS['TL_LANG']['tl_lm_event_masters']['other']				= 'Weitere Felder';
$GLOBALS['TL_LANG']['tl_lm_event_masters']['show_texts']		= array ('Text-Felder anzeigen', 'Anklicken, um weitere Text-Felder anzuzeigen');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['text1']				= array ('Text 1-Feld', 'Anklicken, um das Text 1-Feld anzuzeigen');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['text2']				= array ('Text 2-Feld', 'Anklicken, um das Text 2-Feld anzuzeigen');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['show_numbers']		= array ('Nummern-Felder anzeigen', 'Anklicken, um weitere Nummern-Felder anzuzeigen');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['number1']			= array ('Nummer 1-Feld', 'Anklicken, um das Nummer 1-Feld anzuzeigen');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['number2']			= array ('Nummer 2-Feld', 'Anklicken, um das Nummer 2-Feld anzuzeigen');


$GLOBALS['TL_LANG']['tl_lm_event_masters']['additional_information']	= 'Zus&auml;tzliche Informationen';
$GLOBALS['TL_LANG']['tl_lm_event_masters']['eventtext']			= array ('Text', 'Text dieses Ereignisses');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['picture']			= array ('Bild', 'Bild dieses Ereignisses');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['statistical_event']	= array ('Statistisches Ereignis', 'Anklicken, um dieses Ereignis als statistisches Ereignis zu behandeln (Ereignis wird in den Listen ausgeblendet)');
/**
 * Reference
 */


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_lm_event_masters']['new']    = array('Ereignisvorlage hinzug&uuml;gen', 'Erstellt eine neue Ereignisvorlage');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['edit']   = array('Ereignisvorlage bearbeiten', 'Diese Ereignisvorlage bearbeiten');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['copy']   = array('Ereignisvorlage kopieren', 'Eine Kopie dieser Ereignisvorlage erstellen');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['delete'] = array('Ereignisvorlage l&ouml;schen', 'Diese Ereignisvorlage entfernen');
$GLOBALS['TL_LANG']['tl_lm_event_masters']['show']   = array('Ereignisvorlage anzeigen', 'Diese Ereignisvorlage anzeigen');

?>