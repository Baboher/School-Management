-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 28 fév. 2026 à 00:42
-- Version du serveur : 8.0.20
-- Version de PHP : 8.5.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `school management`
--

-- --------------------------------------------------------

--
-- Structure de la table `timetable`
--

CREATE TABLE `timetable` (
  `id_timetable` int NOT NULL,
  `day` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `time` time NOT NULL,
  `id_class` int NOT NULL,
  `id_subject` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id_timetable`),
  ADD KEY `FK_Time_Class` (`id_class`),
  ADD KEY `FK_Time_Subject` (`id_subject`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id_timetable` int NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `timetable`
--
ALTER TABLE `timetable`
  ADD CONSTRAINT `FK_Time_Class` FOREIGN KEY (`id_class`) REFERENCES `class` (`id_class`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_Time_Subject` FOREIGN KEY (`id_subject`) REFERENCES `subject` (`id_subject`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
