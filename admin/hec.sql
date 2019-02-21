-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2017 at 01:06 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hec`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(30) NOT NULL,
  `p_word` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `u_name`, `p_word`) VALUES
(1, 'yogi', 'dutt');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `path` varchar(100) NOT NULL,
  `desc` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `path`, `desc`) VALUES
(12, 'Harry English Club', '../images/595233f8c53f84.27741847.jpg', 'Harry English Club'),
(13, 'Harry English Club', '../images/59523401402269.43081446.jpg', 'Harry English Club'),
(14, 'Harry English Club', '../images/5952340a089689.19548069.jpg', 'Harry English Club'),
(15, 'Harry English Club', '../images/5952341a380142.36708375.jpg', 'Harry English Club'),
(16, 'Harry English Club', '../images/5952342f3e4d81.17131386.jpg', 'Harry English Club'),
(17, 'Harry English Club', '../images/5952343b9f4c57.37869469.jpg', 'Harry English Club'),
(18, 'Harry English Club', '../images/59523444d44032.40500336.jpg', 'Harry English Club'),
(19, 'Harry English Club', '../images/595234583ff8b8.41637943.jpg', 'Harry English Club'),
(20, 'Harry English Club', '../images/5952346331f8c1.26884019.jpg', 'Harry English Club'),
(21, 'Harry English Club', '../images/5952346c98f844.81294585.jpg', 'Harry English Club'),
(22, 'Harry English Club', '../images/5952348804a8a4.82232064.jpg', 'Harry English Club'),
(23, 'Harry English Club', '../images/59523493311845.74837150.jpg', 'Harry English Club');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news` varchar(200) NOT NULL,
  `d` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news`, `d`) VALUES
(1, 'hello', '17 july 2017');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
