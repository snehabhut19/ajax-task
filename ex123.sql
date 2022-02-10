-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2022 at 09:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ex`
--

-- --------------------------------------------------------

--
-- Table structure for table `ex123`
--

CREATE TABLE `ex123` (
  `id` int(50) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `conpass` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `hobbies` varchar(50) DEFAULT NULL,
  `file` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ex123`
--

INSERT INTO `ex123` (`id`, `firstname`, `lastname`, `email`, `password`, `conpass`, `address`, `gender`, `city`, `hobbies`, `file`) VALUES
(79, 'sneha', 'patel', 'snehabhut19@gmail.com', '4124bc0a9335c27f086f24ba207a4912', '4124bc0a9335c27f086f24ba207a4912', 'manavadar', 'female', 'rajkot', 'walking', 'new.jpeg'),
(80, 'sneha', 'patel', 'snehabhut19@gmail.com', '4124bc0a9335c27f086f24ba207a4912', '4124bc0a9335c27f086f24ba207a4912', 'manavadar', 'female', 'rajkot', 'reading', 'new.jpeg'),
(81, 'sneha', 'patel', 'snehabhut19@gmail.com', '4124bc0a9335c27f086f24ba207a4912', '4124bc0a9335c27f086f24ba207a4912', 'manavadar', 'female', 'rajkot', 'walking', 'new.jpeg'),
(82, 'sneha', 'patel', 'snehabhut19@gmail.com', '4124bc0a9335c27f086f24ba207a4912', '4124bc0a9335c27f086f24ba207a4912', 'manavadar', 'female', 'rajkot', 'reading', 'flow chart sor se.jpg'),
(83, 'sneha', 'patel', 'snehabhut19@gmail.com', '4124bc0a9335c27f086f24ba207a4912', '4124bc0a9335c27f086f24ba207a4912', 'manavadar', 'female', 'rajkot', 'reading, walking', 'sneha photo.jpg'),
(84, 'sneha', 'patel', 'snehabhut19@gmail.com', '4124bc0a9335c27f086f24ba207a4912', '4124bc0a9335c27f086f24ba207a4912', 'manavadar', 'female', 'rajkot', 'reading', 'sneha photo.jpg'),
(85, 'sneha', 'patel', 'snehabhut19@gmail.com', '4124bc0a9335c27f086f24ba207a4912', '4124bc0a9335c27f086f24ba207a4912', 'manavadar', 'female', 'rajkot', 'walking', 'flow chart sor se.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ex123`
--
ALTER TABLE `ex123`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ex123`
--
ALTER TABLE `ex123`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
