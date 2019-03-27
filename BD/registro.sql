-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
-- Servidor: localhost
-- Tiempo de generación: 10-04-2018 a las 19:42:57
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

CREATE TABLE `ficha` (
  `folio` int(11) NOT NULL,
  `p_nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `p_edad` int(2) NOT NULL,
  `p_sexo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `p_nacionalidad` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `p_curp` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `p_fnacimiento` date NOT NULL,
  `p_lnacimiento` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `p_ecivil` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `p_dom` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `p_col` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `p_cp` int(5) NOT NULL,
  `p_estado` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `p_municipio` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `p_localidad` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `p_telefono` varchar(10) DEFAULT NULL,
  `p_celular` varchar(10) DEFAULT NULL,
  `p_email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `p_labora` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `p_transporte` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `p_carrera1` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `p_carrera2` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `p_carrera3` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `p_turno` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `f_padre1` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `f_ocupacion1` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `f_ltrabajo1` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `f_teltrabajo1` varchar(10) DEFAULT NULL,
  `f_padre2` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `f_ocupacion2` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `f_ltrabajo2` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `f_telefono2` varchar(10) DEFAULT NULL,
  `ep_secundaria` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ep_localidad` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ep_municipio` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ep_promedio` double UNSIGNED NOT NULL,
  `ep_anoegreso` int(11) NOT NULL,
  `fecha_hora` DATETIME NOT NULL default CURRENT_TIMESTAMP,
`Xnombrequeolvide` boolean DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ficha`
--

INSERT INTO `ficha` (`folio`, `p_nombre`, `p_edad`, `p_sexo`, `p_nacionalidad`, `p_curp`, `p_fnacimiento`, `p_lnacimiento`, `p_ecivil`, `p_dom`, `p_col`, `p_cp`, `p_estado`, `p_municipio`, `p_localidad`, `p_telefono`, `p_celular`, `p_email`, `p_labora`, `p_transporte`, `p_carrera1`, `p_carrera2`, `p_carrera3`, `p_turno`, `f_padre1`, `f_ocupacion1`, `f_ltrabajo1`, `f_teltrabajo1`, `f_padre2`, `f_ocupacion2`, `f_ltrabajo2`, `f_telefono2`, `ep_secundaria`, `ep_localidad`, `ep_municipio`, `ep_promedio`, `ep_anoegreso`) VALUES
(1, 'Prueba', 15, 'M', 'Mexicano', 'PCBTIS', '2000-04-19', 'Colima', 'Soltero', 'Prueba 1', 'Prueba 1', 28000, 'Colima', 'Colima', 'Colima', 0, 0, 'prueba@gmail.com', 'No', 'Taxi', 'Programacion', 'Contbilidad', 'Electricidad', 'M', 'Prueba', 'Prueba', 'Prueba', 0, 'Prueba', 'Prueba', 'Prueba', 0, 'Prueba', 'Prueba', 'Prueba', 8, 2018),
(2, 'HECTOR EDUARDO CAMBEROS OCHOA', 16, 'MASCULINO', 'Mexicano', 'BADD110313HCMLNS09', '2003-01-01', 'COLIMA', 'SOLTERO', 'BERNARDO OHIGGINS', 'SAN PABLO', 28060, 'COLIMA', 'COLIMA', 'COLIMA', 3121201698, 3121947638, 'hectoreduardo1@hotmail.com', 'NO', 'CAMION', 'ELECTRICIDAD', 'CONTABILIDAD', 'LABORATORISTA QUIMICO', 'M', 'HECTOR EDUARDO CAMBEROS AREVALO', 'INGENIERO EN SISTEMAS', 'CENTRO DE CONTROL DE LA NASA', 3121947638, 'OLGA BERENICE OCHOA VALLEJO', 'NINGINA', 'NINGUNA', 3122051593, 'JESUS REYES HEROLES', 'COLIMA', 'COLIMA', 7, 2018);
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`folio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ficha`
--
ALTER TABLE `ficha`
  MODIFY `folio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE TABLE usuarios (
    id_user int NOT NULL,
    user varchar(80) COLLATE utf8_spanish_ci NOT NULL,
    pass varchar(60) COLLATE utf8_spanish_ci NOT NULL
    
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;