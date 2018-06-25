-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2018 at 11:13 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_dtuser`
--

CREATE TABLE `t_dtuser` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kel` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_file`
--

CREATE TABLE `t_file` (
  `id` int(11) NOT NULL,
  `Cid` varchar(10) NOT NULL,
  `name` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_kategori`
--

CREATE TABLE `t_kategori` (
  `id` varchar(10) NOT NULL,
  `kd` int(2) NOT NULL,
  `title` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kategori`
--

INSERT INTO `t_kategori` (`id`, `kd`, `title`) VALUES
('A', 0, 'C'),
('A.1', 1, 'Introduce'),
('A.1.1', 10, 'Pengertian C'),
('A.1.2', 21, 'C?'),
('A.1.4', 22, 'Kriteria bahasa C'),
('B', 0, 'Java'),
('B.1', 1, 'Pengenalan java');

-- --------------------------------------------------------

--
-- Table structure for table `t_modul`
--

CREATE TABLE `t_modul` (
  `id` varchar(10) NOT NULL,
  `kd` int(2) NOT NULL,
  `title` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `linkv` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_modul`
--

INSERT INTO `t_modul` (`id`, `kd`, `title`, `isi`, `linkv`) VALUES
('A.1.1', 10, 'Pengertian C', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_opsi`
--

CREATE TABLE `t_opsi` (
  `id` varchar(10) NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_opsi`
--

INSERT INTO `t_opsi` (`id`, `a`, `b`, `c`, `d`) VALUES
('A.1.2', 'aaaaaaaaaaaaaaaaaaaaaaa', 'bbbbbbbbbbbbbbbbbbbbb', 'ccccccccccccccccc', 'dddddddddddddddddddddddddd'),
('A.1.4', 'assdfsdfdfsdf', 'bsdfsdfgdfgsfgd', 'csgdfgdfgsdfgdfg', 'dfsdgresggdfsgsdfgsdfgdsfg');

-- --------------------------------------------------------

--
-- Table structure for table `t_quis`
--

CREATE TABLE `t_quis` (
  `id` varchar(10) NOT NULL,
  `kd` int(3) NOT NULL,
  `title` varchar(50) NOT NULL,
  `quest` varchar(200) NOT NULL,
  `ky` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_quis`
--

INSERT INTO `t_quis` (`id`, `kd`, `title`, `quest`, `ky`) VALUES
('A.1.2', 21, 'C?', 'Bahasa C adalah', 'c'),
('A.1.4', 22, 'Kriteria bahasa C', 'Kriteria bahasa C', 'cd');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id` tinyint(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `reset` varchar(250) NOT NULL,
  `level` varchar(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id`, `username`, `pass`, `email`, `reset`, `level`, `tanggal`) VALUES
(1, 'admin', '$2y$10$aa4ZPnKTGa7FTRC6zXs7J.SKSfRNO3thypLw3385Juwjp8fW1sMsC', 'admin@gmail.com', '', 'admin', '2018-04-01'),
(3, 'roni', '$2y$10$ySu5dKATvqIuYq7LePaiaeTxyIupsMYWhvHZ2DY4MwvXPAaji1YpW', 'galangajisusanto97@gmail.com', '42cdae4c4292e82b87e7f0ea2b1520a4', 'user', '2018-04-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_dtuser`
--
ALTER TABLE `t_dtuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_file`
--
ALTER TABLE `t_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_kategori`
--
ALTER TABLE `t_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_modul`
--
ALTER TABLE `t_modul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_opsi`
--
ALTER TABLE `t_opsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_quis`
--
ALTER TABLE `t_quis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_file`
--
ALTER TABLE `t_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
