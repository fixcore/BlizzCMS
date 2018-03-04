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
/*Table structure for table `fx_credits` */

DROP TABLE IF EXISTS `fx_credits`;

CREATE TABLE `fx_credits` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `accountid` int(11) unsigned NOT NULL,
  `dp` int(11) NOT NULL DEFAULT '0',
  `vp` int(11) NOT NULL DEFAULT '0',
  `lastVote` int(10) NOT NULL DEFAULT '1490579700',
  `maxVotes` int(10) unsigned NOT NULL DEFAULT '5',
  UNIQUE KEY `id_2` (`id`),
  UNIQUE KEY `accountId` (`accountid`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `fx_credits` */
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
