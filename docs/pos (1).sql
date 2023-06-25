-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-06-2023 a las 00:15:06
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `categoria` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `fecha`) VALUES
(1, 'EQUIPOS ELECTROMECÁNICOS', '2023-06-25 00:12:54'),
(2, 'TALADROS', '2023-06-25 00:13:06'),
(3, 'ANDAMIOS', '2023-06-25 00:13:10'),
(4, 'GENERADORES DE ENERGÍA', '2023-06-25 00:13:25'),
(5, 'EQUIPOS PARA CONSTRUCCIÓN', '2023-06-25 00:13:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `usuario` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `perfil` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `foto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `estado` int NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `perfil`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(1, 'Usuario Administrador', 'admin', 'admin123', 'Administrador', 'views/img/usuarios/admin/311.jpg', 1, '2023-06-24 18:09:19', '2023-06-09 21:48:40'),
(2, 'Kevin Byte', 'byte', '$2a$07$asxx54ahjppf45sd87a5auu83LTMU//KBkuIE1Csn6JOMx3ZU1Olq', 'Administrador', 'views/img/usuarios/byte/377.png', 1, '2023-06-23 12:54:32', '2023-06-22 21:27:27'),
(3, 'Kevin Montero', 'kevin', '$2a$07$asxx54ahjppf45sd87a5au1Ejn5ZP41RcjGQuvHY2B8m3nFLHSCyu', 'Especial', 'views/img/usuarios/kevin/121.jpg', 0, '2023-06-23 12:54:44', '2023-06-22 21:28:20'),
(4, 'Admin', 'Aldair', '$2a$07$asxx54ahjppf45sd87a5auBUuu0vUdG0C6dRkPgqQay69cXl5qFbS', 'Vendedor', 'views/img/usuarios/Aldair/500.jpg', 0, '2023-06-23 12:54:52', '2023-06-22 21:28:59');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
