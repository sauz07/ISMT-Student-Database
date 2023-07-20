-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 25, 2019 at 03:50 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Docse_mis`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `course_id` varchar(20) NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `course_credit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_enroll`
--

DROP TABLE IF EXISTS `course_enroll`;
CREATE TABLE `course_enroll` (
  `course_id` varchar(20) NOT NULL,
  `semester` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `educational_background_info`
--

DROP TABLE IF EXISTS `educational_background_info`;
CREATE TABLE `educational_background_info` (
  `personal_id` varchar(10) NOT NULL,
  `s_examination` varchar(20) DEFAULT NULL,
  `s_exam_year` varchar(20) DEFAULT NULL,
  `s_aggrigrate_marks` varchar(20) DEFAULT NULL,
  `s_exam_roll` varchar(20) DEFAULT NULL,
  `s_institute` varchar(30) DEFAULT NULL,
  `h_examination` varchar(20) DEFAULT NULL,
  `h_exam_year` year(4) DEFAULT NULL,
  `h_aggrigrate_marks` int(20) DEFAULT NULL,
  `h_exam_roll` varchar(20) DEFAULT NULL,
  `h_institute` varchar(30) DEFAULT NULL,
  `o_examination` varchar(20) DEFAULT NULL,
  `o_exam_year` year(4) DEFAULT NULL,
  `o_aggrigrate_marks` int(7) DEFAULT NULL,
  `o_exam_roll` varchar(20) DEFAULT NULL,
  `o_institute` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educational_background_info`
--

INSERT INTO `educational_background_info` (`personal_id`, `s_examination`, `s_exam_year`, `s_aggrigrate_marks`, `s_exam_roll`, `s_institute`, `h_examination`, `h_exam_year`, `h_aggrigrate_marks`, `h_exam_roll`, `h_institute`, `o_examination`, `o_exam_year`, `o_aggrigrate_marks`, `o_exam_roll`, `o_institute`) VALUES
('7310301', 'Nepal Govt', '2005', '71', '1001002', 'SLC', 'HSEB', 2008, 64, '82291101', 'Shree Hanteswor Ma Bi', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ku_cat`
--

DROP TABLE IF EXISTS `ku_cat`;
CREATE TABLE `ku_cat` (
  `ku_cat_id` varchar(20) NOT NULL,
  `ku_cat_score` int(4) NOT NULL,
  `ku_cat_rank` int(6) NOT NULL,
  `physics` int(11) DEFAULT NULL,
  `chemistry` int(11) DEFAULT NULL,
  `math` int(11) DEFAULT NULL,
  `personal_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ku_cat`
--

INSERT INTO `ku_cat` (`ku_cat_id`, `ku_cat_score`, `ku_cat_rank`, `physics`, `chemistry`, `math`, `personal_id`) VALUES
('811', 620, 1, 78, 87, 88, '7310301');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

DROP TABLE IF EXISTS `personal_info`;
CREATE TABLE `personal_info` (
  `personal_id` varchar(15) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob_ad` date NOT NULL,
  `dob_bs` date NOT NULL,
  `citizenship_number` varchar(15) NOT NULL,
  `permanent_address_town` varchar(20) NOT NULL,
  `permanent_address_district` varchar(20) NOT NULL,
  `permanent_address_country` varchar(20) NOT NULL,
  `permanent_address_contact` varchar(15) DEFAULT NULL,
  `temporary_address_town` varchar(20) NOT NULL,
  `temporary_address_district` varchar(20) NOT NULL,
  `temporary_address_country` varchar(20) NOT NULL,
  `temporary_address_contact` varchar(15) DEFAULT NULL,
  `personal_contact_email` varchar(30) NOT NULL,
  `personal_contact_phone` varchar(15) DEFAULT NULL,
  `personal_contact_mobile` varchar(15) DEFAULT NULL,
  `birth_town` varchar(20) NOT NULL,
  `birth_district` varchar(20) NOT NULL,
  `birth_country` varchar(20) NOT NULL,
  `photo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`personal_id`, `first_name`, `middle_name`, `last_name`, `gender`, `dob_ad`, `dob_bs`, `citizenship_number`, `permanent_address_town`, `permanent_address_district`, `permanent_address_country`, `permanent_address_contact`, `temporary_address_town`, `temporary_address_district`, `temporary_address_country`, `temporary_address_contact`, `personal_contact_email`, `personal_contact_phone`, `personal_contact_mobile`, `birth_town`, `birth_district`, `birth_country`, `photo`) VALUES
('7310301', 'Siddhartha', '', 'Gautam', 'Male', '1992-08-24', '2049-05-08', '10980394', 'Bhadrapur', 'Jhapa', 'Nepal', '9841842497', '', '', '', '', 'sid_dus@yahoo.com', '', '478066115', 'Biratnagar', 'Morang', 'Nepal', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

DROP TABLE IF EXISTS `student_info`;
CREATE TABLE `student_info` (
  `registration_id` varchar(15) NOT NULL,
  `program` varchar(25) NOT NULL,
  `enroll_year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`registration_id`, `program`, `enroll_year`) VALUES
('7310301', 'computer science', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `username` varchar(15) NOT NULL,
  `password` longtext NOT NULL,
  `user_type` varchar(15) NOT NULL,
  `personal_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `user_type`, `personal_id`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `educational_background_info`
--
ALTER TABLE `educational_background_info`
  ADD PRIMARY KEY (`personal_id`);

--
-- Indexes for table `ku_cat`
--
ALTER TABLE `ku_cat`
  ADD PRIMARY KEY (`personal_id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`personal_id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`registration_id`(10));

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`personal_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `educational_background_info`
--
ALTER TABLE `educational_background_info`
  ADD CONSTRAINT `personal_id` FOREIGN KEY (`personal_id`) REFERENCES `personal_info` (`personal_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
