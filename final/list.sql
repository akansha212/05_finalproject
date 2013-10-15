-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 15, 2013 at 02:47 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `list`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookdetails`
--

CREATE TABLE IF NOT EXISTS `bookdetails` (
  `bookname` varchar(40) NOT NULL,
  `author` text NOT NULL,
  `refno` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookdetails`
--

INSERT INTO `bookdetails` (`bookname`, `author`, `refno`) VALUES
('java complete refrence', 'Herb Schildt', 1001),
('let us c', 'yashwant kanetkar', 1002),
('mechanics of materials', 'team Riley', 1003),
('quantitative apptitude', 'arun sharma', 1004),
('operating system', 'galvin', 1005),
('quanta', 'anilsharma', 1006),
('a', 'b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `name` char(50) NOT NULL,
  `id` varchar(9) NOT NULL,
  `sex` char(1) NOT NULL,
  `phno` longtext NOT NULL,
  `department` char(10) NOT NULL,
  `course` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--


-- --------------------------------------------------------

--
-- Table structure for table `new_user`
--

CREATE TABLE IF NOT EXISTS `new_user` (
  `rollno` bigint(9) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `confirm` text NOT NULL,
  PRIMARY KEY (`rollno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_user`
--

INSERT INTO `new_user` (`rollno`, `name`, `email`, `password`, `confirm`) VALUES
(205112012, ' 205112012@nitt.edu', 'kalyani', '1234', '1234'),
(205112005, ' 205112005@nitt.edu', 'akansha', '123', '123'),
(2, ' a@c.f', 'me', '1', '1'),
(23, ' a@d.c', 'me', '1', '1'),
(200, ' a@h.d', 'aaa', '66', '66'),
(205112008, ' batla@gmail.com', 'jay', '12345', '12345'),
(0, '', ' ', '', ''),
(7, 'aa', ' a@c.c', 'asd', 'asd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
