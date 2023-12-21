-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 21 déc. 2023 à 22:55
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
('Boucheron', 'Raphaël', '1', '2004-05-12', 'raphaelboucheron3@gmail.com', '0638910234', '$2y$10$gypxVa6NXVAMxT3JOqUuBe4BIVwAsaymEJuLttBkGhz6yR19/pKK6', 33),
('boot', 'sanjy', '1', '2023-12-11', 'sanjy@gmail.com', '0789390496', '$2y$10$deVznVeh1olE6X5QKBttSeXRUJvcRmHHbXTpmTstPGkg1./aiWpOO', 34),
('jehu', 'yalou', '2', '2023-12-19', 'yaelle@gmail.com', '9999', '$2y$10$3GPaeRfNf2xn8eZ11eEJp.nmlUsLUYpHsjEApyKUZKzN2VnEJBKIu', 37),
('Raphael', 'Boucheron', '1', '2004-09-12', 'admin@gmail.com', '3945898', '$2y$10$fbnepJ8QEyCf2c17QPw3EuhFx3CWRHx/XGs7QtLO2agAjqe3DLQyy', 38),
('Boucheron', 'Raphael', '1', '2004-05-12', 'raphaelboucheron.college@outlook.fr', '05950694', '$2y$10$gW8dzMmPmcRz//CeyY1xdejgymVScTz8T.XxjDFADXkqVXuf7mud.', 39),
('Boucheron', 'Raphael', '1', '1999-12-18', 'raphelle@gmail.com', '854930', '$2y$10$bcRVwc1saJ8w5P5AHA8XFuT3xk2qdKhu9oXvuhKbdpAY9T5cTccv2', 40),
('Bamba', 'annick', '2', '2003-11-30', 'annick@gmail', '078787832', '$2y$10$Cz3vCadz3SSmZwaRGaHf4eq7a7eSCZQecavfiRTiXk9PwIrsCheUW', 41),
('Boucheron', 'Raphael', '1', '2003-12-19', 'raphaelboudbcjkecheron@gmail.com', '6789098', '$2y$10$lcbcUX5VdHY5.fv7geWeI.V2X0TkSQwWATsF3A97YQAsSwoJkBzf.', 42);

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `nom`, `prenom`, `email`, `telephone`, `password`) VALUES
(1, 'Boucheron', 'Raphael', 'raphaelboucheron@gmail.com', '0883839', '$2y$10$3GPaeRfNf2xn8eZ11eEJp.nmlUsLUYpHsjEApyKUZKzN2VnEJBKIu');

-- --------------------------------------------------------

--
-- Structure de la table `Plane`
--

CREATE TABLE `Plane` (
  `modele` varchar(35) NOT NULL,
  `marque` varchar(35) NOT NULL,
  `immatriculation` varchar(25) NOT NULL,
  `type` varchar(10) NOT NULL,
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Plane`
--

INSERT INTO `Plane` (`modele`, `marque`, `immatriculation`, `type`, `id`, `image`, `description`) VALUES
('Yamaha_B', 'Yamaha', 'EF9028', 'UML', 1, 'b.jpg', '0'),
('Yamaha', 'Yamaha', 'EDGHEO', 'UML', 2, 'b.jpg', '0'),
('Pipistrel Sinus', 'Pipistrel', '57GH39', 'Aile haute', 3, 'PipistrelSinus.jpeg', 'Le Pipistrel Sinus est un ULM à aile haute doté d\'une configuration en tandem, ce qui signifie que les sièges du pilote et du passager sont disposés en tandem plutôt qu\'en côte à côte. Il est réputé pour son efficacité énergétique et son design aérodynamique. Le Sinus est souvent utilisé pour des vols de loisir et de tourisme en raison de sa stabilité et de ses performances.'),
('Quicksilver MX', 'Quicksilver Aircraft', '90GI38', 'Aile haute', 4, 'QuicksilverMX.webp', 'Le Quicksilver MX est un ULM classique à aile haute, très populaire dans le domaine de l\'aviation légère. Il est caractérisé par sa conception simple et légère, facilitant son assemblage et son pilotage. Le Quicksilver MX est souvent utilisé comme ULM d\'initiation au pilotage en raison de sa facilité de manipulation.'),
('Flight Design CT', 'Flight Design', '0099OJ', 'Aile basse', 5, 'FlightDesignCT.jpeg', 'Le Flight Design CT est un ULM moderne à aile basse. Il se distingue par son design élégant et ses performances de vol efficaces. Le CT est souvent choisi pour les vols de croisière, et certains modèles peuvent même être équipés de moteurs rotatifs. Il est réputé pour sa cabine confortable et son instrumentation avancée.'),
('Aeroprakt A-22 Foxbat', ' Aeroprakt', 'OO8765', 'Aile haute', 6, 'AeropraktA-22Foxbat.jpg', 'L\'Aeroprakt A-22 Foxbat est un ULM à aile haute conçu pour offrir une excellente visibilité et une manipulation facile. Il est adapté aux pilotes débutants et expérimentés. Le Foxbat est souvent utilisé pour des vols de formation et de loisir. Son design moderne et sa construction légère en font un choix populaire dans le monde de l\'aviation légère.');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `date` date NOT NULL,
  `duree` varchar(10) NOT NULL,
  `adherent` int(11) DEFAULT NULL,
  `plane` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`date`, `duree`, `adherent`, `plane`) VALUES
('2023-12-19', '30', 41, 2),
('2023-12-19', '30', 33, 2),
('2023-12-19', '30', 34, 1),
('2023-12-19', '30', 42, 1),
('2023-12-20', '30', 40, 2),
('2023-12-20', '30', 34, 1),
('2023-12-21', '30', 42, 2),
('2023-12-21', '30', 33, 1),
('2023-12-21', '30', 42, 2),
('2023-12-21', '30', 33, 1),
('2023-12-22', '30', 37, 1);

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
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`telephone`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `Plane`
--
ALTER TABLE `Plane`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
