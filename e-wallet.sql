-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 28 juil. 2022 à 15:55
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e-wallet`
--

-- --------------------------------------------------------

--
-- Structure de la table `money`
--

CREATE TABLE `money` (
  `ID` int(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `money` int(20) DEFAULT NULL,
  `mobilemoney` varchar(20) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `money`
--

INSERT INTO `money` (`ID`, `name`, `money`, `mobilemoney`, `phone`, `Date`) VALUES
(NULL, 'Aurore', 4560, 'MTN Mobile Money', 786648764, '2022-07-28 11:58:58');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID`, `name`, `phone`, `birthdate`, `gender`, `email`, `password`, `Time`) VALUES
(1, 'Aurore', 2022, '0000-00-00', '0786648764', 'uwitonzeaurore@gmail', 'hbuhygyuhbjknh', '2022-07-28 09:35:02'),
(2, 'Aurore', 2022, '0000-00-00', '0786648764', 'uwitonzeaurore@gmail', 'hbyuhguyhuihuij', '2022-07-28 10:02:16'),
(3, 'Aurore', 2022, '0000-00-00', '0786648764', 'uwitonzeaurore@gmail', 'dfgtrhtyjyuikut', '2022-07-28 10:33:15'),
(4, 'Aurore', 2022, '0000-00-00', '0786648764', 'uwitonzeaurore@gmail', 'dfgtrhtyjyuikut', '2022-07-28 10:33:51'),
(5, 'Aurore', 2022, '0000-00-00', '0786648764', 'uwitonzeaurore@gmail', 'fvfdgrgbrgbrfv', '2022-07-28 10:36:17');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
