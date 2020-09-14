-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2020 a las 06:38:13
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdtyre`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_galeria`
--

CREATE TABLE `asignacion_galeria` (
  `idAsignacion_galeria` int(11) NOT NULL,
  `Galeria_idGaleria` int(11) NOT NULL,
  `Tyre_idTyre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignacion_galeria`
--

INSERT INTO `asignacion_galeria` (`idAsignacion_galeria`, `Galeria_idGaleria`, `Tyre_idTyre`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `idCita` int(11) NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Hora` time DEFAULT NULL,
  `Tipo_llamada` varchar(45) DEFAULT NULL,
  `Cliente_Documento` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`idCita`, `Fecha`, `Hora`, `Tipo_llamada`, `Cliente_Documento`) VALUES
(1, '2020-07-17 05:00:00', NULL, NULL, '1'),
(2, '2020-07-17 05:00:00', NULL, NULL, '1'),
(3, '2020-07-17 05:00:00', NULL, NULL, '1'),
(4, '2020-07-17 05:00:00', NULL, NULL, '1'),
(16, '2020-07-17 05:00:00', NULL, NULL, '1'),
(17, '2020-07-17 05:00:00', NULL, NULL, '1'),
(18, '2020-07-31 07:30:58', NULL, NULL, '1'),
(19, '2020-07-31 07:31:05', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Documento` varchar(11) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Contrasena` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Documento`, `Nombre`, `Email`, `Contrasena`) VALUES
('1', '1', '1', '1'),
('1044', 'safasf', 'safashg@gmail.com', '1234'),
('112412', '4124124', '124125', '125125'),
('123456', 'prueba123', 'gasga@gasgkas', '123456'),
('235235235', 'asgasg', 'asgasg@qasg', '123'),
('4444444', 'yay', 'a@a.a', 'yaya'),
('5555', 'camilo', 'camiloyaya@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `congtratacion_tyre`
--

CREATE TABLE `congtratacion_tyre` (
  `idCongtratacion_tyre` int(11) NOT NULL,
  `Tyre_idTyre` int(11) NOT NULL,
  `Cliente_Documento` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `congtratacion_tyre`
--

INSERT INTO `congtratacion_tyre` (`idCongtratacion_tyre`, `Tyre_idTyre`, `Cliente_Documento`) VALUES
(1, 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edicion`
--

CREATE TABLE `edicion` (
  `idEdicion` int(11) NOT NULL,
  `UltimaEdicion` date DEFAULT NULL,
  `Cliente_Documento` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `edicion`
--

INSERT INTO `edicion` (`idEdicion`, `UltimaEdicion`, `Cliente_Documento`) VALUES
(1, '0000-00-00', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `Nit` varchar(20) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Actividad_eco` varchar(45) DEFAULT NULL,
  `Codigo_CIIU` varchar(45) DEFAULT NULL,
  `Numero_emple` int(7) DEFAULT NULL,
  `Nivel_ventas` varchar(45) DEFAULT NULL,
  `Mision` varchar(200) DEFAULT NULL,
  `Vision` varchar(200) DEFAULT NULL,
  `Webpage` varchar(2048) DEFAULT NULL,
  `Objetivos` varchar(200) DEFAULT NULL,
  `CC` varchar(45) DEFAULT NULL,
  `Galeria_idGaleria` int(11) NOT NULL,
  `Cliente_Documento` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`Nit`, `Nombre`, `Actividad_eco`, `Codigo_CIIU`, `Numero_emple`, `Nivel_ventas`, `Mision`, `Vision`, `Webpage`, `Objetivos`, `CC`, `Galeria_idGaleria`, `Cliente_Documento`) VALUES
('1', '1', '1', '1', 1, '1', '1', '1', '1', '1', '1', 1, '1'),
('1234', 'camilo', 'na', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '5555'),
('123456', 'prueba123', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '123456'),
('333333333', 'yay', 'yaya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '4444444'),
('523523', 'asgasg', '5235235', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '235235235'),
('casda12', 'safasf', 'saflgkajsg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '1044');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `idGaleria` int(11) NOT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `Galeria` varchar(100) DEFAULT NULL,
  `Tipo_galeria_idTipo_galeria` int(11) NOT NULL,
  `Pagina_web_idPagina_web` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`idGaleria`, `Descripcion`, `Galeria`, `Tipo_galeria_idTipo_galeria`, `Pagina_web_idPagina_web`) VALUES
(1, '1', '1', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina_web`
--

CREATE TABLE `pagina_web` (
  `idPagina_web` int(11) NOT NULL,
  `Terminos_condiciones` varchar(500) DEFAULT NULL,
  `Politicas` varchar(500) DEFAULT NULL,
  `Tratamiento_datos` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pagina_web`
--

INSERT INTO `pagina_web` (`idPagina_web`, `Terminos_condiciones`, `Politicas`, `Tratamiento_datos`) VALUES
(1, '1', '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `idServicio` int(11) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Tyre_idTyre` int(11) NOT NULL,
  `Tipo_servicio_idTipo_servicio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`idServicio`, `Descripcion`, `Tyre_idTyre`, `Tipo_servicio_idTipo_servicio`) VALUES
(1, '1', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE `telefono` (
  `idTelefono` int(11) NOT NULL,
  `Numero_Persona` varchar(11) DEFAULT NULL,
  `Tipo_telefono_idTipo_telefono1` int(11) NOT NULL,
  `Cliente_Documento` varchar(11) NOT NULL,
  `Empresa_Nit` varchar(20) NOT NULL,
  `Numero_Empresa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `telefono`
--

INSERT INTO `telefono` (`idTelefono`, `Numero_Persona`, `Tipo_telefono_idTipo_telefono1`, `Cliente_Documento`, `Empresa_Nit`, `Numero_Empresa`) VALUES
(1, '161641', 1, '1044', 'casda12', '16514'),
(2, '111111', 1, '4444444', '333333333', '22222'),
(3, '1234', 1, '5555', '1234', '1234'),
(4, '123456', 1, '123456', '123456', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_galeria`
--

CREATE TABLE `tipo_galeria` (
  `idTipo_galeria` int(11) NOT NULL,
  `Tipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_galeria`
--

INSERT INTO `tipo_galeria` (`idTipo_galeria`, `Tipo`) VALUES
(1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_servicio`
--

CREATE TABLE `tipo_servicio` (
  `idTipo_servicio` int(11) NOT NULL,
  `Tipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_servicio`
--

INSERT INTO `tipo_servicio` (`idTipo_servicio`, `Tipo`) VALUES
(1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_telefono`
--

CREATE TABLE `tipo_telefono` (
  `idTipo_telefono` int(11) NOT NULL,
  `Tipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_telefono`
--

INSERT INTO `tipo_telefono` (`idTipo_telefono`, `Tipo`) VALUES
(1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_url`
--

CREATE TABLE `tipo_url` (
  `idTipo_url` int(11) NOT NULL,
  `Tipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_url`
--

INSERT INTO `tipo_url` (`idTipo_url`, `Tipo`) VALUES
(1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tyre`
--

CREATE TABLE `tyre` (
  `idTyre` int(11) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tyre`
--

INSERT INTO `tyre` (`idTyre`, `Descripcion`) VALUES
(1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `urls`
--

CREATE TABLE `urls` (
  `idUrls` int(11) NOT NULL,
  `Contenido` varchar(200) DEFAULT NULL,
  `Pagina_web_idPagina_web` int(11) NOT NULL,
  `Tipo_url_idTipo_url` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `urls`
--

INSERT INTO `urls` (`idUrls`, `Contenido`, `Pagina_web_idPagina_web`, `Tipo_url_idTipo_url`) VALUES
(1, '1', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignacion_galeria`
--
ALTER TABLE `asignacion_galeria`
  ADD PRIMARY KEY (`idAsignacion_galeria`),
  ADD KEY `fk_Asignacion_galeria_Galeria1_idx` (`Galeria_idGaleria`),
  ADD KEY `fk_Asignacion_galeria_Tyre1_idx` (`Tyre_idTyre`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`idCita`),
  ADD KEY `fk_Cita_Cliente1_idx` (`Cliente_Documento`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Documento`);

--
-- Indices de la tabla `congtratacion_tyre`
--
ALTER TABLE `congtratacion_tyre`
  ADD PRIMARY KEY (`idCongtratacion_tyre`),
  ADD KEY `fk_Congtratacion_tyre_Tyre1_idx` (`Tyre_idTyre`),
  ADD KEY `fk_Congtratacion_tyre_Cliente1_idx` (`Cliente_Documento`);

--
-- Indices de la tabla `edicion`
--
ALTER TABLE `edicion`
  ADD PRIMARY KEY (`idEdicion`),
  ADD KEY `fk_Edicion_Cliente1_idx` (`Cliente_Documento`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`Nit`),
  ADD KEY `fk_Empresa_Galeria1_idx` (`Galeria_idGaleria`),
  ADD KEY `fk_Empresa_Cliente1_idx` (`Cliente_Documento`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`idGaleria`),
  ADD KEY `fk_Galeria_Tipo_galeria1_idx` (`Tipo_galeria_idTipo_galeria`),
  ADD KEY `fk_Galeria_Pagina_web1_idx` (`Pagina_web_idPagina_web`);

--
-- Indices de la tabla `pagina_web`
--
ALTER TABLE `pagina_web`
  ADD PRIMARY KEY (`idPagina_web`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`idServicio`),
  ADD KEY `fk_Servicio_Tyre1_idx` (`Tyre_idTyre`),
  ADD KEY `fk_Servicio_Tipo_servicio1_idx` (`Tipo_servicio_idTipo_servicio`);

--
-- Indices de la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD PRIMARY KEY (`idTelefono`),
  ADD KEY `fk_Telefono_Tipo_telefono1_idx` (`Tipo_telefono_idTipo_telefono1`),
  ADD KEY `fk_Telefono_Cliente1_idx` (`Cliente_Documento`),
  ADD KEY `fk_Telefono_Empresa1_idx` (`Empresa_Nit`);

--
-- Indices de la tabla `tipo_galeria`
--
ALTER TABLE `tipo_galeria`
  ADD PRIMARY KEY (`idTipo_galeria`);

--
-- Indices de la tabla `tipo_servicio`
--
ALTER TABLE `tipo_servicio`
  ADD PRIMARY KEY (`idTipo_servicio`);

--
-- Indices de la tabla `tipo_telefono`
--
ALTER TABLE `tipo_telefono`
  ADD PRIMARY KEY (`idTipo_telefono`);

--
-- Indices de la tabla `tipo_url`
--
ALTER TABLE `tipo_url`
  ADD PRIMARY KEY (`idTipo_url`);

--
-- Indices de la tabla `tyre`
--
ALTER TABLE `tyre`
  ADD PRIMARY KEY (`idTyre`);

--
-- Indices de la tabla `urls`
--
ALTER TABLE `urls`
  ADD PRIMARY KEY (`idUrls`),
  ADD KEY `fk_Urls_Pagina_web1_idx` (`Pagina_web_idPagina_web`),
  ADD KEY `fk_Urls_Tipo_url1_idx` (`Tipo_url_idTipo_url`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `idCita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `telefono`
--
ALTER TABLE `telefono`
  MODIFY `idTelefono` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignacion_galeria`
--
ALTER TABLE `asignacion_galeria`
  ADD CONSTRAINT `fk_Asignacion_galeria_Galeria1` FOREIGN KEY (`Galeria_idGaleria`) REFERENCES `galeria` (`idGaleria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Asignacion_galeria_Tyre1` FOREIGN KEY (`Tyre_idTyre`) REFERENCES `tyre` (`idTyre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `fk_Cita_Cliente1` FOREIGN KEY (`Cliente_Documento`) REFERENCES `cliente` (`Documento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `congtratacion_tyre`
--
ALTER TABLE `congtratacion_tyre`
  ADD CONSTRAINT `fk_Congtratacion_tyre_Cliente1` FOREIGN KEY (`Cliente_Documento`) REFERENCES `cliente` (`Documento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Congtratacion_tyre_Tyre1` FOREIGN KEY (`Tyre_idTyre`) REFERENCES `tyre` (`idTyre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `edicion`
--
ALTER TABLE `edicion`
  ADD CONSTRAINT `fk_Edicion_Cliente1` FOREIGN KEY (`Cliente_Documento`) REFERENCES `cliente` (`Documento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `fk_Empresa_Cliente1` FOREIGN KEY (`Cliente_Documento`) REFERENCES `cliente` (`Documento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Empresa_Galeria1` FOREIGN KEY (`Galeria_idGaleria`) REFERENCES `galeria` (`idGaleria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD CONSTRAINT `fk_Galeria_Pagina_web1` FOREIGN KEY (`Pagina_web_idPagina_web`) REFERENCES `pagina_web` (`idPagina_web`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Galeria_Tipo_galeria1` FOREIGN KEY (`Tipo_galeria_idTipo_galeria`) REFERENCES `tipo_galeria` (`idTipo_galeria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `fk_Servicio_Tipo_servicio1` FOREIGN KEY (`Tipo_servicio_idTipo_servicio`) REFERENCES `tipo_servicio` (`idTipo_servicio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Servicio_Tyre1` FOREIGN KEY (`Tyre_idTyre`) REFERENCES `tyre` (`idTyre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD CONSTRAINT `fk_Telefono_Cliente1` FOREIGN KEY (`Cliente_Documento`) REFERENCES `cliente` (`Documento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Telefono_Empresa1` FOREIGN KEY (`Empresa_Nit`) REFERENCES `empresa` (`Nit`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Telefono_Tipo_telefono1` FOREIGN KEY (`Tipo_telefono_idTipo_telefono1`) REFERENCES `tipo_telefono` (`idTipo_telefono`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `urls`
--
ALTER TABLE `urls`
  ADD CONSTRAINT `fk_Urls_Pagina_web1` FOREIGN KEY (`Pagina_web_idPagina_web`) REFERENCES `pagina_web` (`idPagina_web`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Urls_Tipo_url1` FOREIGN KEY (`Tipo_url_idTipo_url`) REFERENCES `tipo_url` (`idTipo_url`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
