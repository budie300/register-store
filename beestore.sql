/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 50624
 Source Host           : localhost:3306
 Source Schema         : beestore

 Target Server Type    : MySQL
 Target Server Version : 50624
 File Encoding         : 65001

 Date: 08/12/2022 22:41:56
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for register
-- ----------------------------
DROP TABLE IF EXISTS `register`;
CREATE TABLE `register`  (
  `username` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nik` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nm_member` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nohp` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `kota` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `provinsi` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `wn` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of register
-- ----------------------------
INSERT INTO `register` VALUES ('', '', '', '', '', '', '', '', '');
INSERT INTO `register` VALUES ('dsdsa', 'aminnah1@gmail.com', '342342', '3276042202930043', 'dffsd', '243242332525', 'depok', 'jawa barat', 'indonesia');
INSERT INTO `register` VALUES ('Siti900', 'ayunovieyanti@gmail.com', '333211', '3276042202930008', 'siti', '08888887774443', 'depok', 'jawa barat', 'indonesia');
INSERT INTO `register` VALUES ('budie300', 'bachtiarabian@gmail.com', '333211', '3276042202930002', 'budi', '02849289388395', 'jakarta', 'dki', 'indo');
INSERT INTO `register` VALUES ('ismail', 'budie300@gmail.com', '', '3276042202930007', 'ismail', '0888176565252323', 'depok', 'jawa barat', 'indonesia');
INSERT INTO `register` VALUES ('dodie', 'sitisukagoyang@gmail.com', '333211', '3276042202930005', 'dodi', '0888176565252626', 'jakarta', 'dki', 'indonesia');

SET FOREIGN_KEY_CHECKS = 1;
