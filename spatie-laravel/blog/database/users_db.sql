/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 8.0.19-0ubuntu0.19.10.3 : Database - users_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`users_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `users_db`;

/*Table structure for table `articles` */

DROP TABLE IF EXISTS `articles`;

CREATE TABLE `articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `articles` */

insert  into `articles`(`id`,`user_id`,`title`,`created_at`,`updated_at`) values 
(1,NULL,'gegegeg',NULL,NULL),
(2,NULL,'gegegeg',NULL,NULL);

/*Table structure for table `department` */

DROP TABLE IF EXISTS `department`;

CREATE TABLE `department` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `empname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deptname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `department` */

insert  into `department`(`id`,`empname`,`deptname`,`created_at`,`updated_at`) values 
(2,'karan','technology','2020-01-31 19:18:00','2020-01-31 19:18:00'),
(3,'Deepika','testing','2020-01-31 19:18:00','2020-01-31 19:18:00'),
(4,'jayesh','sales','2020-01-31 19:18:00','2020-01-31 19:18:00');

/*Table structure for table `employees` */

DROP TABLE IF EXISTS `employees`;

CREATE TABLE `employees` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `empname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobileno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `employees` */

insert  into `employees`(`id`,`empname`,`mobileno`,`address`,`created_at`,`updated_at`) values 
(1,'Rohan','9890453212','Mumbai',NULL,NULL),
(3,'Deepika','9890453252','Mumbai','2020-01-31 00:00:00','2020-01-31 00:00:00'),
(4,'jayesh','9890342156','bandup','2020-01-31 18:37:02','2020-01-31 18:37:02'),
(5,'karan','9890453254','Mumbai',NULL,NULL),
(6,'roshan','9890342178','mulund','2020-01-31 18:50:02','2020-01-31 18:50:02'),
(7,'karan','9890453254','Mumbai',NULL,NULL),
(9,'karan','9890453254','Mumbai',NULL,NULL),
(10,'sukanta','9090123421','kalyan','2020-01-31 18:37:02','2020-01-31 18:37:02'),
(20,'jayesh','9890342156','bandup','2020-01-31 18:37:02','2020-01-31 18:37:02');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2020_01_30_074857_create_tickets_table',1),
(4,'2020_01_31_102505_department',2),
(5,'2020_01_31_103221_create_employees_table',2),
(6,'2020_01_31_103506_create_department_table',3);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `tickets` */

DROP TABLE IF EXISTS `tickets`;

CREATE TABLE `tickets` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tickets` */

insert  into `tickets`(`id`,`user_id`,`title`,`description`,`created_at`,`updated_at`) values 
(3,1,'Street Dance3 fssfsf','Street Dance is best movie','2020-01-30 11:38:24','2020-02-04 11:25:03'),
(5,1,'bajirao mastani','bajirao','2020-01-30 13:59:23','2020-01-30 13:59:23'),
(7,1,'padamavati adadd','sadsdafsff','2020-01-31 06:38:38','2020-01-31 06:38:38'),
(8,1,'cdfad','vfs','2020-01-31 06:53:29','2020-01-31 06:53:29'),
(9,1,'adadad','addaad','2020-01-31 06:55:57','2020-01-31 06:55:57'),
(10,1,'bala','bala','2020-01-31 06:57:02','2020-01-31 06:57:02'),
(11,1,'houseful','houseful','2020-01-31 06:58:10','2020-01-31 06:58:10'),
(12,1,'houseful 2','houseful','2020-01-31 06:58:27','2020-01-31 06:59:53'),
(13,1,'good newz 2','is best movie','2020-01-31 07:23:15','2020-01-31 07:30:41'),
(15,1,'housefull 3','aadaadad','2020-01-31 07:30:01','2020-01-31 07:30:01'),
(16,1,'vivah','sadddd',NULL,NULL),
(18,1,'masti 2','masti dsfsfs','2020-02-03 06:05:23','2020-02-04 07:17:23'),
(19,1,'fssfs','dsffs','2020-02-04 11:24:52','2020-02-04 11:24:52');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
