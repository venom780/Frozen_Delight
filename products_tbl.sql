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
-- Table structure for table `products_tbl`
--

CREATE TABLE `products_tbl` (
  `product_id` int(50) NOT NULL,
  `product_image` varchar(400) NOT NULL,
  `product_title` varchar(50) NOT NULL,
  `product_discription` varchar(300) NOT NULL,
  `product_price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_tbl`
--

INSERT INTO `products_tbl` (`product_id`, `product_image`, `product_title`, `product_discription`, `product_price`) VALUES
(3, 'Images/plate4.png', 'Shami Kabab', 'Delicious Dish', '23.0'),
(4, 'Images/plate3.png', 'Seekh Kabab', 'Delicious Dish', '22.0'),
(5, 'Images/plate7.png', 'Parhata', 'Delicious Dish', '2'),
(6, 'Images/plate6.png', 'Aloo Parhata', 'Delicious Dish', '5'),
(7, 'Images/plate6.png', 'Naan', 'Delicious Dish', '1'),
(8, 'Images/plate.png', 'Chicken Nuggets', 'Delicious Dish', '22.0'),
(9, 'Images/plate5.png', 'Quiche', 'Delicious Dish', '9.50'),
(10, 'Images/plate1.png', 'Chicken Samosa', 'Delicious Dish', '12.0'),
(11, 'Images/plate2.png', 'Burger Patties', 'Delicious Dish', '9.55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products_tbl`
--
ALTER TABLE `products_tbl`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products_tbl`
--
ALTER TABLE `products_tbl`
  MODIFY `product_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
