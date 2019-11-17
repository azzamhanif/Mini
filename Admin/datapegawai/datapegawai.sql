-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2016 at 04:30 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12
 
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
 
 
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
 
--
-- Database: `fashion`
--
 
-- --------------------------------------------------------
 
--
-- Table structure for table `pegawai`
--
 
CREATE TABLE IF NOT EXISTS `pegawai` (
  `id` varchar(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar (50) NOT NULL,
  `jenis_kelamin` varchar NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telepon` varchar(10) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
--
-- Dumping data for table `pegawai`
--
 
INSERT INTO `pegawai` (`id`, `nama_lengkap`, `username`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telepon`, `jabatan`, `status`, `email`, `password`) VALUES
('1234567', 'M. Azzam Hanif','azzamhanif', 'Laki-Laki', 'Jakarta', '1999-01-09', 'Cengkareng', '085678907873', 'Manager', 'Tetap', 'azzamhanif@gmail.com', 'apaajabisa');
 
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;