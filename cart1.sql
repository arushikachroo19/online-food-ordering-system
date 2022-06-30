-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 07:07 PM
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
-- Database: `cart1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(4) NOT NULL,
  `name` varchar(200) NOT NULL,
  `quty` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `tprice` varchar(200) NOT NULL,
  `pno` varchar(200) NOT NULL,
  `addd` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Error reading data for table cart1.bill: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `cart1`.`bill`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `chines`
--

CREATE TABLE `chines` (
  `id` int(4) NOT NULL,
  `name` varchar(200) NOT NULL,
  `code` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Error reading data for table cart1.chines: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `cart1`.`chines`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `conti`
--

CREATE TABLE `conti` (
  `id` int(4) NOT NULL,
  `name` varchar(200) NOT NULL,
  `code` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Error reading data for table cart1.conti: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `cart1`.`conti`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `productss`
--

CREATE TABLE `productss` (
  `id` int(4) NOT NULL,
  `name` varchar(250) NOT NULL,
  `code` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productss`
--

INSERT INTO `productss` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'Dosa', 'dosa1', '100.00', 'indian/veg/dosa.jpg'),
(2, 'Idli', 'idli1', '50.00', 'indian/veg/idli.jpg'),
(3, 'Naan ', 'naan1', '50.00', 'indian/veg/naan.jpg'),
(4, 'Shahi-Paneer', 'spaneer1', '150.00', 'indian/veg/paneer.jpg'),
(5, 'Paneer-Tika', 'paneert1', '180.00', 'indian/veg/paneertika.jpg'),
(6, 'Puri-Chana', 'pchana1', '60.00', 'indian/veg/puri.jpg'),
(7, 'Samosa-Chane', 'samosac1', '40.00', 'indian/veg/samosa.jpg'),
(8, 'Veg-Indian-Thali', 'vegt1', '210.00', 'indian/veg/vegthali.jpg'),
(9, 'Roasted-Chicken-Pices', 'rcp1', '250.00', 'indian/nonveg/a.jpg'),
(10, 'Gravy-Chicken', 'gc1', '180.00', 'indian/nonveg/b.jpg'),
(11, 'Chicken-Briyani', 'cb1', '250.00', 'indian/nonveg/c.jpg'),
(12, 'Chicken-Manchorian', 'cm1', '220.00', 'indian/nonveg/d.jpg'),
(13, 'Roasted-Fish', 'rf1', '150.00', 'indian/nonveg/e.jpg'),
(14, 'Mutton-Curry', 'mc1', '250.00', 'indian/nonveg/f.jpg'),
(15, 'Roasted-Chicken', 'rc1', '250.00', 'indian/nonveg/g.jpg'),
(16, 'Egg-Curry', 'ec1', '150.00', 'indian/nonveg/h.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chines`
--
ALTER TABLE `chines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conti`
--
ALTER TABLE `conti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productss`
--
ALTER TABLE `productss`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `chines`
--
ALTER TABLE `chines`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `conti`
--
ALTER TABLE `conti`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `productss`
--
ALTER TABLE `productss`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
