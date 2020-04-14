-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 06:32 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pemrogramanweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesertadidik`
--

CREATE TABLE `tbl_pesertadidik` (
  `id_pendaftaran` int(11) NOT NULL,
  `tanggal_pendaftaran` datetime NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `nisn` varchar(10) DEFAULT NULL,
  `nik` varchar(16) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_aktalahir` varchar(18) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `kewarganegaraan` varchar(74) NOT NULL,
  `kebutuhan_khusus` varchar(17) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kode_pos` varchar(5) NOT NULL,
  `tempat_tinggal` varchar(17) NOT NULL,
  `media_transportasi` varchar(17) NOT NULL,
  `no_kks` varchar(6) DEFAULT NULL,
  `anak_keberapa` varchar(2) NOT NULL,
  `no_kps` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pesertadidik`
--

INSERT INTO `tbl_pesertadidik` (`id_pendaftaran`, `tanggal_pendaftaran`, `nama`, `jenis_kelamin`, `nisn`, `nik`, `tempat_lahir`, `tanggal_lahir`, `no_aktalahir`, `agama`, `kewarganegaraan`, `kebutuhan_khusus`, `alamat`, `kode_pos`, `tempat_tinggal`, `media_transportasi`, `no_kks`, `anak_keberapa`, `no_kps`) VALUES
(1, '2020-04-13 21:22:27', 'Muhammad Burhanuddin Fawwaz', 'L', '', '7281546989678981', 'Sidoarjo', '2000-03-04', 'bcasdj318akej17221', 'Islam', 'Indonesia', 'Netra, Rungu', 'Perumtas Mega Asri Blok AK 29 RT/RW 04/14, Dusun Kalitengah, Kel.Larangan, Kec.Candi', '61218', 'Bersama Orang Tua', 'Kendaraan Umum', '', '2', ''),
(2, '2020-04-13 21:27:19', 'Troye Sivan', 'L', '', '7192851623717236', 'Surabaya', '2009-01-01', 'buashd176218NAUS31', 'Kristen', 'Indonesia', 'Netra', 'Pondok Buana AL 10 RT/RW 01/04, Dusun PondokBuana, Kel.Blurukidul, Kec.Sidoarjo', '61214', 'Bersama Orang Tua', 'Kendaraan Pribadi', '', '1', ''),
(3, '2020-04-14 16:25:45', 'Malik Jaffar', 'L', '4123124908', '5182739812734876', 'Wellington', '1994-02-02', 'ajbhd289731jcklzjs', 'Kristen', 'New Zealand', 'Netra, Rungu, Gra', 'St Salfor Apart B 20 RT/RW 04/14, Dusun DurianRuntuh, Kel.Jabon , Kec.Sidoarjo\r\n', '61218', 'Bersama Orang Tua', 'Jalan Kaki', '', '5', ''),
(4, '2020-04-14 18:14:11', 'Martin Garrix', 'L', '1274168627', '2182371571237186', 'Surabaya', '2000-05-24', '5128bakAKShx2372ak', 'Kristen', 'Indonesia', 'Netra, Rungu, Gra', 'Perum Taman Pindang Indah AL 29 RT/RW 02/10, Dusun Kalitengah, Kel.Sugihwaras, Kec.Sidoarjo', '61251', 'Wali', 'Kendaraan Pribadi', '674813', '2', '58912737165923');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pesertadidik`
--
ALTER TABLE `tbl_pesertadidik`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pesertadidik`
--
ALTER TABLE `tbl_pesertadidik`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
