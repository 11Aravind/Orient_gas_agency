-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2021 at 02:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gas_agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `name`, `password`) VALUES
(1, 'Aravind', 'ara');

-- --------------------------------------------------------

--
-- Table structure for table `business_connection`
--

CREATE TABLE `business_connection` (
  `business_id` int(30) NOT NULL,
  `customer_id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `landline` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `stovestatus` varchar(50) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `shop_name` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `post_office` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `proof_category` varchar(500) NOT NULL,
  `upload_proof` varchar(500) NOT NULL,
  `upload_photo` varchar(500) NOT NULL,
  `upload_adhar` varchar(500) NOT NULL,
  `cylinder_count` varchar(100) NOT NULL,
  `transaction_no` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `change_connection`
--

CREATE TABLE `change_connection` (
  `temp_connection_id` int(50) NOT NULL,
  `customer_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `deth_certificate` varchar(300) NOT NULL,
  `upload_photo` varchar(300) NOT NULL,
  `upload_adhar` varchar(300) NOT NULL,
  `uploadration_card` varchar(300) NOT NULL,
  `transaction_no` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `connection_details`
--

CREATE TABLE `connection_details` (
  `Connection_id` int(50) NOT NULL,
  `customer_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(30) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `landline` varchar(17) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `stove_status` varchar(50) NOT NULL,
  `ration_card_status` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `house_name` varchar(50) NOT NULL,
  `house_no` varchar(50) NOT NULL,
  `house_complx` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `streetname` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `post_office` varchar(50) NOT NULL,
  `floar_no` varchar(50) NOT NULL,
  `upload_phto` varchar(300) NOT NULL,
  `upload_adhar` varchar(300) NOT NULL,
  `uploadration_card` varchar(300) NOT NULL,
  `transaction_no` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_complaint`
--

CREATE TABLE `customer_complaint` (
  `complaint_id` int(30) NOT NULL,
  `customer_id` int(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `proof` varchar(255) NOT NULL,
  `complaint` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `customer_id` int(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone_number` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gas_booking`
--

CREATE TABLE `gas_booking` (
  `booking_id` int(30) NOT NULL,
  `customer_id` int(50) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `no_of_cylinder` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `transaction_no` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `second_cylinderdet`
--

CREATE TABLE `second_cylinderdet` (
  `Second_cylinder_id` int(30) NOT NULL,
  `customer_id` int(50) NOT NULL,
  `voucher` varchar(200) NOT NULL,
  `transaction_no` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

CREATE TABLE `staff_details` (
  `staff_id` int(30) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `description` varchar(70) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_details`
--

INSERT INTO `staff_details` (`staff_id`, `staff_name`, `position`, `description`, `photo`) VALUES
(60, 'Siva', 'Chair Man', 'main staff', 'images/imagedq.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `temp_address`
--

CREATE TABLE `temp_address` (
  `temp_address_id` int(50) NOT NULL,
  `customer_id` int(50) NOT NULL,
  `house_name` varchar(50) NOT NULL,
  `house_no` varchar(50) NOT NULL,
  `house_complx` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `streetname` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `post_office` varchar(50) NOT NULL,
  `floar_no` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `proof_cat` varchar(50) NOT NULL,
  `proof` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `today_info`
--

CREATE TABLE `today_info` (
  `info_id` int(30) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `kg` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `today_info`
--

INSERT INTO `today_info` (`info_id`, `purpose`, `kg`, `price`, `status`) VALUES
(1, 'Home', '40', '800', 'open'),
(2, 'Busines', '45', '1040', 'open');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `business_connection`
--
ALTER TABLE `business_connection`
  ADD PRIMARY KEY (`business_id`);

--
-- Indexes for table `change_connection`
--
ALTER TABLE `change_connection`
  ADD PRIMARY KEY (`temp_connection_id`);

--
-- Indexes for table `connection_details`
--
ALTER TABLE `connection_details`
  ADD PRIMARY KEY (`Connection_id`);

--
-- Indexes for table `customer_complaint`
--
ALTER TABLE `customer_complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `gas_booking`
--
ALTER TABLE `gas_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `second_cylinderdet`
--
ALTER TABLE `second_cylinderdet`
  ADD PRIMARY KEY (`Second_cylinder_id`);

--
-- Indexes for table `staff_details`
--
ALTER TABLE `staff_details`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `temp_address`
--
ALTER TABLE `temp_address`
  ADD PRIMARY KEY (`temp_address_id`);

--
-- Indexes for table `today_info`
--
ALTER TABLE `today_info`
  ADD PRIMARY KEY (`info_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `business_connection`
--
ALTER TABLE `business_connection`
  MODIFY `business_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `change_connection`
--
ALTER TABLE `change_connection`
  MODIFY `temp_connection_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `connection_details`
--
ALTER TABLE `connection_details`
  MODIFY `Connection_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `customer_complaint`
--
ALTER TABLE `customer_complaint`
  MODIFY `complaint_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `customer_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `gas_booking`
--
ALTER TABLE `gas_booking`
  MODIFY `booking_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `second_cylinderdet`
--
ALTER TABLE `second_cylinderdet`
  MODIFY `Second_cylinder_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `staff_details`
--
ALTER TABLE `staff_details`
  MODIFY `staff_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `temp_address`
--
ALTER TABLE `temp_address`
  MODIFY `temp_address_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `today_info`
--
ALTER TABLE `today_info`
  MODIFY `info_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
