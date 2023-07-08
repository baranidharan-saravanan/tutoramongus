-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2022 at 06:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `softproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(255) NOT NULL,
  `RegNo` varchar(30) NOT NULL DEFAULT 'None',
  `Gender` varchar(5) NOT NULL DEFAULT 'None',
  `Mobile` varchar(20) NOT NULL DEFAULT 'None',
  `poy` varchar(10) NOT NULL DEFAULT 'None',
  `Department` varchar(30) NOT NULL DEFAULT 'None',
  `Branch` varchar(40) NOT NULL DEFAULT 'None'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `RegNo`, `Gender`, `Mobile`, `poy`, `Department`, `Branch`) VALUES
('Aadharsh', '20BCE0003', 'M', '6374614823', '2024', 'B.Tech SCOPE', 'CSE'),
('BellaBabu', '', '', '', '', '', ''),
('BaraniDharan', '', '', '', '', '', ''),
('Win Revans', '20BCE0971', 'M', '6374614822', '2024', 'B.Tech SCOPE', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `cc`
--

CREATE TABLE `cc` (
  `coursename` varchar(255) NOT NULL,
  `coursecode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cc`
--

INSERT INTO `cc` (`coursename`, `coursecode`) VALUES
('Information Security', 'CSE3501'),
('Software Engineering', 'CSE3001'),
('Internet and Web Programming', 'CSE3002'),
('Artificial Intelligence', 'CSE3013'),
('C Language', 'CSE3014'),
('C++ Language', 'CSE3015'),
('Human Computer Interaction', 'CSE3016'),
('Natural Language Processing', 'CSE3017'),
('Internet of Things', 'CSE3018'),
('Principles of Cloud Computing', 'CSE3019'),
('BlockChain', 'CSE3010'),
('JavaProgramming', 'CSE3011'),
('JavaScript', 'CSE3012');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `email` varchar(50) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `courseid` varchar(50) NOT NULL,
  `description` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`email`, `coursename`, `courseid`, `description`) VALUES
('BaraniDharan', 'Software Engineering', 'CSE3001', 'UML Diagrams'),
('BaraniDharan', 'Information Security', 'CSE3501', 'Crytpography Algorithm'),
('BellaBabu', 'Software Engineering', 'CSE3001', 'STAKEHOLDERS'),
('Win Revans', 'Artificial Intelligence', 'CSE3013', 'Byeas Theorem'),
('BaraniDharan', 'Internet and Web Programming ', 'CSE3002', 'PHP and MySQL');

-- --------------------------------------------------------

--
-- Table structure for table `coursereg`
--

CREATE TABLE `coursereg` (
  `coursename` varchar(255) NOT NULL,
  `coursecode` varchar(255) NOT NULL,
  `tutorname` varchar(255) NOT NULL,
  `studentname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coursereg`
--

INSERT INTO `coursereg` (`coursename`, `coursecode`, `tutorname`, `studentname`) VALUES
('Software Engineering', 'CSE3001', 'BaraniDharan', 'Win Revans'),
('Information Security', 'CSE3501', 'BaraniDharan', 'Win Revans'),
('Software Engineering', 'CSE3001', 'BellaBabu', 'Aadharsh'),
('Artificial Intelligence', 'CSE3013', 'WinRevans', 'BaraniDharan');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `tutorstat` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `phone`, `tutorstat`) VALUES
('BaraniDharan', 'Barani@2509', '6374614824', 1),
('Aadharsh', 'Aadharsh', '6474614823', 1),
('BellaBabu', 'BellaBabu', '6474614825', 0),
('Win Revans', 'Win Revans', '6374614822', 1);

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `coursecode` varchar(10) NOT NULL,
  `coursename` varchar(30) NOT NULL,
  `sregno` varchar(10) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`coursecode`, `coursename`, `sregno`, `sname`, `fname`) VALUES
('CSE3001', 'Software Engineering ', '20BCE0971', 'Win Revans', 'SWE LAB DA 4 20BCE0044.pdf'),
('CSE3001', 'Software Engineering ', '20BCE0044', 'BaraniDharan', 'SWE LAB DA 5.pdf'),
('CSE3001', 'Software Engineering ', '20BCE0074', 'Bella Babu', 'Refactoring.pdf'),
('CSE3001', 'Software Engineering ', '20BCE2421', 'Aadharsh ', 'TESTING STRATEGIES.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `studentname` varchar(255) NOT NULL,
  `tutorname` varchar(255) NOT NULL,
  `coursename` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`studentname`, `tutorname`, `coursename`, `message`) VALUES
('BaraniDharan', 'Win Revans', 'Artificial Intelligence', 'Artificial Intelligence Byeas Theorem will be taught today at 4pm and the notes will be uploaded'),
('Win Revans', 'BaraniDharan', 'Information Security', 'Information Security notes will be shared by today before 12pm'),
('Win Revans', 'BaraniDharan', 'Software Engineering', 'Class diagram sample for a case scenario will be uploaded within today and will be taught tomorrow'),
('Aadharsh', 'BellaBabu', 'Software Engineering', 'UML class diagram will taught and notes will be shared by day after tomorrow');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `firstname` varchar(25) NOT NULL,
  `middlename` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_img` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`firstname`, `middlename`, `lastname`, `email`, `file_name`, `file_img`) VALUES
('Barani', 'Dharan', 'Saravanan', 'BaraniDharan', 'File', 'Image'),
('Bella', '', 'Babu', 'BellaBabu', 'Resume', 'Avatar'),
('Win', '', 'Revans', 'WinRevans', 'Resume', 'Avatar'),
('Aadharsh', '', 'S', 'Aadharsh', 'Resume', 'Avatar'),
('Win ', 'Revans', 'B', 'Win Revans', 'Resume.pdf', 'Avatar.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
