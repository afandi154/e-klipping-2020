-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 09:32 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `eklipingcetak`
--

CREATE TABLE `eklipingcetak` (
  `tanggal` int(11) DEFAULT NULL,
  `bulan` varchar(20) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `media` varchar(50) DEFAULT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `nama_foto1` varchar(100) DEFAULT NULL,
  `nama_foto2` varchar(100) DEFAULT NULL,
  `nama_foto3` varchar(100) DEFAULT NULL,
  `nama_foto4` varchar(100) DEFAULT NULL,
  `nama_foto5` varchar(100) DEFAULT NULL,
  `opd` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eklipingcetak`
--

INSERT INTO `eklipingcetak` (`tanggal`, `bulan`, `tahun`, `media`, `judul`, `nama_foto1`, `nama_foto2`, `nama_foto3`, `nama_foto4`, `nama_foto5`, `opd`) VALUES
(1, 'Januari', 2001, 'Media A', 'Judul 1', '20170309_150206.jpg', '', '', '', '', 'Opd 1'),
(2, 'Februari', 2002, 'Media A', 'Judul 2', '20170309_153012.jpg', '20170311_113506.jpg', '', '', '', 'Opd 1, Opd 2'),
(3, 'Maret', 2002, 'Media B', 'Judul 3', '20170311_113534.jpg', '20170311_113653.jpg', '20170315_092934.jpg', '', '', 'Opd 3'),
(4, 'April', 2004, 'Media B', 'Judul 4', '20170315_132107.jpg', '20170315_135817.jpg', '20170320_101250.jpg', '20170320_101622.jpg', '', 'Opd 3, Opd 4'),
(5, 'Mei', 2003, 'Media C', 'Judul 5', '20170321_092939.jpg', '20170321_112742.jpg', '', '20170321_114619.jpg', '20170321_115726.jpg', 'Opd 5');

-- --------------------------------------------------------

--
-- Table structure for table `eklipingonline`
--

CREATE TABLE `eklipingonline` (
  `tanggal` int(11) DEFAULT NULL,
  `bulan` varchar(20) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `media` varchar(50) DEFAULT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `nama_foto1` varchar(100) DEFAULT NULL,
  `nama_foto2` varchar(100) DEFAULT NULL,
  `nama_foto3` varchar(100) DEFAULT NULL,
  `nama_foto4` varchar(100) DEFAULT NULL,
  `nama_foto5` varchar(100) DEFAULT NULL,
  `opd` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eklipingonline`
--

INSERT INTO `eklipingonline` (`tanggal`, `bulan`, `tahun`, `media`, `judul`, `link`, `nama_foto1`, `nama_foto2`, `nama_foto3`, `nama_foto4`, `nama_foto5`, `opd`) VALUES
(1, 'Januari', 2001, 'Media A', 'Judul 1', 'www.google.com', 'Jadwal.png', '', '', '', '', 'OPD 1'),
(2, 'Februari', 2003, 'Media B', 'Judul 2', 'www.facebook.com', '219148.jpg', '', '', '', '', 'OPD 2'),
(3, 'Maret', 2003, 'Media C', 'Judul 3', 'www.twitter.com', 'cool-cat.jpeg', '', '', '', '', 'OPD 3'),
(4, 'April', 2004, 'Media B', 'Judul 4', 'www.tumblr.com', 'BIOS Interupt.JPG', '', '', '', '', 'OPD 3');

-- --------------------------------------------------------

--
-- Table structure for table `erelease`
--

CREATE TABLE `erelease` (
  `foto_release` varchar(100) DEFAULT NULL,
  `berita_release` varchar(100) DEFAULT NULL,
  `tanggal` int(11) DEFAULT NULL,
  `bulan` varchar(20) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `penulis` varchar(50) DEFAULT NULL,
  `photografer` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `erelease`
--

INSERT INTO `erelease` (`foto_release`, `berita_release`, `tanggal`, `bulan`, `tahun`, `judul`, `penulis`, `photografer`) VALUES
('IMG-20170316-WA0000.jpg', 'BUKU-PEGANGAN-KULIAH-DASAR-MIKROPROSESOR-LENGKAP.pdf', 1, 'Januari', 2001, 'Judul 1', 'Penulis A', 'Photografer A'),
('BIOS Interupt.JPG', 'DRAFT PROPOSAL.docx', 2, 'Februari', 2002, 'Judul 2', 'Penulis B', 'Photografer A'),
('Jadwal.png', 'ModulComputerGaming.pdf', 3, 'Maret', 2003, 'Judul 3', 'Penulis B', 'Photografer B');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `nama` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`nama`, `pass`) VALUES
('admin', 'admin123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
