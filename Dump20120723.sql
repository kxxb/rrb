USE `rrbaseteru`;
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
-- Table structure for table `rrb_temp_hnb`
--

DROP TABLE IF EXISTS `rrb_temp_hnb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rrb_temp_hnb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_load` datetime DEFAULT NULL,
  `hndb_name` varchar(150) DEFAULT NULL,
  `hndb_key` int(11) DEFAULT NULL,
  `hndb_key_value` varchar(450) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='временная таблица справочников при загрузки из файлов';
/*!40101 SET character_set_client = @saved_cs_client */;

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
  CONSTRAINT `fk_rrb_housing_comercial_1` FOREIGN KEY (`rrb_housing_id`) REFERENCES `rrb_housing` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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
  `key_id` int(11) DEFAULT NULL COMMENT 'значение ключа загруженное из файла',
  PRIMARY KEY (`id`),
  KEY `fk_rrb_s_hnbks_1` (`rrb_handbooks_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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
-- Table structure for table `rrb_temporary_load`
--

DROP TABLE IF EXISTS `rrb_temporary_load`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rrb_temporary_load` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_rec` datetime DEFAULT NULL,
  `batch_number` int(11) DEFAULT NULL,
  `n_comon` varchar(100) DEFAULT NULL,
  `n_kvartal` varchar(100) DEFAULT NULL,
  `report_kvartal` varchar(100) DEFAULT NULL,
  `OBJECTID` varchar(100) DEFAULT NULL,
  `komplex` varchar(100) DEFAULT NULL,
  `ADDRESS` varchar(100) DEFAULT NULL,
  `km_mkad` varchar(100) DEFAULT NULL,
  `direction` varchar(100) DEFAULT NULL,
  `SUBJECT` varchar(100) DEFAULT NULL,
  `KOD_OKATO` varchar(100) DEFAULT NULL,
  `Kod_cadastre` varchar(100) DEFAULT NULL,
  `SUBJECT_rayon` varchar(100) DEFAULT NULL,
  `REGION` varchar(100) DEFAULT NULL,
  `SETTLEMENT` varchar(100) DEFAULT NULL,
  `CITY` varchar(100) DEFAULT NULL,
  `VGT` varchar(100) DEFAULT NULL,
  `STREET_TYPE` varchar(100) DEFAULT NULL,
  `STREET` varchar(100) DEFAULT NULL,
  `HOUSE_NUM` varchar(100) DEFAULT NULL,
  `LETTER` varchar(100) DEFAULT NULL,
  `BUILDING` varchar(100) DEFAULT NULL,
  `STRUCTURE` varchar(100) DEFAULT NULL,
  `ESTATE` varchar(100) DEFAULT NULL,
  `LONGITUDE` varchar(100) DEFAULT NULL,
  `LATITUDE` varchar(100) DEFAULT NULL,
  `CADASTRE_NUM` varchar(100) DEFAULT NULL,
  `SECTION_COUNT` varchar(100) DEFAULT NULL,
  `TYPE_DEVELOP` varchar(100) DEFAULT NULL,
  `AREA_DEV` varchar(100) DEFAULT NULL,
  `AREA_ALL_OBJECT` varchar(100) DEFAULT NULL,
  `AREA_LOT` varchar(100) DEFAULT NULL,
  `TECHNOLOGY` varchar(100) DEFAULT NULL,
  `MATERIAL_WALL` varchar(100) DEFAULT NULL,
  `PROJECT_TYPE` varchar(100) DEFAULT NULL,
  `PROJECT_NUMBER` varchar(100) DEFAULT NULL,
  `FLOOR_QNT_MIN` varchar(100) DEFAULT NULL,
  `FLOOR_QNT_MAX` varchar(100) DEFAULT NULL,
  `FLOOR_TYPE` varchar(100) DEFAULT NULL,
  `CLASS_TYPE` varchar(100) DEFAULT NULL,
  `CLASS` varchar(100) DEFAULT NULL,
  `HEIGHT_FLOOR` varchar(100) DEFAULT NULL,
  `FINISHING_TYPE_FLAT` varchar(100) DEFAULT NULL,
  `FINISHING_LEVEL_FLAT` varchar(100) DEFAULT NULL,
  `FINISHING_LEVEL_INSIDE` varchar(100) DEFAULT NULL,
  `GLAZING` varchar(100) DEFAULT NULL,
  `PARKING_TYPE` varchar(100) DEFAULT NULL,
  `PARKING_COUNT` varchar(100) DEFAULT NULL,
  `LIFT` varchar(100) DEFAULT NULL,
  `ESTIMATE` varchar(100) DEFAULT NULL,
  `FENCE` varchar(100) DEFAULT NULL,
  `SECURITY` varchar(100) DEFAULT NULL,
  `AREA_OBJECT` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_STUDIO` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_1` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_2` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_3` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_4` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_5` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_6` varchar(100) DEFAULT NULL,
  `arae_studio_avg` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_STUDIO_MIN` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_STUDIO_MAX` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_STUDIO_NOT_HEAT_MIN` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_STUDIO_NOT_HEAT_MAX` varchar(100) DEFAULT NULL,
  `Area_object_1_av` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_1_MIN` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_1_MAX` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_1_NOT_HEAT_MIN` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_1_NOT_HEAT_MAX` varchar(100) DEFAULT NULL,
  `Area_object_2_av` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_2_MIN` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_2_MAX` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_2_NOT_HEAT_MIN` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_2_NOT_HEAT_MAX` varchar(100) DEFAULT NULL,
  `Area_object_3_av` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_3_MIN` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_3_MAX` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_3_NOT_HEAT_MIN` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_3_NOT_HEAT_MAX` varchar(100) DEFAULT NULL,
  `Area_object_4_av` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_4_MIN` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_4_MAX` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_4_NOT_HEAT_MIN` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_4_NOT_HEAT_MAX` varchar(100) DEFAULT NULL,
  `Area_object_5_av` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_5_MIN` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_5_MAX` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_5_NOT_HEAT_MIN` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_5_NOT_HEAT_MAX` varchar(100) DEFAULT NULL,
  `Area_object_6_av` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_6_MIN` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_6_MAX` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_6_NOT_HEAT_MIN` varchar(100) DEFAULT NULL,
  `AREA_OBJECT_6_NOT_HEAT_MAX` varchar(100) DEFAULT NULL,
  `Area_object_mnogo` varchar(100) DEFAULT NULL,
  `Area_object_mnogo_av` varchar(100) DEFAULT NULL,
  `Area_object_mnogo_min` varchar(100) DEFAULT NULL,
  `Area_object_mnogo_max` varchar(100) DEFAULT NULL,
  `Studio` varchar(100) DEFAULT NULL,
  `Quantity_object` varchar(100) DEFAULT NULL,
  `QUANTITY_OBJECT_STUDIO` varchar(100) DEFAULT NULL,
  `Quantity_object_1` varchar(100) DEFAULT NULL,
  `Quantity_object_2` varchar(100) DEFAULT NULL,
  `Quantity_object_3` varchar(100) DEFAULT NULL,
  `Quantity_object_4` varchar(100) DEFAULT NULL,
  `Quantity_object_5` varchar(100) DEFAULT NULL,
  `Quantity_object_6` varchar(100) DEFAULT NULL,
  `Quantity_object_mnogo` varchar(100) DEFAULT NULL,
  `COMMERCE_PLACE` varchar(100) DEFAULT NULL,
  `AREA_COMMERCE` varchar(100) DEFAULT NULL,
  `DEVELOPER` varchar(100) DEFAULT NULL,
  `CONTACTS` varchar(100) DEFAULT NULL,
  `URL_INFO` varchar(100) DEFAULT NULL,
  `BUILDER` varchar(100) DEFAULT NULL,
  `Investor` varchar(100) DEFAULT NULL,
  `architect` varchar(100) DEFAULT NULL,
  `DATE_PERMIT` varchar(100) DEFAULT NULL,
  `NUMBER_PERMIT` varchar(100) DEFAULT NULL,
  `BEGIN_SALE` varchar(100) DEFAULT NULL,
  `BEGIN_BUILT` varchar(100) DEFAULT NULL,
  `CONST_STAGE` varchar(100) DEFAULT NULL,
  `CONST_STATUS` varchar(100) DEFAULT NULL,
  `EXPL_PLAN` varchar(100) DEFAULT NULL,
  `EXPL_FACT` varchar(100) DEFAULT NULL,
  `impl_end` varchar(100) DEFAULT NULL,
  `expl_start` varchar(100) DEFAULT NULL,
  `delay_sheduly` varchar(100) DEFAULT NULL,
  `EXPL_DATE` varchar(100) DEFAULT NULL,
  `EXPL_NUMBER` varchar(100) DEFAULT NULL,
  `INFR_TYPE` varchar(100) DEFAULT NULL,
  `CONTRACT_TYPE` varchar(100) DEFAULT NULL,
  `INSTALLMENT_PLAN` varchar(100) DEFAULT NULL,
  `MORTGAGE` varchar(100) DEFAULT NULL,
  `Price_min_object` varchar(100) DEFAULT NULL,
  `Price_avg_object` varchar(100) DEFAULT NULL,
  `Price_max_object` varchar(100) DEFAULT NULL,
  `Price_avg_1` varchar(100) DEFAULT NULL,
  `Price_avg_2` varchar(100) DEFAULT NULL,
  `Price_avg_3` varchar(100) DEFAULT NULL,
  `Price_avg_4` varchar(100) DEFAULT NULL,
  `Price_avg_5` varchar(100) DEFAULT NULL,
  `Price_avg_6` varchar(100) DEFAULT NULL,
  `Price_avg_mnogo` varchar(100) DEFAULT NULL,
  `Quantity_sell_object` varchar(100) DEFAULT NULL,
  `Quantity_sell_1` varchar(100) DEFAULT NULL,
  `Quantity_sell_2` varchar(100) DEFAULT NULL,
  `Quantity_sell_3` varchar(100) DEFAULT NULL,
  `Quantity_sell_4` varchar(100) DEFAULT NULL,
  `Quantity_sell_5` varchar(100) DEFAULT NULL,
  `Quantity_sell_6` varchar(100) DEFAULT NULL,
  `total_n_rooms` varchar(100) DEFAULT NULL,
  `koefficent` varchar(100) DEFAULT NULL,
  `sale_temp_kavrtal` varchar(100) DEFAULT NULL,
  `sale_temp_from_start` varchar(100) DEFAULT NULL,
  `avg_flat_area` varchar(100) DEFAULT NULL,
  `total_area_offer` varchar(100) DEFAULT NULL,
  `total_whoole_price` varchar(100) DEFAULT NULL,
  `total_area_offer_1r` varchar(100) DEFAULT NULL,
  `total_wh_price_1r` varchar(100) DEFAULT NULL,
  `total_area_offer_2r` varchar(100) DEFAULT NULL,
  `total_wh_price_2r` varchar(100) DEFAULT NULL,
  `total_area_offer_3r` varchar(100) DEFAULT NULL,
  `total_wh_price_3r` varchar(100) DEFAULT NULL,
  `total_area_offer_nr` varchar(100) DEFAULT NULL,
  `total_wh_price_nr` varchar(100) DEFAULT NULL,
  `quotas` varchar(100) DEFAULT NULL,
  `update_category` varchar(100) DEFAULT NULL,
  `SOURCE_DESC` varchar(100) DEFAULT NULL,
  `DATE_RESEARCH` varchar(100) DEFAULT NULL,
  `DATE_IN_BASE` varchar(100) DEFAULT NULL,
  `SALE_STATUS` varchar(100) DEFAULT NULL,
  `insert_date` varchar(100) DEFAULT NULL,
  `comment_text` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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
/*!50003 DROP PROCEDURE IF EXISTS `uid_rrb_temporary_load` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50020 DEFINER=`root`@`localhost`*/ /*!50003 PROCEDURE `uid_rrb_temporary_load`(
IN p_id int(11),
IN p_date_rec datetime,
IN p_batch_number int(11),
IN p_n_comon varchar(100),
IN p_n_kvartal varchar(100),
IN p_report_kvartal varchar(100),
IN p_OBJECTID varchar(100),
IN p_komplex varchar(100),
IN p_ADDRESS varchar(100),
IN p_km_mkad varchar(100),
IN p_direction varchar(100),
IN p_SUBJECT varchar(100),
IN p_KOD_OKATO varchar(100),
IN p_Kod_cadastre varchar(100),
IN p_SUBJECT_rayon varchar(100),
IN p_REGION varchar(100),
IN p_SETTLEMENT varchar(100),
IN p_CITY varchar(100),
IN p_VGT varchar(100),
IN p_STREET_TYPE varchar(100),
IN p_STREET varchar(100),
IN p_HOUSE_NUM varchar(100),
IN p_LETTER varchar(100),
IN p_BUILDING varchar(100),
IN p_STRUCTURE varchar(100),
IN p_ESTATE varchar(100),
IN p_LONGITUDE varchar(100),
IN p_LATITUDE varchar(100),
IN p_CADASTRE_NUM varchar(100),
IN p_SECTION_COUNT varchar(100),
IN p_TYPE_DEVELOP varchar(100),
IN p_AREA_DEV varchar(100),
IN p_AREA_ALL_OBJECT varchar(100),
IN p_AREA_LOT varchar(100),
IN p_TECHNOLOGY varchar(100),
IN p_MATERIAL_WALL varchar(100),
IN p_PROJECT_TYPE varchar(100),
IN p_PROJECT_NUMBER varchar(100),
IN p_FLOOR_QNT_MIN varchar(100),
IN p_FLOOR_QNT_MAX varchar(100),
IN p_FLOOR_TYPE varchar(100),
IN p_CLASS_TYPE varchar(100),
IN p_CLASS varchar(100),
IN p_HEIGHT_FLOOR varchar(100),
IN p_FINISHING_TYPE_FLAT varchar(100),
IN p_FINISHING_LEVEL_FLAT varchar(100),
IN p_FINISHING_LEVEL_INSIDE varchar(100),
IN p_GLAZING varchar(100),
IN p_PARKING_TYPE varchar(100),
IN p_PARKING_COUNT varchar(100),
IN p_LIFT varchar(100),
IN p_ESTIMATE varchar(100),
IN p_FENCE varchar(100),
IN p_SECURITY varchar(100),
IN p_AREA_OBJECT varchar(100),
IN p_AREA_OBJECT_STUDIO varchar(100),
IN p_AREA_OBJECT_1 varchar(100),
IN p_AREA_OBJECT_2 varchar(100),
IN p_AREA_OBJECT_3 varchar(100),
IN p_AREA_OBJECT_4 varchar(100),
IN p_AREA_OBJECT_5 varchar(100),
IN p_AREA_OBJECT_6 varchar(100),
IN p_arae_studio_avg varchar(100),
IN p_AREA_OBJECT_STUDIO_MIN varchar(100),
IN p_AREA_OBJECT_STUDIO_MAX varchar(100),
IN p_AREA_OBJECT_STUDIO_NOT_HEAT_MIN varchar(100),
IN p_AREA_OBJECT_STUDIO_NOT_HEAT_MAX varchar(100),
IN p_Area_object_1_av varchar(100),
IN p_AREA_OBJECT_1_MIN varchar(100),
IN p_AREA_OBJECT_1_MAX varchar(100),
IN p_AREA_OBJECT_1_NOT_HEAT_MIN varchar(100),
IN p_AREA_OBJECT_1_NOT_HEAT_MAX varchar(100),
IN p_Area_object_2_av varchar(100),
IN p_AREA_OBJECT_2_MIN varchar(100),
IN p_AREA_OBJECT_2_MAX varchar(100),
IN p_AREA_OBJECT_2_NOT_HEAT_MIN varchar(100),
IN p_AREA_OBJECT_2_NOT_HEAT_MAX varchar(100),
IN p_Area_object_3_av varchar(100),
IN p_AREA_OBJECT_3_MIN varchar(100),
IN p_AREA_OBJECT_3_MAX varchar(100),
IN p_AREA_OBJECT_3_NOT_HEAT_MIN varchar(100),
IN p_AREA_OBJECT_3_NOT_HEAT_MAX varchar(100),
IN p_Area_object_4_av varchar(100),
IN p_AREA_OBJECT_4_MIN varchar(100),
IN p_AREA_OBJECT_4_MAX varchar(100),
IN p_AREA_OBJECT_4_NOT_HEAT_MIN varchar(100),
IN p_AREA_OBJECT_4_NOT_HEAT_MAX varchar(100),
IN p_Area_object_5_av varchar(100),
IN p_AREA_OBJECT_5_MIN varchar(100),
IN p_AREA_OBJECT_5_MAX varchar(100),
IN p_AREA_OBJECT_5_NOT_HEAT_MIN varchar(100),
IN p_AREA_OBJECT_5_NOT_HEAT_MAX varchar(100),
IN p_Area_object_6_av varchar(100),
IN p_AREA_OBJECT_6_MIN varchar(100),
IN p_AREA_OBJECT_6_MAX varchar(100),
IN p_AREA_OBJECT_6_NOT_HEAT_MIN varchar(100),
IN p_AREA_OBJECT_6_NOT_HEAT_MAX varchar(100),
IN p_Area_object_mnogo varchar(100),
IN p_Area_object_mnogo_av varchar(100),
IN p_Area_object_mnogo_min varchar(100),
IN p_Area_object_mnogo_max varchar(100),
IN p_Studio varchar(100),
IN p_Quantity_object varchar(100),
IN p_QUANTITY_OBJECT_STUDIO varchar(100),
IN p_Quantity_object_1 varchar(100),
IN p_Quantity_object_2 varchar(100),
IN p_Quantity_object_3 varchar(100),
IN p_Quantity_object_4 varchar(100),
IN p_Quantity_object_5 varchar(100),
IN p_Quantity_object_6 varchar(100),
IN p_Quantity_object_mnogo varchar(100),
IN p_COMMERCE_PLACE varchar(100),
IN p_AREA_COMMERCE varchar(100),
IN p_DEVELOPER varchar(100),
IN p_CONTACTS varchar(100),
IN p_URL_INFO varchar(100),
IN p_BUILDER varchar(100),
IN p_Investor varchar(100),
IN p_architect varchar(100),
IN p_DATE_PERMIT varchar(100),
IN p_NUMBER_PERMIT varchar(100),
IN p_BEGIN_SALE varchar(100),
IN p_BEGIN_BUILT varchar(100),
IN p_CONST_STAGE varchar(100),
IN p_CONST_STATUS varchar(100),
IN p_EXPL_PLAN varchar(100),
IN p_EXPL_FACT varchar(100),
IN p_impl_end varchar(100),
IN p_expl_start varchar(100),
IN p_delay_sheduly varchar(100),
IN p_EXPL_DATE varchar(100),
IN p_EXPL_NUMBER varchar(100),
IN p_INFR_TYPE varchar(100),
IN p_CONTRACT_TYPE varchar(100),
IN p_INSTALLMENT_PLAN varchar(100),
IN p_MORTGAGE varchar(100),
IN p_Price_min_object varchar(100),
IN p_Price_avg_object varchar(100),
IN p_Price_max_object varchar(100),
IN p_Price_avg_1 varchar(100),
IN p_Price_avg_2 varchar(100),
IN p_Price_avg_3 varchar(100),
IN p_Price_avg_4 varchar(100),
IN p_Price_avg_5 varchar(100),
IN p_Price_avg_6 varchar(100),
IN p_Price_avg_mnogo varchar(100),
IN p_Quantity_sell_object varchar(100),
IN p_Quantity_sell_1 varchar(100),
IN p_Quantity_sell_2 varchar(100),
IN p_Quantity_sell_3 varchar(100),
IN p_Quantity_sell_4 varchar(100),
IN p_Quantity_sell_5 varchar(100),
IN p_Quantity_sell_6 varchar(100),
IN p_total_n_rooms varchar(100),
IN p_koefficent varchar(100),
IN p_sale_temp_kavrtal varchar(100),
IN p_sale_temp_from_start varchar(100),
IN p_avg_flat_area varchar(100),
IN p_total_area_offer varchar(100),
IN p_total_whoole_price varchar(100),
IN p_total_area_offer_1r varchar(100),
IN p_total_wh_price_1r varchar(100),
IN p_total_area_offer_2r varchar(100),
IN p_total_wh_price_2r varchar(100),
IN p_total_area_offer_3r varchar(100),
IN p_total_wh_price_3r varchar(100),
IN p_total_area_offer_nr varchar(100),
IN p_total_wh_price_nr varchar(100),
IN p_quotas varchar(100),
IN p_update_category varchar(100),
IN p_SOURCE_DESC varchar(100),
IN p_DATE_RESEARCH varchar(100),
IN p_DATE_IN_BASE varchar(100),
IN p_SALE_STATUS varchar(100),
IN p_insert_date varchar(100),
IN p_comment_text varchar(100),
IN p_mode varchar(2),
OUT o_result varchar(200)
)
BEGIN
DECLARE CONTINUE HANDLER FOR SQLSTATE '23000' SET o_result ='exit';
SET o_result = 'good_insert';
INSERT INTO rrb.rrb_temporary_load
(
id
,date_rec
,batch_number
,n_comon
,n_kvartal
,report_kvartal
,OBJECTID
,komplex
,ADDRESS
,km_mkad
,direction
,SUBJECT
,KOD_OKATO
,Kod_cadastre
,SUBJECT_rayon
,REGION
,SETTLEMENT
,CITY
,VGT
,STREET_TYPE
,STREET
,HOUSE_NUM
,LETTER
,BUILDING
,STRUCTURE
,ESTATE
,LONGITUDE
,LATITUDE
,CADASTRE_NUM
,SECTION_COUNT
,TYPE_DEVELOP
,AREA_DEV
,AREA_ALL_OBJECT
,AREA_LOT
,TECHNOLOGY
,MATERIAL_WALL
,PROJECT_TYPE
,PROJECT_NUMBER
,FLOOR_QNT_MIN
,FLOOR_QNT_MAX
,FLOOR_TYPE
,CLASS_TYPE
,CLASS
,HEIGHT_FLOOR
,FINISHING_TYPE_FLAT
,FINISHING_LEVEL_FLAT
,FINISHING_LEVEL_INSIDE
,GLAZING
,PARKING_TYPE
,PARKING_COUNT
,LIFT
,ESTIMATE
,FENCE
,SECURITY
,AREA_OBJECT
,AREA_OBJECT_STUDIO
,AREA_OBJECT_1
,AREA_OBJECT_2
,AREA_OBJECT_3
,AREA_OBJECT_4
,AREA_OBJECT_5
,AREA_OBJECT_6
,arae_studio_avg
,AREA_OBJECT_STUDIO_MIN
,AREA_OBJECT_STUDIO_MAX
,AREA_OBJECT_STUDIO_NOT_HEAT_MIN
,AREA_OBJECT_STUDIO_NOT_HEAT_MAX
,Area_object_1_av
,AREA_OBJECT_1_MIN
,AREA_OBJECT_1_MAX
,AREA_OBJECT_1_NOT_HEAT_MIN
,AREA_OBJECT_1_NOT_HEAT_MAX
,Area_object_2_av
,AREA_OBJECT_2_MIN
,AREA_OBJECT_2_MAX
,AREA_OBJECT_2_NOT_HEAT_MIN
,AREA_OBJECT_2_NOT_HEAT_MAX
,Area_object_3_av
,AREA_OBJECT_3_MIN
,AREA_OBJECT_3_MAX
,AREA_OBJECT_3_NOT_HEAT_MIN
,AREA_OBJECT_3_NOT_HEAT_MAX
,Area_object_4_av
,AREA_OBJECT_4_MIN
,AREA_OBJECT_4_MAX
,AREA_OBJECT_4_NOT_HEAT_MIN
,AREA_OBJECT_4_NOT_HEAT_MAX
,Area_object_5_av
,AREA_OBJECT_5_MIN
,AREA_OBJECT_5_MAX
,AREA_OBJECT_5_NOT_HEAT_MIN
,AREA_OBJECT_5_NOT_HEAT_MAX
,Area_object_6_av
,AREA_OBJECT_6_MIN
,AREA_OBJECT_6_MAX
,AREA_OBJECT_6_NOT_HEAT_MIN
,AREA_OBJECT_6_NOT_HEAT_MAX
,Area_object_mnogo
,Area_object_mnogo_av
,Area_object_mnogo_min
,Area_object_mnogo_max
,Studio
,Quantity_object
,QUANTITY_OBJECT_STUDIO
,Quantity_object_1
,Quantity_object_2
,Quantity_object_3
,Quantity_object_4
,Quantity_object_5
,Quantity_object_6
,Quantity_object_mnogo
,COMMERCE_PLACE
,AREA_COMMERCE
,DEVELOPER
,CONTACTS
,URL_INFO
,BUILDER
,Investor
,architect
,DATE_PERMIT
,NUMBER_PERMIT
,BEGIN_SALE
,BEGIN_BUILT
,CONST_STAGE
,CONST_STATUS
,EXPL_PLAN
,EXPL_FACT
,impl_end
,expl_start
,delay_sheduly
,EXPL_DATE
,EXPL_NUMBER
,INFR_TYPE
,CONTRACT_TYPE
,INSTALLMENT_PLAN
,MORTGAGE
,Price_min_object
,Price_avg_object
,Price_max_object
,Price_avg_1
,Price_avg_2
,Price_avg_3
,Price_avg_4
,Price_avg_5
,Price_avg_6
,Price_avg_mnogo
,Quantity_sell_object
,Quantity_sell_1
,Quantity_sell_2
,Quantity_sell_3
,Quantity_sell_4
,Quantity_sell_5
,Quantity_sell_6
,total_n_rooms
,koefficent
,sale_temp_kavrtal
,sale_temp_from_start
,avg_flat_area
,total_area_offer
,total_whoole_price
,total_area_offer_1r
,total_wh_price_1r
,total_area_offer_2r
,total_wh_price_2r
,total_area_offer_3r
,total_wh_price_3r
,total_area_offer_nr
,total_wh_price_nr
,quotas
,update_category
,SOURCE_DESC
,DATE_RESEARCH
,DATE_IN_BASE
,SALE_STATUS
,insert_date
,comment_text
)
VALUES
(p_id
, p_date_rec
, p_batch_number
, p_n_comon
, p_n_kvartal
, p_report_kvartal
, p_OBJECTID
, p_komplex
, p_ADDRESS
, p_km_mkad
, p_direction
, p_SUBJECT
, p_KOD_OKATO
, p_Kod_cadastre
, p_SUBJECT_rayon
, p_REGION
, p_SETTLEMENT
, p_CITY
, p_VGT
, p_STREET_TYPE
, p_STREET
, p_HOUSE_NUM
, p_LETTER
, p_BUILDING
, p_STRUCTURE
, p_ESTATE
, p_LONGITUDE
, p_LATITUDE
, p_CADASTRE_NUM
, p_SECTION_COUNT
, p_TYPE_DEVELOP
, p_AREA_DEV
, p_AREA_ALL_OBJECT
, p_AREA_LOT
, p_TECHNOLOGY
, p_MATERIAL_WALL
, p_PROJECT_TYPE
, p_PROJECT_NUMBER
, p_FLOOR_QNT_MIN
, p_FLOOR_QNT_MAX
, p_FLOOR_TYPE
, p_CLASS_TYPE
, p_CLASS
, p_HEIGHT_FLOOR
, p_FINISHING_TYPE_FLAT
, p_FINISHING_LEVEL_FLAT
, p_FINISHING_LEVEL_INSIDE
, p_GLAZING
, p_PARKING_TYPE
, p_PARKING_COUNT
, p_LIFT
, p_ESTIMATE
, p_FENCE
, p_SECURITY
, p_AREA_OBJECT
, p_AREA_OBJECT_STUDIO
, p_AREA_OBJECT_1
, p_AREA_OBJECT_2
, p_AREA_OBJECT_3
, p_AREA_OBJECT_4
, p_AREA_OBJECT_5
, p_AREA_OBJECT_6
, p_arae_studio_avg
, p_AREA_OBJECT_STUDIO_MIN
, p_AREA_OBJECT_STUDIO_MAX
, p_AREA_OBJECT_STUDIO_NOT_HEAT_MIN
, p_AREA_OBJECT_STUDIO_NOT_HEAT_MAX
, p_Area_object_1_av
, p_AREA_OBJECT_1_MIN
, p_AREA_OBJECT_1_MAX
, p_AREA_OBJECT_1_NOT_HEAT_MIN
, p_AREA_OBJECT_1_NOT_HEAT_MAX
, p_Area_object_2_av
, p_AREA_OBJECT_2_MIN
, p_AREA_OBJECT_2_MAX
, p_AREA_OBJECT_2_NOT_HEAT_MIN
, p_AREA_OBJECT_2_NOT_HEAT_MAX
, p_Area_object_3_av
, p_AREA_OBJECT_3_MIN
, p_AREA_OBJECT_3_MAX
, p_AREA_OBJECT_3_NOT_HEAT_MIN
, p_AREA_OBJECT_3_NOT_HEAT_MAX
, p_Area_object_4_av
, p_AREA_OBJECT_4_MIN
, p_AREA_OBJECT_4_MAX
, p_AREA_OBJECT_4_NOT_HEAT_MIN
, p_AREA_OBJECT_4_NOT_HEAT_MAX
, p_Area_object_5_av
, p_AREA_OBJECT_5_MIN
, p_AREA_OBJECT_5_MAX
, p_AREA_OBJECT_5_NOT_HEAT_MIN
, p_AREA_OBJECT_5_NOT_HEAT_MAX
, p_Area_object_6_av
, p_AREA_OBJECT_6_MIN
, p_AREA_OBJECT_6_MAX
, p_AREA_OBJECT_6_NOT_HEAT_MIN
, p_AREA_OBJECT_6_NOT_HEAT_MAX
, p_Area_object_mnogo
, p_Area_object_mnogo_av
, p_Area_object_mnogo_min
, p_Area_object_mnogo_max
, p_Studio
, p_Quantity_object
, p_QUANTITY_OBJECT_STUDIO
, p_Quantity_object_1
, p_Quantity_object_2
, p_Quantity_object_3
, p_Quantity_object_4
, p_Quantity_object_5
, p_Quantity_object_6
, p_Quantity_object_mnogo
, p_COMMERCE_PLACE
, p_AREA_COMMERCE
, p_DEVELOPER
, p_CONTACTS
, p_URL_INFO
, p_BUILDER
, p_Investor
, p_architect
, p_DATE_PERMIT
, p_NUMBER_PERMIT
, p_BEGIN_SALE
, p_BEGIN_BUILT
, p_CONST_STAGE
, p_CONST_STATUS
, p_EXPL_PLAN
, p_EXPL_FACT
, p_impl_end
, p_expl_start
, p_delay_sheduly
, p_EXPL_DATE
, p_EXPL_NUMBER
, p_INFR_TYPE
, p_CONTRACT_TYPE
, p_INSTALLMENT_PLAN
, p_MORTGAGE
, p_Price_min_object
, p_Price_avg_object
, p_Price_max_object
, p_Price_avg_1
, p_Price_avg_2
, p_Price_avg_3
, p_Price_avg_4
, p_Price_avg_5
, p_Price_avg_6
, p_Price_avg_mnogo
, p_Quantity_sell_object
, p_Quantity_sell_1
, p_Quantity_sell_2
, p_Quantity_sell_3
, p_Quantity_sell_4
, p_Quantity_sell_5
, p_Quantity_sell_6
, p_total_n_rooms
, p_koefficent
, p_sale_temp_kavrtal
, p_sale_temp_from_start
, p_avg_flat_area
, p_total_area_offer
, p_total_whoole_price
, p_total_area_offer_1r
, p_total_wh_price_1r
, p_total_area_offer_2r
, p_total_wh_price_2r
, p_total_area_offer_3r
, p_total_wh_price_3r
, p_total_area_offer_nr
, p_total_wh_price_nr
, p_quotas
, p_update_category
, p_SOURCE_DESC
, p_DATE_RESEARCH
, p_DATE_IN_BASE
, p_SALE_STATUS
, p_insert_date
, p_comment_text
);
if o_result = 'exit' then
update rrb.rrb_temporary_load set
id = p_id
,date_rec = p_date_rec
,batch_number = p_batch_number
,n_comon = p_n_comon
,n_kvartal = p_n_kvartal
,report_kvartal = p_report_kvartal
,OBJECTID = p_OBJECTID
,komplex = p_komplex
,ADDRESS = p_ADDRESS
,km_mkad = p_km_mkad
,direction = p_direction
,SUBJECT = p_SUBJECT
,KOD_OKATO = p_KOD_OKATO
,Kod_cadastre = p_Kod_cadastre
,SUBJECT_rayon = p_SUBJECT_rayon
,REGION = p_REGION
,SETTLEMENT = p_SETTLEMENT
,CITY = p_CITY
,VGT = p_VGT
,STREET_TYPE = p_STREET_TYPE
,STREET = p_STREET
,HOUSE_NUM = p_HOUSE_NUM
,LETTER = p_LETTER
,BUILDING = p_BUILDING
,STRUCTURE = p_STRUCTURE
,ESTATE = p_ESTATE
,LONGITUDE = p_LONGITUDE
,LATITUDE = p_LATITUDE
,CADASTRE_NUM = p_CADASTRE_NUM
,SECTION_COUNT = p_SECTION_COUNT
,TYPE_DEVELOP = p_TYPE_DEVELOP
,AREA_DEV = p_AREA_DEV
,AREA_ALL_OBJECT = p_AREA_ALL_OBJECT
,AREA_LOT = p_AREA_LOT
,TECHNOLOGY = p_TECHNOLOGY
,MATERIAL_WALL = p_MATERIAL_WALL
,PROJECT_TYPE = p_PROJECT_TYPE
,PROJECT_NUMBER = p_PROJECT_NUMBER
,FLOOR_QNT_MIN = p_FLOOR_QNT_MIN
,FLOOR_QNT_MAX = p_FLOOR_QNT_MAX
,FLOOR_TYPE = p_FLOOR_TYPE
,CLASS_TYPE = p_CLASS_TYPE
,CLASS = p_CLASS
,HEIGHT_FLOOR = p_HEIGHT_FLOOR
,FINISHING_TYPE_FLAT = p_FINISHING_TYPE_FLAT
,FINISHING_LEVEL_FLAT = p_FINISHING_LEVEL_FLAT
,FINISHING_LEVEL_INSIDE = p_FINISHING_LEVEL_INSIDE
,GLAZING = p_GLAZING
,PARKING_TYPE = p_PARKING_TYPE
,PARKING_COUNT = p_PARKING_COUNT
,LIFT = p_LIFT
,ESTIMATE = p_ESTIMATE
,FENCE = p_FENCE
,SECURITY = p_SECURITY
,AREA_OBJECT = p_AREA_OBJECT
,AREA_OBJECT_STUDIO = p_AREA_OBJECT_STUDIO
,AREA_OBJECT_1 = p_AREA_OBJECT_1
,AREA_OBJECT_2 = p_AREA_OBJECT_2
,AREA_OBJECT_3 = p_AREA_OBJECT_3
,AREA_OBJECT_4 = p_AREA_OBJECT_4
,AREA_OBJECT_5 = p_AREA_OBJECT_5
,AREA_OBJECT_6 = p_AREA_OBJECT_6
,arae_studio_avg = p_arae_studio_avg
,AREA_OBJECT_STUDIO_MIN = p_AREA_OBJECT_STUDIO_MIN
,AREA_OBJECT_STUDIO_MAX = p_AREA_OBJECT_STUDIO_MAX
,AREA_OBJECT_STUDIO_NOT_HEAT_MIN = p_AREA_OBJECT_STUDIO_NOT_HEAT_MIN
,AREA_OBJECT_STUDIO_NOT_HEAT_MAX = p_AREA_OBJECT_STUDIO_NOT_HEAT_MAX
,Area_object_1_av = p_Area_object_1_av
,AREA_OBJECT_1_MIN = p_AREA_OBJECT_1_MIN
,AREA_OBJECT_1_MAX = p_AREA_OBJECT_1_MAX
,AREA_OBJECT_1_NOT_HEAT_MIN = p_AREA_OBJECT_1_NOT_HEAT_MIN
,AREA_OBJECT_1_NOT_HEAT_MAX = p_AREA_OBJECT_1_NOT_HEAT_MAX
,Area_object_2_av = p_Area_object_2_av
,AREA_OBJECT_2_MIN = p_AREA_OBJECT_2_MIN
,AREA_OBJECT_2_MAX = p_AREA_OBJECT_2_MAX
,AREA_OBJECT_2_NOT_HEAT_MIN = p_AREA_OBJECT_2_NOT_HEAT_MIN
,AREA_OBJECT_2_NOT_HEAT_MAX = p_AREA_OBJECT_2_NOT_HEAT_MAX
,Area_object_3_av = p_Area_object_3_av
,AREA_OBJECT_3_MIN = p_AREA_OBJECT_3_MIN
,AREA_OBJECT_3_MAX = p_AREA_OBJECT_3_MAX
,AREA_OBJECT_3_NOT_HEAT_MIN = p_AREA_OBJECT_3_NOT_HEAT_MIN
,AREA_OBJECT_3_NOT_HEAT_MAX = p_AREA_OBJECT_3_NOT_HEAT_MAX
,Area_object_4_av = p_Area_object_4_av
,AREA_OBJECT_4_MIN = p_AREA_OBJECT_4_MIN
,AREA_OBJECT_4_MAX = p_AREA_OBJECT_4_MAX
,AREA_OBJECT_4_NOT_HEAT_MIN = p_AREA_OBJECT_4_NOT_HEAT_MIN
,AREA_OBJECT_4_NOT_HEAT_MAX = p_AREA_OBJECT_4_NOT_HEAT_MAX
,Area_object_5_av = p_Area_object_5_av
,AREA_OBJECT_5_MIN = p_AREA_OBJECT_5_MIN
,AREA_OBJECT_5_MAX = p_AREA_OBJECT_5_MAX
,AREA_OBJECT_5_NOT_HEAT_MIN = p_AREA_OBJECT_5_NOT_HEAT_MIN
,AREA_OBJECT_5_NOT_HEAT_MAX = p_AREA_OBJECT_5_NOT_HEAT_MAX
,Area_object_6_av = p_Area_object_6_av
,AREA_OBJECT_6_MIN = p_AREA_OBJECT_6_MIN
,AREA_OBJECT_6_MAX = p_AREA_OBJECT_6_MAX
,AREA_OBJECT_6_NOT_HEAT_MIN = p_AREA_OBJECT_6_NOT_HEAT_MIN
,AREA_OBJECT_6_NOT_HEAT_MAX = p_AREA_OBJECT_6_NOT_HEAT_MAX
,Area_object_mnogo = p_Area_object_mnogo
,Area_object_mnogo_av = p_Area_object_mnogo_av
,Area_object_mnogo_min = p_Area_object_mnogo_min
,Area_object_mnogo_max = p_Area_object_mnogo_max
,Studio = p_Studio
,Quantity_object = p_Quantity_object
,QUANTITY_OBJECT_STUDIO = p_QUANTITY_OBJECT_STUDIO
,Quantity_object_1 = p_Quantity_object_1
,Quantity_object_2 = p_Quantity_object_2
,Quantity_object_3 = p_Quantity_object_3
,Quantity_object_4 = p_Quantity_object_4
,Quantity_object_5 = p_Quantity_object_5
,Quantity_object_6 = p_Quantity_object_6
,Quantity_object_mnogo = p_Quantity_object_mnogo
,COMMERCE_PLACE = p_COMMERCE_PLACE
,AREA_COMMERCE = p_AREA_COMMERCE
,DEVELOPER = p_DEVELOPER
,CONTACTS = p_CONTACTS
,URL_INFO = p_URL_INFO
,BUILDER = p_BUILDER
,Investor = p_Investor
,architect = p_architect
,DATE_PERMIT = p_DATE_PERMIT
,NUMBER_PERMIT = p_NUMBER_PERMIT
,BEGIN_SALE = p_BEGIN_SALE
,BEGIN_BUILT = p_BEGIN_BUILT
,CONST_STAGE = p_CONST_STAGE
,CONST_STATUS = p_CONST_STATUS
,EXPL_PLAN = p_EXPL_PLAN
,EXPL_FACT = p_EXPL_FACT
,impl_end = p_impl_end
,expl_start = p_expl_start
,delay_sheduly = p_delay_sheduly
,EXPL_DATE = p_EXPL_DATE
,EXPL_NUMBER = p_EXPL_NUMBER
,INFR_TYPE = p_INFR_TYPE
,CONTRACT_TYPE = p_CONTRACT_TYPE
,INSTALLMENT_PLAN = p_INSTALLMENT_PLAN
,MORTGAGE = p_MORTGAGE
,Price_min_object = p_Price_min_object
,Price_avg_object = p_Price_avg_object
,Price_max_object = p_Price_max_object
,Price_avg_1 = p_Price_avg_1
,Price_avg_2 = p_Price_avg_2
,Price_avg_3 = p_Price_avg_3
,Price_avg_4 = p_Price_avg_4
,Price_avg_5 = p_Price_avg_5
,Price_avg_6 = p_Price_avg_6
,Price_avg_mnogo = p_Price_avg_mnogo
,Quantity_sell_object = p_Quantity_sell_object
,Quantity_sell_1 = p_Quantity_sell_1
,Quantity_sell_2 = p_Quantity_sell_2
,Quantity_sell_3 = p_Quantity_sell_3
,Quantity_sell_4 = p_Quantity_sell_4
,Quantity_sell_5 = p_Quantity_sell_5
,Quantity_sell_6 = p_Quantity_sell_6
,total_n_rooms = p_total_n_rooms
,koefficent = p_koefficent
,sale_temp_kavrtal = p_sale_temp_kavrtal
,sale_temp_from_start = p_sale_temp_from_start
,avg_flat_area = p_avg_flat_area
,total_area_offer = p_total_area_offer
,total_whoole_price = p_total_whoole_price
,total_area_offer_1r = p_total_area_offer_1r
,total_wh_price_1r = p_total_wh_price_1r
,total_area_offer_2r = p_total_area_offer_2r
,total_wh_price_2r = p_total_wh_price_2r
,total_area_offer_3r = p_total_area_offer_3r
,total_wh_price_3r = p_total_wh_price_3r
,total_area_offer_nr = p_total_area_offer_nr
,total_wh_price_nr = p_total_wh_price_nr
,quotas = p_quotas
,update_category = p_update_category
,SOURCE_DESC = p_SOURCE_DESC
,DATE_RESEARCH = p_DATE_RESEARCH
,DATE_IN_BASE = p_DATE_IN_BASE
,SALE_STATUS = p_SALE_STATUS
,insert_date = p_insert_date
,comment_text = p_comment_text
;set o_result = 'good_update';
end if;
if p_mode = 'D' then
delete from rrb.rrb_temporary_load where id = p_id;
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

-- Dump completed on 2012-07-23 19:48:30