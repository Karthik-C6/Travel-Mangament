-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8111
-- Generation Time: Apr 17, 2021 at 05:18 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`admin_id`, `username`, `phone`, `mail`, `password`) VALUES
(3, 'karthik', '9177170848', 'karthikeya.challagulla@gmail.com', '123'),
(4, 'sai', '9494475375', 'sai@gmail.com', '123'),
(5, 'rahul', '123', 'rahul@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `no_of_days` int(11) NOT NULL,
  `hotel` varchar(50) NOT NULL,
  `Max_people` int(11) NOT NULL,
  `No_of_beds` int(11) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `package_name`, `city`, `no_of_days`, `hotel`, `Max_people`, `No_of_beds`, `Address`, `description`, `image`, `price`, `user_id`) VALUES
(6, '123', 'Guntur', 7, 'karthik', 6, 3, 'guntur, Andhra pradesh', 'szdxfcghbjk', '7wonders.jpg', 1350, 3),
(7, '123456', 'Goa', 7, 'karthik', 6, 3, 'guntur, Andhra pradesh', 'ewdfrgthryj', 'wp1921802-wonders-of-the-world-wallpapers.jpg', 4500, 3),
(8, '1902', 'Vijaywada', 7, 'Fortune', 6, 3, 'vijayawada,Andhra pradesh', 'yrudtfyguhijokpl', 'wp1921814-wonders-of-the-world-wallpapers.jpg', 9999, 3),
(9, 'combo package', 'Guntur', 7, 'karthik', 6, 3, 'guntur, Andhra pradesh', 'sdwefrgthy', 'dWK9jx.jpg', 4500, 3),
(10, 'combo package', 'Hyderabad', 3, 'Nova', 5, 3, 'hyderabad, telangana', 'great hotel', '100bb5b73b8bb96d199ff550ab9ed2de.jpg', 4500, 5);

-- --------------------------------------------------------

--
-- Table structure for table `travel_details`
--

CREATE TABLE `travel_details` (
  `travel_id` int(11) NOT NULL,
  `transportname` varchar(50) NOT NULL,
  `mode` varchar(50) NOT NULL,
  `start` varchar(50) NOT NULL,
  `end` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travel_details`
--

INSERT INTO `travel_details` (`travel_id`, `transportname`, `mode`, `start`, `end`, `date`, `time`, `cost`) VALUES
(1, 'IndiGo', 'aeroplane', 'Vijaywada', 'Hyderabad', '2021-05-22', '09:00:00', 4500),
(2, 'IndiGo', 'aeroplane', 'Vijaywada', 'Goa', '2021-05-19', '10:30:00', 5500),
(3, 'IndiGo', 'aeroplane', 'Vijaywada', 'Mumbai', '2021-05-11', '11:30:00', 7549),
(4, 'IndiGo', 'aeroplane', 'Vijaywada', 'Chennai', '2021-05-09', '14:30:00', 6000),
(5, 'IndiGo', 'aeroplane', 'Vijaywada', 'Kolkata', '2021-05-18', '10:30:00', 6399),
(6, 'IndiGo', 'aeroplane', 'Vijaywada', 'Delhi', '2021-05-06', '08:30:00', 9999),
(7, 'GangaExpress', 'train', 'Guntur', 'Hyderabad', '2021-05-19', '15:30:00', 2999),
(8, 'rahulExpress', 'train', 'Vijaywada', 'Hyderabad', '2021-05-13', '06:30:00', 3500),
(9, 'redbus', 'bus', 'Vijaywada', 'Goa', '2021-05-29', '10:30:00', 1599),
(10, 'Airindia', 'aeroplane', 'vijaywada', 'hyderabad', '2021-05-10', '11:25:00', 5299);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`userid`, `username`, `phone`, `email`, `password`) VALUES
(3, 'karthik', '9177170848', 'karthikeya.challagulla@gmail.com', '123'),
(5, 'rahul', '9494475375', 'rahul@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `travel_details`
--
ALTER TABLE `travel_details`
  ADD PRIMARY KEY (`travel_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `travel_details`
--
ALTER TABLE `travel_details`
  MODIFY `travel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
