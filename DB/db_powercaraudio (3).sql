-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2021 a las 21:57:34
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_powercaraudio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `email` varchar(64) NOT NULL,
  `direccion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `telefono`, `email`, `direccion`) VALUES
(1, 'Luis Vargas', '+01-90-89-56-00', 'info@gmail.com', '678, Lamen Trees Lane,Boston Bay<br>\r\n                    United States - 2018976');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `id_factura` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `monto` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `fecha` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `accion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `logs`
--

INSERT INTO `logs` (`id`, `fecha`, `accion`) VALUES
(0, '2021-04-26', 'Se elimino la cedula numero:1143654123, Jesica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `nombre_comercial` varchar(255) NOT NULL,
  `propietario` varchar(255) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `email` varchar(64) NOT NULL,
  `web` varchar(100) NOT NULL,
  `tax` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id`, `nombre_comercial`, `propietario`, `telefono`, `direccion`, `email`, `web`, `tax`) VALUES
(1, 'Power Car Audio ', 'Power Car Audio ', ' +602 556 42 99 ', 'CL 8 # 30A -09\r\n <br />\r\nCali - Valle del Cauca.<br />', 'info@powercaraudio.com', 'www.powercaraudio.com.co ', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcliente`
--

CREATE TABLE `tbcliente` (
  `Cli_ID_Cliente` int(15) NOT NULL,
  `Cli_Cedula` int(14) NOT NULL,
  `Cli_P_Nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Cli_S_Nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Cli_P_Apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Cli_S_Apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Cli_Direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Cli_Telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Cli_Correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbcliente`
--

INSERT INTO `tbcliente` (`Cli_ID_Cliente`, `Cli_Cedula`, `Cli_P_Nombre`, `Cli_S_Nombre`, `Cli_P_Apellido`, `Cli_S_Apellido`, `Cli_Direccion`, `Cli_Telefono`, `Cli_Correo`) VALUES
(2, 1144785412, 'Rafael', 'leonard ', 'Acosta', 'Lancheros', 'cl 8 # 15 -87', ' 322 45145', 'racosta@gmail.com'),
(3, 1140789456, 'Maria', 'Daniela', 'De la torre', 'Realpe', 'Av 8norte # 4-32', '310 485 12', 'dani@gmail.com'),
(4, 94357159, 'Jhan', 'Alexander', 'Cardenas ', 'Vargas', 'Cl 3 # 5b -35', '3124857896', 'alex@sena.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbgarantia`
--

CREATE TABLE `tbgarantia` (
  `Garan_Id_garantia` int(15) NOT NULL,
  `Garan_Nom.prod.garant.` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Garan_Serie` int(15) NOT NULL,
  `Garan_Fecha_compra` date NOT NULL,
  `Garan_Costo` int(10) NOT NULL,
  `Garan_Nom.quien_realizo_garantia` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_rel_producto_venta`
--

CREATE TABLE `tbl_rel_producto_venta` (
  `ID` int(11) NOT NULL,
  `vent_Id_venta` int(11) NOT NULL,
  `prod_ID_producto` int(11) NOT NULL,
  `prod_precio_producto` bigint(20) NOT NULL,
  `prod_cantidad_producto` int(11) NOT NULL,
  `precio_venta` bigint(20) NOT NULL,
  `descuento` bigint(20) NOT NULL,
  `utilidad` bigint(20) NOT NULL,
  `id_serie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tborden_reparacion`
--

CREATE TABLE `tborden_reparacion` (
  `id` int(11) NOT NULL,
  `num_orden` varchar(100) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `cliente` varchar(300) DEFAULT NULL,
  `dni` varchar(100) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `sucursal` varchar(100) DEFAULT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `num_serie` varchar(100) DEFAULT NULL,
  `taller` varchar(100) DEFAULT NULL,
  `descripcion_problema` varchar(300) DEFAULT NULL,
  `tipo_reparacion` tinyint(1) DEFAULT 0,
  `check_1` tinyint(1) DEFAULT 0,
  `check_2` tinyint(1) DEFAULT 0,
  `check_3` tinyint(1) DEFAULT 0,
  `check_4` tinyint(1) DEFAULT 0,
  `check_5` tinyint(1) DEFAULT 0,
  `check_6` tinyint(1) DEFAULT 0,
  `check_7` tinyint(1) DEFAULT 0,
  `check_8` tinyint(1) DEFAULT 0,
  `part_product_1` varchar(200) DEFAULT NULL,
  `part_product_2` varchar(200) DEFAULT NULL,
  `part_product_3` varchar(200) DEFAULT NULL,
  `part_product_4` varchar(200) DEFAULT NULL,
  `part_product_5` varchar(200) DEFAULT NULL,
  `part_product_6` varchar(200) DEFAULT NULL,
  `part_product_7` varchar(200) DEFAULT NULL,
  `part_product_8` varchar(200) DEFAULT NULL,
  `componentes_faltantes` varchar(300) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `otras_observaciones` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbperfil`
--

CREATE TABLE `tbperfil` (
  `id` int(11) NOT NULL,
  `nombre_comercial` varchar(255) NOT NULL,
  `propietario` varchar(255) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `email` varchar(64) NOT NULL,
  `web` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbperfil`
--

INSERT INTO `tbperfil` (`id`, `nombre_comercial`, `propietario`, `telefono`, `direccion`, `email`, `web`) VALUES
(1, 'Power Car Audio', 'Diana Sevillano', '+602 556 42 99', 'CL 8 # 30A -09\r\n <br />\r\nCali - Valle del Cauca.<br />', 'info@powercaraudio.com', 'www.powercaraudio.com.co');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbproductos`
--

CREATE TABLE `tbproductos` (
  `Prod_ID_producto` int(15) NOT NULL,
  `Prod_Nombre_producto` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Prod_Precio_producto` int(11) NOT NULL,
  `Prod_Cantidad_producto` int(5) NOT NULL,
  `Prod_Nombre_proveedor` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Prod_Serie_producto` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Prod_Fecha_de_creacion` datetime NOT NULL,
  `Prod_Fecha_de_Modificacion` datetime NOT NULL,
  `Prod_Estado_Producto` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbproductos`
--

INSERT INTO `tbproductos` (`Prod_ID_producto`, `Prod_Nombre_producto`, `Prod_Precio_producto`, `Prod_Cantidad_producto`, `Prod_Nombre_proveedor`, `Prod_Serie_producto`, `Prod_Fecha_de_creacion`, `Prod_Fecha_de_Modificacion`, `Prod_Estado_Producto`) VALUES
(123, 'abc', 5000, 4, 'xyz', 'add151sadsc', '2021-09-01 18:00:00', '2021-11-05 00:00:00', 'Disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbserie`
--

CREATE TABLE `tbserie` (
  `ID` int(11) NOT NULL,
  `prod_ID_producto` int(11) NOT NULL,
  `serie` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `garantia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbservicios`
--

CREATE TABLE `tbservicios` (
  `Ser_Id_servicio` int(15) NOT NULL,
  `Ser_Nombre_servicio` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `Ser_Cantidad` int(3) NOT NULL,
  `Ser_Nom_ quien_realizo_servicio` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Ser_Precio_servicio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbusuarios`
--

CREATE TABLE `tbusuarios` (
  `id` int(11) NOT NULL,
  `p_nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `s_nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `p_apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `s_apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `documento` bigint(20) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `email` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbusuarios`
--

INSERT INTO `tbusuarios` (`id`, `p_nombre`, `s_nombre`, `p_apellido`, `s_apellido`, `documento`, `telefono`, `email`, `contrasena`, `tipo_usuario`) VALUES
(1, 'jenifer', 'andrea', 'diaz ', 'valencia', 114578456, 3145697845, 'jen@gmail.com', '0000', 1),
(2, 'Juan', 'David', 'Rueda', 'Rivera', 1145789654, 3018524565, 'jdrr@gmail.com', 'c6f057b86584942e415435ffb1fa93d4', 2),
(17, 'prueba1', 'prueba2', 'pr', 'pr', 143, 345, '471@gmail.com', '8d5e957f297893487bd98fa830fa6413', 2),
(18, 'prueba1', 'prueba1', 'prueba1', 'prueba1', 1145789456, 3174557845, 'prueba1@gmail.com', 'c893bad68927b457dbed39460e6afd62', 1),
(19, 'prueba2', 'prueba2', 'prueba2', 'prueba2', 11304567812, 3204567812, 'prueba2@gmail.com', 'c893bad68927b457dbed39460e6afd62', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbventas`
--

CREATE TABLE `tbventas` (
  `Vent_ID_venta` int(15) NOT NULL,
  `Vent_Fecha` date NOT NULL,
  `Vent_Utilidad` int(10) NOT NULL,
  `Vent_Precio_compra` int(10) NOT NULL,
  `Vent_Descuento` int(10) NOT NULL,
  `Vent_Precio_venta` int(10) NOT NULL,
  `TbCliente_ID_cliente` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbventasser`
--

CREATE TABLE `tbventasser` (
  `id_venta` int(11) NOT NULL,
  `precio_total` bigint(20) NOT NULL,
  `fecha_serv` date NOT NULL,
  `nom_tecnico` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_rel_ventas_servicios`
--

CREATE TABLE `tb_rel_ventas_servicios` (
  `Id` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `id_venta_ser` int(11) NOT NULL,
  `precio_servicio` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmp`
--

CREATE TABLE `tmp` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`Cli_ID_Cliente`),
  ADD UNIQUE KEY `Cli_Cedula` (`Cli_Cedula`);

--
-- Indices de la tabla `tbgarantia`
--
ALTER TABLE `tbgarantia`
  ADD PRIMARY KEY (`Garan_Id_garantia`),
  ADD KEY `Garan_Serie` (`Garan_Serie`);

--
-- Indices de la tabla `tbl_rel_producto_venta`
--
ALTER TABLE `tbl_rel_producto_venta`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `vent_Id_venta` (`vent_Id_venta`),
  ADD KEY `prod_ID_producto` (`prod_ID_producto`),
  ADD KEY `id_serie` (`id_serie`);

--
-- Indices de la tabla `tborden_reparacion`
--
ALTER TABLE `tborden_reparacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbperfil`
--
ALTER TABLE `tbperfil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbproductos`
--
ALTER TABLE `tbproductos`
  ADD PRIMARY KEY (`Prod_ID_producto`),
  ADD UNIQUE KEY `Prod_Serie_producto` (`Prod_Serie_producto`),
  ADD UNIQUE KEY `Prod_Serie_producto_2` (`Prod_Serie_producto`);

--
-- Indices de la tabla `tbserie`
--
ALTER TABLE `tbserie`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `prod_ID_producto` (`prod_ID_producto`);

--
-- Indices de la tabla `tbservicios`
--
ALTER TABLE `tbservicios`
  ADD PRIMARY KEY (`Ser_Id_servicio`);

--
-- Indices de la tabla `tbusuarios`
--
ALTER TABLE `tbusuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `documento` (`documento`);

--
-- Indices de la tabla `tbventas`
--
ALTER TABLE `tbventas`
  ADD PRIMARY KEY (`Vent_ID_venta`),
  ADD KEY `TbCliente_ID_cliente` (`TbCliente_ID_cliente`);

--
-- Indices de la tabla `tbventasser`
--
ALTER TABLE `tbventasser`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `tb_rel_ventas_servicios`
--
ALTER TABLE `tb_rel_ventas_servicios`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_servicio` (`id_servicio`),
  ADD KEY `id_venta_ser` (`id_venta_ser`);

--
-- Indices de la tabla `tmp`
--
ALTER TABLE `tmp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `Cli_ID_Cliente` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tbl_rel_producto_venta`
--
ALTER TABLE `tbl_rel_producto_venta`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tborden_reparacion`
--
ALTER TABLE `tborden_reparacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbperfil`
--
ALTER TABLE `tbperfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbserie`
--
ALTER TABLE `tbserie`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbusuarios`
--
ALTER TABLE `tbusuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `tbventasser`
--
ALTER TABLE `tbventasser`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_rel_ventas_servicios`
--
ALTER TABLE `tb_rel_ventas_servicios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tmp`
--
ALTER TABLE `tmp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbgarantia`
--
ALTER TABLE `tbgarantia`
  ADD CONSTRAINT `tbgarantia_ibfk_1` FOREIGN KEY (`Garan_Serie`) REFERENCES `tbserie` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_rel_producto_venta`
--
ALTER TABLE `tbl_rel_producto_venta`
  ADD CONSTRAINT `tbl_rel_producto_venta_ibfk_1` FOREIGN KEY (`prod_ID_producto`) REFERENCES `tbproductos` (`Prod_ID_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_rel_producto_venta_ibfk_2` FOREIGN KEY (`vent_Id_venta`) REFERENCES `tbventas` (`Vent_ID_venta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_rel_producto_venta_ibfk_3` FOREIGN KEY (`id_serie`) REFERENCES `tbserie` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbserie`
--
ALTER TABLE `tbserie`
  ADD CONSTRAINT `tbserie_ibfk_1` FOREIGN KEY (`prod_ID_producto`) REFERENCES `tbproductos` (`Prod_ID_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbventas`
--
ALTER TABLE `tbventas`
  ADD CONSTRAINT `tbventas_ibfk_1` FOREIGN KEY (`TbCliente_ID_cliente`) REFERENCES `tbcliente` (`Cli_ID_Cliente`);

--
-- Filtros para la tabla `tbventasser`
--
ALTER TABLE `tbventasser`
  ADD CONSTRAINT `tbventasser_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `tbcliente` (`Cli_ID_Cliente`);

--
-- Filtros para la tabla `tb_rel_ventas_servicios`
--
ALTER TABLE `tb_rel_ventas_servicios`
  ADD CONSTRAINT `tb_rel_ventas_servicios_ibfk_1` FOREIGN KEY (`id_venta_ser`) REFERENCES `tbventasser` (`id_venta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_rel_ventas_servicios_ibfk_2` FOREIGN KEY (`id_servicio`) REFERENCES `tbservicios` (`Ser_Id_servicio`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
