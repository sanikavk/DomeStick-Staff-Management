-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 05:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `domestick`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` varchar(20) NOT NULL,
  `pwd` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `pwd`) VALUES
('admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `bbs_details`
--

CREATE TABLE `bbs_details` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `equip` enum('no','yes') NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` enum('in_queue','accepted') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bbs_details`
--

INSERT INTO `bbs_details` (`id`, `name`, `date`, `time`, `equip`, `address`, `status`) VALUES
(1, 'Sam', '2023-06-30', '09:00:00.000000', 'no', 'Malleshwaram, Bangalore', 'in_queue'),
(2, 'sanika', '2023-06-30', '10:30:00.000000', 'no', 'Yalahanka, Bangalore', 'in_queue');

-- --------------------------------------------------------

--
-- Table structure for table `clean_details`
--

CREATE TABLE `clean_details` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time(4) NOT NULL,
  `equip` enum('no','yes') NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` enum('in_queue','accepted') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clean_details`
--

INSERT INTO `clean_details` (`id`, `name`, `date`, `time`, `equip`, `address`, `status`) VALUES
(1, 'sanika', '2023-06-22', '11:15:00.0000', 'no', 'Yelahanka, Bangalore', 'accepted'),
(2, 'Manish', '2023-06-28', '10:00:00.0000', 'yes', 'RT Nagar , Bangalore', 'in_queue'),
(3, 'Vivekanand', '2023-07-03', '10:00:00.0000', 'no', 'Judicial Layout , Bangalore', 'in_queue');

-- --------------------------------------------------------

--
-- Table structure for table `electric_details`
--

CREATE TABLE `electric_details` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `equip` enum('no','yes') NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` enum('in_queue','accepted') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `electric_details`
--

INSERT INTO `electric_details` (`id`, `name`, `date`, `time`, `equip`, `address`, `status`) VALUES
(1, 'Aarav', '2023-06-18', '16:00:00.000000', 'yes', 'KR Puram, Bangalore', 'in_queue'),
(2, 'sanika', '2023-07-01', '11:00:00.000000', 'yes', 'RT Nagar , Bangalore', 'in_queue'),
(3, 'saish', '2023-07-08', '12:45:00.000000', 'yes', 'Malleshwaram, Bangalore', 'in_queue');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phno` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fdback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `phno`, `email`, `fdback`) VALUES
(1, 'sanika', 1234567890, 'sanika@gmail.com', 'I recently used a cleaning service booking website and had a fantastic experience. ');

-- --------------------------------------------------------

--
-- Table structure for table `plumbing_details`
--

CREATE TABLE `plumbing_details` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `equip` enum('no','yes') NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` enum('in_queue','accepted') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plumbing_details`
--

INSERT INTO `plumbing_details` (`id`, `name`, `date`, `time`, `equip`, `address`, `status`) VALUES
(1, 'Ramesh', '2023-06-23', '15:00:00.000000', 'yes', 'RT Nagar,Bangalore', 'in_queue'),
(2, 'ananya', '2023-06-16', '17:30:00.000000', 'yes', 'White Field, Bangalore', 'in_queue');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `name` varchar(20) NOT NULL,
  `email` varchar(25) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`name`, `email`, `phone`, `password`) VALUES
('ananya', 'ananya@gmail.com', '1234567891', '09e5cb531a1f732e541bb04f9b680249'),
('sanika', 'sanika@gmail.com', '1234567890', '0f68d61ae0fb3c5143e95ba68bb28874'),
('Vivekanand', 'vivek@gmail.com', '123563245', '061a01a98f80f415b1431236b62bb10b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bbs_details`
--
ALTER TABLE `bbs_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clean_details`
--
ALTER TABLE `clean_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electric_details`
--
ALTER TABLE `electric_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plumbing_details`
--
ALTER TABLE `plumbing_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`name`(15)) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bbs_details`
--
ALTER TABLE `bbs_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clean_details`
--
ALTER TABLE `clean_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `electric_details`
--
ALTER TABLE `electric_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plumbing_details`
--
ALTER TABLE `plumbing_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
