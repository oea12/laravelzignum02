-- phpMyAdmin SQL Dump
-- version 4.2.10.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-02-2015 a las 23:33:33
-- Versión del servidor: 5.5.40
-- Versión de PHP: 5.4.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `zignum`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `album_texts`
--

CREATE TABLE IF NOT EXISTS `album_texts` (
`id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `album_name` varchar(50) DEFAULT NULL,
  `description` text,
  `is_translated` tinyint(4) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `album_texts`
--

INSERT INTO `album_texts` (`id`, `album_id`, `language_id`, `album_name`, `description`, `is_translated`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'PASILLO ZINCO', 'It was the perfect opportunity for our guests could create their own blends, by his own hand selecting ingredients of your choice, each guest was able to explore a myriad of options to create and prepare the most adventurous mixes with Silver and Reposado Mezcal Zignum.', 0, '2014-11-11 21:01:32', '2014-11-20 19:38:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
`id` int(11) NOT NULL,
  `album_name` varchar(50) DEFAULT NULL,
  `description` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `albums`
--

INSERT INTO `albums` (`id`, `album_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'PASILLO ZINCO', 'Fue la oportunidad perfecta para que nuestros invitados pudieran crear sus propias mezclas, seleccionando por su propia mano los ingredientes de su preferencia, cada invitado pudo explorar un sin fin de opciones para crear y preparar las mezclas más aventuradas con Mezcal Zignum Silver y Reposado.', '2014-11-11 21:01:32', '2014-11-11 21:01:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `assigned_roles`
--

CREATE TABLE IF NOT EXISTS `assigned_roles` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `assigned_roles`
--

INSERT INTO `assigned_roles` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 2),
(2, 2, 1),
(11, 11, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cocktail_texts`
--

CREATE TABLE IF NOT EXISTS `cocktail_texts` (
`id` int(11) NOT NULL,
  `cocktail_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `product` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `instructions` text,
  `is_translated` tinyint(4) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cocktail_texts`
--

INSERT INTO `cocktail_texts` (`id`, `cocktail_id`, `language_id`, `product`, `name`, `instructions`, `is_translated`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'zignum_silver', 'Zignum Apple', '2 oz. Zignum Reposado\r\nIce\r\nApple soda to fill in\r\n', NULL, '2014-10-27 22:14:35', '2014-11-28 17:26:53'),
(2, 2, 1, 'zignum_silver', 'Zignum Kiwi', '2 oz. Zignum Reposado\r\nIce\r\n1 Kiwi\r\nJuice of ½ lemon\r\nMineral water to fill in\r\nSimple syrup (add to taste)\r\nMacerate kiwi, mix all ingredients in a high ball glass and fill up with mineral water\r\n', NULL, '2014-10-27 22:15:31', '2014-12-03 15:16:49'),
(3, 3, 1, 'zignum_silver', 'Zignum Coffee', '1.5 oz. Zignum Reposado\r\nIce\r\n4 oz. non-fat milk\r\n5 oz. de coffee liquor\r\n', NULL, '2014-10-27 22:16:31', '2014-11-28 17:28:21'),
(4, 4, 1, 'zignum_silver', 'Zignum Ginger & Orange', '2 oz. Zignum Reposado\r\nIce\r\nGinger ale to fill in\r\n1 slice of orange\r\n', NULL, '2014-10-27 22:17:00', '2014-11-28 17:28:54'),
(5, 5, 1, 'zignum_silver', 'Zignum Mango ', '1  ½ oz. Zignum Reposado\r\nIce\r\n1/4 oz. lemon juice\r\n2 oz. mango nectar\r\nGinger Ale to fill in\r\n', NULL, '2014-10-27 22:17:50', '2014-12-03 15:17:11'),
(6, 6, 1, 'zignum_silver', 'Zignum Cranberry', '2 oz. Zignum Silver\r\nIce\r\nCranberry juice\r\nLime soda \r\nMint\r\n', NULL, '2014-10-30 02:02:48', '2014-11-28 17:12:33'),
(7, 7, 1, 'zignum_silver', 'Zignum Coconut Mojito', '2oz. Zignum Silver\r\nIce\r\n4oz. coconut water\r\n8 mint leaves\r\nFresh and dried grated coconut\r\n1 oz. simple syrup\r\nJuice of one lemon\r\n2 oz. mineral water\r\n', NULL, '2014-10-30 02:04:23', '2014-11-28 17:13:36'),
(8, 8, 1, 'zignum_silver', 'Zignum Strawberry Mojito', '1.5 oz. Zignum Silver\r\nIce\r\n8 mint leaves\r\nJuice of one lemon\r\n3 strawberries\r\nSugar or simple syrup\r\n2 oz. mineral water to fill in.\r\n', NULL, '2014-10-30 02:07:46', '2014-11-28 17:16:19'),
(9, 9, 1, 'zignum_silver', 'Zignum Mango-Cranberry', '2 oz. Zignum Silver\r\nIce\r\n1 ½ oz. grenadine syrup\r\n6 fresh cranberries\r\n6 oz. mango and cranberry juice\r\n', NULL, '2014-10-30 02:08:11', '2014-11-28 17:18:29'),
(10, 10, 1, 'zignum_silver', 'Zignum Pear', '1.5 oz. Zignum Silver\r\nIce\r\n1 dash pear liquour\r\n4 slices natural pear\r\nTonic water to fill in\r\n', NULL, '2014-10-30 02:08:47', '2014-11-28 17:19:22'),
(11, 11, 1, 'zignum_silver', 'Zignum Cucumber', '2 oz. Zignum Silver\r\nIce\r\n2 oz. cranberry juice\r\nLime soda to fill in\r\n', NULL, '2014-10-30 02:09:12', '2014-11-28 17:21:58'),
(12, 12, 1, 'zignum_silver', 'Zignum Tamarind', '2 oz. Zignum Silver\r\nIce\r\n2 oz. Tamarind concentrate\r\n0.5 oz. Cointreau\r\nLemon juice\r\n', NULL, '2014-10-30 02:09:42', '2014-11-28 17:25:52'),
(13, 13, 1, 'zignum_silver', 'Cucumber Mezcalini', '2 oz. Zignum Silver\r\nIce\r\n3 oz. cucumber concentrate (blend cucumber, rosemary, sugar, lemon and water)\r\n1 oz. Controy\r\n', NULL, '2014-10-30 02:10:07', '2014-11-28 17:26:18'),
(16, 16, 1, 'zignum_silver', 'Mezcal Sunrise', '2 oz Zignum Silver\r\nIce\r\n1 seedless watermelon slice\r\nJuice of 1 lemon\r\n2 oz grenadine\r\nBlend all the ingredients', NULL, '2014-11-13 01:27:11', '2014-12-20 00:58:07'),
(17, 17, 1, 'zignum_silver', 'Zignum Love Tonic', '1 1/2 oz Zignum Reposado\r\nIce\r\n1 vertically sliced strawberry\r\n1/2 oz strawberry liquor\r\nTonic water', 1, '2014-11-26 19:20:10', '2014-12-20 00:58:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cocktails`
--

CREATE TABLE IF NOT EXISTS `cocktails` (
`id` int(11) NOT NULL,
  `product` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `cocktailimage` varchar(50) DEFAULT NULL,
  `cocktailicon` varchar(50) DEFAULT NULL,
  `instructions` text,
  `video_mp4` varchar(50) NOT NULL,
  `video_ogg` varchar(50) NOT NULL,
  `video_web` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cocktails`
--

INSERT INTO `cocktails` (`id`, `product`, `name`, `cocktailimage`, `cocktailicon`, `instructions`, `video_mp4`, `video_ogg`, `video_web`, `created_at`, `updated_at`) VALUES
(1, 'zignum_reposado', 'Zignum Manzana', '5SMmS8NZn65k.png', 'jZ3EvhK9ljNb.png', '2 oz Zignum Reposado\r\nHielos\r\nRefresco de manzana para rellenar', 'ZGdKVrYKKruc.mp4', 'NHiDTcaihAcI.ogv', 'xDj6KPQv8upV.webm', '2014-10-27 22:14:35', '2014-12-23 18:39:29'),
(2, 'zignum_reposado', 'Zignum Kiwi', 'aNUQQqLYLCtU.png', '5muBhaVtHQ1V.png', '2 oz Zignum Reposado\r\nHielos\r\n1 Kiwi\r\nJugo de medio limón\r\nAgua mineral para rellenar\r\nJarabe natural (endulzar al gusto)\r\nMacerar el kiwi, mezclar todos los ingredientes en vaso Highball y rellenar con agua mineral', '', '', '', '2014-10-27 22:15:31', '2014-12-03 15:16:49'),
(3, 'zignum_reposado', 'Mezcalini de café', 'HogFuLrojyGR.png', 'usUFlZzD0wnB.png', '1.5 oz Zignum Reposado\r\nHielos\r\n4 oz leche evaporada\r\n5 oz de licor de café', '', '', '', '2014-10-27 22:16:31', '2014-11-21 20:35:01'),
(4, 'zignum_reposado', 'Zignum Ginger & Orange', 'BWqzxGXrKrK6.png', 'mbP50Xytzvb4.png', '2 oz Zignum Reposado\r\nHielos\r\nSuprema de naranja\r\nGinger ale a rellenar', '', '', '', '2014-10-27 22:17:00', '2014-11-21 19:55:19'),
(5, 'zignum_reposado', 'El Mirrey', '0wx8PhYmI6GK.png', 'IjHC82cNRzA8.png', '1 1/2 oz Zignum Reposado\r\nHielos\r\n1/4 oz jugo de limón\r\n2 oz néctar de mango\r\nGinger Ale para rellenar\r\nRamita de romero', '', '', '', '2014-10-27 22:17:50', '2014-12-03 15:17:11'),
(6, 'zignum_silver', 'Zignum Cranberry', 'Cqic75lEVJnB.png', 'Fxa9u6PsJQCj.png', '2 oz Zignum Silver\r\nHielos\r\nJugo de arándano\r\nRefresco de limón \r\nHierbabuena', 'WS71vWTmRn8L.mp4', '404UhZ2a2KlM.ogv', 'CYxXEWgdAEz5.webm', '2014-10-30 02:02:48', '2014-12-23 18:41:02'),
(7, 'zignum_silver', 'Zignum Mojito de coco', 'Ln1fKuVkIcmJ.png', 'OPcuQtgyhmGC.png', '2 oz Zignum Silver\r\nHielos\r\n4 oz de agua de coco\r\n8 hojas de hierbabuena\r\nRayadura de coco fresco y seco\r\n1 oz jarabe natural\r\nJugo de un limón\r\n2 oz agua mineral\r\n', '', '', '', '2014-10-30 02:04:23', '2014-11-21 19:45:43'),
(8, 'zignum_silver', 'Zignum Mojito de Fresa', 'PrM9SbyJielV.png', 'AdfwWwiaPBCd.png', '1.5 oz Zignum Silver\r\nHielos\r\n8 hojas de hierbabuena\r\nJugo de un limón\r\n3 fresas\r\nAzúcar o jarabe natural\r\n2 oz agua mineral para rellenar', '', '', '', '2014-10-30 02:07:46', '2014-11-21 19:46:11'),
(9, 'zignum_silver', 'Esquimal Rojo', 'hysdCq217XyC.png', 'tJVnAoTZON9D.png', '2 oz Zignum Silver\r\nHielos\r\n0.5 oz jarabe de granadina\r\n6 arándanos frescos\r\n6 oz jugo de arándano con mango', '', '', '', '2014-10-30 02:08:11', '2014-11-25 19:23:12'),
(10, 'zignum_silver', 'Zignum Pera', 'GV9Re97KGszU.png', 'aTFCeIKK9o1Q.png', '1.5 oz Zignum Silver\r\nHielos\r\n1 dash de licor de pera\r\n4 supremas de pera natural\r\nGin tonic para rellenar', '', '', '', '2014-10-30 02:08:47', '2014-11-21 19:46:51'),
(11, 'zignum_silver', 'Zignum Neblina', 'Piy72vQ0OU1k.png', 'EEIdxZ0vuvfz.png', '2 oz Zignum Silver\r\nHielos\r\n2 oz jugo arándano\r\nRefresco de limón para rellenar\r\nUna rodaja de pepino ', '', '', '', '2014-10-30 02:09:12', '2014-11-25 19:25:26'),
(12, 'zignum_silver', 'Mezcalito de Tamarindo', 'CXgJWqZi0OSs.png', 'x3XylbO7FsH3.png', '2 oz Zignum Silver\r\nHielos\r\n2 oz concentrado de tamarindo\r\n0.5 oz Cointreau\r\nJugo de limón', '', '', '', '2014-10-30 02:09:42', '2014-11-21 19:51:15'),
(13, 'zignum_silver', 'Mezcalini de Pepino', 'gYR4xhpFeGrX.png', 'tLq6wAkplYvQ.png', '2 oz Zignum Silver\r\nHielos\r\n3 oz concentrado pepino (licuar pepino, romero, azúcar, limón y agua)\r\n1 oz Cointreau', '', '', '', '2014-10-30 02:10:07', '2014-11-21 19:51:59'),
(16, 'zignum_silver', 'Mezcal Sunrise', 'mqTtfjDFOQFu.png', 'aRuky7Q3inM4.png', '2 oz Zignum Silver\r\nHielos\r\n1 rebanada de Sandía \r\nJugo de 1 Limón \r\n2 oz Granadina \r\nLicuar todos los ingredientes', '', '', '', '2014-11-13 01:27:11', '2014-12-03 02:59:24'),
(17, 'zignum_reposado', 'Zignum Love Tonic', 'bf1VcDG0Ch6a.png', '2ywWnjwGLMQc.png', '1 1/2 oz Zignum reposado\r\nHielos\r\n1 fresa en rebanadas verticales\r\n1/2 oz. licor de fresa\r\nAgua quina', '', '', '', '2014-11-26 19:20:10', '2014-12-03 15:18:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `companion_texts`
--

CREATE TABLE IF NOT EXISTS `companion_texts` (
`id` int(11) NOT NULL,
  `companion_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `is_translated` tinyint(4) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `icon_en` tinytext
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `companion_texts`
--

INSERT INTO `companion_texts` (`id`, `companion_id`, `language_id`, `title`, `is_translated`, `created_at`, `updated_at`, `icon_en`) VALUES
(1, 1, 1, 'FRIENDS', 0, '2014-10-29 23:51:59', '2014-11-06 21:36:55', '7QKtbVKzKnEN.png'),
(2, 2, 1, '@FRIEND', 0, '2014-10-30 00:37:07', '2014-11-06 21:43:23', 'ZP2BiPqZcSF5.png'),
(3, 3, 1, 'WITH AN STRANGER', 0, '2014-10-30 00:38:24', '2014-12-01 19:49:40', 'PRUH6mAUAyQt.png'),
(4, 4, 1, 'THE WORK', 0, '2014-10-30 00:39:14', '2014-11-20 19:35:51', 'LtQAiaFEd0vc.png'),
(5, 5, 1, 'YOUR BOSS', 0, '2014-10-30 00:40:21', '2014-11-20 19:36:00', '79An8O1S9MX3.png'),
(6, 6, 1, 'YOUR EX', 0, '2014-10-30 00:41:45', '2014-11-20 19:36:10', 'aIAoOGNDzii6.png'),
(7, 7, 1, 'BEST FRIEND', 0, '2014-10-30 00:42:48', '2014-11-20 19:36:19', '3xejrVyM9P6X.png'),
(8, 8, 1, 'COUSINS', 0, '2014-10-30 00:43:53', '2014-11-20 19:36:29', '03Cc32im5fwK.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `companions`
--

CREATE TABLE IF NOT EXISTS `companions` (
`id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `companions`
--

INSERT INTO `companions` (`id`, `title`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'AMIGOS', '9tPz7dr3N95J.png', '2014-10-21 15:48:46', '2014-11-06 19:19:07'),
(2, 'NOVI@', '1iWtPq7iEI1Z.png', '2014-10-21 15:48:46', '2014-10-30 00:37:07'),
(3, 'CON UN DESCONOCIDO', 'OeF7plna1Fko.png', '2014-10-21 15:48:47', '2014-12-01 19:49:40'),
(4, 'LOS DEL TRABAJO', 'vNdduPPwUcNT.png', '2014-10-21 15:48:48', '2014-10-30 00:39:14'),
(5, 'TU JEFE', 'oejJ7dq74p5L.png', '2014-10-21 15:48:48', '2014-10-30 00:40:21'),
(6, 'TU EX', '96W1aLoMhcLQ.png', '2014-10-21 15:48:49', '2014-10-30 00:41:45'),
(7, 'MEJOR AMIGO', 'i7JpCjGD9kMZ.png', '2014-10-21 15:48:49', '2014-10-30 00:42:48'),
(8, 'PRIMOS', 'l3fR8Ke76PLs.png', '2014-10-21 15:48:50', '2014-10-30 00:43:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fruit_texts`
--

CREATE TABLE IF NOT EXISTS `fruit_texts` (
`id` int(11) NOT NULL,
  `fruit_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `is_translated` tinyint(4) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fruit_texts`
--

INSERT INTO `fruit_texts` (`id`, `fruit_id`, `language_id`, `title`, `is_translated`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'STRAWBERRY', 0, '2014-10-30 01:04:54', '2014-10-30 01:04:54'),
(2, 2, 1, 'APPLE', 0, '2014-10-30 01:09:59', '2014-10-30 01:09:59'),
(3, 3, 1, 'KIWI', 0, '2014-10-30 01:13:04', '2014-10-30 01:13:04'),
(4, 4, 1, 'CRANBERRIES', 0, '2014-10-30 01:14:38', '2014-10-30 01:14:38'),
(5, 5, 1, 'WATERMELON', 0, '2014-10-30 01:16:10', '2014-10-30 01:16:10'),
(6, 6, 1, 'ORANGE', 0, '2014-10-30 01:18:13', '2014-10-30 01:20:59'),
(7, 7, 1, 'CUCUMBER', 0, '2014-10-30 01:20:51', '2014-10-30 01:20:51'),
(8, 8, 1, 'TAMARIND', 0, '2014-10-30 01:22:12', '2014-10-30 01:22:12'),
(9, 9, 1, 'COFFEE', 0, '2014-10-30 01:23:29', '2014-10-30 01:23:29'),
(10, 10, 1, 'PEAR', 0, '2014-10-30 01:25:03', '2014-10-30 01:25:03'),
(11, 11, 1, 'WATERMELON', 0, '2014-10-30 01:26:19', '2014-10-30 01:26:19'),
(12, 12, 1, 'COCONUT', 0, '2014-10-30 01:27:05', '2014-10-30 01:27:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fruits`
--

CREATE TABLE IF NOT EXISTS `fruits` (
`id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fruits`
--

INSERT INTO `fruits` (`id`, `title`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'FRESA', 'z77aIRBU8DBL.png', '2014-10-21 15:44:48', '2014-10-30 01:04:54'),
(2, 'MANZANA', 'IZcJ5rwxNMuK.png', '2014-10-21 15:45:33', '2014-10-30 01:09:59'),
(3, 'KIWI', 'BNKBiFY92Z6I.png', '2014-10-21 15:46:15', '2014-10-30 01:13:04'),
(4, 'ARÁNDANOS', 'CwqtFdZTGo4c.png', '2014-10-21 15:46:19', '2014-10-30 01:14:38'),
(5, 'SANDÍA', 'VkpIQZhxajUD.png', '2014-10-21 15:46:21', '2014-10-30 01:16:10'),
(6, 'NARANJA', 'QXLqH2q9rSc9.png', '2014-10-21 15:46:23', '2014-10-30 01:20:59'),
(7, 'PEPINO', 'JT1QG5C7Mjpe.png', '2014-10-21 15:46:45', '2014-10-30 01:20:51'),
(8, 'TAMARINDO', 'lLkiaKGLM9i9.png', '2014-10-21 15:46:47', '2014-10-30 01:22:12'),
(9, 'CAFÉ', 'Fi6GQOaJlBZf.png', '2014-10-21 15:46:48', '2014-10-30 01:23:29'),
(10, 'PERA', 'vSOSpJRHdzdi.png', '2014-10-21 15:46:49', '2014-10-30 01:25:03'),
(11, 'SANDÍA', 'wrvy1PKrvZqB.png', '2014-10-21 15:46:50', '2014-10-30 01:26:19'),
(12, 'COCO', 'mEBYWGOubM4o.png', '2014-10-21 15:46:51', '2014-10-30 01:27:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `locale` varchar(50) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `sorting` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`, `locale`, `is_active`, `sorting`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', 'en_US', 1, 1, '2014-09-06 01:36:14', '2014-09-06 01:36:14'),
(2, 'Español', 'es', 'es_ES', 1, 2, '2014-09-06 01:36:14', '2014-09-06 01:36:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(50) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_09_06_013610_confide_setup_users_table', 1),
('2014_09_06_013610_entrust_setup_tables', 1),
('2014_09_06_013611_create_thor_languages_table', 1),
('2014_09_06_013612_create_thor_images_table', 1),
('2014_09_06_013613_create_thor_pages_table', 1),
('2014_09_06_013614_add_remember_token_to_users_tabl', 1),
('2014_09_06_013615_create_thor_modules_table', 1),
('2014_09_12_000032_create_thor_cocktails_table', 2),
('2014_09_18_215918_create_thor_cocktails_table', 8),
('2014_09_30_005415_create_thor_cocktails_table', 12),
('2014_09_30_010635_create_thor_cocktails_table', 13),
('2014_09_30_013353_create_thor_places_table', 14),
('2014_10_03_001648_create_thor_places_table', 15),
('2014_10_03_001847_create_thor_fruits_table', 16),
('2014_10_03_002011_create_thor_companions_table', 17),
('2014_10_03_002243_create_thor_cocktails_table', 18),
('2014_10_03_220617_create_thor_cocktails_table', 19),
('2014_10_03_221324_create_thor_cocktails_table', 20),
('2014_10_03_221610_create_thor_cocktails_table', 21),
('2014_10_06_213309_create_thor_albums_table', 22),
('2014_10_06_220115_create_thor_pictures_table', 23),
('2014_10_07_013727_create_thor_pictures_table', 24),
('2014_10_10_001113_create_thor_vines_table', 25),
('2014_10_16_224834_create_thor_albums_table', 26),
('2014_09_06_013614_add_remember_token_to_users_tabl', 27),
('2014_09_06_013614_add_remember_token_to_users_tabl', 28),
('2014_12_22_180303_create_thor_socialpictures_table', 28);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
`id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `display_name` varchar(50) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `description` text,
  `is_pageable` tinyint(4) DEFAULT NULL,
  `model_class` varchar(50) DEFAULT NULL,
  `controller_class` varchar(50) DEFAULT NULL,
  `metadata` text,
  `is_active` tinyint(4) DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modules`
--

INSERT INTO `modules` (`id`, `name`, `display_name`, `icon`, `description`, `is_pageable`, `model_class`, `controller_class`, `metadata`, `is_active`, `sorting`, `created_at`, `updated_at`) VALUES
(1, 'page', 'Pages', 'fa-bookmark', 'Pages module', 1, '\\Thor\\Models\\Page', '\\Thor\\Backend\\PagesController', '', 1, -99, '2014-09-06 01:36:26', '2014-09-06 01:36:26'),
(12, 'place', 'Place', 'fa-globe', 'Here you can add, edit, delete, information about the places as the name and also upload a picture of this.', 0, '\\Thor\\Models\\Place', '\\Thor\\Backend\\PlacesController', 'a:2:{s:5:input;a:14:{s:6:_token;s:40:YVYEXG3yWVfa4Do8jkyL70nO4nhp1GLKCqDpZoNo;s:4:name;s:5:place;s:12:display_name;s:5:Place;s:4:icon;s:8:fa-globe;s:11:description;s:107:Here you can add, edit, delete, information about the places as the name and also upload a picture of this.;s:9:is_active;s:1:1;s:7:sorting;s:1:2;s:10:behaviours;a:2:{i:0;s:12:translatable;i:1;s:9:imageable;}s:14:general_fields;s:34:title:string:text,icon:string:file;s:19:translatable_fields;s:17:title:string:text;s:15:listable_fields;s:9:Name,Icon;s:11:is_pageable;b:0;s:16:controller_class;s:30:\\Thor\\Backend\\PlacesController;s:11:model_class;s:18:\\Thor\\Models\\Place;}s:8:resolver;a:27:{s:8:singular;s:5:place;s:6:plural;s:6:places;s:13:generalFields;a:2:{s:5:title;O:19:Thor\\Support\\Object:1:{s:8:', 1, 2, '2014-10-03 00:16:48', '2014-10-03 00:16:48'),
(13, 'fruit', 'Fruit', 'fa-lemon-o', 'Here you can add, edit, delete, information about the fruits as the name and also upload a picture of this. This is shown in the game.', 0, '\\Thor\\Models\\Fruit', '\\Thor\\Backend\\FruitsController', 'a:2:{s:5:input;a:14:{s:6:_token;s:40:YVYEXG3yWVfa4Do8jkyL70nO4nhp1GLKCqDpZoNo;s:4:name;s:5:fruit;s:12:display_name;s:5:Fruit;s:4:icon;s:10:fa-lemon-o;s:11:description;s:134:Here you can add, edit, delete, information about the fruits as the name and also upload a picture of this. This is shown in the game.;s:9:is_active;s:1:1;s:7:sorting;s:1:3;s:10:behaviours;a:2:{i:0;s:12:translatable;i:1;s:9:imageable;}s:14:general_fields;s:34:title:string:text,icon:string:file;s:19:translatable_fields;s:17:title:string:text;s:15:listable_fields;s:9:Name,Icon;s:11:is_pageable;b:0;s:16:controller_class;s:30:\\Thor\\Backend\\FruitsController;s:11:model_class;s:18:\\Thor\\Models\\Fruit;}s:8:resolver;a:27:{s:8:singular;s:5:fruit;s:6:plural;s:6:fruits;s:13:generalFields;a:2:{s:5:title;O:19:Thor\\Support\\Object:1:{s:8:', 1, 3, '2014-10-03 00:18:47', '2014-10-03 00:18:47'),
(14, 'companion', 'Companion', 'fa-group', 'Here you can add, edit, delete, information about the companion as the name and also upload a picture of this. This is shown in the game.', 0, '\\Thor\\Models\\Companion', '\\Thor\\Backend\\CompanionsController', 'a:2:{s:5:input;a:14:{s:6:_token;s:40:YVYEXG3yWVfa4Do8jkyL70nO4nhp1GLKCqDpZoNo;s:4:name;s:9:companion;s:12:display_name;s:9:Companion;s:4:icon;s:8:fa-group;s:11:description;s:137:Here you can add, edit, delete, information about the companion as the name and also upload a picture of this. This is shown in the game.;s:9:is_active;s:1:1;s:7:sorting;s:1:4;s:10:behaviours;a:2:{i:0;s:12:translatable;i:1;s:9:imageable;}s:14:general_fields;s:34:title:string:text,icon:string:file;s:19:translatable_fields;s:17:title:string:text;s:15:listable_fields;s:9:Name,Icon;s:11:is_pageable;b:0;s:16:controller_class;s:34:\\Thor\\Backend\\CompanionsController;s:11:model_class;s:22:\\Thor\\Models\\Companion;}s:8:resolver;a:27:{s:8:singular;s:9:companion;s:6:plural;s:10:companions;s:13:generalFields;a:2:{s:5:title;O:19:Thor\\Support\\Object:1:{s:8:', 1, 4, '2014-10-03 00:20:11', '2014-10-03 00:20:11'),
(17, 'cocktail', 'Cockatil', 'fa-glass', 'Here you can add, edit, delete, information about the cocktails as the name and instructions for preparation, also upload a picture of this.', 0, '\\Thor\\Models\\Cocktail', '\\Thor\\Backend\\CocktailsController', 'a:2:{s:5:input;a:14:{s:6:_token;s:40:oAgBUJVNEOBcG1n652iiWK4y1F52TUNfk3m1kh42;s:4:name;s:8:cocktail;s:12:display_name;s:8:Cockatil;s:4:icon;s:8:fa-glass;s:11:description;s:140:Here you can add, edit, delete, information about the cocktails as the name and instructions for preparation, also upload a picture of this.;s:9:is_active;s:1:1;s:7:sorting;s:1:5;s:10:behaviours;a:2:{i:0;s:12:translatable;i:1;s:9:imageable;}s:14:general_fields;s:122:product:string:select,name:string:text,cocktailimage:string:file,cocktailicon:string:file,instructions:mediumText:textarea;s:19:translatable_fields;s:71:product:string:select,name:string:text,instructions:mediumText:textarea;s:15:listable_fields;s:54:Product,Name,Cocktail_Image,Cocktail_Icon,Instructions;s:11:is_pageable;b:0;s:16:controller_class;s:33:\\Thor\\Backend\\CocktailsController;s:11:model_class;s:21:\\Thor\\Models\\Cocktail;}s:8:resolver;a:27:{s:8:singular;s:8:cocktail;s:6:plural;s:9:cocktails;s:13:generalFields;a:5:{s:7:product;O:19:Thor\\Support\\Object:1:{s:8:', 1, 5, '2014-10-03 22:16:10', '2014-10-03 22:16:10'),
(20, 'picture', 'Picture', 'fa-picture-o', 'Here you can add, edit, delete and show the pictures from an album and his name..', 0, '\\Thor\\Models\\Picture', '\\Thor\\Backend\\PicturesController', 'a:2:{s:5:input;a:14:{s:6:_token;s:40:nNAgTm5GK7UsCPTAzuNZpjMjlvFbxEvuAZ6tM5JW;s:4:name;s:7:picture;s:12:display_name;s:7:Picture;s:4:icon;s:12:fa-picture-o;s:11:description;s:81:Here you can add, edit, delete and show the pictures from an album and his name..;s:9:is_active;s:1:1;s:7:sorting;s:1:7;s:10:behaviours;a:1:{i:0;s:9:imageable;}s:14:general_fields;s:62:album_id:int:text:albums,title:string:text,picture:string:file;s:19:translatable_fields;s:42:album_id:int:text:albums,title:string:text;s:15:listable_fields;s:13:Title,Picture;s:11:is_pageable;b:0;s:16:controller_class;s:32:\\Thor\\Backend\\PicturesController;s:11:model_class;s:20:\\Thor\\Models\\Picture;}s:8:resolver;a:27:{s:8:singular;s:7:picture;s:6:plural;s:8:pictures;s:13:generalFields;a:3:{s:8:album_id;O:19:Thor\\Support\\Object:1:{s:8:', 1, 7, '2014-10-07 01:37:28', '2014-10-07 01:37:28'),
(21, 'vine', 'Vine', ' fa-vine', 'Here you can add the link to a Vine video.', 0, '\\Thor\\Models\\Vine', '\\Thor\\Backend\\VinesController', 'a:2:{s:5:input;a:13:{s:6:_token;s:40:e2xqF1nfwSQ0tlrcdGp6NpzS8O7lO4hsG81qTpsJ;s:4:name;s:4:vine;s:12:display_name;s:4:Vine;s:4:icon;s:8: fa-vine;s:11:description;s:42:Here you can add the link to a Vine video.;s:9:is_active;s:1:1;s:7:sorting;s:1:8;s:14:general_fields;s:16:vine:string:text;s:19:translatable_fields;s:0:;s:15:listable_fields;s:4:Vine;s:11:is_pageable;b:0;s:16:controller_class;s:29:\\Thor\\Backend\\VinesController;s:11:model_class;s:17:\\Thor\\Models\\Vine;}s:8:resolver;a:27:{s:8:singular;s:4:vine;s:6:plural;s:5:vines;s:13:generalFields;a:1:{s:4:vine;O:19:Thor\\Support\\Object:1:{s:8:', 1, 8, '2014-10-10 00:11:14', '2014-10-10 00:11:14'),
(22, 'album', 'Event', 'fa-camera-retro', 'Here you can add, edit, delete an album name and its description.', 0, '\\Thor\\Models\\Album', '\\Thor\\Backend\\AlbumsController', 'a:2:{s:5:input;a:14:{s:6:_token;s:40:M1unA7L87kdk3q60IgaQteMoKJiBzIBTnEODKRYk;s:4:name;s:5:album;s:12:display_name;s:5:Album;s:4:icon;s:15:fa-camera-retro;s:11:description;s:65:Here you can add, edit, delete an album name and its description.;s:9:is_active;s:1:1;s:7:sorting;s:1:7;s:10:behaviours;a:1:{i:0;s:12:translatable;}s:14:general_fields;s:48:album_name:string:text,description:text:textarea;s:19:translatable_fields;s:48:album_name:string:text,description:text:textarea;s:15:listable_fields;s:22:Album_Name,Description;s:11:is_pageable;b:0;s:16:controller_class;s:30:\\Thor\\Backend\\AlbumsController;s:11:model_class;s:18:\\Thor\\Models\\Album;}s:8:resolver;a:27:{s:8:singular;s:5:album;s:6:plural;s:6:albums;s:13:generalFields;a:2:{s:10:album_name;O:19:Thor\\Support\\Object:1:{s:8:', 1, 7, '2014-10-16 22:48:35', '2014-10-16 22:48:35'),
(23, 'socialpictures', 'Social Pictures', 'fa-picture-o', 'Here you can add pictures to the section the newest', 0, '\\Thor\\Models\\Socialpicture', '\\Thor\\Backend\\SocialpicturesController', 'a:2:{s:5:"input";a:14:{s:6:"_token";s:40:"F35YISjtqFgYdn1tE7ytxjTt56Sw6F3o2skepO7x";s:4:"name";s:14:"socialpictures";s:12:"display_name";s:15:"Social Pictures";s:4:"icon";s:12:"fa-picture-o";s:11:"description";s:51:"Here you can add pictures to the section the newest";s:9:"is_active";s:1:"1";s:7:"sorting";s:1:"8";s:10:"behaviours";a:1:{i:0;s:9:"imageable";}s:14:"general_fields";s:33:"image:String:file,url:String:file";s:19:"translatable_fields";s:0:"";s:15:"listable_fields";s:9:"image,url";s:11:"is_pageable";b:0;s:16:"controller_class";s:38:"\\Thor\\Backend\\SocialpicturesController";s:11:"model_class";s:26:"\\Thor\\Models\\Socialpicture";}s:8:"resolver";a:27:{s:8:"singular";s:13:"socialpicture";s:6:"plural";s:14:"socialpictures";s:13:"generalFields";a:2:{s:5:"image";O:19:"Thor\\Support\\Object":1:{s:8:"\0*\0props";a:6:{s:4:"name";s:5:"image";s:5:"label";s:5:"Image";s:18:"blueprint_function";s:6:"string";s:17:"form_control_type";s:4:"file";s:13:"foreign_table";b:0;s:17:"foreign_list_with";b:0;}}s:3:"url";O:19:"Thor\\Support\\Object":1:{s:8:"\0*\0props";a:6:{s:4:"name";s:3:"url";s:5:"label";s:3:"Url";s:18:"blueprint_function";s:6:"string";s:17:"form_control_type";s:4:"file";s:13:"foreign_table";b:0;s:17:"foreign_list_with";b:0;}}}s:18:"translatableFields";a:0:{}s:14:"listableFields";a:2:{s:5:"image";r:22;s:3:"url";r:30;}s:10:"behaviours";a:1:{i:0;s:9:"imageable";}s:10:"viewParent";s:20:"thor::backend.layout";s:11:"viewSection";s:4:"main";s:12:"viewBasepath";s:32:"/packages/thor/platform/backend/";s:16:"controllerPrefix";s:14:"\\Thor\\Backend\\";s:16:"controllerSuffix";s:10:"Controller";s:11:"modelPrefix";s:13:"\\Thor\\Models\\";s:11:"modelSuffix";s:0:"";s:13:"modelFullName";s:26:"\\Thor\\Models\\Socialpicture";s:14:"modelShortName";s:13:"Socialpicture";s:14:"modelNamespace";s:11:"Thor\\Models";s:9:"modelPath";s:35:"/var/www/zignum/app/src/Thor/Models";s:9:"modelFile";s:49:"/var/www/zignum/app/src/Thor/Models/Socialpicture";s:15:"modelImplements";s:32:"implements Behaviours\\IImageable";s:9:"modelUses";s:26:"use Behaviours\\TImageable;";s:18:"controllerFullName";s:38:"\\Thor\\Backend\\SocialpicturesController";s:19:"controllerShortName";s:24:"SocialpicturesController";s:19:"controllerNamespace";s:12:"Thor\\Backend";s:14:"controllerPath";s:36:"/var/www/zignum/app/src/Thor/Backend";s:14:"controllerFile";s:61:"/var/www/zignum/app/src/Thor/Backend/SocialpicturesController";s:13:"migrationFile";s:90:"/var/www/zignum/app/database/migrations/2014_12_22_180303_create_thor_socialpictures_table";s:14:"isTranslatable";b:0;}}', 1, 8, '2014-12-22 18:03:04', '2014-12-22 18:03:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `page_texts`
--

CREATE TABLE IF NOT EXISTS `page_texts` (
`id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `content` text,
  `slug` text,
  `window_title` varchar(50) DEFAULT NULL,
  `meta_description` varchar(50) DEFAULT NULL,
  `meta_keywords` varchar(50) DEFAULT NULL,
  `canonical_url` varchar(50) DEFAULT NULL,
  `redirect_url` varchar(50) DEFAULT NULL,
  `redirect_code` varchar(50) DEFAULT NULL,
  `is_translated` tinyint(4) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
`id` int(11) NOT NULL,
  `taxonomy` varchar(50) DEFAULT 'page',
  `controller` varchar(50) DEFAULT NULL,
  `action` varchar(50) DEFAULT NULL,
  `view` varchar(50) DEFAULT NULL,
  `is_https` tinyint(4) DEFAULT '0',
  `is_indexable` tinyint(4) DEFAULT '1',
  `is_deletable` tinyint(4) DEFAULT '1',
  `sorting` int(11) DEFAULT '0',
  `status` varchar(50) DEFAULT 'draft',
  `parent_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reminders`
--

CREATE TABLE IF NOT EXISTS `password_reminders` (
  `email` varchar(50) NOT NULL,
  `token` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `password_reminders`
--

INSERT INTO `password_reminders` (`email`, `token`, `created_at`) VALUES
('eduardomiranda@ciencias.unam.mx', '84cc468f90c81a742871454d495295e0', '2014-09-06 01:47:34'),
('delirable@gmail.com', '63a6ebd19116abbabf1e34a8115f9625', '2014-09-06 01:51:32'),
('delirable@gmail.com', 'a08a1ff9eb8eeb31f450b37addbd9239', '2014-09-06 02:22:10'),
('yovasx2@hotmail.com', '6df13efcf5b00d85a1a458c0eccbab67', '2014-09-08 20:41:52'),
('yovasx2@hotmail.com', '1462ae5db07f998875c3570891aa592e', '2014-09-08 20:44:35'),
('yovasx2@hotmail.com', '66ed0579a706c646508a7f6c44d1d93c', '2014-09-08 21:05:45'),
('yovasx2@hotmail.com', '5f68210afb5aeda4cae73dda551aa540', '2014-09-08 21:06:15'),
('yovasx2@hotmail.com', 'cb552f31750a660a44f21eaea31e2579', '2014-09-08 21:06:37'),
('yovasx2@hotmail.com', 'c688eaa69b9b244dfcd893aafc676cc5', '2014-09-08 21:10:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
`id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=199 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`) VALUES
(1, 1, 1),
(17, 1, 2),
(18, 2, 2),
(19, 3, 2),
(20, 4, 2),
(21, 5, 2),
(22, 6, 2),
(23, 7, 2),
(24, 8, 2),
(25, 9, 2),
(26, 10, 2),
(27, 11, 2),
(28, 12, 2),
(29, 13, 2),
(30, 14, 2),
(31, 15, 2),
(32, 16, 2),
(33, 17, 2),
(34, 18, 2),
(35, 19, 2),
(36, 20, 2),
(37, 21, 2),
(38, 22, 2),
(39, 23, 2),
(40, 24, 2),
(41, 25, 2),
(42, 26, 2),
(43, 27, 2),
(44, 28, 2),
(45, 29, 2),
(46, 30, 2),
(47, 31, 2),
(98, 82, 2),
(99, 83, 2),
(100, 84, 2),
(101, 85, 2),
(102, 86, 2),
(103, 87, 2),
(104, 88, 2),
(105, 89, 2),
(106, 90, 2),
(107, 91, 2),
(108, 92, 2),
(109, 93, 2),
(110, 94, 2),
(111, 95, 2),
(112, 96, 2),
(123, 107, 2),
(124, 108, 2),
(125, 109, 2),
(126, 110, 2),
(127, 111, 2),
(138, 122, 2),
(139, 123, 2),
(140, 124, 2),
(141, 125, 2),
(142, 126, 2),
(143, 127, 2),
(144, 128, 2),
(145, 129, 2),
(146, 130, 2),
(147, 131, 2),
(148, 132, 2),
(149, 133, 2),
(150, 134, 2),
(151, 135, 2),
(152, 136, 2),
(153, 85, 1),
(154, 86, 1),
(155, 87, 1),
(156, 88, 1),
(157, 89, 1),
(158, 90, 1),
(159, 91, 1),
(160, 92, 1),
(161, 93, 1),
(162, 94, 1),
(163, 95, 1),
(164, 96, 1),
(165, 107, 1),
(166, 108, 1),
(167, 109, 1),
(168, 110, 1),
(169, 111, 1),
(170, 127, 1),
(171, 128, 1),
(172, 129, 1),
(173, 130, 1),
(174, 131, 1),
(175, 132, 1),
(176, 133, 1),
(177, 134, 1),
(178, 135, 1),
(179, 136, 1),
(181, 123, 1),
(182, 125, 1),
(183, 126, 1),
(184, 124, 1),
(185, 122, 1),
(186, 82, 1),
(187, 83, 1),
(188, 84, 1),
(189, 24, 1),
(190, 25, 1),
(191, 139, 2),
(192, 140, 2),
(193, 141, 2),
(194, 137, 1),
(195, 138, 1),
(196, 139, 1),
(197, 140, 1),
(198, 141, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `display_name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'access_backend', 'Access Backend', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(2, 'list_languages', 'List Languages', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(3, 'create_languages', 'Create Languages', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(4, 'read_languages', 'Read Languages', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(5, 'update_languages', 'Update Languages', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(6, 'delete_languages', 'Delete Languages', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(7, 'list_pages', 'List Pages', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(8, 'create_pages', 'Create Pages', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(9, 'read_pages', 'Read Pages', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(10, 'update_pages', 'Update Pages', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(11, 'delete_pages', 'Delete Pages', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(12, 'list_roles', 'List Roles', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(13, 'create_roles', 'Create Roles', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(14, 'read_roles', 'Read Roles', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(15, 'update_roles', 'Update Roles', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(16, 'delete_roles', 'Delete Roles', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(17, 'list_permissions', 'List Permissions', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(18, 'create_permissions', 'Create Permissions', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(19, 'read_permissions', 'Read Permissions', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(20, 'update_permissions', 'Update Permissions', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(21, 'delete_permissions', 'Delete Permissions', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(22, 'list_users', 'List Users', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(23, 'create_users', 'Create Users', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(24, 'read_users', 'Read Users', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(25, 'update_users', 'Update Users', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(26, 'delete_users', 'Delete Users', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(27, 'list_modules', 'List Modules', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(28, 'create_modules', 'Create Modules', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(29, 'read_modules', 'Read Modules', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(30, 'update_modules', 'Update Modules', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(31, 'delete_modules', 'Delete Modules', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(82, 'list_places', 'List Places', '2014-10-03 00:16:48', '2014-10-03 00:16:48'),
(83, 'create_places', 'Create Places', '2014-10-03 00:16:48', '2014-10-03 00:16:48'),
(84, 'read_places', 'Read Places', '2014-10-03 00:16:48', '2014-10-03 00:16:48'),
(85, 'update_places', 'Update Places', '2014-10-03 00:16:48', '2014-10-03 00:16:48'),
(86, 'delete_places', 'Delete Places', '2014-10-03 00:16:48', '2014-10-03 00:16:48'),
(87, 'list_fruits', 'List Fruits', '2014-10-03 00:18:47', '2014-10-03 00:18:47'),
(88, 'create_fruits', 'Create Fruits', '2014-10-03 00:18:47', '2014-10-03 00:18:47'),
(89, 'read_fruits', 'Read Fruits', '2014-10-03 00:18:47', '2014-10-03 00:18:47'),
(90, 'update_fruits', 'Update Fruits', '2014-10-03 00:18:47', '2014-10-03 00:18:47'),
(91, 'delete_fruits', 'Delete Fruits', '2014-10-03 00:18:47', '2014-10-03 00:18:47'),
(92, 'list_companions', 'List Companions', '2014-10-03 00:20:11', '2014-10-03 00:20:11'),
(93, 'create_companions', 'Create Companions', '2014-10-03 00:20:11', '2014-10-03 00:20:11'),
(94, 'read_companions', 'Read Companions', '2014-10-03 00:20:11', '2014-10-03 00:20:11'),
(95, 'update_companions', 'Update Companions', '2014-10-03 00:20:11', '2014-10-03 00:20:11'),
(96, 'delete_companions', 'Delete Companions', '2014-10-03 00:20:11', '2014-10-03 00:20:11'),
(107, 'list_cocktails', 'List Cocktails', '2014-10-03 22:16:10', '2014-10-03 22:16:10'),
(108, 'create_cocktails', 'Create Cocktails', '2014-10-03 22:16:10', '2014-10-03 22:16:10'),
(109, 'read_cocktails', 'Read Cocktails', '2014-10-03 22:16:10', '2014-10-03 22:16:10'),
(110, 'update_cocktails', 'Update Cocktails', '2014-10-03 22:16:10', '2014-10-03 22:16:10'),
(111, 'delete_cocktails', 'Delete Cocktails', '2014-10-03 22:16:10', '2014-10-03 22:16:10'),
(122, 'list_pictures', 'List Pictures', '2014-10-07 01:37:27', '2014-10-07 01:37:27'),
(123, 'create_pictures', 'Create Pictures', '2014-10-07 01:37:27', '2014-10-07 01:37:27'),
(124, 'read_pictures', 'Read Pictures', '2014-10-07 01:37:27', '2014-10-07 01:37:27'),
(125, 'update_pictures', 'Update Pictures', '2014-10-07 01:37:27', '2014-10-07 01:37:27'),
(126, 'delete_pictures', 'Delete Pictures', '2014-10-07 01:37:27', '2014-10-07 01:37:27'),
(127, 'list_vines', 'List Vines', '2014-10-10 00:11:14', '2014-10-10 00:11:14'),
(128, 'create_vines', 'Create Vines', '2014-10-10 00:11:14', '2014-10-10 00:11:14'),
(129, 'read_vines', 'Read Vines', '2014-10-10 00:11:14', '2014-10-10 00:11:14'),
(130, 'update_vines', 'Update Vines', '2014-10-10 00:11:14', '2014-10-10 00:11:14'),
(131, 'delete_vines', 'Delete Vines', '2014-10-10 00:11:14', '2014-10-10 00:11:14'),
(132, 'list_albums', 'List Albums', '2014-10-16 22:48:35', '2014-10-16 22:48:35'),
(133, 'create_albums', 'Create Albums', '2014-10-16 22:48:35', '2014-10-16 22:48:35'),
(134, 'read_albums', 'Read Albums', '2014-10-16 22:48:35', '2014-10-16 22:48:35'),
(135, 'update_albums', 'Update Albums', '2014-10-16 22:48:35', '2014-10-16 22:48:35'),
(136, 'delete_albums', 'Delete Albums', '2014-10-16 22:48:35', '2014-10-16 22:48:35'),
(137, 'list_socialpictures', 'List Socialpictures', '2014-12-22 18:03:04', '2014-12-22 18:03:04'),
(138, 'create_socialpictures', 'Create Socialpictures', '2014-12-22 18:03:04', '2014-12-22 18:03:04'),
(139, 'read_socialpictures', 'Read Socialpictures', '2014-12-22 18:03:04', '2014-12-22 18:03:04'),
(140, 'update_socialpictures', 'Update Socialpictures', '2014-12-22 18:03:04', '2014-12-22 18:03:04'),
(141, 'delete_socialpictures', 'Delete Socialpictures', '2014-12-22 18:03:04', '2014-12-22 18:03:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `picture_texts`
--

CREATE TABLE IF NOT EXISTS `picture_texts` (
`id` int(11) NOT NULL,
  `picture_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `album_id` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `is_translated` tinyint(4) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
`id` int(11) NOT NULL,
  `album_id` int(11) DEFAULT NULL,
  `alt` varchar(255) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `picture` varchar(50) DEFAULT NULL,
  `alt_en` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pictures`
--

INSERT INTO `pictures` (`id`, `album_id`, `alt`, `title`, `picture`, `alt_en`, `title_en`, `created_at`, `updated_at`) VALUES
(5, 1, '', NULL, 'album_1_qesM5Ct35fwu.jpg', '', '', '2014-11-12 00:09:18', '2014-11-12 00:09:18'),
(7, 1, '', NULL, 'album_1_wEAQIaCC0BkL.jpg', '', '', '2014-11-13 18:24:52', '2014-11-13 18:24:52'),
(8, 1, '', NULL, 'album_1_2SXTBv83z41q.jpg', '', '', '2014-11-13 18:25:08', '2014-11-13 18:25:08'),
(9, 1, '', NULL, 'album_1_UVZDagekIUGU.jpg', '', '', '2014-11-13 18:25:26', '2014-11-13 18:25:26'),
(10, 1, '', NULL, 'album_1_Xl6JsKUbnLlP.jpg', '', '', '2014-11-13 18:25:45', '2014-11-13 18:25:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `place_texts`
--

CREATE TABLE IF NOT EXISTS `place_texts` (
`id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `is_translated` tinyint(4) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `place_texts`
--

INSERT INTO `place_texts` (`id`, `place_id`, `language_id`, `title`, `is_translated`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'AT GRANDMA''S HOUSE', 0, '2014-10-29 23:55:09', '2014-11-28 23:36:21'),
(2, 2, 1, 'AT THE FOREST', 0, '2014-10-29 23:59:19', '2014-11-28 23:36:29'),
(3, 3, 1, 'AT THE PARTYBUS', 0, '2014-10-30 00:01:07', '2014-11-28 23:36:37'),
(4, 4, 1, 'AT THE DISCO', 0, '2014-10-30 00:05:03', '2014-11-28 23:36:48'),
(5, 5, 1, 'AT THE GARDEN', 0, '2014-10-30 00:08:40', '2014-11-28 23:36:57'),
(6, 6, 1, 'AT A BOHEMIAN BAR', 0, '2014-10-30 00:11:10', '2014-11-28 23:37:45'),
(7, 7, 1, 'AT A KARAOKE BAR', 0, '2014-10-30 00:13:04', '2014-11-28 23:38:01'),
(8, 8, 1, 'AT A POOL PARTY', 0, '2014-10-30 00:14:57', '2014-11-28 23:40:32'),
(9, 9, 1, 'AT A BBQ', 0, '2014-10-30 00:16:37', '2014-11-28 23:40:51'),
(10, 10, 1, 'AT KITCHEN', 0, '2014-10-30 00:17:56', '2014-11-28 23:41:00'),
(11, 11, 1, 'AT THE BEDROOM', 0, '2014-10-30 00:19:39', '2014-11-28 23:41:30'),
(12, 12, 1, 'AT A MAGICAL TOWN', 0, '2014-10-30 00:21:23', '2014-11-28 23:41:41'),
(13, 13, 1, 'AT THE CAMP', 0, '2014-10-30 00:22:55', '2014-11-28 23:42:09'),
(14, 14, 1, 'AT PARIS', 0, '2014-10-30 00:24:33', '2014-11-28 23:42:27'),
(15, 15, 1, 'AT THE BEACH', 0, '2014-10-30 00:25:59', '2014-11-28 23:42:18'),
(16, 16, 1, 'AT THE ROOF', 0, '2014-10-30 00:27:13', '2014-11-28 23:41:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `places`
--

CREATE TABLE IF NOT EXISTS `places` (
`id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `places`
--

INSERT INTO `places` (`id`, `title`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'EN LA CASA DE LA ABUELA', '7oHGuWWXkUPg.png', '2014-10-21 15:47:54', '2014-11-28 23:36:21'),
(2, 'EN EL BOSQUE', 'sMXcLhQ7HFaI.png', '2014-10-21 15:47:55', '2014-11-28 23:36:29'),
(3, 'EN EL PARTYBUS', 'iqZ5UYsZ3OoQ.png', '2014-10-21 15:47:55', '2014-11-28 23:36:37'),
(4, 'EN EL ANTRO', 'Bjr1T271j94S.png', '2014-10-21 15:47:56', '2014-11-28 23:36:48'),
(5, 'EN EL JARDÍN', 'E7j9T96YhQue.png', '2014-10-21 15:47:57', '2014-11-28 23:36:57'),
(6, 'EN UN BAR BOHEMIO', 'YGAVbaK8ELVr.png', '2014-10-21 15:47:57', '2014-11-28 23:37:45'),
(7, 'EN UN CANTABAR', '8d4CjS6fIIcJ.png', '2014-10-21 15:47:58', '2014-11-28 23:38:01'),
(8, 'EN UNA POOL PARTY', 'gy4VeI9siUQ5.png', '2014-10-21 15:47:59', '2014-11-28 23:40:32'),
(9, 'EN UNA CARNE ASADA', 'aDeN4Cs1qnHn.png', '2014-10-21 15:47:59', '2014-11-28 23:40:51'),
(10, 'EN LA COCINA', 'pb94rsz6eIy9.png', '2014-10-21 15:48:00', '2014-11-28 23:41:00'),
(11, 'EN LA RECÁMARA', 'X2xnoAvDBW8K.png', '2014-10-21 15:48:00', '2014-11-28 23:41:30'),
(12, 'EN UN PUEBLO MÁGICO', 'x3Xo0K69BsfI.png', '2014-10-21 15:48:01', '2014-11-28 23:41:41'),
(13, 'EN UN CAMPAMENTO', '4FLHrKaDsjtg.png', '2014-10-21 15:48:02', '2014-11-28 23:42:09'),
(14, 'EN PARÍS', 'MtbZ3brp4gmH.png', '2014-10-21 15:48:02', '2014-10-30 00:24:33'),
(15, 'EN LA PLAYA', 'hp8GyYc9vCaM.png', '2014-10-21 15:48:03', '2014-11-28 23:42:18'),
(16, 'EN LA AZOTEA', '6GqIE8Ye29jM.png', '2014-10-21 15:48:03', '2014-11-28 23:41:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'administrator', '2014-09-06 01:36:15', '2014-09-06 01:36:15'),
(2, 'developer', '2014-09-06 01:36:15', '2014-09-06 01:36:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socialpictures`
--

CREATE TABLE IF NOT EXISTS `socialpictures` (
`id` int(10) unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `socialpictures`
--

INSERT INTO `socialpictures` (`id`, `image`, `url`, `created_at`, `updated_at`) VALUES
(1, 'KUlIPRjCI9AI.jpg', 'https://www.facebook.com/ZignumMezcal/photos/a.192139954154278.45046.191661287535478/869750136393253/?type=1&permPage=1', '2014-12-23 02:09:46', '2014-12-23 02:09:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmation_code` varchar(50) NOT NULL,
  `confirmed` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `remember_token` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `confirmation_code`, `confirmed`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'developer', 'delirable@gmail.com', '$2y$10$dpkwYk0e4AI5xZ0N1Vy/dukOZ7pIz6sFIcB7r8DgYttruE/Z9HnU2', 'a84df569acfc4c90342da8b9974cf182', 1, '2014-09-06 01:36:15', '2014-11-20 19:34:07', '2lyItQURsSpVjGgKcLRyQFnlLGUOpB9O94dQLkgghQx0Bz4osT'),
(2, 'admin', 'zignum.mez@gmail.com', '$2y$10$21HxB5cSsNktcwQ09FNi2O0H0PfbNogYN002.tS2ZoXlZQ1R1dw1y', 'be058757640566cd9dcd2ac7f217612f', 1, '2014-09-06 01:36:15', '2014-12-23 18:21:40', 'WyEKkLH8ckV5ZDp552mV93ZC9jtKxjlsyKujYkdW41w6whV5FF'),
(11, 'ellemiranda', 'eduardo.miranda@grupojaque.com', '$2y$10$JV4ERf35Kcw3eGWKI8noA.kpU17IEv903CXr8kteQ8s1DsZEPKzHe', 'b8a50f8fa437f7d30a8147181f74baf7', 1, '2014-09-08 22:07:00', '2014-10-17 00:22:11', 'aFZu7TjTy5b4Jt3f5lI8QQ4GNMv0xIBQl97hoPYoAoY71Ymorq');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vines`
--

CREATE TABLE IF NOT EXISTS `vines` (
`id` int(11) NOT NULL,
  `vine` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `icon` tinytext
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vines`
--

INSERT INTO `vines` (`id`, `vine`, `created_at`, `updated_at`, `icon`) VALUES
(1, 'https://vine.co/u/1147306442412412928', '2014-10-10 00:11:55', '2014-11-24 17:37:30', 'I7tOz6UVvYxZ.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `album_texts`
--
ALTER TABLE `album_texts`
 ADD PRIMARY KEY (`id`), ADD KEY `album_id` (`album_id`), ADD KEY `language_id` (`language_id`);

--
-- Indices de la tabla `albums`
--
ALTER TABLE `albums`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `assigned_roles`
--
ALTER TABLE `assigned_roles`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`), ADD KEY `role_id` (`role_id`);

--
-- Indices de la tabla `cocktail_texts`
--
ALTER TABLE `cocktail_texts`
 ADD PRIMARY KEY (`id`), ADD KEY `cocktail_id` (`cocktail_id`), ADD KEY `language_id` (`language_id`);

--
-- Indices de la tabla `cocktails`
--
ALTER TABLE `cocktails`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `companion_texts`
--
ALTER TABLE `companion_texts`
 ADD PRIMARY KEY (`id`), ADD KEY `companion_id` (`companion_id`), ADD KEY `language_id` (`language_id`);

--
-- Indices de la tabla `companions`
--
ALTER TABLE `companions`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fruit_texts`
--
ALTER TABLE `fruit_texts`
 ADD PRIMARY KEY (`id`), ADD KEY `fruit_id` (`fruit_id`), ADD KEY `language_id` (`language_id`);

--
-- Indices de la tabla `fruits`
--
ALTER TABLE `fruits`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `languages`
--
ALTER TABLE `languages`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `languages_code_unique` (`code`), ADD UNIQUE KEY `languages_locale_unique` (`locale`);

--
-- Indices de la tabla `modules`
--
ALTER TABLE `modules`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `page_texts`
--
ALTER TABLE `page_texts`
 ADD PRIMARY KEY (`id`), ADD KEY `page_id` (`page_id`), ADD KEY `language_id` (`language_id`);

--
-- Indices de la tabla `pages`
--
ALTER TABLE `pages`
 ADD PRIMARY KEY (`id`), ADD KEY `parent_id` (`parent_id`);

--
-- Indices de la tabla `permission_role`
--
ALTER TABLE `permission_role`
 ADD PRIMARY KEY (`id`), ADD KEY `permission_id` (`permission_id`), ADD KEY `role_id` (`role_id`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indices de la tabla `picture_texts`
--
ALTER TABLE `picture_texts`
 ADD PRIMARY KEY (`id`), ADD KEY `picture_id` (`picture_id`), ADD KEY `language_id` (`language_id`), ADD KEY `album_id` (`album_id`);

--
-- Indices de la tabla `pictures`
--
ALTER TABLE `pictures`
 ADD PRIMARY KEY (`id`), ADD KEY `album_id` (`album_id`);

--
-- Indices de la tabla `place_texts`
--
ALTER TABLE `place_texts`
 ADD PRIMARY KEY (`id`), ADD KEY `place_id` (`place_id`), ADD KEY `language_id` (`language_id`);

--
-- Indices de la tabla `places`
--
ALTER TABLE `places`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indices de la tabla `socialpictures`
--
ALTER TABLE `socialpictures`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vines`
--
ALTER TABLE `vines`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `album_texts`
--
ALTER TABLE `album_texts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `albums`
--
ALTER TABLE `albums`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `assigned_roles`
--
ALTER TABLE `assigned_roles`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `cocktail_texts`
--
ALTER TABLE `cocktail_texts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `cocktails`
--
ALTER TABLE `cocktails`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `companion_texts`
--
ALTER TABLE `companion_texts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `companions`
--
ALTER TABLE `companions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `fruit_texts`
--
ALTER TABLE `fruit_texts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `fruits`
--
ALTER TABLE `fruits`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `languages`
--
ALTER TABLE `languages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `modules`
--
ALTER TABLE `modules`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `page_texts`
--
ALTER TABLE `page_texts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pages`
--
ALTER TABLE `pages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `permission_role`
--
ALTER TABLE `permission_role`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=199;
--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=142;
--
-- AUTO_INCREMENT de la tabla `picture_texts`
--
ALTER TABLE `picture_texts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pictures`
--
ALTER TABLE `pictures`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `place_texts`
--
ALTER TABLE `place_texts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `places`
--
ALTER TABLE `places`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `socialpictures`
--
ALTER TABLE `socialpictures`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `vines`
--
ALTER TABLE `vines`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `album_texts`
--
ALTER TABLE `album_texts`
ADD CONSTRAINT `album_texts_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `album_texts_ibfk_2` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `assigned_roles`
--
ALTER TABLE `assigned_roles`
ADD CONSTRAINT `assigned_roles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `assigned_roles_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Filtros para la tabla `cocktail_texts`
--
ALTER TABLE `cocktail_texts`
ADD CONSTRAINT `cocktail_texts_ibfk_1` FOREIGN KEY (`cocktail_id`) REFERENCES `cocktails` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `cocktail_texts_ibfk_2` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `companion_texts`
--
ALTER TABLE `companion_texts`
ADD CONSTRAINT `companion_texts_ibfk_1` FOREIGN KEY (`companion_id`) REFERENCES `companions` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `companion_texts_ibfk_2` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `fruit_texts`
--
ALTER TABLE `fruit_texts`
ADD CONSTRAINT `fruit_texts_ibfk_1` FOREIGN KEY (`fruit_id`) REFERENCES `fruits` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `fruit_texts_ibfk_2` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `page_texts`
--
ALTER TABLE `page_texts`
ADD CONSTRAINT `page_texts_ibfk_1` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `page_texts_ibfk_2` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `pages`
--
ALTER TABLE `pages`
ADD CONSTRAINT `pages_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `pages` (`id`);

--
-- Filtros para la tabla `permission_role`
--
ALTER TABLE `permission_role`
ADD CONSTRAINT `permission_role_ibfk_1` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
ADD CONSTRAINT `permission_role_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Filtros para la tabla `picture_texts`
--
ALTER TABLE `picture_texts`
ADD CONSTRAINT `picture_texts_ibfk_1` FOREIGN KEY (`picture_id`) REFERENCES `pictures` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `picture_texts_ibfk_2` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `picture_texts_ibfk_3` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`);

--
-- Filtros para la tabla `pictures`
--
ALTER TABLE `pictures`
ADD CONSTRAINT `pictures_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`);

--
-- Filtros para la tabla `place_texts`
--
ALTER TABLE `place_texts`
ADD CONSTRAINT `place_texts_ibfk_1` FOREIGN KEY (`place_id`) REFERENCES `places` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `place_texts_ibfk_2` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
