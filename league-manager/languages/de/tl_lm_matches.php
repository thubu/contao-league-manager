<?php
/**
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
$GLOBALS['TL_LANG']['tl_lm_matches']['score_home'] = array('Endergebnis Heimmannschaft', 'Endergebnis Heimmannschaft');
$GLOBALS['TL_LANG']['tl_lm_matches']['halftimescore_home'] = array('Halbzeitergebnis Heimmannschaft', 'Tore 1.Halbzeit Heimmannschaft');


$GLOBALS['TL_LANG']['tl_lm_matches']['away'] = 'Ausw&auml;rtsmannschaft';
$GLOBALS['TL_LANG']['tl_lm_matches']['team_away'] = array('Ausw&auml;rtsmannschaft', 'Name der Heimmannschaft');
$GLOBALS['TL_LANG']['tl_lm_matches']['score_away'] = array('Endergebnis Ausw&auml;rtsmannschaft', 'Endergebnis Ausw&auml;rtsmannschaft');
$GLOBALS['TL_LANG']['tl_lm_matches']['halftimescore_away'] = array('Halbzeitergebnis Ausw&auml;rtsmannschaft', 'Tore 1.Halbzeit Ausw&auml;rtsmannschaft');


$GLOBALS['TL_LANG']['tl_lm_matches']['points'] = 'Straf-Punkte';
$GLOBALS['TL_LANG']['tl_lm_matches']['different_points'] = array('Straf-Punktevergabe', 'Die Punkte f&uuml;r die Mannschaften weichen von den Grundeinstellungen Wettkampf ab. Sie sind nur f&uuml;r dieses Spiel zu erfassen und g&uuml;ltig !');
$GLOBALS['TL_LANG']['tl_lm_matches']['points_home'] = array('Straf-Punkte Heimmannschaft', 'Straf-Punkte f&uuml;r die Heimmannschaft.');
$GLOBALS['TL_LANG']['tl_lm_matches']['points_away'] = array('Straf-Punkte Gastmannschaft', 'Straf-Punkte f&uuml;r die Gastmannschaft.');

$GLOBALS['TL_LANG']['tl_lm_matches']['confirmed'] = 'Ergebnis best&auml;tigt';
$GLOBALS['TL_LANG']['tl_lm_matches']['result_confirmed'] = array('Ergebnis best&auml;tigt', 'Ausw&auml;hlen, wenn das Ergebnis offiziell best&auml;tigt wurde');

$GLOBALS['TL_LANG']['tl_lm_matches']['matchlocation'] = 'Austragungsort';
$GLOBALS['TL_LANG']['tl_lm_matches']['venue'] = array('Ort', 'Definiert den Austragungsort des Matches');
$GLOBALS['TL_LANG']['tl_lm_matches']['location'] = array('Stadion', 'Stadion, in dem das Spiel statt findet');
$GLOBALS['TL_LANG']['tl_lm_matches']['street'] = array('Stra&szlig;e', 'Stra&szlig;e des Stadions');
$GLOBALS['TL_LANG']['tl_lm_matches']['zip'] = array('Postleitzahl', 'Postleitzahl des Stadions');
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
