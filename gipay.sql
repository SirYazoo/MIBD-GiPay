-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2020 at 01:19 PM
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

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `historypenarikan`
--

CREATE TABLE `historypenarikan` (
  `idPenarikan` int(11) NOT NULL,
  `noRekening` varchar(30) NOT NULL,
  `jumlah` float NOT NULL,
  `tanggal` date NOT NULL,
  `idToko` int(11) NOT NULL
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

-- --------------------------------------------------------

--
-- Table structure for table `historytransaksi`
--

CREATE TABLE `historytransaksi` (
  `idUser` int(11) DEFAULT NULL,
  `idToko` int(11) DEFAULT NULL,
  `jumlah` float NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `idKota` int(11) NOT NULL,
  `namaKota` varchar(50) NOT NULL
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
  `noHp` varchar(12) NOT NULL,
  `saldo` float NOT NULL,
  `tanggalSignUp` date NOT NULL,
  `idKota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `noHp` varchar(12) NOT NULL,
  `saldo` float NOT NULL,
  `tanggalSignUp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `persentasipotongan`
--

CREATE TABLE `persentasipotongan` (
  `persentasi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persentasipotongan`
--

INSERT INTO `persentasipotongan` (`persentasi`) VALUES
(0.6);

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi`
--

CREATE TABLE `verifikasi` (
  `idUser` int(11) NOT NULL,
  `jumlah` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `historypenarikan`
--
ALTER TABLE `historypenarikan`
  ADD PRIMARY KEY (`idPenarikan`),
  ADD KEY `FK_idToko` (`idToko`);

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
  ADD KEY `FK_idUserTran` (`idUser`),
  ADD KEY `FK_idTokoTran` (`idToko`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`idKota`);

--
-- Indexes for table `pemiliktoko`
--
ALTER TABLE `pemiliktoko`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `FK_idKota` (`idKota`);

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
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `historypenarikan`
--
ALTER TABLE `historypenarikan`
  MODIFY `idPenarikan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `historytopup`
--
ALTER TABLE `historytopup`
  MODIFY `idTopup` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `idKota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemiliktoko`
--
ALTER TABLE `pemiliktoko`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penggunapublik`
--
ALTER TABLE `penggunapublik`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `historypenarikan`
--
ALTER TABLE `historypenarikan`
  ADD CONSTRAINT `FK_idToko` FOREIGN KEY (`idToko`) REFERENCES `pemiliktoko` (`idUser`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `historytopup`
--
ALTER TABLE `historytopup`
  ADD CONSTRAINT `FK_idUserTop` FOREIGN KEY (`idUser`) REFERENCES `penggunapublik` (`idUser`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `historytransaksi`
--
ALTER TABLE `historytransaksi`
  ADD CONSTRAINT `FK_idTokoTran` FOREIGN KEY (`idToko`) REFERENCES `pemiliktoko` (`idUser`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_idUserTran` FOREIGN KEY (`idUser`) REFERENCES `penggunapublik` (`idUser`) ON DELETE SET NULL;

--
-- Constraints for table `pemiliktoko`
--
ALTER TABLE `pemiliktoko`
  ADD CONSTRAINT `FK_idKota` FOREIGN KEY (`idKota`) REFERENCES `kota` (`idKota`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `verifikasi`
--
ALTER TABLE `verifikasi`
  ADD CONSTRAINT `FK_idUserVer` FOREIGN KEY (`idUser`) REFERENCES `penggunapublik` (`idUser`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
