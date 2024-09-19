-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2022 at 06:31 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kampus_sanditamaliaherman`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa_sanditamaliaherman`
--

CREATE TABLE `tbl_mahasiswa_sanditamaliaherman` (
  `nim_sanditamaliaherman` int(12) NOT NULL,
  `nama_sanditamaliaherman` varchar(20) NOT NULL,
  `jkel_sanditamaliaherman` varchar(10) NOT NULL,
  `agama_sanditamaliaherman` varchar(5) NOT NULL,
  `tmp_lhr_sanditamaliaherman` varchar(10) NOT NULL,
  `tgl_lhr_sanditamaliaherman` date NOT NULL,
  `alamat_sanditamaliaherman` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mahasiswa_sanditamaliaherman`
--

INSERT INTO `tbl_mahasiswa_sanditamaliaherman` (`nim_sanditamaliaherman`, `nama_sanditamaliaherman`, `jkel_sanditamaliaherman`, `agama_sanditamaliaherman`, `tmp_lhr_sanditamaliaherman`, `tgl_lhr_sanditamaliaherman`, `alamat_sanditamaliaherman`) VALUES
(1910114501, 'Rahayu', 'Wanita', 'Islam', 'Tangerang', '1970-09-22', 'Ciputat,Tangerang Selatan'),
(1910114502, 'Joko Tingkir', 'Laki-Laki', 'Islam', 'Cirebon', '1990-11-06', 'Griya Pamulang, Tangerang'),
(1910114503, 'Sandi Tamalia Herman', 'Laki-Laki', 'Islam', 'Tangerang', '2015-12-02', 'Pasar Lama,Tangerang '),
(1910114504, 'Panjul', 'Laki-Laki', 'Islam', 'Padang', '2002-09-15', 'BSD CIty, Tangerang'),
(1910114506, 'Wahyuni', 'Wanita', 'Islam', 'Bandung', '2001-09-20', 'Ciputat,Tangerang Selatan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mahasiswa_sanditamaliaherman`
--
ALTER TABLE `tbl_mahasiswa_sanditamaliaherman`
  ADD PRIMARY KEY (`nim_sanditamaliaherman`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
