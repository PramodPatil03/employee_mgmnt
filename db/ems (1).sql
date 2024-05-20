-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2023 at 07:52 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_project`
--

CREATE TABLE `add_project` (
  `pid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `duedate` date NOT NULL,
  `marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_project`
--

INSERT INTO `add_project` (`pid`, `eid`, `pname`, `duedate`, `marks`) VALUES
(101, 2, 'DBMS', '2023-02-04', 10),
(102, 1, 'ISE', '2023-02-04', 10);

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE `alogin` (
  `id` int(11) NOT NULL,
  `email` tinytext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`id`, `email`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `identity` varchar(15) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `dept` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `pic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstName`, `lastName`, `email`, `password`, `birthday`, `gender`, `contact`, `identity`, `address`, `dept`, `degree`, `pic`) VALUES
(1, 'Pranav', 'Savekar', 'pranav@gmail.com', '1234', '2002-05-27', 'Male', '1234569870', '123412341234', 'Kaneriwadi', 'sales', 'BE', 'images/Pranavsq.JPG'),
(2, 'Pramod', 'Patil', 'pramod@gmail.com', '1234', '2023-01-13', 'Male', '15262352', '222255552222', 'Mattiwade', 'Development', 'BE', 'images/pramod_copy.jpg'),
(4, 'Vishal', 'Patil', 'vishal@gmail.com', '1234', '2001-12-26', 'Male', '152632632', '885522885522', 'kANERI', 'Sales', 'BE', 'images/no.jpg'),
(5, 'Sushil', 'Patil', 'sushil@gmail.com', '1234', '2001-08-12', 'Male', '123365244', '222211113333', 'gadhinglaj', 'Sales', 'BE', 'images/blacksuit.jpeg'),
(6, 'abc', 'xyz', 'abc@gmail.com', '1234', '2023-01-14', 'Male', '12365412', '115566111222', 'Nidasodhi', 'Sales', 'BE', 'images/default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employee_leave`
--

CREATE TABLE `employee_leave` (
  `id` int(11) DEFAULT NULL,
  `token` int(11) NOT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `reason` char(100) DEFAULT NULL,
  `status` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_leave`
--

INSERT INTO `employee_leave` (`id`, `token`, `start`, `end`, `reason`, `status`) VALUES
(1, 3, '2023-01-21', '2023-01-31', 'sick leave', 'Cancelled'),
(2, 5, '2023-01-22', '2023-01-25', 'sick leave', 'Approved'),
(2, 6, '2023-01-26', '2023-01-31', 'casuality leave', 'Approved'),
(6, 7, '2023-01-22', '2023-01-24', 'sick leave', 'Pending'),
(1, 8, '2023-01-22', '2023-01-31', 'casuality leave', 'Pending'),
(1, 9, '0000-00-00', '0000-00-00', '', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `monthly_salary`
--

CREATE TABLE `monthly_salary` (
  `id` int(11) NOT NULL,
  `month` varchar(11) NOT NULL,
  `work_days` int(11) NOT NULL,
  `base` int(11) NOT NULL,
  `da` int(11) NOT NULL,
  `deduction` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monthly_salary`
--

INSERT INTO `monthly_salary` (`id`, `month`, `work_days`, `base`, `da`, `deduction`, `total`) VALUES
(1, '2023-01', 30, 1000, 4000, 1500, 32500),
(2, '2023-01', 31, 1000, 3000, 1500, 32500),
(4, '2023-01', 31, 1000, 3500, 2500, 32000),
(5, '2023-01', 31, 1000, 3000, 3000, 31000),
(6, '2023-01', 30, 1000, 3000, 2000, 31000),
(2, '2023-03', 28, 1000, 3000, 1500, 29500);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `pid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `duedate` date NOT NULL,
  `subdate` date NOT NULL,
  `mark` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pid`, `eid`, `pname`, `duedate`, `subdate`, `mark`, `status`) VALUES
(101, 1, 'DBMS', '2023-01-28', '2023-01-21', 0, 'Submitted'),
(101, 2, 'DBMS', '2023-02-04', '2023-01-21', 9, 'Submitted'),
(101, 6, 'DBMS', '2023-01-27', '0000-00-00', 0, 'Due'),
(102, 1, 'ISE', '2023-01-28', '2023-01-20', 10, 'Submitted'),
(102, 2, 'ISE', '2023-02-05', '0000-00-00', 0, 'Due');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `queries` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `eid` int(11) NOT NULL,
  `points` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`eid`, `points`) VALUES
(1, 7),
(2, 9),
(4, 9),
(5, 8),
(6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `work_days` int(11) NOT NULL,
  `base` int(11) NOT NULL,
  `da` int(11) NOT NULL,
  `deduction` int(11) NOT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `work_days`, `base`, `da`, `deduction`, `total`) VALUES
(1, 30, 1000, 4000, 1500, 32500),
(2, 28, 1000, 3000, 1500, 29500),
(4, 31, 1000, 3500, 2500, 32000),
(5, 31, 1000, 3000, 3000, 31000),
(6, 30, 1000, 3000, 2000, 31000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_project`
--
ALTER TABLE `add_project`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `alogin`
--
ALTER TABLE `alogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `employee_leave`
--
ALTER TABLE `employee_leave`
  ADD PRIMARY KEY (`token`),
  ADD KEY `employee_leave_ibfk_1` (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`pid`,`eid`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_project`
--
ALTER TABLE `add_project`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `alogin`
--
ALTER TABLE `alogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee_leave`
--
ALTER TABLE `employee_leave`
  MODIFY `token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_leave`
--
ALTER TABLE `employee_leave`
  ADD CONSTRAINT `employee_leave_ibfk_1` FOREIGN KEY (`id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rank`
--
ALTER TABLE `rank`
  ADD CONSTRAINT `rank_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
