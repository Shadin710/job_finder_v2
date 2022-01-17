-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 07:23 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_bio`
--

CREATE TABLE `admin_bio` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `applied`
--

CREATE TABLE `applied` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `provider_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `seeker_email` varchar(255) NOT NULL,
  `dir_name` varchar(255) NOT NULL,
  `provider_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `comName` varchar(255) NOT NULL,
  `comAddress` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `work_num` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `salay` varchar(255) NOT NULL,
  `benefits` varchar(255) NOT NULL,
  `type_time` varchar(255) NOT NULL,
  `exper` varchar(255) NOT NULL,
  `skilll` varchar(200) NOT NULL,
  `skill1` varchar(200) NOT NULL,
  `skill2` varchar(200) NOT NULL,
  `skill3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `provider_bio`
--

CREATE TABLE `provider_bio` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ghub` varchar(255) NOT NULL,
  `twi` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `insta` varchar(255) NOT NULL,
  `pnum` varchar(255) NOT NULL,
  `mnum` varchar(255) NOT NULL,
  `p_address` varchar(255) NOT NULL,
  `cur_pos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `provider_info`
--

CREATE TABLE `provider_info` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `report_jobs`
--

CREATE TABLE `report_jobs` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `provider_email` varchar(100) NOT NULL,
  `seeker_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `report_provider`
--

CREATE TABLE `report_provider` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `seeker_email` varchar(255) NOT NULL,
  `provider_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `report_seeker`
--

CREATE TABLE `report_seeker` (
  `id` int(11) NOT NULL,
  `seeker_id` int(11) NOT NULL,
  `seeker_email` varchar(255) NOT NULL,
  `provider_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seeker_bio`
--

CREATE TABLE `seeker_bio` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `skill1` varchar(255) NOT NULL,
  `skill2` varchar(255) NOT NULL,
  `skill3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seeker_education`
--

CREATE TABLE `seeker_education` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `edu1` varchar(255) NOT NULL,
  `edu_des1` varchar(255) NOT NULL,
  `edu2` varchar(255) NOT NULL,
  `edu_des2` varchar(255) NOT NULL,
  `edu3` varchar(255) NOT NULL,
  `edu_des3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seeker_hobby`
--

CREATE TABLE `seeker_hobby` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hobby_name` varchar(255) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `travel` varchar(255) NOT NULL,
  `travel_des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seeker_info`
--

CREATE TABLE `seeker_info` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `seeker_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seeker_work`
--

CREATE TABLE `seeker_work` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `descrp` varchar(255) NOT NULL,
  `work1` varchar(255) NOT NULL,
  `descrp1` varchar(255) NOT NULL,
  `work2` varchar(255) NOT NULL,
  `descrp2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_bio`
--
ALTER TABLE `admin_bio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applied`
--
ALTER TABLE `applied`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provider_bio`
--
ALTER TABLE `provider_bio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provider_info`
--
ALTER TABLE `provider_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_jobs`
--
ALTER TABLE `report_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_provider`
--
ALTER TABLE `report_provider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_seeker`
--
ALTER TABLE `report_seeker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seeker_bio`
--
ALTER TABLE `seeker_bio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seeker_education`
--
ALTER TABLE `seeker_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seeker_hobby`
--
ALTER TABLE `seeker_hobby`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seeker_info`
--
ALTER TABLE `seeker_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seeker_work`
--
ALTER TABLE `seeker_work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_bio`
--
ALTER TABLE `admin_bio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `applied`
--
ALTER TABLE `applied`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `provider_bio`
--
ALTER TABLE `provider_bio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `provider_info`
--
ALTER TABLE `provider_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `report_jobs`
--
ALTER TABLE `report_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `report_provider`
--
ALTER TABLE `report_provider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report_seeker`
--
ALTER TABLE `report_seeker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seeker_bio`
--
ALTER TABLE `seeker_bio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seeker_education`
--
ALTER TABLE `seeker_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seeker_hobby`
--
ALTER TABLE `seeker_hobby`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seeker_info`
--
ALTER TABLE `seeker_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seeker_work`
--
ALTER TABLE `seeker_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
