-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2014 at 06:00 AM
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
-- Table structure for table `concern`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;
-- password : budjakogmail
INSERT INTO `students` (`studentno`, `username`, `firstname`, `lastname`, `password`, `email`, `mobileno`) VALUES
('2011-29711', 'budjako1', 'Dyanara', 'Dela Rosa', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085862'),
('2011-29712', 'budjako2', 'Dyanara', 'Dela Rosa', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085863'),
('2011-29713', 'budjako3', 'Dyanara', 'Dela Rosa', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085864'),
('2011-29714', 'budjako4', 'Dyanara', 'Dela Rosa', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085865'),
('2011-29715', 'budjako5', 'Dyanara', 'Dela Rosa', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085866');

CREATE TABLE IF NOT EXISTS `staff` (
  `staffid` int(9) NOT NULL,
  `username` varchar(30) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileno` char(11) NOT NULL,
  PRIMARY KEY (`staffid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;
-- password : budjakogmail
INSERT INTO `staff` (`staffid`, `username`, `firstname`, `lastname`, `password`, `email`, `mobileno`) VALUES
(123456781, 'sbudjako1', 'Dyanara', 'Dela Rosa', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085862'),
(123456782, 'sbudjako2', 'Dyanara', 'Dela Rosa', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085863'),
(123456783, 'sbudjako3', 'Dyanara', 'Dela Rosa', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085864'),
(123456784, 'sbudjako4', 'Dyanara', 'Dela Rosa', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085865'),
(123456785, 'sbudjako5', 'Dyanara', 'Dela Rosa', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085866');

CREATE TABLE IF NOT EXISTS `tickets` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `datesubmit` date NOT NULL,
  `tag` varchar(255),
  `division` varchar(10) NOT NULL,
  `status` int(1) NOT NULL,
  `datelastupdate` date NOT NULL,
  `type` int(1) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6;

INSERT INTO `tickets` (`tid`, `subject`, `datesubmit`, `tag`, `division`, `status`, `datelastupdate`, `type`) VALUES
(1, 'SUBJECT 1', '2014-05-11', '', 'EXECOM', 0, '2014-05-11', 0),
(2, 'SUBJECT 2', '2014-05-11', '', 'EXECOM', 0, '2014-05-11', 0),
(3, 'SUBJECT 3', '2014-05-11', '', 'EXECOM', 0, '2014-05-11', 0),
(4, 'SUBJECT 4', '2014-05-11', '', 'EXECOM', 0, '2014-05-11', 0),
(5, 'SUBJECT 5', '2014-05-11', '', 'EXECOM', 0, '2014-05-11', 0);

CREATE TABLE IF NOT EXISTS `faqs` (
  `faqno` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `tag` varchar(255),
  `datelastupdate` date NOT NULL,
  PRIMARY KEY (`faqno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6;

INSERT INTO `faqs` (`faqno`, `question`, `answer`, `tag`, `datelastupdate`) VALUES
(1, 'QUESTION 1', 'ANSWER 1', '', '2014-05-11'),
(2, 'QUESTION 2', 'ANSWER 2', '', '2014-05-11'),
(3, 'QUESTION 3', 'ANSWER 3', '', '2014-05-11'),
(4, 'QUESTION 4', 'ANSWER 4', '', '2014-05-11'),
(5, 'QUESTION 5', 'ANSWER 5', '', '2014-05-11');

CREATE TABLE IF NOT EXISTS `ticketlogs` (
  `tlogid` int(11) NOT NULL AUTO_INCREMENT,
  `t_id` varchar(10) NOT NULL,
  `datecommit` date NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`tlogid`),
  KEY `t_id` (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `threads` (
  `thid` int(11) NOT NULL AUTO_INCREMENT,
  `t_id` varchar(11) NOT NULL,
  `student_no` varchar(10),
  `staff_id` int(9),
  `datesubmit` date NOT NULL,
  `body` varchar(255) NOT NULL,
  PRIMARY KEY (`thid`),
  KEY `t_id` (`t_id`),
  KEY `student_no` (`student_no`),
  KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `handles` (
  `staff_id` int(9) NOT NULL,
  `t_id` int(11) NOT NULL,
  PRIMARY KEY(`staff_id`, `t_id`),
  KEY `staff_id` (`staff_id`),
  KEY `t_id` (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `faqlogs` (
  `flogid` int(11) NOT NULL AUTO_INCREMENT,
  `t_id` int(10) NOT NULL,
  `datecommit` date NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`flogid`),
  KEY `t_id` (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
