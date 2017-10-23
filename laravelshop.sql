-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Вер 11 2017 р., 02:41
-- Версія сервера: 5.7.16
-- Версія PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `laravelshop`
--

-- --------------------------------------------------------

--
-- Структура таблиці `basket`
--

CREATE TABLE `basket` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `product_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size_integer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size_string` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `material` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` int(11) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '1',
  `public` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `basket`
--

INSERT INTO `basket` (`id`, `user_id`, `product_id`, `length`, `height`, `width`, `size_integer`, `size_string`, `weight`, `color`, `material`, `count`, `status`, `public`, `created_at`, `updated_at`) VALUES
(1, 3, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2017-08-28 00:13:54', '2017-08-28 00:13:54'),
(2, 3, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2017-08-28 00:14:16', '2017-08-28 00:14:16'),
(3, 3, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2017-08-28 08:17:44', '2017-08-28 08:17:44'),
(4, 3, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2017-08-31 11:53:04', '2017-08-31 11:53:04');

-- --------------------------------------------------------

--
-- Структура таблиці `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `category`
--

INSERT INTO `category` (`id`, `parent_id`, `name`, `keywords`, `description`, `alias`, `created_at`, `updated_at`) VALUES
(1, 0, 'Телефоны и аксессуары', '', '', 'telefony_i_aksessuary', '2017-08-19 22:13:19', NULL),
(2, 0, 'Компьютеры и планшеты', '', '', 'kompyutery_i_planshety', '2017-08-20 01:17:15', NULL),
(3, 0, 'Электроника', '', '', 'elektronika', '2017-08-19 23:17:19', NULL),
(4, 0, 'Бытовая техника', '', '', 'bytovaya_texnika', '2017-08-19 19:06:08', NULL),
(5, 0, 'Одежда для женщин', '', '', 'odezhda_dlya_zhenshhin', '2017-08-19 20:11:16', NULL),
(6, 0, 'Одежда для мужчинм', '', '', 'odezhda_dlya_muzhchin', '2017-08-19 19:00:00', NULL),
(7, 0, 'Всё для детей', '', '', 'vsyo_dlya_detej', '2017-08-19 21:05:19', NULL),
(8, 0, 'Бижутерия и часы', '', '', 'bizhuteriya_i_chasy', '2017-08-19 18:11:16', NULL),
(9, 0, 'Сумки и обувь', '', '', 'sumki_i_obuv', '2017-08-19 18:00:12', NULL),
(10, 0, 'Для дома и сада ', '', '', 'dlya_doma_i_sada_', '2017-08-19 18:00:09', NULL),
(11, 0, 'Автотовары', '', '', 'avtotovary', '2017-08-19 18:00:25', NULL),
(12, 0, 'Красота и здоровье', '', '', 'krasota_i_zdorove', '2017-08-19 18:31:15', NULL),
(13, 0, 'Спорт и развлечения', '', '', 'sport_i_razvlecheniya', '2017-08-20 05:00:34', NULL),
(14, 1, 'Мобильные телефоны', '', '', 'mobilnye_telefony', '2017-08-19 18:00:08', NULL),
(15, 1, 'Запчасти', '', '', 'zapchasti', '2017-08-19 18:00:20', NULL),
(16, 1, 'Сумки и чехлы', '', '', 'sumki_i_chexly', '2017-08-19 18:43:00', NULL),
(17, 1, 'Аксессуары для телефонов', '', '', 'aksessuary_dlya_telefonov', '2017-08-20 18:00:00', NULL),
(18, 14, '8-ядерные мобильники', '', '', '8-yadernye_mobilniki', '2017-08-19 18:34:00', NULL),
(19, 14, 'С 2 SIM-картами', '', '', 's_2_sim-kartami', '2017-08-19 18:48:00', NULL),
(20, 15, 'Дисплеи', '', '', 'displei', '2017-08-20 00:00:00', NULL),
(21, 15, 'Батареи', '', '', 'batarei', '2017-08-19 22:00:00', NULL),
(22, 15, 'Корпуса', '', '', 'korpusa', '2017-08-19 18:11:17', NULL),
(23, 16, 'Чехлы-бамперы', '', '', 'chexly-bampery', '2017-08-19 18:25:45', NULL),
(24, 16, 'Водонепроницаемые чехлы', '', '', 'vodonepronicaemye_chexly', '2017-08-19 21:17:35', NULL),
(25, 16, 'Кожаные чехлы', '', '', 'kozhanye_chexly', '2017-08-20 06:41:52', NULL),
(26, 16, 'Чехлы со стразами', '', '', 'chexly_so_strazami', '2017-08-19 22:18:29', NULL),
(27, 17, 'Резервное питание', '', '', 'rezervnoe_pitanie', '2017-08-20 05:40:43', NULL),
(28, 17, 'Защитные пленки', '', '', 'zashhitnye_plenki', '2017-08-19 22:17:29', NULL),
(29, 17, 'Зарядные устройства', '', '', 'zaryadnye_ustrojstva', '2017-08-20 18:30:38', NULL),
(30, 2, 'Планшеты и аксессуары', '', '', 'planshety_i_aksessuary', '2017-08-20 01:31:39', NULL),
(31, 2, 'Планшеты и аксессуары2', '', '', 'planshety_i_aksessuary2', '2017-08-20 01:31:39', NULL),
(32, 2, 'Планшеты и аксессуары23', '', '', 'planshety_i_aksessuary23', '2017-08-20 01:31:39', NULL),
(33, 30, 'Планшеты и 1', '', '', 'planshety_i_aksessuary343', '2017-08-20 01:31:39', NULL),
(34, 31, 'Планшеты и 1vcxv', '', '', 'planshety_i_aksessuary343fdg', '2017-08-20 01:31:39', NULL),
(35, 32, 'Планшеты и 1vcxvgdf fd', '', '', 'planshety_i_aksessu d ary343fdg', '2017-08-20 01:31:39', NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `likes` int(11) NOT NULL DEFAULT '0',
  `deslikes` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `product_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `public` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `delivery`
--

CREATE TABLE `delivery` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `delivery`
--

INSERT INTO `delivery` (`id`, `name`, `time`, `price`, `keywords`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Звичайна доставка', 35, 10, '', 'Доставляється Вам на почту і ........', NULL, NULL),
(2, 'Безкоштовна доставка', 60, 0, '', 'Доставляється Вам на почту і ........', NULL, NULL),
(3, 'Швидка доставка', 20, 20, '', 'Доставляється Вам на почту і ........', NULL, NULL),
(4, 'Швидка доставка', 3, 50, '', 'Доставляється курєром особисто Вам в руки ........', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `faq`
--

CREATE TABLE `faq` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `public` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main` int(11) NOT NULL,
  `public` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` int(10) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `images`
--

INSERT INTO `images` (`id`, `name`, `main`, `public`, `created_at`, `updated_at`, `product_id`) VALUES
(1, '1372620903_148420256.jpg', 1, 1, NULL, NULL, 1),
(2, 'image2_117579.jpg', 0, 1, NULL, NULL, 1),
(3, 'vid_s_neboskreba_1920x1200.jpg', 0, 1, NULL, NULL, 1),
(6, '1372620903_148420256.jpg', 1, 1, NULL, NULL, 10),
(7, 'images.jpg', 0, 1, NULL, NULL, 10),
(8, 'noski.jpg', 0, 1, NULL, NULL, 10),
(9, 'noski_68.jpg', 0, 1, NULL, NULL, 10),
(10, '448666078_2_644x461_beysi-kepki-dzhinsov-nike-adidas-57-58-rozmr-regulyutsya-fotograf.jpg', 1, 1, NULL, NULL, 4),
(11, '498876294_1_644x461_beysi-kepki-stki-na-regulyatorah-rzn-kolori-lutsk.jpg', 0, 1, NULL, NULL, 4),
(12, '1372620903_148420256.jpg', 0, 1, NULL, NULL, 4),
(13, '448666078_2_644x461_beysi-kepki-dzhinsov-nike-adidas-57-58-rozmr-regulyutsya-fotograf.jpg', 1, 1, NULL, NULL, 5),
(14, '498876294_1_644x461_beysi-kepki-stki-na-regulyatorah-rzn-kolori-lutsk.jpg', 0, 1, NULL, NULL, 5),
(15, '448666078_2_644x461_beysi-kepki-dzhinsov-nike-adidas-57-58-rozmr-regulyutsya-fotograf.jpg', 0, 1, NULL, NULL, 5),
(16, '498876294_1_644x461_beysi-kepki-stki-na-regulyatorah-rzn-kolori-lutsk.jpg', 0, 1, NULL, NULL, 5),
(17, '1372620903_148420256.jpg', 0, 1, NULL, NULL, 5),
(18, 'vid_s_neboskreba_1920x1200.jpg', 1, 1, NULL, NULL, 6),
(19, 'rider-82061-90467.jpg', 0, 1, NULL, NULL, 6),
(20, 'vid_s_neboskreba_1920x1200.jpg', 0, 1, NULL, NULL, 6),
(21, 'rider-82061-90467.jpg', 1, 1, NULL, NULL, 7),
(22, 'rider-82061-90467.jpg', 0, 1, NULL, NULL, 7),
(23, 'vid_s_neboskreba_1920x1200.jpg', 0, 1, NULL, NULL, 7),
(24, 'vid_s_neboskreba_1920x1200.jpg', 1, 1, NULL, NULL, 8),
(25, 'image2_117579.jpg', 0, 1, NULL, NULL, 8);

-- --------------------------------------------------------

--
-- Структура таблиці `message`
--

CREATE TABLE `message` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `whom_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_it` int(11) NOT NULL DEFAULT '0',
  `last_message` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `message`
--

INSERT INTO `message` (`id`, `user_id`, `whom_id`, `text`, `read_it`, `last_message`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'hello', 1, 0, '2017-09-03 21:00:19', NULL),
(2, 3, 1, 'hi', 1, 0, '2017-09-04 21:00:07', NULL),
(3, 1, 3, 'how you doing?', 1, 1, '2017-09-04 21:00:34', NULL),
(4, 3, 3, 'aaaaayyy', 0, 1, '2017-09-04 18:25:19', '2017-09-04 18:25:19');

-- --------------------------------------------------------

--
-- Структура таблиці `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_08_19_160616_create_rols_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2017_08_17_010814_create_order_table', 1),
(5, '2017_08_17_010900_create_category_table', 1),
(6, '2017_08_17_010927_create_contacts_table', 1),
(7, '2017_08_17_011026_create_product_table', 1),
(8, '2017_08_17_011330_create_product_options_table', 1),
(9, '2017_08_17_011408_create_images_table', 1),
(10, '2017_08_17_011439_create_comment_table', 1),
(11, '2017_08_17_011623_create_product_rating_table', 1),
(12, '2017_08_17_012322_create_tags_table', 1),
(13, '2017_08_19_164534_create_delivery_table', 1),
(14, '2017_08_19_192802_change_users_table', 1),
(15, '2017_08_19_194329_change_order_table', 1),
(16, '2017_08_19_201513_create_user_rating_table', 1),
(17, '2017_08_19_204206_change_product_table', 1),
(18, '2017_08_19_204437_change_product_options_table', 1),
(19, '2017_08_19_210102_change_images_table', 1),
(20, '2017_08_19_210531_change_comment_table', 1),
(21, '2017_08_19_211030_create_response_table', 1),
(22, '2017_08_19_211423_change_product_rating_table', 1),
(23, '2017_08_19_215602_change_user_rating_table', 1),
(24, '2017_08_19_215717_change_response_table', 1),
(25, '2017_08_19_225819_create_payment_table', 2),
(26, '2017_08_19_225857_change_order_table2', 2),
(27, '2017_08_19_231721_create_basket_table', 3),
(28, '2017_08_19_233415_change_payment_table2', 4),
(29, '2017_08_19_233719_change_order_table3', 5),
(30, '2017_08_21_225122_create_faq_table', 6),
(31, '2017_08_22_000125_change_comment2_table', 7),
(32, '2017_08_22_161741_change_contacts2_table', 8),
(33, '2017_08_22_162740_change_contacts3_table', 9),
(34, '2017_08_22_163155_change_contacts4_table', 10),
(35, '2017_08_22_163332_change_contacts5_table', 11),
(36, '2017_08_22_212751_change_user3_table', 12),
(37, '2017_08_22_224239_create_message_table', 13),
(38, '2017_08_22_231451_create_payment_table2', 14),
(39, '2017_08_26_212503_change_product_options_table2', 15),
(40, '2017_08_26_225602_change_product_options_table3', 16),
(41, '2017_08_26_232839_change_product_rating_table2', 17),
(42, '2017_08_29_202742_change_order_table4', 18),
(43, '2017_08_29_202815_change_payment_table4', 18),
(44, '2017_08_30_011332_change_order_table5', 19),
(45, '2017_08_30_013142_change_payment_table5', 20),
(46, '2017_08_30_013203_change_order_tabl6', 21),
(47, '2017_08_30_124739_change_order_table6', 22),
(48, '2017_08_30_125038_change_payment_table6', 22),
(49, '2017_08_31_211443_change_user_table3', 23),
(50, '2017_09_07_003229_change_order4_table', 24);

-- --------------------------------------------------------

--
-- Структура таблиці `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size_integer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size_string` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `material` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `product_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `seller_id` int(10) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `order`
--

INSERT INTO `order` (`id`, `status`, `length`, `height`, `width`, `size_integer`, `size_string`, `weight`, `color`, `material`, `count`, `price`, `sum`, `created_at`, `updated_at`, `user_id`, `product_id`, `seller_id`) VALUES
(2, '1', '0', '0', '0', '6', 'M', '0', 'Чорні', 'Вовна', 3, '11', '33', '2017-08-31 12:14:54', '2017-08-31 12:14:54', 3, 1, 1),
(3, '2', '0', '0', '0', '6', 'M', '0', 'Чорні', 'Вовна', 3, '11', '33', '2017-08-31 12:15:15', '2017-08-31 12:15:15', 3, 1, 1),
(4, '1', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 7, '11', '77', '2017-08-31 12:23:27', '2017-08-31 12:23:27', 3, 1, 1),
(5, '1', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 7, '11', '77', '2017-08-31 12:24:56', '2017-08-31 12:24:56', 3, 1, 1),
(6, '1', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 7, '11', '77', '2017-08-31 12:25:11', '2017-09-09 12:58:57', 1, 1, 3),
(7, '0', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 7, '11', '77', '2017-08-31 12:25:29', '2017-08-31 12:25:29', 3, 1, 3),
(8, '3', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 7, '11', '77', '2017-08-31 12:26:03', '2017-08-31 12:26:03', 3, 1, 1),
(9, '2', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 7, '11', '77', '2017-08-31 12:26:32', '2017-08-31 12:26:32', 3, 1, 1),
(16, '0', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 7, '11', '77', '2017-08-31 12:31:37', '2017-08-31 12:31:37', 3, 1, 3),
(20, '3', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 7, '11', '77', '2017-08-31 12:33:06', '2017-08-31 12:33:06', 3, 1, 1),
(21, '1', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 7, '11', '77', '2017-08-31 12:35:00', '2017-08-31 12:35:00', 3, 1, 1),
(24, '2', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 7, '11', '77', '2017-08-31 12:36:47', '2017-08-31 12:36:47', 3, 1, 1),
(27, '3', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 7, '11', '77', '2017-08-31 12:37:47', '2017-08-31 12:37:47', 3, 1, 1),
(30, '1', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 7, '11', '77', '2017-08-31 12:39:00', '2017-08-31 12:39:00', 3, 1, 1),
(50, '1', '0', '0', '0', '6', 'M', '0', 'Чорні', 'Вовна', 3, '11', '33', '2017-09-01 12:01:42', '2017-09-01 12:01:42', 3, 1, 1),
(55, '1', '0', '0', '0', '6', 'M', '0', 'Чорні', 'Вовна', 3, '11', '33', '2017-09-01 12:06:11', '2017-09-01 12:06:11', 3, 1, 1),
(57, '2', '0', '0', '0', '6', 'M', '0', 'Чорні', 'Вовна', 3, '11', '33', '2017-09-01 12:08:33', '2017-09-01 12:08:33', 3, 1, 1),
(58, '1', '0', '0', '0', '6', 'M', '0', 'Чорні', 'Вовна', 3, '11', '33', '2017-09-01 13:45:00', '2017-09-01 13:45:00', 3, 1, 1),
(61, '1', '0', '0', '0', '6', 'M', '0', 'Чорні', 'Вовна', 3, '11', '33', '2017-09-01 17:27:17', '2017-09-01 17:27:17', 3, 1, 1),
(62, '1', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 1, '11', '11', '2017-09-06 21:42:54', '2017-09-06 21:42:54', 3, 1, 1),
(63, '0', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 8, '11', '88', '2017-09-09 13:04:50', '2017-09-09 13:04:50', 3, 1, 1),
(64, '0', '0', '0', '0', '6', 'M', '0', 'Чорні', 'Вовна', 4, '11', '44', '2017-09-09 13:09:56', '2017-09-09 13:09:56', 3, 1, 1),
(65, '0', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 1, '11', '11', '2017-09-09 13:19:33', '2017-09-09 13:19:33', 3, 1, 1),
(66, '0', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 1, '11', '11', '2017-09-09 13:32:10', '2017-09-09 13:32:10', 3, 1, 1),
(67, '0', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 1, '11', '11', '2017-09-09 13:34:25', '2017-09-09 13:34:25', 3, 1, 1),
(68, '0', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 1, '11', '11', '2017-09-09 13:53:21', '2017-09-09 13:53:21', 3, 1, 1),
(69, '0', '0', '0', '0', '6', 'M', '0', 'Чорні', 'Вовна', 2, '11', '22', '2017-09-09 13:54:31', '2017-09-09 13:54:31', 3, 1, 1),
(70, '0', '0', '0', '0', '6', 'M', '0', 'Чорні', 'Вовна', 3, '11', '33', '2017-09-09 14:08:00', '2017-09-09 14:08:00', 3, 1, 1),
(71, '0', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 1, '11', '11', '2017-09-09 14:13:49', '2017-09-09 14:13:49', 3, 1, 1),
(72, '0', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 1, '11', '11', '2017-09-09 14:27:03', '2017-09-09 14:27:03', 3, 1, 1),
(73, '0', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 1, '11', '11', '2017-09-09 21:51:05', '2017-09-09 21:51:05', 3, 1, 1),
(74, '0', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 3, '11', '33', '2017-09-09 21:55:37', '2017-09-09 21:55:37', 3, 1, 1),
(75, '0', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 1, '11', '11', '2017-09-10 09:01:09', '2017-09-10 09:01:09', 3, 1, 1),
(76, '0', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 1, '11', '11', '2017-09-10 09:27:13', '2017-09-10 09:27:13', 3, 1, 1),
(77, '1', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 1, '11', '11', '2017-09-10 09:28:26', '2017-09-10 09:28:36', 3, 1, 1),
(78, '1', '0', '0', '0', '6', 'M', '0', 'Чорні', 'Вовна', 2, '11', '22', '2017-09-10 09:29:13', '2017-09-10 09:29:23', 3, 1, 1),
(94, '1', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 1, '11', '11', '2017-09-10 14:01:22', '2017-09-10 14:01:29', 3, 1, 1),
(95, '1', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 1, '11', '11', '2017-09-10 17:17:50', '2017-09-10 17:29:29', 3, 1, 1),
(96, '1', '0', '0', '0', '7', 'L', '0', 'Білі', 'Вовна', 1, '11', '11', '2017-09-10 17:51:17', '2017-09-10 17:51:24', 3, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблиці `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `payment`
--

CREATE TABLE `payment` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `account` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `our_account` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `order_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `delivery_id` int(10) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `payment`
--

INSERT INTO `payment` (`id`, `name`, `account`, `our_account`, `created_at`, `updated_at`, `user_id`, `order_id`, `delivery_id`) VALUES
(1, 'test', '6546453435', '35345675643', '2017-09-10 14:01:29', '2017-09-10 14:01:29', 3, 94, 1),
(15, 'test', '6546453435', '35345675643', '2017-09-10 17:51:24', '2017-09-10 17:51:24', 3, 96, 3),
(16, 'test', '6546453435', '35345675643', '2017-09-10 17:53:14', '2017-09-10 17:53:14', 3, 96, 3),
(17, 'test', '6546453435', '35345675643', '2017-09-10 17:53:40', '2017-09-10 17:53:40', 3, 96, 3),
(18, 'test', '6546453435', '35345675643', '2017-09-10 19:52:23', '2017-09-10 19:52:23', 3, 96, 3),
(19, 'test', '6546453435', '35345675643', '2017-09-10 20:08:23', '2017-09-10 20:08:23', 3, 96, 3);

-- --------------------------------------------------------

--
-- Структура таблиці `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hit` int(11) NOT NULL,
  `new` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `price` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  `public` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `category_id` int(10) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `product`
--

INSERT INTO `product` (`id`, `title`, `alias`, `hit`, `new`, `sale`, `price`, `count`, `text`, `currency`, `discount`, `public`, `created_at`, `updated_at`, `user_id`, `category_id`) VALUES
(1, 'Житомирські Носткі', 'zhitomirskі_noski', 1, 1, 1, '10', 245, 'Супер круті носкри різних колярів', '1', 0, 1, '2017-08-22 21:00:14', NULL, 1, 1),
(4, 'Житомирські Шапкі', 'zhitomirskі_shapki', 1, 1, 0, '105', 143, 'Супер круті шапки різних колярів', '1', 0, 1, '2017-08-22 21:00:14', NULL, 3, 1),
(5, 'Бейс 3000', 'beys', 1, 0, 1, '79', 687, 'Супер круті босоніжки різних колярів', '1', 0, 1, '2017-08-22 21:00:14', NULL, 1, 3),
(6, 'Житомирські босоніжки', 'zhitomirskі_bosonijki', 1, 1, 1, '105', 143, 'Супер круті шапки різних колярів', '1', 0, 1, '2017-08-22 21:00:14', NULL, 1, 1),
(7, 'Житомирські босоніжки', 'zhitomirskі_bosonijkidfdfd', 1, 1, 1, '105', 143, 'Супер круті шапки різних колярів', '1', 0, 1, '2017-08-22 21:00:14', NULL, 3, 1),
(8, 'Бейс 3000', 'beysf', 1, 0, 1, '79', 687, 'Супер круті босоніжки різних колярів', '1', 0, 1, '2017-08-22 21:00:14', NULL, 1, 3),
(10, 'Житомирські Носткі', 'zhitomirskі_noskias', 1, 1, 1, '79', 687, 'Супер круті носкри різних колярів', '1', 0, 1, '2017-08-22 21:00:14', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблиці `product_options`
--

CREATE TABLE `product_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size_integer` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size_string` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `material` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `product_options`
--

INSERT INTO `product_options` (`id`, `length`, `height`, `width`, `size_integer`, `size_string`, `weight`, `color`, `material`, `count`, `created_at`, `updated_at`, `product_id`, `price`) VALUES
(1, '', '', '', '7', 'L', '', 'Білі', 'Вовна', 592, '2017-08-26 21:00:13', '2017-09-10 17:51:17', 1, '11'),
(2, '', '', '', '6', 'M', '', 'Чорні', 'Вовна', 476, '2017-08-26 21:00:13', '2017-09-10 09:57:26', 1, '11');

-- --------------------------------------------------------

--
-- Структура таблиці `product_rating`
--

CREATE TABLE `product_rating` (
  `id` int(10) UNSIGNED NOT NULL,
  `rank` int(11) NOT NULL DEFAULT '0',
  `public` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `product_rating`
--

INSERT INTO `product_rating` (`id`, `rank`, `public`, `created_at`, `updated_at`, `product_id`, `user_id`, `text`) VALUES
(1, 5, 1, '2017-08-23 21:00:07', NULL, 1, 2, 'Чудовий товар'),
(2, 4, 1, '2017-08-23 21:00:07', NULL, 1, 1, 'Вже 10 років в них зоджу і нічого, якість на високому рівні'),
(3, 5, 1, '2017-08-23 21:00:07', NULL, 4, 2, 'Відмінна якість');

-- --------------------------------------------------------

--
-- Структура таблиці `response`
--

CREATE TABLE `response` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `public` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `voted_id` int(10) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `rols`
--

CREATE TABLE `rols` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `rols`
--

INSERT INTO `rols` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Простий користувач', 'Переглядає, замовляє товар', NULL, NULL),
(2, 'Модератор', 'Переглядає, редагує', NULL, NULL),
(3, 'Адміністратор', 'Всемогутній', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `public` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rols_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `index` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `user`
--

INSERT INTO `user` (`id`, `name`, `sename`, `email`, `password`, `phone`, `year`, `month`, `day`, `country`, `region`, `city`, `street`, `house`, `status`, `sex`, `public`, `remember_token`, `created_at`, `updated_at`, `rols_id`, `avatar`, `index`) VALUES
(1, 'Sasha', 'Unimeg', 'Saninho@gmail.com', '$2y$10$5TkuOZSz459qo.YHc4uydecK.FBIMGkW8V8h.3.gqCnmS9YGJES4.', '380964234', 1993, 10, 11, 'Україна', 'Рівненський', 'Рівне', 'Київська', 32, 10, '1', 1, 'VEUIvkbt2EYEVOjA5RnpJZoGhe9cxroUSAit7Pq3y17GD5h82Xqdwh6pHdtd', '2017-08-22 17:01:28', '2017-08-22 17:01:28', 3, '829ac6ce1947543feed0294e32da4543.jpg', '43254'),
(2, 'Sanino', 'Sapara', 'Sanino@gmail.com', '$2y$10$2psBrEjoiI8unXrgfF7eQ.1BcX8VUURRdnP/I5c7MKsD8pitJ2sky', '38098456453', 2004, 8, 13, 'Ukraine', 'Rivnenskiy', 'Rivne', 'Kievsta', 34, 1, '1', 1, NULL, '2017-08-23 17:34:00', '2017-08-23 17:34:00', 1, 'image2_117579.jpg', '24543'),
(3, 'Sanino', 'Sapara', 'Saninoa@gmail.com', '$2y$10$cNw4n3W1GknUk5EJbeVq9.kz13ez7ubVJ5Z50ybv3bB27BYRINRge', '38098456453', 1900, 1, 1, 'Ukraine', 'Rivnenskiy', 'Rivne', 'Kievsta', 34, 1, '1', 1, 'rfMwrrAibVn2jbEUUpfOykXwnfkeEO1NWQOYsFFal5AKPWavaqkiF4E040st', '2017-08-23 17:35:38', '2017-09-05 21:15:25', 1, 'World___United_Arab_Emirates_View_on_Dubai_from_the_window_of_a_skyscraper_085889_.jpg', '34254');

-- --------------------------------------------------------

--
-- Структура таблиці `user_rating`
--

CREATE TABLE `user_rating` (
  `id` int(10) UNSIGNED NOT NULL,
  `rank` int(11) NOT NULL DEFAULT '0',
  `public` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `voted_id` int(10) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `basket_user_id_foreign` (`user_id`),
  ADD KEY `basket_product_id_foreign` (`product_id`);

--
-- Індекси таблиці `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_alias_unique` (`alias`);

--
-- Індекси таблиці `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_user_id_foreign` (`user_id`),
  ADD KEY `comment_product_id_foreign` (`product_id`);

--
-- Індекси таблиці `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`product_id`);

--
-- Індекси таблиці `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `message_user_id_foreign` (`user_id`),
  ADD KEY `message_whom_id_foreign` (`whom_id`);

--
-- Індекси таблиці `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_user_id_foreign` (`user_id`),
  ADD KEY `order_product_id_foreign` (`product_id`),
  ADD KEY `order_seller_id_foreign` (`seller_id`);

--
-- Індекси таблиці `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Індекси таблиці `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_user_id_foreign` (`user_id`),
  ADD KEY `payment_order_id_foreign` (`order_id`),
  ADD KEY `payment_delivery_id_foreign` (`delivery_id`);

--
-- Індекси таблиці `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_alias_unique` (`alias`),
  ADD KEY `product_user_id_foreign` (`user_id`),
  ADD KEY `product_category_id_foreign` (`category_id`);
ALTER TABLE `product` ADD FULLTEXT KEY `alias` (`alias`);

--
-- Індекси таблиці `product_options`
--
ALTER TABLE `product_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_options_product_id_foreign` (`product_id`);

--
-- Індекси таблиці `product_rating`
--
ALTER TABLE `product_rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_rating_product_id_foreign` (`product_id`),
  ADD KEY `product_rating_user_id_foreign` (`user_id`);

--
-- Індекси таблиці `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id`),
  ADD KEY `response_user_id_foreign` (`user_id`),
  ADD KEY `response_voted_id_foreign` (`voted_id`);

--
-- Індекси таблиці `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_unique` (`email`),
  ADD KEY `user_rols_id_foreign` (`rols_id`);

--
-- Індекси таблиці `user_rating`
--
ALTER TABLE `user_rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_rating_user_id_foreign` (`user_id`),
  ADD KEY `user_rating_voted_id_foreign` (`voted_id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблиці `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT для таблиці `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблиці `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT для таблиці `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблиці `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT для таблиці `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT для таблиці `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT для таблиці `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблиці `product_options`
--
ALTER TABLE `product_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблиці `product_rating`
--
ALTER TABLE `product_rating`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблиці `response`
--
ALTER TABLE `response`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `rols`
--
ALTER TABLE `rols`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблиці `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблиці `user_rating`
--
ALTER TABLE `user_rating`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `basket_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `basket_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `comment_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `message_whom_id_foreign` FOREIGN KEY (`whom_id`) REFERENCES `user` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `order_seller_id_foreign` FOREIGN KEY (`seller_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `order_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_delivery_id_foreign` FOREIGN KEY (`delivery_id`) REFERENCES `delivery` (`id`),
  ADD CONSTRAINT `payment_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`),
  ADD CONSTRAINT `payment_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `product_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `product_options`
--
ALTER TABLE `product_options`
  ADD CONSTRAINT `product_options_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `product_rating`
--
ALTER TABLE `product_rating`
  ADD CONSTRAINT `product_rating_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `product_rating_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `response`
--
ALTER TABLE `response`
  ADD CONSTRAINT `response_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `response_voted_id_foreign` FOREIGN KEY (`voted_id`) REFERENCES `user` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_rols_id_foreign` FOREIGN KEY (`rols_id`) REFERENCES `rols` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `user_rating`
--
ALTER TABLE `user_rating`
  ADD CONSTRAINT `user_rating_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `user_rating_voted_id_foreign` FOREIGN KEY (`voted_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
