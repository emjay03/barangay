-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2024 at 04:10 PM
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
-- Table structure for table `certicate`
--

CREATE TABLE `certicate` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `placebirth` varchar(255) NOT NULL,
  `findings` varchar(255) NOT NULL,
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
(16, 'Barangay', 'd', 'd', '2024-11-09', 'd', NULL, '', '', '2024-11-03', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certicate`
--
ALTER TABLE `certicate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certicate`
--
ALTER TABLE `certicate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
