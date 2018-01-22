/*
MySQL Data Transfer
Source Host: localhost
Source Database: zaixiankaoshixns
Target Host: localhost
Target Database: zaixiankaoshixns
Date: 2011-4-8 18:59:13
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for allusers
-- ----------------------------
CREATE TABLE `allusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `cx` varchar(50) DEFAULT '普通管理员',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Table structure for chengji
-- ----------------------------
CREATE TABLE `chengji` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `yonghuming` varchar(255) DEFAULT NULL,
  `danxuanti` int(11) DEFAULT NULL,
  `duoxuanti` int(11) DEFAULT NULL,
  `zf` int(11) DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `bianhao` varchar(255) DEFAULT NULL,
  `kemu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Table structure for danxuanti
-- ----------------------------
CREATE TABLE `danxuanti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kemu` varchar(50) DEFAULT NULL,
  `timu` varchar(50) DEFAULT NULL,
  `xuanxiangA` varchar(50) DEFAULT NULL,
  `xuanxiangB` varchar(50) DEFAULT NULL,
  `xuanxiangC` varchar(50) DEFAULT NULL,
  `xuanxiangD` varchar(50) DEFAULT NULL,
  `daan` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Table structure for duoxuanti
-- ----------------------------
CREATE TABLE `duoxuanti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kemu` varchar(50) DEFAULT NULL,
  `timu` varchar(50) DEFAULT NULL,
  `xuanxiangA` varchar(50) DEFAULT NULL,
  `xuanxiangB` varchar(50) DEFAULT NULL,
  `xuanxiangC` varchar(50) DEFAULT NULL,
  `xuanxiangD` varchar(50) DEFAULT NULL,
  `daan` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Table structure for kaosheng
-- ----------------------------
CREATE TABLE `kaosheng` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yonghuming` varchar(50) DEFAULT NULL,
  `mima` varchar(50) DEFAULT NULL,
  `xingming` varchar(50) DEFAULT NULL,
  `dianhua` varchar(50) DEFAULT NULL,
  `xingbie` varchar(50) DEFAULT NULL,
  `youxiang` varchar(50) DEFAULT NULL,
  `shenfenzheng` varchar(50) DEFAULT NULL,
  `dizhi` varchar(50) DEFAULT NULL,
  `zhaopian` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Table structure for kemuxinxi
-- ----------------------------
CREATE TABLE `kemuxinxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kemu` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Table structure for shijuanshengcheng
-- ----------------------------
CREATE TABLE `shijuanshengcheng` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bianhao` varchar(50) DEFAULT NULL,
  `danxuantishu` varchar(50) DEFAULT NULL,
  `danxuanfenzhi` varchar(50) DEFAULT NULL,
  `duoxuantishu` varchar(50) DEFAULT NULL,
  `duoxuanfenzhi` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `danxuanti` varchar(500) DEFAULT NULL,
  `duoxuanti` varchar(500) DEFAULT NULL,
  `kemu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `allusers` VALUES ('2', 'hsg', 'hsg', '超级管理员', '2011-04-02 09:59:20');
INSERT INTO `allusers` VALUES ('3', 's', 's', '普通管理员', '2011-04-08 15:48:07');
INSERT INTO `allusers` VALUES ('4', 'gg', 'gg', '普通管理员', '2011-04-08 18:30:38');
INSERT INTO `chengji` VALUES ('3', '111', '20', '25', '45', '2011-04-08 18:28:02', '002', '驾驶员理论');
INSERT INTO `chengji` VALUES ('4', '111', '50', '30', '80', '2011-04-08 18:28:19', '001', '驾驶员理论');
INSERT INTO `chengji` VALUES ('5', '2222', '20', '10', '30', '2011-04-08 18:32:39', '005', '驾驶员理论');
INSERT INTO `danxuanti` VALUES ('2', '驾驶员理论', 'rtjrt', 'rkrt', 'kr', 'ktrkr', 'rthrthr', 'A', '2011-04-08 14:55:13');
INSERT INTO `danxuanti` VALUES ('3', '编程基础', 'yuluylyu', 'he', 'erje', 'jrjt', 'rkrtkr', 'B', '2011-04-08 14:56:00');
INSERT INTO `danxuanti` VALUES ('4', '驾驶员理论', 'ykytk', 'ererh', 'ejre', 'jrjtr', 'ktrktr', 'C', '2011-04-08 14:56:05');
INSERT INTO `danxuanti` VALUES ('5', '驾驶员理论', 'kj.kj', 'jyt', 'jtyk', 'rtr', 'urtutr', 'D', '2011-04-08 14:56:14');
INSERT INTO `danxuanti` VALUES ('6', '驾驶员理论', 'rehrej', 'tyjty', 'kytkty', 'hrthtr', 'jtrjrt', 'A', '2011-04-08 14:56:18');
INSERT INTO `danxuanti` VALUES ('7', '驾驶员理论', 'erreyr', 'yjt', 'jytkr', 'krt', 'rjtrjkrt', 'A', '2011-04-08 14:56:23');
INSERT INTO `danxuanti` VALUES ('8', '驾驶员理论', 'gfh', 'fjy', 'tyk', 'tykty', 'luylyu', 'B', '2011-04-08 15:19:09');
INSERT INTO `danxuanti` VALUES ('9', '驾驶员理论', 'saf', 'dgsdg', 'erhre', 'erje', 'rgerge', 'C', '2011-04-08 15:19:13');
INSERT INTO `danxuanti` VALUES ('10', '驾驶员理论', 'asfsa', 'gdfg', 'rehr', 'reher', 'jrejer', 'A', '2011-04-08 15:19:17');
INSERT INTO `danxuanti` VALUES ('11', '驾驶员理论', 'gerg', 'wrqw', 'rwq', 'reher', 'jrejer', 'A', '2011-04-08 15:19:26');
INSERT INTO `danxuanti` VALUES ('12', '驾驶员理论', '34y3y', '34y54', 'u45', 'u54u4', 'u54u54', 'A', '2011-04-08 18:31:23');
INSERT INTO `duoxuanti` VALUES ('2', '驾驶员理论', 'rtjrt', 'jtr', 'krtk', 'uylyu', 'lyuly', 'ABC', '2011-04-08 14:59:12');
INSERT INTO `duoxuanti` VALUES ('3', '驾驶员理论', 'rtjtrj', 'rtk', 'kkuyl', 'rjrt', 'jrtkr', 'BCD', '2011-04-08 14:59:49');
INSERT INTO `duoxuanti` VALUES ('4', '驾驶员理论', 'dfhdf', 'gkghk', 'jheth', 'trjr', 'heherh', 'ABCD', '2011-04-08 15:00:00');
INSERT INTO `duoxuanti` VALUES ('5', '驾驶员理论', 'dhdfh', 'rtj', 'rjyt', 'kyt', 'ktre', 'ABCD', '2011-04-08 15:18:48');
INSERT INTO `duoxuanti` VALUES ('6', '编程基础', 'fdh', 'dfhgf', 'hg', 'hdh', 'reher', 'ABCD', '2011-04-08 15:18:59');
INSERT INTO `duoxuanti` VALUES ('7', '驾驶员理论', 'fafas', 'gdsg', 'reher', 'afas', 'fa', 'ABCD', '2011-04-08 15:19:38');
INSERT INTO `duoxuanti` VALUES ('8', '驾驶员理论', 'sdfds', 'gsdga', 'gfdh', 'hfdsh', 'js', 'ABCD', '2011-04-08 15:19:44');
INSERT INTO `duoxuanti` VALUES ('9', '驾驶员理论', 'greherh', 'fwq', 'ewg', 'gerh', 'rejhe', 'ABCD', '2011-04-08 15:19:53');
INSERT INTO `duoxuanti` VALUES ('10', '驾驶员理论', 'dfsfds', 'asfas', 'fsa', 'gasgas', 'gasha', 'ABCD', '2011-04-08 15:19:59');
INSERT INTO `duoxuanti` VALUES ('11', '驾驶员理论', 'gfdhfd', 'hrtjrt', 'jtr', 'rtktr', 'hrehre', 'ABCD', '2011-04-08 15:20:07');
INSERT INTO `duoxuanti` VALUES ('12', '编程基础', 'u54u4', 'u54i45', 'i54', 'y45y', 'weywe', 'BCD', '2011-04-08 18:31:33');
INSERT INTO `kaosheng` VALUES ('2', 'fhdf', 'hdf', 'jfdjf', 'jdfjd', '男', 'jgfjfg', 'jfdjdf', 'hfgjfg', 'uploadfile/10.jpg', '2011-04-08 14:42:40');
INSERT INTO `kaosheng` VALUES ('3', '111', '111', '12412', '41241', '男', '4214eee', '141241', '421412', 'uploadfile/1.gif', '2011-04-08 15:46:56');
INSERT INTO `kaosheng` VALUES ('4', '2222', '2222', '235235', '532523', '男', '523523', '523523', '532523', 'uploadfile/11.jpg', '2011-04-08 18:31:00');
INSERT INTO `kemuxinxi` VALUES ('2', '编程基础', '2011-04-08 14:54:10');
INSERT INTO `kemuxinxi` VALUES ('3', '驾驶员理论', '2011-04-08 14:54:19');
INSERT INTO `shijuanshengcheng` VALUES ('4', '002', '5', '10', '2', '25', '2011-04-08 15:29:58', '4,11,8,9,10', '2,7', '驾驶员理论');
INSERT INTO `shijuanshengcheng` VALUES ('5', '001', '2', '25', '5', '10', '2011-04-08 15:30:38', '2,7', '5,4,6,3,2', '驾驶员理论');
INSERT INTO `shijuanshengcheng` VALUES ('8', '005', '5', '10', '5', '10', '2011-04-08 18:31:52', '12,4,7,8,5', '5,4,11,8,9', '驾驶员理论');
