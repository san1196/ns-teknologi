-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.38-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5975
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for ns_teknologi
CREATE DATABASE IF NOT EXISTS `ns_teknologi` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ns_teknologi`;

-- Dumping structure for table ns_teknologi.about
CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keterangan` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table ns_teknologi.about: ~3 rows (approximately)
/*!40000 ALTER TABLE `about` DISABLE KEYS */;
INSERT INTO `about` (`id`, `keterangan`, `created_at`, `updated_at`) VALUES
	(5, 'Dimulai dari sebuah ide dan niat yang kuat serta menggabungkan kemampuan Teamwork di berbagai bidang untuk menyediakan SOLUSI terutamanya dalam bidang infrastruktur elektronik, IT dan sistem IP lainnya.', '2020-07-11 13:52:01', '2020-07-11 14:08:55'),
	(6, 'NS Tech sebuah perusahaan yang bergerak dibidang pengadaan barang dan jasa Network Infrastruktur, Elektronik & IT.', '2020-07-11 14:10:42', '2020-07-11 14:10:42'),
	(7, 'NS Tech hadir untuk menciptakan solusi dari setiap orang yang memerlukan teknologi masakini.', '2020-07-11 14:11:07', '2020-07-11 14:11:07');
/*!40000 ALTER TABLE `about` ENABLE KEYS */;

-- Dumping structure for table ns_teknologi.brand
CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text,
  `keterangan` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table ns_teknologi.brand: ~8 rows (approximately)
/*!40000 ALTER TABLE `brand` DISABLE KEYS */;
INSERT INTO `brand` (`id`, `image`, `keterangan`, `created_at`, `updated_at`) VALUES
	(7, 'cisco.png', 'Cisco', '2020-07-12 16:37:15', '2020-07-12 16:37:15'),
	(8, 'mikrotik.png', 'Mikrotik', '2020-07-12 16:37:41', '2020-07-12 16:37:41'),
	(9, 'panasonic.png', 'Panasonic', '2020-07-12 16:43:03', '2020-07-12 16:43:03'),
	(10, 'nec.png', 'NEC', '2020-07-12 16:44:34', '2020-07-12 16:44:34'),
	(11, 'hp.png', 'HP', '2020-07-12 16:46:41', '2020-07-12 16:46:41'),
	(12, 'huawei.png', 'Huawei', '2020-07-12 16:48:45', '2020-07-12 16:48:45'),
	(13, 'samsung.png', 'Samsung', '2020-07-12 16:52:16', '2020-07-12 16:52:16'),
	(14, 'dell.png', 'Dell', '2020-07-12 16:53:51', '2020-07-12 16:53:51');
/*!40000 ALTER TABLE `brand` ENABLE KEYS */;

-- Dumping structure for table ns_teknologi.client
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text,
  `keterangan` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table ns_teknologi.client: ~3 rows (approximately)
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` (`id`, `image`, `keterangan`, `created_at`, `updated_at`) VALUES
	(2, 'home.png', 'Home Credit', '2020-07-12 15:39:52', '2020-07-12 15:45:15'),
	(3, 'simgroup.png', 'SIMGROUP', '2020-07-12 15:46:50', '2020-07-12 15:46:50'),
	(4, 'login.png', 'Login Indonesia', '2020-07-12 15:49:17', '2020-07-12 16:02:55');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;

-- Dumping structure for table ns_teknologi.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lokasi` text,
  `alamat` text,
  `telepon` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table ns_teknologi.contact: ~0 rows (approximately)
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` (`id`, `lokasi`, `alamat`, `telepon`, `email`, `created_at`, `updated_at`) VALUES
	(9, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.241647226428!2d106.82485951417775!3d-6.3627637953957015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec1a804e8b85%3A0xd7bf80e1977cea07!2sUniversitas%20Indonesia!5e0!3m2!1sid!2sid!4v1594648319551!5m2!1sid!2sid', 'Jl. Delima I Rt. 07/05, No. 57, Srengseng Sawah Jagakarsa, Jakarta Selatan 12640', '+62-8389-8445-330', 'nakulasadewakomputer@gmail.com', '2020-07-13 13:52:25', '2020-07-13 14:05:37');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Dumping structure for table ns_teknologi.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ns_teknologi.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table ns_teknologi.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ns_teknologi.migrations: ~2 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 2),
	(3, '2019_08_19_000000_create_failed_jobs_table', 3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table ns_teknologi.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ns_teknologi.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table ns_teknologi.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ns_teknologi.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin.test@me.com', NULL, '$2y$10$wct2xNn6ewqYu6W9/dZWa.wsZyBJ1LMO/D8NsjvYbTJHD4knNodqS', NULL, '2020-07-11 09:58:42', '2020-07-11 09:58:42');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
