-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 25 2024 г., 17:06
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `title` varchar(51) DEFAULT NULL,
  `description` varchar(1500) DEFAULT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `cards`
--

INSERT INTO `cards` (`id`, `title`, `description`, `user`) VALUES
(45, 'xui123zalupa', '1234567890-12345678901234567890-234567890-123456789', 'HandAss'),
(46, 'roma1212121212121', '1234567890-123456789012345678902345678901234567', 'HandAss'),
(47, '121212121221Ut et et commodo lab', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remainin', 'HandAss'),
(50, 'Sit sunt deleniti d', '$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']v', 'HandAss'),
(51, 'Ad voluptas odit qui', 'Ad deleniti laborumunset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])', 'HandAss'),
(52, 'Ut et et commodo lab', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remainin', 'HandAss'),
(53, 'Sit sunt deleniti d', '$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']v', 'HandAss'),
(54, 'Ad voluptas odit qui', 'Ad deleniti laborumunset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])', 'HandAss'),
(55, 'Ut et et commodo lab', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remainin', 'HandAss'),
(56, 'Sit sunt deleniti d', '$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']v', 'HandAss'),
(57, 'Ad voluptas odit qui', 'Ad deleniti laborumunset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])', 'HandAss'),
(58, 'Ut et et commodo lab', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remainin', 'HandAss'),
(59, 'Sit sunt deleniti d', '$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']v', 'HandAss'),
(60, 'Ad voluptas odit qui', 'Ad deleniti laborumunset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])', 'HandAss'),
(61, 'Ut et et commodo lab', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remainin', 'HandAss'),
(62, 'Sit sunt deleniti d', '$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']v', 'HandAss'),
(63, 'Ad voluptas odit qui', 'Ad deleniti laborumunset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])', 'HandAss'),
(64, 'Ut et et commodo lab', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remainin', 'HandAss'),
(65, 'Sit sunt deleniti d', '$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']v', 'HandAss'),
(66, 'Ad voluptas odit qui', 'Ad deleniti laborumunset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])', 'HandAss'),
(67, 'Ut et et commodo lab', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remainin', 'HandAss'),
(68, 'Sit sunt deleniti d', '$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']$_SESSION[\'errors\']v', 'HandAss'),
(69, 'Ad voluptas odit qui', 'Ad deleniti laborumunset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])unset($_SESSION[\'errors\'])', 'HandAss'),
(70, 'Ut et et commodo lab', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remainin', 'HandAss'),
(71, 'Magnam laborum illum Роман1234', 'Rerum tempora sequi Rerum tempora sequi Rerum tempora sequi Rerum tempora sequi Rerum tempora sequi Rerum tempora sequi Rerum tempora sequi Rerum tempora sequi Rerum tempora sequi Rerum tempora sequi Rerum tempora sequi Rerum tempora sequi Rerum tempora sequi Rerum tempora sequi Rerum tempora sequi Rerum tempora sequi', 'Роман1234'),
(72, 'Molestiae exercitati', 'В копирайтерской деятельности принято считать «тысячи» с пробелами или без. Учет пробелов увеличивает объем текста примерно на 100-200 символов – именно столько раз мы разделяем слова свободным пространством. Считать пробелы заказчики не любят, так как это «пустое место». Однако некоторые фирмы и биржи видят справедливым ставить стоимость за 1000 символов с пробелами, считая последние важным элементом качественного восприятия. Согласитесь, читать слитный текст без единого пропуска, никто не будет. Но большинству нужна цена за 1000 знаков без пробелов.Вот пример статьи на 1000 символов. Это достаточно маленький текст, оптимально подходящий для карточек товаров в интернет-магазинах или для небольших информационных публикаций. В таком тексте редко бывает более 2-3 абзацев и обычно один подзаголовок. Но можно и без него. На 1000 символов рекомендовано использовать 1-2 ключа и одну картину. Текст на 1000 символов – это сколько примерно слов? Статистика Word показывает, что «тысяча» включает', 'HandAss'),
(73, 'Aut aut sit qui iste', 'Magna quia magna mag card-createdcard-createdcard-createdcard-createdcard-createdcard-created', 'HandAss'),
(74, 'Minus cum tenetur id', 'Commodi ut dolore al		$_SESSION[\'card-created\'] = true;\r\n		$_SESSION[\'card-created\'] = true;\r\n		$_SESSION[\'card-created\'] = true;\r\n		$_SESSION[\'card-created\'] = true;', 'HandAss'),
(75, 'Quasi repudiandae mo', 'Ea eveniet ab inven$_SESSION[\'card-created\'] = false;\r\n$_SESSION[\'card-created\'] = false;\r\n$_SESSION[\'card-created\'] = false;', 'HandAss'),
(76, 'Quia et nesciunt cu', 'Eum proident volupt$_SESSION[\'card-created\'] = false;\r\n$_SESSION[\'card-created\'] = false;\r\n$_SESSION[\'card-created\'] = false;', 'HandAss'),
(77, '1234567890-', '$_SESSI1234567890-34567890567812345678903456789', 'HandAss');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `user` varchar(100) NOT NULL,
  `post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user`, `post`) VALUES
(4, '12345678', 'HandAss', 72),
(5, 'цукенгшщ', 'HandAss', 77);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(190) NOT NULL,
  `password` varchar(190) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(8, 'Roma', 'romochkaarefev@list.ru', '$2y$10$X8Oyyw1X6qU.3y5W2fvbQOyPis4a81hXYNG.oazFV0Yu/1k/YMsLG'),
(9, 'Роман', 'arefev_roman@internet.ru', '$2y$10$PuBT3s7e8.WC5bshp7Gl8u1wFBB8kVyKlVhCfLDhLBO5Lo6n8u7IS'),
(11, 'Роман123', 'big_piska_15cm_sos_my_dggig@list.ru', '$2y$10$hVPNjs8esFwguZYt6JdiOeNNz9xQoZMzrCipVXUGKu9DMvM9ox1Vi'),
(12, 'HandAss', 'adadadad@list.ru', '$2y$10$Zj6qog7SOXi2EL0Kitv./OgHHLlyG7/AYO6eG69Z9KRFiWTymZU1y'),
(13, 'Роман1234', 'big_piska_15cm_sos_my_dig@list.ru', '$2y$10$DrIXsPeC5WccDJD55KPluOYsCkUM7ZJi4zmoBrUTNGp46b.LJG292'),
(15, 'vycutymyz', 'vabewozuxe@ls.ss', '$2y$10$Ut0m6fOxUpM5dXMYM4vkGeNIwbHwGrPKPNRbTkX8PstoRv7d6f7.C'),
(16, 'fowuv', 'lobihyji@ss.s', '$2y$10$mzk5lRJ2CAndcEqhE695augEURbFfJ8aEGhM9SwTUvgNhzGyhCNpW');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
