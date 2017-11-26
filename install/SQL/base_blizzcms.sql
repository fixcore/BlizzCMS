/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.37-log : Database - blizzcms
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

/*Table structure for table `fx_api_generator` */

DROP TABLE IF EXISTS `fx_api_generator`;

CREATE TABLE `fx_api_generator` (
  `id` int(10) NOT NULL,
  `type` int(1) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  KEY `type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `fx_chars_annotations` */

DROP TABLE IF EXISTS `fx_chars_annotations`;

CREATE TABLE `fx_chars_annotations` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `idchar` int(10) NOT NULL,
  `annotation` text NOT NULL,
  `date` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

/*Table structure for table `fx_country` */

DROP TABLE IF EXISTS `fx_country`;

CREATE TABLE `fx_country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=246 DEFAULT CHARSET=utf8;

/*Table structure for table `fx_events` */

DROP TABLE IF EXISTS `fx_events`;

CREATE TABLE `fx_events` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `date_event_start` int(10) NOT NULL,
  `date_event_end` int(10) NOT NULL,
  `date` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `fx_forum_category` */

DROP TABLE IF EXISTS `fx_forum_category`;

CREATE TABLE `fx_forum_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Table structure for table `fx_forum_forums` */

DROP TABLE IF EXISTS `fx_forum_forums`;

CREATE TABLE `fx_forum_forums` (
  `id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `category` int(10) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(100) NOT NULL DEFAULT 'icon1.png',
  `type` int(1) NOT NULL DEFAULT '1' COMMENT '1 = everyone | 2 = staff | 3 = staff post + everyone see',
  PRIMARY KEY (`id`),
  KEY `category` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Table structure for table `fx_forum_topics` */

DROP TABLE IF EXISTS `fx_forum_topics`;

CREATE TABLE `fx_forum_topics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `forums` int(10) unsigned NOT NULL,
  `title` varchar(100) CHARACTER SET latin1 NOT NULL,
  `author` int(10) unsigned NOT NULL,
  `date` int(10) unsigned NOT NULL,
  `content` text CHARACTER SET latin1 NOT NULL,
  `locked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pined` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `archivar` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`),
  KEY `id_3` (`id`),
  KEY `id_4` (`id`),
  KEY `id_5` (`id`),
  KEY `forums` (`forums`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Table structure for table `fx_news` */

DROP TABLE IF EXISTS `fx_news`;

CREATE TABLE `fx_news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'new.jpg' COMMENT 'assets/images/news',
  `description` text NOT NULL,
  `date` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

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

/*Table structure for table `fx_news_top` */

DROP TABLE IF EXISTS `fx_news_top`;

CREATE TABLE `fx_news_top` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_new` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_new` (`id_new`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Table structure for table `fx_questions` */

DROP TABLE IF EXISTS `fx_questions`;

CREATE TABLE `fx_questions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Table structure for table `fx_ranks` */

DROP TABLE IF EXISTS `fx_ranks`;

CREATE TABLE `fx_ranks` (
  `id` int(10) NOT NULL,
  `permission` int(1) NOT NULL DEFAULT '1',
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `fx_shop` */

DROP TABLE IF EXISTS `fx_shop`;

CREATE TABLE `fx_shop` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL COMMENT 'assets/images/shop',
  `price_donate` int(11) DEFAULT NULL,
  `price_vote` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '1' COMMENT '1-item | 2-query',
  `type_id` int(11) DEFAULT NULL COMMENT 'only if type = 1',
  `type_query` varchar(100) DEFAULT NULL COMMENT 'only if type = 2',
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `fx_shop_top` */

DROP TABLE IF EXISTS `fx_shop_top`;

CREATE TABLE `fx_shop_top` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_shop` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_shop` (`id_shop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `fx_slides` */

DROP TABLE IF EXISTS `fx_slides`;

CREATE TABLE `fx_slides` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'image.jpg' COMMENT 'assets/images/slides',
  `mobile_image` varchar(100) DEFAULT 'imagemobile.jpg' COMMENT 'assets/images/slides',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Table structure for table `fx_tags` */

DROP TABLE IF EXISTS `fx_tags`;

CREATE TABLE `fx_tags` (
  `id` int(10) NOT NULL,
  `tag` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `fx_users` */

DROP TABLE IF EXISTS `fx_users`;

CREATE TABLE `fx_users` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `question` int(10) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `year` int(10) NOT NULL,
  `month` int(10) NOT NULL,
  `day` int(10) NOT NULL,
  `date` int(10) NOT NULL,
  `profile` varchar(100) NOT NULL DEFAULT 'default.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `fx_users_annotations` */

DROP TABLE IF EXISTS `fx_users_annotations`;

CREATE TABLE `fx_users_annotations` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `iduser` int(10) NOT NULL,
  `annotation` text NOT NULL,
  `date` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
