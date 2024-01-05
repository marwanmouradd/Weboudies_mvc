-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2024 at 01:36 PM
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
-- Database: `oudies`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `name` varchar(50) NOT NULL,
  `price` int(100) NOT NULL,
  `id` int(11) NOT NULL,
  `img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- Table structure for table `user`
CREATE TABLE `user` (
  `ID` INT(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `mail` varchar(50) NULL,
  `Password` varchar(50) NOT NULL,
  `Phone` varchar(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table `user`
INSERT INTO `user` (`ID`, `Name`, `Password`, `mail`, `Phone`) VALUES
(1, 'nada', '123', NULL, '58796321458'),
(2, 'Ahmed', '123', NULL, '01234567899'),
(3, 'Sara', '123', NULL, '53687426587'),
(10, 'salma', '123', NULL, '36547896521'),
(17, 'hassan', '123', NULL, '36547896521');
