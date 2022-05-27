/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 80028
 Source Host           : localhost:3306
 Source Schema         : newsportal

 Target Server Type    : MySQL
 Target Server Version : 80028
 File Encoding         : 65001

 Date: 27/05/2022 06:59:11
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for brands
-- ----------------------------
DROP TABLE IF EXISTS `brands`;
CREATE TABLE `brands`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of brands
-- ----------------------------
INSERT INTO `brands` VALUES (3, 'third Image', 'image/brand/1732854286281629.png', '2022-05-15 01:37:06', '2022-05-15 11:12:35');
INSERT INTO `brands` VALUES (4, 'Second one', 'image/brand/1732854305335873.png', '2022-05-15 01:37:25', NULL);
INSERT INTO `brands` VALUES (7, 'New method', 'image/brand/1732894721920619.png', '2022-05-15 12:19:49', NULL);
INSERT INTO `brands` VALUES (8, 'adsdas', 'image/brand/1732894803944789.png', '2022-05-15 12:21:07', NULL);
INSERT INTO `brands` VALUES (9, 'H&M', 'image/brand/1733246175761657.png', '2022-05-19 09:26:02', NULL);
INSERT INTO `brands` VALUES (10, 'ert', 'image/brand/1733246608827386.png', '2022-05-19 09:32:54', NULL);

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `category_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 34 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (3, 6, 'Sea Products', '2022-05-01 12:31:08', '2022-05-01 12:31:08', NULL);
INSERT INTO `categories` VALUES (4, 1, 'Octupus', '2022-05-01 12:43:59', '2022-05-01 12:43:59', NULL);
INSERT INTO `categories` VALUES (25, 1, '50 Cent', '2022-05-04 19:21:17', '2022-05-04 19:21:17', NULL);
INSERT INTO `categories` VALUES (26, 1, '60 Cent', '2022-05-05 12:05:21', '2022-05-05 12:05:21', NULL);
INSERT INTO `categories` VALUES (27, 1, 'ZazJAZZZA', '2022-05-05 13:01:49', '2022-05-09 14:16:26', NULL);
INSERT INTO `categories` VALUES (28, 7, '123456', '2022-05-06 02:11:56', '2022-05-10 03:09:55', '2022-05-10 03:09:55');
INSERT INTO `categories` VALUES (29, 7, 'Zaz', '2022-05-06 03:09:21', '2022-05-10 03:10:00', NULL);
INSERT INTO `categories` VALUES (31, 1, 'ASD5670078', '2022-05-06 03:10:03', '2022-05-10 03:09:45', NULL);
INSERT INTO `categories` VALUES (33, 1, 'Moby', '2022-05-10 03:21:01', '2022-05-10 03:21:01', NULL);
INSERT INTO `categories` VALUES (34, 1, 'sfddf', '2022-05-14 10:14:47', '2022-05-14 10:14:47', NULL);

-- ----------------------------
-- Table structure for contacts
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of contacts
-- ----------------------------
INSERT INTO `contacts` VALUES (1, 'asdasd\r\nasdasd\r\nasdasd\r\nasdasd', 'hayrapetyan86@gmail.com', '+37494605305', '2022-05-26 07:25:39', NULL);
INSERT INTO `contacts` VALUES (3, 'ARACHI, Pakistan (Reuters) - Pakistan\'s mango production is expected to decline by around 50% this year, as the crop has been severely hit by unusually high temperatures and water shortages, the chief of a growers\' and exporters\' association said.', 'asdasd@asdasd.com', '13026608398', '2022-05-26 08:03:50', NULL);
INSERT INTO `contacts` VALUES (4, '3.33', 'test@test2.fr', '099888888', '2022-05-26 08:26:55', '2022-05-26 08:27:22');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for home_abouts
-- ----------------------------
DROP TABLE IF EXISTS `home_abouts`;
CREATE TABLE `home_abouts`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_dis` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_dis` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of home_abouts
-- ----------------------------
INSERT INTO `home_abouts` VALUES (1, 'Home About', 'Lorem iposum short Lorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum short', 'Lorem iposum short Lorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum short Lorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum short Lorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum short Lorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum short Lorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum short Lorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum short Lorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum short Lorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum short Lorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem iposum shortLorem', '2022-05-26 05:00:29', '2022-05-26 05:01:09');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (6, '2022_04_28_020127_create_sessions_table', 1);
INSERT INTO `migrations` VALUES (10, '2022_05_01_100119_create_categories_table', 2);
INSERT INTO `migrations` VALUES (14, '2022_05_10_033438_create_brands_table', 3);
INSERT INTO `migrations` VALUES (15, '2022_05_15_122901_create_multipics_table', 4);
INSERT INTO `migrations` VALUES (16, '2022_05_19_103116_create_sliders_table', 5);
INSERT INTO `migrations` VALUES (18, '2022_05_21_235823_create_home_abouts_table', 6);
INSERT INTO `migrations` VALUES (19, '2022_05_26_044910_create_contacts_table', 7);

-- ----------------------------
-- Table structure for multipics
-- ----------------------------
DROP TABLE IF EXISTS `multipics`;
CREATE TABLE `multipics`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of multipics
-- ----------------------------
INSERT INTO `multipics` VALUES (4, 'image/multi/1732898852455492.png', '2022-05-15 13:25:28', NULL);
INSERT INTO `multipics` VALUES (5, 'image/multi/1732898853097993.png', '2022-05-15 13:25:29', NULL);
INSERT INTO `multipics` VALUES (6, 'image/multi/1732898853255510.png', '2022-05-15 13:25:29', NULL);
INSERT INTO `multipics` VALUES (7, 'image/multi/1732898853320354.png', '2022-05-15 13:25:29', NULL);
INSERT INTO `multipics` VALUES (8, 'image/multi/1733767226590905.jpg', '2022-05-25 03:27:55', NULL);
INSERT INTO `multipics` VALUES (9, 'image/multi/1733767574305256.jpg', '2022-05-25 03:33:26', NULL);
INSERT INTO `multipics` VALUES (10, 'image/multi/1733768452991313.jpg', '2022-05-25 03:47:24', NULL);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
INSERT INTO `password_resets` VALUES ('hayrapetyan86@gmail.com', '$2y$10$wIyC6BBIulQ6if5MzPIDgeoVBnrnHMXDNLXmcyo8UJdX/ixY/eaJK', '2022-05-16 02:53:56');

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `category_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_name` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of posts
-- ----------------------------

-- ----------------------------
-- Table structure for sessions
-- ----------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions`  (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NULL DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `payload` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `sessions_user_id_index`(`user_id`) USING BTREE,
  INDEX `sessions_last_activity_index`(`last_activity`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sessions
-- ----------------------------
INSERT INTO `sessions` VALUES ('2ZzgBu0wKabo9e1av8R2dUAHUO6nscw4ImdDB9Ih', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibHQ1OXJ2QW5uOTVRdHdibEJybG9RR0t4TkxLTXBmTzBmN3lQa1pqMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9icmFuZC9hbGwiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJER1V25EYjU2VUFWdW9Wck9VNGs3dXVaVVIuUnNaSlB3endoRVdGNEl2Ui9qdXd2VFVQd3kyIjt9', 1653620066);
INSERT INTO `sessions` VALUES ('TvV0lGrxuztLTxSz4KDIGuzH0XwquXHStVes2nwe', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiTENxOERaanBCSlR1S0daeVdVbzJWQ3Y4OExyWDY0UmVvVmJkUWtEdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jb250YWN0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkRHVXbkRiNTZVQVZ1b1ZyT1U0azd1dVpVUi5Sc1pKUHd6d2hFV0Y0SXZSL2p1d3ZUVVB3eTIiO30=', 1653557582);

-- ----------------------------
-- Table structure for sliders
-- ----------------------------
DROP TABLE IF EXISTS `sliders`;
CREATE TABLE `sliders`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sliders
-- ----------------------------
INSERT INTO `sliders` VALUES (2, 'Slider 2', 'Lorrem ipsumThis site can’t be reachedwww.google.com’s server IP address could not be found.\r\nTry:\r\n\r\nChecking the connection\r\nChecking the proxy, firewall, and DNS configuration\r\nRunning Windows Network Diagnostics\r\nERR_NAME_NOT_RESOLVED', 'image/slider/1733648558715559.jpg', '2022-05-20 10:07:43', '2022-05-23 20:01:44');
INSERT INTO `sliders` VALUES (3, 'Slider 3', 'Высокая скорость ветра ожидается на Айгаван.\r\nДругие карты погоды\r\nАнимация показывает ветровые условия шторма на высоте 200 м над землей, что хорошо согласуется с ожидаемыми порывами на поверхности. Выберите другие временные шаги, чтобы посмотреть прогноз шторма.', 'image/slider/1733339461618854.png', '2022-05-20 10:08:47', NULL);
INSERT INTO `sliders` VALUES (4, 'gagik', 'he lorem ipsum is a placeholder text used in publishing and graphic design. This filler text is a short paragraph that contains all the letters of the alphabet. The characters are spread out evenly so that the reader\'s attention is focused on the layout of the text instead of its content.20 мая 2020 г.', 'image/slider/1733648582370372.jpg', '2022-05-20 11:48:28', '2022-05-23 20:02:06');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `two_factor_recovery_codes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `two_factor_confirmed_at` timestamp(0) NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `current_team_id` bigint UNSIGNED NULL DEFAULT NULL,
  `profile_photo_path` varchar(2048) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Tigran HAYRAPETYAN', 'hayrapetyan86@gmail.com', '2022-05-16 03:08:47', '$2y$10$DuWnDb56UAVuoVrOU4k7uuZUR.RsZJPwzwhEWF4IvR/juwvTUPwy2', NULL, NULL, NULL, NULL, NULL, 'profile-photos/joa052b816zae0OsI2p6R36tAhRpZIOuef2yjMEn.png', '2022-04-28 02:22:17', '2022-05-16 03:08:47');
INSERT INTO `users` VALUES (3, 'Petros Poghosyan', 'sdf@gmail.coom', NULL, '$2y$10$qv3vElX3tB04bXGb3TrDVuvak3Ywrm21YA8w2Zw2mfVc9KNd129bC', NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-29 13:15:37', '2022-04-29 13:15:37');
INSERT INTO `users` VALUES (6, 'Poghos', 'poghos@poghosyan.com', NULL, '$2y$10$h8Coz7wtjgOGXrJ1D9Edh.DaylOV5UGR6haa6g8HoeYylV2xBG6Jq', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-01 12:30:50', '2022-05-01 12:30:50');
INSERT INTO `users` VALUES (7, 'Ani', 'anibeqiryan@mail.ru', NULL, '$2y$10$YP0CwrHQtebXtl/xvHL9uugBymJNkf7xWs2GldSuMITvILqnP6kN2', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-06 02:11:33', '2022-05-06 02:11:33');
INSERT INTO `users` VALUES (8, 'Poghos Petrosyan', 'hayrapetyan270886@gmail.com', '2022-05-17 23:35:34', '$2y$10$Kh7olSrG6pnp8dta9VqjjeF8Hfa5CtfJkR1AcQMvPCYYUK/0a60V.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-17 23:34:38', '2022-05-17 23:35:34');

SET FOREIGN_KEY_CHECKS = 1;
