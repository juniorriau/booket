-- MariaDB dump 10.19  Distrib 10.4.27-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: booket
-- ------------------------------------------------------
-- Server version	10.4.27-MariaDB

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
-- Table structure for table `armada`
--

DROP TABLE IF EXISTS `armada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `armada` (
  `id` bigint(25) NOT NULL AUTO_INCREMENT,
  `guuid` varchar(50) NOT NULL,
  `jenisarmada` int(15) NOT NULL,
  `kodehuruf` varchar(15) NOT NULL,
  `kodeangka` varchar(15) NOT NULL,
  `platnomor` varchar(20) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `kapasitas` int(15) NOT NULL,
  `fasilitas` text NOT NULL,
  `perusahaan` int(15) NOT NULL,
  `createdat` datetime NOT NULL,
  `createdby` int(11) NOT NULL,
  `updatedat` datetime NOT NULL,
  `updatedby` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `armada`
--

LOCK TABLES `armada` WRITE;
/*!40000 ALTER TABLE `armada` DISABLE KEYS */;
/*!40000 ALTER TABLE `armada` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fasilitas`
--

DROP TABLE IF EXISTS `fasilitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fasilitas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fasilitas` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fasilitas`
--

LOCK TABLES `fasilitas` WRITE;
/*!40000 ALTER TABLE `fasilitas` DISABLE KEYS */;
INSERT INTO `fasilitas` VALUES (1,'AC'),(2,'Reclining Seat'),(3,'Toilet'),(4,'Snack'),(5,'Wi-Fi'),(6,'Selimut'),(7,'Bantal');
/*!40000 ALTER TABLE `fasilitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hargatiket`
--

DROP TABLE IF EXISTS `hargatiket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hargatiket` (
  `id` bigint(25) NOT NULL AUTO_INCREMENT,
  `rute` bigint(25) NOT NULL,
  `jenistiket` int(15) NOT NULL,
  `perusahaan` int(25) NOT NULL,
  `harga` int(11) NOT NULL,
  `createdat` datetime NOT NULL,
  `createdby` int(11) NOT NULL,
  `updatedat` datetime NOT NULL,
  `updatedby` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hargatiket`
--

LOCK TABLES `hargatiket` WRITE;
/*!40000 ALTER TABLE `hargatiket` DISABLE KEYS */;
INSERT INTO `hargatiket` VALUES (1,1,1,1,150000,'2023-09-15 05:21:44',1,'2023-09-15 05:21:44',1),(2,1,2,1,175000,'2023-09-14 15:38:02',1,'2023-09-14 15:38:02',1),(3,1,3,1,175000,'2023-09-14 15:38:10',1,'2023-09-14 15:38:10',1),(4,1,4,1,225000,'2023-09-14 15:38:21',1,'2023-09-14 15:38:21',1),(5,1,5,1,350000,'2023-09-14 15:38:30',1,'2023-09-14 15:38:30',1),(6,1,6,1,375000,'2023-09-14 15:38:38',1,'2023-09-14 15:38:38',1),(7,1,7,1,425000,'2023-09-14 15:38:50',1,'2023-09-14 15:38:50',1);
/*!40000 ALTER TABLE `hargatiket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icons`
--

DROP TABLE IF EXISTS `icons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icon` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `unicode` varchar(6) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1098 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icons`
--

LOCK TABLES `icons` WRITE;
/*!40000 ALTER TABLE `icons` DISABLE KEYS */;
INSERT INTO `icons` VALUES (1,'ad','f641'),(2,'air-freshener','f5d0'),(3,'align-right','f038'),(4,'anchor','f13d'),(5,'angle-double-up','f102'),(6,'angle-up','f106'),(7,'archive','f187'),(8,'arrow-alt-circle-right','f35a'),(9,'arrow-circle-right','f0a9'),(10,'arrow-right','f061'),(11,'arrows-alt-v','f338'),(12,'atlas','f558'),(13,'baby','f77c'),(14,'bacon','f7e5'),(15,'address-book','f2b9'),(16,'align-center','f037'),(17,'allergies','f461'),(18,'angle-double-down','f103'),(19,'angle-down','f107'),(20,'angry','f556'),(21,'archway','f557'),(22,'arrow-alt-circle-up','f35b'),(23,'arrow-circle-up','f0aa'),(24,'arrow-up','f062'),(25,'assistive-listening-systems','f2a2'),(26,'atom','f5d2'),(27,'baby-carriage','f77d'),(28,'bacteria','e059'),(29,'address-card','f2bb'),(30,'align-justify','f039'),(31,'ambulance','f0f9'),(32,'angle-double-left','f100'),(33,'angle-left','f104'),(34,'ankh','f644'),(35,'arrow-alt-circle-down','f358'),(36,'arrow-circle-down','f0ab'),(37,'arrow-down','f063'),(38,'arrows-alt','f0b2'),(39,'asterisk','f069'),(40,'audio-description','f29e'),(41,'backspace','f55a'),(42,'bacterium','e05a'),(43,'adjust','f042'),(44,'align-left','f036'),(45,'American-sign-language-interpreting','f2a3'),(46,'angle-double-right','f101'),(47,'angle-right','f105'),(48,'apple-alt','f5d1'),(49,'arrow-alt-circle-left','f359'),(50,'arrow-circle-left','f0a8'),(51,'arrow-left','f060'),(52,'arrows-alt-h','f337'),(53,'at','f1fa'),(54,'award','f559'),(55,'backward','f04a'),(56,'bahai','f666'),(57,'balance-scale','f24e'),(58,'band-aid','f462'),(59,'basketball-ball','f434'),(60,'battery-half','f242'),(61,'beer','f0fc'),(62,'bible','f647'),(63,'biohazard','f780'),(64,'blind','f29d'),(65,'bomb','f1e2'),(66,'book-dead','f6b7'),(67,'bookmark','f02e'),(68,'bowling-ball','f436'),(69,'boxes','f468'),(70,'briefcase','f0b1'),(71,'brush','f55d'),(72,'bullseye','f140'),(73,'business-time','f64a'),(74,'calendar-check','f274'),(75,'calendar-times','f273'),(76,'campground','f6bb'),(77,'car','f1b9'),(78,'car-side','f5e4'),(79,'caret-right','f0da'),(80,'caret-square-up','f151'),(81,'cart-plus','f217'),(82,'chair','f6c0'),(83,'chart-area','f1fe'),(84,'check','f00c'),(85,'cheese','f7ef'),(86,'chess-king','f43f'),(87,'chess-rook','f447'),(88,'chevron-circle-up','f139'),(89,'chevron-up','f077'),(90,'circle-notch','f1ce'),(91,'clipboard-check','f46c'),(92,'closed-captioning','f20a'),(93,'cloud-moon','f6c3'),(94,'cloud-sun','f6c4'),(95,'code','f121'),(96,'cogs','f085'),(97,'comment-alt','f27a'),(98,'comment-slash','f4b3'),(99,'compass','f14e'),(100,'concierge-bell','f562'),(101,'copyright','f1f9'),(102,'crop-alt','f565'),(103,'crown','f521'),(104,'cut','f0c4'),(105,'desktop','f108'),(106,'dice-d20','f6cf'),(107,'dice-one','f525'),(108,'digital-tachograph','f566'),(109,'dizzy','f567'),(110,'dolly','f472'),(111,'door-open','f52b'),(112,'drafting-compass','f568'),(113,'drum-steelpan','f56a'),(114,'dumpster-ﬁre','f794'),(115,'eject','f052'),(116,'envelope-open','f2b6'),(117,'eraser','f12d'),(118,'exclamation','f12a'),(119,'expand-alt','f424'),(120,'eye','f06e'),(121,'fast-backward','f049'),(122,'feather','f52d'),(123,'ﬁle','f15b'),(124,'ﬁle-code','f1c9'),(125,'ﬁle-excel','f1c3'),(126,'ﬁle-invoice','f570'),(127,'ﬁle-pdf','f1c1'),(128,'ﬁle-upload','f574'),(129,'ﬁll-drip','f576'),(130,'ﬁre','f06d'),(131,'ﬁsh','f578'),(132,'ﬂag-usa','f74d'),(133,'folder-minus','f65d'),(134,'football-ball','f44e'),(135,'frown-open','f57a'),(136,'gas-pump','f52f'),(137,'ghost','f6e2'),(138,'glass-martini','f000'),(139,'globe','f0ac'),(140,'globe-europe','f7a2'),(141,'greater-than','f531'),(142,'grin-alt','f581'),(143,'grin-squint','f585'),(144,'grin-tongue','f589'),(145,'grip-horizontal','f58d'),(146,'guitar','f7a6'),(147,'hamsa','f665'),(148,'hand-holding-usd','f4c0'),(149,'hand-paper','f256'),(150,'hand-point-right','f0a4'),(151,'hand-scissors','f257'),(152,'balance-scale-left','f515'),(153,'barcode','f02a'),(154,'bath','f2cd'),(155,'battery-quarter','f243'),(156,'bell','f0f3'),(157,'bicycle','f206'),(158,'birthday-cake','f1fd'),(159,'blog','f781'),(160,'bone','f5d7'),(161,'book-medical','f7e6'),(162,'border-all','f84c'),(163,'box','f466'),(164,'braille','f2a1'),(165,'briefcase-medical','f469'),(166,'bug','f188'),(167,'burn','f46a'),(168,'calculator','f1ec'),(169,'calendar-day','f783'),(170,'calendar-week','f784'),(171,'candy-cane','f786'),(172,'car-alt','f5de'),(173,'caravan','f8ﬀ'),(174,'caret-square-down','f150'),(175,'caret-up','f0d8'),(176,'cash-register','f788'),(177,'chalkboard','f51b'),(178,'chart-bar','f080'),(179,'check-circle','f058'),(180,'chess','f439'),(181,'chess-knight','f441'),(182,'chevron-circle-down','f13a'),(183,'chevron-down','f078'),(184,'child','f1ae'),(185,'city','f64f'),(186,'clipboard-list','f46d'),(187,'cloud','f0c2'),(188,'cloud-moon-rain','f73c'),(189,'cloud-sun-rain','f743'),(190,'code-branch','f126'),(191,'coins','f51e'),(192,'comment-dollar','f651'),(193,'comments','f086'),(194,'compress','f066'),(195,'cookie','f563'),(196,'couch','f4b8'),(197,'cross','f654'),(198,'crutch','f7f7'),(199,'database','f1c0'),(200,'dharmachakra','f655'),(201,'dice-d6','f6d1'),(202,'dice-six','f526'),(203,'directions','f5eb'),(204,'dna','f471'),(205,'dolly-ﬂatbed','f474'),(206,'dot-circle','f192'),(207,'dragon','f6d5'),(208,'drumstick-bite','f6d7'),(209,'dungeon','f6d9'),(210,'ellipsis-h','f141'),(211,'envelope-open-text','f658'),(212,'ethernet','f796'),(213,'exclamation-circle','f06a'),(214,'expand-arrows-alt','f31e'),(215,'eye-dropper','f1ª'),(216,'fast-forward','f050'),(217,'feather-alt','f56b'),(218,'ﬁle-alt','f15c'),(219,'ﬁle-contract','f56c'),(220,'ﬁle-export','f56e'),(221,'ﬁle-invoice-dollar','f571'),(222,'ﬁle-powerpoint','f1c4'),(223,'ﬁle-video','f1c8'),(224,'ﬁlm','f008'),(225,'ﬁre-alt','f7e4'),(226,'ﬁst-raised','f6de'),(227,'ﬂask','f0c3'),(228,'folder-open','f07c'),(229,'forward','f04e'),(230,'funnel-dollar','f662'),(231,'gavel','f0e3'),(232,'gift','f06b'),(233,'glass-martini-alt','f57b'),(234,'globe-africa','f57c'),(235,'golf-ball','f450'),(236,'greater-than-equal','f532'),(237,'grin-beam','f582'),(238,'grin-squint-tears','f586'),(239,'grin-tongue-squint','f58a'),(240,'grip-lines','f7a4'),(241,'h-square','f0fd'),(242,'hand-holding','f4bd'),(243,'hand-holding-water','f4c1'),(244,'hand-peace','f25b'),(245,'hand-point-up','f0a6'),(246,'hand-sparkles','e05d'),(247,'balance-scale-right','f516'),(248,'bars','f0c9'),(249,'battery-empty','f244'),(250,'battery-three-quarters','f241'),(251,'bell-slash','f1f6'),(252,'biking','f84a'),(253,'blender','f517'),(254,'bold','f032'),(255,'bong','f55c'),(256,'book-open','f518'),(257,'border-none','f850'),(258,'box-open','f49e'),(259,'brain','f5dc'),(260,'broadcast-tower','f519'),(261,'building','f1ad'),(262,'bus','f207'),(263,'calendar','f133'),(264,'calendar-minus','f272'),(265,'camera','f030'),(266,'cannabis','f55f'),(267,'car-battery','f5df'),(268,'caret-down','f0d7'),(269,'caret-square-left','f191'),(270,'carrot','f787'),(271,'cat','f6be'),(272,'chalkboard-teacher','f51c'),(273,'chart-line','f201'),(274,'check-double','f560'),(275,'chess-bishop','f43a'),(276,'chess-pawn','f443'),(277,'chevron-circle-left','f137'),(278,'chevron-left','f053'),(279,'church','f51d'),(280,'clinic-medical','f7f2'),(281,'clock','f017'),(282,'cloud-download-alt','f381'),(283,'cloud-rain','f73d'),(284,'cloud-upload-alt','f382'),(285,'coﬀee','f0f4'),(286,'columns','f0db'),(287,'comment-dots','f4ad'),(288,'comments-dollar','f653'),(289,'compress-alt','f422'),(290,'cookie-bite','f564'),(291,'credit-card','f09d'),(292,'crosshairs','f05b'),(293,'cube','f1b2'),(294,'deaf','f2a4'),(295,'diagnoses','f470'),(296,'dice-ﬁve','f523'),(297,'dice-three','f527'),(298,'disease','f7fa'),(299,'dog','f6d3'),(300,'donate','f4b9'),(301,'dove','f4ba'),(302,'draw-polygon','f5ee'),(303,'dumbbell','f44b'),(304,'edit','f044'),(305,'ellipsis-v','f142'),(306,'envelope-square','f199'),(307,'euro-sign','f153'),(308,'exclamation-triangle','f071'),(309,'external-link-alt','f35d'),(310,'eye-slash','f070'),(311,'faucet','e005'),(312,'female','f182'),(313,'ﬁle-archive','f1c6'),(314,'ﬁle-csv','f6dd'),(315,'ﬁle-image','f1c5'),(316,'ﬁle-medical','f477'),(317,'ﬁle-prescription','f572'),(318,'ﬁle-word','f1c2'),(319,'ﬁlter','f0b0'),(320,'ﬁre-extinguisher','f134'),(321,'ﬂag','f024'),(322,'ﬂushed','f579'),(323,'folder-plus','f65e'),(324,'frog','f52e'),(325,'futbol','f1e3'),(326,'gem','f3a5'),(327,'gifts','f79c'),(328,'glass-whiskey','f7a0'),(329,'globe-americas','f57d'),(330,'gopuram','f664'),(331,'grimace','f57f'),(332,'grin-beam-sweat','f583'),(333,'grin-stars','f587'),(334,'grin-tongue-wink','f58b'),(335,'grip-lines-vertical','f7a5'),(336,'hamburger','f805'),(337,'hand-holding-heart','f4be'),(338,'hand-lizard','f258'),(339,'hand-point-down','f0a7'),(340,'hand-pointer','f25a'),(341,'hand-spock','f259'),(342,'ban','f05e'),(343,'baseball-ball','f433'),(344,'battery-full','f240'),(345,'bed','f236'),(346,'bezier-curve','f55b'),(347,'binoculars','f1e5'),(348,'blender-phone','f6b6'),(349,'bolt','f0e7'),(350,'book','f02d'),(351,'book-reader','f5da'),(352,'border-style','f853'),(353,'box-tissue','e05b'),(354,'bread-slice','f7ec'),(355,'broom','f51a'),(356,'bullhorn','f0a1'),(357,'bus-alt','f55e'),(358,'calendar-alt','f073'),(359,'calendar-plus','f271'),(360,'camera-retro','f083'),(361,'capsules','f46b'),(362,'car-crash','f5e1'),(363,'caret-left','f0d9'),(364,'caret-square-right','f152'),(365,'cart-arrow-down','f218'),(366,'certiﬁcate','f0a3'),(367,'charging-station','f5e7'),(368,'chart-pie','f200'),(369,'check-square','f14a'),(370,'chess-board','f43c'),(371,'chess-queen','f445'),(372,'chevron-circle-right','f138'),(373,'chevron-right','f054'),(374,'circle','f111'),(375,'clipboard','f328'),(376,'clone','f24d'),(377,'cloud-meatball','f73b'),(378,'cloud-showers-heavy','f740'),(379,'cocktail','f561'),(380,'cog','f013'),(381,'comment','f075'),(382,'comment-medical','f7f5'),(383,'compact-disc','f51f'),(384,'compress-arrows-alt','f78c'),(385,'copy','f0c5'),(386,'crop','f125'),(387,'crow','f520'),(388,'cubes','f1b3'),(389,'democrat','f747'),(390,'dice','f522'),(391,'dice-four','f524'),(392,'dice-two','f528'),(393,'divide','f529'),(394,'dollar-sign','f155'),(395,'door-closed','f52a'),(396,'download','f019'),(397,'drum','f569'),(398,'dumpster','f793'),(399,'egg','f7ª'),(400,'envelope','f0e0'),(401,'equals','f52c'),(402,'exchange-alt','f362'),(403,'expand','f065'),(404,'external-link-square-alt','f360'),(405,'fan','f863'),(406,'fax','f1ac'),(407,'ﬁghter-jet','f0ª'),(408,'ﬁle-audio','f1c7'),(409,'ﬁle-download','f56d'),(410,'ﬁle-import','f56f'),(411,'ﬁle-medical-alt','f478'),(412,'ﬁle-signature','f573'),(413,'ﬁll','f575'),(414,'ﬁngerprint','f577'),(415,'ﬁrst-aid','f479'),(416,'ﬂag-checkered','f11e'),(417,'folder','f07b'),(418,'font','f031'),(419,'frown','f119'),(420,'gamepad','f11b'),(421,'genderless','f22d'),(422,'glass-cheers','f79f'),(423,'glasses','f530'),(424,'globe-asia','f57e'),(425,'graduation-cap','f19d'),(426,'grin','f580'),(427,'grin-hearts','f584'),(428,'grin-tears','f588'),(429,'grin-wink','f58c'),(430,'grip-vertical','f58e'),(431,'hammer','f6e3'),(432,'hand-holding-medical','e05c'),(433,'hand-middle-ﬁnger','f806'),(434,'hand-point-left','f0a5'),(435,'hand-rock','f255'),(436,'hands','f4c2'),(437,'hands-helping','f4c4'),(438,'handshake-slash','e060'),(439,'hat-cowboy','f8c0'),(440,'head-side-cough','e061'),(441,'heading','f1dc'),(442,'heart','f004'),(443,'highlighter','f591'),(444,'hockey-puck','f453'),(445,'horse-head','f7ab'),(446,'hospital-user','f80d'),(447,'hourglass','f254'),(448,'house-damage','f6f1'),(449,'ice-cream','f810'),(450,'id-card','f2c2'),(451,'images','f302'),(452,'inﬁnity','f534'),(453,'jedi','f669'),(454,'key','f084'),(455,'kiss-beam','f597'),(456,'language','f1ab'),(457,'laptop-medical','f812'),(458,'laugh-wink','f59c'),(459,'less-than','f536'),(460,'life-ring','f1cd'),(461,'hands-wash','e05e'),(462,'hanukiah','f6e6'),(463,'hat-cowboy-side','f8c1'),(464,'head-side-cough-slash','e062'),(465,'headphones','f025'),(466,'heart-broken','f7a9'),(467,'hiking','f6ec'),(468,'holly-berry','f7aa'),(469,'hospital','f0f8'),(470,'hot-tub','f593'),(471,'hourglass-end','f253'),(472,'house-user','e065'),(473,'icicles','f7ad'),(474,'id-card-alt','f47f'),(475,'inbox','f01c'),(476,'info','f129'),(477,'joint','f595'),(478,'keyboard','f11c'),(479,'kiss-wink-heart','f598'),(480,'laptop','f109'),(481,'laugh','f599'),(482,'layer-group','f5fd'),(483,'less-than-equal','f537'),(484,'lightbulb','f0eb'),(485,'handshake','f2b5'),(486,'hard-hat','f807'),(487,'hat-wizard','f6e8'),(488,'head-side-mask','e063'),(489,'headphones-alt','f58f'),(490,'heartbeat','f21e'),(491,'hippo','f6ed'),(492,'home','f015'),(493,'hospital-alt','f47d'),(494,'hotdog','f80f'),(495,'hourglass-half','f252'),(496,'hryvnia','f6f2'),(497,'icons','f86d'),(498,'igloo','f7ae'),(499,'indent','f03c'),(500,'info-circle','f05a'),(501,'journal-whills','f66a'),(502,'khanda','f66d'),(503,'kiwi-bird','f535'),(504,'laptop-code','f5fc'),(505,'laugh-beam','f59a'),(506,'leaf','f06c'),(507,'level-down-alt','f3be'),(508,'link','f0c1'),(509,'handshake-alt-slash','e05f'),(510,'hashtag','f292'),(511,'hdd','f0a0'),(512,'head-side-virus','e064'),(513,'headset','f590'),(514,'helicopter','f533'),(515,'history','f1da'),(516,'horse','f6f0'),(517,'hospital-symbol','f47e'),(518,'hotel','f594'),(519,'hourglass-start','f251'),(520,'i-cursor','f246'),(521,'id-badge','f2c1'),(522,'image','f03e'),(523,'industry','f275'),(524,'italic','f033'),(525,'kaaba','f66b'),(526,'kiss','f596'),(527,'landmark','f66f'),(528,'laptop-house','e066'),(529,'laugh-squint','f59b'),(530,'lemon','f094'),(531,'level-up-alt','f3bf'),(532,'lira-sign','f195'),(533,'list','f03a'),(534,'location-arrow','f124'),(535,'long-arrow-alt-left','f30a'),(536,'luggage-cart','f59d'),(537,'magnet','f076'),(538,'map-marked','f59f'),(539,'map-pin','f276'),(540,'mars-double','f227'),(541,'mask','f6fa'),(542,'meh-blank','f5a4'),(543,'mercury','f223'),(544,'microphone-alt','f3c9'),(545,'minus','f068'),(546,'mobile','f10b'),(547,'money-bill-wave','f53a'),(548,'monument','f5a6'),(549,'motorcycle','f21c'),(550,'mug-hot','f7b6'),(551,'newspaper','f1ea'),(552,'object-ungroup','f248'),(553,'outdent','f03b'),(554,'palette','f53f'),(555,'parachute-box','f4cd'),(556,'list-alt','f022'),(557,'lock','f023'),(558,'long-arrow-alt-right','f30b'),(559,'lungs','f604'),(560,'mail-bulk','f674'),(561,'map-marked-alt','f5a0'),(562,'map-signs','f277'),(563,'mars-stroke','f229'),(564,'medal','f5a2'),(565,'meh-rolling-eyes','f5a5'),(566,'meteor','f753'),(567,'microphone-alt-slash','f539'),(568,'minus-circle','f056'),(569,'mobile-alt','f3cd'),(570,'money-bill-wave-alt','f53b'),(571,'moon','f186'),(572,'mountain','f6fc'),(573,'music','f001'),(574,'not-equal','f53e'),(575,'oil-can','f613'),(576,'pager','f815'),(577,'pallet','f482'),(578,'paragraph','f1dd'),(579,'list-ol','f0cb'),(580,'lock-open','f3c1'),(581,'long-arrow-alt-up','f30c'),(582,'lungs-virus','e067'),(583,'male','f183'),(584,'map-marker','f041'),(585,'marker','f5a1'),(586,'mars-stroke-h','f22b'),(587,'medkit','f0fa'),(588,'memory','f538'),(589,'microchip','f2db'),(590,'microphone-slash','f131'),(591,'minus-square','f146'),(592,'money-bill','f0d6'),(593,'money-check','f53c'),(594,'mortar-pestle','f5a7'),(595,'mouse','f8cc'),(596,'network-wired','f6ﬀ'),(597,'notes-medical','f481'),(598,'om','f679'),(599,'paint-brush','f1fc'),(600,'paper-plane','f1d8'),(601,'parking','f540'),(602,'list-ul','f0ca'),(603,'long-arrow-alt-down','f309'),(604,'low-vision','f2a8'),(605,'magic','f0d0'),(606,'map','f279'),(607,'map-marker-alt','f3c5'),(608,'mars','f222'),(609,'mars-stroke-v','f22a'),(610,'meh','f11a'),(611,'menorah','f676'),(612,'microphone','f130'),(613,'microscope','f610'),(614,'mitten','f7b5'),(615,'money-bill-alt','f3d1'),(616,'money-check-alt','f53d'),(617,'mosque','f678'),(618,'mouse-pointer','f245'),(619,'neuter','f22c'),(620,'object-group','f247'),(621,'otter','f700'),(622,'paint-roller','f5aa'),(623,'paperclip','f0c6'),(624,'passport','f5ab'),(625,'pastafarianism','f67b'),(626,'paw','f1b0'),(627,'pen-fancy','f5ac'),(628,'pencil-ruler','f5ae'),(629,'percent','f295'),(630,'phone-alt','f879'),(631,'phone-volume','f2a0'),(632,'pizza-slice','f818'),(633,'plane-departure','f5b0'),(634,'plug','f1e6'),(635,'podcast','f2ce'),(636,'poo-storm','f75a'),(637,'power-oﬀ','f011'),(638,'prescription-bottle','f485'),(639,'project-diagram','f542'),(640,'qrcode','f029'),(641,'quote-left','f10d'),(642,'radiation-alt','f7ba'),(643,'record-vinyl','f8d9'),(644,'registered','f25d'),(645,'republican','f75e'),(646,'ring','f70b'),(647,'route','f4d7'),(648,'ruler','f545'),(649,'running','f70c'),(650,'satellite','f7bf'),(651,'screwdriver','f54a'),(652,'search-dollar','f688'),(653,'seedling','f4d8'),(654,'share-alt','f1e0'),(655,'shield-alt','f3ed'),(656,'shoe-prints','f54b'),(657,'shower','f2cc'),(658,'sign-language','f2a7'),(659,'sim-card','f7c4'),(660,'skiing','f7c9'),(661,'slash','f715'),(662,'smile-beam','f5b8'),(663,'smoking-ban','f54d'),(664,'snowman','f7d0'),(665,'solar-panel','f5ba'),(666,'sort-alpha-up','f15e'),(667,'sort-amount-up','f161'),(668,'sort-numeric-down-alt','f886'),(669,'spa','f5bb'),(670,'spinner','f110'),(671,'square-full','f45c'),(672,'star-and-crescent','f699'),(673,'paste','f0ea'),(674,'peace','f67c'),(675,'pen-nib','f5ad'),(676,'people-arrows','e068'),(677,'percentage','f541'),(678,'phone-slash','f3dd'),(679,'photo-video','f87c'),(680,'place-of-worship','f67f'),(681,'plane-slash','e069'),(682,'plus','f067'),(683,'poll','f681'),(684,'poop','f619'),(685,'pray','f683'),(686,'prescription-bottle-alt','f486'),(687,'pump-medical','e06a'),(688,'question','f128'),(689,'quote-right','f10e'),(690,'rainbow','f75b'),(691,'recycle','f1b8'),(692,'remove-format','f87d'),(693,'restroom','f7bd'),(694,'road','f018'),(695,'rss','f09e'),(696,'ruler-combined','f546'),(697,'rupee-sign','f156'),(698,'satellite-dish','f7c0'),(699,'scroll','f70e'),(700,'search-location','f689'),(701,'server','f233'),(702,'share-alt-square','f1e1'),(703,'shield-virus','e06c'),(704,'shopping-bag','f290'),(705,'shuttle-van','f5b6'),(706,'sign-out-alt','f2f5'),(707,'sink','e06d'),(708,'skiing-nordic','f7ca'),(709,'sleigh','f7cc'),(710,'smile-wink','f4da'),(711,'sms','f7cd'),(712,'snowplow','f7d2'),(713,'sort','f0dc'),(714,'sort-alpha-up-alt','f882'),(715,'sort-amount-up-alt','f885'),(716,'sort-numeric-up','f163'),(717,'space-shuttle','f197'),(718,'splotch','f5bc'),(719,'square-root-alt','f698'),(720,'star-half','f089'),(721,'pause','f04c'),(722,'pen','f304'),(723,'pen-square','f14b'),(724,'people-carry','f4ce'),(725,'person-booth','f756'),(726,'phone-square','f098'),(727,'piggy-bank','f4d3'),(728,'plane','f072'),(729,'play','f04b'),(730,'plus-circle','f055'),(731,'poll-h','f682'),(732,'portrait','f3e0'),(733,'praying-hands','f684'),(734,'print','f02f'),(735,'pump-soap','e06b'),(736,'question-circle','f059'),(737,'quran','f687'),(738,'random','f074'),(739,'redo','f01e'),(740,'reply','f3e5'),(741,'retweet','f079'),(742,'robot','f544'),(743,'rss-square','f143'),(744,'ruler-horizontal','f547'),(745,'sad-cry','f5b3'),(746,'save','f0c7'),(747,'sd-card','f7c2'),(748,'search-minus','f010'),(749,'shapes','f61f'),(750,'share-square','f14d'),(751,'ship','f21a'),(752,'shopping-basket','f291'),(753,'sign','f4d9'),(754,'signal','f012'),(755,'sitemap','f0e8'),(756,'skull','f54c'),(757,'sliders-h','f1de'),(758,'smog','f75f'),(759,'snowboarding','f7ce'),(760,'soap','e06e'),(761,'sort-alpha-down','f15d'),(762,'sort-amount-down','f160'),(763,'sort-down','f0dd'),(764,'sort-numeric-up-alt','f887'),(765,'spell-check','f891'),(766,'spray-can','f5bd'),(767,'stamp','f5bf'),(768,'star-half-alt','f5c0'),(769,'pause-circle','f28b'),(770,'pen-alt','f305'),(771,'pencil-alt','f303'),(772,'pepper-hot','f816'),(773,'phone','f095'),(774,'phone-square-alt','f87b'),(775,'pills','f484'),(776,'plane-arrival','f5af'),(777,'play-circle','f144'),(778,'plus-square','f0fe'),(779,'poo','f2fe'),(780,'pound-sign','f154'),(781,'prescription','f5b1'),(782,'procedures','f487'),(783,'puzzle-piece','f12e'),(784,'quidditch','f458'),(785,'radiation','f7b9'),(786,'receipt','f543'),(787,'redo-alt','f2f9'),(788,'reply-all','f122'),(789,'ribbon','f4d6'),(790,'rocket','f135'),(791,'ruble-sign','f158'),(792,'ruler-vertical','f548'),(793,'sad-tear','f5b4'),(794,'school','f549'),(795,'search','f002'),(796,'search-plus','f00e'),(797,'share','f064'),(798,'shekel-sign','f20b'),(799,'shipping-fast','f48b'),(800,'shopping-cart','f07a'),(801,'sign-in-alt','f2f6'),(802,'signature','f5b7'),(803,'skating','f7c5'),(804,'skull-crossbones','f714'),(805,'smile','f118'),(806,'smoking','f48d'),(807,'snowﬂake','f2dc'),(808,'socks','f696'),(809,'sort-alpha-down-alt','f881'),(810,'sort-amount-down-alt','f884'),(811,'sort-numeric-down','f162'),(812,'sort-up','f0de'),(813,'spider','f717'),(814,'square','f0c8'),(815,'star','f005'),(816,'star-of-david','f69a'),(817,'star-of-life','f621'),(818,'sticky-note','f249'),(819,'stopwatch-20','e06f'),(820,'store-slash','e071'),(821,'stroopwafel','f551'),(822,'suitcase-rolling','f5c1'),(823,'swatchbook','f5c3'),(824,'sync','f021'),(825,'table-tennis','f45d'),(826,'tachometer-alt','f3fd'),(827,'tasks','f0ae'),(828,'temperature-high','f769'),(829,'text-height','f034'),(830,'th-list','f00b'),(831,'thermometer-full','f2c7'),(832,'thumbs-down','f165'),(833,'times','f00d'),(834,'tired','f5c8'),(835,'toilet-paper','f71e'),(836,'tooth','f5c9'),(837,'trademark','f25c'),(838,'tram','f7da'),(839,'trash-alt','f2ed'),(840,'trophy','f091'),(841,'step-backward','f048'),(842,'stop','f04d'),(843,'store','f54e'),(844,'stream','f550'),(845,'subscript','f12c'),(846,'sun','f185'),(847,'swimmer','f5c4'),(848,'sync-alt','f2f1'),(849,'tablet','f10a'),(850,'tag','f02b'),(851,'taxi','f1ba'),(852,'temperature-low','f76b'),(853,'text-width','f035'),(854,'theater-masks','f630'),(855,'thermometer-half','f2c9'),(856,'thumbs-up','f164'),(857,'times-circle','f057'),(858,'toggle-oﬀ','f204'),(859,'toilet-paper-slash','e072'),(860,'torah','f6a0'),(861,'traﬃc-light','f637'),(862,'transgender','f224'),(863,'trash-restore','f829'),(864,'truck','f0d1'),(865,'step-forward','f051'),(866,'stop-circle','f28d'),(867,'store-alt','f54f'),(868,'street-view','f21d'),(869,'subway','f239'),(870,'superscript','f12b'),(871,'swimming-pool','f5c5'),(872,'syringe','f48e'),(873,'tablet-alt','f3fa'),(874,'tags','f02c'),(875,'teeth','f62e'),(876,'tenge','f7d7'),(877,'th','f00a'),(878,'thermometer','f491'),(879,'thermometer-quarter','f2ca'),(880,'thumbtack','f08d'),(881,'tint','f043'),(882,'toggle-on','f205'),(883,'toolbox','f552'),(884,'torii-gate','f6a1'),(885,'trailer','e041'),(886,'transgender-alt','f225'),(887,'trash-restore-alt','f82a'),(888,'truck-loading','f4de'),(889,'stethoscope','f0f1'),(890,'stopwatch','f2f2'),(891,'store-alt-slash','e070'),(892,'strikethrough','f0cc'),(893,'suitcase','f0f2'),(894,'surprise','f5c2'),(895,'synagogue','f69b'),(896,'table','f0ce'),(897,'tablets','f490'),(898,'tape','f4db'),(899,'teeth-open','f62f'),(900,'terminal','f120'),(901,'th-large','f009'),(902,'thermometer-empty','f2cb'),(903,'thermometer-three-quarters','f2c8'),(904,'ticket-alt','f3ﬀ'),(905,'tint-slash','f5c7'),(906,'toilet','f7d8'),(907,'tools','f7d9'),(908,'tractor','f722'),(909,'train','f238'),(910,'trash','f1f8'),(911,'tree','f1bb'),(912,'truck-monster','f63b'),(913,'star-of-life','f621'),(914,'sticky-note','f249'),(915,'stopwatch-20','e06f'),(916,'store-slash','e071'),(917,'stroopwafel','f551'),(918,'suitcase-rolling','f5c1'),(919,'swatchbook','f5c3'),(920,'sync','f021'),(921,'table-tennis','f45d'),(922,'tachometer-alt','f3fd'),(923,'tasks','f0ae'),(924,'temperature-high','f769'),(925,'text-height','f034'),(926,'th-list','f00b'),(927,'thermometer-full','f2c7'),(928,'thumbs-down','f165'),(929,'times','f00d'),(930,'tired','f5c8'),(931,'toilet-paper','f71e'),(932,'tooth','f5c9'),(933,'trademark','f25c'),(934,'tram','f7da'),(935,'trash-alt','f2ed'),(936,'trophy','f091'),(937,'step-backward','f048'),(938,'stop','f04d'),(939,'store','f54e'),(940,'stream','f550'),(941,'subscript','f12c'),(942,'sun','f185'),(943,'swimmer','f5c4'),(944,'sync-alt','f2f1'),(945,'tablet','f10a'),(946,'tag','f02b'),(947,'taxi','f1ba'),(948,'temperature-low','f76b'),(949,'text-width','f035'),(950,'theater-masks','f630'),(951,'thermometer-half','f2c9'),(952,'thumbs-up','f164'),(953,'times-circle','f057'),(954,'toggle-oﬀ','f204'),(955,'toilet-paper-slash','e072'),(956,'torah','f6a0'),(957,'traﬃc-light','f637'),(958,'transgender','f224'),(959,'trash-restore','f829'),(960,'truck','f0d1'),(961,'step-forward','f051'),(962,'stop-circle','f28d'),(963,'store-alt','f54f'),(964,'street-view','f21d'),(965,'subway','f239'),(966,'superscript','f12b'),(967,'swimming-pool','f5c5'),(968,'syringe','f48e'),(969,'tablet-alt','f3fa'),(970,'tags','f02c'),(971,'teeth','f62e'),(972,'tenge','f7d7'),(973,'th','f00a'),(974,'thermometer','f491'),(975,'thermometer-quarter','f2ca'),(976,'thumbtack','f08d'),(977,'tint','f043'),(978,'toggle-on','f205'),(979,'toolbox','f552'),(980,'torii-gate','f6a1'),(981,'trailer','e041'),(982,'transgender-alt','f225'),(983,'trash-restore-alt','f82a'),(984,'truck-loading','f4de'),(985,'stethoscope','f0f1'),(986,'stopwatch','f2f2'),(987,'store-alt-slash','e070'),(988,'strikethrough','f0cc'),(989,'suitcase','f0f2'),(990,'surprise','f5c2'),(991,'synagogue','f69b'),(992,'table','f0ce'),(993,'tablets','f490'),(994,'tape','f4db'),(995,'teeth-open','f62f'),(996,'terminal','f120'),(997,'th-large','f009'),(998,'thermometer-empty','f2cb'),(999,'thermometer-three-quarters','f2c8'),(1000,'ticket-alt','f3ﬀ'),(1001,'tint-slash','f5c7'),(1002,'toilet','f7d8'),(1003,'tools','f7d9'),(1004,'tractor','f722'),(1005,'train','f238'),(1006,'trash','f1f8'),(1007,'tree','f1bb'),(1008,'truck-monster','f63b'),(1009,'truck-moving','f4df'),(1010,'tv','f26c'),(1011,'undo','f0e2'),(1012,'unlink','f127'),(1013,'user','f007'),(1014,'user-check','f4fc'),(1015,'user-edit','f4ﬀ'),(1016,'user-lock','f502'),(1017,'user-nurse','f82f'),(1018,'user-slash','f506'),(1019,'users','f0c0'),(1020,'utensils','f2e7'),(1021,'venus-mars','f228'),(1022,'vials','f493'),(1023,'virus','e074'),(1024,'volleyball-ball','f45f'),(1025,'volume-up','f028'),(1026,'wallet','f555'),(1027,'weight','f496'),(1028,'wind','f72e'),(1029,'window-restore','f2d2'),(1030,'won-sign','f159'),(1031,'yin-yang','f6ad'),(1032,'truck-pickup','f63c'),(1033,'umbrella','f0e9'),(1034,'undo-alt','f2ea'),(1035,'unlock','f09c'),(1036,'user-alt','f406'),(1037,'user-circle','f2bd'),(1038,'user-friends','f500'),(1039,'user-md','f0f0'),(1040,'user-plus','f234'),(1041,'user-tag','f507'),(1042,'users-cog','f509'),(1043,'vector-square','f5cb'),(1044,'vest','e085'),(1045,'video','f03d'),(1046,'virus-slash','e075'),(1047,'volume-down','f027'),(1048,'vote-yea','f772'),(1049,'warehouse','f494'),(1050,'weight-hanging','f5cd'),(1051,'window-close','f410'),(1052,'wine-bottle','f72f'),(1053,'wrench','f0ad'),(1054,'tshirt','f553'),(1055,'umbrella-beach','f5ca'),(1056,'universal-access','f29a'),(1057,'unlock-alt','f13e'),(1058,'user-alt-slash','f4fa'),(1059,'user-clock','f4fd'),(1060,'user-graduate','f501'),(1061,'user-minus','f503'),(1062,'user-secret','f21b'),(1063,'user-tie','f508'),(1064,'users-slash','e073'),(1065,'venus','f221'),(1066,'vest-patches','e086'),(1067,'video-slash','f4e2'),(1068,'viruses','e076'),(1069,'volume-mute','f6a9'),(1070,'vr-cardboard','f729'),(1071,'water','f773'),(1072,'wheelchair','f193'),(1073,'window-maximize','f2d0'),(1074,'wine-glass','f4e3'),(1075,'x-ray','f497'),(1076,'tty','f1e4'),(1077,'underline','f0cd'),(1078,'university','f19c'),(1079,'upload','f093'),(1080,'user-astronaut','f4fb'),(1081,'user-cog','f4fe'),(1082,'user-injured','f728'),(1083,'user-ninja','f504'),(1084,'user-shield','f505'),(1085,'user-times','f235'),(1086,'utensil-spoon','f2e5'),(1087,'venus-double','f226'),(1088,'vial','f492'),(1089,'vihara','f6a7'),(1090,'voicemail','f897'),(1091,'volume-oﬀ','f026'),(1092,'walking','f554'),(1093,'wave-square','f83e'),(1094,'wiﬁ','f1eb'),(1095,'window-minimize','f2d1'),(1096,'wine-glass-alt','f5ce'),(1097,'yen-sign','f157');
/*!40000 ALTER TABLE `icons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jadwal`
--

DROP TABLE IF EXISTS `jadwal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jadwal` (
  `id` bigint(25) NOT NULL AUTO_INCREMENT,
  `guuid` varchar(50) NOT NULL,
  `kodejadwal` varchar(25) NOT NULL,
  `perusahaan` int(15) NOT NULL,
  `armada` bigint(25) NOT NULL,
  `tanggalberangkat` date NOT NULL,
  `tanggalpulang` date NOT NULL,
  `jenisperjalanan` varchar(25) NOT NULL,
  `jumlahtiket` int(5) NOT NULL,
  `supir1` bigint(25) NOT NULL,
  `supir2` bigint(25) NOT NULL,
  `supir3` varchar(255) NOT NULL,
  `createdat` datetime NOT NULL,
  `createdby` int(11) NOT NULL,
  `updatedat` datetime NOT NULL,
  `updatedby` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jadwal`
--

LOCK TABLES `jadwal` WRITE;
/*!40000 ALTER TABLE `jadwal` DISABLE KEYS */;
/*!40000 ALTER TABLE `jadwal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jenisarmada`
--

DROP TABLE IF EXISTS `jenisarmada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jenisarmada` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `perusahaan` int(15) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `createdat` datetime NOT NULL,
  `createdby` int(111) NOT NULL,
  `updatedat` datetime NOT NULL,
  `updatedby` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenisarmada`
--

LOCK TABLES `jenisarmada` WRITE;
/*!40000 ALTER TABLE `jenisarmada` DISABLE KEYS */;
INSERT INTO `jenisarmada` VALUES (1,1,'MPV Avanza/Xenia','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0),(2,0,'MPV Kijang Innoa','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0),(3,0,'MPV Panther','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0),(4,0,'MPV Terios/Rush','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0),(5,0,'Compact Van Luxio','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0),(6,0,'Compact Van APV','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0),(7,0,'Compact Van Grand Max','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0),(8,0,'Compact Van Evalia','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0),(9,0,'Minivan HiAce','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0),(10,0,'Minibus L300','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0),(11,0,'Minibus Elf','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0),(12,0,'Mikro Bus','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);
/*!40000 ALTER TABLE `jenisarmada` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kelas`
--

DROP TABLE IF EXISTS `kelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kelas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namakelas` varchar(100) NOT NULL,
  `createdat` datetime NOT NULL,
  `createdby` int(11) NOT NULL,
  `updatedat` datetime NOT NULL,
  `updatedby` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelas`
--

LOCK TABLES `kelas` WRITE;
/*!40000 ALTER TABLE `kelas` DISABLE KEYS */;
INSERT INTO `kelas` VALUES (1,'Ekonomi','2023-09-13 03:23:45',1,'2023-09-13 03:23:45',1),(2,'AC Ekonomi','2023-09-13 03:23:51',1,'2023-09-13 03:23:51',1),(3,'RS non AC','2023-09-13 03:24:30',1,'2023-09-13 03:24:30',1),(4,'RS AC','2023-09-13 03:24:34',1,'2023-09-13 03:24:34',1),(5,'VIP','2023-09-13 03:24:50',1,'2023-09-13 03:24:50',1),(6,'Eksekutif','2023-09-13 03:24:56',1,'2023-09-13 03:24:56',1),(7,'Super Eksekutif','2023-09-13 03:25:10',1,'2023-09-13 03:25:10',1);
/*!40000 ALTER TABLE `kelas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perusahaan`
--

DROP TABLE IF EXISTS `perusahaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perusahaan` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `namaperusahaan` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `penanggungjawab` varchar(100) NOT NULL,
  `nomorpenanggungjawab` varchar(18) NOT NULL,
  `telepon` varchar(18) NOT NULL,
  `referenceuser` int(11) NOT NULL,
  `createdat` datetime NOT NULL,
  `createdby` int(11) NOT NULL,
  `updatedat` datetime NOT NULL,
  `updatedby` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perusahaan`
--

LOCK TABLES `perusahaan` WRITE;
/*!40000 ALTER TABLE `perusahaan` DISABLE KEYS */;
INSERT INTO `perusahaan` VALUES (1,'PO Cahaya Abadi Lintas Pertiwi','Jl. Sudirman Block C 11 Sukamulya','Hari Suryono','08879813410','09293874923',2,'2023-09-02 07:23:49',1,'2023-09-02 08:24:09',1);
/*!40000 ALTER TABLE `perusahaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roledetails`
--

DROP TABLE IF EXISTS `roledetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roledetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roleid` int(11) NOT NULL,
  `roledetail` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `navigation` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '{}',
  `createdat` datetime NOT NULL,
  `createdby` int(11) NOT NULL,
  `updatedat` datetime NOT NULL,
  `updatedby` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roledetails`
--

LOCK TABLES `roledetails` WRITE;
/*!40000 ALTER TABLE `roledetails` DISABLE KEYS */;
INSERT INTO `roledetails` VALUES (1,1,'{\"rolename\":\"Administrator\",\"Perusahaan\":[\"index\",\"create\",\"update\",\"delete\"],\"Jenisarmada\":[\"index\",\"create\",\"update\",\"delete\"],\"Fasilitas\":[\"index\",\"create\",\"update\",\"delete\"],\"Kelas\":[\"index\",\"create\",\"update\",\"delete\"],\"Rute\":[\"index\",\"read\",\"create\",\"update\",\"delete\"],\"Armada\":[\"index\",\"read\",\"create\",\"update\",\"delete\"],\"Hargatiket\":[\"index\",\"create\",\"update\",\"delete\"]}','{}','2023-09-02 04:24:15',1,'2023-09-15 00:22:09',1),(2,2,'{\"rolename\":\"Tenants\",\"Jenisarmada\":[\"index\",\"create\",\"update\",\"delete\"],\"Rute\":[\"index\",\"create\",\"update\",\"delete\"],\"Armada\":[\"index\",\"read\",\"create\",\"update\",\"delete\"],\"Hargatiket\":[\"index\",\"create\",\"update\",\"delete\"]}','{}','2023-09-15 09:13:32',1,'2023-09-15 09:35:01',1);
/*!40000 ALTER TABLE `roledetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rolename` varchar(25) NOT NULL,
  `createdat` datetime NOT NULL,
  `createdby` int(11) NOT NULL,
  `updatedat` datetime NOT NULL,
  `updatedby` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administrator','2022-11-01 12:52:16',1,'2022-11-01 12:52:16',1),(2,'Tenants','2023-09-15 09:12:26',1,'2023-09-15 09:12:26',1);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `routings`
--

DROP TABLE IF EXISTS `routings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `routings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `routename` varchar(50) NOT NULL,
  `routeurl` varchar(100) NOT NULL,
  `routealias` varchar(25) NOT NULL,
  `icon` varchar(25) NOT NULL,
  `functionname` text NOT NULL,
  `createdat` datetime NOT NULL,
  `createdby` int(11) NOT NULL,
  `updatedat` datetime NOT NULL,
  `updatedby` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `routings`
--

LOCK TABLES `routings` WRITE;
/*!40000 ALTER TABLE `routings` DISABLE KEYS */;
INSERT INTO `routings` VALUES (1,'Perusahaan','app/perusahaan','Perusahaan','cubes','{\"1\":\"index\",\"2\":\"create\",\"4\":\"update\",\"6\":\"delete\"}','2023-09-02 07:19:45',1,'2023-09-15 00:22:02',1),(2,'Jenisarmada','app/jenisarmada','Jenis Armada','shuttle-van','{\"1\":\"index\",\"2\":\"create\",\"4\":\"update\",\"6\":\"delete\"}','2023-09-02 07:34:29',1,'2023-09-15 00:22:02',1),(3,'Fasilitas','app/fasilitas','Fasilitas','check','{\"1\":\"index\",\"2\":\"create\",\"4\":\"update\",\"6\":\"delete\"}','2023-09-02 15:04:39',1,'2023-09-15 00:22:02',1),(11,'Armada','app/armada','Armada','bus-alt','{\"1\":\"index\",\"2\":\"read\",\"3\":\"create\",\"5\":\"update\",\"7\":\"delete\"}','2023-09-13 03:27:40',1,'2023-09-15 00:22:02',1),(12,'Hargatiket','app/hargatiket','Harga Tiket','tags','{\"1\":\"index\",\"2\":\"create\",\"4\":\"update\",\"6\":\"delete\"}','2023-09-13 03:28:19',1,'2023-09-15 00:22:02',1),(10,'Rute','app/rute','Rute Perjalanan','expand-arrows-alt','{\"1\":\"index\",\"2\":\"read\",\"3\":\"create\",\"5\":\"update\",\"7\":\"delete\"}','2023-09-13 03:27:04',1,'2023-09-15 00:22:02',1),(9,'Kelas','app/kelas','Kelas','clone','{\"1\":\"index\",\"2\":\"create\",\"4\":\"update\",\"6\":\"delete\"}','2023-09-13 03:23:13',1,'2023-09-15 00:22:02',1);
/*!40000 ALTER TABLE `routings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rute`
--

DROP TABLE IF EXISTS `rute`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rute` (
  `id` bigint(25) NOT NULL AUTO_INCREMENT,
  `guuid` varchar(50) NOT NULL,
  `koderute` varchar(25) NOT NULL,
  `kotaasal` varchar(100) NOT NULL,
  `kotatujuan` varchar(100) NOT NULL,
  `jenistiket` int(11) NOT NULL,
  `perusahaan` int(15) NOT NULL,
  `createdat` datetime NOT NULL,
  `createdby` int(11) NOT NULL,
  `updatedat` datetime NOT NULL,
  `updatedby` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rute`
--

LOCK TABLES `rute` WRITE;
/*!40000 ALTER TABLE `rute` DISABLE KEYS */;
INSERT INTO `rute` VALUES (1,'3fd48e8e-5607-45ce-9572-b7c640ded1f5','CALP-PKU_MDN','Pekanbaru','Medan',2,1,'2023-09-15 01:31:35',1,'2023-09-15 04:33:35',1);
/*!40000 ALTER TABLE `rute` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `setting_name` varchar(100) NOT NULL,
  `setting_value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'site_name','Booking Tiket Online'),(2,'site_url','http://localhost/booket'),(3,'site_title','Booking Tiket Online'),(4,'site_description','Booking Tiket Online'),(5,'site_email',''),(6,'site_logo_vertical',''),(7,'site_logo_hostizonal',''),(8,'site_icon',''),(9,'smtp_host',''),(10,'smtp_user',''),(11,'smtp_pass',''),(12,'smtp_port',''),(13,'smtp_secure','tls'),(14,'reply_to',''),(15,'email_from',''),(16,'email_from_name',''),(17,'site_address',''),(18,'site_phone',''),(19,'site_menu',''),(20,'site_limit_post',''),(21,'site_enable_recent','0'),(22,'social_facebook',''),(23,'social_twitter',''),(24,'social_instagram',''),(25,'social_youtube',''),(26,'social_thumbler',''),(27,'social_pinterest',''),(28,'social_linkedin','');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supir`
--

DROP TABLE IF EXISTS `supir`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supir` (
  `id` bigint(15) NOT NULL AUTO_INCREMENT,
  `guuid` varchar(50) NOT NULL,
  `perusahaan` int(25) NOT NULL,
  `namalengkap` varchar(100) NOT NULL,
  `tanggallahir` date NOT NULL,
  `jeniskelamin` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  `nomortelepon` varchar(18) NOT NULL,
  `posisi` varchar(20) NOT NULL,
  `nomorsim` varchar(20) NOT NULL,
  `jenissim` varchar(10) NOT NULL,
  `createdat` datetime NOT NULL,
  `status` varchar(25) NOT NULL,
  `createdby` int(11) NOT NULL,
  `updatedat` datetime NOT NULL,
  `updatedby` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supir`
--

LOCK TABLES `supir` WRITE;
/*!40000 ALTER TABLE `supir` DISABLE KEYS */;
/*!40000 ALTER TABLE `supir` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tiket`
--

DROP TABLE IF EXISTS `tiket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tiket` (
  `id` bigint(50) NOT NULL AUTO_INCREMENT,
  `guuid` varchar(50) NOT NULL,
  `kodetiket` varchar(50) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `rute` bigint(25) NOT NULL,
  `perusahaan` int(15) NOT NULL,
  `armada` bigint(25) NOT NULL,
  `jenistiket` int(15) NOT NULL,
  `jadwal` datetime NOT NULL,
  `createdat` datetime NOT NULL,
  `createdby` int(11) NOT NULL,
  `updatedat` datetime NOT NULL,
  `updatedby` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiket`
--

LOCK TABLES `tiket` WRITE;
/*!40000 ALTER TABLE `tiket` DISABLE KEYS */;
/*!40000 ALTER TABLE `tiket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userdetails`
--

DROP TABLE IF EXISTS `userdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(18) NOT NULL,
  `url` text NOT NULL,
  `image` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `createdat` datetime NOT NULL,
  `createdby` int(11) NOT NULL,
  `updatedat` datetime NOT NULL,
  `updatedby` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userdetails`
--

LOCK TABLES `userdetails` WRITE;
/*!40000 ALTER TABLE `userdetails` DISABLE KEYS */;
INSERT INTO `userdetails` VALUES (1,1,'Administrator','admin@digips.id','','','public/uploads/2022/11/ICONGODESA.png','','2022-11-01 12:53:22',1,'2022-11-08 08:10:54',1),(2,2,'Admin PO Cahaya Abadi Lintas Pertiwi','','','','','','2023-09-15 09:19:30',1,'2023-09-15 09:26:57',2);
/*!40000 ALTER TABLE `userdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL,
  `isactive` tinyint(1) NOT NULL,
  `role` int(11) NOT NULL,
  `resetkey` varchar(50) NOT NULL,
  `resettime` datetime NOT NULL,
  `currentlogin` datetime NOT NULL,
  `lastlogin` datetime NOT NULL,
  `createdat` datetime NOT NULL,
  `createdby` int(11) NOT NULL,
  `updatedat` datetime NOT NULL,
  `updatedby` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'administrator','admin@digips.id','c8d7a670fbc188a77947db93b4a7d079517282a4','1',1,1,'bafcda3891a5455e86fa715443fdb9dd','0000-00-00 00:00:00','2023-09-15 16:11:03','2023-09-15 09:33:01','2022-11-01 12:52:53',1,'2023-02-06 11:58:50',1),(2,'adminpocahaya','admin@pocahaya.com','5eed838a2f3695d72bd652c6368546b3b5400495','0',1,2,'','0000-00-00 00:00:00','0000-00-00 00:00:00','2023-09-15 11:54:53','2023-09-15 09:19:30',1,'2023-09-15 09:19:30',1);
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

-- Dump completed on 2023-09-17  7:33:36
