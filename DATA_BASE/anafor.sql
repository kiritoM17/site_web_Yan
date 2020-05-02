-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 02 mai 2020 à 09:58
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `anafor`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id_admin` int(11) NOT NULL,
  `pseudo` varchar(25) COLLATE utf8_bin NOT NULL,
  `password` longtext COLLATE utf8_bin NOT NULL,
  `privilege` varchar(25) COLLATE utf8_bin NOT NULL,
  `date_dernier_con` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id_admin`, `pseudo`, `password`, `privilege`, `date_dernier_con`) VALUES
(1, 'AdminJadd', 'AdminJadd', 'Admin', '2020-02-01 13:53:55');

-- --------------------------------------------------------

--
-- Structure de la table `album`
--

CREATE TABLE `album` (
  `id_album` int(11) NOT NULL,
  `nom_album` text COLLATE utf8_bin NOT NULL,
  `visibilite_abum` varchar(25) COLLATE utf8_bin NOT NULL,
  `type_album` varchar(25) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `album`
--

INSERT INTO `album` (`id_album`, `nom_album`, `visibilite_abum`, `type_album`) VALUES
(40, 'test1', 'public', 'image'),
(41, 'test publication_Publication', 'public', 'actualite'),
(42, 'test publication_Publication', 'public', 'actualite'),
(43, 'test publication Event_Publication', 'public', 'actualite'),
(44, 'test publication Magazine_Publication', 'public', 'actualite'),
(45, 'test publication Business !_Publication', 'public', 'actualite'),
(46, 'test publication Business @_Publication', 'public', 'actualite'),
(47, 'test publication Formation_Publication', 'public', 'actualite');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id_con` int(11) NOT NULL,
  `name_con` varchar(200) NOT NULL,
  `email_con` varchar(300) NOT NULL,
  `phone_con` varchar(30) NOT NULL,
  `message_con` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_con`, `name_con`, `email_con`, `phone_con`, `message_con`) VALUES
(10, 'junior', 'mve@gmail.com', '+237690720258', 'test email send'),
(11, 'junior', 'mve@gmail.com', '+237690720258', 'test email send'),
(12, 'junior', 'mve@gmail.com', '+237690720258', 'test email send');

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE `media` (
  `id_media` int(11) NOT NULL,
  `nom_media` text COLLATE utf8_bin NOT NULL,
  `taille_media` bigint(20) DEFAULT NULL,
  `mime_type` longtext COLLATE utf8_bin DEFAULT NULL,
  `date_pub_media` timestamp NULL DEFAULT current_timestamp(),
  `id_album` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `media`
--

INSERT INTO `media` (`id_media`, `nom_media`, `taille_media`, `mime_type`, `date_pub_media`, `id_album`) VALUES
(16, 'LTCI5lbemx4xP9TQPLsibL8MO2nMYhbcZe2yxKif.png', 78375, 'image', '2020-05-01 00:11:13', 40),
(17, 'XFwA3XPjCtd9OaanmDUOwsReidnTGf7wLJJD82Xy.png', 75734, 'image/png', '2020-05-01 14:41:39', 41),
(18, 'CVKTdx5y3ubRmk6MW0ONBBCNacTiLbKVjNHNRDZg.png', 75734, 'image/png', '2020-05-01 14:42:53', 42),
(19, 'xe9wudy6KOw8MEyc3J9vJD5SWKJOmZP28xKBXJKI.png', 24010, 'image/png', '2020-05-01 14:45:19', 43),
(20, 'IfPFRzGL37TMUHWVv17mQjhdvy2dOztDfE6RH4NZ.png', 83121, 'image/png', '2020-05-01 15:52:59', 44),
(21, '7yxQZScxKV28DwPPu9PoZ21yRuBKl08x6mWf2mfX.png', 78375, 'image', '2020-05-01 18:13:16', 44),
(22, 'CkoVJFij16l1IkTrJXgpUZcm4yKZNjLdesfvwjBx.png', 77998, 'image/png', '2020-05-01 18:38:39', 45),
(23, 'vAAHbQDLeD0ssUjUbcUPWsKe1O1HZXsFP37ghqRC.png', 74723, 'image/png', '2020-05-01 18:39:25', 46),
(24, 'BX1S5eoPHyTztJOzCU1aLA43nMsgzcZbQTvzGQE9.png', 83121, 'image', '2020-05-01 18:40:33', 45),
(25, 'fePmxtkeEaU6YhNQIsMvxp6LB0MK1F2aoKgOQxhO.png', 78375, 'image', '2020-05-01 18:50:51', 43),
(26, 'KtL0xb16kcGe3Wt92R5ndnfOVP9cpL6nSn5OlU4v.png', 793514, 'image/png', '2020-05-01 19:13:13', 47),
(27, '1pvkdMIvQASDgjV8myQWlK4cp8Yk5xgAVQJabHq4.png', 78375, 'image', '2020-05-01 19:26:17', 47),
(28, '4hTHnsAuXl5p6F8r73DVKrQxMx03OfZMeOnfZCoF.png', 78375, 'image', '2020-05-01 19:30:27', 43),
(29, '77OR4AsqKOINJn7sdy1DE0oebm2aVo6pOudUkmwN.docx', 24169, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '2020-05-02 00:07:37', 47),
(30, 'Qe1m6MlGUxoKDGq6eOdcecjWZ5R272YbHabadKZK.docx', 24169, 'registerForm', '2020-05-02 00:08:49', 47),
(31, 'TGg0nyZ1k2Ep19Wzggb4cN1rcJ2AnZqT7QjcNqek.pdf', 586130, 'syllabus', '2020-05-02 00:31:49', 47);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

CREATE TABLE `publication` (
  `id_pub` int(11) NOT NULL,
  `title_pub` varchar(100) COLLATE utf8_bin NOT NULL,
  `resume_pub` varchar(200) COLLATE utf8_bin NOT NULL,
  `description_pub` text COLLATE utf8_bin NOT NULL,
  `create_at` date NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `start_date_pub` date DEFAULT NULL,
  `end_date_pub` date DEFAULT NULL,
  `theme_pub` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `edition_pub` int(11) DEFAULT NULL,
  `status_pub` varchar(30) COLLATE utf8_bin NOT NULL,
  `id_album` int(11) NOT NULL,
  `id_type_pub` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `publication`
--

INSERT INTO `publication` (`id_pub`, `title_pub`, `resume_pub`, `description_pub`, `create_at`, `update_at`, `start_date_pub`, `end_date_pub`, `theme_pub`, `edition_pub`, `status_pub`, `id_album`, `id_type_pub`) VALUES
(4, 'test publication', 'un exemple de resume pour une publication test', '<p>test article magazine&nbsp;</p>', '2020-05-01', '2020-05-01 12:42:54', NULL, NULL, NULL, NULL, 'delete', 42, 3),
(5, 'test publication Event Update AA', 'un exemple de resume pour une publication test event', '<p>description event ici c\'est plus cool ainsi ohh</p>', '2020-05-01', '2020-05-01 17:30:06', '2020-05-02', '2020-05-15', NULL, NULL, 'updated', 43, 1),
(6, 'test publication Magazine update', 'un exemple de resume pour une publication test magazine update', '<p>text de la publication magazine pour le platteforme web</p>', '2020-05-01', '2020-05-01 14:59:47', NULL, NULL, NULL, NULL, 'updated', 44, 3),
(7, 'test publication Business 1', 'un exemple de resume pour une publication test', '<p>test publication Business 1 update</p>', '2020-05-01', '2020-05-01 16:40:10', NULL, NULL, NULL, NULL, 'updated', 45, 5),
(8, 'test publication Business @', 'un exemple de resume pour une publication test', '<p>test description Business&nbsp;</p>', '2020-05-01', '2020-05-01 16:39:25', NULL, NULL, NULL, NULL, 'delete', 46, 5),
(9, 'test publication Formation', 'un exemple de resume pour une publication test', '<p>description Formation&nbsp;</p>', '2020-05-01', '2020-05-01 17:13:13', '2020-05-02', '2020-05-23', 'Start Career', 1, 'created', 47, 2);

-- --------------------------------------------------------

--
-- Structure de la table `type_publication`
--

CREATE TABLE `type_publication` (
  `id_type_pub` int(11) NOT NULL,
  `title_type_pub` varchar(100) NOT NULL,
  `description_type_pub` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type_publication`
--

INSERT INTO `type_publication` (`id_type_pub`, `title_type_pub`, `description_type_pub`) VALUES
(1, 'event', 'publication type event'),
(2, 'formation', 'event type formation'),
(3, 'magazine', 'event type magazine'),
(4, 'media city', 'event type media city'),
(5, 'business', 'event type business');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_con`);

--
-- Index pour la table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id_media`),
  ADD KEY `id_album` (`id_album`) USING BTREE;

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id_pub`),
  ADD KEY `FK_Actualite_id_media` (`id_album`),
  ADD KEY `id_type_actualite` (`id_type_pub`);

--
-- Index pour la table `type_publication`
--
ALTER TABLE `type_publication`
  ADD PRIMARY KEY (`id_type_pub`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `album`
--
ALTER TABLE `album`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_con` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `publication`
--
ALTER TABLE `publication`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `type_publication`
--
ALTER TABLE `type_publication`
  MODIFY `id_type_pub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`id_album`) REFERENCES `album` (`id_album`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Contraintes pour la table `publication`
--
ALTER TABLE `publication`
  ADD CONSTRAINT `publication_ibfk_1` FOREIGN KEY (`id_type_pub`) REFERENCES `type_publication` (`id_type_pub`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
