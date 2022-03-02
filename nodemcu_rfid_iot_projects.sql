-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2020 at 12:40 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nodemcu_rfid_iot_projects`
--

-- --------------------------------------------------------

--
-- Table structure for table `Table_Input_Data`
--

CREATE TABLE `Table_Input_Data` (
  `name` varchar(100) NOT NULL,
  `id` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Table_Input_Data`
--

INSERT INTO `Table_Input_Data` (`name`, `id`, `gender`, `email`, `mobile`) VALUES
('Mansara', '39EAB06D', 'Male', 'mansaras@sltc.ac.lk', '0784798075'),
('Himal', '769174F8', 'Male', 'himalk@sltc.ac.lk', '0716712807'),
('Prashantha', '81A3DC79', 'Male', 'prashanthap@sltc.ac.lk', '0774969846'),
('Sasila', '81B080A7', 'Male', 'sasilaj@sltc.ac.lk', '0715420475');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `Table_Input_Data`
--
ALTER TABLE `Table_Input_Data`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
