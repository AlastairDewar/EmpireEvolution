-- MySQL dump 10.11
--
-- Host: localhost    Database: EmpireEvolution
-- ------------------------------------------------------
-- Server version	5.0.67-0ubuntu6

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `#BuildingInitialRequirements`
--

DROP TABLE IF EXISTS `#BuildingInitialRequirements`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `#BuildingInitialRequirements` (
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
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 COMMENT='Contains all data regarding Inital Building Requirements';
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `#BuildingInitialRequirements`
--

LOCK TABLES `#BuildingInitialRequirements` WRITE;
/*!40000 ALTER TABLE `#BuildingInitialRequirements` DISABLE KEYS */;
INSERT INTO `#BuildingInitialRequirements` VALUES (1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(2,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(3,1,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4,1,2,3,0,0,0,0,0,1,3,5,4,7,1,8,1,0,0),(5,1,2,3,4,0,0,0,0,1,6,5,7,7,4,8,4,0,0),(6,1,2,3,0,0,0,0,0,1,2,3,3,7,2,8,1,0,0),(7,1,2,3,6,0,0,0,0,1,5,3,5,7,4,8,3,0,0),(8,1,2,3,4,6,7,0,0,1,7,3,7,7,6,8,5,0,0),(9,1,2,3,0,0,0,0,0,1,2,7,1,8,1,0,0,0,0),(10,1,2,3,9,0,0,0,0,1,3,6,2,7,1,8,2,0,0),(11,1,2,3,9,10,0,0,0,1,5,6,5,7,5,8,4,0,0),(12,1,2,3,0,0,0,0,0,1,2,4,1,7,2,8,1,0,0),(13,1,2,3,0,0,0,0,0,1,5,2,1,5,3,7,5,8,4),(14,1,2,3,4,0,0,0,0,1,7,2,4,5,4,7,7,8,6),(15,1,2,3,4,0,0,0,0,1,5,2,4,5,4,7,5,8,4);
/*!40000 ALTER TABLE `#BuildingInitialRequirements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `#BuildingUpgrades`
--

DROP TABLE IF EXISTS `#BuildingUpgrades`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `#BuildingUpgrades` (
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='Contains all data regarding Building Upgrades';
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `#BuildingUpgrades`
--

LOCK TABLES `#BuildingUpgrades` WRITE;
/*!40000 ALTER TABLE `#BuildingUpgrades` DISABLE KEYS */;
INSERT INTO `#BuildingUpgrades` VALUES (1,1,2,5000,2000,0,1,0,0,1,2,3,1,7,2,0,0,0,0);
/*!40000 ALTER TABLE `#BuildingUpgrades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `#ResearchCostScheme`
--

DROP TABLE IF EXISTS `#ResearchCostScheme`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `#ResearchCostScheme` (
  `UID` int(12) NOT NULL auto_increment,
  `Level` int(5) NOT NULL default '0',
  `GoldRequired` int(12) NOT NULL default '0',
  PRIMARY KEY  (`UID`),
  UNIQUE KEY `Level` (`Level`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COMMENT='Contains all data regarding Research Cost Scheme';
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `#ResearchCostScheme`
--

LOCK TABLES `#ResearchCostScheme` WRITE;
/*!40000 ALTER TABLE `#ResearchCostScheme` DISABLE KEYS */;
INSERT INTO `#ResearchCostScheme` VALUES (1,1,500),(2,2,1200),(3,3,3000),(4,4,7500),(5,5,20000),(6,6,50000),(7,7,125000),(8,8,250000),(9,9,500000),(10,10,1000000);
/*!40000 ALTER TABLE `#ResearchCostScheme` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `administrator_logs`
--

DROP TABLE IF EXISTS `administrator_logs`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `administrator_logs` (
  `uid` mediumint(8) unsigned NOT NULL auto_increment,
  `player_uid` mediumint(8) unsigned NOT NULL default '0',
  `date` int(11) NOT NULL,
  `event` text NOT NULL,
  `flagged` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `administrator_logs`
--

LOCK TABLES `administrator_logs` WRITE;
/*!40000 ALTER TABLE `administrator_logs` DISABLE KEYS */;
INSERT INTO `administrator_logs` VALUES (1,1,0,'added Administrator Logs',0),(2,1,0,'has added a new requirement for building a Castle',0),(4,1,0,'has added a new requirement for building a School',0),(5,1,0,'has added a new requirement for building a College.<br/>It now requires an extra 20000 gold.',0);
/*!40000 ALTER TABLE `administrator_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `building`
--

DROP TABLE IF EXISTS `building`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `building` (
  `uid` mediumint(8) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `GoldRequired` int(10) unsigned NOT NULL default '0',
  `LumberRequired` int(10) unsigned NOT NULL default '0',
  `StoneRequired` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 COMMENT='Contains all data regarding Buildings';
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `building`
--

LOCK TABLES `building` WRITE;
/*!40000 ALTER TABLE `building` DISABLE KEYS */;
INSERT INTO `building` VALUES (1,'Lumber Mill','This building will allow the production of Lumber (resource). The building will start off producing a certain number of Wood/Lumber. Once built you will be able to recruit a number of Lumberjacks to increase the production rate depending on the level of the building (e.g. level 1 Lumber Mill will allow the recruitment of 4 lumber jacks, level 2 will allow 8 and so on)',5000,2000,0),(2,'Stonemasons','This building will act in the exact same way as the Lumber Mill with the exceptions of its production rate, this building will not be able to produce as much Stone (resource) compared to the amount of Lumber produced by the Lumber Mill. Although recruitment and building level rules are the same. ',10000,5000,0),(3,'School','This building will allow your people to learn, teaching them science and construction skills. Doing this will open up more building options etc. This building will give access to skills which a King may invest in. Each skill will be able to be upgraded to level 5/10 once this building is built.',30000,10000,500),(4,'College','This building is upgraded from the school, which will have to be built in order for this building to be open to you. Once built all skills will be able to be upgraded to level 8/10.',100000,40000,5000),(5,'University','This building is upgraded from the college, which will have to be built in order for this building to be open to you. Once built all skills will be able to be upgraded to level 10/10.',300000,85000,20000),(6,'Wooden Wall','This building will be the first line of defense an Empire will have. It will provide a simple wall in wich to keep invaders out, giving low defense.  It will have 4 Arrow towers. The wall will give a small number of defense. Archers may be recruited to garrison the towers adding to the defense. The Wooden Wall may be upgraded to give more defense and increasing the effectiveness of the archers, increaseing the amount of defense each archer gives. It may be upgraded to level 5/10. ',60000,15000,0),(7,'Stone Wall','This building is upgraded from the Wooden Wall. When purchased the Wooden Wall will be taken apart and replaced with a Stone Wall. The Stone Wall works the same way as the Wooden Wall, but It has more defense and has an extra 2 Arrow Towers, giving a total of 6 Arrow Towers. This building provides more defense than a level 5 Wooden Wall (which will be required to build this). The effectiveness of the archers is increased again as the same way as upgrading them would do. This building can be upgraded to level 8/10.',120000,20000,25000),(8,'Castle Fort','This building is upgraded from the Stone Wall. When purchased, instead of taking down the Stone Wall, it is simply fortified, with extra walls and a Castle.  Also another 2 extra Arrow Towers will be built, giving a total of 8 Arrow Towers. All defense increases will be the same as before and this building will be able to be upgraded to level 10/10.',400000,120000,65000),(9,'Fletcher','This building will allow the recruitment of archer and crossbowmen regiments once a Barracks is built. The quality of the bows and crossbows produced will effect the regiments that use them. Upgrading the level of this building will strengthen your regiments.',40000,15000,0),(10,'Blacksmith','This building will allow the recruitment of Swordsmen, Knights and Pikemen once a Barracks is built. Also this building will allow the production of unit add-ons (e.g. Iron or Steel armour, which can be equiped by your regiments). As with a Fletcher, upgrading the level of this building will strengthen your regiments and give access to more add-ons. ',60000,15000,6000),(11,'Barracks','This building will allow The recruitment of an army providing the requirements are met. This building can be upgraded to level 10/10, which will be required to recruit higher ranked regiments.',110000,35000,12000),(12,'Rogue\'s Guild','This building will provide the empire with Infiltration. Which, depending on the amount of it an empire has will allow a king to scout out another empire to gain information. The Guild will be able to recruit Rogues to increase the number of infiltration which will mean you&amp;apos;re more likely to get information. This building, like the bank, will not be upgraded but will depend on the level of an empires Scouting. (This is maybe something we can add later?)',80000,20000,2000),(13,'Bank','This building will allow the King of an Empire to store a certain amount of Gold safely away, so if the empire was raided then they could not steal gold from the Bank. This building cannot be upgraded, the maximum amount allowed to be stored will depend on the level of an empires economic level. Although handy, the bank will take up to 8 hours untill the next deposit can be made. Although you can withdraw Gold at any time. ',100000,30000,15000),(14,'Treasury','This building requires the bank to be built first. The Treasury will increase the amount of gold an empire produces. This building cannot be upgraded and once built cannot be of anymore use.',250000,78000,45000),(15,'Market','Not all empires belong to warmongering kings and some belong to those who wish to live alongside each other. This building will allow an empire to sell items (add-ons) and regiments to each other. The price will be set by the king who is selling it.',180000,56000,25000);
/*!40000 ALTER TABLE `building` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `building_logs`
--

DROP TABLE IF EXISTS `building_logs`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `building_logs` (
  `uid` mediumint(8) unsigned NOT NULL auto_increment,
  `player_uid` mediumint(8) unsigned NOT NULL default '0',
  `date` int(11) NOT NULL,
  `event` text NOT NULL,
  `flagged` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `building_logs`
--

LOCK TABLES `building_logs` WRITE;
/*!40000 ALTER TABLE `building_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `building_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `building_requirement`
--

DROP TABLE IF EXISTS `building_requirement`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `building_requirement` (
  `uid` int(11) NOT NULL auto_increment,
  `building_uid` int(11) NOT NULL,
  `building_level` int(11) NOT NULL,
  `requirement_uid` varchar(255) NOT NULL,
  `requirement_level` int(11) NOT NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `building_requirement`
--

LOCK TABLES `building_requirement` WRITE;
/*!40000 ALTER TABLE `building_requirement` DISABLE KEYS */;
INSERT INTO `building_requirement` VALUES (1,1,1,'RESGOL',5000),(2,1,1,'RESLUM',2000),(3,2,1,'RESGOL',10000),(4,2,1,'RESLUM',5000),(5,3,1,'RESGOL',30000),(6,3,1,'RESLUM',10000),(7,3,1,'RESSTO',500),(8,4,1,'RESGOL',100000),(9,4,1,'RESLUM',40000),(10,4,1,'RESSTO',5000),(11,5,1,'RESGOL',300000),(12,5,1,'RESLUM',85000),(13,5,1,'RESSTO',20000),(14,6,1,'RESGOL',60000),(15,6,1,'RESLUM',15000),(16,7,1,'RESGOL',120000),(17,7,1,'RESLUM',20000),(18,7,1,'RESSTO',25000),(19,8,1,'RESGOL',400000),(20,8,1,'RESLUM',120000),(21,8,1,'RESSTO',65000);
/*!40000 ALTER TABLE `building_requirement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `confirmation`
--

DROP TABLE IF EXISTS `confirmation`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `confirmation` (
  `uid` int(11) NOT NULL auto_increment,
  `player_uid` int(11) NOT NULL,
  `code` varchar(19) NOT NULL,
  PRIMARY KEY  (`uid`),
  UNIQUE KEY `PlayerUID` (`player_uid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `confirmation`
--

LOCK TABLES `confirmation` WRITE;
/*!40000 ALTER TABLE `confirmation` DISABLE KEYS */;
INSERT INTO `confirmation` VALUES (5,24,'2e90215324'),(2,21,'331cb32321'),(3,22,'0fdbc57222'),(4,23,'9b21030723');
/*!40000 ALTER TABLE `confirmation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_articles`
--

DROP TABLE IF EXISTS `news_articles`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `news_articles` (
  `uid` mediumint(8) unsigned NOT NULL auto_increment,
  `player_uid` mediumint(8) unsigned NOT NULL,
  `date` int(10) unsigned NOT NULL,
  `published` tinyint(1) unsigned NOT NULL default '0',
  `deleted` tinyint(1) NOT NULL default '0',
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `news_articles`
--

LOCK TABLES `news_articles` WRITE;
/*!40000 ALTER TABLE `news_articles` DISABLE KEYS */;
INSERT INTO `news_articles` VALUES (1,1,1233603919,1,0,'Empev\'s First article','This is a sample article.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam varius scelerisque diam. Morbi erat sapien, consectetur et, auctor eget, fermentum at, erat. Maecenas eget orci eget eros lacinia egestas. Fusce pharetra mollis eros. Integer eu sapien rutrum nibh lacinia ultricies. Nulla facilisi. Suspendisse est. Duis leo risus, egestas et, fermentum ac, suscipit at, risus. Morbi venenatis vestibulum est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar libero quis mi. Sed urna. Donec non libero vel massa pellentesque dictum. Vivamus odio arcu, tempus sit amet, consequat in, ultricies non, augue. Donec elit nisi, pharetra cursus, dignissim quis, sodales a, ipsum. Mauris faucibus venenatis dolor.\r\n\r\nMorbi eget risus a turpis porta posuere. Curabitur magna nisi, tincidunt ut, fringilla facilisis, congue ut, ante. Proin fermentum interdum lacus. Proin dolor magna, aliquet vitae, blandit eget, commodo sed, est. Pellentesque sapien. Vivamus arcu. Aliquam lacus erat, varius adipiscing, consectetur ac, consectetur nec, enim. Phasellus vitae elit ac lectus sollicitudin euismod. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed vulputate adipiscing felis. Aliquam quis massa.\r\n\r\nCras molestie justo in erat. Vestibulum non est gravida urna interdum convallis. Morbi non ante ut elit euismod tempor. Pellentesque vestibulum, dolor vel interdum semper, ante libero accumsan est, nec ullamcorper urna nunc sit amet erat. Sed consectetur consectetur augue. Aliquam erat volutpat. Sed rutrum, augue ac iaculis pharetra, lorem pede posuere tortor, commodo fermentum lacus libero vitae lectus. Donec libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In tellus nulla, congue non, blandit ut, mattis iaculis, magna. Vestibulum eget sapien. Nullam sed tortor vel mauris sodales ullamcorper. Cras malesuada purus. Ut lectus. Cras eget orci. Fusce sed erat. Etiam nibh purus, dapibus nec, condimentum eget, volutpat a, arcu.\r\n\r\nMorbi tincidunt. Morbi eget purus. Curabitur euismod, ipsum nec egestas consectetur, sem tellus vestibulum risus, vel fermentum nulla lectus quis nisi. Fusce risus risus, feugiat at, facilisis vestibulum, tempor quis, tellus. Sed a enim at nibh aliquet vehicula. In lectus. Praesent quam erat, porttitor quis, porta non, hendrerit ut, orci. Fusce interdum. Praesent vulputate vestibulum nibh. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque rhoncus urna eu lacus. Nulla facilisi.\r\n\r\nVivamus adipiscing. Maecenas vitae mauris vitae pede faucibus bibendum. Curabitur placerat consectetur metus. Nunc arcu. Duis vel urna vitae velit fringilla posuere. Suspendisse pretium dapibus ipsum. Quisque nulla. In condimentum. Donec euismod, purus eu dignissim fringilla, nulla tortor condimentum nulla, non consectetur purus sapien id mauris. Aliquam venenatis malesuada augue. Cras commodo condimentum dolor. '),(2,1,1233604213,0,1,'The second ever news article','This one isnt as informative. But equally as important and initially unpublished.'),(6,1,1233699900,0,1,'Testing','blah blah blah blah blah blah blah blah blah'),(4,1,1233695686,0,1,'Empev article #4','This is a test of the administrator\'s dashboards ability to publish news articles.'),(5,1,1233695722,0,1,'Empev article #4','This is a test of the administrator\'s dashboards ability to publish news articles.'),(7,1,1233760837,0,1,'kdddgsdfjgfdgsgdfjggsfdghj','jfhljdghkrhlfdgeyruitfhjdetyrtujfswetyrtu;gjcswreitu myfhgsteryldsgetr    xgkeyrlvcxmshetyrukjvn xsetrtu;gjvcxzafrwerut;fcxzarwtekcxzm\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\''),(8,1,1233778366,0,1,'The second ever news article','This one isnt as informative. But equally as important and initially unpublished.'),(9,1,1233779984,0,1,'Empire Evolution now has Twitter integration!','Empire Evolution now is integrated with twitter! You can follow us at http://www.twitter.com/Empev. All news updates can be found and you can even use its capabilities to try and contact us and we\'ll try and get back to you as soon as possible!\n\nI hope you all like this update! :D'),(10,1,1233780186,0,1,'Empire Evolution now has Twitter integration!','Empire Evolution now is integrated with twitter! You can follow us at http://www.twitter.com/Empev. All news updates can be found and you can even use its capabilities to try and contact us and we\'ll try and get back to you as soon as possible!\n\nI hope you all like this update! :D'),(11,1,1233780720,1,0,'Empire Evolution now has Twitter integration!','Empire Evolution now is integrated with twitter! You can follow us at http://www.twitter.com/Empev. All news updates can be found and you can even use its capabilities to try and contact us and we\'ll try and get back to you as soon as possible!\n\nI hope you all like this update! :D\n\nEdit:\nIt even updates when you edit an article!\nI hope you all like this update! :D\n\nEdit:\nIt even updates when you edit an article!\r\nThis article was last updated Wednesday 4th February 21:01 PM'),(12,1,1237760717,0,1,'0','0');
/*!40000 ALTER TABLE `news_articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_logs`
--

DROP TABLE IF EXISTS `news_logs`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `news_logs` (
  `uid` mediumint(8) unsigned NOT NULL auto_increment,
  `player_uid` mediumint(8) unsigned NOT NULL default '0',
  `date` int(11) NOT NULL,
  `event` text NOT NULL,
  `flagged` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `news_logs`
--

LOCK TABLES `news_logs` WRITE;
/*!40000 ALTER TABLE `news_logs` DISABLE KEYS */;
INSERT INTO `news_logs` VALUES (1,1,0,'added a new news article',0),(2,1,1233699900,'added a new news article entitled Testing',0),(3,1,1233760837,'added a new news article entitled kdddgsdfjgfdgsgdfjggsfdghj',0),(4,1,1233778366,'added a new news article entitled The second ever news article',0),(5,1,1233779984,'added a new news article entitled Empire Evolution now has Twitter integration!',0),(6,1,1233780186,'added a new news article entitled Empire Evolution now has Twitter integration!',0),(7,1,1233780720,'added a new news article entitled Empire Evolution now has Twitter integration!',0),(8,1,1233781227,'has edited and updated the news article entitled Empire Evolution now has Twitter integration!',0),(9,1,1233781313,'has edited and updated the news article entitled Empire Evolution now has Twitter integration!',0),(10,1,1234297525,'has deleted the news article entitled ',0),(11,1,1234297756,'has deleted the news article entitled ',0),(12,1,1234297773,'has deleted the news article entitled Array',0),(13,1,1234297797,'has deleted the news article entitled Empire Evolution now has Twitter integration!',0),(14,1,1234298044,'has deleted the news article entitled Empire Evolution now has Twitter integration!',0),(15,1,1234298086,'has deleted the news article entitled Empire Evolution now has Twitter integration!',0),(16,1,1234298197,'has deleted the news article entitled Empire Evolution now has Twitter integration!',0),(17,1,1234298204,'has deleted the news article entitled Empire Evolution now has Twitter integration!',0),(18,1,1234298205,'has deleted the news article entitled Empire Evolution now has Twitter integration!',0),(19,1,1234298618,'has deleted the news article entitled Empire Evolution now has Twitter integration!',0),(20,1,1234298685,'has deleted the news article entitled Empire Evolution now has Twitter integration!',0),(21,1,1234298880,'has deleted the news article entitled The second ever news article',0),(22,1,1234298998,'has deleted the news article entitled Empire Evolution now has Twitter integration!',0),(23,1,1234299055,'has deleted the news article entitled Empire Evolution now has Twitter integration!',0),(24,1,1234299234,'has deleted the news article entitled The second ever news article',0),(25,1,1234299271,'has deleted the news article entitled Empire Evolution now has Twitter integration!',0),(26,1,1234299394,'has deleted the news article entitled Empire Evolution now has Twitter integration!',0),(27,1,1234299470,'has deleted the news article entitled Empire Evolution now has Twitter integration!',0),(28,1,1234299682,'has deleted the news article entitled Empire Evolution now has Twitter integration!',0),(29,1,1234299700,'has deleted the news article entitled kdddgsdfjgfdgsgdfjggsfdghj',0),(30,1,1234299715,'has deleted the news article entitled Testing',0),(31,1,1234299836,'has deleted the news article entitled Empev article #4',0),(32,1,1234299845,'has deleted the news article entitled Empev article #4',0),(33,1,1237760717,'added a new news article entitled ',0),(34,1,1237761006,'added a new tweet',0),(35,1,1237828127,'has deleted the news article entitled 0',0);
/*!40000 ALTER TABLE `news_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `player`
--

DROP TABLE IF EXISTS `player`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `player` (
  `uid` mediumint(8) unsigned NOT NULL auto_increment,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rights` tinyint(3) unsigned NOT NULL,
  `join_date` int(11) unsigned NOT NULL,
  `activity` int(11) unsigned NOT NULL,
  UNIQUE KEY `Email` (`email`),
  UNIQUE KEY `ID` (`uid`),
  UNIQUE KEY `Username` (`username`),
  UNIQUE KEY `username_2` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1 COMMENT='Contains all data regarding players accounts';
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `player`
--

LOCK TABLES `player` WRITE;
/*!40000 ALTER TABLE `player` DISABLE KEYS */;
INSERT INTO `player` VALUES (1,'Alastair','1f7390524a904876b733ecbff52eb28b','Lleaxyer@googlemail.com',2,0,1238082219);
/*!40000 ALTER TABLE `player` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `player_building`
--

DROP TABLE IF EXISTS `player_building`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `player_building` (
  `uid` int(11) NOT NULL auto_increment,
  `player_uid` int(11) NOT NULL default '0',
  `building_uid` int(11) NOT NULL default '0',
  `building_level` int(11) NOT NULL default '0',
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='Contains all data regarding buildings owned by players';
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `player_building`
--

LOCK TABLES `player_building` WRITE;
/*!40000 ALTER TABLE `player_building` DISABLE KEYS */;
INSERT INTO `player_building` VALUES (1,1,1,2);
/*!40000 ALTER TABLE `player_building` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `player_logs`
--

DROP TABLE IF EXISTS `player_logs`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `player_logs` (
  `uid` mediumint(8) unsigned NOT NULL auto_increment,
  `player_uid` mediumint(8) unsigned NOT NULL default '0',
  `date` int(11) NOT NULL,
  `event` text NOT NULL,
  `flagged` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `player_logs`
--

LOCK TABLES `player_logs` WRITE;
/*!40000 ALTER TABLE `player_logs` DISABLE KEYS */;
INSERT INTO `player_logs` VALUES (2,1,1234299055,'has updated his email address',0);
/*!40000 ALTER TABLE `player_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `player_research`
--

DROP TABLE IF EXISTS `player_research`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `player_research` (
  `uid` int(11) NOT NULL auto_increment,
  `player_uid` int(11) NOT NULL default '0',
  `research_uid` int(11) NOT NULL default '0',
  `research_level` int(11) NOT NULL default '0',
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Contains all data regarding research conducted by players';
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `player_research`
--

LOCK TABLES `player_research` WRITE;
/*!40000 ALTER TABLE `player_research` DISABLE KEYS */;
/*!40000 ALTER TABLE `player_research` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `player_resource`
--

DROP TABLE IF EXISTS `player_resource`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `player_resource` (
  `uid` int(11) NOT NULL auto_increment,
  `player_uid` int(11) NOT NULL,
  `gold` int(11) NOT NULL default '250000',
  `stone` int(11) NOT NULL default '100000',
  `wood` int(11) NOT NULL default '50000',
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `player_resource`
--

LOCK TABLES `player_resource` WRITE;
/*!40000 ALTER TABLE `player_resource` DISABLE KEYS */;
INSERT INTO `player_resource` VALUES (1,1,250000,100000,50000);
/*!40000 ALTER TABLE `player_resource` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `player_settings`
--

DROP TABLE IF EXISTS `player_settings`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `player_settings` (
  `uid` int(11) NOT NULL auto_increment,
  `player_uid` int(11) NOT NULL,
  `private_profile` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`uid`),
  UNIQUE KEY `player_uid` (`player_uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `player_settings`
--

LOCK TABLES `player_settings` WRITE;
/*!40000 ALTER TABLE `player_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `player_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regiment`
--

DROP TABLE IF EXISTS `regiment`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `regiment` (
  `uid` int(12) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `attack_bonus` int(5) NOT NULL default '0',
  `defence_bonus` int(5) NOT NULL default '0',
  `carry_bonus` int(5) NOT NULL default '0',
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
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COMMENT='Contains all data regarding Regiments';
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `regiment`
--

LOCK TABLES `regiment` WRITE;
/*!40000 ALTER TABLE `regiment` DISABLE KEYS */;
INSERT INTO `regiment` VALUES (1,'Archer Regiment',350,35,5,200000,2000,0,3,50,0,0,0,0,0,0,0,0),(2,'Crossbowmen Regiment',40,20,5,250000,5000,0,3,50,4,50,0,0,0,0,0,0),(3,'Swordsmen Regiment',400,40,5,300000,2500,0,5,50,0,0,0,0,0,0,0,0),(4,'Knight Regiment',800,80,10,450000,7500,0,1,50,3,50,6,50,0,0,0,0),(5,'Pikeman Regiment',450,45,5,320000,5000,0,4,50,0,0,0,0,0,0,0,0),(6,'Mercenaries',380,35,5,300000,0,0,11,50,8,50,9,50,10,50,0,0),(7,'King&amp;amp;apos;s Guard',50,500,5,0,0,0,6,50,0,0,0,0,0,0,0,0),(8,'Merchant&amp;amp;apos;s Caravan',30,400,10,0,0,0,0,0,0,0,0,0,0,0,0,0),(9,'Noble&amp;amp;apos;s Caravan',40,500,20,0,0,0,0,0,0,0,0,0,0,0,0,0),(10,'Lord&amp;amp;apos;s Caravan',65,650,30,0,0,0,0,0,0,0,0,0,0,0,0,0),(11,'King&amp;amp;apos;s Caravan',80,800,40,0,0,0,0,0,0,0,0,0,0,0,0,0);
/*!40000 ALTER TABLE `regiment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regiment_bonus`
--

DROP TABLE IF EXISTS `regiment_bonus`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `regiment_bonus` (
  `uid` int(11) NOT NULL auto_increment,
  `regiment_uid` int(11) NOT NULL,
  `bonus_type` varchar(255) NOT NULL,
  `bonus_amount` varchar(5) NOT NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `regiment_bonus`
--

LOCK TABLES `regiment_bonus` WRITE;
/*!40000 ALTER TABLE `regiment_bonus` DISABLE KEYS */;
/*!40000 ALTER TABLE `regiment_bonus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regiment_requirement`
--

DROP TABLE IF EXISTS `regiment_requirement`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `regiment_requirement` (
  `uid` int(11) NOT NULL auto_increment,
  `regiment_uid` int(11) NOT NULL,
  `requirement_uid` varchar(255) NOT NULL,
  `requirement_level` int(11) NOT NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `regiment_requirement`
--

LOCK TABLES `regiment_requirement` WRITE;
/*!40000 ALTER TABLE `regiment_requirement` DISABLE KEYS */;
/*!40000 ALTER TABLE `regiment_requirement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `research`
--

DROP TABLE IF EXISTS `research`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `research` (
  `uid` int(12) NOT NULL auto_increment,
  `research_name` varchar(255) NOT NULL,
  `research_description` text NOT NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COMMENT='Contains all data regarding Research';
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `research`
--

LOCK TABLES `research` WRITE;
/*!40000 ALTER TABLE `research` DISABLE KEYS */;
INSERT INTO `research` VALUES (1,'Construction','This skill will give a king&amp;apos;s people an understanding of how to build structures, giving access to more buildings and how to improve existing ones.'),(2,'Economics','This skill will give a king&amp;apos;s people an understanding of how to run an effecient economy, giving access to buildings and improving existing ones.'),(3,'Improved Labour','This skill will give a king&amp;apos;s people an understanding of how to work effeciently, giving access to buildings and improving existing ones.'),(4,'Scouting','This skill will give a king&amp;apos;s people an understanding of how to move silently and stealthly, giving access to buildings and improving existing ones.'),(5,'Scouting','This skill will give a king&amp;apos;s people an understanding of how to move silently and stealthly, giving access to buildings and improving existing ones.'),(6,'Teaching','This skill will give a king&amp;apos;s people an understanding of how to teach more effectively and teach a larger variety, giving access to buildings and improving existing ones.'),(7,'Smithing','This skill will give a king&amp;apos;s people an understanding of how to work with metal more effeciently, giving access to buildings and improving existing ones'),(8,'Architecture','This skill will give a king&amp;apos;s people an understanding of how to design better structures, giving access to buildings and improving existing ones.'),(9,'Engineering','This skill will give a king&amp;apos;s people an understanding of how to apply science to solve problems, giving access to buildings and improving existing ones.');
/*!40000 ALTER TABLE `research` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `research_logs`
--

DROP TABLE IF EXISTS `research_logs`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `research_logs` (
  `uid` mediumint(8) unsigned NOT NULL auto_increment,
  `player_uid` mediumint(8) unsigned NOT NULL default '0',
  `date` int(11) NOT NULL,
  `event` text NOT NULL,
  `flagged` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `research_logs`
--

LOCK TABLES `research_logs` WRITE;
/*!40000 ALTER TABLE `research_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `research_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `research_requirement`
--

DROP TABLE IF EXISTS `research_requirement`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `research_requirement` (
  `uid` int(11) NOT NULL,
  `research_uid` int(11) NOT NULL,
  `research_level` int(11) NOT NULL,
  `requirement_uid` varchar(255) NOT NULL,
  `requirement_level` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `research_requirement`
--

LOCK TABLES `research_requirement` WRITE;
/*!40000 ALTER TABLE `research_requirement` DISABLE KEYS */;
/*!40000 ALTER TABLE `research_requirement` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2009-04-10 22:25:45
