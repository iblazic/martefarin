
-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2016 at 11:52 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pracenje_peroralne_th`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontrola_nalaz_terapija`
--

CREATE TABLE IF NOT EXISTS `kontrola_nalaz_terapija` (
  `S_kontrole` int(11) NOT NULL,
  `Datum_kontrole` date NOT NULL,
  `Datum_i_vrijeme_unosa_kontrole` date NOT NULL,
  `Broj_nalaza` int(11) NOT NULL,
  `Datum_nalaza` date NOT NULL,
  `INR` decimal(10,0) NOT NULL,
  `Datum_i_vrijeme_unosa_nalaza` date NOT NULL,
  `Shema` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `Datum_i_vrijeme_unosa_terapije` date NOT NULL,
  PRIMARY KEY (`S_kontrole`),
  KEY `Datum_kontrole` (`Datum_kontrole`),
  KEY `Datum_nalaza` (`Datum_nalaza`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kontrola_nalaz_terapija`
--

INSERT INTO `kontrola_nalaz_terapija` (`S_kontrole`, `Datum_kontrole`, `Datum_i_vrijeme_unosa_kontrole`, `Broj_nalaza`, `Datum_nalaza`, `INR`, `Datum_i_vrijeme_unosa_nalaza`, `Shema`, `Datum_i_vrijeme_unosa_terapije`) VALUES
(2115, '2016-06-25', '2016-05-03', 215, '2016-05-03', '5', '2016-05-03', '2 ,2 1/2, 2, 2 1/2', '2016-05-03'),
(2377, '2016-06-30', '2016-05-01', 259, '2016-05-01', '3', '2016-05-01', 'svaki dan 1 tbl, subotom 1 1/2', '2016-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `pacijent`
--

CREATE TABLE IF NOT EXISTS `pacijent` (
  `S_Pacijenta` int(11) NOT NULL,
  `Ime` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `Prezime` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `OIB` varchar(11) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `Spol` char(1) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL DEFAULT '',
  `Datum_rodenja` date NOT NULL,
  `Adresa` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `Telefon` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `Status` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `Datum_i_vrijeme_unosa_pacijenta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`S_Pacijenta`),
  UNIQUE KEY `S_Pacijenta` (`S_Pacijenta`),
  UNIQUE KEY `OIB` (`OIB`),
  KEY `OIB_2` (`OIB`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pacijent`
--

INSERT INTO `pacijent` (`S_Pacijenta`, `Ime`, `Prezime`, `OIB`, `Spol`, `Datum_rodenja`, `Adresa`, `Telefon`, `Status`, `Datum_i_vrijeme_unosa_pacijenta`) VALUES
(24789, 'Branka', 'Žic', '12457896587', 'Ž', '1995-12-05', 'Vukovarska bb', '052/587-587', 'Aktivan', '2016-05-02 06:00:00'),
(78987, 'Darko', 'Grubiša', '02546124587', 'M', '1987-04-18', 'Krležina 5', '051/895-658', 'Aktivan', '2016-04-01 08:05:00'),
(1287958, 'Marko', 'Klari?', '12457896547', 'M', '2000-02-02', 'Krležina 10', '051/258-568', 'aktivan', '2016-05-01 08:05:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
