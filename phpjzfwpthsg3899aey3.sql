/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 50553
 Source Host           : localhost:3306
 Source Schema         : phpjzfwpthsg3899aey3

 Target Server Type    : MySQL
 Target Server Version : 50553
 File Encoding         : 65001

 Date: 07/05/2019 08:48:23
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for allusers
-- ----------------------------
DROP TABLE IF EXISTS `allusers`;
CREATE TABLE `allusers`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `pwd` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `cx` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT '普通管理员',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = gb2312 COLLATE = gb2312_chinese_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of allusers
-- ----------------------------
INSERT INTO `allusers` VALUES (0, 'admin', 'admin', '超级管理员', '2017-04-02 21:00:56');

-- ----------------------------
-- Table structure for dx
-- ----------------------------
DROP TABLE IF EXISTS `dx`;
CREATE TABLE `dx`  (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `leibie` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of dx
-- ----------------------------
INSERT INTO `dx` VALUES (1, '系统简介', '<p>\r\n	<p class=\"MsoNormal\" style=\"text-indent:24.0pt;\">\r\n		随着人们生活的日益改善，家政服务这一概念渐渐走入许多家庭中，而面临着家政服务需求的日益增长，许多家政服务机构迫切需要一个管理系统，以求达到管理的合理化和有序化。在我们的日常生活中，我们不难发现，家务活慢慢开始占据我们的大部分休闲时间。增加我们劳动量的同时，又影响了我们的生活质量。如何将人们从繁重的家务活中解放出来，成为了我们不得不去思考的问题。这样一来，家政服务这一概念映入我们的眼帘，家政服务的需求也越来越高。为了使家政服务更加方便快捷，因此，家政服务平台的开发与研究是很有必要。\r\n	</p>\r\n</p>', '2019-04-29 16:44:52');
INSERT INTO `dx` VALUES (2, '系统公告', '<p>\r\n	欢迎大家登陆我站，我站主要是为广大朋友精心制作的一个系统，希望大家能够在我站获得一个好心情，谢谢！\r\n</p>\r\n<p>\r\n	自强不息，海纳百川，努力学习！2214\r\n</p>', '2017-04-02 21:00:56');

-- ----------------------------
-- Table structure for fuwuleixingxinxi
-- ----------------------------
DROP TABLE IF EXISTS `fuwuleixingxinxi`;
CREATE TABLE `fuwuleixingxinxi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fuwuleixing` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = gb2312 COLLATE = gb2312_chinese_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of fuwuleixingxinxi
-- ----------------------------
INSERT INTO `fuwuleixingxinxi` VALUES (8, '月嫂', '2019-02-24 00:37:30');
INSERT INTO `fuwuleixingxinxi` VALUES (9, '整理厨房', '2019-02-24 00:51:44');
INSERT INTO `fuwuleixingxinxi` VALUES (10, '收拾客厅', '2019-03-04 15:56:54');
INSERT INTO `fuwuleixingxinxi` VALUES (11, '安装空调', '2019-03-21 09:29:59');

-- ----------------------------
-- Table structure for jiazhengfuwufabu
-- ----------------------------
DROP TABLE IF EXISTS `jiazhengfuwufabu`;
CREATE TABLE `jiazhengfuwufabu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dingdanhao` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `lianxiren` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `lianxirenshouji` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `fuwuleixing` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `shijian` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `neirong` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `xinshui` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `faburen` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `issh` varchar(10) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT '否',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = gb2312 COLLATE = gb2312_chinese_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of jiazhengfuwufabu
-- ----------------------------
INSERT INTO `jiazhengfuwufabu` VALUES (22, '15525422456349', '5', '18888888888', '安装空调', '6', '66666666666', '22', '1', '是', '2019-03-14 13:44:17');
INSERT INTO `jiazhengfuwufabu` VALUES (23, '15535698196819', '155555555552', '15555555555', '安装空调', '2', '2', '2', '1', '申请取消订单', '2019-03-26 11:10:30');
INSERT INTO `jiazhengfuwufabu` VALUES (24, '15562447320365', '张先生', '18865758888', '安装空调', '2019-6-7', '货已送到，等安装', '200', '3', '是', '2019-04-26 10:13:20');
INSERT INTO `jiazhengfuwufabu` VALUES (25, '15570463262707', 'Q', '13565857859', '整理厨房', '2019-5-30', '来过客人，帮收拾一下', '50', '1', '否', '2019-05-05 16:53:02');

-- ----------------------------
-- Table structure for jiazhengrenyuan
-- ----------------------------
DROP TABLE IF EXISTS `jiazhengrenyuan`;
CREATE TABLE `jiazhengrenyuan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jiazhengbianhao` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `mima` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `jiazhengxingming` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `jiazhengxingbie` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `fuwuleixing` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `chushengriqi` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `jiazhengshouji` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `zhaopian` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `jiazhengjianjie` text CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL,
  `issh` varchar(10) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT '否',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = gb2312 COLLATE = gb2312_chinese_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of jiazhengrenyuan
-- ----------------------------
INSERT INTO `jiazhengrenyuan` VALUES (2, '001', '001', '吴永国', '男', '安装空调', '1995-1-28', '13159863241', 'uploadfile/3.jpg', '', '是', '2019-02-23 22:38:25');
INSERT INTO `jiazhengrenyuan` VALUES (7, '002', '002', '张立风', '男', '安装空调', '1996-02-24', '13645654654', 'uploadfile/2.jpg', '', '是', '2019-02-24 00:38:26');
INSERT INTO `jiazhengrenyuan` VALUES (8, '003', '003', '孙莉', '女', '收拾客厅', '1994-02-24', '13645654654', 'uploadfile/1.jpg', '', '是', '2019-02-24 00:50:53');
INSERT INTO `jiazhengrenyuan` VALUES (11, '6', '6', '6', '女', '安装空调', '2019-02-26', '16666666666', 'uploadfile/null.jpg', '', '否', '2019-03-07 14:33:51');

-- ----------------------------
-- Table structure for jiedan
-- ----------------------------
DROP TABLE IF EXISTS `jiedan`;
CREATE TABLE `jiedan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dingdanhao` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `lianxiren` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `lianxirenshouji` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `fuwuleixing` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `shijian` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `neirong` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `xinshui` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `faburen` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `jiedanren` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `zhuangtai` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = gb2312 COLLATE = gb2312_chinese_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of jiedan
-- ----------------------------
INSERT INTO `jiedan` VALUES (3, '15562447320365', '张先生', '18865758888', '安装空调', '2019-6-7', '货已送到，等安装', '200', '3', '001', '已接单', '2019-04-26 10:54:40');
INSERT INTO `jiedan` VALUES (4, '15535698196819', '155555555552', '15555555555', '安装空调', '2', '2', '2', '1', '001', '申请取消订单', '2019-04-26 10:54:55');
INSERT INTO `jiedan` VALUES (5, '15525422456349', '5', '18888888888', '安装空调', '6', '66666666666', '22', '1', '001', '已接单', '2019-05-05 16:32:15');

-- ----------------------------
-- Table structure for liuyanban
-- ----------------------------
DROP TABLE IF EXISTS `liuyanban`;
CREATE TABLE `liuyanban`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zhanghao` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `zhaopian` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `xingming` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `liuyan` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `huifu` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = gb2312 COLLATE = gb2312_chinese_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of liuyanban
-- ----------------------------
INSERT INTO `liuyanban` VALUES (5, '1', 'uploadfile/15519367444kda.jpg', '李龙', '9686', '2019-03-14 09:39:14', '明天安排');
INSERT INTO `liuyanban` VALUES (6, '001', 'uploadfile/3.jpg', '吴永国', '252525', '2019-03-14 10:14:17', '嗯好的先生');
INSERT INTO `liuyanban` VALUES (7, '001', 'uploadfile/3.jpg', '吴永国', '22222', '2019-03-14 10:14:30', NULL);

-- ----------------------------
-- Table structure for xinwentongzhi
-- ----------------------------
DROP TABLE IF EXISTS `xinwentongzhi`;
CREATE TABLE `xinwentongzhi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `biaoti` varchar(500) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `leibie` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `neirong` text CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL,
  `tianjiaren` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `shouyetupian` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `dianjilv` int(11) NULL DEFAULT 1,
  `zhaiyao` varchar(800) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 34 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of xinwentongzhi
-- ----------------------------
INSERT INTO `xinwentongzhi` VALUES (18, '5G换手机不必换号 2020年有望降至千元左右', '站内新闻', '<p style=\"font-size:16px;color:#333333;text-align:justify;font-family:arial;background-color:#FFFFFF;\">\r\n	<span class=\"bjh-p\"> 作为今年的一大主流，5G手机让手机厂商们大出风头。据《中国企业家》报道，中国联通研究院院长张云勇表示，虽然5G资费还没有确定，但肯定不会比4G贵。而且享受5G服务只需要更换5G手机，手机卡和号码不用更换。<span class=\"bjh-br\"></span></span> \r\n</p>\r\n<p style=\"font-size:16px;color:#333333;text-align:justify;font-family:arial;background-color:#FFFFFF;\">\r\n	<span class=\"bjh-p\"> 相较于4G网络，5G网络不但速度更快，而且更智能。</span> \r\n</p>\r\n<p style=\"font-size:16px;color:#333333;text-align:justify;font-family:arial;background-color:#FFFFFF;\">\r\n	<span class=\"bjh-p\"> 今年两会期间，工信部部长苗圩已明确表示 2019 年移动网络流量平均资费将再降低20%。根据此前移动预测，初期阶段，5G手机价格会在 8000 元以上，但 2020 年有望降至千元左右。</span> \r\n</p>\r\n<p style=\"font-size:16px;color:#333333;text-align:justify;font-family:arial;background-color:#FFFFFF;\">\r\n	<span class=\"bjh-p\">目前，手机厂商们都蠢蠢欲动，等待“换机潮”。今年以来，包括小米、中兴、华为在内的三款国产5G手机相继问世。</span> \r\n</p>\r\n<p style=\"font-size:16px;color:#333333;text-align:justify;font-family:arial;background-color:#FFFFFF;\">\r\n	<span class=\"bjh-p\"> 今年初，国家已提出将在若干个城市发放5G临时牌照，三大运营商的试商用也在如火如荼地进行中。按照目前的进度，国内最快将在在 2022 年实现商用。</span> \r\n</p>', 'admin', '2019-02-23 23:19:10', 'uploadfile/1552376736km3e.jpg', 11, NULL);
INSERT INTO `xinwentongzhi` VALUES (21, '行业资讯', '行业资讯', '行业资讯行业资讯行业资讯行业资讯行业资讯', 'hsg', '2019-02-23 23:19:26', '', 2, NULL);
INSERT INTO `xinwentongzhi` VALUES (22, '行业资讯行业资讯', '行业资讯', '行业资讯行业资讯行业资讯行业资讯行业资讯行业资讯行业资讯行业资讯行业资讯行业资讯行业资讯行业资讯行业资讯行业资讯行业资讯行业资讯行业资讯行业资讯行业资讯行业资讯行业资讯行业资讯行业资讯', 'hsg', '2019-02-23 23:19:30', '', 1, NULL);
INSERT INTO `xinwentongzhi` VALUES (23, '行业资讯行业资讯', '行业资讯', '行业资讯行业资讯行业资讯行业资讯行业资讯行业资讯行业资讯行业资讯行业资讯行业资讯行业资讯行业资讯行业资讯行业资讯', 'hsg', '2019-02-23 23:19:35', '', 3, NULL);
INSERT INTO `xinwentongzhi` VALUES (24, '变幻图', '变幻图', '', 'hsg', '2019-02-23 23:25:23', 'uploadfile/shouyetupian5.jpg', 1, NULL);
INSERT INTO `xinwentongzhi` VALUES (25, '变幻图2', '变幻图', '', 'hsg', '2019-02-23 23:25:35', 'uploadfile/shouyetupian4.jpg', 1, NULL);
INSERT INTO `xinwentongzhi` VALUES (26, '变幻图变幻图变幻图', '变幻图', '变幻图变幻图变幻图', 'hsg', '2019-02-23 23:26:08', 'uploadfile/shouyetupian2.jpg', 1, NULL);
INSERT INTO `xinwentongzhi` VALUES (27, '变幻图3', '变幻图', '', 'hsg', '2019-02-23 23:26:18', 'uploadfile/shouyetupian3.jpg', 1, NULL);
INSERT INTO `xinwentongzhi` VALUES (28, '变幻图变幻图变幻图', '变幻图', '', 'hsg', '2019-02-23 23:26:29', 'uploadfile/shouyetupian1.jpg', 1, NULL);
INSERT INTO `xinwentongzhi` VALUES (30, '她退休手续已办却申请再扶贫:群众不脱贫我不退休', '站内新闻', '<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	年过半百，她主动请缨，战斗在脱贫攻坚第一线；退休手续已办完，她却向组织申请，继续驻村扶贫。云南省石林县纪委驻县人民法院原纪检组组长段惠仙――\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	“群众不脱贫，我就不‘退休’”\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	“我立下过‘军令状’，群众不脱贫，我就不‘退休’。”3月5日，电话那头的段惠仙笑声爽朗，说自己正在村里。\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	当年，云南省石林县纪委驻县人民法院原纪检组组长段惠仙主动向院党组请缨：“我在乡镇工作过，熟悉农村工作，更想在退休前发挥余热再为老百姓做些实事，就让我去驻村扶贫吧。”就这样，她从反腐前沿冲到了脱贫攻坚第一线，担任西街口镇芭茅村驻村第一书记、扶贫工作队队长。\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	驻村伊始，她就给自己立下了“军令状”――“群众不脱贫，我就不‘退休’”。\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	去年12月底，段惠仙的退休手续已办完了。“但是我还想继续为村里脱贫做些工作，村里人也挽留我，我就主动向组织提出了继续驻村的申请。”段惠仙说，现在，县委组织部已发文，再次任命她为芭茅村驻村第一书记。\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	<span> “住下来才能和村民打成一片”</span>\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	芭茅村是云南省石林县法院的挂钩帮扶村。离县城40多公里，因道路崎岖，从县城开车要一个多小时才能到。有人说，去一趟村里的时间，都够开到省城了。\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	初到芭茅村，段惠仙第一印象是荒凉和脏乱。该村地处石质荒漠化高寒山区，水土流失严重，植被稀疏，村委会办公场所位于村外的荒山坡下，遍地泥泞，连厕所都没有。\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	“既来之，则安之。”段惠仙在村委会住下来，在村里扎了根。三年来，除了隔几天回家洗个澡或到县城办事，村里的办公室就成了她的住所，她也成了名副其实的“住村”书记。白天到田间地头，晚上入户走访“围炉夜谈”，处处可见她忙碌的身影。\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	“村民经常在地里忙活，什么时候在家没个准点。脱贫是硬任务，有时限要求，不能把时间和精力浪费在来回奔波的路上。只有住下来才方便家访，才能和村民打成一片，深入了解他们的所思所盼，扶贫才会更加精准。”段惠仙说。\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	“她来的时候，村委会还没建起厕所，晚上她一个人住在这里，前不挨村后不着店，黑灯瞎火的，一个女同志，也够难为她了。”谈起段惠仙的“住村”经历，芭茅村委会主任毕宏光说，“刚开始我们都觉得奇怪，她为什么不待在城里，非要到农村自讨苦吃？后来，发现她是真心为群众做事，真想带着我们脱贫。她这样舍小家、顾大家，我们村干部工作更积极了。”\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	<span> “人勤了，脱贫的内生动力就出来了”</span>\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	贫穷和脏乱总是如影随形。芭茅村委会下辖芭茅和路花两个村小组，多年来污水四溢、柴草垃圾等随意堆放，有的贫困户家中，更是垃圾成堆、乱成一团。\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	段惠仙认为，首先要改变村里的脏乱现象。村干部想不通：“别的村都在忙着上扶贫项目，她怎么忙着抓环境卫生这种小事？”\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	“村内环境整洁了，人的精气神就出来了。能把家收拾得干净整齐的人，肯定是勤快人。人勤了，脱贫的内生动力就出来了。”段惠仙解释说。\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	她每到一家都要叮嘱搞好环境卫生，有时甚至动手帮忙打扫。路花村小组的贫困户张保寿，曾经是出了名的“懒汉”，每天上午睡到10点多不起床，庭院满地垃圾、一片狼藉，段惠仙就盯着他，早上到他家门口喊他起床，帮他打扫卫生、收拾杂物。“她比我妈还管得严，她是真心为我好。”张保寿由羞愧变感激、由懒惰变勤快，不但勤于搞环境卫生、积极抓生产，还帮着做其他贫困户的思想工作，动员他们一起改掉懒散的毛病。\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	在段惠仙的大力协调和上级部门支持下，芭茅村全力推进“七改三清”工作，硬化村内外道路，新建卫生室和公厕，建立卫生保洁长效机制……一系列措施使村容村貌发生了显著变化。\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	人居环境变好了，村风民风家风建设也不能放松。段惠仙沿袭当纪检组长时狠抓作风建设的思路，组织开展先进家庭、好媳妇、好婆婆、好子女评选活动，调动村民参与，选树身边典型，倡导良好家风村风民风，村里人的精神面貌焕然一新。\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	<span> “扶贫工作也要抓住‘关键少数’”</span>\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	芭茅村共有贫困户32户97人，是全县贫困人口最多的村。段惠仙的任务，不但要让新识别的贫困户如期脱贫，还要摘掉芭茅村省级贫困村的帽子。\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	“压力再大，也不能退缩。”经过不断总结思考，她摸索出了自己的扶贫之道：“我们做纪检工作，讲究紧盯关键少数、关键环节，做到精准监督。搞扶贫也一样，要抓住党员和贫困户这两个关键少数，把党员的先锋模范作用发挥出来、把贫困户的脱贫信心激发出来，紧盯贫困户识别、项目安排、资金使用、帮扶措施等关键环节，做到精准扶贫……”\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	她带领村党总支认真开展“三会一课”，组织主题党日等活动，帮助被列为“软弱涣散”党组织的路花村小组党支部理清工作思路，与党员逐个谈心谈话，扭转庸懒散的风气，调动党员干部参与各项工作的积极性。在段惠仙的带领下，芭茅村党建工作亮点频出，2017年被评为县级党建示范点。\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	她住在村里，更把群众放在心上，无论哪个村民有困难她都热心帮助解决，大家都亲切地称她为“段大姐”。\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	芭茅村小组贫困户卢吉才说：“我家孩子大学毕业很长时间没找到工作，孩子上学借的钱也没还清，是段大姐帮忙解决了就业问题，我也去了一块心病。”路花村小组贫困户张建伟说：“我们搞人参果种植，遇到什么技术问题，她就帮忙联系科技人员；农副产品不好卖，她帮着找销路；谁伤了、病了，她又帮着办理医疗报销手续，她就是我们的好大姐。”\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	扶贫既要注重当下，更要着眼长远。让段惠仙欣慰的是，芭茅村建起了人参果和大蒜交易市场。“这里适合种人参果和大蒜，是群众脱贫致富的希望。交易市场建好了，就解决了群众的后顾之忧。”\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	2018年，西街口镇的“人参果节”在芭茅村举办，新建的人参果交易市场共交易人参果约5000吨，均价每公斤6元，增加农民收入约300万元。\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	晴天一身灰、雨天一身泥，走村入户、四处奔忙……段惠仙说，在芭茅村工作虽然辛苦，但却感到充实而快乐。\r\n</p>\r\n<p style=\"color:#404040;font-family:&quot;font-size:18px;\">\r\n	目前，芭茅村的脱贫工作已经进入审核验收阶段，但段惠仙仍一如既往奔波在脱贫攻坚路上。（李海林 陈云）\r\n</p>', 'admin', '2019-03-12 15:57:04', 'uploadfile/155237741832c4.png', 32, NULL);
INSERT INTO `xinwentongzhi` VALUES (33, '3', '行业资讯', '3', 'admin', '2019-03-12 17:11:24', '', 2, NULL);

-- ----------------------------
-- Table structure for yonghuzhuce
-- ----------------------------
DROP TABLE IF EXISTS `yonghuzhuce`;
CREATE TABLE `yonghuzhuce`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zhanghao` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `mima` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `xingming` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `xingbie` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `diqu` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `Email` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `zhaopian` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `issh` varchar(10) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT '否',
  `shouji` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 30 CHARACTER SET = gb2312 COLLATE = gb2312_chinese_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of yonghuzhuce
-- ----------------------------
INSERT INTO `yonghuzhuce` VALUES (27, '1', '1', '李龙', '男', '湖北', 'lilong@126.com', 'uploadfile/15519367444kda.jpg', '2018-05-23 07:46:56', '是', '18865656565');
INSERT INTO `yonghuzhuce` VALUES (29, '3', '3', '邱厚凯', '男', '湖北', 'qiuhoukai@163.com', 'uploadfile/null.jpg', '2019-03-07 11:37:10', '是', NULL);

-- ----------------------------
-- Table structure for youqinglianjie
-- ----------------------------
DROP TABLE IF EXISTS `youqinglianjie`;
CREATE TABLE `youqinglianjie`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wangzhanmingcheng` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `wangzhi` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `logo` varchar(255) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = gb2312 COLLATE = gb2312_chinese_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of youqinglianjie
-- ----------------------------
INSERT INTO `youqinglianjie` VALUES (16, '百度', 'http://www.baidu.com', '2017-04-02 21:00:56', 'uploadfile/baidu.gif');
INSERT INTO `youqinglianjie` VALUES (17, '谷歌', 'http://www.google.cn', '2017-04-02 21:00:56', 'uploadfile/google.png');
INSERT INTO `youqinglianjie` VALUES (18, '新浪', 'http://www.sina.com', '2017-04-02 21:00:56', 'uploadfile/sina.gif');
INSERT INTO `youqinglianjie` VALUES (19, 'QQ', 'http://www.qq.com', '2017-04-02 21:00:56', 'uploadfile/qq.jpg');
INSERT INTO `youqinglianjie` VALUES (20, '网易', 'http://www.163.com', '2017-04-02 21:00:56', 'uploadfile/163.png');

SET FOREIGN_KEY_CHECKS = 1;
