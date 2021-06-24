-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 08:16 PM
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
(1, 'Munna Khandakar', 'Male', '01794807577', 'munnasahisad@gmail.com', '2021-06-14', '15:22:00', 1, 1, '2021-06-14 03:19:23', '2021-06-14 03:26:56'),
(2, 'Shisad Khandakar', 'Male', '01794941342', 'shisadkhandakar@gmail.com', '2021-06-14', '16:22:00', 1, 1, '2021-06-14 03:20:01', '2021-06-14 03:27:26'),
(3, 'Riadul Islam', 'Male', '01905069807', 'riad@gmail.com', '2021-06-14', '17:22:00', 1, 1, '2021-06-14 03:20:38', '2021-06-14 03:27:19'),
(7, 'Munna Khandakar', 'Male', '01794807577', 'munnasahisad@gmail.com', '2021-06-14', '17:26:00', 1, 1, '2021-06-14 03:24:38', '2021-06-14 03:30:04'),
(9, 'Riadul Islam', 'Male', '01905069807', 'riad@gmail.com', '2021-06-14', '16:27:00', 1, 1, '2021-06-14 03:26:07', '2021-06-14 03:29:14'),
(12, 'Munna Khandakar', 'Male', '01794807577', 'munnasahisad@gmail.com', '2021-06-14', '17:11:00', 1, NULL, '2021-06-14 04:11:38', '2021-06-14 04:23:00'),
(13, 'Munna Khandakar', 'Male', '01794807577', 'munnasahisad@gmail.com', '2021-06-16', '16:22:00', NULL, NULL, '2021-06-14 04:22:24', '2021-06-14 04:22:24'),
(14, 'Munna Khandakar', 'Male', '01794807577', 'munnasahisad@gmail.com', '2021-06-26', '17:22:00', NULL, NULL, '2021-06-14 04:23:00', '2021-06-14 04:23:00'),
(15, 'Munna Khandakar', 'Male', '01794807577', 'munnasahisad@gmail.com', '2021-06-17', '16:30:00', NULL, NULL, '2021-06-14 04:29:00', '2021-06-14 04:29:00'),
(16, 'Shisad Khandakar', 'Male', '01794941342', 'shisadkhandakar@gmail.com', '2021-06-14', '20:04:00', 1, NULL, '2021-06-14 04:29:49', '2021-06-14 07:05:17'),
(17, 'Shisad Khandakar', 'Male', '01794941342', 'shisadkhandakar@gmail.com', '2021-06-21', '17:05:00', NULL, NULL, '2021-06-14 07:05:17', '2021-06-14 07:05:17'),
(18, 'Asif', 'Male', '123456', 'munnashisad@gmail.com', '2021-06-21', '22:48:00', NULL, NULL, '2021-06-14 07:26:53', '2021-06-21 10:48:51'),
(19, 'Zaim', 'male', '1234', 'munnashisad@gmail.com', '2021-06-22', '12:12:00', NULL, NULL, '2021-06-14 08:10:40', '2021-06-22 00:12:11'),
(20, 'asd', 'male', '123', 'munnashisad@gmail.com', '2021-06-22', '20:13:00', NULL, NULL, '2021-06-14 08:12:58', '2021-06-22 00:13:11'),
(21, 'asd', 'male', '123', 'munnashisad@gmail.com', '2021-06-23', '16:49:00', NULL, NULL, '2021-06-14 08:13:02', '2021-06-22 13:49:58'),
(22, 'Homer R Shield', 'male', '9206126491', 'munnashisad@gmail.com', '2021-06-14', '21:36:00', 1, NULL, '2021-06-14 08:36:56', '2021-06-14 08:37:20'),
(23, 'Homer R Shield', 'male', '9206126491', 'munnashisad@gmail.com', '2021-06-14', '20:37:00', NULL, NULL, '2021-06-14 08:37:20', '2021-06-14 08:37:20'),
(24, 'Munna Khandakar', 'Male', '01794807577', 'munnashisad@gmail.com', '2021-06-22', '16:28:00', NULL, NULL, '2021-06-21 10:26:39', '2021-06-21 10:30:31'),
(25, 'Tarikul Abir', 'Male', '01794803213', 'munnashisad@gmail.com', '2021-06-22', '12:10:00', NULL, 1, '2021-06-22 00:06:21', '2021-06-22 00:14:05');

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
(8, '2021_06_07_025021_create_records_table', 1),
(9, '2021_06_22_135026_create_records_table', 2),
(10, '2021_06_22_173730_create_records_table', 3),
(11, '2021_06_22_182158_create_settings_table', 4);

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
('munnashisad@gmail.com', '$2y$10$Gv4swHc.pyOzc/GAc7Fgkua5IKdnm1.LbiZ9CC1EUXOF9vDg3VOHO', '2021-06-21 10:21:34');

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
(1, 'Munna Khandakar', '01794807577', 'Male', 'munnasahisad@gmail.com', NULL, '2021-06-14 03:26:56', '2021-06-14 03:26:56'),
(2, 'Riadul Islam', '01905069807', 'Male', 'riad@gmail.com', NULL, '2021-06-14 03:27:19', '2021-06-14 03:27:19'),
(3, 'Shisad Khandakar', '01794941342', 'Male', 'shisadkhandakar@gmail.com', NULL, '2021-06-14 03:27:26', '2021-06-14 03:27:26'),
(4, 'Tarikul Abir', '01794803213', 'Male', 'abir@gmail.com', NULL, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(5, 'asd', '123', 'male', 'asd@gmail.com', NULL, '2021-06-22 09:05:54', '2021-06-22 09:05:54'),
(6, 'Zaim', '1234', 'male', 'munnashisad@gmail.com', NULL, '2021-06-22 09:14:09', '2021-06-22 09:14:09');

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
(1, '1', '01794807577', '#426 house,#06 road,#06 Avenue, Mirpur DOSH, Mirpur 12,Dhaka', 'Male', 'IT Engineer', 'admin/assets/upload/doctor.png', NULL, NULL),
(2, '2', '+8801726057805', 'house 733  road 11 avenue 4 , Mirpur DOHS, Dhaka', 'male', 'Dermatologist', 'admin/assets/upload/doctor.png', NULL, NULL);

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
(1, '2', 'PRP', '10', '6', '1200', '1000', NULL, '2021-06-22 11:44:22', '2021-06-22 11:44:22'),
(2, '4', 'Botox', '10', '6', '1200', '1200', NULL, '2021-06-22 11:45:36', '2021-06-22 11:58:32'),
(3, '4', 'Botox', '10', '7', '1200', '1200', '2021-06-25', '2021-06-22 11:49:42', '2021-06-22 11:49:42'),
(4, '4', 'Botox', '10', '8', '1200', '700', '2021-06-24', '2021-06-22 12:11:30', '2021-06-22 12:11:30'),
(5, '4', 'Botox', '10', '9', '1200', '1000', '2021-06-24', '2021-06-22 12:13:07', '2021-06-22 12:13:07'),
(6, '4', 'Botox', '10', '9', '1200', '1000', '2021-06-24', '2021-06-22 12:17:27', '2021-06-22 12:17:27'),
(7, '1', 'PRP', '10', '8', '1200', '1000', '2021-06-24', '2021-06-22 13:47:02', '2021-06-22 13:47:02'),
(8, '5', 'Botox', '10', '6', '1200', '1200', '2021-06-26', '2021-06-22 13:52:07', '2021-06-22 13:53:08'),
(9, '2', 'PRP', '10', '7', '1200', '1200', '2021-06-30', '2021-06-22 13:54:52', '2021-06-22 13:54:52');

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
(1, 'starting_hour', '6:00 PM', NULL, '2021-06-22 13:53:50'),
(2, 'office_duration', '2', NULL, '2021-06-22 13:53:50');

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
(1, 'Munna Khandakar', 'munnashisad@gmail.com', NULL, '$2y$10$r8gENUPXw157AHf/1EW0KefjsOx1DrT5IS1jexoXWOG8S.0D/Je.e', 1, 'Sa5OMmHDPaxFYWTyTmINGCfOjBnQoaXMnNkYd42yEkFJpNlGpv4cxqlaal1S', NULL, NULL),
(2, 'Dr. Asif Imran Siddiqui', 'docasifimran@gmail.com', NULL, '$2y$10$94eTgX3E5cUw5p2XXHDPH.coICp41bGnB0lQCUHWyWfzuzsuKDRyW', NULL, 'ZEkSIOSGzPajDnF6XS25xbGa1dVmXmLMHeXqVhj5DkpLjbctCAW7LZWhTOuA', '2021-06-14 06:59:45', '2021-06-14 08:40:24'),
(3, 'ishrat', 'ij01912156822@gmail.com', NULL, '$2y$10$zXe6xknoWAdu1NnNupbnjufgDGZRKaW9mEQxHeyCwCd.Smh7.sNYO', 1, 'rUsLRiu1G63Y4IgbaVOKF9FjLuGmjXDEO2iP4wgtb7LyCMi2bzbpydOYpg3A', '2021-06-14 07:02:16', '2021-06-14 07:03:28');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invites`
--
ALTER TABLE `invites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
