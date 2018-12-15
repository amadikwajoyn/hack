-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2018 at 10:58 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clearancesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `acceptancefee`
--

CREATE TABLE `acceptancefee` (
  `id` int(11) NOT NULL,
  `reg_no` text NOT NULL,
  `portalId` varchar(300) NOT NULL,
  `confirmationCode` varchar(300) NOT NULL,
  `payeeId` varchar(300) NOT NULL,
  `sex` enum('male','female') NOT NULL,
  `dob` date DEFAULT NULL,
  `place_of_origin` varchar(200) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `purpose_of_payment` varchar(300) NOT NULL,
  `date_of_payment` date DEFAULT NULL,
  `method_of_payment` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acceptancefee`
--

INSERT INTO `acceptancefee` (`id`, `reg_no`, `portalId`, `confirmationCode`, `payeeId`, `sex`, `dob`, `place_of_origin`, `amount`, `purpose_of_payment`, `date_of_payment`, `method_of_payment`) VALUES
(1, '16eh/0175/cs', 'FPN/HNDE/16002587', '76349529571485342756276', 'FPN/ACPHE/160000005855', 'female', '1994-08-17', 'NIGERIA', '25000', 'HND ACCEPTANCE FEE', '2017-01-25', 'Bank');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Chukwuemeka', '8459ae1576c21bb4191e844850ee8f2c');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `reg_no` text NOT NULL,
  `amount` varchar(200) NOT NULL,
  `SchoolSession` varchar(20) NOT NULL,
  `receipt_no` varchar(300) NOT NULL,
  `SchoolLevel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `reg_no`, `amount`, `SchoolSession`, `receipt_no`, `SchoolLevel`) VALUES
(1, '16eh/0175/cs', '1000', '2016/2017', '002758', 'HND 2');

-- --------------------------------------------------------

--
-- Table structure for table `brochure`
--

CREATE TABLE `brochure` (
  `id` int(11) NOT NULL,
  `reg_no` text NOT NULL,
  `amount` varchar(200) NOT NULL,
  `SchoolSession` varchar(20) NOT NULL,
  `receipt_no` varchar(300) NOT NULL,
  `SchoolLevel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brochure`
--

INSERT INTO `brochure` (`id`, `reg_no`, `amount`, `SchoolSession`, `receipt_no`, `SchoolLevel`) VALUES
(1, '16eh/0175/cs', '2000', '2016/2017', '002171', 'HND 2');

-- --------------------------------------------------------

--
-- Table structure for table `cleared`
--

CREATE TABLE `cleared` (
  `id` int(11) NOT NULL,
  `reg_no` text NOT NULL,
  `section` text NOT NULL,
  `clearedSession` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cleared`
--

INSERT INTO `cleared` (`id`, `reg_no`, `section`, `clearedSession`) VALUES
(1, '16eh/0175/cs', 'department', '2016/2017'),
(2, '16eh/0175/cs', 'epsa', ''),
(3, '16eh/0175/cs', 'sug', ''),
(4, '16eh/0175/cs', 'schoolfees', ''),
(5, '16eh/0175/cs', 'alumni', ''),
(7, '16eh/0175/cs', 'brochure', ''),
(8, '16eh/0175/cs', 'acceptancefee', ''),
(9, '16eh/0175/cs', 'department', '2015/2016'),
(10, '16eh/0175/cs', 'schoolfees', '2015/2016'),
(11, '16eh/0175/cs', 'sug', '2015/2016'),
(12, '16eh/0175/cs', 'epsa', '2015/2016');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `faculty` text NOT NULL,
  `department` text NOT NULL,
  `program` enum('morning','evening') NOT NULL,
  `reg_no` text NOT NULL,
  `amount` varchar(200) NOT NULL,
  `SchoolSession` varchar(20) NOT NULL,
  `receipt_no` varchar(300) NOT NULL,
  `SchoolLevel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `faculty`, `department`, `program`, `reg_no`, `amount`, `SchoolSession`, `receipt_no`, `SchoolLevel`) VALUES
(1, 'SCHOOL OF INDUSTRIAL & APPLIED SCIENCES', 'Computer Science', 'evening', '1234567890', '500', '2016/2017', '77295', 'HND 2'),
(2, 'SCHOOL OF INDUSTRIAL & APPLIED SCIENCES', 'Computer Science', 'evening', '16eh/0175/cs', '500', '2016/2017', '772921', 'HND 2'),
(3, 'SCHOOL OF INDUSTRIAL & APPLIED SCIENCES', 'Computer Science', 'evening', '16eh/0175/cs', '500', '2015/2016', '772920', 'HND 1');

-- --------------------------------------------------------

--
-- Table structure for table `epsa`
--

CREATE TABLE `epsa` (
  `id` int(11) NOT NULL,
  `reg_no` text NOT NULL,
  `amount` varchar(200) NOT NULL,
  `SchoolSession` varchar(20) NOT NULL,
  `receipt_no` varchar(300) NOT NULL,
  `SchoolLevel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `epsa`
--

INSERT INTO `epsa` (`id`, `reg_no`, `amount`, `SchoolSession`, `receipt_no`, `SchoolLevel`) VALUES
(1, '16eh/0175/cs', '600', '2016/2017', '30438', 'HND 2'),
(2, '16eh/0175/cs', '600', '2015/2016', '30435', 'HND 1');

-- --------------------------------------------------------

--
-- Table structure for table `schoolfees`
--

CREATE TABLE `schoolfees` (
  `id` int(11) NOT NULL,
  `reg_no` text NOT NULL,
  `SchoolSession` varchar(20) NOT NULL,
  `faculty` text NOT NULL,
  `department` text NOT NULL,
  `program` enum('morning','evening') NOT NULL,
  `SchoolLevel` varchar(50) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `verificationCode` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolfees`
--

INSERT INTO `schoolfees` (`id`, `reg_no`, `SchoolSession`, `faculty`, `department`, `program`, `SchoolLevel`, `amount`, `verificationCode`) VALUES
(1, '16eh/0175/cs', '2016/2017', 'SCHOOL OF INDUSTRIAL & APPLIED SCIENCES', 'Computer Science', 'evening', 'HND 2', '33950', 'ZH653427192935'),
(2, '1234567890', '2016/2017', 'SCHOOL OF INDUSTRIAL & APPLIED SCIENCES', 'Computer Science', 'evening', 'HND 2', '33500', 'ZH653427192935'),
(4, '16eh/0175/cs', '2015/2016', 'SCHOOL OF INDUSTRIAL & APPLIED SCIENCES', 'Computer Science', 'evening', 'HND 1', '33500', 'ZH653427192939');

-- --------------------------------------------------------

--
-- Table structure for table `sug`
--

CREATE TABLE `sug` (
  `id` int(11) NOT NULL,
  `faculty` text NOT NULL,
  `department` text NOT NULL,
  `program` enum('morning','evening') NOT NULL,
  `reg_no` text NOT NULL,
  `amount` varchar(200) NOT NULL,
  `SchoolSession` varchar(20) NOT NULL,
  `receipt_no` varchar(300) NOT NULL,
  `SchoolLevel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sug`
--

INSERT INTO `sug` (`id`, `faculty`, `department`, `program`, `reg_no`, `amount`, `SchoolSession`, `receipt_no`, `SchoolLevel`) VALUES
(1, 'SCHOOL OF INDUSTRIAL & APPLIED SCIENCES', 'Computer Science', 'evening', '16eh/0175/cs', '600', '2016/2017', '6483', 'HND 2'),
(2, 'SCHOOL OF INDUSTRIAL & APPLIED SCIENCES', 'Computer Science', 'evening', '16eh/0175/cs', '600', '2015/2016', '77295', 'HND 1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `reg_no` text NOT NULL,
  `faculty` text NOT NULL,
  `department` text NOT NULL,
  `password` varchar(300) NOT NULL,
  `avater` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `reg_no`, `faculty`, `department`, `password`, `avater`) VALUES
(1, 'Alex Igbokwe', '1234567890', 'SCHOOL OF INDUSTRIAL & APPLIED SCIENCES', 'Computer Science', '8459ae1576c21bb4191e844850ee8f2c', NULL),
(2, 'Longinus Chizoba Nmasinachi', '16eh/0175/cs', 'SCHOOL OF INDUSTRIAL & APPLIED SCIENCES', 'Computer Science', '8459ae1576c21bb4191e844850ee8f2c', 'userPic/nofe9dGUrxD38yT/IMG_20170401_085655_857.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acceptancefee`
--
ALTER TABLE `acceptancefee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brochure`
--
ALTER TABLE `brochure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cleared`
--
ALTER TABLE `cleared`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `epsa`
--
ALTER TABLE `epsa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schoolfees`
--
ALTER TABLE `schoolfees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sug`
--
ALTER TABLE `sug`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acceptancefee`
--
ALTER TABLE `acceptancefee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `brochure`
--
ALTER TABLE `brochure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cleared`
--
ALTER TABLE `cleared`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `epsa`
--
ALTER TABLE `epsa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `schoolfees`
--
ALTER TABLE `schoolfees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sug`
--
ALTER TABLE `sug`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
