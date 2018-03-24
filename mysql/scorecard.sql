-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 24, 2018 at 02:17 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `scorecard`
--

DROP TABLE IF EXISTS `scorecard`;
CREATE TABLE IF NOT EXISTS `scorecard` (
  `playerid` int(11) NOT NULL,
  `matchid` int(11) NOT NULL,
  `runs` int(11) DEFAULT NULL,
  `balls` int(11) DEFAULT NULL,
  `strikerate` decimal(10,4) DEFAULT NULL,
  `overs` float DEFAULT NULL,
  `wickets` int(11) DEFAULT NULL,
  `runsconceded` int(11) DEFAULT NULL,
  `economy` decimal(10,4) DEFAULT NULL,
  PRIMARY KEY (`playerid`,`matchid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
