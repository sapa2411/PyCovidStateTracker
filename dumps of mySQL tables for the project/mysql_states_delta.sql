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
-- Table structure for table `states_delta`
--

DROP TABLE IF EXISTS `states_delta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `states_delta` (
  `state_name` char(100) NOT NULL,
  `cases_delta` int(255) DEFAULT NULL,
  `deaths_delta` int(255) DEFAULT NULL,
  PRIMARY KEY (`state_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `states_delta`
--

LOCK TABLES `states_delta` WRITE;
/*!40000 ALTER TABLE `states_delta` DISABLE KEYS */;
INSERT INTO `states_delta` VALUES ('Alabama',8437,315),('Alaska',371,9),('Arizona',9305,395),('Arkansas',3496,82),('California',58625,2376),('Colorado',17364,903),('Connecticut',30621,2633),('Delaware',5371,187),('District Of Columbia',5322,264),('Florida',37439,1471),('Georgia',29892,1295),('Guam',149,5),('Hawaii',625,17),('Idaho',2127,65),('Illinois',65962,2838),('Indiana',21033,1326),('Iowa',10111,207),('Kansas',5632,161),('Kentucky',5822,275),('Louisiana',29996,2115),('Maine',1226,61),('Maryland',27117,1390),('Massachusetts',70271,4212),('Michigan',44397,4179),('Minnesota',7851,455),('Mississippi',8207,342),('Missouri',8977,400),('Montana',457,16),('Nebraska',6438,82),('Nevada',5594,276),('New Hampshire',2636,92),('New Jersey',131705,8292),('New Mexico',4138,162),('New York',330139,25204),('North Carolina',12511,470),('North Dakota',1266,25),('Northern Mariana Islands',14,2),('Ohio',20971,1136),('Oklahoma',4127,247),('Oregon',2839,113),('Pennsylvania',53907,3196),('Puerto Rico',1924,99),('Rhode Island',9933,355),('South Carolina',6841,296),('South Dakota',2721,24),('Tennessee',13690,226),('Texas',34238,960),('United States Virgin Islands',66,4),('US Military',7526,27),('Utah',5449,56),('Vermont',907,52),('Veteran Affairs',9771,771),('Virginia',20256,713),('Washington',16360,870),('West Virginia',1242,50),('Wisconsin',8566,353),('Wyoming',604,7);
/*!40000 ALTER TABLE `states_delta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-05 23:27:16
