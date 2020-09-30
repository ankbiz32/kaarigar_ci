-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 30, 2020 at 10:31 AM
-- Server version: 10.3.24-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidddnbn_kaarigar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amt` varchar(100) NOT NULL,
  `service_id` int(11) NOT NULL,
  `pin_code` varchar(20) NOT NULL,
  `address` varchar(300) NOT NULL,
  `schedule_date` varchar(20) NOT NULL,
  `schedule_time` varchar(20) NOT NULL,
  `customer_remarks` varchar(300) NOT NULL,
  `admin_remarks` varchar(300) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'BOOKED',
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking_info`
--

CREATE TABLE `booking_info` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `sub_service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(2048) NOT NULL,
  `message` varchar(2048) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `date`, `name`, `email`, `phone`, `message`, `status`) VALUES
(1, '2020-09-02', 'Siddharth   Dani', 'srdani12@gmail.com', '9021073372', 'Testing!', 'new'),
(2, '2020-09-05', 'Siddharth   Dani', 'srdani12@gmail.com', '9021073372', 'HIG C-65, Near Navkar Hospital, Shailendra Nagar Sqr.,', 'new'),
(3, '2020-09-12', 'Siddharth   Dani', 'srdani12@gmail.com', '9021073372', 'HIG C-65, Near Navkar Hospital, Shailendra Nagar Sqr.,', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `rating` int(11) NOT NULL,
  `content` varchar(2048) NOT NULL,
  `img_src` varchar(1024) NOT NULL DEFAULT 'dummy_feedback_img.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `designation`, `rating`, `content`, `img_src`) VALUES
(1, 'Mr. patwa', '', 5, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage rassing hidden.', 'dummy_feedback_img.png'),
(2, 'Mr. Jain', '', 4, 'Randomised words which don\'t look even slightly believable. If you are going to use a passage rassing hidden.', 'dummy_feedback_img.png');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `img_src` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hero_slider`
--

CREATE TABLE `hero_slider` (
  `id` int(11) NOT NULL,
  `img_src` varchar(500) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `descr` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hero_slider`
--

INSERT INTO `hero_slider` (`id`, `img_src`, `heading`, `descr`) VALUES
(1, 'carpenter.jpg', 'Now find Carpenters online.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.'),
(2, 'packers.jpg', 'Now find Packers & Movers online.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.'),
(3, 'painter.jpg', 'Now find Painters online.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.'),
(4, 'car-repair.jpg', '...and many more Kaarigar online.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.');

-- --------------------------------------------------------

--
-- Table structure for table `job_appl`
--

CREATE TABLE `job_appl` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `details` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `area` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pin_code` varchar(20) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `area`, `city`, `state`, `pin_code`, `is_active`) VALUES
(1, ' ', 'Raipur', 'C.G.', '492001', 1),
(2, '', 'Abhanpur', 'C.G.', '493661', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img_src` varchar(500) NOT NULL,
  `icon_src` varchar(200) NOT NULL,
  `min_charges` varchar(50) DEFAULT NULL,
  `min_charge_txt` varchar(300) NOT NULL,
  `descr` longtext NOT NULL,
  `can_be_postpaid` int(11) NOT NULL DEFAULT 1,
  `slug` varchar(50) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `img_src`, `icon_src`, `min_charges`, `min_charge_txt`, `descr`, `can_be_postpaid`, `slug`, `is_active`) VALUES
(1, 'AC repair', 'extra-service-item-03.jpg', 'air-conditioner.png', NULL, '', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto neque doloremque omnis! Quae saepe dolore aliquid incidunt! Assumenda laboriosam dolorem sint a commodi magni sit repudiandae, enim, minima et veritatis dicta sequi incidunt dolor maiores nihil, id officia quam aperiam. Nulla quisquam nostrum molestiae deleniti sed. Quis harum corrupti non.', 1, 'ac-repair', 1),
(2, 'Carpenter', 'extra-service-item-04.jpg', 'saw-up.png', NULL, '', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto neque doloremque omnis! Quae saepe dolore aliquid incidunt! Assumenda laboriosam dolorem sint a commodi magni sit repudiandae, enim, minima et veritatis dicta sequi incidunt dolor maiores nihil, id officia quam aperiam. Nulla quisquam nostrum molestiae deleniti sed. Quis harum corrupti non.', 1, 'carpenter', 1),
(3, 'Plumber', 'extra-service-item-01.jpg', 'wrench.png', '300', 'Includes consultation and minor repairings. Any parts replaced will be charged extra', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto neque doloremque omnis! Quae saepe dolore aliquid incidunt! Assumenda laboriosam dolorem sint a commodi magni sit repudiandae, enim, minima et veritatis dicta sequi incidunt dolor maiores nihil, id officia quam aperiam. Nulla quisquam nostrum molestiae deleniti sed. Quis harum corrupti non.', 1, 'plumber', 1),
(4, 'Electrician', 'extra-service-item-02.jpg', 'electricity.png', NULL, '', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto neque doloremque omnis! Quae saepe dolore aliquid incidunt! Assumenda laboriosam dolorem sint a commodi magni sit repudiandae, enim, minima et veritatis dicta sequi incidunt dolor maiores nihil, id officia quam aperiam. Nulla quisquam nostrum molestiae deleniti sed. Quis harum corrupti non.', 1, 'electrician', 1),
(5, 'Painter', 'extra-service-item-05.jpg', 'brush.png', NULL, '', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto neque doloremque omnis! Quae saepe dolore aliquid incidunt! Assumenda laboriosam dolorem sint a commodi magni sit repudiandae, enim, minima et veritatis dicta sequi incidunt dolor maiores nihil, id officia quam aperiam. Nulla quisquam nostrum molestiae deleniti sed. Quis harum corrupti non.', 1, 'painter', 1),
(6, 'Home hair cut', 'extra-service-item-06.jpg', 'hair-cut.png', NULL, '', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto neque doloremque omnis! Quae saepe dolore aliquid incidunt! Assumenda laboriosam dolorem sint a commodi magni sit repudiandae, enim, minima et veritatis dicta sequi incidunt dolor maiores nihil, id officia quam aperiam. Nulla quisquam nostrum molestiae deleniti sed. Quis harum corrupti non.', 1, 'home-hair-cut', 1),
(7, 'Car repair', 'extra-service-item-07.jpg', 'car-repair.png', '300', 'Includes consultation and minor repairings. Any parts replaced will be charged extra', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto neque doloremque omnis! Quae saepe dolore aliquid incidunt! Assumenda laboriosam dolorem sint a commodi magni sit repudiandae, enim, minima et veritatis dicta sequi incidunt dolor maiores nihil, id officia quam aperiam. Nulla quisquam nostrum molestiae deleniti sed. Quis harum corrupti non.', 1, 'car-repair', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services_locations`
--

CREATE TABLE `services_locations` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services_locations`
--

INSERT INTO `services_locations` (`id`, `service_id`, `location_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 1, 2),
(9, 2, 2),
(10, 3, 2),
(11, 4, 2),
(12, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sub_services`
--

CREATE TABLE `sub_services` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `text` varchar(500) NOT NULL,
  `min_charges` varchar(50) DEFAULT NULL,
  `can_be_postpaid` int(11) NOT NULL DEFAULT 0,
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_services`
--

INSERT INTO `sub_services` (`id`, `service_id`, `text`, `min_charges`, `can_be_postpaid`, `is_active`) VALUES
(1, 3, 'Tap change', '150', 0, 1),
(2, 3, 'Seapage/Leakeage solution', NULL, 0, 1),
(3, 3, 'New pipeline connection', '1000', 0, 1),
(10, 6, 'Hair cut', '150', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(500) NOT NULL,
  `role` varchar(15) NOT NULL DEFAULT 'user',
  `is_verified` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `mobile_no`, `username`, `pwd`, `fname`, `lname`, `email`, `role`, `is_verified`, `status`, `created_at`, `modified_at`) VALUES
(1, '', 'admin_kaarigar', '$2y$10$3.f2PnKfTq/J0Y7z2vwOoOc8e5yNj4c1Li6aAo4S/7LqiaizZSXOi', 'Demo', 'User', 'connect@kaarigaronline.in', 'admin', 1, 1, '2020-08-06 18:01:55', '2020-08-06 18:01:55'),
(2, '7894561230', '', '$2y$10$.0sEFrHroHiJyAfgSVBFk.uhmj8dC1Az2XIEKP.BPpKdeXaGWgW0O', 'Test', '', '', 'user', 1, 1, '2020-08-10 07:53:46', '2020-08-10 07:53:46'),
(3, '9999999999', '', '', 'Testing for adm', '', '', 'user', 0, 1, '2020-08-15 12:37:09', '2020-08-15 12:37:09'),
(4, '7869627961', '', '', 'sahil quraishi', '', '', 'user', 0, 1, '2020-08-31 07:40:17', '2020-08-31 07:40:17');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pin_code` varchar(50) NOT NULL,
  `address` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `user_id`, `pin_code`, `address`) VALUES
(43, 2, '492001', 'Budhapara, Raipur (C.G.)'),
(44, 3, '492000', 'Testing fo'),
(45, 4, '492001', 'chaprasi colony pandri raipir');

-- --------------------------------------------------------

--
-- Table structure for table `webprofile`
--

CREATE TABLE `webprofile` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone1` varchar(50) NOT NULL,
  `phone2` varchar(50) NOT NULL,
  `whatsapp_no` varchar(50) NOT NULL,
  `address_line1` varchar(50) NOT NULL,
  `address_line2` varchar(50) NOT NULL,
  `fblink` varchar(50) NOT NULL,
  `instalink` varchar(50) NOT NULL,
  `twitterlink` varchar(50) NOT NULL,
  `youtubelink` varchar(1024) NOT NULL,
  `video_url` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webprofile`
--

INSERT INTO `webprofile` (`id`, `email`, `phone1`, `phone2`, `whatsapp_no`, `address_line1`, `address_line2`, `fblink`, `instalink`, `twitterlink`, `youtubelink`, `video_url`) VALUES
(1, 'connect@kaarigaronline.in', '9753344220', '9753344220', '9753344220', 'Raipur,', 'Chhattisgarh', 'https://www.facebook.com/', 'https://instagram.com', 'https://twitter.com', 'https://www.youtube.com', 'https://www.youtube.com/watch?v=2GqExKSwTEA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_info`
--
ALTER TABLE `booking_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_slider`
--
ALTER TABLE `hero_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_appl`
--
ALTER TABLE `job_appl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_locations`
--
ALTER TABLE `services_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_services`
--
ALTER TABLE `sub_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webprofile`
--
ALTER TABLE `webprofile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_info`
--
ALTER TABLE `booking_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hero_slider`
--
ALTER TABLE `hero_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_appl`
--
ALTER TABLE `job_appl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services_locations`
--
ALTER TABLE `services_locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_services`
--
ALTER TABLE `sub_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `webprofile`
--
ALTER TABLE `webprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
