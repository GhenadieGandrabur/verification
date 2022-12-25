-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Дек 24 2022 г., 22:21
-- Версия сервера: 10.5.18-MariaDB
-- Версия PHP: 7.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tahograf_taho`
--

-- --------------------------------------------------------

--
-- Структура таблицы `author`
--

CREATE TABLE `author` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` varchar(256) NOT NULL,
  `priority` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `author`
--

INSERT INTO `author` (`id`, `date`, `name`, `email`, `password`, `priority`) VALUES
(1, '2022-09-09', 'Boss', 'info@tahograf.md', '123', '1'),
(2, '2022-09-09', 'Manager', 'ghenadiigandrabur@gmail.com', '123', '1'),
(3, '0000-00-00', 'Ghenadie', 'test@test.md', '$2y$10$asVuySVYKZlJpS.iMIuFKOogSjJmNVpWzANnCCjBYo7ZKkBqASvUW', ''),
(4, '0000-00-00', 'Dima', 'dm@dm.md', '$2y$10$IIHEk2lBooAyx6ViWdsMM.PHfk3vgETpizS6oXvekzbty4nkm.6Eq', '');

-- --------------------------------------------------------

--
-- Структура таблицы `brands`
--

CREATE TABLE `brands` (
  `id` int(5) NOT NULL,
  `namebrand` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `brands`
--

INSERT INTO `brands` (`id`, `namebrand`) VALUES
(1, 'MB'),
(2, 'VOLVO'),
(3, 'IVECO');

-- --------------------------------------------------------

--
-- Структура таблицы `certificates`
--

CREATE TABLE `certificates` (
  `id` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `vehicle` text NOT NULL,
  `proprietar` varchar(30) NOT NULL,
  `k_vechi` varchar(5) NOT NULL,
  `k_nou` varchar(5) NOT NULL,
  `w_vechi` varchar(5) NOT NULL,
  `w_nou` varchar(5) NOT NULL,
  `odometrupina` varchar(7) NOT NULL,
  `odometrudupa` varchar(7) NOT NULL,
  `presiune` varchar(3) NOT NULL,
  `lungimeacircomferentii` varchar(4) NOT NULL,
  `limitatordeviteza` varchar(3) NOT NULL,
  `valabilitate` text NOT NULL,
  `baterea` int(1) NOT NULL,
  `authorId` int(5) NOT NULL,
  `vin` varchar(20) NOT NULL,
  `tyresize` varchar(20) NOT NULL,
  `yearproduction` text NOT NULL,
  `tahoId` int(2) NOT NULL,
  `tahotype` varchar(20) NOT NULL,
  `measurementRange` text NOT NULL,
  `recordertypeId` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `certificates`
--

INSERT INTO `certificates` (`id`, `date`, `vehicle`, `proprietar`, `k_vechi`, `k_nou`, `w_vechi`, `w_nou`, `odometrupina`, `odometrudupa`, `presiune`, `lungimeacircomferentii`, `limitatordeviteza`, `valabilitate`, `baterea`, `authorId`, `vin`, `tyresize`, `yearproduction`, `tahoId`, `tahotype`, `measurementRange`, `recordertypeId`) VALUES
(66, '2022-12-24 00:00:00', '', '', '44444', '', '44444', '', '6', '16', '', '', '', '24.12.2024', 0, 3, '', '', '', 0, '', '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `taholist`
--

CREATE TABLE `taholist` (
  `id` int(10) NOT NULL,
  `tahonumber` text NOT NULL,
  `tahotypeId` int(2) NOT NULL,
  `recordertypeId` int(1) NOT NULL,
  `measurementRange` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `taholist`
--

INSERT INTO `taholist` (`id`, `tahonumber`, `tahotypeId`, `recordertypeId`, `measurementRange`) VALUES
(1, '1111111111', 1, 1, '125 km/h'),
(2, '123456', 1, 0, '125 km/h'),
(3, '213654789', 4, 0, '180 km/h'),
(4, '123456', 5, 0, '125 km/h'),
(5, '123456', 3, 0, '180 km/h'),
(6, '123456', 1, 0, '125 km/h'),
(7, '123654', 4, 0, '220 km/h'),
(8, '09000554', 7, 0, '220 km/h');

-- --------------------------------------------------------

--
-- Структура таблицы `tahotypes`
--

CREATE TABLE `tahotypes` (
  `id` int(11) NOT NULL,
  `typetaho` varchar(20) NOT NULL,
  `recordertype` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `tahotypes`
--

INSERT INTO `tahotypes` (`id`, `typetaho`, `recordertype`) VALUES
(1, 'VDO 1314', 0),
(2, 'VDO 1318', 0),
(3, 'VDO 1324', 0),
(4, 'VDO 1381', 1),
(5, 'VR 2400', 0),
(6, 'SE5000', 1),
(7, 'Efas', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `tyressize`
--

CREATE TABLE `tyressize` (
  `id` int(11) NOT NULL,
  `size` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `tyressize`
--

INSERT INTO `tyressize` (`id`, `size`) VALUES
(1, '315/70R22.5'),
(2, '315/80R22.5'),
(3, '315/70/R21.5'),
(4, '315/80/22.5 ');

-- --------------------------------------------------------

--
-- Структура таблицы `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(5) NOT NULL,
  `date` datetime NOT NULL,
  `numberplate` varchar(10) NOT NULL,
  `brandId` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `vin` varchar(30) NOT NULL,
  `owner` text NOT NULL,
  `tahoId` int(5) NOT NULL,
  `tyresize` varchar(20) NOT NULL,
  `yearproduction` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `vehicles`
--

INSERT INTO `vehicles` (`id`, `date`, `numberplate`, `brandId`, `model`, `vin`, `owner`, `tahoId`, `tyresize`, `yearproduction`) VALUES
(8, '2022-09-24 00:00:00', '336699', 'MB', 'Actros', 'ELKO0000', 'Caterpilar SRL', 1, '315/80R22.5', '2000'),
(11, '0000-00-00 00:00:00', 'ZWW939', '', '', 'Jas456456123', 'Tahograf SRL', 7, '315/70/R21.5', ''),
(12, '0000-00-00 00:00:00', 'ZWX450', 'MB', 'Actros', 'WDB9066551S610509', 'Tahograf SRL', 3666666, '315/70/R21.5', '2022'),
(13, '0000-00-00 00:00:00', 'RRRRRRRRRR', 'MB', 'Actros', 'XLRTE', 'Jora', 7, '315/80R22.5', '2000');

-- --------------------------------------------------------

--
-- Структура таблицы `vehiclesowners`
--

CREATE TABLE `vehiclesowners` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `codfiscal` text NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `vehiclesowners`
--

INSERT INTO `vehiclesowners` (`id`, `name`, `codfiscal`, `note`) VALUES
(1, 'Tahograf SRL', '1111111111', 'Good'),
(10, 'Caterpilar SRL', '12345678912', 'Good'),
(11, 'Caterpilar SRL', '12345678912', 'Good'),
(12, 'Caterpilar SRL', '12345678912', 'Good');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `taholist`
--
ALTER TABLE `taholist`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tahotypes`
--
ALTER TABLE `tahotypes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tyressize`
--
ALTER TABLE `tyressize`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vehiclesowners`
--
ALTER TABLE `vehiclesowners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `author`
--
ALTER TABLE `author`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT для таблицы `taholist`
--
ALTER TABLE `taholist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `tahotypes`
--
ALTER TABLE `tahotypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `tyressize`
--
ALTER TABLE `tyressize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `vehiclesowners`
--
ALTER TABLE `vehiclesowners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
