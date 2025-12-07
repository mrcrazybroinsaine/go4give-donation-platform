-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 06:43 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `go4give`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `name`, `phone`, `address`, `email`, `password`, `date`, `status`) VALUES
(1, 'admin', 1234567899, 'mangalore', 'admin@gmail.com', '12345', '2023-06-27 09:13:55', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `do_id` int(11) NOT NULL,
  `do_type` varchar(100) NOT NULL,
  `d_id` int(11) NOT NULL,
  `do_amount` int(11) NOT NULL,
  `do_date` datetime NOT NULL DEFAULT current_timestamp(),
  `o_id` int(11) DEFAULT NULL,
  `do_description` varchar(100) NOT NULL,
  `fu_id` int(11) DEFAULT NULL,
  `do_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`do_id`, `do_type`, `d_id`, `do_amount`, `do_date`, `o_id`, `do_description`, `fu_id`, `do_status`) VALUES
(1, 'rsfjsf', 1, 1000, '2023-06-21 12:30:33', 1, 'hhkjkjhh', 0, ''),
(2, 'rsfjsf', 1, 104398, '2023-06-21 12:30:33', 1, 'hhkjkjhh', 0, ''),
(3, 'chair', 2, 0, '2023-06-30 21:22:16', 0, 'lsf qyt 39', 0, ''),
(4, 'amount', 0, 1000, '2023-06-30 21:23:36', 0, 'akdjkf adf  sdkf', 1, ''),
(5, 'chair', 0, 0, '2023-06-30 22:30:33', 0, 'quantity 200', 0, ''),
(6, 'chair', 0, 0, '2023-06-30 22:32:15', 0, '2009 qty chairs', NULL, ''),
(7, 'chair', 0, 0, '2023-06-30 22:34:17', 0, '300 chairs', NULL, ''),
(8, 'chair', 1, 0, '2023-06-30 22:34:35', 0, '300 chairs', NULL, ''),
(9, 'chair', 1, 0, '2023-06-30 22:34:49', 6, '300 chairs', NULL, 'receipt'),
(10, 'chair', 1, 0, '2023-06-30 22:35:19', 6, '300 chairs', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `d_id` int(11) NOT NULL,
  `d_email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `d_name` varchar(100) NOT NULL,
  `d_phone` bigint(20) NOT NULL,
  `d_age` int(11) NOT NULL,
  `d_status` varchar(100) NOT NULL,
  `d_date` datetime NOT NULL DEFAULT current_timestamp(),
  `d_address` varchar(100) NOT NULL,
  `d_profile` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`d_id`, `d_email`, `password`, `d_name`, `d_phone`, `d_age`, `d_status`, `d_date`, `d_address`, `d_profile`) VALUES
(1, 'doner@gmail.com', '12345', 'doner1', 1211123123, 30, 'active', '2023-06-21 08:24:31', 'bangalore', 'sfadfafd'),
(2, 'kiran@gmail.com', '12345', 'kiran', 9845623000, 30, '', '2023-06-30 18:26:34', 'mangalore', 'profile/screenshot.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `f_msg` varchar(100) NOT NULL,
  `f_date` datetime NOT NULL DEFAULT current_timestamp(),
  `f_status` varchar(100) NOT NULL,
  `o_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_msg`, `f_date`, `f_status`, `o_id`, `d_id`) VALUES
(1, 'ghmjhmj', '2023-06-21 08:28:14', '', 1, 1),
(2, 'hlwllo', '2023-06-30 22:47:43', '', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fundraiser`
--

CREATE TABLE `fundraiser` (
  `fu_id` int(11) NOT NULL,
  `fu_amt` bigint(100) NOT NULL,
  `fu_desc` varchar(100) NOT NULL,
  `fu_date` datetime NOT NULL DEFAULT current_timestamp(),
  `lst_date` date NOT NULL,
  `poster` varchar(500) NOT NULL,
  `cause` varchar(100) NOT NULL,
  `location` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fundraiser`
--

INSERT INTO `fundraiser` (`fu_id`, `fu_amt`, `fu_desc`, `fu_date`, `lst_date`, `poster`, `cause`, `location`) VALUES
(1, 8999, 'bangalore cause', '2023-06-21 11:18:03', '2023-06-30', 'poster/Go4Give-logos_.jpeg', 'karnataka', 'kasaragod');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `l_id` int(11) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `l_status` varchar(100) NOT NULL,
  `l_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`l_id`, `l_name`, `l_status`, `l_date`) VALUES
(11, 'kasaragod', 'active', '2023-06-15 09:53:42'),
(15, 'kasaragod3', 'active', '2023-06-15 09:53:42'),
(16, 'kasaragod4', 'active', '2023-06-15 09:53:42');

-- --------------------------------------------------------

--
-- Table structure for table `orphanage`
--

CREATE TABLE `orphanage` (
  `o_id` int(11) NOT NULL,
  `l_id` int(11) NOT NULL,
  `o_photo` varchar(100) NOT NULL,
  `o_name` varchar(100) NOT NULL,
  `o_email` varchar(100) NOT NULL,
  `o_password` varchar(100) NOT NULL,
  `o_phn` bigint(10) NOT NULL,
  `o_address` varchar(100) NOT NULL,
  `o_date` datetime NOT NULL DEFAULT current_timestamp(),
  `o_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orphanage`
--

INSERT INTO `orphanage` (`o_id`, `l_id`, `o_photo`, `o_name`, `o_email`, `o_password`, `o_phn`, `o_address`, `o_date`, `o_status`) VALUES
(1, 11, 'sdfdssf', 'ABCD', '', '', 3434343, 'sdfsd', '2023-06-21 08:58:37', 'Rejected'),
(2, 16, 'profile/Go4Give-logos_.jpeg', 'o', 'o@gmail.com', '12345', 9876543210, 'fsfsd', '2023-06-28 12:10:09', 'pending'),
(4, 11, 'profile/screenshot.jpg', 'op', 'op@gmail.com', '', 123456789, 'mangalore', '2023-06-30 18:07:05', 'pending'),
(5, 11, 'profile/screenshot.jpg', 'oph', 'oph@gmail.com', '', 123456789, 'mangalore', '2023-06-30 18:08:16', 'pending'),
(6, 11, 'profile/screenshot.jpg', 'opha', 'opha@gmail.com', '12345', 123456789, 'mangalore', '2023-06-30 18:09:33', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`do_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `fundraiser`
--
ALTER TABLE `fundraiser`
  ADD PRIMARY KEY (`fu_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `orphanage`
--
ALTER TABLE `orphanage`
  ADD PRIMARY KEY (`o_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `do_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fundraiser`
--
ALTER TABLE `fundraiser`
  MODIFY `fu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orphanage`
--
ALTER TABLE `orphanage`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
