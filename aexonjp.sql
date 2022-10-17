-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2022 at 08:59 AM
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
-- Database: `aexonjp`
--

-- --------------------------------------------------------

--
-- Table structure for table `completed`
--

CREATE TABLE `completed` (
  `id` int(11) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `completed`
--

INSERT INTO `completed` (`id`, `judul`, `gambar`) VALUES
(1, 'Isekai-Meikyuu-de-Harem-wo', 'Isekai-Meikyuu-de-Harem-wo-640x360.jpg.webp'),
(2, 'Jashin-chan-Dropkick-S3', 'Jashin-chan-Dropkick-S3-640x360.jpg.webp'),
(3, 'Kinsou-no-Vermeil', 'Kinsou-no-Vermeil-640x360.png.webp'),
(4, 'Mamahaha-no-Tsurego-ga-Motokano-datta', 'Mamahaha-no-Tsurego-ga-Motokano-datta-640x360.png.webp'),
(5, 'Pacar-Sewaan-S2', 'Pacar-Sewaan-S2-640x360.png.webp'),
(6, 'Tokyo-Mew-Mew-New', 'Tokyo-Mew-Mew-New-640x360.png.webp');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `judul`, `gambar`) VALUES
(1, 'Ame-wo-Tsugeru-Hyouryuu-Danchi', 'Ame-wo-Tsugeru-Hyouryuu-Danchi-640x360.jpg.webp'),
(2, 'Blue-Thermal', 'Blue-Thermal-640x360.jpg.webp'),
(3, 'Bubble', 'Bubble-640x360.jpg.webp'),
(4, 'Jujutsu-Kaisen-0', 'Jujutsu-Kaisen-0-640x360.jpg.webp'),
(5, 'Kiniro-Mosaic-Thank-You', 'Kiniro-Mosaic-Thank-You-640x360.jpg.webp'),
(6, 'Sword-Art-Online-the-Movie-Progressive-Aria-of-a-Starless-Night', 'Sword-Art-Online-the-Movie-Progressive-Aria-of-a-Starless-Night-640x360.png.webp');

-- --------------------------------------------------------

--
-- Table structure for table `ongoing`
--

CREATE TABLE `ongoing` (
  `id` int(11) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ongoing`
--

INSERT INTO `ongoing` (`id`, `judul`, `gambar`) VALUES
(6, 'Bucchigire', 'Bucchigire-640x360.jpg.webp'),
(7, 'Love-All-Play', 'Love-All-Play-640x360.jpg.webp'),
(8, 'Luminous-Witches', 'Luminous-Witches-640x360.jpg.webp'),
(9, 'Prima-Doll', 'Prima-Doll-640x360.png.webp'),
(10, 'Teppen', 'Teppen-640x360.jpg.webp'),
(12, 'Ao-Ashi', 'Ao-Ashi-640x360.jpg.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `completed`
--
ALTER TABLE `completed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ongoing`
--
ALTER TABLE `ongoing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `completed`
--
ALTER TABLE `completed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ongoing`
--
ALTER TABLE `ongoing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
