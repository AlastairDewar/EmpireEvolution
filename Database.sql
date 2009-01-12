--
--    This file is part of Empire Evolution.
--
--    Empire Evolution is free software: you can redistribute it and/or modify
--    it under the terms of the GNU General Public License as published by
--    the Free Software Foundation, either version 3 of the License, or
--    (at your option) any later version.
--
--    Empire Evolution is distributed in the hope that it will be useful,
--    but WITHOUT ANY WARRANTY; without even the implied warranty of
--    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
--    GNU General Public License for more details.
--
--    You should have received a copy of the GNU General Public License
--    along with Empire Evolution.  If not, see <http://www.gnu.org/licenses/>.
--

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `EmpireEvolution`
--

-- --------------------------------------------------------

--
-- Table structure for table `Confirmations`
--

CREATE TABLE IF NOT EXISTS `Confirmations` (
  `ID` int(10) unsigned zerofill NOT NULL,
  `Code` varchar(8) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Confirmations`
--


-- --------------------------------------------------------

--
-- Table structure for table `Locations`
--

CREATE TABLE IF NOT EXISTS `Locations` (
  `ID` int(10) unsigned zerofill NOT NULL,
  `Name` varchar(32) NOT NULL,
  `X Co-Ordinate` tinyint(3) NOT NULL,
  `Y Co-Ordinate` tinyint(3) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Locations`
--


-- --------------------------------------------------------

--
-- Table structure for table `Members`
--

CREATE TABLE IF NOT EXISTS `Members` (
  `ID` int(10) unsigned zerofill NOT NULL auto_increment,
  `Username` varchar(32) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Email` text NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Members`
--

-- --------------------------------------------------------

--
-- Table structure for table `Resources`
--

CREATE TABLE IF NOT EXISTS `Resources` (
  `ID` int(10) unsigned zerofill NOT NULL,
  `Gold` int(10) unsigned NOT NULL,
  `Stone` int(10) unsigned NOT NULL,
  `Wood` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Resources`
--


