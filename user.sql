-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 12, 2021 at 03:41 PM
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
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `user_id`, `email`, `image`) VALUES
(1, 'Sayali Phadtare', '113658588764880515039', 'sayaliphadtare20@gmail.com', 'https://lh3.googleusercontent.com/a/AATXAJxZbgHLdMlc_kD7D1MhVn_53fR1SVcIhEgEIBjH=s96-c'),
(2, 'SACHIN MOHAN MOHITE', '103202218872897210163', 'sachin.mohite14@apu.edu.in', 'https://lh3.googleusercontent.com/a/AATXAJxvJJWjtFrjS3n_NIO5uNcKuKcMyuX9ev-p6fJR=s96-c'),
(3, 'Shivansh Srivastava', '104671222688892339469', 'srivastavashivansh05@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14GhJIhilaVO5CaV3HcZTjhXBtr_YyXxOBdmJb8VD=s96-c'),
(5, 'yashasvi pundeer', '107785164258737909644', 'yashasvipundeer@gmail.com', 'https://lh3.googleusercontent.com/a/AATXAJyyZuNKivlOC8DE2poLFPrR5Ykg3_G0yTyOJAMq=s96-c'),
(8, 'Jatin Bagai', '101740138777350095980', 'jatinbagai0110@gmail.com', 'https://lh3.googleusercontent.com/a/AATXAJzWsFpQwQqDxRXjVMK2YAa-qogjWQSDpkPinO-F=s96-c'),
(9, 'SPACE Early Childhood Education', '101950145136248286689', 'contactus@spacece.co', 'undefined');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
