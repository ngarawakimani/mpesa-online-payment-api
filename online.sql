-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2017 at 05:12 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mpesa`
--

-- --------------------------------------------------------

--
-- Table structure for table `online`
--

CREATE TABLE `online` (
  `id` int(11) NOT NULL,
  `resultCode` varchar(255) NOT NULL,
  `resultDesc` varchar(255) NOT NULL,
  `merchantRequestID` varchar(255) NOT NULL,
  `checkoutRequestID` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `mpesaReceiptNumber` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `b2CUtilityAccountAvailableFunds` varchar(255) NOT NULL,
  `transactionDate` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online`
--

INSERT INTO `online` (`id`, `resultCode`, `resultDesc`, `merchantRequestID`, `checkoutRequestID`, `amount`, `mpesaReceiptNumber`, `balance`, `b2CUtilityAccountAvailableFunds`, `transactionDate`, `phoneNumber`) VALUES
(2, 'fsdfs', 'fsdfs', 'fsdfs', 'ws_CO_27112017154942672', 'fsdfs', 'fsdfs', 'fsdfs', 'fsdfs', 'fsdfs', 'fsdfs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `online`
--
ALTER TABLE `online`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `online`
--
ALTER TABLE `online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
