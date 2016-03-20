-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 10.1.9-MariaDB - mariadb.org binary distribution
-- OS Server:                    Win32
-- HeidiSQL Versi:               9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table christ.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table christ.migrations: ~7 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2014_10_12_000000_create_users_table', 1),
	('2014_10_12_100000_create_password_resets_table', 1),
	('2016_02_23_163948_create_blog_table', 1),
	('2016_02_23_181541_create_category_table', 1),
	('2016_03_05_120240_create_portfolio_table', 1),
	('2016_03_05_120342_relation_category', 1),
	('2016_03_13_035440_create_admin_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Dumping structure for table christ.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table christ.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;


-- Dumping structure for table christ.tb_admin
CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table christ.tb_admin: ~1 rows (approximately)
/*!40000 ALTER TABLE `tb_admin` DISABLE KEYS */;
INSERT INTO `tb_admin` (`id`, `username`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', '$2y$10$cBetCQEq364QTjEeqFcO/uYyG/3QsbZqFGhI0gpu6rVa1sCEAdnE6', 'tamvan', 'sZMODfcVcjFbuB84t02DZdZVMHtGSSbgghhY9TbtdrnKwelV0An8aKuGlmVE', '2016-03-13 04:04:43', '2016-03-14 05:21:55');
/*!40000 ALTER TABLE `tb_admin` ENABLE KEYS */;


-- Dumping structure for table christ.tb_blog
CREATE TABLE IF NOT EXISTS `tb_blog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `article` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table christ.tb_blog: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_blog` DISABLE KEYS */;
INSERT INTO `tb_blog` (`id`, `title`, `article`, `image`, `slug`, `created_at`, `updated_at`) VALUES
	(2, 'test  asdfs fasdf sa fsd', '<p>as dfds fa sdfdsa fdsa fsf</p>\r\n<p>as dfds fa sdfdsa fdsa fsf</p>\r\n<p>as dfds fa sdfdsa fdsa fsfav as</p>', 'image/blog/84299.jpg', 'test-asdfs-fasdf-sa-fsd', '2016-03-13 07:40:37', '2016-03-13 07:40:37');
/*!40000 ALTER TABLE `tb_blog` ENABLE KEYS */;


-- Dumping structure for table christ.tb_category
CREATE TABLE IF NOT EXISTS `tb_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('Article','Portfolio') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Article',
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table christ.tb_category: ~2 rows (approximately)
/*!40000 ALTER TABLE `tb_category` DISABLE KEYS */;
INSERT INTO `tb_category` (`id`, `category`, `type`, `slug`, `created_at`, `updated_at`) VALUES
	(1, 'haha yea edit', 'Article', 'haha-yea-edit', '2016-03-13 07:31:01', '2016-03-13 07:31:33'),
	(2, 'cacacad', 'Portfolio', 'cacacad', '2016-03-13 07:37:10', '2016-03-13 07:37:10');
/*!40000 ALTER TABLE `tb_category` ENABLE KEYS */;


-- Dumping structure for table christ.tb_portfolio
CREATE TABLE IF NOT EXISTS `tb_portfolio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `article` text COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table christ.tb_portfolio: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_portfolio` DISABLE KEYS */;
INSERT INTO `tb_portfolio` (`id`, `title`, `article`, `date`, `link`, `image`, `slug`, `created_at`, `updated_at`) VALUES
	(1, 'tamba hporto editetete asc', '<p>tamba hportotamba hportotamba hporto tamba hportotamba hporto tamba hportotamba hporto</p>', 'February 1, 2016', '', 'image/portfolio/64287.png', 'tamba-hporto-editetete-asc', '2016-03-13 07:38:30', '2016-03-13 07:39:48');
/*!40000 ALTER TABLE `tb_portfolio` ENABLE KEYS */;


-- Dumping structure for table christ.tb_relation_blog
CREATE TABLE IF NOT EXISTS `tb_relation_blog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_category` int(10) unsigned NOT NULL,
  `id_relasi` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tb_relation_blog_id_category_foreign` (`id_category`),
  KEY `tb_relation_blog_id_relasi_foreign` (`id_relasi`),
  CONSTRAINT `tb_relation_blog_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `tb_category` (`id`) ON DELETE CASCADE,
  CONSTRAINT `tb_relation_blog_id_relasi_foreign` FOREIGN KEY (`id_relasi`) REFERENCES `tb_blog` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table christ.tb_relation_blog: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_relation_blog` DISABLE KEYS */;
INSERT INTO `tb_relation_blog` (`id`, `id_category`, `id_relasi`, `created_at`, `updated_at`) VALUES
	(2, 1, 2, NULL, NULL);
/*!40000 ALTER TABLE `tb_relation_blog` ENABLE KEYS */;


-- Dumping structure for table christ.tb_relation_portfolio
CREATE TABLE IF NOT EXISTS `tb_relation_portfolio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_category` int(10) unsigned NOT NULL,
  `id_relasi` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tb_relation_portfolio_id_category_foreign` (`id_category`),
  KEY `tb_relation_portfolio_id_relasi_foreign` (`id_relasi`),
  CONSTRAINT `tb_relation_portfolio_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `tb_category` (`id`) ON DELETE CASCADE,
  CONSTRAINT `tb_relation_portfolio_id_relasi_foreign` FOREIGN KEY (`id_relasi`) REFERENCES `tb_portfolio` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table christ.tb_relation_portfolio: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_relation_portfolio` DISABLE KEYS */;
INSERT INTO `tb_relation_portfolio` (`id`, `id_category`, `id_relasi`, `created_at`, `updated_at`) VALUES
	(1, 2, 1, NULL, NULL);
/*!40000 ALTER TABLE `tb_relation_portfolio` ENABLE KEYS */;


-- Dumping structure for table christ.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table christ.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
