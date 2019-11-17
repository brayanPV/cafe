-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2019 a las 01:14:30
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cafeuwu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `IDACTIVIDAD` int(11) NOT NULL,
  `NOMBRE` varchar(20) DEFAULT NULL,
  `FECHA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IDUSUARIO` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisis`
--

CREATE TABLE `analisis` (
  `IDANALISIS` int(11) NOT NULL,
  `FECHA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IDCULTIVO` int(11) NOT NULL,
  `PROPIEDAD1` int(11) DEFAULT NULL,
  `PROPIEDAD2` int(11) DEFAULT NULL,
  `PROPIEDAD3` int(11) DEFAULT NULL,
  `PROPIEDAD4` int(11) DEFAULT NULL,
  `IDUSUARIO` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `controlcalidad`
--

CREATE TABLE `controlcalidad` (
  `IDCONTROLCALIDAD` int(11) NOT NULL,
  `NOMBRE` varchar(20) DEFAULT NULL,
  `IDTIPOC` int(11) NOT NULL,
  `IDUSUARIO` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cultivo`
--

CREATE TABLE `cultivo` (
  `IDCULTIVO` int(11) NOT NULL,
  `NOMBRE` varchar(20) DEFAULT NULL,
  `AREA` int(11) NOT NULL,
  `FECHA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `IDUSUARIO` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cultivoact`
--

CREATE TABLE `cultivoact` (
  `IDCULTIVOACT` int(11) NOT NULL,
  `IDCULTIVO` int(11) NOT NULL,
  `IDACTIVIDAD` int(11) NOT NULL,
  `IDTRABAJADOR` int(11) NOT NULL,
  `FECHA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `IDUSUARIO` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cultivocontrol`
--

CREATE TABLE `cultivocontrol` (
  `IDCULTIVOCONTROL` int(11) NOT NULL,
  `IDCULTIVO` int(11) NOT NULL,
  `IDCONTROLCALIDAD` int(11) NOT NULL,
  `IDTRABAJADOR` int(11) NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `IDUSUARIO` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizacion`
--

CREATE TABLE `organizacion` (
  `IDORGANIZACION` int(10) NOT NULL,
  `NOMBRE` varchar(20) DEFAULT NULL,
  `NOMUSUARIO` varchar(20) DEFAULT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `organizacion`
--

INSERT INTO `organizacion` (`IDORGANIZACION`, `NOMBRE`, `NOMUSUARIO`, `PASSWORD`) VALUES
(1, 'CAFE1', 'CAFE1', '1234');

--
-- Disparadores `organizacion`
--
DELIMITER $$
CREATE TRIGGER `AFTER_ORGANIZACION_INSERT` AFTER INSERT ON `organizacion` FOR EACH ROW BEGIN 

INSERT INTO USUARIO(
IDORGANIZACION,
NOMBRE, 
NOMUSUARIO,
PASSWORD,
ADMIN
)
VALUES(
NEW.IDORGANIZACION,
NEW.NOMBRE,
NEW.NOMUSUARIO,
NEW.PASSWORD,
1
);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salida`
--

CREATE TABLE `salida` (
  `IDSALIDA` int(11) NOT NULL,
  `IDCULTIVO` int(11) NOT NULL,
  `IDTRABAJADOR` int(11) NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `FECHA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocontrol`
--

CREATE TABLE `tipocontrol` (
  `IDTIPOC` int(11) NOT NULL,
  `TIPO` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipocontrol`
--

INSERT INTO `tipocontrol` (`IDTIPOC`, `TIPO`) VALUES
(1, 'CONTROL DE PLAGA'),
(2, 'CONTROL ENFERMEDAD'),
(3, 'CONTROL DE MALEZA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `IDTRABAJADOR` int(11) NOT NULL,
  `NOMBRE` varchar(20) DEFAULT NULL,
  `APELLIDO` varchar(20) DEFAULT NULL,
  `TELEFONO` varchar(20) DEFAULT NULL,
  `CEDULA` int(10) NOT NULL,
  `IDUSUARIO` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IDUSUARIO` int(10) NOT NULL,
  `NOMBRE` varchar(20) DEFAULT NULL,
  `APELLIDO` varchar(20) DEFAULT NULL,
  `NOMUSUARIO` varchar(20) DEFAULT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL,
  `ADMIN` tinyint(1) DEFAULT NULL,
  `IDORGANIZACION` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IDUSUARIO`, `NOMBRE`, `APELLIDO`, `NOMUSUARIO`, `PASSWORD`, `ADMIN`, `IDORGANIZACION`) VALUES
(8, 'CAFE1', NULL, 'CAFE1', '1234', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`IDACTIVIDAD`),
  ADD KEY `FK_ACTIVIDAD` (`IDUSUARIO`);

--
-- Indices de la tabla `analisis`
--
ALTER TABLE `analisis`
  ADD PRIMARY KEY (`IDANALISIS`),
  ADD KEY `IDCULTIVO` (`IDCULTIVO`),
  ADD KEY `FK_ANALISIS` (`IDUSUARIO`);

--
-- Indices de la tabla `controlcalidad`
--
ALTER TABLE `controlcalidad`
  ADD PRIMARY KEY (`IDCONTROLCALIDAD`),
  ADD KEY `IDTIPOC` (`IDTIPOC`),
  ADD KEY `FK_CONTROLCALIDAD` (`IDUSUARIO`);

--
-- Indices de la tabla `cultivo`
--
ALTER TABLE `cultivo`
  ADD PRIMARY KEY (`IDCULTIVO`),
  ADD KEY `FK_CULTIVO` (`IDUSUARIO`);

--
-- Indices de la tabla `cultivoact`
--
ALTER TABLE `cultivoact`
  ADD PRIMARY KEY (`IDCULTIVOACT`),
  ADD KEY `IDCULTIVO` (`IDCULTIVO`),
  ADD KEY `IDACTIVIDAD` (`IDACTIVIDAD`),
  ADD KEY `IDTRABAJADOR` (`IDTRABAJADOR`),
  ADD KEY `FK_CULTIVOACT` (`IDUSUARIO`);

--
-- Indices de la tabla `cultivocontrol`
--
ALTER TABLE `cultivocontrol`
  ADD PRIMARY KEY (`IDCULTIVOCONTROL`),
  ADD KEY `IDCULTIVO` (`IDCULTIVO`),
  ADD KEY `IDCONTROLCALIDAD` (`IDCONTROLCALIDAD`),
  ADD KEY `IDTRABAJADOR` (`IDTRABAJADOR`),
  ADD KEY `FK_CULTIVOCONTROL` (`IDUSUARIO`);

--
-- Indices de la tabla `organizacion`
--
ALTER TABLE `organizacion`
  ADD PRIMARY KEY (`IDORGANIZACION`);

--
-- Indices de la tabla `salida`
--
ALTER TABLE `salida`
  ADD PRIMARY KEY (`IDSALIDA`),
  ADD KEY `IDCULTIVO` (`IDCULTIVO`),
  ADD KEY `IDTRABAJADOR` (`IDTRABAJADOR`);

--
-- Indices de la tabla `tipocontrol`
--
ALTER TABLE `tipocontrol`
  ADD PRIMARY KEY (`IDTIPOC`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`IDTRABAJADOR`),
  ADD KEY `FK_TRABAJADOR` (`IDUSUARIO`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IDUSUARIO`),
  ADD KEY `FK_USUARIO` (`IDORGANIZACION`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `IDACTIVIDAD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `analisis`
--
ALTER TABLE `analisis`
  MODIFY `IDANALISIS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `controlcalidad`
--
ALTER TABLE `controlcalidad`
  MODIFY `IDCONTROLCALIDAD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `cultivo`
--
ALTER TABLE `cultivo`
  MODIFY `IDCULTIVO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `cultivoact`
--
ALTER TABLE `cultivoact`
  MODIFY `IDCULTIVOACT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cultivocontrol`
--
ALTER TABLE `cultivocontrol`
  MODIFY `IDCULTIVOCONTROL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `organizacion`
--
ALTER TABLE `organizacion`
  MODIFY `IDORGANIZACION` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `salida`
--
ALTER TABLE `salida`
  MODIFY `IDSALIDA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipocontrol`
--
ALTER TABLE `tipocontrol`
  MODIFY `IDTIPOC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `IDTRABAJADOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IDUSUARIO` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD CONSTRAINT `FK_ACTIVIDAD` FOREIGN KEY (`IDUSUARIO`) REFERENCES `usuario` (`IDUSUARIO`);

--
-- Filtros para la tabla `analisis`
--
ALTER TABLE `analisis`
  ADD CONSTRAINT `FK_ANALISIS` FOREIGN KEY (`IDUSUARIO`) REFERENCES `usuario` (`IDUSUARIO`),
  ADD CONSTRAINT `analisis_ibfk_1` FOREIGN KEY (`IDCULTIVO`) REFERENCES `cultivo` (`IDCULTIVO`) ON DELETE CASCADE;

--
-- Filtros para la tabla `controlcalidad`
--
ALTER TABLE `controlcalidad`
  ADD CONSTRAINT `FK_CONTROLCALIDAD` FOREIGN KEY (`IDUSUARIO`) REFERENCES `usuario` (`IDUSUARIO`),
  ADD CONSTRAINT `controlcalidad_ibfk_1` FOREIGN KEY (`IDTIPOC`) REFERENCES `tipocontrol` (`IDTIPOC`) ON DELETE CASCADE;

--
-- Filtros para la tabla `cultivo`
--
ALTER TABLE `cultivo`
  ADD CONSTRAINT `FK_CULTIVO` FOREIGN KEY (`IDUSUARIO`) REFERENCES `usuario` (`IDUSUARIO`);

--
-- Filtros para la tabla `cultivoact`
--
ALTER TABLE `cultivoact`
  ADD CONSTRAINT `FK_CULTIVOACT` FOREIGN KEY (`IDUSUARIO`) REFERENCES `usuario` (`IDUSUARIO`),
  ADD CONSTRAINT `cultivoact_ibfk_1` FOREIGN KEY (`IDCULTIVO`) REFERENCES `cultivo` (`IDCULTIVO`) ON DELETE CASCADE,
  ADD CONSTRAINT `cultivoact_ibfk_2` FOREIGN KEY (`IDACTIVIDAD`) REFERENCES `actividad` (`IDACTIVIDAD`) ON DELETE CASCADE,
  ADD CONSTRAINT `cultivoact_ibfk_3` FOREIGN KEY (`IDTRABAJADOR`) REFERENCES `trabajador` (`IDTRABAJADOR`) ON DELETE CASCADE;

--
-- Filtros para la tabla `cultivocontrol`
--
ALTER TABLE `cultivocontrol`
  ADD CONSTRAINT `FK_CULTIVOCONTROL` FOREIGN KEY (`IDUSUARIO`) REFERENCES `usuario` (`IDUSUARIO`),
  ADD CONSTRAINT `cultivocontrol_ibfk_1` FOREIGN KEY (`IDCULTIVO`) REFERENCES `cultivo` (`IDCULTIVO`) ON DELETE CASCADE,
  ADD CONSTRAINT `cultivocontrol_ibfk_2` FOREIGN KEY (`IDCONTROLCALIDAD`) REFERENCES `controlcalidad` (`IDCONTROLCALIDAD`) ON DELETE CASCADE,
  ADD CONSTRAINT `cultivocontrol_ibfk_3` FOREIGN KEY (`IDTRABAJADOR`) REFERENCES `trabajador` (`IDTRABAJADOR`) ON DELETE CASCADE;

--
-- Filtros para la tabla `salida`
--
ALTER TABLE `salida`
  ADD CONSTRAINT `salida_ibfk_1` FOREIGN KEY (`IDCULTIVO`) REFERENCES `cultivo` (`IDCULTIVO`) ON DELETE CASCADE,
  ADD CONSTRAINT `salida_ibfk_2` FOREIGN KEY (`IDTRABAJADOR`) REFERENCES `trabajador` (`IDTRABAJADOR`) ON DELETE CASCADE;

--
-- Filtros para la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD CONSTRAINT `FK_TRABAJADOR` FOREIGN KEY (`IDUSUARIO`) REFERENCES `usuario` (`IDUSUARIO`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_USUARIO` FOREIGN KEY (`IDORGANIZACION`) REFERENCES `organizacion` (`IDORGANIZACION`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
