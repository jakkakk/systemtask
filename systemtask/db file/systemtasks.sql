-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2021 at 08:35 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `systemtasks`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(200) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postal_code` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctor_id`, `doctor_name`, `specialization`, `city`, `postal_code`, `country`) VALUES
(1, 'William', 'cardiologist', 'Hyderabad', '500090', 'India'),
(2, 'James', 'heart specialist', 'Mumbai', '678987', 'India'),
(3, 'Evelyn', 'fertility specialist', 'Pune', '876789', 'India'),
(4, 'Harper', 'gynecologist', 'Delhi', '789098', 'India'),
(5, 'Mason', 'chiropractor', 'New York', '109878', 'US'),
(6, 'Ella', 'dentist', 'Vijayawada', '580909', 'India'),
(7, 'Jackson', 'dermatologist', 'Sydney', '890978', 'Australia'),
(8, 'Avery', 'skin specialist', 'Sanfransco', '190876', 'US'),
(9, 'Scarlett', 'chiropractor', 'Nagpur', '987688', 'India'),
(10, 'Jack\r\n', 'dentist', 'London', '290890', 'UK'),
(11, 'Eleanor', 'anesthesiologist', 'Kolkata', '678989', 'India'),
(12, 'Madison', 'allergist', 'Manchester', '209890', 'UK'),
(13, 'Ellie\r\n', 'gynecologist', 'Melbourne', '545009', 'Australia'),
(14, 'Swathi', 'gynecologist', 'Hyderabad', '987890', 'India'),
(15, 'Ram', 'dentist', 'London', '532001', 'UK');

-- --------------------------------------------------------

--
-- Table structure for table `user_files`
--

CREATE TABLE `user_files` (
  `file_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file_name` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_files`
--

INSERT INTO `user_files` (`file_id`, `user_id`, `file_name`, `created_at`) VALUES
(3, 1, 'sample.pdf', '2021-05-13 06:51:26'),
(5, 1, 'download.jpg', '2021-05-13 07:09:13'),
(6, 1, 'images.jpg', '2021-05-14 07:35:32');

-- --------------------------------------------------------

--
-- Table structure for table `user_management`
--

CREATE TABLE `user_management` (
  `user_id` int(11) NOT NULL,
  `user_role` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `mobile_number` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_management`
--

INSERT INTO `user_management` (`user_id`, `user_role`, `first_name`, `last_name`, `email_id`, `mobile_number`, `address`, `city`, `state`, `country`, `user_password`, `created_at`) VALUES
(1, 'Super Admin', 'admin', 'admin', 'admin@gmail.com', '9966552804', 'test', 'test', 'test1', 'India', 'admin', '2021-05-13 11:19:20'),
(2, 'Admin', 'test', 'test', 'test@gmail.com', '9878986767', 'test address', 'Hyderabad', 'Telangana', 'India', '123456', '2021-05-12 17:10:07'),
(3, 'User', 'Lucky', 'Ram', 'ram@gmail.com', '98098998787', 'test', 'Vijayawada', 'Andhra Pradesh', 'India', '123456', '2021-05-11 07:11:50'),
(4, 'Super Admin', 'Anil', 'Kumar', 'test@gmail.com', '7097891876', 'test', 'Hyderabad', 'Telangana', 'India', 'Test@123', '2021-05-14 07:49:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `user_files`
--
ALTER TABLE `user_files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `user_management`
--
ALTER TABLE `user_management`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user_files`
--
ALTER TABLE `user_files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_management`
--
ALTER TABLE `user_management`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
