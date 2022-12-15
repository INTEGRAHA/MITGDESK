-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 04:27 AM
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
-- Database: `mitgdesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_company`
--

CREATE TABLE `t_company` (
  `t_company_id` varchar(200) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `company_phone` varchar(100) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `company_website` varchar(100) NOT NULL,
  `company_address` text NOT NULL,
  `company_type` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_contact`
--

CREATE TABLE `t_contact` (
  `t_contact_id` varchar(200) NOT NULL,
  `t_company_id` varchar(200) NOT NULL,
  `contact_type` smallint(10) NOT NULL,
  `contact_name` varchar(200) NOT NULL,
  `contact_phone` varchar(100) NOT NULL,
  `contact_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_ticket`
--

CREATE TABLE `t_ticket` (
  `t_ticket_id` varchar(200) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `type` smallint(10) NOT NULL,
  `source` smallint(10) NOT NULL,
  `status` smallint(10) NOT NULL,
  `priority` smallint(10) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_users`
--

CREATE TABLE `t_users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(32) NOT NULL DEFAULT 'No Name',
  `user_password` varchar(64) DEFAULT NULL,
  `user_email` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_users`
--
ALTER TABLE `t_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
