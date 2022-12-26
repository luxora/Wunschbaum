-- Adminer 4.8.1 MySQL 5.7.37-nmm1-log dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `wunschliste`;
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

INSERT INTO `wunschliste` (`wunschnummer`, `gruppe`, `kind`, `age`, `wunsch`, `wunscherfueller`, `wunscherfuellen`, `wunscherfuellerbestaetigt`) VALUES
(1,	'Atemreich,Klasse AR1',	'',	'',	'Aurednik Fingerfarben Basis-Set 8x 750 ml',	'R',	'JA',	''),
(2,	'Atemreich Wiesengruen',	'',	'',	'Airset mit Pumpe biozoon.de/shop; Art.nr. A 0003; 59,00 EUR',	'',	'JA',	''),
(3,	'Robinsonclub  Kl. 6C1',	'die Gruppe 12-19 J.',	'',	'Duftlampe (Diffuser)und Aroma-oele, ein CD-Player',	' ',	'JA',	''),
(4,	'Globetrotter',	'die Gruppe 6-7 Jahre',	'',	'Zuckerwattemaschine v. Bestron Retro, 40 EUR; Grosses Buch der Tiere mit Geraeuschen, 20 EUR',	'Abt. F',	'JA',	''),
(5,	'Rasselbande',	'Gruppe 13-18 Jahre',	'',	'ein Waffeleisen und ein Muffinblech',	'Sandra ',	'JA',	''),
(6,	'Schatzsucher',	'Gruppe 3-6 Jahre',	'',	'Massagematte von Vonoya  Vibrationsmassagematte 10',	'Karin',	'JA',	''),
(7,	'Schluempfe',	'Gruppe 7 Jahre',	'',	'Fisher Price, D3 Huepfi',	'Enrico',	'JA',	''),
(8,	'XSQ',	'Ibtihal, 14. J.',	'',	'eine gutriechende Handcreme',	'Sylvia',	'JA',	''),
(9,	'XSQ',	'Ilyas, 18 J.',	'',	'Kuscheltier fuer die Arme (Soft)',	'Thomas ',	'JA',	''),
(10,	'XSQ',	'Muhammet, 17 J.',	'',	'Greifball mit Geraeuschen',	'Anke ',	'JA',	''),
(11,	'XSQ',	'Janine, 16 J.',	'',	'eine gutriechende Handcreme',	'Sylvia',	'JA',	''),
(12,	'XSQ',	'Rocco, 18 J.',	'',	'Ball oder Spielgeraet zum Greifen mit Geraeusche',	'K',	'JA',	''),
(13,	'XSQ',	'Sara, 13 J.',	'',	'eine Spieluhr zum Aufziehen',	'Susanne ',	'JA',	''),
(14,	'DRA',	'Iwan, 17 J.',	'',	'Klingelfussball',	'Nicolas ',	'JA',	''),
(15,	'DRA',	'Theresa',	'',	'rosa Stulpen + Massage-Käfer',	'Claudia ',	'JA',	''),
(16,	'DRA',	'Luigi, 14 J.',	'',	'Klingelfussball',	'Nicolas ',	'JA',	'Achtung Nina! Änderung des Wunsches'),
(17,	'DRA',	'Manuel, 17 J.',	'',	'CD mit Panflötenmusik',	'Ilonar',	'JA',	'Achtung Wunsch Änderung Fr. Ilona Beier'),
(18,	'DRA',	'Florian, 16 J.',	'',	'Buch, z.B. die 3 ??? In Braille-Schrift',	'Familie ',	'JA',	''),
(19,	'FL',	'Amin, 16 J.',	'',	'CD von Sunrise Avenue: Out of Style oder Acustic Tour 2010',	'Cornelia ',	'JA',	''),
(20,	'FL',	'Ugur Can, 18 J.',	'',	'Bildkartenset von Komishibai:Ich war das nicht Die Geschichte von Prinz Seltsam',	'Daniel ',	'JA',	''),
(21,	'FL',	'Kuebra, 12 J.',	'',	'Omas Wintergeschichten von Elke Braeunling',	'Lorna',	'JA',	''),
(22,	'FL',	'Ramata, 15 J.',	'',	'Hoer-Memo aus Holz: Raupe Nimmersatt',	'kk',	'JA',	''),
(23,	'FL',	'Dimi, Elisa und Emilie',	'',	'Buch: Tip Toi-Starter-Set mit Tier-Buch',	'Familie',	'JA',	''),
(24,	'GGG',	'Artur, 3 J.',	'',	'Mein sprechendes Soundbuch Erste Woerter',	'IR',	'JA',	''),
(25,	'GGG',	'Lotta, 5 J.',	'',	'Leuchtkugel Going L',	'Sabine',	'JA',	''),
(26,	'GGG',	'Melisa, 3 J.',	'',	'Infantino Anhaenger Flamingo',	'Elisabeth ',	'JA',	''),
(27,	'GGG',	'Luca, 6 J.',	'',	'Sigikid Rasselraupe mit Vibration',	'Nicole ',	'JA',	''),
(28,	'GLW',	'Tobias, 16 J.',	'',	'Wand-Tattoo Motiv Dschungel',	'K',	'JA',	''),
(29,	'GLW',	'Sebastian, 17 J.',	'',	'Gute Wellnesskosmetik',	'Sylvia',	'JA',	''),
(30,	'GLW',	'Anabia, 8 J.',	'',	'Mini-Massegegeraet mit Vibration',	'K',	'JA',	''),
(31,	'GLW',	'Idriz, 16 J.',	'',	'Film auf DVD Encanto',	'Thomas ',	'JA',	''),
(32,	'GGGGG',	'Emily, 9 J.',	'',	'Tonie-Figur: Kinderlieder',	'Personalabteilung',	'JA',	''),
(33,	'GGGGG',	'Edna, 10 J.',	'',	'Bonve Pet: LED Stip 6m Bluetooth',	'Vanessa',	'JA',	''),
(34,	'GGGGG',	'Jamiro, 8 J.',	'',	'Tonie-Figur; Geschichte',	'Personalabteilung',	'JA',	''),
(35,	'GGGGG',	'Vincent, 9 J.',	'',	'ein Soundbuch',	'Petra ',	'JA',	''),
(36,	'GGGGG',	'Semen, 8 J.',	'',	'Sternenhimmel-Projektor',	'Christina ',	'JA',	''),
(37,	'Hobbits',	'Armin, 6 J.',	'',	'ein musikalisches Plueschtier',	'G',	'JA',	''),
(38,	'Hobbits',	'Robert, 6 J.',	'',	'ein Soft-Klingelball',	'Birgit ',	'JA',	''),
(39,	'Hobbits',	'Malte, 6 J.',	'',	'Musikmatte',	'Silvia ',	'JA',	''),
(40,	'Hobbits',	'Helena, 7 J.',	'',	'eine sprechende Puppe',	'Claudia ',	'JA',	''),
(41,	'Hobbits',	'Sophia, 6 j.',	'',	'ein sprechender Pluesch-Kaktuus',	'Lan.',	'JA',	''),
(42,	'KG',	'Alina, 15 J.',	'',	'Tonie-Figur Weihnachtsmann',	'Barbara',	'JA',	''),
(43,	'KG',	'Tarik, 20 J.',	'',	'Nachttischlampe mit Sternenhimmel',	'Arne ',	'JA',	''),
(44,	'KG',	'Helena, 9 J.',	'',	'Sun-Set Lampe',	'Luisa',	'JA',	''),
(45,	'KG',	'Leo, 10 J.',	'',	'Massage-oele v. Weleda',	'Julia ',	'JA',	''),
(46,	'KG',	'Luca, 16 J.',	'',	'Tonie-Figur',	'Bianca Jahnke',	'JA',	''),
(47,	'HKL',	'Anvar, 5 J.',	'',	'CD von Sternschnuppe: Herbstlieder',	'Dieter ',	'JA',	''),
(48,	'HKL',	'Aeneas, 6 J.',	'',	'CD von Sternschnuppe: oh Tannenbaum',	'Dieter ',	'JA',	''),
(49,	'HKL',	'Amile, 5 J.',	'',	'CD v. Sternschnuppe: toeff toeff toeff die Eisenbahn',	'Birgit ',	'JA',	''),
(50,	'HKL',	'Leonie, 6 J.',	'',	'CD von Sternschnuppe: bayr. Kinderlieder',	'Herr ',	'JA',	''),
(51,	'HKL',	'Eyran, 3 J.',	'',	'CD von Sternschnuppe',	'Birgit ',	'JA',	''),
(52,	'KG',	'Paul, 5 J.',	'',	'CD von Pumukl o. Bejamin Bluemchen',	'Nina',	'JA',	''),
(53,	'KG',	'Laura, 3 J.',	'',	'ein Lichtspiel o. Leuchthandschuh',	'Andreas ',	'JA',	''),
(54,	'KG',	'Marco, 4 J.',	'',	'CD mit spanischen Kinderliedern',	'Familie ',	'JA',	''),
(55,	'KG',	'Olivia, 5 J.',	'',	'ein schoenes Massageoel',	'Sylvia',	'JA',	''),
(56,	'KKKo',	'ganze Gruppe',	'',	'Beurer Fusssprudelbag',	'Familie ',	'JA',	''),
(57,	'KKKo',	'Medin, 17 J.',	'',	'eine Rassel zum Musik machen',	'Martina ',	'JA',	''),
(58,	'KKKo',	'Muhammet, 15 J.',	'',	'etwas was leuchtet, z. B. Lichtschlauch oder LED-Lampe',	'Stefan ',	'JA',	''),
(59,	'KKKo',	'Sahinap, 17 J.',	'',	'einen Ball der vibriert oder zum Kneten',	'Stefan ',	'JA',	''),
(60,	'KKKo',	'Tanya, 18 J.',	'',	'Klangschale oder kleinen Gong',	'Bianca ',	'JA',	''),
(61,	'KKKo',	'Gabriel, 19 J.',	'',	'Ausstechformen Tiere fuer Plaetzchen',	'Bianca ',	'JA',	''),
(62,	'LS',	'Augusto, 7 J.',	'',	'Pumukl Vorlesebuch Wintergeschichten',	'Wolfgang ',	'JA',	''),
(63,	'LS',	'Rasmus, 8 J.',	'',	'CD Hoerbuch: dr kleine Drache Kokosnuss',	'Kr',	'JA',	''),
(64,	'LS',	'Y. (Junge), 7 J.',	'',	'Salzkristalllampe',	'Familie Wecker',	'JA',	''),
(65,	'LS',	'A. (Maedchen), 8 J.',	'',	'CD: Entspannungsmusik fuer Kinder z.B. bei Hugendubel',	'Vanessa ',	'JA',	''),
(66,	'LS',	'C. (Maedchen), 10 J.',	'',	'CD Hoerbuch: von Tida Apfelkorn ein Weihnachtsfest voller Geheimnisse',	'I',	'JA',	''),
(67,	'PN',	'Vincent, 16 J.',	'',	'ein Memory mit einfachen Symbolen',	'Claudia ',	'JA',	''),
(68,	'PN',	'Leo, 16 J.',	'',	'CD mit Oldies-Hits',	'Elke ',	'JA',	''),
(69,	'PN',	'Korbinian, 18 J.',	'',	'Kuschig warme Huettenschuhe, Gr. 38',	'Ga',	'JA',	''),
(70,	'PN',	'Regina, 18 J.',	'',	'CD mi Kinderliedern',	'Monika ',	'JA',	''),
(71,	'PN',	'Noah, 19 J.',	'',	'ein spannendes Hoerbuch',	'Fam',	'JA',	''),
(72,	'RS',	'Mahaa, 14 J.',	'',	'Henne Frieda bei der Riedel',	'Fam',	'JA',	''),
(73,	'RS',	'Johanna, 13 J.',	'',	'DVD Berlin mit der U-Bahn erfahren',	'Fa',	'JA',	''),
(74,	'RS',	'Isa, 17 J.',	'',	'CD von Max Rabe mit dem Titel Fuer Frauen ist das kein Problem',	'Katja ',	'JA',	''),
(75,	'RS',	'Vivien, 12 J.',	'',	'Biografie von Helene Fischer',	'Anika ',	'JA',	''),
(76,	'RS',	'Alexander, 17 J.',	'',	'Massageball Konny v. Riedel',	'Martin ',	'JA',	''),
(77,	'SS',	'Fatih, 10 J.',	'',	'Pflanzliche Handcreme und Massageball u. -ring u.-igelball',	'Claudia ',	'JA',	''),
(78,	'SS',	'Ricardo, 14 J.',	'',	'Rassel als Ring o. mit Griff',	'Stefan ',	'JA',	''),
(79,	'SS',	'Kasho, 12 J.',	'',	'Dust-oel nach Winter/ Weihnachten',	'Sylvia',	'JA',	''),
(80,	'SS',	'Mia, 13 J.',	'',	'CD mit Kinderlieder v. sternschnuppe o. Rolf Zukowsky',	'Herr ',	'JA',	''),
(81,	'SS',	'Larissa, 14 J.',	'',	'Fuehlkissen o. Massagekaefer',	'Petra ',	'JA',	''),
(82,	'Schule',	'Mohammet, 16 J.',	'',	'Mehrfarben-LED-Glasfaserlampe Light in the Box; 12,99 EUR',	'San',	'JA',	''),
(83,	'SSSSSP',	'Ivan, 17 J.',	'',	'3 Fragezeichen-Buch',	'We',	'JA',	''),
(84,	'SSSSSP',	'Nick, 17 J.',	'',	'Lichterschlauch o. Leuchthalbkugel',	' Stephan',	'JA',	''),
(85,	'SSSSSP',	'Julian, 17 J.',	'',	'Duftoele Orange',	'Sylvia',	'JA',	'ACHTUNG Sylvia , Änderung auf Orange'),
(86,	'SSSSSP',	'Leo, 18 J.',	'',	'ein guenstiges Kinder-Keyboard',	'Thomas ',	'JA',	''),
(87,	'SB',	'Carla, 11 J.',	'',	'ein Set Leuchtstaebe, www.der-riedel.de, 9,95 EUR',	'Stefan ',	'JA',	''),
(88,	'SB',	'Luci, 6 J.',	'',	'Bambua Kopfmassage-Spinne',	'La.',	'JA',	''),
(89,	'SB',	'Emir, 10 J.',	'',	'Toni-Figur Tabaluga',	'Chris',	'JA',	''),
(90,	'SB',	'Ellias, 13 J.',	'',	'Sternenhimmel-Projektor',	'Stephan',	'JA',	''),
(91,	'SB',	'Lina, 11 J.',	'',	'eine Kuscheldcke fuer den Rolli',	'Sabrina ',	'JA',	''),
(92,	'SB',	'Lilly, 14 J.',	'',	'Gutschein fuer einen Selbsteinkauf bei Galeria Kaufhof',	'Andrea',	'JA',	'Achtung Änderung'),
(93,	'SB',	'Hannah, 17 J.',	'',	'3 CD: Meine große Conni-Ferienbox',	' Veronika',	'JA',	'Achtung Änderung'),
(94,	'SN',	'Salvatore, 11 J.',	'',	'stabile Trommel',	'Sandra ',	'JA',	''),
(95,	'SN',	'Anna-Sophia, 6 J.',	'',	'ein Rasselspielzeug Manhatten Toy',	'Marcus',	'JA',	''),
(96,	'SN',	'Naim, 14 J.',	'',	'Klangschale oder Massage-Set',	'anonym',	'JA',	''),
(97,	'SN',	'Francesco-Luca, 8 J.',	'',	'ein beissfestes grosses Kuscheltier, ca. 50 cm',	'Petra',	'JA',	''),
(98,	'SN',	'Samira, 8 J.',	'',	'Holzkastagnetten mit Griff',	'Elisabeth ',	'JA',	''),
(99,	'TG',	'Mila, 9 J.',	'',	'Tonie-Figur: Lichterkinder die besten Spiel-u. Bewegungslieder',	'I',	'JA',	''),
(100,	'TG',	'Ilyas, 8 J.',	'',	'Fuehl- u. Musikbilderbuch',	'Petra ',	'JA',	''),
(101,	'TG',	'Katharina, 8 J.',	'',	'Sternenhimmel-Projektor',	'kkk',	'JA',	''),
(102,	'TG',	'Noah, 7 J.',	'',	'Massagezubehoer; Handschu, oel, Buerste',	'Anonym',	'JA',	''),
(103,	'TG',	'Belma, 8 J.',	'',	'Fütterungs-Set für Puppe First Words-gestreift, rosa Bayer Design, 93816AA',	'Anonym',	'JA',	''),
(104,	'TF',	'Niels, 14 J.',	'',	'CD: Summer von Herbert Pixner Projekt',	'Silvia ',	'JA',	''),
(105,	'TF',	'Victoria, 19 J.',	'',	'DVD/Blue Ray:Hannah Montana der Film',	'Herr ',	'JA',	''),
(106,	'TF',	'Julia, 19 J.',	'',	'Hoerspiel: Rubinrot Liebe geht durch alle Zeiten',	'Andrea ',	'JA',	''),
(107,	'TF',	'Djulien, 10 J.',	'',	'Buch: Furzipups und Ruediger  Ruellps-Ruessel Band 3',	'I',	'JA',	''),
(108,	'TF',	'Sofya, 17 J.',	'',	'Tip Toi-Buch: wir reisen durch Europa',	'Melissa ',	'JA',	''),
(109,	'TZ',	'Deniz, 10 J.',	'',	'Steck- u. Zaehl-Parkhaus; inklusiv-shop.ariadne.de',	'Claudia',	'JA',	''),
(110,	'TZ',	'Sara T., 13 J.',	'',	'Nachsprech-Spielzeug;  inklusiv-shop.ariadne.de',	'Claudia',	'JA',	'Achtung Änderung'),
(111,	'TZ',	'Mercy, 10 J.',	'',	'Massageschlage; sinnvoll-geschenkt.de',	'Uschi',	'JA',	''),
(112,	'TZ',	'Diamant, 10 J.',	'',	'Geraeusche-Puzzle Musik; sinnvoll-geschenkt.de',	'Uschi ',	'JA',	''),
(113,	'TZ',	'Sara S., 10 J.',	'',	'Leuchtspielzeug; 40003-gummi-ei; sinnvoll-geschenkt.de',	'Familie ',	'JA',	'Achtung Änderung Elke'),
(114,	'TZ',	'Kevser, 14 J., weibl.',	'',	'Leuchtplatte; 40043-A4;Leuchtplatte; 40043-A4; sinnvoll-geschenkt.de',	'Uschi ',	'JA',	''),
(115,	'AZ',	'Ashley Zoe',	'',	'Duschschaum von Rituals',	'Elke',	'JA',	''),
(116,	'AZ',	'Tahir, 19 J.',	'',	'Pflegeprodukte v. Rituals f. Maenner',	'Elke',	'JA',	''),
(117,	'AZ',	'Antonia, 9 J.',	'',	'Stapelspielzeug, z.B. STAX Basic Transparent, S-12036, LED Klemmbausteine bei amazon für aktuell 25,99',	'Claudia',	'JA',	'Achtung Änderung'),
(118,	'AZ',	'Elien, 7 J.',	'Alpaka Wollsocken Gr. 27-30',	'',	'Manuela ',	'JA',	'ACHTUNG ÄNDERUNG An!'),
(123,	'WKK',	'Annesa, 9 J.',	'',	'Kleidung fuer Puppe First Words-gestreift rosa',	'Manuela ',	'JA',	''),
(119,	'WKK',	'Nina, 10 J.',	'',	'Sternenhimmel-Projektor',	'Daniel ',	'JA',	''),
(120,	'WKK',	'Laurenz, 9 J.',	'',	'ein Musikpuzzle',	'Achim ',	'JA',	''),
(121,	'WKK',	'Matei, 11 J.',	'',	'CD: River flows in you von Yiruma',	'Andrea ',	'JA',	''),
(122,	'WKK',	'Felix, 10 J.',	'',	'Bauklotzspiel zum Stecken',	'Martina ',	'JA',	''),
(124,	'AZ',	'Ashley-Zoe',	'9',	'Knister Spielzeug',	'C.',	'JA',	''),
(125,	'KKKo (16-20 Jahre)',	'KKKo (16-20 Jahre)',	'',	'Beurer Fußsprudelbag',	'Familie ',	'JA',	''),
(126,	'AZ',	'Stefano',	'6 Jahre',	'Bettschlange/SeitenschlÃ¤ferkissen',	'Bettschlange',	'JA',	'NEIN');

-- 2022-12-26 13:48:53
