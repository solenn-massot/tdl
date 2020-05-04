-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 04 mai 2020 à 07:59
-- Version du serveur :  5.7.26
-- Version de PHP : 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `todolist`
--
CREATE DATABASE IF NOT EXISTS `todolist` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `todolist`;

-- --------------------------------------------------------

--
-- Structure de la table `autorisation`
--

DROP TABLE IF EXISTS `autorisation`;
CREATE TABLE IF NOT EXISTS `autorisation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tache` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `taches`
--

DROP TABLE IF EXISTS `taches`;
CREATE TABLE IF NOT EXISTS `taches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date_crea` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `etat` varchar(255) DEFAULT 'progress',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `taches`
--

INSERT INTO `taches` (`id`, `id_user`, `titre`, `description`, `date_crea`, `date_fin`, `deadline`, `etat`) VALUES
(1, 4, 'PrÃ©sentation', 'test', '2020-04-27', '2020-04-27', NULL, 'done'),
(2, 4, 'Bonjour', 'test', '2020-04-27', '2020-04-27', NULL, 'done'),
(3, 4, '', 'test', '2020-04-27', NULL, NULL, 'progress'),
(4, 4, '', 'test', '2020-05-04', NULL, NULL, 'progress'),
(5, 4, '', 'test', '2020-05-04', NULL, NULL, 'progress'),
(6, 4, '', 'test2', '2020-05-04', NULL, NULL, 'progress'),
(7, 4, '', 'bonjour', '2020-05-04', NULL, NULL, 'progress'),
(8, 2, 'coucou', 'salut', '2020-05-04', NULL, NULL, 'progress'),
(9, 2, 'coucou', 'salut', '2020-05-04', NULL, NULL, 'progress');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'Aziréphale', ''),
(2, 'Lowted', ''),
(3, 'solenn', '$2y$12$SWdZm4rdA64F5103m8TlE.lZyH3eNbBClI04eji8mRhwmm5oAmtJi'),
(4, 'admin', '$2y$12$C2s7B.WsTRYgmB/RSpJ2be43dr1davSZYCznIAemMcekHBJG37fJG');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
