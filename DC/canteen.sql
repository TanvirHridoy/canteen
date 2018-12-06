-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2018 at 04:09 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canteen`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `massage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `massage`) VALUES
(1, 'tanvir hridoy', 'anxioushridoy2@gmail.com', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `picture` varchar(1000) NOT NULL DEFAULT 'images/no_photo.jpg',
  `price` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `picture`, `price`, `type`, `status`) VALUES
(1, 'Singara', 'images/singara.jpg', 5, '4', '1'),
(4, 'somucha', 'images/somucha.jpg', 6, '4', '1'),
(5, 'coffe', 'images/coffe.jpg', 20, '4', '1'),
(6, 'Tea', 'images/tea.jpg', 10, '4', '1'),
(8, 'cold coffe', 'images/cold_coffe.jpg', 50, '4', '1'),
(10, 'Cake', 'images/cake.jpg', 10, '4', '1'),
(11, 'nuduls', 'images/nuduls.jpg', 25, '5', '1'),
(12, 'burger', 'images/burger.jpg', 50, '5', '1'),
(13, 'khichuri', 'images/khichuri.jpg', 40, '6', '1');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `s_id` varchar(10000) NOT NULL,
  `c_date` varchar(50) NOT NULL,
  `c_time` varchar(50) NOT NULL,
  `p_date` varchar(50) NOT NULL,
  `p_time` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `p_status` varchar(10) NOT NULL,
  `notification` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'cooking'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `s_id`, `c_date`, `c_time`, `p_date`, `p_time`, `price`, `p_status`, `notification`, `status`) VALUES
(6, '253716', '2018-12-04', '11:11', '01:00:pm', '2018-12-06', 15, 'not paid', '1', 'cooking'),
(7, '253716', '2018-12-04', '11:11', '01:00:pm', '2018-12-06', 15, 'paid', '2', 'delivered'),
(8, '253716', '2018-12-04', '11:11', '01:00:pm', '2018-12-06', 15, 'not paid', '2', 'canceled'),
(10, '253716', '2018-12-04', '11:11', '01:00:pm', '2018-12-06', 216, 'paid', '1', '1'),
(11, '253716', '2018-12-04', '11:11', '01:00:pm', '2018-12-06', 216, '1', '1', '1'),
(12, '253716', '2018-12-04', '11:11', '01:00:pm', '2018-12-06', 216, '1', '1', '1'),
(13, '253716', '2018-12-04', '11:11', '01:00:pm', '2018-12-06', 216, '1', '1', '1'),
(14, '253716', '2018-12-04', '11:11', '01:00:pm', '2018-12-06', 216, '1', '1', '1'),
(15, '253716', '2018-12-04', '11:11', '01:00:pm', '2018-12-06', 216, '1', '1', '1'),
(16, '21837586351', '2018-12-06', '11:11', '2018-12-07', '01:30:pm', 65, '1', '2', '1'),
(17, '253716', '2018-12-06', '11:11', '2018-12-06', '02:00:pm', 56, '1', '', 'cooking'),
(18, '21837586351', '2018-12-06', '11:11', '2018-12-15', '12:30:pm', 56, '1', '30', 'delivered');

-- --------------------------------------------------------

--
-- Table structure for table `o_items`
--

CREATE TABLE `o_items` (
  `id` int(11) NOT NULL,
  `order_id` int(100) NOT NULL,
  `item_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `o_items`
--

INSERT INTO `o_items` (`id`, `order_id`, `item_id`) VALUES
(1, 9, 1),
(2, 9, 4),
(3, 9, 5),
(4, 9, 6),
(5, 9, 8),
(6, 9, 10),
(7, 9, 11),
(8, 9, 12),
(9, 9, 13),
(10, 10, 1),
(11, 10, 4),
(12, 10, 5),
(13, 10, 6),
(14, 10, 8),
(15, 10, 10),
(16, 10, 11),
(17, 10, 12),
(18, 10, 13),
(19, 11, 1),
(20, 11, 4),
(21, 11, 5),
(22, 11, 6),
(23, 11, 8),
(24, 11, 10),
(25, 11, 11),
(26, 11, 12),
(27, 11, 13),
(28, 12, 1),
(29, 12, 4),
(30, 12, 5),
(31, 12, 6),
(32, 12, 8),
(33, 12, 10),
(34, 12, 11),
(35, 12, 12),
(36, 12, 13),
(37, 13, 1),
(38, 13, 4),
(39, 13, 5),
(40, 13, 6),
(41, 13, 8),
(42, 13, 10),
(43, 13, 11),
(44, 13, 12),
(45, 13, 13),
(46, 14, 1),
(47, 14, 4),
(48, 14, 5),
(49, 14, 6),
(50, 14, 8),
(51, 14, 10),
(52, 14, 11),
(53, 14, 12),
(54, 14, 13),
(55, 15, 1),
(56, 15, 4),
(57, 15, 5),
(58, 15, 6),
(59, 15, 8),
(60, 15, 10),
(61, 15, 11),
(62, 15, 12),
(63, 15, 13),
(64, 16, 1),
(65, 16, 6),
(66, 16, 12),
(67, 17, 4),
(68, 17, 8),
(69, 18, 4),
(70, 18, 8);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `student_id`, `password`, `email`, `phone_no`) VALUES
(1, 'sadiaislam', '132-876-99999', '', 'sadia@gmail.com', '01711111111');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `uphone` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `uemail`, `uphone`, `password`) VALUES
(1, 'sadia', 'sadia@gmail.com', '017111111111', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_items`
--
ALTER TABLE `o_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_no` (`phone_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`uemail`),
  ADD UNIQUE KEY `phone` (`uphone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `o_items`
--
ALTER TABLE `o_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
