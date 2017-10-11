-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 11-10-2017 a las 20:23:48
-- Versión del servidor: 5.6.35
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `redes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(128) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`idUsuario`, `usuario`, `password`) VALUES
(1, 'paulo', 'pack'),
(2, 'javier', 'ea3161f746c9a8426ea6a4e3064d6192785c243883bec6b0a3e485b6067d2c7e43b3201be0b07931f1f182a522a7dac124e0e1f58714c517dafcdfa0471211bf'),
(3, 'pauloc', '560ffbafbba92962e4d3309c2e35dbffef4d93471e4390ec93f2ffb82f09fff600c8cc158d297c74db4bf484793c8d4640891fa5b4494dd1277ba959c34c73af');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;