-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 19, 2022 at 11:56 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudoperation2`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud2`
--

DROP TABLE IF EXISTS `crud2`;
CREATE TABLE IF NOT EXISTS `crud2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `course` varchar(300) DEFAULT NULL,
  `time` date DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=157 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crud2`
--

INSERT INTO `crud2` (`id`, `name`, `password`, `location`, `phone_number`, `gender`, `course`, `time`) VALUES
(155, 'daben', '741', 'koya', '022222', 'male', 'kaka kwy', '2022-05-13'),
(154, 'dahen', '8989', 'koya', '07514569878', 'male', NULL, '2022-05-10'),
(153, 'ios', 'ooo', 'koya', '07736947019', 'male', 'sbay yary qach bro', '2022-04-22'),
(152, 'none', 'qqq', 'koya', '07736947013', 'male', NULL, '2022-04-21'),
(151, 'da', 'lll', 'hawler', '07736947018', 'male', NULL, '2022-04-21'),
(150, 'd', '1111', 'qaqa', '07736947019', 'female', NULL, '2022-04-21'),
(146, 'mhamad', 'asd', 'koya', '07736947019', 'female', NULL, '2022-04-21'),
(156, 'kazm', '789', 'koya', '07736947013', 'male', NULL, '2022-05-17'),
(144, 'ahmad', '123', 'koya', '07736947018', 'male', '3 set wrg', '2022-04-20'),
(145, 'qwe', '123', 'koya', '07736947018', 'female', NULL, '2022-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `crud3`
--

DROP TABLE IF EXISTS `crud3`;
CREATE TABLE IF NOT EXISTS `crud3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plan` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crud3`
--

INSERT INTO `crud3` (`id`, `plan`) VALUES
(13, 'sbay aroin bo hawler');

-- --------------------------------------------------------

--
-- Table structure for table `crud4`
--

DROP TABLE IF EXISTS `crud4`;
CREATE TABLE IF NOT EXISTS `crud4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(300) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crud4`
--

INSERT INTO `crud4` (`id`, `course`, `name`) VALUES
(1, 'aa', 'mhamad'),
(2, 'a', ''),
(3, 'a', '');

-- --------------------------------------------------------

--
-- Table structure for table `crud5`
--

DROP TABLE IF EXISTS `crud5`;
CREATE TABLE IF NOT EXISTS `crud5` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `prise` int(100) NOT NULL,
  `time` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crud5`
--

INSERT INTO `crud5` (`id`, `name`, `type`, `prise`, `time`) VALUES
(14, 'whey', 'protin', 100, '2022-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `crud6`
--

DROP TABLE IF EXISTS `crud6`;
CREATE TABLE IF NOT EXISTS `crud6` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `prise` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crud6`
--

INSERT INTO `crud6` (`id`, `name`, `type`, `prise`) VALUES
(8, 'mnmn', 'Ù‚Ø§Ú†', 500);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`) VALUES
(1, 'sbay holl krawaya nabet');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `phone number` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
