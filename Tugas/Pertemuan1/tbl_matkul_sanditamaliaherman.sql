-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2022 at 09:18 AM
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
-- Table structure for table `tbl_matkul_sanditamaliaherman`
--

CREATE TABLE `tbl_matkul_sanditamaliaherman` (
  `kode-mk_sanditamaliaherman` int(5) NOT NULL,
  `nama-mk_sanditamaliaherman` varchar(20) NOT NULL,
  `dosen-mk_sanditamaliaherman` varchar(20) NOT NULL,
  `kelas-mk_sanditamaliaherman` int(9) NOT NULL,
  `hari-mk_sanditamaliaherman` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_matkul_sanditamaliaherman`
--
ALTER TABLE `tbl_matkul_sanditamaliaherman`
  ADD PRIMARY KEY (`kode-mk_sanditamaliaherman`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
