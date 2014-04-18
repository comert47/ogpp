-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 18 Avril 2014 à 12:41
-- Version du serveur: 5.5.36-MariaDB
-- Version de PHP: 5.5.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `ogpp`
--

-- --------------------------------------------------------

--
-- Structure de la table `ecrans`
--

CREATE TABLE IF NOT EXISTS `ecrans` (
  `ecran_id` int(11) NOT NULL AUTO_INCREMENT,
  `ecran_nom` varchar(50) DEFAULT NULL,
  `ecran_model` varchar(50) DEFAULT NULL,
  `ecran_taille` int(11) DEFAULT NULL,
  `uc_id` int(11) NOT NULL,
  PRIMARY KEY (`ecran_id`),
  KEY `FK_ecrans_uc_id` (`uc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `ecrans`
--

INSERT INTO `ecrans` (`ecran_id`, `ecran_nom`, `ecran_model`, `ecran_taille`, `uc_id`) VALUES
(1, 'samsung_dell_heuzef', 'samsung', 19, 1);

-- --------------------------------------------------------

--
-- Structure de la table `impression`
--

CREATE TABLE IF NOT EXISTS `impression` (
  `print_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`print_id`,`user_id`),
  KEY `FK_impression_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `impression`
--

INSERT INTO `impression` (`print_id`, `user_id`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `imprimantes`
--

CREATE TABLE IF NOT EXISTS `imprimantes` (
  `print_id` int(11) NOT NULL AUTO_INCREMENT,
  `print_nom` varchar(50) DEFAULT NULL,
  `print_model` varchar(50) DEFAULT NULL,
  `print_service` varchar(50) DEFAULT NULL,
  `print_etage` varchar(50) DEFAULT NULL,
  `locaux_id` int(11) NOT NULL,
  PRIMARY KEY (`print_id`),
  KEY `FK_imprimantes_locaux_id` (`locaux_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `imprimantes`
--

INSERT INTO `imprimantes` (`print_id`, `print_nom`, `print_model`, `print_service`, `print_etage`, `locaux_id`) VALUES
(1, 'xerox_p_1', 'Xerox', 'Administratif', '1', 1);

-- --------------------------------------------------------

--
-- Structure de la table `locaux`
--

CREATE TABLE IF NOT EXISTS `locaux` (
  `locaux_id` int(11) NOT NULL AUTO_INCREMENT,
  `locaux_num` int(11) DEFAULT NULL,
  `locaux_batiment` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`locaux_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `locaux`
--

INSERT INTO `locaux` (`locaux_id`, `locaux_num`, `locaux_batiment`) VALUES
(1, 114, 'e'),
(2, 121, 'p');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_nom` varchar(50) DEFAULT NULL,
  `service_user` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `services`
--

INSERT INTO `services` (`service_id`, `service_nom`, `service_user`) VALUES
(1, 'Direction', NULL),
(2, 'Administratif', NULL),
(3, 'Informatique', NULL),
(4, 'SAV', NULL),
(5, 'Phare Fadet', NULL),
(6, 'Phare Ouch', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `uc`
--

CREATE TABLE IF NOT EXISTS `uc` (
  `uc_id` int(11) NOT NULL AUTO_INCREMENT,
  `uc_nom` varchar(50) DEFAULT NULL,
  `uc_model` varchar(50) DEFAULT NULL,
  `uc_processeur` varchar(50) DEFAULT NULL,
  `uc_ram` int(11) DEFAULT NULL,
  `uc_dd` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `locaux_id` int(11) NOT NULL,
  PRIMARY KEY (`uc_id`),
  KEY `FK_uc_user_id` (`user_id`),
  KEY `FK_uc_locaux_id` (`locaux_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `uc`
--

INSERT INTO `uc` (`uc_id`, `uc_nom`, `uc_model`, `uc_processeur`, `uc_ram`, `uc_dd`, `user_id`, `locaux_id`) VALUES
(1, 'dell_heuzef', 'dell', 'i7', 8, 128, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_login` varchar(50) DEFAULT NULL,
  `user_nom` varchar(50) DEFAULT NULL,
  `user_prenom` varchar(50) DEFAULT NULL,
  `user_mdp` varchar(50) DEFAULT NULL,
  `user_tel` varchar(50) DEFAULT NULL,
  `user_mail` varchar(50) DEFAULT NULL,
  `service_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `FK_utilisateurs_service_id` (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`user_id`, `user_login`, `user_nom`, `user_prenom`, `user_mdp`, `user_tel`, `user_mail`, `service_id`) VALUES
(1, 'heuzef', 'Heuzé', 'Florent', 'proot', '0631326654', 'contact@heuzef.com', 3),
(2, 'bebienc', 'Bébien', 'Cyril', 'proot', '6000000000', 'bebienc@pharaon.com', 3);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `ecrans`
--
ALTER TABLE `ecrans`
  ADD CONSTRAINT `FK_ecrans_uc_id` FOREIGN KEY (`uc_id`) REFERENCES `uc` (`uc_id`);

--
-- Contraintes pour la table `impression`
--
ALTER TABLE `impression`
  ADD CONSTRAINT `FK_impression_user_id` FOREIGN KEY (`user_id`) REFERENCES `utilisateurs` (`user_id`),
  ADD CONSTRAINT `FK_impression_print_id` FOREIGN KEY (`print_id`) REFERENCES `imprimantes` (`print_id`);

--
-- Contraintes pour la table `imprimantes`
--
ALTER TABLE `imprimantes`
  ADD CONSTRAINT `FK_imprimantes_locaux_id` FOREIGN KEY (`locaux_id`) REFERENCES `locaux` (`locaux_id`);

--
-- Contraintes pour la table `uc`
--
ALTER TABLE `uc`
  ADD CONSTRAINT `FK_uc_locaux_id` FOREIGN KEY (`locaux_id`) REFERENCES `locaux` (`locaux_id`),
  ADD CONSTRAINT `FK_uc_user_id` FOREIGN KEY (`user_id`) REFERENCES `utilisateurs` (`user_id`);

--
-- Contraintes pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `FK_utilisateurs_service_id` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
