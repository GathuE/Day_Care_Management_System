-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 03:54 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lilifee_system_2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrative_users`
--

CREATE TABLE `administrative_users` (
  `ID` int(11) NOT NULL,
  `status` varchar(22) NOT NULL,
  `username` varchar(25) NOT NULL,
  `role` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `security_question` int(11) NOT NULL,
  `security_answer` varchar(255) NOT NULL,
  `user_ip` varchar(25) NOT NULL,
  `registered_time` varchar(25) NOT NULL,
  `registered_date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrative_users`
--

INSERT INTO `administrative_users` (`ID`, `status`, `username`, `role`, `profile_pic`, `phone_number`, `email`, `password`, `security_question`, `security_answer`, `user_ip`, `registered_time`, `registered_date`) VALUES
(1, 'Active', 'Administrator', 'Administrator', 'administrator.png', '0712345678', 'admin@system.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '1f3870be274f6c49b3e31a0c6728957f', '127.0.0.1', '00:00', '00-00-2022'),
(2, 'Active', 'Accountant', 'Accountant', 'accountant.png', '0700111222', 'accountant@system.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '1f3870be274f6c49b3e31a0c6728957f', '127.0.0.1', '00:00', '00-00-2022'),
(3, 'Active', 'Secretary', 'Secretary', 'secretary.png', '0700222333', 'secretary@system.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '1f3870be274f6c49b3e31a0c6728957f', '127.0.0.1', '00:00', '00-00-2022'),
(4, 'Inactive', 'Hrm', 'HR', 'hr.png', '0700333444', 'hr@system.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '1f3870be274f6c49b3e31a0c6728957f', '127.0.0.1', '00:00', '00-00-2022');

-- --------------------------------------------------------

--
-- Table structure for table `system_credentials`
--

CREATE TABLE `system_credentials` (
  `c_id` int(11) NOT NULL,
  `system_title` varchar(255) NOT NULL,
  `system_icon` varchar(255) NOT NULL,
  `system_author` varchar(255) NOT NULL,
  `author_website` varchar(255) NOT NULL,
  `author_contact` varchar(255) NOT NULL,
  `user_ip` varchar(25) NOT NULL,
  `upload_time` varchar(25) NOT NULL,
  `upload_date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_credentials`
--

INSERT INTO `system_credentials` (`c_id`, `system_title`, `system_icon`, `system_author`, `author_website`, `author_contact`, `user_ip`, `upload_time`, `upload_date`) VALUES
(1, 'system_name', 'system.ico', 'Emmanuel Gathu', 'authors_website.co.ke', '0711530740', '127.0.0.1', '00:00', '00-00-2022');

-- --------------------------------------------------------

--
-- Table structure for table `system_images`
--

CREATE TABLE `system_images` (
  `pic_id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pic_name` varchar(255) NOT NULL,
  `user_ip` varchar(25) NOT NULL,
  `upload_time` varchar(25) NOT NULL,
  `upload_date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_images`
--

INSERT INTO `system_images` (`pic_id`, `user`, `pic_name`, `user_ip`, `upload_time`, `upload_date`) VALUES
(1, 'system', 'logo.png', '127.0.0.1', '00:00', '00-00-2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrative_users`
--
ALTER TABLE `administrative_users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `system_credentials`
--
ALTER TABLE `system_credentials`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `system_images`
--
ALTER TABLE `system_images`
  ADD PRIMARY KEY (`pic_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrative_users`
--
ALTER TABLE `administrative_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `system_credentials`
--
ALTER TABLE `system_credentials`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `system_images`
--
ALTER TABLE `system_images`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
