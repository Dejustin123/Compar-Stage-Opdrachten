-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2019 at 11:25 AM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Compar`
--

-- --------------------------------------------------------

--
-- Table structure for table `Mail`
--

CREATE TABLE IF NOT EXISTS `Mail` (
  `mail` varchar(30) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `ID` int(11) NOT NULL,
  `Descriptie` varchar(400) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Mail`
--

INSERT INTO `Mail` (`mail`, `Name`, `ID`, `Descriptie`) VALUES
('georgia@willem.nl', 'Willem', 6, ''),
('harryvvliet@gmail.com', 'harry', 9, 'd'),
('harryvvliet@gmail.com', 'harry', 11, 'd'),
('harryvvliet@gmail.com', 'harry', 12, 'stage'),
('harryvvliet@gmail.com', 'harry', 14, 'Mijn auto is vies waar is de meest dichstbij staande car wash?');

-- --------------------------------------------------------

--
-- Table structure for table `recentie`
--

CREATE TABLE IF NOT EXISTS `recentie` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Recentie` varchar(400) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recentie`
--

INSERT INTO `recentie` (`ID`, `Name`, `Recentie`) VALUES
(1, ' Willem', ' Mooie Handel Hierzo '),
(36, 'Henk', '&lt;script&gt; alert(&quot; hey&quot; ) &lt;/script&gt;'),
(52, 'peter', 'dit is leuk'),
(53, 'pietje', 'wat is dit een mooie website');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Mail`
--
ALTER TABLE `Mail`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `recentie`
--
ALTER TABLE `recentie`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Mail`
--
ALTER TABLE `Mail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `recentie`
--
ALTER TABLE `recentie`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
