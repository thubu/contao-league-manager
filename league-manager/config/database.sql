-- ********************************************************
-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************


-- --------------------------------------------------------

-- 
-- Table `tl_lm_contests`
-- 

CREATE TABLE `tl_lm_contests` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `shortname` varchar(25) NOT NULL default '',
  `sortstring` varchar(255) NOT NULL default '',
  `mode` char(1) NOT NULL default '',  
  `pairing` char(1) NOT NULL default '',
  `teams` blob NULL,
  `home_wins_points_home` int(10) NULL default '0',
  `home_wins_points_away` int(10) NULL default '0',
  `draw_points_home` int(10) NULL default '0',
  `draw_points_away` int(10) NULL default '0',
  `away_wins_points_home` int(10) NULL default '0',
  `away_wins_points_away` int(10) NULL default '0',
  `date_start` varchar(10) NOT NULL default '',
  `date_end` varchar(10) NOT NULL default '',
  `create_rounds` int(10) NOT NULL default '0',
  `place_decent` varchar(10) NOT NULL default '', 
  `place_decent_comment` varchar(255) NOT NULL default '', 
  `place_decentrelegation` varchar(10) NOT NULL default '',
  `place_decentrelegation_comment` varchar(255) NOT NULL default '',
  `place_ascent` varchar(10) NOT NULL default '',
  `place_ascent_comment` varchar(255) NOT NULL default '',
  `place_ascentrelegation` varchar(10) NOT NULL default '',
  `place_ascentrelegation_comment` varchar(255) NOT NULL default '',
  `place_ascentadditional` varchar(10) NOT NULL default '',
  `place_ascentadditional_comment` varchar(255) NOT NULL default '',
  `place_specialplace` varchar(10) NOT NULL default '',
  `place_specialplace_comment` varchar(255) NOT NULL default '',
  `playingtime` varchar(10) NOT NULL default '',
  `playingperiods` varchar(10) NOT NULL default '',
  `halftimebreak` varchar(10) NOT NULL default '',
  `overtime` char(1) NOT NULL default '',
  `overtime_comment` varchar(255) NOT NULL default '',
  `overtime_time` varchar(10) NOT NULL default '',  
  `overtime_break` varchar(10) NOT NULL default '', 
  `overtime_periods` varchar(10) NOT NULL default '',
  `penalty_shootout` char(1) NOT NULL default '',  
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM default CHARSET=utf8;


-- --------------------------------------------------------

-- 
-- Table `tl_lm_contest_penalties`
-- 

CREATE TABLE `tl_lm_contest_penalties` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `pid` int(10) unsigned NOT NULL default '0',
  `team` int(10) NULL default '0',
  `points` int(10) NOT NULL default '0',
  `reason` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM default CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- Table `tl_lm_team_to_contest`
-- 

CREATE TABLE `tl_lm_team_to_contest` (
        `team` int(10) unsigned NOT NULL default '0',
        `contest` int(10) unsigned NOT NULL default '0'
) ENGINE=MyISAM default CHARSET=utf8;



-- --------------------------------------------------------

-- 
-- Table `tl_lm_rounds`
-- 

CREATE TABLE `tl_lm_rounds` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `pid` int(10) unsigned NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `mode` char(1) NOT NULL default '',  
  `round_no` int(10) unsigned NOT NULL default '0',
  `dates_finalized` char(1) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM default CHARSET=utf8;


-- --------------------------------------------------------

-- 
-- Table `tl_lm_event_masters`
-- 

CREATE TABLE `tl_lm_event_masters` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `pid` int(10) unsigned NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `sortstring` varchar(255) NOT NULL default '',
  `show_times` char(1) NOT NULL default '',
  `event_time` char(1) NOT NULL default '',
  `event_time_unit` char(1) NOT NULL default '',
  `show_player` char(1) NOT NULL default '',
  `player1` char(1) NOT NULL default '0',
  `player2` char(1) NOT NULL default '0',
  `show_teams` char(1) NOT NULL default '',
  `team1` char(1) NOT NULL default '0',
  `team2` char(1) NOT NULL default '0',
  `show_results` char(1) NOT NULL default '',
  `result_home` char(1) NOT NULL default '0',
  `result_away` char(1) NOT NULL default '0',
  `show_texts` char(1) NOT NULL default '',
  `text1` char(1) NOT NULL default '',
  `text2` char(1) NOT NULL default '',
  `show_numbers` char(1) NOT NULL default '',
  `number1` char(1) NOT NULL default '0',
  `number2` char(1) NOT NULL default '0',
  `penalty_duration` char(1) NOT NULL default '0',
  `intermediate_result` char(1) NOT NULL default '0',
  `statistical_event` char(1) NOT NULL default '0',
  `eventtext` blob NULL,
  `picture` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM default CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- Table `tl_lm_match_reports`
-- 

CREATE TABLE `tl_lm_match_reports` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `pid` int(10) unsigned NOT NULL default '0',
  `header` varchar(255) NOT NULL default '',
  `reporttype` char(1) NOT NULL default '',
  `text` text NULL,
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM default CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- Table `tl_lm_events`
-- 

CREATE TABLE `tl_lm_match_events` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `pid` int(10) unsigned NOT NULL default '0',
  `event_type` int(10) NOT NULL default '0',
  `event_order` int(10) NOT NULL default '0',
  `event_time` varchar(255) NOT NULL default '0',
  `event_time_unit` varchar(255) NOT NULL default '0',
  `player1` int(10) NOT NULL default '0',
  `player2` int(10) NOT NULL default '0',
  `team1` int(10) NOT NULL default '0',
  `team2` int(10) NOT NULL default '0',
  `text1` varchar(255) NOT NULL default '0',
  `text2` varchar(255) NOT NULL default '0',
  `number1` int(10) NOT NULL default '0',
  `number2` int(10) NOT NULL default '0',
  `result_home` varchar(20) NOT NULL default '0',
  `result_away` varchar(20) NOT NULL default '0',
  `penalty_duration` varchar(20) NOT NULL default '0',
  `penalty_duration_unit` int(10) NOT NULL default '0',
  `picture` varchar(255) NOT NULL default '',
  `additional_text` blob NULL,
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM default CHARSET=utf8;


-- --------------------------------------------------------

-- 
-- Table `tl_lm_teams`
-- 

CREATE TABLE `tl_lm_teams` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `pid` int(10) NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `shortname` varchar(25) NOT NULL default '',
  `sortstring` varchar(255) NOT NULL default '',
  `gender` varchar(255) NOT NULL default '',
  `location` varchar(255) NOT NULL default '',
  `street` varchar(255) NOT NULL default '',
  `zip` varchar(255) NOT NULL default '',
  `city` varchar(255) NOT NULL default '',
  `country` varchar(255) NOT NULL default '',
  `locationtraining` varchar(255) NOT NULL default '',
  `streettraining` varchar(255) NOT NULL default '',
  `ziptraining` varchar(255) NOT NULL default '',
  `citytraining` varchar(255) NOT NULL default '',
  `countrytraining` varchar(255) NOT NULL default '',
  `website` varchar(255) NULL default '',
  `hasinternal_page` char(1) NOT NULL default '',
  `internal_page` int(10) NOT NULL default '0',
  `logo` varchar(255) NULL default '',
  `founded` varchar(255) NULL default '',
  `terminated` varchar(255) NULL default '',
  `ownteam` char(1) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM default CHARSET=utf8;


-- --------------------------------------------------------

-- 
-- Table `tl_lm_clubs`
-- 

CREATE TABLE `tl_lm_clubs` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `pid` int(10) NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `shortname` varchar(255) NOT NULL default '',
  `sortstring` varchar(255) NOT NULL default '',
  `street` varchar(255) NULL default '',
  `zip` varchar(255) NULL default '',
  `city` varchar(255) NULL default '',
  `country` varchar(255) NULL default '',
  `phone` varchar(255) NULL default '',
  `fax` varchar(255) NULL default '',
  `mail` varchar(255) NULL default '',
  `website` varchar(255) NULL default '',
  `logo` varchar(255) NULL default '',
  `ownclub` char(1) NOT NULL default '',
  `founded` varchar(255) NULL default '',
  `hasinternal_page` char(1) NOT NULL default '',
  `internal_page` int(10) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM default CHARSET=utf8;

-- --------------------------------------------------------
 
 
--
-- Table `tl_lm_season`
--
 
CREATE TABLE `tl_lm_season` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `pid` int(10) NOT NULL default '0',
  `season` int(10) NULL default '0',
  `sportstype` int(10) NULL default '0',
  `hasinternal_page` char(1) NOT NULL default '',
  `internal_page` int(10) NOT NULL default '0',
  `logo` varchar(255) NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM default CHARSET=utf8;
 
-- --------------------------------------------------------


-- 
-- Table `tl_lm_stadium`
-- 

CREATE TABLE `tl_lm_stadium` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `pid` int(10) NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `shortname` varchar(255) NOT NULL default '',
  `sortstring` varchar(255) NOT NULL default '',
  `street` varchar(255) NULL default '',
  `zip` varchar(255) NULL default '',
  `city` varchar(255) NULL default '',
  `country` varchar(255) NULL default '',
  `phone` varchar(255) NULL default '',
  `fax` varchar(255) NULL default '',
  `mail` varchar(255) NULL default '',
  `website` varchar(255) NULL default '',
  `logo` varchar(255) NULL default '',
  `buildyear` varchar(255) NULL default '',
  `capacity` varchar(255) NULL default '',
  `capacityinternational` varchar(255) NULL default '',
  `seats` varchar(255) NULL default '',
  `seatsroofed` varchar(255) NULL default '',
  `standings` varchar(255) NULL default '',
  `standingsroofed` varchar(255) NULL default '',
  `track` varchar(255) NULL default '',
  `lodges` varchar(255) NULL default '',
  `subsoil` varchar(255) NULL default '',  
  `undersoilheating` varchar(255) NULL default '',
  `fieldsize` varchar(255) NULL default '',  
  `hasinternal_page` char(1) NOT NULL default '',
  `internal_page` int(10) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM default CHARSET=utf8;
-- --------------------------------------------------------


-- 
-- Table `tl_lm_teams_to_stadium`
-- 

CREATE TABLE `tl_lm_teams_to_stadium` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `pid` int(10) NOT NULL default '0',
  `team` int(10) NULL default '0',
  `date_from` varchar(10) NOT NULL default '',
  `date_to` varchar(10) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM default CHARSET=utf8;

-- --------------------------------------------------------


-- 
-- Table `tl_lm_teams_to_club`
-- 

CREATE TABLE `tl_lm_teams_to_club` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `pid` int(10) NOT NULL default '0',
  `team` int(10) NULL default '0',
  `date_from` varchar(10) NOT NULL default '',
  `date_to` varchar(10) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM default CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- Table `tl_lm_players`
-- 

CREATE TABLE `tl_lm_players` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `pid` int(10) NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `firstname` varchar(255) NOT NULL default '',
  `surname` varchar(255) NOT NULL default '',
  `shortname` varchar(10) NOT NULL default '',
  `sortstring` varchar(255) NOT NULL default '',
  `website` varchar(255) NULL default '',
  `hasinternal_page` char(1) NOT NULL default '',
  `internal_page` int(10) NOT NULL default '0',
  `birthday` varchar(10) NOT NULL default '',
  `birthplace` varchar(10) NOT NULL default '',  
  `nationality` varchar(255) NULL default '',
  `position` varchar(255) NULL default '',
  `foot` varchar(255) NULL default '',
  `nickname` varchar(255) NULL default '',
  `picture` varchar(255) NULL default '',
  `endofcareer` varchar(255) NULL default '',  
  `addinfo` blob NULL,
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM default CHARSET=utf8;


-- --------------------------------------------------------

-- 
-- Table `tl_lm_coach`
-- 

CREATE TABLE `tl_lm_coach` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `pid` int(10) NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `firstname` varchar(255) NOT NULL default '',
  `surname` varchar(255) NOT NULL default '',
  `shortname` varchar(10) NOT NULL default '',
  `sortstring` varchar(255) NOT NULL default '',
  `website` varchar(255) NULL default '',
  `hasinternal_page` char(1) NOT NULL default '',
  `internal_page` int(10) NOT NULL default '0',
  `birthday` varchar(10) NOT NULL default '',
  `birthplace` varchar(10) NOT NULL default '',  
  `nationality` varchar(255) NULL default '',
  `licence` varchar(255) NULL default '',
  `nickname` varchar(255) NULL default '',
  `picture` varchar(255) NULL default '',
  `endofcareer` varchar(255) NULL default '',  
  `addinfo` blob NULL, 
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM default CHARSET=utf8;


-- --------------------------------------------------------

-- 
-- Table `tl_lm_matches`
-- 

CREATE TABLE `tl_lm_matches` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `pid` int(10) NOT NULL default '0',
  `startdate` int(10) NOT NULL default '0',
  `starttime` int(10) NOT NULL default '0',
  `enddate` int(10) NOT NULL default '0',
  `endtime` int(10) NOT NULL default '0',
  `team_home` int(10) NOT NULL default '0',
  `team_away` int(10) NOT NULL default '0',
  `score_home` varchar(20) NOT NULL default '',
  `halftimescore_home` varchar(20) NOT NULL default '',
  `score_away` varchar(20) NOT NULL default '',
  `halftimescore_away` varchar(20) NOT NULL default '',
  `different_points` char(1) NOT NULL default '',
  `points_home` int(10) NOT NULL default '0',
  `points_away` int(10) NOT NULL default '0',
  `result_confirmed` char(1) NOT NULL default '',
  `picture` varchar(255) NOT NULL default '',
  `venue` char(1) NOT NULL default 'H',
  `location` varchar(255) NOT NULL default '',
  `street` varchar(255) NOT NULL default '',
  `zip` varchar(255) NOT NULL default '',
  `city` varchar(255) NOT NULL default '',
  `region` varchar(255) NOT NULL default '',
  `website` varchar(255) NOT NULL default '',
  `hasinternal_page` char(1) NOT NULL default '',
  `internal_page` int(10) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM default CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- Table `tl_lm_players_to_team`
-- 

CREATE TABLE `tl_lm_players_to_team` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `pid` int(10) NOT NULL default '0',
  `club` int(10) NOT NULL default '0',
  `team` int(10) NOT NULL default '0',
  `date_from` varchar(10) NOT NULL default '',
  `date_to` varchar(10) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM default CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- Table `tl_content`
-- 

CREATE TABLE `tl_content` (
  `lm_contest` int(10) NOT NULL default '0',
  `lm_showlogo` char(1) NOT NULL default '1',
  `lm_team` int(10) NOT NULL default '0',
  `lm_useredirectmatch` char(1) NOT NULL default '',
  `lm_useredirectplayer` char(1) NOT NULL default '',
  `lm_useredirectteam` char(1) NOT NULL default '',
  `lm_useredirectclub` char(1) NOT NULL default '',
  `lm_useredirectcontest` char(1) NOT NULL default '',
  `lm_useredirectstadium` char(1) NOT NULL default '',
  `lm_redirectplayer` int(10) NOT NULL default '0',
  `lm_redirectteam` int(10) NOT NULL default '0',
  `lm_redirectclub` int(10) NOT NULL default '0',
  `lm_redirectmatch` int(10) NOT NULL default '0',
  `lm_redirectcontest` int(10) NOT NULL default '0',
  `lm_redirectstadium` int(10) NOT NULL default '0',  
  `lm_template` varchar(255) NOT NULL default '',
  `lm_usefixedteam` char(1) NOT NULL default '',
  `lm_team` int(10) NOT NULL default '0',
  `lm_usefixedclub` char(1) NOT NULL default '',
  `lm_club` int(10) NOT NULL default '0',
  `lm_usefixedstadium` char(1) NOT NULL default '',
  `lm_stadium` int(10) NOT NULL default '0',
  `lm_usefixedcontest` char(1) NOT NULL default '',
  `lm_contest` int(10) NOT NULL default '0',
  `lm_usefixedplayer` char(1) NOT NULL default '',
  `lm_player` int(10) NOT NULL default '0',
  `lm_usefixedmatch` char(1) NOT NULL default '',
  `lm_match` int(10) NOT NULL default '0',
  `lm_se_friendly` char(1) NOT NULL default '',
  `lm_reporttype` char(1) NOT NULL default '',
  `lm_css_classes` blob NULL,
  `lm_tablefields` blob NULL,
  `lm_datefrom` int(10) NOT NULL default '0',
  `lm_dateto` int(10) NOT NULL default '0',
  `lm_linktype_player` char(3) NOT NULL default '',
  `lm_linktype_team` char(3) NOT NULL default '',
  `lm_linktype_club` char(3) NOT NULL default '',
  `lm_linktype_match` char(3) NOT NULL default '',
  `lm_linktype_stadium` char(3) NOT NULL default '',
  `lm_linktype_contest` char(3) NOT NULL default '',
  `lm_link_player_new_window` char(1) NOT NULL default '',
  `lm_link_team_new_window` char(1) NOT NULL default '',
  `lm_link_club_new_window` char(1) NOT NULL default '',
  `lm_link_match_new_window` char(1) NOT NULL default '',
  `lm_link_stadium_new_window` char(1) NOT NULL default '',
  `lm_link_contest_new_window` char(1) NOT NULL default ''
) ENGINE=MyISAM default CHARSET=utf8;
Status API Training Shop Blog About © 2013 GitHub, Inc. Terms Privacy Security Contact 