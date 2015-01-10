-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Računalo: localhost
-- Vrijeme generiranja: Sij 10, 2015 u 05:14 AM
-- Verzija poslužitelja: 5.6.17
-- PHP verzija: 5.5.11-1~dotdeb.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza podataka: `seminar`
--

-- --------------------------------------------------------

--
-- Tablična struktura za tablicu `klijent`
--

CREATE TABLE IF NOT EXISTS `klijent` (
  `idKlijent` int(20) NOT NULL AUTO_INCREMENT,
  `idProba` int(20) DEFAULT NULL,
  `imeKlijent` varchar(45) COLLATE utf8_croatian_ci NOT NULL,
  `prezimeKlijent` varchar(45) COLLATE utf8_croatian_ci NOT NULL,
  `datumRodjenja` date NOT NULL,
  `adresa` varchar(45) COLLATE utf8_croatian_ci NOT NULL,
  `drzava` varchar(45) COLLATE utf8_croatian_ci NOT NULL,
  `predbroj` varchar(45) COLLATE utf8_croatian_ci NOT NULL,
  `telefon` varchar(45) COLLATE utf8_croatian_ci NOT NULL,
  `dozvola` int(5) NOT NULL,
  PRIMARY KEY (`idKlijent`),
  KEY `idProba` (`idProba`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci AUTO_INCREMENT=39 ;

--
-- Izbacivanje podataka za tablicu `klijent`
--

INSERT INTO `klijent` (`idKlijent`, `idProba`, `imeKlijent`, `prezimeKlijent`, `datumRodjenja`, `adresa`, `drzava`, `predbroj`, `telefon`, `dozvola`) VALUES
(29, 23, 'Petar', 'Tomorad Rudec', '1991-08-26', 'Trepčanska 18', 'Hrvatska', '+385', '995904404', 0),
(30, 24, 'Proba', 'Probić', '2014-05-26', 'Probna 1, Probavila', 'Hrvatska', '+385', '99123456', 1),
(31, 25, 'Maja', 'Tralić', '1993-01-19', 'Ulica 2, Zagreb', 'Hrvatska', '+385', '99130589', 0),
(35, 29, 'Marko', 'Blažević', '1991-08-23', 'Grižanska 100, Zagreb', 'Hrvatska', '+385', '99111222', 0),
(38, 32, 'Ivan', 'Horvat', '1990-05-05', '', '', '+385', '9985632', 1);

-- --------------------------------------------------------

--
-- Tablična struktura za tablicu `podaci`
--

CREATE TABLE IF NOT EXISTS `podaci` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `korisnickoIme` varchar(45) COLLATE utf8_croatian_ci NOT NULL,
  `lozinka` char(128) COLLATE utf8_croatian_ci NOT NULL,
  `salt` char(128) COLLATE utf8_croatian_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci AUTO_INCREMENT=33 ;

--
-- Izbacivanje podataka za tablicu `podaci`
--

INSERT INTO `podaci` (`id`, `korisnickoIme`, `lozinka`, `salt`, `email`) VALUES
(23, 'petar123', '0274a4f3b378caf74cdd0c0cc31c52d81d89dd60ba64088ff904a569569810e5', 'e01', 'petar@gmail.com'),
(24, 'proba', '0b4c24286c5b0f3dd37659e8ab51a608db66f84cb80c0f8e5f99429d44d58f55', 'f05', 'proba@email.com'),
(25, 'majazmaja', '085637160c2582d882bf4258e4c672f445dc53dec9029765420d275b07dbf370', 'f2c', 'maja.tralic@gmail.com'),
(26, 'marko123', 'e171ff4498af72f0efc469eda455150a80f80fc2a2810418fbfe69ec6b4304b1', 'bb8', 'markob3@net.amis.hr'),
(29, 'marko', '9fb013f88e0d8a67282fab862cbbc0f9e3b6c2ab3a43d3e25cf914f8eb5d04ff', '29d', 'mblazevi2@tvz.hr'),
(30, 'marko123', 'f210bc69620c1438df805235e103187044b3b0cff9ba837eb2b5934d6960bea7', '1c5', 'teskiklosar@gmail.com'),
(32, 'admin', '6cc6f859a3aa04035c5404a899ae2858dcaa0c7cfe8fdcee7e529d36987306f8', '617', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Tablična struktura za tablicu `rezervacija`
--

CREATE TABLE IF NOT EXISTS `rezervacija` (
  `idRezervacija` int(20) NOT NULL AUTO_INCREMENT,
  `idKlijenta` int(20) NOT NULL,
  `idVeza` int(20) NOT NULL,
  `idUsluga` int(20) NOT NULL,
  `datumPocetak` datetime NOT NULL,
  `datumKraj` datetime NOT NULL,
  PRIMARY KEY (`idRezervacija`),
  KEY `idKlijenta` (`idKlijenta`),
  KEY `idVeza` (`idVeza`),
  KEY `idUsluga` (`idUsluga`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci AUTO_INCREMENT=22 ;

--
-- Izbacivanje podataka za tablicu `rezervacija`
--

INSERT INTO `rezervacija` (`idRezervacija`, `idKlijenta`, `idVeza`, `idUsluga`, `datumPocetak`, `datumKraj`) VALUES
(1, 29, 2, 2, '2014-06-15 00:00:00', '2014-07-03 00:00:00'),
(7, 29, 7, 5, '2014-06-09 00:00:00', '2014-06-27 00:00:00'),
(8, 30, 32, 5, '2014-06-25 12:00:00', '2014-07-05 12:00:00'),
(11, 30, 21, 7, '2014-06-05 12:00:00', '2014-06-18 12:00:00'),
(12, 31, 10, 6, '2014-06-06 12:00:00', '2014-06-23 12:00:00'),
(14, 31, 41, 8, '2014-06-23 12:00:00', '2014-06-30 12:00:00'),
(15, 31, 24, 7, '2014-07-31 12:00:00', '2014-08-23 12:00:00'),
(16, 0, 6, 2, '2014-06-30 12:00:00', '2014-07-24 12:00:00'),
(21, 38, 35, 5, '2014-06-18 12:00:00', '2014-06-30 12:00:00');

-- --------------------------------------------------------

--
-- Tablična struktura za tablicu `usluge`
--

CREATE TABLE IF NOT EXISTS `usluge` (
  `idUsluga` int(20) NOT NULL AUTO_INCREMENT,
  `nazivUsluga` varchar(45) COLLATE utf8_croatian_ci NOT NULL,
  `cijenaUsluga` decimal(15,2) NOT NULL,
  PRIMARY KEY (`idUsluga`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci AUTO_INCREMENT=9 ;

--
-- Izbacivanje podataka za tablicu `usluge`
--

INSERT INTO `usluge` (`idUsluga`, `nazivUsluga`, `cijenaUsluga`) VALUES
(1, 'struja', '100.00'),
(2, 'voda', '100.00'),
(3, 'internet', '60.00'),
(4, 'struja, voda', '190.00'),
(5, 'struja, internet', '150.00'),
(6, 'voda, internet', '150.00'),
(7, 'struja, voda, internet', '250.00'),
(8, 'bez usluge', '0.00');

-- --------------------------------------------------------

--
-- Tablična struktura za tablicu `vez`
--

CREATE TABLE IF NOT EXISTS `vez` (
  `idVez` int(20) NOT NULL AUTO_INCREMENT,
  `tip` varchar(45) COLLATE utf8_croatian_ci NOT NULL,
  `cijena` decimal(15,2) NOT NULL,
  PRIMARY KEY (`idVez`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci AUTO_INCREMENT=42 ;

--
-- Izbacivanje podataka za tablicu `vez`
--

INSERT INTO `vez` (`idVez`, `tip`, `cijena`) VALUES
(2, 'mali', '2000.00'),
(3, 'mali', '2000.00'),
(4, 'mali', '2000.00'),
(5, 'mali', '2000.00'),
(6, 'mali', '2000.00'),
(7, 'mali', '2000.00'),
(8, 'mali', '2000.00'),
(9, 'mali', '2000.00'),
(10, 'mali', '2000.00'),
(11, 'mali', '2000.00'),
(12, 'mali', '2000.00'),
(13, 'mali', '2000.00'),
(14, 'mali', '2000.00'),
(15, 'mali', '2000.00'),
(16, 'mali', '2000.00'),
(17, 'mali', '2000.00'),
(18, 'mali', '2000.00'),
(19, 'mali', '2000.00'),
(20, 'mali', '2000.00'),
(21, 'mali', '2000.00'),
(22, 'veliki', '4000.00'),
(23, 'veliki', '4000.00'),
(24, 'veliki', '4000.00'),
(25, 'veliki', '4000.00'),
(26, 'veliki', '4000.00'),
(27, 'veliki', '4000.00'),
(28, 'veliki', '4000.00'),
(29, 'veliki', '4000.00'),
(30, 'veliki', '4000.00'),
(31, 'veliki', '4000.00'),
(32, 'vanjski', '3000.00'),
(33, 'vanjski', '3000.00'),
(34, 'vanjski', '3000.00'),
(35, 'vanjski', '3000.00'),
(36, 'vanjski', '3000.00'),
(37, 'vanjski', '3000.00'),
(38, 'vanjski', '3000.00'),
(39, 'vanjski', '3000.00'),
(40, 'vanjski', '3000.00'),
(41, 'vanjski', '3000.00');

--
-- Ograničenja za izbačene tablice
--

--
-- Ograničenja za tablicu `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD CONSTRAINT `rezervacija_ibfk_2` FOREIGN KEY (`idVeza`) REFERENCES `vez` (`idVez`) ON UPDATE CASCADE,
  ADD CONSTRAINT `rezervacija_ibfk_4` FOREIGN KEY (`idUsluga`) REFERENCES `usluge` (`idUsluga`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
