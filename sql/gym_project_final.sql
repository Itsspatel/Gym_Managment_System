-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 06:39 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym_project_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Email` varchar(50) NOT NULL,
  `Pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Email`, `Pass`) VALUES
('admin123@gmail.com', 'admin123'),
('admin123@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `boking_status` varchar(50) NOT NULL DEFAULT 'Pandding',
  `alot_trainer` int(11) NOT NULL DEFAULT 0,
  `alot_time` time NOT NULL,
  `package_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `user_id`, `payment_status`, `boking_status`, `alot_trainer`, `alot_time`, `package_id`, `created_at`, `updated_at`) VALUES
(16, 13, 'Confirm', 'CONFIRM', 6, '17:00:00', 1, '2023-11-30 10:35:20', '2023-11-30 10:35:43'),
(17, 14, 'Confirm', 'CONFIRM', 6, '21:43:00', 4, '2023-11-30 15:10:50', '2023-11-30 15:11:09'),
(18, 14, 'Confirm', 'CONFIRM', 5, '05:00:00', 3, '2023-12-16 06:34:39', '2023-12-21 05:10:45'),
(19, 16, 'Confirm', 'CONFIRM', 7, '05:00:00', 2, '2023-12-23 06:17:10', '2023-12-23 06:17:52'),
(34, 17, 'Confirm', 'CONFIRM', 7, '05:00:00', 4, '2023-12-23 07:40:55', '2023-12-23 07:41:22'),
(36, 18, 'Confirm', 'CONFIRM', 7, '05:00:00', 3, '2023-12-23 08:19:27', '2023-12-23 08:20:36'),
(37, 19, 'Confirm', 'CONFIRM', 6, '05:00:00', 2, '2023-12-27 08:02:03', '2023-12-27 08:03:36'),
(38, 19, 'Confirm', 'CONFIRM', 6, '10:00:00', 1, '2023-12-27 08:03:04', '2023-12-27 08:03:53'),
(39, 14, 'Confirm', 'Pandding', 0, '00:00:00', 2, '2023-12-27 15:16:36', '2023-12-27 15:16:36'),
(40, 14, 'Confirm', 'Pandding', 0, '00:00:00', 3, '2023-12-27 15:20:07', '2023-12-27 15:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) DEFAULT NULL,
  `user_id` int(10) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `pacakge_details` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `package_name`, `price`, `pacakge_details`, `p_image`, `status`, `created_at`, `update_at`) VALUES
(1, 'starter', 800, 'Cardio machines are a great place to start. Try taking a walk, or light jog, on the treadmill, or give the bike a spin. ', '1stpackage.jpg', 0, '2023-11-24 09:41:54', '2023-12-23 06:07:15'),
(2, 'weight gain', 2000, ' going to the gym will help you gain weight if it is combined with an increase in calorie intake.', 'body_building.jpg', 0, '2023-11-25 09:05:20', '2023-12-23 06:08:02'),
(3, 'weight loss', 3000, 'Healthful low-carbohydrate diets focus on consuming whole carbohydrates, good fats, fiber, and lean proteins. Instead of limiting all carbohydrates for a short ...', 'loss_fat.jpg', 0, '2023-11-25 09:08:03', '2023-12-23 06:10:14'),
(4, 'Body Building', 3000, 'Focus on proper form ... “When performing an exercise, prioritize proper form and technique over lifting heavy weights. This not only reduces the risk of injury ...', 'body_building.jpg', 0, '2023-11-30 15:08:10', '2023-12-28 03:47:31');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `addresss` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'trainer',
  `t_image` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `About` varchar(255) NOT NULL,
  `password` varchar(12) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`id`, `name`, `gmail`, `phone`, `experience`, `addresss`, `role`, `t_image`, `status`, `About`, `password`, `created_at`, `updated_at`) VALUES
(6, '            raju', 'raju@gmail.com', 2147483647, '5 years', 'panjab', 'trainer', 'raju.jpg', 0, 'This skill allows trainers to easily deal with a variety of obstacles or unpleasant circumstances during training sessions. Additionally, problem-solving skills help trainers easily identify individual and common skills, knowledge gaps, and know how to br', '963741', '2023-11-29 10:15:02', '2023-12-23 06:01:55'),
(7, '   sahil', 'sahil@gmail.com', 2147483647, '4 years', 'ranjhi', 'trainer', 'body_building.jpg', 0, 'Our Train The Trainer courses are designed to equip you with the skills you need to become a certified, professional trainer. Each course focuses on a different skill set for your portfolio, including training design, delivery, and evaluation.', '963214', '2023-11-29 10:15:50', '2023-12-28 03:44:22'),
(10, '  Sourabh Patel', 'Sourabh@gmail.com', 2147483647, '5 years', 'Indra aawas colony manegaon', 'trainer', 'workout.jpg', 0, 'This skill allows trainers to easily deal with a variety of obstacles or unpleasant circumstances during training sessions. ', '123sourabh', '2023-12-27 15:22:22', '2023-12-28 03:57:54');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `gmail` varchar(256) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `address` varchar(256) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user',
  `password` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `gmail`, `contact`, `address`, `role`, `password`, `image`, `status`, `create_at`, `update_at`) VALUES
(13, ' Sahil patel', 'sahil123@gmail.com', '7410258963', 'dahmonaka', 'user', '123456', 'DSC_7287.JPG', 0, '2023-11-30 10:11:01', '2023-11-30 10:13:38'),
(14, 'sandeep', 'sandy@gmail.com', '7410258963', 'sivil line', 'user', '741230', 'DSC_7280.JPG', 0, '2023-11-30 15:09:22', '2023-12-23 05:50:21'),
(15, 'sandeep', 'sandy@gmail.com', '7410258963', 'sivil line', 'user', '741230', '', 0, '2023-12-22 16:12:59', '2023-12-22 16:12:59'),
(16, 'naina vishwakarma', 'naina@gmail.com', '7771841097', 'jabalpur', 'user', 'naina123', 'DSC_6979.JPG', 0, '2023-12-23 06:16:32', '2023-12-23 06:16:32'),
(17, 'aneesh ', 'aneesh@gmail.com', '8529631470', 'narsigpur', 'user', 'aneesh123', 'DSC_6981.JPG', 0, '2023-12-23 07:38:41', '2023-12-23 07:38:41'),
(18, 'anshika', 'anshika@gmail.com', '7894561230', 'madan mehel', 'user', 'anshika123', 'DSC_6980.JPG', 0, '2023-12-23 08:15:12', '2023-12-23 08:15:12'),
(19, 'Hardy Shandhu', 'Hardy@gmail.com', '9851236407', 'railway station jabalpur', 'user', 'Hardy@123', 'profile.jpg', 0, '2023-12-27 08:00:42', '2023-12-27 08:00:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `package_id` (`package_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `package_id` FOREIGN KEY (`package_id`) REFERENCES `package` (`package_id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
