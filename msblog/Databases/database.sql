-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 19, 2018 at 05:40 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `MSclubBlog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(44, 'Robotics'),
(45, 'Technology'),
(46, 'Innovation');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(11) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(1, 43, 'Nikhil Gupta', 'nguptaa183@gmail.com', 'hello', 'approved', '2018-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` longtext NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `post_views_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`, `post_views_count`) VALUES
(43, 44, 'MIT\'s Cheetah 3', 'Nikhil Gupta', '2018-07-14', 'dims.jpeg', '    Source:- Engadget\r\n\r\nMany robots depend on cameras and other visual sensors to find their way around the world. But that\'s not always realistic -- it can be too dark, too chaotic or even play tricks. Thankfully, MIT is prepared. The latest version of its Cheetah robot, Cheetah 3, can run, climb and even jump using contact detection alone -- effectively, while it\'s blind. The cat-like automaton relies on a pair of algorithms to both \'feel\' its way around (much as you would feel your way to the bathroom in the middle of the night) and figures out the best way to move forward.\r\n\r\nThe first algorithm uses accelerometers, gyroscopes and leg joint positions to calculate the probabilities of legs making contact, generating force and getting caught in mid-swing. If Cheetah steps on an unexpected obstacle, it can determine whether each leg should push down or lift away. The second algorithm, meanwhile, predicts the robot\'s positioning so that it can quickly react to its situation. Even if you push the robot around, it\'ll know how to get back on track.\r\n\r\nMIT doesn\'t expect robots to rely exclusively on this technology. Most likely, it would be used as a backup for moments when a robot either can\'t see properly or hits an obstacle it wasn\'t expecting (say, something interfering with its hind legs). That could make it useful for power plant inspections, remote rescues and other dangerous situations where there\'s no help if a robot gets stuck or falls over.      ', 'robot,robotics,mit,cheetah,innovation', 11, 'published', 138),
(55, 45, ' Apple announces clean energy fund in China', 'Nikhil Gupta', '2018-07-16', 'Apple_clean_energy_fund_Compal-Solar_07122018.jpg', 'Apple has announced a new investment fund to foster clean energy usage in China. The company isn’t just trying to switch its own offices and facilities. Apple is also working with its suppliers to expand the use of clean energy across the board.\r\n\r\nFor this fund, in particular, Apple and 10 suppliers will invest $300 million over the next four years. Overall, the company expects to finance multiple clean energy projects to produce 1 gigawatt of renewable energy in China.\r\n\r\nApple isn’t going to manage the fund itself. The company is partnering with DWS Group, a division of Deutsche Bank. DWS will also participate in the fund.\r\n\r\nThe company started working on renewable energy projects a few years ago. Earlier this year, Apple claimed that 100 percent of its offices, retail stores, data centres and Apple-owned facilities are now powered by renewable energy.\r\n\r\nApple is not there yet when it comes to suppliers. The company has launched the Supplier Clean Energy Program back in 2015 with 23 manufacturing partners, and regularly shares updates — Foxconn seems to be missing so far.\r\n\r\nBy 2020, Apple and its suppliers hope to generate 4 gigawatts of clean energy. And let’s be honest, this is great news for the planet.', 'apple,tech,innovation,solar,energy,renewable', 0, 'published', 3),
(56, 44, 'dksajdaskld', 'Nikhil Gupta', '2018-07-17', '', 'fsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfddfsdfdsfsdfdsfdd', 'fdsf,sdfdsf,sdfdsfs', 0, 'published', 13),
(57, 44, 'Lorem ipsum', 'Nikhil Gupta', '2018-07-18', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'robot,robotics,mit,cheetah,innovation', 0, 'published', 0),
(58, 44, 'Lorem ipsum', 'Nikhil Gupta', '2018-07-18', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'robot,robotics,mit,cheetah,innovation', 0, 'published', 0),
(59, 44, 'Lorem ipsum', 'Nikhil Gupta', '2018-07-18', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'robot,robotics,mit,cheetah,innovation', 0, 'published', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `oauth_provider` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$5$rounds=5000$usesomesillystringforsalt$',
  `link` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `oauth_provider`, `oauth_uid`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `gender`, `locale`, `user_image`, `user_role`, `randSalt`, `link`, `created`, `modified`) VALUES
(21, '', '', 'ngupta', '$5$rounds=5000$usesomesillystri$Lox/4qPTyy4o1AGHWl8U0YsAUkUwG.l9sljNj4PljWB', 'Nikhil', 'Gupta', 'nguptaa183@gmail.com', '', '', '', 'admin', '$5$rounds=5000$usesomesillystringforsalt$', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'google', '104263081220500823024', '', '', 'Nikhil', 'Gupta', 'addicniku@gmail.com', 'male', 'en-GB', 'https://lh4.googleusercontent.com/-rtSuyYNjBAc/AAAAAAAAAAI/AAAAAAAAC7s/4vgMFuG06-M/photo.jpg', 'subscriber', '$5$rounds=5000$usesomesillystringforsalt$', 'https://plus.google.com/104263081220500823024', '2018-07-10 13:05:01', '2018-07-11 03:29:22'),
(32, 'google', '114616178372878546288', '', '', 'utkarsh', 'Singh', 'utkarshs977@gmail.com', '', 'en-GB', 'https://lh3.googleusercontent.com/-Cgx8rhR2btA/AAAAAAAAAAI/AAAAAAAAAAA/AAnnY7rrJ55kRvZBKmvh3QH3r6D3u2IJ7Q/mo/photo.jpg', 'subscriber', '$5$rounds=5000$usesomesillystringforsalt$', '', '2018-07-11 03:43:37', '2018-07-11 05:47:14'),
(33, '', '', 'chetasr', '$5$rounds=5000$usesomesillystri$ab.f2aMnfTJUl/UZrF7u//Q2LdndcUF1VBg/R5rwlU0', 'Chetas', 'Rao', 'thephamtomblu@gmail.com', '', '', '', 'subscriber', '$5$rounds=5000$usesomesillystringforsalt$', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
