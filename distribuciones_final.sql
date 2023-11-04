-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2023 a las 08:04:51
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `distribuciones_final`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `codigo_cliente` varchar(45) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Apellido` varchar(40) NOT NULL,
  `Cédula` varchar(40) NOT NULL,
  `Numer_Teléfono` varchar(40) NOT NULL,
  `Departamento` varchar(40) NOT NULL,
  `Ciudad` varchar(40) NOT NULL,
  `Dirección` varchar(40) NOT NULL,
  `Correo_electro` varchar(40) NOT NULL,
  `Historial_compra` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_has_transportista_emplead`
--

CREATE TABLE `cliente_has_transportista_emplead` (
  `Cliente_Codigo_cliente` varchar(40) NOT NULL,
  `Transportista_emplead` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `Codigo_emplead` varchar(40) NOT NULL,
  `Codigo_pedid` varchar(40) NOT NULL,
  `Nomb_emplead` varchar(40) NOT NULL,
  `Apellid_emplead` varchar(40) NOT NULL,
  `Transportista_emplead` varchar(40) NOT NULL,
  `Télefono_emplead` varchar(40) NOT NULL,
  `Cargo_emplead` varchar(40) NOT NULL,
  `Fechainicio_emplead` varchar(40) NOT NULL,
  `Fechatermin_emplead` varchar(40) NOT NULL,
  `Salario_emplead` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `Codi_Factura` varchar(40) NOT NULL,
  `Fecha_fact` varchar(40) NOT NULL,
  `Total_compra` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodos pago`
--

CREATE TABLE `metodos pago` (
  `idUnico_metodo_pago` varchar(40) NOT NULL,
  `Codi_product` varchar(40) NOT NULL,
  `Codi_Factura` varchar(40) NOT NULL,
  `Nombre_metodo_pago` varchar(40) NOT NULL,
  `Descripción` varchar(40) NOT NULL,
  `Numero_tarjeta` varchar(40) NOT NULL,
  `Codigo_seguridad` varchar(40) NOT NULL,
  `Nombre_titular_tarjeta` varchar(40) NOT NULL,
  `Saldo_disponible` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodos pago_has_cliente`
--

CREATE TABLE `metodos pago_has_cliente` (
  `metodos pago_idUnico_metodo_pago` varchar(40) NOT NULL,
  `cliente_Codigo_cliente` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `Codigo_pedid` varchar(40) NOT NULL,
  `Nit_supermercado` varchar(40) NOT NULL,
  `Fecha_pedid` date NOT NULL,
  `Hora_pedido` datetime NOT NULL,
  `Estado_pedid` varchar(40) NOT NULL,
  `cliente_solici_pedid` varchar(40) NOT NULL,
  `Producsolici_pedid` varchar(40) NOT NULL,
  `Cantida_pedid` varchar(40) NOT NULL,
  `Preciototal_pedid` double NOT NULL,
  `Dirección_entrega` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Codi_product` varchar(40) NOT NULL,
  `Nomb_product` varchar(40) NOT NULL,
  `Descrip_product` varchar(40) NOT NULL,
  `Canti_product` varchar(40) NOT NULL,
  `Precio_product` double NOT NULL,
  `Stock` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_has_supermercado`
--

CREATE TABLE `producto_has_supermercado` (
  `producto_Codi_product` varchar(40) NOT NULL,
  `supermercado_Nit_supermercado` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `Codigo_registro` varchar(45) NOT NULL,
  `Codigo_cliente` varchar(40) NOT NULL,
  `Nombre_Completo` varchar(40) NOT NULL,
  `Correo_Electrónico` varchar(40) NOT NULL,
  `Número_Telefónico` varchar(40) NOT NULL,
  `Departamento` varchar(40) NOT NULL,
  `Ciudad` varchar(40) NOT NULL,
  `Usuario` varchar(40) NOT NULL,
  `Contraseña` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`Codigo_registro`, `Codigo_cliente`, `Nombre_Completo`, `Correo_Electrónico`, `Número_Telefónico`, `Departamento`, `Ciudad`, `Usuario`, `Contraseña`) VALUES
('1224377', '5940103', 'Hector', 'hector2312@gmail.com', '3124674567', 'Huila', 'Neiva', '', ''),
('1994228', '8567141', 'Erildene Salazar', 'Sala_eril927@hotmail.com', '3243571248', 'Huila', 'Neiva', '', ''),
('2023198', '898351', 'Emanuel Gomez', 'emalol98@hotmail.com', '3167590629', 'Huila', 'Neiva', '', ''),
('2800675', '2791251', 'Julian Osorio', 'juliangomez190230@gmail.com', '3222302356', 'Huila', 'Neiva', '', ''),
('3', '', 'JULIAN DAVID', 'julian1902@gmail.com', '3222302356', 'HUILA', 'Neiva', '', ''),
('3683112', '5738628', 'Alexis Narvaez', 'alexis345@gmail.com', '3167906432', 'Huila', 'Neiva', 'aleeexis_pro', 'elmaslindo'),
('456570', '7706570', 'David', 'davidjuli10@gmail.com', '3103494212', 'Huila', 'Neiva', '', ''),
('5354062', '6820056', 'Richard Mendieta', 'richaar_mendieta@gmail.com', '3056780981', 'Valle del Cauca', 'Cali', 'mendieta21', 'micalibello'),
('5476842', '3883846', 'Camilo Torres', 'Camilito2312@gmail.com', '3103189876', 'Antioquia', 'Medellin', 'camilotorres12', 'lolajensen'),
('5895968', '5262806', 'Camila', 'camiluk92@gmail.com', '3109568734', 'Huila', 'Neiva', '', ''),
('6705482', '147270', 'Sergio Morales', 'juliangomez190230@gmail.com', '3222302389', 'Huila', 'Neiva', '', ''),
('6991958', '787635', 'Lionel Messi', 'liomessi18@gmail.com', '3189210923', 'Santander', 'Bucaramanga', '', ''),
('7899676', '9613493', 'Karen Andrade', 'Karenmichi2@gmail.com', '3213809643', 'Huila', 'Neiva', 'andrade_ka2', 'amomimichi'),
('8558777', '1584846', 'Andres Gonzales', 'gonzales_andres18@gmail.com', '3122134567', 'Antioquia', 'Medellín', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `Codig_servi` varchar(40) NOT NULL,
  `Codigo_cliente` varchar(40) NOT NULL,
  `Codigo_pedid` varchar(40) NOT NULL,
  `Nomb_servi` varchar(40) NOT NULL,
  `Descrip_servi` varchar(40) NOT NULL,
  `Duraci_servi` varchar(40) NOT NULL,
  `Precio_servi` varchar(40) NOT NULL,
  `Disponi_servi` varchar(40) NOT NULL,
  `Catego_servi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supermercado`
--

CREATE TABLE `supermercado` (
  `Nit_supermercado` varchar(40) NOT NULL,
  `Nombre_super` varchar(40) NOT NULL,
  `Dirección_super` varchar(40) NOT NULL,
  `Telefono_contact` varchar(40) NOT NULL,
  `Horario_atencion` varchar(40) NOT NULL,
  `Politicas_devolución` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supermercado_has_metodos pago`
--

CREATE TABLE `supermercado_has_metodos pago` (
  `supermercado_Nit_supermercado` varchar(40) NOT NULL,
  `metodos pago_idUnico_metodo_pago` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo entrega`
--

CREATE TABLE `vehiculo entrega` (
  `idVehiculo entrega` varchar(40) NOT NULL,
  `Nit_supermercado` varchar(40) NOT NULL,
  `Codigo_pedid` varchar(40) NOT NULL,
  `Codigo_emplead` varchar(40) NOT NULL,
  `Estado_vehiculo` varchar(40) NOT NULL,
  `Historial_entregas` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codigo_cliente`),
  ADD UNIQUE KEY `Nombre` (`Nombre`);

--
-- Indices de la tabla `cliente_has_transportista_emplead`
--
ALTER TABLE `cliente_has_transportista_emplead`
  ADD PRIMARY KEY (`Transportista_emplead`),
  ADD UNIQUE KEY `Cliente_Codigo_cliente` (`Cliente_Codigo_cliente`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`Codigo_emplead`),
  ADD UNIQUE KEY `Transportista_emplead` (`Transportista_emplead`),
  ADD UNIQUE KEY `Codigo_pedid` (`Codigo_pedid`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`Codi_Factura`);

--
-- Indices de la tabla `metodos pago`
--
ALTER TABLE `metodos pago`
  ADD PRIMARY KEY (`idUnico_metodo_pago`),
  ADD UNIQUE KEY `Codi_product` (`Codi_product`),
  ADD UNIQUE KEY `Codi_Factura` (`Codi_Factura`);

--
-- Indices de la tabla `metodos pago_has_cliente`
--
ALTER TABLE `metodos pago_has_cliente`
  ADD PRIMARY KEY (`metodos pago_idUnico_metodo_pago`),
  ADD UNIQUE KEY `cliente_Codigo_cliente` (`cliente_Codigo_cliente`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`Codigo_pedid`),
  ADD UNIQUE KEY `Nit_supermercado` (`Nit_supermercado`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Codi_product`);

--
-- Indices de la tabla `producto_has_supermercado`
--
ALTER TABLE `producto_has_supermercado`
  ADD PRIMARY KEY (`producto_Codi_product`),
  ADD UNIQUE KEY `supermercado_Nit_supermercado` (`supermercado_Nit_supermercado`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`Codigo_registro`) USING BTREE,
  ADD UNIQUE KEY `Codigo_cliente` (`Codigo_cliente`) USING BTREE;

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`Codig_servi`),
  ADD UNIQUE KEY `Codigo_cliente` (`Codigo_cliente`),
  ADD UNIQUE KEY `Codigo_pedid` (`Codigo_pedid`);

--
-- Indices de la tabla `supermercado`
--
ALTER TABLE `supermercado`
  ADD PRIMARY KEY (`Nit_supermercado`);

--
-- Indices de la tabla `supermercado_has_metodos pago`
--
ALTER TABLE `supermercado_has_metodos pago`
  ADD PRIMARY KEY (`supermercado_Nit_supermercado`),
  ADD UNIQUE KEY `metodos pago_idUnico_metodo_pago` (`metodos pago_idUnico_metodo_pago`);

--
-- Indices de la tabla `vehiculo entrega`
--
ALTER TABLE `vehiculo entrega`
  ADD PRIMARY KEY (`idVehiculo entrega`),
  ADD UNIQUE KEY `Nit_supermercado` (`Nit_supermercado`),
  ADD UNIQUE KEY `Codigo_pedid` (`Codigo_pedid`),
  ADD UNIQUE KEY `Codigo_emplead` (`Codigo_emplead`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`codigo_cliente`) REFERENCES `pedido` (`Codigo_pedid`),
  ADD CONSTRAINT `cliente_ibfk_2` FOREIGN KEY (`Nombre`) REFERENCES `registro` (`Codigo_registro`);

--
-- Filtros para la tabla `cliente_has_transportista_emplead`
--
ALTER TABLE `cliente_has_transportista_emplead`
  ADD CONSTRAINT `cliente_has_transportista_emplead_ibfk_1` FOREIGN KEY (`Cliente_Codigo_cliente`) REFERENCES `cliente` (`codigo_cliente`),
  ADD CONSTRAINT `cliente_has_transportista_emplead_ibfk_2` FOREIGN KEY (`Transportista_emplead`) REFERENCES `empleado` (`Transportista_emplead`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`Codigo_emplead`) REFERENCES `supermercado` (`Nit_supermercado`),
  ADD CONSTRAINT `empleado_ibfk_2` FOREIGN KEY (`Codigo_pedid`) REFERENCES `pedido` (`Codigo_pedid`),
  ADD CONSTRAINT `empleado_ibfk_3` FOREIGN KEY (`Transportista_emplead`) REFERENCES `servicio` (`Codig_servi`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`Codi_Factura`) REFERENCES `empleado` (`Codigo_emplead`);

--
-- Filtros para la tabla `metodos pago`
--
ALTER TABLE `metodos pago`
  ADD CONSTRAINT `metodos pago_ibfk_1` FOREIGN KEY (`Codi_product`) REFERENCES `producto` (`Codi_product`),
  ADD CONSTRAINT `metodos pago_ibfk_2` FOREIGN KEY (`Codi_Factura`) REFERENCES `factura` (`Codi_Factura`);

--
-- Filtros para la tabla `metodos pago_has_cliente`
--
ALTER TABLE `metodos pago_has_cliente`
  ADD CONSTRAINT `metodos pago_has_cliente_ibfk_1` FOREIGN KEY (`metodos pago_idUnico_metodo_pago`) REFERENCES `metodos pago` (`idUnico_metodo_pago`),
  ADD CONSTRAINT `metodos pago_has_cliente_ibfk_2` FOREIGN KEY (`cliente_Codigo_cliente`) REFERENCES `cliente` (`codigo_cliente`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`Codigo_pedid`) REFERENCES `producto` (`Codi_product`),
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`Nit_supermercado`) REFERENCES `supermercado` (`Nit_supermercado`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`Codi_product`) REFERENCES `servicio` (`Codig_servi`);

--
-- Filtros para la tabla `producto_has_supermercado`
--
ALTER TABLE `producto_has_supermercado`
  ADD CONSTRAINT `producto_has_supermercado_ibfk_1` FOREIGN KEY (`producto_Codi_product`) REFERENCES `producto` (`Codi_product`),
  ADD CONSTRAINT `producto_has_supermercado_ibfk_2` FOREIGN KEY (`supermercado_Nit_supermercado`) REFERENCES `supermercado` (`Nit_supermercado`);

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `servicio_ibfk_1` FOREIGN KEY (`Codigo_cliente`) REFERENCES `cliente` (`codigo_cliente`),
  ADD CONSTRAINT `servicio_ibfk_2` FOREIGN KEY (`Codigo_pedid`) REFERENCES `pedido` (`Codigo_pedid`);

--
-- Filtros para la tabla `supermercado`
--
ALTER TABLE `supermercado`
  ADD CONSTRAINT `supermercado_ibfk_1` FOREIGN KEY (`Nit_supermercado`) REFERENCES `cliente` (`codigo_cliente`);

--
-- Filtros para la tabla `supermercado_has_metodos pago`
--
ALTER TABLE `supermercado_has_metodos pago`
  ADD CONSTRAINT `supermercado_has_metodos pago_ibfk_1` FOREIGN KEY (`supermercado_Nit_supermercado`) REFERENCES `supermercado` (`Nit_supermercado`),
  ADD CONSTRAINT `supermercado_has_metodos pago_ibfk_2` FOREIGN KEY (`metodos pago_idUnico_metodo_pago`) REFERENCES `metodos pago` (`idUnico_metodo_pago`);

--
-- Filtros para la tabla `vehiculo entrega`
--
ALTER TABLE `vehiculo entrega`
  ADD CONSTRAINT `vehiculo entrega_ibfk_1` FOREIGN KEY (`Nit_supermercado`) REFERENCES `supermercado` (`Nit_supermercado`),
  ADD CONSTRAINT `vehiculo entrega_ibfk_2` FOREIGN KEY (`Codigo_pedid`) REFERENCES `pedido` (`Codigo_pedid`),
  ADD CONSTRAINT `vehiculo entrega_ibfk_3` FOREIGN KEY (`Codigo_emplead`) REFERENCES `empleado` (`Codigo_emplead`),
  ADD CONSTRAINT `vehiculo entrega_ibfk_4` FOREIGN KEY (`idVehiculo entrega`) REFERENCES `servicio` (`Codig_servi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
