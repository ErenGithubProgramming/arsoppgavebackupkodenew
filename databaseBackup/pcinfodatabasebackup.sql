-- MariaDB dump 10.19-11.2.2-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: pcinfo
-- ------------------------------------------------------
-- Server version	11.2.2-MariaDB

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
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info_om_kunde`
--

LOCK TABLES `info_om_kunde` WRITE;
/*!40000 ALTER TABLE `info_om_kunde` DISABLE KEYS */;
INSERT INTO `info_om_kunde` VALUES
('thisisanewtest','5de1312f60081431b0bc4165746b228f'),
('eren','289dff07669d7a23de0ef88d2f7129e7'),
('skole','81dc9bdb52d04dc20036dbd8313ed055'),
('wow','dc5c7986daef50c1e02ab09b442ee34f'),
('qwq','65bbc9dca18532e181860a25923c86c9'),
('eren','c6f057b86584942e415435ffb1fa93d4'),
('dw','2e2e2e'),
('dwwww','2e2e2e'),
('eren','024d7f84fff11dd7e8d9c510137a2381'),
('eren','6f4922f45568161a8cdf4ad2299f6d23'),
('wqqdq','b21a427ee6aa98496f905b392819f96b'),
('eren','bf54b308d5f2ec7aeddd86e5efcdc258'),
('paypal','a0a058baaeef16e88f6bd2ee36c03f6f'),
('qwdqdwqd','b85510d0b8055b98564983c91ac41217'),
('qwdqdwqd','b85510d0b8055b98564983c91ac41217'),
('qwdqdwqd','b85510d0b8055b98564983c91ac41217'),
('qwdqdwqd','b85510d0b8055b98564983c91ac41217'),
('qdwwqdqd','fa624f7abf25a551479d2638c1582577'),
('qdwwqdqd','fa624f7abf25a551479d2638c1582577'),
('op','11d8c28a64490a987612f2332502467f'),
('oi','a2e63ee01401aaeca78be023dfbb8c59'),
('oiTo','de4c3c721ace973b0c05be8e50b66bf3'),
('eren','2cfe1d7fb53aa07f7c177fa5d9f7b9bd'),
('eren','a209541310cac0ba0f9d419d51061198'),
('quickGuide','81dc9bdb52d04dc20036dbd8313ed055'),
('dnbmaster','da14533f3bc38a25a86a7fde895d7d45'),
('groving','202cb962ac59075b964b07152d234b70'),
('tester','f5d1278e8109edd94e1e4197e04873b9');
/*!40000 ALTER TABLE `info_om_kunde` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-17 13:05:23
