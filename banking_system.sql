-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 06:32 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `transcation`
--

CREATE TABLE `transcation` (
  `s.no` int(12) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `balance` bigint(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transcation`
--

INSERT INTO `transcation` (`s.no`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Neel', 'Dev', 6000, '2021-06-03 22:45:01'),
(2, 'Smit', 'Jon', 600, '2021-06-03 22:53:40'),
(3, 'Neel', 'Parth', 4000, '2021-06-03 22:54:09'),
(4, 'Arpan', 'Shailesh', 4500, '2021-06-03 22:54:50'),
(5, 'Smit', 'Yash', 3000, '2021-06-03 22:55:11'),
(6, 'Shailesh', 'Jon', 1000, '2021-06-04 20:58:13'),
(7, 'Shailesh', 'Umesh', 350, '2021-06-08 08:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(40) NOT NULL,
  `balance` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Shailesh', 'shailesh234@gmail.com', 34150),
(2, 'Yash', 'yash98@gmail.com', 12000),
(3, 'Smit', 'smit45@gmail.com', 40900),
(4, 'Apurva', 'apurva98@gmail.com', 10000),
(5, 'Neel', 'neel08@gmail.com', 50000),
(6, 'Jon', 'jon67@gmail.com', 6600),
(7, 'Umesh', 'umesh00@gmail.com', 9850),
(8, 'Parth', 'parth56@gmail.com', 6000),
(9, 'Dev', 'dev4567@gmail.com', 7500),
(10, 'Arpan', 'arpan78@gmail.com', 8000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transcation`
--
ALTER TABLE `transcation`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transcation`
--
ALTER TABLE `transcation`
  MODIFY `s.no` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
