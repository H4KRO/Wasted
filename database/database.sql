-- Need to be named "wasted" and encoded with utf8_general_ci

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- HÃ´te : 127.0.0.1:3306
-- GÃ©nÃ©rÃ© le :  sam. 21 mars 2020 Ã  20:48
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de donnÃ©es :  `wasted`
--

-- --------------------------------------------------------

--
-- Structure de la table `logger`
--

DROP TABLE IF EXISTS `logger`;
CREATE TABLE IF NOT EXISTS `logger` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` datetime NOT NULL,
  `log` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=208 DEFAULT CHARSET=utf8;

--
-- DÃ©chargement des donnÃ©es de la table `logger`
--

INSERT INTO `logger` (`id`, `time`, `log`) VALUES
(181, '2020-03-20 18:58:27', 'Variable 3'),
(180, '2020-03-20 18:58:27', 'Variable 2'),
(179, '2020-03-20 18:58:27', 'Variable 1'),
(178, '2020-03-20 18:58:27', 'Variable 0'),
(177, '2020-03-20 18:58:26', 'Variable 9'),
(176, '2020-03-20 18:58:26', 'Variable 8'),
(175, '2020-03-20 18:58:26', 'Variable 7'),
(174, '2020-03-20 18:58:26', 'Variable 6'),
(173, '2020-03-20 18:58:26', 'Variable 5'),
(172, '2020-03-20 18:58:26', 'Variable 4'),
(171, '2020-03-20 18:58:26', 'Variable 3'),
(170, '2020-03-20 18:58:26', 'Variable 2'),
(169, '2020-03-20 18:58:26', 'Variable 1'),
(168, '2020-03-20 18:58:26', 'Variable 0'),
(167, '2020-03-20 18:58:24', 'Variable 9'),
(166, '2020-03-20 18:58:24', 'Variable 8'),
(165, '2020-03-20 18:58:24', 'Variable 7'),
(164, '2020-03-20 18:58:24', 'Variable 6'),
(163, '2020-03-20 18:58:24', 'Variable 5'),
(162, '2020-03-20 18:58:24', 'Variable 4'),
(161, '2020-03-20 18:58:24', 'Variable 3'),
(160, '2020-03-20 18:58:24', 'Variable 2'),
(159, '2020-03-20 18:58:24', 'Variable 1'),
(158, '2020-03-20 18:58:24', 'Variable 0'),
(157, '2020-03-20 17:54:13', 'Variable 9'),
(156, '2020-03-20 17:54:13', 'Variable 8'),
(155, '2020-03-20 17:54:13', 'Variable 7'),
(154, '2020-03-20 17:54:13', 'Variable 6'),
(153, '2020-03-20 17:54:13', 'Variable 5'),
(152, '2020-03-20 17:54:13', 'Variable 4'),
(151, '2020-03-20 17:54:13', 'Variable 3'),
(150, '2020-03-20 17:54:13', 'Variable 2'),
(149, '2020-03-20 17:54:13', 'Variable 1'),
(148, '2020-03-20 17:54:13', 'Variable 0'),
(147, '2020-03-20 17:53:52', 'Variable 9'),
(146, '2020-03-20 17:53:52', 'Variable 8'),
(145, '2020-03-20 17:53:52', 'Variable 7'),
(144, '2020-03-20 17:53:52', 'Variable 6'),
(143, '2020-03-20 17:53:52', 'Variable 5'),
(142, '2020-03-20 17:53:52', 'Variable 4'),
(141, '2020-03-20 17:53:52', 'Variable 3'),
(140, '2020-03-20 17:53:52', 'Variable 2'),
(139, '2020-03-20 17:53:52', 'Variable 1'),
(138, '2020-03-20 17:53:52', 'Variable 0'),
(137, '2020-03-20 17:53:34', '9'),
(136, '2020-03-20 17:53:34', '8'),
(135, '2020-03-20 17:53:34', '7'),
(134, '2020-03-20 17:53:34', '6'),
(133, '2020-03-20 17:53:34', '5'),
(132, '2020-03-20 17:53:34', '4'),
(131, '2020-03-20 17:53:34', '3'),
(130, '2020-03-20 17:53:34', '2'),
(129, '2020-03-20 17:53:34', '1'),
(128, '2020-03-20 17:53:34', '0'),
(127, '2020-03-20 17:53:28', 'i'),
(126, '2020-03-20 17:53:28', 'i'),
(125, '2020-03-20 17:53:28', 'i'),
(124, '2020-03-20 17:53:28', 'i'),
(123, '2020-03-20 17:53:28', 'i'),
(122, '2020-03-20 17:53:28', 'i'),
(121, '2020-03-20 17:53:28', 'i'),
(120, '2020-03-20 17:53:28', 'i'),
(119, '2020-03-20 17:53:28', 'i'),
(118, '2020-03-20 17:53:28', 'i'),
(117, '2020-03-20 17:51:51', 'Salut'),
(116, '2020-02-03 09:59:13', 'Salut LÃ©o !'),
(115, '2020-02-03 09:55:35', 'Salut LÃ©o !'),
(114, '2020-02-03 09:55:21', 'Salut LÃ©o !'),
(182, '2020-03-20 18:58:27', 'Variable 4'),
(183, '2020-03-20 18:58:27', 'Variable 5'),
(184, '2020-03-20 18:58:27', 'Variable 6'),
(185, '2020-03-20 18:58:27', 'Variable 7'),
(186, '2020-03-20 18:58:27', 'Variable 8'),
(187, '2020-03-20 18:58:27', 'Variable 9'),
(188, '2020-03-20 18:58:30', 'Variable 0'),
(189, '2020-03-20 18:58:30', 'Variable 1'),
(190, '2020-03-20 18:58:30', 'Variable 2'),
(191, '2020-03-20 18:58:30', 'Variable 3'),
(192, '2020-03-20 18:58:30', 'Variable 4'),
(193, '2020-03-20 18:58:30', 'Variable 5'),
(194, '2020-03-20 18:58:30', 'Variable 6'),
(195, '2020-03-20 18:58:30', 'Variable 7'),
(196, '2020-03-20 18:58:30', 'Variable 8'),
(197, '2020-03-20 18:58:30', 'Variable 9'),
(198, '2020-03-20 21:41:19', 'Variable 0'),
(199, '2020-03-20 21:41:19', 'Variable 1'),
(200, '2020-03-20 21:41:19', 'Variable 2'),
(201, '2020-03-20 21:41:19', 'Variable 3'),
(202, '2020-03-20 21:41:19', 'Variable 4'),
(203, '2020-03-20 21:41:19', 'Variable 5'),
(204, '2020-03-20 21:41:19', 'Variable 6'),
(205, '2020-03-20 21:41:19', 'Variable 7'),
(206, '2020-03-20 21:41:19', 'Variable 8'),
(207, '2020-03-20 21:41:19', 'Variable 9');

-- --------------------------------------------------------

--
-- Structure de la table `party`
--

DROP TABLE IF EXISTS `party`;
CREATE TABLE IF NOT EXISTS `party` (
  `id` varchar(30) NOT NULL,
  `started` tinyint(1) NOT NULL,
  `admin` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `player`
--

DROP TABLE IF EXISTS `player`;
CREATE TABLE IF NOT EXISTS `player` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` varchar(30) NOT NULL,
  `username` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
