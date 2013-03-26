-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2013 at 11:03 PM
-- Server version: 5.5.30-log
-- PHP Version: 5.4.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `personnes`
--

CREATE TABLE IF NOT EXISTS `personnes` (
  `cin` varchar(8) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `email` text NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `id_profil` int(11) DEFAULT NULL,
  PRIMARY KEY (`cin`),
  UNIQUE KEY `cin_2` (`cin`),
  KEY `id_profil` (`id_profil`),
  KEY `id_profil_2` (`id_profil`),
  KEY `id_profil_3` (`id_profil`),
  KEY `cin` (`cin`),
  KEY `id_profil_4` (`id_profil`),
  KEY `cin_3` (`cin`),
  KEY `id_profil_5` (`id_profil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personnes`
--

INSERT INTO `personnes` (`cin`, `nom`, `prenom`, `email`, `login`, `password`, `id_profil`) VALUES
('H659071', 'SKIRIBA', 'Abdeljabbar', 'jabbour@gmail.biz', 'jbibir', 'modpasssahel', 3),
('J12436X', 'SAFIX', 'AllalX', 'allal@example.comX', 'allilouX', 'XXXXX', 2),
('MK7622', 'LARAKI', 'Samira', 'tiktika@facebook.com', 'sammoura98', '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profils`
--

CREATE TABLE IF NOT EXISTS `profils` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` int(11) NOT NULL,
  `libelle` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `profils`
--

INSERT INTO `profils` (`id`, `code`, `libelle`) VALUES
(1, 0, 'Surveillant'),
(2, 0, 'Professeur'),
(3, 0, 'Administrateur'),
(4, 0, 'Ingénieur'),
(5, 0, 'Bibliothécaire');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `personnes`
--
ALTER TABLE `personnes`
  ADD CONSTRAINT `personnes_ibfk_2` FOREIGN KEY (`id_profil`) REFERENCES `profils` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
