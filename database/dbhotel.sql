-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2020 at 11:17 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbhotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`) VALUES
(1, 'tasya18', 'tasya123'),
(2, 'ana011', 'ana0511'),
(3, 'ayusda19', 'ayusda19');

-- --------------------------------------------------------

--
-- Table structure for table `akunpengguna`
--

CREATE TABLE `akunpengguna` (
  `iduser` int(11) NOT NULL,
  `idpengguna` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akunpengguna`
--

INSERT INTO `akunpengguna` (`iduser`, `idpengguna`, `username`, `password`) VALUES
(1, 1, 'tasya_selvia18', 'tasya123'),
(2, 2, 'admin', 'tasya2410'),
(3, 3, 'ayusda', 'ayusda1'),
(4, 4, 'anajanatun', 'ana1'),
(5, 5, 'dira', 'dira22'),
(6, 7, 'sholeh', 'sholeh123'),
(7, 7, 'sintha', 'sinsin'),
(8, 8, 'tika', 'tika08'),
(9, 9, 'roqib', '10roqib'),
(10, 10, 'ridwan', 'ridwan2323');

-- --------------------------------------------------------

--
-- Table structure for table `datahotel`
--

CREATE TABLE `datahotel` (
  `idhotel` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Alamat` varchar(200) NOT NULL,
  `Kontak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datahotel`
--

INSERT INTO `datahotel` (`idhotel`, `Nama`, `Alamat`, `Kontak`) VALUES
(1, 'Hotel Blitz', 'Komplek Pertokoan Tunas Regency Blok A2 Sagulung', '(0778) 7361000'),
(2, 'Hotel Prima', 'Komplek Pertokoan Batam Center Blok B2.10', '087987689322'),
(3, 'Hotel Blitz', 'Komplek Ruko Nagoya City Blok AA No.123 ', '087656264892'),
(4, 'Link Hotel', 'Komplek Pertokoan Limanda Blok D.6-8 Bt.Aji', '0897987352643'),
(5, 'Hotel Venia', 'Pertokoan Graha Nusa Batam Blok B.7-5', '085567453625'),
(6, 'Hotel The Merlion', 'Komplek Perumahan Marina Square blok A3-11', '08936758343'),
(7, 'SP Hotel', 'Komplek Ruko SP Plaza No.4-15', '086236125634'),
(8, 'Sky Hotel', 'Ruko Kepri Mall NO.27-34 Sukajadi Batam', '082436378212'),
(9, 'KTM Hotel', 'Jalan Kolonel Tg.Pinggir Sekupang No 23', '085634324472'),
(10, 'Penuin Hotel', 'Komplek Pertokoan Penuin shopping center blok EE No.34', '087675677472');

-- --------------------------------------------------------

--
-- Table structure for table `datapengguna`
--

CREATE TABLE `datapengguna` (
  `idpengguna` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Alamat` text NOT NULL,
  `jk` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Kota` varchar(20) NOT NULL,
  `Telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datapengguna`
--

INSERT INTO `datapengguna` (`idpengguna`, `Nama`, `Alamat`, `jk`, `Email`, `Kota`, `Telepon`) VALUES
(1, 'Tasya Selvia ', 'Batu Aji', 'Perempuan', 'tasya18@gmail.com', 'Batam ', '085652134528'),
(2, 'Erna Nadira', 'Batu Aji', 'Perempuan', 'Erna@gmail.com', 'Batam', '085652134528'),
(3, 'Umi Nasinta', 'Perum.Perumnas', 'Perempuan', 'umi12@gmail.com', 'Batam', '08976764435'),
(4, 'Ana Jannatu ', 'Bengkong Indah', 'Perempuan', 'auzlifat66@gmail.com', 'Batam', '081234564566'),
(5, 'Shalihah Putri ', 'Sengkuang Bt.Ampar', 'Perempuan', 'shalihahputri67@gmail.com', 'Batam', '089976578858'),
(6, 'Ridwan Hidayat', 'Pulau Karimun', 'Laki-Laki', 'ridwanhidayt@gmail.co.id', 'Karimun', '086545564622'),
(7, 'Abdul Iqbal', 'Batu Aji', 'Laki-Laki', 'Abdul88@gmail.com', 'Batam', '08976775632'),
(8, 'Ajeng Kartika ', 'Tg.Uban ', 'Perempuan', 'Ajengtika12@gmail.com', 'Tg.Pinang', '082347221834'),
(9, 'Ayusda Renjani', 'Kav.Seroja', 'Perempuan', 'uususda02@gmail.com', 'Batam', '089765644213'),
(10, 'Muhammad Adri', 'Kav.Saguba', 'Laki-Laki', 'adrianmuhammad@gmail.com', 'Batam', '076564367842');

-- --------------------------------------------------------

--
-- Table structure for table `detailpesan`
--

CREATE TABLE `detailpesan` (
  `idpesan` int(11) NOT NULL,
  `idkamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailpesan`
--

INSERT INTO `detailpesan` (`idpesan`, `idkamar`) VALUES
(1, 1),
(2, 1),
(3, 3),
(4, 4),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `idkamar` int(11) NOT NULL,
  `idhotel` int(11) NOT NULL,
  `jeniskamar` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `Foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`idkamar`, `idhotel`, `jeniskamar`, `harga`, `Foto`) VALUES
(1, 1, 'Standar room (STD)', 350000, 'ba2.jpg'),
(2, 1, 'suite', 500000, 's4.jpeg'),
(3, 3, 'deluxe room', 600000, 'ba.jpeg'),
(4, 4, 'superior room', 350000, 'b7.jpg'),
(5, 5, 'deluxe room', 600000, 'ba3.jpg'),
(6, 6, 'standar room', 350000, 'b5.jpg'),
(7, 7, 'superior room', 600000, 'b4.jpg'),
(8, 8, 'standar room', 350000, 'b5.jpg'),
(9, 9, 'suite', 500000, 'b2.jpg'),
(10, 10, 'deluxe room', 600000, 'b8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `idpesan` int(11) NOT NULL,
  `idpengguna` int(11) NOT NULL,
  `PilihHotel` varchar(100) NOT NULL,
  `CheckIn` date NOT NULL,
  `CheckOut` date NOT NULL,
  `JumlahTamu` int(11) NOT NULL,
  `JumlahKamar` int(11) NOT NULL,
  `totalharga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`idpesan`, `idpengguna`, `PilihHotel`, `CheckIn`, `CheckOut`, `JumlahTamu`, `JumlahKamar`, `totalharga`) VALUES
(1, 1, 'Batam', '2020-05-13', '2020-05-13', 3, 5, 4000000),
(2, 2, 'batam', '2020-05-03', '2020-05-13', 2, 3, 23000000),
(3, 3, 'bali', '2020-07-01', '2020-07-02', 2, 1, 600000),
(4, 4, 'yogyakarta', '2020-06-10', '2020-06-11', 4, 2, 120000),
(6, 6, 'batam', '2020-06-09', '2020-06-10', 2, 1, 500000),
(7, 7, 'yogyakarta', '2020-07-01', '2020-07-02', 3, 1, 300000),
(8, 8, 'batam', '2020-12-29', '2020-12-31', 7, 5, 2500000),
(9, 9, 'bali', '2020-07-06', '2020-07-07', 3, 2, 120000),
(10, 10, 'bali', '2020-07-15', '2020-07-16', 1, 1, 500000),
(11, 2, 'Batam', '2020-06-07', '2020-06-09', 2, 1, 650000);

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `Id` int(50) NOT NULL,
  `Foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`Id`, `Foto`) VALUES
(1, 'pemjog4.jpg'),
(2, 'pemjog2.jpg'),
(3, 'pemandangan3.jpeg'),
(4, 'pemjkt5.jpg'),
(5, 'pemandangan.jpg'),
(6, 'pembtm.jpg'),
(7, 'pembtm2.jpg'),
(8, 'pemandangan4.jpg'),
(9, 'pembtm4.jpg'),
(10, 'pembtm5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `akunpengguna`
--
ALTER TABLE `akunpengguna`
  ADD PRIMARY KEY (`iduser`),
  ADD KEY `idpengguna` (`idpengguna`);

--
-- Indexes for table `datahotel`
--
ALTER TABLE `datahotel`
  ADD PRIMARY KEY (`idhotel`);

--
-- Indexes for table `datapengguna`
--
ALTER TABLE `datapengguna`
  ADD PRIMARY KEY (`idpengguna`);

--
-- Indexes for table `detailpesan`
--
ALTER TABLE `detailpesan`
  ADD KEY `idpesan` (`idpesan`),
  ADD KEY `idkamar` (`idkamar`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`idkamar`),
  ADD KEY `idhotel` (`idhotel`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`idpesan`),
  ADD KEY `idpengguna` (`idpengguna`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datapengguna`
--
ALTER TABLE `datapengguna`
  MODIFY `idpengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akunpengguna`
--
ALTER TABLE `akunpengguna`
  ADD CONSTRAINT `akunpengguna_ibfk_1` FOREIGN KEY (`idpengguna`) REFERENCES `datapengguna` (`idpengguna`);

--
-- Constraints for table `detailpesan`
--
ALTER TABLE `detailpesan`
  ADD CONSTRAINT `detailpesan_ibfk_1` FOREIGN KEY (`idpesan`) REFERENCES `pesan` (`idpesan`),
  ADD CONSTRAINT `detailpesan_ibfk_2` FOREIGN KEY (`idkamar`) REFERENCES `kamar` (`idkamar`);

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`idhotel`) REFERENCES `datahotel` (`idhotel`);

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`idpengguna`) REFERENCES `datapengguna` (`idpengguna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
