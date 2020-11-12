/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : newrent

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-11-10 13:52:34
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `bookings`
-- ----------------------------
DROP TABLE IF EXISTS `bookings`;
CREATE TABLE `bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `apartment_name` varchar(255) NOT NULL,
  `plot_number` varchar(255) NOT NULL,
  `rooms` varchar(255) NOT NULL,
  `floor` varchar(255) NOT NULL,
  `ap_number_of_plats` varchar(255) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `deposit` varchar(255) NOT NULL,
  `datebooked` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bookings
-- ----------------------------
INSERT INTO `bookings` VALUES ('7', 'test', '25', '257k', 'Ground Floor', '44', 'Barasa Gabriel', '2000', '2020-11-07 18:07:22');
INSERT INTO `bookings` VALUES ('8', 'test', '25', '257k', 'Ground Floor', '44', 'Barasa Gabriel', '2000', '2020-11-07 18:07:22');
INSERT INTO `bookings` VALUES ('9', 'test', '25', '257k', 'Ground Floor', '44', 'Barasa Gabriel', '2000', '2020-11-07 18:07:22');
INSERT INTO `bookings` VALUES ('10', 'test', '25', '257k', 'Ground Floor', '44', 'Barasa Gabriel', '2000', '2020-11-07 18:07:22');
INSERT INTO `bookings` VALUES ('12', 'test', '25', '257k', 'Ground Floor', '44', 'Samuel', '2000', '2020-11-07 18:53:31');
INSERT INTO `bookings` VALUES ('13', 'test', '25', '257k', 'Ground Floor', '44', 'Samuel', '2000', '2020-11-07 18:55:58');
INSERT INTO `bookings` VALUES ('14', 'test', '25', '257k', 'Ground Floor', '44', 'Samuel', '20000', '2020-11-07 18:57:48');

-- ----------------------------
-- Table structure for `cmps`
-- ----------------------------
DROP TABLE IF EXISTS `cmps`;
CREATE TABLE `cmps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `cmp` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cmps
-- ----------------------------
INSERT INTO `cmps` VALUES ('1', 'f', 'f', 'admin', 'Barasa Gabriel');
INSERT INTO `cmps` VALUES ('2', 'Book', 'Hello i would like to buy', 'oloo', 'David');

-- ----------------------------
-- Table structure for `registrations_land`
-- ----------------------------
DROP TABLE IF EXISTS `registrations_land`;
CREATE TABLE `registrations_land` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(191) NOT NULL,
  `mobile` varchar(191) NOT NULL,
  `alternat_mobile` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `county` varchar(191) NOT NULL,
  `town` varchar(191) NOT NULL,
  `city` varchar(191) NOT NULL,
  `lease` varchar(191) NOT NULL,
  `sale` varchar(191) NOT NULL,
  `deposit` varchar(191) NOT NULL,
  `land_number` varchar(191) NOT NULL,
  `facilities` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `landmark` varchar(191) NOT NULL,
  `address` varchar(191) NOT NULL,
  `vacant` int(10) NOT NULL DEFAULT 1,
  `image` int(11) DEFAULT NULL,
  `open_for_sharing` varchar(191) DEFAULT NULL,
  `other` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of registrations_land
-- ----------------------------
INSERT INTO `registrations_land` VALUES ('1', 'Barasa Gabriel', '0793568896', '', 'barasa@gmail.com', 'Bungoma', 'Bungoma', 'Bungoma', '25000', '1000000', '500000', '788', 'water, electricity', 'awesome place to live', 'Stadium', '1245', '1', '0', null, null, '2020-11-01 17:18:45', '2020-11-01 17:18:45', '7');
INSERT INTO `registrations_land` VALUES ('2', 'Gabriel Barasa', '0758585585', '', 'barasa@gmail.com', 'Kitale', 'Kitale', 'Kitale', '10000', '150000', '50000', '452', 'water, electricity', 'A good land for farming', 'kitale chiefs office', '125, kitale', '0', '0', null, null, '2020-11-03 11:20:36', '2020-11-03 11:20:36', '7');
INSERT INTO `registrations_land` VALUES ('3', 'David oloo', '0858585854', '', 'david@gmail.com', 'Bungoma', 'Bungoma', 'Bungoma', '12222', '50000', '20000', '25', 'water, electricity', 'Cool', 'school', '125', '0', '0', null, null, '2020-11-04 11:34:18', '2020-11-04 11:34:18', '8');

-- ----------------------------
-- Table structure for `room_rental_registrations`
-- ----------------------------
DROP TABLE IF EXISTS `room_rental_registrations`;
CREATE TABLE `room_rental_registrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alternat_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landmark` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plot_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rooms` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accommodation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_for_sharing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacant` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `user_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `room_rental_registrations_mobile_unique` (`mobile`),
  UNIQUE KEY `room_rental_registrations_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of room_rental_registrations
-- ----------------------------
INSERT INTO `room_rental_registrations` VALUES ('13', 'Admin', '2345676567', '98888787', 'admin@admin.com', 'Kenya', 'Kanduyi', 'Bungoma', 'Kibabii University', '3', '12', '3', '78 nh', '2bhk', 'dsdsd', '4', 'dssd', 'uploads/', null, 'zx', '0', '2018-02-16 15:21:43', '2018-02-16 15:21:43', '1');
INSERT INTO `room_rental_registrations` VALUES ('14', 'barasa', '2345676997', '', 'bar@gmrail.com', 'Kenya', 'Webuye', 'Bungoma', '', '1232', '12', '33333', '78 nh', '1bhk', 'port road bgm', '', '', 'uploads/', null, null, '1', '2018-03-09 08:06:43', '2018-03-09 08:06:43', '2');
INSERT INTO `room_rental_registrations` VALUES ('15', 'aaa', '2222222222', '', 'admin@admmmin.com', 'Kenya', 'Bungoma', 'Bungoma', '', '1232', '12666', '33333', '78 nh', '1bhk', 'port road bgm', 'wifi,pridge', 'good to see', 'uploads/Penguins.jpg', null, null, '1', '2018-04-04 14:19:09', '2018-04-04 14:19:09', '1');

-- ----------------------------
-- Table structure for `room_rental_registrations_apartment`
-- ----------------------------
DROP TABLE IF EXISTS `room_rental_registrations_apartment`;
CREATE TABLE `room_rental_registrations_apartment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alternat_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landmark` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deposit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plot_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apartment_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ap_number_of_plats` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rooms` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purpose` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `own` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accommodation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_for_sharing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacant` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `user_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of room_rental_registrations_apartment
-- ----------------------------
INSERT INTO `room_rental_registrations_apartment` VALUES ('3', '', '', '', '', '', '', '', '', '', '22222', '78 nh', 'mant apartment', '101', '2bhk', '2nd', null, null, null, '', '', '', 'uploads/Jellyfish.jpg', null, null, '0', '2018-04-04 14:20:56', '2018-04-04 14:20:56', '7');
INSERT INTO `room_rental_registrations_apartment` VALUES ('4', '', '', '', '', '', '', '', '', '', '20000', 'pl20', 'Kanduyi', '12', '2hk', '1st', null, null, null, '', '', '', 'uploads/1.PNG', null, null, '0', '2020-11-01 14:33:20', '2020-11-01 14:33:20', '7');
INSERT INTO `room_rental_registrations_apartment` VALUES ('5', 'ke', '0858585854', '', 'sam@gmail.com', 'ke', 'ke', 'Bungoma', 'school', '', '2000', '25', 'test', '44', '257k', 'Ground Floor', 'Residential', 'owner', 'gh', '125', 'waer', 'yes', 'uploads/football-1274662_1280.jpg', null, null, '1', '2020-11-07 13:59:07', '2020-11-07 13:59:07', '13');

-- ----------------------------
-- Table structure for `user_messages`
-- ----------------------------
DROP TABLE IF EXISTS `user_messages`;
CREATE TABLE `user_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_to` int(11) NOT NULL,
  `user_from` int(11) NOT NULL,
  `msg_body` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `msg_seen` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_messages
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `role` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `status` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_mobile_unique` (`mobile`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('14', 'Samuel', '0785852258', 'Sam', 'samueli@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2020-11-07 18:27:00', '2020-11-07 18:27:00', 'user', '1');
INSERT INTO `users` VALUES ('12', 'David', '9848979179', 'oloo', 'david@gmail.com', '8ec1b433ea23dc121336a4b58ae1b1ac', '2020-11-07 13:53:45', '2020-11-07 13:53:45', 'user', '1');
INSERT INTO `users` VALUES ('7', 'Barasa Gabriel', '0793568896', 'Barasa', 'barasa@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2020-10-31 15:15:40', '2020-10-31 15:15:40', 'admin', '1');
INSERT INTO `users` VALUES ('13', 'sam', '0785585258', 'othis', 'sam@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2020-11-07 13:55:19', '2020-11-07 13:55:19', 'user', '1');
INSERT INTO `users` VALUES ('15', 'gabriel barasa', '0799991094', 'gabsbaro', 'gabrielbarasa@gmail.com', 'dfed8dc74bc88d6ee8aeb64f331361ad', '2020-11-10 12:13:03', '2020-11-10 12:13:03', 'user', '1');
