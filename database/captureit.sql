-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2020 at 09:44 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `captureit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(50) NOT NULL,
  `a_fname` varchar(10) DEFAULT NULL,
  `a_lname` varchar(10) DEFAULT NULL,
  `a_email` varchar(20) DEFAULT NULL,
  `a_pass` varchar(30) DEFAULT NULL,
  `a_pincode` int(10) DEFAULT NULL,
  `a_city` varchar(20) DEFAULT NULL,
  `a_mno` int(10) DEFAULT NULL,
  `a_video` tinyint(1) DEFAULT NULL,
  `a_photo` tinyint(1) DEFAULT NULL,
  `a_aerial` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clinet`
--

CREATE TABLE `clinet` (
  `c_id` int(50) NOT NULL,
  `c_fname` varchar(10) DEFAULT NULL,
  `c_lname` varchar(10) DEFAULT NULL,
  `c_email` varchar(20) DEFAULT NULL,
  `c_pass` varchar(30) DEFAULT NULL,
  `c_city` varchar(10) DEFAULT NULL,
  `c_pincode` int(10) DEFAULT NULL,
  `c_mno` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `clinet`
--
ALTER TABLE `clinet`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clinet`
--
ALTER TABLE `clinet`
  MODIFY `c_id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
