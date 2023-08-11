-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 25, 2022 at 12:11 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `titanshoppers`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_ragister`
--

DROP TABLE IF EXISTS `admin_ragister`;
CREATE TABLE IF NOT EXISTS `admin_ragister` (
  `AdminRagisterid` int(8) NOT NULL AUTO_INCREMENT,
  `FullName` text NOT NULL,
  `Img` varchar(300) NOT NULL,
  `Email` text NOT NULL,
  `Phone_no` text NOT NULL,
  `Password` text NOT NULL,
  PRIMARY KEY (`AdminRagisterid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_ragister`
--

INSERT INTO `admin_ragister` (`AdminRagisterid`, `FullName`, `Img`, `Email`, `Phone_no`, `Password`) VALUES
(1, 'Yes Kanani', '1582567227864.jfif', 'kananiyash245@gmail.com', '9510537060', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `Id` int(8) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email_id` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `Date_Time` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`Id`, `Name`, `Email_id`, `message`, `Date_Time`) VALUES
(1, 'Yes Kanani', '202212107@daiict.ac.in', 'HELLO, MY Order ID 24529102272376037122.', '24-11-2022 - 22:10:41');

-- --------------------------------------------------------

--
-- Table structure for table `latestproduct`
--

DROP TABLE IF EXISTS `latestproduct`;
CREATE TABLE IF NOT EXISTS `latestproduct` (
  `Id` int(8) NOT NULL AUTO_INCREMENT,
  `productimg` varchar(300) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `productcategoryid` text NOT NULL,
  `producttitle` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `latestproduct`
--

INSERT INTO `latestproduct` (`Id`, `productimg`, `gender`, `productcategoryid`, `producttitle`) VALUES
(1, '15.jpg', 'M', '1', 'Mens Shirt'),
(2, 'off-white-zari-work-ruffle-lehenga-choli-jf4039500.jpg', 'F', '14', 'Women Bridal Choli'),
(3, '274188456_2390118177792295_8553422451364630727_n (1).jpg', 'M', '15', 'Mens Suit'),
(4, 'g3.jpg', 'M', '6', 'Mens Goggles'),
(5, 'regal-rani-sherwani-set-odes951d-325-2.jpg', 'M', '16', 'Mens Sherwani'),
(6, '3.jpg', 'F', '9', 'Women Top'),
(7, 'images (5).jpg', 'M', '3', 'Mens T-Shirt'),
(8, '203162768_4124560360944767_5649348751692118743_n.jpg', 'M', '5', 'Mens Shoes');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `userid` int(8) NOT NULL AUTO_INCREMENT,
  `img` varchar(400) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phoneno` text NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `re_password` text NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `img`, `Fname`, `Gender`, `Email`, `Phoneno`, `Username`, `Password`, `re_password`) VALUES
(1, 'IMG20220926233147.jpg', 'Yes Kanani', 'M', 'kananiyash731@gmail.com', '9510537060', 'yesss_245', '81dc9bdb52d04dc20036dbd8313ed055', '202cb962ac59075b964b07152d234b70'),
(2, 'IMG20220428140132.jpg\r\n', 'YES KANANI', 'M', 'kananiyash245@gmail.com', '9510537060', 'yesss.245', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(3, '3.jpg', 'Kruti Boghra', 'F', 'krutiii07@gmail.com', '9727022704', 'Krutiii_07', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `order_user_info`
--

DROP TABLE IF EXISTS `order_user_info`;
CREATE TABLE IF NOT EXISTS `order_user_info` (
  `Order_id` int(8) NOT NULL AUTO_INCREMENT,
  `Randomorderid` text NOT NULL,
  `Order_date` text NOT NULL,
  `FullName` text NOT NULL,
  `Phone_no` text NOT NULL,
  `House_no` text NOT NULL,
  `Area` text NOT NULL,
  `Landmark` text NOT NULL,
  `Pincode` text NOT NULL,
  `Town_city` text NOT NULL,
  `State` text NOT NULL,
  `Country` text NOT NULL,
  `User_id` varchar(100) NOT NULL,
  `User_name` text NOT NULL,
  `Payment_time_date` text NOT NULL,
  `Status` text NOT NULL,
  `Payment_time` text NOT NULL,
  `Grand_total` text NOT NULL,
  PRIMARY KEY (`Order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_user_info`
--

INSERT INTO `order_user_info` (`Order_id`, `Randomorderid`, `Order_date`, `FullName`, `Phone_no`, `House_no`, `Area`, `Landmark`, `Pincode`, `Town_city`, `State`, `Country`, `User_id`, `User_name`, `Payment_time_date`, `Status`, `Payment_time`, `Grand_total`) VALUES
(1, '24522092268580394971', '22-09-2022 - 13:46:11', 'XYZ', '9510535353', 'H-503', 'Navkar', 'Avenue', '900065', 'Surat', 'Gujarat', 'India', '', 'yesss_245', '22-09-2022 - 13:46:11', 'Confirm', 'None', '0'),
(2, '24522092233578798940', '22-09-2022 - 17:09:06', 'Yes Kanani', '9510537060', 'H-503', 'NAvkara', 'Pasodra', '394185', 'Surat', 'Gujrat', 'India', '', 'yesss_245', '22-09-2022 - 17:09:06', 'Confirm', 'None', '0'),
(3, '24529102272376037122', '29-10-2022 - 14:46:18', 'Krutiii ', '9727022704', 'H-703,Navkar', 'Near Pasodra', 'Pasodra', '395006', 'Surat', 'Gujrat', 'India', '3', 'Krutiii_07', '29-10-2022 - 14:46:18', 'Confirm', 'None', '0'),
(4, '24503112282707263340', '03-11-2022 - 08:33:26', 'Natik', '9995557778', 'H-054', 'vyfduiuh', 'vjdivu', '395625', 'surat', 'Gujrat', 'india', '1', 'yesss_245', '03-11-2022 - 08:33:26', 'Confirm', 'None', '0');

-- --------------------------------------------------------

--
-- Table structure for table `product_category_id`
--

DROP TABLE IF EXISTS `product_category_id`;
CREATE TABLE IF NOT EXISTS `product_category_id` (
  `Id` int(8) NOT NULL AUTO_INCREMENT,
  `product_title` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category_id`
--

INSERT INTO `product_category_id` (`Id`, `product_title`) VALUES
(1, 'MEN SHIRT'),
(2, 'MEN PENT'),
(3, 'MEN T-SHIRT'),
(4, 'MEN CAP'),
(5, 'MEN SHOES'),
(6, 'MEN GOGGLES'),
(7, 'MEN BELT'),
(8, 'WOMEN t-SHIRT'),
(9, 'WOMEN TOP'),
(10, 'WOMEN PENT'),
(11, 'WOMEN SHOES'),
(12, 'WOMEN SHANDEL'),
(13, 'WOMEN GOGGLES'),
(14, 'WOMEN CHOLI'),
(15, 'MEN SUIT'),
(16, 'MEN SERWANI'),
(17, 'MENS SHORT'),
(18, 'WOMEN SHIRT'),
(19, 'WOMEN CAP'),
(20, 'WOMEN BELT');

-- --------------------------------------------------------

--
-- Table structure for table `product_men_women_id`
--

DROP TABLE IF EXISTS `product_men_women_id`;
CREATE TABLE IF NOT EXISTS `product_men_women_id` (
  `Id` int(8) NOT NULL AUTO_INCREMENT,
  `Type` varchar(50) NOT NULL,
  `Gtype` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_men_women_id`
--

INSERT INTO `product_men_women_id` (`Id`, `Type`, `Gtype`) VALUES
(1, 'Male', 'M'),
(2, 'Female', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
CREATE TABLE IF NOT EXISTS `rating` (
  `Id` int(8) NOT NULL AUTO_INCREMENT,
  `Product_id` int(8) NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Review` varchar(100) NOT NULL,
  `Rating_number` text NOT NULL,
  `Date_time` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`Id`, `Product_id`, `Name`, `Email`, `Review`, `Rating_number`, `Date_time`) VALUES
(1, 1, 'Yes Kanani', 'kananiyash245@gmail.com', 'Nice Product', '5', '21-09-2022 - 17:22'),
(2, 2, 'YES KANANI', 'ky@gmail.com', 'cdshcvhbch', '5', '22-09-2022 - 17:07'),
(3, 8, 'Yessss', 'yk@gmail.com', 'ABCEDE', '4', '21-10-2022 - 00:40'),
(4, 2, 'naitik', 'nk@gmail.com', 'ABDCsvu', '4', '03-11-2022 - 08:31');

-- --------------------------------------------------------

--
-- Table structure for table `shope_banners`
--

DROP TABLE IF EXISTS `shope_banners`;
CREATE TABLE IF NOT EXISTS `shope_banners` (
  `No` int(8) NOT NULL AUTO_INCREMENT,
  `img_Banners` text NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Big_hedline` text NOT NULL,
  `Sub_message` text NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shope_banners`
--

INSERT INTO `shope_banners` (`No`, `img_Banners`, `Status`, `Big_hedline`, `Sub_message`) VALUES
(1, 'images.jfif', 0, 'FESTIVAL SPECIAL', 'abcedfgh'),
(2, 'shopbanners.jpg', 1, 'FESTIVAL SPECIAL', 'BYE A FESTIVAL SPECIAL AND GET SURPRICE BIG DISCOUNT ');

-- --------------------------------------------------------

--
-- Table structure for table `shopproduct`
--

DROP TABLE IF EXISTS `shopproduct`;
CREATE TABLE IF NOT EXISTS `shopproduct` (
  `productid` int(8) NOT NULL AUTO_INCREMENT,
  `img` varchar(400) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `productcategoryid` varchar(50) NOT NULL,
  `Brand` varchar(50) NOT NULL,
  `exclusive_product` tinyint(1) NOT NULL,
  `productname` text NOT NULL,
  `rate` varchar(50) NOT NULL,
  `Discount` varchar(50) NOT NULL,
  `F_rate` varchar(50) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `size1` text NOT NULL,
  `size2` text NOT NULL,
  `size3` text NOT NULL,
  `size4` text NOT NULL,
  `size5` text NOT NULL,
  `size6` text NOT NULL,
  `color1` text NOT NULL,
  `color2` text NOT NULL,
  `color3` text NOT NULL,
  `color4` text NOT NULL,
  `color5` text NOT NULL,
  `color6` text NOT NULL,
  `height1` text NOT NULL,
  `height2` text NOT NULL,
  `height3` text NOT NULL,
  `height4` text NOT NULL,
  `height5` text NOT NULL,
  `height6` text NOT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopproduct`
--

INSERT INTO `shopproduct` (`productid`, `img`, `gender`, `productcategoryid`, `Brand`, `exclusive_product`, `productname`, `rate`, `Discount`, `F_rate`, `discription`, `size1`, `size2`, `size3`, `size4`, `size5`, `size6`, `color1`, `color2`, `color3`, `color4`, `color5`, `color6`, `height1`, `height2`, `height3`, `height4`, `height5`, `height6`) VALUES
(2, '14.jpg', 'M', '1', 'PUMA', 0, 'Mens jeans Shirt', '1999', '50', '3998.00', 'Mens jeans Shirt', 'L', 'XXL', 'XXXL', 'S', 'M', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '11.jpg', 'M', '3', 'POLO', 0, 'Mens New plain white hoodies', '1699', '50', '3398.00', 'Mens New POLO plain white hoodies', 'S', 'X', 'M', 'XXL', 'XXXL', '', 'red', 'white', 'black', '', '', '', '', '', '', '', '', ''),
(4, '444.jpg', 'M', '4', 'Clavin Klein', 1, 'Mens Cap', '999', '70', '3330.00', 'New Designing Cap CK', '', '', '', '', '', '', 'Black', 'Grey', 'Red', 'White', '', '', '', '', '', '', '', ''),
(5, '111.jpg', 'M', '6', 'Clavin Klein', 1, 'Mens Goggles', '899', '80', '4495.00', 'Mens New arrivals Goggles', '', '', '', '', '', '', 'Black', '', '', '', '', '', '', '', '', '', '', ''),
(6, '9.jpg', 'M', '7', 'CAMPUS', 1, 'Men New Arrival Belt', '1299', '60', '3247.50', 'Men New Arrival Belt \r\n', '', '', '', '', '', '', 'Brown ', 'Black', '', '', '', '', '', '', '', '', '', ''),
(7, '10.jpg', 'M', '5', 'CAMPUS', 1, 'Mens New designing Shoes', '1399', '70', '4663.33', 'Mens New designing Shoes', '7', '8', '9', '10', '11', '12', 'White', 'Black', 'Green', '', '', '', '', '', '', '', '', ''),
(8, '3.jpg', 'M', '9', 'POLO', 0, 'Women Fancy Top', '999', '70', '3330.00', 'Women New Fancy Top', 's', 'x', 'm', 'xxl', 'xxl', '', 'Black', 'Red', 'White', 'Pink', '', '', '', '', '', '', '', ''),
(9, '5.jpg', 'F', '8', 'POLO', 0, 'Women T-shirt', '1299', '80', '6495.00', 'Women T-shirt Plain', 'S', 'M', 'X', 'L', 'XXL', '', 'White', 'Black', 'Red', 'Green', '', '', '', '', '', '', '', ''),
(10, '5.jpg', 'F', '9', 'POLO', 0, 'Women Fancy Top', '999', '70', '3330.00', 'Women Fancy TopWomen Fancy TopWomen Fancy TopWomen Fancy TopWomen Fancy Top', 'S', 'M', 'L', 'XXL', '', '', 'Red', 'White', 'Black', '', '', '', '', '', '', '', '', ''),
(11, '2.jpg', 'F', '13', 'VINCENT', 0, 'New Vincent women Goggles', '1099', '70', '3663.33', 'New Style of Vincent Goggles for Women', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, '111.jpg', 'F', '13', 'UNISEX', 0, 'Unisex Women Goggle', '1799', '50', '3598.00', 'Unisex New style women goggles', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, '203162768_4124560360944767_5649348751692118743_n.jpg', 'M', '5', 'ADIDAS', 0, 'Mens Loffer shoes', '3599', '80', '17995.00', 'New style and denim fabric style', '7', '8', '9', '10', '11', '12', 'White/Blue', 'Red/ Yellow', '', '', '', '', '', '', '', '', '', ''),
(14, 'bollywood-designer-green-banglori-silk-digital-printed-lehenga-choli-jf402558.jpg', 'F', '14', 'CAMPUS', 0, 'Designing Bollywood Choli', '19999', '30', '28570.00', 'Manish-Malhotra-bollywood-designer-green-banglori-silk-digital-printed-lehenga-choli', '', '', '', '', '', '', 'Green', '', '', '', '', '', '', '', '', '', '', ''),
(15, 'bridal-special-pink-velvet-lehenga-choli-jf4039966.jpg', 'F', '14', 'UNISEX', 0, 'Bridal Special Pink Choli', '15999', '10', '17776.67', 'Unisex-bridal-special-pink-velvet-lehenga-choli', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 'cream-silk-grooms-sherwani-nmk-5408-.jpg', 'M', '16', 'ETHNICPLUS', 0, 'Ceram Silk Sherwani', '16999', '50', '33998.00', 'Ethnicplus-cream-silk-grooms-sherwani-Raw ', 's', 'x', 'l', 'xxl', 'xxxl', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, '817860066_01_Front.jpg', 'M', '3', 'NIKE', 0, 'Mens T-Shirt', '599', '40', '998.33', 'Simple T-shirt', 's', 'x', 'l', 'xxl', 'xxxl', '', 'Green ', 'White', 'Red', 'Yellow', 'Blue', '', '', '', '', '', '', ''),
(18, 'CTSD1136-327_KSS_2129.jpg', 'M', '15', 'ROYAL SON', 0, 'Royal Son Simple Men suit', '5999', '30', '8570.00', 'Simple Royal son suit', 's', 'x', 'l', 'xxl', 'xxxl', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 'download (2).jpg', 'F', '9', 'POLO', 0, 'Women Top', '899', '20', '1123.75', 'Fancy Top', 's', 'x', 'l', 'xxl', 'xxl', '', 'Whote ', 'Green ', 'Yellow', 'Red', '', '', '', '', '', '', '', ''),
(20, 'off-white-zari-work-ruffle-lehenga-choli-jf4039500.jpg', 'F', '14', 'ROYAL SON', 0, 'Off White Choli', '23999', '40', '39998.33', 'Royal-son-off-white-zari-work-ruffle-lehenga-choli', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 'images (14).jpg', 'F', '8', 'PUMA', 0, 'Women T-shirt', '999', '10', '1009.09', 'Womens Plain Top With Small Amount Design ', 's', 'x', 'l', 'xxl', 'xxxl', '', 'Pink', 'Red', 'White', 'Yellow', '', '', '', '', '', '', '', ''),
(22, 'regal-rani-sherwani-set-odes951d-325-2.jpg', 'M', '16', 'UNISEX', 0, 'Mens  regal rani sherwani', '14999', '50', '29998.00', 'Unisex-regal-rani-sherwani-set-odes951d-325-2', 's', 'm', 'x', 'l', 'xxl', 'xxxl', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 'shoes1.jpg', 'F', '11', 'PUMA', 0, 'Women Shoes', '2599', '50', '5198.00', 'Women Pink Shoes', '8', '9', '10', '11', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 'shoes2.jpg', 'M', '5', 'NIKE', 0, 'Mens Shoes', '1299', '20', '1623.75', 'Mens Simple shoes', '7', '8', '9', '10', '11', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 'streaked-blue-party-wear-suit-ctsd1162-306-9.jpg', 'M', '15', 'ETHNICPLUS', 0, 'Mens Blue Party Suit', '4999', '20', '6248.75', 'Ethnicplus-streaked-blue-party-wear-suit-ctsd1162-306-9', 's', 'm', 'l', 'x', 'xxl', 'xxxl', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 'g.jpg', 'F', '13', 'FOSSIL', 0, 'Women Goggles', '1099', '50', '2198.00', 'Women Goggles', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, 'g1.jpg', 'M', '6', 'FASTRACK', 1, 'Mens Black Goggles', '2999', '50', '5998.00', 'Mens Simple Balck Goggles', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

DROP TABLE IF EXISTS `social_links`;
CREATE TABLE IF NOT EXISTS `social_links` (
  `No` int(8) NOT NULL AUTO_INCREMENT,
  `Facebook` text NOT NULL,
  `Twitter` text NOT NULL,
  `Instagram` text NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

DROP TABLE IF EXISTS `user_order`;
CREATE TABLE IF NOT EXISTS `user_order` (
  `No` int(8) NOT NULL AUTO_INCREMENT,
  `Randomorderid` varchar(50) NOT NULL,
  `Product_Name` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Quantity` varchar(50) NOT NULL,
  `Total_Price` varchar(50) NOT NULL,
  `Gst` varchar(50) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_order`
--

INSERT INTO `user_order` (`No`, `Randomorderid`, `Product_Name`, `Price`, `Quantity`, `Total_Price`, `Gst`) VALUES
(1, '202212107', 'Men\' T-shirt', '9555', '5', '47775', ''),
(2, '2450000056999894759', 'PUMA New Simple black shirt', '1999', '10', '19990', '999'),
(3, '24522', 'PUMA New Simple black shirt', '1999', '20', '39980', '1999'),
(4, '24522092268580394971', 'PUMA New Simple black shirt', '1999', '20', '39980', '1999'),
(5, '24522092233578798940', 'Mens jeans Shirt', '1999', '50', '99950', '4997'),
(6, '24529102272376037122', 'Mens Black Goggles', '2999', '2', '5998', '299'),
(7, '24529102272376037122', 'Mens  regal rani sherwani', '14999', '1', '14999', '749'),
(8, '24529102272376037122', 'Women Fancy Top', '999', '1', '999', '49'),
(9, '24529102272376037122', 'Designing Bollywood Choli', '19999', '1', '19999', '999'),
(10, '24503112282707263340', 'Mens jeans Shirt', '1999', '5', '9995', '499'),
(11, '24503112282707263340', 'Women Fancy Top', '999', '10', '9990', '499');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
