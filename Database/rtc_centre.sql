-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: rtc.ma    Database: rtc
-- ------------------------------------------------------
-- Server version	5.7.33-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `centre`
--

DROP TABLE IF EXISTS `centre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `centre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) NOT NULL,
  `centres` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=246 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `centre`
--

LOCK TABLES `centre` WRITE;
/*!40000 ALTER TABLE `centre` DISABLE KEYS */;
INSERT INTO `centre` VALUES (220,'196.12.203.6','rb-lmy'),(221,'196.12.203.6','sl-lsaf'),(222,'105.72.219.109','sl-lsaf'),(223,'41.140.171.130','sl-lsaf'),(224,'41.140.171.130','sl-lsaf'),(225,'41.249.124.255','sl-lsaf'),(226,'41.249.124.255','sl-lsaf'),(227,'196.206.224.162','sl-lsaf'),(228,'197.129.216.130','sl-lsaf'),(229,'196.87.14.238','ca-lak'),(230,'196.87.14.238','ca-lak'),(231,'41.140.171.130','sl-lsaf'),(232,'41.140.227.0','sl-lsaf'),(233,'41.249.39.48','sl-lsaf'),(234,'41.249.39.48','sl-lsaf'),(235,'105.72.219.109','mr-lit'),(236,'41.249.39.48','sl-lsaf'),(237,'41.249.39.48','sl-lsaf'),(238,'196.95.45.83','sl-lsaf'),(239,'41.140.212.255','sl-lsaf'),(240,'196.75.243.227','sl-lsaf'),(241,'197.253.225.196','sl-lsaf'),(242,'196.65.146.192','sl-lsaf'),(243,'160.179.167.128','sl-lsaf'),(244,'160.165.160.35','sl-lsaf'),(245,'197.153.88.111','sl-lsaf');
/*!40000 ALTER TABLE `centre` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-28 17:26:02
