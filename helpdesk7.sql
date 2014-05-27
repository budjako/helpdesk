-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 27, 2014 at 05:13 AM
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
  `visit_count` int(11) NOT NULL,
  PRIMARY KEY (`faqno`),
  FULLTEXT KEY `question` (`question`,`answer`),
  FULLTEXT KEY `question_2` (`question`,`answer`),
  FULLTEXT KEY `question_3` (`question`,`answer`,`tag`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`faqno`, `question`, `answer`, `tag`, `datelastupdate`, `visit_count`) VALUES
(1, 'QUESTION 1', 'ANSWER 1', 'Assistanship', '2014-05-11', 6),
(2, 'QUESTION 2', 'ANSWER 2', 'STS', '2014-05-11', 1),
(3, 'QUESTION 3', 'ANSWER 3', 'SLB', '2014-05-11', 0),
(4, 'QUESTION 4', 'ANSWER 4', 'Clearance', '2014-05-11', 1),
(5, 'QUESTION 5', 'ANSWER 5', 'Scholarship', '2014-05-11', 0),
(6, 'What if there is no Internet connection?', 'Unfortunately, you can only create accounts when there is Internet connection. In such cases, you can just write down the information of the student and create the account when the Internet connection stabilizes.', 'Account', '2014-05-19', 5),
(7, 'What if the student does not have an ID?', 'The student must have an ID. We cannot grant them access to the account because we have no proof that they are who they claim they are. In very special cases like when the student is from a very far province, ask for any form of identification. UPLB ID do', 'Account', '2014-05-19', 1),
(10, 'What if the student has an account already?', 'This is not going to be a problem. Just create the account. His/her old account will still be used but a new password will be generated.', 'Account', '0000-00-00', 0),
(11, 'What if the student has incorrect information in the database?', 'Please assess first why the student is using our system. If this is for clearance purposes because they plan to leave the university, just create another account and remind them to use the account you created (not their SystemOne account). However, if the', 'Account', '0000-00-00', 2),
(14, 'Can this account be used in SystemOne?', 'No. While SystemOne accounts can be used in the OSAM System, all accounts ending in "@osa" are local temporary accounts.', 'Account', '2014-05-19', 0),
(16, 'What if the student needs to access SystemOne?', 'They must look for Mr. Rommel Bulalacao from the Institute of Computer Science.', 'Account', '2014-05-19', 0),
(17, 'What if the student has no mobile number?', 'The student can instead provide a mobile number of a friend. If the student has no friend, feel free to befriend the student.', 'Account', '2014-05-19', 0),
(18, 'When will the student receive his/her account details?', 'This is automated. They will receive the SMS within 1-2 minutes containing login instructions.', 'Account', '2014-05-19', 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`gid`, `firstname`, `lastname`, `email`) VALUES
(1, 'Dyanara', 'Dela Rosa', 'budjako@gmail.com'),
(2, 'Dyanara', 'Dela Rosa', 'dyanara_29@yahoo.com'),
(3, 'kureeru', 'sumo', 'kureeru@gmail.com'),
(4, 'kureeru', 'sumo', 'kureeru@gmail.com'),
(5, 'kureeru', 'sumo', 'kureeru@gmail.com'),
(6, 'kureeru', 'kureeru', 'kureeru@gmail.com'),
(7, 'kureeru', 'sumo', 'kureeru@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `logid` int(11) NOT NULL AUTO_INCREMENT,
  `datecommit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description` varchar(255) NOT NULL,
  `type` int(1) NOT NULL,
  `faq_no` int(11) DEFAULT NULL,
  `t_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`logid`),
  KEY `faq_no` (`faq_no`),
  KEY `t_id` (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`logid`, `datecommit`, `description`, `type`, `faq_no`, `t_id`) VALUES
(3, '2014-05-10 16:00:00', 'Lorem ipsum', 1, 1, NULL),
(4, '2014-05-10 16:00:00', 'Lorem ipsum', 1, 2, NULL),
(5, '2014-05-10 16:00:00', 'Lorem ipsum', 1, 3, NULL),
(6, '2014-05-10 16:00:00', 'Lorem ipsum', 1, 4, NULL),
(7, '2014-05-10 16:00:00', 'Lorem ipsum', 1, 5, NULL),
(8, '2014-05-10 16:00:00', 'Lorem ipsum', 2, NULL, 1),
(9, '2014-05-10 16:00:00', 'Lorem ipsum', 2, NULL, 2),
(10, '2014-05-10 16:00:00', 'Lorem ipsum', 2, NULL, 3),
(11, '2014-05-10 16:00:00', 'Lorem ipsum', 2, NULL, 4),
(12, '2014-05-10 16:00:00', 'Lorem ipsum', 2, NULL, 5);

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
(123456781, 'sbudjako1', 'Leticia', 'Afuang', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085862'),
(123456782, 'sbudjako2', 'Miguel', 'Abriol-Santos', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085863'),
(123456783, 'sbudjako3', 'Kim', 'Samaniego', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085864'),
(123456784, 'sbudjako4', 'Jenette', 'Tamayo', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085865'),
(123456785, 'sbudjako5', 'Ferdie', 'Ocampo', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085866');

-- --------------------------------------------------------

--
-- Table structure for table `staffoffices`
--

CREATE TABLE IF NOT EXISTS `staffoffices` (
  `staff_id` int(11) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `division` varchar(50) NOT NULL,
  PRIMARY KEY (`staff_id`,`designation`,`division`),
  KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffoffices`
--

INSERT INTO `staffoffices` (`staff_id`, `designation`, `division`) VALUES
(123456781, 'Director', 'DO'),
(123456781, 'Director', 'EXECOM'),
(123456782, 'Head, COMMIT', 'COMMIT'),
(123456782, 'Head, COMMIT', 'EXECOM'),
(123456783, 'Project Dev. Associate', 'COMMIT'),
(123456784, 'Scholarship Affair Assistant', 'SFAD'),
(123456785, 'Jr. Scholarships Affair Officer', 'SFAD');

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
('2011-29712', 'budjako2', 'Patrick', 'Ursolino', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085863'),
('2011-29713', 'budjako3', 'Clare', 'Sumo', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085864'),
('2011-29714', 'budjako4', 'Raphael Nelo', 'Aguila', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085865'),
('2011-29715', 'budjako5', 'Camille', 'Agbay', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085866'),
('2011-29716', 'budjako6', 'Eimereen', 'Alido', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'budjako@gmail.com', '09463085867');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE IF NOT EXISTS `threads` (
  `thid` int(11) NOT NULL AUTO_INCREMENT,
  `t_id` int(11) NOT NULL,
  `respondent` int(1) NOT NULL,
  `datesubmit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `body` varchar(255) NOT NULL,
  PRIMARY KEY (`thid`,`t_id`),
  KEY `t_id` (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thid`, `t_id`, `respondent`, `datesubmit`, `body`) VALUES
(1, 1, 0, '2014-05-23 05:15:36', 'Lorem ipsum'),
(2, 1, 1, '2014-05-23 05:16:26', 'staff reply 1'),
(4, 2, 0, '2014-05-23 08:20:04', 'Lorem ipsum'),
(5, 1, 0, '2014-05-23 08:34:52', 'this is a reply from the user'),
(5, 3, 0, '2014-05-23 08:20:10', 'Lorem ipsum'),
(6, 4, 0, '2014-05-23 08:20:15', 'Lorem ipsum'),
(7, 1, 0, '2014-05-24 03:05:01', 'this is a reply');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `datesubmit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tag` varchar(255) DEFAULT NULL,
  `division` varchar(10) NOT NULL,
  `status` int(1) NOT NULL,
  `datelastupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` int(1) NOT NULL,
  `student_no` varchar(11) DEFAULT NULL,
  `g_id` int(11) DEFAULT NULL,
  `staff_id` int(9) DEFAULT NULL,
  `source` tinyint(1) NOT NULL,
  PRIMARY KEY (`tid`),
  KEY `student_no` (`student_no`),
  KEY `e_mail` (`g_id`),
  KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`tid`, `subject`, `datesubmit`, `tag`, `division`, `status`, `datelastupdate`, `type`, `student_no`, `g_id`, `staff_id`, `source`) VALUES
(1, 'SUBJECT 1', '2014-05-25 06:39:52', '', 'EXECOM', 2, '2014-05-10 16:00:00', 0, '2011-29711', NULL, 123456781, 0),
(2, 'SUBJECT 2', '2014-05-10 16:00:00', '', 'EXECOM', 0, '2014-05-10 16:00:00', 0, NULL, 1, 123456781, 0),
(3, 'SUBJECT 3', '2014-05-10 16:00:00', '', 'EXECOM', 0, '2014-05-10 16:00:00', 0, '2011-29712', NULL, 123456782, 0),
(4, 'SUBJECT 4', '2014-05-10 16:00:00', '', 'EXECOM', 0, '2014-05-10 16:00:00', 0, NULL, 2, 123456783, 0),
(5, 'SUBJECT 5', '2014-05-10 16:00:00', '', 'EXECOM', 0, '2014-05-10 16:00:00', 0, '2011-29714', NULL, 123456784, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`faq_no`) REFERENCES `faqs` (`faqno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `logs_ibfk_2` FOREIGN KEY (`t_id`) REFERENCES `tickets` (`tid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staffoffices`
--
ALTER TABLE `staffoffices`
  ADD CONSTRAINT `staffoffices_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staffid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `threads`
--
ALTER TABLE `threads`
  ADD CONSTRAINT `threads_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `tickets` (`tid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`g_id`) REFERENCES `guests` (`gid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tickets_ibfk_2` FOREIGN KEY (`student_no`) REFERENCES `students` (`studentno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tickets_ibfk_3` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staffid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
