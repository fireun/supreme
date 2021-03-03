-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2020 at 08:23 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supreme`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `productID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `orderID`, `userID`, `quantity`, `productID`, `created_at`, `updated_at`) VALUES
(53, '1', '5', 1, '14', '2020-09-02 06:09:57', '2020-09-02 06:12:35'),
(56, '6', '5', 1, '15', '2020-09-02 06:38:15', '2020-09-02 06:38:18'),
(57, '7', '5', 1, '18', '2020-09-02 08:53:37', '2020-09-02 08:53:47'),
(58, '7', '5', 1, '13', '2020-09-02 08:53:41', '2020-09-02 08:53:47'),
(59, '8', '5', 1, '14', '2020-09-02 18:58:45', '2020-09-02 18:58:48'),
(60, '9', '5', 1, '13', '2020-09-02 19:00:17', '2020-09-02 19:00:24'),
(62, '10', '5', 1, '15', '2020-09-02 19:03:13', '2020-09-02 19:03:16'),
(63, '11', '5', 1, '15', '2020-09-02 19:04:33', '2020-09-02 19:04:35'),
(64, '12', '5', 1, '18', '2020-09-02 20:21:17', '2020-09-02 20:21:30'),
(65, '13', '5', 1, '15', '2020-09-02 20:54:11', '2020-09-02 20:54:17'),
(66, '14', '5', 1, '15', '2020-09-02 20:55:03', '2020-09-02 20:55:07'),
(67, '15', '5', 1, '15', '2020-09-02 21:50:55', '2020-09-02 21:50:58');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(5, 'Hoodie', 'hoodie.jpg', '2020-08-30 01:46:47', '2020-08-30 01:46:47'),
(6, 'Pants', 'pants.png', '2020-08-30 01:46:57', '2020-08-30 01:46:57'),
(7, 'T-shirt', 'shirt.jpg', '2020-08-30 02:49:11', '2020-08-30 02:49:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(5, '2020_07_28_073043_create_products_table', 2),
(11, '2020_07_28_072931_create_categories_table', 3),
(12, '2020_08_11_044717_create_carts_table', 4),
(14, '2020_08_15_045926_create_customer_table', 6),
(15, '2020_08_25_025857_laratrust_setup_tables', 7),
(18, '2020_08_14_073836_create_orders_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paymentStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(10) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNo` int(10) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postalCode` int(10) UNSIGNED NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `paymentStatus`, `userID`, `amount`, `status`, `phoneNo`, `address`, `city`, `postalCode`, `country`, `created_at`, `updated_at`) VALUES
(1, 'paid', '5', 109, 'Shipping', 123456789, 'No1,Tman Selantan,Jalan Selantan', 'Johor', 82000, 'Malaysia', '2020-09-02 06:12:35', '2020-09-02 22:13:44'),
(6, 'paid', '5', 109, 'Shipping', 123456789, 'No1,Tman Selantan,Jalan Selantan', 'Johor', 82000, 'Malaysia', '2020-09-02 06:38:18', '2020-09-02 20:19:43'),
(7, 'paid', '5', 487, 'Shipping', 123456789, 'No1,Tman Selantan,Jalan Selantan', 'Johor', 82000, 'Malaysia', '2020-09-02 08:53:47', '2020-09-02 09:41:06'),
(8, 'paid', '5', 109, 'Shipping', 123456789, 'No1,Tman Selantan,Jalan Selantan', 'Johor', 82000, 'Malaysia', '2020-09-02 18:58:48', '2020-09-02 20:29:38'),
(9, 'paid', '5', 109, 'Shipping', 123456789, 'No1,Tman Selantan,Jalan Selantan', 'Johor', 82000, 'Malaysia', '2020-09-02 19:00:24', '2020-09-02 20:34:48'),
(10, 'paid', '5', 109, 'Shipping', 123456789, 'No1,Tman Selantan,Jalan Selantan', 'Johor', 82000, 'Malaysia', '2020-09-02 19:03:16', '2020-09-02 20:35:46'),
(11, 'paid', '5', 109, 'Shipping', 123456789, 'No1,Tman Selantan,Jalan Selantan', 'Johor', 82000, 'Malaysia', '2020-09-02 19:04:35', '2020-09-02 20:36:57'),
(12, 'paid', '5', 269, 'Approve', 123456789, 'No1,Tman Selantan,Jalan Selantan', 'Johor', 82000, 'Malaysia', '2020-09-02 20:21:30', '2020-09-02 20:24:02'),
(13, 'pending', '5', 109, '', 123456789, 'No1,Tman Selantan,Jalan Selantan', 'Johor', 82000, 'Malaysia', '2020-09-02 20:54:17', '2020-09-02 20:54:22'),
(14, 'paid', '5', 109, 'Shipping', 0, '', '', 0, '', '2020-09-02 20:55:07', '2020-09-02 21:52:39'),
(15, 'paid', '5', 109, 'Approve', 123456789, 'No1,Tman Selantan,Jalan Selantan', 'Johor', 82000, 'Malaysia', '2020-09-02 21:50:58', '2020-09-02 21:51:48');

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
('rjgaming0619@gmail.com', '$2y$10$0UzvqTvEpaiZAAczPdlCF.ekfpdBrVedQP.d2aGHXG7a3LqWRO7yi', '2020-08-09 04:04:27');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'create-users', 'Create Users', 'Create Users', '2020-08-24 19:05:37', '2020-08-24 19:05:37'),
(2, 'read-users', 'Read Users', 'Read Users', '2020-08-24 19:05:37', '2020-08-24 19:05:37'),
(3, 'update-users', 'Update Users', 'Update Users', '2020-08-24 19:05:37', '2020-08-24 19:05:37'),
(4, 'delete-users', 'Delete Users', 'Delete Users', '2020-08-24 19:05:37', '2020-08-24 19:05:37'),
(5, 'create-acl', 'Create Acl', 'Create Acl', '2020-08-24 19:05:37', '2020-08-24 19:05:37'),
(6, 'read-acl', 'Read Acl', 'Read Acl', '2020-08-24 19:05:37', '2020-08-24 19:05:37'),
(7, 'update-acl', 'Update Acl', 'Update Acl', '2020-08-24 19:05:37', '2020-08-24 19:05:37'),
(8, 'delete-acl', 'Delete Acl', 'Delete Acl', '2020-08-24 19:05:37', '2020-08-24 19:05:37'),
(9, 'read-profile', 'Read Profile', 'Read Profile', '2020-08-24 19:05:37', '2020-08-24 19:05:37'),
(10, 'update-profile', 'Update Profile', 'Update Profile', '2020-08-24 19:05:37', '2020-08-24 19:05:37'),
(11, 'create-profile', 'Create Profile', 'Create Profile', '2020-08-24 19:05:38', '2020-08-24 19:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_user`
--

INSERT INTO `permission_user` (`permission_id`, `user_id`, `user_type`) VALUES
(9, 4, 'App\\User'),
(10, 4, 'App\\User'),
(11, 4, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `categoryID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `quantity`, `categoryID`, `created_at`, `updated_at`) VALUES
(13, 'Supreme T-Shirt \"Dot\"', 'Beautiful \"Dot\" with best quality', 109.00, 'T-shirt 2.jpg', 10, '7', '2020-08-30 19:07:53', '2020-08-30 19:07:53'),
(14, 'Supreme 18 SS T-Shirt #004', '2020 models and hot sale', 109.00, 'T-shirt 1.jpg', 20, '7', '2020-08-30 19:11:23', '2020-08-30 19:11:23'),
(15, 'Supreme X Anti Social Social Club T-Shirt', 'Famous model in 2020', 109.00, 'T-shirt 4.jpg', 12, '7', '2020-08-30 19:13:40', '2020-08-30 19:13:40'),
(16, 'Supreme X Thrasher \"Hoodie\"', 'Hoodie with best quality', 229.00, 'Hoddie 1.jpg', 10, '5', '2020-08-30 19:16:18', '2020-08-30 19:16:18'),
(17, 'Supreme X Off White Hoodie', 'Limited Stock and Selling Fast', 269.00, 'Hoddie 2.jpg', 20, '5', '2020-08-30 19:17:16', '2020-08-30 19:17:16'),
(18, 'Supreme 18aw 05 Hoodie', 'Just show your attitude with this hoodie', 269.00, 'Hoddie 3.jpg', 9, '5', '2020-08-30 19:18:10', '2020-08-30 19:18:10'),
(19, 'Supreme Small Box Logo Short Pants', 'Best Quality and Easy to Wear', 149.00, 'Pants 1.jpg', 5, '6', '2020-08-30 19:20:08', '2020-08-30 19:20:08'),
(20, 'Supreme Small Logo \"LEAF\" Sweat Pants', 'Suitable for sport', 209.00, 'Pants 2.jpg', 10, '6', '2020-08-30 19:21:26', '2020-08-30 19:21:26'),
(21, 'Supreme Small Box Logo Sweat Pants', 'Small logo that not obvious', 209.00, 'Pants 3.jpg', 20, '6', '2020-08-30 19:22:04', '2020-08-30 19:22:04');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'superadministrator', 'Superadministrator', 'Superadministrator', '2020-08-24 19:05:36', '2020-08-24 19:05:36'),
(2, 'administrator', 'Administrator', 'Administrator', '2020-08-24 19:05:38', '2020-08-24 19:05:38'),
(3, 'user', 'User', 'User', '2020-08-24 19:05:38', '2020-08-24 19:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\User'),
(2, 2, 'App\\User'),
(3, 3, 'App\\User'),
(3, 5, 'App\\User');

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
(1, 'Superadministrator', 'superadministrator@app.com', NULL, '$2y$10$JexzE709LK9pOTrCY2yKMOnHCh.yqaLJUUkjnaWYi6/rwK8OO5KWy', NULL, '2020-08-24 19:05:38', '2020-08-24 19:05:38'),
(2, 'Administrator', 'administrator@app.com', NULL, '$2y$10$jpFUpL3aX6aHKsbG1NVuQuhB4lUHakvvKOUNAIr5Y0SwoYMLULuHG', NULL, '2020-08-24 19:05:38', '2020-08-24 19:05:38'),
(3, 'JY', 'user@app.com', NULL, '$2y$10$dCi6RbjSdoZ/lFvkodgDx.o4ItYXWp4YveaEMPEUEikUfu/TDPUZy', NULL, '2020-08-24 19:05:38', '2020-08-24 19:05:38'),
(4, 'Cru User', 'cru_user@app.com', NULL, '$2y$10$Odtgi3WUgzwyvPD25aM8Re/m7DQh/cDDdPPnDe36AjJD1sZUBxYDC', 'XJQu86AL8A', '2020-08-24 19:05:38', '2020-08-24 19:05:38'),
(5, 'wx', 'woonxun@gmail.com', NULL, '$2y$10$gJr2qbeRdFRvtvZe.W7XsurW1YecJMJBNTO0Nedb8Wtz1o448my.O', NULL, '2020-09-01 05:42:00', '2020-09-01 05:42:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
