-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2022 at 08:53 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `logintb`
--

CREATE TABLE `logintb` (
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logintb`
--

INSERT INTO `logintb` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `studenttb`
--

CREATE TABLE `studenttb` (
  `studentid` int(11) NOT NULL,
  `studentname` varchar(55) NOT NULL,
  `studentcourse` varchar(55) NOT NULL,
  `studentsemester` varchar(55) NOT NULL,
  `studenttimings` varchar(55) NOT NULL,
  `studentdays` varchar(55) NOT NULL,
  `studentbatch` varchar(55) NOT NULL,
  `facultyname` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studenttb`
--

INSERT INTO `studenttb` (`studentid`, `studentname`, `studentcourse`, `studentsemester`, `studenttimings`, `studentdays`, `studentbatch`, `facultyname`) VALUES
(3, 'Abdul Rehman', 'DSA', '1st', '9-11', 'Mon-Wed-Fri', '08c', 'sir faizan'),
(4, 'Saleem', 'DSE', '1st', '9-11', 'Tue-Thurs-Sat', '08c', 'sir faizan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studenttb`
--
ALTER TABLE `studenttb`
  ADD PRIMARY KEY (`studentid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studenttb`
--
ALTER TABLE `studenttb`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
