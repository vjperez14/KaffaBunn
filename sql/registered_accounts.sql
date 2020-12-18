-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 09:12 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaffabunn`
--

-- --------------------------------------------------------

--
-- Table structure for table `registered_accounts`
--

CREATE TABLE `registered_accounts` (
  `account_id` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(25) NOT NULL,
  `street` varchar(25) NOT NULL,
  `streetopt` varchar(25) NOT NULL,
  `town` varchar(25) NOT NULL,
  `zip` varchar(5) NOT NULL,
  `phone` varchar(18) NOT NULL,
  `cart` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_accounts`
--

INSERT INTO `registered_accounts` (`account_id`, `firstname`, `lastname`, `email`, `password`, `city`, `street`, `streetopt`, `town`, `zip`, `phone`, `cart`, `quantity`) VALUES
(12, 'test', 'test', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'test', 'test', 'test', 'test', '0', '12312312312', '', ''),
(13, 'testing', 'testing', 'testing2@gmail.com', '7f2ababa423061c509f4923dd04b6cf1', 'test', 'test', 'test', 'test', '0', '12312312312', '', ''),
(14, 'testing', 'testing', 'testing3@gmail.com', 'ae2b1fca515949e5d54fb22b8ed95575', 'testing', 'testing', 'testing', 'testing', '0', '12312312312', '', ''),
(15, 'Vince John', 'Perez', 'perezvj.main@gmail.com', '7f2ababa423061c509f4923dd04b6cf1', 'Quezon City', 'Peacock St.', 'Unit 5315 Flora Vista', 'Brgy. Commonwealth', '1121', '09359148135', '', ''),
(16, 'Imelda', 'Rapanot', 'irapanot@yahoo.com', '5d93ceb70e2bf5daa84ec3d0cd2c731a', 'Angono', 'Daffodil St., Grandvalley', '17-c lot 35', 'Angono', '1930', '09123456', '0,2,4', '0,2,1'),
(17, 'John ', 'Mickey', 'qwe@gmail.com', '5d93ceb70e2bf5daa84ec3d0cd2c731a', 'Angono', '17-c Daffodil St., Grandv', '17c Daffoldil', 'Mahabang Parang', '1930', '12341234', ',18,13,1', ',1,2,4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registered_accounts`
--
ALTER TABLE `registered_accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registered_accounts`
--
ALTER TABLE `registered_accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
