-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2022 at 01:11 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resto`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `full_name`, `username`, `password`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Nestory Sylivester', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `image_name`, `featured`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Vegetables', '1639119368.jpeg', 'Yes', 'Yes', '2021-12-06 07:51:06', '2021-12-10 10:52:02'),
(2, 'Drinks', '1639119495.jpeg', 'Yes', 'Yes', '2021-12-06 07:53:43', '2021-12-10 03:58:15'),
(3, 'Snacks', '1639119617.jpg', 'Yes', 'Yes', '2021-12-06 08:04:48', '2021-12-10 10:51:46'),
(4, 'Bites', '1639119749.jpeg', 'Yes', 'Yes', '2021-12-07 02:13:16', '2021-12-10 04:02:29'),
(6, 'Fruits', '1639119982.jpg', 'Yes', 'Yes', '2021-12-08 02:13:59', '2021-12-10 11:36:22'),
(7, 'Carbohydrate', '1639120249.jpg', 'Yes', 'Yes', '2021-12-08 06:47:33', '2021-12-10 04:10:49'),
(9, 'Protein', '1639120350.jpg', 'No', 'No', '2021-12-08 07:04:26', '2021-12-10 04:12:30'),
(10, 'Fatty', '1639120425.jpg', 'Yes', 'Yes', '2021-12-08 07:05:13', '2021-12-10 04:13:45'),
(11, 'Vitamins', '1639120142.jpg', 'Yes', 'Yes', '2021-12-10 03:01:50', '2021-12-10 04:09:02');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Kitchen', '2021-12-09 09:51:41', '2021-12-09 09:51:41'),
(2, 'Kitchen', '2021-12-09 09:53:45', '2021-12-09 09:53:45');

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
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `featured` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Juice', 'This is details.', '1000.00', '1639127249.jpeg', 2, 'Yes', 'Yes', '2021-12-07 08:47:58', '2021-12-10 06:07:29'),
(2, 'Maandazi', 'Vitafunwa', '500.00', '1639127459.jpeg', 3, 'No', 'No', '2021-12-07 09:36:25', '2021-12-10 06:10:59'),
(3, 'Burger', 'Americano Burger.', '12000.00', '1639127143.jpeg', 3, 'Yes', 'Yes', '2021-12-08 02:12:48', '2021-12-10 06:05:43'),
(4, 'Mango', 'Mango Fruit rich i n vitamins.', '500.00', '1639127215.jpg', 6, 'Yes', 'Yes', '2021-12-08 05:03:50', '2021-12-10 06:06:55'),
(5, 'Cocktail Juice', 'A mixer of cocktails.', '6000.00', '1639122679.jpg', 2, 'Yes', 'Yes', '2021-12-10 04:51:19', '2021-12-10 04:51:19'),
(6, 'Pizza', 'Americano pizza.', '10000.00', '1639147892.jpg', 4, 'Yes', 'Yes', '2021-12-10 11:49:22', '2021-12-10 11:51:32');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `department_id`, `full_name`, `photo`, `address`, `mobile`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Veronica Wambura', '1639063855.jpg', 'Kitunda, Dar es salaam.', '0627897657', '1', '2021-12-09 12:30:55', '2021-12-09 12:30:55');

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
(5, '2021_12_04_201044_create_admins_table', 1),
(6, '2021_12_04_201627_create_categories_table', 2),
(7, '2021_12_04_201835_create_food_table', 3),
(8, '2021_12_04_202528_create_orders_table', 4),
(9, '2021_12_08_070810_add_food_id_to_orders_table', 5),
(10, '2021_12_09_120337_create_staff_table', 6),
(11, '2021_12_09_120844_create_departments_table', 6),
(12, '2021_12_09_145640_create_managers_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_contact` int(11) NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `food_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `price`, `quantity`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`, `created_at`, `updated_at`, `food_id`) VALUES
(1, '12000.00', 2, '24000.00', '2021-12-07 00:00:00', 'Pending', 'John Doe', 718217676, 'doe@gmail.com', 'Msimbazi mivinjeni along Kawawa Road', '2021-12-07 11:51:35', '2021-12-07 12:27:46', 3),
(2, '10000.00', 3, '30000.00', '2021-12-07 00:00:00', 'Paid', 'Smith Doe', 718267878, 'smith@gmail.com', 'Posta, Dar es salaam,', '2021-12-07 12:03:11', '2021-12-07 12:28:53', 1),
(4, '25000.00', 3, '75000.00', '2021-12-07 00:00:00', 'Paid', 'Kendy Doe', 714237272, 'kendy@gmail.com', 'Kijintonyama, Dar es salaam.', '2021-12-07 14:54:09', '2021-12-07 14:54:09', 3),
(5, '1200.00', 2, '2400.00', '2021-12-08 13:34:15', 'Paid', 'Juma Doe', 711777500, 'juma@gmail.com', 'Mbagala, Dar es salaam.', NULL, NULL, 4),
(8, '1200.00', 2, '2400.00', '2021-12-13 00:00:00', 'pending', 'Juma Shabani', 714237272, 'teacher@gmail.com', 'Buza Kanisani', '2021-12-13 08:15:35', '2021-12-13 08:15:35', 1),
(9, '5000.00', 3, '15000.00', '2021-12-13 00:00:00', 'pending', 'Gabriel Lianda', 689567284, 'lianda@gmail.com', 'Kigogo Mbuyuni, Kinondoni, Dar es salaam.', '2021-12-13 08:18:20', '2021-12-13 08:18:20', 3),
(10, '6000.00', 2, '12000.00', '2021-12-13 00:00:00', 'pending', 'Suzana Shirima', 718267878, 'suzana@gmail.com', 'Mabibo hostel, Ubungo, Dar es salaam.', '2021-12-13 08:23:08', '2021-12-13 08:23:08', 5),
(11, '10000.00', 1, '10000.00', '2021-12-13 00:00:00', 'pending', 'Eliya Elias', 636748625, 'eliya@gmail.com', 'Manzese, Kinondoni, Dar es salaam.', '2021-12-13 08:24:49', '2021-12-13 08:24:49', 6);

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
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `department_id`, `full_name`, `photo`, `address`, `mobile`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Amina Juma', '1639064042.jpg', 'Vingunguti, Dar es salaam.', '0654783251', '1', '2021-12-09 12:34:02', '2021-12-09 12:34:02');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
