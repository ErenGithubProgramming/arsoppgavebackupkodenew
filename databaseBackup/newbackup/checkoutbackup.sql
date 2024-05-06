-- MariaDB dump 10.19-11.3.2-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: checkout
-- ------------------------------------------------------
-- Server version	11.3.2-MariaDB

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
-- Table structure for table `info_om_kunde`
--

DROP TABLE IF EXISTS `info_om_kunde`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `info_om_kunde` (
  `idinfo_om_kunde` int(11) NOT NULL AUTO_INCREMENT,
  `brukernavn` varchar(245) DEFAULT NULL,
  `passord` varchar(245) DEFAULT NULL,
  `usertype` varchar(245) DEFAULT 'user',
  PRIMARY KEY (`idinfo_om_kunde`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info_om_kunde`
--

LOCK TABLES `info_om_kunde` WRITE;
/*!40000 ALTER TABLE `info_om_kunde` DISABLE KEYS */;
INSERT INTO `info_om_kunde` VALUES
(1,'erenadmin','b1c4e21e06cf9b5597e38e9dcd224c6b','admin'),
(2,'eren','a209541310cac0ba0f9d419d51061198','user');
/*!40000 ALTER TABLE `info_om_kunde` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `infocheckout`
--

DROP TABLE IF EXISTS `infocheckout`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `infocheckout` (
  `idInfocheckout` int(11) NOT NULL AUTO_INCREMENT,
  `namesof` varchar(245) DEFAULT NULL,
  `epost` varchar(245) DEFAULT NULL,
  `adress` varchar(245) DEFAULT NULL,
  `bysted` varchar(245) DEFAULT NULL,
  `navnkart` varchar(245) DEFAULT NULL,
  `kortnummer` varchar(945) DEFAULT NULL,
  `expmonth` varchar(245) DEFAULT NULL,
  `expyear` varchar(245) DEFAULT NULL,
  `cvc` varchar(245) DEFAULT NULL,
  PRIMARY KEY (`idInfocheckout`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `infocheckout`
--

LOCK TABLES `infocheckout` WRITE;
/*!40000 ALTER TABLE `infocheckout` DISABLE KEYS */;
INSERT INTO `infocheckout` VALUES
(1,'john','johndoe@gmail.com','new york street 12','new york','john doe','231312231231332','13/04','2029','121');
/*!40000 ALTER TABLE `infocheckout` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sakerforperson`
--

DROP TABLE IF EXISTS `sakerforperson`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sakerforperson` (
  `idsakerforperson` int(11) NOT NULL AUTO_INCREMENT,
  `navn` varchar(245) DEFAULT NULL,
  `epost` varchar(245) DEFAULT NULL,
  `sak` varchar(245) DEFAULT NULL,
  PRIMARY KEY (`idsakerforperson`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sakerforperson`
--

LOCK TABLES `sakerforperson` WRITE;
/*!40000 ALTER TABLE `sakerforperson` DISABLE KEYS */;
INSERT INTO `sakerforperson` VALUES
(1,'john','doe@gmail.com','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut'),
(2,'john','doe@gmail.com','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut');
/*!40000 ALTER TABLE `sakerforperson` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-06 17:04:53
