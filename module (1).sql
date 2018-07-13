-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2018 at 02:08 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `module`
--

-- --------------------------------------------------------

--
-- Table structure for table `keyword_module`
--

CREATE TABLE `keyword_module` (
  `kid` int(255) NOT NULL,
  `pid` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keyword_module`
--

INSERT INTO `keyword_module` (`kid`, `pid`, `keywords`) VALUES
(1, '1', 'plugins'),
(2, '1', 'client');

-- --------------------------------------------------------

--
-- Table structure for table `platform_module`
--

CREATE TABLE `platform_module` (
  `pid` int(255) NOT NULL,
  `platform_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `platform_module`
--

INSERT INTO `platform_module` (`pid`, `platform_name`) VALUES
(1, 'Wordpress');

-- --------------------------------------------------------

--
-- Table structure for table `referance_module`
--

CREATE TABLE `referance_module` (
  `rid` int(255) NOT NULL,
  `pid` varchar(255) NOT NULL,
  `kid` varchar(255) NOT NULL,
  `platform_name` varchar(255) NOT NULL,
  `keyword_name` varchar(255) NOT NULL,
  `urls` varchar(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `server_data` varchar(255) NOT NULL,
  `worked_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referance_module`
--

INSERT INTO `referance_module` (`rid`, `pid`, `kid`, `platform_name`, `keyword_name`, `urls`, `admin_name`, `server_data`, `worked_by`) VALUES
(1, '1', '1', 'Wordpress', 'plugins,', 'www.wordpress.com', 'password-9227', 'localhost', 'Neha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keyword_module`
--
ALTER TABLE `keyword_module`
  ADD PRIMARY KEY (`kid`);

--
-- Indexes for table `platform_module`
--
ALTER TABLE `platform_module`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `referance_module`
--
ALTER TABLE `referance_module`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keyword_module`
--
ALTER TABLE `keyword_module`
  MODIFY `kid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `platform_module`
--
ALTER TABLE `platform_module`
  MODIFY `pid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `referance_module`
--
ALTER TABLE `referance_module`
  MODIFY `rid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
