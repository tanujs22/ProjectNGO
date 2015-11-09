-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2015 at 10:13 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_ngo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_ngo`
--

CREATE TABLE IF NOT EXISTS `admin_ngo` (
  `admin_id` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `ph_num` int(15) NOT NULL,
  `admin_pic` varchar(50) DEFAULT NULL,
  `admin_fname` varchar(30) NOT NULL,
  `admin_lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_ngo`
--

INSERT INTO `admin_ngo` (`admin_id`, `username`, `password`, `ph_num`, `admin_pic`, `admin_fname`, `admin_lname`, `email`, `DOB`, `address`, `sex`) VALUES
('admin1', 'shats123', 'shats123', 123456, '', 'Shatakshi', 'Kapoor', '', '0', '', ''),
('rootup', 'tanuj123', 'tanuj123', 123456, '', 'Tanuj', 'Srivastava', '', '0', '', ''),
('rootup1', 'tanuj123', 'tanuj123', 123456, NULL, 'Tanuj', 'Srivastava', '', '0', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ngo_detail`
--

CREATE TABLE IF NOT EXISTS `ngo_detail` (
  `ngo_id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `locality` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pin_code` int(6) NOT NULL,
  `ph_number` int(15) NOT NULL,
  `website` varchar(30) NOT NULL,
  `ngo_logo` varchar(50) NOT NULL,
  `About` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo_detail`
--

INSERT INTO `ngo_detail` (`ngo_id`, `name`, `locality`, `city`, `state`, `pin_code`, `ph_number`, `website`, `ngo_logo`, `About`) VALUES
('test001', 'abcd', 'pqrs', 'abcd', 'abcd', 10000, 1234567890, 'www.abcd.in', 'ÿØÿâICC_PROFILE\0\0\0lcms\0\0mntrRGB XYZ Ü\0\0', ''),
('xyz1234', 'xyz', 'xyz', 'xyz', 'xyz', 0, 0, 'xyz', '', 'xyz'),
('xyzabc', 'test002', 'ABCD', 'ABCD', 'ABCD', 123456, 123456, 'asdv', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pt_cat`
--

CREATE TABLE IF NOT EXISTS `pt_cat` (
  `pid` varchar(20) NOT NULL,
  `cat_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pt_cat`
--

INSERT INTO `pt_cat` (`pid`, `cat_name`) VALUES
('1', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `pt_list`
--

CREATE TABLE IF NOT EXISTS `pt_list` (
  `pt_num` varchar(20) NOT NULL,
  `pt_about` varchar(1000) DEFAULT NULL,
  `category` varchar(10) NOT NULL,
  `ngo_id` varchar(20) NOT NULL,
  `pt_pic` varchar(50) DEFAULT NULL,
  `pt_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pt_list`
--

INSERT INTO `pt_list` (`pt_num`, `pt_about`, `category`, `ngo_id`, `pt_pic`, `pt_name`) VALUES
('testpt1', 'test test', '1', 'test001', 'ÿØÿà\0JFIF\0\0\0\0\0\0ÿí\0œPhotoshop 3.0\08BIM\0\0\0\0\0€', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`pic`) VALUES
('img/admin_pic/Untitled-3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_ngo`
--
ALTER TABLE `admin_ngo`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `ngo_detail`
--
ALTER TABLE `ngo_detail`
  ADD PRIMARY KEY (`ngo_id`);

--
-- Indexes for table `pt_cat`
--
ALTER TABLE `pt_cat`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `pt_list`
--
ALTER TABLE `pt_list`
  ADD PRIMARY KEY (`pt_num`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
