-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2020 at 07:25 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poem`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoppy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tw_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_page_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `created_at`, `updated_at`, `image`, `name`, `address`, `date_of_birth`, `education`, `hoppy`, `work`, `fb_link`, `tw_link`, `fb_page_link`, `phone`) VALUES
(1, NULL, '2020-02-17 16:12:44', 'post_image1581963163.jpg', 'عماد ملاك', 'مصر المنيا  بني  مزار', '2020-01-02', 'اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام', 'اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام', 'اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام', 'kerolesatef200', 'kerolesatef200', 'kerolesatef200', '01060402713');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `created_at`, `updated_at`, `image`, `title`, `body`) VALUES
(1, '2020-01-01 13:19:40', '2020-02-23 15:05:57', 'post_image1582477555.jpg', 'اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام', 'اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام\"\"'),
(2, '2020-01-01 13:21:10', '2020-01-01 13:54:55', 'post_image1577894095.jpg', 'اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام', 'اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام\"'),
(3, '2020-01-01 13:21:39', '2020-01-01 13:21:39', 'post_image1577892098.jpg', 'اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام', 'اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام'),
(4, '2020-01-01 13:27:45', '2020-01-01 13:27:45', 'post_image1577892465.jpg', 'اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام', 'اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'الليل بري لكن', '<p>كيرلس كيرلس&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; كيرلس كيرلس</p><p>&nbsp;</p><p>كيرلس كيرلس&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; كيرلس كيرلس</p><p>كيرلس كيرلس&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; كيرلس كيرلس</p><p>كيرلس كيرلس&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; كيرلس كيرلس</p><p>كيرلس كيرلس&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; كيرلس كيرلس</p><p>&quot;</p>', '2020-01-01 13:25:28', '2020-02-18 21:54:24'),
(2, 'الليل بري لكن', '<p>كيرلس كيرلس&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; كيرلس كيرلس</p><p>كيرلس كيرلس&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; كيرلس كيرلس</p><p>كيرلس كيرلس&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; كيرلس كيرلس</p><p>كيرلس كيرلس&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; كيرلس كيرلس</p><p>كيرلس كيرلس&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; كيرلس كيرلس</p><p>كيرلس كيرلس&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; كيرلس كيرلس</p>', '2020-01-01 13:25:42', '2020-02-18 21:53:05'),
(3, 'الليل بري لكن', '<p>كير&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كيرو&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كير&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كيرو&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كير&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كيرو&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p>', '2020-01-01 13:25:57', '2020-02-18 21:53:25'),
(6, 'ابو العز معززني ', '<p>ابو العز معززني&nbsp;</p><p>ابو العز معززني&nbsp;</p><p>ابو العز معززني&nbsp;</p><p>ابو العز معززني&nbsp;</p><p>ابو العز معززني&nbsp;</p><p>ابو العز معززني&nbsp;</p><p>ابو العز معززني&nbsp;ابو العز معززني&nbsp;ابو العز معززني&nbsp;ابو العز معززني&nbsp;</p><p>&nbsp;</p><p>ابو العز معززني&nbsp;</p>', '2020-02-18 22:09:15', '2020-02-18 22:09:15');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comentable_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `created_at`, `updated_at`, `comment`, `name`, `email`, `comentable_type`, `comentable_id`, `status`) VALUES
(33, '2020-02-15 14:55:23', '2020-03-11 16:21:57', 'dsdd', 'eee', 'kerolesatef200@gmail.com', 'App\\Models\\Poem', 3, 0),
(34, '2020-02-15 14:57:02', '2020-02-15 14:57:10', 'wwwww', 'kero2020', 'kerolesatef200@gmail.com', 'App\\Models\\Poem', 3, 1),
(35, '2020-02-15 14:57:44', '2020-02-15 14:57:49', 'wwww', 'eee', 'kerolesatef200@gmail.com', 'App\\Models\\Article', 3, 1),
(36, '2020-02-15 15:05:18', '2020-02-15 15:05:18', 'sss', 'name', 'kerolesatef200@gmail.com', 'App\\Models\\Article', 3, 0);

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
(3, '2020_01_01_143022_create_abouts_table', 1),
(4, '2020_01_01_143022_create_ads_table', 1),
(5, '2020_01_01_143022_create_articles_table', 1),
(6, '2020_01_01_143022_create_comments_table', 1),
(7, '2020_01_01_143022_create_poems_table', 1),
(8, '2020_01_01_143022_create_videos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('emad.malak@poem.com', '$2y$10$iOJDov/ber/2xPJ9mlg.4.oY4f9jXnyM7WUXac3zebnPKHzp.KYOy', '2020-01-31 10:49:43');

-- --------------------------------------------------------

--
-- Table structure for table `poems`
--

CREATE TABLE `poems` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `poems`
--

INSERT INTO `poems` (`id`, `created_at`, `updated_at`, `title`, `body`) VALUES
(3, '2020-01-01 13:29:25', '2020-02-18 22:02:39', 'قصيده رقم 1', '<p>كير&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كيرو&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كير&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كيرو&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كير&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كيرو&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>&nbsp;</p>'),
(6, '2020-02-15 11:56:44', '2020-02-18 21:54:01', 'قصيده رقم 4', '<p>كير&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كيرو&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كير&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كيرو&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كير&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كيرو&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p>'),
(7, '2020-02-17 15:58:48', '2020-02-18 21:54:07', 'بنت الجران', '<p>كير&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كيرو&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كير&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كيرو&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كير&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كيرو&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p>'),
(8, '2020-02-17 17:00:17', '2020-02-18 21:54:13', 'ابو  العز', '<p>كير&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كيرو&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كير&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كيرو&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كير&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كيرو&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p>'),
(10, '2020-02-18 01:58:36', '2020-02-18 21:54:17', 'sasa', '<p>كير&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كيرو&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كير&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كيرو&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كير&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p><p>كيرو&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;كيرو&nbsp;</p>'),
(11, '2020-02-18 22:13:36', '2020-02-18 22:13:36', 'الليل بري لكن', '<p>الليل بري لكن</p>');

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
(1, 'Emad Malak', 'kerolesatef200@gmail.com', NULL, '$2y$10$h4CfTyVDZliwS0a1rYH7AeCVvr5jgOQ0fJoxW9MAHMWUL6GbO.ZrW', NULL, '2020-01-31 10:36:35', '2020-01-31 10:36:35');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `created_at`, `updated_at`, `source`, `title`, `body`) VALUES
(1, '2020-01-01 13:18:20', '2020-01-01 13:18:20', 'https://www.youtube.com/embed/rLwItwIYA78', 'keroles', 'dsfsfds\r\ndsfsdf'),
(2, '2020-01-01 13:18:31', '2020-01-01 13:18:31', 'https://www.youtube.com/embed/rLwItwIYA78', 'sdfs', 'sdfsdfsd\r\nsdfsdf\r\ndsfDS\r\nFsdFDS\r\nfds'),
(3, '2020-01-01 13:18:43', '2020-01-01 13:18:43', 'https://www.youtube.com/embed/rLwItwIYA78', 'sfsdf', 'sdfsdfsdfsd\r\ndsfdsF\r\nSDfsDF\r\nsdFSD\r\nfsd\r\nFdsFDS'),
(4, '2020-01-01 13:19:05', '2020-01-01 13:19:05', 'https://www.youtube.com/embed/rLwItwIYA78', 'fdsfsd', 'sdfsdfsd\r\nsdfsDF\r\nSDfSDF\r\nsd'),
(6, '2020-01-04 19:18:10', '2020-01-04 19:18:10', 'https://www.youtube.com/embed/sP3ilRaSPvM', 'اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام', 'اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام'),
(7, '2020-01-04 19:19:28', '2020-01-04 19:19:28', 'https://www.youtube.com/embed/rLwItwIYA78', 'اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام', 'اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام'),
(8, '2020-01-04 19:22:03', '2020-01-04 19:22:03', 'https://www.youtube.com/embed/sP3ilRaSPvM', 'اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام', 'ewrewrwerw');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `viewable_id` int(11) NOT NULL,
  `viewable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- Indexes for table `poems`
--
ALTER TABLE `poems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ip` (`ip`),
  ADD UNIQUE KEY `date` (`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `poems`
--
ALTER TABLE `poems`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
