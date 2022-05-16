-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 04:32 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+06:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `expensecategories`
--

CREATE TABLE `expensecategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expensecategories`
--

INSERT INTO `expensecategories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Staff Salary', '2019-12-07 10:55:10', '2019-12-07 10:55:10'),
(2, 'Ingridient', '2019-12-07 10:56:51', '2019-12-07 10:56:51'),
(3, 'test', '2019-12-07 10:57:16', '2019-12-07 10:57:16'),
(4, 'test2', '2019-12-07 10:57:38', '2019-12-07 10:57:38');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `category`, `amount`, `date`, `created_at`, `updated_at`) VALUES
(4, 'Ingridient', 777, '12-9-2019', '2019-12-09 07:02:23', '2019-12-09 07:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `foodcategories`
--

CREATE TABLE `foodcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foodcategories`
--

INSERT INTO `foodcategories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Dinner', '2019-12-06 06:31:05', '2019-12-06 06:31:05'),
(2, 'Lunch', '2019-12-06 06:39:50', '2019-12-06 06:39:50'),
(3, 'Breakfast', '2019-12-06 06:40:02', '2019-12-06 06:40:02'),
(4, 'test', '2019-12-06 06:46:02', '2019-12-06 06:46:02'),
(5, 'hhj', '2019-12-06 06:46:32', '2019-12-06 06:46:32'),
(6, 'hh', '2019-12-06 06:47:03', '2019-12-06 06:47:03');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foodname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fooddetails` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foodprice` int(11) NOT NULL,
  `foodcategory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foodimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `foodname`, `fooddetails`, `foodprice`, `foodcategory`, `foodimage`, `created_at`, `updated_at`) VALUES
(1, 'Chicken fry', 'chiken', 100, 'Breakfast', '1984493532.jpg', '2019-12-06 05:42:18', '2019-12-09 05:27:41'),
(2, 'Beef Stack', 'Beef, Flour, Bun', 9, 'Breakfast', '818739823.jpg', '2019-12-06 11:01:18', '2019-12-09 07:09:17'),
(5, 'cake', 'cake cake', 455, 'Breakfast', '1620052634.jpg', '2019-12-08 02:32:53', '2019-12-08 02:32:53'),
(6, 'dklfdkjf', 'dfjkdjf', 445, 'Breakfast', '887189001.jpg', '2019-12-08 02:33:37', '2019-12-08 02:33:37'),
(7, 'hhh', 'hjjj', 11, 'Breakfast', '419710040.jpg', '2019-12-08 02:34:18', '2019-12-08 02:34:18'),
(8, 'ghfhfh', 'iutjyjy', 564, 'Breakfast', '193612449.jpg', '2019-12-09 04:53:50', '2019-12-09 04:53:50');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'rat', 'rat@gmail.com', 'Rat', 'test message', '2019-12-08 02:00:57', '2019-12-08 02:00:57'),
(3, 'rat', 'rat@gmail.com', 'test subject', 'test subject', '2019-12-08 02:01:45', '2019-12-08 02:01:45'),
(4, 'test', 'test@test.com', 'test subject', 'This is a message.', '2019-12-08 02:02:44', '2019-12-08 02:02:44');

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
(3, '2019_12_06_102422_create_menus_table', 1),
(4, '2019_12_06_114758_create_foodcategories_table', 2),
(5, '2019_12_06_153610_create_orders_table', 3),
(7, '2019_12_07_095829_create_reservations_table', 4),
(8, '2019_12_07_102516_create_newadmins_table', 5),
(9, '2019_12_07_111132_create_messages_table', 6),
(10, '2019_12_07_112921_create_staffs_table', 7),
(11, '2019_12_07_154618_create_expenses_table', 8),
(12, '2019_12_07_154639_create_expensecategories_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `newadmins`
--

CREATE TABLE `newadmins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newadmins`
--

INSERT INTO `newadmins` (`id`, `name`, `email`, `password`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'rat', 'rat@gmail.com', 'pass1234', '01965088417', '2019-12-16 18:00:00', '2019-12-30 18:00:00'),
(2, 'fat', 'fat@gmail.com', 'pass1234', '01965000248', '2019-12-07 04:56:38', '2019-12-07 04:56:38'),
(3, 'test', 'test@test.com', 'test123', '0123456789', '2019-12-07 05:24:58', '2019-12-07 05:24:58');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordertype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foodlist` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalprice` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `location`, `ordertype`, `foodlist`, `totalprice`, `status`, `created_at`, `updated_at`) VALUES
(2, 'rat', 'rat@gmail.com', '0283767467', 'Uttara, Dhaka', 'Delivery', 'Burger(2), Chicken(3)', 400, 'Pending', '2019-12-24 18:00:00', '2019-12-24 18:00:00'),
(3, 'dfvbddf', 'dsscvs@cdvd.com', '32424324', 'ddxsdcdscs', 'Delivery', 'Chicken fry, cake, ghfhfh', 1119, 'Pending', '2019-12-09 09:28:42', '2019-12-09 09:28:42');

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
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tableno` int(11) NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noofguest` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `email`, `phone`, `tableno`, `date`, `time`, `noofguest`, `status`, `created_at`, `updated_at`) VALUES
(2, 'rat', 'rat@gmail.com', '01956478522', 9, '12-45-2123', '12:12 PM', 4, 'Approved', '2019-12-07 11:41:25', '2019-12-09 06:10:19'),
(4, 'helo', 'helo@helo.com', '457', 4, '15-12-2019', '12:12 PM', 1, 'Pending', '2019-12-07 11:44:47', '2019-12-07 11:44:47'),
(5, 'fat', 'raj@gmail.com', '0123456789', 4, '15-12-2019', '12:12 PM', 11, 'Pending', '2019-12-08 02:37:49', '2019-12-08 02:37:49'),
(6, 'kjfdskd', 'ksdjfksdfj@kdfjk.com', 'kjdfdkjf', 6, '15-12-2019', '12:12 PM', 2, 'Pending', '2019-12-08 02:40:33', '2019-12-08 02:40:33');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rat', 'rat@gmail.com', NULL, '$2y$10$wT.ALCsCKc1oL/J3f9efdOe/bGN2v.Edrrga1P8cT//5fNiZlNjrS', NULL, '2019-12-08 06:33:53', '2019-12-08 06:33:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expensecategories`
--
ALTER TABLE `expensecategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodcategories`
--
ALTER TABLE `foodcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newadmins`
--
ALTER TABLE `newadmins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
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
-- AUTO_INCREMENT for table `expensecategories`
--
ALTER TABLE `expensecategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `foodcategories`
--
ALTER TABLE `foodcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `newadmins`
--
ALTER TABLE `newadmins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
