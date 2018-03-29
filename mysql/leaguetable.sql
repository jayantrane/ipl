-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 29, 2018 at 07:07 AM
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
-- Table structure for table `leaguetable`
--

DROP TABLE IF EXISTS `leaguetable`;
CREATE TABLE IF NOT EXISTS `leaguetable` (
  `id` int(2) NOT NULL,
  `name` varchar(60) NOT NULL,
  `matches_played` int(2) UNSIGNED ZEROFILL NOT NULL,
  `win` int(2) UNSIGNED ZEROFILL NOT NULL,
  `loss` int(2) UNSIGNED ZEROFILL NOT NULL,
  `draw` int(2) UNSIGNED ZEROFILL NOT NULL,
  `points` int(2) UNSIGNED ZEROFILL NOT NULL,
  `team_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaguetable`
--

INSERT INTO `leaguetable` (`id`, `name`, `matches_played`, `win`, `loss`, `draw`, `points`, `team_id`) VALUES
(1, 'Mumbai Indians', 00, 00, 00, 00, 00, 1),
(2, 'Chennai Super Kings', 00, 00, 00, 00, 00, 2),
(3, 'Royal Challengers Banglore', 00, 00, 00, 00, 00, 3),
(4, 'Kolkata Knight Riders', 00, 00, 00, 00, 00, 4),
(5, 'Sunrisers Hyderabad', 00, 00, 00, 00, 00, 5),
(6, 'Rajasthan Royals', 00, 00, 00, 00, 00, 6),
(7, 'Kings XI Punjab', 00, 00, 00, 00, 00, 7),
(8, 'Delhi Daredevils', 00, 00, 00, 00, 00, 8);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
