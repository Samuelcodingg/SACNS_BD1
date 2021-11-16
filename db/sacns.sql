-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 16-11-2021 a las 01:33:37
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sacns`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `administrador_id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `contrasenia` varchar(100) COLLATE utf16_spanish_ci NOT NULL,
  `nombres` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `especialidad` varchar(100) COLLATE utf16_spanish_ci NOT NULL,
  PRIMARY KEY (`administrador_id`),
  UNIQUE KEY `usuario_2` (`usuario`),
  KEY `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`administrador_id`, `usuario`, `contrasenia`, `nombres`, `apellidos`, `especialidad`) VALUES
(123, 'admin', 'admin', 'Samuel', 'Román', 'Un crack');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

DROP TABLE IF EXISTS `alumno`;
CREATE TABLE IF NOT EXISTS `alumno` (
  `alum_id` int(11) NOT NULL AUTO_INCREMENT,
  `nivel_id` int(11) NOT NULL,
  `nombres` varchar(20) COLLATE utf16_spanish_ci NOT NULL,
  `apellidos` varchar(20) COLLATE utf16_spanish_ci NOT NULL,
  `padre_id` int(11) NOT NULL,
  PRIMARY KEY (`alum_id`),
  KEY `FK_NIVEL` (`nivel_id`),
  KEY `FK_PADRE` (`padre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`alum_id`, `nivel_id`, `nombres`, `apellidos`, `padre_id`) VALUES
(1, 5, 'Eugenio', 'Martinez', 1235),
(2, 5, 'Juancito', 'Gonzales', 2),
(3, 5, 'Aarón', 'Román', 3),
(4, 5, 'Santiago', 'Araujo', 4),
(5, 5, 'Edgar', 'Zenobio', 5),
(6, 5, 'Rosmery', 'Lazaro', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

DROP TABLE IF EXISTS `asignatura`;
CREATE TABLE IF NOT EXISTS `asignatura` (
  `asignatura_id` int(11) NOT NULL AUTO_INCREMENT,
  `nivel_id` int(11) NOT NULL,
  `docente_id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  PRIMARY KEY (`asignatura_id`),
  KEY `FK_NIVEL` (`nivel_id`),
  KEY `FK_DOCENTE` (`docente_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`asignatura_id`, `nivel_id`, `docente_id`, `nombre`) VALUES
(1, 1, 1, 'Razonamiento Matemático'),
(2, 5, 2, 'Educación Física');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura_alumno`
--

DROP TABLE IF EXISTS `asignatura_alumno`;
CREATE TABLE IF NOT EXISTS `asignatura_alumno` (
  `asalum_id` int(11) NOT NULL,
  `asignatura_id` int(11) NOT NULL,
  `alum_id` int(11) NOT NULL,
  `nota_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`asalum_id`),
  KEY `FK_ALUMNO` (`alum_id`),
  KEY `FK_NOTA` (`nota_id`),
  KEY `FK_ASIGNATURA` (`asignatura_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `asignatura_alumno`
--

INSERT INTO `asignatura_alumno` (`asalum_id`, `asignatura_id`, `alum_id`, `nota_id`) VALUES
(1, 2, 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

DROP TABLE IF EXISTS `docente`;
CREATE TABLE IF NOT EXISTS `docente` (
  `docente_id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `contrasenia` varchar(100) COLLATE utf16_spanish_ci NOT NULL,
  `nombres` varchar(20) COLLATE utf16_spanish_ci NOT NULL,
  `apellidos` varchar(20) COLLATE utf16_spanish_ci NOT NULL,
  `asignatura_id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf16_spanish_ci NOT NULL,
  `celular` int(11) NOT NULL,
  `especialidad` varchar(200) COLLATE utf16_spanish_ci NOT NULL,
  `edad` int(3) NOT NULL,
  `direccion` varchar(100) COLLATE utf16_spanish_ci NOT NULL,
  `dni` int(8) NOT NULL,
  `correo_insti` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  PRIMARY KEY (`docente_id`),
  UNIQUE KEY `usuario_2` (`usuario`),
  KEY `FK_ASIGNATURA` (`asignatura_id`),
  KEY `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`docente_id`, `usuario`, `contrasenia`, `nombres`, `apellidos`, `asignatura_id`, `email`, `celular`, `especialidad`, `edad`, `direccion`, `dni`, `correo_insti`) VALUES
(1, 'Cortez', 'cortez123', 'Augusto', 'Cortez', 1, 'cortez@gmail.com', 953662012, 'Nada.', 55, 'el infierno 666', 74512369, 'cortez@unmsm.edu.pe'),
(2, 'Paolo123', 'paolo123', 'Paolo', 'Guerrero', 2, 'paolo@fpf.com', 954125874, 'Deportista', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `falta_asistencia`
--

DROP TABLE IF EXISTS `falta_asistencia`;
CREATE TABLE IF NOT EXISTS `falta_asistencia` (
  `falta_id` int(11) NOT NULL,
  `asalum_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `justificada` varchar(3) COLLATE utf16_spanish_ci NOT NULL,
  PRIMARY KEY (`falta_id`),
  KEY `FK_ASIGNATURA` (`asalum_id`),
  KEY `asalum_id` (`asalum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

DROP TABLE IF EXISTS `horario`;
CREATE TABLE IF NOT EXISTS `horario` (
  `horario_id` int(11) NOT NULL AUTO_INCREMENT,
  `asignatura_id` int(11) NOT NULL,
  `día` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_final` time NOT NULL,
  PRIMARY KEY (`horario_id`),
  KEY `FK_ASIGNATURA` (`asignatura_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

DROP TABLE IF EXISTS `nivel`;
CREATE TABLE IF NOT EXISTS `nivel` (
  `nivel_id` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` varchar(10) COLLATE utf16_spanish_ci NOT NULL,
  `año` int(11) NOT NULL,
  PRIMARY KEY (`nivel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`nivel_id`, `nivel`, `año`) VALUES
(1, 'Secundaria', 1),
(2, 'Secundaria', 2),
(3, 'Secundaria', 3),
(4, 'Secundaria', 4),
(5, 'Secundaria', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

DROP TABLE IF EXISTS `nota`;
CREATE TABLE IF NOT EXISTS `nota` (
  `nota_id` int(11) NOT NULL,
  `asignatura_id` int(11) NOT NULL,
  `alum_id` int(11) NOT NULL,
  `trimestre` int(11) NOT NULL,
  `nota` int(11) NOT NULL,
  PRIMARY KEY (`nota_id`),
  KEY `FK_ASIGNATURA` (`asignatura_id`),
  KEY `FK_ALUMN0` (`alum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `nota`
--

INSERT INTO `nota` (`nota_id`, `asignatura_id`, `alum_id`, `trimestre`, `nota`) VALUES
(1, 2, 2, 1, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padre`
--

DROP TABLE IF EXISTS `padre`;
CREATE TABLE IF NOT EXISTS `padre` (
  `padre_id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `contrasenia` varchar(100) COLLATE utf16_spanish_ci NOT NULL,
  `nombres` varchar(20) COLLATE utf16_spanish_ci NOT NULL,
  `apellidos` varchar(20) COLLATE utf16_spanish_ci NOT NULL,
  `alum_id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf16_spanish_ci NOT NULL,
  `celular` int(11) NOT NULL,
  PRIMARY KEY (`padre_id`),
  UNIQUE KEY `usuario_2` (`usuario`),
  KEY `FK_ALUMNO` (`alum_id`),
  KEY `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=1236 DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `padre`
--

INSERT INTO `padre` (`padre_id`, `usuario`, `contrasenia`, `nombres`, `apellidos`, `alum_id`, `email`, `celular`) VALUES
(2, 'Juan', 'juan123', 'Juan', 'Gonzales', 2, 'juan@gmail.com', 958745621),
(3, 'Samuel123', 'samuel123', 'Samuel ', 'Román', 3, 'samuel@gmail.com', 953665207),
(4, 'Pedro123', 'pedro123', 'Pedro', 'Araujo', 4, 'pedro@gmail.com', 984756211),
(5, 'alonso123', 'alonso123', 'Alonso', 'Zenobio', 5, 'alonso@gmail.com', 958742153),
(6, 'vivian123', 'vivian123', 'Vivian', 'Lazaro', 6, 'vivian@gmail.com', 987412536),
(7, 'kevin', 'kevin123', 'Kevin', 'Ramos', 7, 'kevin@gmail.com', 987412369),
(8, 'Aaron', 'aaron123', 'Aarón', 'Céspedes', 8, 'aaron@gmail.com', 987111222),
(9, 'Jose1323', 'jose123', 'Jose', 'Lopez', 9, 'jose@jose.com', 954777888),
(1235, 'padre1', 'prueba1', 'adr', 'bal', 2, 'as', 934590972);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_2` FOREIGN KEY (`nivel_id`) REFERENCES `nivel` (`nivel_id`),
  ADD CONSTRAINT `alumno_ibfk_3` FOREIGN KEY (`padre_id`) REFERENCES `padre` (`padre_id`);

--
-- Filtros para la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD CONSTRAINT `asignatura_ibfk_1` FOREIGN KEY (`nivel_id`) REFERENCES `nivel` (`nivel_id`),
  ADD CONSTRAINT `asignatura_ibfk_2` FOREIGN KEY (`docente_id`) REFERENCES `docente` (`docente_id`);

--
-- Filtros para la tabla `asignatura_alumno`
--
ALTER TABLE `asignatura_alumno`
  ADD CONSTRAINT `asignatura_alumno_ibfk_1` FOREIGN KEY (`alum_id`) REFERENCES `alumno` (`alum_id`),
  ADD CONSTRAINT `asignatura_alumno_ibfk_2` FOREIGN KEY (`nota_id`) REFERENCES `nota` (`nota_id`),
  ADD CONSTRAINT `asignatura_alumno_ibfk_3` FOREIGN KEY (`asignatura_id`) REFERENCES `asignatura` (`asignatura_id`);

--
-- Filtros para la tabla `falta_asistencia`
--
ALTER TABLE `falta_asistencia`
  ADD CONSTRAINT `falta_asistencia_ibfk_1` FOREIGN KEY (`asalum_id`) REFERENCES `asignatura_alumno` (`asalum_id`);

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `horario_ibfk_2` FOREIGN KEY (`asignatura_id`) REFERENCES `asignatura` (`asignatura_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
