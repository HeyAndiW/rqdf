-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2018 at 05:25 PM
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
-- Database: `db_rqdf`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabsensi`
--

CREATE TABLE `tabsensi` (
  `id_absensi` int(10) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabsensi`
--

INSERT INTO `tabsensi` (`id_absensi`, `id_jadwal`, `tanggal`, `bulan`, `tahun`, `id`) VALUES
(7, 2, 3, 7, 2018, 114);

-- --------------------------------------------------------

--
-- Table structure for table `tjadwal`
--

CREATE TABLE `tjadwal` (
  `id_jadwal` int(11) NOT NULL,
  `jam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tjadwal`
--

INSERT INTO `tjadwal` (`id_jadwal`, `jam`) VALUES
(1, '11.00 s.d 12.00'),
(2, '13.00 s.d 15.00'),
(3, '16.00 s.d 17.30'),
(4, '18.00 s.d 19.30');

-- --------------------------------------------------------

--
-- Table structure for table `tpegawai`
--

CREATE TABLE `tpegawai` (
  `id` int(20) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `level` int(11) NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tpegawai`
--

INSERT INTO `tpegawai` (`id`, `Nama`, `alamat`, `no_hp`, `email`, `level`, `jenis_kelamin`) VALUES
(1, 'andi wijaya', 'Cugenang, Cianjur', '08761234956', 'acloseheaderss', 2, 'L'),
(11, 'Ust ucup', 'Bojong Herang Kabupaten Cianjur', '085923412234', 'cecep@gmail.com', 2, 'L'),
(112, 'Ust dadang', 'Cugenang, Cianjur', '08761234956', 'dadang@rqdf.com', 2, 'L'),
(113, 'wijaya', 'cianjur', '098097482', 'wijaya wijaya club', 2, 'L'),
(114, 'suherman', 'garut', '09809837', 'suherman', 2, 'L');

-- --------------------------------------------------------

--
-- Table structure for table `trekapabsensi`
--

CREATE TABLE `trekapabsensi` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `bulan` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `jumlahhadir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `photo_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `name`, `password`, `email`, `level`, `photo_name`) VALUES
('level1', 'andi wijaya suherman', 'e10adc3949ba59abbe56e057f20f883e', 'andi@gmail.com', 1, '0.png'),
('level2', 'level2', 'e10adc3949ba59abbe56e057f20f883e', 'efadfakjb', 2, '0.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabsensi`
--
ALTER TABLE `tabsensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `tjadwal`
--
ALTER TABLE `tjadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tpegawai`
--
ALTER TABLE `tpegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trekapabsensi`
--
ALTER TABLE `trekapabsensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabsensi`
--
ALTER TABLE `tabsensi`
  MODIFY `id_absensi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tpegawai`
--
ALTER TABLE `tpegawai`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
