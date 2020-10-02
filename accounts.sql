-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2020 at 07:29 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `eventname` varchar(100) NOT NULL,
  `eventdescription` varchar(100) NOT NULL,
  `eventtype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `eventname`, `eventdescription`, `eventtype`) VALUES
(1, 'Carrom Match - Sept', 'This is a carrom tournament', 'private'),
(2, 'Ride or Die - Oct 2020', 'Royal Enfield riders, join in !', 'public'),
(3, 'Chess Champions 2020', 'Competition for chess player', 'public'),
(5, 'Mountain Cycling', 'To the top !', 'private'),
(6, 'Run Run Run', 'Run for Office Campaign', 'private');

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

CREATE TABLE `interests` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interests`
--

INSERT INTO `interests` (`id`, `name`, `description`) VALUES
(1, 'Movie', 'For all movie fans out there !'),
(2, 'Sports', 'Are you really into sports ?'),
(4, 'Cycling', 'Go Cycling ! Stay Healthy !'),
(7, 'Board Games', 'Indoor games are also fun !'),
(8, 'Walking', 'Walk and Talk ! Simple !'),
(9, 'Ride', 'Explore the roads !'),
(12, 'Joggers', 'Don\'t cheat yourself by just walking.'),
(13, 'Fishing', 'Take your rod and reel');

-- --------------------------------------------------------

--
-- Table structure for table `interests_list`
--

CREATE TABLE `interests_list` (
  `id` int(11) NOT NULL,
  `interests_id` int(11) NOT NULL,
  `listname` varchar(30) NOT NULL,
  `listdescription` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interests_list`
--

INSERT INTO `interests_list` (`id`, `interests_id`, `listname`, `listdescription`) VALUES
(2, 2, 'Cricket', 'Cricket is always fun !'),
(3, 2, 'Football', 'Move your muscles and go football !!'),
(4, 9, 'RX-100 Riders', '2 stroke is an emotion !'),
(5, 1, 'Hollywood Movies', 'Yeah ! I Love hollywood !'),
(6, 4, 'Mountain Cycling', 'Let\'s hit the mountain !'),
(7, 9, 'Royal Enfield Riders', 'Made like Gun, Goes like Bullet !'),
(10, 1, 'Bollywood', 'Picture abhi bakhi hei mere dhosth !');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `district` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `district`, `state`, `country`) VALUES
(1, 'Coimbatore', 'Tamil Nadu', 'India'),
(3, 'Salem', 'Tamil Nadu', 'India'),
(4, 'Tiruppur', 'Tamil Nadu', 'India'),
(5, 'Palakkad', 'Kerala', 'India'),
(6, 'Thrissur', 'Kerala', 'India'),
(7, 'Mysore', 'Karnataka', 'India'),
(8, 'Bengaluru', 'Karnataka', 'India'),
(10, 'Ernakulam', 'Kerala', 'India'),
(11, 'Chennai', 'Tamil Nadu', 'India'),
(12, 'Mangalore', 'Karnataka', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `usertype`) VALUES
(11, 'vinod', 'vinod@vinod', 'thapa', 'user'),
(12, 'Kili', 'kili@gmail.com', 'kili', 'user'),
(15, 'Bala', 'bala@gmail.com', 'bala', 'user'),
(16, 'king', 'king@king', 'king', 'admin'),
(17, 'surya', 'surya@surya', 'surya', 'admin'),
(18, 'kiran', 'kiran@kiran', 'kiran', 'user'),
(19, 'bulbe', 'bulbe@bulbe', 'bulbe', 'admin'),
(20, 'user', 'user@user', 'user', 'user'),
(21, 'nazar', 'nazar@gmail.com', 'nazar', 'admin'),
(22, 'bravo', 'bravo@bravo', 'bravo', 'admin'),
(26, 'admin', 'admin@admin', 'admin', 'admin'),
(27, 'uvann', 'uvan@uvann', 'uvann', 'user'),
(28, 'cringe', 'cringe@cringe', 'cringe', 'user'),
(29, 'basil', 'basil@gmail.com', '$2y$10$DrL4WxhN9w7f3yFEo.DqtOxoXSp3XNi4o.D/8rWXDGM', 'user'),
(30, 'ram', 'ram@ram', '$2y$10$10zox3voBsAsW7MN1lb.kerRVDKyEfM6UbqZnbfHVPh', 'user'),
(31, 'ronin', 'ronin@ronin', '$2y$10$6mqd29jtOc73hhwWMWlRj.lMxY.cxTfNZhnY1EShSgM', 'user'),
(32, 'krupa', 'krupa@krupa', '$2y$10$r9LvJJ.xYki4JwLiAcBTH.xQh5rs/3rWhjM..DfeR4K', 'admin'),
(33, 'padma', 'padma@padma', 'padma', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interests`
--
ALTER TABLE `interests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interests_list`
--
ALTER TABLE `interests_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `interests_id` (`interests_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `interests`
--
ALTER TABLE `interests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `interests_list`
--
ALTER TABLE `interests_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `interests_list`
--
ALTER TABLE `interests_list`
  ADD CONSTRAINT `interests_list_ibfk_1` FOREIGN KEY (`interests_id`) REFERENCES `interests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
