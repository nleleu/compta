CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO `roles` (`id`, `name`, `description`) VALUES(1, 'login', 'Login privileges, granted after account confirmation');
INSERT INTO `roles` (`id`, `name`, `description`) VALUES(2, 'admin', 'Administrative user, has access to everything.');

CREATE TABLE IF NOT EXISTS `roles_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY  (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(254) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `last_login` int(10) UNSIGNED,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) UNSIGNED NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `created` int(10) UNSIGNED NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`),
  KEY `expires` (`expires`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

ALTER TABLE `roles_users`
  ADD CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
  
  
  
  SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de donn�es: `compta`
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
-- Contraintes pour les tables export�es
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

