-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table db_wvsu.messagein
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

-- Dumping data for table db_wvsu.messagein: ~0 rows (approximately)
/*!40000 ALTER TABLE `messagein` DISABLE KEYS */;
/*!40000 ALTER TABLE `messagein` ENABLE KEYS */;

-- Dumping structure for table db_wvsu.messagelog
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_wvsu.messagelog: ~0 rows (approximately)
/*!40000 ALTER TABLE `messagelog` DISABLE KEYS */;
/*!40000 ALTER TABLE `messagelog` ENABLE KEYS */;

-- Dumping structure for table db_wvsu.messageout
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_wvsu.messageout: ~0 rows (approximately)
/*!40000 ALTER TABLE `messageout` DISABLE KEYS */;
/*!40000 ALTER TABLE `messageout` ENABLE KEYS */;

-- Dumping structure for table db_wvsu.tblannouncement
CREATE TABLE IF NOT EXISTS `tblannouncement` (
  `ANNOUNCEMENTID` int(11) NOT NULL AUTO_INCREMENT,
  `ANNOUNCEMENT_TEXT` text NOT NULL,
  `ANNOUNCEMENT_WHAT` text NOT NULL,
  `ANNOUNCEMENT_WHEN` datetime NOT NULL,
  `ANNOUNCEMENT_WHERE` varchar(90) NOT NULL,
  `DATEPOSTED` datetime NOT NULL,
  PRIMARY KEY (`ANNOUNCEMENTID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_wvsu.tblannouncement: ~1 rows (approximately)
/*!40000 ALTER TABLE `tblannouncement` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblannouncement` ENABLE KEYS */;

-- Dumping structure for table db_wvsu.tblautonumbers
CREATE TABLE IF NOT EXISTS `tblautonumbers` (
  `AUTOID` tinyint(4) NOT NULL,
  `AUTOSTART` varchar(30) NOT NULL,
  `AUTOEND` varchar(50) NOT NULL,
  `AUTOINC` int(11) NOT NULL,
  `AUTOKEY` varchar(30) NOT NULL,
  PRIMARY KEY (`AUTOID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_wvsu.tblautonumbers: ~4 rows (approximately)
/*!40000 ALTER TABLE `tblautonumbers` DISABLE KEYS */;
INSERT INTO `tblautonumbers` (`AUTOID`, `AUTOSTART`, `AUTOEND`, `AUTOINC`, `AUTOKEY`) VALUES
	(1, '02983', '8', 1, 'userid'),
	(2, '000', '27', 1, 'bookingid'),
	(3, '0', '10', 1, 'STUDENTID'),
	(4, '00', '72', 1, 'BLOGID');
/*!40000 ALTER TABLE `tblautonumbers` ENABLE KEYS */;

-- Dumping structure for table db_wvsu.tblblogpost
CREATE TABLE IF NOT EXISTS `tblblogpost` (
  `BLOGID` int(11) NOT NULL AUTO_INCREMENT,
  `BLOGS` text NOT NULL,
  `BLOG_WHAT` text NOT NULL,
  `BLOG_WHEN` varchar(90) NOT NULL,
  `BLOG_WHERE` varchar(90) NOT NULL,
  `DATEPOSTED` datetime NOT NULL,
  `CATEGORY` varchar(90) NOT NULL,
  `AUTHOR` varchar(90) NOT NULL,
  PRIMARY KEY (`BLOGID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_wvsu.tblblogpost: ~0 rows (approximately)
/*!40000 ALTER TABLE `tblblogpost` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblblogpost` ENABLE KEYS */;

-- Dumping structure for table db_wvsu.tblcourse
CREATE TABLE IF NOT EXISTS `tblcourse` (
  `COURSEID` int(11) NOT NULL AUTO_INCREMENT,
  `COURSE` varchar(60) NOT NULL,
  `DESCRIPTION` varchar(60) NOT NULL,
  PRIMARY KEY (`COURSEID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table db_wvsu.tblcourse: ~3 rows (approximately)
/*!40000 ALTER TABLE `tblcourse` DISABLE KEYS */;
INSERT INTO `tblcourse` (`COURSEID`, `COURSE`, `DESCRIPTION`) VALUES
	(3, 'BSED', 'Bachelor of Science in Secondary Education'),
	(4, 'BSCS', 'College of Computer Science'),
	(5, 'BSCRIM', 'College of Crimal Justice Education');
/*!40000 ALTER TABLE `tblcourse` ENABLE KEYS */;

-- Dumping structure for table db_wvsu.tbldepartment
CREATE TABLE IF NOT EXISTS `tbldepartment` (
  `DEPARTMENTID` int(11) NOT NULL AUTO_INCREMENT,
  `DEPARTMENT` varchar(90) NOT NULL,
  `DESCRIPTION` varchar(90) NOT NULL,
  PRIMARY KEY (`DEPARTMENTID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table db_wvsu.tbldepartment: ~3 rows (approximately)
/*!40000 ALTER TABLE `tbldepartment` DISABLE KEYS */;
INSERT INTO `tbldepartment` (`DEPARTMENTID`, `DEPARTMENT`, `DESCRIPTION`) VALUES
	(3, 'COLLEGE', 'Wesleyan College Department'),
	(4, 'SHS ', 'SENIOR HIGH SCHOOL DEPARTMENT'),
	(5, 'JHS', 'JUNIOR HIGH SCHOOL DEPARTMENT');
/*!40000 ALTER TABLE `tbldepartment` ENABLE KEYS */;

-- Dumping structure for table db_wvsu.tblevent
CREATE TABLE IF NOT EXISTS `tblevent` (
  `EVENTID` int(11) NOT NULL AUTO_INCREMENT,
  `EVENT_TEXT` text NOT NULL,
  `EVENT_WHAT` text NOT NULL,
  `EVENT_WHEN` datetime NOT NULL,
  `EVENT_WHERE` varchar(90) NOT NULL,
  `DATEPOSTED` datetime NOT NULL,
  PRIMARY KEY (`EVENTID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_wvsu.tblevent: ~0 rows (approximately)
/*!40000 ALTER TABLE `tblevent` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblevent` ENABLE KEYS */;

-- Dumping structure for table db_wvsu.tblfaculty
CREATE TABLE IF NOT EXISTS `tblfaculty` (
  `INCID` int(11) NOT NULL AUTO_INCREMENT,
  `IDNO` varchar(90) NOT NULL,
  `FNAME` varchar(90) NOT NULL,
  `DEPARTMENT` varchar(90) NOT NULL,
  `PHONE` varchar(30) NOT NULL,
  `USERID` varchar(90) NOT NULL,
  `FACPASS` varchar(90) NOT NULL,
  `PROIMAGE` varchar(90) DEFAULT NULL,
  `FORGOTPASSWORD` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`INCID`),
  UNIQUE KEY `IDNO` (`IDNO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_wvsu.tblfaculty: ~0 rows (approximately)
/*!40000 ALTER TABLE `tblfaculty` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblfaculty` ENABLE KEYS */;

-- Dumping structure for table db_wvsu.tblstrand
CREATE TABLE IF NOT EXISTS `tblstrand` (
  `STRANDID` int(11) NOT NULL AUTO_INCREMENT,
  `STRAND` varchar(60) DEFAULT NULL,
  `DESCRIPTION1` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`STRANDID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_wvsu.tblstrand: ~4 rows (approximately)
/*!40000 ALTER TABLE `tblstrand` DISABLE KEYS */;
INSERT INTO `tblstrand` (`STRANDID`, `STRAND`, `DESCRIPTION1`) VALUES
	(1, 'STEM', 'STEM'),
	(2, 'ABM', 'ABM'),
	(3, 'HUMSS', 'HUMSS'),
	(4, 'GAS', 'GAS');
/*!40000 ALTER TABLE `tblstrand` ENABLE KEYS */;

-- Dumping structure for table db_wvsu.tblstudent
CREATE TABLE IF NOT EXISTS `tblstudent` (
  `INCID` int(11) NOT NULL AUTO_INCREMENT,
  `IDNO` varchar(90) NOT NULL,
  `FNAME` varchar(30) NOT NULL,
  `PHONE` varchar(30) NOT NULL,
  `DEPARTMENT` varchar(90) NOT NULL,
  `YLVL` varchar(50) NOT NULL,
  `COURSE` varchar(90) NOT NULL,
  `USERNAME` varchar(90) NOT NULL,
  `STUDPASS` varchar(90) NOT NULL,
  `PROIMAGE` text,
  `FORGOTPASSAUTH` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`INCID`),
  UNIQUE KEY `STUDID` (`IDNO`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_wvsu.tblstudent: ~1 rows (approximately)
/*!40000 ALTER TABLE `tblstudent` DISABLE KEYS */;
INSERT INTO `tblstudent` (`INCID`, `IDNO`, `FNAME`, `PHONE`, `DEPARTMENT`, `YLVL`, `COURSE`, `USERNAME`, `STUDPASS`, `PROIMAGE`, `FORGOTPASSAUTH`) VALUES
	(6, '123123123', 'Novy Airhris B. Miana', '09185292671', '4', '12', '1', '5!MKLXEcbpRq', 'YqmsiD', NULL, NULL);
/*!40000 ALTER TABLE `tblstudent` ENABLE KEYS */;

-- Dumping structure for table db_wvsu.tblstudentnotif
CREATE TABLE IF NOT EXISTS `tblstudentnotif` (
  `NotificationID` int(11) NOT NULL AUTO_INCREMENT,
  `IDNO` varchar(90) NOT NULL,
  `BLOGID` varchar(90) NOT NULL,
  `TYPE` varchar(90) NOT NULL,
  PRIMARY KEY (`NotificationID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_wvsu.tblstudentnotif: ~0 rows (approximately)
/*!40000 ALTER TABLE `tblstudentnotif` DISABLE KEYS */;
INSERT INTO `tblstudentnotif` (`NotificationID`, `IDNO`, `BLOGID`, `TYPE`) VALUES
	(1, '184343242', '20210071', 'Event');
/*!40000 ALTER TABLE `tblstudentnotif` ENABLE KEYS */;

-- Dumping structure for table db_wvsu.tblusers
CREATE TABLE IF NOT EXISTS `tblusers` (
  `USERID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(90) NOT NULL,
  `UEMAIL` varchar(90) NOT NULL,
  `PASS` varchar(90) NOT NULL,
  `TYPE` varchar(30) NOT NULL,
  PRIMARY KEY (`USERID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table db_wvsu.tblusers: ~2 rows (approximately)
/*!40000 ALTER TABLE `tblusers` DISABLE KEYS */;
INSERT INTO `tblusers` (`USERID`, `NAME`, `UEMAIL`, `PASS`, `TYPE`) VALUES
	(4, 'Awit', 'admin', '38f078a81a2b033d197497af5b77f95b50bfcfb8', 'Administrator');
/*!40000 ALTER TABLE `tblusers` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
