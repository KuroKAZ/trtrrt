-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 21 2025 г., 06:55
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
-- База данных: `restaurant_sapphire`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `created_at`) VALUES
(1, 'Основные блюда', 'Горячие блюда, роллы, рамены, закуски', 'https://images.unsplash.com/photo-1563245372-f21724e3856d?w=500&auto=format&fit=crop&q=60', '2025-10-27 19:48:16'),
(2, 'Напитки', 'Безалкогольные напитки, чай, кофе, коктейли', 'https://images.unsplash.com/photo-1544145945-f90425340c7e?w=500&auto=format&fit=crop&q=60', '2025-10-27 19:48:16');

-- --------------------------------------------------------

--
-- Структура таблицы `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_available` tinyint(1) DEFAULT 1,
  `ingredients` text DEFAULT NULL,
  `cooking_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `menu_items`
--

INSERT INTO `menu_items` (`id`, `name`, `description`, `price`, `category_id`, `image`, `is_available`, `ingredients`, `cooking_time`) VALUES
(35, 'Корн дог', 'Хрустящая картошка фри с сочной сосиской', 325.00, 1, 'https://i.pinimg.com/474x/30/75/54/307554f136ead19aec93091d331349f1.jpg', 1, 'Картошка, сосиска, панировочные сухари, масло растительное', 15),
(36, 'Рамен том ям', 'Острый тайский суп с креветками и лапшой', 480.00, 1, 'https://avatars.mds.yandex.net/get-altay/7742431/2a0000018414e9e47897c4f6f776fd0d9756/XXXL', 1, 'Говяжий бульон, лапша удон, креветки, лук, перец чили, лемонграсс, кокосовое молоко', 20),
(37, 'Роллы белый жемчуг', 'Нежные роллы с угрем и сырным кремом', 530.00, 1, 'https://avatars.mds.yandex.net/i?id=6729f34a0976150ce576c13d293ca440_l-10311550-images-thumbs&ref=rim&n=13&w=1200&h=1200', 1, 'Рис, нори, угорь, омлет тамаго, сыр сливочный, огурец, кунжут', 12),
(38, 'Роллы Филадельфия микс', 'Классические роллы с авокадо и сливочным сыром', 690.00, 1, 'https://static.life.ru/ip/unsafe/rs:fill:1200:/gravity:ce/q:100/czM6Ly9saWZlLXN0YXRpYy9wdWJsaWNhdGlvbnMvMjAyNC8xMS8yOC82MDAyMTIyNzY1ODkuOTg1LndlYnA=', 1, 'Рис, нори, авокадо, сливочный сыр, лосось, огурец', 10),
(39, 'Роллы Темпура с копченной курицей', 'Хрустящие роллы в кляре с курицей', 459.00, 1, 'https://image.vsem-edu-oblako.ru/upload/store/merchant1506/ebitem1708603831.jpg', 1, 'Рис, нори, сливочный сыр, копченая курица, икра масаго, огурец, кляр темпура', 15),
(40, 'Токпокки', 'Корейские рисовые колбаски в остро-сладком соусе', 520.00, 1, 'https://avatars.mds.yandex.net/i?id=b746d632921cfb83890eeecea354db6e_l-4575666-images-thumbs&n=13', 1, 'Рисовые колбаски, соус кочуджан, овощи, сыр моцарелла, яйцо', 18),
(41, 'Ролл Хокку', 'Ролл с копченой курицей и хрустящим луком', 429.00, 1, 'https://static.tildacdn.com/tild3165-3835-4633-b830-333862613263/SRG_7372.jpg', 1, 'Рис, нори, лук фри, сливочный сыр, курица копченая, огурец', 8),
(42, 'Кимпаб', 'Корейские рисовые рулетики с курицей и овощами', 495.00, 1, 'https://avatars.mds.yandex.net/i?id=21ee1479a2a4ffe04deaa73386f99fb1_l-4565467-images-thumbs&n=13', 1, 'Рис, нори, курица, морковь, шпинат, огурец, яичный блинчик', 12),
(43, 'Рамен чиз', 'Сырный рамен с креветками и омлетом', 510.00, 1, 'https://imageproxy.wolt.com/menu/menu-images/626962a3bd97ccfe1ba86597/fb6af030-bad8-11ed-a8f2-5e340a30d313________________________.jpeg', 1, 'Рис, тигровая креветка, японский омлет, сыр, икра самаго, бульон', 22),
(44, 'Мохито', 'Освежающий безалкогольный мохито', 150.00, 2, 'https://imageproxy.wolt.com/menu/menu-images/65672ce2bf2f9280bf555c7c/f42b6ac2-9050-11ee-8ec3-325e0fdc9ce7_______.jpg', 1, 'Лайм, свежая мята, газированная вода, сахарный сироп, лед', 5),
(45, 'Орео бабл', 'Молочный коктейль с печеньем Орео', 455.00, 2, 'https://avatars.mds.yandex.net/i?id=6a702a7f623eb5f3ce01a3ea014aaa92_l-4557789-images-thumbs&n=13', 1, 'Молоко, печенье oreo, шарики тапиоки, сироп, лед', 7),
(46, 'Тайгер шугар', 'Чай с молоком и карамельным сиропом', 280.00, 2, 'https://avatars.mds.yandex.net/i?id=142403b3808bb7c37d6b3c5ace227309_l-5268626-images-thumbs&n=13', 1, 'Молоко, тапиока, браун шугар, черный чай, лед', 6),
(47, 'Банановое молоко', 'Нежный молочный коктейль с бананом', 220.00, 2, 'https://ic.pics.livejournal.com/mundic/16057954/992608/992608_1000.jpg', 1, 'Молоко, банан, сахар, ваниль, лед', 5),
(48, 'Дынное молоко', 'Ароматный молочный коктейль с дыней', 220.00, 2, 'https://prostokvashino.ru/upload/resize_cache/iblock/e35/800_800_0/e35e8e5c9f0be179959d56ab50aa461a.jpg', 1, 'Молоко, дыня, сахар, лед', 5),
(49, 'Кофейная любовь Чонён', 'Кофейный напиток с фруктовыми нотами', 320.00, 2, 'https://i.pinimg.com/736x/1d/ca/d8/1dcad8af32d14fe80c56bc3bce678f71.jpg', 1, 'Эспрессо, апельсиновый сироп, молоко, лед, фруктовый микс', 8),
(50, 'Она ждала тебя', 'Кофейный коктейль с клубничным сиропом', 335.00, 2, 'https://i01.fotocdn.net/s122/7186470b1ef8b0e7/public_pin_l/2791272342.jpg', 1, 'Айс-ти кофе, земляника, молоко, сироп, лед', 7),
(51, 'Юдзу чай', 'Освежающий чай с цитрусом юдзу', 335.00, 2, 'https://korfood.ru/upload/iblock/ece/vmm1ls26e1lu8l4th4c2lu9fptwdrpnn/Napitok-s-tsitronom-yudzu-i-vitaminom-S-Woongjin_-280-ml-_2_.jpg', 1, 'Зеленый чай, цитрус юдзу, анчан, мед, лед', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_01_000000_create_categories_table', 2),
(6, '2024_01_01_000001_create_menu_items_table', 2),
(7, '2024_01_01_000002_create_orders_table', 3),
(8, '2024_01_01_000003_create_order_items_table', 3),
(9, '2024_01_01_000004_create_reservations_table', 4),
(10, '2024_01_01_000005_create_sessions_table', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `customer_name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `order_type` enum('delivery','pickup','dine_in') NOT NULL,
  `address` text DEFAULT NULL,
  `status` enum('pending','confirmed','preparing','ready','completed','cancelled') DEFAULT 'pending',
  `payment_status` enum('pending','paid','failed') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `customer_name`, `phone`, `email`, `total_amount`, `order_type`, `address`, `status`, `payment_status`, `created_at`) VALUES
(1, 1, 'Иванов Алексей', '+7 (495) 123-45-67', 'alexey.ivanov@mail.ru', 1310.00, 'delivery', 'г. Москва, ул. Тверская, д. 15, кв. 42', 'completed', 'paid', '2024-04-10 11:20:00'),
(2, 2, 'Петрова Мария', '+7 (916) 234-56-78', 'maria.petrova@gmail.com', 3090.00, 'pickup', NULL, 'completed', 'paid', '2024-04-11 07:15:00'),
(3, 3, 'Сидоров Дмитрий', '+7 (925) 345-67-89', 'dmitry.sidorov@yandex.ru', 974.00, 'delivery', 'г. Москва, пр. Мира, д. 28, кв. 17', 'pending', 'pending', '2024-04-12 13:45:00'),
(4, 4, 'Козлова Анна', '+7 (903) 456-78-90', 'anna.kozlova@mail.ru', 4392.00, 'dine_in', NULL, '', 'paid', '2024-04-13 08:30:00'),
(5, 5, 'Николаев Владимир', '+7 (495) 567-89-01', 'vladimir.nikolaev@gmail.com', 1850.00, 'delivery', 'г. Москва, ул. Арбат, д. 33, кв. 8', 'completed', 'paid', '2024-04-14 06:20:00'),
(6, 1, 'Иванов Алексей', '+7 (495) 123-45-67', 'alexey.ivanov@mail.ru', 1735.00, 'pickup', NULL, 'pending', 'pending', '2024-04-15 10:10:00'),
(7, 6, 'Федорова Екатерина', '+7 (916) 678-90-12', 'ekaterina.fedorova@yandex.ru', 3966.00, 'dine_in', NULL, '', 'paid', '2024-04-16 12:40:00'),
(8, 7, 'Александров Сергей', '+7 (925) 789-01-23', 'sergey.alexandrov@mail.ru', 1285.00, 'delivery', 'г. Москва, ул. Ленинградская, д. 52, кв. 24', 'cancelled', '', '2024-04-17 09:25:00'),
(9, 8, 'Павлова Ольга', '+7 (903) 890-12-34', 'olga.pavlova@gmail.com', 2340.00, 'pickup', NULL, 'completed', 'paid', '2024-04-18 14:50:00'),
(10, 2, 'Петрова Мария', '+7 (916) 234-56-78', 'maria.petrova@gmail.com', 1345.00, 'delivery', 'г. Москва, ул. Новый Арбат, д. 19, кв. 31', 'pending', 'pending', '2024-04-19 11:35:00');

-- --------------------------------------------------------

--
-- Структура таблицы `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `menu_item_id` int(11) DEFAULT NULL,
  `item_name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `menu_item_id`, `item_name`, `price`, `quantity`, `subtotal`) VALUES
(43, 1, 35, 'Корн дог', 325.00, 1, 325.00),
(44, 1, 36, 'Рамен том ям', 480.00, 1, 480.00),
(45, 1, 44, 'Мохито', 150.00, 2, 300.00),
(46, 2, 38, 'Роллы Филадельфия микс', 690.00, 2, 1380.00),
(47, 2, 40, 'Токпокки', 520.00, 1, 520.00),
(48, 2, 45, 'Орео бабл', 455.00, 2, 910.00),
(49, 2, 46, 'Тайгер шугар', 280.00, 1, 280.00),
(50, 3, 35, 'Корн дог', 325.00, 1, 325.00),
(51, 3, 41, 'Ролл Хокку', 429.00, 1, 429.00),
(52, 3, 47, 'Банановое молоко', 220.00, 1, 220.00),
(53, 4, 39, 'Роллы Темпура с копченной курицей', 459.00, 3, 1377.00),
(54, 4, 42, 'Кимпаб', 495.00, 2, 990.00),
(55, 4, 43, 'Рамен чиз', 510.00, 2, 1020.00),
(56, 4, 51, 'Юдзу чай', 335.00, 3, 1005.00),
(57, 5, 38, 'Роллы Филадельфия микс', 690.00, 1, 690.00),
(58, 5, 40, 'Токпокки', 520.00, 1, 520.00),
(59, 5, 49, 'Кофейная любовь Чонён', 320.00, 2, 640.00),
(60, 6, 35, 'Корн дог', 325.00, 2, 650.00),
(61, 6, 37, 'Роллы белый жемчуг', 530.00, 1, 530.00),
(62, 6, 48, 'Дынное молоко', 220.00, 1, 220.00),
(63, 6, 50, 'Она ждала тебя', 335.00, 1, 335.00),
(64, 7, 36, 'Рамен том ям', 480.00, 3, 1440.00),
(65, 7, 39, 'Роллы Темпура с копченной курицей', 459.00, 2, 918.00),
(66, 7, 41, 'Ролл Хокку', 429.00, 2, 858.00),
(67, 7, 44, 'Мохито', 150.00, 5, 750.00),
(68, 8, 42, 'Кимпаб', 495.00, 1, 495.00),
(69, 8, 43, 'Рамен чиз', 510.00, 1, 510.00),
(70, 8, 46, 'Тайгер шугар', 280.00, 1, 280.00),
(71, 9, 38, 'Роллы Филадельфия микс', 690.00, 1, 690.00),
(72, 9, 40, 'Токпокки', 520.00, 1, 520.00),
(73, 9, 45, 'Орео бабл', 455.00, 2, 910.00),
(74, 9, 47, 'Банановое молоко', 220.00, 1, 220.00),
(75, 10, 37, 'Роллы белый жемчуг', 530.00, 1, 530.00),
(76, 10, 36, 'Рамен том ям', 480.00, 1, 480.00),
(77, 10, 51, 'Юдзу чай', 335.00, 1, 335.00);

-- --------------------------------------------------------

--
-- Структура таблицы `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `reservation_date` date NOT NULL,
  `reservation_time` time NOT NULL,
  `guests` int(11) NOT NULL,
  `comments` text DEFAULT NULL,
  `order_details` text DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT 0.00,
  `status` varchar(20) DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `reservations`
--

INSERT INTO `reservations` (`id`, `customer_name`, `phone`, `email`, `reservation_date`, `reservation_time`, `guests`, `comments`, `order_details`, `total_amount`, `status`, `created_at`, `updated_at`, `user_id`, `order_id`) VALUES
(1, 'Катя', '89203219299', 'ekaterinakonenkova8837@gmail.com', '0057-06-06', '06:06:00', 1, NULL, 'Мохито × 1 - 150 руб.', 350.00, 'pending', '2025-10-27 07:50:40', '2025-10-27 20:27:19', 1, NULL),
(2, 'Катя', '89203219299', 'ekaterinakonenkova8837@gmail.com', '0345-03-12', '12:32:00', 1, NULL, 'Мохито × 1 - 150 руб.', 350.00, 'pending', '2025-10-27 07:50:58', '2025-10-27 20:27:19', 2, NULL),
(3, 'Катя', '89203219299', 'ekaterinakonenkova8837@gmail.com', '4567-03-04', '03:56:00', 1, NULL, 'Мохито × 1 - 150 руб.', 350.00, 'pending', '2025-10-27 07:52:45', '2025-10-27 20:27:19', 3, NULL),
(4, 'rКатя', '32233232', 'isoldefallonathelstan7@outlook.com', '0121-02-21', '03:32:00', 1, NULL, 'Рамен том ям × 1 - 480 руб.', 680.00, 'pending', '2025-10-27 11:53:31', '2025-10-27 20:27:19', 4, NULL),
(5, 'Катя', '89203219299', 'isoldefallonathelstan7@outlook.com', '2025-10-03', '03:32:00', 4, NULL, 'Токпокки × 1 - 520 руб.', 720.00, 'pending', '2025-10-27 12:07:44', '2025-10-27 20:27:19', 5, NULL),
(6, 'Иванов Алексей', '+7 (495) 123-45-67', 'alexey.ivanov@mail.ru', '2024-04-15', '19:00:00', 2, 'Стол у окна, пожалуйста', 'Рамен том ям × 1 - 480.00 р.\nРоллы белый жемчуг × 1 - 530.00 р.\nМохито × 2 - 300.00 р.', 1310.00, 'confirmed', '2024-04-10 11:20:00', '2025-10-27 20:27:19', 1, NULL),
(7, 'Петрова Мария', '+7 (916) 234-56-78', 'maria.petrova@gmail.com', '2024-04-16', '20:30:00', 4, 'День рождения', 'Роллы Филадельфия микс × 2 - 1380.00 р.\nТокпокки × 1 - 520.00 р.\nОрео бабл × 2 - 910.00 р.\nТайгер шугар × 1 - 280.00 р.', 3090.00, 'confirmed', '2024-04-11 07:15:00', '2025-10-27 20:27:19', 6, NULL),
(8, 'Сидоров Дмитрий', '+7 (925) 345-67-89', 'dmitry.sidorov@yandex.ru', '2024-04-14', '18:00:00', 2, NULL, 'Корн дог × 1 - 325.00 р.\nРолл Хокку × 1 - 429.00 р.\nБанановое молоко × 1 - 220.00 р.', 974.00, 'pending', '2024-04-12 13:45:00', '2025-10-27 20:27:19', 7, NULL),
(9, 'Козлова Анна', '+7 (903) 456-78-90', 'anna.kozlova@mail.ru', '2024-04-17', '21:00:00', 6, 'Корпоративное мероприятие', 'Роллы Темпура × 3 - 1377.00 р.\nКимпаб × 2 - 990.00 р.\nРамен чиз × 2 - 1020.00 р.\nЮдзу чай × 3 - 1005.00 р.', 4392.00, 'confirmed', '2024-04-13 08:30:00', '2025-10-27 20:27:19', 8, NULL),
(10, 'Николаев Владимир', '+7 (495) 567-89-01', 'vladimir.nikolaev@gmail.com', '2024-04-18', '19:30:00', 2, 'Романтический ужин', 'Роллы Филадельфия микс × 1 - 690.00 р.\nТокпокки × 1 - 520.00 р.\nКофейная любовь Чонён × 2 - 640.00 р.', 1850.00, 'confirmed', '2024-04-14 06:20:00', '2025-10-27 20:27:19', 2, NULL),
(11, 'Иванов Алексей', '+7 (495) 123-45-67', 'alexey.ivanov@mail.ru', '2024-04-20', '20:00:00', 3, 'С ребенком', 'Корн дог × 2 - 650.00 р.\nРоллы белый жемчуг × 1 - 530.00 р.\nДынное молоко × 1 - 220.00 р.\nОна ждала тебя × 1 - 335.00 р.', 1735.00, 'pending', '2024-04-15 10:10:00', '2024-04-15 10:10:00', NULL, NULL),
(12, 'Федорова Екатерина', '+7 (916) 678-90-12', 'ekaterina.fedorova@yandex.ru', '2024-04-19', '18:30:00', 5, 'Юбилей', 'Рамен том ям × 3 - 1440.00 р.\nРоллы Темпура × 2 - 918.00 р.\nРолл Хокку × 2 - 858.00 р.\nМохито × 5 - 750.00 р.', 3966.00, 'confirmed', '2024-04-16 12:40:00', '2024-04-16 12:40:00', NULL, NULL),
(13, 'Александров Сергей', '+7 (925) 789-01-23', 'sergey.alexandrov@mail.ru', '2024-04-21', '19:00:00', 2, 'Перенос на другую дату', 'Кимпаб × 1 - 495.00 р.\nРамен чиз × 1 - 510.00 р.\nТайгер шугар × 1 - 280.00 р.', 1285.00, 'cancelled', '2024-04-17 09:25:00', '2024-04-17 09:25:00', NULL, NULL),
(14, 'Павлова Ольга', '+7 (903) 890-12-34', 'olga.pavlova@gmail.com', '2024-04-22', '20:00:00', 4, 'Встреча с друзьями', 'Роллы Филадельфия микс × 1 - 690.00 р.\nТокпокки × 1 - 520.00 р.\nОрео бабл × 2 - 910.00 р.\nБанановое молоко × 1 - 220.00 р.', 2340.00, 'confirmed', '2024-04-18 14:50:00', '2024-04-18 14:50:00', NULL, NULL),
(15, 'Петрова Мария', '+7 (916) 234-56-78', 'maria.petrova@gmail.com', '2024-04-25', '19:30:00', 2, 'Деловая встреча', 'Роллы белый жемчуг × 1 - 530.00 р.\nРамен том ям × 1 - 480.00 р.\nЮдзу чай × 1 - 335.00 р.', 1345.00, 'pending', '2024-04-19 11:35:00', '2024-04-19 11:35:00', NULL, NULL),
(16, 'ФФФФФФФФФФФФ', '89203219299', 'ekaterinakonenkova8837@gmail.com', '0087-07-08', '05:57:00', 1, NULL, 'Юдзу чай × 1 - 335 руб.', 535.00, 'pending', '2025-10-27 16:57:53', '2025-10-27 16:57:53', NULL, NULL),
(17, 'Лизонька', '89203219299', 'ekaterinakonenkova8837@gmail.com', '0223-03-21', '22:03:00', 2, NULL, 'Юдзу чай × 1 - 335 руб.\r\nДынное молоко × 1 - 220 руб.', 755.00, 'pending', '2025-11-10 09:05:37', '2025-11-10 09:05:37', NULL, NULL),
(18, 'Игорь', '89203219299', 'barathroomm@outlook.com', '2026-02-01', '22:22:00', 4, NULL, 'Дынное молоко × 1 - 220 руб.\r\nРамен том ям × 1 - 480 руб.', 900.00, 'pending', '2025-11-10 09:07:40', '2025-11-10 09:07:40', NULL, NULL),
(19, 'Лиза', '89203219299', 'ekaterinakonenkova8837@gmail.com', '2006-03-27', '23:32:00', 1, NULL, 'Юдзу чай × 1 - 335 руб.\r\nДынное молоко × 1 - 220 руб.', 755.00, 'pending', '2025-11-20 18:06:47', '2025-11-20 18:06:47', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1', 1, '192.168.1.100', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36', '{\"user_id\":1,\"last_activity\":1712744400}', 0),
('10', 2, '192.168.1.109', 'Mozilla/5.0 (iPad; CPU OS 14_6 like Mac OS X) AppleWebKit/605.1.15', '{\"user_id\":2,\"last_activity\":1713519300}', 0),
('2', 2, '192.168.1.101', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36', '{\"user_id\":2,\"last_activity\":1712830500}', 0),
('3', 3, '192.168.1.102', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', '{\"user_id\":3,\"last_activity\":1712918700}', 0),
('4', 4, '192.168.1.103', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) Chrome/91.0.4472.124', '{\"user_id\":4,\"last_activity\":1713004200}', 0),
('5', 5, '192.168.1.104', 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_6 like Mac OS X) AppleWebKit/605.1.15', '{\"user_id\":5,\"last_activity\":1713090000}', 0),
('6', 1, '192.168.1.105', 'Mozilla/5.0 (Android 11; Mobile) AppleWebKit/537.36', '{\"user_id\":1,\"last_activity\":1713175800}', 0),
('63Hhl3t0ErQjNuVCbMCM8uOACxvGkYmWOTykHxaJ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVUphSDh0c0VwUjNMSGpIWEh5UHl5T28xYm9ySm9yaDcxcmRsamNtayI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7Tjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1761560400),
('7', 6, '192.168.1.106', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) Edge/91.0.864.59', '{\"user_id\":6,\"last_activity\":1713261600}', 0),
('8', 7, '192.168.1.107', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) Safari/605.1.15', '{\"user_id\":7,\"last_activity\":1713347100}', 0),
('9', 8, '192.168.1.108', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64) AppleWebKit/537.36', '{\"user_id\":8,\"last_activity\":1713432900}', 0),
('Oco89FrAoAiYTOkCp7ZiqctlsfH3JU0QJjPlTpAm', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaHYwQVFNRnFWZUhKdnFDbnlybk92d0RpQW5rUlVnWGFmQ1ZEWHJxWCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7Tjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1761561702);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('customer','admin') DEFAULT 'customer',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `role`, `created_at`) VALUES
(1, 'Иванов Алексей', 'alexey.ivanov@mail.ru', '+7 (495) 123-45-67', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '2024-01-15 07:30:00'),
(2, 'Петрова Мария', 'maria.petrova@gmail.com', '+7 (916) 234-56-78', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '2024-01-20 11:15:00'),
(3, 'Сидоров Дмитрий', 'dmitry.sidorov@yandex.ru', '+7 (925) 345-67-89', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '2024-02-05 06:45:00'),
(4, 'Козлова Анна', 'anna.kozlova@mail.ru', '+7 (903) 456-78-90', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '2024-02-12 13:20:00'),
(5, 'Николаев Владимир', 'vladimir.nikolaev@gmail.com', '+7 (495) 567-89-01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '2024-02-28 08:10:00'),
(6, 'Федорова Екатерина', 'ekaterina.fedorova@yandex.ru', '+7 (916) 678-90-12', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '2024-03-10 10:25:00'),
(7, 'Александров Сергей', 'sergey.alexandrov@mail.ru', '+7 (925) 789-01-23', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '2024-03-18 12:40:00'),
(8, 'Павлова Ольга', 'olga.pavlova@gmail.com', '+7 (903) 890-12-34', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '2024-03-25 09:05:00'),
(9, 'Смирнов Иван', 'ivan.smirnov@yandex.ru', '+7 (495) 901-23-45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', '2024-01-10 05:00:00'),
(10, 'Васильева Татьяна', 'tatiana.vasilyeva@mail.ru', '+7 (916) 012-34-56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', '2024-01-08 06:30:00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_menu_items_category` (`category_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_orders_user` (`user_id`);

--
-- Индексы таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_order_items_order` (`order_id`),
  ADD KEY `fk_order_items_menu_item` (`menu_item_id`);

--
-- Индексы таблицы `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reservations_user` (`user_id`),
  ADD KEY `fk_reservations_order` (`order_id`);

--
-- Индексы таблицы `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT для таблицы `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `fk_menu_items_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `fk_order_items_menu_item` FOREIGN KEY (`menu_item_id`) REFERENCES `menu_items` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_order_items_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `fk_reservations_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_reservations_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `fk_sessions_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
