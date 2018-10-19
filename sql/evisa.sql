-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2018 at 09:05 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evisa`
--

-- --------------------------------------------------------

--
-- Table structure for table `applies`
--

CREATE TABLE `applies` (
  `id` int(10) UNSIGNED NOT NULL,
  `select_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processing_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purpose_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arrival_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arrival_date2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `applicant` int(11) DEFAULT NULL,
  `totalusd` int(11) DEFAULT NULL,
  `person_surname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `person_other_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `person_country_birth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `person_occupation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_phone_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `person_mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pemanent_residence_address` text COLLATE utf8mb4_unicode_ci,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_expiry_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Attach_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `person_residence_address` text COLLATE utf8mb4_unicode_ci,
  `person_visits_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `person_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_complete` int(11) NOT NULL DEFAULT '1',
  `application_complete` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applies`
--

INSERT INTO `applies` (`id`, `select_country`, `document_type`, `processing_type`, `purpose_type`, `arrival_date`, `arrival_date2`, `end_date`, `applicant`, `totalusd`, `person_surname`, `person_other_name`, `person_country_birth`, `person_occupation`, `country_phone_code`, `person_mobile_number`, `pemanent_residence_address`, `Email`, `passport_expiry_date`, `Attach_file`, `person_residence_address`, `person_visits_check`, `person_reason`, `ref_number`, `payment_complete`, `application_complete`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', 'service', 'Urgent ( within 3-5 hours )', 'Business trip', '11/05/2018', '2018-04-11', '11/08/2018', 3, 345, 'Rumman', 'adsaf', 'Bangladesh', 'Non-governmental organizations', '213', '01757571237', 'Jalshuka,Khulumbaria', 'rumman142228@gmail.com', '01/05/2018', '1526016802.jpg', 'Jalshuka,Khulumbaria, Sahilkupa,Jhenaidah', '0', NULL, 'MAQuGc7vai', 1, 2, '2018-05-10 23:33:22', '2018-05-10 23:45:01'),
(2, 'Afghanistan', 'service', 'Urgent ( within 3-5 hours )', 'Business trip', '11/05/2018', '2018-04-11', '11/08/2018', 3, 345, 'Rumman', 'adsfadfs', 'Bangladesh', 'Artist', '375', '01757571237', 'Jalshuka,Khulumbaria', 'rumman142228@gmail.com', '02/05/2018', '1526016844.jpg', 'Jalshuka,Khulumbaria, Sahilkupa,Jhenaidah', '0', NULL, 'MAQuGc7vai', 1, 2, '2018-05-10 23:34:04', '2018-05-10 23:45:01'),
(3, 'Afghanistan', 'service', 'Urgent ( within 3-5 hours )', 'Business trip', '11/05/2018', '2018-04-11', '11/08/2018', 3, 345, 'Rumman', 'asdfasf', 'Bangladesh', 'Non-governmental organizations', '213', '01757571237', 'Jalshuka,Khulumbaria', 'rumman142228@gmail.com', '16/05/2018', '1526016877.jpg', 'Jalshuka,Khulumbaria, Sahilkupa,Jhenaidah', '0', NULL, 'MAQuGc7vai', 1, 2, '2018-05-10 23:34:37', '2018-05-10 23:45:01'),
(4, 'Afghanistan', 'special', 'Urgent ( within 3-5 hours )', 'Tourism', '11/05/2018', '2018-04-11', '11/08/2018', 1, 115, 'Rumman', 'asdfdsa', 'Bangladesh', 'Non-governmental organizations', '32', '01757571237', 'Jalshuka,Khulumbaria', 'rumman142228@gmail.com', '23/05/2018', '1526017137.jpg', 'Jalshuka,Khulumbaria, Sahilkupa,Jhenaidah', '0', NULL, 'BRFvqjvZ5O', 1, 1, '2018-05-10 23:38:57', '2018-05-10 23:38:57'),
(5, 'Afghanistan', 'diplomatic', 'Standard ( 1-3 business days )', 'Tourism', '23/05/2018', '2018-04-17', '21/8/2018', 2, 130, 'Rumman', 'adfs', 'Bangladesh', 'Artist', '32', '01757571237', 'Jalshuka,Khulumbaria', 'rumman142228@gmail.com', '16/05/2018', '1526017309.jpg', 'Jalshuka,Khulumbaria, Sahilkupa,Jhenaidah', '0', NULL, 'rC32h3aGq8', 1, 1, '2018-05-10 23:41:49', '2018-05-10 23:41:49'),
(6, 'Afghanistan', 'diplomatic', 'Standard ( 1-3 business days )', 'Tourism', '23/05/2018', '2018-04-17', '21/8/2018', 2, 130, 'Rumman', 'asdfsdf', 'Aland Islands', 'Artist', '355', '01757571237', 'Jalshuka,Khulumbaria', 'rumman142228@gmail.com', '09/05/2018', '1526017330.jpg', 'Jalshuka,Khulumbaria, Sahilkupa,Jhenaidah', '0', NULL, 'rC32h3aGq8', 1, 1, '2018-05-10 23:42:10', '2018-05-10 23:42:10'),
(7, 'Turkey', 'service', 'Standard ( 1-3 business days )', 'Science', '23/05/2018', '2018-04-17', '21/8/2018', 1, 65, 'Rumman', 'adsfsdf', 'Bangladesh', 'Pensioner', '375', '01757571237', 'Jalshuka,Khulumbaria', 'rumman142228@gmail.com', '01/05/2018', '1526017458.jpg', 'Jalshuka,Khulumbaria, Sahilkupa,Jhenaidah', '0', NULL, 'AibQu7BG3c', 1, 1, '2018-05-10 23:44:18', '2018-05-10 23:44:18'),
(8, 'Iran', 'stateless', 'Standard ( 1-3 business days )', 'Tourism', '18/05/2018', '2018-04-18', '18/08/2018', 1, 65, 'Rumman', 'Radasdf', 'Bangladesh', 'Pensioner', '1', '1432', 'dsf', 'rumman142228@gmail.com', '10/05/2018', '1526053878.jpg', 'aadsf', '0', NULL, 'vVRuqYjLpF', 1, 1, '2018-05-11 09:51:18', '2018-05-11 09:51:18'),
(9, 'Albania', 'ordinary', 'Standard ( 1-3 business days )', 'Business trip', '23/05/2018', '2018-04-17', '21/8/2018', 3, 195, 'Rumman', 'asdf', 'Bangladesh', 'Pensioner', '1', '3241', 'adsf', 'rumman142228@gmail.com', '24/05/2018', '1526106515.jpg', 'dsaf', '0', NULL, '2srRk5lBOw', 1, 1, '2018-05-12 00:28:35', '2018-05-12 00:28:35'),
(10, 'Albania', 'ordinary', 'Standard ( 1-3 business days )', 'Business trip', '23/05/2018', '2018-04-17', '21/8/2018', 3, 195, 'Rumman', 'asdf', 'Bangladesh', 'Pensioner', '1', '3241', 'adsf', 'rumman142228@gmail.com', '24/05/2018', '1526106564.jpg', 'dsaf', '0', NULL, '2srRk5lBOw', 1, 1, '2018-05-12 00:29:24', '2018-05-12 00:29:24'),
(11, 'Albania', 'ordinary', 'Standard ( 1-3 business days )', 'Business trip', '23/05/2018', '2018-04-17', '21/8/2018', 3, 195, 'adfsadsf', 'Radasdf', 'Bahamas', 'Mining', '355', '432', 'adsf', 'rumman142228@gmail.com', '03/05/2018', '1526106591.jpg', 'adfs', '0', NULL, '2srRk5lBOw', 1, 1, '2018-05-12 00:29:51', '2018-05-12 00:29:51');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visa_block` int(11) NOT NULL DEFAULT '1',
  `visa_exempt` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ordinary` int(11) NOT NULL DEFAULT '1',
  `diplomatic` int(11) NOT NULL DEFAULT '1',
  `service` int(11) NOT NULL DEFAULT '1',
  `special` int(11) NOT NULL DEFAULT '1',
  `stateless` int(11) NOT NULL DEFAULT '1',
  `official` int(11) NOT NULL DEFAULT '1',
  `days` int(11) NOT NULL DEFAULT '90',
  `is_partial_exempt` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `visa_block`, `visa_exempt`, `created_at`, `updated_at`, `ordinary`, `diplomatic`, `service`, `special`, `stateless`, `official`, `days`, `is_partial_exempt`) VALUES
(1, 'Afghanistan', 2, 1, '2018-05-01 00:59:15', '2018-05-11 12:34:46', 1, 1, 1, 1, 1, 1, 90, 1),
(2, 'Bangladesh', 2, 1, '2018-05-01 00:59:22', '2018-05-01 12:00:36', 1, 1, 1, 1, 1, 1, 90, 1),
(5, 'Ukraine', 1, 3, '2018-05-01 11:38:09', '2018-05-01 12:00:39', 1, 1, 1, 1, 1, 1, 90, 1),
(6, 'Turkey', 1, 1, '2018-05-09 09:17:27', '2018-05-12 00:10:38', 1, 2, 1, 1, 1, 1, 90, 4),
(7, 'Iran', 1, 1, '2018-05-11 09:22:30', '2018-05-11 09:22:50', 1, 2, 2, 1, 1, 1, 30, 4),
(8, 'Aland Islands', 2, 1, '2018-05-11 11:52:11', '2018-05-11 12:34:53', 1, 1, 1, 1, 1, 1, 90, 1),
(9, 'Albania', 1, 1, NULL, '2018-05-11 12:36:51', 1, 2, 2, 1, 1, 1, 90, 4),
(10, 'Algeria', 1, 1, '2018-05-11 12:04:38', '2018-05-11 23:46:07', 1, 1, 1, 1, 1, 1, 90, 1),
(11, 'American Samoa', 2, 1, '2018-05-11 12:04:46', '2018-05-11 12:35:00', 1, 1, 1, 1, 1, 1, 90, 1),
(12, 'Andorra', 1, 1, '2018-05-11 12:04:51', '2018-05-11 12:04:51', 1, 1, 1, 1, 1, 1, 90, 1),
(13, 'Angola', 2, 1, '2018-05-11 12:04:56', '2018-05-11 12:35:19', 1, 1, 1, 1, 1, 1, 90, 1),
(14, 'Anguilla', 2, 1, '2018-05-11 12:05:02', '2018-05-11 12:35:24', 1, 1, 1, 1, 1, 1, 90, 1),
(15, 'Antarctica', 2, 1, '2018-05-11 12:05:07', '2018-05-11 12:35:28', 1, 1, 1, 1, 1, 1, 90, 1),
(16, 'Antigua And Barbuda', 2, 1, '2018-05-11 12:05:17', '2018-05-11 12:35:31', 1, 1, 1, 1, 1, 1, 90, 1),
(17, 'Argentina', 1, 1, '2018-05-11 12:05:50', '2018-05-11 12:37:58', 1, 2, 2, 1, 1, 2, 30, 4),
(18, 'Armenia', 2, 1, '2018-05-11 12:05:55', '2018-05-11 12:35:45', 1, 1, 1, 1, 1, 1, 90, 1),
(19, 'Aruba', 2, 1, '2018-05-11 12:06:01', '2018-05-11 12:35:51', 1, 1, 1, 1, 1, 1, 90, 1),
(20, 'Australia', 1, 1, '2018-05-11 12:06:05', '2018-05-11 12:06:05', 1, 1, 1, 1, 1, 1, 90, 1),
(21, 'Austria', 1, 1, '2018-05-11 12:06:11', '2018-05-11 12:38:45', 1, 2, 2, 1, 1, 1, 90, 4),
(23, 'Bahamas', 1, 1, '2018-05-11 12:06:22', '2018-05-11 12:06:22', 1, 1, 1, 1, 1, 1, 90, 1),
(24, 'Bahrain', 1, 1, '2018-05-11 12:06:26', '2018-05-11 23:46:26', 1, 1, 1, 1, 1, 1, 90, 1),
(25, 'Barbados', 1, 1, '2018-05-11 12:06:31', '2018-05-11 12:06:31', 1, 1, 1, 1, 1, 1, 90, 1),
(26, 'Belarus', 2, 1, '2018-05-11 12:06:36', '2018-05-11 12:39:22', 1, 1, 1, 1, 1, 1, 90, 1),
(27, 'Belgium', 1, 1, '2018-05-11 12:06:41', '2018-05-11 12:42:00', 1, 2, 1, 1, 1, 1, 90, 4),
(28, 'Belize', 2, 1, '2018-05-11 12:06:45', '2018-05-11 12:39:42', 1, 1, 1, 1, 1, 1, 90, 1),
(29, 'Benin', 2, 1, '2018-05-11 12:06:50', '2018-05-11 12:39:50', 1, 1, 1, 1, 1, 1, 90, 1),
(30, 'Bermuda', 2, 1, '2018-05-11 12:06:56', '2018-05-11 12:39:56', 1, 1, 1, 1, 1, 1, 90, 1),
(31, 'Bhutan', 2, 1, '2018-05-11 12:07:01', '2018-05-11 12:40:02', 1, 1, 1, 1, 1, 1, 90, 1),
(32, 'Bolivia', 1, 1, '2018-05-11 12:07:05', '2018-05-11 12:07:05', 1, 1, 1, 1, 1, 1, 90, 1),
(33, 'Bosnia And Herzegovina', 1, 1, '2018-05-11 12:07:14', '2018-05-11 12:43:53', 1, 2, 2, 1, 1, 2, 30, 4),
(34, 'Botswana', 2, 1, '2018-05-11 12:07:20', '2018-05-11 12:40:20', 1, 1, 1, 1, 1, 1, 90, 1),
(35, 'Bouvet Island', 2, 1, '2018-05-11 12:07:28', '2018-05-11 12:40:26', 1, 1, 1, 1, 1, 1, 90, 1),
(36, 'Brazil', 1, 1, '2018-05-11 12:07:33', '2018-05-11 12:45:21', 1, 2, 2, 1, 1, 2, 90, 4),
(37, 'British Indian Ocean Territory', 2, 1, '2018-05-11 12:07:40', '2018-05-11 12:40:35', 1, 1, 1, 1, 1, 1, 90, 1),
(38, 'Brunei Darussalam', 1, 1, '2018-05-11 12:07:46', '2018-05-11 23:46:49', 1, 1, 1, 1, 1, 1, 90, 1),
(39, 'Bulgaria', 1, 1, '2018-05-11 12:07:51', '2018-05-11 12:42:41', 1, 2, 2, 1, 1, 1, 90, 4),
(40, 'Burkina Faso', 2, 1, '2018-05-11 12:07:57', '2018-05-11 12:40:50', 1, 1, 1, 1, 1, 1, 90, 1),
(41, 'Burundi', 2, 1, '2018-05-11 12:08:02', '2018-05-11 12:41:00', 1, 1, 1, 1, 1, 1, 90, 1),
(42, 'Cambodia', 2, 1, '2018-05-11 12:08:07', '2018-05-11 12:45:57', 1, 1, 1, 1, 1, 1, 90, 1),
(43, 'Cameroon', 2, 1, '2018-05-11 12:08:11', '2018-05-11 12:46:14', 1, 1, 1, 1, 1, 1, 90, 1),
(44, 'Canada', 1, 1, '2018-05-11 12:08:16', '2018-05-11 23:46:55', 1, 1, 1, 1, 1, 1, 90, 1),
(45, 'Cape Verde', 2, 1, '2018-05-11 12:08:22', '2018-05-11 12:46:29', 1, 1, 1, 1, 1, 1, 90, 1),
(46, 'Cayman Islands', 2, 1, '2018-05-11 12:08:28', '2018-05-11 12:46:35', 1, 1, 1, 1, 1, 1, 90, 1),
(47, 'Central African Republic', 2, 1, '2018-05-11 12:08:34', '2018-05-11 12:46:53', 1, 1, 1, 1, 1, 1, 90, 1),
(48, 'Chad', 2, 1, '2018-05-11 12:08:39', '2018-05-11 12:46:41', 1, 1, 1, 1, 1, 1, 90, 1),
(49, 'Chile', 1, 1, '2018-05-11 12:08:44', '2018-05-11 12:08:44', 1, 1, 1, 1, 1, 1, 90, 1),
(50, 'China', 1, 1, '2018-05-11 12:08:49', '2018-05-11 12:48:49', 1, 2, 2, 1, 1, 1, 30, 4),
(51, 'Christmas Island', 2, 1, '2018-05-11 12:08:55', '2018-05-11 12:46:59', 1, 1, 1, 1, 1, 1, 90, 1),
(52, 'Cocos (Keeling) Islands', 2, 1, '2018-05-11 12:09:02', '2018-05-11 12:47:04', 1, 1, 1, 1, 1, 1, 90, 1),
(53, 'Colombia', 1, 1, '2018-05-11 12:09:09', '2018-05-11 12:09:09', 1, 1, 1, 1, 1, 1, 90, 1),
(54, 'Comoros', 2, 1, '2018-05-11 12:09:14', '2018-05-11 12:47:12', 1, 1, 1, 1, 1, 1, 90, 1),
(55, 'Congo', 2, 1, '2018-05-11 12:09:18', '2018-05-11 12:47:18', 1, 1, 1, 1, 1, 1, 90, 1),
(56, 'Congo, Democratic Republic', 2, 1, '2018-05-11 12:09:24', '2018-05-11 12:47:22', 1, 1, 1, 1, 1, 1, 90, 1),
(57, 'Cook Islands', 2, 1, '2018-05-11 12:09:31', '2018-05-11 12:47:29', 1, 1, 1, 1, 1, 1, 90, 1),
(58, 'Costa Rica', 1, 1, '2018-05-11 12:09:36', '2018-05-11 23:47:09', 1, 1, 1, 1, 1, 1, 90, 1),
(59, 'Cote D\'Ivoire', 2, 1, '2018-05-11 12:09:43', '2018-05-11 12:47:47', 1, 1, 1, 1, 1, 1, 90, 1),
(60, 'Croatia', 1, 1, '2018-05-11 12:09:49', '2018-05-11 12:49:12', 1, 2, 2, 1, 1, 1, 30, 1),
(61, 'Cuba', 1, 1, '2018-05-11 12:09:53', '2018-05-12 00:00:10', 1, 2, 2, 1, 1, 2, 90, 4),
(62, 'Cyprus', 1, 1, '2018-05-11 12:09:58', '2018-05-11 23:59:49', 1, 2, 1, 1, 1, 1, 90, 4),
(63, 'Czech Republic', 1, 1, '2018-05-11 12:10:37', '2018-05-11 23:47:21', 1, 1, 1, 1, 1, 1, 90, 1),
(64, 'Denmark', 1, 1, '2018-05-11 12:10:41', '2018-05-11 12:10:41', 1, 1, 1, 1, 1, 1, 90, 1),
(65, 'Djibouti', 1, 1, '2018-05-11 12:10:47', '2018-05-11 23:47:29', 1, 1, 1, 1, 1, 1, 90, 1),
(66, 'Dominica', 2, 1, '2018-05-11 12:10:55', '2018-05-11 12:49:35', 1, 1, 1, 1, 1, 1, 90, 1),
(67, 'Dominican Republic', 2, 1, '2018-05-11 12:11:03', '2018-05-11 12:49:43', 1, 1, 1, 1, 1, 1, 90, 1),
(68, 'Ecuador', 1, 1, '2018-05-11 12:11:09', '2018-05-11 12:11:09', 1, 1, 1, 1, 1, 1, 90, 1),
(69, 'Egypt', 2, 1, '2018-05-11 12:11:17', '2018-05-11 12:50:08', 1, 1, 1, 1, 1, 1, 90, 1),
(70, 'El Salvador', 2, 1, '2018-05-11 12:11:24', '2018-05-11 12:50:14', 1, 1, 1, 1, 1, 1, 90, 1),
(71, 'Equatorial Guinea', 2, 1, '2018-05-11 12:11:30', '2018-05-11 12:50:20', 1, 1, 1, 1, 1, 1, 90, 1),
(72, 'Eritrea', 2, 1, '2018-05-11 12:11:36', '2018-05-11 12:50:26', 1, 1, 1, 1, 1, 1, 90, 1),
(73, 'Estonia', 1, 1, '2018-05-11 12:11:41', '2018-05-11 23:53:12', 1, 2, 1, 1, 1, 1, 90, 4),
(74, 'Ethiopia', 2, 1, '2018-05-11 12:11:46', '2018-05-11 12:50:39', 1, 1, 1, 1, 1, 1, 90, 1),
(75, 'Falkland Islands (Malvinas)', 2, 1, '2018-05-11 12:12:13', '2018-05-11 12:50:54', 1, 1, 1, 1, 1, 1, 90, 1),
(76, 'Faroe Islands', 2, 1, '2018-05-11 12:12:20', '2018-05-11 12:50:59', 1, 1, 1, 1, 1, 1, 90, 1),
(77, 'Fiji', 2, 1, '2018-05-11 12:12:25', '2018-05-11 12:51:09', 1, 1, 1, 1, 1, 1, 90, 1),
(78, 'Finland', 1, 1, '2018-05-11 12:12:30', '2018-05-11 23:53:29', 1, 2, 1, 1, 1, 1, 90, 4),
(79, 'France', 1, 1, '2018-05-11 12:12:35', '2018-05-11 23:54:19', 1, 2, 1, 1, 1, 1, 90, 4),
(80, 'French Guiana', 2, 1, '2018-05-11 12:12:43', '2018-05-11 12:51:24', 1, 1, 1, 1, 1, 1, 90, 1),
(81, 'French Polynesia', 2, 1, '2018-05-11 12:12:50', '2018-05-11 12:51:33', 1, 1, 1, 1, 1, 1, 90, 1),
(82, 'French Southern Territories', 2, 1, '2018-05-11 12:12:57', '2018-05-11 12:51:40', 1, 1, 1, 1, 1, 1, 90, 1),
(83, 'Gabon', 2, 1, '2018-05-11 12:13:03', '2018-05-11 12:51:50', 1, 1, 1, 1, 1, 1, 90, 1),
(84, 'Gambia', 2, 1, '2018-05-11 12:13:08', '2018-05-11 12:51:56', 1, 1, 1, 1, 1, 1, 90, 1),
(85, 'Georgia', 2, 1, '2018-05-11 12:13:13', '2018-05-11 12:52:02', 1, 1, 1, 1, 1, 1, 90, 1),
(86, 'Germany', 1, 1, '2018-05-11 12:13:17', '2018-05-11 23:50:56', 1, 2, 1, 1, 1, 1, 90, 4),
(87, 'Ghana', 2, 1, '2018-05-11 12:13:22', '2018-05-11 12:52:14', 1, 1, 1, 1, 1, 1, 90, 1),
(88, 'Gibraltar', 2, 1, '2018-05-11 12:13:27', '2018-05-11 12:52:20', 1, 1, 1, 1, 1, 1, 90, 1),
(89, 'Greece', 1, 1, '2018-05-11 12:13:32', '2018-05-12 00:11:20', 1, 2, 1, 1, 1, 1, 90, 4),
(90, 'Greenland', 2, 1, '2018-05-11 12:13:38', '2018-05-11 12:52:37', 1, 1, 1, 1, 1, 1, 90, 1),
(91, 'Grenada', 2, 1, '2018-05-11 12:13:45', '2018-05-11 12:52:44', 1, 1, 1, 1, 1, 1, 90, 1),
(92, 'Guadeloupe', 2, 1, '2018-05-11 12:13:50', '2018-05-11 12:52:50', 1, 1, 1, 1, 1, 1, 90, 1),
(93, 'Guam', 2, 1, '2018-05-11 12:13:56', '2018-05-11 12:52:57', 1, 1, 1, 1, 1, 1, 90, 1),
(94, 'Guatemala', 1, 1, '2018-05-11 12:14:00', '2018-05-11 12:14:00', 1, 1, 1, 1, 1, 1, 90, 1),
(95, 'Guernsey', 2, 1, '2018-05-11 12:14:06', '2018-05-11 12:53:05', 1, 1, 1, 1, 1, 1, 90, 1),
(96, 'Guinea', 2, 1, '2018-05-11 12:14:10', '2018-05-11 12:53:14', 1, 1, 1, 1, 1, 1, 90, 1),
(97, 'Guinea-Bissau', 1, 1, '2018-05-11 12:14:17', '2018-05-11 12:14:17', 1, 1, 1, 1, 1, 1, 90, 1),
(98, 'Guyana', 2, 1, '2018-05-11 12:14:22', '2018-05-11 12:53:25', 1, 1, 1, 1, 1, 1, 90, 1),
(99, 'Haiti', 2, 1, '2018-05-11 12:14:27', '2018-05-11 12:53:35', 1, 1, 1, 1, 1, 1, 90, 1),
(100, 'Heard Island & Mcdonald Islands', 2, 1, '2018-05-11 12:14:35', '2018-05-11 12:53:42', 1, 1, 1, 1, 1, 1, 90, 1),
(101, 'Holy See (Vatican City State)', 2, 1, '2018-05-11 12:14:42', '2018-05-11 12:53:48', 1, 1, 1, 1, 1, 1, 90, 1),
(102, 'Honduras', 1, 1, '2018-05-11 12:14:48', '2018-05-11 12:14:48', 1, 1, 1, 1, 1, 1, 90, 1),
(103, 'Hungary', 1, 1, '2018-05-11 12:14:53', '2018-05-12 00:04:09', 1, 2, 2, 1, 1, 1, 90, 4),
(104, 'Iceland', 1, 1, '2018-05-11 12:14:58', '2018-05-11 12:14:58', 1, 1, 1, 1, 1, 1, 90, 1),
(105, 'India', 1, 1, '2018-05-11 12:15:39', '2018-05-11 23:48:12', 1, 1, 1, 1, 1, 1, 90, 1),
(106, 'Indonesia', 1, 1, '2018-05-11 12:15:45', '2018-05-11 23:56:09', 1, 2, 2, 1, 1, 1, 30, 4),
(107, 'Iraq', 2, 1, '2018-05-11 12:15:56', '2018-05-11 23:57:18', 1, 2, 2, 1, 1, 2, 30, 4),
(108, 'Ireland', 1, 1, '2018-05-11 12:16:02', '2018-05-11 12:16:02', 1, 1, 1, 1, 1, 1, 90, 1),
(109, 'Isle Of Man', 2, 1, '2018-05-11 12:16:09', '2018-05-11 12:54:43', 1, 1, 1, 1, 1, 1, 90, 1),
(110, 'Israel', 1, 1, '2018-05-11 12:16:14', '2018-05-11 23:58:47', 1, 2, 2, 1, 1, 1, 90, 4),
(111, 'Italy', 1, 1, '2018-05-11 12:16:21', '2018-05-11 23:58:27', 1, 2, 2, 1, 1, 1, 90, 4),
(112, 'Jamaica', 1, 1, '2018-05-11 12:16:27', '2018-05-11 23:48:26', 1, 1, 1, 1, 1, 1, 90, 1),
(113, 'Japan', 1, 1, '2018-05-11 12:16:32', '2018-05-11 23:56:35', 1, 2, 1, 1, 1, 1, 90, 4),
(114, 'Jersey', 2, 1, '2018-05-11 12:16:36', '2018-05-11 12:55:15', 1, 1, 1, 1, 1, 1, 90, 1),
(115, 'Jordan', 1, 1, '2018-05-11 12:16:42', '2018-05-11 23:56:54', 1, 2, 2, 1, 1, 1, 90, 4),
(116, 'Kazakhstan', 2, 1, '2018-05-11 12:16:48', '2018-05-11 12:55:32', 1, 1, 1, 1, 1, 1, 90, 1),
(117, 'Kenya', 2, 1, '2018-05-11 12:16:53', '2018-05-11 12:55:40', 1, 1, 1, 1, 1, 1, 90, 1),
(118, 'Kiribati', 2, 1, '2018-05-11 12:16:59', '2018-05-11 12:55:47', 1, 1, 1, 1, 1, 1, 90, 1),
(119, 'Korea', 1, 1, '2018-05-11 12:17:04', '2018-05-11 23:59:20', 1, 2, 2, 1, 1, 2, 30, 4),
(120, 'Kuwait', 1, 1, '2018-05-11 12:17:09', '2018-05-12 00:00:33', 1, 2, 2, 2, 1, 1, 90, 4),
(121, 'Kyrgyzstan', 2, 1, '2018-05-11 12:17:14', '2018-05-11 12:56:16', 1, 1, 1, 1, 1, 1, 90, 1),
(122, 'Lao People\'s Democratic Republic', 2, 1, '2018-05-11 12:17:20', '2018-05-11 12:56:25', 1, 1, 1, 1, 1, 1, 90, 1),
(123, 'Latvia', 1, 1, '2018-05-11 12:17:26', '2018-05-12 00:01:06', 1, 2, 2, 1, 1, 1, 90, 4),
(124, 'Lebanon', 2, 1, '2018-05-11 12:17:31', '2018-05-11 12:56:39', 1, 1, 1, 1, 1, 1, 90, 1),
(125, 'Lesotho', 2, 1, '2018-05-11 12:17:36', '2018-05-11 12:56:45', 1, 1, 1, 1, 1, 1, 90, 1),
(126, 'Liberia', 2, 1, '2018-05-11 12:17:43', '2018-05-11 12:56:59', 1, 1, 1, 1, 1, 1, 90, 1),
(127, 'Libyan Arab Jamahiriya', 1, 1, '2018-05-11 12:17:53', '2018-05-12 00:02:04', 1, 2, 2, 2, 1, 1, 14, 4),
(128, 'Liechtenstein', 1, 1, '2018-05-11 12:17:58', '2018-05-12 00:02:43', 1, 2, 1, 1, 1, 1, 90, 4),
(129, 'Lithuania', 1, 1, '2018-05-11 12:18:04', '2018-05-12 00:01:26', 1, 2, 1, 1, 1, 1, 90, 4),
(130, 'Luxembourg', 1, 1, '2018-05-11 12:18:09', '2018-05-12 00:03:41', 1, 2, 1, 1, 1, 1, 90, 4),
(131, 'Macao', 2, 1, '2018-05-11 12:18:13', '2018-05-11 12:57:50', 1, 1, 1, 1, 1, 1, 90, 1),
(132, 'Macedonia', 1, 1, '2018-05-11 12:18:18', '2018-05-11 23:48:58', 1, 1, 1, 1, 1, 1, 90, 1),
(133, 'Madagascar', 2, 1, '2018-05-11 12:18:23', '2018-05-11 12:58:13', 1, 1, 1, 1, 1, 1, 90, 1),
(134, 'Malawi', 2, 1, '2018-05-11 12:18:28', '2018-05-11 12:58:21', 1, 1, 1, 1, 1, 1, 90, 1),
(135, 'Malaysia', 1, 1, '2018-05-11 12:18:33', '2018-05-11 12:18:33', 1, 1, 1, 1, 1, 1, 90, 1),
(136, 'Maldives', 1, 1, '2018-05-11 12:18:37', '2018-05-11 23:49:06', 1, 1, 1, 1, 1, 1, 90, 1),
(137, 'Mali', 2, 1, '2018-05-11 12:18:42', '2018-05-11 12:58:41', 1, 1, 1, 1, 1, 1, 90, 1),
(138, 'Malta', 1, 1, '2018-05-11 12:18:47', '2018-05-12 00:04:27', 1, 2, 1, 1, 1, 1, 30, 4),
(139, 'Marshall Islands', 2, 1, '2018-05-11 12:18:55', '2018-05-11 12:58:56', 1, 1, 1, 1, 1, 1, 90, 1),
(140, 'Martinique', 2, 1, '2018-05-11 12:19:01', '2018-05-11 12:59:03', 1, 1, 1, 1, 1, 1, 90, 1),
(141, 'Mauritania', 2, 1, '2018-05-11 12:19:07', '2018-05-11 12:59:12', 1, 1, 1, 1, 1, 1, 90, 1),
(142, 'Mauritius', 1, 1, '2018-05-11 12:19:13', '2018-05-11 23:49:13', 1, 1, 1, 1, 1, 1, 90, 1),
(143, 'Mayotte', 2, 1, '2018-05-11 12:19:18', '2018-05-11 12:59:31', 1, 1, 1, 1, 1, 1, 90, 1),
(144, 'Mexico', 1, 1, '2018-05-11 12:19:22', '2018-05-12 00:04:48', 1, 2, 1, 1, 1, 1, 90, 4),
(145, 'Micronesia, Federated States Of', 2, 1, '2018-05-11 12:19:31', '2018-05-11 12:59:47', 1, 1, 1, 1, 1, 1, 90, 1),
(146, 'Moldova', 2, 1, '2018-05-11 12:19:36', '2018-05-11 13:00:12', 1, 1, 1, 1, 1, 1, 90, 1),
(147, 'Monaco', 1, 1, '2018-05-11 12:19:42', '2018-05-11 23:49:20', 1, 1, 1, 1, 1, 1, 90, 1),
(148, 'Mongolia', 1, 1, '2018-05-11 12:19:47', '2018-05-11 12:19:47', 1, 1, 1, 1, 1, 1, 90, 1),
(149, 'Montenegro', 1, 1, '2018-05-11 12:19:51', '2018-05-12 00:05:34', 1, 2, 2, 1, 1, 1, 90, 4),
(150, 'Montserrat', 2, 1, '2018-05-11 12:19:58', '2018-05-11 13:00:46', 1, 1, 1, 1, 1, 1, 90, 1),
(151, 'Morocco', 1, 1, '2018-05-11 12:20:03', '2018-05-12 00:05:15', 1, 2, 2, 2, 1, 2, 90, 4),
(152, 'Mozambique', 2, 1, '2018-05-11 12:20:08', '2018-05-11 13:00:57', 1, 1, 1, 1, 1, 1, 90, 1),
(153, 'Myanmar', 2, 1, '2018-05-11 12:20:13', '2018-05-11 13:01:07', 1, 1, 1, 1, 1, 1, 90, 1),
(154, 'Namibia', 2, 1, '2018-05-11 12:20:25', '2018-05-11 13:01:23', 1, 1, 1, 1, 1, 1, 90, 1),
(155, 'Nauru', 2, 1, '2018-05-11 12:21:12', '2018-05-11 13:01:32', 1, 1, 1, 1, 1, 1, 90, 1),
(156, 'Nepal', 1, 1, '2018-05-11 12:21:17', '2018-05-11 23:49:32', 1, 1, 1, 1, 1, 1, 90, 1),
(157, 'Netherlands', 1, 1, '2018-05-11 12:21:23', '2018-05-12 00:05:52', 1, 2, 1, 1, 1, 1, 90, 4),
(158, 'New Zealand', 1, 1, '2018-05-11 12:21:34', '2018-05-11 23:49:38', 1, 1, 1, 1, 1, 1, 90, 1),
(159, 'Nicaragua', 2, 1, '2018-05-11 12:21:39', '2018-05-11 13:02:00', 1, 1, 1, 1, 1, 1, 90, 1),
(160, 'Niger', 2, 1, '2018-05-11 12:21:44', '2018-05-11 13:02:14', 1, 1, 1, 1, 1, 1, 90, 1),
(161, 'Nigeria', 2, 1, '2018-05-11 12:21:48', '2018-05-11 13:02:21', 1, 1, 1, 1, 1, 1, 90, 1),
(162, 'Niue', 2, 1, '2018-05-11 12:21:53', '2018-05-11 13:02:28', 1, 1, 1, 1, 1, 1, 90, 1),
(163, 'Norfolk Island', 2, 1, '2018-05-11 12:22:00', '2018-05-11 13:02:38', 1, 1, 1, 1, 1, 1, 90, 1),
(164, 'Northern Mariana Islands', 2, 1, '2018-05-11 12:22:06', '2018-05-11 13:02:45', 1, 1, 1, 1, 1, 1, 90, 1),
(165, 'Norway', 1, 1, '2018-05-11 12:22:11', '2018-05-12 00:06:10', 1, 2, 1, 1, 1, 1, 90, 4),
(166, 'Oman', 1, 1, '2018-05-11 12:22:21', '2018-05-11 23:49:46', 1, 1, 1, 1, 1, 1, 90, 1),
(167, 'Pakistan', 1, 1, '2018-05-11 12:22:27', '2018-05-12 00:06:31', 1, 2, 2, 1, 1, 1, 30, 4),
(168, 'Palau', 2, 1, '2018-05-11 12:22:31', '2018-05-11 13:03:12', 1, 1, 1, 1, 1, 1, 90, 1),
(169, 'Panama', 1, 1, '2018-05-11 12:22:38', '2018-05-11 23:49:51', 1, 1, 1, 1, 1, 1, 90, 1),
(170, 'Papua New Guinea', 2, 1, '2018-05-11 12:22:44', '2018-05-11 13:03:30', 1, 1, 1, 1, 1, 1, 90, 1),
(171, 'Paraguay', 1, 1, '2018-05-11 12:22:49', '2018-05-11 12:22:49', 1, 1, 1, 1, 1, 1, 90, 1),
(172, 'Peru', 1, 1, '2018-05-11 12:22:54', '2018-05-12 00:07:12', 1, 2, 2, 2, 1, 1, 90, 4),
(173, 'Philippines', 2, 1, '2018-05-11 12:22:59', '2018-05-11 13:03:53', 1, 1, 1, 1, 1, 1, 90, 1),
(174, 'Pitcairn', 2, 1, '2018-05-11 12:23:07', '2018-05-11 13:04:01', 1, 1, 1, 1, 1, 1, 90, 1),
(175, 'Poland', 1, 1, '2018-05-11 12:23:12', '2018-05-12 00:06:54', 1, 2, 1, 1, 1, 1, 90, 4),
(176, 'Portugal', 1, 1, '2018-05-11 12:23:17', '2018-05-12 00:08:10', 1, 2, 2, 2, 1, 1, 90, 4),
(178, 'PortugalPuerto Rico', 2, 1, '2018-05-11 12:23:38', '2018-05-11 13:04:45', 1, 1, 1, 1, 1, 1, 90, 1),
(179, 'Qatar', 1, 1, '2018-05-11 12:23:48', '2018-05-12 00:07:45', 1, 2, 1, 2, 1, 1, 30, 4),
(180, 'Romania', 1, 1, '2018-05-11 12:23:54', '2018-05-12 00:08:31', 1, 2, 2, 1, 1, 1, 90, 4),
(181, 'Russian Federation', 2, 1, '2018-05-11 12:24:04', '2018-05-11 13:04:57', 1, 1, 1, 1, 1, 1, 90, 1),
(182, 'Rwanda', 2, 1, '2018-05-11 12:24:12', '2018-05-11 13:05:06', 1, 1, 1, 1, 1, 1, 90, 1),
(183, 'Saint Barthelemy', 2, 1, '2018-05-11 12:24:18', '2018-05-11 13:05:16', 1, 1, 1, 1, 1, 1, 90, 1),
(184, 'Saint Helena', 2, 1, '2018-05-11 12:24:25', '2018-05-11 13:05:26', 1, 1, 1, 1, 1, 1, 90, 1),
(185, 'Saint Kitts And Nevis', 2, 1, '2018-05-11 12:24:34', '2018-05-11 13:05:35', 1, 1, 1, 1, 1, 1, 90, 1),
(186, 'Saint Lucia', 2, 1, '2018-05-11 12:24:42', '2018-05-11 13:05:43', 1, 1, 1, 1, 1, 1, 90, 1),
(187, 'Saint Martin', 2, 1, '2018-05-11 12:24:50', '2018-05-11 13:05:56', 1, 1, 1, 1, 1, 1, 90, 1),
(188, 'Saint Pierre And Miquelon', 2, 1, '2018-05-11 12:24:56', '2018-05-11 13:06:04', 1, 1, 1, 1, 1, 1, 90, 1),
(189, 'Saint Vincent And Grenadines', 2, 1, '2018-05-11 12:25:04', '2018-05-11 13:06:13', 1, 1, 1, 1, 1, 1, 90, 1),
(190, 'Samoa', 2, 1, '2018-05-11 12:25:10', '2018-05-11 13:06:23', 1, 1, 1, 1, 1, 1, 90, 1),
(191, 'San Marino', 1, 1, '2018-05-11 12:25:17', '2018-05-11 23:50:19', 1, 1, 1, 1, 1, 1, 90, 1),
(192, 'Sao Tome And Principe', 2, 1, '2018-05-11 12:25:26', '2018-05-11 13:06:42', 1, 1, 1, 1, 1, 1, 90, 1),
(193, 'Saudi Arabia', 1, 1, '2018-05-11 12:25:32', '2018-05-11 12:25:32', 1, 1, 1, 1, 1, 1, 90, 1),
(194, 'Senegal', 2, 1, '2018-05-11 12:25:37', '2018-05-11 13:06:52', 1, 1, 1, 1, 1, 1, 90, 1),
(195, 'Serbia', 1, 1, '2018-05-11 12:25:42', '2018-05-12 00:08:52', 1, 2, 2, 1, 1, 2, 90, 4),
(196, 'Seychelles', 1, 1, '2018-05-11 12:25:51', '2018-05-11 12:25:51', 1, 1, 1, 1, 1, 1, 90, 1),
(197, 'Sierra Leone', 2, 1, '2018-05-11 12:26:00', '2018-05-11 13:07:13', 1, 1, 1, 1, 1, 1, 90, 1),
(198, 'Singapore', 1, 1, '2018-05-11 12:26:05', '2018-05-11 23:40:18', 1, 1, 1, 1, 1, 1, 90, 1),
(199, 'Slovakia', 1, 1, '2018-05-11 12:26:10', '2018-05-12 00:09:20', 1, 2, 2, 1, 1, 1, 90, 4),
(200, 'Slovenia', 1, 1, '2018-05-11 12:26:15', '2018-05-12 00:09:43', 1, 2, 2, 1, 1, 1, 90, 4),
(201, 'Solomon Islands', 2, 1, '2018-05-11 12:26:21', '2018-05-11 23:40:29', 1, 1, 1, 1, 1, 1, 90, 1),
(202, 'Somalia', 2, 1, '2018-05-11 12:26:27', '2018-05-11 23:40:39', 1, 1, 1, 1, 1, 1, 90, 1),
(203, 'South Africa', 1, 1, '2018-05-11 12:26:33', '2018-05-11 12:26:33', 1, 1, 1, 1, 1, 1, 90, 1),
(204, 'South Georgia And Sandwich Isl.', 2, 1, '2018-05-11 12:26:40', '2018-05-11 23:40:49', 1, 1, 1, 1, 1, 1, 90, 1),
(205, 'Spain', 1, 1, '2018-05-11 12:26:45', '2018-05-11 23:57:38', 1, 2, 1, 1, 1, 1, 90, 4),
(206, 'Sri Lanka', 1, 1, '2018-05-11 12:26:51', '2018-05-11 12:26:51', 1, 1, 1, 1, 1, 1, 90, 1),
(208, 'State of Palestine', 2, 1, '2018-05-11 12:26:57', '2018-05-11 23:55:44', 1, 2, 1, 1, 1, 1, 30, 4),
(209, 'Sudan', 2, 1, '2018-05-11 12:27:02', '2018-05-11 23:41:51', 1, 1, 1, 1, 1, 1, 90, 1),
(210, 'Suriname', 2, 1, '2018-05-11 12:27:07', '2018-05-11 23:41:58', 1, 1, 1, 1, 1, 1, 90, 1),
(211, 'Swaziland', 2, 1, '2018-05-11 12:27:14', '2018-05-11 23:42:06', 1, 1, 1, 1, 1, 1, 90, 1),
(212, 'Sweden', 1, 1, '2018-05-11 12:27:19', '2018-05-11 23:58:03', 1, 2, 1, 1, 1, 1, 90, 4),
(213, 'Switzerland', 1, 1, '2018-05-11 12:27:23', '2018-05-11 12:27:23', 1, 1, 1, 1, 1, 1, 90, 1),
(214, 'Syrian Arab Republic', 1, 1, '2018-05-11 12:27:29', '2018-05-12 00:10:15', 1, 2, 2, 2, 1, 1, 30, 4),
(215, 'Tajikistan', 2, 1, '2018-05-11 12:27:34', '2018-05-11 23:42:32', 1, 1, 1, 1, 1, 1, 90, 1),
(216, 'Tanzania', 2, 1, '2018-05-11 12:27:58', '2018-05-11 23:42:38', 1, 1, 1, 1, 1, 1, 90, 1),
(217, 'Thailand', 1, 1, '2018-05-11 12:28:02', '2018-05-11 12:28:02', 1, 1, 1, 1, 1, 1, 90, 1),
(218, 'Timor-Leste', 2, 1, '2018-05-11 12:28:08', '2018-05-11 23:42:49', 1, 1, 1, 1, 1, 1, 90, 1),
(219, 'Togo', 2, 1, '2018-05-11 12:28:13', '2018-05-11 23:42:55', 1, 1, 1, 1, 1, 1, 90, 1),
(220, 'Tokelau', 2, 1, '2018-05-11 12:28:21', '2018-05-11 23:43:02', 1, 1, 1, 1, 1, 1, 90, 1),
(221, 'Tonga', 2, 1, '2018-05-11 12:28:28', '2018-05-11 23:43:09', 1, 1, 1, 1, 1, 1, 90, 1),
(222, 'Trinidad And Tobago', 1, 1, '2018-05-11 12:28:34', '2018-05-11 12:28:34', 1, 1, 1, 1, 1, 1, 90, 1),
(223, 'Tunisia', 2, 1, '2018-05-11 12:28:40', '2018-05-11 23:43:21', 1, 1, 1, 1, 1, 1, 90, 1),
(224, 'Turkmenistan', 1, 1, '2018-05-11 12:28:44', '2018-05-12 00:11:00', 1, 2, 2, 1, 1, 1, 30, 4),
(225, 'Tuvalu', 2, 1, '2018-05-11 12:28:54', '2018-05-11 23:43:28', 1, 1, 1, 1, 1, 1, 90, 1),
(226, 'Uganda', 2, 1, '2018-05-11 12:28:59', '2018-05-11 23:43:40', 1, 1, 1, 1, 1, 1, 90, 1),
(228, 'United Arab Emirates', 1, 1, '2018-05-11 12:29:10', '2018-05-11 23:51:42', 1, 2, 2, 2, 1, 1, 90, 4),
(229, 'United Kingdom', 1, 1, '2018-05-11 12:29:16', '2018-05-11 12:29:16', 1, 1, 1, 1, 1, 1, 90, 1),
(230, 'United States', 1, 1, '2018-05-11 12:29:23', '2018-05-11 12:29:23', 1, 1, 1, 1, 1, 1, 90, 1),
(231, 'United States Outlying Islands', 2, 1, '2018-05-11 12:29:30', '2018-05-11 23:44:21', 1, 1, 1, 1, 1, 1, 90, 1),
(232, 'Uruguay', 1, 1, '2018-05-11 12:29:38', '2018-05-12 00:12:47', 1, 2, 2, 1, 1, 2, 90, 4),
(233, 'Uzbekistan', 2, 1, '2018-05-11 12:29:43', '2018-05-11 23:44:35', 1, 1, 1, 1, 1, 1, 90, 1),
(234, 'Vanuatu', 2, 1, '2018-05-11 12:29:50', '2018-05-11 23:44:41', 1, 1, 1, 1, 1, 1, 90, 1),
(235, 'Venezuela', 1, 1, '2018-05-11 12:29:56', '2018-05-12 00:12:01', 1, 2, 2, 1, 1, 2, 90, 4),
(236, 'Viet Nam', 1, 1, '2018-05-11 12:30:02', '2018-05-12 00:12:17', 1, 2, 2, 1, 1, 2, 30, 4),
(237, 'Virgin Islands, British', 2, 1, '2018-05-11 12:30:09', '2018-05-11 23:45:01', 1, 1, 1, 1, 1, 1, 90, 1),
(238, 'Virgin Islands, U.S.', 2, 1, '2018-05-11 12:30:16', '2018-05-11 23:45:07', 1, 1, 1, 1, 1, 1, 90, 1),
(239, 'Wallis And Futuna', 2, 1, '2018-05-11 12:30:22', '2018-05-11 23:45:12', 1, 1, 1, 1, 1, 1, 90, 1),
(240, 'Western Sahara', 2, 1, '2018-05-11 12:30:28', '2018-05-11 23:45:18', 1, 1, 1, 1, 1, 1, 90, 1),
(241, 'Yemen', 2, 1, '2018-05-11 12:30:34', '2018-05-11 23:45:23', 1, 1, 1, 1, 1, 1, 90, 1),
(242, 'Zambia', 2, 1, '2018-05-11 12:30:39', '2018-05-11 23:45:28', 1, 1, 1, 1, 1, 1, 90, 1),
(243, 'Zimbabwe', 2, 1, '2018-05-11 12:30:45', '2018-05-11 23:45:35', 1, 1, 1, 1, 1, 1, 90, 1);

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
(3, '2018_04_28_175129_create_applies_table', 2),
(8, '2018_04_29_062558_create_site_options_table', 3),
(9, '2018_05_01_065005_create_countries_table', 4),
(12, '2018_05_11_090403_add_column_in_countries_table', 5);

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
-- Table structure for table `site_options`
--

CREATE TABLE `site_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_bg_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_bg_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_bg_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faq_bg_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ongoing_bg_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apply_bg_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gc_bg_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmn_bg_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright_left` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright_left_az` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright_left_ru` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright_left_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright_left_tr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright_right` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright_right_az` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright_right_ru` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright_right_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright_right_tr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_aplctns` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_options`
--

INSERT INTO `site_options` (`id`, `logo`, `home_bg_img`, `contact_bg_img`, `about_bg_img`, `faq_bg_img`, `ongoing_bg_img`, `apply_bg_img`, `gc_bg_img`, `tmn_bg_img`, `copyright_left`, `copyright_left_az`, `copyright_left_ru`, `copyright_left_ar`, `copyright_left_tr`, `copyright_right`, `copyright_right_az`, `copyright_right_ru`, `copyright_right_ar`, `copyright_right_tr`, `total_aplctns`, `created_at`, `updated_at`) VALUES
(1, '1526304986.jpg', '1526106157.jpg', '1526106182.jpg', '1526106182.jpg', '1526106157.jpg', '1526106157.jpg', '1526106157.jpg', '1526106182.jpg', '1526106182.jpg', 'Site owned and managed by  “Turizm.Az”  Travel Group  is not government authority.', '\"Turizm.Az\" Travel Group tərəfindən idarə olunan və idarə olunan sayt hökumət orqanı deyil.', 'Сайт, принадлежащий и управляемый туристической группой «Turizm.Az», не является государственным органом', 'الموقع الذي تملكه وتديره مجموعة \"Turizm.Az\" للسفر ليس سلطة حكومية.', '“Turizm.Az” Travel Group\'un sahibi olduğu ve yönettiği site, hükümet yetkilisi değildir.', 'Site by Mingo Tech', 'Sayt Mingo Tech tərəfindən', 'Сайт от Mingo Tech', 'الموقع من قبل مينغو تك', 'Mingo Tech tarafından site', 21, NULL, '2018-05-14 07:36:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@demo.com', '$2y$10$cRCOAlXSM2OO9p0HUiDyX.DFh1T2zUSgzmMCSZiQsKQsyrbnTWwcq', 'ErVtQuJ9q8J5KcCdH7LiMR2tGmyPOGQlYRHisBp53qmy27Gf0AJ5SUkEhMd5', '2018-04-28 03:29:44', '2018-04-28 03:29:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applies`
--
ALTER TABLE `applies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `site_options`
--
ALTER TABLE `site_options`
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
-- AUTO_INCREMENT for table `applies`
--
ALTER TABLE `applies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `site_options`
--
ALTER TABLE `site_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
