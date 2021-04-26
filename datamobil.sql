-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 10:08 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datamobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenismobil`
--

CREATE TABLE `jenismobil` (
  `id` int(10) NOT NULL,
  `nama_mobil` varchar(20) NOT NULL,
  `merk_mobil` varchar(20) NOT NULL,
  `warna_mobil` varchar(20) NOT NULL,
  `harga_mobil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenismobil`
--

INSERT INTO `jenismobil` (`id`, `nama_mobil`, `merk_mobil`, `warna_mobil`, `harga_mobil`) VALUES
(1, 'Avanza', 'Toyota', 'Hitam', 'Rp.235.000.000'),
(2, 'Brio', 'Honda', 'Merah', 'Rp.195.000.000'),
(5, 'Avanza', 'Toyota', 'Putih', 'Rp.245.000.000'),
(6, 'Rush', 'Toyota', 'Putih', 'Rp.240.500.000'),
(7, 'Terios', 'Daihatsu', 'Abu-Abu', 'Rp.249.000.000'),
(23, 'Terios', 'Daihatsu', 'Abu-Abu', 'Rp.249.000.000'),
(24, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenismobil`
--
ALTER TABLE `jenismobil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenismobil`
--
ALTER TABLE `jenismobil`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
