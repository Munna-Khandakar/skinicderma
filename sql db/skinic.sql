-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 07:48 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `checked` tinyint(1) DEFAULT NULL,
  `saved` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `gender`, `phone`, `email`, `date`, `time`, `checked`, `saved`, `created_at`, `updated_at`) VALUES
(1, 'Riadul Islam', 'Male', '01711507094', 'm.riad2572@gmail.com', '2021-07-03', '16:09:00', NULL, NULL, '2021-07-01 00:08:50', '2021-07-01 00:09:37'),
(2, 'Shisad Khandakar', 'Male', '01794941342', 'shisadkhandakar@gmail.com', '2021-07-01', '16:10:00', NULL, NULL, '2021-07-01 00:10:44', '2021-07-01 00:10:44'),
(3, 'Shisad Khandakar', 'Male', '01794941342', 'shisadkhandakar@gmail.com', '2021-07-02', '18:00:00', NULL, NULL, '2021-07-01 00:23:25', '2021-07-01 00:23:25'),
(4, 'Shakil Ahmed', 'Male', '01905069807', NULL, '2021-07-01', '18:00:00', NULL, NULL, '2021-07-01 00:32:59', '2021-07-01 00:32:59'),
(5, 'Shakil Ahmed', 'Male', '01905069807', NULL, '2021-07-03', '18:00:00', NULL, NULL, '2021-07-01 00:33:31', '2021-07-01 00:33:31'),
(6, 'Riadul Islam', 'Male', '01711507094', 'm.riad2572@gmail.com', NULL, NULL, NULL, NULL, '2021-07-01 01:10:52', '2021-07-01 01:10:52'),
(7, 'Sowarna Islam', 'female', '1711507094', NULL, '2021-07-02', '18:00:00', NULL, NULL, '2021-07-01 01:21:41', '2021-07-01 01:21:41'),
(8, 'Shakil Ahmed', 'Male', '01905069807', NULL, '2021-07-05', '18:00:00', NULL, NULL, '2021-07-01 08:37:36', '2021-07-01 08:37:36'),
(9, 'Israt', 'Male', '01794807777', 'munnashisad@gmail.com', '2021-07-02', '20:39:00', NULL, NULL, '2021-07-01 08:39:02', '2021-07-01 08:39:59'),
(10, 'ABC', 'Male', '0122', 'munnashisad@gmail.com', '2021-07-10', '16:54:00', NULL, NULL, '2021-07-01 08:53:55', '2021-07-01 08:55:01'),
(11, 'Munna Khandakar', 'Male', '9206126491', 'munnashisad@gmail.com', NULL, NULL, NULL, NULL, '2021-07-12 05:01:03', '2021-07-12 05:01:03'),
(12, 'Homer R Shield', 'Male', '9206126491', 'munnashisad@gmail.com', NULL, NULL, NULL, NULL, '2021-07-12 11:34:20', '2021-07-12 11:34:20'),
(13, 'Homer R Shield', 'Male', '9206126491', 'tepawe8338@naymeo.com', NULL, NULL, NULL, NULL, '2021-07-12 11:36:37', '2021-07-12 11:36:37'),
(14, 'Homer R Shield', 'Male', '9206126491', 'tepawe8338@naymeo.com', NULL, NULL, NULL, NULL, '2021-07-12 11:38:21', '2021-07-12 11:38:21'),
(15, 'Homer R Shield', 'Male', '9206126491', 'tepawe8338@naymeo.com', NULL, NULL, NULL, NULL, '2021-07-12 11:38:57', '2021-07-12 11:38:57'),
(16, 'Homer R Shield', 'Male', '9206126491', 'tepawe8338@naymeo.com', NULL, NULL, NULL, NULL, '2021-07-12 11:41:32', '2021-07-12 11:41:32'),
(17, 'Homer R Shield', 'Male', '9206126491', 'tepawe8338@naymeo.com', NULL, NULL, NULL, NULL, '2021-07-12 11:44:52', '2021-07-12 11:44:52'),
(18, 'Homer R Shield', 'Male', '9206126491', 'tepawe8338@naymeo.com', NULL, NULL, NULL, NULL, '2021-07-12 11:46:22', '2021-07-12 11:46:22');

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
-- Table structure for table `invites`
--

CREATE TABLE `invites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
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
(8, '2021_06_07_025021_create_records_table', 1),
(9, '2021_06_22_135026_create_records_table', 2),
(12, '2014_10_12_000000_create_users_table', 3),
(13, '2014_10_12_100000_create_password_resets_table', 3),
(14, '2019_08_19_000000_create_failed_jobs_table', 3),
(15, '2020_12_12_183401_create_invites_table', 3),
(16, '2020_12_13_130344_create_profiles_table', 3),
(17, '2021_01_23_164253_create_appointments_table', 3),
(18, '2021_01_23_185635_create_patients_table', 3),
(19, '2021_06_22_173730_create_records_table', 3),
(20, '2021_06_22_182158_create_settings_table', 3),
(21, '2021_07_12_103658_create_jobs_table', 4);

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
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `phone`, `gender`, `email`, `remarks`, `created_at`, `updated_at`) VALUES
(1, 'Sowarna Islam', '1711507094', 'female', NULL, NULL, '2021-06-30 22:11:19', '2021-06-30 22:11:19'),
(2, 'Shisad Khandakar', '01794941342', 'Male', 'shisadkhandakar@gmail.com', NULL, '2021-07-01 00:11:32', '2021-07-01 00:11:32'),
(3, 'Shakil Ahmed', '01905069807', 'Male', NULL, NULL, '2021-07-01 00:33:16', '2021-07-01 00:33:16');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `advice_sitting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sitting_completed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_bill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `next_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `patient_id`, `service`, `advice_sitting`, `sitting_completed`, `total_bill`, `paid_amount`, `next_date`, `created_at`, `updated_at`) VALUES
(3, '1', 'Botox', '10', '8', '20000', '12000', NULL, '2021-06-30 22:51:37', '2021-06-30 22:51:37'),
(4, '1', 'Botox', '10', '9', '12000', '12000', NULL, '2021-06-30 23:13:33', '2021-06-30 23:13:33'),
(5, '1', 'Botox', '10', '10', '12000', '12000', NULL, '2021-06-30 23:32:36', '2021-06-30 23:32:36'),
(6, '1', 'PRP', '10', '8', '12000', '15000', NULL, '2021-06-30 23:45:52', '2021-06-30 23:45:52'),
(7, '1', 'PRP', '10', '9', '5000', '5000', '2021-07-02', '2021-06-30 23:56:46', '2021-06-30 23:56:46'),
(8, '1', 'PRP', '10', '10', '5000', '5000', '2021-07-02', '2021-07-01 00:03:54', '2021-07-01 00:03:54'),
(9, '2', 'Botox', '10', '1', '12000', '10000', '2021-07-02', '2021-07-01 00:11:53', '2021-07-01 00:11:53'),
(10, '2', 'PRP', '10', '1', '5000', '5000', '2021-07-03', '2021-07-01 00:17:49', '2021-07-01 00:17:49'),
(11, '01794941342', 'PRP', '10', '2', '5000', '6000', '2021-07-03', '2021-07-01 00:20:06', '2021-07-01 00:20:06'),
(12, '01794941342', 'PRP', '10', '2', '5000', '6000', '2021-07-03', '2021-07-01 00:20:43', '2021-07-01 00:20:43'),
(13, '2', 'PRP', '10', '2', '1200', '2000', '2021-07-03', '2021-07-01 00:21:13', '2021-07-01 00:21:13'),
(14, '2', 'Botox', '10', '2', '12000', '15000', '2021-07-02', '2021-07-01 00:23:15', '2021-07-01 00:23:15'),
(15, '3', 'Botox', '10', '1', '1200', '1200', '2021-07-03', '2021-07-01 00:33:30', '2021-07-01 08:18:42'),
(16, '1', 'Laser', '5', '1', '2000', '1000', '2021-07-02', '2021-07-01 01:21:39', '2021-07-01 01:21:39'),
(17, '3', 'PRP', '10', '2', '5000', '8000', NULL, '2021-07-01 08:18:04', '2021-07-01 08:18:04'),
(18, '3', 'PRP', '10', '3', '5000', '5000', '2021-07-05', '2021-07-01 08:37:34', '2021-07-01 08:37:34');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `settings_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings_value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `settings_name`, `settings_value`, `created_at`, `updated_at`) VALUES
(1, 'starting_hour', '6:00 PM', NULL, '2021-07-01 00:34:45'),
(2, 'office_duration', '2', NULL, '2021-07-01 00:34:45');

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
  `is_admin` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Munna Khandakar', 'munnashisad@gmail.com', NULL, '$2y$10$r8gENUPXw157AHf/1EW0KefjsOx1DrT5IS1jexoXWOG8S.0D/Je.e', 1, 'd8pvqJmbEqEYUhuea1vz7F2fouyKMa8oS9IpoctU5meMxIwxQbb4tkztLOb7', NULL, NULL),
(2, 'Dr. Asif Imran Siddiqui', 'docasifimran@gmail.com', NULL, '$2y$10$94eTgX3E5cUw5p2XXHDPH.coICp41bGnB0lQCUHWyWfzuzsuKDRyW', 1, NULL, NULL, NULL),
(3, 'Ishrat', 'ij01912156822@gmail.com', NULL, '$2y$10$zXe6xknoWAdu1NnNupbnjufgDGZRKaW9mEQxHeyCwCd.Smh7.sNYO', 1, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `invites`
--
ALTER TABLE `invites`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `invites_email_unique` (`email`),
  ADD UNIQUE KEY `invites_token_unique` (`token`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

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
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `invites`
--
ALTER TABLE `invites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
