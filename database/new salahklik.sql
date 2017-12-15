-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 15, 2017 at 08:36 AM
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
(3, 'windows xp', 'windows-xp', 4, '<p>deskripsdjfgsdefj segfrsejg esukrywe ejreuwyr jeysrusyegr jseur er</p>', './assets/upload/salah_klik_3685201215a264bcfd8276.jpg', '3', '2017-12-05 12:07:46', '2017-12-05 02:33:35'),
(5, 'linux ubuntu', 'linux-ubuntu', 5, '<p>deskripsdjfgsdefj segfrsejg esukrywe ejreuwyr jeysrusyegr jseur er</p>', './assets/upload/salah_klik_3685201215a264bcfd8276.jpg', '1', '2017-12-05 12:10:28', '2017-12-05 12:10:28'),
(6, 'windows 7', 'windows-7', 4, '<p>deskripsdjfgsdefj segfrsejg esukrywe ejreuwyr jeysrusyegr jseur er</p>', './assets/upload/salah_klik_3685201215a264bcfd8276.jpg', '1', '2017-12-05 01:18:24', '2017-12-05 01:18:24'),
(7, 'judul yang ter sakiti', 'judul-yang-ter-sakiti', 4, '<p>deskripsdjfgsdefj segfrsejg esukrywe ejreuwyr jeysrusyegr jseur er</p>', './assets/upload/salah_klik_11450271595a264b12aa2f3.jpg', '1', '2017-12-05 02:14:41', '2017-12-05 02:30:26'),
(8, 'judul yang ter sakiti', 'judul-yang-ter-sakiti', 4, '<p>deskripsdjfgsdefj segfrsejg esukrywe ejreuwyr jeysrusyegr jseur er</p>', './assets/upload/salah_klik_3685201215a264bcfd8276.jpg', '1', '2017-12-05 02:15:43', '2017-12-05 02:23:25'),
(9, 'judul baru', 'judul-baru', 8, '<p xss=removed align="left">deskripsi dari <strong>judul baru</strong> dan inilah hasilnya bisa dilihat seperti ini <strong>gan </strong><strong>deskripsi dari <strong>judul baru</strong> dan inilah hasilnya bisa dilihat seperti ini <strong>gan </strong></strong><strong><strong>deskripsi dari <strong>judul baru</strong> dan inilah hasilnya bisa dilihat seperti ini <strong>gan </strong></strong></strong>deskripsi dari <strong>judul baru</strong> dan inilah hasilnya bisa dilihat seperti ini <strong>gan </strong>deskripsi dari <strong>judul baru</strong> dan inilah hasilnya bisa dilihat seperti ini <strong>gan </strong>deskripsi dari <strong>judul baru</strong> dan inilah hasilnya bisa dilihat seperti ini <strong>gan </strong>deskripsi dari <strong>judul baru</strong> dan inilah hasilnya bisa dilihat seperti ini <strong>gan </strong>deskripsi dari <strong>judul baru</strong> dan inilah hasilnya bisa dilihat seperti ini <strong>gan </strong><strong><strong><strong>deskripsi dari <strong>judul baru</strong> dan inilah hasilnya bisa dilihat seperti ini <strong>gan</strong></strong></strong></strong></p>\r\n<ol>\r\n<li xss=removed>satu</li>\r\n<li xss=removed>dua</li>\r\n<li xss=removed>tiga</li>\r\n<li xss=removed>empat</li>\r\n<li xss=removed>lima</li>\r\n</ol>', './assets/upload/salah_klik_19301061675a331ff90fd66.jpg', '1', '2017-12-15 08:06:01', '2017-12-15 08:20:08');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `id_parent` int(11) NOT NULL,
  `menu_order` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `id_parent`, `menu_order`, `nama_menu`, `link`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 'Dashboard', '', '2017-12-13 12:48:40', '2017-12-13 12:48:40'),
(2, 0, 0, 'Windows', '', '2017-12-13 12:50:11', '2017-12-13 12:50:11'),
(3, 0, 0, 'Linux', '', '2017-12-13 12:50:11', '2017-12-13 12:50:11'),
(4, 2, 1, 'OS windows', 'os-windows', '2017-12-13 12:54:41', '2017-12-13 12:54:41'),
(5, 3, 1, 'OS Linux', 'os-linux', '2017-12-13 12:54:41', '2017-12-13 12:54:41'),
(6, 2, 1, 'app windows', 'app-windows', '2017-12-13 12:54:41', '2017-12-13 12:54:41'),
(8, 3, 1, 'app linux ubuntu', 'app-linux', '2017-12-13 18:58:59', '2017-12-13 19:13:19');

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
(3, 'penulis', 'h', '111111111111', 2, 'root2', 'e10adc3949ba59abbe56e057f20f883e', '2017-12-04 07:57:07', '2017-12-04 08:16:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
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
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
