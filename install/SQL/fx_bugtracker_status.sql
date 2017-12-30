/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.38-log : Database - blizzcms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `fx_bugtracker_status` */

DROP TABLE IF EXISTS `fx_bugtracker_status`;

CREATE TABLE `fx_bugtracker_status` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `fx_bugtracker_status` */

insert  into `fx_bugtracker_status`(`id`,`title`) values (1,'New Report'),(2,'Waiting more information'),(3,'Report confirmed'),(4,'In progress'),(5,'Fix need test'),(6,'Fix need review'),(7,'Invalid'),(8,'Resolved');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
