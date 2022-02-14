-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 02:29 PM
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
-- Database: `cman`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `Bank_Name` varchar(200) DEFAULT NULL,
  `Account_Number` varchar(200) DEFAULT NULL,
  `Branch` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `Bank_Name`, `Account_Number`, `Branch`) VALUES
(1, 'LIPA NA MPESA', '11111110', 'Safaricom'),
(2, 'COPARATIVE BANK', '0213289993', 'Meru'),
(3, 'NATIONAL BANK', '099887765666', 'Meru'),
(4, 'COMMERCIAL BANK', '3476374654623', 'Meru'),
(5, 'STARDAND CHARTER', '345646332', 'Meru'),
(6, 'EQUIT BANK', '21242423432', 'Meru');

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `activity_log_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `action` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`activity_log_id`, `username`, `date`, `action`) VALUES
(1, '', '2017-01-10 16:41:42', 'Added member 0723437369'),
(2, 'admin', '2017-01-11 10:19:34', 'Edited Member Kithinji'),
(3, 'admin', '2017-01-11 10:23:28', 'Edited Member Kithinji'),
(4, 'admin', '2017-01-11 10:26:45', 'Edited Member Kithinji'),
(5, 'admin', '2017-01-11 10:28:02', 'Edited Member Kithinji'),
(6, 'admin', '2017-01-11 10:29:31', 'Edited Member Kithinji'),
(7, 'admin', '2017-01-11 10:32:58', 'Edited Member Kithinji'),
(8, 'admin', '2017-01-11 10:33:24', 'Edited Member Kithinji'),
(9, 'admin', '2017-01-11 10:34:24', 'Added member 0725873436'),
(10, 'admin', '2017-01-11 11:13:12', 'Edited Visitor Kithinji'),
(11, 'admin', '2017-01-11 11:16:00', 'Edited Visitor Kithinji'),
(12, 'admin', '2017-01-11 19:19:32', 'Added member 0725873436'),
(13, 'admin', '2017-01-11 19:20:31', 'Added member 725873436'),
(14, '', '2017-01-12 06:05:26', 'Added member 00000000000'),
(15, '', '2017-02-15 05:54:40', 'Added member 0733997722'),
(16, 'admin', '2017-02-20 12:30:16', 'Edited member Kithinji'),
(17, 'admin', '2021-10-25 12:30:49', 'Edited member Wesley');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(128) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `adminthumbnails` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `username`, `password`, `adminthumbnails`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'uploads/cc.png');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announcement_id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `times` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announcement_id`, `title`, `content`, `times`) VALUES
(1, 'notice', 'ALL FEES SHOULD BE PAID THROUGH THE ACCOUNTS GIVEN. NO CASH WILL BE ACCEPTED', '2016-10-24');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(100) NOT NULL,
  `Title` text NOT NULL,
  `Date` date NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `Title`, `Date`, `content`) VALUES
(1, 'kenya', '2017-02-24', 'Prayer day'),
(2, 'geegeg', '2017-02-24', 'egegegeg'),
(3, 'kenya', '2017-02-24', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `giving`
--

CREATE TABLE `giving` (
  `givingid` int(10) NOT NULL,
  `Amount` varchar(100) DEFAULT NULL,
  `Trcode` varchar(100) DEFAULT NULL,
  `paytime` timestamp NULL DEFAULT current_timestamp(),
  `na` varchar(10) DEFAULT NULL,
  `ya` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `giving`
--

INSERT INTO `giving` (`givingid`, `Amount`, `Trcode`, `paytime`, `na`, `ya`) VALUES
(1, '1000', 'KKKSJKJS', '2016-10-23 19:13:02', '0725873436', 'Church Mission'),
(2, '2000', 'KAJHDJHJD', '2016-10-23 19:42:17', '0725873436', 'Mjengo'),
(4, '2000', 'KAJHDJHJD', '2016-10-23 19:47:43', '0725873436', 'Mjengo'),
(5, '5500', 'WEADADADD', '2017-01-11 10:35:31', '0725873436', 'Godfrey Kithinji'),
(6, '3000', 'ttytegfdg', '2017-01-11 10:38:41', '0725873436', 'Rent');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `keyu` int(10) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `sname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `Birthday` varchar(100) DEFAULT NULL,
  `Residence` varchar(100) DEFAULT NULL,
  `pob` varchar(100) DEFAULT NULL,
  `ministry` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `thumbnail` varchar(500) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `id` varchar(10) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`keyu`, `fname`, `sname`, `lname`, `Gender`, `Birthday`, `Residence`, `pob`, `ministry`, `mobile`, `email`, `thumbnail`, `password`, `id`, `date`) VALUES
(7, 'Wesley', 'Wesley', 'Wesley', 'Select Gender', '2021-10-05', 'Nai', 'pob', 'ministry', 'Wesley', 'sindewesley5@gmail.com', 'images\\none.png', '4552', '0987', '2021-10-25 09:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `offering`
--

CREATE TABLE `offering` (
  `offeringid` int(10) NOT NULL,
  `Amount` varchar(100) DEFAULT NULL,
  `Trcode` varchar(100) DEFAULT NULL,
  `paytime` timestamp NULL DEFAULT current_timestamp(),
  `na` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offering`
--

INSERT INTO `offering` (`offeringid`, `Amount`, `Trcode`, `paytime`, `na`) VALUES
(1, '2000', 'KAJHDJHJD', '2016-10-23 19:55:47', '0725873436'),
(2, '8000', 'WEADADADD', '2017-01-11 10:05:39', '0725873436'),
(3, '8000', 'WWEDDDDDS', '2017-01-11 12:24:29', '0725873436');

-- --------------------------------------------------------

--
-- Table structure for table `slotsreserved`
--

CREATE TABLE `slotsreserved` (
  `eventId` int(11) NOT NULL,
  `eventDate` date NOT NULL,
  `title` varchar(1000) NOT NULL,
  `u_id` varchar(55) NOT NULL,
  `slots` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slotsreserved`
--

INSERT INTO `slotsreserved` (`eventId`, `eventDate`, `title`, `u_id`, `slots`, `description`, `created`) VALUES
(1, '2021-10-27', 'Fellowship Work', '863', '10', 'We will worship', '2021-10-26 06:33:59'),
(3, '2021-11-05', 'Vespers', '1', '150', 'We will have prayers for our pastor who is sick', '2021-10-26 09:26:16');

-- --------------------------------------------------------

--
-- Table structure for table `sportreserve`
--

CREATE TABLE `sportreserve` (
  `id` int(11) NOT NULL,
  `slots` varchar(1000) NOT NULL,
  `na` int(11) NOT NULL,
  `eventId` int(11) NOT NULL,
  `eventDate` date NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sportreserve`
--

INSERT INTO `sportreserve` (`id`, `slots`, `na`, `eventId`, `eventDate`, `created`) VALUES
(1, '2', 987, 1, '2021-10-29', '2021-10-26 08:41:00'),
(2, '3', 987, 1, '2021-10-29', '2021-10-26 08:41:20'),
(3, '4', 987, 1, '2021-10-29', '2021-10-26 08:54:09'),
(4, '3', 987, 2, '2021-10-29', '2021-10-26 08:41:13'),
(5, '2', 987, 2, '2021-10-29', '2021-10-26 08:41:09'),
(6, '6', 987, 2, '2021-10-29', '2021-10-26 08:41:04'),
(7, '1', 987, 2, '2021-10-28', '2021-10-26 08:46:02'),
(8, '2', 987, 2, '2021-10-28', '2021-10-26 08:47:23');

-- --------------------------------------------------------

--
-- Table structure for table `sundays`
--

CREATE TABLE `sundays` (
  `keyu` int(10) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `sname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `Birthday` varchar(100) DEFAULT NULL,
  `Residence` varchar(100) DEFAULT NULL,
  `pob` varchar(100) DEFAULT NULL,
  `ministry` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `thumbnail` varchar(500) DEFAULT NULL,
  `id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sundays`
--

INSERT INTO `sundays` (`keyu`, `fname`, `sname`, `lname`, `Gender`, `Birthday`, `Residence`, `pob`, `ministry`, `mobile`, `thumbnail`, `id`) VALUES
(1, 'Godfrey', 'Kithinji', 'Kithinji', '', '2015-09-01', 'Nairobi', 'Nairobi', 'SoftMaven Technologies', '725873436', 'uploads/none.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teens`
--

CREATE TABLE `teens` (
  `keyu` int(10) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `sname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `Birthday` varchar(100) DEFAULT NULL,
  `Residence` varchar(100) DEFAULT NULL,
  `pob` varchar(100) DEFAULT NULL,
  `ministry` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `thumbnail` varchar(500) DEFAULT NULL,
  `id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teens`
--

INSERT INTO `teens` (`keyu`, `fname`, `sname`, `lname`, `Gender`, `Birthday`, `Residence`, `pob`, `ministry`, `mobile`, `thumbnail`, `id`) VALUES
(1, 'Aron', 'Mwingirwa', 'Mutia', '', '2007-03-12', 'Meru', 'meru', 'kithinji Godfrey', '0725873436', 'uploads/none.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tithe`
--

CREATE TABLE `tithe` (
  `titheid` int(10) NOT NULL,
  `Amount` varchar(100) DEFAULT NULL,
  `Trcode` varchar(100) DEFAULT NULL,
  `paytime` timestamp NULL DEFAULT current_timestamp(),
  `na` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tithe`
--

INSERT INTO `tithe` (`titheid`, `Amount`, `Trcode`, `paytime`, `na`) VALUES
(1, '1000', 'KMSMBNJDW', '2016-10-23 15:38:57', '0725873436'),
(2, '2000', 'KAJHDJHJD', '2016-10-23 19:52:58', '0725873436'),
(3, '8000', 'WEADADADD', '2017-01-11 09:57:26', '0725873436'),
(4, '3000', 'uytr', '2021-10-25 09:16:06', '0987');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `user_log_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `login_date` varchar(30) NOT NULL,
  `logout_date` varchar(128) NOT NULL,
  `admin_id` int(128) NOT NULL,
  `student_id` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(10) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `sname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `Birthday` varchar(100) DEFAULT NULL,
  `Residence` varchar(100) DEFAULT NULL,
  `pob` varchar(100) DEFAULT NULL,
  `ministry` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `thumbnail` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `fname`, `sname`, `lname`, `Gender`, `Birthday`, `Residence`, `pob`, `ministry`, `mobile`, `thumbnail`) VALUES
(1, 'Godfrey', 'Kithinji', 'Mutia', 'Male', '1989-01-31', 'Nairobi', 'Nairobi', 'Sunday Service', '0725873436', 'uploads/none.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`activity_log_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giving`
--
ALTER TABLE `giving`
  ADD PRIMARY KEY (`givingid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`keyu`);

--
-- Indexes for table `offering`
--
ALTER TABLE `offering`
  ADD PRIMARY KEY (`offeringid`);

--
-- Indexes for table `slotsreserved`
--
ALTER TABLE `slotsreserved`
  ADD PRIMARY KEY (`eventId`);

--
-- Indexes for table `sportreserve`
--
ALTER TABLE `sportreserve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sundays`
--
ALTER TABLE `sundays`
  ADD PRIMARY KEY (`keyu`);

--
-- Indexes for table `teens`
--
ALTER TABLE `teens`
  ADD PRIMARY KEY (`keyu`);

--
-- Indexes for table `tithe`
--
ALTER TABLE `tithe`
  ADD PRIMARY KEY (`titheid`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`user_log_id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `activity_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `giving`
--
ALTER TABLE `giving`
  MODIFY `givingid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `keyu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `offering`
--
ALTER TABLE `offering`
  MODIFY `offeringid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slotsreserved`
--
ALTER TABLE `slotsreserved`
  MODIFY `eventId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sportreserve`
--
ALTER TABLE `sportreserve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sundays`
--
ALTER TABLE `sundays`
  MODIFY `keyu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teens`
--
ALTER TABLE `teens`
  MODIFY `keyu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tithe`
--
ALTER TABLE `tithe`
  MODIFY `titheid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `user_log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
