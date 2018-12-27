-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 27 déc. 2018 à 13:50
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `offre`
--

INSERT INTO `offre` (`numeroOffre`, `numeroRecruteur`, `intituleOffre`, `domaineOffre`, `descriptionOffre`, `missionOffre`, `profilRechercheOffre`, `typeContratOffre`, `typeOccupationOffre`, `dureeSemaineOffre`, `lieuOffre`, `fourchetteSalarialeOffre`, `contrainteOffre`, `dateDebutOffre`, `dateFinOffre`) VALUES
(1, 1, 'Equipier(ère)/ Employé(e) de restauration', 'dzd', 'Quand je suis arrivée la première fois chez McDonald’s, on m’avait prévenue que, dans la restauration, je devrai m’accrocher....', 'zd', 'dz', 'dz', 'dz', '2.5', 'France', '', 'fe', '2018-12-26', '2018-12-04'),
(2, 15, 'Chauffeur Scolaire H/F Personnes Handicapées', 'njilbh', 'Il vous suffit d\'être titulaire du permis B depuis plus de 4 ans, et d\'être disponible le matin et le soir aux heures de ramassage scolaire....', 'vhukvgu', 'kvgukv', 'gukvguk', 'vgukv', 'gukv', 'Limoges (87)', '500 € - 600 € par mois', 'vgkv', '2018-12-12', '2018-12-27'),
(3, 15, 'Caissier ELS - Etudiant (h/f) ', 'ukv', 'Maintenir un magasin propre et agréable pour les clients. Une activité professionnelle valorisante compatible avec vos horaires de cours....', 'kv', 'gukv', 'gukv', 'uv', 'ukvgk', 'Aixe-sur-Vienne (87)', '', 'kv', '2018-12-12', '2018-12-28'),
(4, 1, 'Enquêteur Terrain CDI H/F', '', 'LA SOCIÉTÉ : Véritable Start Up, A+ENERGIES a été ouverte en 2010 par deux jeunes entrepreneurs.', '', '', 'Temps partiel', '', '', 'Limoges (87)', '850 €- 2500€ par mois', '', '2018-12-12', '2018-12-12');

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
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`numeroPersonne`, `nomPersonne`, `prenomPersonne`, `mailPersonne`, `identifiantPersonne`, `motDePassePersonne`, `demandeurPersonne`) VALUES
(1, 'Arsac', 'Jonathan', 'jonathanarsac@orange.fr', 'root', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 0),
(5, 'Droal', 'Youenn', 'youenn.droal@orange.fr', 'root2', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 1),
(16, 'Pedro', 'Manuel', 'pedromanuel@orange.fr', 'root', '81be5269ea4c1ce4237c5ed1c3868bf2', 1),
(15, 'Podrich', 'Xavier', 'podrichxavier@orange.fr', 'root', '81be5269ea4c1ce4237c5ed1c3868bf2', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
