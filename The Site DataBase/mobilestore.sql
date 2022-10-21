-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 21, 2022 at 10:21 PM
-- Server version: 5.7.33
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobilestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'saleh', '7772221');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `description`, `image`, `category`) VALUES
(1, 'Honor Play', 6750, 'Released 2018, August & 176g, 7.5mm thickness & Android 8.1, up to Android 9.0, EMUI 9.1 & 64GB/128GB storage, microSDXC', 'Honor Play.png', 'honor'),
(2, 'Honor 20', 9500, 'HUAWEI Kirin 980 Octa-core Processor . Dual NPUs(Neural-network Processing Unit) . Mali G76 720MHz GPU . 8GB RAM, 256 GB Internal Storage . 6.26 inch OLED, FHD+ 2340*1080 . 48MP +16MP+2MP+2MP rear cameras . Androidâ„¢ 9.0/HUAWEI EMUI 9.1 .', 'Honor 20.png', 'honor'),
(3, 'Honor V20', 7500, 'HUAWEI Hisilicon Kirin 980 processor ARM Mali-G76 MP10 GPU 6GB RAM, 128GB Internal Storage 6.4-inch screen, FHD+ (2310x1080 pixels) 48 MP rear cameras + 25MP front camera Androidâ„¢ 9.0/HUAWEI Magic UI 2.0', 'Honor V20.png', 'honor'),
(5, 'Honor Magic 2', 9000, 'HUAWEI Hisilicon Kirin 980 processor ARM Mali-G76 MP10 GPU 6GB RAM, 128GB Internal Storage 6.39-inch screen, FHD+ (1080x2340 pixels) 24 MP + 16 MP +16 MP rear cameras Androidâ„¢ 9.0/HUAWEI Magic UI 2.0', 'Honor Magic 2.png', 'honor'),
(8, 'Honor Play 8A', 5500, 'Mediatek MT6765 (Helio P35) processor G71 MP3 GPU 3GB RAM,32GB Internal Storage Real Camera: 13M 6.088\" HD+ 1560x720 EMUI 9.0 (Base on Android 9.0)', 'Honor Play 8A.png', 'honor'),
(10, 'HUAWEI Enjoy 10 Plus', 4900, 'Hisilicon Kirin 710F processor Mali-G51 MP4 GPU 6GB RAM,128GB Internal Storage Real Camera: 48MP+8MP+2MP 6.59\" IPS FHD+ 2340*1080 EMUI 9.1 (Base on Android 9)', 'HUAWEI Enjoy 10 Plus.png', 'huawei'),
(11, 'HUAWEI Enjoy 9', 7500, 'Qualcomm Snapdragon 450 processor Adrenoâ„¢ 506 GPU 4GB RAM,64GB Internal Storage Real Camera: 13M+2M 6.26\" HD+ 1520x720 EMUI 8.2 (Base on Android 8.1)', 'HUAWEI Enjoy 9.png', 'huawei'),
(12, 'HUAWEI Mate 20 RS', 21000, 'HUAWEI Hisilicon Kirin 980 processor Mali G76 720MHz GPU 8GB RAM,512GB Internal Storage 6.39\" OLED 3120 x 1440 HUAWEI FullView Display Luxury design, genuine leather', 'HUAWEI Mate 20 RS.png', 'huawei'),
(14, 'HUAWEI P30 Pro', 14500, 'HUAWEI Kirin 980 Octa-core Processor Dual NPUs(Neural-network Processing Unit) Mali G76 720MHz GPU 8GB RAM, 256 GB Internal Storage 6.47 inch OLED, FHD+ 2340*1080 40MP +20MP+8MP rear cameras Androidâ„¢ 9.0/HUAWEI EMUI 9.1', 'HUAWEI P30 Pro.png', 'huawei');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `question` text NOT NULL,
  `answer` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `user_name`, `question`, `answer`) VALUES
(1, '', 'Is Samsung still releasing Note 3 to the market ?', 'No, Not any more, Sorry!\r\nThey focusing on Note 8 and Above only.'),
(2, 'userr', 'Is Samsung still releasing Note 3 to the market ?', 'Unfortunately, They Stop making it, They just focused on Note 8 and Above versions only.'),
(3, 'userr', 'I need Mobile for playing High Quality Graphical Games, What the best recommendations, Guys ?', 'We recommend for you \" Honor Play Pro X9 \".\r\nThis mobile will give you the best Gaming experiences ever.\r\nYou also can check the Mobile review from our Reviewing website \" https://tagzmusic.tk \".');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `user_name`, `password`) VALUES
(1, 'First Tester Exist', 'test@test.com', 'Tester', '123456'),
(2, 'regular user', 'user@use.com', 'userr', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
