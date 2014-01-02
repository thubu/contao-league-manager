<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package League-manager
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'lm_contestreader_awaytable'  => 'system/modules/league-manager/classes/lm_contestreader_awaytable.php',
	'lm_contestreader_basic'      => 'system/modules/league-manager/classes/lm_contestreader_basic.php',
	'lm_contestreader_crosstable' => 'system/modules/league-manager/classes/lm_contestreader_crosstable.php',
	'lm_contestreader_hometable'  => 'system/modules/league-manager/classes/lm_contestreader_hometable.php',
	'lm_contestreader_matches'    => 'system/modules/league-manager/classes/lm_contestreader_matches.php',
	'lm_contestreader_rounds'     => 'system/modules/league-manager/classes/lm_contestreader_rounds.php',
	'lm_contestreader_table'      => 'system/modules/league-manager/classes/lm_contestreader_table.php',
	'lm_contestreader_teams'      => 'system/modules/league-manager/classes/lm_contestreader_teams.php',
	'lm_fixes'                    => 'system/modules/league-manager/classes/lm_fixes.php',
	'lm_matchreader_basic'        => 'system/modules/league-manager/classes/lm_matchreader_basic.php',
	'lm_matchreader_events'       => 'system/modules/league-manager/classes/lm_matchreader_events.php',
	'lm_matchreader_reports'      => 'system/modules/league-manager/classes/lm_matchreader_reports.php',
	'lm_playerreader_basic'       => 'system/modules/league-manager/classes/lm_playerreader_basic.php',
	'lm_teamreader_basic'         => 'system/modules/league-manager/classes/lm_teamreader_basic.php',
	'lm_teamreader_lastmatch'     => 'system/modules/league-manager/classes/lm_teamreader_lastmatch.php',
	'lm_teamreader_matches'       => 'system/modules/league-manager/classes/lm_teamreader_matches.php',
	'lm_teamreader_nextmatch'     => 'system/modules/league-manager/classes/lm_teamreader_nextmatch.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'lm_contestreader_awaytable'     => 'system/modules/league-manager/templates',
	'lm_contestreader_basic'         => 'system/modules/league-manager/templates',
	'lm_contestreader_crosstable'    => 'system/modules/league-manager/templates',
	'lm_contestreader_hometable'     => 'system/modules/league-manager/templates',
	'lm_contestreader_matches'       => 'system/modules/league-manager/templates',
	'lm_contestreader_matches_table' => 'system/modules/league-manager/templates',
	'lm_contestreader_rounds'        => 'system/modules/league-manager/templates',
	'lm_contestreader_table'         => 'system/modules/league-manager/templates',
	'lm_contestreader_teams'         => 'system/modules/league-manager/templates',
	'lm_contestreader_teams_table'   => 'system/modules/league-manager/templates',
	'lm_matchreader_basic'           => 'system/modules/league-manager/templates',
	'lm_matchreader_events'          => 'system/modules/league-manager/templates',
	'lm_matchreader_events_table'    => 'system/modules/league-manager/templates',
	'lm_matchreader_reports'         => 'system/modules/league-manager/templates',
	'lm_playerreader_basic'          => 'system/modules/league-manager/templates',
	'lm_teamreader_basic'            => 'system/modules/league-manager/templates',
	'lm_teamreader_lastmatch'        => 'system/modules/league-manager/templates',
	'lm_teamreader_lastmatch_table'  => 'system/modules/league-manager/templates',
	'lm_teamreader_matches'          => 'system/modules/league-manager/templates',
	'lm_teamreader_matches_table'    => 'system/modules/league-manager/templates',
	'lm_teamreader_nextmatch'        => 'system/modules/league-manager/templates',
	'lm_teamreader_nextmatch_table'  => 'system/modules/league-manager/templates',
));
