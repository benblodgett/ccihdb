-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: localhost    Database: ccih_hsi
-- ------------------------------------------------------
-- Server version	8.0.33-0ubuntu0.20.04.2

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
-- Table structure for table `c1`
--

DROP TABLE IF EXISTS `c1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c1` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q1_3` int DEFAULT NULL,
  `q2_1a` int DEFAULT NULL,
  `q2_1b` int DEFAULT NULL,
  `q2_1c` float(7,2) DEFAULT NULL,
  `q2_2a` int DEFAULT NULL,
  `q2_2b` int DEFAULT NULL,
  `q2_2c` float(7,2) DEFAULT NULL,
  `q2_3a` int DEFAULT NULL,
  `q2_3b` int DEFAULT NULL,
  `q2_3c` float(7,2) DEFAULT NULL,
  `q2_4a` int DEFAULT NULL,
  `q2_4b` int DEFAULT NULL,
  `q2_4c` float(7,2) DEFAULT NULL,
  `q3_1` int DEFAULT NULL,
  `q4_1` int DEFAULT NULL,
  `q5_1` int DEFAULT NULL,
  `q6_1` int DEFAULT NULL,
  `q7_1` int DEFAULT NULL,
  `q8_1` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c1`
--

LOCK TABLES `c1` WRITE;
/*!40000 ALTER TABLE `c1` DISABLE KEYS */;
INSERT INTO `c1` VALUES (1,'July 2019 - June 2020',794,125544,858,13070,13162,99.30,7640,13162,58.05,8932,13162,67.86,11587,13162,88.03,4,0,1,NULL,NULL,NULL,'','','Completed','omprakash','21-09-2021 04:31:48 am','omprakash','21-09-2021 04:31:48 am'),(2,'July 2020 - June 2021',687,6698,286,13335,13337,99.99,8874,11060,80.24,12335,13337,92.49,12760,13337,95.67,4,1,1,NULL,NULL,NULL,'','','Completed','Sunil Anand','28-09-2021 02:34:07 am','Sunil Anand','06-10-2021 06:25:22 am'),(4,'July 2021 - June 2022',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,22860,251,10,'DHARA App; MMDP (morbidity management & disability prevention) register','','Completed','Sunil Anand','08-09-2022 01:17:02 am','Sunil Anand','08-09-2022 01:17:02 am');
/*!40000 ALTER TABLE `c1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c10`
--

DROP TABLE IF EXISTS `c10`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c10` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q1_3` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c10`
--

LOCK TABLES `c10` WRITE;
/*!40000 ALTER TABLE `c10` DISABLE KEYS */;
INSERT INTO `c10` VALUES (1,'July 2019 - June 2020',59,3,2,'','','Completed','omprakash','21-09-2021 04:57:28 am','omprakash','21-09-2021 04:57:28 am'),(2,'Target 2030',90,20,60,'','','Completed','omprakash','21-09-2021 04:57:47 am','omprakash','21-09-2021 04:57:47 am'),(3,'July 2020 - June 2021',59,3,0,'','As of October 1, 2021 the technology partner we work with, Indextra, has ceased operations, leaving us without a current platform on which to continue our current model to individual users.  However, in the past month a USAID-funded MOMENTUM grant facilitated by IMA WorldHealth has contacted us about providing clinical decision support information to its maternal-child health program starting in 2 countries but moving to a total of 19 countries over five years.','Completed','Bruce Dahlman','11-10-2021 12:38:39 am','Bruce Dahlman','11-10-2021 12:38:39 am');
/*!40000 ALTER TABLE `c10` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c11`
--

DROP TABLE IF EXISTS `c11`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c11` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q3_1` int DEFAULT NULL,
  `q4_1` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c11`
--

LOCK TABLES `c11` WRITE;
/*!40000 ALTER TABLE `c11` DISABLE KEYS */;
INSERT INTO `c11` VALUES (1,'July 2019 - June 2020',70,500,0,0,'','','Completed','omprakash','21-09-2021 04:58:56 am','omprakash','21-09-2021 04:58:56 am'),(2,'Target 2030',300,1000,1000,100,'','','Completed','omprakash','21-09-2021 04:59:30 am','omprakash','21-09-2021 04:59:30 am'),(3,'July 2020 - June 2021',77,381,60,4,'','','Completed','Joel White','04-10-2021 01:25:36 pm','Omprakash','06-10-2021 01:02:10 am'),(4,'July 2021 - June 2022',3,416,0,0,'','','Completed','Joel White','11-08-2022 02:37:29 pm','Joel White','11-08-2022 02:37:29 pm');
/*!40000 ALTER TABLE `c11` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c12`
--

DROP TABLE IF EXISTS `c12`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c12` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q3_1` int DEFAULT NULL,
  `q4_1` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c12`
--

LOCK TABLES `c12` WRITE;
/*!40000 ALTER TABLE `c12` DISABLE KEYS */;
INSERT INTO `c12` VALUES (1,'July 2019 - June 2020',13096,6,17,4,'','','Completed','omprakash','21-09-2021 05:00:47 am','omprakash','21-09-2021 05:00:47 am'),(2,'July 2020 - June 2021',9375,5,10,0,'The tools are used for MoV/Data Collection 1. Wards Enrollees  Register, 2. Receipts of payment of premiums, 3. Bank Statement of the Mutual Health Association, 4. Invoices of drugs supplied and prescription checklist, 5. gatekeeper s report and, 10% remittances of cost consumables.  6. Records in the Encounter Booklet. &. oral testimony and complaints of the beneficiaries/wards coordinators','The Community Mutual Health Association is seen to have ownership of the project. HHF(CHAP) is only a technical facilitator and provides blueprints for implementations and monitoring. The program is designed to be owned and managed by the host community. Though an MoU is reached, sustainability largely depends on the action and/or inaction of the host community. ','Completed','Hezekiah Abah Jonah','26-04-2022 11:02:26 am','Hezekiah Abah Jonah','26-04-2022 11:02:26 am'),(4,'July 2021 - June 2022',8766,4,12,3,'1. Wards Enrollees  Register, 2. Receipt of payments, 3 Banks statement 4.  Minutes BoTs/Coordinators meetings 5. Encounters Booklet and consultations records etc ','The project has a promise of subsidy from the National Health Insurance Scheme, NHIS. The was at the onset a great motivation for the host communities and for us at HHF. This subsidy never comes as promised and when they do, it is a minor fraction of what is expected. This is really discouraging. During the pandemic, HHF approached the National Centre for Disease Control to help provide preventive equipment such as sanitizers, and nose masks, and to sponsor community sensitization. This was not considered.   so our assuption that there will be government policies that will address the primary health insurance need is still very far. Though every over 60 billion naira is allocated to NHIS for informal sector health insurance, accessing the same for the purpose is still a difficult task. ','Completed','Hezekiah Abah Jonah','29-04-2022 07:33:46 am','Hezekiah Abah Jonah','29-04-2022 07:33:46 am');
/*!40000 ALTER TABLE `c12` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c13`
--

DROP TABLE IF EXISTS `c13`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c13` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c13`
--

LOCK TABLES `c13` WRITE;
/*!40000 ALTER TABLE `c13` DISABLE KEYS */;
INSERT INTO `c13` VALUES (1,'July 2018 - June 2019',1,4,3,'','','Completed','omprakash','21-09-2021 05:01:46 am','omprakash','21-09-2021 05:01:46 am'),(2,'July 2019 - June 2020',30,54,6,'','','Completed','omprakash','21-09-2021 05:02:09 am','omprakash','21-09-2021 05:02:09 am'),(4,'July 2020 - June 2021',11,2632,7,'','','Completed','Rebecca Waugh','06-10-2021 05:02:08 pm','Rebecca Waugh','12-10-2021 11:41:11 am'),(5,'July 2021 - June 2022',11,0,6,'','','Completed','Rebecca Waugh','11-08-2022 11:48:11 am','Rebecca Waugh','15-08-2022 11:21:02 am');
/*!40000 ALTER TABLE `c13` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c14`
--

DROP TABLE IF EXISTS `c14`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c14` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q2_2` int DEFAULT NULL,
  `q3_1` int DEFAULT NULL,
  `q3_2` int DEFAULT NULL,
  `q4_1` int DEFAULT NULL,
  `q5_1` int DEFAULT NULL,
  `q5_2` int DEFAULT NULL,
  `q6_1` int DEFAULT NULL,
  `q6_2` int DEFAULT NULL,
  `q7_1` int DEFAULT NULL,
  `q7_2` int DEFAULT NULL,
  `q8_1` varchar(50) DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c14`
--

LOCK TABLES `c14` WRITE;
/*!40000 ALTER TABLE `c14` DISABLE KEYS */;
INSERT INTO `c14` VALUES (1,'July 2019 - June 2020',62,199,275,347,85,188,90,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','Completed','omprakash','21-09-2021 05:15:26 am','omprakash','21-09-2021 05:15:26 am'),(2,'July 2020 - June 2021',109,291,487,427,177,404,202,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','Completed','Sarah Borger','06-10-2021 09:13:26 am','Sarah Borger','12-10-2021 04:25:13 pm'),(3,'July 2021 - June 2022',NULL,NULL,NULL,NULL,NULL,NULL,NULL,228,85,105,195,2974,2154,'7024809','***PLEASE NOTE: \r\n7.1 Number of trainings completed was actually 2,974\r\n8.1 Annual numbers of inpatients/outpatients treated was actually 7,024,809\r\n\r\nAlso, for 6.1 Financial health: Total revenue/Total costs \r\nThe total revenue and total costs for all LifeNet HFs was $ 20,285,743/$ 19,238,990 or 105.4%\r\n','','Completed','Sarah Borger','31-08-2022 04:58:34 pm','Sarah Borger','09-09-2022 01:25:52 pm');
/*!40000 ALTER TABLE `c14` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c15`
--

DROP TABLE IF EXISTS `c15`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c15` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` float(7,2) DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q2_2a` int DEFAULT NULL,
  `q2_2b` int DEFAULT NULL,
  `q2_2c` float(7,2) DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c15`
--

LOCK TABLES `c15` WRITE;
/*!40000 ALTER TABLE `c15` DISABLE KEYS */;
INSERT INTO `c15` VALUES (1,'July 2019 - June 2020',115,15.00,250,NULL,NULL,45.00,'','','Completed','omprakash','21-09-2021 05:16:36 am','omprakash','21-09-2021 05:16:36 am'),(2,'Target 2030',200,5.00,575,NULL,NULL,100.00,'','','Completed','omprakash','21-09-2021 05:17:07 am','omprakash','21-09-2021 05:17:07 am'),(3,'July 2020 - June 2021',141,18.00,337,337,525,64.19,'','COVID 19 restriction helped in moving the number of delivery by SBA upwards as many of the families couldn t travel out because of COVID 19 travel restriction. Many public facilities weren t also attending to patients/clients unlike our facilities that were very open to patients during the pandemic.','Completed','Johnson Diara','07-10-2021 04:46:41 am','Johnson Diara','07-10-2021 03:47:37 pm'),(4,'July 2021 - June 2022',145,25.00,413,413,575,71.83,'1. Maternity/delivery registers.\r\n2. Health workforce strength register from HR\r\n','The dwindling economy of the country is directly impacting negatively on the retention of health workers in the rural areas as there has been a colossal brain drain as has never been in the history of the country.','Completed','Johnson Diara','15-08-2022 02:32:27 pm','Johnson Diara','15-08-2022 02:32:27 pm');
/*!40000 ALTER TABLE `c15` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c16`
--

DROP TABLE IF EXISTS `c16`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c16` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q2_2` int DEFAULT NULL,
  `q3_1` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c16`
--

LOCK TABLES `c16` WRITE;
/*!40000 ALTER TABLE `c16` DISABLE KEYS */;
INSERT INTO `c16` VALUES (1,'July 2019 - June 2020',66,530459,10707,1758,30,'Facility Tracker\r\nFacility Registrar\r\nTraining tracker\r\nHealth Event tracker','','Completed','omprakash','21-09-2021 05:19:30 am','omprakash','21-09-2021 05:19:30 am'),(2,'Target 2030',130,1000000,20000,3500,50,'','','Completed','omprakash','21-09-2021 05:22:40 am','omprakash','21-09-2021 05:22:40 am');
/*!40000 ALTER TABLE `c16` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c17`
--

DROP TABLE IF EXISTS `c17`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c17` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c17`
--

LOCK TABLES `c17` WRITE;
/*!40000 ALTER TABLE `c17` DISABLE KEYS */;
INSERT INTO `c17` VALUES (1,'July 2019 - June 2020',0,0,'','','Completed','omprakash','21-09-2021 05:27:00 am','omprakash','21-09-2021 05:27:00 am'),(2,'Target 2030',10,NULL,'','','Completed','omprakash','21-09-2021 05:27:14 am','omprakash','21-09-2021 05:27:14 am'),(3,'July 2020 - June 2021',10,75,'Requests were received from CMAI, the secretary of  administrators forum to help the mission hospitals.  \r\n10 hospitals were helped by our interns in Hospital Administration. They conducted mock audit in the identified hospitals just before the audit of the assessors for NABH accreditation. The gaps identified were very much helpful for the hospitals to get better prepared for official assessment.  ','','Completed','John Varghese','02-10-2021 01:40:02 am','Omprakash','06-10-2021 01:04:16 am'),(4,'July 2021 - June 2022',20,40,'','','Completed','Omprakash','11-10-2022 02:30:24 am','Omprakash','11-10-2022 02:30:24 am');
/*!40000 ALTER TABLE `c17` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c18`
--

DROP TABLE IF EXISTS `c18`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c18` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q1_3` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q2_2` int DEFAULT NULL,
  `q3_1` int DEFAULT NULL,
  `q4_1a` int DEFAULT NULL,
  `q4_1b` int DEFAULT NULL,
  `q4_1c` float(7,2) DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c18`
--

LOCK TABLES `c18` WRITE;
/*!40000 ALTER TABLE `c18` DISABLE KEYS */;
INSERT INTO `c18` VALUES (1,'July 2019 - June 2020',NULL,13096,106,26,80,3,NULL,NULL,NULL,'','','Completed','Omprakash','21-09-2021 07:47:38 am','Omprakash','21-09-2021 07:47:38 am'),(2,'Target 2030',122500,122500,500,200,300,6,NULL,NULL,50.00,'','','Completed','Omprakash','21-09-2021 07:48:50 am','Omprakash','21-09-2021 07:48:50 am'),(3,'July 2020 - June 2021',3,31696,326,10,326,15,294,NULL,NULL,'','','Completed','Michael Tettey','15-10-2021 06:05:52 am','Michael Tettey','18-10-2021 06:09:59 am'),(4,'July 2021 - June 2022',238,14694,343,45,186,3,922,958,96.24,'La réalisation de ce rapport se base sur la compilation des rapports d’activités mensuels provenant des trois centres de santé de l’EMT/PMDCT et des rapports des équipes du PMDCT intervenant dans les projets de promotion de santé dans les différentes localités qu’intervient l’organisation. \r\nA la base, pour produire les rapports, les responsables des formations sanitaires se servent des registres de consultations curatives, les registres de CPN et d’accouchement, les fiches de stock, les carnets de consultation, les registres de laboratoire, les ordinogrammes et autres. \r\nL’équipe de rapportage utilise les ordinateurs pour la saisie et le traitement des données. Les appareils photos ainsi que des téléphones portables sont utilisés pour la prise des images. Après leur usage, les documents imprimés sont classés et stockés.\r\n','La réalisation des activités liées à la promotion de la santé dans les centres et zones d intervention du PMDCT a été confrontée à certains risques d ordres technique, matériel, humain et financier. En effet, la gestion des outils de travail et le conditionnement des vaccins ont engendré des risques liés à la blessure du personnel; la qualité et l efficacité des antigènes. Le manque de moyens financiers constitue un risque de retard d approvisionnement des centres de santé en intrants. Les pistes rurales pouvant permettre d avoir accès aux centres restent et demeurent des facteurs de risques pour le personnel. Tous ces facteurs ont ralenti directement ou indirectement la réalisation efficace et efficience des activités. ','Completed','Lazare Ahli Kouadjo','31-08-2022 01:05:24 pm','Lazare Ahli Kouadjo','31-08-2022 01:05:24 pm');
/*!40000 ALTER TABLE `c18` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c19`
--

DROP TABLE IF EXISTS `c19`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c19` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q2_2` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c19`
--

LOCK TABLES `c19` WRITE;
/*!40000 ALTER TABLE `c19` DISABLE KEYS */;
INSERT INTO `c19` VALUES (1,'July 2019 - June 2020',0,58,50,'','','Incomplete','omprakash','21-09-2021 05:30:24 am','omprakash','21-09-2021 05:30:24 am');
/*!40000 ALTER TABLE `c19` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c2`
--

DROP TABLE IF EXISTS `c2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c2` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q2_2` int DEFAULT NULL,
  `q2_3` int DEFAULT NULL,
  `q3_1` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c2`
--

LOCK TABLES `c2` WRITE;
/*!40000 ALTER TABLE `c2` DISABLE KEYS */;
INSERT INTO `c2` VALUES (1,'July 2019 - June 2020',6,2,3,3,1,2,'','','Completed','omprakash','21-09-2021 04:36:40 am','omprakash','21-09-2021 04:36:40 am'),(2,'July 2020 - June 2021',8,3,3,2,1,3,'Mostly the documentation would be email strings with the different organization.  There are also Zoom meetings, What sAp chats and calls .  I could also ask for confirmation for shipments and training received, but these are already in the emails.  What would you like?  ','All of these interactions are collaboration and each are unique.  The collaborations are often between four categories of organizations.  Mission hospitals, those who provide wheelchairs (some are secular, some faith-based), those who provide training (often secular and academic) ,and those who provide funding (foundations, granting agencies, strategies to link to government resources.  \r\nAssistive Technology Catalyst builds links, so all the numbers above are not things I do directly but instead collaborate and advocate to make links to open doors.','Completed','Karen Rispin','22-09-2021 11:30:47 am','Omprakash','06-10-2021 12:54:44 am');
/*!40000 ALTER TABLE `c2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c20`
--

DROP TABLE IF EXISTS `c20`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c20` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q1_3` int DEFAULT NULL,
  `q1_4` int DEFAULT NULL,
  `q1_5` int DEFAULT NULL,
  `q1_6` int DEFAULT NULL,
  `q1_7` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q2_2` int DEFAULT NULL,
  `q2_3` int DEFAULT NULL,
  `q2_4` float(7,2) DEFAULT NULL,
  `q3_1` int DEFAULT NULL,
  `q3_2` int DEFAULT NULL,
  `q4_1` int DEFAULT NULL,
  `q5_1` int DEFAULT NULL,
  `q6_1` int DEFAULT NULL,
  `q6_2` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c20`
--

LOCK TABLES `c20` WRITE;
/*!40000 ALTER TABLE `c20` DISABLE KEYS */;
INSERT INTO `c20` VALUES (1,'July 2019 - June 2020',40,3500,NULL,NULL,NULL,30,246,17,13352,154,128.00,75,NULL,NULL,NULL,30,75,'','','Completed','omprakash','21-09-2021 05:32:41 am','omprakash','21-09-2021 05:32:41 am'),(2,'Target 2030',60,7000,NULL,NULL,NULL,10,120,30,30000,340,340.00,130,NULL,NULL,NULL,150,88,'','','Completed','omprakash','21-09-2021 05:34:21 am','omprakash','21-09-2021 05:34:21 am'),(3,'July 2020 - June 2021',0,1285,0,0,0,15,20,17,12331,837,60.80,85,88,0,0,80,91,'','','Completed','Chidzewere Nzou','06-10-2021 03:47:03 am','Chidzewere Nzou','06-10-2021 03:07:57 pm'),(4,'July 2021 - June 2022',0,0,0,0,0,0,0,17,7241,359,0.85,0,0,1,0,22,81,'This is programmatic data routinely collected on monthly basis and physically verified on quarterly basis ','Diabetes Type 2 project which was funded through EPN is no longer active. Funding period ended \r\nThe WASH project was funded through ACHAP is no longer active. Funding period ended ','Completed','Chidzewere Nzou','22-08-2022 05:01:19 am','Chidzewere Nzou','22-08-2022 05:01:19 am');
/*!40000 ALTER TABLE `c20` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c21`
--

DROP TABLE IF EXISTS `c21`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c21` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1a` int DEFAULT NULL,
  `q1_1b` int DEFAULT NULL,
  `q1_1c` float(7,2) DEFAULT NULL,
  `q1_2a` int DEFAULT NULL,
  `q1_2b` int DEFAULT NULL,
  `q1_2c` float(7,2) DEFAULT NULL,
  `q1_3` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c21`
--

LOCK TABLES `c21` WRITE;
/*!40000 ALTER TABLE `c21` DISABLE KEYS */;
INSERT INTO `c21` VALUES (1,'July 2020 - June 2021',1390,NULL,NULL,1390,NULL,NULL,32858,'','','Completed','Laura Berry','24-09-2021 05:47:07 pm','Omprakash','06-10-2021 01:07:26 am'),(2,'July 2021 - June 2022',NULL,NULL,100.00,NULL,NULL,100.00,74368072,'','','Completed','Laura Berry','28-07-2022 10:33:49 am','Laura Berry','10-08-2022 09:45:04 am');
/*!40000 ALTER TABLE `c21` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c22`
--

DROP TABLE IF EXISTS `c22`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c22` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q1_3` int DEFAULT NULL,
  `q1_4` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q2_2` int DEFAULT NULL,
  `q2_3` int DEFAULT NULL,
  `q3_1` int DEFAULT NULL,
  `q3_2` int DEFAULT NULL,
  `q3_3a` int DEFAULT NULL,
  `q3_3b` int DEFAULT NULL,
  `q3_3c` float(7,2) DEFAULT NULL,
  `q3_4` int DEFAULT NULL,
  `q4_1` int DEFAULT NULL,
  `q4_2` int DEFAULT NULL,
  `q4_3` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c22`
--

LOCK TABLES `c22` WRITE;
/*!40000 ALTER TABLE `c22` DISABLE KEYS */;
INSERT INTO `c22` VALUES (1,'July 2020 - June 2021',15,16,5,25,7,280,7,6,7,NULL,NULL,5.00,4,4,27771,27573,'\r\n•	Facility database at the CHASL secretariat from which data returns from the facilities are extracted,\r\n•	Trainings attendance list, \r\n•	Phone calls to facilities to verify and triangulate data, registers and summary forms from facilities\r\n','The data may be representative but underreported as most facilities do not send data regularly to the Secretariat.•	Phone call made to the facilities to obtain data might not give the true representation of the required data compared with onsite verification which is very costly. In-depth probing and questioning as well as providing instances of event or source are the means of mitigating such risks.','Completed','Florence Bull','16-10-2021 07:03:38 pm','Florence Bull','16-10-2021 07:03:38 pm'),(2,'July 2021 - June 2022',21,22,8,33,15,330,12,10,11,NULL,NULL,10.00,6,3,25623,27254,'Facility database at the CHASL secretariat from which data returns from the facilities are extracted\r\nTraining attendance list\r\nPhone calls to verify and triangulate data\r\nIn-person visits during supportive supervision wherein data are extracted from registers and summary forms','Phone calls made to the facilities to obtain data might not give the true representation of the required data compared with onsite verification which is very costly. In-depth probing and questioning as well as providing instances of event or source are the means used to mitigate such risks.','Completed','Florence Bull','25-08-2022 02:09:54 pm','Florence Bull','25-08-2022 02:09:54 pm');
/*!40000 ALTER TABLE `c22` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c23`
--

DROP TABLE IF EXISTS `c23`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c23` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1a` int DEFAULT NULL,
  `q1_1b` int DEFAULT NULL,
  `q1_1c` float(7,2) DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q1_3a` int DEFAULT NULL,
  `q1_3b` int DEFAULT NULL,
  `q1_3c` float(7,2) DEFAULT NULL,
  `q1_4` float(7,2) DEFAULT NULL,
  `q1_5` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q2_2` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c23`
--

LOCK TABLES `c23` WRITE;
/*!40000 ALTER TABLE `c23` DISABLE KEYS */;
INSERT INTO `c23` VALUES (1,'July 2020 - June 2021',6,6,100.00,92,92,92,100.00,5.00,834,1,54,'Quarterly report for quarter 1 of the Gatsibo Project\r\n\r\nMonthly report of the ECD program','To achieve the planned activities, we assume no frequent lockdown due  to COVID-19 pandemic that may halt field activities, interdistrict travels and community gatherings. And also the funds might be transfered by the the donor according to the MoU.','Completed','Melene Kabadege','07-10-2021 12:48:59 pm','Melene Kabadege','08-10-2021 07:26:08 am'),(2,'Target 2030',40,40,100.00,941,941,941,100.00,2.00,999,1,54,'','','Completed','Melene Kabadege','08-10-2021 07:34:00 am','Melene Kabadege','08-10-2021 07:34:00 am'),(3,'July 2021 - June 2022',6,6,100.00,982,982,982,100.00,3.00,999,1,56,'Annual Reports 20221-2022 for Gatsigo project, Sanitation Project and ECD Program','To achieve the planned activities, we assume the funds might be transfered by the the donor according to the MoU.','Completed','Melene Kabadege','19-08-2022 02:14:09 pm','Melene Kabadege','19-08-2022 03:04:41 pm');
/*!40000 ALTER TABLE `c23` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c24`
--

DROP TABLE IF EXISTS `c24`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c24` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1a` int DEFAULT NULL,
  `q1_1b` int DEFAULT NULL,
  `q1_1c` float(7,2) DEFAULT NULL,
  `q1_2a` int DEFAULT NULL,
  `q1_2b` int DEFAULT NULL,
  `q1_2c` float(7,2) DEFAULT NULL,
  `q1_3a` int DEFAULT NULL,
  `q1_3b` int DEFAULT NULL,
  `q1_3c` float(7,2) DEFAULT NULL,
  `q2_1a` int DEFAULT NULL,
  `q2_1b` int DEFAULT NULL,
  `q2_1c` float(7,2) DEFAULT NULL,
  `q3_1` int DEFAULT NULL,
  `q4_1` int DEFAULT NULL,
  `q4_2` int DEFAULT NULL,
  `q4_3a` int DEFAULT NULL,
  `q4_3b` int DEFAULT NULL,
  `q4_3c` float(7,2) DEFAULT NULL,
  `q4_4a` int DEFAULT NULL,
  `q4_4b` int DEFAULT NULL,
  `q4_4c` float(7,2) DEFAULT NULL,
  `q5_1a` int DEFAULT NULL,
  `q5_1b` int DEFAULT NULL,
  `q5_1c` float(7,2) DEFAULT NULL,
  `q6_1a` int DEFAULT NULL,
  `q6_1b` int DEFAULT NULL,
  `q6_1c` float(7,2) DEFAULT NULL,
  `q6_2a` int DEFAULT NULL,
  `q6_2b` int DEFAULT NULL,
  `q6_2c` float(7,2) DEFAULT NULL,
  `q6_3` int DEFAULT NULL,
  `q7_1` int DEFAULT NULL,
  `q7_2` int DEFAULT NULL,
  `q8_1a` int DEFAULT NULL,
  `q8_1b` int DEFAULT NULL,
  `q8_1c` float(7,2) DEFAULT NULL,
  `q8_2a` int DEFAULT NULL,
  `q8_2b` int DEFAULT NULL,
  `q8_2c` float(7,2) DEFAULT NULL,
  `q8_3` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c24`
--

LOCK TABLES `c24` WRITE;
/*!40000 ALTER TABLE `c24` DISABLE KEYS */;
INSERT INTO `c24` VALUES (1,'July 2020 - June 2021',0,NULL,NULL,0,NULL,NULL,0,NULL,NULL,0,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,0,NULL,NULL,0,NULL,NULL,0,NULL,NULL,0,0,17,0,NULL,NULL,0,NULL,NULL,0,'','','Completed','Susanne Duff-McKay','23-09-2021 04:26:06 am','Susanne Duff-MacKay','25-10-2021 02:28:25 am'),(2,'Target 2030',0,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,0,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,0,0,17,NULL,NULL,NULL,0,NULL,NULL,0,'Most of the commitments are not targeting all the member facilities at once. EPN runs it s projects with a few selected partners and these select a few selected health facilities. Each Christian health Association has 300 Health Facilities on average. As project funds are always limited it is not possible to cover all. Therefore when reporting on indicators, we can only report on the targeted facilities. \r\nOnly exception is the Minilab network (7)  \r\nAs baseline we are setting all to 0 for now, even though some of the facilities will already meet some of the targets, after the interventions we will report the increase. ','','Incomplete','Susanne Duff-McKay','23-09-2021 04:40:24 am','Susanne Duff-McKay','23-09-2021 05:16:22 am'),(3,'July 2021 - June 2022',21,26,80.77,0,50,0.00,4,56,7.14,0,18,0.00,1,2,12,26,30,86.67,55,100,55.00,23,66,34.85,0,50,0.00,6,56,10.71,9,2,4,0,50,0.00,NULL,NULL,0.00,0,'','','Completed','Damian Kibet','31-08-2022 09:18:58 am','Omprakash','28-09-2022 11:51:42 pm'),(4,'July 2022 - June 2023',41,56,73.21,33,56,58.93,54,88,61.36,0,18,0.00,1,4,17,22,30,73.33,104,282,36.88,81,282,28.72,0,11,0.00,48,56,85.71,14,2,16,35,50,70.00,NULL,NULL,NULL,0,'','Nigeria is in its electioneering period amid widespread insecurity with an uptick in election violence. While intense campaigns raise tension across the country, EPN is implementing projects in the country, thus an anticipated risk.','Incomplete','Damian Kibet','15-02-2023 10:49:18 am','Damian Kibet','15-02-2023 10:49:18 am');
/*!40000 ALTER TABLE `c24` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c25`
--

DROP TABLE IF EXISTS `c25`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c25` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` varchar(10) DEFAULT NULL,
  `q1_2` varchar(10) DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q2_2` int DEFAULT NULL,
  `q2_3a` int DEFAULT NULL,
  `q2_3b` int DEFAULT NULL,
  `q2_3c` float(7,2) DEFAULT NULL,
  `q3_1` int DEFAULT NULL,
  `q3_2` int DEFAULT NULL,
  `q3_3` int DEFAULT NULL,
  `q3_4` int DEFAULT NULL,
  `q3_5` int DEFAULT NULL,
  `q3_6` int DEFAULT NULL,
  `q4_1` int DEFAULT NULL,
  `q4_2` int DEFAULT NULL,
  `q4_3` int DEFAULT NULL,
  `q4_4` int DEFAULT NULL,
  `q4_5` int DEFAULT NULL,
  `q5_1` int DEFAULT NULL,
  `q5_2` int DEFAULT NULL,
  `q5_3` int DEFAULT NULL,
  `q5_4` int DEFAULT NULL,
  `q5_5` int DEFAULT NULL,
  `q5_6` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c25`
--

LOCK TABLES `c25` WRITE;
/*!40000 ALTER TABLE `c25` DISABLE KEYS */;
INSERT INTO `c25` VALUES (1,'July 2020 - June 2021','No','No',12,56,NULL,NULL,100.00,6,12,12,12,5,2,12,1914,12,56,883,24,0,4,24,90000,305000,'The data collection form needs to be adjusted for entry. We would be happy to work with you on this.\r\nData is also still being collected and analyzed, some are preliminary numbers.','','Completed','Jenelle Williams','07-10-2021 12:34:23 am','Jenelle Williams','07-10-2021 12:34:23 am'),(2,'July 2021 - June 2022','No','No',24,100,NULL,NULL,100.00,24,9,20,9,9,5,174,21481,24,24715,49530,24,10,24,100,24715,49530,'','Data is still being collected for final numbers.','Completed','Jenelle Williams','05-10-2022 09:27:01 am','Jenelle Williams','05-10-2022 09:27:01 am');
/*!40000 ALTER TABLE `c25` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c26`
--

DROP TABLE IF EXISTS `c26`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c26` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c26`
--

LOCK TABLES `c26` WRITE;
/*!40000 ALTER TABLE `c26` DISABLE KEYS */;
INSERT INTO `c26` VALUES (1,'July 2020 - June 2021',0,0,'N/A','As Kunri Christian Hospital Rural Health Care Project of Diocese of Hyderabad Church of Pakistan is located at the gateway of Thar desert area. It was established to serve the poor patients of the Thar desert area but due to lack of funding and retention of adept staff forced the management to reduce the size of the institute. The proposal to reopen the closed department has been shared with various organization. Uptill now there is no progress. After the covid 19 the situation has further deteriorated. The management is trying to develop it as a state of the art institute and needs guidance and support from all the stakeholders.','Completed','Naveed Khurram','25-10-2021 05:31:34 am','Naveed Khurram','25-10-2021 05:31:34 am');
/*!40000 ALTER TABLE `c26` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c27`
--

DROP TABLE IF EXISTS `c27`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c27` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2a` int DEFAULT NULL,
  `q1_2b` int DEFAULT NULL,
  `q1_2c` float(7,2) DEFAULT NULL,
  `q1_3` int DEFAULT NULL,
  `q1_4` int DEFAULT NULL,
  `q1_5` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c27`
--

LOCK TABLES `c27` WRITE;
/*!40000 ALTER TABLE `c27` DISABLE KEYS */;
INSERT INTO `c27` VALUES (1,'July 2020 - June 2021',573,NULL,NULL,85.00,3225,754,99999,'We collect data through our Child Case Management mobile application, which captures counseling and referrals made by our Kenyan field staff and trained local leader child advocates. This tool also tracks health and development outcomes among our beneficiaries over time. Every month we also collect detailed activity and financial reports from our Kenyan field team. Through regular meetings, calls and email correspondence we collect data from organizations that use our tools and approaches. To assess health knowledge and attitude changes we administer a survey to all participants before and after our trainings and workshops. We are currently also conducting a needs assessment wherein we are gathering data through interviews and surveys with a sample of our child, caregiver and local leader beneficiaries in Kenya.   ','Gathering restrictions and curfews that the Kenyan government has put in place to control the spread of Covid-19 have limited our ability to gather for some of our planned trainings, counseling sessions and community sensitization events. Fortunately, we have been able to introduced new m-health counseling tools and virtual trainings which have enabled us to continue most of our project activities.  ','Completed','Jessica Charles','06-10-2021 09:59:07 am','Jessica Charles','06-10-2021 09:59:07 am'),(2,'July 2021 - June 2022',823,NULL,NULL,100.00,2687,557,11520,'1.1 Data collected through our workshop and training participant lists showed that 823 community volunteers attended our trainings this year. \r\n1.2 We conducted a needs assessment in late 2021 that involved in-depth interviews with a sample of our community volunteers. Data from this assessment showed that 100% of the community volunteers demonstrated improved health knowledge and attitudes towards people with disabilities. \r\n1.3 This year our field staff and community volunteers provided registration, counseling, care and referrals to 689 children with disabilities and tracked these children s data and progress using our Child Case Management mobile application. The 2019 Kenya Population and Housing Census reports that the average household size in Kenya is 3.9. Since our services also reach and benefit the children s household members, we estimate that 2,687 community members (698 x 3.9) were served this year.\r\n1.4 Using our Child Case Management mobile application, we tracked a sample of our community volunteer child advocates and found that they had provided 557 counseling sessions over the course of the fiscal year. \r\n1.5 Based on a 2019 study conducted under a grant from the United Kingdom s Department for International Development (DFID), we discovered that each of our trainings, on average, mobilize the trainees to provide to disability sensitization for 384 community members per year. Since we had 30 trainings in FY22, we multiplied 30 by 384 to come to an estimate of 11,520 community members sensitized this year. ','','Completed','Jessica Charles','12-08-2022 01:56:41 pm','Jessica Charles','12-08-2022 01:56:41 pm');
/*!40000 ALTER TABLE `c27` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c28`
--

DROP TABLE IF EXISTS `c28`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c28` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1a` int DEFAULT NULL,
  `q1_1b` int DEFAULT NULL,
  `q1_1c` float(7,2) DEFAULT NULL,
  `q1_2a` int DEFAULT NULL,
  `q1_2b` int DEFAULT NULL,
  `q1_2c` float(7,2) DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c28`
--

LOCK TABLES `c28` WRITE;
/*!40000 ALTER TABLE `c28` DISABLE KEYS */;
INSERT INTO `c28` VALUES (1,'July 2020 - June 2021',40,90,44.44,17,30,56.67,'Direct interaction with hospitals.','Due to Covid the requirement for generic medicine was very low and most of the mission hospitals concentration was for Covid related treatments.','Completed','Shinto Jacob','02-10-2021 09:25:56 am','Omprakash','06-10-2021 01:09:30 am'),(2,'July 2021 - June 2022',50,75,66.67,50,80,62.50,'Direct interaction with hospital administrators.Data analysed using Microsoft office programs.','Most of the hospitals are depending  doctors interest to decide the medicine .Due to this each hospitals buy different brand medicine and it affectes the possibility of increasing the purchasing power and negotiation power to get best price. ','Completed','Shinto Jacob','04-09-2022 03:27:29 am','Shinto Jacob','04-09-2022 03:27:29 am');
/*!40000 ALTER TABLE `c28` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c29`
--

DROP TABLE IF EXISTS `c29`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c29` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q3_1` int DEFAULT NULL,
  `q4_1a` int DEFAULT NULL,
  `q4_1b` int DEFAULT NULL,
  `q4_1c` float(7,2) DEFAULT NULL,
  `q4_2` int DEFAULT NULL,
  `q4_3a1` int DEFAULT NULL,
  `q4_3a2` int DEFAULT NULL,
  `q4_3a3` float(7,2) DEFAULT NULL,
  `q4_3b1` int DEFAULT NULL,
  `q4_3b2` int DEFAULT NULL,
  `q4_3b3` float(7,2) DEFAULT NULL,
  `q4_3c1` int DEFAULT NULL,
  `q4_3c2` int DEFAULT NULL,
  `q4_3c3` float(7,2) DEFAULT NULL,
  `q4_4` int DEFAULT NULL,
  `q5_1` int DEFAULT NULL,
  `q5_2` int DEFAULT NULL,
  `q6_1a` int DEFAULT NULL,
  `q6_1b` int DEFAULT NULL,
  `q6_1c` float(7,2) DEFAULT NULL,
  `q6_2a` int DEFAULT NULL,
  `q6_2b` int DEFAULT NULL,
  `q6_2c` float(7,2) DEFAULT NULL,
  `q6_3a` int DEFAULT NULL,
  `q6_3b` int DEFAULT NULL,
  `q6_3c` float(7,2) DEFAULT NULL,
  `q7_1` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c29`
--

LOCK TABLES `c29` WRITE;
/*!40000 ALTER TABLE `c29` DISABLE KEYS */;
INSERT INTO `c29` VALUES (2,'July 2020 - June 2021',9,12,7,0,NULL,NULL,0.00,100,NULL,NULL,87.00,NULL,NULL,13.00,NULL,NULL,87.00,2,0,3,NULL,NULL,0.00,NULL,NULL,30.00,NULL,NULL,0.00,4,'1. Observation\r\n3. Comprehensive evaluation report\r\n4. Quickbooks; Monthly Financial Analysis; Audit Report\r\n5. Guidelines; MOUs\r\n6. Department reports; Medical bills; Surveys\r\n7. Reports with pictures','2. Residents may not finish the program.\r\n3.  Challenge of international travel due to COVID19 restrictions, natural disaster, and/ or violence.\r\n4.  Exchange rate fluctuation from USD to Gourdes\r\n','Completed','Tae Symons','06-10-2021 01:34:57 pm','Tae Symons','06-10-2021 03:07:39 pm'),(3,'July 2021 - June 2022',14,10,4,2,NULL,NULL,82.00,100,NULL,NULL,63.00,NULL,NULL,37.00,NULL,NULL,63.00,3,1,7,NULL,NULL,6.00,NULL,NULL,1.00,NULL,NULL,0.00,6,'','','Completed','Tae Symons','31-08-2022 01:37:29 pm','Tae Symons','31-08-2022 01:39:34 pm');
/*!40000 ALTER TABLE `c29` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c3`
--

DROP TABLE IF EXISTS `c3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c3` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q1_3` int DEFAULT NULL,
  `q1_4` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q3_1` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c3`
--

LOCK TABLES `c3` WRITE;
/*!40000 ALTER TABLE `c3` DISABLE KEYS */;
INSERT INTO `c3` VALUES (1,'July 2019 - June 2020',11,5876,168,1071,215,22982,'','','Completed','omprakash','21-09-2021 04:38:17 am','omprakash','21-09-2021 04:38:17 am'),(3,'July 2020 - June 2021',25,1182,371,1246,351,23881,'LQAS training and LQAS done annually in all countries.\r\n\r\nNote that Guatemala graduated - program finished and new program area to be started in 2021.  \r\nIn July 2021 - we are adding Guatemala (new areas), India and Zambia.  Baselines just completed.','This year in most countries involved there was disruptions due to Covid lockdowns. Volunteers also supported the Government in testing and vaccination campaigns.','Completed','Nancy Tenbroek','07-10-2021 08:35:49 am','Nancy Tenbroek','07-10-2021 08:35:49 am'),(4,'July 2021 - June 2022',26,1974,985,2536,60,40097,'','','Completed','Julie Cominos','28-09-2022 01:15:03 pm','Julie Cominos','03-10-2022 04:30:46 pm');
/*!40000 ALTER TABLE `c3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c30`
--

DROP TABLE IF EXISTS `c30`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c30` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` varchar(10) NOT NULL,
  `q1_2` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q2_2` int DEFAULT NULL,
  `q2_3a` int DEFAULT NULL,
  `q2_3b` int DEFAULT NULL,
  `q2_4` int DEFAULT NULL,
  `q2_5a` int DEFAULT NULL,
  `q2_5b` int DEFAULT NULL,
  `q2_5c` float(7,2) DEFAULT NULL,
  `q2_6a` int DEFAULT NULL,
  `q2_6b` int DEFAULT NULL,
  `q2_6c` float(7,2) DEFAULT NULL,
  `q2_7` varchar(10) NOT NULL,
  `q3_1` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c30`
--

LOCK TABLES `c30` WRITE;
/*!40000 ALTER TABLE `c30` DISABLE KEYS */;
INSERT INTO `c30` VALUES (1,'July 2022 - June 2023','Yes',250,320,300,60,80,300,60,NULL,NULL,50,NULL,NULL,'Yes',30,'','','Incomplete','Edwin Sam','28-07-2022 08:39:04 am','Edwin Sam','28-07-2022 08:39:27 am');
/*!40000 ALTER TABLE `c30` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c31`
--

DROP TABLE IF EXISTS `c31`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c31` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q2_2a` int DEFAULT NULL,
  `q2_2b` int DEFAULT NULL,
  `q2_2c` float(7,2) DEFAULT NULL,
  `q3_1` int DEFAULT NULL,
  `q4_1` int DEFAULT NULL,
  `q4_2` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c31`
--

LOCK TABLES `c31` WRITE;
/*!40000 ALTER TABLE `c31` DISABLE KEYS */;
INSERT INTO `c31` VALUES (1,'July 2019 - June 2020',24,2,2021,NULL,NULL,59.00,16,349,307,'','','Completed','Omprakash','22-09-2021 02:40:44 am','Omprakash','22-09-2021 02:40:44 am'),(2,'Target 2030',15,50,22500,NULL,NULL,NULL,30,NULL,NULL,'','','Completed','Omprakash','22-09-2021 02:42:03 am','Omprakash','22-09-2021 02:42:03 am'),(3,'July 2020 - June 2021',7,24,2056,2056,2500,82.24,9,140,16,'','This training number does not include on-line training (short courses) where 60,214 have received training.  Many of our planned activities were delayed because of COVID.','Completed','Perry Jansen','20-10-2021 06:33:25 pm','Perry Jansen','23-08-2022 05:38:09 pm'),(4,'July 2021 - June 2022',10,42,1305,1305,2056,63.47,12,595,16,'','This training number does not include on-line training (short courses) where 88,118 courses were completed.  ','Completed','Perry Jansen','27-10-2021 11:20:14 am','Perry Jansen','23-08-2022 05:38:21 pm');
/*!40000 ALTER TABLE `c31` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c32`
--

DROP TABLE IF EXISTS `c32`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c32` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q2_2` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c32`
--

LOCK TABLES `c32` WRITE;
/*!40000 ALTER TABLE `c32` DISABLE KEYS */;
INSERT INTO `c32` VALUES (1,'July 2019 - June 2020',15,0,4,1,'','','Completed','Omprakash','22-09-2021 02:45:52 am','Omprakash','22-09-2021 02:45:52 am'),(2,'Target 2030',100,2000,40,10,'','','Completed','Omprakash','22-09-2021 02:46:25 am','Omprakash','22-09-2021 02:46:25 am'),(3,'July 2021 - June 2022',0,9,5,2,'https://www.oikoumene.org/resources/publications/health-promoting-churches-volume-ii\r\nhttps://www.oikoumene.org/resources/publications/ecumenical-global-health-covid-19-response-framework','The main assumption that was challenged by the pandemic was the ability to travel and hold in-person meetings and workshops.','Completed','Mwai Makoka','24-10-2021 11:04:32 am','Omprakash','28-09-2022 11:48:41 pm'),(4,'July 2020 - June 2021',0,9,5,3,'https://www.oikoumene.org/resources/publications/health-promoting-churches-volume-ii\r\nhttps://www.oikoumene.org/resources/publications/ecumenical-global-health-covid-19-response-framework\r\nhttps://www.oikoumene.org/resources/publications/health-promoting-churches','The main assumption that was challenged by the pandemic was the ability to travel and hold in-person meetings and workshops.','Completed','Mwai Makoka','24-10-2021 11:04:48 am','Mwai Makoka','24-10-2021 11:25:04 am');
/*!40000 ALTER TABLE `c32` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c33`
--

DROP TABLE IF EXISTS `c33`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c33` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q2_2` int DEFAULT NULL,
  `q3_1` int DEFAULT NULL,
  `q3_2` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c33`
--

LOCK TABLES `c33` WRITE;
/*!40000 ALTER TABLE `c33` DISABLE KEYS */;
INSERT INTO `c33` VALUES (1,'July 2021 - June 2022',125,0,641149,486,838,33071,'','','Completed','Yombo Tankoano','31-08-2022 01:40:46 pm','Yombo Tankoano','31-08-2022 10:57:10 pm');
/*!40000 ALTER TABLE `c33` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c34`
--

DROP TABLE IF EXISTS `c34`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c34` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q1_3` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q2_2` int DEFAULT NULL,
  `q2_3` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c34`
--

LOCK TABLES `c34` WRITE;
/*!40000 ALTER TABLE `c34` DISABLE KEYS */;
INSERT INTO `c34` VALUES (1,'July 2021 - June 2022',0,0,0,30,10,6,'Reports','Community ownership and faith leaders engagement','Completed','Troy Lewis','30-08-2022 08:52:44 am','Omprakash','28-09-2022 11:50:40 pm');
/*!40000 ALTER TABLE `c34` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c35`
--

DROP TABLE IF EXISTS `c35`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c35` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1_1a` int DEFAULT NULL,
  `q1_1_1b` int DEFAULT NULL,
  `q1_1_1c` float(5,2) DEFAULT NULL,
  `q1_2_1a` int DEFAULT NULL,
  `q1_2_1b` int DEFAULT NULL,
  `q1_2_1c` float(5,2) DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c35`
--

LOCK TABLES `c35` WRITE;
/*!40000 ALTER TABLE `c35` DISABLE KEYS */;
INSERT INTO `c35` VALUES (1,'July 2021 - June 2022',NULL,NULL,0.00,NULL,NULL,0.00,31,'We have during the current year 2021-2022 carried out 31 activities including:\r\n- 9 training sessions in the Covid19 context, hand washing, hygiene and waste management (solid waste, waste water, and latrines).\r\n- 22 mass and door-to-door awareness sessions on:\r\nFamily planning, vaccination, nutrition, use of insecticide-treated mosquito nets, covid 19 and prevention of other epidemiological diseases.','There are several high health risk behaviors in the community. sustained engagement by community leaders can result in behavior change.\r\n\r\nWe have organized several activities, unfortunately there is a weak capacity for reporting and evaluating the impact due to the lack of long-term support.\r\nSeveral activities carried out with the help of the state (state health structure) are ad hoc and do not allow an evaluation of the impact on the change in behavior of the population within the community. Permanent community-led activities would be more effective and sustainable.\r\nIf our community health structures can have long-term autonomy of action, this would allow us to measure the expected qualitative and quantitative change.','Completed','Delphin Kapasa Mulongo','12-08-2022 10:23:47 am','Omprakash','10-10-2022 06:23:41 am');
/*!40000 ALTER TABLE `c35` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c36`
--

DROP TABLE IF EXISTS `c36`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c36` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2_1a` int DEFAULT NULL,
  `q1_2_1b` int DEFAULT NULL,
  `q1_2_1c` float(5,2) DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q2_2_2a` int DEFAULT NULL,
  `q2_2_2b` int DEFAULT NULL,
  `q2_2_2c` float(5,2) DEFAULT NULL,
  `q3_1` int DEFAULT NULL,
  `q3_2` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c36`
--

LOCK TABLES `c36` WRITE;
/*!40000 ALTER TABLE `c36` DISABLE KEYS */;
INSERT INTO `c36` VALUES (1,'July 2021 - June 2022',0,NULL,NULL,0.00,0,NULL,NULL,0.00,2,0,'Direct conversations with the schools and hospitals.','','Completed','Donna Childress','29-08-2022 02:04:17 pm','Donna Childress','29-08-2022 02:04:33 pm');
/*!40000 ALTER TABLE `c36` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c37`
--

DROP TABLE IF EXISTS `c37`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c37` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q1_3` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c37`
--

LOCK TABLES `c37` WRITE;
/*!40000 ALTER TABLE `c37` DISABLE KEYS */;
INSERT INTO `c37` VALUES (1,'July 2020 - June 2021',876,25,3,'MFCS progress reports','Natural Disasters and internal conflict  ','Completed','Mohammed Bun Bida','28-07-2022 06:26:00 am','Mohammed Bun Bida','28-07-2022 06:26:00 am'),(2,'July 2021 - June 2022',24,14,14,'','','Incomplete','Mohammed Bun Bida','01-08-2022 05:33:18 am','Mohammed Bun Bida','01-08-2022 05:33:18 am');
/*!40000 ALTER TABLE `c37` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c38`
--

DROP TABLE IF EXISTS `c38`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c38` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q1_3` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c38`
--

LOCK TABLES `c38` WRITE;
/*!40000 ALTER TABLE `c38` DISABLE KEYS */;
INSERT INTO `c38` VALUES (3,'July 2022 - June 2023',12,12,NULL,1200,'Minutes of meetings\r\nAttendance registers\r\nLogbooks\r\nClients case records\r\nVerbatims\r\n','They are many assumptions, decision, observation events and conditions nessesary for the achievement of the aforesaid projects/activities such as ,funds, resources and capacity buildings.should TAZIFA finds a donor for the project ,it s easy to fulfill and help the community at large','Incomplete','Victor Mwakapenda','01-10-2022 12:36:22 am','Victor Mwakapenda','01-10-2022 12:37:54 am'),(4,'July 2021 - June 2022',6,6,NULL,NULL,'Minutes\r\nAttendance registers\r\nClients case records\r\nVerbatim\r\nLogbooks','TAZIFA lacks funds to finish and fulfill some activities and reach some victims as a result we would like to find donnors for the project , resource s for capacity building','Incomplete','Victor Mwakapenda','01-10-2022 12:41:51 am','Victor Mwakapenda','01-10-2022 04:41:29 am');
/*!40000 ALTER TABLE `c38` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c39`
--

DROP TABLE IF EXISTS `c39`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c39` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q2_2a` int DEFAULT NULL,
  `q2_2b` int DEFAULT NULL,
  `q2_2c` float(7,2) DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c39`
--

LOCK TABLES `c39` WRITE;
/*!40000 ALTER TABLE `c39` DISABLE KEYS */;
/*!40000 ALTER TABLE `c39` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c4`
--

DROP TABLE IF EXISTS `c4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c4` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q1_3` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q3_1` int DEFAULT NULL,
  `q4_1` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c4`
--

LOCK TABLES `c4` WRITE;
/*!40000 ALTER TABLE `c4` DISABLE KEYS */;
INSERT INTO `c4` VALUES (1,'July 2019 - June 2020',2,42,6,0,1,7,'','','Completed','omprakash','21-09-2021 04:39:41 am','omprakash','21-09-2021 04:39:41 am'),(2,'Target 2030',10,120,30,30,6,30,'','','Completed','omprakash','21-09-2021 04:40:25 am','omprakash','21-09-2021 04:40:25 am'),(3,'July 2020 - June 2021',3,64,15,0,2,2,'','','Completed','Bruce Dahlman','10-10-2021 11:05:12 pm','Bruce Dahlman','10-10-2021 11:05:12 pm'),(4,'July 2021 - June 2022',3,57,15,14,5,29,'','','Completed','Omprakash','10-10-2022 04:28:57 am','Omprakash','10-10-2022 04:28:57 am');
/*!40000 ALTER TABLE `c4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c40`
--

DROP TABLE IF EXISTS `c40`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c40` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1a` int DEFAULT NULL,
  `q1_1b` int DEFAULT NULL,
  `q1_1c` float(7,2) DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q2_2` int DEFAULT NULL,
  `q2_3` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c40`
--

LOCK TABLES `c40` WRITE;
/*!40000 ALTER TABLE `c40` DISABLE KEYS */;
/*!40000 ALTER TABLE `c40` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c41`
--

DROP TABLE IF EXISTS `c41`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c41` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1a` int DEFAULT NULL,
  `q1_1b` int DEFAULT NULL,
  `q1_1c` float(7,2) DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q3_1` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c41`
--

LOCK TABLES `c41` WRITE;
/*!40000 ALTER TABLE `c41` DISABLE KEYS */;
/*!40000 ALTER TABLE `c41` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c42`
--

DROP TABLE IF EXISTS `c42`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c42` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q2_2` int DEFAULT NULL,
  `q2_3` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c42`
--

LOCK TABLES `c42` WRITE;
/*!40000 ALTER TABLE `c42` DISABLE KEYS */;
/*!40000 ALTER TABLE `c42` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c43`
--

DROP TABLE IF EXISTS `c43`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c43` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q1_3` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c43`
--

LOCK TABLES `c43` WRITE;
/*!40000 ALTER TABLE `c43` DISABLE KEYS */;
/*!40000 ALTER TABLE `c43` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c44`
--

DROP TABLE IF EXISTS `c44`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c44` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c44`
--

LOCK TABLES `c44` WRITE;
/*!40000 ALTER TABLE `c44` DISABLE KEYS */;
/*!40000 ALTER TABLE `c44` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c45`
--

DROP TABLE IF EXISTS `c45`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c45` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q1_3` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c45`
--

LOCK TABLES `c45` WRITE;
/*!40000 ALTER TABLE `c45` DISABLE KEYS */;
/*!40000 ALTER TABLE `c45` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c5`
--

DROP TABLE IF EXISTS `c5`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c5` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q1_3` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q2_2` int DEFAULT NULL,
  `q3_1` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c5`
--

LOCK TABLES `c5` WRITE;
/*!40000 ALTER TABLE `c5` DISABLE KEYS */;
INSERT INTO `c5` VALUES (1,'July 2019 - June 2020',1,30,59,2,30,1,'','','Completed','omprakash','21-09-2021 04:44:45 am','omprakash','21-09-2021 04:46:56 am'),(2,'Target 2030',5,200,538,6,420,10,'','','Completed','omprakash','21-09-2021 04:45:25 am','omprakash','21-09-2021 04:45:25 am'),(3,'July 2020 - June 2021',2,12,25,2,30,2,'LPOs from MHUs\r\nInvoices to MHUs\r\nLicences obtained.\r\nStandards approved and adopted\r\nMinutes form the standards meetings by the Technical Committees\r\nCertiificate of maintenance and \r\nJob cards\r\n\r\n','Risk of complacency, That the Standards bodies will provide references and items that need to be worked on and that they will be implemented.\r\nThat the facilities may be pessimistic  to maintain the planned services and maintenance trips for the specialized services needed.','Completed','Joseph Rugut','26-10-2021 07:08:49 am','Joseph Rugut','26-10-2021 08:03:36 am'),(4,'July 2021 - June 2022',4,15,19,2,10,2,'1.1 Number of standards accredited such as relevant ISO certifications and/or additional no. of licences received.- MOV- Draft standards\r\n1.2 Number of member facilities received calibration and safety assessment certificates - MOV-job cards, licenses by KNRA\r\n1.3 Number of facilities served (doing maintenance and calibration works) by new CHAK calibration labs and/or dosimetry labs-MOV- job cards and dosimetry reports\r\n2.1 Number of Internal service staff trained and certified for doing calibration works.- MOV- training report and certificates\r\n2.2 Number of member facilities staff trained in equipment maintenance, health technology and biomedical engineering - training report\r\n3.1 Number of partnerships initiated /engaged- MOV- MOU and service level agreement (SLA)\r\n','Assuming KEBS will schedule meetings for technical committees\r\nAssuming facilities will pass the quality assessment after training\r\nAssumption- CHAK is able to handle increased demand for calibration services \r\nAssumption- sustained for calibration services\r\nAssumption- CHAK license to conduct services will be renewed\r\nRisk- lack of funds for specialised training for internal staff\r\nRisk- staff turnover leaving skills gap\r\nAssumption- maintain large pool of clientele which will continue to attract partners\r\n','Completed','Joseph Rugut','29-08-2022 01:36:05 pm','Joseph Rugut','29-08-2022 02:36:33 pm');
/*!40000 ALTER TABLE `c5` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c6`
--

DROP TABLE IF EXISTS `c6`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c6` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1a` int DEFAULT NULL,
  `q1_1b` int DEFAULT NULL,
  `q1_1c` float(7,2) DEFAULT NULL,
  `q1_2` float(7,2) DEFAULT NULL,
  `q2_1a` int DEFAULT NULL,
  `q2_1b` int DEFAULT NULL,
  `q2_1c` float(7,2) DEFAULT NULL,
  `q3_1a` int DEFAULT NULL,
  `q3_1b` int DEFAULT NULL,
  `q3_1c` float(7,2) DEFAULT NULL,
  `q3_2a` int DEFAULT NULL,
  `q3_2b` int DEFAULT NULL,
  `q3_2c` float(7,2) DEFAULT NULL,
  `q4_1` int DEFAULT NULL,
  `q5_1` int DEFAULT NULL,
  `q5_2` int DEFAULT NULL,
  `q6_1` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c6`
--

LOCK TABLES `c6` WRITE;
/*!40000 ALTER TABLE `c6` DISABLE KEYS */;
INSERT INTO `c6` VALUES (2,'July 2019 - June 2020',NULL,NULL,75.00,25.00,NULL,NULL,35.00,NULL,NULL,95.00,NULL,NULL,25.00,5,0,0,612,'','','Completed','omprakash','21-09-2021 04:49:20 am','omprakash','21-09-2021 04:49:20 am'),(3,'July 2020 - June 2021',NULL,NULL,76.00,24.00,NULL,NULL,33.00,NULL,NULL,97.00,NULL,NULL,37.00,11,0,0,993,'','','Completed','Gift Werekhwe','19-10-2021 04:03:26 am','Gift Werekhwe','19-10-2021 04:46:11 am'),(4,'July 2021 - June 2022',NULL,NULL,75.00,25.00,NULL,NULL,0.00,NULL,NULL,98.00,NULL,NULL,57.00,11,6,258,612,'','','Completed','Gift Werekhwe','28-09-2022 10:17:24 am','Gift Werekhwe','28-09-2022 10:17:24 am');
/*!40000 ALTER TABLE `c6` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c7`
--

DROP TABLE IF EXISTS `c7`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c7` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q3_1` int DEFAULT NULL,
  `q3_2` int DEFAULT NULL,
  `q4_1` int DEFAULT NULL,
  `q4_2` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c7`
--

LOCK TABLES `c7` WRITE;
/*!40000 ALTER TABLE `c7` DISABLE KEYS */;
INSERT INTO `c7` VALUES (1,'July 2019 - June 2020',34,12,4,1,1,1,28,'','','Completed','omprakash','21-09-2021 04:50:48 am','omprakash','21-09-2021 04:50:48 am'),(2,'July 2020 - June 2021',49,14,17,4,30,2,50,'Zoom attendance participant list\r\nRegistration forms','The pandemic challenged the conducting of our regular training programmes and the zoom option was not the best alternative.\r\nThe government ammended the Foreign Contribution Regulation Act and all NGOs/FBOs are awaiting their renewals, last date being June 30th 2022. Fund flow for activities has therefore been hampered.\r\nGoing forward , FBOs engaged in helathcare are under the scanner for any possible religious agenda and this is a problem\r\n','Completed','Priya John','05-05-2022 10:10:38 pm','Priya John','05-05-2022 10:10:38 pm'),(3,'July 2021 - June 2022',173,18,5,2,161,2,23,'Microsoft teams office - CMAI has a Planning, Monitoring Evaluation Learning channel where all staff record their activities and fill in the required data\r\nCMAI Annual Report April 2021-March 2022\r\nZoom registrations and participant list\r\n','Face to face meetings for the Governance capacity building was inadequate.\r\nEnvironment in the country towards church run organisations is challenging','Completed','Priya John','11-10-2022 09:49:39 pm','Priya John','11-10-2022 09:49:39 pm');
/*!40000 ALTER TABLE `c7` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c8`
--

DROP TABLE IF EXISTS `c8`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c8` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q2_2` int DEFAULT NULL,
  `q3_1` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c8`
--

LOCK TABLES `c8` WRITE;
/*!40000 ALTER TABLE `c8` DISABLE KEYS */;
INSERT INTO `c8` VALUES (1,'July 2019 - June 2020',152,2522,16,NULL,78495,'','','Completed','omprakash','21-09-2021 04:53:21 am','omprakash','21-09-2021 04:53:21 am'),(2,'July 2020 - June 2021',12,30,7,29,72426,'CHART FY21spreadsheet is the internal tool CURE International uses to capture network data including training. Each CURE Children s Hospital throughout the network is responsible to enter data into CHART FY21 on a monthly basis. CHART FY21 is reviewed by CURE senior leadership and the Grants, Acquisitions, and Management team. ','CURE Training programs are an integral part of hospital activities and health system strengthening and capacity building in the countries where we have a presence. Travel and other governmental restrictions due to COVID-19 could impact the number of training programs and attendees. ','Completed','Amy Hewitt','11-10-2021 12:57:24 pm','Amy Hewitt','11-10-2021 12:57:24 pm'),(3,'July 2021 - June 2022',45,125,25,66,99999,'CURE Hospital Activity Reporting Tool (CHART) - CURE collects outputs and outcomes relevant to CURE activities such as training programs and events, training hours, trainee type, etc. The data is disaggregated by gender and whether the trainee is internal or external to CURE. Monitoring and verification occur continuously. The monitoring and verification of CURE s data is performed by designated M&E hospital staff or program managers. The data is collected on a monthly basis and subsequently filtered and analyzed. The information collected will complement the regular and ongoing data that is collected internally for reporting to the CURE office.  ','','Completed','Amy Hewitt','30-08-2022 04:07:03 pm','Amy Hewitt','31-08-2022 02:18:11 pm');
/*!40000 ALTER TABLE `c8` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c9`
--

DROP TABLE IF EXISTS `c9`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c9` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rp` varchar(35) NOT NULL,
  `q1_1` int DEFAULT NULL,
  `q1_2` int DEFAULT NULL,
  `q1_3` int DEFAULT NULL,
  `q2_1` int DEFAULT NULL,
  `q2_2` int DEFAULT NULL,
  `q2_3` int DEFAULT NULL,
  `q2_4` int DEFAULT NULL,
  `q2_5` int DEFAULT NULL,
  `q3_1` int DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c9`
--

LOCK TABLES `c9` WRITE;
/*!40000 ALTER TABLE `c9` DISABLE KEYS */;
INSERT INTO `c9` VALUES (1,'July 2019 - June 2020',275,0,6,24,0,100,75,0,0,'','','Completed','omprakash','21-09-2021 04:56:27 am','omprakash','21-09-2021 04:56:27 am'),(2,'July 2020 - June 2021',671,7,63,44,8,325,150,27,5,'','The year was marked by extreme challenges due to increasing violence and fuel shortages making transportation difficult or impossible.  Yet, the team accomplished a lot!','Completed','Barbara Campbell','05-10-2021 02:18:56 pm','Omprakash','06-10-2021 12:59:08 am'),(3,'July 2021 - June 2022',1024,45,46,55,14,166,84,213,72,'','Haiti has experienced unprecedented violence and insecurity in this time period causing an extremely challenging environment for free movement throughout the country. Our team has done an incredible job despite these increased challenges.  ','Completed','Rachel Bernard','26-08-2022 01:24:00 pm','Rachel Bernard','30-08-2022 08:21:05 am');
/*!40000 ALTER TABLE `c9` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `center_details`
--

DROP TABLE IF EXISTS `center_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `center_details` (
  `cid` int NOT NULL AUTO_INCREMENT,
  `center_id` varchar(15) NOT NULL,
  `center_name` varchar(250) NOT NULL,
  `center_address` text NOT NULL,
  `center_contact` varchar(100) NOT NULL,
  `center_email` varchar(150) NOT NULL,
  `dropout` int DEFAULT '0',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `center_details`
--

LOCK TABLES `center_details` WRITE;
/*!40000 ALTER TABLE `center_details` DISABLE KEYS */;
INSERT INTO `center_details` VALUES (1,'2020-01','American Leprosy Missions','','','',0),(2,'2020-02','Assistive Technology Catalyst Project with IDEAS','','','',0),(3,'2020-03','World Renew','','','',0),(4,'2020-04','Christian Academy of African Physicians','','','',0),(5,'2020-05','The Christian Health Association of Kenya (CHAK)','','','',0),(6,'2020-06','Christian Health Association of Malawi (CHAM)','','','',0),(7,'2020-07','Christian Medical Association India (CMAI)','','','',0),(8,'2020-08','Cure International','','','',0),(9,'2020-09','Dalton Foundation','','','',0),(10,'2020-10','Digital African Health Library Service','','','',0),(11,'2020-11','Health Services Corps','','','',0),(12,'2020-12','Hezekiah Health Foundation','','','',0),(13,'2020-13','IMA World Health','','','',0),(14,'2020-14','LifeNet International','','','',0),(15,'2020-15','Rural Health Services (RHS) of Sudan','','','',0),(16,'2020-16','Samaritan Purse','','','',1),(17,'2020-17','St. John s Medical College, Bangalore','','','',0),(18,'2020-18','Eglise Methodiste du Togo','','','',0),(19,'2020-19','Uganda Protestant Medical Bureau (UPMB)','','','',0),(20,'2020-20','Zimbabwe Association of Church-Related Hospitals','','','',0),(21,'2021-01','Blessings International','','','',0),(22,'2021-02','Christian Health Association of Sierra Leone, Healey IRF, Helping Children Worldwide','','','',0),(23,'2021-03','Community Fountain Organization','','','',0),(24,'2021-04','Ecumenical Pharmaceutical Network','','','',0),(25,'2021-05','Global Health Action','','','',0),(26,'2021-06','Kunri Christian Hospital','','','',0),(27,'2021-07','Kupenda for the Children','','','',0),(28,'2021-08','National Medical Services Consortium (NMSC)','','','',0),(29,'2021-09','World Hope International','','','',0),(30,'2021-10','World Relief','','','',0),(31,'2020-21','African Mission Healthcare','','','',0),(32,'2020-22','World Council of Churches','','','',0),(33,'2022-01','Catholic Medical Mission Board ','','','',0),(34,'2022-02','Expanded Church Response','','','',0),(35,'2022-03','Le Bon Berger','','','',0),(36,'2022-04','Medical Benevolence Foundation','','','',0),(37,'2022-05','Muslim Family Counselling Services','','','',0),(38,'2022-06','Tanzania Initiative for Achievement','','','',0),(39,'2023-01','Appel à la Compassion','','','',0),(40,'2023-02','Association Galle Kisal','','','',0),(41,'2023-03','Christian Health Association of Nigeria','','','',0),(42,'2023-04','DOM ECC SUD-KIVU','','','',0),(43,'2023-05','International Care Ministries','','','',0),(44,'2023-06','Kabarak University Department of Family Medicine','','','',0),(45,'2023-07','Kingdom Workers Malawi','','','',0);
/*!40000 ALTER TABLE `center_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `members` (
  `uid` int NOT NULL AUTO_INCREMENT,
  `center_id` int NOT NULL,
  `center_name` varchar(100) NOT NULL,
  `name` varchar(35) NOT NULL,
  `designation` varchar(35) NOT NULL,
  `pri_email` varchar(75) DEFAULT NULL,
  `off_address` varchar(200) NOT NULL,
  `mobile1` varchar(50) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `previlege` varchar(15) NOT NULL,
  `suspended` int NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (5,999,'','Edwin Sam','Consultant','aedwinsam@yahoo.com','','+91 9810974329','','e4f44ff3fcb02d31b12161152c2aec78','SA',0),(6,999,'','Zana Kiragu','Research Fellow','zkiragu@bu.edu','','+1 857 2009989','','c0f69cc51fd3e901e52189d22cee1b55','SA',0),(7,999,'','Charishma Sarman','Consultant','charishmajonessarman@gmail.com','','','',NULL,'SA',0),(8,999,'','Mona Bormet','Project Director','mona.bormet@ccih.org','','','','aaee85dd9aed582f28e66bcccfccf95c','SA',0),(16,13,'IMA World Health','Rebecca Waugh','Senior Advisor','rwaugh@imaworldhealth.org','','','','5e01a91c38d77fce85ba9d1cea1a79c0','OA',0),(18,999,'','Admin-DUMMY','','dummy@cc.in','','','','82b1fafd59909f54a69eaf0812b06b64','SA',0),(19,45,'Kingdom Workers Malawi','Omprakash','programmer','omprakash@cmcvellore.ac.in','','','','73359b8db964e3876ebcf089b99edba9','OA',0),(20,29,'World Hope International','Tae Symons','','tae.symons@worldhope.org','','','','81b3ccb76ed234cdaddbca7c53bb20c4','OA',0),(21,29,'World Hope International','Dan Irvine','','dan.irvine@worldhope.org','','','',NULL,'OA',0),(22,21,'Blessings International','Laura Berry','','LBerry@blessing.org','','','','6ba6f77595ae166facd5cf3b022fc9de','OA',0),(24,28,'National Medical Services Consortium (NMSC)','Shinto Jacob','','shintojacob@nmsconsortium.org','','','','423809b8fc6106682d16823c6cca9529','OA',0),(26,22,'Christian Health Association of Sierra Leone & Healey IRF','Florence Bull','','fbull@chasl.sl','','','','9ca9df6b309193c297c3c1c6a89be44f','OA',0),(27,24,'Ecumenical Pharmaceutical Network','Susanne Duff-MacKay','','sduffmackay@epnetwork.org','','','','ea0c1c4b6ca80a1ec4e18a3285a65697','OA',0),(28,24,'Ecumenical Pharmaceutical Network','Richard Neci Cizungu','','richard.neci@epnetwork.org','','','',NULL,'OA',0),(29,27,'Kupenda for the Children','Jessica Charles','','jessica@kupenda.org','','','','f3ae46b9fd0998d92a60f06ee2b4acbe','OA',0),(30,25,'Global Health Action','Jenelle Williams','','jwilliams@globalhealthaction.org','','','','a10d9da329b2f867d0cad4a98292d930','OA',0),(31,26,'Kunri Christian Hospital','Naveed Khurram','','nk.iucnp@gmail.com','','','','d5efc23b4bdd418da26db18f9edbcb34','OA',0),(33,20,'Zimbabwe Association of Church','Vuyelwa Sidile-Chitimbire','','chitimbire@zach.org.zw','','','','2ee97aa9de7c260080bab4877ad4a50b','OA',0),(34,3,'World Renew','Nancy Tenbroek','','ntenbroek@worldrenew.net','','','','1f87c9769e6663d25e0063d2aa217045','OA',0),(35,3,'World Renew','Julie Cominos','','jcominos@worldrenew.net','','','','98f7b3fbc8bab2b7b5f2bbb0354043ca','OA',0),(39,17,'St. John s Medical College, Bangalore','John Varghese','','johntiss2014@gmail.com','','','','3006929b5613dfc3d946bfb8c7e5eb24','OA',0),(41,15,'Rural Health Services (RHS) of Sudan','Johnson Diara','','jcdiara@gmail.com','','','','e04ccc2d674c67eefbf368061fc54d16','OA',0),(42,14,'LifeNet International','Sarah Borger','','sborger@lninternational.org','','','','70796cdd80aeddc96c760083e0982aca','OA',0),(43,12,'Hezekiah Health Foundation','Hezekiah Abah Jonah','','hezekiahhealthfoundation@gmail.com','','','','e8352dcf93211efa2516ce635e0c2dac','OA',0),(44,18,'Eglise Methodiste du Togo','Lazare Ahli Kouadjo','','pmdct@yahoo.fr','','','','fc54c7f4bcc3d0a67c56dbfa949b3bdb','OA',0),(45,10,'Digital African Health Library Service','Bruce Dahlman','','director@digitalhealthlibrary.net','','','','2c76bcb8ce5c66885339e00601dac57d','OA',1),(46,8,'Cure International','Amy Hewitt','','hewitta@internationalaid.org','','','',NULL,'OA',0),(47,7,'Christian Medical Association India (CMAI)','Priya John','','priya.john@cmai.org','','','','4a68b8c2efc2c2bd8dd425da6f4f2cf3','OA',0),(48,11,'Health Services Corps','Laura Smelter','','laura@healthservicecorps.org','','','','5600929bf5b47fe1dec4292745512490','OA',0),(49,6,'Christian Health Association of Malawi (CHAM)','Michael Phiri','','mphiri@cham.org.mw','','','',NULL,'OA',0),(50,4,'Christian Academy of African Physicians','Bruce Dahlman','','bruce.dahlman@aimint.org','','','','af5889f5c0583bf7fe4002fd77ebb015','OA',0),(52,2,'Assistive Technology Catalyst Project with IDEAS','Karen Rispin','','karen.rispin@ideasworld.org','','','','c348fa23d0430a14bec08c9419cb2010','OA',1),(53,1,'American Leprosy Missions','Sunil Anand','','sanand@leprosy.org','','','','a546221cbf8619062f9fb170ba1e3539','OA',0),(54,31,'African Mission Healthcare','Perry Jansen','','perry.jansen@africanmissionhealthcare.org','','','','e776ef9d6893b35d5d3bec646318a3af','OA',0),(55,24,'Ecumenical Pharmaceutical Network','EPN','','info@epnetwork.org','','','',NULL,'OA',0),(56,22,'Christian Health Association of Sierra Leone & Healey IRF','Vicki Middleton','','vmiddleton@healeyphilanthropic.org','','','','73fdd5394e5292a8c7b48ef9a9fe9be4','OA',0),(57,20,'Zimbabwe Association of Church','Chidzewere Nzou','','nzou@zach.org.zw','','','','5df3b3cdecfd929985e1559573770ace','OA',0),(58,32,'World Council of Churches','Mwai Makoka','','Mwai.Makoka@wcc-coe.org','','','','3466ea84e86a21fbc354e4e316dd8f03','OA',0),(59,9,'Dalton Foundation','Barbara Campbell','','bcampbell@thedaltonfoundation.org','','','','2eabc6c654b262bcb5acf7968a6e0be5','OA',0),(60,30,'World Relief','Eeva Simard','','ESimard@wr.org','','','',NULL,'OA',1),(61,11,'Health Services Corps','Joel White','','joelw@healthservicecorps.org','','','','10c2a147cfb862c53a497604b5e7201e','OA',0),(62,6,'Christian Health Association of Malawi (CHAM)','Gift Werekhwe','','gwerekhwe@cham.org.mw','','','','ec6f1fc6d7a5b9b6cc172b96df2717be','OA',0),(66,13,'IMA World Health','Dennis Cherian','User','dcherian@corusinternational.org','1730 M ST NW STE 1100, Washington DC 20036','','','7c2d6e296b2fd03aa5d90ab31a98c3fc','User',0),(67,13,'IMA World Health','Fifi Manuel','User','fmanuel@corusinternational.org','1730 M ST NW STE 1100, Washington DC 20036','','','7cc6821d17a02ccf17fdb24707b4c142','User',0),(68,23,'Community Fountain Organization','Melene Kabadege','','mkabadege@gmail.com','','','','cef92af86aa0d55d83ad2caabfd64080','OA',0),(69,8,'Cure International','Amy Hewitt','','amy.hewitt@cureinternational.org','','','','c8fc3a779e1bbc066d3cc9e9526b93d3','OA',0),(70,18,'Eglise Methodiste du Togo','Michael Tettey','','michael.tettey@gmail.com','','','','56620edb1eb7bee0eb00ecff7aa804eb','OA',0),(71,5,'The Christian Health Association of Kenya (CHAK)','Joseph Rugut','','rugkip@gmail.com','','','','c3bdfc6fba62d70f30376e20cc64db66','OA',0),(72,999,'','Carolyn','Program Adviser','30x30@ccih.org','','','','94939f6f5004137b46e4c73c18452b41','SA',0),(73,999,'','Test','','ssauter@tulane.edu','','','','098f6bcd4621d373cade4e832627b4f6','OA',0),(74,33,'Catholic Medical Mission Board ','Yombo Tankoano','','ytankoano@cmmb.org','','','','6a8ee505899b7126536091cc96aad8d6','OA',0),(75,33,'Catholic Medical Mission Board ','Claudia Llanten','','cllanten@cmmb.org','','','',NULL,'OA',0),(76,34,'Expanded Church Response','Troy Lewis','','troy.lewis@ecrtrust.org','','','','c3605b121b2527a9c3b62691ba02c164','OA',0),(77,34,'Expanded Church Response','Yvonne Pande','','yvonne.pande@ecrtrust.org','','','',NULL,'OA',0),(78,35,'Le Bon Berger','Delphin Kapasa Mulongo','','delpregine@yahoo.fr','','','','32925e4573394893699bc239e46d8a86','OA',0),(79,35,'Le Bon Berger','Oddon Gilles Mukari','','oddongilles.mukari@zafcpc.org','','','',NULL,'OA',0),(80,36,'Medical Benevolence Foundation','Donna Childress','','dchildress@mbf.net','','','','4c96f1656a07df6360aa1355011ca04f','OA',0),(81,36,'Medical Benevolence Foundation','Andy Mayo','','amayo@mbf.net','','','',NULL,'OA',0),(82,37,'Muslim Family Counselling Services','Mohammed Bun Bida','','mfcsashanti@gmail.com','','','','734acdaffca58592a7513a48e39bed4e','OA',0),(83,38,'Tanzania Initiative for Achievement','Victor Mwakapenda','','victor1985mwakapenda@gmail.com','','','','9800aa6dd63426e5155b76b184510f46','OA',0),(84,999,'','Edwin','TA','aedwinsam@gmail.com','VVV','981997','','e4f44ff3fcb02d31b12161152c2aec78','OA',0),(87,30,'World Relief','Edwin Sam','TA','aedwinsam@hotmail.com','CCCCC','999','','892da5c25fcdeb58f665f9a5c1248cf2','OA',0),(88,8,'Cure International','Kayla Videtich','Director, Monitoring & Evaluation','kayla.videtich@cureinternational.org','70 Ionia Ave SW Suite 200\r\nGrand Rapids. MI 49503','','','bc7585b5203445cbcf4bdc0496f3a442','User',0),(89,13,'IMA World Health','Isabelle Ick','','iick@corusinternational.org','','','',NULL,'User',0),(90,9,'Dalton Foundation','Rachel Bernard','Haiti Country Coordinator','rbernard@thedaltonfoundation.org','','','','d784da325954c7da03cbd095d3ef2758','OA',0),(91,24,'Ecumenical Pharmaceutical Network','Damian Kibet','Mr','dkibet@epnetwork.org','','','','ea0c1c4b6ca80a1ec4e18a3285a65697','User',0),(92,24,'Ecumenical Pharmaceutical Network','Rebekka Oelze','Ms','rebekka.oelze@epnetwork.org','','','',NULL,'User',0),(93,25,'Global Health Action','Charsey Cherry','','ccherry@globalhealthaction.org','','','','c9e935f6f216064b51d8f72bf5050783','User',0);
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `qualitative`
--

DROP TABLE IF EXISTS `qualitative`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `qualitative` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `cid` int NOT NULL,
  `cname` varchar(200) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1` text NOT NULL,
  `q2` text NOT NULL,
  `q3` text NOT NULL,
  `q4` text NOT NULL,
  `q5` text NOT NULL,
  `q6` varchar(200) NOT NULL,
  `q7` varchar(200) NOT NULL,
  `q8` varchar(200) NOT NULL,
  `q9` varchar(200) NOT NULL,
  `q10` varchar(200) NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `qualitative`
--

LOCK TABLES `qualitative` WRITE;
/*!40000 ALTER TABLE `qualitative` DISABLE KEYS */;
INSERT INTO `qualitative` VALUES (1,5,'The Christian Health Association of Kenya (CHAK)','July 2019 - June 2020','Acreditation by authorized licensing body called KNRA (Kenya  Nuclear regulatory authotiy to do radiaiton safety and quality assuracne services in Kenya. Other health authorities recognizing our efforts are the Ministry of health, etc','visits, routine ppms,','licensing pre-requisies, Accreditation to more superior classifications of health categories and levels\r\n','','','','','','','','Completed','omprakash','21-09-2021 04:46:21 am','omprakash','21-09-2021 04:46:21 am'),(2,13,'IMA World Health','July 2019 - June 2020','1a. ACHAP continues to gain visibility and opportunities.  The IMA contract for an ACHAP COVID Reponse helped them build and demonstrate capacity in direct implementiation and financial management.\r\n1b. ACHAP is better able to demonstrate its value to members as a result of their implementation of the COVID Reponse with 7 CHAs.\r\n1c. UPMB has acquired important skills and experience in proposal-writing and is currently implementing a USAID NPI award developed with considerable IMA TA.','2a. Through a LWR commitment, IMA was able to commit substantial funds to capacity-building for Christian Health Associations and ACHAP.  Our plan was to implement a series of workshops/trainings that would build institutional capacity across a large number of CHAs and to provide additional direct TA thereafter to a subset.  When COVID intervened, the remainder of the available resources were invested in COVID-related capacity building, primarily in IPC TOTs and cascading. \r\n2b. An additional commitment of internal funds plus public fund-raising for COVID allowed us to support a 7-country ACHAP COVID Response.  \r\n2c. In addition to the financial resources, we invested considerable TA in developing the curriculum for an ACHAP Executive Directors Retreat, focused on leadership and planning; and TA in supporting a consultant in developing training materials and  conducting remote TOT sessions on IPC.','3a. Christian Health Associations provide a significant percentage of the health care in many countries, with an even higher percentage of the care available in rural areas. Strengthening their technical capacity enables them to deliver services more effectively; strengthening their institutional capacity enables them to deliver services both sustainably (and probably more effectively too, to the extent they can upgrade training, equipment, or facilities as a result).\r\n3b. It was notable in the ACHAP COVID response that several of the intervention CHAs were very active developing national policies and/or overseeing facilities that were strategic in their respective national COVID response.','4a. We believe there is enormous benefit to investing in the Christian Health Associations and the umbrella organization, ACHAP.  By and large, the quality of leadership, commitment, and resourcefulness of CHAs is extraordinary, and the organizations already have broad reach and a deep understanding of their communities  needs and how to meet them.   \r\n4b. These organizations proved to be very \"\"nimble\"\" and able to respond quickly to the opportunity to implement a COVID response.  They are however are mostly operating \"\"on a shoestring\"\" and cannot easily allocate human or financial resources to \"\"projects,\"\" so some flexibility and an extra measure of support may be required when collaborating. \r\n4c. Working with the CHAs also entails understanding that they have distinct histories, contexts, and institutional arrangements, as well as different approaches and strengths, etc. so, again, flexibility is in order.','','','','','','','Completed','omprakash','21-09-2021 05:04:24 am','omprakash','21-09-2021 05:13:23 am'),(7,18,'Eglise Methodiste du Togo','July 2019 - June 2020','Answers: 1) In our intervention areas, our latrine construction activities have led to a considerable reduction in open defecation and indirectly the reduction of diseases linked to this phenomenon. (EX: In the first half of 2020, 5 latrines were built in Aouda, serving 5 houses with 35 inhabitants including 8 men, 16 women and 11 children, who defecated in the open). 2) The eradication of home births to more than 80% in our areas through community education, and the care of pregnant women in our care structures. (EX: In 2019, 65 deliveries out of 72 registered in total in Zouvi were carried out at the health center and only 7 deliveries at home for the same period). 3) The adoption of good behavior with regard to the prevention of non-communicable diseases such as hypertension, diabetes, and parasitic and infectious diseases such as malaria, bacterial meningitis (in the northern part of Togo). At least 8/10 of the beneficiaries of our services respect the blood pressure control appointments for hypertensive people and blood sugar control for diabetics. 9/10 of PMDCT LLIN beneficiaries make good use of them. 4) Improvement of the socio-economic and health conditions of the populations of our zones through technical, material and financial organizational support for their activities, which allows them to increase their income by up to 10% on average by sector of activity. (Example of the Hagno de Zévé group which after all the expenses achieved an income of 86,900 F CFA in 2020 against 33,300 F CFA of income before the support of the PMDCT, i.e. an increase of 161%). It should be noted that not all groups have the same success, but an improvement is observed for the majority of these groups												',' Answers: 1) Installation of health centers in certain areas (Wuiti, Zouvi and Sivamé) and support for existing health centers in other areas (Aouda, Gboto, Kévé, Amoussoukopé, Adjengré, Babadè ...) 2) Provision of quality primary health care in our health centers (curative consultations, pre and post natal consultations). 3) Proximity awareness raising (11,628 people directly affected by our proximity awareness campaigns between September and November 2020); Educational talks (more than 150 in 2020); Radio broadcasts (26 radio broadcasts scheduled for 2020 and 2021 to educate communities on preventive measures for COVID-19).\r\n4) Construction of borehole latrines and protected wells in the communities (15 latrines and two boreholes built between 2019 and 2020 in Aouda and Gboto)\r\n5) Organization of communities into small groups by sector of activity, and their technical, material and financial assistance (EX: in Yoto prefecture, the PMDCT has set up groups of farmers, groups for processing cassava into gari, groups of breeders and groups of market gardening. In the prefecture of Sotouboua, groups of red oil production, soap making, ... are also set up and assisted. These groups are one in number. twenty in total.','Responses: According to the national health policy in Togo presented on June 14, 2019, by Professor Moustafa Mijiyawa, Minister of Health and of public hygiene during a panel on the occasion of the Togo-EU forum, Two pathological poles feed the two objectives of this policy: infectious and parasitic diseases (Malaria, diarrhea .....) and non transmissible (hypertension, diabetes canser). Thus it is very visible to note that the programs and activities of the PMDCT being oriented on the fight against the same pathologies, are perfectly in phase with the national health policy in Togo, and participate directly in the achievement of the objectives of this policy.','Answers: Lessons to be learnt from the experience of PMDCT through its programs and activities include:\r\nThe involvement of the community in the identification of their own problems and the search for solutions to these problems, facilitate the adhesion of the community to the implementation. implementation of activities and the appropriation of certain activities by the community itself. (EX 1: one of the health centres of the EMT / PMDCT is in Sivamé. After the construction of the building, the community was not involved in the management of this center. So, the EMT alone was looking for solutions to identified problems, but the results were not really a success, since it does not benefit from the support of the whole community. In view of this problem, the PMDCT has initiated steps to involve the community in the management of the centre through a management committee which is the result of a memorandum of understanding between the community and the EMT EX 2: the PMDCT / EMT has built boreholes in several communities in Togo, but the community has always been associated with the whole process and even sometimes, she brings a local contribution for the realization of the work. once the realization is completed, a \"\"WATER\"\" committee is set up in the community to take care of the management of the use of the structure as well as its maintenance. It must be noted that each community is special, though they may have identical problems, the solution approach must take into account the environment where it will be implemented.','A woman was received in the second week of November 2020 at the Zouvi Dispensary. She was a 28-year-old patient admitted for lumbopelien pain on amenhorea for more than 36 weeks, around 6.30 p.m. After physical and gyneco-obstetric examinations, she was diagnosed with the onset of labor. Despite the supervision and care given, labor was very slow and extremely obstructed. Around 10 p.m., uterine contractions remained regular and the cervix had dilated to 4cm. Two hours later, faced with the complicated labour and in the absence of an obstetric ultrasound throughout the pregnancy, the caregivers decided to examine the patient again on the geneco-obstetrical and physical level. There, the body temperature had remained normal, but the blood pressure which was at 12/7 CmHg had moved to 15 / 9CmHg, then it was noticed that the fetus (baby) had a transverse presentation; it was after midnight. There was no suitable means of transport in the village where the dispensary is located. In an emergency, the staff of the Zouvi dispensary called another health center located more than 5km away, which could not also take care of the case, but which had at its disposal a motorbike ambulance to move the patient. While waiting for the vehicle to arrive, the referral sheet has been completed, the woman s constants, and the fetus  heartbeat are regularly monitored. The motorbike arrived after 20 minutes, given the poor condition of the rural tracks. The woman was referred to the Afagnan hospital, more than 50 km from Zouvi, where the woman finally underwent a cesarean section. Unfortunately the child was stillborn, but the mother s life was saved thanks to the skill of the caregivers who then gathered the patient s referral conditions despite it being very late at night and despite the condition of the lanes. The woman was released from the hospital a few days later and the caregivers at the Zouvi dispensary planned a home follow-up of the patient to ensure her complete recovery.','','','','','','Completed','Omprakash','21-09-2021 07:52:07 am','Omprakash','21-09-2021 07:52:07 am'),(8,1,'American Leprosy Missions','July 2020 - June 2021','Jagruti is American Leprosy Missions  unique, collaborative, integrated neglected tropical diseases and WASH program in India and Nepal. The program s local name, Jagruti means awakening in Sanskrit. Piloted in 2018-19, the program has now been scaled in both countries, and offers valuable learning from the Asia perspective. \r\nThe program is innovative in that it is local-women led, employs digital technology to facilitate interventions, and employs a human rights based approach for access to essential services. \r\nThe program recruits local women from every village and trains them as Community Resource Persons or CRPs, to lead the program interventions at the local level. Significant impact has been demonstrated through an almost immediate adoption of recommended WASH practices at home, and improved water and sanitation services for a few communities through advocacy by women’s self-help groups.\r\n','Women’s groups in Asia are powerful platforms for change and development, recognized and tapped by governments and NGOs. These groups represent their own communities and their issues. What the program did was add WASH and NTDs to their agenda. Educating women in their groups, on the clear linkages between WASH and disease, recommended WASH practices, and how to protect their families against endemic NTDs means that we effectively reach every household at-risk. Further, the program empowers these groups through education on their rights to enable them to collectively advocate for essential water and sanitation services with their duty bearers.','The CRPs’ roles cut across departments of health, water and sanitation, education, rural development and they become an important human resource for various government campaigns in the area. 2020 saw a natural transition of the program to strengthen the government’s COVID19 response at the grassroots. They sewed cloth masks, reinforced WASH behaviour and taught respiratory hygiene, masking and social distancing, as COVID19 precautionary measures. The program’s household level focus with a trained CRP in every village made the CRPs a reliable source of local knowledge, and they were invited to accompany government frontline health workers to every home for COVID19 screening. They joined the frontline workers for distribution of aid and ensured that people with NTDs could continue their treatment and care. ','The human rights-based approach of this program has been very successful.\r\n•	Empowering women, redefining their traditional roles in patriarchal societies by engaging them as WASH advocates, change agents and educators at home and in their communities was key to the program’s success. The trained local women CRPs collected data about WASH and NTDs in their villages, educated their SHGs and local schools, made focused household visits for WASH behaviour change education and NTDs care. We realized that with technology in their hands the CRPs could be so much more effective. The scale up uses digital technology on an android smartphone platform for WASH and NTDs.\r\n•	Another success was the internalization, by various stakeholders of the program, of the interlinkage between WASH and endemic NTDs. Linking disease prevention to WASH in all awareness activities is an impetus for households and communities to adopt recommended WASH behaviours and for communities to demand essential services.\r\n•	The program’s 360-degree approach involved all stakeholders. To generate demand, the program sensitized communities by educating them on their rights and the various government programs available to them. The program also worked with government departments, sensitizing service providers to be responsive and accountable. A big success of the program was getting the various departments of health, water and sanitation, education, rural development to own and participate in the program.\r\n•	A lesson learned was that advocacy needed to be better structured rather than on an ad hoc basis.\r\n','Ripple effect of the program:\r\nThere are 48 leprosy colonies in the Indian state of Andhra Pradesh (AP). The program learnings and achievements were shared with the state Society of Leprosy affected Forum (SLAP – AP). Motivated by the successful community advocacy efforts in the program area, a representation of colony leaders and forum members presented a detailed database of housing, sanitation, drinking water and basic amenities to the concerned districts’ authorities.\r\nThis regular and sustained engagement led to circulars being passed by District Collectors and other authorities to take necessary action and an inter-sectoral convergence task force was formed to see to its implementation. As a result: \r\n•	67 households obtained access to safe water facilities with public taps\r\n•	Roads were constructed in 3 Leprosy colonies\r\n•	17 households could construct individual household toilets\r\n•	A Water tank was constructed in 1 Leprosy colony \r\n•	31 houses in the colonies were repaired as they were in a dilapidated condition.\r\n•	New drainage systems were constructed in 2 Leprosy colonies.\r\n•	Street lights were changed and maintained regularly by the Electricity department in 3 colonies\r\n•	19 households obtained the government ration for monthly dry rations.\r\n','','','','','','Completed','Sunil Anand','27-09-2021 03:15:07 am','Sunil Anand','06-10-2021 06:25:47 am'),(9,1,'American Leprosy Missions','July 2019 - June 2020','','','','','','','','','','','Incomplete','Sunil Anand','05-10-2021 07:47:01 am','Sunil Anand','05-10-2021 07:47:01 am'),(10,2,'Assistive Technology Catalyst Project with IDEAS','July 2020 - June 2021','Significant collaboration is building among Jesus followers involved in reaching out with assistive technology resources to mission hospitals.. Three examples: I was able to help to facilitate a conference put on by Mobility Worldwide that brought some of the key players together.  I ve been able to bring together players for intense conversation about setting up a local plant to assemble and manufacture BeeLine wheelchairs in Kenya to provide the huge needs at Tenwek in Bomet and BethayKids at Kijabe.  I m involved in two collaborative academic studies on how well different types of wheelchairs are working locally, one in Guatemala and one in Kenya. ','As things moved on line due to Covid, I ve \"attended\" and presented at four conferences and multiple collaborative Zoom meetings.  Even online.  The chat box lets one talk privately as well as to the whole group and contacts made have sparked ongoing discussion.  Consistent follow-up, really listening and also praying for those I m in conversations with have been helpful in building more grounded and productive relationships that lead to action.  And honestly, I think this was just something God was intending to do anyway and had the grace to let me be part of his plan.','Care for those with special needs is a rapidly growing aspect of health care as populations age and adults and children with disabilities live longer.  Many countries have some commitment to this but have great difficulty doing much.  Mission hospitals with their large referral base and commitment to medical excellence can be key players, especially since much of the pain expressed by people with special needs and their families is social and spiritual pain.  Mission hospitals with their links to the local church and commitment to spiritual care are in a unique position to effectively use resources.  Disability is a huge community health and social problem. Many of Christ s miracles illustrated the gospel by reaching out to those society regards as broken or useless.  Without the hope of Christ we are all really in that situation.  The assistive technology programs in Kenya at Tenwek and BethanyKids are reaching out to this population which the World Health Organization estimates is 15 to 20% of the overall population. Connecting them to resources in training has an immediate widespread impact on lives.','It s all about people, real relationships with broken people.  Persistence, patience and lovingkindness open doors for collaboration that can go on to benefit many.  I ve found it is of key importance to honour people I may not completely agree with, or who I think could be doing things better.  Working slowly, kindly and patiently to collaborate, praying for those that are part of the conversations, praying with them for direction.\r\nImpatience and a dogmatic attitude can block many open doors.','Videos of conference presentations are available online here: https://www.atcatalyst.org/videos \r\n','','','','','','Completed','Karen Rispin','05-10-2021 01:28:15 pm','Omprakash','06-10-2021 01:13:41 am'),(11,20,'Zimbabwe Association of Church','July 2020 - June 2021','Improvement in treatment of women who screamed cervical cancer positive to 60.8% and they are plans to mop up all those that still needs treatment \r\nImprovement on WASH facilities among the 85 sites \r\nImproved availability of IEC materials and DM type 2 monitoring \r\nReduction on new DM complications ','Diabetes Type 2 programme was supported through EPN but funding ended in March 2021\r\n10 sites supported through ACHAP but funding ended in 2019\r\nIn 2021 ACHAP supported COVID19 infection prevention and control: The project was implemented at 20 mission hospitals with capacity to act as COVID-19 centres. We selected 2 mission hospitals per each of the 10 provinces to participate in this project. ZACH COVID-19 focal person who was trained as Trainer of Trainer (TOT) managed to cascade trainings to one Infection Prevention and Control focal person for each of 20 mission hospitals.  The focal focal person was obliged  to cascade the training to 10 or more of his/her colleagues at the site.\r\nPromote hand washing hygiene: ZACH through ACHAP support assisted church health facilities teams through provision of soap sanitizers and hand washing stations, conducting hand washing demonstrations, and tackling barriers to good hand hygiene\r\nWe still have funds for 75 sites supported through PEPFAR','The programs are complimenting the Ministry of Health and Child Care priorities, following all its systems and policies ','There is need for continued funding as the termination of projects funding affected continuity of activities. This is in reference to the ACHAP and EPN funding already ended ','','','','','','','Completed','Chidzewere Nzou','06-10-2021 06:24:32 am','Chidzewere Nzou','06-10-2021 03:03:33 pm'),(12,14,'LifeNet International','July 2020 - June 2021','In 2020, LifeNet International has observed facilities implementing proper clinical hand washing protocols to reduce infection and save lives have improved from 12% to 87% (7x improvement). Facilities with the ability to save a newborn life at birth through infant CPR have improved from 4% to 90% (22x improvement). Facilities with the ability to save a woman’s life through managing and treating a postpartum hemorrhage have improved from 5% to 93% (18x improvement). These changes in knowledge and behavior changes result in lives saved: 1,233 newborn lives saved through infant CPR; 802 mothers saved through the treatment of a postpartum hemorrhage; and 92,912 safe newborn deliveries. ','LifeNet’s Theory of Change is based on the fundamental logic that change is dynamic, non-linear, and that the change pathways from outputs to outcomes are dependent on a combination of mutually reinforcing and sometimes overlapping activities/interventions. The outcomes achieved through a dynamic change process contribute to LifeNet’s three main objectives of 1) reduced mortality, 2) reduced morbidity, and 3) improved management practices and sustainability for faith-based health facilities.\r\n\r\nKey interventions include: 1) Technical capacity development for healthcare providers (training, equipping, and deploying health workers to address leading causes of death and morbidity). 2) Management capacity building (training health management teams in proven management principles). 3) Supportive supervision through on-site mentoring and coaching. 4) Support with access to essential equipment and pharmaceuticals for health facility partners. 5) Implementation of our digital enablement strategy that focuses on distance learning solutions, virtual support groups, and clinic management tools.','LifeNet strives to work closely with the National Ministries of Health as well as District Health Offices in areas where we have partner health facilities. Our curriculum is in line with MOH recommendations and District/Zonal leaders frequently participate in training sessions. Additionally, LifeNet facilitates joint supervision visits of our partner health facilities with church leadership (as most of our partners are church-run) and MOH officials. Perhaps one of the most direct contributions towards strengthening the government health system is through our robust data management interventions. In addition to helping the individual health facilities accurately and timely record and report health outcomes according to the MOH/DHO guidelines, LifeNet also conducts routine Data Quality Assessments. These assessments look at the accuracy of reporting as well as the accuracy of data entry at the district level providing feedback, mentoring and training to the districts. Upon a recent trip to the DRC, a Zonal Health Director remarked that after only six months, he saw a dramatic increase in four of the MOH-required indicators measuring health outcomes. This is especially remarkable since these indicators represent all health facilities in the entire zone (district) and LifeNet partners with only a handful of facilities in the zone. ','Expansion into two countries over the last year has highlighted some key lessons for LifeNet, including the need to continue standardizing organizational processes for expansion. As a result of the expansion work this year, the programs staff at LifeNet has refined our expansion processes, which will enhance any future expansions over the next few years. We recommend organizations preparing for scale allocate time and resources for standardization of processes—a critical, but easy to overlook, component to successful expansion and replication.','Edith Shukrani, a midwife at Kalagane Health Center in the DRC, shares her experience saving a mother’s life through the postpartum hemorrhage management protocol she learned through LifeNet training: \"I was scared seeing the quantity of blood on the floor. I took courage and searched for the cause of the bleeding but without success. Then, I decided to practice a technique learned during LifeNet training, that of compressing the abdominal aorta while at the same time replacing the fluid loss and preventing the low blood pressure with an infusion of normal saline. The bleeding stopped a few minutes later while doing the technique. I had a feeling of intense joy and satisfaction. I have seen myself like a champion. My nursing colleagues also felt the same as I did and congratulated me immensely for saving the life of this mother. The mother thanked me very much and blessed me abundantly.\" ','','','','','','Completed','Sarah Borger','06-10-2021 09:42:37 am','Sarah Borger','14-10-2021 04:10:53 pm'),(13,27,'Kupenda for the Children','July 2020 - June 2021','Over the past year, Kupenda improved the lives of 73,186 children with disabilities and their estimated 730,000 family members. Although we had to make significant modifications to our strategic plan due to Covid-19, we succeeded in positively impacting our beneficiaries by providing counseling and service referrals as well all food and medication deliveries to the families and children most at risk. We also supported families impacted by disability across Kilifi County and in 7 countries beyond Kenya by linking them to local leaders who we had trained as disability and child advocates. These leaders not only provided counseling, care and referrals for the families in our programs but they also took the initiative to identify more than 300 new children with disabilities who had been neglected by their families and communities and were in need of care. Despite the strains we were facing under the pandemic pressures, we were able to enroll these children in our program and provide them with counseling, care and food or medications if they were in need of these. Hundreds of families also benefited from our support in accessing birth certificates, health insurance and tuition or medical waivers for their children. \r\n\r\nIn addition to these direct service activities, we continued working throughout the year to pursue community- and system-level changes that will make long-term improvements to the lives of children living with disabilities both in and beyond Kenya. These activities included meetings with government officials regarding creation of the Kilifi County Disability Bill (which also includes funding provisions) as well as regular engagement with the cadre of pastors, traditional healers, government officials and parents who we have trained and who are working as disability advocates in their communities. We also continued infrastructure projects to strengthen a special school in Timboni and our Advocacy Center in Gede which together will provide education, services and care to thousands of families impacted by disability in the years to come. \r\nTogether, these holistic interventions produced the following positive trends among our beneficiaries:\r\n•	Sustained or improved health and nutrition among children and their families; \r\n•	Increased access to medications, therapy and assistive devices among children and their families; \r\n•	Improved counseling and care capacity among our parents, caregivers and local leader child advocates;\r\n•	Strengthened NGO and health networks of care and referral pathways for our beneficiary families; and \r\n•	Improved prioritization structures and outreach capacity among our Kenyan staff and local leader child advocates.','','','Virtual Solutions to Support Remote Training: This year, Kenya’s Covid-19 gathering restrictions made it challenging for us to train our field team on the new Child Case Management mobile application, facilitate our planed trainings for local leaders, and conduct the in-person family counseling sessions which are central to our community outreach strategy. Fortunately, we responded by developing 10 training videos and setting up virtual training sessions that take place with our Kenyan team 2 times each week. We also provided virtual technical support and disability trainings for our NGO partners. \r\n\r\nM-health Technology to Facilitate Phone-based Family Counseling and Care: Over the past year, school closures due to Covid-19 restrictions forced our children with disabilities to remain at home with their impoverished families . Because this meant the children were no longer able to access their doctors, teachers or therapists, this posed a threat to their wellness and safety. We dealt with this threat by developing a mobile app which our staff could use when they called families to support Covid-19 screening, service referrals and counseling. This enabled us to ensure families were receiving the care they need during this time. \r\n\r\nA New Matrix to Prioritize Child in Need: During this time, Kilifi County was also in a continued drought with soaring unemployment rates due to the pandemic restrictions and closures. In addition, many families were forced to stop working and stay home to care for their children with disabilities who had been sent home from boarding schools or facilities that had closed. These families were suffering from a lack of food and many were also without access to medications. They called our offices asking for assistance. Many came to ask for our support when we were delivering food in their communities. At times it was overwhelming and posed a significant threat to our children’s health. Fortunately, we were able to develop a prioritization matrix that enabled us to see which families had the greatest need. We also asked our community leaders in the 35 wards of Kilifi to list and prioritize the families impacted by disability in their communities. This informed our food and medication delivery efforts and allowed us to stabilize the families who were in crisis or at high risk for illness or malnutrition. \r\n\r\nLeader Engagement to Maintain our Community Engagement Model: Because of these urgent needs, throughout the year we found ourselves increasingly moving into a direct service model. Since our model is meant to focus on community engagement, we often found ourselves pressed to stay true to that mission when we wanted and needed to deliver food, medication‘s and care to children with urgent needs. Fortunately, as the months went on, we found new ways to engage community leaders, program alumni, and former staff to deliver food and medications and provide counseling, support and referrals the families in their respective wards. This enabled us to return to more of the community empowerment model, which is a more effective and sustainable approach and aligned with our mission.','','','','','','','Incomplete','Jessica Charles','06-10-2021 10:12:45 am','Jessica Charles','06-10-2021 10:12:45 am'),(14,11,'Health Services Corps','July 2019 - June 2020',' In 2020, CHSC staff reported performing life-saving interventions for an average of 4,000 children and 2,500 mothers. During this same time frame, we facilitated training for 500 medical doctors, physical therapists, and nurses internationally.  Our 2020 evaluations revealed 200 children with severe malnutrition were provided high impact care which led to recovery. The training center in Texas saw 408 participants complete varies courses in 2019. ','We have implemented a quarterly survey for reporting and developed strong partnerships with organizations such as Pioneer Christian Hospital in the Republic of Congo and Guinebor 2 in Chad.  These partnerships have opened up a greater opportunity to train local physicians and send a larger amount of long-term medical missionaries. ','Pioneer Christian Hospital and Guinebor 2 have long histories with the national and local governments.   Both hospitals hold the first and highest surgical professionals in their countries.   ','Community Development is vital for the survival and health of a medical mission hospital ','','','','','','','Completed','Joel White','06-10-2021 01:53:56 pm','Joel White','06-10-2021 01:53:56 pm'),(15,15,'Rural Health Services (RHS) of Sudan','July 2020 - June 2021','More SBAs are rolled into the health workforce and more births are now attended by SBAs.','Adoption of free antenatal services and charging only the cost of consumables and medications used during child delivery.','* Increasing the number of SBAs  and births attended by SBAs in the country.\r\n* Increasing the availability of SBAs in the rural Nigeria communities.','* Turn around of ANC attendees and birth in the hospital by introducing free ANC.\r\n* Demonstrated that correct use of PPE is the surest way health workers stay free from infectious diseases.\r\n','','','','','','','Completed','Johnson Diara','07-10-2021 04:00:45 pm','Johnson Diara','07-10-2021 04:01:03 pm'),(16,4,'Christian Academy of African Physicians','July 2020 - June 2021','Graduates of CAAP programs are providing clinical excellence at consultant level and administrative stability in their sites of service.\r\nWe facilitated extending MedSend scholarship support to the newest CAAP program at ELWA Hospital, Liberia for all 13 residents.','As above, facilitating the extension of scholarship programs, doubles the number of residents receiving support to allow the residents to have adequate living support.','CAAP programs are producing primary care leaders who serve in the rural, more underserved areas of their country where post-graduate trained doctors have not traditionally been serving.','Leadership development requires continuity of mentors over extended time.  Faculty development curriculum production and faciltiating short term faculty was curtailed because of the COVID outbreak. ','','','','','','','Completed','Bruce Dahlman','10-10-2021 11:41:31 pm','Bruce Dahlman','10-10-2021 11:41:31 pm'),(17,4,'Christian Academy of African Physicians','July 2019 - June 2020','Graduates of CAAP programs are providing clinical excellence at consultant level and administrative stability in their sites of service.  We facilitated extending MedSend scholarship support to the newest CAAP program at ELWA Hospital, Liberia for all 13 residents.','As above, facilitating the extension of scholarship programs, doubles the number of residents receiving support to allow the residents to have adequate living support.','CAAP programs are producing primary care leaders who serve in the rural, more underserved areas of their country where post-graduate trained doctors have not traditionally been serving.','Leadership development requires continuity of mentors over extended time.  Faculty development curriculum production and facilitating short term faculty was curtailed because of the COVID outbreak. ','','','','','','','Completed','Bruce Dahlman','10-10-2021 11:45:17 pm','Bruce Dahlman','10-10-2021 11:45:17 pm'),(18,10,'Digital African Health Library Service','July 2020 - June 2021','Because we have partnered with a commercial tech supplier of the app, we were vulnerable to their potential collapse.  However we are still hopeful that, despite the major setback, we can continue with our 30x30 plans and objectives by focusing the Indextra app specifically for this Momentum project, assuming continued partnership with Oxford Publishing and other resource providers. ','As above, the Director of Sales was unable to make meaningful contacts within Kenya much less in surrounding East African countries. ','The current strategy is to work more closely with country level Ministries of Health or NGOs that are implementing  programs that require clinical decision support capability. ','Because we have partnered with a commercial tech supplier of the app, we were vulnerable to their potential collapse.  However we are still hopeful that, despite the major setback, we can continue with our 30x30 plans and objectives by focusing the Indextra app specifically for this Momentum project, assuming continued partnership with Oxford Publishing and other resource providers. ','','','','','','','Completed','Bruce Dahlman','11-10-2021 12:40:30 am','Bruce Dahlman','11-10-2021 12:40:30 am'),(19,10,'Digital African Health Library Service','July 2019 - June 2020','COVID sharply curtailed all of our intended work in the 2021-2021 time frame.  No additional institutional accounts were able to be started and therefore no specific measurable impact made. ','As above, the Director of Sales was unable to make meaningful contacts within Kenya much less in surrounding East African countries. ','The current strategy is to work more closely with country level Ministries of Health or NGOs that are implementing  programs that require clinical decision support capability. ','Because we have partnered with a commercial tech supplier of the app, we were vulnerable to their potential collapse.  However we are still hoepful that, despite the major setback, we can continue with our 30x30 plans and objectives by focusing the Indetra app specifically for this Momentum projecte, assuming continued partnership with Oxford PUblishing and other resource providers. ','','','','','','','Completed','Bruce Dahlman','11-10-2021 12:42:13 am','Bruce Dahlman','11-10-2021 12:42:13 am'),(20,10,'Digital African Health Library Service','Target 2030','COVID sharply curtailed all of our intended work in the 2021-2021 time frame.  No additional institutional accounts were able to be started and therefore no specific measurable impact made. ','As above, the Director of Sales was unable to make meaningful contacts within Kenya much less in surrounding East African countries. ','The current strategy is to work more closely with country level Ministries of Health or NGOs that are implementing  programs that require clinical decision support capability. ','Because we have partnered with a commercial tech supplier of the app, we were vulnerable to their potential collapse.  However we are still hoepful that, despite the major setback, we can continue with our 30x30 plans and objectives by focusing the Indetra app specifically for this Momentum projecte, assuming continued partnership with Oxford PUblishing and other resource providers. ','','','','','','','Completed','Bruce Dahlman','11-10-2021 12:44:40 am','Bruce Dahlman','11-10-2021 12:44:50 am'),(21,13,'IMA World Health','July 2020 - June 2021','1a.	ACHAP continues to gain visibility and opportunities. They have been able to present work undertaken with support from IMA in international settings, such as WHO briefings.										\r\n1b.	ACHAP now has a French-speaking staff person who is helping to develop the relationship between ACHAP and ACHAP members in Burkina Faso through IMA-supported Covid Round #3.										\r\n1c.	Christian health associations supported through IMA have been able to provide stronger support to member hospitals, upgrade technical knowledge/skills, and strengthen community linkages and visibility through outreach and communications campaigns										\r\n','2a.	IMA was able to use internal resources from public fund-raising to support additional COVID activities through ACHAP and member CHAs.										\r\n2b.	IMA technical support was provided in proposal-related activities.	\r\n2c.  IMA built on long-standing partner relationships to develop and support activities.									\r\n','3a.	Christian Health Associations work with their national Ministries of Health on national priorities and follow MOH guidance in the provision of health care.										\r\n3b.	Christian Health Associations provide a significant percentage of the health care in many countries, with an even higher percentage of the care available in\r\nrural areas. Equipping them to respond to COVID through risk communications (health workers, religiious leaders, and community at-large), training of health care workers in relevant areas, and provision of critical supplies have enabled participating CHAs to be effective responders to COVID within the national framework.										\r\n','4a.	Christian Health Associations are capable partners who are eager for support to improve their outreach and effectiveness.										\r\n4b.	Even modest levels of funding can go a long way, especially when relying on local resources for training and supplies. 										\r\n4c.	\"Bottom up\" / responsive /customized plans are the most successful','										\r\n','','','','','','Completed','Rebecca Waugh','12-10-2021 11:56:45 am','Rebecca Waugh','12-10-2021 12:07:56 pm'),(22,17,'St. John s Medical College, Bangalore','July 2020 - June 2021','There is a serious dearth in professional knowledge and practice among the personnel employed in the mission hospitals, both rural and urban. Most of them are learning things by practice. There is no common platform for their sharing of good practices. Our in-puts were taken seriously by the lion share of participants who attended our training on Materials Management. In the second half of the three months course, we made them to share what they translated into practice. It disclosed that many of the scientific practices in purchase and stores management are yet to reach the mission hospitals. The sharing by the participants also helped others to learn the ways in which they could try introducing good practices in their replicable situations. \r\nThe pre and post training tests conducted proved that the participants learned a lot from the training. Some of them have challenges in translating what they learned into practice. We have offered them a handholding through online means. \r\nOur interns went to the ten mission hospitals identified for NABH entry level accreditation to conduct preparatory audit. All the teams helped the mission hospitals in identifying the then existed gaps in their practices and policies in comparison with the e NABH standards. This was reported from the hospitals as a very great support for them to have immediate preparation for the assessment with lesser number of potential gaps. The testimonials given by the administrators proved that our interns were capable enough to do such jobs.\r\nOne of our interns loved the missionary service rendered by the hospital she visited for assessment and later joined the hospital and quality executive at the request of the hospital. She is now working towards leading the hospital towards NABH accreditation.   ','1.Training in Materials Management , purchase and stores management for the doctors and employees working in mission hospitals. Two training sessions of three month duration was done for nearly 30 to 40 participants in each. CMAI took the responsibility of organizing the IT support and getting participants. St.John s   provided the resource persons and materials. Experts from missionary healthcare and corporate hospitals formed our team of experts. This was a wonderful combination which could give a lot of quality in-puts to the participants.\r\n2.Ten identified hospitals who were nearing the date of their NABH entry level assessment were visited by our interns in teams of two and they made preparatory audits with respect to NABH standards. Although the exercise did not yield much in four hospitals, six hospitals benefitted much from this. Duncan hospital Rexaul and Madhepura mission hospital were very much benefitted from this as the two hospitals had their official assessment  by NABH team in the week followed. The training we had given to the interns to do the audit built their capacity as auditors and quality experts; their quality helped the hospitals to learn more and better prepare for formal audit.  \r\n','1.The training offered to the personnel in the purchase and Pharmacy division of the hospitals will certainly contribute towards optimizing the cost of materials and medicines, better stores management, inventory control and wastage reduction. Efficient and effective management of materials will reduce the overall cost of healthcare service delivery and the benefit of the same will be passed on to the poor and needy. The country will also benefit from reduced wastage of materials and drugs. \r\n2.The technical assistance given to the mission hospitals in remote locations to get NABH accreditation would certainly help the hospitals in quality improvement of their services and practices with a better focus on patient safety and quality. The accreditation assures the general public about the quality of the service delivered in such facilities. The myth of \"high quality care only with high technology\" could be challenged by the mission hospitals if they could get accredited by the national agency even without very high cost and high-end technology. It solves many of the concerns raised by the government, the public and policy makers about the quality of service offered by mission hospitals which are mostly charitable in nature.    ','\r\n\r\nPOSITIVES\r\n1.Collaboration between organization (for example CMAI and St.John s) can bring magical remedies to many of the challenges faced by our mission hospitals. \r\n2.The scientific knowledge and practice of the personnel in mission hospitals need to be updated. Often they find it difficult to go away from their workplaces for training. This could be solved by online means also. \r\n3.If quality input is given, our staff can learn many things and improve our services.\r\n4.Students could be sent to the field to learn more and their enthusiasm could be beneficial for the mission hospitals.\r\nNEGATIVES\r\n1.People at the top level of the mission hospitals need to attend to the training needs of their staff. \r\n2.Some of the hospitals have very poor quality staff who are below trainable capacity. \r\n ','An intern who was sent to a mission hospital for making quality audit of the hospital was deeply impressed by the work of the hospital and the attitude of the team there that she joined the hospital later as a staff and is now working for the quality improvement of the hospital. (her personal experience could be shared later)','','','','','','Completed','John Varghese','15-10-2021 07:40:49 am','John Varghese','15-10-2021 07:40:49 am'),(23,18,'Eglise Methodiste du Togo','July 2020 - June 2021','The advent of the Covid 19 pandemic meant a lot of the routine activities at the three health centres were suspended and instead our efforts were directed towards sensitization and prevention of the spread of the virus within the catchment areas of the three  health centres. \r\nThe most significant changes undertaken were the training of the staff and community workers to combat the spread of the Covid 19 virus. \r\nAnother significant change was the use of PPE s by the centre staff','The most important activities were -\r\n1. Organisation of workshops to train key personnel;\r\n2. The supply of resources such as hand washing equipments, gloves, soap, portable water tanks\r\n3. Health promotion activities including radio broadcasts, door-to-door visits, printing of information leaflets and other educative materials','The massive campaign on awareness and prevention of the spread of the Covid 19 virus, was undertaken to support the efforts of the government of Togo, to combat the spread of the virus within the country, and especially to protect the vulnerable age group (the 60+ age group). The campaign was undertaken under the over arching activities of the Church to ensure the safety of her congregants and the population in general, during this pandemic. \r\nThus the provision of resources, the training of staff and community leaders, health promotion and production of publicity materials, were all geared at supporting and complementing the policies and activities of the government of Togo to prevent and minimise the spread of the pandemic and thus to keep the population safe.','Some of the key lessons from this situation was to always have a contingency plan in place for unforeseen circumstances. The finances of the centres took a big hit due to the pandemic and the lockdowns imposed by the government of Togo. The centres struggled considerably and some of the staff were owed salary arrears by the centres. Though no one could have adequately prepared for the pandemic, a contingency plan would have identified key people within the teams, and their responsibilities in the event of emergencies. The response times would have been quicker. ','','','','','','','Completed','Michael Tettey','15-10-2021 09:20:49 am','Michael Tettey','18-10-2021 06:16:18 am'),(24,3,'World Renew','July 2020 - June 2021','This year in the various country projects we saw an increase in partnerships with local MOH s, churches and other NGOs.  We also saw more capacity building of local volunteers who are meeting with neighbors each day.  The Governments in some countries have also engaged the volunteers in Covid 19 communication and immunization work.  Another significant change is that more communities have asked to be involved - and health behaviours are improving per annual KAPS/LQAS surveys.','Training and capacity building for volunteers was a key focus in all countries.  Also, the building of capacity in the apex groups (care groupos, People s Institutions, etc.). All programs also conducted annual surveys and then worked with the communities to develop plans based on results.  Programs remain focused to the 1000 day goal of reducing stunting, and improving maternal and child health. Partners and staff carried out SBC activities following barrier analysis on health behaviours that proved more difficult to change. Another important activity was working closely with Government and other NGOs for collaboration.   ','All are directly linked to the Governments overall health strategies.  In countries, like Bangladesh for example, staff and partners and apex groups participate in Government health meetings at the local level.  Data from our programs also feed in to the Government health data.','Robust monitoring and evaluation is important - tracking results and then adapting program activities based on a review of results.  Barrier analysis has also proved to be very effective in understanding what the key barriers are.  We also found it is important to continually increase knowledge and practice of staff - this year 3 workshops were conducted for all Baker Health staff - LQAS, Barrier Analysis, and nutrition.  These were followed up with practicums in the field - eg. crarying out a LQAS following the workshop.','These will be shared as soon as the annual report is completed (by end of October).  We are preparing an infogram featuring our Niger program this year.','','','','','','Completed','Nancy Tenbroek','17-10-2021 12:30:05 am','Nancy Tenbroek','17-10-2021 12:30:05 am'),(25,6,'Christian Health Association of Malawi (CHAM)','July 2020 - June 2021','1. Increased advocacy due stakeholders engagement \r\n2. Improved indicator reporting into DHIS2 for facility programs data \r\n3. Increased presence of CHAM in National Decision Making forums  (e.g. Presidential Taskforce on COVID 19, CMST Board, Country s Coordinating Mechanism on Global Fund etc.) \r\n','1. Recruited some additional facility staff in response to COVID 19 pandemic, supported by MOH\r\n2. Trained facility Data/HIMS officers on DHIS2 management and shared them with DHIS2 electronic user manuals which resulted into improved reporting\r\n3. Filling of vacant position of CHAM ED (i.e. May 2020)\r\n\r\n\r\n ','1. They positively influence Service Level Agreement (SLA) programing for scaling up of Essential Health Package (EHP)\r\n2. Helps in bringing some donor funded projects to CHAM - PEPFAR\r\n3. Encourages better coordination between CHAM facilities and DHOs at council level','1. Better coordination with MOH helps in improving health service delivery (i.e. Additional staff recruitment in response to COVID 19 pandemic, increased commodities (i.e. Equipment, Drugs and supplies) for service delivery to CHAM facilities)\r\n\r\n','','','','','','','Incomplete','Gift Werekhwe','19-10-2021 04:18:04 am','Gift Werekhwe','19-10-2021 04:41:03 am'),(26,32,'World Council of Churches','July 2021 - June 2022','I think there is increasing excitement and enthusiasm among ecumenical for stronger church-based health promotion programmes. The link between faith and health is long argued and understood theologically. What is missing are implementation programmes that are effective, sustainable and acceptable in the different cultural, socio-economic and confessional contexts.\r\nIt appears that the WCC s Health-Promoting Churches model is able to resonate and inspire a wider contexts of churches and church health professionals to new possibilities of effective programming.','Publication of the Health-Promoting Churches handbook and publicizing it within the network.\r\nWe have also engaged senior church leaders to raise the profile of ','-','-','','','','','','','Completed','Mwai Makoka','24-10-2021 11:19:11 am','Omprakash','28-09-2022 11:49:30 pm'),(27,5,'The Christian Health Association of Kenya (CHAK)','July 2020 - June 2021','There are increased use of the Calibration and maintenance services of the Workshop to achieve optimum returns to their facilities.\r\nThere was increased awareness of radiation safety.\r\n\r\nThe facilities we served were willing to stick to theservice schedules and also naintenance of the infrastructure and eqquipment','The licensing of the radiation dose monitoring equipment and the way we rolled it out was timely','Health systems strengthening','','','','','','','','Incomplete','Joseph Rugut','25-10-2021 02:11:09 pm','Joseph Rugut','26-10-2021 02:17:22 am'),(28,11,'Health Services Corps','July 2020 - June 2021','We have seen 23 newborns receive nutritional care in an extremely isolated area.    ','Christian Health Service Corps, established three new health initiatives in the reporting year.  The programing includes one malnutrition program, a cleft palate surgical project and a quality & safety program. ','These programs are actively improving three major areas of the national health systems; Community development, Specialty Acute care medicine and long term development of health care systems.   The malnutrition re-feeding program cares for mothers, babies and families not only at the stage of severe malnutrition but the weeks after diagnosis & re-entry into the community (Home).  The Surgical program will build up the specialized care within the country of operation.   The Quality & Safety program brings evidence based practices to mission hospitals around the world.  ','Ask if there are any current operations or groups performing your activities.  If so, how can you partner or imitate them.   Ask the local community \"Has anyone tried to do this before?\".  ','','','','','','','Completed','Joel White','15-11-2021 03:40:34 pm','Joel White','15-11-2021 03:40:34 pm'),(29,12,'Hezekiah Health Foundation','July 2020 - June 2021','1. The privileged rich few in the community are beginning to take advantage of the project to help the poor through their donations and time to discuss the way forward. Becoming their brother s keeper.\r\n2. Medical professionals are beginning to use the platform as an opportunity to volunteer their services for free among the poor.\r\n3. Beneficiaries are beginning to come for frequent checkups. CHAP is becoming an answer to out-of-pocket payment. \r\n4. Community stakeholders now believe that they can provide healthcare for their people instead of waiting for the government.\r\n5. Pooled risks as means for community health financing is gaining acceptance\r\n6. Nothing can be so fufilling seeing pregnant women and children under 5 accessing Healthcare promptly.\r\n\r\n  ','1. Pay-for-loved one premium. We encouraged their sons and daughters in the cities to pay for their own back at home the insurance premium and to also donate.\r\n2. Sensitization of the communities\r\n3. Setting up the management: BoTs, Step-down/Wards Coordinators.\r\n4. Using retired but able medical personnel such as nurses/midwives to cut cost  ','National Health Insurance Scheme is established to provide affordable health care to citizens. But since is was established in 1999, it was only able to cover about 18 percent. And mostly the formal sector. This is where HHF/CHAP project comes in handy making a huge difference. Though very little for now, when compared to NHIS itself with all the resources and legislative backing it is a reasonable contribution. NHIS found ours as stations for the study Commhunity-based Social Health Insurance.  so States have started their State health Insurance program and policies favors the informal sectors, MNCH and PHC. ','Engaging government agencies require high-level advocacy, at least in Nigeria s experience. This comes with the resources needed for logistics and organizing programs.\r\nNever, therefore, depend on the promises of government agencies as it never comes as promised or when expected.  \r\nWe have learned however that FB/communal effort can be a starting point for effective primary healthcare delivery system.','','','','','','','Completed','Hezekiah Abah Jonah','26-04-2022 12:36:44 pm','Hezekiah Abah Jonah','26-04-2022 12:36:44 pm'),(30,12,'Hezekiah Health Foundation','July 2021 - June 2022','The community has resilient. The resolve by some key stakeholders towards primary healthcare delivery at the grassroots is very encouraging. This is demonstrated in their commitment to pay premiums for relatives and the less privileged. Also, their attitude to volunteering their time for ward-level meetings and skills to sustain the project is a significant change considering what they were when we started.','Training of Wards Coordinators and Board members and mobilization, sensitization, and their contribution s management ','The 2015 National Health Act signed into law by President Goodluck Jonathan made every provision for what HHF and the communities are doing. NHIS for instance are coming around to understudy our system and structure. They are also fine-tunning and making suggestions on how best it can be done. This shows CHAP/MHAs is complementing their regulatory works. And since they are still interested in PW/CU5 and still send in stipend as subsidy it shows national health systems is better off for it. The Local Government Authorities Health Department are beginning to collaborate with us in Orokam and Emoriko espercially.  ','We have learned to intensify effort in the direction of resource mobilization and using local retirees to scale up services. \r\nAlso, if we can team up with the community to form Mutuals they are better equipped to decide their fate politically. Our MHAs is gradually becoming a platform for community development talks espercially in the political years. For instance, the Benue State government invites me to make a contribution to the Benue State Health Insurance Scheme using leasson learnt from Orokam MHA ','Christian Aids in collaboration with Benue State Government organized a public hearing leading to the formation State Health Insurance Scheme, and HHF was invited to present an address on how MHAs in communities can be integrated.\r\nShortly before the pandemic, we wrong a proposal to the National Communication Commission and major GSM providers to issue us a SIM Code that will enable our subscribers/members pay prenium using their mobile calls. Though this requires huge investment and separate operating licence, it could be easy in the future or in another country.  ','','','','','','Completed','Hezekiah Abah Jonah','29-04-2022 08:48:25 am','Hezekiah Abah Jonah','29-04-2022 08:48:25 am'),(31,12,'Hezekiah Health Foundation','July 2019 - June 2020','1. Communities can be mobilized to achieve anything provided they were made to understand the benefit.','Mobilization and sensitization of stakeholders and setting up the structure: selecting wards representatives and staffing','NHIS has a community based health insurance program and desk. They have interest interest and provides technical supports','There is resources in every community of people to help them solve their problems. The art of mobilization and sensitization is key to harnessing existing human and financial resources available. ','','','','','','','Completed','Hezekiah Abah Jonah','29-04-2022 10:07:17 am','Hezekiah Abah Jonah','29-04-2022 10:07:17 am'),(32,12,'Hezekiah Health Foundation','July 2022 - June 2023','1. the MHA members believe and bounce back despite the ravaging experience of the pandemic. \r\n2. Brotherly love was strengthened than ever as the well to do pay for the less privileged\r\n3. BoTs members give sacrificially in their services than in the previous years.  Barr. Paul Edeh for instance gives the allowances for staff at Okam MHAs from February 2022 to December 2023 ','Sensitization and report of the impact of the project so far. Good management of available resources.','The 2015  National Health Act signed by  President Goodluck Jonathan shortly be he left office was designed to favor PHC. NHIS for instance comes to collect data and advice where necessary. This is an indicator that the program is relevant to their formation and study of how best to approach the Community Health Insurance Program, which they have a department. ','The project has a promise of subsidy from the National Health Insurance Scheme, NHIS. The was at the onset a great motivation for the host communities and for us at HHF. This subsidy never comes as promised and when they do, it is a minor fraction of what is expected. This is really discouraging. During the pandemic, HHF approached the National Centre for Disease Control to help provide preventive equipment such as sanitizers, and nose masks, and to sponsor community sensitization. This was not considered.   so our assumption that there will be government policies that will address the primary health insurance need is still very far. Though every over 60 billion naira allocated to NHIS for informal sector health insurance, but accessing the same for the purpose is still a difficult task. ',' Christian Aids and Benue State did a collaborative Town Hall consultative meeting towards the formation of Benue State Health Insurance Scheme. HHF was invited to share experience on how Okam MHA has fair to guide the State government on CBHI. By the Grace of God, our work in Orokam is still their reference point.\r\n  ','','','','','','Completed','Hezekiah Abah Jonah','29-04-2022 10:46:53 am','Hezekiah Abah Jonah','29-04-2022 10:46:53 am'),(33,7,'Christian Medical Association India (CMAI)','July 2020 - June 2021','Building of strong local networks -  In India health is a State subject and the State leadership has specific plans related to healthcare services across all its districts. Mission hospitals from the Catholic and Protestant church reached out to each other to support and provide comprehensive healthcare for Covid 19 as per instrucution of their local district authorities. \r\nMore involvement by the church - Church is the ownwer of 80+% of the mission hospitals. They understood the hospital needed to be supported and they reached out in different ways.\r\nWorking with the Government - The local and central government were important partners and stakeholders during the pandemic and this was a very postive significant initiative. Contribution of the Christian Healthcare network was constantly made visible, even through a letter to the respected Prime Minister who responded and called for a face to face meeting with the representaive of the Christian Coalition for Health.','','','','','','','','','','Incomplete','Priya John','05-05-2022 11:05:15 pm','Priya John','05-05-2022 11:05:15 pm'),(34,37,'Muslim Family Counselling Services','July 2020 - June 2021','Male faith leaders are now fully engaged in health promotion activities in target communities','Community Health Education outreaches, use of community worship centres and review meetings ','Our intervention contributes to health improvement and outcomes at local level ','To ensure  ownership, success and sustainability all relevant community actors needs to be fully engaged and involved at all aspects of a programme','','','','','','','Completed','Mohammed Bun Bida','28-07-2022 06:30:27 am','Mohammed Bun Bida','28-07-2022 06:30:27 am'),(35,30,'World Relief','July 2022 - June 2023','','','','','','','','','','','Incomplete','Edwin Sam','28-07-2022 08:45:07 am','Edwin Sam','28-07-2022 08:45:07 am'),(36,21,'Blessings International','July 2020 - June 2021','We are able to identify where there is a lack of access to medicines and where there is a significant disparity in pricing. ','As a result of Covid-19, organizations felt an incredible strain in their existing supply chains thus making them open to new partnerships and analysis. \r\nAlso, we were able to fundraise toward the cost of freight and provide free export shipping. This benefit lifted the burden on the recipient of the essential medicines. ','Reliability in access to medicine was critical during Covid-19. A continuous rotation of our inventory at our FDA approved facility, provided consistency and long expiration dates which is greatly needed sustain and strengthen healthcare systems. ','Forecasting is critical. It is essential to retain an appropriate amount of medicines with long expiration dates to ensure preparation for unseen circumstances such as a pandemic which will inevitably disrupt the supply chain. ','','uploads/July 2020 - June 2021_cid21_id1.pdf','','','','','Incomplete','Laura Berry','28-07-2022 10:32:03 am','Laura Berry','28-07-2022 10:32:03 am'),(37,21,'Blessings International','July 2021 - June 2022','We continue to make the greatest impact at providing longer expiration dates so the medical center does not need to continually purchase or search the supply chain for inventory. \r\nWe are able to fulfill this necessity in the supply chain as a result of our inventory model.\r\nOur model at Blessings International includes procuring the medicines, vitamins, and medical supplies for our inventory so that we are able to respond quickly to the needs of our healthcare partners. This model ensures consistency and long expiration dates. We  do not take any donated medicines into our inventory which protects our partners from short dated medicines. \r\n\r\nLastly, we implemented free export shipping during Covid-19. We will continue this service to our partners. By removing the burden of paying for freight allows our partners to stretch their precious resources. ','We implemented the procurement model early on in our 40 years in existence. For free export shipping we continued to fundraise and apply grant funding toward the cost of freight.','Blessings International has an excellent service making access to medicines a reality. This is a result of the consistency in the supply chain as a result of our procurement model and free export shipping.','To scale up, a pooled procurement model provides strength in numbers. \r\n\r\nThe one challenge we continue to see in the area of Access to Medicine in the 30x30 program is the inability to network with other 30x30 members or CCIH members. This is a result of not having the right forum to discuss our work, concepts for reducing cost, and increasing regulatory compliance procedures. ','','HTV PDF.pdf','','','','','Completed','Laura Berry','10-08-2022 10:03:34 am','Laura Berry','10-08-2022 10:03:34 am'),(38,13,'IMA World Health','July 2021 - June 2022','- ACHAP s relationship with and value to member CHAs is expanding as additional CHAs benefit from ACHAP capacity-strengthening activities supported by IMA.  \r\n- With IMA support, ACHAP has completed a new Strategic Plan for 2022-2026.  The previous one was 2016-2020, so this update is important for identifying and aligning with current opportunities and capacities.\r\n- As the primary implementer of an IMA project, \"Promoting COVID-19 Vaccine Equity through Faith-Based Networks in Africa\" (COV-FaB) (back-donor, Osprey Foundation), ACHAP has been able to invest significant resources in two selected CHAs (ZACH, CHASL) to position them for more strategic/extensive involvement with their respective MOHs in increasing vaccine demand and delivery.\r\n','- IMA worked closely with ACHAP in developing the proposal to the Osprey Foundation for COVID-19 vaccination work plus capacity-strengthening of CHAs for future health emergencies, making approximately $1.4m available to ACHAP for implementation through 8 selected CHAs (ZACH and CHASL plus 6 to be launched in the last half of 2022.)\r\n- IMA invested significant TA in working with ACHAP on developing a MEAL plan and appropriate tools for monitoring and evaluating the COV-FaB project.\r\n- IMA has also committed internal resources to capacity-strengthening activities for ACHAP and the CHAs such as the ACHAP CHA Capacity-Strengthening project (benefiting 7 CHAs), encouraged ACHAP to use the CCIH-developed OCA for this work, and collaborated with CCIH to develop an optional add-on to the OCA that would look specifically at the meaning/value of faith identity in these CHA s life and work.\r\n','- COV-FaB is explicit in guiding participating CHAs to engage with their respective MOHs to determine how they can best support MOH COVID-19 vaccination activities.  In the case of Zimbabwe, ZACH was already engaged as an MOH partner and is expanding geographically.  In the case of Sierra Leone, engagement in COVID-19 vaccination campaigns was initiated in conjunction with this grant.  In both cases, the MOH has expressed appreciation and enthusiasm for CHA engagement.\r\n- Through IMA s work with ACHAP on a COVID response, we were able to gather data from 11 participating CHAs on their members/assets and contribute this to the documentation work of the \r\n','- Both larger/more-established CHAs and smaller/younger ones are hungry for resources that will allow them to support their member organizations and engage with their MOHs on health priorities and can make significant contributions even with modest levels of resources. \r\n- The global health crisis associated with COVID exposed weaknesses/gaps in health systems that we can now focus on as opportunities to strengthen these systems, preparing for health emergencies in the future.\r\n','','uploads/July 2021 - June 2022_cid13_id1.pdf','','','','','Completed','Rebecca Waugh','11-08-2022 11:50:40 am','Rebecca Waugh','15-08-2022 11:20:44 am'),(39,15,'Rural Health Services (RHS) of Sudan','July 2021 - June 2022','Many deliveries and maternal health services are now handled by SBAs and the outcomes are quite encouraging','Training of community health extension workers to proficiency in reproductive, maternal and child health skills.','The number of births attended by skill birth attendants filter into the national targets.','In view of the increasing brain drain; task shifting which forms the bedrock upon which our community health training rests can be scaled up to other service areas.','','','','','','','Completed','Johnson Diara','15-08-2022 02:55:29 pm','Johnson Diara','15-08-2022 02:55:29 pm'),(40,36,'Medical Benevolence Foundation','July 2021 - June 2022','','','','','','','','','','','Incomplete','Donna Childress','15-08-2022 05:20:30 pm','Donna Childress','15-08-2022 05:20:30 pm'),(41,5,'The Christian Health Association of Kenya (CHAK)','July 2021 - June 2022','Meeting the equipment quality standards is enabling facilities to get NHIF accreditation and pass MOH inspection.','1. Initiated a Dosimetry Lab.\r\n 2. Initiated a quality assurance/quality control lab for calibration and maintenance. Equipment standards and accreditation was attained by more facilities through our quality assurance/quality control  reports to KNRA',' The HCTS Engineers and technicians represent CHAK at Kenya Bureau of Standards (KEBS) giving technical advice setting the standards on: \r\nA. Hospital equipment and devices (TC136), \r\nB. Dosimetry, radiation metrology and NDT testing (TC 106)\r\nC. Heating, refrigeration and air conditioning (TC 092)\r\nD. In-vitro diagnostics and Lab equipment – TC 175  \r\nThe HCTS departments complements the national health systems in rolling out set standards to users \r\nThe HCTS complements MOH efforts in assessing facilities for compliance.','It is important to seek partnerships to complement efforts for equipment and supplies, especially during a pandemic. \r\nPartnership with training institutions is important for enhanced capacity building in specialised services e.g. critical care nursing','CHAK partnered with Gradian Health Systems who offer specialized trainings in critical care and  and emergency surgical services using oxygen and ventilation technology at an affordable rate suitable to low and middle income countries. \r\nCHAK also continued its long term relationship with EMKF who provide funding for oxygen manifold solutions in emergency departments at selected needy facilities. \r\nThe HCTS workshop was contracted to implement oxygen manifold installation in selected facilities including a county referral hospital in Turkana (Lodwar County Referral Hospital), Makueni county ( Makindu Subcounty Hospital) and Kajiado county (Kajiado County Referral Hospital) among others.','uploads/July 2021 - June 2022_cid5_id1.pdf','uploads/July 2021 - June 2022_cid5_id2.pdf','uploads/July 2021 - June 2022_cid5_id3.pdf','','','Incomplete','Joseph Rugut','29-08-2022 02:23:20 pm','Joseph Rugut','29-08-2022 02:23:24 pm'),(42,5,'The Christian Health Association of Kenya (CHAK)','July 2022 - June 2023','Meeting the equipment quality standards is enabling facilities to get NHIF accreditation and pass MOH inspection','1. Initiated a Dosimetry Lab. \r\n2. Initiated a quality assurance/quality control lab for calibration and maintenance. Equipment standards and accreditation was attained by more facilities through our quality assurance/quality control  reports to KNRA',' The HCTS Engineers and technicians represent CHAK at Kenya Bureau of Standards (KEBS) giving technical advice setting the standards on: \r\nA. Hospital equipment and devices (TC136), \r\nB. Dosimetry, radiation metrology and NDT testing (TC 106)\r\nC. Heating, refrigeration and air conditioning (TC 092)\r\nD. In-vitro diagnostics and Lab equipment – TC 175  \r\nThe HCTS departments complements the national health systems in rolling out set standards to users \r\nThe HCTS complements MOH efforts in assessing facilities for compliance.','It is important to seek partnerships to complement efforts for equipment and supplies, especially during a pandemic. \r\nPartnership with training institutions is important for enhanced capacity building in specialised services e.g. critical care nursing','CHAK partnered with Gradian Health Systems who offer specialized trainings in critical care and  and emergency surgical services using oxygen and ventilation technology at an affordable rate suitable to low and middle income countries. \r\nCHAK also continued its long term relationship with EMKF who provide funding for oxygen manifold solutions in emergency departments at selected needy facilities. \r\n\r\nThe HCTS workshop was contracted to implement oxygen manifold installation in selected facilities including a county referral hospital in Turkana (Lodwar County Referral Hospital), Makueni county ( Makindu Subcounty Hospital) and Kajiado county (Kajiado County Referral Hospital) among others.','uploads/July 2022 - June 2023_cid5_id1.pdf','uploads/July 2022 - June 2023_cid5_id2.pdf','uploads/July 2022 - June 2023_cid5_id3.pdf','','','Incomplete','Joseph Rugut','29-08-2022 02:25:52 pm','Joseph Rugut','29-08-2022 02:25:52 pm'),(43,9,'Dalton Foundation','July 2021 - June 2022','Our work in Haiti has continued to grow in size and impact across the country despite the current crisis in Haiti which is affecting our operations on multiple levels. One main area of growth this year has been with our number of workshops/conferences on leadership and community development. As online platforms have become more commonplace this has opened the door for more activity online. Allowing these activities to be available to anyone with an internet connection. \r\n\r\nOur Equipping the Caregiver program is one of our most impactful programs. This year we were able to continue this project and provide kits to doctors, nurses and healthcare facilities located in the Sud Department of Haiti this year. The kits include basic diagnostic equipment desperately needed to perform basic diagnostics. Providing these kits to healthcare professionals enables them to use the knowledge they have to perform at a higher level and see more patients. \r\n\r\nThe number of facilities having key supplies and equipment provided has grown dramatically over the past 12 months as well. \r\n\r\nWe have continued our work of standardizing medical equipment in medical facilities concentrated in Northern Haiti.  \r\n','The continued use of the Zoom platform has enabled us to host meetings, webinars and other workshops for a wider group of participants. With the ongoing instability in Haiti hosting in person events has become increasingly difficult. \r\n\r\nWhatsApp is a great resource we use daily in our international communication as well. We have created a Haiti Health Network group with over 250 participants. Over 95% of whom are Haitian medical professionals. This group is used to share information, links to trainings and webinars but also used by the healthcare professionals themselves when they have diagnostic questions, or supply chain concerns. \r\n\r\nCollaboration and partnership is the key to our current and ongoing success. The Equipping the Caregivers event we hosted in the South was planned in coordination with a partner organization in the area. With their assistance we were able to bring together a large group of healthcare professionals for an in person training and distribute these much needed kits at the same time. We continue to invest our time and resources into our partners to strengthen the healthcare system in Haiti and provide much needed tools for medical professionals to perform at a higher level. In our three month follow-up 100% of those who participated said they can better serve their community because of the kits and were all in agreement that the diagnostic equipment helps them provide better care. Many shared being able to provide care to more patients weekly because of the equipment. \r\n','We involve the Haitian Ministry of Health (MSPP) in all our projects and have developed strong relationships with the local MSPP representatives in Haiti. We work with both government hospitals and private hospitals providing some of the medical equipment and supplies needed to care for patients. We are registered as an NGO in Haiti under the name Haiti Health Network following all the government regulations and registrations processes. \r\n\r\nWe keep the Ministry of Health updated regularly on our projects in Haiti as well. We want to come alongside the MSPP to support and improve the healthcare services available whenever possible. \r\n','Key lessons learned - collaboration, communication, consistency and humility are vitally important to success and growth\r\n\r\nCollaboration: When organizations work together, so much more is able to be accomplished. Getting to know the landscape of what is already happening in the country is also extremely beneficial. There is no reason to duplicate efforts, instead combine and strengthen efforts to a much greater return. \r\n\r\nCommunication: Clear and consistent communication is always helpful to building trust, confidence and partnerships. This included communicating failures, mistakes made and lessons learned from those mistakes. We can prevent others from making those same mistakes only if we are willing to share our experiences. \r\n\r\nConsistency: We have learned that consistency promotes confidence and growth. We stay as consistent as possible with our roundtable meetings, so our network knows we show up and will be there if they do too. Sometimes showing up is difficult, and consistency feels unimportant and  repetitive but it is important for relationships, trust and growth. \r\n\r\nHumility: Collaborating with other organizations requires humility. When you are willing to put in the time, effort and funding into a project that may never be credited to you or your organization you step into a place where true partnership is able to take place and real impact and growth can happen. This requires humility on a higher level, and unfortunately not all organizations or individuals are able to operate in this way. Our experience has been that not everyone is interested in collaboration, but those who are are worth finding and investing in. \r\n','I m including an excerpt from a testimonial from one of our partners: Soaring Unlimited Haiti joined the Haiti Health Network 5 years ago when it was really just beginning to expand beyond Cap Haitien in northern Haiti in order to encompass the entire country. As Haiti Health Network has continued to grow and expand over these years, bringing new healthcare participants from across Haiti into its fold, Soaring has been pleased to become increasingly engaged and thankful to benefit from the coalition that HHN has built—even in the midst of the pandemic and political and social unrest in Haiti.\r\n \r\nIn fact, it has largely been HHN’s response to, first, Covid—and then the impact of the violent unrest—that helped organizations like Soaring get more engaged and linked us to other potential partners.\r\n \r\nWe at Soaring have recently completed a new birth facility on our medical clinic campus: we are partnering with BackPackEMR to supply our electronic medical records system for the facility; we’ve hired the new midwives to staff it from among graduates of Midwives for Haiti; and have partnered with Hands Up for Haiti for refresher training for our newly hired staff. Konbit Sante has helped us navigate the needed understanding and resources for security protection in light of the increasing dangers in Haiti, and GTA Consulting has offered coaching to me as an agency director and training to one of Soaring’s educational program groups in Haiti. All of these organizations are collaborators and partners that we have met through our engagement in the Haiti Health Network.  Read her full write up here: https://thedaltonfoundation.org/2022/08/making-connections-with-the-haiti-health-network/\r\n \r\nIn partnership with Direct Relief we were able to distribute Midwife kits to over 90 organizations. I m including a few quotes from those who received kits. \r\n \r\n\"We are so thankful for these kits. I want to thank those who made it possible for us to receive this Midwife Kit. I was shocked to see the contents when I opened the box. This will be very helpful for us.\"\r\n \r\n\"Thank you for thinking of those of us here in Haiti working in Healthcare. This kit will help us so much. Thank you.\"\r\n','','','','','','Completed','Rachel Bernard','30-08-2022 03:37:21 pm','Rachel Bernard','31-08-2022 01:43:07 pm'),(44,24,'Ecumenical Pharmaceutical Network','July 2021 - June 2022','a)Bridging of HR gap-  EPN offers scholarships to member countries and has managed to ensure a total of 21 beneficiaries from 8 different Countries were enrolled on diploma or Degree programs through the Scholarship.\r\n7 Candidates enrolled for bachelor s Degree, whereas 14 candidates enrolled for Diploma Course in Pharmacy. This is impressive as it ensures the knowledge and skills are improved and addresses the human resource gap experienced in church health facilities.\r\n \r\nb) Increase in online Training (On the Job)- As a way of mitigating the impact of COVID-19, EPN ensured that the healthcare workers can continue to build their capacities through training despite Covid restrictions. One of the innovative strategies was shifting physical trainings to online through the development of an online platform which enabled all the healthcare workers from the member health facilities’ staff within the Christian health associations and DSOs to access various courses for free and train from any location. The healthcare workers are trained on: Essentials of Pharmaceutical Practice including Medicine supply management and communication as well as in Leadership & Governance, Financial management and sustainability, Counselling and Psychosocial Support, COVID-19 Clinical Management, Infection Prevention and Control, Pharmacovigilance, Rational Drug Use, Robust and Sustainable Resource Mobilization which trains better utilizing and maximizing on existing resources., Covid-19 Vaccination course,  After completion of their courses, the trainees are required to develop action plans highlighting some of the areas they plan to improve within their facility /Drug Supply Organization (DSO) in which EPN monitors the progress of implementation of these action points. \r\nThe platform has been well received with a total of 429 enrolled participants and has witnessed high completion rates \r\n\r\nc) Increase in new prequalified suppliers through the pooled procurement initiative following the floating of this year s tender. This was also accompanied by an increase in information sharing regarding supplier performance, and quality of service delivery through the evaluation processes.\r\n\r\nd) Increase in postmarketing surveillance and vigilance to substandard  medicines  through minilab activities e.g Following the identification of substandard Quinine, AL, in DRC, the Governement issued an alert across the country halting distribution/use of these identified products \r\n\r\ne) Through the  implementation of the IPC project in Sierraleone, Active IPC committees were established in 6 health facilities as well as an improvedment in hand hygiene practices, HAIs tracking system were also established in 4 of the facilities. The project was well appreciated by each  hospital management who ensured that  a budget  was set aside for continous implemenation of IPC activities','a)Increase in minilab activities i.e sampling and analysis of medicines\r\nb)Free online training \r\nc)Offering of scholarships \r\nd)Identification of IPC Champions for each of the 6 facilities in SL & Appointment of IPC Committee Members',' In general, the projects are tailored in a way to support country health systems but focus on the faith-based health system. One example: Through the minilab project, focussing on identifying S/F medicines, the EPN is connected with the government agencies on QA. The collaboration has recently led to the signing of an MoU between CHAL and the government agency in Liberia.  ','The key lesson learned during this new digital age is that even if a project is implemented mostly remotely, a project visit at the beginning helps a lot in creating ownership of the project at the implementing partner and also helps explain navigate the required technology once they had a physical introduction. Participation levels increased a lot after a physical visit. ','','','','','','','Completed','Damian Kibet','31-08-2022 10:34:40 am','Damian Kibet','31-08-2022 04:38:38 pm'),(45,18,'Eglise Methodiste du Togo','July 2021 - June 2022','1. La Covid19 a bouleversé les habitudes de vie de toutes les communautés presque. Si toute la communauté scientifique s’accorde à dire que le changement de comportement n’est pas une chose aisée en matière de santé, force est de constater que dans le cas de la pandémie du Covid19, c’est encore plus difficile. Cependant dans le courant des années 2021 – 2022, dans 15 zones différentes au Togo, le PMDCT a doté les communautés des dispositifs de lavage des mains (150 DLM), des masques, des gels hydroalcooliques, du savon liquide. Pour un bon usage de ces matériels, des formations et des sensibilisations porte à porte sont organisées à l’endroit des communautés. Une enquête réalisée dans les zones d’intervention en octobre 2021 montre que 2 personnes sur 3 au moment de l’enquête adoptent au moins deux mesures de prévention contre le Covid19 (lavage des mains, la distanciation physique, le port de masque…) ; ce qui n’était pas le cas avant le début des interventions.\r\n2. Une autre enquête réalisée en avril 2022 montre après les sensibilisations et les formations organisées par le PMDCT sur les avantages de la vaccination contre le Covid19, sur un échantillon de 361 personnes, que 86,15% pensent que la vaccination contre le Covid19 aide à combattre la pandémie et sont disposés à se faire vacciner. Ce changement de comportement positif a amené 78,67% des enquêtés à recommander le vaccin à d’autres personnes de la communauté qui ne sont pas encore vaccinées.\r\n3. L’implantation des postes de lavage des mains dans les communautés ainsi que leur utilisation par la population ont réduit les maladies diarrhéiques de plus de 15% dans certaines zones et dans l’ordre de 10% dans d’autres zones selon les responsables des formations sanitaires des zones de couverture de l’organisation. Le même constat est réalisé à la fin de l’année 2021 pour les maladies pulmonaires telles que les rhinites allergiques, les crises d’asthme, les toux ; au moment où le port des masques était de rigueur dans le pays.\r\n','Beaucoup de facteurs sont à mettre en évidence dans cet aboutissement observé en matière de changement :\r\n1.	L’appui régulier des centres de santé dont dispose l’EMT/PMDCT ; mais aussi l’appui de plusieurs centres publics de santé (12 unités de soins périphériques et deux hôpitaux appuyés en 2021 - 2022) en matière de matériels, formations, et sensibilisations. En 2022, 14 centres de santé ont bénéficié des formations organisées par le PMDCT pour leur personnel de santé, pour les agents de santé communautaire, pour les pairs éducateurs et pour les responsables des organisations communautaires. Et les sensibilisations réalisées ont touché directement 14694 personnes.\r\n2.	Les renforcements de capacités de toute l’équipe du PMDCT et en particulier des soignants participent à des offres de qualités en matière de soins et de promotion (Consultations curatives, service de maternité, de vaccination, des visites à domiciles ou encore des IEC).  \r\n3.	La collaboration avec l’Etat et l’implication des leaders communautaires dans les activités favorisent un échange d’expériences et potentialisent les changements souhaités.\r\n','Le système de santé publique est un ensemble complexe où la santé collective dépend fortement de la santé individuelle. En d’autres termes, un seul cas de maladie mal géré est susceptible d’affecter et de chambouler tout le système sanitaire d’un pays ou d’une zone géographique plus importante. C’est la leçon principale à tirer de l’histoire des épidémies et récemment de la pandémie du Covid19.\r\nAinsi la santé et le bien des autres et de tout le monde doit attirer la conscience de toutes les organisations dans leur prise de décision et doit être au centre de la réalisation des activités. Partant de cet angle, les activités du PMDCT ont pour but de contribuer à l’atteinte des objectifs de l’Etat pour le bien-être sanitaire de la population. Il est facilement remarqué que sur les 17 centres de santé appuiés par le PMDCT durant cette période, 14 sont des centres publics nationaux et seuls 3 appartiennent à l’organisation. Outre les appuis réguliers qui constituent un pilier de contribution au système de santé national ; les données épidémiologiques enregistrées par le PMDCT sont régulièrement rapportées au système national de santé en vue d’une bonne surveillance épidémiologique. La collaboration étroite des centres de santé de l’EMT/PMDCT avec les centres de santé publics et leur implication dans toutes les activités sanitaires organisées par l’Etat en témoignent largement sur leur contribution aux politiques nationales de santé et l’amélioration de la santé des populations de leurs aires sanitaires.\r\n','L’avènement du Covid19 a permis au monde entier et particulièrement au PMDCT de faire beaucoup de nouvelles expériences.\r\nLe PMDCT a eu à s’adapter à l’organisation des activités à distance via l’internet.\r\nEn effet, certaines réunions physiques sont suspendues au profit de celles sur internet. De la même façon l’équipe du projet planifie les activités, les partage aux autres acteurs par internet. En suite la coordination, le suivi, et le rapportage sont également faits via internet. Pour ce faire, le PMDCT a organisé en amont une formation à son personnel et aux différentes équipes des projets sur les logiciels nécessaires pour cette nouvelle approche. Au début il y avait des doutes sur la réussite des activités qui sont organisées et réalisées par l’intermédiaire de l’internet. Mais à la fin le constat est positif. Cette nouvelle approche dans l’organisation permet d’aller plus vite et de gagner du temps d’une part et d’autre part, elle se révèle plus économique.\r\n','Le travail de sensibilisation et de mobilisation effectué par le PMDCT a marqué profondément les autorités sanitaires au Togo et a attiré l’attention de nombreuses personnes au-delà des frontières. Il s’agit de la mobilisation de la communauté de Zouvi autour des activités de vaccination contre le Covid-19 qui a amené le personnel du centre de santé de Zouvi, l’un des trois centres de l’EMT/PMDCT à visiter un couvent traditionnel lors d’une séance de stratégie avancée où après enseignement et éducation, le féticheur chef du couvent et ses adeptes ont adhéré à l’idée de vaccination et ont accepté se faire vacciner sur champ en public. Il s’agit de la première fois où une équipe de vaccination a eu l’audace et le courage de rentrer dans un tel endroit aussi sacré traditionnellement. Ce geste très audacieux et réussi du personnel du centre de santé de l’EMT/PMDCT de Zouvi a suscité l’appréciation et des jets de fleurs des autorités sanitaires du pays. ','','','','','','Completed','Lazare Ahli Kouadjo','31-08-2022 01:35:22 pm','Lazare Ahli Kouadjo','31-08-2022 01:35:22 pm'),(46,29,'World Hope International','July 2021 - June 2022','-	Solar Power System:  The hospital now has access to power for 24 hours since 2021.  The hospital no longer relies on the generator and is saving cost on fuel each month.  \r\n-	GIK: The hospital received gift in-kind donation for the medication and health supplies (pampers, skin lotion, etc.) to serve the patients.  \r\n-	Financial System:  The hospital hired a new accountant to oversee the financials as well as add new processes and software.  \r\n-	Human Resources:  The hospital promoted a staff to oversee human resources and expanded to specialty services.  Through the extra saving in fuel for the generator and medication, the hospital has been able to provide bonuses to staff.  In addition, the hospital created an independent process for staff advancement requests.   ','-	Solar Power System: WHI, in partnership with Build Health, added 70 additional solar panels to the hospital.\r\n-	GIK:  WHI, in partnership with Map International, donated medication worth USD X.  \r\n-	Financial System:  The hospital has hired a new financial staff in December 2021.  Numerous meetings with WHI, as the lead partner, has helped towards financial stability and sustainability.\r\n-	Human Resources:  The hospital has promoted a new HR staff in early 2022 as well as specialist, including internist, pediatrician, and OB/GYN in late 2021.','Overall, due to these changes, people are coming from outside catchment areas to receive quality care at LaGonave Hospital.  \r\n-	Solar Power System: The hospital can provide access to services 24/7, specifically C-sections… In addition, the national laboratory gifted the hospital with lab equipment with the prerequisite of the hospital having electricity all day.  The hospital is able to provide comfortable rooms with air conditioning, especially the birthing room, which has increased the number of births in the hospital.  \r\n-	GIK: Donated medication provided medication and treatment options that were less expensive and not locally available.  The donation also saved the hospital funds to purchase medication.  \r\n-	Financial System:  The hospital is able to have monthly up-to-date financial information to make informed decisions.  \r\n-	Human Resources:  The bonus provided to the staff has increased loyalty and motivation to stay and work at the hospital.  The staff advancement has been a huge help to support their families, with school starting in September.   ','GOOD partnership is critical!  Through the years, the hospital has had many partners – some impose a solution to a perceived problem without understanding the context or offer resources with a take it or leave it attitude.  However, World Hope International has been the opposite.  WHI has engaged the hospital from the very beginning to help us identify the challenges and conceptualize the solutions through the SWOT analysis.  Through this, the hospital has learned the importance of surveillance, including monitoring and evaluation of services for improvement.  WHI has also encouraged the hospital to think creatively and innovatively about solutions and build together as a team to realize the vision for the hospital.  One of the ways is through training and supporting staff.  Lori, the new accountant, states, “They push me and support me.  We don’t have meetings; we find solutions and make them happen.  In this environment, I am growing in many different ways”. WHI is active in engaging collaborative partnerships and resources as part of the solution.','','','','','','','Completed','Tae Symons','31-08-2022 01:39:12 pm','Tae Symons','31-08-2022 01:39:22 pm'),(47,9,'Dalton Foundation','July 2020 - June 2021','Our work in Haiti has continued to grow in size and impact across the country despite the current crisis in Haiti which is affecting our operations on multiple levels. One main area of growth this year has been with our number of workshops/conferences on leadership and community development. As online platforms have become more commonplace this has opened the door for more activity online. Allowing these activities to be available to anyone with an internet connection. \r\n\r\nOur Equipping the Caregiver program is one of our most impactful programs. This year we were able to continue this project and provide kits to doctors, nurses and healthcare facilities located in the Sud Department of Haiti this year. The kits include basic diagnostic equipment desperately needed to perform basic diagnostics. Providing these kits to healthcare professionals enables them to use the knowledge they have to perform at a higher level and see more patients. \r\n\r\nThe number of facilities having key supplies and equipment provided has grown dramatically over the past 12 months as well. \r\n\r\nWe have continued our work of standardizing medical equipment in medical facilities concentrated in Northern Haiti.  \r\n','The continued use of the Zoom platform has enabled us to host meetings, webinars and other workshops for a wider group of participants. With the ongoing instability in Haiti hosting in person events has become increasingly difficult. \r\n\r\nWhatsApp is a great resource we use daily in our international communication as well. We have created a Haiti Health Network group with over 250 participants. Over 95% of whom are Haitian medical professionals. This group is used to share information, links to trainings and webinars but also used by the healthcare professionals themselves when they have diagnostic questions, or supply chain concerns. \r\n\r\nCollaboration and partnership is the key to our current and ongoing success. The Equipping the Caregivers event we hosted in the South was planned in coordination with a partner organization in the area. With their assistance we were able to bring together a large group of healthcare professionals for an in person training and distribute these much needed kits at the same time. We continue to invest our time and resources into our partners to strengthen the healthcare system in Haiti and provide much needed tools for medical professionals to perform at a higher level. In our three month follow-up 100% of those who participated said they can better serve their community because of the kits and were all in agreement that the diagnostic equipment helps them provide better care. Many shared being able to provide care to more patients weekly because of the equipment. \r\n','We involve the Haitian Ministry of Health (MSPP) in all our projects and have developed strong relationships with the local MSPP representatives in Haiti. We work with both government hospitals and private hospitals providing some of the medical equipment and supplies needed to care for patients. We are registered as an NGO in Haiti under the name Haiti Health Network following all the government regulations and registrations processes. \r\n\r\nWe keep the Ministry of Health updated regularly on our projects in Haiti as well. We want to come alongside the MSPP to support and improve the healthcare services available whenever possible. \r\n','Key lessons learned - collaboration, communication, consistency and humility are vitally important to success and growth\r\n\r\nCollaboration: When organizations work together, so much more is able to be accomplished. Getting to know the landscape of what is already happening in the country is also extremely beneficial. There is no reason to duplicate efforts, instead combine and strengthen efforts to a much greater return. \r\n\r\nCommunication: Clear and consistent communication is always helpful to building trust, confidence and partnerships. This included communicating failures, mistakes made and lessons learned from those mistakes. We can prevent others from making those same mistakes only if we are willing to share our experiences. \r\n\r\nConsistency: We have learned that consistency promotes confidence and growth. We stay as consistent as possible with our roundtable meetings, so our network knows we show up and will be there if they do too. Sometimes showing up is difficult, and consistency feels unimportant and  repetitive but it is important for relationships, trust and growth. \r\n\r\nHumility: Collaborating with other organizations requires humility. When you are willing to put in the time, effort and funding into a project that may never be credited to you or your organization you step into a place where true partnership is able to take place and real impact and growth can happen. This requires humility on a higher level, and unfortunately not all organizations or individuals are able to operate in this way. Our experience has been that not everyone is interested in collaboration, but those who are are worth finding and investing in. \r\n','I m including an excerpt from a testimonial from one of our partners: Soaring Unlimited Haiti joined the Haiti Health Network 5 years ago when it was really just beginning to expand beyond Cap Haitien in northern Haiti in order to encompass the entire country. As Haiti Health Network has continued to grow and expand over these years, bringing new healthcare participants from across Haiti into its fold, Soaring has been pleased to become increasingly engaged and thankful to benefit from the coalition that HHN has built—even in the midst of the pandemic and political and social unrest in Haiti.\r\n \r\nIn fact, it has largely been HHN’s response to, first, Covid—and then the impact of the violent unrest—that helped organizations like Soaring get more engaged and linked us to other potential partners.\r\n \r\nWe at Soaring have recently completed a new birth facility on our medical clinic campus: we are partnering with BackPackEMR to supply our electronic medical records system for the facility; we’ve hired the new midwives to staff it from among graduates of Midwives for Haiti; and have partnered with Hands Up for Haiti for refresher training for our newly hired staff. Konbit Sante has helped us navigate the needed understanding and resources for security protection in light of the increasing dangers in Haiti, and GTA Consulting has offered coaching to me as an agency director and training to one of Soaring’s educational program groups in Haiti. All of these organizations are collaborators and partners that we have met through our engagement in the Haiti Health Network.  Read her full write up here: https://thedaltonfoundation.org/2022/08/making-connections-with-the-haiti-health-network/\r\n \r\nIn partnership with Direct Relief we were able to distribute Midwife kits to over 90 organizations. I m including a few quotes from those who received kits. \r\n \r\n\"We are so thankful for these kits. I want to thank those who made it possible for us to receive this Midwife Kit. I was shocked to see the contents when I opened the box. This will be very helpful for us.\"\r\n \r\n\"Thank you for thinking of those of us here in Haiti working in Healthcare. This kit will help us so much. Thank you.\"\r\n','','','','','','Completed','Rachel Bernard','31-08-2022 01:40:57 pm','Rachel Bernard','31-08-2022 01:40:57 pm'),(48,14,'LifeNet International','July 2021 - June 2022','In 2021, LifeNet health facilities provided 5,723,400 improved patient visits, including 50,716 cases of pediatric pneumonia treated, 830,385 cases of malaria, and 59,699 cases of diarrhea- leading causes of death among children less than five years of age. Moreover, there were 120,577 mothers who experienced safe labor and delivery leading to 2,789 mother and newborn lives saved. While saving lives, the health facilities were able to better track and manage their finances leading to an 18% average revenue growth from 2020-2021 among LifeNet partner healthcare facilities.','LifeNet’s Theory of Change is based on the fundamental logic that change is dynamic, non-linear, and that the change pathways from outputs to outcomes are dependent on a combination of mutually reinforcing and sometimes overlapping activities/interventions. The outcomes achieved through a dynamic change process contribute to LifeNet’s three main objectives of 1) reduced mortality, 2) reduced morbidity, and 3) improved management practices and sustainability for faith-based health facilities.\r\n\r\nKey interventions include: 1) Technical capacity development for healthcare providers (training, equipping, and deploying health workers to address leading causes of death and morbidity). 2) Management capacity building (training health management teams in proven management principles). 3) Supportive supervision through on-site mentoring and coaching. 4) Support with access to essential equipment and pharmaceuticals for health facility partners. 5) Implementation of our digital enablement strategy that focuses on distance learning solutions, virtual support groups, and clinic management tools.','LifeNet strives to work closely with the National Ministries of Health as well as District Health Offices in areas where we have partner health facilities. Our curriculum is in line with MOH recommendations and District/Zonal leaders frequently participate in training sessions. Additionally, LifeNet facilitates joint supervision visits of our partner health facilities with church leadership (as most of our partners are church-run) and MOH officials. Perhaps one of the most direct contributions towards strengthening the government health system is through our robust data management interventions. In addition to helping individual health facilities accurately and timely record and report health outcomes according to the MOH/DHO guidelines, LifeNet also conducts routine Data Quality Assessments. These assessments look at the accuracy of reporting as well as the accuracy of data entry at the district level providing feedback, mentoring and training to the districts. \r\n\r\nTwo recent examples of MOH coordination in the DRC are below.\r\n\r\nDuring the workshop of validation of the LifeNet management curriculum in July 2018, the MOH team was impressed by the management tools and said that they intended to build on it and design harmonized tools for the province. In Q1 of 2022, the MOH received external funding to to implement this plan and design management tools that will be utilized by health facilities in the whole South-Kivu province. The LifeNet DRC Country Director met with the \"Financing and Partnership Analyst\" at the MOH, he expressed their appreciation for our support. Upon finalization of the tools, the MOH trained their own staff on the tool and also invited the LifeNet DRC Management trainers along with the MOH staff for four days at no cost. \r\n \r\nIn July of 2022, the LifeNet DRC M&E Specialist presented the results of the LifeNet Data Quality Audits at the South-Kivu District Health Office Monthly Review meetings upon invitation from the District health Officer. Despite multiple errors being found, the participants which included DHO staff and health facility leadership appreciated the detailed and documented findings that highlighted systemic challenges without bias. Following this meeting, joint training sessions with the DHO and LifeNet were scheduled to address the findings. \r\n \r\nOther recent examples of the close collaboration between LifeNet and Ministries of Health include the accreditation of LifeNet’s curriculum as continuous professional development courses for nurses and Midwives in Ghana and LifeNet’s participation in a newly formed Ugandan MOH technical working group in preparation for the National Safe Motherhood conference to be held later this year.','All LifeNet country offices prepare a Monthly Operating Review which is then presented and discussed with the country leadership team and HQ allowing for a comprehensive review the operations and performance in each country. Topics and metrics tracked and discussed monthly include: \r\n-LifeNet values and how they are being lived/implemented \r\n-Country financials\r\n-Activity plans and progress\r\n-Fundraising metrics\r\n-Training and program outputs and outcomes\r\n-Quality assurance review\r\n-Learning review, including: discussion on performance data and recommendations and adaptations that have been made or need to be made\r\n-Digital enablement review, including: outputs and program review\r\n','Please see the attached document, \"LifeNet 2022 Stories and Photos\".\r\n','','','','','','Completed','Sarah Borger','31-08-2022 05:10:16 pm','Sarah Borger','31-08-2022 05:23:39 pm'),(49,28,'National Medical Services Consortium (NMSC)','July 2022 - June 2023','Additional to providing supply chain supports we are helping small mission hospitals in rural locations to arrange healthcare camps with the help of large hospitals.This helps small hospitals to serve the local community with the help of expert doctors from large mission hospitals.\r\n\r\nSecondly we are helping small mission hospitals to refer patients to large hospitals to provide speciality treatments and this helps patients to avoid confusion identifying the right treatment centres for tertiary care and the this make sure poor patients receive affordable healthcare treatments.\r\n\r\nAnd few two large mission hospitals agreed to provide free doctors to doctor consultation to provide advises to general practitioners to help patients with right medication.\r\n\r\n','We are developing a digital platform to connect doctors and patients to provide this additional services.','This will support governments digital health initiative.','Positive experience from this additional project.\r\nGeneral practitioners would like to connect with specialist doctors for  advises , which many of the mission hospitals does not have this opportunity.\r\nMission hospitals are interested to get help manage referral to tertiary hospitals, which majority of small hospitals does not have this service.\r\n\r\nNegative lessons\r\n\r\nIn supply chain most of the hospitals buy different brand products and consolidating the requirements of multiple mission hospitals are a big challenge.\r\nCollecting data from small hospitals is also a big challenge.Many hospitals in rural location do not maintain patients records or prescription data.This is affecting the data collection.  \r\n','','','','','','','Completed','Shinto Jacob','04-09-2022 03:44:00 am','Shinto Jacob','04-09-2022 03:44:00 am'),(50,3,'World Renew','July 2021 - June 2022','The most significant change is that mothers are adapting new behaviours - antenatal visits, pre natal and post natal care and increased breast feeding for young children.  Facility births also increased, with the exception of during the COVID-19 pandemic which kept women away from the clinics due to fear of transmission.  A big change is that husbands are now more involved in caretaking of their children and being supportive partners during antenatal care and childbirth, and in many of the countries there are some identified as champions in supporting their wives in pregnancies.  A big change is also that there are local community health volunteers who go door to door counselling mothers, and also helping to link them to the local clinics to get the antenatal services and care they need as well as facility deliveries. We have also seen changes in the formation of clusters and community groups that help in increasing the sustainability.  Each country has community health workers that work in communities to support mothers and children to get the care that they need.','The most important activities have been the training of the Community Health Workers / Volunteers in all of the countries we programmed in.  Also, counselling includes the husbands and mothers-in-law where possible to be supportive of pregnant women going to antenatal care, postnatal care, and delivering with a skilled health professional. It is because of these two factors that the programs saw significant change in increased antenatal visits by pregnant women.','All programs work to link communities and pregnant and lactating women to their local health centeres or Government centers.  In Bangladesh, the CHVs are part of the health department meetings and also the Government staff help to ensure that people come to community clinics. People s Institution leaders network with the government health centers for accessing their health services for the children and pregnant mothers and participated in campaigns organized by the local government and for participants to receive services for ANC, micro nutrients, vitamin-A and other required treatment. As a result of this networking, mothers and children are receiving health services from the skilled health personnel and 96.9% of mothers of under 2 children received counselling support from the health centers. In Kenya, the CHVs are a formal part of the health system even though they are volunteers. In Kenya the project facilitated the Health outreach sessions with facility Ministry of health staff which ensured that beneficiaries received all antenatal, postpartum and child health services. The County Health Department provided the immunization antigens, deworming tablets as well as Vitamin A and Nutritional supplements to be used during the health outreach sessions. The linkages this program makes are an important part of our approach and help with program sustainability and ensuring we are working with the existing systems and structures.','All programs work to link communities and pregnant and lactating women to their local health centers or Government centers.  In Bangladesh, the CHVs are part of the health department meetings and also the Government staff help to ensure that people come to community clinics. People s Institution leaders network with the government health centers for accessing their health services for the children and pregnant mothers and participated in campaigns organized by the local government and for participants to receive services for ANC, micro nutrients, vitamin-A and other required treatment. As a result of this networking, mothers and children are receiving health services from the skilled health personnel and 96.9% of mothers of under 2 children received counselling support from the health centers. In Kenya, the CHVs are a formal part of the health system even though they are volunteers. In Kenya the project facilitated the Health outreach sessions with facility Ministry of health staff which ensured that beneficiaries received all antenatal, postpartum and child health services. The County Health Department provided the immunization antigens, deworming tablets as well as Vitamin A and Nutritional supplements to be used during the health outreach sessions. The linkages this program makes are an important part of our approach and help with program sustainability and ensuring we are working with the existing systems and structures.','We will have some to share very soon from our communications department!  Will send along!','','','','','','Completed','Julie Cominos','03-10-2022 04:30:00 pm','Julie Cominos','03-10-2022 04:30:34 pm'),(51,4,'Christian Academy of African Physicians','July 2021 - June 2022','Graduates from CAAP affiliated programs continue to take on leadership roles - assistant and now lead program coordinators of residencies; clinical services director over 500 staff at a larger hospital; CEO of a participating teaching hospital; among others.\r\n','Our scholarship partner, MedSend continues to expand their support, adding additional Scholars in 2021 and 2022. A  one week collaborative CAAP-PAACS Faculty Development Conference was held in Nairobi in June for 25 CAAP affiliated faculty and personnel.  Eight African program leaders were trained as consultants to be available to assist additional startups of programs.\r\n','Graduates not only serve within the church health systems but are deployed in District/County hospitals as well, again often in leadership roles as Medical Officers in Charge, etc.\r\n','Development of quality post-graduate training programs is heavily dependent upon engaged faculty who are willing to be available when clinical decision making is most crucial.  Programs thus far have been blessed with such faculty - recruiting additional faculty to stabilized existing programs and starting new ones is a rate limiting step in most settings.  We are finding that programs that follow the University Masters Degree model have significant issues with providing the resources and administrative support for residents to complete their research these project.  Alternatives to this burdensome path are needed. \r\n','','','','','','','Completed','Omprakash','10-10-2022 04:30:21 am','Omprakash','10-10-2022 04:30:21 am'),(52,7,'Christian Medical Association India (CMAI)','July 2021 - June 2022','More communication channels between the CMAI Headquarters and CMAI regions, and more interaction within the region itself. A sense of synergy and working towards a common purpose.','Use of .technology and focused communication protocols to communicate each training or lecture. Networking strategically','CMAI contributes mainly to the education structures and systems of the country in Nursing, Allied Health, Chaplains and Doctors','The government interactions are key. At the local, block, district , state and national level, knowledge of what the government is focusing on and planning is important. Many changes are envisaged in the near future regarding education of healthcare professionals.','Our reports are available on the website - cmai.org\r\n','','','','','','Completed','Priya John','11-10-2022 09:57:21 pm','Priya John','11-10-2022 09:57:21 pm'),(53,24,'Ecumenical Pharmaceutical Network','July 2022 - June 2023','a)Bridging of HR gap-  EPN offers schorlarships to member countries. In the current cohort , diploma and master schorlarships will be issued to EPN member countries. A total of 35 diploma schorlarships will be issued as well as 5 master schorlarship . This is impressive as it will ensures the knowledge and skills are improved  and addresses the human resource gap experienced in church health facilities. \r\n\r\nb) Increase in onlne Training (On the Job)- As a way of mitigating the impact of COVID-19, EPN ensured that the healthcare workers can continue to build their capacities through training despite Covid restrictions. One of the innovative strategies was shifting physical trainings to online through the development of an online platform  which enabled all the healthcare workers from the member health facilities’ staff within the Christian health associations and DSOs to access various courses for free and train from any location. The healthcare workers are trained on: Essentials of Pharmaceutical Practice including Medicine supply management and communication as well as in Leadership & Governance, Financial management and sustainability, Counselling and Psychosocial Support, COVID-19 Clinical Management, Infection Prevention and Control, Pharmacovigilance, Rational Drug Use, Robust and Sustainable Resource Mobilization which trains better utilizing and maximizing on existing resources., Covid-19 Vaccination course,  After completion of their courses, the trainees are required to develop action plans highlighting some of the areas they plan to improve within their facility /Drug Supply Organization (DSO) in which EPN monitors the progress of implementation of these action points. Currently a course on antimicrobial stewardship which provides an understanding of  basic principles of appropriate antibiotic use and strategies of combating AMR, especially focusing on managing Antimicrobial Stewardship program and its activities in healthcare facilities that promote rational use of drugs.\r\nThe platform has been well received with a total of 822  enrolled participants and has witnessed high completion rates.\r\n\r\nc) Increase in new prequalified supplier through the pooled procurement initiative following the floating of this year s tender. This was also accompanied by an incraese in information sharing regarding supplier performance, quality of service delivery through the evaluation processes.\r\n\r\nd) Increase in postmarketing surveillance and vigilance to substandard  medicines  through minilab activities e.g Following the identification of substandard Quinine, AL, in DRC, the Governement issued an alert across the country halting distribution/use of these identified products.\r\ne) Through our advocacy project on Covid-19 Vaccination, a call of action was developed (as attached below) and we have witnessed acceptance by the religious leaders of the vaccines and  to contribute to the reduction of vaccine hesitancy within the community.',' In general the projects are tailored in a way to support country health systems, but focus on the faith based health system. One example: Through the minilab project, focusing on identifying S/F medicines, the EPN is connected with the government agencies on QA. The collaboration has recently led to the signing of an MoU between CHAL and the government agency in Liberia.  ','In general the projects are tailored in a way to support country health systems, but focus on the faith based health system. One example: Through the minilab project, focussing on identifing S/F medicines, the EPN is connected with the government agencies on QA. The collaboration has recently led to the signing of an MoU between CHAL and the goverment agency in Liberia. \r\n- In addition to this , we have an AMR project implemented in Nigeria , Malawi and Kenya and one of the main activities is regular surveillance of antibiotic use in facilities by the stewardship commitees . The data collected in the facilities are being shared with the National Antimicrobial Stewardship Committees in the relevant committees. This will enable the government to have updated surveillance data that will help them monitor the consumption of antibiotics nationally as well as have a better understanding on the progress of implementation of some strategic indicators in the National action plan ','The key lesson learned during this new digital age is that even if a project is implemented mostly remotely, a project visit at the beginning helps a lot in creating ownership of the project at the implementing partner and also helps explain navigate the required technology once they had a physical introduction. Participation levels increased a lot after a physical visit. \r\nOnline training targeting participants from sub Saharan  Africa(SSA) is faced by certain challenges that can be managed e.g. Lack of money to purchase internet bundles for training, poor network, lack of digital phones/personal laptops, overreliance of hospital desktops hence taking longer to finish the course.','','EPN 30x30 Commitments.xlsx','','','','','Completed','Damian Kibet','15-02-2023 10:50:54 am','Damian Kibet','15-02-2023 10:57:56 am');
/*!40000 ALTER TABLE `qualitative` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tempreptbl`
--

DROP TABLE IF EXISTS `tempreptbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tempreptbl` (
  `cid` int NOT NULL,
  `rp` varchar(100) NOT NULL,
  `val` int DEFAULT NULL,
  `bcategory` varchar(100) NOT NULL,
  `subcategory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tempreptbl`
--

LOCK TABLES `tempreptbl` WRITE;
/*!40000 ALTER TABLE `tempreptbl` DISABLE KEYS */;
INSERT INTO `tempreptbl` VALUES (23,'July 2020 - June 2021',1,'Children/adolescents reached','ECD'),(23,'July 2021 - June 2022',1,'Children/adolescents reached','ECD'),(23,'July 2020 - June 2021',54,'Children/adolescents reached','ECD'),(23,'July 2021 - June 2022',56,'Children/adolescents reached','ECD'),(6,'July 2019 - June 2020',612,'Church groups involvement in health activities','Basic/General health services'),(6,'July 2020 - June 2021',993,'Church groups involvement in health activities','Basic/General health services'),(6,'July 2021 - June 2022',612,'Church groups involvement in health activities','Basic/General health services'),(25,'July 2020 - June 2021',0,'Church groups involvement in health activities','Basic/General health services'),(25,'July 2021 - June 2022',10,'Church groups involvement in health activities','Basic/General health services'),(30,'July 2022 - June 2023',30,'Church groups involvement in health activities','Basic/General health services'),(12,'July 2019 - June 2020',6,'Community groups established','Community Health'),(12,'July 2020 - June 2021',5,'Community groups established','Community Health'),(12,'July 2022 - June 2023',4,'Community groups established','Community Health'),(12,'July 2021 - June 2022',4,'Community groups established','Community Health'),(3,'July 2019 - June 2020',168,'Community groups trained','Community Health'),(3,'July 2020 - June 2021',371,'Community groups trained','Community Health'),(3,'July 2021 - June 2022',985,'Community groups trained','Community Health'),(29,'July 2020 - June 2021',4,'Community health activities','Basic/General health services'),(29,'July 2021 - June 2022',6,'Community health activities','Basic/General health services'),(25,'July 2020 - June 2021',24,'Church groups involvement in health activities','Basic/General health services'),(25,'July 2021 - June 2022',24,'Church groups involvement in health activities','Basic/General health services'),(1,'July 2019 - June 2020',858,'Inpatients services provided','Leprosy'),(1,'July 2020 - June 2021',286,'Inpatients services provided','Leprosy'),(1,'July 2021 - June 2022',NULL,'Inpatients services provided','Leprosy'),(22,'July 2020 - June 2021',7,'Inpatients services provided','Health Services'),(22,'July 2021 - June 2022',11,'Inpatients services provided','Health Services'),(2,'July 2019 - June 2020',2,'Institutions supported','Medicine, Supplies and Equipment'),(2,'July 2020 - June 2021',3,'Institutions supported','Medicine, Supplies and Equipment'),(2,'July 2019 - June 2020',2,'Institutions supported','Funding'),(2,'July 2020 - June 2021',3,'Institutions supported','Funding'),(5,'July 2019 - June 2020',30,'Institutions supported','QMS'),(5,'July 2020 - June 2021',12,'Institutions supported','QMS'),(5,'July 2021 - June 2022',15,'Institutions supported','QMS'),(5,'July 2019 - June 2020',59,'Institutions supported','QMS'),(5,'July 2020 - June 2021',25,'Institutions supported','QMS'),(5,'July 2021 - June 2022',19,'Institutions supported','QMS'),(5,'July 2019 - June 2020',30,'Institutions supported','QMS'),(5,'July 2020 - June 2021',30,'Institutions supported','QMS'),(5,'July 2021 - June 2022',10,'Institutions supported','QMS'),(7,'July 2019 - June 2020',34,'Institutions supported','QMS'),(7,'July 2020 - June 2021',49,'Institutions supported','QMS'),(7,'July 2021 - June 2022',173,'Institutions supported','QMS'),(9,'July 2019 - June 2020',24,'Institutions supported','Medicine, Supplies and Equipment'),(9,'July 2020 - June 2021',44,'Institutions supported','Medicine, Supplies and Equipment'),(9,'July 2021 - June 2022',55,'Institutions supported','Medicine, Supplies and Equipment'),(9,'July 2019 - June 2020',0,'Institutions supported','Medicine, Supplies and Equipment'),(9,'July 2020 - June 2021',8,'Institutions supported','Medicine, Supplies and Equipment'),(9,'July 2021 - June 2022',14,'Institutions supported','Medicine, Supplies and Equipment'),(9,'July 2019 - June 2020',100,'Institutions supported','Medicine, Supplies and Equipment'),(9,'July 2020 - June 2021',325,'Institutions supported','Medicine, Supplies and Equipment'),(9,'July 2021 - June 2022',166,'Institutions supported','Medicine, Supplies and Equipment'),(12,'July 2019 - June 2020',4,'Institutions supported','Medicine, Supplies and Equipment'),(12,'July 2020 - June 2021',0,'Institutions supported','Medicine, Supplies and Equipment'),(12,'July 2022 - June 2023',3,'Institutions supported','Medicine, Supplies and Equipment'),(12,'July 2021 - June 2022',3,'Institutions supported','Medicine, Supplies and Equipment'),(13,'July 2018 - June 2019',1,'Institutions supported','Leadership and Governance'),(13,'July 2019 - June 2020',30,'Institutions supported','Leadership and Governance'),(13,'July 2020 - June 2021',11,'Institutions supported','Leadership and Governance'),(13,'July 2021 - June 2022',11,'Institutions supported','Leadership and Governance'),(14,'July 2019 - June 2020',90,'Institutions supported','Medicine, Supplies and Equipment'),(14,'July 2020 - June 2021',202,'Institutions supported','Medicine, Supplies and Equipment'),(14,'July 2021 - June 2022',NULL,'Institutions supported','Medicine, Supplies and Equipment'),(17,'July 2019 - June 2020',0,'Institutions supported','Leadership and Governance'),(17,'July 2020 - June 2021',10,'Institutions supported','Leadership and Governance'),(17,'July 2021 - June 2022',20,'Institutions supported','Leadership and Governance'),(18,'July 2019 - June 2020',3,'Institutions supported','Medicine, Supplies and Equipment'),(18,'July 2020 - June 2021',15,'Institutions supported','Medicine, Supplies and Equipment'),(18,'July 2021 - June 2022',3,'Institutions supported','Medicine, Supplies and Equipment'),(19,'July 2019 - June 2020',0,'Institutions supported','Disease Management'),(19,'July 2019 - June 2020',58,'Institutions supported','Leadership and Governance'),(20,'July 2019 - June 2020',75,'Institutions supported','WASH'),(20,'July 2020 - June 2021',85,'Institutions supported','WASH'),(20,'July 2021 - June 2022',0,'Institutions supported','WASH'),(22,'July 2020 - June 2021',15,'Institutions supported','Data Management'),(22,'July 2021 - June 2022',21,'Institutions supported','Data Management'),(22,'July 2020 - June 2021',16,'Institutions supported','Data Management'),(22,'July 2021 - June 2022',22,'Institutions supported','Data Management'),(22,'July 2020 - June 2021',5,'Institutions supported','Data Management'),(22,'July 2021 - June 2022',8,'Institutions supported','Data Management'),(22,'July 2020 - June 2021',25,'Institutions supported','Data Management'),(22,'July 2021 - June 2022',33,'Institutions supported','Data Management'),(22,'July 2020 - June 2021',7,'Institutions supported','Human resources management'),(22,'July 2021 - June 2022',12,'Institutions supported','Human resources management'),(22,'July 2020 - June 2021',6,'Institutions supported','Leadership and Governance'),(22,'July 2021 - June 2022',10,'Institutions supported','Leadership and Governance'),(22,'July 2020 - June 2021',7,'Institutions supported','Leadership and Governance'),(22,'July 2021 - June 2022',11,'Institutions supported','Leadership and Governance'),(24,'July 2020 - June 2021',0,'Institutions supported','Procurement'),(24,'July 2021 - June 2022',1,'Institutions supported','Procurement'),(24,'July 2022 - June 2023',1,'Institutions supported','Procurement'),(25,'July 2020 - June 2021',12,'Institutions supported','Leadership and Governance'),(25,'July 2021 - June 2022',9,'Institutions supported','Leadership and Governance'),(25,'July 2020 - June 2021',5,'Institutions supported','Leadership and Governance'),(25,'July 2021 - June 2022',9,'Institutions supported','Leadership and Governance'),(26,'July 2020 - June 2021',0,'Institutions supported','Medicines, Medical Supplies and Equipment'),(29,'July 2020 - June 2021',9,'Institutions supported','General Supplies'),(29,'July 2021 - June 2022',14,'Institutions supported','General Supplies'),(29,'July 2020 - June 2021',12,'Institutions supported','General Supplies'),(29,'July 2021 - June 2022',10,'Institutions supported','General Supplies'),(31,'July 2019 - June 2020',24,'Institutions supported','Technical Support'),(31,'July 2020 - June 2021',7,'Institutions supported','Technical Support'),(31,'July 2021 - June 2022',10,'Institutions supported','Technical Support'),(1,'July 2019 - June 2020',125544,'Outpatients services provided','Leprosy'),(1,'July 2020 - June 2021',6698,'Outpatients services provided','Leprosy'),(1,'July 2021 - June 2022',NULL,'Outpatients services provided','Leprosy'),(22,'July 2020 - June 2021',27573,'Outpatients services provided','Health Services'),(22,'July 2021 - June 2022',27254,'Outpatients services provided','Health Services'),(5,'July 2019 - June 2020',1,'Partnerships','Development agencies'),(5,'July 2020 - June 2021',2,'Partnerships','Development agencies'),(5,'July 2021 - June 2022',2,'Partnerships','Development agencies'),(7,'July 2019 - June 2020',4,'Partnerships','Development agencies'),(7,'July 2020 - June 2021',17,'Partnerships','Development agencies'),(7,'July 2021 - June 2022',5,'Partnerships','Development agencies'),(3,'July 2019 - June 2020',11,'Partnerships','NGOs'),(3,'July 2020 - June 2021',25,'Partnerships','NGOs'),(3,'July 2021 - June 2022',26,'Partnerships','NGOs'),(1,'July 2019 - June 2020',4,'Partnerships','Government'),(1,'July 2020 - June 2021',4,'Partnerships','Government'),(1,'July 2021 - June 2022',NULL,'Partnerships','Government'),(22,'July 2020 - June 2021',4,'Partnerships','Government'),(22,'July 2021 - June 2022',6,'Partnerships','Government'),(24,'July 2020 - June 2021',0,'Partnerships','Government'),(24,'July 2021 - June 2022',2,'Partnerships','Government'),(24,'July 2022 - June 2023',2,'Partnerships','Government'),(24,'July 2020 - June 2021',17,'Partnerships',''),(24,'July 2021 - June 2022',4,'Partnerships',''),(24,'July 2022 - June 2023',16,'Partnerships',''),(25,'July 2020 - June 2021',12,'Partnerships','Government'),(25,'July 2021 - June 2022',20,'Partnerships','Government'),(29,'July 2020 - June 2021',3,'Partnerships','Government'),(29,'July 2021 - June 2022',7,'Partnerships','Government'),(1,'July 2019 - June 2020',794,'People reached through health programs','Leprosy'),(1,'July 2020 - June 2021',687,'People reached through health programs','Leprosy'),(1,'July 2021 - June 2022',NULL,'People reached through health programs','Leprosy'),(8,'July 2019 - June 2020',78495,'People reached through health programs','Disabilities'),(8,'July 2020 - June 2021',72426,'People reached through health programs','Disabilities'),(8,'July 2021 - June 2022',99999,'People reached through health programs','Disabilities'),(12,'July 2019 - June 2020',13096,'People reached through health programs','Insurance'),(12,'July 2020 - June 2021',9375,'People reached through health programs','Insurance'),(12,'July 2022 - June 2023',8766,'People reached through health programs','Insurance'),(12,'July 2021 - June 2022',8766,'People reached through health programs','Insurance'),(15,'July 2019 - June 2020',250,'People reached through health programs','Maternal, Newborn and Child Health'),(15,'July 2020 - June 2021',337,'People reached through health programs','Maternal, Newborn and Child Health'),(15,'July 2021 - June 2022',413,'People reached through health programs','Maternal, Newborn and Child Health'),(18,'July 2019 - June 2020',13096,'People reached through health programs','Health Promotion'),(18,'July 2020 - June 2021',31696,'People reached through health programs','Health Promotion'),(18,'July 2021 - June 2022',14694,'People reached through health programs','Health Promotion'),(3,'July 2019 - June 2020',22982,'People reached through health programs','Health Services'),(3,'July 2020 - June 2021',23881,'People reached through health programs','Health Services'),(3,'July 2021 - June 2022',40097,'People reached through health programs','Health Services'),(20,'July 2019 - June 2020',3500,'People reached through health programs','Diabetes'),(20,'July 2020 - June 2021',1285,'People reached through health programs','Diabetes'),(20,'July 2021 - June 2022',0,'People reached through health programs','Diabetes'),(20,'July 2019 - June 2020',13352,'People reached through health programs','Cervical cancer screening'),(20,'July 2020 - June 2021',12331,'People reached through health programs','Cervical cancer screening'),(20,'July 2021 - June 2022',7241,'People reached through health programs','Cervical cancer screening'),(20,'July 2019 - June 2020',128,'People reached through health programs','Cervical cancer treatment'),(20,'July 2020 - June 2021',61,'People reached through health programs','Cervical cancer treatment'),(20,'July 2021 - June 2022',1,'People reached through health programs','Cervical cancer treatment'),(22,'July 2020 - June 2021',6,'People reached through health programs','Health Services'),(22,'July 2021 - June 2022',10,'People reached through health programs','Health Services'),(25,'July 2020 - June 2021',12,'People reached through health programs','Health Services'),(25,'July 2021 - June 2022',174,'People reached through health programs','Health Services'),(25,'July 2020 - June 2021',56,'People reached through health programs','Maternal, Newborn and Child Health'),(25,'July 2021 - June 2022',24715,'People reached through health programs','Maternal, Newborn and Child Health'),(25,'July 2020 - June 2021',883,'People reached through health programs','Maternal, Newborn and Child Health'),(25,'July 2021 - June 2022',49530,'People reached through health programs','Maternal, Newborn and Child Health'),(27,'July 2020 - June 2021',3225,'People reached through health programs','Advocacy'),(27,'July 2021 - June 2022',2687,'People reached through health programs','Advocacy'),(27,'July 2020 - June 2021',99999,'People reached through health programs','Advocacy'),(27,'July 2021 - June 2022',11520,'People reached through health programs','Advocacy'),(31,'July 2019 - June 2020',2021,'People reached through health programs','Surgery'),(31,'July 2020 - June 2021',2056,'People reached through health programs','Surgery'),(31,'July 2021 - June 2022',1305,'People reached through health programs','Surgery'),(1,'July 2019 - June 2020',1,'Personnel trained','Leadership'),(1,'July 2020 - June 2021',1,'Personnel trained','Leadership'),(1,'July 2021 - June 2022',NULL,'Personnel trained','Leadership'),(4,'July 2019 - June 2020',6,'Personnel trained','Clinical Practice'),(4,'July 2020 - June 2021',15,'Personnel trained','Clinical Practice'),(4,'July 2021 - June 2022',15,'Personnel trained','Clinical Practice'),(4,'July 2019 - June 2020',7,'Personnel trained','Clinical Practice'),(4,'July 2020 - June 2021',2,'Personnel trained','Clinical Practice'),(4,'July 2021 - June 2022',29,'Personnel trained','Clinical Practice'),(5,'July 2019 - June 2020',2,'Personnel trained','QMS'),(5,'July 2020 - June 2021',2,'Personnel trained','QMS'),(5,'July 2021 - June 2022',2,'Personnel trained','QMS'),(6,'July 2019 - June 2020',0,'Personnel trained','Leadership and Governance'),(6,'July 2020 - June 2021',0,'Personnel trained','Leadership and Governance'),(6,'July 2021 - June 2022',258,'Personnel trained','Leadership and Governance'),(7,'July 2019 - June 2020',1,'Personnel trained','Document Management'),(7,'July 2020 - June 2021',30,'Personnel trained','Document Management'),(7,'July 2021 - June 2022',161,'Personnel trained','Document Management'),(7,'July 2019 - June 2020',28,'Personnel trained','Leadership and Governance'),(7,'July 2020 - June 2021',50,'Personnel trained','Leadership and Governance'),(7,'July 2021 - June 2022',23,'Personnel trained','Leadership and Governance'),(8,'July 2019 - June 2020',2522,'Personnel trained','Clinical Practice'),(8,'July 2020 - June 2021',30,'Personnel trained','Clinical Practice'),(8,'July 2021 - June 2022',125,'Personnel trained','Clinical Practice'),(8,'July 2019 - June 2020',NULL,'Personnel trained','Equipment Management'),(8,'July 2020 - June 2021',29,'Personnel trained','Equipment Management'),(8,'July 2021 - June 2022',66,'Personnel trained','Equipment Management'),(11,'July 2019 - June 2020',500,'Personnel trained','Clinical Practice'),(11,'July 2020 - June 2021',381,'Personnel trained','Clinical Practice'),(11,'July 2021 - June 2022',416,'Personnel trained','Clinical Practice'),(11,'July 2019 - June 2020',0,'Personnel trained','Clinical Practice'),(11,'July 2020 - June 2021',60,'Personnel trained','Clinical Practice'),(11,'July 2021 - June 2022',0,'Personnel trained','Clinical Practice'),(12,'July 2019 - June 2020',17,'Personnel trained','Maternal, Newborn and Child Health'),(12,'July 2020 - June 2021',10,'Personnel trained','Maternal, Newborn and Child Health'),(12,'July 2022 - June 2023',12,'Personnel trained','Maternal, Newborn and Child Health'),(12,'July 2021 - June 2022',12,'Personnel trained','Maternal, Newborn and Child Health'),(13,'July 2018 - June 2019',4,'Personnel trained','Organizational Development'),(13,'July 2019 - June 2020',54,'Personnel trained','Organizational Development'),(13,'July 2020 - June 2021',2632,'Personnel trained','Organizational Development'),(13,'July 2021 - June 2022',0,'Personnel trained','Organizational Development'),(14,'July 2019 - June 2020',199,'Personnel trained','Pharmacy Management/Practice'),(14,'July 2020 - June 2021',291,'Personnel trained','Pharmacy Management/Practice'),(14,'July 2021 - June 2022',NULL,'Personnel trained','Pharmacy Management/Practice'),(14,'July 2019 - June 2020',347,'Personnel trained','Maternal, Newborn and Child health'),(14,'July 2020 - June 2021',427,'Personnel trained','Maternal, Newborn and Child health'),(14,'July 2021 - June 2022',NULL,'Personnel trained','Maternal, Newborn and Child health'),(14,'July 2019 - June 2020',188,'Personnel trained','Financial management'),(14,'July 2020 - June 2021',404,'Personnel trained','Financial management'),(14,'July 2021 - June 2022',NULL,'Personnel trained','Financial management'),(15,'July 2019 - June 2020',115,'Personnel trained','Community Health'),(15,'July 2020 - June 2021',141,'Personnel trained','Community Health'),(15,'July 2021 - June 2022',145,'Personnel trained','Community Health'),(17,'July 2019 - June 2020',0,'Personnel trained','Leadership and Governance'),(17,'July 2020 - June 2021',75,'Personnel trained','Leadership and Governance'),(17,'July 2021 - June 2022',40,'Personnel trained','Leadership and Governance'),(18,'July 2019 - June 2020',106,'Personnel trained','Health Promotion'),(18,'July 2020 - June 2021',326,'Personnel trained','Health Promotion'),(18,'July 2021 - June 2022',343,'Personnel trained','Health Promotion'),(18,'July 2019 - June 2020',26,'Personnel trained','Clinical Practice'),(18,'July 2020 - June 2021',10,'Personnel trained','Clinical Practice'),(18,'July 2021 - June 2022',45,'Personnel trained','Clinical Practice'),(18,'July 2019 - June 2020',80,'Personnel trained','Disease surveillance'),(18,'July 2020 - June 2021',326,'Personnel trained','Disease surveillance'),(18,'July 2021 - June 2022',186,'Personnel trained','Disease surveillance'),(3,'July 2019 - June 2020',5876,'Personnel trained','Health Training'),(3,'July 2020 - June 2021',1182,'Personnel trained','Health Training'),(3,'July 2021 - June 2022',1974,'Personnel trained','Health Training'),(3,'July 2019 - June 2020',1071,'Personnel trained','Maternal and Child Health'),(3,'July 2020 - June 2021',1246,'Personnel trained','Maternal and Child Health'),(3,'July 2021 - June 2022',2536,'Personnel trained','Maternal and Child Health'),(20,'July 2019 - June 2020',NULL,'Personnel trained','Infection control'),(20,'July 2020 - June 2021',88,'Personnel trained','Infection control'),(20,'July 2021 - June 2022',0,'Personnel trained','Infection control'),(20,'July 2019 - June 2020',NULL,'Personnel trained','Leadership and Governance'),(20,'July 2020 - June 2021',0,'Personnel trained','Leadership and Governance'),(20,'July 2021 - June 2022',1,'Personnel trained','Leadership and Governance'),(20,'July 2019 - June 2020',NULL,'Personnel trained','Resource Mobilization'),(20,'July 2020 - June 2021',0,'Personnel trained','Resource Mobilization'),(20,'July 2021 - June 2022',0,'Personnel trained','Resource Mobilization'),(20,'July 2019 - June 2020',30,'Personnel trained','Data management'),(20,'July 2020 - June 2021',80,'Personnel trained','Data management'),(20,'July 2021 - June 2022',22,'Personnel trained','Data management'),(22,'July 2020 - June 2021',280,'Personnel trained','Basic/General health services'),(22,'July 2021 - June 2022',330,'Personnel trained','Basic/General health services'),(23,'July 2020 - June 2021',92,'Personnel trained','WASH'),(23,'July 2021 - June 2022',982,'Personnel trained','WASH'),(24,'July 2020 - June 2021',0,'Personnel trained','Pharmacy Management/Practice'),(24,'July 2021 - June 2022',12,'Personnel trained','Pharmacy Management/Practice'),(24,'July 2022 - June 2023',17,'Personnel trained','Pharmacy Management/Practice'),(24,'July 2020 - June 2021',0,'Personnel trained','Hospital Management'),(24,'July 2021 - June 2022',9,'Personnel trained','Hospital Management'),(24,'July 2022 - June 2023',14,'Personnel trained','Hospital Management'),(25,'July 2020 - June 2021',56,'Personnel trained','Basic/General health services'),(25,'July 2021 - June 2022',100,'Personnel trained','Basic/General health services'),(25,'July 2020 - June 2021',24,'Personnel trained','Basic/General health services'),(25,'July 2021 - June 2022',100,'Personnel trained','Basic/General health services'),(26,'July 2020 - June 2021',0,'Personnel trained','Maternal, Newborn  and Child Health'),(27,'July 2020 - June 2021',573,'Personnel trained','Advocacy'),(27,'July 2021 - June 2022',823,'Personnel trained','Advocacy'),(29,'July 2020 - June 2021',7,'Personnel trained','Social services'),(29,'July 2021 - June 2022',4,'Personnel trained','Social services'),(30,'July 2022 - June 2023',250,'Personnel trained','Data Management'),(30,'July 2022 - June 2023',300,'Personnel trained','Maternal, Newborn  and Child Health'),(31,'July 2019 - June 2020',349,'Personnel trained','Health Training'),(31,'July 2020 - June 2021',140,'Personnel trained','Health Training'),(31,'July 2021 - June 2022',595,'Personnel trained','Health Training'),(31,'July 2019 - June 2020',307,'Personnel trained','Health Training'),(31,'July 2020 - June 2021',16,'Personnel trained','Health Training'),(31,'July 2021 - June 2022',16,'Personnel trained','Health Training'),(25,'July 2020 - June 2021',5,'Resource mobilisation','Grant Application'),(25,'July 2021 - June 2022',9,'Resource mobilisation','Grant Application'),(25,'July 2020 - June 2021',2,'Resource mobilisation','Grant Application'),(25,'July 2021 - June 2022',5,'Resource mobilisation','Grant Application'),(31,'July 2019 - June 2020',16,'Resource mobilisation','Infrastructure'),(31,'July 2020 - June 2021',9,'Resource mobilisation','Infrastructure'),(31,'July 2021 - June 2022',12,'Resource mobilisation','Infrastructure'),(32,'July 2019 - June 2020',1,'Resource mobilisation','Technical Support'),(32,'July 2021 - June 2022',2,'Resource mobilisation','Technical Support'),(32,'July 2020 - June 2021',3,'Resource mobilisation','Technical Support'),(4,'July 2019 - June 2020',2,'Training programs','Clinical Practice'),(4,'July 2020 - June 2021',3,'Training programs','Clinical Practice'),(4,'July 2021 - June 2022',3,'Training programs','Clinical Practice'),(6,'July 2019 - June 2020',0,'Training programs','Leadership and Governance'),(6,'July 2020 - June 2021',0,'Training programs','Leadership and Governance'),(6,'July 2021 - June 2022',6,'Training programs','Leadership and Governance'),(7,'July 2019 - June 2020',1,'Training programs','Document Management'),(7,'July 2020 - June 2021',4,'Training programs','Document Management'),(7,'July 2021 - June 2022',2,'Training programs','Document Management'),(7,'July 2019 - June 2020',1,'Training programs','Leadership and Governance'),(7,'July 2020 - June 2021',2,'Training programs','Leadership and Governance'),(7,'July 2021 - June 2022',2,'Training programs','Leadership and Governance'),(8,'July 2019 - June 2020',152,'Training programs','Clinical Practice'),(8,'July 2020 - June 2021',12,'Training programs','Clinical Practice'),(8,'July 2021 - June 2022',45,'Training programs','Clinical Practice'),(8,'July 2019 - June 2020',16,'Training programs','Equipment Management'),(8,'July 2020 - June 2021',7,'Training programs','Equipment Management'),(8,'July 2021 - June 2022',25,'Training programs','Equipment Management'),(9,'July 2019 - June 2020',0,'Training programs','Leadership and Governance'),(9,'July 2020 - June 2021',7,'Training programs','Leadership and Governance'),(9,'July 2021 - June 2022',45,'Training programs','Leadership and Governance'),(9,'July 2019 - June 2020',6,'Training programs','Leadership and Governance'),(9,'July 2020 - June 2021',63,'Training programs','Leadership and Governance'),(9,'July 2021 - June 2022',46,'Training programs','Leadership and Governance'),(11,'July 2019 - June 2020',0,'Training programs','Clinical Practice'),(11,'July 2020 - June 2021',4,'Training programs','Clinical Practice'),(11,'July 2021 - June 2022',0,'Training programs','Clinical Practice'),(14,'July 2019 - June 2020',62,'Training programs','Pharmacy Management/Practice'),(14,'July 2020 - June 2021',109,'Training programs','Pharmacy Management/Practice'),(14,'July 2021 - June 2022',NULL,'Training programs','Pharmacy Management/Practice'),(14,'July 2019 - June 2020',275,'Training programs','Maternal, Newborn  and Child health'),(14,'July 2020 - June 2021',487,'Training programs','Maternal, Newborn  and Child health'),(14,'July 2021 - June 2022',NULL,'Training programs','Maternal, Newborn  and Child health'),(14,'July 2019 - June 2020',85,'Training programs','Financial management'),(14,'July 2020 - June 2021',177,'Training programs','Financial management'),(14,'July 2021 - June 2022',NULL,'Training programs','Financial management'),(22,'July 2020 - June 2021',7,'Training programs','Basic/General health services'),(22,'July 2021 - June 2022',15,'Training programs','Basic/General health services'),(25,'July 2020 - June 2021',12,'Training programs','Basic/General health services'),(25,'July 2021 - June 2022',24,'Training programs','Basic/General health services'),(25,'July 2020 - June 2021',6,'Training programs','Leadership and Governance'),(25,'July 2021 - June 2022',24,'Training programs','Leadership and Governance'),(25,'July 2020 - June 2021',12,'Training programs','Maternal, Newborn  and Child health'),(25,'July 2021 - June 2022',24,'Training programs','Maternal, Newborn  and Child health'),(25,'July 2020 - June 2021',4,'Training programs','Basic/General health services'),(25,'July 2021 - June 2022',24,'Training programs','Basic/General health services'),(30,'July 2022 - June 2023',320,'Training programs','Maternal, Newborn  and Child health'),(24,'July 2020 - June 2021',0,'Training programs','Pharmacy Management/Practice'),(24,'July 2021 - June 2022',2,'Training programs','Pharmacy Management/Practice'),(24,'July 2022 - June 2023',4,'Training programs','Pharmacy Management/Practice');
/*!40000 ALTER TABLE `tempreptbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temptbl`
--

DROP TABLE IF EXISTS `temptbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `temptbl` (
  `cid` int NOT NULL,
  `rp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temptbl`
--

LOCK TABLES `temptbl` WRITE;
/*!40000 ALTER TABLE `temptbl` DISABLE KEYS */;
INSERT INTO `temptbl` VALUES (1,'July 2019 - June 2020'),(1,'July 2020 - June 2021'),(1,'July 2021 - June 2022'),(2,'July 2019 - June 2020'),(2,'July 2020 - June 2021'),(3,'July 2019 - June 2020'),(3,'July 2020 - June 2021'),(3,'July 2021 - June 2022'),(4,'July 2019 - June 2020'),(4,'Target 2030'),(4,'July 2020 - June 2021'),(4,'July 2021 - June 2022'),(5,'July 2019 - June 2020'),(5,'Target 2030'),(5,'July 2020 - June 2021'),(5,'July 2021 - June 2022'),(6,'July 2019 - June 2020'),(6,'July 2020 - June 2021'),(6,'July 2021 - June 2022'),(7,'July 2019 - June 2020'),(7,'July 2020 - June 2021'),(7,'July 2021 - June 2022'),(8,'July 2019 - June 2020'),(8,'July 2020 - June 2021'),(8,'July 2021 - June 2022'),(9,'July 2019 - June 2020'),(9,'July 2020 - June 2021'),(9,'July 2021 - June 2022'),(10,'July 2019 - June 2020'),(10,'Target 2030'),(10,'July 2020 - June 2021'),(11,'July 2019 - June 2020'),(11,'Target 2030'),(11,'July 2020 - June 2021'),(11,'July 2021 - June 2022'),(12,'July 2019 - June 2020'),(12,'July 2020 - June 2021'),(12,'July 2021 - June 2022'),(13,'July 2018 - June 2019'),(13,'July 2019 - June 2020'),(13,'July 2020 - June 2021'),(13,'July 2021 - June 2022'),(14,'July 2019 - June 2020'),(14,'July 2020 - June 2021'),(14,'July 2021 - June 2022'),(15,'July 2019 - June 2020'),(15,'Target 2030'),(15,'July 2020 - June 2021'),(15,'July 2021 - June 2022'),(17,'July 2019 - June 2020'),(17,'Target 2030'),(17,'July 2020 - June 2021'),(17,'July 2021 - June 2022'),(18,'July 2019 - June 2020'),(18,'Target 2030'),(18,'July 2020 - June 2021'),(18,'July 2021 - June 2022'),(19,'July 2019 - June 2020'),(20,'July 2019 - June 2020'),(20,'Target 2030'),(20,'July 2020 - June 2021'),(20,'July 2021 - June 2022'),(21,'July 2020 - June 2021'),(21,'July 2021 - June 2022'),(22,'July 2020 - June 2021'),(22,'July 2021 - June 2022'),(23,'July 2020 - June 2021'),(23,'Target 2030'),(23,'July 2021 - June 2022'),(24,'July 2020 - June 2021'),(24,'Target 2030'),(24,'July 2021 - June 2022'),(24,'July 2022 - June 2023'),(25,'July 2020 - June 2021'),(25,'July 2021 - June 2022'),(26,'July 2020 - June 2021'),(27,'July 2020 - June 2021'),(27,'July 2021 - June 2022'),(28,'July 2020 - June 2021'),(28,'July 2021 - June 2022'),(29,'July 2020 - June 2021'),(29,'July 2021 - June 2022'),(30,'July 2022 - June 2023'),(31,'July 2019 - June 2020'),(31,'Target 2030'),(31,'July 2020 - June 2021'),(31,'July 2021 - June 2022'),(32,'July 2019 - June 2020'),(32,'Target 2030'),(32,'July 2021 - June 2022'),(32,'July 2020 - June 2021');
/*!40000 ALTER TABLE `temptbl` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-20 10:18:54
