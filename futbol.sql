-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-01-2019 a las 19:08:05
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `futbol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equips`
--

CREATE TABLE `equips` (
  `codi` int(10) NOT NULL,
  `nom` varchar(30) COLLATE utf32_bin NOT NULL,
  `localitat` varchar(30) COLLATE utf32_bin NOT NULL,
  `web` varchar(100) COLLATE utf32_bin NOT NULL,
  `escut` varchar(100) COLLATE utf32_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Volcado de datos para la tabla `equips`
--

INSERT INTO `equips` (`codi`, `nom`, `localitat`, `web`, `escut`) VALUES
(2, 'Real Madrid', 'Madrid', 'https://www.realmadrid.com/', 'mdr'),
(3, 'Atletico de Madrid', 'Madrid', 'http://www.atleticodemadrid.com/', 'atm'),
(4, 'Sevilla', 'Sevilla', 'https://www.sevillafc.es/', 'svl'),
(5, 'Alaves', 'Alava', 'https://www.deportivoalaves.com/', 'dpa'),
(6, 'Getafe', 'Getafe', 'https://www.getafecf.com/', 'gtc'),
(7, 'Betis', 'Sevilla', 'https://www.realbetisbalompie.es/', 'bets'),
(8, 'Real Sociedad', 'Guipuzcoa', 'https://www.realsociedad.eus/', 'rls'),
(9, 'Valencia CF', 'Valencia', 'http://www.valenciacf.com/', 'vlc'),
(10, 'Levante', 'Valencia', 'http://www.levanteud.com/es/', 'lvt'),
(12, 'Barcelona', 'Barcelona', 'www.fcbarcelona.es', 'bcn');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titols`
--

CREATE TABLE `titols` (
  `codi` int(10) NOT NULL,
  `nom` varchar(30) COLLATE utf32_bin NOT NULL,
  `codiequip` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Volcado de datos para la tabla `titols`
--

INSERT INTO `titols` (`codi`, `nom`, `codiequip`) VALUES
(1, '25 Ligas', 1),
(2, '31 Ligas', 2),
(3, '10 Ligas', 3),
(4, '1 Ligas', 4),
(5, '0 Ligas', 5),
(6, '0 Ligas', 6),
(7, '1 Ligas', 7),
(8, '2 Ligas', 8),
(9, '6 Ligas', 9),
(10, '0 Ligas', 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equips`
--
ALTER TABLE `equips`
  ADD PRIMARY KEY (`codi`);

--
-- Indices de la tabla `titols`
--
ALTER TABLE `titols`
  ADD PRIMARY KEY (`codi`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equips`
--
ALTER TABLE `equips`
  MODIFY `codi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `titols`
--
ALTER TABLE `titols`
  MODIFY `codi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
