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
/*Table structure for table `fx_head_items` */

DROP TABLE IF EXISTS `fx_head_items`;

CREATE TABLE `fx_head_items` (
  `item_id` int(10) DEFAULT NULL,
  `level` int(10) DEFAULT NULL,
  `quality_id` int(10) DEFAULT NULL,
  `class_id` int(10) DEFAULT NULL,
  `subclass_id` int(10) DEFAULT NULL,
  `display_id` int(10) DEFAULT NULL,
  `inventorySlot_id` int(100) DEFAULT NULL,
  `icon_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
