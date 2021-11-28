-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2015 at 06:01 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jobportal`
--
CREATE DATABASE `jobportal` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jobportal`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `fname` varchar(80) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `type`, `email`, `password`, `fname`) VALUES
(1, 'Admin', 'admin@gmail.com', '123456', 'Mr Soham');

-- --------------------------------------------------------

--
-- Table structure for table `hr`
--

CREATE TABLE IF NOT EXISTS `hr` (
  `hr_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `pno` varchar(10) NOT NULL,
  `qli` varchar(80) NOT NULL,
  `address` varchar(80) NOT NULL,
  PRIMARY KEY (`hr_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hr`
--

INSERT INTO `hr` (`hr_id`, `type`, `password`, `fname`, `email`, `pno`, `qli`, `address`) VALUES
(1, 'HR', '123456', 'Miss Sita', 'sita@gmail.com', '9988798789', 'BE', 'rohini,delhi');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_title` varchar(50) NOT NULL,
  `job_specification` varchar(50) NOT NULL,
  `job_salary` varchar(50) NOT NULL,
  `job_location` varchar(50) NOT NULL,
  `job_address` varchar(50) NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `job_title`, `job_specification`, `job_salary`, `job_location`, `job_address`) VALUES
(1, 'Faculty', 'Excellent Communication', '14000', 'Delhi', 'Rohini East, merto station'),
(2, 'Assistant', 'Execellent in writing skill', '15000', 'Delhi', 'Gurgaon'),
(3, 'CEO', 'Excellent in communication skill', '35000', 'Delhi', 'Laxmi Nagar');

-- --------------------------------------------------------

--
-- Table structure for table `job_apply`
--

CREATE TABLE IF NOT EXISTS `job_apply` (
  `apply_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_id` varchar(80) NOT NULL,
  `job_title` varchar(80) NOT NULL,
  `job_specification` varchar(80) NOT NULL,
  `job_salary` varchar(80) NOT NULL,
  `job_location` varchar(80) NOT NULL,
  `job_address` varchar(80) NOT NULL,
  `user_id` varchar(80) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `pno` varchar(80) NOT NULL,
  `address` varchar(80) NOT NULL,
  `up_file` varchar(200) NOT NULL,
  PRIMARY KEY (`apply_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `job_apply`
--

INSERT INTO `job_apply` (`apply_id`, `job_id`, `job_title`, `job_specification`, `job_salary`, `job_location`, `job_address`, `user_id`, `fname`, `email`, `pno`, `address`, `up_file`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '1', 'Faculty', 'Excellent Communication', '14000', 'Delhi', 'Rohini East, merto station', '2', 'harsh', 'harsh@gmail.com', '9871234567', 'delhi', 'upload/Koala.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `pno` varchar(80) NOT NULL,
  `address` varchar(80) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `type`, `password`, `email`, `fname`, `pno`, `address`) VALUES
(1, 'User', '123456', 'neha@gmail.com', 'neha', '9876543234', 'Delhi'),
(2, 'User', '123456', 'harsh@gmail.com', 'harsh', '9871234569', 'delhi east');
