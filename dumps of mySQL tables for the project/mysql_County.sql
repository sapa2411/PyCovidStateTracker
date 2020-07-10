-- MySQL dump 10.13  Distrib 5.7.30, for Linux (x86_64)
--
-- Host: localhost    Database: covid_us
-- ------------------------------------------------------
-- Server version	5.7.30-0ubuntu0.18.04.1

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
-- Table structure for table `County`
--

DROP TABLE IF EXISTS `County`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `County` (
  `county_name` varchar(255) NOT NULL,
  `cases` int(255) DEFAULT NULL,
  `deaths` int(255) DEFAULT NULL,
  PRIMARY KEY (`county_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `County`
--

LOCK TABLES `County` WRITE;
/*!40000 ALTER TABLE `County` DISABLE KEYS */;
INSERT INTO `County` VALUES ('Albany',1294,42),('Allegany',35,2),('Bronx',39476,2848),('Broome',338,22),('Cattaraugus',53,2),('Cayuga',52,2),('Chautauqua',37,2),('Chemung',126,1),('Chenango',100,1),('Clinton',69,4),('Columbia',229,18),('Cortland',32,1),('Delaware',73,2),('Dutchess',3151,84),('Erie',3891,292),('Essex',30,0),('Franklin',16,0),('Fulton',97,5),('Genesee',159,3),('Greene',166,5),('Hamilton',3,0),('Herkimer',67,3),('Jefferson',63,0),('Kings',47579,4262),('Lewis',9,5),('Livingston',86,2),('Madison',223,6),('Manhattan',23054,1693),('Monroe',1623,119),('Montgomery',61,4),('Nassau',37152,1818),('Niagara',570,27),('Oneida',574,18),('Onondaga',1088,37),('Ontario',97,9),('Orange',9282,343),('Orleans',102,9),('Oswego',68,3),('Otsego',67,4),('Putnam',1144,46),('Queens',54448,4324),('Rensselaer',339,16),('Richmond',12317,609),('Rockland',12144,536),('Saratoga',368,13),('Schenectady',537,25),('Schoharie',45,1),('Schuyler',8,0),('Seneca',46,2),('St. Lawrence',178,2),('Steuben',239,38),('Suffolk',35275,1296),('Sullivan',984,25),('Tioga',92,8),('Tompkins',129,0),('Ulster',1416,31),('Warren',192,10),('Washington',188,5),('Wayne',78,1),('Westchester',30240,1116),('Wyoming',70,5),('Yates',19,2);
/*!40000 ALTER TABLE `County` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-05 23:28:59
