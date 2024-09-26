-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2024 at 01:32 PM
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
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `aid` int(3) NOT NULL,
  `aname` varchar(20) NOT NULL,
  `alastname` varchar(30) NOT NULL,
  `acount` int(30) NOT NULL,
  `gender` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='actor com';

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`aid`, `aname`, `alastname`, `acount`, `gender`) VALUES
(1, 'ทิพพิมล', 'สว่างรัตน์', 2, 'ญ'),
(2, 'ทิพาพร', 'นนทมาตย์', 1, 'ญ'),
(3, 'ชลนภัทร', 'พรรณบุตรี', 2, 'ช'),
(4, 'เพชรรัตน์', 'พระธานี', 1, 'ญ'),
(5, 'ณิชารัศมิ์', 'เขตประทุม', 1, 'ญ');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mid` varchar(3) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `mlastname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telephone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='member com';

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mid`, `mname`, `mlastname`, `address`, `telephone`) VALUES
('100', 'จามจุรี', 'ไตรมาส', 'สมุทรสาคร', 974612237),
('101', 'ภูวนาถ', 'มาศกุล', 'ปทุมธานี', 946785518),
('102', 'วริฐา', 'ภาคีศักดิ์', 'พระนครศรีอยุธยา', 926485647),
('103', 'ธัญญารัตน์', 'ศิลประกอบ', 'กรุงเทพมหานคร', 993876512),
('104', 'จิตรสุดา', 'ณอยุธยา', 'ปทุมธานี', 993876512);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `mvid` int(3) NOT NULL,
  `mvname` varchar(50) NOT NULL,
  `mvyear` int(4) NOT NULL,
  `mvacount` varchar(50) NOT NULL,
  `mvtime` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='movie com';

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`mvid`, `mvname`, `mvyear`, `mvacount`, `mvtime`) VALUES
(200, 'จังหวะหัวใจ', 2020, 'ทิพพิมล', 150),
(201, 'พี่นาค', 2024, 'ทิพพิมล', 180),
(202, 'หลานม่า', 2019, 'ชลนภัทร', 145),
(203, 'ธี่หยด', 2021, 'ทิพาพร', 135),
(204, 'พี่นาค', 2024, 'ชลนภัทร', 180),
(205, 'อีเรียมซิ่ง', 2018, 'ณิชารัศมิ์', 170),
(206, 'จังหวะหัวใจ', 2020, 'เพชรรัตน์', 150);

-- --------------------------------------------------------

--
-- Table structure for table `purchased`
--

CREATE TABLE `purchased` (
  `mid` int(3) NOT NULL,
  `mvid` int(3) NOT NULL,
  `count` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='pur com';

--
-- Dumping data for table `purchased`
--

INSERT INTO `purchased` (`mid`, `mvid`, `count`) VALUES
(100, 202, 1),
(101, 203, 2),
(102, 204, 1),
(103, 201, 1),
(104, 200, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`mvid`);

--
-- Indexes for table `purchased`
--
ALTER TABLE `purchased`
  ADD PRIMARY KEY (`mid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
