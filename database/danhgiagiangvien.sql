/*
Navicat MySQL Data Transfer

Source Server         : hoc_mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : danhgiagiangvien

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-05-23 18:31:25
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(1) NOT NULL DEFAULT '10',
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `batch` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `username` (`username`) USING BTREE,
  UNIQUE KEY `email` (`email`) USING BTREE,
  UNIQUE KEY `password_reset_token` (`password_reset_token`) USING BTREE,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('2', 'admin', 'iuEf0g12cB7yptA6BjaywDi7YgeeZf_c', '$2y$13$SZXQQjXbSCI3g03cZ5ynkOxvUI9WdeElrbIenaB/JVutpcPHq1vpG', null, 'khang@gmail.com', '0123456789', 'Hà Nội', 'Nguyễn Nhật Khang', '1', 'giphy-downsized.gif', '65');
INSERT INTO `admin` VALUES ('3', 'admin1', 'iuEf0g12cB7yptA6BjaywDi7YgeeZf_c', '$2y$13$SZXQQjXbSCI3g03cZ5ynkOxvUI9WdeElrbIenaB/JVutpcPHq1vpG', null, '', '', '', '', '1', null, '');

-- ----------------------------
-- Table structure for `attendance`
-- ----------------------------
DROP TABLE IF EXISTS `attendance`;
CREATE TABLE `attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentID` int(11) NOT NULL,
  `classID` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `studentID` (`studentID`),
  KEY `classID` (`classID`),
  CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `user` (`id`),
  CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`classID`) REFERENCES `classes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of attendance
-- ----------------------------
INSERT INTO `attendance` VALUES ('1', '4', '2', 'COMP33 1');
INSERT INTO `attendance` VALUES ('2', '4', '3', '');
INSERT INTO `attendance` VALUES ('3', '3', '2', '');
INSERT INTO `attendance` VALUES ('4', '2', '2', '');

-- ----------------------------
-- Table structure for `classes`
-- ----------------------------
DROP TABLE IF EXISTS `classes`;
CREATE TABLE `classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scheduleID` int(11) NOT NULL,
  `teacherID` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `scheduleID` (`scheduleID`),
  KEY `teacherID` (`teacherID`),
  CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`scheduleID`) REFERENCES `schedule` (`id`),
  CONSTRAINT `classes_ibfk_2` FOREIGN KEY (`teacherID`) REFERENCES `teacher` (`teacherID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of classes
-- ----------------------------
INSERT INTO `classes` VALUES ('1', '1', '2', 'COMP 44');
INSERT INTO `classes` VALUES ('2', '2', '2', 'COMP 44');
INSERT INTO `classes` VALUES ('3', '2', '1', 'COMP 44');
INSERT INTO `classes` VALUES ('4', '3', '6', 'COMP 44');

-- ----------------------------
-- Table structure for `department`
-- ----------------------------
DROP TABLE IF EXISTS `department`;
CREATE TABLE `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `studentID` (`department`(255))
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of department
-- ----------------------------
INSERT INTO `department` VALUES ('1', 'Ngữ văn');
INSERT INTO `department` VALUES ('2', 'CNTT');
INSERT INTO `department` VALUES ('3', 'Toán');
INSERT INTO `department` VALUES ('4', 'Tiếng anh');
INSERT INTO `department` VALUES ('5', 'Âm nhạc');
INSERT INTO `department` VALUES ('6', 'Triết học');

-- ----------------------------
-- Table structure for `evalutionform`
-- ----------------------------
DROP TABLE IF EXISTS `evalutionform`;
CREATE TABLE `evalutionform` (
  `attendanceID` int(11) NOT NULL,
  `score` tinyint(3) NOT NULL,
  `date` date NOT NULL,
  `comment` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`attendanceID`),
  CONSTRAINT `evalutionform_ibfk_1` FOREIGN KEY (`attendanceID`) REFERENCES `attendance` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of evalutionform
-- ----------------------------
INSERT INTO `evalutionform` VALUES ('1', '100', '2019-05-19', '	');
INSERT INTO `evalutionform` VALUES ('4', '100', '0000-00-00', null);

-- ----------------------------
-- Table structure for `major`
-- ----------------------------
DROP TABLE IF EXISTS `major`;
CREATE TABLE `major` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `major` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of major
-- ----------------------------
INSERT INTO `major` VALUES ('1', 'Tin');
INSERT INTO `major` VALUES ('2', 'Toan');
INSERT INTO `major` VALUES ('3', 'Van');
INSERT INTO `major` VALUES ('4', 'Su');

-- ----------------------------
-- Table structure for `migration`
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1555162386');
INSERT INTO `migration` VALUES ('m130524_201442_init', '1555162393');
INSERT INTO `migration` VALUES ('m190413_134049_subjects', '1555166201');
INSERT INTO `migration` VALUES ('m190413_141922_teacher', '1555166201');
INSERT INTO `migration` VALUES ('m190413_142005_year', '1555166202');

-- ----------------------------
-- Table structure for `result`
-- ----------------------------
DROP TABLE IF EXISTS `result`;
CREATE TABLE `result` (
  `classID` int(11) NOT NULL,
  `score` tinyint(3) NOT NULL,
  PRIMARY KEY (`classID`),
  CONSTRAINT `result_ibfk_1` FOREIGN KEY (`classID`) REFERENCES `classes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of result
-- ----------------------------

-- ----------------------------
-- Table structure for `schedule`
-- ----------------------------
DROP TABLE IF EXISTS `schedule`;
CREATE TABLE `schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `semesterID` int(11) NOT NULL,
  `offercode` varchar(11) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `offercode` (`offercode`),
  KEY `semesterID` (`semesterID`),
  CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`offercode`) REFERENCES `subjects` (`offercode`),
  CONSTRAINT `schedule_ibfk_2` FOREIGN KEY (`semesterID`) REFERENCES `semester` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of schedule
-- ----------------------------
INSERT INTO `schedule` VALUES ('1', '5', 'COMP 313');
INSERT INTO `schedule` VALUES ('2', '5', 'MATH 264');
INSERT INTO `schedule` VALUES ('3', '5', 'PHIL 003');
INSERT INTO `schedule` VALUES ('4', '5', 'PHIL 416');
INSERT INTO `schedule` VALUES ('5', '5', 'PHIL 417');
INSERT INTO `schedule` VALUES ('6', '1', 'COMP 313');

-- ----------------------------
-- Table structure for `semester`
-- ----------------------------
DROP TABLE IF EXISTS `semester`;
CREATE TABLE `semester` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of semester
-- ----------------------------
INSERT INTO `semester` VALUES ('1', 'Kỳ 1 năm 2012');
INSERT INTO `semester` VALUES ('2', 'Kỳ hè năm 2018');
INSERT INTO `semester` VALUES ('3', 'Kỳ  2 năm 2018');
INSERT INTO `semester` VALUES ('4', 'Kỳ 1 năm 2019');
INSERT INTO `semester` VALUES ('5', 'Kỳ hè năm 2019');

-- ----------------------------
-- Table structure for `studentmajors`
-- ----------------------------
DROP TABLE IF EXISTS `studentmajors`;
CREATE TABLE `studentmajors` (
  `studentID` int(11) NOT NULL,
  `departmentID` int(11) NOT NULL,
  `majorID` int(11) NOT NULL,
  KEY `studentID` (`studentID`),
  KEY `departmentID` (`departmentID`),
  KEY `majorID` (`majorID`),
  CONSTRAINT `studentmajors_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `user` (`id`),
  CONSTRAINT `studentmajors_ibfk_2` FOREIGN KEY (`departmentID`) REFERENCES `department` (`id`),
  CONSTRAINT `studentmajors_ibfk_3` FOREIGN KEY (`majorID`) REFERENCES `major` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of studentmajors
-- ----------------------------
INSERT INTO `studentmajors` VALUES ('1', '1', '1');
INSERT INTO `studentmajors` VALUES ('1', '2', '2');

-- ----------------------------
-- Table structure for `subjects`
-- ----------------------------
DROP TABLE IF EXISTS `subjects`;
CREATE TABLE `subjects` (
  `offercode` varchar(11) CHARACTER SET utf8 NOT NULL,
  `subjectname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) DEFAULT '10',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`offercode`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of subjects
-- ----------------------------
INSERT INTO `subjects` VALUES ('COMP 313', 'Xử lý ảnh', '1', '');
INSERT INTO `subjects` VALUES ('COMP 325	', 'Bài tập lớn môn học', '1', '');
INSERT INTO `subjects` VALUES ('MATH 264', 'Phương pháp tính và tối ưu', null, '');
INSERT INTO `subjects` VALUES ('MUSI 109', 'Âm nhạc', '10', null);
INSERT INTO `subjects` VALUES ('PHIL 003', 'Kiểm tra đánh giá trong giáo dục', '10', null);
INSERT INTO `subjects` VALUES ('PHIL 416', 'Sử thi Việt Nam', '10', null);
INSERT INTO `subjects` VALUES ('PHIL 417', 'P.triển chương trình ngữ văn nhà trường', '10', null);
INSERT INTO `subjects` VALUES ('POLI 202', 'Tư tưởng Hồ Chí Minh', null, '');

-- ----------------------------
-- Table structure for `teacher`
-- ----------------------------
DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `teacherID` int(9) NOT NULL AUTO_INCREMENT,
  `teacherName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `departmentID` int(11) NOT NULL,
  `status` smallint(1) NOT NULL DEFAULT '10',
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`teacherID`),
  KEY `departmentID` (`departmentID`),
  CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`departmentID`) REFERENCES `department` (`id`),
  CONSTRAINT `teacher_ibfk_2` FOREIGN KEY (`departmentID`) REFERENCES `department` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of teacher
-- ----------------------------
INSERT INTO `teacher` VALUES ('1', 'Bùi Đình Thọ', '6', '0', '');
INSERT INTO `teacher` VALUES ('2', 'Vũ Thái Giang', '2', '1', '');
INSERT INTO `teacher` VALUES ('3', 'Nguyễn Thị Liên', '2', '1', '');
INSERT INTO `teacher` VALUES ('4', 'Đỗ Thùy Linh', '4', '1', '');
INSERT INTO `teacher` VALUES ('5', 'Đặng Thị Thu Hiền', '1', '1', '');
INSERT INTO `teacher` VALUES ('6', 'Phan Thị Lê Dung', '6', '1', '');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(1) NOT NULL DEFAULT '10',
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `batch` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `username` (`username`) USING BTREE,
  UNIQUE KEY `email` (`email`) USING BTREE,
  UNIQUE KEY `password_reset_token` (`password_reset_token`) USING BTREE,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'lolo', 'iuEf0g12cB7yptA6BjaywDi7YgeeZf_c', '$2y$13$SZXQQjXbSCI3g03cZ5ynkOxvUI9WdeElrbIenaB/JVutpcPHq1vpG', null, 'quynhanh@gmail.com', '0123456789', 'Hà Nội', 'Hoàng Quỳnh Anh', '1', 'giphy-downsized.gif', '64');
INSERT INTO `user` VALUES ('2', '645601003', 'iuEf0g12cB7yptA6BjaywDi7YgeeZf_c', '$2y$13$SZXQQjXbSCI3g03cZ5ynkOxvUI9WdeElrbIenaB/JVutpcPHq1vpG', null, 'khang@gmail.com', '0123456789', 'Hà Nội', 'Nguyễn Nhật Khang', '1', 'giphy-downsized.gif', '65');
INSERT INTO `user` VALUES ('3', '645601009', 'iuEf0g12cB7yptA6BjaywDi7YgeeZf_c', '$2y$13$SZXQQjXbSCI3g03cZ5ynkOxvUI9WdeElrbIenaB/JVutpcPHq1vpG', null, 'myclover@gmail.com', '12123', '123123', 'Vũ Ánh Dương', '1', '', '64');
INSERT INTO `user` VALUES ('4', '645601001', 'iuEf0g12cB7yptA6BjaywDi7YgeeZf_c', '$2y$13$SZXQQjXbSCI3g03cZ5ynkOxvUI9WdeElrbIenaB/JVutpcPHq1vpG', null, '', '', '', '', '1', null, '');
