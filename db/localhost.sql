-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 10, 2018 at 01:15 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `car`
--
CREATE DATABASE IF NOT EXISTS `car` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `car`;

-- --------------------------------------------------------

--
-- Table structure for table `carnames`
--
-- in use(#1146 - Table 'car.carnames' doesn't exist)
-- Error reading data: (#1146 - Table 'car.carnames' doesn't exist)
--
-- Database: `hospital`
--
CREATE DATABASE IF NOT EXISTS `hospital` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hospital`;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `depart` varchar(250) NOT NULL,
  `dates` varchar(50) NOT NULL,
  `timeso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`name`, `phone`, `email`, `depart`, `dates`, `timeso`) VALUES
('sarin', '98563214', 'sarin2@gamil.com', 'Cardiology', '21/02/2019', '2.00pm'),
('prijith', '125478568', 'prijithksifa@gmail.com', 'Cardiology', '25/02/1998', '3.00pm'),
('abhijith', '78451236', 'abhijith@gmail.com', 'Cardiology', '253612', '3.00pm'),
('ann', '12313', '1321', 'Cardiology', '1231', '123123'),
('prijitheart', 'werasfvas', 'dfasdfasdf', 'Cardiology', 'asdfasdf', 'asdf'),
('prijith', 'arewt', 'asdfasfd', 'Pathology', 'sdf', 'asdfa'),
('ASD', 'asd', 'asd', 'Dermatology', 'asd', 'asd'),
('a', 'aaa', 'aaa', 'Pathology', 'aaa', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `name` varchar(50) NOT NULL,
  `phone` int(12) NOT NULL,
  `department` varchar(30) NOT NULL,
  `empid` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `phone`, `department`, `empid`, `username`, `password`) VALUES
('abhilash', 2147483647, 'Cardiology', '123`', 'abhilash', 'abhilash'),
('akhil', 123456987, 'Pathology', '256', 'akhil', 'akhil');
--
-- Database: `narnia`
--
CREATE DATABASE IF NOT EXISTS `narnia` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `narnia`;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--
-- in use(#1146 - Table 'narnia.register' doesn't exist)
-- Error reading data: (#1146 - Table 'narnia.register' doesn't exist)
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
