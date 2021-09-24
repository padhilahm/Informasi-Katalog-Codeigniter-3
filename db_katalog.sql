/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.20-MariaDB : Database - db_properti
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_katalog` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_katalog`;

/*Table structure for table `tbl_akun` */

DROP TABLE IF EXISTS `tbl_akun`;

CREATE TABLE `tbl_akun` (
  `id_akun` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id_akun`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_akun` */

insert  into `tbl_akun`(`id_akun`,`username`,`password`) values 
(1,'admin@admin.com','admin');

/*Table structure for table `tbl_kunjungan` */

DROP TABLE IF EXISTS `tbl_kunjungan`;

CREATE TABLE `tbl_kunjungan` (
  `id_kunjungan` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_kunjungan` timestamp NOT NULL DEFAULT current_timestamp(),
  `ip_address` varchar(25) NOT NULL DEFAULT '127.0.0.1',
  `id_post` int(11) NOT NULL,
  PRIMARY KEY (`id_kunjungan`),
  KEY `fk_tbl_kunjungan_tbl_post` (`id_post`),
  CONSTRAINT `fk_tbl_kunjungan_tbl_post` FOREIGN KEY (`id_post`) REFERENCES `tbl_post` (`id_post`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_kunjungan` */

insert  into `tbl_kunjungan`(`id_kunjungan`,`tanggal_kunjungan`,`ip_address`,`id_post`) values 
(6,'2021-09-23 23:46:52','::1',9),
(12,'2021-09-23 23:48:50','::1',9);

/*Table structure for table `tbl_post` */

DROP TABLE IF EXISTS `tbl_post`;

CREATE TABLE `tbl_post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `judul_post` varchar(100) NOT NULL,
  `isi_post` text DEFAULT NULL,
  `gambar_post` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_post` */

insert  into `tbl_post`(`id_post`,`judul_post`,`isi_post`,`gambar_post`) values 
(9,'Citra  Mitra City','Berikut merupakan informasi terkait perumahan Citra Mitra City yang berlokasi di Banjarbaru','2021-09-23-17-13-28_614c99983f5af.jpg'),
(11,'Cluster Alamanda','Berikut adalah informasi perumahan daerah Banjarmasin tepatnya di Komplek Green Yakin Cluster Alamanda','2021-09-23-17-48-38_614ca1d65f6f1.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
