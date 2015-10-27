-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2015 at 06:06 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `randomserial`
--

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE IF NOT EXISTS `manufacturer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturerName` varchar(50) NOT NULL,
  `manufacturerId` varchar(2) NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `manufacturerName`, `manufacturerId`, `active`) VALUES
(1, 'botosoft', '10', 1),
(2, 'microsoft', '11', 1),
(3, 'apple', '12', 1),
(4, 'dell', '13', 1),
(5, 'bunmi', '14', 1),
(6, 'Toshiba', '15', 1),
(7, 'estee', '16', 1),
(8, 'New User', '17', 1),
(9, 'mimi', '18', 0),
(16, 'shell', '19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `serials`
--

CREATE TABLE IF NOT EXISTS `serials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturerId` varchar(2) NOT NULL,
  `productId` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `serials`
--

INSERT INTO `serials` (`id`, `manufacturerId`, `productId`) VALUES
(1, '10', '10w1xZ8s7E'),
(2, '10', '101vYg1L61'),
(3, '15', '15tfq1rhm2'),
(4, '15', '153LA1NLWt'),
(5, '15', '156EPhBm1g'),
(6, '15', '15t7StIYbg'),
(7, '15', '15XgzWT27E');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
