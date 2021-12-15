-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 07:21 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skiservis`
--

-- --------------------------------------------------------

--
-- Table structure for table `oprema`
--

CREATE TABLE `oprema` (
  `opremaId` int(5) DEFAULT NULL,
  `naziv` varchar(20) DEFAULT NULL,
  `cena` bigint(10) DEFAULT NULL,
  `vrstaId` int(5) DEFAULT NULL,
  `velicinaId` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oprema`
--

INSERT INTO `oprema` (`opremaId`, `naziv`, `cena`, `vrstaId`, `velicinaId`) VALUES
(2, 'skije Fischer 160-19', 35000, 1, NULL),
(3, 'skije Elan 2021 110-', 7000, 9, 1),
(4, 'skije Elan 160-190', 26000, 1, 2),
(5, 'stapovi Leki', 5000, 3, 2),
(6, 'reparacija skija odr', 1800, 7, 2),
(7, 'reparacija borda', 2000, 8, 2),
(8, 'cipele Volkl', 5000, 2, 1),
(NULL, 'Skije', 1233, 10, 2),
(NULL, '543', 22, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `velicina`
--

CREATE TABLE `velicina` (
  `velicinaId` int(5) NOT NULL,
  `nazivVelicine` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `velicina`
--

INSERT INTO `velicina` (`velicinaId`, `nazivVelicine`) VALUES
(1, 'decija '),
(2, 'odrasla');

-- --------------------------------------------------------

--
-- Table structure for table `vrsta`
--

CREATE TABLE `vrsta` (
  `vrstaId` int(5) NOT NULL,
  `nazivVrste` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vrsta`
--

INSERT INTO `vrsta` (`vrstaId`, `nazivVrste`) VALUES
(1, 'skije'),
(2, 'cipele'),
(3, 'stapovi'),
(4, 'kacige'),
(5, 'naocare'),
(6, 'grejaci'),
(7, 'reparacija'),
(8, 'reparacija'),
(9, 'bordovi'),
(10, 'mazanje ');

-- --------------------------------------------------------

--
-- Table structure for table `zaposleni`
--

CREATE TABLE `zaposleni` (
  `idZaposlenog` int(2) NOT NULL,
  `ime` varchar(20) DEFAULT NULL,
  `prezime` varchar(30) DEFAULT NULL,
  `brojTelefona` varchar(9) DEFAULT NULL,
  `username` varchar(9) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `cppassword` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zaposleni`
--

INSERT INTO `zaposleni` (`idZaposlenog`, `ime`, `prezime`, `brojTelefona`, `username`, `password`, `cppassword`) VALUES
(1, 'Velibor', 'Corbic', '064161441', 'gaso', 'gaso', 'gaso'),
(2, 'Masa', 'Corbic', '066207384', 'masa', 'masa', 'masa'),
(3, 'Aleksandar', 'Popovic', '062170196', 'pop', 'pop', 'pop');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oprema`
--
ALTER TABLE `oprema`
  ADD KEY `fk_vrsta` (`vrstaId`),
  ADD KEY `fk_vel` (`velicinaId`);

--
-- Indexes for table `velicina`
--
ALTER TABLE `velicina`
  ADD PRIMARY KEY (`velicinaId`);

--
-- Indexes for table `vrsta`
--
ALTER TABLE `vrsta`
  ADD PRIMARY KEY (`vrstaId`);

--
-- Indexes for table `zaposleni`
--
ALTER TABLE `zaposleni`
  ADD PRIMARY KEY (`idZaposlenog`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
