-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 08, 2021 at 12:20 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `costmodel`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment_plans`
--

CREATE TABLE `payment_plans` (
  `id` int(11) NOT NULL,
  `plan_type` int(11) DEFAULT NULL,
  `months` int(11) NOT NULL COMMENT 'No of months',
  `participants` int(11) DEFAULT NULL COMMENT 'No of Subscription',
  `features` varchar(200) DEFAULT NULL,
  `currency_type` varchar(11) DEFAULT NULL,
  `plan_amount` decimal(10,2) DEFAULT NULL,
  `discount` decimal(3,2) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` int(8) NOT NULL,
  `user_name` varchar(150) DEFAULT NULL,
  `user_password` varchar(500) DEFAULT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `job_title` varchar(300) DEFAULT NULL,
  `company_name` varchar(300) DEFAULT NULL,
  `comp_unique_code` varchar(200) DEFAULT NULL,
  `role` int(5) DEFAULT NULL,
  `user_type` int(11) DEFAULT NULL COMMENT '1 - Ank Admin\r\n2 - Enterprise User\r\n3 - Normal User',
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `user_name`, `user_password`, `first_name`, `last_name`, `job_title`, `company_name`, `comp_unique_code`, `role`, `user_type`, `created_date`, `updated_date`) VALUES
(21000001, 'admin@gmail.com', 'test', NULL, NULL, NULL, NULL, NULL, NULL, 0, '0000-00-00 00:00:00', '2021-01-08 10:50:00'),
(21000002, 'eadmin@gmail.com', 'test', 'te', '', 'dasd', '', '', NULL, 1, '0000-00-00 00:00:00', '2021-01-08 10:51:18'),
(21000003, 'euser@gmail.com', 'test', 'te', '', 'dasd', '', '', NULL, 2, '0000-00-00 00:00:00', '2021-01-08 10:51:21'),
(21000004, 'user@gmail.com', 'test', 'te', '', 'dasd', '', '', NULL, 3, '0000-00-00 00:00:00', '2021-01-08 10:51:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_plans`
--

CREATE TABLE `user_plans` (
  `pid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `plan_type` int(11) NOT NULL,
  `participants` int(11) NOT NULL,
  `currency_type` varchar(10) DEFAULT NULL,
  `net_amount` decimal(7,2) NOT NULL,
  `gst_tax` decimal(7,2) NOT NULL,
  `gross_amount` decimal(7,2) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `paid_date` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0 Not Paid\r\n1 Active\r\n2 Deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment_plans`
--
ALTER TABLE `payment_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment_plans`
--
ALTER TABLE `payment_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21000005;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
