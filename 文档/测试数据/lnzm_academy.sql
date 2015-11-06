/*
Navicat MySQL Data Transfer

Source Server         : lab
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : lnzm

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-09-19 14:13:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for lnzm_academy
-- ----------------------------
DROP TABLE IF EXISTS `lnzm_academy`;
CREATE TABLE `lnzm_academy` (
  `academyId` bigint(20) NOT NULL AUTO_INCREMENT,
  `academyName` varchar(255) NOT NULL DEFAULT '',
  `academyDescription` varchar(255) DEFAULT '',
  `academyOther1` varchar(255) DEFAULT NULL,
  `academyRank` int(20) DEFAULT NULL,
  PRIMARY KEY (`academyId`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lnzm_academy
-- ----------------------------
INSERT INTO `lnzm_academy` VALUES ('25', '机械与汽车工程学院', '', null, '1');
INSERT INTO `lnzm_academy` VALUES ('26', '建筑学院', '', null, '6');
INSERT INTO `lnzm_academy` VALUES ('27', '土木与交通学院　', '', null, '3');
INSERT INTO `lnzm_academy` VALUES ('28', '电子与信息学院', '', null, '2');
INSERT INTO `lnzm_academy` VALUES ('29', '材料科学与工程学院', '', null, '5');
