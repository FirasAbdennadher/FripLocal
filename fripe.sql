-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 22 déc. 2020 à 16:13
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fripe`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id_an` int(11) NOT NULL,
  `titre_an` varchar(2000) DEFAULT NULL,
  `prix_an` double DEFAULT NULL,
  `description_an` longtext DEFAULT NULL,
  `date_pub_an` varchar(20) DEFAULT NULL,
  `couleur_an` varchar(200) DEFAULT NULL,
  `region_an` varchar(20) DEFAULT NULL,
  `id_marque` int(11) DEFAULT NULL,
  `id_categorie` int(11) DEFAULT NULL,
  `taille` varchar(50) DEFAULT NULL,
  `id_pers` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id_an`, `titre_an`, `prix_an`, `description_an`, `date_pub_an`, `couleur_an`, `region_an`, `id_marque`, `id_categorie`, `taille`, `id_pers`, `status`) VALUES
(14, 'aladin abdelkafi', 300, 'Valeur par défaut', '2019-12-11', 'rouge', 'Sfax', 1, 1, 'S', 1, 'non accepte'),
(20, 'Abdennadher', 1, 'Valeur par dÃ©1faut', '2019-12-05', 'dsf', 'Sousse', 1, 1, 'S', 1, 'non accepte'),
(21, 'CoordonnÃ©es de lâ€™Ã©vÃ©nement', 1, 'Valeur par dÃ©faut', '2019-12-07', 'sqd', 'Jandouba', 1, 1, 'S', 1, 'non accepte'),
(22, 'annnnn1', 1, 'Valeur par dÃ©faut', '2019-12-13', 'dsf', 'papaya', 2, 4, '742641', 13, 'Accepte'),
(25, 'Abdennadher', 152, 'qsd', '2019-12-03', 'dfdsf', 'papaya', 1, 5, 'L', 1, 'non accepte'),
(26, 'annnonce firas', 152, 'Votre description ici !\r\n                                        ', '2019-12-30', 'dfdsf', 'papaya', 1, 5, 'L', 1, 'ArchivÃ©'),
(27, 'SSS', 520, 'qsdqsd', '2020-10-08', 'Red', 'Sfax', 1, 1, 'S', 13, 'non accepte'),
(28, 'qqsdqsd', 852, 'sqd', '2020-10-08', 'q', 'Sfax', 1, 1, 'S', 13, 'non accepte'),
(29, 'Titre1', 8525, 'chasures', '2020-10-08', 'red', 'Sfax', 1, 1, 'S', 13, 'non accepte');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom_cat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom_cat`) VALUES
(1, 'Homme'),
(4, 'Femme'),
(5, 'Enfant'),
(6, 'cfiras');

-- --------------------------------------------------------

--
-- Structure de la table `contient`
--

CREATE TABLE `contient` (
  `id_cat` int(11) NOT NULL,
  `id_sous` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contient`
--

INSERT INTO `contient` (`id_cat`, `id_sous`) VALUES
(1, 4),
(1, 5),
(1, 6),
(4, 4),
(4, 5),
(5, 5),
(6, 7);

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE `marque` (
  `id` int(11) NOT NULL,
  `nom_marq` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`id`, `nom_marq`) VALUES
(1, 'HA'),
(2, 'nike'),
(3, 'adidas'),
(4, 'Gant');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id` int(11) NOT NULL,
  `id_role` int(11) DEFAULT NULL,
  `nom_pers` varchar(200) DEFAULT NULL,
  `prenom_pers` varchar(100) DEFAULT NULL,
  `email_pers` varchar(100) DEFAULT NULL,
  `mdp_pers` varchar(200) DEFAULT NULL,
  `tel_pers` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id`, `id_role`, `nom_pers`, `prenom_pers`, `email_pers`, `mdp_pers`, `tel_pers`, `status`) VALUES
(1, 1, 'ala', 'ala', '1', '1', '44106323', 'Accepte'),
(9, 1, 'elleuch', 'med', 'med_elleuch@gmail.com', '0000', '44556677', 'Accepte'),
(13, 2, 'Firas', 'Abdennadher', 'fir@fr', '1', '11152', 'Accepte'),
(14, 2, 'de lâ€™Ã©vÃ©nement', 'CoordonnÃ©es', 'firasabdennadher82@gmail.com', 'joker0', '1', 'Accepte'),
(15, 2, 'test', 'trdfs', 'firas.sdf@fgdg.fr', '1', '10', 'Accepte'),
(16, 2, 'withemail', 'email', 'firasabdennadher82@gmail.com', '111', '15', 'Accepte'),
(17, 2, 'aezaeaze', 'azeazeaze', 'firasabdennadher82@gmail.com', '1', '1', 'non accepte'),
(18, 2, 'aaeazeazeaeza', 'azeazeazeaze', 'firasabdennadher82@gmail.com', '1', '1', 'non accepte'),
(19, 2, 'aaeazeazeaeza', 'azeazeazeaze', 'firasabdennadher82@gmail.com', '1', '1', 'non accepte'),
(20, 2, '45', 'dfg', 'firasabdennadher82@gmail.com', '1', '1', 'non accepte'),
(21, 2, 'bbb', 'bbdff', 'firasabdennadher82@gmail.com', '1', '1', 'non accepte'),
(22, 2, 'de ttt', 'ttt', 'firasabdennadher82@gmail.com', '1', '1', 'non accepte'),
(23, 2, 'nd', 'qa', 'firasabdennadher82@gmail.com', 'joker0', '1', 'non accepte'),
(24, 2, 'nd', 'qa', 'firasabdennadher82@gmail.com', '1', '1', 'non accepte');

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `nom_photo` varchar(2000) NOT NULL,
  `id_an` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `photo`
--

INSERT INTO `photo` (`id`, `nom_photo`, `id_an`) VALUES
(1, 'rBMxO3dP.jpg', 22),
(2, 'i9GzUOl4.png', 22),
(7, 'photo_gAT5ZQt7.jpg', 25),
(8, 'photo_jTAzGViQ.jpg', 25),
(9, 'photo_7WJ9J0pP.jpg', 25);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `type_role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `type_role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Structure de la table `sous_categorie`
--

CREATE TABLE `sous_categorie` (
  `id_sous` int(11) NOT NULL,
  `nom_sous_cat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sous_categorie`
--

INSERT INTO `sous_categorie` (`id_sous`, `nom_sous_cat`) VALUES
(4, 'pull'),
(5, 'pantalon'),
(6, 'qsd'),
(7, 'souscatFiras');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id_an`),
  ADD KEY `id_categorie` (`id_categorie`),
  ADD KEY `annonce_ibfk_2` (`id_marque`),
  ADD KEY `annonce_ibfk_3` (`id_pers`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contient`
--
ALTER TABLE `contient`
  ADD PRIMARY KEY (`id_cat`,`id_sous`),
  ADD KEY `id_sous` (`id_sous`);

--
-- Index pour la table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_role` (`id_role`);

--
-- Index pour la table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_an` (`id_an`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sous_categorie`
--
ALTER TABLE `sous_categorie`
  ADD PRIMARY KEY (`id_sous`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id_an` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `marque`
--
ALTER TABLE `marque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `sous_categorie`
--
ALTER TABLE `sous_categorie`
  MODIFY `id_sous` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `annonce_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `annonce_ibfk_2` FOREIGN KEY (`id_marque`) REFERENCES `marque` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `annonce_ibfk_3` FOREIGN KEY (`id_pers`) REFERENCES `personne` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `contient`
--
ALTER TABLE `contient`
  ADD CONSTRAINT `contient_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `categorie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contient_ibfk_2` FOREIGN KEY (`id_sous`) REFERENCES `sous_categorie` (`id_sous`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `personne`
--
ALTER TABLE `personne`
  ADD CONSTRAINT `personne_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`);

--
-- Contraintes pour la table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`id_an`) REFERENCES `annonce` (`id_an`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
