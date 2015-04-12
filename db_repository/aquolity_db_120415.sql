-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-04-2015 a las 01:34:14
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `aquolity_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_entity`
--

CREATE TABLE IF NOT EXISTS `tbl_entity` (
  `id_entity` int(11) NOT NULL,
  `entity_name` varchar(80) NOT NULL,
  `entity_description` varchar(180) NOT NULL,
  `entity_link` varchar(180) NOT NULL,
  `entity_phone` varchar(80) NOT NULL,
  `entity_country` varchar(80) NOT NULL,
  `entity_address` varchar(180) NOT NULL,
  PRIMARY KEY (`id_entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_icon`
--

CREATE TABLE IF NOT EXISTS `tbl_icon` (
  `id_icon` int(11) NOT NULL,
  `icon_name` varchar(80) NOT NULL,
  `icon_description` varchar(180) NOT NULL,
  `icon_link` varchar(180) NOT NULL,
  PRIMARY KEY (`id_icon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_paramres`
--

CREATE TABLE IF NOT EXISTS `tbl_paramres` (
  `id_paramres` int(11) NOT NULL,
  `id_result` int(11) NOT NULL,
  `id_paramtest` int(11) NOT NULL,
  `id_icon` int(11) NOT NULL,
  `paramres_val` float NOT NULL,
  `paramres_eval` float NOT NULL,
  PRIMARY KEY (`id_paramres`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_paramtest`
--

CREATE TABLE IF NOT EXISTS `tbl_paramtest` (
  `id_paramtest` int(11) NOT NULL,
  `id_test` int(11) NOT NULL,
  `paramtest_name` varchar(80) NOT NULL,
  `paramtest_minval` float NOT NULL,
  `paramtest_maxval` float NOT NULL,
  PRIMARY KEY (`id_paramtest`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_result`
--

CREATE TABLE IF NOT EXISTS `tbl_result` (
  `id_result` int(11) NOT NULL AUTO_INCREMENT,
  `id_test` int(11) NOT NULL,
  `id_source` int(11) NOT NULL,
  `id_solution` int(11) NOT NULL,
  `res_username` varchar(80) NOT NULL,
  `res_lat` decimal(18,12) NOT NULL,
  `res_long` decimal(18,12) NOT NULL,
  `res_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `res_year` year(4) NOT NULL,
  `res_month` tinyint(4) NOT NULL,
  `res_day` tinyint(4) NOT NULL,
  `res_description` varchar(180) NOT NULL,
  PRIMARY KEY (`id_result`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `tbl_result`
--

INSERT INTO `tbl_result` (`id_result`, `id_test`, `id_source`, `id_solution`, `res_username`, `res_lat`, `res_long`, `res_timestamp`, `res_year`, `res_month`, `res_day`, `res_description`) VALUES
(1, 0, 0, 0, 'bren', '-16.000000000000', '-71.000000000000', '2014-09-06 06:58:28', 0000, 0, 0, ''),
(2, 0, 0, 0, 'uu', '8.000000000000', '8.000000000000', '2014-09-07 20:10:33', 0000, 0, 0, ''),
(3, 1, 0, 0, 'kkkkk', '9.000000000000', '9.000000000000', '2014-09-07 20:13:53', 0000, 0, 0, ''),
(4, 2, 0, 0, 'Brenda', '-16.000000000000', '-71.000000000000', '2014-09-07 22:03:24', 0000, 0, 0, ''),
(5, 1, 0, 0, 'uuu', '-16.000000000000', '-72.000000000000', '2014-09-07 22:20:20', 0000, 0, 0, ''),
(6, 1, 0, 0, 'rrr', '-16.000000000000', '-72.500000000000', '2014-09-07 22:21:50', 0000, 0, 0, ''),
(7, 1, 0, 0, 'ttt', '-16.000000000000', '-72.800003051758', '2014-09-07 22:23:06', 0000, 0, 0, ''),
(8, 1, 0, 0, 'qq', '-16.000000000000', '-72.599998474121', '2014-09-07 22:24:25', 0000, 0, 0, ''),
(9, 1, 0, 0, 'qqqqqqq', '-16.000000000000', '-72.900001525879', '2014-09-07 22:25:28', 0000, 0, 0, ''),
(10, 1, 0, 0, 'ggggg', '-16.000000000000', '-72.000000000000', '2014-09-07 22:26:24', 0000, 0, 0, ''),
(11, 1, 0, 0, 'klllll', '-16.000000000000', '-89.000000000000', '2014-09-08 00:50:59', 0000, 0, 0, ''),
(12, 1, 0, 0, 'hhhhh', '-16.000000000000', '-70.000000000000', '2014-09-08 01:50:02', 0000, 0, 0, ''),
(13, 1, 0, 0, 'ff', '8.000000000000', '7.000000000000', '2014-09-08 01:51:06', 0000, 0, 0, ''),
(14, 1, 0, 0, 'e', '5.000000000000', '5.000000000000', '2014-09-08 01:51:30', 0000, 0, 0, ''),
(15, 1, 0, 0, 'e', '4.000000000000', '4.000000000000', '2014-09-08 01:52:01', 0000, 0, 0, ''),
(16, 1, 0, 0, 'r', '5.000000000000', '5.000000000000', '2014-09-08 01:55:16', 0000, 0, 0, ''),
(17, 1, 0, 0, 's', '5.000000000000', '6.000000000000', '2014-09-08 01:57:37', 0000, 0, 0, ''),
(18, 1, 0, 0, 'l', '9.000000000000', '9.000000000000', '2014-09-08 02:23:46', 0000, 0, 0, ''),
(19, 1, 0, 0, 'o', '9.000000000000', '9.000000000000', '2014-09-08 02:24:40', 0000, 0, 0, ''),
(20, 1, 0, 0, 'ww', '4.000000000000', '4.000000000000', '2014-09-08 02:42:31', 0000, 0, 0, ''),
(21, 1, 0, 0, 'yy', '7.000000000000', '7.000000000000', '2014-09-08 02:44:09', 0000, 0, 0, ''),
(22, 2, 0, 0, 'Brenda Arequipa', '-16.404052400000', '-71.539011500000', '2014-09-09 04:45:39', 0000, 0, 0, ''),
(23, 1, 0, 0, 'brenda1', '-16.000000000000', '-71.000000000000', '2014-09-09 05:07:47', 0000, 0, 0, '0'),
(24, 1, 0, 0, 'brenda2', '-16.333000000000', '-71.444400000000', '2014-09-09 05:10:06', 0000, 0, 0, 'Esta es mi tierra 2'),
(25, 1, 0, 0, '', '0.000000000000', '0.000000000000', '2014-09-09 16:44:15', 0000, 0, 0, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_solution`
--

CREATE TABLE IF NOT EXISTS `tbl_solution` (
  `id_solution` int(11) NOT NULL,
  `id_entity` int(11) NOT NULL,
  `sol_name` varchar(80) NOT NULL,
  `sol_username` varchar(80) NOT NULL,
  `sol_description` varchar(180) NOT NULL,
  `sol_link` varchar(180) NOT NULL,
  `sol_entity` tinyint(1) NOT NULL DEFAULT '0',
  `sol_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_solution`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_source`
--

CREATE TABLE IF NOT EXISTS `tbl_source` (
  `id_source` int(11) NOT NULL,
  `source_name` varchar(80) NOT NULL,
  `source_link` varchar(180) NOT NULL,
  PRIMARY KEY (`id_source`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_test`
--

CREATE TABLE IF NOT EXISTS `tbl_test` (
  `id_test` int(11) NOT NULL,
  `test_name` varchar(80) NOT NULL,
  `test_username` varchar(80) NOT NULL,
  `test_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_test`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
