-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 12 déc. 2022 à 20:43
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `estab`
--

-- --------------------------------------------------------

--
-- Structure de la table `discussion`
--

CREATE TABLE `discussion` (
  `id` int(11) NOT NULL,
  `parent_comment` varchar(500) CHARACTER SET latin1 NOT NULL,
  `name` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `content` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `datef` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `discussion`
--

INSERT INTO `discussion` (`id`, `parent_comment`, `name`, `content`, `datef`) VALUES
(1, '', 'Meriem', 'aa', '2022-12-02 17:58:04'),
(2, '', 'noussa', 'chbik', '2022-12-02 18:14:18'),
(3, '', 'nour', 'ikeb saadek', '2022-12-03 20:37:39'),
(4, '', 'Meriem', 'qqqqq', '2022-12-03 20:53:46'),
(5, '', 'Meriem', 'eeeeeeeeeeeeeee', '2022-12-03 21:10:22'),
(6, '', 'llll', 'lll', '2022-12-03 21:24:34'),
(7, '', 'aa', 'aaaa', '2022-12-03 21:25:32'),
(8, '0', 'Meriem', 'aa\n', '2022-12-03 23:00:22'),
(9, '0', 'anas', 'yo\n', '2022-12-03 23:09:48'),
(10, '9', 'meri', 'hcbik', '2022-12-03 23:09:58'),
(11, '0', 'khaled', 'aslema', '2022-12-03 23:26:33'),
(12, '11', 'meriem', 'aslema pa', '2022-12-03 23:26:47'),
(13, '0', 'Meriem', 'aa', '2022-12-04 00:45:30'),
(14, '0', 'Meriem Mojaat', 'AA\n', '2022-12-04 00:58:18'),
(15, '14', 'aa', 'aa', '2022-12-04 01:04:18'),
(16, '0', 'Meriem', 'aaaaaaaaaaaaaaaaaaaaaaaaa', '2022-12-04 01:11:01'),
(17, '16', 'o', 'yoo', '2022-12-04 01:40:01'),
(18, '0', 'rami', 'winekk', '2022-12-04 14:44:53'),
(19, '18', 'meriem', 'hani nhadher fi rohi', '2022-12-04 14:45:11'),
(20, '0', 'VVM..', 'CVCC', '2022-12-04 15:27:56'),
(21, '0', 'jawher', 'aslemaaaa', '2022-12-05 17:17:29'),
(22, '21', 'Meriem', 'yooooooooooooooo', '2022-12-05 17:17:42'),
(23, '0', 'ilef', 'aslemaaaa', '2022-12-07 09:48:13'),
(24, '23', 'meriem', 'bonjour', '2022-12-07 09:48:22'),
(25, '', 'LINDA', 'bonjoour', '2022-12-07 10:32:29'),
(26, '25', 'meriem', 'sbeh el khir madame', '2022-12-07 10:32:45');

-- --------------------------------------------------------

--
-- Structure de la table `exchange`
--

CREATE TABLE `exchange` (
  `idexchange` int(255) NOT NULL,
  `iduser` int(255) NOT NULL,
  `idproduct` int(255) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `exchange`
--

INSERT INTO `exchange` (`idexchange`, `iduser`, `idproduct`, `productname`, `picture`) VALUES
(15, 22, 22, 'vff', 'img_6.jpg'),
(16, 22, 1, 'ce', '1'),
(17, 22, 1, 'mm', '1'),
(18, 44, 22, 'fr', '22'),
(19, 11, 7, 'gt', '7'),
(20, 44, 11, 'kk', '11'),
(21, 44, 252, 'll', '252');

-- --------------------------------------------------------

--
-- Structure de la table `points`
--

CREATE TABLE `points` (
  `id_point` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nb_points` int(11) NOT NULL,
  `idexchange` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `points`
--

INSERT INTO `points` (`id_point`, `id_user`, `nb_points`, `idexchange`) VALUES
(8, 1, 1, 0),
(9, 1, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
   `points` int(11) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phonenumb` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`iduser`, `firstName`, `lastName`, `address`, `phonenumb`, `email`, `password`) VALUES
(1, 'Meriem', 'Mojaat', 'Ariana', -11111, 'mojaat.meriem@esprit.tn', 'meriem'),
(2, 'Meriem', 'Mojaat', 'Ariana', 1111, 'mojaat.meriem@esprit.tn', 'meriem'),
(3, 'a', 'd', 'd', 123456789, 'mojaat.meriem@esprit.tn', 'meriem');

-- --------------------------------------------------------

--
-- Structure de la table `wishlist`
--

CREATE TABLE `wishlist` (
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `wishlist`
--

INSERT INTO `wishlist` (`userid`, `productid`) VALUES
(2, 1),
(2, 2),
(2, 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `exchange`
--
ALTER TABLE `exchange`
  ADD PRIMARY KEY (`idexchange`);

--
-- Index pour la table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id_point`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- Index pour la table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`userid`,`productid`),
  ADD KEY `productid` (`productid`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `discussion`
--
ALTER TABLE `discussion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `exchange`
--
ALTER TABLE `exchange`
  MODIFY `idexchange` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `points`
--
ALTER TABLE `points`
  MODIFY `id_point` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`iduser`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
