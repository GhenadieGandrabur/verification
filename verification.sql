-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2022 at 11:16 AM
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
-- Database: `verification`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` varchar(256) NOT NULL,
  `priority` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `date`, `name`, `email`, `password`, `priority`) VALUES
(1, '2022-09-09', 'Boss', 'info@tahograf.md', '123', '1'),
(2, '2022-09-09', 'Manager', 'ghenadiigandrabur@gmail.com', '123', '1'),
(3, '0000-00-00', 'Ghenadie', 'test@test.md', '$2y$10$asVuySVYKZlJpS.iMIuFKOogSjJmNVpWzANnCCjBYo7ZKkBqASvUW', ''),
(4, '0000-00-00', 'Dima', 'dm@dm.md', '$2y$10$IIHEk2lBooAyx6ViWdsMM.PHfk3vgETpizS6oXvekzbty4nkm.6Eq', '');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(5) NOT NULL,
  `namebrand` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `namebrand`) VALUES
(1, 'MB'),
(2, 'VOLVO'),
(3, 'IVECO');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `vehicle` text NOT NULL,
  `vin` varchar(20) NOT NULL,
  `brandId` int(3) NOT NULL,
  `model` varchar(30) NOT NULL,
  `proprietar` varchar(30) NOT NULL,
  `k_vechi` varchar(5) NOT NULL,
  `k_nou` varchar(5) NOT NULL,
  `w_vechi` varchar(5) NOT NULL,
  `w_nou` varchar(5) NOT NULL,
  `odometrupina` varchar(7) NOT NULL,
  `odometrudupa` varchar(7) NOT NULL,
  `presiune` varchar(3) NOT NULL,
  `lungimeacircomferentii` varchar(4) NOT NULL,
  `limitatordeviteza` varchar(3) NOT NULL,
  `valabilitate` text NOT NULL,
  `baterea` int(1) NOT NULL,
  `authorId` int(5) NOT NULL,
  `tyresize` varchar(10) NOT NULL,
  `yearproduction` varchar(4) NOT NULL,
  `tahoId` varchar(10) NOT NULL,
  `tahotype` varchar(20) NOT NULL,
  `measurementRange` varchar(3) NOT NULL,
  `recordertypeId` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `date`, `vehicle`, `vin`, `brandId`, `model`, `proprietar`, `k_vechi`, `k_nou`, `w_vechi`, `w_nou`, `odometrupina`, `odometrudupa`, `presiune`, `lungimeacircomferentii`, `limitatordeviteza`, `valabilitate`, `baterea`, `authorId`, `tyresize`, `yearproduction`, `tahoId`, `tahotype`, `measurementRange`, `recordertypeId`) VALUES
(11, '2022-12-19 16:15:08', 'ZWW939', 'Jas456456123', 0, '', 'Tahograf SRL', '', '', '', '', '', '', '', '', '', '', 0, 3, '205/70/19.', '2022', 'undefined', 'undefined', '220', 0),
(12, '2022-12-24 10:21:38', 'CAV803', '021132521', 0, '', 'Caterpilar SRL.', '44444', '', '123', '', '2222222', '6666666', '7.8', '3150', '90', '24.12.2024', 0, 3, '205/70/19.', '2000', '66666666', '1', '125', 0),
(74, '2022-12-24 09:36:43', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '24.12.2024', 1, 3, '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `taholist`
--

CREATE TABLE `taholist` (
  `id` int(10) NOT NULL,
  `tahonumber` text NOT NULL,
  `tahotypeId` int(2) NOT NULL,
  `recordertypeId` int(1) NOT NULL,
  `measurementRange` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taholist`
--

INSERT INTO `taholist` (`id`, `tahonumber`, `tahotypeId`, `recordertypeId`, `measurementRange`) VALUES
(1, '1111111111', 2, 0, '125 km/h'),
(2, '22222222', 1, 0, '125 km/h'),
(3, '333333333', 3, 0, '180 km/h'),
(4, '444444444', 5, 0, '125 km/h'),
(5, '55555555', 3, 0, '180 km/h'),
(6, '66666666', 1, 0, '125 km/h'),
(7, '4444444444', 3, 0, '220 km/h');

-- --------------------------------------------------------

--
-- Table structure for table `tahotypes`
--

CREATE TABLE `tahotypes` (
  `id` int(11) NOT NULL,
  `typetaho` varchar(20) NOT NULL,
  `recordertype` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tahotypes`
--

INSERT INTO `tahotypes` (`id`, `typetaho`, `recordertype`) VALUES
(1, 'VDO 1314', 0),
(2, 'VDO 1318', 0),
(3, 'VDO 1324', 0),
(4, 'VDO 1381', 1),
(5, 'VR 2400', 1),
(6, 'SE5000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tyressize`
--

CREATE TABLE `tyressize` (
  `id` int(11) NOT NULL,
  `size` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tyressize`
--

INSERT INTO `tyressize` (`id`, `size`) VALUES
(1, '315/80R22.5'),
(2, '315/70/R21.5');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(5) NOT NULL,
  `date` datetime NOT NULL,
  `numberplate` varchar(10) NOT NULL,
  `brandId` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `vin` varchar(30) NOT NULL,
  `owner` text NOT NULL,
  `tahoId` int(5) NOT NULL,
  `tyresize` varchar(20) NOT NULL,
  `yearproduction` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `date`, `numberplate`, `brandId`, `model`, `vin`, `owner`, `tahoId`, `tyresize`, `yearproduction`) VALUES
(8, '2022-09-24 00:00:00', '336699', 'MB', 'Actros', 'ELKO0000', 'Caterpilar SRL', 1, '315/80R22.5', ''),
(11, '0000-00-00 00:00:00', 'ZWW939', '', '', 'Jas456456123', 'Tahograf SRL', 7, '315/70/R21.5', ''),
(12, '0000-00-00 00:00:00', 'CAV803', '', 'MODEL', '021132521', 'Caterpilar SRL.', 6, '315/80R22.5', ''),
(13, '0000-00-00 00:00:00', 'RRRRRRRRRR', 'MB', 'Actros', 'XLRTE', 'Jora', 7, '315/80R22.5', '2022');

-- --------------------------------------------------------

--
-- Table structure for table `vehiclesowners`
--

CREATE TABLE `vehiclesowners` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `codfiscal` text NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehiclesowners`
--

INSERT INTO `vehiclesowners` (`id`, `name`, `codfiscal`, `note`) VALUES
(1, 'Tahograf SRL', '1111111111', 'Good'),
(10, 'Caterpilar SRL', '12345678912', 'Good'),
(11, 'Caterpilar SRL', '12345678912', 'Good'),
(12, 'Caterpilar SRL', '12345678912', 'Good');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taholist`
--
ALTER TABLE `taholist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahotypes`
--
ALTER TABLE `tahotypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tyressize`
--
ALTER TABLE `tyressize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehiclesowners`
--
ALTER TABLE `vehiclesowners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `taholist`
--
ALTER TABLE `taholist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tahotypes`
--
ALTER TABLE `tahotypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tyressize`
--
ALTER TABLE `tyressize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=498;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `vehiclesowners`
--
ALTER TABLE `vehiclesowners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
