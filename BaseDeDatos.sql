-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2022 a las 00:41:30
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_alfa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id_equipo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `dimension` int(50) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  `password_team` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id_equipo`, `nombre`, `dimension`, `ubicacion`, `Tipo`, `password_team`) VALUES
(1, 'equipo1', 9, 'aqui', 'nose', NULL),
(2, 'equipo2', 9, 'aqui', 'nose', NULL),
(3, 'ejemplo', 1, 'alli', 'a', 'w'),
(4, 'aa', 11, 'aa', 'aa', ''),
(5, 'a', 1, 'a', 'a', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torneos`
--

CREATE TABLE `torneos` (
  `id_torneo` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_juego` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `ubicacion` varchar(50) DEFAULT NULL,
  `dimension` int(11) DEFAULT NULL,
  `codigo_torneo` int(11) DEFAULT NULL,
  `finalizado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `torneos`
--

INSERT INTO `torneos` (`id_torneo`, `id_usuario`, `id_juego`, `nombre`, `ubicacion`, `dimension`, `codigo_torneo`, `finalizado`) VALUES
(1, 4, 2, 'ejemplo', 'alli', 1, NULL, 0),
(2, 4, 1, 'asdadad', 'adsdad', 112, NULL, 0),
(3, 5, 3, 'a', 'a', 1, NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unirse_torneos`
--

CREATE TABLE `unirse_torneos` (
  `id_torneo` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `unirse_torneos`
--

INSERT INTO `unirse_torneos` (`id_torneo`, `id_usuario`) VALUES
(1, 4),
(2, 4),
(3, 5),
(1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(15) NOT NULL,
  `apellido` varchar(15) NOT NULL,
  `nombre_usuario` varchar(20) NOT NULL,
  `clave` varchar(32) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `telefono` int(11) DEFAULT NULL,
  `id_team` int(11) DEFAULT NULL,
  `nombre_equipo` varchar(20) DEFAULT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `apellido`, `nombre_usuario`, `clave`, `correo`, `id_usuario`, `telefono`, `id_team`, `nombre_equipo`, `nivel`) VALUES
('noe', 'moros', 'noe24', 'noe', 'noemoros24@gmail.com', 1, NULL, NULL, 'equipo2', 0),
('dani', 'lacambra', 'danix', 'dani', 'dani@gmail.com', 3, NULL, NULL, 'equipo1', 1),
('Diego', 'Blas', 'Dideb', '1234', 'diegoblas@gmail.com', 4, 666666666, NULL, 'aa', 1),
('a', 'a', 'a', 'a', 'a@a.com', 5, 1, NULL, 'a', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_videojuego`
--

CREATE TABLE `usuario_videojuego` (
  `id_usuario` int(11) NOT NULL,
  `id_videojuego` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario_videojuego`
--

INSERT INTO `usuario_videojuego` (`id_usuario`, `id_videojuego`) VALUES
(1, 1),
(1, 2),
(3, 1),
(4, 2),
(4, 3),
(5, 3),
(5, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuego`
--

CREATE TABLE `videojuego` (
  `id_videojuego` int(11) NOT NULL,
  `nombre_videojuego` varchar(50) NOT NULL,
  `genero_videojuego` varchar(50) NOT NULL,
  `pegi` int(11) NOT NULL,
  `empresa_desarrolladora` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `videojuego`
--

INSERT INTO `videojuego` (`id_videojuego`, `nombre_videojuego`, `genero_videojuego`, `pegi`, `empresa_desarrolladora`) VALUES
(1, 'juego1', 'genero', 18, 'aaaaa'),
(2, 'juego2', 'genero', 18, 'aaaaa'),
(3, 'qwewqe', 'qweqwe', 1, 'qweqwe');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `torneos`
--
ALTER TABLE `torneos`
  ADD PRIMARY KEY (`id_torneo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `videojuego`
--
ALTER TABLE `videojuego`
  ADD PRIMARY KEY (`id_videojuego`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `torneos`
--
ALTER TABLE `torneos`
  MODIFY `id_torneo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `videojuego`
--
ALTER TABLE `videojuego`
  MODIFY `id_videojuego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
