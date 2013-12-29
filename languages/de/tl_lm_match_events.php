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
$GLOBALS['TL_LANG']['tl_lm_match_events']['event_type']				= array ('Typ', 'Typ des Ereignises festlegen');

$GLOBALS['TL_LANG']['tl_lm_match_events']['times']					= 'Zeitinformationen';
$GLOBALS['TL_LANG']['tl_lm_match_events']['event_time']				= array ('Zeit', 'Die Zeit des Ereignisses');
$GLOBALS['TL_LANG']['tl_lm_match_events']['event_time_unit']			= array ('Zeiteinheit', 'Die Einheit des Ereignisses');

$GLOBALS['TL_LANG']['tl_lm_match_events']['player']					= 'Spielerinformationen';
$GLOBALS['TL_LANG']['tl_lm_match_events']['player1']					= array ('Spieler 1', 'Der erste Spieler des Ereignisses');
$GLOBALS['TL_LANG']['tl_lm_match_events']['player2']					= array ('Spieler 2', 'Der zweite Spieler des Ereignisses');

$GLOBALS['TL_LANG']['tl_lm_match_events']['team']					= 'Mannschaftsinformationen';
$GLOBALS['TL_LANG']['tl_lm_match_events']['team1']					= array ('Mannschaft 1', 'Erste Mannschaft des Ereignisses');
$GLOBALS['TL_LANG']['tl_lm_match_events']['team2']					= array ('Mannschaft 2', 'Zweite Mannschaft des Ereignisses');

$GLOBALS['TL_LANG']['tl_lm_match_events']['result']					= 'Ergenisinformationen';
$GLOBALS['TL_LANG']['tl_lm_match_events']['result_home']				= array ('Heim-Ergebnis', 'Ergebnis der Heimmannschaft');
$GLOBALS['TL_LANG']['tl_lm_match_events']['result_away']				= array ('Ausw&auml;rts-Ergebnis', 'Ergebnis der Ausw&auml;rtsmannschaft');

$GLOBALS['TL_LANG']['tl_lm_match_events']['additional_information']	= 'Zus&auml;tzliche Informationen';
$GLOBALS['TL_LANG']['tl_lm_match_events']['additional_text']			= array ('Zus&auml;tzlicher Text', 'Einen zus&auml;tzlichen Text dem Ereignis hinzuf&uuml;gen');
$GLOBALS['TL_LANG']['tl_lm_match_events']['picture']					= array ('Bild', 'Bild dieses Ereignisses');

$GLOBALS['TL_LANG']['tl_lm_match_events']['texts']					= 'Textfelder';
$GLOBALS['TL_LANG']['tl_lm_match_events']['text1']					= array ('Text 1', 'Erstes Textfeld');
$GLOBALS['TL_LANG']['tl_lm_match_events']['text2']					= array ('Text 2', 'Zweites Textfeld');

$GLOBALS['TL_LANG']['tl_lm_match_events']['numbers']				= 'Nummernfelder';
$GLOBALS['TL_LANG']['tl_lm_match_events']['number1']				= array ('Nummer 1', 'Erstes Nummernfeld');
$GLOBALS['TL_LANG']['tl_lm_match_events']['number2']				= array ('Nummer 2', 'Zweites Nummernfeld');

/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_lm_match_events']['event_time_unit']['reference']['sec']		= 'Sekunde';
$GLOBALS['TL_LANG']['tl_lm_match_events']['event_time_unit']['reference']['min']		= 'Minute';
$GLOBALS['TL_LANG']['tl_lm_match_events']['event_time_unit']['reference']['hour']	= 'Stunde';
$GLOBALS['TL_LANG']['tl_lm_match_events']['event_time_unit']['reference']['haltime']	= 'Halbzeit';
$GLOBALS['TL_LANG']['tl_lm_match_events']['event_time_unit']['reference']['round']	= 'Runde';
$GLOBALS['TL_LANG']['tl_lm_match_events']['event_time_unit']['reference']['quarter']	= 'Viertel';
$GLOBALS['TL_LANG']['tl_lm_match_events']['event_time_unit']['reference']['inning']	= 'Inning';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_lm_match_events']['new']    = array('Ereignis hinzuf&uuml;gen', 'Ein Ereignis hinzuf&uuml;gen');
$GLOBALS['TL_LANG']['tl_lm_match_events']['edit']   = array('Ereignis bearbeiten', 'Das Ereignis bearbeiten');
$GLOBALS['TL_LANG']['tl_lm_match_events']['copy']   = array('Ereignis kopieren', 'Dieses Ereignis kopieren');
$GLOBALS['TL_LANG']['tl_lm_match_events']['delete'] = array('Ereignis l&ouml;schen', 'Dieses Ereignis l&ouml;schen');
$GLOBALS['TL_LANG']['tl_lm_match_events']['show']   = array('Ereignis anzeigen', 'Dieses Ereignis anzeigen');

?>