-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 23, 2022 at 11:07 AM
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
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `schoolyear` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `classes_houses`
--

CREATE TABLE `classes_houses` (
  `id` int(11) DEFAULT NULL,
  `house_id` int(11) DEFAULT NULL,
  `classes_id` int(11) DEFAULT NULL,
  `schoolyear` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `entreprise`
--

CREATE TABLE `entreprise` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `CEO` varchar(255) DEFAULT NULL,
  `schoolyear` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `entreprise_staff`
--

CREATE TABLE `entreprise_staff` (
  `id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `entreprise_id` int(11) DEFAULT NULL,
  `post` varchar(255) DEFAULT NULL,
  `schoolyear` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `house_number` int(11) DEFAULT NULL,
  `schoolyear` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `house_staff`
--

CREATE TABLE `house_staff` (
  `id` int(11) DEFAULT NULL,
  `house_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `function` varchar(255) DEFAULT NULL,
  `schoolyear` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `second_name` varchar(255) DEFAULT NULL,
  `schoolyear` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `second_name` varchar(255) DEFAULT NULL,
  `iam` varchar(255) DEFAULT NULL,
  `schoolyear` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `students_classes`
--

CREATE TABLE `students_classes` (
  `id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `classes_id` int(11) DEFAULT NULL,
  `schoolyear` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student_entreprise`
--

CREATE TABLE `student_entreprise` (
  `id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `entreprise_id` int(11) DEFAULT NULL,
  `plage_1` int(11) DEFAULT NULL,
  `plage_2` int(11) DEFAULT NULL,
  `plage_3` int(11) DEFAULT NULL,
  `plage_4` int(11) DEFAULT NULL,
  `plage_5` int(11) DEFAULT NULL,
  `plage_6` int(11) DEFAULT NULL,
  `plage_7` int(11) DEFAULT NULL,
  `plage_8` int(11) DEFAULT NULL,
  `schoolyear` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(11) DEFAULT NULL,
  `interval` varchar(255) DEFAULT NULL,
  `schoolyear` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tuteur`
--

CREATE TABLE `tuteur` (
  `id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `second_name` varchar(255) DEFAULT NULL,
  `house` varchar(255) DEFAULT NULL,
  `entreprise` varchar(255) DEFAULT NULL,
  `schoolyear` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tuteur_house`
--

CREATE TABLE `tuteur_house` (
  `id` int(11) DEFAULT NULL,
  `house_id` int(11) DEFAULT NULL,
  `tuteur_id` int(11) DEFAULT NULL,
  `schoolyear` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tuteur_student`
--

CREATE TABLE `tuteur_student` (
  `id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `tuteur_id` int(11) DEFAULT NULL,
  `schoolyear` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
