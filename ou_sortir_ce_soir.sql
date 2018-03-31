-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 27 Mars 2018 à 11:13
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
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `idAvis` int(11) NOT NULL,
  `commentaireAvis` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `noteAvis` int(1) NOT NULL,
  `idEvenement` int(11) NOT NULL,
  `idMembre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `idContact` int(255) NOT NULL,
  `prenomContact` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nomContact` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mailContact` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `messageContact` varchar(1000) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`idContact`, `prenomContact`, `nomContact`, `mailContact`, `messageContact`) VALUES
(1, '', '', 'eva.saintier@gmail.com', 'njtrjrtjur');

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
(5, 'Little Boxon\'g', 'Concert de Little Boxon\'g', 'Ouverture des portes à 18h30. Little Boxon\'g, c\'est trois voix en une, trois pin-up qui chantent leur amour du swing vocal.', '2018-03-23', '5.00', ' 02 41 66 02 02', 'http://letroismats.fr/', 'Le Trois Mâts', NULL, 'Place', 'des Justices', '49000', 'Angers', '19.50', '47.453014', '-0.527899', 2),
(6, 'Tout baigne', 'Pièce de Pascal Elbé', 'Chez eux, Yann-Joël et sa femme sont sur le point d\'avoir un enfant. Mais dehors, la météo fait des siennes et le niveau de l\'eau monte.', '2018-03-23', '12.00', '02 41 31 14 49', 'http://cinemapaxtiercefr.wixsite.com/cinemapaxtierce/copie-de-les-mots-coeurs', 'Cinéma le Pax', '14', 'Rue', 'du Bourg-Joly', '49125', 'Tiercé', '20.00', '47.614542', '-0.466082', 3);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `idImage` decimal(10,0) NOT NULL,
  `nomImage` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `idEvenement` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`idImage`, `nomImage`, `idEvenement`) VALUES
('1', 'Wallaby.jpg', 1),
('2', 'Orelsan2.jpg', 2),
('3', 'le_temps_qui_rest_300.jpg', 3),
('4', 'trinquette.jpeg', 4),
('5', 'littleboxong.jpg', 5),
('6', 'toutbaigne.jpg', 6);

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `idMembre` int(11) NOT NULL,
  `pseudoMembre` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `emailMembre` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `passwordMembre` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `genderMembre` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ageMembre` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`idMembre`, `pseudoMembre`, `emailMembre`, `passwordMembre`, `genderMembre`, `ageMembre`) VALUES
(18, 'Hugo', 'egez@zehzeh', 'hugo', 'gender2', 'age1'),
(19, 'El patron', 'lanoche@gmail.com', 'azerty', 'gender2', 'age1'),
(24, 'EvaS', 'eva.saintier@gmail.com', 'e4599fa9f2653074005dad27f086837c20faeef4', 'gender1', 'age1'),
(25, 'Essai', 'essai@gmail.com', '10ba3a9c8bce3bec5f82023a71cc7b9f6dcf3d7a', 'gender2', 'age1');

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `idQuestion` int(25) NOT NULL,
  `texteQuestion` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `question`
--

INSERT INTO `question` (`idQuestion`, `texteQuestion`) VALUES
(1, 'Tu préfères quel type de soirée ?'),
(2, 'A quelle heure es-tu libre ?'),
(3, 'Quel est ton budget ?');

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `idReponse` int(25) NOT NULL,
  `texteReponse` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `idQuestion` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reponse`
--

INSERT INTO `reponse` (`idReponse`, `texteReponse`, `idQuestion`) VALUES
(1, 'Bar', 1),
(2, 'Concert', 1),
(3, 'Théâtre', 1),
(4, 'Peu importe', 1),
(5, '19h00 - 19h30', 2),
(6, '19h31 - 20h00', 2),
(7, '20h01 - 20h30', 2),
(8, 'Peu importe', 2),
(9, 'Moins de 15 €', 3),
(10, 'Moins de 30 €', 3),
(11, 'Plus de 30 €', 3),
(12, 'Peu importe', 3);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `idType` int(11) NOT NULL,
  `nomType` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`idType`, `nomType`) VALUES
(1, 'bar'),
(2, 'concert'),
(3, 'théâtre');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`idAvis`),
  ADD KEY `membre` (`idMembre`),
  ADD KEY `evenement2` (`idEvenement`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`idContact`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`idEvenement`),
  ADD KEY `foreignKey` (`idType`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`idImage`),
  ADD KEY `FK_Image_idEvenement` (`idEvenement`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`idMembre`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`idQuestion`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`idReponse`),
  ADD KEY `fkquestion` (`idQuestion`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`idType`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `idAvis` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `idContact` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `idMembre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `idQuestion` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `reponse`
--
ALTER TABLE `reponse`
  MODIFY `idReponse` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `evenement2` FOREIGN KEY (`idEvenement`) REFERENCES `evenement` (`idEvenement`),
  ADD CONSTRAINT `membre` FOREIGN KEY (`idMembre`) REFERENCES `membres` (`idMembre`);

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `evenement` FOREIGN KEY (`idEvenement`) REFERENCES `evenement` (`idEvenement`);

--
-- Contraintes pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD CONSTRAINT `fkquestion` FOREIGN KEY (`idQuestion`) REFERENCES `question` (`idQuestion`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
