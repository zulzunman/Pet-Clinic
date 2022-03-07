-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 03:59 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petklinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors_200038`
--

CREATE TABLE `doctors_200038` (
  `doctor_id_200038` int(11) NOT NULL,
  `doctor_name_200038` varchar(50) NOT NULL,
  `doctor_gender_200038` varchar(6) NOT NULL,
  `doctor_address_200038` varchar(100) NOT NULL,
  `doctor_phone_200038` varchar(15) NOT NULL,
  `doctor_photo_200038` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors_200038`
--

INSERT INTO `doctors_200038` (`doctor_id_200038`, `doctor_name_200038`, `doctor_gender_200038`, `doctor_address_200038`, `doctor_phone_200038`, `doctor_photo_200038`) VALUES
(2, 'asas', 'Male', 'asssaa', '8964445', 'default.png'),
(3, 'adsd', 'Female', 'fafavavv', '142155', 'guud.png');

-- --------------------------------------------------------

--
-- Table structure for table `medicals_200038`
--

CREATE TABLE `medicals_200038` (
  `mr_id_200038` int(11) NOT NULL,
  `mr_date_200038` timestamp NOT NULL DEFAULT current_timestamp(),
  `pet_id_200038` int(11) NOT NULL,
  `doctor_id_200038` int(11) NOT NULL,
  `symptom_200038` varchar(255) NOT NULL,
  `diagnose_200038` varchar(255) NOT NULL,
  `treatment_200038` varchar(255) NOT NULL,
  `cost_200038` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicals_200038`
--

INSERT INTO `medicals_200038` (`mr_id_200038`, `mr_date_200038`, `pet_id_200038`, `doctor_id_200038`, `symptom_200038`, `diagnose_200038`, `treatment_200038`, `cost_200038`) VALUES
(7, '2021-12-21 09:23:53', 1, 3, 'asda', 'dada', 'asd', 1214),
(8, '2022-01-18 07:46:46', 3, 2, 'ada', 'kulit kebakar', 'aaaa', 20);

-- --------------------------------------------------------

--
-- Table structure for table `pets_200038`
--

CREATE TABLE `pets_200038` (
  `pet_id_200038` int(11) NOT NULL,
  `pet_name_200038` varchar(30) NOT NULL,
  `pet_type_200038` varchar(30) NOT NULL,
  `pet_gender_200038` varchar(6) NOT NULL,
  `pet_age_200038` int(11) NOT NULL,
  `pet_owner_200038` varchar(50) NOT NULL,
  `pet_address_200038` varchar(100) NOT NULL,
  `pet_phone_200038` varchar(15) NOT NULL,
  `pet_photo_200038` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pets_200038`
--

INSERT INTO `pets_200038` (`pet_id_200038`, `pet_name_200038`, `pet_type_200038`, `pet_gender_200038`, `pet_age_200038`, `pet_owner_200038`, `pet_address_200038`, `pet_phone_200038`, `pet_photo_200038`) VALUES
(1, 'Jack', 'Cat', 'Female', 13, 'Andri', 'malang', '022311033', 'index.jpeg'),
(3, 'gan', 'Bird', 'Female', 14, 'jean', 'bandung', '08877122', 'bird.jpeg'),
(8, 'boy', 'Rodent', 'Male', 4, 'koko', 'garut', '08765552', 'rodent.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users_200038`
--

CREATE TABLE `users_200038` (
  `userid_200038` int(11) NOT NULL,
  `username_200038` varchar(100) NOT NULL,
  `password_200038` varchar(255) NOT NULL,
  `usertype_200038` varchar(10) NOT NULL,
  `fullname_200038` varchar(100) NOT NULL,
  `user_photo_200038` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_200038`
--

INSERT INTO `users_200038` (`userid_200038`, `username_200038`, `password_200038`, `usertype_200038`, `fullname_200038`, `user_photo_200038`) VALUES
(7, 'faiz', '$2y$10$cWxur9ZrXKVuCy.55v5Y8uKGgO7nYgSBErhK3CIQuoeN/ltmAS9nO', 'Manager', 'zulfaiz', 'coba1.png'),
(8, 'zul', '$2y$10$Q29aRHI/UJRHLNKF.0kUfuIuTarDiT39Q8xsMlfl7dyN8HEtuRs8q', 'Staff', 'Faizulhaq', 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors_200038`
--
ALTER TABLE `doctors_200038`
  ADD PRIMARY KEY (`doctor_id_200038`);

--
-- Indexes for table `medicals_200038`
--
ALTER TABLE `medicals_200038`
  ADD PRIMARY KEY (`mr_id_200038`),
  ADD KEY `pet_id_200038` (`pet_id_200038`),
  ADD KEY `doctor_id_200038` (`doctor_id_200038`);

--
-- Indexes for table `pets_200038`
--
ALTER TABLE `pets_200038`
  ADD PRIMARY KEY (`pet_id_200038`);

--
-- Indexes for table `users_200038`
--
ALTER TABLE `users_200038`
  ADD PRIMARY KEY (`userid_200038`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors_200038`
--
ALTER TABLE `doctors_200038`
  MODIFY `doctor_id_200038` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medicals_200038`
--
ALTER TABLE `medicals_200038`
  MODIFY `mr_id_200038` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pets_200038`
--
ALTER TABLE `pets_200038`
  MODIFY `pet_id_200038` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users_200038`
--
ALTER TABLE `users_200038`
  MODIFY `userid_200038` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `medicals_200038`
--
ALTER TABLE `medicals_200038`
  ADD CONSTRAINT `medicals_200038_ibfk_1` FOREIGN KEY (`pet_id_200038`) REFERENCES `pets_200038` (`pet_id_200038`),
  ADD CONSTRAINT `medicals_200038_ibfk_2` FOREIGN KEY (`doctor_id_200038`) REFERENCES `doctors_200038` (`doctor_id_200038`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
