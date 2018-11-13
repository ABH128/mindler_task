-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2018 at 04:48 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `createtask`
--

CREATE TABLE IF NOT EXISTS `createtask` (
  `taskName` varchar(1000) COLLATE utf8_bin NOT NULL,
  `dueDate` date NOT NULL,
  `reminder` varchar(10) COLLATE utf8_bin NOT NULL,
`id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `createtask`
--

INSERT INTO `createtask` (`taskName`, `dueDate`, `reminder`, `id`) VALUES
('Test', '2017-04-01', 'rem', 7),
('T2', '2017-05-01', 'rem', 8),
('Test', '2018-03-01', 'nrem', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `createtask`
--
ALTER TABLE `createtask`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `createtask`
--
ALTER TABLE `createtask`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
