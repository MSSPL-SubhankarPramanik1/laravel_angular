-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 05, 2016 at 07:03 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel_angular`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `employees_name_unique` (`name`),
  UNIQUE KEY `employees_email_unique` (`email`),
  KEY `employees_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `contact_number`, `position`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test@test.com', '1234567890', 'From Register', 3, '2016-01-05 07:37:23', '2016-01-05 07:37:23'),
(2, 'aa', 'a@sfs.dfgd', '1234567890', 'From Register', 4, '2016-01-05 07:49:42', '2016-01-05 07:49:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  UNIQUE KEY `migration` (`migration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 2),
('2015_12_11_123448_create_employees_table', 3),
('2016_01_05_114717_alter_employees_table', 3),
('2016_01_05_124633_alter_users_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'a@a.com', '$2y$10$Tjpv0zP9aPZYh/PShH5wJeU.A12df8ctjmOE2a0DwNlBTim.QBIpS', 1, 'A', 'itmcywJaB9iWOMSwCOY7gKh01hY3CctEaPR8BUSAhk9Q1zAUdOfzICJyBm8M', '2015-12-31 07:41:41', '2016-01-05 08:02:47'),
(2, 'Limtex Employee', 'lim@bpd.com', '$2y$10$jVidzJzpY5GrqAF8ufxPPe/8smW4Aja.FeWkMlooU9mR.3c7P5jeC', 0, 'E', 'cFtbZ8Byb2BnxIXUDoupjJtzXoVQi1zR3UUAKcFaNfrOfUL5QlaWVNa44EZ4', '2016-01-04 01:13:50', '2016-01-05 05:54:30'),
(3, 'test', 'test@test.com', '$2y$10$adFkg7GGWjUV2G4.F6/Kwu9S347LVRAzjgvyGsH0im3SsXvY0hPJq', 0, 'E', 'nHqlm7EKsy7fIOpxxvaFjnFoTgqLXbkeBNkNsAbJJlcFPJw0bKch8o5cb90w', '2016-01-05 07:37:23', '2016-01-05 07:38:01'),
(4, 'aa', 'a@sfs.dfgd', '$2y$10$ateNpgqjOaiC6Oq/eArw0eettoUeFR28EajdjecZoMAUpy1NEmd3K', 0, 'E', 'iIbVGUyQsN0k8CXhVqnhJjwAmnD6mu8RRcKIhQDn6uvcKIrIhYj1cFiUhtL5', '2016-01-05 07:49:42', '2016-01-05 07:49:51');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
