-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 03, 2019 at 07:45 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tedx`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumini`
--

DROP TABLE IF EXISTS `alumini`;
CREATE TABLE IF NOT EXISTS `alumini` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `course` varchar(100) NOT NULL,
  `message` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumini`
--

INSERT INTO `alumini` (`id`, `name`, `email`, `phone`, `course`, `message`) VALUES
(1, 'q', 'q@q.q', 0, 'q', 'q'),
(2, 'q', 'q@q.q', 0, 'q', 'q'),
(3, 'testing', 'q@q.q', 123456789, 'qwww', 'qf,nvjerer;kvhierrnk;urhs;sjhbidvm,hmhdvjsd vbjvbyvb,jvbljhdv ljhdsbvjsdsbvljsdbvsbsvisbsdsvbuisdusdvssb'),
(4, 'testing', 'q@q.q', 123456789, 'qwww', 'qf,nvjerer;kvhierrnk;urhs;sjhbidvm,hmhdvjsd vbjvbyvb,jvbljhdv ljhdsbvjsdsbvljsdbvsbsvisbsdsvbuisdusdvssb'),
(5, 'testing', 'q@q.q', 123456789, 'qwww', 'qf,nvjerer;kvhierrnk;urhs;sjhbidvm,hmhdvjsd vbjvbyvb,jvbljhdv ljhdsbvjsdsbvljsdbvsbsvisbsdsvbuisdusdvssb'),
(6, 'q', 'q@q.q', 0, 'q', 'q');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'q', 'q@q.qq', 'q'),
(2, 'testing', 'q@q.q', 'q');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
