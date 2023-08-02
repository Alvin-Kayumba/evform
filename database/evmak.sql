-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2023 at 03:26 PM
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
-- Database: `evmak`
--

-- --------------------------------------------------------

--
-- Table structure for table `evform`
--

CREATE TABLE `evform` (
  `ID` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `regnumber` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobilenumber` int(30) NOT NULL,
  `degree` varchar(30) NOT NULL,
  `year` int(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `certificate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `evform`
--

INSERT INTO `evform` (`ID`, `fullname`, `username`, `regnumber`, `email`, `password`, `mobilenumber`, `degree`, `year`, `gender`, `certificate`) VALUES
(56, 'ALVIN KAYUMBA', 'ALVIN', '2022-04-03950', 'alvinkayumba@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 753361704, 'BIT', 2, 'Male', 'Documents/ALVIN KAYUMBA/PT Request Letter 2023.docx'),
(57, 'ALVIN KAYUMBA', 'ALVINK', '2022-04-03950', 'alvinkayumba22@gmail.com', '84c6494d30851c63a55cdb8cb047fadd', 658572330, 'BIT', 2, 'Male', 'Documents/ALVIN KAYUMBA/PT Request Letter 2023.pdf'),
(58, 'GLORIA NTUKE', 'GLORIA', '2022-049773', 'gntuke68@gmail.com', 'b3f61131b6eceeb2b14835fa648a48ff', 715456532, 'EET', 3, 'Female', 'Documents/GLORIA NTUKE/PT Request Letter 2023.docx'),
(59, 'INO MOSES', 'INO', '2002-89-64', 'inomoses@gmail.com', 'def7924e3199be5e18060bb3e1d547a7', 88656578, 'TE', 3, 'Male', 'Documents/INO MOSES/PT Request Letter 2023.pdf'),
(60, 'HELLO WORLD', 'HELLO', '2355-9-765', 'helloworld@gmail.com', '03bc8e45ce4903b86f933ebb1fedbc44', 86567478, 'Enter your degree program', 0, '', ''),
(61, '', 'HELLO', '266-00-753', 'helloworld@gmail.com', '24e27b869b66e9e62724bd7725d5d9c1', 9856849, 'BIT', 2, 'Male', 'Documents//PT Request Letter 2023.docx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evform`
--
ALTER TABLE `evform`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `evform`
--
ALTER TABLE `evform`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
