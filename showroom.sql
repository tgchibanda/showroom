/*
Navicat MySQL Data Transfer

Source Server         : MySql
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : showroom

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-04-13 15:45:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2018_04_13_065634_create_vehicles_table', '1');

-- ----------------------------
-- Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------

-- ----------------------------
-- Table structure for `vehicles`
-- ----------------------------
DROP TABLE IF EXISTS `vehicles`;
CREATE TABLE `vehicles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vehicle_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_make` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_body_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_miliage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_transmission` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_fuel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_main_picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_picture1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_picture2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_picture3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_picture4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_picture5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `vehicle_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Used',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of vehicles
-- ----------------------------
INSERT INTO `vehicles` VALUES ('1', 'Nissan Navara', 'Tenetur at.', 'Qui.', 'Vitae.', '23 000km', '2012', 'R23 000.00', 'Aut.', 'Sint.', 'Est.', 'Sedan', 'A aut.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZzcDA-LpgexlAXHTuyuYn9qexwT8vpc8ewTwCwbzNXUUZIel4', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZzcDA-LpgexlAXHTuyuYn9qexwT8vpc8ewTwCwbzNXUUZIel4', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZzcDA-LpgexlAXHTuyuYn9qexwT8vpc8ewTwCwbzNXUUZIel4', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZzcDA-LpgexlAXHTuyuYn9qexwT8vpc8ewTwCwbzNXUUZIel4', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZzcDA-LpgexlAXHTuyuYn9qexwT8vpc8ewTwCwbzNXUUZIel4', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZzcDA-LpgexlAXHTuyuYn9qexwT8vpc8ewTwCwbzNXUUZIel4', 'Et sit iste rerum quia. Ullam qui est possimus non consectetur sequi quibusdam rerum. Aut incidunt deleniti dicta ab ut nisi.', '2018-04-13 07:27:28', '2018-04-13 07:27:28', 'Used');
INSERT INTO `vehicles` VALUES ('2', 'VW Golt 3', 'Amet.', 'Sint.', 'Omnis ut.', '54 000km', '2000', 'R32 000.00', 'Aut.', 'Eum.', 'Qui.', 'SUV', 'Distinctio.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZzcDA-LpgexlAXHTuyuYn9qexwT8vpc8ewTwCwbzNXUUZIel4', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZzcDA-LpgexlAXHTuyuYn9qexwT8vpc8ewTwCwbzNXUUZIel4', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZzcDA-LpgexlAXHTuyuYn9qexwT8vpc8ewTwCwbzNXUUZIel4', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZzcDA-LpgexlAXHTuyuYn9qexwT8vpc8ewTwCwbzNXUUZIel4', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZzcDA-LpgexlAXHTuyuYn9qexwT8vpc8ewTwCwbzNXUUZIel4', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZzcDA-LpgexlAXHTuyuYn9qexwT8vpc8ewTwCwbzNXUUZIel4', 'Error deserunt qui sunt sit eum accusantium eaque aut. Numquam rerum numquam rerum nihil deleniti. Ut magnam nobis consequatur non mollitia voluptatum.', '2018-04-13 07:27:28', '2018-04-13 07:27:28', 'Brand New');
INSERT INTO `vehicles` VALUES ('3', 'Toyota Corola', 'Occaecati ex.', 'Sit.', 'Aliquid.', '12 234km', '2003', 'R45 000.00', 'Est.', 'Unde.', 'At.', 'Hatchback', 'Debitis iure.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZzcDA-LpgexlAXHTuyuYn9qexwT8vpc8ewTwCwbzNXUUZIel4', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZzcDA-LpgexlAXHTuyuYn9qexwT8vpc8ewTwCwbzNXUUZIel4', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZzcDA-LpgexlAXHTuyuYn9qexwT8vpc8ewTwCwbzNXUUZIel4', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZzcDA-LpgexlAXHTuyuYn9qexwT8vpc8ewTwCwbzNXUUZIel4', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZzcDA-LpgexlAXHTuyuYn9qexwT8vpc8ewTwCwbzNXUUZIel4', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZzcDA-LpgexlAXHTuyuYn9qexwT8vpc8ewTwCwbzNXUUZIel4', 'Voluptatem nostrum non nam a velit sit dicta. Dolor exercitationem quia accusamus dolorem. At et velit sunt nulla non. Et dolorem ratione assumenda eligendi facilis qui.', '2018-04-13 07:27:28', '2018-04-13 07:27:28', 'Accident Damaged');
INSERT INTO `vehicles` VALUES ('4', 'Ford Focus', 'Non blanditiis.', 'Sunt.', 'Sit ut.', '6 234km', '2010', 'R33 000.00', 'A.', 'Eos.', 'Qui.', 'Sedan', 'Quibusdam.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZzcDA-LpgexlAXHTuyuYn9qexwT8vpc8ewTwCwbzNXUUZIel4', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZzcDA-LpgexlAXHTuyuYn9qexwT8vpc8ewTwCwbzNXUUZIel4', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZzcDA-LpgexlAXHTuyuYn9qexwT8vpc8ewTwCwbzNXUUZIel4', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZzcDA-LpgexlAXHTuyuYn9qexwT8vpc8ewTwCwbzNXUUZIel4', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZzcDA-LpgexlAXHTuyuYn9qexwT8vpc8ewTwCwbzNXUUZIel4', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZzcDA-LpgexlAXHTuyuYn9qexwT8vpc8ewTwCwbzNXUUZIel4', 'Voluptatum quo rerum qui fugit. Modi autem et qui voluptatem totam repudiandae. Rerum aliquid provident cupiditate sed repellat.', '2018-04-13 07:27:28', '2018-04-13 07:27:28', 'Old');
