-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 04:20 PM
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
-- Database: `db_artikel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `penulis` text NOT NULL,
  `lead` text NOT NULL,
  `content` text NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id`, `judul`, `penulis`, `lead`, `content`, `waktu`) VALUES
(11, 'Anak Sebatang Kara', 'Agil Hasyim Basri', 'Jika kau manusia yang berakal lantas mengapa membuang anak tanpa dosa?', 'Kisah seorang anak yang dibuang dan ditemukan oleh petani miskin', '2022-11-14'),
(12, 'Anak yang Hilang', 'Ahmad Furqon', 'Manusia adalah sumber kecewa, lantas mengapa masih berharap?', 'Berharaplah kepada Tuhan YME agar kau tidak hilang arah dan tujuan hidupmu', '2022-11-15'),
(13, 'Anak Durhaka', 'Aziz', 'Janganlah Suka Membangkang terhadap Orang Tua', 'Kisah seorang anak yang durhaka terhadap orang tuanya, menyesal ketika ajal sudah menjemput', '2022-11-15'),
(14, 'Anak Bawang', 'Fuan', 'Jangan Melihat Hanya Dari Satu Sisi', 'Kisah Seorang Anak Malang Mencari Jati Diri', '2022-11-15'),
(15, 'Anak Kentang', 'Zaidul', 'Dari Kecil Suka Menabung Lama-Lama Jadi Rampung', 'Tentang Perjuangan Seorang Anak Miskin', '2022-11-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
