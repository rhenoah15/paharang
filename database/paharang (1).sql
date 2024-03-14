-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 07:20 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `paharang`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomplishment_plan`
--

CREATE TABLE IF NOT EXISTS `accomplishment_plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` text,
  `teacher` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `action_plan`
--

CREATE TABLE IF NOT EXISTS `action_plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` text,
  `teacher` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ay`
--

CREATE TABLE IF NOT EXISTS `ay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ay1` text,
  `semester` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` text,
  `description` text,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `junior`
--

CREATE TABLE IF NOT EXISTS `junior` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` text,
  `department` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `junior`
--

INSERT INTO `junior` (`id`, `course`, `department`) VALUES
(2, 'Grade 7', 'Junior High School'),
(3, 'Grade 8', 'Junior High School'),
(4, 'Grade 9', 'Junior High School'),
(5, 'Grade 10', 'Junior High School');

-- --------------------------------------------------------

--
-- Table structure for table `juniorstudents`
--

CREATE TABLE IF NOT EXISTS `juniorstudents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` text,
  `lname` text,
  `mname` text,
  `idnumber` text,
  `course` text,
  `gender` text,
  `status` text,
  `guardian` text,
  `section` text,
  `cguardian` text,
  `email` text,
  `bday` text,
  `status1` varchar(255) NOT NULL,
  `firstdose` varchar(255) NOT NULL,
  `seconddose` varchar(255) NOT NULL,
  `d1` varchar(255) NOT NULL,
  `d2` varchar(255) NOT NULL,
  `booster1` varchar(255) NOT NULL,
  `booster2` varchar(255) NOT NULL,
  `d3` varchar(255) NOT NULL,
  `d4` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `juniorsubjects`
--

CREATE TABLE IF NOT EXISTS `juniorsubjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` text,
  `description` text,
  `course` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `junior_payment`
--

CREATE TABLE IF NOT EXISTS `junior_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text,
  `reason` text,
  `amount` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text,
  `password` text,
  `type` text,
  `year` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `lrn` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `bday` varchar(255) NOT NULL,
  `ext` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `stat` varchar(255) NOT NULL,
  `d1` varchar(255) NOT NULL,
  `d2` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`, `year`, `name`, `course`, `address`, `contact`, `email`, `fname`, `lname`, `lrn`, `sex`, `bday`, `ext`, `status`, `stat`, `d1`, `d2`, `mname`) VALUES
(1, 'admin', 'admin', 'admin', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 's', 's', 'Faculty', '', 's', '', 's', 's', 's', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'j', 'j', 'Faculty', '', 'j', '', 'j', 'jj', 'j', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'c', 'c', 'student', '1', '', '', '', 'a', 'a@a.com', 'c', 'c', '', 'Male', '2023-10-31', 'c', '', '', '', '', 'c'),
(5, '1234', 'Abcdefgh1', 'Faculty', '', 'Juan Dela Cruz', '', 'Batangas City', '099999999', 'juan@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(6, '0000', 'Abcdefgh1', 'student', '1', '', '', '', '09999', 'a@a.com', 'Maria', 'Clara', '', 'Female', '2021-06-07', '', '', '', '', '', 'C'),
(7, 's', 'password', 'student', '', '', '', '', '', 'a@a.com', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'c', 'password', 'student', '', '', '', '', '', 'c@a.com', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'cc', 'password', 'teacher', '', '', '', '', '', 'c@c.com', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'jk', 'password', 'student', '', '', '', '', '', 'a@a.com', '', '', '', '', '', '', '', '', '', '', ''),
(11, '123457', 'password', 'teacher', '', '', '', '', '', 'cm@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'mary', 'password', 'student', '', '', '', '', '', 'mary@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(13, '123456789', 'password', 'student', '', '', '', '', '', 'a@a.com', '', '', '', '', '', '', '', '', '', '', ''),
(14, '12345', 'password', 'student', '', '', '', '', '', 'sa@a.com', '', '', '', '', '', '', '', '', '', '', ''),
(15, '98765', 'password', 'student', '', '', '', '', '', 'a@a.com', '', '', '', '', '', '', '', '', '', '', ''),
(16, '986', 'password', 'student', '', '', '', '', '', 'a@a.com', '', '', '', '', '', '', '', '', '', '', ''),
(17, '5', 'password', 'student', '', '', '', '', '', 'ca@a.com', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `modular_plan`
--

CREATE TABLE IF NOT EXISTS `modular_plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` text,
  `teacher` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `term` varchar(30) NOT NULL,
  `week` int(30) NOT NULL,
  `idnumber` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `score` text NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sched`
--

CREATE TABLE IF NOT EXISTS `sched` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `times` varchar(255) DEFAULT NULL,
  `timed` varchar(255) DEFAULT NULL,
  `day1` varchar(255) DEFAULT NULL,
  `day2` varchar(255) DEFAULT NULL,
  `day3` varchar(255) DEFAULT NULL,
  `day4` varchar(255) DEFAULT NULL,
  `day5` varchar(255) DEFAULT NULL,
  `day6` varchar(255) DEFAULT NULL,
  `room` varchar(255) DEFAULT NULL,
  `course` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` text,
  `section` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `senior`
--

CREATE TABLE IF NOT EXISTS `senior` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grade` text,
  `course` text,
  `strand` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `senior`
--

INSERT INTO `senior` (`id`, `grade`, `course`, `strand`) VALUES
(1, 'Grade 11', 'Senior High School', 'ABM'),
(3, 'Grade 12', 'Senior High School', 'HUMSS');

-- --------------------------------------------------------

--
-- Table structure for table `seniorstudents`
--

CREATE TABLE IF NOT EXISTS `seniorstudents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` text,
  `lname` text,
  `mname` text,
  `idnumber` text,
  `grade` text,
  `strand` text,
  `gender` text,
  `status` text,
  `guardian` text,
  `section` text,
  `cguardian` text,
  `email` text,
  `bday` text,
  `status1` varchar(255) NOT NULL,
  `firstdose` varchar(255) NOT NULL,
  `seconddose` varchar(255) NOT NULL,
  `d1` varchar(255) NOT NULL,
  `d2` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `booster1` varchar(255) NOT NULL,
  `booster2` varchar(255) NOT NULL,
  `d3` varchar(255) NOT NULL,
  `d4` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `seniorsubjects`
--

CREATE TABLE IF NOT EXISTS `seniorsubjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` text,
  `description` text,
  `grade` text,
  `strand` text,
  `semester` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `senior_payment`
--

CREATE TABLE IF NOT EXISTS `senior_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text,
  `reason` text,
  `amount` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `studsub`
--

CREATE TABLE IF NOT EXISTS `studsub` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `student` varchar(255) DEFAULT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `yearlevel` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `idnumber` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `work` varchar(10) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `bday` varchar(30) NOT NULL,
  `type` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstdose` varchar(255) NOT NULL,
  `seconddose` varchar(255) NOT NULL,
  `d1` varchar(255) NOT NULL,
  `d2` varchar(255) NOT NULL,
  `booster1` varchar(255) NOT NULL,
  `booster2` varchar(255) NOT NULL,
  `d3` varchar(255) NOT NULL,
  `d4` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `teachersubject`
--

CREATE TABLE IF NOT EXISTS `teachersubject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE IF NOT EXISTS `tools` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text,
  `title` text,
  `description` text,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text,
  `name` text,
  `section` text,
  `file` longtext,
  `number` text,
  `date` text,
  `reason` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
