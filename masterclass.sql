-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 14 Février 2017 à 22:38
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `masterclass`
--

-- --------------------------------------------------------

--
-- Structure de la table `morceaux`
--

CREATE TABLE `morceaux` (
  `idmorceaux` int(255) NOT NULL,
  `jour` varchar(50) NOT NULL,
  `artiste` varchar(50) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `piano` varchar(10) NOT NULL,
  `chant` varchar(10) NOT NULL,
  `batterie` varchar(10) NOT NULL,
  `trompette` varchar(10) NOT NULL,
  `saxophone` varchar(10) NOT NULL,
  `contrebasse` varchar(10) NOT NULL,
  `participant1` varchar(100) NOT NULL,
  `participant2` varchar(100) NOT NULL,
  `participant3` varchar(100) NOT NULL,
  `participant4` varchar(100) NOT NULL,
  `participant5` varchar(100) NOT NULL,
  `participant6` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `morceaux`
--

INSERT INTO `morceaux` (`idmorceaux`, `jour`, `artiste`, `titre`, `piano`, `chant`, `batterie`, `trompette`, `saxophone`, `contrebasse`, `participant1`, `participant2`, `participant3`, `participant4`, `participant5`, `participant6`) VALUES
(46, 'jeudi', 'Sylvie Vartan', 'Tout les garcon et les filles', 'off', 'on', 'off', 'on', 'off', 'off', 'Giauffret Vincent', 'Salvat JL', 'null', 'null', 'null', 'null'),
(45, 'lundi', 'lolo', 'LULU', 'off', 'off', 'on', 'off', 'off', 'off', 'Alacaraz Mathieu', 'null', 'null', 'null', 'null', 'null'),
(43, 'mardi', 'Musa Mura', 'So  Sick', 'off', 'on', 'off', 'off', 'on', 'off', 'Fontaine Coralie', 'Giauffret Vincent', 'null', 'null', 'null', 'null'),
(44, 'mercredi', 'MagicSystem', '1erGaou', 'off', 'off', 'off', 'on', 'off', 'off', 'Giauffret Vincent', 'null', 'null', 'null', 'null', 'null'),
(42, 'lundi', 'ACDC', 'Back in black', 'off', 'on', 'on', 'on', 'off', 'off', 'Alacaraz Mathieu', 'Giauffret Vincent', 'Fontaine Coralie', 'null', 'null', 'null');

-- --------------------------------------------------------

--
-- Structure de la table `utilisation`
--

CREATE TABLE `utilisation` (
  `idUser` int(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `instrument` varchar(100) NOT NULL,
  `navette` varchar(10) NOT NULL,
  `formation` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisation`
--

INSERT INTO `utilisation` (`idUser`, `nom`, `prenom`, `email`, `pass`, `age`, `instrument`, `navette`, `formation`) VALUES
(16, 'Fontaine', 'Elodie', 'elo.fontaine96@gmail.com', 'tiloun1996', '1996-11-05', 'Piano', 'Oui', 'appronfondissement'),
(13, 'Giauffret', 'Vincent', 'vinc.giauffret@hotmail.fr', '12345', '1995-06-13', 'Saxophone', 'Oui', 'complete'),
(15, 'Alacaraz', 'Mathieu', 'MA@sfr.fr', '12345', '1995-06-13', 'Saxophone', 'Oui', 'complete'),
(20, 'Fontaine', 'Coralie', 'coco@hotmail.fr', '12345', '2002-03-01', 'Chant', 'Oui', 'complete'),
(21, 'Guarnieri', 'Luca', 'lulu@jiji.fr', '12345', '1999-06-03', 'Trompette', 'Non', 'complete'),
(22, 'Salvat', 'JL', 'jl@hh.fr', '12345', '1996-05-13', 'Chant', 'Oui', 'complete');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `morceaux`
--
ALTER TABLE `morceaux`
  ADD PRIMARY KEY (`idmorceaux`);

--
-- Index pour la table `utilisation`
--
ALTER TABLE `utilisation`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `morceaux`
--
ALTER TABLE `morceaux`
  MODIFY `idmorceaux` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT pour la table `utilisation`
--
ALTER TABLE `utilisation`
  MODIFY `idUser` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
