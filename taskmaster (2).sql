-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2024 at 01:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taskmaster`
--

-- --------------------------------------------------------

--
-- Table structure for table `askedquestions`
--

CREATE TABLE `askedquestions` (
  `AID` int(11) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `question` varchar(5000) NOT NULL,
  `deadln` varchar(20) NOT NULL,
  `attachment` varchar(1000) NOT NULL,
  `statuss` varchar(15) NOT NULL,
  `solution_answer` varchar(5000) NOT NULL,
  `solverEmail` varchar(100) NOT NULL,
  `solverUsername` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `askedquestions`
--

INSERT INTO `askedquestions` (`AID`, `subjects`, `course`, `degree`, `course_code`, `question`, `deadln`, `attachment`, `statuss`, `solution_answer`, `solverEmail`, `solverUsername`) VALUES
(1, 'Algorithm', 'Art', 'BSc', 'CoSc2345', 'How to solve anything.', '2024-05-20', '', 'solved', 'are you sure?', 'kidus@gmail.com', 'Kidus'),
(2, 'Algorithm', 'Art', 'BSc', 'CoSc2345', 'hjhjhjjh How to solve anything hhh', '2024-05-20', '', 'unsolved', '', '', ''),
(3, 'Algorithm', 'Art', 'BSc', 'CoSc238845', 'jfjhvjvvvhvj', '2024-05-20', '', 'unsolved', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `evaluationpage`
--

CREATE TABLE `evaluationpage` (
  `QID` int(30) NOT NULL,
  `evaDetail` varchar(2000) NOT NULL,
  `A` varchar(2000) NOT NULL,
  `B` varchar(2000) NOT NULL,
  `C` varchar(2000) NOT NULL,
  `D` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `evaluationque`
--
-- Error reading structure for table taskmaster.evaluationque: #1030 - Got error 194 &quot;Tablespace is missing for a table&quot; from storage engine InnoDB
-- Error reading data for table taskmaster.evaluationque: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `taskmaster`.`evaluationque`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `studentaccount`
--

CREATE TABLE `studentaccount` (
  `ID` int(11) NOT NULL,
  `FName` varchar(20) NOT NULL,
  `LName` varchar(20) NOT NULL,
  `emailAdd` varchar(30) NOT NULL,
  `sPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='This is registered student account list';

--
-- Dumping data for table `studentaccount`
--

INSERT INTO `studentaccount` (`ID`, `FName`, `LName`, `emailAdd`, `sPassword`) VALUES
(1, 'Kidus', 'Seleshi', 'kilalidus@gmail.com', 'kilalidusK1@'),
(6, 'hgh', 'ghhg', 'hggh#g@fggf', '34f6465fa5ad0696a2ae459dffcf3c'),
(8, 'Hana', 'Seleshi', 'hana@gmail.com', '7440879e3c34fd6a8fa61e53308a33'),
(9, 'Selam', 'Abebe', 'sel@gmail.com', '7440879e3c34fd6a8fa61e53308a33'),
(10, 'Kebu', 'Q', 'keb@df.f', '7440879e3c34fd6a8fa61e53308a33f9'),
(11, 'jjjjj', 'hhhh', 'qqq@qq.com', '0553c309b687f9e4c3491414e573b93e');

-- --------------------------------------------------------

--
-- Table structure for table `teacheraccount`
--

CREATE TABLE `teacheraccount` (
  `ID` int(11) NOT NULL,
  `FName` varchar(20) NOT NULL,
  `LName` varchar(30) NOT NULL,
  `emailAdd` varchar(30) NOT NULL,
  `tPassword` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `country` varchar(20) NOT NULL,
  `eduLevel` varchar(30) NOT NULL,
  `IDcPath` varchar(255) NOT NULL,
  `EdPath` varchar(255) NOT NULL,
  `CvPath` varchar(255) NOT NULL,
  `department` varchar(32) NOT NULL,
  `academic` varchar(32) NOT NULL,
  `statusActivity` varchar(32) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacherevaanswer`
--

CREATE TABLE `teacherevaanswer` (
  `ID` int(11) NOT NULL,
  `teachEmail` varchar(50) NOT NULL,
  `q1` varchar(500) NOT NULL,
  `q2` varchar(500) NOT NULL,
  `q3` varchar(500) NOT NULL,
  `q4` varchar(500) NOT NULL,
  `q5` varchar(500) NOT NULL,
  `q6` varchar(500) NOT NULL,
  `q7` varchar(500) NOT NULL,
  `q8` varchar(500) NOT NULL,
  `q9` varchar(500) NOT NULL,
  `q10` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacherevaanswer`
--

INSERT INTO `teacherevaanswer` (`ID`, `teachEmail`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`) VALUES
(1, 'Kidusseleshi19@gmail.com', 'G', 'M', 'M', 'H', 'V', 'R', 'V', 'E', 'A', 'M'),
(2, 'Kidusseleshi19@gmail.com', 'Good', 'Moderately diverse', 'Moderately effectively', 'Highly engaged', 'Very effectively', 'Regularly and effectively', 'Very effectively', 'Extensively', 'Actively participates', 'Moderately accessible and supportive'),
(3, '', 'Excellent', 'Somewhat limited', 'Moderately effectively', 'Highly engaged', 'Very effectively', 'Regularly and effectively', 'Very effectively', 'Minimally', 'Rarely participates', 'Highly accessible and supportive'),
(4, '', 'Excellent', 'Somewhat limited', 'Moderately effectively', 'Highly engaged', 'Very effectively', 'Regularly and effectively', 'Very effectively', 'Minimally', 'Rarely participates', 'Highly accessible and supportive'),
(5, 'Hanaseleshi@gmail.com', 'Excellent', 'Moderately diverse', 'Very effectively', 'Highly engaged', 'Very effectively', 'Irregularly and effectively', 'Moderately effectively', 'Extensively', 'Actively participates', 'Somewhat accessible and supportive'),
(6, 'Hanaseleshi@gmail.com', 'Excellent', 'Moderately diverse', 'Very effectively', 'Highly engaged', 'Very effectively', 'Irregularly and effectively', 'Moderately effectively', 'Extensively', 'Actively participates', 'Somewhat accessible and supportive'),
(7, 'Hanaseleshi@gmail.com', 'Excellent', 'Moderately diverse', 'Very effectively', 'Highly engaged', 'Very effectively', 'Irregularly and effectively', 'Moderately effectively', 'Extensively', 'Actively participates', 'Somewhat accessible and supportive'),
(8, 'Hanaseleshi@gmail.com', 'Excellent', 'Moderately diverse', 'Very effectively', 'Highly engaged', 'Very effectively', 'Irregularly and effectively', 'Moderately effectively', 'Extensively', 'Actively participates', 'Somewhat accessible and supportive'),
(9, 'Hanaseleshi@gmail.com', 'Excellent', 'Moderately diverse', 'Very effectively', 'Highly engaged', 'Very effectively', 'Irregularly and effectively', 'Moderately effectively', 'Extensively', 'Actively participates', 'Somewhat accessible and supportive'),
(10, 'Hanaseleshi@gmail.com', 'Excellent', 'Moderately diverse', 'Very effectively', 'Highly engaged', 'Very effectively', 'Irregularly and effectively', 'Very effectively', 'Extensively', 'Actively participates', 'Highly accessible and supportive'),
(11, 'Hanaseleshi@gmail.com', 'Excellent', 'Moderately diverse', 'Very effectively', 'Highly engaged', 'Very effectively', 'Irregularly and effectively', 'Very effectively', 'Extensively', 'Actively participates', 'Highly accessible and supportive'),
(12, 'Hanaseleshi@gmail.com', 'Excellent', 'Moderately diverse', 'Very effectively', 'Highly engaged', 'Very effectively', 'Irregularly and effectively', 'Very effectively', 'Extensively', 'Actively participates', 'Highly accessible and supportive'),
(13, '', 'Average', 'Somewhat limited', 'Moderately effectively', 'Minimally engaged', 'Moderately effectively', 'Irregularly and effectively', 'Moderately effectively', 'Minimally', 'Occasionally participates', 'Moderately accessible and supportive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `askedquestions`
--
ALTER TABLE `askedquestions`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `evaluationpage`
--
ALTER TABLE `evaluationpage`
  ADD PRIMARY KEY (`QID`);

--
-- Indexes for table `studentaccount`
--
ALTER TABLE `studentaccount`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teacheraccount`
--
ALTER TABLE `teacheraccount`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teacherevaanswer`
--
ALTER TABLE `teacherevaanswer`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `askedquestions`
--
ALTER TABLE `askedquestions`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `evaluationpage`
--
ALTER TABLE `evaluationpage`
  MODIFY `QID` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentaccount`
--
ALTER TABLE `studentaccount`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teacheraccount`
--
ALTER TABLE `teacheraccount`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `teacherevaanswer`
--
ALTER TABLE `teacherevaanswer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
