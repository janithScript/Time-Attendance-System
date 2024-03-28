-- MySQL dump 10.13  Distrib 8.0.35, for Win64 (x86_64)
--
-- Host: localhost    Database: slpa_db
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.27-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `division`
--

DROP TABLE IF EXISTS `division`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `division` (
  `div_name` varchar(100) DEFAULT NULL,
  `div_id` varchar(100) DEFAULT NULL,
  `section_id` varchar(100) NOT NULL,
  `com_no` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `division`
--

LOCK TABLES `division` WRITE;
/*!40000 ALTER TABLE `division` DISABLE KEYS */;
INSERT INTO `division` VALUES ('sda',NULL,'',NULL);
/*!40000 ALTER TABLE `division` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event` (
  `event_id` varchar(100) DEFAULT NULL,
  `emp_no` varchar(100) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `event_time` time DEFAULT NULL,
  `com_no` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event`
--

LOCK TABLES `event` WRITE;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
/*!40000 ALTER TABLE `event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `login` (
  `name` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `pwd` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES ('','clerk',''),(NULL,'Administration','asd'),(NULL,'clerk','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd'),('IS','Super_Ad','asd');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `master`
--

DROP TABLE IF EXISTS `master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `master` (
  `emp_no` int(11) NOT NULL AUTO_INCREMENT,
  `emp_name` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `division` varchar(100) DEFAULT NULL,
  `section` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`emp_no`),
  CONSTRAINT `master_ibfk_1` FOREIGN KEY (`emp_no`) REFERENCES `users` (`emp_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `master`
--

LOCK TABLES `master` WRITE;
/*!40000 ALTER TABLE `master` DISABLE KEYS */;
/*!40000 ALTER TABLE `master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section`
--

DROP TABLE IF EXISTS `section`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `section` (
  `division` varchar(100) DEFAULT NULL,
  `section_name` varchar(100) DEFAULT NULL,
  `section_id` varchar(100) NOT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section`
--

LOCK TABLES `section` WRITE;
/*!40000 ALTER TABLE `section` DISABLE KEYS */;
INSERT INTO `section` VALUES ('MD','ssgfs','');
/*!40000 ALTER TABLE `section` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `division` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `emp_no` int(11) NOT NULL AUTO_INCREMENT,
  `section_id` varchar(100) DEFAULT NULL,
  `pwd` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`emp_no`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('saab','saab',1,NULL,NULL),('OD','Administration_clerk',2,NULL,'asd'),('IS','Super_Ad',3,NULL,'asd'),('IS','Super_Ad',4,NULL,'asd'),('IS','Administration',5,NULL,'$2y$10$I6KTK2lpjtcIDDQdLHxIl.zO2E.Q5HfWsDb0XhhC8ZusAr9U9G9cS'),('IS','clerk',6,NULL,'$2y$10$uCwk6WLwO04UhT1BqGS9OuIV8flrB882KQVXo1ZZydhT3b6OQr2jO'),('IS','Super_Ad',7,NULL,'$2y$10$pnCJJwFydleqvewV3Srby.vfZ5Xx5LFZ1L.BO3eBJcbn.NPU6ecne'),('IS','Super_Ad',8,NULL,'asdfg123'),('MD','Administration',9,NULL,'asd123'),('IS','Super_Ad',10,NULL,'asdf'),('IS','Super_Ad',11,NULL,'$2y$10$XVkm/DgAEh./AiwQPImXgemT/1aVYEJBQTR99T2UCSyLCJ4iAzgdW'),('IS','Super_Ad',12,NULL,'$2y$10$ol6O.Rz8V704oIkKndQKMO.xO2GihaeC97MPD33SMwFexZguqkVX.'),('IS','clerk',13,NULL,'asd'),('IS','Super_Ad',14,NULL,'fgh'),('IS','Super_Ad',15,NULL,'xcv'),('IS','Super_Ad',16,NULL,'asd'),('IS','Super_Ad',17,NULL,'dfg'),('IS','Super_Ad',18,NULL,'qwe');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-27 15:41:36
