-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 24 fév. 2023 à 06:27
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cdi`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@mail.com', '905f0a2a11eef8797c1dcd15f9fa6506');

-- --------------------------------------------------------

--
-- Structure de la table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `fullname` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp(),
  `IsRead` int(11) DEFAULT NULL COMMENT '0:unread, 1:read'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contactus`
--

INSERT INTO `contactus` (`id`, `fullname`, `email`, `phone`, `message`, `last_update`, `IsRead`) VALUES
(1, 'Kotozafy Alexis', 'kotozafy@gmail.com', 345698231, 'Test fandehany Rakotozafy', '2023-01-02 15:43:57', 0),
(2, 'Rasoa Zafy', 'rasoa@gmail.com', 345687920, 'test ihany', '2023-01-03 05:11:37', 1),
(3, 'Razafy', 'razafy@mail.com', 345698721, 'milamina izy zany an!', '2023-01-25 16:57:28', NULL),
(4, 'Kotozafy', 'kotozafy@gmail.com', 324568978, 'test hono i Andry', '2023-02-01 13:09:16', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `demandeoffers`
--

CREATE TABLE `demandeoffers` (
  `id` int(11) NOT NULL,
  `idOffers` int(11) DEFAULT NULL,
  `idUsers` int(11) DEFAULT NULL,
  `society` text DEFAULT NULL,
  `status` int(3) DEFAULT NULL COMMENT '0:refusé, 1:loading, 2:accepted',
  `last_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `demandeoffers`
--

INSERT INTO `demandeoffers` (`id`, `idOffers`, `idUsers`, `society`, `status`, `last_update`) VALUES
(6, 1, 4, 'Th Society', 1, '2023-02-15 07:46:33');

-- --------------------------------------------------------

--
-- Structure de la table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `society` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `typeContrat` varchar(20) DEFAULT NULL,
  `status` int(2) DEFAULT 0,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `offers`
--

INSERT INTO `offers` (`id`, `title`, `society`, `description`, `typeContrat`, `status`, `last_update`) VALUES
(1, 'Projet Akoho Gasy', 'Th Society', 'Mitady mpitaiza akoho gasy 20 amin ny toerana ireto : Tôlagnaro, Lafitsinana, Andranara, Ankarefo, Manatantely, Soanierana, Ifarantsa,Fanjahira', 'CDI', 1, '2023-01-25 15:16:53');

-- --------------------------------------------------------

--
-- Structure de la table `pageweb`
--

CREATE TABLE `pageweb` (
  `id` int(11) NOT NULL,
  `pageType` text DEFAULT NULL,
  `pageTitle` text DEFAULT NULL,
  `pageDescription` mediumtext DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp(),
  `disponibleTime` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pageweb`
--

INSERT INTO `pageweb` (`id`, `pageType`, `pageTitle`, `pageDescription`, `email`, `phone`, `last_update`, `disponibleTime`) VALUES
(1, 'aboutus', 'About Us', '<ul style=\"padding: 0px; margin-right: 0px; margin-bottom: 1.313em; margin-left: 1.655em;\" times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" center;=\"\" background-color:=\"\" rgb(255,=\"\" 246,=\"\" 246);\"=\"\"><li style=\"text-align: left;\"><font color=\"#000000\">The Job Search System is based on the idea of providing an automated system. This saves additional time and overhead to perform the action. The new system is to control the following information; patient information, room availability, staff and operating room schedules, and patient invoices. These services are to be provided in an efficient, cost effective manner, with the goal of reducing the time and resources currently required for such tasks.</font></li><li style=\"text-align: left;\"><font color=\"#000000\">A significant part of the operation of any society involves the acquisition, management and timely retrieval of great volumes of information. This information typically involves; job offers information and offers history, staff information, room and ward scheduling, staff scheduling, operating theater scheduling and various facilities waiting lists. All of this information must be managed in an efficient and cost wise fashion so that an institution resources may be effectively utilized Th Clinic will automate the management of the job offer it more efficient and error free. It aims at standardizing data, consolidating data ensuring data integrity and reducing inconsistencies. </font></li></ul>', '', 0, '2023-01-25 16:43:27', ''),
(2, 'contact', 'Contact Details', 'Sambaina, Jerosalema Carter', 'thsociety@gmail.com', 345654852, '2023-01-25 16:43:39', '7:00 AM to 5:00 PM');

-- --------------------------------------------------------

--
-- Structure de la table `rh`
--

CREATE TABLE `rh` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `society` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT '123456789',
  `last_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rh`
--

INSERT INTO `rh` (`id`, `name`, `society`, `address`, `phone`, `email`, `password`, `last_update`) VALUES
(1, 'Rakoto', 'Th Society', 'Sambaina', 345689751, 'rakoto@gmail.com', 'efa9c3023d4d147ef1c796ccef6dc75b', '2023-01-25 14:42:37');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `file` text DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `fullname`, `gender`, `email`, `password`, `address`, `phone`, `image`, `file`, `last_update`) VALUES
(4, 'Rabe', 'male', 'rabe@gmail.com', 'cc91a9c59dcfe2907ee7cca993a57610', 'Vohitsoa', '0314566958', '1674650272_3ec82854dead44b7f454.jpg', NULL, '2023-01-25 12:37:52'),
(5, 'Hacker', 'female', 'hacker@mail.com', 'c420398165584809b17e1d9a5ce460c9', 'Antsapanimahazo', '0324569871', '1674650732_bb918a132b699f800de5.jpg', NULL, '2023-01-25 12:45:32');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `demandeoffers`
--
ALTER TABLE `demandeoffers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pageweb`
--
ALTER TABLE `pageweb`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rh`
--
ALTER TABLE `rh`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `demandeoffers`
--
ALTER TABLE `demandeoffers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `pageweb`
--
ALTER TABLE `pageweb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `rh`
--
ALTER TABLE `rh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
