-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2018 at 07:34 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookdetails`
--

CREATE TABLE `bookdetails` (
  `tleader` varchar(30) NOT NULL,
  `tname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mob` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookdetails`
--

INSERT INTO `bookdetails` (`tleader`, `tname`, `email`, `mob`) VALUES
('Prateek Jha', 'JMD', 'prateek@gmail.com', '9470928816'),
('Subham Raj', 'NIP', 'subhamraj4114@gmail.com', '8260602263'),
('srer', 'fyy', 'subhamraj414@gmail.com', '8888888888');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`name`, `email`, `mob`, `user`, `pass`) VALUES
('Nishant Prakash', 'nishant@gmail.com', '9999999999', 'nishant', '1234'),
('Prateek Jha', 'prateek@gmail.com', '9470928816', 'prateek', '1234'),
('Raashi', 'raashi@gmail.com', '8888888888', 'raashi', '1234'),
('Subham Raj', 'subhamraj4114@gmail.com', '8260602263', 'subham', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookdetails`
--
ALTER TABLE `bookdetails`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`user`,`email`),
  ADD UNIQUE KEY `user` (`user`,`email`),
  ADD UNIQUE KEY `mob` (`mob`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
