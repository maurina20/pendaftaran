/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.18-MariaDB : Database - pendaftaran
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pendaftaran` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `pendaftaran`;

/*Table structure for table `bio_siswa` */

DROP TABLE IF EXISTS `bio_siswa`;

CREATE TABLE `bio_siswa` (
  `id_siswa` int(4) NOT NULL AUTO_INCREMENT,
  `id_pengguna` int(4) DEFAULT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('PEREMPUAN','LAKI-LAKI') DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` enum('KATHOLIK','PROTESTAN','ISLAM','HINDU','BUDHA','KONGHUCU') DEFAULT NULL,
  `kontak_hp_siswa` varchar(15) DEFAULT NULL,
  `alamat_siswa` varchar(100) DEFAULT NULL,
  `desa_siswa` varchar(100) DEFAULT NULL,
  `kecamatan_siswa` varchar(100) DEFAULT NULL,
  `kabupaten_siswa` varchar(100) DEFAULT NULL,
  `provinsi_siswa` varchar(100) DEFAULT NULL,
  `nisn` varchar(30) DEFAULT NULL,
  `asal_sekolah` varchar(50) DEFAULT NULL,
  `tahun_lulus` varchar(5) DEFAULT NULL,
  `alamat_sekolah` varchar(100) DEFAULT NULL,
  `desa_sekolah` varchar(100) DEFAULT NULL,
  `kecamatan_sekolah` varchar(100) DEFAULT NULL,
  `kabupaten_sekolah` varchar(100) DEFAULT NULL,
  `provinsi_sekolah` varchar(100) DEFAULT NULL,
  `nama_ortu` varchar(100) DEFAULT NULL,
  `kontak_hp_ortu` varchar(20) DEFAULT NULL,
  `pendidikan_ortu` enum('TK/KB','SD','SMP/SLTP','SMA/SLTA','D1','D2','D3','D4','S1','S2','S3','NON-FORMAL') DEFAULT NULL,
  `pekerjaan_ortu` varchar(100) DEFAULT NULL,
  `alamat_ortu` varchar(100) DEFAULT NULL,
  `desa_ortu` varchar(100) DEFAULT NULL,
  `kecamatan_ortu` varchar(100) DEFAULT NULL,
  `kabupaten_ortu` varchar(100) DEFAULT NULL,
  `provinsi_ortu` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_siswa`),
  KEY `id_pengguna` (`id_pengguna`),
  CONSTRAINT `bio_siswa_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `bio_siswa` */

/*Table structure for table `daftar` */

DROP TABLE IF EXISTS `daftar`;

CREATE TABLE `daftar` (
  `id_daftar` int(4) NOT NULL AUTO_INCREMENT,
  `id_siswa` int(4) DEFAULT NULL,
  `id_jurusan` int(4) DEFAULT NULL,
  `id_tahun` int(4) DEFAULT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `pasfoto` varchar(100) DEFAULT NULL,
  `dok_akta` varchar(100) DEFAULT NULL,
  `dok_ijazah` varchar(100) DEFAULT NULL,
  `dok_skl` varchar(100) DEFAULT NULL,
  `dok_skn` varchar(100) DEFAULT NULL,
  `dok_rapor` varchar(100) DEFAULT NULL,
  `dok_ktp_ortu` varchar(100) DEFAULT NULL,
  `dok_kk` varchar(100) DEFAULT NULL,
  `prestasi` varchar(100) DEFAULT NULL,
  `dok_prestasi` varchar(100) DEFAULT NULL,
  `status_daftar` enum('DAFTAR','LOLOS','TIDAK LOLOS') DEFAULT NULL,
  PRIMARY KEY (`id_daftar`),
  KEY `id_jurusan` (`id_jurusan`),
  KEY `id_tahun` (`id_tahun`),
  KEY `id_siswa` (`id_siswa`),
  CONSTRAINT `daftar_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  CONSTRAINT `daftar_ibfk_2` FOREIGN KEY (`id_tahun`) REFERENCES `tahun_akademik` (`id_tahun`),
  CONSTRAINT `daftar_ibfk_3` FOREIGN KEY (`id_siswa`) REFERENCES `bio_siswa` (`id_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `daftar` */

/*Table structure for table `jurusan` */

DROP TABLE IF EXISTS `jurusan`;

CREATE TABLE `jurusan` (
  `id_jurusan` int(4) NOT NULL AUTO_INCREMENT,
  `nama_jurusan` varchar(50) DEFAULT NULL,
  `status_jurusan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `jurusan` */

insert  into `jurusan`(`id_jurusan`,`nama_jurusan`,`status_jurusan`) values 
(1,'Pengembangan Perangkat Lunak dan Gim','Aktif'),
(2,'Desain Komunikasi Visual','Aktif'),
(3,'Desain Pemodelan\r\nIndustri Bangunan','Aktif');

/*Table structure for table `pengguna` */

DROP TABLE IF EXISTS `pengguna`;

CREATE TABLE `pengguna` (
  `id_pengguna` int(4) NOT NULL AUTO_INCREMENT,
  `nama_pengguna` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `hak_akses` varchar(50) DEFAULT NULL,
  `status_pengguna` enum('Aktif','Non-Aktif') DEFAULT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pengguna` */

insert  into `pengguna`(`id_pengguna`,`nama_pengguna`,`email`,`password`,`hak_akses`,`status_pengguna`) values 
(1,'Maurina','admin@gmail.com','$2y$10$dYne7f0A1WyHV3bFoUD0WuToaanmPQ2tJCq2lPWZkUlRRFhTt.4Si','ADMIN','Aktif');

/*Table structure for table `tahun_akademik` */

DROP TABLE IF EXISTS `tahun_akademik`;

CREATE TABLE `tahun_akademik` (
  `id_tahun` int(4) NOT NULL AUTO_INCREMENT,
  `tahun_akademik` varchar(30) DEFAULT NULL,
  `status_tahun` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tahun`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tahun_akademik` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
