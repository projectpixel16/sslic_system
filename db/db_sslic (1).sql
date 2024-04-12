-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2024 at 06:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sslic`
--

-- --------------------------------------------------------

--
-- Table structure for table `credit_reference`
--

CREATE TABLE `credit_reference` (
  `credit_id` int(11) NOT NULL,
  `personal_id` int(11) NOT NULL DEFAULT 0,
  `creditor` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `orig_amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `loan_balance` decimal(10,2) NOT NULL DEFAULT 0.00,
  `collateral` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_data`
--

CREATE TABLE `personal_data` (
  `personal_id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `bday` varchar(20) DEFAULT NULL,
  `age` decimal(10,2) DEFAULT NULL,
  `sex` varchar(20) DEFAULT NULL,
  `spouse` varchar(100) DEFAULT NULL,
  `no_dependents` int(11) NOT NULL DEFAULT 0,
  `no_studying` int(11) NOT NULL DEFAULT 0,
  `home_address` text DEFAULT NULL,
  `tel_no` varchar(50) DEFAULT NULL,
  `house_type` varchar(50) DEFAULT NULL,
  `tin` varchar(100) DEFAULT NULL,
  `business_address` text DEFAULT NULL,
  `bus_telno` varchar(50) DEFAULT NULL,
  `employer` text DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `nature_business` text DEFAULT NULL,
  `length_service` int(11) NOT NULL DEFAULT 0,
  `spouse_employment` text DEFAULT NULL,
  `spouse_position` varchar(100) DEFAULT NULL,
  `spouse_address` text DEFAULT NULL,
  `spouse_telno` varchar(50) DEFAULT NULL,
  `exp_food` decimal(10,2) NOT NULL DEFAULT 0.00,
  `exp_water` decimal(10,2) NOT NULL DEFAULT 0.00,
  `exp_education` decimal(10,2) NOT NULL DEFAULT 0.00,
  `exp_others` decimal(10,2) NOT NULL DEFAULT 0.00,
  `others_name` varchar(100) DEFAULT NULL,
  `savings_account` text DEFAULT NULL,
  `checking_account` text DEFAULT NULL,
  `loan_amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `loan_term` text DEFAULT NULL,
  `collateral_offered` text DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `payslip_img` varchar(255) DEFAULT NULL,
  `promissory_img` varchar(255) DEFAULT NULL,
  `first_id` varchar(255) DEFAULT NULL,
  `second_id` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_properties`
--

CREATE TABLE `personal_properties` (
  `properties_id` int(11) NOT NULL,
  `personal_id` int(11) NOT NULL DEFAULT 0,
  `kind` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `value` decimal(10,2) NOT NULL DEFAULT 0.00,
  `encumbrance` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_reference`
--

CREATE TABLE `personal_reference` (
  `reference_id` int(11) NOT NULL,
  `personal_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `employment` text DEFAULT NULL,
  `relation` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `source_income`
--

CREATE TABLE `source_income` (
  `source_id` int(11) NOT NULL,
  `personal_id` int(11) NOT NULL DEFAULT 0,
  `nature` text DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `contact_no` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `fullname`, `address`, `contact_no`, `email`, `password`, `create_date`) VALUES
(1, '12345', 'Stephine', 'silay', '09075586497', 'stephinesev@gmail.com', '12345', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credit_reference`
--
ALTER TABLE `credit_reference`
  ADD PRIMARY KEY (`credit_id`);

--
-- Indexes for table `personal_data`
--
ALTER TABLE `personal_data`
  ADD PRIMARY KEY (`personal_id`);

--
-- Indexes for table `personal_properties`
--
ALTER TABLE `personal_properties`
  ADD PRIMARY KEY (`properties_id`);

--
-- Indexes for table `personal_reference`
--
ALTER TABLE `personal_reference`
  ADD PRIMARY KEY (`reference_id`);

--
-- Indexes for table `source_income`
--
ALTER TABLE `source_income`
  ADD PRIMARY KEY (`source_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credit_reference`
--
ALTER TABLE `credit_reference`
  MODIFY `credit_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_data`
--
ALTER TABLE `personal_data`
  MODIFY `personal_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_properties`
--
ALTER TABLE `personal_properties`
  MODIFY `properties_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_reference`
--
ALTER TABLE `personal_reference`
  MODIFY `reference_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `source_income`
--
ALTER TABLE `source_income`
  MODIFY `source_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
