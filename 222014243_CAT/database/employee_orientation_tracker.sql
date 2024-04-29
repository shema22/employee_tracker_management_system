-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2024 at 11:48 PM
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
-- Database: `employee_orientation_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmployeeID` int(11) NOT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `Lastname` varchar(20) DEFAULT NULL,
  `Position` varchar(25) DEFAULT NULL,
  `contactNumber` varchar(13) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmployeeID`, `FirstName`, `Lastname`, `Position`, `contactNumber`, `Email`) VALUES
(1, 'shema', 'aloys', 'manpower', '0987646252', 'kalisa2000@gmail.com'),
(2, 'eric', 'kalisa', 'manager', '0987646252', 'kalisa2000@gmail.com'),
(3, 'elia', 'kamana', 'ceo', '09786543216', 'kamana00@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orientationsession`
--

CREATE TABLE `orientationsession` (
  `SessionID` int(11) NOT NULL,
  `SessionDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `SessionTime` varchar(25) DEFAULT NULL,
  `SiteID` int(11) DEFAULT NULL,
  `conductedBy` int(11) DEFAULT NULL,
  `projectID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orientationsession`
--

INSERT INTO `orientationsession` (`SessionID`, `SessionDate`, `SessionTime`, `SiteID`, `conductedBy`, `projectID`) VALUES
(3, '2024-04-22 22:00:00', '13', 1, 1, 1),
(4, '2024-04-28 22:00:00', '23:34', 2, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `projectID` int(11) NOT NULL,
  `ProjectName` varchar(250) DEFAULT NULL,
  `department` varchar(250) DEFAULT NULL,
  `EmployeeID` int(11) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projectID`, `ProjectName`, `department`, `EmployeeID`, `place`) VALUES
(1, 'kabutare', 'construction', 1, 'ur house'),
(3, 'AFCA project', 'marketing', 1, 'tumba'),
(4, 'financiall aids', 'finance', 1, 'tumba');

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `SiteID` int(11) NOT NULL,
  `SiteName` varchar(50) DEFAULT NULL,
  `Location` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`SiteID`, `SiteName`, `Location`) VALUES
(1, 'camboj estate', 'camboj'),
(2, 'ur smart tanker', 'huye'),
(3, 'ejo heza', 'madina');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `fname` varchar(25) DEFAULT NULL,
  `lname` varchar(25) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fname`, `lname`, `username`, `password`, `role`) VALUES
(2, 'murenzi', 'alexie', '222014243', '$2y$10$HMvA9GrGxqk1IsP9620x0OwIhZD4xOu6LKP7Z8k9An1LylG5YxeZq', 'employee'),
(3, 'shema', 'rash', 'admin', '$2y$10$eV13CeLGcKAsy927ioUJ.OAAlwB6Ri7xgywmDpRlQuuX5Py3nLi2a', 'admin'),
(4, 'enock', 'twahirwa', 'enock', '$2y$10$wZcC5wrkJYENfOawZYwQUunS4kLZgZ8Ec2jAt9tZi4.XdPbW0niAO', 'employee'),
(5, 'eric', 'kalisa', 'eric', '$2y$10$hmVLJplxUvhPKCAI8FGQ6e52ThjN7SkREQ4V/VehhyMOEz30YHUde', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- Indexes for table `orientationsession`
--
ALTER TABLE `orientationsession`
  ADD PRIMARY KEY (`SessionID`),
  ADD KEY `conductedBy` (`conductedBy`),
  ADD KEY `projectID` (`projectID`),
  ADD KEY `SiteID` (`SiteID`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`projectID`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`SiteID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EmployeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orientationsession`
--
ALTER TABLE `orientationsession`
  MODIFY `SessionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `projectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `SiteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orientationsession`
--
ALTER TABLE `orientationsession`
  ADD CONSTRAINT `orientationsession_ibfk_1` FOREIGN KEY (`conductedBy`) REFERENCES `employee` (`EmployeeID`),
  ADD CONSTRAINT `orientationsession_ibfk_2` FOREIGN KEY (`projectID`) REFERENCES `projects` (`projectID`),
  ADD CONSTRAINT `orientationsession_ibfk_3` FOREIGN KEY (`SiteID`) REFERENCES `sites` (`SiteID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
