-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 23 mars 2019 à 17:40
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tdssii`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idclient` int(11) NOT NULL AUTO_INCREMENT,
  `entreprise` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  PRIMARY KEY (`idclient`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idclient`, `entreprise`, `nom`, `prenom`, `email`, `mdp`) VALUES
(1, 'orange', 'orange@gmail.com', '789', 'bored', '12345'),
(2, 'cisco', 'cisco@gmail.com', '456', 'horei', '78965');

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

DROP TABLE IF EXISTS `demande`;
CREATE TABLE IF NOT EXISTS `demande` (
  `idprojet` int(11) NOT NULL,
  `idclient` int(11) NOT NULL,
  `date_demande` date NOT NULL,
  `budget` int(11) NOT NULL,
  PRIMARY KEY (`idprojet`,`idclient`),
  KEY `idclient` (`idclient`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`idprojet`, `idclient`, `date_demande`, `budget`) VALUES
(1, 1, '2019-01-01', 100000),
(2, 2, '2019-03-02', 50000);

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

DROP TABLE IF EXISTS `equipe`;
CREATE TABLE IF NOT EXISTS `equipe` (
  `idequipe` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(50) NOT NULL,
  `date_creation` date NOT NULL,
  PRIMARY KEY (`idequipe`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`idequipe`, `designation`, `date_creation`) VALUES
(1, 'Developement', '2018-08-12'),
(2, 'Reseau', '2019-02-08');

-- --------------------------------------------------------

--
-- Structure de la table `ingenieur`
--

DROP TABLE IF EXISTS `ingenieur`;
CREATE TABLE IF NOT EXISTS `ingenieur` (
  `idinge` int(5) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `diplome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `date_nais` date NOT NULL,
  `idequipe` int(5) NOT NULL,
  PRIMARY KEY (`idinge`),
  KEY `idequipe` (`idequipe`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ingenieur`
--

INSERT INTO `ingenieur` (`idinge`, `nom`, `prenom`, `diplome`, `email`, `mdp`, `date_nais`, `idequipe`) VALUES
(1, 'lefebvre', 'kevin', 'Doctorat', 'pzk@gmail.com', '123', '1990-11-16', 1),
(2, 'bernard', 'jean', 'Bts', 'jeje@hihi.fr', '123456', '2019-03-09', 2),
(3, 'okacha', 'ben', 'Master', 'tyu@gmail.com', '789', '1997-09-08', 2),
(23, 'Grange', 'Vincent', 'Licence', 'vince@keke.fr', 'starcraft', '2019-03-15', 1);

-- --------------------------------------------------------

--
-- Structure de la table `priorite`
--

DROP TABLE IF EXISTS `priorite`;
CREATE TABLE IF NOT EXISTS `priorite` (
  `idpriorite` int(11) NOT NULL AUTO_INCREMENT,
  `demande` varchar(50) NOT NULL,
  `codecouleur` varchar(50) NOT NULL,
  PRIMARY KEY (`idpriorite`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `priorite`
--

INSERT INTO `priorite` (`idpriorite`, `demande`, `codecouleur`) VALUES
(1, 'basse', 'blanche'),
(2, 'moyenne', 'verte'),
(3, 'forte', 'rouge');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `idprojet` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `idequipe` int(11) NOT NULL,
  `idpriorite` int(11) NOT NULL,
  PRIMARY KEY (`idprojet`),
  KEY `idequipe` (`idequipe`),
  KEY `idpriorite` (`idpriorite`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`idprojet`, `libelle`, `date_debut`, `date_fin`, `idequipe`, `idpriorite`) VALUES
(1, 'Jeux pong', '2019-03-12', '2019-03-25', 1, 3),
(2, 'Securite reseau', '2019-03-13', '2019-03-13', 2, 2),
(10, 'Installation fibre', '2019-03-13', '2019-03-20', 2, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
