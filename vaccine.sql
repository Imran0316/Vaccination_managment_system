-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2025 at 06:14 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `pa_massege` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child_detail`
--

INSERT INTO `child_detail` (`id`, `ch_name`, `pa_name`, `pa_email`, `ch_age`, `ch_address`, `vac_date`, `ch_dob`, `vac_name`, `hos_name`, `pa_massege`) VALUES
(1, 'iman', 'jahanzaib', 'jahan@gmail.com', 18, 'mpr colony moghopir road karachi', '2025-02-04', '2006-01-01', 'hepatitis', 'Agha Khan Hospital', 'this is last vaccine'),
(4, 'umar alam', 'badar alam', 'badar@gmail.com', 18, 'mpr colony block c', '2025-01-23', '2022-06-16', 'hepatitis', 'saifee Hospital', 'this is second vaccine');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital_det`
--

INSERT INTO `hospital_det` (`id`, `hosp_name`, `hosp_email`, `hosp_address`, `hosp_contact`, `hosp_city`, `hosp_opt`, `hosp_clot`, `hosp_image`) VALUES
(37, 'liaqat national hospital', 'lnh@gmail.com', 'jamshed road ', 2147483647, 'karachi', '11:30:00', '11:30:00', ''),
(38, 'ziauddin', 'zia@gmail.com', 'gulberg town', 345234324, 'karachi', '02:43:00', '03:43:00', '234.png'),
(39, 'saife hospital', 'saifee@gmail.com', 'jamshed road ', 323443244, 'sindh', '20:00:00', '05:47:00', '234.png'),
(40, 'saife hospital', 'saifee@gmail.com', 'jamshed road ', 323443244, 'sindh', '20:00:00', '05:47:00', '234.png'),
(41, 'tabba heart', 'tabba@gmail.com', 'karachi', 345234324, 'islamabad', '23:54:00', '12:53:00', ''),
(42, 'liaqat national hospital', 'liaqat@gmail.com', 'jamshed town', 345234324, 'islamabad', '04:04:00', '07:04:00', '234.png'),
(43, '', '', '', 0, '', '00:00:00', '00:00:00', 'download.jpg'),
(44, 'Al_shifa', 'alshifa@gmail.com', 'makran', 2147483647, 'balochistan', '22:26:00', '07:26:00', '234.png'),
(45, 'Al_shifa', 'alshifa@gmail.com', 'makran', 2147483647, 'balochistan', '19:30:00', '01:36:00', '234.png'),
(46, 'Al_shifa', 'alshifa@gmail.com', 'makran', 2147483647, 'islamabad', '20:31:00', '13:31:00', '234.png');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup_det`
--

INSERT INTO `signup_det` (`id`, `name`, `email`, `password`, `rpassword`, `role`) VALUES
(16, 'admin', 'admin@gmail.com', 'admin123', 'admin123', 'admin');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `child_detail`
--
ALTER TABLE `child_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hospital_det`
--
ALTER TABLE `hospital_det`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `signup_det`
--
ALTER TABLE `signup_det`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
