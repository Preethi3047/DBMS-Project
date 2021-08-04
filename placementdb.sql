-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 06:35 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placementdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobapply_tbl`
--

CREATE TABLE `jobapply_tbl` (
  `StuID` varchar(40) NOT NULL,
  `JobID` int(11) NOT NULL,
  `Qualified` int(11) NOT NULL,
  `Remarks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
--
--

INSERT INTO `jobapply_tbl` (`StuID`, `JobID`,`Qualified`,`Remarks`) VALUES
('monica', 01,0,'fast learning');
INSERT INTO `jobapply_tbl` (`StuID`, `JobID`,`Qualified`,`Remarks`) VALUES
('jaya', 02,0,'logical thiniking');
INSERT INTO `jobapply_tbl` (`StuID`, `JobID`,`Qualified`,`Remarks`) VALUES
('surya', 03,0,'logical thiniking');
INSERT INTO `jobapply_tbl` (`StuID`, `JobID`,`Qualified`,`Remarks`) VALUES
('priya', 01,0,'More coding knowledge');
INSERT INTO `jobapply_tbl` (`StuID`, `JobID`,`Qualified`,`Remarks`) VALUES
('raji', 02,0,'Best in time managing');
INSERT INTO `jobapply_tbl` (`StuID`, `JobID`,`Qualified`,`Remarks`) VALUES
('som', 03,0,'gold medalist');
-- --------------------------------------------------------

--
-- Table structure for table `placement_tbl`
--

CREATE TABLE `placement_tbl` (
  `JobID` int(11) NOT NULL,
  `JobDesc` varchar(1000) NOT NULL,
  `CompanyName` varchar(300) NOT NULL,
  `PostDate` date NOT NULL,
  `InterviewDate` date NOT NULL,
  `ExpDate` date NOT NULL,
  `Stream` varchar(20) NOT NULL,
  `Qualification` varchar(25) NOT NULL,
  `OtherReq` varchar(300) NOT NULL,
  `SalPackage` varchar(20) NOT NULL,
  `Location` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
--
--
INSERT INTO `placement_tbl` VALUES
(01, 'HCL technologies is a next generation global technology company that helps enterprises reimagine their business for the digital age.',
'HCL Technologies','2021-05-29','2021-06-04','2021-06-08','computer science','graduation','problem solving skills','50000','CEG campus, Guindy, Chennai.');
INSERT INTO `placement_tbl` VALUES
(02, 'This is the best company who are looking for n IT job. In India we are the third largest company in development.',
'Parallax Programmers','2021-05-30','2021-06-02','2021-06-05','computer science','master','Logical skills','60000','MR campus, Mylapore, Chennai.');
INSERT INTO `placement_tbl` VALUES
(03, 'This job is for the apart for marine enginners and we have guided more than 4500 engineers only in tamilnadu and we mainly focused on employees convience',
'Marine techies','2021-05-30','2021-06-31','2021-06-01','Marine engineer','graduation','Basics in marine engineer','60000','Mic Complex, kanchipuram, Chennai.');

-- --------------------------------------------------------

--
-- Table structure for table `stureg_tbl`
--

CREATE TABLE `stureg_tbl` (
  `userName` varchar(40) NOT NULL,
  `StuID` int(11) NOT NULL,
  `StuName` varchar(50) NOT NULL,
  `StuFName` varchar(50) NOT NULL,
  `StuDOB` date NOT NULL,
  `ContactNo` varchar(15) NOT NULL,
  `StuEmail` varchar(50) NOT NULL,
  `Stream` varchar(40) NOT NULL,
  `Course` varchar(10) NOT NULL,
  `LastScore` float NOT NULL,
  `AreaOfInterest` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
--
--
INSERT INTO `stureg_tbl` VALUES
('monica', 3000,'Monica sekar','sekar','2001-06-04','9875432782','Monicasekar@gmail.com','computer science','B.E',9.5,'Reading books');
INSERT INTO `stureg_tbl` VALUES
('jaya', 3003,'jaya guna','guna','2001-05-04','9475432789','jayaguna12@gmail.com','marine engineering','B.E',8.5,'Gaming');
INSERT INTO `stureg_tbl` VALUES
('surya', 3001,'surya kumar','kumar','2001-09-24','9175432760','suryakumar@gmail.com','science','M.phil',9.2,'Reading books');
INSERT INTO `stureg_tbl` VALUES
('priya', 3005,'priya raman','raman','2001-06-14','7875832782','priyaraman@gmail.com','computer science','B.E',7.5,'sports');
INSERT INTO `stureg_tbl` VALUES
('raji', 3030,'raji sekar','sekar','2001-12-19','9775432767','rajisekar13@gmail.com','computer science','B.E',7.89,'painting');
INSERT INTO `stureg_tbl` VALUES
('som', 3230,'som kannappan','kannappan','2001-06-18','8875432784','somkannappan@gmail.com','arts','B.sc',7.5,'drawing');
INSERT INTO `stureg_tbl` VALUES
('sam', 3009,'sam kumar','kumar','2000-07-04','8765490882','samkumar01@gmail.com','business administration','BCA',8.78,'Reading books');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `usertype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
--
INSERT INTO `users` VALUES
('monica', 'monica','student');
INSERT INTO `users` VALUES
('priya', 'priya','student');
INSERT INTO `users` VALUES
('raji', 'raji','student');
INSERT INTO `users` VALUES
('som', 'som','student');
INSERT INTO `users` VALUES
('sam', 'sam','student');
INSERT INTO `users` VALUES
('surya', 'surya','student');
INSERT INTO `users` VALUES
('jaya', 'jaya','student');
INSERT INTO `users` VALUES
('preethi', 'preethi','admin');
INSERT INTO `users` VALUES
('monika', 'monika','admin');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
