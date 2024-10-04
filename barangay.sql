-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2024 at 03:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barangay`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer`, `created_at`) VALUES
(1, 'question', 'answer', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `resident_infos`
--

CREATE TABLE `resident_infos` (
  `resident_id` bigint(20) UNSIGNED NOT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `age` bigint(20) UNSIGNED DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `civilstatus` varchar(255) DEFAULT NULL,
  `voterstatus` varchar(255) DEFAULT NULL,
  `birth_of_place` varchar(255) DEFAULT NULL,
  `citizenship` varchar(255) DEFAULT NULL,
  `telephone_no` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `PAG_IBIG` varchar(255) DEFAULT NULL,
  `PHILHEALTH` varchar(255) DEFAULT NULL,
  `SSS` varchar(255) DEFAULT NULL,
  `TIN` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `spouse` varchar(255) DEFAULT NULL,
  `father` varchar(255) DEFAULT NULL,
  `mother` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `address_1` varchar(255) DEFAULT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `date_registered` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resident_infos`
--

INSERT INTO `resident_infos` (`resident_id`, `lastname`, `firstname`, `middlename`, `alias`, `birthday`, `age`, `gender`, `civilstatus`, `voterstatus`, `birth_of_place`, `citizenship`, `telephone_no`, `mobile_no`, `height`, `weight`, `PAG_IBIG`, `PHILHEALTH`, `SSS`, `TIN`, `email`, `spouse`, `father`, `mother`, `area`, `address_1`, `address_2`, `date_registered`, `created_at`, `updated_at`) VALUES
(2, 'test', 'test', 'test', 'test', '0000-00-00', 12, 'female', 'test', 'test', 'test', 'test', '01', '1', '1', '1', 'test', 'test', 'test', 'test', 'test@gmail.com', 'test', 'test', 'test', 'test', 'test', 'test', '2024-02-12', '2024-10-15 13:54:00', NULL),
(3, 'test', 'test', 'test', 'test', '2024-02-02', 12, 'male', 'test', 'test', 'test', 'test', '01', '1', '1', '1', 'test', 'test', 'test', 'test', 'test@gmail.com', 'test', 'test', 'test', 'test', 'test', 'test', '2024-02-12', '2024-10-16 13:53:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(120) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2024-09-19 15:31:38', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'testuser', 'testpassword', 2, '2024-09-19 20:49:42', '2024-09-19 14:49:29'),
(2, 'test@gmail.com', '$2y$10$cIih1g2fMZijaDAsVbENfOldxEaNhCGKFxxsWp8suD3/MnOVt9M5q', 2, '2024-09-19 15:14:31', '0000-00-00 00:00:00'),
(3, 'admin@gmail.com', '$2y$10$cL/yvHIL4ccLE/CIbycxvup82muWicweWn425b/a/kLhYUkAkmleC', 2, '2024-10-04 14:28:55', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_infos`
--
ALTER TABLE `resident_infos`
  ADD PRIMARY KEY (`resident_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resident_infos`
--
ALTER TABLE `resident_infos`
  MODIFY `resident_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
