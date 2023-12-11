-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 11 déc. 2023 à 13:22
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sae303`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

CREATE TABLE `adherent` (
  `Nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `civilité` varchar(10) NOT NULL,
  `naissance` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `password` varchar(80) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `adherent`
--

INSERT INTO `adherent` (`Nom`, `prenom`, `civilité`, `naissance`, `email`, `telephone`, `password`, `id`) VALUES
('Bamba', 'Annick', '2', '2003-11-30', 'bambaannick5@gmail.com', '0789390495', '$2y$10$4CWD0wR34oeW6ZwjjBrAVuRzg2Jwr/Ly4tOWMUAuO/BYDOmGHoswS', 29),
('Boucheron', 'Raphael', '1', '2004-05-12', 'raphaelboucheron3@gmail.com', '0638910234', '$2y$10$gypxVa6NXVAMxT3JOqUuBe4BIVwAsaymEJuLttBkGhz6yR19/pKK6', 33),
('boot', 'sanjy', '1', '2023-12-11', 'sanjy@gmail.com', '0789390496', '$2y$10$deVznVeh1olE6X5QKBttSeXRUJvcRmHHbXTpmTstPGkg1./aiWpOO', 34),
('cccc', 'wwww', '2', '2023-12-11', 'admin@admin.com', '05950692', '$2y$10$qetun3Ne3fvvs8lfowE3YeIzwF9kVUBGxzhstF0LyPLrFJmk/QON.', 35),
('sdtius', 'dytsyu', '1', '2023-12-11', 'dyud@gmail.com', '09950695', '$2y$10$2gTYe02RHTlsdZtzY6ZVoetle6VyoTOAgxjtLuV5wQF1HYup9GzBS', 36);

-- --------------------------------------------------------

--
-- Structure de la table `Plane`
--

CREATE TABLE `Plane` (
  `modele` varchar(35) NOT NULL,
  `marque` varchar(35) NOT NULL,
  `immatriculation` varchar(25) NOT NULL,
  `type` varchar(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Plane`
--

INSERT INTO `Plane` (`modele`, `marque`, `immatriculation`, `type`, `id`) VALUES
('Yamaha_B', 'Yamaha', 'EF9028', 'UML', 1);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `date` datetime NOT NULL,
  `duree` varchar(10) NOT NULL,
  `adherent` int(11) DEFAULT NULL,
  `plane` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adherent`
--
ALTER TABLE `adherent`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_contrainte_email` (`email`),
  ADD UNIQUE KEY `unique_contrainte_telephone` (`telephone`);

--
-- Index pour la table `Plane`
--
ALTER TABLE `Plane`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD KEY `adherent` (`adherent`),
  ADD KEY `plane` (`plane`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adherent`
--
ALTER TABLE `adherent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `Plane`
--
ALTER TABLE `Plane`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `adherent` FOREIGN KEY (`adherent`) REFERENCES `adherent` (`id`),
  ADD CONSTRAINT `plane` FOREIGN KEY (`plane`) REFERENCES `Plane` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
