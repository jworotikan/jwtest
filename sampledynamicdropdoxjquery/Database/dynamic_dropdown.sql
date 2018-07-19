-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2017 at 06:44 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dynamic_dropdown`
--

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE IF NOT EXISTS `child` (
  `child_id` int(10) NOT NULL AUTO_INCREMENT,
  `father_id` int(20) NOT NULL,
  `child` varchar(200) NOT NULL,
  PRIMARY KEY (`child_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`child_id`, `father_id`, `child`) VALUES
(1, 1, 'John-Child1'),
(2, 1, 'John-Child2'),
(3, 1, 'John-Child3'),
(4, 2, 'Devid-Child1'),
(5, 2, 'Devid-Child2'),
(6, 2, 'Devid-Child3'),
(7, 3, 'Ram-Child1'),
(8, 3, 'Ram-Child2'),
(9, 3, 'Ram-Child3'),
(10, 4, 'Ramesh-Child1'),
(11, 4, 'Ramesh-Child2'),
(12, 5, 'Suresh-Child1'),
(13, 5, 'Suresh-Child2'),
(14, 5, 'Suresh-Child3'),
(15, 6, 'Kavir-Child1'),
(16, 6, 'Kavir-Child2'),
(17, 7, 'Karan-Child1'),
(18, 7, 'Karan-Child2'),
(19, 7, 'Karan-Child3'),
(20, 8, 'Raju-Child1'),
(21, 8, 'Raju-Child2'),
(22, 9, 'Shyam-Child1'),
(23, 9, 'Shyam-Child2'),
(24, 9, 'Shyam-Child3'),
(25, 10, 'Ravi-Child1');

-- --------------------------------------------------------

--
-- Table structure for table `father`
--

CREATE TABLE IF NOT EXISTS `father` (
  `father_id` int(20) NOT NULL AUTO_INCREMENT,
  `father` varchar(200) NOT NULL,
  PRIMARY KEY (`father_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `father`
--

INSERT INTO `father` (`father_id`, `father`) VALUES
(1, 'John'),
(2, 'Devid'),
(3, 'Ram'),
(4, 'Ramesh'),
(5, 'Suresh'),
(6, 'Kavir'),
(7, 'Karan'),
(8, 'Raju'),
(9, 'Shyam'),
(10, 'Ravi');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE IF NOT EXISTS `grade` (
  `grade_id` int(20) NOT NULL AUTO_INCREMENT,
  `school_id` int(20) NOT NULL,
  `child_id` int(20) NOT NULL,
  `father_id` int(20) NOT NULL,
  `grade` varchar(250) NOT NULL,
  PRIMARY KEY (`grade_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`grade_id`, `school_id`, `child_id`, `father_id`, `grade`) VALUES
(1, 1, 1, 1, 'A+'),
(2, 2, 2, 1, 'A'),
(3, 3, 3, 1, 'A'),
(4, 4, 4, 2, 'B'),
(5, 5, 5, 2, 'B'),
(6, 6, 6, 2, 'A'),
(7, 7, 7, 3, 'C'),
(8, 8, 8, 3, 'F'),
(9, 9, 9, 3, 'A'),
(10, 10, 10, 4, 'C'),
(11, 11, 11, 4, 'B'),
(12, 12, 12, 5, 'B'),
(13, 13, 13, 5, 'B+'),
(14, 14, 14, 5, 'C'),
(15, 15, 15, 6, 'B'),
(16, 16, 16, 6, 'A'),
(17, 17, 17, 7, 'C'),
(18, 18, 18, 7, 'E'),
(19, 19, 19, 7, 'F'),
(20, 20, 20, 8, 'F'),
(21, 21, 21, 8, 'D'),
(22, 22, 22, 9, 'D'),
(23, 23, 23, 9, 'C'),
(24, 24, 24, 9, 'A'),
(25, 25, 25, 10, 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `school_id` int(20) NOT NULL AUTO_INCREMENT,
  `child_id` int(20) NOT NULL,
  `father_id` int(20) NOT NULL,
  `school` varchar(250) NOT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_id`, `child_id`, `father_id`, `school`) VALUES
(1, 1, 1, 'John-Child1-school'),
(2, 2, 1, 'John-Child2-school'),
(3, 3, 1, 'John-Child3-school'),
(4, 4, 2, 'Devid-Child1-school'),
(5, 5, 2, 'Devid-Child2-school'),
(6, 6, 2, 'Devid-Child3-school'),
(7, 7, 3, 'Ram-Child1-school'),
(8, 8, 3, 'Ram-Child2-school'),
(9, 9, 3, 'Ram-Child3-school'),
(10, 10, 4, 'Ramesh-Child1-school'),
(11, 11, 4, 'Ramesh-Child2-school'),
(12, 12, 5, 'Suresh-Child1-school'),
(13, 13, 5, 'Suresh-Child2-school'),
(14, 14, 5, 'Suresh-Child3-school'),
(15, 15, 6, 'Kavir-Child1-school'),
(16, 16, 6, 'Kavir-Child2-school'),
(17, 17, 7, 'Karan-Child1-school'),
(18, 18, 7, 'Karan-Child2-school'),
(19, 19, 7, 'Karan-Child3-school'),
(20, 20, 8, 'Raju-Child1-school'),
(21, 21, 8, 'Raju-Child2-school'),
(22, 22, 9, 'Shyam-Child1-school'),
(23, 23, 9, 'Shyam-Child2-school'),
(24, 24, 9, 'Shyam-Child3-school'),
(25, 25, 10, 'Ravi-Child1-school');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
