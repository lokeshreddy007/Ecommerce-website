-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 04, 2019 at 10:15 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `com`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookedproducts`
--

CREATE TABLE `bookedproducts` (
  `idbookedproducts` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `usermail` varchar(45) DEFAULT NULL,
  `productid` varchar(45) DEFAULT NULL,
  `productname` varchar(45) DEFAULT NULL,
  `productprice` varchar(45) DEFAULT NULL,
  `balval` varchar(45) DEFAULT NULL,
  `finalbal` varchar(45) DEFAULT NULL,
  `dateone` date NOT NULL,
  `datelast` date NOT NULL,
  `vendorid` int(11) NOT NULL,
  `vendorname` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `faltnumber` int(11) NOT NULL,
  `Transactionid` varchar(255) NOT NULL,
  `date` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `cartid` int(11) NOT NULL,
  `productimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookedproducts`
--

INSERT INTO `bookedproducts` (`idbookedproducts`, `userid`, `username`, `usermail`, `productid`, `productname`, `productprice`, `balval`, `finalbal`, `dateone`, `datelast`, `vendorid`, `vendorname`, `pincode`, `faltnumber`, `Transactionid`, `date`, `price`, `cartid`, `productimg`) VALUES
(28, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, '', 0, 0, 0, ''),
(29, 27, 'vinay', 'vinay@gmal.com', '1', 'milk', '218', '1000', '782', '2019-01-04', '2019-01-05', 2, 'vinay', 517416, 0, '04012019132803', 2, 109, 105, 'fileupload/Tulips.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cartdetails`
--

CREATE TABLE `cartdetails` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `usermail` varchar(45) DEFAULT NULL,
  `productid` int(11) NOT NULL,
  `produtname` varchar(255) NOT NULL,
  `productimg` varchar(1000) NOT NULL,
  `productprice` int(11) NOT NULL,
  `productstratdate` date NOT NULL,
  `productenddate` date NOT NULL,
  `description` varchar(1000) NOT NULL,
  `days` int(11) NOT NULL,
  `pincode` int(11) NOT NULL,
  `totalprice` int(11) NOT NULL,
  `phonenum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cartdetails`
--

INSERT INTO `cartdetails` (`id`, `userid`, `username`, `usermail`, `productid`, `produtname`, `productimg`, `productprice`, `productstratdate`, `productenddate`, `description`, `days`, `pincode`, `totalprice`, `phonenum`) VALUES
(105, 27, 'vinay', 'vinay@gmal.com', 1, 'milk', 'fileupload/Tulips.jpg', 109, '2019-01-04', '2019-01-05', '  \r\n          good', 2, 517416, 218, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `division` varchar(255) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `offerprice` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `units` varchar(255) NOT NULL,
  `productimg` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `division`, `productname`, `price`, `offerprice`, `quantity`, `units`, `productimg`, `description`) VALUES
(1, 'Daily Products', 'milk', 109, 27, 3, '4', 'fileupload/Tulips.jpg', '  \r\n          good'),
(2, 'Daily Products', 'water', 10, 2, 3, '2', 'fileupload/Penguins.jpg', '  \r\n    2      '),
(4, 'vegatables', 'onion', 12, 23, 12, '3', 'fileupload/Chrysanthemum.jpg', '  \r\n     2     '),
(5, 'Daily Products', 'egg', 23, 2, 2, '2', 'fileupload/Lighthouse.jpg', ' 2 \r\n          '),
(12, 'Daily Products', 'news paper', 7, 5, 3, '6', 'fileupload/Desert.jpg', ''),
(14, 'Daily Products', 'carrot', 34, 2, 2, '1', 'fileupload/Koala1.jpg', '          4fcvgdsfbdfsf');

-- --------------------------------------------------------

--
-- Table structure for table `uf`
--

CREATE TABLE `uf` (
  `iduf` int(11) NOT NULL,
  `a` varchar(45) DEFAULT NULL,
  `b` varchar(45) DEFAULT NULL,
  `c` varchar(45) DEFAULT NULL,
  `d` varchar(45) DEFAULT NULL,
  `e` varchar(45) DEFAULT NULL,
  `f` varchar(45) DEFAULT NULL,
  `g` varchar(45) DEFAULT NULL,
  `h` varchar(45) DEFAULT NULL,
  `i` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uf`
--

INSERT INTO `uf` (`iduf`, `a`, `b`, `c`, `d`, `e`, `f`, `g`, `h`, `i`) VALUES
(27, 'vinay', 'vinay', 'vinay@gmal.com', 'ewfwef', '', '', '', '567', '517416');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendorid` int(11) NOT NULL,
  `vendorname` varchar(255) NOT NULL,
  `vendormail` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `pnum` int(11) NOT NULL,
  `pnum2` int(11) NOT NULL,
  `pincode` int(11) NOT NULL,
  `product` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendorid`, `vendorname`, `vendormail`, `data`, `address`, `pnum`, `pnum2`, `pincode`, `product`) VALUES
(2, 'vinay', 'vinay@gmail.com', '2018-12-31', 'swdetgf3eryt', 2147483647, 2147483647, 517416, 'milk'),
(3, 'anant tyagi', 'vinay@gmail.com', '2018-12-31', 'dasfew', 2147483647, 2147483647, 517416, 'egg'),
(4, 'lokesh', 'vinay@gmail.com', '2018-12-31', 'dfghgdf', 2147483647, 2147483647, 517416, 'water'),
(5, 'vikram', 'vinay@gmail.com', '2018-12-31', 'desafsd', 2147483647, 2147483647, 517416, 'carrot');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `usermail` varchar(255) NOT NULL,
  `depositdate` date NOT NULL,
  `amount` int(11) NOT NULL,
  `utilized` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `transactionid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`id`, `userid`, `username`, `usermail`, `depositdate`, `amount`, `utilized`, `balance`, `transactionid`) VALUES
(13, 27, 'vinay', 'vinay@gmal.com', '2019-01-04', 1000, 0, 0, 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookedproducts`
--
ALTER TABLE `bookedproducts`
  ADD PRIMARY KEY (`idbookedproducts`);

--
-- Indexes for table `cartdetails`
--
ALTER TABLE `cartdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `uf`
--
ALTER TABLE `uf`
  ADD PRIMARY KEY (`iduf`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendorid`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookedproducts`
--
ALTER TABLE `bookedproducts`
  MODIFY `idbookedproducts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `cartdetails`
--
ALTER TABLE `cartdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `uf`
--
ALTER TABLE `uf`
  MODIFY `iduf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
