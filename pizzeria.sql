-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 10 2021 г., 11:52
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pizzeria`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Пицца', '2021-09-23 19:09:58', '2021-09-23 19:09:58'),
(2, 'Ролл', '2021-09-14 19:10:19', '2021-09-16 19:10:19'),
(3, 'Шаурма', '2021-09-09 16:17:19', '2021-09-09 16:17:19');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2021_09_09_142006_create_products_table', 1),
(3, '2021_09_09_142216_create_toppings_table', 1),
(4, '2021_09_09_142534_create_categories_table', 1),
(5, '2021_09_09_142734_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `title`, `price`, `product_id`, `created_at`, `updated_at`) VALUES
(18, 'Тигровая креветка', '305.00', 37, '2021-09-10 03:10:18', '2021-09-10 03:10:18'),
(19, 'Суши-Шеф', '699.00', 29, '2021-09-10 03:11:18', '2021-09-10 03:11:18'),
(20, 'Пепперони', '499.00', 28, '2021-09-10 03:11:19', '2021-09-10 03:11:19'),
(21, 'Пятница', '399.00', 30, '2021-09-10 03:11:19', '2021-09-10 03:11:19'),
(22, '4 сыра', '479.00', 31, '2021-09-10 03:11:32', '2021-09-10 03:11:32'),
(23, 'Радуга ролл', '399.00', 33, '2021-09-10 03:11:35', '2021-09-10 03:11:35'),
(24, 'Грибная', '359.00', 32, '2021-09-10 03:11:38', '2021-09-10 03:11:38'),
(25, 'Сурими Унаги премиум ролл', '375.00', 34, '2021-09-10 03:11:42', '2021-09-10 03:11:42'),
(26, 'Тигровая креветка', '305.00', 37, '2021-09-10 03:11:47', '2021-09-10 03:11:47'),
(27, 'Шаурма', '39.00', 38, '2021-09-10 03:21:29', '2021-09-10 03:21:29'),
(28, 'Сурими Унаги премиум ролл', '375.00', 34, '2021-09-10 03:21:54', '2021-09-10 03:21:54'),
(29, 'Тигровая креветка', '305.00', 37, '2021-09-10 03:21:59', '2021-09-10 03:21:59'),
(30, 'Шаурма', '39.00', 38, '2021-09-10 03:22:03', '2021-09-10 03:22:03');

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topping_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `photo` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `topping_id`, `category_id`, `price`, `photo`, `created_at`, `updated_at`) VALUES
(28, 'Пепперони', 4, 1, '499.00', '1631260860_$2y$10$QpFJEY71h044kofBHALSFenejgGgYJwH6DNRy9fvcZIWOSV4ywwu.png', '2021-09-10 03:01:00', '2021-09-10 03:01:00'),
(29, 'Суши-Шеф', 1, 1, '699.00', '1631260906_$2y$10$C0K6rLj7ujzZLm41G7j7OHJKSP4OVoD4OGbnxDAZ416HQeMCdvfm.png', '2021-09-10 03:01:46', '2021-09-10 03:01:46'),
(30, 'Пятница', 1, 1, '399.00', '1631260954_$2y$10$.tNrPMSFUmoQIkY1Ud45I.nCyUN4lY9T.6JKRrtJZS890mzzbj4ae.png', '2021-09-10 03:02:34', '2021-09-10 03:02:34'),
(31, '4 сыра', 1, 1, '479.00', '1631260995_$2y$10$25Zg8SzJAtrp3tbIhTyveCJL9Lo9BlWeqERqw5Si4KfhZ4o1c1gW.png', '2021-09-10 03:03:15', '2021-09-10 03:03:15'),
(32, 'Грибная', 2, 3, '359.00', '1631261027_$2y$10$cATg.RjdU7hrveNJCaZsuKrU99uZhDD9UDv0f3nXvRLcCvxaEs..png', '2021-09-10 03:03:47', '2021-09-10 03:03:47'),
(33, 'Радуга ролл', 3, 2, '399.00', '1631261229_$2y$10$svFMhqK7moFl4g3uW5DzP.j0erOmilS8lKmwcQ7aVWxWlLRyzQM6W.jpg', '2021-09-10 03:07:10', '2021-09-10 03:07:10'),
(34, 'Сурими Унаги премиум ролл', 4, 2, '375.00', '1631261295_$2y$10$TOOZcDhQKeDGBDxa8uwfer1xxNVsRARrowXYYtpReOo9i2QUtlJW.jpg', '2021-09-10 03:08:15', '2021-09-10 03:08:15'),
(35, 'Аляска', 1, 2, '355.00', '1631261330_$2y$10$pHBkUBJ4ZeCpTNq0gSOaumgF0mX1Kw28GV9.ZBZFn0405WhnDMYi.jpg', '2021-09-10 03:08:50', '2021-09-10 03:08:50'),
(36, 'Микадо', 3, 2, '315.00', '1631261369_$2y$10$P5soQjGG0hbQDOQ3l.ordejli1Euno.bmESXN3g20uaAoTXs5Gi.jpg', '2021-09-10 03:09:29', '2021-09-10 03:09:29'),
(37, 'Тигровая креветка', 4, 2, '305.00', '1631261400_$2y$10$jJ2b.wRVrpdyTkxk853IulPPfEB8wEZbZIqvqbLgWA0Re0AZY16.jpg', '2021-09-10 03:10:00', '2021-09-10 03:10:00'),
(38, 'Шаурма', 4, 3, '39.00', '1631262059_$2y$10$qAdGx5zovzRpxRaBI7LAu.vOE3LCMRI.PFTvGiih3xKh72FhbEiy.jpg', '2021-09-10 03:20:59', '2021-09-10 03:20:59');

-- --------------------------------------------------------

--
-- Структура таблицы `toppings`
--

CREATE TABLE `toppings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `toppings`
--

INSERT INTO `toppings` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Сыр', '2021-09-14 19:08:20', '2021-09-07 19:08:20'),
(2, 'Грибы', '2021-09-14 19:08:50', '2021-09-16 19:08:50'),
(3, 'креветка', '2021-09-14 19:09:15', '2021-09-14 19:09:15'),
(4, 'Калбаса', '2021-09-09 16:00:19', '2021-09-09 16:00:19');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `toppings`
--
ALTER TABLE `toppings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT для таблицы `toppings`
--
ALTER TABLE `toppings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
