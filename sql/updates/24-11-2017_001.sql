/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.37-log : Database - blizzcms-extraction
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `fx_api_char` */

DROP TABLE IF EXISTS `fx_api_char`;

CREATE TABLE `fx_api_char` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `fx_api_char` */

insert  into `fx_api_char`(`id`,`type`) values (1,'char_principal');
insert  into `fx_api_char`(`id`,`type`) values (2,'char_internal');
insert  into `fx_api_char`(`id`,`type`) values (3,'char_position');
insert  into `fx_api_char`(`id`,`type`) values (4,'char_skins');
insert  into `fx_api_char`(`id`,`type`) values (5,'char_times');
insert  into `fx_api_char`(`id`,`type`) values (6,'char_logins');
insert  into `fx_api_char`(`id`,`type`) values (7,'char_points');
insert  into `fx_api_char`(`id`,`type`) values (8,'char_kills');
insert  into `fx_api_char`(`id`,`type`) values (9,'char_personal');

/*Table structure for table `fx_api_generator` */

DROP TABLE IF EXISTS `fx_api_generator`;

CREATE TABLE `fx_api_generator` (
  `id` int(10) NOT NULL,
  `type` int(1) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  KEY `type` (`type`),
  CONSTRAINT `fx_api_generator_ibfk_1` FOREIGN KEY (`type`) REFERENCES `fx_api_char` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `fx_api_generator` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
