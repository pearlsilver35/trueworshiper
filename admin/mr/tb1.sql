-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 19, 2017 at 03:53 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trueworshiper`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb1`
--

CREATE TABLE IF NOT EXISTS `tb1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(24) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `Password` varchar(24) DEFAULT NULL,
  `Role` varchar(24) DEFAULT 'staff',
  `Singer` varchar(3) DEFAULT 'yes',
  `Prayer` varchar(3) DEFAULT 'Yes',
  `Preacher` varchar(3) DEFAULT 'Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tb1`
--

INSERT INTO `tb1` (`id`, `Name`, `Department`, `DOB`, `Password`, `Role`, `Singer`, `Prayer`, `Preacher`) VALUES
(1, 'bovie', '', '2017-10-16', NULL, NULL, 'Yes', 'Yes', 'Yes'),
(2, '   ret', '', '2017-10-10', NULL, 'staff', 'Yes', 'Yes', 'Yes'),
(3, 'Abigail', '', '2017-08-29', '12345', 'admin', 'no', 'Yes', 'Yes'),
(4, 'ben', 'Account', '2017-06-26', NULL, 'staff', 'Yes', 'No', 'Yes'),
(5, 'Charit', '', '2017-10-13', '', 'Staff', 'Yes', 'Yes', 'no'),
(6, 'cs', '', '2017-10-03', NULL, 'staff', 'Yes', 'Yes', 'Yes'),
(7, 'dayo', 'Business', '2017-10-11', NULL, 'staff', 'No', 'No', 'No'),
(8, 'FEMI', 'Account', '2017-10-12', NULL, 'staff', 'No', 'No', 'Yes'),
(9, 'FVFF', 'Account', '2017-10-21', NULL, 'staff', 'Yes', 'No', 'Yes'),
(10, 'gop', '', '2017-10-05', NULL, 'staff', 'Yes', 'No', 'Yes'),
(11, 'Isaiah Ugonna', '', '2017-09-29', '', 'Staff', 'Yes', 'Yes', 'Yes'),
(12, 'james ayofemi', '', '2017-10-07', NULL, 'staff', 'Yes', 'Yes', 'Yes'),
(13, 'kol', '', '2017-10-21', NULL, 'staff', 'no', 'Yes', 'Yes'),
(14, 'mike', 'Admin', '2017-10-21', NULL, 'staff', 'Yes', 'No', 'No'),
(15, 'Ogechi Uzor', '', '2017-09-29', '', 'Staff', 'no', 'Yes', 'Yes'),
(16, 'Okolo E', '', '2017-08-28', '', 'Staff', 'Yes', 'Yes', 'Yes'),
(18, 'tunad', '', '2017-10-26', NULL, 'staff', 'Yes', 'Yes', 'Yes'),
(19, 'tolu', 'Account', '2017-10-20', NULL, 'staff', 'No', 'Yes', 'Yes'),
(20, 'tosin', 'Support', '2017-09-01', NULL, 'staff', 'Yes', 'No', 'Yes'),
(21, 'ret', 'Business', '2017-10-06', NULL, 'staff', 'No', 'No', 'Yes'),
(22, 'opl', 'UCU', '2017-10-07', NULL, 'staff', 'No', 'No', 'Yes'),
(24, 'ytr', 'Technology', '0000-00-00', NULL, 'staff', 'yes', 'Yes', 'Yes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
