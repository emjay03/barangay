-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2025 at 01:33 PM
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
(2, 'vergel macayan', 'fsdfsdfsadsad', '2025-02-14 13:22:11', '2025-02-14 13:22:11', '2025-03-02 13:34:39'),
(3, 'dsfsdfvsdvsdvsdv', 'sdfsdfdsgsdgtfghtfhsdfdfsd', '2025-02-14 13:22:27', '2025-02-14 13:22:27', '2025-02-14 14:01:41'),
(5, 'fsdf', 'sdfsdf', '2025-02-14 13:53:56', '2025-02-14 13:53:56', '2025-02-14 13:53:56'),
(6, 'fsdf', 'sdfsd', '2025-02-14 13:54:05', '2025-02-14 13:54:05', '2025-02-14 13:54:05'),
(7, 'sdfsd', 'fsdf', '2025-02-14 13:54:09', '2025-02-14 13:54:09', '2025-02-14 13:54:09'),
(8, 'julliea ann', 'fsdffsfsdf', '2025-02-14 13:54:13', '2025-02-14 13:54:13', '2025-03-02 13:36:02'),
(9, 'fsdf', 'sdfsdf', '2025-02-14 13:54:16', '2025-02-14 13:54:16', '2025-02-14 13:54:16'),
(10, 'sdfsd', 'fsdf', '2025-02-14 13:54:19', '2025-02-14 13:54:19', '2025-02-14 13:54:19'),
(11, 'yuyuyuyu', 'dfvdf', '2025-02-14 14:06:05', '2025-02-14 14:06:05', '2025-03-02 14:10:56'),
(12, 'dfvdfvsdsadsadsa', 'sadsadsad', '2025-02-14 14:06:14', '2025-02-14 14:06:14', '2025-03-02 14:11:45'),
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
  `barangayid` varchar(25) NOT NULL,
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

INSERT INTO `certicate` (`id`, `barangayid`, `type`, `fullname`, `address`, `date`, `purpose`, `birthdate`, `placebirth`, `findings`, `created_at`, `updated_at`) VALUES
(12, '', 'Indigency', 'IUYTR', 'FAS', '2024-11-23', 'D', NULL, '', '', '2024-11-03', 0),
(13, '', 'Indigency', 'd', 'd', '2024-10-30', 'd', NULL, '', '', '2024-11-03', 0),
(14, '', 'Indigency', 'd', 'd', '2024-10-30', 'd', NULL, '', '', '2024-11-03', 0),
(15, '', 'Indigency', 'uuiui', 'uuu', '2024-11-01', 'uii', NULL, '', '', '2024-11-03', 0),
(16, '', 'Barangay', 'd', 'd', '2024-11-09', 'd', NULL, '', '', '2024-11-03', 0),
(17, '', 'Barangay', 'dadas', 'dsada', '2024-11-07', 'dasda', NULL, '', '', '2024-11-04', 0),
(18, '', 'test', 'test', NULL, NULL, 'd', '2024-02-02', 'Qc', 'test', '2024-11-04', 0),
(19, '', 'Clearance', 'DD', 'D', NULL, 'DDD', '2024-10-31', 'DDD', 'DDD', '2024-11-04', 0),
(20, '', 'certificate', 'sasa', 'sasa', '2024-11-15', 'sasasa', NULL, NULL, NULL, '2024-11-04', 0),
(21, '', 'Indigency', 'joemel piniones', 'Brgy. 143 Quezon Caloocan City', '2024-11-08', 'patuli', NULL, NULL, NULL, '2024-11-08', 0),
(22, '', 'Indigency', 'dsasd', 'sadsad', '2024-11-08', 'sadsadsa', NULL, NULL, NULL, '2024-11-08', 0),
(23, '', 'Indigency', 'vergel macayan', 'sads', '2024-11-08', 'adsadsa', NULL, NULL, NULL, '2024-11-08', 0),
(24, '', 'Clearance', 'asdsadsa', '', NULL, '', '0000-00-00', '', '', '2024-11-08', 0),
(25, '', 'Indigency', 'sadsad', '', '2024-11-08', '', NULL, NULL, NULL, '2024-11-08', 0),
(26, '', 'Clearance', 'sdads', '', NULL, '', '0000-00-00', '', '', '2024-11-08', 0),
(27, '', 'Clearance', 'sdads', '', NULL, '', '0000-00-00', '', '', '2024-11-08', 0),
(28, '', 'Clearance', 'sdas', '', NULL, '', '0000-00-00', '', '', '2024-11-08', 0),
(29, '', 'Clearance', 'fdsfsdf', '', NULL, '', '0000-00-00', '', '', '2024-11-08', 0),
(30, '', 'Clearance', 'sdsadsadsad', 'sadsad', NULL, 'sadasdsads', '2024-11-08', 'sdsad', 'sadsadsa', '2024-11-08', 0),
(31, '', 'Certificate', 'sdsfs', 'ds', '2024-11-08', '', NULL, NULL, NULL, '2024-11-08', 0),
(32, '', 'Indigency', 'sadasdsad', 'sadsadas', '2025-02-15', 'dsadsad', NULL, NULL, NULL, '2025-02-15', 0),
(33, '', 'Indigency', 'fdgdfg', 'fgdfgdf', '2025-03-02', 'gdfgdfgdfgdfg', NULL, NULL, NULL, '2025-03-02', 0),
(34, '', 'Indigency', 'ryrtyrtyry', 'Tala', '2025-03-15', 'yrtyrtyrt', NULL, NULL, NULL, '2025-03-15', 0),
(35, '', 'Indigency', 'fsdf', 'sdfsdfs', '2025-03-15', 'dfsdf', NULL, NULL, NULL, '2025-03-15', 0),
(36, '', 'Indigency', 'vfdvfd', 'dfvdfv', '2025-03-15', 'fvdfvdf', NULL, NULL, NULL, '2025-03-15', 0),
(37, '', 'Indigency', 'sdfsd', 'fsdfsd', '2025-03-15', 'fsd', NULL, NULL, NULL, '2025-03-15', 0),
(38, '', 'werwer', 'dfsdfsd', 'ph8a pkg11c blk126 ex. lot bagong silang caloocan city', '2025-03-17', 'dsfsdf', '2025-03-17', 'sadsad', '', '2025-03-17', 0),
(39, '', 'Certificate', 'dfsdfsd', 'ph8a pkg11c blk126 ex. lot bagong silang caloocan city', '2025-03-17', 'dsfsdf', '2025-03-17', 'sadsad', 'Findings', '2025-03-17', 0),
(40, '', 'Clearance', 'joemel piniones', 'ph8a pkg11c blk126 ex. lot bagong silang caloocan city', NULL, 'asdsadas', '2025-03-17', 'sdfsdfsdfsd', 'sadsad', '2025-03-17', 0),
(41, '', 'Indigency', 'vergel macayan', 'ph8a pkg11c blk126 ex. lot bagong silang caloocan city', '2025-03-17', 'Others', NULL, NULL, NULL, '2025-03-17', 0),
(42, '', 'Indigency', 'joemel piniones', 'tala caloocan city', '2025-03-17', '', NULL, NULL, NULL, '2025-03-17', 0),
(43, '', 'Indigency', 'dsfsdfsd', 'efewfwefw', '2025-03-17', '', NULL, NULL, NULL, '2025-03-17', 0),
(44, '', 'Indigency', 'dfsdfsd', 'sfsdfs', '2025-03-17', '', NULL, NULL, NULL, '2025-03-17', 0),
(45, '', 'Indigency', 'joemel piniones', 'ph8a pkg11c blk126 ex. lot bagong silang caloocan city', '2025-03-17', '', NULL, NULL, NULL, '2025-03-17', 0),
(46, '', 'Indigency', 'dfsdfsd', 'ph8a pkg11c blk126 ex. lot bagong silang caloocan city', '2025-03-17', '', NULL, NULL, NULL, '2025-03-17', 0),
(47, '', 'Indigency', 'joemel piniones', 'ph8a pkg11c blk126 ex. lot bagong silang caloocan city', '2025-03-17', 'Others', NULL, NULL, NULL, '2025-03-17', 0),
(48, '', 'Indigency', 'sfsdfsdf', 'sdfsdfs', '2025-03-17', '', NULL, NULL, NULL, '2025-03-17', 0),
(49, '', 'Indigency', 'dsfsdfsd', 'asdsad', '2025-03-17', 'Others', NULL, NULL, NULL, '2025-03-17', 0),
(50, '', 'Indigency', 'sdfsdf', 'sdfsdf', '2025-03-17', 'Others', NULL, NULL, NULL, '2025-03-17', 0),
(51, '', 'Indigency', 'wewe', 'sdasdas', '2025-03-17', 'Government-related Processes', NULL, NULL, NULL, '2025-03-17', 0),
(52, '', 'Indigency', 'wewe', 'sdasdas', '2025-03-17', 'Others', NULL, NULL, NULL, '2025-03-17', 0),
(53, '', 'Indigency', 'cvdfvsd', 'vsdfvsd', '2025-03-17', '', NULL, NULL, NULL, '2025-03-17', 0),
(54, '', 'Indigency', 'joemel piniones', 'gdfgdfg', '2025-03-17', 'Others', NULL, NULL, NULL, '2025-03-17', 0),
(55, '', 'Indigency', 'wewe', 'dfsdf', '2025-03-17', 'Others', NULL, NULL, NULL, '2025-03-17', 0),
(56, '', 'Indigency', 'sadsad', 'sadsa', '2025-03-17', '', NULL, NULL, NULL, '2025-03-17', 0),
(57, '', 'Indigency', 'sadsa', 'asdasdd', '2025-03-17', '', NULL, NULL, NULL, '2025-03-17', 0),
(58, '', 'Indigency', 'sdad', 'asdsad', '2025-03-17', '', NULL, NULL, NULL, '2025-03-17', 0),
(59, '', 'Indigency', 'dfsdfsd', 'sadsadsa', '2025-03-17', '', NULL, NULL, NULL, '2025-03-17', 0),
(60, '', 'Indigency', 'sdsad', 'asdsad', '2025-03-17', '', NULL, NULL, NULL, '2025-03-17', 0),
(61, '', 'Indigency', 'sadasd', 'asdsadsad', '2025-03-17', '', NULL, NULL, NULL, '2025-03-17', 0),
(62, '', 'Indigency', 'dsfsdfsdfsd', 'sdfsdfsd', '2025-03-17', 'dsadsasdf', NULL, NULL, NULL, '2025-03-17', 0),
(63, '', 'Indigency', 'dsfsdfsdfsdd', 'sdfsdfsd', '2025-03-17', 'Loan applications', NULL, NULL, NULL, '2025-03-17', 0),
(64, '', 'Clearance', 'sadasdsssdsad', 'sadsad', NULL, 'Proof of good moral character', '2025-03-17', 'sdsad', 'sadasdsadsad', '2025-03-17', 0),
(65, '', 'Clearance', 'sadasdsssdsad', 'sadsad', NULL, 'dsfsdfsdfs', '2025-03-17', 'sdsaddfds', 'sadasdsadsad', '2025-03-17', 0),
(66, '', 'Certificate', 'sdfdsfsd', 'dsfsdf', '2025-03-17', 'sdfsdfsdfsdfsdf', NULL, NULL, NULL, '2025-03-17', 0),
(67, '', 'Certificate', 'sdfdsfsd', 'dsfsdfdd', '2025-03-17', 'Business permits', NULL, NULL, NULL, '2025-03-17', 0),
(68, '', 'Indigency', 'asdsad', 'sadasdasd', '2025-03-17', 'Job application', NULL, NULL, NULL, '2025-03-17', 0),
(69, '', 'Indigency', 'joemel piniones', 'sfsdfsd', '2025-03-17', 'Proof of good moral character', NULL, NULL, NULL, '2025-03-17', 0),
(70, '', 'Certificate', 'fsfsdfsd', 'fsdfsdfsdf', '2025-03-17', 'Job application', NULL, NULL, NULL, '2025-03-17', 0),
(71, '', 'Indigency', 'ghfg', 'hfghfg', '2025-03-18', 'Proof of good moral character', NULL, NULL, NULL, '2025-03-18', 0);

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
(1, 'jljil');

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
(25, 'superadmin@gmail.com', 'dsfsdfsdffxcvxcvgdfgdfgddfgdfgfgddfgfdgfdgdfg', '2025-02-14', '0000-00-00'),
(27, 'superadmin@gmail.com', 'dfbdfbdfbdf', '2025-03-02', '0000-00-00'),
(29, 'superadmin@gmail.com', 'fsdfsdf', '2025-03-02', '0000-00-00'),
(30, 'superadmin@gmail.com', 'sdfsdfsd', '2025-03-02', '0000-00-00'),
(31, 'superadmin@gmail.com', 'gdfgdfgdf', '2025-03-02', '0000-00-00'),
(32, 'superadmin@gmail.com', 'dfgdfg', '2025-03-02', '0000-00-00'),
(33, 'superadmin@gmail.com', 'sadasd', '2025-03-02', '0000-00-00'),
(34, 'superadmin@gmail.com', 'sfdsdfdsf', '2025-03-02', '0000-00-00'),
(35, 'superadmin@gmail.com', 'DADADDADAD', '2025-03-02', '0000-00-00'),
(36, 'superadmin@gmail.com', 'wewewewe', '2025-03-02', '0000-00-00'),
(37, 'superadmin@gmail.com', 'vxv', '2025-03-02', '0000-00-00'),
(38, 'superadmin@gmail.com', 'xczxczxc', '2025-03-02', '0000-00-00'),
(39, 'superadmin@gmail.com', 'fgcfgcfgbc', '2025-03-02', '0000-00-00'),
(40, 'superadmin@gmail.com', 'fhfghfgh', '2025-03-02', '0000-00-00'),
(41, 'superadmin@gmail.com', 'gfhfgh', '2025-03-02', '0000-00-00'),
(42, 'superadmin@gmail.com', 'dsfsdfsdf', '2025-03-02', '0000-00-00'),
(43, 'superadmin@gmail.com', 'gdsgsdg', '2025-03-02', '0000-00-00'),
(44, 'superadmin@gmail.com', 'fghfghfg', '2025-03-02', '0000-00-00'),
(45, 'superadmin@gmail.com', 'sdfsdfs', '2025-03-02', '0000-00-00'),
(46, 'superadmin@gmail.com', 'ghfgh', '2025-03-02', '0000-00-00'),
(47, 'superadmin@gmail.com', 'dsfsdfd', '2025-03-02', '0000-00-00'),
(48, 'superadmin@gmail.com', 'sdsad', '2025-03-02', '0000-00-00'),
(49, 'superadmin@gmail.com', 'dfsdf', '2025-03-02', '0000-00-00'),
(50, 'superadmin@gmail.com', 'asdsadsa', '2025-03-02', '0000-00-00'),
(51, 'superadmin@gmail.com', 'dsfsdf', '2025-03-02', '0000-00-00'),
(52, 'superadmin@gmail.com', 'fgdfgf', '2025-03-02', '0000-00-00'),
(53, 'superadmin@gmail.com', 'fsdfsd', '2025-03-02', '0000-00-00'),
(54, 'superadmin@gmail.com', 'vbcvbcv', '2025-03-02', '0000-00-00'),
(55, 'superadmin@gmail.com', 'fdgdfg', '2025-03-02', '0000-00-00'),
(56, 'superadmin@gmail.com', 'dszdsa', '2025-03-02', '0000-00-00'),
(57, 'superadmin@gmail.com', 'dsfsdfds', '2025-03-02', '0000-00-00'),
(58, 'superadmin@gmail.com', 'fgdgdf', '2025-03-02', '0000-00-00'),
(60, 'superadmin@gmail.com', 'gdfgdfg', '2025-03-02', '0000-00-00'),
(62, 'superadmin@gmail.com', 'dfgdfg', '2025-03-02', '0000-00-00'),
(63, 'superadmin@gmail.com', 'dfgdfg', '2025-03-02', '0000-00-00'),
(65, 'superadmin@gmail.com', 'fghfg', '2025-03-02', '0000-00-00'),
(66, 'superadmin@gmail.com', 'sdfsfsdf', '2025-03-03', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `online_certificate`
--

CREATE TABLE `online_certificate` (
  `id` int(11) NOT NULL,
  `barangayid` varchar(25) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'Certificate',
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(250) NOT NULL,
  `control_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `online_certificate`
--

INSERT INTO `online_certificate` (`id`, `barangayid`, `type`, `fullname`, `address`, `date`, `purpose`, `created_at`, `updated_at`, `status`, `control_number`) VALUES
(50, '2025-1234', 'Certificate', 'vergel ocado macayan [value-6]', '[value-25], [value-26], [value-27], [value-28], [value-29]', '2025-03-18', 'Job application', '2025-03-18 04:57:39', '2025-03-18 04:57:39', 'pending', '2025-10000');

-- --------------------------------------------------------

--
-- Table structure for table `online_clearance`
--

CREATE TABLE `online_clearance` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'Clearance',
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `placebirth` varchar(255) NOT NULL,
  `findings` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `online_id`
--

CREATE TABLE `online_id` (
  `id` int(11) NOT NULL,
  `barangay_id` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'Barangay I.D',
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `online_indigency`
--

CREATE TABLE `online_indigency` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'Indigency',
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `placebirth` varchar(255) NOT NULL,
  `findings` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, '2025-1234', 'macayan', 'vergel', 'ocado', '[value-6]', '[value-7]', 'Yes', '0000-00-00', 0, 'Male', 'Single', '', 'Voter', '[value-14]', '[value-15]', '[value-16]', '[value-17]', '[value-18]', 0.00, 0.00, '[value-21]', '[value-22]', '[value-23]', '[value-24]', '[value-25]', '[value-26]', '[value-27]', '[value-28]', '[value-29]', '[value-30]', '[value-31]', '[value-32]', '[value-33]', '[value-34]', '0000-00-00', '', '0000-00-00 00:00:00', '2025-03-18 04:25:04'),
(2, '2025-1256', '[value-3]', '[value-4]', '[value-5]sadsad', '[value-6]', '[value-7]', 'Yes', '0000-00-00', 0, '', '', '', '', '[value-14]', '[value-15]', '[value-16]', '[value-17]', '[value-18]', 0.00, 0.00, '[value-21]', '[value-22]', '[value-23]', '[value-24]', '[value-25]', '[value-26]', '[value-27]', '[value-28]', '[value-29]', '[value-30]', '[value-31]', '[value-32]', '[value-33]', '[value-34]', '0000-00-00', '', '0000-00-00 00:00:00', '2025-03-18 03:50:51'),
(3, '2025-1002', 'Garcia', 'Carlos', 'Perez', 'III', 'Alive', '', '1987-03-18', 37, 'Male', 'Divorced', '', '', 'Driver', 'Batangas', 'Filipino', '02-3456789', '09193456789', 170.00, 68.00, 'carlos.garcia@example.com', 'Liza Garcia', 'Luis Perez', 'Maria Perez', 'Area C', '103', 'Maple St.', 'Purok 3', 'Red Subdivision', 'Barangay 3', 'Zone 4', 'District 5', 'Batangas', 'Southern Tagalog', '2025-03-03', 'Active', '2025-03-02 16:00:00', '2025-03-02 16:00:00'),
(4, '2025-1003', 'Mendoza', 'Sara', 'López', '', 'Alive', '', '1995-11-09', 29, 'Female', 'Widowed', '', '', 'Nurse', 'Laguna', 'Filipino', '02-4567890', '09194567890', 160.00, 50.00, 'sara.mendoza@example.com', 'Mark Mendoza', 'Ramon López', 'Ana López', 'Area D', '104', 'Pine St.', 'Purok 4', 'Yellow Subdivision', 'Barangay 4', 'Zone 5', 'District 6', 'Laguna', 'CALABARZON', '2025-03-04', 'Active', '2025-03-03 16:00:00', '2025-03-03 16:00:00'),
(5, '2025-1004', 'Reyes', 'Luis', 'Bautista', 'II', 'Alive', '', '1990-06-30', 34, 'Male', 'Single', '', '', 'Businessman', 'Quezon', 'Filipino', '02-5678901', '09195678901', 180.00, 75.00, 'luis.reyes@example.com', 'Liza Reyes', 'Antonio Bautista', 'Maria Bautista', 'Area E', '105', 'Cedar St.', 'Purok 5', 'Sunset Subdivision', 'Barangay 5', 'Zone 6', 'District 7', 'Quezon', 'CALABARZON', '2025-03-05', 'Active', '2025-03-04 16:00:00', '2025-03-04 16:00:00'),
(6, '2025-1005', 'Santos', 'Maria', 'Delos', '', 'Alive', '', '1982-01-25', 43, 'Female', 'Married', '', '', 'Housewife', 'Manila', 'Filipino', '02-6789012', '09196789012', 155.00, 50.00, 'maria.santos@example.com', 'Juan Santos', 'Carlos Delos', 'Ana Delos', 'Area F', '106', 'Tulip St.', 'Purok 6', 'Sunflower Subdivision', 'Barangay 6', 'Zone 7', 'District 8', 'Manila', 'Metro Manila', '2025-03-06', 'Active', '2025-03-05 16:00:00', '2025-03-05 16:00:00'),
(7, '2025-1006', 'Lopez', 'Jose', 'Gonzales', 'Sr.', 'Alive', '', '1979-12-12', 45, 'Male', 'Single', '', '', 'Engineer', 'Cebu', 'Filipino', '02-7890123', '09197890123', 175.00, 72.00, 'jose.lopez@example.com', 'Maria Lopez', 'Ramon Gonzales', 'Liza Gonzales', 'Area G', '107', 'Lily St.', 'Purok 7', 'Sunset Park Subdivision', 'Barangay 7', 'Zone 8', 'District 9', 'Cebu City', 'Visayas', '2025-03-07', 'Active', '2025-03-06 16:00:00', '2025-03-06 16:00:00'),
(8, '2025-1007', 'Miller', 'Angela', 'Santos', '', 'Alive', '', '1998-04-11', 26, 'Female', 'Widowed', '', '', 'Accountant', 'Davao', 'Filipino', '02-8901234', '09198901234', 165.00, 58.00, 'angela.miller@example.com', 'Carlos Miller', 'Pedro Santos', 'Maria Santos', 'Area H', '108', 'Rose St.', 'Purok 8', 'River View Subdivision', 'Barangay 8', 'Zone 9', 'District 10', 'Davao City', 'Mindanao', '2025-03-08', 'Active', '2025-03-07 16:00:00', '2025-03-07 16:00:00'),
(9, '2025-1008', 'Hernandez', 'Luis', 'Fernandez', 'IV', 'Alive', '', '1980-10-30', 44, 'Male', 'Divorced', '', '', 'Soldier', 'Zamboanga', 'Filipino', '02-9012345', '09199901234', 180.00, 80.00, 'luis.hernandez@example.com', 'Liza Hernandez', 'Antonio Fernandez', 'Maria Fernandez', 'Area I', '109', 'Violet St.', 'Purok 9', 'Clearview Subdivision', 'Barangay 9', 'Zone 10', 'District 11', 'Zamboanga City', 'Mindanao', '2025-03-09', 'Active', '2025-03-08 16:00:00', '2025-03-08 16:00:00'),
(10, '2025-1009', 'Castro', 'Isabel', 'Morales', '', 'Alive', '', '1991-09-14', 33, 'Female', 'Single', '', '', 'Nurse', 'Iloilo', 'Filipino', '02-0123456', '09191012345', 160.00, 50.00, 'isabel.castro@example.com', 'Juan Castro', 'Carlos Morales', 'Ana Morales', 'Area J', '110', 'Jasmine St.', 'Purok 10', 'Mountain View Subdivision', 'Barangay 10', 'Zone 11', 'District 12', 'Iloilo City', 'Visayas', '2025-03-10', 'Active', '2025-03-09 16:00:00', '2025-03-09 16:00:00'),
(11, '2025-1010', 'Perez', 'Elena', 'Jimenez', '', 'Alive', '', '1993-02-27', 31, 'Female', 'Widowed', '', '', 'Teacher', 'Batangas', 'Filipino', '02-1237890', '09191237890', 158.00, 48.00, 'elena.perez@example.com', 'Carlos Perez', 'Juan Jimenez', 'Ana Jimenez', 'Area K', '111', 'Ivy St.', 'Purok 11', 'Valley View Subdivision', 'Barangay 11', 'Zone 12', 'District 13', 'Batangas City', 'Southern Tagalog', '2025-03-11', 'Active', '2025-03-10 16:00:00', '2025-03-10 16:00:00'),
(12, '2025-1011', 'Gonzales', 'Martin', 'Diaz', 'III', 'Alive', '', '1990-07-20', 34, 'Male', 'Single', '', '', 'Police Officer', 'Mindanao', 'Filipino', '02-2346789', '09192346789', 172.00, 70.00, 'martin.gonzales@example.com', 'Martha Gonzales', 'Carlos Diaz', 'Ana Diaz', 'Area L', '112', 'Tulip St.', 'Purok 12', 'Redwood Subdivision', 'Barangay 12', 'Zone 13', 'District 14', 'Mindanao', 'Mindanao', '2025-03-12', 'Active', '2025-03-11 16:00:00', '2025-03-11 16:00:00'),
(13, '2025-1012', 'Alvarez', 'Carlos', 'Ramirez', '', 'Alive', '', '1985-05-05', 39, 'Male', 'Married', '', '', 'Architect', 'Cebu', 'Filipino', '02-3456789', '09193456789', 175.00, 74.00, 'carlos.alvarez@example.com', 'Maria Alvarez', 'Antonio Ramirez', 'Maria Ramirez', 'Area M', '113', 'Sunflower St.', 'Purok 13', 'Seaside Subdivision', 'Barangay 13', 'Zone 14', 'District 15', 'Cebu City', 'Visayas', '2025-03-13', 'Active', '2025-03-12 16:00:00', '2025-03-12 16:00:00'),
(14, '2025-1013', 'Villar', 'Jose', 'Santos', 'IV', 'Alive', '', '1992-09-15', 32, 'Male', 'Single', '', '', 'Salesman', 'Taguig', 'Filipino', '02-4567890', '09194567890', 168.00, 60.00, 'jose.villar@example.com', 'Maria Villar', 'Carlos Santos', 'Ana Santos', 'Area N', '114', 'Palm St.', 'Purok 14', 'Riverbend Subdivision', 'Barangay 14', 'Zone 15', 'District 16', 'Taguig', 'Metro Manila', '2025-03-14', 'Active', '2025-03-13 16:00:00', '2025-03-13 16:00:00'),
(15, '2025-1014', 'Ramirez', 'Juan', 'Diaz', '', 'Alive', '', '1988-11-10', 36, 'Male', 'Divorced', '', '', 'Farmer', 'Samar', 'Filipino', '02-5678901', '09195678901', 180.00, 75.00, 'juan.ramirez@example.com', 'Maria Ramirez', 'Antonio Diaz', 'Liza Diaz', 'Area O', '115', 'Palm St.', 'Purok 15', 'Bluebell Subdivision', 'Barangay 15', 'Zone 16', 'District 17', 'Samar', 'Eastern Visayas', '2025-03-15', 'Active', '2025-03-14 16:00:00', '2025-03-14 16:00:00'),
(16, '2025-1015', 'Bautista', 'Carlos', 'De La Cruz', 'II', 'Alive', '', '1995-02-20', 30, 'Male', 'Married', '', '', 'Farmer', 'Tarlac', 'Filipino', '02-6789012', '09196789012', 170.00, 80.00, 'carlos.bautista@example.com', 'Maria Bautista', 'Antonio De La Cruz', 'Ana De La Cruz', 'Area P', '116', 'Tulip St.', 'Purok 16', 'Mountain View Subdivision', 'Barangay 16', 'Zone 17', 'District 18', 'Tarlac', 'Central Luzon', '2025-03-16', 'Active', '2025-03-15 16:00:00', '2025-03-15 16:00:00'),
(17, '2025-1016', 'Diaz', 'Anna', 'Villar', '', 'Alive', '', '1994-01-14', 31, 'Female', 'Single', '', '', 'Teacher', 'Cebu', 'Filipino', '02-7890123', '09197890123', 160.00, 55.00, 'anna.diaz@example.com', 'Carlos Diaz', 'Antonio Villar', 'Ana Villar', 'Area Q', '117', 'Rose St.', 'Purok 17', 'Pine Subdivision', 'Barangay 17', 'Zone 18', 'District 19', 'Cebu City', 'Visayas', '2025-03-17', 'Active', '2025-03-16 16:00:00', '2025-03-16 16:00:00'),
(18, '2025-1017', 'Luna', 'Beatrice', 'Cruz', 'IV', 'Alive', '', '1987-03-29', 37, 'Female', 'Widowed', '', '', 'Nurse', 'Bohol', 'Filipino', '02-8901234', '09198901234', 155.00, 48.00, 'beatrice.luna@example.com', 'Juan Luna', 'Carlos Cruz', 'Ana Cruz', 'Area R', '118', 'Jasmine St.', 'Purok 18', 'Horizon Subdivision', 'Barangay 18', 'Zone 19', 'District 20', 'Bohol', 'Central Visayas', '2025-03-18', 'Active', '2025-03-17 16:00:00', '2025-03-17 16:00:00'),
(19, '2025-1018', 'Bautista', 'Leon', 'Jimenez', '', 'Alive', '', '1983-10-10', 41, 'Male', 'Married', '', '', 'Engineer', 'Cebu', 'Filipino', '02-9012345', '09199901234', 172.00, 65.00, 'leon.bautista@example.com', 'Maria Bautista', 'Carlos Jimenez', 'Ana Jimenez', 'Area S', '119', 'Sunflower St.', 'Purok 19', 'Moonview Subdivision', 'Barangay 19', 'Zone 20', 'District 21', 'Cebu City', 'Visayas', '2025-03-19', 'Active', '2025-03-18 16:00:00', '2025-03-18 16:00:00'),
(20, '2025-1019', 'Montoya', 'Gabriel', 'Luna', 'III', 'Alive', '', '1997-05-05', 27, 'Male', 'Single', '', '', 'Farmer', 'Davao', 'Filipino', '02-0123456', '09191012345', 165.00, 58.00, 'gabriel.montoya@example.com', 'Ana Montoya', 'Antonio Luna', 'Maria Luna', 'Area T', '120', 'Rosewood St.', 'Purok 20', 'Vista Del Mar Subdivision', 'Barangay 20', 'Zone 21', 'District 22', 'Davao City', 'Mindanao', '2025-03-20', 'Active', '2025-03-19 16:00:00', '2025-03-19 16:00:00'),
(21, '2025-1020', 'Gonzales', 'Rafael', 'Hernandez', '', 'Alive', '', '1989-07-15', 35, 'Male', 'Married', '', '', 'Doctor', 'Taguig', 'Filipino', '02-3456789', '09193456789', 180.00, 72.00, 'rafael.gonzales@example.com', 'Liza Gonzales', 'Carlos Hernandez', 'Ana Hernandez', 'Area U', '121', 'Violet St.', 'Purok 21', 'Redwood Subdivision', 'Barangay 21', 'Zone 22', 'District 23', 'Taguig', 'Metro Manila', '2025-03-21', 'Active', '2025-03-20 16:00:00', '2025-03-20 16:00:00'),
(22, '2025-1021', 'Santos', 'Martha', 'Diaz', '', 'Alive', '', '1991-04-19', 33, 'Female', 'Widowed', '', '', 'Teacher', 'Iloilo', 'Filipino', '02-4567890', '09194567890', 160.00, 55.00, 'martha.santos@example.com', 'Carlos Santos', 'Ramon Diaz', 'Maria Diaz', 'Area V', '122', 'Lily St.', 'Purok 22', 'Bluebell Subdivision', 'Barangay 22', 'Zone 23', 'District 24', 'Iloilo City', 'Visayas', '2025-03-22', 'Active', '2025-03-21 16:00:00', '2025-03-21 16:00:00'),
(23, '2025-1022', 'Torres', 'Jose', 'Hernandez', 'Jr.', 'Alive', '', '1986-06-06', 38, 'Male', 'Single', '', '', 'Engineer', 'Cebu', 'Filipino', '02-5678901', '09195678901', 178.00, 75.00, 'jose.torres@example.com', 'Maria Torres', 'Carlos Hernandez', 'Ana Hernandez', 'Area W', '123', 'Cedar St.', 'Purok 23', 'Sunset Subdivision', 'Barangay 23', 'Zone 24', 'District 25', 'Cebu City', 'Visayas', '2025-03-23', 'Active', '2025-03-22 16:00:00', '2025-03-22 16:00:00'),
(24, '2025-1023', 'Alvarez', 'Liza', 'Fernandez', '', 'Alive', '', '1993-08-30', 31, 'Female', 'Divorced', '', '', 'Nurse', 'Davao', 'Filipino', '02-7890123', '09197890123', 155.00, 48.00, 'liza.alvarez@example.com', 'Carlos Alvarez', 'Luis Fernandez', 'Maria Fernandez', 'Area X', '124', 'Cedar St.', 'Purok 24', 'Golden Valley Subdivision', 'Barangay 24', 'Zone 25', 'District 26', 'Davao City', 'Mindanao', '2025-03-24', 'Active', '2025-03-23 16:00:00', '2025-03-23 16:00:00'),
(25, '2025-1024', 'Ruiz', 'Elena', 'Castro', '', 'Alive', '', '1990-02-20', 35, 'Female', 'Single', '', '', 'Teacher', 'Iloilo', 'Filipino', '02-0123456', '09191012345', 160.00, 52.00, 'elena.ruiz@example.com', 'Carlos Ruiz', 'Antonio Castro', 'Maria Castro', 'Area Y', '125', 'Jasmine St.', 'Purok 25', 'Pine Subdivision', 'Barangay 25', 'Zone 26', 'District 27', 'Iloilo City', 'Visayas', '2025-03-25', 'Active', '2025-03-24 16:00:00', '2025-03-24 16:00:00'),
(26, '2025-1000', 'Smith', 'John', 'Doe', 'Jr.', 'Alive', '', '1985-05-15', 39, 'Male', 'Single', '', '', 'Engineer', 'Manila', 'Filipino', '02-134567', '09191234567', 175.00, 70.00, 'john.smith@example.com', 'Jane Smith', 'Robert Smith', 'Maria Smith', 'Area A', '101', 'Main St.', 'Purok 1', 'Green Subdivision', 'Barangay 1', 'Zone 2', 'District 3', 'Caloocan', 'Metro Manila', '2025-03-01', 'Active', '2025-02-28 16:00:00', '2025-02-28 16:00:00'),
(27, '2025-1001', 'Doe', 'Jane', 'Ramos', '', 'Alive', '', '1992-08-22', 32, 'Female', 'Married', '', '', 'Teacher', 'Quezon City', 'Filipino', '02-2345678', '09192345678', 160.00, 55.00, 'jane.doe@example.com', 'John Doe', 'Juan Ramos', 'Ana Ramos', 'Area B', '102', 'Oak St.', 'Purok 2', 'Blue Subdivision', 'Barangay 2', 'Zone 3', 'District 4', 'Quezon City', 'Metro Manila', '2025-03-02', 'Active', '2025-03-01 16:00:00', '2025-03-01 16:00:00');

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
(4, 'staff@gmail.com', '$2y$10$tM9QfG1HxYhlYChFPLrIY.i3B9IQdIUod7Yd5wvztPLUTd6st3QJW', 3, '2024-11-04 15:52:20', '0000-00-00 00:00:00'),
(8, 'asdsad@gmail.com', '$2y$10$SfU/b7xPtYiJldfpfrB3Xem036BY3RDbFZx.Ss9yM9tZN5UNpmq2y', 1, '2025-03-18 08:40:57', '0000-00-00 00:00:00');

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
-- Indexes for table `online_certificate`
--
ALTER TABLE `online_certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_clearance`
--
ALTER TABLE `online_clearance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_id`
--
ALTER TABLE `online_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_indigency`
--
ALTER TABLE `online_indigency`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `online_certificate`
--
ALTER TABLE `online_certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `online_clearance`
--
ALTER TABLE `online_clearance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `online_id`
--
ALTER TABLE `online_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `online_indigency`
--
ALTER TABLE `online_indigency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `resident_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
