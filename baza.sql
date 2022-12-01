
--
-- Baza danych: `mucha`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `JDM`
--

CREATE TABLE `JDM` (
  `JDMID` int(11) NOT NULL,
  `dostepne` tinytext DEFAULT NULL,
  `Marka` tinytext DEFAULT NULL,
  `Model` tinytext DEFAULT NULL,
  `Cena` text DEFAULT NULL,
  `Moc` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `JDM`
--

INSERT INTO `JDM` (`JDMID`, `dostepne`, `Marka`, `Model`, `Cena`, `Moc`) VALUES
(1, 'tak', 'Nissan', 'R34 GT-R', '1 500 000', '400KM'),
(2, 'tak', 'Toyota', 'Supra MK4', '2 000 000', '3000KM'),
(3, 'tak', 'Lexus', 'IS300', '150 000', '410KM'),
(4, 'tak', 'Mazda', 'Rx7', '600 000', '330KM'),
(5, 'tak', 'Honda', 'EG Type R', '50 000', '900KM');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `SO`
--

CREATE TABLE `OS` (
  `OSID` int(11) NOT NULL,
  `dostepne` tinytext DEFAULT NULL,
  `Marka` tinytext DEFAULT NULL,
  `Model` tinytext DEFAULT NULL,
  `Cena` text DEFAULT NULL,
  `Moc` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `OS`
--

INSERT INTO `OS` (`OSID`, `dostepne`, `Marka`, `Model`, `Cena`, `Moc`) VALUES
(1, 'tak', 'Audi', 'a3 8l', '3 000', '80KM'),
(2, 'tak', 'Toyota', 'Yaris', '2 000', '50KM'),
(3, 'tak', 'Lexus', 'IS200', '15 000', '150KM'),
(4, 'tak', 'Mazda', 'Rx8', '6 000', '130KM'),
(5, 'tak', 'Honda', 'EG', '12 000', '90KM');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ASS`
--

CREATE TABLE `ASS` (
  `ASID` int(11) NOT NULL,
  `dostepne` tinytext DEFAULT NULL,
  `Marka` tinytext DEFAULT NULL,
  `Model` tinytext DEFAULT NULL,
  `Cena` text DEFAULT NULL,
  `Moc` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `ASS`
--

INSERT INTO `ASS` (`ASID`, `dostepne`, `Marka`, `Model`, `Cena`, `Moc`) VALUES
(1, 'tak', 'Audi', 'RS-7', ' 500 000', '700KM'),
(2, 'tak', 'Bmw', 'M3', '600 000', '750KM'),
(3, 'tak', 'Porshe', '911 GT3 RS', '1 232 000', '510KM'),
(4, 'tak', 'Mercedes', 'C63', '1 000 000', '630KM'),
(5, 'tak', 'Alfa-Romeo', 'Quadrifoglio', '539 000', '490KM');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ss`
--

CREATE TABLE `ss` (
  `SSID` int(11) NOT NULL,
  `dostepne` tinytext DEFAULT NULL,
  `Marka` tinytext DEFAULT NULL,
  `Model` tinytext DEFAULT NULL,
  `Cena` text DEFAULT NULL,
  `Moc` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `ss`
--

INSERT INTO `ss` (`SSID`, `dostepne`, `Marka`, `Model`, `Cena`, `Moc`) VALUES
(1, 'tak', 'Lamborghini', 'Aventador', '1 350 000', '610KM'),
(2, 'tak', 'Ferrari', 'LaFerrari', '5 000 000', '730KM'),
(3, 'tak', 'McLaren', 'P1', '2 500 000', '720'),
(4, 'tak', 'koenigsegg', 'One:1', '10 000 000', '1000KM'),
(5, 'tak', 'Bugatti', 'Chiron', '15 000 000', '1600KM');


-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `imie` tinytext DEFAULT NULL,
  `nazwisko` tinytext DEFAULT NULL,
  `login` tinytext DEFAULT NULL,
  `haslo` tinytext DEFAULT NULL,
  `email` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`userID`, `imie`, `nazwisko`, `login`, `haslo`, `email`) VALUES
(10, 'Michał', 'Mucha', 'mucha12', 'lubieplacki', 'mucha@gmail.com');
-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zapytania`
--

CREATE TABLE `zapytania` (
  `zapytanieID` int(11) NOT NULL,
  `imie` tinytext DEFAULT NULL,
  `nazwisko` tinytext DEFAULT NULL,
  `auto` tinytext DEFAULT NULL,
  `co` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `zapytania`
--

INSERT INTO `zapytania` (`zapytanieID`, `imie`, `nazwisko`, `auto`, `co`) VALUES
(1, 'Michal', 'Mucha', 'Subaru', 'Wersja Sti I Niebieska zlote fele');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `JDM`
--
ALTER TABLE `JDM`
  ADD PRIMARY KEY (`JDMID`);

--
-- Indeksy dla tabeli `ASS`
--
ALTER TABLE `ASS`
  ADD PRIMARY KEY (`ASID`);

--
-- Indeksy dla tabeli `ss`
--
ALTER TABLE `ss`
  ADD PRIMARY KEY (`ssID`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indeksy dla tabeli `zapytania`
--
ALTER TABLE `zapytania`
  ADD PRIMARY KEY (`zapytanieID`);

--
-- Indeksy dla tabeli `OS`
--
ALTER TABLE `OS`
  ADD PRIMARY KEY (`OSID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `JDM`
--
ALTER TABLE `JDM`
  MODIFY `JDMID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;


--
-- AUTO_INCREMENT dla tabeli `ASS`
--
ALTER TABLE `ASS`
  MODIFY `ASID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT dla tabeli `ss`
--
ALTER TABLE `ss`
  MODIFY `SSID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT dla tabeli `OS`
--
ALTER TABLE `OS`
  MODIFY `OSID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `zapytania`
--
ALTER TABLE `zapytania`
  MODIFY `zapytanieID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
