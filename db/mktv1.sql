-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2019 at 06:48 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mktv1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

CREATE TABLE IF NOT EXISTS `admin_register` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_name` text NOT NULL,
  `college_name` text NOT NULL,
  `designation` text NOT NULL,
  `email` varchar(35) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` varchar(12) NOT NULL,
  `conpassword` varchar(12) NOT NULL,
  `admin_photo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admin_register`
--

INSERT INTO `admin_register` (`id`, `admin_name`, `college_name`, `designation`, `email`, `mobile`, `password`, `conpassword`, `admin_photo`) VALUES
(1, 'MADHAV SINGH', 'SISTec GN Bhopal', 'Administrator', 'madhavrajput.1996@gmail.com', 8770930698, 'kotlin21', 'kotlin21', 'behind _secret.jpg'),
(2, 'Alfha', 'safia', 'terrorist', 'premr2676@gmail.com', 8982290151, '100', '100', '_20180130_140450.JPG'),
(3, 'Ajeet Bobal', 'Bansal College', 'judge', 'madhavrajput.1996@gmail.com', 9893332970, 'Sistec#2022', 'Sistec#2022', 'image-08-full.jpg'),
(4, 'madhav singh', 'sistec', 'student', 'madhav@gmail.com', 8770930954, 'madhav', 'madhav', 'tk.jpg'),
(5, 'Tarun Malvi', 'SISTec', 'admin', 'tarunmalvi80@gmail.com', 9981601192, '123456', '123456', 'fsfd.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `campus_db`
--

CREATE TABLE IF NOT EXISTS `campus_db` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `mnc` varchar(30) NOT NULL,
  `venue` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `addr` varchar(100) NOT NULL,
  `ctc` varchar(12) NOT NULL,
  `branch` text NOT NULL,
  `profile` text NOT NULL,
  `detail` varchar(50) NOT NULL,
  `pool_image` varchar(100) NOT NULL,
  `status` varchar(40) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `campus_db`
--

INSERT INTO `campus_db` (`id`, `mnc`, `venue`, `date`, `addr`, `ctc`, `branch`, `profile`, `detail`, `pool_image`, `status`) VALUES
(1, 'Apple ', 'Oriental College', '2019-03-28', 'Kokta bypass road bhopal', '7.5 Lakhs', 'CSEsffsertbetgtrh', 'manageersdsfv', 'Reporting time gAfwabbgdfgdsdsdgvM and registratio', '0014.jpg', ''),
(2, 'Shopclues', 'ratibad', '2019-03-24', 'new bpl', '4 lakh', 'EC&EX', 'contruction', '11 am', 'image-04-full.jpg', ''),
(3, 'amazon', 'sistec', '2019-03-26', 'gn', '10 lakh', 'CSE', 'manager', 'reporting time 10 am', 'car.jpg', ''),
(4, 'amazon', 'sistec', '2019-03-26', 'gn', '10 lakh', 'CSE', 'manager', 'reporting time 10 am', 'car.jpg', ''),
(5, 'dsfa', 'dfa', '2019-03-07', 'cdascv', '234324134 ', 'CSE', 'fgfes', 'dfsghjygfghfdsfhgjukjhgfdashkjfds', 'car.jpg', ''),
(6, 'dsfa', 'dfa', '2019-03-07', 'cdascv', '234324134 l', 'CSE', 'fgfes', 'dfsghjygfghfdsfhgjukjhgfdashkjfds', '6.jpg', ''),
(7, 'dsfa', 'dfa', '2019-03-07', 'cdascv', '234324134 l', 'CSE', 'fgfes', 'dfsghjygfghfdsfhgjukjhgfdashkjfds', '7.jpg', ''),
(8, 'dfdsvvv', 'gbdsv', '2019-03-14', 'gsvgrgg', 'fd2434t5', 'Array', 'gsg', 'gtrgfgrthnrg', '8.jpg', ''),
(9, 'dfdsvvv', 'gbdsv', '2019-03-14', 'gsvgrgg', 'fd2434t5', 'Array', 'gsg', 'gtrgfgrthnrg', '9.jpg', ''),
(10, 'xcsz', 'ffdv ', '2019-03-15', 'gfdgvds', 'fdgvds', 'CIVIL', 'dfgvsb', 'fgdrhudgf', '10.jpg', ''),
(11, 'Wipro', 'SISTec', '2019-03-28', 'AT sagar group of institution bhopal near airport', '120000', ' CSE, IT AND EC', 'manager', 'Reporting time 10 AM and registration fees is 600.', '010111.jpg', ''),
(12, 'google', 'radharaman', '2019-03-30', 'radharaman college ', '12000000', 'CSE IT CIVIL', 'clerk', 'please contect to on time', '12.jpg', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `event_db`
--

CREATE TABLE IF NOT EXISTS `event_db` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `fees` int(10) NOT NULL,
  `event` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `addr` varchar(50) NOT NULL,
  `organizer` varchar(30) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `details` varchar(100) NOT NULL,
  `event_image` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `event_db`
--

INSERT INTO `event_db` (`id`, `fees`, `event`, `date`, `addr`, `organizer`, `contact`, `details`, `event_image`, `status`) VALUES
(1, 200, 'sagar fiesta', '0000-00-00', 'sistec', 'umesh', 8982290151, '100000', 't4.jpg', ''),
(2, 400, 'Nirmaan ', '2019-04-12', 'Creation Sistec Gn', 'ME dept', 7500935914, 'Winner will get 5 Lakh and certificates.', 'blog3.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_register`
--

CREATE TABLE IF NOT EXISTS `student_register` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `college_name` varchar(30) NOT NULL,
  `college_code` int(14) NOT NULL,
  `roll` varchar(16) NOT NULL,
  `email` varchar(35) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `pwd` varchar(18) NOT NULL,
  `cpwd` varchar(18) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `student_register`
--

INSERT INTO `student_register` (`id`, `fname`, `lname`, `college_name`, `college_code`, `roll`, `email`, `gender`, `mobile`, `pwd`, `cpwd`) VALUES
(1, 'madhav', 'singh', 'sistec', 187, '0187cs173d03', 'ms@gmail.com', 'Male', 8982290151, '123', '123'),
(2, 'Arvind', 'Vishwakarma', 'Rana Pratap', 140189, '0187cs173d03', 'madhavrajput@gmail.com', 'Male', 8770930698, '23001', '23001');

-- --------------------------------------------------------

--
-- Table structure for table `super_admin_login`
--

CREATE TABLE IF NOT EXISTS `super_admin_login` (
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `super_admin_login`
--

INSERT INTO `super_admin_login` (`name`, `password`) VALUES
('super', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
