-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2024 at 04:39 AM
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
(33, 'angelo', 'angelo', 'angelo', 'angelo', '2024-11-08', 33, 'Male', 'Single', '1', 'angelo', 'Filipino', 'angelo', 'angelo', 'angelo', 'angelo', 'da@gmail.com', 'angelo', 'angelo', 'angelo', 'angelo', 'angelo', NULL, 0, '2024-11-08 15:37:54', NULL),
(34, 'Garcia', 'Juan', 'Dela Cruz', 'John', '1990-05-14', 34, 'Male', 'Single', '0', 'Manila', 'Filipino', '09171234567', '09181234567', '175', '70', 'juan.garcia@example.com', NULL, 'Jose Garcia', 'Maria Garcia', 'Barangay 123', '1234 Main St, Manila', '2023-01-01', 0, '2024-11-09 02:54:09', NULL),
(35, 'Santos', 'Maria', 'Luna', 'Mia', '1985-08-22', 39, 'Female', 'Married', '0', 'Quezon City', 'Filipino', '09192345678', '09193345678', '160', '55', 'maria.santos@example.com', 'Pedro Santos', 'Manuel Santos', 'Lucia Santos', 'Barangay 456', '4567 Oak St, QC', '2023-02-01', 0, '2024-11-09 02:54:09', NULL),
(36, 'Delacruz', 'Carlos', 'Mendoza', 'Caloy', '1992-12-11', 32, 'Male', 'Single', '1', 'Cebu City', 'Filipino', '032-2334455', '09198765432', '180', '78', 'carlos.delacruz@example.com', NULL, 'Antonio Delacruz', 'Josefina Delacruz', 'Barangay 789', '7890 Pine St, Cebu', '2023-03-15', 0, '2024-11-09 02:54:09', NULL),
(37, 'Reyes', 'Anna', 'Cruz', 'Annie', '1988-11-25', 36, 'Female', 'Widowed', '1', 'Davao City', 'Filipino', '082-3456789', '09198876543', '158', '62', 'anna.reyes@example.com', NULL, 'Emilio Reyes', 'Alicia Reyes', 'Barangay 101', '1010 Palm St, Davao', '2023-04-01', 0, '2024-11-09 02:54:09', NULL),
(38, 'Bautista', 'Leo', 'Alvarez', 'Lito', '1982-04-05', 42, 'Male', 'Married', '0', 'Taguig City', 'Filipino', '02-8901234', '09161234567', '168', '80', 'leo.bautista@example.com', 'Cynthia Bautista', 'Rafael Bautista', 'Carmen Bautista', 'Barangay 202', '2020 Mango St, Taguig', '2023-05-10', 0, '2024-11-09 02:54:09', NULL),
(39, 'Mendoza', 'Lucia', 'De los Reyes', 'Lucy', '1996-07-30', 28, 'Female', 'Single', '1', 'Cagayan de Oro', 'Filipino', '088-7896543', '09191234567', '165', '50', 'lucia.mendoza@example.com', NULL, 'Carlos Mendoza', 'Raquel Mendoza', 'Barangay 303', '3030 Maple St, CDO', '2023-06-01', 0, '2024-11-09 02:54:09', NULL),
(40, 'Jimenez', 'Pedro', 'Martinez', 'Pepe', '1975-09-10', 49, 'Male', 'Single', '1', 'Iloilo City', 'Filipino', '033-4567890', '09151234567', '178', '74', 'pedro.jimenez@example.com', NULL, 'Ricardo Jimenez', 'Esther Jimenez', 'Barangay 404', '4040 Cedar St, Iloilo', '2023-07-01', 0, '2024-11-09 02:54:09', NULL),
(41, 'Torres', 'Isabel', 'Santos', 'Belle', '1991-06-17', 33, 'Female', 'Married', '0', 'Bacolod', 'Filipino', '034-1234567', '09172345678', '162', '54', 'isabel.torres@example.com', 'Jose Torres', 'Felipe Torres', 'Mercedes Torres', 'Barangay 505', '5050 Birch St, Bacolod', '2023-08-01', 0, '2024-11-09 02:54:09', NULL),
(42, 'Morales', 'Rey', 'Ocampo', 'Jun', '1980-02-02', 44, 'Male', 'Widowed', 'Registered', 'Batangas', 'Filipino', '043-9876543', '09183234567', '169', '68', 'rey.morales@example.com', NULL, 'Renato Morales', 'Cristina Morales', 'Barangay 606', '6060 Birchwood St, Batangas', '2023-09-01', 0, '2024-11-09 02:54:09', NULL),
(43, 'Lopez', 'Katherine', 'Gonzales', 'Kat', '1994-10-28', 30, 'Female', 'Single', 'Not Registered', 'Cavite', 'Filipino', '046-3456789', '09145678901', '155', '48', 'katherine.lopez@example.com', NULL, 'Alfredo Lopez', 'Sandra Lopez', 'Barangay 707', '7070 Oakwood St, Cavite', '2023-10-15', 0, '2024-11-09 02:54:09', NULL),
(44, 'Villanueva', 'Miguel', 'Padilla', 'Migs', '1983-01-18', 41, 'Male', 'Married', 'Registered', 'Zamboanga City', 'Filipino', '062-5678901', '09123456789', '172', '72', 'miguel.villanueva@example.com', 'Anna Villanueva', 'Ernesto Villanueva', 'Felipa Villanueva', 'Barangay 808', '8080 Pinewood St, Zamboanga', '2023-11-01', 0, '2024-11-09 02:54:09', NULL),
(45, 'Gomez', 'Nina', 'Valencia', 'Nin', '1995-04-22', 29, 'Female', 'Single', 'Registered', 'Tagum City', 'Filipino', '084-3456789', '09170000000', '160', '58', 'nina.gomez@example.com', NULL, 'Manuel Gomez', 'Elena Gomez', 'Barangay 909', '9090 Willow St, Tagum', '2023-05-01', 0, '2024-11-09 02:54:09', NULL),
(46, 'Dizon', 'Rita', 'Salazar', 'Rits', '1989-03-04', 35, 'Female', 'Single', 'Not Registered', 'Pasig', 'Filipino', '02-6723456', '09187654321', '155', '52', 'rita.dizon@example.com', NULL, 'Ernesto Dizon', 'Luisa Dizon', 'Barangay 123', '1234 Olive St, Pasig', '2023-06-10', 0, '2024-11-09 02:54:09', NULL),
(47, 'Perez', 'Jose', 'Almeda', 'Jojo', '1998-12-15', 26, 'Male', 'Single', 'Registered', 'Antipolo', 'Filipino', '09123456789', '09198765432', '170', '65', 'jose.perez@example.com', NULL, 'Carlos Perez', 'Liza Perez', 'Barangay 111', '1011 Cherry St, Antipolo', '2023-07-20', 0, '2024-11-09 02:54:09', NULL),
(48, 'Cruz', 'Evelyn', 'Gomez', 'Evie', '1979-03-30', 45, 'Female', 'Married', 'Registered', 'Manila', 'Filipino', '02-8812345', '09176543210', '162', '58', 'evelyn.cruz@example.com', 'Roberto Cruz', 'Victor Gomez', 'Lucia Gomez', 'Barangay 212', '2020 Pine St, Manila', '2023-08-15', 0, '2024-11-09 02:54:09', NULL),
(49, 'Ferrer', 'Antonio', 'Jimenez', 'Tony', '1993-05-05', 31, 'Male', 'Single', 'Not Registered', 'Baguio City', 'Filipino', '074-2345678', '09161234589', '177', '72', 'antonio.ferrer@example.com', NULL, 'Felipe Ferrer', 'Marilyn Ferrer', 'Barangay 313', '1111 Cedar St, Baguio', '2023-09-10', 0, '2024-11-09 02:54:09', NULL),
(50, 'Serrano', 'Kristine', 'Lopez', 'Kris', '1991-11-20', 33, 'Female', 'Widowed', 'Registered', 'Cebu City', 'Filipino', '032-5678910', '09172234567', '165', '62', 'kristine.serrano@example.com', NULL, 'Luis Serrano', 'Carmen Serrano', 'Barangay 414', '2222 Pine St, Cebu', '2023-10-01', 0, '2024-11-09 02:54:09', NULL),
(51, 'Vargas', 'Nicolas', 'Ramos', 'Nick', '1984-01-25', 40, 'Male', 'Married', 'Registered', 'Taguig', 'Filipino', '02-8834567', '09122345678', '178', '80', 'nicolas.vargas@example.com', 'Clarisse Vargas', 'Arnold Ramos', 'Geraldine Ramos', 'Barangay 515', '3333 Mango St, Taguig', '2023-10-25', 0, '2024-11-09 02:54:09', NULL),
(52, 'Gutierrez', 'Carla', 'Santos', 'Car', '1997-02-17', 27, 'Female', 'Single', 'Registered', 'Iloilo', 'Filipino', '033-1234567', '09123456789', '160', '55', 'carla.gutierrez@example.com', NULL, 'Renato Gutierrez', 'Lucila Gutierrez', 'Barangay 616', '4444 Cedar St, Iloilo', '2023-11-05', 0, '2024-11-09 02:54:09', NULL),
(53, 'Pascual', 'Victor', 'Gonzalez', 'Vico', '1980-08-09', 44, 'Male', 'Divorced', 'Registered', 'Cavite', 'Filipino', '046-2345678', '09162345678', '172', '75', 'victor.pascual@example.com', NULL, 'Antonio Pascual', 'Florencia Pascual', 'Barangay 717', '5555 Oak St, Cavite', '2023-09-05', 0, '2024-11-09 02:54:09', NULL),
(54, 'Mabilog', 'Geraldine', 'Flores', 'Gerry', '1983-04-19', 41, 'Female', 'Single', 'Not Registered', 'Bacolod City', 'Filipino', '034-2233445', '09162345689', '165', '59', 'geraldine.mabilog@example.com', NULL, 'Ricardo Mabilog', 'Maria Mabilog', 'Barangay 818', '6666 Birch St, Bacolod', '2023-07-10', 0, '2024-11-09 02:54:09', NULL),
(55, 'Panganiban', 'Ricardo', 'Santos', 'Rico', '1990-02-10', 34, 'Male', 'Single', 'Registered', 'Manila', 'Filipino', '09122334455', '09178889999', '170', '68', 'ricardo.panganiban@example.com', NULL, 'Mariano Panganiban', 'Liza Panganiban', 'Barangay 919', '7777 Cherry St, Manila', '2023-06-12', 0, '2024-11-09 02:54:09', NULL),
(56, 'Garcia', 'Juan', 'Dela Cruz', 'John', '1990-05-14', 34, 'Male', 'Single', 'Registered', 'Manila', 'Filipino', '09171234567', '09181234567', '175', '70', 'juan.garcia@example.com', NULL, 'Jose Garcia', 'Maria Garcia', 'Barangay 123', '1234 Main St, Manila', '2023-01-01', 0, '2024-11-09 02:54:48', NULL),
(57, 'Santos', 'Maria', 'Luna', 'Mia', '1985-08-22', 39, 'Female', 'Married', 'Not Registered', 'Quezon City', 'Filipino', '09192345678', '09193345678', '160', '55', 'maria.santos@example.com', 'Pedro Santos', 'Manuel Santos', 'Lucia Santos', 'Barangay 456', '4567 Oak St, QC', '2023-02-01', 0, '2024-11-09 02:54:48', NULL),
(58, 'Delacruz', 'Carlos', 'Mendoza', 'Caloy', '1992-12-11', 32, 'Male', 'Single', 'Registered', 'Cebu City', 'Filipino', '032-2334455', '09198765432', '180', '78', 'carlos.delacruz@example.com', NULL, 'Antonio Delacruz', 'Josefina Delacruz', 'Barangay 789', '7890 Pine St, Cebu', '2023-03-15', 0, '2024-11-09 02:54:48', NULL),
(59, 'Reyes', 'Anna', 'Cruz', 'Annie', '1988-11-25', 36, 'Female', 'Widowed', 'Registered', 'Davao City', 'Filipino', '082-3456789', '09198876543', '158', '62', 'anna.reyes@example.com', NULL, 'Emilio Reyes', 'Alicia Reyes', 'Barangay 101', '1010 Palm St, Davao', '2023-04-01', 0, '2024-11-09 02:54:48', NULL),
(60, 'Bautista', 'Leo', 'Alvarez', 'Lito', '1982-04-05', 42, 'Male', 'Married', 'Not Registered', 'Taguig City', 'Filipino', '02-8901234', '09161234567', '168', '80', 'leo.bautista@example.com', 'Cynthia Bautista', 'Rafael Bautista', 'Carmen Bautista', 'Barangay 202', '2020 Mango St, Taguig', '2023-05-10', 0, '2024-11-09 02:54:48', NULL),
(61, 'Mendoza', 'Lucia', 'De los Reyes', 'Lucy', '1996-07-30', 28, 'Female', 'Single', 'Registered', 'Cagayan de Oro', 'Filipino', '088-7896543', '09191234567', '165', '50', 'lucia.mendoza@example.com', NULL, 'Carlos Mendoza', 'Raquel Mendoza', 'Barangay 303', '3030 Maple St, CDO', '2023-06-01', 0, '2024-11-09 02:54:48', NULL),
(62, 'Jimenez', 'Pedro', 'Martinez', 'Pepe', '1975-09-10', 49, 'Male', 'Single', 'Registered', 'Iloilo City', 'Filipino', '033-4567890', '09151234567', '178', '74', 'pedro.jimenez@example.com', NULL, 'Ricardo Jimenez', 'Esther Jimenez', 'Barangay 404', '4040 Cedar St, Iloilo', '2023-07-01', 0, '2024-11-09 02:54:48', NULL),
(63, 'Torres', 'Isabel', 'Santos', 'Belle', '1991-06-17', 33, 'Female', 'Married', 'Not Registered', 'Bacolod', 'Filipino', '034-1234567', '09172345678', '162', '54', 'isabel.torres@example.com', 'Jose Torres', 'Felipe Torres', 'Mercedes Torres', 'Barangay 505', '5050 Birch St, Bacolod', '2023-08-01', 0, '2024-11-09 02:54:48', NULL),
(64, 'Morales', 'Rey', 'Ocampo', 'Jun', '1980-02-02', 44, 'Male', 'Widowed', 'Registered', 'Batangas', 'Filipino', '043-9876543', '09183234567', '169', '68', 'rey.morales@example.com', NULL, 'Renato Morales', 'Cristina Morales', 'Barangay 606', '6060 Birchwood St, Batangas', '2023-09-01', 0, '2024-11-09 02:54:48', NULL),
(65, 'Lopez', 'Katherine', 'Gonzales', 'Kat', '1994-10-28', 30, 'Female', 'Single', 'Not Registered', 'Cavite', 'Filipino', '046-3456789', '09145678901', '155', '48', 'katherine.lopez@example.com', NULL, 'Alfredo Lopez', 'Sandra Lopez', 'Barangay 707', '7070 Oakwood St, Cavite', '2023-10-15', 0, '2024-11-09 02:54:48', NULL),
(66, 'Villanueva', 'Miguel', 'Padilla', 'Migs', '1983-01-18', 41, 'Male', 'Married', 'Registered', 'Zamboanga City', 'Filipino', '062-5678901', '09123456789', '172', '72', 'miguel.villanueva@example.com', 'Anna Villanueva', 'Ernesto Villanueva', 'Felipa Villanueva', 'Barangay 808', '8080 Pinewood St, Zamboanga', '2023-11-01', 0, '2024-11-09 02:54:48', NULL),
(67, 'Gomez', 'Nina', 'Valencia', 'Nin', '1995-04-22', 29, 'Female', 'Single', 'Registered', 'Tagum City', 'Filipino', '084-3456789', '09170000000', '160', '58', 'nina.gomez@example.com', NULL, 'Manuel Gomez', 'Elena Gomez', 'Barangay 909', '9090 Willow St, Tagum', '2023-05-01', 0, '2024-11-09 02:54:48', NULL),
(68, 'Dizon', 'Rita', 'Salazar', 'Rits', '1989-03-04', 35, 'Female', 'Single', 'Not Registered', 'Pasig', 'Filipino', '02-6723456', '09187654321', '155', '52', 'rita.dizon@example.com', NULL, 'Ernesto Dizon', 'Luisa Dizon', 'Barangay 123', '1234 Olive St, Pasig', '2023-06-10', 0, '2024-11-09 02:54:48', NULL),
(69, 'Perez', 'Jose', 'Almeda', 'Jojo', '1998-12-15', 26, 'Male', 'Single', 'Registered', 'Antipolo', 'Filipino', '09123456789', '09198765432', '170', '65', 'jose.perez@example.com', NULL, 'Carlos Perez', 'Liza Perez', 'Barangay 111', '1011 Cherry St, Antipolo', '2023-07-20', 0, '2024-11-09 02:54:48', NULL),
(70, 'Cruz', 'Evelyn', 'Gomez', 'Evie', '1979-03-30', 45, 'Female', 'Married', 'Registered', 'Manila', 'Filipino', '02-8812345', '09176543210', '162', '58', 'evelyn.cruz@example.com', 'Roberto Cruz', 'Victor Gomez', 'Lucia Gomez', 'Barangay 212', '2020 Pine St, Manila', '2023-08-15', 0, '2024-11-09 02:54:48', NULL),
(71, 'Ferrer', 'Antonio', 'Jimenez', 'Tony', '1993-05-05', 31, 'Male', 'Single', 'Not Registered', 'Baguio City', 'Filipino', '074-2345678', '09161234589', '177', '72', 'antonio.ferrer@example.com', NULL, 'Felipe Ferrer', 'Marilyn Ferrer', 'Barangay 313', '1111 Cedar St, Baguio', '2023-09-10', 0, '2024-11-09 02:54:48', NULL),
(72, 'Serrano', 'Kristine', 'Lopez', 'Kris', '1991-11-20', 33, 'Female', 'Widowed', 'Registered', 'Cebu City', 'Filipino', '032-5678910', '09172234567', '165', '62', 'kristine.serrano@example.com', NULL, 'Luis Serrano', 'Carmen Serrano', 'Barangay 414', '2222 Pine St, Cebu', '2023-10-01', 0, '2024-11-09 02:54:48', NULL),
(73, 'Vargas', 'Nicolas', 'Ramos', 'Nick', '1984-01-25', 40, 'Male', 'Married', 'Registered', 'Taguig', 'Filipino', '02-8834567', '09122345678', '178', '80', 'nicolas.vargas@example.com', 'Clarisse Vargas', 'Arnold Ramos', 'Geraldine Ramos', 'Barangay 515', '3333 Mango St, Taguig', '2023-10-25', 0, '2024-11-09 02:54:48', NULL),
(74, 'Gutierrez', 'Carla', 'Santos', 'Car', '1997-02-17', 27, 'Female', 'Single', 'Registered', 'Iloilo', 'Filipino', '033-1234567', '09123456789', '160', '55', 'carla.gutierrez@example.com', NULL, 'Renato Gutierrez', 'Lucila Gutierrez', 'Barangay 616', '4444 Cedar St, Iloilo', '2023-11-05', 0, '2024-11-09 02:54:48', NULL),
(75, 'Pascual', 'Victor', 'Gonzalez', 'Vico', '1980-08-09', 44, 'Male', 'Divorced', 'Registered', 'Cavite', 'Filipino', '046-2345678', '09162345678', '172', '75', 'victor.pascual@example.com', NULL, 'Antonio Pascual', 'Florencia Pascual', 'Barangay 717', '5555 Oak St, Cavite', '2023-09-05', 0, '2024-11-09 02:54:48', NULL),
(76, 'Mabilog', 'Geraldine', 'Flores', 'Gerry', '1983-04-19', 41, 'Female', 'Single', '1', 'Bacolod City', 'Filipino', '034-2233445', '09162345689', '165', '59', 'geraldine.mabilog@example.com', 'gdfg', 'Ricardo Mabilog', 'Maria Mabilog', 'Barangay 818', '6666 Birch St, Bacolod', '2023-07-10', 0, '2024-11-09 02:54:48', NULL),
(77, 'Panganiban', 'Ricardo', 'Santos', 'Rico', '1990-02-10', 34, 'Male', 'Single', '1', 'Manila', 'Filipino', '09122334455', '09178889999', '170', '68', 'ricardo.panganiban@example.com', 'gdfg', 'Mariano Panganiban', 'Liza Panganiban', 'Barangay 919', '7777 Cherry St, Manila', '2023-06-12', 0, '2024-11-09 02:54:48', NULL),
(78, 'Garcia', 'Juan', 'Dela Cruz', 'John', '1990-05-14', 34, 'Male', 'Single', '1', 'Manila', 'Filipino', '09171234567', '09181234567', '175', '70', 'juan.garcia@example.com', NULL, 'Jose Garcia', 'Maria Garcia', 'Barangay 123', '1234 Main St, Manila', '2023-01-01', 0, '2024-11-09 02:59:29', NULL),
(79, 'Santos', 'Maria', 'Luna', 'Mia', '1985-08-22', 39, 'Female', 'Married', '0', 'Quezon City', 'Filipino', '09192345678', '09193345678', '160', '55', 'maria.santos@example.com', 'Pedro Santos', 'Manuel Santos', 'Lucia Santos', 'Barangay 456', '4567 Oak St, QC', '2023-02-01', 0, '2024-11-09 02:59:29', NULL),
(80, 'Delacruz', 'Carlos', 'Mendoza', 'Caloy', '1992-12-11', 32, 'Male', 'Single', '1', 'Cebu City', 'Filipino', '032-2334455', '09198765432', '180', '78', 'carlos.delacruz@example.com', NULL, 'Antonio Delacruz', 'Josefina Delacruz', 'Barangay 789', '7890 Pine St, Cebu', '2023-03-15', 0, '2024-11-09 02:59:29', NULL),
(81, 'Reyes', 'Anna', 'Cruz', 'Annie', '1988-11-25', 36, 'Female', 'Widowed', '1', 'Davao City', 'Filipino', '082-3456789', '09198876543', '158', '62', 'anna.reyes@example.com', NULL, 'Emilio Reyes', 'Alicia Reyes', 'Barangay 101', '1010 Palm St, Davao', '2023-04-01', 0, '2024-11-09 02:59:29', NULL),
(82, 'Bautista', 'Leo', 'Alvarez', 'Lito', '1982-04-05', 42, 'Male', 'Married', '0', 'Taguig City', 'Filipino', '02-8901234', '09161234567', '168', '80', 'leo.bautista@example.com', 'Cynthia Bautista', 'Rafael Bautista', 'Carmen Bautista', 'Barangay 202', '2020 Mango St, Taguig', '2023-05-10', 0, '2024-11-09 02:59:29', NULL),
(83, 'Mendoza', 'Lucia', 'De los Reyes', 'Lucy', '1996-07-30', 28, 'Female', 'Single', '1', 'Cagayan de Oro', 'Filipino', '088-7896543', '09191234567', '165', '50', 'lucia.mendoza@example.com', NULL, 'Carlos Mendoza', 'Raquel Mendoza', 'Barangay 303', '3030 Maple St, CDO', '2023-06-01', 0, '2024-11-09 02:59:29', NULL),
(84, 'Jimenez', 'Pedro', 'Martinez', 'Pepe', '1975-09-10', 49, 'Male', 'Single', '1', 'Iloilo City', 'Filipino', '033-4567890', '09151234567', '178', '74', 'pedro.jimenez@example.com', NULL, 'Ricardo Jimenez', 'Esther Jimenez', 'Barangay 404', '4040 Cedar St, Iloilo', '2023-07-01', 0, '2024-11-09 02:59:29', NULL),
(85, 'Torres', 'Isabel', 'Santos', 'Belle', '1991-06-17', 33, 'Female', 'Married', '0', 'Bacolod', 'Filipino', '034-1234567', '09172345678', '162', '54', 'isabel.torres@example.com', 'Jose Torres', 'Felipe Torres', 'Mercedes Torres', 'Barangay 505', '5050 Birch St, Bacolod', '2023-08-01', 0, '2024-11-09 02:59:29', NULL),
(86, 'Morales', 'Rey', 'Ocampo', 'Jun', '1980-02-02', 44, 'Male', 'Widowed', '1', 'Batangas', 'Filipino', '043-9876543', '09183234567', '169', '68', 'rey.morales@example.com', NULL, 'Renato Morales', 'Cristina Morales', 'Barangay 606', '6060 Birchwood St, Batangas', '2023-09-01', 0, '2024-11-09 02:59:29', NULL),
(87, 'Lopez', 'Katherine', 'Gonzales', 'Kat', '1994-10-28', 30, 'Female', 'Single', '0', 'Cavite', 'Filipino', '046-3456789', '09145678901', '155', '48', 'katherine.lopez@example.com', NULL, 'Alfredo Lopez', 'Sandra Lopez', 'Barangay 707', '7070 Oakwood St, Cavite', '2023-10-15', 0, '2024-11-09 02:59:29', NULL),
(88, 'Villanueva', 'Miguel', 'Padilla', 'Migs', '1983-01-18', 41, 'Male', 'Married', '1', 'Zamboanga City', 'Filipino', '062-5678901', '09123456789', '172', '72', 'miguel.villanueva@example.com', 'Anna Villanueva', 'Ernesto Villanueva', 'Felipa Villanueva', 'Barangay 808', '8080 Pinewood St, Zamboanga', '2023-11-01', 0, '2024-11-09 02:59:29', NULL),
(89, 'Gomez', 'Nina', 'Valencia', 'Nin', '1995-04-22', 29, 'Female', 'Single', '1', 'Tagum City', 'Filipino', '084-3456789', '09170000000', '160', '58', 'nina.gomez@example.com', NULL, 'Manuel Gomez', 'Elena Gomez', 'Barangay 909', '9090 Willow St, Tagum', '2023-05-01', 0, '2024-11-09 02:59:29', NULL),
(90, 'Dizon', 'Rita', 'Salazar', 'Rits', '1989-03-04', 35, 'Female', 'Single', '0', 'Pasig', 'Filipino', '02-6723456', '09187654321', '155', '52', 'rita.dizon@example.com', NULL, 'Ernesto Dizon', 'Luisa Dizon', 'Barangay 123', '1234 Olive St, Pasig', '2023-06-10', 0, '2024-11-09 02:59:29', NULL),
(91, 'Perez', 'Jose', 'Almeda', 'Jojo', '1998-12-15', 26, 'Male', 'Single', '1', 'Antipolo', 'Filipino', '09123456789', '09198765432', '170', '65', 'jose.perez@example.com', NULL, 'Carlos Perez', 'Liza Perez', 'Barangay 111', '1011 Cherry St, Antipolo', '2023-07-20', 0, '2024-11-09 02:59:29', NULL),
(92, 'Cruz', 'Evelyn', 'Gomez', 'Evie', '1979-03-30', 45, 'Female', 'Married', '1', 'Manila', 'Filipino', '02-8812345', '09176543210', '162', '58', 'evelyn.cruz@example.com', 'Roberto Cruz', 'Victor Gomez', 'Lucia Gomez', 'Barangay 212', '2020 Pine St, Manila', '2023-08-15', 0, '2024-11-09 02:59:29', NULL),
(93, 'Ferrer', 'Antonio', 'Jimenez', 'Tony', '1993-05-05', 31, 'Male', 'Single', '0', 'Baguio City', 'Filipino', '074-2345678', '09161234589', '177', '72', 'antonio.ferrer@example.com', NULL, 'Felipe Ferrer', 'Marilyn Ferrer', 'Barangay 313', '1111 Cedar St, Baguio', '2023-09-10', 0, '2024-11-09 02:59:29', NULL),
(94, 'Serrano', 'Kristine', 'Lopez', 'Kris', '1991-11-20', 33, 'Female', 'Widowed', '1', 'Cebu City', 'Filipino', '032-5678910', '09172234567', '165', '62', 'kristine.serrano@example.com', 'fgbcf', 'Luis Serrano', 'Carmen Serrano', 'Barangay 414', '2222 Maple St, Cebu', '2023-10-01', 0, '2024-11-09 02:59:29', NULL),
(95, 'Garcia', 'Raul', 'Santos', 'Ralph', '1985-11-30', 39, 'Male', 'Single', '1', 'Davao City', 'Filipino', '082-1234567', '09171234567', '174', '68', 'raul.garcia@example.com', NULL, 'Juan Garcia', 'Maria Garcia', 'Barangay 523', '1234 Maple St, Davao', '2023-01-12', 0, '2024-11-09 03:02:23', NULL),
(96, 'Bautista', 'Sofia', 'Lopez', 'Sophy', '1992-03-21', 32, 'Female', 'Single', '0', 'Makati', 'Filipino', '02-7894561', '09121234567', '160', '50', 'sofia.bautista@example.com', NULL, 'Ricardo Bautista', 'Ana Bautista', 'Barangay 624', '9876 Oakwood St, Makati', '2023-02-14', 0, '2024-11-09 03:02:23', NULL),
(97, 'Mendoza', 'Daniel', 'Salvador', 'Danny', '1980-06-02', 44, 'Male', 'Married', '1', 'Cagayan de Oro', 'Filipino', '088-5678901', '09151234567', '180', '75', 'daniel.mendoza@example.com', 'Cristina Mendoza', 'Luis Mendoza', 'Carmen Mendoza', 'Barangay 725', '1234 Main St, CDO', '2023-03-10', 0, '2024-11-09 03:02:23', NULL),
(98, 'Reyes', 'Tanya', 'Gonzalez', 'Tani', '1987-02-05', 37, 'Female', 'Widowed', '1', 'Dumaguete', 'Filipino', '035-1234567', '09187654321', '158', '59', 'tanya.reyes@example.com', NULL, 'Felipe Reyes', 'Lucia Reyes', 'Barangay 826', '6789 Cedar St, Dumaguete', '2023-04-10', 0, '2024-11-09 03:02:23', NULL),
(99, 'Delacruz', 'Rico', 'Marquez', 'Ricky', '1994-07-18', 30, 'Male', 'Single', '0', 'Taguig City', 'Filipino', '02-6234567', '09192345678', '172', '70', 'rico.delacruz@example.com', NULL, 'Juan Delacruz', 'Rosario Delacruz', 'Barangay 927', '7890 Birchwood St, Taguig', '2023-05-15', 0, '2024-11-09 03:02:23', NULL),
(100, 'Lopez', 'Alyssa', 'Bautista', 'Ally', '2000-01-22', 24, 'Female', 'Single', '1', 'Cebu City', 'Filipino', '032-6543210', '09123456789', '165', '52', 'alyssa.lopez@example.com', NULL, 'Juan Lopez', 'Elena Lopez', 'Barangay 1028', '2345 Pine St, Cebu', '2023-06-02', 0, '2024-11-09 03:02:23', NULL),
(101, 'Torres', 'Gerald', 'Santos', 'Gerry', '1983-09-11', 41, 'Male', 'Married', '0', 'Bacolod', 'Filipino', '034-3216547', '09182234567', '175', '80', 'gerald.torres@example.com', 'Maria Torres', 'Felipe Torres', 'Mercedes Torres', 'Barangay 1129', '5678 Willow St, Bacolod', '2023-07-18', 0, '2024-11-09 03:02:23', NULL),
(102, 'Vargas', 'Ricardo', 'Navarro', 'Rico', '1995-08-14', 29, 'Male', 'Single', '1', 'Manila', 'Filipino', '02-4321567', '09123467890', '180', '76', 'ricardo.vargas@example.com', NULL, 'Carlos Vargas', 'Nina Vargas', 'Barangay 1230', '1234 Birchwood St, Manila', '2023-08-25', 0, '2024-11-09 03:02:23', NULL),
(103, 'Serrano', 'Veronica', 'Delos Reyes', 'Vera', '1993-12-02', 31, 'Female', 'Married', '0', 'Batangas', 'Filipino', '043-8765432', '09156789012', '160', '55', 'veronica.serrano@example.com', 'Juan Serrano', 'Rafael Delos Reyes', 'Nora Delos Reyes', 'Barangay 1331', '1111 Oakwood St, Batangas', '2023-09-10', 0, '2024-11-09 03:02:23', NULL),
(104, 'Ferrer', 'Roberto', 'Santos', 'Bert', '1980-11-25', 44, 'Male', 'Single', '1', 'Antipolo', 'Filipino', '02-2345678', '09123456790', '168', '65', 'roberto.ferrer@example.com', NULL, 'Carlos Ferrer', 'Sandra Ferrer', 'Barangay 1432', '2222 Mango St, Antipolo', '2023-10-01', 0, '2024-11-09 03:02:23', NULL),
(105, 'Dela Cruz', 'Carla', 'Morales', 'Carrie', '1987-09-08', 37, 'Female', 'Married', '1', 'Iloilo', 'Filipino', '033-8765432', '09151234578', '155', '50', 'carla.delacruz@example.com', 'Manuel Morales', 'Ricardo Morales', 'Sandra Morales', 'Barangay 1533', '3456 Oakwood St, Iloilo', '2023-10-10', 0, '2024-11-09 03:02:23', NULL),
(106, 'Cruz', 'Ivan', 'De La Cruz', 'Ivan', '1992-10-29', 32, 'Male', 'Single', '0', 'Quezon City', 'Filipino', '02-8765432', '09123456721', '174', '70', 'ivan.cruz@example.com', NULL, 'Antonio Cruz', 'Elena Cruz', 'Barangay 1634', '9876 Birchwood St, Quezon', '2023-11-05', 0, '2024-11-09 03:02:23', NULL),
(107, 'Lozano', 'Mayumi', 'Diaz', 'May', '1994-01-18', 30, 'Female', 'Single', '1', 'Cavite', 'Filipino', '046-9876543', '09162345678', '158', '53', 'mayumi.lozano@example.com', NULL, 'Juan Lozano', 'Sandra Lozano', 'Barangay 1735', '1234 Oakwood St, Cavite', '2023-12-01', 0, '2024-11-09 03:02:23', NULL),
(108, 'Gonzales', 'Oscar', 'Gomez', 'Oskie', '1986-04-12', 38, 'Male', 'Married', '0', 'Taguig', 'Filipino', '02-4567890', '09123456798', '178', '72', 'oscar.gonzales@example.com', 'Marilyn Gonzales', 'Felipe Gomez', 'Lucia Gomez', 'Barangay 1836', '8765 Pine St, Taguig', '2023-01-01', 0, '2024-11-09 03:02:23', NULL),
(109, 'Rivera', 'Francesca', 'Villanueva', 'Cheska', '1998-11-02', 26, 'Female', 'Single', '1', 'Davao', 'Filipino', '082-1236547', '09156789012', '165', '59', 'francesca.rivera@example.com', NULL, 'Antonio Rivera', 'Lucia Rivera', 'Barangay 1937', '2345 Willow St, Davao', '2023-02-15', 0, '2024-11-09 03:02:23', NULL),
(110, 'Salvador', 'Nina', 'Gonzalez', 'Nins', '1991-05-18', 33, 'Female', 'Widowed', '1', 'Bacolod City', 'Filipino', '034-7654321', '09172345678', '160', '55', 'nina.salvador@example.com', NULL, 'Felipe Salvador', 'Lucia Salvador', 'Barangay 2038', '9876 Cedar St, Bacolod', '2023-03-10', 0, '2024-11-09 03:02:23', NULL),
(111, 'Santos', 'Victor', 'Ferrer', 'Vic', '1985-02-15', 39, 'Male', 'Single', '0', 'Cagayan de Oro', 'Filipino', '088-3456789', '09123456789', '180', '77', 'victor.santos@example.com', NULL, 'Carlos Santos', 'Lucia Santos', 'Barangay 2139', '1234 Birch St, CDO', '2023-04-20', 0, '2024-11-09 03:02:23', NULL),
(112, 'Morales', 'George', 'Garcia', 'Geo', '1981-07-11', 43, 'Male', 'Married', '1', 'Baguio', 'Filipino', '074-5678901', '09123456765', '170', '74', 'george.morales@example.com', 'Cynthia Morales', 'Carlos Morales', 'Maria Morales', 'Barangay 2240', '3456 Oakwood St, Baguio', '2023-05-01', 0, '2024-11-09 03:02:23', NULL),
(113, 'Torres', 'Emma', 'Cruz', 'Em', '1993-10-10', 31, 'Female', 'Single', '0', 'Cebu City', 'Filipino', '032-6549871', '09171234567', '163', '54', 'emma.torres@example.com', NULL, 'Juan Torres', 'Liza Torres', 'Barangay 2341', '2345 Cedar St, Cebu', '2023-06-10', 0, '2024-11-09 03:02:23', NULL),
(114, 'Villanueva', 'Mia', 'Santos', 'Mimi', '1990-03-14', 34, 'Female', 'Single', '1', 'Quezon City', 'Filipino', '02-7654321', '09123456789', '159', '53', 'mia.villanueva@example.com', NULL, 'Antonio Villanueva', 'Lucia Villanueva', 'Barangay 2442', '1234 Birchwood St, QC', '2023-07-22', 0, '2024-11-09 03:02:23', NULL),
(115, 'Gomez', 'Lia', 'Delos Reyes', 'Lilly', '1998-04-25', 26, 'Female', 'Single', '1', 'Dumaguete', 'Filipino', '035-7654321', '09181234567', '160', '56', 'lia.gomez@example.com', NULL, 'Felipe Gomez', 'Sandra Gomez', 'Barangay 2543', '3456 Maple St, Dumaguete', '2023-08-12', 0, '2024-11-09 03:02:23', NULL),
(116, 'Dizon', 'Elena', 'Serrano', 'Ellie', '1992-02-09', 32, 'Female', 'Widowed', '0', 'Taguig', 'Filipino', '02-8765432', '09123456789', '154', '50', 'elena.dizon@example.com', NULL, 'Carlos Dizon', 'Marina Dizon', 'Barangay 2644', '7890 Willow St, Taguig', '2023-09-03', 0, '2024-11-09 03:02:23', NULL),
(117, 'Perez', 'Luis', 'Serrano', 'Lou', '1995-09-21', 29, 'Male', 'Single', '1', 'Manila', 'Filipino', '02-7654321', '09123456789', '179', '75', 'luis.perez@example.com', NULL, 'Antonio Perez', 'Lucia Perez', 'Barangay 2745', '1234 Oakwood St, Manila', '2023-10-19', 0, '2024-11-09 03:02:23', NULL),
(118, 'Reyes', 'Sandy', 'Lopez', 'Sands', '1988-11-03', 36, 'Female', 'Single', '1', 'Iloilo', 'Filipino', '033-3216548', '09123456787', '168', '63', 'sandy.reyes@example.com', NULL, 'Luis Reyes', 'Elena Reyes', 'Barangay 2846', '4567 Cedar St, Iloilo', '2023-11-03', 0, '2024-11-09 03:02:23', NULL);

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

--
-- Indexes for dumped tables
--

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
  MODIFY `resident_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
