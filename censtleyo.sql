-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 05, 2019 at 08:39 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `censtleyo`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `body` text,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `created_at`, `body`, `updated_at`) VALUES
(1, 1, 1, '2019-08-04 14:50:39', 'dghhhhhhhhhhh', NULL),
(2, 1, 1, '2019-08-04 14:50:41', 'dghhhhhhhhhhh', NULL),
(3, 1, 1, '2019-08-04 14:50:41', 'dghhhhhhhhhhh', NULL),
(4, 1, 1, '2019-08-04 14:50:42', 'dghhhhhhhhhhh', NULL),
(5, 1, 1, '2019-08-04 14:50:42', 'dghhhhhhhhhhh', NULL),
(6, 1, 1, '2019-08-04 14:50:42', 'dghhhhhhhhhhh', NULL),
(7, 1, 1, '2019-08-04 14:50:42', 'dghhhhhhhhhhh', NULL),
(8, 1, 1, '2019-08-04 14:50:42', 'dghhhhhhhhhhh', NULL),
(9, 1, 1, '2019-08-04 14:50:42', 'dghhhhhhhhhhh', NULL),
(10, 1, 1, '2019-08-04 14:50:43', 'dghhhhhhhhhhh', NULL),
(11, 1, 1, '2019-08-04 14:50:43', 'dghhhhhhhhhhh', NULL),
(12, 1, 1, '2019-08-04 14:50:43', 'dghhhhhhhhhhh', NULL),
(13, 1, 1, '2019-08-04 14:50:43', 'dghhhhhhhhhhh', NULL),
(14, 1, 1, '2019-08-04 14:50:44', 'dghhhhhhhhhhh', NULL),
(15, 1, 1, '2019-08-04 14:50:44', 'dghhhhhhhhhhh', NULL),
(16, 1, 1, '2019-08-04 14:50:44', 'dghhhhhhhhhhh', NULL),
(17, 1, 1, '2019-08-04 15:11:23', 'i love jesus', NULL),
(18, 1, 1, '2019-08-04 15:11:23', 'i love jesus', NULL),
(19, 1, 1, '2019-08-04 15:11:23', 'i love jesus', NULL),
(20, 1, 1, '2019-08-04 15:11:23', 'i love jesus', NULL),
(21, 1, 1, '2019-08-04 15:11:23', 'i love jesus', NULL),
(22, 1, 1, '2019-08-04 15:11:24', 'i love jesus', NULL),
(23, 1, 1, '2019-08-04 15:11:24', 'i love jesus', NULL),
(24, 1, 1, '2019-08-04 15:11:24', 'i love jesus', NULL),
(25, 1, 1, '2019-08-04 15:11:24', 'i love jesus', NULL),
(26, 1, 1, '2019-08-04 15:11:25', 'i love jesus', NULL),
(27, 1, 1, '2019-08-04 15:12:09', 'i hate u', NULL),
(28, 1, 1, '2019-08-04 15:12:33', 'i hate u', NULL),
(29, 1, 1, '2019-08-04 15:12:33', 'i hate u', NULL),
(30, 1, 1, '2019-08-04 15:12:33', 'i hate u', NULL),
(31, 1, 1, '2019-08-04 15:12:33', 'i hate u', NULL),
(32, 1, 1, '2019-08-04 15:12:33', 'i hate u', NULL),
(33, 1, 1, '2019-08-04 15:12:34', 'i hate u', NULL),
(34, 1, 1, '2019-08-04 15:12:34', 'i hate u', NULL),
(35, 1, 1, '2019-08-04 15:12:34', 'i hate u', NULL),
(36, 1, 1, '2019-08-04 15:12:34', 'i hate u', NULL),
(37, 1, 1, '2019-08-04 15:13:14', 'i hate u', NULL),
(38, 1, 1, '2019-08-04 15:13:15', 'i hate u', NULL),
(39, 1, 1, '2019-08-04 15:13:15', 'i hate u', NULL),
(40, 1, 1, '2019-08-04 15:13:15', 'i hate u', NULL),
(41, 1, 1, '2019-08-04 15:13:16', 'i hate u', NULL),
(42, 1, 1, '2019-08-04 15:13:16', 'i hate u', NULL),
(43, 1, 1, '2019-08-04 15:23:45', 'i hate u', NULL),
(44, 1, 1, '2019-08-04 15:25:21', 'i hate u', NULL),
(45, 1, 1, '2019-08-04 15:25:21', 'i hate u', NULL),
(46, 1, 1, '2019-08-04 15:25:21', 'i hate u', NULL),
(47, 1, 1, '2019-08-04 15:25:21', 'i hate u', NULL),
(48, 1, 1, '2019-08-04 15:25:21', 'i hate u', NULL),
(49, 1, 1, '2019-08-04 15:25:22', 'i hate u', NULL),
(50, 1, 1, '2019-08-04 15:25:22', 'i hate u', NULL),
(51, 1, 1, '2019-08-04 15:25:23', 'i hate u', NULL),
(52, 1, 1, '2019-08-04 15:25:25', 'i hate u', NULL),
(53, 1, 1, '2019-08-04 15:25:26', 'i hate u', NULL),
(54, 1, 1, '2019-08-04 15:25:27', 'i hate u', NULL),
(55, 1, 1, '2019-08-04 15:25:27', 'i hate u', NULL),
(56, 1, 1, '2019-08-04 15:25:27', 'i hate u', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `body` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) DEFAULT NULL,
  `lastname` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `user_type` varchar(200) DEFAULT NULL,
  `occupation` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `phonenumber` varchar(200) DEFAULT NULL,
  `dateo_birth` varchar(200) DEFAULT NULL,
  `gender` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `password`, `user_type`, `occupation`, `address`, `phonenumber`, `dateo_birth`, `gender`, `email`, `image`, `created_at`) VALUES
(33, 'Nnamdi', 'Nwabuike', 'e10adc3949ba59abbe56e057f20f883e', 'user', 'trader', 'No 6 ichie Aguiyi lane Nkpor-Agu, Apartment', '8163778265', '2019-08-17', 'Male', 'maximustochukwu@gmail.com', '../images/uploads/IMG-20190722-WA0002.jpg', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`,`user_id`,`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`,`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
