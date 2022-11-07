-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2021 at 05:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `winnie`
--

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `ID` int(25) NOT NULL,
  `Adm/User` int(1) NOT NULL,
  `USNAME` text NOT NULL,
  `USMAIL` text NOT NULL,
  `USCOMPL` varchar(45) NOT NULL,
  `USPASS` varchar(25) NOT NULL,
  `FEEDBACK` longtext NOT NULL,
  `USPHON` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`ID`, `Adm/User`, `USNAME`, `USMAIL`, `USCOMPL`, `USPASS`, `FEEDBACK`, `USPHON`) VALUES
(1, 0, 'DENNIS MUTEMI', 'mutemidenis26@gmail.com', 'MISSING MARKS:', '1234567890', '', 890673),
(2, 0, 'MIKE MULEI', 'denismutemi84@gmail.com', 'i cant access my moodle account', '1234567890', '', 798593416),
(3, 0, 'Mwangangi Meshack', '2103374@students.kca.ac.ke', '', 'qwertyuiop', ' thanks', 123456789),
(7, 0, 'winnie', 'winnie@gmail.com', 'invalid log in', '12345', '', 798593416),
(8, 0, 'steve kim', 'stevekim@gmail.com', 'i hate you sir', 'qwertyuiop', '', 0),
(9, 1, 'michael mutemi', 'michaelm23@gmail.com', '', 'asdfghjkl', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
