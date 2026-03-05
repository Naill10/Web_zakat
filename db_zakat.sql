-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 05, 2026 at 04:14 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_zakat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_zakat`
--

CREATE TABLE `tbl_zakat` (
  `id_zakat` int NOT NULL,
  `nama_zakat` varchar(50) DEFAULT NULL,
  `jenis_zakat` enum('Zakat Mal','Zakat Fitrah') DEFAULT NULL,
  `jumlah_rupiah` int DEFAULT '0',
  `jumlah_beras` int DEFAULT '0',
  `metode` enum('Transfer','Tunai') NOT NULL,
  `tanggal` datetime DEFAULT CURRENT_TIMESTAMP,
  `keterengan` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_zakat`
--

INSERT INTO `tbl_zakat` (`id_zakat`, `nama_zakat`, `jenis_zakat`, `jumlah_rupiah`, `jumlah_beras`, `metode`, `tanggal`, `keterengan`) VALUES
(5, 'gio0', 'Zakat Mal', 1111, 0, 'Transfer', '2026-03-12 00:00:00', 3),
(6, 'abbad', 'Zakat Mal', 11111, 0, 'Tunai', '2026-03-02 00:00:00', 1),
(8, 'uzma', 'Zakat Mal', 0, 12, 'Tunai', '2026-03-07 00:00:00', 5),
(14, 'agus', 'Zakat Mal', 2000, 0, 'Tunai', '2026-03-05 00:00:00', 1),
(15, 'agus', 'Zakat Fitrah', 900000, 0, 'Tunai', '2026-03-30 00:00:00', 1),
(16, 'zakwan', 'Zakat Mal', 10000, 0, 'Transfer', '2026-03-05 00:00:00', 1),
(17, 'pikri', 'Zakat Mal', 0, 12, 'Tunai', '2026-03-05 10:48:20', 5),
(18, 'gio', 'Zakat Fitrah', 10000, 0, 'Tunai', '2026-03-05 10:48:48', 1),
(19, 'suntana', 'Zakat Fitrah', 10000, 0, 'Tunai', '2026-03-05 10:52:41', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_zakat`
--
ALTER TABLE `tbl_zakat`
  ADD PRIMARY KEY (`id_zakat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_zakat`
--
ALTER TABLE `tbl_zakat`
  MODIFY `id_zakat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
