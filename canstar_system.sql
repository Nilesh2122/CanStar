-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2024 at 07:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canstar_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_image_tbl`
--

CREATE TABLE `access_image_tbl` (
  `accessimg_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `access_type` varchar(11) NOT NULL,
  `data` text NOT NULL,
  `data_type` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `access_image_tbl`
--

INSERT INTO `access_image_tbl` (`accessimg_id`, `quote_id`, `access_type`, `data`, `data_type`, `created_at`, `modified_at`) VALUES
(3, 2, 'plug', '', 2, '2024-05-25 12:30:49', '2024-05-25 10:30:49'),
(4, 2, 'controller', '', 2, '2024-05-25 12:30:49', '2024-05-25 10:30:49'),
(9, 1, 'plug', 'No controller access', 2, '2024-05-27 19:18:42', '2024-05-27 17:18:42'),
(10, 1, 'controller', 'No controller access', 2, '2024-05-27 19:18:42', '2024-05-27 17:18:42'),
(11, 3, 'plug', 'no', 2, '2024-05-27 19:23:44', '2024-05-27 17:23:44'),
(12, 3, 'controller', 'no', 2, '2024-05-27 19:23:44', '2024-05-27 17:23:44'),
(13, 4, 'plug', 'no', 2, '2024-05-27 19:23:50', '2024-05-27 17:23:50'),
(14, 4, 'controller', 'no', 2, '2024-05-27 19:23:50', '2024-05-27 17:23:50'),
(23, 5, 'plug', 'no', 2, '2024-05-27 19:37:50', '2024-05-27 17:37:50'),
(24, 5, 'controller', 'no', 2, '2024-05-27 19:37:50', '2024-05-27 17:37:50');

-- --------------------------------------------------------

--
-- Table structure for table `annotation_image_tbl`
--

CREATE TABLE `annotation_image_tbl` (
  `annotation_image_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `image_url` text NOT NULL,
  `type` text NOT NULL,
  `identify_image_name` text NOT NULL,
  `color` text NOT NULL,
  `total_numerical_box` int(11) NOT NULL,
  `unit_price` text NOT NULL,
  `total_amount` text NOT NULL,
  `no_peaks` int(11) NOT NULL,
  `no_jumper` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `annotation_image_tbl`
--

INSERT INTO `annotation_image_tbl` (`annotation_image_id`, `quote_id`, `image_url`, `type`, `identify_image_name`, `color`, `total_numerical_box`, `unit_price`, `total_amount`, `no_peaks`, `no_jumper`, `created_at`, `modified_at`) VALUES
(22, 5, 'assets/uploads/6654c4ee25d3edrawnLines_0.png', 'drawnLines', 'Front', 'Red', 10, '1', '10.00', 1, 1, '2024-05-27 19:37:50', '2024-05-27 17:37:50'),
(23, 5, 'assets/uploads/6654c4ee25f6cdrawnLines_1.png', 'drawnLines', 'Asdas', 'Blue', 1, '1', '1.00', 1, 1, '2024-05-27 19:37:50', '2024-05-27 17:37:50'),
(24, 5, 'assets/uploads/6654c4ee26178fullyEdited_0.png', 'fullyEdited', 'Front', 'Red', 10, '1', '10.00', 1, 1, '2024-05-27 19:37:50', '2024-05-27 17:37:50'),
(25, 5, 'assets/uploads/6654c4ee2632dfullyEdited_1.png', 'fullyEdited', 'Asdas', 'Blue', 1, '1', '1.00', 1, 1, '2024-05-27 19:37:50', '2024-05-27 17:37:50');

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `product_id` int(11) NOT NULL,
  `product_title` text NOT NULL,
  `product_description` text NOT NULL,
  `volt` text NOT NULL,
  `price` text NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`product_id`, `product_title`, `product_description`, `volt`, `price`, `type`, `created_at`, `modified_at`) VALUES
(1, '350W', 'Canstar two zone AI controller box system with 12V outdoor rated power supply unit for thefront and back', '350V', '250', 1, '2024-05-06 18:33:23', '2024-05-06 16:34:08'),
(2, '450W', 'Canstar two zone AI controller box system with 15V outdoor rated power supply unit for thefront and back', '15V', '300', 1, '2024-05-06 18:33:23', '2024-05-06 16:34:08'),
(3, '600W', 'Canstar two zone AI controller box system with 20V outdoor rated power supply unit for thefront and back', '20V', '450', 1, '2024-05-06 18:33:23', '2024-05-06 16:34:08');

-- --------------------------------------------------------

--
-- Table structure for table `quote_tbl`
--

CREATE TABLE `quote_tbl` (
  `quote_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `post_code` varchar(255) NOT NULL,
  `product_data` text NOT NULL,
  `custom_product_data` text NOT NULL,
  `total_controller_price` text NOT NULL,
  `total_feet_price` text NOT NULL,
  `discount_percentage` text NOT NULL,
  `main_total` text NOT NULL,
  `notes` text NOT NULL,
  `customer_visible` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '1-created,2-pending_approval,3-approved,4-confirm,5-cancelled',
  `created_at` datetime NOT NULL,
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quote_tbl`
--

INSERT INTO `quote_tbl` (`quote_id`, `user_id`, `fname`, `lname`, `phone`, `email`, `address`, `city`, `state`, `country`, `post_code`, `product_data`, `custom_product_data`, `total_controller_price`, `total_feet_price`, `discount_percentage`, `main_total`, `notes`, `customer_visible`, `status`, `created_at`, `modified_at`) VALUES
(5, 2, 'Gopi ', 'Gohil', '8140364455', 'gopi@gmail.com', 'surat', 'surat', 'guajrat', 'Canada', '392006', '[{\"product\":\"350W\",\"qty\":\"1\",\"amount\":\"250.00\"},{\"product\":\"450W\",\"qty\":\"01\",\"amount\":\"300.00\"},{\"product\":\"600W\",\"qty\":\"1\",\"amount\":\"450.00\"}]', '[{\"product\":\"product\",\"qty\":\"1\",\"unit_price\":\"1\",\"amount\":\"1.00\"}]', '1001.00', '11.00', '0', '1012.00', 'no', 'no', 2, '2024-05-27 19:37:50', '2024-05-27 17:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL COMMENT '1:admin,2:Installer,3:Operations,4:Sales ',
  `active_state` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `fname`, `lname`, `email`, `password`, `role`, `active_state`, `created_at`, `modified_at`) VALUES
(1, 'Nilesh', 'Gohil', 'admin@gmail.com', 'MTIzNDU=', 1, 1, '2024-03-21 18:05:47', '2024-03-21 17:06:17'),
(2, 'Colleen', 'Paul', 'sales@gmail.com', 'MTIzNDU=', 4, 1, '2024-04-01 19:44:42', '2024-04-01 17:44:42'),
(19, 'harsh', 'patel', 'harsh@gmail.com', 'MTIz', 4, 1, '2024-05-02 18:46:11', '2024-05-02 16:46:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_image_tbl`
--
ALTER TABLE `access_image_tbl`
  ADD PRIMARY KEY (`accessimg_id`);

--
-- Indexes for table `annotation_image_tbl`
--
ALTER TABLE `annotation_image_tbl`
  ADD PRIMARY KEY (`annotation_image_id`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `quote_tbl`
--
ALTER TABLE `quote_tbl`
  ADD PRIMARY KEY (`quote_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_image_tbl`
--
ALTER TABLE `access_image_tbl`
  MODIFY `accessimg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `annotation_image_tbl`
--
ALTER TABLE `annotation_image_tbl`
  MODIFY `annotation_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quote_tbl`
--
ALTER TABLE `quote_tbl`
  MODIFY `quote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
