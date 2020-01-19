-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2020 at 05:36 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etechnicalschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `a_id` int(10) NOT NULL,
  `about` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`a_id`, `about`) VALUES
(1, 'Hey People.Welcome to our Website.This is a Website where you can both Learn and Earn.');

-- --------------------------------------------------------

--
-- Table structure for table `cata`
--

CREATE TABLE `cata` (
  `cata_id` int(10) NOT NULL,
  `cata_name` text NOT NULL,
  `cat_icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cata`
--

INSERT INTO `cata` (`cata_id`, `cata_name`, `cat_icon`) VALUES
(8, 'Apps Development', '<i class=\"fab fa-acquisitions-incorporated\"></i>'),
(9, 'Graphics Design', '<i class=\"fas fa-palette\"></i>'),
(10, 'Web Design', '<i class=\"fab fa-accusoft\"></i>'),
(11, 'Video Graphics', '<i class=\"fas fa-archive\"></i>'),
(12, 'Writing', '<i class=\"fas fa-archive\"></i>'),
(13, 'Academy', '<i class=\"fas fa-chalkboard-teacher\"></i>'),
(14, 'Photography', '<i class=\"fas fa-tractor\"></i>'),
(22, 'Presentation', '<i class=\"fas fa-school\"></i>'),
(23, 'Music', '<i class=\"fas fa-chalkboard-teacher\"></i>'),
(24, 'Business', '<i class=\"fas fa-user-tie\"></i>'),
(25, 'Video', '<i class=\"fas fa-archive\"></i>'),
(26, 'Lifestyle', '<i class=\"fas fa-folder-open\"></i>'),
(27, 'Religion ', '<i class=\"fas fa-chalkboard-teacher\"></i>'),
(30, 'Videography', '<i class=\"fas fa-school\"></i>'),
(35, 'Soft Skill', '<i class=\"fas fa-tractor\"></i>');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `con_id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `add1` varchar(100) NOT NULL,
  `add2` varchar(100) NOT NULL,
  `yt` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `gp` varchar(100) NOT NULL,
  `tw` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `phn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`con_id`, `email`, `add1`, `add2`, `yt`, `fb`, `gp`, `tw`, `link`, `phn`) VALUES
(1, 'sabbir.cse.duet@gmail.com', 'Dhanmondi-27,oposite of Abhani field', 'Uttara,Dhaka-1210', 'https://www.youtube.com/', 'sabbirspacehossain', 'https://www.plus.google.com/', 'https://www.twitter.com/', 'https://www.linkedin.com/', '01826559551');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `q_id` int(10) NOT NULL,
  `qsn` varchar(500) NOT NULL,
  `ans` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`q_id`, `qsn`, `ans`) VALUES
(4, 'How Can I Pay ?', 'You Can Pay through Paypal Account'),
(5, 'How to Create a User Account ?', 'Click login Page than click Create new Account.');

-- --------------------------------------------------------

--
-- Table structure for table `sub_cata`
--

CREATE TABLE `sub_cata` (
  `sub_cata_id` int(11) NOT NULL,
  `sub_cata_name` text NOT NULL,
  `cata_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_cata`
--

INSERT INTO `sub_cata` (`sub_cata_id`, `sub_cata_name`, `cata_id`) VALUES
(6, 'Fiver', 6),
(7, 'Upwork', 6),
(8, 'Freelancer', 6),
(9, 'On Page SEO', 7),
(10, 'Technical SEO', 7),
(11, 'Content Marketing', 7),
(12, 'Game Development', 8),
(13, 'IOS', 8),
(14, 'Machine Learning', 8),
(15, 'Android App Development', 8),
(16, 'UI/UX Design', 9),
(17, 'Adobe Illustrator', 9),
(18, 'Adobe  Photoshop', 9),
(19, 'HTML', 10),
(20, 'CSS', 10),
(21, 'Bootstrap', 10),
(22, 'Java', 11),
(23, 'PHP', 11),
(24, 'Python', 11),
(25, 'Resumes & Cover Letter', 12),
(26, 'Article and Blog Writing', 12),
(27, 'Translation', 12),
(28, 'English', 13),
(29, 'Mathematics', 13),
(30, 'Science', 13),
(31, 'Digital Photography', 14),
(32, 'Painting', 14),
(33, 'Camera Guide', 14),
(39, 'WebWithPython', 8);

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `t_id` int(11) NOT NULL,
  `term` varchar(100) NOT NULL,
  `for_whom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`t_id`, `term`, `for_whom`) VALUES
(5, 'Every Teacher Should be Paypal Account', 'Student'),
(6, 'Every Teacher Must Have an Account', 'Teacher'),
(7, 'Every Teacher should be Age of greatert than 25', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(100) NOT NULL,
  `c_title` varchar(200) NOT NULL,
  `price` int(10) NOT NULL,
  `t_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `c_title`, `price`, `t_name`, `image`, `video`) VALUES
(1, '', 5000, 'Hasan', 'IMG_20190205_135623.jpg', '5.jpg'),
(2, '', 5000, 'Hasan', 'IMG_20190205_135623.jpg', '5.jpg'),
(3, '', 10000, 'Sabbir', 'top_course1.jpg', 'top_course3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `email`, `pass`, `firstname`, `lastname`, `phone`, `role`) VALUES
(1, 'hasan.cse.duet@gmail.com', '12345', 'Mahamud', 'ul-Hasan', 1839786366, 'Admin'),
(2, 'sabbir.cse.duet@gmail.com', '13579', 'Sabbir', 'Hossain', 1826559551, 'Admin'),
(3, 'imranmolla@gmail.com', '12345', 'Imran', ' Molla', 1782426382, 'user'),
(6, 'hanif@gamil.com', '12345', 'Hanif', ' Hasan', 1826559551, 'user'),
(7, 'robin@gmail.com', '12345', 'Robin', ' Shek', 1826559551, 'user'),
(8, 'anikkumar@gmail.com', '12345', 'Anik', ' Kumar', 1826559551, 'user'),
(9, 'saifult@gamil.com', '12345', 'Saiful', ' Isalm', 1826559551, 'user'),
(10, 'tanvirhossain@gmail.com', '12345', 'Tanvir', ' Hossain', 1632394279, 'user'),
(12, 'karim@gmail.com', '12345', 'Karim', 'Ullah', 1782426382, 'user'),
(13, 'tamgid@gamil.com', '12345', 'Tamgid', 'Islam', 1782426382, 'user'),
(14, 'rahim@gmail.com', '12345', 'Rahim', 'Uddin', 1826559551, 'user'),
(15, 'abutaher@gmail.com', '12345', 'Abu ', 'Taher', 344342343, 'user'),
(16, 'faysal@gmail.com', '12345', 'Faysal', 'Islam', 1123243434, 'user'),
(17, 'hamidul@gamil.com', '12345', 'Hamidul', 'Islam', 43423423, 'user'),
(18, 'mamun@gmail.com', '12345', 'Mamun', 'Biswash', 1211212454, 'user'),
(19, 'tarik@gmail.com', '12345', 'Tarik', 'Isalm', 2147483647, 'user'),
(20, 'akbar@gmail.com', '12', 'akbar', 'Hossain', 2147483647, 'user'),
(21, 'robiul@gmail.com', '12345', 'Robiul ', 'Islam', 232434234, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `cata`
--
ALTER TABLE `cata`
  ADD PRIMARY KEY (`cata_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `sub_cata`
--
ALTER TABLE `sub_cata`
  ADD PRIMARY KEY (`sub_cata_id`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cata`
--
ALTER TABLE `cata`
  MODIFY `cata_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `con_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `q_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_cata`
--
ALTER TABLE `sub_cata`
  MODIFY `sub_cata_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
