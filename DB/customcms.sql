-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2023 at 11:30 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `icon` varchar(255) NOT NULL,
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
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `category_id`, `title`, `slug`, `content`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'কুরআনের আলোয় ছড়িয়ে যাক পৃথিবী জুড়ে।', '', 'কুরআনের আলোয় ছড়িয়ে যাক পৃথিবী জুড়ে।\r\nJU Foundation কর্তৃক পরিচালিত.... \r\n\"মক্তব\"।\r\n শিশু-কিশোরদের মাঝে কুরআনের জ্ঞান ছড়িয়ে দিতে JU Foundation এর ক্ষুদ্র প্রচেষ্টা অব্যাহত।', 'blog3-1678961198.jpg', 1, '2023-03-16 04:06:26', '2023-03-16 04:06:38', NULL),
(2, 1, 1, 'JU Foundation এর সহযোগীতায় “ বাইতুর নাজাত মসজিদ” প্রতিষ্ঠা করা হলো।', 'ju-foundation-er-shzogeetay-baitur-najat-msjid-prtishtha-kra-hlo', '”এসো সালাতের দিকে, এসো কল্যাণের দিকে”।\r\nআলহামদুলিল্লাহ্..............\r\n JU Foundation এর সহযোগীতায় “ বাইতুর নাজাত মসজিদ” প্রতিষ্ঠা করা হলো।\r\nলোকেশন: শ্রীপুর, ফুলবাড়িয়া, ময়মনসিংহ।', 'blog11-1678961312.jpg', 1, '2023-03-16 04:08:32', '2023-03-16 04:08:32', NULL),
(3, 1, 1, 'কুরআনের আলোয় ছড়িয়ে যাক পৃথিবী জুড়ে।', 'kuraner-aloy-chriye-zak-prrithibee-jure', 'কুরআনের আলোয় ছড়িয়ে যাক পৃথিবী জুড়ে।\r\nকুষ্টিয়াতে JU Foundation কর্তৃক পরিচালিত.... \r\n\"মক্তব\"।\r\nওই এলাকায় শিশু-কিশোরদের মাঝে কুরআনের জ্ঞান ছড়িয়ে দিতে JU Foundation এর ক্ষুদ্র প্রচেষ্টা অব্যাহত', 'blog22-1678961380.jpg', 1, '2023-03-16 04:09:40', '2023-03-16 04:09:40', NULL),
(4, 1, 1, 'JU Foundation কর্তৃক পরিচালিত আল কোরআন  একাডেমি  মাদ্রাসার', 'ju-foundation-krtrrik-pricalit-al-koran-ekademi-madrasar', 'আলহামদুলিল্লাহ,  \r\nJU Foundation কর্তৃক পরিচালিত আল কোরআন  একাডেমি  মাদ্রাসার \r\nবার্ষিক ওয়াজ ও দোয়ার মাহফিল উপলক্ষে\r\nদুইজন  হাফেজে কোরআন ছাত্রকে পাগড়ি পড়ানো হয়েছে।\r\nআল্লাহ তায়লা যেন এ মাদ্রাসা এবং শিক্ষার্থীদের কবুল করেন,  আমিন।', 'blog33-1678961433.jpg', 1, '2023-03-16 04:10:33', '2023-03-16 04:10:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_type` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `category_type`, `name`, `slug`, `desc`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Blog Category', 'blog-category', 'Description', 'blog2-1678960091.png', 1, '2023-03-16 03:47:59', '2023-03-16 03:48:11', NULL),
(2, 1, 1, 'Photo Gallery Category', 'photo-gallery-category', 'Descrition', '4-1678960133.jpg', 1, '2023-03-16 03:48:53', '2023-03-16 03:48:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contuct_us`
--

CREATE TABLE `contuct_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `desc` longtext DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
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
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `template_id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `user_id`, `template_id`, `parent_id`, `order`, `title`, `url`, `target`, `slug`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, NULL, 1, 'Class', 'educaation/home', '1', 'home', 1, '2023-03-02 03:18:30', '2023-03-02 03:18:30', NULL),
(2, 1, 1, 1, 1, 'Class 1', 'educaation/about', '1', 'about', 1, '2023-03-02 03:24:05', '2023-03-02 03:24:05', NULL),
(3, 1, 2, NULL, 1, 'Ecommece', 'ecommerce/home', '1', 'ecommece', 1, '2023-03-02 04:20:56', '2023-03-02 04:20:56', NULL),
(4, 1, 2, 3, 1, 'Contact-us', 'ecommerce/contact-us', '1', 'contact-us', 1, '2023-03-02 04:22:11', '2023-03-02 04:22:11', NULL),
(5, 1, 2, 3, 1, 'About-us', 'ecommerce/about', '1', 'about-us', 1, '2023-03-02 04:56:02', '2023-03-02 04:56:02', NULL),
(6, 1, 1, 1, 1, 'Class 2', 'educaation/about', '1', 'about', 1, '2023-03-02 03:24:05', '2023-03-02 03:24:05', NULL),
(7, 1, 1, 1, 1, 'Class 3', 'educaation/about', '1', 'about', 1, '2023-03-02 03:24:05', '2023-03-02 03:24:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(20, '2022_12_09_192733_create_settings_table', 1),
(21, '2022_12_14_061910_create_product_event_galleries_table', 1),
(22, '2022_12_20_055159_create_template1s_table', 1),
(23, '2022_12_28_140326_create_teachers_table', 2),
(24, '2022_12_28_140327_create_our_classes_table', 2),
(25, '2023_01_01_043652_create_activity_areas_table', 2),
(26, '2023_01_02_064452_create_contuct_us_table', 2),
(29, '2023_03_02_060159_create_sub_categories_table', 8),
(30, '2022_12_09_192209_create_sub_categories_table', 9),
(31, '2022_12_09_192655_create_menus_table', 9),
(33, '2023_03_16_041449_create_volunteers_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `news_letters`
--

CREATE TABLE `news_letters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
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
  `title` varchar(255) NOT NULL,
  `desc` longtext DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
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
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `start_date` date NOT NULL,
  `class_size` varchar(255) DEFAULT NULL,
  `age_range` varchar(255) NOT NULL,
  `class_duration` varchar(255) NOT NULL,
  `transport` varchar(255) DEFAULT NULL,
  `morning_food` varchar(255) DEFAULT NULL,
  `class_starff` varchar(255) DEFAULT NULL,
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
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
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
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
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
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photo_galleries`
--

INSERT INTO `photo_galleries` (`id`, `user_id`, `category_id`, `title`, `image`, `slug`, `desc`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 1, 2, 'JU Foundationn কর্তৃক পরিচালিত, মক্তবের শিক্ষার্থীদের শিক্ষাদানের কিছু খন্ডচিত্র।', 'img1-1678960591.jpg', 'ju-foundationn-krtrrik-pricalit-mktber-sikshartheeder-sikshadaner-kichu-khndcitr', 'JU Foundationn কর্তৃক পরিচালিত, মক্তবের শিক্ষার্থীদের শিক্ষাদানের কিছু খন্ডচিত্র।', 1, '2023-03-16 03:56:31', '2023-03-16 03:56:31', NULL),
(6, 1, 2, 'JU Foundationn কর্তৃক পরিচালিত, মক্তবের শিক্ষার্থীদের শিক্ষাদানের কিছু খন্ডচিত্র।', 'img2-1678960605.jpg', 'ju-foundationn-krtrrik-pricalit-mktber-sikshartheeder-sikshadaner-kichu-khndcitr', 'JU Foundationn কর্তৃক পরিচালিত, মক্তবের শিক্ষার্থীদের শিক্ষাদানের কিছু খন্ডচিত্র।', 1, '2023-03-16 03:56:45', '2023-03-16 03:56:45', NULL),
(7, 1, 2, 'JU Foundationn কর্তৃক পরিচালিত, মক্তবের শিক্ষার্থীদের শিক্ষাদানের কিছু খন্ডচিত্র।', 'img3-1678960632.jpg', 'ju-foundationn-krtrrik-pricalit-mktber-sikshartheeder-sikshadaner-kichu-khndcitr', 'JU Foundationn কর্তৃক পরিচালিত, মক্তবের শিক্ষার্থীদের শিক্ষাদানের কিছু খন্ডচিত্র।', 1, '2023-03-16 03:57:12', '2023-03-16 03:57:12', NULL),
(8, 1, 2, 'JU Foundationn কর্তৃক পরিচালিত, মক্তবের শিক্ষার্থীদের শিক্ষাদানের কিছু খন্ডচিত্র।', 'img4-1678960647.jpg', 'ju-foundationn-krtrrik-pricalit-mktber-sikshartheeder-sikshadaner-kichu-khndcitr', 'JU Foundationn কর্তৃক পরিচালিত, মক্তবের শিক্ষার্থীদের শিক্ষাদানের কিছু খন্ডচিত্র।', 1, '2023-03-16 03:57:27', '2023-03-16 03:57:27', NULL),
(9, 1, 2, 'JU Foundationn কর্তৃক পরিচালিত, মক্তবের শিক্ষার্থীদের শিক্ষাদানের কিছু খন্ডচিত্র।', 'img5-1678960661.jpg', 'ju-foundationn-krtrrik-pricalit-mktber-sikshartheeder-sikshadaner-kichu-khndcitr', 'JU Foundationn কর্তৃক পরিচালিত, মক্তবের শিক্ষার্থীদের শিক্ষাদানের কিছু খন্ডচিত্র।', 1, '2023-03-16 03:57:41', '2023-03-16 03:57:41', NULL),
(10, 1, 2, 'JU Foundationn কর্তৃক পরিচালিত, মক্তবের শিক্ষার্থীদের শিক্ষাদানের কিছু খন্ডচিত্র।', 'img5-1678960676.jpg', 'ju-foundationn-krtrrik-pricalit-mktber-sikshartheeder-sikshadaner-kichu-khndcitr', 'JU Foundationn কর্তৃক পরিচালিত, মক্তবের শিক্ষার্থীদের শিক্ষাদানের কিছু খন্ডচিত্র।', 1, '2023-03-16 03:57:56', '2023-03-16 03:57:56', NULL),
(11, 1, 2, 'JU Foundationn কর্তৃক পরিচালিত, মক্তবের শিক্ষার্থীদের শিক্ষাদানের কিছু খন্ডচিত্র।', 'img6-1678960694.jpg', 'ju-foundationn-krtrrik-pricalit-mktber-sikshartheeder-sikshadaner-kichu-khndcitr', 'JU Foundationn কর্তৃক পরিচালিত, মক্তবের শিক্ষার্থীদের শিক্ষাদানের কিছু খন্ডচিত্র।', 1, '2023-03-16 03:58:14', '2023-03-16 03:58:14', NULL),
(12, 1, 2, 'JU Foundationn কর্তৃক পরিচালিত, মক্তবের শিক্ষার্থীদের শিক্ষাদানের কিছু খন্ডচিত্র।', 'img7-1678960710.jpg', 'ju-foundationn-krtrrik-pricalit-mktber-sikshartheeder-sikshadaner-kichu-khndcitr', 'JU Foundationn কর্তৃক পরিচালিত, মক্তবের শিক্ষার্থীদের শিক্ষাদানের কিছু খন্ডচিত্র।', 1, '2023-03-16 03:58:30', '2023-03-16 03:58:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `desc` longtext DEFAULT NULL,
  `image` varchar(255) NOT NULL,
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
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `specification` longtext NOT NULL,
  `desc` longtext DEFAULT NULL,
  `short_desc` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
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
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
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
  `key` varchar(255) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
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
  `title` varchar(255) NOT NULL,
  `button_name` varchar(255) NOT NULL,
  `button_link` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `button_name`, `button_link`, `content`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'JU Foundation', 'Read more', 'www.google.com', 'JU Foundationn কর্তৃক পরিচালিত, মক্তবের শিক্ষার্থীদের শিক্ষাদানের কিছু খন্ডচিত্র।', '315402447_189701383571376_9034978340146367893_n-1678952338.jpg', 1, '2023-03-16 01:38:58', '2023-03-16 01:38:58', NULL),
(2, 'JU Foundation', 'Read more', 'www.google.com', 'JU Foundationn কর্তৃক পরিচালিত, মক্তবের শিক্ষার্থীদের শিক্ষাদানের কিছু খন্ডচিত্র।', '315443906_189701356904712_362997137723101588_n-1678952445.jpg', 1, '2023-03-16 01:40:45', '2023-03-16 01:40:45', NULL),
(3, 'JU Foundation', 'Read more', 'www.google.com', 'JU Foundationn কর্তৃক পরিচালিত, মক্তবের শিক্ষার্থীদের শিক্ষাদানের কিছু খন্ডচিত্র।', '315533416_189701410238040_7183243594042569388_n-1678952483.jpg', 1, '2023-03-16 01:41:23', '2023-03-16 01:41:23', NULL),
(4, 'JU Foundation', 'Enrole Now', 'www.google.com', 'JU Foundationn কর্তৃক পরিচালিত, মক্তবের শিক্ষার্থীদের শিক্ষাদানের কিছু খন্ডচিত্র।', '315422723_189701293571385_5324310939847425820_n-1678952528.jpg', 1, '2023-03-16 01:42:08', '2023-03-16 01:42:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tag` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
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
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `hobbies` varchar(255) NOT NULL,
  `my_courses` varchar(255) NOT NULL,
  `projects` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `social_link1` varchar(255) NOT NULL,
  `social_link2` varchar(255) NOT NULL,
  `social_link3` varchar(255) NOT NULL,
  `social_link4` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `template1s`
--

CREATE TABLE `template1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` longtext NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `template1s`
--

INSERT INTO `template1s` (`id`, `user_id`, `title`, `slug`, `content`, `thumb`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Education', 'education', 'Education', 'pexels-peter-fazekas-1234064-1677739412.jpg', 0, '2023-03-02 00:43:32', '2023-03-05 04:51:35', NULL),
(2, 1, 'ecommerce', 'ecommerce', 'ecommerce', 'pexels-susanne-jutzeler-sujufoto-1154775-1677741115.jpg', 0, '2023-03-02 01:11:55', '2023-03-02 05:14:00', NULL),
(3, 1, 'NGO', 'ngo', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, dicta, iure. Esse quasi labore aperiam, dolorem amet voluptas soluta asperiores nostrum voluptate molestias numquam similique. Voluptate natus corporis ex, distinctio.', 'ngo-1677999937.PNG', 1, '2023-03-05 01:05:37', '2023-03-05 04:51:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hardik', 'admin@gmail.com', NULL, '$2y$10$xhj.FxJReb4WaICTN.QH3eY7yAjJuKXP8rlfNvjrETJxSPbvSHcfa', NULL, '2023-03-01 22:57:29', '2023-03-01 22:57:29');

-- --------------------------------------------------------

--
-- Table structure for table `video_galleries`
--

CREATE TABLE `video_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 1 COMMENT 'Youtube=1, Vimeo=0',
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `occupation` longtext DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `area_of_work` longtext DEFAULT NULL,
  `image` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT 'Approve=1, Pending=2, Rejected=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`id`, `name`, `email`, `phone`, `address`, `occupation`, `message`, `area_of_work`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Masum Billal', 'mbillal.eee@gmail.com', '01738744957', 'Dhaka', 'Developer', 'Message', NULL, '334799132_881098026334384_6448889100048908854_n-1678948466.jpg', 0, '2023-03-16 00:34:26', '2023-03-16 00:34:26'),
(3, 'Admin', 'admin@gmail.com', '01738744956', 'Dhaka', 'Developer', 'Message', NULL, 'JAAGO-Logo-1678950736.png', 0, '2023-03-16 01:12:16', '2023-03-16 01:12:16'),
(4, 'Masum Billal', 'wmbillal.eee@gmail.com', '01738744958', 'Dhaka', 'Developer', 'mess', 'errer', NULL, 1, '2023-03-16 01:21:27', '2023-03-16 01:21:27');

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE `widgets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active=1, Inactive=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `contuct_us`
--
ALTER TABLE `contuct_us`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `menus_template_id_foreign` (`template_id`),
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
  ADD KEY `our_classes_user_id_foreign` (`user_id`),
  ADD KEY `our_classes_teacher_id_foreign` (`teacher_id`),
  ADD KEY `slug` (`slug`);

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
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_user_id_foreign` (`user_id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`),
  ADD KEY `slug` (`slug`);

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
  ADD KEY `teachers_user_id_foreign` (`user_id`),
  ADD KEY `slug` (`slug`);

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
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `volunteers_email_unique` (`email`),
  ADD UNIQUE KEY `volunteers_phone_unique` (`phone`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contuct_us`
--
ALTER TABLE `contuct_us`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `template1s`
--
ALTER TABLE `template1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video_galleries`
--
ALTER TABLE `video_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `widgets`
--
ALTER TABLE `widgets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `menus_template_id_foreign` FOREIGN KEY (`template_id`) REFERENCES `template1s` (`id`) ON DELETE CASCADE,
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
  ADD CONSTRAINT `our_classes_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE,
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
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sub_categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
