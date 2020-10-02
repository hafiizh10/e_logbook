-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2020 at 03:09 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elogbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_logbook`
--

CREATE TABLE `tb_logbook` (
  `id` int(11) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `tgl` varchar(10) NOT NULL,
  `kejadian` text NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `resiko` varchar(10) NOT NULL,
  `tindakan` text NOT NULL,
  `ket` text NOT NULL,
  `nama` varchar(128) NOT NULL,
  `level` varchar(50) NOT NULL,
  `kode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_logbook`
--

INSERT INTO `tb_logbook` (`id`, `nip`, `tgl`, `kejadian`, `lokasi`, `resiko`, `tindakan`, `ket`, `nama`, `level`, `kode`) VALUES
(2, '31011', '2020-05-10', 'Jaringan Internet Down', 'Gedung Adminstrasi', 'High', 'Menghubungi pihak Telkom', 'Sudah di tindak lanjuti permasalahan selesai', 'Hafiizh Zoelva Khairani', 'Admin', '0.1.1'),
(4, '310114', '2020-12-12', 'Ruang section head kebanjiran', 'Unit Section Head', 'High', 'Membersihkan sisa banjir', 'Ruang sudah kembali bersih', 'Hafiizh Zoelva', 'Staf', '0.1.4'),
(5, '310113', '2020-02-20', 'Ruang staf terkunci', 'Ruang staf', 'High', 'Mencari kunci ruangan', 'Ruang sudah dapat dibuka kembali', 'Khairani', 'Section Head', '0.1.4'),
(7, '31011', '2020-09-23', 'Server mengalami gangguan', 'Ruang Server', 'Medium', 'Memperbaiki server', 'Server kembali normal', 'Hafiizh Zoelva Khairani', 'Admin', '0.1.1'),
(8, '310112', '2020-02-20', 'Listrik ruangan padam', 'Ruangan General Affair', 'Low', 'Menghidupkan saklar listrik dari off ke on', 'Sudah diperbaiki', 'Hafiizh', 'Department', '0.0.3'),
(13, '310113', '2020-09-26', 'Terjadi percikan api di kabel', 'Ruang Staf', 'High', 'Mematikan arus listrik', 'Keadaan sudah normal kembali', 'Khairani', 'Section Head', '0.1.4'),
(14, '310293', '2020-09-29', 'Membuat program E-Logbook', 'Ruang staf IT', 'Medium', 'Membuat program E-Logbook', 'Membuat program E-Logbook', 'Khairani Zoelva', 'Staf', '0.1.1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_unit`
--

CREATE TABLE `tb_unit` (
  `id_unit` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `unit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_unit`
--

INSERT INTO `tb_unit` (`id_unit`, `kode`, `unit`) VALUES
(2, '0.0.1', 'Airport Operation and Services Department'),
(3, '0.0.2', 'Airport Readiness Department'),
(4, '0.0.3', 'Information Communication Technology Department'),
(5, '0.0.4', 'Finance Department'),
(6, '0.0.5', 'Sales Department'),
(7, '0.0.6', 'Airport Security and Safety Department'),
(8, '0.0.7', 'Shared Services Department'),
(9, '0.1.1', 'Customer Service and Hospitality Section'),
(10, '0.1.2', 'Airport Operation Air Side Section'),
(11, '0.1.3', 'Airport Operation Land Side and Terminal Section'),
(12, '0.1.4', 'Airport Fire Fighting and Rescue Section'),
(13, '0.2.1', 'Non Terminal Air Side Section'),
(14, '0.2.2', 'Mechanical Section'),
(15, '0.2.3', 'Electrical Section'),
(16, '0.3.1', 'Application Operation and Support Section'),
(17, '0.3.2', 'Airport Technology, Network Operation and Support Section'),
(18, '0.4.1', 'Accounting Section'),
(19, '0.4.2', 'Treasury Section'),
(20, '0.4.3', 'Account Receivable Section'),
(21, '0.5.1', 'Aviation and Cargo Sales Section'),
(22, '0.5.2', 'Property and Advertising Sales Section'),
(23, '0.5.3', 'Retail, Food and Beverage Sales Section'),
(24, '0.5.4', 'Corporate Social Responsiblity Section'),
(25, '0.6.1', 'Safety Management System and Occupational Safety Health Section'),
(26, '0.6.2', 'Quality and Risk Management Section'),
(27, '0.7.1', 'Human Capital Section'),
(28, '0.7.2', 'General Affair Section'),
(29, '0.7.3', 'Asset Management Section'),
(30, '0.7.4', 'Communication and Legal Section');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(2556) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `qr_code` varchar(100) NOT NULL,
  `image` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nip`, `name`, `username`, `password`, `jabatan`, `kode`, `qr_code`, `image`, `role_id`) VALUES
(38, '31011', 'Hafiizh Zoelva Khairani', 'zoelva', '$2y$10$M5l8J7f3Uo.CKu6NFCzFqe8KeN2OIx1lWfgBlhPUE4t1ourwUXAN6', 'Section Head', '0.1.1', '31011.png', 'default.jpg', 1),
(39, '310112', 'Hafiizh', 'hafiizh', '$2y$10$.6OqI2RR4zbqdyvaqchQu.1ECGFdDCDUzadSQDRC2ekdq.6gOaJSy', 'Department Head', '0.0.3', '310112.png', 'default.jpg', 2),
(40, '310113', 'Khairani', 'khairani', '$2y$10$71D1XwZAh6zDnml2qKWoNuAAL5Ad.HzQMUrFddDGCYZAe0S5KVgr.', 'Section Head', '0.1.4', '310113.png', 'default.jpg', 2),
(41, '310114', 'Hafiizh Zoelva', 'zoelva10', '$2y$10$p2FXMIhsNs9qdSFAh842ZOWUc6tDapBssH/A28TOR/SuljDAyyTia', 'Staf', '0.1.4', '310114.png', 'default.jpg', 2),
(42, '310293', 'Khairani Zoelva', 'khairani10', '$2y$10$WVwjaXsEG7qzyQjNES0U2urWOfhZlvMXr1JoleQeG7CXNrFaqgj1C', 'Staf', '0.1.1', '310293.png', 'default.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(5, 1, 6),
(6, 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(6, 'Fitur');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 1, 'Role', 'admin/role', 'fas fa-fw fa-gear', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Sub Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(9, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-cog', 1),
(10, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(11, 1, 'Add User', 'admin/user', 'fas fa-fw fa-plus-square', 1),
(12, 1, 'Unit', 'admin/unit', 'fas fa-fw fa-sitemap', 1),
(14, 6, 'E-Logbook', 'fitur', 'fas fa-fw fa-book', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_logbook`
--
ALTER TABLE `tb_logbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_unit`
--
ALTER TABLE `tb_unit`
  ADD PRIMARY KEY (`id_unit`),
  ADD KEY `kode` (`kode`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode` (`kode`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_logbook`
--
ALTER TABLE `tb_logbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_unit`
--
ALTER TABLE `tb_unit`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
