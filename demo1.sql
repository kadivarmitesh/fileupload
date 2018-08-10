-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2018 at 01:21 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo1`
--

-- --------------------------------------------------------

--
-- Table structure for table `file_upload`
--

CREATE TABLE `file_upload` (
  `id` int(11) NOT NULL,
  `file` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_upload`
--

INSERT INTO `file_upload` (`id`, `file`) VALUES
(2, 'Chrysanthemum.jpg'),
(3, 'Desert.jpg'),
(7, 'AngularDoc.odt'),
(8, 'Credential.xlsx'),
(27, 'ROV-Participation-Certificate.pdf'),
(32, 'Aconext Training Module.docx'),
(34, 'ppt.pptx'),
(45, 'Hydrangeas.jpg'),
(49, 'Lighthouse.jpg'),
(51, 'Credential.xlsx'),
(52, 'Hydrangeas.jpg'),
(53, 'Jellyfish.jpg'),
(54, 'Canada.xlsx'),
(55, 'Tulips.jpg'),
(56, 'Desert.jpg'),
(57, '1.jpg'),
(58, 'image_07.jpg'),
(59, 'Living-Room1-300x146.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testapi`
--

CREATE TABLE `testapi` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testapi`
--

INSERT INTO `testapi` (`id`, `username`, `email`, `password`) VALUES
(1, 'miteshpatel', 'mitesh.kadivar@overseasits.com', 'abcd@123'),
(2, 'ashishpatel', 'ashish.patel@overseasits.com', 'ashish@123'),
(3, 'bhargav', 'bhargav.pipliya@overseasits.com', 'bhargav@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file_upload`
--
ALTER TABLE `file_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testapi`
--
ALTER TABLE `testapi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file_upload`
--
ALTER TABLE `file_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `testapi`
--
ALTER TABLE `testapi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
