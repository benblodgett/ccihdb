-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 07:05 AM
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
-- Table structure for table `c1`
--

CREATE TABLE `c1` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(5) DEFAULT NULL,
  `q1_2` int(5) DEFAULT NULL,
  `q1_3` int(5) DEFAULT NULL,
  `q2_1a` int(5) DEFAULT NULL,
  `q2_1b` int(5) DEFAULT NULL,
  `q2_1c` float(7,2) DEFAULT NULL,
  `q2_2a` int(5) DEFAULT NULL,
  `q2_2b` int(5) DEFAULT NULL,
  `q2_2c` float(7,2) DEFAULT NULL,
  `q2_3a` int(5) DEFAULT NULL,
  `q2_3b` int(5) DEFAULT NULL,
  `q2_3c` float(7,2) DEFAULT NULL,
  `q2_4a` int(5) DEFAULT NULL,
  `q2_4b` int(5) DEFAULT NULL,
  `q2_4c` float(7,2) DEFAULT NULL,
  `q3_1` int(5) DEFAULT NULL,
  `q4_1` int(5) DEFAULT NULL,
  `q5_1` int(5) DEFAULT NULL,
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
-- Table structure for table `c2`
--

CREATE TABLE `c2` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(5) DEFAULT NULL,
  `q1_2` int(5) DEFAULT NULL,
  `q2_1` int(5) DEFAULT NULL,
  `q2_2` int(5) DEFAULT NULL,
  `q2_3` int(5) DEFAULT NULL,
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
-- Table structure for table `c3`
--

CREATE TABLE `c3` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(5) DEFAULT NULL,
  `q1_2` int(5) DEFAULT NULL,
  `q1_3` int(5) DEFAULT NULL,
  `q1_4` int(5) DEFAULT NULL,
  `q2_1` int(5) DEFAULT NULL,
  `q3_1` int(8) DEFAULT NULL,
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
-- Table structure for table `c4`
--

CREATE TABLE `c4` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(5) DEFAULT NULL,
  `q1_2` int(5) DEFAULT NULL,
  `q1_3` int(5) DEFAULT NULL,
  `q2_1` int(5) DEFAULT NULL,
  `q3_1` int(5) DEFAULT NULL,
  `q4_1` int(5) DEFAULT NULL,
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
-- Table structure for table `c5`
--

CREATE TABLE `c5` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(5) DEFAULT NULL,
  `q1_2` int(5) DEFAULT NULL,
  `q1_3` int(5) DEFAULT NULL,
  `q2_1` int(5) DEFAULT NULL,
  `q2_2` int(5) DEFAULT NULL,
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
-- Table structure for table `c6`
--

CREATE TABLE `c6` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1a` int(4) DEFAULT NULL,
  `q1_1b` int(4) DEFAULT NULL,
  `q1_1c` float(7,2) DEFAULT NULL,
  `q1_2` float(7,2) DEFAULT NULL,
  `q2_1a` int(4) DEFAULT NULL,
  `q2_1b` int(4) DEFAULT NULL,
  `q2_1c` float(7,2) DEFAULT NULL,
  `q3_1a` int(4) DEFAULT NULL,
  `q3_1b` int(4) DEFAULT NULL,
  `q3_1c` float(7,2) DEFAULT NULL,
  `q3_2a` int(4) DEFAULT NULL,
  `q3_2b` int(4) DEFAULT NULL,
  `q3_2c` float(7,2) DEFAULT NULL,
  `q4_1` int(5) DEFAULT NULL,
  `q5_1` int(5) DEFAULT NULL,
  `q5_2` int(5) DEFAULT NULL,
  `q6_1` int(5) DEFAULT NULL,
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
-- Table structure for table `c7`
--

CREATE TABLE `c7` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(5) DEFAULT NULL,
  `q1_2` int(5) DEFAULT NULL,
  `q2_1` int(5) DEFAULT NULL,
  `q3_1` int(5) DEFAULT NULL,
  `q3_2` int(5) DEFAULT NULL,
  `q4_1` int(5) DEFAULT NULL,
  `q4_2` int(5) DEFAULT NULL,
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
-- Table structure for table `c8`
--

CREATE TABLE `c8` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(5) DEFAULT NULL,
  `q1_2` int(5) DEFAULT NULL,
  `q2_1` int(5) DEFAULT NULL,
  `q2_2` int(5) DEFAULT NULL,
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
-- Table structure for table `c9`
--

CREATE TABLE `c9` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(5) DEFAULT NULL,
  `q1_2` int(5) DEFAULT NULL,
  `q1_3` int(5) DEFAULT NULL,
  `q2_1` int(5) DEFAULT NULL,
  `q2_2` int(5) DEFAULT NULL,
  `q2_3` int(5) DEFAULT NULL,
  `q2_4` int(5) DEFAULT NULL,
  `q2_5` int(5) DEFAULT NULL,
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
-- Table structure for table `c10`
--

CREATE TABLE `c10` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(5) DEFAULT NULL,
  `q1_2` int(5) DEFAULT NULL,
  `q1_3` int(5) DEFAULT NULL,
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
-- Table structure for table `c11`
--

CREATE TABLE `c11` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(5) DEFAULT NULL,
  `q2_1` int(5) DEFAULT NULL,
  `q3_1` int(5) DEFAULT NULL,
  `q4_1` int(5) DEFAULT NULL,
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
-- Table structure for table `c12`
--

CREATE TABLE `c12` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(5) DEFAULT NULL,
  `q2_1` int(5) DEFAULT NULL,
  `q3_1` int(5) DEFAULT NULL,
  `q4_1` int(5) DEFAULT NULL,
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
-- Table structure for table `c13`
--

CREATE TABLE `c13` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(5) DEFAULT NULL,
  `q1_2` int(5) DEFAULT NULL,
  `q2_1` int(5) DEFAULT NULL,
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
-- Table structure for table `c14`
--

CREATE TABLE `c14` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(5) DEFAULT NULL,
  `q1_2` int(5) DEFAULT NULL,
  `q2_1` int(5) DEFAULT NULL,
  `q2_2` int(5) DEFAULT NULL,
  `q3_1` int(5) DEFAULT NULL,
  `q3_2` int(5) DEFAULT NULL,
  `q4_1` int(5) DEFAULT NULL,
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
-- Table structure for table `c15`
--

CREATE TABLE `c15` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(5) DEFAULT NULL,
  `q1_2` float(7,2) DEFAULT NULL,
  `q2_1` int(5) DEFAULT NULL,
  `q2_2a` int(5) DEFAULT NULL,
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
-- Table structure for table `c16`
--

CREATE TABLE `c16` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(5) DEFAULT NULL,
  `q1_2` int(5) DEFAULT NULL,
  `q2_1` int(5) DEFAULT NULL,
  `q2_2` int(5) DEFAULT NULL,
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
-- Table structure for table `c17`
--

CREATE TABLE `c17` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(5) DEFAULT NULL,
  `q1_2` int(5) DEFAULT NULL,
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
-- Table structure for table `c18`
--

CREATE TABLE `c18` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(5) DEFAULT NULL,
  `q1_2` int(5) DEFAULT NULL,
  `q1_3` int(5) DEFAULT NULL,
  `q2_1` int(5) DEFAULT NULL,
  `q2_2` int(5) DEFAULT NULL,
  `q3_1` int(5) DEFAULT NULL,
  `q4_1a` int(4) DEFAULT NULL,
  `q4_1b` int(4) DEFAULT NULL,
  `q4_1c` float(7,2) DEFAULT NULL,
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
-- Table structure for table `c19`
--

CREATE TABLE `c19` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(5) DEFAULT NULL,
  `q2_1` int(5) DEFAULT NULL,
  `q2_2` int(5) DEFAULT NULL,
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
-- Table structure for table `c20`
--

CREATE TABLE `c20` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(5) DEFAULT NULL,
  `q1_2` int(5) DEFAULT NULL,
  `q1_3` int(5) DEFAULT NULL,
  `q1_4` int(5) DEFAULT NULL,
  `q1_5` int(5) DEFAULT NULL,
  `q1_6` int(5) DEFAULT NULL,
  `q1_7` int(5) DEFAULT NULL,
  `q2_1` int(5) DEFAULT NULL,
  `q2_2` int(5) DEFAULT NULL,
  `q2_3` int(5) DEFAULT NULL,
  `q2_4` float(7,2) DEFAULT NULL,
  `q3_1` int(5) DEFAULT NULL,
  `q3_2` int(5) DEFAULT NULL,
  `q4_1` int(5) DEFAULT NULL,
  `q5_1` int(5) DEFAULT NULL,
  `q6_1` int(5) DEFAULT NULL,
  `q6_2` int(5) DEFAULT NULL,
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
-- Table structure for table `c21`
--

CREATE TABLE `c21` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1a` int(7) DEFAULT NULL,
  `q1_1b` int(7) DEFAULT NULL,
  `q1_1c` float(7,2) DEFAULT NULL,
  `q1_2a` int(7) DEFAULT NULL,
  `q1_2b` int(7) DEFAULT NULL,
  `q1_2c` float(7,2) DEFAULT NULL,
  `q1_3` int(11) DEFAULT NULL,
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
-- Table structure for table `c22`
--

CREATE TABLE `c22` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(3) DEFAULT NULL,
  `q1_2` int(3) DEFAULT NULL,
  `q1_3` int(3) DEFAULT NULL,
  `q1_4` int(3) DEFAULT NULL,
  `q2_1` int(5) DEFAULT NULL,
  `q2_2` int(4) DEFAULT NULL,
  `q2_3` int(3) DEFAULT NULL,
  `q3_1` int(3) DEFAULT NULL,
  `q3_2` int(3) DEFAULT NULL,
  `q3_3a` int(4) DEFAULT NULL,
  `q3_3b` int(4) DEFAULT NULL,
  `q3_3c` float(7,2) DEFAULT NULL,
  `q3_4` int(3) DEFAULT NULL,
  `q4_1` int(5) DEFAULT NULL,
  `q4_2` int(6) DEFAULT NULL,
  `q4_3` int(7) DEFAULT NULL,
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
-- Table structure for table `c23`
--

CREATE TABLE `c23` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1a` int(4) DEFAULT NULL,
  `q1_1b` int(4) DEFAULT NULL,
  `q1_1c` float(7,2) DEFAULT NULL,
  `q1_2` int(3) DEFAULT NULL,
  `q1_3a` int(4) DEFAULT NULL,
  `q1_3b` int(4) DEFAULT NULL,
  `q1_3c` float(7,2) DEFAULT NULL,
  `q1_4` float(7,2) DEFAULT NULL,
  `q1_5` int(4) DEFAULT NULL,
  `q2_1` int(4) DEFAULT NULL,
  `q2_2` int(4) DEFAULT NULL,
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
-- Table structure for table `c24`
--

CREATE TABLE `c24` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1a` int(5) DEFAULT NULL,
  `q1_1b` int(5) DEFAULT NULL,
  `q1_1c` float(7,2) DEFAULT NULL,
  `q1_2a` int(4) DEFAULT NULL,
  `q1_2b` int(4) DEFAULT NULL,
  `q1_2c` float(7,2) DEFAULT NULL,
  `q1_3` int(4) DEFAULT NULL,
  `q2_1a` int(3) DEFAULT NULL,
  `q2_1b` int(3) DEFAULT NULL,
  `q2_1c` float(7,2) DEFAULT NULL,
  `q3_1` int(4) DEFAULT NULL,
  `q4_1` int(4) DEFAULT NULL,
  `q4_2` int(5) DEFAULT NULL,
  `q4_3a` int(4) DEFAULT NULL,
  `q4_3b` int(4) DEFAULT NULL,
  `q4_3c` float(7,2) DEFAULT NULL,
  `q4_4a` int(5) DEFAULT NULL,
  `q4_4b` int(5) DEFAULT NULL,
  `q4_4c` float(7,2) DEFAULT NULL,
  `q5_1a` int(5) DEFAULT NULL,
  `q5_1b` int(5) DEFAULT NULL,
  `q5_1c` float(7,2) DEFAULT NULL,
  `q6_1a` int(3) DEFAULT NULL,
  `q6_1b` int(3) DEFAULT NULL,
  `q6_1c` float(7,2) DEFAULT NULL,
  `q6_2` int(3) DEFAULT NULL,
  `q6_3` int(4) DEFAULT NULL,
  `q7_1` int(3) DEFAULT NULL,
  `q7_2` int(3) DEFAULT NULL,
  `q8_1` int(3) DEFAULT NULL,
  `q8_2a` int(4) DEFAULT NULL,
  `q8_2b` int(4) DEFAULT NULL,
  `q8_2c` float(7,2) DEFAULT NULL,
  `q8_3` int(5) DEFAULT NULL,
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
-- Table structure for table `c25`
--

CREATE TABLE `c25` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` varchar(10) DEFAULT NULL,
  `q1_2` varchar(10) DEFAULT NULL,
  `q2_1` int(5) DEFAULT NULL,
  `q2_2` int(5) DEFAULT NULL,
  `q2_3a` int(6) DEFAULT NULL,
  `q2_3b` int(6) DEFAULT NULL,
  `q2_3c` float(7,2) DEFAULT NULL,
  `q3_1` int(4) DEFAULT NULL,
  `q3_2` int(4) DEFAULT NULL,
  `q3_3` int(3) DEFAULT NULL,
  `q3_4` int(4) DEFAULT NULL,
  `q3_5` int(3) DEFAULT NULL,
  `q3_6` int(3) DEFAULT NULL,
  `q4_1` int(4) DEFAULT NULL,
  `q4_2` int(5) DEFAULT NULL,
  `q4_3` int(4) DEFAULT NULL,
  `q4_4` int(5) DEFAULT NULL,
  `q4_5` int(5) DEFAULT NULL,
  `q5_1` int(4) DEFAULT NULL,
  `q5_2` int(4) DEFAULT NULL,
  `q5_3` int(4) DEFAULT NULL,
  `q5_4` int(5) DEFAULT NULL,
  `q5_5` int(6) DEFAULT NULL,
  `q5_6` int(6) DEFAULT NULL,
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
-- Table structure for table `c26`
--

CREATE TABLE `c26` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(3) DEFAULT NULL,
  `q2_1` int(5) DEFAULT NULL,
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
-- Table structure for table `c27`
--

CREATE TABLE `c27` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(4) DEFAULT NULL,
  `q1_2a` int(4) DEFAULT NULL,
  `q1_2b` int(4) DEFAULT NULL,
  `q1_2c` float(7,2) DEFAULT NULL,
  `q1_3` int(5) DEFAULT NULL,
  `q1_4` int(4) DEFAULT NULL,
  `q1_5` int(5) DEFAULT NULL,
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
-- Table structure for table `c28`
--

CREATE TABLE `c28` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1a` int(4) DEFAULT NULL,
  `q1_1b` int(4) DEFAULT NULL,
  `q1_1c` float(7,2) DEFAULT NULL,
  `q1_2a` int(3) DEFAULT NULL,
  `q1_2b` int(3) DEFAULT NULL,
  `q1_2c` float(7,2) DEFAULT NULL,
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
-- Table structure for table `c29`
--

CREATE TABLE `c29` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` int(4) DEFAULT NULL,
  `q1_2` int(4) DEFAULT NULL,
  `q2_1` int(5) DEFAULT NULL,
  `q3_1` int(3) DEFAULT NULL,
  `q4_1a` int(4) DEFAULT NULL,
  `q4_1b` int(4) DEFAULT NULL,
  `q4_1c` float(7,2) DEFAULT NULL,
  `q4_2` int(3) DEFAULT NULL,
  `q4_3a1` int(4) DEFAULT NULL,
  `q4_3a2` int(4) DEFAULT NULL,
  `q4_3a3` float(7,2) DEFAULT NULL,
  `q4_3b1` int(3) DEFAULT NULL,
  `q4_3b2` int(3) DEFAULT NULL,
  `q4_3b3` float(7,2) DEFAULT NULL,
  `q4_3c1` int(4) DEFAULT NULL,
  `q4_3c2` int(4) DEFAULT NULL,
  `q4_3c3` float(7,2) DEFAULT NULL,
  `q4_4` int(3) DEFAULT NULL,
  `q5_1` int(4) DEFAULT NULL,
  `q5_2` int(3) DEFAULT NULL,
  `q6_1a` int(4) DEFAULT NULL,
  `q6_1b` int(4) DEFAULT NULL,
  `q6_1c` float(7,2) DEFAULT NULL,
  `q6_2a` int(6) DEFAULT NULL,
  `q6_2b` int(6) DEFAULT NULL,
  `q6_2c` float(7,2) DEFAULT NULL,
  `q6_3a` int(6) DEFAULT NULL,
  `q6_3b` int(6) DEFAULT NULL,
  `q6_3c` float(7,2) DEFAULT NULL,
  `q7_1` int(4) DEFAULT NULL,
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
-- Table structure for table `c30`
--

CREATE TABLE `c30` (
  `sno` int(2) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1_1` varchar(10) NOT NULL,
  `q1_2` int(5) DEFAULT NULL,
  `q2_1` int(4) DEFAULT NULL,
  `q2_2` int(5) DEFAULT NULL,
  `q2_3a` int(3) DEFAULT NULL,
  `q2_3b` int(3) DEFAULT NULL,
  `q2_4` int(4) DEFAULT NULL,
  `q2_5a` int(4) DEFAULT NULL,
  `q2_5b` int(4) DEFAULT NULL,
  `q2_5c` float(7,2) DEFAULT NULL,
  `q2_6a` int(5) DEFAULT NULL,
  `q2_6b` int(5) DEFAULT NULL,
  `q2_6c` float(7,2) DEFAULT NULL,
  `q2_7` varchar(10) NOT NULL,
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
-- Table structure for table `center_details`
--

CREATE TABLE `center_details` (
  `cid` int(3) NOT NULL,
  `center_id` varchar(15) NOT NULL,
  `center_name` varchar(250) NOT NULL,
  `center_address` text NOT NULL,
  `center_contact` varchar(100) NOT NULL,
  `center_email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `center_details`
--

INSERT INTO `center_details` (`cid`, `center_id`, `center_name`, `center_address`, `center_contact`, `center_email`) VALUES
(1, '2020-01', 'American Leprosy Missions', '', '', ''),
(2, '2020-02', 'Assistive Technology Catalyst Project with IDEAS', '', '', ''),
(3, '2020-03', 'World Renew', '', '', ''),
(4, '2020-04', 'Christian Academy of African Physicians', '', '', ''),
(5, '2020-05', 'The Christian Health Association of Kenya (CHAK)', '', '', ''),
(6, '2020-06', 'Christian Health Association of Malawi (CHAM)', '', '', ''),
(7, '2020-07', 'Christian Medical Association India (CMAI)', '', '', ''),
(8, '2020-08', 'Cure International', '', '', ''),
(9, '2020-09', 'Dalton Foundation', '', '', ''),
(10, '2020-10', 'Digital African Health Library Service', 'main road\\\\r\\\\nramachari street,\\\\r\\\\nThottaplayam,\\\\r\\\\nvellore', '1234567890', ''),
(11, '2020-11', 'Health Services Corps', '', '', ''),
(12, '2020-12', 'Hezekiah Health Foundation', '', '', ''),
(13, '2020-13', 'IMA World Health', '', '', ''),
(14, '2020-14', 'LifeNet International', '', '', ''),
(15, '2020-15', 'Rural Health Services (RHS) of Sudan', '', '', ''),
(16, '2020-16', 'Samaritan Purse', '', '', ''),
(17, '2020-17', 'St. John s Medical College, Bangalore', '', '', ''),
(18, '2020-18', 'Eglise Methodiste du Togo', '', '', ''),
(19, '2020-19', 'Uganda Protestant Medical Bureau (UPMB)', '', '', ''),
(20, '2020-20', 'Zimbabwe Association of Church-Related Hospitals', '', '', ''),
(21, '2021-01', 'Blessings International', '', '', ''),
(22, '2021-02', 'Christian Health Association of Sierra Leone & Healey IRF', '', '', ''),
(23, '2021-03', 'Community Fountain Organization', '', '', ''),
(24, '2021-04', 'Ecumenical Pharmaceutical Network', '', '', ''),
(25, '2021-05', 'Global Health Action', '', '', ''),
(26, '2021-06', 'Kunri Christian Hospital', '', '', ''),
(27, '2021-07', 'Kupenda for the Children', '', '', ''),
(28, '2021-08', 'National Medical Services Consortium (NMSC)', '', '', ''),
(29, '2021-09', 'World Hope International', '', '', ''),
(30, '2021-10', 'World Relief', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `uid` int(3) NOT NULL,
  `center_id` int(2) NOT NULL,
  `center_name` varchar(100) NOT NULL,
  `name` varchar(35) NOT NULL,
  `designation` varchar(35) NOT NULL,
  `pri_email` varchar(35) NOT NULL,
  `off_address` varchar(200) NOT NULL,
  `mobile1` varchar(50) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `previlege` varchar(15) NOT NULL,
  `suspended` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`uid`, `center_id`, `center_name`, `name`, `designation`, `pri_email`, `off_address`, `mobile1`, `fax`, `pwd`, `previlege`, `suspended`) VALUES
(2, 999, '', 'User2', 'Programmer', 'u2@cc.in', '', '', '', 'd58da82289939d8c4ec4f40689c2847e', 'SA', 0)

-- --------------------------------------------------------

--
-- Table structure for table `qualitative`
--

CREATE TABLE `qualitative` (
  `sno` int(3) NOT NULL,
  `cid` int(3) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `rp` varchar(35) NOT NULL,
  `q1` text NOT NULL,
  `q2` text NOT NULL,
  `q3` text NOT NULL,
  `q4` text NOT NULL,
  `q5` text NOT NULL,
  `q6` varchar(200) NOT NULL,
  `fs` varchar(35) NOT NULL,
  `cuser` varchar(60) NOT NULL,
  `cdt` varchar(30) NOT NULL,
  `uuser` varchar(60) NOT NULL,
  `udt` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tempreptbl`
--

CREATE TABLE `tempreptbl` (
  `cid` int(3) NOT NULL,
  `rp` varchar(100) NOT NULL,
  `val` int(15) DEFAULT NULL,
  `bcategory` varchar(100) NOT NULL,
  `subcategory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `temptbl`
--

CREATE TABLE `temptbl` (
  `cid` int(3) NOT NULL,
  `rp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c1`
--
ALTER TABLE `c1`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c2`
--
ALTER TABLE `c2`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c3`
--
ALTER TABLE `c3`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c4`
--
ALTER TABLE `c4`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c5`
--
ALTER TABLE `c5`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c6`
--
ALTER TABLE `c6`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c7`
--
ALTER TABLE `c7`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c8`
--
ALTER TABLE `c8`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c9`
--
ALTER TABLE `c9`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c10`
--
ALTER TABLE `c10`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c11`
--
ALTER TABLE `c11`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c12`
--
ALTER TABLE `c12`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c13`
--
ALTER TABLE `c13`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c14`
--
ALTER TABLE `c14`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c15`
--
ALTER TABLE `c15`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c16`
--
ALTER TABLE `c16`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c17`
--
ALTER TABLE `c17`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c18`
--
ALTER TABLE `c18`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c19`
--
ALTER TABLE `c19`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c20`
--
ALTER TABLE `c20`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c21`
--
ALTER TABLE `c21`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c22`
--
ALTER TABLE `c22`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c23`
--
ALTER TABLE `c23`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c24`
--
ALTER TABLE `c24`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c25`
--
ALTER TABLE `c25`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c26`
--
ALTER TABLE `c26`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c27`
--
ALTER TABLE `c27`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c28`
--
ALTER TABLE `c28`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c29`
--
ALTER TABLE `c29`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `c30`
--
ALTER TABLE `c30`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `center_details`
--
ALTER TABLE `center_details`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `qualitative`
--
ALTER TABLE `qualitative`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `c1`
--
ALTER TABLE `c1`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c2`
--
ALTER TABLE `c2`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c3`
--
ALTER TABLE `c3`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c4`
--
ALTER TABLE `c4`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c5`
--
ALTER TABLE `c5`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c6`
--
ALTER TABLE `c6`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c7`
--
ALTER TABLE `c7`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c8`
--
ALTER TABLE `c8`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c9`
--
ALTER TABLE `c9`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c10`
--
ALTER TABLE `c10`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c11`
--
ALTER TABLE `c11`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c12`
--
ALTER TABLE `c12`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c13`
--
ALTER TABLE `c13`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c14`
--
ALTER TABLE `c14`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c15`
--
ALTER TABLE `c15`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c16`
--
ALTER TABLE `c16`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c17`
--
ALTER TABLE `c17`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c18`
--
ALTER TABLE `c18`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c19`
--
ALTER TABLE `c19`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c20`
--
ALTER TABLE `c20`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c21`
--
ALTER TABLE `c21`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c22`
--
ALTER TABLE `c22`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c23`
--
ALTER TABLE `c23`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c24`
--
ALTER TABLE `c24`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c25`
--
ALTER TABLE `c25`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c26`
--
ALTER TABLE `c26`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c27`
--
ALTER TABLE `c27`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c28`
--
ALTER TABLE `c28`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c29`
--
ALTER TABLE `c29`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c30`
--
ALTER TABLE `c30`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `center_details`
--
ALTER TABLE `center_details`
  MODIFY `cid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `uid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `qualitative`
--
ALTER TABLE `qualitative`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
