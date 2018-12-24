-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 24 déc. 2018 à 14:07
-- Version du serveur :  5.7.19
-- Version de PHP :  7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `technoweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

DROP TABLE IF EXISTS `offre`;
CREATE TABLE IF NOT EXISTS `offre` (
  `numeroOffre` int(11) NOT NULL AUTO_INCREMENT,
  `numeroRecruteur` int(11) NOT NULL,
  `intituleOffre` varchar(50) NOT NULL,
  `domaineOffre` varchar(300) NOT NULL,
  `descriptionOffre` varchar(300) NOT NULL,
  `missionOffre` varchar(300) NOT NULL,
  `profilRechercheOffre` varchar(300) NOT NULL,
  `typeContratOffre` varchar(50) NOT NULL,
  `typeOccupationOffre` varchar(300) NOT NULL,
  `dureeSemaineOffre` varchar(50) NOT NULL,
  `lieuOffre` varchar(200) NOT NULL,
  `fourchetteSalarialeOffre` varchar(100) NOT NULL,
  `contrainteOffre` varchar(200) NOT NULL,
  `dateDebutOffre` date NOT NULL,
  `dateFinOffre` date NOT NULL,
  PRIMARY KEY (`numeroOffre`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `offre`
--

INSERT INTO `offre` (`numeroOffre`, `numeroRecruteur`, `intituleOffre`, `domaineOffre`, `descriptionOffre`, `missionOffre`, `profilRechercheOffre`, `typeContratOffre`, `typeOccupationOffre`, `dureeSemaineOffre`, `lieuOffre`, `fourchetteSalarialeOffre`, `contrainteOffre`, `dateDebutOffre`, `dateFinOffre`) VALUES
(1, 1, 'dz', 'dzd', 'zd', 'zd', 'dz', 'dz', 'dz', '2.5', 'fe', 'z', 'fe', '2018-12-26', '2018-12-04');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `numeroPersonne` int(11) NOT NULL AUTO_INCREMENT,
  `nomPersonne` varchar(50) NOT NULL,
  `prenomPersonne` varchar(50) NOT NULL,
  `mailPersonne` varchar(50) NOT NULL,
  `identifiantPersonne` varchar(50) NOT NULL,
  `motDePassePersonne` varchar(50) NOT NULL,
  `demandeurPersonne` tinyint(1) NOT NULL,
  PRIMARY KEY (`numeroPersonne`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`numeroPersonne`, `nomPersonne`, `prenomPersonne`, `mailPersonne`, `identifiantPersonne`, `motDePassePersonne`, `demandeurPersonne`) VALUES
(1, 'Arsac', 'Jonathan', 'jonathanarsac@orange.fr', 'root', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 0),
(9, 'fecczc', 'zd', 'zd@d', 'd', '3984471d905b03bf358ec8ba91b8c3ea', 1),
(5, 'Droal', 'Youenn', 'youenn.droal@orange.fr', 'root2', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 1),
(8, 'a\"r', 'ef', 'zef@f', 'fe', 'd13c0ab50e961f160741b28010266fcd', 1),
(10, 'ef', 'zddz', 'd@d', 'd', '3984471d905b03bf358ec8ba91b8c3ea', 1),
(11, 'grv', 'e', 'e@e', 'ee', '700d81fcc5edfc8c95457270e0636b8a', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
