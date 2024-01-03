-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 03, 2024 at 10:43 PM
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
-- Database: `WebProject`
--

-- --------------------------------------------------------

--
-- Table structure for table `BookedFlights`
--

CREATE TABLE `BookedFlights` (
  `id` int(255) NOT NULL,
  `FromCity` varchar(200) NOT NULL,
  `ToCity` varchar(200) NOT NULL,
  `DepartureDate` date NOT NULL,
  `ReturnDate` date NOT NULL,
  `CreditBank` int(200) NOT NULL,
  `UserName` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Flight`
--

CREATE TABLE `Flight` (
  `id` int(255) NOT NULL,
  `FromCity` varchar(20) NOT NULL,
  `ToCity` varchar(20) NOT NULL,
  `DepDate` date NOT NULL,
  `RetDate` date NOT NULL,
  `userid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Flight`
--

INSERT INTO `Flight` (`id`, `FromCity`, `ToCity`, `DepDate`, `RetDate`, `userid`) VALUES
(1, 'Beirut', 'Istanbul', '2023-12-26', '2023-12-28', 0),
(4, 'istanbul', 'beirut', '2023-12-31', '2024-01-01', 0),
(6, 'London', 'Paris', '2023-12-30', '2023-12-31', 0),
(7, 'Paris', 'London', '2023-12-30', '2023-12-31', 0),
(8, 'Beirut', 'Paris', '2023-12-30', '2023-12-31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Login`
--

CREATE TABLE `Login` (
  `UserName` varchar(20) NOT NULL,
  `Pass` int(20) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BookedFlights`
--
ALTER TABLE `BookedFlights`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserName` (`UserName`);

--
-- Indexes for table `Flight`
--
ALTER TABLE `Flight`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `Login`
--
ALTER TABLE `Login`
  ADD PRIMARY KEY (`UserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `BookedFlights`
--
ALTER TABLE `BookedFlights`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `Flight`
--
ALTER TABLE `Flight`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
