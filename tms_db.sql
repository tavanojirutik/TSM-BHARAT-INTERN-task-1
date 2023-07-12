-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 12, 2023 at 04:40 PM
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
-- Database: `tms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `mobile`) VALUES
(1, 'adminx', 'adminx@gmail.com', '123', 7218912344);

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `lid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'No Action'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`lid`, `uid`, `subject`, `message`, `status`) VALUES
(4, 2, 'dwdwd', 'swsdw', 'Reject'),
(5, 5, 'health related issues', 'I am writing to inform you that I am feeling unwell and \r\nwill not be able to come into the office tomorrow, [date]. \r\nI have seen a doctor who has advised me to take a day off to rest and recover. \r\nTherefore, I would like to request a sick leave for one day.', 'Approved'),
(6, 6, 'health related issues', 'I am writing to inform you that I am feeling unwell and \r\nwill not be able to come into the office tomorrow, [date]. \r\nI have seen a doctor who has advised me to take a day off to rest and recover. \r\nTherefore, I would like to request a sick leave for one day.', 'Approved'),
(7, 7, ' Personal reason', 'I am writing to you to let you know that I have an important personal matter to attend at \r\nmy hometown due to which I will not be able to come to the office \r\nfrom {start date} to {end date}.', 'Reject'),
(8, 7, 'health related issues', 'I am writing to inform you that I am feeling unwell and \r\nwill not be able to come into the office tomorrow, [date]. \r\nI have seen a doctor who has advised me to take a day off to rest and recover. \r\nTherefore, I would like to request a sick leave for one day.', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `tid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Not Started'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`tid`, `uid`, `description`, `start_date`, `end_date`, `status`) VALUES
(17, 2, 'create website  ', '2023-07-12', '2023-07-27', 'Complite'),
(18, 6, 'Create Back-end ', '2023-07-12', '2023-07-20', 'Complite'),
(19, 2, 'Create Android App', '2023-07-12', '2023-07-20', 'Complite'),
(20, 7, 'create Database', '2023-07-14', '2023-07-20', 'In-Progress');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `password`, `mobile`) VALUES
(1, 'root', 'root@gmail.com', '123', 123),
(2, 'rutik', 'rutiktavanoji@gmail.com', '1111', 123456789),
(3, 'user', 'user@gmail.com', '123', 123456789),
(4, 'yogesh', 'yogesh@gmail.com', '123', 123456789),
(6, 'raj', 'raj@gmail.com', '123', 123456789),
(7, 'jay', 'jay@gmail.com', '123', 123456789);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
