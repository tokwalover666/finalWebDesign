-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2024 at 02:25 AM
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
-- Database: `interlink`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `totalprice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(3) NOT NULL,
  `seller` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(10) NOT NULL,
  `description` varchar(255) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `seller`, `product_name`, `price`, `description`, `quantity`) VALUES
(1, 'mairah@yahoo.com', 'PS Vita', '250', 'psvita ni mairah', 1),
(2, 'soba@yahoo.com', 'Pika', '140', 'vaccinated', 1),
(3, 'soba@yahoo.com', 'Iphone', '176', 'sasabog n', 0),
(4, 'soba@yahoo.com', 'Laptop', '500', 'laptop ni soba\r\nissue: mabagal', 1),
(5, 'mairah@yahoo.com', 'Panasonic Headphones', '800', 'Used once', 1),
(6, 'zari@yahoo.com', 'Iphone 8', '1000', 'goods pa\r\nrfs: may bago ng phone', 1),
(7, 'soba@yahoo.com', 'Gameboy', '500', '', 1),
(8, 'soba@yahoo.com', 'Final Fantasy Original CD\'s', '', 'price negotiable', 2),
(9, 'mairah@yahoo.com', 'Sony Camcorder', '600', 'rfs: decluttering', 1),
(10, 'zari@yahoo.com', 'New Balance 991', '1', 'for sale', 1),
(11, 'soba@yahoo.com', 'Portable DVD Player', '300', 'bilhin niyo na', 1),
(12, 'zari@yahoo.com', 'Sonny Angel', '500', 'Kewpie sonny angel', 3);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `user_id` int(3) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `password`, `email`, `phonenumber`) VALUES
(5, 'Asdasd123!', 'zari@yahoo.com', ''),
(6, 'Asdasd123!', 'mairah@yahoo.com', ''),
(7, 'Asdasd123!', 'soba@yahoo.com', ''),
(9, 'Asd!1asd', 'mairah.molina@ciit.edu.ph', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `seller` (`seller`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `email_2` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `profile` (`user_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `seller` FOREIGN KEY (`seller`) REFERENCES `profile` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
