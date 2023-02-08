-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 08 Février 2023 à 12:17
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `echange`
--

-- --------------------------------------------------------

--
-- Structure de la table `exchange`
--

CREATE TABLE `exchange` (
  `idutilisateur` int(5) DEFAULT NULL,
  `idproduit` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `exchange`
--

INSERT INTO `exchange` (`idutilisateur`, `idproduit`) VALUES
(1, 9),
(1, 8),
(1, 7),
(2, 6),
(2, 5),
(2, 4),
(3, 3),
(3, 2),
(3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `idproduit` int(5) NOT NULL,
  `nom` varchar(40) DEFAULT NULL,
  `photo` varchar(40) DEFAULT NULL,
  `prix` double DEFAULT NULL,
  `descri` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`idproduit`, `nom`, `photo`, `prix`, `descri`) VALUES
(1, 'Montre', 'a1.jpg', 800000, 'Une montre connectee avec un design moderne et plein de fontionnalitee'),
(2, 'Tablette', 'a2.jpg', 2500000, 'Nouvelle Ipad de chez apple neuve'),
(3, 'Phone', 'a3.jpg', 1500000, 'tout nouveau Iphone avec le design des anciens modeles'),
(4, 'Chaussure1', 'p1.jpg', 200000, 'Une paire de chaussure tres legere et optimiser pour le sport'),
(5, 'Chaussure2', 'p2.jpg', 300000, 'paire de chaussure Nike moderne et faite pour faire du sport'),
(6, 'Chaussure3', 'p3.jpg', 350000, 'paire de chaussure simple adapter a toute situation'),
(7, 'Vetement1', 'v1.jpg', 50000, 'T shirt pour hommme avec motif camouflage'),
(8, 'Vetement2', 'v2.jpg', 75000, 'maillot allemagne'),
(9, 'Vetement3', 'v3.jpg', 75000, 'maillot manchester united');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idutilisateur` int(5) NOT NULL,
  `nom` varchar(40) DEFAULT NULL,
  `gmail` varchar(40) DEFAULT NULL,
  `mdp` varchar(40) DEFAULT NULL,
  `admin` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idutilisateur`, `nom`, `gmail`, `mdp`, `admin`) VALUES
(1, 'Faly', 'faly@gmail.com', '123', 1),
(2, 'Fanilo', 'fanilo@gmail.com', '456', 0),
(3, 'Loick', 'loick@gmail.com', '789', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `exchange`
--
ALTER TABLE `exchange`
  ADD KEY `idutilisateur` (`idutilisateur`),
  ADD KEY `idproduit` (`idproduit`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idproduit`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idutilisateur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `idproduit` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idutilisateur` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `exchange`
--
ALTER TABLE `exchange`
  ADD CONSTRAINT `exchange_ibfk_1` FOREIGN KEY (`idutilisateur`) REFERENCES `utilisateur` (`idutilisateur`),
  ADD CONSTRAINT `exchange_ibfk_2` FOREIGN KEY (`idproduit`) REFERENCES `produit` (`idproduit`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
