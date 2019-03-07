-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 08 2019 г., 00:36
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `univer`
--

-- --------------------------------------------------------

--
-- Структура таблицы `faculties`
--

CREATE TABLE `faculties` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `faculties`
--

INSERT INTO `faculties` (`id`, `fname`, `created_at`, `updated_at`) VALUES
(1, 'Design', NULL, NULL),
(2, 'Developer', '2019-03-03 14:50:14', '2019-03-03 14:50:14'),
(4, 'SysAdmin', '2019-03-07 18:49:38', '2019-03-07 18:49:38'),
(5, 'Robotics', '2019-03-07 18:50:47', '2019-03-07 18:50:47');

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `gname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `faculty_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id`, `gname`, `faculty_id`, `created_at`, `updated_at`) VALUES
(1, 'C9_P28', 2, '2019-03-07 18:53:36', '2019-03-07 18:53:36'),
(2, 'D18_DEV', 2, '2019-03-07 18:54:03', '2019-03-07 18:54:03'),
(3, 'A12_KID', 5, '2019-03-07 18:54:33', '2019-03-07 18:54:33'),
(4, 'F88_FLASH', 4, '2019-03-07 18:55:03', '2019-03-07 18:55:03'),
(5, 'U6_DIS', 1, '2019-03-07 18:55:30', '2019-03-07 18:55:30'),
(6, 'A13_KID', 5, '2019-03-07 18:55:50', '2019-03-07 18:55:50');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2019_02_19_210146_create_faculties', 2),
('2019_02_20_171438_create_groups', 3),
('2019_02_20_174252_create_students', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `sname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(10) UNSIGNED NOT NULL,
  `rate` double(4,1) NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `sname`, `age`, `rate`, `group_id`, `created_at`, `updated_at`) VALUES
(1, 'Дмитрий Кухарев', 33, 11.5, 1, '2019-03-07 18:56:32', '2019-03-07 18:56:32'),
(2, 'Сергей Косяченко', 34, 11.1, 1, '2019-03-07 18:57:01', '2019-03-07 18:57:01'),
(3, 'Марина Волынец', 18, 6.8, 5, '2019-03-07 18:59:09', '2019-03-07 18:59:09'),
(4, 'Игорь Федай', 25, 0.1, 1, '2019-03-07 19:08:00', '2019-03-07 19:08:00'),
(5, 'Светлана Лабуда', 22, 9.8, 2, '2019-03-07 19:08:39', '2019-03-07 19:08:39'),
(6, 'Ольга Косякова', 26, 12.0, 2, '2019-03-07 19:08:58', '2019-03-07 19:08:58'),
(7, 'Александр Марценюк', 30, 2.5, 4, '2019-03-07 19:09:32', '2019-03-07 19:09:32'),
(8, 'Артём Вовк', 32, 10.8, 4, '2019-03-07 19:09:56', '2019-03-07 19:09:56'),
(9, 'Василий Пупкин', 15, 6.5, 5, '2019-03-07 19:10:41', '2019-03-07 19:10:41'),
(10, 'Дмитрий Чумак', 25, 12.0, 4, '2019-03-07 19:11:39', '2019-03-07 19:11:39'),
(11, 'Homer Simpson', 49, 3.7, 5, '2019-03-07 19:12:36', '2019-03-07 19:12:36'),
(12, 'Андрей Применко', 40, 9.1, 3, '2019-03-07 19:13:47', '2019-03-07 19:13:47'),
(13, 'Денис Мажор', 13, 3.3, 6, '2019-03-07 19:14:34', '2019-03-07 19:14:34');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@ukr.net', '$2y$10$pxYCkH64oid79sMWrgdV3e5n261mlUrpNqK8ABlVQTxNufrEnLRb.', 'sQnoOrrRgJLLSpg4GhcEfSrr44LGz3W75n5qUpLrj0cTbkjXEEYecnaxoqyq', '2019-02-18 19:39:43', '2019-02-20 18:29:31');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `groups_gname_unique` (`gname`),
  ADD KEY `groups_faculty_id_foreign` (`faculty_id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_sname_unique` (`sname`),
  ADD KEY `students_group_id_foreign` (`group_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_faculty_id_foreign` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`id`);

--
-- Ограничения внешнего ключа таблицы `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
