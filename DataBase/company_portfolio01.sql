-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 04:36 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company_portfolio01`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_staf`
--

CREATE TABLE `all_staf` (
  `id` int(11) NOT NULL,
  `fast_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `age` int(5) NOT NULL,
  `join_date` date NOT NULL,
  `salary` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `img` text NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1 COMMENT '0=inactive, 1=active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_staf`
--

INSERT INTO `all_staf` (`id`, `fast_name`, `last_name`, `position`, `age`, `join_date`, `salary`, `email`, `img`, `status`) VALUES
(1, 'MH ', 'RONY', 'Web Developer', 21, '2022-05-17', 20000, 'abc@gmail.com', 'img.jpg', 1),
(2, '[dfas]', '[sdf]', '[sdf]', 0, '0000-00-00', 0, '[mh.rony.dhanvi@gmail.com]', '', 1),
(3, 'dfas', 'sdf', 'jjjj', 66, '2022-06-08', 151, 'mh.rony.dhanvi@gmail.com', '', 1),
(4, 'dfas', 'sdf', 'sdf', 12, '2022-06-15', 55, 'mh.rony.dhanvi@gmail.com', '', 1),
(5, 'dfas', 'sdf', 'sdf', 12, '2022-06-15', 55, 'mh.rony.dhanvi@gmail.com', '', 1),
(6, 'dfas', 'sdf', 'sdf', 515, '2022-06-15', 222, 'mh.rony.dhanvi@gmail.com', '', 1),
(7, 'dfas', 'sdf', 'sdf', 323, '2022-06-08', 1515, 'mh.rony.dhanvi@gmail.com', '', 1),
(8, 'Rana', 'Rohim', 'Designer', 25, '2022-05-31', 12000, 'mh.rony.dhanvi@gmail.com', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `client_logo`
--

CREATE TABLE `client_logo` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_;logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `collect_email`
--

CREATE TABLE `collect_email` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1 COMMENT '0=inactive, 1=active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `location` varchar(500) NOT NULL,
  `company_phone_number` varchar(20) NOT NULL,
  `company_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1 COMMENT '0=inactive, 1=active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `header_section`
--

CREATE TABLE `header_section` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(1000) NOT NULL,
  `get Link` text NOT NULL,
  `icon_mg` varchar(50) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1 COMMENT '0=unactive, 1=active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header_section`
--

INSERT INTO `header_section` (`id`, `title`, `sub_title`, `get Link`, `icon_mg`, `status`) VALUES
(1, 'Hi', 'Sub Title', 'facebook.com', 'img.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `info_team_section`
--

CREATE TABLE `info_team_section` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `job_position` varchar(255) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1 COMMENT '0=inactive, 1=active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_img`
--

CREATE TABLE `portfolio_img` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `img` varchar(100) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1 COMMENT '0=inactive, 1=active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_menu`
--

CREATE TABLE `portfolio_menu` (
  `id` int(11) NOT NULL,
  `menu_list` varchar(50) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1 COMMENT '0=inactive, 1=active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services_section`
--

CREATE TABLE `services_section` (
  `id` int(11) NOT NULL,
  `service_title` varchar(255) NOT NULL,
  `service_description` text NOT NULL,
  `icon_link` varchar(50) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1 COMMENT '0=unactive 1=active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `social_link_team_section`
--

CREATE TABLE `social_link_team_section` (
  `id` int(11) NOT NULL,
  `fb_link` text NOT NULL,
  `twitter_lInk` text NOT NULL,
  `instragram_lInk` text NOT NULL,
  `linkdin_link` text NOT NULL,
  `others_link` text NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_staf`
--
ALTER TABLE `all_staf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collect_email`
--
ALTER TABLE `collect_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_section`
--
ALTER TABLE `header_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_team_section`
--
ALTER TABLE `info_team_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_img`
--
ALTER TABLE `portfolio_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_menu`
--
ALTER TABLE `portfolio_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_section`
--
ALTER TABLE `services_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_link_team_section`
--
ALTER TABLE `social_link_team_section`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_staf`
--
ALTER TABLE `all_staf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `collect_email`
--
ALTER TABLE `collect_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `header_section`
--
ALTER TABLE `header_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `info_team_section`
--
ALTER TABLE `info_team_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolio_img`
--
ALTER TABLE `portfolio_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolio_menu`
--
ALTER TABLE `portfolio_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services_section`
--
ALTER TABLE `services_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_link_team_section`
--
ALTER TABLE `social_link_team_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
