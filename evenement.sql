-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 23 Mars 2018 à 10:11
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ou_sortir_ce_soir`
--

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `idEvenement` int(11) NOT NULL,
  `nomEvenement` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `libelleCourtEvenement` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `descriptionEvenement` varchar(510) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `dateEvenement` date DEFAULT NULL,
  `prixEvenement` decimal(10,2) NOT NULL,
  `telephoneEvenement` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `siteEvenement` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `lieuEvenement` varchar(255) NOT NULL,
  `numeroVoieEvenement` decimal(10,0) DEFAULT NULL,
  `typeVoieEvenement` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `nomVoieEvenement` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `codePostalEvenement` decimal(10,0) DEFAULT NULL,
  `nomVilleEvenement` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `heureEvenement` decimal(10,2) NOT NULL,
  `latitudeEvenement` decimal(10,6) NOT NULL,
  `longitudeEvenement` decimal(10,6) NOT NULL,
  `idType` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `evenement`
--

INSERT INTO `evenement` (`idEvenement`, `nomEvenement`, `libelleCourtEvenement`, `descriptionEvenement`, `dateEvenement`, `prixEvenement`, `telephoneEvenement`, `siteEvenement`, `lieuEvenement`, `numeroVoieEvenement`, `typeVoieEvenement`, `nomVoieEvenement`, `codePostalEvenement`, `nomVilleEvenement`, `heureEvenement`, `latitudeEvenement`, `longitudeEvenement`, `idType`) VALUES
(1, 'Wallaby\'s', ' ♥ Soirée du 14 février ♥ ', '♥ Soirée folle alliant le romantisme de la saint Valentin et le plaisir d\'un match de foot entre le Real-Madrid - PSG ♥', '2018-02-14', '0.00', '02 41 87 98 18', '', 'Wallaby\'s', '60', 'Boulevard', 'du Maréchal Foch', '49100', 'Angers', '19.50', '47.467164', '-0.552456', 1),
(2, 'Orelsan', 'Concert d\'Orelsan', 'Orelsan repart en solo pour une tournée qui se déroulera partout en France dès le mois de février 2018.', '2018-03-20', '36.00', '02 40 48 97 34', 'https://www.spectacles.ca', 'Arena Loire', '131', 'rue', 'Ferdinand Vest', '49800', 'Trélazé', '20.25', '47.442416', '-0.477215', 2),
(3, 'Le temps qui reste', 'Pièce de Philippe Lellouche', 'Sophie, Sébastien, Paul et Frank, quatre amis d\'enfance se retrouvent à l\'enterrement du cinquième inséparable de la bande, disparu subitement.', '2018-02-16', '22.00', ' 02 41 05 40 00', 'https://www.ticketmaster.fr', 'Grand théâtre', NULL, 'Place', 'du Ralliement', '49100', 'Angers', '20.00', '47.470998', '-0.552234', 3),
(4, 'La Trinquette', 'Soirée pot de départ', 'Venez dire au revoir à Bebel, qui quitte la tête de la Trinquette !', '2018-03-31', '0.00', NULL, NULL, 'Cave de la Trinquette', '21', 'Boulevard', 'Carnot', '49100', 'Angers', '19.00', '47.474889', '-0.547111', 1),
(5, 'Little Boxon\'g', 'Concert de Little Boxon\'g', 'Ouverture des portes à 18 h 30. Little Boxon\'g c\'est trois voix en une, trois pin-up qui chantent leur amour du swing vocal.', '2018-03-23', '5.00', ' 02 41 66 02 02', 'http://letroismats.fr/', 'Le Trois Mâts', NULL, 'Place', 'des Justices', '49000', 'Angers', '19.50', '47.453014', '-0.527899', 2),
(6, 'Tout baigne', 'Pièce de Pascal Elbé', 'Chez eux, Yann-Joël et sa femme sont sur le point d\'avoir un enfant. Mais dehors, la météo fait des siennes et le niveau de l\'eau monte.', '2018-03-23', '12.00', '02 41 31 14 49', 'http://cinemapaxtiercefr.wixsite.com/cinemapaxtierce/copie-de-les-mots-coeurs', 'Cinéma le Pax', '14', 'Rue', 'du Bourg-Joly', '49125', 'Tiercé', '20.00', '47.614542', '-0.466082', 3);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`idEvenement`),
  ADD KEY `foreignKey` (`idType`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
