-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 09:32 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sielkin`
--

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nm_kegiatan` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nm_kegiatan`) VALUES
(25, 'Cetak Su'),
(27, 'Cetak Sertifikat');

-- --------------------------------------------------------

--
-- Table structure for table `kg_harian`
--

CREATE TABLE `kg_harian` (
  `id_harian` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `jm_berkas` varchar(20) NOT NULL,
  `lain` varchar(50) NOT NULL,
  `tgl_harian` date NOT NULL,
  `status` int(11) NOT NULL,
  `target` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kg_produktifitas`
--

CREATE TABLE `kg_produktifitas` (
  `id_produktiftas` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `jm_produktifitas` varchar(20) NOT NULL,
  `tgl_produktifitas` date NOT NULL,
  `kegiatan_lain` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kg_produktifitas`
--

INSERT INTO `kg_produktifitas` (`id_produktiftas`, `user_id`, `id_kegiatan`, `jm_produktifitas`, `tgl_produktifitas`, `kegiatan_lain`, `status`) VALUES
(21, 7, 25, '11', '2022-07-11', 'Melakukan Cetak SU ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `keterangan`) VALUES
(1, 'Admin'),
(2, 'Pejabat'),
(3, 'Pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kritik`
--

CREATE TABLE `tbl_kritik` (
  `id_kritik` int(11) NOT NULL,
  `isi` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kritik`
--

INSERT INTO `tbl_kritik` (`id_kritik`, `isi`, `tgl`, `user_id`) VALUES
(74, 'Perlu Adanya tempat untuk memisahkan berkas\r\n', '2022-07-11', 7),
(75, 'Ruangan Kurang Memadai', '2022-07-14', 8);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `create_on` date NOT NULL,
  `role_id` int(11) NOT NULL,
  `telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `nama`, `nik`, `email`, `password`, `image`, `alamat`, `create_on`, `role_id`, `telp`) VALUES
(7, 'Rio Darmeita', '3275090205000021', 'riodarmeita234@gmail.com', '$2y$10$p7bG2gdfu7xblnBV0qg/vuJpCXPNrvBv2.pDYRKlTzXGXAo.Jzcga', 'default.svg', 'Puri Nawala Permai', '2022-06-18', 1, '081295555555'),
(8, 'ridddddd', '3275090205000010', 'riodarmeita890@gmail.com', '$2y$10$KLDQQEThR6EqkDgk/4vfoOSxlE48w9E3Jaz557aWBSom9DWouDmTS', 'default2.svg', '', '2022-06-19', 2, ''),
(9, 'Meita', '3275090205111121', 'darmeita@gmail.com', '$2y$10$WYlnNFVYNxR3AnHa/C3K6Oa87nG2AWLekX05kxCtAuhLX93UQ.dwS', 'profil.svg', '', '2022-06-26', 3, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `kg_harian`
--
ALTER TABLE `kg_harian`
  ADD PRIMARY KEY (`id_harian`),
  ADD KEY `id_kegiatan` (`id_kegiatan`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `kg_produktifitas`
--
ALTER TABLE `kg_produktifitas`
  ADD PRIMARY KEY (`id_produktiftas`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `id_kegiatan` (`id_kegiatan`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_kritik`
--
ALTER TABLE `tbl_kritik`
  ADD PRIMARY KEY (`id_kritik`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `kg_harian`
--
ALTER TABLE `kg_harian`
  MODIFY `id_harian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `kg_produktifitas`
--
ALTER TABLE `kg_produktifitas`
  MODIFY `id_produktiftas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_kritik`
--
ALTER TABLE `tbl_kritik`
  MODIFY `id_kritik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kg_harian`
--
ALTER TABLE `kg_harian`
  ADD CONSTRAINT `kg_harian_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kg_harian_ibfk_2` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kg_produktifitas`
--
ALTER TABLE `kg_produktifitas`
  ADD CONSTRAINT `kg_produktifitas_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kg_produktifitas_ibfk_2` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_kritik`
--
ALTER TABLE `tbl_kritik`
  ADD CONSTRAINT `tbl_kritik_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `role` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
