/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 5.7.33 : Database - rentalmotor
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`rentalmotor` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `rentalmotor`;

/*Table structure for table `carts` */

DROP TABLE IF EXISTS `carts`;

CREATE TABLE `carts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `userid` bigint(20) unsigned NOT NULL,
  `jnsid` bigint(20) unsigned NOT NULL,
  `mtrid` bigint(20) unsigned NOT NULL,
  `durasi` int(11) NOT NULL,
  `waktu` date DEFAULT NULL,
  `waktu_kembali` date DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carts_userid_foreign` (`userid`),
  KEY `carts_jnsid_foreign` (`jnsid`),
  KEY `carts_mtrid_foreign` (`mtrid`),
  CONSTRAINT `carts_jnsid_foreign` FOREIGN KEY (`jnsid`) REFERENCES `jnsmotors` (`id`) ON DELETE CASCADE,
  CONSTRAINT `carts_mtrid_foreign` FOREIGN KEY (`mtrid`) REFERENCES `motors` (`id`) ON DELETE CASCADE,
  CONSTRAINT `carts_userid_foreign` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `carts` */

insert  into `carts`(`id`,`userid`,`jnsid`,`mtrid`,`durasi`,`waktu`,`waktu_kembali`,`status`,`created_at`,`updated_at`) values 
(13,1,2,4,1,'2022-12-11','2022-12-03',1,'2022-11-19 07:33:04','2022-12-04 22:07:07'),
(14,1,2,3,2,'2022-12-18','2022-10-06',1,'2022-11-19 08:02:04','2022-12-04 22:07:07'),
(18,2,2,4,1,'2022-12-11','2022-12-04',2,'2022-11-27 08:37:07','2022-12-04 10:49:51'),
(19,2,1,5,1,'2022-12-11',NULL,1,'2022-12-04 10:42:15','2022-12-04 10:49:51'),
(20,1,3,6,1,'2022-12-11',NULL,1,'2022-12-04 21:33:33','2022-12-04 22:07:07'),
(23,14,2,7,1,'2022-12-12','2022-12-05',1,'2022-12-05 10:57:42','2022-12-05 10:58:56');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `jnsmotors` */

DROP TABLE IF EXISTS `jnsmotors`;

CREATE TABLE `jnsmotors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jnsmotors` */

insert  into `jnsmotors`(`id`,`name`,`created_at`,`updated_at`) values 
(1,'gigi','2022-10-29 14:12:41','2022-10-29 14:12:43'),
(2,'matic','2022-10-29 14:17:14','2022-10-29 14:17:19'),
(3,'moge','2022-10-29 14:17:21','2022-10-29 14:17:26'),
(4,'moge < 300cc','2022-10-29 14:17:24','2022-10-29 14:17:28');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2022_10_29_064702_create_jnsmotors_table',1),
(6,'2022_10_29_064726_create_motors_table',1),
(7,'2022_10_29_064738_create_carts_table',1),
(8,'2022_10_29_064743_create_transaksis_table',1);

/*Table structure for table `motors` */

DROP TABLE IF EXISTS `motors`;

CREATE TABLE `motors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `jnsid` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plat_nomor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `motors_jnsid_foreign` (`jnsid`),
  CONSTRAINT `motors_jnsid_foreign` FOREIGN KEY (`jnsid`) REFERENCES `jnsmotors` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `motors` */

insert  into `motors`(`id`,`jnsid`,`name`,`harga`,`status`,`plat_nomor`,`warna`,`image`,`deskripsi`,`created_at`,`updated_at`) values 
(3,2,'Beat old','100000','Sedang di pakai','B 8989 KLL','hitam','20221110141720.jpeg','MOTOR TAHUN 2012','2022-11-10 14:17:20','2022-12-04 22:07:07'),
(4,2,'Nmax 2019','200000','Sedang di pakai','B 9899 JJJ','merah','20221110141808.jpeg','Motor bagus ,stnk komplit','2022-11-10 14:18:08','2022-12-04 22:07:07'),
(5,1,'Beat 2015','100000','Sedang di pakai','BF 9990 OKK','merah','20221114093604.jpeg','Beat 2015','2022-11-10 14:19:16','2022-12-04 10:49:51'),
(6,3,'Kawasaki zx-6r 2021 limited edition','3000000','Sedang di pakai','B 8999 KL','hijau','20221204212305.jpeg','MOTOR MEWAH ,LIMITED EDITION ,TERAWAT ,SEMUA KOMPLIT SIAP PAKAI','2022-12-04 21:23:05','2022-12-04 22:07:07'),
(7,2,'Honda Scoopy','130000','Ada di gudang','B 9999 LJ','hitam','20221204212445.jpeg','MOTOR IRIT ,SURAT KOMPLIT','2022-12-04 21:24:45','2022-12-05 11:00:45'),
(8,2,'Yamaha Lexi','200000','Ada di gudang','B 9930 KLO','hitam','20221204212601.webp','Knalpot racing ngebass adem,terawat,pajak surat komplit','2022-12-04 21:26:01','2022-12-04 21:26:01'),
(9,2,'Yamaha Mio J','100000','Ada di gudang','B 3388 KMK','putih','20221204212707.jpeg','PAJAK AMAN ,SURAT ADA ,TINGGAL PAKE GAS','2022-12-04 21:27:08','2022-12-04 21:27:08');

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `tanggapans` */

DROP TABLE IF EXISTS `tanggapans`;

CREATE TABLE `tanggapans` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `userid` int(10) NOT NULL,
  `tanggapan` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tanggapans` */

insert  into `tanggapans`(`id`,`userid`,`tanggapan`,`created_at`,`updated_at`) values 
(1,1,'bagus bang',NULL,NULL),
(2,2,'bagus sekali dari website ini apa lagi developer nya super ganteng cuy ',NULL,NULL),
(3,3,'bagus sekali dari website ini apa lagi developer nya super ganteng cuy ',NULL,NULL),
(4,4,'bagus sekali dari website ini apa lagi developer nya super ganteng cuy ',NULL,NULL),
(5,5,'bagus sekali dari website ini apa lagi developer nya super ganteng cuy ',NULL,NULL),
(6,6,'bagus sekali dari website ini apa lagi developer nya super ganteng cuy ',NULL,NULL),
(7,7,'bagus sekali dari website ini apa lagi developer nya super ganteng cuy ',NULL,NULL),
(8,8,'bagus sekali dari website ini apa lagi developer nya super ganteng cuy ',NULL,NULL),
(9,14,'bagus bet','2022-12-09 20:34:48','2022-12-09 20:34:48');

/*Table structure for table `transaksis` */

DROP TABLE IF EXISTS `transaksis`;

CREATE TABLE `transaksis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `userid` bigint(20) unsigned NOT NULL,
  `mtrid` bigint(20) unsigned NOT NULL,
  `durasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bayar` int(20) DEFAULT NULL,
  `metode_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transaksis_userid_foreign` (`userid`),
  KEY `transaksis_mtrid_foreign` (`mtrid`),
  CONSTRAINT `transaksis_mtrid_foreign` FOREIGN KEY (`mtrid`) REFERENCES `motors` (`id`) ON DELETE CASCADE,
  CONSTRAINT `transaksis_userid_foreign` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `transaksis` */

insert  into `transaksis`(`id`,`userid`,`mtrid`,`durasi`,`bayar`,`metode_pembayaran`,`total`,`kembalian`,`created_at`,`updated_at`) values 
(5,2,5,'1',100000,'cash',100000,0,'2022-12-04 10:49:51','2022-12-04 10:49:51'),
(6,1,6,'1',3000000,'cash',3000000,0,'2022-12-04 22:07:07','2022-12-04 22:07:07'),
(7,17,7,'1',130000,'cash',130000,0,'2022-12-05 10:58:56','2022-12-05 10:58:56');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`image`,`name`,`email`,`email_verified_at`,`password`,`level`,`remember_token`,`created_at`,`updated_at`) values 
(1,'20221114060712.png','mstaas','hanifmusthafa2005@gmail.com','2022-12-04 20:42:57','$2y$10$gresunnWZvA98IUc4ttuHel7kV4zb9Or8VEzUbKNRWnXFyytf1lra',3,NULL,'2022-10-29 07:07:52','2022-11-15 04:43:05'),
(2,NULL,'Udin Bahrudin','gamingtobat@gmail.com','2022-12-04 20:42:57','$2y$10$tyj62aMzIPnU0wphdWKwMugjqdD7D87DxhTouXalskuaOkzh1hcEC',3,NULL,'2022-11-15 04:24:21','2022-11-15 04:24:21'),
(3,NULL,'Asirwanda Prakasa S.Ked','widya66@example.org','2022-12-04 11:09:06','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',1,'7vC00PCiL5','2022-12-04 11:09:06','2022-12-04 11:09:06'),
(4,NULL,'Maida Purnawati','zaenab.narpati@example.net','2022-12-04 11:09:06','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',1,'j4IalluLrn','2022-12-04 11:09:06','2022-12-04 11:09:06'),
(5,NULL,'Karma Ibrani Rajata','sirait.ghani@example.org','2022-12-04 11:09:06','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',1,'HwYmUjXY7D','2022-12-04 11:09:06','2022-12-04 11:09:06'),
(6,NULL,'Widya Jamalia Lailasari S.E.','padmasari.ganda@example.com','2022-12-04 11:09:06','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',1,'ksocHQI39l','2022-12-04 11:09:06','2022-12-04 11:09:06'),
(10,NULL,'Ganjaran Bakda Narpati S.E.I','waluyo.rini@example.org','2022-12-04 11:09:06','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',1,'pmhfH68Utz','2022-12-04 11:09:06','2022-12-04 11:09:06'),
(11,NULL,'Mahdi Hardana Habibi','zsinaga@example.net','2022-12-04 11:09:06','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',1,'r8G3nZyFBW','2022-12-04 11:09:06','2022-12-04 11:09:06'),
(12,NULL,'Febi Padmasari','yprakasa@example.org','2022-12-04 11:09:06','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',1,'RS6djUlewo','2022-12-04 11:09:06','2022-12-04 11:09:06'),
(13,NULL,'Udin Bahrudin v2','udin123@gmail.com','2022-12-04 20:42:57','$2y$10$U4Ypx6CQ6JAxZGb1bdJlg.ZH3DccKAbZ4PBlx8j3i1GsWlyOVauU.',2,NULL,'2022-12-04 20:42:57','2022-12-04 20:42:57'),
(14,NULL,'mumumss','hanifmusthafa@gmail.com','2022-12-04 20:42:57','$2y$10$A9C0x2l2nHqsBquXoHioZuB2IUb596G4JuLf9BCfaBSDPdvj5Bwbe',1,'58izH7ZGdqs5swKmCUKGYpCTlLBVUXE8k9Z88IsF2LNqthOGN3i4rEXdWdLO','2022-12-04 20:51:41','2022-12-04 20:51:41'),
(17,NULL,'Udin Bahrudiner','gamingtobaasdast@gmail.com','2022-12-04 11:09:06','$2y$10$JspoXlCyLNj5urtFmspuNureNwLMUNAuEp6iIjzEVJmB9wqyKXY/q',1,NULL,'2022-12-04 20:59:08','2022-12-04 20:59:08'),
(18,NULL,'mus','musthafahanif2005@gmail.com','2022-12-04 20:42:57','$2y$10$pfmP9AQupcrU9d0.Tha0AeVANpb5Vj7d70B5QJj9G/dKZeZr/yMta',1,NULL,'2022-12-04 21:06:33','2022-12-04 21:06:33'),
(20,NULL,'Udin Bahrudin','gamindfsdfsgtobat@gmail.com',NULL,'$2y$10$upE5IaAW7OTSHp5YJc99CeslcUOI9tgrOEJIybu/cgrL1WXZat72m',1,NULL,'2022-12-05 21:36:28','2022-12-05 21:36:28'),
(21,NULL,'Udin Bahrudin','hanifmusthaf32a2005@gmail.com',NULL,'$2y$10$ryxy8kIP5IRhHfmM7ir/3eYeeT0Algpj8OTKs.WZp1WSwisMb2nQK',1,NULL,'2022-12-05 21:39:12','2022-12-05 21:39:12');

/*Table structure for table `validations` */

DROP TABLE IF EXISTS `validations`;

CREATE TABLE `validations` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `userid` bigint(12) DEFAULT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `no_hp` varchar(14) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `validations` */

insert  into `validations`(`id`,`userid`,`nik`,`no_hp`,`alamat`,`updated_at`,`created_at`) values 
(2,1,'3175070105050003','564564','Jl panjaitan 12','2022-11-17 15:53:51','2022-11-17 15:53:51'),
(3,2,'3434343434343434','343434343434','sfdfdfdfd','2022-11-27 08:41:32','2022-11-27 08:41:35'),
(4,17,'768768768','789798798','thgjh hgjhgj','2022-12-05 10:55:19','2022-12-05 10:55:19');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
