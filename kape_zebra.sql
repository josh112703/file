-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2024 at 08:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kape_zebra`
--

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `cashier_ID` int(11) NOT NULL,
  `cashier_Name` varchar(255) NOT NULL,
  `cashier_password` varchar(50) NOT NULL,
  `cashier_username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`cashier_ID`, `cashier_Name`, `cashier_password`, `cashier_username`) VALUES
(1, 'yu ijin', 'ff06ead3eef09d3833356beb98fbd5e9', 'ijinyu');

-- --------------------------------------------------------

--
-- Table structure for table `ingredient_inventory`
--

CREATE TABLE `ingredient_inventory` (
  `Item_ID` int(11) NOT NULL,
  `Item_qty` int(11) DEFAULT NULL,
  `Item_price` decimal(10,2) DEFAULT NULL,
  `Item_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ingredient_inventory`
--

INSERT INTO `ingredient_inventory` (`Item_ID`, `Item_qty`, `Item_price`, `Item_name`) VALUES
(3, 2, 20.00, 'americano');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `Order_ID` int(11) NOT NULL,
  `Order_details` text DEFAULT NULL,
  `Item_ID` int(11) DEFAULT NULL,
  `Cashier_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`Order_ID`, `Order_details`, `Item_ID`, `Cashier_ID`) VALUES
(2, 'americano', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`cashier_ID`);

--
-- Indexes for table `ingredient_inventory`
--
ALTER TABLE `ingredient_inventory`
  ADD PRIMARY KEY (`Item_ID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Order_ID`),
  ADD KEY `Item_ID` (`Item_ID`),
  ADD KEY `Cashier_ID` (`Cashier_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cashier`
--
ALTER TABLE `cashier`
  MODIFY `cashier_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ingredient_inventory`
--
ALTER TABLE `ingredient_inventory`
  MODIFY `Item_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `Order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`Item_ID`) REFERENCES `ingredient_inventory` (`Item_ID`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`Cashier_ID`) REFERENCES `cashier` (`cashier_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
