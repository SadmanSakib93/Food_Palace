-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2016 at 07:06 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `foodpalacedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE IF NOT EXISTS `admintable` (
  `AdminID` int(11) NOT NULL,
  `AdminName` varchar(30) NOT NULL,
  `AdminPassword` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`AdminID`, `AdminName`, `AdminPassword`) VALUES
(1, 'EMU', 'emu');

-- --------------------------------------------------------

--
-- Table structure for table `itemtable`
--

CREATE TABLE IF NOT EXISTS `itemtable` (
  `ItemID` int(11) NOT NULL,
  `ItemName` varchar(30) NOT NULL,
  `ItemPrice` int(11) NOT NULL,
  `ItemType` varchar(30) NOT NULL,
  `ResID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `itemtable`
--

INSERT INTO `itemtable` (`ItemID`, `ItemName`, `ItemPrice`, `ItemType`, `ResID`) VALUES
(1, 'Chicken Burger ', 140, 'Burger', 1),
(2, 'BBQ Chicken Burger', 150, 'Burger', 1),
(3, 'Chicken Burger with Cheese', 150, 'Burger', 1),
(4, 'Chicken Supreme Burger', 320, 'Burger', 1),
(5, 'Chicken Cheese Delight ', 220, 'Burger', 1),
(6, 'Take Out Special Chicken Burge', 270, 'Burger', 1),
(7, 'French Fries', 80, 'Snacks', 1),
(8, 'BBQ Beef Burger', 150, 'Burger', 1),
(9, 'BBQ Beef Burger with Cheese', 170, 'Burger', 1),
(10, 'Beef Burger', 130, 'Burger', 1),
(11, 'Beef Burger with Cheese ', 150, 'Burger', 1),
(12, 'Angry Burger 4"', 325, 'Burger', 2),
(13, 'Argentine Chimichurri Burger', 275, 'Burger', 2),
(14, 'BnB Mac', 350, 'Burger', 2),
(15, 'Jalapeno Cheese Burger', 225, 'Burger', 2),
(16, 'Double Cheese Burger', 220, 'Burger', 2),
(17, 'Smokey BBQ Burger (4")', 315, 'Burger', 2),
(18, 'Triple Cheese Burger', 300, 'Burger', 2),
(19, 'Steak Beef Roll', 250, 'Snacks', 2),
(20, 'Fish N Chips Mini Box', 250, 'Snacks', 2),
(21, 'Chicken Wings', 115, 'Fries', 2),
(22, 'Crispy Fried CK x 1', 85, 'Fries', 2),
(23, 'Crispy Fried CK x 2 ', 165, 'Fries', 2),
(24, 'Healthy Green Salad', 100, 'Salad', 2),
(25, 'Chicken Green Salad', 175, 'Salad', 2),
(26, 'Spicy Tiger Prawn Salad', 250, 'Salad', 2),
(27, 'American Chopsuey', 275, 'Noodles', 3),
(28, 'Thai Noodles', 250, 'Noodles', 3),
(29, 'Sweet Chili Noodles with Grill', 250, 'Noodles', 3),
(30, 'Crispy Noodles with Beef/Prawn', 220, 'Noodles', 3),
(32, 'Shredded Beef', 150, 'Gravy', 3),
(33, 'Beef Chili', 150, 'Gravy', 3),
(34, 'Chicken Chili', 150, 'Gravy', 3),
(35, 'Prawn Chili', 150, 'Gravy', 3),
(36, 'Grilled Chicken Wings (Gravy)', 180, 'Gravy', 3),
(37, 'Grilled Prawns (Gravy)', 200, 'Gravy', 3),
(38, 'Spicy Wings', 130, 'Gravy', 3),
(39, 'The Original Beef Burger', 150, 'Burger', 3),
(40, 'The Original Cheese Burger', 200, 'Burger', 3),
(41, 'Special Beef Burger', 220, 'Burger', 3),
(42, 'Cheesy Delight', 250, 'Burger', 3),
(43, 'Chicken Tandoori Burger', 220, 'Burger', 3),
(44, 'Double BBQ Beef Burger', 350, 'Burger', 3),
(45, 'Triple Cheese Gourmet', 400, 'Burger', 3),
(46, 'Caesar Salad with Grilled Chic', 250, 'Salad', 3),
(47, 'Chicken Cashew Nut Salad', 200, 'Salad', 3),
(48, 'Russian Potato Salad', 275, 'Salad', 3),
(49, 'French Fries', 150, 'Snacks', 3),
(50, 'Onion Rings', 130, 'Snacks', 3),
(51, 'Chocolate Almond Crunch', 150, 'Donuts', 15),
(52, 'Almond Sweetheart', 150, 'Donuts', 15),
(53, 'Apple Cheese Cake', 160, 'Donuts', 15),
(54, 'Blueberry Cheese Cake', 160, 'Donuts', 15),
(55, 'Cheese Lover', 160, 'Donuts', 15),
(56, 'Chocolate Madness', 140, 'Donuts', 15),
(57, 'Chocolate Oreo', 160, 'Donuts', 15),
(58, 'Ferrero Rocher', 170, 'Donuts', 15),
(59, 'Premium Triple Chocolate', 170, 'Donuts', 15),
(60, 'Strawberry Cheese Cake', 160, 'Donuts', 15),
(61, 'Cheese Craver Deluxe', 185, 'Donuts', 15),
(62, 'Parline Deluxe', 185, 'Donuts', 15),
(63, 'BBQ Chicken Sheek', 230, 'BBQ & Tandoori', 4),
(64, 'Beef Sheek Kebab', 230, 'BBQ  & Tandoori', 4),
(65, 'Handi Special Kabab', 750, 'BBQ  & Tandoori', 4),
(66, 'Tandori Chicken (Local)', 350, 'BBQ  & Tandoori', 4),
(67, 'Tandori King Prawn', 375, 'BBQ  & Tandoori', 4),
(68, 'Hyderabadi Biryani', 400, 'Biryani/Pullao/Rice (Basmati)', 4),
(69, 'Chicken Biryani', 360, 'Biryani/Pullao/Rice (Basmati)', 4),
(70, 'Nav Raton Pullao', 170, 'Biryani/Pullao/Rice (Basmati)', 4),
(71, 'Handi Special naan', 150, 'Naan/Roti', 4),
(72, 'Butter Naan', 40, 'Naan/Roti', 4),
(73, 'Garlic Naan', 50, 'Naan/Roti', 4),
(74, 'Mutton Masala', 400, 'Main Dish', 4),
(75, 'Fish Tikka Masala', 430, 'Main Dish', 4),
(76, 'Chicken Karai', 350, 'Main Dish', 4),
(77, 'Chicken n Herbs Fries', 385, 'Savory Bites', 5),
(78, 'Onion Ring', 360, 'Savory Bites', 5),
(79, 'Chicken Hot Wings', 395, 'Savory Bites', 5),
(80, 'Chicken Nuggets', 465, 'Savory Bites', 5),
(81, 'Tacos', 365, 'Latina Delights', 5),
(82, 'Nachos', 350, 'Latina Delights', 5),
(83, 'Brownie', 130, 'Sweet Sin', 5),
(84, 'Blueberry Sin', 315, 'Sweet Sin', 5),
(85, 'Classic Bolognese Spaghetti', 425, 'Teasing Pasta', 5),
(86, 'Meatball Marinara', 645, 'Teasing Pasta', 5),
(87, 'Oregano Chicken', 625, 'Chicken', 5),
(88, 'Chicken BBQ', 675, 'Chicken', 5),
(89, 'Chicken Tikka Kebab', 200, 'Bollywood Spices', 9),
(90, 'Beef Boti Kebab', 200, 'Bollywood Spices', 9),
(91, 'Beef Luncheon Steak', 550, 'Bollywood Spices', 9),
(92, 'Beef Toptender Steak', 550, 'Bollywood Spices', 9),
(93, 'Chicken Strips', 190, 'Chick A Licken', 9),
(94, 'Fried Chicken Wings', 210, 'Chick A Licken', 9),
(95, 'BBQ Chicken Wings', 250, 'Chick A Licken', 9),
(96, 'Thai Thick Soup', 210, 'Sensational Soup & Salads', 9),
(97, 'Grilled Chicken Salad', 160, 'Sensational Soup & Salads', 9),
(98, 'American Chopsuey', 150, 'Sensational Soup & Salads', 9),
(99, 'French Fries', 150, 'Appetizer', 10),
(100, 'Chicken Wings with Fries', 210, 'Appetizer', 10),
(101, 'Tempura', 180, 'Appetizer', 10),
(102, 'Fish Finger Fry', 240, 'Appetizer', 10),
(103, 'Kebab Roll', 140, 'Power Meal', 10),
(104, 'Fried Rice ', 300, 'Power Meal', 10),
(105, 'Chocolate Cake', 100, 'Sweet Tooth', 10),
(106, 'Caramel Cake', 100, 'Sweet Tooth', 10),
(107, 'Chicken Malai Tikka', 465, 'Kebab & Curries', 6),
(108, 'Afgani Chicken', 550, 'Kebab & Curries', 6),
(109, 'Chicken Butter Masala', 425, 'Kebab & Curries', 6),
(110, 'Chicken Reshmi Butter Masala', 445, 'Kebab & Curries', 6),
(111, 'Beef Sheek Kebab', 445, 'Kebab & Curries', 6),
(112, 'Afgani Biriyani', 465, 'Biriyani', 6),
(113, 'Koyla Special Biriyani', 495, 'Biriyani ', 6),
(114, 'Hyderabadi Biriyani', 475, 'Biriyani ', 6),
(115, 'Kashmiri Biriyani', 295, 'Biriyani ', 6),
(116, 'ddd', 200, 'burger', 15);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE IF NOT EXISTS `orderdetails` (
  `OrderDetailsID` int(11) NOT NULL,
  `OrderID` int(11) NOT NULL,
  `ItemID` int(11) NOT NULL,
  `ItemName` varchar(30) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`OrderDetailsID`, `OrderID`, `ItemID`, `ItemName`, `Quantity`) VALUES
(5, 18, 13, 'Argentine Chimichurri Burger', 1),
(6, 18, 10, 'Beef Burger', 2),
(7, 18, 1, 'Chicken Burger ', 3),
(8, 18, 5, 'Chicken Cheese Delight ', 1),
(9, 18, 17, 'Smokey BBQ Burger (4")', 1),
(10, 19, 49, 'French Fries', 1),
(11, 19, 50, 'Onion Rings', 1),
(12, 20, 49, 'French Fries', 2),
(13, 20, 50, 'Onion Rings', 1),
(14, 20, 41, 'Special Beef Burger', 2),
(15, 21, 49, 'French Fries', 1),
(16, 21, 50, 'Onion Rings', 1),
(17, 21, 41, 'Special Beef Burger', 1),
(18, 22, 1, 'Chicken Burger ', 3),
(19, 23, 1, 'Chicken Burger ', 3),
(20, 24, 10, 'Beef Burger', 3),
(21, 24, 1, 'Chicken Burger ', 2),
(22, 25, 9, 'BBQ Beef Burger with Cheese', 2),
(23, 25, 10, 'Beef Burger', 2),
(24, 25, 1, 'Chicken Burger ', 3),
(25, 26, 9, 'BBQ Beef Burger with Cheese', 2),
(26, 26, 1, 'Chicken Burger ', 3),
(27, 27, 10, 'Beef Burger', 4),
(28, 28, 8, 'BBQ Beef Burger', 3),
(29, 28, 9, 'BBQ Beef Burger with Cheese', 2),
(30, 28, 1, 'Chicken Burger ', 2),
(31, 29, 9, 'BBQ Beef Burger with Cheese', 2),
(32, 29, 1, 'Chicken Burger ', 2),
(33, 30, 9, 'BBQ Beef Burger with Cheese', 4),
(34, 30, 10, 'Beef Burger', 3),
(35, 31, 9, 'BBQ Beef Burger with Cheese', 4),
(36, 31, 10, 'Beef Burger', 4),
(37, 32, 1, 'Chicken Burger ', 3),
(38, 32, 66, 'Tandori Chicken (Local)', 3),
(39, 33, 65, 'Handi Special Kabab', 2),
(40, 33, 66, 'Tandori Chicken (Local)', 3),
(41, 34, 65, 'Handi Special Kabab', 2),
(42, 34, 66, 'Tandori Chicken (Local)', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ordermain`
--

CREATE TABLE IF NOT EXISTS `ordermain` (
  `OrderID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ordermain`
--

INSERT INTO `ordermain` (`OrderID`, `UserID`) VALUES
(22, 1),
(23, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(18, 3),
(19, 24),
(20, 24),
(21, 24),
(24, 27),
(33, 28),
(34, 28);

-- --------------------------------------------------------

--
-- Table structure for table `restaurantstable`
--

CREATE TABLE IF NOT EXISTS `restaurantstable` (
  `ResID` int(11) NOT NULL,
  `ResName` varchar(20) NOT NULL,
  `ResAddress` varchar(50) NOT NULL,
  `ResArea` varchar(20) NOT NULL,
  `ResImageLogoPath` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurantstable`
--

INSERT INTO `restaurantstable` (`ResID`, `ResName`, `ResAddress`, `ResArea`, `ResImageLogoPath`) VALUES
(1, 'Take out', '', 'gulshan', 'images/takeout.jpg'),
(2, 'Burger N Boost', 'H-74, Rd-5A, Sat Mosjid Road, Dhaka, 1207', 'Dhanmondi', 'images/bnb.jpg'),
(3, 'Live Kitchen', 'Road # 27 (16 new), House # 38/1, Dhaka', 'Dhanmondi', 'images/livekitchen.jpg'),
(4, 'Handi', '138,Eastern Nibash,1st Floor,Opposite Hotel Westin', 'Gulshan', 'images/handi.jpg'),
(5, 'Smoke Music Cafe', 'Hakam Foundation 6th Floor,Road # 11,Block # C, Dh', 'Banani', 'images/smoke.jpg'),
(6, 'Koyla', '411, Tejgaon Link Road, Dhaka', 'Gulshan', 'images/koyla.jpg'),
(7, 'TFC', 'House-21,Road-6,Block-E, Dhaka', 'Gulshan', 'images/tfc.jpg'),
(8, 'FFC', 'Meher Nibas-Road # 55,House # 12/b,Unit # 1, Dhaka', 'Gulshan', 'images/ffc.jpg'),
(9, 'Cafe Hollywood', 'House # 25,Road #11,4th Floor(Near Bfc), Dhaka', 'Banani', 'images/cafeholly.jpg'),
(10, 'Cafe Mango', 'House#6,Road#5, Dhaka, 1207', 'Dhanmondi', 'images/cafemango.jpg'),
(15, 'Chewy Junior BD', '22, Gulshan South Avenue,Crystal Palace, Dhaka', 'Gulshan', 'images/chewy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviewtable`
--

CREATE TABLE IF NOT EXISTS `reviewtable` (
  `ReviewID` int(11) NOT NULL,
  `ReviewMessage` varchar(500) NOT NULL,
  `ResID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviewtable`
--

INSERT INTO `reviewtable` (`ReviewID`, `ReviewMessage`, `ResID`, `UserID`) VALUES
(1, 'Very bad', 1, 24),
(2, 'Awesome!!!', 1, 8),
(15, 'Okay', 1, 25),
(20, 'It was very good indeed!!', 1, 3),
(21, 'Super Burgerssss !!! :D', 2, 21),
(22, 'Its burger time :D', 1, 21),
(23, 'It was good enough :)', 3, 21),
(24, 'Better quality expected .', 2, 25),
(25, 'awesome', 3, 3),
(26, 'awesome burgers!!', 1, 27),
(27, 'wow', 1, 1),
(28, 'yummmy', 4, 28);

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE IF NOT EXISTS `usertable` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `ADDRESS` varchar(50) DEFAULT NULL,
  `E_MAIL` varchar(30) NOT NULL,
  `MOBILE_NO` varchar(15) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`ID`, `NAME`, `ADDRESS`, `E_MAIL`, `MOBILE_NO`, `PASSWORD`) VALUES
(1, 'EMU', 'Dhaka', 'emu@yahoo.com', '01677850591', 'emu53'),
(3, 'EMU', 'Dhaka', 'emu@gmail.com', '01677850591', 'emu53'),
(4, 'cr', 'madrid', 'cr@hotmail.com', '007', '1234'),
(5, 'Mahzabeen', 'dhaka', 'mah@gmail.com', '0123456789', '4321'),
(6, 'Mahzabeen Emu', 'Rajabajar', 'MahzabeenEmu@gmail.com', '01677850591', 'thebest'),
(8, 'Sadman Sakib', 'Dhanmondi', 'Sadman.Sakib.Cr7@gmail.com', '01714642012', 'sadman'),
(21, 'SADMAN SAKIB', 'DHANMONDI', 'SADMAN-SAKIB@HOTMAIL.COM', '12345', '12345678'),
(22, 'ABCD', 'DHANMONDI', 'ABCD@GMAIL.COM', '123456', '0000'),
(24, 'ema', 'Rajabajar', 'ema@yahoo.com', '14325', 'ema'),
(25, 'MESSI', 'BARCELONA', 'MESSI@HOTMAIL.COM', '101010', 'MESSI'),
(26, 'Mahzabeen Emu', 'Farmgate', 'Mahzabeen_Emu@yahoo.com', '123456', 'emu53'),
(27, 'Sulatana', '22 east rajabazar', 'sultana@yahoo.com', '019333333', 'sul'),
(28, 'tithu', 'rajabazar 29', 'tithu@gmail.om', '0883773', 'tithu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `itemtable`
--
ALTER TABLE `itemtable`
  ADD PRIMARY KEY (`ItemID`), ADD KEY `ResID` (`ResID`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`OrderDetailsID`), ADD KEY `OrderID` (`OrderID`);

--
-- Indexes for table `ordermain`
--
ALTER TABLE `ordermain`
  ADD PRIMARY KEY (`OrderID`), ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `restaurantstable`
--
ALTER TABLE `restaurantstable`
  ADD PRIMARY KEY (`ResID`);

--
-- Indexes for table `reviewtable`
--
ALTER TABLE `reviewtable`
  ADD PRIMARY KEY (`ReviewID`), ADD KEY `UserID` (`UserID`), ADD KEY `ResID` (`ResID`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `E_MAIL` (`E_MAIL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `itemtable`
--
ALTER TABLE `itemtable`
  MODIFY `ItemID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `OrderDetailsID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `ordermain`
--
ALTER TABLE `ordermain`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `restaurantstable`
--
ALTER TABLE `restaurantstable`
  MODIFY `ResID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `reviewtable`
--
ALTER TABLE `reviewtable`
  MODIFY `ReviewID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `itemtable`
--
ALTER TABLE `itemtable`
ADD CONSTRAINT `itemtable_ibfk_1` FOREIGN KEY (`ResID`) REFERENCES `restaurantstable` (`ResID`);

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `ordermain` (`OrderID`);

--
-- Constraints for table `ordermain`
--
ALTER TABLE `ordermain`
ADD CONSTRAINT `ordermain_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `usertable` (`ID`);

--
-- Constraints for table `reviewtable`
--
ALTER TABLE `reviewtable`
ADD CONSTRAINT `reviewtable_ibfk_1` FOREIGN KEY (`ResID`) REFERENCES `restaurantstable` (`ResID`),
ADD CONSTRAINT `reviewtable_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `usertable` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
