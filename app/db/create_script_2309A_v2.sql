-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 03 jun 2024 om 13:35
-- Serverversie: 8.0.32
-- PHP-versie: 8.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvcframework-2309a`
--
CREATE DATABASE IF NOT EXISTS `mvcframework-2309a` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `mvcframework-2309a`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Country`
--

DROP TABLE IF EXISTS `Country`;
CREATE TABLE IF NOT EXISTS `Country` (
  `Id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `Name` varchar(250) NOT NULL,
  `CapitalCity` varchar(250) NOT NULL,
  `Continent` varchar(250) NOT NULL,
  `Population` int NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `Country`
--

INSERT INTO `Country` (`Id`, `Name`, `CapitalCity`, `Continent`, `Population`) VALUES
(2, 'Tanzania', 'Dodoma', 'Afrika', 63590000),
(4, 'Japan', 'Tokio', 'Azi&euml;', 125700000),
(5, 'Zwitserlandd', 'Bern', 'Europa', 8703000),
(6, 'Noorwegen', 'Oslo', 'Europa', 5550203),
(11, 'Litouwen', 'Vilnius', 'Europa', 340000000),
(15, 'Marokko', 'Rabat', 'Afrika', 37500000),
(16, 'Nepal', 'Kathmandu', 'Azi&euml;', 30000000),
(17, 'Chili', 'Santiago', 'Zuid-Amerika', 18276870),
(18, 'Japan', 'Tokio', 'Azi&euml;', 125700000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
