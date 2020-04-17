-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Temps de generació: 17-04-2020 a les 14:23:01
-- Versió del servidor: 10.4.10-MariaDB
-- Versió de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `romans`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `seccions`
--

DROP TABLE IF EXISTS `seccions`;
CREATE TABLE IF NOT EXISTS `seccions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nom` (`nom`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Bolcament de dades per a la taula `seccions`
--

INSERT INTO `seccions` (`id`, `nom`) VALUES
(1, 'Proyectos ficción'),
(2, 'Director de producción de cine'),
(3, 'Proyectos publicidad'),
(4, 'Info'),
(5, 'Contacto');

-- --------------------------------------------------------

--
-- Estructura de la taula `usuaris`
--

DROP TABLE IF EXISTS `usuaris`;
CREATE TABLE IF NOT EXISTS `usuaris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `perfil` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Bolcament de dades per a la taula `usuaris`
--

INSERT INTO `usuaris` (`id`, `nom`, `email`, `password`, `perfil`) VALUES
(1, 'Guillem Duñó', 'guillemduno@gmail.com', '8f0c4c0c88e8a50f6256060258d0ce7165bf952e', 'admin'),
(2, 'Miquel Romans', 'romans.miquel@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
