-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_wup
CREATE DATABASE IF NOT EXISTS `db_wup` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_wup`;

-- Dumping structure for table db_wup.messagein
CREATE TABLE IF NOT EXISTS `messagein` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `SendTime` datetime DEFAULT NULL,
  `ReceiveTime` datetime DEFAULT NULL,
  `MessageFrom` varchar(80) DEFAULT NULL,
  `MessageTo` varchar(80) DEFAULT NULL,
  `SMSC` varchar(80) DEFAULT NULL,
  `MessageText` text,
  `MessageType` varchar(80) DEFAULT NULL,
  `MessageParts` int(11) DEFAULT NULL,
  `MessagePDU` text,
  `Gateway` varchar(80) DEFAULT NULL,
  `UserId` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_wup.messagein: ~0 rows (approximately)
/*!40000 ALTER TABLE `messagein` DISABLE KEYS */;
/*!40000 ALTER TABLE `messagein` ENABLE KEYS */;

-- Dumping structure for table db_wup.messagelog
CREATE TABLE IF NOT EXISTS `messagelog` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `SendTime` datetime DEFAULT NULL,
  `ReceiveTime` datetime DEFAULT NULL,
  `StatusCode` int(11) DEFAULT NULL,
  `StatusText` varchar(80) DEFAULT NULL,
  `MessageTo` varchar(80) DEFAULT NULL,
  `MessageFrom` varchar(80) DEFAULT NULL,
  `MessageText` text,
  `MessageType` varchar(80) DEFAULT NULL,
  `MessageId` varchar(80) DEFAULT NULL,
  `ErrorCode` varchar(80) DEFAULT NULL,
  `ErrorText` text,
  `Gateway` varchar(80) DEFAULT NULL,
  `MessageParts` int(11) DEFAULT NULL,
  `MessagePDU` text,
  `Connector` varchar(80) DEFAULT NULL,
  `UserId` varchar(80) DEFAULT NULL,
  `UserInfo` text,
  PRIMARY KEY (`Id`),
  KEY `IDX_MessageId` (`MessageId`,`SendTime`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_wup.messagelog: ~42 rows (approximately)
/*!40000 ALTER TABLE `messagelog` DISABLE KEYS */;
INSERT INTO `messagelog` (`Id`, `SendTime`, `ReceiveTime`, `StatusCode`, `StatusText`, `MessageTo`, `MessageFrom`, `MessageText`, `MessageType`, `MessageId`, `ErrorCode`, `ErrorText`, `Gateway`, `MessageParts`, `MessagePDU`, `Connector`, `UserId`, `UserInfo`) VALUES
	(26, '2021-10-08 14:12:47', NULL, 200, NULL, '+639382715180', '1577A4EB-2491-4C73-885F-E2E7BE770B7A', 'You have an Announcement notification from WUP-Maria.  <br> Title:  Examination Preliminary <br> What:asdasdasdsadasdsadasdsadasdasdasdsadasd <br> When: 2021-10-27T14:12<br> Where: WUP Campus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(27, '2021-10-08 14:12:48', NULL, 200, NULL, '+639090909090', 'E36A4034-FBD6-43A5-8743-91E777907C6A', 'You have an Announcement notification from WUP-Maria.  <br> Title:  Examination Preliminary <br> What:asdasdasdsadasdsadasdsadasdasdasdsadasd <br> When: 2021-10-27T14:12<br> Where: WUP Campus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(28, '2021-10-08 14:14:14', NULL, 200, NULL, '+639185292671', 'DAF6746C-4C71-4060-84C7-76D185E2C0C0', 'You have an Event notification from WUP-Maria. <br>Title: Valentine Day Celebration <br>What: We are helding valentine Celebration come and join us <br>When: 2021-10-26T14:14 <br>When: WUP Covered Court', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(29, '2021-10-08 14:14:15', NULL, 200, NULL, '+639382715180', '79A7A43D-6E1C-4230-8268-34C0905433B5', 'You have an Event notification from WUP-Maria. <br>Title: Valentine Day Celebration <br>What: We are helding valentine Celebration come and join us <br>When: 2021-10-26T14:14 <br>When: WUP Covered Court', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(30, '2021-10-08 14:14:16', NULL, 200, NULL, '+639090909090', '6490571B-8FD6-43D8-8D19-D39C591529C8', 'You have an Event notification from WUP-Maria. <br>Title: Valentine Day Celebration <br>What: We are helding valentine Celebration come and join us <br>When: 2021-10-26T14:14 <br>When: WUP Covered Court', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(31, '2021-10-08 14:17:00', NULL, 200, NULL, '+639185292671', 'D082ADF5-18F7-4126-8DEF-86CA4752427B', 'You have an Announcement notification from WUP-Maria.  <br> Title:  Mid-Term Examination 1 <br> What:Our Mid term examination is getting near make sure to settle your payments before the due to avoid No PERMIT <br> When: 2021-10-27T14:14<br> Where: WUP Campus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(32, '2021-10-08 14:17:01', NULL, 200, NULL, '+639382715180', 'E9EBA155-C2C8-4DF6-BEFC-16F2D2E8894A', 'You have an Announcement notification from WUP-Maria.  <br> Title:  Mid-Term Examination 1 <br> What:Our Mid term examination is getting near make sure to settle your payments before the due to avoid No PERMIT <br> When: 2021-10-27T14:14<br> Where: WUP Campus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(33, '2021-10-08 14:17:01', NULL, 200, NULL, '+639090909090', '0C6E98BA-5929-42C7-A204-6B7C3361D76C', 'You have an Announcement notification from WUP-Maria.  <br> Title:  Mid-Term Examination 1 <br> What:Our Mid term examination is getting near make sure to settle your payments before the due to avoid No PERMIT <br> When: 2021-10-27T14:14<br> Where: WUP Campus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(34, '2021-10-08 14:17:36', NULL, 200, NULL, '+639185292671', 'E7C12AA6-0C32-4DD1-A75B-655621DB1367', 'You have an Announcement notification from WUP-Maria.  <br> Title:  Examination Preliminary <br> What:Hahhaahhahahahah <br> When: 2021-11-23T14:17<br> Where: WUP Campus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(35, '2021-10-08 14:17:37', NULL, 200, NULL, '+639382715180', 'E3579FE3-90FB-4868-8422-CA3A3CD1BA2C', 'You have an Announcement notification from WUP-Maria.  <br> Title:  Examination Preliminary <br> What:Hahhaahhahahahah <br> When: 2021-11-23T14:17<br> Where: WUP Campus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(36, '2021-10-08 14:17:37', NULL, 200, NULL, '+639090909090', '25C8EDC6-7715-41E5-8D1F-930C21D284F5', 'You have an Announcement notification from WUP-Maria.  <br> Title:  Examination Preliminary <br> What:Hahhaahhahahahah <br> When: 2021-11-23T14:17<br> Where: WUP Campus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(37, '2021-10-08 14:19:14', NULL, 200, NULL, '+639185292671', 'A527A358-0CAB-409A-AF09-B2A2FC301C08', 'You have an Event notification from WUP-Maria. <br>Title: Valentine Day  <br>What: Hahahahaha <br>When: 2021-10-31T14:19 <br>When: WUP Covered Court', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(38, '2021-10-08 14:19:14', NULL, 200, NULL, '+639382715180', '437FC43F-E36B-4BD4-9DA0-AD9A77C49411', 'You have an Event notification from WUP-Maria. <br>Title: Valentine Day  <br>What: Hahahahaha <br>When: 2021-10-31T14:19 <br>When: WUP Covered Court', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(39, '2021-10-08 14:19:15', NULL, 200, NULL, '+639090909090', '2D4ECCF8-DDCC-415F-8337-8EFDB6A7B2EB', 'You have an Event notification from WUP-Maria. <br>Title: Valentine Day  <br>What: Hahahahaha <br>When: 2021-10-31T14:19 <br>When: WUP Covered Court', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(40, '2021-10-08 14:45:53', NULL, 200, NULL, '+639185292671', '01109F34-B840-45BD-AA3A-54FF704A5D29', 'You have an Announcement notification from WUP-Maria.  <br> Title:  Announcement Sample 1 <br> What:asdasdasjjasjdjad <br> When: 2021-10-31T14:50<br> Where: WUP Campus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(41, '2021-10-08 14:45:54', NULL, 200, NULL, '+639382715180', 'E46A49DC-7764-43C3-8112-C86674E2F7DD', 'You have an Announcement notification from WUP-Maria.  <br> Title:  Announcement Sample 1 <br> What:asdasdasjjasjdjad <br> When: 2021-10-31T14:50<br> Where: WUP Campus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(42, '2021-10-08 14:45:54', NULL, 200, NULL, '+639464305399', 'E09BE64C-3FC3-4FD9-B355-C60A9ECDB16F', 'You have an Announcement notification from WUP-Maria.  <br> Title:  Announcement Sample 1 <br> What:asdasdasjjasjdjad <br> When: 2021-10-31T14:50<br> Where: WUP Campus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(43, '2021-10-28 20:44:41', NULL, 300, NULL, '+639090909090', NULL, 'You have an Event notification from WUP-Maria Aurora. <br>Title: New Event <br>What: Please <br>When: 2021-10-13T01:43 <br>Where: Aurora Wup', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(44, '2021-10-28 20:44:42', NULL, 300, NULL, '+639464305399', NULL, 'You have an Event notification from WUP-Maria Aurora. <br>Title: New Event <br>What: Please <br>When: 2021-10-13T01:43 <br>Where: Aurora Wup', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(45, '2021-10-28 20:44:42', NULL, 300, NULL, '+639090909090', NULL, 'You have an Event notification from WUP-Maria Aurora. <br>Title: New Event <br>What: Please <br>When: 2021-10-13T01:43 <br>Where: Aurora Wup', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(46, '2021-10-28 20:44:43', NULL, 300, NULL, '+639304983943', NULL, 'You have an Event notification from WUP-Maria Aurora. <br>Title: New Event <br>What: Please <br>When: 2021-10-13T01:43 <br>Where: Aurora Wup', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(47, '2021-10-28 21:14:14', NULL, 300, NULL, '+639090909090', NULL, 'You have an Announcement notification from WUP-Maria Aurora.  <br> Title:  General Announcement <br> What:Hi alasdasdasdlga asuhhdfashdjh asfjashfhashf hasas dhahsd jasjdh a <br> When: 2021-10-14T21:13<br> Where: Wup Aurora', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(48, '2021-11-21 12:11:35', NULL, 300, NULL, '+639090909090', NULL, 'You have an Announcement notification from WUP-Maria Aurora.  <br> Title:  General Meeting for Parents <br> What:There will be a meeting of Parents  <br> When: 2021-11-19T12:13<br> Where: WUP AURORA', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(49, '2021-11-21 12:11:35', NULL, 300, NULL, '+639182323232', NULL, 'You have an Announcement notification from WUP-Maria Aurora.  <br> Title:  General Meeting for Parents <br> What:There will be a meeting of Parents  <br> When: 2021-11-19T12:13<br> Where: WUP AURORA', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(50, '2021-11-22 20:51:02', NULL, 300, NULL, '+639090909090', NULL, 'You have an Event notification from WUP-Maria Aurora. <br>Title: New Event <br>What: fasdfsdfsdf <br>When: 2021-11-17T20:50 <br>Where: Aurora Wup', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(51, '2021-11-22 20:51:03', NULL, 300, NULL, '+63', NULL, 'You have an Event notification from WUP-Maria Aurora. <br>Title: New Event <br>What: fasdfsdfsdf <br>When: 2021-11-17T20:50 <br>Where: Aurora Wup', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(52, '2021-11-22 20:51:04', NULL, 300, NULL, '+639182323232', NULL, 'You have an Event notification from WUP-Maria Aurora. <br>Title: New Event <br>What: fasdfsdfsdf <br>When: 2021-11-17T20:50 <br>Where: Aurora Wup', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(53, '2021-11-22 20:51:44', NULL, 300, NULL, '+639090909090', NULL, 'You have an Event notification from WUP-Maria Aurora. <br>Title: New Event 2 <br>What: asdasdasdasd <br>When: 2021-12-03T20:51 <br>Where: Aurora Wup', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(54, '2021-11-22 20:51:45', NULL, 300, NULL, '+63', NULL, 'You have an Event notification from WUP-Maria Aurora. <br>Title: New Event 2 <br>What: asdasdasdasd <br>When: 2021-12-03T20:51 <br>Where: Aurora Wup', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(55, '2021-11-22 20:51:46', NULL, 300, NULL, '+639182323232', NULL, 'You have an Event notification from WUP-Maria Aurora. <br>Title: New Event 2 <br>What: asdasdasdasd <br>When: 2021-12-03T20:51 <br>Where: Aurora Wup', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(56, '2021-11-22 20:52:10', NULL, 300, NULL, '+639090909090', NULL, 'You have an Announcement notification from WUP-Maria Aurora.  <br> Title:  General Announcement <br> What:sdaasdasd <br> When: 2021-11-19T20:51<br> Where: WUP AURORA', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(57, '2021-11-22 20:52:11', NULL, 300, NULL, '+63', NULL, 'You have an Announcement notification from WUP-Maria Aurora.  <br> Title:  General Announcement <br> What:sdaasdasd <br> When: 2021-11-19T20:51<br> Where: WUP AURORA', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(58, '2021-11-22 20:52:11', NULL, 300, NULL, '+639182323232', NULL, 'You have an Announcement notification from WUP-Maria Aurora.  <br> Title:  General Announcement <br> What:sdaasdasd <br> When: 2021-11-19T20:51<br> Where: WUP AURORA', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(59, '2021-11-22 20:52:26', NULL, 300, NULL, '+639090909090', NULL, 'You have an Announcement notification from WUP-Maria Aurora.  <br> Title:  General Meeting for Parents <br> What:SDdsDASDASD <br> When: 2021-11-26T20:52<br> Where: WUP AURORA', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(60, '2021-11-22 20:52:27', NULL, 300, NULL, '+63', NULL, 'You have an Announcement notification from WUP-Maria Aurora.  <br> Title:  General Meeting for Parents <br> What:SDdsDASDASD <br> When: 2021-11-26T20:52<br> Where: WUP AURORA', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(61, '2021-11-22 20:52:27', NULL, 300, NULL, '+639182323232', NULL, 'You have an Announcement notification from WUP-Maria Aurora.  <br> Title:  General Meeting for Parents <br> What:SDdsDASDASD <br> When: 2021-11-26T20:52<br> Where: WUP AURORA', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(62, '2021-11-22 20:52:47', NULL, 300, NULL, '+639090909090', NULL, 'You have an Announcement notification from WUP-Maria Aurora.  <br> Title:  General Announcement 33 <br> What:ASDASDAS <br> When: 2022-01-05T20:52<br> Where: WUP AURORA Campus', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(63, '2021-11-22 20:52:48', NULL, 300, NULL, '+63', NULL, 'You have an Announcement notification from WUP-Maria Aurora.  <br> Title:  General Announcement 33 <br> What:ASDASDAS <br> When: 2022-01-05T20:52<br> Where: WUP AURORA Campus', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(64, '2021-11-22 20:52:49', NULL, 300, NULL, '+639182323232', NULL, 'You have an Announcement notification from WUP-Maria Aurora.  <br> Title:  General Announcement 33 <br> What:ASDASDAS <br> When: 2022-01-05T20:52<br> Where: WUP AURORA Campus', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(65, '2021-11-22 20:54:52', NULL, 300, NULL, '+639090909090', NULL, 'You have an Event notification from WUP-Maria Aurora. <br>Title: New Event 23 <br>What: GHAPSDPA <br>When: 2022-01-06T20:54 <br>Where: Garte', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(66, '2021-11-22 20:54:53', NULL, 300, NULL, '+63', NULL, 'You have an Event notification from WUP-Maria Aurora. <br>Title: New Event 23 <br>What: GHAPSDPA <br>When: 2022-01-06T20:54 <br>Where: Garte', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(67, '2021-11-22 20:54:53', NULL, 300, NULL, '+639182323232', NULL, 'You have an Event notification from WUP-Maria Aurora. <br>Title: New Event 23 <br>What: GHAPSDPA <br>When: 2022-01-06T20:54 <br>Where: Garte', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `messagelog` ENABLE KEYS */;

-- Dumping structure for table db_wup.messageout
CREATE TABLE IF NOT EXISTS `messageout` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `MessageTo` varchar(80) DEFAULT NULL,
  `MessageFrom` varchar(80) DEFAULT NULL,
  `MessageText` text,
  `MessageType` varchar(80) DEFAULT NULL,
  `Gateway` varchar(80) DEFAULT NULL,
  `UserId` varchar(80) DEFAULT NULL,
  `UserInfo` text,
  `Priority` int(11) DEFAULT NULL,
  `Scheduled` datetime DEFAULT NULL,
  `ValidityPeriod` int(11) DEFAULT NULL,
  `IsSent` tinyint(1) NOT NULL DEFAULT '0',
  `IsRead` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`),
  KEY `IDX_IsRead` (`IsRead`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_wup.messageout: ~9 rows (approximately)
/*!40000 ALTER TABLE `messageout` DISABLE KEYS */;
INSERT INTO `messageout` (`Id`, `MessageTo`, `MessageFrom`, `MessageText`, `MessageType`, `Gateway`, `UserId`, `UserInfo`, `Priority`, `Scheduled`, `ValidityPeriod`, `IsSent`, `IsRead`) VALUES
	(1, '+639090909090', 'Admin', 'You have an Announcement notification from WUP-Maria Aurora.  <br> Title:  General Meeting for Parents and Friends <br> What:Wala ahahahsdhahsd <br> When: 2021-12-09T00:18<br> Where: WUP AURORA Campus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
	(2, '+63', 'Admin', 'You have an Announcement notification from WUP-Maria Aurora.  <br> Title:  General Meeting for Parents and Friends <br> What:Wala ahahahsdhahsd <br> When: 2021-12-09T00:18<br> Where: WUP AURORA Campus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
	(3, '+639182323232', 'Admin', 'You have an Announcement notification from WUP-Maria Aurora.  <br> Title:  General Meeting for Parents and Friends <br> What:Wala ahahahsdhahsd <br> When: 2021-12-09T00:18<br> Where: WUP AURORA Campus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
	(4, '+639090909090', 'Admin', 'You have an Event notification from WUP-Maria Aurora. <br>Title: New Event 13 <br>What: Walang pasok <br>When: 2021-12-29T22:17 <br>Where: Aurora Wup', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
	(5, '+63', 'Admin', 'You have an Event notification from WUP-Maria Aurora. <br>Title: New Event 13 <br>What: Walang pasok <br>When: 2021-12-29T22:17 <br>Where: Aurora Wup', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
	(6, '+639182323232', 'Admin', 'You have an Event notification from WUP-Maria Aurora. <br>Title: New Event 13 <br>What: Walang pasok <br>When: 2021-12-29T22:17 <br>Where: Aurora Wup', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
	(7, '+639182323232', 'Admin', 'You have an Event notification from WUP-Maria Aurora. <br>Title: New Event 13 <br>What: Walang pasok <br>When: 2021-12-29T22:17 <br>Where: Aurora Wup', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
	(8, '+63', 'Admin', 'You have an Event notification from WUP-Maria Aurora. <br>Title: New Event 2555 <br>What: wawawawawa <br>When: 2022-01-12T20:48 <br>Where: Garte Aw', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
	(9, '+639182323232', 'Admin', 'You have an Event notification from WUP-Maria Aurora. <br>Title: New Event 2555 <br>What: wawawawawa <br>When: 2022-01-12T20:48 <br>Where: Garte Aw', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0);
/*!40000 ALTER TABLE `messageout` ENABLE KEYS */;

-- Dumping structure for table db_wup.tblannouncement
CREATE TABLE IF NOT EXISTS `tblannouncement` (
  `ANNOUNCEMENTID` int(11) NOT NULL AUTO_INCREMENT,
  `ANNOUNCEMENT_TEXT` text NOT NULL,
  `ANNOUNCEMENT_WHAT` text NOT NULL,
  `ANNOUNCEMENT_WHEN` datetime NOT NULL,
  `ANNOUNCEMENT_WHERE` varchar(90) NOT NULL,
  `DATEPOSTED` datetime NOT NULL,
  PRIMARY KEY (`ANNOUNCEMENTID`)
) ENGINE=InnoDB AUTO_INCREMENT=202100063 DEFAULT CHARSET=latin1;

-- Dumping data for table db_wup.tblannouncement: ~4 rows (approximately)
/*!40000 ALTER TABLE `tblannouncement` DISABLE KEYS */;
INSERT INTO `tblannouncement` (`ANNOUNCEMENTID`, `ANNOUNCEMENT_TEXT`, `ANNOUNCEMENT_WHAT`, `ANNOUNCEMENT_WHEN`, `ANNOUNCEMENT_WHERE`, `DATEPOSTED`) VALUES
	(202100058, 'General Announcement', 'sdaasdasd', '2021-11-19 20:51:00', 'WUP AURORA', '2021-11-22 12:51:52'),
	(202100059, 'General Meeting for Parents', 'SDdsDASDASD', '2021-11-26 20:52:00', 'WUP AURORA', '2021-11-22 12:52:11'),
	(202100060, 'General Announcement 33', 'ASDASDAS', '2022-01-05 20:52:00', 'WUP AURORA Campus', '2021-11-22 12:52:33'),
	(202100062, 'General Meeting for Parents and Friends', 'Wala ahahahsdhahsd', '2021-12-09 00:18:00', 'WUP AURORA Campus', '2021-12-11 16:18:19');
/*!40000 ALTER TABLE `tblannouncement` ENABLE KEYS */;

-- Dumping structure for table db_wup.tblautonumbers
CREATE TABLE IF NOT EXISTS `tblautonumbers` (
  `AUTOID` tinyint(4) NOT NULL,
  `AUTOSTART` varchar(30) NOT NULL,
  `AUTOEND` varchar(50) NOT NULL,
  `AUTOINC` int(11) NOT NULL,
  `AUTOKEY` varchar(30) NOT NULL,
  PRIMARY KEY (`AUTOID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_wup.tblautonumbers: ~2 rows (approximately)
/*!40000 ALTER TABLE `tblautonumbers` DISABLE KEYS */;
INSERT INTO `tblautonumbers` (`AUTOID`, `AUTOSTART`, `AUTOEND`, `AUTOINC`, `AUTOKEY`) VALUES
	(10, '000', '27', 1, 'bookingid'),
	(12, '000', '65', 1, 'BLOGID');
/*!40000 ALTER TABLE `tblautonumbers` ENABLE KEYS */;

-- Dumping structure for table db_wup.tblblogpost
CREATE TABLE IF NOT EXISTS `tblblogpost` (
  `BLOGID` int(11) NOT NULL AUTO_INCREMENT,
  `BLOGS` varchar(50) NOT NULL DEFAULT '',
  `BLOG_WHAT` text NOT NULL,
  `BLOG_WHEN` varchar(90) NOT NULL,
  `BLOG_WHERE` varchar(90) NOT NULL,
  `DATEPOSTED` datetime NOT NULL,
  `CATEGORY` varchar(90) NOT NULL,
  `AUTHOR` varchar(90) NOT NULL,
  PRIMARY KEY (`BLOGID`)
) ENGINE=InnoDB AUTO_INCREMENT=202200065 DEFAULT CHARSET=latin1;

-- Dumping data for table db_wup.tblblogpost: ~9 rows (approximately)
/*!40000 ALTER TABLE `tblblogpost` DISABLE KEYS */;
INSERT INTO `tblblogpost` (`BLOGID`, `BLOGS`, `BLOG_WHAT`, `BLOG_WHEN`, `BLOG_WHERE`, `DATEPOSTED`, `CATEGORY`, `AUTHOR`) VALUES
	(202100056, 'New Event', 'fasdfsdfsdf', '2021-11-17T20:50', 'Aurora Wup', '2021-11-22 20:50:46', 'EVENT', 'Awit'),
	(202100057, 'New Event 2', 'asdasdasdasd', '2021-12-03T20:51', 'Aurora Wup', '2021-11-22 20:51:27', 'EVENT', 'Awit'),
	(202100058, 'General Announcement', 'sdaasdasd', '2021-11-19T20:51', 'WUP AURORA', '2021-11-22 20:51:52', 'ANNOUNCEMENT', 'Awit'),
	(202100059, 'General Meeting for Parents', 'SDdsDASDASD', '2021-11-26T20:52', 'WUP AURORA', '2021-11-22 20:52:11', 'ANNOUNCEMENT', 'Awit'),
	(202100060, 'General Announcement 33', 'ASDASDAS', '2022-01-05T20:52', 'WUP AURORA Campus', '2021-11-22 20:52:33', 'ANNOUNCEMENT', 'Awit'),
	(202100061, 'New Event 23', 'GHAPSDPA', '2022-01-06T20:54', 'Garte', '2021-11-22 20:54:34', 'EVENT', 'Awit'),
	(202100062, 'General Meeting for Parents and Friends', 'Wala ahahahsdhahsd', '2021-12-09T00:18', 'WUP AURORA Campus', '2021-12-12 00:18:19', 'ANNOUNCEMENT', 'Awit'),
	(202100063, 'New Event 13', 'Walang pasok', '2021-12-29T22:17', 'Aurora Wup', '2021-12-13 22:17:24', 'EVENT', 'Awit'),
	(202200064, 'New Event 2555', 'wawawawawa', '2022-01-12T20:48', 'Garte Aw', '2022-01-03 20:49:02', 'EVENT', 'Awit1');
/*!40000 ALTER TABLE `tblblogpost` ENABLE KEYS */;

-- Dumping structure for table db_wup.tblcourse
CREATE TABLE IF NOT EXISTS `tblcourse` (
  `COURSEID` int(11) NOT NULL AUTO_INCREMENT,
  `COURSE` varchar(60) NOT NULL,
  `DESCRIPTION` varchar(60) NOT NULL,
  PRIMARY KEY (`COURSEID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table db_wup.tblcourse: ~5 rows (approximately)
/*!40000 ALTER TABLE `tblcourse` DISABLE KEYS */;
INSERT INTO `tblcourse` (`COURSEID`, `COURSE`, `DESCRIPTION`) VALUES
	(3, 'BSED', 'Bachelor of Science in Secondary Education'),
	(4, 'BSCS', 'College of Computer Science'),
	(5, 'BSCRIM', 'College of Crimal Justice Education'),
	(7, 'STEM', 'SCIENCE & TECHNOLOGY MATHEMATICS'),
	(8, 'ABM', 'Accounting and Business Management');
/*!40000 ALTER TABLE `tblcourse` ENABLE KEYS */;

-- Dumping structure for table db_wup.tbldepartment
CREATE TABLE IF NOT EXISTS `tbldepartment` (
  `DEPARTMENTID` int(11) NOT NULL AUTO_INCREMENT,
  `DEPARTMENT` varchar(90) NOT NULL,
  `DESCRIPTION` varchar(90) NOT NULL,
  PRIMARY KEY (`DEPARTMENTID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table db_wup.tbldepartment: ~3 rows (approximately)
/*!40000 ALTER TABLE `tbldepartment` DISABLE KEYS */;
INSERT INTO `tbldepartment` (`DEPARTMENTID`, `DEPARTMENT`, `DESCRIPTION`) VALUES
	(3, 'COLLEGE', 'Wesleyan College Department'),
	(4, 'SHS ', 'SENIOR HIGH SCHOOL DEPARTMENT'),
	(5, 'JHS', 'JUNIOR HIGH SCHOOL DEPARTMENT');
/*!40000 ALTER TABLE `tbldepartment` ENABLE KEYS */;

-- Dumping structure for table db_wup.tblevent
CREATE TABLE IF NOT EXISTS `tblevent` (
  `EVENTID` int(11) NOT NULL AUTO_INCREMENT,
  `EVENT_TEXT` text NOT NULL,
  `EVENT_WHAT` text NOT NULL,
  `EVENT_WHEN` datetime NOT NULL,
  `EVENT_WHERE` varchar(90) NOT NULL,
  `DATEPOSTED` datetime NOT NULL,
  PRIMARY KEY (`EVENTID`)
) ENGINE=InnoDB AUTO_INCREMENT=202200065 DEFAULT CHARSET=latin1;

-- Dumping data for table db_wup.tblevent: ~5 rows (approximately)
/*!40000 ALTER TABLE `tblevent` DISABLE KEYS */;
INSERT INTO `tblevent` (`EVENTID`, `EVENT_TEXT`, `EVENT_WHAT`, `EVENT_WHEN`, `EVENT_WHERE`, `DATEPOSTED`) VALUES
	(202100056, 'New Event', 'fasdfsdfsdf', '2021-11-17 20:50:00', 'Aurora Wup', '2021-11-22 12:50:46'),
	(202100057, 'New Event 2', 'asdasdasdasd', '2021-12-03 20:51:00', 'Aurora Wup', '2021-11-22 12:51:27'),
	(202100061, 'New Event 23', 'GHAPSDPA', '2022-01-06 20:54:00', 'Garte', '2021-11-22 12:54:34'),
	(202100063, 'New Event 13', 'Walang pasok', '2021-12-29 22:17:00', 'Aurora Wup', '2021-12-13 14:17:24'),
	(202200064, 'New Event 2555', 'wawawawawa', '2022-01-12 20:48:00', 'Garte Aw', '2022-01-03 12:49:02');
/*!40000 ALTER TABLE `tblevent` ENABLE KEYS */;

-- Dumping structure for table db_wup.tblfaculty
CREATE TABLE IF NOT EXISTS `tblfaculty` (
  `INCID` int(11) NOT NULL AUTO_INCREMENT,
  `IDNO` varchar(90) NOT NULL,
  `FNAME` varchar(90) NOT NULL,
  `MNAME` varchar(90) NOT NULL,
  `LNAME` varchar(90) NOT NULL,
  `PHONE` varchar(30) NOT NULL,
  PRIMARY KEY (`INCID`),
  UNIQUE KEY `IDNO` (`IDNO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_wup.tblfaculty: ~0 rows (approximately)
/*!40000 ALTER TABLE `tblfaculty` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblfaculty` ENABLE KEYS */;

-- Dumping structure for table db_wup.tblstrand
CREATE TABLE IF NOT EXISTS `tblstrand` (
  `STRANDID` int(11) NOT NULL AUTO_INCREMENT,
  `STRAND` varchar(60) DEFAULT NULL,
  `DESCRIPTION1` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`STRANDID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_wup.tblstrand: ~4 rows (approximately)
/*!40000 ALTER TABLE `tblstrand` DISABLE KEYS */;
INSERT INTO `tblstrand` (`STRANDID`, `STRAND`, `DESCRIPTION1`) VALUES
	(1, 'STEM', 'STEM'),
	(2, 'ABM', 'ABM'),
	(3, 'HUMSS', 'HUMSS'),
	(4, 'GAS', 'GAS');
/*!40000 ALTER TABLE `tblstrand` ENABLE KEYS */;

-- Dumping structure for table db_wup.tblstudent
CREATE TABLE IF NOT EXISTS `tblstudent` (
  `INCID` int(11) NOT NULL AUTO_INCREMENT,
  `IDNO` varchar(90) NOT NULL,
  `FNAME` varchar(30) NOT NULL,
  `MNAME` varchar(90) NOT NULL,
  `LNAME` varchar(90) NOT NULL,
  `PHONE` varchar(30) NOT NULL,
  `DEPARTMENT` varchar(90) NOT NULL,
  `YLVL` varchar(50) NOT NULL,
  `SEC_BLOCK` varchar(90) NOT NULL,
  `COURSE` varchar(90) NOT NULL,
  `USERNAME` varchar(90) NOT NULL,
  `STUDPASS` varchar(90) NOT NULL,
  `PROIMAGE` text,
  `FORGOTPASSAUTH` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`INCID`),
  UNIQUE KEY `STUDID` (`IDNO`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_wup.tblstudent: ~2 rows (approximately)
/*!40000 ALTER TABLE `tblstudent` DISABLE KEYS */;
INSERT INTO `tblstudent` (`INCID`, `IDNO`, `FNAME`, `MNAME`, `LNAME`, `PHONE`, `DEPARTMENT`, `YLVL`, `SEC_BLOCK`, `COURSE`, `USERNAME`, `STUDPASS`, `PROIMAGE`, `FORGOTPASSAUTH`) VALUES
	(23, '180422332', 'Minaqu', 'Wara', 'Lastimosa', '09182323232', '3', '3rd Year', 'Block 3', '4', '2J#zE*fDiQSx', 'iCpc#T', NULL, NULL);
/*!40000 ALTER TABLE `tblstudent` ENABLE KEYS */;

-- Dumping structure for table db_wup.tblstudentnotif
CREATE TABLE IF NOT EXISTS `tblstudentnotif` (
  `NotificationID` int(11) NOT NULL AUTO_INCREMENT,
  `IDNO` varchar(90) NOT NULL,
  `BLOGID` varchar(90) NOT NULL,
  `TYPE` varchar(90) NOT NULL,
  PRIMARY KEY (`NotificationID`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Dumping data for table db_wup.tblstudentnotif: ~22 rows (approximately)
/*!40000 ALTER TABLE `tblstudentnotif` DISABLE KEYS */;
INSERT INTO `tblstudentnotif` (`NotificationID`, `IDNO`, `BLOGID`, `TYPE`) VALUES
	(26, '123123123', '', 'Event'),
	(27, '123123123', '', 'Announcement'),
	(28, '612361263', '', 'Announcement'),
	(29, '612361263', '202100056', 'Event'),
	(30, '6', '202100056', 'Event'),
	(31, '612361263', '202100057', 'Event'),
	(32, '6', '202100057', 'Event'),
	(33, '612361263', '202100058', 'Announcement'),
	(34, '6', '202100058', 'Announcement'),
	(35, '612361263', '202100059', 'Announcement'),
	(36, '6', '202100059', 'Announcement'),
	(37, '612361263', '202100060', 'Announcement'),
	(38, '6', '202100060', 'Announcement'),
	(39, '612361263', '202100061', 'Event'),
	(40, '6', '202100061', 'Event'),
	(41, '612361263', '202100062', 'Announcement'),
	(42, '6', '202100062', 'Announcement'),
	(43, '612361263', '202100063', 'Event'),
	(44, '6', '202100063', 'Event'),
	(45, '180422332', '202100063', 'Event'),
	(46, '6', '202200064', 'Event'),
	(47, '180422332', '202200064', 'Event');
/*!40000 ALTER TABLE `tblstudentnotif` ENABLE KEYS */;

-- Dumping structure for table db_wup.tblusers
CREATE TABLE IF NOT EXISTS `tblusers` (
  `USERID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(90) NOT NULL,
  `UEMAIL` varchar(90) NOT NULL,
  `PASS` varchar(90) NOT NULL,
  `TYPE` varchar(30) NOT NULL,
  PRIMARY KEY (`USERID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table db_wup.tblusers: ~2 rows (approximately)
/*!40000 ALTER TABLE `tblusers` DISABLE KEYS */;
INSERT INTO `tblusers` (`USERID`, `NAME`, `UEMAIL`, `PASS`, `TYPE`) VALUES
	(4, 'Awit1', 'admin', '94bce5f1f43a5444ad88f9ae49db68e024d53d70', 'Administrator'),
	(6, 'Jandel', 'hahaha', '86b7b315c8a287270593fee92bbc3c395072ba2f', 'Administrator');
/*!40000 ALTER TABLE `tblusers` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
