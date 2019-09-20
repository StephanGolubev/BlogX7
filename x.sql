-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 20 2019 г., 13:30
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `x`
--
CREATE DATABASE IF NOT EXISTS `x` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `x`;

-- --------------------------------------------------------

--
-- Структура таблицы `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) NOT NULL,
  `body` varchar(1500) NOT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `body`, `created`) VALUES
(25, 'Django! !', 'Django is a Python-based free and open-source web framework, which follows the model-template-view (MTV) architectural pattern. It is maintained by the Django Software Foundation (DSF), an independent organization established as a non-profit.\r\n\r\nDjango\'s primary goal is to ease the creation of complex, database-driven websites. The framework emphasizes reusability and \"pluggability\" of components, less code, low coupling, rapid development, and the principle of don\'t repeat yourself.[7] Python is used throughout, even for settings files and data models. Django also provides an optional administrative create, read, update and delete interface that is generated dynamically through introspection and configured via admin models.', '2019-09-19 11:29:58'),
(26, 'Laravel', 'Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern and based on Symfony. Some of the features of Laravel are a modular packaging system with a dedicated dependency manager, different ways for accessing relational databases, utilities that aid in application deployment and maintenance, and its orientation toward syntactic sugar.', '2019-09-19 12:05:37'),
(27, 'Flask', 'Flask is a micro web framework written in Python. It is classified as a microframework because it does not require particular tools or libraries.[3] It has no database abstraction layer, form validation, or any other components where pre-existing third-party libraries provide common functions. However, Flask supports extensions that can add application features as if they were implemented in Flask itself. Extensions exist for object-relational mappers, form validation, upload handling, various open authentication technologies and several common framework related tools. Extensions are updated far more frequently than the core Flask program.[4]\r\n\r\nApplications that use the Flask framework include Pinterest,[5] LinkedIn,[6] and the community web page for Flask itself.[7]', '2019-09-19 12:06:06'),
(32, 'GitHub', 'GitHub is an American company that provides hosting for software development version control using Git. It is a subsidiary of Microsoft, which acquired the company in 2018 for $7.5 billion.[4] It offers all of the distributed version control and source code management (SCM) functionality of Git as well as adding its own features. It provides access control and several collaboration features such as bug tracking, feature requests, task management, and wikis for every project.[5]\r\n\r\nGitHub offers plans for free, professional, and enterprise accounts.[6] Free GitHub accounts are commonly used to host open source projects.[7] As of January 2019, GitHub offers unlimited private repositories to all plans, including free accounts.[8] As of May 2019, GitHub reports having over 37 million users[9] and more than 100 million repositories[10] (including at least 28 million public repositories),[11] making it the largest host of source code in the world.[12]', '2019-09-20 13:56:05'),
(31, 'Symfony', 'Symfony is a PHP web application framework and a set of reusable PHP components/libraries. Symfony was published as free software on October 18, 2005 and released under the MIT license.\r\nSymfony aims to speed up the creation and maintenance of web applications and to replace repetitive coding tasks.\r\n\r\nSymfony has a low performance overhead used with a bytecode cache.\r\n\r\nSymfony is aimed at building robust applications in an enterprise context, and aims to give developers full control over the configuration: from the directory structure to the foreign libraries, almost everything can be customized. To match enterprise development guidelines, Symfony is bundled with additional tools to help developers test, debug and document projects.[citation needed]', '2019-09-20 11:30:35');

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` varchar(150) NOT NULL,
  `body` varchar(1500) NOT NULL,
  `post_id` int(11) NOT NULL,
  `posted` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `user`, `body`, `post_id`, `posted`) VALUES
(27, 'Stephan!!', 'Hello! Good post', 25, '2019-09-19 13:03:30'),
(33, 'ana', 'Hello, This is Evgeny', 25, '2019-09-20 11:27:30'),
(32, 'Hello how are you', 'Stephan!', 0, '2019-09-20 11:25:09'),
(55, 'ana', 'ananananana', 25, '2019-09-20 13:53:17'),
(58, 'sergei', 'Cool! Thank you!', 25, '2019-09-20 14:14:29'),
(57, 'ana', 'ana', 32, '2019-09-20 14:03:28'),
(56, 'Stepahn', 'Cool! Thank you!', 26, '2019-09-20 14:00:54');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(150) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `fname`, `status`, `password`, `created`) VALUES
(10, 'denis', 0, 'c3875d07f44c422f3b3bc019c23e16ae', '2019-09-20 10:53:28'),
(7, 'anan', 0, '63e62e141c89f160f6b0f2dc14fbefa0', '2019-09-19 15:09:02'),
(6, 'ana', 0, '276b6c4692e78d4799c12ada515bc3e4', '2019-09-19 15:03:14'),
(9, 'admin', 1, '21232f297a57a5a743894a0e4a801fc3', '2019-09-19 15:15:58'),
(12, 'q', 0, '7694f4a66316e53c8cdd9d9954bd611d', '2019-09-20 12:09:36'),
(14, '', 0, 'd41d8cd98f00b204e9800998ecf8427e', '2019-09-20 14:14:16');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `blogs` ADD FULLTEXT KEY `title` (`title`,`body`);

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
