-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2022 at 11:23 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
