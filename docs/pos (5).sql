-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 06-07-2023 a las 17:19:37
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
  `categoria` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `fecha`) VALUES
(1, 'EQUIPOS ELECTROMECÁNICOS', '2023-06-25 00:12:54'),
(2, 'TALADROS', '2023-06-25 00:13:06'),
(3, 'ANDAMIOS', '2023-06-25 00:13:10'),
(4, 'GENERADORES DE ENERGÍA', '2023-06-25 00:13:25'),
(5, 'EQUIPOS PARA CONSTRUCCIÓN', '2023-06-25 00:13:32'),
(6, 'COMPONENTES PC', '2023-06-30 16:41:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `documento` int NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `compras` int NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `documento`, `email`, `telefono`, `direccion`, `fecha_nacimiento`, `compras`, `fecha`) VALUES
(1, 'Byte Montero', 67834345, 'byte@gmail.com', '(77) 777-777-777', 'Calle Javier Esperanza', '1998-02-12', 0, '2023-07-06 16:37:49'),
(2, 'Jareth Montero', 565656565, 'jaret@gmail.com', '(66) 666-666-666', 'Calle Bolognesi', '1998-02-03', 0, '2023-07-06 16:48:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_categoria` int NOT NULL,
  `codigo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `imagen` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `stock` int NOT NULL,
  `precio_compra` float NOT NULL,
  `precio_venta` float NOT NULL,
  `ventas` int NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `id_categoria`, `codigo`, `descripcion`, `imagen`, `stock`, `precio_compra`, `precio_venta`, `ventas`, `fecha`) VALUES
(1, 1, '101', 'Aspiradora Industrial ', 'views/img/productos/101/629.png', 10, 1500, 2100, 0, '2023-07-03 16:14:23'),
(2, 1, '102', 'Plato Flotante para Allanadora', 'views/img/productos/102/728.jpg', 15, 4500, 6300, 0, '2023-07-03 16:14:23'),
(3, 1, '103', 'Compresor de Aire para pintura', 'views/img/productos/103/215.jpg', 20, 3000, 4200, 0, '2023-07-03 16:14:23'),
(4, 1, '104', 'Cortadora de Adobe sin Disco ', 'views/img/productos/104/868.jpg', 20, 4000, 5600, 0, '2023-07-03 16:14:23'),
(5, 1, '105', 'Cortadora de Piso sin Disco ', 'views/img/productos/105/924.jpg', 20, 1540, 2156, 0, '2023-07-03 16:14:23'),
(6, 1, '106', 'Disco Punta Diamante ', 'views/img/productos/106/808.jpg', 20, 1100, 1540, 0, '2023-07-03 16:14:23'),
(7, 1, '107', 'Extractor de Aire ', 'views/img/productos/107/177.jpg', 20, 1540, 2156, 0, '2023-07-03 16:14:23'),
(8, 1, '108', 'Guadañalora', 'views/img/productos/108/928.jpg', 20, 1540, 2156, 0, '2023-07-03 16:14:23'),
(9, 1, '109', 'Hidrolavadora El', 'views/img/productos/109/233.jpg', 20, 2600, 3640, 0, '2023-07-03 16:14:23'),
(10, 1, '110', 'Hidrolavadora Gasolina', 'views/img/productos/110/379.jpg', 20, 2210, 3094, 0, '2023-07-03 16:14:23'),
(11, 1, '111', 'Motobomba a Gasolina', 'views/img/productos/default/anonymous.png', 20, 2860, 4004, 0, '2023-07-03 16:14:23'),
(12, 1, '112', 'Motobomba El', 'views/img/productos/default/anonymous.png', 20, 2400, 3360, 0, '2023-07-03 16:14:23'),
(13, 1, '113', 'Sierra Circular ', 'views/img/productos/default/anonymous.png', 20, 1100, 1540, 0, '2023-07-03 16:14:23'),
(14, 1, '114', 'Disco de tugsteno para Sierra circular', 'views/img/productos/default/anonymous.png', 20, 4500, 6300, 0, '2023-07-03 16:14:23'),
(15, 1, '115', 'Soldador Electrico ', 'views/img/productos/default/anonymous.png', 20, 1980, 2772, 0, '2023-07-03 16:14:23'),
(16, 1, '116', 'Careta para Soldador', 'views/img/productos/default/anonymous.png', 20, 4200, 5880, 0, '2023-07-03 16:14:23'),
(17, 1, '117', 'Torre de iluminacion ', 'views/img/productos/default/anonymous.png', 20, 1800, 2520, 0, '2023-07-03 16:14:23'),
(18, 2, '201', 'Martillo Demoledor de Piso 110V', 'views/img/productos/default/anonymous.png', 20, 5600, 7840, 0, '2023-07-03 16:14:23'),
(19, 2, '202', 'Muela o cincel martillo demoledor piso', 'views/img/productos/default/anonymous.png', 20, 9600, 13440, 0, '2023-07-03 16:14:23'),
(20, 2, '203', 'Taladro Demoledor de muro 110V', 'views/img/productos/default/anonymous.png', 20, 3850, 5390, 0, '2023-07-03 16:14:23'),
(21, 2, '204', 'Muela o cincel martillo demoledor muro', 'views/img/productos/default/anonymous.png', 20, 9600, 13440, 0, '2023-07-03 16:14:23'),
(22, 2, '205', 'Taladro Percutor de 1/2 plg Madera y Metal', 'views/img/productos/default/anonymous.png', 20, 8000, 11200, 0, '2023-07-03 16:14:23'),
(23, 2, '206', 'Taladro Percutor SDS Plus 110V', 'views/img/productos/default/anonymous.png', 20, 3900, 5460, 0, '2023-07-03 16:14:23'),
(24, 2, '207', 'Taladro Percutor SDS Max 110V (Mineria)', 'views/img/productos/default/anonymous.png', 20, 4600, 6440, 0, '2023-07-03 16:14:23'),
(25, 3, '301', 'Andamio colgante', 'views/img/productos/default/anonymous.png', 20, 1440, 2016, 0, '2023-07-03 16:14:23'),
(26, 3, '302', 'Distanciador andamio colgante', 'views/img/productos/default/anonymous.png', 20, 1600, 2240, 0, '2023-07-03 16:14:23'),
(27, 3, '303', 'Marco andamio modular ', 'views/img/productos/default/anonymous.png', 20, 900, 1260, 0, '2023-07-03 16:14:23'),
(28, 3, '304', 'Marco andamio tijera', 'views/img/productos/default/anonymous.png', 20, 100, 140, 0, '2023-07-03 16:14:23'),
(29, 3, '305', 'Tijera para andamio', 'views/img/productos/default/anonymous.png', 20, 162, 226.8, 0, '2023-07-03 16:14:23'),
(30, 3, '306', 'Escalera interna para andamio', 'views/img/productos/default/anonymous.png', 20, 270, 378, 0, '2023-07-03 16:14:23'),
(31, 3, '307', 'Pasamanos de seguridad', 'views/img/productos/default/anonymous.png', 20, 75, 105, 0, '2023-07-03 16:14:23'),
(32, 3, '308', 'Rueda giratoria para andamio', 'views/img/productos/default/anonymous.png', 20, 168, 235.2, 0, '2023-07-03 16:14:23'),
(33, 3, '309', 'Arnes de seguridad', 'views/img/productos/default/anonymous.png', 20, 1750, 2450, 0, '2023-07-03 16:14:23'),
(34, 3, '310', 'Eslinga para arnes', 'views/img/productos/default/anonymous.png', 20, 175, 245, 0, '2023-07-03 16:14:23'),
(35, 3, '311', 'Plataforma Met', 'views/img/productos/default/anonymous.png', 20, 420, 588, 0, '2023-07-03 16:14:23'),
(36, 4, '401', 'Planta Electrica Diesel 6 Kva', 'views/img/productos/default/anonymous.png', 20, 3500, 4900, 0, '2023-07-03 16:14:23'),
(37, 4, '402', 'Planta Electrica Diesel 10 Kva', 'views/img/productos/default/anonymous.png', 20, 3550, 4970, 0, '2023-07-03 16:14:23'),
(38, 4, '403', 'Planta Electrica Diesel 20 Kva', 'views/img/productos/default/anonymous.png', 20, 3600, 5040, 0, '2023-07-03 16:14:23'),
(39, 4, '404', 'Planta Electrica Diesel 30 Kva', 'views/img/productos/default/anonymous.png', 20, 3650, 5110, 0, '2023-07-03 16:14:23'),
(40, 4, '405', 'Planta Electrica Diesel 60 Kva', 'views/img/productos/default/anonymous.png', 20, 3700, 5180, 0, '2023-07-03 16:14:23'),
(41, 4, '406', 'Planta Electrica Diesel 75 Kva', 'views/img/productos/default/anonymous.png', 20, 3750, 5250, 0, '2023-07-03 16:14:23'),
(42, 4, '407', 'Planta Electrica Diesel 100 Kva', 'views/img/productos/default/anonymous.png', 20, 3800, 5320, 0, '2023-07-03 16:14:23'),
(43, 4, '408', 'Planta Electrica Diesel 120 Kva', 'views/img/productos/default/anonymous.png', 20, 3850, 5390, 0, '2023-07-03 16:14:23'),
(44, 5, '501', 'Escalera de Tijera Aluminio ', 'views/img/productos/default/anonymous.png', 20, 350, 490, 0, '2023-07-03 16:14:23'),
(45, 5, '502', 'Extension Electrica ', 'views/img/productos/default/anonymous.png', 20, 370, 518, 0, '2023-07-03 16:14:23'),
(46, 5, '503', 'Gato tensor', 'views/img/productos/default/anonymous.png', 20, 380, 532, 0, '2023-07-03 16:14:23'),
(47, 5, '504', 'Lamina Cubre Brecha ', 'views/img/productos/default/anonymous.png', 20, 380, 532, 0, '2023-07-03 16:14:23'),
(48, 5, '505', 'Llave de Tubo', 'views/img/productos/default/anonymous.png', 20, 480, 672, 0, '2023-07-03 16:14:23'),
(49, 5, '506', 'Manila por Metro', 'views/img/productos/default/anonymous.png', 20, 600, 840, 0, '2023-07-03 16:14:23'),
(50, 5, '507', 'Polea 2 canales', 'views/img/productos/default/anonymous.png', 20, 900, 1260, 0, '2023-07-03 16:14:23'),
(51, 5, '508', 'Tensor', 'views/img/productos/default/anonymous.png', 20, 100, 140, 0, '2023-07-03 16:14:23'),
(52, 5, '509', 'Bascula ', 'views/img/productos/default/anonymous.png', 20, 130, 182, 0, '2023-07-03 16:14:23'),
(53, 5, '510', 'Bomba Hidrostatica', 'views/img/productos/default/anonymous.png', 20, 770, 1078, 0, '2023-07-03 16:14:23'),
(54, 5, '511', 'Chapeta', 'views/img/productos/default/anonymous.png', 20, 660, 924, 0, '2023-07-03 16:14:23'),
(55, 5, '512', 'Cilindro muestra de concreto', 'views/img/productos/default/anonymous.png', 20, 400, 560, 0, '2023-07-03 16:14:23'),
(56, 5, '513', 'Cizalla de Palanca', 'views/img/productos/default/anonymous.png', 20, 450, 630, 0, '2023-07-03 16:14:23'),
(57, 5, '514', 'Cizalla de Tijera', 'views/img/productos/default/anonymous.png', 20, 580, 812, 0, '2023-07-03 16:14:23'),
(58, 5, '515', 'Coche llanta neumatica', 'views/img/productos/default/anonymous.png', 20, 420, 588, 0, '2023-07-03 16:14:23'),
(59, 5, '516', 'Cono slump', 'views/img/productos/default/anonymous.png', 20, 140, 196, 0, '2023-07-03 16:14:23'),
(60, 5, '517', 'Cortadora de Baldosin', 'views/img/productos/default/anonymous.png', 20, 930, 1302, 0, '2023-07-03 16:14:23'),
(66, 6, '', 'Mouse', 'views/img/productos//135.png', 78, 44, 61.6, 0, '2023-07-03 17:01:25');

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `perfil`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(1, 'Usuario Administrador', 'admin', '$2a$07$asxx54ahjppf45sd87a5aunxs9bkpyGmGE/.vekdjFg83yRec789S', 'Administrador', 'views/img/usuarios/admin/311.jpg', 1, '2023-07-06 10:52:41', '2023-06-09 21:48:40'),
(2, 'Kevin Byte', 'byte', '$2a$07$asxx54ahjppf45sd87a5auu83LTMU//KBkuIE1Csn6JOMx3ZU1Olq', 'Administrador', 'views/img/usuarios/byte/377.png', 1, '2023-07-03 12:08:57', '2023-06-22 21:19:01'),
(3, 'Kevin', 'kevin', '$2a$07$asxx54ahjppf45sd87a5au1Ejn5ZP41RcjGQuvHY2B8m3nFLHSCyu', 'Especial', 'views/img/usuarios/kevin/844.jpg', 1, '0000-00-00 00:00:00', '2023-06-22 21:19:44'),
(4, 'Kevin Montero', 'Aldair', '$2a$07$asxx54ahjppf45sd87a5auBUuu0vUdG0C6dRkPgqQay69cXl5qFbS', 'Vendedor', 'views/img/usuarios/Aldair/500.jpg', 0, '0000-00-00 00:00:00', '2023-06-22 21:20:05'),
(5, 'Montero', 'montero', '$2a$07$asxx54ahjppf45sd87a5au6j9rls3GIllwEpIN/gjPTFffpj87FVe', 'Especial', 'views/img/usuarios/montero/467.jpg', 0, '0000-00-00 00:00:00', '2023-07-03 17:15:43');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
