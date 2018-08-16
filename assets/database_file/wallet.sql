-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2018 at 02:54 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wallet`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` enum('Admin','User') NOT NULL,
  `status` enum('1','0') NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  `activation_code` int(11) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `expired_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wallet_in`
--

CREATE TABLE `wallet_in` (
  `id` int(5) NOT NULL,
  `userId` int(10) NOT NULL,
  `amount` double(10,2) NOT NULL,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identity` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='The Wallet in amount and their sources';

--
-- Dumping data for table `wallet_in`
--

INSERT INTO `wallet_in` (`id`, `userId`, `amount`, `code`, `reason`, `source`, `person`, `identity`, `date`, `time`, `deleted`) VALUES
(1, 3, 96490.00, 'Txn_4545', 'Fee payment', 'M-PESA', 'Mercy Kinyi', 'JOB', '2018-01-13', '2018-01-13 02:48:44', '0'),
(2, 2, 85709.00, 'Txn_1863', 'Fee payment', 'M-PESA', 'Mercy Kinyi', 'JOB', '2018-01-13', '2018-01-13 02:49:14', '0');

-- --------------------------------------------------------

--
-- Table structure for table `wallet_out`
--

CREATE TABLE `wallet_out` (
  `id` int(5) NOT NULL,
  `userId` int(10) NOT NULL,
  `amount` double(10,2) NOT NULL,
  `code` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identity` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='The wallet out amount and the reason';

--
-- Dumping data for table `wallet_out`
--

INSERT INTO `wallet_out` (`id`, `userId`, `amount`, `code`, `reason`, `source`, `person`, `identity`, `date`, `time`, `deleted`) VALUES
(1, 3, 5610.00, 'Txn_6969', 'Food payment', 'M-PESA', 'Mercy Kinyi', 'JOB', '2018-01-13', '2018-01-13 02:49:50', '0'),
(2, 2, 3516.00, 'Txn_4752', 'Food payment', 'M-PESA', 'Mercy Kinyi', 'JOB', '2018-01-13', '2018-01-13 02:49:54', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `wallet_in`
--
ALTER TABLE `wallet_in`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Code` (`code`);

--
-- Indexes for table `wallet_out`
--
ALTER TABLE `wallet_out`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Transaction_Code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wallet_in`
--
ALTER TABLE `wallet_in`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `wallet_out`
--
ALTER TABLE `wallet_out`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
