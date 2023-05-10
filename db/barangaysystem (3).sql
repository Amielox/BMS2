-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 07:31 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barangaysystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `category` varchar(30) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `category`, `photo`, `created_on`) VALUES
(1, 'Admin', '$2y$10$Hys97rF4C5a5ZVXolPqrOuwHZOna.1WbpJJotx87dPOujZ/yWQUme', 'Mon Cedric', 'Avila', 'Admin', 'Avila.jpg', '2018-04-02'),
(2, 'Admin01', '$2y$10$Hys97rF4C5a5ZVXolPqrOuwHZOna.1WbpJJotx87dPOujZ/yWQUme', 'Kimberly', 'Pangilinan', 'Admin', 'kim.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `archiveresidents`
--

CREATE TABLE `archiveresidents` (
  `id` int(10) NOT NULL,
  `residentno` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `age` int(50) NOT NULL,
  `birthdate` date NOT NULL,
  `birthplace` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `civilstatus` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `landownership` varchar(100) NOT NULL,
  `puroknumber` varchar(100) NOT NULL,
  `lengthstay` int(100) NOT NULL,
  `houseownership` varchar(100) NOT NULL,
  `totalhousehold` int(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `formeraddress` varchar(100) NOT NULL,
  `disableperson` varchar(10) NOT NULL,
  `registered` varchar(10) NOT NULL,
  `barangayidno` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `residentstatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bmss`
--

CREATE TABLE `bmss` (
  `id` int(11) NOT NULL,
  `trackingno` varchar(255) NOT NULL,
  `residentid` varchar(100) NOT NULL,
  `no` int(10) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `purokno` int(10) NOT NULL,
  `dob` date NOT NULL,
  `tin` varchar(255) NOT NULL,
  `htwt` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `emergency` varchar(255) NOT NULL,
  `nos` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `pob` varchar(255) NOT NULL,
  `sssno` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rel` varchar(255) NOT NULL,
  `scontno` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `unt` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `precno` varchar(255) NOT NULL,
  `contno` varchar(255) NOT NULL,
  `contemer` varchar(255) NOT NULL,
  `spooccu` varchar(255) NOT NULL,
  `suf` varchar(255) NOT NULL,
  `nation` varchar(255) NOT NULL,
  `cs` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `occu` varchar(255) NOT NULL,
  `di` date NOT NULL,
  `reason` varchar(200) NOT NULL,
  `letter` varchar(255) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bmss`
--

INSERT INTO `bmss` (`id`, `trackingno`, `residentid`, `no`, `purpose`, `status`, `sname`, `address`, `purokno`, `dob`, `tin`, `htwt`, `weight`, `emergency`, `nos`, `fname`, `pob`, `sssno`, `color`, `email`, `rel`, `scontno`, `mname`, `unt`, `gender`, `precno`, `contno`, `contemer`, `spooccu`, `suf`, `nation`, `cs`, `religion`, `occu`, `di`, `reason`, `letter`, `total`) VALUES
(119, 'TNO-619527', 'D4OQZH', 120, 'Barangay Clearance', 'Acknowledged', 'Avila', 'Bagumbong, Caloocan City', 1, '2001-11-24', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', 'Mon Cedric', 'Caloocan City', 'n/a', 'n/a', 'admin@gmail.com', 'n/a', 'n/a', 'Orbeta', 'Owner', 'Male', 'n/a', '09480804906', 'n/a', 'n/a', 'N/A', 'Filipino', 'Single', 'Catholic', 'Student', '2022-12-05', 'n/a', '', ''),
(120, 'TNO-242705', 'D4OQZH', 120, 'Barangay Clearance', 'Ready for Pickup', 'Avila', 'Bagumbong, Caloocan City', 1, '2001-11-24', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', 'Mon Cedric', 'Caloocan City', 'n/a', 'n/a', 'admin@gmail.com', 'n/a', 'n/a', 'Orbeta', 'Owner', 'Male', 'n/a', '09480804906', 'n/a', 'n/a', 'N/A', 'Filipino', 'Single', 'Catholic', 'Student', '2022-12-05', 'n/a', '', '150'),
(121, 'TNO-351478', 'D4OQZH', 120, 'Barangay Clearance', 'Pending', 'Avila', 'Bagumbong, Caloocan City', 1, '2001-11-24', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', 'Mon Cedric', 'Caloocan City', 'n/a', 'n/a', 'admin@gmail.com', 'n/a', 'n/a', 'Orbeta', 'Owner', 'Male', 'n/a', '09480804906', 'n/a', 'n/a', 'N/A', 'Filipino', 'Single', 'Catholic', 'Student', '2022-12-05', 'n/a', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `census`
--

CREATE TABLE `census` (
  `id` int(10) NOT NULL,
  `population` int(50) NOT NULL,
  `year` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `census`
--

INSERT INTO `census` (`id`, `population`, `year`) VALUES
(1, 28770, 1990),
(2, 39438, 1995),
(3, 49639, 2000),
(4, 68618, 2007),
(5, 68881, 2010),
(6, 74304, 2015);

-- --------------------------------------------------------

--
-- Table structure for table `officials`
--

CREATE TABLE `officials` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `term` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `officials`
--

INSERT INTO `officials` (`id`, `name`, `position`, `term`, `photo`) VALUES
(1, 'HON. CRISTINA BERNARDINO', 'Punong Barangay', '2022', '1-removebg-preview.png'),
(2, 'MARICHU B. MONTEHERMOSO', 'Barangay Kagawad', '2022', '2-removebg-preview.png'),
(4, 'AMEERAH S. IBRAHIM', ' Barangay Kagawad', '2022', '3-removebg-preview.png');

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `id` int(11) NOT NULL,
  `residentid` varchar(100) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `puroknumber` int(10) NOT NULL,
  `dob` date NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `pob` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contno` varchar(255) NOT NULL,
  `suf` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `cs` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `unt` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`id`, `residentid`, `lastname`, `address`, `puroknumber`, `dob`, `nationality`, `firstname`, `pob`, `email`, `password`, `middlename`, `gender`, `contno`, `suf`, `occupation`, `religion`, `cs`, `status`, `unt`, `user_type`, `photo`) VALUES
(120, 'D4OQZH', 'Avila', 'Bagumbong, Caloocan City', 1, '2001-11-24', 'Filipino', 'Mon Cedric', 'Caloocan City', 'admin@gmail.com', '$2y$10$LpQBSR9CWQx6Rzrqn9GC6uw.7kuD3l1bM521AB0EE8FSuqmwG4LHC', 'Orbeta', 'Male', '09480804906', 'N/A', 'Student', 'Catholic', 'Single', '', 'Owner', 'user', 'Avila.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `id` int(10) NOT NULL,
  `term` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`id`, `term`) VALUES
(8, '2022');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `no` int(11) NOT NULL,
  `transactionid` int(11) NOT NULL,
  `residentid` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `daterequested` timestamp NOT NULL DEFAULT current_timestamp(),
  `dateissued` timestamp NOT NULL DEFAULT current_timestamp(),
  `payment` int(11) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`no`, `transactionid`, `residentid`, `type`, `daterequested`, `dateissued`, `payment`, `status`) VALUES
(1, 1, 1, 'bc', '2022-11-26 04:52:21', '2021-11-26 04:52:21', 150, 'successful'),
(2, 1, 1, 'bid', '2022-11-26 04:52:29', '2022-11-26 04:52:29', 50, 'successful'),
(3, 2, 2, 'bc', '2022-11-26 04:53:09', '2022-11-26 04:53:09', 50, 'successful'),
(4, 3, 3, 'bid', '2022-11-26 04:53:09', '2022-11-26 04:53:09', 50, 'successful'),
(5, 4, 4, 'bce', '2022-11-26 04:53:36', '2022-02-26 04:53:36', 50, 'successful'),
(6, 1, 1, 'bid', '2022-10-06 05:17:50', '2022-10-06 05:17:50', 50, 'successful'),
(7, 1, 1, 'bid', '2022-10-06 05:17:50', '2022-10-06 05:17:50', 50, 'successful'),
(8, 1, 1, 'bid', '2022-10-06 05:17:50', '2022-09-06 05:17:50', 50, 'successful'),
(9, 1, 1, 'bid', '2022-10-06 05:17:50', '2022-08-06 05:17:50', 50, 'successful'),
(10, 1, 1, 'bc', '2022-10-06 05:17:50', '2022-10-06 05:17:50', 50, 'successful'),
(11, 1, 1, 'bid', '2022-10-06 05:17:50', '2022-10-06 05:17:50', 50, 'successful'),
(12, 1, 1, 'bce', '2022-10-06 05:17:50', '2022-10-06 05:17:50', 50, 'successful'),
(13, 1, 1, 'bc', '2022-10-06 05:17:50', '2022-09-06 05:17:50', 50, 'successful'),
(14, 1, 1, 'bce', '2022-11-26 04:52:21', '2022-11-26 04:52:21', 50, 'successful'),
(15, 1, 1, 'bc', '2022-10-26 04:52:29', '2022-10-26 04:52:29', 50, 'successful'),
(16, 2, 2, 'bc', '2022-10-26 04:53:09', '2022-10-26 04:53:09', 50, 'successful'),
(17, 1, 1, 'bc', '2022-10-26 04:52:21', '2022-10-26 04:52:21', 50, 'successful'),
(18, 1, 1, 'bc', '2022-02-26 04:52:21', '2022-02-26 04:52:21', 100, 'successful'),
(19, 1, 1, 'bid', '2022-02-26 04:52:29', '2022-02-26 04:52:29', 50, 'successful'),
(20, 4, 4, 'bce', '2022-11-26 04:53:36', '2022-11-26 04:53:36', 50, 'successful'),
(21, 1, 1, 'bid', '2022-10-06 05:17:50', '2022-10-06 05:17:50', 50, 'successful'),
(22, 1, 1, 'bid', '2022-10-06 05:17:50', '2022-09-06 05:17:50', 50, 'successful');

-- --------------------------------------------------------

--
-- Table structure for table `webofficial`
--

CREATE TABLE `webofficial` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(30) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `webofficial`
--

INSERT INTO `webofficial` (`id`, `name`, `position`, `photo`) VALUES
(1, 'HON. CRISTINA BERNARDINO', 'Punong Barangay', '1-removebg-preview.png'),
(2, 'MARICHU B. MONTEHERMOSO', 'Barangay Kagawad', '2-removebg-preview.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `archiveresidents`
--
ALTER TABLE `archiveresidents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmss`
--
ALTER TABLE `bmss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `census`
--
ALTER TABLE `census`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officials`
--
ALTER TABLE `officials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webofficial`
--
ALTER TABLE `webofficial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `archiveresidents`
--
ALTER TABLE `archiveresidents`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `bmss`
--
ALTER TABLE `bmss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `census`
--
ALTER TABLE `census`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `officials`
--
ALTER TABLE `officials`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `webofficial`
--
ALTER TABLE `webofficial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
