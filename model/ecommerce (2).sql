-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2017 at 09:50 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_id` int(11) NOT NULL,
  `First_name` varchar(32) NOT NULL,
  `Last_name` varchar(32) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `DOJ` varchar(50) NOT NULL,
  `Phone` varchar(32) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `Status` varchar(32) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `First_name`, `Last_name`, `DOB`, `DOJ`, `Phone`, `Email`, `Status`, `Username`, `Password`, `Address`) VALUES
(1, 'Nafeez', 'Hossain', '0000-00-00', '0000-00-00', '', 'naf@gmail.com', 'valid', 'nafeez', 'nafeez', '');

-- --------------------------------------------------------

--
-- Table structure for table `all_products`
--

CREATE TABLE `all_products` (
  `Products_id` int(11) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `Type` varchar(11) NOT NULL,
  `Category` varchar(11) NOT NULL,
  `Size` varchar(11) NOT NULL,
  `B_price` int(11) NOT NULL,
  `S_price` int(11) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Sold` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_products`
--

INSERT INTO `all_products` (`Products_id`, `Name`, `Type`, `Category`, `Size`, `B_price`, `S_price`, `Stock`, `Sold`) VALUES
(1, 'Shirt for Men', 'men', 'shirt', 'm', 500, 1000, 20, 20),
(2, 'Pant for men', 'men', 'pant', 'l', 500, 600, 30, 0),
(3, 'Pant for women', 'women', 'skirt', 'l', 600, 900, 10, 0),
(4, 'Pant for kids', 'kids', 'pant', 'l', 600, 1000, 5, 0),
(5, 'Pant for men', 'men', 'pant', 'l', 600, 900, 5, 0),
(6, 'pant for men', 'men', 'pant', 'm', 400, 1000, 6, 1),
(7, 'Shirt For Men', 'men', 'shirt', 'm', 1000, 2000, 10, 0),
(8, 'Shirt For Men', 'men', 'shirt', 'm', 1000, 5100, 5, 0),
(9, 'Shirt For Men', 'men', 'shirt', 'l', 2000, 5000, 10, 1),
(10, 'Shirt For Men', 'men', 'shirt', 'l', 500, 1000, 5, 0),
(11, 'Shirt For Men', 'men', 'shirt', 'l', 2000, 2500, 6, 1),
(12, 'Shirt for Men', 'men', 'shirt', 'l', 500, 2000, 6, 1),
(13, 'Shirt For Men', 'men', 'shirt', 'xl', 3000, 5000, 5, 1),
(14, 'Pant for Kids', 'kids', 'pant', 'm', 1000, 1500, 20, 1),
(15, 'Pant for men', 'men', 'pant', 'm', 200, 500, 5, 0),
(16, 'Shirt For Kids', 'kids', 'shirt', 'xl', 1000, 1500, 2, 0),
(17, 'Blue Shirt', 'men', 'shirt', 'xl', 2500, 3500, 100, 35),
(18, 'Blue Stripe Shirt', 'men', 'shirt', 'm', 2000, 3000, 60, 25),
(19, 'Navy Blue Shirt', 'men', 'shirt', 'l', 3500, 2500, 40, 20),
(20, 'Sky Blue Shirt', 'men', 'shirt', 'm', 3000, 2000, 56, 30),
(21, 'Brown Shirt', 'men', 'shirt', 'm', 2500, 3500, 10, 2),
(22, 'Khakee Pant', 'men', 'pant', 'l', 1000, 2000, 10, 0),
(23, 'Brown Pant', 'men', 'pant', 's', 1000, 2000, 30, 5),
(24, 'Gray Pant', 'men', 'pant', 'xl', 1000, 2000, 95, 50),
(25, 'Black Pant', 'men', 'pant', 's', 1000, 2000, 70, 35),
(26, 'Blue Pant', 'men', 'pant', 'l', 1000, 2000, 68, 40),
(27, 'Gray Tshirt', 'men', 'tshirt', 'xl', 500, 1000, 120, 60),
(28, 'Black Tshirt', 'men', 'pant', 'm', 1000, 2000, 5, 1),
(29, 'Black Tshirt', 'men', 'tshirt ', 's', 500, 1500, 10, 5),
(32, 'Saree for Woman', 'women', 'saree', 'l', 3500, 5000, 50, 26),
(33, 'Saree For Woman', 'women', 'saree', 's', 3800, 5200, 55, 30),
(34, 'Saree For Women', 'women', 'saree', 'l', 4000, 5500, 60, 30),
(35, 'Saree For Women', 'women', 'Saree', 'xl', 3500, 5000, 10, 5),
(37, 'Pink Tshirt', 'women', 'tshirt', 's', 800, 1800, 60, 5),
(38, 'Yellow Tshirt', 'women', 'tshirt', 'l', 1000, 1800, 50, 5),
(42, 'Flower Shirt', 'women', 'shirt', 'm', 2000, 3000, 60, 5),
(43, 'Check Shirt', 'women', 'shirt', 'xl', 2500, 3200, 60, 10),
(47, 'Dark Blue Jeans', 'women', 'pant', 's', 1000, 2000, 60, 5),
(48, 'Light Blue Jeans', 'women', 'pant', 'xl', 1200, 2200, 60, 7),
(52, 'Orange Skirt', 'women', 'skirt', 'm', 2000, 3500, 10, 2),
(53, 'Black Skirt', 'women', 'skirt', 'l', 1500, 2500, 20, 5),
(54, 'Boy Brown Shirt', 'kids', 'shirt', 's', 500, 1000, 20, 0),
(55, 'Boy Green Shirt', 'kids', 'shirt', 'm', 500, 600, 20, 5),
(58, 'Girl Yellow Tshirt', 'kids', 'tshirt', 's', 200, 600, 5, 0),
(59, 'Girl White Tshirt', 'kids', 'tshirt', 's', 1000, 1500, 20, 0),
(61, 'Boy Blue Tshirt', 'kids', 'tshirt', 'l', 600, 1000, 20, 0),
(62, 'Boy Ash Pant', 'kids', 'pant', 's', 2000, 2500, 5, 0),
(64, 'Girl Red Pant', 'kids', 'pant', 'm', 500, 1000, 20, 0),
(65, 'Boy Blue Pant', 'kids', 'pant', 'm', 1000, 2000, 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Cart_id` int(100) NOT NULL,
  `Order_date` date NOT NULL,
  `Product_id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Cart_id`, `Order_date`, `Product_id`, `Quantity`, `Price`) VALUES
(1, '0000-00-00', 1, 2, 500);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Category_id` int(11) NOT NULL,
  `Subcategory_id` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `Type_id` int(11) NOT NULL,
  `Name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_id` int(100) NOT NULL,
  `First_name` varchar(32) NOT NULL,
  `Last_name` varchar(32) NOT NULL,
  `DOB` varchar(50) DEFAULT NULL,
  `Phone` varchar(11) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `DOJ` varchar(50) NOT NULL,
  `Gender` varchar(32) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_id`, `First_name`, `Last_name`, `DOB`, `Phone`, `Email`, `DOJ`, `Gender`, `Username`, `Status`, `Password`, `Address`) VALUES
(1, 'Nafeez', 'Hossain', NULL, '', 'naf@gmail.com', '0000-00-00', '', 'nafeez', 'valid', 'nafeez', '');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `Delivery_id` int(11) NOT NULL,
  `Employee_id` int(11) NOT NULL,
  `Delivery_date` varchar(50) NOT NULL,
  `Customer_id` int(11) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Employee_id` int(11) NOT NULL,
  `First_name` varchar(32) NOT NULL,
  `Last_name` varchar(32) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `DOJ` varchar(50) NOT NULL,
  `Phone` varchar(32) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `Status` varchar(32) NOT NULL,
  `Salary` int(11) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Employee_id`, `First_name`, `Last_name`, `DOB`, `DOJ`, `Phone`, `Email`, `Status`, `Salary`, `Username`, `Password`, `Address`) VALUES
(0, 'Jawad', 'Adam', '0000-00-00', '0000-00-00', '', 'adam@gmail.com', 'valid', 0, 'jawad', 'adam', '');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `Job_id` int(11) NOT NULL,
  `Employee_id` int(11) NOT NULL,
  `Order_id` int(11) NOT NULL,
  `Status` varchar(32) NOT NULL,
  `Address` text NOT NULL,
  `Customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`Job_id`, `Employee_id`, `Order_id`, `Status`, `Address`, `Customer_id`) VALUES
(1, 1, 1, 'delivered', 'banasree,block-E', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `reply` text NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `email`, `message`, `reply`, `subject`) VALUES
(1, 'naf@gmail.com', 'Hey there how ya doin..ive been searching for ya', 'Who art thou..be gone', 'wassup');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_id` int(11) NOT NULL,
  `Customer_id` int(11) NOT NULL,
  `Delivery_id` int(11) NOT NULL,
  `Delivery_date` varchar(50) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Payment_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_id`, `Customer_id`, `Delivery_id`, `Delivery_date`, `Amount`, `Payment_type`) VALUES
(2, 1, 1, '0000-00-00', 500, 'online');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Payment_id` int(11) NOT NULL,
  `Payment_type` varchar(32) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Cart_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pending_request`
--

CREATE TABLE `pending_request` (
  `First_name` varchar(32) NOT NULL,
  `Last_name` varchar(32) NOT NULL,
  `DOB` date NOT NULL,
  `DOA` date NOT NULL,
  `Phone` varchar(32) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `Username` int(11) NOT NULL,
  `Type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_id` int(11) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `Type_id` int(11) NOT NULL,
  `Category_id` int(11) NOT NULL,
  `Subcategory_id` int(11) NOT NULL,
  `B_price` int(11) NOT NULL,
  `S_price` int(11) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Sold` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `Type_id` int(11) NOT NULL,
  `Subcategory_id` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `Category_id` int(11) NOT NULL,
  `Name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `Subcategory_id` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `Type_id` int(11) NOT NULL,
  `Category_id` int(11) NOT NULL,
  `Name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_id` int(11) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Last_login` varchar(50) NOT NULL,
  `Pic` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_id`, `Username`, `Password`, `Type`, `Status`, `Last_login`, `Pic`) VALUES
(2, 'nafeez', 'nafeez', 'customer', 'valid', '0000-00-00', 'yes'),
(3, 'jawad', 'adam', 'employee', 'valid', '0000-00-00', 'yes'),
(4, 'samshad', 'samshad', 'admin', 'valid', '', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `all_products`
--
ALTER TABLE `all_products`
  ADD PRIMARY KEY (`Products_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Cart_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`Delivery_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Employee_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`Job_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_products`
--
ALTER TABLE `all_products`
  MODIFY `Products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `Delivery_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `Job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
