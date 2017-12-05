-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2017 at 02:57 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.1.12-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salahklik`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(2, 'kategori 1', '2017-12-04 09:21:37', '2017-12-04 09:21:37'),
(3, 'kategori 2', '2017-12-04 09:21:37', '2017-12-04 09:21:37'),
(4, 'kategori 3', '2017-12-04 09:21:37', '2017-12-04 09:21:37');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `permalink` varchar(255) NOT NULL,
  `sub_kategori` int(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id`, `judul`, `permalink`, `sub_kategori`, `deskripsi`, `gambar`, `penulis`, `created_at`, `updated_at`) VALUES
(3, 'judul yang ter sakiti ubah lagi dan lagi', 'judul-yang-ter-sakiti-ubah-lagi-dan-lagi', 3, '<p>deskripsdjfgsdefj segfrsejg esukrywe ejreuwyr jeysrusyegr jseur er</p>', './assets/upload/salah_klik_3685201215a264bcfd8276.jpg', '3', '2017-12-05 12:07:46', '2017-12-05 02:33:35'),
(5, 'judul yang ter sakiti', 'judul-yang-ter-sakiti', 2, '<p>deskripsdjfgsdefj segfrsejg esukrywe ejreuwyr jeysrusyegr jseur er</p>', './assets/upload/salah_klik_3685201215a264bcfd8276.jpg', '1', '2017-12-05 12:10:28', '2017-12-05 12:10:28'),
(6, 'judul yang ter sakiti part 5', 'judul-yang-ter-sakiti-part-5', 3, '<p>deskripsdjfgsdefj segfrsejg esukrywe ejreuwyr jeysrusyegr jseur er</p>', './assets/upload/salah_klik_3685201215a264bcfd8276.jpg', '1', '2017-12-05 01:18:24', '2017-12-05 01:18:24'),
(7, 'judul yang ter sakiti', 'judul-yang-ter-sakiti', 1, '<p>deskripsdjfgsdefj segfrsejg esukrywe ejreuwyr jeysrusyegr jseur er</p>', './assets/upload/salah_klik_11450271595a264b12aa2f3.jpg', '7', '2017-12-05 02:14:41', '2017-12-05 02:30:26'),
(8, 'judul yang ter sakiti', 'judul-yang-ter-sakiti', 1, '<p>deskripsdjfgsdefj segfrsejg esukrywe ejreuwyr jeysrusyegr jseur er</p>', './assets/upload/salah_klik_3685201215a264bcfd8276.jpg', '8', '2017-12-05 02:15:43', '2017-12-05 02:23:25');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(10) NOT NULL,
  `nama_role` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `nama_role`) VALUES
(1, 'Administrator'),
(2, 'Penulis');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kategori`
--

CREATE TABLE `sub_kategori` (
  `id` int(10) NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `nama_sub_kategori` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_kategori`
--

INSERT INTO `sub_kategori` (`id`, `id_kategori`, `nama_sub_kategori`, `created_at`, `updated_at`) VALUES
(1, 2, 'sub kat 1', '2017-12-04 09:36:06', '2017-12-04 09:36:06'),
(2, 2, 'sub kat 1 ubah', '2017-12-04 09:57:07', '2017-12-04 11:31:55'),
(3, 3, 'sub kat 2', '2017-12-04 09:57:07', '2017-12-04 11:31:55'),
(4, 4, 'sub kat 3', '2017-12-04 09:57:07', '2017-12-04 11:31:55'),
(5, 2, 'sub kat 1', '2017-12-04 09:36:06', '2017-12-04 09:36:06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nama` char(50) NOT NULL,
  `alamat` text NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `role` int(1) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `notelp`, `role`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Tio', 'h', '111111111111', 1, 'root', 'e10adc3949ba59abbe56e057f20f883e', '2017-12-04 07:54:28', '2017-12-04 07:54:28'),
(3, 'telah di ubah', 'h', '111111111111', 2, 'root2', 'e10adc3949ba59abbe56e057f20f883e', '2017-12-04 07:57:07', '2017-12-04 08:16:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
