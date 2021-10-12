/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.20-MariaDB : Database - db_katalog
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
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_kunjungan` */

insert  into `tbl_kunjungan`(`id_kunjungan`,`tanggal_kunjungan`,`ip_address`,`id_post`) values 
(43,'2021-10-12 19:29:30','::1',19);

/*Table structure for table `tbl_post` */

DROP TABLE IF EXISTS `tbl_post`;

CREATE TABLE `tbl_post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `judul_post` varchar(100) NOT NULL,
  `isi_post` text DEFAULT NULL,
  `gambar_post` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_post` */

insert  into `tbl_post`(`id_post`,`judul_post`,`isi_post`,`gambar_post`) values 
(19,'Rumah 1','Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa temporibus reiciendis, possimus consectetur, numquam mollitia rem voluptatum explicabo. Consectetur aspernatur, aut ipsa architecto atque repellendus, quas ad ipsum illo rerum repellat saepe obcaecati, dolorem aperiam vitae. Perspiciatis ea aliquam ipsum incidunt nostrum rerum harum, exercitationem molestiae pariatur sint tenetur alias laboriosam maxime, atque et fugit accusamus voluptates nobis placeat quidem omnis officia delectus dicta corrupti? Eius dignissimos reprehenderit, nam sapiente reiciendis harum est consequuntur ipsum nostrum dolorum sequi delectus error ducimus dolorem nobis consectetur quos. Blanditiis reiciendis, consectetur repellendus placeat neque, delectus velit deleniti ab beatae nostrum illo, debitis minus!','2021-10-12-13-27-36_6165712834d53.jpg'),
(20,'Rumah 2','Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa temporibus reiciendis, possimus consectetur, numquam mollitia rem voluptatum explicabo. Consectetur aspernatur, aut ipsa architecto atque repellendus, quas ad ipsum illo rerum repellat saepe obcaecati, dolorem aperiam vitae. Perspiciatis ea aliquam ipsum incidunt nostrum rerum harum, exercitationem molestiae pariatur sint tenetur alias laboriosam maxime, atque et fugit accusamus voluptates nobis placeat quidem omnis officia delectus dicta corrupti? Eius dignissimos reprehenderit, nam sapiente reiciendis harum est consequuntur ipsum nostrum dolorum sequi delectus error ducimus dolorem nobis consectetur quos. Blanditiis reiciendis, consectetur repellendus placeat neque, delectus velit deleniti ab beatae nostrum illo, debitis minus!','2021-10-12-13-27-58_6165713e6eb5d.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
