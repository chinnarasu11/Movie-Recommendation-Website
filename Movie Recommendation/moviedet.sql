-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2024 at 08:57 PM
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
-- Database: `moviedet`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `movie_dir` varchar(255) NOT NULL,
  `movie_hero` varchar(255) NOT NULL,
  `movie_herione` varchar(255) NOT NULL,
  `movie_year` int(11) NOT NULL,
  `image_filename` varchar(255) NOT NULL,
  `video_filename` varchar(255) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `video_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_name`, `movie_dir`, `movie_hero`, `movie_herione`, `movie_year`, `image_filename`, `video_filename`, `image_path`, `video_path`) VALUES
(8, 'Leo', 'Lokesh Kanagaraj', 'Vijay', 'Trisha', 2023, 'leo_image.jpg', 'LEO.mp4', NULL, NULL),
(9, '7G Rainbow Colony', ' Selvaraghavan', 'Ravi Krishna', 'Sonia Agarwal', 2004, '7g_image.jpg', '7_G Rainbow Colony.mp4', NULL, NULL),
(10, 'Remo', 'Bakkiyaraj Kannan', 'Sivakarthikeyan', 'Keerthy Suresh', 2016, 'remo_image.jpg', 'Remo .mp4', NULL, NULL),
(11, 'Vikram', 'Lokesh Kanagaraj', 'Kamal Haasan', 'Maya Sundarakrishnan', 2022, 'vikram_image.jpg', 'VIKRAM .mp4', NULL, NULL),
(12, 'Arundhati', 'Kodi Ramakrishna', 'Sonu Sood', 'Anushka Shetty', 2009, 'arundhati_image.jpg', 'arundhati.mp4', NULL, NULL),
(13, 'Billa 2', 'Chakri Toleti', 'Ajith Kumar', 'Parvathy Omanakuttan', 2012, 'billa_image.jpg', 'Billa.mp4', NULL, NULL),
(14, 'Dada', 'Ganesh K. Babu', 'Kavin', 'Aparna Das', 2023, 'dada_image.jpg', 'Dada.mp4', NULL, NULL),
(15, 'Anbe Sivam', 'Sundar C', 'Kamal Haasan', 'Kiran Rathod', 2003, 'anbesivam_image.jpg', 'Anbe Sivam.mp4', NULL, NULL),
(16, 'Irugapatru ', 'Yuvaraj ', 'Vikram Prabhu', 'Shraddha Srinath', 2023, 'irugapatru_image.jpg', 'Irugapatru.mp4', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
