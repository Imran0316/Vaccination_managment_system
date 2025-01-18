-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2025 at 07:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccine`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_vaccine`
--

CREATE TABLE `add_vaccine` (
  `vac_id` int(11) NOT NULL,
  `vaccine_name` varchar(255) NOT NULL,
  `vac_stoke` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_vaccine`
--

INSERT INTO `add_vaccine` (`vac_id`, `vaccine_name`, `vac_stoke`) VALUES
(1, 'chicken', 100);

-- --------------------------------------------------------

--
-- Table structure for table `child_detail`
--

CREATE TABLE `child_detail` (
  `id` int(11) NOT NULL,
  `ch_name` varchar(255) NOT NULL,
  `pa_name` varchar(255) NOT NULL,
  `pa_email` varchar(255) NOT NULL,
  `ch_age` int(11) NOT NULL,
  `ch_address` varchar(255) NOT NULL,
  `vac_date` date NOT NULL,
  `ch_dob` date NOT NULL,
  `vac_name` varchar(255) NOT NULL,
  `hos_name` varchar(255) NOT NULL,
  `pa_massege` varchar(300) NOT NULL,
  `child_status` enum('pending','approved','rejected') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `child_detail`
--

INSERT INTO `child_detail` (`id`, `ch_name`, `pa_name`, `pa_email`, `ch_age`, `ch_address`, `vac_date`, `ch_dob`, `vac_name`, `hos_name`, `pa_massege`, `child_status`) VALUES
(1, 'iman', 'jahanzaib', 'jahan@gmail.com', 18, 'mpr colony moghopir road karachi', '2025-02-04', '2006-01-01', 'hepatitis', 'Agha Khan Hospital', 'this is last vaccine', 'approved'),
(4, 'umar alam', 'badar alam', 'badar@gmail.com', 18, 'mpr colony block c', '2025-01-23', '2022-06-16', 'hepatitis', 'saifee Hospital', 'this is second vaccine', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_det`
--

CREATE TABLE `hospital_det` (
  `id` int(11) NOT NULL,
  `hosp_name` varchar(255) NOT NULL,
  `hosp_email` varchar(255) NOT NULL,
  `hosp_address` varchar(255) NOT NULL,
  `hosp_contact` int(11) NOT NULL,
  `hosp_city` varchar(255) NOT NULL,
  `hosp_opt` time NOT NULL,
  `hosp_clot` time NOT NULL,
  `hosp_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hospital_det`
--

INSERT INTO `hospital_det` (`id`, `hosp_name`, `hosp_email`, `hosp_address`, `hosp_contact`, `hosp_city`, `hosp_opt`, `hosp_clot`, `hosp_image`) VALUES
(37, 'liaqat national hospital', 'lnh@gmail.com', 'jamshed road ', 2147483647, 'karachi', '11:30:00', '11:30:00', ''),
(38, 'ziauddin', 'zia@gmail.com', 'gulberg town', 345234324, 'karachi', '02:43:00', '03:43:00', '234.png'),
(39, 'saife hospital', 'saifee@gmail.com', 'jamshed road ', 323443244, 'sindh', '20:00:00', '05:47:00', '234.png'),
(48, 'ziauddin hospital', 'zia@gmail.com', 'north nazimabad', 345234324, 'karachi', '08:00:00', '20:59:00', 'ziauddin.png'),
(49, 'liaqat national hospital', 'liaqat@gmail.com', 'gulberg town', 379283773, 'karachi', '06:19:00', '04:19:00', 'liaqat (1).png'),
(50, 'saife hospital', 'saifee@gmail.com', 'north nazimabad', 345234324, 'karachi', '00:20:00', '11:20:00', 'saifee.png'),
(51, 'agha khan', 'aghakhan@gmail.com', 'gulberg town', 323443244, 'karachi', '13:00:00', '17:59:00', 'agha.png');

-- --------------------------------------------------------

--
-- Table structure for table `signup_det`
--

CREATE TABLE `signup_det` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rpassword` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `signup_det`
--

INSERT INTO `signup_det` (`id`, `name`, `email`, `password`, `rpassword`, `role`) VALUES
(16, 'admin', 'admin@gmail.com', 'admin123', 'admin123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_vaccine`
--
ALTER TABLE `add_vaccine`
  ADD PRIMARY KEY (`vac_id`);

--
-- Indexes for table `child_detail`
--
ALTER TABLE `child_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_det`
--
ALTER TABLE `hospital_det`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup_det`
--
ALTER TABLE `signup_det`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_vaccine`
--
ALTER TABLE `add_vaccine`
  MODIFY `vac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `child_detail`
--
ALTER TABLE `child_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hospital_det`
--
ALTER TABLE `hospital_det`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `signup_det`
--
ALTER TABLE `signup_det`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
