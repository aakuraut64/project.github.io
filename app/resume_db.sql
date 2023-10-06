-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 11:31 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic`
--

CREATE TABLE `basic` (
  `id` int(10) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `about` varchar(1000) NOT NULL,
  `skill1` varchar(100) NOT NULL,
  `skill2` varchar(100) NOT NULL,
  `skill3` varchar(100) NOT NULL,
  `skill4` varchar(100) NOT NULL,
  `skill5` varchar(100) NOT NULL,
  `lang1` varchar(20) NOT NULL,
  `lang2` varchar(20) NOT NULL,
  `lang3` varchar(20) NOT NULL,
  `degree1` varchar(100) NOT NULL,
  `university1` varchar(100) NOT NULL,
  `es_year1` varchar(100) NOT NULL,
  `degree2` varchar(100) NOT NULL,
  `university2` varchar(100) NOT NULL,
  `es_year2` varchar(100) NOT NULL,
  `c_name1` varchar(100) NOT NULL,
  `j_profession1` varchar(100) NOT NULL,
  `js_year1` varchar(100) NOT NULL,
  `details1` varchar(2000) NOT NULL,
  `c_name2` varchar(100) NOT NULL,
  `j_profession2` varchar(100) NOT NULL,
  `js_year2` varchar(100) NOT NULL,
  `details2` varchar(2000) NOT NULL,
  `c_name3` varchar(100) NOT NULL,
  `j_profession3` varchar(100) NOT NULL,
  `js_year3` varchar(100) NOT NULL,
  `details3` varchar(2000) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `basic`
--

INSERT INTO `basic` (`id`, `user_id`, `name`, `email`, `address`, `profession`, `image`, `about`, `skill1`, `skill2`, `skill3`, `skill4`, `skill5`, `lang1`, `lang2`, `lang3`, `degree1`, `university1`, `es_year1`, `degree2`, `university2`, `es_year2`, `c_name1`, `j_profession1`, `js_year1`, `details1`, `c_name2`, `j_profession2`, `js_year2`, `details2`, `c_name3`, `j_profession3`, `js_year3`, `details3`, `phone`) VALUES
(2, 4, 'Malik Rabb', 'mrabb@email.com', 'New York City, NY', 'Data Scientist', 'pic.png', 'Data Scientist with strong math background and 3+ years of experience using predictive modeling, data processing, and data mining algorithms to solve challenging business problems. Involved in Python open source community and passionate about deep reinforcement learning.', 'Access', 'Essbase', 'Financial Modeling', 'Project Management', 'QuickBooks', '', '', '', 'Coral Springs University', 'Bachelor of Science in Mathematics', 'Aug \'15 - ', '', '', '', 'River Tech', 'Data Scientist', 'Jul \'19 - ', 'Built fuzzy matching algorithm using k-nearest neighbors to identify non-exact matching duplicates\nDesigned and developed real time recommendation engine to rank sales leads for upsell opportunities\nRefined personalization algorithms for 1M+ customers on web and mobile\nTransformed raw data into MySQL with custom-made ETL application to prepare unruly data for machine learning', '', '', '', '', '', '', '', '', '0123556976'),
(8, 6, 'Sofia Flores', 'sflores@email.com', 'London, UK', 'Electrical Engineer', 'person-2.jpg', 'Detail-oriented and improvement-driven Electrical Engineer with 15+ years of experience in designing, developing and testing electrical systems. Dedicated to improving process while ensuring product quality.', 'Access', 'Java', 'Unix and Linux', 'Project Management', 'Oracle', '', '', '', 'Master of Science in Electrical Engineering', 'HAWAII WESTERN', 'Aug \'15 - Jul \'19', 'Bachelor of Science in Electrical Engineering', 'NORTHWEST VERMONT UNIVERSITY', 'Aug \'10-May \'14', 'RETAIL OCEAN', 'Senior Electrical Engineer', 'Jul \'19 - Current', 'Collaborate with PM, junior designers, customers and field engineers to ensure products meet all requirements Design analog and digital circuits and microprocessors Helped implement standard testing procedures, significantly increasing productivity and reducing time to deployment', 'CLOUD CLEARWATER', 'Electrical Engineer', 'Aug \'15 - Jul \'19', 'Developed and tested hardware electrical systems Used PCB Editor for printed circuit board design Created thorough and efficient test plans for each new design, reducing average testing time 20%', '', '', '', '', '0123556976'),
(12, 10, 'JOHN BROWN', 'JOHN@GMAIL.COM', 'TEXAS', 'ANDROID DEVELOPER', 'pic.png', 'Detail-oriented and improvement-driven Electrical Engineer with 15+ years of experience in designing, developing and testing electrical systems. Dedicated to improving process while ensuring product quality.', 'COTLIN', '', 'SWIFT', '', '', '', '', '', 'BE', 'STANFORD UNIVERSITY', 'Aug \'19 - Jul \'22', '', '', '', 'AMAZON', 'ANDROID DEVELOPER', 'Jul \'22 - Current', '', '', '', '', '', '', '', '', '', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `cpassword`) VALUES
(4, 'Malik Rabb', 'mrabb@email.com', '49cef6e0161c0ddf94a9cee37c6d4b83', ''),
(6, 'Sofia Flores', 'sflores@email.com', '17da1ae431f965d839ec8eb93087fb2b', ''),
(9, 'Ivy Haddington', 'ihaddington@email.com', 'a735c3e8bc21cbe0f03e501a1529e0b4', ''),
(10, 'JOHN', 'JOHN@GMAIL.COM', 'e2577c04131c5b0c7e7580f978322b31', ''),
(11, 'JOHN', 'JOHN@GMAIL.COM', 'e2577c04131c5b0c7e7580f978322b31', ''),
(12, 'JOHN', 'JOHN@GMAIL.COM', 'e2577c04131c5b0c7e7580f978322b31', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic`
--
ALTER TABLE `basic`
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
-- AUTO_INCREMENT for table `basic`
--
ALTER TABLE `basic`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
