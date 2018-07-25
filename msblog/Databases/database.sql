-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 20, 2018 at 03:03 AM
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
  `post_image` longblob NOT NULL,
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
(43, 44, 'MIT\'s Cheetah 3', 'Nikhil Gupta', '2018-07-19', 0x64696d732e6a706567, '            Source:- Engadget\r\n\r\nMany robots depend on cameras and other visual sensors to find their way around the world. But that\'s not always realistic -- it can be too dark, too chaotic or even play tricks. Thankfully, MIT is prepared. The latest version of its Cheetah robot, Cheetah 3, can run, climb and even jump using contact detection alone -- effectively, while it\'s blind. The cat-like automaton relies on a pair of algorithms to both \'feel\' its way around (much as you would feel your way to the bathroom in the middle of the night) and figures out the best way to move forward.\r\n\r\nThe first algorithm uses accelerometers, gyroscopes and leg joint positions to calculate the probabilities of legs making contact, generating force and getting caught in mid-swing. If Cheetah steps on an unexpected obstacle, it can determine whether each leg should push down or lift away. The second algorithm, meanwhile, predicts the robot\'s positioning so that it can quickly react to its situation. Even if you push the robot around, it\'ll know how to get back on track.\r\n\r\nMIT doesn\'t expect robots to rely exclusively on this technology. Most likely, it would be used as a backup for moments when a robot either can\'t see properly or hits an obstacle it wasn\'t expecting (say, something interfering with its hind legs). That could make it useful for power plant inspections, remote rescues and other dangerous situations where there\'s no help if a robot gets stuck or falls over.          ', 'robot,robotics,mit,cheetah,innovation', 11, 'published', 138),
(55, 44, ' Apple announces clean energy fund in China', 'Nikhil Gupta', '2018-07-20', 0x4170706c655f636c65616e5f656e657267795f66756e645f436f6d70616c2d536f6c61725f30373132323031382e6a7067, '                Apple has announced a new investment fund to foster clean energy usage in China. The company isn’t just trying to switch its own offices and facilities. Apple is also working with its suppliers to expand the use of clean energy across the board.\r\n\r\nFor this fund, in particular, Apple and 10 suppliers will invest $300 million over the next four years. Overall, the company expects to finance multiple clean energy projects to produce 1 gigawatt of renewable energy in China.\r\n\r\nApple isn’t going to manage the fund itself. The company is partnering with DWS Group, a division of Deutsche Bank. DWS will also participate in the fund.\r\n\r\nThe company started working on renewable energy projects a few years ago. Earlier this year, Apple claimed that 100 percent of its offices, retail stores, data centres and Apple-owned facilities are now powered by renewable energy.\r\n\r\nApple is not there yet when it comes to suppliers. The company has launched the Supplier Clean Energy Program back in 2015 with 23 manufacturing partners, and regularly shares updates — Foxconn seems to be missing so far.\r\n\r\nBy 2020, Apple and its suppliers hope to generate 4 gigawatts of clean energy. And let’s be honest, this is great news for the planet.        ', 'apple,tech,innovation,solar,energy,renewable', 0, 'published', 6),
(62, 44, 'Facebook will prioritize removing fake news that incites violence', 'Nikhil Gupta', '2018-07-20', 0x64696d73202831292e6a706567, 'Source:- Engadget\r\n\r\nDuring a recent congressional hearing, Facebook showed that its policies could use a bit of work when it comes to addressing posts threatening violence. Now, the tech giant has finally taken steps to combat that particular issue, announcing a policy change that will allow it to take down fake news posts that incite violence and physical harm. A spokesperson told CNBC that it will begin implementing the new rule, which will cover both text and image posts, \"during the coming months.\"\r\n\r\nAccording to The New York Times, the new policy is largely a response to the role Facebook played in the violent attacks on Muslims that took place in Sri Lanka, Myanmar and India. In Sri Lanka, for instance, riots broke out after rumours went around on the platform, accusing Muslims of poisoning food given or sold to Buddhists. Facebook was also accused of helping promote violence against Rohingya Muslims in Myanmar by allowing misinformation to circulate on its website.\r\n\r\nThe company will reportedly use its image recognition tech to spot status updates that violate the new rule. CNBC says it will also work with local and international organizations to help it spot and verify the fake news. See, while it plans to take down posts that encourage harm, it will only de-emphasize fake news that doesn\'t incite violence in people\'s Feeds. That\'s where those partner groups come in.\r\n\r\nAs for what kind of posts don\'t deserve to be banned, Facebook chief Mark Zuckerberg gave Holocaust denial as an example in his interview with Recode. That obviously caused an uproar, prompting him to clarify that while he \"personally find[s] Holocaust denial deeply offensive,\" Facebook\'s goal is \"not to prevent anyone from saying something untrue -- but to stop fake news and misinformation spreading across [its] services.\"  ', 'facebook,fb,news,fake,violence', 0, 'published', 1),
(63, 44, 'Corning Gorilla Glass 6 is customisable, 2X stronger than Gorilla Glass 5, and can survive 15 drops', 'Nikhil Gupta', '2018-07-20', 0x636f726e696e672e6a706567, 'Source:- Digit.in\r\nCorning has unveiled the next generation of Gorilla Glass called Gorilla Glass 6. There is no information on when we will see Gorilla Glass 6 on smartphones, but it is expected to make its debut before the end of the year, possibly on the Samsung Galaxy Note9. Corning claims that Gorilla Glass 6 can survive 15 drops from 1 meter onto rough surfaces, and is up to two times better than Gorilla Glass 5. Coming to the scratch resistance, it remains the same as the previous generation - Gorilla Glass 5.\r\n\r\n“As consumers become more dependent on their smartphones, the opportunity for potentially damaging drops is also on the rise. Now more than ever, it’s critical that the cover glass provides outstanding protection,” said John Bayne, Vice President and General Manager, Corning Gorilla Glass. “Corning Gorilla Glass 6 improves upon Gorilla Glass 5 by surviving drops from higher heights, but, more importantly, has been engineered to survive multiple drops.”\r\n\r\nIn addition to Gorilla Glass 6, Corning also announced Gorilla Glass DX and Corning Gorilla Glass DX+. Gorilla Glass DX and Gorilla Glass DX+ are meant for wearable devices like smartwatches. DX and DX+ feature an antireflective property that improves optical clarity and scratch resistance, while maintaining the toughness and touch sensitivity of Gorilla Glass.  ', 'corning,glass,gorilla,strong,drops', 0, 'published', 0),
(64, 44, 'Samsung\'s new manufacturing plant in Noida is the largest mobile phone factory in the world', 'Nikhil Gupta', '2018-07-20', 0x73616d73756e672e6a706567, 'Source:- Digit.in\r\n\r\nSamsung has set up the world’s largest mobile phone manufacturing facility in Noida, Uttar Pradesh. The factory was inaugurated by PM Narendra Modi and at the event, the company also announced its ‘Make for the World’ initiative, whereby it aims to export mobile handsets that are produced in India to the markets overseas. Samsung is currently producing mobile phones at the rate of 68 million units per year and it says that the new factory will almost double the capacity to 120 million units a year, in a phase-wise expansion that will be completed by 2020.\r\n\r\nThe company’s Noida factory was set up in 1996, which is spread of over 129,000 sq. metres (35 acres approx). On June 7, 2017, Samsung announced that it will invest Rs 4,915 crore in expansion of its Noida plant under the Uttar Pradesh government’s Mega Policy. The Noida plant produces all of the company’s smartphones, including flagships like the Galaxy S9, S9+ and Galaxy Note 8. Additionally, the expansion will also help the company to improve the production capacity of its TVs, refrigerators and other consumer electronics.\r\n\r\n“Our Noida factory, the world’s largest mobile factory, is a symbol of Samsung’s strong commitment to India, and a shining example of the success of the Government’s ‘Make in India’ programme. Samsung is a long-term partner of India. We ‘Make in India’, ‘Make for India’ and now, we will ‘Make for the World’. We are aligned with Government policies and will continue to seek their support to achieve our dream of making India a global export hub for mobile phones,” said HC Hong, Chief Executive Officer of Samsung India.\r\n\r\n\"For Samsung, India is among the top five smartphone markets globally. The US is saturated and Korea and Brazil are not growing significantly. India is a big opportunity across price segments, including 2G feature phones. It makes sense for Samsung to build a bigger manufacturing base here,\" Jaipal Singh, Senior Market Analyst, IDC, told IANS.\r\n\r\nSamsung also has one other manufacturing facility in Sriperumbudur, near Chennai, five R&D centres and one design centre in India. As the demand for phones sedates elsewhere, India and some other countries still show great promise with increased demands. Not only Samsung but other companies like Google, Jio and others are eyeing to connect the next billion users with their devices and services.   ', 'samsung,large,largest,factory,mobile,smartphone,noida,world', 0, 'published', 0);

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
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
