-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2019 at 05:37 PM
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
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(11) NOT NULL,
  `description` varchar(10000) DEFAULT NULL,
  `Departmentname` varchar(50) DEFAULT NULL,
  `complaindate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `description`, `Departmentname`, `complaindate`, `status`) VALUES
(1, 'Door is not opening properly in B205', 'Carpenter', '2019-08-19 13:19:09', 'Pending'),
(2, 'Window in broken in B301', 'Carpenter', '2019-08-19 13:19:59', 'Pending'),
(3, 'Desk is broken needs to be changed', 'Carpenter', '2019-08-19 15:05:17', NULL),
(10, 'TEST', 'Carpenter', '2019-08-19 15:13:54', 'Pending'),
(11, 'test', 'Carpenter', '2019-08-19 15:26:44', 'Pending'),
(12, 'test', 'Carpenter', '2019-08-19 15:28:33', 'Pending'),
(13, 'test', 'Carpenter', '2019-08-19 15:29:07', 'Pending'),
(14, 'test', 'Carpenter', '2019-08-19 15:29:48', 'Pending'),
(15, '', '', '2019-08-19 15:30:32', 'Pending'),
(16, 'this is also test ', 'Carpenter', '2019-08-19 15:34:30', 'Pending'),
(17, 'i am doing one more test ', 'Carpenter', '2019-08-19 15:37:18', 'Pending');

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
(3, 'Electrician', 'assets/pictures/ele.jpg\r\n\r\n');

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
(1, 'Carpenter', 'Carpenter', 'sohil.l@somaiya.edu', '123', 'Department', 'https://lh5.googleusercontent.com/-ioXFfgwKaSk/AAAAAAAAAAI/AAAAAAAAHpg/gU4l2tWq6E8/s96-c/photo.jpg'),
(5, 'Sohil Luhar', 'sohil123', 'sohil.luhar@somaiya.edu', '123', 'User', 'https://lh5.googleusercontent.com/-ubDLjzKoAfU/AAAAAAAAAAI/AAAAAAAAALU/dc5VBqy1sr8/s96-c/photo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgurl` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `google_id`, `imgurl`, `username`) VALUES
(27, 'Sohil Luhar', 'sohilayubluhar@gmail.com', NULL, NULL, NULL, NULL, '114965396544333017127', 'https://lh4.googleusercontent.com/-UfjfgFUWAAA/AAAAAAAAAAI/AAAAAAAAAEk/WB_Gz-8ZW4s/s96-c/photo.jpg', ''),
(32, 'SOHIL LUHAR', 'sohil.l@somaiya.edu', '123', NULL, NULL, NULL, '102495222712076956744', 'https://lh5.googleusercontent.com/-ioXFfgwKaSk/AAAAAAAAAAI/AAAAAAAAHpg/gU4l2tWq6E8/s96-c/photo.jpg', 'sohil');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
