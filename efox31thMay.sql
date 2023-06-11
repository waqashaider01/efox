-- phpMyAdmin SQL Dump
-- version 5.2.1-dev+20220530.b4b27cf9b5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2022 at 04:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `efox`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `aboutus_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `aboutus_content`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(3, '<div>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div><img src=\"https://picsum.photos/id/1/200/300\" alt=\"About us image...\" width=\"200\" height=\"300\"></div>', 'Here is title update', 'Here is description update', 'OcmbmWKJWY', '2022-05-26 05:59:58', '2022-05-28 08:58:30');

-- --------------------------------------------------------

--
-- Table structure for table `auction_settings`
--

CREATE TABLE `auction_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `enable_status` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration_options` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration_days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `change_duration_status` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `edit_schedule_status` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_auto_relists` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `snper_protection_seconds` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reserve_status` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `quick_bid_status` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `auto_bid_status` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `bid_confirm_status` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auction_settings`
--

INSERT INTO `auction_settings` (`id`, `enable_status`, `duration_options`, `duration_days`, `change_duration_status`, `edit_schedule_status`, `max_auto_relists`, `snper_protection_seconds`, `reserve_status`, `quick_bid_status`, `auto_bid_status`, `bid_confirm_status`, `created_at`, `updated_at`) VALUES
(1, 'on', '1', '[\"14\",\"21\"]', 'off', 'on', '15', '18', 'on', 'off', 'on', 'on', NULL, '2022-05-31 07:51:13');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adsence_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_slot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valid_until` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_name`, `banner_image`, `adsence_code`, `categories`, `banner_slot`, `paid_from`, `valid_until`, `created_at`, `updated_at`) VALUES
(4, 'Etjplem4yS', '1653576774_.jpg', '300', '[\"Cars\"]', '1', '2022-05-26', '2022-05-31', '2022-05-26 09:52:54', '2022-05-26 09:52:54'),
(5, '28Ftu1hfJc', '1653729573_.jpg', '<div><a href=\"\" class=\"btn primary-button\"><i class=\"fas fa-user-plus\" ></i>Create Banner</a></div>', '[\"Cars\",\"Toys\",\"Other\"]', '1', '2022-06-03', '2022-05-12', '2022-05-28 04:19:33', '2022-05-28 04:19:33');

-- --------------------------------------------------------

--
-- Table structure for table `bid_increments`
--

CREATE TABLE `bid_increments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prices` double(11,2) NOT NULL,
  `Increments` double(11,2) NOT NULL,
  `delete_status` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bid_increments`
--

INSERT INTO `bid_increments` (`id`, `prices`, `Increments`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 0.38, 0.87, 'yes', NULL, '2022-05-31 07:52:10');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `seo_title`, `seo_description`, `seo_keywords`, `created_at`, `updated_at`) VALUES
(1, 'Motors', 'motors title', 'description here..', 'IibG6o2kPG', '2022-05-21 08:16:06', '2022-05-21 08:16:06');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `seo_title`, `seo_description`, `seo_keywords`, `created_at`, `updated_at`) VALUES
(2, 'Lahore', 'Lahore title', 'Lahore  description', 'h4lrs8aAXK', '2022-05-20 05:49:19', '2022-05-20 05:49:19'),
(3, 'Islamabad', 'Lahore title', 'it is lahore description.', 'Xbap2Yln4c', '2022-05-20 06:00:08', '2022-05-20 06:00:08');

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
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `listing_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `listing_duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `starting_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reserve_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doors` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_style` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mileage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transmission` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seller_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_conditioned` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL,
  `registered` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suburb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_page_free` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_page_free_days` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_featured_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_featured_image_days` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_featured` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_featured_days` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homepage_slider_gallery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homepage_slider_gallery_days` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `user_id`, `category_id`, `subcategory_id`, `title`, `listing_type`, `listing_duration`, `price`, `start_date`, `start_time`, `quantity`, `starting_price`, `reserve_price`, `color`, `doors`, `body_style`, `mileage`, `year`, `condition`, `transmission`, `seller_type`, `air_conditioned`, `registered`, `description`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`, `image_7`, `image_8`, `image_9`, `image_10`, `city`, `suburb`, `name`, `shipping`, `payment_method`, `category_page_free`, `category_page_free_days`, `category_featured_image`, `category_featured_image_days`, `home_page_featured`, `home_page_featured_days`, `homepage_slider_gallery`, `homepage_slider_gallery_days`, `tag_status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Title here..', '0', '21', '5000', NULL, NULL, '5', NULL, NULL, NULL, NULL, NULL, 'hello this is for testing...', NULL, NULL, NULL, NULL, 'yes', 'no', 'This is description...', '1653572797_.jpg', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Islamabad', 'canada suburb', 'Admin', 'this is description.', 'this is description.', '1', '7', '2', '7', NULL, '7', '1', '7', '3', '2022-05-26 08:46:37', '2022-05-26 08:46:37'),
(2, 2, 1, 1, 'ipKLdxrY1E', '1', '14', '746889', NULL, NULL, '687091', NULL, NULL, NULL, NULL, NULL, '86EEsxS1f6', NULL, NULL, NULL, NULL, 'no', 'yes', 'gpK1zaXhWk', '1653573121_.png', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Islamabad', 'canada suburb', 'Admin', 'wZia81Dnqu', 'G6zzGgswGu', '1', '14', NULL, '14', NULL, '14', '4', '14', '6', '2022-05-26 08:52:01', '2022-05-26 08:52:01'),
(5, 5, 1, 1, 'ipKLdxrY1E', '1', '14', '746889', NULL, NULL, '687091', NULL, NULL, NULL, NULL, NULL, '86EEsxS1f6', NULL, NULL, NULL, NULL, 'no', 'yes', 'gpK1zaXhWk', '1653573121_.png', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Islamabad', 'canada suburb', 'Admin', 'wZia81Dnqu', 'G6zzGgswGu', '1', '14', NULL, '14', NULL, '14', '4', '14', '6', '2022-05-26 08:52:01', '2022-05-26 08:52:01'),
(6, 5, 1, 1, 'ipKLdxrY1E', '0', '14', '746889', NULL, NULL, '687091', NULL, NULL, NULL, NULL, NULL, '86EEsxS1f6', NULL, NULL, NULL, NULL, 'no', 'yes', 'gpK1zaXhWk', '1653573121_.png', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Islamabad', 'canada suburb', 'Admin', 'wZia81Dnqu', 'G6zzGgswGu', '1', '14', NULL, '14', NULL, '14', '4', '14', '6', '2022-05-26 08:52:01', '2022-05-26 08:52:01'),
(7, 5, 1, 1, 'ipKLdxrY1E', '1', '14', '746889', NULL, NULL, '687091', NULL, NULL, NULL, NULL, NULL, '86EEsxS1f6', NULL, NULL, NULL, NULL, 'no', 'yes', 'gpK1zaXhWk', '1653573121_.png', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Islamabad', 'canada suburb', 'Admin', 'wZia81Dnqu', 'G6zzGgswGu', '1', '14', NULL, '14', NULL, '14', '4', '14', '6', '2022-05-26 08:52:01', '2022-05-26 08:52:01'),
(8, 5, 1, 1, 'ipKLdxrY1E', '0', '14', '746889', NULL, NULL, '687091', NULL, NULL, NULL, NULL, NULL, '86EEsxS1f6', NULL, NULL, NULL, NULL, 'no', 'yes', 'gpK1zaXhWk', '1653573121_.png', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Islamabad', 'canada suburb', 'Admin', 'wZia81Dnqu', 'G6zzGgswGu', '1', '14', NULL, '14', NULL, '14', '4', '14', '6', '2022-05-26 08:52:01', '2022-05-26 08:52:01'),
(9, 5, 1, 1, 'Title here..', '1', '21', '5000', NULL, NULL, '5', NULL, NULL, NULL, NULL, NULL, 'hello this is for testing...', NULL, NULL, NULL, NULL, 'yes', 'no', 'This is description...', '1653572797_.jpg', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Islamabad', 'canada suburb', 'Admin', 'this is description.', 'this is description.', '1', '7', '2', '7', NULL, '7', '1', '7', '3', '2022-05-26 08:46:37', '2022-05-26 08:46:37'),
(10, 5, 1, 1, 'Title here..', '1', '21', '5000', NULL, NULL, '5', NULL, NULL, NULL, NULL, NULL, 'hello this is for testing...', NULL, NULL, NULL, NULL, 'yes', 'no', 'This is description...', '1653572797_.jpg', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Islamabad', 'canada suburb', 'Admin', 'this is description.', 'this is description.', '1', '7', '2', '7', NULL, '7', '1', '7', '3', '2022-05-26 08:46:37', '2022-05-26 08:46:37'),
(11, 5, 1, 1, 'Title here..', '0', '21', '5000', NULL, NULL, '5', NULL, NULL, NULL, NULL, NULL, 'hello this is for testing...', NULL, NULL, NULL, NULL, 'yes', 'no', 'This is description...', '1653572797_.jpg', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Islamabad', 'canada suburb', 'Admin', 'this is description.', 'this is description.', '1', '7', '2', '7', NULL, '7', '1', '7', '3', '2022-05-26 08:46:37', '2022-05-26 08:46:37'),
(12, 5, 1, 1, 'Title here..', '1', '21', '5000', NULL, NULL, '5', NULL, NULL, NULL, NULL, NULL, 'hello this is for testing...', NULL, NULL, NULL, NULL, 'yes', 'no', 'This is description...', '1653572797_.jpg', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Islamabad', 'canada suburb', 'Admin', 'this is description.', 'this is description.', '1', '7', '2', '7', NULL, '7', '1', '7', '3', '2022-05-26 08:46:37', '2022-05-26 08:46:37');

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
(49, '2014_10_12_000000_create_users_table', 1),
(50, '2014_10_12_100000_create_password_resets_table', 1),
(51, '2019_08_19_000000_create_failed_jobs_table', 1),
(52, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(53, '2022_05_16_110739_create_banners_table', 1),
(54, '2022_05_16_143117_create_categories_table', 1),
(55, '2022_05_16_150937_create_sub_categories_table', 1),
(56, '2022_05_16_152551_create_cities_table', 1),
(57, '2022_05_16_153959_create_suburbs_table', 1),
(58, '2022_05_20_125317_create_sliders_table', 2),
(59, '2022_05_20_125327_create_sliders_table', 3),
(60, '2022_05_20_142008_create_slider_settings_table', 4),
(61, '2014_10_12_000011_create_users_table', 5),
(62, '2014_10_12_000012_create_users_table', 6),
(63, '2014_10_12_000013_create_users_table', 7),
(64, '2014_10_12_000014_create_users_table', 8),
(65, '2014_10_12_000015_create_users_table', 9),
(66, '2022_05_21_113512_create_aboutus_table', 10),
(67, '2022_05_21_121608_create_privacy_policies_table', 11),
(68, '2022_05_21_121607_create_privacy_policies_table', 12),
(69, '2022_05_21_125223_create_terms_table', 13),
(70, '2022_05_21_130828_create_sitefees_table', 14),
(71, '2014_10_12_000016_create_users_table', 15),
(72, '2014_10_12_000017_create_users_table', 16),
(73, '2022_05_24_084303_create_listings_table', 17),
(74, '2014_10_12_000018_create_users_table', 18),
(75, '2022_05_24_084304_create_listings_table', 19),
(76, '2022_05_24_084305_create_listings_table', 20),
(77, '2022_05_24_084306_create_listings_table', 21),
(78, '2022_05_24_084307_create_listings_table', 22),
(79, '2022_05_24_084308_create_listings_table', 23),
(80, '2022_05_24_084309_create_listings_table', 24),
(81, '2022_05_24_084319_create_listings_table', 25),
(82, '2022_05_24_084318_create_listings_table', 26),
(83, '2022_05_24_084329_create_listings_table', 27),
(84, '2022_05_21_113513_create_aboutus_table', 28),
(85, '2022_05_21_121617_create_privacy_policies_table', 28),
(86, '2022_05_21_125213_create_terms_table', 28),
(87, '2022_05_21_130818_create_sitefees_table', 28),
(88, '2022_05_21_125214_create_terms_table', 29),
(89, '2022_05_24_084229_create_listings_table', 30),
(90, '2022_05_24_084239_create_listings_table', 31),
(91, '2022_05_20_142018_create_slider_settings_table', 32),
(92, '2022_05_28_075934_create_auction_settings_table', 33),
(93, '2022_05_28_075924_create_auction_settings_table', 34),
(94, '2022_05_28_075923_create_auction_settings_table', 35),
(95, '2022_05_28_103349_create_bid_increments_table', 36),
(96, '2022_05_30_093523_create_user_management_table', 37),
(97, '2022_05_30_154238_create_special_prices_table', 37),
(98, '2022_05_31_093415_create_tags_table', 38);

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
-- Table structure for table `privacy_policies`
--

CREATE TABLE `privacy_policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `privacypolicy_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy_policies`
--

INSERT INTO `privacy_policies` (`id`, `privacypolicy_content`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(2, '<p>&nbsp;</p>\r\n<div>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div><strong><img src=\"https://picsum.photos/id/1/200/300\" alt=\"Privacy policy image.\" width=\"200\" height=\"300\"></strong></div>', 'Privacy policy title....', 'Privacy policy title....', 'Privacy policy title.', '2022-05-26 06:01:46', '2022-05-28 08:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `sitefees`
--

CREATE TABLE `sitefees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sitefees_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sitefees`
--

INSERT INTO `sitefees` (`id`, `sitefees_content`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(2, '<div>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div><img src=\"https://picsum.photos/id/1/200/300\" alt=\"Site Fees title.\" width=\"200\" height=\"300\"></div>', 'Site fees title... all sections can update', 'Site fess description....all sections can update', 'wFsyI91orF9', '2022-05-26 06:05:58', '2022-05-28 08:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_speed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_pause` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visible_status` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `autoplay_status` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `mousehover_status` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valid_until` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `city_id`, `price`, `slider_image`, `slider_speed`, `slider_pause`, `visible_status`, `autoplay_status`, `mousehover_status`, `start_from`, `valid_until`, `created_at`, `updated_at`) VALUES
(3, 3, '433429', '1653056154_.jpg', '300', '300', 'on', 'off', 'on', '2022-05-26', '2022-05-31', '2022-05-02 09:15:54', '2022-05-20 09:15:54'),
(4, 3, '433429', '1653056154_.jpg', '300', '300', 'on', 'off', 'on', '2022-05-26', '2022-05-31', '2022-05-04 09:15:54', '2022-05-20 09:15:54'),
(5, 3, '433429', '1653056154_.jpg', '300', '300', 'on', 'off', 'on', '2022-05-26', '2022-05-31', '2022-05-20 09:15:54', '2022-05-20 09:15:54');

-- --------------------------------------------------------

--
-- Table structure for table `slider_settings`
--

CREATE TABLE `slider_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_speed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_pause` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visible_status` enum('on','off') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `autoplay_status` enum('on','off') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mousehover_status` enum('on','off') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_settings`
--

INSERT INTO `slider_settings` (`id`, `slider_speed`, `slider_pause`, `visible_status`, `autoplay_status`, `mousehover_status`, `created_at`, `updated_at`) VALUES
(1, '300', '3000', 'on', 'off', 'on', NULL, '2022-05-31 07:48:49');

-- --------------------------------------------------------

--
-- Table structure for table `special_prices`
--

CREATE TABLE `special_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `period` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `special_prices`
--

INSERT INTO `special_prices` (`id`, `period`, `category`, `price`, `created_at`, `updated_at`) VALUES
(4, '30', '1', '10', '2022-05-30 11:16:29', '2022-05-30 11:16:29'),
(5, '60', '3', '3788', '2022-05-31 04:16:16', '2022-05-31 04:16:16'),
(6, '20', '4', '30', '2022-05-31 04:19:52', '2022-05-31 04:19:52'),
(7, '25', '4', '23', '2022-05-31 04:22:06', '2022-05-31 04:22:06');

-- --------------------------------------------------------

--
-- Table structure for table `suburbs`
--

CREATE TABLE `suburbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `suburb_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suburbs`
--

INSERT INTO `suburbs` (`id`, `city_id`, `suburb_name`, `seo_title`, `seo_description`, `seo_keywords`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lahore suburb', 'suburb title', 'it is a descripton', 'Xbap2Yln4c', '2022-05-20 05:34:16', '2022-05-20 05:34:16'),
(5, 4, 'canada suburb', 'tiltle here', 'description here...', 'OoXW5L4Fwa', '2022-05-21 08:54:02', '2022-05-21 08:54:02');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name`, `seo_title`, `seo_description`, `seo_keywords`, `created_at`, `updated_at`) VALUES
(1, 1, 'cars', 'motors title', 'description here...', 'yuZ7A08eXg', '2022-05-21 08:16:28', '2022-05-21 08:16:28');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ribbon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `ribbon`, `price`, `created_at`, `updated_at`) VALUES
(1, '3', '900', NULL, '2022-05-31 07:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `terms_condition_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `terms_condition_content`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(2, '<div>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div><img src=\"https://picsum.photos/id/1/200/300\" alt=\"terms &amp; condition image.\" width=\"200\" height=\"300\"></div>', 'terms & condition title....', 'terms & condition description...', 'nKDKxO8I5w4', '2022-05-26 06:04:05', '2022-05-28 08:30:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `suburb_id` bigint(20) UNSIGNED DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_as` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `verified_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `email_verified_at`, `phone`, `city_id`, `suburb_id`, `address`, `password`, `role_as`, `verified_status`, `ip`, `last_login_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mohsin', 'Mohsin', 'Nazeer', 'mohsin123@gmail.com', NULL, '0340934000', NULL, NULL, 'Layyah', '$2y$10$2RrwtSnAZPmzgP6SAMU/AO5/h9E2h0uYZW6RQd4KRO6djA8GNOv5O', '2', '1', '127.0.0.1', NULL, NULL, '2022-05-24 05:32:10', '2022-05-24 05:32:10'),
(2, 'abidmaher', 'Abid', 'Ali', 'mhrabid558@gmail.com', NULL, '0340934000', 2, 1, 'Islamabad', '$2y$10$EdsPS3sUXv3LBc8d6DEY8O4SzBfblzrnSuK0Pq09Ms9080ijivoei', '2', '1', '127.0.0.1', NULL, NULL, '2022-05-24 05:39:26', '2022-05-24 05:39:26'),
(3, '50farxv1jV', 'GCUTTioJcp', 'BRG78AuHBA', 'vo953@36qo.com', NULL, '425444', 2, NULL, 'uvlLfxYPrt', '$2y$10$HyAVL/JjMTSDnVJqJp.V3unXBh9p3GAavHMDGbLSCi1Yole9Ej8.6', '2', '0', '127.0.0.1', NULL, NULL, '2022-05-24 05:44:22', '2022-05-24 05:44:22'),
(4, 'munneb', 'Munneb', 'Khan', 'muneeb@gmail.com', NULL, '3789297892', 3, 1, 'layyah', '$2y$10$L93D9BbjilBP0VcJHX3SXOTXC.wTWXcuTfPnAwtdq/T3NQObHRBBS', '2', '1', '127.0.0.1', NULL, NULL, '2022-05-24 07:51:07', '2022-05-24 07:51:07'),
(5, 'admin', 'Admin', 'admin', 'admin@gmail.com', NULL, '0340934000', 3, 5, 'Islamabad', '$2y$10$cDLo5ByooEFnjLT4jiT3EekM.f6FY3SdqmZGPXNoI6KQXqv9rG7R6', '1', '0', '127.0.0.1', NULL, NULL, '2022-05-25 03:07:00', '2022-05-25 03:07:00'),
(7, 'Zgp0S9HtDj', 'TRmMAUF5QG', 'K7LWFWWC83', 'cg05o@chep.com', NULL, '541125', 2, 5, 'R11l94WHqX', '$2y$10$yKkclYrE5dHqNDpRCdgAnOgjgNSb0k8q20887c9nDZETpcpMCFRmS', '2', '0', '127.0.0.1', NULL, NULL, '2022-05-30 05:58:03', '2022-05-30 05:58:03'),
(8, 'oRCz8mayel', 'BXDeK81JAv', 'gD3Cmgf0rB', '5jj7x@yrre.com', NULL, '633195', 2, 5, '0dhsiVUXxl', '$2y$10$I9wCCUDZO17Exi7V2bB2Q.wM2QP6HB1YnKUnyxDxas/s77mC/N5Ke', '2', '0', '127.0.0.1', NULL, NULL, '2022-05-30 06:07:30', '2022-05-30 06:07:30'),
(9, 'lelQ4Xen5X', 'foMPX6xr6c', 'tDI10dji2S', 'iwqec@3hi9.com', NULL, '820503', 2, 5, 's5Y7IfK5j7', '$2y$10$EdtIP1a.6bw6rJ4NBD7/IeI2qefVlSVJhbsGH9Fsr3J9HPPnrp5PG', '2', '0', '127.0.0.1', NULL, NULL, '2022-05-30 06:08:54', '2022-05-30 06:08:54'),
(10, 'jByMCbc30j', 'SzSQ5fgmws', 'Fmlfb1fly9', 'ybogj@qv6a.com', NULL, '057759', 2, 5, 'mmo5Xvv9Ov', '$2y$10$yJ7yiOkCvw8JFzE6G4.s0O/g0m.Gpy5jkNsmiXhjExvUUy/wPeamK', '2', '0', '127.0.0.1', NULL, NULL, '2022-05-31 06:49:30', '2022-05-31 06:49:30'),
(11, 'ZtZYLGuVQw', 'udg1J6kDcF', '5GBNrGKUyS', 'amua5@5rp0.com', NULL, '853689', 2, 5, 'fgn7XHXzHg', '$2y$10$mWlE3SKwVjpfr.9Cfad2Mum9N/RVRfhkQAb4rt6y45RuPd4sIS77G', '2', '0', '127.0.0.1', NULL, NULL, '2022-05-31 07:30:54', '2022-05-31 07:30:54'),
(12, 'Gse9KUwK3e', 'W02m5n9e8f', 'ZJJJ2Pd06W', 'ypo52@opcq.com', NULL, '873486', 2, 5, 'x3JXrQDPWD', '$2y$10$7DJW.SBeWu7xuqpj44vno.TvU9Kee659C5NJOeGH2nudsiEhDYihe', '2', '0', '127.0.0.1', NULL, NULL, '2022-05-31 07:36:52', '2022-05-31 07:36:52'),
(13, 'R8LCX6CGNb', 'Lpv6eQYBB5', 'XcInLUewOM', 'htnfb@s5td.com', NULL, '192318', 2, 5, 'vb42mi1E3G', '$2y$10$s3sww2s9uNbxDlIfZa3eqe9s3Jswgk/BT8mj0gCAziotcpQEceKkG', '2', '0', '127.0.0.1', NULL, NULL, '2022-05-31 07:37:04', '2022-05-31 07:37:04'),
(14, 'h7CpucNngi', 'eSPWbmeybM', 'e0CBd7OhZh', 'tmkif@7ipp.com', NULL, '238143', 2, 5, 'UOrgzizwYP', '$2y$10$7eYoDcBqFCkBujeuhNEwHuL/3KKHz6kPE2fhuzM3qJPncRswZ9vLa', '2', '0', '127.0.0.1', NULL, NULL, '2022-05-31 07:45:14', '2022-05-31 07:45:14');

-- --------------------------------------------------------

--
-- Table structure for table `user_management`
--

CREATE TABLE `user_management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auction_settings`
--
ALTER TABLE `auction_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bid_increments`
--
ALTER TABLE `bid_increments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitefees`
--
ALTER TABLE `sitefees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_settings`
--
ALTER TABLE `slider_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special_prices`
--
ALTER TABLE `special_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suburbs`
--
ALTER TABLE `suburbs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_management`
--
ALTER TABLE `user_management`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `auction_settings`
--
ALTER TABLE `auction_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bid_increments`
--
ALTER TABLE `bid_increments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sitefees`
--
ALTER TABLE `sitefees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider_settings`
--
ALTER TABLE `slider_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `special_prices`
--
ALTER TABLE `special_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `suburbs`
--
ALTER TABLE `suburbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_management`
--
ALTER TABLE `user_management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
