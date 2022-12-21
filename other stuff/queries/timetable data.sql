-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 21, 2022 at 11:22 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schedule`
--

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(11) DEFAULT NULL,
  `interval` varchar(255) DEFAULT NULL,
  `day_id` int(11) NOT NULL,
  `schoolyear` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `interval`, `day_id`, `schoolyear`) VALUES
(1, '8:10-9:40', 1, 2022),
(2, '10:10-11:40', 1, 2022),
(3, '11:45-12:30', 1, 2022),
(4, '12:30-13:15', 1, 2022),
(5, '13:15-14:00', 1, 2022),
(6, '14:00-14:45', 1, 2022),
(7, '14:50-16:20', 1, 2022),
(1, '8:10-9:40', 2, 2022),
(2, '10:10-11:40', 2, 2022),
(3, '11:45-12:30', 2, 2022),
(4, '12:30-13:15', 2, 2022),
(5, '13:15-14:00', 2, 2022),
(6, '14:00-14:45', 2, 2022),
(7, '14:50-16:20', 2, 2022),
(1, '8:10-9:40', 3, 2022),
(2, '10:10-11:40', 3, 2022),
(3, '11:45-12:30', 3, 2022),
(4, '12:30-13:15', 3, 2022),
(5, '13:15-14:00', 3, 2022),
(6, '14:00-14:45', 3, 2022),
(7, '14:50-16:20', 3, 2022),
(1, '8:10-9:40', 4, 2022),
(2, '10:10-11:40', 4, 2022),
(3, '11:45-12:30', 4, 2022),
(4, '12:30-13:15', 4, 2022),
(5, '13:15-14:00', 4, 2022),
(6, '14:00-14:45', 4, 2022),
(7, '14:50-16:20', 4, 2022),
(1, '8:10-9:40', 5, 2022),
(2, '10:10-11:40', 5, 2022),
(3, '11:45-12:30', 5, 2022),
(4, '12:30-13:15', 5, 2022),
(5, '13:15-14:00', 5, 2022),
(6, '14:00-14:45', 5, 2022),
(7, '14:50-16:20', 5, 2022);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
