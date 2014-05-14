-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2014 at 12:28 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `helpdesk`
--
CREATE DATABASE IF NOT EXISTS `helpdesk` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `helpdesk`;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE IF NOT EXISTS `faqs` (
  `faqno` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `datelastupdate` date NOT NULL,
  PRIMARY KEY (`faqno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`faqno`, `question`, `answer`, `tag`, `datelastupdate`) VALUES
(1, 'QUESTION 1', 'ANSWER 1', '', '2014-05-11'),
(2, 'QUESTION 2', 'ANSWER 2', '', '2014-05-11'),
(3, 'QUESTION 3', 'ANSWER 3', '', '2014-05-11'),
(4, 'QUESTION 4', 'ANSWER 4', '', '2014-05-11'),
(5, 'QUESTION 5', 'ANSWER 5', '', '2014-05-11');

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE IF NOT EXISTS `guests` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

INSERT INTO `guests` (`gid`, `firstname`, `lastname`, `email`) VALUES
(1, 'Dyanara', 'Dela Rosa', 'budjako@gmail.com'),
(2, 'Dyanara', 'Dela Rosa', 'dyanara_29@yahoo.com');

--
-- Table structure for table `handles`
--

CREATE TABLE IF NOT EXISTS `handlers` (
  `staff_id` int(9) NOT NULL,
  `t_id` int(11) NOT NULL,
  PRIMARY KEY (`staff_id`,`t_id`),
  KEY `staff_id` (`staff_id`),
  KEY `t_id` (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staffid` int(9) NOT NULL,
  `username` varchar(30) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileno` char(11) NOT NULL,
  PRIMARY KEY (`staffid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffid`, `username`, `firstname`, `lastname`, `password`, `email`, `mobileno`) VALUES
(123456781, 'sbudjako1', 'Dyanara', 'Dela Rosa', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085862'),
(123456782, 'sbudjako2', 'Dyanara', 'Dela Rosa', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085863'),
(123456783, 'sbudjako3', 'Dyanara', 'Dela Rosa', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085864'),
(123456784, 'sbudjako4', 'Dyanara', 'Dela Rosa', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085865'),
(123456785, 'sbudjako5', 'Dyanara', 'Dela Rosa', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085866');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `studentno` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileno` char(11) NOT NULL,
  PRIMARY KEY (`studentno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentno`, `username`, `firstname`, `lastname`, `password`, `email`, `mobileno`) VALUES
('2011-29711', 'budjako1', 'Dyanara', 'Dela Rosa', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085862'),
('2011-29712', 'budjako2', 'Dyanara', 'Dela Rosa', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085863'),
('2011-29713', 'budjako3', 'Dyanara', 'Dela Rosa', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085864'),
('2011-29714', 'budjako4', 'Dyanara', 'Dela Rosa', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085865'),
('2011-29715', 'budjako5', 'Dyanara', 'Dela Rosa', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085866');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE IF NOT EXISTS `threads` (
  `thid` int(11) NOT NULL AUTO_INCREMENT,
  `t_id` varchar(11) NOT NULL,
  `respondent` int(1) NOT NULL,
  `datesubmit` date NOT NULL,
  `body` varchar(255) NOT NULL,
  PRIMARY KEY (`thid`, `t_id`),
  KEY `t_id` (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `datesubmit` date NOT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `division` varchar(10) NOT NULL,
  `status` int(1) NOT NULL,
  `datelastupdate` date NOT NULL,
  `type` int(1) NOT NULL,
  `student_no` int(11) DEFAULT NULL,
  `employee_no` int(11) DEFAULT NULL,
  `g_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`tid`),
  KEY `student_no` (`student_no`),
  KEY `employee_no` (`employee_no`),
  KEY `e_mail` (`g_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`tid`, `subject`, `datesubmit`, `tag`, `division`, `status`, `datelastupdate`, `type`, `student_no`, `employee_no`, `g_id`) VALUES
(1, 'SUBJECT 1', '2014-05-11', '', 'EXECOM', 0, '2014-05-11', 0, NULL, NULL, NULL),
(2, 'SUBJECT 2', '2014-05-11', '', 'EXECOM', 0, '2014-05-11', 0, NULL, NULL, NULL),
(3, 'SUBJECT 3', '2014-05-11', '', 'EXECOM', 0, '2014-05-11', 0, NULL, NULL, NULL),
(4, 'SUBJECT 4', '2014-05-11', '', 'EXECOM', 0, '2014-05-11', 0, NULL, NULL, NULL),
(5, 'SUBJECT 5', '2014-05-11', '', 'EXECOM', 0, '2014-05-11', 0, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
