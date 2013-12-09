-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 09, 2013 at 02:06 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cars`
--
CREATE DATABASE IF NOT EXISTS `cars` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cars`;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  `make` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `year`, `make`, `model`, `color`) VALUES
(1, 2008, 'Bugatti', 'Veyron', 'Black/Silver'),
(2, 2014, 'Lamborghini', 'Aventador Roadster', 'Verde Ithaca'),
(3, 2014, 'Rolls Royce', 'Phantom Drophead', 'White'),
(4, 2012, 'Maybach', 'Type 57 S', 'Black'),
(5, 2011, 'Ferrari', '599 GTO', 'Red'),
(6, 2012, 'Ferrari', '458 Spider', 'Rosso Corsa'),
(7, 2010, 'Lamborghini', 'Mercielago', 'Yellow'),
(8, 2013, 'Ferrari', '458 Italia', 'White'),
(9, 2014, 'Aston Maritn', 'Vanquish', 'Quantum Silver'),
(10, 2013, 'Ferrari', 'FF', 'Black'),
(11, 2013, 'McLaren', 'MP4-12C', 'Mecury Red Metallic'),
(12, 2013, 'Rolls Royce', 'Ghost', 'White'),
(13, 2013, 'McLaren', 'MP4-12C Spider', 'White'),
(14, 2005, 'Ford', 'GT', 'Mark IV Red Clearcoat'),
(15, 1994, 'Jaguar', 'XJ-Type 220', 'LeMans Blue'),
(16, 2013, 'Ferrari', 'California', 'Red'),
(17, 2014, 'Mercedes', 'Benz SLS AMG', 'Black'),
(18, 2008, 'Lamborghini', 'Mercielago', 'Grigio Avlon'),
(19, 2014, 'Bentley', 'Continental GT', 'Silver'),
(20, 2008, 'Lamborghini', 'Gallardo', 'Balloon White'),
(21, 1969, 'Ford', 'Shelby GT 500', 'Silver/Black'),
(22, 2014, 'BMW', 'Alpina B7', 'Black'),
(23, 2014, 'BMW', 'M6', 'Silver'),
(24, 2012, 'BMW', 'M5', 'White'),
(25, 2013, 'BMW', '650i XDrive', 'Red'),
(26, 2005, 'BMW', '328Xi', 'Orange'),
(27, 2014, 'Nissan', 'GT-R Black Edition', 'Black'),
(28, 2014, 'Porsche', '911 Turbo S', 'Silver'),
(29, 2014, 'Porsche', 'Panamera Turbo S', 'White'),
(30, 2014, 'Porsche ', 'Cayenne Turbo S', 'Gunmetal'),
(31, 2006, 'Porsche', 'Carrera GT', 'Red'),
(32, 2014, 'Porsche', '911', 'White'),
(33, 2014, 'Maserati', 'GranTurismo MC', 'Black'),
(34, 2014, 'Maserati', 'Quattroporte GTS', 'Red'),
(35, 2014, 'Jaguar', 'F-Type', 'Firesand Metallic'),
(36, 2014, 'Acura', 'TLS', 'Black'),
(37, 2014, 'Mitsubishi', 'Evolution', 'Lime Green'),
(38, 2014, 'Subaru', 'WRX STI', 'BLUE'),
(39, 2013, 'Infiniti', 'QX56', 'Graphite'),
(40, 2013, 'Infiniti', 'G37', 'Black'),
(41, 2014, 'Audi', 'R8 ', 'Black'),
(42, 2013, 'Audi', 'A7', 'White'),
(43, 2013, 'Audi', 'TT RS', 'Silver');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
