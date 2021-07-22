-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2021 at 06:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `current_balance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `name`, `email`, `current_balance`) VALUES
(1, 'Kashyap Talati', 'kashyap@gmail.com', 35000),
(2, 'Royce Lobo', 'roycelobo@gmail.com', 65000),
(3, 'Almasfiza Shaikh', 'almasfizashaikh@gmail.com', 90000),
(4, 'Yash Kudalkar', 'yashkudalkar@gmail.com', 65000),
(5, 'Shrumi Dedhia', 'shrumidedhia@gmail.com', 75644),
(6, 'Meet Joshi ', 'meetjoshi@gmail.com', 45000),
(7, 'Ashwini Dubbewar', 'ashwinidubbewar@gmail.com', 95000),
(8, 'Hrutik Naik', 'hrutiknaik@gmail.com', 65000),
(9, 'Telcy Gomes', 'telcygomes@gmail.com', 75000),
(10, 'Dion Chettiar', 'dionchettiar@gmail.com', 80000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
