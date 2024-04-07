-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2024 at 08:26 PM
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
  `created_at` datetime NOT NULL,
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quote_tbl`
--

INSERT INTO `quote_tbl` (`quote_id`, `user_id`, `fname`, `lname`, `phone`, `address`, `city`, `state`, `post_code`, `color`, `created_at`, `modified_at`) VALUES
(1, 1, 'Quyn', 'Woods', '+1 (777) 807-4646', 'Impedit eaque quisq', 'Consequatur earum p', 'Dignissimos excepteu', 'Facere aut quis exer', '#bd130d', '2024-04-07 19:21:37', '2024-04-07 17:21:37'),
(2, 1, 'Gavin', 'Price', '+1 (184) 153-9641', 'Ea mollitia deleniti', 'Odit reiciendis reru', 'Debitis in ratione e', 'Rerum consectetur q', '#962521', '2024-04-07 19:22:39', '2024-04-07 17:22:39'),
(3, 2, 'Dolan', 'Miranda', '+1 (355) 781-2806', 'Modi labore aut in n', 'Sint consequatur pe', 'Ut veniam natus sun', 'Eum Nam porro aut id', '#6c61ff', '2024-04-07 20:10:11', '2024-04-07 18:10:11');

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
(2, 'Colleen', 'Paul', 'sales@gmail.com', 'MTIzNDU=', 4, 1, '2024-04-01 19:44:42', '2024-04-01 17:44:42');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `quote_tbl`
--
ALTER TABLE `quote_tbl`
  MODIFY `quote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
