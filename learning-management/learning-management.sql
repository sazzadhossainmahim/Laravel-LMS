-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2021 at 03:56 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learning-management`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendences`
--

CREATE TABLE `attendences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attendence_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendences`
--

INSERT INTO `attendences` (`id`, `user_id`, `code`, `attendence_date`, `created_at`, `updated_at`) VALUES
(1, 9, 'CSE1', '2021-11-04', '2021-11-03 20:07:45', '2021-11-03 20:07:45'),
(2, 18, 'CSE1', '2021-11-04', '2021-11-03 20:10:52', '2021-11-03 20:10:52'),
(3, 14, 'CSE1', '2021-11-04', '2021-11-03 20:11:06', '2021-11-03 20:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `code`, `title`, `created_at`, `updated_at`) VALUES
(1, 'CSE1', 'Title1', '2021-11-03 10:24:53', '2021-11-03 10:24:53'),
(3, 'CSE123', 'Title4', '2021-11-03 10:45:22', '2021-11-03 10:45:22'),
(5, 'CSE1242', 'Title5', '2021-11-03 10:45:56', '2021-11-03 10:45:56');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_11_03_154903_create_courses_table', 2),
(8, '2021_11_03_175842_create_attendences_table', 3);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('Admin','Teacher','Student') COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept` enum('CSE','EEE','ECE','MBA','BBA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `teacher_student_id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `type`, `dept`, `name`, `batch`, `section`, `code`, `email`, `email_verified_at`, `password`, `is_active`, `teacher_student_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'CSE', 'Admin', NULL, NULL, 'CSE1', 'mahim@gmail.com', NULL, '$2y$10$vH1gJm/XEKG97VU80FqwnuS2aF3O9qBPdMQir/yiS4WkJ5GVHsrSq', 1, '', NULL, NULL, NULL),
(7, 'Teacher', 'CSE', 'Masum', NULL, NULL, 'CSE1', 'masum@gmail.com', NULL, '$2y$10$vH1gJm/XEKG97VU80FqwnuS2aF3O9qBPdMQir/yiS4WkJ5GVHsrSq', 1, '171-15-8657', NULL, '2021-10-30 20:04:17', '2021-10-30 20:04:17'),
(9, 'Student', 'CSE', 'Ripon', '46', 'C', 'CSE1', 'ripon@gmail.com', NULL, '$2y$10$MuxWMKrPt28hEOsQGN3nIefudSkynpne4.uJuruLcCY.8RHlSA0bS', 1, '171-15-8866', NULL, '2021-11-01 08:12:57', '2021-11-01 10:11:47'),
(13, 'Student', 'CSE', 'ryrty', '46', 'C', 'CSE1', 'm45asum@gmail.com', NULL, '$2y$10$YFwzkuOJh2xx/ZD4p8HvnOd88p2ei1wW8DFFyflZMgq0zCeY0jYNK', 1, '564646', NULL, '2021-11-01 10:13:35', '2021-11-01 10:13:35'),
(14, 'Student', 'CSE', 'gdg', '46', 'C', 'CSE1', 'm4554asum@gmail.com', NULL, '$2y$10$3tJZqYW6QdGxMDOQgpce9eQpADl8zvGjztxjPUm1zGritXV2e6nnm', 1, '564646454', NULL, '2021-11-01 10:13:48', '2021-11-01 10:13:48'),
(16, 'Student', 'CSE', 'Masum Billa', '46', 'C', 'CSE1', 'm56asum@gmail.com', NULL, '$2y$10$aD.i89VOJWMKs/8qtpPJme.ksFOtA7KZWRy1trJ4gP3kh9xbMncxG', 1, '34', NULL, '2021-11-03 11:30:18', '2021-11-03 11:30:18'),
(17, 'Student', 'CSE', 'ghgf', '46', 'C', 'CSE1', 'masum565@gmail.com', NULL, '$2y$10$IPsV5Bay.RHuprx939qBE.J3FcGqYnqiGu9XTQpFKaPLXE.ywtYRi', 1, '454455', NULL, '2021-11-03 11:30:35', '2021-11-03 11:30:35'),
(18, 'Student', 'CSE', 'dgfdfdh', '46', 'C', 'CSE1', 'masu454m@gmail.com', NULL, '$2y$10$ehQ.bZV60O9AS6L1qRWS4OOrv8cezp6.nx37YRu9iWWrf93B9O8Oy', 1, '4545', NULL, '2021-11-03 12:07:19', '2021-11-03 12:07:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendences`
--
ALTER TABLE `attendences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_code_unique` (`code`),
  ADD UNIQUE KEY `courses_title_unique` (`title`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `teacher_student_id` (`teacher_student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendences`
--
ALTER TABLE `attendences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
