-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2020 at 08:43 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `ID` int(11) NOT NULL,
  `message` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`ID`, `message`, `email`) VALUES
(13, ' I want to know more about this hotel.', ' ksud.th123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cdetails`
--

CREATE TABLE `cdetails` (
  `usernameC` varchar(255) NOT NULL,
  `userpasswordC` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `full_name`, `email`, `message`) VALUES
(29, '', '', ''),
(30, 'Welihena Ranasinghe Vithanage Vinugi Pamada', 'vinugipamada@gmail.com', 'I need to talk with your manager.');

-- --------------------------------------------------------

--
-- Table structure for table `customerlog`
--

CREATE TABLE `customerlog` (
  `Username` varchar(255) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Reenterpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerlog`
--

INSERT INTO `customerlog` (`Username`, `Email`, `Password`, `Reenterpassword`) VALUES
('Amandiii', 'kkkkk_d@gmail.com', 'fghj', 'fghj'),
('Hashara', 'tashh_d@gmail.com', 'asdf', 'asdf'),
('Sithu', 'tgggg_d@gmail.com', 'mnbv', 'mnbv'),
('Amandiiiuu', 'tyui_d@gmail.com', 'asdf', 'asdf'),
('Rathuni', 'uiui@gmail.com', 'qwer', 'qwer'),
('Kavindi', 'uiytt_d@gmail.com', 'qwer', 'qwer'),
('Amandiii', 'uyu@gmail.com', 'lkjh', 'lkjh'),
('Ashini', 'yuyuu_d@gmail.com', 'asdf', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `ContactNo` int(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Age` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`FirstName`, `LastName`, `Email`, `ContactNo`, `Gender`, `Age`, `Date`, `Time`) VALUES
('yeshani ', 'sandunika', '123wer@gmail.com', 901234567, 'on', 20, '2020-11-07', '15:11:00'),
('anushka', 'dananjaya', 'anu2000@gmail.com', 901678543, 'on', 20, '2020-10-30', '09:15:00'),
('chanuka', 'mandawela', 'chanuka@gmail.com', 1234567890, 'on', 21, '2020-10-24', '10:30:00'),
('thejan', 'vimukthi', 'thej1999@gmail.com', 901234567, 'on', 23, '2020-12-09', '13:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`UserName`, `Password`) VALUES
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `Packages` varchar(20) NOT NULL,
  `Email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`Packages`, `Email`) VALUES
('SILVER PACKAGE', 'amma@gmail.com'),
('SILVER PACKAGE', 'anuja0110@gmail.com'),
('PLATINUM PACKAGE', 'chathuni0625@gmail.com'),
('GOLD PACKAGE', 'dian0701@gmail.com'),
('BRONZE PACKAGE', 'gota87@gmail.com'),
('PLATINUM PACKAGE', 'thaththa@gmaul.com');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Gender` varchar(8) NOT NULL,
  `MobileNumber` int(12) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `Password` varchar(20) NOT NULL,
  `RePassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`FirstName`, `LastName`, `Gender`, `MobileNumber`, `Email`, `DOB`, `Password`, `RePassword`) VALUES
('Amma', 'mmmmmm', 'on', 775769747, 'amma@gmail.com', '2020-10-11', '5678', '5678'),
('Anuja', 'Piumal', 'on', 760918810, 'anuja0110@gmail.com', '2020-10-31', 'anju456', 'anju456'),
('Chanuka', 'Nayanajith', 'on', 715226008, 'chanuka0321@gmail.com', '2020-10-03', '1234', '1234'),
('devni', 'maneesha', 'on', 775769747, 'devni87@gmail.com', '2020-10-17', 'devni87', 'devni87'),
('Dian', 'Aththanayake', '', 715226008, 'dian0701@gmail.com', '2020-10-04', '1456', '1456'),
('gotabaya', 'rajapaksha', 'on', 715226008, 'gota87@gmail.com', '2020-10-11', 'gota123', 'gota123'),
('Hansi', 'Perera', 'on', 775769747, 'hansi@gmail.com', '2020-10-18', 'hansi90', 'hansi90');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cdetails`
--
ALTER TABLE `cdetails`
  ADD PRIMARY KEY (`usernameC`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customerlog`
--
ALTER TABLE `customerlog`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`Email`) USING BTREE;

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`UserName`) USING BTREE;

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
