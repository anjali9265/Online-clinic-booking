-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2018 at 07:01 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `cancel_app`
--

CREATE TABLE `cancel_app` (
  `id` smallint(6) NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cancel_app`
--

INSERT INTO `cancel_app` (`id`, `from`, `to`) VALUES
(1, '2018-02-15', '2018-02-15');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `uname` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `uname`, `pass`) VALUES
(1, 'admin', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `gender` text NOT NULL,
  `mobile` double NOT NULL,
  `age` smallint(6) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `slot_date` date NOT NULL,
  `slot` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `gender`, `mobile`, `age`, `address`, `email`, `slot_date`, `slot`) VALUES
(1, 'ANJALI P A', 'Female', 4842428590, 20, '233 Girinagar, Kadavanthara\r\nKadavanthara', 'paru97@gmail.com', '2018-02-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `slote` int(11) NOT NULL,
  `time` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`slote`, `time`) VALUES
(1, 2),
(2, 2.15),
(3, 2.3),
(4, 2.45),
(5, 3),
(6, 3.15),
(7, 3.3),
(8, 3.45);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cancel_app`
--
ALTER TABLE `cancel_app`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`slote`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slot`
--
ALTER TABLE `slot`
  MODIFY `slote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
