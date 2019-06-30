-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 30, 2019 at 07:04 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

DROP TABLE IF EXISTS `achievements`;
CREATE TABLE IF NOT EXISTS `achievements` (
  `title` varchar(256) COLLATE utf8_general_mysql500_ci NOT NULL,
  `tags` varchar(256) COLLATE utf8_general_mysql500_ci NOT NULL,
  `content` longtext COLLATE utf8_general_mysql500_ci NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `authour` varchar(256) COLLATE utf8_general_mysql500_ci NOT NULL,
  `status` int(1) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

DROP TABLE IF EXISTS `awards`;
CREATE TABLE IF NOT EXISTS `awards` (
  `title` varchar(256) COLLATE utf8_general_mysql500_ci NOT NULL,
  `tags` varchar(256) COLLATE utf8_general_mysql500_ci NOT NULL,
  `content` longtext COLLATE utf8_general_mysql500_ci NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `authour` varchar(256) COLLATE utf8_general_mysql500_ci NOT NULL,
  `status` int(1) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `title` varchar(256) COLLATE utf8_general_mysql500_ci NOT NULL,
  `tags` varchar(256) COLLATE utf8_general_mysql500_ci NOT NULL,
  `content` longtext COLLATE utf8_general_mysql500_ci NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `authour` varchar(256) COLLATE utf8_general_mysql500_ci NOT NULL,
  `status` int(1) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product update`
--

DROP TABLE IF EXISTS `product update`;
CREATE TABLE IF NOT EXISTS `product update` (
  `title` varchar(256) COLLATE utf8_general_mysql500_ci NOT NULL,
  `tags` varchar(256) COLLATE utf8_general_mysql500_ci NOT NULL,
  `content` longtext COLLATE utf8_general_mysql500_ci NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `authour` varchar(256) COLLATE utf8_general_mysql500_ci NOT NULL,
  `status` int(1) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=128 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Table structure for table `technology update`
--

DROP TABLE IF EXISTS `technology update`;
CREATE TABLE IF NOT EXISTS `technology update` (
  `title` varchar(256) COLLATE utf8_general_mysql500_ci NOT NULL,
  `tags` varchar(256) COLLATE utf8_general_mysql500_ci NOT NULL,
  `content` longtext COLLATE utf8_general_mysql500_ci NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `authour` varchar(256) COLLATE utf8_general_mysql500_ci NOT NULL,
  `status` int(1) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

DROP TABLE IF EXISTS `testimonial`;
CREATE TABLE IF NOT EXISTS `testimonial` (
  `title` varchar(256) COLLATE utf8_general_mysql500_ci NOT NULL,
  `tags` varchar(256) COLLATE utf8_general_mysql500_ci NOT NULL,
  `content` longtext COLLATE utf8_general_mysql500_ci NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `authour` varchar(256) COLLATE utf8_general_mysql500_ci NOT NULL,
  `status` int(1) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Table structure for table `travel update`
--

DROP TABLE IF EXISTS `travel update`;
CREATE TABLE IF NOT EXISTS `travel update` (
  `title` varchar(256) COLLATE utf8_general_mysql500_ci NOT NULL,
  `tags` varchar(256) COLLATE utf8_general_mysql500_ci NOT NULL,
  `content` longtext COLLATE utf8_general_mysql500_ci NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `authour` varchar(256) COLLATE utf8_general_mysql500_ci NOT NULL,
  `status` int(1) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `travel update`
--

INSERT INTO `travel update` (`title`, `tags`, `content`, `datetime`, `authour`, `status`, `id`) VALUES
('Welcome to travel updates', 'new,one,car', 'Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.', '2019-06-28 21:23:02', 'Sri', 1, 20),
('Welcome to Achievements', 'new,one,car', '                                      Video provides a powerful way to help you prove your point. When you click Online Video, you\r\n can paste in the embed code for the video\r\n you want to add. You can also type a keyword to search online for the video that best \r\nfits your document.', '2019-06-28 21:26:26', 'sd', 1, 21);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `mailid` varchar(40) COLLATE utf8_general_mysql500_ci NOT NULL,
  `userpassword` varchar(40) COLLATE utf8_general_mysql500_ci NOT NULL,
  `title` varchar(256) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `command` varchar(256) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `commanddate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`mailid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `mailid`, `userpassword`, `title`, `command`, `commanddate`) VALUES
('Balaji', 'balaji@gmail.com', '123456', '', '', '2019-06-27 14:48:03'),
('Srini', 'srini@gmail.com', '123456', NULL, NULL, '2019-06-30 23:57:21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
