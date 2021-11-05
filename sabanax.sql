-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2021 a las 16:54:56
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sabanax`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `identificacion` bigint(16) NOT NULL,
  `tipodoc` text NOT NULL,
  `nombres` text NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefono` bigint(13) NOT NULL,
  `clave` varchar(200) NOT NULL,
  `rol` text NOT NULL,
  `estado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`identificacion`, `tipodoc`, `nombres`, `apellidos`, `email`, `telefono`, `clave`, `rol`, `estado`) VALUES
(1069054917, 'C.C', 'Kevin', 'Suarez', 'kevin@gmail.com', 3205863287, '81dc9bdb52d04dc20036dbd8313ed055', 'Cliente', 'Activo'),
(1073535016, 'C.C', 'Leidy Dayanna ', 'Navarro Cortes', 'leidynavarro14@hotmail.com', 3014572356, '0cbd2a3caf0ea48b9a065418f9a4e60b', 'Cliente', 'Activo'),
(1077092435, 'C.C', 'Duvan Felipe', 'Avila Martinez', 'dfavila53@misena.edu.co', 3045384271, '81dc9bdb52d04dc20036dbd8313ed055', 'Admin', 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`identificacion`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
