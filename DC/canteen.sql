-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 12:11 AM
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
  `price` varchar(10) NOT NULL,
  `p_status` varchar(10) NOT NULL,
  `notification` varchar(100) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `s_id`, `c_date`, `c_time`, `p_date`, `p_time`, `price`, `p_status`, `notification`, `status`) VALUES
(6, '253716', '2018-12-04', '11:11', '01:00:pm', '2018-12-06', '15', '', '1', 1),
(7, '253716', '2018-12-04', '11:11', '01:00:pm', '2018-12-06', '15', '1', '2', 1),
(8, '253716', '2018-12-04', '11:11', '01:00:pm', '2018-12-06', '15', '1', '2', 1),
(9, '253716', '2018-12-04', '11:11', '01:00:pm', '2018-12-06', '216', '1', '1', 1),
(10, '253716', '2018-12-04', '11:11', '01:00:pm', '2018-12-06', '216', '1', '1', 1),
(11, '253716', '2018-12-04', '11:11', '01:00:pm', '2018-12-06', '216', '1', '1', 1),
(12, '253716', '2018-12-04', '11:11', '01:00:pm', '2018-12-06', '216', '1', '1', 1),
(13, '253716', '2018-12-04', '11:11', '01:00:pm', '2018-12-06', '216', '1', '1', 1),
(14, '253716', '2018-12-04', '11:11', '01:00:pm', '2018-12-06', '216', '1', '1', 1),
(15, '253716', '2018-12-04', '11:11', '01:00:pm', '2018-12-06', '216', '1', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `o_items`
--

CREATE TABLE `o_items` (
  `id` int(11) NOT NULL,
  `order_id` int(100) NOT NULL,
  `item_id` int(100) NOT NULL,
  `item_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `o_items`
--

INSERT INTO `o_items` (`id`, `order_id`, `item_id`, `item_name`) VALUES
(1, 9, 1, NULL),
(2, 9, 4, NULL),
(3, 9, 5, NULL),
(4, 9, 6, NULL),
(5, 9, 8, NULL),
(6, 9, 10, NULL),
(7, 9, 11, NULL),
(8, 9, 12, NULL),
(9, 9, 13, NULL),
(10, 10, 1, NULL),
(11, 10, 4, NULL),
(12, 10, 5, NULL),
(13, 10, 6, NULL),
(14, 10, 8, NULL),
(15, 10, 10, NULL),
(16, 10, 11, NULL),
(17, 10, 12, NULL),
(18, 10, 13, NULL),
(19, 11, 1, NULL),
(20, 11, 4, NULL),
(21, 11, 5, NULL),
(22, 11, 6, NULL),
(23, 11, 8, NULL),
(24, 11, 10, NULL),
(25, 11, 11, NULL),
(26, 11, 12, NULL),
(27, 11, 13, NULL),
(28, 12, 1, NULL),
(29, 12, 4, NULL),
(30, 12, 5, NULL),
(31, 12, 6, NULL),
(32, 12, 8, NULL),
(33, 12, 10, NULL),
(34, 12, 11, NULL),
(35, 12, 12, NULL),
(36, 12, 13, NULL),
(37, 13, 1, NULL),
(38, 13, 4, NULL),
(39, 13, 5, NULL),
(40, 13, 6, NULL),
(41, 13, 8, NULL),
(42, 13, 10, NULL),
(43, 13, 11, NULL),
(44, 13, 12, NULL),
(45, 13, 13, NULL),
(46, 14, 1, NULL),
(47, 14, 4, NULL),
(48, 14, 5, NULL),
(49, 14, 6, NULL),
(50, 14, 8, NULL),
(51, 14, 10, NULL),
(52, 14, 11, NULL),
(53, 14, 12, NULL),
(54, 14, 13, NULL),
(55, 15, 1, NULL),
(56, 15, 4, NULL),
(57, 15, 5, NULL),
(58, 15, 6, NULL),
(59, 15, 8, NULL),
(60, 15, 10, NULL),
(61, 15, 11, NULL),
(62, 15, 12, NULL),
(63, 15, 13, NULL);

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
(1, 'sadia 420', '420420420420', '12345678', 'sadia420@gmail.com', '01711111111'),
(2, 'tanvir hridoy', '21180200823', '12345678', 'hridoy@gmail.com', '01755091665');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

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
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `o_items`
--
ALTER TABLE `o_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
