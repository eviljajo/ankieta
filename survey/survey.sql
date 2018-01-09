-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Sty 2018, 21:30
-- Wersja serwera: 10.1.28-MariaDB
-- Wersja PHP: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `survey`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tblsurvey`
--

CREATE TABLE `tblsurvey` (
  `ID` int(11) NOT NULL,
  `Question` text COLLATE utf8_polish_ci NOT NULL,
  `OptionA` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `OptionB` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `OptionC` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `VotedA` int(11) NOT NULL DEFAULT '1',
  `VotedB` int(11) NOT NULL DEFAULT '1',
  `VotedC` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `tblsurvey`
--

INSERT INTO `tblsurvey` (`ID`, `Question`, `OptionA`, `OptionB`, `OptionC`, `VotedA`, `VotedB`, `VotedC`) VALUES
(1, 'Jak często korzystasz z portali społecznościowych?', '10 minut dziennie', '\r\n2 - 5h dziennie ', 'więcej niż 5h dziennie', 2, 8, 5),
(2, 'W jakim celu korzystasz z portali społecznościowych?', 'kontakt ze znajomymi', 'poznawanie nowych ludzi', 'łączenie się w grupy zainteresowań', 30, 33, 15),
(7, 'Z jakich portali społecznościowych korzystasz najczęściej?', ' Facebook ', ' google+', 'Youtube', 12, 2, 12),
(3, 'Wskaż najważniejszą cechę portalu społecznościowego.', ' brak opłat za korzystanie z serwisu ', 'aplikacja mobilna serwisu ', '\r\nzaawansowana funkcjonalność serwisu ', 24, 44, 6),
(4, 'Czy korzystałbyś/łabyś z innego  portalu społecznościowego, skupiającego wszystkie niezbędne narzędzia internetowe, m.in. te, które znajdują się w poprzednim pytaniu?\r\n', 'Na pewno', 'trudno powiedzieć', 'Na pewno nie', 25, 33, 12),
(5, 'Jakie elementy reklamy zachęcają Cię do korzystania z portali społecznościowych?', ' konkursy z nagrodami ', 'organizowanie imprez/happeningów dla użytkowników portalu społecznościowego', ' newsletter, informacje otrzymywane na temat nowości/funkcjonalności/zmian dot. portalu społecznościowego ', 22, 20, 11),
(6, 'Płeć:', 'kobieta', ' mężczyzna', 'did you just assume my gender?', 16, 7, 13),
(8, 'Wiek:', '12 - 15 lat', '16 - 19 lat ', '20 - 30 lat', 34, 44, 50),
(9, 'Wykształcenie:', 'podstawowe', 'średnie', 'wyższe', 23, 12, 14);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `tblsurvey`
--
ALTER TABLE `tblsurvey`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `tblsurvey`
--
ALTER TABLE `tblsurvey`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
