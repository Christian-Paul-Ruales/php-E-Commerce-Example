-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2019 a las 09:08:19
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `travel_cheap`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cama`
--

CREATE TABLE `cama` (
  `id_cama` int(11) NOT NULL,
  `cuarto_id` int(11) NOT NULL,
  `detalle` varchar(250) DEFAULT NULL,
  `imagen` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cama`
--

INSERT INTO `cama` (`id_cama`, `cuarto_id`, `detalle`, `imagen`) VALUES
(1, 2, 'Dos plazas', NULL),
(2, 2, 'Una plaza', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa`
--

CREATE TABLE `casa` (
  `id_casa` int(11) NOT NULL,
  `casa` varchar(100) NOT NULL,
  `contry_city_id` int(11) NOT NULL,
  `valoracion` double NOT NULL,
  `detalle` varchar(100) DEFAULT NULL,
  `costo` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `casa`
--

INSERT INTO `casa` (`id_casa`, `casa`, `contry_city_id`, `valoracion`, `detalle`, `costo`) VALUES
(1, 'Casa', 1, 0, 'Departamento', 12),
(2, 'Casa', 1, 5, 'Departamento', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `country_city`
--

CREATE TABLE `country_city` (
  `id_country_city` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `country_city`
--

INSERT INTO `country_city` (`id_country_city`, `descripcion`) VALUES
(1, 'Ecuador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuarto`
--

CREATE TABLE `cuarto` (
  `id_cuarto` int(11) NOT NULL,
  `casa_id` int(11) NOT NULL,
  `detalle` varchar(250) NOT NULL,
  `imagen` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuarto`
--

INSERT INTO `cuarto` (`id_cuarto`, `casa_id`, `detalle`, `imagen`) VALUES
(1, 1, 'Amoblado', 'img/casa.jpg'),
(2, 2, 'Semi Amoblado', 'img/casa1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodo_pago`
--

CREATE TABLE `metodo_pago` (
  `id_metodo_pago` int(11) NOT NULL,
  `detalle` varchar(100) NOT NULL,
  `serial_correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `Nombres` varchar(100) NOT NULL,
  `Apellidos` varchar(150) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `correo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `Nombres`, `Apellidos`, `clave`, `correo`) VALUES
(2, 'Christian Paul', 'Ruales Onia', '12345', 'ch@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_metodo_pago`
--

CREATE TABLE `usuario_metodo_pago` (
  `id_usuario_metodo_pago` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `metodo_pago_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cama`
--
ALTER TABLE `cama`
  ADD PRIMARY KEY (`id_cama`),
  ADD KEY `cuarto_id` (`cuarto_id`);

--
-- Indices de la tabla `casa`
--
ALTER TABLE `casa`
  ADD PRIMARY KEY (`id_casa`),
  ADD KEY `contry_city_id` (`contry_city_id`);

--
-- Indices de la tabla `country_city`
--
ALTER TABLE `country_city`
  ADD PRIMARY KEY (`id_country_city`);

--
-- Indices de la tabla `cuarto`
--
ALTER TABLE `cuarto`
  ADD PRIMARY KEY (`id_cuarto`),
  ADD KEY `casa_id` (`casa_id`);

--
-- Indices de la tabla `metodo_pago`
--
ALTER TABLE `metodo_pago`
  ADD PRIMARY KEY (`id_metodo_pago`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `usuario_metodo_pago`
--
ALTER TABLE `usuario_metodo_pago`
  ADD PRIMARY KEY (`id_usuario_metodo_pago`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `metodo_pago_id` (`metodo_pago_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cama`
--
ALTER TABLE `cama`
  MODIFY `id_cama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `casa`
--
ALTER TABLE `casa`
  MODIFY `id_casa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `country_city`
--
ALTER TABLE `country_city`
  MODIFY `id_country_city` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cuarto`
--
ALTER TABLE `cuarto`
  MODIFY `id_cuarto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `metodo_pago`
--
ALTER TABLE `metodo_pago`
  MODIFY `id_metodo_pago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario_metodo_pago`
--
ALTER TABLE `usuario_metodo_pago`
  MODIFY `id_usuario_metodo_pago` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cama`
--
ALTER TABLE `cama`
  ADD CONSTRAINT `cama_ibfk_1` FOREIGN KEY (`cuarto_id`) REFERENCES `cuarto` (`id_cuarto`);

--
-- Filtros para la tabla `casa`
--
ALTER TABLE `casa`
  ADD CONSTRAINT `casa_ibfk_1` FOREIGN KEY (`contry_city_id`) REFERENCES `country_city` (`id_country_city`);

--
-- Filtros para la tabla `cuarto`
--
ALTER TABLE `cuarto`
  ADD CONSTRAINT `cuarto_ibfk_1` FOREIGN KEY (`casa_id`) REFERENCES `casa` (`id_casa`);

--
-- Filtros para la tabla `usuario_metodo_pago`
--
ALTER TABLE `usuario_metodo_pago`
  ADD CONSTRAINT `usuario_metodo_pago_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `usuario_metodo_pago_ibfk_2` FOREIGN KEY (`metodo_pago_id`) REFERENCES `metodo_pago` (`id_metodo_pago`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
