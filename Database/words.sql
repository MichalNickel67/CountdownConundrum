-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2025 at 07:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `countdown_conundrum`
--

-- --------------------------------------------------------

--
-- Table structure for table `words`
--

CREATE TABLE `words` (
  `id` int(11) NOT NULL,
  `word` varchar(10) NOT NULL,
  `length` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `words`
--

INSERT INTO `words` (`id`, `word`, `length`) VALUES
(1, 'Curve', 5),
(2, 'Price', 5),
(3, 'Horse', 5),
(4, 'Pizza', 5),
(5, 'Daily', 5),
(6, 'Quick', 5),
(7, 'Crazy', 5),
(8, 'Anger', 5),
(9, 'Audio', 5),
(10, 'Basic', 5),
(11, 'Boost', 5),
(12, 'Alarm', 5),
(13, 'Dream', 5),
(14, 'Arena', 5),
(15, 'Apple', 5),
(16, 'Bacon', 5),
(17, 'Baker', 5),
(18, 'Beach', 5),
(19, 'Beast', 5),
(20, 'Clock', 5),
(21, 'Balance', 7),
(22, 'Academy', 7),
(23, 'Battery', 7),
(24, 'Airport', 7),
(25, 'Alcohol', 7),
(26, 'Brother', 7),
(27, 'Classic', 7),
(28, 'College', 7),
(29, 'Diamond', 7),
(30, 'Digital', 7),
(31, 'Display', 7),
(32, 'Company', 7),
(33, 'Fashion', 7),
(34, 'Gallery', 7),
(35, 'Fishing', 7),
(36, 'Freedom', 7),
(37, 'Apologise', 9),
(38, 'Appetiser', 9),
(39, 'Bookshelf', 9),
(40, 'Bumblebee', 9),
(41, 'Champagne', 9),
(42, 'Checklist', 9),
(43, 'Chopstick', 9),
(44, 'Clownfish', 9),
(45, 'Explosive', 9),
(46, 'Injection', 9),
(47, 'Jailbreak', 9),
(48, 'Factorise', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `words`
--
ALTER TABLE `words`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
