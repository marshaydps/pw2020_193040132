-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 10:30 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040132`
--

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id` int(2) NOT NULL,
  `img` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `berat` int(10) NOT NULL,
  `kalori` int(10) NOT NULL,
  `karbohidrat` int(10) NOT NULL,
  `protein` int(10) NOT NULL,
  `lemak` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id`, `img`, `nama`, `berat`, `kalori`, `karbohidrat`, `protein`, `lemak`) VALUES
(1, '1.jpg', 'Nasi', 100, 175, 40, 4, 5),
(2, '2.jpg', 'Roti', 80, 175, 40, 4, 0),
(3, '3.png', 'Ayam', 50, 95, 0, 10, 6),
(4, '4.jpg', 'Mie', 200, 175, 40, 4, 0),
(5, '5.png', 'Sosis', 100, 332, 0, 18, 28),
(6, '6.png', 'Apel', 75, 40, 10, 0, 0),
(7, '7.png', 'Beef', 50, 95, 0, 10, 6),
(8, '8.png', 'Durian', 50, 40, 10, 0, 0),
(9, '9.png', 'Ice cream coklat', 100, 216, 28, 4, 11),
(10, '10.jpg', 'Alpukat', 100, 160, 8, 2, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
