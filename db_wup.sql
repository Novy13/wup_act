-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 06:36 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wup`
--

-- --------------------------------------------------------

--
-- Table structure for table `messagein`
--

CREATE TABLE `messagein` (
  `Id` int(11) NOT NULL,
  `SendTime` datetime DEFAULT NULL,
  `ReceiveTime` datetime DEFAULT NULL,
  `MessageFrom` varchar(80) DEFAULT NULL,
  `MessageTo` varchar(80) DEFAULT NULL,
  `SMSC` varchar(80) DEFAULT NULL,
  `MessageText` text DEFAULT NULL,
  `MessageType` varchar(80) DEFAULT NULL,
  `MessageParts` int(11) DEFAULT NULL,
  `MessagePDU` text DEFAULT NULL,
  `Gateway` varchar(80) DEFAULT NULL,
  `UserId` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messagelog`
--

CREATE TABLE `messagelog` (
  `Id` int(11) NOT NULL,
  `SendTime` datetime DEFAULT NULL,
  `ReceiveTime` datetime DEFAULT NULL,
  `StatusCode` int(11) DEFAULT NULL,
  `StatusText` varchar(80) DEFAULT NULL,
  `MessageTo` varchar(80) DEFAULT NULL,
  `MessageFrom` varchar(80) DEFAULT NULL,
  `MessageText` text DEFAULT NULL,
  `MessageType` varchar(80) DEFAULT NULL,
  `MessageId` varchar(80) DEFAULT NULL,
  `ErrorCode` varchar(80) DEFAULT NULL,
  `ErrorText` text DEFAULT NULL,
  `Gateway` varchar(80) DEFAULT NULL,
  `MessageParts` int(11) DEFAULT NULL,
  `MessagePDU` text DEFAULT NULL,
  `Connector` varchar(80) DEFAULT NULL,
  `UserId` varchar(80) DEFAULT NULL,
  `UserInfo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messagelog`
--

INSERT INTO `messagelog` (`Id`, `SendTime`, `ReceiveTime`, `StatusCode`, `StatusText`, `MessageTo`, `MessageFrom`, `MessageText`, `MessageType`, `MessageId`, `ErrorCode`, `ErrorText`, `Gateway`, `MessageParts`, `MessagePDU`, `Connector`, `UserId`, `UserInfo`) VALUES
(1, '2021-04-12 11:00:19', NULL, 200, NULL, '+639380915177', NULL, 'You have Announcement notification from WUP-MA - Announcement - Walang pasok  on 2021-04-01T11:03 @ WUP-MARIA', NULL, '9a50c5ac6a584809a8b6ff4cadf3655b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '2021-04-12 11:00:20', NULL, 200, NULL, '+639452441291', NULL, 'You have Announcement notification from WUP-MA - Announcement - Walang pasok  on 2021-04-01T11:03 @ WUP-MARIA', NULL, '63c4096935dd4184bfbd9a4e1356eb48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '2021-04-12 11:00:20', NULL, 200, NULL, '+639452441291', NULL, 'You have Announcement notification from WUP-MA - Announcement - Walang pasok  on 2021-04-01T11:03 @ WUP-MARIA', NULL, '6294b3c4cb414ef9a87f3c708cd8c717', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '2021-04-12 11:00:59', NULL, 200, NULL, '+639380915177', NULL, 'You have Event notification from WUP-MA - Special Valentines Event - Bukas na ito on 2021-04-14T14:05 @', NULL, '7ea57936d95e42cdaf716905e33ff7fe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '2021-04-12 11:01:00', NULL, 200, NULL, '+639452441291', NULL, 'You have Event notification from WUP-MA - Special Valentines Event - Bukas na ito on 2021-04-14T14:05 @', NULL, 'e69a14db215d40fb9337467467875c14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '2021-04-12 11:01:01', NULL, 200, NULL, '+639452441291', NULL, 'You have Event notification from WUP-MA - Special Valentines Event - Bukas na ito on 2021-04-14T14:05 @', NULL, 'bd8eefd9aa5f4e81a5744358f632eaf4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messageout`
--

CREATE TABLE `messageout` (
  `Id` int(11) NOT NULL,
  `MessageTo` varchar(80) DEFAULT NULL,
  `MessageFrom` varchar(80) DEFAULT NULL,
  `MessageText` text DEFAULT NULL,
  `MessageType` varchar(80) DEFAULT NULL,
  `Gateway` varchar(80) DEFAULT NULL,
  `UserId` varchar(80) DEFAULT NULL,
  `UserInfo` text DEFAULT NULL,
  `Priority` int(11) DEFAULT NULL,
  `Scheduled` datetime DEFAULT NULL,
  `ValidityPeriod` int(11) DEFAULT NULL,
  `IsSent` tinyint(1) NOT NULL DEFAULT 0,
  `IsRead` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messageout`
--

INSERT INTO `messageout` (`Id`, `MessageTo`, `MessageFrom`, `MessageText`, `MessageType`, `Gateway`, `UserId`, `UserInfo`, `Priority`, `Scheduled`, `ValidityPeriod`, `IsSent`, `IsRead`) VALUES
(1, '+639380915177', 'Admin', 'You have Announcement notification from WUP-MA - Announcement - Walang pasok  on 2021-04-01T11:03 @ WUP-MARIA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0),
(2, '+639452441291', 'Admin', 'You have Announcement notification from WUP-MA - Announcement - Walang pasok  on 2021-04-01T11:03 @ WUP-MARIA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0),
(3, '+639452441291', 'Admin', 'You have Announcement notification from WUP-MA - Announcement - Walang pasok  on 2021-04-01T11:03 @ WUP-MARIA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0),
(4, '+639380915177', 'Admin', 'You have Event notification from WUP-MA - Special Valentines Event - Bukas na ito on 2021-04-14T14:05 @ ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0),
(5, '+639452441291', 'Admin', 'You have Event notification from WUP-MA - Special Valentines Event - Bukas na ito on 2021-04-14T14:05 @ ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0),
(6, '+639452441291', 'Admin', 'You have Event notification from WUP-MA - Special Valentines Event - Bukas na ito on 2021-04-14T14:05 @ ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblannouncement`
--

CREATE TABLE `tblannouncement` (
  `ANNOUNCEMENTID` int(11) NOT NULL,
  `ANNOUNCEMENT_TEXT` text NOT NULL,
  `ANNOUNCEMENT_WHAT` text NOT NULL,
  `ANNOUNCEMENT_WHEN` datetime NOT NULL,
  `ANNOUNCEMENT_WHERE` varchar(90) NOT NULL,
  `DATEPOSTED` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblautonumbers`
--

CREATE TABLE `tblautonumbers` (
  `AUTOID` tinyint(4) NOT NULL,
  `AUTOSTART` varchar(30) NOT NULL,
  `AUTOEND` varchar(50) NOT NULL,
  `AUTOINC` int(11) NOT NULL,
  `AUTOKEY` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblautonumbers`
--

INSERT INTO `tblautonumbers` (`AUTOID`, `AUTOSTART`, `AUTOEND`, `AUTOINC`, `AUTOKEY`) VALUES
(1, '02983', '8', 1, 'userid'),
(2, '000', '27', 1, 'bookingid'),
(3, '0', '10', 1, 'STUDENTID'),
(4, '00', '74', 1, 'BLOGID');

-- --------------------------------------------------------

--
-- Table structure for table `tblblogpost`
--

CREATE TABLE `tblblogpost` (
  `BLOGID` int(11) NOT NULL,
  `BLOGS` text NOT NULL,
  `BLOG_WHAT` text NOT NULL,
  `BLOG_WHEN` varchar(90) NOT NULL,
  `BLOG_WHERE` varchar(90) NOT NULL,
  `DATEPOSTED` datetime NOT NULL,
  `CATEGORY` varchar(90) NOT NULL,
  `AUTHOR` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `COURSEID` int(11) NOT NULL,
  `COURSE` varchar(60) NOT NULL,
  `DESCRIPTION` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`COURSEID`, `COURSE`, `DESCRIPTION`) VALUES
(3, 'BSED', 'Bachelor of Science in Secondary Education'),
(4, 'BSCS', 'College of Computer Science'),
(5, 'BSCRIM', 'College of Crimal Justice Education'),
(7, 'STEM', 'SCIENCE & TECHNOLOGY MATHEMATICS'),
(8, 'ABM', 'Accounting and Business Management'),
(9, 'GAS', 'General Academic Strand');

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartment`
--

CREATE TABLE `tbldepartment` (
  `DEPARTMENTID` int(11) NOT NULL,
  `DEPARTMENT` varchar(90) NOT NULL,
  `DESCRIPTION` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldepartment`
--

INSERT INTO `tbldepartment` (`DEPARTMENTID`, `DEPARTMENT`, `DESCRIPTION`) VALUES
(3, 'COLLEGE', 'Wesleyan College Department'),
(4, 'SHS ', 'SENIOR HIGH SCHOOL DEPARTMENT'),
(5, 'JHS', 'JUNIOR HIGH SCHOOL DEPARTMENT');

-- --------------------------------------------------------

--
-- Table structure for table `tblevent`
--

CREATE TABLE `tblevent` (
  `EVENTID` int(11) NOT NULL,
  `EVENT_TEXT` text NOT NULL,
  `EVENT_WHAT` text NOT NULL,
  `EVENT_WHEN` datetime NOT NULL,
  `EVENT_WHERE` varchar(90) NOT NULL,
  `DATEPOSTED` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblfaculty`
--

CREATE TABLE `tblfaculty` (
  `INCID` int(11) NOT NULL,
  `IDNO` varchar(90) NOT NULL,
  `FNAME` varchar(90) NOT NULL,
  `MNAME` varchar(90) NOT NULL,
  `LNAME` varchar(90) NOT NULL,
  `DEPARTMENT` varchar(90) NOT NULL,
  `PHONE` varchar(30) NOT NULL,
  `USERID` varchar(90) NOT NULL,
  `FACPASS` varchar(90) NOT NULL,
  `PROIMAGE` varchar(90) DEFAULT NULL,
  `FORGOTPASSWORD` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tblfaculty`
--

INSERT INTO `tblfaculty` (`INCID`, `IDNO`, `FNAME`, `MNAME`, `LNAME`, `DEPARTMENT`, `PHONE`, `USERID`, `FACPASS`, `PROIMAGE`, `FORGOTPASSWORD`) VALUES
(3, '184343242', 'Cherrys', 'Ana', 'Annes', '3', '13442232323', '6nWCf&zRbKXx', '@Jm4CX', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblstrand`
--

CREATE TABLE `tblstrand` (
  `STRANDID` int(11) NOT NULL,
  `STRAND` varchar(60) DEFAULT NULL,
  `DESCRIPTION1` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tblstrand`
--

INSERT INTO `tblstrand` (`STRANDID`, `STRAND`, `DESCRIPTION1`) VALUES
(1, 'STEM', 'STEM'),
(2, 'ABM', 'ABM'),
(3, 'HUMSS', 'HUMSS'),
(4, 'GAS', 'GAS');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `INCID` int(11) NOT NULL,
  `IDNO` varchar(90) NOT NULL,
  `FNAME` varchar(30) NOT NULL,
  `MNAME` varchar(90) NOT NULL,
  `LNAME` varchar(90) NOT NULL,
  `PHONE` varchar(30) NOT NULL,
  `DEPARTMENT` varchar(90) NOT NULL,
  `YLVL` varchar(50) NOT NULL,
  `COURSE` varchar(90) NOT NULL,
  `USERNAME` varchar(90) NOT NULL,
  `STUDPASS` varchar(90) NOT NULL,
  `PROIMAGE` text DEFAULT NULL,
  `FORGOTPASSAUTH` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`INCID`, `IDNO`, `FNAME`, `MNAME`, `LNAME`, `PHONE`, `DEPARTMENT`, `YLVL`, `COURSE`, `USERNAME`, `STUDPASS`, `PROIMAGE`, `FORGOTPASSAUTH`) VALUES
(13, '184343242', 'Cherry', 'Andrea', 'Anne', '13442232323', '4', '12', '7', 'jc$@Ykus8CHf', 't!Xuzi', 'student_image/71e35f69739ee25b08775ae41a3546e8.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudentnotif`
--

CREATE TABLE `tblstudentnotif` (
  `NotificationID` int(11) NOT NULL,
  `IDNO` varchar(90) NOT NULL,
  `BLOGID` varchar(90) NOT NULL,
  `TYPE` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `USERID` int(11) NOT NULL,
  `NAME` varchar(90) NOT NULL,
  `UEMAIL` varchar(90) NOT NULL,
  `PASS` varchar(90) NOT NULL,
  `TYPE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`USERID`, `NAME`, `UEMAIL`, `PASS`, `TYPE`) VALUES
(4, 'Awit', 'admin', '38f078a81a2b033d197497af5b77f95b50bfcfb8', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messagein`
--
ALTER TABLE `messagein`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `messagelog`
--
ALTER TABLE `messagelog`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IDX_MessageId` (`MessageId`,`SendTime`);

--
-- Indexes for table `messageout`
--
ALTER TABLE `messageout`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IDX_IsRead` (`IsRead`);

--
-- Indexes for table `tblannouncement`
--
ALTER TABLE `tblannouncement`
  ADD PRIMARY KEY (`ANNOUNCEMENTID`);

--
-- Indexes for table `tblautonumbers`
--
ALTER TABLE `tblautonumbers`
  ADD PRIMARY KEY (`AUTOID`);

--
-- Indexes for table `tblblogpost`
--
ALTER TABLE `tblblogpost`
  ADD PRIMARY KEY (`BLOGID`);

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD PRIMARY KEY (`COURSEID`);

--
-- Indexes for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  ADD PRIMARY KEY (`DEPARTMENTID`);

--
-- Indexes for table `tblevent`
--
ALTER TABLE `tblevent`
  ADD PRIMARY KEY (`EVENTID`);

--
-- Indexes for table `tblfaculty`
--
ALTER TABLE `tblfaculty`
  ADD PRIMARY KEY (`INCID`),
  ADD UNIQUE KEY `IDNO` (`IDNO`);

--
-- Indexes for table `tblstrand`
--
ALTER TABLE `tblstrand`
  ADD PRIMARY KEY (`STRANDID`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`INCID`),
  ADD UNIQUE KEY `STUDID` (`IDNO`);

--
-- Indexes for table `tblstudentnotif`
--
ALTER TABLE `tblstudentnotif`
  ADD PRIMARY KEY (`NotificationID`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`USERID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messagein`
--
ALTER TABLE `messagein`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messagelog`
--
ALTER TABLE `messagelog`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messageout`
--
ALTER TABLE `messageout`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblannouncement`
--
ALTER TABLE `tblannouncement`
  MODIFY `ANNOUNCEMENTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20210073;

--
-- AUTO_INCREMENT for table `tblblogpost`
--
ALTER TABLE `tblblogpost`
  MODIFY `BLOGID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20210074;

--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `COURSEID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  MODIFY `DEPARTMENTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblevent`
--
ALTER TABLE `tblevent`
  MODIFY `EVENTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20210074;

--
-- AUTO_INCREMENT for table `tblfaculty`
--
ALTER TABLE `tblfaculty`
  MODIFY `INCID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblstrand`
--
ALTER TABLE `tblstrand`
  MODIFY `STRANDID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `INCID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblstudentnotif`
--
ALTER TABLE `tblstudentnotif`
  MODIFY `NotificationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `USERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
