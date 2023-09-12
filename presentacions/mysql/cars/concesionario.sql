-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-01-2021 a las 00:00:39
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `concesionario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

CREATE TABLE `ficha` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `code` char(5) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `header` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ficha`
--

INSERT INTO `ficha` (`id`, `name`, `code`, `purpose`, `title`, `header`, `description`, `url`) VALUES
(1, 'Duster', '001', 'El SUV diseñado para <span class=\\\"blue\\\">la aventura</span>', 'El Suv diseñado para la aventura', '<b>DISEÑO</b>', 'Duster potencia su carácter gracias a su diseño robusto. Atrévete a vivir nuevas aventuras en la ciudad y a explorar otras rutas.', 'img/c1.webp'),
(2, 'Sandero', '002', 'El SUV diseñado para <span class=\\\"blue\\\">la aventura</span>', 'La berlina con un estilo reforzado', '<b>CONFORT</b>', 'Diseño sólido, parrilla cromada, faros con la firma luminosa Dacia... Sandero te seducirá a primera vista.', 'img/c2.webp'),
(3, 'Logan', '003', 'El SUV diseñado para <span class=\\\"blue\\\">la aventura</span>', 'El Suv diseñado para la aventura', '<b>PRESTACIONES</b>', 'Duster potencia su carácter gracias a su diseño robusto. Atrévete a vivir nuevas aventuras en la ciudad y a explorar otras rutas.', 'img/c3.webp'),
(4, 'Dokker', '004', 'El SUV diseñado para <span class=\\\"blue\\\">la aventura</span>', 'La furgoneta Docker', '<b>VELOCIDAD</b>', 'Diseño sólido, parrilla cromada, faros con la firma luminosa Dacia... Sandero te seducirá a primera vista.\r\n    ', 'img/c4.webp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precios`
--

CREATE TABLE `precios` (
  `id` int(11) NOT NULL,
  `ficha_id` int(11) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `entrada` decimal(10,2) NOT NULL,
  `tae` decimal(4,2) NOT NULL,
  `meses` int(11) NOT NULL,
  `precio_final` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `precios`
--

INSERT INTO `precios` (`id`, `ficha_id`, `precio`, `entrada`, `tae`, `meses`, `precio_final`) VALUES
(1, 1, '10000', '4000.00', '8.20', 60, '14000.00'),
(2, 2, '14000', '6000.00', '10.00', 60, '17000.00'),
(5, 3, '10000', '4000.00', '8.20', 60, '14000.00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo_vehiculo_ndx` (`code`),
  ADD KEY `nombre_vehiculo_ndx` (`name`);

--
-- Indices de la tabla `precios`
--
ALTER TABLE `precios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ficha_id_ndx` (`ficha_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ficha`
--
ALTER TABLE `ficha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `precios`
--
ALTER TABLE `precios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `precios`
--
ALTER TABLE `precios`
  ADD CONSTRAINT `ficha_fk` FOREIGN KEY (`ficha_id`) REFERENCES `ficha` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
