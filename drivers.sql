-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 10, 2019 at 12:02 PM
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
-- Database: `drivers`
--

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

DROP TABLE IF EXISTS `contracts`;
CREATE TABLE IF NOT EXISTS `contracts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contract` varchar(50) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `document1` varchar(50) NOT NULL,
  `document2` varchar(50) NOT NULL,
  `document3` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contract` (`contract`),
  KEY `contract_2` (`contract`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `contract`, `driver`, `vehicle`, `type`, `duration`, `payment`, `amount`, `document1`, `document2`, `document3`) VALUES
(1, 'B01831226', 'Kelvin Bryan', '25618697', 'Higher Purchase', 'Eight Month', 'Daily Payment', '6000', '983775_510836585718797_8391820952871298316_n.jpg', '984184_688287534580656_4724125194205928320_n.jpg', '994481_512065348929254_7539845687373992954_n.jpg'),
(2, 'B01298230', 'Jupiter Manuel', '25115360', 'Balancing', 'Three Month', 'Weekly Payment', '14000', '15234_512431012226021_2412557412258425462_n.jpg', '165085.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

DROP TABLE IF EXISTS `drivers`;
CREATE TABLE IF NOT EXISTS `drivers` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contract` varchar(50) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `name`, `phone`, `address`, `contract`, `vehicle`, `image`, `trn_date`) VALUES
(1, 'Kelvin Bryan', 5533245589, '231 dynamo street, Apapa, Lagos', 'B01831226', '25618697', '403517_125867270882399_1762867154_n.jpg', '2019-01-10 11:51:30'),
(2, 'Jupiter Manuel', 7546287387, 'ncb concentration avenue festac town', 'B01298230', '25115360', '2015-New-Brand-Mens-Shirts-Short-Sleeve-Casual-Shirt-Men-Slim-Fit-Brand-Design-Formal-Shirt.jpg', '2019-01-10 11:55:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', '2019-01-08 10:55:57');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

DROP TABLE IF EXISTS `vehicles`;
CREATE TABLE IF NOT EXISTS `vehicles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `engine` varchar(50) NOT NULL,
  `plate` varchar(50) NOT NULL,
  `chasis` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `vehicle`, `name`, `model`, `year`, `engine`, `plate`, `chasis`, `status`) VALUES
(1, '25618697', 'Toyota', 'Hi-ace', '2016', '4566ERRTH3453', 'HUY242GJ', 'FGH564FGH', 0),
(2, '25115360', 'Honda', 'Accord', '2019', '74634675', '64567u5', 'FGH564FGH', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
