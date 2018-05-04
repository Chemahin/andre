-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 02 2018 г., 18:05
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `andre`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL,
  `phone1` varchar(15) NOT NULL,
  `phone2` varchar(15) DEFAULT NULL,
  `phone3` varchar(15) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `social1` varchar(50) DEFAULT NULL,
  `social2` varchar(50) DEFAULT NULL,
  `social3` varchar(50) DEFAULT NULL,
  `imageFace` varchar(50) DEFAULT NULL,
  `imageText` varchar(100) DEFAULT NULL,
  `imageMain` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `phone1`, `phone2`, `phone3`, `address`, `email`, `social1`, `social2`, `social3`, `imageFace`, `imageText`, `imageMain`) VALUES
(1, '066-666-66-66', '097-777-77-77', '0633333333', 'Запорожье, ул. Железнодорожная 3', 'ww@gmail.com', 'fb.com', NULL, NULL, 'andre.png', 'Andre', 'main4.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `galleries`
--

CREATE TABLE IF NOT EXISTS `galleries` (
  `id` int(11) NOT NULL,
  `imagesPath` varchar(50) DEFAULT NULL,
  `imagesText` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `galleries`
--

INSERT INTO `galleries` (`id`, `imagesPath`, `imagesText`) VALUES
(1, 'vellutoFon.png', 'bla bla bla bla 1'),
(2, 'vellutoFonSide1.png', 'bla bla bla bla 2'),
(3, 'vellutoFonSide2.png', 'bla bla bla bla 3'),
(4, 'vellutoFonSide4.png', 'bla bla bla bla 4'),
(5, 'materialFon.jpg', 'bla bla bla bla 5'),
(6, 'stars.png', 'bla bla bla bla 6'),
(7, 'vellutoFon.png', 'bla bla bla bla 7'),
(8, 'main4.jpg', 'bla bla bla bla 8'),
(9, 'main.png', 'bla bla bla bla 9'),
(10, 'addressFon.jpg', 'bla bla bla bla 10');

-- --------------------------------------------------------

--
-- Структура таблицы `materials`
--

CREATE TABLE IF NOT EXISTS `materials` (
  `id` int(11) NOT NULL,
  `publish` int(11) NOT NULL,
  `zagolovok` varchar(50) DEFAULT NULL,
  `mainText` varchar(600) DEFAULT NULL,
  `imagesPathMain` varchar(50) DEFAULT NULL,
  `imagesTextMain` varchar(100) DEFAULT NULL,
  `imagesPathSide1` varchar(50) DEFAULT NULL,
  `imagesPathSide2` varchar(50) DEFAULT NULL,
  `imagesPathSide3` varchar(50) DEFAULT NULL,
  `imagesPathSide4` varchar(50) DEFAULT NULL,
  `imagesTextSide1` varchar(600) DEFAULT NULL,
  `imagesTextSide2` varchar(600) DEFAULT NULL,
  `imagesTextSide3` varchar(600) DEFAULT NULL,
  `imagesTextSide4` varchar(600) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `materials`
--

INSERT INTO `materials` (`id`, `publish`, `zagolovok`, `mainText`, `imagesPathMain`, `imagesTextMain`, `imagesPathSide1`, `imagesPathSide2`, `imagesPathSide3`, `imagesPathSide4`, `imagesTextSide1`, `imagesTextSide2`, `imagesTextSide3`, `imagesTextSide4`) VALUES
(1, 0, 'Velluto', 'Очень крутая техника, такое чквство что сам ангел наносил это жижало на стену своей корявенькой рученкой. Смотря на стену, Ваши глаза будут кровоточить святой радугой прямо на выших соседей.Ура Ура Ура. Да восславится мастер, который нанес это волшибство на стену. Стена станет единтсенной достопримечательностью в Вашей блеклой жизни. Всего хорошего. Андрей Гаврилов. Мастер декоративной штукатурки!)', 'vellutoFon.png', 'Это невероятное нечно привнесет мазок радости и счастья в Ваши серые будни.', 'vellutoFonSide1.png', 'vellutoFonSide2.png', 'vellutoFonSide3.png', 'vellutoFonSide4.png', 'Это следующее(1) невероятное нечно привнесет мазок радости и счастья', 'Это следующее(2) невероятное нечно привнесет мазок радости и счастья', 'Это следующее(3) невероятное нечно привнесет мазок радости и счастья', 'Это следующее(4) невероятное нечно привнесет мазок радости и счастья');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
