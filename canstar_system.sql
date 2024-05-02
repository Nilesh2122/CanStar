-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 08:37 PM
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
(79, 53, 'plug', 'assets/uploads/Screenshot 2024-04-09 222113.png', 1, '2024-04-30 18:22:54', '2024-04-30 16:22:54'),
(80, 53, 'controller', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 2, '2024-04-30 18:22:54', '2024-04-30 16:22:54'),
(81, 54, 'plug', 'assets/uploads/Screenshot 2024-03-14 223548.png', 1, '2024-05-02 18:43:40', '2024-05-02 16:43:40'),
(82, 54, 'controller', 'assets/uploads/Screenshot 2024-04-01 215925.png', 1, '2024-05-02 18:43:40', '2024-05-02 16:43:40'),
(83, 55, 'plug', 'assets/uploads/Screenshot 2024-03-14 223548.png', 1, '2024-05-02 19:25:57', '2024-05-02 17:25:57'),
(84, 55, 'controller', 'no controller access', 2, '2024-05-02 19:25:57', '2024-05-02 17:25:57');

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
  `total` int(11) NOT NULL,
  `no_peaks` int(11) NOT NULL,
  `no_jumper` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `annotation_image_tbl`
--

INSERT INTO `annotation_image_tbl` (`annotation_image_id`, `quote_id`, `image_url`, `type`, `identify_image_name`, `total`, `no_peaks`, `no_jumper`, `created_at`, `modified_at`) VALUES
(18, 53, 'assets/uploads/66311ade98f90drawnLines_0.png', 'drawnLines', 'front', 30, 1, 1, '2024-04-30 18:22:54', '2024-04-30 16:22:54'),
(19, 53, 'assets/uploads/66311ade99113drawnLines_1.png', 'drawnLines', 'back', 20, 2, 2, '2024-04-30 18:22:54', '2024-04-30 16:22:54'),
(20, 53, 'assets/uploads/66311ade99266fullyEdited_0.png', 'fullyEdited', 'front', 30, 1, 1, '2024-04-30 18:22:54', '2024-04-30 16:22:54'),
(21, 53, 'assets/uploads/66311ade993b3fullyEdited_1.png', 'fullyEdited', 'back', 20, 2, 2, '2024-04-30 18:22:54', '2024-04-30 16:22:54'),
(22, 54, 'assets/uploads/6633c2bc35217drawnLines_0.png', 'drawnLines', 'front', 10, 10, 20, '2024-05-02 18:43:40', '2024-05-02 16:43:40'),
(23, 54, 'assets/uploads/6633c2bc35386drawnLines_1.png', 'drawnLines', 'back', 20, 30, 40, '2024-05-02 18:43:40', '2024-05-02 16:43:40'),
(24, 54, 'assets/uploads/6633c2bc354e9fullyEdited_0.png', 'fullyEdited', 'front', 10, 10, 20, '2024-05-02 18:43:40', '2024-05-02 16:43:40'),
(25, 54, 'assets/uploads/6633c2bc35608fullyEdited_1.png', 'fullyEdited', 'back', 20, 30, 40, '2024-05-02 18:43:40', '2024-05-02 16:43:40'),
(26, 55, 'assets/uploads/6633cca516808drawnLines_0.png', 'drawnLines', 'Front', 60, 10, 20, '2024-05-02 19:25:57', '2024-05-02 17:25:57'),
(27, 55, 'assets/uploads/6633cca5169a8drawnLines_1.png', 'drawnLines', 'back', 30, 40, 50, '2024-05-02 19:25:57', '2024-05-02 17:25:57'),
(28, 55, 'assets/uploads/6633cca516af9fullyEdited_0.png', 'fullyEdited', 'Front', 60, 10, 20, '2024-05-02 19:25:57', '2024-05-02 17:25:57'),
(29, 55, 'assets/uploads/6633cca516c5efullyEdited_1.png', 'fullyEdited', 'back', 30, 40, 50, '2024-05-02 19:25:57', '2024-05-02 17:25:57');

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
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `post_code` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quote_tbl`
--

INSERT INTO `quote_tbl` (`quote_id`, `user_id`, `fname`, `lname`, `phone`, `address`, `city`, `state`, `post_code`, `color`, `status`, `created_at`, `modified_at`) VALUES
(53, 2, 'Nilesh', 'Gohil', '8140364455', 'silver status', 'surat', 'gujarat', '395420', 'Red', 0, '2024-04-30 18:22:54', '2024-04-30 16:22:54'),
(54, 2, 'mayur', 'sutariya', '9998872253', 'surat', 'surat', 'gujarat', '395006', 'Red', 0, '2024-05-02 18:43:40', '2024-05-02 16:43:40'),
(55, 2, 'harsh', 'patel', '9998872253', 'canada', 'canada', 'canada', '395006', 'Blue', 0, '2024-05-02 19:25:57', '2024-05-02 17:25:57');

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
  MODIFY `accessimg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `annotation_image_tbl`
--
ALTER TABLE `annotation_image_tbl`
  MODIFY `annotation_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `quote_tbl`
--
ALTER TABLE `quote_tbl`
  MODIFY `quote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
