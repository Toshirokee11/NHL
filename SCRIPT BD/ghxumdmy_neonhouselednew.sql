-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2021 a las 04:50:50
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ghxumdmy_neonhouselednew`
--

-- --------------------------------------------------------

create database ghxumdmy_neonhouselednew;
use ghxumdmy_neonhouselednew;

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `idcliente` int(2) NOT NULL,
  `image` varchar(150) NOT NULL,
  `imgstatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id`, `descripcion`, `idcliente`, `image`, `imgstatus`) VALUES
(275, 'don vito', 39, '782021081108propuesta 1-interior_4.jpg', 1),
(276, 'don vito', 39, '552021081108propuesta 1-interior_3.jpg', 1),
(277, 'don vito', 39, '172021081108propuesta 1-interior_2.jpg', 1),
(278, 'don vito', 39, '272021081108propuesta 1-interior_1.jpg', 1),
(279, 'don vito', 39, '492021081108propuesta 1-interior_6.jpg', 1),
(280, 'don vito', 39, '602021081108fachada propuesta2-image1.jpg', 1),
(281, 'don vito', 39, '352021081108fachada propuesta2-image2.jpg', 1),
(282, 'don vito', 39, '492021081108fachada propuesta2-image3.jpg', 1),
(283, 'don vito', 39, '872021081108fachada propuesta1-image1.jpg', 1),
(284, 'don vito', 39, '682021081108fachada propuesta1-image2.png', 1),
(285, 'don vito', 39, '792021081108propuesta2-interioresimagen1.png', 1),
(286, 'don vito', 39, '32021081108propuesta2-interioresimagen2.png', 1),
(287, 'don vito', 39, '692021081108propuesta2-interioresimagen3.png', 1),
(288, 'don vito', 39, '112021081108propuesta2-interioresimagen4.png', 1),
(289, 'don vito', 39, '622021081108propuesta2-interioresimagen5.png', 1),
(290, 'don vito', 39, '52021081108propuesta2-interioresimagen6.png', 1),
(291, 'don vito', 39, '42021081108propuesta2-interioresimagen7.png', 1),
(292, 'don vito', 39, '272021081108baños1.png', 1),
(293, 'don vito', 39, '322021081108baños2.png', 1),
(294, 'don vito', 39, '512021081108propuesta 1-interior_5.jpg', 1),
(295, 'don vito', 39, '242021081108propuesta 1-interior_4.jpg', 1),
(296, 'don vito', 39, '772021081108propuesta 1-interior_3.jpg', 1),
(297, 'don vito', 39, '52021081108propuesta 1-interior_2.jpg', 1),
(298, 'don vito', 39, '432021081108propuesta 1-interior_1.jpg', 1),
(299, 'don vito', 39, '522021081108propuesta 1-interior_6.jpg', 1),
(300, 'don vito', 39, '742021081108fachada propuesta2-image1.jpg', 1),
(301, 'don vito', 39, '532021081108fachada propuesta2-image2.jpg', 1),
(302, 'don vito', 39, '352021081108fachada propuesta2-image3.jpg', 1),
(303, 'don vito', 39, '42021081108fachada propuesta1-image1.jpg', 1),
(304, 'don vito', 39, '692021081108fachada propuesta1-image2.png', 1),
(305, 'don vito', 39, '962021081108propuesta2-interioresimagen1.png', 1),
(306, 'don vito', 39, '272021081108propuesta2-interioresimagen2.png', 1),
(307, 'don vito', 39, '172021081108propuesta2-interioresimagen3.png', 1),
(308, 'don vito', 39, '352021081108propuesta2-interioresimagen4.png', 1),
(309, 'don vito', 39, '262021081108propuesta2-interioresimagen5.png', 1),
(310, 'don vito', 39, '22021081108propuesta2-interioresimagen6.png', 1),
(311, 'don vito', 39, '762021081108propuesta2-interioresimagen7.png', 1),
(312, 'don vito', 39, '12021081108baños1.png', 1),
(313, 'don vito', 39, '32021081108baños2.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscriptor`
--

CREATE TABLE `suscriptor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` int(2) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `nombres` varchar(60) NOT NULL,
  `telefono` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_level`, `status`, `nombres`, `telefono`) VALUES
(1, 'admin', '89e495e7941cf9e40e6980d14a16bf023ccd4c91', 1, 1, 'Juan Carlos', 936910425),
(2, 'gestion', 'dca3c169ada6de4f647fa14074b83211b98cb516', 3, 1, 'Valeria', 2147483647),
(33, 'cliente', 'd94019fd760a71edf11844bb5c601a4de95aacaf', 2, 0, 'cevicheria pacifico', 998765410),
(34, 'piso II', '9d86b21dda8c5b89f3b4b4b853d17b7bdbc733f9', 2, 0, 'VERONICA', 936910425),
(35, 'cevicheria picis', 'b7eb1410c393fb64e266ae958b3fb7b89c9fbf62', 2, 1, 'picis', 943057282),
(36, 'pacifico', '1f37f42978e50f1acb5fbdad2243da5cbc5f6494', 2, 1, 'cevicheria pacifico', 936910425),
(37, 'jugueria', '90337211f01c272cc1e6ac84a7d5a46c43df2ba3', 2, 1, 'Francis', 943919076),
(38, 'jugueria', 'b28fd78c1e88a840cc610098b56aa7368afe168f', 2, 1, 'Francis', 943919076),
(39, 'donvito', '2d42c98cd4d5e92b76e176b3aa78fc068a217cf2', 2, 0, 'sra ruby', 884078320),
(40, 'donvito', '2d42c98cd4d5e92b76e176b3aa78fc068a217cf2', 2, 1, 'sra ruby', 884078320);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_groups`
--

CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(30) NOT NULL,
  `group_level` int(2) NOT NULL,
  `group_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user_groups`
--

INSERT INTO `user_groups` (`id`, `group_name`, `group_level`, `group_status`) VALUES
(1, 'admin', 1, 1),
(2, 'cliente', 2, 1),
(3, 'gestion', 3, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcliente` (`idcliente`);

--
-- Indices de la tabla `suscriptor`
--
ALTER TABLE `suscriptor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_level` (`user_level`) USING BTREE;

--
-- Indices de la tabla `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `group_level` (`group_level`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=314;

--
-- AUTO_INCREMENT de la tabla `suscriptor`
--
ALTER TABLE `suscriptor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD CONSTRAINT `galeria_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_level`) REFERENCES `user_groups` (`group_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
