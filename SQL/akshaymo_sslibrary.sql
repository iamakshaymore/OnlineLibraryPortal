-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 25, 2018 at 03:28 PM
-- Server version: 5.6.38
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akshaymo_sslibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `Library`
--

CREATE TABLE `Library` (
  `bid` int(4) NOT NULL,
  `bname` varchar(100) NOT NULL,
  `bauth` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `availability` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Library`
--

INSERT INTO `Library` (`bid`, `bname`, `bauth`, `department`, `availability`) VALUES
(1, 'A Guide to ERP - Benefits, Implementation and Trends', 'Thomas H. Cormen', 'computer science', 19),
(2, 'A Practical Introduction to 3D Game Development', 'Harold Abelson', 'computer science	', 0),
(3, 'A Step-by-Step R Tutorial - An introduction into R applications and programming	', 'Leo Tolstoy	', 'computer science	', 0),
(4, 'Access 2010: Part I - Learn Access	', 'Brian W. Kernighan	', 'computer science	', 18),
(5, 'An Introduction to software engg	', 'Tadufik Ennoure', 'computer science	', 18),
(6, 'Adobe Photoshop for Intermediate Users	', 'Donald Ervin Knuth	', 'computer science	', 0),
(7, 'An Introduction to Adobe Photoshop	', 'Andrew Hunt	', 'computer science	', 19),
(8, 'An Introduction to Matlab	', 'Erich Gamma	', 'computer science	', 18),
(9, 'An Introduction to Relational Database Theory	', 'Michael Sipser	', 'computer science	', 20),
(10, 'An Introduction to Windows Operating System	', 'Robert Sedgewick	', 'computer science	', 17),
(11, 'Applications of Prolog	', 'John E. Hopcroft	', 'computer science	', 20),
(13, 'Banking: An Introduction	', 'Miran Lipovaa	', 'Accounting', 20),
(14, 'Bond Market: An Introduction	', 'Greg Michaelson	', 'Accounting', 20),
(15, 'Central Banking & Monetary Policy: An Introduction	', 'Ronald L. Graham	', 'Accounting', 20),
(16, 'Current Assets	', 'Jon L. Bentley	', 'Accounting', 8),
(17, 'Equity Market: An Introduction	', 'Shawn Hedman	', 'Accounting', 20),
(18, 'Reporting Techniques - In Support of Managerial Decision Making', 'Anne S. Troelstra', 'Accounting', 20),
(19, 'The Accounting Cycle', 'Andrew S. Tanenbaum', 'Accounting', 20),
(20, 'Using Accounting Information', 'Tom DeMarco', 'Accounting', 20),
(21, 'Business Briefs - Business Theory Made Simple', 'Erwin Schrödinger', 'Management', 20),
(22, 'Conducting Transatlantic Business - Basic Legal Distinctions in the US and Europe', 'Charles Petzold', 'Management', 20);

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `lid` int(4) NOT NULL,
  `lufrom` varchar(100) NOT NULL,
  `luto` varchar(100) NOT NULL,
  `lamt` int(10) NOT NULL,
  `ldate` date NOT NULL,
  `lstatus` varchar(20) NOT NULL DEFAULT 'Not Approved'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`lid`, `lufrom`, `luto`, `lamt`, `ldate`, `lstatus`) VALUES
(1, 'user1', 'user2', 2, '2017-11-27', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `bid` int(4) NOT NULL,
  `bname` varchar(500) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `eid` varchar(100) NOT NULL,
  `doi` date NOT NULL,
  `dateOfReturn` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `uname`, `name`, `bid`, `bname`, `phno`, `eid`, `doi`, `dateOfReturn`) VALUES
(2, 'user1', 'user one', 1, 'A Guide to ERP - Benefits, Implementation and Trends', '9892345678', 'user1@akshaymore.net', '2017-11-27', '2017-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uname` varchar(100) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `eid` varchar(100) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `bud` int(11) NOT NULL DEFAULT '50'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uname`, `pwd`, `name`, `eid`, `phno`, `bud`) VALUES
('user1', 'user1', 'user one', 'user1@akshaymore.net', '9892345678', 51),
('user2', 'user2', 'User 2', 'user2@akshaymore.net', '9898987688', 47);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Library`
--
ALTER TABLE `Library`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Library`
--
ALTER TABLE `Library`
  MODIFY `bid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `lid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
