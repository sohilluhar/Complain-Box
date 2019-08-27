-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2019 at 05:06 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complainbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `admincomplain`
--

CREATE TABLE `admincomplain` (
  `id` int(11) NOT NULL,
  `ogid` int(11) DEFAULT NULL,
  `remark` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admincomplain`
--

INSERT INTO `admincomplain` (`id`, `ogid`, `remark`) VALUES
(1, 1, 'cant solve'),
(2, 51, 'Cant solve'),
(3, 50, 'Cant solve'),
(4, 58, 'Cant solve'),
(6, 49, 'Cant solve'),
(7, 60, 'Cant solve'),
(8, 61, 'Cant solve'),
(9, 46, 'unable to solve'),
(10, 52, 'unable to solve'),
(11, 52, 'unable to solve'),
(12, 39, 'abcd'),
(13, 38, ''),
(14, 53, ''),
(15, 18, '');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(11) NOT NULL,
  `description` varchar(10000) DEFAULT NULL,
  `complainimg` varchar(100) NOT NULL,
  `Departmentname` varchar(50) DEFAULT NULL,
  `complaindate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(30) DEFAULT NULL,
  `complainant` varchar(50) NOT NULL,
  `complainantmail` varchar(50) NOT NULL,
  `building` varchar(500) NOT NULL,
  `location` varchar(500) NOT NULL,
  `time_constraint` int(11) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `description`, `complainimg`, `Departmentname`, `complaindate`, `status`, `complainant`, `complainantmail`, `building`, `location`, `time_constraint`, `cost`) VALUES
(1, 'Door is not opening properly in B205', 'assets/pictures/carp.jpg', 'Carpenter', '2019-08-19 13:19:09', 'Resolved', 'Sohil Luhar', 'sohil.luhar@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', 'Room number 201', 1, 0),
(2, 'Window in broken in B301', 'assets/pictures/carp.jpg', 'Carpenter', '2019-08-19 13:19:59', 'Pending', 'Sohil Luhar', 'sohil.luhar@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', 'Room number 201', 0, 0),
(3, 'Desk is broken needs to be changed', 'assets/pictures/carp.jpg', 'Carpenter', '2019-08-19 15:05:17', 'Resolved', 'Sohil Luhar', 'sohil.luhar@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', 'Room number 201', 0, 0),
(18, 'my wifi is not working', 'assets/pictures/carp.jpg', 'Networking', '2019-08-20 13:53:27', 'In-Progress#', 'Sohil Luhar', 'sohil.luhar@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', 'Room number 201', 0, 0),
(25, 'networking test', 'assets/pictures/welding.jpg', 'Networking', '2019-08-20 16:17:23', 'Pending', 'Sohil Luhar', 'sohil.luhar@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', 'Room number 201', 0, 0),
(26, 'complain in carpenter department describe all problem here', 'assets/pictures/welding.jpg', 'Carpenter', '2019-08-20 16:22:38', 'Pending', 'Sohil Luhar', 'sohil.luhar@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', 'Room number 201', 0, 0),
(27, 'i am doing complain in network department', 'assets/pictures/welding.jpg', 'Networking', '2019-08-20 16:24:25', 'Pending', 'Sohil Luhar', 'sohil.luhar@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', 'Room number 201', 0, 0),
(28, 'testing .... ', 'assets/pictures/welding.jpg', 'Networking', '2019-08-20 16:32:38', 'Pending', 'Sohil Luhar', 'sohil.luhar@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', 'Room number 201', 0, 0),
(29, 'test...', 'assets/pictures/welding.jpg', 'Networking', '2019-08-20 16:33:55', 'In-Progress', 'Sohil Luhar', 'sohil.luhar@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', 'Room number 201', 1, 0),
(33, 'final test', 'assets/pictures/welding.jpg', 'Carpenter', '2019-08-20 20:02:03', 'Pending', 'Sohil Luhar', 'sohil.luhar@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', 'Room number 201', 0, 0),
(36, 'test with img', 'assets/img/53f3d6639270ca99a946be94133dea22.jpg', 'Carpenter', '2019-08-21 06:39:50', 'Pending', 'Sohil Luhar', 'sohil.luhar@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', 'Room number 201', 0, 0),
(37, 'cleaning complain', 'assets/img/3521189c8b15ce2d41173cbe316106b3.jpg', 'Cleaning', '2019-08-21 15:32:04', 'Pending', 'Sohil Luhar', 'sohil.luhar@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', 'Room number 201', 0, 0),
(38, 'complain related to networking', '', 'Networking', '2019-08-22 14:21:13', 'Resolved#', 'SOHIL LUHAR', 'sohil.l@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', 'Room number 201', 0, 500),
(39, 'networking complain', 'assets/img/22-08-2019-17-30-57-Chrysanthemum.jpg', 'Networking', '2019-08-22 14:30:57', 'Resolved#', 'SOHIL LUHAR', 'sohil.l@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', 'Room number 201', 0, 500),
(40, 'complain in carpenter dept get email if dept also', 'assets/img/22-08-2019-17-42-04-Penguins.jpg', 'Carpenter', '2019-08-22 14:42:04', 'Pending', 'SOHIL LUHAR', 'sohil.l@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', 'Room number 201', 0, 0),
(41, 'testing for dept mail', 'assets/img/22-08-2019-17-43-33-Hydrangeas.jpg', 'Carpenter', '2019-08-22 14:43:33', 'Pending', 'SOHIL LUHAR', 'sohil.l@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', 'Room number 201', 0, 0),
(42, 'testing', 'assets/img/22-08-2019-17-45-28-Lighthouse.jpg', 'Carpenter', '2019-08-22 14:45:28', 'Pending', 'SOHIL LUHAR', 'sohil.l@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', 'Room number 201', 0, 0),
(43, 'test complain for carpenter', 'assets/img/22-08-2019-22-18-57-Lighthouse.jpg', 'Carpenter', '2019-08-22 19:18:57', 'Pending', 'Sohil Luhar', 'sohil.luhar@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', 'Room number 201', 0, 0),
(44, 'test complain', '', 'Carpenter', '2019-08-22 19:30:51', 'Resolved', 'Sohil Luhar', 'sohil.luhar@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', 'Room number 201', 1, 0),
(45, 'test', 'assets/img/22-08-2019-22-32-43-Capture.PNG', 'Carpenter', '2019-08-22 19:32:43', 'Pending', 'Sohil Luhar', 'sohil.luhar@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', 'Room number 201', 0, 0),
(46, 'testing ...', '', 'Carpenter', '2019-08-22 19:41:29', 'Resolved#', 'Sohil Luhar', 'sohil.luhar@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', 'Room number 201', 0, 500),
(49, 'test complain with jpg', 'assets/img/23-08-2019-20-23-04-Koala.jpg', 'Carpenter', '2019-08-23 17:23:04', 'Resolved#', 'Sohil Luhar', 'sohil.luhar@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', 'Room number 201', 0, 100),
(50, 'test', '', 'Carpenter', '2019-08-23 17:25:31', 'Resolved', 'Sohil Luhar', 'sohil.luhar@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', 'Room number 201', 1, 0),
(51, 'test', 'assets/img/23-08-2019-20-28-23-Capture.PNG', 'Carpenter', '2019-08-23 17:28:23', 'Resolved', 'Sohil Luhar', 'sohil.luhar@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', 'Room number 201', 1, 0),
(52, 'wifi is not working', '', 'Networking', '2019-08-25 11:50:00', 'Resolved#', 'PARTH SHETH', 'sheth.pr@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', 'lab 207', 0, 100),
(53, 'wifi is not working', '', 'Networking', '2019-08-25 11:57:02', 'Resolved#', 'PARTH SHETH', 'sheth.pr@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', 'lab 207', 0, 500),
(54, 'lets complain...', '', 'Cleaning', '2019-08-25 12:21:53', 'Pending', 'PARTH SHETH', 'sheth.pr@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', '203', 0, 0),
(55, 'problem here', '', 'test', '2019-08-25 12:47:41', 'In-Progress', 'PARTH SHETH', 'sheth.pr@somaiya.edu', 'KJ SOMAIYA SCIENCE AND COMMERCE BUILDING', 'room 201', 5, 0),
(58, 'testing carpenter', '', 'Carpenter', '2019-08-26 02:34:37', 'Resolved', 'PARTH SHETH', 'sheth.pr@somaiya.edu', 'BHASKARACHARYA', '203', 1, 0),
(59, 'tets', 'assets/img/26-08-2019-09-35-47-Capture.PNG', 'Carpenter', '2019-08-26 04:05:47', 'In-Progress', 'PARTH SHETH', 'sheth.pr@somaiya.edu', 'KJ SOMAIYA SCIENCE AND COMMERCE BUILDING', '203', 1, 0),
(60, 'test complain', 'assets/img/26-08-2019-13-18-19-Physics JEE Main.JPG', 'Carpenter', '2019-08-26 07:48:19', 'Resolved#', 'PARTH SHETH', 'sheth.pr@somaiya.edu', 'BHASKARACHARYA', '101', 0, 500),
(61, 'Despite defining the area assigned to each vehicle, cars are parked amidst two parking spots. \r\nOne vehicle occupies the space for 2-3 vehicles leading to mismanagement. Two-wheelers \r\nare placed nowhere near the allotted zone. This creates problem for other people as they \r\nhave to then spend a lot of time finding parking spots in other localities. It induces \r\nfrustration and tension for safety of vehicles', 'assets/img/27-08-2019-05-40-45-Penguins.jpg', 'Carpenter', '2019-08-27 00:10:45', 'In-Progress', 'PARTH SHETH', 'sheth.pr@somaiya.edu', 'ARYABHATTA ENGINEERING BUILDING', '203', 4, 0),
(62, 'TEST', '', 'Networking', '2019-08-27 04:56:02', 'In-Progress', 'PARTH SHETH', 'sheth.pr@somaiya.edu', 'BHASKARACHARYA', '203', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `dname` varchar(30) DEFAULT NULL,
  `deptimg` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dname`, `deptimg`) VALUES
(1, 'Carpenter', 'assets/pictures/carp.jpg'),
(2, 'Networking', 'assets/pictures/network.png\r\n'),
(4, 'Cleaning', 'assets/pictures/download.png'),
(8, 'test', 'assets/pictures/download.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `usertype` varchar(20) DEFAULT NULL,
  `Imgurl` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `password`, `usertype`, `Imgurl`) VALUES
(1, 'Carpenter', 'Carpenter', 'sohil.luhar@somaiya.edu', '1234', 'Department', 'https://lh3.googleusercontent.com/a-/AAuE7mAbhWd2Kit5xCUWw7FdrSthnhybZxIljFYj61idgQ=s96-c'),
(6, 'Networking', 'Networking', 'saurabhkumar.t@somaiya.edu', '123', 'Department', 'https://lh4.googleusercontent.com/-JDkrAd_uw64/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rfRL_wdizFA_IXtyqPMDG3wlm0oNA/s96-c/photo.jpg'),
(7, 'Cleaning', 'Cleaning', 'sohil.luhar1@somaiya.edu', '1234', 'Department', 'https://lh3.googleusercontent.com/a-/AAuE7mADj06SSwdTWP8WEF_xqpSEa_yAPhQcIS9nSiTG=s96-c'),
(8, 'admin', 'admin', 'sohil.l@somaiya.edu', '123', 'admin', 'https://lh3.googleusercontent.com/a-/AAuE7mAbhWd2Kit5xCUWw7FdrSthnhybZxIljFYj61idgQ=s96-c'),
(12, 'Sohil Luhar', 'sohil', 'sohil.luhar1@somaiya.edu', '123', 'User', 'https://lh3.googleusercontent.com/a-/AAuE7mADj06SSwdTWP8WEF_xqpSEa_yAPhQcIS9nSiTG=s96-c'),
(14, 'PARTH SHETH', '123', 'sheth.pr@somaiya.edu', '123', 'User', 'https://lh6.googleusercontent.com/-H8SDs1ZNIcI/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rd-NxcWfCQWfXpWTRRHQZH0oYOC3A/s96-c/photo.jpg'),
(18, 'test', 'test', 'abcde@gmail.com', '123', 'Department', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admincomplain`
--
ALTER TABLE `admincomplain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admincomplain`
--
ALTER TABLE `admincomplain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
