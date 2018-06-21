-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 21 juin 2018 à 03:33
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `veterinaires`
--

-- --------------------------------------------------------

--
-- Structure de la table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `details` varchar(50) NOT NULL,
  `type` enum('consult','consult_spe','surgery') NOT NULL DEFAULT 'consult',
  `vet_init` varchar(4) NOT NULL,
  `room` enum('1','2','3','4') NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `canceled` tinyint(1) DEFAULT NULL,
  `vets_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `vet_init` (`vet_init`),
  KEY `start` (`start`),
  KEY `vets_ID` (`vets_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `postal_code` varchar(150) NOT NULL,
  `city` varchar(45) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `users_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `email_2` (`email`),
  KEY `fk_clients_users1_idx` (`users_ID`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=1030 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`ID`, `email`, `last_name`, `first_name`, `address`, `postal_code`, `city`, `phone_number`, `users_ID`) VALUES
(1007, 'p.mercier.h@gmail.com', 'Mercier-Handisyde', 'Paul', '10 rue Coquillière', '75001', 'Paris', '0626046045', 38),
(1029, 'sa.bennaceur@gmail.com', 'Bennaceur', 'Sid', '101, rue des Acquevilles', '92150', 'Suresnes', '0675120800', 72);

-- --------------------------------------------------------

--
-- Structure de la table `clients_has_patients`
--

DROP TABLE IF EXISTS `clients_has_patients`;
CREATE TABLE IF NOT EXISTS `clients_has_patients` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `clients_ID` int(11) NOT NULL,
  `patients_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_clients_has_patients_patients1_idx` (`patients_ID`),
  KEY `fk_clients_has_patients_clients1_idx` (`clients_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients_has_patients`
--

INSERT INTO `clients_has_patients` (`ID`, `clients_ID`, `patients_ID`) VALUES
(8, 38, 24),
(9, 38, 26),
(10, 38, 27);

-- --------------------------------------------------------

--
-- Structure de la table `consultations`
--

DROP TABLE IF EXISTS `consultations`;
CREATE TABLE IF NOT EXISTS `consultations` (
  `ID` int(11) NOT NULL,
  `date` date NOT NULL,
  `vet` varchar(10) DEFAULT NULL,
  `reason` varchar(100) NOT NULL,
  `exam` longtext,
  `room` varchar(10) DEFAULT NULL,
  `diagnosis` varchar(100) DEFAULT 'Open',
  `treatment` longtext,
  `weight` int(2) DEFAULT NULL,
  `notes` longtext,
  `patients_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_consultations_patients1_idx` (`patients_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `sent_to` varchar(255) NOT NULL,
  `sent_by` char(64) NOT NULL,
  `content` longtext NOT NULL,
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`ID`, `sent_to`, `sent_by`, `content`, `dates`) VALUES
(55, 'sa.bennaceur@gmail.com', 'sa.bennaceur@gmail.com', 'sa.bennaceur@gmail.comsa.bennaceur@gmail.comsa.bennaceur@gmail.comsa.bennaceur@gmail.comsa.bennaceur@gmail.comsa.bennaceur@gmail.comsa.bennaceur@gmail.com', '2018-06-19 22:00:00'),
(56, 'sa.bennaceur@gmail.com', 'sa.bennaceur@gmail.com', 'sa.bennaceur@gmail.comsa.bennaceur@gmail.comsa.bennaceur@gmail.comsa.bennaceur@gmail.comsa.bennaceur@gmail.comsa.bennaceur@gmail.com', '2018-06-20 21:06:35'),
(57, 'vet1@gmail.com', 'sa.bennaceur@gmail.com', 'blablabla connard', '2018-06-21 03:24:01'),
(58, 'vet1@gmail.com', 'vet1@gmail.com', 'blabla?', '2018-06-21 03:26:07');

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pet_name` varchar(20) NOT NULL DEFAULT 'Unknown',
  `breed` varchar(25) DEFAULT 'Unknown',
  `colour` varchar(20) DEFAULT 'Unknown',
  `sex` enum('male','female','unknown') NOT NULL DEFAULT 'unknown',
  `date_of_birth` date DEFAULT NULL,
  `microchip_tatoo` varchar(15) DEFAULT NULL,
  `comment` longtext,
  `history` longtext,
  `owner_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `patients`
--

INSERT INTO `patients` (`ID`, `pet_name`, `breed`, `colour`, `sex`, `date_of_birth`, `microchip_tatoo`, `comment`, `history`, `owner_ID`) VALUES
(24, 'Fifi', 'Angora', 'Blanc', 'male', NULL, '', '', NULL, 38),
(26, 'Butor', 'Chien Batard', 'Rouge', 'male', '2018-06-01', '121212121212', 'Chien méchant, a essayé de manger fifi', NULL, 38),
(27, 'tata', 'Peruche', 'Jaune', 'female', '2017-09-13', '', '', NULL, 38);

-- --------------------------------------------------------

--
-- Structure de la table `patients_has_appointment`
--

DROP TABLE IF EXISTS `patients_has_appointment`;
CREATE TABLE IF NOT EXISTS `patients_has_appointment` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `patients_ID` int(11) NOT NULL,
  `appointment_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_patients_has_appointment_appointment1_idx` (`appointment_ID`),
  KEY `fk_patients_has_appointment_patients1_idx` (`patients_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `from_time` time DEFAULT NULL,
  `to_time` time DEFAULT NULL,
  `day_free` set('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche') DEFAULT NULL,
  `vets_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_schedule_vets1_idx` (`vets_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `schedule`
--

INSERT INTO `schedule` (`ID`, `from_time`, `to_time`, `day_free`, `vets_ID`) VALUES
(17, '08:30:00', '12:30:00', 'Mercredi', 6),
(33, '08:30:00', '18:30:00', 'Vendredi', 6);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` char(64) NOT NULL,
  `role` enum('vet','client') NOT NULL DEFAULT 'client',
  `connected` enum('y','n') NOT NULL DEFAULT 'n',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID`, `email`, `password`, `role`, `connected`) VALUES
(38, 'p.mercier.h@gmail.com', 'secret', 'client', 'n'),
(39, 'vet1@gmail.com', 'secret', 'vet', 'n'),
(72, 'sa.bennaceur@gmail.com', 'secrets', 'client', 'y');

-- --------------------------------------------------------

--
-- Structure de la table `vets`
--

DROP TABLE IF EXISTS `vets`;
CREATE TABLE IF NOT EXISTS `vets` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `vet_init` varchar(4) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(13) NOT NULL,
  `users_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_vet_users1_idx` (`users_ID`),
  KEY `vet_init` (`vet_init`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vets`
--

INSERT INTO `vets` (`ID`, `last_name`, `first_name`, `vet_init`, `email`, `phone_number`, `users_ID`) VALUES
(6, 'Hochet', 'Eric', 'EH', 'vet1@gmail.com', '0600000000', 39);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `fk_clients_users1` FOREIGN KEY (`users_ID`) REFERENCES `users` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `consultations`
--
ALTER TABLE `consultations`
  ADD CONSTRAINT `fk_consultations_patients1` FOREIGN KEY (`patients_ID`) REFERENCES `patients` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `patients_has_appointment`
--
ALTER TABLE `patients_has_appointment`
  ADD CONSTRAINT `fk_patients_has_appointment_appointment1` FOREIGN KEY (`appointment_ID`) REFERENCES `appointment` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_patients_has_appointment_patients1` FOREIGN KEY (`patients_ID`) REFERENCES `patients` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`vets_ID`) REFERENCES `vets` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `vets`
--
ALTER TABLE `vets`
  ADD CONSTRAINT `fk_vet_users1` FOREIGN KEY (`users_ID`) REFERENCES `users` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
