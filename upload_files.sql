-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2021 at 06:47 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upload files`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `sno` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `roll` int(225) NOT NULL,
  `myfile` varchar(100) NOT NULL,
  `exten` varchar(100) NOT NULL,
  `dtim` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`sno`, `name`, `roll`, `myfile`, `exten`, `dtim`) VALUES
(1, 'minisha', 507, 'New doc 29 May 2021 12.36 (1).pdf', '', '2021-07-15 08:34:45'),
(2, 'karthikeya', 504, 'OS Questions.docx', '', '2021-07-15 08:37:08'),
(3, 'kerthi', 503, '19A51A0507 (2).docx', 'application/octet-stream', '2021-07-15 14:30:49'),
(4, 'amrutha', 501, 'P&S with R AITAM.pdf', 'application/pdf', '2021-07-15 14:31:33'),
(5, 'ammu', 201, 'DBMS Important Questions.docx', 'application/octet-stream', '2021-07-15 14:33:12'),
(12, 'lakshmi', 579, 'key constraints(dbms).pdf', 'application/pdf', '2021-07-16 00:58:24'),
(13, 'mouni', 567, 'webdevelopment report.docx', 'application/octet-stream', '2021-07-16 04:59:32'),
(15, 'nani', 390, 'soft skills.pdf', 'application/pdf', '2021-07-16 05:07:30'),
(16, 'kurthi', 141, 'CO&A-AssignmentQP.docx', 'application/octet-stream', '2021-07-16 05:11:40'),
(17, 'somu', 321, 'UNIT-2.pdf', 'application/pdf', '2021-07-16 05:15:36'),
(19, 'gnane', 143, 'OSUnit - 5.pdf', 'application/pdf', '2021-07-16 05:30:52'),
(20, 'rani', 379, 'dld-unit 1(e).pdf', 'application/pdf', '2021-07-16 15:25:00'),
(21, 'Bhanu', 123, 'oops unit 4.docx', 'application/octet-stream', '2021-07-16 17:33:43'),
(22, 'srinu', 456, 'Process to log in email in the mobile.docx', 'application/octet-stream', '2021-07-16 17:36:57'),
(23, 'hani', 679, '19A51A0507.docx', 'application/octet-stream', '2021-07-17 10:36:43'),
(24, 'raja', 254, 'number theory(3).pdf', 'application/pdf', '2021-07-17 10:49:06'),
(25, 'rani', 678, 'CO&A-AssignmentQP.docx', 'application/octet-stream', '2021-07-17 15:28:49'),
(26, 'venkata', 678, 'New doc 29 May 2021 12.36 (1).pdf', 'application/pdf', '2021-07-17 15:41:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
