/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.29-MariaDB : Database - blizzcms
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `fx_api_char` */

insert  into `fx_api_char`(`id`,`type`) values (1,'char_principal'),(2,'char_internal'),(3,'char_position'),(4,'char_skins'),(5,'char_times'),(6,'char_logins'),(7,'char_points'),(8,'char_kills'),(9,'char_personal');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
