-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 06, 2025 at 07:49 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unnes_telemedicine`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint UNSIGNED NOT NULL,
  `dokter_id` bigint UNSIGNED NOT NULL,
  `pasien_id` bigint UNSIGNED NOT NULL,
  `activity_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `dokter_id`, `pasien_id`, `activity_type`, `description`, `created_at`, `updated_at`) VALUES
(1, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-07-14 23:27:44', '2024-07-14 23:27:44'),
(2, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-07-14 23:27:44', '2024-07-14 23:27:44'),
(3, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-07-14 23:29:48', '2024-07-14 23:29:48'),
(4, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-07-14 23:29:48', '2024-07-14 23:29:48'),
(5, 1, 5, 'Consultation', 'Konsultasi antara dokter John dan pasien  Kuriya Zusa', '2023-12-18 17:00:00', '2023-12-18 18:20:00'),
(6, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-09-30 02:22:52', '2024-09-30 02:22:52'),
(7, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-09-30 02:22:52', '2024-09-30 02:22:52'),
(8, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-09-30 02:22:52', '2024-09-30 02:22:52'),
(9, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-09-30 02:22:52', '2024-09-30 02:22:52'),
(10, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-09-30 02:22:52', '2024-09-30 02:22:52'),
(11, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-09-30 02:22:52', '2024-09-30 02:22:52'),
(12, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-09-30 02:22:52', '2024-09-30 02:22:52'),
(13, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-03 19:37:13', '2024-10-03 19:37:13'),
(14, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-03 19:37:13', '2024-10-03 19:37:13'),
(15, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-03 19:37:13', '2024-10-03 19:37:13'),
(16, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-03 19:37:13', '2024-10-03 19:37:13'),
(17, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-03 19:37:13', '2024-10-03 19:37:13'),
(18, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-03 19:37:13', '2024-10-03 19:37:13'),
(19, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-03 19:37:13', '2024-10-03 19:37:13'),
(20, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-06 22:57:28', '2024-10-06 22:57:28'),
(21, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-06 22:57:28', '2024-10-06 22:57:28'),
(22, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-06 22:57:28', '2024-10-06 22:57:28'),
(23, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-06 22:57:28', '2024-10-06 22:57:28'),
(24, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-06 22:57:28', '2024-10-06 22:57:28'),
(25, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-06 22:57:28', '2024-10-06 22:57:28'),
(26, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-06 22:57:28', '2024-10-06 22:57:28'),
(27, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-06 23:00:00', '2024-10-06 23:00:00'),
(28, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-06 23:00:00', '2024-10-06 23:00:00'),
(29, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-06 23:00:00', '2024-10-06 23:00:00'),
(30, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-06 23:00:00', '2024-10-06 23:00:00'),
(31, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-06 23:00:00', '2024-10-06 23:00:00'),
(32, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-06 23:00:00', '2024-10-06 23:00:00'),
(33, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-06 23:00:00', '2024-10-06 23:00:00'),
(34, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-22 00:09:56', '2024-10-22 00:09:56'),
(35, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-22 00:09:56', '2024-10-22 00:09:56'),
(36, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-22 00:09:56', '2024-10-22 00:09:56'),
(37, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-22 00:09:56', '2024-10-22 00:09:56'),
(38, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-22 00:09:56', '2024-10-22 00:09:56'),
(39, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-22 00:09:56', '2024-10-22 00:09:56'),
(40, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-22 00:09:56', '2024-10-22 00:09:56'),
(41, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-23 16:46:59', '2024-10-23 16:46:59'),
(42, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-23 16:46:59', '2024-10-23 16:46:59'),
(43, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-23 16:46:59', '2024-10-23 16:46:59'),
(44, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-23 16:46:59', '2024-10-23 16:46:59'),
(45, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-23 16:46:59', '2024-10-23 16:46:59'),
(46, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-23 16:46:59', '2024-10-23 16:46:59'),
(47, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-23 16:46:59', '2024-10-23 16:46:59'),
(48, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-27 18:23:09', '2024-10-27 18:23:09'),
(49, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-27 18:23:09', '2024-10-27 18:23:09'),
(50, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-27 18:23:09', '2024-10-27 18:23:09'),
(51, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-27 18:23:09', '2024-10-27 18:23:09'),
(52, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-27 18:23:09', '2024-10-27 18:23:09'),
(53, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-27 18:23:09', '2024-10-27 18:23:09'),
(54, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-27 18:23:09', '2024-10-27 18:23:09'),
(55, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-28 21:53:44', '2024-10-28 21:53:44'),
(56, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-28 21:53:44', '2024-10-28 21:53:44'),
(57, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-28 21:53:44', '2024-10-28 21:53:44'),
(58, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-28 21:53:44', '2024-10-28 21:53:44'),
(59, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-28 21:53:44', '2024-10-28 21:53:44'),
(60, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-28 21:53:44', '2024-10-28 21:53:44'),
(61, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-28 21:53:44', '2024-10-28 21:53:44'),
(62, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-28 21:53:50', '2024-10-28 21:53:50'),
(63, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-28 21:53:50', '2024-10-28 21:53:50'),
(64, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-28 21:53:50', '2024-10-28 21:53:50'),
(65, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-28 21:53:50', '2024-10-28 21:53:50'),
(66, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-28 21:53:50', '2024-10-28 21:53:50'),
(67, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-28 21:53:50', '2024-10-28 21:53:50'),
(68, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-28 21:53:50', '2024-10-28 21:53:50'),
(69, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-29 03:20:10', '2024-10-29 03:20:10'),
(70, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-29 03:20:10', '2024-10-29 03:20:10'),
(71, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-29 03:20:10', '2024-10-29 03:20:10'),
(72, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-29 03:20:10', '2024-10-29 03:20:10'),
(73, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-29 03:20:10', '2024-10-29 03:20:10'),
(74, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-29 03:20:10', '2024-10-29 03:20:10'),
(75, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-10-29 03:20:10', '2024-10-29 03:20:10'),
(76, 8, 8, 'Consultation', 'Konsultasi antara dokter dengan ID: 8 dan pasien dengan ID: 8', '2024-10-29 03:20:10', '2024-10-29 03:20:10'),
(77, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-24 06:23:57', '2024-11-24 06:23:57'),
(78, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-24 06:23:57', '2024-11-24 06:23:57'),
(79, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-24 06:23:57', '2024-11-24 06:23:57'),
(80, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-24 06:23:57', '2024-11-24 06:23:57'),
(81, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-24 06:23:57', '2024-11-24 06:23:57'),
(82, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-24 06:23:57', '2024-11-24 06:23:57'),
(83, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-24 06:23:57', '2024-11-24 06:23:57'),
(84, 8, 8, 'Consultation', 'Konsultasi antara dokter dengan ID: 8 dan pasien dengan ID: 8', '2024-11-24 06:23:57', '2024-11-24 06:23:57'),
(85, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-24 06:26:00', '2024-11-24 06:26:00'),
(86, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-24 06:26:00', '2024-11-24 06:26:00'),
(87, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-24 06:26:00', '2024-11-24 06:26:00'),
(88, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-24 06:26:00', '2024-11-24 06:26:00'),
(89, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-24 06:26:00', '2024-11-24 06:26:00'),
(90, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-24 06:26:00', '2024-11-24 06:26:00'),
(91, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-24 06:26:00', '2024-11-24 06:26:00'),
(92, 8, 8, 'Consultation', 'Konsultasi antara dokter dengan ID: 8 dan pasien dengan ID: 8', '2024-11-24 06:26:00', '2024-11-24 06:26:00'),
(93, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-24 23:05:48', '2024-11-24 23:05:48'),
(94, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-24 23:05:48', '2024-11-24 23:05:48'),
(95, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-24 23:05:48', '2024-11-24 23:05:48'),
(96, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-24 23:05:48', '2024-11-24 23:05:48'),
(97, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-24 23:05:48', '2024-11-24 23:05:48'),
(98, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-24 23:05:48', '2024-11-24 23:05:48'),
(99, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-24 23:05:48', '2024-11-24 23:05:48'),
(100, 8, 8, 'Consultation', 'Konsultasi antara dokter dengan ID: 8 dan pasien dengan ID: 8', '2024-11-24 23:05:48', '2024-11-24 23:05:48'),
(101, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-25 01:11:12', '2024-11-25 01:11:12'),
(102, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-25 01:11:12', '2024-11-25 01:11:12'),
(103, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-25 01:11:12', '2024-11-25 01:11:12'),
(104, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-25 01:11:12', '2024-11-25 01:11:12'),
(105, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-25 01:11:12', '2024-11-25 01:11:12'),
(106, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-25 01:11:12', '2024-11-25 01:11:12'),
(107, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-11-25 01:11:12', '2024-11-25 01:11:12'),
(108, 8, 8, 'Consultation', 'Konsultasi antara dokter dengan ID: 8 dan pasien dengan ID: 8', '2024-11-25 01:11:12', '2024-11-25 01:11:12'),
(109, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:08:25', '2024-12-22 22:08:25'),
(110, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:08:25', '2024-12-22 22:08:25'),
(111, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:08:25', '2024-12-22 22:08:25'),
(112, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:08:25', '2024-12-22 22:08:25'),
(113, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:08:25', '2024-12-22 22:08:25'),
(114, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:08:25', '2024-12-22 22:08:25'),
(115, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:08:25', '2024-12-22 22:08:25'),
(116, 8, 8, 'Consultation', 'Konsultasi antara dokter dengan ID: 8 dan pasien dengan ID: 8', '2024-12-22 22:08:25', '2024-12-22 22:08:25'),
(117, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:08:29', '2024-12-22 22:08:29'),
(118, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:08:29', '2024-12-22 22:08:29'),
(119, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:08:29', '2024-12-22 22:08:29'),
(120, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:08:29', '2024-12-22 22:08:29'),
(121, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:08:29', '2024-12-22 22:08:29'),
(122, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:08:29', '2024-12-22 22:08:29'),
(123, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:08:29', '2024-12-22 22:08:29'),
(124, 8, 8, 'Consultation', 'Konsultasi antara dokter dengan ID: 8 dan pasien dengan ID: 8', '2024-12-22 22:08:29', '2024-12-22 22:08:29'),
(125, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:26', '2024-12-22 22:09:26'),
(126, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:26', '2024-12-22 22:09:26'),
(127, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:26', '2024-12-22 22:09:26'),
(128, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:26', '2024-12-22 22:09:26'),
(129, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:26', '2024-12-22 22:09:26'),
(130, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:26', '2024-12-22 22:09:26'),
(131, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:26', '2024-12-22 22:09:26'),
(132, 8, 8, 'Consultation', 'Konsultasi antara dokter dengan ID: 8 dan pasien dengan ID: 8', '2024-12-22 22:09:26', '2024-12-22 22:09:26'),
(133, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:28', '2024-12-22 22:09:28'),
(134, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:28', '2024-12-22 22:09:28'),
(135, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:28', '2024-12-22 22:09:28'),
(136, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:28', '2024-12-22 22:09:28'),
(137, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:28', '2024-12-22 22:09:28'),
(138, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:28', '2024-12-22 22:09:28'),
(139, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:28', '2024-12-22 22:09:28'),
(140, 8, 8, 'Consultation', 'Konsultasi antara dokter dengan ID: 8 dan pasien dengan ID: 8', '2024-12-22 22:09:28', '2024-12-22 22:09:28'),
(141, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:28', '2024-12-22 22:09:28'),
(142, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:28', '2024-12-22 22:09:28'),
(143, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:28', '2024-12-22 22:09:28'),
(144, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:28', '2024-12-22 22:09:28'),
(145, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:28', '2024-12-22 22:09:28'),
(146, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:28', '2024-12-22 22:09:28'),
(147, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:28', '2024-12-22 22:09:28'),
(148, 8, 8, 'Consultation', 'Konsultasi antara dokter dengan ID: 8 dan pasien dengan ID: 8', '2024-12-22 22:09:28', '2024-12-22 22:09:28'),
(149, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:29', '2024-12-22 22:09:29'),
(150, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:29', '2024-12-22 22:09:29'),
(151, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:29', '2024-12-22 22:09:29'),
(152, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:29', '2024-12-22 22:09:29'),
(153, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:29', '2024-12-22 22:09:29'),
(154, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:29', '2024-12-22 22:09:29'),
(155, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:29', '2024-12-22 22:09:29'),
(156, 8, 8, 'Consultation', 'Konsultasi antara dokter dengan ID: 8 dan pasien dengan ID: 8', '2024-12-22 22:09:29', '2024-12-22 22:09:29'),
(157, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:29', '2024-12-22 22:09:29'),
(158, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:29', '2024-12-22 22:09:29'),
(159, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:29', '2024-12-22 22:09:29'),
(160, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:29', '2024-12-22 22:09:29'),
(161, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:29', '2024-12-22 22:09:29'),
(162, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:29', '2024-12-22 22:09:29'),
(163, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:29', '2024-12-22 22:09:29'),
(164, 8, 8, 'Consultation', 'Konsultasi antara dokter dengan ID: 8 dan pasien dengan ID: 8', '2024-12-22 22:09:29', '2024-12-22 22:09:29'),
(165, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:29', '2024-12-22 22:09:29'),
(166, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:29', '2024-12-22 22:09:29'),
(167, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:29', '2024-12-22 22:09:29'),
(168, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:29', '2024-12-22 22:09:29'),
(169, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:29', '2024-12-22 22:09:29'),
(170, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:29', '2024-12-22 22:09:29'),
(171, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:29', '2024-12-22 22:09:29'),
(172, 8, 8, 'Consultation', 'Konsultasi antara dokter dengan ID: 8 dan pasien dengan ID: 8', '2024-12-22 22:09:29', '2024-12-22 22:09:29'),
(173, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:58', '2024-12-22 22:09:58'),
(174, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:58', '2024-12-22 22:09:58'),
(175, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:58', '2024-12-22 22:09:58'),
(176, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:58', '2024-12-22 22:09:58'),
(177, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:58', '2024-12-22 22:09:58'),
(178, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:58', '2024-12-22 22:09:58'),
(179, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:09:58', '2024-12-22 22:09:58'),
(180, 8, 8, 'Consultation', 'Konsultasi antara dokter dengan ID: 8 dan pasien dengan ID: 8', '2024-12-22 22:09:58', '2024-12-22 22:09:58'),
(181, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:10:02', '2024-12-22 22:10:02'),
(182, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:10:02', '2024-12-22 22:10:02'),
(183, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:10:02', '2024-12-22 22:10:02'),
(184, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:10:02', '2024-12-22 22:10:02'),
(185, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:10:02', '2024-12-22 22:10:02'),
(186, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:10:02', '2024-12-22 22:10:02'),
(187, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:10:02', '2024-12-22 22:10:02'),
(188, 8, 8, 'Consultation', 'Konsultasi antara dokter dengan ID: 8 dan pasien dengan ID: 8', '2024-12-22 22:10:02', '2024-12-22 22:10:02'),
(189, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:10:12', '2024-12-22 22:10:12'),
(190, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:10:12', '2024-12-22 22:10:12'),
(191, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:10:12', '2024-12-22 22:10:12'),
(192, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:10:12', '2024-12-22 22:10:12'),
(193, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:10:12', '2024-12-22 22:10:12'),
(194, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:10:12', '2024-12-22 22:10:12'),
(195, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:10:12', '2024-12-22 22:10:12'),
(196, 8, 8, 'Consultation', 'Konsultasi antara dokter dengan ID: 8 dan pasien dengan ID: 8', '2024-12-22 22:10:12', '2024-12-22 22:10:12'),
(197, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:10:15', '2024-12-22 22:10:15'),
(198, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:10:15', '2024-12-22 22:10:15'),
(199, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:10:15', '2024-12-22 22:10:15'),
(200, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:10:15', '2024-12-22 22:10:15'),
(201, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:10:15', '2024-12-22 22:10:15'),
(202, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:10:15', '2024-12-22 22:10:15'),
(203, 4, 5, 'Consultation', 'Konsultasi antara dokter dengan ID: 4 dan pasien dengan ID: 5', '2024-12-22 22:10:15', '2024-12-22 22:10:15'),
(204, 8, 8, 'Consultation', 'Konsultasi antara dokter dengan ID: 8 dan pasien dengan ID: 8', '2024-12-22 22:10:15', '2024-12-22 22:10:15');

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint UNSIGNED NOT NULL,
  `log_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint UNSIGNED DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `batch_uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(1, 'default', 'created', 'App\\Models\\Admin', 'created', 1, NULL, NULL, '[]', NULL, '2023-07-03 01:16:57', '2023-07-03 01:16:57'),
(2, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 1, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-23 09:14:02', '2023-09-23 09:14:02'),
(3, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 1, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-23 09:16:45', '2023-09-23 09:16:45'),
(4, 'default', 'created', 'App\\Models\\Dokter', 'created', 5, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-23 09:22:33', '2023-09-23 09:22:33'),
(5, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 1, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-23 09:23:02', '2023-09-23 09:23:02'),
(6, 'default', 'created', 'App\\Models\\Spesialis', 'created', 2, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-23 09:25:40', '2023-09-23 09:25:40'),
(7, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 1, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-23 23:33:43', '2023-09-23 23:33:43'),
(8, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 1, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-23 23:48:23', '2023-09-23 23:48:23'),
(9, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 1, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-24 10:07:22', '2023-09-24 10:07:22'),
(10, 'default', 'created', 'App\\Models\\Spesialis', 'created', 3, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-24 10:13:52', '2023-09-24 10:13:52'),
(11, 'default', 'created', 'App\\Models\\Spesialis', 'created', 4, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-24 10:16:18', '2023-09-24 10:16:18'),
(12, 'default', 'created', 'App\\Models\\Spesialis', 'created', 5, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-24 10:17:05', '2023-09-24 10:17:05'),
(13, 'default', 'created', 'App\\Models\\Spesialis', 'created', 6, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-24 10:18:09', '2023-09-24 10:18:09'),
(14, 'default', 'created', 'App\\Models\\Spesialis', 'created', 7, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-24 10:18:36', '2023-09-24 10:18:36'),
(15, 'default', 'created', 'App\\Models\\Spesialis', 'created', 8, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-24 10:19:03', '2023-09-24 10:19:03'),
(16, 'default', 'created', 'App\\Models\\Spesialis', 'created', 9, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-24 10:19:22', '2023-09-24 10:19:22'),
(17, 'default', 'created', 'App\\Models\\Spesialis', 'created', 10, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-24 10:20:46', '2023-09-24 10:20:46'),
(18, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 1, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-24 10:21:47', '2023-09-24 10:21:47'),
(19, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 5, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-24 10:21:58', '2023-09-24 10:21:58'),
(20, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 1, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-24 18:41:52', '2023-09-24 18:41:52'),
(21, 'default', 'created', 'App\\Models\\Admin', 'created', 2, NULL, NULL, '[]', NULL, '2024-05-13 22:31:17', '2024-05-13 22:31:17'),
(22, 'default', 'created', 'App\\Models\\User', 'created', 1, NULL, NULL, '[]', NULL, '2024-05-14 00:36:46', '2024-05-14 00:36:46'),
(23, 'default', 'created', 'App\\Models\\User', 'created', 2, NULL, NULL, '[]', NULL, '2024-05-14 00:36:46', '2024-05-14 00:36:46'),
(24, 'default', 'created', 'App\\Models\\User', 'created', 3, NULL, NULL, '[]', NULL, '2024-05-14 00:37:40', '2024-05-14 00:37:40'),
(25, 'default', 'created', 'App\\Models\\User', 'created', 4, NULL, NULL, '[]', NULL, '2024-05-14 00:37:40', '2024-05-14 00:37:40'),
(26, 'default', 'created', 'App\\Models\\User', 'created', 5, NULL, NULL, '[]', NULL, '2024-05-14 00:41:08', '2024-05-14 00:41:08'),
(27, 'default', 'created', 'App\\Models\\User', 'created', 6, NULL, NULL, '[]', NULL, '2024-05-14 00:41:08', '2024-05-14 00:41:08'),
(28, 'default', 'created', 'App\\Models\\User', 'created', 7, NULL, NULL, '[]', NULL, '2024-05-14 00:43:18', '2024-05-14 00:43:18'),
(29, 'default', 'created', 'App\\Models\\User', 'created', 8, NULL, NULL, '[]', NULL, '2024-05-14 00:43:18', '2024-05-14 00:43:18'),
(30, 'default', 'created', 'App\\Models\\User', 'created', 1, NULL, NULL, '[]', NULL, '2024-05-14 00:49:11', '2024-05-14 00:49:11'),
(31, 'default', 'created', 'App\\Models\\User', 'created', 2, NULL, NULL, '[]', NULL, '2024-05-14 00:49:11', '2024-05-14 00:49:11'),
(32, 'default', 'created', 'App\\Models\\User', 'created', 3, NULL, NULL, '[]', NULL, '2024-05-14 00:49:11', '2024-05-14 00:49:11'),
(33, 'default', 'created', 'App\\Models\\Admin', 'created', 2, NULL, NULL, '[]', NULL, '2024-05-16 10:03:44', '2024-05-16 10:03:44'),
(34, 'default', 'created', 'App\\Models\\Admin', 'created', 2, NULL, NULL, '[]', NULL, '2024-05-16 10:06:36', '2024-05-16 10:06:36'),
(35, 'default', 'created', 'App\\Models\\Admin', 'created', 3, NULL, NULL, '[]', NULL, '2024-05-16 10:06:36', '2024-05-16 10:06:36'),
(36, 'default', 'deleted', 'App\\Models\\Dokter', 'deleted', 2, 'App\\Models\\User', 1, '[]', NULL, '2024-07-08 15:12:23', '2024-07-08 15:12:23'),
(37, 'default', 'created', 'App\\Models\\User', 'created', 4, NULL, NULL, '[]', NULL, '2024-07-10 19:11:52', '2024-07-10 19:11:52'),
(38, 'default', 'created', 'App\\Models\\User', 'created', 4, NULL, NULL, '[]', NULL, '2024-07-10 19:13:07', '2024-07-10 19:13:07'),
(39, 'default', 'created', 'App\\Models\\User', 'created', 5, NULL, NULL, '[]', NULL, '2024-07-10 19:49:57', '2024-07-10 19:49:57'),
(40, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 1, 'App\\Models\\User', 3, '[]', NULL, '2024-07-10 20:02:58', '2024-07-10 20:02:58'),
(41, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 1, 'App\\Models\\User', 3, '[]', NULL, '2024-07-10 20:03:05', '2024-07-10 20:03:05'),
(42, 'default', 'created', 'App\\Models\\User', 'created', 6, NULL, NULL, '[]', NULL, '2024-07-10 21:39:21', '2024-07-10 21:39:21'),
(43, 'default', 'created', 'App\\Models\\User', 'created', 7, NULL, NULL, '[]', NULL, '2024-07-11 01:47:13', '2024-07-11 01:47:13'),
(44, 'default', 'created', 'App\\Models\\User', 'created', 8, NULL, NULL, '[]', NULL, '2024-07-11 01:47:23', '2024-07-11 01:47:23'),
(45, 'default', 'created', 'App\\Models\\User', 'created', 10, NULL, NULL, '[]', NULL, '2024-07-11 01:51:12', '2024-07-11 01:51:12'),
(46, 'default', 'created', 'App\\Models\\Pasien', 'created', 4, NULL, NULL, '[]', NULL, '2024-07-11 01:55:03', '2024-07-11 01:55:03'),
(47, 'default', 'deleted', 'App\\Models\\Dokter', 'deleted', 1, 'App\\Models\\User', 1, '[]', NULL, '2024-07-11 11:23:36', '2024-07-11 11:23:36'),
(48, 'default', 'created', 'App\\Models\\User', 'created', 11, NULL, NULL, '[]', NULL, '2024-07-12 00:18:30', '2024-07-12 00:18:30'),
(49, 'default', 'created', 'App\\Models\\User', 'created', 12, NULL, NULL, '[]', NULL, '2024-07-12 00:24:40', '2024-07-12 00:24:40'),
(50, 'default', 'created', 'App\\Models\\User', 'created', 15, NULL, NULL, '[]', NULL, '2024-07-12 00:32:24', '2024-07-12 00:32:24'),
(51, 'default', 'created', 'App\\Models\\Pasien', 'created', 5, NULL, NULL, '[]', NULL, '2024-07-12 00:32:25', '2024-07-12 00:32:25'),
(52, 'default', 'created', 'App\\Models\\User', 'created', 16, NULL, NULL, '[]', NULL, '2024-07-12 00:45:16', '2024-07-12 00:45:16'),
(53, 'default', 'created', 'App\\Models\\User', 'created', 18, NULL, NULL, '[]', NULL, '2024-07-12 00:49:38', '2024-07-12 00:49:38'),
(54, 'default', 'created', 'App\\Models\\User', 'created', 20, NULL, NULL, '[]', NULL, '2024-07-12 00:57:40', '2024-07-12 00:57:40'),
(55, 'default', 'created', 'App\\Models\\User', 'created', 21, NULL, NULL, '[]', NULL, '2024-07-12 01:01:12', '2024-07-12 01:01:12'),
(56, 'default', 'created', 'App\\Models\\User', 'created', 23, NULL, NULL, '[]', NULL, '2024-07-12 01:05:20', '2024-07-12 01:05:20'),
(57, 'default', 'created', 'App\\Models\\User', 'created', 25, NULL, NULL, '[]', NULL, '2024-07-12 01:10:03', '2024-07-12 01:10:03'),
(58, 'default', 'created', 'App\\Models\\User', 'created', 26, NULL, NULL, '[]', NULL, '2024-07-12 01:10:55', '2024-07-12 01:10:55'),
(59, 'default', 'created', 'App\\Models\\User', 'created', 27, NULL, NULL, '[]', NULL, '2024-07-12 01:11:58', '2024-07-12 01:11:58'),
(60, 'default', 'created', 'App\\Models\\User', 'created', 28, NULL, NULL, '[]', NULL, '2024-07-12 01:13:11', '2024-07-12 01:13:11'),
(61, 'default', 'created', 'App\\Models\\Dokter', 'created', 4, NULL, NULL, '[]', NULL, '2024-07-12 01:13:12', '2024-07-12 01:13:12'),
(62, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 4, NULL, NULL, '[]', NULL, '2024-07-12 01:30:32', '2024-07-12 01:30:32'),
(63, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 5, NULL, NULL, '[]', NULL, '2024-07-12 01:31:54', '2024-07-12 01:31:54'),
(64, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 5, NULL, NULL, '[]', NULL, '2024-07-12 01:32:52', '2024-07-12 01:32:52'),
(65, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 5, NULL, NULL, '[]', NULL, '2024-07-12 01:32:58', '2024-07-12 01:32:58'),
(66, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 5, NULL, NULL, '[]', NULL, '2024-07-12 01:32:59', '2024-07-12 01:32:59'),
(67, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 5, NULL, NULL, '[]', NULL, '2024-07-12 01:41:16', '2024-07-12 01:41:16'),
(68, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 5, NULL, NULL, '[]', NULL, '2024-07-12 01:48:33', '2024-07-12 01:48:33'),
(69, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 5, NULL, NULL, '[]', NULL, '2024-07-12 01:48:33', '2024-07-12 01:48:33'),
(70, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 5, NULL, NULL, '[]', NULL, '2024-07-12 01:54:20', '2024-07-12 01:54:20'),
(71, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 5, NULL, NULL, '[]', NULL, '2024-07-12 01:54:37', '2024-07-12 01:54:37'),
(72, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 5, NULL, NULL, '[]', NULL, '2024-07-12 01:56:29', '2024-07-12 01:56:29'),
(73, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 4, NULL, NULL, '[]', NULL, '2024-07-12 01:57:19', '2024-07-12 01:57:19'),
(74, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 4, NULL, NULL, '[]', NULL, '2024-07-12 01:59:04', '2024-07-12 01:59:04'),
(75, 'default', 'updated', 'App\\Models\\Janji', 'updated', 1, NULL, NULL, '[]', NULL, '2024-07-12 03:00:03', '2024-07-12 03:00:03'),
(76, 'default', 'created', 'App\\Models\\Konsultasi', 'created', 2, NULL, NULL, '[]', NULL, '2024-07-12 03:00:03', '2024-07-12 03:00:03'),
(77, 'default', 'created', 'App\\Models\\Diskusi', 'created', 1, NULL, NULL, '[]', NULL, '2024-07-12 03:00:04', '2024-07-12 03:00:04'),
(78, 'default', 'updated', 'App\\Models\\Janji', 'updated', 1, NULL, NULL, '[]', NULL, '2024-07-12 03:01:46', '2024-07-12 03:01:46'),
(79, 'default', 'updated', 'App\\Models\\Janji', 'updated', 1, NULL, NULL, '[]', NULL, '2024-07-12 03:02:07', '2024-07-12 03:02:07'),
(80, 'default', 'created', 'App\\Models\\Konsultasi', 'created', 3, NULL, NULL, '[]', NULL, '2024-07-12 03:02:08', '2024-07-12 03:02:08'),
(81, 'default', 'created', 'App\\Models\\Diskusi', 'created', 2, NULL, NULL, '[]', NULL, '2024-07-12 03:02:08', '2024-07-12 03:02:08'),
(82, 'default', 'created', 'App\\Models\\Catatan', 'created', 1, NULL, NULL, '[]', NULL, '2024-07-12 07:39:36', '2024-07-12 07:39:36'),
(83, 'default', 'updated', 'App\\Models\\Catatan', 'updated', 1, NULL, NULL, '[]', NULL, '2024-07-12 07:40:12', '2024-07-12 07:40:12'),
(84, 'default', 'updated', 'App\\Models\\Catatan', 'updated', 1, NULL, NULL, '[]', NULL, '2024-07-12 07:40:36', '2024-07-12 07:40:36'),
(85, 'default', 'updated', 'App\\Models\\Konsultasi', 'updated', 3, NULL, NULL, '[]', NULL, '2024-07-12 07:40:55', '2024-07-12 07:40:55'),
(86, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 1, 'App\\Models\\User', 1, '[]', NULL, '2024-07-14 03:37:57', '2024-07-14 03:37:57'),
(87, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 1, 'App\\Models\\User', 1, '[]', NULL, '2024-07-14 03:38:24', '2024-07-14 03:38:24'),
(88, 'default', 'deleted', 'App\\Models\\Dokter', 'deleted', 1, 'App\\Models\\User', 1, '[]', NULL, '2024-07-15 00:52:07', '2024-07-15 00:52:07'),
(89, 'default', 'deleted', 'App\\Models\\Konsultasi', 'deleted', 2, 'App\\Models\\User', 1, '[]', NULL, '2024-07-15 01:26:10', '2024-07-15 01:26:10'),
(90, 'default', 'deleted', 'App\\Models\\Konsultasi', 'deleted', 3, 'App\\Models\\User', 1, '[]', NULL, '2024-07-15 01:28:48', '2024-07-15 01:28:48'),
(91, 'default', 'created', 'App\\Models\\Janji', 'created', 2, NULL, NULL, '[]', NULL, '2024-07-15 01:48:14', '2024-07-15 01:48:14'),
(92, 'default', 'updated', 'App\\Models\\Janji', 'updated', 2, NULL, NULL, '[]', NULL, '2024-07-15 01:48:31', '2024-07-15 01:48:31'),
(93, 'default', 'created', 'App\\Models\\Konsultasi', 'created', 4, NULL, NULL, '[]', NULL, '2024-07-15 01:48:31', '2024-07-15 01:48:31'),
(94, 'default', 'created', 'App\\Models\\Konsultasi', 'created', 5, NULL, NULL, '[]', NULL, '2024-07-15 01:50:05', '2024-07-15 01:50:05'),
(95, 'default', 'created', 'App\\Models\\Konsultasi', 'created', 6, NULL, NULL, '[]', NULL, '2024-07-15 01:52:03', '2024-07-15 01:52:03'),
(96, 'default', 'deleted', 'App\\Models\\Konsultasi', 'deleted', 5, 'App\\Models\\User', 1, '[]', NULL, '2024-07-15 01:52:31', '2024-07-15 01:52:31'),
(97, 'default', 'deleted', 'App\\Models\\Konsultasi', 'deleted', 6, 'App\\Models\\User', 1, '[]', NULL, '2024-07-15 01:52:35', '2024-07-15 01:52:35'),
(98, 'default', 'created', 'App\\Models\\Konsultasi', 'created', 7, NULL, NULL, '[]', NULL, '2024-07-15 01:52:44', '2024-07-15 01:52:44'),
(99, 'default', 'deleted', 'App\\Models\\Konsultasi', 'deleted', 7, 'App\\Models\\User', 1, '[]', NULL, '2024-07-15 01:52:58', '2024-07-15 01:52:58'),
(100, 'default', 'created', 'App\\Models\\Konsultasi', 'created', 8, NULL, NULL, '[]', NULL, '2024-07-15 01:53:30', '2024-07-15 01:53:30'),
(101, 'default', 'created', 'App\\Models\\Catatan', 'created', 2, NULL, NULL, '[]', NULL, '2024-07-15 01:55:52', '2024-07-15 01:55:52'),
(102, 'default', 'deleted', 'App\\Models\\Konsultasi', 'deleted', 8, 'App\\Models\\User', 1, '[]', NULL, '2024-07-15 01:56:15', '2024-07-15 01:56:15'),
(103, 'default', 'created', 'App\\Models\\Konsultasi', 'created', 9, NULL, NULL, '[]', NULL, '2024-07-15 01:58:57', '2024-07-15 01:58:57'),
(104, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 4, NULL, NULL, '[]', NULL, '2024-07-15 02:04:03', '2024-07-15 02:04:03'),
(105, 'default', 'created', 'App\\Models\\Rating', 'created', 0, 'App\\Models\\User', 4, '[]', NULL, '2024-07-15 09:23:11', '2024-07-15 09:23:11'),
(106, 'default', 'created', 'App\\Models\\Rating', 'created', 0, 'App\\Models\\User', 4, '[]', NULL, '2024-07-15 09:24:41', '2024-07-15 09:24:41'),
(107, 'default', 'created', 'App\\Models\\Rating', 'created', 0, 'App\\Models\\User', 4, '[]', NULL, '2024-07-15 09:26:13', '2024-07-15 09:26:13'),
(108, 'default', 'created', 'App\\Models\\Rating', 'created', 0, 'App\\Models\\User', 4, '[]', NULL, '2024-07-15 09:27:43', '2024-07-15 09:27:43'),
(109, 'default', 'created', 'App\\Models\\Rating', 'created', 5, 'App\\Models\\User', 4, '[]', NULL, '2024-07-15 09:52:29', '2024-07-15 09:52:29'),
(110, 'default', 'created', 'App\\Models\\Rating', 'created', 6, 'App\\Models\\User', 4, '[]', NULL, '2024-07-15 09:57:30', '2024-07-15 09:57:30'),
(111, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 5, NULL, NULL, '[]', NULL, '2024-07-15 17:48:58', '2024-07-15 17:48:58'),
(112, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 4, NULL, NULL, '[]', NULL, '2024-07-15 19:03:56', '2024-07-15 19:03:56'),
(113, 'default', 'created', 'App\\Models\\Janji', 'created', 3, NULL, NULL, '[]', NULL, '2024-07-15 19:08:43', '2024-07-15 19:08:43'),
(114, 'default', 'updated', 'App\\Models\\Janji', 'updated', 3, NULL, NULL, '[]', NULL, '2024-07-15 19:10:38', '2024-07-15 19:10:38'),
(115, 'default', 'created', 'App\\Models\\Konsultasi', 'created', 10, NULL, NULL, '[]', NULL, '2024-07-15 19:10:38', '2024-07-15 19:10:38'),
(116, 'default', 'created', 'App\\Models\\Janji', 'created', 4, NULL, NULL, '[]', NULL, '2024-07-15 19:43:23', '2024-07-15 19:43:23'),
(117, 'default', 'updated', 'App\\Models\\Janji', 'updated', 4, NULL, NULL, '[]', NULL, '2024-07-15 19:43:50', '2024-07-15 19:43:50'),
(118, 'default', 'created', 'App\\Models\\Konsultasi', 'created', 11, NULL, NULL, '[]', NULL, '2024-07-15 19:43:50', '2024-07-15 19:43:50'),
(119, 'default', 'created', 'App\\Models\\Catatan', 'created', 3, NULL, NULL, '[]', NULL, '2024-07-15 19:45:43', '2024-07-15 19:45:43'),
(120, 'default', 'updated', 'App\\Models\\Konsultasi', 'updated', 11, NULL, NULL, '[]', NULL, '2024-07-15 19:45:56', '2024-07-15 19:45:56'),
(121, 'default', 'created', 'App\\Models\\Rating', 'created', 7, 'App\\Models\\User', 4, '[]', NULL, '2024-07-15 19:50:56', '2024-07-15 19:50:56'),
(122, 'default', 'created', 'App\\Models\\Konsultasi', 'created', 12, NULL, NULL, '[]', NULL, '2024-07-16 00:40:18', '2024-07-16 00:40:18'),
(123, 'default', 'created', 'App\\Models\\Konsultasi', 'created', 13, NULL, NULL, '[]', NULL, '2024-07-16 00:43:59', '2024-07-16 00:43:59'),
(124, 'default', 'created', 'App\\Models\\Konsultasi', 'created', 14, NULL, NULL, '[]', NULL, '2024-07-16 00:48:39', '2024-07-16 00:48:39'),
(125, 'default', 'created', 'App\\Models\\Catatan', 'created', 4, NULL, NULL, '[]', NULL, '2024-07-16 00:49:14', '2024-07-16 00:49:14'),
(126, 'default', 'updated', 'App\\Models\\Konsultasi', 'updated', 14, NULL, NULL, '[]', NULL, '2024-07-16 00:49:18', '2024-07-16 00:49:18'),
(127, 'default', 'updated', 'App\\Models\\Konsultasi', 'updated', 9, 'App\\Models\\User', 1, '[]', NULL, '2024-07-25 01:18:18', '2024-07-25 01:18:18'),
(128, 'default', 'updated', 'App\\Models\\Konsultasi', 'updated', 9, 'App\\Models\\User', 1, '[]', NULL, '2024-07-25 01:20:43', '2024-07-25 01:20:43'),
(129, 'default', 'updated', 'App\\Models\\Konsultasi', 'updated', 9, 'App\\Models\\User', 1, '[]', NULL, '2024-07-25 01:22:04', '2024-07-25 01:22:04'),
(130, 'default', 'updated', 'App\\Models\\Konsultasi', 'updated', 9, 'App\\Models\\User', 1, '[]', NULL, '2024-07-25 01:22:13', '2024-07-25 01:22:13'),
(131, 'default', 'updated', 'App\\Models\\Konsultasi', 'updated', 9, 'App\\Models\\User', 1, '[]', NULL, '2024-07-25 01:24:22', '2024-07-25 01:24:22'),
(132, 'default', 'updated', 'App\\Models\\Konsultasi', 'updated', 9, 'App\\Models\\User', 1, '[]', NULL, '2024-07-25 01:24:27', '2024-07-25 01:24:27'),
(133, 'default', 'updated', 'App\\Models\\Konsultasi', 'updated', 14, 'App\\Models\\User', 1, '[]', NULL, '2024-07-25 01:24:53', '2024-07-25 01:24:53'),
(134, 'default', 'updated', 'App\\Models\\Konsultasi', 'updated', 14, 'App\\Models\\User', 1, '[]', NULL, '2024-07-25 01:24:59', '2024-07-25 01:24:59'),
(135, 'default', 'created', 'App\\Models\\Rating', 'created', 8, 'App\\Models\\User', 4, '[]', NULL, '2024-07-25 03:48:44', '2024-07-25 03:48:44'),
(136, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 1, 'App\\Models\\User', 1, '[]', NULL, '2024-07-28 23:25:24', '2024-07-28 23:25:24'),
(137, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 1, 'App\\Models\\User', 1, '[]', NULL, '2024-07-28 23:36:49', '2024-07-28 23:36:49'),
(138, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 1, 'App\\Models\\User', 1, '[]', NULL, '2024-07-28 23:46:46', '2024-07-28 23:46:46'),
(139, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 1, 'App\\Models\\User', 1, '[]', NULL, '2024-07-28 23:47:14', '2024-07-28 23:47:14'),
(140, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 1, 'App\\Models\\User', 1, '[]', NULL, '2024-07-28 23:47:27', '2024-07-28 23:47:27'),
(141, 'default', 'created', 'App\\Models\\User', 'created', 29, NULL, NULL, '[]', NULL, '2024-07-28 23:54:08', '2024-07-28 23:54:08'),
(142, 'default', 'created', 'App\\Models\\Dokter', 'created', 5, NULL, NULL, '[]', NULL, '2024-07-28 23:54:08', '2024-07-28 23:54:08'),
(143, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 5, 'App\\Models\\User', 1, '[]', NULL, '2024-07-28 23:54:24', '2024-07-28 23:54:24'),
(144, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 5, 'App\\Models\\User', 1, '[]', NULL, '2024-07-28 23:58:27', '2024-07-28 23:58:27'),
(145, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 1, 'App\\Models\\User', 1, '[]', NULL, '2024-07-29 00:21:56', '2024-07-29 00:21:56'),
(146, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 1, 'App\\Models\\User', 1, '[]', NULL, '2024-07-29 00:23:42', '2024-07-29 00:23:42'),
(147, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 1, 'App\\Models\\User', 1, '[]', NULL, '2024-07-29 00:26:36', '2024-07-29 00:26:36'),
(148, 'default', 'created', 'App\\Models\\Janji', 'created', 5, NULL, NULL, '[]', NULL, '2024-07-29 00:41:27', '2024-07-29 00:41:27'),
(149, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 1, 'App\\Models\\User', 1, '[]', NULL, '2024-07-29 02:12:38', '2024-07-29 02:12:38'),
(150, 'default', 'created', 'App\\Models\\User', 'created', 30, NULL, NULL, '[]', NULL, '2024-07-30 00:01:01', '2024-07-30 00:01:01'),
(151, 'default', 'created', 'App\\Models\\User', 'created', 31, NULL, NULL, '[]', NULL, '2024-07-30 00:08:26', '2024-07-30 00:08:26'),
(152, 'default', 'created', 'App\\Models\\User', 'created', 32, NULL, NULL, '[]', NULL, '2024-07-30 00:39:01', '2024-07-30 00:39:01'),
(153, 'default', 'created', 'App\\Models\\User', 'created', 33, NULL, NULL, '[]', NULL, '2024-07-30 00:58:29', '2024-07-30 00:58:29'),
(154, 'default', 'created', 'App\\Models\\User', 'created', 34, NULL, NULL, '[]', NULL, '2024-07-30 01:21:02', '2024-07-30 01:21:02'),
(155, 'default', 'created', 'App\\Models\\User', 'created', 35, NULL, NULL, '[]', NULL, '2024-07-30 01:37:06', '2024-07-30 01:37:06'),
(156, 'default', 'created', 'App\\Models\\User', 'created', 36, NULL, NULL, '[]', NULL, '2024-07-30 01:41:55', '2024-07-30 01:41:55'),
(157, 'default', 'created', 'App\\Models\\User', 'created', 37, NULL, NULL, '[]', NULL, '2024-07-30 01:44:56', '2024-07-30 01:44:56'),
(158, 'default', 'created', 'App\\Models\\User', 'created', 38, NULL, NULL, '[]', NULL, '2024-07-30 01:52:58', '2024-07-30 01:52:58'),
(159, 'default', 'created', 'App\\Models\\User', 'created', 39, NULL, NULL, '[]', NULL, '2024-07-30 01:57:23', '2024-07-30 01:57:23'),
(160, 'default', 'created', 'App\\Models\\User', 'created', 40, NULL, NULL, '[]', NULL, '2024-07-30 02:03:18', '2024-07-30 02:03:18'),
(161, 'default', 'created', 'App\\Models\\User', 'created', 41, NULL, NULL, '[]', NULL, '2024-07-30 02:07:40', '2024-07-30 02:07:40'),
(162, 'default', 'created', 'App\\Models\\User', 'created', 42, NULL, NULL, '[]', NULL, '2024-07-30 02:10:36', '2024-07-30 02:10:36'),
(163, 'default', 'created', 'App\\Models\\User', 'created', 43, NULL, NULL, '[]', NULL, '2024-07-30 02:21:52', '2024-07-30 02:21:52'),
(164, 'default', 'created', 'App\\Models\\Janji', 'created', 6, NULL, NULL, '[]', NULL, '2024-07-30 02:27:31', '2024-07-30 02:27:31'),
(165, 'default', 'created', 'App\\Models\\User', 'created', 44, NULL, NULL, '[]', NULL, '2024-07-30 02:28:32', '2024-07-30 02:28:32'),
(166, 'default', 'created', 'App\\Models\\User', 'created', 45, NULL, NULL, '[]', NULL, '2024-07-30 02:29:49', '2024-07-30 02:29:49'),
(167, 'default', 'created', 'App\\Models\\User', 'created', 46, NULL, NULL, '[]', NULL, '2024-07-30 02:31:09', '2024-07-30 02:31:09'),
(168, 'default', 'created', 'App\\Models\\User', 'created', 47, NULL, NULL, '[]', NULL, '2024-07-30 02:32:47', '2024-07-30 02:32:47'),
(169, 'default', 'created', 'App\\Models\\User', 'created', 48, NULL, NULL, '[]', NULL, '2024-07-30 02:34:21', '2024-07-30 02:34:21'),
(170, 'default', 'created', 'App\\Models\\User', 'created', 49, NULL, NULL, '[]', NULL, '2024-07-30 02:39:20', '2024-07-30 02:39:20'),
(171, 'default', 'created', 'App\\Models\\User', 'created', 50, NULL, NULL, '[]', NULL, '2024-07-30 02:41:12', '2024-07-30 02:41:12'),
(172, 'default', 'created', 'App\\Models\\User', 'created', 51, NULL, NULL, '[]', NULL, '2024-07-30 02:44:03', '2024-07-30 02:44:03'),
(173, 'default', 'created', 'App\\Models\\User', 'created', 52, NULL, NULL, '[]', NULL, '2024-07-30 02:51:48', '2024-07-30 02:51:48'),
(174, 'default', 'created', 'App\\Models\\User', 'created', 54, NULL, NULL, '[]', NULL, '2024-07-30 02:53:19', '2024-07-30 02:53:19'),
(175, 'default', 'updated', 'App\\Models\\Janji', 'updated', 6, NULL, NULL, '[]', NULL, '2024-07-30 03:15:32', '2024-07-30 03:15:32'),
(176, 'default', 'created', 'App\\Models\\Konsultasi', 'created', 15, NULL, NULL, '[]', NULL, '2024-07-30 03:15:32', '2024-07-30 03:15:32'),
(177, 'default', 'created', 'App\\Models\\User', 'created', 55, NULL, NULL, '[]', NULL, '2024-07-30 03:15:59', '2024-07-30 03:15:59'),
(178, 'default', 'created', 'App\\Models\\Catatan', 'created', 5, NULL, NULL, '[]', NULL, '2024-07-30 03:18:29', '2024-07-30 03:18:29'),
(179, 'default', 'updated', 'App\\Models\\Konsultasi', 'updated', 15, NULL, NULL, '[]', NULL, '2024-07-30 03:18:33', '2024-07-30 03:18:33'),
(180, 'default', 'created', 'App\\Models\\User', 'created', 56, NULL, NULL, '[]', NULL, '2024-07-30 03:23:50', '2024-07-30 03:23:50'),
(181, 'default', 'created', 'App\\Models\\User', 'created', 57, NULL, NULL, '[]', NULL, '2024-07-30 03:27:39', '2024-07-30 03:27:39'),
(182, 'default', 'created', 'App\\Models\\User', 'created', 58, NULL, NULL, '[]', NULL, '2024-07-30 03:29:06', '2024-07-30 03:29:06'),
(183, 'default', 'created', 'App\\Models\\User', 'created', 59, NULL, NULL, '[]', NULL, '2024-07-30 03:35:56', '2024-07-30 03:35:56'),
(184, 'default', 'created', 'App\\Models\\User', 'created', 60, NULL, NULL, '[]', NULL, '2024-07-30 03:46:16', '2024-07-30 03:46:16'),
(185, 'default', 'created', 'App\\Models\\User', 'created', 61, NULL, NULL, '[]', NULL, '2024-07-30 03:48:26', '2024-07-30 03:48:26'),
(186, 'default', 'created', 'App\\Models\\User', 'created', 62, NULL, NULL, '[]', NULL, '2024-07-30 03:50:07', '2024-07-30 03:50:07'),
(187, 'default', 'created', 'App\\Models\\User', 'created', 63, NULL, NULL, '[]', NULL, '2024-07-30 04:15:34', '2024-07-30 04:15:34'),
(188, 'default', 'created', 'App\\Models\\User', 'created', 64, NULL, NULL, '[]', NULL, '2024-07-30 04:17:41', '2024-07-30 04:17:41'),
(189, 'default', 'created', 'App\\Models\\User', 'created', 65, NULL, NULL, '[]', NULL, '2024-07-30 04:20:29', '2024-07-30 04:20:29'),
(190, 'default', 'created', 'App\\Models\\User', 'created', 66, NULL, NULL, '[]', NULL, '2024-07-30 04:23:34', '2024-07-30 04:23:34'),
(191, 'default', 'created', 'App\\Models\\User', 'created', 67, NULL, NULL, '[]', NULL, '2024-07-30 04:38:04', '2024-07-30 04:38:04'),
(192, 'default', 'created', 'App\\Models\\User', 'created', 68, NULL, NULL, '[]', NULL, '2024-07-30 04:40:01', '2024-07-30 04:40:01'),
(193, 'default', 'created', 'App\\Models\\User', 'created', 69, NULL, NULL, '[]', NULL, '2024-07-30 04:42:29', '2024-07-30 04:42:29'),
(194, 'default', 'created', 'App\\Models\\User', 'created', 70, NULL, NULL, '[]', NULL, '2024-07-30 04:44:36', '2024-07-30 04:44:36'),
(195, 'default', 'created', 'App\\Models\\User', 'created', 71, NULL, NULL, '[]', NULL, '2024-07-30 04:46:08', '2024-07-30 04:46:08'),
(196, 'default', 'created', 'App\\Models\\User', 'created', 72, NULL, NULL, '[]', NULL, '2024-07-30 04:46:41', '2024-07-30 04:46:41'),
(197, 'default', 'created', 'App\\Models\\User', 'created', 73, NULL, NULL, '[]', NULL, '2024-07-30 04:47:48', '2024-07-30 04:47:48'),
(198, 'default', 'created', 'App\\Models\\User', 'created', 74, NULL, NULL, '[]', NULL, '2024-07-30 04:51:17', '2024-07-30 04:51:17'),
(199, 'default', 'created', 'App\\Models\\Konsultasi', 'created', 16, NULL, NULL, '[]', NULL, '2024-07-31 02:43:16', '2024-07-31 02:43:16'),
(200, 'default', 'created', 'App\\Models\\Catatan', 'created', 6, NULL, NULL, '[]', NULL, '2024-07-31 02:44:17', '2024-07-31 02:44:17'),
(201, 'default', 'updated', 'App\\Models\\Konsultasi', 'updated', 16, NULL, NULL, '[]', NULL, '2024-07-31 02:44:22', '2024-07-31 02:44:22'),
(202, 'default', 'created', 'App\\Models\\User', 'created', 75, NULL, NULL, '[]', NULL, '2024-07-31 02:59:15', '2024-07-31 02:59:15'),
(203, 'default', 'created', 'App\\Models\\Rating', 'created', 9, 'App\\Models\\User', 75, '[]', NULL, '2024-07-31 03:16:14', '2024-07-31 03:16:14'),
(204, 'default', 'created', 'App\\Models\\Janji', 'created', 7, NULL, NULL, '[]', NULL, '2024-07-31 03:33:55', '2024-07-31 03:33:55'),
(205, 'default', 'updated', 'App\\Models\\Janji', 'updated', 7, NULL, NULL, '[]', NULL, '2024-07-31 03:35:12', '2024-07-31 03:35:12'),
(206, 'default', 'created', 'App\\Models\\Konsultasi', 'created', 17, NULL, NULL, '[]', NULL, '2024-07-31 03:35:13', '2024-07-31 03:35:13'),
(207, 'default', 'updated', 'App\\Models\\Konsultasi', 'updated', 17, 'App\\Models\\User', 1, '[]', NULL, '2024-07-31 03:36:37', '2024-07-31 03:36:37'),
(208, 'default', 'deleted', 'App\\Models\\Konsultasi', 'deleted', 9, 'App\\Models\\User', 1, '[]', NULL, '2024-07-31 11:38:13', '2024-07-31 11:38:13'),
(209, 'default', 'deleted', 'App\\Models\\Konsultasi', 'deleted', 10, 'App\\Models\\User', 1, '[]', NULL, '2024-07-31 11:38:20', '2024-07-31 11:38:20'),
(210, 'default', 'created', 'App\\Models\\Rating', 'created', 10, 'App\\Models\\User', 75, '[]', NULL, '2024-07-31 20:44:23', '2024-07-31 20:44:23'),
(211, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 1, 'App\\Models\\User', 1, '[]', NULL, '2024-09-30 01:00:34', '2024-09-30 01:00:34'),
(212, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 1, 'App\\Models\\User', 1, '[]', NULL, '2024-09-30 01:00:43', '2024-09-30 01:00:43'),
(213, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 1, 'App\\Models\\User', 1, '[]', NULL, '2024-10-06 22:14:36', '2024-10-06 22:14:36'),
(214, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 1, 'App\\Models\\User', 1, '[]', NULL, '2024-10-06 22:14:42', '2024-10-06 22:14:42'),
(215, 'default', 'created', 'App\\Models\\User', 'created', 76, NULL, NULL, '[]', NULL, '2024-10-09 00:52:54', '2024-10-09 00:52:54'),
(216, 'default', 'created', 'App\\Models\\User', 'created', 77, NULL, NULL, '[]', NULL, '2024-10-09 00:53:43', '2024-10-09 00:53:43'),
(217, 'default', 'created', 'App\\Models\\User', 'created', 79, NULL, NULL, '[]', NULL, '2024-10-09 03:03:36', '2024-10-09 03:03:36'),
(218, 'default', 'created', 'App\\Models\\User', 'created', 80, NULL, NULL, '[]', NULL, '2024-10-09 03:42:20', '2024-10-09 03:42:20'),
(219, 'default', 'created', 'App\\Models\\User', 'created', 82, NULL, NULL, '[]', NULL, '2024-10-09 19:33:58', '2024-10-09 19:33:58'),
(220, 'default', 'created', 'App\\Models\\User', 'created', 83, NULL, NULL, '[]', NULL, '2024-10-09 19:35:03', '2024-10-09 19:35:03'),
(221, 'default', 'created', 'App\\Models\\User', 'created', 84, NULL, NULL, '[]', NULL, '2024-10-09 19:36:04', '2024-10-09 19:36:04'),
(222, 'default', 'created', 'App\\Models\\User', 'created', 86, NULL, NULL, '[]', NULL, '2024-10-09 19:37:18', '2024-10-09 19:37:18'),
(223, 'default', 'created', 'App\\Models\\User', 'created', 87, NULL, NULL, '[]', NULL, '2024-10-09 19:38:03', '2024-10-09 19:38:03'),
(224, 'default', 'created', 'App\\Models\\User', 'created', 89, NULL, NULL, '[]', NULL, '2024-10-09 19:49:56', '2024-10-09 19:49:56'),
(225, 'default', 'created', 'App\\Models\\User', 'created', 90, NULL, NULL, '[]', NULL, '2024-10-09 19:54:20', '2024-10-09 19:54:20'),
(226, 'default', 'created', 'App\\Models\\User', 'created', 91, NULL, NULL, '[]', NULL, '2024-10-09 19:56:20', '2024-10-09 19:56:20'),
(227, 'default', 'created', 'App\\Models\\User', 'created', 92, NULL, NULL, '[]', NULL, '2024-10-09 19:57:24', '2024-10-09 19:57:24'),
(228, 'default', 'created', 'App\\Models\\User', 'created', 94, NULL, NULL, '[]', NULL, '2024-10-09 20:02:58', '2024-10-09 20:02:58'),
(229, 'default', 'created', 'App\\Models\\User', 'created', 95, NULL, NULL, '[]', NULL, '2024-10-09 20:04:14', '2024-10-09 20:04:14'),
(230, 'default', 'created', 'App\\Models\\User', 'created', 96, NULL, NULL, '[]', NULL, '2024-10-09 20:10:55', '2024-10-09 20:10:55'),
(231, 'default', 'created', 'App\\Models\\User', 'created', 97, NULL, NULL, '[]', NULL, '2024-10-09 20:13:59', '2024-10-09 20:13:59'),
(232, 'default', 'created', 'App\\Models\\User', 'created', 98, NULL, NULL, '[]', NULL, '2024-10-09 20:23:36', '2024-10-09 20:23:36'),
(233, 'default', 'created', 'App\\Models\\User', 'created', 99, NULL, NULL, '[]', NULL, '2024-10-09 20:25:09', '2024-10-09 20:25:09'),
(234, 'default', 'created', 'App\\Models\\User', 'created', 100, NULL, NULL, '[]', NULL, '2024-10-09 20:35:58', '2024-10-09 20:35:58'),
(235, 'default', 'created', 'App\\Models\\User', 'created', 101, NULL, NULL, '[]', NULL, '2024-10-09 20:38:15', '2024-10-09 20:38:15'),
(236, 'default', 'created', 'App\\Models\\User', 'created', 102, NULL, NULL, '[]', NULL, '2024-10-09 20:43:56', '2024-10-09 20:43:56'),
(237, 'default', 'created', 'App\\Models\\User', 'created', 103, NULL, NULL, '[]', NULL, '2024-10-11 03:08:17', '2024-10-11 03:08:17'),
(238, 'default', 'created', 'App\\Models\\User', 'created', 104, NULL, NULL, '[]', NULL, '2024-10-11 03:12:03', '2024-10-11 03:12:03'),
(239, 'default', 'created', 'App\\Models\\User', 'created', 105, NULL, NULL, '[]', NULL, '2024-10-13 19:57:16', '2024-10-13 19:57:16'),
(240, 'default', 'created', 'App\\Models\\User', 'created', 106, NULL, NULL, '[]', NULL, '2024-10-13 19:58:32', '2024-10-13 19:58:32'),
(241, 'default', 'created', 'App\\Models\\User', 'created', 107, NULL, NULL, '[]', NULL, '2024-10-14 02:41:51', '2024-10-14 02:41:51'),
(242, 'default', 'created', 'App\\Models\\User', 'created', 108, NULL, NULL, '[]', NULL, '2024-10-14 02:43:16', '2024-10-14 02:43:16'),
(243, 'default', 'created', 'App\\Models\\User', 'created', 109, NULL, NULL, '[]', NULL, '2024-10-14 02:45:08', '2024-10-14 02:45:08'),
(244, 'default', 'created', 'App\\Models\\User', 'created', 110, NULL, NULL, '[]', NULL, '2024-10-14 02:47:26', '2024-10-14 02:47:26'),
(245, 'default', 'created', 'App\\Models\\User', 'created', 111, NULL, NULL, '[]', NULL, '2024-10-14 02:52:15', '2024-10-14 02:52:15'),
(246, 'default', 'created', 'App\\Models\\User', 'created', 112, NULL, NULL, '[]', NULL, '2024-10-14 02:55:38', '2024-10-14 02:55:38'),
(247, 'default', 'created', 'App\\Models\\User', 'created', 113, NULL, NULL, '[]', NULL, '2024-10-14 03:01:15', '2024-10-14 03:01:15'),
(248, 'default', 'created', 'App\\Models\\User', 'created', 114, NULL, NULL, '[]', NULL, '2024-10-14 19:22:31', '2024-10-14 19:22:31'),
(249, 'default', 'created', 'App\\Models\\User', 'created', 115, NULL, NULL, '[]', NULL, '2024-10-14 19:25:09', '2024-10-14 19:25:09'),
(250, 'default', 'created', 'App\\Models\\User', 'created', 116, NULL, NULL, '[]', NULL, '2024-10-14 19:26:30', '2024-10-14 19:26:30'),
(251, 'default', 'created', 'App\\Models\\User', 'created', 117, NULL, NULL, '[]', NULL, '2024-10-14 19:37:43', '2024-10-14 19:37:43'),
(252, 'default', 'created', 'App\\Models\\Pasien', 'created', 6, NULL, NULL, '[]', NULL, '2024-10-14 19:37:48', '2024-10-14 19:37:48'),
(253, 'default', 'created', 'App\\Models\\User', 'created', 118, NULL, NULL, '[]', NULL, '2024-10-14 19:46:37', '2024-10-14 19:46:37'),
(254, 'default', 'created', 'App\\Models\\Pasien', 'created', 7, NULL, NULL, '[]', NULL, '2024-10-14 19:46:42', '2024-10-14 19:46:42'),
(255, 'default', 'updated', 'App\\Models\\User', 'updated', 118, NULL, NULL, '[]', NULL, '2024-10-14 19:47:07', '2024-10-14 19:47:07'),
(256, 'default', 'created', 'App\\Models\\User', 'created', 119, NULL, NULL, '[]', NULL, '2024-10-21 23:50:48', '2024-10-21 23:50:48'),
(257, 'default', 'created', 'App\\Models\\Dokter', 'created', 6, NULL, NULL, '[]', NULL, '2024-10-21 23:50:55', '2024-10-21 23:50:55'),
(258, 'default', 'updated', 'App\\Models\\User', 'updated', 119, NULL, NULL, '[]', NULL, '2024-10-21 23:51:16', '2024-10-21 23:51:16'),
(259, 'default', 'created', 'App\\Models\\Rating', 'created', 11, 'App\\Models\\User', 1, '[]', NULL, '2024-10-25 00:01:43', '2024-10-25 00:01:43'),
(260, 'default', 'created', 'App\\Models\\Rating', 'created', 12, 'App\\Models\\User', 1, '[]', NULL, '2024-10-25 00:09:53', '2024-10-25 00:09:53'),
(261, 'default', 'created', 'App\\Models\\Rating', 'created', 13, 'App\\Models\\User', 1, '[]', NULL, '2024-10-25 04:35:32', '2024-10-25 04:35:32'),
(262, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 7, 'App\\Models\\User', 1, '[]', NULL, '2024-10-25 07:16:12', '2024-10-25 07:16:12'),
(263, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 7, 'App\\Models\\User', 1, '[]', NULL, '2024-10-25 07:16:15', '2024-10-25 07:16:15'),
(264, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 7, 'App\\Models\\User', 4, '[]', NULL, '2024-10-27 03:43:12', '2024-10-27 03:43:12'),
(265, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 7, 'App\\Models\\User', 4, '[]', NULL, '2024-10-27 03:43:19', '2024-10-27 03:43:19'),
(266, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 7, 'App\\Models\\User', 4, '[]', NULL, '2024-10-27 03:44:33', '2024-10-27 03:44:33'),
(267, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 7, 'App\\Models\\User', 4, '[]', NULL, '2024-10-27 03:45:08', '2024-10-27 03:45:08'),
(268, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 7, 'App\\Models\\User', 4, '[]', NULL, '2024-10-27 03:46:07', '2024-10-27 03:46:07'),
(269, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 7, 'App\\Models\\User', 4, '[]', NULL, '2024-10-27 03:47:00', '2024-10-27 03:47:00'),
(270, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 7, 'App\\Models\\User', 4, '[]', NULL, '2024-10-27 03:47:05', '2024-10-27 03:47:05'),
(271, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 7, 'App\\Models\\User', 4, '[]', NULL, '2024-10-27 03:47:08', '2024-10-27 03:47:08'),
(272, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 7, 'App\\Models\\User', 4, '[]', NULL, '2024-10-27 03:53:31', '2024-10-27 03:53:31'),
(273, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 7, 'App\\Models\\User', 4, '[]', NULL, '2024-10-27 03:55:04', '2024-10-27 03:55:04'),
(274, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 7, 'App\\Models\\User', 4, '[]', NULL, '2024-10-27 03:55:44', '2024-10-27 03:55:44'),
(275, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 7, 'App\\Models\\User', 4, '[]', NULL, '2024-10-27 03:55:50', '2024-10-27 03:55:50'),
(276, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 7, 'App\\Models\\User', 4, '[]', NULL, '2024-10-27 03:55:54', '2024-10-27 03:55:54'),
(277, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 7, 'App\\Models\\User', 4, '[]', NULL, '2024-10-27 03:55:58', '2024-10-27 03:55:58'),
(278, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 6, 'App\\Models\\User', 4, '[]', NULL, '2024-10-27 10:56:39', '2024-10-27 10:56:39'),
(279, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 6, 'App\\Models\\User', 4, '[]', NULL, '2024-10-27 10:56:48', '2024-10-27 10:56:48'),
(280, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 6, 'App\\Models\\User', 4, '[]', NULL, '2024-10-27 10:59:59', '2024-10-27 10:59:59'),
(281, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 6, 'App\\Models\\User', 4, '[]', NULL, '2024-10-27 11:00:07', '2024-10-27 11:00:07'),
(282, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 6, 'App\\Models\\User', 1, '[]', NULL, '2024-10-27 11:04:51', '2024-10-27 11:04:51'),
(283, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 6, 'App\\Models\\User', 1, '[]', NULL, '2024-10-27 11:07:21', '2024-10-27 11:07:21'),
(284, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 6, 'App\\Models\\User', 1, '[]', NULL, '2024-10-27 11:07:52', '2024-10-27 11:07:52'),
(285, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 6, 'App\\Models\\User', 1, '[]', NULL, '2024-10-27 11:08:13', '2024-10-27 11:08:13'),
(286, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 6, 'App\\Models\\User', 4, '[]', NULL, '2024-10-27 11:10:44', '2024-10-27 11:10:44'),
(287, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 6, 'App\\Models\\User', 4, '[]', NULL, '2024-10-27 11:10:50', '2024-10-27 11:10:50'),
(288, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 5, 'App\\Models\\User', 4, '[]', NULL, '2024-10-27 11:11:56', '2024-10-27 11:11:56'),
(289, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 5, 'App\\Models\\User', 4, '[]', NULL, '2024-10-27 11:12:05', '2024-10-27 11:12:05'),
(290, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 6, 'App\\Models\\User', 1, '[]', NULL, '2024-10-28 07:15:22', '2024-10-28 07:15:22'),
(291, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 6, 'App\\Models\\User', 1, '[]', NULL, '2024-10-28 07:15:28', '2024-10-28 07:15:28'),
(292, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 6, 'App\\Models\\User', 4, '[]', NULL, '2024-10-28 08:01:49', '2024-10-28 08:01:49'),
(293, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 6, 'App\\Models\\User', 4, '[]', NULL, '2024-10-28 08:02:04', '2024-10-28 08:02:04'),
(294, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 6, 'App\\Models\\User', 4, '[]', NULL, '2024-10-28 08:02:17', '2024-10-28 08:02:17'),
(295, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 6, 'App\\Models\\User', 4, '[]', NULL, '2024-10-28 08:02:32', '2024-10-28 08:02:32'),
(296, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 6, 'App\\Models\\User', 1, '[]', NULL, '2024-10-28 08:15:57', '2024-10-28 08:15:57'),
(297, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 6, 'App\\Models\\User', 1, '[]', NULL, '2024-10-28 08:16:02', '2024-10-28 08:16:02'),
(298, 'default', 'created', 'App\\Models\\Rating', 'created', 14, 'App\\Models\\User', 1, '[]', NULL, '2024-10-28 08:16:29', '2024-10-28 08:16:29'),
(299, 'default', 'created', 'App\\Models\\Janji', 'created', 8, NULL, NULL, '[]', NULL, '2024-10-28 08:25:37', '2024-10-28 08:25:37'),
(300, 'default', 'created', 'App\\Models\\Janji', 'created', 9, NULL, NULL, '[]', NULL, '2024-10-28 08:35:41', '2024-10-28 08:35:41'),
(301, 'default', 'created', 'App\\Models\\User', 'created', 120, NULL, NULL, '[]', NULL, '2024-10-28 08:46:25', '2024-10-28 08:46:25'),
(302, 'default', 'created', 'App\\Models\\Dokter', 'created', 7, NULL, NULL, '[]', NULL, '2024-10-28 08:46:30', '2024-10-28 08:46:30'),
(303, 'default', 'updated', 'App\\Models\\User', 'updated', 120, NULL, NULL, '[]', NULL, '2024-10-28 08:47:12', '2024-10-28 08:47:12'),
(304, 'default', 'created', 'App\\Models\\User', 'created', 121, NULL, NULL, '[]', NULL, '2024-10-28 08:48:33', '2024-10-28 08:48:33'),
(305, 'default', 'created', 'App\\Models\\Pasien', 'created', 8, NULL, NULL, '[]', NULL, '2024-10-28 08:48:37', '2024-10-28 08:48:37'),
(306, 'default', 'updated', 'App\\Models\\User', 'updated', 121, NULL, NULL, '[]', NULL, '2024-10-28 08:48:48', '2024-10-28 08:48:48'),
(307, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 7, 'App\\Models\\User', 1, '[]', NULL, '2024-10-28 08:49:51', '2024-10-28 08:49:51'),
(308, 'default', 'created', 'App\\Models\\Janji', 'created', 10, NULL, NULL, '[]', NULL, '2024-10-28 08:56:55', '2024-10-28 08:56:55'),
(309, 'default', 'updated', 'App\\Models\\Janji', 'updated', 10, NULL, NULL, '[]', NULL, '2024-10-28 08:57:11', '2024-10-28 08:57:11'),
(310, 'default', 'created', 'App\\Models\\Konsultasi', 'created', 18, NULL, NULL, '[]', NULL, '2024-10-28 08:57:12', '2024-10-28 08:57:12'),
(311, 'default', 'created', 'App\\Models\\Konsultasi', 'created', 19, NULL, NULL, '[]', NULL, '2024-10-28 08:57:17', '2024-10-28 08:57:17'),
(312, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 7, 'App\\Models\\User', 1, '[]', NULL, '2024-10-28 09:47:47', '2024-10-28 09:47:47'),
(313, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 7, 'App\\Models\\User', 1, '[]', NULL, '2024-10-28 09:47:52', '2024-10-28 09:47:52'),
(314, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 7, 'App\\Models\\User', 1, '[]', NULL, '2024-10-28 09:56:12', '2024-10-28 09:56:12'),
(315, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 7, 'App\\Models\\User', 1, '[]', NULL, '2024-10-28 09:56:29', '2024-10-28 09:56:29'),
(316, 'default', 'created', 'App\\Models\\User', 'created', 122, NULL, NULL, '[]', NULL, '2024-10-28 10:00:46', '2024-10-28 10:00:46'),
(317, 'default', 'created', 'App\\Models\\Dokter', 'created', 8, NULL, NULL, '[]', NULL, '2024-10-28 10:00:52', '2024-10-28 10:00:52'),
(318, 'default', 'updated', 'App\\Models\\User', 'updated', 122, NULL, NULL, '[]', NULL, '2024-10-28 10:01:17', '2024-10-28 10:01:17'),
(319, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 8, 'App\\Models\\User', 1, '[]', NULL, '2024-10-28 10:03:45', '2024-10-28 10:03:45'),
(320, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 8, 'App\\Models\\User', 1, '[]', NULL, '2024-10-28 10:05:28', '2024-10-28 10:05:28'),
(321, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 8, 'App\\Models\\User', 1, '[]', NULL, '2024-10-28 10:05:45', '2024-10-28 10:05:45'),
(322, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 8, 'App\\Models\\User', 1, '[]', NULL, '2024-10-28 10:05:52', '2024-10-28 10:05:52'),
(323, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 8, 'App\\Models\\User', 1, '[]', NULL, '2024-10-28 10:05:58', '2024-10-28 10:05:58'),
(324, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 8, 'App\\Models\\User', 1, '[]', NULL, '2024-10-28 10:06:04', '2024-10-28 10:06:04'),
(325, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 8, 'App\\Models\\User', 1, '[]', NULL, '2024-10-28 10:06:12', '2024-10-28 10:06:12'),
(326, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 8, 'App\\Models\\User', 1, '[]', NULL, '2024-10-28 10:10:23', '2024-10-28 10:10:23'),
(327, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 8, 'App\\Models\\User', 4, '[]', NULL, '2024-10-28 10:10:47', '2024-10-28 10:10:47'),
(328, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 8, 'App\\Models\\User', 4, '[]', NULL, '2024-10-28 10:10:53', '2024-10-28 10:10:53'),
(329, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 8, 'App\\Models\\User', 4, '[]', NULL, '2024-10-28 10:11:47', '2024-10-28 10:11:47'),
(330, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 8, 'App\\Models\\User', 4, '[]', NULL, '2024-10-28 10:11:58', '2024-10-28 10:11:58'),
(331, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 8, 'App\\Models\\User', 4, '[]', NULL, '2024-10-28 10:12:43', '2024-10-28 10:12:43'),
(332, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 8, 'App\\Models\\User', 4, '[]', NULL, '2024-10-28 10:46:34', '2024-10-28 10:46:34'),
(333, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 8, 'App\\Models\\User', 1, '[]', NULL, '2024-10-28 11:08:05', '2024-10-28 11:08:05'),
(334, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 8, 'App\\Models\\User', 1, '[]', NULL, '2024-10-28 11:10:32', '2024-10-28 11:10:32'),
(335, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 8, 'App\\Models\\User', 1, '[]', NULL, '2024-10-28 11:10:38', '2024-10-28 11:10:38'),
(336, 'default', 'created', 'App\\Models\\Janji', 'created', 11, NULL, NULL, '[]', NULL, '2024-10-28 22:03:21', '2024-10-28 22:03:21'),
(337, 'default', 'updated', 'App\\Models\\Janji', 'updated', 11, NULL, NULL, '[]', NULL, '2024-10-28 22:03:44', '2024-10-28 22:03:44'),
(338, 'default', 'created', 'App\\Models\\Konsultasi', 'created', 20, NULL, NULL, '[]', NULL, '2024-10-28 22:03:44', '2024-10-28 22:03:44'),
(339, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 8, NULL, NULL, '[]', NULL, '2024-12-19 04:31:20', '2024-12-19 04:31:20'),
(340, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 8, NULL, NULL, '[]', NULL, '2024-12-19 04:31:20', '2024-12-19 04:31:20'),
(341, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 8, NULL, NULL, '[]', NULL, '2024-12-19 04:32:30', '2024-12-19 04:32:30'),
(342, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 8, NULL, NULL, '[]', NULL, '2024-12-19 04:32:30', '2024-12-19 04:32:30'),
(343, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 8, NULL, NULL, '[]', NULL, '2024-12-19 04:32:48', '2024-12-19 04:32:48'),
(344, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 8, NULL, NULL, '[]', NULL, '2024-12-19 04:32:48', '2024-12-19 04:32:48'),
(345, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 8, NULL, NULL, '[]', NULL, '2024-12-19 04:32:57', '2024-12-19 04:32:57'),
(346, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 8, NULL, NULL, '[]', NULL, '2024-12-19 04:32:57', '2024-12-19 04:32:57'),
(347, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 1, 'App\\Models\\User', 1, '[]', NULL, '2024-12-19 05:11:49', '2024-12-19 05:11:49'),
(348, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 8, 'App\\Models\\User', 1, '[]', NULL, '2024-12-19 21:43:39', '2024-12-19 21:43:39'),
(349, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 8, 'App\\Models\\User', 1, '[]', NULL, '2024-12-19 21:43:43', '2024-12-19 21:43:43'),
(350, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 1, 'App\\Models\\User', 1, '[]', NULL, '2024-12-19 21:43:47', '2024-12-19 21:43:47'),
(351, 'default', 'created', 'App\\Models\\User', 'created', 123, NULL, NULL, '[]', NULL, '2024-12-22 10:50:46', '2024-12-22 10:50:46'),
(352, 'default', 'created', 'App\\Models\\Pasien', 'created', 9, NULL, NULL, '[]', NULL, '2024-12-22 10:50:52', '2024-12-22 10:50:52'),
(353, 'default', 'updated', 'App\\Models\\User', 'updated', 123, NULL, NULL, '[]', NULL, '2024-12-22 10:51:08', '2024-12-22 10:51:08'),
(354, 'default', 'created', 'App\\Models\\Catatan', 'created', 7, NULL, NULL, '[]', NULL, '2024-12-22 11:33:10', '2024-12-22 11:33:10'),
(355, 'default', 'updated', 'App\\Models\\Janji', 'updated', 11, NULL, NULL, '[]', NULL, '2024-12-22 11:34:29', '2024-12-22 11:34:29'),
(356, 'default', 'updated', 'App\\Models\\Janji', 'updated', 11, NULL, NULL, '[]', NULL, '2024-12-22 11:34:31', '2024-12-22 11:34:31'),
(357, 'default', 'created', 'App\\Models\\Konsultasi', 'created', 21, NULL, NULL, '[]', NULL, '2024-12-22 11:34:32', '2024-12-22 11:34:32'),
(358, 'default', 'updated', 'App\\Models\\Janji', 'updated', 11, NULL, NULL, '[]', NULL, '2024-12-22 11:34:35', '2024-12-22 11:34:35'),
(359, 'default', 'updated', 'App\\Models\\User', 'updated', 122, 'App\\Models\\User', 122, '[]', NULL, '2024-12-22 11:55:58', '2024-12-22 11:55:58');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(360, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 1, 'App\\Models\\User', 1, '[]', NULL, '2024-12-28 14:53:58', '2024-12-28 14:53:58'),
(361, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 1, 'App\\Models\\User', 1, '[]', NULL, '2024-12-28 14:56:30', '2024-12-28 14:56:30'),
(362, 'default', 'created', 'App\\Models\\Spesialis', 'created', 239, NULL, NULL, '[]', NULL, '2024-12-29 07:17:33', '2024-12-29 07:17:33'),
(363, 'default', 'deleted', 'App\\Models\\Spesialis', 'deleted', 239, NULL, NULL, '[]', NULL, '2024-12-29 07:17:38', '2024-12-29 07:17:38'),
(364, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 1, NULL, NULL, '[]', NULL, '2024-12-29 07:19:57', '2024-12-29 07:19:57'),
(365, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 1, NULL, NULL, '[]', NULL, '2024-12-29 07:20:44', '2024-12-29 07:20:44'),
(366, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 5, NULL, NULL, '[]', NULL, '2024-12-29 07:21:03', '2024-12-29 07:21:03'),
(367, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 5, NULL, NULL, '[]', NULL, '2024-12-29 07:21:39', '2024-12-29 07:21:39'),
(368, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 5, NULL, NULL, '[]', NULL, '2024-12-29 07:22:42', '2024-12-29 07:22:42'),
(369, 'default', 'deleted', 'App\\Models\\Konsultasi', 'deleted', 25, NULL, NULL, '[]', NULL, '2024-12-29 07:24:08', '2024-12-29 07:24:08'),
(370, 'default', 'created', 'App\\Models\\Rating', 'created', 21, NULL, NULL, '[]', NULL, '2024-12-29 07:25:20', '2024-12-29 07:25:20'),
(371, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 1, NULL, NULL, '[]', NULL, '2024-12-29 07:25:42', '2024-12-29 07:25:42'),
(372, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 1, NULL, NULL, '[]', NULL, '2024-12-29 07:25:50', '2024-12-29 07:25:50'),
(373, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 5, NULL, NULL, '[]', NULL, '2024-12-29 07:30:17', '2024-12-29 07:30:17'),
(374, 'default', 'created', 'App\\Models\\Spesialis', 'created', 240, NULL, NULL, '[]', NULL, '2024-12-29 07:34:45', '2024-12-29 07:34:45'),
(375, 'default', 'deleted', 'App\\Models\\Spesialis', 'deleted', 240, NULL, NULL, '[]', NULL, '2024-12-29 07:34:49', '2024-12-29 07:34:49'),
(376, 'default', 'created', 'App\\Models\\Spesialis', 'created', 241, NULL, NULL, '[]', NULL, '2024-12-29 07:35:35', '2024-12-29 07:35:35'),
(377, 'default', 'deleted', 'App\\Models\\Spesialis', 'deleted', 241, NULL, NULL, '[]', NULL, '2024-12-29 07:35:42', '2024-12-29 07:35:42'),
(378, 'default', 'updated', 'App\\Models\\User', 'updated', 4, NULL, NULL, '[]', NULL, '2024-12-29 08:59:23', '2024-12-29 08:59:23'),
(379, 'default', 'updated', 'App\\Models\\User', 'updated', 121, NULL, NULL, '[]', NULL, '2024-12-29 10:34:42', '2024-12-29 10:34:42'),
(380, 'default', 'updated', 'App\\Models\\User', 'updated', 121, 'App\\Models\\User', 121, '[]', NULL, '2024-12-29 10:35:03', '2024-12-29 10:35:03'),
(381, 'default', 'updated', 'App\\Models\\User', 'updated', 121, 'App\\Models\\User', 121, '[]', NULL, '2024-12-29 10:37:23', '2024-12-29 10:37:23'),
(382, 'default', 'created', 'App\\Models\\User', 'created', 124, NULL, NULL, '[]', NULL, '2025-01-24 01:38:14', '2025-01-24 01:38:14'),
(383, 'default', 'created', 'App\\Models\\Pasien', 'created', 10, NULL, NULL, '[]', NULL, '2025-01-24 01:38:20', '2025-01-24 01:38:20'),
(384, 'default', 'updated', 'App\\Models\\User', 'updated', 124, NULL, NULL, '[]', NULL, '2025-01-24 01:39:14', '2025-01-24 01:39:14'),
(385, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 10, NULL, NULL, '[]', NULL, '2025-01-24 01:47:30', '2025-01-24 01:47:30'),
(386, 'default', 'created', 'App\\Models\\User', 'created', 125, NULL, NULL, '[]', NULL, '2025-01-24 02:55:03', '2025-01-24 02:55:03'),
(387, 'default', 'created', 'App\\Models\\Pasien', 'created', 11, NULL, NULL, '[]', NULL, '2025-01-24 02:55:08', '2025-01-24 02:55:08'),
(388, 'default', 'updated', 'App\\Models\\User', 'updated', 125, NULL, NULL, '[]', NULL, '2025-01-24 02:56:29', '2025-01-24 02:56:29'),
(389, 'default', 'created', 'App\\Models\\Janji', 'created', 12, NULL, NULL, '[]', NULL, '2025-01-24 03:58:35', '2025-01-24 03:58:35'),
(390, 'default', 'updated', 'App\\Models\\Janji', 'updated', 12, NULL, NULL, '[]', NULL, '2025-01-24 03:59:24', '2025-01-24 03:59:24'),
(391, 'default', 'created', 'App\\Models\\Konsultasi', 'created', 26, NULL, NULL, '[]', NULL, '2025-01-24 03:59:24', '2025-01-24 03:59:24'),
(392, 'default', 'created', 'App\\Models\\User', 'created', 126, NULL, NULL, '[]', NULL, '2025-01-24 05:08:18', '2025-01-24 05:08:18'),
(393, 'default', 'created', 'App\\Models\\Pasien', 'created', 12, NULL, NULL, '[]', NULL, '2025-01-24 05:08:24', '2025-01-24 05:08:24'),
(394, 'default', 'created', 'App\\Models\\Janji', 'created', 13, NULL, NULL, '[]', NULL, '2025-01-24 05:25:40', '2025-01-24 05:25:40'),
(395, 'default', 'created', 'App\\Models\\Janji', 'created', 14, NULL, NULL, '[]', NULL, '2025-01-24 05:33:16', '2025-01-24 05:33:16'),
(396, 'default', 'updated', 'App\\Models\\Janji', 'updated', 13, NULL, NULL, '[]', NULL, '2025-01-24 05:34:33', '2025-01-24 05:34:33'),
(397, 'default', 'created', 'App\\Models\\Konsultasi', 'created', 27, NULL, NULL, '[]', NULL, '2025-01-24 05:34:35', '2025-01-24 05:34:35');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` bigint UNSIGNED NOT NULL,
  `judul_artikel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_artikel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_artikel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `img_artikel`, `desc_artikel`, `created_at`, `updated_at`) VALUES
(1, 'Kenali Jenis dan Penyebab Polio\r\n', 'https://www.biofarma.co.id/media/image/originals/post/2024/07/30/asian-mother-consoling-her-angry-son-bed.jpg', 'https://www.biofarma.co.id/id/announcement/detail/kenali-jenis-dan-penyebab-polio', '2023-04-02 21:13:14', '2023-04-02 21:13:14'),
(2, 'Cara Mencegah Cacar Air yang Harus Diketahui\r\n', 'https://www.biofarma.co.id/media/image/originals/post/2024/07/18/asian-little-girl-showing-his-arm-after-got-vaccinated-inoculation-child-immunization.jpg', 'https://www.biofarma.co.id/id/announcement/detail/cara-mencegah-cacar-air-yang-harus-diketahui', NULL, NULL),
(3, '4 Olahraga yang Cocok untuk Pengidap Diabetes, Bantu Kontrol Kadar Gula Darah', 'https://akcdn.detik.net.id/community/media/visual/2023/09/28/ilustrasi-olahraga-jalan-kaki_169.jpeg', 'https://health.detik.com/berita-detikhealth/d-7463318/4-olahraga-yang-cocok-untuk-pengidap-diabetes-bantu-kontrol-kadar-gula-darah', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bans`
--

CREATE TABLE `bans` (
  `id` bigint UNSIGNED NOT NULL,
  `bannable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bannable_id` bigint UNSIGNED DEFAULT NULL,
  `created_by_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by_id` bigint UNSIGNED DEFAULT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `ip` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expired_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `metas` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin
) ;

-- --------------------------------------------------------

--
-- Table structure for table `catatan`
--

CREATE TABLE `catatan` (
  `id_catatan` bigint UNSIGNED NOT NULL,
  `konsultasi_id` bigint UNSIGNED NOT NULL,
  `gejala` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `diagnosis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `catatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catatan`
--

INSERT INTO `catatan` (`id_catatan`, `konsultasi_id`, `gejala`, `diagnosis`, `catatan`, `created_at`, `updated_at`) VALUES
(3, 11, 'Sakit kepal, mual', 'Masuk angin', 'Isitirahat yang cukup', '2024-07-15 19:45:43', '2024-07-15 19:45:43'),
(6, 16, 'Tidak ada gejala', 'Sehat', 'Istirahat.', '2024-07-31 02:44:17', '2024-07-31 02:44:17'),
(7, 20, 'Pusing', 'Mabuk', 'Minum antimo', '2024-12-22 11:33:10', '2024-12-22 11:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` bigint UNSIGNED NOT NULL,
  `id` bigint UNSIGNED NOT NULL,
  `nip` bigint NOT NULL,
  `gelar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `id`, `nip`, `gelar`) VALUES
(1, 4, 9849189823, 'Ph.D.');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `janji`
--

CREATE TABLE `janji` (
  `id_janji` bigint UNSIGNED NOT NULL,
  `pasien_id` bigint UNSIGNED NOT NULL,
  `dokter_id` bigint UNSIGNED NOT NULL,
  `pasien_tambahan_id` bigint UNSIGNED DEFAULT NULL,
  `sesi_id` bigint UNSIGNED NOT NULL,
  `datetime` datetime NOT NULL,
  `catatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','accepted','rejected') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `janji`
--

INSERT INTO `janji` (`id_janji`, `pasien_id`, `dokter_id`, `pasien_tambahan_id`, `sesi_id`, `datetime`, `catatan`, `status`, `created_at`, `updated_at`) VALUES
(2, 5, 4, 2, 1, '2024-07-16 00:00:00', 'Tolong, dok', 'accepted', '2024-07-15 01:48:14', '2024-07-15 01:48:31'),
(3, 5, 4, 2, 1, '2024-07-17 00:00:00', 'Sakit perut', 'accepted', '2024-07-15 19:08:43', '2024-07-15 19:10:38'),
(4, 5, 4, 2, 1, '2024-07-18 00:00:00', 'Sakit perut', 'accepted', '2024-07-15 19:43:23', '2024-07-15 19:43:50'),
(5, 5, 5, 2, 2, '2024-07-30 00:00:00', 'sakit', 'pending', '2024-07-29 00:41:27', '2024-07-29 00:41:27'),
(6, 5, 4, 2, 1, '2024-07-31 00:00:00', 'Sakit, dok', 'accepted', '2024-07-30 02:27:31', '2024-07-30 03:15:32'),
(7, 5, 4, 2, 1, '2024-08-02 00:00:00', 'Tolong', 'accepted', '2024-07-31 03:33:55', '2024-07-31 03:35:12'),
(11, 8, 8, 5, 16, '2024-10-29 00:00:00', 'sakit', 'rejected', '2024-10-28 22:03:21', '2024-12-22 11:34:35'),
(12, 10, 8, 7, 16, '2025-01-24 00:00:00', 'sakit demam', 'accepted', '2025-01-24 03:58:35', '2025-01-24 03:59:24'),
(13, 10, 8, 7, 16, '2025-01-24 00:00:00', 'mual lambung', 'accepted', '2025-01-24 05:25:40', '2025-01-24 05:34:33'),
(14, 10, 8, 7, 16, '2025-01-24 00:00:00', 'mual lambung', 'pending', '2025-01-24 05:33:16', '2025-01-24 05:33:16');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` bigint UNSIGNED NOT NULL,
  `pasien_id` bigint UNSIGNED NOT NULL,
  `dokter_id` bigint UNSIGNED NOT NULL,
  `topik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('belum dimulai','berlangsung','berakhir','') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `pasien_id`, `dokter_id`, `topik`, `status`, `created_at`, `updated_at`) VALUES
(11, 5, 4, 'Sakit perut', 'berakhir', '2024-07-15 19:43:50', '2024-07-15 19:45:56'),
(12, 5, 4, 'Sakit perut', 'belum dimulai', '2024-07-16 00:40:18', '2024-07-16 00:40:18'),
(13, 5, 4, 'Sakit perut', 'belum dimulai', '2024-07-16 00:43:59', '2024-07-16 00:43:59'),
(14, 5, 4, 'Sakit perut', 'berakhir', '2024-07-16 00:48:39', '2024-07-25 01:24:59'),
(15, 5, 4, 'Sakit, dok', 'berakhir', '2024-07-30 03:15:32', '2024-07-30 03:18:33'),
(16, 5, 4, 'Sakit, dok', 'berakhir', '2024-07-31 02:43:16', '2024-07-31 02:44:22'),
(17, 5, 4, 'Tolong', 'berakhir', '2024-07-31 03:35:13', '2024-07-31 03:36:37'),
(20, 8, 8, 'sakit', 'berlangsung', '2024-10-28 22:03:44', '2024-10-28 22:03:44'),
(26, 10, 8, 'sakit demam', 'berlangsung', '2025-01-24 03:59:24', '2025-01-24 03:59:24'),
(27, 10, 8, 'mual lambung', 'berlangsung', '2025-01-24 05:34:35', '2025-01-24 05:34:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_15_084449_create_spesialis_table', 1),
(6, '2023_03_06_080933_create_user_pasien_table', 1),
(7, '2023_03_06_080938_create_user_dokter_table', 1),
(8, '2023_03_06_080948__create_pasien_tambahan_table', 1),
(9, '2023_03_06_081000_create_konsultasi_table', 1),
(10, '2023_03_06_081008_create_diskusi_table', 1),
(11, '2023_03_26_171130_create_sesi_table', 1),
(12, '2023_03_26_171132_create_rating_table', 1),
(13, '2023_03_26_171140_create_janji_table', 1),
(14, '2023_03_27_081008_create_artikel_table', 1),
(16, '2023_03_06_080948_create_pasien_tambahan_table', 2),
(17, '2014_10_12_000000_create_admins_table', 3),
(18, '2014_10_12_100000_create_password_resets_table', 3),
(19, '2023_04_15_034324_create_activity_log_table', 3),
(20, '2023_04_15_034325_add_event_column_to_activity_log_table', 3),
(21, '2023_04_15_034326_add_batch_uuid_column_to_activity_log_table', 3),
(22, '2023_05_04_032543_add_banned_at_column_to_user_pasien_table', 3),
(23, 'create_bans_table', 3),
(24, 'metas_field_to_bans_table', 3),
(25, '2023_07_12_041603_dosen', 4),
(26, '2024_04_22_051436_create_users_table;', 5),
(49, '2024_06_11_235407_create_sessions_table', 6),
(50, '2024_06_30_161357_create_roles_table', 6),
(51, '2024_07_03_234618_create_permission_tables', 7),
(52, '2024_07_15_010249_create_activity_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App/Models/User', 1),
(2, 'App/Models/User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pasien_tambahan`
--

CREATE TABLE `pasien_tambahan` (
  `id_pasien_tambahan` bigint UNSIGNED NOT NULL,
  `pasien_id` bigint UNSIGNED NOT NULL,
  `nama_pasien_tambahan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TB` bigint NOT NULL,
  `BB` bigint NOT NULL,
  `jenis_kelamin` enum('L','P') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hubungan_keluarga` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pasien_tambahan`
--

INSERT INTO `pasien_tambahan` (`id_pasien_tambahan`, `pasien_id`, `nama_pasien_tambahan`, `TB`, `BB`, `jenis_kelamin`, `hubungan_keluarga`, `created_at`, `updated_at`) VALUES
(1, 1, 'Putri Azna Fitri Abidah', 160, 50, 'L', 'Adik Pertama', '2023-04-02 10:32:02', '2023-04-02 10:33:00'),
(2, 5, 'Kuriya Zusa', 160, 45, 'P', 'Diri sendiri', '2024-07-12 00:32:26', '2024-07-12 00:32:26'),
(5, 8, 'Aan', 165, 56, 'L', 'Diri sendiri', '2024-10-28 08:48:38', '2024-10-28 08:48:38'),
(6, 9, 'Aan Yassar', 164, 52, 'L', 'Diri sendiri', '2024-12-22 10:50:52', '2024-12-22 10:50:52'),
(7, 10, 'Fadila Ainun', 150, 49, 'P', 'Diri sendiri', '2025-01-24 01:38:20', '2025-01-24 01:38:20'),
(8, 11, 'Aan', 153, 24, 'L', 'Diri sendiri', '2025-01-24 02:55:10', '2025-01-24 02:55:10'),
(9, 12, 'anan', 153, 58, 'L', 'Diri sendiri', '2025-01-24 05:08:25', '2025-01-24 05:08:25');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'MyApp', '464352135e92f5473fe8d78da9e6dae7acbafcb40899116151e67803e0fa3c92', '[\"*\"]', '2023-04-02 21:25:11', NULL, '2023-04-02 09:15:51', '2023-04-02 21:25:11'),
(2, 'App\\Models\\User', 2, 'MyApp', 'ac86517f07fe06661aedbe6cb2c19c13c73d6b7ee180f2f029e4cee8766bc9da', '[\"*\"]', '2023-04-09 19:36:49', NULL, '2023-04-02 09:16:03', '2023-04-09 19:36:49');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_rating` bigint UNSIGNED NOT NULL,
  `dokter_id` bigint UNSIGNED NOT NULL,
  `profesionalisme` float NOT NULL,
  `konten` float NOT NULL,
  `komunikasi` float NOT NULL,
  `rating` float NOT NULL,
  `feedback` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id_rating`, `dokter_id`, `profesionalisme`, `konten`, `komunikasi`, `rating`, `feedback`, `created_at`, `updated_at`) VALUES
(7, 4, 0, 0, 0, 2.5, '', '2024-07-15 19:50:56', '2024-07-15 19:50:56'),
(8, 1, 0, 0, 0, 1.75, '', '2024-07-25 03:48:44', '2024-07-25 03:48:44'),
(9, 1, 0, 0, 0, 3.25, '', '2024-07-31 03:16:14', '2024-07-31 03:16:14'),
(10, 1, 0, 0, 0, 4, '', '2024-07-31 20:44:23', '2024-07-31 20:44:23'),
(17, 4, 2, 3, 4, 5, '6', '2024-12-28 14:27:30', '2024-12-28 14:27:30'),
(18, 4, 2, 3, 4, 5, '6', '2024-12-28 14:27:37', '2024-12-28 14:27:37'),
(19, 8, 2, 3, 4, 5, '6', '2024-12-28 14:46:45', '2024-12-28 14:46:45'),
(20, 4, 5, 4, 5, 4, 'good', '2024-12-28 16:06:37', '2024-12-28 16:06:37'),
(21, 8, 3, 4, 3, 3, 'mid', '2024-12-29 07:25:20', '2024-12-29 07:25:20');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_role` int NOT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_role`, `role`, `create_at`, `update_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'pasien', NULL, NULL),
(3, 'dokter', NULL, NULL),
(4, 'dosen', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sesi`
--

CREATE TABLE `sesi` (
  `id_sesi` bigint UNSIGNED NOT NULL,
  `dokter_id` bigint UNSIGNED NOT NULL,
  `dari` time NOT NULL,
  `sampai` time NOT NULL,
  `day` enum('senin','selasa','rabu','kamis','jumat') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sesi`
--

INSERT INTO `sesi` (`id_sesi`, `dokter_id`, `dari`, `sampai`, `day`, `created_at`, `updated_at`) VALUES
(1, 4, '07:00:00', '09:00:00', 'jumat', NULL, NULL),
(2, 5, '08:10:00', '17:10:00', 'rabu', '2024-07-27 17:00:00', '2024-07-29 07:14:38'),
(3, 1, '14:00:00', '18:00:00', 'senin', '2024-07-29 07:38:52', '2024-07-29 07:38:52'),
(16, 8, '08:00:00', '17:00:00', 'senin', '2024-10-28 10:13:49', '2024-10-28 10:13:49');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('f25C4eb29nTS2gDCTswzDrFgYd57xOIiaS9P9xX0', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 OPR/116.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRFB2YUlnWXV2dUViTEtZcWdhaXZJQmFyR2xLQTJXQXBtRzhtajBFZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1738211438),
('mdZRlGjRfifHC2G9D35Lw7E5axDzIZ2VRstqI3WP', NULL, '10.10.118.5', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiajhCYXNBemY5NmlxdlRFRUtUNVhjYmVIM1IxclF6MDh1dG1FWVZ3USI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMC4xMC4xMTguNTo4MDgwL2Rva3RlciI7fX0=', 1741246753),
('r9qIe7t4727J7FmQCpyQygAlsFMBOtQxsP5Xvmen', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNG9aVTd5NWx0SklRNTZxSExvUVZFSk5UQWl5WmtucEpWMjdhZ21iMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ha3VuIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1738213317),
('UDeOfGtDdqVsfp76D5DCgQZcjz3w9Y0YcEEi0dIS', 1, '10.10.118.5', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicXZac2NCZ0lUZ1FWZmtCN0hyVWFOMElTWGNRa0syRDY1aEVhN3Z4eSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHA6Ly8xMC4xMC4xMTguNTo4MDgwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1741245523);

-- --------------------------------------------------------

--
-- Table structure for table `spesialis`
--

CREATE TABLE `spesialis` (
  `id_spesialis` bigint UNSIGNED NOT NULL,
  `nama_spesialis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_spesialis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'img/default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spesialis`
--

INSERT INTO `spesialis` (`id_spesialis`, `nama_spesialis`, `img_spesialis`, `created_at`, `updated_at`) VALUES
(1, 'Poli Penyakit Telinga , Hidung dan Tenggorokan', 'img/tht.jpg', '2023-09-24 10:13:52', '2023-09-24 10:13:52'),
(2, 'Spesialis Anak / Pediatrik', 'img/pediatrik.jpg', '2023-09-24 10:16:18', '2023-09-24 10:16:18'),
(3, 'Spesialis Jantung', 'img/jantung.jpg', '2023-09-24 10:17:05', '2023-09-24 10:17:05'),
(4, 'Spesialis Paru', 'img/paru.jpg', '2023-09-24 10:18:09', '2023-09-24 10:18:09'),
(5, 'Spesialis Saraf', 'img/saraf.jpg', '2023-09-24 10:18:36', '2023-09-24 10:18:36'),
(6, 'Spesialis Mata', 'img/eye.jpg', '2023-09-24 10:19:03', '2023-09-24 10:19:03'),
(7, 'Spesialis Kedokteran Gigi Anak', 'img/gigi.jpg', '2023-09-24 10:19:22', '2023-09-24 10:19:22'),
(8, 'Spesialis Penyakit Dalam', 'img/penyakit_dalam.jpg', '2023-09-24 10:20:46', '2023-09-24 10:20:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'dosen',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Medunnes', 'medunnes@medunnes.com', '2024-07-30 09:26:20', '$2y$12$chlEEAYrI3E.rM1.r2BBz.bNkerBB5w89997hLR5ou4bIUh/krZVa', 'admin', NULL, '2023-07-03 01:16:57', '2024-12-28 04:42:03'),
(2, 'John', 'John@gmail.com', '2024-07-30 10:22:46', '$2y$10$U6N.AkS8O9yzv5/ROcZztOMV6EIXXIgxBcSwxhwjfzKV34pdEvCwq', 'dokter', NULL, '2024-05-16 10:06:36', '2024-05-16 10:06:36'),
(3, 'bayu', 'bayudama@gmail.com', NULL, '$2y$10$ocj9x1DWj9slvKxljbRMo.M1PnOakpwL.RzyMDxRrJ.DuuDbaLzLK', 'pasien', NULL, '2024-05-16 10:06:36', '2024-05-16 10:06:36'),
(4, 'Wahyu', 'wahyuandito@gmail.com', '2024-09-26 10:53:00', '$2y$12$ywuMWqneehQHwJ2CbleN0.wmFIfPZAgxv1dQ5/N0TwKvbAzjHTHu.', 'dosen', NULL, '2024-07-10 19:13:07', '2024-12-29 08:59:23'),
(6, 'pasien', 'pasien28@gmailcom', NULL, '$2y$10$aDa4pAVLVrbY.L9lnV72wuZQLc3gXskhQKmWEf8S0iZqQ.IZHnh0G', 'pasien', NULL, '2024-07-10 21:39:21', '2024-07-10 21:39:21'),
(7, 'Keke', 'ke@mail.com', NULL, '$2y$10$XEo2CXkIQ6FfQ/Q81TUZ6.zDGFDGjZiV1mFdfx8JOfZjqMgwj07RW', 'pasien', NULL, '2024-07-11 01:47:13', '2024-07-11 01:47:13'),
(10, 'Kuriya Zusa', 'keke@gmail.com', NULL, '$2y$10$LVrgE5X4/YgaRCmzYq2NW.IGW2y2WUziK3AT7TqOORS9HgWIHd0ci', 'pasien', NULL, '2024-07-11 01:51:12', '2024-07-11 01:51:12'),
(15, 'Kuriya Zusa', 'kuriyamam751@gmail.com', '2024-07-30 09:26:02', '$2y$10$.81wbfFBHCyjnlN1KixmgONUYqecCH6C44Yd5dFuHSvLwUYv.4M8G', 'pasien', NULL, '2024-07-12 00:32:24', '2024-07-12 00:32:24'),
(28, 'Rei Rere', 'reir4667@gmail.com', '2024-07-30 10:15:01', '$2y$10$LSa/wFy6LkXnIRFwsSHozOe501L9oJDpOqlf80DmcYf070Pps7gue', 'dokter', NULL, '2024-07-12 01:13:11', '2024-07-12 01:13:11'),
(29, 'Jejr', 'jidenahay@gmail.com', NULL, '$2y$10$gLhPz9q/cUnxm14tsJP.T.MaalyI7ZgW7f8bfD8VSPr5lkTKIGPRa', 'dokter', NULL, '2024-07-28 23:54:08', '2024-07-28 23:54:08'),
(54, 'rahmattt', 'rahmatkaleng@gmail.com', NULL, '$2y$10$ZI63hGsyCGcb//sfcgpAT.w9F0i8bSBfX84b2xML3v9DhllsQ/wQq', 'dosen', NULL, '2024-07-30 02:53:19', '2024-07-30 02:53:19'),
(75, 'ikhsanr', 'ikhsanrahmatdhanu@students.unnes.ac.id', '2024-07-31 02:59:31', '$2y$10$9SIvkx7siKluKUwa3x1VmO6p4w9E9ruZvzK.HdzerCYdgOG/ucun.', 'dosen', NULL, '2024-07-31 02:59:14', '2024-07-31 02:59:31'),
(121, 'Aan', 'aanyassar@gmail.com', '2024-10-28 08:48:48', '$2y$12$Ir8rVnDjPBmooR4vTLrrH.K3BNnS5Z4enQFZeHtFh2KyCJkbNC5si', 'pasien', 'yf3oITi5zX4Bp2qkvVS1VJolZt0yFQH7sT2sR1Fq0l39fTum3yrayYle6vT6', '2024-10-28 08:48:33', '2024-12-29 10:34:42'),
(122, 'Dokter', 'medunnes@gmail.com', '2024-10-28 10:01:17', '$2y$10$jUVWEKqT4vJ1rf6zsF7cfe/Mf5mPFKPYK0y5dxNdMl0kjUbjtJCKC', 'dokter', 'tcPlsmzOtL2V7CaDBwQGlha0Cw0xVOj21XYJM8SpgzEOq0agZf05RGCCV2Jr', '2024-10-28 10:00:46', '2024-10-28 10:01:17'),
(123, 'Aan Yassar', 'aanyassar21@gmail.com', '2024-12-22 10:51:08', '$2y$10$yQzlz1LzTOUaqsVW8X6sJOlOSUgU5Q.qUkX5FFGH0StC4ihGbU5mO', 'pasien', '$2y$10$6i7tHh2O2ysICdKXWPz9HO6nqzBoiyYTwfirJbStOLzmDa.uH6ZHy', '2024-12-22 10:50:45', '2024-12-22 10:51:08'),
(124, 'Fadila Ainun', 'fadilaainunn24@gmail.com', '2025-01-24 01:39:14', '$2y$10$2AnbTCn0nu7PgknIPe0AMe5r9snQ4kb8ohuI3U2gQFQNgwSm.m1Nq', 'pasien', '$2y$10$xq5/6ndcvN/k0nFZp/Mqkebv9HPQPulLNgzYNDD61WiHkv/C8t9E6', '2025-01-24 01:38:14', '2025-01-24 01:39:14'),
(125, 'Aan', 'reanty21@gmail.com', '2025-01-24 02:56:29', '$2y$10$H3gfRfwm6TM.yqJ6etg3QO4m1SPqpXSYUpEQyVFLEf2c8N/J/JHki', 'pasien', '$2y$10$XgjOM3uAR9PLVPZmFhG5eOTTKN6sN6NaHmbwll7sJ626xhHIEMV66', '2025-01-24 02:55:02', '2025-01-24 02:56:29'),
(126, 'anan', 'anan@gmail.com', NULL, '$2y$10$3U83TbAaVqXfFaGdRkcuG.n3SP8UW5iH9E5PQ0s098TMbgt06VHUS', 'pasien', '$2y$10$o262pdVohLJMxwqqqbwxx.IoTDotktLAj3IbWbprb5LvmEydD0aw2', '2025-01-24 05:08:18', '2025-01-24 05:08:18');

-- --------------------------------------------------------

--
-- Table structure for table `user_dokter`
--

CREATE TABLE `user_dokter` (
  `id_dokter` bigint UNSIGNED NOT NULL,
  `id` bigint UNSIGNED NOT NULL,
  `dosen_id` bigint UNSIGNED NOT NULL,
  `spesialis_id` bigint UNSIGNED NOT NULL,
  `img_dokter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` bigint NOT NULL,
  `jenis_kelamin` enum('L','P') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','approve','reject','suspend') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_dokter`
--

INSERT INTO `user_dokter` (`id_dokter`, `id`, `dosen_id`, `spesialis_id`, `img_dokter`, `alamat`, `no_tlp`, `nim`, `jenis_kelamin`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 2, 'dokter.png', 'Jl.Pedurungan', '081247704926', 4612421007, 'L', 'approve', NULL, '2024-12-29 07:25:50'),
(4, 28, 1, 1, 'dokter_4.png', 'Jalan Raya Tertinggi', '08866666390', 677445678833, 'L', 'approve', '2024-07-12 01:13:11', '2024-07-15 19:03:56'),
(5, 29, 1, 3, 'dokter_2.png', 'Jalan Raya', '087646494', 45434618, 'L', 'approve', '2024-07-28 23:54:08', '2024-10-27 11:12:05'),
(8, 122, 1, 1, 'dokter_3.png', 'Sekaran, unnes', '08784512351', 84521784522, 'L', 'approve', '2024-10-28 10:00:52', '2024-10-28 11:10:38');

-- --------------------------------------------------------

--
-- Table structure for table `user_pasien`
--

CREATE TABLE `user_pasien` (
  `id_pasien` bigint UNSIGNED NOT NULL,
  `id` bigint UNSIGNED NOT NULL,
  `NIK` bigint NOT NULL,
  `img_pasien` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` enum('L','P') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TB` int NOT NULL,
  `BB` int NOT NULL,
  `status` enum('active','suspend') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_pasien`
--

INSERT INTO `user_pasien` (`id_pasien`, `id`, `NIK`, `img_pasien`, `jenis_kelamin`, `alamat`, `no_tlp`, `TB`, `BB`, `status`, `created_at`, `updated_at`, `banned_at`) VALUES
(1, 3, 4124712411233, NULL, 'L', 'Yogyakarta', '085123213123', 160, 50, 'active', '2023-04-02 09:16:03', '2024-12-29 07:20:44', NULL),
(5, 15, 86835365, '1721090937_15.jpg', 'P', 'Jalan Makanan', '0586865399', 160, 45, 'active', '2024-07-12 00:32:25', '2024-12-29 07:30:17', NULL),
(8, 121, 8946518, NULL, 'L', 'unnes', '0289465165325', 164, 56, 'active', '2024-10-28 08:48:37', '2024-12-19 21:43:43', NULL),
(9, 123, 845618515, NULL, 'L', 'Secang', '0856123085', 164, 52, 'active', '2024-12-22 10:50:52', '2024-12-28 16:03:40', NULL),
(10, 124, 33121213, '1737708449_124.jpg', 'P', 'sekaran', '0823693287', 150, 49, 'active', '2025-01-24 01:38:20', '2025-01-24 01:47:30', NULL),
(11, 125, 121346459, NULL, 'L', 'secang', '085667', 153, 24, 'active', '2025-01-24 02:55:08', '2025-01-24 02:55:08', NULL),
(12, 126, 8532255500, NULL, 'L', 'mangunsari', '1142358899', 153, 58, 'active', '2025-01-24 05:08:24', '2025-01-24 05:08:24', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_dokter_id_foreign` (`dokter_id`),
  ADD KEY `activity_pasien_id_foreign` (`pasien_id`);

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `bans`
--
ALTER TABLE `bans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bans_bannable_type_bannable_id_index` (`bannable_type`,`bannable_id`),
  ADD KEY `bans_created_by_type_created_by_id_index` (`created_by_type`,`created_by_id`),
  ADD KEY `bans_ip_index` (`ip`),
  ADD KEY `bans_expired_at_index` (`expired_at`);

--
-- Indexes for table `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`id_catatan`),
  ADD KEY `konsultasi_id` (`konsultasi_id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD UNIQUE KEY `id_user` (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `janji`
--
ALTER TABLE `janji`
  ADD PRIMARY KEY (`id_janji`),
  ADD KEY `pasien_id` (`pasien_id`),
  ADD KEY `dokter_id` (`dokter_id`),
  ADD KEY `pasien_tambahan_id` (`pasien_tambahan_id`),
  ADD KEY `janji_sesi_id_foreign` (`sesi_id`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`),
  ADD KEY `konsultasi_pasien_id_foreign` (`pasien_id`),
  ADD KEY `konsultasi_dokter_id_foreign` (`dokter_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `pasien_tambahan`
--
ALTER TABLE `pasien_tambahan`
  ADD PRIMARY KEY (`id_pasien_tambahan`),
  ADD KEY `pasien_tambahan_pasien_id_foreign` (`pasien_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`),
  ADD KEY `rating_dokter_id_foreign` (`dokter_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`);

--
-- Indexes for table `sesi`
--
ALTER TABLE `sesi`
  ADD PRIMARY KEY (`id_sesi`),
  ADD KEY `sesi_dokter_id_foreign` (`dokter_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `spesialis`
--
ALTER TABLE `spesialis`
  ADD PRIMARY KEY (`id_spesialis`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_unique` (`email`) USING BTREE;

--
-- Indexes for table `user_dokter`
--
ALTER TABLE `user_dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `spesialis_id` (`spesialis_id`),
  ADD KEY `id` (`id`),
  ADD KEY `dosen_id` (`dosen_id`);

--
-- Indexes for table `user_pasien`
--
ALTER TABLE `user_pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD KEY `user_pasien_user_id_foreign` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bans`
--
ALTER TABLE `bans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catatan`
--
ALTER TABLE `catatan`
  MODIFY `id_catatan` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `janji`
--
ALTER TABLE `janji`
  MODIFY `id_janji` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsultasi` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `pasien_tambahan`
--
ALTER TABLE `pasien_tambahan`
  MODIFY `id_pasien_tambahan` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sesi`
--
ALTER TABLE `sesi`
  MODIFY `id_sesi` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `spesialis`
--
ALTER TABLE `spesialis`
  MODIFY `id_spesialis` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `user_dokter`
--
ALTER TABLE `user_dokter`
  MODIFY `id_dokter` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_pasien`
--
ALTER TABLE `user_pasien`
  MODIFY `id_pasien` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activity_dokter_id_foreign` FOREIGN KEY (`dokter_id`) REFERENCES `user_dokter` (`id_dokter`) ON DELETE CASCADE,
  ADD CONSTRAINT `activity_pasien_id_foreign` FOREIGN KEY (`pasien_id`) REFERENCES `user_pasien` (`id_pasien`) ON DELETE CASCADE;

--
-- Constraints for table `catatan`
--
ALTER TABLE `catatan`
  ADD CONSTRAINT `catatan_konsultasi_id_foreign` FOREIGN KEY (`konsultasi_id`) REFERENCES `konsultasi` (`id_konsultasi`);

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_id_foreign` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `janji`
--
ALTER TABLE `janji`
  ADD CONSTRAINT `janji_dokter_id_foreign` FOREIGN KEY (`dokter_id`) REFERENCES `user_dokter` (`id_dokter`),
  ADD CONSTRAINT `janji_pasien_id_foreign` FOREIGN KEY (`pasien_id`) REFERENCES `user_pasien` (`id_pasien`),
  ADD CONSTRAINT `janji_pasien_tambahan_id_foreign` FOREIGN KEY (`pasien_tambahan_id`) REFERENCES `pasien_tambahan` (`id_pasien_tambahan`),
  ADD CONSTRAINT `janji_sesi_id_foreign` FOREIGN KEY (`sesi_id`) REFERENCES `sesi` (`id_sesi`);

--
-- Constraints for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD CONSTRAINT `konsultasi_dokter_id_foreign` FOREIGN KEY (`dokter_id`) REFERENCES `user_dokter` (`id_dokter`),
  ADD CONSTRAINT `konsultasi_pasien_id_foreign` FOREIGN KEY (`pasien_id`) REFERENCES `user_pasien` (`id_pasien`);

--
-- Constraints for table `pasien_tambahan`
--
ALTER TABLE `pasien_tambahan`
  ADD CONSTRAINT `pasien_tambahan_pasien_id_foreign` FOREIGN KEY (`pasien_id`) REFERENCES `user_pasien` (`id_pasien`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_dokter_id_foreign` FOREIGN KEY (`dokter_id`) REFERENCES `user_dokter` (`id_dokter`);

--
-- Constraints for table `sesi`
--
ALTER TABLE `sesi`
  ADD CONSTRAINT `sesi_dokter_id_foreign` FOREIGN KEY (`dokter_id`) REFERENCES `user_dokter` (`id_dokter`);

--
-- Constraints for table `user_dokter`
--
ALTER TABLE `user_dokter`
  ADD CONSTRAINT `dokter_dosen_id_foreign` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id_dosen`),
  ADD CONSTRAINT `dokter_id_foreign` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `dokter_spesialis_id_foreign` FOREIGN KEY (`spesialis_id`) REFERENCES `spesialis` (`id_spesialis`);

--
-- Constraints for table `user_pasien`
--
ALTER TABLE `user_pasien`
  ADD CONSTRAINT `pasien_id_foreign` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
