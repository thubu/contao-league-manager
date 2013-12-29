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
$GLOBALS['TL_LANG']['tl_lm_contests']['name']		= array ('Name', 'Der vollst&auml;ndige Name des Wettbewerbs');
$GLOBALS['TL_LANG']['tl_lm_contests']['shortname']	= array ('Kurzname', 'Ein Kurzname f&uuml;r den Wettbewerb');
$GLOBALS['TL_LANG']['tl_lm_contests']['sortstring'] = array ('Sortierbegriff', 'Geben Sie einen Begriff an um Wettbewerbe in Listen zu gruppieren');
$GLOBALS['TL_LANG']['tl_lm_contests']['mode']		= array ('Modus', 'Der Typ des Wettbewerbs');
$GLOBALS['TL_LANG']['tl_lm_contests']['pairing']	= array ('Paarung', 'Definiert die Art der Paarung');
$GLOBALS['TL_LANG']['tl_lm_contests']['teams']	= array ('Mannschaften', 'Die teilnehmenden Mannschaften');
$GLOBALS['TL_LANG']['tl_lm_contests']['date_start']	= array ('Startdatum', 'Startdatum des Wettbewerbs.');
$GLOBALS['TL_LANG']['tl_lm_contests']['date_end']	= array ('Enddatum', 'Enddatum des Wettbewerbs.');
$GLOBALS['TL_LANG']['tl_lm_contests']['rules']	= 'Regeln';
$GLOBALS['TL_LANG']['tl_lm_contests']['home_wins_points_home']	= array ('Heimsieg: Punkte Heimmannschaft', 'Punkte f&uuml;r die Heimmannschaft im Falle eines Heimsieges');
$GLOBALS['TL_LANG']['tl_lm_contests']['home_wins_points_away']	= array ('Heimsieg: Punkte Ausw&auml;rtsmannschaft', 'Punkte f&uuml;r die Ausw&auml;rtsmannschaft im Falle eines Heimsieges');
$GLOBALS['TL_LANG']['tl_lm_contests']['draw_points_home']	= array ('Unentschieden: Punkte Heimmannschaft', 'Punkte f&uuml;r die Heimmannschaft im Falle eines Unentschiedens');
$GLOBALS['TL_LANG']['tl_lm_contests']['draw_points_away']	= array ('Unentschieden:  Punkte Ausw&auml;rtsmannschaft', 'Punkte f&uuml;r die Ausw&auml;rtsmannschaft im Falle eines Unentschiedens');
$GLOBALS['TL_LANG']['tl_lm_contests']['away_wins_points_home']	= array ('Ausw&auml;rtssieg: Punkte Heimmannschaft', 'Punkte f&uuml;r die Heimmannschaft im Falle eines Ausw&auml;rtssieges');
$GLOBALS['TL_LANG']['tl_lm_contests']['away_wins_points_away']	= array ('Ausw&auml;rtssieg:  Punkte Ausw&auml;rtsmannschaft', 'Punkte f&uuml;r die Ausw&auml;rtsmannschaft im Falle eines Ausw&auml;rtssieges');


$GLOBALS['TL_LANG']['tl_lm_contests']['create_rounds_header'] = 'Spieltage/Runden hinzuf&uuml;gen';
$GLOBALS['TL_LANG']['tl_lm_contests']['create_rounds'] = array ('Spieltage/Runden hinzuf&uuml;gen', 'Anzahl der Spieltage/Runden, die Sie hinzuf&uuml;gen m&ouml;chten');
$GLOBALS['TL_LANG']['tl_lm_contests']['create_rounds']['Title_Tournament'] = 'Runde';
$GLOBALS['TL_LANG']['tl_lm_contests']['create_rounds']['Title_League'] = 'Spieltag';
/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_lm_contests']['mode']['reference']['L'] = 'Liga';
$GLOBALS['TL_LANG']['tl_lm_contests']['mode']['reference']['T'] = 'Turnier';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_lm_contests']['new']    = array('Wettbewerb hinzuf&uuml;gen', 'F&uuml;gt einen neue Wettbewerb hinzu');
$GLOBALS['TL_LANG']['tl_lm_contests']['edit']   = array('Wettbewerb bearbeiten', 'Diesen Wettbewerb bearbeiten');
$GLOBALS['TL_LANG']['tl_lm_contests']['copy']   = array('Wettbewerb kopieren', 'Erstellt eine Kopie dieses Wettbewerb');
$GLOBALS['TL_LANG']['tl_lm_contests']['delete'] = array('Wettbewerb l&ouml;schen', 'L&ouml;scht diesen Wettbewerb');
$GLOBALS['TL_LANG']['tl_lm_contests']['show']   = array('Wettbewerb anzeigen', 'Diesen Wettbewerb anzeigen');
$GLOBALS['TL_LANG']['tl_lm_contests']['rounds']   = array('Runden bearbeiten', 'Runden des Wettbewerbs bearbeiten');
$GLOBALS['TL_LANG']['tl_lm_contests']['penalties']	= array ('Strafen', 'Punkte den Mannschaften ab- oder anerkennen');
$GLOBALS['TL_LANG']['tl_lm_contests']['fixMatches']	= array ('Matches korrigieren', 'Korrigiert die Zeiten der Matches');
