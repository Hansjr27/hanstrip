-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 03, 2024 at 01:08 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hanstrip`
--

-- --------------------------------------------------------

--
-- Table structure for table `perjalanan`
--

CREATE TABLE `perjalanan` (
  `id` int NOT NULL,
  `foto` text NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `mulai_pergi` date NOT NULL,
  `waktu_pergi` date NOT NULL,
  `user_upload` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `perjalanan`
--

INSERT INTO `perjalanan` (`id`, `foto`, `tempat`, `deskripsi`, `mulai_pergi`, `waktu_pergi`, `user_upload`) VALUES
(34, 'ilustrasi-pulau-bali_169.jpg', 'Bali', 'Bali adalah salah satu destinasi wisata terbaik di indonesia.', '2024-05-31', '2024-04-28', 'Syehan'),
(37, 'wisata-pulau-NTB-11-Merah-Putih.jpg', 'Lombok', 'Lombok adalah kota yang sedang di bangun', '2024-05-26', '2024-06-01', 'hanstrip');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `password`, `level`) VALUES
(28, 'nakihansjr@gmail.com', 'Syehan', '202cb962ac59075b964b07152d234b70', 1),
(37, 'syehan@gmail.com', 'hanstrip', '02e74f10e0327ad868d138f2b4fdd6f0', 1),
(38, 'syeikha@gmail.com', 'Syeikha', 'c20ad4d76fe97759aa27a0c99bff6710', 1),
(39, 'admin@gmail.com', 'Admin-Hanstrip', 'eb39ea3bc696d26208a116f1b28af975', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perjalanan`
--
ALTER TABLE `perjalanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perjalanan`
--
ALTER TABLE `perjalanan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
