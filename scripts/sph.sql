-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 20 Juin 2019 à 11:04
-- Version du serveur :  5.7.26-0ubuntu0.18.04.1
-- Version de PHP :  7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Structure de la table `sph_adherant`
--

CREATE TABLE `sph_adherant` (
  `rowid` int(11) NOT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
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
  `statut` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sph_annee`
--

CREATE TABLE `sph_annee` (
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

-- --------------------------------------------------------

--
-- Structure de la table `sph_inscription`
--

CREATE TABLE `sph_inscription` (
  `rowid` int(11) NOT NULL,
  `datec` datetime DEFAULT NULL,
  `tms` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fk_user_creat` int(11) DEFAULT NULL,
  `fk_user_modif` int(11) DEFAULT NULL,
  `fk_adherant` int(11) DEFAULT NULL,
  `fk_session` int(11) DEFAULT NULL,
  `fk_annee` int(11) DEFAULT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `date_deb` datetime DEFAULT NULL,
  `date_fin` datetime DEFAULT NULL,
  `statut` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `fk_type` int(11) DEFAULT NULL,
  `fk_annee` int(11) DEFAULT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `statut` tinyint(4) DEFAULT '1'
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
-- Contenu de la table `sph_user`
--

INSERT INTO `sph_user` (`rowid`, `datec`, `tms`, `fk_user_creat`, `fk_user_modif`, `login`, `pass_crypted`, `pass_temp`, `lastname`, `firstname`, `address`, `zip`, `town`, `country`, `job`, `skype`, `office_phone`, `office_fax`, `email`, `admin`, `datelastlogin`, `datepreviouslogin`, `statut`) VALUES
(1, '2017-02-28 10:13:00', '2017-03-07 14:12:49', NULL, 1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL, 'ADMINISTRATEUR', 'A.', NULL, NULL, NULL, NULL, 'Développeur logiciel', NULL, NULL, NULL, 'admin@admin.com', 1, NULL, NULL, 1),
(2, NULL, '2019-06-19 15:20:31', NULL, NULL, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, 'nom test', 'prénom test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test@test.fr', 0, NULL, NULL, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `sph_adherant`
--
ALTER TABLE `sph_adherant`
  ADD PRIMARY KEY (`rowid`),
  ADD UNIQUE KEY `uk_user_email` (`email`);

--
-- Index pour la table `sph_annee`
--
ALTER TABLE `sph_annee`
  ADD PRIMARY KEY (`rowid`),
  ADD KEY `fk_user_modif` (`fk_user_modif`),
  ADD KEY `fk_user_creat` (`fk_user_creat`);

--
-- Index pour la table `sph_inscription`
--
ALTER TABLE `sph_inscription`
  ADD PRIMARY KEY (`rowid`),
  ADD KEY `fk_type` (`fk_session`),
  ADD KEY `fk_lieu` (`fk_adherant`),
  ADD KEY `fk_user_modif` (`fk_user_modif`),
  ADD KEY `fk_user_creat` (`fk_user_creat`);

--
-- Index pour la table `sph_lieu`
--
ALTER TABLE `sph_lieu`
  ADD PRIMARY KEY (`rowid`);

--
-- Index pour la table `sph_session`
--
ALTER TABLE `sph_session`
  ADD PRIMARY KEY (`rowid`),
  ADD KEY `fk_type` (`fk_type`),
  ADD KEY `fk_lieu` (`fk_lieu`),
  ADD KEY `fk_user_modif` (`fk_user_modif`),
  ADD KEY `fk_user_creat` (`fk_user_creat`),
  ADD KEY `fk_annee` (`fk_annee`);

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
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `sph_adherant`
--
ALTER TABLE `sph_adherant`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sph_annee`
--
ALTER TABLE `sph_annee`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sph_inscription`
--
ALTER TABLE `sph_inscription`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sph_lieu`
--
ALTER TABLE `sph_lieu`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sph_session`
--
ALTER TABLE `sph_session`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sph_type`
--
ALTER TABLE `sph_type`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sph_user`
--
ALTER TABLE `sph_user`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
