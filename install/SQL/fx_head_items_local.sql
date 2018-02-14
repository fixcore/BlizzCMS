/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.58-0ubuntu0.14.04.1 : Database - blizzcms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `fx_head_items_local` */

DROP TABLE IF EXISTS `fx_head_items_local`;

CREATE TABLE `fx_head_items_local` (
  `id` int(10) DEFAULT NULL,
  `name_de` varchar(100) DEFAULT NULL,
  `quality_de` varchar(100) DEFAULT NULL,
  `class_de` varchar(100) DEFAULT NULL,
  `subclass_de` varchar(100) DEFAULT NULL,
  `inventorySlot_de` varchar(100) DEFAULT NULL,
  `htmlTooltip_de` text,
  `json_de` text,
  `jsonEquip_de` text,
  `name_en` varchar(100) DEFAULT NULL,
  `quality_en` varchar(100) DEFAULT NULL,
  `class_en` varchar(100) DEFAULT NULL,
  `subclass_en` varchar(100) DEFAULT NULL,
  `inventorySlot_en` varchar(100) DEFAULT NULL,
  `htmlTooltip_en` text,
  `json_en` text,
  `jsonEquip_en` text,
  `name_es` varchar(100) DEFAULT NULL,
  `quality_es` varchar(100) DEFAULT NULL,
  `class_es` varchar(100) DEFAULT NULL,
  `subclass_es` varchar(100) DEFAULT NULL,
  `inventorySlot_es` varchar(100) DEFAULT NULL,
  `htmlTooltip_es` text,
  `json_es` text,
  `jsonEquip_es` text,
  `name_fr` varchar(100) DEFAULT NULL,
  `quality_fr` varchar(100) DEFAULT NULL,
  `class_fr` varchar(100) DEFAULT NULL,
  `subclass_fr` varchar(100) DEFAULT NULL,
  `inventorySlot_fr` varchar(100) DEFAULT NULL,
  `htmlTooltip_fr` text,
  `json_fr` text,
  `jsonEquip_fr` text,
  `name_it` varchar(100) DEFAULT NULL,
  `quality_it` varchar(100) DEFAULT NULL,
  `class_it` varchar(100) DEFAULT NULL,
  `subclass_it` varchar(100) DEFAULT NULL,
  `inventorySlot_it` varchar(100) DEFAULT NULL,
  `htmlTooltip_it` text,
  `json_it` text,
  `jsonEquip_it` text,
  `name_pt` varchar(100) DEFAULT NULL,
  `quality_pt` varchar(100) DEFAULT NULL,
  `class_pt` varchar(100) DEFAULT NULL,
  `subclass_pt` varchar(100) DEFAULT NULL,
  `inventorySlot_pt` varchar(100) DEFAULT NULL,
  `htmlTooltip_pt` text,
  `json_pt` text,
  `jsonEquip_pt` text,
  `name_ru` varchar(100) DEFAULT NULL,
  `quality_ru` varchar(100) DEFAULT NULL,
  `class_ru` varchar(100) DEFAULT NULL,
  `subclass_ru` varchar(100) DEFAULT NULL,
  `inventorySlot_ru` varchar(100) DEFAULT NULL,
  `htmlTooltip_ru` text,
  `json_ru` text,
  `jsonEquip_ru` text,
  `name_ko` varchar(100) DEFAULT NULL,
  `quality_ko` varchar(100) DEFAULT NULL,
  `class_ko` varchar(100) DEFAULT NULL,
  `subclass_ko` varchar(100) DEFAULT NULL,
  `inventorySlot_ko` varchar(100) DEFAULT NULL,
  `htmlTooltip_ko` text,
  `json_ko` text,
  `jsonEquip_ko` text,
  `name_cn` varchar(100) DEFAULT NULL,
  `quality_cn` varchar(100) DEFAULT NULL,
  `class_cn` varchar(100) DEFAULT NULL,
  `subclass_cn` varchar(100) DEFAULT NULL,
  `inventorySlot_cn` varchar(100) DEFAULT NULL,
  `htmlTooltip_cn` text,
  `json_cn` text,
  `jsonEquip_cn` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
