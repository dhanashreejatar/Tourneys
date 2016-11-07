-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2016 at 05:43 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tourneys`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `mem_id` int(11) NOT NULL,
  `mem_user_name` varchar(64) NOT NULL,
  `mem_password` varchar(64) DEFAULT NULL,
  `mem_location` varchar(128) NOT NULL,
  `mem_tourn_org` int(32) NOT NULL,
  PRIMARY KEY (`mem_id`),
  UNIQUE KEY `mem_id` (`mem_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `mem_user_name`, `mem_password`, `mem_location`, `mem_tourn_org`) VALUES
(0, 'Dj', '123', '152/6, Vishramalaya, Sion Circle, Mumbai-22', 0),
(1, 'chant', '123', '', 0),
(3, 'bobo', 'bro', 'Ghar', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tournaments`
--

CREATE TABLE IF NOT EXISTS `tournaments` (
  `tourn_id` int(32) NOT NULL AUTO_INCREMENT,
  `tourn_name` varchar(64) NOT NULL,
  `tourn_sport` int(32) NOT NULL,
  `tourn_venue` varchar(64) NOT NULL,
  `tourn_ratings` int(32) DEFAULT NULL,
  `tourn_deadline` date NOT NULL,
  `tourn_pic` varchar(1024) DEFAULT NULL,
  `tourn_fee` int(64) DEFAULT NULL,
  `tourn_nop` int(32) NOT NULL,
  `tourn_not` int(32) NOT NULL,
  `tourn_dates` varchar(32) NOT NULL,
  `tourn_locality` varchar(64) NOT NULL,
  PRIMARY KEY (`tourn_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tournaments`
--

INSERT INTO `tournaments` (`tourn_id`, `tourn_name`, `tourn_sport`, `tourn_venue`, `tourn_ratings`, `tourn_deadline`, `tourn_pic`, `tourn_fee`, `tourn_nop`, `tourn_not`, `tourn_dates`, `tourn_locality`) VALUES
(1, 'NEW GAMES', 1, 'Grant Road', NULL, '0000-00-00', NULL, NULL, 4, 5, '26/09/2016', ''),
(2, 'NEW GAMES1', 2, 'Grant Road', NULL, '0000-00-00', NULL, NULL, 4, 5, '26/09/2016', ''),
(3, 'NEW GAMES3', 2, 'Grant Road', NULL, '0000-00-00', NULL, NULL, 4, 5, '26/09/2016', ''),
(4, 'sejh', 3, 'dskfh', NULL, '0000-00-00', NULL, NULL, 2, 1, 'esf', ''),
(5, 'yoyo', 0, 'Dadar', 10, '0000-00-00', NULL, NULL, 5, 6, '29/07/2016', '');

-- --------------------------------------------------------

--
-- Table structure for table `tournament_connect`
--

CREATE TABLE IF NOT EXISTS `tournament_connect` (
  `tourn_id` int(32) NOT NULL,
  `team_name` varchar(32) NOT NULL,
  `team_priority` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournament_connect`
--

INSERT INTO `tournament_connect` (`tourn_id`, `team_name`, `team_priority`) VALUES
(1, 'Dj', NULL),
(1, 'chant', NULL),
(1, 'Priyal', NULL),
(1, 'team1', NULL),
(1, 'team2', NULL),
(1, 'team3', NULL),
(1, 'team4', NULL),
(1, 'team5', NULL),
(2, 'yoyo', NULL),
(3, 'nono', NULL),
(2, 'bobo', NULL),
(3, 'chant', NULL),
(2, 'teambest', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tournament_organized`
--

CREATE TABLE IF NOT EXISTS `tournament_organized` (
  `tourn_id` int(32) NOT NULL,
  `mem_username` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournament_organized`
--

INSERT INTO `tournament_organized` (`tourn_id`, `mem_username`) VALUES
(3, 'Dj'),
(4, 'Dj'),
(5, 'chant'),
(2, 'Dj');

-- --------------------------------------------------------

--
-- Table structure for table `tournament_win`
--

CREATE TABLE IF NOT EXISTS `tournament_win` (
  `tourn_id` int(32) NOT NULL,
  `team_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournament_win`
--

INSERT INTO `tournament_win` (`tourn_id`, `team_name`) VALUES
(1, 'yo'),
(1, 'Dj'),
(1, 'Priyal'),
(2, 'dj'),
(2, 'Dj'),
(2, 'bobo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
