-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2024 at 11:00 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `pid` varchar(3) NOT NULL,
  `petname` varchar(20) NOT NULL,
  `typepet` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='pet informations';

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`pid`, `petname`, `typepet`) VALUES
('01', 'Chit Sutha', 'Cat'),
('02', 'Shipper', 'Porcupine'),
('03', 'WanMai', 'Dog'),
('04', 'WanDak', 'Dog'),
('05', 'Nil', 'Dog');

-- --------------------------------------------------------

--
-- Table structure for table `studentbio`
--

CREATE TABLE `studentbio` (
  `sid` varchar(3) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `slastname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='student informations';

--
-- Dumping data for table `studentbio`
--

INSERT INTO `studentbio` (`sid`, `sname`, `slastname`, `address`, `telephone`) VALUES
('110', 'uraiwan', 'inyaem', 'pathumthani', 898944631),
('111', 'nanfa', 'sontornjerawnt', 'bangkok', 928192297),
('112', 'supavinee', 'vijittamee', 'nonthaburi', 802376045),
('113', 'picharn', 'lakben', 'nonthaburi', 971346205),
('114', 'ug', 'kongthong', 'pathumthani', 810126012),
('115', 'thipphimon', 'sawangrat', 'Ayutthaya', 993455590);

-- --------------------------------------------------------

--
-- Table structure for table `studentpet`
--

CREATE TABLE `studentpet` (
  `counter` int(2) NOT NULL,
  `sid` varchar(3) NOT NULL,
  `pid` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='studentpet informations';

--
-- Dumping data for table `studentpet`
--

INSERT INTO `studentpet` (`counter`, `sid`, `pid`) VALUES
(2, '110', '03'),
(2, '110', '04'),
(1, '111', '02'),
(1, '112', '01'),
(2, '113', '05'),
(2, '113', '04'),
(2, '114', '01'),
(2, '114', '03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `studentbio`
--
ALTER TABLE `studentbio`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `studentpet`
--
ALTER TABLE `studentpet`
  ADD KEY `sid` (`sid`),
  ADD KEY `pid` (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
