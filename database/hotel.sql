-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 07:16 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `phone`, `address`, `password`, `image`) VALUES
(2, 'Fuad Uddin', 'fuaduddinador@gmail.com', '01681996801', 'H64, Panna Plaza', '123', 'fuadjpg.jpg'),
(6, 'Jannatul Maoya', 'jannatulmaoya@gmail.com', '01993038550', 'bansree', '123', 'jannat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(27, 'Fuad Uddin', 'fuaduddinador@gmail.com', 'Query', 'Your service was amazing.'),
(28, 'Jannatul Maoya', 'jannatulmaoya@gmail.com', 'Query', 'How to become a admin in your hotel?');

-- --------------------------------------------------------

--
-- Table structure for table `irl_order`
--

CREATE TABLE `irl_order` (
  `order_no` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `tableno` int(11) NOT NULL,
  `bill` double NOT NULL,
  `served` tinyint(1) NOT NULL,
  `subtime` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `irl_order`
--

INSERT INTO `irl_order` (`order_no`, `name`, `email`, `tableno`, `bill`, `served`, `subtime`) VALUES
(20, 'David', '', 1, 900, 0, '03-01-2021 07:08:28pm');

-- --------------------------------------------------------

--
-- Table structure for table `irl_order_item`
--

CREATE TABLE `irl_order_item` (
  `order_no` int(11) NOT NULL,
  `item_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` double NOT NULL,
  `total_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `irl_order_item`
--

INSERT INTO `irl_order_item` (`order_no`, `item_name`, `quantity`, `unit_price`, `total_price`) VALUES
(108, 'Burger', 3, 300, 900),
(108, 'Pizza', 1, 500, 500),
(108, 'Pepsi 500ml', 1, 35, 35),
(108, 'Mountain Dew 500ml', 1, 35, 35),
(109, 'Coca Cola 500ml', 1, 35, 35),
(109, 'Pasta', 3, 200, 600),
(109, 'French Fries', 4, 150, 600),
(110, 'Chocolate Strawberry Smoothie', 1, 200, 200),
(110, 'French Fries', 5, 150, 750),
(2, 'Pizza', 1, 500, 500),
(2, 'Pasta', 1, 300, 300),
(2, 'Mountain Dew 500ml', 1, 35, 35),
(3, 'Pizza', 1, 500, 500),
(3, 'Mountain Dew 500ml', 1, 35, 35),
(5, 'Mountain Dew 500ml', 1, 35, 35),
(5, 'Pepsi 500ml', 1, 35, 35),
(5, 'Chocolate Strawberry Smoothie', 1, 35, 35),
(6, 'Chocolate Strawberry Smoothie', 1, 35, 35),
(6, 'Pepsi 500ml', 1, 35, 35),
(7, 'Pasta', 1, 300, 300),
(7, 'Pizza', 1, 500, 500),
(8, 'Chocolate Strawberry Smoothie', 1, 35, 35),
(8, 'French Fries', 1, 350, 350),
(8, 'Pasta', 1, 300, 300),
(9, 'Chocolate Strawberry Smoothie', 1, 35, 35),
(9, 'French Fries', 1, 350, 350),
(9, 'Pasta', 1, 300, 300),
(10, 'Chocolate Strawberry Smoothie', 1, 35, 35),
(10, 'French Fries', 1, 350, 350),
(10, 'Pasta', 1, 300, 300),
(11, 'Coca Cola 500ml', 1, 35, 35),
(11, 'Pizza', 1, 500, 500),
(11, 'Chocolate Strawberry Smoothie', 1, 35, 35),
(12, 'Burger', 1, 200, 200),
(12, 'French Fries', 1, 350, 350),
(12, 'Pasta', 1, 300, 300),
(12, 'Pizza', 1, 500, 500),
(13, 'French Fries', 1, 350, 350),
(13, 'Pasta', 1, 300, 300),
(13, 'Pizza', 1, 500, 500),
(14, 'Burger', 1, 200, 200),
(14, 'French Fries', 1, 350, 350),
(14, 'Pasta', 1, 300, 300),
(15, 'Pizza', 1, 500, 500),
(15, 'Pepsi 500ml', 1, 35, 35),
(15, 'Mountain Dew 500ml', 1, 35, 35),
(1, 'Pizza', 1, 500, 500),
(1, 'Pepsi 500ml', 1, 35, 35),
(2, 'Pepsi 500ml', 1, 35, 35),
(2, 'Mountain Dew 500ml', 1, 35, 35),
(3, 'Burger', 1, 200, 200),
(3, 'French Fries', 1, 350, 350),
(3, 'Pasta', 1, 300, 300),
(4, 'Burger', 1, 200, 200),
(4, 'French Fries', 1, 350, 350),
(4, 'Pasta', 1, 300, 300),
(5, 'Burger', 1, 200, 200),
(5, 'French Fries', 1, 350, 350),
(5, 'Pasta', 1, 300, 300),
(5, 'Chocolate Strawberry Smoothie', 1, 35, 35),
(6, 'Burger', 1, 200, 200),
(6, 'French Fries', 1, 350, 350),
(6, 'Pasta', 1, 300, 300),
(6, 'Chocolate Strawberry Smoothie', 1, 35, 35),
(10, 'Burger', 1, 200, 200),
(10, 'Pepsi 500ml', 1, 35, 35),
(10, 'Pizza', 1, 500, 500),
(10, 'Pasta', 1, 300, 300),
(11, 'Chocolate Strawberry Smoothie', 1, 35, 35),
(11, 'French Fries', 1, 350, 350),
(11, 'Mountain Dew 500ml', 1, 35, 35),
(12, 'French Fries', 1, 350, 350),
(12, 'Coca Cola 500ml', 1, 35, 35),
(12, 'Mountain Dew 500ml', 1, 35, 35),
(18, 'Burger', 1, 200, 200),
(18, 'Pepsi 500ml', 1, 35, 35),
(18, 'Mountain Dew 500ml', 1, 35, 35),
(16, 'Burger', 1, 200, 200),
(16, 'French Fries', 1, 350, 350),
(16, 'Pasta', 1, 300, 300),
(16, 'Pizza', 1, 500, 500),
(17, 'Burger', 1, 200, 200),
(17, 'French Fries', 1, 350, 350),
(17, 'Pasta', 1, 300, 300),
(17, 'Pizza', 1, 500, 500),
(18, 'Burger', 1, 200, 200),
(18, 'French Fries', 1, 350, 350),
(18, 'Pasta', 1, 300, 300),
(19, 'Pasta', 1, 300, 300),
(19, 'French Fries', 1, 350, 350),
(19, 'Burger', 1, 200, 200),
(19, 'Coca Cola 500ml', 1, 35, 35),
(19, 'Chocolate Strawberry Smoothie', 1, 35, 35),
(19, 'Pizza', 1, 500, 500),
(20, 'Burger', 1, 200, 200),
(20, 'Chicken mashallah', 1, 400, 400),
(20, 'frenchfries', 1, 300, 300);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `itype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `pname`, `image`, `price`, `itype`) VALUES
(31, 'Burger', 'burger.jpg', 200, 'food'),
(35, 'pizza', 'pizza.jpg', 400, 'food'),
(36, 'Chicken mashallah', 'Highlight_1About_10Food copy.jpg', 400, 'food'),
(37, 'frenchfries', 'frenchfries.jpg', 300, 'food'),
(38, 'pasta', 'pasta.jpg', 400, 'food'),
(39, 'sub burger', 'wallpaperflare.com_wallpaper.jpg', 400, 'food'),
(41, 'Noodles', '1474395998-ghk-0216-comfortfoodcover-meatballs.jpg', 400, 'food'),
(45, 'choco smoothy', 'choco_smoothy.jpg', 300, 'beverage'),
(46, 'cocacola 500 ml', 'cocacola_500ml.jpg', 300, 'beverage'),
(47, 'dew 500ml', 'dew_500ml.png', 200, 'beverage'),
(48, 'pepsi 500 ml', 'pepsi_500ml.jpg', 300, 'beverage');

-- --------------------------------------------------------

--
-- Table structure for table `online_order`
--

CREATE TABLE `online_order` (
  `order_no` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `type` varchar(300) NOT NULL,
  `bill` double NOT NULL,
  `delivered` tinyint(1) NOT NULL,
  `subtime` varchar(300) NOT NULL,
  `bed` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `online_order`
--

INSERT INTO `online_order` (`order_no`, `name`, `email`, `type`, `bill`, `delivered`, `subtime`, `bed`) VALUES
(29, 'Jannatul Maoya', 'jannatulmaoya@gmail.com', 'Superior Room', 900, 0, '03-01-2021 06:59:02pm', 'Double');

-- --------------------------------------------------------

--
-- Table structure for table `online_order_item`
--

CREATE TABLE `online_order_item` (
  `item_name` varchar(300) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` double NOT NULL,
  `total_price` double NOT NULL,
  `order_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `online_order_item`
--

INSERT INTO `online_order_item` (`item_name`, `quantity`, `unit_price`, `total_price`, `order_no`) VALUES
('Chocolate Strawberry Smoothie', 1, 35, 35, 0),
('Burger', 1, 200, 200, 19),
('Pepsi 500ml', 1, 35, 35, 19),
('Mountain Dew 500ml', 1, 35, 35, 19),
('Burger', 1, 200, 200, 20),
('Pepsi 500ml', 1, 35, 35, 20),
('Mountain Dew 500ml', 1, 35, 35, 20),
('Burger', 1, 200, 200, 21),
('French Fries', 1, 350, 350, 21),
('Pasta', 1, 300, 300, 21),
('Burger', 1, 200, 200, 22),
('French Fries', 1, 350, 350, 22),
('Pasta', 1, 300, 300, 22),
('Pizza', 1, 500, 500, 22),
('Chocolate Strawberry Smoothie', 1, 35, 35, 22),
('Burger', 1, 200, 200, 23),
('French Fries', 1, 350, 350, 23),
('Pasta', 1, 300, 300, 23),
('Burger', 1, 200, 200, 24),
('French Fries', 1, 350, 350, 24),
('Pasta', 1, 300, 300, 24),
('French Fries', 1, 350, 350, 25),
('Pasta', 1, 300, 300, 25),
('Pasta', 1, 300, 300, 26),
('Pizza', 1, 500, 500, 26),
('Burger', 1, 200, 200, 27),
('French Fries', 1, 350, 350, 27),
('Pasta', 1, 300, 300, 27),
('Burger', 1, 200, 200, 28),
('Chicken mashallah', 1, 400, 400, 28),
('frenchfries', 1, 300, 300, 28),
('Burger', 1, 200, 200, 29),
('Chicken mashallah', 1, 400, 400, 29),
('frenchfries', 1, 300, 300, 29);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tbed` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `meal` varchar(30) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`, `fintot`, `mepr`, `meal`, `btot`, `noofdays`) VALUES
(23, 'Mr.', 'Fuad', 'Uddin', 'Superior Room', 'Single', 1, '2021-01-05', '2021-01-06', 320.00, 323.20, 0.00, 'Room only', 3.20, 1),
(24, 'Miss.', 'Jannatul ', 'Maoya', 'Superior Room', 'Double', 2, '2021-01-13', '2021-01-16', 1920.00, 1977.60, 38.40, 'Breakfast', 19.20, 3);

-- --------------------------------------------------------

--
-- Table structure for table `paymentdetails`
--

CREATE TABLE `paymentdetails` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `paymentof` varchar(300) NOT NULL,
  `paymentmethod` varchar(200) NOT NULL,
  `bill` varchar(300) NOT NULL,
  `staffname` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymentdetails`
--

INSERT INTO `paymentdetails` (`id`, `name`, `email`, `phone`, `paymentof`, `paymentmethod`, `bill`, `staffname`) VALUES
(8, 'Jannatul Maoya', 'jannatulmaoya@gmail.com', '01993038550', 'Room', 'bikash', '50000', 'smith');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `review` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `email`, `review`) VALUES
(2, 'Jannatul Maowa', 'jannatulmaowa@gmail.com', 'My family and I went for a dinner a few days back at the Latest Recipe restaurant and honestly I had a great time.\r\n The food was exceptional and the service and behaviour of the wait staff was phenomenal.\r\n Our server was Smith and he was so attentive and attuned to our needs I was awestruck by how'),
(7, 'Fuad Uddin', 'fuaduddinador@gmail.com', 'Royal Hotel Room service is the best.');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bedding` varchar(10) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`, `place`, `cusid`) VALUES
(1, 'Superior Room', 'Single', 'NotFree', 23),
(2, 'Superior Room', 'Double', 'NotFree', 24),
(3, 'Superior Room', 'Triple', 'Free', 0),
(5, 'Superior Room', 'Quad', 'Free', NULL),
(6, 'Deluxe Room', 'Single', 'Free', NULL),
(7, 'Deluxe Room', 'Double', 'Free', NULL),
(8, 'Deluxe Room', 'Triple', 'Free', NULL),
(9, 'Deluxe Room', 'Quad', 'Free', NULL),
(16, 'Guest House', 'Single', 'Free', NULL),
(17, 'Guest House', 'Double', 'Free', NULL),
(18, 'Guest House', 'Triple', 'Free', NULL),
(19, 'Guest House', 'Quad', 'Free', NULL),
(20, 'Single Room', 'Single', 'Free', NULL),
(21, 'Single Room', 'Double', 'Free', NULL),
(22, 'Single Room', 'Triple', 'Free', NULL),
(23, 'Single Room', 'Quad', 'Free', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text DEFAULT NULL,
  `LName` text DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `National` varchar(30) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `Phone` text DEFAULT NULL,
  `TRoom` varchar(20) DEFAULT NULL,
  `Bed` varchar(10) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `Meal` varchar(15) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`, `stat`, `nodays`) VALUES
(23, 'Mr.', 'Fuad', 'Uddin', 'fuaduddinador@gmail.com', 'BD', 'Bangladesh', '01681996801', 'Superior Room', 'Single', '1', 'Room only', '2021-01-05', '2021-01-06', 'Conform', 1),
(24, 'Miss.', 'Jannatul ', 'Maoya', 'jannatulmaoya@gmail.com', 'BD', 'Bangladesh', '01993038550', 'Superior Room', 'Double', '2', 'Breakfast', '2021-01-13', '2021-01-16', 'Conform', 3);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `user_type` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `address` varchar(400) NOT NULL,
  `salary` double(10,4) NOT NULL,
  `password` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `user_type`, `email`, `phone`, `address`, `salary`, `password`, `image`) VALUES
(19, 'smith', 'Resturant', 'smith@gmail.com', '01914875512', 'uttara', 100000.0000, ' 123', 'staff-1.jpg'),
(21, 'David', 'Waiter', 'david@gmail.com', '01682446363', 'mirpur', 100000.0000, ' 123', 'staff-3.jpg'),
(22, 'Jack', 'Reception', 'jack@gmail.com', '01924102344', 'uttara', 100000.0000, ' 123', 'staff-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(300) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `contact`, `address`, `password`, `image`) VALUES
(31, 'Fuad Uddin ', 'fuaduddinador@gmail.com', '01681996801', 'uttara', '123', 'fuadjpg.jpg'),
(32, 'Jannatul Maoya', 'jannatulmaoya@gmail.com', '01993038550', 'bansree', '123', 'jannat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `user_type` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(15, 'smith', 'smith@gmail.com', '123', 'Resturant'),
(17, 'David', 'david@gmail.com', '123', 'Waiter'),
(18, 'Jack', 'jack@gmail.com', '123', 'Reception');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `irl_order`
--
ALTER TABLE `irl_order`
  ADD PRIMARY KEY (`order_no`);

--
-- Indexes for table `irl_order_item`
--
ALTER TABLE `irl_order_item`
  ADD KEY `order_no` (`order_no`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_order`
--
ALTER TABLE `online_order`
  ADD PRIMARY KEY (`order_no`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `irl_order`
--
ALTER TABLE `irl_order`
  MODIFY `order_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `online_order`
--
ALTER TABLE `online_order`
  MODIFY `order_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
