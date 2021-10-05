-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 12:19 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `waktu` date NOT NULL,
  `unit` int(11) NOT NULL,
  `jp` int(11) NOT NULL,
  `jp_d` int(11) NOT NULL,
  `ju` int(11) NOT NULL,
  `ju_d` int(11) NOT NULL,
  `jb` int(11) NOT NULL,
  `jb_d` int(11) NOT NULL,
  `js` int(11) NOT NULL,
  `js_d` int(11) NOT NULL,
  `jt` int(11) NOT NULL,
  `jt_d` int(11) NOT NULL,
  `o_bp` int(11) NOT NULL,
  `o_bup` int(11) NOT NULL,
  `o_bi` int(11) NOT NULL,
  `o_kd` int(11) NOT NULL,
  `o_ilg` int(11) NOT NULL,
  `o_tb` int(11) NOT NULL,
  `o_lpk` int(11) NOT NULL,
  `o_s` int(11) NOT NULL,
  `o_ln` int(11) NOT NULL,
  `k_ls` int(11) NOT NULL,
  `k_gas` int(11) NOT NULL,
  `k_lln` int(11) NOT NULL,
  `k_ms` int(11) NOT NULL,
  `k_rk` int(11) NOT NULL,
  `k_ln` int(11) NOT NULL,
  `jiwa_petugas_luka` int(11) NOT NULL,
  `jiwa_petugas_mati` int(11) NOT NULL,
  `jiwa_warga_luka` int(11) NOT NULL,
  `jiwa_warga_mati` int(11) NOT NULL,
  `rugi_areal` int(11) NOT NULL,
  `rugi_bp_` int(11) NOT NULL,
  `rugi_bup_` int(11) NOT NULL,
  `rugi_bi_` int(11) NOT NULL,
  `rugi_kd_` int(11) NOT NULL,
  `rugi_ilg_` int(11) NOT NULL,
  `rugi_tb_` int(11) NOT NULL,
  `rugi_lpk_` int(11) NOT NULL,
  `rugi_s_` int(11) NOT NULL,
  `rugi_ln_` int(11) NOT NULL,
  `rugi_kk` int(11) NOT NULL,
  `rugi_jiwa` int(11) NOT NULL,
  `rugi_rupiah` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `created_at`, `updated_at`, `waktu`, `unit`, `jp`, `jp_d`, `ju`, `ju_d`, `jb`, `jb_d`, `js`, `js_d`, `jt`, `jt_d`, `o_bp`, `o_bup`, `o_bi`, `o_kd`, `o_ilg`, `o_tb`, `o_lpk`, `o_s`, `o_ln`, `k_ls`, `k_gas`, `k_lln`, `k_ms`, `k_rk`, `k_ln`, `jiwa_petugas_luka`, `jiwa_petugas_mati`, `jiwa_warga_luka`, `jiwa_warga_mati`, `rugi_areal`, `rugi_bp_`, `rugi_bup_`, `rugi_bi_`, `rugi_kd_`, `rugi_ilg_`, `rugi_tb_`, `rugi_lpk_`, `rugi_s_`, `rugi_ln_`, `rugi_kk`, `rugi_jiwa`, `rugi_rupiah`) VALUES
(1, '2021-09-20 05:32:31', '2021-09-20 05:32:31', '2020-01-01', 401, 18, 15, 19, 18, 17, 15, 43, 42, 28, 20, 35, 24, 3, 6, 43, 0, 1, 5, 8, 81, 12, 1, 9, 1, 21, 0, 0, 3, 4, 5325, 98, 22, 3, 10, 43, 0, 1, 5, 8, 148, 616, 22771700000),
(2, '2021-09-20 05:32:32', '2021-09-20 05:32:32', '2020-01-01', 401, 18, 15, 19, 18, 17, 15, 43, 42, 28, 20, 35, 24, 3, 6, 43, 0, 1, 5, 8, 81, 12, 1, 9, 1, 21, 0, 0, 3, 4, 5325, 98, 22, 3, 10, 43, 0, 1, 5, 8, 148, 616, 22771700000),
(3, '2021-09-20 05:32:33', '2021-09-20 05:32:33', '2020-01-01', 401, 18, 15, 19, 18, 17, 15, 43, 42, 28, 20, 35, 24, 3, 6, 43, 0, 1, 5, 8, 81, 12, 1, 9, 1, 21, 0, 0, 3, 4, 5325, 98, 22, 3, 10, 43, 0, 1, 5, 8, 148, 616, 22771700000),
(4, '2021-09-20 05:37:23', '2021-09-20 05:37:23', '2020-02-01', 532, 21, 20, 24, 23, 26, 20, 32, 30, 29, 29, 38, 26, 3, 7, 49, 0, 0, 0, 9, 81, 12, 1, 9, 1, 21, 0, 0, 1, 1, 5325, 117, 35, 2, 8, 49, 0, 0, 0, 11, 132, 372, 13420800000),
(5, '2021-09-20 05:45:08', '2021-09-20 05:45:08', '2020-03-01', 350, 12, 10, 28, 25, 20, 19, 37, 35, 28, 25, 38, 17, 3, 11, 35, 1, 0, 9, 11, 75, 24, 1, 9, 0, 16, 0, 0, 1, 11, 33551, 46, 20, 3, 12, 33, 1, 0, 9, 13, 57, 196, 8688400000),
(6, '2021-09-20 07:08:37', '2021-09-20 07:08:37', '2020-04-01', 375, 7, 6, 27, 25, 25, 24, 28, 25, 28, 28, 27, 21, 0, 5, 52, 3, 1, 2, 4, 88, 11, 0, 5, 1, 10, 0, 1, 5, 7, 4443, 82, 24, 0, 6, 52, 3, 2, 2, 6, 99, 371, 33263626000),
(7, '2021-09-30 08:29:13', '2021-09-30 08:29:13', '2020-05-01', 432, 15, 15, 18, 18, 17, 17, 34, 30, 30, 30, 34, 20, 0, 10, 35, 0, 2, 5, 8, 63, 17, 1, 11, 2, 20, 0, 0, 0, 6, 7925, 192, 21, 0, 11, 36, 0, 2, 6, 6, 497, 1047, 10730050000),
(8, '2021-09-30 08:40:39', '2021-09-30 08:40:39', '2020-06-01', 454, 10, 10, 27, 25, 39, 35, 26, 25, 23, 23, 37, 22, 1, 6, 34, 6, 2, 10, 7, 74, 11, 0, 13, 5, 22, 0, 4, 0, 3, 23199, 330, 24, 1, 12, 34, 6, 4, 10, 7, 395, 1470, 15135875000),
(9, '2021-09-30 09:37:45', '2021-09-30 09:37:45', '2018-01-01', 154, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 11, 1, 11, 1, 11, 1, 11, 1, 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(10, '2021-09-30 09:38:43', '2021-09-30 09:38:43', '2022-02-01', 12, 1, 1, 1, 1, 11, 1, 1, 1, 1, 1, 1, 1, 1, 11, 1, 1, 1, 1, 1, 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

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
(4, '2021_06_23_125556_create_events_table', 1);

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
(1, 'venty', 'ventyatitya@gmail.com', NULL, '$2y$10$v3/MJWJPshT/dT38JrLaVenL/hg1nfr8rZdPDzPrZj.H9AxvB733a', NULL, '2021-09-20 05:22:25', '2021-09-20 05:22:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
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
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
