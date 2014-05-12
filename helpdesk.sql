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

CREATE TABLE IF NOT EXISTS `concern` (
  `c_no` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(70) NOT NULL,
  `body` varchar(255) NOT NULL,
  `source` varchar(11) NOT NULL,
  `view` int(1) NOT NULL DEFAULT '0',
  `sender` varchar(60) NOT NULL,
  PRIMARY KEY (`c_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `concern`
--

INSERT INTO `concern` (`c_no`, `subject`, `body`, `source`, `view`, `sender`) VALUES
(1, 'Concern 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', 'email', 0, 'dyanara_29@yahoo.com'),
(2, 'Concern 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', 'web', 1, 'dyanara_29@yahoo.com'),
(3, 'Concern 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', 'email', 0, 'dyanara_29@yahoo.com'),
(4, 'Concern 4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', 'email', 1, 'budjako@gmail.com'),
(5, 'Concern 5', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', 'web', 0, 'budjako@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `division_c`
--

CREATE TABLE IF NOT EXISTS `division_c` (
  `c_no` int(11) NOT NULL,
  `division` varchar(11) NOT NULL,
  PRIMARY KEY (`c_no`,`division`),
  KEY `c_no` (`c_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `division_c`
--

INSERT INTO `division_c` (`c_no`, `division`) VALUES
(1, 'COMMIT'),
(2, 'COMMIT'),
(2, 'SFAD'),
(3, 'DO'),
(3, 'ISS'),
(4, 'CTD');

-- --------------------------------------------------------

--
-- Table structure for table `division_faq`
--

CREATE TABLE IF NOT EXISTS `division_faq` (
  `faq_no` int(11) NOT NULL,
  `division` varchar(11) NOT NULL,
  PRIMARY KEY (`faq_no`,`division`),
  KEY `faq_no` (`faq_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `division_faq`
--

INSERT INTO `division_faq` (`faq_no`, `division`) VALUES
(1, 'EXECOM'),
(2, 'ISS'),
(2, 'SOAD'),
(3, 'COMMIT'),
(3, 'SOAD'),
(4, 'CTD'),
(4, 'SDT');

-- --------------------------------------------------------

--
-- Table structure for table `division_staff`
--

CREATE TABLE IF NOT EXISTS `division_staff` (
  `e_no` int(11) NOT NULL,
  `division` varchar(11) NOT NULL,
  PRIMARY KEY (`e_no`,`division`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `division_staff`
--

INSERT INTO `division_staff` (`e_no`, `division`) VALUES
(1234567890, 'DO'),
(1234567890, 'EXECOM'),
(1234567891, 'COMMIT'),
(1234567892, 'EXECOM'),
(1234567893, 'SDT'),
(1234567894, 'EXECOM'),
(1234567894, 'ISS'),
(1234567895, 'CTD'),
(1234567896, 'SFAD'),
(1234567897, 'SOAD');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `faq_no` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  PRIMARY KEY (`faq_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_no`, `question`, `answer`) VALUES
(1, 'Question 1', 'Answer 1'),
(2, 'Question 2', 'Answer 2'),
(3, 'Question 3', 'Answer 3'),
(4, 'Question 4', 'Answer 4'),
(5, 'Question 5', 'Answer 5');

-- --------------------------------------------------------

--
-- Table structure for table `manage_faq`
--

CREATE TABLE IF NOT EXISTS `manage_faq` (
  `e_no` int(11) NOT NULL,
  `c_no` int(11) NOT NULL,
  `date_updated` date NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`e_no`,`c_no`),
  KEY `e_no` (`e_no`),
  KEY `c_no` (`c_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_faq`
--

INSERT INTO `manage_faq` (`e_no`, `c_no`, `date_updated`, `type`) VALUES
(1234567891, 1, '2014-05-11', 'add'),
(1234567892, 2, '2014-05-11', 'edit'),
(1234567893, 3, '2014-05-09', 'add'),
(1234567894, 4, '2014-05-12', 'edit'),
(1234567895, 5, '2014-05-11', 'add');

-- --------------------------------------------------------

--
-- Table structure for table `receive`
--

CREATE TABLE IF NOT EXISTS `receive` (
  `e_no` int(11) NOT NULL,
  `c_no` int(11) NOT NULL,
  `date_received` date NOT NULL,
  PRIMARY KEY (`e_no`,`c_no`),
  KEY `e_no` (`e_no`),
  KEY `c_no` (`c_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receive`
--

INSERT INTO `receive` (`e_no`, `c_no`, `date_received`) VALUES
(1234567890, 1, '2014-05-11'),
(1234567891, 2, '2014-05-07'),
(1234567892, 3, '2014-05-06'),
(1234567893, 4, '2014-05-11'),
(1234567894, 5, '2014-05-11');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `r_no` int(11) NOT NULL AUTO_INCREMENT,
  `c_no` int(11) NOT NULL,
  `e_no` int(11) NOT NULL,
  `body` varchar(255) NOT NULL,
  `date_sent` date NOT NULL,
  PRIMARY KEY (`r_no`,`c_no`,`e_no`),
  KEY `r_no` (`r_no`,`c_no`,`e_no`),
  KEY `c_no` (`c_no`),
  KEY `e_no` (`e_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`r_no`, `c_no`, `e_no`, `body`, `date_sent`) VALUES
(1, 1, 1234567891, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', '2014-05-11'),
(2, 2, 1234567892, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', '2014-05-11'),
(3, 3, 1234567893, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', '2014-05-11'),
(4, 4, 1234567894, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', '2014-05-11'),
(5, 5, 1234567895, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', '2014-05-11');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `e_no` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `position` varchar(50) NOT NULL,
  `name` varchar(60) NOT NULL,
  PRIMARY KEY (`e_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`e_no`, `email`, `password`, `position`, `name`) VALUES
(1234567890, 'budjako@gmail.com', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'director', 'Leticia Afuang'),
(1234567891, 'budjako@gmail.com', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'administrative officer', 'Niel Genosa'),
(1234567892, 'budjako@gmail.com', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'Head SOAD', 'Mark Lester Chico'),
(1234567893, 'budjako@gmail.com', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'non-government worker', 'Elizabeth Silot'),
(1234567894, 'budjako@gmail.com', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'Head', 'Erick Vernon Dy'),
(1234567895, 'budjako@gmail.com', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'Program Support Assistant', 'Francis Contemplacion'),
(1234567896, 'budjako@gmail.com', 'budjakogmail', 'Head', 'Jenette Tamayo'),
(1234567897, 'budjako@gmail.com', '9e1b05d52afb91d83f9f3b0374218a9d974d1bed', 'administrative officer', 'Marites Mojica');

-- --------------------------------------------------------

--
-- Table structure for table `tag_c`
--

CREATE TABLE IF NOT EXISTS `tag_c` (
  `c_no` int(11) NOT NULL,
  `tag` varchar(20) NOT NULL,
  PRIMARY KEY (`c_no`,`tag`),
  KEY `c_no` (`c_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tag_c`
--

INSERT INTO `tag_c` (`c_no`, `tag`) VALUES
(1, 'SLB'),
(1, 'STFAP'),
(2, 'Org Recognition'),
(4, 'SLB'),
(4, 'STS'),
(5, 'clearance');

-- --------------------------------------------------------

--
-- Table structure for table `tag_faq`
--

CREATE TABLE IF NOT EXISTS `tag_faq` (
  `faq_no` int(11) NOT NULL,
  `tag` varchar(20) NOT NULL,
  PRIMARY KEY (`faq_no`,`tag`),
  KEY `faq_no` (`faq_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tag_faq`
--

INSERT INTO `tag_faq` (`faq_no`, `tag`) VALUES
(1, 'SLB'),
(1, 'STS'),
(2, 'STFAP'),
(3, 'clearance'),
(4, 'SLB');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `division_c`
--
ALTER TABLE `division_c`
  ADD CONSTRAINT `division_c_ibfk_1` FOREIGN KEY (`c_no`) REFERENCES `concern` (`c_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `division_faq`
--
ALTER TABLE `division_faq`
  ADD CONSTRAINT `division_faq_ibfk_1` FOREIGN KEY (`faq_no`) REFERENCES `faq` (`faq_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `division_staff`
--
ALTER TABLE `division_staff`
  ADD CONSTRAINT `division_staff_ibfk_1` FOREIGN KEY (`e_no`) REFERENCES `staff` (`e_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manage_faq`
--
ALTER TABLE `manage_faq`
  ADD CONSTRAINT `manage_faq_ibfk_2` FOREIGN KEY (`c_no`) REFERENCES `concern` (`c_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manage_faq_ibfk_1` FOREIGN KEY (`e_no`) REFERENCES `staff` (`e_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `receive`
--
ALTER TABLE `receive`
  ADD CONSTRAINT `receive_ibfk_2` FOREIGN KEY (`c_no`) REFERENCES `concern` (`c_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `receive_ibfk_1` FOREIGN KEY (`e_no`) REFERENCES `staff` (`e_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `reply_ibfk_3` FOREIGN KEY (`e_no`) REFERENCES `staff` (`e_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reply_ibfk_2` FOREIGN KEY (`c_no`) REFERENCES `concern` (`c_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tag_c`
--
ALTER TABLE `tag_c`
  ADD CONSTRAINT `tag_c_ibfk_1` FOREIGN KEY (`c_no`) REFERENCES `concern` (`c_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tag_faq`
--
ALTER TABLE `tag_faq`
  ADD CONSTRAINT `tag_faq_ibfk_1` FOREIGN KEY (`faq_no`) REFERENCES `faq` (`faq_no`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
