-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 01, 2024 at 05:48 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `afspraak`
--

INSERT INTO `afspraak` (`Id`, `Kleur1`, `Kleur2`, `Kleur3`, `Kleur4`, `Tel`, `Email`, `Datum`, `Soort1`, `Soort2`, `Soort3`) VALUES
(24, '#8080ff', '#ff80ff', '#00ff80', '#ff8000', 123456789, 'carrot@mail.com', '5555-05-05T05:55', 'on', 'on', 'false'),
(23, '#800080', '#932f8b', '#20d8ec', '#ff00ff', 123456, 'something-but-better', '1222-12-12T23:13', 'on', 'on', 'false');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
