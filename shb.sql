-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2021 at 12:21 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shb`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(22) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `lang` varchar(22) NOT NULL,
  `author` varchar(50) DEFAULT NULL,
  `oprice` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `uid` varchar(11) NOT NULL,
  `upld_on` date NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`ID`, `category`, `Name`, `lang`, `author`, `oprice`, `price`, `year`, `uid`, `upld_on`) VALUES
(7, 'Children', 'Balamangala', 'Kannada', 'NA', 10, 5, 2001, 'd', '2000-01-01'),
(9, 'Science and Technology', 'science', 'kannada', 'suresh', 300, 120, 2020, 'd', '0000-00-00'),
(10, 'Novel', 'Malegalalli madumagalu', 'kannada', 'Kuvemu', 350, 200, 2000, 'c', '0000-00-00'),
(11, 'History', 'Indian History', 'English', 'NA', 300, 150, 2015, 'c', '0000-00-00'),
(13, 'Child', 'Champaka', 'Kannada', 'NA', 30, 15, 2017, 'c', '0000-00-00'),
(14, 'Science and Technology', 'Physics', 'English', 'NA', 400, 200, 2010, 'c', '0000-00-00'),
(16, 'children', 'abc', 'Kannada', 'NA', 400, 200, 2010, 'd', '2021-07-22');

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE IF NOT EXISTS `cat` (
  `category` varchar(50) NOT NULL,
  `r` int(11) NOT NULL AUTO_INCREMENT,
  `lan` varchar(50) NOT NULL,
  PRIMARY KEY (`r`),
  UNIQUE KEY `r` (`r`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`category`, `r`, `lan`) VALUES
('children', 1, 'Kannada'),
('Maths', 2, ''),
('Science and Technology', 3, ''),
('History', 6, ''),
('Travel', 7, ''),
('Other', 8, '');

-- --------------------------------------------------------

--
-- Table structure for table `lan`
--

CREATE TABLE IF NOT EXISTS `lan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `lan`
--

INSERT INTO `lan` (`id`, `lan`) VALUES
(1, 'Tulu'),
(3, 'English'),
(4, 'Kannada'),
(5, 'Hindi'),
(6, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `uname` text NOT NULL,
  `uemail` text NOT NULL,
  `umblno` varchar(20) NOT NULL,
  `uid` text NOT NULL,
  `upswd` text NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'customer',
  `address` varchar(50) NOT NULL,
  `adhar` int(12) NOT NULL,
  `seller_status` varchar(12) NOT NULL DEFAULT 'no',
  `rdate` date NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`),
  UNIQUE KEY `ID_2` (`ID`),
  KEY `ID_3` (`ID`),
  KEY `ID_4` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `uname`, `uemail`, `umblno`, `uid`, `upswd`, `role`, `address`, `adhar`, `seller_status`, `rdate`) VALUES
(11, 'Dheeraj', 'dheerajc19@gmail.com', '2147483647', 'd', 'd', 'admin', '', 0, 'seller', '1980-12-12'),
(26, 'C', 'c@gmail.com', '+919241663338', 'c', 'c', 'seller', 'a', 1234567890, 'approved', '2000-12-12'),
(27, 's', 's@gmail.com', '1111111111', 's', 's', 'customer', 'a', 1234567890, 'raised', '2020-04-01'),
(29, 'a', 'a@gmail.com', '1234567890', 'a', 'a', 'customer', '', 0, 'no', '2021-07-22');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
