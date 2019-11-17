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
-- Table structure for table `produk`
--
 
CREATE TABLE IF NOT EXISTS `produk` (
  `id` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(10) NOT NULL,
  `idkategori` varchar(50) NOT NULL,
  `idsub_kategori` varchar(10) NOT NULL,
  `file_gambar` varchar(10) NOT NULL,
  `last_update` varchar(50) NOT NULL,
  `idpegawai` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
--
-- Dumping data for table `produk`
--
 
INSERT INTO `produk` (`id`, `nama`, `deskripsi`, `idkategori`, `idsub_kategori`, `file_gambar`, `last_update`, `idpegawai`, `harga`) VALUES
('1234567', 'backpack good', 'backpack ini bahannya sangat berkualitas', '2132143', '192837', 'crud.png', '09-10-2019', '19908876', '$45');
 
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;