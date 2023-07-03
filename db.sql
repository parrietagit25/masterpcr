-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 03-07-2023 a las 00:04:03
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
  `link_desc_pj` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `stat` int DEFAULT NULL COMMENT '1=persona_natural\r\n2=persona juridica'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `adjuntos_general`
--

INSERT INTO `adjuntos_general` (`id`, `id_general`, `descripcion`, `link_desc`, `link_desc_pj`, `stat`) VALUES
(2, 15, 'otro adjunto', NULL, 'vistas/adjuntos/adjuntos_g_pn/15_6485572b92731.txt', 1);

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
(11, 17, NULL, NULL, NULL, NULL);

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
(15, 17, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
(1, 2, '', '', '', '', '', ''),
(16, 17, '', '', '', '', '', '');

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
(11, 17, '', '1970-01-01', NULL);

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
(1, 2, '2023-05-29', '', 'lexus', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 17, '1970-01-01', 'pedro pedro pedro pedro ', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
  `fg_stat` int DEFAULT NULL COMMENT '1=registrado\r\n2=esperando revision\r\n3=revisar de nuevo\r\n4=aprobado',
  `fg_fecha_log` datetime DEFAULT CURRENT_TIMESTAMP,
  `fg_id_user` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_generales`
--

INSERT INTO `cc_generales` (`id`, `fg_primer_nombre`, `fg_segundo_nombre`, `fg_apellido_paterno`, `fg_apellido_materno`, `fg_apellido_casada`, `fg_pais_nacimiento`, `fg_fecha_nacimiento`, `fg_nacionalidad`, `fg_genero`, `fg_estado_civil`, `fg_cedula`, `fg_pais_residencia`, `fg_direccion_residencial`, `fg_pais_residencia_fiscal`, `fg_email`, `fg_telefono_residencia`, `fg_telefono_movil`, `fg_stat`, `fg_fecha_log`, `fg_id_user`) VALUES
(17, 'pedro', 'pedro', 'pedro', 'pedro', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', 4, '2023-06-27 23:56:06', 8);

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
(1, 2, '', '', '', '', '', '', '', '', '', ''),
(16, 17, '', '', '', '', '', '', '', '', '', '');

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
(12, 17, NULL, '', '', NULL, '1970-01-01', '', '1970-01-01', '');

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
(6, 15, NULL, NULL, NULL, NULL),
(7, 16, NULL, NULL, NULL, NULL),
(8, 17, NULL, NULL, NULL, NULL);

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
(12, 15, NULL, NULL, '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 16, NULL, NULL, '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 17, NULL, NULL, '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
(49, 15, '', ''),
(50, 15, '', ''),
(51, 15, '', ''),
(52, 15, '', ''),
(53, 16, '', ''),
(54, 16, '', ''),
(55, 16, '', ''),
(56, 16, '', ''),
(57, 17, '', ''),
(58, 17, '', ''),
(59, 17, '', ''),
(60, 17, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_declaracion_fuentes`
--

CREATE TABLE `cc_pj_declaracion_fuentes` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `pjdf_actividad_principal` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjdf_actividad_secundaria` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjdf_otras_fuentes` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjdf_otras_fuentes_secundaria` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjdf_limite_compra` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjdf_forma_pago` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjdf_metodo_pago_1` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjdf_metodo_pago_2` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_pj_declaracion_fuentes`
--

INSERT INTO `cc_pj_declaracion_fuentes` (`id`, `id_general`, `pjdf_actividad_principal`, `pjdf_actividad_secundaria`, `pjdf_otras_fuentes`, `pjdf_otras_fuentes_secundaria`, `pjdf_limite_compra`, `pjdf_forma_pago`, `pjdf_metodo_pago_1`, `pjdf_metodo_pago_2`) VALUES
(14, 15, '', '', '', '', '', '', '', ''),
(15, 16, '', '', '', '', '', '', '', ''),
(16, 17, '', '', '', '', '', '', '', '');

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
(6, 15, '', '1970-01-01', NULL),
(7, 16, '', '1970-01-01', NULL),
(8, 17, '', '1970-01-01', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_declaracion_jurada_2`
--

CREATE TABLE `cc_pj_declaracion_jurada_2` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `p_jdj_nombre_completo_2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `p_jdj_fecha_2` date DEFAULT NULL,
  `p_jdj_firma_2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_pj_declaracion_jurada_2`
--

INSERT INTO `cc_pj_declaracion_jurada_2` (`id`, `id_general`, `p_jdj_nombre_completo_2`, `p_jdj_fecha_2`, `p_jdj_firma_2`) VALUES
(5, 15, '', '1970-01-01', NULL),
(6, 16, '', '1970-01-01', NULL),
(7, 17, '', '1970-01-01', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_directiva_dignatarios`
--

CREATE TABLE `cc_pj_directiva_dignatarios` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `pjdd_nombre_completo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjdd_cargo` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjdd_nacionalidad` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjdd_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjdd_correo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjdd_direccion` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjdd_telefono` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(14, 15, '1970-01-01', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 16, '2023-06-12', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 17, '1970-01-01', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_pj_generales`
--

CREATE TABLE `cc_pj_generales` (
  `id` int NOT NULL,
  `pjgn_id_user` int DEFAULT NULL,
  `pjgn_stat` int DEFAULT NULL COMMENT '1=registrado \r\n2=esperando revision 3=revisar de nuevo 4=aprobado	',
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
(15, 1, 4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '2023-05-30 05:03:28'),
(16, 1, 4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '2023-06-12 17:27:51'),
(17, 8, 1, 'sanchezgrupopcr2023', 'sanchezgrupopcr2023', 'sanchezgrupopcr2023', '04TDPJ', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '2023-06-28 01:13:57');

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
(7, 15, NULL, '', '', '', '1970-01-01', '1970-01-01', '', NULL, '', '', '1970-01-01', '', '1970-01-01', ''),
(8, 16, NULL, '', '', '', '1970-01-01', '1970-01-01', '', NULL, '', '', '1970-01-01', '', '1970-01-01', ''),
(9, 17, NULL, '', '', '', '1970-01-01', '1970-01-01', '', NULL, '', '', '1970-01-01', '', '1970-01-01', '');

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
(13, 15, NULL, '', '', '', '', ''),
(14, 16, NULL, '', '', '', '', ''),
(15, 17, NULL, '', '', '', '', '');

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
(13, 15, '', '', '', '', ''),
(14, 15, '', '', '', '', ''),
(15, 16, '', '', '', '', ''),
(16, 16, '', '', '', '', ''),
(17, 17, '', '', '', '', ''),
(18, 17, '', '', '', '', '');

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
  `pjrl_profesion` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjrl_lugar_trabajo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pjrl_telefono` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_pj_representante_legal`
--

INSERT INTO `cc_pj_representante_legal` (`id`, `id_general`, `pjrl_nombre_completo`, `pjrl_cedula_pasaporte`, `pjrl_estado_civil`, `pjrl_nacionalidada`, `pjrl_fecha_nacimiento`, `pjrl_direccion`, `pjrl_correo`, `pjrl_profesion`, `pjrl_lugar_trabajo`, `pjrl_telefono`) VALUES
(13, 15, '', '', '', '', '1970-01-01', '', '', '', '', ''),
(14, 16, '', '', '', '', '1970-01-01', '', '', '', '', ''),
(15, 17, '', '', '', '', '1970-01-01', '', '', '', '', '');

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
(11, 15, NULL, NULL, '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 16, NULL, NULL, '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 17, NULL, NULL, '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
  `pjui_comentario_1` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `pjui_comentario_2` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `pjui_comentario_3` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `pjui_comentario_4` varchar(250) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cc_pj_uso_interno`
--

INSERT INTO `cc_pj_uso_interno` (`id`, `id_general`, `pjui_nombre_completo_1`, `pjui_aprobacion_1`, `pjui_fecha_1`, `pjui_nombre_completo_2`, `pjui_aprobacion_2`, `pjui_fecha_2`, `pjui_nombre_completo_3`, `pjui_aprobacion_3`, `pjui_fecha_3`, `pjui_nombre_completo_4`, `pjui_aprobacion_4`, `pjui_fecha_4`, `pjui_comentario_1`, `pjui_comentario_2`, `pjui_comentario_3`, `pjui_comentario_4`) VALUES
(1, 15, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(2, 16, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', ''),
(3, 17, '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', '');

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
(1, 2, '', '', '', '', '', '', '', '', '', ''),
(16, 17, '', '', '', '', '', '', '', '', '', '');

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
(14, 17, NULL, NULL, '', '', '', '', '', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_uso_interno`
--

CREATE TABLE `cc_uso_interno` (
  `id` int NOT NULL,
  `id_general` int DEFAULT NULL,
  `fui_nombre_completo_1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fui_aprobacion_1` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fui_fecha_1` date DEFAULT NULL,
  `fui_nombre_completo_2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fui_aprobacion_2` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fui_fecha_2` date DEFAULT NULL,
  `fui_nombre_completo_3` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fui_aprobacion_3` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fui_fecha_3` date DEFAULT NULL,
  `fui_nombre_completo_4` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fui_aprobacion_4` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fui_fecha_4` date DEFAULT NULL,
  `fui_comentario_1` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `fui_comentario_2` int NOT NULL,
  `fui_comentario_3` int NOT NULL,
  `fui_comentario_4` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(201, '27GBPJ', 'Turismo', 'conosca a su cliente, sector economico Turismo'),
(202, '112MDP', 'Financiamiento', 'Conosca a su cliente, metodo de pago: financiamiento');

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
(3, 'vendedor', 'Vendedor de autos', 1),
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
(2, 'tayronbus', 'pdarrieta@hormail.com', 24, '$2y$10$1aw/nCPLmOcV2S5tHE0AjO1tTyNFTnaqogUQXVIzaBvnAwHfYmmxO', 'tipo_1', 1),
(5, 'tayron', 'pedroarrieta25@hotmail.com', 24, '$2y$10$omg2rq0KVc6gFmP8AU/Mt.w6JZXuhf.D0YJVOk7b3/eTlJGhuvLDi', 'tipo_1', 1),
(7, 'Paul Silva', 'paul.sila@grupopcr.com.pa', NULL, '$2y$10$xPR9pMV.djIYesgPrEL8G.nm4eRsJL3HpEPIn8LfhZeQoZNSEkmiu', 'analista', 1),
(8, 'edwing sanchez', 'edwing.sanchez@grupopcr.com.pa', NULL, '$2y$10$fb67Bvankgy2VOkkD0hqo.J7gieRahEmzVd70yEQYOtOeewdgCjaK', 'vendedor', 1),
(9, 'joel', 'joel.deleon@automarketpan.com', NULL, '$2y$10$Z41f6ZOpqKNg/Be8ytPUJ.s7u2KlusmcArS8fpADyfD9iWxML/JaC', 'supervisor', 1);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categoria_reporte_pb`
--
ALTER TABLE `categoria_reporte_pb`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cc_adjuntos`
--
ALTER TABLE `cc_adjuntos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `cc_beneficiario`
--
ALTER TABLE `cc_beneficiario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `cc_declaracion`
--
ALTER TABLE `cc_declaracion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `cc_declaracion_jurada`
--
ALTER TABLE `cc_declaracion_jurada`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `cc_expediente`
--
ALTER TABLE `cc_expediente`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `cc_generales`
--
ALTER TABLE `cc_generales`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `cc_ocupacionales`
--
ALTER TABLE `cc_ocupacionales`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `cc_personas_expuestas`
--
ALTER TABLE `cc_personas_expuestas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `cc_pj_adjuntos`
--
ALTER TABLE `cc_pj_adjuntos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `cc_pj_declaracion_accionista`
--
ALTER TABLE `cc_pj_declaracion_accionista`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `cc_pj_declaracion_fuentes`
--
ALTER TABLE `cc_pj_declaracion_fuentes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `cc_pj_declaracion_jurada`
--
ALTER TABLE `cc_pj_declaracion_jurada`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `cc_pj_declaracion_jurada_2`
--
ALTER TABLE `cc_pj_declaracion_jurada_2`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `cc_pj_directiva_dignatarios`
--
ALTER TABLE `cc_pj_directiva_dignatarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cc_pj_directiva_dignatarios_temp`
--
ALTER TABLE `cc_pj_directiva_dignatarios_temp`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cc_pj_expediente`
--
ALTER TABLE `cc_pj_expediente`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `cc_pj_generales`
--
ALTER TABLE `cc_pj_generales`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `cc_pj_propietarios`
--
ALTER TABLE `cc_pj_propietarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `cc_pj_representante_legal`
--
ALTER TABLE `cc_pj_representante_legal`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `cc_pj_terceros_autorizados`
--
ALTER TABLE `cc_pj_terceros_autorizados`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `cc_pj_uso_interno`
--
ALTER TABLE `cc_pj_uso_interno`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cc_referencias`
--
ALTER TABLE `cc_referencias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `cc_terceros_autorizados`
--
ALTER TABLE `cc_terceros_autorizados`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `cc_uso_interno`
--
ALTER TABLE `cc_uso_interno`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `codigos`
--
ALTER TABLE `codigos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
