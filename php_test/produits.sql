-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 24 mars 2025 à 13:13
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `produits`
--

-- --------------------------------------------------------

--
-- Structure de la table `card_information`
--

CREATE TABLE `card_information` (
  `image` varchar(25) NOT NULL,
  `prix` varchar(25) NOT NULL,
  `title` varchar(25) NOT NULL,
  `detail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `card_information`
--

INSERT INTO `card_information` (`image`, `prix`, `title`, `detail`) VALUES
('1.jpg', '1,199.00 Dhs', 'Hifinit', 'Hifinit TV 32\" HD FRAMELESS - '),
('2.jpg', '849.00 Dhs', 'Solac', 'Solac Aspirateur balai sans fi'),
('3.jpg', '165.00 Dhs', 'DELL Chargeur', 'DELL Chargeur Adaptateur 65W A'),
('4.jpg', '1,349.00 Dhs', 'Samsung', 'Samsung Galaxy A06 - 6,7\" - 12'),
('5.jpg', '199.00 Dhs', 'Table', 'Table d\'appoint nordique en fo'),
('6.jpg', '55.00 Dhs', 'Boîte', 'Boîte de Rangement pour Vêteme'),
('7.jpg', '56.99 Dhs', 'VR', 'VR Box Lunettes Réalité Virtue'),
('8.jpg', '44.00 Dhs', 'Pommeau de douche ', 'Pommeau de douche haute pressi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
