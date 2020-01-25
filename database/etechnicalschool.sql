-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 07:49 AM
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
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(20) NOT NULL,
  `course_id` int(200) NOT NULL,
  `video_title` varchar(200) NOT NULL,
  `thumbnail` varchar(200) NOT NULL,
  `video` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_id`, `video_title`, `thumbnail`, `video`) VALUES
(1, 6, 'Introduction to Web Development', 'cc2c1013b79379fe1fe614550f117673.jpg', 'ad585ed117f5b27292335c33f94ed43e.mkv'),
(2, 8, 'Introduction to Writing', '5fe8c0561f4516c7dc4b2bbef4f202a2.jpg', '26812c149644bc35964c6ad8fa85a989.mp4'),
(3, 10, 'Prerequsite to start the course', '5ee69bbfe28e15555f68eaf8dfa4cd73.png', '652422a231a9ad93fc25338f59d4a0dc.mp4'),
(5, 11, 'Introduction to Photography', 'f857df1cd69c809e228fb12ce20f5f70.jpg', '71fc2b4e27c20b68fe437185711f485b.mp4'),
(6, 11, 'How to Setup Related Software', '19d0949df8bbed7a9430c217c0c652e3.jpg', '9ba020ffbe4391c4d373b047f77fa0bd.mp4'),
(7, 11, 'How to Setup  Software on Windows', '1daf05d3c8a2938dac88312f354ed0ca.jpg', '6cc06bddb96100896a05bc25511c0081.mp4'),
(8, 8, 'How to Start Wrinting', '898c8b2a1a6541de46d200373899b0a5.jpg', '620f223ade25965d036aabaeee659548.mp4'),
(9, 7, 'Software Installation', 'daa535c953ce2347bc4b4f486e85a98c.jpg', '90dfb51bd8740b3c8c4d9bf15fbe5f3f.mp4'),
(10, 6, 'Software Installation', '1b48763f72332f6dde44be86ee7381f3.jpg', 'd0f88d951d33954a7b4041eecfba8f2d.mp4');

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
  `cata_id` int(20) NOT NULL,
  `c_title` varchar(200) NOT NULL,
  `price` int(10) NOT NULL,
  `t_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `video` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `cata_id`, `c_title`, `price`, `t_name`, `image`, `video`) VALUES
(6, 10, 'Full Web Design', 4000, 'Sabbir Hossain', 'fa267567b818057ba412984383f6a05b.jpg', 'e6be66cd48b867e7f045fea26d08f1d8.'),
(7, 8, 'Apps Development', 50000, 'Sabbir Hossain', '3bacf45b07500a88c4b9c616d0a3b435.jpg', '895f17b44caebb909a746cec45b75d27.mkv'),
(8, 12, 'Wrting', 500, 'Sabbir Hossain', 'df27d3665a2ed84c162f533f463669c5.png', '9dfb33e1026ec1fbcbb222961ca3e164.MKV'),
(10, 13, 'English Speaking Crush Course', 5000, 'Sabbir Hossain', '69e2eafae12fb8936c052c5983e203fb.png', 'd70b704865c7ead271b1ae6331f87631.mp4'),
(11, 14, 'PhotoGrapy', 20000, 'Sabbir Hossain', '56f2588708535bac1a82e51a7eda288d.jpg', 'f852349ad9d2d1f151cc93c6be73ee35.mp4'),
(12, 22, 'Advace Presentation Learning', 1500, 'Sabbir Hossain', '43521081000583fe016a3fa51879af45.jpg', '62ca08fb6ad1d1afcaed4a30fee5a662.mp4'),
(13, 23, 'Music Learning', 30000, 'Sabbir Hossain', 'b63e0849d28de32b20b9fb9edd1817f3.jpg', '7cd1e9172efef26c77813431895370a3.mp4'),
(14, 24, 'Grow Your Business with Experties', 10000, 'Sabbir Hossain', '9c3cea704c65713f1a1ff6c7138f57f5.jpg', 'b179bc25d41c175aa2ddea992ebe0299.mp4'),
(15, 25, 'Advance Video Editing', 70000, 'Hasan', '29ea5fda269c77db6364603148b05f7c.png', '5938ce5c55857720eca2cc1b5e7ed4df.mp4'),
(16, 26, 'Learn Latest Fashion', 6000, 'Tamgid', 'af31a9e0c2dd36a057419272a7fc10ac.png', '0ac960be02cdc556d0dbfbec35b0a128.mp4'),
(17, 27, 'Basic Islamic Study', 90000, 'Tamgid', '3cbb72c27aa6c4a27a59b7a74ae14c09.jpg', '6ffa966ef85fac70ab6685a306615d13.mp4'),
(18, 30, 'Learn Video Graphy', 6000, 'Kibria', 'af50d380a05557c5eb869d94dc32f36d.jpg', '2814b62fd5ca3a1da749015da3a36775.mp4'),
(19, 35, '10 Soft Skill', 2000, 'Robin', 'e3d1fe08289fa5f55d3edf819c8bddb1.jpg', '9d9e02e0269ae824bdfb6b8fe52943d4.mp4'),
(20, 36, 'How to Reach People', 70000, 'Hanif Sarkar', '7a4914c5157f31cf843e9b77393fac41.png', 'a6f7b4af3b2f18a9d227f51327601f07.mp4');

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
(21, 'robiul@gmail.com', '12345', 'Robiul ', 'Islam', 232434234, 'user'),
(22, 'sujit@gmail.com', '12345', 'Sujit', 'Gumsta', 1211212454, 'Admin'),
(23, 'tanjil@gmail.com', '123', 'kibria', 'Tanzil', 1232423432, 'user'),
(24, 'rakib@gmail.com', '12345', 'Rakibul', 'Hasan', 12345, 'user');

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
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `cata_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `con_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
