-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-05-2020 a las 21:03:29
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `diaryapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diary`
--

CREATE TABLE `diary` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `number_id` int(20) NOT NULL,
  `date_birth` date NOT NULL,
  `city_residence` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `number_mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `diary`
--

INSERT INTO `diary` (`id`, `name`, `lastname`, `number_id`, `date_birth`, `city_residence`, `district`, `number_mobile`) VALUES
(1, 'Yhon', 'Ramirez', 1128385118, '1987-02-11', 'Medellin', 'Pedregal', 1),
(5, 'Lucia', 'Perez', 234, '2020-04-07', 'Medellin', 'Girardota', 2147483647),
(19, 'junior', 'gañan', 3, '2020-04-27', 'Enviagado', 'Mesa', 34567),
(23, 'Ana', 'Herrera', 123123, '2020-04-08', 'Itagui', 'Calatraba', 1231),
(24, 'jesus', 'perez', 234, '1987-12-04', 'bogota', 'asd', 23423423),
(25, 'Pablo', 'Muñoz', 43, '2020-02-02', 'Copacabana', 'Tejelo', 234),
(26, 'Fabian', 'Quintero', 12345, '2020-05-09', 'Medellin', '!2 de octubre', 23456456);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `diary`
--
ALTER TABLE `diary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `diary`
--
ALTER TABLE `diary`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
