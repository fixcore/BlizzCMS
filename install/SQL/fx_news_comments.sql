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
/*Table structure for table `fx_news_comments` */

DROP TABLE IF EXISTS `fx_news_comments`;

CREATE TABLE `fx_news_comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_new` int(10) NOT NULL,
  `commentary` text NOT NULL,
  `date` int(10) NOT NULL,
  `author` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_new` (`id_new`),
  KEY `author` (`author`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `fx_news_comments` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
