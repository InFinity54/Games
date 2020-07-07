/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE IF NOT EXISTS `games` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `games`;

CREATE TABLE IF NOT EXISTS `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date` date DEFAULT NULL,
  `on_win` tinyint(1) NOT NULL,
  `on_mac` tinyint(1) NOT NULL,
  `on_linux` tinyint(1) NOT NULL,
  `on_ps3` tinyint(1) NOT NULL,
  `on_ps4` tinyint(1) NOT NULL,
  `on_xbox360` tinyint(1) NOT NULL,
  `on_xbox_one` tinyint(1) NOT NULL,
  `on_switch` tinyint(1) NOT NULL,
  `on_android` tinyint(1) NOT NULL,
  `on_ios` tinyint(1) NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `games`;
/*!40000 ALTER TABLE `games` DISABLE KEYS */;
INSERT INTO `games` (`id`, `name`, `description`, `type`, `release_date`, `on_win`, `on_mac`, `on_linux`, `on_ps3`, `on_ps4`, `on_xbox360`, `on_xbox_one`, `on_switch`, `on_android`, `on_ios`, `company`) VALUES
	(3, 'Overwatch', 'Explorez le monde, constituez une équipe et prenez le contrôle d’objectifs au cours de combats grisants à 6 contre 6.', 'FPS', '2016-05-24', 1, 0, 0, 0, 1, 0, 1, 1, 0, 0, 'Blizzard Entertainment'),
	(4, 'League of Legends', 'Combinez une pensée stratégique, des réflexes foudroyants et du jeu d\'équipe coordonné pour écraser vos ennemis dans des escarmouches à petite échelle ou dans de vastes combats à 5 contre 5.', 'MOBA', '2009-10-27', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 'Riot Games'),
	(5, 'Fortnite', 'Construire, combattre, créer. Partez à la conquête de l\'île en arborant un tout nouveau look de héros ou de méchant.', 'FPS', '2017-07-25', 1, 1, 0, 0, 1, 0, 1, 1, 1, 1, 'Epic Games'),
	(6, 'osu!', '"Rhythm is just a *click* away!"', 'Rythme', '2007-09-16', 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 'peppy'),
	(7, 'Minecraft', 'Il y a une multitude de façons de jouer à Minecraft. C\'est un jeu ouvert dans lequel les joueurs décident eux-mêmes de ce qu\'ils veulent faire !', 'Bac à sable', '2011-11-18', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Mojang'),
	(8, 'Grand Theft Auto V', '"GTA ONLINE n\'est pas disponible pour le moment. Veuillez réessayer plus tard."', 'Action / Aventure', '2013-09-17', 1, 0, 0, 1, 1, 1, 1, 0, 0, 0, 'Rockstar Games'),
	(9, 'Portal 2', '"Tiens... c\'est vous. Ça faisait longtemps. Qu\'est-ce que vous devenez ? Pour ma part, la mort m\'a beaucoup occupée. Vous savez, depuis que vous m\'avez ASSASSINÉE."', 'Plates-formes', '2011-04-19', 1, 1, 1, 1, 0, 1, 0, 0, 0, 0, 'Valve'),
	(10, 'Half-Life 2', 'Vous incarnez le professeur Gordon Freeman, fraîchement arrivé dans une ville aux mains d\'une mystérieuse organisation appelée Le Cartel.', 'FPS', '2004-11-16', 1, 1, 1, 1, 0, 1, 0, 0, 0, 0, 'Valve'),
	(11, 'Brawlhalla', 'Brawlhalla permet à des joueurs de s\'affronter ou d\'affronter des IA sur plusieurs terrains, le but étant pour chacun de sortir son adversaire de l\'écran en l\'envoyant sur les bords de celui-ci.', 'Combat', '2017-10-17', 1, 1, 0, 0, 1, 0, 1, 1, 0, 0, 'Blue Mammoth Games'),
	(14, 'Beat Saber', 'Le jeu comprend plusieurs chansons avec jusqu\'à cinq niveaux de difficulté et chaque chanson possède un flux de blocs en approche synchronisés avec les notes de la musique. Le joueur contrôle une paire de sabres laser utilisés pour détruire les blocs.', 'Rythme', '2018-05-21', 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 'Beat Games'),
	(15, 'Half-Life', 'L\'action se situe essentiellement dans une zone désertique reculée du Nouveau-Mexique dans une installation connue sous le nom de Black Mesa Research Facility.', 'FPS', '1998-11-19', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 'Valve'),
	(16, 'Half-Life 2 Episode One', 'Après l\'explosion du téléporteur de la Citadelle, Freeman est sur le point d\'être à nouveau remis en stase par celui-ci. Des Vortigaunts interviennent pour contrecarrer le G-Man et libérer Gordon de son emprise.', 'FPS', '2006-06-01', 1, 1, 1, 1, 0, 1, 0, 0, 0, 0, 'Valve'),
	(17, 'Half-Life 2 Episode Two', 'L\'onde de choc de l\'explosion de la Citadelle a fait dérailler le train qu\'ont emprunté Freeman et Alyx pour s\'enfuir de Cité 17. Après s\'être extraits du train, Alyx et Gordon doivent rejoindre White Forest.', 'FPS', '2007-10-10', 1, 1, 1, 1, 0, 1, 0, 0, 0, 0, 'Valve'),
	(18, 'Portal', 'Chell est un personnage théoriquement anonyme et muet : elle ne dit pas un mot, on ne la voit presque jamais, et on ne voit presque jamais ses mains.', 'Réflexion', '2007-10-10', 1, 1, 1, 1, 0, 1, 0, 0, 0, 0, 'Valve'),
	(19, 'Final Fantasy VIII', 'L\'action de Final Fantasy VIII se déroule en majorité dans un monde fantasy anonyme, divisé en cinq continents.', 'Rôle', '1999-02-11', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Square Enix'),
	(20, 'Crash Bandicoot', 'Crash Bandicoot est axé sur le thème de la jungle tropicale. Le héros doit traverser les trois îles de l\'archipel fictif des îles Wumpa.', 'Plateformes', '1996-08-31', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Naughty Dog'),
	(21, 'Tom Clancy\'s Rainbow Six Siege', 'Rainbow Six Siege est un jeu de tir tactique où le joueur incarne différents agents de plusieurs unités de forces spéciales et de groupes d\'interventions qui constituent l’équipe Rainbow.', 'Tir tactique', '2015-12-01', 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 'Ubisoft'),
	(22, 'Destiny', 'L\'histoire de Destiny prend place dans le futur, au sein d\'un environnement post-apocalyptique. Il y a 700 ans de cela, une sphère mystérieuse, réfractrice et gigantesque fut découverte sur Mars.', 'Action / RPG', '2014-09-09', 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, 'Bungie'),
	(23, 'Destiny 2', 'La dernière cité sur Terre, siège de l\'Avant-garde, est attaquée par les forces Cabals de la Légion Rouge dirigées par le général militaire Cabal : Dominus Ghaul. Les gardiens ont été dépouillés de leurs pouvoirs et de leurs armes, et contraints à fuir.', 'Action / RPG', '2017-09-06', 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 'Bungie'),
	(24, 'Teamfight Tactics', 'Combattez pour la Convergence avec de nouveaux éléments, de nouveaux champions et bien plus encore.', 'Auto-battler', '2019-06-26', 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 'Riot Games'),
	(25, 'Dota 2', 'Dota 2 reprend les personnages et factions du mod originel Defense of the Ancients ainsi que les mécanismes généraux du jeu. Dota 2 se joue dans un environnement en trois dimensions, en point de vue en plongée, sur une même carte de jeu.', 'MOBA', '2013-07-09', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 'Valve'),
	(26, 'Hearthstone', 'Le nom du jeu est inspiré d\'un objet, l’Hearthstone (la « Pierre de foyer » en français), issu du MMORPG de Blizzard, World of Warcraft.', 'Cartes à collectionner', '2014-03-11', 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 'Blizzard Entertainment'),
	(27, 'Need for Speed World', 'Need for Speed World reprend le gameplay de Most Wanted (2005), Carbon et Undercover, reprenant le principe des courses illégales, du tuning et des poursuites de polices et ajoute des éléments qui sont propres au MMO, comme les habilités spéciales.', 'Course', '2010-07-27', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Electronic Arts'),
	(28, 'Need for Speed Most Wanted', 'Le joueur arrive dans la ville fictive de Rockport City au volant de sa BMW M3 GTR. Il engage une course avec Mia Townsend (Josie Maran), et montre son talent jusqu\'à ce que Cross (Dean McKenzie), un sergent vétéran de la police, lui bloque la route.', 'Course', '2005-11-11', 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Electronic Arts'),
	(29, 'Legends of Runeterra', 'Choisissez vos champions, planifiez vos actions et devenez légendaire dans Legends of Runeterra, le nouveau jeu de cartes stratégique League of Legends.', 'Cartes à collectionner', '2020-09-01', 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'Riot Games');
/*!40000 ALTER TABLE `games` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `migration_versions`;
/*!40000 ALTER TABLE `migration_versions` DISABLE KEYS */;
INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
	('20191122101105', '2019-11-22 10:11:15'),
	('20191122101944', '2019-11-22 10:19:59'),
	('20191122103008', '2019-11-22 10:30:19'),
	('20191122105411', '2019-11-22 10:54:17');
/*!40000 ALTER TABLE `migration_versions` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
