-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2024 at 04:06 AM
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
(1, 21313, '2024-02-02', 'ghjk', 'hjk', 'hj', 9845, 0, '2024-02-03', 'hj', 'vvhbjn', 0, 'hbj', 'hjn', '2024-02-02', 'j', 'j', 'j', '2024-10-17 09:40:28', 0),
(2, 89465, '2024-02-02', 'hjk', 'hj', 'jkm', 9456132, 0, '2024-02-02', 'hbn', 'dcs', 0, 'fds', 'fds20', '2024-02-03', 'file-sample_150kB.pdf', 'file-sample_150kB.pdf', 'file-sample_150kB.pdf', '2024-10-17 09:57:37', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `settlement`
--
ALTER TABLE `settlement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `settlement`
--
ALTER TABLE `settlement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
