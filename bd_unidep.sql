-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2016 a las 22:48:36
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_unidep`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_grupo` varchar(20) NOT NULL,
  `hr` varchar(10) NOT NULL,
  `h_e` time NOT NULL,
  `h_s` time NOT NULL,
  `f_s` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id`, `matricula`, `id_materia`, `id_grupo`, `hr`, `h_e`, `h_s`, `f_s`) VALUES
(49, 20153232, 0, '', '', '21:36:27', '21:36:56', '2016-10-05 04:36:56'),
(50, 20145643, 0, '', '', '21:38:28', '21:40:00', '2016-10-05 04:40:00'),
(51, 20163232, 0, '', '', '21:46:13', '21:47:37', '2016-10-05 04:47:37'),
(52, 20153232, 0, '', '', '21:57:03', '21:57:26', '2016-10-05 04:57:26'),
(53, 20156565, 0, '', '', '21:57:38', '21:57:57', '2016-10-05 04:57:57'),
(54, 20145465, 0, '', '', '21:58:10', '21:58:17', '2016-10-05 04:58:17'),
(55, 20132322, 0, '', '', '21:59:32', '22:00:15', '2016-10-05 04:59:32'),
(56, 20153232, 0, '', '', '22:35:54', '22:43:24', '2016-10-05 05:35:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aula`
--

CREATE TABLE `aula` (
  `id` int(11) NOT NULL,
  `clve_aula` varchar(4) NOT NULL,
  `letra` char(1) NOT NULL,
  `numero` int(2) NOT NULL,
  `f_mod` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id` int(11) NOT NULL,
  `clve_car` varchar(6) NOT NULL,
  `nom_car` varchar(60) NOT NULL,
  `periodos` varchar(14) NOT NULL,
  `f_mod` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `id` int(11) NOT NULL,
  `clve_clase` varchar(6) NOT NULL,
  `clve_car` varchar(6) NOT NULL,
  `grado` int(2) NOT NULL,
  `nom_mat` varchar(50) NOT NULL,
  `clve_hora` int(10) NOT NULL,
  `clve_aula` varchar(4) NOT NULL,
  `matricula` int(12) NOT NULL,
  `f_mod` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id` int(11) NOT NULL,
  `ap` varchar(30) NOT NULL,
  `am` varchar(30) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `f_nac` varchar(10) NOT NULL,
  `edad` int(2) NOT NULL,
  `edo_civil` varchar(7) NOT NULL,
  `curp` varchar(8) NOT NULL,
  `tel` int(10) NOT NULL,
  `cel` int(10) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `calle` varchar(30) NOT NULL,
  `num_ext` int(4) NOT NULL,
  `num_int` int(3) NOT NULL,
  `col` varchar(35) NOT NULL,
  `cdad` varchar(15) NOT NULL,
  `cdad_nac` varchar(15) NOT NULL,
  `edo_nac` varchar(15) NOT NULL,
  `pais_nac` varchar(15) NOT NULL,
  `esc_proc` varchar(25) NOT NULL,
  `esp` varchar(35) NOT NULL,
  `prom_ant` int(2) NOT NULL,
  `f_egr` varchar(10) NOT NULL,
  `campus` varchar(15) NOT NULL,
  `carrera` varchar(6) NOT NULL,
  `beca` int(2) NOT NULL,
  `grado` int(2) NOT NULL,
  `asignaturas` int(1) NOT NULL,
  `mat1` varchar(8) NOT NULL,
  `mat2` varchar(8) NOT NULL,
  `mat3` varchar(4) NOT NULL,
  `mat4` varchar(8) NOT NULL,
  `mat5` varchar(8) NOT NULL,
  `mat6` varchar(8) NOT NULL,
  `mat7` varchar(8) NOT NULL,
  `mat8` varchar(8) NOT NULL,
  `mensual` float NOT NULL,
  `ctco_em` varchar(35) NOT NULL,
  `par_em` varchar(15) NOT NULL,
  `tel_em` int(10) NOT NULL,
  `seguro` int(8) NOT NULL,
  `ale_enf` varchar(100) NOT NULL,
  `obs` varchar(100) NOT NULL,
  `f_mod` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `falta`
--

CREATE TABLE `falta` (
  `id` int(11) NOT NULL,
  `clve_falta` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `clve_materia` int(11) NOT NULL,
  `clve_clase` int(11) NOT NULL,
  `h_e` int(11) NOT NULL,
  `h_s` int(11) NOT NULL,
  `f_s` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `id` int(11) NOT NULL,
  `grado` int(2) NOT NULL,
  `periodo` varchar(6) NOT NULL,
  `f_mod` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id` int(11) NOT NULL,
  `clve_hora` varchar(6) NOT NULL,
  `hora` varchar(10) NOT NULL,
  `f_mod` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id` int(11) NOT NULL,
  `clve_mat` varchar(8) NOT NULL,
  `nom_mat` varchar(50) NOT NULL,
  `creditos` int(2) NOT NULL,
  `grado` int(2) NOT NULL,
  `clve_car` varchar(6) DEFAULT NULL,
  `serie` varchar(2) NOT NULL,
  `f_mod` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `falta`
--
ALTER TABLE `falta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT de la tabla `aula`
--
ALTER TABLE `aula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `clases`
--
ALTER TABLE `clases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `falta`
--
ALTER TABLE `falta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `grado`
--
ALTER TABLE `grado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
