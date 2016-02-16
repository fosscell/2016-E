-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: db_b130253cs
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2-log

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
-- Table structure for table `AUTH_USERS`
--

DROP TABLE IF EXISTS `AUTH_USERS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `AUTH_USERS` (
  `ADMIN_ID` varchar(11) NOT NULL,
  `PASSWORD` varchar(32) NOT NULL,
  PRIMARY KEY (`ADMIN_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AUTH_USERS`
--

LOCK TABLES `AUTH_USERS` WRITE;
/*!40000 ALTER TABLE `AUTH_USERS` DISABLE KEYS */;
INSERT INTO `AUTH_USERS` VALUES ('0','81dc9bdb52d04dc20036dbd8313ed055'),('reg','5f4dcc3b5aa765d61d8327deb882cf99');
/*!40000 ALTER TABLE `AUTH_USERS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instamojo_responses`
--

DROP TABLE IF EXISTS `instamojo_responses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instamojo_responses` (
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
  `TSHIRT_SPEC` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`,`modified_at`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instamojo_responses`
--

LOCK TABLES `instamojo_responses` WRITE;
/*!40000 ALTER TABLE `instamojo_responses` DISABLE KEYS */;
/*!40000 ALTER TABLE `instamojo_responses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verifier`
--

DROP TABLE IF EXISTS `verifier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `verifier` (
  `FOSSMeet_ID` varchar(12) NOT NULL,
  `O_REG_ID` varchar(32) NOT NULL,
  PRIMARY KEY (`FOSSMeet_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verifier`
--

LOCK TABLES `verifier` WRITE;
/*!40000 ALTER TABLE `verifier` DISABLE KEYS */;
/*!40000 ALTER TABLE `verifier` ENABLE KEYS */;
UNLOCK TABLES;

-- --------------------------------------------------------

--
-- Table structure for table `ws_prefs`
--

CREATE TABLE IF NOT EXISTS `ws_prefs` (
  `MOJO_ID` varchar(20) NOT NULL,
  `PREFS` varchar(100) NOT NULL,
  PRIMARY KEY (`MOJO_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-15 22:03:36
