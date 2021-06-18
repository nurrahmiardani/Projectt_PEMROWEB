-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 07:10 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-pbw`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(16) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `address`) VALUES
(1, 'fel@gmail.coma', '', 'Felyn Irnanda', 'Glenmorea'),
(6, 'b@b.com', '', 'nurrahmi', 's'),
(7, 'aku@gmail.com', '', 'nuri', 'jalan'),
(8, 'l@gmail.com', '', 'nuri', 'jalan pahlawan'),
(9, 't@g.com', '12', 'nuri', 'haaha'),
(10, 'nu@gmail.com', '', 'nuriii', 'jalan pahlawan no1');

-- --------------------------------------------------------

--
-- Table structure for table `villages`
--

CREATE TABLE `villages` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `nama_kepala_desa` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `jumlah_penduduk` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `villages`
--

INSERT INTO `villages` (`id`, `nama`, `provinsi`, `nama_kepala_desa`, `kabupaten`, `jumlah_penduduk`, `foto`) VALUES
(12, 'Majasari', 'Jawa Timur', 'Rahmat', 'Pamekasan', '890', 'Balai Desa Majasari.jpg'),
(15, 'Desa Sendangagunga', 'Jawa Barat', 'Bayu Adi ', 'Cirebon', '989', 'KANTOR-DESA-SENDANGAGUNG-01-1024x576l.jpeg'),
(16, 'Pangarangan', 'Jawa Timur', 'Wahyu', 'Sumenep', '900', '20210111_080835.jpg'),
(17, 'Glenmore', 'Jawa Timur', 'Felyn', 'Banyuwangi', '980', '50 Minimalist Desktop Wallpapers and Backgrounds (2021 Edition).png'),
(19, 'Jonggol', 'Jawa Timur', 'Aditya', 'Surabaya', '970', 'foto-balai-desa-Copy.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `villages`
--
ALTER TABLE `villages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `villages`
--
ALTER TABLE `villages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
