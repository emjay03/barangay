-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2025 at 02:35 PM
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
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `details`, `date`, `created_at`, `updated_at`) VALUES
(2, 'Announcement Example', 'szfvzsdbhfxcmjgvk,mbh,bj,bj,bj,bj,b', '2025-02-14 13:22:11', '2025-02-14 13:22:11', '2025-02-15 09:30:51'),
(3, 'dsfsdfvsdvsdvsdv', 'sdfsdfdsgsdgtfghtfhsdfdfsd', '2025-02-14 13:22:27', '2025-02-14 13:22:27', '2025-02-14 14:01:41'),
(5, 'fsdf', 'sdfsdf', '2025-02-14 13:53:56', '2025-02-14 13:53:56', '2025-02-14 13:53:56'),
(6, 'fsdf', 'sdfsd', '2025-02-14 13:54:05', '2025-02-14 13:54:05', '2025-02-14 13:54:05'),
(7, 'sdfsd', 'fsdf', '2025-02-14 13:54:09', '2025-02-14 13:54:09', '2025-02-14 13:54:09'),
(8, 'dfsd', 'fsdffsfsdf', '2025-02-14 13:54:13', '2025-02-14 13:54:13', '2025-02-14 14:01:13'),
(9, 'fsdf', 'sdfsdf', '2025-02-14 13:54:16', '2025-02-14 13:54:16', '2025-02-14 13:54:16'),
(10, 'sdfsd', 'fsdf', '2025-02-14 13:54:19', '2025-02-14 13:54:19', '2025-02-14 13:54:19'),
(11, 'dfvdfv', 'dfvdf', '2025-02-14 14:06:05', '2025-02-14 14:06:05', '2025-02-14 14:06:05'),
(12, 'dfvdfv', 'dfvdf', '2025-02-14 14:06:14', '2025-02-14 14:06:14', '2025-02-14 14:06:14'),
(13, 'vdfvdf', 'vdfv', '2025-02-14 14:06:21', '2025-02-14 14:06:21', '2025-02-14 14:06:21');

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
(2, 'ghdddddd', 'Open', '2024-10-18', NULL, '2024-10-07', '20:54:00', '2024-10-01', '08:54:00', 'hjk', 'hgjk', NULL, NULL),
(3, 'sasa', 'Open', '2024-11-09', NULL, '2024-11-09', '10:19:00', '2024-11-09', '22:19:00', 'dsfsdfd', 'dsadsadsadsa', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blotterss`
--

CREATE TABLE `blotterss` (
  `id` int(11) NOT NULL,
  `BlotterID` varchar(255) NOT NULL,
  `ComplaintType` varchar(255) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `ReportedBy` varchar(255) NOT NULL,
  `AssignedTo` varchar(255) NOT NULL,
  `ComplainantName` varchar(255) NOT NULL,
  `RespondentName` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `ActionTaken` varchar(255) NOT NULL,
  `DateReported` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blotterss`
--

INSERT INTO `blotterss` (`id`, `BlotterID`, `ComplaintType`, `Description`, `ReportedBy`, `AssignedTo`, `ComplainantName`, `RespondentName`, `Status`, `ActionTaken`, `DateReported`) VALUES
(6, '277948', 'Violence', 'lorem', 'lorem', 'lorem', '', '', 'open', 'loren', '2024-11-09 09:27:50'),
(7, '217079', 'Violence', 'ewan ko', 'lorem', 'lorem', 'dsad', 'dasdsa', 'Open', 'loren', '2024-11-09 09:27:52'),
(8, '446228', 'Violence', 'lorem', 'lorem', 'lorem', '', '', 'open', 'loren', '2024-11-09 09:27:54'),
(9, '922431', 'Violence', 'lorem', 'lorem', 'lorem', '', '', 'open', 'loren', '2024-11-09 09:31:09'),
(10, '589454', 'Violence', 'lorem', 'lorem', 'lorem', '', '', 'pending', 'loren', '2024-11-09 09:35:43'),
(11, '987239', 'Violence', 'lorem', 'lorem', 'lorem', 'dfsdfsdf', 'dsfdsfsd', 'Open', 'loren', '2024-11-09 09:36:41'),
(12, '400086', 'Violence', 'lorem', 'lorem', 'lorem', '', '', 'pending', 'loren', '2024-11-09 09:37:35'),
(13, '535940', 'Violence', 'loresadsadsam', 'lorem', 'lorem', 'lorem', 'lreom', 'Open', 'loren', '2024-11-09 09:41:44'),
(14, '743817', 'Violence', 'lorem', 'lorem', 'lorem', 'lorem', 'lreom', 'pending', 'loren', '2024-11-09 09:42:39'),
(15, '697704', 'wadawdsad', 'sadsad', 'asdas', 'sadsa', 'dsada', 'sadsa', 'Open', 'sadas', '2024-11-09 10:35:58'),
(16, '222378', 'dsfdsf', 'dsfdsf', 'fsdfsd', 'sdfd', 'sdfsdf', 'fsdf', 'Open', 'sdfds', '2024-11-09 10:36:18'),
(17, '650112', 'sadsadsa', 'dasdsa', 'dasdsa', 'dasdas', 'asdas', 'sdasd', 'Open', 'sada', '2024-11-09 10:40:18'),
(18, '824306', 'sadsad', 'asdsa', 'sadsad', 'dsad', 'dsad', 'adas', 'Open', 'asd', '2024-11-09 10:40:53'),
(19, '637711', 'sadsad', 'asdsa', 'sadsad', 'dsad', 'dsad', 'adas', 'Open', 'asd', '2024-11-09 10:41:05'),
(20, '458674', 'sadas', 'dsadsad', 'asdsa', 'asd', 'dasd', 'dsa', 'Open', 'sadsa', '2024-11-09 10:41:13'),
(21, '908033', 'sadsa', 'dsad', 'sadasd', 'dasd', 'dsad', 'sadas', 'Open', 'dsadas', '2024-11-09 10:41:32');

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
(31, 'Certificate', 'sdsfs', 'ds', '2024-11-08', '', NULL, NULL, NULL, '2024-11-08', 0),
(32, 'Indigency', 'sadasdsad', 'sadsadas', '2025-02-15', 'dsadsad', NULL, NULL, NULL, '2025-02-15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `emergency_contact`
--

CREATE TABLE `emergency_contact` (
  `emergency_contact_id` int(11) NOT NULL,
  `resident_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `suffix` varchar(50) DEFAULT NULL,
  `relationship` varchar(100) DEFAULT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `registered_voter` enum('Voter','Non-Voter') DEFAULT NULL,
  `religion` varchar(100) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `civil_status` enum('Single','Married','Widowed','Divorced') DEFAULT NULL,
  `birth_of_place` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `sex` enum('Male','Female','Other') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `missiontbl`
--

CREATE TABLE `missiontbl` (
  `id` int(11) NOT NULL,
  `mission` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `missiontbl`
--

INSERT INTO `missiontbl` (`id`, `mission`) VALUES
(1, 'fasfasfasfasfsadfsafasfsfsdfsdgfdgdfgdfgdg');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `note` varchar(1000) NOT NULL,
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
(23, 'sasa@gmail.com', '34r34r34', '2024-11-08', '0000-00-00'),
(25, 'superadmin@gmail.com', 'sdsa', '2025-02-14', '0000-00-00'),
(26, 'superadmin@gmail.com', 'sdsad', '2025-02-14', '0000-00-00');

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
-- Table structure for table `relative_info`
--

CREATE TABLE `relative_info` (
  `relative_id` int(11) NOT NULL,
  `resident_id` int(11) DEFAULT NULL,
  `father_firstname` varchar(255) DEFAULT NULL,
  `father_middlename` varchar(255) DEFAULT NULL,
  `father_lastname` varchar(255) DEFAULT NULL,
  `father_suffix` varchar(50) DEFAULT NULL,
  `father_status` enum('Active','Deceased') DEFAULT NULL,
  `father_birthday` date DEFAULT NULL,
  `father_place_of_birth` varchar(255) DEFAULT NULL,
  `father_age` int(11) DEFAULT NULL,
  `father_gender` enum('Male','Female','Other') DEFAULT NULL,
  `father_civil_status` enum('Single','Married','Widowed','Divorced') DEFAULT NULL,
  `father_religion` varchar(100) DEFAULT NULL,
  `father_occupation` varchar(100) DEFAULT NULL,
  `father_contact_number` varchar(20) DEFAULT NULL,
  `father_registered_voter` enum('Voter','Non-Voter') DEFAULT NULL,
  `mother_firstname` varchar(255) DEFAULT NULL,
  `mother_middlename` varchar(255) DEFAULT NULL,
  `mother_lastname` varchar(255) DEFAULT NULL,
  `mother_suffix` varchar(50) DEFAULT NULL,
  `mother_status` enum('Active','Deceased') DEFAULT NULL,
  `mother_birthday` date DEFAULT NULL,
  `mother_place_of_birth` varchar(255) DEFAULT NULL,
  `mother_age` int(11) DEFAULT NULL,
  `mother_gender` enum('Male','Female','Other') DEFAULT NULL,
  `mother_civil_status` enum('Single','Married','Widowed','Divorced') DEFAULT NULL,
  `mother_religion` varchar(100) DEFAULT NULL,
  `mother_occupation` varchar(100) DEFAULT NULL,
  `mother_contact_number` varchar(20) DEFAULT NULL,
  `mother_registered_voter` enum('Voter','Non-Voter') DEFAULT NULL,
  `barangayid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resident_infos`
--

CREATE TABLE `resident_infos` (
  `resident_id` int(11) NOT NULL,
  `barangayid` varchar(25) DEFAULT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `suffix` varchar(50) DEFAULT NULL,
  `lifestatus` varchar(50) DEFAULT NULL,
  `pwd` enum('Yes','No') NOT NULL,
  `birthday` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Other') DEFAULT NULL,
  `civilstatus` enum('Single','Married','Divorced','Widowed') DEFAULT NULL,
  `religion` enum('ROMAN CATHOLIC','INC','JEHOVA','PREFER NOT TO SAY','UNKOWN') DEFAULT NULL,
  `voterstatus` enum('Voter','Non-Voter') DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `birth_of_place` varchar(255) DEFAULT NULL,
  `citizenship` varchar(100) DEFAULT NULL,
  `telephone_no` varchar(20) DEFAULT NULL,
  `mobile_no` varchar(20) DEFAULT NULL,
  `height` decimal(5,2) DEFAULT NULL,
  `weight` decimal(5,2) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `spouse` varchar(255) DEFAULT NULL,
  `father` varchar(255) DEFAULT NULL,
  `mother` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `building_house_number` varchar(50) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `purok` varchar(100) DEFAULT NULL,
  `subdivision` varchar(255) DEFAULT NULL,
  `barangay` varchar(255) DEFAULT NULL,
  `zone` varchar(50) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `municipality` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `date_registered` date DEFAULT NULL,
  `status` enum('Active','Inactive') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resident_infos`
--

INSERT INTO `resident_infos` (`resident_id`, `barangayid`, `lastname`, `firstname`, `middlename`, `suffix`, `lifestatus`, `pwd`, `birthday`, `age`, `gender`, `civilstatus`, `religion`, `voterstatus`, `occupation`, `birth_of_place`, `citizenship`, `telephone_no`, `mobile_no`, `height`, `weight`, `email`, `spouse`, `father`, `mother`, `area`, `building_house_number`, `street`, `purok`, `subdivision`, `barangay`, `zone`, `district`, `municipality`, `region`, `date_registered`, `status`, `created_at`, `updated_at`) VALUES
(1, '2025-1234', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', 'Yes', '0000-00-00', 0, 'Male', 'Single', '', 'Voter', '[value-14]', '[value-15]', '[value-16]', '[value-17]', '[value-18]', 0.00, 0.00, '[value-21]', '[value-22]', '[value-23]', '[value-24]', '[value-25]', '[value-26]', '[value-27]', '[value-28]', '[value-29]', '[value-30]', '[value-31]', '[value-32]', '[value-33]', '[value-34]', '0000-00-00', '', '0000-00-00 00:00:00', '2025-02-16 03:01:41'),
(2, '2025-1235', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', 'Yes', '0000-00-00', 0, '', '', '', '', '[value-14]', '[value-15]', '[value-16]', '[value-17]', '[value-18]', 0.00, 0.00, '[value-21]', '[value-22]', '[value-23]', '[value-24]', '[value-25]', '[value-26]', '[value-27]', '[value-28]', '[value-29]', '[value-30]', '[value-31]', '[value-32]', '[value-33]', '[value-34]', '0000-00-00', '', '0000-00-00 00:00:00', '2025-02-16 03:00:58');

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
  `BlotterID` varchar(255) NOT NULL,
  `date_of_filling` datetime NOT NULL DEFAULT current_timestamp(),
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
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settlement`
--

INSERT INTO `settlement` (`id`, `case_number`, `BlotterID`, `date_of_filling`, `type_of_case`, `details`, `name`, `contact`, `respondent_relationship`, `date_mediation`, `lupon_member1`, `lupon_member2`, `lupon_member3`, `summary`, `term_settlement`, `date_settlement`, `signature_file1`, `signature_file2`, `signature_file3`, `status`, `created_at`, `updated_at`) VALUES
(8, 995070, '446228', '2024-11-09 09:27:54', '', '', '', 0, 0, '0000-00-00', '', '', 0, '', '', '0000-00-00', '', '', '', 'Scheduled', '2024-11-09 09:27:54', 0),
(9, 574175, '922431', '2024-11-09 09:31:09', '', '', '', 0, 0, '0000-00-00', '', '', 0, '', '', '0000-00-00', '', '', '', 'Settled', '2024-11-09 09:31:09', 0),
(10, 440820, '987239', '2024-11-09 09:36:41', 'Violence', '', '', 0, 0, '0000-00-00', '', '', 0, '', '', '0000-00-00', '', '', '', 'Unscheduled', '2024-11-09 09:36:41', 0),
(11, 390197, '400086', '2024-11-09 09:37:35', 'Violence', 'lorem', '', 0, 0, '0000-00-00', '', '', 0, '', '', '0000-00-00', '', '', '', 'Scheduled', '2024-11-09 09:37:35', 0),
(12, 503036, '535940', '2024-11-09 09:41:44', 'Violence', 'lorem', '', 0, 0, '0000-00-00', '', '', 0, '', '', '0000-00-00', '', '', '', 'Unscheduled', '2024-11-09 09:41:44', 0),
(13, 581082, '743817', '2024-11-09 09:42:39', 'Violence', '', '', 9876, 0, '0000-00-00', 'don', 'dan', 0, '', 'test', '2024-11-08', 'image 35.png', 'image 35.png', 'image 35.png', 'Settled', '2024-11-09 09:42:39', 0),
(14, 748176, '697704', '2024-11-09 10:35:58', 'wadawdsad', 'sadsad', 'dsada', 0, 0, '0000-00-00', '', '', 0, '', '', '0000-00-00', '', '', '', 'Settled', '2024-11-09 10:35:58', 0),
(15, 144516, '222378', '2024-11-09 10:36:18', 'dsfdsf', 'dsfdsf', 'sdfsdf', 0, 0, '0000-00-00', '', '', 0, '', '', '0000-00-00', '', '', '', 'Unscheduled', '2024-11-09 10:36:18', 0),
(16, 673859, '650112', '2024-11-09 10:40:18', 'sadsadsa', 'dasdsa', 'asdas', 0, 0, '0000-00-00', '', '', 0, '', '', '0000-00-00', '', '', '', 'Scheduled', '2024-11-09 10:40:18', 0),
(17, 752232, '824306', '2024-11-09 10:40:53', 'sadsad', 'asdsa', 'dsad', 0, 0, '0000-00-00', '', '', 0, '', '', '0000-00-00', '', '', '', 'Unscheduled', '2024-11-09 10:40:53', 0),
(18, 953220, '637711', '2024-11-09 10:41:05', 'sadsad', 'asdsa', 'dsad', 0, 0, '0000-00-00', '', '', 0, '', '', '0000-00-00', '', '', '', 'Settled', '2024-11-09 10:41:05', 0),
(19, 762482, '458674', '2024-11-09 10:41:13', 'sadas', 'dsadsad', 'dasd', 0, 0, '0000-00-00', '', '', 0, '', '', '0000-00-00', '', '', '', 'Unscheduled', '2024-11-09 10:41:13', 0),
(20, 556291, '908033', '2024-11-09 10:41:32', 'sadsa', 'dsad', 'dsad', 0, 0, '0000-00-00', '', '', 0, '', '', '0000-00-00', '', '', '', 'Settled', '2024-11-09 10:41:32', 0);

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
(1, 'admin@gmail.com', '$2y$10$r9.sztwoocDEpJBoIANBFeFo89Qi/SA3v1ET.qU5nj0C5fRIkMkAe', 2, '2024-09-19 20:49:42', '2024-09-19 14:49:29'),
(2, 'test@gmail.com', '$2y$10$cIih1g2fMZijaDAsVbENfOldxEaNhCGKFxxsWp8suD3/MnOVt9M5q', 2, '2024-09-19 15:14:31', '0000-00-00 00:00:00'),
(3, 'superadmin@gmail.com', '$2y$10$FUuTI7CmsBUmL91FTfjtaOgRU5idru26N3PhlFLDo6x00IpbJaNoK', 1, '2024-10-04 14:28:55', '0000-00-00 00:00:00'),
(4, 'staff@gmail.com', '$2y$10$tM9QfG1HxYhlYChFPLrIY.i3B9IQdIUod7Yd5wvztPLUTd6st3QJW', 3, '2024-11-04 15:52:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `visiontbl`
--

CREATE TABLE `visiontbl` (
  `id` int(11) NOT NULL,
  `vision` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visiontbl`
--

INSERT INTO `visiontbl` (`id`, `vision`) VALUES
(1, 'sdfgsdfgdsfdgsdgfdgdfgdfgdfg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blotters`
--
ALTER TABLE `blotters`
  ADD PRIMARY KEY (`blotter_id`);

--
-- Indexes for table `blotterss`
--
ALTER TABLE `blotterss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certicate`
--
ALTER TABLE `certicate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emergency_contact`
--
ALTER TABLE `emergency_contact`
  ADD PRIMARY KEY (`emergency_contact_id`),
  ADD KEY `resident_id` (`resident_id`);

--
-- Indexes for table `missiontbl`
--
ALTER TABLE `missiontbl`
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
-- Indexes for table `relative_info`
--
ALTER TABLE `relative_info`
  ADD PRIMARY KEY (`relative_id`),
  ADD UNIQUE KEY `barangayid` (`barangayid`),
  ADD KEY `resident_id` (`resident_id`);

--
-- Indexes for table `resident_infos`
--
ALTER TABLE `resident_infos`
  ADD PRIMARY KEY (`resident_id`),
  ADD UNIQUE KEY `barangayid` (`barangayid`);

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
-- Indexes for table `visiontbl`
--
ALTER TABLE `visiontbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `blotters`
--
ALTER TABLE `blotters`
  MODIFY `blotter_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blotterss`
--
ALTER TABLE `blotterss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `certicate`
--
ALTER TABLE `certicate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `emergency_contact`
--
ALTER TABLE `emergency_contact`
  MODIFY `emergency_contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `missiontbl`
--
ALTER TABLE `missiontbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `relative_info`
--
ALTER TABLE `relative_info`
  MODIFY `relative_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resident_infos`
--
ALTER TABLE `resident_infos`
  MODIFY `resident_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settlement`
--
ALTER TABLE `settlement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `visiontbl`
--
ALTER TABLE `visiontbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emergency_contact`
--
ALTER TABLE `emergency_contact`
  ADD CONSTRAINT `emergency_contact_ibfk_1` FOREIGN KEY (`resident_id`) REFERENCES `resident_infos` (`resident_id`);

--
-- Constraints for table `relative_info`
--
ALTER TABLE `relative_info`
  ADD CONSTRAINT `relative_info_ibfk_1` FOREIGN KEY (`resident_id`) REFERENCES `resident_infos` (`resident_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
