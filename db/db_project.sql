/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.5.5-10.1.16-MariaDB : Database - db_project
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_project` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_project`;

/*Table structure for table `tb_bobot` */

DROP TABLE IF EXISTS `tb_bobot`;

CREATE TABLE `tb_bobot` (
  `id_bobot` int(11) NOT NULL AUTO_INCREMENT,
  `kriteria_penilaian` text,
  `bobot` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_bobot`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tb_bobot` */

insert  into `tb_bobot`(`id_bobot`,`kriteria_penilaian`,`bobot`) values (1,'Rata – rata nilai rapot 1 semester terakhir',5),(2,'Ranking',4),(3,'Absensi (Jumlah ijin dan tanpa keterangan)',3),(4,'Kegiatan Ekstrakurikuler',3),(5,'Sikap',5);

/*Table structure for table `tb_kepentingan` */

DROP TABLE IF EXISTS `tb_kepentingan`;

CREATE TABLE `tb_kepentingan` (
  `id_tk` int(11) NOT NULL AUTO_INCREMENT,
  `predikat` text,
  `bobot` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_tk`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tb_kepentingan` */

insert  into `tb_kepentingan`(`id_tk`,`predikat`,`bobot`) values (1,'Sangat Kurang',1),(2,'Kurang',2),(3,'Cukup',3),(4,'Baik',4),(5,'Sangat Baik',5);

/*Table structure for table `tb_kriteria` */

DROP TABLE IF EXISTS `tb_kriteria`;

CREATE TABLE `tb_kriteria` (
  `id_kriteria` int(11) NOT NULL AUTO_INCREMENT,
  `kriteria_penilaian` text,
  `kriteria` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tb_kriteria` */

insert  into `tb_kriteria`(`id_kriteria`,`kriteria_penilaian`,`kriteria`) values (1,'Rata – rata nilai rapot 1 semester terakhir','C1'),(2,'Ranking','C2'),(3,'Absensi (Jumlah ijin dan tanpa keterangan)','C3'),(4,'Kegiatan Ekstrakurikuler','C4'),(5,'Sikap','C5');

/*Table structure for table `tb_nilai` */

DROP TABLE IF EXISTS `tb_nilai`;

CREATE TABLE `tb_nilai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_murid` varchar(50) NOT NULL,
  `id_siswa` int(3) DEFAULT NULL,
  `id_periode` int(3) DEFAULT NULL,
  `nilai_c1` int(3) NOT NULL,
  `nilai_c2` int(3) NOT NULL,
  `nilai_c3` int(3) NOT NULL,
  `nilai_c4` text NOT NULL,
  `nilai_c5` text NOT NULL,
  `tanggal_create` int(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tb_nilai` */

insert  into `tb_nilai`(`id`,`nama_murid`,`id_siswa`,`id_periode`,`nilai_c1`,`nilai_c2`,`nilai_c3`,`nilai_c4`,`nilai_c5`,`tanggal_create`) values (1,'',11111,2,83,1,4,'b','b',1484152796),(2,'',22222,2,82,2,3,'b','sb',1484152796),(3,'',33333,2,80,3,4,'b','sb',1484152796),(4,'',44444,2,81,1,3,'b','b',1484152796);

/*Table structure for table `tb_nilai_convert` */

DROP TABLE IF EXISTS `tb_nilai_convert`;

CREATE TABLE `tb_nilai_convert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_murid` varchar(50) NOT NULL,
  `id_siswa` int(3) DEFAULT NULL,
  `id_periode` int(3) DEFAULT NULL,
  `nilai_c1` int(5) NOT NULL,
  `nilai_c2` int(5) NOT NULL,
  `nilai_c3` int(5) NOT NULL,
  `nilai_c4` int(5) NOT NULL,
  `nilai_c5` int(5) NOT NULL,
  `tanggal_create` int(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tb_nilai_convert` */

insert  into `tb_nilai_convert`(`id`,`nama_murid`,`id_siswa`,`id_periode`,`nilai_c1`,`nilai_c2`,`nilai_c3`,`nilai_c4`,`nilai_c5`,`tanggal_create`) values (1,'',11111,2,4,5,3,4,4,1484152796),(2,'',22222,2,4,4,4,4,5,1484152796),(3,'',33333,2,4,3,3,4,5,1484152796),(4,'',44444,2,4,5,4,4,4,1484152796);

/*Table structure for table `tb_nilai_power` */

DROP TABLE IF EXISTS `tb_nilai_power`;

CREATE TABLE `tb_nilai_power` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_siswa` int(3) DEFAULT NULL,
  `id_periode` int(3) DEFAULT NULL,
  `nilai_c1` int(5) NOT NULL,
  `nilai_c2` int(5) NOT NULL,
  `nilai_c3` int(5) NOT NULL,
  `nilai_c4` int(5) NOT NULL,
  `nilai_c5` int(5) NOT NULL,
  `tanggal_create` int(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tb_nilai_power` */

insert  into `tb_nilai_power`(`id`,`id_siswa`,`id_periode`,`nilai_c1`,`nilai_c2`,`nilai_c3`,`nilai_c4`,`nilai_c5`,`tanggal_create`) values (1,11111,2,16,25,9,16,16,1484152796),(2,22222,2,16,16,16,16,25,1484152796),(3,33333,2,16,9,9,16,25,1484152796),(4,44444,2,16,25,16,16,16,1484152796);

/*Table structure for table `tb_periode` */

DROP TABLE IF EXISTS `tb_periode`;

CREATE TABLE `tb_periode` (
  `id_periode` int(3) NOT NULL AUTO_INCREMENT,
  `nama_periode` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_periode`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tb_periode` */

insert  into `tb_periode`(`id_periode`,`nama_periode`) values (1,'2015'),(2,'2016'),(3,'2017'),(4,'2018');

/*Table structure for table `tb_siswa` */

DROP TABLE IF EXISTS `tb_siswa`;

CREATE TABLE `tb_siswa` (
  `id_siswa` int(5) NOT NULL AUTO_INCREMENT,
  `nik` varchar(20) DEFAULT NULL,
  `nm_siswa` varchar(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(200) DEFAULT NULL,
  `nama_ayah` varchar(200) DEFAULT NULL,
  `nama_ibu` varchar(200) DEFAULT NULL,
  `pekerjaan_ayah` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `tb_siswa` */

insert  into `tb_siswa`(`id_siswa`,`nik`,`nm_siswa`,`alamat`,`tgl_lahir`,`tempat_lahir`,`nama_ayah`,`nama_ibu`,`pekerjaan_ayah`) values (1,'11111','Popo Suwondo','      jakarta','1991-01-19','jakarta','andi','sriyana','swasta'),(2,'22222','Nandimas RA','jakarta','2016-07-21','jakarta','ayah','ibu','work'),(3,'33333','Saiful Ramadhani','jakarta','2016-07-21','jakarta','ayah','ibu','work'),(4,'44444','warsito','jakarta','2016-07-14','jakarta','ayah','ibu','work'),(5,'55555','ari','jakarta','2016-07-13','jakarta','ayah','ibu','swasta'),(7,'77777','rori','jakarta','2016-07-01','jakarta','ayah','ibu','swasta'),(9,'99999','Andika Solihin','jakarta','2016-07-01','jakarta','ayah','ibu','swasta'),(11,'13131','popa','jakarta','1991-01-19','jakarta','ayah','ibu','swasta');

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(11) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '0' COMMENT '0 = user biasa, 1 = admin',
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1 = aktif, 2 = nonaktif',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id`,`nama`,`username`,`password`,`email`,`level`,`status`) values (1,'Administrator','admin','d033e22ae348aeb5660fc2140aec35850c4da997','admin@gmail',1,1),(3,'Wali Kelas','wali','13314b1c5ad639cc86d60d57d9f30e5fc8f0efac','staf@gmail.',2,1),(4,'Kepala Sekolah','kepsek','82b7283910ac7cb508ea7ecc645e5c944d7fb612','staf@gmail.',3,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
