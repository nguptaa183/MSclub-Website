-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 21, 2017 at 05:01 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `cms`
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
(39, 'college'),
(40, 'placement'),
(43, 'clubs');

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
(16, 9, 'Mdave', 'mdave@xyz.com', 'bla bla bla', 'approved', '2017-11-12'),
(17, 11, 'dkhsr', 'jkhtlh@sdjkhsdjkf.com', 'sjgfkgb\r\n\r\n', 'approved', '2017-11-13'),
(18, 12, 'kdjrlksjl', 'kfjdlkjfs@kjlskjf', 'kdsjfksdjfskd', 'unapproved', '2017-11-16'),
(19, 30, 'jdhfsd', 'kjsdfksdjfl@kdjdlshkf', 'sdkfjdsklfhlsdf', 'approved', '2017-11-20');

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
(22, 43, 'What are the best student organisations or clubs to join at NIT Rourkela? Why should students join them?', 'Payal Agrawal, former Director Nominated General Convenor at National Institute of Technology, Rourkela (2016-2017)', '2017-11-19', '', 'Disclaimer: Long post ahead.\r\n\r\nThe “Best” student clubs of NITR essentially vary with your interests and needs. To name a few, here you go:\r\n\r\nSynergy/Mavericks: If you are a dance enthusiast, and willing to devote your time into the practice hours. A lot of opportunities for group (solo, duet) competitions, physical fitness, and you’d definitely get a new family at NITR. (ago ahead and watch their videos on Youtube.)\r\n2. Heartbeats/Euphony/Drill n Bass: If you are into singing, playing musical instruments and any other music related activity. Euphony is more into the pop culture and rock and metallic beats, Drill n Bass is more into exploring the DJing world.\r\n\r\n3. Cinematics/Third Eye: 1st one if you are a film enthusiast, wanting to learn the in and outs of Film industry: Script writing, acting, sound editing, cinematography, video editing, directing, graphic designing (Watch their videos on Youtube). The 2nd if you are into Photography.\r\n\r\n4. Hourglass/Clarion : 1st is a part of Toastmasters, encouraging Public Speaking. 2nd is a club you’d wanna join for Public Speaking, Debates, improving your communication skills, MUNs, parties. Be ready to devote your time to Clarion’s debate practices as well.\r\n\r\n5. SAE, ASME: Mechanical cars nd vehicles. Student give a lot from their own pocket, for the love of these vehicles, their passion and to bring laurels to NITR in various competitions. Be ready to spend a lot of your time at the Central Workshop.\r\n\r\n6. Aasra, Leo, Rota(ract) : Aasra is pure love, dedication, and service from the heart (not registered under SAC). Join Leo (Student branch of Lions club, Rourkela) for popularity and parties, going hand in hand with social service (visit to old age homes and orphanages, blood donation, clothes and medicines donation, environment care, etc). Rotaract is somewhat similar to Leo.\r\n\r\n7. E-cell: To tickle that entrepreneur within you. Learn the tid bits of the Business World and startup ventures.\r\n\r\n8. Pantomine/Ritvic: Essentially, street plays and stage performances (dramas)\r\n\r\n9. Chitrang/Akriti: 1st: painting, graffiti and art. 2nd: Art and Craft, Sculptures, etc.\r\n\r\n10. Microsoft Campus Club/ Spawn: Coding, web designing, web development, etc.\r\n\r\n11. Cyborg: Robotics; CEST: Civil Engineering essentials like solid works, AutoCAD, etc. ; AICHE: Chemical Engineering Applications.\r\n\r\n12. Design Tab: Name says it all! For the design enthusiasts. Poster design, material design, graphic design, website design, etc. You say it, and they do it!\r\n\r\n13. Astro NITR: Interested in Astronomy, the stars, planets, etc? I don’t know how much you’d learn here, but they do organise a lot of Night sky watching and other events for others.\r\n\r\nThere is also a Karate club, Axiom (for Math enthusiast), Inquizzitive (For the quizzers), Chef’s club (For the ones interested in cooking) and Monday Morning (allowed to join as journalist at the end of your 1st year).\r\n\r\nPS: Go ahead with whatever interests you. But remember to never compromise on your academics, especially in the semesters having the maximum credits. You could join multiple clubs, but try to limit it to a maximum of 3, else you’d end up with problems with time management. Happy “Clubing”! :P.', 'club,nitrkl,nit,rourkela,best,payal', 0, 'published', 12),
(23, 39, 'What is the best place in NIT Rourkela? ', 'Archit Acharya, I lived NIT Rourkela.', '2017-11-19', '', '    Well, basically it depends on who you are.\r\n\r\nIf you are one of those love birds, you would spend almost 1 year of your 4 years B.Tech life in front of CVR/KMS or in dark lanes of faculty quarters or the swimming pool post gym hours, dark stairs of DTS, rooftop of BMBT or chemical Building and many more. So these will be best places for you and also obviously in each other’s arms(thats heaven). (Ignoring the latest addition to the list MN International, since it’s outside NIT)\r\nIf you are a sportsman, no matter the poor dusty condition of DTS and STS, you would love spending time there and you will cherish those floodlight lit moments your whole life. Gym guys equally love their time spent in the gym.\r\nThen there are these club people, best places for them are the places where they work. These people(the likes of MM, Cyborg, FSAE, SAE, Aasra, Synergy, Mavericks ) devote their entire time, social life and CGPA to clubs. Thats the best place for them.\r\nSocialite people, these are the humans with the highest degree of socialization, who just don’t sit in their rooms, they move from one room to other and their only motto in life is to socialize and their best place is any place in the company of their friends.\r\nThen there are gamers, who reply to a yes no question in roger that and negative. These are the people with a non-existent social life, whom you know about when the internet is down or at the time of power outage. The best place for them is inside their laptop in their gaming paradise.\r\nThere are a few people whom you can find anytime in the SAC, they make it their home. They are the so called politicians of NIT, some of whom who really work for the fests and happening of the institute and they derive happiness from it. SAC is the best place for them.\r\nBackpost-If one place which not a single guy can forget in NIT is backpost. There small area most probably has the GDP more than that of many villages in India. This place can probably give you everything, except for the sight of NIT girls. Starting from peace of mind one gets with each puff of cigarette, to the manchurian, to the aunty’s samosa chat, to Raju Bhai’s Aloo Paratha, to the lonely walks on the long desolate backpost road, each has a pleasure in itself.\r\nI might have missed few places but thats all for now.\r\n\r\nP.S. Each place that you spend time in with your friends, real or virtual, will be the best place. These 4/5 years will be the best part your entire life. After this life happens.  ', 'college,life,nit,rourkela', 0, 'published', 4),
(26, 39, 'How is CSE at NIT Rourkela?', 'Sanjib Kumar Baral, B.Tech Computer Science and Engineering, National Institute of Technology, Rourkela (2013)', '2017-11-19', '', 'Good thing about CSE at NIT Rourkela is that slowly the coding culture is gaining its pace in the institute. Competitive programming like codechef, topecoder etc. were alien terms in CSE 2 years back. But thanks to our juniors like Swaraj Khadanga Priyansu Singh Aditya Deepak the situation is changed. From participating in ACM ICPC to being in the top ranker in codechef, they have inspired a lot of their batchmates and juniors. Day by day people are more interested in coding and the result of which are also quite impressive. For me NIT Rourkela CSE is moving into period which it has never seen before. Hope the tradition they have started will gain momentum by their successors.\r\n', 'cse,nit,rourkela', 0, 'published', 0),
(27, 39, 'How is life of a student in NIT Rourkela?', 'Pratik Padhi, B.Tech Industrial Design, National Institute of Technology, Rourkela (2018)', '2017-11-19', '', 'If you are inclined towards sports, you will find plenty of opportunities here as well. Show that you got a knack for your sport, and get a spot in hostel teams. You play well, you get selected for institute team. Just stay away from the fucking politics, that messes up your mind.\r\n\r\nThere will be situations where you have got to submit a really important assignment tomorrow but you are clinged to the TV in common room, watching your favourite sport. So are 100 other guys. The crowd there cries and sighs in unison. You will feel it. You will feel it good.\r\n', 'nit,college,rourkela', 0, 'published', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$5$rounds=5000$usesomesillystringforsalt$'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`) VALUES
(13, 'nikhil', '$1$Ft5HwnWa$FFmvSmFK9xN34VSj/PB.j1', '', '', 'nguptaa183@gmail.com', '', 'admin', '$5$rounds=5000$usesomesillystringforsalt$'),
(14, 'chetas', '$5$rounds=5000$usesomesillystri$rQma58McS7VSjXZlUBdjan225LO8rlwObdFfy1cKZJ.', '', '', 'thephantomblu@gmail.com', '', 'subscriber', '$5$rounds=5000$usesomesillystringforsalt$'),
(15, 'panigrahi', '$5$rounds=5000$usesomesillystri$qImdAIJHuXlAfVgD5y1ncPb49h1QX0vcnZ0jKbJs.KC', '', '', 'chillam@bong.com', '', 'subscriber', '$5$rounds=5000$usesomesillystringforsalt$'),
(16, 'kunal', '$5$rounds=5000$usesomesillystri$Fz4L/N8SHJKbDecHzgwFQCtMeef9lMaaSq53WPACl/2', '', '', 'pandey@gandu', '', 'subscriber', '$5$rounds=5000$usesomesillystringforsalt$');

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
MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
