-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2018 at 09:50 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qms2`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `employee` int(50) NOT NULL,
  `production` int(3) NOT NULL,
  `value1` varchar(100) NOT NULL,
  `value2` varchar(100) NOT NULL,
  `quality` varchar(100) NOT NULL,
  `value3` varchar(100) NOT NULL,
  `value4` varchar(100) NOT NULL,
  `certification` int(5) NOT NULL,
  `value5` varchar(50) NOT NULL,
  `value6` varchar(100) NOT NULL,
  `training` varchar(10) NOT NULL,
  `value7` varchar(100) NOT NULL,
  `value8` varchar(100) NOT NULL,
  `analysis` varchar(100) NOT NULL,
  `value9` varchar(100) NOT NULL,
  `value10` varchar(100) NOT NULL,
  `attendance` varchar(100) NOT NULL,
  `value11` varchar(100) NOT NULL,
  `value12` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`employee`, `production`, `value1`, `value2`, `quality`, `value3`, `value4`, `certification`, `value5`, `value6`, `training`, `value7`, `value8`, `analysis`, `value9`, `value10`, `attendance`, `value11`, `value12`) VALUES
(1001, 4, 'Exceeds Expectations', 'i did smart work ', '99.2', 'Exceeds Expectations', 'focus on quality', 4, 'Outstanding', 'awards', '4', 'Outstanding', 'training', '11.02', 'Outstanding', 'revison', '0', 'Outstanding', ''),
(1002, 2, 'Mostly Meets Expectations', '', '98.2', 'Mostly Meets Expectations', '', 4, 'Outstanding', 'awards', '2', 'Meets Expectations', '', '11.02', 'Outstanding', 'practice', '2', 'Mostly Meets Expectations', ''),
(1003, 5, 'Outstanding', ' on process', '99.03', 'Exceeds Expectations', 'Exceeds', 3, 'Exceeds Expectations', 'good', '2', 'Meets Expectations', '', '11.02', 'Outstanding', 'higher', '0', 'Outstanding', ''),
(1004, 2, 'Mostly Meets Expectations', '', '98', 'Mostly Meets Expectations', '', 4, 'Outstanding', 'working', '4', 'Outstanding', 'QMS', '11.08', 'Outstanding', 'access', '0', 'Outstanding', ''),
(1005, 5, 'Exceeds Expectations', 'Project to be picked ', '99.08', 'Exceeds Expectations', 'thinking', 4, 'Outstanding', 'passion', '3', 'Exceeds Expectations', 'Exceeds ', '6', 'Mostly Meets Expectations', '', '3', 'Does not Meet Expectations', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
