-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  sam. 08 déc. 2018 à 19:02
-- Version du serveur :  10.1.34-MariaDB
-- Version de PHP :  7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `titre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `resume` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `auteur` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `titre`, `resume`, `auteur`, `message`) VALUES
(1, 'a', 'a', 'a', 'a'),
(2, 'titre', 'resume', 'auteur', 'message'),
(3, 'e', 'r', 'e', 'ddd');

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `nom_classe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nom_filiere` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nom_dep` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`nom_classe`, `nom_filiere`, `nom_dep`) VALUES
('licence3', 'imformatique', 'math info'),
('nom_classe', 'h', 'h');

-- --------------------------------------------------------

--
-- Structure de la table `comptable`
--

CREATE TABLE `comptable` (
  `idcomp` int(100) NOT NULL,
  `Prenom` varchar(70) NOT NULL,
  `Nom` varchar(70) NOT NULL,
  `sexe` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comptable`
--

INSERT INTO `comptable` (`idcomp`, `Prenom`, `Nom`, `sexe`) VALUES
(1, 'pape', 'seck', 'm');

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

CREATE TABLE `contenir` (
  `nom_ue` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nom_mod` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `contenir`
--

INSERT INTO `contenir` (`nom_ue`, `nom_mod`) VALUES
('0', '0'),
('0', '0'),
('fondementaux algo et bd', ''),
('p', '');

-- --------------------------------------------------------

--
-- Structure de la table `enseigner`
--

CREATE TABLE `enseigner` (
  `matricule` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_mod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lnaiss` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dnaiss` date NOT NULL,
  `adr` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sexe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tel` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nation` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nom_classe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `idparent` int(11) NOT NULL,
  `nume` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`nom`, `prenom`, `lnaiss`, `dnaiss`, `adr`, `sexe`, `tel`, `email`, `photo`, `nation`, `pass`, `nom_classe`, `idparent`, `nume`) VALUES
('seck', 'matar', '', '2018-12-12', 'dakar', 'M', 78654321, 'mat@gmail.com', '', 'senegalaise', 'passer', 'licence3', 1, 98);

-- --------------------------------------------------------

--
-- Structure de la table `inscrire`
--

CREATE TABLE `inscrire` (
  `id_classe` int(11) NOT NULL,
  `nume` int(11) NOT NULL,
  `date_ins` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `nom_module` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `credit_module` int(11) NOT NULL,
  `coef_module` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`nom_module`, `credit_module`, `coef_module`) VALUES
('algo et langage c', 36, 4),
('java', 5, 4),
('P', 6, 7);

-- --------------------------------------------------------

--
-- Structure de la table `noter`
--

CREATE TABLE `noter` (
  `nom_module` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nume` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type_eva` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date_eva` date NOT NULL,
  `session_eva` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `note` double NOT NULL,
  `semestre` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `noter`
--

INSERT INTO `noter` (`nom_module`, `nume`, `type_eva`, `date_eva`, `session_eva`, `note`, `semestre`) VALUES
('0', '0', '', '0000-00-00', '', 0, '1'),
('', '0', '', '0000-00-00', '', 34, ''),
('', '0', '', '0000-00-00', '', 67, ''),
('', '0', '', '0000-00-00', '', 12, ''),
('', '0', '', '0000-00-00', '', 97, ''),
('', '0', '', '0000-00-00', '', 65, ''),
('', '0', '', '0000-00-00', '', 34, ''),
('', '0', '', '0000-00-00', '', 23, ''),
('', '0', '', '0000-00-00', '', 45, ''),
('', 'n2', '', '0000-00-00', '', 2, ''),
('', 'n4', '', '0000-00-00', '', 1, ''),
('', 'n1', '', '0000-00-00', '', 2, ''),
('', 'n3', '', '0000-00-00', '', 3, ''),
('', 'n2', '', '0000-00-00', '', 2, ''),
('', 'n4', '', '0000-00-00', '', 1, ''),
('', 'n1', '', '0000-00-00', '', 2, ''),
('', 'n3', '', '0000-00-00', '', 3, ''),
('', 'n2', '', '0000-00-00', '', 2, ''),
('', 'n4', '', '0000-00-00', '', 9, ''),
('', 'n1', '', '0000-00-00', '', 9, ''),
('', 'n3', '', '0000-00-00', '', 8, ''),
('java', 'n2', 'examen', '2018-03-06', 'rattrapage', 4, '5'),
('java', 'n4', 'examen', '2018-03-06', 'rattrapage', 6, '5'),
('java', 'n1', 'examen', '2018-03-06', 'rattrapage', 7, '5'),
('java', 'n3', 'examen', '2018-03-06', 'rattrapage', 8, '5'),
('algo', 'n2', 'examen', '2018-03-08', 'rattrapage', 2, '6'),
('algo', 'n4', 'examen', '2018-03-08', 'rattrapage', 98, '6'),
('algo', 'n1', 'examen', '2018-03-08', 'rattrapage', 7, '6'),
('algo', 'n3', 'examen', '2018-03-08', 'rattrapage', 90, '6');

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `idpaye` int(100) NOT NULL,
  `type` varchar(70) NOT NULL,
  `date` date NOT NULL,
  `montant` int(100) NOT NULL,
  `idcomp` int(100) NOT NULL,
  `nume` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `parent`
--

CREATE TABLE `parent` (
  `idparent` int(11) NOT NULL,
  `Prenom` varchar(70) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `sexe` varchar(2) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `TEL` int(12) NOT NULL,
  `adresse` text NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `parent`
--

INSERT INTO `parent` (`idparent`, `Prenom`, `Nom`, `sexe`, `mail`, `TEL`, `adresse`, `password`) VALUES
(1, 'MATAR', 'SECK', 'M', 'MATAR@', 0, '', ''),
(2, 'omar', 'seck', 'M', 'omar@gmail.com', 778796543, 'keur massar', 'mt');

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

CREATE TABLE `professeur` (
  `matricule` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lnaiss` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dnaiss` date NOT NULL,
  `adr` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sexe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tel` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nation` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `specialite` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`matricule`, `nom`, `prenom`, `lnaiss`, `dnaiss`, `adr`, `sexe`, `tel`, `email`, `photo`, `nation`, `specialite`, `pass`) VALUES
('8', 'seck', 'dame', 'dakar', '2018-12-31', 'pikine', 'M', 778986543, 'dame@gmail.com', 'header-footer.png', 'senegaaise', 'telecom', 'passer'),
('bamba', 'ndiaye', 'bamba', 'bamba', '2018-03-15', 'bamba', 'F', 5576, 'mack@gmail.com', 'imagesjgj.jpg', 'senegalaise', 'reseau', 'bamba'),
('bame', 'bame', 'monsieur', 'bame', '2017-02-11', 'bame', '', 773074736, 'la@h.do', 'ghjf.jpg', 'senegalaise', 'dev web', 'pass'),
('gueye', 'gueye', 'gueye', 'gueye', '2017-02-11', 'gueye', 'M', 888, 'la@h.do', 'index.jpg', 'senegalaise', 'H', 'gueye'),
('ndong', 'ndong', 'ndong', 'ndong', '2017-02-11', 'ndong', 'M', 773074736, 'la@h.do', 'gfgfgf.jpg', 'senegalaise', 'java', 'ndong'),
('seck', 'seck', 'seck', 'seck', '2018-02-28', 'seck', 'M', 0, 'mack@gmail.com', 'imagesjgj.jpg', 'seck', 'seck', 'seck');

-- --------------------------------------------------------

--
-- Structure de la table `suivre`
--

CREATE TABLE `suivre` (
  `id_classe` int(11) NOT NULL,
  `id_mod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ue`
--

CREATE TABLE `ue` (
  `nom_ue` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `credit_ue` int(11) NOT NULL,
  `coef_ue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `ue`
--

INSERT INTO `ue` (`nom_ue`, `credit_ue`, `coef_ue`) VALUES
('a', 1, 0),
('fondementaux algo et bd', 80, 5),
('licence 4', 0, 0),
('licence1', 0, 0),
('master3', 0, 0),
('math', 22, 0),
('p', 9, 0);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `login` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lnaiss` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dnaiss` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `adr` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sexe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tel` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nation` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`login`, `nom`, `prenom`, `lnaiss`, `dnaiss`, `adr`, `sexe`, `tel`, `email`, `photo`, `nation`, `pass`) VALUES
('2R', 'ge', 'grge', 'he', 'jjj', 'jjj', 'f', 23425526, 'lzlzlzlzl', '', 'sds', 'passer'),
('mack', 'f', 'ff', 'fff', 'ff', 'ggg', 'g', 4, 'mack@gmail.com', '', 'jjj', 'passe'),
('macksene', 'm', 'm', 'm', 'm', 'm', 'm', 2222222, 'm', '', 'm', 'passer');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`nom_classe`);

--
-- Index pour la table `comptable`
--
ALTER TABLE `comptable`
  ADD PRIMARY KEY (`idcomp`);

--
-- Index pour la table `contenir`
--
ALTER TABLE `contenir`
  ADD KEY `id_ue` (`nom_ue`,`nom_mod`);

--
-- Index pour la table `enseigner`
--
ALTER TABLE `enseigner`
  ADD KEY `matricule` (`matricule`,`id_mod`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`nume`),
  ADD UNIQUE KEY `nume` (`nume`),
  ADD KEY `nom_classe` (`nom_classe`),
  ADD KEY `a` (`idparent`);

--
-- Index pour la table `inscrire`
--
ALTER TABLE `inscrire`
  ADD KEY `id_classe` (`id_classe`,`nume`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`nom_module`);

--
-- Index pour la table `noter`
--
ALTER TABLE `noter`
  ADD KEY `id_ue` (`nom_module`,`nume`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`idpaye`),
  ADD KEY `f2` (`idcomp`),
  ADD KEY `f3` (`nume`);

--
-- Index pour la table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`idparent`);

--
-- Index pour la table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`matricule`);

--
-- Index pour la table `suivre`
--
ALTER TABLE `suivre`
  ADD KEY `id_classe` (`id_classe`,`id_mod`);

--
-- Index pour la table `ue`
--
ALTER TABLE `ue`
  ADD PRIMARY KEY (`nom_ue`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`login`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `a` FOREIGN KEY (`idparent`) REFERENCES `parent` (`idparent`);

--
-- Contraintes pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD CONSTRAINT `f2` FOREIGN KEY (`idcomp`) REFERENCES `comptable` (`idcomp`),
  ADD CONSTRAINT `f3` FOREIGN KEY (`nume`) REFERENCES `etudiant` (`nume`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
