-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 22 mai 2019 à 03:40
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `recette`
--

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

DROP TABLE IF EXISTS `recette`;
CREATE TABLE IF NOT EXISTS `recette` (
  `IDRECETTE` int(11) NOT NULL AUTO_INCREMENT,
  `IDUTILISATEURS` int(11) NOT NULL,
  `TITRE` char(32) NOT NULL,
  `TEMPPREPARATION` varchar(255) NOT NULL,
  `TEMPCUISSON` varchar(255) NOT NULL,
  `NOMBREPERSONNE` int(11) NOT NULL,
  `PHOTOCOUVERTURE` varchar(255) NOT NULL,
  `PHOTO1` varchar(255) NOT NULL,
  `PHOTO2` varchar(255) NOT NULL,
  `PHOTO3` varchar(255) NOT NULL,
  `ETAPE1` varchar(255) NOT NULL,
  `ETAPE2` varchar(255) DEFAULT NULL,
  `ETAPE3` varchar(255) NOT NULL,
  `ETAPE4` varchar(255) NOT NULL,
  `ETAPE5` varchar(255) NOT NULL,
  `ETAPE6` varchar(255) NOT NULL,
  `ETAPE7` varchar(255) NOT NULL,
  `ETAPE8` varchar(255) NOT NULL,
  `ETAPE9` varchar(255) NOT NULL,
  `ETAPE10` varchar(255) NOT NULL,
  `INGREDIANT1` varchar(255) NOT NULL,
  `INGREDIANT2` varchar(255) NOT NULL,
  `INGREDIANT3` varchar(255) NOT NULL,
  `INGREDIANT4` varchar(255) NOT NULL,
  `INGREDIANT5` varchar(255) NOT NULL,
  `INGREDIANT6` varchar(255) NOT NULL,
  `INGREDIANT7` varchar(255) NOT NULL,
  `INGREDIANT8` varchar(255) NOT NULL,
  `INGREDIANT9` varchar(255) NOT NULL,
  `INGREDIANT10` varchar(255) NOT NULL,
  `INGREDIANT11` varchar(255) NOT NULL,
  `INGREDIANT12` varchar(255) NOT NULL,
  `INGREDIANT13` varchar(255) NOT NULL,
  `INGREDIANT14` varchar(255) NOT NULL,
  `INGREDIANT15` varchar(255) NOT NULL,
  `INGREDIANT16` varchar(255) NOT NULL,
  `INGREDIANT17` varchar(255) NOT NULL,
  `INGREDIANT18` varchar(255) NOT NULL,
  `INGREDIANT19` varchar(255) NOT NULL,
  `INGREDIANT20` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`IDRECETTE`),
  KEY `I_FK_RECETTE_UTILISATEURS` (`IDUTILISATEURS`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`IDRECETTE`, `IDUTILISATEURS`, `TITRE`, `TEMPPREPARATION`, `TEMPCUISSON`, `NOMBREPERSONNE`, `PHOTOCOUVERTURE`, `PHOTO1`, `PHOTO2`, `PHOTO3`, `ETAPE1`, `ETAPE2`, `ETAPE3`, `ETAPE4`, `ETAPE5`, `ETAPE6`, `ETAPE7`, `ETAPE8`, `ETAPE9`, `ETAPE10`, `INGREDIANT1`, `INGREDIANT2`, `INGREDIANT3`, `INGREDIANT4`, `INGREDIANT5`, `INGREDIANT6`, `INGREDIANT7`, `INGREDIANT8`, `INGREDIANT9`, `INGREDIANT10`, `INGREDIANT11`, `INGREDIANT12`, `INGREDIANT13`, `INGREDIANT14`, `INGREDIANT15`, `INGREDIANT16`, `INGREDIANT17`, `INGREDIANT18`, `INGREDIANT19`, `INGREDIANT20`, `date`) VALUES
(36, 6, 'gh', '23:02', '04:24', 24, '', '', '', '', '2424', '', '', '', '', '', '', '', '', '', '24', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-05-22 04:30:47'),
(32, 6, 'Confiture Franboise', '00:45', '01:50', 4, 'insta5.jpg', '', '', '', 'Trier les framboises en éliminant les fruits trop avancés. Éviter de les rincer afin de préserver leur parfum.', 'Les mettre dans la bassine à confiture avec 15 cl d\'eau et les écraser grossièrement à l\'aide d\'une écumoire, sur feu doux pendant 5 minutes.', 'Ajouter le jus du citron, le sucre, les 6 cuillerées à café de vanille en poudre et mélanger.', 'Porter à ébullition. A partir de ce moment, compter le temps de cuisson : 7 minutes avec un sucre gélifiant, sinon 15 à 20 minutes avec du sucre semoule.\r\n', 'Maintenir un feu vif et remuer souvent. Vérifier la cuisson en versant quelques gouttes sur une assiette froide puis pencher l\'assiette. La confiture de framboises doit couler doucement', 'Écumer puis procéder sans attendre à la mise en pots, les fermer et les retourner 1 min, puis les remettre à l\'endroit pour les laisser refroidir.', '', '', '', '', 'Framboise', 'Citron', 'Sucre', 'Vanille en poudre', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-05-22 01:33:04'),
(34, 6, 'edqdQSDQ', '04:46', '04:46', 65456, '', '', '', '', 'BFDGDFG', 'GFDGGFFG', '', '', '', '', '', '', '', '', 'D5FGDDGFG', 'FGGDGF', 'FGDD', 'FGD', 'DFD', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-05-22 03:35:36');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
