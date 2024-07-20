-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2024 at 08:58 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_collection`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `car_model` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `ph` varchar(255) NOT NULL,
  `km` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `car_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `car_model`, `year`, `ph`, `km`, `color`, `car_img`) VALUES
(2, 'mdfv', 'trst', 2023, '9876543210', '553435', 'ftrxg', 'pic/image/chinna.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `car_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `movieinfo`
--

CREATE TABLE `movieinfo` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `movie_dir` varchar(255) NOT NULL,
  `movie_year` int(11) NOT NULL,
  `movie_herione` varchar(255) NOT NULL,
  `movie_hero` varchar(255) NOT NULL,
  `car_img` varchar(255) NOT NULL,
  `car_video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movieinfo`
--

INSERT INTO `movieinfo` (`movie_id`, `movie_name`, `movie_dir`, `movie_year`, `movie_herione`, `movie_hero`, `car_img`, `car_video`) VALUES
(30, 'LEO', 'Lokesh Kanagaraj', 2134, 'Zoe Saldana', 'Vijay', 'pic/image/vikramvedha.jpg', NULL),
(35, 'The Avengers', 'Ganesh K. Babu', 2002, 'Bhavya Trikha', 'Karthi', 'pic/image/vikramvedha.jpg', NULL),
(39, 'zz', 'zz', 2134, 'zz', 'zz', 'pic/image/avatar1.jpg', NULL),
(40, 'zz', 'zz', 2134, 'zz', 'zz', '', 'videos/Kaithi.mp4'),
(41, 'LEO', 'Lokesh Kanagaraj', 9999, 'Zoe Saldana', 'Karthi', 'pic/image/avengers.jpg', NULL),
(42, 'LEO', 'Lokesh Kanagaraj', 9999, 'Zoe Saldana', 'Karthi', '', 'videos/Kaithi.mp4'),
(43, 'pp', 'pp', 0, 'pp', 'pp', 'pic/image/joe.jpg', NULL),
(44, 'pp', 'pp', 0, 'pp', 'pp', '', 'videos/LEO.mp4'),
(45, 'tt', 'tt', 987, 'tt', 'tt', '', 'videos/chithha.mp4'),
(46, 'vv', 'vv', 1234, 'vv', 'vv', 'pic/image/dada.jpg', NULL),
(47, 'vv', 'vv', 1234, 'vv', 'vv', '', 'videos/Dada.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(5) NOT NULL,
  `movie_name` int(25) NOT NULL,
  `movie_dir` varchar(255) NOT NULL,
  `movie_hero` varchar(255) NOT NULL,
  `movie_herione` varchar(255) NOT NULL,
  `movie_year` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `video_path` varchar(255) NOT NULL,
  `dir_name` int(25) NOT NULL,
  `hero` int(25) NOT NULL,
  `heroine` int(25) NOT NULL,
  `year` int(4) NOT NULL,
  `movie_image` int(250) NOT NULL,
  `videos` varchar(15000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_name`, `movie_dir`, `movie_hero`, `movie_herione`, `movie_year`, `image_path`, `video_path`, `dir_name`, `hero`, `heroine`, `year`, `movie_image`, `videos`) VALUES
(1, 0, 'zz', 'xxx', 'zzz', 1233, 'C:xampphtdocschinnaNewproject/pic/avatar1.jpg', 'C:xampphtdocschinnaNewproject/pic/Kaithi.mp4', 0, 0, 0, 0, 0, ''),
(2, 0, 'zz', 'xxx', 'zzz', 1233, 'C:xampphtdocschinnaNewproject/pic/avatar1.jpg', 'C:xampphtdocschinnaNewproject/pic/Kaithi.mp4', 0, 0, 0, 0, 0, ''),
(3, 0, 'zz', 'xxx', 'zzz', 1233, 'C:xampphtdocschinnaNewproject/pic/avatar1.jpg', 'C:xampphtdocschinnaNewproject/pic/Kaithi.mp4', 0, 0, 0, 0, 0, ''),
(4, 0, 'aa', 'aa', 'aa', 1234, 'C:xampphtdocschinnaNewproject/pic/avatar1.jpg', 'C:xampphtdocschinnaNewproject/pic/Kaithi.mp4', 0, 0, 0, 0, 0, ''),
(5, 0, 'aa', 'aa', 'aa', 1234, 'C:xampphtdocschinnaNewproject/pic/avatar1.jpg', 'C:xampphtdocschinnaNewproject/pic/Kaithi.mp4', 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `user_mail` varchar(30) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `movieinfo`
--
ALTER TABLE `movieinfo`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `movieinfo`
--
ALTER TABLE `movieinfo`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
