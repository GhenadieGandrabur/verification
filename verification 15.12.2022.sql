-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 04:19 PM
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
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `vehicle` text NOT NULL,
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
  `authorId` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `date`, `vehicle`, `proprietar`, `k_vechi`, `k_nou`, `w_vechi`, `w_nou`, `odometrupina`, `odometrudupa`, `presiune`, `lungimeacircomferentii`, `limitatordeviteza`, `valabilitate`, `baterea`, `authorId`) VALUES
(17, '2022-09-19 00:00:00', '555GGG', 'Tahograf SRL', '44444', '44444', '', '99999', '2222222', '6666666', '7.8', '3150', '90', '20.03.2024', 0, 3),
(36, '2022-09-20 00:00:00', 'Prosper trans', '333DDD', '17', '17', '17', '17', '2222222', '6666666', '7.8', '3150', '90', '20.03.2024', 0, 3),
(39, '2022-09-20 00:00:00', '555GGG3', 'Tahograf SRL', '44444', '', '', '', '2222222', '6666666', '7.8', '3150', '90', '20.03.2024', 0, 3),
(40, '2022-09-20 00:00:00', '555GGG3d', 'Tahograf SRL', '44444', '', '', '', '2222222', '6666666', '7.8', '3150', '90', '20.03.2024', 0, 3),
(48, '2022-09-20 00:00:00', '555GGG3d', 'Tahograf SRL', '44444', '44444', '', '', '2222222', '6666666', '7.8', '3150', '90', '20.03.2024', 0, 3),
(49, '2022-09-22 00:00:00', 'Tahograf srl', 'CCC456', '44444', '', '', '', '2222222', '6666666', '7.8', '3150', '90', '20.03.2024', 0, 3),
(50, '2022-09-25 00:00:00', '555GGG', 'Tahograf SRL', '44444', '', '', '', '2222222', '6666666', '7.8', '3150', '90', '20.03.2024', 0, 3),
(51, '2022-09-25 00:00:00', '555GGG', 'Tahograf SRL', '44444', '', '', '', '2222222', '6666666', '7.8', '3150', '90', '20.03.2024', 0, 3),
(52, '2022-09-25 00:00:00', '39', '25.09.2022', '44444', '', '', '', '2222222', '6666666', '7.8', '3150', '90', '20.03.2024', 0, 3),
(53, '2022-09-25 00:00:00', '39', '25.09.2022', '44444', '', '', '', '2222222', '6666666', '7.8', '3150', '90', '20.03.2024', 0, 3),
(54, '2022-09-25 00:00:00', '555GGG3d', 'Tahograf SRL-----', '44444', '', '', '', '2222222', '6666666', '7.8', '3150', '90', '20.03.2024', 0, 3),
(55, '2022-09-25 00:00:00', '555GGG3d', 'Tahograf SRL', '44444', '', '', '', '2222222', '6666666', '7.8', '3150', '90', '20.03.2024', 0, 3),
(56, '2022-09-25 00:00:00', 'Avanset SRL', 'CNI336', '44444', '', '', '', '2222222', '6666666', '7.8', '3150', '90', '20.03.2024', 0, 3),
(57, '2022-09-25 00:00:00', 'Andezit SRL', 'ZWW939', '44444', '', '', '', '2222222', '6666666', '7.8', '3150', '90', '20.03.2024', 0, 3),
(58, '2022-09-25 00:00:00', 'CAV803', 'Tahograf SRL', '44444', '', '', '', '2222222', '6666666', '7.8', '3150', '90', '20.03.2024', 0, 3),
(59, '2022-09-25 00:00:00', 'CAV803', 'Tahograf SRL', '44444', '', '', '', '2222222', '6666666', '7.8', '3150', '90', '20.03.2024', 0, 3);

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
(1, '1111111111', 1, 0, '125 km/h'),
(2, '123456', 1, 0, '125 km/h'),
(3, '213654789', 4, 0, '180 km/h'),
(4, '123456', 5, 0, '125 km/h'),
(5, '123456', 3, 0, '180 km/h'),
(6, '123456', 1, 0, '125 km/h'),
(7, '123654', 4, 0, '220 km/h');

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
(1, '315/70/21.5');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(5) NOT NULL,
  `date` datetime NOT NULL,
  `numberplate` varchar(10) NOT NULL,
  `vin` varchar(30) NOT NULL,
  `owner` text NOT NULL,
  `tahoId` int(5) NOT NULL,
  `tyresize` varchar(20) NOT NULL,
  `yearproduction` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `date`, `numberplate`, `vin`, `owner`, `tahoId`, `tyresize`, `yearproduction`) VALUES
(8, '2022-09-24 00:00:00', '336699', 'ELKO0000', 'Caterpilar SRL', 1, '315/70/21.5', '2000'),
(11, '0000-00-00 00:00:00', 'ZWW939', 'Jas456456123', 'Tahograf SRL', 0, '205/70/19.5', '2022');

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
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

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
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vehiclesowners`
--
ALTER TABLE `vehiclesowners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
