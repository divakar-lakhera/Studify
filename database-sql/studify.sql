-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 06, 2019 at 12:09 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studify`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminauth`
--

DROP TABLE IF EXISTS `adminauth`;
CREATE TABLE IF NOT EXISTS `adminauth` (
  `uid` varchar(50) DEFAULT NULL,
  `pwd` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminauth`
--

INSERT INTO `adminauth` (`uid`, `pwd`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3'),
('admin@ams.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `collevent`
--

DROP TABLE IF EXISTS `collevent`;
CREATE TABLE IF NOT EXISTS `collevent` (
  `coll_name` varchar(100) NOT NULL,
  `eventDesc` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collevent`
--

INSERT INTO `collevent` (`coll_name`, `eventDesc`) VALUES
('NIT-Rourkela', 'NIT-R invites you to 9th Edition of NIT Conclave.<br>\r\nBUILD.INOVATE.CREATE<br>\r\nFor further information contact Amit: 987983939 '),
('NIT-Uttarakhand', '\"Cliffesto\", Annual Cultural and Technical Festival is coming this November.<br>\r\nAll Intrested Students can contact Respective GS and CSA members.'),
('DIT-Dehradun', 'Hello From DIT'),
('NIT-Uttarakhand', 'Some Random Notice');

-- --------------------------------------------------------

--
-- Table structure for table `facnotice`
--

DROP TABLE IF EXISTS `facnotice`;
CREATE TABLE IF NOT EXISTS `facnotice` (
  `fac_id` int(4) NOT NULL,
  `notice` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facnotice`
--

INSERT INTO `facnotice` (`fac_id`, `notice`) VALUES
(1007, 'Hello Students !!'),
(1008, 'Hello From ECE Department !!'),
(1007, 'Hello Again \r\n'),
(1008, 'Hello Again From ECE\r\n'),
(1007, 'Random Notice 101');

-- --------------------------------------------------------

--
-- Table structure for table `profs`
--

DROP TABLE IF EXISTS `profs`;
CREATE TABLE IF NOT EXISTS `profs` (
  `fac_id` int(4) NOT NULL AUTO_INCREMENT,
  `fac_name` varchar(30) DEFAULT NULL,
  `fac_dept` varchar(3) DEFAULT NULL,
  `fac_pwd` varchar(50) DEFAULT NULL,
  `fac_email` varchar(30) DEFAULT NULL,
  `fac_phno` bigint(20) DEFAULT NULL,
  `fac_dp` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`fac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1009 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profs`
--

INSERT INTO `profs` (`fac_id`, `fac_name`, `fac_dept`, `fac_pwd`, `fac_email`, `fac_phno`, `fac_dp`) VALUES
(1007, 'Sumit Sharma', 'CSE', 'f9598c2dd34ad2c3f75c05278b6f442f', 'sumit1980@gmail.com', 799838182, 'usr/tech/200teacher.svg'),
(1008, 'Aditi Sharma', 'ECE', '2b6af4c5a1a6387fd6fbff6c7089a76d', 'aditi10@gmail.com', 989877673, 'usr/tech/16girl.svg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `std_id` int(4) NOT NULL AUTO_INCREMENT,
  `std_name` varchar(20) DEFAULT NULL,
  `std_branch` varchar(3) DEFAULT NULL,
  `std_pwd` varchar(50) DEFAULT NULL,
  `std_email` varchar(30) DEFAULT NULL,
  `std_phno` bigint(20) DEFAULT NULL,
  `std_dpLoc` varchar(100) DEFAULT NULL,
  `collRollno` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`std_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `std_name`, `std_branch`, `std_pwd`, `std_email`, `std_phno`, `std_dpLoc`, `collRollno`) VALUES
(5, 'Divakar Lakhera', 'CSE', '0046033830656ca2e72e6e9fa14ee283', 'divakarlakhera99@gmail.com', 9639930676, 'usr/1310mstd2.svg', 'BT18CSE002'),
(6, 'Jay Sharma', 'MEC', 'f0e7d0d17cff891edbc9cdf92dcd9297', 'jay12@gmail.com', 9182381238, 'usr/19mstd2.svg', 'BT123CS');

-- --------------------------------------------------------

--
-- Table structure for table `student_courses`
--

DROP TABLE IF EXISTS `student_courses`;
CREATE TABLE IF NOT EXISTS `student_courses` (
  `std_id` int(4) NOT NULL,
  `std_courseID` varchar(10) NOT NULL,
  `std_attd` decimal(8,2) DEFAULT NULL,
  `std_grade` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`std_id`,`std_courseID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_courses`
--

INSERT INTO `student_courses` (`std_id`, `std_courseID`, `std_attd`, `std_grade`) VALUES
(5, 'CEL101', '77.00', 'AB'),
(5, 'CSL201', '87.00', 'AA'),
(5, 'EEL101', '78.00', 'AA'),
(5, 'MEL101', '98.00', 'AB'),
(5, 'SCL102', '77.00', 'CC'),
(5, 'SCL104', '67.00', 'AB'),
(6, 'CEL101', '78.00', 'AB'),
(6, 'CSL201', '45.00', 'BB'),
(6, 'EEL101', '78.00', 'AA'),
(6, 'MEL101', '85.00', 'CC'),
(6, 'SCL102', '12.00', 'DD'),
(6, 'SCL104', '78.00', 'AA');

-- --------------------------------------------------------

--
-- Table structure for table `student_grade`
--

DROP TABLE IF EXISTS `student_grade`;
CREATE TABLE IF NOT EXISTS `student_grade` (
  `std_id` int(4) NOT NULL,
  `std_sem` int(1) NOT NULL,
  `std_cgpa` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`std_id`,`std_sem`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_grade`
--

INSERT INTO `student_grade` (`std_id`, `std_sem`, `std_cgpa`) VALUES
(5, 1, '8.20'),
(5, 2, '7.50'),
(5, 3, '8.90'),
(5, 4, '0.00'),
(5, 5, '0.00'),
(5, 6, '0.00'),
(5, 7, '0.00'),
(5, 8, '0.00'),
(6, 1, '9.00'),
(6, 2, '6.00'),
(6, 3, '0.00'),
(6, 4, '0.00'),
(6, 5, '0.00'),
(6, 6, '0.00'),
(6, 7, '0.00'),
(6, 8, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `subjects_avail`
--

DROP TABLE IF EXISTS `subjects_avail`;
CREATE TABLE IF NOT EXISTS `subjects_avail` (
  `std_courseID` varchar(10) NOT NULL,
  `courseName` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`std_courseID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects_avail`
--

INSERT INTO `subjects_avail` (`std_courseID`, `courseName`) VALUES
('CEL101', 'Engineering Mechanics'),
('CEL102', 'Environmental Science'),
('CSL101', 'Computer Programming'),
('CSL201', 'Data Structure and Program Design'),
('CSL202', 'Computer Organisation'),
('CSL203', 'Concepts in Programming Language'),
('CSL204', 'Introduction to Object Oriented Programming'),
('ECB101', 'Introduction to Engineering'),
('ECL202', 'Digital Circuits'),
('EEL101', 'Elementary Electrical Engineering.'),
('EEP101', 'Electrical Workshop'),
('HMD201', 'Community Project'),
('HML101', 'Social Science'),
('HMP102', 'Spoken English'),
('HMP103', 'Written English'),
('MEL101', 'Engineering Drawing'),
('MEP101', 'Mechanical Workshop'),
('MEP102', 'Product Realisation'),
('SCL102', 'Applied Mathematics'),
('SCL103', 'Applied Mathematics 2'),
('SCL104', 'Applied Physics'),
('SCL105', 'Applied Chemistry'),
('SCL204', 'Discrete Mathematics'),
('SPB101', 'Sports -1 '),
('SPB102', 'Sports - 2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
