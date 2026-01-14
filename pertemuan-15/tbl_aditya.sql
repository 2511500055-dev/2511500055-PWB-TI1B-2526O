-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 14, 2026 at 08:58 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pwd2025`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aditya`
--

CREATE TABLE `tbl_aditya` (
  `cid` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `hobi` varchar(100) DEFAULT NULL,
  `pasangan` varchar(100) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `nama_orang_tua` varchar(100) DEFAULT NULL,
  `nama_kakak` varchar(100) DEFAULT NULL,
  `nama_adik` varchar(100) DEFAULT NULL,
  `dcreated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_aditya`
--

INSERT INTO `tbl_aditya` (`cid`, `nim`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `hobi`, `pasangan`, `pekerjaan`, `nama_orang_tua`, `nama_kakak`, `nama_adik`, `dcreated_at`) VALUES
(1, '2511500055', 'amatttttt', 'pkp', '2026-01-07', 'apapun', 'adalah', 'ada', 'asep', 'aaaaaa', 'bbbbb', '2026-01-14 14:33:44'),
(3, '2511500055', 'aceng', 'toboali', '2009-03-19', 'adalah', 'adalah', 'adalah', 'siapapun', 'adalh', 'adalah', '2026-01-14 15:10:36'),
(4, '2511500055', 'aceng', 'toboali', '2009-03-19', 'adalah', 'adalah', 'adalah', 'siapapun', 'adalh', 'adalah', '2026-01-14 15:29:40'),
(5, '2511500055', 'aceng', 'toboali', '2009-03-19', 'adalah', 'adalah', 'adalah', 'siapapun', 'adalh', 'adalah', '2026-01-14 15:33:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_aditya`
--
ALTER TABLE `tbl_aditya`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_aditya`
--
ALTER TABLE `tbl_aditya`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
