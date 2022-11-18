-- MariaDB dump 10.19  Distrib 10.5.16-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: cvdataen
-- ------------------------------------------------------
-- Server version	10.5.16-MariaDB-1:10.5.16+maria~focal

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `digitalData`
--

DROP TABLE IF EXISTS `digitalData`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `digitalData` (
  `DigitalID` int(11) NOT NULL AUTO_INCREMENT,
  `Digital` varchar(100) DEFAULT NULL,
  `Digital_Level` varchar(50) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  PRIMARY KEY (`DigitalID`),
  KEY `digitalData_ibfk_1` (`UserID`),
  CONSTRAINT `digitalData_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `personalData` (`UserID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=641 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `digitalData`
--

LOCK TABLES `digitalData` WRITE;
/*!40000 ALTER TABLE `digitalData` DISABLE KEYS */;
INSERT INTO `digitalData` VALUES (639,NULL,NULL,449),(640,NULL,NULL,450);
/*!40000 ALTER TABLE `digitalData` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employerData`
--

DROP TABLE IF EXISTS `employerData`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employerData` (
  `employerID` int(11) NOT NULL AUTO_INCREMENT,
  `Employer` varchar(200) DEFAULT NULL,
  `Position` varchar(200) DEFAULT NULL,
  `Employer_Country` varchar(100) DEFAULT NULL,
  `Employer_City` varchar(100) DEFAULT NULL,
  `Employment_From` varchar(100) DEFAULT NULL,
  `Employment_To` varchar(100) DEFAULT NULL,
  `Employment_Ongoing` varchar(50) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  PRIMARY KEY (`employerID`),
  KEY `employerData_ibfk_1` (`UserID`),
  CONSTRAINT `employerData_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `personalData` (`UserID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=570 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employerData`
--

LOCK TABLES `employerData` WRITE;
/*!40000 ALTER TABLE `employerData` DISABLE KEYS */;
INSERT INTO `employerData` VALUES (568,'','','','','','',NULL,449),(569,'','','','','','',NULL,450);
/*!40000 ALTER TABLE `employerData` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `languageData`
--

DROP TABLE IF EXISTS `languageData`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `languageData` (
  `LanguageID` int(11) NOT NULL AUTO_INCREMENT,
  `Language` varchar(50) DEFAULT NULL,
  `Language_Level` varchar(50) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  PRIMARY KEY (`LanguageID`),
  KEY `languageData_ibfk_1` (`UserID`),
  CONSTRAINT `languageData_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `personalData` (`UserID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=721 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languageData`
--

LOCK TABLES `languageData` WRITE;
/*!40000 ALTER TABLE `languageData` DISABLE KEYS */;
INSERT INTO `languageData` VALUES (719,NULL,NULL,449),(720,NULL,NULL,450);
/*!40000 ALTER TABLE `languageData` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personalData`
--

DROP TABLE IF EXISTS `personalData`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personalData` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(100) DEFAULT NULL,
  `Last_Name` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone` varchar(100) DEFAULT NULL,
  `Country` varchar(100) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `User_Photo` varchar(200) DEFAULT NULL,
  `Data_Entered` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=451 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personalData`
--

LOCK TABLES `personalData` WRITE;
/*!40000 ALTER TABLE `personalData` DISABLE KEYS */;
INSERT INTO `personalData` VALUES (449,'Sherzod','Karimov','karimov.sherzod@gmail.com','+421944916585','Словакия','Bratislava',37,'Male',NULL,'2022-10-16 23:49:09'),(450,'Sherzod','Karimov','karimov.sherzod@gmail.com','+421944916585','Словакия','Bratislava',37,'Male',NULL,'2022-10-16 23:49:14');
/*!40000 ALTER TABLE `personalData` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schoolData`
--

DROP TABLE IF EXISTS `schoolData`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schoolData` (
  `SchoolID` int(11) NOT NULL AUTO_INCREMENT,
  `School` varchar(200) DEFAULT NULL,
  `Degree` varchar(100) DEFAULT NULL,
  `Specialization` varchar(200) DEFAULT NULL,
  `School_Country` varchar(100) DEFAULT NULL,
  `School_City` varchar(100) DEFAULT NULL,
  `School_From` varchar(50) DEFAULT NULL,
  `School_To` varchar(50) DEFAULT NULL,
  `School_Ongoing` varchar(50) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  PRIMARY KEY (`SchoolID`),
  KEY `schoolData_ibfk_1` (`UserID`),
  CONSTRAINT `schoolData_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `personalData` (`UserID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=450 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schoolData`
--

LOCK TABLES `schoolData` WRITE;
/*!40000 ALTER TABLE `schoolData` DISABLE KEYS */;
INSERT INTO `schoolData` VALUES (448,'НамМИИ','Bachelor Degree','Экономика ','Узбекистан ','Наманган','2003-09-01','2007-07-26',NULL,449),(449,'НамМИИ','Bachelor Degree','Экономика ','Узбекистан ','Наманган','2003-09-01','2007-07-26',NULL,450);
/*!40000 ALTER TABLE `schoolData` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-19  9:09:49
