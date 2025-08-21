-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 11:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodtrucks`
--

-- --------------------------------------------------------

--
-- Table structure for table `how_it_made`
--

CREATE TABLE `how_it_made` (
  `id` int(11) NOT NULL,
  `title` char(64) NOT NULL,
  `text` text NOT NULL,
  `image_name` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `how_it_made`
--

INSERT INTO `how_it_made` (`id`, `title`, `text`, `image_name`) VALUES
(1, 'Lorem ipsum dolor sit amet, cons', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus luctus velit ut varius. Aliquam non lobortis odio. Fusce convallis convallis felis in iaculis. Integer eget placerat metus. Nunc eget faucibus nisi. Praesent et lectus sed neque pretium finibus. Duis a lacus sit amet dui ultrices sagittis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi quis turpis tortor. Sed varius nisl quis iaculis hendrerit. Nam ac efficitur libero, at dignissim purus. Quisque mi lacus, egestas eget ipsum ut, porttitor consectetur leo.', 'Food Truck-4.png'),
(2, 'Lorem ipsum dolor sit amet, cons', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus luctus velit ut varius. Aliquam non lobortis odio. Fusce convallis convallis felis in iaculis. Integer eget placerat metus. Nunc eget faucibus nisi. Praesent et lectus sed neque pretium finibus. Duis a lacus sit amet dui ultrices sagittis. ', 'Food Truck-7.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` char(16) NOT NULL,
  `surname` char(16) NOT NULL,
  `username` char(16) NOT NULL,
  `password` char(64) NOT NULL,
  `role` char(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `username`, `password`, `role`) VALUES
(1, 'Daniel', 'Trojko', 'Daniel', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `how_it_made`
--
ALTER TABLE `how_it_made`
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
-- AUTO_INCREMENT for table `how_it_made`
--
ALTER TABLE `how_it_made`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
