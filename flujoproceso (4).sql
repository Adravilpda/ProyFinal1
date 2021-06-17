-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2021 a las 01:21:23
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `flujoproceso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `ci` int(11) DEFAULT NULL,
  `rol` varchar(50) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `bandeja` varchar(50) NOT NULL,
  `notificaciones` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`ci`, `rol`, `nombre`, `apellido`, `bandeja`, `notificaciones`) VALUES
(78936900, 'U', 'Marcelo', 'Nio', 'si', 0),
(666456, 'K', 'Alfred', 'Pedraza', 'si', 0),
(77777, 'U', 'Johana', 'Romero', 'si', 0),
(71200722, 'U', 'Rosa', 'Calle', 'si', 0),
(777456, 'K', 'Robert', 'Pedraza', 'si', 0),
(777888, 'U', 'Armando', 'Rios', 'si', 0),
(123123, 'U', 'Nia', 'Walteros', 'si', 0),
(888, 'U', 'luis', 'lopez', 'si', 0),
(444, 'U', 'Aqua', 'Cure', 'si', 0),
(222, 'U', 'lucia', 'quino', 'si', 0),
(2020, 'U', 'lui', 'loza', 'si', 0),
(789789, 'U', 'Rocky', 'Balboa', 'si', 0),
(1199, 'U', 'lisa', 'simpsons', 'si', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnosinformatica`
--

CREATE TABLE IF NOT EXISTS `alumnosinformatica` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `ci` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `paterno` varchar(50) DEFAULT NULL,
  `materno` varchar(50) DEFAULT NULL,
  `boletaDeposito` varchar(500) DEFAULT NULL,
  `foto` varchar(500) DEFAULT NULL,
  `Estado` varchar(200) NOT NULL,
  `matricula` varchar(200) NOT NULL,
  `materias` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Volcado de datos para la tabla `alumnosinformatica`
--

INSERT INTO `alumnosinformatica` (`id`, `ci`, `nombre`, `paterno`, `materno`, `boletaDeposito`, `foto`, `Estado`, `matricula`, `materias`) VALUES
(37, '77777', 'Johana', 'Romero', 'santana', 'Infografia.pdf', 'Video Link.pdf', 'verificado', 'si', 'si'),
(38, '78936900', 'Marcelo', 'NioX', 'QuirogaX', 'CERTIFICADOS DIGITALES.pdf', 'CERTIFICADOS DIGITALES.pdf', 'verificado', 'si', 'si'),
(39, '71200722', 'Rosa Teresa', 'Callisaya', 'Juchani', '2017-06-23-07-44-58.jpg', 'vestidos-de-fiesta-venta-al-por-mayor-y_f562f4f4_3.jpg', 'verificado', 'si', 'si'),
(45, '777888', 'Armando', 'Riosx', 'Ticonax', '', '', 'verificado', 'si', 'si'),
(46, '123123', 'Nia', 'Walteros', 'Prince', '', '', 'verificado', 'si', 'si'),
(47, '888', 'luis', 'lopez', 'lolas', '', '', 'verificado', 'si', 'si'),
(48, '444', 'Aqua', 'Cure', 'Sorel', '', '', 'verificado', 'si', 'no'),
(49, '222', 'lucia', 'mendez', '', '', '', 'verificado', 'si', 'si'),
(50, '2020', 'lui', 'luchiani', '', '', '', 'verificado', 'si', 'si'),
(51, '789789', 'Rocky', 'Balboa', 'Romi', '', '', 'verificado', 'si', 'si'),
(52, '1199', 'lisa', 'simpsons', 'bubie', '', '', 'verificado', 'no', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bandejaalumno`
--

CREATE TABLE IF NOT EXISTS `bandejaalumno` (
  `nro` int(200) NOT NULL AUTO_INCREMENT,
  `receptor` varchar(200) NOT NULL,
  `remitente` varchar(200) NOT NULL,
  `asunto` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `visto` varchar(200) NOT NULL,
  PRIMARY KEY (`nro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=158 ;

--
-- Volcado de datos para la tabla `bandejaalumno`
--

INSERT INTO `bandejaalumno` (`nro`, `receptor`, `remitente`, `asunto`, `fecha`, `visto`) VALUES
(5, '123123', 'Alfred', 'Documentos Verificados', '2021-06-13', 'si'),
(6, '123123', 'Alfred', 'Documentos Verificados', '2021-06-14', 'si'),
(7, '123123', 'Alfred', 'Matricula Creada', '0000-00-00', 'si'),
(8, '123123', 'Alfred', 'Materias Asignadas', '0000-00-00', 'si'),
(17, '999', 'Sofi', 'Codigo Inscripcion Generado', '2021-06-14', 'no'),
(21, '999', 'Sofi', 'Documentos Ingresados', '2021-06-14', 'no'),
(22, '888', 'luis', 'Codigo Inscripcion Generado', '2021-06-14', 'si'),
(23, '888', 'luis', 'Documentos Ingresados', '2021-06-14', 'si'),
(24, '888', 'luis', 'Documentos Ingresados', '2021-06-14', 'si'),
(25, '888', 'Alfred', 'Documentos Verificados', '2021-06-14', 'no'),
(26, '888', 'Alfred', 'Documentos Verificados', '2021-06-14', 'no'),
(27, '888', 'luis', 'Ingreso de Documentos', '0000-00-00', 'si'),
(28, '888', 'Alfred', 'Matricula Creada', '2021-06-14', 'no'),
(29, '888', 'Alfred', 'Materias Asignadas', '0000-00-00', 'no'),
(30, '888', 'Alfred', 'Materias Asignadas', '0000-00-00', 'no'),
(31, '888', 'Alfred', 'Materias Asignadas', '0000-00-00', 'no'),
(32, '888', 'Alfred', 'Materias Asignadas', '0000-00-00', 'no'),
(33, '888', 'Alfred', 'Materias Asignadas', '0000-00-00', 'no'),
(34, '888', 'Alfred', 'Materias Asignadas', '0000-00-00', 'no'),
(35, '888', 'Alfred', 'Materias Asignadas', '0000-00-00', 'no'),
(36, '888', 'Alfred', 'Materias Asignadas', '0000-00-00', 'no'),
(40, '222', 'lucia', 'Codigo Inscripcion Generado', '2021-06-14', 'si'),
(41, '222', 'lucia', 'Codigo Inscripcion Generado', '2021-06-14', 'si'),
(42, '222', 'lucia', 'Documentos Ingresados', '2021-06-14', 'si'),
(43, '222', 'Alfred', 'Documentos Verificados', '2021-06-14', 'si'),
(44, '222', 'lucia', 'Informacion Estudiante Verificada', '0000-00-00', 'si'),
(45, '222', 'Alfred', 'Matricula Creada', '2021-06-14', 'si'),
(46, '222', 'Alfred', 'Materia Asignada', '2021-06-14', 'si'),
(47, '222', 'Alfred', 'Materia Asignada', '2021-06-14', 'si'),
(48, '222', 'Alfred', 'Materia Asignada', '2021-06-14', 'si'),
(49, '2020', 'lui', 'Codigo Inscripcion Generado', '2021-06-15', 'si'),
(50, '2020', 'Alfred', 'Codigo Inscripcion Generado', '2021-06-15', 'si'),
(51, '2020', 'lui', 'Documentos Ingresados', '2021-06-15', 'si'),
(52, '444', 'Alfred', 'Documentos Verificados', '2021-06-15', 'no'),
(53, '2020', 'Alfred', 'Documentos Verificados', '2021-06-15', 'si'),
(54, '2020', 'lui', 'Informacion Estudiante Verificada', '0000-00-00', 'si'),
(55, '2020', 'Alfred', 'Matricula Creada', '2021-06-15', 'si'),
(56, '2020', 'Alfred', 'Materia Asignada', '2021-06-15', 'si'),
(57, '2020', 'Alfred', 'Materia inf-111 Asignada', '2021-06-15', 'si'),
(58, '2020', 'Alfred', 'Materia Asignada', '2021-06-15', 'si'),
(59, '2020', 'Alfred', 'Materia Asignada', '2021-06-15', 'si'),
(60, '2020', 'Alfred', 'Materia Asignada', '2021-06-15', 'si'),
(61, '2020', 'Alfred', 'Materia Asignada', '2021-06-15', 'si'),
(62, '123123', 'Nia', 'Informacion Estudiante Verificada', '0000-00-00', 'si'),
(63, '123123', 'Robert', 'Matricula Creada', '2021-06-17', 'si'),
(64, '123123', 'Robert', 'Materia Asignada', '2021-06-17', 'si'),
(65, '789789', 'Rocky', 'Codigo Inscripcion Generado', '2021-06-17', 'si'),
(66, '789789', 'Rocky', 'Documentos Ingresados', '2021-06-17', 'si'),
(67, '789789', 'Robert', 'Documentos Verificados', '2021-06-17', 'si'),
(68, '789789', 'Rocky', 'Informacion Estudiante Verificada', '0000-00-00', 'si'),
(69, '789789', 'Robert', 'Matricula Creada', '2021-06-17', 'si'),
(70, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'si'),
(71, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'si'),
(72, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'si'),
(73, '789789', 'Alfred', 'Materia inf-111 Asignada', '2021-06-17', 'si'),
(74, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'si'),
(75, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'si'),
(76, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'si'),
(77, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'si'),
(78, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'si'),
(79, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'si'),
(80, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'si'),
(81, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'si'),
(82, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'si'),
(83, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'si'),
(84, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(85, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(86, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(87, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(88, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(89, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(90, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(91, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(92, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(93, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(94, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(95, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(96, '789789', 'Alfred', 'Matricula Creada', '2021-06-17', 'no'),
(97, '789789', 'Alfred', 'Matricula Creada', '2021-06-17', 'no'),
(98, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(99, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(100, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(101, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(102, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(103, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(104, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(105, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(106, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(107, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(108, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(109, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(110, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(111, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(112, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(113, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(114, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(115, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(116, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(117, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(118, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(119, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(120, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(121, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(122, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(123, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(124, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(125, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(126, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(127, '789789', 'Alfred', 'Matricula Creada', '2021-06-17', 'no'),
(128, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(129, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(130, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(131, '789789', 'Alfred', 'Matricula Creada', '2021-06-17', 'no'),
(132, '789789', 'Alfred', 'Materia Asignada', '2021-06-17', 'no'),
(133, '123123', 'Alfred', 'Matricula Creada', '2021-06-17', 'si'),
(134, '123123', 'Alfred', 'Materia Asignada', '2021-06-17', 'si'),
(135, '123123', 'Alfred', 'Matricula Creada', '2021-06-17', 'si'),
(136, '123123', 'Alfred', 'Materia Asignada', '2021-06-17', 'si'),
(137, '123123', 'Alfred', 'Matricula Creada', '2021-06-17', 'si'),
(138, '123123', 'Nia', 'Informacion Estudiante Verificada', '0000-00-00', 'si'),
(139, '123123', 'Alfred', 'Matricula Creada', '2021-06-17', 'si'),
(140, '123123', 'Alfred', 'Materia Asignada', '2021-06-17', 'si'),
(141, '123123', 'Alfred', 'Materia Asignada', '2021-06-17', 'si'),
(142, '123123', 'Alfred', 'Materia Asignada', '2021-06-17', 'si'),
(143, '123123', 'Alfred', 'Materia Asignada', '2021-06-17', 'si'),
(144, '123123', 'Alfred', 'Materia Asignada', '2021-06-17', 'si'),
(145, '123123', 'Alfred', 'Matricula Creada', '2021-06-17', 'si'),
(146, '123123', 'Alfred', 'Materia Asignada', '2021-06-17', 'si'),
(147, '1199', '', 'Codigo Inscripcion Generado', '2021-06-17', 'si'),
(148, '1199', 'lisa', 'Codigo Inscripcion Generado', '2021-06-17', 'si'),
(149, '1199', 'lisa', 'Documentos Ingresados', '2021-06-17', 'si'),
(150, '1199', 'Alfred', 'Documentos Verificados', '2021-06-17', 'si'),
(151, '444', 'Alfred', 'Matricula Creada', '2021-06-17', 'no'),
(152, '78936900', 'Alfred', 'Materia inf-111 Asignada', '2021-06-18', 'no'),
(153, '77777', 'Alfred', 'Materia inf-111 Retirada', '2021-06-18', 'no'),
(154, '77777', 'Alfred', 'Materia inf-111 Asignada', '2021-06-18', 'no'),
(155, '77777', 'Alfred', 'Materia inf-111 Retirada', '2021-06-18', 'no'),
(156, '77777', 'Alfred', 'Materia inf-111 Asignada', '2021-06-18', 'no'),
(157, '77777', 'Alfred', 'Materia inf-111 Retirada', '2021-06-18', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargatrabajo`
--

CREATE TABLE IF NOT EXISTS `cargatrabajo` (
  `nro` int(200) NOT NULL AUTO_INCREMENT,
  `ci` int(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `p4` int(200) NOT NULL,
  `p5` int(200) NOT NULL,
  `p7` int(200) NOT NULL,
  `p8` int(200) NOT NULL,
  `p9` int(200) NOT NULL,
  PRIMARY KEY (`nro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cargatrabajo`
--

INSERT INTO `cargatrabajo` (`nro`, `ci`, `nombre`, `p4`, `p5`, `p7`, `p8`, `p9`) VALUES
(1, 666456, 'Alfred', 0, 5, 2, -1, 2),
(2, 777456, 'Robert', 0, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujoproceso`
--

CREATE TABLE IF NOT EXISTS `flujoproceso` (
  `flujo` varchar(50) DEFAULT NULL,
  `proceso` varchar(50) DEFAULT NULL,
  `tipoproceso` varchar(50) DEFAULT NULL,
  `rol` varchar(50) DEFAULT NULL,
  `procesosiguiente` varchar(50) DEFAULT NULL,
  `formulario` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `flujoproceso`
--

INSERT INTO `flujoproceso` (`flujo`, `proceso`, `tipoproceso`, `rol`, `procesosiguiente`, `formulario`) VALUES
('F1', 'P1', 'datos', 'U', 'P2', 'crearcuenta.inc.php'),
('F1', 'P2', 'datos', 'U', 'P3', 'acceso.inc.php'),
('F1', 'P3', 'datos', 'U', 'P4', 'generarcodigo.inc.php'),
('F1', 'P4', 'temporal', 'U', 'IF', 'verificardocumentos.inc.php'),
('F1', 'P5', 'verificacion', 'K', 'P6', 'verificarpersonal.inc.php'),
('F1', 'P6', 'notificacion', 'U', 'IF', 'verificarestudiante.inc.php'),
('F1', 'P7', 'matriculacion', 'K', 'P8', 'crearmatricula.inc.php'),
('F1', 'P8', 'asignacion', 'K', 'P9', 'asignarparalelo.inc.php'),
('F1', 'P9', 'notificacion', 'U', 'FIN', 'materiasestudiante.inc.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inf111`
--

CREATE TABLE IF NOT EXISTS `inf111` (
  `ci` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inf111`
--

INSERT INTO `inf111` (`ci`, `nombre`) VALUES
('71200722', 'Callisaya Juchani Rosa Teresa'),
('777888', 'Riosx Ticonax Armando'),
('123123', 'Walteros Prince Nia'),
('888', 'lopez lolas luis'),
('2020', 'luchiani  lui'),
('789789', 'Balboa Romi Rocky'),
('78936900', 'NioX QuirogaX Marcelo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inf112`
--

CREATE TABLE IF NOT EXISTS `inf112` (
  `ci` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inf112`
--

INSERT INTO `inf112` (`ci`, `nombre`) VALUES
('78936900', 'NioX QuirogaX Marcelo'),
('77777', 'Romero santana Johana'),
('71200722', 'Callisaya Juchani Rosa Teresa'),
('888', 'lopez lolas luis'),
('2020', 'luchiani  lui'),
('789789', 'Balboa Romi Rocky'),
('123123', 'Walteros Prince Nia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inf113`
--

CREATE TABLE IF NOT EXISTS `inf113` (
  `ci` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inf113`
--

INSERT INTO `inf113` (`ci`, `nombre`) VALUES
('78936900', 'NioX QuirogaX Marcelo'),
('77777', 'Romero santana Johana'),
('123123', 'Walteros Prince Nia'),
('888', 'lopez lolas luis'),
('2020', 'luchiani  lui');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lab111`
--

CREATE TABLE IF NOT EXISTS `lab111` (
  `ci` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lab111`
--

INSERT INTO `lab111` (`ci`, `nombre`) VALUES
('78936900', 'NioX QuirogaX Marcelo'),
('77777', 'Romero santana Johana'),
('71200722', 'Callisaya Juchani Rosa Teresa'),
('777888', 'Riosx Ticonax Armando'),
('123123', 'Walteros Prince Nia'),
('888', 'lopez lolas luis'),
('2020', 'luchiani  lui'),
('789789', 'Balboa Romi Rocky');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lin116`
--

CREATE TABLE IF NOT EXISTS `lin116` (
  `ci` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lin116`
--

INSERT INTO `lin116` (`ci`, `nombre`) VALUES
('78936900', 'NioX QuirogaX Marcelo'),
('77777', 'Romero santana Johana'),
('123123', 'Walteros Prince Nia'),
('888', 'lopez lolas luis'),
('789789', 'Balboa Romi Rocky');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mat114`
--

CREATE TABLE IF NOT EXISTS `mat114` (
  `ci` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mat114`
--

INSERT INTO `mat114` (`ci`, `nombre`) VALUES
('78936900', 'NioX QuirogaX Marcelo'),
('77777', 'Romero santana Johana'),
('888', 'lopez lolas luis'),
('222', 'mendez  lucia'),
('789789', 'Balboa Romi Rocky');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mat115`
--

CREATE TABLE IF NOT EXISTS `mat115` (
  `ci` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mat115`
--

INSERT INTO `mat115` (`ci`, `nombre`) VALUES
('78936900', 'NioX QuirogaX Marcelo'),
('77777', 'Romero santana Johana'),
('123123', 'Walteros Prince Nia'),
('888', 'lopez lolas luis'),
('222', 'mendez  lucia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
  `idmat` int(200) NOT NULL AUTO_INCREMENT,
  `sigla` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cupos` int(200) NOT NULL,
  `inscritos` int(200) NOT NULL,
  PRIMARY KEY (`idmat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`idmat`, `sigla`, `nombre`, `cupos`, `inscritos`) VALUES
(2, 'inf-111', 'introduccion a la informatica', 52, 8),
(3, 'inf-112', 'organizacion de computadoras', 53, 7),
(4, 'inf-113', 'laboratorio de computacion', 55, 5),
(5, 'mat-114', 'matematica discreta I', 95, 5),
(6, 'mat-115', 'analisis matematico I', 95, 5),
(7, 'lin-116', 'gramatica española', 55, 5),
(8, 'lab-111', 'laboratorio de inf-111', 52, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento`
--

CREATE TABLE IF NOT EXISTS `seguimiento` (
  `usuario` varchar(50) DEFAULT NULL,
  `ci` int(200) NOT NULL,
  `codigo` int(200) NOT NULL,
  `flujo` varchar(50) DEFAULT NULL,
  `proceso` varchar(50) DEFAULT NULL,
  `tramite` int(11) DEFAULT NULL,
  `fechainicio` date DEFAULT NULL,
  `fechafin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seguimiento`
--

INSERT INTO `seguimiento` (`usuario`, `ci`, `codigo`, `flujo`, `proceso`, `tramite`, `fechainicio`, `fechafin`) VALUES
('Johana', 77777, 5625152, 'F1', 'P9', 100, '0000-00-00', '0000-00-00'),
('Marcelo', 78936900, 5653228, 'F1', 'P9', 101, '0000-00-00', '0000-00-00'),
('Rosa', 71200722, 8205109, 'F1', 'P9', 102, '0000-00-00', '0000-00-00'),
('Armando', 777888, 6468200, 'F1', 'P9', 103, '0000-00-00', '0000-00-00'),
('Nia', 123123, 9168854, 'F1', 'P9', 104, '0000-00-00', '0000-00-00'),
('luis', 888, 9143219, 'F1', 'P9', 105, '2021-06-14', '2021-06-14'),
('Aqua', 444, 6445617, 'F1', 'P8', 106, '2021-06-14', '0000-00-00'),
('lucia', 222, 6619720, 'F1', 'P9', 107, '2021-06-14', '0000-00-00'),
('lui', 2020, 9267273, 'F1', 'P9', 108, '2021-06-15', '0000-00-00'),
('Rocky', 789789, 5509033, 'F1', 'P9', 109, '2021-06-17', '0000-00-00'),
('', 1199, 5029449, 'F1', 'P6', 110, '2021-06-17', '0000-00-00'),
('lisa', 1199, 8140564, 'F1', 'P6', 111, '2021-06-17', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
