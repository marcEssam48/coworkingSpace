-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2017 at 12:39 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workingspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blogid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `structure` varchar(255) NOT NULL,
  `imgpath` varchar(255) DEFAULT NULL,
  `blogdate` date DEFAULT NULL,
  `publisher` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blogid`, `userid`, `title`, `structure`, `imgpath`, `blogdate`, `publisher`) VALUES
(28, 1, 'islam', '123', '0', '2017-05-07', ''),
(29, 1, 'isao', 'asds', '../resources/images/19.jpg', '2017-05-07', ''),
(30, 1, 'what is oop?', 'Object Orianted Programing', '0', '2017-05-08', ''),
(31, 1, 'swimming in the sea ', 'that very goog for your health', '0', '2017-05-08', '');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingid` int(11) NOT NULL,
  `bookingdate` date NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `roomid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `userdeposit` int(11) NOT NULL DEFAULT '500',
  `booked` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `bookingdate`, `starttime`, `endtime`, `roomid`, `userid`, `userdeposit`, `booked`) VALUES
(1, '0000-00-00', '00:00:00', '00:00:00', 0, 0, 500, 0);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookid` int(11) NOT NULL,
  `bookname` varchar(55) NOT NULL,
  `authorname` varchar(55) NOT NULL,
  `booktype` varchar(55) NOT NULL,
  `bookpdf` varchar(1000) NOT NULL,
  `bookimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookid`, `bookname`, `authorname`, `booktype`, `bookpdf`, `bookimg`) VALUES
(1, 'network', 'vesion', 'AC', '../../site/resources/pdf/edit.pdf', '../../site/resources/images/18033392_10213158743270293_6503733852301987959_n.jpg'),
(2, 'edit', 'the star', 'romantic', '../../site/resources/pdf/edit.pdf', '../../site/resources/images/18033392_10213158743270293_6503733852301987959_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentid` int(11) NOT NULL,
  `blogcomment` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL,
  `blogid` int(11) NOT NULL,
  `commentdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`commentid`, `blogcomment`, `userid`, `blogid`, `commentdate`) VALUES
(6, 'wow that helped me thank you!', 1, 30, '2017-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactid` int(11) NOT NULL,
  `firstname` varchar(55) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `subject` varchar(55) CHARACTER SET utf8mb4 NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactid`, `firstname`, `lastname`, `email`, `phone`, `subject`, `message`) VALUES
(7, 'islam', 'islam', 'islam.gad111@gmail.com', '123', 'testing', 'testeeeeeeeeeeer');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseid` int(11) NOT NULL,
  `coursetitle` varchar(55) NOT NULL,
  `coursecontent` varchar(255) NOT NULL,
  `instructorname` varchar(55) NOT NULL,
  `courserate` int(11) NOT NULL,
  `courseprice` int(11) NOT NULL,
  `coursestart` date NOT NULL,
  `courseend` date NOT NULL,
  `coursestatus` int(11) NOT NULL DEFAULT '0',
  `courseimg` varchar(255) NOT NULL,
  `joinedcourses` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseid`, `coursetitle`, `coursecontent`, `instructorname`, `courserate`, `courseprice`, `coursestart`, `courseend`, `coursestatus`, `courseimg`, `joinedcourses`) VALUES
(1, 'body language', 'body language course to know more without speaking', 'Islam Gad', 3, 2000, '2017-05-08', '2017-05-31', 1, '../resources/images/19.jpg', 1),
(2, 'english', 'Do you speak English? \r\nso you have to join this course ', 'Muhammad', 5, 0, '2017-12-31', '2017-12-31', 1, '../resources/images/19.jpg', 1),
(3, 'italiano', 'daventa alla case che un bar', 'alaa', 0, 0, '2017-12-31', '2017-12-31', 0, '../resources/images/17361819_1538143199551843_5635454596934254846_n.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `coursename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `day`, `time`, `coursename`) VALUES
(1, 'MONDAY', '12:00:00', '123'),
(2, 'MONDAY', '01:00:00', '123'),
(3, 'MONDAY', '02:00:00', ''),
(4, 'MONDAY', '03:00:00', ''),
(5, 'MONDAY', '04:00:00', ''),
(6, 'MONDAY', '05:00:00', ''),
(7, 'MONDAY', '06:00:00', ''),
(8, 'MONDAY', '07:00:00', ''),
(9, 'MONDAY', '08:00:00', ''),
(10, 'MONDAY', '09:00:00', ''),
(11, 'MONDAY', '10:00:00', ''),
(12, 'MONDAY', '11:00:00', ''),
(13, 'TUESDAY', '12:00:00', ''),
(14, 'TUESDAY', '01:00:00', ''),
(15, 'TUESDAY', '02:00:00', ''),
(16, 'TUESDAY', '03:00:00', ''),
(17, 'TUESDAY', '04:00:00', ''),
(18, 'TUESDAY', '05:00:00', ''),
(19, 'TUESDAY', '06:00:00', ''),
(20, 'TUESDAY', '07:00:00', ''),
(21, 'TUESDAY', '08:00:00', ''),
(22, 'TUESDAY', '09:00:00', ''),
(23, 'TUESDAY', '10:00:00', ''),
(24, 'TUESDAY', '11:00:00', ''),
(25, 'WEDENESDAY', '12:00:00', ''),
(26, 'WEDENESDAY', '01:00:00', ''),
(27, 'WEDENESDAY', '02:00:00', ''),
(28, 'WEDENESDAY', '03:00:00', ''),
(29, 'WEDENESDAY', '04:00:00', ''),
(30, 'WEDENESDAY', '05:00:00', ''),
(31, 'WEDENESDAY', '06:00:00', ''),
(32, 'WEDENESDAY', '07:00:00', ''),
(33, 'WEDENESDAY', '08:00:00', ''),
(34, 'WEDENESDAY', '09:00:00', ''),
(35, 'WEDENESDAY', '10:00:00', ''),
(36, 'WEDENESDAY', '11:00:00', ''),
(37, 'THURSDAY', '12:00:00', ''),
(38, 'THURSDAY', '01:00:00', ''),
(39, 'THURSDAY', '02:00:00', ''),
(40, 'THURSDAY', '03:00:00', ''),
(41, 'THURSDAY', '04:00:00', ''),
(42, 'THURSDAY', '05:00:00', ''),
(43, 'THURSDAY', '06:00:00', ''),
(44, 'THURSDAY', '07:00:00', ''),
(45, 'THURSDAY', '08:00:00', ''),
(46, 'THURSDAY', '09:00:00', ''),
(47, 'THURSDAY', '10:00:00', ''),
(48, 'THURSDAY', '11:00:00', ''),
(49, 'FRIDAY', '12:00:00', ''),
(50, 'FRIDAY', '01:00:00', ''),
(51, 'FRIDAY', '02:00:00', ''),
(52, 'FRIDAY', '03:00:00', ''),
(53, 'FRIDAY', '04:00:00', ''),
(54, 'FRIDAY', '05:00:00', ''),
(55, 'FRIDAY', '06:00:00', ''),
(56, 'FRIDAY', '07:00:00', ''),
(57, 'FRIDAY', '08:00:00', ''),
(58, 'FRIDAY', '09:00:00', ''),
(59, 'FRIDAY', '10:00:00', ''),
(60, 'FRIDAY', '11:00:00', ''),
(61, 'SATURDAY', '12:00:00', ''),
(62, 'SATURDAY', '01:00:00', ''),
(63, 'SATURDAY', '02:00:00', ''),
(64, 'SATURDAY', '03:00:00', ''),
(65, 'SATURDAY', '04:00:00', ''),
(66, 'SATURDAY', '05:00:00', ''),
(67, 'SATURDAY', '06:00:00', ''),
(68, 'SATURDAY', '07:00:00', ''),
(69, 'SATURDAY', '08:00:00', ''),
(70, 'SATURDAY', '09:00:00', ''),
(71, 'SATURDAY', '10:00:00', ''),
(72, 'SATURDAY', '11:00:00', ''),
(73, 'SUNDAY', '12:00:00', ''),
(74, 'SUNDAY', '01:00:00', ''),
(75, 'SUNDAY', '02:00:00', ''),
(76, 'SUNDAY', '03:00:00', ''),
(77, 'SUNDAY', '04:00:00', ''),
(78, 'SUNDAY', '05:00:00', ''),
(79, 'SUNDAY', '06:00:00', ''),
(80, 'SUNDAY', '07:00:00', ''),
(81, 'SUNDAY', '08:00:00', ''),
(82, 'SUNDAY', '09:00:00', ''),
(83, 'SUNDAY', '10:00:00', ''),
(84, 'SUNDAY', '11:00:00', ''),
(85, 'MONDAY', '12:00:00', '123'),
(86, 'MONDAY', '01:00:00', '123'),
(87, 'MONDAY', '02:00:00', ''),
(88, 'MONDAY', '03:00:00', ''),
(89, 'MONDAY', '04:00:00', ''),
(90, 'MONDAY', '05:00:00', ''),
(91, 'MONDAY', '06:00:00', ''),
(92, 'MONDAY', '07:00:00', ''),
(93, 'MONDAY', '08:00:00', ''),
(94, 'MONDAY', '09:00:00', ''),
(95, 'MONDAY', '10:00:00', ''),
(96, 'MONDAY', '11:00:00', ''),
(97, 'TUESDAY', '12:00:00', ''),
(98, 'TUESDAY', '01:00:00', ''),
(99, 'TUESDAY', '02:00:00', ''),
(100, 'TUESDAY', '03:00:00', ''),
(101, 'TUESDAY', '04:00:00', ''),
(102, 'TUESDAY', '05:00:00', ''),
(103, 'TUESDAY', '06:00:00', ''),
(104, 'TUESDAY', '07:00:00', ''),
(105, 'TUESDAY', '08:00:00', ''),
(106, 'TUESDAY', '09:00:00', ''),
(107, 'TUESDAY', '10:00:00', ''),
(108, 'TUESDAY', '11:00:00', ''),
(109, 'WEDENESDAY', '12:00:00', ''),
(110, 'WEDENESDAY', '01:00:00', ''),
(111, 'WEDENESDAY', '02:00:00', ''),
(112, 'WEDENESDAY', '03:00:00', ''),
(113, 'WEDENESDAY', '04:00:00', ''),
(114, 'WEDENESDAY', '05:00:00', ''),
(115, 'WEDENESDAY', '06:00:00', ''),
(116, 'WEDENESDAY', '07:00:00', ''),
(117, 'WEDENESDAY', '08:00:00', ''),
(118, 'WEDENESDAY', '09:00:00', ''),
(119, 'WEDENESDAY', '10:00:00', ''),
(120, 'WEDENESDAY', '11:00:00', ''),
(121, 'THURSDAY', '12:00:00', ''),
(122, 'THURSDAY', '01:00:00', ''),
(123, 'THURSDAY', '02:00:00', ''),
(124, 'THURSDAY', '03:00:00', ''),
(125, 'THURSDAY', '04:00:00', ''),
(126, 'THURSDAY', '05:00:00', ''),
(127, 'THURSDAY', '06:00:00', ''),
(128, 'THURSDAY', '07:00:00', ''),
(129, 'THURSDAY', '08:00:00', ''),
(130, 'THURSDAY', '09:00:00', ''),
(131, 'THURSDAY', '10:00:00', ''),
(132, 'THURSDAY', '11:00:00', ''),
(133, 'FRIDAY', '12:00:00', ''),
(134, 'FRIDAY', '01:00:00', ''),
(135, 'FRIDAY', '02:00:00', ''),
(136, 'FRIDAY', '03:00:00', ''),
(137, 'FRIDAY', '04:00:00', ''),
(138, 'FRIDAY', '05:00:00', ''),
(139, 'FRIDAY', '06:00:00', ''),
(140, 'FRIDAY', '07:00:00', ''),
(141, 'FRIDAY', '08:00:00', ''),
(142, 'FRIDAY', '09:00:00', ''),
(143, 'FRIDAY', '10:00:00', ''),
(144, 'FRIDAY', '11:00:00', ''),
(145, 'SATURDAY', '12:00:00', ''),
(146, 'SATURDAY', '01:00:00', ''),
(147, 'SATURDAY', '02:00:00', ''),
(148, 'SATURDAY', '03:00:00', ''),
(149, 'SATURDAY', '04:00:00', ''),
(150, 'SATURDAY', '05:00:00', ''),
(151, 'SATURDAY', '06:00:00', ''),
(152, 'SATURDAY', '07:00:00', ''),
(153, 'SATURDAY', '08:00:00', ''),
(154, 'SATURDAY', '09:00:00', ''),
(155, 'SATURDAY', '10:00:00', ''),
(156, 'SATURDAY', '11:00:00', ''),
(157, 'SUNDAY', '12:00:00', ''),
(158, 'SUNDAY', '01:00:00', ''),
(159, 'SUNDAY', '02:00:00', ''),
(160, 'SUNDAY', '03:00:00', ''),
(161, 'SUNDAY', '04:00:00', ''),
(162, 'SUNDAY', '05:00:00', ''),
(163, 'SUNDAY', '06:00:00', ''),
(164, 'SUNDAY', '07:00:00', ''),
(165, 'SUNDAY', '08:00:00', ''),
(166, 'SUNDAY', '09:00:00', ''),
(167, 'SUNDAY', '10:00:00', ''),
(168, 'SUNDAY', '11:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL COMMENT 'to identify user',
  `username` varchar(22) NOT NULL COMMENT 'username',
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL COMMENT 'password to login ',
  `phonenumber` varchar(22) CHARACTER SET latin1 NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `groupid` int(11) NOT NULL DEFAULT '0' COMMENT 'identify user group ',
  `ratingstatus` int(11) NOT NULL DEFAULT '0' COMMENT 'instructor rating ',
  `regstatus` int(11) NOT NULL DEFAULT '0' COMMENT 'user approval',
  `regdate` date NOT NULL COMMENT 'registered date on db'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `email`, `password`, `phonenumber`, `fullname`, `groupid`, `ratingstatus`, `regstatus`, `regdate`) VALUES
(1, 'islamo', 'islam.gad111@gmail.com', '123456789', '01114261850', 'asdad', 1, 0, 1, '2017-05-04'),
(2, 'islamgad', 'isla@i.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '65420', '123', 0, 0, 1, '2017-05-04'),
(17, 'islam', 'islam.gad111@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '01114261850', 'islam gado', 1, 0, 1, '2017-05-08'),
(18, 'alaa', 'alaa@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '01114898750', 'alaa rashed', 1, 0, 0, '2017-05-08'),
(19, 'marc', 'marc@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '0111452147', '', 0, 0, 0, '2017-05-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blogid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `publisher` (`publisher`),
  ADD KEY `publisher_2` (`publisher`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `blogid` (`blogid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD KEY `username_3` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blogid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'to identify user', AUTO_INCREMENT=20;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`blogid`) REFERENCES `blog` (`blogid`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
