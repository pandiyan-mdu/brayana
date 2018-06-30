-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 29, 2018 at 04:04 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brayana`
--

-- --------------------------------------------------------

--
-- Table structure for table `chit_master`
--

DROP TABLE IF EXISTS `chit_master`;
CREATE TABLE IF NOT EXISTS `chit_master` (
  `chit_id` int(11) NOT NULL AUTO_INCREMENT,
  `fund_type` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `inst_month` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `inst_amount` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `total_amount` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`chit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chit_master`
--

INSERT INTO `chit_master` (`chit_id`, `fund_type`, `inst_month`, `inst_amount`, `total_amount`, `updated_date`) VALUES
(1, 'tst1', '12', '1000', '12000', '2018-05-12 15:26:40'),
(2, 'tst12', '12', '1000', '12000', '2018-05-12 15:26:51'),
(4, 'tes', '1', '2', '2', '2018-05-21 16:31:57'),
(5, 'testjay', '12', '323', '3876', '2018-05-21 16:32:22');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_joining` date NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) NOT NULL,
  `emp_pin` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `education` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `maritial_status` int(11) NOT NULL,
  `id_proof` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `land_booking`
--

DROP TABLE IF EXISTS `land_booking`;
CREATE TABLE IF NOT EXISTS `land_booking` (
  `land_book_id` int(11) NOT NULL AUTO_INCREMENT,
  `site_id` int(11) NOT NULL,
  `booking_no` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `customer_id` int(11) NOT NULL,
  `inst_month` int(11) NOT NULL,
  `inst_amount` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `paid_amount` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `paid_month` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `pay_verification` int(11) NOT NULL,
  `payment_mode` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`land_book_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `land_master`
--

DROP TABLE IF EXISTS `land_master`;
CREATE TABLE IF NOT EXISTS `land_master` (
  `site_id` int(11) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci,
  `survey_no` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `inst_month` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `inst_amount` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `total_amount` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`site_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `land_master`
--

INSERT INTO `land_master` (`site_id`, `site_name`, `desc`, `survey_no`, `area`, `city`, `inst_month`, `inst_amount`, `total_amount`, `updated_date`) VALUES
(6, 'gfdgdfg', NULL, 'gfgdfg', 'fdgdfg', 'gfdgfd', '12', '10', '120', '2018-05-19 06:20:06'),
(7, 'gfdgdfg', NULL, 'gfgdfg', 'fdgdfg', 'gfdgfd', '12', '10', '120', '2018-05-19 06:20:24');

-- --------------------------------------------------------

--
-- Table structure for table `tree_master`
--

DROP TABLE IF EXISTS `tree_master`;
CREATE TABLE IF NOT EXISTS `tree_master` (
  `site_id` int(11) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `no_tree` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `tree_amount` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`site_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tree_master`
--

INSERT INTO `tree_master` (`site_id`, `site_name`, `no_tree`, `tree_amount`, `updated_date`) VALUES
(1, 'sample', '12', '123', '2018-05-21 16:49:07');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

DROP TABLE IF EXISTS `user_login`;
CREATE TABLE IF NOT EXISTS `user_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_mobile` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `user_type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `user_name`, `user_email`, `user_password`, `user_mobile`, `user_type`, `user_type_id`) VALUES
(1, 'admin', NULL, '21232f297a57a5a743894a0e4a801fc3', '9003502719', '1', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
