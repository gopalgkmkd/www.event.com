-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2023 at 10:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expo`
--

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `regno` varchar(9) NOT NULL,
  `ph` varchar(20) NOT NULL,
  `expo` varchar(30) NOT NULL,
  `rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `name`, `year`, `regno`, `ph`, `expo`, `rating`) VALUES
(1, 'fdb', 'I BCA', '20bca001', '1234567890', 'we', 0),
(2, 'fdb', 'I BCA', '20bca001', '1234567890', 'we', 0),
(3, 'GOPALAKRISHNAN C ', 'III BCA', '20bca001', '1234567890', 'dgd', 0),
(4, 'sanjay', 'III BCA', '0016', '1234567890', 'VR', 0),
(5, 'aakash', 'II BCA', '20bca001', '0986656767', 'nsalkmak', 0);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `uname` varchar(25) NOT NULL,
  `udpt` varchar(25) NOT NULL,
  `ureg` varchar(25) NOT NULL,
  `eventid` int(5) NOT NULL,
  `score` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`uname`, `udpt`, `ureg`, `eventid`, `score`) VALUES
('cc', 'c', 'c', 3, 0),
('akash', 'xxx', '9', 5, 1),
('sri wife', 'love', '1', 3, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
