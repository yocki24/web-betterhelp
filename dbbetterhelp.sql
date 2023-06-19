-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 08:13 PM
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
-- Database: `dbbetterhelp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`id`, `nama`, `email`, `subjek`, `pesan`, `waktu`) VALUES
(1, 'asd', 'qwe@mail.com', 'asf', 'assdfsfsafs', '2023-06-18 22:06:31'),
(2, 'gsdf', 'ert@mail.com', 'ewr', 'sdg', '2023-06-19 00:37:53'),
(3, 'qwe', 'sdf@mail.com', 'sdgf', 'sdfg', '2023-06-19 00:38:13');

-- --------------------------------------------------------

--
-- Table structure for table `tblpengguna`
--

CREATE TABLE `tblpengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `jeniskelamin` varchar(30) NOT NULL,
  `tgllahir` date NOT NULL,
  `alamat` text NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `biografi` text NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpengguna`
--

INSERT INTO `tblpengguna` (`id`, `nama`, `email`, `password`, `jeniskelamin`, `tgllahir`, `alamat`, `hobi`, `biografi`, `waktu`) VALUES
(1, 'febri', 'febri@mail.com', 'jjjjjj', 'Laki-laki', '2023-06-18', 'asf', 'yert', 'fdgh', '2023-06-18 22:29:53'),
(2, 'qwe', 'qwe@mail.com', '12345678', 'Laki-laki', '2023-06-18', 'vxzcv', 'qwer', 'asdfasdf', '2023-06-18 22:58:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbltes`
--

CREATE TABLE `tbltes` (
  `id` int(11) NOT NULL,
  `pertanyaan1` text NOT NULL,
  `pertanyaan2` text NOT NULL,
  `pertanyaan3` text NOT NULL,
  `pertanyaan4` text NOT NULL,
  `pertanyaan5` text NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbltes`
--

INSERT INTO `tbltes` (`id`, `pertanyaan1`, `pertanyaan2`, `pertanyaan3`, `pertanyaan4`, `pertanyaan5`, `waktu`) VALUES
(1, 'dsf', 'sdf', 'we', 'sdf', 'xcv', '2023-06-18 21:31:45'),
(2, 'qwe', 'ret', 'dgf', 'cvb', '42', '2023-06-18 21:50:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpengguna`
--
ALTER TABLE `tblpengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltes`
--
ALTER TABLE `tbltes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblpengguna`
--
ALTER TABLE `tblpengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbltes`
--
ALTER TABLE `tbltes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
