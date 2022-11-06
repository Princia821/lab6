-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 05:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppin`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_cat` int(11) NOT NULL,
  `product_brand` int(11) NOT NULL,
  `product_title` varchar(200) NOT NULL,
  `product_price` double NOT NULL,
  `product_desc` varchar(500) DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `product_keywords` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 9, 9, 'lip balm', 20, 'Lip balm keeps your lips fresh and clean. ', '../images/products/lip balm.jpg', 'lb'),
(2, 7, 7, 'summer dress', 80, 'summer dresses are very cool and comfortable. ', '../images/summer dress.jpg', 'sd'),
(3, 4, 3, 'smallb', 30, 'smallb is a nice small bag that you can take anywhere. ', '../images/smallb.jpg', 'sb'),
(4, 6, 7, 'heels', 150, 'heels are nice to ladies as it adds confidence to them. ', '../images/heels1.jpg', 'hl'),
(5, 6, 8, 'crocks', 5, 'crocks are nice and comfortable', '../images/crocks.jpg', 'cr'),
(6, 8, 12, 'jacks', 40, 'jacks are nice summer shorts for men. ', '../images/jack.jpg', 'jk'),
(7, 6, 5, 'sportsh', 30, 'sportsh are sports shoes that make you comfortable while doing sport. ', '../images/sportsh.jpg', 'sp'),
(8, 4, 3, 'girlsb', 20, 'girlsb are nice bags for girls, used for keeping safe their money and phone. ', '../images/girlsb.jpg', 'gb'),
(9, 9, 9, 'fond', 10, 'fond is a nice foundation for ladies, it looks more natural.', '../images/fond.jpg', 'fd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_cat` (`product_cat`),
  ADD KEY `product_brand` (`product_brand`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`product_cat`) REFERENCES `categories` (`cat_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`product_brand`) REFERENCES `brands` (`brand_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
