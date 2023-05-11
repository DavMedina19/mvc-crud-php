-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 11-05-2023 a las 19:57:08
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mascotascrud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

DROP TABLE IF EXISTS `mascotas`;
CREATE TABLE IF NOT EXISTS `mascotas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `genero` varchar(40) NOT NULL,
  `peso` varchar(5) NOT NULL,
  `tamano` varchar(8) NOT NULL,
  `color` varchar(10) NOT NULL,
  `raza` varchar(20) NOT NULL,
  `especie` varchar(20) NOT NULL,
  `fechanacimiento` varchar(40) NOT NULL,
  `propietario` varchar(40) NOT NULL,
  `domesticoosalvaje` varchar(20) NOT NULL,
  `tienvacunas` varchar(10) NOT NULL,
  `veterinario` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12121211 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`id`, `nombre`, `genero`, `peso`, `tamano`, `color`, `raza`, `especie`, `fechanacimiento`, `propietario`, `domesticoosalvaje`, `tienvacunas`, `veterinario`) VALUES
(12121210, 'jack', 'masculino', '20kg', '20', 'negro', 'bulldog', 'perro', '10/02/2022', 'vanessa londoÃ±o', 'domestico', 'si', 'carlos d.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `cc` int(11) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `genero` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`cc`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cc`, `pass`, `nombre`, `apellido`, `genero`, `email`) VALUES
(12345, 'cafe', 'hector', 'medina', 'masculino', 'hector@gmail.com'),
(1234567, '55555', 'hector', 'medina', 'masculino', 'hectormm@hotmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
