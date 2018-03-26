-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2016 at 10:08 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acmcontest`
--

-- --------------------------------------------------------

--
-- Table structure for table `budgets`
--

CREATE TABLE `budgets` (
  `budget_id` char(5) NOT NULL,
  `title` varchar(35) DEFAULT NULL,
  `amount` decimal(9,2) DEFAULT NULL,
  `datee` char(8) DEFAULT NULL,
  `contest_id` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budgets`
--

INSERT INTO `budgets` (`budget_id`, `title`, `amount`, `datee`, `contest_id`) VALUES
('001', 'Breakfast & Drinks', '2400.00', '08-12-15', 'cn-01'),
('002', 'Transpotations', '4000.00', '06-12-15', 'cn-02'),
('003', 'Lunch', '6000.00', '24-12-15', 'cn-03');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `phone_no` char(14) NOT NULL,
  `id` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`phone_no`, `id`) VALUES
('01234007895', 'fac-04'),
('01234567895', 'fac-03'),
('142545874588', 'fac-02'),
('21457845642', 'fac-01'),
('54789424544', 'fac-02');

-- --------------------------------------------------------

--
-- Table structure for table `contestants`
--

CREATE TABLE `contestants` (
  `id` char(9) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `dept` char(3) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `phone_no` char(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contestants`
--

INSERT INTO `contestants` (`id`, `name`, `dept`, `email`, `phone_no`) VALUES
('011131112', 'Kabir Hasan', 'CSE', 'acrush987@gmail.com', '01731242527'),
('011131113', 'Deepta Saha ', 'CS', 'deeptasaha@gmail.com ', '12542356412'),
('011132074', 'Imran Hossain Saimun', 'CSE', 'saimun@gmail.com', '25414547895'),
('011132097', 'Kazi Ifrat', 'CSE', 'kaziifrat@gmail.com', '25412547495'),
('011132098', 'Kazi Israt Tori', 'CSE', 'torikazi@gmail.com', '25412547895'),
('011132254', 'Shekh Adilina', 'CSE', 'shekhadilina@gmail.com', '12453254524'),
('011132542', 'Md.Mushfiqur Rahman', 'CSE', 'musfiqrahim@gmail.com', '25412550095'),
('011132543', 'Rakibul Hossain', 'CSE', 'rakibul@gmail.com', '25412550095'),
('011132563', 'Naweed Md Mahbub', 'CSE', 'naweed@gmail.com', '25412550095'),
('011142012', 'Fahim Shahriar', 'CSE', 'fahimshariar@gmail.com', '012345678910'),
('011142013', 'Shadman Shadab', 'CSE', 'shadmansadab@gmail.com', '012345678912'),
('011143124', 'Rimon Mostafiz', 'CSE', 'mostafiz13@gmail.com', '25412540095'),
('011143128', 'Mohaimin Morsalin', 'CSE', 'morsalin@gmail.com', '25612540095');

-- --------------------------------------------------------

--
-- Table structure for table `contests`
--

CREATE TABLE `contests` (
  `contest_id` char(5) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `datee` varchar(8) DEFAULT NULL,
  `link` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contests`
--

INSERT INTO `contests` (`contest_id`, `title`, `datee`, `link`) VALUES
('', 'UIU Online Individual Practice Contest', '08-12-15', 'http://acm.hust.edu.cn/vjudge/contest/101813#overview'),
('cn-01', 'UIU Practice Contest 18-08 (Juniors)', '18-08-16', 'http://acm.hust.edu.cn/vjudge/contest/129035#overview'),
('cn-02', 'UIU Practice Contest 18-08 (Seniors)', '18-08-16', 'http://acm.hust.edu.cn/vjudge/contest/129034#overview'),
('cn-03', 'National Collegiate Programming Contest (NCPC) 2016 at University of Asia Pacific', '03-06-16', 'https://algo.codemarshal.org/contests/ncpc-uap-2016/standings'),
('cn-04', 'UIU Individual Practice Contest 14-05-2016', '14-05-16', 'http://acm.hust.edu.cn/vjudge/contest/116584#overview');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` char(9) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `dept` char(3) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `name`, `dept`, `email`) VALUES
('fac-01', 'Md. Mofijul Islam', 'CSE', 'mofijul@cse.uiu.ac.bd'),
('fac-02', 'Md. Mahmudur Rahman', 'CSE', 'mahmudur@cse.uiu.ac.bd '),
('fac-03', 'Sanjay Saha', 'CSE', 'sanjay@cse.uiu.ac.bd '),
('fac-04', 'Swakkhar Shatabda', 'CSE', 'swakkhar@cse.uiu.ac.bd'),
('fac-05', 'Imtiaz Ahmed', 'CSE', 'imtiaz@cse.uiu.ac.bd'),
('fac-06', 'Muhammad Tasnim Mohiuddin', 'CSE', 'tasnim@cse.uiu.ac.bd');

-- --------------------------------------------------------

--
-- Table structure for table `participation`
--

CREATE TABLE `participation` (
  `team_id` char(3) NOT NULL,
  `contest_id` char(5) NOT NULL,
  `rank` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `team_id` char(3) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `id` char(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_id`, `name`, `id`) VALUES
('t-1', 'UIU_Zetta', 'fac-01'),
('t-2', 'UIU_Arrow', 'fac-02'),
('t-3', 'TLE_Masters\r\n\r\n', 'fac-03'),
('t-4', 'UIU_NegativeCharge\r\n\r\n ', 'fac-04'),
('t-5', 'UIU_ZeroFlag\r\n\r\n ', 'fac-05');

-- --------------------------------------------------------

--
-- Table structure for table `team_contestants`
--

CREATE TABLE `team_contestants` (
  `id` char(9) NOT NULL,
  `team_id` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_contestants`
--

INSERT INTO `team_contestants` (`id`, `team_id`) VALUES
('011131112', 't-1'),
('011142012', 't-1'),
('011142013', 't-1'),
('011132074', 't-2'),
('011132097', 't-2'),
('011132098', 't-2'),
('011132542', 't-3'),
('011132543', 't-3'),
('011132563', 't-3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(25) DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `pass` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `username`, `pass`) VALUES
('', 'admin', '54321'),
('acrush987@gmail.com', 'kabirhasan', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budgets`
--
ALTER TABLE `budgets`
  ADD PRIMARY KEY (`budget_id`),
  ADD KEY `contest_id` (`contest_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`phone_no`,`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `contestants`
--
ALTER TABLE `contestants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contests`
--
ALTER TABLE `contests`
  ADD PRIMARY KEY (`contest_id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participation`
--
ALTER TABLE `participation`
  ADD PRIMARY KEY (`team_id`,`contest_id`),
  ADD KEY `contest_id` (`contest_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`team_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `team_contestants`
--
ALTER TABLE `team_contestants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_id` (`team_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `budgets`
--
ALTER TABLE `budgets`
  ADD CONSTRAINT `budgets_ibfk_1` FOREIGN KEY (`contest_id`) REFERENCES `contests` (`contest_id`);

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_ibfk_1` FOREIGN KEY (`id`) REFERENCES `faculties` (`id`);

--
-- Constraints for table `participation`
--
ALTER TABLE `participation`
  ADD CONSTRAINT `participation_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `teams` (`team_id`),
  ADD CONSTRAINT `participation_ibfk_2` FOREIGN KEY (`contest_id`) REFERENCES `contests` (`contest_id`);

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_ibfk_1` FOREIGN KEY (`id`) REFERENCES `faculties` (`id`);

--
-- Constraints for table `team_contestants`
--
ALTER TABLE `team_contestants`
  ADD CONSTRAINT `team_contestants_ibfk_1` FOREIGN KEY (`id`) REFERENCES `contestants` (`id`),
  ADD CONSTRAINT `team_contestants_ibfk_2` FOREIGN KEY (`team_id`) REFERENCES `teams` (`team_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
