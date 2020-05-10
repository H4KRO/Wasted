-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 10 mai 2020 à 12:11
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `wasted`
--

DELIMITER $$
--
-- Procédures
--
DROP PROCEDURE IF EXISTS `exist`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `exist` (IN `name` TEXT, IN `party_id` VARCHAR(30))  BEGIN
	DECLARE tamp TEXT;
    DECLARE res INT DEFAULT 0;
	SELECT username INTO tamp 
    FROM player 
    WHERE username = name
    AND game_id = party_id;
    
    if name = tamp THEN
    	SET res = 1;
    END IF;
    SELECT res;
END$$

DROP PROCEDURE IF EXISTS `nomen`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `nomen` (IN `id` VARCHAR(30))  BEGIN
    SELECT COUNT(*) FROM player WHERE game_id = id AND sex="homme";
END$$

DROP PROCEDURE IF EXISTS `nowomen`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `nowomen` (IN `id` VARCHAR(30))  BEGIN
    SELECT COUNT(*) FROM player WHERE game_id = id AND sex="femme";
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `challenge`
--

DROP TABLE IF EXISTS `challenge`;
CREATE TABLE IF NOT EXISTS `challenge` (
  `id` varchar(30) NOT NULL,
  `name` text NOT NULL,
  `id_party` varchar(30) NOT NULL,
  `id_player` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `challenge`
--

INSERT INTO `challenge` (`id`, `name`, `id_party`, `id_player`) VALUES
('5e7e6e4025d74', '@femme sein', '5e7e6df12a3ad', 0),
('5e7e6e4bf13d1', '@homme mec embrasse @femme', '5e7e6df12a3ad', 0),
('5e7e6e5134ab7', '@bertrand saute', '5e7e6df12a3ad', 0),
('5e7e6e58301c7', '@homme penis', '5e7e6df12a3ad', 0),
('5e7e6e7e18f07', '@homme embrasse @femme', '5e7e6e6c10328', 0),
('5e7e6e857654f', '@femme embrasse @homme', '5e7e6e6c10328', 0),
('5e7e6e8d1a18a', '@femme doit avec cheveux long', '5e7e6e6c10328', 0),
('5e7e6e9079811', '@homme penis', '5e7e6e6c10328', 0),
('5e7e6e96eae16', '@gégé saute', '5e7e6e6c10328', 0),
('5e7e6f1d7ee75', '@homme h -> f @femme', '5e7e6e6c10328', 0),
('5e7e6f29a8320', '@femme f-> @homme', '5e7e6e6c10328', 0),
('5e7e6f67dea79', 'f-> @femme h-> @homme  ', '5e7e6e6c10328', 0),
('5e7e70845e9b5', 'azeazeze', '5e7e6e6c10328', 0),
('5e7e70db538b0', 'azeazeze', '5e7e6e6c10328', 0),
('5e7e70dbc83e3', 'azeazeze', '5e7e6e6c10328', 0),
('5e7e70dc0932f', 'azeazeze', '5e7e6e6c10328', 0),
('5e7e70e110cc7', 'pipi', '5e7e6e6c10328', 0),
('5e7e70eda7369', 'pipi', '5e7e6e6c10328', 0),
('5e7e70f6e25ab', 'pipi', '5e7e6e6c10328', 0),
('5e7e70f77ded7', 'pipi', '5e7e6e6c10328', 0),
('5e7e70f818fc0', 'pipi', '5e7e6e6c10328', 0),
('5e7e70f8dff64', 'pipi', '5e7e6e6c10328', 0),
('5e7e70f98dffa', 'pipi', '5e7e6e6c10328', 0),
('5e7e70f9db8bb', 'pipi', '5e7e6e6c10328', 0),
('5e7e70fa4d707', 'pipi', '5e7e6e6c10328', 0),
('5e7e70fac05da', 'pipi', '5e7e6e6c10328', 0),
('5e7e70fb598a8', 'pipi', '5e7e6e6c10328', 0),
('5e7f190b49112', 'pipi', '5e7f18dfb81dd', 0),
('5e81c04caf3f5', 'pipi', '5e81c03ed30ff', 0),
('5e81c04de9de9', '', '5e81c03ed30ff', 0),
('5e81c04f58ab4', 'caca', '5e81c03ed30ff', 0),
('5e81c098e7e3b', 'pipi', '5e81c03ed30ff', 0),
('5e81c09c3b43c', 'caca', '5e81c03ed30ff', 0),
('5e81c09e96f17', 'zaeaea', '5e81c03ed30ff', 0),
('5e81c0a038cda', '@homme doit viril', '5e81c03ed30ff', 0),
('5e85f3a1de707', 'faire 10 pompes', '5e85f35024ee4', 0),
('5e85f3b0770e8', '@julien', '5e85f35024ee4', 0),
('5e85f3cb69dbd', '@homme est un homme', '5e85f35024ee4', 0),
('5e85f3d4e1aea', '@femme saute sur place', '5e85f35024ee4', 0),
('5e85f3dc81045', '@nina tes belle (lol)', '5e85f35024ee4', 0),
('5e85f4df030a9', '@julien dessine ju tabl bisou', '5e85f35024ee4', 0),
('5e85f714b6582', 'ggnfhjykthk', '5e85f35024ee4', 0),
('5e85f74dae384', '@homme est un proute', '5e85f35024ee4', 0),
('5e85f7c585553', 'prout', '5e85f35024ee4', 0),
('5e85f7e9c6788', '@femme embrasse @femme', '5e85f7da81c71', 0);

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

--
-- Déchargement des données de la table `party`
--

INSERT INTO `party` (`id`, `started`, `admin`) VALUES
('5e7e6df12a3ad', 0, '5e7e6df12a3b2'),
('5e7e6e6c10328', 1, '5e7e6e6c1032d'),
('5e7f18cc81d56', 0, '5e7f18cc81d5c'),
('5e7f18dfb81dd', 0, '5e7f18dfb81e2'),
('5e81bc6e4a366', 0, '5e81bc6e4a36b'),
('5e81bcb0d7b84', 0, '5e81bcb0d7b89'),
('5e81bff86a88c', 0, '5e81bff86a892'),
('5e81c03ed30ff', 1, '5e81c03ed3104'),
('5e85f2f510c43', 0, '5e85f2f510c48'),
('5e85f30ff3bb6', 0, '5e85f30ff3bbb'),
('5e85f337e8a7a', 0, '5e85f337e8a80'),
('5e85f35024ee4', 1, '5e85f35024eea'),
('5e85f7da81c71', 1, '5e85f7da81c76');

-- --------------------------------------------------------

--
-- Structure de la table `player`
--

DROP TABLE IF EXISTS `player`;
CREATE TABLE IF NOT EXISTS `player` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` varchar(30) NOT NULL,
  `username` text NOT NULL,
  `sex` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=238 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `player`
--

INSERT INTO `player` (`id`, `game_id`, `username`, `sex`) VALUES
(192, '5e7e6df12a3ad', 'ede', 'NULL'),
(193, '5e7e6e6c10328', 'Man', 'homme'),
(194, '5e7e6e6c10328', 'Girl', 'femme'),
(195, '5e7e6e6c10328', 'azaz', 'femme'),
(196, '5e7e6e6c10328', 'azaz', ''),
(197, '5e7e6e6c10328', '', ''),
(198, '5e7e6e6c10328', '', ''),
(199, '5e7f18dfb81dd', 'Julien', 'homme'),
(200, '5e7f18dfb81dd', 'Justine', ''),
(201, '5e7f18dfb81dd', 'Justine', ''),
(202, '5e7f18dfb81dd', 'Justine', ''),
(203, '5e7f18dfb81dd', '', ''),
(204, '5e78b6fc11f14', 'je suis', 'femme'),
(205, '5e78b6fc11f14', 'je suis', 'femme'),
(206, '5e78b6fc11f14', 'je suis', 'femme'),
(207, '5e78b6fc11f14', 'je suis', 'femme'),
(208, '5e78b6fc11f14', 'je suis', 'femme'),
(209, '5e78b6fc11f14', 'Dimash', 'homme'),
(210, '5e78b6fc11f14', 'Dimash', 'homme'),
(211, '5e78b6fc11f14', 'Dimash', 'homme'),
(212, '5e78b6fc11f14', 'Dimash', 'homme'),
(213, '5e78b6fc11f14', 'Dimash', 'homme'),
(214, '5e78b6fc11f14', 'Dimash', 'homme'),
(215, '5e78b6fc11f14', 'Dimash', 'homme'),
(216, '5e78b6fc11f14', 'Dimash', 'homme'),
(217, '5e78b6fc11f14', 'Dimash', 'homme'),
(218, '5e81bc6e4a366', 'isa', 'femme'),
(219, '5e81bc6e4a366', 'isa', 'femme'),
(220, '5e81bcb0d7b84', 'johann', 'homme'),
(221, '5e81bcb0d7b84', 'jean baptiste', 'homme'),
(222, '5e81bcb0d7b84', 'r', ''),
(223, '5e81bcb0d7b84', 'ze', ''),
(224, '5e81bcb0d7b84', 'johann', 'homme'),
(225, '5e81bcb0d7b84', 'johann', 'homme'),
(226, '5e81bcb0d7b84', 'johann', 'homme'),
(227, '5e81bff86a88c', 'jéjé', 'femme'),
(228, '5e81c03ed30ff', 'dieu', 'NULL'),
(229, '5e81c03ed30ff', 'papa', 'homme'),
(230, '5e81c03ed30ff', 'azeae', ''),
(231, '5e78b6fc11f14', 'zaezaeaezae', 'NULL'),
(232, '5e85f2f510c43', 'julien', 'homme'),
(233, '5e85f30ff3bb6', 'juju', 'homme'),
(234, '5e85f337e8a7a', 'jules', 'homme'),
(235, '5e85f35024ee4', 'julien', 'homme'),
(236, '5e85f35024ee4', 'nina', 'femme'),
(237, '5e85f7da81c71', 'zjkgbzja', 'femme');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
