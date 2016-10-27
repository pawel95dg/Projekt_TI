-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 26 Paź 2016, 19:17
-- Wersja serwera: 10.1.16-MariaDB
-- Wersja PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projektti`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `iduzytkownika` int(11) NOT NULL,
  `imie` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `nr_tel` bigint(20) NOT NULL,
  `adres` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `uprawnienia` int(11) NOT NULL,
  `user_log` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `user_pass` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`iduzytkownika`, `imie`, `nazwisko`, `nr_tel`, `adres`, `uprawnienia`, `user_log`, `user_pass`) VALUES
(1, 'Piotr', 'Elmrych', 533024873, 'Sarnów \r\nul. Wiejska 60\r\n42-512', 1, 'admin', 'admin'),
(2, 'Marian ', 'Kowalski', 213123332, 'Świebodzin\r\nul. Jeżego Boskiego 55\r\n40-666', 0, 'marian', 'marian'),
(3, 'Magdalena', 'Nowak', 111111111, 'Bedzin\r\nul.zamkowa 44\r\n52-323', 0, 'magdalena', 'magdalena'),
(4, 'Adam', 'Kołacz', 222222222, 'Bedzin\r\nul.zamkowa 33\r\n52-323', 0, 'adam', 'adam'),
(5, 'Kamil', 'Markowski', 333333333, 'Bedzin\r\nul.katowicka 12\r\n52-323', 0, 'kamil', 'kamil');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `idzamowienia` int(11) NOT NULL,
  `iduzytkownika` int(11) NOT NULL,
  `tytul` text NOT NULL,
  `opis` text NOT NULL,
  `data` date NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `zamowienia`
--

INSERT INTO `zamowienia` (`idzamowienia`, `iduzytkownika`, `tytul`, `opis`, `data`, `status`) VALUES
(1, 3, 'Minarc mig 250 ', 'The problem is collapsed with missfire on 450A.', '2016-10-24', 'oczekujace'),
(2, 3, 'Pro evo 2500', 'Welding pistol problem', '2016-10-24', 'oczekujace'),
(3, 3, 'Migatronic MS 260X', 'Front panel problem', '2016-10-24', 'oczekujace'),
(4, 5, 'Snake 210A', 'No touch response.', '2016-08-18', 'zakonczone'),
(5, 5, 'Snake 250A', 'No touch response.', '2016-10-18', 'oczekujace'),
(6, 5, 'Snake 140', 'Power cable issue', '2016-10-18', 'oczekujace');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`iduzytkownika`);

--
-- Indexes for table `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`idzamowienia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `iduzytkownika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `idzamowienia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
