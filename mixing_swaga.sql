/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : mixing_swaga

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2015-12-02 11:03:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for codeswaga
-- ----------------------------
DROP TABLE IF EXISTS `codeswaga`;
CREATE TABLE `codeswaga` (
  `codenumber` varchar(10) NOT NULL,
  `prize` varchar(255) DEFAULT NULL,
  `sku` varchar(10) DEFAULT NULL,
  `batchno` double(255,0) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codenumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of codeswaga
-- ----------------------------

-- ----------------------------
-- Table structure for setup_card
-- ----------------------------
DROP TABLE IF EXISTS `setup_card`;
CREATE TABLE `setup_card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sku` varchar(255) DEFAULT NULL,
  `prize` varchar(255) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of setup_card
-- ----------------------------
INSERT INTO `setup_card` VALUES ('1', 'SK 15', '50', '115', 'B');
INSERT INTO `setup_card` VALUES ('2', 'SK 15', '100', '48', 'B');
INSERT INTO `setup_card` VALUES ('3', 'SK 15', '300', '9', 'B');
INSERT INTO `setup_card` VALUES ('4', 'SK 15', '600', '7', 'B');
INSERT INTO `setup_card` VALUES ('5', 'SK 15', '1200', '5', 'B');
INSERT INTO `setup_card` VALUES ('6', 'SK 15', '1500', '3', 'B');
INSERT INTO `setup_card` VALUES ('7', 'SK 15', '2000', '1', 'B');
INSERT INTO `setup_card` VALUES ('8', 'SK 15', 'TRY AGAIN', '774', 'B');
INSERT INTO `setup_card` VALUES ('9', 'SK 30', '50', '886', 'A');
INSERT INTO `setup_card` VALUES ('10', 'SK 30', '100', '369', 'A');
INSERT INTO `setup_card` VALUES ('11', 'SK 30', '300', '73', 'A');
INSERT INTO `setup_card` VALUES ('12', 'SK 30', '600', '59', 'A');
INSERT INTO `setup_card` VALUES ('13', 'SK 30', '1200', '44', 'A');
INSERT INTO `setup_card` VALUES ('14', 'SK 30', '1500', '29', 'A');
INSERT INTO `setup_card` VALUES ('15', 'SK 30', '2000', '14', 'A');
INSERT INTO `setup_card` VALUES ('16', 'SK 30', 'TRY AGAIN', '2755', 'A');
INSERT INTO `setup_card` VALUES ('17', 'SK 90', '50', '105', 'A');
INSERT INTO `setup_card` VALUES ('18', 'SK 90', '100', '43', 'A');
INSERT INTO `setup_card` VALUES ('19', 'SK 90', '300', '8', 'A');
INSERT INTO `setup_card` VALUES ('20', 'SK 90', '600', '7', 'A');
INSERT INTO `setup_card` VALUES ('21', 'SK 90', '1200', '5', 'A');
INSERT INTO `setup_card` VALUES ('22', 'SK 90', '1500', '3', 'A');
INSERT INTO `setup_card` VALUES ('23', 'SK 90', '2000', '1', 'A');
INSERT INTO `setup_card` VALUES ('24', 'SK 90', 'TRY AGAIN', '341', 'A');
INSERT INTO `setup_card` VALUES ('25', 'SK 200', '50', '231', 'B');
INSERT INTO `setup_card` VALUES ('26', 'SK 200', '100', '96', 'B');
INSERT INTO `setup_card` VALUES ('27', 'SK 200', '300', '19', 'B');
INSERT INTO `setup_card` VALUES ('28', 'SK 200', '600', '15', 'B');
INSERT INTO `setup_card` VALUES ('29', 'SK 200', '1200', '11', 'B');
INSERT INTO `setup_card` VALUES ('30', 'SK 200', '1500', '7', 'B');
INSERT INTO `setup_card` VALUES ('31', 'SK 200', '2000', '3', 'B');
INSERT INTO `setup_card` VALUES ('32', 'SK 200', 'TRY AGAIN', '1547', 'B');
INSERT INTO `setup_card` VALUES ('33', 'SK 500', '50', '20', 'B');
INSERT INTO `setup_card` VALUES ('34', 'SK 500', '100', '8', 'B');
INSERT INTO `setup_card` VALUES ('35', 'SK 500', '300', '1', 'B');
INSERT INTO `setup_card` VALUES ('36', 'SK 500', '600', '1', 'B');
INSERT INTO `setup_card` VALUES ('37', 'SK 500', '1200', '1', 'B');
INSERT INTO `setup_card` VALUES ('38', 'SK 500', '1500', '0', 'B');
INSERT INTO `setup_card` VALUES ('39', 'SK 500', '2000', '0', 'B');
INSERT INTO `setup_card` VALUES ('40', 'SK 500', 'TRY AGAIN', '133', 'B');
INSERT INTO `setup_card` VALUES ('41', 'SK 1000', '50', '20', 'B');
INSERT INTO `setup_card` VALUES ('42', 'SK 1000', '100', '8', 'B');
INSERT INTO `setup_card` VALUES ('43', 'SK 1000', '300', '1', 'B');
INSERT INTO `setup_card` VALUES ('44', 'SK 1000', '600', '1', 'B');
INSERT INTO `setup_card` VALUES ('45', 'SK 1000', '1200', '1', 'B');
INSERT INTO `setup_card` VALUES ('46', 'SK 1000', '1500', '0', 'B');
INSERT INTO `setup_card` VALUES ('47', 'SK 1000', '2000', '0', 'B');
INSERT INTO `setup_card` VALUES ('48', 'SK 1000', 'TRY AGAIN', '133', 'B');
INSERT INTO `setup_card` VALUES ('49', 'GMF 25', '50', '570', 'C');
INSERT INTO `setup_card` VALUES ('50', 'GMF 25', '100', '237', 'C');
INSERT INTO `setup_card` VALUES ('51', 'GMF 25', '300', '47', 'C');
INSERT INTO `setup_card` VALUES ('52', 'GMF 25', '600', '38', 'C');
INSERT INTO `setup_card` VALUES ('53', 'GMF 25', '1200', '28', 'C');
INSERT INTO `setup_card` VALUES ('54', 'GMF 25', '1500', '19', 'C');
INSERT INTO `setup_card` VALUES ('55', 'GMF 25', '2000', '9', 'C');
INSERT INTO `setup_card` VALUES ('56', 'GMF 25', 'TRY AGAIN', '1766', 'C');
INSERT INTO `setup_card` VALUES ('57', 'GML 25', '50', '38', 'D');
INSERT INTO `setup_card` VALUES ('58', 'GML 25', '100', '16', 'D');
INSERT INTO `setup_card` VALUES ('59', 'GML 25', '300', '3', 'D');
INSERT INTO `setup_card` VALUES ('60', 'GML 25', '600', '2', 'D');
INSERT INTO `setup_card` VALUES ('61', 'GML 25', '1200', '1', 'D');
INSERT INTO `setup_card` VALUES ('62', 'GML 25', '1500', '1', 'D');
INSERT INTO `setup_card` VALUES ('63', 'GML 25', '2000', '0', 'D');
INSERT INTO `setup_card` VALUES ('64', 'GML 25', 'TRY AGAIN', '269', 'D');
INSERT INTO `setup_card` VALUES ('65', 'GMF 200', '50', '204', 'D');
INSERT INTO `setup_card` VALUES ('66', 'GMF 200', '100', '85', 'D');
INSERT INTO `setup_card` VALUES ('67', 'GMF 200', '300', '17', 'D');
INSERT INTO `setup_card` VALUES ('68', 'GMF 200', '600', '13', 'D');
INSERT INTO `setup_card` VALUES ('69', 'GMF 200', '1200', '10', 'D');
INSERT INTO `setup_card` VALUES ('70', 'GMF 200', '1500', '6', 'D');
INSERT INTO `setup_card` VALUES ('71', 'GMF 200', '2000', '3', 'D');
INSERT INTO `setup_card` VALUES ('72', 'GMF 200', 'TRY AGAIN', '1376', 'D');
INSERT INTO `setup_card` VALUES ('73', 'GML 200', '50', '65', 'D');
INSERT INTO `setup_card` VALUES ('74', 'GML 200', '100', '27', 'D');
INSERT INTO `setup_card` VALUES ('75', 'GML 200', '300', '5', 'D');
INSERT INTO `setup_card` VALUES ('76', 'GML 200', '600', '4', 'D');
INSERT INTO `setup_card` VALUES ('77', 'GML 200', '1200', '3', 'D');
INSERT INTO `setup_card` VALUES ('78', 'GML 200', '1500', '2', 'D');
INSERT INTO `setup_card` VALUES ('79', 'GML 200', '2000', '1', 'D');
INSERT INTO `setup_card` VALUES ('80', 'GML 200', 'TRY AGAIN', '441', 'D');
