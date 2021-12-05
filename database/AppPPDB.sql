-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2021 at 06:55 PM
-- Server version: 10.0.34-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 5.6.35-1+ubuntu16.04.1+deb.sury.org+1

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
-- Table structure for table `biodata_ortu`
--

CREATE TABLE `biodata_ortu` (
  `id` bigint(20) NOT NULL,
  `nama_ayah` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pekerjaan_ayah` int(1) DEFAULT NULL,
  `id_pekerjaan_ibu` int(1) NOT NULL,
  `id_penghasilan_ayah` int(1) DEFAULT NULL,
  `id_penghasilan_ibu` int(1) NOT NULL,
  `nis` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biodata_ortu`
--

INSERT INTO `biodata_ortu` (`id`, `nama_ayah`, `nama_ibu`, `id_pekerjaan_ayah`, `id_pekerjaan_ibu`, `id_penghasilan_ayah`, `id_penghasilan_ibu`, `nis`) VALUES
(3, 'Danang', 'Vira', 1, 1, 4, 4, 1),
(4, 'Gunawan', 'Siti', 1, 1, 4, 4, 2),
(5, 'Tea', 'Le Wang', 1, 1, 1, 1, 3),
(6, 'Udin', 'Lila', 1, 8, 3, 1, 4),
(7, 'ad', 'wdaw', 1, 1, 1, 1, 5),
(8, 'Tuji', 'Erza', 2, 5, 4, 4, 123232232),
(9, 'a', 'ds', 1, 2, 4, 2, 92049),
(10, 'Irfan', 'Milah', 3, 8, 4, 1, 1),
(11, 'Irwan', 'Diana', 1, 6, 4, 4, 100),
(12, '', '', 1, 1, 1, 1, 99),
(13, '', '', 1, 1, 1, 1, 0),
(14, '', '', 1, 1, 1, 1, 0),
(15, '', '', 1, 1, 1, 1, 20),
(16, '', '', 1, 1, 1, 1, 0),
(17, 'Irwansyah', 'Nita', 6, 1, 4, 4, 2159),
(18, '', '', 1, 1, 1, 1, 1002),
(19, '', '', 1, 1, 1, 1, 10802),
(20, '', '', 1, 1, 1, 1, 21991),
(21, '', '', 1, 1, 1, 1, 52),
(22, '', '', 1, 1, 1, 1, 35252),
(23, '', '', 1, 1, 1, 1, 252),
(24, '', '', 1, 1, 1, 1, 242),
(25, '', '', 1, 1, 1, 1, 324723),
(26, '', '', 1, 1, 1, 1, 253),
(27, '', '', 1, 1, 1, 1, 255),
(28, '', '', 1, 1, 1, 1, 235),
(29, '', '', 1, 1, 1, 1, 111),
(30, 'Metana', 'Melinda', 1, 3, 4, 4, 900),
(31, 'Pasifky', 'Najah', 7, 8, 4, 1, 901),
(32, 'Prasetyawan', 'Lila', 7, 8, 4, 4, 341),
(33, 'Parno', 'Lisa', 3, 6, 3, 4, 1001),
(34, '', '', 1, 1, 1, 1, 102),
(35, '', '', 1, 1, 1, 1, 0),
(36, 'Mala', 'Indri', 3, 3, 3, 4, 2000),
(37, 'awdaw', 'awfwag', 3, 2, 4, 4, 29929010);

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id` int(255) NOT NULL,
  `no_pendaftaran` int(10) NOT NULL,
  `nama` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` int(1) DEFAULT NULL,
  `asal_sekolah` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nis` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id`, `no_pendaftaran`, `nama`, `jurusan`, `asal_sekolah`, `nis`) VALUES
(5, 0, 'Abdul Hafid Gunawan', 1, 'SMPN 1 Mejayan', 2),
(8, 3, 'Retnani Ananda Primastuti', 1, 'SMPN 1 Malang', 1),
(9, 4, 'Fahrul Ulil', 4, 'SMP 1 Jepara', 4),
(11, 92049, 'Mr', 1, 'dksjkdj', 92049);

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
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(1) NOT NULL,
  `jurusan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `jurusan`) VALUES
(1, 'RPL'),
(2, 'MM'),
(3, 'TKJ'),
(4, 'Design Graphic');

-- --------------------------------------------------------

--
-- Stand-in structure for view `laporan_hasil`
--
CREATE TABLE `laporan_hasil` (
`nis` int(20)
,`nama` varchar(25)
,`tempat_lahir` varchar(20)
,`tgl_lahir` date
,`id_jk` int(1)
,`id_agama` int(1)
,`asal_sekolah` varchar(20)
,`alamat` text
,`no_telp` bigint(12)
,`id_jurusan1` int(1)
,`id_jurusan2` int(1)
,`nama_ayah` varchar(20)
,`nama_ibu` varchar(20)
,`id_pekerjaan_ayah` int(1)
,`id_pekerjaan_ibu` int(1)
,`id_penghasilan_ayah` int(1)
,`id_penghasilan_ibu` int(1)
,`n_bin` int(20)
,`n_mtk` int(20)
,`n_ipa` int(20)
,`n_bing` int(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'Rekayasa', 'admin'),
(2, 'zekken', '123', 'hafid');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(20) NOT NULL,
  `nis` int(20) NOT NULL,
  `n_bin` int(20) NOT NULL,
  `n_mtk` int(20) NOT NULL,
  `n_ipa` int(20) NOT NULL,
  `n_bing` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `nis`, `n_bin`, `n_mtk`, `n_ipa`, `n_bing`) VALUES
(1, 1, 100, 100, 100, 100),
(2, 2, 100, 100, 100, 100),
(3, 3, 90, 70, 70, 55),
(4, 4, 90, 100, 90, 100),
(5, 5, 70, 95, 50, 90),
(100, 100, 75, 85, 90, 90),
(2159, 2159, 100, 100, 90, 90),
(92049, 92049, 100, 100, 100, 20),
(92050, 99, 0, 0, 0, 0),
(92051, 0, 0, 0, 0, 0),
(92052, 0, 0, 0, 0, 0),
(92053, 20, 0, 0, 0, 0),
(92054, 0, 0, 0, 0, 0),
(92055, 1001, 100, 75, 75, 92),
(92056, 1002, 0, 0, 0, 0),
(92057, 10802, 0, 0, 0, 0),
(92058, 21991, 0, 0, 0, 0),
(92059, 52, 0, 0, 0, 0),
(92060, 35252, 0, 0, 0, 0),
(92061, 252, 0, 0, 0, 0),
(92062, 242, 0, 0, 0, 0),
(92063, 324723, 0, 0, 0, 0),
(92064, 253, 0, 0, 0, 0),
(92065, 255, 0, 0, 0, 0),
(92066, 235, 0, 0, 0, 0),
(92067, 111, 0, 0, 0, 0),
(92068, 900, 90, 75, 90, 80),
(92069, 901, 70, 75, 90, 100),
(92070, 341, 100, 75, 75, 80),
(92071, 1001, 100, 90, 85, 90),
(92072, 0, 0, 0, 0, 0),
(92073, 2000, 100, 50, 90, 80),
(92074, 29929010, 90, 80, 50, 90);

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan_ortu`
--

CREATE TABLE `pekerjaan_ortu` (
  `id_pekerjaan_ortu` int(1) NOT NULL,
  `nama_pekerjaan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pekerjaan_ortu`
--

INSERT INTO `pekerjaan_ortu` (`id_pekerjaan_ortu`, `nama_pekerjaan`) VALUES
(1, 'Wiraswasta'),
(2, 'Petani'),
(3, 'Guru'),
(4, 'Tentara'),
(5, 'Nelayan'),
(6, 'Novelis'),
(7, 'Programmer'),
(8, 'Ibu Rumah Tangga');

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
(2, '> 500.000'),
(3, '1.250.000'),
(4, '1.500.000');

-- --------------------------------------------------------

--
-- Stand-in structure for view `pengumuman`
--
CREATE TABLE `pengumuman` (
`nis` int(20)
,`nama` varchar(25)
,`jurusan` int(1)
,`asal_sekolah` varchar(20)
,`n_bin` int(20)
,`n_mtk` int(20)
,`n_ipa` int(20)
,`n_bing` int(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `peserta_ppdb`
--

CREATE TABLE `peserta_ppdb` (
  `nis` int(20) NOT NULL,
  `nama` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_jk` int(1) NOT NULL,
  `id_agama` int(1) NOT NULL,
  `asal_sekolah` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` bigint(12) NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_jurusan1` int(1) NOT NULL,
  `id_jurusan2` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peserta_ppdb`
--

INSERT INTO `peserta_ppdb` (`nis`, `nama`, `tempat_lahir`, `tgl_lahir`, `id_jk`, `id_agama`, `asal_sekolah`, `alamat`, `no_telp`, `tgl_daftar`, `id_jurusan1`, `id_jurusan2`) VALUES
(1, 'Retnani Ananda Primastuti', 'Malang', '2001-02-21', 2, 1, 'SMPN 1 Malang', 'Ds. Mrau', 823618392, '2018-03-05 08:22:53', 2, 3),
(2, 'Abdul Hafid Gunawan', 'Madiun', '2000-09-05', 1, 1, 'SMPN 1 Mejayan', 'Ds. Pandean', 813827492, '2018-03-05 09:30:10', 2, 1),
(3, 'Annisa Indah Rahmawati', 'Madiun', '2001-02-24', 2, 1, 'SMPN 2 Mejayan', 'Ds. Pandean', 8136839283, '2018-03-05 09:14:39', 1, 4),
(4, 'Fahrul Ulil', 'Jepara', '2084-08-04', 1, 1, 'SMP 1 Jepara', 'Ds. Tea', 81824792792, '2018-03-06 07:28:36', 4, 1),
(5, 'Manusia', 'Madiun', '2920-05-24', 1, 1, 'a', 'a', 242421, '2018-03-06 07:40:47', 3, 2),
(102, 'a', '', '0000-00-00', 0, 1, '', '', 0, '2018-04-16 14:02:46', 1, 1),
(341, 'Ella Prasetya', 'Madiun', '2001-08-20', 2, 1, 'SMPN 1 Mejayan', 'Ds. Bangunsari', 8138624829, '2018-03-08 00:00:51', 2, 1),
(900, 'Emillia', 'Sulawesi', '2001-09-29', 2, 2, 'SMPN 1 Telakarja', 'Telakarja', 8136723922, '2018-03-07 04:58:35', 3, 2),
(901, 'Ammar Annajih Pasifky', 'Purbalingga', '2001-03-24', 1, 1, 'SMKN 1 Purbalingga', 'Purbalingga', 8177299287, '2018-03-07 06:29:49', 1, 2),
(1001, 'Annisa Indah Ratih', 'Madiun', '2002-02-21', 2, 1, 'SMPN 1 Mejayan', 'Mejayan', 8129927429, '2018-04-16 13:27:58', 1, 4),
(2000, 'Zulia', 'Jepara', '2002-02-02', 2, 1, 'SMKN 1 Jepara', 'Jepara', 813923820242, '2019-05-12 22:40:35', 3, 2),
(2159, 'Avira Claudia Dwi Saputri', 'Malang', '2001-09-20', 2, 1, 'SMPN 3 Malang', 'Malang', 813862839, '2018-03-08 01:29:43', 4, 2),
(92049, 'Mr', 'klfslk', '0932-09-08', 1, 1, 'dksjkdj', 'djskdsk', 8178327, '2018-03-06 09:15:21', 4, 3),
(29929010, 'aurel', 'purbalingga', '2999-09-29', 2, 1, 'awdaw', 'awd', 24242415, '2021-03-18 11:06:08', 1, 2),
(123232232, 'P', 'Madiun', '2018-03-27', 1, 6, 'SMK N 1 Mejayan', 'Purbalingga', 85612313131, '2018-03-06 09:12:49', 4, 2),
(123232233, 'a', '', '0000-00-00', 0, 1, '', '', 0, '2018-03-07 03:27:05', 1, 1),
(123232234, 'jawjdih', 'ihawid', '0009-09-24', 1, 1, 'wad', 'wad', 2425, '2021-03-18 11:09:32', 1, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `seleksi_jurusan`
--
CREATE TABLE `seleksi_jurusan` (
`nis` int(20)
,`nama` varchar(25)
,`id_jurusan1` int(1)
,`id_jurusan2` int(1)
,`n_bin` int(20)
,`n_mtk` int(20)
,`n_ipa` int(20)
,`n_bing` int(20)
);

-- --------------------------------------------------------

--
-- Structure for view `laporan_hasil`
--
DROP TABLE IF EXISTS `laporan_hasil`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `laporan_hasil`  AS  select `peserta_ppdb`.`nis` AS `nis`,`peserta_ppdb`.`nama` AS `nama`,`peserta_ppdb`.`tempat_lahir` AS `tempat_lahir`,`peserta_ppdb`.`tgl_lahir` AS `tgl_lahir`,`peserta_ppdb`.`id_jk` AS `id_jk`,`peserta_ppdb`.`id_agama` AS `id_agama`,`peserta_ppdb`.`asal_sekolah` AS `asal_sekolah`,`peserta_ppdb`.`alamat` AS `alamat`,`peserta_ppdb`.`no_telp` AS `no_telp`,`peserta_ppdb`.`id_jurusan1` AS `id_jurusan1`,`peserta_ppdb`.`id_jurusan2` AS `id_jurusan2`,`biodata_ortu`.`nama_ayah` AS `nama_ayah`,`biodata_ortu`.`nama_ibu` AS `nama_ibu`,`biodata_ortu`.`id_pekerjaan_ayah` AS `id_pekerjaan_ayah`,`biodata_ortu`.`id_pekerjaan_ibu` AS `id_pekerjaan_ibu`,`biodata_ortu`.`id_penghasilan_ayah` AS `id_penghasilan_ayah`,`biodata_ortu`.`id_penghasilan_ibu` AS `id_penghasilan_ibu`,`nilai`.`n_bin` AS `n_bin`,`nilai`.`n_mtk` AS `n_mtk`,`nilai`.`n_ipa` AS `n_ipa`,`nilai`.`n_bing` AS `n_bing` from ((`peserta_ppdb` join `biodata_ortu` on((`peserta_ppdb`.`nis` = `biodata_ortu`.`nis`))) join `nilai` on((`peserta_ppdb`.`nis` = `nilai`.`nis`))) ;

-- --------------------------------------------------------

--
-- Structure for view `pengumuman`
--
DROP TABLE IF EXISTS `pengumuman`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pengumuman`  AS  select `peserta_ppdb`.`nis` AS `nis`,`peserta_ppdb`.`nama` AS `nama`,`hasil`.`jurusan` AS `jurusan`,`hasil`.`asal_sekolah` AS `asal_sekolah`,`nilai`.`n_bin` AS `n_bin`,`nilai`.`n_mtk` AS `n_mtk`,`nilai`.`n_ipa` AS `n_ipa`,`nilai`.`n_bing` AS `n_bing` from ((`peserta_ppdb` join `hasil` on((`peserta_ppdb`.`nis` = `hasil`.`nis`))) join `nilai` on((`peserta_ppdb`.`nis` = `nilai`.`nis`))) ;

-- --------------------------------------------------------

--
-- Structure for view `seleksi_jurusan`
--
DROP TABLE IF EXISTS `seleksi_jurusan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `seleksi_jurusan`  AS  select `peserta_ppdb`.`nis` AS `nis`,`peserta_ppdb`.`nama` AS `nama`,`peserta_ppdb`.`id_jurusan1` AS `id_jurusan1`,`peserta_ppdb`.`id_jurusan2` AS `id_jurusan2`,`nilai`.`n_bin` AS `n_bin`,`nilai`.`n_mtk` AS `n_mtk`,`nilai`.`n_ipa` AS `n_ipa`,`nilai`.`n_bing` AS `n_bing` from (`peserta_ppdb` join `nilai` on((`peserta_ppdb`.`nis` = `nilai`.`nis`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `biodata_ortu`
--
ALTER TABLE `biodata_ortu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `jeniskelamin`
--
ALTER TABLE `jeniskelamin`
  ADD PRIMARY KEY (`id_jk`),
  ADD KEY `jenis_kelamin` (`jenis_kelamin`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pekerjaan_ortu`
--
ALTER TABLE `pekerjaan_ortu`
  ADD PRIMARY KEY (`id_pekerjaan_ortu`);

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
  ADD KEY `id_jk` (`id_jk`),
  ADD KEY `id_agama` (`id_agama`),
  ADD KEY `id_jurusan1` (`id_jurusan1`),
  ADD KEY `id_jurusan2` (`id_jurusan2`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id_agama` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `biodata_ortu`
--
ALTER TABLE `biodata_ortu`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `jeniskelamin`
--
ALTER TABLE `jeniskelamin`
  MODIFY `id_jk` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92075;
--
-- AUTO_INCREMENT for table `pekerjaan_ortu`
--
ALTER TABLE `pekerjaan_ortu`
  MODIFY `id_pekerjaan_ortu` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `penghasilan_ortu`
--
ALTER TABLE `penghasilan_ortu`
  MODIFY `id_penghasilan_ortu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `peserta_ppdb`
--
ALTER TABLE `peserta_ppdb`
  MODIFY `nis` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123232235;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
