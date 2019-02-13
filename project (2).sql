-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2018 at 01:01 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `user_name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`user_name`, `password`) VALUES
('mati', '123'),
('mule', '987'),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('yakob', '98765'),
('addisu', '123'),
('eeww', '123'),
('mmm', '123'),
('mmm', '5'),
('hhh', '5'),
('rr', '4'),
('gg', 'b'),
('gg', 'b'),
('gg', 'b'),
('gg', 'b'),
('yakob', '98765');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
`cId` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cId`, `name`) VALUES
(1, 'architecture'),
(2, 'php'),
(3, 'information security'),
(4, 'networking'),
(5, 'software testing');

-- --------------------------------------------------------

--
-- Table structure for table `evaluations`
--

CREATE TABLE IF NOT EXISTS `evaluations` (
`Id` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `cId` int(11) DEFAULT NULL,
  `stId` int(11) DEFAULT NULL,
  `instrId` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `evaluations`
--

INSERT INTO `evaluations` (`Id`, `name`, `cId`, `stId`, `instrId`, `semester`) VALUES
(1, 'course Organization ', NULL, NULL, NULL, NULL),
(2, 'Knowledge Transfer ', NULL, NULL, NULL, NULL),
(4, 'Teaching Methods ', NULL, NULL, NULL, NULL),
(5, 'Student Involvement and Classroom Management ', NULL, NULL, NULL, NULL),
(6, 'Evaluation Method ', NULL, NULL, NULL, NULL),
(7, 'Personality Traits ', NULL, NULL, NULL, NULL),
(13, 'Availability ', 4, NULL, NULL, NULL),
(14, 'yuikuk', 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_result`
--

CREATE TABLE IF NOT EXISTS `evaluation_result` (
`Id` int(11) NOT NULL,
  `I_name` varchar(50) NOT NULL,
  `C_name` varchar(50) NOT NULL,
  `E_name` varchar(50) NOT NULL,
  `E_VALUE` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `evaluation_result`
--

INSERT INTO `evaluation_result` (`Id`, `I_name`, `C_name`, `E_name`, `E_VALUE`) VALUES
(1, 'Addisu', 'architecture', 'course Organization ', 'strongly disagree'),
(6, 'Addisu', 'architecture', 'Personality Traits ', 'strongly disagree'),
(8, 'mulugeta', 'software testing', 'course Organization ', 'strongly disagree'),
(54, 'Addisu', 'architecture', 'Personality Traits ', 'strongly disagree'),
(55, 'Addisu', 'architecture', 'Availability ', 'strongly disagree');

-- --------------------------------------------------------

--
-- Table structure for table `givenvalue`
--

CREATE TABLE IF NOT EXISTS `givenvalue` (
`gId` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `givenvalue`
--

INSERT INTO `givenvalue` (`gId`, `name`) VALUES
(1, 'very disagree'),
(2, 'disagree'),
(3, 'agree'),
(4, 'very agree'),
(5, 'certain');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE IF NOT EXISTS `instructor` (
`instrId` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `cId` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instrId`, `name`, `cId`) VALUES
(1, 'Addisu', NULL),
(2, 'yakob', NULL),
(3, 'mulugeta', NULL),
(4, 'birhan', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
`rId` int(11) NOT NULL,
  `gId` int(11) DEFAULT NULL,
  `Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `resulttwo`
--

CREATE TABLE IF NOT EXISTS `resulttwo` (
  `name` varchar(100) DEFAULT NULL,
  `gresult` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resulttwo`
--

INSERT INTO `resulttwo` (`name`, `gresult`) VALUES
('assignment given', ''),
('take attendance', ''),
('do  not miss the class', ''),
('give make up class', ''),
('teaching mood is student centre', ''),
('send text before class when miss the class', ''),
('present in the class on time', ''),
('finish class on the schedule', ''),
('give reference book', ''),
('ufff', ''),
('ufff', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
`stId` int(11) NOT NULL,
  `fname` varchar(500) DEFAULT NULL,
  `mname` varchar(500) DEFAULT NULL,
  `lname` varchar(500) DEFAULT NULL,
  `cId` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stId`, `fname`, `mname`, `lname`, `cId`) VALUES
(1, 'Addis', 'getenet', 'wod', 23),
(2, 'samrawit', 'tesfalem', 'hagos', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
 ADD PRIMARY KEY (`cId`);

--
-- Indexes for table `evaluations`
--
ALTER TABLE `evaluations`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `evaluation_result`
--
ALTER TABLE `evaluation_result`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `givenvalue`
--
ALTER TABLE `givenvalue`
 ADD PRIMARY KEY (`gId`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
 ADD PRIMARY KEY (`instrId`), ADD KEY `cId` (`cId`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
 ADD PRIMARY KEY (`rId`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`stId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
MODIFY `cId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `evaluations`
--
ALTER TABLE `evaluations`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `evaluation_result`
--
ALTER TABLE `evaluation_result`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `givenvalue`
--
ALTER TABLE `givenvalue`
MODIFY `gId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
MODIFY `instrId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
MODIFY `rId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
MODIFY `stId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `instructor`
--
ALTER TABLE `instructor`
ADD CONSTRAINT `instructor_ibfk_1` FOREIGN KEY (`cId`) REFERENCES `course` (`cId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
