-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2025 at 02:54 PM
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
-- Table structure for table `tbl_tamu`
--

CREATE TABLE `tbl_tamu` (
  `cid` int(11) NOT NULL,
  `cnama` varchar(100) DEFAULT NULL,
  `cemail` varchar(100) DEFAULT NULL,
  `cpesan` text,
  `alamat` text NOT NULL,
  `dcreated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tamu`
--

INSERT INTO `tbl_tamu` (`cid`, `cnama`, `cemail`, `cpesan`, `alamat`, `dcreated_at`) VALUES
(1, 'Aditya Ihsani Wijaya', 'adityaihsaniwijaya@gmail.com', 'semangat', '', '2025-12-16 21:37:23'),
(2, 'abcdit', 'Adit@gmail.com', 'semangat terus ya', '', '2025-12-16 21:37:23'),
(3, 'abcdit', 'Adit@gmail.com', 'nejbxdjewbd', '', '2025-12-16 21:37:23'),
(4, 'fffffff', 'ggffg@dssss.com', 'iyadeh', '', '2025-12-16 21:37:23'),
(5, 'abcdit', 'Adit@gmail.com', 'aaaaaaaaaa', '', '2025-12-16 21:37:23'),
(6, 'abcdit', 'Adit@gmail.com', 'wwwwwwwwwww', '', '2025-12-16 21:37:23'),
(7, 'hhhhhhhhh', 'uep@gmail.com', 'qqqqqqqqqq', '', '2025-12-16 21:37:23'),
(8, 'abcdit', 'adityaihsaniwijaya@gmail.com', 'wwwwwwwwwwww', '', '2025-12-16 21:37:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
