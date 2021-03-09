-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 09 mars 2021 à 16:42
-- Version du serveur : 5.7.32
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données : `exam-symfony`
--

---

--
-- Structure de la table `character`
--

CREATE TABLE `character` (
`id` int(11) NOT NULL,
`name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
`description` longtext COLLATE utf8mb4_unicode_ci,
`strength` smallint(6) NOT NULL,
`health_point` smallint(6) NOT NULL,
`defense` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

---

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
`id` int(11) NOT NULL,
`email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
`subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
`message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
`created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'test@test.com', 'Ceci est un test', 'Un message de test, pouvant être long, ou non. Celui-ci ne l\'est pas :) .', '2021-03-09 13:15:33');

---

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
`version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
`executed_at` datetime DEFAULT NULL,
`execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210309125801', '2021-03-09 12:58:44', 129);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `character`
--
ALTER TABLE `character`
ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
ADD PRIMARY KEY (`version`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `character`
--
ALTER TABLE `character`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
