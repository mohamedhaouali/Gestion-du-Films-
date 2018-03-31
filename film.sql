-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 25 Janvier 2018 à 08:11
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `film`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

CREATE TABLE IF NOT EXISTS `acteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `sexe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `acteur`
--

INSERT INTO `acteur` (`id`, `nom`, `prenom`, `date`, `sexe`) VALUES
(2, 'mm', 'lll', '1950-01-01', 'M'),
(3, 'mohamed', 'haouali', '1950-01-01', 'M'),
(4, 'hhh', 'fff', '1950-01-01', 'F'),
(5, 'ee', 'dd', '1950-01-01', 'F');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'Action'),
(2, 'Action'),
(3, 'Action'),
(4, 'Action'),
(5, 'Action'),
(6, 'Action'),
(7, 'Action'),
(8, 'Action'),
(9, 'Action'),
(10, 'Action'),
(11, 'Action'),
(12, 'Action'),
(13, 'Action'),
(14, 'Action'),
(15, 'Action');

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notif` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8244BE22BCF5E72D` (`categorie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `film`
--

INSERT INTO `film` (`id`, `titre`, `description`, `categorie_id`, `path`, `notif`) VALUES
(1, 'titanic', 'dddd', 1, 'hendi.jpg', 1),
(2, 'hannibal', 'fdssdfg', 1, 'update.PNG', 3),
(3, 'hindi', 'hindi', 1, 'Madhuri dixit desktop wallpaper beautiful madhuri dixit photo from the movie hum aapke hai kaun.jpg', 2);

-- --------------------------------------------------------

--
-- Structure de la table `film_acteur`
--

CREATE TABLE IF NOT EXISTS `film_acteur` (
  `film_id` int(11) NOT NULL,
  `acteur_id` int(11) NOT NULL,
  PRIMARY KEY (`film_id`,`acteur_id`),
  KEY `IDX_386489567F5183` (`film_id`),
  KEY `IDX_386489DA6F574A` (`acteur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `film_acteur`
--

INSERT INTO `film_acteur` (`film_id`, `acteur_id`) VALUES
(1, 2),
(2, 3),
(3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `t_user`
--

CREATE TABLE IF NOT EXISTS `t_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_3049BA0D92FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_3049BA0DA0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `t_user`
--

INSERT INTO `t_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'admin', 'admin', 'admin@admin', 'admin@admin', 1, 'vgw2qv4g4pw4go0kcog084k0ccgs88', '$2y$13$vgw2qv4g4pw4go0kcog08uB96Fmk2oX6JX1VXzQgIdm7SrFnodBXW', '2018-01-13 12:17:10', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL),
(2, 'med', 'med', 'mohamed.haouali1@gmail.com', 'mohamed.haouali1@gmail.com', 1, 'h4607rpq29kwo8cck0cw4gg8w0ksowc', '$2y$13$h4607rpq29kwo8cck0cw4eKXc85AYHWGxMVT6DvS3ZWjx10Gp2DcG', '2017-05-02 23:22:23', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `FK_8244BE22BCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `film_acteur`
--
ALTER TABLE `film_acteur`
  ADD CONSTRAINT `FK_386489567F5183` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_386489DA6F574A` FOREIGN KEY (`acteur_id`) REFERENCES `acteur` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
