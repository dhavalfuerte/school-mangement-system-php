-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 09, 2017 at 10:32 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE IF NOT EXISTS `admission` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `surname` text NOT NULL,
  `name` text NOT NULL,
  `fathername` text NOT NULL,
  `mobno` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `categery` varchar(10) NOT NULL,
  `standard` text NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `surname`, `name`, `fathername`, `mobno`, `email`, `gender`, `categery`, `standard`, `address`) VALUES
(79, 'kalariya', 'meet', 'prakasbhai', '8899776655', 'ABC123@gmail.com', 'Male', 'OTHER', '12s', 'rajkot'),
(78, 'kalariya', 'disen', 'rajeshbhai', '9429326080', 'disen12@gmail.com', 'Male', 'OTHER', '-1', 'gondal,rajkot');

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE IF NOT EXISTS `campus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `campus`
--

INSERT INTO `campus` (`id`, `image`, `details`) VALUES
(3, 'image/b4.jpg', '(Bus service) More then 5 village cover'),
(4, 'image/Manali 5 star Hotel.jpg', 'HOSTAL BAUILDING'),
(5, 'image/1280x427xHyatt-Regency-Delhi-hotel-ballroom-theater-set-up.jpg.pagespeed.ic.SXs0iXliCe.jpg', 'Assembliy Hall'),
(6, 'image/images (32).jpg', 'SCIENCE LAB'),
(7, 'image/undhiyu.jpg', 'Best food qulity for students');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE IF NOT EXISTS `complain` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `complain` varchar(10) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `name`, `email`, `contact`, `complain`, `message`) VALUES
(7, 'DUDHANI DEEP N.', '--', '9922333445', 'Academic', 'faculty does not give proper answer'),
(8, 'KALARIYA MEET P.', 'MEET12@gmail.com', '9988556633', 'Academic', 'not proper arengement computer lab'),
(6, 'changela harsh p', 'ABC123@gmail.com', '7788994455', 'Non-Academ', 'not sutable bus service'),
(9, 'KALARIYA GOPAL R.', 'ABC123@gmail.com', '9988556633', 'Non-Academ', 'why teacher are apsent manny time?');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `schoolnm` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `mobileno` varchar(50) NOT NULL,
  `landline` varchar(50) NOT NULL,
  `mailid` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `schoolnm`, `address`, `mobileno`, `landline`, `mailid`) VALUES
(1, 'vinayvidya mandir', '7 manahar plot,<br> \r\nmanglamain road,<br>\r\nRajkot 360001.<br>', '9427277819', '02898222507', 'popat694@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `desk`
--

CREATE TABLE IF NOT EXISTS `desk` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `designation` text NOT NULL,
  `experience` varchar(10) NOT NULL,
  `deptnm` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` varchar(10) NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `desk`
--

INSERT INTO `desk` (`id`, `name`, `designation`, `experience`, `deptnm`, `gender`, `age`, `img`) VALUES
(3, 'RAVI SER', 'BCOM.MCOM,', '5 YEAR', 'ACOOUNT', 'm', '29', 'image/images (32).jpg'),
(4, 'PARAS K.', 'B.ED, PTC', '3', 'PRIMARY', 'm', '27', 'image/images (32).jpg'),
(5, 'DARMESH SER', 'M.D,MBBS', '8 YEAR', 'BIOLOGY', 'm', '33', 'image/images (31).jpg'),
(6, 'RITA MEM', 'B.ED, PTC', '6', 'PRIMARY', 'f', '30', 'image/Bhavnath Mahadev Fair.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `fathernm` text NOT NULL,
  `mono` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `standard` varchar(10) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `fathernm`, `mono`, `email`, `gender`, `standard`, `address`) VALUES
(5, 'KALARIYA GOPAL R.', 'prakasbhai', '9429326080', 'ABC123@gmail.com', 'Male', '3', 'abcdefghi'),
(4, 'disen', 'rajeshbhai', '8899776655', 'disen12@gmail.com', 'Male', '4', 'gondal'),
(7, 'DUDHANI DEEP N.', 'xyz', '1100110011', '--', 'Male', '11c', 'aaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `details`) VALUES
(6, 'image/Bhavnath Mahadev Fair.jpg', 'NAVARATRI 2012'),
(2, 'image/images (31).jpg', 'SCIENCE LAB'),
(3, 'image/inex.jpg', 'hom'),
(4, 'image/ies.jpg', 'HOSTAL BAUILDING'),
(5, 'image/images (32).jpg', 'SCIENCE LAB'),
(7, 'image/Dance Festival.jpg', 'DANCE COMPITION 2012'),
(8, 'image/hom.JPG', 'SEMINAR HALL'),
(9, 'image/2009-05-09-Valley-Praise-Fest-058.jpg', 'ANUAL FUNCTION 2014'),
(10, 'image/nov28d.jpg', 'DANCE COMPITION 2013');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `no` int(20) NOT NULL,
  `news` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `no`, `news`) VALUES
(1, 1, 'now admission is open'),
(3, 2, 'chess compition start in 22 jully');

-- --------------------------------------------------------

--
-- Table structure for table `thoughts`
--

CREATE TABLE IF NOT EXISTS `thoughts` (
  `id` int(20) NOT NULL,
  `thoughts` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thoughts`
--

INSERT INTO `thoughts` (`id`, `thoughts`) VALUES
(1, 'Its fast moving world and get along other things,technology specially ahead in leaps and new bounds everyday brings in new surprises,new software and new change in the world you live in information technology today is one of the fastest growing and most''');
