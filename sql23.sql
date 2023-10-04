-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 12:55 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccih_hsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `c39`
--

CREATE TABLE `c39` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(5) DEFAULT NULL,
  `q1_2` int(5) DEFAULT NULL,
  `q2_1` int(5) DEFAULT NULL,
  `q2_2a` int(4) DEFAULT NULL,
  `q2_2b` int(4) DEFAULT NULL,
  `q2_2c` float(7,2) DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `c40`
--

CREATE TABLE `c40` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1a` int(4) DEFAULT NULL,
  `q1_1b` int(4) DEFAULT NULL,
  `q1_1c` float(7,2) DEFAULT NULL,
  `q1_2` int(5) DEFAULT NULL,
  `q2_1` int(5) DEFAULT NULL,
  `q2_2` int(5) DEFAULT NULL,
  `q2_3` int(5) DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `c41`
--

CREATE TABLE `c41` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1a` int(4) DEFAULT NULL,
  `q1_1b` int(4) DEFAULT NULL,
  `q1_1c` float(7,2) DEFAULT NULL,
  `q2_1` int(5) DEFAULT NULL,
  `q3_1` int(5) DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `c42`
--

CREATE TABLE `c42` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(6) DEFAULT NULL,
  `q1_2` int(6) DEFAULT NULL,
  `q2_1` int(5) DEFAULT NULL,
  `q2_2` int(5) DEFAULT NULL,
  `q2_3` int(5) DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `c43`
--

CREATE TABLE `c43` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(6) DEFAULT NULL,
  `q1_2` int(6) DEFAULT NULL,
  `q1_3` int(6) DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `c44`
--

CREATE TABLE `c44` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(6) DEFAULT NULL,
  `q1_2` int(6) DEFAULT NULL,
  `q2_1` int(6) DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `c45`
--

CREATE TABLE `c45` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(6) DEFAULT NULL,
  `q1_2` int(6) DEFAULT NULL,
  `q1_3` int(6) DEFAULT NULL,
  `mov` text NOT NULL,
  `ra` text NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c39`
--
ALTER TABLE `c39`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c40`
--
ALTER TABLE `c40`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c41`
--
ALTER TABLE `c41`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c42`
--
ALTER TABLE `c42`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c43`
--
ALTER TABLE `c43`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c44`
--
ALTER TABLE `c44`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c45`
--
ALTER TABLE `c45`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `c39`
--
ALTER TABLE `c39`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c40`
--
ALTER TABLE `c40`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c41`
--
ALTER TABLE `c41`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c42`
--
ALTER TABLE `c42`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c43`
--
ALTER TABLE `c43`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c44`
--
ALTER TABLE `c44`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c45`
--
ALTER TABLE `c45`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
