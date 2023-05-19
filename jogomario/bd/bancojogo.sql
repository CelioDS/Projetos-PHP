-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2022 at 09:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bancojogo`
--

-- --------------------------------------------------------

--
-- Table structure for table `ranking`
--

CREATE TABLE `ranking` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pontos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ranking`
--

INSERT INTO `ranking` (`id`, `nome`, `pontos`) VALUES
(632, 'null', 105),
(633, 'celio', 454),
(634, 'ss', 669),
(635, 'null', 288),
(636, 'cek', 295),
(637, 'cek', 310),
(638, 'cek', 314),
(639, 'cek', 320),
(640, 'cek', 324),
(641, 'cek', 330),
(642, 'cek', 338),
(643, 'cek', 345),
(644, 'cek', 357),
(645, 'cek', 418),
(646, 'cek', 438),
(647, 'cek', 447),
(648, 'cek', 448),
(649, 'cek', 1670),
(650, 'celio', 11945),
(651, '', 0),
(652, 'ce', 333),
(653, 'ca', 662),
(654, 've', 665),
(655, 've', 1310),
(656, 've', 1550),
(657, 'ce', 2506),
(658, 'ce', 2528),
(659, 'ce', 3321),
(660, 'celio', 4797),
(661, 'ds', 17460);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ranking`
--
ALTER TABLE `ranking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=662;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
