-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2020 at 08:02 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacted_users`
--

CREATE TABLE `contacted_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacted_users`
--

INSERT INTO `contacted_users` (`id`, `first_name`, `last_name`, `email`, `mobile_no`, `created_at`, `updated_at`) VALUES
(1, 'John', 'David', 'john@gmail.com', '9874563210', '2020-09-06 22:41:10', '2020-09-06 22:41:10'),
(2, 'Mike', 'James', 'mjames@gmail.com', '9852364710', '2020-09-06 22:41:10', '2020-09-06 22:41:10'),
(3, 'Krish', 'Kumar', 'krish@gmail.com', '4569871230', '2020-09-06 22:42:19', '2020-09-06 22:42:19'),
(4, 'Rama', 'Krishna', 'ramakrishna@gmail.com', '9856321047', '2020-09-06 22:42:19', '2020-09-06 22:42:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `status` int(4) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `mobile_no`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Super', 'Admin', 'superAdmin@gmail.com', 'ceb6c970658f31504a901b89dcd3e461', '9632587410', 1, '2020-09-06 21:42:54', '2020-09-06 21:42:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacted_users`
--
ALTER TABLE `contacted_users`
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
-- AUTO_INCREMENT for table `contacted_users`
--
ALTER TABLE `contacted_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
