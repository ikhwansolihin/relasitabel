-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2023 at 08:49 AM
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
-- Database: `relasi_ikhwan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'TL'),
(2, 'Rpl'),
(3, 'Rpl'),
(4, 'Rpl'),
(5, 'TL'),
(6, 'RPL'),
(7, 'Rpl'),
(8, 'TBSM');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(4) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_spp1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nama`, `kelas`, `id_jurusan`, `id_spp1`) VALUES
(4, 'ikhwan', 'XII', 4, 4),
(5, 'pandu', 'XI', 5, 5),
(6, 'bayu', 'XI', 6, 6),
(7, 'sahlendra', 'XI', 7, 7),
(8, 'muhammad', 'XII', 8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tb_spp`
--

CREATE TABLE `tb_spp` (
  `id_spp1` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_spp`
--

INSERT INTO `tb_spp` (`id_spp1`, `tahun`, `nominal`) VALUES
(1, 2022, 150000),
(2, 2023, 120000),
(3, 2022, 150000),
(4, 2023, 120000),
(5, 2023, 200000),
(6, 2021, 120000),
(7, 2019, 15000000),
(8, 2023, 5000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_jurusan` (`id_jurusan`,`id_spp1`),
  ADD KEY `id_spp1` (`id_spp1`);

--
-- Indexes for table `tb_spp`
--
ALTER TABLE `tb_spp`
  ADD PRIMARY KEY (`id_spp1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_spp`
--
ALTER TABLE `tb_spp`
  MODIFY `id_spp1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `tb_siswa_ibfk_1` FOREIGN KEY (`id_spp1`) REFERENCES `tb_spp` (`id_spp1`),
  ADD CONSTRAINT `tb_siswa_ibfk_2` FOREIGN KEY (`id_jurusan`) REFERENCES `tb_jurusan` (`id_jurusan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
