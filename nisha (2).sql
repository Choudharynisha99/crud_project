-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2023 at 05:45 AM
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
-- Database: `nisha`
--

-- --------------------------------------------------------

--
-- Table structure for table `birthday`
--

CREATE TABLE `birthday` (
  `id` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `city` tinytext DEFAULT NULL,
  `phone` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` tinytext DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `city` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `pass`, `salary`, `city`) VALUES
(1, 'rrryyttt', 'manavqq@gmail.com', '23433', 45454, 'delhi'),
(2, 'nisha', 'nisha99@gmail.com', 'fjdbf', 10000, 'pune'),
(3, 'shivansh', 'shivansh67@gmail.com', 'abcd45', 25000, 'jaipur'),
(4, 'karan', 'karan67@gmail.com', '5676adf', 21000, 'mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `emp_details`
--

CREATE TABLE `emp_details` (
  `Id` int(11) NOT NULL,
  `Name` tinytext DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Pass` varchar(100) NOT NULL,
  `Salary` int(11) NOT NULL,
  `City` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_details`
--

INSERT INTO `emp_details` (`Id`, `Name`, `Email`, `Pass`, `Salary`, `City`) VALUES
(1, 'Aniket', 'aniket45@gmail.com', 'dffgfg', 87000, 'delhi'),
(2, 'nisha', 'nisha123@gmail.com', 'abcd234', 80000, 'delhi'),
(3, 'komal', 'komalkh99@gmail.com', 'nisha2004', 900000, 'delhi'),
(4, 'venny', 'ishu45@outlook.com', '34567', 120000, 'mumbai'),
(5, 'aarti', 'aarti23@gmail.com', '5485', 800000, 'pune');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_details`
--
ALTER TABLE `emp_details`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `emp_details`
--
ALTER TABLE `emp_details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
