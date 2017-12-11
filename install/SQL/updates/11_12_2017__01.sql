/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.37-log : Database - blizzcms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `fx_shop` */

DROP TABLE IF EXISTS `fx_shop`;

CREATE TABLE `fx_shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itemid` int(11) DEFAULT NULL,
  `type` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `price_dp` int(10) DEFAULT NULL,
  `price_vp` int(10) DEFAULT NULL,
  `iconname` varchar(255) NOT NULL,
  `groups` int(1) NOT NULL,
  `qquery` text CHARACTER SET utf8,
  `image` varchar(100) NOT NULL DEFAULT 'image1.jpg',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

/*Table structure for table `fx_shop_groups` */

DROP TABLE IF EXISTS `fx_shop_groups`;

CREATE TABLE `fx_shop_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Table structure for table `fx_shop_history` */

DROP TABLE IF EXISTS `fx_shop_history`;

CREATE TABLE `fx_shop_history` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `idshop` int(10) NOT NULL,
  `itemid` int(10) DEFAULT NULL,
  `date` int(10) NOT NULL,
  `accountid` int(10) NOT NULL,
  `charid` int(10) DEFAULT NULL,
  `method` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Table structure for table `fx_shop_top` */

DROP TABLE IF EXISTS `fx_shop_top`;

CREATE TABLE `fx_shop_top` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_shop` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_shop` (`id_shop`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
