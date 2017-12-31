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
/*Table structure for table `fx_bugtracker_type` */

DROP TABLE IF EXISTS `fx_bugtracker_type`;

CREATE TABLE `fx_bugtracker_type` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

/*Data for the table `fx_bugtracker_type` */

insert  into `fx_bugtracker_type`(`id`,`title`) values (1,'Achievements'),(2,'Battle Pets'),(3,'Battlegrounds - Arena'),(4,'Classes'),(5,'Creatures'),(6,'Exploits/Usebugs'),(7,'Garrison'),(8,'Guilds'),(9,'Instances'),(10,'Items'),(11,'Other'),(12,'Professions'),(13,'Quests'),(14,'Website');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
