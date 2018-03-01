/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.39-log : Database - blizzcms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `fx_ranks_permissions` */

DROP TABLE IF EXISTS `fx_ranks_permissions`;

CREATE TABLE `fx_ranks_permissions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

/*Data for the table `fx_ranks_permissions` */

insert  into `fx_ranks_permissions`(`id`,`name`) values (1,'Admin'),(2,'Panel'),(3,'Login'),(4,'Register'),(5,'Faq'),(6,'Bugtracker'),(7,'Pvp Stats'),(8,'Arena Stats'),(9,'News'),(10,'Forums'),(11,'Store'),(12,'Chat'),(13,'Armory'),(14,'Changelogs'),(15,'Donate'),(16,'Vote'),(17,'Events'),(18,'API'),(19,'Maintenance');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
