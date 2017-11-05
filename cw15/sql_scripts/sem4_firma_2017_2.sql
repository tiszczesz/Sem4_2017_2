-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 05 Lis 2017, 10:56
-- Wersja serwera: 10.1.26-MariaDB
-- Wersja PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `sem4_firma_2017_2`
--
CREATE DATABASE IF NOT EXISTS `sem4_firma_2017_2` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci;
USE `sem4_firma_2017_2`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `workers`
--

DROP TABLE IF EXISTS `workers`;
CREATE TABLE `workers` (
  `id` int(11) NOT NULL,
  `imie` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `pensja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `workers`
--

INSERT INTO `workers` (`id`, `imie`, `nazwisko`, `pensja`) VALUES
(1, 'Tomasz', 'Nowak', 3500),
(2, 'Grażyna', 'Małecka', 2900),
(3, 'Urszula', 'Dudziak', 3900),
(4, 'Anna', 'Hajduk', 4900),
(5, 'Przemysław', 'Turek', 2800),
(6, 'Tomasz', 'Kowalski', 5500),
(7, 'Barbara', 'Rusek', 3700),
(8, 'Janusz', 'Trojek', 5300),
(9, 'Halina', 'Malina', 3200),
(10, 'Eugeniusz', 'Jontek', 4500);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
