-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 09:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home_services`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Category_Name` varchar(255) NOT NULL,
  `Category_Image` varchar(255) NOT NULL,
  `Category_Description` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `Category_Name`, `Category_Image`, `Category_Description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 'Installation', 'sq.png', 'setting up and configuring equipment or machinery in a specific location. This includes assembling, connecting, and testing equipment, as well as troubleshooting and making any necessary adjustments.', NULL, '2023-01-29 09:48:07', '2023-01-29 09:48:07'),
(4, 'Plumbing', 's.png', 'installing, repairing, and maintaining pipes, fixtures, and other plumbing systems used for water distribution and waste removal in buildings.', NULL, '2023-01-29 09:54:06', '2023-01-29 09:54:06'),
(5, 'Electricity', 'wdwdwd.png', 'installation, maintenance, and repair of electrical systems and components in a home or building.', NULL, '2023-01-29 09:56:09', '2023-01-29 09:56:09');

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
(5, '2023_01_24_100041_create_categories_table', 1),
(6, '2023_01_24_114625_create_servicess_table', 1),
(7, '2023_01_24_120011_create_reservations_table', 1),
(8, '2023_01_26_085645_add_softdelete_column_to_services_table', 1),
(9, '2023_01_26_091601_add_softdelete_column_to_users_table', 1),
(10, '2023_01_27_091309_adds_soft_deletes_to__reservations_table', 1);

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
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Service_Id` bigint(20) UNSIGNED NOT NULL,
  `User_Id` bigint(20) UNSIGNED NOT NULL,
  `City` varchar(255) NOT NULL,
  `Street_Name` varchar(255) NOT NULL,
  `Building_Number` varchar(255) NOT NULL,
  `Start_Time` datetime NOT NULL,
  `End_Time` datetime DEFAULT NULL,
  `Total_Price` double DEFAULT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `Service_Id`, `User_Id`, `City`, `Street_Name`, `Building_Number`, `Start_Time`, `End_Time`, `Total_Price`, `Status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(27, 7, 4, 'Amman', 'abotammam', '123123', '2023-01-31 21:53:00', '2023-01-31 23:53:00', 20, 'Rejected', '2023-01-29 10:53:37', '2023-01-30 05:01:42', '2023-01-30 05:01:42'),
(28, 6, 4, 'Amman', 'abotammam', '1', '2023-02-11 17:07:00', '2023-02-11 20:07:00', 30, 'Pending', '2023-01-29 11:07:21', '2023-01-29 11:07:54', '2023-01-29 11:07:54'),
(29, 6, 4, 'Amman', 'abotammam', '25', '2023-02-10 11:02:00', '2023-02-10 14:02:00', 30, '', '2023-01-30 05:02:04', '2023-01-30 05:30:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Service_Name` varchar(255) NOT NULL,
  `Category_id` bigint(20) UNSIGNED NOT NULL,
  `Service_Description` varchar(255) NOT NULL,
  `Service_Image` varchar(255) NOT NULL,
  `Service_Price` double NOT NULL,
  `Service_Duration` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `Service_Name`, `Category_id`, `Service_Description`, `Service_Image`, `Service_Price`, `Service_Duration`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'Dishwasher installation', 3, 'Setting up and connecting a dishwasher in a kitchen. includes such as assembling the dishwasher, connecting the water and drainage lines, hooking up the electrical supply and testing the dishwasher to ensure it is working correctly.', 'sd.png', 30, 3, '2023-01-29 10:03:06', '2023-01-29 10:03:06', NULL),
(7, 'Installing door', 3, 'Attaching a door to a door frame in order to provide an entry or exit point to a room or building. including measuring the door and the door frame to ensure a proper fit, cutting the door to size if necessary, attaching hinges to the door and the frame.', 'fdefefe.png', 20, 2, '2023-01-29 10:11:47', '2023-01-29 10:11:47', NULL),
(8, 'Bath installation', 3, 'setting up and connecting a bathtub in a bathroom. including tasks such as assembling the bathtub, connecting the plumbing and drainage lines, making sure the bathtub is properly level.', 'qq.png', 60, 3, '2023-01-29 10:14:01', '2023-01-29 10:14:01', NULL),
(9, 'Washing machine installation', 3, 'Setting up and connecting a washing machine in a laundry room. including assembling the washing machine, connecting the water and drainage lines, and making sure the washing machine is properly level.', 'a.png', 25, 1, '2023-01-29 10:26:37', '2023-01-29 10:26:37', NULL),
(10, 'TV installation', 3, 'setting up and connecting a television in a room. including tasks such as mounting the television to a wall or stand, connecting the TV to power and any necessary cables .', 'ssqws.png', 15, 1, '2023-01-29 10:30:38', '2023-01-29 10:30:38', NULL),
(11, 'Toilet repair', 4, 'fixing or replacing a toilet that is not working properly. include  unclogging the toilet, fixing leaks, adjusting the water level, and replacing worn or damaged parts.', 'd.png', 15, 2, '2023-01-29 10:34:15', '2023-01-29 10:34:15', NULL),
(12, 'repair water leaks', 4, 'Identifying and fixing leaks in a plumbing system. including both visible and hidden leaks, and may involve tasks such as locating the source of the leak, repairing or replacing damaged pipes or fixtures.', 'Untitled-1.png', 20, 2, '2023-01-29 10:36:46', '2023-01-29 10:36:46', NULL),
(13, 'Lighting repair', 5, 'Identifying and fixing problems with lighting fixtures, including lamps, light bulbs, and other electrical components. This can include tasks such as replacing burned-out bulbs, troubleshooting electrical issues.', 'wewEwew.png', 20, 2, '2023-01-29 10:40:44', '2023-01-29 10:40:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `Phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `User_Image` varchar(255) DEFAULT NULL,
  `Role` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `Phone`, `password`, `User_Image`, `Role`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'talab', 'talab.yaseen@gmail.com', NULL, '123', '123', 'logo5-removebg-preview.png', 'ADM', NULL, '2023-01-27 17:02:38', '2023-01-27 17:02:38', NULL),
(3, 'talab', 'talab.yaseen1@gmail.com', NULL, '0796543210', '$2y$10$kV7ZBHww/q6QnjB3IUStJec.kX/jxsiXITIXikizZ.QqNf2CIoMxW', NULL, 'ADM', NULL, '2023-01-29 09:12:13', '2023-01-29 09:12:13', NULL),
(4, 'talab', 'talab.yaseen2@gmail.com', NULL, '0796321654', '$2y$10$/MVlbhsvbnxXa4spWxSh6.7gJDGYrPOK2Mvj7i2qULy./5lB/Kh7O', NULL, 'ADM', NULL, '2023-01-29 09:39:59', '2023-01-29 09:39:59', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_service_id_foreign` (`Service_Id`),
  ADD KEY `reservations_user_id_foreign` (`User_Id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_category_id_foreign` (`Category_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_service_id_foreign` FOREIGN KEY (`Service_Id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservations_user_id_foreign` FOREIGN KEY (`User_Id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_category_id_foreign` FOREIGN KEY (`Category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
