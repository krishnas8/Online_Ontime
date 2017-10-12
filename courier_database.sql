-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2017 at 01:29 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courier`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `courier_id` int(11) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL DEFAULT 'Order Recieved'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`courier_id`, `update_date`, `status`) VALUES
(1000, '2017-10-08 23:00:23', 'reached to f'),
(1001, '2017-10-08 23:12:20', 'Order Recieved'),
(1002, '2017-10-06 18:30:00', 'Order Recieved'),
(1003, '2017-10-08 23:25:53', 'Order Recieved'),
(1004, '2017-10-08 23:29:10', 'Package Delivered'),
(1005, '2017-10-08 23:32:42', 'Order Recieved'),
(1006, '2017-10-08 23:36:34', 'Order Recieved'),
(1007, '2017-10-08 23:44:48', 'Order Recieved'),
(1008, '2017-10-09 03:48:46', 'Package Delivered'),
(1009, '2017-10-09 10:22:04', 'Package received'),
(1010, '2017-10-11 01:15:44', 'Order Recieved');

-- --------------------------------------------------------

--
-- Table structure for table `billing_info`
--

CREATE TABLE `billing_info` (
  `billing_id` int(11) NOT NULL,
  `courier_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Cost` int(11) NOT NULL,
  `Card_no` char(16) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing_info`
--

INSERT INTO `billing_info` (`billing_id`, `courier_id`, `user_id`, `Cost`, `Card_no`, `Date`) VALUES
(100000, 1000, 48, 165, '1234123412341234', '2017-10-08 23:00:24'),
(100001, 1001, 60, 1007, '4569456945694569', '2017-10-08 23:12:20'),
(100002, 1002, 52, 2178, '7896789678967896', '2017-10-08 23:21:51'),
(100003, 1003, 55, 1462, '012345678902', '2017-10-08 23:25:53'),
(100004, 1004, 57, 1472, '9875987598759875', '2017-10-08 23:29:10'),
(100005, 1005, 58, 171, '8520852085208550', '2017-10-08 23:32:42'),
(100006, 1006, 61, 1000, '7897897897997891', '2017-10-08 23:36:34'),
(100007, 1007, 48, 2183, '9875987598759875', '2017-10-08 23:44:49'),
(100008, 1008, 60, 1455, '8520852085208520', '2017-10-09 03:48:46'),
(100009, 1009, 58, 1458, '0258025802580258', '2017-10-09 10:22:04'),
(100010, 1010, 48, 1455, '7412145678523014', '2017-10-11 01:15:44');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `No` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Contact` varchar(11) NOT NULL,
  `query` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE `courier` (
  `courier_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courier`
--

INSERT INTO `courier` (`courier_id`, `user_id`, `type`, `weight`, `Date`, `cost`) VALUES
(1000, 48, 'Normal', '5', '2017-10-09', 165),
(1001, 60, 'Express', '2', '2017-10-11', 1007),
(1002, 52, 'Normal', '2', '2017-10-10', 2178),
(1003, 55, 'Normal', '0.5', '2017-10-11', 1462),
(1004, 57, 'Express', '1', '2017-10-11', 1472),
(1005, 58, 'Express', '1', '2017-10-12', 171),
(1006, 61, 'Normal', '5', '2017-10-11', 1000),
(1007, 48, 'Normal', '7', '2017-10-12', 2183),
(1008, 60, 'Normal', '3', '2017-10-10', 1455),
(1009, 58, 'Express', '5', '2017-10-10', 1458),
(1010, 48, 'Normal', '3', '2017-10-16', 1455);

--
-- Triggers `courier`
--
DELIMITER $$
CREATE TRIGGER `t_order` AFTER INSERT ON `courier` FOR EACH ROW BEGIN
INSERT INTO admin(courier_id) VALUES(new.courier_id);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `distance`
--

CREATE TABLE `distance` (
  `PickUp city` varchar(255) NOT NULL,
  `Destination City` varchar(255) NOT NULL,
  `Distance` int(11) NOT NULL,
  `Station` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distance`
--

INSERT INTO `distance` (`PickUp city`, `Destination City`, `Distance`, `Station`) VALUES
('Banglore', 'Delhi', 2166, 'a'),
('Mumbai', 'Banglore', 985, 'b'),
('Mumbai', 'Delhi', 1421, 'c'),
('Pune', 'Banglore', 840, 'd'),
('Pune', 'Delhi', 1451, 'e'),
('Pune', 'Mumbai', 150, 'f');

-- --------------------------------------------------------

--
-- Table structure for table `drop_add`
--

CREATE TABLE `drop_add` (
  `courier_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phn` varchar(10) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drop_add`
--

INSERT INTO `drop_add` (`courier_id`, `name`, `phn`, `address2`, `city2`) VALUES
(1000, 'Shubham Shah', '9028378859', '	Bilwikiren Society					', 'Mumbai'),
(1001, 'Ankit Gone', '9764211611', '			Mahesh Colony			', 'Banglore'),
(1002, 'Apurva Zawar', '9405444048', '		RajaPeth				', 'Delhi'),
(1003, 'Atharwa Parwatkar', '9405908448', '	Sector 23					', 'Pune'),
(1004, 'Rashee Soni', '9834683324', 'kalyani Nagar						', 'Delhi'),
(1005, 'Surbhi Agrawal', '9561188407', '	shri Krishnapeth					', 'Pune'),
(1006, 'Arti Zawar', '9890821400', '		Fc road				', 'Mumbai'),
(1007, 'Mayur Karwa', '9910046199', '	Wall street					', 'Banglore'),
(1008, 'Shivani Karwa', '9960401473', '		sector 23				', 'Delhi'),
(1009, 'Anushka', '7507639527', 'sector 43					', 'Delhi'),
(1010, 'Aarohi Sumant', '9730019910', '210- K Wing, Montvert Vista, MG Road, New Delhi						', 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `No` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `speed` int(11) NOT NULL DEFAULT '0',
  `accuracy` int(11) NOT NULL DEFAULT '0',
  `satisfaction` int(11) NOT NULL DEFAULT '0',
  `expectations` int(11) NOT NULL DEFAULT '0',
  `source` varchar(255) NOT NULL,
  `nearcity` varchar(255) NOT NULL,
  `Suggestion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`No`, `user_id`, `speed`, `accuracy`, `satisfaction`, `expectations`, `source`, `nearcity`, `Suggestion`) VALUES
(6, 48, 4, 4, 4, 4, 'Search Engine', 'Pune', ''),
(7, 58, 4, 4, 4, 4, 'Other', 'Mumbai', 'Good work!!');

-- --------------------------------------------------------

--
-- Table structure for table `pickup`
--

CREATE TABLE `pickup` (
  `courier_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phn` varchar(10) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `city1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pickup`
--

INSERT INTO `pickup` (`courier_id`, `name`, `phn`, `address1`, `city1`) VALUES
(1000, 'Shivani Karwa', '7507639527', '	Chandrabhaga enclave,Katraj					', 'Pune'),
(1001, 'Aarohi Sumant', '9730019910', '	Bandra					', 'Mumbai'),
(1002, 'Sonia Sarode', '8149516948', '	Camp					', 'Banglore'),
(1003, 'Surbhi Agrawal', '9561188407', '		Shanivar Peth				', 'Delhi'),
(1004, 'Krishna Sharma', '9028299973', '		sector 21				', 'Pune'),
(1005, 'Anushka Sirwani', '9922338989', '	Kumar Padmaja					', 'Mumbai'),
(1006, 'Kanika Nandkarni', '7588288081', '		Camp				', 'Banglore'),
(1007, 'Shivani Karwa', '7507639527', '		sector 22				', 'Delhi'),
(1008, 'Aarohi Sumant', '7507639527', '	katraj					', 'Pune'),
(1009, 'Nikita Jare', '8321546789', '		Abcd				', 'Pune'),
(1010, 'Shivani Karwa', '7744112235', 'H/201, Kumar Padmaja, Kothrud, Pune						', 'Pune');

-- --------------------------------------------------------

--
-- Table structure for table `pincodes`
--

CREATE TABLE `pincodes` (
  `No` int(11) NOT NULL,
  `City` varchar(11) NOT NULL,
  `Pincode` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pincodes`
--

INSERT INTO `pincodes` (`No`, `City`, `Pincode`) VALUES
(1, 'Pune', '411'),
(2, 'Mumbai', '400'),
(3, 'Banglore', '560'),
(4, 'Delhi', '110'),
(5, 'Kolkata', '700');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_uid` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES
(1, 'online', 'ontime', 'onlineontime@gmail.com', 'admin', 'admin'),
(48, 'shivani', 'karwa', 'karwa.shivani@gmail.com', 'shivani', '8b5cc3625eef9851a00074575d612f47'),
(49, 'Nikita', 'Jare', 'nikitajare@gmail.com', 'nikki', 'e8f8424624d92d85db09dfc269cd3ced'),
(51, 'Komal', 'Bharadiya', 'komalbharadiya@gmail.com', 'komal', 'c20af4e95f2e7cc0ff2b1b9927d0d8ae'),
(52, 'Sonia', 'Sarode', 'sarodesonia@gmail.com', 'sonia', 'd31cb1e2b7902e8e9b4d1793e94c38a0'),
(54, 'Kajal', 'Toshniwal', 'kajaltosniwal@gmail.com', 'kajal', '7faafcbcc6456af72597bc2f3a9306b4'),
(55, 'Surbhi', 'Agrawal', 'agrawalsurbhi@orkut.com', 'surbhi', '326e02a4db651f0d2101044e597d5092'),
(56, 'Gautami', 'Shinde', 'gautami@gmail.com', 'gautami', '5fc1485bb6457816562ee129620f45e0'),
(57, 'Krishna', 'Sharma', 'sharmakrishna@gmail.com', 'krishna', '243bd1ce0387f18005abfc43b001646a'),
(58, 'Anushka', 'Sirwani', 'sirwanianushka@gmail.com', 'anushka', 'b714801b96f39a72bb28e8e70946c3a3'),
(60, 'Aarohi', 'Sumant', 'aarohi@gmail.com', 'aarohi', '8900d74e02b218a7ca7c37f8583d98f2'),
(61, 'Kanika', 'nandkarni', 'kanika@gmail.com', 'kanika', '96f33af4311f72a1f16ba00dc2a5441d'),
(62, 'Mahima', 'Gaggad', 'mahima@gmail.com', 'mahima', '61c1c234b7c819e9e37a33f3a8b21713'),
(63, 'Sakshi', 'Kadu', 'kadusakshi@gmail.com', 'sakshi123', 'b73a3203047396075ccac51f92358f6e'),
(64, 'Mansi', 'Kabade', 'mansi@gmail.com', 'mansi', '8e183f28f7ac8aaebf5650f728f79a37'),
(65, 'Yash', 'Karwa', 'yashkarwa@gmail.com', 'yash', 'c296539f3286a899d8b3f6632fd62274'),
(66, 'Shubham ', 'Shah', 'shubhamshah@gmail.com', 'shubham', '3b6beb51e76816e632a40d440eab0097'),
(67, 'Atharva', 'Parwatkar', 'atharva@gmail.com', 'atharva', '33f4d8d0f9cdd179799fb33d3bd1e1ee'),
(68, 'Pranav', 'Sao', 'pranav@gmail.com', 'pranav', '9e1135ff4157f14358c7c94c79aad47d'),
(69, 'Namrata', 'Bodkhe', 'namrata@gmail.com', 'namrata', '5bda88ef3739b6d721de7cad617640a6'),
(70, 'Sarah', 'Naik', 'sarah@gmail.com', 'sarah', '9e9d7a08e048e9d604b79460b54969c3'),
(71, 'Gitalee', 'Jadhav', 'geetai@gmail.com', 'geetali', '376233f6b7775dd83387b5ff0d666f93'),
(72, 'mayur', 'karwa', 'mayurkarwa@gmail.com', 'mayur', 'c4f4b2eb6d63dd4dd8afed001c61c956'),
(75, 'Jay', 'Thanvi', 'jay@gmail.com', 'jay', 'baba327d241746ee0829e7e88117d4d5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing_info`
--
ALTER TABLE `billing_info`
  ADD PRIMARY KEY (`billing_id`),
  ADD KEY `courier_id` (`courier_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`courier_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `distance`
--
ALTER TABLE `distance`
  ADD PRIMARY KEY (`PickUp city`,`Destination City`);

--
-- Indexes for table `drop_add`
--
ALTER TABLE `drop_add`
  ADD KEY `courier_id` (`courier_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `pickup`
--
ALTER TABLE `pickup`
  ADD KEY `courier_id` (`courier_id`);

--
-- Indexes for table `pincodes`
--
ALTER TABLE `pincodes`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing_info`
--
ALTER TABLE `billing_info`
  MODIFY `billing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100011;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `courier`
--
ALTER TABLE `courier`
  MODIFY `courier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pincodes`
--
ALTER TABLE `pincodes`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `billing_info`
--
ALTER TABLE `billing_info`
  ADD CONSTRAINT `billing_info_ibfk_1` FOREIGN KEY (`courier_id`) REFERENCES `courier` (`courier_id`),
  ADD CONSTRAINT `billing_info_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `courier`
--
ALTER TABLE `courier`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `drop_add`
--
ALTER TABLE `drop_add`
  ADD CONSTRAINT `drop_add_ibfk_1` FOREIGN KEY (`courier_id`) REFERENCES `courier` (`courier_id`);

--
-- Constraints for table `pickup`
--
ALTER TABLE `pickup`
  ADD CONSTRAINT `courier_id` FOREIGN KEY (`courier_id`) REFERENCES `courier` (`courier_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
