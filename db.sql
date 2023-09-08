-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 08-09-2023 a las 18:43:17
-- Versión del servidor: 8.0.33
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adjuntos_general`
--

CREATE TABLE `adjuntos_general` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `descripcion` varchar(150) DEFAULT NULL,
  `link_desc` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `stat` int DEFAULT NULL,
  `link_desc_pj` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `adjuntos_general`
--

INSERT INTO `adjuntos_general` (`id`, `id_general`, `descripcion`, `link_desc`, `stat`, `link_desc_pj`) VALUES
(5, 25, 'prueba 1', NULL, 2, 'vistas/adjuntos/adjuntos_g_pj/25_64cb4a33a7cab.pdf'),
(6, 36, '', 'vistas/adjuntos/adjuntos_g_pn/36_64d68ea6673dc.jpeg', 1, NULL),
(7, 36, '', 'vistas/adjuntos/adjuntos_g_pn/36_64d68eb66c5aa.jpeg', 1, NULL),
(8, 36, '', 'vistas/adjuntos/adjuntos_g_pn/36_64d68ec67155d.pdf', 1, NULL),
(9, 36, '', 'vistas/adjuntos/adjuntos_g_pn/36_64d68ed53837f.pdf', 1, NULL),
(10, 36, '', 'vistas/adjuntos/adjuntos_g_pn/36_64d68fcb5867e.pdf', 1, NULL),
(11, 37, '', 'vistas/adjuntos/adjuntos_g_pn/37_64d79a3ab8d8d.jpeg', 1, NULL),
(12, 37, '', 'vistas/adjuntos/adjuntos_g_pn/37_64d79a4dcbf5c.jpeg', 1, NULL),
(13, 37, '', 'vistas/adjuntos/adjuntos_g_pn/37_64d79a5aa7b77.jpeg', 1, NULL),
(14, 37, '', 'vistas/adjuntos/adjuntos_g_pn/37_64d79ab45626d.jpeg', 1, NULL),
(15, 42, 'DOCUMENTOS DEL CLIENTE', 'vistas/adjuntos/adjuntos_g_pn/42_64e5087a784ea.pdf', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_reporte_pb`
--

CREATE TABLE `categoria_reporte_pb` (
  `id` int NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `descripcion` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `stat` int NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_adjuntos`
--

CREATE TABLE `cc_adjuntos` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `fdcad_documento_identidad` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fdcad_recibo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fdcad_aviso_operaciones` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fdcad_evidencia_ingresos` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_adjuntos`
--

INSERT INTO `cc_adjuntos` (`id`, `id_general`, `fdcad_documento_identidad`, `fdcad_recibo`, `fdcad_aviso_operaciones`, `fdcad_evidencia_ingresos`) VALUES
(1, 7, NULL, NULL, NULL, NULL),
(2, 8, NULL, NULL, NULL, NULL),
(3, 9, NULL, NULL, NULL, NULL),
(4, 10, NULL, NULL, NULL, NULL),
(5, 11, NULL, NULL, NULL, NULL),
(6, 12, NULL, NULL, NULL, NULL),
(7, 13, NULL, NULL, NULL, NULL),
(8, 14, NULL, NULL, NULL, NULL),
(9, 15, NULL, NULL, NULL, NULL),
(10, 16, NULL, NULL, NULL, NULL),
(11, 17, NULL, NULL, NULL, NULL),
(12, 18, 'vistas/adjuntos/cedula/18_64937cef5dc91.png', NULL, NULL, NULL),
(13, 19, NULL, NULL, NULL, NULL),
(14, 20, NULL, NULL, NULL, NULL),
(15, 21, NULL, NULL, NULL, NULL),
(16, 22, NULL, NULL, NULL, NULL),
(17, 23, NULL, NULL, NULL, NULL),
(18, 24, NULL, NULL, NULL, NULL),
(19, 25, NULL, NULL, NULL, NULL),
(20, 26, NULL, NULL, NULL, NULL),
(21, 27, 'vistas/adjuntos/cedula/27_64a6fa80057ba.pdf', NULL, NULL, NULL),
(22, 28, 'vistas/adjuntos/cedula/28_64a7099d59782.txt', NULL, NULL, NULL),
(23, 29, 'vistas/adjuntos/cedula/29_64a9dc4677735.jpg', NULL, NULL, NULL),
(24, 30, NULL, NULL, NULL, NULL),
(25, 31, NULL, NULL, NULL, NULL),
(26, 32, NULL, NULL, NULL, NULL),
(27, 33, NULL, NULL, NULL, NULL),
(28, 34, NULL, NULL, NULL, NULL),
(29, 35, NULL, NULL, NULL, NULL),
(30, 36, 'vistas/adjuntos/cedula/36_64d68de303ad6.pdf', NULL, NULL, NULL),
(31, 37, NULL, NULL, NULL, NULL),
(32, 38, NULL, NULL, NULL, NULL),
(33, 39, NULL, NULL, NULL, NULL),
(34, 40, NULL, NULL, NULL, NULL),
(35, 41, NULL, NULL, NULL, NULL),
(36, 42, 'vistas/adjuntos/cedula/42_64dd5a83d15a0.pdf', NULL, NULL, NULL),
(37, 43, NULL, NULL, NULL, NULL),
(38, 44, NULL, NULL, NULL, NULL),
(39, 45, NULL, NULL, NULL, NULL),
(40, 46, NULL, NULL, NULL, NULL),
(41, 47, NULL, NULL, NULL, NULL),
(42, 48, NULL, NULL, NULL, NULL),
(43, 49, NULL, NULL, NULL, NULL),
(44, 50, NULL, NULL, NULL, NULL),
(45, 51, NULL, NULL, NULL, NULL),
(46, 52, NULL, NULL, NULL, NULL),
(47, 53, NULL, NULL, NULL, NULL),
(48, 54, NULL, NULL, NULL, NULL),
(49, 55, NULL, NULL, NULL, NULL),
(50, 56, NULL, NULL, NULL, NULL),
(51, 57, NULL, NULL, NULL, NULL),
(52, 58, NULL, NULL, NULL, NULL),
(53, 59, NULL, NULL, NULL, NULL),
(54, 60, NULL, NULL, NULL, NULL),
(55, 61, NULL, NULL, NULL, NULL),
(56, 63, NULL, NULL, NULL, NULL),
(57, 64, NULL, NULL, NULL, NULL),
(58, 65, NULL, NULL, NULL, NULL),
(59, 66, NULL, NULL, NULL, NULL),
(60, 67, 'vistas/adjuntos/cedula/67_64e6888d1da90.jpeg', NULL, NULL, NULL),
(61, 68, NULL, NULL, NULL, NULL),
(62, 69, NULL, NULL, NULL, NULL),
(63, 70, NULL, NULL, NULL, NULL),
(64, 71, NULL, NULL, NULL, NULL),
(65, 72, NULL, NULL, NULL, NULL),
(66, 73, NULL, NULL, NULL, NULL),
(67, 74, NULL, NULL, NULL, NULL),
(68, 75, NULL, NULL, NULL, NULL),
(69, 76, NULL, NULL, NULL, NULL),
(70, 77, NULL, NULL, NULL, NULL),
(71, 78, NULL, NULL, NULL, NULL),
(72, 79, NULL, NULL, NULL, NULL),
(73, 80, NULL, NULL, NULL, NULL),
(74, 81, 'vistas/adjuntos/cedula/81_64ecfb0f982af.jpg', NULL, NULL, NULL),
(75, 82, NULL, NULL, NULL, NULL),
(76, 83, NULL, NULL, NULL, NULL),
(77, 84, NULL, NULL, NULL, NULL),
(78, 85, NULL, NULL, NULL, NULL),
(79, 86, NULL, NULL, NULL, NULL),
(80, 87, NULL, NULL, NULL, NULL),
(81, 88, NULL, NULL, NULL, NULL),
(82, 89, NULL, NULL, NULL, NULL),
(83, 90, NULL, NULL, NULL, NULL),
(84, 91, NULL, NULL, NULL, NULL),
(85, 92, NULL, NULL, NULL, NULL),
(86, 93, NULL, NULL, NULL, NULL),
(87, 94, NULL, NULL, NULL, NULL),
(88, 95, NULL, NULL, NULL, NULL),
(89, 96, NULL, NULL, NULL, NULL),
(90, 97, NULL, NULL, NULL, NULL),
(91, 98, NULL, NULL, NULL, NULL),
(92, 99, NULL, NULL, NULL, NULL),
(93, 100, NULL, NULL, NULL, NULL),
(94, 101, NULL, NULL, NULL, NULL),
(95, 102, NULL, NULL, NULL, NULL),
(96, 103, NULL, NULL, NULL, NULL),
(97, 104, NULL, NULL, NULL, NULL),
(98, 105, NULL, NULL, NULL, NULL),
(99, 106, NULL, NULL, NULL, NULL),
(100, 107, NULL, NULL, NULL, NULL),
(101, 108, NULL, NULL, NULL, NULL),
(102, 109, NULL, NULL, NULL, NULL),
(103, 110, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_beneficiario`
--

CREATE TABLE `cc_beneficiario` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `fb_cliete_tercero` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fb_relacion_familiar_tercero` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fb_relacion_detalle` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fb_primer_nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fb_segundo_nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fb_apellido_paterno` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fb_apellido_materno` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fb_apellido_casada` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fb_pais_nacimiento` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fb_fecha_nacimiento` date DEFAULT NULL,
  `fb_nacionaidad` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fb_genero` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fb_estado_civil` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fb_identificacion` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fb_pais_residencia` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fb_direccion_residencial` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fb_pais_residencia_fiscal` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fb_email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fb_telefono_residencia` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fb_telefono_movil` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fb_profesion` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fb_ocupacion` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fb_lugar_trabajo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fb_direccion_trabajo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_beneficiario`
--

INSERT INTO `cc_beneficiario` (`id`, `id_general`, `fb_cliete_tercero`, `fb_relacion_familiar_tercero`, `fb_relacion_detalle`, `fb_primer_nombre`, `fb_segundo_nombre`, `fb_apellido_paterno`, `fb_apellido_materno`, `fb_apellido_casada`, `fb_pais_nacimiento`, `fb_fecha_nacimiento`, `fb_nacionaidad`, `fb_genero`, `fb_estado_civil`, `fb_identificacion`, `fb_pais_residencia`, `fb_direccion_residencial`, `fb_pais_residencia_fiscal`, `fb_email`, `fb_telefono_residencia`, `fb_telefono_movil`, `fb_profesion`, `fb_ocupacion`, `fb_lugar_trabajo`, `fb_direccion_trabajo`) VALUES
(23, 25, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 26, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 27, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 28, '110BFF', '111BFF', '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, 29, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 30, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, 31, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, 32, '110BFF', '111BFF', 'HIJO ', 'SARA', 'SOFIA ', 'CARRILLO ', 'Carrillo Oro', '', 'PA', '2023-07-06', 'PA', '02GEN', '04ECL', '8-001-0010', 'PA', 'los robles calle 2da\r\ncasa 255', '', 'ocarrillooro19@gmail.com', '+50760655301', '', '45PRO', '', 'ESTUDIANTE ', ''),
(31, 33, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, 34, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, 35, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, 36, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, 37, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, 38, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, 39, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(38, 40, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, 41, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(40, 42, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(41, 43, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(42, 44, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(43, 45, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, 46, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, 47, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, 48, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, 49, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, 50, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, 51, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(51, 53, NULL, '111BFF', 'HERMANA', 'ANA', 'KAREN', 'SERRANO', 'MONTENEGRO', '', 'PA', '1995-04-09', 'PA', '02GEN', '04ECL', '8-919-105', 'PA', 'PANAMA, CLAYTON, CALLE GUANABANA', '', '', '', '', '', '', '', ''),
(52, 54, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(53, 55, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, 56, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(55, 57, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(56, 58, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(61, 64, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(62, 65, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(63, 66, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(64, 67, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(66, 69, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(67, 70, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(68, 71, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(69, 72, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(70, 73, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(71, 74, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(72, 75, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(73, 76, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(74, 77, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(75, 78, '110BFF', '111BFF', 'Sobrina', 'AMARILIS', 'SANTIMATEO', 'DUTARY', '', '', 'PA', '1979-12-29', 'PA', '02GEN', '04ECL', '8-746-1969', 'PA', 'DON BOSCO TORRE 200', 'PA', '', '', '61127107', '15PRO', '15PRO', 'CORONA INTERNACIONAL  DE PANAMA', 'El carmen calle Ramon Arias'),
(76, 79, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(77, 80, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(78, 81, '109BFF', NULL, '', '', '', '', '', '', 'PA', '1970-01-01', '', '', '', '', 'PA', '', 'PA', '', '', '', '', '', '', ''),
(79, 82, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(80, 83, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(81, 84, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(82, 85, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(83, 86, '110BFF', '111BFF', 'HIJA', 'CLAUDIA', 'ANDREA', 'TEZANOS', 'SERRANO', '', 'PA', '1994-12-20', 'PA', '02GEN', '04ECL', '8-888-656', 'PA', 'URB. RAINFOREST, VILLAS RAINFOREST CASA A-78, CALLE 2DA', 'PA', 'clautezanos@gmail.com', '', '63213209', '45PRO', '45PRO', '', ''),
(84, 87, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(85, 88, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(86, 89, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(87, 90, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(88, 91, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(89, 92, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(90, 93, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(91, 94, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(92, 95, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(93, 96, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(94, 97, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(95, 98, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(96, 99, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(97, 100, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(98, 101, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(99, 102, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(100, 103, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(101, 104, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(102, 105, NULL, '111BFF', 'esposa', 'YOSELIN', 'GOMEZ', 'FLORENTINO', '', '', 'DO', '1978-09-25', 'DO', '02GEN', '05ECL', 'RD5190920', 'PA', 'PANAMA COLON', '', '', '', '+50764542536', '13PRO', '', '', ''),
(103, 106, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(104, 107, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(105, 108, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(106, 109, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(107, 110, '110BFF', '111BFF', 'Hija', 'Alexa', 'Nicole', 'Sanchez', 'Young', '', 'PA', '2023-05-21', 'PA', '02GEN', '04ECL', '8-995-1110', 'PA', 'dorado lakes casa 80', '', '', '', '', '45PRO', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_declaracion`
--

CREATE TABLE `cc_declaracion` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `fd_actividad_principal` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fd_otras_fuentes` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fd_limite_compra` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fd_metodo_pago_1` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fd_metodo_pago_2` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fd_forma_pago_1` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_declaracion`
--

INSERT INTO `cc_declaracion` (`id`, `id_general`, `fd_actividad_principal`, `fd_otras_fuentes`, `fd_limite_compra`, `fd_metodo_pago_1`, `fd_metodo_pago_2`, `fd_forma_pago_1`) VALUES
(24, 25, '81FUE', '85FUE', '94LIM', '102MDP', '102MDP', '90FDP'),
(25, 26, '', '', '', '', '', ''),
(26, 27, '78FUE', '87FUE', '93LIM', '108MDP', '102MDP', '91FDP'),
(27, 28, '', '', '', '', '', ''),
(28, 29, '', '', '', '', '', ''),
(29, 30, '', '', '', '', '', ''),
(30, 31, '81FUE', '83FUE', '94LIM', '101MDP', '101MDP', '90FDP'),
(31, 32, '77FUE', '', '94LIM', '101MDP', '108MDP', '91FDP'),
(32, 33, '77FUE', '82FUE', '93LIM', '101MDP', '', '90FDP'),
(33, 34, '77FUE', '89FUE', '99LIM', '101MDP', '', '91FDP'),
(34, 35, '77FUE', '85FUE', '94LIM', '101MDP', '108MDP', '91FDP'),
(35, 36, '77FUE', '', '', '101MDP', '101MDP', '91FDP'),
(36, 37, '', '', '', '', '', ''),
(37, 38, '77FUE', '', '', '', '', '91FDP'),
(38, 39, '', '', '', '', '', ''),
(39, 40, '77FUE', '', '', '', '', '90FDP'),
(40, 41, '77FUE', '', '93LIM', '', '', '91FDP'),
(41, 42, '77FUE', '89FUE', '93LIM', '108MDP', '101MDP', '91FDP'),
(42, 43, '77FUE', '86FUE', '95LIM', '106MDP', '102MDP', '91FDP'),
(43, 44, '', '', '', '', '', ''),
(44, 45, '77FUE', '89FUE', '93LIM', '101MDP', '107MDP', '91FDP'),
(45, 46, '80FUE', '83FUE', '93LIM', '102MDP', '108MDP', '91FDP'),
(46, 47, '77FUE', '89FUE', '94LIM', '101MDP', '', '91FDP'),
(47, 48, '77FUE', '87FUE', '93LIM', '101MDP', '101MDP', '91FDP'),
(48, 49, '77FUE', '89FUE', '93LIM', '102MDP', '102MDP', '90FDP'),
(49, 50, '81FUE', '83FUE', '93LIM', '', '', '90FDP'),
(50, 51, '', '', '', '', '', ''),
(52, 53, '', '', '', '', '', ''),
(53, 54, '81FUE', '', '', '', '', '90FDP'),
(54, 55, '79FUE', '85FUE', '97LIM', '101MDP', '106MDP', '90FDP'),
(55, 56, '78FUE', '87FUE', '', '101MDP', '101MDP', ''),
(56, 57, '77FUE', '', '94LIM', '105MDP', '', '91FDP'),
(57, 58, '81FUE', '', '', '', '', '90FDP'),
(62, 64, '79FUE', '86FUE', '94LIM', '101MDP', '102MDP', '90FDP'),
(63, 65, '77FUE', '', '', '108MDP', '106MDP', '91FDP'),
(64, 66, NULL, NULL, NULL, NULL, '', NULL),
(65, 67, '77FUE', '89FUE', '93LIM', '101MDP', '104MDP', '90FDP'),
(67, 69, '77FUE', '89FUE', '99LIM', '108MDP', '101MDP', '91FDP'),
(68, 70, '79FUE', '83FUE', '93LIM', '101MDP', '', '91FDP'),
(69, 71, '77FUE', '89FUE', '93LIM', '101MDP', '', '91FDP'),
(70, 72, '', '', '', '', '', ''),
(71, 73, '77FUE', '89FUE', '93LIM', '101MDP', '106MDP', '90FDP'),
(72, 74, '77FUE', '89FUE', '93LIM', '101MDP', '108MDP', '91FDP'),
(73, 75, '77FUE', '86FUE', '', '', '', '91FDP'),
(74, 76, '78FUE', '82FUE', '94LIM', '101MDP', '101MDP', '90FDP'),
(75, 77, '77FUE', '', '93LIM', '', '', '91FDP'),
(76, 78, '78FUE', '87FUE', '93LIM', '101MDP', '106MDP', '90FDP'),
(77, 79, '79FUE', '85FUE', '95LIM', '101MDP', '106MDP', '91FDP'),
(78, 80, '77FUE', '', '93LIM', '', '', ''),
(79, 81, '77FUE', '89FUE', '93LIM', '105MDP', '106MDP', '91FDP'),
(80, 82, '', '', '', '', '', ''),
(81, 83, '77FUE', '89FUE', '93LIM', '101MDP', '105MDP', '91FDP'),
(82, 84, '77FUE', '', '', '106MDP', '101MDP', '90FDP'),
(83, 85, '77FUE', '89FUE', '93LIM', '105MDP', '101MDP', '91FDP'),
(84, 86, '77FUE', '89FUE', '93LIM', '102MDP', '102MDP', '90FDP'),
(85, 87, '77FUE', '82FUE', '93LIM', '101MDP', '105MDP', '91FDP'),
(86, 88, '', '', '', '', '', ''),
(87, 89, '78FUE', '88FUE', '93LIM', '101MDP', '', '90FDP'),
(88, 90, '79FUE', '85FUE', '93LIM', '', '', '90FDP'),
(89, 91, '77FUE', '89FUE', '99LIM', '101MDP', '101MDP', '91FDP'),
(90, 92, '', '', '', '', '', ''),
(91, 93, '', '', '', '', '', ''),
(92, 94, '78FUE', '89FUE', '', '', '', ''),
(93, 95, '77FUE', '89FUE', '93LIM', '101MDP', '102MDP', '91FDP'),
(94, 96, '', '', '', '', '', ''),
(95, 97, '77FUE', '89FUE', '93LIM', '101MDP', '101MDP', '91FDP'),
(96, 98, '', '', '', '', '', ''),
(97, 99, '77FUE', '83FUE', '93LIM', '101MDP', '101MDP', '90FDP'),
(98, 100, '79FUE', '83FUE', '93LIM', '101MDP', '101MDP', '91FDP'),
(99, 101, '77FUE', '89FUE', '93LIM', '101MDP', '102MDP', '91FDP'),
(100, 102, '77FUE', '89FUE', '93LIM', '101MDP', '101MDP', '91FDP'),
(101, 103, '77FUE', '83FUE', '94LIM', '108MDP', '101MDP', '91FDP'),
(102, 104, '77FUE', '89FUE', '94LIM', '102MDP', '102MDP', '91FDP'),
(103, 105, '', '', '', '', '', ''),
(104, 106, '77FUE', '89FUE', '93LIM', '101MDP', '106MDP', '90FDP'),
(105, 107, '77FUE', '89FUE', '93LIM', '102MDP', '102MDP', '91FDP'),
(106, 108, '79FUE', '89FUE', '93LIM', '101MDP', '101MDP', '91FDP'),
(107, 109, '79FUE', '83FUE', '93LIM', '', '', '90FDP'),
(108, 110, '77FUE', '85FUE', '93LIM', '105MDP', '101MDP', '90FDP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_declaracion_jurada`
--

CREATE TABLE `cc_declaracion_jurada` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `fdc_nombre_completo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fdc_fecha` date DEFAULT NULL,
  `fdc_firma` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_declaracion_jurada`
--

INSERT INTO `cc_declaracion_jurada` (`id`, `id_general`, `fdc_nombre_completo`, `fdc_fecha`, `fdc_firma`) VALUES
(19, 25, '', '1970-01-01', NULL),
(20, 26, '', '1970-01-01', NULL),
(21, 27, 'ROSA DEL CARMEN PEREZ MONTENEGRO DE CASTILLO', '2023-07-06', 'vistas/adjuntos/firma/27_64a6fa8004569.jpeg'),
(22, 28, '', '1970-01-01', NULL),
(23, 29, '', '1970-01-01', 'vistas/adjuntos/firma/29_64a9dc4676306.txt'),
(24, 30, '', '1970-01-01', NULL),
(25, 31, '', '1970-01-01', NULL),
(26, 32, 'OMAR CARRILLO ORO ', '2023-07-19', 'vistas/adjuntos/firma/32_64d1140b150ff.jpg'),
(27, 33, '', '1970-01-01', NULL),
(28, 34, '', '1970-01-01', NULL),
(29, 35, '', '1970-01-01', NULL),
(30, 36, 'LIDUVINA MAURE FRANCO', '2023-08-09', NULL),
(31, 37, 'HERMELINDA HERRERA CACERES', '2023-08-10', NULL),
(32, 38, '', '1970-01-01', NULL),
(33, 39, 'JACINTO ELIAS DOMINGUEZ ESPINOSA', '2023-08-11', NULL),
(34, 40, 'EDITH MARIA MORAN SALCEDO ', '1996-01-08', NULL),
(35, 41, 'RICARDO ALEXANDER GONZALEZ SERRANO', '2023-08-11', NULL),
(36, 42, '', '1970-01-01', NULL),
(37, 43, 'LUIS ALFREDO ALCANTARA CASTRO ', '2023-08-18', NULL),
(38, 44, 'LEWIS EDUILCAR GOMEZ VILLARREAL', '2023-08-13', NULL),
(39, 45, '', '1970-01-01', NULL),
(40, 46, 'ALEXIS IVAN POLANCO', '2023-08-19', NULL),
(41, 47, '', '1970-01-01', 'vistas/adjuntos/firma/47_64e122c396cf9.pdf'),
(42, 48, '', '1970-01-01', NULL),
(43, 49, '', '1970-01-01', NULL),
(44, 50, '', '1970-01-01', NULL),
(45, 51, '', '1970-01-01', NULL),
(47, 53, 'SALVADOR DAVID SERRANO MONTENEGRO', '2023-08-18', NULL),
(48, 54, 'JUAN ANTONIO VEGA CASTILLO ', '2023-08-22', NULL),
(49, 55, 'PRUEBA PRUEBA ', '2023-08-22', NULL),
(50, 56, '', '1970-01-01', NULL),
(51, 57, 'JONIS ELIAS OBANDO', '2023-08-21', NULL),
(52, 58, '', '1970-01-01', NULL),
(57, 64, '', '1970-01-01', NULL),
(58, 65, 'ALEJANDRO SANDOVAL SANCHEZ ', '2023-08-23', NULL),
(59, 66, '', '1970-01-01', NULL),
(60, 67, '', '1970-01-01', NULL),
(62, 69, '', '1970-01-01', NULL),
(63, 70, '', '1970-01-01', NULL),
(64, 71, '', '1970-01-01', NULL),
(65, 72, '', '1970-01-01', NULL),
(66, 73, '', '1970-01-01', NULL),
(67, 74, 'JURIELYS DANAIS CEDEÑO VALDERRAMA', '2023-08-25', NULL),
(68, 75, 'IVANOR LABRADOR MADRID ', '2023-08-25', NULL),
(69, 76, '', '1970-01-01', NULL),
(70, 77, 'REYNIEL EUSEBIO RODRIGUEZ GUTIERREZ', '2023-08-18', NULL),
(71, 78, '', '1970-01-01', NULL),
(72, 79, 'Miguel Angel Saavedra Plaza', '2023-08-28', NULL),
(73, 80, 'NORBERTO ANTONIO CERNA ORTEGA', '2023-08-26', NULL),
(74, 81, '', '1970-01-01', NULL),
(75, 82, '', '1970-01-01', NULL),
(76, 83, '', '1970-01-01', NULL),
(77, 84, 'JOSE JOAQUIN MAURE MARIN', '2023-08-29', NULL),
(78, 85, '', '1970-01-01', NULL),
(79, 86, '', '1970-01-01', NULL),
(80, 87, '', '1970-01-01', NULL),
(81, 88, '', '1970-01-01', NULL),
(82, 89, 'SERGIO ', '2023-08-31', NULL),
(83, 90, '', '1970-01-01', NULL),
(84, 91, 'JOSE OMAR DAVILA SANCHEZ', '2023-08-31', NULL),
(85, 92, '', '1970-01-01', NULL),
(86, 93, '', '1970-01-01', NULL),
(87, 94, 'ARIEL ULISES TREJOS CEDEÑO', '2023-09-02', NULL),
(88, 95, '', '1970-01-01', NULL),
(89, 96, 'RICARDO JOSE QUIROZ CORRALEZ', '2023-09-04', NULL),
(90, 97, '', '1970-01-01', NULL),
(91, 98, '', '1970-01-01', NULL),
(92, 99, '', '1970-01-01', NULL),
(93, 100, '', '1970-01-01', NULL),
(94, 101, '', '1970-01-01', NULL),
(95, 102, '', '1970-01-01', NULL),
(96, 103, 'Nazareth  Benigna Gonzalez Vasquez de Fuentes', '1970-01-01', NULL),
(97, 104, '', '1970-01-01', NULL),
(98, 105, '', '1970-01-01', NULL),
(99, 106, '', '1970-01-01', NULL),
(100, 107, '', '1970-01-01', NULL),
(101, 108, '', '1970-01-01', NULL),
(102, 109, '', '1970-01-01', NULL),
(103, 110, 'Aschmed Sanchez', '1970-01-01', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_expediente`
--

CREATE TABLE `cc_expediente` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `exp_fecha` date DEFAULT NULL,
  `exp_cliente` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `exp_marca` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `exp_modelo` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `exp_anio` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `exp_placa` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `exp_chasis` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `exp_motor` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `exp_color` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `exp_codigo_dollar` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `exp_n_intelisis` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `exp_cedula_pasaporte` tinyint(1) DEFAULT NULL,
  `exp_recibo_servicio` tinyint(1) DEFAULT NULL,
  `exp_detalle_transaccion_pago` tinyint(1) DEFAULT NULL,
  `exp_proforma` tinyint(1) DEFAULT NULL,
  `exp_factura_venta` tinyint(1) DEFAULT NULL,
  `exp_contrato_garantia` tinyint(1) DEFAULT NULL,
  `exp_contrato_consignacion` tinyint(1) DEFAULT NULL,
  `exp_contrato_como_donde` tinyint(1) DEFAULT NULL,
  `exp_exoneracion_responsabilidad` tinyint(1) DEFAULT NULL,
  `exp_documneto_traspaso` tinyint(1) DEFAULT NULL,
  `exp_hoja_entrada` tinyint(1) DEFAULT NULL,
  `exp_carta_promesa` tinyint(1) DEFAULT NULL,
  `exp_recibo_abono` tinyint(1) DEFAULT NULL,
  `exp_recibo_traspaso` tinyint(1) DEFAULT NULL,
  `exp_recibos_pago` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_expediente`
--

INSERT INTO `cc_expediente` (`id`, `id_general`, `exp_fecha`, `exp_cliente`, `exp_marca`, `exp_modelo`, `exp_anio`, `exp_placa`, `exp_chasis`, `exp_motor`, `exp_color`, `exp_codigo_dollar`, `exp_n_intelisis`, `exp_cedula_pasaporte`, `exp_recibo_servicio`, `exp_detalle_transaccion_pago`, `exp_proforma`, `exp_factura_venta`, `exp_contrato_garantia`, `exp_contrato_consignacion`, `exp_contrato_como_donde`, `exp_exoneracion_responsabilidad`, `exp_documneto_traspaso`, `exp_hoja_entrada`, `exp_carta_promesa`, `exp_recibo_abono`, `exp_recibo_traspaso`, `exp_recibos_pago`) VALUES
(24, 25, '2023-07-03', 'VICTOR  CABALLERO  GUERRA ', 'TOYOTA', 'COASTER', '2020', 'EB1890', 'JTGFB718X06008866', '1HZ-0946146', 'BLANCO', 'TCX-15', 'AU25345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 26, '2023-07-06', 'prueba prueba prueba prueba ', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 27, '2023-07-06', 'ROSA DEL CARMEN PEREZ MONTENEGRO DE CASTILLO', 'MITSUBISHI', 'L200', '2022', 'EA0379', 'MMBJJKL10NH022200', '4N15UHL5094', 'BLANCO', 'PPL-33', 'AU25181', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 28, '1970-01-01', 'prueba prueba arrieta prueba ', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 29, '1970-01-01', 'pedro arreita david perez ', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 30, '2023-07-31', 'VERONICA  HAYDEE SAAVEDRA MARCIAGA ', 'TOYOTA', 'COROLLA CROSS', '2023', 'EE7248', '9BRK4AAG400061309', 'M20A-AB82431', 'PLATINUN WHAITE', 'TCC-12', 'AU25558', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 31, '2023-07-31', 'IRENE  TADEO SARASTY ROSALES ', 'TOYOTA', 'HILUX', '2020', 'EB3210', '8AJFB3CD701514568 ', '2GD-4767710', 'SUPER WHILLE II', 'PPEX-198', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 32, '2023-08-07', 'OMAR   CARRILLO  ORO ', 'KIA ', 'PICANTO ', '2023', '00000', '00000', 'JSDHFKASHDKJFH', 'AZUL ', 'AU123345', 'AU12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 33, '2023-08-08', 'ROGER AMADO PEREZ DELGADO ', 'TOYOTA', 'HILUX', '2020', 'EB3083', 'EB3083', '2GD-4768666', 'Super white II', 'PPEX-160', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 34, '2023-08-09', 'Angel Manuel  Buitrago  Montes  ', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 35, '2023-08-10', 'Laura Edith Abrego Fuentes ', 'MITSUBISHI MONTERO', 'MMS-61', '2022', 'EC7842', 'EC7842', '4N15UHX4966', 'blanco D', 'MMS-61', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 36, '2023-08-09', 'LIDUVINA  MAURE FRANCO ', 'TOYOTA', 'YARIS', '2022', 'ED4135', 'MR2B29F3401238123', '2NR5550333', 'GRAY METALLIC', 'ADAN-288', 'AU25678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 37, '2023-08-10', 'HERMELINDA  HERRERA CACERES ', 'KIA', 'PICANTO', '2022', 'EA5167', 'KNAB3512BNT888431', 'G4LAMP220729', 'BLANCO', 'KPA-212', 'AU25641', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 38, '2023-08-12', 'AQUILINO  PEREZ SANTOS   ', 'MITSUBISHI ', 'L200', '2022', 'EA0651', 'MMBJLKL10NH024202', '4N15UHL9594', 'BLANCO DIAMANTE ', 'PPLA-18', 'AU25065', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 39, '2023-08-11', 'JACINTO  ELIAS DOMINGUEZ ESPINOSA ', 'KIA', 'RIO', '2023', 'ED6787', '3KPA241ABPE470836', 'G4LCNE703318', 'BLANCO', 'RIOX-481', 'AU25678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 40, '2023-08-14', 'EDITH  MARIA  MORAN  SALCEDO ', 'TOYOTA ', 'YARIS ', '2022', 'ED4167', 'ED4167', '2NR5554306', 'SILVER METALLIC ', 'ADAN-297', 'AU25696', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 41, '2023-08-11', 'RICARDO ALEXANDER GONZALEZ SERRANO ', 'TOYOTA', 'YARIS', '2022', 'EC4452', 'MR2B29F3601232467', '2NR5538909', 'SUPER WHITE II', 'ADAN-261', 'AU25584', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 42, '2023-08-16', 'ALEYKA INDIRA QUINTERO GUTIERREZ ', 'TOYOTA', 'RAV 4', '2019', 'CT3750 ', 'JTMW43FV70J002616', 'M20A-V010318', 'Attitude Black Mica', 'RP-RAV4-010', 'AU25741', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 43, '2023-08-17', 'LUIS  ALFREDO ALCANTARA CASTRO ', 'MITSUBISHI', 'L200', '2022', 'EA1264', 'MMBJJKL10NH045524', '4N15UHR8302', 'BLANCO DIAMANTE', 'PPL-45', 'AU25744', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 44, '2023-08-13', 'LEWIS EDUILCAR GOMEZ VILLAREAL ', 'NISSAN', 'NP300 FRONTIER', '2022', 'EB9926', '3N6CD33B8ZK438204', 'YD25738079P', 'BLANCO', 'PFNX-45', 'AU25707', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 45, '2023-08-19', 'Dinabel  Juliana  Herrar  Campos ', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 46, '2023-08-19', 'Alexis  Ivan  Polanco Guitierrez  ', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 47, '2023-08-19', 'YELENA ANEL ROBLES FRUTO  DE CAMERON', 'TOYOTA', 'HILUX', '2022', 'ED5003', '8AJKB3CD201637189', '2GD-C925963', 'SUPER WHITE', 'PPHA-59', 'AU25769', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 48, '1970-01-01', 'Manuel Antonio Pedroza Borgas ', 'KIA', 'RIO', '2023', 'ED6754', '3KPA241ABPE469281 ', 'G4LCNE702772', 'BLANCO', '', 'RIOX-463', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 49, '2023-08-21', 'LAYSTHER  AMETH PEREZ SOTO ', 'TOYOTA', 'HILUX', '2020', 'EB3501', 'EB3501', '2GD4794881', 'SUPER WHITE II', 'PPEX-218', 'AU25785', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 50, '2023-08-21', ' Jesus  Yusliet  Echeverriar  Hernandez  ', 'KIA', 'PICANTO', '2021', 'CX7085', 'CX7085', 'G4LAKP110309', 'BLANCO', 'KPA-198', 'AU25788', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 51, '2023-08-21', 'LINA MARIA MENA  ', 'HYUNDAI ', 'CRETA', '2022', 'EB5318', 'MALPB812ENM142199', 'G4FLMV135764', 'TITAN GREY', 'HCX-39', 'AU25791', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 53, '2023-08-18', 'SALVADOR DAVID SERRANO MONTENEGRO ', 'NISSAN', 'NP300 FRONTIER', '2021', 'CY4394', 'CY4394', 'YD25719139P', 'BLANCO', 'PPFN-153', 'AU25786', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 54, '2023-08-22', 'JUAN  ANTONIO  VEGA  CASTILLO  ', 'TOYOTA ', 'HILUX ', '2019', 'CN6479', '8AJFB8CD201592656', '2GD4546467', 'SUPER WHITE II ', 'PPHX-511', 'AU22688', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 55, '2023-08-22', 'PRUEBA  PRUEBA  PRUEBA  PRUEBA  PRUEBA ', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 56, '2023-08-22', 'JAVIER ARMANDO NIETO UREÑA ', 'VOLKSWAGEN', 'SAVEIRO', '2022', 'EC6785', '9BWJB45U8NP024309', 'CFZV10072', 'candy white', 'VWS-02', 'VWS-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 57, '2023-08-21', 'JONIS ELIAS OBANDO  ', 'TOYOTA', 'HILUX', '2022', 'EC3979', '8AJDB3CD601313414', '2GD1010811', 'SUPER WHITE II', 'PPHX-1137', 'AU25776', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 58, '2023-08-21', 'ANA KAREN SERRANO MONTENEGRO ', 'NISSAN', 'NP300 FRONTIER', '2021', 'CY4394', 'CY4394', 'YD25719139P', 'BLANCO', 'PPFN-153', 'AU25786', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 64, '1970-01-01', 'DELMIRA   MOGORUZA  GONZALEZ ', 'TOYOTA', 'HILUX', '2022', 'EC0942', 'EC0942', '2GD1025076', 'SUPER WHITE II', 'PPHX-1099', 'AU25813', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 65, '2023-08-23', 'ALEJANDRO SANDOVAL  SANCHEZ   ', 'TOYOTA ', 'HILUX ', '2022', 'EA8226', '8AJDB3CD501311346', '2GD0984786', 'SILVER METALLIC ', 'PPHX-1069', 'AU25480', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 66, '1970-01-01', '', 'TOYOTA', 'HILUX', '2022', 'EE3364', '8AJDB3CD601320492 ', '2GD-1117070', 'SUPER WHITE', 'PPHX-1245', 'AU25816', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 67, '2023-08-23', 'JOSE  ISABEL GARRIDO MARTINEZ ', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 69, '2023-08-24', 'Jose  Carrasquilla  Quinonez  ', 'HYUNDAI', 'ACCENT', '2022', 'ED0217', 'MALC741BBNM315269', 'G4LCMU590047', 'PLATEADO', 'ACAX-44', 'AU25828', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 70, '2023-08-24', 'RAUL JESUS LOZADA BETANCOURT ', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 71, '2023-08-24', 'LUIS ABDIEL GARCIA QUINTERO ', 'TOYOTA', 'HILUX', '2022', 'EE3364', '8AJDB3CD601320492', '2GD-1117070', 'SUPER WHITE', 'PPHX-1245', 'AU28516', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 72, '1970-01-01', ' jose  rufino  barcos  Almendra ', 'TOYOTA', 'YARIS', '2022', 'ED4155', 'MR2B29F3001239303', '2NR5554614', 'GRAY METALLIC', 'ADAN-304 ', 'AU25831', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 73, '2023-08-24', 'ERICK  EDMUND JOHNSON ', 'SUZUKI', 'JIMNY', '2022', 'EE1393', 'MA3JB74V2N0113577', 'K15B-1149537', 'NEGRO AZUL', 'JIMX-57', 'AU25826', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 74, '2023-08-25', 'JURIELYS  DANAIS  CEDEÑO  VALDERRAMA ', 'HYUNDAI', 'VENUE', '2023', 'ED0188', 'KMHRB812BPU175199', 'G4FGNU193000', 'PLATEADO', 'VEN-146', 'AU253065', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 75, '2023-08-25', 'IVANOR  LABRADOR MADRID ', 'TOYOTA ', 'LAND CRUISER PRADO', '2022', 'EC4098', 'JTEBR9FJ10K228284', '1GD8822092', 'GRAY METALLIC ', 'TPX-338', 'AU25781', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 76, '1970-01-01', 'Roberto  antonio Laughin  Forbes ', 'TOYOTA', 'LAND  CRUISER PRADO', '2020', 'EC8974', 'JTEBH9FJ8LK223946', '1KDB022833', 'LATTITUDE BLACK MICA', 'TPI-25 ', 'AU25844', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 77, '2023-08-18', 'REYNIEL EUSEBIO RODRIGUEZ GUTIERREZ ', 'TOYOTA', 'HILUX', '2020', 'EB2967', '8AJFB3CD801515678', '2GD4795511', 'SUPER WHITE II', 'PPHX-945', 'AU25734', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 78, '2023-08-26', 'GILBERTO  DUTARY VERGA ', 'KIA', 'RIO', '2023', 'ED6803', '3KPA241ABPE470841', 'G4LCNE703329', 'BLANCO', 'RIOX-487', 'AU25885', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 79, '2023-08-28', 'Miguel  Angel  Saavedra  Plaza ', 'TOYOTA', 'LANDCRUISER PRADO', '2022', 'EC1184', 'EC1184', '1GD8796880', 'blackish a', 'TPX-337', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 80, '2023-08-26', 'NORBERTO ANTONIO CERNA ORTEGA ', 'KIA', 'PICANTO', '2023', 'EC6023', 'KNAB3512BPT912633', 'G4LAMP262039', 'BLANCO', 'KPA-225', 'AU25849', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 81, '2023-08-28', 'JOSUE  ANTONIO SAEZ RUJANO ', 'TOYOTA', 'HILUX', '2021', '', '', '', 'SUPER WHITE II', 'PPHX-1039', 'AU25772', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 82, '2023-08-28', 'ROSSEMERY  SALAZAR GONZALEZ ', 'HYUNDAI ', 'ACCENT VERNA', '2022', 'ED0088', '', '', 'PLATEADO DORADO', 'HVA-97', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, 83, '2023-08-29', 'LUIS  ROBERTO  GOMEZ LEDEZMA ', 'TOYOTA', 'YARIS', '2022', 'ED4118', 'ED4118', '2NR5550518', 'SILVER METALLIC', 'ADAN-281', 'AU25774', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 84, '2023-08-29', 'JOSE  JOAQUIN MAURE MARIN ', 'TOYOTA', 'HILUX', '2022', 'EA8212', '8AJDB3CD001311397', '2GD-0985243', 'SUP WHITE', 'PPHX-1057', 'AU25876', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 85, '2023-08-29', 'JENNIFER  SUSSETTE MORENO CALZUDES ', 'SUZUKI', 'JIMNY', '2022', 'EC2869', 'MA3JB74VXN0104142', 'K15B1113726', 'GRIS', 'JIMX-37', 'AU25748', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, 86, '2023-08-30', 'MANUEL  RENE  TEZANOS MATOS ', 'HYUNDAI ', 'CRETA', '2022', 'ED0621', 'ED0621', 'G4FLNV280628', 'PLATEADO', 'HCX-67', 'AU25892', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, 87, '2023-08-30', 'RACHELL ZUGELY GOMEZ GUERRA ', 'KIA', 'RIO', '2023', 'ED6757', '3KPA241ABPE467273', 'G4LCNE702375', 'PLATA', 'RIOX-466 ', 'AU25804', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(86, 88, '2023-08-30', 'Lucila  Dawkins Figueroa de Alarcon Dawkins  Figueroa de Alarcon ', 'TOYOTA', 'TOYOTA', '2022', 'EC4430', 'MR2B29F3801234852', '2NR-5539653 ', 'SILVER MET', ' ADAN-251', 'AU19113', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, 89, '2023-08-31', 'SERGIO ENRIQUE GARCIA  ROMELIS  ', 'KIA ', 'RIO', '2023', 'ED6756', 'ED6756', 'G4LCNE702369', 'PLATA ', 'RIOX-465', 'AU25893', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(88, 90, '2023-08-31', 'Ramses Alexander  JACINTO MORALES BOTELLO ', 'KIA', 'PICANTO', '2023', 'EE0107', 'EE0107', 'G4LAMP208880', 'BLANCO', 'KPA-241 ', 'AU25898', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(89, 91, '1991-07-15', 'JOSE  OMAR DAVILA SANCHEZ ', 'KIA', 'PICANTO', '2022', 'EA5149', 'KNAB3512BNT890811', 'G4LAMP225397', 'BLANCO', 'KPA-202', 'AU25860', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(90, 92, '2023-09-02', 'Mulazzi  Allison  Francesca   ', 'SUZUKI', 'JIMNY', '2022', 'EE1918', 'MA3JB74V5N0110401', 'K15B-1140492 ', 'BLANCO', 'A-00049', 'AU25919', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, 93, '2023-09-02', ' Gina  idalina  aguero  rodriguez ', 'TOYOTA', 'LAND CRUISER PRADO', '2020', 'EC8967', 'JTEBH9FJ6LK223315', '1KDB020317', 'ATT- BLACK', 'TPI-18', 'AU25847', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(92, 94, '2023-09-02', 'ARIEL ULISES TREJOS CEDEÑO ', 'TOYOTA', 'HILUX', '2020', 'EB3196', '8AJFB3CD901514541', '2GD4767018', 'SUPER WHITE II', 'PPEX-187', 'AU25920', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(93, 95, '2023-09-04', 'EDILBERTO   BEDOYA  QUINTERO ', 'KIA', 'RIO', '2022', 'ED6767', '3KPA241ABPE469277', 'G4LCNE702888', 'BLANCO', 'RIOX-472', 'AU25895', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(94, 96, '2023-09-04', 'RICARDO JOSE QUIROZ CORRALEZ ', 'SUZUKI', 'JIMNY', '2022', 'ED9847', 'MA3JB74V0N0113934', 'K15B1151198', 'BLANCO', 'JIMX-60', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(95, 97, '2023-09-04', 'DIANA  DAMARIS DIAZ ZAMBRANO ', 'TOYOTA', 'HILUX', '2022', 'EC4573', '8AJDB3CD101316575', '2GD-1049285', 'SILVER METALLEC', 'PPHX-1159', 'AU25937', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, 98, '2023-09-05', ' Alison  Marie Varela  poveda ', 'TOYOTA', 'YARIS', '2022', 'ED4155', 'MR2B29F3001239303', '', ' GRAY METALLIC', 'ADAN-304', 'AU25943', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, 99, '1970-01-01', 'Juan  Antonio  Solano  Cortez ', 'NISSAN', 'NP300 FRONTIER ', '2022', 'EB8719', 'YD25-732541P', 'YD25-732541P', 'PLATA', ' PFNX-16', 'AU25950', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(98, 100, '2023-09-05', 'erguin Alexander  Sanchez  ', 'NISSAN', 'NP300 FRONTIER', '2022', 'EB9921', 'EB9921', 'YD25-737264P', 'PLATA', 'PFNX-40', 'AU25956', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, 101, '2023-09-06', 'ARIADNE  ANGELICA GONZALEZ TORRES ', 'KIA', 'SONET', '2022', 'ED6581', 'MZBFB814ENN146324', 'G4FLNV284518', 'ACERO', 'SON-09', 'AU25921', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, 102, '2023-09-06', ' DENIS  OMAR  PONBO  GONZÁLEZ  ', 'TOYOTA', 'HILUX', '2022', 'EC4577', '8AJDB3CD901316596', '2GD-5061622 ', 'SILVER MET', 'PPHX-1163', 'AU25962', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(101, 103, '1970-01-01', 'Nazareth   Benigna  Gonzalez  Vasquez  de Fuentes', 'EC0297', 'LAND CRUISER PRAD', '2022', 'EC0297', 'EC0297', '', 'ATTITUDE', 'TPX-327', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(102, 104, '2023-09-06', 'DELFIN   BONILLA VELASQUEZ ', 'MITSUBISHI', 'MONTERO SPORT ', '2022', 'EC7841', 'MMBGUKS10NH005910', '4N15UHX0638', ' BLANCO DIAMANTE', 'MMS-60', 'AU25953', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, 105, '1970-01-01', 'IRVIN GONZALEZ GARIBALDI  ', 'KIA', 'SONET', '2022', 'ED6708', 'MZBFB814ENN146326', 'G4FLNV284551', 'ACERO', 'SON-18', 'AU25967', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(104, 106, '1970-01-01', 'JORGE JOAQUIN SANCHEZ MITRE ', 'TOYOTA', 'HILUX', '2020', 'EB3209', '8AJFB3CD901514765', '2GD-4772528', 'SUPER WHITE', 'PPEX-197', ' AU25970', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, 107, '2023-09-07', 'IMELHYN  ISHEL NAVARRO ATENCIO ', 'KIA', 'SELTOS', '2023', 'ED8355', 'MZBEP814BPN360871', 'G4FGMZ782117', 'BLANCO', 'KSA-35', 'AU25974', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(106, 108, '1970-01-01', 'GERARDO ENRIQUE CALLENDER  HINESTROZ ', 'HYUNDAI', 'TUCSON', '2022', 'EC9360', 'KMHJB81DBNU115113', 'G4NLMU981619', 'BLANCO', 'TUX-67', 'AU25918', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(107, 109, '2023-09-07', 'Alwiera  Doerksen  Hiebert  ', 'HYUNDAI', 'VENUE', '2022', 'EC9487', 'KMHRB812BNU162898', 'G4FGMU157933', 'PLATEADO', 'VEN-129', 'AU25980', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(108, 110, '2023-09-07', 'Aschmed  Sanchez Barsallo ', 'TOYOTA', 'HILUX', '2020', 'EB3086', '8ajfb3cd201514610', '2gd4769334', 'super white', 'ppex-163', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_generales`
--

CREATE TABLE `cc_generales` (
  `id` int NOT NULL,
  `fg_primer_nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fg_segundo_nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fg_apellido_paterno` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fg_apellido_materno` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fg_apellido_casada` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fg_pais_nacimiento` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fg_fecha_nacimiento` date DEFAULT NULL,
  `fg_nacionalidad` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fg_genero` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fg_estado_civil` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fg_cedula` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fg_pais_residencia` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fg_direccion_residencial` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fg_pais_residencia_fiscal` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fg_email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fg_telefono_residencia` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fg_telefono_movil` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fg_stat` int DEFAULT NULL,
  `fg_fecha_log` datetime DEFAULT CURRENT_TIMESTAMP,
  `fg_id_user` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_generales`
--

INSERT INTO `cc_generales` (`id`, `fg_primer_nombre`, `fg_segundo_nombre`, `fg_apellido_paterno`, `fg_apellido_materno`, `fg_apellido_casada`, `fg_pais_nacimiento`, `fg_fecha_nacimiento`, `fg_nacionalidad`, `fg_genero`, `fg_estado_civil`, `fg_cedula`, `fg_pais_residencia`, `fg_direccion_residencial`, `fg_pais_residencia_fiscal`, `fg_email`, `fg_telefono_residencia`, `fg_telefono_movil`, `fg_stat`, `fg_fecha_log`, `fg_id_user`) VALUES
(25, 'VICTOR', '', 'CABALLERO ', 'GUERRA', '', 'PA', '2023-04-02', 'PA', '01GEN', '05ECL', '4-111-726', 'PA', 'CHIRIQUI CORREGIMIENTO DE TIERRAS ALTAS VOLCAN', '', 'vcaballero020454@gmail.com', '64865620', '64865620', 1, '2023-07-03 19:46:33', 29),
(27, 'ROSA', 'DEL CARMEN', 'PEREZ', 'MONTENEGRO', 'DE CASTILLO', 'PA', '1965-02-23', 'PA', '02GEN', '05ECL', '4-146-410', 'PA', 'SAN MATEO, DAVID, CHIRIQUI', '', 'gina31c_@hotmail.com', '', '67130535', 1, '2023-07-06 17:31:43', 30),
(30, 'VERONICA ', 'HAYDEE', 'SAAVEDRA', 'MARCIAGA', '', 'PA', '1982-04-07', 'PA', '02GEN', '05ECL', '8-755-2292', 'PA', 'PANAMA PANAMA OESTE LA CHORRERA PUETO CAIMITO', '', 'VEROS_0407@HOTMAIL.COM', '', '64484936', 1, '2023-07-28 21:15:34', 37),
(31, 'IRENE ', 'TADEO', 'SARASTY', 'ROSALES', '', 'PA', '1990-03-19', 'PA', '01GEN', '05ECL', '7-707-140', 'PA', 'COSTA RICA ,SAN JOSE  SAN FRANCISCO ', '', 'TADEOSARASTY01@GMAIL.COM', '', '50687879851', 1, '2023-07-31 15:30:46', 37),
(32, 'OMAR ', '', 'CARRILLO ', 'ORO', '', 'PA', '1981-06-19', 'PA', '01GEN', '04ECL', '8-000-00000', 'PA', 'Ave. Domingo Diaz, Tocumen Commercial Park, Local 17', 'PA', 'omar.carrillo@grupopcr.com.pa', '279-2758', '6656-3906', 1, '2023-08-07 15:55:55', 7),
(33, 'ROGER', 'AMADO', 'PEREZ', 'DELGADO', '', 'PA', '1982-08-25', 'PA', '01GEN', '05ECL', '8-759-488', 'PA', 'CAPIRA VILLA ROSARIO', 'PA', 'rogeramado1982@gmail.com', '', '6589-5668', 1, '2023-08-08 20:46:03', 23),
(34, 'Angel Manuel ', 'Buitrago ', 'Montes', '', '', 'PA', '2023-07-07', 'PA', '01GEN', '04ECL', '8-854-1788', 'PA', 'Don bosco ,  Bello horizonte', 'PA', 'angel_m_buitrago@hotmail.com', '', '+507 6220-5108', 1, '2023-08-09 13:34:35', 19),
(35, 'Laura', 'Edith', 'Abrego', 'Fuentes', '', 'PA', '1986-01-05', 'PA', '02GEN', '', '8-792-993', 'PA', 'Bethania, PH URBIS TOWER, APTO 804', '', 'abregolaura@outlook.com', '', '+507 6242-0772', 1, '2023-08-10 13:42:08', 23),
(36, 'LIDUVINA', '', 'MAURE', 'FRANCO', '', 'PA', '1965-01-26', 'PA', '02GEN', '05ECL', '6-58-412', 'PA', 'PANAMA OESTE, LA CHORRERA,GUADALUPE, LA HERRADURA #2, ALLE SANTA CLARA', '', 'LMAURE65@GMAIL.COM', '', '6262-5020', 1, '2023-08-11 19:37:06', 28),
(37, 'HERMELINDA', '', 'HERRERA', 'CACERES', '', 'PA', '1969-11-04', 'PA', '02GEN', '04ECL', '8-374-155', 'PA', 'PANAMA, PANAMA OETSE, LA CHORRERA, GUADALUPE, DETRAS DE LA ESCUELA Z.Z.N.', '', 'HERRERANAYEDNA@GMAIL.COM', '', '+507 6183-4534', 1, '2023-08-12 14:41:28', 28),
(38, 'AQUILINO ', 'PEREZ', 'SANTOS ', '', '', 'PA', '1960-04-07', 'PA', '01GEN', '04ECL', '9-121-2301', 'PA', 'LA CHORRERA, GUADALUPE ', 'PA', 'TBETZAIDA_12@HOTMAIL.ES', '', '6709-1250', 1, '2023-08-12 16:36:04', 27),
(39, 'JACINTO ', 'ELIAS', 'DOMINGUEZ', 'ESPINOSA', '', 'PA', '1997-02-19', 'PA', '01GEN', '04ECL', '8-915-37', 'PA', 'PANAMA OESTE, CORREGIMIENTO DE PLAYA LEONA, ALTOS DE LA PRADERA', '', '', '', '+507 6400-3499', 1, '2023-08-14 19:54:54', 28),
(40, 'EDITH ', 'MARIA ', 'MORAN ', 'SALCEDO', '', 'PA', '1996-01-08', 'PA', '02GEN', '05ECL', '8-905-1673', 'PA', 'CAIMITO, CALLE HACIA CAÑAZA CASA 43', '', 'EDOTHMORAN08@GMAIL.COM', 'NO TIENE ', '+507 6388-6945', 1, '2023-08-14 20:34:37', 27),
(41, 'RICARDO', 'ALEXANDER', 'GONZALEZ', 'SERRANO', '', 'PA', '1995-01-20', 'PA', '01GEN', '', '8-904-214', 'PA', 'PANAMA, PANAMA, SAN MIGUELITO, AMELIA DENIS ICAZA, LOS ANDES, PH BELLA NATURA', '', '', '', '6288-2002', 1, '2023-08-16 15:36:29', 28),
(42, 'ALEYKA', 'INDIRA', 'QUINTERO', 'GUTIERREZ', '', 'PA', '1973-02-17', 'PA', '02GEN', '04ECL', '1-43-199', 'PA', 'PANAMA, PUEBLO NUEVO, LAS SABANAS, CALLE PRINCIPAL, SABANA TOWER, TORRE B, APTO 1601.', '', 'aleyka17@yahoo.com', '2240501', '69484793', 1, '2023-08-16 23:23:47', 20),
(43, 'LUIS ', 'ALFREDO', 'ALCANTARA', 'CASTRO', '', 'VE', '1965-10-12', 'VE', '01GEN', '04ECL', '171901388', 'PA', 'BELLA VISTA, PH CARRERAS EL CARMEN, APT 17A', 'PA', 'alcantara.luis@gmail.com', '', '62621158', 1, '2023-08-17 18:08:55', 21),
(44, 'LEWIS', 'EDUILCAR', 'GOMEZ', 'VILLAREAL', '', 'PA', '1990-10-26', 'PA', '01GEN', '', '4-794-2074', 'PA', 'PANAMA, PANAMA OESTE, ARRAIJAN, BURUNGA,  BARRIADA SANTA ROSA', '', '', '', '6269-0905', 1, '2023-08-18 12:41:27', 28),
(45, 'Dinabel ', 'Juliana ', 'Herrar ', 'Campos', '', 'PA', '1972-03-18', 'PA', '02GEN', '04ECL', '3-111-617', 'PA', 'COLON BARRIO NORTE', 'PA', 'DINA@GMAIL.COM', '', '+507 6217-6504', 1, '2023-08-19 16:55:44', 19),
(46, 'Alexis ', 'Ivan ', 'Polanco', 'Gutiérrez ', '', 'PA', '1970-07-12', 'PA', '01GEN', '04ECL', '8-371-714', 'PA', 'Vacamonte Arraiján', 'PA', 'alexispolanco@gmail.com', '344-4223', '6486-1007', 1, '2023-08-19 19:15:31', 19),
(47, 'YELENA', 'ANEL', 'ROBLES', 'FRUTO ', 'DE CAMERON', 'PA', '1975-09-18', 'PA', '02GEN', '05ECL', '3-700-2093', 'PA', 'PANAMA, COLON  CORREGIMIENTO DE BUENAVISTA', 'PA', 'yelena@hotmail.com', '+50765741402', '+50765741402', 1, '2023-08-19 20:14:59', 22),
(48, 'Manuel', 'Antonio', 'Pedroza', 'Borgas', '', 'PA', '1975-02-25', 'PA', '01GEN', '05ECL', '8-491-193', 'PA', 'Villa lucre, casa 05', 'PA', 'manuelpedroza@feduro.com', '', '6252-6907', 1, '2023-08-19 21:06:21', 23),
(49, 'LAYSTHER ', 'AMETH', 'PEREZ', 'SOTO', '', 'PA', '1983-06-06', 'PA', '01GEN', '05ECL', '6-708-560', 'PA', 'PENONOME, EL COCO, BDA LLANO MARIN, CASA 526', 'PA', 'laysther.ameth.perez@gmail.com', '9832148', '67771310', 1, '2023-08-21 18:46:23', 21),
(50, ' Jesus ', 'Yusliet ', 'Echeverriar ', 'Hernandez ', '', 'CU', '1981-10-23', 'PA', '01GEN', '04ECL', 'E-8-1238', 'PA', 'PH ALLTURE BELLA VISTA', 'PA', 'JUSTINEFASHION@GMAIL.COM', '', '', 1, '2023-08-21 21:03:37', 19),
(51, 'LINA', 'MARIA', 'MENA', '', '', 'PA', '1995-05-16', 'PA', '02GEN', '04ECL', '8-893-1473', 'PA', 'BELEN SECTOR 10 CASA C44', '', 'MARIAMENA16@HOTMAIL.COM', '388-8988', '6014-2978', 1, '2023-08-21 22:25:44', 19),
(53, 'SALVADOR', 'DAVID', 'SERRANO', 'MONTENEGRO', '', 'PA', '1988-02-04', 'PA', '01GEN', '04ECL', '8-813-1837', 'PA', 'PANAMA, ARRAIJAN, PLAYA DORADA, CALLE PRINCIPAL, PH VILLAMARINA', '', '', '', '+507 6288-6517', 1, '2023-08-22 16:27:05', 28),
(54, 'JUAN ', 'ANTONIO ', 'VEGA ', 'CASTILLO ', '', 'PA', '1994-12-28', 'PA', '01GEN', '', '4-803-1125', 'PA', 'CHIRIQUI, DISTRITO DE BOQUERON, CORREGIMIENTO DE PEDREGAL ', 'PA', 'LAVICTORIACARSTORE@GMAIL.COM', '6833-7730', '6216-9842', 1, '2023-08-22 16:32:50', 27),
(55, 'PRUEBA ', 'PRUEBA ', 'PRUEBA ', 'PRUEBA ', 'PRUEBA ', 'PA', '1990-08-15', 'PA', '', '04ECL', '8-000-00000', 'PA', 'los robles calle 2da\r\ncasa 255', 'PA', 'ocarrillooro19@gmail.com', '+50760655301', '+50760655301', 1, '2023-08-22 20:32:54', 7),
(56, 'JAVIER', 'ARMANDO', 'NIETO', 'UREÑA', '', 'PA', '2023-06-22', 'PA', '01GEN', '', '8-207-2587', 'PA', 'Nuevo arraijan calle primera numero 3253 edificio Justil PB-7', '', 'renegadojavi@gmail.com', '', '', 1, '2023-08-22 21:45:16', 23),
(57, 'JONIS', 'ELIAS', 'OBANDO', '', '', 'PA', '1970-04-19', 'PA', '01GEN', '05ECL', '8-345-687', 'PA', 'PANAMA, PANAMA OESTE, LA CHORRERA, GUADALUPE, BELLA ESPERANZA', '', 'jonisobando968@gmail.com', '', '+507 6464-5777', 1, '2023-08-23 12:46:46', 28),
(58, 'ANA', 'KAREN', 'SERRANO', 'MONTENEGRO', '', 'PA', '1995-04-09', 'PA', '02GEN', '04ECL', '8-919-105', 'PA', 'PANAMA, CLAYTON, CALLE GUANABANA', '', 'ANAKS@LIVE.COM', '', '6208-6662', 1, '2023-08-23 13:33:22', 28),
(64, 'DELMIRA ', '', 'MOGORUZA ', 'GONZALEZ', '', 'PA', '1960-04-21', 'PA', '02GEN', '04ECL', '8-459-875', 'PA', '24 DE DICIEMBRE, VISTA HERMOSA, CASA 3', '', 'delmiramogoruza38@gmail.com', '', ' +507 6549-2430', 1, '2023-08-23 16:59:25', 21),
(65, 'ALEJANDRO', 'SANDOVAL ', 'SANCHEZ ', '', '', 'PA', '1979-10-01', 'PA', '01GEN', '05ECL', '8-730-2441', 'PA', 'LA CHORRERA, CERRO SILVESTRE, BRISAS DEL GOLF ', 'PA', 'ALEJANDROSANDOVALLL@HOTMAIL.COM', '6917-3841', '6757-9546', 1, '2023-08-23 17:05:06', 27),
(66, 'LUIS', 'ABDIEL', 'GARCIA', 'QUINTERO', '', NULL, '1970-01-01', NULL, NULL, NULL, '8-836-2109', NULL, 'PANAMA, EL SITIO DE CHILIBRE', '', 'luisgarciaeg25@gmail.com', '60226935', '60226395', 1, '2023-08-23 21:54:23', 22),
(67, 'JOSE ', 'ISABEL', 'GARRIDO', 'MARTINEZ', '', 'PA', '1971-08-13', 'PA', '01GEN', '05ECL', '3-107-834', 'PA', 'COLON, PUERTO PILON, SABANITAS, BDA. PRADERAS DE SAN ISIDRO, CALLE 5TA .', '', 'jenifergarrido@hotmail.com', '', '65072411', 1, '2023-08-23 22:30:37', 20),
(69, 'Jose', ' Carrasquilla ', 'Quinonez', '', '', 'PA', '1994-07-28', 'PA', '01GEN', '04ECL', '8-884-1652', 'PA', 'Panama oeste la arboleda ', 'PA', 'jose.carrasquilla@hotmail.com', '', '+507 6424-5135', 1, '2023-08-24 18:11:16', 19),
(70, 'RAUL', 'JESUS', 'LOZADA', 'BETANCOURT', '', 'PA', '1992-01-06', 'PA', '01GEN', '04ECL', '8-855-992', 'PA', 'PANAMA, DIAZ RIVERA ALANIS BRITTANYS', 'PA', '', '', '+50765546064', 1, '2023-08-24 18:30:12', 22),
(71, 'LUIS', 'ABDIEL', 'GARCIA', 'QUINTERO', '', 'PA', '1990-02-25', 'PA', '01GEN', '05ECL', '8-836-2109', 'PA', 'PANAMA, SAN MIGUELITO CHILIBRE', '', '', '+50760226395', '+5076022695', 1, '2023-08-24 20:39:34', 22),
(72, ' jose ', 'rufino ', 'barcos ', 'Almendra', '', 'PA', '1969-12-03', 'PA', '01GEN', '04ECL', '8-470-325', 'PA', 'SAN MIGUELITO PANAMA', 'PA', 'barcos.jose@outlook.com', '', '+507 6593-4646', 1, '2023-08-24 21:21:57', 19),
(73, 'ERICK', '', 'EDMUND', 'JOHNSON', '', 'US', '1985-06-28', 'US', '01GEN', '04ECL', '570134258', 'PA', 'PANAMA, CLAYTON PH EMBASSY CLUB GARDEN', '', 'erickj@hawaii.edu', '+5', '+18084437522', 1, '2023-08-24 21:45:15', 22),
(74, 'JURIELYS ', 'DANAIS ', 'CEDEÑO ', 'VALDERRAMA', '', 'PA', '1996-08-22', 'PA', '02GEN', '04ECL', '8-909-159', 'PA', 'Panamá Oste, La Hacienda, Calle 6ta, casa 182.', 'PA', 'jurielysdanais@gmail.com', '', '62730412', 1, '2023-08-25 15:01:07', 20),
(75, 'IVANOR', '', 'LABRADOR', 'MADRID', '', 'PA', '1969-06-28', 'PA', '01GEN', '05ECL', '8-335-833', 'PA', 'ARRAIJAN SECTOR 1 LA 2,000 CASA 49', '', 'IVANORLABRADOR16@GMAIL.COM', '256-2096', '6688-5399', 1, '2023-08-25 15:20:46', 27),
(76, 'Roberto ', 'antonio', 'Laughin ', 'Forbes', '', 'PA', '2023-07-17', 'PA', '01GEN', '04ECL', '3-72-490', 'PA', 'ALTOS DE LAS GUACAS VACAMONTE CALLE 2A\r\n', 'PA', '', '345-4392', '+5047 6014-3473', 1, '2023-08-25 17:56:35', 19),
(77, 'REYNIEL', 'EUSEBIO', 'RODRIGUEZ', 'GUTIERREZ', '', 'PA', '1998-05-30', 'PA', '01GEN', '04ECL', '8-934-304', 'PA', 'PANAMA, PANAMA OETSE, ARRAIJAN, PARQUE DEL OESTE, CALLE LOS TAMARINDOS', '', 'REYNIELRODRIGUEZ30@HOTMAIL.COM', '', '+507 6214-8382', 1, '2023-08-26 14:08:56', 28),
(78, 'GILBERTO', '', 'DUTARY', 'VERGA', '', 'PA', '2023-09-01', 'PA', '01GEN', '05ECL', '8-520-1120', 'PA', 'PANAMA, SANTA LIBRADA ET 5TA 523 ETAPA 5TA CA 523 EN T POR VE 4TA SUBIENDO', '', '', '+50767091610', '+50767091610', 1, '2023-08-26 20:23:27', 22),
(79, 'Miguel ', 'Angel ', 'Saavedra', ' Plaza', '', 'VE', '1984-09-30', 'VE', '01GEN', '05ECL', 'E-8-180343', 'PA', 'Plaza Edison', '', 'bymiguelsaavedra@gmail.com', '', '6277-5338', 1, '2023-08-28 13:43:14', 23),
(80, 'NORBERTO', 'ANTONIO', 'CERNA', 'ORTEGA', '', 'PA', '1987-12-29', 'PA', '01GEN', '04ECL', '8-812-140', 'PA', 'PANAMA, PANAMA OESTE, GUADALUPE, LA HERRADURA, CALLE FUENTE', '', 'NORBERTOCERNA@HOTMAIL.COM', '', '6290-5120', 1, '2023-08-28 13:59:17', 28),
(81, 'JOSUE ', 'ANTONIO', 'SAEZ', 'RUJANO', '', 'PA', '1990-08-31', 'PA', '01GEN', '04ECL', '9-733-2062', 'PA', 'PEDREGAL, PEDREGAL, RANO DE ORO, CASA 31B', 'PA', 'josusez282@gmail.com', '', '62008084', 1, '2023-08-28 19:52:47', 21),
(82, 'ROSSEMERY', '', 'SALAZAR', 'GONZALEZ', '', 'PA', '1976-03-15', 'PA', '02GEN', '04ECL', '8-700-358', 'PA', ': PANAMA, DIST. DE PANAMA, CORREG. DE PUEBLO\r\nNUEVO, LAS SABANAS, CALLE GEORGE WESTERMAN, PN1760\r\nCONDOMINIO LAS PIRAMIDES TORRE 1 PLANTA BAJA PISO D', 'CR', '', '', '+507 6313-1508', 1, '2023-08-29 14:30:38', 21),
(83, 'LUIS ', 'ROBERTO ', 'GOMEZ', 'LEDEZMA', '', 'VE', '1996-04-01', 'VE', '01GEN', '04ECL', '167084880', 'PA', 'PANAMA, SAN FRANCISCO, PARK POINT, PISO 31 APT 31F', 'PA', 'luisrobertooficial@hotmail.com', '', '+507 6083-5099', 1, '2023-08-29 15:45:05', 21),
(84, 'JOSE ', 'JOAQUIN', 'MAURE', 'MARIN', '', 'PA', '1978-03-18', 'PA', '01GEN', '05ECL', '6-702-1012', 'PA', 'ARRAIJAN, BARRIADA WEST VILLAGE', '', 'JJMAURE17@GMAIL.COM', '', '64635540', 1, '2023-08-29 17:44:16', 23),
(85, 'JENNIFER ', 'SUSSETTE', 'MORENO', 'CALZUDES', '', 'PA', '1990-02-26', 'PA', '02GEN', '04ECL', '8-841-733', 'PA', 'PARQUE LEFEVRE, PH ROYAL PARK, PISO 1, 101C', 'PA', 'jennifercalzudes@gmail.com', '', '65286100', 1, '2023-08-30 00:54:46', 21),
(86, 'MANUEL ', 'RENE ', 'TEZANOS', 'MATOS', '', 'DO', '1961-08-30', 'DO', '01GEN', '05ECL', 'E-8-142570', 'PA', 'PANAMA, ANCON, RAINFOREST VILLAS, CALLE LAS HUACAS, CASA 78', 'PA', 'rwtestpilot@hotmail.com', '', '60305130', 1, '2023-08-30 16:44:05', 21),
(87, 'RACHELL', 'ZUGELY', 'GOMEZ', 'GUERRA', '', 'PA', '2023-03-08', 'PA', '02GEN', '04ECL', '8-956-1562', 'PA', ' SAN MIGUELITO BRISAS DEL GOLF CASA 67A CALLE 15', 'PA', '', '', '62728151', 1, '2023-08-30 19:31:15', 21),
(88, 'Lucila ', 'Dawkins Figueroa de Alarcon', 'Dawkins ', 'Figueroa de Alarcon', '', 'PA', '1965-10-22', 'PA', '02GEN', '04ECL', '3-88-1030', 'PA', 'Puerto escondido sector #4 Casa36', 'PA', 'Dawkinsfalarcon@gmail.com', '', '+507 67009356', 1, '2023-08-30 23:11:30', 19),
(89, 'SERGIO', 'ENRIQUE', 'GARCIA ', 'ROMELIS ', '', 'PA', '1961-11-02', 'PA', '01GEN', '05ECL', '8-229-974', 'PA', 'ARRAIJAN, ALTOS DE VISTA ALEGRE, CALLE F CASA 287', 'PA', 'sromelis02@gmail.com', '245-6158', '6088-5569', 1, '2023-08-31 13:51:45', 27),
(90, 'Ramses', 'Alexander ', 'JACINTO', 'MORALES BOTELLO', '', 'PA', '1990-10-10', 'PA', '01GEN', '04ECL', '8-859-107', 'PA', '', '', '', '', '', 1, '2023-08-31 17:47:12', 19),
(91, 'JOSE ', 'OMAR', 'DAVILA', 'SANCHEZ', '', 'VE', '1991-07-15', 'VE', '01GEN', '04ECL', '178499', 'PA', 'Arraijan, La Hacienda, PH Arce, Casa i-229', '', 'omardavila800@gmail.com', '', '61367909', 1, '2023-08-31 20:34:11', 20),
(92, 'Mulazzi ', 'Allison', ' Francesca ', '', '', 'US', '1977-09-28', 'US', '02GEN', '04ECL', '561425951', 'US', '', 'PA', '', '', '+507 6989-7387', 1, '2023-09-02 15:09:06', 19),
(93, ' Gina ', 'idalina ', 'aguero ', 'rodriguez', '', 'PA', '1976-07-25', 'PA', '02GEN', '04ECL', '8-701-2167', 'PA', 'PH BALBOA BAY CALLE 40 BELLA VISTA PISO 25 APT D', 'PA', '', '', ' +507-6676-6338', 1, '2023-09-02 16:00:40', 19),
(94, 'ARIEL', 'ULISES', 'TREJOS', 'CEDEÑO', '', 'PA', '1960-12-30', 'PA', '01GEN', '05ECL', '6-53-511', 'PA', 'Panamá Oeste, Arraijan, Res. Nuevo Arraijan, Juan Demostenes Arosemena, calle trasversal 5.', 'PA', 'ulisestrejos1887@icloud.com', '', '67601673', 1, '2023-09-02 16:46:37', 20),
(95, 'EDILBERTO ', '', 'BEDOYA ', 'QUINTERO', '', 'PA', '1979-09-30', 'PA', '01GEN', '04ECL', '4-716-1769', 'PA', 'PANAMA, ARRAIJAN, VACAMONTE, ALTOS TECAL, CASA 240G', 'PA', 'doyabe3027@gmail.com', '', '61374040', 1, '2023-09-04 15:54:42', 21),
(96, 'RICARDO', 'JOSE', 'QUIROZ', 'CORRALEZ', '', 'PA', '1994-06-20', 'PA', '01GEN', '', '8-893-1325', 'PA', 'PANAMA, DARIEN, ZIMBA, CALLE SANTA FE', '', 'JCORRALEZ410@GMAIL.COM', '', '6357-1831', 1, '2023-09-04 20:42:52', 28),
(97, 'DIANA ', 'DAMARIS', 'DIAZ', 'ZAMBRANO', '', 'PA', '1995-09-09', 'PA', '02GEN', '04ECL', '8-900-81', 'PA', 'PANAMA, LAS MANIANITAS', '', 'diana@outlook.es', '+50769656981', '+50769656981', 1, '2023-09-04 21:39:35', 22),
(98, ' Alison', ' Marie', 'Varela ', 'poveda', '', 'PA', '1997-02-22', 'PA', '02GEN', '04ECL', '8-916-447', 'PA', 'Panama oeste chorrera playa leona', 'PA', '', '6758-6459', '+507 6758-6459', 1, '2023-09-05 14:22:17', 19),
(99, 'Juan ', 'Antonio ', 'Solano ', 'Cortez', '', 'PA', '1967-03-18', 'PA', '01GEN', '05ECL', '8-285-748', 'PA', 'CAMINO REAL 2 SAN ANTONIO CALLE EL RECODO 236', 'PA', '', '3879344', '', 1, '2023-09-05 19:40:14', 19),
(100, 'erguin', 'Alexander ', 'Sanchez', '', '', 'PA', '1986-08-07', 'PA', '01GEN', '05ECL', '8-802-2443', 'PA', 'panama, panama Pacora', 'PA', 'rosyalanis0815@gmail.com', '', '+507 6411-5543', 1, '2023-09-05 23:37:34', 19),
(101, 'ARIADNE ', 'ANGELICA', 'GONZALEZ', 'TORRES', '', 'PA', '2023-07-03', 'PA', '02GEN', '04ECL', '8-959-543', 'PA', 'PANAMA, MAÑANITAS, PARQUE REAL, CASA A21\r\n', 'PA', 'gonzaleztorres07ari@gmail.com', '', '69293204', 1, '2023-09-06 16:45:21', 21),
(102, ' DENIS', ' OMAR ', 'PONBO ', 'GONZÁLEZ ', '', 'PA', '2023-05-13', 'PA', '01GEN', '05ECL', '2-81-987', 'PA', 'PANAMA RESIDENCIAL URB BARRIO ESTE CALLE 4TA #21', 'PA', 'denis.pombo@gmail.com', '230-5463', '+507 6618-6733', 1, '2023-09-06 19:28:11', 19),
(103, 'Nazareth  ', 'Benigna', ' Gonzalez', ' Vasquez ', 'de Fuentes', 'PA', '1978-03-18', 'PA', '02GEN', '05ECL', '2-703-1654', 'PA', 'Cocle ,Llano Sánchez calle las mercedes', 'PA', 'nazareth.gonzalez@gmail.com', 'NO MANTIENE', '+507 6920-6790', 1, '2023-09-06 19:58:56', 19),
(104, 'DELFIN ', '', 'BONILLA', 'VELASQUEZ', '', 'PA', '1974-11-20', 'PA', '01GEN', '05ECL', '8-515-949', 'PA', 'VILLA NUEVA ALCALDE DIAZ\r\n', 'PA', '', '', '63229021', 1, '2023-09-06 20:53:35', 21),
(105, 'IRVIN', 'GONZALEZ', 'GARIBALDI', '', '', 'PA', '1968-11-23', 'PA', '01GEN', '05ECL', '3-715-862', 'PA', 'PANAMA, CORREJIMIENTO LIMON', '', '', '', '+50764809163', 1, '2023-09-06 22:43:04', 22),
(106, 'JORGE', 'JOAQUIN', 'SANCHEZ', 'MITRE', '', '', '1973-01-31', 'PA', '01GEN', '05ECL', '7-116-680', '', 'DON BOSCO URBANIZACION ALTOS DE PLAZA TOCUMEN CASA NRO 32', '', 'jjsanchez_7@icloud.com', '3919097', '+507 6634-0269', 1, '2023-09-07 15:47:29', 22),
(107, 'IMELHYN ', 'ISHEL', 'NAVARRO', 'ATENCIO', '', 'PA', '1995-07-10', 'PA', '02GEN', '05ECL', '8-896-1577', 'PA', 'PANAMA, SAN MARTIN, RIO INDIO, CASA S/N, CALLE P', 'PA', 'emora1909@gmail.com', '', '68978081', 1, '2023-09-07 17:47:48', 21),
(108, 'GERARDO', 'ENRIQUE', 'CALLENDER ', 'HINESTROZ', '', 'PA', '1996-08-26', 'PA', '', '04ECL', '8-909-1039', 'PA', 'PANAMA, PARQUE LEFEVRE PANAMA VIEJO, CALLE 6TA CASA 186', 'PA', '', '', '+50767684858', 1, '2023-09-07 20:13:27', 22),
(109, 'Alwiera ', 'Doerksen ', 'Hiebert', '', '', 'PY', '1975-06-03', 'PY', '02GEN', '04ECL', 'E-8-1759958', 'PA', 'MARBELLA, CALLE 47 ESTE, BV625 TORRE MARBELLA PISO 9\r\nAPARTAMENTO 9 B CERCA DE BRAVA PIZZA DETRAS DEL BANCO\r\nGENERAL DE MARBELL', 'PA', '', '+49 162 3823657', '+49 162 3823657', 1, '2023-09-07 22:07:17', 19),
(110, 'Aschmed', '', 'Sanchez', 'Barsallo', '', 'PA', '1970-01-01', 'PA', '01GEN', '05ECL', '8-437-723', 'PA', 'Dorado Lakes casa 80', 'PA', 'aschmedsanchez@gmail.com', '', '6030-9656', 1, '2023-09-07 22:19:22', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_ocupacionales`
--

CREATE TABLE `cc_ocupacionales` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `fo_profesion` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fo_ocupacion` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fo_lugar_trabajo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fo_direccion_trabajo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fo_correo_trabajo` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fo_telefono_trabajo` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fo_nombre_negocio` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fo_aviso_operaciones` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fo_licita_estado` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fo_pais_residencia_fiscal` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_ocupacionales`
--

INSERT INTO `cc_ocupacionales` (`id`, `id_general`, `fo_profesion`, `fo_ocupacion`, `fo_lugar_trabajo`, `fo_direccion_trabajo`, `fo_correo_trabajo`, `fo_telefono_trabajo`, `fo_nombre_negocio`, `fo_aviso_operaciones`, `fo_licita_estado`, `fo_pais_residencia_fiscal`) VALUES
(24, 25, '49PRO', '75PRO', 'CHIRIQUI VOLCAN ', 'CHIRIQUI VOLCAN', '', '', '', '', '', ''),
(25, 26, '', '', '', '', '', '', '', '', '', ''),
(26, 27, '13PRO', '68PRO', 'JUBILADA, SUPER BARU INTERAMERICANA', 'TERRONAL', '', '', '', '', '', ''),
(27, 28, '', '', '', '', '', '', '', '', '', ''),
(28, 29, '', '', '', '', '', '', '', '', '', ''),
(29, 30, '', '', '', '', '', '', '', '', '', ''),
(30, 31, '42PRO', '42PRO', 'COSTA RICA ', 'COSTA RICA SAN JOSE SAN FRACIAS', 'TADEOSARASTY01@GMAIL.COM', '', 'INVERSIONES SYC SARASTY', '', 'NO', ''),
(31, 32, '30PRO', '30PRO', 'PANAMA CAR RENTAL ', 'Ave. Domingo Diaz, Tocumen Commercial Park, Local 17', 'omar.carrillo @grupopcr.com.pa', '279-2758', '', '', 'NO', ''),
(32, 33, '15PRO', '', 'Matriceria y torneria Nuñez S.A', 'El coco la chorrera', '', '', '', '', 'NO', ''),
(33, 34, '15PRO', '15PRO', 'pcr', 'panama ', 'angel.buitrago@grupopcr.com.pa', '', '', '', 'SI', 'PA'),
(34, 35, '51PRO', '51PRO', 'Medico, caja del seguro social', '', '', '', '', '', 'NO', ''),
(35, 36, '15PRO', '15PRO', 'C.E.B.G. V. DE HERRADURA', 'PANAMA OESTE, LA PESA', '', '', '', '', '', ''),
(36, 37, '49PRO', '19PRO', 'FONDA NAYEDNA', 'PANAMA, PANAMA OESTE', '', '', '', '8-374-155-2014-', '', ''),
(37, 38, '15PRO', '19PRO', 'NICOLAS SOLANO ', 'PUERTO CAIMITO, CORREGIMIENTO MARIANO RIVERA ', 'TBETZAIDA_12@HOTMAIL.COM', '254-8974', '', '', '', ''),
(38, 39, '15PRO', '15PRO', 'BANITMO', '', '', '', '', '', '', ''),
(39, 40, '15PRO', '15PRO', 'CENTRO DE SALUD DELIDICE ', 'CAPIRA', 'EDITHMORAN08@GMAIL.COM', '6388-6945', '', '', '', ''),
(40, 41, '15PRO', '15PRO', 'MMG BANK CORPORATION', '', '', '', '', '', '', ''),
(41, 42, '69PRO', '', 'CAJA DE SEGURO Y SANTO TOMAS', '5 DE MAYO Y CALIDONIA', '', '5031700', '', '', '', ''),
(42, 43, '76PRO', '16PRO', 'SOFRATESA', 'MAÑANTAS, BODEGAS', '', '3085300', '', '', 'NO', ''),
(43, 44, '15PRO', '15PRO', 'TU LOTE S.A', 'PANAMA, PANAMA', '', '', '', '', '', ''),
(44, 45, '47PRO', '47PRO', 'MINISTERIO DE EDUCACION', 'COLON', '', '', '', '', 'SI', 'PA'),
(45, 46, '49PRO', '58PRO', 'INDEPENDIENTE REPARADOR DE COMPUTADORAS DE CARROS', 'PUEBLO NUEVO VISTA HERMOSA ', '', '6486-1007', 'servicios electromecanica y computacion - alexis', '8-371-714 DV-0', 'NO', ''),
(46, 47, '76PRO', '15PRO', 'Ministerio de Salud', 'Panamá', '', '', '', '', 'NO', ''),
(47, 48, '76PRO', '72PRO', 'AGENCIA FEDURO', 'TUMBA MUERTO', '', '', '', '', 'NO', ''),
(48, 49, '76PRO', '76PRO', 'INADEH', 'PENONOME', '', '906-0596', '', '', 'NO', ''),
(49, 50, '49PRO', '49PRO', 'ZONA LIBRE DE COLON', 'ZONA LIBRE DE COLON', 'JESUS.YUSLIET@GMAIL.COM', '', 'JESUS YUSLIET ECHEVERRIAR', 'JESUS YUSLIET ECHEVERRIAR', 'NO', 'PA'),
(50, 51, '63PRO', '74PRO', 'TIGO PANAMA', '12 DE OCTUBRE', 'BRAULIO9328@GMAIL.COM', '', '', '', '', ''),
(52, 53, '15PRO', '15PRO', 'POLICLINICA DE ARRAIJAN', 'ARRAIJAN CABECERA', '', '', '', '', '', ''),
(53, 54, '75PRO', '75PRO', 'CHIRIQUI, DISTRITO DE BOQUERON ', 'CHIRIQUI, DISTRITO DE BOQUERON ', 'LAVICTORIASTORE@GMAIL.COM', '6833-7730', 'AUTOVENTA LA VICTORIA ', 'LA VICTORIA CARS STORE Y SERVICIOS', 'NO', ''),
(54, 55, '09PRO', '09PRO', 'PARQUE OMAR ', 'PARQUE OMAR ', 'omar.carrillo @grupopcr.com.pa', '2792758', 'PARQUE OMAT ', '0000000-000000-2022', 'NO', ''),
(55, 56, '', '76PRO', 'JUBILADO', 'JUBILADO', '', '', '', '', '', ''),
(56, 57, '15PRO', '65PRO', 'JUBILADO', '', '', '', '', '', '', ''),
(57, 58, '49PRO', '49PRO', 'TEACHE', '', '', '', '', '', '', ''),
(62, 64, '19PRO', '19PRO', 'FONDA PUNTO PICANTE', 'Subiendo hacia cerro azul ', '', '', '', '', '', ''),
(63, 65, '15PRO', '15PRO', 'TREVI PANAMA ', 'ARRAIJAN, INTERAMERICANA ', 'ALEJANDROSANDOVALLL@HOTMAIL.COM', '6757-9546', '', '', '', ''),
(64, 66, NULL, NULL, 'ERSIGRUP', 'AV. CENTENARIO AREA INDUSTRIAL LINEA 3 DEL METRO', '', '', '', '', '', ''),
(65, 67, '28PRO', '28PRO', 'Hatchinson Ports', 'COLON', '', '65072411', '', '', 'NO', ''),
(67, 69, '30PRO', '30PRO', 'CONTRALORIA ', 'PANAMA PUERTO BALBOA', 'NO MANTIENE', 'NO MANTIENE', '', '', 'SI', 'PA'),
(68, 70, '49PRO', '49PRO', 'SHINE ACADEMY 507', 'PANAMA, BETANIA PLAZA MIRAGE LOCAL 1', 'raulshine06@gmail.com', '', 'Shine Acadamy 507', '', 'NO', ''),
(69, 71, '56PRO', '15PRO', 'ERSI GROUP PANAMA S.A.', 'TALLER CENENARIO', '', '661780805', '', '', '', ''),
(70, 72, '15PRO', '15PRO', 'CEMENTO BAÑANO', 'CEMENTO BAÑANO  LOS ANDES', '', '', 'CEMENTO BAÑANO', '', 'SI', ''),
(71, 73, '15PRO', '15PRO', 'SMITHSONIAN', 'ANCON', '', '6336370', '', '', '', ''),
(72, 74, '36PRO', '18PRO', 'BANISI', 'Calle 50', '', '62730412', '', '', 'NO', 'PA'),
(73, 75, '15PRO', '15PRO', 'ACP MIRAFLORES ', 'ANCON MIRAFLORES ', 'IVANORLABRADOR16@GMAIL.COM', '276-8860', '', '', '', ''),
(74, 76, '76PRO', '76PRO', 'JUBILADO', '', '', '', '', '', 'SI', ''),
(75, 77, '15PRO', '15PRO', 'ITSMO SERVICES PANAMA', 'CINTA COSTERA', '', '', '', '', '', ''),
(76, 78, '76PRO', '76PRO', 'JUBILADO', '', '', '+50767091610', '', '', '', ''),
(77, 79, '14PRO', '14PRO', 'Independiente', '', '', '', '', '', '', ''),
(78, 80, '15PRO', '15PRO', 'BAC PANAMA', 'CALLE ERMIRA MENDEZ', '', '', '', '', '', ''),
(79, 81, '15PRO', '15PRO', 'BONLAC', 'ENTRADA DE BRISAS DEL GOLF NORTE', '', '3958500', '', '', '', 'PA'),
(80, 82, '15PRO', '15PRO', 'HALEON', 'COSTA DEL ESTE', '', '506-41067120', '', '', 'NO', 'CR'),
(81, 83, '15PRO', '15PRO', 'DISTRIBUIDORA RALI, S.A.', 'AVE BALBOA EDIFICIO SKY BUSSINESS CENTER PANAMA', '', '2203844', '', '', 'NO', ''),
(82, 84, '', '', '', '', '', '', '', '', '', ''),
(83, 85, '15PRO', '15PRO', 'ELECTRO SISTEMAS DE PANAMA, S.A.', 'Via Ernesto T. Lefevre, frente a la estación Delta', '', '222-2229', '', '', '', ''),
(84, 86, '64PRO', '15PRO', 'JUBILADO / PILOTO INSTRUCTOR', 'JUBILADO', '', '', '', '', 'NO', ''),
(85, 87, '15PRO', '15PRO', 'OPTICAS SOSA Y ARANGO ', 'LOS ANDES MALL ', '', '236-5304', '', '', 'NO', ''),
(86, 88, '49PRO', '49PRO', 'Puerto escondido ', 'Puerto escondido ', '', '', '', '', 'SI', ''),
(87, 89, '15PRO', '15PRO', 'HOPSA ', 'NUEVO ARRAIJAN ', '', '', '', '', '', ''),
(88, 90, '49PRO', '49PRO', 'PANAMA PANAMA', 'PANAMA PANAMA', '', '+507 6432-1477', '', '', '', ''),
(89, 91, '67PRO', '67PRO', 'COMPAÑIA DE SEGUROS ASSA', 'Tumba Muerto', '', '', '', '', '', ''),
(90, 92, '15PRO', '15PRO', 'CLAYTON', 'INTERNATIONAL SCHOOL PANAMA', '', '+507 3217977', '', '', '', ''),
(91, 93, '15PRO', '15PRO', 'SICOLOGA ', 'PROGRAMA MUNDIAL DE ALIMENTOS', '', '+507 317-3900', 'PROGRAMA MUNDIAL DE ALIMENTOS', 'PROGRAMA MUNDIAL DE ALIMENTOS', '', ''),
(92, 94, '59PRO', '59PRO', 'JUBILADO', '', '', '', '', '', 'NO', ''),
(93, 95, '15PRO', '15PRO', 'SERVI ESTIBA', 'ANCON, PUERTO BALBOA', '', '315-0752', '', '', 'NO', ''),
(94, 96, '15PRO', '15PRO', '', '', '', '', '', '', '', ''),
(95, 97, '76PRO', '15PRO', 'PHILIPS', 'COSTA DEL ESTE ', '', '', '', '', '', ''),
(96, 98, '15PRO', '15PRO', 'NELLO CREATIONS', 'BRISAS DEL GOLF ARRAIJAN', '', '68191796', '', '', '', ''),
(97, 99, '15PRO', '15PRO', 'EDESA', 'CAMINO REAL 2 SAN ANTONIO CALLE EL RECODO 236\r\n', '', '507 6633-8640', '', '', 'SI', ''),
(98, 100, '49PRO', '49PRO', 'Transporte ALAIN', 'panama ,panama Pacora ', '', '', '', '', '', ''),
(99, 101, '15PRO', '15PRO', 'SOLUMEDIC', 'HOSPITAL PUNTA PACIFICA', '', '2048505', '', '', 'NO', ''),
(100, 102, '06PRO', '15PRO', 'JUBILADO ', 'JUBILADO ', '', '', '', '', 'SI', 'PA'),
(101, 103, '30PRO', '30PRO', 'CONTADOR INDEPENDIENTE', 'Llano Sánchez calle las mercedes', 'Nazareth.Benigna@gmail.com', '+507 6920-6790', ' Nazareth  Benigna Gonzalez Vasquez de Fuentes', 'Nazareth  Benigna Gonzalez Vasquez de Fuentes', 'SI', 'PA'),
(102, 104, '15PRO', '15PRO', 'ACP ', 'COROZAL', '', '276-8611', '', '', 'NO', ''),
(103, 105, '76PRO', '15PRO', 'VPAK PANAMA ATLANTIC INC', 'CATIVA TERMINAL BAHIA LAS MINAS', 'irvg1698@gmail.com', '4780050', '', '', '', ''),
(104, 106, '76PRO', '15PRO', 'ACP', 'Corosal Oeste Edf 702', '', '2763203', '', '', '', ''),
(105, 107, '15PRO', '15PRO', 'CENTRO MEDICO VEIRA CISNEROS', 'VIA SANTA ELENA, COSTADO DE CASA DE ORACION CRISTIANA, CALLE ANGELICA SALVAE', '', '3946681', '', '', 'NO', ''),
(106, 108, '66PRO', '49PRO', 'POWER NUTRITION', 'PANAMA PLAZA 5 DE MAYO', 'gerardocal558@gmail.com', '2775928', '', '', '', ''),
(107, 109, '49PRO', '50PRO', 'MOVIL', '', '', '+49 162 3823657', 'ALWIRA DOERKSEN Hilbert', 'ALWIRA DOERKSEN Hilbert', 'NO', 'PA'),
(108, 110, '06PRO', '06PRO', 'Ministerio de trabajo', 'Plaza Edison', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_personas_expuestas`
--

CREATE TABLE `cc_personas_expuestas` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `fp_beneficiario` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fp_nombre_completo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fp_cargo_actual` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fp_otro` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fp_fecha` date DEFAULT NULL,
  `fp_cargo_anterior` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fp_fecha_anterior` date DEFAULT NULL,
  `fp_comentario` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_personas_expuestas`
--

INSERT INTO `cc_personas_expuestas` (`id`, `id_general`, `fp_beneficiario`, `fp_nombre_completo`, `fp_cargo_actual`, `fp_otro`, `fp_fecha`, `fp_cargo_anterior`, `fp_fecha_anterior`, `fp_comentario`) VALUES
(20, 25, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(21, 26, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(22, 27, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(23, 28, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(24, 29, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(25, 30, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(26, 31, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(27, 32, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(28, 33, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(29, 34, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(30, 35, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(31, 36, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(32, 37, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(33, 38, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(34, 39, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(35, 40, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(36, 41, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(37, 42, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(38, 43, '109BFF', '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(39, 44, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(40, 45, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(41, 46, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(42, 47, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(43, 48, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(44, 49, '109BFF', '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(45, 50, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(46, 51, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(48, 53, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(49, 54, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(50, 55, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(51, 56, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(52, 57, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(53, 58, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(58, 64, '109BFF', '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(59, 65, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(60, 66, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(61, 67, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(63, 69, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(64, 70, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(65, 71, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(66, 72, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(67, 73, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(68, 74, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(69, 75, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(70, 76, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(71, 77, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(72, 78, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(73, 79, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(74, 80, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(75, 81, '109BFF', '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(76, 82, '109BFF', '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(77, 83, '109BFF', '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(78, 84, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(79, 85, '109BFF', '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(80, 86, '109BFF', '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(81, 87, '109BFF', '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(82, 88, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(83, 89, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(84, 90, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(85, 91, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(86, 92, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(87, 93, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(88, 94, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(89, 95, '109BFF', '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(90, 96, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(91, 97, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(92, 98, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(93, 99, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(94, 100, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(95, 101, '109BFF', '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(96, 102, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(97, 103, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(98, 104, '109BFF', '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(99, 105, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(100, 106, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(101, 107, '109BFF', '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(102, 108, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(103, 109, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', ''),
(104, 110, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_adjuntos`
--

CREATE TABLE `cc_pj_adjuntos` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `pjad_identificacion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjad_pacto_social` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjad_aviso_operaciones` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjad_evidencia_ingreso` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_pj_adjuntos`
--

INSERT INTO `cc_pj_adjuntos` (`id`, `id_general`, `pjad_identificacion`, `pjad_pacto_social`, `pjad_aviso_operaciones`, `pjad_evidencia_ingreso`) VALUES
(9, 23, 'vistas/adjuntos/cedula_pj/23_649c87e74fbeb.pdf', NULL, NULL, NULL),
(10, 24, 'vistas/adjuntos/cedula_pj/24_64a9ddd09fdbd.txt', NULL, NULL, NULL),
(12, 27, NULL, NULL, NULL, NULL),
(13, 29, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_apoderados`
--

CREATE TABLE `cc_pj_apoderados` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `pja_nombre_completo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pja_cargo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pja_nacionalidad` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pja_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pja_correo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pja_direccion` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pja_telefono` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_apoderados_temp`
--

CREATE TABLE `cc_pj_apoderados_temp` (
  `id` int NOT NULL,
  `a_temp_id_session` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `a_temp_nombre_completo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `a_temp_cargo` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `a_temp_nacionalidad` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `a_temp_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `a_temp_correo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `a_temp_direccion` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `a_temp_telefono` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_beneficiario_declaracion_jurada`
--

CREATE TABLE `cc_pj_beneficiario_declaracion_jurada` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `pjbdj_nombre_completo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjbdj_fecha` date DEFAULT NULL,
  `pjbdj_firma` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_beneficiario_final`
--

CREATE TABLE `cc_pj_beneficiario_final` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `pjbf_transpaso_cliente_tercero` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjbf_relacion_cliente` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjbf_primer_nombre` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjbf_segundo_nomnbre` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjbf_apellido_parterno` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjbf_apellido_materno` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjbf_apellido_casada` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjbf_pais_nacimiento` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjbf_fecha_nacimiento` date DEFAULT NULL,
  `pjbf_nacionalidad` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjbf_genero` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjbf_cedula_pasaporte` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjbf_estado_civil` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjbf_pais_residencia` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjbf_pais_residencia_fiscal` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjbf_direccion_residencia` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjbf_correo` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjbf_telefono_residencial` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjbf_telefono_celular` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjbf_profesion` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjbf_ocupacion` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjbf_lugar_trabajo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjbf_direccion_trabajo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_pj_beneficiario_final`
--

INSERT INTO `cc_pj_beneficiario_final` (`id`, `id_general`, `pjbf_transpaso_cliente_tercero`, `pjbf_relacion_cliente`, `pjbf_primer_nombre`, `pjbf_segundo_nomnbre`, `pjbf_apellido_parterno`, `pjbf_apellido_materno`, `pjbf_apellido_casada`, `pjbf_pais_nacimiento`, `pjbf_fecha_nacimiento`, `pjbf_nacionalidad`, `pjbf_genero`, `pjbf_cedula_pasaporte`, `pjbf_estado_civil`, `pjbf_pais_residencia`, `pjbf_pais_residencia_fiscal`, `pjbf_direccion_residencia`, `pjbf_correo`, `pjbf_telefono_residencial`, `pjbf_telefono_celular`, `pjbf_profesion`, `pjbf_ocupacion`, `pjbf_lugar_trabajo`, `pjbf_direccion_trabajo`) VALUES
(15, 23, NULL, NULL, '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 24, NULL, NULL, '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 27, '109BFF', NULL, '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 29, NULL, NULL, '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_declaracion_accionista`
--

CREATE TABLE `cc_pj_declaracion_accionista` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `pjda_nombre_completo_accionista` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjda_participacion_accionaria` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_pj_declaracion_accionista`
--

INSERT INTO `cc_pj_declaracion_accionista` (`id`, `id_general`, `pjda_nombre_completo_accionista`, `pjda_participacion_accionaria`) VALUES
(61, 23, '', ''),
(62, 23, '', ''),
(63, 23, '', ''),
(64, 23, '', ''),
(65, 24, '', ''),
(66, 24, '', ''),
(67, 24, '', ''),
(68, 24, '', ''),
(73, 27, '', ''),
(74, 27, '', ''),
(75, 27, '', ''),
(76, 27, '', ''),
(77, 29, '', ''),
(78, 29, '', ''),
(79, 29, '', ''),
(80, 29, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_declaracion_fuentes`
--

CREATE TABLE `cc_pj_declaracion_fuentes` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `pjdf_actividad_principal` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjdf_actividad_secundaria` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjdf_otras_fuentes` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjdf_otras_fuentes_secundaria` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjdf_limite_compra` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjdf_forma_pago` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjdf_metodo_pago_1` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjdf_metodo_pago_2` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_pj_declaracion_fuentes`
--

INSERT INTO `cc_pj_declaracion_fuentes` (`id`, `id_general`, `pjdf_actividad_principal`, `pjdf_actividad_secundaria`, `pjdf_otras_fuentes`, `pjdf_otras_fuentes_secundaria`, `pjdf_limite_compra`, `pjdf_forma_pago`, `pjdf_metodo_pago_1`, `pjdf_metodo_pago_2`) VALUES
(21, 23, 'COMPRA Y VENTA IMPORTACION DE VEHICULOS', 'VENTA DE EQUIPO PARA AGRICULTURA', 'FINANCIERA DE AUTOS', 'N/A', '100LIM', '48PRO', '101MDP', '102MDP'),
(22, 24, '', '', '', '', '', '', '', ''),
(24, 27, 'INGRESO POR EL NEGOCIO', '', '', '', '93LIM', '76PRO', '101MDP', '101MDP'),
(25, 29, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_declaracion_jurada`
--

CREATE TABLE `cc_pj_declaracion_jurada` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `pjdj_nombre_completo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjdj_fecha` date DEFAULT NULL,
  `pjdj_firma` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_pj_declaracion_jurada`
--

INSERT INTO `cc_pj_declaracion_jurada` (`id`, `id_general`, `pjdj_nombre_completo`, `pjdj_fecha`, `pjdj_firma`) VALUES
(9, 23, 'JORGE EDUARDO SANTAMARIA FONSECA', '1970-01-01', 'vistas/adjuntos/firma_pj/23_649c87e7485b0.docx'),
(10, 24, '', '1970-01-01', 'vistas/adjuntos/firma_pj/24_64a9ddd09c45b.PNG'),
(12, 27, '', '1970-01-01', NULL),
(13, 29, '', '1970-01-01', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_declaracion_jurada_2`
--

CREATE TABLE `cc_pj_declaracion_jurada_2` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `p_jdj_nombre_completo_2` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `p_jdj_fecha_2` date DEFAULT NULL,
  `p_jdj_firma_2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_pj_declaracion_jurada_2`
--

INSERT INTO `cc_pj_declaracion_jurada_2` (`id`, `id_general`, `p_jdj_nombre_completo_2`, `p_jdj_fecha_2`, `p_jdj_firma_2`) VALUES
(7, 23, 'CORPORACION IMPORTADORA DE VEHICULOS Y AFINES BESA SOCIEDAD ANONIMA', '1970-01-01', NULL),
(8, 24, '', '1970-01-01', 'vistas/adjuntos/firma_pj/24_64a9ddd09e67b.jpg'),
(10, 27, '', '1970-01-01', NULL),
(11, 29, '', '1970-01-01', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_directiva_dignatarios`
--

CREATE TABLE `cc_pj_directiva_dignatarios` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `pjdd_nombre_completo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjdd_cargo` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjdd_nacionalidad` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjdd_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjdd_correo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjdd_direccion` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjdd_telefono` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_pj_directiva_dignatarios`
--

INSERT INTO `cc_pj_directiva_dignatarios` (`id`, `id_general`, `pjdd_nombre_completo`, `pjdd_cargo`, `pjdd_nacionalidad`, `pjdd_id`, `pjdd_correo`, `pjdd_direccion`, `pjdd_telefono`) VALUES
(7, 23, 'RITA STEPHANIE SANTAMARIA ACUÑA', 'TESORERO', 'CR', ' 1-1522-0665', 'Ritaticocar@gmail.com', 'SAN JOSE COSTA RICA', '+5068865-7979'),
(8, 23, 'RITA STEPHANIE SANTAMARIA ACUÑA', 'TESORERO', 'CR', ' 1-1522-0665', 'Ritaticocar@gmail.com', 'SAN JOSE COSTA RICA', '+5068865-7979'),
(9, 23, 'RITA STEPHANIE SANTAMARIA ACUÑA', 'TESORERO', 'CR', ' 1-1522-0665', 'Ritaticocar@gmail.com', 'SAN JOSE COSTA RICA', '+5068865-7979'),
(10, 27, 'GUILLERMO BETHANCOURT CABALLERO', 'TESORERO', 'PA', '8-813-578', '', '', ''),
(11, 27, 'GUILLERMO BETHANCOURT CABALLERO', 'TESORERO', 'PA', '8-813-578', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_directiva_dignatarios_temp`
--

CREATE TABLE `cc_pj_directiva_dignatarios_temp` (
  `id` int NOT NULL,
  `jd_temp_id_session` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jd_temp_nombre_completo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jd_temp_cargo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jd_temp_nacionalidad` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jd_temp_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jd_temp_correo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jd_temp_direccion` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jd_temp_telefono` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_pj_directiva_dignatarios_temp`
--

INSERT INTO `cc_pj_directiva_dignatarios_temp` (`id`, `jd_temp_id_session`, `jd_temp_nombre_completo`, `jd_temp_cargo`, `jd_temp_nacionalidad`, `jd_temp_id`, `jd_temp_correo`, `jd_temp_direccion`, `jd_temp_telefono`) VALUES
(7, '180fa6262a22d5f221010fded3894ebd', 'RICARDO DE LA GUARDIA DE OBARRIO', 'SECRETARIO', 'PA', '8-738-1347', 'rdlg@grupopcr.com.pa', '', ''),
(9, '180fa6262a22d5f221010fded3894ebd', 'MARIA EUGENIA DE LA GUARDIA DE LEWIS', 'TESORERO', 'PA', '8-771-743', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_expediente`
--

CREATE TABLE `cc_pj_expediente` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `pjexp_fecha` date DEFAULT NULL,
  `pjexp_cliente` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjexp_marca` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjexp_modelo` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjexp_anio` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjexp_placa` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjexp_chasis` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjexp_motor` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjexp_color` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjexp_codigo_dollar` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjexp_n_intelisis` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjexp_cedula_pasaporte` bit(1) DEFAULT NULL,
  `pjexp_recibo_servicio` bit(1) DEFAULT NULL,
  `pjexp_hoja_contabiidad` bit(1) DEFAULT NULL,
  `pjexp_proforma` bit(1) DEFAULT NULL,
  `pjexp_factura_venta` bit(1) DEFAULT NULL,
  `pjexp_contrato_garantia` bit(1) DEFAULT NULL,
  `pjexp_contrato_consignacion` bit(1) DEFAULT NULL,
  `pjexp_contrato_como_donde` bit(1) DEFAULT NULL,
  `pjexp_exoneracion_responsabilidad` bit(1) DEFAULT NULL,
  `pjexp_documneto_traspaso` bit(1) DEFAULT NULL,
  `pjexp_hoja_entrada` bit(1) DEFAULT NULL,
  `pjexp_carta_promesa` bit(1) DEFAULT NULL,
  `pjexp_recibo_abono` bit(1) DEFAULT NULL,
  `pjexp_recibo_traspaso` bit(1) DEFAULT NULL,
  `pjexp_recibos_pago` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_pj_expediente`
--

INSERT INTO `cc_pj_expediente` (`id`, `id_general`, `pjexp_fecha`, `pjexp_cliente`, `pjexp_marca`, `pjexp_modelo`, `pjexp_anio`, `pjexp_placa`, `pjexp_chasis`, `pjexp_motor`, `pjexp_color`, `pjexp_codigo_dollar`, `pjexp_n_intelisis`, `pjexp_cedula_pasaporte`, `pjexp_recibo_servicio`, `pjexp_hoja_contabiidad`, `pjexp_proforma`, `pjexp_factura_venta`, `pjexp_contrato_garantia`, `pjexp_contrato_consignacion`, `pjexp_contrato_como_donde`, `pjexp_exoneracion_responsabilidad`, `pjexp_documneto_traspaso`, `pjexp_hoja_entrada`, `pjexp_carta_promesa`, `pjexp_recibo_abono`, `pjexp_recibo_traspaso`, `pjexp_recibos_pago`) VALUES
(22, 23, '2023-06-28', 'Corporacion Importadora de Vehiculos y Afi Besa S.A', 'TOYOTA', 'LAND CRUISER', '2019', 'CU4536', 'JTFBV71JXK7651766', '1VD-452697A', 'BLANCO', 'LCI-15', 'AU25226', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 24, '1970-01-01', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 26, '1970-01-01', 'PORTICO DISEÑO Y CONSTRUCCIÓN S.A.', 'TOYOTA', 'HILUX', '2020', 'EB3485', '8AJFB3CD401516018', '2GD-4809498', 'SUPER WHIT', 'PPEX-205', 'AU25763', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 27, '2023-08-23', '', 'TOYOTA', 'HILUX', '2020', 'EB3178', '8AJFB3CD701514263', '2GD4760930 ', 'SUPER WHITE II', 'PPEX-170', 'AU25616', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 28, '2023-08-31', 'PANARENTING S.A', 'TOYOTA', 'HILUX', '2023', 'EC0960', '8AJDB3CD301314357', '2GD1023549', 'grey metallic', 'PPHX-1115', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 29, '2023-09-01', '', 'NISSAN', 'NP300 FRONTIER', '2022', 'EA0806', '3N6CD33B6ZK442297', 'YD25743663P', 'PLATA', 'PFNX-53', 'AU25908', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_generales`
--

CREATE TABLE `cc_pj_generales` (
  `id` int NOT NULL,
  `pjgn_id_user` int DEFAULT NULL,
  `pjgn_stat` int DEFAULT NULL,
  `pjgn_razon_social` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgn_nombre_comercial` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgn_datos_inscripcion` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgn_tipo_persona` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgn_direccion_fisica` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgn_pais_constitucion` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgn_residencia_fiscal` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgn_ruc_dv` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgn_telefono` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgn_apartado_postal` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgn_aviso_operacion` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgn_licencia` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgn_entidad_reguladora` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgn_actividad_principal_dedica` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgn_descripcion_negocio` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgn_paises_ofrece_productos_servicios` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgn_contacto` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgn_email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgn_cargo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fecha_log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_pj_generales`
--

INSERT INTO `cc_pj_generales` (`id`, `pjgn_id_user`, `pjgn_stat`, `pjgn_razon_social`, `pjgn_nombre_comercial`, `pjgn_datos_inscripcion`, `pjgn_tipo_persona`, `pjgn_direccion_fisica`, `pjgn_pais_constitucion`, `pjgn_residencia_fiscal`, `pjgn_ruc_dv`, `pjgn_telefono`, `pjgn_apartado_postal`, `pjgn_aviso_operacion`, `pjgn_licencia`, `pjgn_entidad_reguladora`, `pjgn_actividad_principal_dedica`, `pjgn_descripcion_negocio`, `pjgn_paises_ofrece_productos_servicios`, `pjgn_contacto`, `pjgn_email`, `pjgn_cargo`, `fecha_log`) VALUES
(1, 1, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '2023-05-30 04:53:27'),
(23, 24, 1, 'CORPORACION IMPORTADORA DE VEHICULOS Y AFINES BESA SOCIEDAD ANONIMA', 'CORPORACION IMPORTADORA DE VEHICULOS Y AFINES BESA SOCIEDAD ANONIMA', 'TOMO: 561 ASIENTO: 18100 FECHA INSCRIPCION / TRASLADO: 14/12/2005 ', '', ': SAN JOSE-SAN JOSE SAN SEBASTIAN, 400 METROS NORTE DEL TEMPLO CATOLICO, OFICINAS DE TICOCAR', 'CR', 'NUMERO DE CERTIFICACION: RNPDIGITAL-866409-2023 \r\nPERSONA JURIDICA: 3-101-424610', '3-101-424610', '+5068865-7979', 'NO TIENE', '', '', 'REGISTRO NACIONAL CERTIFICACION LITERAL', 'COMERCIO, INDUSTRIA, AGRICULTURA,, PODRA VENDER, ENAJENAR, OTORGAR FIANZAS Y GARANTIAS.', 'importación de vehiculos', 'CR', NULL, 'jcambrosant@gmail.com', 'PRESIDENTE', '2023-06-28 19:20:07'),
(24, 1, 1, 'sanchezgrupopcr2023', 'sanchezgrupopcr2023', 'sanchezgrupopcr2023', '02TDPJ', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '2023-07-08 22:06:08'),
(26, 20, 1, 'PORTICO DISEÑO Y CONSTRUCCIÓN S.A. ', 'PORTICO DISEÑO Y CONSTRUCCIÓN S.A. ', '.', '', 'Panamá, Parque Lefevre, Calle san Ignacio, casa 22.', NULL, 'Panamá, Parque Lefevre, Calle san Ignacio, casa 22.', '155691029-2-2020 DV65', '2358325', '.', '155691029-2-2020-574233368', '.', '.', 'Remodelaciones, Fontanería, Construcción y Mantenimientos.', 'Remodelaciones, Fontanería, Construcción y Mantenimientos.', '', NULL, 'alfredobrozeg@hotmail.com', '.', '2023-08-22 20:04:50'),
(27, 21, 1, 'GESODI ENERGIA, S.A.', 'GESODI ENERGIA', '', '', 'SAN MIGUELITO, AMELIA DENIS DE ICAZA, URB VILLAS DE VIZCAYA, CASA 17-A', 'PA', '', '155678802 2-2019 DV 46', '6673-6880', '', '155678802-2-2019-2019-611368', '', 'MICI', 'Desarrollo de planos y documentación de proyectos fotovoltaicos', 'Venta al por mayor de paneles solares y equipos fotovoltaicos', 'PA', NULL, 'rlinares@gesodi.com', 'REPRESENTANTE LEGAL', '2023-08-23 21:22:28'),
(28, 23, 1, 'PANARENTING S.A', 'PANARENTING S.A', '', '', 'PLAZA COMMERCIAL PARK, EDIFICIO PLAZA COMMERCIAL PARK, LOCAL 17.', 'PA', 'PLAZA COMMERCIAL PARK, EDIFICIO PLAZA COMMERCIAL PARK, LOCAL 17.', '155653956-2-2017 DV 8', '2366785', '', '', '', '', 'VENTA AL POR M ENOR DE VEHICULOS AUTOMOTORES- RENTA Y ALQUILER DE VEHICULOS AUTOMOTORES SIN CONDUCTOR', '', '', NULL, '', '', '2023-08-31 17:14:38'),
(29, 28, 1, 'IP NET GROUP INC.', 'NET DATA', '', '', 'PANAMA, DISTRITO DE PANAMA', 'PA', '', '155684721-2-2019-2020-574240569', '6676-5109', '', '', '', '', '', '', '', NULL, '', '', '2023-09-04 17:00:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_generales_beneficiarios_juridica`
--

CREATE TABLE `cc_pj_generales_beneficiarios_juridica` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `gbfpj_nombre_completo_accionista` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbfpj_pais_constitucion` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbfpj_fecha_constitucion` date DEFAULT NULL,
  `gbfpj_tipo_pj` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbfpj_direccion` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbfpj_ruc` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbfpj_sector_economico` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbfpj_telefono` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbfpj_porcentaje_participacion` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_generales_beneficiarios_juridica_temp`
--

CREATE TABLE `cc_pj_generales_beneficiarios_juridica_temp` (
  `id` int NOT NULL,
  `gbfpj_temp_id_session` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbfpj_temp_nombre_completo_accionista` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbfpj_temp_pais_constitucion` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbfpj_temp_fecha_constitucion` date DEFAULT NULL,
  `gbfpj_temp_tipo_pj` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbfpj_temp_direccion` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbfpj_temp_ruc` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbfpj_temp_sector_economico` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbfpj_temp_telefono` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbfpj_temp_porcentaje_participacion` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_generales_beneficiarios_natural`
--

CREATE TABLE `cc_pj_generales_beneficiarios_natural` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `pjgbf_nombre_completo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgbf_genero` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgbf_identificacion` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgbf_nacionalidad` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgbf_pais_nacimiento` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgbf_fecha_nacimiento` date DEFAULT NULL,
  `pjgbf_pais_residencia` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgbf_pais_residencia_fiscal` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgbf_profesion_oficio` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgbf_lugar_trabajo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgbf_telefono` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgbf_correo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgbf_domicilio_laboral` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgbf_domicilio_personal` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjgbf_porcentaje_participacion` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_generales_bf`
--

CREATE TABLE `cc_pj_generales_bf` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `gbf_nombre_completo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbf_genero` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbf_identificacion` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbf_nacionalidad` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbf_pais_nacimiento` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbf_fecha_nacimiento` date DEFAULT NULL,
  `gbf_pais_residencia` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbf_pais_residencia_fiscal` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbf_profesion` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbf_lugar_trabajo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbf_telefono` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbf_correo_electronico` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbf_domicilio_personal` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbf_participacion` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_generales_bf_temp`
--

CREATE TABLE `cc_pj_generales_bf_temp` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `gbf_temp_nombre_completo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbf_temp_genero` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbf_temp_identificacion` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbf_temp_nacionalidad` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbf_temp_pais_nacimiento` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbf_temp_fecha_nacimiento` date DEFAULT NULL,
  `gbf_temp_pais_residencia` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbf_temp_pais_residencia_fiscal` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbf_temp_profesion` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbf_temp_lugar_trabajo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbf_temp_telefono` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbf_temp_correo_electronico` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbf_temp_domicilio_personal` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbf_temp_participacion` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gbf_temp_id_session` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_perosnas_expuestas`
--

CREATE TABLE `cc_pj_perosnas_expuestas` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `pjpx_relacion_directa` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpx_nombre_completo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpx_cargo_actual` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpx_cargo_anterior` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpx_fecha_cargo_actual` date DEFAULT NULL,
  `pjpx_fecha_cargo_anterior` date DEFAULT NULL,
  `pjpx_comentarios` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpx_pep_relacion_directa` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpx_nombre_completo_2` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpx_cargo_actual_2` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpx_fecha_cargo_actual_2` date DEFAULT NULL,
  `pjpx_cargo_anterior_2` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpx_fecha_cargo_anterior_2` date DEFAULT NULL,
  `pjpx_comentarios_2` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_pj_perosnas_expuestas`
--

INSERT INTO `cc_pj_perosnas_expuestas` (`id`, `id_general`, `pjpx_relacion_directa`, `pjpx_nombre_completo`, `pjpx_cargo_actual`, `pjpx_cargo_anterior`, `pjpx_fecha_cargo_actual`, `pjpx_fecha_cargo_anterior`, `pjpx_comentarios`, `pjpx_pep_relacion_directa`, `pjpx_nombre_completo_2`, `pjpx_cargo_actual_2`, `pjpx_fecha_cargo_actual_2`, `pjpx_cargo_anterior_2`, `pjpx_fecha_cargo_anterior_2`, `pjpx_comentarios_2`) VALUES
(10, 23, NULL, '', '', '', '1970-01-01', '1970-01-01', '', NULL, '', '', '1970-01-01', '', '1970-01-01', ''),
(11, 24, NULL, '', '', '', '1970-01-01', '1970-01-01', '', NULL, '', '', '1970-01-01', '', '1970-01-01', ''),
(13, 27, 'NO', '', '', '', '1970-01-01', '1970-01-01', '', NULL, '', '', '1970-01-01', '', '1970-01-01', ''),
(14, 29, NULL, '', '', '', '1970-01-01', '1970-01-01', '', NULL, '', '', '1970-01-01', '', '1970-01-01', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_propietarios`
--

CREATE TABLE `cc_pj_propietarios` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `pjpr_publica_privada` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpr_licita_estado` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpr_licita_pais` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpr_cotiza_bolsa` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpr_descripcion_cotiza_bolsa` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpr_nombre_bolsa_ticker` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_pj_propietarios`
--

INSERT INTO `cc_pj_propietarios` (`id`, `id_general`, `pjpr_publica_privada`, `pjpr_licita_estado`, `pjpr_licita_pais`, `pjpr_cotiza_bolsa`, `pjpr_descripcion_cotiza_bolsa`, `pjpr_nombre_bolsa_ticker`) VALUES
(16, 23, '111BFF', 'NO', 'CR', '', '', ''),
(17, 24, NULL, '', '', '', '', ''),
(19, 27, '111BFF', 'SI', '', 'NO', '', ''),
(20, 29, NULL, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_propietarios_beneficiarios_juridica`
--

CREATE TABLE `cc_pj_propietarios_beneficiarios_juridica` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `pjpbj_nombre_completo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_genero` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_cedula_pasaporte` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_nacionalidad` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_pais_nacimineto` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_fecha_nacimiento` date DEFAULT NULL,
  `pjpbj_pais_residencia` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_pais_residencia_fiscal` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_profesion_oficio` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_lugar_trabajo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_telefono` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_correo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_domicilio_laboral` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_domicilio_personal` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_entidad_participa` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_porcentaje_participacion` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_propietarios_beneficiarios_juridica_temp`
--

CREATE TABLE `cc_pj_propietarios_beneficiarios_juridica_temp` (
  `id` int NOT NULL,
  `pjpbj_temp_id_session` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_temp_nombre_completo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_temp_genero` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_temp_cedula_pasaporte` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_temp_nacionalidad` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_temp_pais_nacimiento` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_temp_fecha_nacimiento` date DEFAULT NULL,
  `pjpbj_temp_pais_residencia` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_temp_pais_residencia_fiscal` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_temp_profesion_oficio` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_temp_lugar_trabajo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_temp_telefono` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_temp_correo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_temp_domicilio_laboral` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_temp_domicilio_personal` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_temp_entidad_participa` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjpbj_temp_porcentaje_participacion` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_referencias`
--

CREATE TABLE `cc_pj_referencias` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `pjrf_nombre_razon_social` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjrf_actividad` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjrf_relacion` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjrf_telefono` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjrf_correo_electronico` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_pj_referencias`
--

INSERT INTO `cc_pj_referencias` (`id`, `id_general`, `pjrf_nombre_razon_social`, `pjrf_actividad`, `pjrf_relacion`, `pjrf_telefono`, `pjrf_correo_electronico`) VALUES
(19, 23, '', '', '', '', ''),
(20, 23, '', '', '', '', ''),
(21, 24, '', '', '', '', ''),
(22, 24, '', '', '', '', ''),
(25, 27, 'FABRICA LAMINADORA DE VIDRIO', 'VENTA DE VIDRIOS', 'COMERCIAL', '203-3689', ''),
(26, 27, 'FABRICA LAMINADORA DE VIDRIO', 'VENTA DE VIDRIOS', 'COMERCIAL', '203-3689', ''),
(27, 29, '', '', '', '', ''),
(28, 29, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_representante_legal`
--

CREATE TABLE `cc_pj_representante_legal` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `pjrl_nombre_completo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjrl_cedula_pasaporte` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjrl_estado_civil` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjrl_nacionalidada` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjrl_fecha_nacimiento` date DEFAULT NULL,
  `pjrl_direccion` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjrl_correo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjrl_profesion` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjrl_lugar_trabajo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjrl_telefono` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_pj_representante_legal`
--

INSERT INTO `cc_pj_representante_legal` (`id`, `id_general`, `pjrl_nombre_completo`, `pjrl_cedula_pasaporte`, `pjrl_estado_civil`, `pjrl_nacionalidada`, `pjrl_fecha_nacimiento`, `pjrl_direccion`, `pjrl_correo`, `pjrl_profesion`, `pjrl_lugar_trabajo`, `pjrl_telefono`) VALUES
(18, 23, 'JORGE EDUARDO SANTAMARIA FONSECA', ' 1-0546-0643', '05ECL', 'CR', '1960-09-01', 'SAN JOSE COSTA RICA ESCAZU', 'jsantamaria14@yahoo.com', 'empresario', 'CORPORACION IMPORTADORA DE AUTOS', '+5068865-7979'),
(19, 24, '', '', '', '', '1970-01-01', '', '', '', '', ''),
(21, 27, 'RAFAEL AMILCAR LINARES DOMINGUEZ', '8-510-625', '04ECL', 'PA', '1976-03-17', '', 'rlinares@gesodi.com', 'ADMINISTRADOR', 'GESODI', '66736880'),
(22, 29, 'JORGE ALBERTO BONILLA ESPINOSA', '4-704-1178', '', 'PA', '1967-12-15', 'PANAMA, DISTRITO DE PANAMA, JUAN DIAS', '', '', '', '6676-5109');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_terceros_autorizados`
--

CREATE TABLE `cc_pj_terceros_autorizados` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `pjtu_transpaso_cliente_tercero` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjtu_relacion_cliente` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjtu_primer_nombre` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjtu_segundo_nomnbre` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjtu_apellido_parterno` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjtu_apellido_materno` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjtu_apellido_casada` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjtu_pais_nacimiento` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjtu_fecha_nacimiento` date DEFAULT NULL,
  `pjtu_nacionalidad` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjtu_genero` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjtu_cedula_pasaporte` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjtu_estado_civil` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjtu_pais_residencia` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjtu_pais_residencia_fiscal` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjtu_direccion_residencia` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjtu_correo` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjtu_telefono_residencial` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjtu_telefono_celular` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjtu_profesion` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjtu_ocupacion` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjtu_lugar_trabajo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjtu_direccion_trabajo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_pj_terceros_autorizados`
--

INSERT INTO `cc_pj_terceros_autorizados` (`id`, `id_general`, `pjtu_transpaso_cliente_tercero`, `pjtu_relacion_cliente`, `pjtu_primer_nombre`, `pjtu_segundo_nomnbre`, `pjtu_apellido_parterno`, `pjtu_apellido_materno`, `pjtu_apellido_casada`, `pjtu_pais_nacimiento`, `pjtu_fecha_nacimiento`, `pjtu_nacionalidad`, `pjtu_genero`, `pjtu_cedula_pasaporte`, `pjtu_estado_civil`, `pjtu_pais_residencia`, `pjtu_pais_residencia_fiscal`, `pjtu_direccion_residencia`, `pjtu_correo`, `pjtu_telefono_residencial`, `pjtu_telefono_celular`, `pjtu_profesion`, `pjtu_ocupacion`, `pjtu_lugar_trabajo`, `pjtu_direccion_trabajo`) VALUES
(14, 23, NULL, NULL, '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 24, NULL, NULL, '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 27, NULL, NULL, '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 29, NULL, NULL, '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_uso_interno`
--

CREATE TABLE `cc_pj_uso_interno` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `pjui_nombre_completo_1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjui_aprobacion_1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjui_fecha_1` date DEFAULT NULL,
  `pjui_nombre_completo_2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjui_aprobacion_2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjui_fecha_2` date DEFAULT NULL,
  `pjui_nombre_completo_3` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjui_aprobacion_3` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjui_fecha_3` date DEFAULT NULL,
  `pjui_nombre_completo_4` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjui_aprobacion_4` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjui_fecha_4` date DEFAULT NULL,
  `pjui_comentario_1` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pjui_comentario_2` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pjui_comentario_3` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pjui_comentario_4` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_pj_uso_interno`
--

INSERT INTO `cc_pj_uso_interno` (`id`, `id_general`, `pjui_nombre_completo_1`, `pjui_aprobacion_1`, `pjui_fecha_1`, `pjui_nombre_completo_2`, `pjui_aprobacion_2`, `pjui_fecha_2`, `pjui_nombre_completo_3`, `pjui_aprobacion_3`, `pjui_fecha_3`, `pjui_nombre_completo_4`, `pjui_aprobacion_4`, `pjui_fecha_4`, `pjui_comentario_1`, `pjui_comentario_2`, `pjui_comentario_3`, `pjui_comentario_4`) VALUES
(2, 23, 'ORLANDO DE LA ESPADA', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(3, 24, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(5, 27, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(6, 29, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_referencias`
--

CREATE TABLE `cc_referencias` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `fr_razon_social_1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fr_actividad_1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fr_relacion_cliente_1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fr_telefono_1` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fr_correo_electronico_1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fr_razon_social_2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fr_actividad_2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fr_relacion_cliente_2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fr_telefono_2` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fr_correo_electronico_2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_referencias`
--

INSERT INTO `cc_referencias` (`id`, `id_general`, `fr_razon_social_1`, `fr_actividad_1`, `fr_relacion_cliente_1`, `fr_telefono_1`, `fr_correo_electronico_1`, `fr_razon_social_2`, `fr_actividad_2`, `fr_relacion_cliente_2`, `fr_telefono_2`, `fr_correo_electronico_2`) VALUES
(24, 25, '', '', '', '', '', '', '', '', '', ''),
(25, 26, '', '', '', '', '', '', '', '', '', ''),
(26, 27, '', '', '', '', '', 'NOEL CASTILLO', '', 'ESPOSO', '67375510', ''),
(27, 28, '', '', '', '', '', '', '', '', '', ''),
(28, 29, '', '', '', '', '', '', '', '', '', ''),
(29, 30, '', '', '', '', '', '', '', '', '', ''),
(30, 31, '', '', '', '', '', '', '', '', '', ''),
(31, 32, 'BANCO GENERAL ', 'BANCO ', 'CLIENTE ', '800-0000', '', 'NOVEY PANAMA', 'NINGUNA ', 'CLIENTE ', '200-0000', ''),
(32, 33, '', '', '', '', '', '', '', '', '', ''),
(33, 34, '', '', '', '', '', '', '', '', '', ''),
(34, 35, '', '', '', '', '', '', '', '', '', ''),
(35, 36, 'JESUS PINZON', '', '', '6250-9645', '', 'MELEYKA BERNAL', '', '', '6275-8445', ''),
(36, 37, 'NAYURI GONZALEZ', '', '', '6357-7298', '', '', '', '', '', ''),
(37, 38, '', '', '', '', '', 'JAEN PAZ ', '', 'AMIGO ', '6709-1250', 'JAENPAZ@HOTMAIL.ES'),
(38, 39, '', '', '', '', '', '', '', '', '', ''),
(39, 40, 'banco nacional ', '', 'cuenta de ahorro ', '', '', 'YINA PIMENTEL ', '', 'AMIGO ', '6433-8280', ''),
(40, 41, 'ROLANDO ROSAS', '', '', '60096259', '', '', '', '', '', ''),
(41, 42, 'NICOLE TORRES', '', '', '61532055', '', 'ANGEL HERRERA', '', '', '63529431', ''),
(42, 43, '', '', '', '', '', '', '', '', '', ''),
(43, 44, 'NELSON BARRIOS ', '', '', '6284-9592', '', '', '', '', '', ''),
(44, 45, '', '', '', '', '', '', '', '', '', ''),
(45, 46, '', '', '', '', '', '', '', '', '', ''),
(46, 47, '', '', '', '', '', 'Migdalia Loumen', '', 'amistad', '+50765967652', ''),
(47, 48, '', '', '', '', '', 'Kenet Perez', 'ASALARIADO FEDURO', 'COMPAÑERO DE TRABAJO', '6424-3591', ''),
(48, 49, 'BANCO GENERAL', '', 'AHORRO', '', '', 'GUSTAVO MORENO', '', 'CUÑADO', '67682635', ''),
(49, 50, '', '', '', '', '', '', '', '', '', ''),
(50, 51, 'BRAULIO MONTENEGRO ', 'VENDEDOR', 'ESPOSO ', '+507 6127-6493', 'Braulio9328@gmail.com', '', '', '', '', ''),
(52, 53, 'DAVID SERRANO', '', '', '+507 6288-6517', '', '', '', '', '', ''),
(53, 54, 'BANCO GENERAL ', 'CUENTA DE AHORRO ', 'cuenta de ahorro ', '', '', 'YULIANA ', '', '', '6216-9842', ''),
(54, 55, '', '', '', '', '', '', '', '', '', ''),
(55, 56, '', '', '', '', '', '', '', '', '', ''),
(56, 57, 'NAYARA RAMOS', '', '', '64006727', '', '', '', '', '', ''),
(57, 58, 'DAVID SERRANO', '', '', '+507 6288-6517', '', '', '', '', '', ''),
(62, 64, 'BANCO GENERAL', '', 'AHORRO', '', '', '', '', '', '', ''),
(63, 65, 'MULTIBANK ', '', 'cuenta de ahorro ', '', '', '', '', '', '', ''),
(64, 66, 'Edgardo Garcia', '', 'Hermano', '62262942', '', '', '', '', '', ''),
(65, 67, 'JENNIFER GARRIDO', '', '', '67247578', '', '', '', '', '', ''),
(67, 69, 'laura lopez', 'contraloria', 'compañera de trabajo ', '6777-7593', '', 'elizabetj quiñonez', 'bda la industrial', 'mama', '63466015', ''),
(68, 70, '', '', '', '', '', 'Michaell Murillo', '', 'pareja', '61234139', ''),
(69, 71, '', '', '', '', '', 'LUIS QUINTERO', '', 'HERMANO', '66600127', ''),
(70, 72, 'BOLIVAR SERRANO', 'INDENDIENTE', 'AMISTAD', '60130900', '', 'JACIENTO DE GRACIA', 'INDEPENDIENTE ', 'AMISTAD ', '6902-6488', ''),
(71, 73, '', '', '', '', '', 'Kristine Johsons', '', 'esposa', '+18084437522', ''),
(72, 74, 'LOURDES ESPINOSA', '', '', '63264712', '', 'PEDRO CHAVEZ', '', '', '66098564', ''),
(73, 75, 'BANCO GENERAL ', 'CUENTA DE AHORRO ', 'cuenta de ahorro ', '', '', 'OLIVIA TELLO ', '', 'ESPOSA ', '6556-1547', ''),
(74, 76, 'MOISES MORENO', 'OPERADOR DE METRO BUS', 'PARIENTE ', '+507 63903619', '', '', '', '', '', ''),
(75, 77, 'CARLOS PEREZ', '', '', '6577-6167', '', '', '', '', '', ''),
(76, 78, '', '', '', '', '', 'Amarilis Sentimateo', '', 'sobrina', '61127107', ''),
(77, 79, 'BAC ', 'Industria bancarias', 'Mantiene cuenta con Bac', '', '', 'Susana Rodriguez', 'Asalariada', 'Esposa', '+507 6202 3043', 'su.rodriguezr@gmail.com'),
(78, 80, 'YULEYSI MARIN', '', '', '6184-4470', '', '', '', '', '', ''),
(79, 81, '', '', '', '', '', 'EDUARDO MONTERO', '', 'AMIGO', '63242259', ''),
(80, 82, '', '', '', '', '', '', '', '', '', ''),
(81, 83, 'BANCO GENERAL', '', 'AHORRO', '8005000', '', 'JUAN SALDAÑA', '', 'AMIGO', '69480200', ''),
(82, 84, 'BANCO GENERAL', '', '', '', '', 'ALFONSO DE LEON', 'Asalariada', 'COMPAÑERO DE TRABAJO', '65220053', ''),
(83, 85, '', '', '', '', '', '', '', '', '', ''),
(84, 86, '', '', '', '', '', 'RICARDO CABALLERO', '', 'COMPADRE', '66784673', ''),
(85, 87, '', '', '', '', '', 'JORGE RIOS', '', 'SUEGRO', '69805753', ''),
(86, 88, 'JOEL ALARCON ', 'OPERADOR DE EQUIPO PESADO', 'HIJO', '+507 6157-8713', '', 'ELENA Dawkins', 'DOCENTE', 'HERMANA', '+507 6889-5232', ''),
(87, 89, 'BANCO GENERAL ', 'CUENTA DE AHORRO ', 'cuenta de ahorro ', '', '', 'JUAN TREJOS ', '', 'AMIGO ', '6109-0791', ''),
(88, 90, 'EDWIN GARCIA', 'SALARIADO', 'AMISTAD', '+507 6878758', '', 'GOLZALO RODRIGUEZ', 'INDEPENDIENTE', 'SOCIO', '+507 6478778', ''),
(89, 91, 'ROSAUDI ADRIANZA', '', '', '6119-8063', '', 'AUDYMAR ADRIANZA', '', '', '6750-6252', ''),
(90, 92, '', '', '', '', '', '', '', '', '', ''),
(91, 93, 'MARTA LOPEZ', 'ADMINISTRACION DE HOTELES', 'COLEGA', '+507 6983-6899', '', 'RODOLFO BARRAZA', 'ESTUDIANTES', 'HIJO', '+507 6845-6189', ''),
(92, 94, 'ULISES TREJOS', '', '', '6673-7110', '', 'JULISSA TREJOS', '', '', '6205-8854', ''),
(93, 95, '', '', '', '', '', 'ASAYAN GUERRERO', '', 'COMPRAÑERO', '62285373', ''),
(94, 96, 'ALEXIS TEJEIRA', '', '', '6748-5587', '', '', '', '', '', ''),
(95, 97, '', '', '', '', '', '', '', '', '', ''),
(96, 98, 'Oscar ruiz', 'asistente general', 'colega ', '+507 6994-3803', '', 'yarima varella', 'asistente', 'hermana', '+507 65581507', ''),
(97, 99, 'Sandra Giron', 'Asistente administrativa', 'ESPOSA ', '+507 6488-4033', '', 'ORLANDO ARAUZ', 'ASISTENTE', 'COMERCIAL', '+507 6618-9645', ''),
(98, 100, 'SUSSETH CASTILLERO', 'JUBILADA', 'AMISTAD', '+507 67705885', '', 'JUAN SANCHEZ', 'INDEPENDIENTE', 'AMISTAD', '64127602', ''),
(99, 101, '', '', '', '', '', 'CAROS GONZALEZ', '', 'PADRE', '68240502', ''),
(100, 102, 'ALBERTO POMBO', 'INDEPENDIENTE', 'FAMILIAR', '+507 6288-57578', '', '', '', '', '', ''),
(101, 103, 'Leyda P Gonzalez', 'CONTADORA', 'SOCIA', '+507 6495-2829', '', 'Yunelis Y. Castro', 'ASISTENTE GENERAL', 'AMISTAD ', '69057038', ''),
(102, 104, '', '', '', '', '', 'MARCELO AQUINO ', '', 'AMIGO', '69012948', ''),
(103, 105, '', '', '', '', '', 'Damaris Gonzalez', '', 'hermana', '+50765701786', ''),
(104, 106, '', '', '', '', '', 'Valentin Sanchez', '', 'hermano', '64518571', ''),
(105, 107, 'BANCO GENERAL', 'BANCARIA', 'AHORRO', '', '', 'ISHEL ATENCIO', '', 'MADRE', '66238789', ''),
(106, 108, '', '', '', '', '', 'Gloria Tovar', '', '', '67157154', ''),
(107, 109, 'Lorenzo Rodriguez', 'ingeniero en sistemas', 'AMISTAD', '+507 6477-8778', '', 'LUIS ALBERTO SANCHEZ', 'NATURISTA', 'SOCIO', '+54 57589-57877', ''),
(108, 110, 'Banistmo', '', 'Cliente cuenta corriente', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_subastas`
--

CREATE TABLE `cc_subastas` (
  `id` int NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tipo_persona` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nombre_completo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `telefono` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pn_recibo_servicios` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pn_ficha` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pn_carta_ex` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pn_contrato` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pn_cc` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pni_cedula` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pni_aviso_op` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pni_servicios` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pni_referencia` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pni_cc` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pni_carta_ex` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pj_registro_publico` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pj_aviso_ope` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pj_cedula_pass` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pj_servicios` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pj_cc` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pj_carta_exo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pj_contrato` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pni_contrato` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `stat` int NOT NULL COMMENT '1=solicitud\r\n2=aprobado\r\n3=eliminado',
  `codigo` varchar(20) NOT NULL,
  `fecha_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cc_subastas`
--

INSERT INTO `cc_subastas` (`id`, `date_time`, `tipo_persona`, `nombre_completo`, `email`, `telefono`, `pn_recibo_servicios`, `pn_ficha`, `pn_carta_ex`, `pn_contrato`, `pn_cc`, `pni_cedula`, `pni_aviso_op`, `pni_servicios`, `pni_referencia`, `pni_cc`, `pni_carta_ex`, `pj_registro_publico`, `pj_aviso_ope`, `pj_cedula_pass`, `pj_servicios`, `pj_cc`, `pj_carta_exo`, `pj_contrato`, `pni_contrato`, `stat`, `codigo`, `fecha_update`) VALUES
(1, '2023-09-02 05:23:47', 'NATURAL', 'beneki', 'beneki@beneki.com', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '11184', '2023-09-03 21:17:24'),
(2, '2023-09-02 05:27:09', 'NATURAL', 'beneki', 'beneki@beneki.com', '123456', 'recibo_pn/64f2c7add38f9-1693632429.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '26814', '2023-09-03 21:17:24'),
(3, '2023-09-02 05:29:21', 'NATURAL', 'beneki', 'beneki@beneki.com', '123456', 'recibo_pn/64f2c8311615e-1693632561.pdf', 'cc_pn/64f2c8311cd42-1693632561.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '351242', '2023-09-03 21:17:24'),
(4, '2023-09-02 05:37:48', 'NATURAL', 'beneki', 'beneki@beneki.com', '123456', 'recibo_pn/64f2ca2c1295d-1693633068.pdf', 'cc_pn/64f2ca2c19912-1693633068.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '491423', '2023-09-03 21:17:24'),
(5, '2023-09-02 05:47:03', 'NATURAL', 'beneki', 'beneki@beneki.com', '123456', 'recibo_pn/64f2cc5775e0d-1693633623.pdf', 'ficha_pn/64f2cc5778f59-1693633623.pdf', 'carta_exo_pn/64f2cc577feb8-1693633623.pdf', NULL, 'cc_pn/64f2cc577c7b8-1693633623.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '586536', '2023-09-04 16:01:13'),
(6, '2023-09-02 06:46:11', 'NATURAL', 'seg', 'seg', '123456', NULL, NULL, 'referencia_pni/64f2da33529b4-1693637171.docx', NULL, 'aviso_pni/64f2da334f628-1693637171.pdf', 'cedula_pni/64f2da334ba29-1693637171.pdf', NULL, 'recibo_pni/64f2da3347f77-1693637171.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '623352', '2023-09-04 19:26:16'),
(7, '2023-09-02 06:47:38', 'NATURAL', 'seg', 'seg', '123456', NULL, NULL, 'carta_ex_pni/64f2da8b0a84d-1693637259.pdf', NULL, 'aviso_pni/64f2da8b04d43-1693637259.pdf', 'cedula_pni/64f2da8b00219-1693637259.pdf', NULL, 'recibo_pni/64f2da8af1025-1693637258.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, '', '2023-09-04 19:28:32'),
(8, '2023-09-02 06:48:00', 'NATURAL', 'seg', 'seg', '123456', NULL, NULL, 'carta_ex_pni/64f2daa0e8257-1693637280.pdf', NULL, 'aviso_pni/64f2daa0e1ed3-1693637280.pdf', 'cedula_pni/64f2daa0dda73-1693637280.pdf', NULL, 'recibo_pni/64f2daa0dae44-1693637280.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '831623', '2023-09-06 18:52:57'),
(9, '2023-09-02 06:53:49', 'NATURAL', 'seg', 'seg', '123456', NULL, NULL, NULL, NULL, NULL, 'cedula_pni/64f2dbfd72b2e-1693637629.pdf', 'aviso_pni/64f2dbfd76988-1693637629.pdf', 'recibo_pni/64f2dbfd6f321-1693637629.pdf', 'referencia_pni/64f2dbfd79f07-1693637629.docx', NULL, 'carta_ex_pni/64f2dbfd7cfeb-1693637629.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '', '2023-09-03 21:17:24'),
(10, '2023-09-02 07:01:20', 'NATURAL', 'pj', 'pj', '123456', NULL, NULL, 'servicios_pj/64f2ddc10a99a-1693638081.docx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'registro_publico_pj/64f2ddc1000dd-1693638081.pdf', 'aviso_op_pj/64f2ddc1070da-1693638081.pdf', 'cedula_pj/64f2ddc10375d-1693638081.pdf', NULL, NULL, 'carta_ex_pj/64f2ddc10d83b-1693638081.pdf', NULL, NULL, 1, '', '2023-09-03 21:17:24'),
(11, '2023-09-02 07:12:31', 'NATURAL', 'pj1', 'pj1', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'registro_publico_pj/64f2e05f38d9d-1693638751.pdf', 'aviso_op_pj/64f2e05f3edc4-1693638751.png', 'cedula_pj/64f2e05f3c59d-1693638751.PNG', 'servicios_pj/64f2e05f43658-1693638751.pdf', 'cc_pj/64f2e05f485b3-1693638751.pdf', 'carta_ex_pj/64f2e05f4ba47-1693638751.pdf', NULL, NULL, 1, '', '2023-09-03 21:17:24'),
(12, '2023-09-02 07:14:51', 'NATURAL', 'seg1', 'seg1', '123456', NULL, NULL, NULL, NULL, NULL, 'cedula_pni/64f2e0ebbae8a-1693638891.pdf', 'aviso_pni/64f2e0ebbec9e-1693638891.pdf', 'recibo_pni/64f2e0ebb77d9-1693638891.pdf', 'referencia_pni/64f2e0ebc1f19-1693638891.docx', 'cc_pni/64f2e0ebc4e4d-1693638891.pdf', 'carta_ex_pni/64f2e0ebc7805-1693638891.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '', '2023-09-03 21:17:24'),
(13, '2023-09-02 07:16:29', 'NATURAL', 'beneki', 'beneki@beneki.com', '123456', 'recibo_pn/64f2e14dea3bd-1693638989.pdf', 'ficha_pn/64f2e14dee24c-1693638989.pdf', 'carta_exo_pn/64f2e14e00c4a-1693638990.docx', NULL, 'cc_pn/64f2e14df18ea-1693638989.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, '', '2023-09-03 21:17:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_terceros_autorizados`
--

CREATE TABLE `cc_terceros_autorizados` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `ft_cliete_tercero` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ft_relacion_familiar_tercero` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ft_relacion_detalle` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ft_primer_nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ft_segundo_nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ft_apellido_paterno` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ft_apellido_materno` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ft_apellido_casada` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ft_pais_nacimiento` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ft_fecha_nacimiento` date DEFAULT NULL,
  `ft_nacionaidad` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ft_genero` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ft_estado_civil` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ft_identificacion` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ft_pais_residencia` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ft_direccion_residencial` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ft_pais_residencia_fiscal` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ft_email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ft_telefono_residencia` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ft_telefono_movil` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ft_profesion` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ft_ocupacion` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ft_lugar_trabajo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ft_direccion_trabajo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_terceros_autorizados`
--

INSERT INTO `cc_terceros_autorizados` (`id`, `id_general`, `ft_cliete_tercero`, `ft_relacion_familiar_tercero`, `ft_relacion_detalle`, `ft_primer_nombre`, `ft_segundo_nombre`, `ft_apellido_paterno`, `ft_apellido_materno`, `ft_apellido_casada`, `ft_pais_nacimiento`, `ft_fecha_nacimiento`, `ft_nacionaidad`, `ft_genero`, `ft_estado_civil`, `ft_identificacion`, `ft_pais_residencia`, `ft_direccion_residencial`, `ft_pais_residencia_fiscal`, `ft_email`, `ft_telefono_residencia`, `ft_telefono_movil`, `ft_profesion`, `ft_ocupacion`, `ft_lugar_trabajo`, `ft_direccion_trabajo`) VALUES
(22, 25, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 26, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 27, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 28, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 29, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, 30, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 31, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, 32, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, 33, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, 34, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, 35, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, 36, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, 37, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, 38, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, 39, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, 40, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(38, 41, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, 42, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(40, 43, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(41, 44, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(42, 45, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(43, 46, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, 47, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, 48, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, 49, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, 50, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, 51, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, 53, '110BFF', '111BFF', 'HERMANA', 'ANA ', 'KAREN', 'SERRANO', 'MONTENEGRO', '', 'PA', '1995-04-09', 'PA', '02GEN', '04ECL', '8-919-105', 'PA', 'PPANAMA, CLAYTON, CALLE GUANABANA', '', 'ANAKS@LIVE.COM', '', '6208-6662', '', '', '', ''),
(51, 54, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(52, 55, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(53, 56, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, 57, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(55, 58, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(60, 64, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(61, 65, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(62, 66, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(63, 67, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(65, 69, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(66, 70, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(67, 71, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(68, 72, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(69, 73, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(70, 74, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(71, 75, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(72, 76, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(73, 77, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(74, 78, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(75, 79, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(76, 80, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(77, 81, '109BFF', NULL, '', '', '', '', '', '', 'PA', '1970-01-01', '', '', '', '', 'PA', '', 'PA', '', '', '', '', '', '', ''),
(78, 82, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(79, 83, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(80, 84, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(81, 85, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(82, 86, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(83, 87, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(84, 88, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(85, 89, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(86, 90, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(87, 91, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(88, 92, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(89, 93, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(90, 94, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(91, 95, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(92, 96, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(93, 97, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(94, 98, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(95, 99, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(96, 100, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(97, 101, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(98, 102, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(99, 103, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(100, 104, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(101, 105, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(102, 106, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(103, 107, '109BFF', NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(104, 108, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(105, 109, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(106, 110, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_uso_interno`
--

CREATE TABLE `cc_uso_interno` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `fui_nombre_completo_1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fui_aprobacion_1` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fui_fecha_1` date DEFAULT NULL,
  `fui_nombre_completo_2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fui_aprobacion_2` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fui_fecha_2` date DEFAULT NULL,
  `fui_nombre_completo_3` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fui_aprobacion_3` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fui_fecha_3` date DEFAULT NULL,
  `fui_nombre_completo_4` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fui_aprobacion_4` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fui_fecha_4` date DEFAULT NULL,
  `fui_comentario_1` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fui_comentario_2` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fui_comentario_3` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fui_comentario_4` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_uso_interno`
--

INSERT INTO `cc_uso_interno` (`id`, `id_general`, `fui_nombre_completo_1`, `fui_aprobacion_1`, `fui_fecha_1`, `fui_nombre_completo_2`, `fui_aprobacion_2`, `fui_fecha_2`, `fui_nombre_completo_3`, `fui_aprobacion_3`, `fui_fecha_3`, `fui_nombre_completo_4`, `fui_aprobacion_4`, `fui_fecha_4`, `fui_comentario_1`, `fui_comentario_2`, `fui_comentario_3`, `fui_comentario_4`) VALUES
(13, 25, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(14, 26, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(15, 27, 'DARIO JIMENEZ', 'Aprobado', '2023-07-06', 'DIANA RICO', 'Aprobado', '2023-07-06', 'PAUL SILA', 'Aprobado', '2023-07-06', 'WENDY PALOMO', 'Aprobado', '2023-07-06', '', '', '', ''),
(16, 28, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(17, 29, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(18, 30, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(19, 31, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(20, 32, 'YAMILETH RODRIGUEZ', 'Aprobado', '2023-07-19', 'CARLOS CHAMORRO', 'Aprobado', '2023-07-19', 'EDWIN SANCHEZ ', 'Aprobado', '2023-07-20', '', '', '1970-01-01', '', '', '', ''),
(21, 33, 'johany Mendieta', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(22, 34, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(23, 35, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(24, 36, 'GERMAN GONZALEZ', 'Aprobado', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(25, 37, 'GERMAN GONZALEZ', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(26, 38, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(27, 39, 'GERMAN GONZALEZ', '', '1970-01-01', 'KATIBEL SAA', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(28, 40, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(29, 41, 'GERMAN GONZALEZ', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(30, 42, 'JUAN ESTRADA', 'Aprobado', '1970-01-01', 'DENIA MOSCOSO', '', '1970-01-01', 'PAUL SILVA', '', '1970-01-01', 'WENDY PALOMO', '', '1970-01-01', '', '', '', ''),
(31, 43, 'Jonathan Quintero', 'Aprobado', '2023-08-17', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', 'PENDIENTE CARGAR DOCUMENTOS', '', '', ''),
(32, 44, 'GERMAN GONZALEZ', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(33, 45, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(34, 46, 'Angel Manuel Buitrago Montes', 'Aprobado', '1970-01-01', 'DENIA MOSCOSO ', 'Aprobado', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(35, 47, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(36, 48, 'Johany Mendieta', '', '1970-01-01', 'Denia Moscoso', '', '1970-01-01', 'Paul Silva', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(37, 49, 'Jonathan Quintero', 'Aprobado', '2023-08-21', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', 'EN FIRMA', '', '', ''),
(38, 50, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(39, 51, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(41, 53, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(42, 54, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(43, 55, 'CARLOS CHAMORRO', 'Aprobado', '2023-08-22', 'YAMILETH NUÑEZ', 'Aprobado', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(44, 56, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(45, 57, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(46, 58, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(51, 64, 'Jonathan Quintero', 'Aprobado', '2023-08-23', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', 'por completar datos referencias', '', '', ''),
(52, 65, 'EDDY ANTONIO MONEGRO', 'Aprobado', '1970-01-01', 'Katibel Saa', 'Aprobado', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(53, 66, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(54, 67, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(56, 69, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(57, 70, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(58, 71, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(59, 72, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(60, 73, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(61, 74, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(62, 75, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(63, 76, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(64, 77, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(65, 78, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(66, 79, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(67, 80, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(68, 81, 'JONATHAN QUINTERO', 'Aprobado', '2023-08-28', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(69, 82, 'JONATHAN QUINTERO', 'Aprobado', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(70, 83, 'JONATHAN QUINTERO', 'Aprobado', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(71, 84, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(72, 85, 'JONATHAN QUINTERO', 'Aprobado', '2023-08-29', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(73, 86, 'JONATHAN QUINTERO', 'Aprobado', '2023-08-30', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(74, 87, 'JONATHAN QUINTERO', 'Aprobado', '2023-08-30', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(75, 88, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(76, 89, 'EDDY ANTONIO MONEGRO', 'Aprobado', '1970-01-01', 'Katibel Saa', 'Aprobado', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(77, 90, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(78, 91, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(79, 92, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(80, 93, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(81, 94, 'JUAN ESTRADA', 'Aprobado', '2023-09-02', 'DENIA MOSCOSO', 'Aprobado', '2023-09-02', 'PAUL SILVA', 'Aprobado', '2023-09-02', 'WENDY PALOMO', 'Aprobado', '2023-09-02', '', '', '', ''),
(82, 95, 'JONATHAN QUINTERO', 'Aprobado', '2023-09-04', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(83, 96, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(84, 97, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(85, 98, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(86, 99, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(87, 100, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(88, 101, 'JONATHAN QUINTERO', 'Aprobado', '2023-09-06', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(89, 102, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(90, 103, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(91, 104, 'JONATHAN QUINTERO', 'Aprobado', '2023-09-06', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(92, 105, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(93, 106, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(94, 107, 'JONATHAN QUINTERO', 'Aprobado', '2023-09-07', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(95, 108, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(96, 109, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(97, 110, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigos`
--

CREATE TABLE `codigos` (
  `id` int NOT NULL,
  `codigo` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `descripcion` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `detalle_programa` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `codigos`
--

INSERT INTO `codigos` (`id`, `codigo`, `descripcion`, `detalle_programa`) VALUES
(1, '27GBPJ', 'Turismo', 'conosca a su cliente, sector economico Turismo'),
(2, '01GEN', 'Masculino', 'Conosca a su cliente, genero masculino'),
(3, '02GEN', 'Femenino', 'Conosca a su cliente, genero femenino'),
(4, '03GEN', 'Otro', 'Conosca a su cliente, genero otro'),
(5, '04ECL', 'Solteroa', 'Conosca a su cliente, estado civil Soltero'),
(6, '05ECL', 'Casadoa', 'Conosca a su cliente, estado civil Casado'),
(7, '06PRO', 'Abogado', 'Conosca a su cliente, profesion Abogado '),
(8, '07PRO', 'Actuario', 'Conosca a su cliente, profesion Actuario '),
(9, '08PRO', 'Agencia de Seguridad', 'Conosca a su cliente, profesion Agencia de Seguridad '),
(10, '09PRO', 'Agente Deportivo', 'Conosca a su cliente, profesion Agente Deportivo '),
(11, '10PRO', 'Agente Inmobiliario', 'Conosca a su cliente, profesion Agente Inmobiliario '),
(12, '11PRO', 'Agricultor', 'Conosca a su cliente, profesion Agricultor '),
(13, '12PRO', 'Almacenamiento', 'Conosca a su cliente, profesion Almacenamiento '),
(14, '13PRO', 'Ama de Casa', 'Conosca a su cliente, profesion Ama de Casa '),
(15, '14PRO', 'Arte', 'Conosca a su cliente, profesion Arte '),
(16, '15PRO', 'Asalariado', 'Conosca a su cliente, profesion Asalariado '),
(17, '16PRO', 'Asesor Fiscal / Financiero', 'Conosca a su cliente, profesion Asesor Fiscal / Financiero '),
(18, '17PRO', 'Asesora de Inversión', 'Conosca a su cliente, profesion Asesora de Inversión '),
(19, '18PRO', 'Banca y Finanzas', 'Conosca a su cliente, profesion Banca y Finanzas '),
(20, '19PRO', 'Cadena de Restaurantes', 'Conosca a su cliente, profesion Cadena de Restaurantes '),
(21, '20PRO', 'Casa de Cambio', 'Conosca a su cliente, profesion Casa de Cambio '),
(22, '21PRO', 'Casa de Empeño', 'Conosca a su cliente, profesion Casa de Empeño '),
(23, '22PRO', 'Casa de Remesas', 'Conosca a su cliente, profesion Casa de Remesas '),
(24, '23PRO', 'Casa de Valores', 'Conosca a su cliente, profesion Casa de Valores '),
(25, '24PRO', 'Casino', 'Conosca a su cliente, profesion Casino '),
(26, '25PRO', 'Coaching', 'Conosca a su cliente, profesion Coaching '),
(27, '26PRO', 'Comunicación y Telefonía', 'Conosca a su cliente, profesion Comunicación y Telefonía '),
(28, '27PRO', 'Concesionario de Autos', 'Conosca a su cliente, profesion Concesionario de Autos '),
(29, '28PRO', 'Construcción', 'Conosca a su cliente, profesion Construcción '),
(30, '29PRO', 'Consultor de Riesgo', 'Conosca a su cliente, profesion Consultor de Riesgo '),
(31, '30PRO', 'Contador', 'Conosca a su cliente, profesion Contador '),
(32, '31PRO', 'Cooperativas de Ahorro y Crédito', 'Conosca a su cliente, profesion Cooperativas de Ahorro y Crédito '),
(33, '32PRO', 'Corredor Bienes Raíces', 'Conosca a su cliente, profesion Corredor Bienes Raíces '),
(34, '33PRO', 'Corredor de Bolsa', 'Conosca a su cliente, profesion Corredor de Bolsa '),
(35, '34PRO', 'Corredor de Seguros', 'Conosca a su cliente, profesion Corredor de Seguros '),
(36, '35PRO', 'Correos y Telégrafos', 'Conosca a su cliente, profesion Correos y Telégrafos '),
(37, '36PRO', 'Cumplimiento Normativo', 'Conosca a su cliente, profesion Cumplimiento Normativo '),
(38, '37PRO', 'Dependiente', 'Conosca a su cliente, profesion Dependiente '),
(39, '38PRO', 'Deportista', 'Conosca a su cliente, profesion Deportista '),
(40, '39PRO', 'Desempleado', 'Conosca a su cliente, profesion Desempleado '),
(41, '40PRO', 'Distribuidor de Alimentos', 'Conosca a su cliente, profesion Distribuidor de Alimentos '),
(42, '41PRO', 'Economista', 'Conosca a su cliente, profesion Economista '),
(43, '42PRO', 'Emprendedor', 'Conosca a su cliente, profesion Emprendedor '),
(44, '43PRO', 'Energía e Hidroeléctrica', 'Conosca a su cliente, profesion Energía e Hidroeléctrica '),
(45, '44PRO', 'Entretenimiento', 'Conosca a su cliente, profesion Entretenimiento '),
(46, '45PRO', 'Estudiante', 'Conosca a su cliente, profesion Estudiante '),
(47, '46PRO', 'Factoring', 'Conosca a su cliente, profesion Factoring '),
(48, '47PRO', 'Funcionario', 'Conosca a su cliente, profesion Funcionario '),
(49, '48PRO', 'Importador / Exportador', 'Conosca a su cliente, profesion Importador / Exportador '),
(50, '49PRO', 'Independiente', 'Conosca a su cliente, profesion Independiente '),
(51, '50PRO', 'Industria Farmacéutica', 'Conosca a su cliente, profesion Industria Farmacéutica '),
(52, '51PRO', 'Industria Médica', 'Conosca a su cliente, profesion Industria Médica '),
(53, '52PRO', 'Industria Petrolera', 'Conosca a su cliente, profesion Industria Petrolera '),
(54, '53PRO', 'Industria Química', 'Conosca a su cliente, profesion Industria Química '),
(55, '54PRO', 'Industria Textil', 'Conosca a su cliente, profesion Industria Textil '),
(56, '55PRO', 'Ingeniero Civil', 'Conosca a su cliente, profesion Ingeniero Civil '),
(57, '56PRO', 'Ingeniero Industrial', 'Conosca a su cliente, profesion Ingeniero Industrial '),
(58, '57PRO', 'Inversionista', 'Conosca a su cliente, profesion Inversionista '),
(59, '58PRO', 'Logística', 'Conosca a su cliente, profesion Logística '),
(60, '59PRO', 'Marítimo y Portuario', 'Conosca a su cliente, profesion Marítimo y Portuario '),
(61, '60PRO', 'Minería', 'Conosca a su cliente, profesion Minería '),
(62, '61PRO', 'Notario', 'Conosca a su cliente, profesion Notario '),
(63, '62PRO', 'ONG', 'Conosca a su cliente, profesion ONG '),
(64, '63PRO', 'Organizador de Eventos', 'Conosca a su cliente, profesion Organizador de Eventos '),
(65, '64PRO', 'Piloto', 'Conosca a su cliente, profesion Piloto '),
(66, '65PRO', 'Policía', 'Conosca a su cliente, profesion Policía '),
(67, '66PRO', 'Promotora', 'Conosca a su cliente, profesion Promotora '),
(68, '67PRO', 'Seguros y Reaseguros', 'Conosca a su cliente, profesion Seguros y Reaseguros '),
(69, '68PRO', 'Servicio al Cliente', 'Conosca a su cliente, profesion Servicio al Cliente '),
(70, '69PRO', 'Tecnología e Informática', 'Conosca a su cliente, profesion Tecnología e Informática '),
(71, '70PRO', 'Trader', 'Conosca a su cliente, profesion Trader '),
(72, '71PRO', 'Transporte de Valores', 'Conosca a su cliente, profesion Transporte de Valores '),
(73, '72PRO', 'Transportista', 'Conosca a su cliente, profesion Transportista '),
(74, '73PRO', 'Turismo y Hotelería', 'Conosca a su cliente, profesion Turismo y Hotelería '),
(75, '74PRO', 'Ventas al por Mayor', 'Conosca a su cliente, profesion Ventas al por Mayor '),
(76, '75PRO', 'Ventas al por Menor', 'Conosca a su cliente, profesion Ventas al por Menor '),
(77, '76PRO', 'Otro:', 'Conosca a su cliente, profesion Otro: '),
(78, '77FUE', 'Asalariado', 'Conosca a su cliente, fuente de ingreso Asalariado'),
(79, '78FUE', 'Jubilado', 'Conosca a su cliente, fuente de ingreso Jubilado'),
(80, '79FUE', 'Independiente Formal', 'Conosca a su cliente, fuente de ingreso Independiente'),
(81, '80FUE', 'Empresario', 'Conosca a su cliente, fuente de ingreso Empresario'),
(82, '81FUE', 'Emprendedor', 'Conosca a su cliente, fuente de ingreso Emprendedor'),
(83, '82FUE', 'Comisiones', 'Conosca a su cliente, fuente de ingreso Comisiones'),
(84, '83FUE', 'Ganancias', 'Conosca a su cliente, fuente de ingreso Ganancias'),
(85, '84FUE', 'Herencia', 'Conosca a su cliente, fuente de ingreso Herencia'),
(86, '85FUE', 'Ingresos por actividad económica', 'Conosca a su cliente, fuente de ingreso Ingresos'),
(87, '86FUE', 'Negocio propio', 'Conosca a su cliente, fuente de ingreso Negocio propio'),
(88, '87FUE', 'Préstamo personal', 'Conosca a su cliente, fuente de ingreso Préstamo personal'),
(89, '88FUE', 'Retirado', 'Conosca a su cliente, fuente de ingreso Retirado'),
(90, '89FUE', 'Salarios', 'Conosca a su cliente,fuente de ingreso Salarios'),
(91, '90FDP', 'Contado', 'Conosca a su cliente, forma de pago contado'),
(92, '91FDP', 'Financiado', 'Conosca a su cliente, forma de pago Financiado'),
(93, '92FDP', 'Financiado al 100%', 'Conosca a su cliente, forma de pago Financiado al 100%'),
(94, '93LIM', '10k - 25k', 'Conosca a su cliente, fuente de ingreso limite 10k - 25k'),
(95, '94LIM', '25k - 50k', 'Conosca a su cliente, fuente de ingreso limite 25k - 50k'),
(96, '95LIM', '50k - 100k', 'Conosca a su cliente, fuente de ingreso limite 50k - 100k'),
(97, '96LIM', '100k - 150k', 'Conosca a su cliente, fuente de ingreso limite 100k - 150k'),
(98, '97LIM', '150k - 250k', 'Conosca a su cliente, fuente de ingreso limite 150k - 250k'),
(99, '98LIM', '250k - 1M', 'Conosca a su cliente, fuente de ingreso limite 250k - 1M'),
(100, '99LIM', '1M - 10M', 'Conosca a su cliente, fuente de ingreso limite 1M - 10M'),
(101, '100LIM', ' > 10M ', 'Conosca a su cliente,fuente de ingreso limite > 10M'),
(102, '101MDP', 'ACH', 'Conosca a su cliente, metodo de pago ACH'),
(103, '102MDP', 'Deposito Bancario', 'Conosca a su cliente, metodo de pago Ganancias'),
(104, '103MDP', 'Yappi', 'Conosca a su cliente, metodo de pago Herencia'),
(105, '104MDP', 'Cheque - 150k', 'Conosca a su cliente, metodo de pago Ingresos'),
(106, '105MDP', 'Tarjeta de debito', 'Conosca a su cliente, metodo de pago propio'),
(107, '106MDP', 'Tarjeta de Credito', 'Conosca a su cliente, metodo de pago personal'),
(108, '107MDP', 'Financiado al 100%', 'Conosca a su cliente, metodo de pago Retirado'),
(109, '108MDP', 'Carta promesa de pago', 'Conosca a su cliente, metodo de pago Salarios'),
(110, '109BFF', 'Beneficiario Cliente', 'Conosca a su cliente, Beneficiario final cliente'),
(111, '110BFF', 'Beneficiario Tercero', 'Conosca a su cliente, Beneficiario final tercero'),
(112, '111BFF', 'Beneficiario Familiar', 'Conosca a su cliente, Beneficiario relacion con el cliente familiar'),
(113, '1PPEP', 'Alcalde', 'Profesion de persona expuesta politicamente Alcalde'),
(114, '2PPEP', 'Concejal', 'Profesion de persona expuesta politicamente Concejal'),
(115, '3PPEP', 'Contralor', 'Profesion de persona expuesta politicamente Contralor'),
(116, '4PPEP', 'Diputado', 'Profesion de persona expuesta politicamente Diputado'),
(117, '5PPEP', 'Director de la UAF', 'Profesion de persona expuesta politicamente Director de la UAF'),
(118, '6PPEP', 'Director general', 'Profesion de persona expuesta politicamente Director general'),
(119, '7PPEP', 'Director nacional', 'Profesion de persona expuesta politicamente Director nacional'),
(120, '8PPEP', 'Director provincial', 'Profesion de persona expuesta politicamente Director provincial'),
(121, '9PPEP', 'Director regional', 'Profesion de persona expuesta politicamente Director regional'),
(122, '10PPEP', 'Fiscal de Cuentas', 'Profesion de persona expuesta politicamente Fiscal de Cuentas'),
(123, '11PPEP', 'Fiscal Superir', 'Profesion de persona expuesta politicamente Fiscal Superir'),
(124, '12PPEP', 'Gobernador', 'Profesion de persona expuesta politicamente Gobernador'),
(125, '13PPEP', 'Magistrado de la Corte Suprema de Justicia', 'Profesion de persona expuesta politicamente Magistrado de la Corte Suprema de Justicia'),
(126, '14PPEP', 'Magistrado del Tribunal de Cuentas', 'Profesion de persona expuesta politicamente Magistrado del Tribunal de Cuentas'),
(127, '15PPEP', 'Ministro consejero', 'Profesion de persona expuesta politicamente Contralor'),
(128, '16PPEP', 'Ministro de Estado', 'Profesion de persona expuesta politicamente Ministro de Estado'),
(129, '17PPEP', 'Presidente de la República', 'Profesion de persona expuesta politicamente Presidente de la República'),
(130, '18PPEP', 'Procurador General de la Administración', 'Profesion de persona expuesta politicamente Procurador General de la Administración'),
(131, '19PPEP', 'Procurador General de la Nación', 'Profesion de persona expuesta politicamente Procurador General de la Nación'),
(132, '20PPEP', 'Secretario general', 'Profesion de persona expuesta politicamente Secretario general'),
(133, '21PPEP', 'Subcontralor', 'Profesion de persona expuesta politicamente Subcontralor'),
(134, '22PPEP', 'Subdirector de la UAF', 'Profesion de persona expuesta politicamente Subdirector de la UAF'),
(135, '23PPEP', 'Subdirector general', 'Profesion de persona expuesta politicamente Subdirector general'),
(136, '24PPEP', 'Subdirector nacional', 'Profesion de persona expuesta politicamente Subdirector nacional'),
(137, '25PPEP', 'Subdirector provincial', 'Profesion de persona expuesta politicamente Subdirector provincial'),
(138, '26PPEP', 'Subdirector regional', 'Profesion de persona expuesta politicamente Subdirector regional'),
(139, '27PPEP', 'Subintendente', 'Profesion de persona expuesta politicamente Subintendente'),
(140, '28PPEP', 'Subsecretario general', 'Profesion de persona expuesta politicamente Subsecretario general'),
(141, '29PPEP', 'Superintendente', 'Profesion de persona expuesta politicamente Superintendente'),
(142, '30PPEP', 'Vicegobernador', 'Profesion de persona expuesta politicamente Vicegobernador'),
(143, '31PPEP', 'Viceministro', 'Profesion de persona expuesta politicamente Viceministro'),
(144, '32PPEP', 'Vicepresidente de la República', 'Profesion de persona expuesta politicamente Vicepresidente de la República'),
(145, '33PPEP', 'Otro', 'Profesion de persona expuesta politicamente Otro'),
(146, '01RECB', 'Agua', 'Conosca a su cliente Recibos, tipos de recibos Agua'),
(147, '02RECB', 'Cable', 'Conosca a su cliente Recibos, tipos de recibos Cable'),
(148, '03RECB', 'Celular', 'Conosca a su cliente Recibos, tipos de recibos Celular'),
(149, '04RECB', 'Internet', 'Conosca a su cliente Recibos, tipos de recibos Internet'),
(150, '05RECB', 'Luz', 'Conosca a su cliente Recibos, tipos de recibos Luz'),
(151, '06RECB', 'Telefono', 'Conosca a su cliente Recibos, tipos de recibos Telefono'),
(152, '07RECB', 'Television', 'Conosca a su cliente Recibos, tipos de recibos Television'),
(153, '01TDPJ', 'Asociación sin fines de lucro (ONG)', 'Conosca a su cliente persona juridicca tipo de persona'),
(154, '02TDPJ', 'Consorcio', 'Conosca a su cliente persona juridicca tipo de persona'),
(155, '03TDPJ', 'Fundación de Interés Privado', 'Conosca a su cliente persona juridicca tipo de persona'),
(156, '04TDPJ', 'Sociedad anónima', 'Conosca a su cliente persona juridicca tipo de persona'),
(157, '05TDPJ', 'Sociedad anónima extranjera', 'Conosca a su cliente persona juridicca tipo de persona'),
(158, '06TDPJ', 'Sociedad civil', 'Conosca a su cliente persona juridicca tipo de persona'),
(159, '07TDPJ', 'Sociedad de responsabilidad limitada(S.R.de L.)', 'Conosca a su cliente persona juridicca tipo de persona'),
(160, '08TDPJ', 'Sociedad en comandita', 'Conosca a su cliente persona juridicca tipo de persona'),
(161, '09TDPJ', 'Estado', 'Conosca a su cliente persona juridicca tipo de persona'),
(162, '01PJDD', 'Presidente', 'Conosca a su cliente persona juridica, cargo'),
(163, '02PJDD', 'Vicepresidente', 'Conosca a su cliente persona juridica, cargo'),
(164, '03PJDD', 'Secretario', 'Conosca a su cliente persona juridica, cargo'),
(165, '04PJDD', 'Tesorero', 'Conosca a su cliente persona juridica, cargo'),
(166, '05PJDD', 'Vocal', 'Conosca a su cliente persona juridica, cargo'),
(167, '06PJDD', 'Director', 'Conosca a su cliente persona juridica, cargo'),
(168, '07PJDD', 'Director Único', 'Conosca a su cliente persona juridica, cargo'),
(169, '08PJDD', 'Director/Presidente', 'Conosca a su cliente persona juridica, cargo'),
(170, '09PJDD', 'Director/Vicepresidente', 'Conosca a su cliente persona juridica, cargo'),
(171, '10PJDD', 'Director/Secretario', 'Conosca a su cliente persona juridica, cargo'),
(172, '11PJDD', 'Director/Tesorero', 'Conosca a su cliente persona juridica, cargo'),
(173, '12PJDD', 'Director/Vocal', 'Conosca a su cliente persona juridica, cargo'),
(174, '13PJDD', 'Fundador', 'Conosca a su cliente persona juridica, cargo'),
(175, '14PJDD', 'Miembro del Consejo Fundacional', 'Conosca a su cliente persona juridica, cargo'),
(176, '01GBPJ', 'Administración', 'conosca a su cliente, sector economico Administración'),
(177, '02GBPJ', 'Agrícola', 'conosca a su cliente, sector economico Agrícola'),
(178, '03GBPJ', 'Casinos y Juegos de Azar', 'conosca a su cliente, sector economico Casinos y Juegos de Azar'),
(179, '04GBPJ', 'Comercialización de Metales y Piedras Preciosas', 'conosca a su cliente, sector economico Comercialización de Metales y Piedras Preciosas'),
(180, '05GBPJ', 'Comunicaciones', 'conosca a su cliente, sector economico Comunicaciones'),
(181, '06GBPJ', 'Construcción', 'conosca a su cliente, sector economico Construcción'),
(182, '08GBPJ', 'Contabilidad', 'conosca a su cliente, sector economico Contabilidad'),
(183, '09GBPJ', 'Cultura', 'conosca a su cliente, sector economico Cultura'),
(184, '10GBPJ', 'De las artes', 'conosca a su cliente, sector economico De las artes'),
(185, '11GBPJ', 'Educativo', 'conosca a su cliente, sector economico Educativo'),
(186, '12GBPJ', 'Energético', 'conosca a su cliente, sector economico Energético'),
(187, '13GBPJ', 'Financiero', 'conosca a su cliente, sector economico Financiero'),
(188, '14GBPJ', 'Forestal', 'conosca a su cliente, sector economico Forestal'),
(189, '15GBPJ', 'Ganadero', 'conosca a su cliente, sector economico Ganadero'),
(190, '16GBPJ', 'Industrial', 'conosca a su cliente, sector economico Industrial'),
(191, '17GBPJ', 'Inmobiliario', 'conosca a su cliente, sector economico Inmobiliario'),
(192, '18GBPJ', 'Investigación', 'conosca a su cliente, sector economico Investigación'),
(193, '19GBPJ', 'Legal', 'conosca a su cliente, sector economico Legal'),
(194, '20GBPJ', 'Minero', 'conosca a su cliente, sector economico Minero'),
(195, '21GBPJ', 'Notariales', 'conosca a su cliente, sector economico Notariales'),
(196, '22GBPJ', 'Pesquero', 'conosca a su cliente, sector economico Pesquero'),
(197, '23GBPJ', 'Público', 'conosca a su cliente, sector economico Público'),
(198, '24GBPJ', 'Sanitario', 'conosca a su cliente, sector economico Sanitario'),
(199, '25GBPJ', 'Seguridad', 'conosca a su cliente, sector economico Seguridad'),
(200, '26GBPJ', 'Transporte', 'conosca a su cliente, sector economico Transporte'),
(201, '27GBPJ', 'Turismo', 'conosca a su cliente, sector economico Turismo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id` int NOT NULL,
  `codigo` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nombre` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `stat` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id`, `codigo`, `nombre`, `stat`) VALUES
(1, 'AF', 'Afganistán', 1),
(2, 'AX', 'Islas Gland', 1),
(3, 'AL', 'Albania', 1),
(4, 'DE', 'Alemania', 1),
(5, 'AD', 'Andorra', 1),
(6, 'AO', 'Angola', 1),
(7, 'AI', 'Anguilla', 1),
(8, 'AQ', 'Antártida', 1),
(9, 'AG', 'Antigua y Barbuda', 1),
(10, 'AN', 'Antillas Holandesas', 1),
(11, 'SA', 'Arabia Saudí', 1),
(12, 'DZ', 'Argelia', 1),
(13, 'AR', 'Argentina', 1),
(14, 'AM', 'Armenia', 1),
(15, 'AW', 'Aruba', 1),
(16, 'AU', 'Australia', 1),
(17, 'AT', 'Austria', 1),
(18, 'AZ', 'Azerbaiyán', 1),
(19, 'BS', 'Bahamas', 1),
(20, 'BH', 'Bahréin', 1),
(21, 'BD', 'Bangladesh', 1),
(22, 'BB', 'Barbados', 1),
(23, 'BY', 'Bielorrusia', 1),
(24, 'BE', 'Bélgica', 1),
(25, 'BZ', 'Belice', 1),
(26, 'BJ', 'Benin', 1),
(27, 'BM', 'Bermudas', 1),
(28, 'BT', 'Bhután', 1),
(29, 'BO', 'Bolivia', 1),
(30, 'BA', 'Bosnia y Herzegovina', 1),
(31, 'BW', 'Botsuana', 1),
(32, 'BV', 'Isla Bouvet', 1),
(33, 'BR', 'Brasil', 1),
(34, 'BN', 'Brunéi', 1),
(35, 'BG', 'Bulgaria', 1),
(36, 'BF', 'Burkina Faso', 1),
(37, 'BI', 'Burundi', 1),
(38, 'CV', 'Cabo Verde', 1),
(39, 'KY', 'Islas Caimán', 1),
(40, 'KH', 'Camboya', 1),
(41, 'CM', 'Camerún', 1),
(42, 'CA', 'Canadá', 1),
(43, 'CF', 'República Centroafricana', 1),
(44, 'TD', 'Chad', 1),
(45, 'CZ', 'República Checa', 1),
(46, 'CL', 'Chile', 1),
(47, 'CN', 'China', 1),
(48, 'CY', 'Chipre', 1),
(49, 'CX', 'Isla de Navidad', 1),
(50, 'VA', 'Ciudad del Vaticano', 1),
(51, 'CC', 'Islas Cocos', 1),
(52, 'CO', 'Colombia', 1),
(53, 'KM', 'Comoras', 1),
(54, 'CD', 'República Democrática del Congo', 1),
(55, 'CG', 'Congo', 1),
(56, 'CK', 'Islas Cook', 1),
(57, 'KP', 'Corea del Norte', 1),
(58, 'KR', 'Corea del Sur', 1),
(59, 'CI', 'Costa de Marfil', 1),
(60, 'CR', 'Costa Rica', 1),
(61, 'HR', 'Croacia', 1),
(62, 'CU', 'Cuba', 1),
(63, 'DK', 'Dinamarca', 1),
(64, 'DM', 'Dominica', 1),
(65, 'DO', 'República Dominicana', 1),
(66, 'EC', 'Ecuador', 1),
(67, 'EG', 'Egipto', 1),
(68, 'SV', 'El Salvador', 1),
(69, 'AE', 'Emiratos Árabes Unidos', 1),
(70, 'ER', 'Eritrea', 1),
(71, 'SK', 'Eslovaquia', 1),
(72, 'SI', 'Eslovenia', 1),
(73, 'ES', 'España', 1),
(74, 'UM', 'Islas ultramarinas de Estados Unidos', 1),
(75, 'US', 'Estados Unidos', 1),
(76, 'EE', 'Estonia', 1),
(77, 'ET', 'Etiopía', 1),
(78, 'GB', 'Inglaterra', 1),
(79, 'FO', 'Islas Feroe', 1),
(80, 'PH', 'Filipinas', 1),
(81, 'FI', 'Finlandia', 1),
(82, 'FJ', 'Fiyi', 1),
(83, 'FR', 'Francia', 1),
(84, 'GA', 'Gabón', 1),
(85, 'GM', 'Gambia', 1),
(86, 'GE', 'Georgia', 1),
(87, 'GS', 'Islas Georgias del Sur y Sandwich del Sur', 1),
(88, 'GH', 'Ghana', 1),
(89, 'GI', 'Gibraltar', 1),
(90, 'GD', 'Granada', 1),
(91, 'GR', 'Grecia', 1),
(92, 'GL', 'Groenlandia', 1),
(93, 'GP', 'Guadalupe', 1),
(94, 'GU', 'Guam', 1),
(95, 'GT', 'Guatemala', 1),
(96, 'GF', 'Guayana Francesa', 1),
(97, 'GN', 'Guinea', 1),
(98, 'GQ', 'Guinea Ecuatorial', 1),
(99, 'GW', 'Guinea-Bissau', 1),
(100, 'GY', 'Guyana', 1),
(101, 'HT', 'Haití', 1),
(102, 'HM', 'Islas Heard y McDonald', 1),
(103, 'HN', 'Honduras', 1),
(104, 'HK', 'Hong Kong', 1),
(105, 'HU', 'Hungría', 1),
(106, 'IN', 'India', 1),
(107, 'ID', 'Indonesia', 1),
(108, 'IR', 'Irán', 1),
(109, 'IQ', 'Iraq', 1),
(110, 'IE', 'Irlanda', 1),
(111, 'IS', 'Islandia', 1),
(112, 'IL', 'Israel', 1),
(113, 'IT', 'Italia', 1),
(114, 'JM', 'Jamaica', 1),
(115, 'JP', 'Japón', 1),
(116, 'JO', 'Jordania', 1),
(117, 'KZ', 'Kazajstán', 1),
(118, 'KE', 'Kenia', 1),
(119, 'KG', 'Kirguistán', 1),
(120, 'KI', 'Kiribati', 1),
(121, 'KW', 'Kuwait', 1),
(122, 'LA', 'Laos', 1),
(123, 'LS', 'Lesotho', 1),
(124, 'LV', 'Letonia', 1),
(125, 'LB', 'Líbano', 1),
(126, 'LR', 'Liberia', 1),
(127, 'LY', 'Libia', 1),
(128, 'LI', 'Liechtenstein', 1),
(129, 'LT', 'Lituania', 1),
(130, 'LU', 'Luxemburgo', 1),
(131, 'MO', 'Macao', 1),
(132, 'MK', 'ARY Macedonia', 1),
(133, 'MG', 'Madagascar', 1),
(134, 'MY', 'Malasia', 1),
(135, 'MW', 'Malawi', 1),
(136, 'MV', 'Maldivas', 1),
(137, 'ML', 'Malí', 1),
(138, 'MT', 'Malta', 1),
(139, 'FK', 'Islas Malvinas', 1),
(140, 'MP', 'Islas Marianas del Norte', 1),
(141, 'MA', 'Marruecos', 1),
(142, 'MH', 'Islas Marshall', 1),
(143, 'MQ', 'Martinica', 1),
(144, 'MU', 'Mauricio', 1),
(145, 'MR', 'Mauritania', 1),
(146, 'YT', 'Mayotte', 1),
(147, 'MX', 'México', 1),
(148, 'FM', 'Micronesia', 1),
(149, 'MD', 'Moldavia', 1),
(150, 'MC', 'Mónaco', 1),
(151, 'MN', 'Mongolia', 1),
(152, 'MS', 'Montserrat', 1),
(153, 'MZ', 'Mozambique', 1),
(154, 'MM', 'Myanmar', 1),
(155, 'NA', 'Namibia', 1),
(156, 'NR', 'Nauru', 1),
(157, 'NP', 'Nepal', 1),
(158, 'NI', 'Nicaragua', 1),
(159, 'NE', 'Níger', 1),
(160, 'NG', 'Nigeria', 1),
(161, 'NU', 'Niue', 1),
(162, 'NF', 'Isla Norfolk', 1),
(163, 'NO', 'Noruega', 1),
(164, 'NC', 'Nueva Caledonia', 1),
(165, 'NZ', 'Nueva Zelanda', 1),
(166, 'OM', 'Omán', 1),
(167, 'NL', 'Países Bajos', 1),
(168, 'PK', 'Pakistán', 1),
(169, 'PW', 'Palau', 1),
(170, 'PS', 'Palestina', 1),
(171, 'PA', 'Panamá', 1),
(172, 'PG', 'Papúa Nueva Guinea', 1),
(173, 'PY', 'Paraguay', 1),
(174, 'PE', 'Perú', 1),
(175, 'PN', 'Islas Pitcairn', 1),
(176, 'PF', 'Polinesia Francesa', 1),
(177, 'PL', 'Polonia', 1),
(178, 'PT', 'Portugal', 1),
(179, 'PR', 'Puerto Rico', 1),
(180, 'QA', 'Qatar', 1),
(181, 'RE', 'Reunión', 1),
(182, 'RW', 'Ruanda', 1),
(183, 'RO', 'Rumania', 1),
(184, 'RU', 'Rusia', 1),
(185, 'EH', 'Sahara Occidental', 1),
(186, 'SB', 'Islas Salomón', 1),
(187, 'WS', 'Samoa', 1),
(188, 'AS', 'Samoa Americana', 1),
(189, 'KN', 'San Cristóbal y Nevis', 1),
(190, 'SM', 'San Marino', 1),
(191, 'PM', 'San Pedro y Miquelón', 1),
(192, 'VC', 'San Vicente y las Granadinas', 1),
(193, 'SH', 'Santa Helena', 1),
(194, 'LC', 'Santa Lucía', 1),
(195, 'ST', 'Santo Tomé y Príncipe', 1),
(196, 'SN', 'Senegal', 1),
(197, 'CS', 'Serbia y Montenegro', 1),
(198, 'SC', 'Seychelles', 1),
(199, 'SL', 'Sierra Leona', 1),
(200, 'SG', 'Singapur', 1),
(201, 'SY', 'Siria', 1),
(202, 'SO', 'Somalia', 1),
(203, 'LK', 'Sri Lanka', 1),
(204, 'SZ', 'Suazilandia', 1),
(205, 'ZA', 'Sudáfrica', 1),
(206, 'SD', 'Sudán', 1),
(207, 'SE', 'Suecia', 1),
(208, 'CH', 'Suiza', 1),
(209, 'SR', 'Surinam', 1),
(210, 'SJ', 'Svalbard y Jan Mayen', 1),
(211, 'TH', 'Tailandia', 1),
(212, 'TW', 'Taiwán', 1),
(213, 'TZ', 'Tanzania', 1),
(214, 'TJ', 'Tayikistán', 1),
(215, 'IO', 'Territorio Británico del Océano Índico', 1),
(216, 'TF', 'Territorios Australes Franceses', 1),
(217, 'TL', 'Timor Oriental', 1),
(218, 'TG', 'Togo', 1),
(219, 'TK', 'Tokelau', 1),
(220, 'TO', 'Tonga', 1),
(221, 'TT', 'Trinidad y Tobago', 1),
(222, 'TN', 'Túnez', 1),
(223, 'TC', 'Islas Turcas y Caicos', 1),
(224, 'TM', 'Turkmenistán', 1),
(225, 'TR', 'Turquía', 1),
(226, 'TV', 'Tuvalu', 1),
(227, 'UA', 'Ucrania', 1),
(228, 'UG', 'Uganda', 1),
(229, 'UY', 'Uruguay', 1),
(230, 'UZ', 'Uzbekistán', 1),
(231, 'VU', 'Vanuatu', 1),
(232, 'VE', 'Venezuela', 1),
(233, 'VN', 'Vietnam', 1),
(234, 'VG', 'Islas Vírgenes Británicas', 1),
(235, 'VI', 'Islas Vírgenes de los Estados Unidos', 1),
(236, 'WF', 'Wallis y Futuna', 1),
(237, 'YE', 'Yemen', 1),
(238, 'DJ', 'Yibuti', 1),
(239, 'ZM', 'Zambia', 1),
(240, 'ZW', 'Zimbabue', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repositorios`
--

CREATE TABLE `repositorios` (
  `scan_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `id` int NOT NULL,
  `id_user_reg` int DEFAULT NULL,
  `fecha_hora` datetime DEFAULT CURRENT_TIMESTAMP,
  `stat` int DEFAULT NULL COMMENT '1=activo;2=inactivo',
  `ilden_numero` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ilden_nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ilden_vencimineto` date DEFAULT NULL,
  `pass_numero` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pass_vencimiento` date DEFAULT NULL,
  `pass_nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `lic_numero` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `lic_vencimineto` date DEFAULT NULL,
  `lic_nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `lic_path` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `iden_path` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pass_path` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `repositorios`
--

INSERT INTO `repositorios` (`scan_text`, `id`, `id_user_reg`, `fecha_hora`, `stat`, `ilden_numero`, `ilden_nombre`, `ilden_vencimineto`, `pass_numero`, `pass_vencimiento`, `pass_nombre`, `lic_numero`, `lic_vencimineto`, `lic_nombre`, `lic_path`, `iden_path`, `pass_path`) VALUES
('República de Panamà? \r\nTIPO \r\nAUTORIDAD DEL TRANSITO \r\nY TRANSPORTE TERRESTRE \r\nLICENCIA DE CONDUCIR \r\n\r\n8-1021-1085 \r\nJAIME DANIEL \r\nNIZUCHI COHEN \r\n19/04/2005 \r\n\r\n04/05/2023 \r\n04/05/2027 \r\n\r\n', 74, 1, '2023-08-08 13:00:41', 1, NULL, NULL, NULL, NULL, NULL, NULL, '8-1021-1085', '2027-04-05', 'JAIME DANIEL NIZUCHI COHEN', 'licencia/4794.png', NULL, NULL),
('8-345-321 \r\n\r\nRepública de Panamá \r\nALJTORIQAD DEL TRANSITO \r\nTRANSPORTE TERRESTRE \r\nUCENCIA DE CONDUCIR \r\nMaría del Carmen \r\né. \r\nCedeño Sánchez \r\n\r\nNACIONALIOAD \r\nPANAMEÑA \r\nFECHA OE NACIMIENTO \r\n15 FEBRERO 1986 \r\nTIPO DE SANGRE \r\nORH. \r\n\r\n05 ENERO 2006 \r\nRESTRICCIONES \r\nEXPIRACIÓN \r\nENERO 2010 \r\n\r\n', 75, 1, '2023-08-23 01:00:39', 1, NULL, NULL, NULL, NULL, NULL, NULL, '8-345-321', '1970-01-01', 'María del Carmen é. Cedeño Sánchez ', 'licencia/1022.png', NULL, NULL),
('- 31-1545 \r\n\r\nRepública de Ppnamá \r\nAUTORIDAD DEL TRANsrro \r\nTRANSPORTE TERRESTRE \r\nLICENCIA DE CONDUCIR \r\nJORGE LUIS DIAZ GARCIA \r\n\r\nPANAMEÑA \r\n14/07/1989 \r\n.E2.E3 \r\n\r\n05/09/2018 \r\n01/08/2022 \r\n\r\n', 76, 1, '2023-08-23 01:04:24', 1, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2022-01-08', 'de Ppnamá  DEL TRANsrro   JORGE LUIS DIAZ GARCIA   .E.E', 'licencia/15667.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `id` int NOT NULL,
  `tipo` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `descripcion` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `stat` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id`, `tipo`, `descripcion`, `stat`) VALUES
(1, 'admin', 'usuairo administrador', 1),
(2, 'analista', 'Analista de ventas', 1),
(3, 'vendedor', 'Vendedor', 1),
(5, 'gerencia', 'Usuario Gerencia', 1),
(6, 'supervisor', 'Usuario Supervisor', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `edad` int DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tipo_user` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `stat` int NOT NULL COMMENT '1=on; 2=off'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `edad`, `password`, `tipo_user`, `stat`) VALUES
(1, 'q', 'q@q.com', 1, '$2y$10$3pdKMRWZQjC6pD.2QkY48O6n.dimtn4IeDMHql3JmWic3/XcrNNyW', 'admin', 1),
(7, 'Omar Carrillo', 'omar.carrillo@grupopcr.com.pa', NULL, '$2y$10$7aWZfki9miCKE0dN0NjOO.D18WfAbb6wau0HLWmX/PgoR7d7ADieq', 'gerencia', 1),
(8, 'Vendedor 1', 'vendedor1@grupopcrprueba.com.pa', NULL, '$2y$10$3tAnT2.dCnQnNwnSGZV1hOlleiTDF46cC7V306n7rtGkjVoFe4mCC', 'vendedor', 1),
(9, 'Paul Sila', 'paul.sila@grupopcr.com.pa', NULL, '$2y$10$X9nlGdnwPSouZeMdFEL7dOOOX1x4ktGj/vlf7BdR7sfD15lv8zde.', 'analista', 1),
(10, 'Edwing Sanchez', 'edwing.sanchez@grupopcr.com.pa', NULL, '$2y$10$c3w/RWojfGeuvUwpiJ0D5eQdyoyvQGNqsgHKmnrl.mSQvINemIwdC', 'vendedor', 1),
(11, 'Luis Hernandez', 'luis.hernandez@grupopcr.com.pa', NULL, '$2y$10$Fznxx1jF4yy6HrOxeWUuNeobVk1CKo5aFbu3SWik3JZlxyA8935Li', 'admin', 1),
(12, 'Joel de Leon', 'joel.deleon@automarketpan.com', NULL, '$2y$10$LNNHU0XPHHNdA4AvVQAEfez3p9lyrIUtFBiTu9wDtgRW4HGva4FhO', 'supervisor', 1),
(13, 'Denia Moscoso', 'denia.moscoso@automarketpan.com', NULL, '$2y$10$om5vzJFAJAD0cLNPhGmyWuvkiJ/u/tRvllyz5o4eGBjoanEXwmvbm', 'supervisor', 1),
(14, 'Yamileth Rodriguez', 'yamileth.rodriguez@grupopcr.com.pa', NULL, '$2y$10$a36vm5FcXt3gxPmrBW.DA.YiBIdHGNsirQQZt/nWYHXL3g0r6W.wa', 'supervisor', 1),
(15, 'Diana Rico', 'diana.rico@grupopcr.com.pa', NULL, '$2y$10$l/0jqoo6LuKNL0NiTEztwu5hynV1o3VJmV4nP3MBcRZl0VYye6XKW', 'supervisor', 1),
(16, 'Katibel Saa', 'katibel.saa@automarketpan.com', NULL, '$2y$10$yeud.KTV6nrndTtZ00q74OH8bfn3mfvYtubN8zJrm3Yp3Ps1zDgN.', 'supervisor', 1),
(17, 'Ricardo De La Guardia', 'rdlg@grupopcr.com.pa', NULL, '$2y$10$Zg3eSHf7iqEO/Gb9Z9zHFuaV/W/2QFoOJacoLDQLDwkYTjIQ5QizK', 'gerencia', 1),
(18, 'Wendy Palomo', 'wendy.palomo@automarketpan.com', NULL, '$2y$10$bgTIHUfIcZb08MshyQk2R.0wHQgQ9UvNkx/opPBoedf1u8vntQtCK', 'gerencia', 1),
(19, 'ANGEL BUITRAGO', 'angel.buitrago@automarketpan.com', NULL, '$2y$10$nGGOic09In3bUGb/ThqKKuZzUBYGW65XnrTHdXUDptqQJ9Z5jG8pq', 'vendedor', 1),
(20, 'JUAN ESTRADA', 'juan.estrada@automarketpan.com', NULL, '$2y$10$H2IHbP5QZ6NLbRGjwOMm2O./P9VjXZ.W0mJ3Fz/KKWkJHLDcYBXLC', 'vendedor', 1),
(21, 'JONATHAN QUINTERO', 'jonathan.quintero@automarketpan.com', NULL, '$2y$10$wtA42XxFEJxvuQFw1oSkAulM4YMMzqanOJ5rQq0Dt0OhsIYxB8PFi', 'vendedor', 1),
(22, 'PAOLA ERAZO', 'paola.erazo@automarketpan.com', NULL, '$2y$10$kCFcMD4UqOKFdJQ6VDKmgOZsp1C1QIZmIpWypFhWhMhxUv7KP98JK', 'vendedor', 1),
(23, 'JOHANY MENDIETA', 'johany.mendieta@automarketpan.com', NULL, '$2y$10$WlwEnghogS0f/bRx3uNpJ.uSC7W1nsC6TBdC0g1x3kYffUbwRFBk2', 'vendedor', 1),
(24, 'ORLANDO DE LA ESPADA', 'orlando.delaespada@automarketpan.com', NULL, '$2y$10$Lx0hJm9iA7dMOZrOPHbcYOPSvzXuumD12dvvpKzojJb45L4AV1Esu', 'vendedor', 2),
(25, 'ESPERANZA BRAVO', 'esperanza.bravo@automarketpan.com', NULL, '$2y$10$9DxckNltXqZmV/j1yORDu.dvv0oovVNf3KbP5x.pCfTV61ncMLWM2', 'vendedor', 1),
(26, 'CHRISTIAN RUIZ', 'christian.ruiz@automarketpan.com', NULL, '$2y$10$yFIFahP/8ff9/2LNp0Hu0.np84AkwcA9SMzGpVQZLgZ/HGSfqPe1C', 'vendedor', 1),
(27, 'EDDY MONEGRO', 'eddy.monegro@automarketpan.com', NULL, '$2y$10$hHnslDhnBvgTCUaan3Jene9kl6zwDY1pMqlGlsNtIO2cgxI.j3MLK', 'vendedor', 1),
(28, 'GERMAN GONZALEZ', 'german.gonzalez@automarketpan.com', NULL, '$2y$10$SJWNVK8vGH3/RpGtpek6D.zXqbk5RFzLwVGgcm0JzzFT1ioXNcBt2', 'vendedor', 1),
(29, 'JOSE CASTILLO', 'jose.castillo@automarketpan.com', NULL, '$2y$10$oEtnYHtU7tjH/FNv3ukf.uC8R0Fbg02Zt5weN.Tjf6Q.JzmK5yYjG', 'vendedor', 1),
(30, 'DARIO JIMENEZ', 'dario.jimenez@automarketpan.com', NULL, '$2y$10$BpwG8NaKHKbGtipTT9FxLuGmLL4gwzVEm0d7VWwAPo81xTH9URX7i', 'vendedor', 1),
(31, 'REYNALDO ORTIZ', 'reynaldo.ortiz@automarketpan.com', NULL, '$2y$10$nWpcREtvkTo7HNK1/8wzt.1m9Kl.8uE93ls.erbTSc3EgwVAO6OgO', 'vendedor', 2),
(32, 'ARIEL ACEVEDO', 'Ariel.Acevedo@automarketpan.com', NULL, '$2y$10$NZ0V4x9sc3hXA0vBy8fHDOTLqVH5Fj9UJCwFY2YRWu0O8ebpVrA82', 'vendedor', 1),
(33, 'ROSA CALERO', 'rosa.calero@automarketpan.com', NULL, '$2y$10$YV2RanQgyRsNnxZafnKFYuII8l4e1/LGKh1Kr5UvtQPkOBYGyP9Ry', 'vendedor', 1),
(34, 'vendedor prueba', 'vendedor@prueba.com', NULL, '$2y$10$v8Yk2tghRfA9IAR5OD3pb.0QXGVI2vri6MKmn7fRGbrteTbzpFu26', 'vendedor', 1),
(35, 'supervisor prueba', 'supervisor@prueba.com', NULL, '$2y$10$/Fd3mQ0uNW63Ynwvuc8iB.JJsJwdSY7mkH2nOGffgKx.p/R0.aMv6', 'supervisor', 1),
(36, 'analista prueba', 'analista@prueba.com', NULL, '$2y$10$/qSS.sSGDLIQhCCos/yxCOG5EBwofIDzEZFC8epGOX7wHfoFsk2Ru', 'analista', 1),
(37, 'Carlos Chamorro', 'carlos.chamorro@automarketpan.com', NULL, '$2y$10$hsnJOfB6EJK3SxNQdB.zr.zQHTVanVyEGZ.TmkN7BCuqjMfU4Aprm', 'vendedor', 1),
(38, 'mcarcamo', 'mcarcamo@softnetla.com', NULL, '$2y$10$b3DfswLJoYHo/IXnBsIC4upzx4OCBufKvwxBy9HY94ppSSAxnCFhO', 'gerencia', 1),
(39, 'Graciela', 'graciela.mora@grupopcr.com.pa', NULL, '$2y$10$JknJzom4MaqrdcabrEPhz.EuHfiwjXCTB7u1j.B1aTAetm0Rablb6', 'vendedor', 1),
(40, 'Rodolfo', 'rodolfo.vernaza@grupopcr.com.pa', NULL, '$2y$10$F5EXyHd5g3./uVOS8YMUUeJNNccC1vddIrwcrhGVX5kbBXZpJWapy', 'vendedor', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adjuntos_general`
--
ALTER TABLE `adjuntos_general`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria_reporte_pb`
--
ALTER TABLE `categoria_reporte_pb`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_adjuntos`
--
ALTER TABLE `cc_adjuntos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_beneficiario`
--
ALTER TABLE `cc_beneficiario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_declaracion`
--
ALTER TABLE `cc_declaracion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_declaracion_jurada`
--
ALTER TABLE `cc_declaracion_jurada`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_expediente`
--
ALTER TABLE `cc_expediente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_generales`
--
ALTER TABLE `cc_generales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_ocupacionales`
--
ALTER TABLE `cc_ocupacionales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_personas_expuestas`
--
ALTER TABLE `cc_personas_expuestas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_pj_adjuntos`
--
ALTER TABLE `cc_pj_adjuntos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_pj_apoderados`
--
ALTER TABLE `cc_pj_apoderados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_pj_apoderados_temp`
--
ALTER TABLE `cc_pj_apoderados_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_pj_beneficiario_declaracion_jurada`
--
ALTER TABLE `cc_pj_beneficiario_declaracion_jurada`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_pj_beneficiario_final`
--
ALTER TABLE `cc_pj_beneficiario_final`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_pj_declaracion_accionista`
--
ALTER TABLE `cc_pj_declaracion_accionista`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_pj_declaracion_fuentes`
--
ALTER TABLE `cc_pj_declaracion_fuentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_pj_declaracion_jurada`
--
ALTER TABLE `cc_pj_declaracion_jurada`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_pj_declaracion_jurada_2`
--
ALTER TABLE `cc_pj_declaracion_jurada_2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_pj_directiva_dignatarios`
--
ALTER TABLE `cc_pj_directiva_dignatarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_pj_directiva_dignatarios_temp`
--
ALTER TABLE `cc_pj_directiva_dignatarios_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_pj_expediente`
--
ALTER TABLE `cc_pj_expediente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_pj_generales`
--
ALTER TABLE `cc_pj_generales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_pj_generales_beneficiarios_juridica`
--
ALTER TABLE `cc_pj_generales_beneficiarios_juridica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_pj_generales_beneficiarios_juridica_temp`
--
ALTER TABLE `cc_pj_generales_beneficiarios_juridica_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_pj_generales_beneficiarios_natural`
--
ALTER TABLE `cc_pj_generales_beneficiarios_natural`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_pj_generales_bf`
--
ALTER TABLE `cc_pj_generales_bf`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_pj_generales_bf_temp`
--
ALTER TABLE `cc_pj_generales_bf_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_pj_perosnas_expuestas`
--
ALTER TABLE `cc_pj_perosnas_expuestas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_pj_propietarios`
--
ALTER TABLE `cc_pj_propietarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_pj_propietarios_beneficiarios_juridica`
--
ALTER TABLE `cc_pj_propietarios_beneficiarios_juridica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_pj_propietarios_beneficiarios_juridica_temp`
--
ALTER TABLE `cc_pj_propietarios_beneficiarios_juridica_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_pj_referencias`
--
ALTER TABLE `cc_pj_referencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_pj_representante_legal`
--
ALTER TABLE `cc_pj_representante_legal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_pj_terceros_autorizados`
--
ALTER TABLE `cc_pj_terceros_autorizados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_pj_uso_interno`
--
ALTER TABLE `cc_pj_uso_interno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_referencias`
--
ALTER TABLE `cc_referencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_subastas`
--
ALTER TABLE `cc_subastas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_terceros_autorizados`
--
ALTER TABLE `cc_terceros_autorizados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cc_uso_interno`
--
ALTER TABLE `cc_uso_interno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `codigos`
--
ALTER TABLE `codigos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `repositorios`
--
ALTER TABLE `repositorios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adjuntos_general`
--
ALTER TABLE `adjuntos_general`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `categoria_reporte_pb`
--
ALTER TABLE `categoria_reporte_pb`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cc_adjuntos`
--
ALTER TABLE `cc_adjuntos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT de la tabla `cc_beneficiario`
--
ALTER TABLE `cc_beneficiario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT de la tabla `cc_declaracion`
--
ALTER TABLE `cc_declaracion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT de la tabla `cc_declaracion_jurada`
--
ALTER TABLE `cc_declaracion_jurada`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT de la tabla `cc_expediente`
--
ALTER TABLE `cc_expediente`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT de la tabla `cc_generales`
--
ALTER TABLE `cc_generales`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT de la tabla `cc_ocupacionales`
--
ALTER TABLE `cc_ocupacionales`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT de la tabla `cc_personas_expuestas`
--
ALTER TABLE `cc_personas_expuestas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT de la tabla `cc_pj_adjuntos`
--
ALTER TABLE `cc_pj_adjuntos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `cc_pj_apoderados`
--
ALTER TABLE `cc_pj_apoderados`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cc_pj_apoderados_temp`
--
ALTER TABLE `cc_pj_apoderados_temp`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cc_pj_beneficiario_declaracion_jurada`
--
ALTER TABLE `cc_pj_beneficiario_declaracion_jurada`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cc_pj_beneficiario_final`
--
ALTER TABLE `cc_pj_beneficiario_final`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `cc_pj_declaracion_accionista`
--
ALTER TABLE `cc_pj_declaracion_accionista`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `cc_pj_declaracion_fuentes`
--
ALTER TABLE `cc_pj_declaracion_fuentes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `cc_pj_declaracion_jurada`
--
ALTER TABLE `cc_pj_declaracion_jurada`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `cc_pj_declaracion_jurada_2`
--
ALTER TABLE `cc_pj_declaracion_jurada_2`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `cc_pj_directiva_dignatarios`
--
ALTER TABLE `cc_pj_directiva_dignatarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `cc_pj_directiva_dignatarios_temp`
--
ALTER TABLE `cc_pj_directiva_dignatarios_temp`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `cc_pj_expediente`
--
ALTER TABLE `cc_pj_expediente`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `cc_pj_generales`
--
ALTER TABLE `cc_pj_generales`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `cc_pj_generales_beneficiarios_juridica`
--
ALTER TABLE `cc_pj_generales_beneficiarios_juridica`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cc_pj_generales_beneficiarios_juridica_temp`
--
ALTER TABLE `cc_pj_generales_beneficiarios_juridica_temp`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cc_pj_generales_beneficiarios_natural`
--
ALTER TABLE `cc_pj_generales_beneficiarios_natural`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cc_pj_generales_bf`
--
ALTER TABLE `cc_pj_generales_bf`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cc_pj_generales_bf_temp`
--
ALTER TABLE `cc_pj_generales_bf_temp`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cc_pj_perosnas_expuestas`
--
ALTER TABLE `cc_pj_perosnas_expuestas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `cc_pj_propietarios`
--
ALTER TABLE `cc_pj_propietarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `cc_pj_propietarios_beneficiarios_juridica`
--
ALTER TABLE `cc_pj_propietarios_beneficiarios_juridica`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cc_pj_propietarios_beneficiarios_juridica_temp`
--
ALTER TABLE `cc_pj_propietarios_beneficiarios_juridica_temp`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cc_pj_referencias`
--
ALTER TABLE `cc_pj_referencias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `cc_pj_representante_legal`
--
ALTER TABLE `cc_pj_representante_legal`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `cc_pj_terceros_autorizados`
--
ALTER TABLE `cc_pj_terceros_autorizados`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `cc_pj_uso_interno`
--
ALTER TABLE `cc_pj_uso_interno`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cc_referencias`
--
ALTER TABLE `cc_referencias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT de la tabla `cc_subastas`
--
ALTER TABLE `cc_subastas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `cc_terceros_autorizados`
--
ALTER TABLE `cc_terceros_autorizados`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT de la tabla `cc_uso_interno`
--
ALTER TABLE `cc_uso_interno`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT de la tabla `codigos`
--
ALTER TABLE `codigos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT de la tabla `repositorios`
--
ALTER TABLE `repositorios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
