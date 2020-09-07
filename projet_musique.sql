/*
 Navicat Premium Data Transfer

 Source Server         : LocalHost
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : projet_musique

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 27/06/2020 16:57:08
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categorys
-- ----------------------------
DROP TABLE IF EXISTS `categorys`;
CREATE TABLE `categorys`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categorys
-- ----------------------------
INSERT INTO `categorys` VALUES (1, 'rap');
INSERT INTO `categorys` VALUES (2, 'rai');
INSERT INTO `categorys` VALUES (3, 'hip-hop');
INSERT INTO `categorys` VALUES (4, 'mezwed');
INSERT INTO `categorys` VALUES (5, 'house');
INSERT INTO `categorys` VALUES (6, 'pop');
INSERT INTO `categorys` VALUES (7, 'rock and roll');

-- ----------------------------
-- Table structure for music
-- ----------------------------
DROP TABLE IF EXISTS `music`;
CREATE TABLE `music`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NULL DEFAULT NULL,
  `catid` int(11) NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of music
-- ----------------------------
INSERT INTO `music` VALUES (1, 1, 1, 'fff', 'dsfsdfsdf');
INSERT INTO `music` VALUES (2, 5, 0, 'test', 'music/fe2750f8ec1418760f4d7f0653324f1c.mp3');
INSERT INTO `music` VALUES (3, 5, 0, 'slfjsdkfjsldkfjsldflsk', 'music/ac2180d455a544c438a749456a66da9e.mp3');
INSERT INTO `music` VALUES (4, 7, 0, 'sonia', 'music/66fb23466ff52979828f2ac5d8e64096.mp3');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'test@gmail.com', 'test', '098f6bcd4621d373cade4e832627b4f6');
INSERT INTO `users` VALUES (2, 'test2@gmail.com', 'test2', 'ad0234829205b9033196ba818f7a872b');
INSERT INTO `users` VALUES (3, 'test3@gmail.com', 'test3', '8ad8757baa8564dc136c1e07507f4a98');
INSERT INTO `users` VALUES (4, 'test4@gmail.com', 'test4', '86985e105f79b95d6bc918fb45ec7727');
INSERT INTO `users` VALUES (5, 'rouissi@gmail.com', 'rouissi', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `users` VALUES (6, 'vggg', '', 'd41d8cd98f00b204e9800998ecf8427e');
INSERT INTO `users` VALUES (7, 'sonia@gmail.com', 'sonia', 'e10adc3949ba59abbe56e057f20f883e');

SET FOREIGN_KEY_CHECKS = 1;
