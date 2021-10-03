-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: localhost    Database: tfe
-- ------------------------------------------------------
-- Server version	5.6.22-log

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
-- Table structure for table `ati`
--

DROP TABLE IF EXISTS `ati`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ati` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `intervention` tinyint(1) DEFAULT NULL,
  `phasing` tinyint(1) DEFAULT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `fk_contact_idx` (`employee_id`),
  KEY `fk_project_idx` (`project_id`),
  CONSTRAINT `fk_employee` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_project` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ati`
--

LOCK TABLES `ati` WRITE;
/*!40000 ALTER TABLE `ati` DISABLE KEYS */;
/*!40000 ALTER TABLE `ati` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipcode` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activity_id` int(11) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_activity_idx` (`activity_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=560 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` VALUES (408,'AIB VIN?OTTE (INSTALLATION DE GAZ)','Parc Scientifique Cr?alys - Rue Phocas Lejeune 11','5032','LES ISNES (GEMBLOUX)','','','','',0,'Belgique'),(409,'AIR LIQUIDE M?DICAL','Parc d\'affaires Z?nobe Gramme, Quai des Vennes 8','4020','LIEGE','043/49 89 89','043/41 20 70','','',0,'Belgique'),(410,'ALCOMEL','Essenschotstraat, 9','3980','TESSENDERLO','013/77.24.38','013/77.64.43','alcomel@alcomel.be','www.alcomel.be',0,'Belgique'),(411,'ALPHONE VANDEBERG','Bansions 25','4845','JALHAY','','','','',0,'Belgique'),(412,'ANTE PEINTURE SPRL','Rue Louis Demeuse 39','4040','HERSTAL','04/240 15 87 - 0477/24 32 59','','info@antepeinture.be','www.antepeinture.be',0,'Belgique'),(413,'APRUZZESE SA','Rue Servais Malaise 52','4030','GRIVEGNEE','04/367 51 52','04/367 72 51','info@apruzzese.com','www.apruzzese.com',0,'Belgique'),(415,'ARCHAMBEAU TH CARRELAGES SA','Rue Spinettes 3','4140','SPRIMONT','04/382 16 81','04/382 30 10','archambeau.sa@skynet.be','www.archambeaucarrelages.be',0,'Belgique'),(416,'ASCOM HASLER','Rue de la Fus?e 64','1130','BRUXELLES','02/727 13 11','02/727 13 00','info@ascom.be','www.ascom.be',0,'Belgique'),(418,'B.E.T.T. & CO SPRL','Rue du Bois de l\'Abbaye 12','4100','SERAING','04/220 66 62','','','',0,'Belgique'),(420,'B.V. CONSTRUCT & CONSULT','Rue Joseph Wauters 141','4470','SAINT-GEORGES','','','','',0,'Belgique'),(421,'BALTEAU I.E. SA','Rue Hector Denis 33','4420','MONTEGNEE','04/239 68 90','','info@balteau-ie.be','',0,'Belgique'),(422,'BARRI?RES WPS','De Vunt 17','3220','HOLSBEEK','078/15 20 05','','pdecrem@wps-be.com','',0,'Belgique'),(423,'B?TIMENT ET MAINTENANCE','Avenue des Martyrs 26','4620','FLERON','04/358 28 22','','','',0,'Belgique'),(424,'BATITEC SA','Rue d\'Argenteau 15','4681','HERMALLE-SOUS-ARGENTEAU','','','','',0,'Belgique'),(425,'BDH SA','Rue du Ch?taignier 10','6960','HARRE','086/43 37 24','086/36 78 26','','www.demoitie-barthelemy.be',0,'Belgique'),(426,'BEAUJEAN OLIVIER','Rue du Bosquet 28','4000','LIEGE','04/227 18 31','','sprl.obeaujean@skynet.be','',0,'Belgique'),(427,'BELSECO GROUPE SA','Rue des Nouvelles Technologies 21','4460','GR?CE-HOLLOGNE','','','','',0,'Belgique'),(428,'BLAISE PASCAL CARRELAGE','Rue M. Duch?ne 41a','4340','AWANS','04/286 66 32 - 0478/68 10 07','04/286 27 10','pbcarrelages@gmail.com','',0,'Belgique'),(429,'BRAUN','Rue de Herm?e 249','4040','HERSTAL','04/289 04 55','','info@braunsprl.be','',0,'Belgique'),(430,'BRION & CHARLOT SA','Rue du Marais 2','6061','MONTIGNIES-SUR-SAMBRE','071/30 11 98','071/30 14 33','info@brionetcharlot.be','www.brionetcharlot.be',0,'Belgique'),(431,'BUET JEAN-CLAUDE','Rue du Ch?ne 14','4170','COMBLAIN-AU-PONT','04/369 18 32','04/369 28 95','','',0,'Belgique'),(439,'CAPITAL STRUCTURE','Rue Auguste Buisseret 53','4000','LIEGE','','','','',0,'Belgique'),(441,'CLOSE','Parc artisanal de Harz? - Rue de la H? Copin 9','4920','AYWAILLE','04/384 53 90','04/384 65 48','info@close.be','www.close.be',0,'Belgique'),(442,'COFELY SERVICES SA','Rue de la Boverie 379','4100','SERAING','04/366 79 59 (bip 695)','04/366 81 35','','',0,'Belgique'),(443,'COLLIGNON','Briscol 4','6997','EREZEE','04/388 15 15','','dewandre@collignon.net','',0,'Belgique'),(444,'COLLIGNON SPRL','Rue d\'Oth?e 73','4430','ANS','04/263 73 73','04/246 50 01','cobo5098@hotmail.com','',0,'Belgique'),(445,'COPPEE-COURTOY SA','Boulevard Fr?re Orban 25 bte 10','4000','LIEGE','04/254 48 11','','','',0,'Belgique'),(446,'COSMELEC','Rue Lonhienne 5','4870','TROOZ','0493/20 75 25','','cosmelec-electricite@hotmail.com','',0,'Belgique'),(447,'CPM','Quai des Ardennes 36','4020','LIEGE','04/343 01 38','','cpm@cpm-sprl.be','',0,'Belgique'),(448,'CREATURE SPRL','Rue Haute 41','4650','HERVE','087/68 16 00 - 0497/70 22 35','','creature@scarlet.be','',0,'Belgique'),(449,'DANNEELS','Rue des Gerboises 6','5100','NANINNE','','','info@danneels.sanitaires.be','',0,'Belgique'),(450,'DAUVISTER','Rue Crufer','4970','FRANCORCHAMPS','','','info@dauvister.com','',0,'Belgique'),(451,'DELTA PLUS ENGINEERING & CONSULTING SPRL','Rue Jean Depas 59','4101','JEMEPPE-SUR-MEUSE','04/384 59 61','','','',0,'Belgique'),(452,'DETHIER HENRI FILS','Route de Hottleux 100 AB / 102','4950','WAIMES','080/67 95 61','080/67 82 88','info@henri-dethier.be','',0,'Belgique'),(453,'DETHIER VK','Rue Fabry 42','4000','LIEGE','04/254 48 50','04/254 48 51','info@dethier.be','www.dethier.be',0,'Belgique'),(454,'D-FI','Rue Rodolphe Bernard 64a','4140','SPRIMONT','04/369 30 24','','d-fi@skynet.be','',0,'Belgique'),(455,'DIDIER COURTOIS','Rue Henri Delvaux 34','4430','ANS','04/263 40 86 - 0493/74 53 12','','didiercourtois@scarlet.be','',0,'Belgique'),(456,'DIEDERICKX SA','Voie du Belv?d?re 1','4100','SERAING','04/330 30 30','04/330 30 39','','',0,'Belgique'),(457,'DONEA JOSEPH ETS','Rue de Val-Dieu 19','4880','AUBEL','087/68 72 95','087/68 66 94','info@donea.be','www.donea.be',0,'Belgique'),(458,'DONEUX HUY SPRL','Quai d\'Arona 17','4500','HUY','085/27 43 43','085/21 21 79','info@doneux-huy.be','www.doneux-huy.be',0,'Belgique'),(459,'DOUIN','Rue du Bellenay 98-100','4040','HERSTAL','04/379 63 93','04/379 74 48','info@douin.be','www.douin.be',0,'Belgique'),(460,'DRAGA FR?RES','Chauss?e de Li?ge 241','4460','GR?CE-HOLLOGNE','04/224 14 21','04/224 14 01','info@draga-freres.com','www.draga-freres.com',0,'Belgique'),(461,'DR?GER','Heide 10','1780','WEMMEL','04/462 62 11 - 0470/ 18 78 25','02/609 52 43','Sebastien.BAEYENS@draeger.com','',0,'Belgique'),(462,'DUCHENE SA','Route de Str?e 44','4577','MODAVE','085/51 01 11','085/51 10 40','info@duchene.eiffage.be','www.duchene-sa.be',0,'Belgique'),(463,'DVM PHD SCINNAMIC (CIM)','Centre Hospitalier Universitaire - Avenue de l\'H?pital 1/B34','4000','LIEGE','','','info@scinnamic.be','',0,'Belgique'),(464,'E.M.B. SPRL','Chauss?e de Haecht 1219','1130','BRUXELLES','02/215 19 49','02/216 66 42','info@emb.be','www.emb.be',0,'Belgique'),(465,'EDMOLIFT SOLUTION','Devant l\'A?te 40   1','4031','ANGLEUR','','','','',0,'Belgique'),(466,'ELLYPS SA','Rue de la Pav?e 5 - bte 3','5101','ERPENT (NAMUR)','','','','',0,'Belgique'),(467,'ENERGYS','Rue de la Chaudronnerie 14','4340','AWANS','04/247 32 38','04/246 98 90','contact@energys-belux.eu','www.energys-belux.eu',0,'Belgique'),(468,'ENTREPRISE Y. RINALDI SA','Parc industriel d\'Ivoz Ramet 4','4400','FLEMALLE','04/337 58 00','04/337 58 57','rinaldi@rinaldi.be','',0,'Belgique'),(469,'ERNOUD C?DRIC','Rue Wagner 211','4100','BONCELLES','','','','',0,'Belgique'),(470,'ESSEC','Schoebroekstraat 48','3583','PAAL-BERINGEN','011/45 04 60','011/45 04 61','paal@essec.be','',0,'Belgique'),(471,'ETCM SPRL','Route de Falise 33','4960','MALMEDY','080/33 80 50','080/77 12 30','info@etcm.be','www.etcm.be',0,'Belgique'),(472,'ETS BERNARDIN SA','Boulevard R. Poincar? 75','4000','LIEGE','04/343 48 76','04/343 48 78','bernardin@bernardin.be','',0,'Belgique'),(473,'EURO PEINT SA','Rue Ernest Solvay 218','4000','LIEGE','04/254 13 75','04/254 12 79','europeint@skynet.be','',0,'Belgique'),(474,'FRAN?OIS MENUISERIE SPRL','Rue Fran?ois Logen 6','4101','JEMEPPE-SUR-MEUSE','04/233 94 34','04/234 00 24','info@menuiseriefrancois.com','',0,'Belgique'),(475,'FRANKI SA','Parc artisanal des Cahottes - Chemin des Moissons 10','4400','FLEMALLE','04/250 51 50','04/250 53 51','info@franki.be','www.franki.be',0,'Belgique'),(476,'FRESON','Rue d\'Oupeye, 50','4342','HOGNOUL','04/246.91.98','04/247.13.54','menuiseriefreson@skynet.be','www.menuiseriefreson.be',0,'Belgique'),(477,'GAJA SERVICES SA','Rue de la Limite 145','4040','HERSTAL','04/240 45 26 - 0495/25 81 03','04/240 45 36','','www.galloservice.be',0,'Belgique'),(478,'GALEART CONSTRUCT','Rue Tavalle 129','4400','FLEMALLE','04/234 25 64','04/234 05 02','','',0,'Belgique'),(479,'GARCIA','Rue de Hesbaye 127','4000','LIEGE','','','','',0,'Belgique'),(480,'GARGANO','All?e des Fauvettes 65','4432','ALLEUR','04/263 34 62','','','',0,'Belgique'),(481,'GEORGES HENNEN SPRL','Charneux 86','4845','JALHAY','087/22 62 72','087/22 61 33','sprlgeorgeshennen@hotmail.com','',0,'Belgique'),(482,'GERARD','Rue Belle Vue 18','4530','VILLERS-LE-BOUILLET','085/23 50 52 - 0477/22 60 64','','cgerardsa@skynet.be','',0,'Belgique'),(483,'GLOBAL ELECTRIC','Rue Andr? Renard 61','4430','ANS','04/263 13 70 - 0498/61 00 97','04/263 03 71','ov@global-electric.be','www.global-electric.be',0,'Belgique'),(484,'GOESSENS ENERGIE SA','Avenue du Parc 25','4650','CHAINEUX (HERVE)','087/68 77 66','087/68 77 44','info@goessens-energie.be','www.goessens-energie.be',0,'Belgique'),(485,'HENKENS FR?RES SA','Rue Saint Martin 6','4841','HENRI-CHAPELLE','087/88 07 61','','info@henkens-freres.be','',0,'Belgique'),(486,'HEYER-C&I','Schurhovenveld 3237','3800','SINT-TRUIDEN','011/68 18 62 - 0476/94 41 83','011/67 16 25','info.hci@heyer-ci.com','www.heyer-ci.com',0,'Belgique'),(487,'HOUBEN SA','Zoning industriel de la Boverie - Rue du Teris 65','4100','SERAING','04/385 07 07','','infos@houben.be','www.houben.be',0,'Belgique'),(488,'HUPPY PINCKAERS MENUISERIE SA','La Planck 11','3790','FOURONS','04/381 07 86 - 0495/30 46 65','','','',0,'Belgique'),(489,'ICCOR SPRL','Rue Harkay 527','4400','FLEMALLE','0487/61 48 46','','','',0,'Belgique'),(490,'J. HORMAN','Rosi?re la Petite, 9','6640','VAUX-SUR-S?RE','061/26.70.26','061/26.69.64','courrier@horman.be','www.horman.be',0,'Belgique'),(491,'JMV COLAS SA BELGIUM','Rue Nestor Martin 313','1082','BRUXELLES','04/257 93 23','','jmv@colas.be','',0,'Belgique'),(492,'JUFFERN & FILS SPRL','Rue Haute 104b','4700','EUPEN','087/88 06 33','087/88 35 69','info@juffern.be','www.juffern.be',0,'Belgique'),(493,'KEPPENNE','Chauss?e Romaine 79','4360','OREYE','019/67 74 38','019/67 76 93','sakeppenne@voo.be','',0,'Belgique'),(494,'KLEINEN & FILS','Gorhez 273','4880','AUBEL','087/68 65 11','087/68 61 21','info@jjk.be','',0,'Belgique'),(495,'KLINKENBERG MICHEL & FILS SA','Rue du Fourneau 43B','4030','GRIVEGNEE','04/366 00 31','04/366 00 90','info@klinkenberg.be','www.klinkenberg.be',0,'Belgique'),(496,'KLINKENBERG SEPPI SA','Avenue de la R?sistance 530','4630','MICHEROUX','04/377 20 81','','','',0,'Belgique'),(497,'KONE BELGIUM','Z.I. des Hauts Sarts - 1er Avenue 66','4040','HERSTAL','04/340 58 14','04/341 07 21','','',0,'Belgique'),(498,'KUBE ENTREPRISE SPRL','Route du Pays de Li?ge 1','4020','LIEGE','0473/23 61 45','','info@kube-entreprise.be','',0,'Belgique'),(499,'LAMELEC','Route de Tohogne 1','6941','BOMAL S/OURTHE','086/21 05 65','086/21 05 76','','www.lamelec.be',0,'Belgique'),(500,'LAURENTY SA','Rue Lairesse 22','4020','LIEGE','04/343 45 47','04/343 40 63','liege@laurenty.be','www.laurenty.be',0,'Belgique'),(501,'LECLERCQ CONSTRUCTION SPRL','Parc artisanal du Monceau 4','4130','TILFF','04/388.10.98','04/388.16.51','','',0,'Belgique'),(502,'LECRY MICHA?L','Rue d\'Oxhon 1','4550','VILLERS-LE-TEMPLE','','','','',0,'Belgique'),(503,'LEDUC JOSEPH MALAISE SA','Rue Maurice Duch?ne 52b','4340','OTHEE','04/257 42 74','04/257 45 70','leducmalaise@skynet.be','',0,'Belgique'),(504,'LEMAIRE ANDR? ETS','Rue Fayais 4','4950','WAIMES','080/67 01 70','080/67 01 75','info@lemaire-a-elec.be','www.lemaire-a-elec.be',0,'Belgique'),(505,'LUC WAUTERS','Voie de Saive 12','4630','TIGNEE','','','','',0,'Belgique'),(506,'LUCAS FABIEN SPRL','Rue Saint-Georges 13','4317','VIEMME (FAIMES)','019/56 67 57','','fabien.lucas@skynet.be','',0,'Belgique'),(507,'M. BONTEN SA','Rue de Battice 156','4880','AUBEL','087/68 73 04','087/68 72 25','info@bonten.com','www.bonten.com',0,'Belgique'),(508,'M.A.M.','Rue du Ch?teau d\'Eau 6','4121','NEUPRE','04/371 43 04','','info@mamenuiserie.be','www,mamenuiserie.be',0,'Belgique'),(509,'MAQUET BELGIQUE NV','Assesteenweg 117  3','1740','TERNAT','02/467 85 85','','maquet@maquet.be','www.maquet.com',0,'Belgique'),(510,'MATES','Bootdijkstraat 82','9220','HAMME','02/653 07 25 - 0479/08 81 44','','','',0,'Belgique'),(511,'MENINTEX','Rue de Bruxelles 120','4340','AWANS','','','','',0,'Belgique'),(512,'MENUISERIE BEAUDRY','Rue Renaissance 28','5376','MIECRET (HAVELANGE)','083/63 41 01','083/21 82 70','info@menuiseriebeaudry.be','www.menuiseriebeaudry.be',0,'Belgique'),(513,'METROCALOR / HUMBLET LUC','Rue de la Charrette 62','4130','TILFF','','','','',0,'Belgique'),(514,'NAMOTTE SA','Avenue de l\'Expansion 11','4432','ALLEUR','04/263 46 10','04/246 10 35','namotte@skynet.be','www.namotte.be',0,'Belgique'),(515,'NEWELEC','Rue des Fraisiers 91','4041','VOTTEM','04/227 18 08','','info@newelec.be','',0,'Belgique'),(516,'NIZET ENTREPRISE SA','Rue Laid Burniat 2','1348','LOUVAIN-LA-NEUVE','010/45 18 67','010/45 27 82','nizet@nizet.be','www.nizet.be',0,'Belgique'),(517,'OBURO','Boulevard de Douai 48','4020','LIEGE','04/344 12 73','04/344 50 83','info@oburo.be','',0,'Belgique'),(518,'PALM M?BELWERKE AG','Morsheck 2','4760','B?LLINGEN','080/64 78 09','080/64 76 55','info@palm-mobelwerke.be','',0,'Belgique'),(519,'PALUMBO','Rue Mozart 43','4100','SERAING','','04/337 70 54','info@palumbosprl.com','',0,'Belgique'),(520,'PARQUET N?1','Rue du Ch?ne 198','4100','SERAING','04/337 60 14','04/385 00 58','','www.parquetn1.be',0,'Belgique'),(521,'PARQUETBEL SA','Rue du Terril 2','4460','GR?CE-HOLLOGNE','04/226 07 43','04/226 59 50','info@parquetbel.be','www.parquetbel.be',0,'Belgique'),(522,'PEINTURA SPRL','Rue Vivegnis 86','4000','LIEGE','04/227 00 32','04/227 48 85','sprlpeintura@swing.be','',0,'Belgique'),(523,'PIERRE-ALAIN BERNARD','Rue Maghin 44','4000','LIEGE','0496/27.18.98','04/222.98.89','pabernard.archi@skynet.be','',0,'Belgique'),(524,'PIGMENT GRAPHIC SPRL','Route de Floriheid 103a','4960','MALMEDY','080/77.07.37 - 0496/52.25.20','','info@pigment-graphic.be','www.pigment-graphic.com',0,'Belgique'),(525,'PIRRELLO','Rue des Cerisiers 11','4680','OUPEYE','04/278 45 95 - 0475/64 47 10','','pirrello@skynet.be','',0,'Belgique'),(526,'PISERCHIA ART CARRELAGES SPRL','Rue de Seneffe 1','7160','GODARVILLE','064/45 12 66','064/45 19 50','michel.piserchia@piserchia.be','',0,'Belgique'),(527,'POLEUR-KINET SA','Rue Waloppe 5','4540','AMPSIN','085/31 11 76','085/31 59 31','okinet@bigmat.be','www.bigmat.be',0,'Belgique'),(528,'POLYTHERM','Zoning industriel - Rue du Travail 7','4460','GR?CE-HOLLOGNE','','','','',0,'Belgique'),(529,'REINERTZ','Zum Brand 5','4750','BUTGENBACH','080/44 62 26','080/44 44 27','info@reinertz.com','www.reinertz.com',0,'Belgique'),(530,'REN? SIMAR SPRL','Rue B?ribou 6','4800','VERVIERS','087/33 80 62','087/31 28 77','yves.simar@skynet.be','',0,'Belgique'),(531,'RENOPARQUET','Rue de la Charmille 31','4577','STREE','085/30 18 27 - 0497/17 74 29','','info@renoparquet.be','',0,'Belgique'),(532,'R?NO\'V & SOLS','Rue de Wixhou 56','4601','ARGENTEAU','04/377 68 35','','','',0,'Belgique'),(533,'REXEL','Avenue de l\'Expansion 9bis','4432','ALLEUR','','','','',0,'Belgique'),(534,'RLC BELGIUM SPRL','Avenue des Cerfs 22','4031','ANGLEUR','04/365 95 04','','','',0,'Belgique'),(535,'SAGELEC','Rue du Hock 36','4121','NEUVILLE-EN-CONDROZ','04/372 09 14','04/372 01 28','','www.sagelec.be',0,'Belgique'),(536,'SCHINDLER','Rue Coquelet 134','5000','BOUGE (NAMUR)','0800/17 070','','','',0,'Belgique'),(537,'SCHYNS PARQUET','Rue du Ch?teau 40','4650','HERVE','087/67 98 98','087/67 95 87','','www.schynsparquet.be',0,'Belgique'),(538,'SERVAIS SPRL','Zoning artisanal de Cornemont - Rue de la L?gende 45E','4141','SPRIMONT','04/365 44 99 - 0475/52 08 66','04/365 44 98','servais.sprl@skynet.be','',0,'Belgique'),(539,'SERVICE PUBLIC DE WALLONIE - DIRECTION G?N?RALE OP?RATIONNELLE DE L\'AM?NAGEMENT DU TERRITOIRE, DU LOGEMENT, DU PATRIMOINE ET DE L\'?NERGIE','D?partement de l\'Energie et du B?timent durable - Chauss?e de Li?ge 140-142','5100','JAMBES','04/231.63.01','','DGO1-51@spw.wallonie.be','',0,'Belgique'),(540,'SIEMENS SA','Square Marie Curie 30','1070','BRUXELLES','','02/536 46 51','','www.siemens.be',0,'Belgique'),(541,'SOTRACAR SA','Sur les Thiers 13b','4890','THIMISTER','087/44 66 74','087/44 58 23','sotracar@sotracar.be','www.sotracar.be',0,'Belgique'),(542,'STOPLER BELGIUM','Koning Albert 1er - Loan 61','1780','WEMMEL','02/267 38 10','','info@stopler.be','www.stopler.be',0,'Belgique'),(543,'SWISSLOG FRANCE SA','Hall A, 8?me ?tage - Rue Charles Michels 84','93284','SAINT-DENIS CEDEX (FRANCE)','+33/1.48.09.68.42 - +33/6.74.79.79.67','+33/1.48.20.12.28','francois.meira@swisslog.com','www.swisslog.com',0,'Belgique'),(544,'SYNERGY OF TECHNOLOGY AND SECURITY SA','Z.A.E.R. Op der H?i B.P.30','9801','HOSINGEN','052/26 90 59-1','052/26 90 59-99','info@sts.lu','www.sts.lu',0,'Belgique'),(545,'T.I.F.','4?me Avenue 86 Zoning des Hauts Sarts','4040','HERSTAL','04/286 12 38','04/286 56 24','info@sctif.be','www.sctif.be',0,'Belgique'),(546,'TDS ACIOR','Rue de l\'Hippodrome 186','4000','LIEGE','04/254 99 10','04/253 19 83','lie@tds-office.com','',0,'Belgique'),(548,'TECHNUM - TRACTEBEL ENGINEERING','Avenue Ariane 7','1200','WOLUWE-SAINT-LAMBERT','02/773 99 11','','','',0,'Belgique'),(549,'THOMASSEN & FILS SPRL','Rue de Maestricht 96','4600','VISE','','','','',0,'Belgique'),(550,'TLV','Chauss?e de Bruxelles 43','1410','WATERLOO','0496/81 30 15','','wilhelmi.rudy@skynet.be','',0,'Belgique'),(551,'TRILUX SA','Avenue des dessus de Lives 2','5101','NAMUR','081/41 36 41','','info@trilux.be','',0,'Belgique'),(553,'VOIRIE PARKING ELOY','Zoning de Damr? - Rue des Spinettes','4140','SPRIMONT','04/382 34 44','04/382 33 03','','',0,'Belgique'),(554,'VRANCKEN ETS','Avenue Albert 1er 66','4030','GRIVEGNEE','04/343 44 37','04/341 29 85','','',0,'Belgique'),(555,'WALHIN SA','Rue du Fer 22','4020','LIEGE','04/342 14 62','','info@walhin.be','',0,'Belgique'),(556,'TRAVAUX ET RENOVATION SPRL','','','','','','','',0,'Belgique'),(558,'ABCIS VAN WETTER','','','','','','','',0,'Belgique'),(559,'RECO+','Rue de Chesseroux 5','4651','BATTICE','084/78.75.56','085/46.21.82','','',0,'Belgique');
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_activity`
--

DROP TABLE IF EXISTS `company_activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_activity`
--

LOCK TABLES `company_activity` WRITE;
/*!40000 ALTER TABLE `company_activity` DISABLE KEYS */;
INSERT INTO `company_activity` VALUES (0,'N/A'),(2,'Chauffage'),(4,'Plafonnage'),(6,'Maçonnerie');
/*!40000 ALTER TABLE `company_activity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1087 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` VALUES (948,'Administration patient'),(949,'Algologie - Soins palliatifs'),(950,'Anatomie pathologique'),(951,'Anesthésie - Réanimation'),(952,'APE'),(953,'Atelier biomédicaux et des bâtiments multisites'),(954,'ATI'),(955,'Audit interne'),(956,'Bloc op - Chirurgie cardio-vasculaire'),(957,'Bloc op - Chirurgie de l\'appareil locomoteur'),(958,'Bloc op - Urgences'),(959,'Bloc op - Urologie - Chirurgie abdominale'),(960,'Bloc opératoire'),(961,'Cardiologie'),(962,'Cardiologie NDB'),(963,'Centre d\'oncologie'),(964,'Chimie médicale'),(965,'Chirurgie  maxillo-faciale'),(966,'Chirurgie abdominale'),(967,'Chirurgie appareil locomoteur'),(968,'Chirurgie cardio-vasculaire et thoracique'),(969,'Chirurgie Maxillo et plastique (SI+2D)'),(970,'Chirurgie maxillo-faciale'),(971,'Chirurgie maxillo-faciale et plastique'),(972,'Chirurgie Orthopédique'),(973,'Clinique d\'audiophonologie'),(974,'Cofely services'),(975,'Communication'),(976,'Contrôle de gestion'),(977,'Crèche Valensart'),(978,'Croix-rouge - Transfusion'),(979,'Dentisterie'),(980,'Département des services logistiques'),(981,'Département financier'),(982,'Département physique médicale'),(983,'Département technique - Administration'),(984,'Département technique - Atelier'),(985,'Département technique - Bureau d\'études'),(986,'Département technique - Direction'),(987,'Département technique - Exploitation'),(988,'Dermatologie'),(989,'Dermatopathologie'),(990,'Diabétologie, nutrition, maladies métaboliques'),(991,'Dialyse'),(992,'Direction des soins infirmiers'),(993,'Direction financière'),(994,'Direction générale'),(995,'Direction médicale'),(996,'DSL - Logistique patient'),(997,'Facturation'),(998,'Frais communs médecine'),(999,'Frais généraux et de personnel'),(1000,'Frais généraux et de personnel - Audit Interne'),(1001,'Frais médicaux communs - Esneux - Gastro-Entérologie-Hépatologie'),(1002,'Gastroentérologie'),(1003,'Gastro-Entérologie-Hépatologie'),(1004,'Génétique'),(1005,'Gériatrie'),(1006,'Gériatrie - Direction des soins infirmier'),(1007,'GSI'),(1008,'GSI - Direction médicale'),(1009,'Gynécologie-Obstétrique'),(1010,'Hématologie Biologique et Immuno Hématologie'),(1011,'Hématologie clinique'),(1012,'Hôpital de jour chirurgicale'),(1013,'Hopital de jour NDB'),(1014,'Hopital de jour onco +3D'),(1015,'Hospitalisation - Cardiologie (sn-2)'),(1016,'Hospitalisation - Chir abdominale'),(1017,'Hospitalisation - Chir cardiaque'),(1018,'Hospitalisation - Chirurgie appareil locomoteur'),(1019,'Hospitalisation - Gériatrie 1 NDB'),(1020,'Hospitalisation - Gériatrie 2 NDB'),(1021,'Hospitalisation - ORL - Opthalmologie - Chir +4B'),(1022,'Hospitalisation - Pneumo - Oncologie +3b'),(1023,'Hospitalisation - SI médicaux'),(1024,'Hospitalisation - Soins intensifs médicaux -2C'),(1025,'Hospitalisation - Urgences'),(1026,'Institut de dentisterie - Prothèse fixée'),(1027,'Maladies infectieuses et médecine interne générale'),(1028,'Maternité NDB'),(1029,'Médecine de l\'appareil locomoteur'),(1030,'Médecine dentaire'),(1031,'Médecine nucléaire'),(1032,'Médecine nucléaire et imagerie oncologique'),(1033,'Médecine physique'),(1034,'Médiation du personnel'),(1035,'Microbiologie Clinique'),(1036,'Microbiologie médicale'),(1037,'Microbiologie médicale - Hématologie biologique et immuno hématologie'),(1038,'Nephrologie'),(1039,'Neurochirurgie'),(1040,'Neurologie'),(1041,'Neurologie ST'),(1042,'Neuropsychologie'),(1043,'Opthalmologie'),(1044,'ORL'),(1045,'Pédiatrie'),(1046,'Pharmacie'),(1047,'Pharmacologie Clinique'),(1048,'Pneumologie - Allergologie'),(1049,'Polyclinique d\'Aywaille'),(1050,'Psychiatrie'),(1051,'Psychiatrie et psychologie médicale'),(1052,'Radiodiagnostique'),(1053,'Radiothérapie'),(1054,'Radiothérapie - Département physique médicale'),(1055,'Rhumatologie'),(1056,'RMN NDB'),(1057,'SAI'),(1058,'Salle maternité NDB'),(1059,'Salle Médecine A NDB'),(1060,'Salle pédiatrie NDB'),(1061,'Salles urgences NDB'),(1062,'Secteur alimentation'),(1063,'Secteur biologie moléculaire'),(1064,'Secteur gardiennage'),(1065,'Secteur nettoyage - Secteur lingerie'),(1066,'Secteur recouvrement'),(1067,'Sénologie'),(1068,'Sénologie - Radiodiagnostique'),(1069,'Service administration des patients'),(1070,'Service approvisionnement'),(1071,'Service communication'),(1072,'Service facturation'),(1073,'Service interne prévention et protection travail'),(1074,'Service méthodologie de projet'),(1075,'Service processus RH'),(1076,'Service projets et informations (SPI)'),(1077,'Service social des patients hospitalisés'),(1078,'Service social du personnel - Secteur accueil patient'),(1079,'SIME'),(1080,'SIPPT'),(1081,'Soins intensif NDB'),(1082,'Soins intensifs'),(1083,'Soins intensifs médicaux'),(1084,'Toxicologie clinique'),(1085,'Urgences'),(1086,'Urologie');
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `document`
--

DROP TABLE IF EXISTS `document`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `project_work_id` int(11) DEFAULT NULL,
  `filename` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `comment` text,
  PRIMARY KEY (`id`),
  KEY `fk_project_work_idx` (`project_work_id`),
  KEY `fk_project2_idx` (`project_id`),
  CONSTRAINT `fk_project2` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_project_work` FOREIGN KEY (`project_work_id`) REFERENCES `project_work` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `document`
--

LOCK TABLES `document` WRITE;
/*!40000 ALTER TABLE `document` DISABLE KEYS */;
INSERT INTO `document` VALUES (1,4,1,'photo-degat-accident-613f33076ea23.jpeg','C:\\xampp803\\htdocs\\tfe/upload',NULL),(2,4,NULL,'photo-degat-accident-614345866694e.jpeg','C:\\xampp803\\htdocs\\tfe/upload','test');
/*!40000 ALTER TABLE `document` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `firstname` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_department_idx` (`department_id`),
  KEY `fk_role_idx` (`role_id`),
  CONSTRAINT `fk_department` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_role` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES (3,985,3,'Donato','Abiuso','04/366.79.29',NULL,'donato.abiuso@chuliege.be'),(4,985,2,'Frédéric','Veillesse','04/366.79.29',NULL,'f.veillesse@chuliege.be'),(5,985,2,'Chiara','Capuano','04/366.79.29',NULL,'chiara.capuano@chuliege.be'),(6,985,8,'Inssaf','Douibi','04/366.79.29',NULL,'inssaf.douibi@chuliege.be'),(7,985,9,'Calogero','Cino','04/366.79.29',NULL,'calogero.cino@chuliege.be'),(8,985,1,'Gaël','Dahner','04/366.76.19',NULL,'gael.dahner@chuliege.be');
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `engineering_office`
--

DROP TABLE IF EXISTS `engineering_office`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `engineering_office` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sort_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_sort_idx` (`sort_id`),
  CONSTRAINT `fk_sort` FOREIGN KEY (`sort_id`) REFERENCES `engineering_office_sort` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `engineering_office`
--

LOCK TABLES `engineering_office` WRITE;
/*!40000 ALTER TABLE `engineering_office` DISABLE KEYS */;
INSERT INTO `engineering_office` VALUES (1,3,'ARCADIS ENGINEERING & CONSULTING','Rue des Guillemins 26','4000','LIEGE','Belgique','04/349 56 00','04/349 56 10','info@arcadisbelgium.be','www.arcadisbelgium.be'),(2,2,'B INGENIEURS SPRL - ESPACE ENTREPRISES NAGELMACKERS','Rue Fraischamps 203','4030','GRIVEGNEE','Belgique','04/341.02.09 - 0497/58.11.53',NULL,'bingenieurs@gmail.com',NULL),(3,2,'B.I.C.E. SPRL','Route du Condroz 106','4121','NEUVILLE-EN-CONDROZ','Belgique','04/372 10 25','04/371 36 80','bice@skynet.be',NULL),(4,7,'BUREAU CONSEIL EN GEOLOGIE','Chemin de la Foliette, 4 bte 2','5000','NAMUR','Belgique','081/58.26.11','081/58.26.12','info@bcgeol.be','www.bcgeol.be'),(5,5,'BUREAU D\'ARCHITECTURE EMILE VERHAEGEN','Boulevard du Souverain 360/B7','1160','BRUXELLES','Belgique','02/673 61 72',NULL,'exec@baev.be',NULL),(6,5,'BUREAU D\'ARCHITECTURE GREISCH S.C.R.L','Parc Industriel des Hauts-Sarts - Premi?re avenue 165','4040','HERSTAL','Belgique',NULL,'04/366 14 01','info@bagreisch.be','www.bagreisch.be'),(7,7,'BUREAU DE GEOMETRIE EXPERT GEOCAD SPRL','Rue de Henne 41','4053','EMBOURG','Belgique','04/383 76 57','04/383 76 58','info@geocad.be','www.geocad.be'),(8,5,'BUREAU D\'ETUDES BERGER SA','Voie de l\'Air Pur 6','4052','CHAUDFONTAINE','Belgique',NULL,'04/368 50 62','info@berger.be',NULL),(9,2,'BUREAU D\'ETUDES GREISCH','All?e des Noisetiers 25','4031','ANGLEUR','Belgique','04/366 16 16','04/366 16 18','bureau@greisch.com','www.greisch.com'),(10,5,'CABINET D\'ARCHITECTES P. HD SPRL','Place Saint-Jacques 16','4000','LIEGE','Belgique','04/223 33 23','04/223 46 25','phd@cabinet-phd.be',NULL),(11,6,'CDML CONSULTING','Rue des Merisiers 12','1390','ARCHENNES','Belgique',NULL,NULL,'info@cdml.be',NULL),(12,3,'DELTA PLUS ENGINEERING & CONSULTING SPRL','Rue Jean Depas 59','4101','JEMEPPE-SUR-MEUSE','Belgique','04/384 59 61',NULL,'info@delta.be',NULL),(13,5,'DETHIER VK','Rue Fabry 42','4000','LIEGE','Belgique','04/254 48 50','04/254 48 51','info@dethier.be','www.dethier.be'),(14,5,'DVM PHD SCINNAMIC (CIM)','Centre Hospitalier Universitaire - Avenue de l\'H?pital 1/B34','4000','LIEGE','Belgique',NULL,NULL,'info@scinnamic.be',NULL),(15,5,'MATES','Bootdijkstraat 82','9220','HAMME','Belgique','02/653 07 25 - 0479/08 81 44',NULL,'info@mates.be',NULL),(16,5,'SERVICE PUBLIC DE WALLONIE','Département de l\'Energie et du Bâtiment durable - Chaussée de Liège 140-142','5100','JAMBES','Belgique','04/231.63.01',NULL,'DGO1-51@spw.wallonie.be',NULL),(17,4,'VK ENGINEERING','Clemenceaulaan 87','1070','ANDERLECHT','Belgique','02/414 07 77','02/414 04 92','vke-bs-bxl@vkgroup.be','www.vkgroup.be'),(18,3,'RECO+','Rue de Chesseroux 5','4651','BATTICE','Belgique','084/78.75.56','085/46.21.82','info@reco.be',NULL);
/*!40000 ALTER TABLE `engineering_office` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `engineering_office_sort`
--

DROP TABLE IF EXISTS `engineering_office_sort`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `engineering_office_sort` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `engineering_office_sort`
--

LOCK TABLES `engineering_office_sort` WRITE;
/*!40000 ALTER TABLE `engineering_office_sort` DISABLE KEYS */;
INSERT INTO `engineering_office_sort` VALUES (2,'Stabilité'),(3,'HVAC'),(4,'Electricité'),(5,'Architecture'),(6,'Fluides médicaux'),(7,'Géomètre'),(8,'Sécurité');
/*!40000 ALTER TABLE `engineering_office_sort` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zipcode` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2904 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location`
--

LOCK TABLES `location` WRITE;
/*!40000 ALTER TABLE `location` DISABLE KEYS */;
INSERT INTO `location` VALUES (1,'1000','Brussel','BEL'),(2,'1000','Bruxelles','BEL'),(3,'1005','Ass. Réun. Com. Communau. Commune','BEL'),(4,'1005','Brusselse Hoofdstedelijke Raad','BEL'),(5,'1005','Conseil Region Bruxelles-Capitale','BEL'),(6,'1005','Ver.Verg.Gemeensch.Gemeensch.Comm.','BEL'),(7,'1006','Raad Vlaamse Gemeenschapscommissie','BEL'),(8,'1007','Ass. Commiss. Communau. française','BEL'),(9,'1008','Chambre des Représentants','BEL'),(10,'1008','Kamer van Volksvertegenwoordigers','BEL'),(11,'1009','Belgische Senaat','BEL'),(12,'1009','Senat de Belgique','BEL'),(13,'1010','Cité Administrative de l\'Etat','BEL'),(14,'1010','Rijksadministratief Centrum','BEL'),(15,'1011','Vlaamse Raad - Vlaams Parlement','BEL'),(16,'1012','Parlement de la Communauté française','BEL'),(17,'1020','Brussel (Laken)','BEL'),(18,'1020','Bruxelles (Laeken)','BEL'),(19,'1020','Laeken (Bruxelles)','BEL'),(20,'1020','Laken (Brussel)','BEL'),(21,'1030','Brussel (Schaarbeek)','BEL'),(22,'1030','Bruxelles (Schaerbeek)','BEL'),(23,'1030','Schaarbeek','BEL'),(24,'1030','Schaerbeek','BEL'),(25,'1031','Christelijke Sociale Organisaties','BEL'),(26,'1031','Organisations Sociales Chrétiennes','BEL'),(27,'1040','Brussel (Etterbeek)','BEL'),(28,'1040','Bruxelles (Etterbeek)','BEL'),(29,'1040','Etterbeek','BEL'),(30,'1041','International Press Center','BEL'),(31,'1043','VRT','BEL'),(32,'1044','RTBF','BEL'),(33,'1045','D.I.V.','BEL'),(34,'1047','Europees Parlement','BEL'),(35,'1047','Parlement Européen','BEL'),(36,'1048','E.U.-Raad','BEL'),(37,'1048','U.E.-Conseil','BEL'),(38,'1049','E.U.-Commissie','BEL'),(39,'1049','U.E.-Commission','BEL'),(40,'1050','Brussel (Elsene)','BEL'),(41,'1050','Bruxelles (Ixelles)','BEL'),(42,'1050','Elsene','BEL'),(43,'1050','Ixelles','BEL'),(44,'1060','Brussel (Sint-Gillis)','BEL'),(45,'1060','Bruxelles (Saint-Gilles)','BEL'),(46,'1060','Saint-Gilles','BEL'),(47,'1060','Sint-Gillis','BEL'),(48,'1070','Anderlecht','BEL'),(49,'1070','Brussel (Anderlecht)','BEL'),(50,'1070','Bruxelles (Anderlecht)','BEL'),(51,'1080','Brussel (Sint-Jans-Molenbeek)','BEL'),(52,'1080','Bruxelles (Molenbeek-Saint-Jean)','BEL'),(53,'1080','Molenbeek-Saint-Jean','BEL'),(54,'1080','Sint-Jans-Molenbeek','BEL'),(55,'1081','Brussel (Koekelberg)','BEL'),(56,'1081','Bruxelles (Koekelberg)','BEL'),(57,'1081','Koekelberg','BEL'),(58,'1082','Berchem-Sainte-Agathe','BEL'),(59,'1082','Brussel (Sint-Agatha-Berchem)','BEL'),(60,'1082','Bruxelles (Berchem-Sainte-Agathe)','BEL'),(61,'1082','Sint-Agatha-Berchem','BEL'),(62,'1083','Brussel (Ganshoren)','BEL'),(63,'1083','Bruxelles (Ganshoren)','BEL'),(64,'1083','Ganshoren','BEL'),(65,'1090','Brussel (Jette)','BEL'),(66,'1090','Bruxelles (Jette)','BEL'),(67,'1090','Jette','BEL'),(68,'1100','Postcheque','BEL'),(69,'1105','SOC','BEL'),(70,'1110','NAVO - NATO','BEL'),(71,'1110','OTAN - NATO','BEL'),(72,'1120','Brussel (Neder-Over-Heembeek)','BEL'),(73,'1120','Bruxelles (Neder-Over-Heembeek)','BEL'),(74,'1120','Neder-Over-Heembeek (Bru.)','BEL'),(75,'1130','Brussel (Haren)','BEL'),(76,'1130','Bruxelles (Haeren)','BEL'),(77,'1130','Haren (Bruxelles)','BEL'),(78,'1130','Haren (Brussel)','BEL'),(79,'1140','Brussel (Evere)','BEL'),(80,'1140','Bruxelles (Evere)','BEL'),(81,'1140','Evere','BEL'),(82,'1150','Brussel (Sint-Pieters-Woluwe)','BEL'),(83,'1150','Bruxelles (Woluwe-Saint-Pierre)','BEL'),(84,'1150','Sint-Pieters-Woluwe','BEL'),(85,'1150','Woluwe-Saint-Pierre','BEL'),(86,'1160','Auderghem','BEL'),(87,'1160','Brussel (Oudergem)','BEL'),(88,'1160','Bruxelles (Auderghem)','BEL'),(89,'1160','Oudergem','BEL'),(90,'1170','Brussel (Watermaal-Bosvoorde)','BEL'),(91,'1170','Bruxelles (Watermael-Boitsfort)','BEL'),(92,'1170','Watermaal-Bosvoorde','BEL'),(93,'1170','Watermael-Boitsfort','BEL'),(94,'1180','Brussel (Ukkel)','BEL'),(95,'1180','Bruxelles (Uccle)','BEL'),(96,'1180','Uccle','BEL'),(97,'1180','Ukkel','BEL'),(98,'1190','Brussel (Vorst)','BEL'),(99,'1190','Bruxelles (Forest)','BEL'),(100,'1190','Forest','BEL'),(101,'1190','Vorst','BEL'),(102,'1200','Brussel (Sint-Lambrechts-Woluwe)','BEL'),(103,'1200','Bruxelles (Woluwe-Saint-Lambert)','BEL'),(104,'1200','Sint-Lambrechts-Woluwe','BEL'),(105,'1200','Woluwe-Saint-Lambert','BEL'),(106,'1201','R.T.L. - T.V.I.','BEL'),(107,'1210','Brussel (Sint-Joost-ten-Node)','BEL'),(108,'1210','Bruxelles (Saint-Josse-ten-Noode)','BEL'),(109,'1210','Saint-Josse-ten-Noode','BEL'),(110,'1210','Sint-Joost-ten-Node','BEL'),(111,'1212','FOD Mobiliteit','BEL'),(112,'1212','SPF Mobilité','BEL'),(113,'1300','Limal','BEL'),(114,'1300','Wavre','BEL'),(115,'1301','Bierges','BEL'),(116,'1310','La Hulpe','BEL'),(117,'1315','Glimes','BEL'),(118,'1315','Incourt','BEL'),(119,'1315','Opprebais','BEL'),(120,'1315','Piètrebais','BEL'),(121,'1315','Roux-Miroir','BEL'),(122,'1320','Beauvechain','BEL'),(123,'1320','Hamme-Mille','BEL'),(124,'1320','l\'Ecluse','BEL'),(125,'1320','Nodebais','BEL'),(126,'1320','Tourinnes-la-Grosse','BEL'),(127,'1325','Bonlez','BEL'),(128,'1325','Chaumont-Gistoux','BEL'),(129,'1325','Corroy-le-Grand','BEL'),(130,'1325','Dion-Valmont','BEL'),(131,'1325','Longueville','BEL'),(132,'1330','Rixensart','BEL'),(133,'1331','Rosières','BEL'),(134,'1332','Genval','BEL'),(135,'1340','Ottignies','BEL'),(136,'1340','Ottignies-Louvain-la-Neuve','BEL'),(137,'1341','Céroux-Mousty','BEL'),(138,'1342','Limelette','BEL'),(139,'1348','Louvain-la-Neuve','BEL'),(140,'1350','Enines','BEL'),(141,'1350','Folx-les-Caves','BEL'),(142,'1350','Jandrain-Jandrenouille','BEL'),(143,'1350','Jauche','BEL'),(144,'1350','Marilles','BEL'),(145,'1350','Noduwez','BEL'),(146,'1350','Orp-Jauche','BEL'),(147,'1350','Orp-le-Grand','BEL'),(148,'1357','Hélécine','BEL'),(149,'1357','Linsmeau','BEL'),(150,'1357','Neerheylissem','BEL'),(151,'1357','Opheylissem','BEL'),(152,'1360','Malèves-Sainte-Marie-Wastines','BEL'),(153,'1360','Orbais','BEL'),(154,'1360','Perwez','BEL'),(155,'1360','Thorembais-les-Béguines','BEL'),(156,'1360','Thorembais-Saint-Trond','BEL'),(157,'1367','Autre-Eglise','BEL'),(158,'1367','Bomal (Bt.)','BEL'),(159,'1367','Geest-Gérompont-Petit-Rosière','BEL'),(160,'1367','Gérompont','BEL'),(161,'1367','Grand-Rosière-Hottomont','BEL'),(162,'1367','Huppaye','BEL'),(163,'1367','Mont-Saint-André','BEL'),(164,'1367','Ramillies','BEL'),(165,'1370','Dongelberg','BEL'),(166,'1370','Jauchelette','BEL'),(167,'1370','Jodoigne','BEL'),(168,'1370','Jodoigne-Souveraine','BEL'),(169,'1370','Lathuy','BEL'),(170,'1370','Mélin','BEL'),(171,'1370','Piétrain','BEL'),(172,'1370','Saint-Jean-Geest','BEL'),(173,'1370','Saint-Remy-Geest','BEL'),(174,'1370','Zétrud-Lumay','BEL'),(175,'1380','Couture-Saint-Germain','BEL'),(176,'1380','Lasne','BEL'),(177,'1380','Lasne-Chapelle-Saint-Lambert','BEL'),(178,'1380','Maransart','BEL'),(179,'1380','Ohain','BEL'),(180,'1380','Plancenoit','BEL'),(181,'1390','Archennes','BEL'),(182,'1390','Biez','BEL'),(183,'1390','Bossut-Gottechain','BEL'),(184,'1390','Grez-Doiceau','BEL'),(185,'1390','Nethen','BEL'),(186,'1400','Monstreux','BEL'),(187,'1400','Nivelles','BEL'),(188,'1401','Baulers','BEL'),(189,'1402','Thines','BEL'),(190,'1404','Bornival','BEL'),(191,'1410','Waterloo','BEL'),(192,'1414','Promo-Control','BEL'),(193,'1420','Braine-l\'Alleud','BEL'),(194,'1421','Ophain-Bois-Seigneur-Isaac','BEL'),(195,'1428','Lillois-Witterzée','BEL'),(196,'1430','Bierghes','BEL'),(197,'1430','Quenast','BEL'),(198,'1430','Rebecq','BEL'),(199,'1430','Rebecq-Rognon','BEL'),(200,'1435','Corbais','BEL'),(201,'1435','Hévillers','BEL'),(202,'1435','Mont-Saint-Guibert','BEL'),(203,'1440','Braine-le-Château','BEL'),(204,'1440','Wauthier-Braine','BEL'),(205,'1450','Chastre','BEL'),(206,'1450','Chastre-Villeroux-Blanmont','BEL'),(207,'1450','Cortil-Noirmont','BEL'),(208,'1450','Gentinnes','BEL'),(209,'1450','Saint-Géry','BEL'),(210,'1457','Nil-Saint-Vincent-Saint-Martin','BEL'),(211,'1457','Tourinnes-Saint-Lambert','BEL'),(212,'1457','Walhain','BEL'),(213,'1457','Walhain-Saint-Paul','BEL'),(214,'1460','Ittre','BEL'),(215,'1460','Virginal-Samme','BEL'),(216,'1461','Haut-Ittre','BEL'),(217,'1470','Baisy-Thy','BEL'),(218,'1470','Bousval','BEL'),(219,'1470','Genappe','BEL'),(220,'1471','Loupoigne','BEL'),(221,'1472','Vieux-Genappe','BEL'),(222,'1473','Glabais','BEL'),(223,'1474','Ways','BEL'),(224,'1476','Houtain-le-Val','BEL'),(225,'1480','Clabecq','BEL'),(226,'1480','Oisquercq','BEL'),(227,'1480','Saintes','BEL'),(228,'1480','Tubize','BEL'),(229,'1490','Court-Saint-Etienne','BEL'),(230,'1495','Marbais (Bt.)','BEL'),(231,'1495','Mellery','BEL'),(232,'1495','Sart-Dames-Avelines','BEL'),(233,'1495','Tilly','BEL'),(234,'1495','Villers-la-Ville','BEL'),(235,'1500','Halle','BEL'),(236,'1501','Buizingen','BEL'),(237,'1502','Lembeek','BEL'),(238,'1540','Herfelingen','BEL'),(239,'1540','Herne','BEL'),(240,'1541','Sint-Pieters-Kapelle (Bt.)','BEL'),(241,'1547','Bever','BEL'),(242,'1547','Bievene','BEL'),(243,'1560','Hoeilaart','BEL'),(244,'1570','Galmaarden','BEL'),(245,'1570','Tollembeek','BEL'),(246,'1570','Vollezele','BEL'),(247,'1600','Oudenaken','BEL'),(248,'1600','Sint-Laureins-Berchem','BEL'),(249,'1600','Sint-Pieters-Leeuw','BEL'),(250,'1601','Ruisbroek (Bt.)','BEL'),(251,'1602','Vlezenbeek','BEL'),(252,'1620','Drogenbos','BEL'),(253,'1630','Linkebeek','BEL'),(254,'1640','Rhode-Saint-Genese','BEL'),(255,'1640','Sint-Genesius-Rode','BEL'),(256,'1650','Beersel','BEL'),(257,'1651','Lot','BEL'),(258,'1652','Alsemberg','BEL'),(259,'1653','Dworp','BEL'),(260,'1654','Huizingen','BEL'),(261,'1670','Bogaarden','BEL'),(262,'1670','Heikruis','BEL'),(263,'1670','Pepingen','BEL'),(264,'1671','Elingen','BEL'),(265,'1673','Beert','BEL'),(266,'1674','Bellingen','BEL'),(267,'1700','Dilbeek','BEL'),(268,'1700','Sint-Martens-Bodegem','BEL'),(269,'1700','Sint-Ulriks-Kapelle','BEL'),(270,'1701','Itterbeek','BEL'),(271,'1702','Groot-Bijgaarden','BEL'),(272,'1703','Schepdaal','BEL'),(273,'1730','Asse','BEL'),(274,'1730','Bekkerzeel','BEL'),(275,'1730','Kobbegem','BEL'),(276,'1730','Mollem','BEL'),(277,'1731','Relegem','BEL'),(278,'1731','Zellik','BEL'),(279,'1740','Ternat','BEL'),(280,'1741','Wambeek','BEL'),(281,'1742','Sint-Katherina-Lombeek','BEL'),(282,'1745','Mazenzele','BEL'),(283,'1745','Opwijk','BEL'),(284,'1750','Gaasbeek','BEL'),(285,'1750','Lennik','BEL'),(286,'1750','Sint-Kwintens-Lennik','BEL'),(287,'1750','Sint-Martens-Lennik','BEL'),(288,'1755','Gooik','BEL'),(289,'1755','Kester','BEL'),(290,'1755','Leerbeek','BEL'),(291,'1755','Oetingen','BEL'),(292,'1760','Onze-Lieve-Vrouw-Lombeek','BEL'),(293,'1760','Pamel','BEL'),(294,'1760','Roosdaal','BEL'),(295,'1760','Strijtem','BEL'),(296,'1761','Borchtlombeek','BEL'),(297,'1770','Liedekerke','BEL'),(298,'1780','Wemmel','BEL'),(299,'1785','Brussegem','BEL'),(300,'1785','Hamme (Bt.)','BEL'),(301,'1785','Merchtem','BEL'),(302,'1790','Affligem','BEL'),(303,'1790','Essene','BEL'),(304,'1790','Hekelgem','BEL'),(305,'1790','Teralfene','BEL'),(306,'1800','Peutie','BEL'),(307,'1800','Vilvoorde','BEL'),(308,'1804','Cargovil','BEL'),(309,'1818','VTM','BEL'),(310,'1820','Melsbroek','BEL'),(311,'1820','Perk','BEL'),(312,'1820','Steenokkerzeel','BEL'),(313,'1830','Machelen (Bt.)','BEL'),(314,'1831','Diegem','BEL'),(315,'1840','Londerzeel','BEL'),(316,'1840','Malderen','BEL'),(317,'1840','Steenhuffel','BEL'),(318,'1850','Grimbergen','BEL'),(319,'1851','Humbeek','BEL'),(320,'1852','Beigem','BEL'),(321,'1853','Strombeek-Bever','BEL'),(322,'1860','Meise','BEL'),(323,'1861','Wolvertem','BEL'),(324,'1880','Kapelle-op-den-Bos','BEL'),(325,'1880','Nieuwenrode','BEL'),(326,'1880','Ramsdonk','BEL'),(327,'1910','Berg (Bt.)','BEL'),(328,'1910','Buken','BEL'),(329,'1910','Kampenhout','BEL'),(330,'1910','Nederokkerzeel','BEL'),(331,'1930','Nossegem','BEL'),(332,'1930','Zaventem','BEL'),(333,'1931','Brucargo','BEL'),(334,'1932','Sint-Stevens-Woluwe','BEL'),(335,'1933','Sterrebeek','BEL'),(336,'1934','Brussel X-Luchthaven Remailing','BEL'),(337,'1934','Bruxelles X-Aeroport Remailing','BEL'),(338,'1950','Kraainem','BEL'),(339,'1970','Wezembeek-Oppem','BEL'),(340,'1980','Eppegem','BEL'),(341,'1980','Zemst','BEL'),(342,'1981','Hofstade (Bt.)','BEL'),(343,'1982','Elewijt','BEL'),(344,'1982','Weerde','BEL'),(345,'2000','Antwerpen','BEL'),(346,'2018','Antwerpen','BEL'),(347,'2020','Antwerpen','BEL'),(348,'2030','Antwerpen','BEL'),(349,'2040','Antwerpen','BEL'),(350,'2040','Berendrecht','BEL'),(351,'2040','Lillo','BEL'),(352,'2040','Zandvliet','BEL'),(353,'2050','Antwerpen','BEL'),(354,'2060','Antwerpen','BEL'),(355,'2070','Burcht','BEL'),(356,'2070','Zwijndrecht','BEL'),(357,'2100','Deurne (Antwerpen)','BEL'),(358,'2110','Wijnegem','BEL'),(359,'2140','Borgerhout (Antwerpen)','BEL'),(360,'2150','Borsbeek (Antw.)','BEL'),(361,'2160','Wommelgem','BEL'),(362,'2170','Merksem (Antwerpen)','BEL'),(363,'2180','Ekeren (Antwerpen)','BEL'),(364,'2200','Herentals','BEL'),(365,'2200','Morkhoven','BEL'),(366,'2200','Noorderwijk','BEL'),(367,'2220','Hallaar','BEL'),(368,'2220','Heist-op-den-Berg','BEL'),(369,'2221','Booischot','BEL'),(370,'2222','Itegem','BEL'),(371,'2222','Wiekevorst','BEL'),(372,'2223','Schriek','BEL'),(373,'2230','Herselt','BEL'),(374,'2230','Ramsel','BEL'),(375,'2235','Houtvenne','BEL'),(376,'2235','Hulshout','BEL'),(377,'2235','Westmeerbeek','BEL'),(378,'2240','Massenhoven','BEL'),(379,'2240','Viersel','BEL'),(380,'2240','Zandhoven','BEL'),(381,'2242','Pulderbos','BEL'),(382,'2243','Pulle','BEL'),(383,'2250','Olen','BEL'),(384,'2260','Oevel','BEL'),(385,'2260','Tongerlo (Antw.)','BEL'),(386,'2260','Westerlo','BEL'),(387,'2260','Zoerle-Parwijs','BEL'),(388,'2270','Herenthout','BEL'),(389,'2275','Gierle','BEL'),(390,'2275','Lille','BEL'),(391,'2275','Poederlee','BEL'),(392,'2275','Wechelderzande','BEL'),(393,'2280','Grobbendonk','BEL'),(394,'2288','Bouwel','BEL'),(395,'2290','Vorselaar','BEL'),(396,'2300','Turnhout','BEL'),(397,'2310','Rijkevorsel','BEL'),(398,'2320','Hoogstraten','BEL'),(399,'2321','Meer','BEL'),(400,'2322','Minderhout','BEL'),(401,'2323','Wortel','BEL'),(402,'2328','Meerle','BEL'),(403,'2330','Merksplas','BEL'),(404,'2340','Beerse','BEL'),(405,'2340','Vlimmeren','BEL'),(406,'2350','Vosselaar','BEL'),(407,'2360','Oud-Turnhout','BEL'),(408,'2370','Arendonk','BEL'),(409,'2380','Ravels','BEL'),(410,'2381','Weelde','BEL'),(411,'2382','Poppel','BEL'),(412,'2387','Baarle-Hertog','BEL'),(413,'2390','Malle','BEL'),(414,'2390','Oostmalle','BEL'),(415,'2390','Westmalle','BEL'),(416,'2400','Mol','BEL'),(417,'2430','Eindhout','BEL'),(418,'2430','Laakdal','BEL'),(419,'2430','Vorst (Kempen)','BEL'),(420,'2431','Varendonk','BEL'),(421,'2431','Veerle','BEL'),(422,'2440','Geel','BEL'),(423,'2450','Meerhout','BEL'),(424,'2460','Kasterlee','BEL'),(425,'2460','Lichtaart','BEL'),(426,'2460','Tielen','BEL'),(427,'2470','Retie','BEL'),(428,'2480','Dessel','BEL'),(429,'2490','Balen','BEL'),(430,'2491','Olmen','BEL'),(431,'2500','Koningshooikt','BEL'),(432,'2500','Lier','BEL'),(433,'2520','Broechem','BEL'),(434,'2520','Emblem','BEL'),(435,'2520','Oelegem','BEL'),(436,'2520','Ranst','BEL'),(437,'2530','Boechout','BEL'),(438,'2531','Vremde','BEL'),(439,'2540','Hove','BEL'),(440,'2547','Lint','BEL'),(441,'2550','Kontich','BEL'),(442,'2550','Waarloos','BEL'),(443,'2560','Bevel','BEL'),(444,'2560','Kessel','BEL'),(445,'2560','Nijlen','BEL'),(446,'2570','Duffel','BEL'),(447,'2580','Beerzel','BEL'),(448,'2580','Putte','BEL'),(449,'2590','Berlaar','BEL'),(450,'2590','Gestel','BEL'),(451,'2600','Berchem (Antwerpen)','BEL'),(452,'2610','Wilrijk (Antwerpen)','BEL'),(453,'2620','Hemiksem','BEL'),(454,'2627','Schelle','BEL'),(455,'2630','Aartselaar','BEL'),(456,'2640','Mortsel','BEL'),(457,'2650','Edegem','BEL'),(458,'2660','Hoboken (Antwerpen)','BEL'),(459,'2800','Mechelen','BEL'),(460,'2800','Walem','BEL'),(461,'2801','Heffen','BEL'),(462,'2811','Hombeek','BEL'),(463,'2811','Leest','BEL'),(464,'2812','Muizen (Mechelen)','BEL'),(465,'2820','Bonheiden','BEL'),(466,'2820','Rijmenam','BEL'),(467,'2830','Blaasveld','BEL'),(468,'2830','Heindonk','BEL'),(469,'2830','Tisselt','BEL'),(470,'2830','Willebroek','BEL'),(471,'2840','Reet','BEL'),(472,'2840','Rumst','BEL'),(473,'2840','Terhagen','BEL'),(474,'2845','Niel','BEL'),(475,'2850','Boom','BEL'),(476,'2860','Sint-Katelijne-Waver','BEL'),(477,'2861','Onze-Lieve-Vrouw-Waver','BEL'),(478,'2870','Breendonk','BEL'),(479,'2870','Liezele','BEL'),(480,'2870','Puurs','BEL'),(481,'2870','Ruisbroek (Antw.)','BEL'),(482,'2880','Bornem','BEL'),(483,'2880','Hingene','BEL'),(484,'2880','Mariekerke (Bornem)','BEL'),(485,'2880','Weert','BEL'),(486,'2890','Lippelo','BEL'),(487,'2890','Oppuurs','BEL'),(488,'2890','Sint-Amands','BEL'),(489,'2900','Schoten','BEL'),(490,'2910','Essen','BEL'),(491,'2920','Kalmthout','BEL'),(492,'2930','Brasschaat','BEL'),(493,'2940','Hoevenen','BEL'),(494,'2940','Stabroek','BEL'),(495,'2950','Kapellen (Antw.)','BEL'),(496,'2960','Brecht','BEL'),(497,'2960','Sint-Job-in-\'t-Goor','BEL'),(498,'2960','Sint-Lenaarts','BEL'),(499,'2970','\'s Gravenwezel','BEL'),(500,'2970','Schilde','BEL'),(501,'2980','Halle (Kempen)','BEL'),(502,'2980','Zoersel','BEL'),(503,'2990','Loenhout','BEL'),(504,'2990','Wuustwezel','BEL'),(505,'3000','Leuven','BEL'),(506,'3001','Heverlee','BEL'),(507,'3010','Kessel-Lo (Leuven)','BEL'),(508,'3012','Wilsele','BEL'),(509,'3018','Wijgmaal (Brabant)','BEL'),(510,'3020','Herent','BEL'),(511,'3020','Veltem-Beisem','BEL'),(512,'3020','Winksele','BEL'),(513,'3040','Huldenberg','BEL'),(514,'3040','Loonbeek','BEL'),(515,'3040','Neerijse','BEL'),(516,'3040','Ottenburg','BEL'),(517,'3040','Sint-Agatha-Rode','BEL'),(518,'3050','Oud-Heverlee','BEL'),(519,'3051','Sint-Joris-Weert','BEL'),(520,'3052','Blanden','BEL'),(521,'3053','Haasrode','BEL'),(522,'3054','Vaalbeek','BEL'),(523,'3060','Bertem','BEL'),(524,'3060','Korbeek-Dijle','BEL'),(525,'3061','Leefdaal','BEL'),(526,'3070','Kortenberg','BEL'),(527,'3071','Erps-Kwerps','BEL'),(528,'3078','Everberg','BEL'),(529,'3078','Meerbeek','BEL'),(530,'3080','Duisburg','BEL'),(531,'3080','Tervuren','BEL'),(532,'3080','Vossem','BEL'),(533,'3090','Overijse','BEL'),(534,'3110','Rotselaar','BEL'),(535,'3111','Wezemaal','BEL'),(536,'3118','Werchter','BEL'),(537,'3120','Tremelo','BEL'),(538,'3128','Baal','BEL'),(539,'3130','Begijnendijk','BEL'),(540,'3130','Betekom','BEL'),(541,'3140','Keerbergen','BEL'),(542,'3150','Haacht','BEL'),(543,'3150','Tildonk','BEL'),(544,'3150','Wespelaar','BEL'),(545,'3190','Boortmeerbeek','BEL'),(546,'3191','Hever','BEL'),(547,'3200','Aarschot','BEL'),(548,'3200','Gelrode','BEL'),(549,'3201','Langdorp','BEL'),(550,'3202','Rillaar','BEL'),(551,'3210','Linden','BEL'),(552,'3210','Lubbeek','BEL'),(553,'3211','Binkom','BEL'),(554,'3212','Pellenberg','BEL'),(555,'3220','Holsbeek','BEL'),(556,'3220','Kortrijk-Dutsel','BEL'),(557,'3220','Sint-Pieters-Rode','BEL'),(558,'3221','Nieuwrode','BEL'),(559,'3270','Scherpenheuvel','BEL'),(560,'3270','Scherpenheuvel-Zichem','BEL'),(561,'3271','Averbode','BEL'),(562,'3271','Zichem','BEL'),(563,'3272','Messelbroek','BEL'),(564,'3272','Testelt','BEL'),(565,'3290','Deurne (Bt.)','BEL'),(566,'3290','Diest','BEL'),(567,'3290','Schaffen','BEL'),(568,'3290','Webbekom','BEL'),(569,'3293','Kaggevinne','BEL'),(570,'3294','Molenstede','BEL'),(571,'3300','Bost','BEL'),(572,'3300','Goetsenhoven','BEL'),(573,'3300','Hakendover','BEL'),(574,'3300','Kumtich','BEL'),(575,'3300','Oorbeek','BEL'),(576,'3300','Oplinter','BEL'),(577,'3300','Sint-Margriete-Houtem (Tienen)','BEL'),(578,'3300','Tienen','BEL'),(579,'3300','Vissenaken','BEL'),(580,'3320','Hoegaarden','BEL'),(581,'3320','Meldert (Bt.)','BEL'),(582,'3321','Outgaarden','BEL'),(583,'3350','Drieslinter','BEL'),(584,'3350','Linter','BEL'),(585,'3350','Melkwezer','BEL'),(586,'3350','Neerhespen','BEL'),(587,'3350','Neerlinter','BEL'),(588,'3350','Orsmaal-Gussenhoven','BEL'),(589,'3350','Overhespen','BEL'),(590,'3350','Wommersom','BEL'),(591,'3360','Bierbeek','BEL'),(592,'3360','Korbeek-Lo','BEL'),(593,'3360','Lovenjoel','BEL'),(594,'3360','Opvelp','BEL'),(595,'3370','Boutersem','BEL'),(596,'3370','Kerkom','BEL'),(597,'3370','Neervelp','BEL'),(598,'3370','Roosbeek','BEL'),(599,'3370','Vertrijk','BEL'),(600,'3370','Willebringen','BEL'),(601,'3380','Bunsbeek','BEL'),(602,'3380','Glabbeek-Zuurbemde','BEL'),(603,'3381','Kapellen (Bt.)','BEL'),(604,'3384','Attenrode','BEL'),(605,'3390','Houwaart','BEL'),(606,'3390','Sint-Joris-Winge','BEL'),(607,'3390','Tielt (Bt.)','BEL'),(608,'3390','Tielt-Winge','BEL'),(609,'3391','Meensel-Kiezegem','BEL'),(610,'3400','Eliksem','BEL'),(611,'3400','Ezemaal','BEL'),(612,'3400','Laar','BEL'),(613,'3400','Landen','BEL'),(614,'3400','Neerwinden','BEL'),(615,'3400','Overwinden','BEL'),(616,'3400','Rumsdorp','BEL'),(617,'3400','Wange','BEL'),(618,'3401','Waasmont','BEL'),(619,'3401','Walsbets','BEL'),(620,'3401','Walshoutem','BEL'),(621,'3401','Wezeren','BEL'),(622,'3404','Attenhoven','BEL'),(623,'3404','Neerlanden','BEL'),(624,'3440','Budingen','BEL'),(625,'3440','Dormaal','BEL'),(626,'3440','Halle-Booienhoven','BEL'),(627,'3440','Helen-Bos','BEL'),(628,'3440','Zoutleeuw','BEL'),(629,'3450','Geetbets','BEL'),(630,'3450','Grazen','BEL'),(631,'3454','Rummen','BEL'),(632,'3460','Assent','BEL'),(633,'3460','Bekkevoort','BEL'),(634,'3461','Molenbeek-Wersbeek','BEL'),(635,'3470','Kortenaken','BEL'),(636,'3470','Ransberg','BEL'),(637,'3471','Hoeleden','BEL'),(638,'3472','Kersbeek-Miskom','BEL'),(639,'3473','Waanrode','BEL'),(640,'3500','Hasselt','BEL'),(641,'3500','Sint-Lambrechts-Herk','BEL'),(642,'3501','Wimmertingen','BEL'),(643,'3510','Kermt (Hasselt)','BEL'),(644,'3510','Spalbeek','BEL'),(645,'3511','Kuringen','BEL'),(646,'3511','Stokrooie','BEL'),(647,'3512','Stevoort','BEL'),(648,'3520','Zonhoven','BEL'),(649,'3530','Helchteren','BEL'),(650,'3530','Houthalen','BEL'),(651,'3530','Houthalen-Helchteren','BEL'),(652,'3540','Berbroek','BEL'),(653,'3540','Donk','BEL'),(654,'3540','Herk-de-Stad','BEL'),(655,'3540','Schulen','BEL'),(656,'3545','Halen','BEL'),(657,'3545','Loksbergen','BEL'),(658,'3545','Zelem','BEL'),(659,'3550','Heusden (Limb.)','BEL'),(660,'3550','Heusden-Zolder','BEL'),(661,'3550','Zolder','BEL'),(662,'3560','Linkhout','BEL'),(663,'3560','Lummen','BEL'),(664,'3560','Meldert (Limb.)','BEL'),(665,'3570','Alken','BEL'),(666,'3580','Beringen','BEL'),(667,'3581','Beverlo','BEL'),(668,'3582','Koersel','BEL'),(669,'3583','Paal','BEL'),(670,'3590','Diepenbeek','BEL'),(671,'3600','Genk','BEL'),(672,'3620','Gellik','BEL'),(673,'3620','Lanaken','BEL'),(674,'3620','Neerharen','BEL'),(675,'3620','Veldwezelt','BEL'),(676,'3621','Rekem','BEL'),(677,'3630','Eisden','BEL'),(678,'3630','Leut','BEL'),(679,'3630','Maasmechelen','BEL'),(680,'3630','Mechelen-aan-de-Maas','BEL'),(681,'3630','Meeswijk','BEL'),(682,'3630','Opgrimbie','BEL'),(683,'3630','Vucht','BEL'),(684,'3631','Boorsem','BEL'),(685,'3631','Uikhoven','BEL'),(686,'3640','Kessenich','BEL'),(687,'3640','Kinrooi','BEL'),(688,'3640','Molenbeersel','BEL'),(689,'3640','Ophoven','BEL'),(690,'3650','Dilsen-Stokkem','BEL'),(691,'3650','Elen','BEL'),(692,'3650','Lanklaar','BEL'),(693,'3650','Rotem','BEL'),(694,'3650','Stokkem','BEL'),(695,'3660','Opglabbeek','BEL'),(696,'3665','As','BEL'),(697,'3668','Niel-bij-As','BEL'),(698,'3670','Ellikom','BEL'),(699,'3670','Gruitrode','BEL'),(700,'3670','Meeuwen','BEL'),(701,'3670','Meeuwen-Gruitrode','BEL'),(702,'3670','Neerglabbeek','BEL'),(703,'3670','Wijshagen','BEL'),(704,'3680','Maaseik','BEL'),(705,'3680','Neeroeteren','BEL'),(706,'3680','Opoeteren','BEL'),(707,'3690','Zutendaal','BEL'),(708,'3700','Berg (Limb.)','BEL'),(709,'3700','Diets-Heur','BEL'),(710,'3700','Haren (Tongeren)','BEL'),(711,'3700','Henis','BEL'),(712,'3700','Kolmont (Tongeren)','BEL'),(713,'3700','Koninksem','BEL'),(714,'3700','Lauw','BEL'),(715,'3700','Mal','BEL'),(716,'3700','Neerrepen','BEL'),(717,'3700','Nerem','BEL'),(718,'3700','Overrepen (Kolmont)','BEL'),(719,'3700','Piringen (Haren)','BEL'),(720,'3700','Riksingen','BEL'),(721,'3700','Rutten','BEL'),(722,'3700','\'s Herenelderen','BEL'),(723,'3700','Sluizen','BEL'),(724,'3700','Tongeren','BEL'),(725,'3700','Vreren','BEL'),(726,'3700','Widooie (Haren)','BEL'),(727,'3717','Herstappe','BEL'),(728,'3720','Kortessem','BEL'),(729,'3721','Vliermaalroot','BEL'),(730,'3722','Wintershoven','BEL'),(731,'3723','Guigoven','BEL'),(732,'3724','Vliermaal','BEL'),(733,'3730','Hoeselt','BEL'),(734,'3730','Romershoven','BEL'),(735,'3730','Sint-Huibrechts-Hern','BEL'),(736,'3730','Werm','BEL'),(737,'3732','Schalkhoven','BEL'),(738,'3740','Beverst','BEL'),(739,'3740','Bilzen','BEL'),(740,'3740','Eigenbilzen','BEL'),(741,'3740','Grote-Spouwen','BEL'),(742,'3740','Hees','BEL'),(743,'3740','Kleine-Spouwen','BEL'),(744,'3740','Mopertingen','BEL'),(745,'3740','Munsterbilzen','BEL'),(746,'3740','Rijkhoven','BEL'),(747,'3740','Rosmeer','BEL'),(748,'3740','Spouwen','BEL'),(749,'3740','Waltwilder','BEL'),(750,'3742','Martenslinde','BEL'),(751,'3746','Hoelbeek','BEL'),(752,'3770','Genoelselderen','BEL'),(753,'3770','Herderen','BEL'),(754,'3770','Kanne','BEL'),(755,'3770','Membruggen','BEL'),(756,'3770','Millen','BEL'),(757,'3770','Riemst','BEL'),(758,'3770','Val-Meer','BEL'),(759,'3770','Vlijtingen','BEL'),(760,'3770','Vroenhoven','BEL'),(761,'3770','Zichen-Zussen-Bolder','BEL'),(762,'3790','Fourons','BEL'),(763,'3790','Fouron-Saint-Martin','BEL'),(764,'3790','Moelingen','BEL'),(765,'3790','Mouland','BEL'),(766,'3790','Sint-Martens-Voeren','BEL'),(767,'3790','Voeren','BEL'),(768,'3791','Remersdaal','BEL'),(769,'3792','Fouron-Saint-Pierre','BEL'),(770,'3792','Sint-Pieters-Voeren','BEL'),(771,'3793','Teuven','BEL'),(772,'3798','Fouron-le-Comte','BEL'),(773,'3798','\'s Gravenvoeren','BEL'),(774,'3800','Aalst (Limb.)','BEL'),(775,'3800','Brustem','BEL'),(776,'3800','Engelmanshoven','BEL'),(777,'3800','Gelinden','BEL'),(778,'3800','Groot-Gelmen','BEL'),(779,'3800','Halmaal','BEL'),(780,'3800','Kerkom-bij-Sint-Truiden','BEL'),(781,'3800','Ordingen','BEL'),(782,'3800','Sint-Truiden','BEL'),(783,'3800','Zepperen','BEL'),(784,'3803','Duras','BEL'),(785,'3803','Gorsem','BEL'),(786,'3803','Runkelen','BEL'),(787,'3803','Wilderen','BEL'),(788,'3806','Velm','BEL'),(789,'3830','Berlingen','BEL'),(790,'3830','Wellen','BEL'),(791,'3831','Herten','BEL'),(792,'3832','Ulbeek','BEL'),(793,'3840','Bommershoven (Haren)','BEL'),(794,'3840','Borgloon','BEL'),(795,'3840','Broekom','BEL'),(796,'3840','Gors-Opleeuw','BEL'),(797,'3840','Gotem','BEL'),(798,'3840','Groot-Loon','BEL'),(799,'3840','Haren (Borgloon)','BEL'),(800,'3840','Hendrieken','BEL'),(801,'3840','Hoepertingen','BEL'),(802,'3840','Jesseren (Kolmont)','BEL'),(803,'3840','Kerniel','BEL'),(804,'3840','Kolmont (Borgloon)','BEL'),(805,'3840','Kuttekoven','BEL'),(806,'3840','Rijkel','BEL'),(807,'3840','Voort','BEL'),(808,'3850','Binderveld','BEL'),(809,'3850','Kozen','BEL'),(810,'3850','Nieuwerkerken (Limb.)','BEL'),(811,'3850','Wijer','BEL'),(812,'3870','Batsheers','BEL'),(813,'3870','Bovelingen','BEL'),(814,'3870','Gutschoven','BEL'),(815,'3870','Heers','BEL'),(816,'3870','Heks','BEL'),(817,'3870','Horpmaal','BEL'),(818,'3870','Klein-Gelmen','BEL'),(819,'3870','Mechelen-Bovelingen','BEL'),(820,'3870','Mettekoven','BEL'),(821,'3870','Opheers','BEL'),(822,'3870','Rukkelingen-Loon','BEL'),(823,'3870','Vechmaal','BEL'),(824,'3870','Veulen','BEL'),(825,'3890','Boekhout','BEL'),(826,'3890','Gingelom','BEL'),(827,'3890','Jeuk','BEL'),(828,'3890','Kortijs','BEL'),(829,'3890','Montenaken','BEL'),(830,'3890','Niel-bij-Sint-Truiden','BEL'),(831,'3890','Vorsen','BEL'),(832,'3891','Borlo','BEL'),(833,'3891','Buvingen','BEL'),(834,'3891','Mielen-Boven-Aalst','BEL'),(835,'3891','Muizen (Limb.)','BEL'),(836,'3900','Overpelt','BEL'),(837,'3910','Neerpelt','BEL'),(838,'3910','Sint-Huibrechts-Lille','BEL'),(839,'3920','Lommel','BEL'),(840,'3930','Achel','BEL'),(841,'3930','Hamont','BEL'),(842,'3930','Hamont-Achel','BEL'),(843,'3940','Hechtel','BEL'),(844,'3940','Hechtel-Eksel','BEL'),(845,'3941','Eksel','BEL'),(846,'3945','Ham','BEL'),(847,'3945','Kwaadmechelen','BEL'),(848,'3945','Oostham','BEL'),(849,'3950','Bocholt','BEL'),(850,'3950','Kaulille','BEL'),(851,'3950','Reppel','BEL'),(852,'3960','Beek','BEL'),(853,'3960','Bree','BEL'),(854,'3960','Gerdingen','BEL'),(855,'3960','Opitter','BEL'),(856,'3960','Tongerlo (Limb.)','BEL'),(857,'3970','Leopoldsburg','BEL'),(858,'3971','Heppen','BEL'),(859,'3980','Tessenderlo','BEL'),(860,'3990','Grote-Brogel','BEL'),(861,'3990','Kleine-Brogel','BEL'),(862,'3990','Peer','BEL'),(863,'3990','Wijchmaal','BEL'),(864,'4000','Glain','BEL'),(865,'4000','Liège','BEL'),(866,'4000','Rocourt','BEL'),(867,'4020','Bressoux','BEL'),(868,'4020','Jupille-sur-Meuse','BEL'),(869,'4020','Liège','BEL'),(870,'4020','Wandre','BEL'),(871,'4030','Grivegnée','BEL'),(872,'4030','Liège','BEL'),(873,'4031','Angleur','BEL'),(874,'4032','Chênée','BEL'),(875,'4040','Herstal','BEL'),(876,'4041','Milmort','BEL'),(877,'4041','Vottem','BEL'),(878,'4042','Liers','BEL'),(879,'4050','Chaudfontaine','BEL'),(880,'4051','Vaux-sous-Chèvremont','BEL'),(881,'4052','Beaufays','BEL'),(882,'4053','Embourg','BEL'),(883,'4090','B.S.D. (Belg. Strijdkr. Duitsland)','BEL'),(884,'4090','F.B.A. (Forces Belges en Allemagne)','BEL'),(885,'4100','Boncelles','BEL'),(886,'4100','Seraing','BEL'),(887,'4101','Jemeppe-sur-Meuse','BEL'),(888,'4102','Ougrée','BEL'),(889,'4120','Ehein','BEL'),(890,'4120','Neupré','BEL'),(891,'4120','Rotheux-Rimière','BEL'),(892,'4121','Neuville-en-Condroz','BEL'),(893,'4122','Plainevaux','BEL'),(894,'4130','Esneux','BEL'),(895,'4130','Tilff','BEL'),(896,'4140','Dolembreux','BEL'),(897,'4140','Gomzé-Andoumont','BEL'),(898,'4140','Rouvreux','BEL'),(899,'4140','Sprimont','BEL'),(900,'4141','Louveigné','BEL'),(901,'4160','Anthisnes','BEL'),(902,'4161','Villers-aux-Tours','BEL'),(903,'4162','Hody','BEL'),(904,'4163','Tavier','BEL'),(905,'4170','Comblain-au-Pont','BEL'),(906,'4171','Poulseur','BEL'),(907,'4180','Comblain-Fairon','BEL'),(908,'4180','Comblain-la-Tour','BEL'),(909,'4180','Hamoir','BEL'),(910,'4181','Filot','BEL'),(911,'4190','Ferrières','BEL'),(912,'4190','My','BEL'),(913,'4190','Vieuxville','BEL'),(914,'4190','Werbomont','BEL'),(915,'4190','Xhoris','BEL'),(916,'4210','Burdinne','BEL'),(917,'4210','Hannêche','BEL'),(918,'4210','Lamontzée','BEL'),(919,'4210','Marneffe','BEL'),(920,'4210','Oteppe','BEL'),(921,'4217','Héron','BEL'),(922,'4217','Lavoir','BEL'),(923,'4217','Waret-l\'Evêque','BEL'),(924,'4218','Couthuin','BEL'),(925,'4219','Acosse','BEL'),(926,'4219','Ambresin','BEL'),(927,'4219','Meeffe','BEL'),(928,'4219','Wasseiges','BEL'),(929,'4250','Boëlhe','BEL'),(930,'4250','Geer','BEL'),(931,'4250','Hollogne-sur-Geer','BEL'),(932,'4250','Lens-Saint-Servais','BEL'),(933,'4252','Omal','BEL'),(934,'4253','Darion','BEL'),(935,'4254','Ligney','BEL'),(936,'4257','Berloz','BEL'),(937,'4257','Corswarem','BEL'),(938,'4257','Rosoux-Crenwick','BEL'),(939,'4260','Avennes','BEL'),(940,'4260','Braives','BEL'),(941,'4260','Ciplet','BEL'),(942,'4260','Fallais','BEL'),(943,'4260','Fumal','BEL'),(944,'4260','Ville-en-Hesbaye','BEL'),(945,'4261','Latinne','BEL'),(946,'4263','Tourinne (Lg.)','BEL'),(947,'4280','Abolens','BEL'),(948,'4280','Avernas-le-Bauduin','BEL'),(949,'4280','Avin','BEL'),(950,'4280','Bertrée','BEL'),(951,'4280','Blehen','BEL'),(952,'4280','Cras-Avernas','BEL'),(953,'4280','Crehen','BEL'),(954,'4280','Grand-Hallet','BEL'),(955,'4280','Hannut','BEL'),(956,'4280','Lens-Saint-Remy','BEL'),(957,'4280','Merdorp','BEL'),(958,'4280','Moxhe','BEL'),(959,'4280','Petit-Hallet','BEL'),(960,'4280','Poucet','BEL'),(961,'4280','Thisnes','BEL'),(962,'4280','Trognée','BEL'),(963,'4280','Villers-le-Peuplier','BEL'),(964,'4280','Wansin','BEL'),(965,'4287','Lincent','BEL'),(966,'4287','Pellaines','BEL'),(967,'4287','Racour','BEL'),(968,'4300','Bettincourt','BEL'),(969,'4300','Bleret','BEL'),(970,'4300','Bovenistier','BEL'),(971,'4300','Grand-Axhe','BEL'),(972,'4300','Lantremange','BEL'),(973,'4300','Oleye','BEL'),(974,'4300','Waremme','BEL'),(975,'4317','Aineffe','BEL'),(976,'4317','Borlez','BEL'),(977,'4317','Celles (Lg.)','BEL'),(978,'4317','Faimes','BEL'),(979,'4317','Les Waleffes','BEL'),(980,'4317','Viemme','BEL'),(981,'4340','Awans','BEL'),(982,'4340','Fooz','BEL'),(983,'4340','Othée','BEL'),(984,'4340','Villers-l\'Evêque','BEL'),(985,'4342','Hognoul','BEL'),(986,'4347','Fexhe-le-Haut-Clocher','BEL'),(987,'4347','Freloux','BEL'),(988,'4347','Noville (Lg.)','BEL'),(989,'4347','Roloux','BEL'),(990,'4347','Voroux-Goreux','BEL'),(991,'4350','Lamine','BEL'),(992,'4350','Momalle','BEL'),(993,'4350','Pousset','BEL'),(994,'4350','Remicourt','BEL'),(995,'4351','Hodeige','BEL'),(996,'4357','Donceel','BEL'),(997,'4357','Haneffe','BEL'),(998,'4357','Jeneffe (Lg.)','BEL'),(999,'4357','Limont','BEL'),(1000,'4360','Bergilers','BEL'),(1001,'4360','Grandville','BEL'),(1002,'4360','Lens-sur-Geer','BEL'),(1003,'4360','Oreye','BEL'),(1004,'4360','Otrange','BEL'),(1005,'4367','Crisnée','BEL'),(1006,'4367','Fize-le-Marsal','BEL'),(1007,'4367','Kemexhe','BEL'),(1008,'4367','Odeur','BEL'),(1009,'4367','Thys','BEL'),(1010,'4400','Awirs','BEL'),(1011,'4400','Chokier','BEL'),(1012,'4400','Flémalle','BEL'),(1013,'4400','Flémalle-Grande','BEL'),(1014,'4400','Flémalle-Haute','BEL'),(1015,'4400','Gleixhe','BEL'),(1016,'4400','Ivoz-Ramet','BEL'),(1017,'4400','Mons-lez-Liège','BEL'),(1018,'4420','Montegnée','BEL'),(1019,'4420','Saint-Nicolas (Lg.)','BEL'),(1020,'4420','Tilleur','BEL'),(1021,'4430','Ans','BEL'),(1022,'4431','Loncin','BEL'),(1023,'4432','Alleur','BEL'),(1024,'4432','Xhendremael','BEL'),(1025,'4450','Juprelle','BEL'),(1026,'4450','Lantin','BEL'),(1027,'4450','Slins','BEL'),(1028,'4451','Voroux-lez-Liers','BEL'),(1029,'4452','Paifve','BEL'),(1030,'4452','Wihogne','BEL'),(1031,'4453','Villers-Saint-Siméon','BEL'),(1032,'4458','Fexhe-Slins','BEL'),(1033,'4460','Bierset','BEL'),(1034,'4460','Grâce-Berleur','BEL'),(1035,'4460','Grâce-Hollogne','BEL'),(1036,'4460','Hollogne-aux-Pierres','BEL'),(1037,'4460','Horion-Hozémont','BEL'),(1038,'4460','Velroux','BEL'),(1039,'4470','Saint-Georges-sur-Meuse','BEL'),(1040,'4480','Clermont-sous-Huy','BEL'),(1041,'4480','Engis','BEL'),(1042,'4480','Hermalle-sous-Huy','BEL'),(1043,'4500','Ben-Ahin','BEL'),(1044,'4500','Huy','BEL'),(1045,'4500','Tihange','BEL'),(1046,'4520','Antheit','BEL'),(1047,'4520','Bas-Oha','BEL'),(1048,'4520','Huccorgne','BEL'),(1049,'4520','Moha','BEL'),(1050,'4520','Vinalmont','BEL'),(1051,'4520','Wanze','BEL'),(1052,'4530','Fize-Fontaine','BEL'),(1053,'4530','Vaux-et-Borset','BEL'),(1054,'4530','Vieux-Waleffe','BEL'),(1055,'4530','Villers-le-Bouillet','BEL'),(1056,'4530','Warnant-Dreye','BEL'),(1057,'4537','Chapon-Seraing','BEL'),(1058,'4537','Seraing-le-Château','BEL'),(1059,'4537','Verlaine','BEL'),(1060,'4540','Amay','BEL'),(1061,'4540','Ampsin','BEL'),(1062,'4540','Flône','BEL'),(1063,'4540','Jehay','BEL'),(1064,'4540','Ombret','BEL'),(1065,'4550','Nandrin','BEL'),(1066,'4550','Saint-Séverin','BEL'),(1067,'4550','Villers-le-Temple','BEL'),(1068,'4550','Yernée-Fraineux','BEL'),(1069,'4557','Abée','BEL'),(1070,'4557','Fraiture','BEL'),(1071,'4557','Ramelot','BEL'),(1072,'4557','Seny','BEL'),(1073,'4557','Soheit-Tinlot','BEL'),(1074,'4557','Tinlot','BEL'),(1075,'4560','Bois-et-Borsu','BEL'),(1076,'4560','Clavier','BEL'),(1077,'4560','Les Avins','BEL'),(1078,'4560','Ocquier','BEL'),(1079,'4560','Pailhe','BEL'),(1080,'4560','Terwagne','BEL'),(1081,'4570','Marchin','BEL'),(1082,'4570','Vyle-et-Tharoul','BEL'),(1083,'4577','Modave','BEL'),(1084,'4577','Outrelouxhe','BEL'),(1085,'4577','Strée-lez-Huy','BEL'),(1086,'4577','Vierset-Barse','BEL'),(1087,'4590','Ellemelle','BEL'),(1088,'4590','Ouffet','BEL'),(1089,'4590','Warzée','BEL'),(1090,'4600','Lanaye','BEL'),(1091,'4600','Lixhe','BEL'),(1092,'4600','Richelle','BEL'),(1093,'4600','Visé','BEL'),(1094,'4601','Argenteau','BEL'),(1095,'4602','Cheratte','BEL'),(1096,'4606','Saint-André','BEL'),(1097,'4607','Berneau','BEL'),(1098,'4607','Bombaye','BEL'),(1099,'4607','Dalhem','BEL'),(1100,'4607','Feneur','BEL'),(1101,'4607','Mortroux','BEL'),(1102,'4608','Neufchâteau (Lg.)','BEL'),(1103,'4608','Warsage','BEL'),(1104,'4610','Bellaire','BEL'),(1105,'4610','Beyne-Heusay','BEL'),(1106,'4610','Queue-du-Bois','BEL'),(1107,'4620','Fléron','BEL'),(1108,'4621','Retinne','BEL'),(1109,'4623','Magnée','BEL'),(1110,'4624','Romsée','BEL'),(1111,'4630','Ayeneux','BEL'),(1112,'4630','Micheroux','BEL'),(1113,'4630','Soumagne','BEL'),(1114,'4630','Tignée','BEL'),(1115,'4631','Evegnée','BEL'),(1116,'4632','Cérexhe-Heuseux','BEL'),(1117,'4633','Melen','BEL'),(1118,'4650','Chaineux','BEL'),(1119,'4650','Grand-Rechain','BEL'),(1120,'4650','Herve','BEL'),(1121,'4650','Julémont','BEL'),(1122,'4651','Battice','BEL'),(1123,'4652','Xhendelesse','BEL'),(1124,'4653','Bolland','BEL'),(1125,'4654','Charneux','BEL'),(1126,'4670','Blégny','BEL'),(1127,'4670','Mortier','BEL'),(1128,'4670','Trembleur','BEL'),(1129,'4671','Barchon','BEL'),(1130,'4671','Housse','BEL'),(1131,'4671','Saive','BEL'),(1132,'4672','Saint-Remy (Lg.)','BEL'),(1133,'4680','Hermée','BEL'),(1134,'4680','Oupeye','BEL'),(1135,'4681','Hermalle-sous-Argenteau','BEL'),(1136,'4682','Heure-le-Romain','BEL'),(1137,'4682','Houtain-Saint-Siméon','BEL'),(1138,'4683','Vivegnis','BEL'),(1139,'4684','Haccourt','BEL'),(1140,'4690','Bassenge','BEL'),(1141,'4690','Boirs','BEL'),(1142,'4690','Eben-Emael','BEL'),(1143,'4690','Glons','BEL'),(1144,'4690','Roclenge-sur-Geer','BEL'),(1145,'4690','Wonck','BEL'),(1146,'4700','Eupen','BEL'),(1147,'4701','Kettenis','BEL'),(1148,'4710','Lontzen','BEL'),(1149,'4711','Walhorn','BEL'),(1150,'4720','Kelmis','BEL'),(1151,'4720','La Calamine','BEL'),(1152,'4721','Neu-Moresnet','BEL'),(1153,'4728','Hergenrath','BEL'),(1154,'4730','Hauset','BEL'),(1155,'4730','Raeren','BEL'),(1156,'4731','Eynatten','BEL'),(1157,'4750','Bütgenbach','BEL'),(1158,'4750','Butgenbach','BEL'),(1159,'4750','Elsenborn','BEL'),(1160,'4760','Bullange','BEL'),(1161,'4760','Büllingen','BEL'),(1162,'4760','Manderfeld','BEL'),(1163,'4761','Rocherath','BEL'),(1164,'4770','Amblève','BEL'),(1165,'4770','Amel','BEL'),(1166,'4770','Meyerode','BEL'),(1167,'4771','Heppenbach','BEL'),(1168,'4780','Recht','BEL'),(1169,'4780','Saint-Vith','BEL'),(1170,'4780','Sankt Vith','BEL'),(1171,'4782','Schoenberg','BEL'),(1172,'4782','Schönberg','BEL'),(1173,'4783','Lommersweiler','BEL'),(1174,'4784','Crombach','BEL'),(1175,'4790','Burg-Reuland','BEL'),(1176,'4790','Reuland','BEL'),(1177,'4791','Thommen','BEL'),(1178,'4800','Ensival','BEL'),(1179,'4800','Lambermont','BEL'),(1180,'4800','Petit-Rechain','BEL'),(1181,'4800','Verviers','BEL'),(1182,'4801','Stembert','BEL'),(1183,'4802','Heusy','BEL'),(1184,'4820','Dison','BEL'),(1185,'4821','Andrimont','BEL'),(1186,'4830','Limbourg','BEL'),(1187,'4831','Bilstain','BEL'),(1188,'4834','Goé','BEL'),(1189,'4837','Baelen (Lg.)','BEL'),(1190,'4837','Membach','BEL'),(1191,'4840','Welkenraedt','BEL'),(1192,'4841','Henri-Chapelle','BEL'),(1193,'4845','Jalhay','BEL'),(1194,'4845','Sart-lez-Spa','BEL'),(1195,'4850','Montzen','BEL'),(1196,'4850','Moresnet','BEL'),(1197,'4850','Plombières','BEL'),(1198,'4851','Gemmenich','BEL'),(1199,'4851','Sippenaeken','BEL'),(1200,'4852','Hombourg','BEL'),(1201,'4860','Cornesse','BEL'),(1202,'4860','Pepinster','BEL'),(1203,'4860','Wegnez','BEL'),(1204,'4861','Soiron','BEL'),(1205,'4870','Forêt','BEL'),(1206,'4870','Fraipont','BEL'),(1207,'4870','Nessonvaux','BEL'),(1208,'4870','Trooz','BEL'),(1209,'4877','Olne','BEL'),(1210,'4880','Aubel','BEL'),(1211,'4890','Clermont (Lg.)','BEL'),(1212,'4890','Thimister','BEL'),(1213,'4890','Thimister-Clermont','BEL'),(1214,'4900','Spa','BEL'),(1215,'4910','La Reid','BEL'),(1216,'4910','Polleur','BEL'),(1217,'4910','Theux','BEL'),(1218,'4920','Aywaille','BEL'),(1219,'4920','Ernonheid','BEL'),(1220,'4920','Harzé','BEL'),(1221,'4920','Sougné-Remouchamps','BEL'),(1222,'4950','Faymonville','BEL'),(1223,'4950','Robertville','BEL'),(1224,'4950','Sourbrodt','BEL'),(1225,'4950','Waimes','BEL'),(1226,'4950','Weismes','BEL'),(1227,'4960','Bellevaux-Ligneuville','BEL'),(1228,'4960','Bevercé','BEL'),(1229,'4960','Malmedy','BEL'),(1230,'4970','Francorchamps','BEL'),(1231,'4970','Stavelot','BEL'),(1232,'4980','Fosse (Lg.)','BEL'),(1233,'4980','Trois-Ponts','BEL'),(1234,'4980','Wanne','BEL'),(1235,'4983','Basse-Bodeux','BEL'),(1236,'4987','Chevron','BEL'),(1237,'4987','La Gleize','BEL'),(1238,'4987','Lorcé','BEL'),(1239,'4987','Rahier','BEL'),(1240,'4987','Stoumont','BEL'),(1241,'4990','Arbrefontaine','BEL'),(1242,'4990','Bra','BEL'),(1243,'4990','Lierneux','BEL'),(1244,'5000','Beez','BEL'),(1245,'5000','Namur','BEL'),(1246,'5001','Belgrade','BEL'),(1247,'5002','Saint-Servais','BEL'),(1248,'5003','Saint-Marc','BEL'),(1249,'5004','Bouge','BEL'),(1250,'5020','Champion','BEL'),(1251,'5020','Daussoulx','BEL'),(1252,'5020','Flawinne','BEL'),(1253,'5020','Malonne','BEL'),(1254,'5020','Suarlée','BEL'),(1255,'5020','Temploux','BEL'),(1256,'5020','Vedrin','BEL'),(1257,'5021','Boninne','BEL'),(1258,'5022','Cognelée','BEL'),(1259,'5024','Gelbressée','BEL'),(1260,'5024','Marche-les-Dames','BEL'),(1261,'5030','Beuzet','BEL'),(1262,'5030','Ernage','BEL'),(1263,'5030','Gembloux','BEL'),(1264,'5030','Grand-Manil','BEL'),(1265,'5030','Lonzée','BEL'),(1266,'5030','Sauvenière','BEL'),(1267,'5031','Grand-Leez','BEL'),(1268,'5032','Bossière','BEL'),(1269,'5032','Bothey','BEL'),(1270,'5032','Corroy-le-Château','BEL'),(1271,'5032','Isnes','BEL'),(1272,'5032','Mazy','BEL'),(1273,'5060','Arsimont','BEL'),(1274,'5060','Auvelais','BEL'),(1275,'5060','Falisolle','BEL'),(1276,'5060','Keumiée','BEL'),(1277,'5060','Moignelée','BEL'),(1278,'5060','Sambreville','BEL'),(1279,'5060','Tamines','BEL'),(1280,'5060','Velaine-sur-Sambre','BEL'),(1281,'5070','Aisemont','BEL'),(1282,'5070','Fosses-la-Ville','BEL'),(1283,'5070','Le Roux','BEL'),(1284,'5070','Sart-Eustache','BEL'),(1285,'5070','Sart-Saint-Laurent','BEL'),(1286,'5070','Vitrival','BEL'),(1287,'5080','Emines','BEL'),(1288,'5080','La Bruyère','BEL'),(1289,'5080','Rhisnes','BEL'),(1290,'5080','Villers-lez-Heest','BEL'),(1291,'5080','Warisoulx','BEL'),(1292,'5081','Bovesse','BEL'),(1293,'5081','Meux','BEL'),(1294,'5081','Saint-Denis-Bovesse','BEL'),(1295,'5100','Dave','BEL'),(1296,'5100','Jambes (Namur)','BEL'),(1297,'5100','Naninne','BEL'),(1298,'5100','Wépion','BEL'),(1299,'5100','Wierde','BEL'),(1300,'5101','Erpent','BEL'),(1301,'5101','Lives-sur-Meuse','BEL'),(1302,'5101','Loyers','BEL'),(1303,'5140','Boignée','BEL'),(1304,'5140','Ligny','BEL'),(1305,'5140','Sombreffe','BEL'),(1306,'5140','Tongrinne','BEL'),(1307,'5150','Floreffe','BEL'),(1308,'5150','Floriffoux','BEL'),(1309,'5150','Franière','BEL'),(1310,'5150','Soye (Nam.)','BEL'),(1311,'5170','Arbre (Nam.)','BEL'),(1312,'5170','Bois-de-Villers','BEL'),(1313,'5170','Lesve','BEL'),(1314,'5170','Lustin','BEL'),(1315,'5170','Profondeville','BEL'),(1316,'5170','Rivière','BEL'),(1317,'5190','Balâtre','BEL'),(1318,'5190','Ham-sur-Sambre','BEL'),(1319,'5190','Jemeppe-sur-Sambre','BEL'),(1320,'5190','Mornimont','BEL'),(1321,'5190','Moustier-sur-Sambre','BEL'),(1322,'5190','Onoz','BEL'),(1323,'5190','Saint-Martin','BEL'),(1324,'5190','Spy','BEL'),(1325,'5300','Andenne','BEL'),(1326,'5300','Bonneville','BEL'),(1327,'5300','Coutisse','BEL'),(1328,'5300','Landenne','BEL'),(1329,'5300','Maizeret','BEL'),(1330,'5300','Namêche','BEL'),(1331,'5300','Sclayn','BEL'),(1332,'5300','Seilles','BEL'),(1333,'5300','Thon','BEL'),(1334,'5300','Vezin','BEL'),(1335,'5310','Aische-en-Refail','BEL'),(1336,'5310','Bolinne','BEL'),(1337,'5310','Boneffe','BEL'),(1338,'5310','Branchon','BEL'),(1339,'5310','Dhuy','BEL'),(1340,'5310','Eghezée','BEL'),(1341,'5310','Hanret','BEL'),(1342,'5310','Leuze (Nam.)','BEL'),(1343,'5310','Liernu','BEL'),(1344,'5310','Longchamps (Nam.)','BEL'),(1345,'5310','Mehaigne','BEL'),(1346,'5310','Noville-sur-Méhaigne','BEL'),(1347,'5310','Saint-Germain','BEL'),(1348,'5310','Taviers (Nam.)','BEL'),(1349,'5310','Upigny','BEL'),(1350,'5310','Waret-la-Chaussée','BEL'),(1351,'5330','Assesse','BEL'),(1352,'5330','Maillen','BEL'),(1353,'5330','Sart-Bernard','BEL'),(1354,'5332','Crupet','BEL'),(1355,'5333','Sorinne-la-Longue','BEL'),(1356,'5334','Florée','BEL'),(1357,'5336','Courrière','BEL'),(1358,'5340','Faulx-les-Tombes','BEL'),(1359,'5340','Gesves','BEL'),(1360,'5340','Haltinne','BEL'),(1361,'5340','Mozet','BEL'),(1362,'5340','Sorée','BEL'),(1363,'5350','Evelette','BEL'),(1364,'5350','Ohey','BEL'),(1365,'5351','Haillot','BEL'),(1366,'5352','Perwez-Haillot','BEL'),(1367,'5353','Goesnes','BEL'),(1368,'5354','Jallet','BEL'),(1369,'5360','Hamois','BEL'),(1370,'5360','Natoye','BEL'),(1371,'5361','Mohiville','BEL'),(1372,'5361','Scy','BEL'),(1373,'5362','Achet','BEL'),(1374,'5363','Emptinne','BEL'),(1375,'5364','Schaltin','BEL'),(1376,'5370','Barvaux-Condroz','BEL'),(1377,'5370','Flostoy','BEL'),(1378,'5370','Havelange','BEL'),(1379,'5370','Jeneffe (Nam.)','BEL'),(1380,'5370','Porcheresse (Nam.)','BEL'),(1381,'5370','Verlée','BEL'),(1382,'5372','Méan','BEL'),(1383,'5374','Maffe','BEL'),(1384,'5376','Miécret','BEL'),(1385,'5377','Baillonville','BEL'),(1386,'5377','Bonsin','BEL'),(1387,'5377','Heure (Nam.)','BEL'),(1388,'5377','Hogne','BEL'),(1389,'5377','Nettinne','BEL'),(1390,'5377','Noiseux','BEL'),(1391,'5377','Sinsin','BEL'),(1392,'5377','Somme-Leuze','BEL'),(1393,'5377','Waillet','BEL'),(1394,'5380','Bierwart','BEL'),(1395,'5380','Cortil-Wodon','BEL'),(1396,'5380','Fernelmont','BEL'),(1397,'5380','Forville','BEL'),(1398,'5380','Franc-Waret','BEL'),(1399,'5380','Hemptinne (Fernelmont)','BEL'),(1400,'5380','Hingeon','BEL'),(1401,'5380','Marchovelette','BEL'),(1402,'5380','Noville-les-Bois','BEL'),(1403,'5380','Pontillas','BEL'),(1404,'5380','Tillier','BEL'),(1405,'5500','Anseremme','BEL'),(1406,'5500','Bouvignes-sur-Meuse','BEL'),(1407,'5500','Dinant','BEL'),(1408,'5500','Dréhance','BEL'),(1409,'5500','Falmagne','BEL'),(1410,'5500','Falmignoul','BEL'),(1411,'5500','Furfooz','BEL'),(1412,'5501','Lisogne','BEL'),(1413,'5502','Thynes','BEL'),(1414,'5503','Sorinnes','BEL'),(1415,'5504','Foy-Notre-Dame','BEL'),(1416,'5520','Anthée','BEL'),(1417,'5520','Onhaye','BEL'),(1418,'5521','Serville','BEL'),(1419,'5522','Falaën','BEL'),(1420,'5523','Sommière','BEL'),(1421,'5523','Weillen','BEL'),(1422,'5524','Gerin','BEL'),(1423,'5530','Dorinne','BEL'),(1424,'5530','Durnal','BEL'),(1425,'5530','Evrehailles','BEL'),(1426,'5530','Godinne','BEL'),(1427,'5530','Houx','BEL'),(1428,'5530','Mont (Nam.)','BEL'),(1429,'5530','Purnode','BEL'),(1430,'5530','Spontin','BEL'),(1431,'5530','Yvoir','BEL'),(1432,'5537','Anhée','BEL'),(1433,'5537','Annevoie-Rouillon','BEL'),(1434,'5537','Bioul','BEL'),(1435,'5537','Denée','BEL'),(1436,'5537','Haut-le-Wastia','BEL'),(1437,'5537','Sosoye','BEL'),(1438,'5537','Warnant','BEL'),(1439,'5540','Hastière','BEL'),(1440,'5540','Hastière-Lavaux','BEL'),(1441,'5540','Hermeton-sur-Meuse','BEL'),(1442,'5540','Waulsort','BEL'),(1443,'5541','Hastière-par-Delà','BEL'),(1444,'5542','Blaimont','BEL'),(1445,'5543','Heer','BEL'),(1446,'5544','Agimont','BEL'),(1447,'5550','Alle','BEL'),(1448,'5550','Bagimont','BEL'),(1449,'5550','Bohan','BEL'),(1450,'5550','Chairière','BEL'),(1451,'5550','Laforêt','BEL'),(1452,'5550','Membre','BEL'),(1453,'5550','Mouzaive','BEL'),(1454,'5550','Nafraiture','BEL'),(1455,'5550','Orchimont','BEL'),(1456,'5550','Pussemange','BEL'),(1457,'5550','Sugny','BEL'),(1458,'5550','Vresse-sur-Semois','BEL'),(1459,'5555','Baillamont','BEL'),(1460,'5555','Bellefontaine (Nam.)','BEL'),(1461,'5555','Bievre','BEL'),(1462,'5555','Cornimont','BEL'),(1463,'5555','Graide','BEL'),(1464,'5555','Gros-Fays','BEL'),(1465,'5555','Monceau-en-Ardenne','BEL'),(1466,'5555','Naomé','BEL'),(1467,'5555','Oizy','BEL'),(1468,'5555','Petit-Fays','BEL'),(1469,'5560','Ciergnon','BEL'),(1470,'5560','Finnevaux','BEL'),(1471,'5560','Houyet','BEL'),(1472,'5560','Hulsonniaux','BEL'),(1473,'5560','Mesnil-Eglise','BEL'),(1474,'5560','Mesnil-Saint-Blaise','BEL'),(1475,'5561','Celles (Nam.)','BEL'),(1476,'5562','Custinne','BEL'),(1477,'5563','Hour','BEL'),(1478,'5564','Wanlin','BEL'),(1479,'5570','Baronville','BEL'),(1480,'5570','Beauraing','BEL'),(1481,'5570','Dion','BEL'),(1482,'5570','Felenne','BEL'),(1483,'5570','Feschaux','BEL'),(1484,'5570','Honnay','BEL'),(1485,'5570','Javingue','BEL'),(1486,'5570','Vonêche','BEL'),(1487,'5570','Wancennes','BEL'),(1488,'5570','Winenne','BEL'),(1489,'5571','Wiesme','BEL'),(1490,'5572','Focant','BEL'),(1491,'5573','Martouzin-Neuville','BEL'),(1492,'5574','Pondrôme','BEL'),(1493,'5575','Bourseigne-Neuve','BEL'),(1494,'5575','Bourseigne-Vieille','BEL'),(1495,'5575','Gedinne','BEL'),(1496,'5575','Houdremont','BEL'),(1497,'5575','Louette-Saint-Denis','BEL'),(1498,'5575','Louette-Saint-Pierre','BEL'),(1499,'5575','Malvoisin','BEL'),(1500,'5575','Patignies','BEL'),(1501,'5575','Rienne','BEL'),(1502,'5575','Sart-Custinne','BEL'),(1503,'5575','Vencimont','BEL'),(1504,'5575','Willerzie','BEL'),(1505,'5576','Froidfontaine','BEL'),(1506,'5580','Ave-et-Auffe','BEL'),(1507,'5580','Buissonville','BEL'),(1508,'5580','Eprave','BEL'),(1509,'5580','Han-sur-Lesse','BEL'),(1510,'5580','Jemelle','BEL'),(1511,'5580','Lavaux-Sainte-Anne','BEL'),(1512,'5580','Lessive','BEL'),(1513,'5580','Mont-Gauthier','BEL'),(1514,'5580','Rochefort','BEL'),(1515,'5580','Villers-sur-Lesse','BEL'),(1516,'5580','Wavreille','BEL'),(1517,'5590','Achêne','BEL'),(1518,'5590','Braibant','BEL'),(1519,'5590','Chevetogne','BEL'),(1520,'5590','Ciney','BEL'),(1521,'5590','Conneux','BEL'),(1522,'5590','Haversin','BEL'),(1523,'5590','Leignon','BEL'),(1524,'5590','Pessoux','BEL'),(1525,'5590','Serinchamps','BEL'),(1526,'5590','Sovet','BEL'),(1527,'5600','Fagnolle','BEL'),(1528,'5600','Franchimont','BEL'),(1529,'5600','Jamagne','BEL'),(1530,'5600','Jamiolle','BEL'),(1531,'5600','Merlemont','BEL'),(1532,'5600','Neuville (Philippeville)','BEL'),(1533,'5600','Omezée','BEL'),(1534,'5600','Philippeville','BEL'),(1535,'5600','Roly','BEL'),(1536,'5600','Romedenne','BEL'),(1537,'5600','Samart','BEL'),(1538,'5600','Sart-en-Fagne','BEL'),(1539,'5600','Sautour','BEL'),(1540,'5600','Surice','BEL'),(1541,'5600','Villers-en-Fagne','BEL'),(1542,'5600','Villers-le-Gambon','BEL'),(1543,'5600','Vodecée','BEL'),(1544,'5620','Corenne','BEL'),(1545,'5620','Flavion','BEL'),(1546,'5620','Florennes','BEL'),(1547,'5620','Hemptinne-lez-Florennes','BEL'),(1548,'5620','Morville','BEL'),(1549,'5620','Rosée','BEL'),(1550,'5620','Saint-Aubin','BEL'),(1551,'5621','Hanzinelle','BEL'),(1552,'5621','Hanzinne','BEL'),(1553,'5621','Morialmé','BEL'),(1554,'5621','Thy-le-Bauduin','BEL'),(1555,'5630','Cerfontaine','BEL'),(1556,'5630','Daussois','BEL'),(1557,'5630','Senzeille','BEL'),(1558,'5630','Silenrieux','BEL'),(1559,'5630','Soumoy','BEL'),(1560,'5630','Villers-Deux-Eglises','BEL'),(1561,'5640','Biesme','BEL'),(1562,'5640','Biesmerée','BEL'),(1563,'5640','Graux','BEL'),(1564,'5640','Mettet','BEL'),(1565,'5640','Oret','BEL'),(1566,'5640','Saint-Gérard','BEL'),(1567,'5641','Furnaux','BEL'),(1568,'5644','Ermeton-sur-Biert','BEL'),(1569,'5646','Stave','BEL'),(1570,'5650','Castillon','BEL'),(1571,'5650','Chastrès','BEL'),(1572,'5650','Clermont (Nam.)','BEL'),(1573,'5650','Fontenelle','BEL'),(1574,'5650','Fraire','BEL'),(1575,'5650','Pry','BEL'),(1576,'5650','Vogenée','BEL'),(1577,'5650','Walcourt','BEL'),(1578,'5650','Yves-Gomezée','BEL'),(1579,'5651','Berzée','BEL'),(1580,'5651','Gourdinne','BEL'),(1581,'5651','Laneffe','BEL'),(1582,'5651','Rognée','BEL'),(1583,'5651','Somzée','BEL'),(1584,'5651','Tarcienne','BEL'),(1585,'5651','Thy-le-Château','BEL'),(1586,'5660','Aublain','BEL'),(1587,'5660','Boussu-en-Fagne','BEL'),(1588,'5660','Brûly','BEL'),(1589,'5660','Brûly-de-Pesche','BEL'),(1590,'5660','Couvin','BEL'),(1591,'5660','Cul-des-Sarts','BEL'),(1592,'5660','Dailly','BEL'),(1593,'5660','Frasnes (Nam.)','BEL'),(1594,'5660','Gonrieux','BEL'),(1595,'5660','Mariembourg','BEL'),(1596,'5660','Pesche','BEL'),(1597,'5660','Petigny','BEL'),(1598,'5660','Petite-Chapelle','BEL'),(1599,'5660','Presgaux','BEL'),(1600,'5670','Dourbes','BEL'),(1601,'5670','Le Mesnil','BEL'),(1602,'5670','Mazée','BEL'),(1603,'5670','Nismes','BEL'),(1604,'5670','Oignies-en-Thiérache','BEL'),(1605,'5670','Olloy-sur-Viroin','BEL'),(1606,'5670','Treignes','BEL'),(1607,'5670','Vierves-sur-Viroin','BEL'),(1608,'5670','Viroinval','BEL'),(1609,'5680','Doische','BEL'),(1610,'5680','Gimnée','BEL'),(1611,'5680','Gochenée','BEL'),(1612,'5680','Matagne-la-Grande','BEL'),(1613,'5680','Matagne-la-Petite','BEL'),(1614,'5680','Niverlée','BEL'),(1615,'5680','Romerée','BEL'),(1616,'5680','Soulme','BEL'),(1617,'5680','Vaucelles','BEL'),(1618,'5680','Vodelée','BEL'),(1619,'6000','Charleroi','BEL'),(1620,'6001','Marcinelle','BEL'),(1621,'6010','Couillet','BEL'),(1622,'6020','Dampremy','BEL'),(1623,'6030','Goutroux','BEL'),(1624,'6030','Marchienne-au-Pont','BEL'),(1625,'6031','Monceau-sur-Sambre','BEL'),(1626,'6032','Mont-sur-Marchienne','BEL'),(1627,'6040','Jumet (Charleroi)','BEL'),(1628,'6041','Gosselies','BEL'),(1629,'6042','Lodelinsart','BEL'),(1630,'6043','Ransart','BEL'),(1631,'6044','Roux','BEL'),(1632,'6060','Gilly (Charleroi)','BEL'),(1633,'6061','Montignies-sur-Sambre','BEL'),(1634,'6110','Montigny-le-Tilleul','BEL'),(1635,'6111','Landelies','BEL'),(1636,'6120','Cour-sur-Heure','BEL'),(1637,'6120','Ham-sur-Heure','BEL'),(1638,'6120','Ham-sur-Heure-Nalinnes','BEL'),(1639,'6120','Jamioulx','BEL'),(1640,'6120','Marbaix (Ht.)','BEL'),(1641,'6120','Nalinnes','BEL'),(1642,'6140','Fontaine-l\'Evêque','BEL'),(1643,'6141','Forchies-la-Marche','BEL'),(1644,'6142','Leernes','BEL'),(1645,'6150','Anderlues','BEL'),(1646,'6180','Courcelles','BEL'),(1647,'6181','Gouy-lez-Piéton','BEL'),(1648,'6182','Souvret','BEL'),(1649,'6183','Trazegnies','BEL'),(1650,'6200','Bouffioulx','BEL'),(1651,'6200','Châtelet','BEL'),(1652,'6200','Châtelineau','BEL'),(1653,'6210','Frasnes-lez-Gosselies','BEL'),(1654,'6210','Les Bons Villers','BEL'),(1655,'6210','Rèves','BEL'),(1656,'6210','Villers-Perwin','BEL'),(1657,'6210','Wayaux','BEL'),(1658,'6211','Mellet','BEL'),(1659,'6220','Fleurus','BEL'),(1660,'6220','Heppignies','BEL'),(1661,'6220','Lambusart','BEL'),(1662,'6220','Wangenies','BEL'),(1663,'6221','Saint-Amand','BEL'),(1664,'6222','Brye','BEL'),(1665,'6223','Wagnelée','BEL'),(1666,'6224','Wanfercée-Baulet','BEL'),(1667,'6230','Buzet','BEL'),(1668,'6230','Obaix','BEL'),(1669,'6230','Pont-à-Celles','BEL'),(1670,'6230','Thiméon','BEL'),(1671,'6230','Viesville','BEL'),(1672,'6238','Liberchies','BEL'),(1673,'6238','Luttre','BEL'),(1674,'6240','Farciennes','BEL'),(1675,'6240','Pironchamps','BEL'),(1676,'6250','Aiseau','BEL'),(1677,'6250','Aiseau-Presles','BEL'),(1678,'6250','Pont-de-Loup','BEL'),(1679,'6250','Presles','BEL'),(1680,'6250','Roselies','BEL'),(1681,'6280','Acoz','BEL'),(1682,'6280','Gerpinnes','BEL'),(1683,'6280','Gougnies','BEL'),(1684,'6280','Joncret','BEL'),(1685,'6280','Loverval','BEL'),(1686,'6280','Villers-Poterie','BEL'),(1687,'6440','Boussu-lez-Walcourt','BEL'),(1688,'6440','Fourbechies','BEL'),(1689,'6440','Froidchapelle','BEL'),(1690,'6440','Vergnies','BEL'),(1691,'6441','Erpion','BEL'),(1692,'6460','Bailièvre','BEL'),(1693,'6460','Chimay','BEL'),(1694,'6460','Robechies','BEL'),(1695,'6460','Saint-Remy (Ht.)','BEL'),(1696,'6460','Salles','BEL'),(1697,'6460','Villers-la-Tour','BEL'),(1698,'6461','Virelles','BEL'),(1699,'6462','Vaulx-lez-Chimay','BEL'),(1700,'6463','Lompret','BEL'),(1701,'6464','Baileux','BEL'),(1702,'6464','Bourlers','BEL'),(1703,'6464','Forges','BEL'),(1704,'6464','l\'Escaillère','BEL'),(1705,'6464','Rièzes','BEL'),(1706,'6470','Grandrieu','BEL'),(1707,'6470','Montbliart','BEL'),(1708,'6470','Rance','BEL'),(1709,'6470','Sautin','BEL'),(1710,'6470','Sivry','BEL'),(1711,'6470','Sivry-Rance','BEL'),(1712,'6500','Barbençon','BEL'),(1713,'6500','Beaumont','BEL'),(1714,'6500','Leugnies','BEL'),(1715,'6500','Leval-Chaudeville','BEL'),(1716,'6500','Renlies','BEL'),(1717,'6500','Solre-Saint-Géry','BEL'),(1718,'6500','Thirimont','BEL'),(1719,'6511','Strée (Ht.)','BEL'),(1720,'6530','Leers-et-Fosteau','BEL'),(1721,'6530','Thuin','BEL'),(1722,'6531','Biesme-sous-Thuin','BEL'),(1723,'6532','Ragnies','BEL'),(1724,'6533','Biercée','BEL'),(1725,'6534','Gozée','BEL'),(1726,'6536','Donstiennes','BEL'),(1727,'6536','Thuillies','BEL'),(1728,'6540','Lobbes','BEL'),(1729,'6540','Mont-Sainte-Geneviève','BEL'),(1730,'6542','Sars-la-Buissière','BEL'),(1731,'6543','Bienne-lez-Happart','BEL'),(1732,'6560','Bersillies-l\'Abbaye','BEL'),(1733,'6560','Erquelinnes','BEL'),(1734,'6560','Grand-Reng','BEL'),(1735,'6560','Hantes-Wihéries','BEL'),(1736,'6560','Montignies-Saint-Christophe','BEL'),(1737,'6560','Solre-sur-Sambre','BEL'),(1738,'6567','Fontaine-Valmont','BEL'),(1739,'6567','Labuissière','BEL'),(1740,'6567','Merbes-le-Château','BEL'),(1741,'6567','Merbes-Sainte-Marie','BEL'),(1742,'6590','Momignies','BEL'),(1743,'6591','Macon','BEL'),(1744,'6592','Monceau-Imbrechies','BEL'),(1745,'6593','Macquenoise','BEL'),(1746,'6594','Beauwelz','BEL'),(1747,'6596','Forge-Philippe','BEL'),(1748,'6596','Seloignes','BEL'),(1749,'6600','Bastogne','BEL'),(1750,'6600','Longvilly','BEL'),(1751,'6600','Noville (Lux.)','BEL'),(1752,'6600','Villers-la-Bonne-Eau','BEL'),(1753,'6600','Wardin','BEL'),(1754,'6630','Martelange','BEL'),(1755,'6637','Fauvillers','BEL'),(1756,'6637','Hollange','BEL'),(1757,'6637','Tintange','BEL'),(1758,'6640','Hompré','BEL'),(1759,'6640','Morhet','BEL'),(1760,'6640','Nives','BEL'),(1761,'6640','Sibret','BEL'),(1762,'6640','Vaux-lez-Rosières','BEL'),(1763,'6640','Vaux-sur-Sure','BEL'),(1764,'6642','Juseret','BEL'),(1765,'6660','Houffalize','BEL'),(1766,'6660','Nadrin','BEL'),(1767,'6661','Mont (Lux.)','BEL'),(1768,'6661','Tailles','BEL'),(1769,'6662','Tavigny','BEL'),(1770,'6663','Mabompré','BEL'),(1771,'6666','Wibrin','BEL'),(1772,'6670','Gouvy','BEL'),(1773,'6670','Limerlé','BEL'),(1774,'6671','Bovigny','BEL'),(1775,'6672','Beho','BEL'),(1776,'6673','Cherain','BEL'),(1777,'6674','Montleban','BEL'),(1778,'6680','Amberloup','BEL'),(1779,'6680','Sainte-Ode','BEL'),(1780,'6680','Tillet','BEL'),(1781,'6681','Lavacherie','BEL'),(1782,'6686','Flamierge','BEL'),(1783,'6687','Bertogne','BEL'),(1784,'6688','Longchamps (Lux.)','BEL'),(1785,'6690','Bihain','BEL'),(1786,'6690','Vielsalm','BEL'),(1787,'6692','Petit-Thier','BEL'),(1788,'6698','Grand-Halleux','BEL'),(1789,'6700','Arlon','BEL'),(1790,'6700','Bonnert','BEL'),(1791,'6700','Heinsch','BEL'),(1792,'6700','Toernich','BEL'),(1793,'6704','Guirsch','BEL'),(1794,'6706','Autelbas','BEL'),(1795,'6717','Attert','BEL'),(1796,'6717','Nobressart','BEL'),(1797,'6717','Nothomb','BEL'),(1798,'6717','Thiaumont','BEL'),(1799,'6717','Tontelange','BEL'),(1800,'6720','Habay','BEL'),(1801,'6720','Habay-la-Neuve','BEL'),(1802,'6720','Hachy','BEL'),(1803,'6721','Anlier','BEL'),(1804,'6723','Habay-la-Vieille','BEL'),(1805,'6724','Houdemont','BEL'),(1806,'6724','Marbehan','BEL'),(1807,'6724','Rulles','BEL'),(1808,'6730','Bellefontaine (Lux.)','BEL'),(1809,'6730','Rossignol','BEL'),(1810,'6730','Saint-Vincent','BEL'),(1811,'6730','Tintigny','BEL'),(1812,'6740','Etalle','BEL'),(1813,'6740','Sainte-Marie-sur-Semois','BEL'),(1814,'6740','Villers-sur-Semois','BEL'),(1815,'6741','Vance','BEL'),(1816,'6742','Chantemelle','BEL'),(1817,'6743','Buzenol','BEL'),(1818,'6747','Châtillon','BEL'),(1819,'6747','Meix-le-Tige','BEL'),(1820,'6747','Saint-Léger (Lux.)','BEL'),(1821,'6750','Musson','BEL'),(1822,'6750','Mussy-la-Ville','BEL'),(1823,'6750','Signeulx','BEL'),(1824,'6760','Bleid','BEL'),(1825,'6760','Ethe','BEL'),(1826,'6760','Ruette','BEL'),(1827,'6760','Virton','BEL'),(1828,'6761','Latour','BEL'),(1829,'6762','Saint-Mard','BEL'),(1830,'6767','Dampicourt','BEL'),(1831,'6767','Harnoncourt','BEL'),(1832,'6767','Lamorteau','BEL'),(1833,'6767','Rouvroy','BEL'),(1834,'6767','Torgny','BEL'),(1835,'6769','Gérouville','BEL'),(1836,'6769','Meix-Devant-Virton','BEL'),(1837,'6769','Robelmont','BEL'),(1838,'6769','Sommethonne','BEL'),(1839,'6769','Villers-la-Loue','BEL'),(1840,'6780','Hondelange','BEL'),(1841,'6780','Messancy','BEL'),(1842,'6780','Wolkrange','BEL'),(1843,'6781','Sélange','BEL'),(1844,'6782','Habergy','BEL'),(1845,'6790','Aubange','BEL'),(1846,'6791','Athus','BEL'),(1847,'6792','Halanzy','BEL'),(1848,'6792','Rachecourt','BEL'),(1849,'6800','Bras','BEL'),(1850,'6800','Freux','BEL'),(1851,'6800','Libramont-Chevigny','BEL'),(1852,'6800','Moircy','BEL'),(1853,'6800','Recogne','BEL'),(1854,'6800','Remagne','BEL'),(1855,'6800','Sainte-Marie-Chevigny','BEL'),(1856,'6800','Saint-Pierre','BEL'),(1857,'6810','Chiny','BEL'),(1858,'6810','Izel','BEL'),(1859,'6810','Jamoigne','BEL'),(1860,'6811','Les Bulles','BEL'),(1861,'6812','Suxy','BEL'),(1862,'6813','Termes','BEL'),(1863,'6820','Florenville','BEL'),(1864,'6820','Fontenoille','BEL'),(1865,'6820','Muno','BEL'),(1866,'6820','Sainte-Cécile','BEL'),(1867,'6821','Lacuisine','BEL'),(1868,'6823','Villers-Devant-Orval','BEL'),(1869,'6824','Chassepierre','BEL'),(1870,'6830','Bouillon','BEL'),(1871,'6830','Les Hayons','BEL'),(1872,'6830','Poupehan','BEL'),(1873,'6830','Rochehaut','BEL'),(1874,'6831','Noirefontaine','BEL'),(1875,'6832','Sensenruth','BEL'),(1876,'6833','Ucimont','BEL'),(1877,'6833','Vivy','BEL'),(1878,'6834','Bellevaux','BEL'),(1879,'6836','Dohan','BEL'),(1880,'6838','Corbion','BEL'),(1881,'6840','Grandvoir','BEL'),(1882,'6840','Grapfontaine','BEL'),(1883,'6840','Hamipré','BEL'),(1884,'6840','Longlier','BEL'),(1885,'6840','Neufchâteau','BEL'),(1886,'6840','Tournay','BEL'),(1887,'6850','Carlsbourg','BEL'),(1888,'6850','Offagne','BEL'),(1889,'6850','Paliseul','BEL'),(1890,'6851','Nollevaux','BEL'),(1891,'6852','Maissin','BEL'),(1892,'6852','Opont','BEL'),(1893,'6853','Framont','BEL'),(1894,'6856','Fays-les-Veneurs','BEL'),(1895,'6860','Assenois','BEL'),(1896,'6860','Ebly','BEL'),(1897,'6860','Léglise','BEL'),(1898,'6860','Mellier','BEL'),(1899,'6860','Witry','BEL'),(1900,'6870','Arville','BEL'),(1901,'6870','Awenne','BEL'),(1902,'6870','Hatrival','BEL'),(1903,'6870','Mirwart','BEL'),(1904,'6870','Saint-Hubert','BEL'),(1905,'6870','Vesqueville','BEL'),(1906,'6880','Auby-sur-Semois','BEL'),(1907,'6880','Bertrix','BEL'),(1908,'6880','Cugnon','BEL'),(1909,'6880','Jehonville','BEL'),(1910,'6880','Orgeo','BEL'),(1911,'6887','Herbeumont','BEL'),(1912,'6887','Saint-Médard','BEL'),(1913,'6887','Straimont','BEL'),(1914,'6890','Anloy','BEL'),(1915,'6890','Libin','BEL'),(1916,'6890','Ochamps','BEL'),(1917,'6890','Redu','BEL'),(1918,'6890','Smuid','BEL'),(1919,'6890','Transinne','BEL'),(1920,'6890','Villance','BEL'),(1921,'6900','Aye','BEL'),(1922,'6900','Hargimont','BEL'),(1923,'6900','Humain','BEL'),(1924,'6900','Marche-en-Famenne','BEL'),(1925,'6900','On','BEL'),(1926,'6900','Roy','BEL'),(1927,'6900','Waha','BEL'),(1928,'6920','Sohier','BEL'),(1929,'6920','Wellin','BEL'),(1930,'6921','Chanly','BEL'),(1931,'6922','Halma','BEL'),(1932,'6924','Lomprez','BEL'),(1933,'6927','Bure','BEL'),(1934,'6927','Grupont','BEL'),(1935,'6927','Resteigne','BEL'),(1936,'6927','Tellin','BEL'),(1937,'6929','Daverdisse','BEL'),(1938,'6929','Gembes','BEL'),(1939,'6929','Haut-Fays','BEL'),(1940,'6929','Porcheresse (Lux.)','BEL'),(1941,'6940','Barvaux-sur-Ourthe','BEL'),(1942,'6940','Durbuy','BEL'),(1943,'6940','Grandhan','BEL'),(1944,'6940','Septon','BEL'),(1945,'6940','Wéris','BEL'),(1946,'6941','Bende','BEL'),(1947,'6941','Bomal-sur-Ourthe','BEL'),(1948,'6941','Borlon','BEL'),(1949,'6941','Heyd','BEL'),(1950,'6941','Izier','BEL'),(1951,'6941','Tohogne','BEL'),(1952,'6941','Villers-Sainte-Gertrude','BEL'),(1953,'6950','Harsin','BEL'),(1954,'6950','Nassogne','BEL'),(1955,'6951','Bande','BEL'),(1956,'6952','Grune','BEL'),(1957,'6953','Ambly','BEL'),(1958,'6953','Forrières','BEL'),(1959,'6953','Lesterny','BEL'),(1960,'6953','Masbourg','BEL'),(1961,'6960','Dochamps','BEL'),(1962,'6960','Grandmenil','BEL'),(1963,'6960','Harre','BEL'),(1964,'6960','Malempré','BEL'),(1965,'6960','Manhay','BEL'),(1966,'6960','Odeigne','BEL'),(1967,'6960','Vaux-Chavanne','BEL'),(1968,'6970','Tenneville','BEL'),(1969,'6971','Champlon','BEL'),(1970,'6972','Erneuville','BEL'),(1971,'6980','Beausaint','BEL'),(1972,'6980','La Roche-en-Ardenne','BEL'),(1973,'6982','Samrée','BEL'),(1974,'6983','Ortho','BEL'),(1975,'6984','Hives','BEL'),(1976,'6986','Halleux','BEL'),(1977,'6987','Beffe','BEL'),(1978,'6987','Hodister','BEL'),(1979,'6987','Marcourt','BEL'),(1980,'6987','Rendeux','BEL'),(1981,'6990','Fronville','BEL'),(1982,'6990','Hampteau','BEL'),(1983,'6990','Hotton','BEL'),(1984,'6990','Marenne','BEL'),(1985,'6997','Amonines','BEL'),(1986,'6997','Erezée','BEL'),(1987,'6997','Mormont','BEL'),(1988,'6997','Soy','BEL'),(1989,'7000','Mons','BEL'),(1990,'7010','S.H.A.P.E. België','BEL'),(1991,'7010','S.H.A.P.E. Belgique','BEL'),(1992,'7011','Ghlin','BEL'),(1993,'7012','Flénu','BEL'),(1994,'7012','Jemappes','BEL'),(1995,'7020','Maisières','BEL'),(1996,'7020','Nimy','BEL'),(1997,'7021','Havré','BEL'),(1998,'7022','Harmignies','BEL'),(1999,'7022','Harveng','BEL'),(2000,'7022','Hyon','BEL'),(2001,'7022','Mesvin','BEL'),(2002,'7022','Nouvelles','BEL'),(2003,'7024','Ciply','BEL'),(2004,'7030','Saint-Symphorien','BEL'),(2005,'7031','Villers-Saint-Ghislain','BEL'),(2006,'7032','Spiennes','BEL'),(2007,'7033','Cuesmes','BEL'),(2008,'7034','Obourg','BEL'),(2009,'7034','Saint-Denis (Ht.)','BEL'),(2010,'7040','Asquillies','BEL'),(2011,'7040','Aulnois','BEL'),(2012,'7040','Blaregnies','BEL'),(2013,'7040','Bougnies','BEL'),(2014,'7040','Genly','BEL'),(2015,'7040','Goegnies-Chaussée','BEL'),(2016,'7040','Quévy','BEL'),(2017,'7040','Quévy-le-Grand','BEL'),(2018,'7040','Quévy-le-Petit','BEL'),(2019,'7041','Givry','BEL'),(2020,'7041','Havay','BEL'),(2021,'7050','Erbaut','BEL'),(2022,'7050','Erbisoeul','BEL'),(2023,'7050','Herchies','BEL'),(2024,'7050','Jurbise','BEL'),(2025,'7050','Masnuy-Saint-Jean (Jurbise)','BEL'),(2026,'7050','Masnuy-Saint-Pierre','BEL'),(2027,'7060','Horrues','BEL'),(2028,'7060','Soignies','BEL'),(2029,'7061','Casteau (Soignies)','BEL'),(2030,'7061','Thieusies','BEL'),(2031,'7062','Naast','BEL'),(2032,'7063','Chaussée-Notre-Dame-Louvignies','BEL'),(2033,'7063','Neufvilles','BEL'),(2034,'7070','Gottignies','BEL'),(2035,'7070','Le Roeulx','BEL'),(2036,'7070','Mignault','BEL'),(2037,'7070','Thieu','BEL'),(2038,'7070','Ville-sur-Haine (Le Roeulx)','BEL'),(2039,'7080','Eugies (Frameries)','BEL'),(2040,'7080','Frameries','BEL'),(2041,'7080','La Bouverie','BEL'),(2042,'7080','Noirchain','BEL'),(2043,'7080','Sars-la-Bruyère','BEL'),(2044,'7090','Braine-le-Comte','BEL'),(2045,'7090','Hennuyères','BEL'),(2046,'7090','Henripont','BEL'),(2047,'7090','Petit-Roeulx-lez-Braine','BEL'),(2048,'7090','Ronquières','BEL'),(2049,'7090','Steenkerque (Ht.)','BEL'),(2050,'7100','Haine-Saint-Paul','BEL'),(2051,'7100','Haine-Saint-Pierre','BEL'),(2052,'7100','La Louvière','BEL'),(2053,'7100','Saint-Vaast','BEL'),(2054,'7100','Trivières','BEL'),(2055,'7110','Boussoit','BEL'),(2056,'7110','Houdeng-Aimeries','BEL'),(2057,'7110','Houdeng-Goegnies (La Louvière)','BEL'),(2058,'7110','Maurage','BEL'),(2059,'7110','Strépy-Bracquegnies','BEL'),(2060,'7120','Croix-lez-Rouveroy','BEL'),(2061,'7120','Estinnes','BEL'),(2062,'7120','Estinnes-au-Mont','BEL'),(2063,'7120','Estinnes-au-Val','BEL'),(2064,'7120','Fauroeulx','BEL'),(2065,'7120','Haulchin','BEL'),(2066,'7120','Peissant','BEL'),(2067,'7120','Rouveroy (Ht.)','BEL'),(2068,'7120','Vellereille-les-Brayeux','BEL'),(2069,'7120','Vellereille-le-Sec','BEL'),(2070,'7130','Battignies','BEL'),(2071,'7130','Binche','BEL'),(2072,'7130','Bray','BEL'),(2073,'7131','Waudrez','BEL'),(2074,'7133','Buvrinnes','BEL'),(2075,'7134','Epinois','BEL'),(2076,'7134','Leval-Trahegnies','BEL'),(2077,'7134','Péronnes-lez-Binche','BEL'),(2078,'7134','Ressaix','BEL'),(2079,'7140','Morlanwelz','BEL'),(2080,'7140','Morlanwelz-Mariemont','BEL'),(2081,'7141','Carnières','BEL'),(2082,'7141','Mont-Sainte-Aldegonde','BEL'),(2083,'7160','Chapelle-lez-Herlaimont','BEL'),(2084,'7160','Godarville','BEL'),(2085,'7160','Piéton','BEL'),(2086,'7170','Bellecourt','BEL'),(2087,'7170','Bois-d\'Haine','BEL'),(2088,'7170','Fayt-lez-Manage','BEL'),(2089,'7170','La Hestre','BEL'),(2090,'7170','Manage','BEL'),(2091,'7180','Seneffe','BEL'),(2092,'7181','Arquennes','BEL'),(2093,'7181','Familleureux','BEL'),(2094,'7181','Feluy','BEL'),(2095,'7181','Petit-Roeulx-lez-Nivelles','BEL'),(2096,'7190','Ecaussinnes','BEL'),(2097,'7190','Ecaussinnes-d\'Enghien','BEL'),(2098,'7190','Marche-lez-Ecaussinnes','BEL'),(2099,'7191','Ecaussinnes-Lalaing','BEL'),(2100,'7300','Boussu','BEL'),(2101,'7301','Hornu','BEL'),(2102,'7320','Bernissart','BEL'),(2103,'7321','Blaton','BEL'),(2104,'7321','Harchies','BEL'),(2105,'7322','Pommeroeul','BEL'),(2106,'7322','Ville-Pommeroeul','BEL'),(2107,'7330','Saint-Ghislain','BEL'),(2108,'7331','Baudour','BEL'),(2109,'7332','Neufmaison','BEL'),(2110,'7332','Sirault','BEL'),(2111,'7333','Tertre','BEL'),(2112,'7334','Hautrage','BEL'),(2113,'7334','Villerot','BEL'),(2114,'7340','Colfontaine','BEL'),(2115,'7340','Paturages','BEL'),(2116,'7340','Warquignies','BEL'),(2117,'7340','Wasmes','BEL'),(2118,'7350','Hainin','BEL'),(2119,'7350','Hensies','BEL'),(2120,'7350','Montroeul-sur-Haine','BEL'),(2121,'7350','Thulin','BEL'),(2122,'7370','Blaugies','BEL'),(2123,'7370','Dour','BEL'),(2124,'7370','Elouges','BEL'),(2125,'7370','Wihéries','BEL'),(2126,'7380','Baisieux','BEL'),(2127,'7380','Quiévrain','BEL'),(2128,'7382','Audregnies','BEL'),(2129,'7387','Angre','BEL'),(2130,'7387','Angreau','BEL'),(2131,'7387','Athis','BEL'),(2132,'7387','Autreppe','BEL'),(2133,'7387','Erquennes','BEL'),(2134,'7387','Fayt-le-Franc','BEL'),(2135,'7387','Honnelles','BEL'),(2136,'7387','Marchipont','BEL'),(2137,'7387','Montignies-sur-Roc','BEL'),(2138,'7387','Onnezies','BEL'),(2139,'7387','Roisin','BEL'),(2140,'7390','Quaregnon','BEL'),(2141,'7390','Wasmuel','BEL'),(2142,'7500','Ere','BEL'),(2143,'7500','Saint-Maur','BEL'),(2144,'7500','Tournai','BEL'),(2145,'7501','Orcq','BEL'),(2146,'7502','Esplechin','BEL'),(2147,'7503','Froyennes','BEL'),(2148,'7504','Froidmont','BEL'),(2149,'7506','Willemeau','BEL'),(2150,'7520','Ramegnies-Chin','BEL'),(2151,'7520','Templeuve','BEL'),(2152,'7521','Chercq','BEL'),(2153,'7522','Blandain','BEL'),(2154,'7522','Hertain','BEL'),(2155,'7522','Lamain','BEL'),(2156,'7522','Marquain','BEL'),(2157,'7530','Gaurain-Ramecroix (Tournai)','BEL'),(2158,'7531','Havinnes','BEL'),(2159,'7532','Beclers','BEL'),(2160,'7533','Thimougies','BEL'),(2161,'7534','Barry','BEL'),(2162,'7534','Maulde','BEL'),(2163,'7536','Vaulx (Tournai)','BEL'),(2164,'7538','Vezon','BEL'),(2165,'7540','Kain','BEL'),(2166,'7540','Melles','BEL'),(2167,'7540','Quartes','BEL'),(2168,'7540','Rumillies','BEL'),(2169,'7542','Mont-Saint-Aubert','BEL'),(2170,'7543','Mourcourt','BEL'),(2171,'7548','Warchin','BEL'),(2172,'7600','Péruwelz','BEL'),(2173,'7601','Roucourt','BEL'),(2174,'7602','Bury','BEL'),(2175,'7603','Bon-Secours','BEL'),(2176,'7604','Baugnies','BEL'),(2177,'7604','Braffe','BEL'),(2178,'7604','Brasmenil','BEL'),(2179,'7604','Callenelle','BEL'),(2180,'7604','Wasmes-Audemez-Briffoeil','BEL'),(2181,'7608','Wiers','BEL'),(2182,'7610','Rumes','BEL'),(2183,'7611','La Glanerie','BEL'),(2184,'7618','Taintignies','BEL'),(2185,'7620','Bléharies','BEL'),(2186,'7620','Brunehaut','BEL'),(2187,'7620','Guignies','BEL'),(2188,'7620','Hollain','BEL'),(2189,'7620','Jollain-Merlin','BEL'),(2190,'7620','Wez-Velvain','BEL'),(2191,'7621','Lesdain','BEL'),(2192,'7622','Laplaigne','BEL'),(2193,'7623','Rongy','BEL'),(2194,'7624','Howardries','BEL'),(2195,'7640','Antoing','BEL'),(2196,'7640','Maubray','BEL'),(2197,'7640','Péronnes-lez-Antoing','BEL'),(2198,'7641','Bruyelle','BEL'),(2199,'7642','Calonne','BEL'),(2200,'7643','Fontenoy','BEL'),(2201,'7700','Luingne','BEL'),(2202,'7700','Moeskroen','BEL'),(2203,'7700','Mouscron','BEL'),(2204,'7711','Dottenijs','BEL'),(2205,'7711','Dottignies','BEL'),(2206,'7712','Herseaux','BEL'),(2207,'7730','Bailleul','BEL'),(2208,'7730','Estaimbourg','BEL'),(2209,'7730','Estaimpuis','BEL'),(2210,'7730','Evregnies','BEL'),(2211,'7730','Leers-Nord','BEL'),(2212,'7730','Néchin','BEL'),(2213,'7730','Saint-Léger (Ht.)','BEL'),(2214,'7740','Pecq','BEL'),(2215,'7740','Warcoing','BEL'),(2216,'7742','Hérinnes-lez-Pecq','BEL'),(2217,'7743','Esquelmes','BEL'),(2218,'7743','Obigies','BEL'),(2219,'7750','Amougies','BEL'),(2220,'7750','Anseroeul','BEL'),(2221,'7750','Mont-de-l\'Enclus','BEL'),(2222,'7750','Orroir','BEL'),(2223,'7750','Russeignies','BEL'),(2224,'7760','Celles (Ht.)','BEL'),(2225,'7760','Escanaffles','BEL'),(2226,'7760','Molenbaix','BEL'),(2227,'7760','Popuelles','BEL'),(2228,'7760','Pottes','BEL'),(2229,'7760','Velaines','BEL'),(2230,'7780','Comines','BEL'),(2231,'7780','Comines-Warneton','BEL'),(2232,'7780','Komen','BEL'),(2233,'7780','Komen-Waasten','BEL'),(2234,'7781','Houthem (Comines)','BEL'),(2235,'7782','Ploegsteert','BEL'),(2236,'7783','Bizet','BEL'),(2237,'7784','Bas-Warneton','BEL'),(2238,'7784','Neerwaasten','BEL'),(2239,'7784','Waasten','BEL'),(2240,'7784','Warneton','BEL'),(2241,'7800','Ath','BEL'),(2242,'7800','Lanquesaint','BEL'),(2243,'7801','Irchonwelz','BEL'),(2244,'7802','Ormeignies','BEL'),(2245,'7803','Bouvignies','BEL'),(2246,'7804','Ostiches','BEL'),(2247,'7804','Rebaix','BEL'),(2248,'7810','Maffle','BEL'),(2249,'7811','Arbre (Ht.)','BEL'),(2250,'7812','Houtaing','BEL'),(2251,'7812','Ligne','BEL'),(2252,'7812','Mainvault','BEL'),(2253,'7812','Moulbaix','BEL'),(2254,'7812','Villers-Notre-Dame','BEL'),(2255,'7812','Villers-Saint-Amand','BEL'),(2256,'7822','Ghislenghien','BEL'),(2257,'7822','Isières','BEL'),(2258,'7822','Meslin-l\'Evêque','BEL'),(2259,'7823','Gibecq','BEL'),(2260,'7830','Bassilly','BEL'),(2261,'7830','Fouleng','BEL'),(2262,'7830','Gondregnies','BEL'),(2263,'7830','Graty','BEL'),(2264,'7830','Hellebecq','BEL'),(2265,'7830','Hoves (Ht.)','BEL'),(2266,'7830','Silly','BEL'),(2267,'7830','Thoricourt','BEL'),(2268,'7850','Edingen','BEL'),(2269,'7850','Enghien','BEL'),(2270,'7850','Lettelingen','BEL'),(2271,'7850','Marcq','BEL'),(2272,'7850','Mark','BEL'),(2273,'7850','Petit-Enghien','BEL'),(2274,'7860','Lessines','BEL'),(2275,'7861','Papignies','BEL'),(2276,'7861','Wannebecq','BEL'),(2277,'7862','Ogy','BEL'),(2278,'7863','Ghoy','BEL'),(2279,'7864','Deux-Acren','BEL'),(2280,'7866','Bois-de-Lessines','BEL'),(2281,'7866','Ollignies','BEL'),(2282,'7870','Bauffe','BEL'),(2283,'7870','Cambron-Saint-Vincent','BEL'),(2284,'7870','Lens','BEL'),(2285,'7870','Lombise','BEL'),(2286,'7870','Montignies-lez-Lens','BEL'),(2287,'7880','Flobecq','BEL'),(2288,'7880','Vloesberg','BEL'),(2289,'7890','Ellezelles','BEL'),(2290,'7890','Lahamaide','BEL'),(2291,'7890','Wodecq','BEL'),(2292,'7900','Grandmetz','BEL'),(2293,'7900','Leuze-en-Hainaut','BEL'),(2294,'7901','Thieulain','BEL'),(2295,'7903','Blicquy','BEL'),(2296,'7903','Chapelle-à-Oie','BEL'),(2297,'7903','Chapelle-à-Wattines','BEL'),(2298,'7904','Pipaix','BEL'),(2299,'7904','Tourpes','BEL'),(2300,'7904','Willaupuis','BEL'),(2301,'7906','Gallaix','BEL'),(2302,'7910','Anvaing','BEL'),(2303,'7910','Arc-Ainières','BEL'),(2304,'7910','Arc-Wattripont','BEL'),(2305,'7910','Cordes','BEL'),(2306,'7910','Ellignies-lez-Frasnes','BEL'),(2307,'7910','Forest (Ht.)','BEL'),(2308,'7910','Frasnes-lez-Anvaing','BEL'),(2309,'7910','Wattripont','BEL'),(2310,'7911','Buissenal','BEL'),(2311,'7911','Frasnes-lez-Buissenal','BEL'),(2312,'7911','Hacquegnies','BEL'),(2313,'7911','Herquegies','BEL'),(2314,'7911','Montroeul-au-Bois','BEL'),(2315,'7911','Moustier (Ht.)','BEL'),(2316,'7911','Oeudeghien','BEL'),(2317,'7912','Dergneau','BEL'),(2318,'7912','Saint-Sauveur','BEL'),(2319,'7940','Brugelette','BEL'),(2320,'7940','Cambron-Casteau','BEL'),(2321,'7941','Attre','BEL'),(2322,'7942','Mévergnies-lez-Lens','BEL'),(2323,'7943','Gages','BEL'),(2324,'7950','Chièvres','BEL'),(2325,'7950','Grosage','BEL'),(2326,'7950','Huissignies','BEL'),(2327,'7950','Ladeuze','BEL'),(2328,'7950','Tongre-Saint-Martin','BEL'),(2329,'7951','Tongre-Notre-Dame','BEL'),(2330,'7970','Beloeil','BEL'),(2331,'7971','Basècles','BEL'),(2332,'7971','Ramegnies','BEL'),(2333,'7971','Thumaide','BEL'),(2334,'7971','Wadelincourt','BEL'),(2335,'7972','Aubechies','BEL'),(2336,'7972','Ellignies-Sainte-Anne','BEL'),(2337,'7972','Quevaucamps','BEL'),(2338,'7973','Grandglise','BEL'),(2339,'7973','Stambruges','BEL'),(2340,'8000','Brugge','BEL'),(2341,'8000','Koolkerke','BEL'),(2342,'8020','Hertsberge','BEL'),(2343,'8020','Oostkamp','BEL'),(2344,'8020','Ruddervoorde','BEL'),(2345,'8020','Waardamme','BEL'),(2346,'8200','Sint-Andries','BEL'),(2347,'8200','Sint-Michiels','BEL'),(2348,'8210','Loppem','BEL'),(2349,'8210','Veldegem','BEL'),(2350,'8210','Zedelgem','BEL'),(2351,'8211','Aartrijke','BEL'),(2352,'8300','Knokke','BEL'),(2353,'8300','Knokke-Heist','BEL'),(2354,'8300','Westkapelle','BEL'),(2355,'8301','Heist-aan-Zee','BEL'),(2356,'8301','Ramskapelle (Knokke-Heist)','BEL'),(2357,'8310','Assebroek','BEL'),(2358,'8310','Sint-Kruis (Brugge)','BEL'),(2359,'8340','Damme','BEL'),(2360,'8340','Hoeke','BEL'),(2361,'8340','Lapscheure','BEL'),(2362,'8340','Moerkerke','BEL'),(2363,'8340','Oostkerke (Damme)','BEL'),(2364,'8340','Sijsele','BEL'),(2365,'8370','Blankenberge','BEL'),(2366,'8370','Uitkerke','BEL'),(2367,'8377','Houtave','BEL'),(2368,'8377','Meetkerke','BEL'),(2369,'8377','Nieuwmunster','BEL'),(2370,'8377','Zuienkerke','BEL'),(2371,'8380','Dudzele','BEL'),(2372,'8380','Lissewege','BEL'),(2373,'8380','Zeebrugge (Brugge)','BEL'),(2374,'8400','Oostende','BEL'),(2375,'8400','Stene','BEL'),(2376,'8400','Zandvoorde (Oostende)','BEL'),(2377,'8420','De Haan','BEL'),(2378,'8420','Klemskerke','BEL'),(2379,'8420','Wenduine','BEL'),(2380,'8421','Vlissegem','BEL'),(2381,'8430','Middelkerke','BEL'),(2382,'8431','Wilskerke','BEL'),(2383,'8432','Leffinge','BEL'),(2384,'8433','Mannekensvere','BEL'),(2385,'8433','Schore','BEL'),(2386,'8433','Sint-Pieters-Kapelle (W.-Vl.)','BEL'),(2387,'8433','Slijpe','BEL'),(2388,'8433','Spermalie','BEL'),(2389,'8434','Lombardsijde','BEL'),(2390,'8434','Westende','BEL'),(2391,'8450','Bredene','BEL'),(2392,'8460','Ettelgem','BEL'),(2393,'8460','Oudenburg','BEL'),(2394,'8460','Roksem','BEL'),(2395,'8460','Westkerke','BEL'),(2396,'8470','Gistel','BEL'),(2397,'8470','Moere','BEL'),(2398,'8470','Snaaskerke','BEL'),(2399,'8470','Zevekote','BEL'),(2400,'8480','Bekegem','BEL'),(2401,'8480','Eernegem','BEL'),(2402,'8480','Ichtegem','BEL'),(2403,'8490','Jabbeke','BEL'),(2404,'8490','Snellegem','BEL'),(2405,'8490','Stalhille','BEL'),(2406,'8490','Varsenare','BEL'),(2407,'8490','Zerkegem','BEL'),(2408,'8500','Kortrijk','BEL'),(2409,'8501','Bissegem','BEL'),(2410,'8501','Heule','BEL'),(2411,'8510','Bellegem','BEL'),(2412,'8510','Kooigem','BEL'),(2413,'8510','Marke (Kortrijk)','BEL'),(2414,'8510','Rollegem','BEL'),(2415,'8511','Aalbeke','BEL'),(2416,'8520','Kuurne','BEL'),(2417,'8530','Harelbeke','BEL'),(2418,'8531','Bavikhove','BEL'),(2419,'8531','Hulste','BEL'),(2420,'8540','Deerlijk','BEL'),(2421,'8550','Zwevegem','BEL'),(2422,'8551','Heestert','BEL'),(2423,'8552','Moen','BEL'),(2424,'8553','Otegem','BEL'),(2425,'8554','Sint-Denijs','BEL'),(2426,'8560','Gullegem','BEL'),(2427,'8560','Moorsele','BEL'),(2428,'8560','Wevelgem','BEL'),(2429,'8570','Anzegem','BEL'),(2430,'8570','Gijzelbrechtegem','BEL'),(2431,'8570','Ingooigem','BEL'),(2432,'8570','Vichte','BEL'),(2433,'8572','Kaster','BEL'),(2434,'8573','Tiegem','BEL'),(2435,'8580','Avelgem','BEL'),(2436,'8581','Kerkhove','BEL'),(2437,'8581','Waarmaarde','BEL'),(2438,'8582','Outrijve','BEL'),(2439,'8583','Bossuit','BEL'),(2440,'8587','Espierres','BEL'),(2441,'8587','Espierres-Helchin','BEL'),(2442,'8587','Helchin','BEL'),(2443,'8587','Helkijn','BEL'),(2444,'8587','Spiere','BEL'),(2445,'8587','Spiere-Helkijn','BEL'),(2446,'8600','Beerst','BEL'),(2447,'8600','Diksmuide','BEL'),(2448,'8600','Driekapellen','BEL'),(2449,'8600','Esen','BEL'),(2450,'8600','Kaaskerke','BEL'),(2451,'8600','Keiem','BEL'),(2452,'8600','Lampernisse','BEL'),(2453,'8600','Leke','BEL'),(2454,'8600','Nieuwkapelle','BEL'),(2455,'8600','Oostkerke (Diksmuide)','BEL'),(2456,'8600','Oudekapelle','BEL'),(2457,'8600','Pervijze','BEL'),(2458,'8600','Sint-Jacobs-Kapelle','BEL'),(2459,'8600','Stuivekenskerke','BEL'),(2460,'8600','Vladslo','BEL'),(2461,'8600','Woumen','BEL'),(2462,'8610','Handzame','BEL'),(2463,'8610','Kortemark','BEL'),(2464,'8610','Werken','BEL'),(2465,'8610','Zarren','BEL'),(2466,'8620','Nieuwpoort','BEL'),(2467,'8620','Ramskapelle (Nieuwpoort)','BEL'),(2468,'8620','Sint-Joris (Nieuwpoort)','BEL'),(2469,'8630','Avekapelle','BEL'),(2470,'8630','Beauvoorde','BEL'),(2471,'8630','Booitshoeke','BEL'),(2472,'8630','Bulskamp','BEL'),(2473,'8630','De Moeren','BEL'),(2474,'8630','Eggewaartskapelle','BEL'),(2475,'8630','Houtem (W.-Vl.)','BEL'),(2476,'8630','Steenkerke (W.-Vl.)','BEL'),(2477,'8630','Veurne','BEL'),(2478,'8630','Vinkem','BEL'),(2479,'8630','Wulveringem','BEL'),(2480,'8630','Zoutenaaie','BEL'),(2481,'8640','Oostvleteren','BEL'),(2482,'8640','Vleteren','BEL'),(2483,'8640','Westvleteren','BEL'),(2484,'8640','Woesten','BEL'),(2485,'8647','Lo','BEL'),(2486,'8647','Lo-Reninge','BEL'),(2487,'8647','Noordschote','BEL'),(2488,'8647','Pollinkhove','BEL'),(2489,'8647','Reninge','BEL'),(2490,'8650','Houthulst','BEL'),(2491,'8650','Klerken','BEL'),(2492,'8650','Merkem','BEL'),(2493,'8660','Adinkerke','BEL'),(2494,'8660','De Panne','BEL'),(2495,'8670','Koksijde','BEL'),(2496,'8670','Oostduinkerke','BEL'),(2497,'8670','Wulpen','BEL'),(2498,'8680','Bovekerke','BEL'),(2499,'8680','Koekelare','BEL'),(2500,'8680','Zande','BEL'),(2501,'8690','Alveringem','BEL'),(2502,'8690','Hoogstade','BEL'),(2503,'8690','Oeren','BEL'),(2504,'8690','Sint-Rijkers','BEL'),(2505,'8691','Beveren-aan-den-Ijzer','BEL'),(2506,'8691','Gijverinkhove','BEL'),(2507,'8691','Izenberge','BEL'),(2508,'8691','Leisele','BEL'),(2509,'8691','Stavele','BEL'),(2510,'8700','Aarsele','BEL'),(2511,'8700','Kanegem','BEL'),(2512,'8700','Schuiferskapelle','BEL'),(2513,'8700','Tielt','BEL'),(2514,'8710','Ooigem','BEL'),(2515,'8710','Sint-Baafs-Vijve','BEL'),(2516,'8710','Wielsbeke','BEL'),(2517,'8720','Dentergem','BEL'),(2518,'8720','Markegem','BEL'),(2519,'8720','Oeselgem','BEL'),(2520,'8720','Wakken','BEL'),(2521,'8730','Beernem','BEL'),(2522,'8730','Oedelem','BEL'),(2523,'8730','Sint-Joris (Beernem)','BEL'),(2524,'8740','Egem','BEL'),(2525,'8740','Pittem','BEL'),(2526,'8750','Wingene','BEL'),(2527,'8750','Zwevezele','BEL'),(2528,'8755','Ruiselede','BEL'),(2529,'8760','Meulebeke','BEL'),(2530,'8770','Ingelmunster','BEL'),(2531,'8780','Oostrozebeke','BEL'),(2532,'8790','Waregem','BEL'),(2533,'8791','Beveren (Leie)','BEL'),(2534,'8792','Desselgem','BEL'),(2535,'8793','Sint-Eloois-Vijve','BEL'),(2536,'8800','Beveren (Roeselare)','BEL'),(2537,'8800','Oekene','BEL'),(2538,'8800','Roeselare','BEL'),(2539,'8800','Rumbeke','BEL'),(2540,'8810','Lichtervelde','BEL'),(2541,'8820','Torhout','BEL'),(2542,'8830','Gits','BEL'),(2543,'8830','Hooglede','BEL'),(2544,'8840','Oostnieuwkerke','BEL'),(2545,'8840','Staden','BEL'),(2546,'8840','Westrozebeke','BEL'),(2547,'8850','Ardooie','BEL'),(2548,'8851','Koolskamp','BEL'),(2549,'8860','Lendelede','BEL'),(2550,'8870','Emelgem','BEL'),(2551,'8870','Izegem','BEL'),(2552,'8870','Kachtem','BEL'),(2553,'8880','Ledegem','BEL'),(2554,'8880','Rollegem-Kapelle','BEL'),(2555,'8880','Sint-Eloois-Winkel','BEL'),(2556,'8890','Dadizele','BEL'),(2557,'8890','Moorslede','BEL'),(2558,'8900','Brielen','BEL'),(2559,'8900','Dikkebus','BEL'),(2560,'8900','Ieper','BEL'),(2561,'8900','Sint-Jan','BEL'),(2562,'8902','Hollebeke','BEL'),(2563,'8902','Voormezele','BEL'),(2564,'8902','Zillebeke','BEL'),(2565,'8904','Boezinge','BEL'),(2566,'8904','Zuidschote','BEL'),(2567,'8906','Elverdinge','BEL'),(2568,'8908','Vlamertinge','BEL'),(2569,'8920','Bikschote','BEL'),(2570,'8920','Langemark','BEL'),(2571,'8920','Langemark-Poelkapelle','BEL'),(2572,'8920','Poelkapelle','BEL'),(2573,'8930','Lauwe','BEL'),(2574,'8930','Menen','BEL'),(2575,'8930','Rekkem','BEL'),(2576,'8940','Geluwe','BEL'),(2577,'8940','Wervik','BEL'),(2578,'8950','Heuvelland','BEL'),(2579,'8950','Nieuwkerke','BEL'),(2580,'8951','Dranouter','BEL'),(2581,'8952','Wulvergem','BEL'),(2582,'8953','Wijtschate','BEL'),(2583,'8954','Westouter','BEL'),(2584,'8956','Kemmel','BEL'),(2585,'8957','Mesen','BEL'),(2586,'8957','Messines','BEL'),(2587,'8958','Loker','BEL'),(2588,'8970','Poperinge','BEL'),(2589,'8970','Reningelst','BEL'),(2590,'8972','Krombeke','BEL'),(2591,'8972','Proven','BEL'),(2592,'8972','Roesbrugge-Haringe','BEL'),(2593,'8978','Watou','BEL'),(2594,'8980','Beselare','BEL'),(2595,'8980','Geluveld','BEL'),(2596,'8980','Passendale','BEL'),(2597,'8980','Zandvoorde (Zonnebeke)','BEL'),(2598,'8980','Zonnebeke','BEL'),(2599,'9000','Gent','BEL'),(2600,'9030','Mariakerke (Gent)','BEL'),(2601,'9031','Drongen','BEL'),(2602,'9032','Wondelgem','BEL'),(2603,'9040','Sint-Amandsberg (Gent)','BEL'),(2604,'9041','Oostakker','BEL'),(2605,'9042','Desteldonk','BEL'),(2606,'9042','Mendonk','BEL'),(2607,'9042','Sint-Kruis-Winkel','BEL'),(2608,'9050','Gentbrugge','BEL'),(2609,'9050','Ledeberg (Gent)','BEL'),(2610,'9051','Afsnee','BEL'),(2611,'9051','Sint-Denijs-Westrem','BEL'),(2612,'9052','Zwijnaarde','BEL'),(2613,'9060','Zelzate','BEL'),(2614,'9070','Destelbergen','BEL'),(2615,'9070','Heusden (O.-Vl.)','BEL'),(2616,'9080','Beervelde','BEL'),(2617,'9080','Lochristi','BEL'),(2618,'9080','Zaffelare','BEL'),(2619,'9080','Zeveneken','BEL'),(2620,'9090','Gontrode','BEL'),(2621,'9090','Melle','BEL'),(2622,'9100','Nieuwkerken-Waas','BEL'),(2623,'9100','Sint-Niklaas','BEL'),(2624,'9111','Belsele (Sint-Niklaas)','BEL'),(2625,'9112','Sinaai-Waas','BEL'),(2626,'9120','Beveren-Waas','BEL'),(2627,'9120','Haasdonk','BEL'),(2628,'9120','Kallo (Beveren-Waas)','BEL'),(2629,'9120','Melsele','BEL'),(2630,'9120','Vrasene','BEL'),(2631,'9130','Doel','BEL'),(2632,'9130','Kallo (Kieldrecht)','BEL'),(2633,'9130','Kieldrecht (Beveren)','BEL'),(2634,'9130','Verrebroek','BEL'),(2635,'9140','Elversele','BEL'),(2636,'9140','Steendorp','BEL'),(2637,'9140','Temse','BEL'),(2638,'9140','Tielrode','BEL'),(2639,'9150','Bazel','BEL'),(2640,'9150','Kruibeke','BEL'),(2641,'9150','Rupelmonde','BEL'),(2642,'9160','Daknam','BEL'),(2643,'9160','Eksaarde','BEL'),(2644,'9160','Lokeren','BEL'),(2645,'9170','De Klinge','BEL'),(2646,'9170','Meerdonk','BEL'),(2647,'9170','Sint-Gillis-Waas','BEL'),(2648,'9170','Sint-Pauwels','BEL'),(2649,'9180','Moerbeke-Waas','BEL'),(2650,'9185','Wachtebeke','BEL'),(2651,'9190','Kemzeke','BEL'),(2652,'9190','Stekene','BEL'),(2653,'9200','Appels','BEL'),(2654,'9200','Baasrode','BEL'),(2655,'9200','Dendermonde','BEL'),(2656,'9200','Grembergen','BEL'),(2657,'9200','Mespelare','BEL'),(2658,'9200','Oudegem','BEL'),(2659,'9200','Schoonaarde','BEL'),(2660,'9200','Sint-Gillis-bij-Dendermonde','BEL'),(2661,'9220','Hamme (O.-Vl.)','BEL'),(2662,'9220','Moerzeke','BEL'),(2663,'9230','Massemen','BEL'),(2664,'9230','Westrem','BEL'),(2665,'9230','Wetteren','BEL'),(2666,'9240','Zele','BEL'),(2667,'9250','Waasmunster','BEL'),(2668,'9255','Buggenhout','BEL'),(2669,'9255','Opdorp','BEL'),(2670,'9260','Schellebelle','BEL'),(2671,'9260','Serskamp','BEL'),(2672,'9260','Wichelen','BEL'),(2673,'9270','Kalken','BEL'),(2674,'9270','Laarne','BEL'),(2675,'9280','Denderbelle','BEL'),(2676,'9280','Lebbeke','BEL'),(2677,'9280','Wieze','BEL'),(2678,'9290','Berlare','BEL'),(2679,'9290','Overmere','BEL'),(2680,'9290','Uitbergen','BEL'),(2681,'9300','Aalst','BEL'),(2682,'9308','Gijzegem','BEL'),(2683,'9308','Hofstade (O.-Vl.)','BEL'),(2684,'9310','Baardegem','BEL'),(2685,'9310','Herdersem','BEL'),(2686,'9310','Meldert (O.-Vl.)','BEL'),(2687,'9310','Moorsel','BEL'),(2688,'9320','Erembodegem (Aalst)','BEL'),(2689,'9320','Nieuwerkerken (Aalst)','BEL'),(2690,'9340','Impe','BEL'),(2691,'9340','Lede','BEL'),(2692,'9340','Oordegem','BEL'),(2693,'9340','Smetlede','BEL'),(2694,'9340','Wanzele','BEL'),(2695,'9400','Appelterre-Eichem','BEL'),(2696,'9400','Denderwindeke','BEL'),(2697,'9400','Lieferinge','BEL'),(2698,'9400','Nederhasselt','BEL'),(2699,'9400','Ninove','BEL'),(2700,'9400','Okegem','BEL'),(2701,'9400','Voorde','BEL'),(2702,'9401','Pollare','BEL'),(2703,'9402','Meerbeke','BEL'),(2704,'9403','Neigem','BEL'),(2705,'9404','Aspelare','BEL'),(2706,'9406','Outer','BEL'),(2707,'9420','Aaigem','BEL'),(2708,'9420','Bambrugge','BEL'),(2709,'9420','Burst','BEL'),(2710,'9420','Erondegem','BEL'),(2711,'9420','Erpe','BEL'),(2712,'9420','Erpe-Mere','BEL'),(2713,'9420','Mere','BEL'),(2714,'9420','Ottergem','BEL'),(2715,'9420','Vlekkem','BEL'),(2716,'9450','Denderhoutem','BEL'),(2717,'9450','Haaltert','BEL'),(2718,'9450','Heldergem','BEL'),(2719,'9451','Kerksken','BEL'),(2720,'9470','Denderleeuw','BEL'),(2721,'9472','Iddergem','BEL'),(2722,'9473','Welle','BEL'),(2723,'9500','Geraardsbergen','BEL'),(2724,'9500','Goeferdinge','BEL'),(2725,'9500','Moerbeke','BEL'),(2726,'9500','Nederboelare','BEL'),(2727,'9500','Onkerzele','BEL'),(2728,'9500','Ophasselt','BEL'),(2729,'9500','Overboelare','BEL'),(2730,'9500','Viane','BEL'),(2731,'9500','Zarlardinge','BEL'),(2732,'9506','Grimminge','BEL'),(2733,'9506','Idegem','BEL'),(2734,'9506','Nieuwenhove','BEL'),(2735,'9506','Schendelbeke','BEL'),(2736,'9506','Smeerebbe-Vloerzegem','BEL'),(2737,'9506','Waarbeke','BEL'),(2738,'9506','Zandbergen','BEL'),(2739,'9520','Bavegem','BEL'),(2740,'9520','Sint-Lievens-Houtem','BEL'),(2741,'9520','Vlierzele','BEL'),(2742,'9520','Zonnegem','BEL'),(2743,'9521','Letterhoutem','BEL'),(2744,'9550','Herzele','BEL'),(2745,'9550','Hillegem','BEL'),(2746,'9550','Sint-Antelinks','BEL'),(2747,'9550','Sint-Lievens-Esse','BEL'),(2748,'9550','Steenhuize-Wijnhuize','BEL'),(2749,'9550','Woubrechtegem','BEL'),(2750,'9551','Ressegem','BEL'),(2751,'9552','Borsbeke','BEL'),(2752,'9570','Deftinge','BEL'),(2753,'9570','Lierde','BEL'),(2754,'9570','Sint-Maria-Lierde','BEL'),(2755,'9571','Hemelveerdegem','BEL'),(2756,'9572','Sint-Martens-Lierde','BEL'),(2757,'9600','Renaix','BEL'),(2758,'9600','Ronse','BEL'),(2759,'9620','Elene','BEL'),(2760,'9620','Erwetegem','BEL'),(2761,'9620','Godveerdegem','BEL'),(2762,'9620','Grotenberge','BEL'),(2763,'9620','Leeuwergem','BEL'),(2764,'9620','Oombergen (Zottegem)','BEL'),(2765,'9620','Sint-Goriks-Oudenhove','BEL'),(2766,'9620','Sint-Maria-Oudenhove (Zottegem)','BEL'),(2767,'9620','Strijpen','BEL'),(2768,'9620','Velzeke-Ruddershove','BEL'),(2769,'9620','Zottegem','BEL'),(2770,'9630','Beerlegem','BEL'),(2771,'9630','Dikkele','BEL'),(2772,'9630','Hundelgem','BEL'),(2773,'9630','Meilegem','BEL'),(2774,'9630','Munkzwalm','BEL'),(2775,'9630','Paulatem','BEL'),(2776,'9630','Roborst','BEL'),(2777,'9630','Rozebeke','BEL'),(2778,'9630','Sint-Blasius-Boekel','BEL'),(2779,'9630','Sint-Denijs-Boekel','BEL'),(2780,'9630','Sint-Maria-Latem','BEL'),(2781,'9630','Zwalm','BEL'),(2782,'9636','Nederzwalm-Hermelgem','BEL'),(2783,'9660','Brakel','BEL'),(2784,'9660','Elst','BEL'),(2785,'9660','Everbeek','BEL'),(2786,'9660','Michelbeke','BEL'),(2787,'9660','Nederbrakel','BEL'),(2788,'9660','Opbrakel','BEL'),(2789,'9660','Zegelsem','BEL'),(2790,'9661','Parike','BEL'),(2791,'9667','Horebeke','BEL'),(2792,'9667','Sint-Kornelis-Horebeke','BEL'),(2793,'9667','Sint-Maria-Horebeke','BEL'),(2794,'9680','Etikhove','BEL'),(2795,'9680','Maarkedal','BEL'),(2796,'9680','Maarke-Kerkem','BEL'),(2797,'9681','Nukerke','BEL'),(2798,'9688','Schorisse','BEL'),(2799,'9690','Berchem (O.-Vl.)','BEL'),(2800,'9690','Kluisbergen','BEL'),(2801,'9690','Kwaremont','BEL'),(2802,'9690','Ruien','BEL'),(2803,'9690','Zulzeke','BEL'),(2804,'9700','Bevere','BEL'),(2805,'9700','Edelare','BEL'),(2806,'9700','Eine','BEL'),(2807,'9700','Ename','BEL'),(2808,'9700','Heurne','BEL'),(2809,'9700','Leupegem','BEL'),(2810,'9700','Mater','BEL'),(2811,'9700','Melden','BEL'),(2812,'9700','Mullem','BEL'),(2813,'9700','Nederename','BEL'),(2814,'9700','Oudenaarde','BEL'),(2815,'9700','Volkegem','BEL'),(2816,'9700','Welden','BEL'),(2817,'9750','Huise','BEL'),(2818,'9750','Ouwegem','BEL'),(2819,'9750','Zingem','BEL'),(2820,'9770','Kruishoutem','BEL'),(2821,'9771','Nokere','BEL'),(2822,'9772','Wannegem-Lede','BEL'),(2823,'9790','Elsegem','BEL'),(2824,'9790','Moregem','BEL'),(2825,'9790','Ooike (Wortegem-Petegem)','BEL'),(2826,'9790','Petegem-aan-de-Schelde','BEL'),(2827,'9790','Wortegem','BEL'),(2828,'9790','Wortegem-Petegem','BEL'),(2829,'9800','Astene','BEL'),(2830,'9800','Bachte-Maria-Leerne','BEL'),(2831,'9800','Deinze','BEL'),(2832,'9800','Gottem','BEL'),(2833,'9800','Grammene','BEL'),(2834,'9800','Meigem','BEL'),(2835,'9800','Petegem-aan-de-Leie','BEL'),(2836,'9800','Sint-Martens-Leerne','BEL'),(2837,'9800','Vinkt','BEL'),(2838,'9800','Wontergem','BEL'),(2839,'9800','Zeveren','BEL'),(2840,'9810','Eke','BEL'),(2841,'9810','Nazareth','BEL'),(2842,'9820','Bottelare','BEL'),(2843,'9820','Lemberge','BEL'),(2844,'9820','Melsen','BEL'),(2845,'9820','Merelbeke','BEL'),(2846,'9820','Munte','BEL'),(2847,'9820','Schelderode','BEL'),(2848,'9830','Sint-Martens-Latem','BEL'),(2849,'9831','Deurle','BEL'),(2850,'9840','De Pinte','BEL'),(2851,'9840','Zevergem','BEL'),(2852,'9850','Hansbeke','BEL'),(2853,'9850','Landegem','BEL'),(2854,'9850','Merendree','BEL'),(2855,'9850','Nevele','BEL'),(2856,'9850','Poesele','BEL'),(2857,'9850','Vosselare','BEL'),(2858,'9860','Balegem','BEL'),(2859,'9860','Gijzenzele','BEL'),(2860,'9860','Landskouter','BEL'),(2861,'9860','Moortsele','BEL'),(2862,'9860','Oosterzele','BEL'),(2863,'9860','Scheldewindeke','BEL'),(2864,'9870','Machelen (O.-Vl.)','BEL'),(2865,'9870','Olsene','BEL'),(2866,'9870','Zulte','BEL'),(2867,'9880','Aalter','BEL'),(2868,'9880','Lotenhulle','BEL'),(2869,'9880','Poeke','BEL'),(2870,'9881','Bellem','BEL'),(2871,'9890','Asper','BEL'),(2872,'9890','Baaigem','BEL'),(2873,'9890','Dikkelvenne','BEL'),(2874,'9890','Gavere','BEL'),(2875,'9890','Semmerzake','BEL'),(2876,'9890','Vurste','BEL'),(2877,'9900','Eeklo','BEL'),(2878,'9910','Knesselare','BEL'),(2879,'9910','Ursel','BEL'),(2880,'9920','Lovendegem','BEL'),(2881,'9921','Vinderhoute','BEL'),(2882,'9930','Zomergem','BEL'),(2883,'9931','Oostwinkel','BEL'),(2884,'9932','Ronsele','BEL'),(2885,'9940','Ertvelde','BEL'),(2886,'9940','Evergem','BEL'),(2887,'9940','Kluizen','BEL'),(2888,'9940','Sleidinge','BEL'),(2889,'9950','Waarschoot','BEL'),(2890,'9960','Assenede','BEL'),(2891,'9961','Boekhoute','BEL'),(2892,'9968','Bassevelde','BEL'),(2893,'9968','Oosteeklo','BEL'),(2894,'9970','Kaprijke','BEL'),(2895,'9971','Lembeke','BEL'),(2896,'9980','Sint-Laureins','BEL'),(2897,'9981','Sint-Margriete','BEL'),(2898,'9982','Sint-Jan-in-Eremo','BEL'),(2899,'9988','Waterland-Oudeman','BEL'),(2900,'9988','Watervliet','BEL'),(2901,'9990','Maldegem','BEL'),(2902,'9991','Adegem','BEL'),(2903,'9992','Middelburg','BEL');
/*!40000 ALTER TABLE `location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `person_contact`
--

DROP TABLE IF EXISTS `person_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `person_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `engineering_office_id` int(11) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `gsm` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_engineering_office_idx` (`engineering_office_id`),
  KEY `fk_company_idx` (`company_id`) USING BTREE,
  CONSTRAINT `fk_company` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_engineering_office` FOREIGN KEY (`engineering_office_id`) REFERENCES `engineering_office` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=178 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `person_contact`
--

LOCK TABLES `person_contact` WRITE;
/*!40000 ALTER TABLE `person_contact` DISABLE KEYS */;
INSERT INTO `person_contact` VALUES (113,408,NULL,'Georges','Bertrand','081/43 26 11','0479/90 25 29','gbertrand@vincotte.be','EN'),(114,408,NULL,'Zammataro','P. ','','0475/93 75 72','pzammataro@vincotte.be','FR'),(115,409,NULL,'Luijten','Diederick ','','','','FR'),(116,NULL,2,'Bisschops','P-F ','','','','FR'),(117,423,NULL,'Signorato','Frédéric ','','0477/92 53 27','signoratofrederic@skynet.be','FR'),(118,426,NULL,'Beaujean','Olivier ','','','sprl.obeaujean2@belgacom.be','FR'),(119,427,NULL,'Deroanne (Administrateur délégué)','Patrick ','04/239 96 10','','Patrick.deroanne@deroanne.be','FR'),(120,NULL,6,'Turpin (Architecte)','Aline ','04/366 14 02','0473/94 33 19','aline.turpin@bagreisch.be','FR'),(122,NULL,7,'Berger (Com/admin/financier)','Vincent ','04/368 50 60','','vbe@pierreberger.com','FR'),(123,NULL,10,'Dedry (Industrial Pharmacist)','Claude ','','0476/23 93 13','c.dedry@cdml.be','FR'),(124,NULL,10,'Humblet (Consultant - Project management)','Sandra ','','0484/26 93 43','s.humblet@cdml.be','FR'),(125,442,NULL,'Ovart','Jean-Pierre ','04/366 76 16 (bip 345)','','jean-pierre.ovart@cofelyservices-gdfsuez.be','FR'),(126,442,NULL,'Dehan','Joël ','04/366 80 22','0474/99 93 70','joel.dehan@cofelyservices-gdfsuez.be','FR'),(127,442,NULL,'Thiry (Elec - Fluide med)','Jean-Louis ','04/366 70 60 (bip 762)','','jean-louis.thiry@cofelyservices-gdfsuez.be','FR'),(128,442,NULL,'Paroutis (HVAC)','Christos ','04/366 80 21','','christos.paroutis@cofelyservices-gdfsuez.be','FR'),(129,442,NULL,'De Meyer (ventilation-chauffage)','Didier ','04366 76 17 (bip 766)','','didier.demeyer@cofelyservices-gdfsuez.be','FR'),(130,442,NULL,'fisse','Guillaume ','','','guillaume.fisse@cofelyservices-gdfsuez.be','FR'),(131,442,NULL,'Hansenne','Grégory ','04/366 79 68','0479/97 68 68','gregory.hansenne@cofelyservices-gdfsuez.be','FR'),(132,442,NULL,'Warginaire','Pierre ','04/367 96 93','','pierre.warginaire@cofelyservices-gdfsuez.be','FR'),(133,443,NULL,'De Angelis','Angelo ','','0495/21 88 50','adeangelis@collignon.eiffage.be','FR'),(134,444,NULL,'Collignon','Marcel ','','','','FR'),(135,447,NULL,'Gilot','Pierre ','','','','FR'),(136,449,NULL,'Danneels','Dominique ','','0475/82 24 51','','FR'),(137,449,NULL,'Fillee','Patrick ','081/21 27 02','','patrick.fillee@sa-danneels.be','FR'),(138,454,NULL,'Gaspard','Jean-Yves ','','0497/47 54 05','','FR'),(139,456,NULL,'Diederickx','Maxime ','','0477/91 16 68','maxime@diederickx.be','FR'),(140,461,NULL,'BAEYENS','Sébastien ','','','','FR'),(141,NULL,13,'Berghmans','S. ','','0471/07 10 38','sberghmans@scinnamic.be','FR'),(142,465,NULL,'Laermans','Jérôme ','','0476/79 11 53','jerome.laermans@edmoliftsolution.com','FR'),(143,470,NULL,'Driessen','Dirk ','','0475/95 37 45','dirk.driessen@essec.be','FR'),(144,478,NULL,'Ledonne','Gaëtan ','','0475/92 09 95','','FR'),(145,486,NULL,'Dohet','Frédéric ','','0476/94 41 83','','FR'),(146,488,NULL,'Corman','Benoit ','','0495/30 87 58','b.corman@pinckaers.be','FR'),(147,491,NULL,'Wuidart','Sébastien ','','','','FR'),(148,497,NULL,'Puccio','Roberto ','','','Roberto.Puccio@KONE.com','FR'),(149,497,NULL,'Vannitsem','Thierry ','','0477/37 17 44','Thierry.VANNITSEM@KONE.com','FR'),(150,497,NULL,'Longrée','Michel ','','0477/35 86 81','Michel.LONGREE@KONE.com','FR'),(151,497,NULL,'Ferire','Michel ','','','michel.ferire@kone.com','FR'),(152,499,NULL,'Lamaire','Marc ','','0495/16 41 50','marc@lamelec.be','FR'),(153,502,NULL,'Lecry','Michaël ','085/51 37 72','0476/92 46 46','lm@lmsprl.be','FR'),(154,508,NULL,'Meyer','Louis ','','0497/42 52 26','','FR'),(155,NULL,14,'Lepage','Marc ','','0476/89 30 84','marc.lepage@matesgie.eu','FR'),(156,524,NULL,'Lejeune','Pactrice ','','0496/52.25.20','patrice@pigment-graphic.be','FR'),(157,528,NULL,'Jadot','Bernard ','04/246 92 92','','bernardjadot@polytherm.be','FR'),(158,533,NULL,'Vanderheyden','Alain ','04/364 02 39','','avd@rexel.be','FR'),(159,533,NULL,'Demarteau (Technico-commercial)','Alain ','04/364 02 30','0476/96 66 29','ademarteau@rexel.be','FR'),(160,533,NULL,'D\'Annolfo','','04/364 02 42','','MDA@rexel.be','FR'),(161,534,NULL,'Ramaekers','Benoit ','','0479/68 57 44','benoit.ramaekers@isl.be','FR'),(162,536,NULL,'Mardesson','Frank ','081/26 50 26','','frank.mardesson@be.schindler.com','FR'),(163,536,NULL,'Henquet','Jean-François ','081/26 50 18','0475/60 36 66','jean-francois_henquet@be.schindler.com','FR'),(164,536,NULL,'Grandile','Vincent ','081/26 50 25','0496/59 74 73','vincent.grandile@schindler.com','FR'),(165,536,NULL,'Fabris','Franco ','081/26 50 32','0475/47 52 87','franco.fabris@be.schindler.com','FR'),(166,536,NULL,'Dandoy','Pierre ','081/26 50 20','','pierre_dandoy@be.schindler.com','FR'),(167,536,NULL,'Dagneau','Luc ','081/26 50 22','0477/32 28 38','Luc_dagneau@schindler.com','FR'),(168,537,NULL,'Schyns','Jean-Claude ','','','','FR'),(169,540,NULL,'Lombardo (Project manager)','Michèle ','','0473/55 60 43','michele.lombardo@siemens.be','FR'),(170,543,NULL,'Meira - Responsable tech - Secteur Pharma','François ','','','','FR'),(171,544,NULL,'Lorenzen','Danny ','','','','FR'),(172,544,NULL,'Humartus','Rainer ','','','','FR'),(173,549,NULL,'Thomassen (Gérant associé)','Joseph ','04/286 92 33','','joseph.thomassen@thomassen-et-fils.be','FR'),(174,550,NULL,'Wilhelmi','Rudy ','','','','FR'),(175,551,NULL,'Degreef','Marc ','','','M.degreef@trilux.be','FR'),(176,553,NULL,'Piron','Jacques ','','','j.piron@eloytravaux.be','FR'),(177,NULL,17,'Ludovic','GERMIS ','','0479/81.28.53','Ludovic.GERMIS@dac-reco.be','FR');
/*!40000 ALTER TABLE `person_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `person_engineering`
--

DROP TABLE IF EXISTS `person_engineering`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `person_engineering` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engineering_office_id` int(11) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `gsm` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_engineering_office_idx` (`engineering_office_id`),
  CONSTRAINT `fk_engineering_office2` FOREIGN KEY (`engineering_office_id`) REFERENCES `engineering_office` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `person_engineering`
--

LOCK TABLES `person_engineering` WRITE;
/*!40000 ALTER TABLE `person_engineering` DISABLE KEYS */;
INSERT INTO `person_engineering` VALUES (1,1,2,'Abiuso','Luigi','+32498351226',NULL,'luigi_abiuso@hotmail.com','FR'),(2,NULL,17,NULL,'Dona',NULL,NULL,'donato.abiuso@gmail.com','FR');
/*!40000 ALTER TABLE `person_engineering` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `planning`
--

DROP TABLE IF EXISTS `planning`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `planning` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `percent_done` float DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `dependency` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_project3_idx` (`project_id`),
  KEY `fk_user3_idx` (`user_id`),
  CONSTRAINT `fk_project3` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_user3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `planning`
--

LOCK TABLES `planning` WRITE;
/*!40000 ALTER TABLE `planning` DISABLE KEYS */;
INSERT INTO `planning` VALUES (1,4,'test','2021-10-05','2021-11-25',58,'#8b2727',NULL,13,'2021-10-03 18:57:15'),(2,4,'test 2','2021-11-12','2021-12-13',0,'#35a790',1,13,'2021-10-03 18:57:15'),(3,4,'test 3','2021-10-10','2021-11-27',81,'#7b8038',NULL,13,'2021-10-03 19:10:45'),(4,4,'Test4','2021-09-28','2021-10-26',45,'#000000',NULL,12,'2021-10-03 17:34:40'),(5,4,'Test 5','2021-09-15','2021-11-26',72,'#2490ef',NULL,12,'2021-09-29 14:27:28'),(6,4,'t','2021-10-02','2021-10-22',75,'#2490ef',NULL,12,'2021-09-29 23:05:27');
/*!40000 ALTER TABLE `planning` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `planning_history`
--

DROP TABLE IF EXISTS `planning_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `planning_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `planning_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `comment` longtext,
  PRIMARY KEY (`id`),
  KEY `fk_project_idx` (`project_id`),
  KEY `fk_user_idx` (`user_id`),
  KEY `fk_planning10_idx` (`planning_id`),
  CONSTRAINT `fk_planning10` FOREIGN KEY (`planning_id`) REFERENCES `planning` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_project10` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_user10` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `planning_history`
--

LOCK TABLES `planning_history` WRITE;
/*!40000 ALTER TABLE `planning_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `planning_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reference` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `work_start_date` date DEFAULT NULL,
  `work_end_date` date DEFAULT NULL,
  `start_situation` tinyint(1) DEFAULT NULL,
  `end_situation` tinyint(1) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pk_site_idx` (`site_id`),
  CONSTRAINT `pk_site` FOREIGN KEY (`site_id`) REFERENCES `site` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project`
--

LOCK TABLES `project` WRITE;
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
INSERT INTO `project` VALUES (3,'123','ESSAI',2021,1,'test','2021-06-18','2021-06-19',0,0,1,NULL,NULL),(4,'TEST','TEST',2021,1,'test','2021-09-10','2021-09-11',0,0,0,NULL,NULL);
/*!40000 ALTER TABLE `project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_access`
--

DROP TABLE IF EXISTS `project_access`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_access` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `crud` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_idx` (`user_id`),
  KEY `fk_project4_idx` (`project_id`),
  CONSTRAINT `fk_project4` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_access`
--

LOCK TABLES `project_access` WRITE;
/*!40000 ALTER TABLE `project_access` DISABLE KEYS */;
INSERT INTO `project_access` VALUES (1,4,12,'CRUD');
/*!40000 ALTER TABLE `project_access` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_comment`
--

DROP TABLE IF EXISTS `project_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `comment` longtext,
  PRIMARY KEY (`id`),
  KEY `fk_project_idx` (`project_id`),
  KEY `fk_user_idx` (`user_id`),
  CONSTRAINT `fk_project7` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_user2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_comment`
--

LOCK TABLES `project_comment` WRITE;
/*!40000 ALTER TABLE `project_comment` DISABLE KEYS */;
INSERT INTO `project_comment` VALUES (1,4,12,'2021-09-29 14:57:12','test 2'),(2,4,12,'2021-10-03 18:47:08','Test 3');
/*!40000 ALTER TABLE `project_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_company`
--

DROP TABLE IF EXISTS `project_company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_company` (
  `project_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  PRIMARY KEY (`project_id`,`company_id`),
  KEY `fk_project6_idx` (`project_id`),
  KEY `fk_company3_idx` (`company_id`),
  CONSTRAINT `fk_company3` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_project6` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_company`
--

LOCK TABLES `project_company` WRITE;
/*!40000 ALTER TABLE `project_company` DISABLE KEYS */;
INSERT INTO `project_company` VALUES (4,408);
/*!40000 ALTER TABLE `project_company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_engineering`
--

DROP TABLE IF EXISTS `project_engineering`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_engineering` (
  `project_id` int(11) NOT NULL,
  `engineering_id` int(11) NOT NULL,
  PRIMARY KEY (`project_id`,`engineering_id`),
  KEY `fk_engineering_idx` (`engineering_id`),
  KEY `fk_project7_idx` (`project_id`),
  CONSTRAINT `fk_engineering` FOREIGN KEY (`engineering_id`) REFERENCES `engineering_office` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_project9` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_engineering`
--

LOCK TABLES `project_engineering` WRITE;
/*!40000 ALTER TABLE `project_engineering` DISABLE KEYS */;
INSERT INTO `project_engineering` VALUES (4,2);
/*!40000 ALTER TABLE `project_engineering` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_person`
--

DROP TABLE IF EXISTS `project_person`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_person` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `person_engineering_id` int(11) DEFAULT NULL,
  `input` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_project8_idx` (`project_id`),
  KEY `fk_employee3_idx` (`employee_id`),
  KEY `fk_person_engineering_idx` (`person_engineering_id`),
  CONSTRAINT `fk_employee3` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_person_engineering` FOREIGN KEY (`person_engineering_id`) REFERENCES `person_engineering` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_project8` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_person`
--

LOCK TABLES `project_person` WRITE;
/*!40000 ALTER TABLE `project_person` DISABLE KEYS */;
INSERT INTO `project_person` VALUES (59,4,4,NULL,'architect'),(60,4,NULL,NULL,'secondArchitect'),(61,4,8,NULL,'supervisor'),(62,4,NULL,1,'externalArchitectureOffice');
/*!40000 ALTER TABLE `project_person` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_work`
--

DROP TABLE IF EXISTS `project_work`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `work_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci,
  `provisional_reception_date` date DEFAULT NULL,
  `final_delivery_date` date DEFAULT NULL,
  `vincotte_reception_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_project5_idx` (`project_id`),
  KEY `fk_work_idx` (`work_id`),
  KEY `fk_company2_idx` (`company_id`),
  CONSTRAINT `fk_company2` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_project5` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_work` FOREIGN KEY (`work_id`) REFERENCES `work` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_work`
--

LOCK TABLES `project_work` WRITE;
/*!40000 ALTER TABLE `project_work` DISABLE KEYS */;
INSERT INTO `project_work` VALUES (1,4,1,408,'test','2021-09-29','2021-09-30','2021-10-01');
/*!40000 ALTER TABLE `project_work` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES (0,'N/A'),(1,'Surveillant de chantier'),(2,'Architecte'),(3,'Coordinateur BIM'),(4,'Architecte d\'intérieur'),(8,'Ingénieur HVAC'),(9,'Ingénieur Électricité'),(10,'Dessinateur'),(11,'Coordinateur procédures'),(12,'Ingénieur Electricité faible'),(13,'Ingénieur Electricité fort'),(14,'Ingénieur Fluides médicaux'),(15,'Ingénieur Sanitaires'),(16,'Ingénieur'),(17,'Coordinateur sécurité');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site`
--

DROP TABLE IF EXISTS `site`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site`
--

LOCK TABLES `site` WRITE;
/*!40000 ALTER TABLE `site` DISABLE KEYS */;
INSERT INTO `site` VALUES (1,'CHU Sart Tilman'),(2,'CHU Brull'),(3,'CHU ND des Bruyères'),(4,'CHU OA'),(5,'CHU CNRF'),(6,'CHU Chaudfontaine'),(7,'CHU CLC'),(8,'CHU Aywaille'),(9,'CHU Crêche Valensart'),(10,'Multi-sites');
/*!40000 ALTER TABLE `site` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roles` longtext CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `google_oauth` tinyint(1) DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (12,'[\"ROLE_EXTERNAL\"]','donato.abiuso@gmail.com','Donato','$2y$13$NVpCj/91Jv6KOW.k7ez5suZzFFyu4zvtEPxaH5OW88zPbbAgpVOKi',NULL,'FR',NULL,NULL),(13,'[\"ROLE_ADMIN\"]','luigi_abiuso@hotmail.com','Luigi','$2y$13$NVpCj/91Jv6KOW.k7ez5suZzFFyu4zvtEPxaH5OW88zPbbAgpVOKi',NULL,'FR',NULL,NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_password_security`
--

DROP TABLE IF EXISTS `user_password_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_password_security` (
  `nonce` varchar(255) NOT NULL,
  `expiredAt` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`nonce`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_password_security`
--

LOCK TABLES `user_password_security` WRITE;
/*!40000 ALTER TABLE `user_password_security` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_password_security` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_signin_security`
--

DROP TABLE IF EXISTS `user_signin_security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_signin_security` (
  `nonce` varchar(255) NOT NULL,
  `expiredAt` datetime DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  PRIMARY KEY (`nonce`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_signin_security`
--

LOCK TABLES `user_signin_security` WRITE;
/*!40000 ALTER TABLE `user_signin_security` DISABLE KEYS */;
INSERT INTO `user_signin_security` VALUES ('60d5ba92e0f6a','2021-07-02 13:14:26',5,5),('60d5bac4030a1','2021-06-26 13:15:16',5,5),('60d5bad3363bc','2021-06-26 13:15:31',5,5),('60d5bada852ce','2021-06-26 13:15:38',5,5),('60d5bb5fe657a','2021-06-26 13:17:51',5,5),('60d5bb77d7869','2021-06-26 13:18:15',5,5),('60d5bbd477987','2021-06-26 13:19:48',5,5),('60d5bc4642233','2021-06-26 13:21:42',5,5),('60d5bcef44e20','2021-06-26 13:24:31',5,5);
/*!40000 ALTER TABLE `user_signin_security` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `work`
--

DROP TABLE IF EXISTS `work`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `work`
--

LOCK TABLES `work` WRITE;
/*!40000 ALTER TABLE `work` DISABLE KEYS */;
INSERT INTO `work` VALUES (1,'Electricité'),(2,'Chauffage'),(3,'Ascenseurs'),(4,'Ascom'),(5,'Auteur de projet'),(6,'Bureau d\'architecture'),(7,'Bureau de géomètres-experts'),(8,'Bureau d\'études'),(9,'Chapes'),(10,'Construction'),(11,'Démolition'),(12,'Désamiantage'),(13,'Divers'),(14,'Electricité'),(15,'Electricité - HVAC'),(16,'Electricité - Parachèvement - Peintures - Sanitaires'),(17,'Electricité - Sanitaires'),(18,'Electricité Courant faible'),(19,'Electricité Courant fort'),(20,'Essais sismique'),(22,'Fluides médicaux'),(23,'Forage'),(24,'Fourniture bandeau'),(25,'Fourniture Electriques'),(27,'Gros-œuvre'),(28,'Gros-œuvre - Menuiserie Extérieure - Façade'),(29,'HVAC'),(30,'HVAC - Sanitaires'),(31,'HVAC - Sanitaires - Fluides médicaux'),(32,'Installation - Ascenseur-gaz'),(33,'Menuiserie'),(34,'Menuiserie - Châssis'),(35,'Menuiserie - Parachèvement'),(36,'Mobilier'),(37,'Mobilier intégré'),(38,'Parachèvement'),(39,'Parking'),(40,'Peintures'),(41,'Peintures - Revêtement de sol'),(42,'Revelé topographique'),(43,'Revêtement de sol'),(44,'Sanitaires'),(45,'Sanitaires - Fluides médicaux'),(46,'Téléphonie'),(47,'Voirie'),(48,'Coordination sécurité-santé');
/*!40000 ALTER TABLE `work` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-03 19:14:34
