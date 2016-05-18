-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 18 2016 г., 21:22
-- Версия сервера: 10.1.9-MariaDB
-- Версия PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `database2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `forum`
--

CREATE TABLE `forum` (
  `id` int(100) NOT NULL,
  `nametheme` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `forum`
--

INSERT INTO `forum` (`id`, `nametheme`) VALUES
(1, 'flood'),
(2, 'fignya'),
(3, 'fdsahuhuaejgijoagr'),
(4, 'fignyasadfadsg'),
(5, 'sadas'),
(6, 'new theme'),
(7, 'OLJAS'),
(8, 'STARWARS'),
(9, 'hello');

-- --------------------------------------------------------

--
-- Структура таблицы `innerforum`
--

CREATE TABLE `innerforum` (
  `id` int(100) NOT NULL,
  `fid` int(100) NOT NULL,
  `ulog` varchar(500) NOT NULL,
  `commend` text NOT NULL,
  `ldate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `innerforum`
--

INSERT INTO `innerforum` (`id`, `fid`, `ulog`, `commend`, `ldate`) VALUES
(1, 2, 'AlidarovOljas', 'first', '2016-05-11 04:33:27'),
(2, 2, 'AlidarovOljas', 'second', '2016-05-11 04:35:27'),
(3, 2, 'AlidarovOljas', 'third', '2016-05-11 04:37:27'),
(4, 4, 'AlidarovOljas', 'alskdjhasgdaj', '2016-05-11 04:37:27'),
(5, 5, 'AlidarovOljas', 'asdas', '2016-05-17 10:42:44'),
(6, 1, 'AlidarovOljas', 'flood first comment', '2016-05-17 10:43:23'),
(7, 2, 'AlidarovOljas', 'flood FOURTH commnet', '2016-05-17 10:43:35'),
(8, 3, 'AlidarovOljas', 'asmdjbasjdhgash FIRST comment', '2016-05-17 10:43:47'),
(9, 6, 'AlidarovOljas', 'NEW THEME AND NEW COMMENT', '2016-05-17 10:44:08'),
(10, 1, 'DiasIbadildin', 'HI oljas', '2016-05-17 10:45:16'),
(11, 1, 'DiasIbadildin', 'HI oljas', '2016-05-17 10:46:24'),
(12, 2, 'a', 'Hi Guys!', '2016-05-17 10:47:51'),
(13, 2, 'a', 'Hi Guys!', '2016-05-17 10:48:25'),
(14, 2, 'a', 'fghjkl;sdkjdshkfhsdkjhfjsdkjghkjsdhghksjdjhghkjsdhgkjsdkjgksdhk', '2016-05-17 10:54:44'),
(15, 2, 'a', 'sdjfshjfsdfhgsdhggfsdghfdsghfhdsjhjf \r\nsdfjsdfjdsf\r\n\r\nsdfjsdfhsd', '2016-05-17 10:56:41'),
(16, 2, 'a', 'hi mane!', '2016-05-17 10:56:51'),
(17, 8, 'AlidarovOljas', 'HI IM FIRST\r\n', '2016-05-17 10:57:39'),
(18, 3, '', 'hufijksfdsnakf', '2016-05-18 17:23:19'),
(19, 4, '', 'yuouioweq', '2016-05-18 17:23:58'),
(20, 3, '', 'fhadsjkfa', '2016-05-18 17:24:18'),
(21, 9, 'AlidarovOljas', 'nklgafmmklgf', '2016-05-18 17:54:37'),
(22, 4, 'AlidarovOljas', 'saddasdasddsadsaddsafdsafdsaffgdsagadsg', '2016-05-18 18:16:41'),
(23, 4, 'AlidarovOljas', 'saddasdasddsadsaddsafdsafdsaffgdsagadsg', '2016-05-18 18:17:20'),
(24, 4, 'AlidarovOljas', 'dsadasfdsafdasfdsafadsfad', '2016-05-18 18:17:26'),
(25, 4, 'AlidarovOljas', 'dsadasfdsafdasfdsafadsfad', '2016-05-18 18:17:59'),
(26, 4, 'AlidarovOljas', 'dsadasfdsafdasfdsafadsfad', '2016-05-18 18:18:11'),
(27, 4, 'AlidarovOljas', 'dsadasfdsafdasfdsafadsfad', '2016-05-18 18:19:33'),
(28, 4, 'AlidarovOljas', 'dsadasfdsafdasfdsafadsfad', '2016-05-18 18:19:41'),
(29, 4, 'AlidarovOljas', 'dsadasfdsafdasfdsafadsfad', '2016-05-18 18:21:04'),
(30, 4, 'AlidarovOljas', 'dsadasfdsafdasfdsafadsfad', '2016-05-18 18:21:38'),
(31, 4, 'AlidarovOljas', 'dsadasfdsafdasfdsafadsfad', '2016-05-18 18:22:21'),
(32, 4, 'AlidarovOljas', 'dsadasfdsafdasfdsafadsfad', '2016-05-18 18:23:06'),
(33, 4, 'AlidarovOljas', 'dsadasfdsafdasfdsafadsfad', '2016-05-18 18:23:26'),
(34, 4, 'AlidarovOljas', 'dsadasfdsafdasfdsafadsfad', '2016-05-18 18:23:35');

-- --------------------------------------------------------

--
-- Структура таблицы `pictures`
--

CREATE TABLE `pictures` (
  `id` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pictures`
--

INSERT INTO `pictures` (`id`, `userid`, `url`) VALUES
(16, 13, 'images/13_image.jpg'),
(17, 14, 'images/14_image.jpg'),
(18, 22, 'images/22_image.jpg'),
(19, 14, 'images/14_image.jpg'),
(20, 25, 'images/25_image.jpg'),
(21, 26, 'images/26_image.jpg'),
(22, 26, 'images/26_image.jpg'),
(23, 26, 'images/26_image.jpg'),
(24, 26, 'images/26_image.jpg'),
(25, 29, 'images/29_image.jpg'),
(26, 30, 'images/30_image.jpg'),
(27, 25, 'images/25_image.jpg'),
(28, 25, 'images/25_image.jpg'),
(29, 25, 'images/25_image.jpg'),
(30, 33, 'images/33_image.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `login`, `password`) VALUES
(25, 'Oljas', 'Alidarov', 'AlidarovOljas', '123456789'),
(26, 'Dias', 'Ibadildin', 'DiasIbadildin', '123456789'),
(27, 'Oljas', 'Alidarov', 'DiasIbadildin', '123456789'),
(28, 'adsadas', 'dasdasd', 'DiasIbadildin', '123456789'),
(29, 'Diana', 'Temirkhan', 'TemirkhanDiana', '123456789'),
(30, 'Nagi', 'Orazbayeva', 'NagiOrazbayeva', '123456789'),
(31, 'a', 'a', 'a', 'a'),
(32, 'aLIDAROV', 'oLJAS', 'AlidarovOljas', '123456789'),
(33, 'Olzhas', 'Alidarov', 'asdfghjkl', '123456789');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `innerforum`
--
ALTER TABLE `innerforum`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `innerforum`
--
ALTER TABLE `innerforum`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT для таблицы `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
