-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2023 at 03:07 PM
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
-- Database: `course`
--

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(11) NOT NULL,
  `con_name` text NOT NULL,
  `con_email` text NOT NULL,
  `con_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `con_name`, `con_email`, `con_number`) VALUES
(1, 'Puneet', 'puneetsri9990@gmail.com', '9311676139'),
(2, 'Puneet', 'puneetsri9990@gmail.com', '9311676139');

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `id` int(11) NOT NULL,
  `c_email` text NOT NULL,
  `c_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consultation`
--

INSERT INTO `consultation` (`id`, `c_email`, `c_number`) VALUES
(16, 'puneet@gmail.com', '9312676139');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `number` text NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `number`, `city`) VALUES
(43, 'Puneet', 'puneetsri9990@gmail.com', '9311676139', 'Delhi'),
(44, 'Puneet hehe', 'puneetsri9990@gmail.com', '9311676139', 'Delhi'),
(45, 'Puneet', 'puneetsri9990@gmail.com', '9311676139', 'Delhi'),
(46, 'Puneet', 'puneetsri9990@gmail.com', '9311676139', 'Delhi'),
(47, 'Puneet', 'puneetsri9990@gmail.com', '9311676139', 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `corporate_training`
--

CREATE TABLE `corporate_training` (
  `id` int(11) NOT NULL,
  `ct_name` text NOT NULL,
  `ct_email` text NOT NULL,
  `ct_number` text NOT NULL,
  `ct_company` text NOT NULL,
  `ct_technology` text NOT NULL,
  `ct_company_loc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `corporate_training`
--

INSERT INTO `corporate_training` (`id`, `ct_name`, `ct_email`, `ct_number`, `ct_company`, `ct_technology`, `ct_company_loc`) VALUES
(1, 'Puneet Shrivastav', 'puneetsri9990@gmail.com', '9311676139', 'Front end developer', 'frontned', 'Front end developer');

-- --------------------------------------------------------

--
-- Table structure for table `date_table`
--

CREATE TABLE `date_table` (
  `id` int(11) NOT NULL,
  `date` text NOT NULL,
  `month` text NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `date_table`
--

INSERT INTO `date_table` (`id`, `date`, `month`, `time`) VALUES
(4, '15', 'nov', '10:45 PM'),
(5, '25', 'Janauary', '12:30 PM');

-- --------------------------------------------------------

--
-- Table structure for table `hire_form`
--

CREATE TABLE `hire_form` (
  `id` int(11) NOT NULL,
  `a_name` text NOT NULL,
  `a_email` text NOT NULL,
  `a_number` text NOT NULL,
  `a_company` text NOT NULL,
  `a_experience` text NOT NULL,
  `a_role` text NOT NULL,
  `a_city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hire_form`
--

INSERT INTO `hire_form` (`id`, `a_name`, `a_email`, `a_number`, `a_company`, `a_experience`, `a_role`, `a_city`) VALUES
(1, 'Shivam Shrivastava', 'shivamsrivastava7776@gmail.com', '9899386529', '', '2years', 'frontend developer', 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `active`) VALUES
(1, 'admin', 'admin123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporate_training`
--
ALTER TABLE `corporate_training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `date_table`
--
ALTER TABLE `date_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hire_form`
--
ALTER TABLE `hire_form`
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
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `corporate_training`
--
ALTER TABLE `corporate_training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `date_table`
--
ALTER TABLE `date_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hire_form`
--
ALTER TABLE `hire_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
