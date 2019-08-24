-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : saintpatxbarnaud.mysql.db
-- Généré le :  sam. 24 août 2019 à 21:40
-- Version du serveur :  5.6.43-log
-- Version de PHP :  7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sph`
--

-- --------------------------------------------------------

--
-- Structure de la table `sph_adherent`
--

CREATE TABLE `sph_adherent` (
  `rowid` int(11) NOT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `zip` varchar(25) DEFAULT NULL,
  `town` varchar(50) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `birth_address` varchar(255) DEFAULT NULL,
  `birth_zip` varchar(20) DEFAULT NULL,
  `birth_town` varchar(100) DEFAULT NULL,
  `birth_country` varchar(100) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `job` varchar(128) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `statut` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sph_jeu`
--

CREATE TABLE `sph_jeu` (
  `rowid` int(11) NOT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `ref` varchar(50) DEFAULT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `statut` tinyint(4) DEFAULT '1',
  `fk_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sph_jeu`
--

INSERT INTO `sph_jeu` (`rowid`, `datec`, `tms`, `fk_user_creat`, `fk_user_modif`, `ref`, `libelle`, `statut`, `fk_type`) VALUES
(15, '2019-06-27 09:24:33', '2019-08-11 16:02:05', 1, 1, 'Fortnite', 'Fortnite', 1, 15),
(16, '2019-06-27 09:26:51', '2019-08-16 09:06:40', 1, 1, 'Cs:GO', 'Counter-strike Global Offensive', 1, 15),
(17, '2019-06-27 09:27:02', '2019-08-11 16:02:19', 1, 1, 'Ow', 'Overwatch', 1, 15),
(18, '2019-06-27 09:27:09', '2019-08-11 16:02:26', 1, 1, 'Vs', 'Versus games', 1, 14),
(19, '2019-06-27 09:27:19', '2019-08-11 16:02:15', 1, 1, 'Free', 'Jeux Libre', 1, -1),
(20, '2019-06-27 09:27:27', '2019-08-11 16:02:10', 1, 1, 'LoL', 'League Of Legends', 1, 15),
(21, '2019-06-27 09:27:37', '2019-08-11 16:02:32', 1, 1, 'Fifa', 'Fifa', 1, 12),
(22, '2019-08-11 18:02:50', '2019-08-11 16:02:50', 1, 1, 'RL', 'Rocket League', 1, 15),
(23, '2019-08-16 18:55:40', '2019-08-16 16:55:40', 1, 1, 'BT', 'Buisness tour', 1, 15);

-- --------------------------------------------------------

--
-- Structure de la table `sph_lieu`
--

CREATE TABLE `sph_lieu` (
  `rowid` int(11) NOT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `zip` varchar(25) DEFAULT NULL,
  `town` varchar(50) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `office_phone` varchar(20) DEFAULT NULL,
  `statut` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sph_lieu`
--

INSERT INTO `sph_lieu` (`rowid`, `datec`, `tms`, `fk_user_creat`, `fk_user_modif`, `libelle`, `address`, `zip`, `town`, `country`, `office_phone`, `statut`) VALUES
(1, '2019-06-27 09:48:32', '2019-08-15 15:07:57', 1, 1, 'HuB', '11', '26000', 'Valence', 'France', '0624014063', 1);

-- --------------------------------------------------------

--
-- Structure de la table `sph_periode`
--

CREATE TABLE `sph_periode` (
  `rowid` int(11) NOT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `date_deb` datetime DEFAULT NULL,
  `date_fin` datetime DEFAULT NULL,
  `statut` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sph_periode`
--

INSERT INTO `sph_periode` (`rowid`, `datec`, `tms`, `fk_user_creat`, `fk_user_modif`, `libelle`, `date_deb`, `date_fin`, `statut`) VALUES
(2, '2019-06-29 17:59:48', '2019-06-29 16:06:30', 1, 1, 'Année 2019 - 2020 (première année)', '2019-09-02 00:00:00', '2020-06-29 00:00:00', 1),
(3, '2019-08-16 18:57:03', '2019-08-24 19:36:46', 1, 1, 'Année 2020 - 2021', '2020-09-01 00:00:00', '2021-08-31 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `sph_session`
--

CREATE TABLE `sph_session` (
  `rowid` int(11) NOT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `fk_lieu` int(11) DEFAULT NULL,
  `fk_jeu` int(11) DEFAULT NULL,
  `fk_periode` int(11) DEFAULT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `heure_deb` varchar(5) DEFAULT NULL,
  `heure_fin` varchar(5) DEFAULT NULL,
  `jour` varchar(25) DEFAULT NULL,
  `nb_places` int(11) NOT NULL DEFAULT '0',
  `statut` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sph_session`
--

INSERT INTO `sph_session` (`rowid`, `datec`, `tms`, `fk_user_creat`, `fk_user_modif`, `fk_lieu`, `fk_jeu`, `fk_periode`, `libelle`, `heure_deb`, `heure_fin`, `jour`, `nb_places`, `statut`) VALUES
(1, '2019-08-14 10:24:46', '2019-08-24 19:33:06', 1, 1, 1, 16, 2, NULL, '20:00', '22:00', 'Lundi', 15, 1),
(2, '2019-08-14 10:41:41', '2019-08-14 12:34:58', 1, 1, 1, 22, 2, NULL, '20:00', '22:00', 'Lundi', 12, 1),
(4, '2019-08-15 19:12:17', '2019-08-24 19:33:29', 1, 1, 1, 21, 2, NULL, '20:00', '22:00', 'Mardi', 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `sph_session_adherent`
--

CREATE TABLE `sph_session_adherent` (
  `rowid` int(11) NOT NULL,
  `datec` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fk_user_creat` int(11) NOT NULL,
  `fk_user_modif` int(11) NOT NULL,
  `fk_session` int(11) NOT NULL,
  `fk_adherent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sph_session_checkin`
--

CREATE TABLE `sph_session_checkin` (
  `rowid` int(11) NOT NULL,
  `datec` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_checkin` datetime NOT NULL,
  `fk_user_creat` int(11) NOT NULL,
  `fk_user_modif` int(11) NOT NULL,
  `fk_session` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sph_session_checkin_det`
--

CREATE TABLE `sph_session_checkin_det` (
  `rowid` int(11) NOT NULL,
  `datec` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fk_user_creat` int(11) NOT NULL,
  `fk_user_modif` int(11) NOT NULL,
  `fk_adherent` int(11) NOT NULL,
  `fk_user` int(11) NOT NULL,
  `fk_checkin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sph_session_coach`
--

CREATE TABLE `sph_session_coach` (
  `rowid` int(11) NOT NULL,
  `datec` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fk_user_creat` int(11) NOT NULL,
  `fk_user_modif` int(11) NOT NULL,
  `fk_session` int(11) NOT NULL,
  `fk_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sph_type`
--

CREATE TABLE `sph_type` (
  `rowid` int(11) NOT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `statut` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sph_type`
--

INSERT INTO `sph_type` (`rowid`, `datec`, `tms`, `fk_user_creat`, `fk_user_modif`, `libelle`, `statut`) VALUES
(12, '2019-06-21 11:49:05', '2019-06-21 09:49:05', 1, 1, 'Playtation 4', 1),
(13, '2019-06-21 11:49:09', '2019-08-24 19:35:55', 1, 1, 'Switch', 1),
(14, '2019-06-21 11:49:15', '2019-08-24 19:36:13', 1, 1, 'Console', 1),
(15, '2019-06-25 11:57:02', '2019-08-24 19:36:13', 1, 1, 'PC', 1);

-- --------------------------------------------------------

--
-- Structure de la table `sph_user`
--

CREATE TABLE `sph_user` (
  `rowid` int(11) NOT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `login` varchar(24) NOT NULL,
  `pass_crypted` varchar(128) DEFAULT NULL,
  `pass_temp` varchar(32) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `zip` varchar(25) DEFAULT NULL,
  `town` varchar(50) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `job` varchar(128) DEFAULT NULL,
  `skype` varchar(255) DEFAULT NULL,
  `office_phone` varchar(20) DEFAULT NULL,
  `office_fax` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `admin` smallint(6) DEFAULT '0',
  `datelastlogin` datetime DEFAULT NULL,
  `datepreviouslogin` datetime DEFAULT NULL,
  `statut` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sph_user`
--

INSERT INTO `sph_user` (`rowid`, `datec`, `tms`, `fk_user_creat`, `fk_user_modif`, `login`, `pass_crypted`, `pass_temp`, `lastname`, `firstname`, `address`, `zip`, `town`, `country`, `job`, `skype`, `office_phone`, `office_fax`, `email`, `admin`, `datelastlogin`, `datepreviouslogin`, `statut`) VALUES
(1, '2017-02-28 10:13:00', '2019-08-20 14:17:19', 1, 12, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL, 'SAINT-PATRICE', 'Arnaud', NULL, NULL, NULL, NULL, 'Développeur logiciel', NULL, NULL, NULL, 'admin@admin.com', 1, NULL, NULL, 1),
(2, NULL, '2019-07-31 13:47:45', 1, 1, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, 'nom test', 'prénom test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test@test.fr', 0, NULL, NULL, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `sph_adherent`
--
ALTER TABLE `sph_adherent`
  ADD PRIMARY KEY (`rowid`),
  ADD UNIQUE KEY `uk_user_email` (`email`);

--
-- Index pour la table `sph_jeu`
--
ALTER TABLE `sph_jeu`
  ADD PRIMARY KEY (`rowid`),
  ADD KEY `fk_type` (`fk_type`);

--
-- Index pour la table `sph_lieu`
--
ALTER TABLE `sph_lieu`
  ADD PRIMARY KEY (`rowid`);

--
-- Index pour la table `sph_periode`
--
ALTER TABLE `sph_periode`
  ADD PRIMARY KEY (`rowid`),
  ADD KEY `fk_user_modif` (`fk_user_modif`),
  ADD KEY `fk_user_creat` (`fk_user_creat`);

--
-- Index pour la table `sph_session`
--
ALTER TABLE `sph_session`
  ADD PRIMARY KEY (`rowid`),
  ADD KEY `fk_type` (`fk_jeu`),
  ADD KEY `fk_lieu` (`fk_lieu`),
  ADD KEY `fk_user_modif` (`fk_user_modif`),
  ADD KEY `fk_user_creat` (`fk_user_creat`),
  ADD KEY `fk_annee` (`fk_periode`);

--
-- Index pour la table `sph_session_adherent`
--
ALTER TABLE `sph_session_adherent`
  ADD PRIMARY KEY (`rowid`);

--
-- Index pour la table `sph_session_checkin`
--
ALTER TABLE `sph_session_checkin`
  ADD PRIMARY KEY (`rowid`);

--
-- Index pour la table `sph_session_checkin_det`
--
ALTER TABLE `sph_session_checkin_det`
  ADD PRIMARY KEY (`rowid`),
  ADD KEY `fk_checkin` (`fk_checkin`);

--
-- Index pour la table `sph_session_coach`
--
ALTER TABLE `sph_session_coach`
  ADD PRIMARY KEY (`rowid`);

--
-- Index pour la table `sph_type`
--
ALTER TABLE `sph_type`
  ADD PRIMARY KEY (`rowid`);

--
-- Index pour la table `sph_user`
--
ALTER TABLE `sph_user`
  ADD PRIMARY KEY (`rowid`),
  ADD UNIQUE KEY `uk_user_login` (`login`),
  ADD UNIQUE KEY `uk_user_email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `sph_adherent`
--
ALTER TABLE `sph_adherent`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `sph_jeu`
--
ALTER TABLE `sph_jeu`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `sph_lieu`
--
ALTER TABLE `sph_lieu`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `sph_periode`
--
ALTER TABLE `sph_periode`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `sph_session`
--
ALTER TABLE `sph_session`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `sph_session_adherent`
--
ALTER TABLE `sph_session_adherent`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `sph_session_checkin`
--
ALTER TABLE `sph_session_checkin`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sph_session_checkin_det`
--
ALTER TABLE `sph_session_checkin_det`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sph_session_coach`
--
ALTER TABLE `sph_session_coach`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `sph_type`
--
ALTER TABLE `sph_type`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `sph_user`
--
ALTER TABLE `sph_user`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
