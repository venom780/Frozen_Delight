-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 12, 2021 at 03:41 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BuyStyle`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `cusid` int(11) NOT NULL,
  `cusname` varchar(200) NOT NULL,
  `cusemail` varchar(200) NOT NULL,
  `cusphone` int(20) NOT NULL,
  `cusmsg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`cusid`, `cusname`, `cusemail`, `cusphone`, `cusmsg`) VALUES
(1, 'smaksma', 'kashaf@gmail.com', 2342343, 'sxsax'),
(2, 'smaksma', 'sa@google.com', 546564, 'hiiii'),
(3, 'hgfd', 'hgfd@google.com', 546564, 'dxcvx'),
(4, 'haseeb', 'haseb@gmail.com', 2342343, 'hello'),
(5, 'hina', 'hina@gmail.com', 34234, 'jwdssajknxa'),
(6, 'hgfd', 'wajiha@gmail.com', 2342343, 'esA'),
(7, 'smaksma', 'wajiha@gmail.com', 2342343, 'asAA'),
(8, 'w', 'www@gmail.com', 2323123, '2132');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`cusid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `cusid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
