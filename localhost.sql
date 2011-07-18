-- phpMyAdmin SQL Dump
-- version 3.3.7deb5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 17. Juli 2011 um 21:36
-- Server Version: 5.1.49
-- PHP-Version: 5.3.3-7+squeeze3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `info`
--
CREATE DATABASE `info` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `info`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fahrten`
--

CREATE TABLE IF NOT EXISTS `fahrten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datum` date NOT NULL DEFAULT '0000-00-00',
  `gesammt` int(4) NOT NULL DEFAULT '0',
  `gekommen` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `fahrten`
--

INSERT INTO `fahrten` (`id`, `datum`, `gesammt`, `gekommen`) VALUES
(1, '0000-00-00', 12, 4);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `prognose`
--

CREATE TABLE IF NOT EXISTS `prognose` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `datum` date NOT NULL DEFAULT '0000-00-00',
  `eingang` int(7) unsigned NOT NULL DEFAULT '0',
  `abgang` int(7) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `prognose`
--

INSERT INTO `prognose` (`id`, `datum`, `eingang`, `abgang`) VALUES
(1, '0000-00-00', 100002, 834552);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `stoerung`
--

CREATE TABLE IF NOT EXISTS `stoerung` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `datum` date NOT NULL DEFAULT '0000-00-00',
  `vs1` int(3) unsigned NOT NULL,
  `vs2` int(3) unsigned NOT NULL,
  `vs3` int(3) unsigned NOT NULL,
  `vs4` int(3) unsigned NOT NULL,
  `vs5` int(3) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `stoerung`
--

INSERT INTO `stoerung` (`id`, `datum`, `vs1`, `vs2`, `vs3`, `vs4`, `vs5`) VALUES
(1, '0000-00-00', 4, 3, 6, 2, 0);
