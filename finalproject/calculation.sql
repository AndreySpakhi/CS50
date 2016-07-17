-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: calculation
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

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
-- Table structure for table `calculation`
--

DROP TABLE IF EXISTS `calculation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calculation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `owner` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `fk_users` (`owner`),
  CONSTRAINT `fk_users` FOREIGN KEY (`owner`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calculation`
--

LOCK TABLES `calculation` WRITE;
/*!40000 ALTER TABLE `calculation` DISABLE KEYS */;
INSERT INTO `calculation` VALUES (1,1),(2,1),(3,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(4,3),(5,3);
/*!40000 ALTER TABLE `calculation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calculationinfo`
--

DROP TABLE IF EXISTS `calculationinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calculationinfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `calculationid` int(10) unsigned NOT NULL,
  `number` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `transformertype` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `calculationid` (`calculationid`),
  CONSTRAINT `calculationinfo_ibfk_1` FOREIGN KEY (`calculationid`) REFERENCES `calculation` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calculationinfo`
--

LOCK TABLES `calculationinfo` WRITE;
/*!40000 ALTER TABLE `calculationinfo` DISABLE KEYS */;
INSERT INTO `calculationinfo` VALUES (1,1,'001576','JORDAN','AODCTN-400000/400/132','2016-07-11 17:06:34'),(2,2,'001577','UKRAINE','ATDCTN-125000/220/110','2016-07-11 17:07:55'),(3,3,'001578','INDIA','ROM-110000/765','2016-07-11 17:08:41'),(4,4,'001723','RUSSIA','AODCTN-167000/500','2016-07-12 20:42:34'),(5,5,'001726','UKRAINE','TRDNS-63000/330','2016-07-12 20:42:53'),(6,10,'001678','UKRAINE','TMN-2500/15','2016-07-14 18:39:00'),(7,11,'123456','UKRAINE','TRDNS-40000/330','2016-07-17 17:58:01'),(8,12,'123456','UKRAINE','TRDNS-40000/330','2016-07-17 17:59:26'),(9,13,'123456','UKRAINE','TRDNS-40000/330','2016-07-17 18:01:10'),(10,14,'123456','UKRAINE','TRDNS-40000/330','2016-07-17 18:26:17'),(11,15,'123456','UKRAINE','TRDNS-40000/330','2016-07-17 19:18:12'),(12,16,'123456','UKRAINE','TRDNS-40000/330','2016-07-17 19:18:32'),(13,17,'123456','UKRAINE','TRDNS-40000/330','2016-07-17 19:30:25'),(14,18,'123457','UKRAINE','TDNS-63000/115','2016-07-17 20:19:21');
/*!40000 ALTER TABLE `calculationinfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coremass`
--

DROP TABLE IF EXISTS `coremass`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coremass` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `calculationid` int(10) unsigned NOT NULL,
  `coremass` double unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `calculationid` (`calculationid`),
  CONSTRAINT `coremass_ibfk_1` FOREIGN KEY (`calculationid`) REFERENCES `calculation` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coremass`
--

LOCK TABLES `coremass` WRITE;
/*!40000 ALTER TABLE `coremass` DISABLE KEYS */;
/*!40000 ALTER TABLE `coremass` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `corematerial`
--

DROP TABLE IF EXISTS `corematerial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `corematerial` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `thickness` double unsigned NOT NULL,
  `fillfactor` double unsigned NOT NULL,
  PRIMARY KEY (`name`,`thickness`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `corematerial`
--

LOCK TABLES `corematerial` WRITE;
/*!40000 ALTER TABLE `corematerial` DISABLE KEYS */;
INSERT INTO `corematerial` VALUES (2,'3404',0.3,0.97),(1,'3404',0.35,0.975),(3,'3405',0.35,0.975),(4,'3407',0.35,0.975),(10,'3408',0.27,0.965),(5,'3408',0.3,0.97),(7,'C120-27',0.27,0.965),(8,'H111-30',0.3,0.97),(6,'NV27S105',0.27,0.965);
/*!40000 ALTER TABLE `corematerial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coretype`
--

DROP TABLE IF EXISTS `coretype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coretype` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  `h_section` int(10) unsigned NOT NULL,
  `v_section` int(10) unsigned NOT NULL,
  `g_section` int(10) unsigned NOT NULL,
  `t_section` int(10) unsigned NOT NULL,
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `description` (`description`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coretype`
--

LOCK TABLES `coretype` WRITE;
/*!40000 ALTER TABLE `coretype` DISABLE KEYS */;
INSERT INTO `coretype` VALUES (1,'MS N1',2,2,4,0),(2,'MS N2',3,4,4,2),(3,'MS N3',4,6,4,4),(4,'MS N4',5,8,4,6),(5,'MS N5',8,14,4,12),(6,'MS N6',10,10,10,10);
/*!40000 ALTER TABLE `coretype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datacore`
--

DROP TABLE IF EXISTS `datacore`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datacore` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `calculationid` int(10) unsigned NOT NULL,
  `coretype` varchar(255) NOT NULL,
  `material` varchar(10) NOT NULL,
  `h_dim` double unsigned NOT NULL,
  `v_dim` double unsigned NOT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `calculationid` (`calculationid`),
  KEY `fk_coretype` (`coretype`),
  KEY `fk_corematerial` (`material`),
  CONSTRAINT `datacore_ibfk_1` FOREIGN KEY (`calculationid`) REFERENCES `calculation` (`id`),
  CONSTRAINT `fk_corematerial` FOREIGN KEY (`material`) REFERENCES `corematerial` (`name`),
  CONSTRAINT `fk_coretype` FOREIGN KEY (`coretype`) REFERENCES `coretype` (`description`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datacore`
--

LOCK TABLES `datacore` WRITE;
/*!40000 ALTER TABLE `datacore` DISABLE KEYS */;
/*!40000 ALTER TABLE `datacore` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datatrans`
--

DROP TABLE IF EXISTS `datatrans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datatrans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `calculationid` int(10) unsigned NOT NULL,
  `phases` int(2) NOT NULL,
  `voltagesides` int(2) NOT NULL,
  `power` int(10) unsigned NOT NULL,
  `frequency` int(5) unsigned NOT NULL,
  `coolingtype` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `calculationid` (`calculationid`),
  CONSTRAINT `datatrans_ibfk_1` FOREIGN KEY (`calculationid`) REFERENCES `calculation` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datatrans`
--

LOCK TABLES `datatrans` WRITE;
/*!40000 ALTER TABLE `datatrans` DISABLE KEYS */;
/*!40000 ALTER TABLE `datatrans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datawindings`
--

DROP TABLE IF EXISTS `datawindings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datawindings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `calculationid` int(10) unsigned NOT NULL,
  `hv_windingstype` varchar(255) NOT NULL,
  `mv_windingstype` varchar(255) NOT NULL,
  `lv_windingstype` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `calculationid` (`calculationid`),
  KEY `fk_hvtype` (`hv_windingstype`),
  KEY `fk_mvtype` (`mv_windingstype`),
  KEY `fk_lvtype` (`lv_windingstype`),
  CONSTRAINT `datawindings_ibfk_1` FOREIGN KEY (`calculationid`) REFERENCES `calculation` (`id`),
  CONSTRAINT `fk_hvtype` FOREIGN KEY (`hv_windingstype`) REFERENCES `windingstype` (`description`),
  CONSTRAINT `fk_lvtype` FOREIGN KEY (`lv_windingstype`) REFERENCES `windingstype` (`description`),
  CONSTRAINT `fk_mvtype` FOREIGN KEY (`mv_windingstype`) REFERENCES `windingstype` (`description`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datawindings`
--

LOCK TABLES `datawindings` WRITE;
/*!40000 ALTER TABLE `datawindings` DISABLE KEYS */;
/*!40000 ALTER TABLE `datawindings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,'Spakhi Andrey','LOG IN','2016-07-11 20:23:26'),(2,'Spakhi Andrey','LOG IN','2016-07-12 08:10:13'),(3,'ADMINISTRATOR','LOG IN','2016-07-12 08:11:26'),(4,'Spakhi Andrey','LOG IN','2016-07-12 08:14:18'),(5,'ADMINISTRATOR','LOG IN','2016-07-12 08:16:16'),(6,'ADMINISTRATOR','LOG IN','2016-07-12 18:35:45'),(7,'anna spakhi','REGISTRATION','2016-07-12 19:55:06'),(8,'anna spakhi','LOG IN','2016-07-12 19:58:21'),(9,'ADMINISTRATOR','LOG IN','2016-07-12 20:06:52'),(10,'anna spakhi','LOG IN','2016-07-12 20:44:04'),(11,'Spakhi Andrey','LOG IN','2016-07-12 20:54:40'),(12,'Spakhi Andrey','LOG IN','2016-07-13 12:23:41'),(13,'ADMINISTRATOR','LOG IN','2016-07-13 12:24:17'),(14,'Spakhi Andrey','LOG IN','2016-07-13 12:25:52'),(15,'Unknown User','REGISTRATION','2016-07-13 12:32:58'),(16,'User 4','REGISTRATION','2016-07-13 12:35:52'),(17,'ADMINISTRATOR','LOG IN','2016-07-13 12:37:15'),(18,'Spakhi Andrey','LOG IN','2016-07-13 16:07:23'),(19,'ADMINISTRATOR','LOG IN','2016-07-13 16:23:05'),(20,'Spakhi Andrey','LOG IN','2016-07-13 16:24:39'),(21,'Spakhi Andrey','LOG IN','2016-07-14 17:39:03'),(22,'Spakhi Andrey','CREATE','2016-07-14 18:39:00'),(23,'Spakhi Andrey','LOG IN','2016-07-15 20:09:39'),(24,'Spakhi Andrey','LOG IN','2016-07-16 05:52:07'),(25,'ADMINISTRATOR','LOG IN','2016-07-16 17:07:41'),(26,'Spakhi Andrey','LOG IN','2016-07-16 17:08:51'),(27,'ADMINISTRATOR','LOG IN','2016-07-16 18:26:24'),(28,'Spakhi Andrey','LOG IN','2016-07-16 20:10:57'),(29,'ADMINISTRATOR','LOG IN','2016-07-17 17:01:57'),(30,'Spakhi Andrey','LOG IN','2016-07-17 17:27:11'),(31,'Spakhi Andrey','CREATE','2016-07-17 17:58:01'),(32,'Spakhi Andrey','CREATE','2016-07-17 17:59:26'),(33,'Spakhi Andrey','CREATE','2016-07-17 18:01:10'),(34,'Spakhi Andrey','CREATE','2016-07-17 18:26:17'),(35,'Spakhi Andrey','CREATE','2016-07-17 19:18:12'),(36,'Spakhi Andrey','CREATE','2016-07-17 19:18:32'),(37,'Spakhi Andrey','CREATE','2016-07-17 19:30:25'),(38,'Spakhi Andrey','CREATE','2016-07-17 20:19:21');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permission` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Spakhi Andrey','test1','$2y$10$55YTs8hSSEJsGO2jIG2fTua580VyCTNhHKZVB1sCFLz/XPGT5imSG',0),(2,'ADMINISTRATOR','admin','$2y$10$RuE4y7bSnvDTwQaf9TY2cu/pewkj6mLE3JR4scFZTi0bNqZjbUgUu',1),(3,'anna spakhi','test2','$2y$10$ny8N/YJdbOger9ZwSUdI/u9sj/7mnPsMUQW1q5xaei3q/hCQWRA.e',0),(4,'Unknown User','test3','$2y$10$q1VkEdt6iAMqJWlpxH3RMu/U2bNTYM9LmRCfV/GGY1LCgwSiSpWMe',0),(5,'User 4','test4','$2y$10$9yYsrXEucgFl4AdrOSsdmOUEXFOFwM8oxOkhzkVkioRa6IHUGpSRq',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `windingstype`
--

DROP TABLE IF EXISTS `windingstype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `windingstype` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `description` (`description`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `windingstype`
--

LOCK TABLES `windingstype` WRITE;
/*!40000 ALTER TABLE `windingstype` DISABLE KEYS */;
INSERT INTO `windingstype` VALUES (1,'coil winding'),(3,'continuous winding'),(5,'cylindrical coil winding'),(2,'layered winding'),(6,'Test coil 1'),(4,'twisted winding');
/*!40000 ALTER TABLE `windingstype` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-17 21:41:29
