-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 25 2024 г., 06:51
-- Версия сервера: 8.0.29-21
-- Версия PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `neonovvlad`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `login` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `login`, `pass`) VALUES
(1, 'vgtrkadmin', 'vgtrkadmin125'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `area`
--

CREATE TABLE `area` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `value` int NOT NULL,
  `active` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'активно'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `area`
--

INSERT INTO `area` (`id`, `name`, `value`, `active`) VALUES
(1, 'Бабаевский р-он', 30000, 'активно'),
(2, 'Бабушкинский р-он', 30000, 'активно'),
(3, 'Белозерский р-он', 30000, 'активно'),
(4, 'Вашкинский р-он', 30000, 'активно'),
(5, 'Великоустюгский р-он', 30000, 'активно'),
(6, 'Верховажский р-он', 30000, 'активно'),
(7, 'Вожегодский р-он', 30000, 'активно'),
(8, 'Вологодский р-он', 30000, 'активно'),
(9, 'Вытегорский р-он', 30000, 'активно'),
(10, 'Грязовецкий р-он', 30000, 'активно'),
(11, 'Кадуйский р-он', 30000, 'активно'),
(12, 'Кирилловский р-он', 30000, 'активно'),
(13, 'Кичменменгско-городецкий р-он', 30000, 'активно'),
(14, 'Междуреченский р-он', 30000, 'активно'),
(15, 'Никольский р-он', 30000, 'активно'),
(16, 'Нюксенский р-он', 30000, 'активно'),
(17, 'Сокольский р-он', 30000, 'активно'),
(18, 'Сямженский р-он', 30000, 'активно'),
(19, 'Тарногский р-он', 30000, 'активно'),
(20, 'Тотемский р-он', 30000, 'активно'),
(21, 'Усть-Кубенский р-он', 30000, 'активно'),
(22, 'Устюженский р-он', 30000, 'активно'),
(23, 'Харовский р-он', 30000, 'активно'),
(24, 'Чагодещенский р-он', 30000, 'активно'),
(25, 'Череповецкий р-он', 30000, 'активно'),
(26, 'Шекснинский р-он', 30000, 'активно');

-- --------------------------------------------------------

--
-- Структура таблицы `distance`
--

CREATE TABLE `distance` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `value` int NOT NULL,
  `active` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'активно'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `distance`
--

INSERT INTO `distance` (`id`, `name`, `value`, `active`) VALUES
(1, '0-25', 10000, 'активно'),
(2, '26-50', 20000, 'активно'),
(3, '51-75', 30000, 'активно'),
(4, '76-100', 40000, 'активно'),
(5, '>100', 50000, 'активно');

-- --------------------------------------------------------

--
-- Структура таблицы `distance2`
--

CREATE TABLE `distance2` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `value` int NOT NULL,
  `active` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'активно'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `distance2`
--

INSERT INTO `distance2` (`id`, `name`, `value`, `active`) VALUES
(1, '0-25', 10000, 'активно'),
(2, '26-50', 20000, 'активно'),
(3, '51-75', 30000, 'активно'),
(4, '76-100', 40000, 'активно'),
(5, '>100', 50000, 'активно');

-- --------------------------------------------------------

--
-- Структура таблицы `equipment`
--

CREATE TABLE `equipment` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `value` int NOT NULL,
  `active` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'активно'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `equipment`
--

INSERT INTO `equipment` (`id`, `name`, `value`, `active`) VALUES
(1, 'Плита', 15000, 'активно'),
(2, 'Котёл', 20000, 'активно'),
(3, 'Ул. котёл', 25000, 'активно'),
(4, 'Плита и Котёл', 35000, 'активно'),
(5, 'Плита и Ул. Котёл', 40000, 'активно');

-- --------------------------------------------------------

--
-- Структура таблицы `images_portfolio`
--

CREATE TABLE `images_portfolio` (
  `id` int NOT NULL,
  `name/alt` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `way` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `active` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'активно'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `images_portfolio`
--

INSERT INTO `images_portfolio` (`id`, `name/alt`, `way`, `active`) VALUES
(1, 'Установленная газовая плита', 'zero.png', 'активно'),
(2, 'Установленные газовый котел и термостат', 'one.png', 'активно'),
(3, 'Внешние трубы с счетчиком газа в коробке', 'two.png', 'активно'),
(4, 'Распределитель газа', 'three.png', 'активно'),
(5, 'Установленный котел', 'four.png', 'активно'),
(6, 'Установленный уличный котел', 'five.png', 'активно');

-- --------------------------------------------------------

--
-- Структура таблицы `pression`
--

CREATE TABLE `pression` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `value` int NOT NULL,
  `active` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'активно'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `pression`
--

INSERT INTO `pression` (`id`, `name`, `value`, `active`) VALUES
(1, 'Низкое', 10000, 'активно'),
(2, 'Среднее', 15000, 'активно');

-- --------------------------------------------------------

--
-- Структура таблицы `room`
--

CREATE TABLE `room` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `value` int NOT NULL,
  `active` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'активно'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `room`
--

INSERT INTO `room` (`id`, `name`, `value`, `active`) VALUES
(1, 'Кухня', 5000, 'активно'),
(2, 'Теплогенераторная', 5000, 'активно'),
(3, 'Пристройка', 10000, 'активно');

-- --------------------------------------------------------

--
-- Структура таблицы `swiper_about_us`
--

CREATE TABLE `swiper_about_us` (
  `id` int NOT NULL,
  `name/alt` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `way` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `active` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'активно'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `swiper_about_us`
--

INSERT INTO `swiper_about_us` (`id`, `name/alt`, `way`, `active`) VALUES
(1, 'Здание ООО \'ВГТРК СК\'', 'zero.png', 'активно'),
(2, 'Процесс проектирования', 'one.png', 'активно'),
(3, 'Исполнительная документация', 'two.png', 'активно'),
(4, 'Копирование документов', 'three.png', 'активно'),
(5, 'Приемка объекта', 'four.png', 'активно');

-- --------------------------------------------------------

--
-- Структура таблицы `swiper_feedback`
--

CREATE TABLE `swiper_feedback` (
  `id` int NOT NULL,
  `name/alt` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `way` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `active` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'активно'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `swiper_feedback`
--

INSERT INTO `swiper_feedback` (`id`, `name/alt`, `way`, `active`) VALUES
(1, 'Отзыв', 'zero.png', 'активно'),
(2, 'Отзыв', 'one.png', 'активно'),
(3, 'Отзыв', 'two.png', 'активно'),
(4, 'Отзыв', 'three.png', 'активно'),
(5, 'Отзыв', 'four.png', 'активно');

-- --------------------------------------------------------

--
-- Структура таблицы `swiper_first_screen`
--

CREATE TABLE `swiper_first_screen` (
  `id` int NOT NULL,
  `name/alt` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `way` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `active` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'активно'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `swiper_first_screen`
--

INSERT INTO `swiper_first_screen` (`id`, `name/alt`, `way`, `active`) VALUES
(1, 'Траншея для прокладки труб', 'zero.png', 'активно'),
(2, 'Сварка трубы в котловане', 'one.png', 'активно'),
(3, 'Проверка уровня трубы', 'two.png', 'активно'),
(4, 'Покраска трубы', 'three.png', 'активно'),
(5, 'Измерение расстояния от уличного газового котла, до угла дома', 'four.png', 'активно');

-- --------------------------------------------------------

--
-- Структура таблицы `zayavki`
--

CREATE TABLE `zayavki` (
  `id` int NOT NULL,
  `location` varchar(100) NOT NULL,
  `number` varchar(15) NOT NULL,
  `initials` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Создано'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `zayavki`
--

INSERT INTO `zayavki` (`id`, `location`, `number`, `initials`, `time`, `status`) VALUES
(1, 'Сокол Политическая 48', '89114323421', 'Петров Петр Петрович', '2024-06-06 15:04:25', 'Контракт заключен');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Индексы таблицы `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `distance`
--
ALTER TABLE `distance`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `distance2`
--
ALTER TABLE `distance2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images_portfolio`
--
ALTER TABLE `images_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pression`
--
ALTER TABLE `pression`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `swiper_about_us`
--
ALTER TABLE `swiper_about_us`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `swiper_feedback`
--
ALTER TABLE `swiper_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `swiper_first_screen`
--
ALTER TABLE `swiper_first_screen`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zayavki`
--
ALTER TABLE `zayavki`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `area`
--
ALTER TABLE `area`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `distance`
--
ALTER TABLE `distance`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `distance2`
--
ALTER TABLE `distance2`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `images_portfolio`
--
ALTER TABLE `images_portfolio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `pression`
--
ALTER TABLE `pression`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `room`
--
ALTER TABLE `room`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `swiper_about_us`
--
ALTER TABLE `swiper_about_us`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `swiper_feedback`
--
ALTER TABLE `swiper_feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `swiper_first_screen`
--
ALTER TABLE `swiper_first_screen`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `zayavki`
--
ALTER TABLE `zayavki`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
