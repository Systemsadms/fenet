-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 16-02-2019 a las 05:29:01
-- Versión del servidor: 5.7.25-cll-lve
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fenetco1_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesoramientos`
--

CREATE TABLE `asesoramientos` (
  `id` int(11) NOT NULL,
  `cliente` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `estatus` varchar(100) NOT NULL,
  `tipoUsuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asesoramientos`
--

INSERT INTO `asesoramientos` (`id`, `cliente`, `fecha`, `hora`, `estatus`, `tipoUsuario`) VALUES
(1, 'systemsadms@hotmail.com', '2022-12-18', '06:06:32', 'enCurso', 'cliente'),
(2, 'cdcnetstar@hotmail.com', '2015-02-19', '20:20:25', 'enCurso', 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesorchat`
--

CREATE TABLE `asesorchat` (
  `id` int(11) NOT NULL,
  `cliente` varchar(100) NOT NULL,
  `contenido` text NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `tipoUsuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asesorchat`
--

INSERT INTO `asesorchat` (`id`, `cliente`, `contenido`, `fecha`, `hora`, `ciudad`, `estado`, `pais`, `tipoUsuario`) VALUES
(1, 'systemsadms@hotmail.com', 'Contacto Asesor\r\n', '2022-12-18', '06:06:24', '', 'Vargas', 'Venezuela', 'cliente'),
(2, 'systemsadms@hotmail.com', 'Respuesta Asesor', '2022-12-18', '06:06:21', 'La Guaira', 'Vargas', 'Venezuela', 'Asesor'),
(3, 'cdcnetstar@hotmail.com', 'compra hojas', '2015-02-19', '20:20:12', '', 'Vargas', 'Venezuela', 'cliente'),
(4, 'cdcnetstar@hotmail.com', 'Saludos, su solicitud esta siendo atendida. Quedamos atentos a sus servicios', '2015-02-19', '20:20:19', 'La Guaira', 'Vargas', 'Venezuela', 'Asesor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listaservicios`
--

CREATE TABLE `listaservicios` (
  `id` int(11) NOT NULL,
  `servicio` text NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `listaservicios`
--

INSERT INTO `listaservicios` (`id`, `servicio`, `descripcion`) VALUES
(1, 'Computacion', 'Servicios de reparacion mantenimiento de equipos i...\n'),
(2, 'Compras', 'Servicio en gestion de compras al mayor y detail'),
(3, 'Ventas', 'Servicio en gestion de ventas y busqueda de cliente potenciales para su negocio. '),
(4, 'Aduanas', 'Servicios Aduanales, envios internacionales y tramites legales.'),
(5, 'Almacen', 'Servicios de almacenaje de mercancias, mercancia refrigerada, contenedores y almacen. '),
(6, 'Logistica', 'Servicios de transporte de mercancia y procesos logisticos.'),
(7, 'Taxis', 'Servicios de transporte, empresas y cooperativas de taxis en su localidad.'),
(8, 'Delivery', 'Servicios de envios de mercancia, suvenir, comida, paquetes entre otros.'),
(9, 'Herreria', 'Servicios Profesionales de Herreria Domestico e Industrial.'),
(10, 'Plomeria', 'Servicio de plomeria, Destapado de caneria domestico e Industrial, Instalacion de Griferias, Limpieza de Tanques de Agua, Servicio de Electricidad Domestico y Comercial, Remodelacion en General.'),
(11, 'Albanileria', 'Servicio de AlbanilerÃ­a, Fabricacion y Paredes en Concreto, Instalacion y Reparacion de Drywall, Ceramica, Porcelanato y Marmol, ReparaciÃ³n de Filtraciones.'),
(12, 'Refrigeracion', 'Mantenimiento de Equipos de Refrigeracion, Servicio de Reparacion, Correccion, Mantenimiento de Aires Acondicionados, Cavas, Cuartos Enfriadores, Neveras Industriales, Comerciales y Domesticas, Taller de Refrigeracion, Mantenimiento y ReparaciÃ³n de Refrigeracion'),
(13, 'Telefonia', 'Servicios de Reparacion y mantenimiento de telefonos celulares, smartphone y tables.'),
(14, 'Mecanica', 'Servicios de Mecanica Ligera, Mecanica Pesada y Mecanica Industrial'),
(15, 'Tramites Legales', 'Servicios en Gestion de tramites legales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idProveedor` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `especialidad1` text NOT NULL,
  `especialidad2` text NOT NULL,
  `especialidad3` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono1` int(11) NOT NULL,
  `telefono2` int(11) NOT NULL,
  `tipodeproveedor` text NOT NULL,
  `encargado` text NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `pais` text NOT NULL,
  `calificacion` int(11) NOT NULL,
  `estatus` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idProveedor`, `nombre`, `especialidad1`, `especialidad2`, `especialidad3`, `email`, `telefono1`, `telefono2`, `tipodeproveedor`, `encargado`, `direccion`, `estado`, `ciudad`, `pais`, `calificacion`, `estatus`, `logo`) VALUES
(1, 'Systems Admins', 'Desarrollo web', 'Soporte Tecnico', 'Aprendiz', 'systemsadms@hotmail.com', 2147483647, 0, 'Computacion', '', 'Caraballeda', 'Vargas', 'La Guaira', 'Venezuela', 0, 'nuevo', 'img');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `empresa` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `celular` varchar(100) NOT NULL,
  `whatsapp` varchar(100) NOT NULL,
  `encargado` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `tipoProveedor` varchar(100) NOT NULL,
  `especialidades` text NOT NULL,
  `pagina` text NOT NULL,
  `publicidad` text NOT NULL,
  `pais` text NOT NULL,
  `estado` text NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `estatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimientos`
--

CREATE TABLE `seguimientos` (
  `id` int(11) NOT NULL,
  `servicio` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `contenido` text NOT NULL,
  `seguimiento` varchar(100) NOT NULL,
  `proveedor` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `idServicio` int(11) NOT NULL,
  `servicio` text NOT NULL,
  `tipodeServicio` text NOT NULL,
  `descripcion` text NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `pais` text NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `proveedor` varchar(100) NOT NULL,
  `usuario` int(11) NOT NULL,
  `estatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`idServicio`, `servicio`, `tipodeServicio`, `descripcion`, `direccion`, `ciudad`, `estado`, `pais`, `fecha`, `hora`, `proveedor`, `usuario`, `estatus`) VALUES
(1, '', 'general', '', '', '', '', '', '0000-00-00', '00:00:00', 'fenet', 4, 'solicitado'),
(3, 'COMPRAS', 'general', 'compra hojas tipo carta', 'agencia de loterianetstar, avenida la costanera, minicentro k-rol , urbanizaciÃ³n el caribe , la gua', 'la guaira', 'Vargas', 'venezuela', '2015-02-19', '19:19:26', 'fenet', 5, 'solicitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `telefono` text NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `tipoUsuario` varchar(100) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `nombre`, `apellido`, `email`, `pass`, `telefono`, `direccion`, `tipoUsuario`, `pais`, `estado`, `ciudad`) VALUES
(1, 'Enrique', 'Mendoza', 'info@fenet.com.ve', '123', '04166066328', '', 'asesor', 'Venezuela', 'Vargas', ''),
(2, 'Enrique', 'Mendoza', 'systemsadms@hotmail.com', 'hdwtnkue456', '04166066328', '', 'proveedor', 'Venezuela', 'Vargas', ''),
(3, 'Xavier', 'Diaz', 'xavi_780@hotmail.com', '12345', '04142523382', 'caraballeda', 'cliente', 'Venezuela', 'Vargas', ''),
(4, '', '', '', '', '', '', 'cliente', '', '', ''),
(5, 'manuel', 'goncalves', 'cdcnetstar@hotmail.com', 'fenet123', '04242079468', '', 'cliente', 'Venezuela', 'Vargas', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asesoramientos`
--
ALTER TABLE `asesoramientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `asesorchat`
--
ALTER TABLE `asesorchat`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `listaservicios`
--
ALTER TABLE `listaservicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seguimientos`
--
ALTER TABLE `seguimientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`idServicio`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asesoramientos`
--
ALTER TABLE `asesoramientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `asesorchat`
--
ALTER TABLE `asesorchat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `listaservicios`
--
ALTER TABLE `listaservicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idProveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `seguimientos`
--
ALTER TABLE `seguimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `idServicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
