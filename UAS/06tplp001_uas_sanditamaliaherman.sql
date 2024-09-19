-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 09:10 PM
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
-- Database: `06tplp001_uas_sanditamaliaherman`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa_sanditamaliaherman_uas`
--

CREATE TABLE `siswa_sanditamaliaherman_uas` (
  `nisn_sanditamaliaherman` int(11) NOT NULL,
  `namasiswa_sanditamaliaherman` varchar(100) NOT NULL,
  `tgllahir_sanditamaliaherman` date NOT NULL,
  `tempatlahir_sanditamaliaherman` varchar(50) NOT NULL,
  `jeniskelamin_sanditamaliaherman` varchar(10) NOT NULL,
  `alamat_sanditamaliaherman` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa_sanditamaliaherman_uas`
--

INSERT INTO `siswa_sanditamaliaherman_uas` (`nisn_sanditamaliaherman`, `namasiswa_sanditamaliaherman`, `tgllahir_sanditamaliaherman`, `tempatlahir_sanditamaliaherman`, `jeniskelamin_sanditamaliaherman`, `alamat_sanditamaliaherman`) VALUES
(2, 'Sandi Tamalia H', '2002-06-01', 'Tangerang', 'Laki-laki', 'Pasar Lama, Tangerang'),
(5, 'Agus', '2001-01-01', 'Pandeglang', 'Laki-laki', 'Bojong Gede'),
(7, 'Samsul', '2022-01-19', 'Tangerang', 'Laki-laki', 'Bekasi'),
(8, 'Anton', '2024-02-19', 'Pandeglang', 'Laki-laki', 'Bekasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa_sanditamaliaherman_uas`
--
ALTER TABLE `siswa_sanditamaliaherman_uas`
  ADD PRIMARY KEY (`nisn_sanditamaliaherman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa_sanditamaliaherman_uas`
--
ALTER TABLE `siswa_sanditamaliaherman_uas`
  MODIFY `nisn_sanditamaliaherman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
