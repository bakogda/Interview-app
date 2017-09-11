-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 11, 2017 at 04:04 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_id` int(11) NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `member_id`, `first_name`, `last_name`, `dob`, `email`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bako', 'Gdaniec', '1994-04-19', 'bakogda@gmail.com', '2017-09-09 19:13:13', '2017-09-09 19:13:13'),
(2, 2, 'Chris', 'Smith', '1978-04-29', 'chris.smith@gmail.com', '2017-09-09 19:13:26', '2017-09-09 19:13:26'),
(13, 3, 'Martin', 'Jefford', '1992-10-06', 'mj@worldofbooks.com', '2017-09-10 21:30:51', '2017-09-10 21:30:51'),
(14, 4, 'Becky', 'King', '1989-11-04', 'bk@gmail.com', '2017-09-10 21:32:02', '2017-09-10 21:32:02'),
(21, 7, 'Hubert', 'Gdaniec', '2000-01-01', 'bakogda@gmail.com', '2017-09-11 00:41:42', '2017-09-11 00:41:42'),
(22, 5, 'TestUser5', 'TestUser5', '1994-04-19', 'TestUser5', '2017-09-11 00:58:48', '2017-09-11 00:58:48'),
(23, 6, 'TestUser6', 'TestUser6', '1994-04-19', 'TestUser5@gmail.com', '2017-09-11 00:59:26', '2017-09-11 00:59:26'),
(24, 8, 'TestUser8', 'TestUser8', '1994-04-19', 'TestUser8', '2017-09-11 00:59:59', '2017-09-11 00:59:59'),
(25, 9, 'TestUser9', 'TestUser9', '1994-04-19', 'TestUser9', '2017-09-11 01:00:31', '2017-09-11 01:00:31'),
(26, 10, 'TestUser10', 'TestUser10', '1994-04-19', 'TestUser10', '2017-09-11 01:00:50', '2017-09-11 01:00:50'),
(27, 11, 'TestUser10', 'TestUser10', '1994-04-19', 'TestUser10', '2017-09-11 01:01:16', '2017-09-11 01:01:16'),
(28, 12, 'TestUser12', 'TestUser12', '1994-04-19', 'TestUser12', '2017-09-11 01:01:54', '2017-09-11 01:01:54'),
(29, 13, 'TestUser13', 'TestUser13', '1994-04-19', 'TestUser13', '2017-09-11 01:02:35', '2017-09-11 01:02:35'),
(30, 14, 'TestUser14', 'TestUser14', '1994-04-19', 'TestUser14', '2017-09-11 01:03:03', '2017-09-11 01:03:03');

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` int(10) UNSIGNED NOT NULL,
  `membership_id` int(11) NOT NULL,
  `membership_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `membership_id`, `membership_date`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-04-19', NULL, NULL),
(2, 2, '2017-11-15', NULL, NULL),
(4, 3, '2015-10-06', '2017-09-10 21:30:51', '2017-09-10 21:30:51'),
(5, 4, '2015-10-04', '2017-09-10 21:32:02', '2017-09-10 21:32:02'),
(8, 7, '2017-12-31', '2017-09-11 00:41:42', '2017-09-11 00:41:42'),
(9, 5, '1994-04-19', '2017-09-11 00:58:48', '2017-09-11 00:58:48'),
(10, 6, '1994-04-19', '2017-09-11 00:59:26', '2017-09-11 00:59:26'),
(11, 8, '1994-04-19', '2017-09-11 00:59:59', '2017-09-11 00:59:59'),
(12, 9, '1994-04-19', '2017-09-11 01:00:31', '2017-09-11 01:00:31'),
(13, 10, '1994-04-19', '2017-09-11 01:00:50', '2017-09-11 01:00:50'),
(14, 11, '1994-04-19', '2017-09-11 01:01:16', '2017-09-11 01:01:16'),
(15, 12, '1994-04-19', '2017-09-11 01:01:54', '2017-09-11 01:01:54'),
(16, 13, '1994-04-19', '2017-09-11 01:02:35', '2017-09-11 01:02:35'),
(17, 14, '1994-04-19', '2017-09-11 01:03:03', '2017-09-11 01:03:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_09_09_200413_create_member_table', 1),
(4, '2017_09_10_134805_create_memberships_table', 2),
(5, '2017_09_10_141533_create_memberships_table', 3),
(6, '2017_09_10_153433_create_memberships_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `members_member_id_unique` (`member_id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
