-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2020 at 09:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gipay`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `historytopup`
--

CREATE TABLE `historytopup` (
  `idTopup` int(11) NOT NULL,
  `jumlah` float NOT NULL,
  `tanggal` datetime NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `historytopup`
--

INSERT INTO `historytopup` (`idTopup`, `jumlah`, `tanggal`, `idUser`) VALUES
(1, 20000, '2020-05-07 18:28:56', 4),
(2, 30000, '2020-05-07 18:29:54', 4),
(3, 50000, '2020-05-07 18:30:18', 5);

-- --------------------------------------------------------

--
-- Table structure for table `historytransaksi`
--

CREATE TABLE `historytransaksi` (
  `idUser` int(11) NOT NULL,
  `idToko` int(11) NOT NULL,
  `jumlah` float NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemiliktoko`
--

CREATE TABLE `pemiliktoko` (
  `idUser` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `namaToko` varchar(50) NOT NULL,
  `alamatToko` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `noHp` int(12) NOT NULL,
  `saldo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemiliktoko`
--

INSERT INTO `pemiliktoko` (`idUser`, `username`, `password`, `nama`, `namaToko`, `alamatToko`, `email`, `noHp`, `saldo`) VALUES
(1, 'test', 'test', 'roi', 'roi', 'roi', 'test@g', 9, 264);

-- --------------------------------------------------------

--
-- Table structure for table `penggunapublik`
--

CREATE TABLE `penggunapublik` (
  `idUser` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `noHp` int(12) NOT NULL,
  `saldo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penggunapublik`
--

INSERT INTO `penggunapublik` (`idUser`, `username`, `password`, `nama`, `email`, `noHp`, `saldo`) VALUES
(4, 'test', 'test', 'antares', 'test@g', 21, 50000),
(5, 'test2', 'test', 'doi', 'doi@g', 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi`
--

CREATE TABLE `verifikasi` (
  `idUser` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verifikasi`
--

INSERT INTO `verifikasi` (`idUser`, `nama`, `jumlah`) VALUES
(4, 'antares', 25000),
(4, 'antares', 5600),
(4, 'antares', 25000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `historytopup`
--
ALTER TABLE `historytopup`
  ADD PRIMARY KEY (`idTopup`),
  ADD KEY `FK_idUserTop` (`idUser`);

--
-- Indexes for table `historytransaksi`
--
ALTER TABLE `historytransaksi`
  ADD KEY `FK_idTokoBay` (`idToko`),
  ADD KEY `FK_idUserBayar` (`idUser`);

--
-- Indexes for table `pemiliktoko`
--
ALTER TABLE `pemiliktoko`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `penggunapublik`
--
ALTER TABLE `penggunapublik`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `verifikasi`
--
ALTER TABLE `verifikasi`
  ADD KEY `FK_idUserVer` (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `historytopup`
--
ALTER TABLE `historytopup`
  MODIFY `idTopup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemiliktoko`
--
ALTER TABLE `pemiliktoko`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penggunapublik`
--
ALTER TABLE `penggunapublik`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `historytopup`
--
ALTER TABLE `historytopup`
  ADD CONSTRAINT `FK_idUserTop` FOREIGN KEY (`idUser`) REFERENCES `penggunapublik` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `historytransaksi`
--
ALTER TABLE `historytransaksi`
  ADD CONSTRAINT `FK_idTokoBay` FOREIGN KEY (`idToko`) REFERENCES `pemiliktoko` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_idUserBayar` FOREIGN KEY (`idUser`) REFERENCES `penggunapublik` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `verifikasi`
--
ALTER TABLE `verifikasi`
  ADD CONSTRAINT `FK_idUserVer` FOREIGN KEY (`idUser`) REFERENCES `penggunapublik` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
