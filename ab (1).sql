-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2020 at 11:07 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ab`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `Title` varchar(500) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `user_id` varchar(150) NOT NULL,
  `shop_id` varchar(150) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `links` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `Title`, `content`, `user_id`, `shop_id`, `photo`, `links`) VALUES
(1, 'Closed', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now ', 'rkgupta82100@gmail.com', '14', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bussiness_data`
--

CREATE TABLE `bussiness_data` (
  `id` int(11) NOT NULL,
  `shopname` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `time` varchar(30) NOT NULL,
  `days` varchar(150) NOT NULL,
  `About` varchar(10000) NOT NULL,
  `user_id` varchar(150) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bussiness_data`
--

INSERT INTO `bussiness_data` (`id`, `shopname`, `city`, `address`, `phone`, `time`, `days`, `About`, `user_id`, `photo`) VALUES
(10, 'Lajwanti Textiles Clothes and shops', 'jamshedpur', 'garabasha khan bagan golmuri ,jamshedur', '8228032094', '10:00AM-9:00PM', 'DAILY', '', 'rkgupta8100@gmail.com', 'http://[::1]/ab/uploads/4k-wallpaper-audi-audi-r8-14027871.jpg'),
(14, 'Lajwanti Textiles Clothes and shops', 'jamshedpur', 'garabasha khan bagan golmuri ,jamshedur', '8228032094', '10:00AM-9:00PM', 'MONDAY-SATURDAY', 'hello we are here.', 'rkgupta82100@gmail.com', 'http://[::1]/ab/uploads/23.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(120) NOT NULL,
  `phone` varchar(120) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `phone`, `photo`) VALUES
(22, 'rkgupta8100@gmail.com', 'M12365478', 'Manish kumar gupta', '8228032094', 'http://[::1]/ab/userphoto/Untitled-4.jpg'),
(23, 'rkgupta82100@gmail.com', '12345678', 'Ravi kumar gupta', '8228032094', 'http://[::1]/ab/userphoto/travel-hd-2560x1440.jpg'),
(24, 'rkgupta83200@gamil.com', 'gtyty789', 'ravi kumar gupta', '8228032094', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bussiness_data`
--
ALTER TABLE `bussiness_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bussiness_data`
--
ALTER TABLE `bussiness_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
