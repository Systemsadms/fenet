-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-07-2019 a las 11:22:08
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estructura de tabla para la tabla `dataset_contactos`
--

CREATE TABLE `dataset_contactos` (
  `cont_id` int(11) NOT NULL,
  `cont_dateadded` date NOT NULL,
  `cont_addedby` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_updatedby` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_lastupdate` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_firstname` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_lastname1` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_birthday` date NOT NULL,
  `cont_jobtitle` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_email` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_companyname` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_emailEmpresa` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_emailEmpresa2` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_workphone` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_cellphone` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_enterprisephone` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_enterprisephone2` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_country` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_state` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_city` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_addressline1` varchar(200) COLLATE utf8_bin NOT NULL,
  `cont_zip` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_rif` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_descripcion` text COLLATE utf8_bin NOT NULL,
  `cont_aniversario` date NOT NULL,
  `cont_genero` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_ejecutivo` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_insdustria` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_lineaNegocios` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_productos` text COLLATE utf8_bin NOT NULL,
  `cont_servicios` text COLLATE utf8_bin NOT NULL,
  `cont_employees` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_sale_volume` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_website1` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_website2` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_tipo` varchar(100) COLLATE utf8_bin NOT NULL,
  `cont_estado` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `dataset_contactos`
--

INSERT INTO `dataset_contactos` (`cont_id`, `cont_dateadded`, `cont_addedby`, `cont_updatedby`, `cont_lastupdate`, `cont_firstname`, `cont_lastname1`, `cont_birthday`, `cont_jobtitle`, `cont_email`, `cont_companyname`, `cont_emailEmpresa`, `cont_emailEmpresa2`, `cont_workphone`, `cont_cellphone`, `cont_enterprisephone`, `cont_enterprisephone2`, `cont_country`, `cont_state`, `cont_city`, `cont_addressline1`, `cont_zip`, `cont_rif`, `cont_descripcion`, `cont_aniversario`, `cont_genero`, `cont_ejecutivo`, `cont_insdustria`, `cont_lineaNegocios`, `cont_productos`, `cont_servicios`, `cont_employees`, `cont_sale_volume`, `cont_website1`, `cont_website2`, `cont_tipo`, `cont_estado`) VALUES
(1, '2019-04-08', 'admin', 'admin', '2019-04-08 19:05:06', 'Enrique2', 'Mendoza2', '1971-05-12', 'CEO2', 'enrique.mendoza@fenet.com.ve2', 'Systems Admins C,A2', 'correo1@outlook.com2', 'correo2@outlook.com2', '041660663282', '041401339392', '021201232', '02124562', 'Venezuela', 'Amazonas', 'asf  2', 'asf  2', '1165  2', 'j-29952662-2  2', 'descripcion  2', '2003-04-04', 'femenino2', 'Enrique Mendoza  2', 'Tecnologia', 'Soporte y Sistemas', 'producto1, producto2 2 ', 'Servcio1, servicio2  2', '1  2', '2  2', 'www.fenet.com.ve  2', 'www.systemsadms.com  2', 'proveedor  2', 'cliente'),
(2, '2019-04-15', 'userWeb', '', '', 'Domgino', 'Mendoza', '2000-10-10', 'FrontEnd', 'domingomendoza123@hotmail.com', 'Systems Admins C,A', 'info@fenet.com.ve', 'info@fenet.com.ve', '041421541515', '054565115', '04166066328', '04166066328', '', '', 'La guaira', 'caraballeda', '1165', 'j-29952662-2', 'Descripcion del neogcio', '2003-03-10', 'masculino', 'Enrique Mendoza', '', '', 'fenet, consumibles de oficina', 'Desarrollo, soporte, marketing', '1', '2', 'www.fenet.com.ve', 'www.systemsadms.com', 'proveedor, distribuidor', 'contacto'),
(3, '2019-07-06', 'admin', '', '', 'Johao', 'Mangeia', '1991-02-20', 'Gerente', 'jm@email.com', 'Brasil Systems', 'brs@email1.com', 'brs@email2.com', '1237641972', '1923691379', '123678641', '7186478164', 'Brasil', '', 'Rio', 'Sao Paulo', '1165', 'j-2317861-2', 'Esta es la descripcion de la empresa', '2003-05-15', 'masculino', 'Johao Mangeia', 'Tecnologia', '', 'Fenet', 'Desarrollo Web, Marketing Digital', '3', '3', 'brasil.com', 'brasil2.com', 'proveedor', 'contacto'),
(4, '2019-07-06', 'userWeb', '', '', 'Dan', 'Alvez', '1997-07-12', 'Gerente', 'jm@email.com', 'Consumibles Brasil', 'brs@email1.com', 'brs@email2.com', '1237641972', '1923691379', '1236561', '1786317863', '', '', 'Rio', 'Sao Paulo', '1165', 'j-2317861-2', 'Descripcion para la empresa', '2003-05-09', 'masculino', 'Johao Mangeia', '', '', 'Papel Blanco', 'Ventas', '3', '3', 'brasil.com', 'brasil2.com', 'proveedor', 'contacto'),
(5, '2019-07-07', 'userWeb', '', '', 'Enrique Mendoza', 'Mangeia', '1994-05-09', 'Gerente', 'enrique.mendoza@fenet.com.ve', 'FENET new', 'newfenet@email1.com', 'newfenet2@email2.com', '1237641972', '1923691379', '1236561123', '718647816412313', 'Brasil', 'vargas', 'Rio', 'Sao Paulo', '1165', 'j-2317861-2', 'Descripcion de la empresa', '2003-09-16', 'masculino', 'Johao Mangeia', 'Quimica', '', 'Papel Blanco', 'Desarrollo web', '3', '3', 'brasil.com', 'brasil2.com', 'distribuidor', 'contacto'),
(6, '2019-07-07', '', '', '', 'Enrique Mendoza', 'Mangeia', '1998-04-06', 'Gerente', 'enrique.mendoza@fenet.com.ve', 'Cargar Datos', 'cd@email.com', 'cd2@email.com', '1237641972', '1923691379', '12365611233423', '7186478164234', '', 'vargas', 'Rio', 'Sao Paulo', '1165', 'j-2317861-2', 'Descripcion de la empresa', '2003-02-14', 'masculino', 'Johao Mangeia', '', '', 'Papel Blanco', 'Desarrollo Web, Marketing Digital', '3', '3', 'brasil.com', 'brasil2.com', 'proveedor', 'contacto'),
(7, '2019-07-07', 'admin', '', '', 'Enrique Mendoza', 'Mangeia', '1998-04-06', 'Gerente', 'enrique.mendoza@fenet.com.ve', 'Cargar Datos2', 'cd2@email.com', 'cd22@email.com', '1237641972', '1923691379', '123656112334233', '71864781642343', 'Brasil', 'vargas', 'Rio', 'Sao Paulo', '1165', 'j-2317861-2', 'Descripcion de la empresa', '2003-02-14', 'masculino', 'Johao Mangeia', 'Recursos Naturales', '', 'Papel Blanco', 'Desarrollo Web, Marketing Digital', '3', '3', 'brasil.com', 'brasil2.com', 'proveedor', 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `idEstado` int(11) NOT NULL,
  `pais_codigo` varchar(2) COLLATE utf8_bin NOT NULL,
  `estado` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`idEstado`, `pais_codigo`, `estado`) VALUES
(1, 'VE', 'Vargas'),
(2, 'VE', 'Barquisimeto'),
(3, 'VE', 'Amazonas'),
(4, 'EC', 'Quito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `industrias`
--

CREATE TABLE `industrias` (
  `codigo` varchar(2) COLLATE utf8_bin NOT NULL,
  `industria` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `industrias`
--

INSERT INTO `industrias` (`codigo`, `industria`) VALUES
('AE', 'Academica/Educacion'),
('AD', 'Aduanas'),
('AG', 'Agricultura'),
('AS', 'Aerospace'),
('AT', 'Automotriz'),
('CS', 'Ciencias'),
('CT', 'Construcion'),
('EG', 'Energia'),
('FN', 'Financiero'),
('LG', 'Logistica'),
('MF', 'Manofactura'),
('QM', 'Quimica'),
('RN', 'Recursos Naturales'),
('RT', 'Retail'),
('SL', 'Salud'),
('SG', 'Seguridad'),
('SR', 'Seguros'),
('IT', 'Tecnologia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea_negocio`
--

CREATE TABLE `linea_negocio` (
  `idNegocio` int(11) NOT NULL,
  `negocio_codigo` varchar(2) COLLATE utf8_bin NOT NULL,
  `lineaNegocio` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `linea_negocio`
--

INSERT INTO `linea_negocio` (`idNegocio`, `negocio_codigo`, `lineaNegocio`) VALUES
(1, 'AD', 'Importaciones'),
(2, 'AD', 'Exportaciones'),
(3, 'AD', 'Documentos Legales'),
(4, 'IT', 'Soporte y Sistemas');

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
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `codigo` varchar(2) COLLATE utf8_bin NOT NULL,
  `pais` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`codigo`, `pais`) VALUES
('VE', 'Venezuela'),
('EC', 'Ecuador'),
('BR', 'Brasil');

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
(3, 'COMPRAS', 'general', 'compra hojas tipo carta', 'agencia de loterianetstar, avenida la costanera, minicentro k-rol , urbanizaciÃ³n el caribe , la gua', 'la guaira', 'Vargas', 'venezuela', '2015-02-19', '19:19:26', 'fenet', 5, 'solicitado'),
(4, 'MECANICA', 'general', 'Servicio Mecanica', 'Caraballeda', 'Rio', 'Amazonas', 'venezuela', '2030-07-19', '05:05:24', 'fenet', 2, 'solicitado');

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
(1, 'Enrique', 'Mendoza', 'info@fenet.com.ve', '123', '04166066328', 'caraballeda', 'asesor', 'Venezuela', 'Vargas', 'La guaira'),
(2, 'Enrique', 'Mendoza', 'systemsadms@hotmail.com', 'hdwtnkue456', '04166066328', '', 'proveedor', 'Venezuela', 'Vargas', ''),
(3, 'Xavier', 'Diaz', 'xavi_780@hotmail.com', '12345', '04142523382', 'caraballeda', 'cliente', 'Venezuela', 'Vargas', ''),
(4, 'Nombre', 'Apellido', 'email@email.com', 'password', 'telefono', 'direccion', 'cliente', 'pais', 'estado', 'ciudad'),
(5, 'manuel', 'goncalves', 'cdcnetstar@hotmail.com', 'fenet123', '04242079468', '', 'cliente', 'Venezuela', 'Vargas', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `tipo_cliente` varchar(100) COLLATE utf8_bin NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `pais_cliente` text COLLATE utf8_bin NOT NULL,
  `industria` varchar(100) COLLATE utf8_bin NOT NULL,
  `linea_negocio` varchar(100) COLLATE utf8_bin NOT NULL,
  `tipo_venta` varchar(100) COLLATE utf8_bin NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `proveedor` varchar(100) COLLATE utf8_bin NOT NULL,
  `pais_proveedor` varchar(100) COLLATE utf8_bin NOT NULL,
  `monto` varchar(100) COLLATE utf8_bin NOT NULL,
  `metodo_pago` varchar(100) COLLATE utf8_bin NOT NULL,
  `condicion_pago` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `tipo_cliente`, `id_cliente`, `pais_cliente`, `industria`, `linea_negocio`, `tipo_venta`, `descripcion`, `proveedor`, `pais_proveedor`, `monto`, `metodo_pago`, `condicion_pago`) VALUES
(1, 'empresa', 1, 'Venezuela', 'Ciencias', '', 'Producto', 'papel', 'Systems Admins C,A', 'Venezuela', '33', 'Deposito', 'contado'),
(2, 'empresa', 1, 'Venezuela', 'Ciencias', '', 'Producto', 'papel', 'Systems Admins C,A', 'Venezuela', '33', 'Deposito', 'contado'),
(3, 'empresa', 1, 'Venezuela', 'Ciencias', '', 'Producto', 'papel', 'Systems Admins C,A', 'Venezuela', '33', 'Deposito', 'contado'),
(4, 'usuario', 3, 'Venezuela', 'Automotriz', '', 'Producto', 'descripcion', 'Systems Admins C,A', 'Venezuela', '33', 'Cheque', 'condicion'),
(5, 'usuario', 3, 'Venezuela', 'Automotriz', '', 'Producto', 'descripcion', 'Systems Admins C,A', 'Venezuela', '33', 'Cheque', 'condicion'),
(6, 'empresa', 7, 'Brasil', 'Salud', '', 'Producto', '', 'Brasil Systems', 'Brasil', '123', 'Transferencia', 'test carga venta'),
(7, 'usuario', 1, 'Venezuela', 'Tecnologia', '', 'Servicio', 'desarrollo web', 'Cargar Datos2', 'Ecuador', '123', 'Deposito', '234');

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
-- Indices de la tabla `dataset_contactos`
--
ALTER TABLE `dataset_contactos`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `linea_negocio`
--
ALTER TABLE `linea_negocio`
  ADD PRIMARY KEY (`idNegocio`);

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
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`);

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
-- AUTO_INCREMENT de la tabla `dataset_contactos`
--
ALTER TABLE `dataset_contactos`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `linea_negocio`
--
ALTER TABLE `linea_negocio`
  MODIFY `idNegocio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
  MODIFY `idServicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
