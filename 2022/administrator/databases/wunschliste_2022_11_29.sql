-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 29. Nov 2022 um 20:52
-- Server-Version: 5.7.37-nmm1-log
-- PHP-Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `d0382676`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `wunschliste`
--

CREATE TABLE `wunschliste` (
  `wunschnummer` int(255) NOT NULL,
  `gruppe` char(255) NOT NULL,
  `kind` char(255) NOT NULL,
  `age` char(255) NOT NULL,
  `wunsch` char(255) NOT NULL,
  `wunscherfueller` char(255) NOT NULL,
  `wunscherfuellen` char(255) NOT NULL,
  `wunscherfuellerbestaetigt` char(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `wunschliste`
--

INSERT INTO `wunschliste` (`wunschnummer`, `gruppe`, `kind`, `age`, `wunsch`, `wunscherfueller`, `wunscherfuellen`, `wunscherfuellerbestaetigt`) VALUES
(1, 'Atemreich,Klasse AR1', '', '', 'Aurednik Fingerfarben Basis-Set 8x 750 ml', '', '', ''),
(2, 'Atemreich Wiesengruen', '', '', 'Airset mit Pumpe biozoon.de/shop; Art.nr. A 0003; 59,00 EUR', '', '', ''),
(3, 'Robinsonclub  Kl. 6C1', 'die Gruppe 12-19 J.', '', 'Duftlampe (Diffuser)und Aroma-oele, ein CD-Player', '', '', ''),
(4, 'Globetrotter', 'die Gruppe 6-7 Jahre', '', 'Zuckerwattemaschine v. Bestron Retro, 40 EUR; Grosses Buch der Tiere mit Geraeuschen, 20 EUR', '', '', ''),
(5, 'Rasselbande', 'Gruppe 13-18 Jahre', '', 'ein Waffeleisen und ein Maffinblech', '', '', ''),
(6, 'Schatzsucher', 'Gruppe 3-6 Jahre', '', 'Massagematte von Vonoya  Vibrationsmassagematte 10', '', '', ''),
(7, 'Schluempfe', 'Gruppe 7 Jahre', '', 'Fisher Price, D3 Huepfi', '', '', ''),
(8, 'BS1', 'Ibtihal, 14. J.', '', 'eine gutriechende Handcreme', '', '', ''),
(9, 'BS1', 'Ilyas, 18 J.', '', 'Kuscheltier fuer die Arme (Soft)', '', '', ''),
(10, 'BS1', 'Muhammet, 17 J.', '', 'Greifball mit Geraeuschen', '', '', ''),
(11, 'BS1', 'Janine, 16 J.', '', 'eine gutriechende Handcreme', '', '', ''),
(12, 'BS1', 'Rocco, 18 J.', '', 'Ball oder Spielgeraet zum Greifen mit Geraeusche', '', '', ''),
(13, 'BS1', 'Sara, 13 J.', '', 'eine Spieluhr zum Aufziehen', '', '', ''),
(14, 'Drachenburg', 'Iwan, 17 J.', '', 'Kartenspiel, aehnlich wie UNO', '', '', ''),
(15, 'Drachenburg', 'Beyza, 17 J.', '', 'ein Steckspiel', '', '', ''),
(16, 'Drachenburg', 'Luigi, 14 J.', '', 'CD v. Mark Forster', '', '', ''),
(17, 'Drachenburg', 'Manuel, 17 J.', '', 'CD mit Indianer-Musik', '', '', ''),
(18, 'Drachenburg', 'Florian, 16 J.', '', 'Buch, z.B. die 3 ??? In Braille-Schrift', '', '', ''),
(19, 'Flohzirkus', 'Amin, 16 J.', '', 'CD von Sunrise Avenue: Out of Style oder Acustic Tour 2010', '', '', ''),
(20, 'Flohzirkus', 'Ugur Can, 18 J.', '', 'Bildkartenset von Komishibai:Ich war das nicht Die Geschichte von Prinz Seltsam', '', '', ''),
(21, 'Flohzirkus', 'Kuebra, 12 J.', '', 'Omas Wintergeschichten von Elke Braeunling', '', '', ''),
(22, 'Flohzirkus', 'Ramata, 15 J.', '', 'Hoer-Memo aus Holz: Raupe Nimmersatt', '', '', ''),
(23, 'Flohzirkus', 'Dimi, Elisa und Emilie', '', 'Buch: Tip Toi-Starter-Set mit Tier-Buch', '', '', ''),
(24, 'Gartenzwerge', 'Artur, 3 J.', '', 'Mein sprechendes Soundbuch Erste Woerter', '', '', ''),
(25, 'Gartenzwerge', 'Lotta, 5 J.', '', 'Leuchtkugel Going L', '', '', ''),
(26, 'Gartenzwerge', 'Melisa, 3 J.', '', 'Infantino Anhaenger Flamingo', '', '', ''),
(27, 'Gartenzwerge', 'Luca, 6 J.', '', 'Sigikid Rasselraupe mit Vibration', '', '', ''),
(28, 'Gluehwuermchen', 'Tobias, 16 J.', '', 'Wand-Tattoo Motiv Dschungel', '', '', ''),
(29, 'Gluehwuermchen', 'Sebastian, 17 J.', '', 'Gute Wellnesskosmetik', '', '', ''),
(30, 'Gluehwuermchen', 'Anabia, 8 J.', '', 'Mini-Massegegeraet mit Vibration', '', '', ''),
(31, 'Gluehwuermchen', 'Idriz, 16 J.', '', 'Film auf DVD Encanto', '', '', ''),
(32, 'Grashuepfer', 'Emily, 9 J.', '', 'Tonie-Figur: Kinderlieder', '', '', ''),
(33, 'Grashuepfer', 'Edna, 10 J.', '', 'Bonve Pet: LED Stip 6m Bluetooth', '', '', ''),
(34, 'Grashuepfer', 'Jamiro, 8 J.', '', 'Tonie-Figur; Geschichte', '', '', ''),
(35, 'Grashuepfer', 'Vincent, 9 J.', '', 'ein Soundbuch', '', '', ''),
(36, 'Grashuepfer', 'Semen, 8 J.', '', 'Sternenhimmel-Projektor', '', '', ''),
(37, 'Hobbits', 'Armin, 6 J.', '', 'ein musikalisches Plueschtier', '', '', ''),
(38, 'Hobbits', 'Robert, 6 J.', '', 'ein Soft-Klingelball', '', '', ''),
(39, 'Hobbits', 'Malte, 6 J.', '', 'Musikmatte', '', '', ''),
(40, 'Hobbits', 'Helena, 7 J.', '', 'eine sprechende Puppe', '', '', ''),
(41, 'Hobbits', 'Sophia, 6 j.', '', 'ein sprechender Pluesch-Kaktuus', '', '', ''),
(42, 'Kaenguruh', 'Alina, 15 J.', '', 'Tonie-Figur Weihnachtsmann', '', '', ''),
(43, 'Kaenguruh', 'Tarik, 20 J.', '', 'Nachttischlampe mit Sternenhimmel', '', '', ''),
(44, 'Kaenguruh', 'Helena, 9 J.', '', 'Sun-Set Lampe', '', '', ''),
(45, 'Kaenguruh', 'Leo, 10 J.', '', 'Massage-oele v. Weleda', '', '', ''),
(46, 'Kaenguruh', 'Luca, 16 J.', '', 'Tonie-Figur', '', '', ''),
(47, 'Kleine Helden', 'Anvar, 5 J.', '', 'CD von Sternschnuppe: Herbstlieder', '', '', ''),
(48, 'Kleine Helden', 'Aeneas, 6 J.', '', 'CD von Sternschnuppe: oh Tannenbaum', '', '', ''),
(49, 'Kleine Helden', 'Amile, 5 J.', '', 'CD v. Sternschnuppe: toeff toeff toeff die Eisenbahn', '', '', ''),
(50, 'Kleine Helden', 'Leonie, 6 J.', '', 'CD von Sternschnuppe: bayr. Kinderlieder', '', '', ''),
(51, 'Kleine Helden', 'Eyran, 3 J.', '', 'CD von Sternschnuppe', '', '', ''),
(52, 'Kleine Strolche', 'Paul, 5 J.', '', 'CD von Pumukl o. Bejamin Bluemchen', '', '', ''),
(53, 'Kleine Strolche', 'Laura, 3 J.', '', 'ein Lichtspiel o. Leuchthandschuh', '', '', ''),
(54, 'Kleine Strolche', 'Marco, 4 J.', '', 'CD mit spanischen Kinderliedern', '', '', ''),
(55, 'Kleine Strolche', 'Olivia, 5 J.', '', 'ein schoenes Massageoel', '', '', ''),
(56, 'Kobolde', 'ganze Gruppe', '', 'Beurer Fusssprudelbag', '', '', ''),
(57, 'Kobolde', 'Medin, 17 J.', '', 'eine Rassel zum Musik machen', '', '', ''),
(58, 'Kobolde', 'Muhammet, 15 J.', '', 'etwas was leuchtet, z. B. Lichtschlauch oder LED-Lampe', '', '', ''),
(59, 'Kobolde', 'Sahinap, 17 J.', '', 'einen Ball der vibriert oder zum Kneten', '', '', ''),
(60, 'Kobolde', 'Tanya, 18 J.', '', 'Klangschale oder kleinen Gong', '', '', ''),
(61, 'Kobolde', 'Gabriel, 19 J.', '', 'Ausstechformen Tiere fuer Plaetzchen', '', '', ''),
(62, 'Leuchtsterne', 'Augusto, 7 J.', '', 'Pumukl Vorlesebuch Wintergeschichten', '', '', ''),
(63, 'Leuchtsterne', 'Rasmus, 8 J.', '', 'CD Hoerbuch: dr kleine Drache Kokosnuss', '', '', ''),
(64, 'Leuchtsterne', 'Y. (Junge), 7 J.', '', 'Salzkristalllampe', '', '', ''),
(65, 'Leuchtsterne', 'A. (Maedchen), 8 J.', '', 'CD: Entspannungsmusik fuer Kinder z.B. bei Hugendubel', '', '', ''),
(66, 'Leuchtsterne', 'C. (Maedchen), 10 J.', '', 'CD Hoerbuch: von Tida Apfelkorn ein Weihnachtsfest voller Geheimnisse', '', '', ''),
(67, 'Peanuts', 'Vincent, 16 J.', '', 'ein Memory mit einfachen Symbolen', '', '', ''),
(68, 'Peanuts', 'Leo, 16 J.', '', 'CD mit Oldies-Hits', '', '', ''),
(69, 'Peanuts', 'Korbinian, 18 J.', '', 'Kuschig warme Huettenschuhe, Gr. 38', '', '', ''),
(70, 'Peanuts', 'Regina, 18 J.', '', 'CD mi Kinderliedern', '', '', ''),
(71, 'Peanuts', 'Noah, 19 J.', '', 'ein spannendes Hoerbuch', '', '', ''),
(72, 'Regenbogen', 'Mahaa, 14 J.', '', 'Henne Frieda bei der Riedel', '', '', ''),
(73, 'Regenbogen', 'Johanna, 13 J.', '', 'DVD Berlin mit der U-Bahn erfahren', '', '', ''),
(74, 'Regenbogen', 'Isa, 17 J.', '', 'CD von Max Rabe mit dem Titel Fuer Frauen ist das kein Problem', '', '', ''),
(75, 'Regenbogen', 'Vivien, 12 J.', '', 'Biografie von Helene Fischer', '', '', ''),
(76, 'Regenbogen', 'Alexander, 17 J.', '', 'Massageball Konny v. Riedel', '', '', ''),
(77, 'Seesterne', 'Fatih, 10 J.', '', 'Pflanzliche Handcreme und Massageball u. -ring u.-igelball', '', '', ''),
(78, 'Seesterne', 'Ricardo, 14 J.', '', 'Rassel als Ring o. mit Griff', '', '', ''),
(79, 'Seesterne', 'Kasho, 12 J.', '', 'Dust-oel nach Winter/ Weihnachten', '', '', ''),
(80, 'Seesterne', 'Mia, 13 J.', '', 'CD mit Kinderlieder v. sternschnuppe o. Rolf Zukowsky', '', '', ''),
(81, 'Seesterne', 'Larissa, 14 J.', '', 'Fuehlkissen o. Massagekaefer', '', '', ''),
(82, 'Schule Wi B3', 'Mohammet, 16 J.', '', 'Mehrfarben-LED-Glasfaserlampe Light in the Box; 12,99 EUR', '', '', ''),
(83, 'Sputniks', 'Ivan, 17 J.', '', '3 Fragezeichen-Buch', '', '', ''),
(84, 'Sputniks', 'Nick, 17 J.', '', 'Lichterschlauch o. Leuchthalbkugel', '', '', ''),
(85, 'Sputniks', 'Julian, 17 J.', '', 'Duftoele', '', '', ''),
(86, 'Sputniks', 'Leo, 18 J.', '', 'ein guenstiges Kinder-Keyboard', '', '', ''),
(87, 'Sonnenblumen', 'Carla, 11 J.', '', 'ein Set Leuchtstaebe, www.der-riedel.de, 9,95 EUR', '', '', ''),
(88, 'Sonnenblumen', 'Luci, 6 J.', '', 'Bambua Kopfmassage-Spinne', '', '', ''),
(89, 'Sonnenblumen', 'Emir, 10 J.', '', 'Toni-Figur Tabaluga', '', '', ''),
(90, 'Sonnenblumen', 'Ellias, 13 J.', '', 'Sternenhimmel-Projektor', '', '', ''),
(91, 'Sonnenblumen', 'Lina, 11 J.', '', 'eine Kuscheldcke fuer den Rolli', '', '', ''),
(92, 'Sonnenblumen', 'Lilly, 14 J.', '', 'Gutschein fuer einen Selbsteinkauf', '', '', ''),
(93, 'Sonnenblumen', 'Hannah, 17 J.', '', 'eine CD', '', '', ''),
(94, 'Sonnenschein', 'Salvatore, 11 J.', '', 'stabile Trommel', '', '', ''),
(95, 'Sonnenschein', 'Anna-Sophia, 6 J.', '', 'ein Rasselspielzeug Manhatten Toy', '', '', ''),
(96, 'Sonnenschein', 'Naim, 14 J.', '', 'Klangschale oder Massage-Set', '', '', ''),
(97, 'Sonnenschein', 'Francesco-Luca, 8 J.', '', 'ein beissfestes grosses Kuscheltier, ca. 50 cm', '', '', ''),
(98, 'Sonnenschein', 'Samira, 8 J.', '', 'Holzkastagnetten mit Griff', '', '', ''),
(99, 'Tigerenten', 'Mila, 9 J.', '', 'Tonie-Figur: Lichterkinder die besten Spiel-u. Bewegungslieder', '', '', ''),
(100, 'Tigerenten', 'Ilyas, 8 J.', '', 'Fuehl- u. Musikbilderbuch', '', '', ''),
(101, 'Tigerenten', 'Katharina, 8 J.', '', 'Sternenhimmel-Projektor', '', '', ''),
(102, 'Tigerenten', 'Noah, 7 J.', '', 'Massagezubehoer; Handschu, oel, Buerste', '', '', ''),
(103, 'Tigerenten', 'Belma, 8 J.', '', 'Puppen-Zubehoer; Puppe ist 44 cm', '', '', ''),
(104, 'Tintenfische', 'Niels, 14 J.', '', 'CD: Summer von Herbert Pixner Projekt', '', '', ''),
(105, 'Tintenfische', 'Victoria, 19 J.', '', 'DVD/Blue Ray:Hannah Montana der Film', '', '', ''),
(106, 'Tintenfische', 'Julia, 19 J.', '', 'Hoerspiel: Rubinrot Liebe geht durch alle Zeiten', '', '', ''),
(107, 'Tintenfische', 'Djulien, 10 J.', '', 'Buch: Furzipups und Ruediger  Ruellps-Ruessel Band 3', '', '', ''),
(108, 'Tintenfische', 'Sofya, 17 J.', '', 'Tip Toi-Buch: wir reisen durch Europa', '', '', ''),
(109, 'Traumfaenger', 'Deniz, 10 J.', '', 'Steck- u. Zaehl-Parkhaus;', '', '', ''),
(110, 'Traumfaenger', 'Sara T., 13 J.', '', 'Nachsprech-Spielzeug;', '', '', ''),
(111, 'Traumfaenger', 'Mercy, 10 J.', '', 'Massageschlage;', '', '', ''),
(112, 'Traumfaenger', 'Diamant, 10 J.', '', 'Geraeusche-Puzzle Musik;', '', '', ''),
(113, 'Traumfaenger', 'Sara S., 10 J.', '', 'Leuchtspielzeug; 40003-gummi-ei;', '', '', ''),
(114, 'Traumfaenger', 'Keuser, 14 J., weibl.', '', 'Leuchtplatte; 40043-A4;', '', '', ''),
(115, 'Villa Kunterbund', 'Julian, 19 J.', '', 'Duschschaum v. Rituals f. Maenner', '', '', ''),
(116, 'Villa Kunterbund', 'Tahir, 19 J.', '', 'Pflegeprodukte v. Rituals f. Maenner', '', '', ''),
(117, 'Villa Kunterbund', 'Antonia, 9 J.', '', 'Kinderspielzeug mit Musik', '', '', ''),
(118, 'Villa Kunterbund', 'Ellen, 7 J.', '', 'Tonie Figur Pippi Langstrumpf', '', '', ''),
(123, 'Wurzelkinder', 'Annesa, 9 J.', '', 'Kleidung fuer Puppe First Words-gestreift rosa', '', '', ''),
(119, 'Wurzelkinder', 'Nina, 10 J.', '', 'Sternenhimmel-Projektor', '', '', ''),
(120, 'Wurzelkinder', 'Laurenz, 9 J.', '', 'ein Musikpuzzle', '', '', ''),
(121, 'Wurzelkinder', 'Matei, 11 J.', '', 'CD: River flows in you von Yiruma', '', '', ''),
(122, 'Wurzelkinder', 'Felix, 10 J.', '', 'Bauklotzspiel zum Stecken', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
