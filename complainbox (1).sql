-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2019 at 05:54 PM
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
  `complainimg` varchar(100) NOT NULL,
  `Departmentname` varchar(50) DEFAULT NULL,
  `complaindate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(30) DEFAULT NULL,
  `complainant` varchar(50) NOT NULL,
  `complainantmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `description`, `complainimg`, `Departmentname`, `complaindate`, `status`, `complainant`, `complainantmail`) VALUES
(1, 'Door is not opening properly in B205', 'assets/pictures/carp.jpg', 'Carpenter', '2019-08-19 13:19:09', 'Pending', 'Sohil Luhar', 'sohil.luhar@somaiya.edu'),
(2, 'Window in broken in B301', 'assets/pictures/carp.jpg', 'Carpenter', '2019-08-19 13:19:59', 'Pending', 'Sohil Luhar', 'sohil.luhar@somaiya.edu'),
(3, 'Desk is broken needs to be changed', 'assets/pictures/carp.jpg', 'Carpenter', '2019-08-19 15:05:17', 'Pending', 'Sohil Luhar', 'sohil.luhar@somaiya.edu'),
(18, 'my wifi is not working', 'assets/pictures/carp.jpg', 'Networking', '2019-08-20 13:53:27', 'Pending', 'Sohil Luhar', 'sohil.luhar@somaiya.edu'),
(25, 'networking test', 'assets/pictures/welding.jpg', 'Networking', '2019-08-20 16:17:23', 'Pending', 'Sohil Luhar', 'sohil.luhar@somaiya.edu'),
(26, 'complain in carpenter department describe all problem here', 'assets/pictures/welding.jpg', 'Carpenter', '2019-08-20 16:22:38', 'Pending', 'Sohil Luhar', 'sohil.luhar@somaiya.edu'),
(27, 'i am doing complain in network department', 'assets/pictures/welding.jpg', 'Networking', '2019-08-20 16:24:25', 'Pending', 'Sohil Luhar', 'sohil.luhar@somaiya.edu'),
(28, 'testing .... ', 'assets/pictures/welding.jpg', 'Networking', '2019-08-20 16:32:38', 'Pending', 'Sohil Luhar', 'sohil.luhar@somaiya.edu'),
(29, 'test...', 'assets/pictures/welding.jpg', 'Networking', '2019-08-20 16:33:55', 'Pending', 'Sohil Luhar', 'sohil.luhar@somaiya.edu'),
(33, 'final test', 'assets/pictures/welding.jpg', 'Carpenter', '2019-08-20 20:02:03', 'Pending', 'Sohil Luhar', 'sohil.luhar@somaiya.edu'),
(34, '', '', '', '2019-08-21 05:28:13', 'Pending', '', ''),
(35, NULL, 'assets/img/f86b575e9964ccd84ad8e92c9349f967.jpg', NULL, '2019-08-21 06:37:02', 'Pending', '', 'sohil.luhar@somaiya.edu'),
(36, 'test with img', 'assets/img/53f3d6639270ca99a946be94133dea22.jpg', 'Carpenter', '2019-08-21 06:39:50', 'Pending', 'Sohil Luhar', 'sohil.luhar@somaiya.edu'),
(37, 'cleaning complain', 'assets/img/3521189c8b15ce2d41173cbe316106b3.jpg', 'cleaning', '2019-08-21 15:32:04', 'Pending', 'Sohil Luhar', 'sohil.luhar@somaiya.edu');

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
(3, 'Electrician', 'assets/pictures/ele.jpg\r\n\r\n'),
(4, 'cleaning', 'assets/pictures/download.png'),
(5, 'test', 'assets/pictures/download.png');

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
(1, 'Carpenter', 'Carpenter', 'sohil.l1@somaiya.edu', '123', 'Department', 'https://lh3.googleusercontent.com/a-/AAuE7mAbhWd2Kit5xCUWw7FdrSthnhybZxIljFYj61idgQ=s96-c'),
(6, 'Networking', 'Networking', 'sohil.luhar@somaiya.edu', '123', 'Department', 'https://lh4.googleusercontent.com/-JDkrAd_uw64/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rfRL_wdizFA_IXtyqPMDG3wlm0oNA/s96-c/photo.jpg'),
(7, 'cleaning', 'cleaning', 'saurabhkumar.t@somaiya.edu', '123', 'Department', ''),
(8, 'admin', 'admin', 'sohil.l@somaiya.edu', '123', 'admin', 'https://lh3.googleusercontent.com/a-/AAuE7mAbhWd2Kit5xCUWw7FdrSthnhybZxIljFYj61idgQ=s96-c'),
(9, 'test', 'test', 'test@somaiya.edu', '123', 'Department', '');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
