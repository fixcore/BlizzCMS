/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.7.21-0ubuntu0.16.04.1 : Database - blizzcms
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

/*Table structure for table `fx_realms` */

DROP TABLE IF EXISTS `fx_realms`;

CREATE TABLE `fx_realms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hostname` varchar(255) DEFAULT '127.0.0.1',
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `char_database` varchar(255) DEFAULT NULL,
  `realmID` int(1) NOT NULL,
  `console_username` varchar(255) DEFAULT NULL,
  `console_password` varchar(255) DEFAULT NULL,
  `console_port` int(6) DEFAULT '7878',
  `emulator` varchar(255) DEFAULT 'TC',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `fx_realms` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
