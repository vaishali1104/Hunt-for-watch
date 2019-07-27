-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2018 at 01:03 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watches`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(500) NOT NULL,
  `passw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `passw`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand`) VALUES
(3, 'Titan'),
(4, 'Fastrack'),
(5, 'Timex'),
(6, 'Fossil'),
(10, 'Tommy Hilfiger');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(12, 'kids watch'),
(13, 'women watch'),
(14, 'men watches');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `firstname` varchar(500) NOT NULL,
  `lastname` varchar(500) NOT NULL,
  `dateofbirth` varchar(40) NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `state` varchar(500) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `mobilenumber` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `firstname`, `lastname`, `dateofbirth`, `email`, `address`, `city`, `state`, `pincode`, `phonenumber`, `mobilenumber`) VALUES
(6, 'Dhawal', 'Mehta', '22/June/1997', 'dhawalm8@gmail.com', '6 Methto ka Timba', 'Udaipur', 'Rajasthan', '313001', '02942418361', '7023419969');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `photo` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `description`, `photo`) VALUES
(4, 'vhnyg', 'IMG-20150803-WA0040.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `description`) VALUES
(2, 'dysgyuh');

-- --------------------------------------------------------

--
-- Table structure for table `specification`
--

CREATE TABLE `specification` (
  `id` int(11) NOT NULL,
  `brand` varchar(500) NOT NULL,
  `category` varchar(500) NOT NULL,
  `type` varchar(500) NOT NULL,
  `dialcolour` varchar(500) NOT NULL,
  `bandcolour` varchar(500) NOT NULL,
  `bandmaterial` varchar(500) NOT NULL,
  `caseshape` varchar(500) NOT NULL,
  `waterresistant` varchar(500) NOT NULL,
  `warranty` varchar(500) NOT NULL,
  `image` varchar(10000) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specification`
--

INSERT INTO `specification` (`id`, `brand`, `category`, `type`, `dialcolour`, `bandcolour`, `bandmaterial`, `caseshape`, `waterresistant`, `warranty`, `image`, `price`) VALUES
(11, 'Titan', 'men watches', 'Analog', 'Silver', 'Brown', 'Leather', 'Round', 'Yes', '2 yrs', 'titan1.png', 'Rs1957'),
(12, 'Titan', 'women watch', 'Analog', 'Pink', 'Silver', 'Stainless Steel', 'Round', 'Yes', '2 yrs', 'titan2.png', 'Rs1500'),
(13, 'Titan', 'women watch', 'Analog', 'Silver', 'Silver', 'Metal', 'Round', 'No', '1 year', 'titan3.png', 'Rs2440'),
(14, 'Titan', 'men watches', 'Analog', 'Multi-Colour', 'Brown', 'Leather', 'Round', 'Yes', '2 yrs', 'titan4.png', 'Rs2540'),
(15, 'Titan', 'kids watch', 'Digital', 'Natural', 'Red', 'Stainless Steel', 'Round', 'Yes', '1 yrs', 'titan5.png', 'Rs889'),
(16, 'Titan', 'kids watch', 'Analog', 'Purple', 'Purple', 'Resin', 'Oval', 'No', '1 year', 'titan6.png', 'Rs750'),
(17, 'Titan', 'kids watch', 'Analog', 'Blue', 'Blue', 'Resin', 'Round', 'No', '1 year', 'titan7.png', 'Rs789'),
(18, 'Titan', 'kids watch', 'Analog', 'Natural', 'Blue', 'Stainless Steel', 'Round', 'No', '1 year', 'titan8.png', 'Rs765'),
(19, 'Titan', 'men watches', 'Analog', 'Black', 'Brown', 'Leather', 'Round', 'Yes', '2', 'titan9.png', 'Rs2653'),
(20, 'Titan', 'men watches', 'Analog', 'White', 'Black', 'Leather', 'Round', 'Yes', '2 yrs', 'titan10.png', 'Rs1589'),
(21, 'Fastrack', 'women watch', 'Analog', 'White', 'Pink', 'Leather', 'Round', 'Yes', '2 yrs', 'fastrack1.png', 'Rs1459'),
(22, 'Fastrack', 'women watch', 'Analog', 'White', 'White', 'Leather', 'Round', 'Yes', '2 yrs', 'fastrack2.png', 'Rs1659'),
(23, 'Fastrack', 'women watch', 'Analog', 'Blue', 'Silver', 'Stainless Steel', 'Round', 'Yes', '1 yrs', 'fastrack3.png', 'Rs1800'),
(24, 'Fastrack', 'men watches', 'Analog', 'White', 'Black', 'Silicone', 'Round', 'Yes', '1 yrs', 'fastrack4.png', 'Rs1900'),
(25, 'Fastrack', 'men watches', 'Analog', 'White', 'Brown', 'Leather', 'Round', 'Yes', '3 yrs', 'fastrack5.png', 'Rs2410'),
(26, 'Fastrack', 'men watches', 'Analog', 'Black', 'Black', 'Leather', 'Round', 'Yes', '1 yrs', 'fastrack6.png', 'Rs2410'),
(27, 'Fastrack', 'kids watch', 'Analog', 'Beige', 'Sky Blue', 'Leather', 'Round', 'Yes', '1 yrs', 'fastrack7.png', 'Rs2200'),
(28, 'Fastrack', 'men watches', 'Analog', 'Beige', 'Silver', 'Stainless Steel', 'Round', 'Yes', '1 yrs', 'fastrack8.png', 'Rs2200'),
(29, 'Fastrack', 'kids watch', 'Analog', 'White', 'Black', 'Plastic', 'Round', 'Yes', '1 yrs', 'fastrack9.png', 'Rs1500'),
(30, 'Fastrack', 'women watch', 'Analog', 'Blue', 'Silver', 'Brass', 'Round', 'Yes', '1 yrs', 'fastrack10.png', 'Rs1865'),
(31, 'Fossil', 'men watches', 'Analog', 'Black', 'Green', 'Silicone', 'Round', 'Yes', '2 yrs', 'fossil1.png', 'Rs1456'),
(32, 'Fossil', 'men watches', 'Analog', 'Brown', 'Brown', 'Silicone', 'Round', 'Yes', '2 yrs', 'fossil2.png', 'Rs2260'),
(33, 'Fossil', 'men watches', 'Analog', 'Silver', 'Brown', 'Leather', 'Round', 'Yes', '2 yrs', 'fossil3.png', 'Rs2320'),
(34, 'Fossil', 'men watches', 'Analog', 'Black', 'Silver', 'Stainless Steel', 'Round', 'Yes', '2 yrs', 'fossil4.png', 'Rs2450'),
(35, 'Fossil', 'men watches', 'Analog', 'Black', 'Black', 'Stainless Steel', 'Round', 'Yes', '1 yrs', 'fossil5.png', 'Rs1999'),
(36, 'Fossil', 'women watch', 'Analog', 'Blue', 'Blue', 'Stainless Steel', 'Round', 'Yes', '1 yrs', 'fossil6.png', 'Rs1899'),
(37, 'Fossil', 'women watch', 'Analog', 'Pink', 'Gold', 'Stainless Steel', 'Round', 'Yes', '1 yrs', 'fossil7.png', 'Rs2189'),
(38, 'Fossil', 'women watch', 'Analog', 'White', 'White', 'Synthetic', 'Round', 'Yes', '1 yrs', 'fossil8.png', 'Rs2089'),
(39, 'Fossil', 'women watch', 'Analog', 'Silver', 'Blue', 'Leather', 'Round', 'Yes', '1 yrs', 'fossil9.png', 'Rs2560'),
(40, 'Fossil', 'women watch', 'Analog', 'Pearl', 'Blue', 'Leather', 'Round', 'Yes', '2 yrs', 'fossil10.png', 'Rs1560'),
(42, 'Tommy Hilfiger', 'women watch', 'Analog', 'White', 'Multicolor', 'Stainless Steel', 'Round', 'Yes', '2 yrs', 'hilfiger1.png', 'Rs1823'),
(43, 'Tommy Hilfiger', 'women watch', 'Analog', 'Rose Gold', 'Blue', 'Silicone', 'Round', 'Yes', '2 yrs', 'hilfiger2.png', 'Rs1953'),
(44, 'Tommy Hilfiger', 'women watch', 'Analog', 'White', 'Gold', 'Stainless Steel', 'Rectangular', 'Yes', '2 yrs', 'hilfiger3.png', 'Rs2564'),
(45, 'Tommy Hilfiger', 'women watch', 'Analog', 'White', 'Blue', 'Leather', 'Round', 'Yes', '2 yrs', 'hilfiger4.png', 'Rs3500'),
(46, 'Tommy Hilfiger', 'men watch', 'Analog', 'Black', 'Black', 'Silicone', 'Round', 'Yes', '3 yrs', 'hilfiger5.png', 'Rs4500'),
(47, 'Tommy Hilfiger', 'men watches', 'Analog', 'Black', 'Silver', 'Stainless Steel', 'Round', 'Yes', '3 yrs', 'hilfiger6.png', 'Rs4245'),
(48, 'Tommy Hilfiger', 'men watches', 'Analog', 'Silver', 'Silver', 'Stainless Steel', 'Round', 'Yes', '1 yrs', 'hilfiger7.png', 'Rs4000'),
(49, 'Tommy Hilfiger', 'men watches', 'Analog', 'Silver', 'Gold', 'Stainless Steel', 'Round', 'Yes', '1 yrs', 'hilfiger8.png', 'Rs3652'),
(50, 'Tommy Hilfiger', 'men watches', 'Analog', 'Black', 'Silver', 'Stainless Steel', 'Round', 'Yes', '2 yrs', 'hilfiger9.png', 'Rs4123'),
(51, 'Tommy Hilfiger', 'men watches', 'Analog', 'White', 'Navy Blue', 'Silicone', 'Round', 'Yes', '2 yrs', 'hilfiger10.png', 'Rs2314'),
(52, 'Timex', 'women watch', 'Analog', 'Silver', 'Multicolor', 'Stainless Steel', 'Round', 'Yes', '2 yrs', 'timex1.png', 'Rs1915'),
(53, 'Timex', 'women watch', 'Analog', 'Gold', 'Multicolor', 'Stainless Steel', 'Round', 'Yes', '2 yrs', 'timex2.png', 'Rs1830'),
(54, 'Timex', 'men watches', 'Analog', 'Black', 'Black', 'Stainless Steel', 'Round', 'Yes', '1 yrs', 'timex3.png', 'Rs3641'),
(55, 'Timex', 'men watches', 'Analog', 'Multi-Colour', 'Brown', 'Leather', 'Round', 'Yes', '1 yrs', 'timex4.png', 'Rs2465'),
(56, 'Timex', 'men watches', 'Analog', 'Silver', 'Black', 'Leather', 'Round', 'Yes', '1 yrs', 'timex5.png', 'Rs1924'),
(57, 'Timex', 'men watches', 'Analog', 'Silver', 'Brown', 'Leather', 'Round', 'Yes', '2 yrs', 'timex6.png', 'Rs3000'),
(58, 'Timex', 'kids watch', 'Analog', 'White', 'Blue', 'Cloth', 'Round', 'No', '2 yrs', 'timex7.png', 'Rs852'),
(60, 'Timex', 'kids watch', 'Analog', 'Multi-Colour', 'Multicolor', 'Fabric', 'Round', 'No', '2 yrs', 'timex8.png', 'Rs952'),
(61, 'Timex', 'kids watch', 'Analog', 'Silver', 'Pink', 'Synthetic Leather', 'Round', 'No', '1 yrs', 'timex9.png', 'Rs1110'),
(62, 'Timex', 'kids watch', 'Digital', 'Grey', 'Green', 'Plastic', 'Round', 'No', '1 yrs', 'timex10.png', 'Rs1099');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `brand` varchar(500) NOT NULL,
  `type` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `brand`, `type`) VALUES
(11, 'Titan', 'Analog'),
(12, 'Titan', 'Digital'),
(13, 'Fastrack', 'Analog'),
(14, 'Fastrack', 'Digital'),
(15, 'Timex', 'Analog'),
(16, 'Timex', 'Digital'),
(17, 'Fossil', 'Analog'),
(18, 'Fossil', 'Digital'),
(19, 'Tommy Hilfiger', 'Analog'),
(20, 'Tommy Hilfiger', 'Digital');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specification`
--
ALTER TABLE `specification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `specification`
--
ALTER TABLE `specification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
