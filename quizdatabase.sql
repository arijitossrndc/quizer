-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2018 at 01:14 PM
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
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'a4d5196ae76063792af87ba609105c5f');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(11, 'student', 'student@gmail.com', '5ebe2294ecd0e0f08eab7690d2a6ee69'),
(12, 'sagar agrawal', 'mittalsagar163@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(13, 'Shaban Ansari', 'shaban163@gmail.com', '201266726f8b8e2da5d8c7d42f7693cc'),
(14, 'safasf', 'alsalds@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(15, 'imran siddiqui', 'imran.siddiqui888@gmail.com', 'b950034705b54888b189ef2a35b5d3b5'),
(16, 'sagar agrawal', 'mokshgulati14@gmail.com', '202cb962ac59075b964b07152d234b70'),
(17, 'trump', 'trump@gmail.com', '202cb962ac59075b964b07152d234b70'),
(18, 'shivani', 'shivani66@gmail.com', 'ea7fd144f2edb73362f531981ed1d6c8'),
(19, 'gaurav', 'gaurav123@gmail.com', '29be54a52396750258d886abc5417fda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `php`
--
ALTER TABLE `php`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `php`
--
ALTER TABLE `php`
  MODIFY `qid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
