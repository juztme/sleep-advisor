-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2014 at 01:17 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sleepapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `moves`
--

CREATE TABLE IF NOT EXISTS `moves` (
  `Date` date NOT NULL,
  `Steps` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moves`
--

INSERT INTO `moves` (`Date`, `Steps`) VALUES
('2014-10-15', 3182),
('2014-10-14', 2478),
('2014-10-13', 5407),
('2014-10-12', 870),
('2014-10-11', 3808),
('2014-10-10', 4509),
('2014-10-09', 2289),
('2014-10-08', 1948),
('2014-10-07', 7541);

-- --------------------------------------------------------

--
-- Table structure for table `sleepbot`
--

CREATE TABLE IF NOT EXISTS `sleepbot` (
  `Date` date NOT NULL,
  `Sleep` time NOT NULL,
  `Awake` time NOT NULL,
  `Duration` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sleepbot`
--

INSERT INTO `sleepbot` (`Date`, `Sleep`, `Awake`, `Duration`) VALUES
('2014-10-15', '00:54:00', '08:10:00', '07:16:00'),
('2014-10-14', '02:01:00', '09:45:00', '07:44:00'),
('2014-10-13', '02:17:00', '08:22:00', '06:05:00'),
('2014-10-12', '04:23:00', '10:30:00', '06:07:00'),
('2014-10-11', '01:21:00', '10:30:00', '09:19:00'),
('2014-10-10', '01:05:00', '08:35:00', '07:30:00'),
('2014-10-09', '00:11:00', '08:35:00', '08:24:00'),
('2014-10-08', '00:04:00', '07:15:00', '07:11:00'),
('2014-10-07', '23:44:00', '07:30:00', '07:46:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
