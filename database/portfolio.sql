-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 11 jun 2021 om 09:24
-- Serverversie: 10.4.17-MariaDB
-- PHP-versie: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `berichten`
--

CREATE TABLE `berichten` (
  `ID` int(11) NOT NULL,
  `naam` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefoonnummer` int(11) NOT NULL,
  `bedrijfsnaam` varchar(100) NOT NULL,
  `vestigingsplaats` varchar(100) NOT NULL,
  `adres` varchar(100) NOT NULL,
  `postcode` text NOT NULL,
  `onderwerp` varchar(200) NOT NULL,
  `uitleg` text NOT NULL,
  `tijd` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `berichten`
--

INSERT INTO `berichten` (`ID`, `naam`, `email`, `telefoonnummer`, `bedrijfsnaam`, `vestigingsplaats`, `adres`, `postcode`, `onderwerp`, `uitleg`, `tijd`) VALUES
(3, 'Jan', 'Jan@Outlook.nl', 612345678, 'Jan BV', 'Haarlem', 'straat 4', '1234AB', 'Help', 'Help', '2021-06-11 08:50:38'),
(4, 'Jan', 'Jan@Outlook.nl', 612345678, 'Jan BV', 'Haarlem', 'straat 4', '1234AB', 'Help', 'Help', '2021-06-11 08:51:28');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `collaborations`
--

CREATE TABLE `collaborations` (
  `afbeelding` text NOT NULL,
  `titel` text NOT NULL,
  `tekst` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `collaborations`
--

INSERT INTO `collaborations` (`afbeelding`, `titel`, `tekst`) VALUES
('images/apple.png', 'Apple', 'Ik heb de webshop van Apple gemaakt'),
('images/microsoft.png', 'Microsoft', 'Ik heb software gemaakt voor windows 10'),
('images/nike.jpg', 'Nike', 'Ik heb geholpen bij de ontwikkeling van de nike app'),
('images/shell.jpg', 'Shell', 'Ik heb de website gemaakt van Shell'),
('images/addidas.jpg', 'Adidas', 'Heb geholpen met de ontwikkeling van de webshop'),
('images/starbucks.png', 'Starbucks', 'Ik heb geholpen bij de website');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `projecten`
--

CREATE TABLE `projecten` (
  `titel` varchar(100) NOT NULL,
  `tekst` text NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `projecten`
--

INSERT INTO `projecten` (`titel`, `tekst`, `logo`) VALUES
('Portfolio', 'De portfolio website was mijn eerst one page website die ik heb gemaakt. Ik heb hier veel van geleerd', 'fas fa-id-card'),
('Sport in Haarlem', 'Dit was mijn eerste grootte project. We hadden een website gemaakt voor veel verschillende sporten die je kon doen in Haarlem.', 'fas fa-running'),
('GameCity', 'GameCity was de eerste webshop die ik heb gemaakt. Op de webshop werden allemaal games verkocht en consoles', 'fas fa-gamepad');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `skills`
--

CREATE TABLE `skills` (
  `tekst` text NOT NULL,
  `skillNaam` varchar(100) NOT NULL,
  `skillPercentage` int(11) NOT NULL,
  `afkorting` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `skills`
--

INSERT INTO `skills` (`tekst`, `skillNaam`, `skillPercentage`, `afkorting`) VALUES
('', 'HTML', 90, 'html'),
('', 'CSS', 70, 'css'),
('', 'JavaScript', 20, 'js'),
('', 'PHP', 50, 'php'),
('', 'MySQL', 40, 'mysql'),
('', 'C#', 80, 'c');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `berichten`
--
ALTER TABLE `berichten`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `berichten`
--
ALTER TABLE `berichten`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
