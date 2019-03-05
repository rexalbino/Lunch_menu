-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-03-2019 a las 23:00:10
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `menus_ver2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredientes`
--

CREATE TABLE `ingredientes` (
  `id_ingredientes` int(11) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_unidad` int(11) NOT NULL,
  `nombre_ingrediente` varchar(25) NOT NULL,
  `costo_presentacion` double NOT NULL,
  `costo_unitario` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ingredientes`
--

INSERT INTO `ingredientes` (`id_ingredientes`, `codigo`, `cantidad`, `id_unidad`, `nombre_ingrediente`, `costo_presentacion`, `costo_unitario`) VALUES
(1, 'test0010', 50, 1, 'test2', 501, 101),
(2, 'test002', 50, 1, 'test2', 10, 0.2),
(3, 'test002', 10, 1, 'test2', 10, 1),
(5, 'alguno', 5, 1, 'test 0004', 50, 10),
(6, 'otro', 6, 3, 'text005', 30, 5),
(8, 'VEG006', 10, 1, 'Papas', 150, 15),
(9, 'Car004', 10, 5, 'Pollo', 50, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id_menu` int(11) NOT NULL,
  `nombre_menu` varchar(60) NOT NULL,
  `id_entrada` int(11) NOT NULL,
  `id_plato_fuerte` int(11) NOT NULL,
  `id_guarnicion_1` int(11) NOT NULL,
  `id_guarnicion_2` int(11) DEFAULT NULL,
  `nota` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id_menu`, `nombre_menu`, `id_entrada`, `id_plato_fuerte`, `id_guarnicion_1`, `id_guarnicion_2`, `nota`) VALUES
(1, 'Menu prueba', 3, 22, 14, 16, 'nada'),
(5, 'test 2', 10, 25, 3, NULL, NULL),
(8, 'Menu dia dos', 10, 22, 4, 3, 'N/A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `merma`
--

CREATE TABLE `merma` (
  `id_merma` int(11) NOT NULL,
  `des_merma` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `merma`
--

INSERT INTO `merma` (`id_merma`, `des_merma`) VALUES
(1, 'Porciento'),
(2, 'Peso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platillo`
--

CREATE TABLE `platillo` (
  `id_platillo` int(11) NOT NULL,
  `nombre_platillo` varchar(50) NOT NULL,
  `porciones` int(11) NOT NULL,
  `tiempo_preparacion` int(11) NOT NULL,
  `costo_neto` double NOT NULL,
  `costo_bruto` double NOT NULL,
  `paxpla_pesos` double NOT NULL,
  `paxpla_porciento` double NOT NULL,
  `instr` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `platillo`
--

INSERT INTO `platillo` (`id_platillo`, `nombre_platillo`, `porciones`, `tiempo_preparacion`, `costo_neto`, `costo_bruto`, `paxpla_pesos`, `paxpla_porciento`, `instr`) VALUES
(3, 'test', 1, 280, 7.3, 0, 0, 0, 'Echele de todo'),
(4, 'Alguno', 10, 280, 20, 0, 0, 0, 'Solo huevos'),
(10, 'Alguno 5', 10, 10, 10, 0, 0, 0, 'Hechar algunos ingredientes'),
(14, 'test chido', 1, 10, 10, 0, 0, 0, 'Mas de todo con un buen chales'),
(16, 'testing123', 123, 2, 10, 0, 0, 0, '123'),
(21, 'testing12345', 500, 10, 5, 0, 0, 0, 'Chiles'),
(22, 'Pollo con pan y agua', 50, 5, 30, 0, 0, 0, 'Test\r\nalgo\r\nnuevo'),
(25, 'Pollo con papas', 20, 150, 30.5375, 0, 0, 0, 'Cortar papas\r\nCortar pollo\r\nPreparar'),
(26, 'No borrar', 0, 0, 0, 0, 0, 0, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platillo_ingrediente`
--

CREATE TABLE `platillo_ingrediente` (
  `id_relacion` int(11) NOT NULL,
  `id_ingrediente` int(11) NOT NULL,
  `id_platillo` int(11) NOT NULL,
  `peso_bruto` double NOT NULL,
  `peso_neto` double DEFAULT NULL,
  `merma` double DEFAULT NULL,
  `id_tipo_merma` int(11) NOT NULL,
  `coste_unitario` double DEFAULT NULL,
  `coste_neto` double DEFAULT NULL,
  `pax_pesos` double DEFAULT NULL,
  `pax_porciento` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `platillo_ingrediente`
--

INSERT INTO `platillo_ingrediente` (`id_relacion`, `id_ingrediente`, `id_platillo`, `peso_bruto`, `peso_neto`, `merma`, `id_tipo_merma`, `coste_unitario`, `coste_neto`, `pax_pesos`, `pax_porciento`) VALUES
(1, 5, 10, 101, 101, 101, 2, 101, 101, 101, 0),
(2, 6, 14, 50, 48, 5, 1, 1, 2, 2, 0),
(3, 6, 22, 10, 5, 5, 2, 5, 30, 0.6, 0),
(4, 5, 22, 80, 79, 2, 1, 10, 22, 0, 0),
(5, 1, 22, 10, 10, 1, 1, 10, 11, 0, 0),
(7, 2, 22, 90, 72, 20, 1, 0, 4, 0, 0),
(14, 5, 25, 80, 79.6, 0.5, 1, 10, 14.000000000000057, 0.7000000000000028, 0),
(15, 8, 25, 0.5, 0.4975, 0.5, 1, 15, 15.0375, 0.751875, 0),
(16, 9, 3, 5, 4.9, 2, 1, 5, 5.499999999999998, 5.499999999999998, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad`
--

CREATE TABLE `unidad` (
  `id_unidad` int(11) NOT NULL,
  `des_unidad` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `unidad`
--

INSERT INTO `unidad` (`id_unidad`, `des_unidad`) VALUES
(1, 'Kg'),
(3, 'L'),
(5, 'Pieza');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`id_ingredientes`),
  ADD KEY `id_unidad` (`id_unidad`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `id_entrada` (`id_entrada`),
  ADD KEY `id_plato_fuerte` (`id_plato_fuerte`),
  ADD KEY `id_guarnicion_1` (`id_guarnicion_1`),
  ADD KEY `id_guarnicion_2` (`id_guarnicion_2`);

--
-- Indices de la tabla `merma`
--
ALTER TABLE `merma`
  ADD PRIMARY KEY (`id_merma`);

--
-- Indices de la tabla `platillo`
--
ALTER TABLE `platillo`
  ADD PRIMARY KEY (`id_platillo`);

--
-- Indices de la tabla `platillo_ingrediente`
--
ALTER TABLE `platillo_ingrediente`
  ADD PRIMARY KEY (`id_relacion`),
  ADD KEY `id_ingrediente` (`id_ingrediente`),
  ADD KEY `id_platillo` (`id_platillo`),
  ADD KEY `id_tipo_merma` (`id_tipo_merma`),
  ADD KEY `id_tipo_merma_2` (`id_tipo_merma`);

--
-- Indices de la tabla `unidad`
--
ALTER TABLE `unidad`
  ADD PRIMARY KEY (`id_unidad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  MODIFY `id_ingredientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `merma`
--
ALTER TABLE `merma`
  MODIFY `id_merma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `platillo`
--
ALTER TABLE `platillo`
  MODIFY `id_platillo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `platillo_ingrediente`
--
ALTER TABLE `platillo_ingrediente`
  MODIFY `id_relacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `unidad`
--
ALTER TABLE `unidad`
  MODIFY `id_unidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD CONSTRAINT `ingredientes_ibfk_1` FOREIGN KEY (`id_unidad`) REFERENCES `unidad` (`id_unidad`);

--
-- Filtros para la tabla `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_ibfk_1` FOREIGN KEY (`id_entrada`) REFERENCES `platillo` (`id_platillo`),
  ADD CONSTRAINT `menus_ibfk_2` FOREIGN KEY (`id_plato_fuerte`) REFERENCES `platillo` (`id_platillo`),
  ADD CONSTRAINT `menus_ibfk_3` FOREIGN KEY (`id_guarnicion_1`) REFERENCES `platillo` (`id_platillo`),
  ADD CONSTRAINT `menus_ibfk_4` FOREIGN KEY (`id_guarnicion_2`) REFERENCES `platillo` (`id_platillo`);

--
-- Filtros para la tabla `platillo_ingrediente`
--
ALTER TABLE `platillo_ingrediente`
  ADD CONSTRAINT `platillo_ingrediente_ibfk_1` FOREIGN KEY (`id_ingrediente`) REFERENCES `ingredientes` (`id_ingredientes`),
  ADD CONSTRAINT `platillo_ingrediente_ibfk_2` FOREIGN KEY (`id_platillo`) REFERENCES `platillo` (`id_platillo`),
  ADD CONSTRAINT `platillo_ingrediente_ibfk_3` FOREIGN KEY (`id_tipo_merma`) REFERENCES `merma` (`id_merma`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
