-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 12:22 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `web` text NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `numofcourse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`username`, `password`, `email`, `address`, `web`, `dob`, `gender`, `numofcourse`) VALUES
('Sumaiya123', 'Sumaiya45', 'sumaiya@gmail.com', 'Sumaiya house', 'https://www.somaiya.com', '1892-08-07', 'Female', 3),
('rahim143', '', 'rahim143@gmail.com', 'Dhaka', 'https://www.rahim143.com', '1880-05-24', 'male', 7),
('John123', '', 'john123@gmail.com', 'Canada', 'https://www.john123.com', '1992-06-04', 'male', 4),
('Abraham123', '', 'abraham123@gmail.com', 'Australia', 'https://www.abraham123.com', '1996-07-08', 'male', 3),
('Joe123', '', 'joebiden12@gmail.com', 'America', 'https://www.joebiden.com', '1992-05-01', 'male', 6);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
