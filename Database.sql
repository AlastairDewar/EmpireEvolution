-- phpMyAdmin SQL Dump
-- version 2.11.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 27, 2008 at 04:54 PM
-- Server version: 4.1.22
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `adewar_EmpireEvolution`
--

-- --------------------------------------------------------

--
-- Table structure for table `AdministratorLogs`
--

CREATE TABLE `AdministratorLogs` (
  `UID` int(10) NOT NULL auto_increment,
  `UserUID` int(10) NOT NULL default '0',
  `Event` text NOT NULL,
  PRIMARY KEY  (`UID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `AdministratorLogs`
--


-- --------------------------------------------------------

--
-- Table structure for table `Alliances`
--

CREATE TABLE `Alliances` (
  `UID` int(10) NOT NULL auto_increment,
  `Name` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`UID`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Alliances`
--

INSERT INTO `Alliances` VALUES(1, 'Empire Evolution Admins');

-- --------------------------------------------------------

--
-- Table structure for table `Building`
--

CREATE TABLE `Building` (
  `UID` int(11) NOT NULL auto_increment,
  `Name` varchar(255) NOT NULL default '',
  `Description` text NOT NULL,
  `GoldRequired` int(12) NOT NULL default '0',
  `LumberRequired` int(12) NOT NULL default '0',
  `StoneRequired` int(12) NOT NULL default '0',
  PRIMARY KEY  (`UID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Contains all data regarding Buildings' AUTO_INCREMENT=16 ;

--
-- Dumping data for table `Building`
--

INSERT INTO `Building` VALUES(1, 'Lumber Mill', 'This building will allow the production of Lumber (resource). The building will start off producing a certain number of Wood/Lumber. Once built you will be able to recruit a number of Lumberjacks to increase the production rate depending on the level of the building (e.g. level 1 Lumber Mill will allow the recruitment of 4 lumber jacks, level 2 will allow 8 and so on)', 5000, 2000, 0);
INSERT INTO `Building` VALUES(2, 'Stonemasons', 'This building will act in the exact same way as the Lumber Mill with the exceptions of its production rate, this building will not be able to produce as much Stone (resource) compared to the amount of Lumber produced by the Lumber Mill. Although recruitment and building level rules are the same. ', 10000, 5000, 0);
INSERT INTO `Building` VALUES(3, 'School', 'This building will allow your people to learn, teaching them science and construction skills. Doing this will open up more building options etc. This building will give access to skills which a King may invest in. Each skill will be able to be upgraded to level 5/10 once this building is built.', 30000, 10000, 500);
INSERT INTO `Building` VALUES(4, 'College', 'This building is upgraded from the school, which will have to be built in order for this building to be open to you. Once built all skills will be able to be upgraded to level 8/10.', 100000, 40000, 5000);
INSERT INTO `Building` VALUES(5, 'University', 'This building is upgraded from the college, which will have to be built in order for this building to be open to you. Once built all skills will be able to be upgraded to level 10/10.', 300000, 85000, 20000);
INSERT INTO `Building` VALUES(6, 'Wooden  Wall', 'This building will be the first line of defense an Empire will have. It will provide a simple wall in wich to keep invaders out, giving low defense.  It will have 4 Arrow towers. The wall will give a small number of defense. Archers may be recruited to garrison the towers adding to the defense. The Wooden Wall may be upgraded to give more defense and increasing the effectiveness of the archers, increaseing the amount of defense each archer gives. It may be upgraded to level 5/10. ', 60000, 15000, 0);
INSERT INTO `Building` VALUES(7, 'Stone Wall', 'This building is upgraded from the Wooden Wall. When purchased the Wooden Wall will be taken apart and replaced with a Stone Wall. The Stone Wall works the same way as the Wooden Wall, but It has more defense and has an extra 2 Arrow Towers, giving a total of 6 Arrow Towers. This building provides more defense than a level 5 Wooden Wall (which will be required to build this). The effectiveness of the archers is increased again as the same way as upgrading them would do. This building can be upgraded to level 8/10.', 120000, 20000, 25000);
INSERT INTO `Building` VALUES(8, 'Castle&amp;amp;#47;Fort', 'This building is upgraded from the Stone Wall. When purchased, instead of taking down the Stone Wall, it is simply fortified, with extra walls and a Castle.  Also another 2 extra Arrow Towers will be built, giving a total of 8 Arrow Towers. All defense increases will be the same as before and this building will be able to be upgraded to level 10/10.', 400000, 120000, 65000);
INSERT INTO `Building` VALUES(9, 'Fletcher', 'This building will allow the recruitment of archer and crossbowmen regiments once a Barracks is built. The quality of the bows and crossbows produced will effect the regiments that use them. Upgrading the level of this building will strengthen your regiments.', 40000, 15000, 0);
INSERT INTO `Building` VALUES(10, 'Blacksmith', 'This building will allow the recruitment of Swordsmen, Knights and Pikemen once a Barracks is built. Also this building will allow the production of unit add-ons (e.g. Iron or Steel armour, which can be equiped by your regiments). As with a Fletcher, upgrading the level of this building will strengthen your regiments and give access to more add-ons. ', 60000, 15000, 6000);
INSERT INTO `Building` VALUES(11, 'Barracks', 'This building will allow The recruitment of an army providing the requirements are met. This building can be upgraded to level 10/10, which will be required to recruit higher ranked regiments.', 110000, 35000, 12000);
INSERT INTO `Building` VALUES(12, 'Rogue&amp;amp;apos;s Guild', 'This building will provide the empire with Infiltration. Which, depending on the amount of it an empire has will allow a king to scout out another empire to gain information. The Guild will be able to recruit Rogues to increase the number of infiltration which will mean you&amp;apos;re more likely to get information. This building, like the bank, will not be upgraded but will depend on the level of an empires Scouting. (This is maybe something we can add later?)', 80000, 20000, 2000);
INSERT INTO `Building` VALUES(13, 'Bank', 'This building will allow the King of an Empire to store a certain amount of Gold safely away, so if the empire was raided then they could not steal gold from the Bank. This building cannot be upgraded, the maximum amount allowed to be stored will depend on the level of an empires economic level. Although handy, the bank will take up to 8 hours untill the next deposit can be made. Although you can withdraw Gold at any time. ', 100000, 30000, 15000);
INSERT INTO `Building` VALUES(14, 'Treasury', 'This building requires the bank to be built first. The Treasury will increase the amount of gold an empire produces. This building cannot be upgraded and once built cannot be of anymore use.', 250000, 78000, 45000);
INSERT INTO `Building` VALUES(15, 'Market', 'Not all empires belong to warmongering kings and some belong to those who wish to live alongside each other. This building will allow an empire to sell items (add-ons) and regiments to each other. The price will be set by the king who is selling it.', 180000, 56000, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `BuildingInitialRequirements`
--

CREATE TABLE `BuildingInitialRequirements` (
  `UID` int(12) NOT NULL auto_increment,
  `Building1ID` int(5) NOT NULL default '0',
  `Building2ID` int(5) NOT NULL default '0',
  `Building3ID` int(5) NOT NULL default '0',
  `Building4ID` int(5) NOT NULL default '0',
  `Building5ID` int(5) NOT NULL default '0',
  `Building6ID` int(5) NOT NULL default '0',
  `Building7ID` int(5) NOT NULL default '0',
  `Building8ID` int(5) NOT NULL default '0',
  `Research1ID` int(5) NOT NULL default '0',
  `Research1Level` int(5) NOT NULL default '0',
  `Research2ID` int(5) NOT NULL default '0',
  `Research2Level` int(5) NOT NULL default '0',
  `Research3ID` int(5) NOT NULL default '0',
  `Research3Level` int(5) NOT NULL default '0',
  `Research4ID` int(5) NOT NULL default '0',
  `Research4Level` int(5) NOT NULL default '0',
  `Research5ID` int(5) NOT NULL default '0',
  `Research5Level` int(5) NOT NULL default '0',
  PRIMARY KEY  (`UID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Contains all data regarding Inital Building Requirements' AUTO_INCREMENT=16 ;

--
-- Dumping data for table `BuildingInitialRequirements`
--

INSERT INTO `BuildingInitialRequirements` VALUES(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `BuildingInitialRequirements` VALUES(2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `BuildingInitialRequirements` VALUES(3, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `BuildingInitialRequirements` VALUES(4, 1, 2, 3, 0, 0, 0, 0, 0, 1, 3, 5, 4, 7, 1, 8, 1, 0, 0);
INSERT INTO `BuildingInitialRequirements` VALUES(5, 1, 2, 3, 4, 0, 0, 0, 0, 1, 6, 5, 7, 7, 4, 8, 4, 0, 0);
INSERT INTO `BuildingInitialRequirements` VALUES(6, 1, 2, 3, 0, 0, 0, 0, 0, 1, 2, 3, 3, 7, 2, 8, 1, 0, 0);
INSERT INTO `BuildingInitialRequirements` VALUES(7, 1, 2, 3, 6, 0, 0, 0, 0, 1, 5, 3, 5, 7, 4, 8, 3, 0, 0);
INSERT INTO `BuildingInitialRequirements` VALUES(8, 1, 2, 3, 4, 6, 7, 0, 0, 1, 7, 3, 7, 7, 6, 8, 5, 0, 0);
INSERT INTO `BuildingInitialRequirements` VALUES(9, 1, 2, 3, 0, 0, 0, 0, 0, 1, 2, 7, 1, 8, 1, 0, 0, 0, 0);
INSERT INTO `BuildingInitialRequirements` VALUES(10, 1, 2, 3, 9, 0, 0, 0, 0, 1, 3, 6, 2, 7, 1, 8, 2, 0, 0);
INSERT INTO `BuildingInitialRequirements` VALUES(11, 1, 2, 3, 9, 10, 0, 0, 0, 1, 5, 6, 5, 7, 5, 8, 4, 0, 0);
INSERT INTO `BuildingInitialRequirements` VALUES(12, 1, 2, 3, 0, 0, 0, 0, 0, 1, 2, 4, 1, 7, 2, 8, 1, 0, 0);
INSERT INTO `BuildingInitialRequirements` VALUES(13, 1, 2, 3, 0, 0, 0, 0, 0, 1, 5, 2, 1, 5, 3, 7, 5, 8, 4);
INSERT INTO `BuildingInitialRequirements` VALUES(14, 1, 2, 3, 4, 0, 0, 0, 0, 1, 7, 2, 4, 5, 4, 7, 7, 8, 6);
INSERT INTO `BuildingInitialRequirements` VALUES(15, 1, 2, 3, 4, 0, 0, 0, 0, 1, 5, 2, 4, 5, 4, 7, 5, 8, 4);

-- --------------------------------------------------------

--
-- Table structure for table `BuildingUpgrades`
--

CREATE TABLE `BuildingUpgrades` (
  `UID` int(12) NOT NULL auto_increment,
  `BuildingID` int(12) NOT NULL default '0',
  `UpgradeLevel` int(5) NOT NULL default '0',
  `GoldRequired` int(12) NOT NULL default '0',
  `LumberRequired` int(12) NOT NULL default '0',
  `StoneRequired` int(12) NOT NULL default '0',
  `GoldGenerated` int(10) NOT NULL default '0',
  `StoneGenerated` int(10) NOT NULL default '0',
  `LumberGenerated` int(10) NOT NULL default '0',
  `Research1ID` int(5) NOT NULL default '0',
  `Research1Level` int(5) NOT NULL default '0',
  `Research2ID` int(5) NOT NULL default '0',
  `Research2Level` int(5) NOT NULL default '0',
  `Research3ID` int(5) NOT NULL default '0',
  `Research3Level` int(5) NOT NULL default '0',
  `Research4ID` int(5) NOT NULL default '0',
  `Research4Level` int(5) NOT NULL default '0',
  `Research5ID` int(5) NOT NULL default '0',
  `Research5Level` int(5) NOT NULL default '0',
  PRIMARY KEY  (`UID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Contains all data regarding Building Upgrades' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `BuildingUpgrades`
--

INSERT INTO `BuildingUpgrades` VALUES(1, 1, 2, 5000, 2000, 0, 1, 0, 0, 1, 2, 3, 1, 7, 2, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `HowTheyMet`
--

CREATE TABLE `HowTheyMet` (
  `UID` int(10) NOT NULL auto_increment,
  `Reason` text NOT NULL,
  PRIMARY KEY  (`UID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `HowTheyMet`
--

INSERT INTO `HowTheyMet` VALUES(1, 'Other');
INSERT INTO `HowTheyMet` VALUES(2, 'School');
INSERT INTO `HowTheyMet` VALUES(3, 'Family Friend');
INSERT INTO `HowTheyMet` VALUES(4, 'Club/Organisation');

-- --------------------------------------------------------

--
-- Table structure for table `ModeratorLogs`
--

CREATE TABLE `ModeratorLogs` (
  `UID` int(10) NOT NULL auto_increment,
  `UserUID` int(10) NOT NULL default '0',
  `Event` text NOT NULL,
  PRIMARY KEY  (`UID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ModeratorLogs`
--


-- --------------------------------------------------------

--
-- Table structure for table `News`
--

CREATE TABLE `News` (
  `UID` int(12) NOT NULL auto_increment,
  `Title` varchar(75) NOT NULL default '',
  `Content` text NOT NULL,
  `PostDate` varchar(20) NOT NULL default '',
  `AuthorID` int(12) NOT NULL default '0',
  `Visible` int(1) NOT NULL default '1',
  PRIMARY KEY  (`UID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Contains all data regarding News' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `News`
--

INSERT INTO `News` VALUES(1, 'Empire Evolution Grand Opening', 'Welcome to the grand opening of Empire Evolution.\r\n\r\nAfter the Great War all the people of Kolarian had retreated to their own empires as they recovered from the mass losses they suffered. As no empire had any power left there was peace as no one had any large amount of army strength to wage a war, and so all the empires lived in peace, although no contact was made of each other. After many years of prosperity the kings of each empire began to grow old and eventually die, leaving their lands and riches to their heirs. These young and naive kings had decided that their fathers ideas of peace had blinded them of the truth - that the other kings were amassing an army to once again launch an attack for more land. As each warmongering king had the same idea they started to raise an army to conquer the lands of their enemies. And thus the begining of the next Great War was started...', '27th August 2007', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `NewsComments`
--

CREATE TABLE `NewsComments` (
  `UID` int(10) NOT NULL auto_increment,
  `ArticleID` int(10) NOT NULL default '0',
  `AuthorID` int(10) NOT NULL default '0',
  `Date` varchar(25) NOT NULL default '',
  `Time` time NOT NULL default '00:00:00',
  `EditorID` int(10) default NULL,
  `EditDate` varchar(25) default NULL,
  `EditTime` time default NULL,
  `Comment` text NOT NULL,
  `OriginalComment` int(10) NOT NULL default '0',
  `Visible` int(1) NOT NULL default '1',
  PRIMARY KEY  (`UID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `NewsComments`
--

INSERT INTO `NewsComments` VALUES(1, 1, 1, '14/01/08', '20:36:20', NULL, NULL, NULL, 'Nice one, looks like the games gonna turn out great. I can''t wait to play it!!', 0, 1);
INSERT INTO `NewsComments` VALUES(2, 1, 1, '15/01/08', '19:09:16', NULL, '25/01/08', '19:41:01', 'This is a reply.', 1, 1);
INSERT INTO `NewsComments` VALUES(3, 1, 1, '16/01/08', '10:59:40', NULL, '25/01/08', '19:07:38', 'S''all good in the hood man.', 0, 1);
INSERT INTO `NewsComments` VALUES(4, 1, 1, '16/01/08', '12:49:14', NULL, NULL, NULL, 'LOLLOLOLOLOLOLOL', 2, 1);
INSERT INTO `NewsComments` VALUES(5, 1, 1, '16/01/08', '12:49:33', NULL, NULL, NULL, 'LOLOLOLOLOLOLOLOL', 1, 1);
INSERT INTO `NewsComments` VALUES(6, 1, 1, '22/01/08', '16:54:43', NULL, NULL, NULL, 'Nice comment system mate lol.', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `NewsCommentsReports`
--

CREATE TABLE `NewsCommentsReports` (
  `UID` int(10) NOT NULL auto_increment,
  `CommentUID` int(10) NOT NULL default '0',
  `Reporter` int(10) NOT NULL default '0',
  `Reason` int(10) NOT NULL default '0',
  `OtherReason` text,
  `Resolved` int(1) NOT NULL default '0',
  PRIMARY KEY  (`UID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `NewsCommentsReports`
--

INSERT INTO `NewsCommentsReports` VALUES(1, 6, 1, 2, NULL, 0);
INSERT INTO `NewsCommentsReports` VALUES(2, 6, 1, 1, 'LOLOLOLOLOLOLOsdfsbfisb', 0);
INSERT INTO `NewsCommentsReports` VALUES(3, 3, 1, 3, '', 0);
INSERT INTO `NewsCommentsReports` VALUES(4, 3, 1, 3, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Player`
--

CREATE TABLE `Player` (
  `ID` int(11) NOT NULL auto_increment,
  `Username` varchar(30) NOT NULL default '',
  `Password` varchar(255) NOT NULL default '',
  `Password2` varchar(255) NOT NULL default '',
  `EmpireName` varchar(255) NOT NULL default 'Unknown',
  `Alliance` int(10) NOT NULL default '0',
  `Email` varchar(255) NOT NULL default '',
  `Location` varchar(255) NOT NULL default '',
  `Rights` int(5) NOT NULL default '0',
  `Gold` int(12) NOT NULL default '250000',
  `Lumber` int(12) NOT NULL default '100000',
  `Stone` int(12) NOT NULL default '50000',
  `GoldCap` int(10) NOT NULL default '500000',
  `StoneCap` int(10) NOT NULL default '500000',
  `LumberCap` int(10) NOT NULL default '500000',
  `ConfirmCode` varchar(32) NOT NULL default '',
  `EmailAction` timestamp NOT NULL default CURRENT_TIMESTAMP,
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `ID` (`ID`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Contains all data regarding players accounts' AUTO_INCREMENT=10 ;

--
-- Dumping data for table `Player`
--

INSERT INTO `Player` VALUES(1, 'Alastair', '1f7390524a904876b733ecbff52eb28b', '0a4h0d62f4h1d0', 'Synthania', 0, 'Lleaxyer@googlemail.com', 'uk', 0, 250000, 100000, 50000, 500000, 500000, 500000, '-1', '0000-00-00 00:00:00');
INSERT INTO `Player` VALUES(9, 'Lleaxyer', 'ae2b1fca515949e5d54fb22b8ed95575', 'testing', 'Unknown', 0, 'Lleaxyer@gmail.com', '', 0, 250000, 100000, 50000, 500000, 500000, 500000, '480696ae355a4cf55da953a47c416aaa', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `PlayerBuilding`
--

CREATE TABLE `PlayerBuilding` (
  `UID` int(12) NOT NULL auto_increment,
  `PlayerUID` int(12) NOT NULL default '0',
  `BuildingUID` int(12) NOT NULL default '0',
  `Level` int(12) NOT NULL default '0',
  PRIMARY KEY  (`UID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Contains all data regarding buildings owned by players' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `PlayerBuilding`
--

INSERT INTO `PlayerBuilding` VALUES(1, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `PlayerResearch`
--

CREATE TABLE `PlayerResearch` (
  `UID` int(12) NOT NULL auto_increment,
  `PlayerUID` int(12) NOT NULL default '0',
  `ResearchUID` int(12) NOT NULL default '0',
  `Level` int(12) NOT NULL default '0',
  PRIMARY KEY  (`UID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Contains all data regarding research conducted by players' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `PlayerResearch`
--


-- --------------------------------------------------------

--
-- Table structure for table `PlayersBlocks`
--

CREATE TABLE `PlayersBlocks` (
  `UID` int(10) NOT NULL auto_increment,
  `PlayerUID` int(10) NOT NULL default '0',
  `BlockUID` int(10) NOT NULL default '0',
  `HowTheyMet` int(10) NOT NULL default '0',
  PRIMARY KEY  (`UID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `PlayersBlocks`
--


-- --------------------------------------------------------

--
-- Table structure for table `PlayersFriends`
--

CREATE TABLE `PlayersFriends` (
  `UID` int(10) NOT NULL auto_increment,
  `PlayerUID` int(10) NOT NULL default '0',
  `FriendUID` int(10) NOT NULL default '0',
  `HowTheyMet` int(10) NOT NULL default '0',
  PRIMARY KEY  (`UID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `PlayersFriends`
--

INSERT INTO `PlayersFriends` VALUES(1, 1, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `PrivateMessages`
--

CREATE TABLE `PrivateMessages` (
  `UID` int(10) NOT NULL auto_increment,
  `FromUID` int(5) NOT NULL default '0',
  `ToUID` int(5) NOT NULL default '0',
  `Message` text NOT NULL,
  `Read` int(1) NOT NULL default '0',
  PRIMARY KEY  (`UID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `PrivateMessages`
--


-- --------------------------------------------------------

--
-- Table structure for table `ReasonsToRemoveFriends`
--

CREATE TABLE `ReasonsToRemoveFriends` (
  `UID` int(10) NOT NULL auto_increment,
  `Reason` text NOT NULL,
  `Hits` int(10) NOT NULL default '0',
  PRIMARY KEY  (`UID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ReasonsToRemoveFriends`
--

INSERT INTO `ReasonsToRemoveFriends` VALUES(1, 'Other', 0);
INSERT INTO `ReasonsToRemoveFriends` VALUES(2, 'None', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ReasonsToReportComments`
--

CREATE TABLE `ReasonsToReportComments` (
  `UID` int(10) NOT NULL auto_increment,
  `Reason` text NOT NULL,
  `Hits` int(10) NOT NULL default '0',
  PRIMARY KEY  (`UID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ReasonsToReportComments`
--

INSERT INTO `ReasonsToReportComments` VALUES(1, 'Other', 0);
INSERT INTO `ReasonsToReportComments` VALUES(2, 'Foul Language', 0);
INSERT INTO `ReasonsToReportComments` VALUES(3, 'Racism', 0);
INSERT INTO `ReasonsToReportComments` VALUES(4, 'Sexual Misconduct', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Referrals`
--

CREATE TABLE `Referrals` (
  `UID` int(10) NOT NULL auto_increment,
  `UserUID` int(10) NOT NULL default '0',
  `RefererUID` int(10) NOT NULL default '0',
  PRIMARY KEY  (`UID`),
  UNIQUE KEY `UserUID` (`UserUID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Referrals`
--

INSERT INTO `Referrals` VALUES(1, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Regiment`
--

CREATE TABLE `Regiment` (
  `UID` int(12) NOT NULL auto_increment,
  `Name` varchar(255) NOT NULL default '',
  `AttackBonus` int(5) NOT NULL default '0',
  `DefenceBonus` int(5) NOT NULL default '0',
  `CarryBonus` int(5) NOT NULL default '0',
  `GoldRequired` int(12) NOT NULL default '0',
  `LumberRequired` int(12) NOT NULL default '0',
  `StoneRequired` int(12) NOT NULL default '0',
  `ExtraBonus1Unit` int(5) NOT NULL default '0',
  `ExtraBonus1Value` int(5) NOT NULL default '0',
  `ExtraBonus2Unit` int(5) NOT NULL default '0',
  `ExtraBonus2Value` int(5) NOT NULL default '0',
  `ExtraBonus3Unit` int(5) NOT NULL default '0',
  `ExtraBonus3Value` int(5) NOT NULL default '0',
  `ExtraBonus4Unit` int(5) NOT NULL default '0',
  `ExtraBonus4Value` int(5) NOT NULL default '0',
  `ExtraBonus5Unit` int(5) NOT NULL default '0',
  `ExtraBonus5Value` int(5) NOT NULL default '0',
  PRIMARY KEY  (`UID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Contains all data regarding Regiments' AUTO_INCREMENT=12 ;

--
-- Dumping data for table `Regiment`
--

INSERT INTO `Regiment` VALUES(1, 'Archer Regiment', 350, 35, 5, 200000, 2000, 0, 3, 50, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `Regiment` VALUES(2, 'Crossbowmen Regiment', 40, 20, 5, 250000, 5000, 0, 3, 50, 4, 50, 0, 0, 0, 0, 0, 0);
INSERT INTO `Regiment` VALUES(3, 'Swordsmen Regiment', 400, 40, 5, 300000, 2500, 0, 5, 50, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `Regiment` VALUES(4, 'Knight Regiment', 800, 80, 10, 450000, 7500, 0, 1, 50, 3, 50, 6, 50, 0, 0, 0, 0);
INSERT INTO `Regiment` VALUES(5, 'Pikeman Regiment', 450, 45, 5, 320000, 5000, 0, 4, 50, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `Regiment` VALUES(6, 'Mercenaries', 380, 35, 5, 300000, 0, 0, 11, 50, 8, 50, 9, 50, 10, 50, 0, 0);
INSERT INTO `Regiment` VALUES(7, 'King&amp;amp;apos;s Guard', 50, 500, 5, 0, 0, 0, 6, 50, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `Regiment` VALUES(8, 'Merchant&amp;amp;apos;s Caravan', 30, 400, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `Regiment` VALUES(9, 'Noble&amp;amp;apos;s Caravan', 40, 500, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `Regiment` VALUES(10, 'Lord&amp;amp;apos;s Caravan', 65, 650, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `Regiment` VALUES(11, 'King&amp;amp;apos;s Caravan', 80, 800, 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ReportedComments`
--

CREATE TABLE `ReportedComments` (
  `UID` int(10) NOT NULL auto_increment,
  `CommentUID` int(10) NOT NULL default '0',
  `Reporter` int(10) NOT NULL default '0',
  `Reason` int(10) NOT NULL default '0',
  `OtherReason` text NOT NULL,
  PRIMARY KEY  (`UID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ReportedComments`
--


-- --------------------------------------------------------

--
-- Table structure for table `Research`
--

CREATE TABLE `Research` (
  `UID` int(12) NOT NULL auto_increment,
  `Name` varchar(255) NOT NULL default '',
  `Code` char(3) NOT NULL default '',
  `Description` text NOT NULL,
  PRIMARY KEY  (`UID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Contains all data regarding Research' AUTO_INCREMENT=10 ;

--
-- Dumping data for table `Research`
--

INSERT INTO `Research` VALUES(1, 'Construction', 'CON', 'This skill will give a king&amp;apos;s people an understanding of how to build structures, giving access to more buildings and how to improve existing ones.');
INSERT INTO `Research` VALUES(2, 'Economics', 'ECO', 'This skill will give a king&amp;apos;s people an understanding of how to run an effecient economy, giving access to buildings and improving existing ones.');
INSERT INTO `Research` VALUES(3, 'Improved Labour', 'IML', 'This skill will give a king&amp;apos;s people an understanding of how to work effeciently, giving access to buildings and improving existing ones.');
INSERT INTO `Research` VALUES(4, 'Scouting', 'SCO', 'This skill will give a king&amp;apos;s people an understanding of how to move silently and stealthly, giving access to buildings and improving existing ones.');
INSERT INTO `Research` VALUES(5, 'Scouting', 'SCO', 'This skill will give a king&amp;apos;s people an understanding of how to move silently and stealthly, giving access to buildings and improving existing ones.');
INSERT INTO `Research` VALUES(6, 'Teaching', 'TEA', 'This skill will give a king&amp;apos;s people an understanding of how to teach more effectively and teach a larger variety, giving access to buildings and improving existing ones.');
INSERT INTO `Research` VALUES(7, 'Smithing', 'SMI', 'This skill will give a king&amp;apos;s people an understanding of how to work with metal more effeciently, giving access to buildings and improving existing ones');
INSERT INTO `Research` VALUES(8, 'Architecture', 'ARC', 'This skill will give a king&amp;apos;s people an understanding of how to design better structures, giving access to buildings and improving existing ones.');
INSERT INTO `Research` VALUES(9, 'Engineering', 'ENG', 'This skill will give a king&amp;apos;s people an understanding of how to apply science to solve problems, giving access to buildings and improving existing ones.');

-- --------------------------------------------------------

--
-- Table structure for table `ResearchCostScheme`
--

CREATE TABLE `ResearchCostScheme` (
  `UID` int(12) NOT NULL auto_increment,
  `Level` int(5) NOT NULL default '0',
  `GoldRequired` int(12) NOT NULL default '0',
  PRIMARY KEY  (`UID`),
  UNIQUE KEY `Level` (`Level`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Contains all data regarding Research Cost Scheme' AUTO_INCREMENT=11 ;

--
-- Dumping data for table `ResearchCostScheme`
--

INSERT INTO `ResearchCostScheme` VALUES(1, 1, 500);
INSERT INTO `ResearchCostScheme` VALUES(2, 2, 1200);
INSERT INTO `ResearchCostScheme` VALUES(3, 3, 3000);
INSERT INTO `ResearchCostScheme` VALUES(4, 4, 7500);
INSERT INTO `ResearchCostScheme` VALUES(5, 5, 20000);
INSERT INTO `ResearchCostScheme` VALUES(6, 6, 50000);
INSERT INTO `ResearchCostScheme` VALUES(7, 7, 125000);
INSERT INTO `ResearchCostScheme` VALUES(8, 8, 250000);
INSERT INTO `ResearchCostScheme` VALUES(9, 9, 500000);
INSERT INTO `ResearchCostScheme` VALUES(10, 10, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `Resources`
--

CREATE TABLE `Resources` (
  `UID` int(11) NOT NULL auto_increment,
  `Name` varchar(255) NOT NULL default '',
  `Description` text NOT NULL,
  PRIMARY KEY  (`UID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Contains all data regarding Resources' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Resources`
--

INSERT INTO `Resources` VALUES(1, 'Gold', 'Main resource in the game. It will be provided entirely by taxing your empire, no building will be required to gain a productive rate of Gold.');
INSERT INTO `Resources` VALUES(2, 'Lumber', 'The second resource in the game. Although needed at the beginning, will become less important later on. Will be provided by the Lumber Mill.');
INSERT INTO `Resources` VALUES(3, 'Stone', 'The last resource in the game. This resource will be needed more later on in the game. It&amp;apos;s hard to produce so the production rate will be slower than that of Gold and Lumber. Will be provided by the Stonemason.');

-- --------------------------------------------------------

--
-- Table structure for table `Scouting`
--

CREATE TABLE `Scouting` (
  `UID` int(10) NOT NULL auto_increment,
  `Scoutee` int(10) NOT NULL default '0',
  `Scouted` int(10) NOT NULL default '0',
  PRIMARY KEY  (`UID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `Scouting`
--


-- --------------------------------------------------------

--
-- Table structure for table `Settings`
--

CREATE TABLE `Settings` (
  `UID` int(11) NOT NULL auto_increment,
  `GameName` varchar(255) NOT NULL default 'Empire Evolution',
  `StartingGold` int(12) NOT NULL default '50000',
  `StartingLumber` int(12) NOT NULL default '10000',
  `StartingStone` int(12) NOT NULL default '1000',
  `RegistrationOpen` int(1) NOT NULL default '1',
  PRIMARY KEY  (`UID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Contains all data regarding the Game Settings' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Settings`
--

INSERT INTO `Settings` VALUES(1, 'Empire Evolution', 50000, 10000, 1000, 1);
