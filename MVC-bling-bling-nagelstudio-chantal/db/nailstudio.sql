-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 26, 2024 at 07:28 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nailstudio`
--

-- --------------------------------------------------------

--
-- Table structure for table `afspraak`
--

DROP TABLE IF EXISTS `afspraak`;
CREATE TABLE IF NOT EXISTS `afspraak` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Kleur1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Kleur2` varchar(200) NOT NULL,
  `Kleur3` varchar(200) NOT NULL,
  `Kleur4` varchar(200) NOT NULL,
  `Tel` int NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Datum` varchar(20) NOT NULL,
  `Soort1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Soort2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Soort3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `afspraak`
--

INSERT INTO `afspraak` (`Id`, `Kleur1`, `Kleur2`, `Kleur3`, `Kleur4`, `Tel`, `Email`, `Datum`, `Soort1`, `Soort2`, `Soort3`) VALUES
(2, '4', '1', '5\r\n', '1', 12, 'something', '12-12-12', 'yipee', 'yipee', 'yipee'),
(3, '', '', '', '', 23, 'something@gmail.com', '1212-12-12T12:12', NULL, NULL, NULL),
(4, '', '', '', '', 23, 'something@gmail.com', '1212-12-12T12:12', 'false', 'false', 'false'),
(5, '', '', '', '', 23, 'something@gmail.com', '1212-12-12T12:12', 'false', 'false', 'false'),
(6, '', '', '', '', 23, 'something@gmail.com', '1212-12-12T12:12', 'false', 'false', 'false'),
(7, '', '', '', '', 23, 'something@gmail.com', '1212-12-12T12:12', 'false', 'false', 'false'),
(8, '', '', '', '', 23, 'something@gmail.com', '1212-12-12T12:12', 'false', 'false', 'false'),
(9, '', '', '', '', 23, 'something@gmail.com', '1212-12-12T12:12', 'false', 'false', 'false'),
(10, '#000000', '', '', '', 23, 'something@gmail.com', '1212-12-12T12:12', 'false', 'false', 'false'),
(11, '#000000', '#000000', '', '', 23, 'something@gmail.com', '1212-12-12T12:12', 'false', 'false', 'false'),
(12, '#000000', '#000000', '', '#000000', 23, 'something@gmail.com', '1212-12-12T12:12', 'false', 'false', 'false'),
(13, '#000000', '#000000', '', '#000000', 23, 'something@gmail.com', '1212-12-12T12:12', 'false', 'false', 'false'),
(14, '#000000', '#000000', '', '#000000', 23, 'something@gmail.com', '1212-12-12T12:12', 'false', 'false', 'false'),
(15, '#000000', '#000000', '', '#000000', 23, 'something@gmail.com', '1212-12-12T12:12', 'false', 'false', 'false'),
(16, '#000000', '#000000', '#000000', '#000000', 23, 'something@gmail.com', '1212-12-12T12:12', 'false', 'false', 'false'),
(17, '#000000', '#000000', '#000000', '#000000', 465, 'something@gmail.com', '4554-05-04T05:04', 'on', 'on', 'on'),
(18, '#000000', '#000000', '#000000', '#000000', 465, 'somthing@rfhwei.com', '4545-05-04T05:45', 'on', 'false', 'false'),
(19, '#30cf23', '#c030a4', '#ffffff', '#000000', 2147483647, 'mygmail@gmail.com', '1212-12-12T21:21', 'on', 'false', 'on');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
