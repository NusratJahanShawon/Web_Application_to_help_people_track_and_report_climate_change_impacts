-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 06:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_application_to_help_people_track_and_report_climate_change_i`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(10) NOT NULL,
  `a_name` varchar(30) DEFAULT NULL,
  `a_email` varchar(100) DEFAULT NULL,
  `a_password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'Fahim Rahman', 'fahim@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `admin_contact`
--

CREATE TABLE `admin_contact` (
  `a_id` int(10) NOT NULL,
  `a_contact` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_care_department`
--

CREATE TABLE `customer_care_department` (
  `c_dept_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_care_department`
--

INSERT INTO `customer_care_department` (`c_dept_id`) VALUES
(3);

-- --------------------------------------------------------

--
-- Table structure for table `customer_care_emp`
--

CREATE TABLE `customer_care_emp` (
  `c_emp_id` int(10) NOT NULL,
  `c_emp_name` varchar(30) DEFAULT NULL,
  `c_emp_address` varchar(200) DEFAULT NULL,
  `c_emp_contact` int(15) DEFAULT NULL,
  `c_date_of_birth` date DEFAULT NULL,
  `c_date_of_joining` date DEFAULT NULL,
  `c_year_of_experience` int(3) DEFAULT NULL,
  `c_email` varchar(100) DEFAULT NULL,
  `c_password` varchar(200) DEFAULT NULL,
  `c_manager_id` int(10) DEFAULT NULL,
  `c_dept_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_care_emp`
--

INSERT INTO `customer_care_emp` (`c_emp_id`, `c_emp_name`, `c_emp_address`, `c_emp_contact`, `c_date_of_birth`, `c_date_of_joining`, `c_year_of_experience`, `c_email`, `c_password`, `c_manager_id`, `c_dept_id`) VALUES
(2, 'Sakin', 'Mirpur', 19222, '2015-12-15', '2019-12-13', 4, 'sakin@gmail.com', '0', NULL, 3),
(3, 'Rakin', 'Uttara', 112566, '2014-12-11', '2018-12-07', 1, 'rakin@gmail.com', '00', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `data_management_department`
--

CREATE TABLE `data_management_department` (
  `d_dept_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_management_department`
--

INSERT INTO `data_management_department` (`d_dept_id`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `data_management_emp`
--

CREATE TABLE `data_management_emp` (
  `d_emp_id` int(10) NOT NULL,
  `d_emp_name` varchar(30) DEFAULT NULL,
  `d_emp_address` varchar(200) DEFAULT NULL,
  `d_emp_contact` int(15) DEFAULT NULL,
  `d_date_of_birth` date DEFAULT NULL,
  `d_date_of_joining` date DEFAULT NULL,
  `d_year_of_experience` int(3) DEFAULT NULL,
  `d_email` varchar(100) DEFAULT NULL,
  `d_password` varchar(200) DEFAULT NULL,
  `d_manager_id` int(10) DEFAULT NULL,
  `d_dept_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_management_emp`
--

INSERT INTO `data_management_emp` (`d_emp_id`, `d_emp_name`, `d_emp_address`, `d_emp_contact`, `d_date_of_birth`, `d_date_of_joining`, `d_year_of_experience`, `d_email`, `d_password`, `d_manager_id`, `d_dept_id`) VALUES
(2, 'sadia', 'airport road', 11345, '2017-12-20', '2023-12-02', 2, 'sadia@gmail.com', '000', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `general_user`
--

CREATE TABLE `general_user` (
  `u_id` int(10) NOT NULL,
  `u_name` varchar(30) DEFAULT NULL,
  `u_address` varchar(200) DEFAULT NULL,
  `u_contact` int(15) DEFAULT NULL,
  `u_email` varchar(100) DEFAULT NULL,
  `u_password` varchar(200) DEFAULT NULL,
  `a_id` int(10) DEFAULT NULL,
  `c_emp_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `general_user`
--

INSERT INTO `general_user` (`u_id`, `u_name`, `u_address`, `u_contact`, `u_email`, `u_password`, `a_id`, `c_emp_id`) VALUES
(1, 'Karim', 'Sheora', 55466, 'karim@gmail.com', '00', 1, 2),
(2, 'Kalam', 'Kochukhet', 1129, 'kalam64', '000', 1, 3),
(3, 'hashem', 'faridpur', 111, 'hashem@gmail.com', '000', 1, 3),
(4, 'aaa', 'aaa', 0, 'aaa@gmail.com', 'aaa', 1, 3),
(6, 'rana', 'dia bari', 11, 'rana29@gmail.com', '123', 1, 3);

--
-- Triggers `general_user`
--
DELIMITER $$
CREATE TRIGGER `before_insert_general_user` BEFORE INSERT ON `general_user` FOR EACH ROW BEGIN
  IF NEW.a_id IS NULL THEN
    SET NEW.a_id = (SELECT a_id FROM admin ORDER BY RAND() LIMIT 1);
  END IF;
  IF NEW.c_emp_id IS NULL THEN
    SET NEW.c_emp_id = (SELECT c_emp_id FROM customer_care_emp ORDER BY RAND() LIMIT 1);
  END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `rain_data`
--

CREATE TABLE `rain_data` (
  `r_id` int(10) UNSIGNED NOT NULL,
  `r_date` datetime NOT NULL,
  `r_time` time NOT NULL,
  `r_location` varchar(50) NOT NULL,
  `r_duration` varchar(15) NOT NULL,
  `r_intensity` varchar(50) NOT NULL,
  `r_humidity` varchar(50) NOT NULL,
  `r_windspeed` varchar(50) NOT NULL,
  `d_emp_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rain_data`
--

INSERT INTO `rain_data` (`r_id`, `r_date`, `r_time`, `r_location`, `r_duration`, `r_intensity`, `r_humidity`, `r_windspeed`, `d_emp_id`) VALUES
(1, '2023-12-20 00:00:00', '14:15:00', 'mirpur', '2 hrs', '5cm', '60%', '20kmph', NULL),
(2, '2023-12-03 00:00:00', '16:16:00', 'uttara', '4hrs', '12cm', '20%', '10%', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `requested_data`
--

CREATE TABLE `requested_data` (
  `requested_data_id` int(10) NOT NULL,
  `r_emp_id` int(10) NOT NULL,
  `c_emp_id` int(10) NOT NULL,
  `res_date` date DEFAULT NULL,
  `res_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `researched_data`
--

CREATE TABLE `researched_data` (
  `researched_data_id` int(10) NOT NULL,
  `d_emp_id` int(10) NOT NULL,
  `r_emp_id` int(10) NOT NULL,
  `res_date` date DEFAULT NULL,
  `res_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research_department`
--

CREATE TABLE `research_department` (
  `r_dept_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `research_department`
--

INSERT INTO `research_department` (`r_dept_id`) VALUES
(2);

-- --------------------------------------------------------

--
-- Table structure for table `research_emp`
--

CREATE TABLE `research_emp` (
  `r_emp_id` int(10) NOT NULL,
  `r_emp_name` varchar(30) DEFAULT NULL,
  `r_emp_address` varchar(200) DEFAULT NULL,
  `r_emp_contact` int(15) DEFAULT NULL,
  `r_date_of_birth` date DEFAULT NULL,
  `r_date_of_joining` date DEFAULT NULL,
  `r_year_of_experience` int(3) DEFAULT NULL,
  `r_email` varchar(100) DEFAULT NULL,
  `r_password` varchar(200) DEFAULT NULL,
  `r_manager_id` int(10) DEFAULT NULL,
  `r_dept_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `research_emp`
--

INSERT INTO `research_emp` (`r_emp_id`, `r_emp_name`, `r_emp_address`, `r_emp_contact`, `r_date_of_birth`, `r_date_of_joining`, `r_year_of_experience`, `r_email`, `r_password`, `r_manager_id`, `r_dept_id`) VALUES
(1, 'Naila', 'Gazipur', 1144, '2001-02-15', '2023-12-15', 5, 'naila@gmail.com', '123', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `temp_data`
--

CREATE TABLE `temp_data` (
  `t_id` int(10) NOT NULL,
  `t_date` datetime DEFAULT NULL,
  `t_time` time DEFAULT NULL,
  `t_location` varchar(150) DEFAULT NULL,
  `t_pressure` varchar(50) DEFAULT NULL,
  `t_due_point` varchar(50) DEFAULT NULL,
  `t_value` varchar(50) DEFAULT NULL,
  `t_measurement_scale` varchar(50) DEFAULT NULL,
  `d_emp_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `temp_data`
--

INSERT INTO `temp_data` (`t_id`, `t_date`, `t_time`, `t_location`, `t_pressure`, `t_due_point`, `t_value`, `t_measurement_scale`, `d_emp_id`) VALUES
(3, '0000-00-00 00:00:00', '12:17:00', 'faridpur', '12cm', '34%', '543', 'F', NULL),
(4, '2023-12-11 00:00:00', '14:17:00', 'Tejgaon', '120 p', '12 %', '23', 'F', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `admin_contact`
--
ALTER TABLE `admin_contact`
  ADD PRIMARY KEY (`a_contact`,`a_id`),
  ADD KEY `admin_contact_FK1` (`a_id`);

--
-- Indexes for table `customer_care_department`
--
ALTER TABLE `customer_care_department`
  ADD PRIMARY KEY (`c_dept_id`);

--
-- Indexes for table `customer_care_emp`
--
ALTER TABLE `customer_care_emp`
  ADD PRIMARY KEY (`c_emp_id`),
  ADD KEY `customer_care_emp_FK1` (`c_manager_id`),
  ADD KEY `customer_care_emp_FK2` (`c_dept_id`);

--
-- Indexes for table `data_management_department`
--
ALTER TABLE `data_management_department`
  ADD PRIMARY KEY (`d_dept_id`);

--
-- Indexes for table `data_management_emp`
--
ALTER TABLE `data_management_emp`
  ADD PRIMARY KEY (`d_emp_id`),
  ADD KEY `data_management_emp_FK1` (`d_manager_id`) USING BTREE,
  ADD KEY `data_management_emp_FK2` (`d_dept_id`) USING BTREE;

--
-- Indexes for table `general_user`
--
ALTER TABLE `general_user`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `general_user_FK1` (`a_id`),
  ADD KEY `general_user__FK2` (`c_emp_id`);

--
-- Indexes for table `rain_data`
--
ALTER TABLE `rain_data`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `d_emp_id` (`d_emp_id`);

--
-- Indexes for table `requested_data`
--
ALTER TABLE `requested_data`
  ADD PRIMARY KEY (`requested_data_id`,`c_emp_id`,`r_emp_id`),
  ADD KEY `requested_data_FK1` (`c_emp_id`),
  ADD KEY `requested_data_FK2` (`r_emp_id`);

--
-- Indexes for table `researched_data`
--
ALTER TABLE `researched_data`
  ADD PRIMARY KEY (`researched_data_id`,`d_emp_id`,`r_emp_id`),
  ADD KEY `researched_data_FK1` (`d_emp_id`),
  ADD KEY `researched_data_FK2` (`r_emp_id`);

--
-- Indexes for table `research_department`
--
ALTER TABLE `research_department`
  ADD PRIMARY KEY (`r_dept_id`);

--
-- Indexes for table `research_emp`
--
ALTER TABLE `research_emp`
  ADD PRIMARY KEY (`r_emp_id`),
  ADD KEY `research_emp_FK1` (`r_manager_id`),
  ADD KEY `research_emp_FK2` (`r_dept_id`);

--
-- Indexes for table `temp_data`
--
ALTER TABLE `temp_data`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `d_emp_id` (`d_emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_care_emp`
--
ALTER TABLE `customer_care_emp`
  MODIFY `c_emp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_management_emp`
--
ALTER TABLE `data_management_emp`
  MODIFY `d_emp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `general_user`
--
ALTER TABLE `general_user`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rain_data`
--
ALTER TABLE `rain_data`
  MODIFY `r_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `requested_data`
--
ALTER TABLE `requested_data`
  MODIFY `requested_data_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `researched_data`
--
ALTER TABLE `researched_data`
  MODIFY `researched_data_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research_emp`
--
ALTER TABLE `research_emp`
  MODIFY `r_emp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `temp_data`
--
ALTER TABLE `temp_data`
  MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_contact`
--
ALTER TABLE `admin_contact`
  ADD CONSTRAINT `admin_contact_FK1` FOREIGN KEY (`a_id`) REFERENCES `admin` (`a_id`);

--
-- Constraints for table `customer_care_emp`
--
ALTER TABLE `customer_care_emp`
  ADD CONSTRAINT `customer_care_emp_FK1` FOREIGN KEY (`c_manager_id`) REFERENCES `customer_care_emp` (`c_emp_id`),
  ADD CONSTRAINT `customer_care_emp_FK2` FOREIGN KEY (`c_dept_id`) REFERENCES `customer_care_department` (`c_dept_id`);

--
-- Constraints for table `data_management_emp`
--
ALTER TABLE `data_management_emp`
  ADD CONSTRAINT `data_management_department_FK1` FOREIGN KEY (`d_manager_id`) REFERENCES `data_management_emp` (`d_emp_id`),
  ADD CONSTRAINT `data_management_department_FK2` FOREIGN KEY (`d_dept_id`) REFERENCES `data_management_department` (`d_dept_id`);

--
-- Constraints for table `general_user`
--
ALTER TABLE `general_user`
  ADD CONSTRAINT `general_user_FK1` FOREIGN KEY (`a_id`) REFERENCES `admin` (`a_id`),
  ADD CONSTRAINT `general_user__FK2` FOREIGN KEY (`c_emp_id`) REFERENCES `customer_care_emp` (`c_emp_id`);

--
-- Constraints for table `rain_data`
--
ALTER TABLE `rain_data`
  ADD CONSTRAINT `rain_data_ibfk_1` FOREIGN KEY (`d_emp_id`) REFERENCES `data_management_emp` (`d_emp_id`);

--
-- Constraints for table `requested_data`
--
ALTER TABLE `requested_data`
  ADD CONSTRAINT `requested_data_FK1` FOREIGN KEY (`c_emp_id`) REFERENCES `customer_care_emp` (`c_emp_id`),
  ADD CONSTRAINT `requested_data_FK2` FOREIGN KEY (`r_emp_id`) REFERENCES `research_emp` (`r_emp_id`);

--
-- Constraints for table `researched_data`
--
ALTER TABLE `researched_data`
  ADD CONSTRAINT `researched_data_FK1` FOREIGN KEY (`d_emp_id`) REFERENCES `data_management_emp` (`d_emp_id`),
  ADD CONSTRAINT `researched_data_FK2` FOREIGN KEY (`r_emp_id`) REFERENCES `research_emp` (`r_emp_id`);

--
-- Constraints for table `research_emp`
--
ALTER TABLE `research_emp`
  ADD CONSTRAINT `research_emp_FK1` FOREIGN KEY (`r_manager_id`) REFERENCES `research_emp` (`r_emp_id`),
  ADD CONSTRAINT `research_emp_FK2` FOREIGN KEY (`r_dept_id`) REFERENCES `research_department` (`r_dept_id`);

--
-- Constraints for table `temp_data`
--
ALTER TABLE `temp_data`
  ADD CONSTRAINT `temp_data_ibfk_1` FOREIGN KEY (`d_emp_id`) REFERENCES `data_management_emp` (`d_emp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
