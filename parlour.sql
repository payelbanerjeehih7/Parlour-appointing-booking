-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2024 at 05:53 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `parlour`
--

CREATE TABLE `parlour` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time(2) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `user` varchar(255) NOT NULL,
  `auth` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parlour`
--

INSERT INTO `parlour` (`id`, `name`, `email`, `password`, `phone`, `service`, `date`, `time`, `comment`, `image`, `user`, `auth`) VALUES
(1, 'admin', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1234567890, 'color', '2024-01-07', '13:10:00.00', 'hi', './upload/1704613156_Ghat shadow story_Payel_8777644951.jpg', 'admin', 0),
(2, 'Payel Banerjee', 'payelbanerjee9319@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 8777644951, 'hair, haircuts', '2024-01-19', '12:00:00.00', 'hello', './upload/1704638174__DSC0572.jpg', 'client', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parlour`
--
ALTER TABLE `parlour`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parlour`
--
ALTER TABLE `parlour`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
