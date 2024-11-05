-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2024 at 03:52 AM
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
-- Table structure for table `blotters`
--

CREATE TABLE `blotters` (
  `blotter_id` bigint(20) UNSIGNED NOT NULL,
  `incident_type` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `schedule` varchar(255) DEFAULT NULL,
  `schedule_date` date DEFAULT NULL,
  `date_reported` date DEFAULT NULL,
  `time_reported` time DEFAULT NULL,
  `date_incident` date DEFAULT NULL,
  `time_incident` time DEFAULT NULL,
  `incident_location` varchar(255) DEFAULT NULL,
  `incident_narrative` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blotters`
--

INSERT INTO `blotters` (`blotter_id`, `incident_type`, `status`, `schedule`, `schedule_date`, `date_reported`, `time_reported`, `date_incident`, `time_incident`, `incident_location`, `incident_narrative`, `created_at`, `updated_at`) VALUES
(1, 'testrrr', 'Open', '2024-10-21', NULL, '2024-02-02', '12:00:00', '2024-02-02', '12:00:00', 'Tala', 'test', NULL, NULL),
(2, 'ghdddddd', 'Open', '2024-10-18', NULL, '2024-10-07', '20:54:00', '2024-10-01', '08:54:00', 'hjk', 'hgjk', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `certicate`
--

CREATE TABLE `certicate` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `placebirth` varchar(255) DEFAULT NULL,
  `findings` varchar(255) DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `certicate`
--

INSERT INTO `certicate` (`id`, `type`, `fullname`, `address`, `date`, `purpose`, `birthdate`, `placebirth`, `findings`, `created_at`, `updated_at`) VALUES
(12, 'Indigency', 'IUYTR', 'FAS', '2024-11-23', 'D', NULL, '', '', '2024-11-03', 0),
(13, 'Indigency', 'd', 'd', '2024-10-30', 'd', NULL, '', '', '2024-11-03', 0),
(14, 'Indigency', 'd', 'd', '2024-10-30', 'd', NULL, '', '', '2024-11-03', 0),
(15, 'Indigency', 'uuiui', 'uuu', '2024-11-01', 'uii', NULL, '', '', '2024-11-03', 0),
(16, 'Barangay', 'd', 'd', '2024-11-09', 'd', NULL, '', '', '2024-11-03', 0),
(17, 'Barangay', 'dadas', 'dsada', '2024-11-07', 'dasda', NULL, '', '', '2024-11-04', 0),
(18, 'test', 'test', NULL, NULL, 'd', '2024-02-02', 'Qc', 'test', '2024-11-04', 0),
(19, 'Clearance', 'DD', 'D', NULL, 'DDD', '2024-10-31', 'DDD', 'DDD', '2024-11-04', 0),
(20, 'Indigency', 'dfsdfsd', 'dsfsdf', '2024-11-20', 'dsfsdf', NULL, NULL, NULL, '2024-11-05', 0),
(21, 'Indigency', 'sdfsdf', 'dsfsdf', '2024-11-14', 'dfsdf', NULL, NULL, NULL, '2024-11-05', 0),
(22, 'Indigency', 'wewe', 'dsfsdf', '2024-11-14', 'dfsdf', NULL, NULL, NULL, '2024-11-05', 0),
(23, 'Clearance', 'sdsad', 'sadsa', NULL, 'asdsadas', '2024-11-15', 'sadsad', 'sadsad', '2024-11-05', 0),
(24, 'certificate', 'dsdfsdf', 'sdfsd', '2024-11-20', 'fdsfsd', NULL, NULL, NULL, '2024-11-05', 0),
(25, 'Clearance', 'rtyrtytry', 'ytyrtyry', NULL, 'yrtyrtyrt', '2024-11-06', 'tyrtyrytry', 'rtyrtytr', '2024-11-05', 0),
(26, 'Certificate', 'ryrtyrtyry', 'tyrty', '2024-11-05', 'rtyrtytr', NULL, NULL, NULL, '2024-11-05', 0),
(27, 'Indigency', 'Juan Dele Cruz', '185 Zone 16 District 3, Malaria, City of Caloocan', '2024-11-05', 'Financial', NULL, NULL, NULL, '2024-11-05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `email`, `note`, `created_at`, `updated_at`) VALUES
(1, 'test@gmail.com', 'test', '2024-10-22', '0000-00-00'),
(2, 'admin@gmail.com', 'dddsadsadsa', '2024-11-03', '0000-00-00'),
(4, 'test@gmail.com', 'dd', '2024-11-03', '0000-00-00'),
(17, 'staff@gmail.com', 'staff note sample 1', '2024-11-05', '0000-00-00'),
(18, 'staff@gmail.com', 'staff note sample 2 edit', '2024-11-05', '0000-00-00'),
(19, 'staff@gmail.com', 'staff note sample 3', '2024-11-05', '0000-00-00'),
(20, 'staff@gmail.com', 'staff note sample 4', '2024-11-05', '0000-00-00'),
(21, 'staff@gmail.com', 'staff note sample 5 update', '2024-11-05', '0000-00-00'),
(22, 'superadmin@gmail.com', 'supera admin note sample 1', '2024-11-05', '0000-00-00'),
(25, 'staff@gmail.com', 'staff note sample 6', '2024-11-05', '0000-00-00');

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
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resident_infos`
--

INSERT INTO `resident_infos` (`resident_id`, `lastname`, `firstname`, `middlename`, `alias`, `birthday`, `age`, `gender`, `civilstatus`, `voterstatus`, `birth_of_place`, `citizenship`, `telephone_no`, `mobile_no`, `height`, `weight`, `PAG_IBIG`, `PHILHEALTH`, `SSS`, `TIN`, `email`, `spouse`, `father`, `mother`, `area`, `address_1`, `address_2`, `date_registered`, `status`, `created_at`, `updated_at`) VALUES
(17, 'pretrr', 'f', 'f', 'f', '2024-02-02', 12, 'Female', 'Single', '1', 'test', 'Filipino', '01', '1', '1', 'undefined', 'test', 'test', 'test', 'test', 'da@gmail.com', 'test', 'test', 'test', 'test', 'test', 'test', '2024-02-12', 0, '2024-10-10 13:00:44', NULL),
(18, 'we', 'test', 'test', 'test', '2024-02-02', 12, 'female', 'test', 'test', 'test', 'test', '01', '1', '1', '1', 'test', 'test', 'test', 'test', 'test@gmail.com', 'test', 'test', 'test', 'test', 'test', 'test', '2024-10-17', 0, '2024-10-10 13:15:44', NULL);

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
-- Table structure for table `settlement`
--

CREATE TABLE `settlement` (
  `id` int(11) NOT NULL,
  `case_number` int(11) NOT NULL,
  `date_of_filling` date NOT NULL,
  `type_of_case` varchar(255) NOT NULL,
  `details` varchar(500) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `respondent_relationship` int(11) NOT NULL,
  `date_mediation` date NOT NULL,
  `lupon_member1` varchar(255) NOT NULL,
  `lupon_member2` varchar(255) NOT NULL,
  `lupon_member3` int(255) NOT NULL,
  `summary` varchar(1000) NOT NULL,
  `term_settlement` varchar(500) NOT NULL,
  `date_settlement` date NOT NULL,
  `signature_file1` varchar(255) NOT NULL,
  `signature_file2` varchar(255) NOT NULL,
  `signature_file3` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settlement`
--

INSERT INTO `settlement` (`id`, `case_number`, `date_of_filling`, `type_of_case`, `details`, `name`, `contact`, `respondent_relationship`, `date_mediation`, `lupon_member1`, `lupon_member2`, `lupon_member3`, `summary`, `term_settlement`, `date_settlement`, `signature_file1`, `signature_file2`, `signature_file3`, `created_at`, `updated_at`) VALUES
(1, 7898, '2024-02-02', 'hjk', 'hj', 'jkm', 9456132, 0, '2024-02-02', 'hbn', 'dcs', 0, 'fds', 'fds20', '2024-02-03', 'file-sample_150kB.pdf', 'file-sample_150kB.pdf', 'file-sample_150kB.pdf', '2024-10-17 09:40:28', 0),
(2, 89465, '2024-02-02', 'hjk', 'hj', 'jkm', 9456132, 0, '2024-02-02', 'hbn', 'dcs', 0, 'fds', 'fds20', '2024-02-03', 'file-sample_150kB.pdf', 'file-sample_150kB.pdf', 'file-sample_150kB.pdf', '2024-10-17 09:57:37', 0);

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
(1, 'testuser', 'testpassword', 3, '2024-09-19 20:49:42', '2024-09-19 14:49:29'),
(2, 'test@gmail.com', '$2y$10$cIih1g2fMZijaDAsVbENfOldxEaNhCGKFxxsWp8suD3/MnOVt9M5q', 2, '2024-09-19 15:14:31', '0000-00-00 00:00:00'),
(3, 'admin@gmail.com', '$2y$10$cL/yvHIL4ccLE/CIbycxvup82muWicweWn425b/a/kLhYUkAkmleC', 2, '2024-10-04 14:28:55', '0000-00-00 00:00:00'),
(4, 'staff@gmail.com', '$2y$10$uBrptAmrkF6Kqlon.mySG.8cCnawAfzPaNbUu89S1ANOuZzUCBG7i', 3, '2024-11-04 15:52:20', '0000-00-00 00:00:00'),
(5, 'superadmin@gmail.com', '$2y$10$ZBASVqp6MY7nszmWRJMXqugrj86qmMP.OUnLsHizcgFIbjCFFTav2', 1, '2024-11-04 15:54:06', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blotters`
--
ALTER TABLE `blotters`
  ADD PRIMARY KEY (`blotter_id`);

--
-- Indexes for table `certicate`
--
ALTER TABLE `certicate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `settlement`
--
ALTER TABLE `settlement`
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
-- AUTO_INCREMENT for table `blotters`
--
ALTER TABLE `blotters`
  MODIFY `blotter_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `certicate`
--
ALTER TABLE `certicate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resident_infos`
--
ALTER TABLE `resident_infos`
  MODIFY `resident_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settlement`
--
ALTER TABLE `settlement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
