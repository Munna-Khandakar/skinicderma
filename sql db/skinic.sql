-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 07:32 AM
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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(10, 'Munna Khandakar', 'male', '0179480757', 'munnasahisad@gmail.com', '2021-06-08', '16:51:00', NULL, NULL, '2021-06-06 23:50:24', '2021-06-06 23:51:44'),
(11, 'Munna Talukdar', 'male', '017948075778', 'munnas@gmail.com', '2021-06-07', '11:52:00', 1, 1, '2021-06-06 23:50:57', '2021-06-06 23:56:20'),
(12, 'RiadTalukdar', 'male', '01794807778', 'riad@gmail.com', '2021-06-07', '04:52:00', 1, 1, '2021-06-06 23:51:15', '2021-06-07 00:00:09'),
(13, 'Munna Talukdar', 'male', '017948075778', 'munnas@gmail.com', '2021-06-08', '11:53:00', NULL, NULL, '2021-06-06 23:53:32', '2021-06-06 23:53:32'),
(14, 'Nehal Ahmed', 'male', '01794807543', 'tepawe8338@naymeo.com', '2021-06-07', '16:39:00', 1, 1, '2021-06-07 00:39:35', '2021-06-07 00:43:09'),
(15, 'Nehal Ahmed', 'male', '01794807543', 'tepawe8338@naymeo.com', '2021-06-09', '16:42:00', NULL, NULL, '2021-06-07 00:42:21', '2021-06-07 00:42:21'),
(16, 'Shisad Khandakar', 'male', '01793929213', 'niwowon682@tripaco.com', NULL, NULL, NULL, NULL, '2021-06-07 10:06:08', '2021-06-07 10:06:08'),
(17, 'Sami Sadith', 'male', '01794874432', 'samisadith@gmail.com', '2021-06-07', '22:24:00', 1, 1, '2021-06-07 10:22:59', '2021-06-07 10:28:22'),
(18, 'Sami Sadith', 'male', '01794874432', 'samisadith@gmail.com', '2021-06-11', '16:25:00', NULL, NULL, '2021-06-07 10:25:45', '2021-06-07 10:25:45');

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

--
-- Dumping data for table `invites`
--

INSERT INTO `invites` (`id`, `email`, `token`, `created_at`, `updated_at`) VALUES
(1, 'munnasahisad@gmail.com', 'zlVu6NUPPXc1sd0Rqty4', '2021-06-07 23:26:58', '2021-06-07 23:26:58');

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
(4, '2020_12_12_183401_create_invites_table', 1),
(5, '2020_12_13_130344_create_profiles_table', 1),
(6, '2021_01_23_164253_create_appointments_table', 1),
(7, '2021_01_23_185635_create_patients_table', 1),
(8, '2021_06_07_025021_create_records_table', 2);

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
('munnashisad@gmail.com', '$2y$10$6SjjI0x4GjeaA7BuUx6Lo.u.VWKbwC0HUBEU/Bqn9B3C2cAaAGTC6', '2021-04-06 19:23:58');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `phone`, `gender`, `email`, `due`, `created_at`, `updated_at`) VALUES
(4, 'Munna Khandakar', '01794807577', 'Male', 'munnashisad@gmail.com', NULL, '2021-06-06 21:38:20', '2021-06-06 21:38:20'),
(5, 'Munna Talukdar', '017948075778', 'male', 'munnas@gmail.com', NULL, '2021-06-06 23:54:27', '2021-06-06 23:54:27'),
(6, 'RiadTalukdar', '01794807778', 'male', 'riad@gmail.com', NULL, '2021-06-06 23:56:45', '2021-06-06 23:56:45'),
(7, 'Nehal Ahmed', '01794807543', 'male', 'tepawe8338@naymeo.com', NULL, '2021-06-07 00:43:09', '2021-06-07 00:43:09'),
(8, 'Sami Sadith', '01794874432', 'male', 'samisadith@gmail.com', NULL, '2021-06-07 10:28:22', '2021-06-07 10:28:22');

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

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `phone`, `address`, `gender`, `occupation`, `img`, `created_at`, `updated_at`) VALUES
(1, '2', '01794807577', 'Palashbari, Gaibandha', 'Male', 'Student', 'admin/assets/upload/doctor.png', NULL, NULL),
(2, '1', '01794807577', 'Mirppur DOHS', 'Male', 'IT Engineer', 'admin/assets/upload/1698007672169605.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity01` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activity02` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `due` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `patient_id`, `activity01`, `activity02`, `due`, `created_at`, `updated_at`) VALUES
(5, '5', 'prp', 'test', NULL, '2021-06-06 23:56:20', '2021-06-07 10:17:33'),
(6, '6', 'prp', 'test', NULL, '2021-06-07 00:00:09', '2021-06-07 00:00:09'),
(7, '7', 'prp', 'test', '500', '2021-06-07 00:43:09', '2021-06-07 00:43:09'),
(8, '8', 'prp', 'bron', NULL, '2021-06-07 10:28:22', '2021-06-07 10:29:16');

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
(1, 'Munna Khandakar', 'munnashisad@gmail.com', NULL, '$2y$10$dmZV/uMqP4yYFPHuoTm2neNDRki1KuMcHtkRVdPJznJlwuNVT86Eu', 1, 'hcvLlPVjX7orGsIaq0SEKC06qlodJRPNDGmvPcaS17BzIAhbpSUSqyxqVThX', NULL, NULL),
(2, 'Shisad Khandakar', 'shisadkhandakar@gmail.com', NULL, '$2y$10$Vf2eW.UJwhgWLM6sSeJFMumsCK4T0iv2opxW7qtQQedyb70Zo/d0K', NULL, NULL, '2021-04-25 04:15:58', '2021-06-07 23:26:13');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invites`
--
ALTER TABLE `invites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
