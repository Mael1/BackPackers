-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Sam 17 Mai 2014 à 11:35
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `backpackers`
--

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE IF NOT EXISTS `connexion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(45) NOT NULL DEFAULT '',
  `password` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `connexion`
--

INSERT INTO `connexion` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `nuite`
--

CREATE TABLE IF NOT EXISTS `nuite` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `nom` varchar(45) NOT NULL DEFAULT '',
  `adresse` varchar(45) NOT NULL DEFAULT '',
  `idville` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photos` varchar(45) NOT NULL DEFAULT '',
  `commentaire` varchar(45) NOT NULL DEFAULT '',
  `site web` varchar(45) NOT NULL DEFAULT '',
  `numero` varchar(45) NOT NULL DEFAULT '',
  `idtype_n` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_idtype_n` (`idtype_n`),
  KEY `fk_idville_n` (`idville`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `nuite`
--

INSERT INTO `nuite` (`id`, `nom`, `adresse`, `idville`, `photos`, `commentaire`, `site web`, `numero`, `idtype_n`) VALUES
(1, 'Le poney fringant', '4 rue de la communauté', 1, '', '', '', '+33 65 98 15 32', 1),
(2, 'Young & Happy', 'Avenida des ramblas', 2, '', '', '', '+34 555 988', 2),
(3, 'Sofitel', '56 ramblas patata', 3, '', '', '', '+35 65 98 74', 1),
(4, 'Grand Plaza', '12 plaza de la révolucion', 2, '', '', '', '+34 65 98 12 35', 2);

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE IF NOT EXISTS `pays` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `pays`
--

INSERT INTO `pays` (`id`, `nom`) VALUES
(1, 'france'),
(2, 'espagne'),
(3, 'portugal');

-- --------------------------------------------------------

--
-- Structure de la table `restauration`
--

CREATE TABLE IF NOT EXISTS `restauration` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL DEFAULT '',
  `adresse` varchar(45) NOT NULL DEFAULT '',
  `idville` int(10) unsigned NOT NULL DEFAULT '0',
  `photos` varchar(45) NOT NULL DEFAULT '',
  `commentaire` varchar(45) NOT NULL DEFAULT '',
  `horaire` varchar(45) NOT NULL DEFAULT '',
  `prix` varchar(45) NOT NULL DEFAULT '',
  `idtype_r` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_idtype_r` (`idtype_r`),
  KEY `fk_idville_r` (`idville`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `type_n`
--

CREATE TABLE IF NOT EXISTS `type_n` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `libelle` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `type_n`
--

INSERT INTO `type_n` (`id`, `libelle`) VALUES
(1, 'Auberge'),
(2, 'Hôtel');

-- --------------------------------------------------------

--
-- Structure de la table `type_r`
--

CREATE TABLE IF NOT EXISTS `type_r` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `libelle` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `type_r`
--

INSERT INTO `type_r` (`id`, `libelle`) VALUES
(1, 'Restaurant'),
(2, 'Fast-Food'),
(3, 'Discount');

-- --------------------------------------------------------

--
-- Structure de la table `type_v`
--

CREATE TABLE IF NOT EXISTS `type_v` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `libelle` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `type_v`
--

INSERT INTO `type_v` (`id`, `libelle`) VALUES
(1, 'Parc'),
(2, 'Monument'),
(3, 'Musée');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE IF NOT EXISTS `ville` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomVille` varchar(45) NOT NULL DEFAULT '',
  `description` varchar(300) NOT NULL DEFAULT '',
  `idpays` int(10) unsigned DEFAULT NULL,
  `CP` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `k_idpays` (`idpays`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `ville`
--

INSERT INTO `ville` (`id`, `nomVille`, `description`, `idpays`, `CP`) VALUES
(1, 'Paris', '', 1, ''),
(2, 'Barcelone', '', 2, ''),
(3, 'Lisbonne', '', 3, '');

-- --------------------------------------------------------

--
-- Structure de la table `visite`
--

CREATE TABLE IF NOT EXISTS `visite` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL DEFAULT '',
  `adresse` varchar(45) NOT NULL DEFAULT '',
  `idville` int(10) unsigned NOT NULL DEFAULT '0',
  `photos` varchar(45) NOT NULL DEFAULT '',
  `commentaire` varchar(45) NOT NULL DEFAULT '',
  `horaire` varchar(45) NOT NULL DEFAULT '',
  `prix` varchar(45) NOT NULL DEFAULT '',
  `idtype_v` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_idtype_v` (`idtype_v`),
  KEY `fk_idville_v` (`idville`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `nuite`
--
ALTER TABLE `nuite`
  ADD CONSTRAINT `fk_idtype_n` FOREIGN KEY (`idtype_n`) REFERENCES `nuite` (`id`),
  ADD CONSTRAINT `fk_idville_n` FOREIGN KEY (`idville`) REFERENCES `ville` (`id`);

--
-- Contraintes pour la table `restauration`
--
ALTER TABLE `restauration`
  ADD CONSTRAINT `fk_idtype_r` FOREIGN KEY (`idtype_r`) REFERENCES `restauration` (`id`),
  ADD CONSTRAINT `fk_idville_r` FOREIGN KEY (`idville`) REFERENCES `restauration` (`id`);

--
-- Contraintes pour la table `ville`
--
ALTER TABLE `ville`
  ADD CONSTRAINT `k_idpays` FOREIGN KEY (`idpays`) REFERENCES `pays` (`id`);

--
-- Contraintes pour la table `visite`
--
ALTER TABLE `visite`
  ADD CONSTRAINT `fk_idtype_v` FOREIGN KEY (`idtype_v`) REFERENCES `type_v` (`id`),
  ADD CONSTRAINT `fk_idville_v` FOREIGN KEY (`idville`) REFERENCES `visite` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
