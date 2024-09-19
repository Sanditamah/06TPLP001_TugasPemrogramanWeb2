-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2022 at 09:19 AM
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
-- Table structure for table `tbl_dosen_sanditamaliaherman`
--

CREATE TABLE `tbl_dosen_sanditamaliaherman` (
  `nikdosen_sanditamaliaherman` varchar(12) NOT NULL,
  `namadosen_sanditamaliaherman` varchar(20) NOT NULL,
  `jkeldosen_sanditamaliaherman` varchar(10) NOT NULL,
  `alamatdosen_sanditamaliaherman` varchar(30) NOT NULL,
  `agamadosen_sanditamaliaherman` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_dosen_sanditamaliaherman`
--

INSERT INTO `tbl_dosen_sanditamaliaherman` (`nikdosen_sanditamaliaherman`, `namadosen_sanditamaliaherman`, `jkeldosen_sanditamaliaherman`, `alamatdosen_sanditamaliaherman`, `agamadosen_sanditamaliaherman`) VALUES
('367600340001', 'Yadi Setiadi', 'Laki-Laki', 'Cipondoh, Tangerang', 'Islam'),
('367610350302', 'Azizah Nuryani', 'Wanita', 'Pamulang, Tangerang Selatan', 'Islam'),
('367624340003', 'Qori Nur Laila', 'Wanita', 'Ciputat, Tangerang Selatan', 'Islam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_dosen_sanditamaliaherman`
--
ALTER TABLE `tbl_dosen_sanditamaliaherman`
  ADD PRIMARY KEY (`nikdosen_sanditamaliaherman`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
