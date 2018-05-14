-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 06:01 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pocica`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` int(9) NOT NULL,
  `stock` int(3) NOT NULL,
  `image` text NOT NULL,
  `weight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `stock`, `image`, `weight`) VALUES
(1, 'Indiana Black', 'foam, kain keras, zipper, dan pompom.', 25000, 5, 'indiana-black.jpg', 50),
(2, 'Indiana Pink', 'foam, kain keras, zipper, dan pompom.', 25000, 5, 'indiana-pink.jpg', 50),
(3, 'Choco', 'foam, kain keras, zipper, dan pompom.', 25000, 5, 'choco.jpg', 50),
(4, 'Flamingo', 'foam, kain keras, zipper, dan pompom.', 25000, 5, 'flamingo.jpg', 50),
(5, 'Wrapping Bag Yellow', ' Two pocket on inner and zipper pocket.', 235000, 5, 'wrappingbag3.jpg', 250),
(6, 'Wrapping Bag Pink', ' Two pocket on inner and zipper pocket.', 235000, 5, 'wrappingbag5.jpg', 250),
(7, 'Wrapping Bag Blue', ' Two pocket on inner and zipper pocket.', 235000, 5, 'wrappingbag2.jpg', 250),
(8, 'Zebra Stripe', 'foam, kain keras, zipper, dan pompom.', 25000, 5, 'zebra-stripe.jpg', 50);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `grup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `grup`) VALUES
(1, 'testing', 'amirfak922@gmail.com', '123654', 0),
(2, 'anggra', 'xuiehwufncuije@gmail.com', '111111', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
