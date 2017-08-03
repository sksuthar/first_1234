-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2017 at 03:41 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wi`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `school_details_id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `school_details_id`, `image_name`, `created_at`, `updated_at`) VALUES
(3, 2, 'resources/assets/images/gallery/44108922376622.jpg', '2017-07-30 15:03:19', '2017-07-30 09:33:19'),
(2, 2, 'resources/assets/images/gallery/10133129048013.jpg', '2017-07-30 14:58:57', '2017-07-30 09:28:57'),
(4, 2, 'resources/assets/images/gallery/15691413786020.jpg', '2017-07-30 15:03:40', '2017-07-30 09:33:40'),
(5, 2, 'resources/assets/images/gallery/35385632572992.jpg', '2017-07-30 15:04:04', '2017-07-30 09:34:04'),
(6, 2, 'resources/assets/images/gallery/19898413541842.jpg', '2017-07-30 15:05:14', '2017-07-30 09:35:14'),
(7, 2, 'resources/assets/images/gallery/25022784798570.jpg', '2017-07-30 15:05:45', '2017-07-30 09:35:45'),
(8, 2, 'resources/assets/images/gallery/32399299663542.jpg', '2017-07-30 15:08:18', '2017-07-30 09:38:18'),
(9, 2, 'resources/assets/images/gallery/42340261986000.jpg', '2017-07-30 15:15:30', '2017-07-30 09:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `registeradmin`
--

CREATE TABLE `registeradmin` (
  `id` int(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeradmin`
--

INSERT INTO `registeradmin` (`id`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'suresh@gmail.com', 0, '2017-07-28 00:00:00', '2017-07-28 08:59:56');

-- --------------------------------------------------------

--
-- Table structure for table `school_details`
--

CREATE TABLE `school_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `board` varchar(100) NOT NULL,
  `school_hash` varchar(150) NOT NULL,
  `school_flag` int(10) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `state` int(2) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `phone1` int(12) NOT NULL,
  `phone2` int(12) DEFAULT NULL,
  `phone3` int(12) NOT NULL,
  `website` varchar(50) NOT NULL,
  `school_email` varchar(50) NOT NULL,
  `school_logo` varchar(500) NOT NULL,
  `school_banner` varchar(500) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `full_status` int(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_details`
--

INSERT INTO `school_details` (`id`, `user_id`, `school_name`, `board`, `school_hash`, `school_flag`, `address1`, `address2`, `state`, `city`, `pincode`, `phone1`, `phone2`, `phone3`, `website`, `school_email`, `school_logo`, `school_banner`, `status`, `full_status`, `created_at`, `updated_at`) VALUES
(2, 2, 'Thakur Institute of Technology', 'Mumbai University', '$2y$10$lBJm52hqtOfvJrdlq7G0GeRf3Ll8D2En52yn6xE3V8x3Dox9jNBOi', 570805, 'Mumbai Dahisar', 'Expressway', 21, 'Mumbai', 6455555, 2147483647, 0, 0, '', '', 'resources/assets/images/33729337637080.jpg', 'resources/assets/images/16074958518660.jpg', 1, 1, '2017-07-29 17:46:20', '2017-07-29 12:16:20');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `state` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state`, `created_at`, `updated_at`) VALUES
(1, 'Andaman and Nicobar Islands', '2017-07-28 00:00:00', '2017-07-28 12:53:40'),
(2, 'Andhra Pradesh', '2017-07-28 00:00:00', '2017-07-28 12:53:40'),
(3, 'Arunachal Pradesh', '2017-07-28 00:00:00', '2017-07-28 12:54:08'),
(4, 'Assam', '2017-07-28 00:00:00', '2017-07-28 12:54:08'),
(5, 'Bihar', '2017-07-28 00:00:00', '2017-07-28 12:54:24'),
(6, 'Chandigarh', '2017-07-28 00:00:00', '2017-07-28 12:54:24'),
(7, 'Chhattisgarh', '2017-07-28 00:00:00', '2017-07-28 12:54:48'),
(8, 'Dadra and Nagar Haveli', '2017-07-28 00:00:00', '2017-07-28 12:54:48'),
(9, 'Daman and Diu', '2017-07-28 00:00:00', '2017-07-28 12:55:06'),
(10, 'Delhi', '2017-07-28 00:00:00', '2017-07-28 12:55:06'),
(11, 'Goa', '2017-07-28 00:00:00', '2017-07-28 12:55:21'),
(12, 'Gujarat', '2017-07-28 00:00:00', '2017-07-28 12:55:21'),
(13, 'Haryana', '2017-07-28 00:00:00', '2017-07-28 12:55:41'),
(14, 'Himachal Pradesh', '2017-07-28 00:00:00', '2017-07-28 12:55:41'),
(15, 'Jammu and Kashmir', '0000-00-00 00:00:00', '2017-07-28 12:55:59'),
(16, 'Jharkhand', '0000-00-00 00:00:00', '2017-07-28 12:55:59'),
(17, 'Karnataka', '0000-00-00 00:00:00', '2017-07-28 12:56:15'),
(18, 'Kerala', '0000-00-00 00:00:00', '2017-07-28 12:56:15'),
(19, 'Lakshadweep', '0000-00-00 00:00:00', '2017-07-28 12:56:25'),
(20, 'Madhya Pradesh', '0000-00-00 00:00:00', '2017-07-28 12:56:25'),
(21, 'Maharashtra', '0000-00-00 00:00:00', '2017-07-28 12:56:35'),
(22, 'Manipur', '0000-00-00 00:00:00', '2017-07-28 12:56:35'),
(23, 'Meghalaya', '0000-00-00 00:00:00', '2017-07-28 12:56:45'),
(24, 'Mizoram', '0000-00-00 00:00:00', '2017-07-28 12:56:45'),
(25, 'Nagaland', '0000-00-00 00:00:00', '2017-07-28 12:56:55'),
(26, 'Orissa', '0000-00-00 00:00:00', '2017-07-28 12:56:55'),
(27, 'Pondicherry', '0000-00-00 00:00:00', '2017-07-28 12:57:07'),
(28, 'Punjab', '0000-00-00 00:00:00', '2017-07-28 12:57:07'),
(29, 'Rajasthan', '0000-00-00 00:00:00', '2017-07-28 12:57:18'),
(30, 'Sikkim', '0000-00-00 00:00:00', '2017-07-28 12:57:18'),
(31, 'Tamil Nadu', '0000-00-00 00:00:00', '2017-07-28 12:57:30'),
(32, 'Tripura', '0000-00-00 00:00:00', '2017-07-28 12:57:30'),
(33, 'Uttaranchal', '0000-00-00 00:00:00', '2017-07-28 12:57:41'),
(34, 'Uttar Pradesh', '0000-00-00 00:00:00', '2017-07-28 12:57:41'),
(35, 'West Bengal', '0000-00-00 00:00:00', '2017-07-28 12:57:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_role` varchar(20) NOT NULL,
  `user_status` int(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `school_id`, `name`, `email`, `password`, `user_role`, `user_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 2, 'admin', 'suresh@gmail.com', '$2y$10$7cyrVlfhxaz6WEKg7aFcrOhAJbsPehG8G.S6YpsCWnQZLBn5bBX7G', 'adm0002', 0, 'Y7buaE2I8VES0Iw0lPR1S7TTj0veTyHH4bW0uA7Iaz3Q4d40AHRiQ8lPQsPj', '2017-07-29 17:38:33', '2017-07-29 17:58:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registeradmin`
--
ALTER TABLE `registeradmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_details`
--
ALTER TABLE `school_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
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
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `registeradmin`
--
ALTER TABLE `registeradmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `school_details`
--
ALTER TABLE `school_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
