-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 26, 2023 at 11:48 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crce`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `e_id` int NOT NULL AUTO_INCREMENT,
  `department` varchar(100) NOT NULL,
  `e_name` varchar(100) NOT NULL,
  `e_email` varchar(100) NOT NULL,
  `e_pwd` varchar(100) NOT NULL,
  `Designation` text NOT NULL,
  `Salary` int NOT NULL,
  `Join_Date` date NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_id`, `department`, `e_name`, `e_email`, `e_pwd`, `Designation`, `Salary`, `Join_Date`) VALUES
(1, 'Library', 'Loki Odinson', 'loki@gmail.com', 'loki', 'Assistant Professor', 50000, '1978-10-11'),
(2, 'Workshop', 'Tony Stark', 'tony@gmail.com', 'tony', 'Senior Professor', 70000, '2004-05-01'),
(3, 'Office', 'Mathew Murdock', 'matt@gmail.com', 'matt', 'Staff', 20000, '2021-11-10'),
(4, 'ECS', 'Thor Odinson', 'Thor@gmail.com', 'thor', 'Professor', 50000, '2017-01-04'),
(5, 'exam_cell', 'Samuel Wilson', 'sam@gmail.com', 'sam@gmail.com', 'Staff', 30000, '2023-01-01'),
(6, 'Hostel', 'Wanda Maximoff', 'wanda@gmail.com', 'wanda', 'Professor', 40000, '2023-01-11'),
(7, 'Mechanical', 'Peter Parker', 'peter@gmail.com', 'peter', 'HOD', 80000, '2022-09-14');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

DROP TABLE IF EXISTS `library`;
CREATE TABLE IF NOT EXISTS `library` (
  `book_id` int NOT NULL AUTO_INCREMENT,
  `book_name` varchar(100) NOT NULL,
  `author_name` varchar(100) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`book_id`, `book_name`, `author_name`) VALUES
(1, 'IOT book', 'abc'),
(2, 'CC book', 'xyz'),
(3, 'EC book', 'qwe'),
(4, 'CS book', 'mnp'),
(5, 'Robotics', 'qwertt');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `s_id` int NOT NULL AUTO_INCREMENT,
  `branch` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `pob` varchar(100) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `s_pwd` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `home_stn` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `ila` varchar(100) NOT NULL,
  `doa` varchar(100) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `remark` varchar(100) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1006 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `branch`, `first_name`, `last_name`, `mother_name`, `religion`, `gender`, `dob`, `pob`, `s_email`, `s_pwd`, `phone`, `year`, `home_stn`, `age`, `ila`, `doa`, `reason`, `remark`) VALUES
(1001, 'Electronics and Computer Science', 'Arpita', 'Kar', 'Dipannita Kar', 'Hindu', 'Female', '2001-07-14', 'Ullhasnagar', 'arpita@gmail.com', 'arpi', '8799804783', 'Final year', 'Nallasopara', '21', 'St. Willibrords High school', '01-07-2020', 'Completed Bachelor of Engineering', 'Bad'),
(1002, 'Electronics and Communication', 'Benhur', 'Falcao', 'Malika Falcao', 'Christian', 'Male', '', 'Vasai', 'ben@gmail.com', 'ben', '8799804783', 'Final year', 'Vasai', '21', 'St. Vidya Mandir', '01-07-2019', 'Completed Bachelor of Engineering', 'Good'),
(1003, 'Electronics and Telecommunication', 'Fazil', 'Shaikh', 'Jyoti Shaikh', 'Muslim', 'Male', '10-06-2001', 'Ghansoli', 'fazil@gmail.com', 'fazil', '8799804783', 'Final year', 'Bandra', '21', 'Holy Family School', '01-07-2020', 'Completed Bachelor of Engineering', 'Good'),
(1004, 'Computer Science', 'Saurabh', 'Wable', 'Mihika Wable', 'Hindu', 'Male', '10-06-2001', 'Andheri', 'saurabh@gmail.com', 'saurabh', '8799804783', 'Final year', 'Andheri', '21', 'St Mary School', '01-07-2019', 'Completed Bachelor of Engineering', 'Good'),
(1005, 'Electronics and Computer Science', 'Max ', 'Jonhson', 'Pallavi Johnson ', 'Christain', 'Male', '2000-12-11', 'Mira Road', 'max@gmail.com', 'max', '8799804783', 'Final year', 'Mira Road', '21', 'St Mary School', '01-07-2019', 'Completed Bachelor of Engineering', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `student_bonafide_map`
--

DROP TABLE IF EXISTS `student_bonafide_map`;
CREATE TABLE IF NOT EXISTS `student_bonafide_map` (
  `s_id` int NOT NULL,
  `bonafide_no` int NOT NULL AUTO_INCREMENT,
  `issue_date` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`bonafide_no`),
  KEY `s_id` (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_bonafide_map`
--

INSERT INTO `student_bonafide_map` (`s_id`, `bonafide_no`, `issue_date`, `reason`) VALUES
(1003, 17, '2022-10-11 18:28:18', 'Bus Concession'),
(1002, 16, '2022-10-11 18:27:48', 'Income Certificate'),
(1002, 21, '2023-01-15', 'Income Certificate'),
(1002, 22, '2023-01-15', 'Visa Application'),
(1002, 23, '2023-01-15', 'Bus Concession'),
(1003, 24, '2023-01-17', 'Educational loan'),
(1003, 25, '2023-01-17', 'Income Certificate'),
(1003, 26, '2023-01-17', 'Industrial visit'),
(1004, 27, '2023-01-17', 'Educational loan'),
(1004, 28, '2023-01-17', 'Industrial visit'),
(1001, 71, '2023-01-24', ''),
(1001, 70, '2023-01-24', 'Bus Concession'),
(1001, 69, '2023-01-24', 'Income Certificate');

-- --------------------------------------------------------

--
-- Table structure for table `student_doc_map`
--

DROP TABLE IF EXISTS `student_doc_map`;
CREATE TABLE IF NOT EXISTS `student_doc_map` (
  `sr` int NOT NULL AUTO_INCREMENT,
  `s_id` int NOT NULL,
  `fees` varchar(100) DEFAULT NULL,
  `tenth_mks` varchar(100) DEFAULT NULL,
  `twelfth_mks` varchar(100) DEFAULT NULL,
  `diploma_doc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`sr`),
  KEY `s_id` (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_doc_map`
--

INSERT INTO `student_doc_map` (`sr`, `s_id`, `fees`, `tenth_mks`, `twelfth_mks`, `diploma_doc`) VALUES
(1, 1001, 'Yes', 'Yes', 'Yes', 'Yes'),
(2, 1002, 'Yes', 'Yes', 'Yes', 'Yes'),
(3, 1003, 'Yes', 'Yes', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `student_ecs_map`
--

DROP TABLE IF EXISTS `student_ecs_map`;
CREATE TABLE IF NOT EXISTS `student_ecs_map` (
  `sr` int NOT NULL AUTO_INCREMENT,
  `s_id` int NOT NULL,
  `ecs_status` varchar(100) DEFAULT NULL,
  `dues` varchar(100) DEFAULT NULL,
  `damage` varchar(100) NOT NULL,
  `robotics` int NOT NULL,
  `mmvr` int NOT NULL,
  `nlp` int NOT NULL,
  `pm` int NOT NULL,
  PRIMARY KEY (`sr`),
  KEY `s_id` (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_ecs_map`
--

INSERT INTO `student_ecs_map` (`sr`, `s_id`, `ecs_status`, `dues`, `damage`, `robotics`, `mmvr`, `nlp`, `pm`) VALUES
(1, 1001, 'Yes', '', '', 65, 44, 37, 55),
(2, 1002, 'No', '11', 'broke fan', 0, 0, 0, 0),
(3, 1003, 'Yes', NULL, '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_exam_map`
--

DROP TABLE IF EXISTS `student_exam_map`;
CREATE TABLE IF NOT EXISTS `student_exam_map` (
  `dr` int NOT NULL AUTO_INCREMENT,
  `s_id` int NOT NULL,
  `all_sem_clear` varchar(100) DEFAULT NULL,
  `sem1_seat` varchar(100) NOT NULL,
  `sem1_marks` varchar(100) NOT NULL,
  `sem1_outoff` varchar(100) NOT NULL,
  `sem1_cgpa` varchar(100) NOT NULL,
  `sem1_month` varchar(100) NOT NULL,
  `sem2_seat` varchar(100) NOT NULL,
  `sem2_marks` varchar(100) NOT NULL,
  `sem2_outoff` varchar(100) NOT NULL,
  `sem2_cgpa` varchar(100) NOT NULL,
  `sem2_month` varchar(100) NOT NULL,
  `sem3_seat` varchar(100) NOT NULL,
  `sem3_marks` varchar(100) NOT NULL,
  `sem3_outoff` varchar(100) NOT NULL,
  `sem3_cgpa` varchar(100) NOT NULL,
  `sem3_month` varchar(100) NOT NULL,
  `sem4_seat` varchar(100) NOT NULL,
  `sem4_marks` varchar(100) NOT NULL,
  `sem4_outoff` varchar(100) NOT NULL,
  `sem4_cgpa` varchar(100) NOT NULL,
  `sem4_month` varchar(100) NOT NULL,
  `sem5_seat` varchar(100) NOT NULL,
  `sem5_marks` varchar(100) NOT NULL,
  `sem5_outoff` varchar(100) NOT NULL,
  `sem5_cgpa` varchar(100) NOT NULL,
  `sem5_month` varchar(100) NOT NULL,
  `sem6_seat` varchar(100) NOT NULL,
  `sem6_marks` varchar(100) NOT NULL,
  `sem6_outoff` varchar(100) NOT NULL,
  `sem6_cgpa` varchar(100) NOT NULL,
  `sem6_month` varchar(100) NOT NULL,
  `sem7_seat` varchar(100) NOT NULL,
  `sem7_marks` varchar(100) NOT NULL,
  `sem7_outoff` varchar(100) NOT NULL,
  `sem7_cgpa` varchar(100) NOT NULL,
  `sem7_month` varchar(100) NOT NULL,
  `sem8_seat` varchar(100) NOT NULL,
  `sem8_marks` varchar(100) NOT NULL,
  `sem8_outoff` varchar(100) NOT NULL,
  `sem8_cgpa` varchar(100) NOT NULL,
  `sem8_month` varchar(100) NOT NULL,
  PRIMARY KEY (`dr`),
  KEY `s_id` (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_exam_map`
--

INSERT INTO `student_exam_map` (`dr`, `s_id`, `all_sem_clear`, `sem1_seat`, `sem1_marks`, `sem1_outoff`, `sem1_cgpa`, `sem1_month`, `sem2_seat`, `sem2_marks`, `sem2_outoff`, `sem2_cgpa`, `sem2_month`, `sem3_seat`, `sem3_marks`, `sem3_outoff`, `sem3_cgpa`, `sem3_month`, `sem4_seat`, `sem4_marks`, `sem4_outoff`, `sem4_cgpa`, `sem4_month`, `sem5_seat`, `sem5_marks`, `sem5_outoff`, `sem5_cgpa`, `sem5_month`, `sem6_seat`, `sem6_marks`, `sem6_outoff`, `sem6_cgpa`, `sem6_month`, `sem7_seat`, `sem7_marks`, `sem7_outoff`, `sem7_cgpa`, `sem7_month`, `sem8_seat`, `sem8_marks`, `sem8_outoff`, `sem8_cgpa`, `sem8_month`) VALUES
(1, 1001, 'Yes', '67', '340', '400', '9.6', 'December', '32', '420', '500', '9.3', 'May', '98', '332', '350', '9.2', 'December', '23', '422', '450', '9.1', 'May', '12', '441', '500', '9.5', 'December', '98', '498', '500', '9.9', 'May', '93', '387', '450', '8.9', 'December', '28', '467', '500', '9.5', 'May'),
(2, 1002, 'Yes', '76', '350', '400', '9.5', 'December', '24', '442', '500', '9.5', 'May', '42', '337', '350', '9.6', 'December', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 1003, 'Yes', '23', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_library_map`
--

DROP TABLE IF EXISTS `student_library_map`;
CREATE TABLE IF NOT EXISTS `student_library_map` (
  `sr` int NOT NULL AUTO_INCREMENT,
  `s_id` int NOT NULL,
  `librarystatus` varchar(100) NOT NULL,
  `book_id` int DEFAULT NULL,
  `dues` varchar(100) DEFAULT NULL,
  `book_returned` varchar(100) NOT NULL,
  PRIMARY KEY (`sr`),
  KEY `book_id` (`book_id`),
  KEY `s_id` (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_library_map`
--

INSERT INTO `student_library_map` (`sr`, `s_id`, `librarystatus`, `book_id`, `dues`, `book_returned`) VALUES
(1, 1001, 'Yes', 4, '0', 'Retrurned'),
(2, 1002, 'No', 2, '32', 'Not Returned'),
(7, 1004, 'Yes', 3, '0', 'Returned');

-- --------------------------------------------------------

--
-- Table structure for table `student_train_map`
--

DROP TABLE IF EXISTS `student_train_map`;
CREATE TABLE IF NOT EXISTS `student_train_map` (
  `s_id` int NOT NULL,
  `tc_no` int NOT NULL AUTO_INCREMENT,
  `tc_taken` varchar(100) DEFAULT NULL,
  `issue_date` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `exp_date` varchar(100) NOT NULL,
  `class` varchar(100) DEFAULT NULL,
  `period` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`tc_no`),
  KEY `s_id` (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_train_map`
--

INSERT INTO `student_train_map` (`s_id`, `tc_no`, `tc_taken`, `issue_date`, `exp_date`, `class`, `period`) VALUES
(1001, 25, 'Yes', '2023-01-24', '2023-04-24', '1', '3');

-- --------------------------------------------------------

--
-- Table structure for table `student_vm_map`
--

DROP TABLE IF EXISTS `student_vm_map`;
CREATE TABLE IF NOT EXISTS `student_vm_map` (
  `sr` int NOT NULL AUTO_INCREMENT,
  `s_id` int NOT NULL,
  `doc_taken` varchar(100) DEFAULT NULL,
  `timestamp` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`sr`),
  KEY `s_id` (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_vm_map`
--

INSERT INTO `student_vm_map` (`sr`, `s_id`, `doc_taken`, `timestamp`) VALUES
(15, 1001, 'Yes', '2023-01-24');

-- --------------------------------------------------------

--
-- Table structure for table `student_workshop_map`
--

DROP TABLE IF EXISTS `student_workshop_map`;
CREATE TABLE IF NOT EXISTS `student_workshop_map` (
  `sr` int NOT NULL AUTO_INCREMENT,
  `s_id` int NOT NULL,
  `workshopstatus` varchar(100) NOT NULL,
  `too_id` int DEFAULT NULL,
  `dues` varchar(100) DEFAULT NULL,
  `comments` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`sr`),
  KEY `s_id` (`s_id`),
  KEY `too_id` (`too_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_workshop_map`
--

INSERT INTO `student_workshop_map` (`sr`, `s_id`, `workshopstatus`, `too_id`, `dues`, `comments`) VALUES
(1, 1002, 'No', 1, '56', ''),
(2, 1001, 'Yes', 2, '0', ''),
(3, 1003, 'No', 2, '43', NULL),
(5, 1004, 'Yes', 3, '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

DROP TABLE IF EXISTS `workshop`;
CREATE TABLE IF NOT EXISTS `workshop` (
  `tool_id` int NOT NULL AUTO_INCREMENT,
  `tool_name` varchar(100) NOT NULL,
  PRIMARY KEY (`tool_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`tool_id`, `tool_name`) VALUES
(1, 'driver'),
(2, 'cutter'),
(3, 'hacksaw Blade'),
(4, 'Filer'),
(5, 'Crew Driver Kit');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
