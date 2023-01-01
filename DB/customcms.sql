-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 01:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_areas`
--

CREATE TABLE `activity_areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `category_id`, `title`, `slug`, `content`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'New Friends Everyday at Kiddie', '', 'The concept of the activity room is about \'Learning\', through play, in a totally different environment. The perfect class for your child with the best.', '1-1672557680.jpg', 1, '2023-01-01 01:21:20', '2023-01-01 01:23:51', NULL),
(2, 1, 1, 'Swimming Lessons at the New Pool', 'swimming-lessons-at-the-new-pool', 'The concept of the activity room is about \'Learning\', through play, in a totally different environment. The perfect class for your child with the best.', '2-1672557864.jpg', 1, '2023-01-01 01:24:24', '2023-01-01 01:24:24', NULL),
(3, 1, 1, 'Play is Our Brain’s Favorite Way of', 'play-is-our-brains-favorite-way-of', 'The concept of the activity room is about \'Learning\', through play, in a totally different environment. The perfect class for your child with the best.', '3-1672557897.jpg', 1, '2023-01-01 01:24:57', '2023-01-01 01:24:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_type` int(11) NOT NULL COMMENT 'Blog_category=1, Ptogallery_category=2',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `category_type`, `slug`, `desc`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Blog Category', 1, 'blog-category', 'Descrition', '1-1672557584.jpg', 1, '2023-01-01 01:19:44', '2023-01-01 04:32:46', NULL),
(3, 1, 'Drawing', 2, 'drawing', 'Drawing Gallery Image', '12-1672559127.jpg', 1, '2023-01-01 01:45:27', '2023-01-01 04:38:53', NULL),
(4, 1, 'Excursions', 2, 'excursions', 'Excursions Gallery Image', '17-1672559198.jpg', 1, '2023-01-01 01:46:38', '2023-01-01 04:38:35', NULL),
(5, 1, 'Courses', 2, 'play-time', 'Play Time Gallery Image', '4-1672559256.jpg', 1, '2023-01-01 01:47:37', '2023-01-01 04:37:22', NULL),
(6, 1, 'Play time', 2, 'courses', 'Courses', '9-1672569772.jpg', 1, '2023-01-01 04:42:52', '2023-01-01 04:42:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `possition` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_09_192111_create_pages_table', 1),
(6, '2022_12_09_192208_create_categories_table', 1),
(7, '2022_12_09_192221_create_tags_table', 1),
(8, '2022_12_09_192222_create_blogs_table', 1),
(9, '2022_12_09_192234_create_sliders_table', 1),
(10, '2022_12_09_192311_create_photo_galleries_table', 1),
(11, '2022_12_09_192329_create_video_galleries_table', 1),
(12, '2022_12_09_192344_create_portfolios_table', 1),
(13, '2022_12_09_192359_create_products_table', 1),
(14, '2022_12_09_192411_create_news_letters_table', 1),
(15, '2022_12_09_192425_create_notices_table', 1),
(16, '2022_12_09_192447_create_events_table', 1),
(17, '2022_12_09_192541_create_widgets_table', 1),
(18, '2022_12_09_192624_create_contents_table', 1),
(19, '2022_12_09_192655_create_menus_table', 1),
(20, '2022_12_09_192733_create_settings_table', 1),
(21, '2022_12_14_061910_create_product_event_galleries_table', 1),
(22, '2022_12_28_140327_create_our_classes_table', 1),
(23, '2022_12_28_180528_create_teachers_table', 1),
(24, '2022_12_20_055159_create_template1s_table', 2),
(25, '2023_01_01_043652_create_activity_areas_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `news_letters`
--

CREATE TABLE `news_letters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pub_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `our_classes`
--

CREATE TABLE `our_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age_range` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photo_galleries`
--

CREATE TABLE `photo_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photo_galleries`
--

INSERT INTO `photo_galleries` (`id`, `user_id`, `category_id`, `title`, `image`, `slug`, `desc`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 6, 'Play Time Gallery Image', '4-1672559328.jpg', 'play-time-gallery-image', 'Play Time Gallery Image', 1, '2023-01-01 01:48:48', '2023-01-01 01:48:48', NULL),
(2, 1, 6, 'Play Time Gallery Image 2', '2-1672559431.jpg', 'play-time-gallery-image-2', 'Play Time Gallery Image 2', 1, '2023-01-01 01:50:31', '2023-01-01 01:50:31', NULL),
(3, 1, 6, 'Play Time Gallery Image 3', '7-1672559458.jpg', 'play-time-gallery-image-3', 'Play Time Gallery Image 3', 1, '2023-01-01 01:50:58', '2023-01-01 01:50:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specification` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_event_galleries`
--

CREATE TABLE `product_event_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `reference_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `button_name`, `button_link`, `content`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'EDUCATION FOR KIDS', 'ENROLL YOUR CHILD', 'http://127.0.0.1:8000/slider', 'Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis justo\r\nat susp, vivamus orci urna.', '1-1672547705.jpg', 1, '2022-12-31 22:35:05', '2022-12-31 22:35:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hobbies` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `my_courses` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `projects` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `user_id`, `name`, `slug`, `subject`, `phone`, `email`, `skype`, `degree`, `experience`, `hobbies`, `my_courses`, `projects`, `description`, `social_link1`, `social_link2`, `social_link3`, `social_link4`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'GRAVES', 'graves', 'Professor, Harvard College', '+1 (000) 234 5670 | +0800 12345', 'admin@power-boosts.com', 'power-boosts', 'Spanish Literature Master', '5 Years in Preschool Education', 'Music, Dancing and Family', 'Paint Kiddie, Mini Kiddie', 'Map Creation', 'He works in partnership with clients, advising them how to use information technology in order to meet their business objectives or overcome problems. Lorem ipsum dolor sit amet, consectetur adipiscing elites. Nulla convallis egestas rhoncusa. Donec lorem facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam Proin vestibulum leo eget erat congue interdum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elites. Nulla convallis egestas rhoncusa. Donec lorem facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam Proin vestibulum leo eget erat congue interdum. Nulla convallis egestas rhoncusa. Donec lorem facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam Proin vestibulum leo eget erat congue interdum.', 'www.google.com', 'www.google.com', 'www.google.com', 'www.google.com', '7-1672481850.jpg', 1, '2022-12-31 04:17:30', '2022-12-31 04:17:30');

-- --------------------------------------------------------

--
-- Table structure for table `template1s`
--

CREATE TABLE `template1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `template1s`
--

INSERT INTO `template1s` (`id`, `user_id`, `title`, `slug`, `content`, `thumb`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Education', 'education', 'Well come to Techedu come with us, we also teach children about the basic values of human beings as honesty, kindness, generosity, courage, freedom, equality and respect. Learn to celebrate diversity in a spirit of understanding and tolerance and develop a positive regard and awareness of other people. They are taught the values and responsibilities needed to become active members of the community, tolerance and develop something which the modern world is desperate for norem ipsum dolor sit amet desperate.', 'education-1672475848.PNG', 1, '2022-12-31 02:37:28', '2022-12-31 05:23:07', NULL),
(2, 1, 'Ecommerce', 'ecommerce', 'Well come to Techedu come with us, we also teach children about the basic values of human beings as honesty, kindness, generosity, courage, freedom, equality and respect. Learn to celebrate diversity in a spirit of understanding and tolerance and develop a positive regard and awareness of other people.', 'ecomerce-1672476040.PNG', 0, '2022-12-31 02:40:40', '2022-12-31 05:22:58', NULL),
(3, 1, 'IT', 'it', 'Well come to Techedu come with us, we also teach children about the basic values of human beings as honesty, kindness, generosity, courage, freedom, equality and respect. Learn to celebrate diversity in a spirit of understanding and tolerance and develop a positive regard and awareness of other people.', 'it-1672476152.PNG', 0, '2022-12-31 02:42:32', '2022-12-31 04:33:23', NULL);

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
(1, 'Ahan Ahmed', 'admin@gmail.com', NULL, '$2y$10$UkVjBnTkasQdmz3MICMW8emcUJcgUw./bexkbiB1vhRfnMoaLYJvS', NULL, '2022-12-30 22:59:06', '2022-12-30 22:59:06'),
(2, 'Nayez', 'nayez@gmail.com', NULL, '$2y$10$j.xHy79HWdgZunZekEOWCuTQ8BjpzO46DGH6GRDugA3QnhrSFMUz.', NULL, '2022-12-31 01:29:57', '2022-12-31 01:29:57'),
(3, 'Washeal', 'washeal@gmail.com', NULL, '$2y$10$OUlLk1DmeSZQC9I6r3WcQ.tqsUuOTrBEyfc8uuuhDy0epMf7P4FjC', NULL, '2022-12-31 02:10:55', '2022-12-31 02:10:55'),
(4, 'Saiful', 'saiful@gmail.com', NULL, '$2y$10$E6f9SLIJjbed203L0.wbmOAL5zYVgusQsHw12eC52cVsmrdSQ6r8q', NULL, '2022-12-31 02:13:23', '2022-12-31 02:13:23');

-- --------------------------------------------------------

--
-- Table structure for table `video_galleries`
--

CREATE TABLE `video_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL DEFAULT 1 COMMENT 'Youtube=1, Vimeo=0',
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE `widgets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `widgets`
--

INSERT INTO `widgets` (`id`, `user_id`, `title`, `slug`, `content`, `position`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'activity-area', 'activity-area', '<div class=\"container\">\r\n            <div class=\"row\">\r\n                <div class=\"col-lg-3 col-md-6 col-sm-6 activity\">\r\n                    <div class=\"single-activity\">\r\n                        <div class=\"single-activity-icon\">\r\n                            <i class=\"fa fa-gamepad\"></i>\r\n                        </div>\r\n                        <h4>Funny Games</h4>\r\n                        <p>Fusce pretium, est at aliquam semper, leo ante facilisis risus in feugiat ipsum augue pellent esque metu.</p>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-lg-3 col-md-6 col-sm-6 activity\">\r\n                    <div class=\"single-activity\">\r\n                        <div class=\"single-activity-icon\">\r\n                            <i class=\"fa fa-fort-awesome\"></i>\r\n                        </div>\r\n                        <h4>Toys</h4>\r\n                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s</p>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-lg-3 col-md-6 col-sm-6 activity\">\r\n                    <div class=\"single-activity mrg-res-top-md\">\r\n                        <div class=\"single-activity-icon\">\r\n                            <i class=\"fa fa-futbol-o\"></i>\r\n                        </div>\r\n                        <h4>Activities</h4>\r\n                        <p>It was popularised in the 1960s with the release of Letraset sheets release containing Lorem Ipsum passages</p>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-lg-3 col-md-6 col-sm-6 activity\">\r\n                    <div class=\"single-activity mrg-res-top-md\">\r\n                        <div class=\"single-activity-icon\">\r\n                            <i class=\"fa fa-pencil\"></i>\r\n                        </div>\r\n                        <h4>Education</h4>\r\n                        <p>It is a long established fact that a reader will be distracted by the readable content of a page looking at layout</p>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>', 1, 1, '2022-12-31 23:27:26', '2022-12-31 23:27:26', NULL),
(2, 1, 'advertise-area', 'advertise-area', '<div class=\"container\">\r\n            <div class=\"row\">\r\n                <div class=\"col-md-12\">\r\n                    <h2>How to <span>Enroll Your Child</span> to a <span>Class</span>?</h2>\r\n                    <a href=\"#\">Join Us</a>\r\n                </div>\r\n            </div>\r\n        </div>', 2, 1, '2022-12-31 23:42:13', '2022-12-31 23:42:13', NULL),
(3, 1, 'service-area', 'service-area', '<div class=\"container\">\r\n            <div class=\"row\">\r\n                <div class=\"col-md-12\">\r\n                    <div class=\"section-title-wrapper\">\r\n                        <div class=\"section-title\">\r\n                            <h3>Our Services</h3>\r\n                            <p>Our best services for your kids</p>\r\n                        </div>\r\n                    </div> \r\n                </div>\r\n            </div>\r\n            <div class=\"row\">\r\n                <div class=\"col-lg-4 col-md-4 col-12\">\r\n                    <div class=\"single-service-item-wrapper\">\r\n                        <div class=\"single-service-item\">\r\n                            <div class=\"single-service-text\">\r\n                                <h4>Meals Provided</h4>\r\n                                <p>Lorem ipsum dolor sit amet cotetur adipisicing elit, sed do mod tempor incididunt ut labore etdolore.</p>\r\n                            </div>\r\n                            <div class=\"single-service-icon\">\r\n                                <i class=\"fa fa-cutlery\"></i>\r\n                            </div>\r\n                        </div>\r\n                        <div class=\"single-service-item\">\r\n                            <div class=\"single-service-text\">\r\n                                <h4>Language Lessons</h4>\r\n                                <p>Quidem laudantium itaque reiciendis inventore. Nobis dolorem, odit ipsam ratione minus quisquam iste.</p>\r\n                            </div>\r\n                            <div class=\"single-service-icon\">\r\n                                <i class=\"fa fa-language\"></i>\r\n                            </div>\r\n                        </div>\r\n                        <div class=\"single-service-item\">\r\n                            <div class=\"single-service-text\">\r\n                                <h4>Transportation</h4>\r\n                                <p>Amet voluptate, aperiam praesentium voluptas eveniet dignissimos nisi commodi, illum fuga sapiente?</p>\r\n                            </div>\r\n                            <div class=\"single-service-icon\">\r\n                                <i class=\"fa fa-bus\"></i>\r\n                            </div>\r\n                        </div>\r\n                    </div>    \r\n                </div>\r\n                <div class=\"col-lg-4 col-md-4 col-12\">\r\n                    <div class=\"service-image\">\r\n                        <img src=\"/frontent-template1/img/banner/2.jpg\" alt=\"\">\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-lg-4 col-md-4 col-12\">\r\n                    <div class=\"single-service-item-wrapper\">\r\n                        <div class=\"single-service-item\">\r\n                            <div class=\"single-service-icon\">\r\n                                <i class=\"fa fa-calendar-check-o\"></i>\r\n                            </div>\r\n                            <div class=\"single-service-text\">\r\n                                <h4>Full Day Session</h4>\r\n                                <p>Quibusdam harum est praesentium illo ad expedita nihil optio repellat, fugiat obcaecati is sunt.</p>\r\n                            </div>\r\n                        </div>\r\n                        <div class=\"single-service-item\">\r\n                            <div class=\"single-service-icon\">\r\n                                <i class=\"fa fa-bookmark\"></i>\r\n                            </div>\r\n                            <div class=\"single-service-text\">\r\n                                <h4>Special Education</h4>\r\n                                <p>voluptatem, cupiditate eveniet dolores inventore delectus vel eius molestias tho minus, corporis.</p>\r\n                            </div>\r\n                        </div>\r\n                        <div class=\"single-service-item\">\r\n                            <div class=\"single-service-icon\">\r\n                                <i class=\"fa fa-graduation-cap\"></i>\r\n                            </div>\r\n                            <div class=\"single-service-text\">\r\n                                <h4>Special Education</h4>\r\n                                <p>Et, itaque adipisci blanditiis eaque inventore tempore cum commodi, dicta quisquam similique magnam</p>\r\n                            </div>\r\n                        </div>\r\n                    </div> \r\n                </div>\r\n            </div>\r\n        </div>', 3, 1, '2022-12-31 23:45:36', '2023-01-01 02:22:04', NULL),
(4, 1, 'about-area', 'about-area', '<div class=\"container\">\r\n            <div class=\"row\">\r\n                <div class=\"col-md-12\">\r\n                    <div class=\"section-title-wrapper\">\r\n                        <div class=\"section-title\">\r\n                            <h3>Who we are</h3>\r\n                            <p>Fable daycare, preschool, and kindergarten</p>\r\n                        </div>\r\n                    </div> \r\n                </div>       \r\n            </div>\r\n            <div class=\"row\">\r\n                <div class=\"col-lg-6\">\r\n                    <div class=\"about-text-container\">\r\n                        <p><span>Well come to Techedu</span> come with us, we also teach children about the basic values of human beings as honesty, kindness, generosity, courage, freedom, equality and respect. Learn to celebrate diversity in a spirit of understanding and tolerance and develop a positive regard and awareness of other people. They are taught the values and responsibilities needed to become active members of the community, tolerance and develop something which the modern world is desperate for norem ipsum dolor sit amet desperate.<br>\r\n                        Adipiscing signiferumque vix et. No alii docendi usu, pri graeco possim percipit ne.</p>\r\n                        <div class=\"about-us\">\r\n                            <span>Nam gravida magna vitae ante dignissim</span>\r\n                            <span>Duis rhoncus lectus at velit hendrerit quis</span>\r\n                            <span>Sed fringilla tempor arcu feugiat risus</span>\r\n                            <span>Vivamus semper odio in nibh ultricies</span>\r\n                        </div>    \r\n                        <p>Snos trud exerci tation ullorper suscipit lobo maeisrn roester maeoirqs iserrtis nisl ut aliq poerwse thesr oper balinp asein hoinws mawsoib equat. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more tolerance and develop obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through makin of the word in classical literature.</p>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-lg-6\">\r\n                    <div class=\"skill-image\">\r\n                        <img src=\"/frontent-template1/img/banner/7.jpg\" alt=\"\">\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>', 4, 1, '2022-12-31 23:59:05', '2023-01-01 02:16:30', NULL),
(5, 1, 'newsletter-area', 'newsletter-area', '<div class=\"container\">\r\n            <div class=\"row\">\r\n                <div class=\"col-lg-12\">\r\n                    <form class=\"newsletter-container\">\r\n                        <div class=\"row\">\r\n                            <div class=\"col-lg-3 col-md-4 col-sm-12\">\r\n                                <h4>You want to know more <br>\r\n                                infomation? send us a mail!</h4>\r\n                            </div>\r\n                            <div class=\"col-lg-3 col-md-4 col-sm-6\">\r\n                                <input type=\"text\" name=\"subject\" placeholder=\"Subject*\">\r\n                                <input type=\"text\" name=\"name\" placeholder=\"Your Name*\">\r\n                                <input type=\"email\" name=\"email\" placeholder=\"Your Email*\">\r\n                            </div>\r\n                            <div class=\"col-lg-6 col-md-4 col-sm-6\">\r\n                                <textarea name=\"message\" id=\"newsletter-msg\" placeholder=\"Your Message\"></textarea>\r\n                                <button class=\"button-default\">Send</button>\r\n                            </div>\r\n                        </div>\r\n                    </form>\r\n                </div>\r\n            </div>\r\n        </div>', 5, 1, '2023-01-01 01:28:27', '2023-01-01 01:28:27', NULL),
(6, 1, 'footer-area', 'footer-area', '<div class=\"container\">\r\n            <div class=\"row\">\r\n                <div class=\"col-lg-12\">\r\n                    <div class=\"footer-info-container text-center section-padding\">\r\n                        <div class=\"footer-logo\">\r\n                            <a href=\"#\"><img src=\"{{asset(\'frontent-template1\')}}/img/logo/footer-logo.png\" alt=\"\"></a>\r\n                        </div>\r\n                        <div class=\"footer-info\">\r\n                            <span><i class=\"fa fa-map-marker\"></i>1st Floor New World Tower Miami</span>\r\n                            <span><i class=\"fa fa-envelope\"></i>admin@power-boosts.com</span>\r\n                            <span><i class=\"fa fa-phone\"></i>(801) 2345 - 6789</span>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <div class=\"footer-widget-container section-padding\">\r\n                <div class=\"row\">\r\n                    <div class=\"col-lg-2 col-md-2 col-sm-4\">\r\n                        <div class=\"single-footer-widget\">\r\n                            <h4>Our School</h4>\r\n                            <ul class=\"footer-widget-list\">\r\n                                <li><a href=\"#\">About Us</a></li>\r\n                                <li><a href=\"#\">Blog</a></li>\r\n                                <li><a href=\"#\">Contact</a></li>\r\n                                <li><a href=\"#\">Become a Teacher</a></li>\r\n                            </ul>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"col-lg-2 col-md-2 col-sm-4\">\r\n                        <div class=\"single-footer-widget\">\r\n                            <h4>Links</h4>\r\n                            <ul class=\"footer-widget-list\">\r\n                                <li><a href=\"#\">Courses</a></li>\r\n                                <li><a href=\"#\">Events</a></li>\r\n                                <li><a href=\"#\">Gallery</a></li>\r\n                                <li><a href=\"#\">FAQs</a></li>\r\n                            </ul>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"col-lg-2 col-md-2 col-sm-4\">\r\n                        <div class=\"single-footer-widget\">\r\n                            <h4>Support</h4>\r\n                            <ul class=\"footer-widget-list\">\r\n                                <li><a href=\"#\">Documentation</a></li>\r\n                                <li><a href=\"#\">Forums</a></li>\r\n                                <li><a href=\"#\">Language Packs</a></li>\r\n                                <li><a href=\"#\">Release Status</a></li>\r\n                            </ul>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"col-lg-6 col-md-6 col-sm-12\">\r\n                        <div class=\"subscribe-container\">\r\n                            <p>Subscribe now and receive weekly newsletter with educational materials, new courses, interesting posts, popular books and much more!</p>\r\n                            <form action=\"#\">\r\n                                <div class=\"subscribe-form\">\r\n                                    <input type=\"email\" name=\"email\" placeholder=\"Your email here\">\r\n                                    <button type=\"submit\"><i class=\"fa fa-send\"></i></button>\r\n                                </div>    \r\n                            </form>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <div class=\"row\">\r\n                <div class=\"col-lg-12\">\r\n                    <div class=\"footer-container\">\r\n                        <div class=\"row\">\r\n                            <div class=\"col-lg-6\">\r\n                                <span>&copy; 2021 <a href=\"#\">Power-Boosts</a>. All rights reserved</span>\r\n                            </div>\r\n                            <div class=\"col-lg-6\">\r\n                                <div class=\"social-links\">\r\n                                    <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>\r\n                                    <a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>\r\n                                    <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>\r\n                                    <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>\r\n                                    <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>\r\n                                </div>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>', 6, 1, '2023-01-01 01:30:54', '2023-01-01 01:30:54', NULL),
(7, 1, 'google-map-area', 'google-map-area', '<div id=\"contacts\" class=\"map-area\">\r\n            <div id=\"googleMap\" style=\"width:100%;height:451px;\"></div>\r\n</div>', 7, 1, '2023-01-01 01:34:43', '2023-01-01 01:34:43', NULL),
(8, 1, 'skill-and-experience-area', 'skill-and-experience-area', '<div class=\"container\">\r\n            <div class=\"row\">\r\n                <div class=\"col-md-12\">\r\n                    <div class=\"section-title-wrapper\">\r\n                        <div class=\"section-title\">\r\n                            <h3>Skills and Experience</h3>\r\n                            <p>Fable daycare, preschool, and kindergarten</p>\r\n                        </div>\r\n                    </div> \r\n                </div>       \r\n            </div>\r\n            <div class=\"row\">\r\n                <div class=\"col-lg-6\">\r\n                    <div class=\"experience-skill-wrapper\">\r\n                        <div class=\"skill-bars orange\">\r\n                            <div class=\"skill-bar-item\">\r\n                                <span>Playing Science</span>\r\n                                <div class=\"progress\">\r\n                                    <div class=\"progress-bar wow fadeInLeft\" data-progress=\"80%\" style=\"width: 80%;\" data-wow-duration=\"1.5s\" data-wow-delay=\"1.2s\">\r\n                                        <span class=\"text-top\">80%</span>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                            <div class=\"skill-bar-item\">\r\n                                <span>Arts And Craft</span>\r\n                                <div class=\"progress\">\r\n                                    <div class=\"progress-bar wow fadeInLeft\" data-progress=\"75%\" style=\"width: 75%;\" data-wow-duration=\"1.5s\" data-wow-delay=\"1.2s\">\r\n                                        <span class=\"text-top\">75%</span>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                            <div class=\"skill-bar-item\">\r\n                                <span>Creative Writing</span>\r\n                                <div class=\"progress\">\r\n                                    <div class=\"progress-bar wow fadeInLeft\" data-progress=\"90%\" style=\"width: 90%;\" data-wow-duration=\"1.5s\" data-wow-delay=\"1.2s\">\r\n                                        <span class=\"text-top\">90%</span>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                            <div class=\"skill-bar-item\">\r\n                                <span>English Lessons</span>\r\n                                <div class=\"progress\">\r\n                                    <div class=\"progress-bar wow fadeInLeft\" data-progress=\"70%\" style=\"width: 70%;\" data-wow-duration=\"1.5s\" data-wow-delay=\"1.2s\">\r\n                                        <span class=\"text-top\">70%</span>\r\n                                    </div>\r\n                                </div>\r\n                            </div>     \r\n                        </div>\r\n                    </div>    \r\n                </div>\r\n                <div class=\"col-lg-6\">\r\n                    <div class=\"experience-skill-wrapper\">\r\n                        <div class=\"skill-bars orange\">\r\n                            <div class=\"skill-bar-item\">\r\n                                <span>Arts And Craft</span>\r\n                                <div class=\"progress\">\r\n                                    <div class=\"progress-bar wow fadeInLeft\" data-progress=\"75%\" style=\"width: 75%;\" data-wow-duration=\"1.5s\" data-wow-delay=\"1.2s\">\r\n                                        <span class=\"text-top\">75%</span>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                            <div class=\"skill-bar-item\">\r\n                                <span>Creative Writing</span>\r\n                                <div class=\"progress\">\r\n                                    <div class=\"progress-bar wow fadeInLeft\" data-progress=\"90%\" style=\"width: 90%;\" data-wow-duration=\"1.5s\" data-wow-delay=\"1.2s\">\r\n                                        <span class=\"text-top\">90%</span>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                            <div class=\"skill-bar-item\">\r\n                                <span>Playing Science</span>\r\n                                <div class=\"progress\">\r\n                                    <div class=\"progress-bar wow fadeInLeft\" data-progress=\"80%\" style=\"width: 80%;\" data-wow-duration=\"1.5s\" data-wow-delay=\"1.2s\">\r\n                                        <span class=\"text-top\">80%</span>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                            <div class=\"skill-bar-item\">\r\n                                <span>English Lessons</span>\r\n                                <div class=\"progress\">\r\n                                    <div class=\"progress-bar wow fadeInLeft\" data-progress=\"100%\" style=\"width: 100%;\" data-wow-duration=\"1.5s\" data-wow-delay=\"1.2s\">\r\n                                        <span class=\"text-top\">100%</span>\r\n                                    </div>\r\n                                </div>\r\n                            </div>     \r\n                        </div>\r\n                    </div>    \r\n                </div>\r\n            </div>\r\n        </div>', 8, 1, '2023-01-01 02:02:58', '2023-01-01 02:02:58', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_areas`
--
ALTER TABLE `activity_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`),
  ADD KEY `blogs_category_id_foreign` (`category_id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_user_id_foreign` (`user_id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contents_user_id_foreign` (`user_id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_user_id_foreign` (`user_id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_user_id_foreign` (`user_id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_letters`
--
ALTER TABLE `news_letters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_letters_user_id_foreign` (`user_id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notices_user_id_foreign` (`user_id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `our_classes`
--
ALTER TABLE `our_classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `our_classes_user_id_foreign` (`user_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pages_user_id_foreign` (`user_id`),
  ADD KEY `slug` (`slug`);

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
-- Indexes for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photo_galleries_user_id_foreign` (`user_id`),
  ADD KEY `photo_galleries_category_id_foreign` (`category_id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `portfolios_user_id_foreign` (`user_id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `product_event_galleries`
--
ALTER TABLE `product_event_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_event_galleries_user_id_foreign` (`user_id`),
  ADD KEY `reference_id` (`reference_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tags_user_id_foreign` (`user_id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teachers_user_id_foreign` (`user_id`);

--
-- Indexes for table `template1s`
--
ALTER TABLE `template1s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `template1s_user_id_foreign` (`user_id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video_galleries`
--
ALTER TABLE `video_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `video_galleries_user_id_foreign` (`user_id`);

--
-- Indexes for table `widgets`
--
ALTER TABLE `widgets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `widgets_user_id_foreign` (`user_id`),
  ADD KEY `slug` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_areas`
--
ALTER TABLE `activity_areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `news_letters`
--
ALTER TABLE `news_letters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_classes`
--
ALTER TABLE `our_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_event_galleries`
--
ALTER TABLE `product_event_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `template1s`
--
ALTER TABLE `template1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `video_galleries`
--
ALTER TABLE `video_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `widgets`
--
ALTER TABLE `widgets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `contents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `news_letters`
--
ALTER TABLE `news_letters`
  ADD CONSTRAINT `news_letters_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notices`
--
ALTER TABLE `notices`
  ADD CONSTRAINT `notices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `our_classes`
--
ALTER TABLE `our_classes`
  ADD CONSTRAINT `our_classes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  ADD CONSTRAINT `photo_galleries_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `photo_galleries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD CONSTRAINT `portfolios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_event_galleries`
--
ALTER TABLE `product_event_galleries`
  ADD CONSTRAINT `product_event_galleries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tags`
--
ALTER TABLE `tags`
  ADD CONSTRAINT `tags_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `template1s`
--
ALTER TABLE `template1s`
  ADD CONSTRAINT `template1s_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `video_galleries`
--
ALTER TABLE `video_galleries`
  ADD CONSTRAINT `video_galleries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `widgets`
--
ALTER TABLE `widgets`
  ADD CONSTRAINT `widgets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
