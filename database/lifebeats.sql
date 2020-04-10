-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 03:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifebeats`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `bdid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `btype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`bdid`, `bid`, `btype`) VALUES
(1, 1, 'A+'),
(2, 1, 'B+'),
(3, 1, 'O-'),
(4, 1, 'AB+'),
(5, 2, 'B-'),
(6, 2, 'O+'),
(7, 3, 'O+'),
(8, 4, 'O+');

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank`
--

CREATE TABLE `bloodbank` (
  `bid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `loc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodbank`
--

INSERT INTO `bloodbank` (`bid`, `name`, `address`, `phone`, `loc`) VALUES
(1, 'Jalaram Blood Bank', 'K.G.P Childrens Hospital Jalaram Marg, Pratiksha Society, Karelibagh, Vadodara, Gujarat 390018', 2652464130, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118121.96064901237!2d73.12346604388036!3d22.304064736731096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc8acd8cf46b9%3A0x8b33a2522c8dd25e!2sJalaram%20Blood%20Bank!5e0!3m2!1sen!2sin!4v158629'),
(2, 'Indu Blood Bank', 'Vinraj Plaza, Kothi Rd, opp. Government Press, Vadodara, Gujarat 390001', 2652437676, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118121.9860735258!2d73.12346592955758!3d22.304034673494158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc85dfd83a4df%3A0xfe526009cfb2e01b!2sIndu%20Blood%20Bank!5e0!3m2!1sen!2sin!4v1586298000'),
(3, 'RedCross Blood Bank', '21, Sainath Rd, Harihar Society, Sarvodaya Society, Nagarkuva, Petlad, Gujarat 388450', 18007332767, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117976.37908239546!2d72.73379055820311!3d22.475582100000025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e549d503005a7%3A0xebd1a33c3b14261!2sRedCross%20Blood%20Bank!5e0!3m2!1sen!2sin!4v158629'),
(4, 'Blood Bank Anand', '101,Lasvegas Appartment, Nana Bazaar, near Gayatri Dinning Hall, Vallabh Vidyanagar, Anand, Gujarat 388120', 7874897878, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117976.43061216395!2d72.73379032983928!3d22.475521609702355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e4f0d49468977%3A0x64809475874cd22a!2sBLOOD%20BANK%20ANAND!5e0!3m2!1sen!2sin!4v15862981'),
(5, 'Indu Voluntary Blood Bank', 'Gems Plaza, 3rd Floor, Railway Station Rd, near D. N. High School, Anand, Gujarat 388001', 9824436524, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117976.456376958!2d72.73379021565731!3d22.475491364601496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e4e9c54e2ddb3%3A0xb326ebdb9705a6eb!2sIndu%20Voluntary%20Blood%20Bank%2C%20Anand!5e0!3m2!');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `don_id` int(10) NOT NULL,
  `don_contact` bigint(20) NOT NULL,
  `don_date` varchar(15) NOT NULL,
  `don_age` int(3) NOT NULL,
  `don_bloodgrp` varchar(5) NOT NULL,
  `don_lastdate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `did` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `bdate` date NOT NULL,
  `age` int(2) NOT NULL,
  `bgrp` varchar(255) NOT NULL,
  `ldate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`did`, `name`, `phone`, `bdate`, `age`, `bgrp`, `ldate`) VALUES
(1, 'jk', 9874563210, '2020-04-01', 20, 'B+', '2020-04-01'),
(2, 'jk', 99765433210, '2020-04-30', 23, 'AB-', '2020-03-29'),
(3, 'umang', 9874563210, '2020-04-01', 20, 'O+', '2019-05-01'),
(4, 'jk', 3652147890, '2020-04-02', 23, 'AB+', '2020-04-14'),
(5, 'pb', 7412036970, '2020-04-01', 24, 'O+', '2020-03-29'),
(6, 'Jaykishan', 7452136890, '2020-04-13', 26, 'B+', '2019-09-10'),
(7, 'Jaykishan Rajpara', 9898989898, '2020-03-29', 20, 'B+', '2020-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `req`
--

CREATE TABLE `req` (
  `rid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `bdate` date NOT NULL,
  `age` int(3) NOT NULL,
  `bgrp` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `req`
--

INSERT INTO `req` (`rid`, `name`, `phone`, `bdate`, `age`, `bgrp`, `file`) VALUES
(5, 'jk', 7569841230, '2020-03-31', 43, 'A+', 'FORM1.jpg'),
(6, 'jk', 9874560321, '2020-03-29', 20, 'B+', 'IMG_54651.jpg'),
(7, 'jk', 1478520369, '2020-04-02', 19, 'O+', 'IMG_5468.jpg'),
(8, 'jk', 1425360987, '2020-04-05', 34, 'O+', 'vlcsnap-2018-09-16-17h38m44s891.png'),
(9, 'jk', 3215469807, '2020-04-11', 30, 'O+', 'vlcsnap-2018-10-28-02h38m55s626.png'),
(10, 'jk', 6541239807, '2020-04-23', 19, 'O+', 'vlcsnap-2018-10-28-02h39m49s524.png'),
(11, 'jk', 6541239807, '2020-04-23', 19, 'O+', 'vlcsnap-2018-10-28-02h39m49s524.png'),
(12, 'jk', 6541239807, '2020-04-23', 19, 'O+', 'vlcsnap-2018-10-28-02h39m49s524.png'),
(13, 'jk', 3256987410, '2020-04-20', 22, 'AB+', 'Screenshot (1).png'),
(14, 'pb', 7412563980, '2020-03-31', 18, 'O+', 'IMG_5465.jpg'),
(15, 'pb', 7412563980, '2020-03-31', 18, 'O+', 'IMG_5465.jpg'),
(16, 'Jaykishan', 9874563201, '2020-03-31', 22, 'B+', 'Screenshot (1).png'),
(17, 'Jaykishan', 9874563201, '2020-03-31', 22, 'B+', 'Screenshot (1).png'),
(18, 'jd', 9874563210, '2020-04-09', 23, 'O+', 'Screenshot (11).png'),
(19, 'Jaykishan Rajpara', 9898989898, '2020-03-29', 20, 'O+', 'Screenshot (45).png'),
(20, 'jk', 0, '0000-00-00', 0, 'A+', ''),
(21, 'jk', 0, '0000-00-00', 0, 'O+', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `password`, `phone`) VALUES
(1, 'jk', 'jk@gmail.com', '202cb962ac59075b964b07152d234b70', 2147483647),
(2, 'abhi', 'abhi@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02', 2147483647),
(3, 'umlo', 'umlo@gmail.com', '68053af2923e00204c3ca7c6a3150cf7', 2147483647),
(4, 'jd', 'jd@gmail.com', '140f6969d5213fd0ece03148e62e461e', 2147483647),
(5, 'pb', 'pb10@gmail.com', '14bfa6bb14875e45bba028a21ed38046', 2147483647),
(6, 'Jaykishan', 'jaykishan@gmail.com', '8b4cf0258846b23e0a8272bee22c38dd', 2147483647),
(7, 'Jaykishan Rajpara', 'rajparajaykishan@gmail.com', '8ca6382218ce04a069c091608163ae17', 2147483647),
(8, 'abc', 'abc@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`bdid`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`don_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `req`
--
ALTER TABLE `req`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `bdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `don_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `req`
--
ALTER TABLE `req`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
