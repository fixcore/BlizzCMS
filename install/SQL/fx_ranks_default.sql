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
/*Table structure for table `fx_ranks_default` */

DROP TABLE IF EXISTS `fx_ranks_default`;

CREATE TABLE `fx_ranks_default` (
  `id` int(10) NOT NULL,
  `permission` int(1) NOT NULL DEFAULT '1',
  `comment` varchar(100) DEFAULT 'Rank BlizzCMS',
  KEY `id` (`id`),
  KEY `fx_ranks_ibfk_1` (`permission`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `fx_ranks_default` */

insert  into `fx_ranks_default`(`id`,`permission`,`comment`) values (1,1,'Rank Admin'),(2,2,'Rank Visitor'),(3,3,'Rank User');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
