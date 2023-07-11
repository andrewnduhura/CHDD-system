-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 22, 2023 at 03:43 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chd`
--

-- --------------------------------------------------------

--
-- Table structure for table `diagnoses`
--

CREATE TABLE `diagnoses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `result` int(11) NOT NULL,
  `alcohol_drinking` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smoking` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stroke` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diff_walking` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` enum('male','female') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_category` enum('80 or older','75-79','70-74','65-69','60-64','55-59','50-54','45-49','40-44','35-39','30-34','25-29','18-24') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diabetic` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gen_health` enum('Excellent','Very good','good','fair','poor') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asthma` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kidney_disease` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skin_cancer` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bmi` int(11) DEFAULT NULL,
  `physical_health` int(11) DEFAULT NULL,
  `mental_health` int(11) DEFAULT NULL,
  `physical_activity` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sleep_time` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diagnoses`
--

INSERT INTO `diagnoses` (`id`, `patient_id`, `doctor_id`, `result`, `alcohol_drinking`, `smoking`, `stroke`, `diff_walking`, `sex`, `age_category`, `diabetic`, `gen_health`, `asthma`, `kidney_disease`, `skin_cancer`, `bmi`, `physical_health`, `mental_health`, `physical_activity`, `sleep_time`, `created_at`, `updated_at`) VALUES
(1, 19, 1, 0, 'no', 'yes', 'no', 'no', 'female', NULL, 'yes', 'Very good', 'yes', 'no', 'yes', 17, 3, 3, 'yes', 5, '2023-05-22 11:33:21', '2023-05-22 11:33:21'),
(2, 20, 1, 0, 'no', 'yes', 'no', 'no', 'female', NULL, 'yes', 'Very good', 'yes', 'no', 'yes', 17, 3, 3, 'yes', 5, '2023-05-22 11:38:12', '2023-05-22 11:38:12'),
(3, 21, 1, 0, 'no', 'yes', 'no', 'no', 'female', NULL, 'yes', 'Very good', 'yes', 'no', 'yes', 17, 3, 3, 'yes', 5, '2023-05-27 03:51:55', '2023-05-27 03:51:55'),
(4, 24, 1, 0, 'yes', 'yes', 'yes', 'yes', 'male', NULL, 'yes', 'Excellent', 'yes', 'yes', 'yes', 23, 3, 6, 'yes', 5, '2023-05-27 04:52:28', '2023-05-27 04:52:28'),
(5, 25, 1, 0, 'yes', 'yes', 'yes', 'yes', 'male', NULL, 'yes', 'Excellent', 'yes', 'yes', 'yes', 23, 3, 6, 'yes', 5, '2023-05-27 05:00:28', '2023-05-27 05:00:28'),
(6, 26, 1, 0, 'no', 'yes', 'no', 'no', 'female', NULL, 'yes', 'Very good', 'yes', 'no', 'yes', 17, 3, 3, 'yes', 5, '2023-05-29 12:33:47', '2023-05-29 12:33:47'),
(7, 27, 1, 1, 'yes', 'yes', 'yes', 'yes', 'male', NULL, 'yes', 'Excellent', 'yes', 'yes', 'yes', 1, 1, 1, 'yes', 1, '2023-06-22 07:51:06', '2023-06-22 07:51:06'),
(8, 31, 1, 1, 'no', 'no', 'no', 'no', 'male', NULL, 'no', 'poor', 'no', 'no', 'no', 5, 3, 3, 'yes', 2, '2023-06-22 08:17:54', '2023-06-22 08:17:54'),
(9, 32, 1, 1, 'yes', 'yes', 'yes', 'yes', 'male', '18-24', 'yes', 'Excellent', 'yes', 'yes', 'yes', 2, 1, 1, 'yes', 1, '2023-06-22 08:25:18', '2023-06-22 08:25:18'),
(10, 33, 1, 1, 'no', 'yes', 'yes', 'yes', 'male', '75-79', 'yes', 'poor', 'yes', 'yes', 'yes', 19, 3, 3, 'yes', 3, '2023-06-22 08:34:50', '2023-06-22 08:34:50'),
(11, 34, 1, 1, 'yes', 'yes', 'yes', 'yes', 'male', '18-24', 'yes', 'Excellent', 'yes', 'yes', 'yes', 1, 1, 1, 'yes', 1, '2023-06-22 09:44:05', '2023-06-22 09:44:05'),
(12, 35, 1, 1, 'yes', 'yes', 'yes', 'yes', 'male', '18-24', 'yes', 'Excellent', 'yes', 'yes', 'yes', 1, 1, 1, 'yes', 1, '2023-06-22 09:53:08', '2023-06-22 09:53:08'),
(13, 38, 1, 1, 'yes', 'yes', 'yes', 'yes', 'male', '18-24', 'yes', 'Excellent', 'yes', 'yes', 'yes', 33, 1, 1, 'yes', 6, '2023-06-22 10:02:44', '2023-06-22 10:02:44'),
(14, 39, 1, 1, 'yes', 'yes', 'yes', 'yes', 'male', '18-24', 'yes', 'Excellent', 'yes', 'yes', 'yes', 2, 1, 1, 'yes', 1, '2023-06-22 10:20:19', '2023-06-22 10:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `districts_1`
--

CREATE TABLE `districts_1` (
  `id` varchar(3) DEFAULT NULL,
  `name` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `districts_1`
--

INSERT INTO `districts_1` (`id`, `name`) VALUES
('id', 'District'),
('1', 'Abim'),
('2', 'Adjumani'),
('3', 'Agago'),
('4', 'Alebtong'),
('5', 'Amolatar'),
('6', 'Amudat'),
('7', 'Amuria'),
('8', 'Amuru'),
('9', 'Apac'),
('10', 'Arua'),
('11', 'Budaka'),
('12', 'Bududa'),
('13', 'Bugiri'),
('14', 'Bugweri'),
('15', 'Buhweju'),
('16', 'Buikwe'),
('17', 'Bukedea'),
('18', 'Bukomansimbi'),
('19', 'Bukwo'),
('20', 'Bulambuli'),
('21', 'Buliisa'),
('22', 'Bundibugyo'),
('23', 'Bunyangabu'),
('24', 'Busia'),
('25', 'Butaleja'),
('26', 'Butambala'),
('27', 'Butebo'),
('28', 'Buvuma'),
('29', 'Buyende'),
('30', 'Dokolo'),
('31', 'Gomba'),
('32', 'Gulu'),
('33', 'Hoima'),
('34', 'Ibanda'),
('35', 'Iganga'),
('36', 'Isingiro'),
('37', 'Jinja'),
('38', 'Kaabong'),
('39', 'Kabale'),
('40', 'Kabarole'),
('41', 'Kaberamaido'),
('42', 'Kagadi'),
('43', 'Kakumiro'),
('44', 'Kalaki'),
('45', 'Kalangala'),
('46', 'Kaliro'),
('47', 'Kalungu'),
('48', 'Kampala'),
('49', 'Kamuli'),
('50', 'Kamwenge'),
('51', 'Kanungu'),
('52', 'Kapchorwa'),
('53', 'Kasanda'),
('54', 'Kasese'),
('55', 'Katakwi'),
('56', 'Kayunga'),
('57', 'Kazo'),
('58', 'Kibaale'),
('59', 'Kiboga'),
('60', 'Kibuku'),
('61', 'Kikuube'),
('62', 'Kiruhura'),
('63', 'Kiryandongo'),
('64', 'Kisoro'),
('65', 'Kitagwenda'),
('66', 'Kitgum'),
('67', 'Koboko'),
('68', 'Kole'),
('69', 'Kotido'),
('70', 'Kumi'),
('71', 'Kwania'),
('72', 'Kween'),
('73', 'Kyankwanzi'),
('74', 'Kyegegwa'),
('75', 'Kyenjojo'),
('76', 'Kyotera'),
('77', 'Lamwo'),
('78', 'Lira'),
('79', 'Luuka'),
('80', 'Luwero'),
('81', 'Lwengo'),
('82', 'Lyantonde'),
('83', 'Manafwa'),
('84', 'Maracha'),
('85', 'Masaka'),
('86', 'Masindi'),
('87', 'Mayuge'),
('88', 'Mbale'),
('89', 'Mbarara'),
('90', 'Mitooma'),
('91', 'Mityana'),
('92', 'Moroto'),
('93', 'Moyo'),
('94', 'Mpigi'),
('95', 'Mubende'),
('96', 'Mukono'),
('97', 'Nabilatuk'),
('98', 'Nakapiripirit'),
('99', 'Nakaseke'),
('100', 'Nakasongola'),
('101', 'Namayingo'),
('102', 'Namisindwa'),
('103', 'Namutumba'),
('104', 'Napak'),
('105', 'Nebbi'),
('106', 'Ngora'),
('107', 'Ntoroko'),
('108', 'Ntungamo'),
('109', 'Nwoya'),
('110', 'Omoro'),
('111', 'Otuke'),
('112', 'Oyam'),
('113', 'Pader'),
('114', 'Pakwach'),
('115', 'Pallisa'),
('116', 'Rakai'),
('117', 'Rubanda'),
('118', 'Rubirizi'),
('119', 'Rukiga'),
('120', 'Rukungiri'),
('121', 'Rwampara'),
('122', 'Sembabule'),
('123', 'Serere'),
('124', 'Sheema'),
('125', 'Sironko'),
('126', 'Soroti'),
('127', 'Tororo'),
('128', 'Wakiso'),
('129', 'Yumbe'),
('130', 'Zombo');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone_number`) VALUES
(1, 'nduhura', NULL, NULL, '$2y$10$dNLh8ZCwagWurdWamBDinOTDpKo8fWbruWT6xorl6ZPDdijbQYqrm', NULL, '2023-04-13 09:27:11', '2023-04-13 09:27:11', '0778596108'),
(2, 'dfgh', NULL, NULL, '$2y$10$uw2bWJpBSCFywX8cS51Iq.VgHArHdLROSjwEWtjfw6x/AAf9Plmim', NULL, '2023-04-13 10:03:27', '2023-04-13 10:03:27', '0778596109');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_doctors_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_13_112447_add_phone_number_to_doctors_table', 1),
(6, '2014_10_12_000000_create_users_table', 2),
(7, '2023_05_22_100304_create_districts_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `phone_number`, `address`, `district_id`, `created_at`, `updated_at`) VALUES
(1, 'rutungu', '0778596100', 'Ntoroko', 2, '2023-05-22 10:14:10', '2023-05-22 10:14:10'),
(2, 'dfgh', '0778596100', 'Ntoroko', 58, '2023-05-22 10:41:17', '2023-05-22 10:41:17'),
(3, 'dfgh', '0778596100', 'Ntoroko', 58, '2023-05-22 11:11:07', '2023-05-22 11:11:07'),
(4, 'dfgh', '0778596100', 'Ntoroko', 58, '2023-05-22 11:17:26', '2023-05-22 11:17:26'),
(5, 'dfgh', '0778596100', 'Ntoroko', 58, '2023-05-22 11:18:09', '2023-05-22 11:18:09'),
(6, 'dfgh', '0778596100', 'Ntoroko', 58, '2023-05-22 11:18:42', '2023-05-22 11:18:42'),
(7, 'dfgh', '0778596100', 'Ntoroko', 58, '2023-05-22 11:19:03', '2023-05-22 11:19:03'),
(8, 'dfgh', '0778596100', 'Ntoroko', 58, '2023-05-22 11:19:17', '2023-05-22 11:19:17'),
(9, 'dfgh', '0778596100', 'Ntoroko', 58, '2023-05-22 11:20:40', '2023-05-22 11:20:40'),
(10, 'dfgh', '0778596100', 'Ntoroko', 58, '2023-05-22 11:22:03', '2023-05-22 11:22:03'),
(11, 'dfgh', '0778596100', 'Ntoroko', 58, '2023-05-22 11:23:01', '2023-05-22 11:23:01'),
(12, 'dfgh', '0778596100', 'Ntoroko', 58, '2023-05-22 11:24:36', '2023-05-22 11:24:36'),
(13, 'dfgh', '0778596100', 'Ntoroko', 58, '2023-05-22 11:25:27', '2023-05-22 11:25:27'),
(14, 'dfgh', '0778596100', 'Ntoroko', 58, '2023-05-22 11:25:53', '2023-05-22 11:25:53'),
(15, 'dfgh', '0778596100', 'Ntoroko', 58, '2023-05-22 11:27:09', '2023-05-22 11:27:09'),
(16, 'dfgh', '0778596100', 'Ntoroko', 58, '2023-05-22 11:27:37', '2023-05-22 11:27:37'),
(17, 'dfgh', '0778596100', 'Ntoroko', 58, '2023-05-22 11:28:11', '2023-05-22 11:28:11'),
(18, 'dfgh', '0778596100', 'Ntoroko', 58, '2023-05-22 11:30:19', '2023-05-22 11:30:19'),
(19, 'dfgh', '0778596100', 'Ntoroko', 58, '2023-05-22 11:33:21', '2023-05-22 11:33:21'),
(20, 'rutungu', '0778596108', 'kazo', 62, '2023-05-22 11:38:12', '2023-05-22 11:38:12'),
(21, 'nduhura', '0778596108', 'kazo', 6, '2023-05-27 03:51:55', '2023-05-27 03:51:55'),
(22, 'jona', '0778596109', 'kazo', 85, '2023-05-27 04:10:32', '2023-05-27 04:10:32'),
(23, 'jona', '0778596109', 'Ntoroko', 5, '2023-05-27 04:48:33', '2023-05-27 04:48:33'),
(24, 'jona', '0778596108', 'kazo', 5, '2023-05-27 04:52:28', '2023-05-27 04:52:28'),
(25, 'sanchez', '0778596100', 'Ntoroko', 4, '2023-05-27 05:00:28', '2023-05-27 05:00:28'),
(26, 'taa', '0778596108', 'Ntoroko', 11, '2023-05-29 12:33:47', '2023-05-29 12:33:47'),
(27, 'rutungu', '0778596188', 'Ntoroko', 2, '2023-06-22 07:51:06', '2023-06-22 07:51:06'),
(28, 'zagadat', '0778596188', 'kazo', 4, '2023-06-22 07:54:13', '2023-06-22 07:54:13'),
(29, 'zagadat', '0778596188', 'kazo', 4, '2023-06-22 07:57:30', '2023-06-22 07:57:30'),
(30, 'now works', '0778596199', 'kkk', 7, '2023-06-22 08:06:58', '2023-06-22 08:06:58'),
(31, 'finally', '0778596200', 'dfgbn', 5, '2023-06-22 08:17:54', '2023-06-22 08:17:54'),
(32, 'plus age', '1234567879', 'dfgh', 1, '2023-06-22 08:25:18', '2023-06-22 08:25:18'),
(33, 'we are done', '0778597777', 'kazo', 5, '2023-06-22 08:34:50', '2023-06-22 08:34:50'),
(34, 'trial', '0778596139', 'jvjvj', 9, '2023-06-22 09:44:05', '2023-06-22 09:44:05'),
(35, 'jona pon deck', '0777777777', 'dfgbndc', 11, '2023-06-22 09:53:08', '2023-06-22 09:53:08'),
(36, 'jona pon deck', '0777777777', 'dfgbndc', 11, '2023-06-22 09:58:52', '2023-06-22 09:58:52'),
(37, 'rutungu here', '0777777788', 'dfgbndc', 18, '2023-06-22 09:59:26', '2023-06-22 09:59:26'),
(38, 'rutungu again', '0778596188', 'dfgbn', 62, '2023-06-22 10:02:44', '2023-06-22 10:02:44'),
(39, 'ruuuu', '0788888888', 'gccg', 13, '2023-06-22 10:20:19', '2023-06-22 10:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nduhura', 'trizzyandy2x@gmail.com', NULL, '$2y$10$IRTt2Z8umD.sFnod8GdYaOT1aQ7k1J6kp6uOzf7.DqByzU96AAeL2', NULL, '2023-05-21 06:08:10', '2023-05-21 06:08:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diagnoses`
--
ALTER TABLE `diagnoses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doctors_email_unique` (`email`),
  ADD UNIQUE KEY `doctors_phone_number_unique` (`phone_number`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diagnoses`
--
ALTER TABLE `diagnoses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
