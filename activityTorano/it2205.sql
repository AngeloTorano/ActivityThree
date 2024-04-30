-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 02:49 PM
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
-- Database: `2205torano`
--

-- --------------------------------------------------------

--
-- Table structure for table `it2205`
--

CREATE TABLE `it2205` (
  `studentID` varchar(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contactNo` varchar(15) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `guardianName` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `it2205`
--

INSERT INTO `it2205` (`studentID`, `name`, `age`, `address`, `contactNo`, `gender`, `guardianName`) VALUES
('22-30168', 'Raven Landicho S.', 19, 'Tangway Lipa City', '09261480046', 'Other', 'Lilia Landicho'),
('22-30660', 'John Vincent G. Laylo', 20, 'Banaybanay Lipa City', '09276663575', 'Male', 'Maria Luisa G. Laylo'),
('22-32398', 'Rommel C Rabino', 19, 'Subukin San Juan Batangas', '09694423028', 'Male', 'Maricris C Rabino'),
('22-33169', 'Kane Paul Acielo', 19, 'Marawoy Lipa City', '09461129983', 'Male', 'Elsa Acielo'),
('22-33258', 'Brian A. Tolentino', 20, 'Sabang Lipa City', '09934701681', 'Male', 'Alma Tolentino'),
('22-34110', 'Glenn Roy Dimaandal', 19, 'Malvar Batangas', '09260984037', 'Male', 'Glenda Dimaandal'),
('22-36451', 'Ian Kristofer Cendaña', 20, 'Cuenca, Batangas', '09456792183', 'Male', 'Ma. Cecilia Cendaña'),
('22-38104', 'Estolano Vien', 19, 'Lipa batangas', '09234567891', 'Male', 'Michael Estolano'),
('22-38282', 'Veejay Adame', 20, 'Padre Garcia, Batangas', '09516602848', 'Male', 'Teresita Adame'),
('22-39493', 'Jeffrey De Luna', 23, 'Balagbag San Juan Batangas', '09668256824', 'Male', 'Fely De Luna'),
('2233882', 'Angelo Torano', 22, 'San Roque Rosario Batangas', '09109086566', 'Male', 'Carol Torano');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `it2205`
--
ALTER TABLE `it2205`
  ADD PRIMARY KEY (`studentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
