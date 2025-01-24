-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2025 at 04:21 AM
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
-- Table structure for table `add_vaccine`
--

CREATE TABLE `add_vaccine` (
  `vac_id` int(11) NOT NULL,
  `vaccine_name` varchar(255) NOT NULL,
  `vac_stoke` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_vaccine`
--

INSERT INTO `add_vaccine` (`vac_id`, `vaccine_name`, `vac_stoke`) VALUES
(1, 'chicken', 100),
(4, 'pfizer', 50),
(6, 'polio', 45);

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
  `child_status` enum('pending','approved','rejected') DEFAULT 'pending',
  `vac_report` enum('vaccinated','not vaccinated') DEFAULT 'not vaccinated'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child_detail`
--

INSERT INTO `child_detail` (`id`, `ch_name`, `pa_name`, `pa_email`, `ch_age`, `ch_address`, `vac_date`, `ch_dob`, `vac_name`, `hos_name`, `pa_massege`, `child_status`, `vac_report`) VALUES
(1, 'iman', 'jahanzaib', 'jahan@gmail.com', 18, 'mpr colony moghopir road karachi', '2025-02-04', '2006-01-01', 'hepatitis', 'Agha Khan Hospital', 'this is last vaccine', 'approved', 'vaccinated'),
(4, 'umar alam', 'badar alam', 'badar@gmail.com', 18, 'mpr colony block c', '2025-01-23', '2022-06-16', 'hepatitis', 'saifee Hospital', 'this is second vaccine', 'approved', 'vaccinated'),
(5, 'ali', 'ahmad', 'ahmad@gmail.com', 12, 'saddar', '2025-01-06', '2012-06-11', 'hepatitis', 'ziauddin Hospital', 'this is first vaccine', 'approved', 'vaccinated'),
(6, 'imran', 'jahanzaib', 'ik775239@gmail.com', 20, 'mpr colony moghopir road karachi', '2025-01-28', '2005-01-31', 'polio', 'ziauddin Hospital', 'this is first vaccine', 'approved', 'vaccinated'),
(7, 'umar', 'alam', 'alam@gmail.com', 9, 'kimari karachi', '2024-12-31', '2025-01-10', 'hepatitis', 'ziauddin Hospital', 'lgn ;gflklhkjl klg', 'pending', ''),
(8, 'ahmad', 'hassan', 'hassan@gmail.com', 18, 'baldia town karachi', '2025-01-07', '2025-01-11', 'corona', 'saifee Hospital', 'jgf ,lsnf ,mg jgn kjlfg kjf ls', 'pending', ''),
(10, 'Abdullah', 'muhammad', 'mhm@gmail.com', 19, 'qasba colony karachi', '2025-01-31', '2025-01-03', 'hepatitis', 'saifee Hospital', 'adsf/ads ', 'approved', 'vaccinated'),
(15, 'sultan', 'usman', 'usman@gmail.com', 21, 'five star chorangi', '2025-01-23', '2025-01-21', 'polio', 'ziauddin Hospital', 'dk,nadsf asd', 'pending', ''),
(16, 'sultan', 'usman', 'usman@gmail.com', 21, 'five star chorangi', '2025-01-23', '2025-01-21', 'polio', 'ziauddin Hospital', 'dk,nadsf asd', 'pending', ''),
(17, 'sultan', 'usman', 'usman@gmail.com', 21, 'five star chorangi', '2025-01-23', '2025-01-21', 'polio', 'ziauddin Hospital', 'dk,nadsf asd', 'pending', ''),
(18, 'sultan', 'usman', 'usman@gmail.com', 21, 'five star chorangi', '2025-01-23', '2025-01-21', 'polio', 'ziauddin Hospital', 'dk,nadsf asd', 'approved', 'vaccinated'),
(19, 'sultan', 'umar', 'umar@gmail.com', 4, 'kjdahfhaf', '2025-01-07', '2025-02-08', 'hepatitis', 'Agha Khan Hospital', 'dfas', 'pending', ''),
(20, 'abu bakar', 'usman', 'usman@gmail.com', 2, 'five star chorangi', '2024-12-30', '2025-01-31', '', '', 'df ad akdjk;ljf  ;alfj;a ;a j;a;a ldkj ', 'rejected', ''),
(21, 'khuzaima', 'abdul rehaman', 'abdul@gmail.com', 12, 'kjdahfhaf', '2025-01-01', '2025-01-17', '', '', 'das; ;l kljkl ;kj;l  ', 'approved', ''),
(22, 'khuzaima', 'abdul rehaman', 'abdul@gmail.com', 12, 'kjdahfhaf', '2025-01-01', '2025-01-17', '', '', 'das; ;l kljkl ;kj;l  ', 'pending', ''),
(23, 'abu zar', 'sufyan', 'sufii@gmal.com', 5, 'mpr colony moghopir road karachi', '2025-01-13', '2025-01-31', '', '', 'aklfjadjf lkadfl ak f', 'rejected', ''),
(24, 'abu zar', 'sufyan', 'sufii@gmal.com', 5, 'mpr colony moghopir road karachi', '2025-01-13', '2025-01-31', '', '', 'aklfjadjf lkadfl ak f', 'pending', ''),
(25, 'ziauddin', 'jan sher', 'jan@gmail.com', 18, 'baldia town karachi', '2024-12-31', '2025-02-07', '', '', 'na a dfa ', 'approved', 'vaccinated'),
(26, 'ammar', 'azahar', 'azhar@gmail.com', 12, 'kimari karachi', '2025-01-22', '2025-01-31', '', '', 'hd osi isjua ijd jkj; ;aks', 'approved', 'vaccinated'),
(27, 'sultan', 'usman', 'usman@gmail.com', 42, 'saddar', '2025-02-04', '2025-02-07', '', '', 'adf ', 'pending', 'not vaccinated');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `username`, `email`, `subject`, `message`) VALUES
(2, 'imran', 'ik775239@gmail.com', 'your services', 'good');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup_det`
--

INSERT INTO `signup_det` (`id`, `name`, `email`, `password`, `rpassword`, `role`) VALUES
(16, 'admin', 'admin@gmail.com', 'admin123', 'admin123', 'admin'),
(17, 'zeeshan', 'zee@gmail.com', 'zee', 'zee', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_records`
--

CREATE TABLE `vaccine_records` (
  `id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `vaccine_name` varchar(255) NOT NULL,
  `Date_of_vaccination` date NOT NULL,
  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccine_records`
--

INSERT INTO `vaccine_records` (`id`, `child_id`, `vaccine_name`, `Date_of_vaccination`, `hospital_id`) VALUES
(1, 10, 'polio', '2025-01-08', 48);

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
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
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
-- Indexes for table `vaccine_records`
--
ALTER TABLE `vaccine_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_child_id` (`child_id`),
  ADD KEY `fk_hospital_id` (`hospital_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_vaccine`
--
ALTER TABLE `add_vaccine`
  MODIFY `vac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `child_detail`
--
ALTER TABLE `child_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hospital_det`
--
ALTER TABLE `hospital_det`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `signup_det`
--
ALTER TABLE `signup_det`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `vaccine_records`
--
ALTER TABLE `vaccine_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vaccine_records`
--
ALTER TABLE `vaccine_records`
  ADD CONSTRAINT `fk_child_id` FOREIGN KEY (`child_id`) REFERENCES `child_detail` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_hospital_id` FOREIGN KEY (`hospital_id`) REFERENCES `hospital_det` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
