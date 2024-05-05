-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2024 at 10:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `completed`
--

CREATE TABLE `completed` (
  `fullnames` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `date_of_birth` varchar(225) NOT NULL,
  `contact_number` varchar(225) NOT NULL,
  `favorite_food` varchar(225) NOT NULL,
  `movies` varchar(225) NOT NULL,
  `radio` varchar(225) NOT NULL,
  `eat_out` varchar(225) NOT NULL,
  `watch_TV` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `completed`
--

INSERT INTO `completed` (`fullnames`, `email`, `date_of_birth`, `contact_number`, `favorite_food`, `movies`, `radio`, `eat_out`, `watch_TV`) VALUES
('julia sate', 'juliasate@gmail.com', '2002-04-04', '0765998885', 'Pap and Wors', '1', '4', '3', '4'),
('cecilia', 'cmolefe@gmail.com', '2000-01-06', '0710990525', 'Other', '1', '3', '1', '4'),
('Maditaba', 'Maditaba@gmail.com', '1996-02-21', '0712505990', 'Pasta, Other', '3', '1', '4', '5'),
('Tebogo ', 'Tebogo@gmail.com', '1992-06-10', '0805990125', 'Pizza', '4', '2', '5', '1'),
('Karabo', 'Karabo@gmail.com', '2018-02-21', '0765998885', 'Pap and Wors', '1', '3', '2', '1'),
('Gledwin', 'Gledwin@gmail.com', '2017-11-08', '0805990125', 'Pasta', '2', '4', '1', '5'),
('Dipuo mofokeng', 'mofokeng@gmail.com', '2010-05-16', '0765998885', 'Pizza', '1', '3', '1', '5'),
('mofokeng', 'fokeng@gmail.com', '2018-01-02', '0765885v', 'Pasta', '3', '1', '2', '4'),
('kopano molefe', 'kopano@gmail.com', '1964-12-29', '0765885005', 'Pizza, Pasta, Other', '3', '1', '5', '1'),
('edwin', 'edwin@gmail.com', '2005-08-02', '0805990125', '', '', '', '', ''),
('edwin', 'edwin@gmail.com', '', '0805990125', 'Pasta', '3', '2', '4', '1'),
('ano molefe', 'ano@gmail.com', '2007-05-29', '0765885005', '', '1', '2', '3', '4'),
('ano molefe', 'ano@gmail.com', '2012-05-31', '0765885005', '', '2', '5', '3', '1'),
('okeng', 'okeng@gmail.com', '2005-07-17', '0765885005', 'Other', '1', '3', '5', '2'),
('Zamar', 'Zamarg@gmail.com', '2001-10-01', '0750805658', 'Pizza', '3', '2', '4', '5'),
('menzi', 'menzi@gmail.com', '2005-04-19', '0750805658', 'Pap and Wors', '1', '3', '1', '5');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
