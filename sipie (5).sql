-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2015 a las 01:58:49
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sipie`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

CREATE TABLE `ficha` (
  `id` int(11) NOT NULL,
  `usuario` int(11) DEFAULT NULL,
  `paciente` int(11) DEFAULT NULL,
  `fechaintervencion` date NOT NULL,
  `objetivo` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `actividad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `observacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ficha`
--

INSERT INTO `ficha` (`id`, `usuario`, `paciente`, `fechaintervencion`, `objetivo`, `actividad`, `observacion`) VALUES
(13, 5, 7, '2015-12-17', 'probar modulo', 'registrar ficha clinica', 'se verifica que correctamente se adjunta el paciente y el usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `rut` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombres` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fechanac` date NOT NULL,
  `lateralidad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numEstablecimientos` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `repitencias` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estiloAprendizajePredominante` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `perteneceSipie` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id`, `rut`, `nombres`, `apellidos`, `telefono`, `email`, `direccion`, `sexo`, `fechanac`, `lateralidad`, `numEstablecimientos`, `repitencias`, `estiloAprendizajePredominante`, `perteneceSipie`) VALUES
(7, '17267883-1', 'Felipe', 'Rosso', '(+56) 9 4214 1500', 'f@rallykarting.cl', '-', 'Masculino', '1989-08-04', 'Diestro', '5', '0', NULL, 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `rut` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `Nombres` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codigoMineduc` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `rut`, `password`, `email`, `is_active`, `Nombres`, `apellidos`, `telefono`, `direccion`, `codigoMineduc`) VALUES
(5, '17267883-1', '$2y$13$DVIjansDwOxwaNB9vWPPwOGNQtpVrPHsM9B39USTgaSaOEF2R7QmS', 'f@rallykarting.cl', 1, 'Felipe Andres', 'Rosso Del Barrio', '(+56) 9 4564 5274', 'ningún lugar', '0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4B7E08612265B05D` (`usuario`),
  ADD KEY `IDX_4B7E0861C6CBA95E` (`paciente`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_2265B05DAD145DBA` (`rut`),
  ADD UNIQUE KEY `UNIQ_2265B05DE7927C74` (`email`),
  ADD UNIQUE KEY `UNIQ_2265B05DF34DCD8A` (`codigoMineduc`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ficha`
--
ALTER TABLE `ficha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD CONSTRAINT `FK_4B7E08612265B05D` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `FK_4B7E0861C6CBA95E` FOREIGN KEY (`paciente`) REFERENCES `paciente` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
