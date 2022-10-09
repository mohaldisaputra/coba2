-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 05:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kk`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `nama_lengkap`) VALUES
(1, '1800018021', '6ae5eaaddd8776ece03c9dd2145a9e3a', 'Mohammad Aldi Saputra'),
(2, 'fajrul', '5d6198ca16e2f3eb59f3a1040e8d646a', 'Fajrul Akbar'),
(3, 'tejo_p', '4a37035a424e23463a3f08f0ee0fe0e1', 'Tejo Praya Kusumo'),
(4, 'lee_ho', 'a93c7d4da318a9d8efa962dd613d9f92', 'Lee Min Ho'),
(5, 'lalalalisa', '09ac0ae2505959e0c6e4f82a8c6070c8', 'Lalisa Manoban');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
