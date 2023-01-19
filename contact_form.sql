/*
 Navicat Premium Data Transfer

 Source Server         : DigitalOcean
 Source Server Type    : MySQL
 Source Server Version : 80028 (8.0.28)
 Source Host           : db-mysql-sgp1-52533-do-user-9094142-0.b.db.ondigitalocean.com:25060
 Source Schema         : para_juden

 Target Server Type    : MySQL
 Target Server Version : 80028 (8.0.28)
 File Encoding         : 65001

 Date: 20/10/2022 14:18:10
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for contact_form
-- ----------------------------
DROP TABLE IF EXISTS `contact_form`;
CREATE TABLE "contact_form" (
  "contact_id" int unsigned NOT NULL AUTO_INCREMENT,
  "contact_name" varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  "contact_phone_number" varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  "contact_email" varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  "contact_subject" varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  "contact_message" varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  "property_id" int NOT NULL,
  PRIMARY KEY ("contact_id")
);

SET FOREIGN_KEY_CHECKS = 1;
