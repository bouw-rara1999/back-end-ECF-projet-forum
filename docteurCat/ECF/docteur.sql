-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 24 mars 2023 à 15:33
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `docteur`
--

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `description` text NOT NULL,
  `contenu` text NOT NULL,
  `id_auteur` int(11) DEFAULT NULL,
  `pseudo_auteur` varchar(255) DEFAULT NULL,
  `date_publication` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `titre`, `description`, `contenu`, `id_auteur`, `pseudo_auteur`, `date_publication`) VALUES
(2, '', 'Bonjour, trop bien!', '', 0, '', '2023-03-22'),
(3, 'jbbkbjk', 'jbjkl', 'jbhijb', NULL, NULL, '2023-03-23 21:58:37'),
(4, 'jbbkbjk', 'jbjkl', 'jbhijb', NULL, NULL, '2023-03-23 22:11:08'),
(5, 'jbbkbjk', 'jbjkl', 'jbhijb', NULL, NULL, '2023-03-23 22:11:29'),
(6, 'jbbkbjk', 'jbjkl', 'jbhijb', 10, 'percy', '2023-03-23 22:12:21'),
(7, 'jbbkbjk', 'jbjkl', 'jbhijb', 10, 'percy', '2023-03-23 23:44:17'),
(8, 'jbbkbjk', 'jbjkl', 'jbhijb', 10, 'percy', '2023-03-23 23:52:14'),
(9, 'jbbkbjk', 'jbjkl', 'jbhijb', 10, 'percy', '2023-03-23 23:53:11'),
(10, 'jbbkbjk', 'jbjkl', 'jbhijb', 10, 'percy', '2023-03-23 23:55:04'),
(11, 'ugiuy', 'ibibib\r\nobho\r\nojbb', 'hvhkh\r\nojb\r\nojb', 10, 'percy', '2023-03-23 23:55:21'),
(12, 'ddededede', 'dededed', 'dededede', 10, 'percy', '2023-03-23 23:56:03'),
(13, 'ddededede', 'dededed', 'dededede', 10, 'percy', '2023-03-23 23:59:26'),
(14, 'vhvhvh', 'hkvhk', 'bkhjbk', 10, 'percy', '2023-03-23 23:59:36'),
(15, 'vhvhvh', 'hkvhk', 'bkhjbk', 10, 'percy', '2023-03-24 00:00:15'),
(16, 'ughgou', 'ou', 'ohoj', 10, 'percy', '2023-03-24 00:00:27'),
(17, 'ughgou', 'ou', 'ohoj', 10, 'percy', '2023-03-24 00:00:56'),
(18, 'ughgou', 'ou', 'ohoj', 10, 'percy', '2023-03-24 00:03:01'),
(19, 'ughgou', 'ou', 'ohoj', 10, 'percy', '2023-03-24 00:08:18'),
(20, 'ughgou', 'ou', 'ohoj', 10, 'percy', '2023-03-24 00:09:45'),
(21, 'cdcd', 'cdcdcd', 'cdcdcd', 10, 'percy', '2023-03-24 01:07:23'),
(23, 'lola', 'lola', 'lola', 10, 'percy', '2023-03-24 01:18:16'),
(24, 'cdecd', 'cdc', 'cdcd', 10, 'percy', '2023-03-24 10:04:44'),
(25, 'cdecd', 'cdc', 'cdcd', 10, 'percy', '2023-03-24 10:05:49'),
(26, 'cdecd', 'cdc', 'cdcd', 10, 'percy', '2023-03-24 10:06:52'),
(27, 'cdecd', 'cdc', 'cdcd', 10, 'percy', '2023-03-24 10:07:07'),
(28, 'cdecd', 'cdc', 'cdcd', 10, 'percy', '2023-03-24 10:07:40'),
(29, 'cdecd', 'cdc', 'cdcd', 10, 'percy', '2023-03-24 10:08:02'),
(30, 'cdecd', 'cdc', 'cdcd', 10, 'percy', '2023-03-24 10:08:52');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(100) DEFAULT 'default_avatar.png',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `mail`, `password`, `avatar`) VALUES
(1, 'momodulocal', 'leogua@gmail.com', '$2y$10$vlmjiY28t111sxJfy5FrEeE4HWW6o0l174xv3VMGNNFDWjH71JjQu', NULL),
(2, 'rara', 'kebabdu13@gmail.com', '$2y$10$jpWh1Ig1PAu/6pC8X1ss9OjKWDUg/g/jQWVHGdBsNZgGgeSzFxRCa', 'rousse.jpg'),
(3, 'shakira', 'kebabdu13gmail.com', 'Azerty99.', 'default_avatar.png'),
(4, 'shakirou', 'rayane.chaos@hotmail.com', '$2y$10$dtFuxUYTH1xje/22OOGPvuVoWsxilhh4FRTItONc42NM9QMNeOPF6', 'default_avatar.png'),
(8, 'demi', 'rayane.demi@hotmail.com', '$2y$10$t0WySDoR2VjGynaOxnj1CuzU/POHHICl2sys3gsXBG0amFmCmqECq', 'default_avatar.png'),
(9, 'ashton', 'rayane.ashton@hotmail.com', '$2y$10$AlmaqHrG16ja./yBxz28iuwfMb.oFSOqRQZoozUBkJdgvlnPCLJkq', 'default_avatar.png'),
(10, 'percy', 'jackson@gmail.com', 'Azerty1999.', 'default_avatar.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
