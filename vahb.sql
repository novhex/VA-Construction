-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2016 at 07:53 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vahb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$15$JEeSrSQCSRLmb5cVN2p4r.2Z3t0wxHaWMmnyb1oBCwWQcFtsfvgHq');

-- --------------------------------------------------------

--
-- Table structure for table `inquries`
--

CREATE TABLE IF NOT EXISTS `inquries` (
  `inqury_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `email_add` varchar(255) NOT NULL,
  `inquiry_subject` varchar(100) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`inqury_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `supplies`
--

CREATE TABLE IF NOT EXISTS `supplies` (
  `supply_id` int(11) NOT NULL AUTO_INCREMENT,
  `supply_name` varchar(50) NOT NULL,
  `supply_description` varchar(50) NOT NULL,
  `supply_price` double NOT NULL,
  `supply_stock` int(11) NOT NULL,
  `supply_img` text NOT NULL,
  PRIMARY KEY (`supply_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `supplies`
--

INSERT INTO `supplies` (`supply_id`, `supply_name`, `supply_description`, `supply_price`, `supply_stock`, `supply_img`) VALUES
(1, 'Nerd Glass', 'Secret Agent Glasses', 500, 5, '1467080042_0c91543ee21bbba838b4b699b7617692.png'),
(2, 'Flat Iron', 'Flat Iron for your clothes', 1000, 10, '1467080258_14c54012c630fe4119526875c201ae88.jpg'),
(3, 'Rice Cooker', 'Rice cooker for everyone', 3500, 3, '1467080834_7276056237beb4f0d051cba6be934d2a.jpg'),
(4, 'Refrigerator', 'Samsung Refrigerator ', 5000, 10, '1467080987_eb2bbe606522750dd96eefb4d2898c40.jpg'),
(5, 'Microwave', 'Sharp Microwave', 2300, 5, '1467092552_2b7940fbda81ab6f43a9e5220e86c455.jpg'),
(6, 'Github Stuff Toy', 'Github Stuff Toy OctoCat', 1300, 1, '1467092860_6dee8401404887dfd8a657b944668dfe.jpg'),
(7, 'Converse All Start Red', 'Converse All Star Red High Cut', 3500, 1, '1467093081_686e712c7f6eecef75296d9ca4b12aa2.jpg'),
(8, 'Iphone 6 Plus', 'Iphone 6 Plus 64GB', 45500, 1, '1467093129_c4552b7136de0e91fb0f7d042c73e9bb.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
