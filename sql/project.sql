-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 09:11 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `dp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `bio`, `username`, `pwd`, `dp`) VALUES
(1, 'John Doe', 'PHP Developer', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'user-male-icon.png5e1eb0df6ff25.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` int(50) NOT NULL,
  `semister` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `code`, `semister`, `date`) VALUES
(7, 'Computer', 54466, '1st', '2020-01-07 07:05:27'),
(8, 'Civil', 12345, '2nd', '2020-01-07 07:06:21'),
(10, 'Marine', 544654, '4th', '2020-01-07 07:07:03'),
(12, 'RAC', 12345, '1st', '2020-01-07 08:11:44'),
(14, 'Electrical', 12345, '5th', '2020-01-07 08:12:08');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(50) NOT NULL,
  `department` varchar(250) NOT NULL,
  `semister` varchar(200) NOT NULL,
  `roll` int(50) NOT NULL,
  `total_subject` int(50) NOT NULL,
  `total_marks` int(250) NOT NULL,
  `avg_marks` int(250) NOT NULL,
  `gpa` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `department`, `semister`, `roll`, `total_subject`, `total_marks`, `avg_marks`, `gpa`) VALUES
(1, 'GDPM', '5th', 970654, 7, 433, 62, 4.33),
(2, 'Computer', '6th', 970998, 7, 452, 64, 4.52),
(3, 'Civil', '3rd', 970556, 7, 450, 75, 5),
(4, 'Textile', '4th', 970753, 7, 434, 62, 4.34),
(5, 'Civil', '4th', 970369, 7, 340, 48, 3.4),
(6, 'Mechanical', '3rd', 970551, 7, 455, 65, 4.55),
(7, 'Computer', '3rd', 970589, 7, 465, 66, 4.65),
(8, 'Electrical', '4th', 970774, 7, 444, 63, 4.44),
(9, 'Civil', '6th', 970456, 7, 354, 51, 3.54),
(12, 'RAC', '4th', 970159, 7, 432, 62, 4.32),
(13, 'Computer', '5th', 970321, 7, 356, 51, 3.56),
(14, 'Civil', '4th', 970258, 7, 368, 53, 3.68),
(15, 'Electrical', '1st', 970147, 7, 458, 65, 4.58),
(16, 'Marine', '1st', 970951, 7, 411, 59, 4.11),
(17, 'Electrical', '2nd', 970358, 7, 358, 51, 3.58),
(18, 'Marine', '1st', 970550, 7, 330, 47, 3.3),
(20, 'Mechanical', '2nd', 970123, 7, 423, 60, 4.23),
(28, 'GDPM', '1st', 970550, 7, 442, 63, 4.42),
(30, 'Computer', '1st', 970556, 7, 453, 65, 4.53),
(31, 'Marine', '7th', 970111, 7, 432, 62, 4.32);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(50) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `identity` int(50) NOT NULL,
  `roll` int(250) NOT NULL,
  `reg` varchar(250) NOT NULL,
  `department` varchar(255) NOT NULL,
  `semister` varchar(50) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `blood` varchar(50) NOT NULL,
  `home` varchar(255) NOT NULL,
  `dp` varchar(256) NOT NULL DEFAULT 'image.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `identity`, `roll`, `reg`, `department`, `semister`, `phone`, `email`, `dob`, `blood`, `home`, `dp`) VALUES
(1, 'Hasib', 'Ahmed', 1720045878, 970556, '0000824285', 'Civil', '3rd', '01926378541', 'hasibahmed885@gmail.com', '1998-05-04', 'A+', 'Dhaka,Bangladesh', '5e1ec68913643.jpg'),
(2, 'Jahid', 'Hasan', 1720066654, 970753, '0000824278', 'Textile', '4th', '01686327844', 'jahidhasan@gmail.com', '1999-05-04', 'A+', 'Rangpur,Bangladesh', 'image.png'),
(4, 'Imran', 'Miah', 1720066225, 970147, '0000824145', 'Marine', '4th', '01945327745', 'imranmiah@gmail.com', '1998-04-05', 'O-', 'Dhaka,Bangladesh', 'image.png'),
(5, 'Hridoy', 'Khan', 1720066116, 970456, '0000824237', 'RAC', '4th', '01912328789', 'hridoykhan@gmail.com', '1999-05-06', 'A-', 'Dhaka,Bangladesh', 'image.png'),
(6, 'Mahi', 'Akter', 1720066998, 970654, '0000824233', 'GDPM', '5th', '01926328746', 'mahiakter@gmail.com', '2000-04-05', 'B+', 'Dhaka,Bangladesh', 'image.png'),
(7, 'Sajjad', 'Hossain', 1720066875, 970358, '0000824145', 'Mechanical', '5th', '01456328785', 'sajjadhossain554@gmail.com', '1997-04-05', 'AB+', 'Chandpur,Dhaka,Bangladesh', 'image.png'),
(8, 'Shakib', 'Miah', 1720066888, 970550, '0000824121', 'GDPM', '6th', '01836328478', 'shakibmiah@gmail.com', '1998-05-04', 'O+', 'Rajshahi,Bangladesh', 'image.png'),
(10, 'Rakib', 'Miah', 1720066369, 970951, '0000824987', 'Marine', '1st', '01556328963', 'rakibmiah78@gmail.com', '1998-12-31', 'A+', 'Rangpur,Bangladesh', 'image.png'),
(11, 'Hasib', 'Ahmed', 1720066782, 970998, '0000824206', 'Computer', '6th', '01756324587', 'ahmedhasib78@gmail.com', '1998-06-02', 'O+', 'Dhaka,Bangladesh', 'image.png'),
(13, 'John', 'Doe', 1720066330, 970369, '0000824236', 'Mechanical', '3rd', '01986327745', 'doejohn@gmail.com', '2000-01-15', 'AB-', 'Dhaka,Bangladesh', 'image.png'),
(14, 'Hasib', 'Ahmed', 1720066658, 970551, '0000824214', 'Computer', '3rd', '01586328987', 'hshasib77@gmail.com', '2001-01-12', '2020-01-01', 'Dhaka,Bangladesh', 'image.png'),
(15, 'Imran', 'Ahmed', 1720066435, 970159, '0000824784', 'Computer', '5th', '01546328148', 'imranmiah@gmail.com', '1998-01-14', 'A+', 'Dhaka,Bangladesh', 'image.png'),
(16, 'John', 'Doe', 1720066786, 970123, '0000824149', 'Computer', '3rd', '01926328457', 'johndoe@gmail.com', '2020-01-17', 'A+', 'Rangpur,Bangladesh', 'image.png'),
(17, 'John', 'Doe', 1720066228, 970321, '0000824856', 'Civil', '4th', '01975328789', 'imranmiah445@gmail.com', '2020-01-02', 'O+', 'Rajshahi,Bangladesh', 'image.png'),
(18, 'John', 'Doe', 1720066229, 970258, '0000824456', 'Electrical', '1st', '01666328784', 'john@gmail.com', '2020-01-02', 'O+', 'Rajshahi,Bangladesh', 'image.png'),
(19, 'Rakib', 'Miah', 1720066124, 970589, '0000824236', 'Electrical', '4th', '01756328789', 'hridoykhan@gmail.cm', '2020-01-13', 'AB-', 'Rajshahi,Bangladesh', 'image.png'),
(20, 'Hasan', 'Mahmud', 1720045878, 970774, '0000824211', 'Civil', '6th', '01587465878', 'hasanmahmud@gmail.com', '1999-01-07', 'A+', 'Mymensing, Dhaka, Bangladesh', '5e1e0852dd6ee.jpg'),
(21, 'John', 'Doe', 1720045333, 970111, '0000825236', 'Marine', '7th', '0156987456', 'johndoe22@gmail.com', '2000-01-03', 'AB-', 'Dhaka,Bangladesh', '206869.png5e1e123f97048.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `name` varchar(256) NOT NULL,
  `roll` int(50) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `roll`, `email`, `password`, `reg_date`) VALUES
(1, 'Hasib Ahmed', 970114, 'Rakibmiah@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2020-01-14 08:58:38'),
(3, 'Mehedi Hasan', 970554, 'mehedihasan@gmail.com', '1e2c292dc43e97a130b6940492ba1c98', '2020-01-14 09:12:19'),
(4, 'Rohan Khan', 970115, 'rohankhan@gmail.com', 'c0ed8a487ef4bb2d48750b278e9e706b', '2020-01-14 09:13:12'),
(5, 'Hasib', 970556, 'hasib@gmail.com', '6b09a2f8b8db452136141ffcd5630a11', '2020-01-14 09:39:01'),
(6, 'Hasib Ahmed', 970556, 'hasibahmed885@gmail.com', '330b8e1116f2bb82bdb09f6615d14584', '2020-01-14 16:20:36'),
(7, 'Ahmed Hasib', 970111, 'ahmedhasib@gmail.com', '4df9f7f6455272ee0a7847d0e14c3e77', '2020-01-14 19:13:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
