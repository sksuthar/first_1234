-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2017 at 04:43 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bizz`
--

-- --------------------------------------------------------

--
-- Table structure for table `caste_category`
--

CREATE TABLE `caste_category` (
  `id` int(11) NOT NULL,
  `caste_category` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caste_category`
--

INSERT INTO `caste_category` (`id`, `caste_category`, `created_at`, `updated_at`) VALUES
(1, 'OBC', '2017-07-14 10:26:13', '2017-07-14 14:05:35'),
(2, 'SC', '2017-07-14 10:26:13', '2017-07-14 14:05:35'),
(3, 'ST', '2017-07-14 10:26:13', '2017-07-14 14:05:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caste_category`
--
ALTER TABLE `caste_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caste_category`
--
ALTER TABLE `caste_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
