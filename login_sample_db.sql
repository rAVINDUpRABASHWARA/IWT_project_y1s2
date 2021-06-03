-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2021 at 05:55 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_sample_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminn`
--

CREATE TABLE `adminn` (
  `id` int(11) NOT NULL,
  `Admin_id` varchar(10) NOT NULL,
  `Admin_username` varchar(100) NOT NULL,
  `Admin_password` varchar(100) NOT NULL,
  `A_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminn`
--

INSERT INTO `adminn` (`id`, `Admin_id`, `Admin_username`, `Admin_password`, `A_code`) VALUES
(1, 'ADM1', 'Ravindu', '123456789', 'Owner'),
(2, 'ADM2', 'Nikitha', '123456789', 'Manager'),
(3, 'ADM3', 'Pasindu', '123456789', 'Financial officer'),
(11, 'ADM4', 'Hashipraba', '123456789', 'Delivery manager'),
(12, 'ADM5', 'Randika', '123456789', 'Financial officer'),
(13, 'ADM6', 'Piyal', '123456789', 'Driver'),
(14, 'ADM7', 'Sadun', '123456789', 'Driver'),
(15, 'ADM8', 'Supun', '123456789', 'Driver'),
(17, 'ADM9', 'Sumith', '147852369', 'Driver');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(2, 'Dell'),
(3, 'Lg'),
(4, 'Samsung'),
(6, 'Toshiba'),
(8, 'HP'),
(9, 'aaaa'),
(10, 'thgdfh'),
(11, 'hvh');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `price` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(15, 'Brass'),
(16, 'Keyboards');

-- --------------------------------------------------------

--
-- Table structure for table `customerorders`
--

CREATE TABLE `customerorders` (
  `id` bigint(20) NOT NULL,
  `Order_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `Product_id` bigint(20) NOT NULL,
  `Order_item` varchar(20) NOT NULL,
  `Total` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerorders`
--

INSERT INTO `customerorders` (`id`, `Order_id`, `user_name`, `user_id`, `Product_id`, `Order_item`, `Total`) VALUES
(1, 561278, 'Saman123@gmail.com', 54563278, 65756, 'Acoustic Guiter4', 75000),
(2, 867909, 'RIDMA64@gmail.com', 23649823, 65759, 'Piano', 225000),
(3, 345648, 'mal00@gmail.com', 45896327, 65760, 'Flute', 7000),
(4, 985412, 'sachi*@gmail.com', 45893212, 65757, 'Acoustic Drumset', 315000),
(5, 985423, 'lakmi36@gmail.com', 45983212, 65755, 'Acoustic Guiter3', 145000);

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `delivery_id` bigint(20) NOT NULL,
  `Order_id` bigint(20) NOT NULL,
  `M_username` varchar(30) NOT NULL,
  `Address_line1` varchar(30) NOT NULL,
  `Address_line2` varchar(30) NOT NULL,
  `Address_line3` varchar(30) NOT NULL,
  `Address_line4` varchar(30) NOT NULL,
  `Delivery_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`delivery_id`, `Order_id`, `M_username`, `Address_line1`, `Address_line2`, `Address_line3`, `Address_line4`, `Delivery_status`) VALUES
(1, 827527, ' kasun88', ' 138/A', 'Peralanda', ' Peralanda', 'Ragama', ' Not Delivered'),
(2, 561278, 'Saman123', '526/B', 'Samagi Road', 'Panchika watta', 'Colombo', 'Deliverd'),
(3, 577575, ' nuwi@2', ' 89', 'B', ' B', 'Kandana', ' Deliverd');

-- --------------------------------------------------------

--
-- Table structure for table `driverdetails`
--

CREATE TABLE `driverdetails` (
  `id` bigint(20) NOT NULL,
  `Driver_id` bigint(20) NOT NULL,
  `Driver_name` varchar(100) NOT NULL,
  `Delivery_id` bigint(20) NOT NULL,
  `Driver_phone_num` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driverdetails`
--

INSERT INTO `driverdetails` (`id`, `Driver_id`, `Driver_name`, `Delivery_id`, `Driver_phone_num`) VALUES
(1, 1, 'Piyal', 4, '758964325'),
(2, 2, 'Sadun', 2, '764789231'),
(3, 3, 'Supun', 1, '715896423'),
(4, 4, 'Ruwan', 5, '758964325'),
(5, 5, 'Sunil', 3, '758964325');

-- --------------------------------------------------------

--
-- Table structure for table `order_u`
--

CREATE TABLE `order_u` (
  `Order_id` int(11) NOT NULL,
  `M_username` varchar(30) NOT NULL,
  `Member_id` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `Order_items` varchar(100) NOT NULL,
  `Total_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_u`
--

INSERT INTO `order_u` (`Order_id`, `M_username`, `Member_id`, `Product_id`, `Order_items`, `Total_price`) VALUES
(345648, 'mal00@gmail.com', 45896327, 65756, 'Flute', '7000.00'),
(561278, 'Saman123@gmail.com', 54563278, 65756, 'Acoustic Guiter4', '75000.00');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Payment_id` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `Payment_amount` varchar(100) NOT NULL,
  `Payment_type` varchar(30) NOT NULL,
  `Bank` varchar(20) NOT NULL,
  `BankCardNo` bigint(20) NOT NULL,
  `Payment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Payment_id`, `user_id`, `user_name`, `Payment_amount`, `Payment_type`, `Bank`, `BankCardNo`, `Payment_date`) VALUES
(499, 0, '', '225000.00', 'Pay pal', '', 0, '2021-03-11 18:30:00'),
(576, 0, '', '315000.00', 'visa', '', 0, '2021-05-02 18:30:00'),
(578, 478446388036802341, '00prabashwara123@gmail.com', '$728291', 'Visa', 'BOC', 8652345286, '2021-05-30 11:25:53'),
(579, 478446388036802341, '00prabashwara123@gmail.com', '$324000', 'Visa', 'HNB', 4656823783245, '2021-05-30 11:26:50'),
(580, 478446388036802341, '00prabashwara123@gmail.com', '$422000', 'Visa', 'HNB', 893863453, '2021-05-30 11:30:43'),
(581, 478446388036802341, '00prabashwara123@gmail.com', '$422000', 'PayPal', 'HNB', 453275272, '2021-05-30 11:32:29'),
(582, 388410232640, 'it20631260@my.sliit.lk', '$363291', 'Visa', 'BOC', 78634537438, '2021-05-30 11:34:08'),
(583, 478446388036802341, '00prabashwara123@gmail.com', '$334291', 'PayPal', 'BOC', 7534534537, '2021-05-30 15:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(15, 0, 2, 'Cornet', 127000, '<ul>\r\n	<li>Short design</li>\r\n	<li>Bore: ML 11.65mm (0.459&quot;)</li>\r\n	<li>Newly designed rounded lead pipe</li>\r\n	<li>Bell &Oslash;: 119.00 mm, optimal material thickness</li>\r\n	<li>Two-piece yellow brass bell</li>\r\n	<li>Monel alloy pistons</li>\r\n	<li>Newly designed piston buttons and bottom caps</li>\r\n	<li>Thumb saddle on the first tuning slide</li>\r\n	<li>Fixed finger ring on the third tuning slide</li>\r\n	<li>Lacquered gold</li>\r\n	<li>Includes CR 11E4 (s) mouthpiece and case</li>\r\n</ul>\r\n', 'cornet.jpg', 'Cornet'),
(16, 15, 3, 'French horn', 236291, '<p>The&nbsp;<strong>French horn</strong>&nbsp;(since the 1930s known simply as the &quot;<strong>horn</strong>&quot; in professional music circles) is a brass instrument made of tubing wrapped into a coil with a flared bell. The double&nbsp;<strong>horn</strong>&nbsp;in F/B♭ (technically a variety of German&nbsp;<strong>horn</strong>) is the&nbsp;<strong>horn</strong>&nbsp;most often used by players in professional orchestras and bands</p>\r\n', 'French horn.jpg', 'French horn'),
(17, 0, 2, 'Trombone', 172000, '<p>The&nbsp;<strong>trombone</strong>&nbsp;is a musical instrument in the brass family. As with all brass instruments, sound is produced when the player&#39;s vibrating lips (embouchure) cause the air column inside the instrument to vibrate</p>\r\n', 'trombone.jpg', 'trombone'),
(18, 15, 2, 'trumpet', 98000, '<p>The&nbsp;<strong>trumpet</strong>&nbsp;is a brass instrument commonly used in classical and jazz ensembles. The&nbsp;<strong>trumpet</strong>&nbsp;group ranges from the piccolo&nbsp;<strong>trumpet</strong>&nbsp;with the highest register in the brass family, to the bass&nbsp;<strong>trumpet</strong>, which is pitched one octave below the standard B♭ or C&nbsp;<strong>Trumpet</strong></p>\r\n', 'trumpet.jpg', 'trumpet'),
(19, 15, 2, 'Tuba', 197000, '<p><strong>Tuba</strong>, deep-pitched brass wind instrument with valves and wide conical bore. The word&nbsp;<strong>tuba</strong>&nbsp;originally was the name of a straight-built Roman trumpet and was the medieval Latin word for trumpet. Valved bass brass instruments for bands are mentioned as early as 1829, but little is now known about them</p>\r\n', 'tuba.jpg', 'tuba');

-- --------------------------------------------------------

--
-- Table structure for table `qanda`
--

CREATE TABLE `qanda` (
  `id` bigint(20) NOT NULL,
  `Question_id` bigint(20) NOT NULL,
  `user_name` bigint(20) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Admin_id` bigint(20) NOT NULL,
  `Qusetion_answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qanda`
--

INSERT INTO `qanda` (`id`, `Question_id`, `user_name`, `Question`, `Admin_id`, `Qusetion_answer`) VALUES
(1, 1, 0, 'I have a question about my payment.', 2564, 'You can contact our support sevice officer'),
(2, 2, 0, 'I want to return my purchase!what can i do?', 2564, 'Please send us your purchased details.Then our support manager will contact you'),
(3, 3, 0, 'Do you sell gift cards?', 2564, 'You can buy from our branches');

-- --------------------------------------------------------

--
-- Table structure for table `ragister_users`
--

CREATE TABLE `ragister_users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phonenumber` decimal(10,0) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `Address_line1` varchar(100) NOT NULL,
  `Address_line2` varchar(100) NOT NULL,
  `Address_line3` varchar(100) NOT NULL,
  `Address_line4` varchar(100) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ragister_users`
--

INSERT INTO `ragister_users` (`id`, `user_id`, `first_name`, `last_name`, `phonenumber`, `password`, `user_name`, `Address_line1`, `Address_line2`, `Address_line3`, `Address_line4`, `Date`) VALUES
(1, 478446388036802341, 'Ravindu', 'Prabashwara', '788242482', '123456789', '00prabashwara123@gmail.com', '22/16/2', 'Ambagahalanda waththa', 'Gampaha Road', 'Yakkala', '2021-05-04 04:51:07'),
(2, 388410232640, 'Tharindu', 'Pahasars', '788242482', '123456789', 'it20631260@my.sliit.lk', '22/16/2', 'Ambagahalanda waththa', 'Gampaha Road', 'Yakkala', '2021-05-04 04:51:32'),
(3, 378521328, 'Nikitha', 'Meraj', '788242482', '123456789', 'it20631338@my.sliit.lk', '22/16/2', 'Ambagahalanda waththa', 'Gampaha Road', 'Yakkala', '2021-05-04 17:19:51'),
(4, 493769062390, 'Hashi', 'Fernando', '712345678', '123456789', 'nikiniki@gmail.com', 'T56,', 'Bayawunu para,', 'Anda yata,', 'Ragama.', '2021-05-06 17:22:55'),
(5, 6185101119604814042, 'RGREW', 'awca', '788242482', '12345', 'asxa@ghhnh', '22/16/2', 'sxsxas', 'ASC', 'dcadcadcadcadc', '2021-05-14 11:42:30'),
(6, 54563278, 'Shihan', 'Fernando', '715683493', '5565332gfh*/5223', 'Saman123@gmail.com', '526/B', 'Samagi Road', 'Panchikawatta', 'Colombo', '2021-05-30 08:33:35'),
(7, 23649823, 'Ridma', 'Perera', '775648923', 'gdyw628$%', 'RIDMA64@gmail.com', '134/D', 'Samanala mawatha', 'Miriswatta', 'Gampaha', '2021-05-30 08:32:47'),
(8, 48932565, 'Charith', 'Silva', '765482973', '62768gtsde#@', 'Chari99@gmail.com', '10/E', 'Peoples Road', 'Karapitiya', 'Galle', '2021-05-30 08:33:00'),
(9, 45698235, 'Prihan', 'Peris', '712586493', 'uytghj67', 'pri23@gmail.com', '170/B', 'Sirilena Road', 'Mahanama', 'Katharagama', '2021-05-30 08:33:05'),
(10, 45893212, 'Sachin', 'Silva', '723678912', 'olki78!@#', 'sachi*@gmail.com', '456/N', 'Sekku watta Road', 'Iranamadu', 'Jaffna', '2021-05-30 08:33:16'),
(11, 45896327, 'Kamal', 'Adhikari', '745689323', 'yuten538^&8', 'mal00@gmail.com', '243/1', 'Kale  Road', 'Kinniya', 'Trincomalee', '2021-05-30 08:33:20'),
(12, 45986327, 'Kamal', 'Peris', '745698323', 'yurgh538^&8', 'Kapila45@gmail.com', '134/D', 'Samanala mawatha', 'Miriswatta', 'Gampaha', '2021-05-30 08:33:23'),
(13, 45983212, 'Venura', 'Silva', '723678912', 'AAki78!@#', 'lakmi36@gmail.com', '170/B', 'Sirilena Road', 'Mahanama', 'Katharagama', '2021-05-30 08:33:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customerorders`
--
ALTER TABLE `customerorders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `driverdetails`
--
ALTER TABLE `driverdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_u`
--
ALTER TABLE `order_u`
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
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `qanda`
--
ALTER TABLE `qanda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ragister_users`
--
ALTER TABLE `ragister_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`user_id`) USING BTREE,
  ADD KEY `user_name` (`user_name`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminn`
--
ALTER TABLE `adminn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customerorders`
--
ALTER TABLE `customerorders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `delivery_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `driverdetails`
--
ALTER TABLE `driverdetails`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=584;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `qanda`
--
ALTER TABLE `qanda`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ragister_users`
--
ALTER TABLE `ragister_users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
