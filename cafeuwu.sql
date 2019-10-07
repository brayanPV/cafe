-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2019 a las 08:33:01
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

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
  `NOMBRE` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`IDACTIVIDAD`, `NOMBRE`) VALUES
(1, 'plantar coca'),
(2, 'Regar cultivo '),
(3, 'pegarlo');

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
  `PROPIEDAD4` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `analisis`
--

INSERT INTO `analisis` (`IDANALISIS`, `FECHA`, `IDCULTIVO`, `PROPIEDAD1`, `PROPIEDAD2`, `PROPIEDAD3`, `PROPIEDAD4`) VALUES
(1, '2019-06-10 01:24:25', 2, 10, 10, 14, 15),
(2, '2019-06-11 01:44:35', 6, NULL, NULL, NULL, NULL),
(3, '2019-06-11 01:45:45', 5, 10, 10, 10, 10),
(4, '2019-06-11 01:46:33', 11, 11, 11, 11, 11),
(5, '2019-06-11 01:53:59', 12, 12, 16, 56, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `controlcalidad`
--

CREATE TABLE `controlcalidad` (
  `IDCONTROLCALIDAD` int(11) NOT NULL,
  `NOMBRE` varchar(20) DEFAULT NULL,
  `IDTIPOC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `controlcalidad`
--

INSERT INTO `controlcalidad` (`IDCONTROLCALIDAD`, `NOMBRE`, `IDTIPOC`) VALUES
(1, 'CULTURAL 1', 1),
(2, 'BIOLOGICO', 1),
(3, 'QUIMICO', 1),
(4, 'QUIMICO', 2),
(5, 'FERTILIZAR', 2),
(6, 'PODAR', 2),
(7, 'MANUAL', 3),
(8, 'MECANICO', 3),
(9, 'QUIMICO', 3),
(10, 'nuevocontrolp', 1),
(11, 'prueba xd', 2),
(12, 'BIOLOGICO', 3),
(13, 'CULTURAL editado', 1),
(14, 'CULTURAL editado1', 1),
(15, 'QUIMICO 15', 1),
(16, 'AAAAAAAAAAAAA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cultivo`
--

CREATE TABLE `cultivo` (
  `IDCULTIVO` int(11) NOT NULL,
  `NOMBRE` varchar(20) DEFAULT NULL,
  `AREA` int(11) NOT NULL,
  `FECHA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cultivo`
--

INSERT INTO `cultivo` (`IDCULTIVO`, `NOMBRE`, `AREA`, `FECHA`) VALUES
(2, 'primercultivo editad', 321, '2019-06-11 05:13:20'),
(3, 'nuevo cultivo OwO', 1000, '2019-06-10 16:58:53'),
(4, 'nuevo cultivo', 1000, '2019-06-10 17:03:36'),
(5, 'nuevo cultivo', 1000, '2019-06-10 17:03:59'),
(6, 'nuevo cultivo', 1000, '2019-06-10 17:05:31'),
(7, 'nuevo cultivo', 1000, '2019-06-10 17:05:35'),
(8, 'nuevo cultivo', 1000, '2019-06-10 17:05:49'),
(9, 'nuevo cultivo', 1000, '2019-06-10 17:07:33'),
(10, 'nuevo cultivo', 1000, '2019-06-10 17:07:47'),
(11, 'cultivo boris', 10, '2019-06-10 17:14:28'),
(12, 'coca ', 120, '2019-06-11 01:53:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cultivoact`
--

CREATE TABLE `cultivoact` (
  `IDCULTIVOACT` int(11) NOT NULL,
  `IDCULTIVO` int(11) NOT NULL,
  `IDACTIVIDAD` int(11) NOT NULL,
  `IDTRABAJADOR` int(11) NOT NULL,
  `FECHA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cultivoact`
--

INSERT INTO `cultivoact` (`IDCULTIVOACT`, `IDCULTIVO`, `IDACTIVIDAD`, `IDTRABAJADOR`, `FECHA`) VALUES
(1, 2, 1, 1, '2019-06-09 20:40:32'),
(2, 2, 1, 2, '2019-06-09 20:40:32'),
(3, 2, 2, 1, '2019-06-09 20:47:11'),
(4, 2, 1, 1, '2019-06-11 03:47:25'),
(5, 12, 1, 17, '2019-06-11 03:48:29'),
(6, 2, 3, 1, '2019-06-11 06:27:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cultivocontrol`
--

CREATE TABLE `cultivocontrol` (
  `IDCULTIVOCONTROL` int(11) NOT NULL,
  `IDCULTIVO` int(11) NOT NULL,
  `IDCONTROLCALIDAD` int(11) NOT NULL,
  `IDTRABAJADOR` int(11) NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cultivocontrol`
--

INSERT INTO `cultivocontrol` (`IDCULTIVOCONTROL`, `IDCULTIVO`, `IDCONTROLCALIDAD`, `IDTRABAJADOR`, `Fecha`) VALUES
(1, 2, 9, 1, '2019-06-10 00:31:28'),
(2, 2, 5, 18, '2019-06-10 00:31:28'),
(3, 2, 1, 1, '2019-06-11 06:26:30'),
(4, 2, 1, 19, '2019-06-11 06:28:00');

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
-- Estructura de tabla para la tabla `tipotrabajador`
--

CREATE TABLE `tipotrabajador` (
  `IDTIPOT` int(11) NOT NULL,
  `DESCRIPCIO` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipotrabajador`
--

INSERT INTO `tipotrabajador` (`IDTIPOT`, `DESCRIPCIO`) VALUES
(1, 'PRIMERO'),
(2, 'SEGUNDO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `IDTRABAJADOR` int(11) NOT NULL,
  `NOMBRE` varchar(20) DEFAULT NULL,
  `APELLIDO` varchar(20) DEFAULT NULL,
  `TELEFONO` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`IDTRABAJADOR`, `NOMBRE`, `APELLIDO`, `TELEFONO`) VALUES
(1, 'MARIA 1', 'MILAGROS', '3214568547'),
(2, 'RAMON', 'jose', '3124563212'),
(17, 'Carlos', 'Pablos', '3215874696'),
(18, 'Carlos', 'Jose', '3209876123'),
(19, 'Carlos', 'MIGUEL', '3209876123'),
(20, 'MARIA EDITADA', 'MILAGROS', '3214568547'),
(21, 'MARIA EDITADA 2', 'MILAGROS', '3214568547'),
(22, 'MARIA EDITADA 3', 'MILAGROS', '3214568547'),
(23, 'MARIA EDITADA 4', 'MILAGROS', '3214568547'),
(24, 'jose', 'pablos', '3044919561'),
(25, 'MARIA 1', 'MILAGROS', '3214568547');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IDUSUARIO` int(11) NOT NULL,
  `NOMBRE` varchar(20) DEFAULT NULL,
  `APELLIDO` varchar(20) DEFAULT NULL,
  `NOMUSUARIO` varchar(20) DEFAULT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL,
  `ADMIN` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IDUSUARIO`, `NOMBRE`, `APELLIDO`, `NOMUSUARIO`, `PASSWORD`, `ADMIN`) VALUES
(1, 'ANDRES', 'BORIS', 'USUARIO1', '1234', 1),
(2, 'CARLOS', 'PABLOS', 'USUARIO2', '1234', 0),
(3, 'BRAYAN', 'PALOMINO', 'USUARIO3', '1234', 0),
(4, 'JORGE', 'GOMEZ', 'USERPRUEBA', '1234', NULL),
(5, 'MIGUEL', 'CASTRO', 'USUARIO4', '1234', 0),
(6, 'MARLON', 'BRANDO', 'USUARIO5', '1234', 0),
(7, 'JORGito', 'GOMEZ', 'USERPRUEBA', '1234', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`IDACTIVIDAD`);

--
-- Indices de la tabla `analisis`
--
ALTER TABLE `analisis`
  ADD PRIMARY KEY (`IDANALISIS`),
  ADD KEY `IDCULTIVO` (`IDCULTIVO`);

--
-- Indices de la tabla `controlcalidad`
--
ALTER TABLE `controlcalidad`
  ADD PRIMARY KEY (`IDCONTROLCALIDAD`),
  ADD KEY `IDTIPOC` (`IDTIPOC`);

--
-- Indices de la tabla `cultivo`
--
ALTER TABLE `cultivo`
  ADD PRIMARY KEY (`IDCULTIVO`);

--
-- Indices de la tabla `cultivoact`
--
ALTER TABLE `cultivoact`
  ADD PRIMARY KEY (`IDCULTIVOACT`),
  ADD KEY `IDCULTIVO` (`IDCULTIVO`),
  ADD KEY `IDACTIVIDAD` (`IDACTIVIDAD`),
  ADD KEY `IDTRABAJADOR` (`IDTRABAJADOR`);

--
-- Indices de la tabla `cultivocontrol`
--
ALTER TABLE `cultivocontrol`
  ADD PRIMARY KEY (`IDCULTIVOCONTROL`),
  ADD KEY `IDCULTIVO` (`IDCULTIVO`),
  ADD KEY `IDCONTROLCALIDAD` (`IDCONTROLCALIDAD`),
  ADD KEY `IDTRABAJADOR` (`IDTRABAJADOR`);

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
-- Indices de la tabla `tipotrabajador`
--
ALTER TABLE `tipotrabajador`
  ADD PRIMARY KEY (`IDTIPOT`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`IDTRABAJADOR`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IDUSUARIO`);

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
  MODIFY `IDANALISIS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `controlcalidad`
--
ALTER TABLE `controlcalidad`
  MODIFY `IDCONTROLCALIDAD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `cultivo`
--
ALTER TABLE `cultivo`
  MODIFY `IDCULTIVO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- AUTO_INCREMENT de la tabla `tipotrabajador`
--
ALTER TABLE `tipotrabajador`
  MODIFY `IDTIPOT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `IDTRABAJADOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IDUSUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `analisis`
--
ALTER TABLE `analisis`
  ADD CONSTRAINT `analisis_ibfk_1` FOREIGN KEY (`IDCULTIVO`) REFERENCES `cultivo` (`IDCULTIVO`) ON DELETE CASCADE;

--
-- Filtros para la tabla `controlcalidad`
--
ALTER TABLE `controlcalidad`
  ADD CONSTRAINT `controlcalidad_ibfk_1` FOREIGN KEY (`IDTIPOC`) REFERENCES `tipocontrol` (`IDTIPOC`) ON DELETE CASCADE;

--
-- Filtros para la tabla `cultivoact`
--
ALTER TABLE `cultivoact`
  ADD CONSTRAINT `cultivoact_ibfk_1` FOREIGN KEY (`IDCULTIVO`) REFERENCES `cultivo` (`IDCULTIVO`) ON DELETE CASCADE,
  ADD CONSTRAINT `cultivoact_ibfk_2` FOREIGN KEY (`IDACTIVIDAD`) REFERENCES `actividad` (`IDACTIVIDAD`) ON DELETE CASCADE,
  ADD CONSTRAINT `cultivoact_ibfk_3` FOREIGN KEY (`IDTRABAJADOR`) REFERENCES `trabajador` (`IDTRABAJADOR`) ON DELETE CASCADE;

--
-- Filtros para la tabla `cultivocontrol`
--
ALTER TABLE `cultivocontrol`
  ADD CONSTRAINT `cultivocontrol_ibfk_1` FOREIGN KEY (`IDCULTIVO`) REFERENCES `cultivo` (`IDCULTIVO`) ON DELETE CASCADE,
  ADD CONSTRAINT `cultivocontrol_ibfk_2` FOREIGN KEY (`IDCONTROLCALIDAD`) REFERENCES `controlcalidad` (`IDCONTROLCALIDAD`) ON DELETE CASCADE,
  ADD CONSTRAINT `cultivocontrol_ibfk_3` FOREIGN KEY (`IDTRABAJADOR`) REFERENCES `trabajador` (`IDTRABAJADOR`) ON DELETE CASCADE;

--
-- Filtros para la tabla `salida`
--
ALTER TABLE `salida`
  ADD CONSTRAINT `salida_ibfk_1` FOREIGN KEY (`IDCULTIVO`) REFERENCES `cultivo` (`IDCULTIVO`) ON DELETE CASCADE,
  ADD CONSTRAINT `salida_ibfk_2` FOREIGN KEY (`IDTRABAJADOR`) REFERENCES `trabajador` (`IDTRABAJADOR`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
