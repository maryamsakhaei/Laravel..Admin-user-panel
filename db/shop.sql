-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 06:44 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlist`
--

CREATE TABLE `adminlist` (
  `id` int(255) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `adminlist`
--

INSERT INTO `adminlist` (`id`, `email`, `password`) VALUES
(1, 'maryamsakhaei66@yahoo.com', '1366');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `images`) VALUES
(6, 'clothes', '1611062211.jpg'),
(9, 'tools', '1611592132.jpg'),
(10, 'Home appliance', '1611592281.PNG'),
(11, 'Food', '1611748888.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `number` varchar(60) COLLATE utf8_persian_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `email` varchar(60) COLLATE utf8_persian_ci DEFAULT NULL,
  `track_number` varchar(4) COLLATE utf8_persian_ci DEFAULT NULL,
  `product_id` varchar(5) COLLATE utf8_persian_ci DEFAULT NULL,
  `total_price` varchar(10) COLLATE utf8_persian_ci DEFAULT NULL,
  `state` varchar(4) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `number`, `name`, `email`, `track_number`, `product_id`, `total_price`, `state`) VALUES
(1, '6', NULL, NULL, NULL, NULL, NULL, NULL),
(2, '2', NULL, NULL, NULL, NULL, NULL, NULL),
(3, '2', NULL, NULL, NULL, NULL, NULL, NULL),
(4, '3', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `name` varchar(60) COLLATE utf8_persian_ci DEFAULT NULL,
  `price` varchar(30) COLLATE utf8_persian_ci DEFAULT NULL,
  `description` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `tag` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `categories` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `photo`, `tag`, `categories`) VALUES
(1, 'meat', '5', 'full of vitamin', 'meat.PNG', NULL, 'food'),
(3, 'nut', '15', 'lksgnldrnbjldshbd', 'nut.PNG', NULL, 'food'),
(88, 'rice', '3', 'full of b12-b6', 'rice.PNG', NULL, NULL),
(90, 'nut', '25', 'full of vitaminecvncvmcvgmgm', '1608742598.PNG', NULL, NULL),
(91, 'maryam sakhaei', '25', 'full of vitaminecvncvmcvgmgm', '1608742745.PNG', NULL, NULL),
(92, 'hoodi', '30', 'Hoodi', '1609860595.PNG', NULL, 'clothes'),
(93, 'spageti', '2', 'spagetti', '1610145425.PNG', NULL, NULL),
(94, 't-shirt', '10', 't-shirt', '1610147993.PNG', NULL, 'clothes'),
(95, 't-shirt', '25', 'dbsdbdsb', '1610904841.PNG', '#2021#summer', NULL),
(96, 'frig', '1500', '1200w', '1610906298.PNG', '#2021#summer', NULL),
(97, 'herd', '1200', 'dfdftmfgmft', '1611058748.PNG', 'Herd,Kaufen', '3'),
(98, 'Frig', '1400', '1200w', '1611598557.PNG', '#SparenEnergi', 'Home appliance'),
(99, 'schlussel', '10', 'dfrhdjdrjd', '1611599569.PNG', 'schlussel,reparieren', 'tools'),
(100, 'ttyy', '4525', 'rthty5jrt6y', '1613077631.PNG', '#2021,#summer', 'clothes');

-- --------------------------------------------------------

--
-- Table structure for table `userlist`
--

CREATE TABLE `userlist` (
  `id` int(255) NOT NULL,
  `name` varchar(60) COLLATE utf32_persian_ci DEFAULT NULL,
  `email` varchar(60) COLLATE utf32_persian_ci DEFAULT NULL,
  `password` varchar(20) COLLATE utf32_persian_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf32_persian_ci DEFAULT NULL,
  `photo` varchar(100) COLLATE utf32_persian_ci DEFAULT NULL,
  `bann` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_persian_ci;

--
-- Dumping data for table `userlist`
--

INSERT INTO `userlist` (`id`, `name`, `email`, `password`, `mobile`, `photo`, `bann`) VALUES
(8, 'mahdi', 'mahdi@yahoo.com', '9193678296', '09193678296', NULL, 1),
(12, 'mitra', 'mitra@yahoo.com', '271', '09192713714', NULL, NULL),
(13, 'amir', 'amir@yahoo.com', '6044184', '09126044184', NULL, 1),
(16, 'fatemeh', 'fatemehe@yahoo.com', '2713714', '09192713714', 'aaaaaa', NULL),
(17, 'maryam sakhaei', 'maryamsakhaei87@yahoo.com', '1987', '09125641452', NULL, NULL),
(18, 'rahaaagbmvg', 'raha@yahoo.com', '0152', '09126044184', NULL, NULL),
(20, 'maryam sakhaei', 'maryam66@yahoo.com', '1366', '09193678296', NULL, NULL),
(21, 'masoom', 'masoom@yahoo.com', '0936', '0936111111', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlist`
--
ALTER TABLE `adminlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD UNIQUE KEY `dairy` (`id`,`name`);

--
-- Indexes for table `userlist`
--
ALTER TABLE `userlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlist`
--
ALTER TABLE `adminlist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `userlist`
--
ALTER TABLE `userlist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
