-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2023 at 05:27 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticketbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_creds`
--

CREATE TABLE `admin_creds` (
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_creds`
--

INSERT INTO `admin_creds` (`admin_id`, `admin_name`, `admin_pass`, `created_at`, `updated_at`) VALUES
(1, 'bracu', '123', '2023-08-03 07:11:10', '2023-08-03 07:11:10');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` bigint(20) UNSIGNED NOT NULL,
  `seat_id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `transiction_id` bigint(20) UNSIGNED NOT NULL,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `foods` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `seat_id`, `vehicle_id`, `customer_id`, `transiction_id`, `start`, `end`, `date`, `status`, `foods`, `created_at`, `updated_at`) VALUES
(1, 27, 7, 3, 14, 'Dhaka', 'Rajshahi', '2023-08-04', 'Pending', 'Breakfast ', '2023-08-03 07:52:31', '2023-08-03 07:52:31'),
(2, 46, 7, 4, 15, 'Dhaka', 'Rajshahi', '2023-08-04', 'Pending', 'Breakfast ', '2023-08-03 07:53:39', '2023-08-03 07:53:39'),
(3, 52, 7, 4, 16, 'Dhaka', 'Rajshahi', '2023-08-04', 'Pending', 'Lunch Dinner ', '2023-08-03 08:04:44', '2023-08-03 08:04:44');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `house` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zip` int(11) NOT NULL,
  `dob` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `username`, `password`, `name`, `email`, `phone`, `house`, `street`, `area`, `country`, `zip`, `dob`, `created_at`, `updated_at`) VALUES
(3, 'hi', 'hi', 'Azwad', 'mirzashikto@gmail.com', '84', 'u', 'hu', 'huh', 'hu', 84, '2023-08-08', '2023-08-03 07:50:54', '2023-08-03 07:50:54'),
(4, 'hi2', 'hi2', 'Wakil', 'azwadwakil@gmail.com', '984', 'iu', 'hi', 'hi', 'uh', 484, '2023-07-31', '2023-08-03 07:51:36', '2023-08-03 07:51:36');

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
(4, '2023_06_23_110851_create_customers_table', 1),
(5, '2023_07_05_120046_create_routes_table', 1),
(6, '2023_07_05_142746_create_vehicles_table', 1),
(7, '2023_07_05_144958_create_seats_table', 1),
(8, '2023_07_05_150549_create_stopages_table', 1),
(9, '2023_07_07_023759_create_payments_table', 1),
(10, '2023_07_08_150303_create_bookings_table', 1),
(11, '2023_07_16_100253_create_admin_creds_table', 2),
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2023_06_23_110851_create_customers_table', 1),
(16, '2023_07_05_120046_create_routes_table', 1),
(17, '2023_07_05_142746_create_vehicles_table', 1),
(18, '2023_07_05_144958_create_seats_table', 1),
(19, '2023_07_05_150549_create_stopages_table', 1),
(20, '2023_07_07_023759_create_payments_table', 1),
(21, '2023_07_08_150303_create_bookings_table', 1),
(22, '2023_07_16_100253_create_admin_creds_table', 1),
(34, '2014_10_12_000000_create_users_table', 1),
(35, '2014_10_12_100000_create_password_resets_table', 1),
(36, '2019_08_19_000000_create_failed_jobs_table', 1),
(37, '2023_06_23_110851_create_customers_table', 1),
(38, '2023_07_05_120046_create_routes_table', 1),
(39, '2023_07_05_142746_create_vehicles_table', 1),
(40, '2023_07_05_144958_create_seats_table', 1),
(41, '2023_07_05_150549_create_stopages_table', 1),
(42, '2023_07_07_023759_create_payments_table', 1),
(43, '2023_07_08_150303_create_bookings_table', 1),
(44, '2023_07_16_100253_create_admin_creds_table', 1),
(78, '2014_10_12_000000_create_users_table', 1),
(79, '2014_10_12_100000_create_password_resets_table', 1),
(80, '2019_08_19_000000_create_failed_jobs_table', 1),
(81, '2023_06_23_110851_create_customers_table', 1),
(82, '2023_07_05_120046_create_routes_table', 1),
(83, '2023_07_05_142746_create_vehicles_table', 1),
(84, '2023_07_05_144958_create_seats_table', 1),
(85, '2023_07_05_150549_create_stopages_table', 1),
(86, '2023_07_07_023759_create_payments_table', 1),
(87, '2023_07_08_150303_create_bookings_table', 1),
(88, '2023_07_16_100253_create_admin_creds_table', 1);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `transiction_id` bigint(20) UNSIGNED NOT NULL,
  `card_number` varchar(255) NOT NULL,
  `expiry` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`transiction_id`, `card_number`, `expiry`, `amount`, `created_at`, `updated_at`) VALUES
(14, '518448', '2023-09-06', 1580, '2023-08-03 07:52:31', '2023-08-03 07:52:31'),
(15, '4884', '2023-08-31', 1580, '2023-08-03 07:53:39', '2023-08-03 07:53:39'),
(16, '848948', '2023-08-28', 1880, '2023-08-03 08:04:44', '2023-08-03 08:04:44');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `route_id` bigint(20) UNSIGNED NOT NULL,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `distance` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`route_id`, `start`, `end`, `type`, `distance`, `created_at`, `updated_at`) VALUES
(5, 'Dhaka', 'Rajshahi', 'Bus', 1200, '2023-08-03 07:11:28', '2023-08-03 07:11:28');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `seat_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`seat_id`, `name`, `type`, `vehicle_id`, `created_at`, `updated_at`) VALUES
(27, 'A1', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(28, 'A2', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(29, 'A3', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(30, 'A4', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(31, 'B1', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(32, 'B2', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(33, 'B3', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(34, 'B4', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(35, 'C1', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(36, 'C2', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(37, 'C3', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(38, 'C4', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(39, 'D1', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(40, 'D2', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(41, 'D3', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(42, 'D4', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(43, 'E1', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(44, 'E2', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(45, 'E3', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(46, 'E4', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(47, 'F1', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(48, 'F2', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(49, 'F3', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(50, 'F4', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(51, 'G1', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(52, 'G2', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(53, 'G3', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(54, 'G4', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(55, 'H1', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(56, 'H2', 'Normal', 7, '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(57, 'A1', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(58, 'A2', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(59, 'A3', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(60, 'A4', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(61, 'B1', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(62, 'B2', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(63, 'B3', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(64, 'B4', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(65, 'C1', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(66, 'C2', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(67, 'C3', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(68, 'C4', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(69, 'D1', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(70, 'D2', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(71, 'D3', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(72, 'D4', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(73, 'E1', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(74, 'E2', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(75, 'E3', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(76, 'E4', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(77, 'F1', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(78, 'F2', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(79, 'F3', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(80, 'F4', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(81, 'G1', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(82, 'G2', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(83, 'G3', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(84, 'G4', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(85, 'H1', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30'),
(86, 'H2', 'Normal', 8, '2023-08-03 07:13:30', '2023-08-03 07:13:30');

-- --------------------------------------------------------

--
-- Table structure for table `stopages`
--

CREATE TABLE `stopages` (
  `stopage_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `route_id` bigint(20) UNSIGNED NOT NULL,
  `distance_from_start` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stopages`
--

INSERT INTO `stopages` (`stopage_id`, `name`, `route_id`, `distance_from_start`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 5, 0, '2023-08-03 07:11:28', '2023-08-03 07:11:28'),
(2, 'Rajshahi', 5, 1200, '2023-08-03 07:11:28', '2023-08-03 07:11:28'),
(3, 'Tangail', 5, 200, '2023-08-03 09:25:18', '2023-08-03 09:25:18'),
(4, 'Sirajgong', 5, 400, '2023-08-03 09:25:34', '2023-08-03 09:25:34');

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

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `route_id` bigint(20) UNSIGNED NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `price` int(11) NOT NULL,
  `total_seats` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `started_at` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicle_id`, `name`, `category`, `route_id`, `start_time`, `end_time`, `price`, `total_seats`, `description`, `started_at`, `created_at`, `updated_at`) VALUES
(7, 'Greenline', 'Bus', 5, '09:00:00', '19:00:00', 1500, 30, 'Super Deluxe Volvo', '13:12:31', '2023-08-03 07:12:31', '2023-08-03 07:12:31'),
(8, 'Greenline 2', 'Bus', 5, '11:12:00', '23:17:00', 1000, 30, 'Economy', '13:13:30', '2023-08-03 07:13:30', '2023-08-03 07:13:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_creds`
--
ALTER TABLE `admin_creds`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `bookings_seat_id_foreign` (`seat_id`),
  ADD KEY `bookings_vehicle_id_foreign` (`vehicle_id`),
  ADD KEY `bookings_customer_id_foreign` (`customer_id`),
  ADD KEY `bookings_transiction_id_foreign` (`transiction_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`transiction_id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`route_id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`seat_id`),
  ADD KEY `seats_vehicle_id_foreign` (`vehicle_id`);

--
-- Indexes for table `stopages`
--
ALTER TABLE `stopages`
  ADD PRIMARY KEY (`stopage_id`),
  ADD KEY `stopages_route_id_foreign` (`route_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicle_id`),
  ADD KEY `vehicles_route_id_foreign` (`route_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_creds`
--
ALTER TABLE `admin_creds`
  MODIFY `admin_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `transiction_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `route_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `seat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `stopages`
--
ALTER TABLE `stopages`
  MODIFY `stopage_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicle_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`),
  ADD CONSTRAINT `bookings_seat_id_foreign` FOREIGN KEY (`seat_id`) REFERENCES `seats` (`seat_id`),
  ADD CONSTRAINT `bookings_transiction_id_foreign` FOREIGN KEY (`transiction_id`) REFERENCES `payments` (`transiction_id`),
  ADD CONSTRAINT `bookings_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`vehicle_id`);

--
-- Constraints for table `seats`
--
ALTER TABLE `seats`
  ADD CONSTRAINT `seats_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`vehicle_id`);

--
-- Constraints for table `stopages`
--
ALTER TABLE `stopages`
  ADD CONSTRAINT `stopages_route_id_foreign` FOREIGN KEY (`route_id`) REFERENCES `routes` (`route_id`);

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_route_id_foreign` FOREIGN KEY (`route_id`) REFERENCES `routes` (`route_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
