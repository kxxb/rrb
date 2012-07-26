CREATE DATABASE  IF NOT EXISTS `rrb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `rrb`;
-- MySQL dump 10.13  Distrib 5.5.24, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: rrb
-- ------------------------------------------------------
-- Server version	5.5.24-0ubuntu0.12.04.1

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
-- Table structure for table `rrb_flats`
--

DROP TABLE IF EXISTS `rrb_flats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rrb_flats` (
  `id` int(11) NOT NULL,
  `last_user_id` int(11) DEFAULT NULL,
  `date_rec` datetime DEFAULT NULL,
  `section` varchar(45) DEFAULT NULL,
  `floor_numb` float DEFAULT NULL,
  `quant_rooms_in_flat` float DEFAULT NULL,
  `total_flat_area` float DEFAULT NULL,
  `live_area` float DEFAULT NULL,
  `kitchen_area` float DEFAULT NULL,
  `balcony_area` float DEFAULT NULL,
  `price_whoole_payment` float DEFAULT NULL,
  `price_lease_payment` float DEFAULT NULL COMMENT 'общая стоимость квартиры при рассрочке',
  `flat_descripton` text,
  `saler_name` text,
  `saler_contact` varchar(450) DEFAULT NULL,
  `link_to_source_inf` varchar(45) DEFAULT NULL,
  `collect_information_dt` date DEFAULT NULL,
  `report_on_phase_dt` date DEFAULT NULL,
  `rrb_housing_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_rrb_flats_1` (`rrb_housing_id`),
  CONSTRAINT `fk_rrb_flats_1` FOREIGN KEY (`rrb_housing_id`) REFERENCES `rrb_housing` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rrb_flats`
--

LOCK TABLES `rrb_flats` WRITE;
/*!40000 ALTER TABLE `rrb_flats` DISABLE KEYS */;
/*!40000 ALTER TABLE `rrb_flats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rrb_ipoteka_banks`
--

DROP TABLE IF EXISTS `rrb_ipoteka_banks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rrb_ipoteka_banks` (
  `id` int(11) NOT NULL,
  `last_user_id` int(11) DEFAULT NULL,
  `date_rec` datetime DEFAULT NULL,
  `bank_id` int(11) DEFAULT NULL,
  `rrb_housing_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_rrb_ipoteka_banks_1` (`rrb_housing_id`),
  CONSTRAINT `fk_rrb_ipoteka_banks_1` FOREIGN KEY (`rrb_housing_id`) REFERENCES `rrb_housing` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rrb_ipoteka_banks`
--

LOCK TABLES `rrb_ipoteka_banks` WRITE;
/*!40000 ALTER TABLE `rrb_ipoteka_banks` DISABLE KEYS */;
/*!40000 ALTER TABLE `rrb_ipoteka_banks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `rrb_v_housing_specification`
--

DROP TABLE IF EXISTS `rrb_v_housing_specification`;
/*!50001 DROP VIEW IF EXISTS `rrb_v_housing_specification`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `rrb_v_housing_specification` (
  `id` int(11),
  `number_of_sections` int(11),
  `type_of_building` int(11),
  `total_land_area` float,
  `total_floor_area` float,
  `land_area_build` float,
  `bearing_material_tech` int(11),
  `wall_material` int(11),
  `proj_doc_type` int(11),
  `serial_number` varchar(45),
  `min_floors` int(11),
  `max_floors` int(11),
  `floors_type_id` int(11),
  `consumer_class_id` int(11),
  `economy_class_house_id` int(11),
  `ceiling_height` float,
  `finishing_flats_id` int(11),
  `finishing_level_id` int(11),
  `common_area_finishing_id` int(11),
  `glazed_loggia_id` int(11),
  `parking_type_id` int(11),
  `num_of_parking_place` float,
  `num_of_Elevator` float,
  `estimated_cost_construction` float,
  `territory_fencing_id` int(11),
  `security_id` int(11),
  `last_user_id` int(11),
  `date_rec` datetime,
  `rrb_housing_id` int(11),
  `material_name` text,
  `wall_material_name` text,
  `proj_doc_name` text,
  `floor_type_name` text,
  `consumer_cl_name` text,
  `economy_cl_name` text,
  `finish_fl_name` text,
  `finish_level_name` text,
  `finish_c_area_name` text,
  `glazed_log_name` text,
  `parking_name` text,
  `fencing_name` text,
  `security_name` text
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `rrb_housing_specification`
--

DROP TABLE IF EXISTS `rrb_housing_specification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rrb_housing_specification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number_of_sections` int(11) DEFAULT NULL COMMENT 'Новое поле, отражающее кол-во подъездов в здании',
  `type_of_building` int(11) DEFAULT NULL,
  `total_land_area` float DEFAULT NULL COMMENT 'Площадь исходного участка, предоставленного на аукционе для комплексного освоения в целях жилищного строительства (включая территории общего пользования), либо указанного в решении о развитии застроенной территории. В случае комплесного освоения указывается площадь участка под весь комплекс, в случае точечной застройки - площадь участка под объектом',
  `total_floor_area` float DEFAULT NULL COMMENT 'Общая площадь всех квартир проекта',
  `land_area_build` float DEFAULT NULL COMMENT 'Площадь земельного участка под рассматриваемым объектом жилищного строительства',
  `bearing_material_tech` int(11) DEFAULT NULL COMMENT 'технология и материал несущих конструкций',
  `wall_material` int(11) DEFAULT NULL COMMENT 'материал наружных стен\n',
  `proj_doc_type` int(11) DEFAULT NULL COMMENT 'тип проектной документации',
  `serial_number` varchar(45) DEFAULT NULL,
  `min_floors` int(11) DEFAULT NULL,
  `max_floors` int(11) DEFAULT NULL,
  `floors_type_id` int(11) DEFAULT NULL,
  `consumer_class_id` int(11) DEFAULT NULL,
  `economy_class_house_id` int(11) DEFAULT NULL COMMENT 'дом экономического класса (на основании приказа минрегиона россии от  28.06.10 № 303)',
  `ceiling_height` float DEFAULT NULL,
  `finishing_flats_id` int(11) DEFAULT NULL,
  `finishing_level_id` int(11) DEFAULT NULL,
  `common_area_finishing_id` int(11) DEFAULT NULL COMMENT 'уровень отделки общих помещений\n',
  `glazed_loggia_id` int(11) DEFAULT NULL,
  `parking_type_id` int(11) DEFAULT NULL,
  `num_of_parking_place` float DEFAULT NULL COMMENT 'Указывается число заявленных машино-мест',
  `num_of_Elevator` float DEFAULT NULL COMMENT 'Указывается сумма количества всех лифтов в объекте.\n',
  `estimated_cost_construction` float DEFAULT NULL COMMENT 'сметная стоимость строительства объекта согласно утвержденной проектной документации',
  `territory_fencing_id` int(11) DEFAULT NULL COMMENT 'ограждение территории',
  `security_id` int(11) DEFAULT NULL,
  `last_user_id` int(11) DEFAULT NULL,
  `date_rec` datetime DEFAULT NULL,
  `rrb_housing_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_rrb_housing_specification_1` (`rrb_housing_id`),
  CONSTRAINT `fk_rrb_housing_specification_1` FOREIGN KEY (`rrb_housing_id`) REFERENCES `rrb_housing` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rrb_housing_specification`
--

LOCK TABLES `rrb_housing_specification` WRITE;
/*!40000 ALTER TABLE `rrb_housing_specification` DISABLE KEYS */;
INSERT INTO `rrb_housing_specification` VALUES (1,1,1,2500,2400,1,1,5,6,'12233',23,25,7,11,15,24,17,20,21,23,26,500,15,1122,27,29,1,'0000-00-00 00:00:00',1),(2,1,1,2500,2400,1,1,5,6,'12233',23,25,7,11,15,24,17,20,21,23,25,3,2,222,28,30,1,'0000-00-00 00:00:00',2);
/*!40000 ALTER TABLE `rrb_housing_specification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rrb_housing`
--

DROP TABLE IF EXISTS `rrb_housing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rrb_housing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `corpse_number` varchar(45) NOT NULL,
  `apartment_coplex_id` int(11) DEFAULT NULL,
  `last_user_id` int(11) NOT NULL,
  `date_rec` datetime NOT NULL,
  PRIMARY KEY (`id`,`corpse_number`,`name`),
  KEY `fk_rrb_housing_1` (`apartment_coplex_id`),
  CONSTRAINT `fk_rrb_housing_1` FOREIGN KEY (`apartment_coplex_id`) REFERENCES `rrb_apartment_comlex` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='Описание корпусов жилья';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rrb_housing`
--

LOCK TABLES `rrb_housing` WRITE;
/*!40000 ALTER TABLE `rrb_housing` DISABLE KEYS */;
INSERT INTO `rrb_housing` VALUES (1,'Коррпус Восток','1',1,1,'0000-00-00 00:00:00'),(2,'Корпус Запад','1',1,1,'0000-00-00 00:00:00');
/*!40000 ALTER TABLE `rrb_housing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rrb_sys_menu`
--

DROP TABLE IF EXISTS `rrb_sys_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rrb_sys_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `item_name` varchar(45) DEFAULT NULL,
  `item_url` varchar(500) DEFAULT NULL,
  `last_user_id` int(11) DEFAULT NULL,
  `js_function_name` varchar(250) DEFAULT NULL,
  `rec_date` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rrb_sys_menu`
--

LOCK TABLES `rrb_sys_menu` WRITE;
/*!40000 ALTER TABLE `rrb_sys_menu` DISABLE KEYS */;
INSERT INTO `rrb_sys_menu` VALUES (1,1,1,'Задачи','#',1,NULL,'2011-07-12'),(2,1,1,'Справочники','../app.handbooks/',1,'onHandbooksClick','2011-07-12'),(3,1,1,'Комплексы','../app.housing/',1,'onHousingClick','2011-06-22'),(4,1,1,'ЖК - новые','../app.komplex/',1,'onKoplexClick','2012-07-17');
/*!40000 ALTER TABLE `rrb_sys_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rrb_housing_address`
--

DROP TABLE IF EXISTS `rrb_housing_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rrb_housing_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rrb_housing_id` int(11) NOT NULL,
  `kladr_code` varchar(250) NOT NULL,
  `ot_mkad` int(11) DEFAULT NULL COMMENT 'Расстояние от МКАД',
  `longitude_yandex` varchar(45) DEFAULT NULL,
  `latitude_yandex` varchar(45) DEFAULT NULL,
  `cadastral_number` varchar(45) DEFAULT NULL,
  `building_address` varchar(250) DEFAULT NULL COMMENT 'Адрес объекта заполняется полностью, как указано в первоисточнике',
  `house_number` varchar(45) DEFAULT NULL,
  `house_letter` varchar(45) DEFAULT NULL,
  `house_corps` varchar(45) DEFAULT NULL,
  `house_building` varchar(45) DEFAULT NULL,
  `house_ownership` varchar(45) DEFAULT NULL,
  `state_id` int(11) NOT NULL COMMENT 'Государство',
  `subject_of_state_id` int(11) NOT NULL COMMENT 'Субъект государства',
  `street_type_id` int(11) NOT NULL,
  `dirrection_id` int(11) NOT NULL,
  `last_user_id` int(11) DEFAULT NULL,
  `date_rec` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_rrb_housing_address_1` (`rrb_housing_id`),
  KEY `fk_rrb_housing_address_2` (`kladr_code`),
  KEY `housing_longitude_inx` (`longitude_yandex`),
  KEY `housing_latitude_inx` (`latitude_yandex`),
  CONSTRAINT `fk_rrb_housing_address_1` FOREIGN KEY (`rrb_housing_id`) REFERENCES `rrb_housing` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_rrb_housing_address_2` FOREIGN KEY (`kladr_code`) REFERENCES `KLADR_STREET` (`CODE`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rrb_housing_address`
--

LOCK TABLES `rrb_housing_address` WRITE;
/*!40000 ALTER TABLE `rrb_housing_address` DISABLE KEYS */;
/*!40000 ALTER TABLE `rrb_housing_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `KLADR_STREET`
--

DROP TABLE IF EXISTS `KLADR_STREET`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `KLADR_STREET` (
  `CODE` varchar(250) NOT NULL,
  PRIMARY KEY (`CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `KLADR_STREET`
--

LOCK TABLES `KLADR_STREET` WRITE;
/*!40000 ALTER TABLE `KLADR_STREET` DISABLE KEYS */;
/*!40000 ALTER TABLE `KLADR_STREET` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rrb_housing_commercial`
--

DROP TABLE IF EXISTS `rrb_housing_commercial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rrb_housing_commercial` (
  `id` int(11) NOT NULL,
  `last_user_id` int(11) DEFAULT NULL,
  `date_rec` datetime DEFAULT NULL,
  `comercial_available` int(11) DEFAULT NULL COMMENT 'наличие и место расположения коммерческих помещений\n',
  `commercial_area` float DEFAULT NULL COMMENT 'площадь коммерческих помещений',
  `rrb_housing_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_rrb_housing_comercial_1` (`rrb_housing_id`),
  KEY `fk_rrb_housing_comercial_2` (`comercial_available`),
  CONSTRAINT `fk_rrb_housing_comercial_1` FOREIGN KEY (`rrb_housing_id`) REFERENCES `rrb_housing` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_rrb_housing_comercial_2` FOREIGN KEY (`comercial_available`) REFERENCES `rrb_s_handbooks` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rrb_housing_commercial`
--

LOCK TABLES `rrb_housing_commercial` WRITE;
/*!40000 ALTER TABLE `rrb_housing_commercial` DISABLE KEYS */;
/*!40000 ALTER TABLE `rrb_housing_commercial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rrb_housing_finance`
--

DROP TABLE IF EXISTS `rrb_housing_finance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rrb_housing_finance` (
  `id` int(11) NOT NULL,
  `last_user_id` int(11) DEFAULT NULL,
  `date_rec` datetime DEFAULT NULL,
  `contract_type_id` int(11) DEFAULT NULL COMMENT 'тип заключаемого договора с покупателем',
  `leasing_id` int(11) DEFAULT NULL COMMENT 'наличие рассрочки',
  `leasing_conditions` varchar(450) DEFAULT NULL COMMENT 'условия рассрочки',
  `ipoteka_id` int(11) DEFAULT NULL,
  `ipoteka_conditions` varchar(450) DEFAULT NULL,
  `min_price` float DEFAULT NULL,
  `avg_unit_price` float DEFAULT NULL COMMENT 'Средняя удельная цена по объекту, руб./кв.м.',
  `max_price` float DEFAULT NULL COMMENT 'Макс. Цена (кв.м)',
  `avg_unit_price_1r` float DEFAULT NULL,
  `avg_unit_price_2r` float DEFAULT NULL,
  `avg_unit_price_3r` float DEFAULT NULL,
  `avg_unit_price_4r` float DEFAULT NULL,
  `avg_unit_price_5r` float DEFAULT NULL,
  `avg_unit_price_6r` float DEFAULT NULL,
  `avg_unit_price_nr` float DEFAULT NULL,
  `total_flats_sale` float DEFAULT NULL COMMENT 'Всего квартир в продаже (шт.)',
  `total_1r_flats_sale` float DEFAULT NULL,
  `total_2r_flats_sale` float DEFAULT NULL,
  `total_3r_flats_sale` float DEFAULT NULL,
  `total_4r_flats_sale` float DEFAULT NULL,
  `total_5r_flats_sale` float DEFAULT NULL,
  `total_6r_flats_sale` float DEFAULT NULL,
  `total_nr_flats_sale` float DEFAULT NULL,
  `koefficent` float DEFAULT NULL,
  `rates_sales_quarterly` float DEFAULT NULL COMMENT 'Оценка темпов продаж за квартал',
  `rates_sales_from_start` float DEFAULT NULL COMMENT 'Оценка темпов продаж с начала реализации',
  `avg_area_of_flat` float DEFAULT NULL,
  `tot_area_flat_in_offer` float DEFAULT NULL COMMENT 'Суммарная площадь квартир в предложении, кв. м',
  `total_whole_price_in_offer` float DEFAULT NULL COMMENT 'Суммарная полная цена квартир, руб.',
  `tot_area_1r_flat_offer` float DEFAULT NULL,
  `total_1r_whole_price_offer` float DEFAULT NULL,
  `tot_area_2r_flat_offer` float DEFAULT NULL,
  `total_2r_whole_price_offer` float DEFAULT NULL,
  `tot_area_3r_flat_offer` float DEFAULT NULL,
  `total_3r_whole_price_offer` float DEFAULT NULL,
  `tot_area_nr_flat_offer` float DEFAULT NULL,
  `total_nr_whole_price_offer` float DEFAULT NULL,
  `quotas_id` int(11) DEFAULT NULL,
  `update_category_id` int(11) DEFAULT NULL,
  `info_source` text,
  `collect_information_dt` date DEFAULT NULL COMMENT 'дата сбора информации',
  `report_on_phase_dt` date DEFAULT NULL COMMENT 'дата отчета по этапу',
  `impl_status_id` int(11) DEFAULT NULL COMMENT 'статус реализации',
  `input_in_db_dt` datetime DEFAULT NULL,
  `comment_txt` text COMMENT '	',
  `rrb_housing_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_rrb_housing_finance_1` (`rrb_housing_id`),
  CONSTRAINT `fk_rrb_housing_finance_1` FOREIGN KEY (`rrb_housing_id`) REFERENCES `rrb_housing` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rrb_housing_finance`
--

LOCK TABLES `rrb_housing_finance` WRITE;
/*!40000 ALTER TABLE `rrb_housing_finance` DISABLE KEYS */;
INSERT INTO `rrb_housing_finance` VALUES (1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test',1);
/*!40000 ALTER TABLE `rrb_housing_finance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rrb_users`
--

DROP TABLE IF EXISTS `rrb_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rrb_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `middle_name` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'отчество',
  `last_name` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'фамилия',
  `rrl_dep_id` int(11) DEFAULT NULL,
  `user_status` int(11) DEFAULT NULL COMMENT '1 - активный\n0- уволен',
  `user_photo` blob,
  `user_start_date` datetime DEFAULT NULL,
  `user_birthday` date DEFAULT NULL,
  `date_rec` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rrb_users`
--

LOCK TABLES `rrb_users` WRITE;
/*!40000 ALTER TABLE `rrb_users` DISABLE KEYS */;
INSERT INTO `rrb_users` VALUES (1,'admin','1000','admin2','Adminich','Rootenberg',NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `rrb_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rrb_handbooks_copy1`
--

DROP TABLE IF EXISTS `rrb_handbooks_copy1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rrb_handbooks_copy1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `handbook_name` varchar(250) NOT NULL,
  `last_user_id` int(11) NOT NULL,
  `date_rec` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rrb_handbooks_copy1`
--

LOCK TABLES `rrb_handbooks_copy1` WRITE;
/*!40000 ALTER TABLE `rrb_handbooks_copy1` DISABLE KEYS */;
/*!40000 ALTER TABLE `rrb_handbooks_copy1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rrb_s_handbooks`
--

DROP TABLE IF EXISTS `rrb_s_handbooks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rrb_s_handbooks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rrb_handbooks_id` int(11) NOT NULL,
  `hndb_value` text,
  `last_user_id` int(11) NOT NULL,
  `date_rec` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_rrb_s_hnbks_1` (`rrb_handbooks_id`),
  CONSTRAINT `fk_rrb_s_hnbks_1` FOREIGN KEY (`rrb_handbooks_id`) REFERENCES `rrb_handbooks` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rrb_s_handbooks`
--

LOCK TABLES `rrb_s_handbooks` WRITE;
/*!40000 ALTER TABLE `rrb_s_handbooks` DISABLE KEYS */;
INSERT INTO `rrb_s_handbooks` VALUES (1,1,'Брус',1,'2012-06-22 10:46:09'),(2,1,'Сталь',1,'2012-06-22 10:46:15'),(3,1,'Арматура',1,'2012-06-22 10:46:26'),(5,2,'Бетон',1,'2012-06-22 10:47:11'),(6,4,'Полная',1,'2012-06-22 10:47:50'),(7,5,'Нормальная',1,'2012-06-22 10:49:22'),(8,1,'Полимеры',1,'2012-06-22 10:46:38'),(9,1,'Кевлар',1,'2012-06-22 10:46:45'),(10,5,'Ненормальная<br>',1,'2012-06-22 10:49:29'),(11,6,'Класс 1',1,'2012-06-22 10:49:53'),(12,2,'Глина',1,'2012-06-22 10:47:20'),(13,4,'Неполная',1,'2012-06-22 10:47:56'),(14,6,'Класс 2',1,'2012-06-22 10:49:59'),(15,7,'<span style=\"font-family: arial, sans, sans-serif; font-size: 13px; white-space: pre-wrap; \">дом эконом класса 1</span>',1,'2012-06-22 10:50:45'),(16,7,'дом эконом класса 2',1,'2012-06-22 10:51:10'),(17,8,'Чистовая',1,'2012-06-22 10:51:53'),(18,8,'незаконченная',1,'2012-06-22 10:52:07'),(19,9,'Евроремонт',1,'2012-06-22 10:52:33'),(20,9,'Жамшутремонт',1,'2012-06-22 10:52:41'),(21,10,'Чистовая',1,'2012-06-22 10:53:12'),(22,10,'Черновая',1,'2012-06-22 10:53:18'),(23,11,'Стеклопакет',1,'2012-06-22 10:53:51'),(24,11,'Нет',1,'2012-06-22 10:53:56'),(25,12,'Наземный',1,'2012-06-22 10:54:19'),(26,12,'Подземный',1,'2012-06-22 10:54:26'),(27,13,'Забор и собаки',1,'2012-06-22 10:55:16'),(28,13,'Колючая проволока',1,'2012-06-22 10:55:31'),(29,14,'ЧОП \"Брюс Вилис\"',1,'2012-06-22 10:56:31'),(30,14,'ЧОП  \"Сталоне\"',1,'2012-06-22 10:56:40');
/*!40000 ALTER TABLE `rrb_s_handbooks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rrb_apartment_comlex`
--

DROP TABLE IF EXISTS `rrb_apartment_comlex`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rrb_apartment_comlex` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `complex_name` varchar(250) DEFAULT NULL,
  `last_user_id` int(11) DEFAULT NULL,
  `date_rec` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rrb_apartment_comlex`
--

LOCK TABLES `rrb_apartment_comlex` WRITE;
/*!40000 ALTER TABLE `rrb_apartment_comlex` DISABLE KEYS */;
INSERT INTO `rrb_apartment_comlex` VALUES (1,'ЖК Измайловский',1,'2012-06-22 00:00:00');
/*!40000 ALTER TABLE `rrb_apartment_comlex` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rrb_housing_flat_info`
--

DROP TABLE IF EXISTS `rrb_housing_flat_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rrb_housing_flat_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last_user_id` int(11) NOT NULL,
  `date_rec` datetime DEFAULT NULL,
  `total_area_all_flats` float DEFAULT NULL,
  `total_area_studio` float DEFAULT NULL,
  `total_area_1rooms` float DEFAULT NULL,
  `total_area_2rooms` float DEFAULT NULL,
  `total_area_3rooms` float DEFAULT NULL,
  `total_area_4rooms` float DEFAULT NULL,
  `total_area_5rooms` float DEFAULT NULL,
  `total_area_6rooms` float DEFAULT NULL,
  `avg_area_studio` float DEFAULT NULL,
  `min_area_studio` float DEFAULT NULL,
  `max_area_studio` float DEFAULT NULL,
  `min_area_st_wo_unheat` float DEFAULT NULL COMMENT 'минимальная площадь студии без учета неотапливаемых помещений',
  `max_area_st_wo_unheat` float DEFAULT NULL COMMENT 'максимальная площадь студии без учета неотапливаемых помещений',
  `avg_area_1r` float DEFAULT NULL,
  `min_area_1r` float DEFAULT NULL,
  `max_area_1r` float DEFAULT NULL,
  `min_area_1r_wo_unheat` float DEFAULT NULL,
  `max_area_1r_wo_unheat` float DEFAULT NULL,
  `avg_area_2r` float DEFAULT NULL,
  `min_area_2r` float DEFAULT NULL,
  `max_area_2r` float DEFAULT NULL,
  `min_area_2r_wo_unheat` float DEFAULT NULL,
  `max_area_2r_wo_unheat` float DEFAULT NULL,
  `avg_area_3r` float DEFAULT NULL,
  `min_area_3r` float DEFAULT NULL,
  `max_area_3r` float DEFAULT NULL,
  `min_area_3r_wo_unheat` float DEFAULT NULL,
  `max_area_3r_wo_unheat` float DEFAULT NULL,
  `avg_area_4r` float DEFAULT NULL,
  `min_area_4r` float DEFAULT NULL,
  `max_area_4r` float DEFAULT NULL,
  `min_area_4r_wo_unheat` float DEFAULT NULL,
  `max_area_4r_wo_unheat` float DEFAULT NULL,
  `avg_area_5r` float DEFAULT NULL,
  `min_area_5r` float DEFAULT NULL,
  `max_area_5r` float DEFAULT NULL,
  `min_area_5r_wo_unheat` float DEFAULT NULL,
  `max_area_5r_wo_unheat` float DEFAULT NULL,
  `avg_area_6r` float DEFAULT NULL,
  `min_area_6r` float DEFAULT NULL,
  `max_area_6r` float DEFAULT NULL,
  `min_area_6r_wo_unheat` float DEFAULT NULL,
  `max_area_6r_wo_unheat` float DEFAULT NULL,
  `avg_area_n_room` float DEFAULT NULL,
  `min_area_n_room` float DEFAULT NULL,
  `max_area_n_room` float DEFAULT NULL,
  `min_area_n_wo_unheat` float DEFAULT NULL,
  `max_area_n_wo_unheat` float DEFAULT NULL,
  `total_area_n_rooms` float DEFAULT NULL,
  `total_count_all_flats` float DEFAULT NULL COMMENT 'общее количество квартир объекта',
  `total_count_studio` float DEFAULT NULL,
  `total_count_1_rooms` float DEFAULT NULL,
  `total_count_2_rooms` float DEFAULT NULL,
  `total_count_3_rooms` float DEFAULT NULL,
  `total_count_4_rooms` float DEFAULT NULL,
  `total_count_5_rooms` float DEFAULT NULL,
  `total_count_6_rooms` float DEFAULT NULL,
  `total_count_n_rooms` float DEFAULT NULL,
  `rrb_housing_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_rrb_housing_flat_info_1` (`rrb_housing_id`),
  CONSTRAINT `fk_rrb_housing_flat_info_1` FOREIGN KEY (`rrb_housing_id`) REFERENCES `rrb_housing` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rrb_housing_flat_info`
--

LOCK TABLES `rrb_housing_flat_info` WRITE;
/*!40000 ALTER TABLE `rrb_housing_flat_info` DISABLE KEYS */;
INSERT INTO `rrb_housing_flat_info` VALUES (1,1,'2012-06-17 00:00:00',750,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,11,1,1,1,1,1,NULL,1,1,1,1,1,1);
/*!40000 ALTER TABLE `rrb_housing_flat_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rrb_user_login`
--

DROP TABLE IF EXISTS `rrb_user_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rrb_user_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `login_status` int(11) DEFAULT NULL,
  `login_datetime` datetime DEFAULT NULL,
  `logout_datetime` datetime DEFAULT NULL,
  `user_ip` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rrb_user_login`
--

LOCK TABLES `rrb_user_login` WRITE;
/*!40000 ALTER TABLE `rrb_user_login` DISABLE KEYS */;
INSERT INTO `rrb_user_login` VALUES (80,1,1,'2012-06-16 13:47:47',NULL,'::1'),(81,1,1,'2012-06-16 13:50:08',NULL,'::1'),(82,1,1,'2012-06-16 13:50:46',NULL,'::1'),(83,1,1,'2012-06-18 08:48:22',NULL,'::1'),(84,1,1,'2012-06-19 10:21:49',NULL,'::1'),(85,1,1,'2012-06-19 10:38:51',NULL,'::1'),(86,1,1,'2012-06-19 11:52:33',NULL,'::1'),(87,1,1,'2012-06-19 16:23:52',NULL,'::1'),(88,1,1,'2012-06-19 16:38:24',NULL,'::1'),(89,1,1,'2012-06-20 10:35:43',NULL,'::1'),(90,1,1,'2012-06-20 11:08:58',NULL,'::1'),(91,1,1,'2012-06-20 11:09:13',NULL,'::1'),(92,1,1,'2012-06-22 10:45:02',NULL,'127.0.0.1'),(93,1,1,'2012-06-22 12:32:04',NULL,'127.0.0.1'),(94,1,1,'2012-06-22 13:35:13',NULL,'127.0.0.1'),(95,1,1,'2012-07-10 11:41:57',NULL,'127.0.0.1'),(96,1,1,'2012-07-12 16:39:27',NULL,'::1'),(97,1,1,'2012-07-13 10:31:01',NULL,'::1'),(98,1,1,'2012-07-17 11:15:53',NULL,'::1'),(99,1,1,'2012-07-17 14:40:54',NULL,'::1'),(100,1,1,'2012-07-17 16:15:08',NULL,'::1'),(101,1,1,'2012-07-18 09:29:34',NULL,'::1'),(102,1,1,'2012-07-18 14:07:27',NULL,'::1'),(103,1,1,'2012-07-19 10:19:43',NULL,'127.0.0.1'),(104,1,1,'2012-07-19 13:50:38',NULL,'127.0.0.1');
/*!40000 ALTER TABLE `rrb_user_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rrb_investor_builder`
--

DROP TABLE IF EXISTS `rrb_investor_builder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rrb_investor_builder` (
  `id` int(11) NOT NULL,
  `last_user_id` int(11) DEFAULT NULL,
  `date_rec` datetime DEFAULT NULL,
  `investor_id` int(11) DEFAULT NULL,
  `investor_contact` varchar(45) DEFAULT NULL,
  `investor_site` varchar(45) DEFAULT NULL,
  `general_contractor_id` int(11) DEFAULT NULL COMMENT 'генеральный подрядчик',
  `customer_of_object_id` int(11) DEFAULT NULL COMMENT 'Инвестор (заказчик) объекта',
  `architect_id` int(11) DEFAULT NULL,
  `building_permits_date` date DEFAULT NULL COMMENT 'дата выдачи разрешения на строительство',
  `building_permits_number` varchar(45) DEFAULT NULL COMMENT 'номер разрешения на строительство',
  `date_sale_start` varchar(45) DEFAULT NULL COMMENT 'дата начала продаж (год, месяц)',
  `date_start_build` varchar(45) DEFAULT NULL COMMENT 'дата начала продаж (год, месяц)',
  `build_stage_id` int(11) DEFAULT NULL COMMENT 'стадия строительства',
  `build_status_id` int(11) DEFAULT NULL COMMENT 'статус строительства',
  `schedul_dt_commiss` date DEFAULT NULL COMMENT 'запланированный срок ввода в эксплуатацию',
  `fact_dt_commiss` date DEFAULT NULL COMMENT 'фактический срок ввода в эксплуатацию',
  `End_of_implementation` date DEFAULT NULL COMMENT 'Окончание реализации',
  `Commissioning` date DEFAULT NULL COMMENT 'Ввод в эксплуатацию',
  `Postponement_entry` varchar(145) DEFAULT NULL COMMENT 'Перенос сроков ввода',
  `commissioning_dt` date DEFAULT NULL COMMENT 'дата выдачи разрешения на ввод в эксплуатацию',
  `commissioning_num` varchar(45) DEFAULT NULL COMMENT 'дата выдачи разрешения на ввод в эксплуатацию',
  `rrb_housing_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_rrb_investor_builder_1` (`rrb_housing_id`),
  CONSTRAINT `fk_rrb_investor_builder_1` FOREIGN KEY (`rrb_housing_id`) REFERENCES `rrb_housing` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rrb_investor_builder`
--

LOCK TABLES `rrb_investor_builder` WRITE;
/*!40000 ALTER TABLE `rrb_investor_builder` DISABLE KEYS */;
INSERT INTO `rrb_investor_builder` VALUES (1,1,'2012-07-19 00:00:00',1,'1','1',1,1,1,'0000-00-00','1','2000-01-01','2010-01-01',1,1,'0000-00-00','0000-00-00','0000-00-00','0000-00-00','1','2010-12-12','11',1);
/*!40000 ALTER TABLE `rrb_investor_builder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rrb_housing_infrastructure`
--

DROP TABLE IF EXISTS `rrb_housing_infrastructure`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rrb_housing_infrastructure` (
  `id` int(11) NOT NULL,
  `last_user_id` int(11) DEFAULT NULL,
  `date_rec` datetime DEFAULT NULL,
  `type_of_infrastructure_id` int(11) DEFAULT NULL COMMENT 'тип объекта инфраструктуры (только для комплексного освоения в целях жилищного строительства)',
  `rrb_housing_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_rrb_housing_infrastructure_1` (`rrb_housing_id`),
  CONSTRAINT `fk_rrb_housing_infrastructure_1` FOREIGN KEY (`rrb_housing_id`) REFERENCES `rrb_housing` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rrb_housing_infrastructure`
--

LOCK TABLES `rrb_housing_infrastructure` WRITE;
/*!40000 ALTER TABLE `rrb_housing_infrastructure` DISABLE KEYS */;
/*!40000 ALTER TABLE `rrb_housing_infrastructure` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rrb_handbooks`
--

DROP TABLE IF EXISTS `rrb_handbooks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rrb_handbooks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `handbook_name` varchar(250) NOT NULL,
  `last_user_id` int(11) NOT NULL,
  `date_rec` datetime NOT NULL,
  `handbook_description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rrb_handbooks`
--

LOCK TABLES `rrb_handbooks` WRITE;
/*!40000 ALTER TABLE `rrb_handbooks` DISABLE KEYS */;
INSERT INTO `rrb_handbooks` VALUES (1,'технология и материал несущих конструкций',1,'2012-06-22 10:45:58','технология и материал несущих конструкций'),(2,'материал наружных стен',1,'2012-06-22 10:47:03','<font face=\"tahoma, arial, helvetica, sans-serif\"><span style=\"font-size: 12px;\">материал наружных стен</span></font>'),(4,'тип проектной документации',1,'2012-06-22 10:47:41','тип проектной документации'),(5,'тип этажности',1,'2012-06-22 10:49:10','<span style=\"font-family: arial, sans, sans-serif; font-size: 13px; white-space: pre-wrap; \">тип этажности</span>'),(6,'потребительский класс',1,'2012-06-22 10:49:44','<span style=\"font-family: arial, sans, sans-serif; font-size: 13px; white-space: pre-wrap; \">потребительский класс</span>'),(7,'дом экономического класса',1,'2012-06-22 10:50:29','<span style=\"font-family: arial, sans, sans-serif; font-size: 13px; white-space: pre-wrap; \">дом экономического класса (на основании приказа минрегиона россии от  28.06.10 № 303)</span>'),(8,'тип отделки квартир',1,'2012-06-22 10:51:36','<span style=\"font-family: arial, sans, sans-serif; font-size: 13px; white-space: pre-wrap; \">тип отделки квартир</span>'),(9,'уровень отделки квартир',1,'2012-06-22 10:52:25','<span style=\"font-family: arial, sans, sans-serif; font-size: 13px; white-space: pre-wrap; \">уровень отделки квартир</span>'),(10,'уровень отделки общих помещений',1,'2012-06-22 10:53:03','<span style=\"font-family: arial, sans, sans-serif; font-size: 13px; white-space: pre-wrap; \">уровень отделки общих помещений</span>'),(11,'остекление лоджий / балконов',1,'2012-06-22 10:53:40','<span style=\"font-family: arial, sans, sans-serif; font-size: 13px; white-space: pre-wrap; \">остекление лоджий / балконов</span>'),(12,'тип паркинга',1,'2012-06-22 10:54:11','тип паркинга&nbsp;'),(13,'ограждение территории',1,'2012-06-22 10:54:57','<span style=\"font-family: arial, sans, sans-serif; font-size: 13px; white-space: pre-wrap; \">ограждение территории</span>'),(14,'охрана',1,'2012-06-22 10:55:45','<span style=\"font-family: arial, sans, sans-serif; font-size: 13px; white-space: pre-wrap; \">охрана</span>');
/*!40000 ALTER TABLE `rrb_handbooks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `rrb_v_housing_specification`
--

/*!50001 DROP TABLE IF EXISTS `rrb_v_housing_specification`*/;
/*!50001 DROP VIEW IF EXISTS `rrb_v_housing_specification`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `rrb_v_housing_specification` AS select `t`.`id` AS `id`,`t`.`number_of_sections` AS `number_of_sections`,`t`.`type_of_building` AS `type_of_building`,`t`.`total_land_area` AS `total_land_area`,`t`.`total_floor_area` AS `total_floor_area`,`t`.`land_area_build` AS `land_area_build`,`t`.`bearing_material_tech` AS `bearing_material_tech`,`t`.`wall_material` AS `wall_material`,`t`.`proj_doc_type` AS `proj_doc_type`,`t`.`serial_number` AS `serial_number`,`t`.`min_floors` AS `min_floors`,`t`.`max_floors` AS `max_floors`,`t`.`floors_type_id` AS `floors_type_id`,`t`.`consumer_class_id` AS `consumer_class_id`,`t`.`economy_class_house_id` AS `economy_class_house_id`,`t`.`ceiling_height` AS `ceiling_height`,`t`.`finishing_flats_id` AS `finishing_flats_id`,`t`.`finishing_level_id` AS `finishing_level_id`,`t`.`common_area_finishing_id` AS `common_area_finishing_id`,`t`.`glazed_loggia_id` AS `glazed_loggia_id`,`t`.`parking_type_id` AS `parking_type_id`,`t`.`num_of_parking_place` AS `num_of_parking_place`,`t`.`num_of_Elevator` AS `num_of_Elevator`,`t`.`estimated_cost_construction` AS `estimated_cost_construction`,`t`.`territory_fencing_id` AS `territory_fencing_id`,`t`.`security_id` AS `security_id`,`t`.`last_user_id` AS `last_user_id`,`t`.`date_rec` AS `date_rec`,`t`.`rrb_housing_id` AS `rrb_housing_id`,`h_material_tech`.`hndb_value` AS `material_name`,`h_wall_material`.`hndb_value` AS `wall_material_name`,`h_proj_doc_type`.`hndb_value` AS `proj_doc_name`,`h_floors_type`.`hndb_value` AS `floor_type_name`,`h_consumer_class`.`hndb_value` AS `consumer_cl_name`,`h_economy_class`.`hndb_value` AS `economy_cl_name`,`h_finishing_flats`.`hndb_value` AS `finish_fl_name`,`h_finishing_level`.`hndb_value` AS `finish_level_name`,`h_common_area_finishing`.`hndb_value` AS `finish_c_area_name`,`h_glazed_loggia`.`hndb_value` AS `glazed_log_name`,`h_parking_type`.`hndb_value` AS `parking_name`,`h_territory_fencing`.`hndb_value` AS `fencing_name`,`h_security`.`hndb_value` AS `security_name` from (((((((((((((`rrb_housing_specification` `t` join `rrb_s_handbooks` `h_material_tech`) join `rrb_s_handbooks` `h_wall_material`) join `rrb_s_handbooks` `h_proj_doc_type`) join `rrb_s_handbooks` `h_floors_type`) join `rrb_s_handbooks` `h_consumer_class`) join `rrb_s_handbooks` `h_economy_class`) join `rrb_s_handbooks` `h_finishing_flats`) join `rrb_s_handbooks` `h_finishing_level`) join `rrb_s_handbooks` `h_common_area_finishing`) join `rrb_s_handbooks` `h_glazed_loggia`) join `rrb_s_handbooks` `h_parking_type`) join `rrb_s_handbooks` `h_territory_fencing`) join `rrb_s_handbooks` `h_security`) where ((`h_material_tech`.`rrb_handbooks_id` = 1) and (`h_wall_material`.`rrb_handbooks_id` = 2) and (`h_proj_doc_type`.`rrb_handbooks_id` = 4) and (`h_floors_type`.`rrb_handbooks_id` = 5) and (`h_consumer_class`.`rrb_handbooks_id` = 6) and (`h_economy_class`.`rrb_handbooks_id` = 7) and (`h_finishing_flats`.`rrb_handbooks_id` = 8) and (`h_finishing_level`.`rrb_handbooks_id` = 9) and (`h_common_area_finishing`.`rrb_handbooks_id` = 10) and (`h_glazed_loggia`.`rrb_handbooks_id` = 11) and (`h_parking_type`.`rrb_handbooks_id` = 12) and (`h_territory_fencing`.`rrb_handbooks_id` = 13) and (`h_security`.`rrb_handbooks_id` = 14) and (`t`.`bearing_material_tech` = `h_material_tech`.`id`) and (`t`.`wall_material` = `h_wall_material`.`id`) and (`t`.`proj_doc_type` = `h_proj_doc_type`.`id`) and (`t`.`floors_type_id` = `h_floors_type`.`id`) and (`t`.`consumer_class_id` = `h_consumer_class`.`id`) and (`t`.`economy_class_house_id` = `h_economy_class`.`id`) and (`t`.`finishing_flats_id` = `h_finishing_flats`.`id`) and (`t`.`finishing_level_id` = `h_finishing_level`.`id`) and (`t`.`common_area_finishing_id` = `h_common_area_finishing`.`id`) and (`t`.`glazed_loggia_id` = `h_glazed_loggia`.`id`) and (`t`.`parking_type_id` = `h_parking_type`.`id`) and (`t`.`territory_fencing_id` = `h_territory_fencing`.`id`) and (`t`.`security_id` = `h_security`.`id`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Dumping routines for database 'rrb'
--
/*!50003 DROP PROCEDURE IF EXISTS `uid_handbooks` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50020 DEFINER=`root`@`localhost`*/ /*!50003 PROCEDURE `uid_handbooks`(
 IN p_id int,
 IN p_rrb_handbooks_id int,
 IN p_hndb_value text,
 IN p_last_user_id int,
 IN p_date_rec datetime,
 IN p_mode varchar(2),
 OUT o_result varchar(200)
   )
BEGIN
  DECLARE CONTINUE HANDLER FOR SQLSTATE '23000' SET o_result ='exit';
        SET o_result = 'good_insert';
        INSERT INTO rrb.rrb_s_handbooks
                    (   id,
                        rrb_handbooks_id,
                        hndb_value,
                        last_user_id,
                        date_rec )
                    VALUES  (
                        p_id,
                        p_rrb_handbooks_id,
                        p_hndb_value,
                        p_last_user_id,
                        p_date_rec  );          
    if o_result = 'exit' then
         update rrb.rrb_s_handbooks set
                rrb_handbooks_id = p_rrb_handbooks_id,
                hndb_value = p_hndb_value,
                last_user_id = p_last_user_id,
                date_rec = p_date_rec
                where id = p_id;
     set o_result = 'good_update';
    end if;
  if p_mode = 'D' then
     delete from rrb.rrb_s_handbooks where id = p_id;
     set o_result = 'good_delete';
  end if;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `uid_rrb_housing_specification` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50020 DEFINER=`root`@`localhost`*/ /*!50003 PROCEDURE `uid_rrb_housing_specification`(
IN p_id int(11),
IN p_number_of_sections int(11),
IN p_type_of_building int(11),
IN p_total_land_area float,
IN p_total_floor_area float,
IN p_land_area_build float,
IN p_bearing_material_tech int(11),
IN p_wall_material int(11),
IN p_proj_doc_type int(11),
IN p_serial_number varchar(45),
IN p_min_floors int(11),
IN p_max_floors int(11),
IN p_floors_type_id int(11),
IN p_consumer_class_id int(11),
IN p_economy_class_house_id int(11),
IN p_ceiling_height float,
IN p_finishing_flats_id int(11),
IN p_finishing_level_id int(11),
IN p_common_area_finishing_id int(11),
IN p_glazed_loggia_id int(11),
IN p_parking_type_id int(11),
IN p_num_of_parking_place float,
IN p_num_of_Elevator float,
IN p_estimated_cost_construction float,
IN p_territory_fencing_id int(11),
IN p_security_id int(11),
IN p_last_user_id int(11),
IN p_date_rec datetime,
IN p_rrb_housing_id int(11),
OUT o_result varchar(200)
)
BEGIN
DECLARE CONTINUE HANDLER FOR SQLSTATE '23000' SET o_result ='exit';
SET o_result = 'good_insert';
INSERT INTO rrb.rrb_housing_specification 
(
id
,number_of_sections
,type_of_building
,total_land_area
,total_floor_area
,land_area_build
,bearing_material_tech
,wall_material
,proj_doc_type
,serial_number
,min_floors
,max_floors
,floors_type_id
,consumer_class_id
,economy_class_house_id
,ceiling_height
,finishing_flats_id
,finishing_level_id
,common_area_finishing_id
,glazed_loggia_id
,parking_type_id
,num_of_parking_place
,num_of_Elevator
,estimated_cost_construction
,territory_fencing_id
,security_id
,last_user_id
,date_rec
,rrb_housing_id
)
VALUES
(p_id
, p_number_of_sections
, p_type_of_building
, p_total_land_area
, p_total_floor_area
, p_land_area_build
, p_bearing_material_tech
, p_wall_material
, p_proj_doc_type
, p_serial_number
, p_min_floors
, p_max_floors
, p_floors_type_id
, p_consumer_class_id
, p_economy_class_house_id
, p_ceiling_height
, p_finishing_flats_id
, p_finishing_level_id
, p_common_area_finishing_id
, p_glazed_loggia_id
, p_parking_type_id
, p_num_of_parking_place
, p_num_of_Elevator
, p_estimated_cost_construction
, p_territory_fencing_id
, p_security_id
, p_last_user_id
, p_date_rec
, p_rrb_housing_id
);
if o_result = 'exit' then
update rrb.rrb_housing_specification set
id = p_id
,number_of_sections = p_number_of_sections
,type_of_building = p_type_of_building
,total_land_area = p_total_land_area
,total_floor_area = p_total_floor_area
,land_area_build = p_land_area_build
,bearing_material_tech = p_bearing_material_tech
,wall_material = p_wall_material
,proj_doc_type = p_proj_doc_type
,serial_number = p_serial_number
,min_floors = p_min_floors
,max_floors = p_max_floors
,floors_type_id = p_floors_type_id
,consumer_class_id = p_consumer_class_id
,economy_class_house_id = p_economy_class_house_id
,ceiling_height = p_ceiling_height
,finishing_flats_id = p_finishing_flats_id
,finishing_level_id = p_finishing_level_id
,common_area_finishing_id = p_common_area_finishing_id
,glazed_loggia_id = p_glazed_loggia_id
,parking_type_id = p_parking_type_id
,num_of_parking_place = p_num_of_parking_place
,num_of_Elevator = p_num_of_Elevator
,estimated_cost_construction = p_estimated_cost_construction
,territory_fencing_id = p_territory_fencing_id
,security_id = p_security_id
,last_user_id = p_last_user_id
,date_rec = p_date_rec
,rrb_housing_id = p_rrb_housing_id
;set o_result = 'good_update';
end if;
if p_mode = 'D' then
delete from rrb.rrb_housing_specification where id = p_id;
set o_result = 'good_delete';
end if;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ui_handbooksdesc` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50020 DEFINER=`root`@`localhost`*/ /*!50003 PROCEDURE `ui_handbooksdesc`(
 IN p_id int,
 IN p_handbook_name varchar(200),
 IN p_last_user_id int,
 IN p_date_rec datetime,
 IN p_handbook_description varchar(200),
 IN p_mode varchar(2),
OUT o_result varchar(200)
   )
BEGIN
  
  DECLARE CONTINUE HANDLER FOR SQLSTATE '23000' SET o_result ='exit';
        SET o_result = 'good_insert';
          INSERT INTO rrb.rrb_handbooks
        (id,
        handbook_name,
        last_user_id,
        date_rec,
        handbook_description)
        VALUES
          (p_id,
            p_handbook_name,
            p_last_user_id,
            p_date_rec,
            p_handbook_description
          );
    if o_result = 'exit' then
         update rrb.rrb_handbooks set
                handbook_name = p_handbook_name,
                last_user_id = p_last_user_id,
                date_rec = p_date_rec,
                handbook_description = p_handbook_description
                where id = p_id;
     set o_result = 'good_update';
    end if;
  if p_mode = 'D' then
     delete from rrb.rrb_handbooks where id = p_id;
     set o_result = 'good_delete';
  end if;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-07-19 14:22:47
