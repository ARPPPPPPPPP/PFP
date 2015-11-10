SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for pfp_user
-- ----------------------------
DROP TABLE IF EXISTS `pfp_user`;
CREATE TABLE `pfp_user` (
  `userId` bigint(20) NOT NULL AUTO_INCREMENT,
  `userAccount` varchar(255) NOT NULL DEFAULT '',
  `userPassword` varchar(255) NOT NULL DEFAULT '',
  `userMail` varchar(255) DEFAULT '',
  `userDescription` varchar(255) DEFAULT '',
  `userCreateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for pfp_homePicture
-- ----------------------------
DROP TABLE IF EXISTS `pfp_homePicture`;
CREATE TABLE `pfp_homePicture` (
  `homePictureId` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `homePictureName` varchar(255) NOT NULL DEFAULT '',
  `homePictureReleaseDate` datetime DEFAULT NULL,
  `homePictureContentURL` varchar(255) NOT NULL DEFAULT '',
  `homePictureItem` boolean DEFAULT NULL,
  PRIMARY KEY (`homePictureId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for pfp_breakingNews
-- ----------------------------
DROP TABLE IF EXISTS `pfp_breakingNews`;
CREATE TABLE `pfp_breakingNews` (
  `breakingNewsId` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `breakingNewsName` varchar(255) NOT NULL DEFAULT '',
  `breakingNewsType` varchar(255) NOT NULL DEFAULT '',
  `breakingNewsRelease` varchar(255) NOT NULL DEFAULT '',
  `breakingNewsReleaseDate` datetime DEFAULT NULL,
  `breakingNewsContentURL` varchar(255) NOT NULL DEFAULT '',
  `breakingNewsMainContent` varchar(255) NOT NULL DEFAULT '',
  `breakingNewsURL` varchar(255) NOT NULL DEFAULT '',
  `breakingNewsPageView` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`breakingNewsId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for pfp_download
-- ----------------------------
DROP TABLE IF EXISTS `pfp_download`;
CREATE TABLE `pfp_download` (
  `downloadId` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `downloadTitle` varchar(255) NOT NULL DEFAULT '',
  `downloadReleaseId` bigint(20) unsigned NOT NULL default '0',
  `downloadReleaseDate` datetime DEFAULT NULL,
  `downloadURL` varchar(255) NOT NULL DEFAULT '',
  `downloadPageView` bigint(20) NOT NULL DEFAULT '0',
  `fileName` varchar(255) NOT NULL DEFAULT '',
  `downloadTopItem` boolean DEFAULT NULL,
  PRIMARY KEY (`downloadId`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for pfp_signUp
-- ----------------------------
DROP TABLE IF EXISTS `pfp_signUp`;
CREATE TABLE `pfp_signUp` (
  `signUpId` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `signUpProject` varchar(255) NOT NULL DEFAULT '',
  `signUpArea` varchar(255) NOT NULL DEFAULT '',
  `signUpName` varchar(255) NOT NULL DEFAULT '',
  `signUpSex` varchar(16) NOT NULL DEFAULT '',
  `signUpBirthday` varchar(32) NOT NULL DEFAULT '',
  `signUpSchool` varchar(255) NOT NULL DEFAULT '',
  `signUpMajor` varchar(255) NOT NULL DEFAULT '',
  `signUpGradeYear` varchar(255) NOT NULL DEFAULT '',
  `signUpCellPhone` varchar(255) NOT NULL DEFAULT '',
  `signUpMail` varchar(255) NOT NULL DEFAULT '',
  `signUpWeiXing` varchar(255) NOT NULL DEFAULT '',
  `signUpReferee` varchar(255) NOT NULL DEFAULT '',
  `signUpIDCard` varchar(255) NOT NULL DEFAULT '',
  `signUpFamilyContact` varchar(255) NOT NULL DEFAULT '',
  `signUpExperience` varchar(512) NOT NULL DEFAULT '',
  `signUpAward` varchar(512) NOT NULL DEFAULT '',
  `signUpTime` datetime DEFAULT NULL,
  `signUpHandle` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`signUpId`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Table structure for pfp_systemSetting
-- ----------------------------
DROP TABLE IF EXISTS `pfp_systemSetting`;
CREATE TABLE `pfp_systemSetting` (
  `systemSettingId` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `systemSettingName` varchar(255) NOT NULL DEFAULT '',
  `systemSettingContent` varchar(1024) NOT NULL DEFAULT '',
  PRIMARY KEY (`systemSettingId`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;