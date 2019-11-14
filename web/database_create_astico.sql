-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 17 nov. 2017 à 11:09
-- Version du serveur :  10.1.25-MariaDB
-- Version de PHP :  7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `astico`
--

-- --------------------------------------------------------

DROP TABLE IF EXISTS astico_adherant;

--
-- Structure de la table `astico_adherant`
--

CREATE TABLE `astico_adherant` (
  `mail` varchar(100) NOT NULL,
  `nom` varchar(355) NOT NULL,
  `prenom` varchar(355) NOT NULL,
  `password` varchar(355) NOT NULL,
  `formation` enum('IDS','BCD','Phymed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

DROP TABLE IF EXISTS astico_membres;

--
-- Structure de la table `Astico_Membres`
--

CREATE TABLE `astico_membres` (
  `mail` varchar(100) NOT NULL,
  `nom` varchar(355) NOT NULL,
  `prenom` varchar(355) NOT NULL,
  `localisation` varchar(355),
  `avantages` varchar(355)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



ALTER TABLE `astico_adherant`
  ADD PRIMARY KEY (`mail`);

--
-- Contraintes pour la table `Astico_Membres`
--
ALTER TABLE `astico_membres`
  ADD PRIMARY KEY (`mail`);


INSERT INTO astico_adherant (`mail`,`nom`,`prenom`,`password`) values
('test@mail.com','name','pname','mdp');

INSERT INTO astico_membres (`mail`,`nom`,`prenom`) values
('clement.bellot@etu.umontpellier.fr','Bellot','Clement'),
('yassine.belloum@etu.umontpellier.fr','Belloum','Yassine'),
('clothilde.chenal@etu.umontpellier.fr','Chenal','Clothilde'),
('remy.costa@etu.umontpellier.fr','Costa','Remy'),
('laureline.dejardin-bretones@etu.umontpellier.fr','Dejardin','Laureline'),
('remy.duverger@etu.umontpellier.fr','Duverger','Remy'),
('sabah.karkachi@etu.umontpellier.fr','Karkachi','Sabah'),
('manon.knuchel@etu.umontpellier.fr','Knuchel','Manon'),
('jean.marone@etu.umontpellier.fr','Marone','Jean'),
('xavier.mialhe@etu.umontpellier.fr','Mialhe','Xavier'),
('abdillah.mohamed@etu.umontpellier.fr','Mohamed','Abdillah'),
('axelle.nicolas@etu.umontpellier.fr','Nicolas','Axelle'),
('gautier.petitjean@etu.umontpellier.fr','Petitjean','Gautier'),
('alexandre.pinheiro@etu.umontpellier.fr','Pinheiro','Alexandre'),
('moussa.samb@etu.umontpellier.fr','Samb','Moussa'),
('nicolas.soirat@etu.umontpellier.fr','Soirat','Nicolas'),
('anna.tran@etu.umontpellier.fr','Tran','Anna'),
('mouhamadou.wade@etu.umontpellier.fr','Wade','Mouhamadou');

INSERT INTO Astico_Membres (`mail`,`nom`,`prenom`) values
('gabriele.adam@etu.umontpellier.fr','Adam','Gabriele'),
('sarah.ben-fadhl@etu.umontpellier.fr','Ben Fadhl','Sarah'),
('camille.bonhomme@etu.umontpellier.fr','Bonhomme','Camille'),
('marianne.borderes@etu.umontpellier.fr','Borderes','Marianne'),
('jerome.bourret@etu.umontpellier.fr','Bourret','Jerome'),
('marion.buffard@etu.umontpellier.fr','Buffard','Marion'),
('gonche.danesh@etu.umontpellier.fr','Danesh','Gonche'),
('jeremie.dentan@etu.umontpellier.fr','Dentan','Jeremie'),
('abdoulaye.diallo@etu.umontpellier.fr','Diallo','Abdoulaye'),
('maryam.el-fene@etu.umontpellier.fr','El Fene','Maryam'),
('chaimae.el-jaouhari@etu.umontpellier.fr','El Jaouhari','Chaimae'),
('thomas.ferreira@etu.umontpellier.fr','Ferreira','Thomas'),
('benoit.guibert@etu.umontpellier.fr','Guibert','Benoit'),
('laura.helou@etu.umontpellier.fr','Helou','Laura'),
('florian.larue@etu.umontpellier.fr','Larue','Florian'),
('jeremy.leclercq@etu.umontpellier.fr','Leclercq','Jeremy'),
('hugo.mananet@etu.umontpellier.fr','Mananet','Hugo'),
('julien.medina@etu.umontpellier.fr','Medina','Julien'),
('audrey.passerieux@etu.umontpellier.fr','Passerieux','Audrey'),
('alexandre.soriano@etu.umontpellier.fr','Soriano','Alexandre'),
('quentin.testard@etu.umontpellier.fr','Testard','Quentin'),
('younes.zahidi@etu.umontpellier.fr','Zahidi','Younes');

INSERT INTO Astico_Membres (`mail`,`nom`,`prenom`) values
('yannick.antoine@etu.umontpellier.fr','Antoine','Yannick'),
('guilhem.barthes@etu.umontpellier.fr','Barthes','Guilhem'),
('aurore.berne@etu.umontpellier.fr','Berne','Aurore'),
('julie.brooke@etu.umontpellier.fr','Brooke','Julie'),
('julie.cremaschi@etu.umontpellier.fr','Cremaschi','Julie'),
('quentin.delorme01@etu.umontpellier.fr','Delorme','Quentin'),
('amad.diouf@etu.umontpellier.fr','Diouf','Amad'),
('faustine.durand@etu.umontpellier.fr','Durand','Faustine'),
('mickael.hamouma@etu.umontpellier.fr','Hamouma','Mickael'),
('tom.huet@etu.umontpellier.fr','Huet','Tom'),
('valentin.klein@etu.umontpellier.fr','Klein','Valentin'),
('mathieu.massaviol@etu.umontpellier.fr','Massaviol','Mathieu'),
('edith.ndiesseu-guemgne@etu.umontpellier.fr','Ndiesseu Guemgne','Edith'),
('valerie.noel01@etu.umontpellier.fr','Noel','Valerie'),
('amirouche-labib.ouzerdine@etu.umontpellier.fr','Ouzerdine','Amirouche Labib'),
('amandine.radoundy@etu.umontpellier.fr','Radoundy','Amandine'),
('olivier.sacchi@etu.umontpellier.fr','Sacchi','Olivier'),
('mohammad.salma@etu.umontpellier.fr','Salma','Mohammad'),
('morgan.soulie@etu.umontpellier.fr','Soulie','Morgan'),
('yeyinou.tognifode@etu.umontpellier.fr','Tognifode','Yeyinou'),
('thimothee.virgoulay@etu.umontpellier.fr','Virgoulay','Thimothee');

INSERT INTO Astico_Membres (`mail`,`nom`,`prenom`) values
('anais.julie.l@gmail.com','LOUIS','ANAIS'),
('elodie.simphor@etu.umontpellier.fr','SIMPHOR','ELODIE'),
('amandine.ducousso@free.fr','DUCOUSSO- DETREZ','AMANDINE'),
('ange.christ93@gmail.com','SANOU','GAOUSSOU'),
('magali.arhainx@trebons.net','ARHAINX','MAGALI'),
('denozi.j@gmail.com','DENOZI','JULIEN'),
('seanlaidlaw95@gmail.com','LAIDLAW','SEAN'),
('gamel.catherine@orange.fr','GAMEL','NICOLAS'),
('mathieu.blaison@gmail.com','BLAISON','MATHIEU'),
('debaeckergautier@gmail.com','DEBAECKER','GAUTIER'),
('lina.mahrach@etu.umontpellier.fr','MAHRACH','LINA'),
('romieujules@gmail.com','ROMIEU','JULES'),
('matth.fournel@laposte.net','FOURNEL','MATTHIEU'),
('qiqi.he.cn@gmail.com','HE','QIQI'),
('gabrielle.pozo@sciences.ucly.fr','POZO','GABRIELLE'),
('wildevince@free.fr','WILDE','VINCENT'),
('hadjira.hamou@etu.umontpellier.fr','HAMOU','HADJIRA'),
('nastasija.mijovic@etu.umontpellier.fr','MIJOVIC','NASTASIJA'),
('delanoe.edouard@gmail.com','DELANOE','EDOUARD'),
('barrynndjenaba2013@gmail.com','BARRY','NENE DJENABA'),
('mourad.belkahla@etu.umontpellier.fr','BELKAHLA','MOURAD'),
('mourdasm13@gmail.com','MOHAMED','MOURDAS'),
('laura3.lion@orange.fr','LION','Laura'),
('emira.cherif@ird.fr','CHERIF','EMIRA'),
('olivier.santt@gmail.com','SANTT','OLIVIER');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
