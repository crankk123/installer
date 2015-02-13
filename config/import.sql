/*
Navicat MySQL Data Transfer

Source Server         : Local
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : webinterface

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2015-02-11 00:32:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for server
-- ----------------------------
DROP TABLE IF EXISTS `server`;
CREATE TABLE `server` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` text NOT NULL,
  `port` text NOT NULL,
  `bezeichnung` text NOT NULL,
  `art` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for ticket
-- ----------------------------
DROP TABLE IF EXISTS `ticket`;
CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `betreff` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `priorität` varchar(255) DEFAULT NULL,
  `kategorie` varchar(255) DEFAULT NULL,
  `textbox` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ticket
-- ----------------------------

-- ----------------------------
-- Table structure for userdaten
-- ----------------------------
DROP TABLE IF EXISTS `userdaten`;
CREATE TABLE `userdaten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `benutzer` varchar(25) NOT NULL,
  `passwort` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of userdaten
-- ----------------------------
INSERT INTO `userdaten` VALUES ('1', 'admin', 'admin123', 'niclass1123@gmail.com');


-- ----------------------------
-- Table structure for user_rechte
-- ----------------------------
DROP TABLE IF EXISTS `user_rechte`;
CREATE TABLE `user_rechte` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL,
  `Recht` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of user_rechte
-- ----------------------------
INSERT INTO `user_rechte` VALUES ('1', '1', 'Adminbereich');
INSERT INTO `user_rechte` VALUES ('2', '1', 'User');
