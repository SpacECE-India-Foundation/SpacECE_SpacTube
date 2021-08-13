-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 12, 2021 at 10:32 AM
-- Server version: 8.0.26-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery2`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `u_id` varchar(100) NOT NULL,
  `v_id` varchar(100) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`u_id`, `v_id`, `comment`, `date`, `time`) VALUES
('2', '2', 'hello', '2021-08-10', '14:36:05');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `UID` int NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` decimal(10,0) NOT NULL,
  `subscription_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`UID`, `username`, `password`, `name`, `email`, `phone`, `subscription_status`) VALUES
(1, 'manassinkar', 'manas12345', 'Manas', 'manas.sinkar@gmail.com', '9022942188', 'inactive'),
(2, 'jaydeep', 'jaydeep12345', 'Jaydeep', 'jaydeep@gmail.com', '9854545452', 'inactive'),
(3, 'parththosani', 'parth12345', 'Parth', 'parth@gmail.com', '9854512541', 'inactive'),
(4, 'sangeeta08', '1a2s3d4f5g', 'Sangeeta', 'sangeetamalviya08@gmail.com', '8888888888', 'active'),
(5, 'sangeeta08', '1234567890', 'Sangeeta', 'sangeetamalviya08@gmail.com', '8787878787', 'active'),
(6, 'sangeeta08', '1a2s3d4f5g', 'Ashok', 'sangeetamalviya08@gmail.com', '8888888888', 'active'),
(7, 'sangeeta081', '1a2s3d4f5g', 'sang', 'sangeetamalviya08@gmail.com', '8888888888', 'active'),
(8, 'sangeeta080', '1a2s3d4f5g', 'Sangeeta', 'sangeetamalviya08@gmail.com', '8888888888', 'active'),
(9, 'admin', '1a2s3d4f5g', 'Sangeeta', 'sangeetamalviya08@gmail.com', '8888888888', 'active'),
(10, 'sangeeta08', '1234567890', 'Sangeeta', 'sangeetamalviya08@gmail.com', '8888888888', 'active'),
(11, 'sangeeta90', '1a2s3d4f5g', 'asd', 'sangeetamalviya08@gmail.com', '8888888888', 'active'),
(12, 'sangeeta08', '1a2s3d4f5g', 'Sangeeta', 'sangeetamalviya08@gmail.com', '8888888888', 'active'),
(13, 'sangeeta189', '1a2s3d4f5g', 'Sangeeta', 'sangeetamalviya08@gmail.com', '8888888888', 'active'),
(14, 'san45', '1a2s3d4f5g', 'Sangeeta', 'sangeetamalviya08@gmail.com', '8888888888', 'active'),
(15, 'sangeeta0899', '1a2s3d4f5g', 'Sangeeta', 'sangeetamalviya08@gmail.com', '8888888888', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE `tbl_comments` (
  `u_no` int NOT NULL,
  `v_id` varchar(200) NOT NULL,
  `u_comment` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ;

--
-- Dumping data for table `tbl_comments`
--

INSERT INTO `tbl_comments` (`u_no`, `v_id`, `u_comment`, `date`, `time`) VALUES
(1, '2', 'nice', '2001-02-02', '12:00:00'),
(2, '2', 'goood', '2021-12-13', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dislike`
--

CREATE TABLE `tbl_dislike` (
  `u_id` varchar(100) NOT NULL,
  `v_id` varchar(200) NOT NULL,
  `dislike` varchar(100) DEFAULT NULL
) ;

--
-- Dumping data for table `tbl_dislike`
--

INSERT INTO `tbl_dislike` (`u_id`, `v_id`, `dislike`) VALUES
('2', '2', 'dislike');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_like`
--

CREATE TABLE `tbl_like` (
  `u_id` varchar(200) NOT NULL,
  `v_id` varchar(200) NOT NULL,
  `like_status` varchar(100) DEFAULT NULL
) ;

--
-- Dumping data for table `tbl_like`
--

INSERT INTO `tbl_like` (`u_id`, `v_id`, `like_status`) VALUES
('1', '2', 'liked'),
('2', '3', 'liked\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recents`
--

CREATE TABLE `tbl_recents` (
  `u_no` int NOT NULL,
  `v_id` int NOT NULL,
  `v_time` time DEFAULT NULL,
  `v_date` date DEFAULT NULL
) ;

--
-- Dumping data for table `tbl_recents`
--

INSERT INTO `tbl_recents` (`u_no`, `v_id`, `v_time`, `v_date`) VALUES
(1, 1, '00:15:00', '2021-08-11'),
(1, 2, '00:14:00', '2021-08-11'),
(1, 3, '00:10:00', '2021-08-11'),
(1, 4, '00:15:00', '2021-08-12'),
(2, 2, '00:15:00', '2021-08-12');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `v_id` int NOT NULL,
  `v_url` varchar(250) NOT NULL,
  `v_date` date NOT NULL,
  `v_uni_no` bigint NOT NULL,
  `status` varchar(200) NOT NULL,
  `filter` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `desc` varchar(2000) NOT NULL,
  `length` varchar(20) NOT NULL,
  `cntlike` int DEFAULT '0',
  `cntdislike` int DEFAULT '0',
  `views` bigint UNSIGNED NOT NULL,
  `cntcomment` int DEFAULT NULL
) ;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`v_id`, `v_url`, `v_date`, `v_uni_no`, `status`, `filter`, `title`, `desc`, `length`, `cntlike`, `cntdislike`, `views`, `cntcomment`) VALUES
(2, 'zWkU1fwkwWg', '2020-01-03', 6837197912490141, 'free', 'technical', 'title 2', 'desc 2', '10 min', 10, 5, 100, NULL),
(3, 'u_iKGzPZQoQ', '2020-01-23', 2284070198390204, 'free', 'r_rated', 'title 1', 'desc 3', '10 min', 689, 100, 1000, NULL),
(6, 'TWICDS-8qMs', '2020-01-24', 2784442360948059, 'created', 'technical', 'title 3', 'desc 6', '10 min', 100, 20, 198, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `webhook`
--

CREATE TABLE `webhook` (
  `imojo` varchar(50) NOT NULL,
  `payment_id` varchar(32) NOT NULL,
  `status` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `date_of_purchase` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_subs` date DEFAULT NULL
) ;

--
-- Dumping data for table `webhook`
--

INSERT INTO `webhook` (`imojo`, `payment_id`, `status`, `email`, `phone`, `purpose`, `date_of_purchase`, `end_subs`) VALUES
('MOJO5606427064044919', 'aef4e1cbd8274087981451c672f6c4c0', 'Credit', 'yashasvipundeer@gmail.com', '+917668711341', 'testing', '2021-08-10 10:31:55', '2021-09-10'),
('MOJO8877746782067174', '11ad3f39bc5c4d59b35a2201929ad470', 'Credit', 'yashasvipundeer@gmail.com', '+917668711341', 'testing', '2021-08-10 10:31:55', '2021-09-10'),
('MOJO5702629198712542', 'a5014270ee484fe9b443add12bccb22c', 'Credit', 'yashasvipundeer@gmail.com', '+917668711341', 'testing', '2021-08-10 10:31:55', '2021-09-10'),
('MOJO4341279620210203', '0e2cc226f642420aa8cf4d3ca18f7928', 'Credit', 'happy@gmail.com', '+919997983617', 'testing', '2021-09-10 00:00:00', '2021-09-10'),
('MOJO1810Q05A94811176', '27d183b4f8f147e8b574aef3bfeef2bf', 'Credit', 'yashasvipundeer@gmail.com', '+917668711341', 'testing', '2021-08-10 10:31:55', '2021-09-10'),
('MOJO6260065916541766', 'b4857ace655442b1bc69d8795aeecfca', 'Credit', 'yashasvipundeer@gmail.com', '+917668711341', 'testing', '2021-08-10 11:01:27', '2021-09-10'),
('MOJO1720104508524038', 'af6b1b158af64741a44b0211a6f8c729', 'Credit', 'yashasvipundeer@gmail.com', '+917668711341', 'testing', '2021-08-10 11:08:53', '2021-09-10'),
('MOJO1810G05A94811250', 'a8488e39c69d4935871f0f5f6ef12582', 'Credit', 'sangeetamalviya08@gmail.com', '+917668711341', 'SpacTube', '2021-08-10 11:19:10', '2021-09-10'),
('MOJO7607397818037388', 'a8488e39c69d4935871f0f5f6ef12582', 'Credit', 'sangeetamalviya08@gmail.com', '+917668711341', 'SpacTube', '2021-08-10 11:20:21', '2021-09-10'),
('MOJO1810S05A94811269', '6a13880c11af4445ad9a93fe036f1530', 'Credit', 'sangeetamalviya08@gmail.com', '+917668711341', 'SpacTube', '2021-08-10 11:26:24', '2021-09-10'),
('MOJO1810E05A94811276', '4e28207f93104880a00bd768f4edb814', 'Credit', 'sangeetamalviya08@gmail.com', '+917668711341', 'SpacTube', '2021-08-10 11:31:53', '2021-09-10'),
('MOJO1810V05A94811295', 'df75d440157e472d98e765df01732573', 'Credit', 'sangeetamalviya08@gmail.com', '+917668711341', 'SpacTube', '2021-08-10 11:41:30', '2021-09-10'),
('MOJO2475283037321746', 'df75d440157e472d98e765df01732573', 'Credit', 'sangeetamalviya08@gmail.com', '+917668711341', 'SpacTube', '2021-08-10 11:57:05', '2021-09-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD PRIMARY KEY (`u_no`);

--
-- Indexes for table `tbl_dislike`
--
ALTER TABLE `tbl_dislike`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `tbl_like`
--
ALTER TABLE `tbl_like`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`v_id`),
  ADD UNIQUE KEY `v_uni_no` (`v_uni_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `UID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `v_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
