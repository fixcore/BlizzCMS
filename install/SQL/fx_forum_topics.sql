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
/*Table structure for table `fx_forum_topics` */

DROP TABLE IF EXISTS `fx_forum_topics`;

CREATE TABLE `fx_forum_topics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `forums` int(10) unsigned NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `author` int(10) unsigned NOT NULL,
  `date` int(10) unsigned NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `locked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pined` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `archivar` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `fx_forum_topics` */
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
