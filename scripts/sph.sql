-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 15 June 2019 à 08:32
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `sph`
--

-- --------------------------------------------------------

--
-- Structure de la table `sph_user`
--

CREATE TABLE IF NOT EXISTS `sph_user` (
  `rowid` int(11) NOT NULL AUTO_INCREMENT,
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
  `statut` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`rowid`),
  UNIQUE KEY `uk_user_login` (`login`),
  UNIQUE KEY `uk_user_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `spe_user`
--

INSERT INTO `sph_user` (`rowid`, `datec`, `tms`, `fk_user_creat`, `fk_user_modif`, `login`, `pass_crypted`, `pass_temp`, `lastname`, `firstname`, `address`, `zip`, `town`, `country`, `job`, `skype`, `office_phone`, `office_fax`, `email`, `admin`, `datelastlogin`, `datepreviouslogin`, `statut`) VALUES
(1, '2017-02-28 10:13:00', '2017-03-07 14:12:49', NULL, 1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL, 'ADMINISTRATEUR', 'A.', NULL, NULL, NULL, NULL, 'Développeur logiciel', NULL, NULL, NULL, 'admin@admin.com', 1, NULL, NULL, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
