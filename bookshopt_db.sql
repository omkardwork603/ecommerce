-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2024 at 12:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshopt_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(1, '21', 'vishal', 'vishal12@gmail.com', '123211321', 'good product'),
(2, '30', ' Manisha', 'manish13@gmail.com', '', 'ewe'),
(3, '30', ' Manisha', 'manishew13@gmail.com', '34534345', 'fdf'),
(4, '30', ' Manisha', 'manish13@gmail.com', '12', 'df'),
(5, '30', 'vishla', 'vishal12@gmail.com', '384673283', 'gffg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_product` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'Hold on'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_product`, `total_price`, `placed_on`, `payment_status`) VALUES
(1, '1', 'omkar', '98673421', 'omkar1232@gmail.com', 'cash on delivery', 'flat no 124, andheri, mumbai, india', 'the world(2)', 50, '2nd march 2024', 'completed'),
(7, '29', 'so', '1234', 'suraj@gamil.com', 'cash on delivery', 'flat no. 676, thane, mumbai, india - 1234', ', clever_lands (10) ', 240, '02-Sep-2024', 'completed'),
(10, '30', 'Rohan ', '123456789', 'rohan123@gmail.com', 'cash on delivery', 'flat no. 676, thane, mumbai, india - 123456', ', earpods (1) , earphone (1) ', 410, '12-Sep-2024', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `olde_price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `olde_price`, `image`) VALUES
(1, 'Watch', '200', '300', 'product-2.png'),
(7, 'earpods', '160', '200', 'product-7-removebg-preview.png'),
(15, 'earphone', '250', '400', 'product-9-removebg-preview.png'),
(16, 'Book', '200', '240', 'darknet.jpg'),
(17, 'economic book', '280', '300', 'no-excuses-book.jpeg'),
(21, 'Gaming cooler', '15000', '30000', 'product-5-1.png'),
(22, 'Book', '420', '600', 'shattered.jpg'),
(25, 'Tablet', '2000', '4200', 'product-13ss.png');

-- --------------------------------------------------------

--
-- Table structure for table `productd`
--

CREATE TABLE `productd` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `new_price` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productd`
--

INSERT INTO `productd` (`id`, `name`, `price`, `new_price`, `image`) VALUES
(1, 'Mobile', '3000', '', 'home-img-1.png'),
(2, 'watch', '20000', '', 'home-img-2.png'),
(3, 'headphone', '3000', '', 'home-img-3.png');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'vishal', 'vishal12@gmail.com', '37693cfc748049e45d87b8c7d8b9aacd', 'user'),
(3, 'mohan', 'mohan122@gmail.com', 'a0a080f42e6f13b3a2df133f073095dd', 'user'),
(6, ' Manisha', 'manish13@gmail.com', 'b6d767d2f8ed5d21a44b0e5886680cb9', 'user'),
(10, 'vishal1', 'vishal13@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'user'),
(17, ' Manisha', 'manish13@gmail.com', 'adb4825ff76c3962af098f54c9061d1d', 'user'),
(24, 'omkar joshi', 'omjoshi12@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'user'),
(30, 'rohan', 'rohan123@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(34, 'admin', 'admin112@gmail.com', '7f6ffaa6bb0b408017b62254211691b5', 'admin'),
(35, ' Manisha', 'manishs13@gmail.com', '6512bd43d9caa6e02c990b0a82652dca', 'user'),
(36, 'vishal', 'vishal144@gmail.com', '0a09c8844ba8f0936c20bd791130d6b6', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productd`
--
ALTER TABLE `productd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `productd`
--
ALTER TABLE `productd`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
