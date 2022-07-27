-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 04:43 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `sno` int(11) NOT NULL,
  `ename` text NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `funds` int(11) NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`sno`, `ename`, `description`, `date`, `funds`, `location`) VALUES
(1, 'Virat\'s Birthday', 'All society members are invited', '2021-11-15', 6500, 'Community Hall'),
(2, 'Monthly Meeting', 'One member from each family should be present', '2021-10-26', 0, 'Club-House'),
(3, 'Vishal\'s Birthday', 'Every society member is invited', '2021-10-31', 8000, 'Playground'),
(16, 'Annual Meeting', 'All committee members must be present', '2022-01-19', 0, 'Club-House'),
(17, 'arun\'s birthday', 'Everyone is invited', '2021-12-02', 200, 'Community hall');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `user` varchar(23) NOT NULL,
  `sno` int(11) NOT NULL,
  `fname` varchar(23) NOT NULL,
  `lname` varchar(23) NOT NULL,
  `email` varchar(50) NOT NULL,
  `designation` varchar(23) NOT NULL,
  `age` int(11) NOT NULL,
  `phone` varchar(23) NOT NULL,
  `flat` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user`, `sno`, `fname`, `lname`, `email`, `designation`, `age`, `phone`, `flat`) VALUES
('admin', 1, 'Ayan', 'Yadav', 'ayan.yadav@gmail.com', 'Chairman', 21, '9028806563', 'C-301'),
('rage', 7, 'Swapnil', 'Mishra', 'swapnilmishra@gmail.com', 'President', 20, '9923578924', 'C-104'),
('rishj', 9, 'Rishabh', 'Jain', 'rishabhjainsmail606@gmail.com', 'Treasurer', 20, '8887776543', 'A-101'),
('ninja', 10, 'Reeve', 'Fernandes', 'reeve652@gmail.com', 'Vice President', 17, '6547893451', 'A-203'),
('jimsaken', 11, 'Virat', 'Kohli', 'vk@gmail.com', 'Member', 29, '2345543222', 'A-102');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `username` varchar(23) NOT NULL,
  `password` varchar(23) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `username`, `password`, `dt`) VALUES
(1, 'admin', 'admin', '2021-10-06 14:03:57'),
(2, 'rage', 'nicktv', '2021-10-07 17:18:24'),
(3, 'ninja', 'reeve', '2021-10-07 17:18:43'),
(4, 's4u', 'halwai', '2021-10-08 18:35:16'),
(5, 'rishj', 'rish', '2021-10-16 08:30:31'),
(6, 'flexgod', 'umair', '2021-10-19 18:55:19'),
(7, 'mota', 'mota', '2021-10-19 18:56:20'),
(8, 'barik', 'chin', '2021-10-20 20:20:34'),
(9, 'jimsaken', 'valo', '2021-10-21 18:34:54'),
(10, 'uttu', 'uttu', '2021-10-26 13:44:02'),
(52, 'abcd', 'abcd', '2021-11-09 07:50:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
