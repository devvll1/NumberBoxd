-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2024 at 04:16 AM
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
-- Database: `ci_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `movielog`
--

CREATE TABLE `movielog` (
  `m_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `moviename` varchar(255) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `review` varchar(255) DEFAULT NULL,
  `datelog` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movielog`
--

INSERT INTO `movielog` (`m_id`, `image`, `moviename`, `rating`, `review`, `datelog`) VALUES
(1, '1706111093_0c524cc78dc9d29b5920.jpg', 'Fight Club', 10, 'so me', '2024-01-23'),
(2, '1706110682_35cbd9ca3c598b0df5c6.jpg', 'Forrest Gump', 10, 'F for Forrest :((', '2024-01-23'),
(3, '1706106926_4d1153d84c88aaf7d540.jpg', 'Se7en', 10, 'Sisigaw nalang den seguro ako pag ganun eh :/', '2024-01-24'),
(4, '1706115240_530cf602f0f59c33e05b.jpg', 'Gone Girl', 10, 'Never date a women na mentally unstable', '2024-01-25'),
(10, '1706183979_2cf5b71a5dbe2e488acd.jpg', 'The Social Network', 10, 'IT tayo eh, dapat panuorin to. Mark Zuckerberg story. Im CEO btch!!!!!!!! HAHAHHAA', '2024-01-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `first_name`, `middle_name`, `last_name`, `age`, `email`, `password`) VALUES
(2, 'Juan', 'Santos', 'Dela Cruz', 21, 'juandelacruz@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(3, 'JC', '', 'Basamot', 21, 'jcbasamot@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(5, 'Dave', 'Villeza', 'Villa', 21, 'davevilla58@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movielog`
--
ALTER TABLE `movielog`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movielog`
--
ALTER TABLE `movielog`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
