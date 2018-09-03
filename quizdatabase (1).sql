-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2018 at 07:01 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'a4d5196ae76063792af87ba609105c5f');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `user_id` varchar(255) NOT NULL,
  `qid` int(11) NOT NULL,
  `answers` varchar(255) NOT NULL,
  `qtime` time(6) NOT NULL,
  `identifier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`user_id`, `qid`, `answers`, `qtime`, `identifier`) VALUES
('sagar132', 1, 'text', '00:00:00.000000', 'php'),
('tanya123', 1, 'text', '00:00:00.000000', 'php'),
('sagar132', 2, 'text', '00:00:00.000000', 'php'),
('tanya123', 2, 'text', '00:00:00.000000', 'php'),
('sagar132', 3, 'text', '00:00:00.000000', 'php'),
('tanya123', 3, 'text', '00:00:00.000000', 'php'),
('sagar132', 4, 'text', '00:00:00.000000', 'php'),
('tanya123', 4, 'text', '00:00:00.000000', 'php'),
('sagar132', 5, 'text', '00:00:00.000000', 'php'),
('tanya123', 5, 'text', '00:00:00.000000', 'php'),
('sagar132', 1, 'text', '00:00:00.000000', 'html'),
('tanya123', 1, 'text', '00:00:00.000000', 'html'),
('tanya123', 2, 'text', '00:00:00.000000', 'html'),
('tanya123', 3, 'text', '00:00:00.000000', 'html'),
('sagar132', 3, 'text', '00:00:00.000000', 'html'),
('sagar132', 4, 'text', '00:00:00.000000', 'html'),
('tanya123', 5, 'text', '00:00:00.000000', 'html'),
('sagar132', 5, 'text', '00:00:00.000000', 'html'),
('sagar132', 1, 'text', '00:00:00.000000', 'c'),
('tanya123', 1, 'text', '00:00:00.000000', 'c'),
('sagar132', 2, 'text', '00:00:00.000000', 'c'),
('tanya123', 2, 'text', '00:00:00.000000', 'c'),
('sagar132', 3, 'text', '00:00:00.000000', 'c'),
('tanya123', 3, 'text', '00:00:00.000000', 'c'),
('sagar132', 4, 'text', '00:00:00.000000', 'c'),
('tanya123', 4, 'text', '00:00:00.000000', 'c'),
('sagar132', 5, 'text', '00:00:00.000000', 'c'),
('tanya123', 5, 'text', '00:00:00.000000', 'c'),
('harshit123', 1, 'text', '00:00:00.000000', 'php'),
('harshit123', 3, 'text', '00:00:00.000000', 'php'),
('harshit123', 4, 'text', '00:00:00.000000', 'php'),
('harshit123', 5, 'text', '00:00:00.000000', 'php');

-- --------------------------------------------------------

--
-- Table structure for table `c`
--

CREATE TABLE `c` (
  `qid` int(250) NOT NULL,
  `questions` varchar(255) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `correctanswer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c`
--

INSERT INTO `c` (`qid`, `questions`, `option1`, `option2`, `option3`, `option4`, `correctanswer`) VALUES
(1, 'which type of language is C?', 'procedure oriented', 'object oriented', 'both type', 'none of above', 'procedure oriented'),
(2, 'a function can return values at a time?', '1', '2', '3', '4', '1'),
(3, 'c is developed by?', 'danish ritchie', 'mark thomas', 'ricks thomson', 'charles babbage', 'danish richie'),
(4, 'how many keywords are in C?', '32', '23', '34', '45', '32'),
(5, 'in linux compilation filename of C?', '.cc', '.exe', '.c', '.cpp', '.cc');

-- --------------------------------------------------------

--
-- Table structure for table `connection`
--

CREATE TABLE `connection` (
  `user_id` varchar(250) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `team_id` int(11) NOT NULL,
  `status` int(250) NOT NULL,
  `logintime` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `connection`
--

INSERT INTO `connection` (`user_id`, `course_id`, `team_id`, `status`, `logintime`) VALUES
('sagar132', 'php', 681, 0, '21:38:49.000000'),
('tanya123', 'php', 681, 0, '21:38:53.000000'),
('sagar132', 'html', 197, 0, '15:28:46.000000'),
('tanya123', 'html', 197, 0, '15:28:44.000000'),
('sagar132', 'c', 131, 0, '15:41:22.000000'),
('tanya123', 'c', 131, 0, '15:41:24.000000'),
('harshit123', 'php', 515, 0, '19:37:31.000000');

-- --------------------------------------------------------

--
-- Table structure for table `html`
--

CREATE TABLE `html` (
  `qid` int(250) NOT NULL,
  `questions` varchar(255) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `correctanswer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `html`
--

INSERT INTO `html` (`qid`, `questions`, `option1`, `option2`, `option3`, `option4`, `correctanswer`) VALUES
(1, 'What does HTML stand for?', 'Hyper Text Markup Language', ' Home Tool Markup Language', 'Hyper Tool Markup Language', 'Home Text Markup Language', 'Hyper Text Markup Language'),
(2, 'Who is making the Web standards?', 'Microsoft', 'Google', 'Yahoo', 'WWW', 'WWW'),
(3, 'Choose the correct HTML element for the largest heading:', '<h6>', '<heading>', '<head>', '<h1>', '<h1>'),
(4, ' What is the correct HTML element for inserting a line break?', '<br>', '<linebreak>', '<endl>', '<lb>', '<br>'),
(5, ' Which character is used to indicate an end tag?\r\n\r\n', '/', '*', '$', '%', '/');

-- --------------------------------------------------------

--
-- Table structure for table `php`
--

CREATE TABLE `php` (
  `qid` int(250) NOT NULL,
  `questions` varchar(255) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `correctanswer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `php`
--

INSERT INTO `php` (`qid`, `questions`, `option1`, `option2`, `option3`, `option4`, `correctanswer`) VALUES
(1, ' What does PHP stand for?', ' Personal Hypertext Processor', 'Private Home Page', 'PHP: Hypertext Preprocessor', 'Private Hosting processor', 'PHP: Hypertext Preprocessor'),
(2, 'All variables in PHP start with which symbol?', '#', '$', '%', '!', '$'),
(3, 'What is the correct way to end a PHP statement?', '.', '</php>', ';', 'newline', ';'),
(4, 'Which superglobal variable holds information about headers, paths, and script locations?', ' $_GLOBALS', '$_SESSION', '$_GET', '$_SERVER\r\n', '$_SERVER'),
(5, ' Which operator is used to check if two values are equal and of same data type?', '==', '===', '!=', '!===', '===');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `langid` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `questions` varchar(255) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `correctanswer` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `identifier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`langid`, `qid`, `questions`, `option1`, `option2`, `option3`, `option4`, `correctanswer`, `answer`, `identifier`) VALUES
(1, 1, 'What does PHP stand for?', 'Personal Hypertext Preprocessor', 'Private Home Page', 'PHP Hypertext Preprocessor', 'Private Housing Preprocessor', 'PHP Hypertext Preprocessor', 'text', 'php'),
(2, 2, 'All variables in PHP start with which operator?', '#', '$', '%', '&', '$', 'text', 'php'),
(3, 3, 'What is the correct way to end a PHP statement?', '(<>)', '%%', ';', 'newline', ';', 'text', 'php'),
(4, 4, 'which superglobal variable holds information about header?', '$_GLOBALS', '$_SESSION', '$_GET', '$_SERVER', '$_SERVER', 'text', 'php'),
(5, 5, 'which operator is used to check if two values are equal in PHP?', '==', '===', '=', '!==', '===', 'text', 'php'),
(6, 1, 'What does HTML stand for?', 'Hyper Text Markup Language', 'Home Text Markup Language', 'Hyper Tool Markup Language', 'Home Text Markup Language', 'Hyper Text Markup Language', 'text', 'html'),
(7, 2, 'What is making the Web Standards?', 'Microsoft', 'Google', 'WWW', 'Yahoo', 'WWW', 'text', 'html'),
(8, 3, 'Choose the correct HTML element for largest Heading?', 'h6', 'heading', 'h1', 'head', 'h1', 'text', 'html'),
(9, 4, 'What is the correct HTML element for for inserting a line break?', 'br', 'linebreak', 'break', 'lb', 'br', 'text', 'html'),
(10, 5, 'Which character is used to indicate an end tag?', '/', ';', '$', '%', '/', 'text', 'html'),
(11, 1, 'Which type of language is C?', 'Procedure Oriented', 'Object Oriented', 'Object Based', 'none of above', 'Procedure Oriented', 'text', 'c'),
(12, 2, 'A Function can return value at a time?', '1', '2', '3', '0', '1', 'text', 'c'),
(13, 3, 'C is developed by?', 'Danish Ritchie', 'Mark Thomson', 'Rickie Masiciite', 'none of above', 'Danish Ritchie', 'text', 'c'),
(14, 4, 'How many Keywords are in C?', '32', '44', '54', '24', '32', 'text', 'c'),
(15, 5, 'In Linux Compilation FileExtension of C?', '.cc', '.cpp', '.out', '.exe', '.cc', 'text', 'c'),
(17, 6, 'quiz is good or not?', 'yes', 'no', 'nothing to say', 'dont know', 'yes', 'text', 'php'),
(18, 6, 'dtfufufgg', 'kkgg', 'iygygyg', 'jvyvv', 'ygggig', 'ugggg', 'text', 'html'),
(19, 6, 'gjgjgkgk', 'bjgkbkb', 'khgig', 'hgygigi', 'iguygkb', 'jguygg', 'gftuuvj', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(250) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `score` int(250) NOT NULL,
  `identifier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `score`, `identifier`) VALUES
('sagar132', 'sagar', 'sagar@gmail.com', '41ed44e3038dbeee7d2ffaa7f51d8a4b', 5, 'php'),
('tanya123', 'tanya', 'tanya@gmail.com', 'd37eaa547940fdd713097006308bf6c9', 5, 'php'),
('sagar132', 'sagar', 'sagar@gmail.com', '41ed44e3038dbeee7d2ffaa7f51d8a4b', 7, 'html'),
('tanya123', 'tanya', 'tanya@gmail.com', 'd37eaa547940fdd713097006308bf6c9', 1, 'html'),
('sagar132', 'sagar', 'sagar@gmail.com', '41ed44e3038dbeee7d2ffaa7f51d8a4b', 35, 'c'),
('tanya123', 'tanya', 'tanya@gmail.com', 'd37eaa547940fdd713097006308bf6c9', 5, 'c'),
('harshit123', 'harshit', 'harshit@gmail.com', '83a75f0b31435193bafd3b9c5fd45aec', 4, 'php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c`
--
ALTER TABLE `c`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `html`
--
ALTER TABLE `html`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `php`
--
ALTER TABLE `php`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`langid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `c`
--
ALTER TABLE `c`
  MODIFY `qid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `html`
--
ALTER TABLE `html`
  MODIFY `qid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `php`
--
ALTER TABLE `php`
  MODIFY `qid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `langid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
