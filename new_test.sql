-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 12 2019 г., 17:04
-- Версия сервера: 5.6.38
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `new_test`
--
CREATE DATABASE IF NOT EXISTS `new_test` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `new_test`;

-- --------------------------------------------------------

--
-- Структура таблицы `test_comments`
--

CREATE TABLE IF NOT EXISTS `test_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `test_comments`
--

INSERT INTO `test_comments` (`id`, `name`, `mail`, `text`) VALUES
(1, 'Вася', 'vasya@mail.ru', 'Сообщение от Василия Пупкина.'),
(2, 'Маруся', 'marysia@mail.ru', 'Всем привет, я Маруся'),
(3, 'Вася', 'vasya@mail.ru', 'Сообщение от Василия Пупкина.'),
(4, 'Маруся', 'marysia@mail.ru', 'Всем привет, я Маруся');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
