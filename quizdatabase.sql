-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2018 at 01:02 PM
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
  `user_id` int(250) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `team_id` int(250) NOT NULL,
  `status` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `identifier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`langid`, `qid`, `questions`, `option1`, `option2`, `option3`, `option4`, `correctanswer`, `identifier`) VALUES
(1, 1, 'What does PHP stand for?', 'Personal Hypertext Preprocessor', 'Private Home Page', 'PHP Hypertext Page', 'Private Housing Preprocessor', 'PHP Hypertext Preprocessor', 'php'),
(2, 2, 'All variables in PHP start with which operator?', '#', '$', '%', '&', '$', 'php'),
(3, 3, 'What is the correct way to end a PHP statement?', '<?>', '</php>', ';', 'newline', ';', 'php'),
(4, 4, 'which superglobal variable holds information about header?', '$_GLOBALS', '$_SESSION', '$_GET', '$_SERVER', '$_SERVER', 'php'),
(5, 5, 'which operator is used to check if two values are equal in PHP?', '==', '===', '=', '!==', '===', 'php'),
(6, 1, 'What does HTML stand for?', 'Hyper Text Markup Language', 'Home Text Markup Language', 'Hyper Tool Markup Language', 'Home Text Markup Language', 'Hyper Text Markup Language', 'html'),
(7, 2, 'What is making the Web Standards?', 'Microsoft', 'Google', 'WWW', 'Yahoo', 'WWW', 'html'),
(8, 3, 'Choose the correct HTML elemnt for largest Heading?', '<h6>', '<heading>', '<h1>', '<head>', '<h1>', 'html'),
(9, 4, 'What is the correct HTML element for for inserting a line break?', '<br>', '<linebreak>', '<break>', '<lb>', '<br>', 'html'),
(10, 5, 'Which character is used to indicate an end tag?', '/', ';', '$', '%', '/', 'html'),
(11, 1, 'Which type of language is C?', 'Procedure Oriented', 'Object Oriented', 'Object Based', 'none of above', 'Procedure Oriented', 'c'),
(12, 2, 'A Function can return value at a time?', '1', '2', '3', '0', '1', 'c'),
(13, 3, 'C is developed by?', 'Danish Ritchie', 'Mark Thomson', 'Rickie Masiciite', 'none of above', 'Danish Ritchie', 'c'),
(14, 4, 'How many Keywords are in C?', '32', '44', '54', '24', '32', 'c'),
(15, 5, 'In Linux Compilation FileExtension of C?', '.cc', '.cpp', '.out', '.exe', '.cc', 'c'),
(16, 0, '', '', '', '', '', '', ''),
(17, 0, '', '', '', '', '', '', ''),
(18, 0, '', '', '', '', '', '', ''),
(19, 0, '', '', '', '', '', '', ''),
(20, 0, '', '', '', '', '', '', '');

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
  `logintime` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `score`, `logintime`) VALUES
('tanya123', 'tanya', 'tanya@gmail.com', 'd37eaa547940fdd713097006308bf6c9', 0, '00:00:00.000000');

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
-- Indexes for table `connection`
--
ALTER TABLE `connection`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `team_id` (`team_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

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
-- AUTO_INCREMENT for table `connection`
--
ALTER TABLE `connection`
  MODIFY `user_id` int(250) NOT NULL AUTO_INCREMENT;

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
  MODIFY `langid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
