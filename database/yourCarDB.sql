-- MySQL dump 10.13  Distrib 8.0.26, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: yourCar
-- ------------------------------------------------------
-- Server version	8.0.26

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
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `car` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_economy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `for_what` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `boot_capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rareness` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine_life` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `failure_rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tuning` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finish_year` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car`
--

LOCK TABLES `car` WRITE;
/*!40000 ALTER TABLE `car` DISABLE KEYS */;
/*!40000 ALTER TABLE `car` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `car_details`
--

DROP TABLE IF EXISTS `car_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `car_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `speed` int NOT NULL,
  `weight` double NOT NULL,
  `fuel_consumption` double NOT NULL,
  `drive` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `power` double NOT NULL,
  `eco` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_consumption_mixed` double NOT NULL,
  `fuel_consumption_extra` double NOT NULL,
  `sub_model_id` int NOT NULL,
  `year_start` int NOT NULL,
  `year_finish` int DEFAULT NULL,
  `engine_id` int NOT NULL,
  `transmission_id` int NOT NULL,
  `torque` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_218DF056C3DA59BE` (`sub_model_id`),
  KEY `IDX_218DF056E78C9C0A` (`engine_id`),
  KEY `IDX_218DF05678D28519` (`transmission_id`),
  CONSTRAINT `FK_218DF05678D28519` FOREIGN KEY (`transmission_id`) REFERENCES `transmission` (`id`),
  CONSTRAINT `FK_218DF056C3DA59BE` FOREIGN KEY (`sub_model_id`) REFERENCES `sub_model` (`id`),
  CONSTRAINT `FK_218DF056E78C9C0A` FOREIGN KEY (`engine_id`) REFERENCES `engine` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car_details`
--

LOCK TABLES `car_details` WRITE;
/*!40000 ALTER TABLE `car_details` DISABLE KEYS */;
INSERT INTO `car_details` VALUES (15,160,1401,9,'Front drive',75,'Euro I',8,7.5,8,1975,1980,25,5,87),(16,190,1534,9,'Front drive',101,'Euro II',8.8,7.9,8,1977,1984,32,5,72);
/*!40000 ALTER TABLE `car_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fault_id` int DEFAULT NULL,
  `user_id` int NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `engine_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9474526C24171CD3` (`fault_id`),
  KEY `IDX_9474526CA76ED395` (`user_id`),
  KEY `IDX_9474526CE78C9C0A` (`engine_id`),
  CONSTRAINT `FK_9474526C24171CD3` FOREIGN KEY (`fault_id`) REFERENCES `fault` (`id`),
  CONSTRAINT `FK_9474526CA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_9474526CE78C9C0A` FOREIGN KEY (`engine_id`) REFERENCES `engine` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` VALUES (70,NULL,4,'I didn` have this problem','2021-10-06 13:46:24',25),(71,NULL,4,'asdf','2021-10-06 13:53:20',25),(72,20,4,'asd','2021-10-07 10:00:53',NULL),(73,18,4,'asdf','2021-10-11 09:48:13',NULL);
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20210504180154','2021-05-04 20:02:20',63),('DoctrineMigrations\\Version20210504181135','2021-05-04 20:11:40',70),('DoctrineMigrations\\Version20210505182311','2021-05-05 20:23:39',56),('DoctrineMigrations\\Version20210505183902','2021-05-05 20:39:06',53),('DoctrineMigrations\\Version20210506192825','2021-05-06 21:28:29',61),('DoctrineMigrations\\Version20210506193226','2021-05-06 21:32:31',293),('DoctrineMigrations\\Version20210506203000','2021-05-06 22:30:19',47),('DoctrineMigrations\\Version20210506204025','2021-05-06 22:40:39',57),('DoctrineMigrations\\Version20210507140955','2021-05-07 16:09:59',326),('DoctrineMigrations\\Version20210507174059','2021-05-07 19:41:07',170),('DoctrineMigrations\\Version20210512174717','2021-05-12 19:47:40',164),('DoctrineMigrations\\Version20210606162158','2021-06-06 18:22:21',190),('DoctrineMigrations\\Version20211007082124','2021-10-07 10:21:57',392);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `engine`
--

DROP TABLE IF EXISTS `engine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `engine` (
  `id` int NOT NULL AUTO_INCREMENT,
  `capacity` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abbreviation` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` double DEFAULT NULL,
  `power_increase` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oil` double NOT NULL,
  `cylinders` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `engine`
--

LOCK TABLES `engine` WRITE;
/*!40000 ALTER TABLE `engine` DISABLE KEYS */;
INSERT INTO `engine` VALUES (25,'1.4','Petrol','TB',77,'Turbocharging',4.5,4),(27,'1.7','Petrol','TB',NULL,'',4.8,4),(28,'1.6','Petrol','JTDM',NULL,'',4.3,4),(29,'2','Diesel','JTDM',NULL,'',4.8,4),(30,'2','Diesel','GME',NULL,'',4.9,4),(31,'2.1','Diesel','JTDM',77,'Turbocharging',5,4),(32,'2.1','Diesel','JTDM',NULL,'',5,4),(33,'2.9','Petrol','F154',NULL,'Turbocharging',5.4,6),(34,'5.9','Petrol','AM28',NULL,'',6.2,8),(35,'5.9','Petrol','AM11',NULL,'',6.3,8),(36,'4.7','Petrol','AJ37',NULL,'',5.9,8),(40,'1.4','Petrol','TB MultiAir',76,'Turbocharging',4.5,4),(41,'2','Diesel','M47',112,'163',4.7,4);
/*!40000 ALTER TABLE `engine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `engine_model`
--

DROP TABLE IF EXISTS `engine_model`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `engine_model` (
  `engine_id` int NOT NULL,
  `model_id` int NOT NULL,
  PRIMARY KEY (`engine_id`,`model_id`),
  KEY `IDX_FAFDA692E78C9C0A` (`engine_id`),
  KEY `IDX_FAFDA6927975B7E7` (`model_id`),
  CONSTRAINT `FK_FAFDA6927975B7E7` FOREIGN KEY (`model_id`) REFERENCES `model` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_FAFDA692E78C9C0A` FOREIGN KEY (`engine_id`) REFERENCES `engine` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `engine_model`
--

LOCK TABLES `engine_model` WRITE;
/*!40000 ALTER TABLE `engine_model` DISABLE KEYS */;
INSERT INTO `engine_model` VALUES (25,9),(27,9),(28,9),(29,9),(33,9),(33,10),(33,12),(34,10),(34,12),(35,10),(36,12),(40,9),(41,14);
/*!40000 ALTER TABLE `engine_model` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `engine_sub_model`
--

DROP TABLE IF EXISTS `engine_sub_model`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `engine_sub_model` (
  `engine_id` int NOT NULL,
  `sub_model_id` int NOT NULL,
  PRIMARY KEY (`engine_id`,`sub_model_id`),
  KEY `IDX_15BFE96AE78C9C0A` (`engine_id`),
  KEY `IDX_15BFE96AC3DA59BE` (`sub_model_id`),
  CONSTRAINT `FK_15BFE96AC3DA59BE` FOREIGN KEY (`sub_model_id`) REFERENCES `sub_model` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_15BFE96AE78C9C0A` FOREIGN KEY (`engine_id`) REFERENCES `engine` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `engine_sub_model`
--

LOCK TABLES `engine_sub_model` WRITE;
/*!40000 ALTER TABLE `engine_sub_model` DISABLE KEYS */;
INSERT INTO `engine_sub_model` VALUES (25,8),(28,8);
/*!40000 ALTER TABLE `engine_sub_model` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fault`
--

DROP TABLE IF EXISTS `fault`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fault` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(9000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `published` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9FD0DEA3A76ED395` (`user_id`),
  CONSTRAINT `FK_9FD0DEA3A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fault`
--

LOCK TABLES `fault` WRITE;
/*!40000 ALTER TABLE `fault` DISABLE KEYS */;
INSERT INTO `fault` VALUES (6,'Shock absorber','Shock absorber leak\r\n 20,000 km each!!!',4,0),(8,'Damage to the crankshaft after 40,000 km','The crankshaft is constantly operating under high mechanical stress. The pressure force from one cylinder can be up to 10 tons. To this must be added the inertial forces of the crankshaft pulley and counterweights. Also, the part is affected by high temperatures and various chemicals.',5,0),(18,'Pump defect','adfasdfasdfasdf',4,1),(20,'Stocks','The sea change won\'t end there. After chips, Wall Street sees batteries as the next big supply crisis likely to hit carmakers',4,0);
/*!40000 ALTER TABLE `fault` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fault_engine`
--

DROP TABLE IF EXISTS `fault_engine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fault_engine` (
  `fault_id` int NOT NULL,
  `engine_id` int NOT NULL,
  PRIMARY KEY (`fault_id`,`engine_id`),
  KEY `IDX_233AC70924171CD3` (`fault_id`),
  KEY `IDX_233AC709E78C9C0A` (`engine_id`),
  CONSTRAINT `FK_233AC70924171CD3` FOREIGN KEY (`fault_id`) REFERENCES `fault` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_233AC709E78C9C0A` FOREIGN KEY (`engine_id`) REFERENCES `engine` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fault_engine`
--

LOCK TABLES `fault_engine` WRITE;
/*!40000 ALTER TABLE `fault_engine` DISABLE KEYS */;
INSERT INTO `fault_engine` VALUES (8,40),(18,40),(20,25);
/*!40000 ALTER TABLE `fault_engine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fault_sub_model`
--

DROP TABLE IF EXISTS `fault_sub_model`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fault_sub_model` (
  `fault_id` int NOT NULL,
  `sub_model_id` int NOT NULL,
  PRIMARY KEY (`fault_id`,`sub_model_id`),
  KEY `IDX_F77AECCD24171CD3` (`fault_id`),
  KEY `IDX_F77AECCDC3DA59BE` (`sub_model_id`),
  CONSTRAINT `FK_F77AECCD24171CD3` FOREIGN KEY (`fault_id`) REFERENCES `fault` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_F77AECCDC3DA59BE` FOREIGN KEY (`sub_model_id`) REFERENCES `sub_model` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fault_sub_model`
--

LOCK TABLES `fault_sub_model` WRITE;
/*!40000 ALTER TABLE `fault_sub_model` DISABLE KEYS */;
INSERT INTO `fault_sub_model` VALUES (18,8);
/*!40000 ALTER TABLE `fault_sub_model` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favourite`
--

DROP TABLE IF EXISTS `favourite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `favourite` (
  `id` int NOT NULL AUTO_INCREMENT,
  `car_details_id` int DEFAULT NULL,
  `comment_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_62A2CA19F8697D13` (`comment_id`),
  KEY `IDX_62A2CA19A76ED395` (`user_id`),
  KEY `IDX_62A2CA1989C58933` (`car_details_id`),
  CONSTRAINT `FK_62A2CA1989C58933` FOREIGN KEY (`car_details_id`) REFERENCES `car_details` (`id`),
  CONSTRAINT `FK_62A2CA19A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_62A2CA19F8697D13` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favourite`
--

LOCK TABLES `favourite` WRITE;
/*!40000 ALTER TABLE `favourite` DISABLE KEYS */;
INSERT INTO `favourite` VALUES (49,15,NULL,4);
/*!40000 ALTER TABLE `favourite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `image` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `engine_id` int DEFAULT NULL,
  `rim_id` int DEFAULT NULL,
  `sub_model_id` int DEFAULT NULL,
  `fault_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C53D045FE78C9C0A` (`engine_id`),
  KEY `IDX_C53D045F33462BA9` (`rim_id`),
  KEY `IDX_C53D045FC3DA59BE` (`sub_model_id`),
  KEY `IDX_C53D045F24171CD3` (`fault_id`),
  CONSTRAINT `FK_C53D045F24171CD3` FOREIGN KEY (`fault_id`) REFERENCES `fault` (`id`),
  CONSTRAINT `FK_C53D045F33462BA9` FOREIGN KEY (`rim_id`) REFERENCES `rim` (`id`),
  CONSTRAINT `FK_C53D045FC3DA59BE` FOREIGN KEY (`sub_model_id`) REFERENCES `sub_model` (`id`),
  CONSTRAINT `FK_C53D045FE78C9C0A` FOREIGN KEY (`engine_id`) REFERENCES `engine` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` VALUES (1,'',NULL,NULL,NULL,NULL),(2,'60a13ccf4e62b385365173.jpg',NULL,NULL,NULL,NULL),(3,'60a13edf2730a625386090.jpeg',NULL,NULL,NULL,NULL),(4,'60a13eeb5295e190683790.jpeg',NULL,NULL,NULL,NULL),(5,'60a13f0c10aa9956551398.jpeg',NULL,NULL,NULL,NULL),(6,'60a13f0c10e58519464998.jpg',NULL,NULL,NULL,NULL),(7,'60a1437915d19613050622.jpg',NULL,NULL,NULL,NULL),(8,'60a1437916129572367966.jpeg',NULL,NULL,NULL,NULL),(9,'60a1442f66791695763331.jpeg',NULL,NULL,NULL,NULL),(10,'60a1442f66b2e430155368.jpeg',NULL,NULL,NULL,NULL),(11,'60a14468b7985564099288.jpeg',NULL,NULL,NULL,NULL),(12,'60a14468b7d91314052499.jpeg',NULL,NULL,NULL,NULL),(13,'60a1449d19548407679838.jpeg',NULL,NULL,NULL,NULL),(14,'60a1449d19969182715061.jpeg',NULL,NULL,NULL,NULL),(15,'60a148ff4fc56651026242.jpeg',NULL,NULL,NULL,NULL),(16,'60a148ff4ffcb705420047.jpeg',NULL,NULL,NULL,NULL),(17,'60a15bc57fdd9014886454.jpeg',NULL,NULL,NULL,NULL),(18,'60a15bc580202796201808.jpeg',NULL,NULL,NULL,NULL),(19,'60a164e9c6f07538217619.jpeg',NULL,NULL,NULL,NULL),(20,'60a165e78ef90506314612.jpeg',NULL,NULL,NULL,NULL),(21,'60a165e78f321745752601.jpeg',NULL,NULL,NULL,NULL),(22,NULL,NULL,NULL,NULL,NULL),(23,NULL,NULL,NULL,NULL,NULL),(24,NULL,NULL,NULL,NULL,NULL),(25,NULL,NULL,NULL,NULL,NULL),(26,NULL,NULL,NULL,NULL,NULL),(27,NULL,NULL,NULL,NULL,NULL),(28,'60a168aeb21aa057487181.jpeg',NULL,NULL,NULL,NULL),(29,NULL,NULL,NULL,NULL,NULL),(37,'60a40d58dc403175620712.jpeg',NULL,NULL,NULL,NULL),(38,'60a40d58ddac0783318445.jpeg',NULL,NULL,NULL,NULL),(72,'60b658d4e34e9957772420.jpeg',40,NULL,NULL,NULL),(73,'60b658d4e54d5411918886.jpeg',40,NULL,NULL,NULL),(74,'60b658d4e5e48724226934.jpeg',40,NULL,NULL,NULL),(75,'60b658d4e6ea3845771351.jpeg',40,NULL,NULL,NULL),(76,'60b75642d7ddb775417830.jpeg',NULL,6,NULL,NULL),(77,'60b75642d9ac1240690970.jpg',NULL,6,NULL,NULL),(78,'60b7568e5a7c7486432298.jpeg',NULL,3,NULL,NULL),(79,'60b7568e5c6e1119786575.jpg',NULL,3,NULL,NULL),(82,'60b7caf6524dc062316504.jpg',NULL,NULL,NULL,6),(83,'60b7caf65416f774625248.jpg',NULL,NULL,NULL,6),(86,'a53461efc16cfadeeb037f46b5a00833.png',NULL,NULL,NULL,18),(96,'615d7648459c2097198301.jpg',NULL,NULL,8,NULL),(97,'615d76484660a150456179.jpg',NULL,NULL,8,NULL),(98,'615d76484723b470029049.jpg',NULL,NULL,8,NULL),(99,'615d7e1e39dbb610238401.jpg',41,NULL,NULL,NULL),(100,'615d7e1e3a47f796012010.webp',41,NULL,NULL,NULL),(101,'615d7e1e3c1a4592017992.webp',41,NULL,NULL,NULL),(102,'f1e407a2073aab4740fc96f683ad427b.jpg',NULL,NULL,NULL,20);
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `make`
--

DROP TABLE IF EXISTS `make`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `make` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `make`
--

LOCK TABLES `make` WRITE;
/*!40000 ALTER TABLE `make` DISABLE KEYS */;
INSERT INTO `make` VALUES (27,'Alfa Romeo','3261539f354eca609780e68bbdefeaecbe95ae78.jpg'),(28,'Aston Martin','2e41924919d1b6fc2b03a056ad461833ce051b23.png'),(29,'Alpine','9133c6afd8bdce026a7ebd2e4660f7c68c715116.png'),(30,'Audi','6cd912346a4f1ec3d5160a88270ebed9ad1f63d5.jpg'),(31,'Bentley','b0f5a6dd418f76caee92c126bf05b0ce55cdd561.jpg'),(32,'BMW','e49c893c4ee22c65a7e78d702827364d43f8cb04.jpg'),(33,'Chevrolet','e3cd9b4ec7cc2a17e41992f3d66c1c21edd11556.jpg'),(34,'Ford','f2f6f154c8d38340cf633c05800d16670e717280.png'),(35,'Kia','226abfc561dd5d95dd0d737ccd2d6f7ed047caa3.png'),(36,'Mitsubishi','e205180906e3d69661c1227184f53fcfa27a2218.png'),(37,'Mercedes-Benz','382e07476ec9cc7e62c5a6c39cf7d3612f0df153.png'),(38,'Volkswagen','45447a1d05c011400ec38223ca099b659d09aa5c.jpg'),(39,'Volvo','120314eec507360655dd3ff425f611fe8bfef0e6.jpg');
/*!40000 ALTER TABLE `make` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model`
--

DROP TABLE IF EXISTS `model`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `make_id` int NOT NULL,
  `year_start` int NOT NULL,
  `year_finish` int DEFAULT NULL,
  `body_type` longtext COLLATE utf8mb4_unicode_ci COMMENT '(DC2Type:array)',
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D79572D9CFBF73EB` (`make_id`),
  CONSTRAINT `FK_D79572D9CFBF73EB` FOREIGN KEY (`make_id`) REFERENCES `make` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model`
--

LOCK TABLES `model` WRITE;
/*!40000 ALTER TABLE `model` DISABLE KEYS */;
INSERT INTO `model` VALUES (9,'Giulietta',27,1972,NULL,'a:3:{i:0;s:9:\"Hatchback\";i:1;s:5:\"Coupe\";i:2;s:11:\"Convertible\";}','b822929565025675637a6e79f55b9eecc366b8db.jpg'),(10,'Stelvio',27,2016,NULL,'a:0:{}','1a02ebdf569ff97afc95a2e74739834bb1a0b575.jpg'),(11,'Rapide',28,2017,NULL,'a:0:{}','0802ec2b38ec0fd0d1c1fbcefce75bd334d992ca.jpg'),(12,'Vantage',28,2000,2008,'a:0:{}','e098c39a5fcfe8476acef028b871e1da1d13f7f6.jpg'),(14,'Seria 5',32,2003,2006,'a:2:{i:0;s:5:\"Sedan\";i:1;s:5:\"Wagon\";}','6d9ffcb8a50b7e316770b8863d23e1292be5970d.jpg');
/*!40000 ALTER TABLE `model` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `part`
--

DROP TABLE IF EXISTS `part`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `part` (
  `id` int NOT NULL AUTO_INCREMENT,
  `car_id` int DEFAULT NULL,
  `engine_id` int DEFAULT NULL,
  `catalog_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_490F70C6C3C6F69F` (`car_id`),
  KEY `IDX_490F70C6E78C9C0A` (`engine_id`),
  CONSTRAINT `FK_490F70C6C3C6F69F` FOREIGN KEY (`car_id`) REFERENCES `sub_model` (`id`),
  CONSTRAINT `FK_490F70C6E78C9C0A` FOREIGN KEY (`engine_id`) REFERENCES `engine` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `part`
--

LOCK TABLES `part` WRITE;
/*!40000 ALTER TABLE `part` DISABLE KEYS */;
INSERT INTO `part` VALUES (1,NULL,25,'80 33989 08919 5','Transmission Control'),(2,8,NULL,'60572085','Front right wing fender');
/*!40000 ALTER TABLE `part` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rating` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `rating` int DEFAULT NULL,
  `car_details_id` int DEFAULT NULL,
  `engine_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D8892622A76ED395` (`user_id`),
  KEY `IDX_D889262289C58933` (`car_details_id`),
  KEY `IDX_D8892622E78C9C0A` (`engine_id`),
  CONSTRAINT `FK_D889262289C58933` FOREIGN KEY (`car_details_id`) REFERENCES `car_details` (`id`),
  CONSTRAINT `FK_D8892622A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_D8892622E78C9C0A` FOREIGN KEY (`engine_id`) REFERENCES `engine` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rating`
--

LOCK TABLES `rating` WRITE;
/*!40000 ALTER TABLE `rating` DISABLE KEYS */;
INSERT INTO `rating` VALUES (4,5,4,NULL,40),(5,4,1,NULL,40),(36,4,5,15,NULL),(42,4,5,NULL,25);
/*!40000 ALTER TABLE `rating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reset_password_request`
--

DROP TABLE IF EXISTS `reset_password_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reset_password_request` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `selector` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashed_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `expires_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`),
  KEY `IDX_7CE748AA76ED395` (`user_id`),
  CONSTRAINT `FK_7CE748AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reset_password_request`
--

LOCK TABLES `reset_password_request` WRITE;
/*!40000 ALTER TABLE `reset_password_request` DISABLE KEYS */;
/*!40000 ALTER TABLE `reset_password_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rim`
--

DROP TABLE IF EXISTS `rim`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rim` (
  `id` int NOT NULL AUTO_INCREMENT,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pcd` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stud` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rim`
--

LOCK TABLES `rim` WRITE;
/*!40000 ALTER TABLE `rim` DISABLE KEYS */;
INSERT INTO `rim` VALUES (1,'14','8.2','f32','100','4'),(2,'15','8','4gw','110','4'),(3,'18','10','4gw','120','5'),(4,'20','14','we512','110','5'),(5,'18','13','4gw','112','4'),(6,'17','8.8','f32','112','5');
/*!40000 ALTER TABLE `rim` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rim_sub_model`
--

DROP TABLE IF EXISTS `rim_sub_model`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rim_sub_model` (
  `rim_id` int NOT NULL,
  `sub_model_id` int NOT NULL,
  PRIMARY KEY (`rim_id`,`sub_model_id`),
  KEY `IDX_6EA0DDE033462BA9` (`rim_id`),
  KEY `IDX_6EA0DDE0C3DA59BE` (`sub_model_id`),
  CONSTRAINT `FK_6EA0DDE033462BA9` FOREIGN KEY (`rim_id`) REFERENCES `rim` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_6EA0DDE0C3DA59BE` FOREIGN KEY (`sub_model_id`) REFERENCES `sub_model` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rim_sub_model`
--

LOCK TABLES `rim_sub_model` WRITE;
/*!40000 ALTER TABLE `rim_sub_model` DISABLE KEYS */;
INSERT INTO `rim_sub_model` VALUES (1,8),(2,8);
/*!40000 ALTER TABLE `rim_sub_model` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scale`
--

DROP TABLE IF EXISTS `scale`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `scale` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `car_details_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_EC462584A76ED395` (`user_id`),
  KEY `IDX_EC46258489C58933` (`car_details_id`),
  CONSTRAINT `FK_EC46258489C58933` FOREIGN KEY (`car_details_id`) REFERENCES `car_details` (`id`),
  CONSTRAINT `FK_EC462584A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scale`
--

LOCK TABLES `scale` WRITE;
/*!40000 ALTER TABLE `scale` DISABLE KEYS */;
INSERT INTO `scale` VALUES (44,4,16),(46,4,15);
/*!40000 ALTER TABLE `scale` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_model`
--

DROP TABLE IF EXISTS `sub_model`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sub_model` (
  `id` int NOT NULL AUTO_INCREMENT,
  `body_platform` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` int NOT NULL,
  `body_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_start` int NOT NULL,
  `year_finish` int DEFAULT NULL,
  `tank` int NOT NULL,
  `length` double NOT NULL,
  `width` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3BD116607975B7E7` (`model_id`),
  CONSTRAINT `FK_3BD116607975B7E7` FOREIGN KEY (`model_id`) REFERENCES `model` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_model`
--

LOCK TABLES `sub_model` WRITE;
/*!40000 ALTER TABLE `sub_model` DISABLE KEYS */;
INSERT INTO `sub_model` VALUES (8,'116',9,'Sedan',1975,1986,50,2000,1456);
/*!40000 ALTER TABLE `sub_model` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tire`
--

DROP TABLE IF EXISTS `tire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tire` (
  `id` int NOT NULL AUTO_INCREMENT,
  `width` int NOT NULL,
  `aspect_ratio` int NOT NULL,
  `diameter` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tire`
--

LOCK TABLES `tire` WRITE;
/*!40000 ALTER TABLE `tire` DISABLE KEYS */;
INSERT INTO `tire` VALUES (1,190,50,'15');
/*!40000 ALTER TABLE `tire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transmission`
--

DROP TABLE IF EXISTS `transmission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transmission` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transmission`
--

LOCK TABLES `transmission` WRITE;
/*!40000 ALTER TABLE `transmission` DISABLE KEYS */;
INSERT INTO `transmission` VALUES (5,'Manual Transmission (MT)'),(6,'Automatic Transmission (AT)'),(7,'Automated Manual Transmission (AM)'),(8,'Continuously Variable Transmission (CVT)');
/*!40000 ALTER TABLE `transmission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transmission_model`
--

DROP TABLE IF EXISTS `transmission_model`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transmission_model` (
  `transmission_id` int NOT NULL,
  `model_id` int NOT NULL,
  PRIMARY KEY (`transmission_id`,`model_id`),
  KEY `IDX_F34E6ECF78D28519` (`transmission_id`),
  KEY `IDX_F34E6ECF7975B7E7` (`model_id`),
  CONSTRAINT `FK_F34E6ECF78D28519` FOREIGN KEY (`transmission_id`) REFERENCES `transmission` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_F34E6ECF7975B7E7` FOREIGN KEY (`model_id`) REFERENCES `model` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transmission_model`
--

LOCK TABLES `transmission_model` WRITE;
/*!40000 ALTER TABLE `transmission_model` DISABLE KEYS */;
INSERT INTO `transmission_model` VALUES (5,9),(5,14),(6,14),(7,9),(7,14);
/*!40000 ALTER TABLE `transmission_model` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefer_language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `car_type` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tuning` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fuel_consumption` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (4,'admin@com','[\"ROLE_ADMIN\"]','$argon2id$v=19$m=65536,t=4,p=1$bvQBOuKw3qBkx4ea7B1huQ$ZVrxolTc0m7YG+VOwrWZSuF0O8nODO8zUegjn0nTe8U','Admin','Isrtator','en',1,NULL,NULL,NULL),(5,'adelinalopachuk@gmail.com','[\"ROLE_USER\"]','$argon2id$v=19$m=65536,t=4,p=1$+2xVtBZdZrVOxpB2Ob8EPQ$JLmEqKLhocKPY/gb8/gmzOxcOj23p5GJEag2iCar+gc','Adelina','Svizinska','en',1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-17 15:44:48
