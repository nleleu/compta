-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 03 Octobre 2013 à 19:31
-- Version du serveur: 5.5.28
-- Version de PHP: 5.4.4-14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `compta`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(255) CHARACTER SET utf8 NOT NULL,
  `fk_user` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `label` (`label`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Structure de la table `communities`
--

CREATE TABLE IF NOT EXISTS `communities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(255) NOT NULL,
  `fk_user` int(10) unsigned NOT NULL COMMENT 'Community''s admin',
  PRIMARY KEY (`id`),
  KEY `fk_user` (`fk_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Structure de la table `community_invoices`
--

CREATE TABLE IF NOT EXISTS `community_invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_invoice` int(11) NOT NULL,
  `fk_community` int(11) NOT NULL,
  `reduction` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `fk_invoice` (`fk_invoice`,`fk_community`),
  KEY `fk_invoices` (`fk_invoice`,`fk_community`),
  KEY `fk_community` (`fk_community`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Structure de la table `community_invoice_beneficiaries`
--

CREATE TABLE IF NOT EXISTS `community_invoice_beneficiaries` (
  `fk_community_invoice` int(11) NOT NULL,
  `fk_user` int(10) unsigned NOT NULL,
  PRIMARY KEY (`fk_community_invoice`,`fk_user`),
  KEY `fk_comunity_invoice` (`fk_community_invoice`,`fk_user`),
  KEY `fk_user` (`fk_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `community_members`
--

CREATE TABLE IF NOT EXISTS `community_members` (
  `fk_community` int(11) NOT NULL,
  `fk_user` int(11) unsigned NOT NULL,
  PRIMARY KEY (`fk_community`,`fk_user`),
  KEY `fk_community` (`fk_community`,`fk_user`),
  KEY `fk_user` (`fk_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `invoices`
--

CREATE TABLE IF NOT EXISTS `invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `amount` float NOT NULL,
  `description` text NOT NULL,
  `fk_category` int(11) NOT NULL,
  `fk_user` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_category` (`fk_category`),
  KEY `fk_user` (`fk_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `communities`
--
ALTER TABLE `communities`
  ADD CONSTRAINT `communities_ibfk_1` FOREIGN KEY (`fk_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `community_invoices`
--
ALTER TABLE `community_invoices`
  ADD CONSTRAINT `community_invoices_ibfk_2` FOREIGN KEY (`fk_community`) REFERENCES `communities` (`id`),
  ADD CONSTRAINT `community_invoices_ibfk_3` FOREIGN KEY (`fk_invoice`) REFERENCES `invoices` (`id`);

--
-- Contraintes pour la table `community_invoice_beneficiaries`
--
ALTER TABLE `community_invoice_beneficiaries`
  ADD CONSTRAINT `community_invoice_beneficiaries_ibfk_2` FOREIGN KEY (`fk_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `community_invoice_beneficiaries_ibfk_3` FOREIGN KEY (`fk_community_invoice`) REFERENCES `community_invoices` (`id`);

--
-- Contraintes pour la table `community_members`
--
ALTER TABLE `community_members`
  ADD CONSTRAINT `community_members_ibfk_1` FOREIGN KEY (`fk_community`) REFERENCES `communities` (`id`),
  ADD CONSTRAINT `community_members_ibfk_2` FOREIGN KEY (`fk_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`fk_category`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `invoices_ibfk_2` FOREIGN KEY (`fk_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
