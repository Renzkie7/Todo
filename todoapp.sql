-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 02, 2025 at 01:41 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todoapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_todolist`
--

CREATE TABLE `tbl_todolist` (
  `id` int(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'PENDING',
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_completed` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_todolist`
--

INSERT INTO `tbl_todolist` (`id`, `item`, `Status`, `date_added`, `date_completed`) VALUES
(62, 'Playing mobile games', 'PENDING', '2025-06-02 09:38:00', NULL),
(63, 'Watching Tv', 'PENDING', '2025-06-02 09:38:45', NULL),
(64, 'Doing chores', 'PENDING', '2025-06-02 09:39:23', NULL),
(65, 'Cleaning ', 'PENDING', '2025-06-02 09:39:50', NULL),
(66, 'Going to School', 'PENDING', '2025-06-02 09:40:12', NULL),
(67, 'Studying', 'PENDING', '2025-06-02 09:40:24', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_todolist`
--
ALTER TABLE `tbl_todolist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_todolist`
--
ALTER TABLE `tbl_todolist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
