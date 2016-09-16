CREATE DATABASE investigadores DEFAULT CHARSET utf8 COLLATE utf8_general_ci;
USE investigadores;

-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-09-2016 a las 04:14:27
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `investigadores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceso`
--

CREATE TABLE IF NOT EXISTS `acceso` (
  `id_acceso` int(11) NOT NULL,
  `tipo_documento` varchar(100) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `id_objetivo` int(11) NOT NULL,
  `id_tema` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `num_horas` varchar(100) NOT NULL,
  `id_especific` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acceso`
--

INSERT INTO `acceso` (`id_acceso`, `tipo_documento`, `fecha`, `hora`, `id_objetivo`, `id_tema`, `id_usuario`, `num_horas`, `id_especific`) VALUES
(0, 'notaria', '0000-00-00 00:00:00', '00:00:00', 0, 0, 0, '', 0),
(0, 'historia', '0000-00-00 00:00:00', '00:00:00', 0, 0, 0, '', 0),
(0, 'historico', '0000-00-00 00:00:00', '00:00:00', 0, 0, 0, '', 0),
(0, 'sfnjdf', '0000-00-00 00:00:00', '00:00:00', 0, 0, 0, '', 0),
(0, '', '0000-00-00 00:00:00', '00:00:00', 0, 0, 0, '', 0),
(0, '', '0000-00-00 00:00:00', '00:00:00', 0, 0, 0, '', 0),
(0, '', '0000-00-00 00:00:00', '00:00:00', 0, 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `costo`
--

CREATE TABLE IF NOT EXISTS `costo` (
  `id_cost` int(11) NOT NULL,
  `fotocopias` varchar(100) DEFAULT NULL,
  `id_rep` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especificar`
--

CREATE TABLE IF NOT EXISTS `especificar` (
  `id_espec` int(11) NOT NULL,
  `seccion` varchar(50) DEFAULT NULL,
  `serie` varchar(50) DEFAULT NULL,
  `legajo` varchar(50) DEFAULT NULL,
  `caja` varchar(50) DEFAULT NULL,
  `expediente` varchar(50) DEFAULT NULL,
  `lidro` varchar(50) NOT NULL,
  `cuaderno` varchar(50) DEFAULT NULL,
  `año_buscar` year(4) DEFAULT NULL,
  `atendido_po` varchar(100) DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
  `id_foto` int(11) NOT NULL,
  `foto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `loguin`
--

CREATE TABLE IF NOT EXISTS `loguin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `contraseña` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `estado` smallint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`usuario`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objetivo`
--

CREATE TABLE IF NOT EXISTS `objetivo` (
  `id_obj` int(11) NOT NULL,
  `objetivo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `objetivo`
--

INSERT INTO `objetivo` (`id_obj`, `objetivo`) VALUES
(0, 'tesis'),
(0, 'tesis'),
(0, 'dsfnjfnsdjfn'),
(0, ''),
(0, ''),
(0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referencias`
--

CREATE TABLE IF NOT EXISTS `referencias` (
  `id_ref` int(11) DEFAULT NULL,
  `recomendacion` varchar(100) DEFAULT NULL,
  `id_usua` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `referencias`
--

INSERT INTO `referencias` (`id_ref`, `recomendacion`, `id_usua`) VALUES
(NULL, 'profesor de historia', NULL),
(NULL, 'mcn.zcdish', NULL),
(NULL, '', NULL),
(NULL, 'profesor bios', NULL),
(NULL, '', NULL),
(NULL, 'bvhjbdv', NULL),
(NULL, '', NULL),
(NULL, '', NULL),
(NULL, '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reproduccion`
--

CREATE TABLE IF NOT EXISTS `reproduccion` (
  `id_rep` int(11) NOT NULL,
  `fotocopias` varchar(100) DEFAULT NULL,
  `transcripcion` varchar(50) DEFAULT NULL,
  `escaneo` varchar(50) DEFAULT NULL,
  `otro` varchar(100) DEFAULT NULL,
  `id_especific` int(11) NOT NULL,
  `fotos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reproduccion`
--

INSERT INTO `reproduccion` (`id_rep`, `fotocopias`, `transcripcion`, `escaneo`, `otro`, `id_especific`, `fotos`) VALUES
(0, '45', 'no', '54', '', 0, '45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE IF NOT EXISTS `temas` (
  `id_tema` int(11) NOT NULL,
  `tema` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `temas`
--

INSERT INTO `temas` (`id_tema`, `tema`) VALUES
(0, 'contemporanea'),
(0, 'historia'),
(0, 'jnccds'),
(0, ''),
(0, ''),
(0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario_id` smallint(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `paterno` varchar(30) NOT NULL,
  `materno` varchar(30) NOT NULL,
  `nombres` varchar(35) NOT NULL,
  `tipo_documento` varchar(50) NOT NULL,
  `num_documento` varchar(50) NOT NULL,
  `nacionalidad` varchar(50) NOT NULL,
  `reside` varchar(50) NOT NULL,
  `ocupacion` varchar(50) NOT NULL,
  `entidad` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `foto` blob,
  `id_log` int(11) NOT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `paterno`, `materno`, `nombres`, `tipo_documento`, `num_documento`, `nacionalidad`, `reside`, `ocupacion`, `entidad`, `email`, `telefono`, `direccion`, `foto`, `id_log`) VALUES
(00001, 'Franck', 'Guttenbergh', 'Alexander', 'Pasaporte', '1321465798454', 'Germany', 'Franckfurth', 'Docente', 'Universidad de Franckfurth', 'franck_g@hotmail.com', '0519873161', 'Jr.', NULL, 1),
(00002, 'Apaza', 'Tiicona', 'Solinda', 'DNI', '43128348', 'Peruana', 'Puno', 'Estudiante', 'Una - puno', 'solindapaza@gmail.com', 'no tiene', 'barrio chejoña jr altiplano 464', NULL, 0),
(00007, 'Mamani', 'Mamani', 'Edit Nancy', 'DNI', '46952244', 'Peruana', 'Puno', 'Estudiante', 'Una - puno', 'edith_1_4@hotmail.com', '971403147', 'barrio villa florida 642', NULL, 0),
(00008, '', '', '', '', '', '', '', '', '', '', '', '', NULL, 0),
(00009, 'paco', 'montoya', 'mary', 'DNI', '', 'peruana', 'PUNO', 'informatico', '', '', '', '', NULL, 0),
(00010, '', '', '', '', '456666', '', '', '', '', '', '', '', NULL, 0),
(00011, 'paco', 'gonzales', 'mary', 'DNI', '456666', 'peruano', 'PUNO', 'informatico', 'archivo regional', 'cocomoncho3@gmail.com', '123654789', 'jr incas 123', NULL, 0),
(00016, '', '', '', '', '', '', '', '', '', '', '', '', NULL, 0),
(00017, '', '', '', '', '', '', '', '', '', '', '', '', NULL, 0),
(00018, '', '', '', '', '', '', '', '', '', '', '', '', NULL, 0),
(00019, '', '', '', '', '', '', '', '', '', '', '', '', NULL, 0),
(00020, '', '', '', 'notaria', '', '', '', '', '', '', '', '', NULL, 0),
(00021, '', '', '', 'historia', '', '', '', '', '', '', '', '', NULL, 0),
(00022, '', '', '', 'historico', '', '', '', '', '', '', '', '', NULL, 0),
(00023, '', '', '', 'sfnjdf', '', '', '', '', '', '', '', '', NULL, 0),
(00024, '', '', '', '', '', '', '', '', '', '', '', '', NULL, 0),
(00025, '', '', '', '', '', '', '', '', '', '', '', '', NULL, 0),
(00026, '', '', '', '', '', '', '', '', '', '', '', '', NULL, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
