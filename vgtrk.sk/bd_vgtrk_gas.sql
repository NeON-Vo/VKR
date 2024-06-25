-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 16 2024 г., 20:37
-- Версия сервера: 8.3.0
-- Версия PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bd_vgtrk_gas`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `login`, `pass`) VALUES
(1, 'vgtrkadmin', 'vgtrkadmin125');

-- --------------------------------------------------------

--
-- Структура таблицы `area`
--

DROP TABLE IF EXISTS `area`;
CREATE TABLE IF NOT EXISTS `area` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `value` int NOT NULL,
  `active` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'активно',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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

DROP TABLE IF EXISTS `distance`;
CREATE TABLE IF NOT EXISTS `distance` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `value` int NOT NULL,
  `active` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'активно',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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

DROP TABLE IF EXISTS `distance2`;
CREATE TABLE IF NOT EXISTS `distance2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `value` int NOT NULL,
  `active` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'активно',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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

DROP TABLE IF EXISTS `equipment`;
CREATE TABLE IF NOT EXISTS `equipment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `value` int NOT NULL,
  `active` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'активно',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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

DROP TABLE IF EXISTS `images_portfolio`;
CREATE TABLE IF NOT EXISTS `images_portfolio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name/alt` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `way` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `active` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'активно',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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

DROP TABLE IF EXISTS `pression`;
CREATE TABLE IF NOT EXISTS `pression` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `value` int NOT NULL,
  `active` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'активно',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `value` int NOT NULL,
  `active` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'активно',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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

DROP TABLE IF EXISTS `swiper_about_us`;
CREATE TABLE IF NOT EXISTS `swiper_about_us` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name/alt` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `way` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `active` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'активно',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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

DROP TABLE IF EXISTS `swiper_feedback`;
CREATE TABLE IF NOT EXISTS `swiper_feedback` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name/alt` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `way` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `active` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'активно',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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

DROP TABLE IF EXISTS `swiper_first_screen`;
CREATE TABLE IF NOT EXISTS `swiper_first_screen` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name/alt` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `way` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `active` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'активно',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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

DROP TABLE IF EXISTS `zayavki`;
CREATE TABLE IF NOT EXISTS `zayavki` (
  `id` int NOT NULL AUTO_INCREMENT,
  `location` varchar(100) NOT NULL,
  `number` varchar(15) NOT NULL,
  `initials` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Создано',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `zayavki`
--

INSERT INTO `zayavki` (`id`, `location`, `number`, `initials`, `time`, `status`) VALUES
(1, 'Сокол Политическая 48', '89114323421', 'Петров Петр Петрович', '2024-06-06 15:04:25', 'Создано');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
