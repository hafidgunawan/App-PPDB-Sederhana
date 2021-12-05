-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 24, 2017 at 02:47 PM
-- Server version: 10.0.31-MariaDB-0ubuntu0.16.04.2
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `AppPPDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id_agama` int(1) NOT NULL,
  `nama_agama` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id_agama`, `nama_agama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Katolik'),
(4, 'Hindhu'),
(5, 'Budha'),
(6, 'Kong Hu Cu');

-- --------------------------------------------------------

--
-- Table structure for table `jeniskelamin`
--

CREATE TABLE `jeniskelamin` (
  `id_jk` int(1) NOT NULL,
  `jenis_kelamin` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jeniskelamin`
--

INSERT INTO `jeniskelamin` (`id_jk`, `jenis_kelamin`) VALUES
(1, 'Laki-laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'Rekayasa');

-- --------------------------------------------------------

--
-- Table structure for table `penghasilan_ortu`
--

CREATE TABLE `penghasilan_ortu` (
  `id_penghasilan_ortu` int(11) NOT NULL,
  `penghasilan_ortu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penghasilan_ortu`
--

INSERT INTO `penghasilan_ortu` (`id_penghasilan_ortu`, `penghasilan_ortu`) VALUES
(1, '< 500.000'),
(3, '> 500.000'),
(2, '1.250.000'),
(4, '1.500.000');

-- --------------------------------------------------------

--
-- Table structure for table `peserta_ppdb`
--

CREATE TABLE `peserta_ppdb` (
  `nis` int(20) NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_jk` int(1) NOT NULL,
  `id_agama` int(1) NOT NULL,
  `asal_sekolah` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` bigint(12) NOT NULL,
  `nama_ortu` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_penghasilan_ortu` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peserta_ppdb`
--

INSERT INTO `peserta_ppdb` (`nis`, `nama`, `tempat_lahir`, `tgl_lahir`, `id_jk`, `id_agama`, `asal_sekolah`, `alamat`, `no_telp`, `nama_ortu`, `id_penghasilan_ortu`) VALUES
(192478, 'Abdul Hafid Gunawan', 'Madiun', '0000-00-00', 1, 1, 'Asal Sekolah', 'Alamat Tempat Tinggal', 8281971, 'N', 0),
(10291920, 'Annisa Indah', 'Madiun', '2017-02-21', 2, 1, 'Asal Sekolah', 'Alamat Tempat Tinggal', 881682002, 'Adadeh', 1),
(12874192, 'Retvana', 'Madiun', '2000-02-02', 2, 4, 'Asal Sekolah', 'Alamat Tempat Tinggal', 828619, 'Pri', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `jeniskelamin`
--
ALTER TABLE `jeniskelamin`
  ADD PRIMARY KEY (`id_jk`),
  ADD KEY `jenis_kelamin` (`jenis_kelamin`);

--
-- Indexes for table `penghasilan_ortu`
--
ALTER TABLE `penghasilan_ortu`
  ADD PRIMARY KEY (`id_penghasilan_ortu`),
  ADD KEY `penghasilan_ortu` (`penghasilan_ortu`);

--
-- Indexes for table `peserta_ppdb`
--
ALTER TABLE `peserta_ppdb`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `nama` (`nama`),
  ADD KEY `id_penghasilan_ortu` (`id_penghasilan_ortu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id_agama` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jeniskelamin`
--
ALTER TABLE `jeniskelamin`
  MODIFY `id_jk` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `penghasilan_ortu`
--
ALTER TABLE `penghasilan_ortu`
  MODIFY `id_penghasilan_ortu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `peserta_ppdb`
--
ALTER TABLE `peserta_ppdb`
  MODIFY `nis` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12874193;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
