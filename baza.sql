-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 05 Wrz 2020, 14:20
-- Wersja serwera: 10.1.38-MariaDB
-- Wersja PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `e-msi`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `bd`
--

CREATE TABLE `bd` (
  `Lp` int(11) NOT NULL,
  `Name` varchar(4000) COLLATE utf8_polish_ci NOT NULL,
  `Data_od` date NOT NULL,
  `Data_do` date NOT NULL,
  `Miejsce_wyj` varchar(4000) COLLATE utf8_polish_ci NOT NULL,
  `Miejsce_przyj` varchar(4000) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `bd`
--

INSERT INTO `bd` (`Lp`, `Name`, `Data_od`, `Data_do`, `Miejsce_wyj`, `Miejsce_przyj`) VALUES
(1, 'Jan Kowalski', '2020-07-01', '2020-07-16', 'Warszawa', 'Poznań'),
(2, 'Adam Nowak', '2020-05-03', '2020-05-22', 'Kraków', 'Wrocław'),
(3, 'Anna Jop', '2019-06-02', '2019-06-19', 'Gdańsk', 'Zakopane'),
(4, 'Mikołaj Ryc', '2018-01-12', '2018-01-22', 'Berlin', 'Dortmund'),
(5, 'Marcin Szczęsny', '2016-11-12', '2016-11-19', 'Madryt', 'Lizbona'),
(6, 'Jarosław Mały', '2018-08-22', '2018-08-30', 'Paryż', 'Belgrad');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kontrahent`
--

CREATE TABLE `kontrahent` (
  `NIP` text COLLATE utf8_polish_ci NOT NULL,
  `REGON` int(11) NOT NULL,
  `Nazwa` text COLLATE utf8_polish_ci NOT NULL,
  `Platnik` tinyint(1) NOT NULL,
  `Ulica` text COLLATE utf8_polish_ci NOT NULL,
  `Nr_domu` text COLLATE utf8_polish_ci NOT NULL,
  `Nr_miesz` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `kontrahent`
--

INSERT INTO `kontrahent` (`NIP`, `REGON`, `Nazwa`, `Platnik`, `Ulica`, `Nr_domu`, `Nr_miesz`) VALUES
('111111', 121212121, 'Nazwa1', 1, 'Olszowa', '14', ''),
('2222', 232323232, 'Nazwa2', 0, 'Wąska', '12a', '8'),
('333333333', 454545454, 'Nazwa3', 1, 'Niska', '12', '1'),
('5555555', 898989898, 'Nazwa5', 0, 'Kamienna', '55a', '12'),
('6666666', 808080808, 'Nazwa6', 1, 'Piłsudskiego', '18', '');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `bd`
--
ALTER TABLE `bd`
  ADD PRIMARY KEY (`Lp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `bd`
--
ALTER TABLE `bd`
  MODIFY `Lp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
