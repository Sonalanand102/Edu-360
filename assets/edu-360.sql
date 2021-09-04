-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2021 at 09:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edu-360`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `shrt_desc` mediumtext NOT NULL,
  `long_desc` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `img`, `shrt_desc`, `long_desc`, `created_at`) VALUES
(5, 'IMG_20200223_132311.jpg', '# Spreading smiles in the form of food packets:)', 'nhkghdddddddddddddddddddddddddddddddddddhfki6ytufkunhkghdddddddddddddddddddddddddddddddddddhfki6ytufkunhkghdddddddddddddddddddddddddddddddddddhfki6ytufkunhkghdddddddddddddddddddddddddddddddddddhfki6ytufkunhkghdddddddddddddddddddddddddddddddddddhfki6ytufkunhkghdddddddddddddddddddddddddddddddddddhfki6ytufkunhkghdddddddddddddddddddddddddddddddddddhfki6ytufkunhkghdddddddddddddddddddddddddddddddddddhfki6ytufkunhkghdddddddddddddddddddddddddddddddddddhfki6ytufkunhkghdddddddddddddddddddddddddddddddddddhfki6ytufkunhkghdddddddddddddddddddddddddddddddddddhfki6ytufkunhkghdddddddddddddddddddddddddddddddddddhfki6ytufkunhkghdddddddddddddddddddddddddddddddddddhfki6ytufkunhkghdddddddddddddddddddddddddddddddddddhfki6ytufkunhkghdddddddddddddddddddddddddddddddddddhfki6ytufkunhkghdddddddddddddddddddddddddddddddddddhfki6ytufkunhkghdddddddddddddddddddddddddddddddddddhfki6ytufkunhkghdddddddddddddddddddddddddddddddddddhfki6ytufkunhkghdddddddddddddddddddddddddddddddddddhfki6ytufkunhkghdddddddddddddddddddddddddddddddddddhfki6ytufkunhkghdddddddddddddddddddddddddddddddddddhfki6ytufkunhkghdddddddddddddddddddddddddddddddddddhfki6ytufkunhkghdddddddddddddddddddddddddddddddddddhfki6ytufkunhkghdddddddddddddddddddddddddddddddddddhfki6ytufku', '2021-09-04 17:33:36'),
(6, 'IMG_20200928_205120.jpg', '#Thank you for the clothes, you didn’t throw away', 'jhfytdtsergtyuiopugfdghyuiouydgfzdf8o9p[pioudgfxzcdgfui9p[0oiugfbcvf9p0[-opibcvxbopkl ', '2021-09-04 19:12:50');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `message`, `created_at`) VALUES
(1, 'SONAL ANAND', 'sonalanand102@gmail.com', 6201796405, 'hii this is sonal i am searching for falana book.when will it publish.', '2021-09-04 18:07:09'),
(2, 'SONAL ANAND', 'sonalanand100@gmail.com', 6201796405, 'hii ', '2021-09-04 18:07:39');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `notice` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `notice`, `created_at`) VALUES
(1, 'Result of B.Tech 4th sem is out.', '2021-09-04 11:45:58'),
(2, 'Response required for English Communication Skills Training.', '2021-09-04 11:45:58'),
(3, 'Teacher\'s Day Celebration at BCE Campus.', '2021-09-04 11:46:32'),
(4, 'Induction Session | GDSC BCE Patna', '2021-09-04 11:46:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
