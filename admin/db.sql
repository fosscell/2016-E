-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 03, 2016 at 09:44 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2-log
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_b130253cs`
--

-- --------------------------------------------------------

--
-- Table structure for table `instamojo_responses`
--

CREATE TABLE IF NOT EXISTS `instamojo_responses` (
  `ID` varchar(32) NOT NULL,
  `PHONE_NUMBER` varchar(10) NOT NULL,
  `E_MAIL` varchar(100) NOT NULL,
  `BUYER_NAME` varchar(100) NOT NULL,
  `AMOUNT_PAID` int(11) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `STATUS` varchar(100) NOT NULL,
  `SHORT_URL` varchar(100) NOT NULL,
  `LONG_URL` varchar(500) NOT NULL,
  `modified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `FOOD_PREFS` varchar(100) NOT NULL,
  `T_SHIRTS` char(1) NOT NULL,
  `ORG_NAME` varchar(500) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instamojo_responses`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
