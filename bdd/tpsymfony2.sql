-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 22 Décembre 2014 à 11:44
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `tpsymfony2`
--

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

CREATE TABLE IF NOT EXISTS `fos_user` (
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
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'Fidele', 'fidele', 'f.nadjindo@gmail.com', 'f.nadjindo@gmail.com', 1, 'skcs50gm8000kc4s84w84wo88cs48sk', '4/ewIVUTvzYQNypIDuqFxVKikC5gzbvxVY+xXDdo62x4b2Ga0/qnKhqyRLKDtn2JxkOiuPKeqQZd7BbXziWhOw==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(2, 'admin', 'admin', 'nadfid@yahoo.fr', 'nadfid@yahoo.fr', 1, 'n244ftmigq8o4gs4sg0ssko048wok08', '85FYZnnynm2y/d5gZNP80IDvZvhnTOtWUkOKJd8ukpD3paD1qSML1/VJIXouSI4Xg7LYKm5Bcsj6x452+JFP9g==', '2014-12-21 00:36:01', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=41 ;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`id`, `url`, `alt`) VALUES
(37, 'http://www.nad-web.fr/img/symfony/symfony_madrid.png', 'Symfony Madrid'),
(38, 'http://www.nad-web.fr/img/symfony/symfony_london.png', 'Symfony London'),
(39, 'http://www.nad-web.fr/img/symfony/laravel_amsterdam2014.jpg', 'Amsterdam'),
(40, 'http://www.nad-web.fr/img/symfony/rasmusLerdorf.jpg', 'PHP Tour');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_id` int(11) NOT NULL,
  `titre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `extrait` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tags_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_885DBAFA3DA5256D` (`image_id`),
  KEY `IDX_885DBAFA8D7B4FB4` (`tags_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `image_id`, `titre`, `extrait`, `contenu`, `tags_id`) VALUES
(5, 37, 'Symfony Live Madrid 2014', 'SensioLabs Madrid is proud to announce the third edition of the exceptionally successful SymfonyLive Madrid', 'The two day conference will take place on Thursday 25th - Friday 26th September 2014, in the heart of Madrid, and will bring together the sharpest minds in open source enterprise software development. Day one is a workshop day consisting of hands-on training courses from industry leading Symfony experts. Day two is the main conference day when we''re pulling out all the stops. Talks on Symfony, Drupal, BDD and wider PHP topics will make this an event to remember', 31),
(6, 38, 'Symfony Live London 2014', 'SensioLabs London is proud to announce the third edition of the exceptionally successful SymfonyLive Madrid', 'The two day conference will take place on Thursday 25th - Friday 26th September 2014, in the heart of Madrid, and will bring together the sharpest minds in open source enterprise software development. Day one is a workshop day consisting of hands-on training courses from industry leading Symfony experts. Day two is the main conference day when we''re pulling out all the stops. Talks on Symfony, Drupal, BDD and wider PHP topics will make this an event to remember', 30),
(7, 39, 'Symfony Live Amsterdam 2014', 'SensioLabs London is proud to announce the third edition of the exceptionally successful SymfonyLive Madrid', 'The two day conference will take place on Thursday 25th - Friday 26th September 2014, in the heart of Madrid, and will bring together the sharpest minds in open source enterprise software development. Day one is a workshop day consisting of hands-on training courses from industry leading Symfony experts. Day two is the main conference day when we''re pulling out all the stops. Talks on Symfony, Drupal, BDD and wider PHP topics will make this an event to remember', 33),
(8, 40, 'PHP Lyon', 'SensioLabs London is proud to announce the third edition of the exceptionally successful SymfonyLive Madrid', 'The two day conference will take place on Thursday 25th - Friday 26th September 2014, in the heart of Madrid, and will bring together the sharpest minds in open source enterprise software development. Day one is a workshop day consisting of hands-on training courses from industry leading Symfony experts. Day two is the main conference day when we''re pulling out all the stops. Talks on Symfony, Drupal, BDD and wider PHP topics will make this an event to remember', 32);

-- --------------------------------------------------------

--
-- Structure de la table `posts_tags`
--

CREATE TABLE IF NOT EXISTS `posts_tags` (
  `posts_id` int(11) NOT NULL,
  `tags_id` int(11) NOT NULL,
  PRIMARY KEY (`posts_id`,`tags_id`),
  KEY `IDX_D5ECAD9FD5E258C5` (`posts_id`),
  KEY `IDX_D5ECAD9F8D7B4FB4` (`tags_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- Contenu de la table `tags`
--

INSERT INTO `tags` (`id`, `name`) VALUES
(30, 'Sécurité'),
(31, 'Cache'),
(32, 'Design Pattern'),
(33, 'Test');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `FK_885DBAFA3DA5256D` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`),
  ADD CONSTRAINT `FK_885DBAFA8D7B4FB4` FOREIGN KEY (`tags_id`) REFERENCES `tags` (`id`);

--
-- Contraintes pour la table `posts_tags`
--
ALTER TABLE `posts_tags`
  ADD CONSTRAINT `FK_D5ECAD9F8D7B4FB4` FOREIGN KEY (`tags_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D5ECAD9FD5E258C5` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
