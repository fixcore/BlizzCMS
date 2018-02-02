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
/*Table structure for table `fx_avatars` */

DROP TABLE IF EXISTS `fx_avatars`;

CREATE TABLE `fx_avatars` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `type` int(1) NOT NULL DEFAULT '1' COMMENT '1 = user | 2 = staff',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `fx_avatars` */

DELETE FROM `fx_avatars` WHERE `id` BETWEEN 1 AND 17;

INSERT INTO `fx_avatars` (`id`, `name`, `type`) VALUES
(1, 'default.png', 1),
(2, 'arthas.png', 1),
(3, 'deathwing.png', 1),
(4, 'garrosh.png', 1),
(5, 'ghoul.png', 1),
(6, 'hogger.png', 1),
(7, 'illidan.png', 1),
(8, 'kelthuzad.png', 1),
(9, 'kiljeaden.png', 1),
(10, 'lurker.png', 1),
(11, 'maiev.png', 1),
(12, 'malfurion.png', 1),
(13, 'neptulon.png', 1),
(14, 'nerzhul.png', 1),
(15, 'velen.png', 1),
(16, 'worgen.png', 1),
(17, 'imp.png', 1),
(18, 'vault_guardian.png', 1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
