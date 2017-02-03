-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 24 Janvier 2017 à 09:03
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tp3_si6`
--
CREATE DATABASE IF NOT EXISTS `tp3_si6` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tp3_si6`;

-- --------------------------------------------------------

--
-- Structure de la table `sujet`
--

CREATE TABLE `sujet` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_creation` date NOT NULL,
  `nb_signalement` int(11) NOT NULL DEFAULT '0',
  `nb_interet` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sujet`
--

INSERT INTO `sujet` (`id`, `titre`, `description`, `date_creation`, `nb_signalement`, `nb_interet`) VALUES
(1, 'SLAM2', 'Vous pouvez ici échanger et vous aider sur la programmation orientée objet', '2017-01-20', 0, 0),
(2, 'Co-voiturage', 'Vous trouverez ici des annonces de co-voiturage au départ et à l\'arrivée du lycée', '2017-01-20', 0, 0),
(3, 'Test depuis un formulaire', 'Tout est ok !', '2017-01-20', 0, 0),
(4, 'Test de la redirection', 'Test ok', '2017-01-20', 0, 0),
(5, 'dsfsdf', 'ds', '2017-01-21', 0, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `sujet`
--
ALTER TABLE `sujet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `sujet`
--
ALTER TABLE `sujet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
