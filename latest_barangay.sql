-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2024 at 04:49 PM
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
(20, 'certificate', 'sasa', 'sasa', '2024-11-15', 'sasasa', NULL, NULL, NULL, '2024-11-04', 0),
(21, 'Indigency', 'joemel piniones', 'Brgy. 143 Quezon Caloocan City', '2024-11-08', 'patuli', NULL, NULL, NULL, '2024-11-08', 0),
(22, 'Indigency', 'dsasd', 'sadsad', '2024-11-08', 'sadsadsa', NULL, NULL, NULL, '2024-11-08', 0),
(23, 'Indigency', 'vergel macayan', 'sads', '2024-11-08', 'adsadsa', NULL, NULL, NULL, '2024-11-08', 0),
(24, 'Clearance', 'asdsadsa', '', NULL, '', '0000-00-00', '', '', '2024-11-08', 0),
(25, 'Indigency', 'sadsad', '', '2024-11-08', '', NULL, NULL, NULL, '2024-11-08', 0),
(26, 'Clearance', 'sdads', '', NULL, '', '0000-00-00', '', '', '2024-11-08', 0),
(27, 'Clearance', 'sdads', '', NULL, '', '0000-00-00', '', '', '2024-11-08', 0),
(28, 'Clearance', 'sdas', '', NULL, '', '0000-00-00', '', '', '2024-11-08', 0),
(29, 'Clearance', 'fdsfsdf', '', NULL, '', '0000-00-00', '', '', '2024-11-08', 0),
(30, 'Clearance', 'sdsadsadsad', 'sadsad', NULL, 'sadasdsads', '2024-11-08', 'sdsad', 'sadsadsa', '2024-11-08', 0),
(31, 'Certificate', 'sdsfs', 'ds', '2024-11-08', '', NULL, NULL, NULL, '2024-11-08', 0);

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
(2, 'admin@gmail.com', 'ddd', '2024-11-03', '0000-00-00'),
(3, 'admin@gmail.com', 'test', '2024-11-03', '0000-00-00'),
(4, 'test@gmail.com', 'dd', '2024-11-03', '0000-00-00'),
(5, 'superadmin@gmail.com', 'BWUAHAHAHA', '2024-11-08', '0000-00-00'),
(6, 'sasa@gmail.com', 'sdcsac', '2024-11-08', '0000-00-00'),
(7, 'sasa@gmail.com', 'sacsacsa', '2024-11-08', '0000-00-00'),
(8, 'sasa@gmail.com', 'adasd', '2024-11-08', '0000-00-00'),
(9, 'sasa@gmail.com', 'sadsa', '2024-11-08', '0000-00-00'),
(10, 'sasa@gmail.com', 'sadsad', '2024-11-08', '0000-00-00'),
(11, 'sasa@gmail.com', 'dfdsf', '2024-11-08', '0000-00-00'),
(12, 'sasa@gmail.com', 'dfdsf', '2024-11-08', '0000-00-00'),
(13, 'sasa@gmail.com', 'dsfsdf', '2024-11-08', '0000-00-00'),
(14, 'sasa@gmail.com', 'dsfds', '2024-11-08', '0000-00-00'),
(15, 'sasa@gmail.com', 'dsfdsf', '2024-11-08', '0000-00-00'),
(16, 'sasa@gmail.com', 'adada', '2024-11-08', '0000-00-00'),
(17, 'sasa@gmail.com', 'wrwerwe', '2024-11-08', '0000-00-00'),
(18, 'sasa@gmail.com', 'werwe', '2024-11-08', '0000-00-00'),
(19, 'sasa@gmail.com', 'werwerwe', '2024-11-08', '0000-00-00'),
(20, 'sasa@gmail.com', 'ewrwerwe', '2024-11-08', '0000-00-00'),
(21, 'sasa@gmail.com', 'ewrwer', '2024-11-08', '0000-00-00'),
(22, 'sasa@gmail.com', 'erwerwer', '2024-11-08', '0000-00-00'),
(23, 'sasa@gmail.com', '34r34r34', '2024-11-08', '0000-00-00');

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
  `email` varchar(255) DEFAULT NULL,
  `spouse` varchar(255) DEFAULT NULL,
  `father` varchar(255) DEFAULT NULL,
  `mother` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `address_1` varchar(255) DEFAULT NULL,
  `date_registered` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resident_infos`
--

INSERT INTO `resident_infos` (`resident_id`, `lastname`, `firstname`, `middlename`, `alias`, `birthday`, `age`, `gender`, `civilstatus`, `voterstatus`, `birth_of_place`, `citizenship`, `telephone_no`, `mobile_no`, `height`, `weight`, `email`, `spouse`, `father`, `mother`, `area`, `address_1`, `date_registered`, `status`, `created_at`, `updated_at`) VALUES
(17, 'pretrr', 'fasdsadsad', 'fssss', 'wewessssssss', '2024-02-02', 67, 'Female', 'Single', '0', 'test', 'Filipino', '01sdsad', '1sadsa', '1sadsa', 'undefined', 'da@gmail.com', 'test', 'test', 'test', 'test', 'testaaa', '2024-02-12', 0, '2024-10-10 13:00:44', NULL),
(18, 'we', 'test', 'test', 'test', '2024-02-02', 12, 'Male', 'Divorced', '1', 'test', 'Filipino', '01', '23243243', '1sdadadsa', '1sadsadsa', 'test@gmail.com', 'test', 'sdsadsadaad', 'test', 'test', 'allan', '2024-10-17', 0, '2024-10-10 13:15:44', NULL),
(19, 'dsda', 'sadsad', 'sadsad', 'sdsa', '2024-11-08', 23, 'Male', 'Married', '1', 'aasdsa', 'Filipino', 'ewqeqw', 'qwewq', 'qweqwe', 'qweqw', 'carla.mendoza58@yahoo.com', 'e', 'eqwe', 'qweqw', 'eqwe', 'eqweqwe', NULL, 0, '2024-11-08 15:13:29', NULL),
(20, 'sadas', 'dasd', 'sadasd', 'asdsa', '2024-11-08', 34, 'Male', 'Divorced', '0', 'aasdsa', 'Filipino', 'fdsfds', 'fdsf', 'dffsd', '34324', 'xander.143004@gmail.com', 'dsfds', 'dsf', 'wewe', '32erwer', 'xcvcvcxvxcv', NULL, 0, '2024-11-08 15:14:32', NULL),
(21, 'asd', 'asdasdsa', 'dsad', 'sadsad', '2024-11-08', 324, 'Male', 'Single', '1', 'test', 'Filipino', 'dasd', 'sadsa', 'asdsad', 'sadsad', 'da@gmail.com', 'sadsa', 'dsad', 'sadas', 'sda', 'sad', NULL, 0, '2024-11-08 15:15:50', NULL),
(22, 'vergel', 'asa', 'asa', 'asa', '2024-11-08', 34, 'Male', 'Single', '0', 'aasdsa', 'Filipino', 'dsfds', 'dsf', 'fdf', 'dsfs', 'carla.mendoza58@yahoo.com', '123213', 'fds', 'fdsfds', 'dsf', 'sfdfsd', NULL, 0, '2024-11-08 15:18:14', NULL),
(23, 'macayan', 'vergel', 'ocado', 'pogi', '0000-00-00', 23, 'Male', 'Single', '1', 'tala', 'Filipino', 'sadsad', '23243243', '1sdadadsa', '1', 'jolesordonio21@gmail.com', 'sadasd', 'zcxzc', 'xzcx', 'xzcxzc', 'testaaa', NULL, 0, '2024-11-08 15:26:41', NULL),
(24, 'dsa', 'dsadas', 'dsa', 'dasda', '2024-11-01', 23, 'Male', 'Single', '1', 'test', 'Filipino', 'asdsa', 'dasd', 'sadsad', 'sadsa', 'jolesordonio21@gmail.com', 'dsa', 'sadsa', 'dsad', 'das', 'asd', NULL, 0, '2024-11-08 15:27:56', NULL),
(25, 'wqwq', 'wqwq', 'wqwq', 'wqwq', '2024-11-08', 21, 'Male', 'Single', '1', 'wqwq', 'Filipino', 'wqwq', 'wqwq', 'wqwq', 'wqwq', 'perdidoroderick@immaculada.edu.ph', 'wqwq', 'wqwq', 'wqwq', 'wqwq', 'wqwq', NULL, 0, '2024-11-08 15:29:23', NULL),
(26, 'efsef', 'efds', 'fsdfsd', 'fsf', '2024-11-09', 34, 'Male', 'Single', '1', 'test', 'Filipino', 'fdsfsdf', 'sdfds', 'dsfds', 'fdsf', 'da@gmail.com', 'sdfsf', 'fdsf', 'dfds', 'dsfdsfds', 'fsdf', NULL, 0, '2024-11-08 15:30:38', NULL),
(27, 'efsef', 'efds', 'fsdfsd', 'fsf', '2024-11-09', 34, 'Male', 'Single', '1', 'test', 'Filipino', 'fdsfsdf', 'sdfds', 'dsfds', 'fdsf', 'da@gmail.com', 'sdfsf', 'fdsf', 'dfds', 'dsfdsfds', 'fsdf', NULL, 0, '2024-11-08 15:30:52', NULL),
(28, 'rere', 'rere', 'erere', 'erere', '2024-11-08', 65, 'Male', 'Married', '0', 'test', 'Filipino', 'dfgdfg', 'gdfg', 'fgdf', 'gdfgdf', 'da@gmail.com', 'dfgdfg', 'dgdf', 'dfgf', 'gfdg', 'gdfgfdg', NULL, 0, '2024-11-08 15:33:54', NULL),
(29, 'rere', 'rere', 'erere', 'erere', '2024-11-08', 65, 'Male', 'Married', '0', 'test', 'Filipino', 'dfgdfg', 'gdfg', 'fgdf', 'gdfgdf', 'da@gmail.com', 'dfgdfg', 'dgdf', 'dfgf', 'gfdg', 'gdfgfdg', NULL, 0, '2024-11-08 15:33:55', NULL),
(30, 'rere', 'rere', 'erere', 'erere', '2024-11-08', 65, 'Male', 'Married', '0', 'test', 'Filipino', 'dfgdfg', 'gdfg', 'fgdf', 'gdfgdf', 'da@gmail.com', 'dfgdfg', 'dgdf', 'dfgf', 'gfdg', 'gdfgfdg', NULL, 0, '2024-11-08 15:33:56', NULL),
(31, 'rere', 'rere', 'rere', 'rere', '2024-11-15', 54, 'Male', 'Single', '0', 'test', 'Filipino', 'rerer', 'rere', '1', 'ere', 'da@gmail.com', 'erere', 'rer', 'rere', 're', 'testaaa', NULL, 0, '2024-11-08 15:35:01', NULL),
(32, 'eqw', 'weq', 'wqe', 'wqwe', '2024-11-08', 32, 'Male', 'Single', '1', 'qwe', 'Filipino', 'qwe', 'qwe', 'weq', 'qwe', 'jolesordonio21@gmail.com', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', NULL, 0, '2024-11-08 15:35:41', NULL),
(33, 'angelo', 'angelo', 'angelo', 'angelo', '2024-11-08', 33, 'Male', 'Single', '1', 'angelo', 'Filipino', 'angelo', 'angelo', 'angelo', 'angelo', 'da@gmail.com', 'angelo', 'angelo', 'angelo', 'angelo', 'angelo', NULL, 0, '2024-11-08 15:37:54', NULL);

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
(3, 'admin@gmail.com', '$2y$10$cL/yvHIL4ccLE/CIbycxvup82muWicweWn425b/a/kLhYUkAkmleC', 1, '2024-10-04 14:28:55', '0000-00-00 00:00:00'),
(4, 'staff@gmail.com', '$2y$10$uBrptAmrkF6Kqlon.mySG.8cCnawAfzPaNbUu89S1ANOuZzUCBG7i', 3, '2024-11-04 15:52:20', '0000-00-00 00:00:00'),
(5, 'sasa@gmail.com', '$2y$10$xe9/0VvT0p95Lx/Tbmgly.nmzrETYqr7lN/iv.Sna43pnt6YqxMES', 1, '2024-11-04 15:54:06', '0000-00-00 00:00:00'),
(6, 'kadusalejenalyn65@gmail.com', '$2y$10$WTQUv9hQnrdjzZQjowhFFeYKKFhj9cPe.XU.QQWmO1Cmn9SW7Fi26', 3, '2024-11-08 11:58:24', '0000-00-00 00:00:00');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resident_infos`
--
ALTER TABLE `resident_infos`
  MODIFY `resident_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
