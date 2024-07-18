-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: localhost
-- Létrehozás ideje: 2024. Júl 18. 18:30
-- Kiszolgáló verziója: 8.0.36
-- PHP verzió: 8.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `firstpadlo`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `customer-reviews`
--

CREATE TABLE `customer-reviews` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `rating` tinyint NOT NULL,
  `message` text COLLATE utf8mb4_general_ci NOT NULL,
  `public` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `title` varchar(75) COLLATE utf8mb4_general_ci NOT NULL,
  `intro` text COLLATE utf8mb4_general_ci NOT NULL,
  `cover` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `content` text COLLATE utf8mb4_general_ci NOT NULL,
  `created` datetime NOT NULL,
  `public` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `services`
--

INSERT INTO `services` (`id`, `title`, `intro`, `cover`, `content`, `created`, `public`) VALUES
(1, 'WPC burkolás', '', 'wpc burkolás.jpg', '', '2024-07-01 17:30:28', 1),
(2, 'Keményfa és laminált padló burkolás', '', 'fa burkolás.jpg', '', '2024-07-03 17:30:28', 1),
(3, 'SPC és VINYL burkolás', '', 'SPC burkolás.jpg', '', '2024-07-02 17:37:57', 1),
(4, 'Tapétázás', '', 'tapétázás.jpg', '', '2024-07-03 17:37:57', 1),
(5, 'Függönyvarrás', '', 'függönyvarrás.jpg', '', '2024-07-04 17:50:13', 1),
(6, 'Házhozszállítás', '', 'hazhozszallitas.jpg', '', '2024-07-12 17:50:13', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(3, 'Kicsi', 'd16fb36f0911f878998c136191af705e', 'Oláh Krisztián'),
(4, 'Jaki', '9f5cc93a91524713c66b55d7ff1233fb', 'Gipsz Jakab'),
(7, 'Pista', '9b5bd5c86c722ebf5f5426ca97684933', 'Kis István'),
(8, 'Fütyi', '2d27676f3be9e1688a16c5cb925bc475', 'Füty Imre'),
(9, 'Kaki', '5541c7b5a06c39b267a5efae6628e003', 'Ka Ki'),
(10, 'Eli', '123adf9fbff2a793effb959e18dd6e42', 'Mekk Elek'),
(11, 'Jóska', '7510d498f23f5815d3376ea7bad64e29', 'Hahó Józska'),
(12, 'Kati', '11ddc939dd2a6316d734ae2ee9efcbca', 'Kovács Katalin'),
(13, 'Farki', '202cb962ac59075b964b07152d234b70', 'Farkas József'),
(14, 'Johnnie', '81dc9bdb52d04dc20036dbd8313ed055', 'John Doe'),
(15, 'Jane', '1c9a44eb2e8eaf3da1eb551da310cce7', 'Jane Doe'),
(16, 'Kató', '05155838d6a9b3ff384a8b247be221b5', 'Szomszéd Katalin'),
(17, 'Will', '202cb962ac59075b964b07152d234b70', 'William Bleak'),
(18, 'Imi', 'f34e082ec6bdde3cd47e7a59a0e5d901', 'Oláh Imre');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `customer-reviews`
--
ALTER TABLE `customer-reviews`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `customer-reviews`
--
ALTER TABLE `customer-reviews`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
