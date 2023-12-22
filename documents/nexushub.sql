-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2023 at 12:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nexushub`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(50) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `blog_cont` text NOT NULL,
  `blog_desc` text NOT NULL,
  `blog_photo` varchar(100) NOT NULL,
  `blog_date` datetime NOT NULL,
  `publish_by` varchar(50) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_title`, `cat_id`, `blog_cont`, `blog_desc`, `blog_photo`, `blog_date`, `publish_by`, `time`) VALUES
(1, 'Traveling', 13, 'VISITING BANGKOK: MY SUGGESTED 3-5 DAY ITINERARY', 'when I first visited Bangkok in 2006, I despised the city and couldn’t wait to leave. It wasn’t until I lived in Bangkok that I really fell in love with it.\r\n\r\nA decade and a half later, Bangkok is still one of my favorite cities in the world. It just takes a little time to get to know and love.\r\n\r\nBangkok is not a city that opens itself up easily, and most people spend just a day or two here before leaving to go to the islands or the jungle. While the city may not have a lot of “tourist attractions” like Paris or London, that’s because Bangkok is a place to wander, eat, and imbibe. It is a city that reveals itself to people who get away from the temples, touts, and tourists and get into the local way of life. That’s where you find the beauty Bangkok has to offer.\r\n\r\nThat said, there are a lot of things to do and see in Bangkok. Cheap things, expensive things, unique things, and outdoor things. Bangkok has a bit of everything.\r\n\r\n', 'images/bangkok.jpeg', '2023-06-30 00:00:00', 'Prakhon Phumisorn', '2023-12-22 00:30:00'),
(2, 'Food', 14, 'FRIED FISH CAKES', 'Thai fish cakes are a delicious celebration of the sea infused with aromatic Thai flavors. These cakes are usually deep fried, but my streamlined version achieves the same crispy goodness by panfrying, which is a lot less messy and allows you to call them “lightly fried” with a straight face. Flavored with kaffir lime leaves and red curry paste, and served with a sweet and tart dipping sauce, these fish cakes are jam packed with intensity and eating these is as close as I’m going to get to a Thai beach vacation this year. Thai fried fish cakes are everywhere in Thailand, sold from street vendors and market stalls all over the coasts.', 'images/fishcake.jpeg', '2023-12-20 12:06:25', 'Sing Harit Cheewagaroon', '2023-05-11 00:30:30'),
(3, 'Culture', 15, 'Garba to Durga Puja, 15 Indian Favourites on UNESCO’s List of Intangible Cultural Heritage', 'Anyone who has witnessed a garba performance will testify that the air is electrifying — the dancers moving in circles; their rhythmic motion characterised by sweeping actions from side to side; the folk music accompanying their clockwork steps; and the snaps, claps and twirls creating a colourful blur. The energy is almost divine.', 'images/garba.jpeg', '2015-11-10 16:01:55', 'Parul Patel', '2023-12-22 00:30:30'),
(4, 'Entertainment', 6, 'Khichdi 2 (2023): Crash Landing For “Mission Paanthukistan”!', 'Behold a hilarious comedy-drama that can make you laugh your heads off! Today, I will review the sequel to one of my favorite Bollywood comedy movies “Khichdi: The Movie” which was released in 2010. I have watched this film over and over again! Its sequel titled “Khichdi 2: Mision Paanthukistan” had its theatrical release after 13 years on November 17, 2023.', 'images/khichdi.jpeg\r\n', '2023-11-29 16:20:24', 'Subhadeep Kumar Ganguli ', '2023-12-22 00:30:30'),
(5, 'Computer', 5, 'A MODERN APPROACH TO DATA PROTECTION\r\n', 'Today’s complex cyberattack landscape requires a streamlined data protection and backup strategy that keeps small and midsized business flowing.', 'images/computer.jpeg', '2022-05-06 16:44:06', 'Esther Shein', '2023-12-22 00:30:30');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Python'),
(2, 'Java'),
(3, 'PHP'),
(4, 'HTML'),
(5, 'Android'),
(6, 'Movie'),
(7, 'Drama'),
(8, 'Web Series'),
(9, 'Short Series'),
(10, 'Kids'),
(11, 'Korean'),
(12, 'Japanese'),
(13, 'Traveling'),
(14, 'Food'),
(15, 'Culture');

-- --------------------------------------------------------

--
-- Table structure for table `entertainment`
--

CREATE TABLE `entertainment` (
  `ent_id` int(11) NOT NULL,
  `ent_title` varchar(50) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `Region_id` int(11) NOT NULL,
  `publish_date` date NOT NULL,
  `view_link` text NOT NULL,
  `poster` varchar(50) NOT NULL,
  `time_dur` time NOT NULL,
  `keywords` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `entertainment`
--

INSERT INTO `entertainment` (`ent_id`, `ent_title`, `cat_id`, `Region_id`, `publish_date`, `view_link`, `poster`, `time_dur`, `keywords`) VALUES
(1, 'Padmaavat', 6, 1, '2018-01-25', 'https://www.primevideo.com/detail/0LCQGVFVLNI8MOOGAT6T4611H2/ref=atv_dp_share_cu_r', 'images/padmaavat.jpeg', '02:47:00', 'padmavati, dipika, ranvir, bollywood, india '),
(2, 'Run BTS', 7, 3, '2021-09-14', 'https://youtu.be/IeWZPlkW5lc?si=YhEP-WUiEnodfq_C', 'images/Run.jpeg', '00:30:00', 'BTS, South Korea, Kpop'),
(3, 'True Beauty', 7, 3, '2020-12-09', 'https://www.bing.com/ck/a?!&&p=5fea967f850e6489JmltdHM9MTcwMzAzMDQwMCZpZ3VpZD0xYTFhNzY3Yy05OWMyLTZhOWQtMDk1MC02NTkwOTgzYTZiNDMmaW5zaWQ9NTIyNg&ptn=3&ver=2&hsh=3&fclid=1a1a767c-99c2-6a9d-0950-6590983a6b43&psq=true+beauty&u=a1aHR0cHM6Ly93d3cudmlraS5jb20vdHYvMzczNzRjLXRydWUtYmVhdXR5&ntb=1', 'images/beauty.jpg', '01:00:00', 'kdrama, kpop, korea, seoul'),
(4, 'Bhool Bhulaiya', 6, 1, '2022-03-01', 'https://www.bing.com/ck/a?!&&p=ac720b8c070c1fb3JmltdHM9MTcwMzAzMDQwMCZpZ3VpZD0xYTFhNzY3Yy05OWMyLTZhOWQtMDk1MC02NTkwOTgzYTZiNDMmaW5zaWQ9NTIzMg&ptn=3&ver=2&hsh=3&fclid=1a1a767c-99c2-6a9d-0950-6590983a6b43&psq=bhool+bhulaiyaa&u=a1aHR0cHM6Ly93d3cuaG90c3Rhci5jb20vaW4vbW92aWVzL2Job29sLWJodWxhaXlhYS8xMjYwMDg0NDU2L3dhdGNo&ntb=1', 'images/bhulaiya.jpeg', '02:28:28', 'Mystery, Horror, Monjholika, Comedy, india'),
(5, 'Titanic', 6, 4, '1997-11-18', 'https://www.justwatch.com/us/movie/titanic-1997', 'images/titanic.jpeg', '01:00:00', 'titanic, hollywood, bermuda, america, russia');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `gal_id` int(11) NOT NULL,
  `gal_title` varchar(50) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `keywords` varchar(100) NOT NULL,
  `upload_time` datetime NOT NULL,
  `upload_by` varchar(50) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `lang_id` int(11) NOT NULL,
  `lang_title` varchar(50) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `Region_id` int(11) NOT NULL,
  `lang_cont` text NOT NULL,
  `test_link` varchar(50) NOT NULL,
  `lang_photo` varchar(50) NOT NULL,
  `video_link` varchar(100) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prog_lang`
--

CREATE TABLE `prog_lang` (
  `prog_id` int(11) NOT NULL,
  `prog_title` varchar(50) NOT NULL,
  `prog_desc` text NOT NULL,
  `reference` varchar(100) DEFAULT NULL,
  `prog_video` varchar(100) NOT NULL,
  `prog_test` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prog_lang`
--

INSERT INTO `prog_lang` (`prog_id`, `prog_title`, `prog_desc`, `reference`, `prog_video`, `prog_test`, `cat_id`, `time`) VALUES
(1, 'Python Programming', 'Python is a high-level, general-purpose, and very popular programming language. Python programming language (latest Python 3) is being used in web development, Machine Learning applications, along with all cutting-edge technology in Software Industry.\r\n\r\nPython language is being used by almost all tech-giant companies like – Google, Amazon, Facebook, Instagram, Dropbox, Uber… etc.', 'https://www.geeksforgeeks.org/python-programming-language/', 'https://youtu.be/eWRfhZUzrAc?si=kskvPBjIoS0gWQj3', 'https', 1, '2023-12-16 09:26:25'),
(2, 'Java programming ', 'Java is a programming language and a platform. Java is a high level, robust, object-oriented and secure programming language.\r\n\r\nJava was developed by Sun Microsystems (which is now the subsidiary of Oracle) in the year 1995. James Gosling is known as the father of Java.According to SunDesktop ApplicationsMobile\r\nEmbedded System\r\nSmart Card\r\nRobotics\r\nGames, etc.', 'https://www.javatpoint.com/java-tutorial', 'https://youtu.be/UmnCZ7-9yDY?si=2xtatMa-4hJTjXvA', 'http', 2, '2023-12-16 09:58:24'),
(3, 'PHP Programming', 'PHP is an open-source, interpreted, and object-oriented scripting language that can be executed at the server-side. PHP is well suited for web development. Therefore, it is used to develop web applications (an application that executes on the server and generates the dynamic page.).\r\n\r\nPHP was created by Rasmus Lerdorf in 1994 but appeared in the market in 1995. PHP 7.4.0 is the latest version of PHP, which was released on 28 November.', 'https://www.javatpoint.com/php-tutorial', 'https://youtu.be/OK_JCtrrv-c?si=UvHDAItQUZrpeX7I', 'abc', 3, '2023-12-16 10:04:34'),
(4, 'HTML', 'HTML stands for HyperText Markup Language.\r\nHTML is used to create web pages and web applications.\r\nHTML is widely used language on the web.\r\nWe can create a static website by HTML only.\r\nTechnically, HTML is a Markup language rather than a programming language.HTML with CSS and JavaScript you will be able to create your own interactive and dynamic website.', 'https://www.javatpoint.com/html-tutorial', 'https://youtu.be/HcOc7P5BMi4?si=Hq6SE1LwsRP1Uui8', 'abc', 4, '2023-12-16 10:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `Region_id` int(11) NOT NULL,
  `Region_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`Region_id`, `Region_name`) VALUES
(1, 'India'),
(2, 'Thailand'),
(3, 'Korea'),
(4, 'America'),
(5, 'Japan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `fk_blog_category` (`cat_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `entertainment`
--
ALTER TABLE `entertainment`
  ADD PRIMARY KEY (`ent_id`),
  ADD KEY `fk_entertainment_category` (`cat_id`),
  ADD KEY `fk_entertainment_region` (`Region_id`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`gal_id`),
  ADD KEY `fk_gallary_category` (`cat_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`lang_id`),
  ADD KEY `fk_language_category` (`cat_id`),
  ADD KEY `fk_language_region` (`Region_id`);

--
-- Indexes for table `prog_lang`
--
ALTER TABLE `prog_lang`
  ADD PRIMARY KEY (`prog_id`),
  ADD KEY `fk_prog_lan_category` (`cat_id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`Region_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `entertainment`
--
ALTER TABLE `entertainment`
  MODIFY `ent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
  MODIFY `gal_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `lang_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prog_lang`
--
ALTER TABLE `prog_lang`
  MODIFY `prog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `fk_blog_category` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);

--
-- Constraints for table `entertainment`
--
ALTER TABLE `entertainment`
  ADD CONSTRAINT `fk_entertainment_category` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`),
  ADD CONSTRAINT `fk_entertainment_region` FOREIGN KEY (`Region_id`) REFERENCES `region` (`Region_id`);

--
-- Constraints for table `gallary`
--
ALTER TABLE `gallary`
  ADD CONSTRAINT `fk_gallary_category` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);

--
-- Constraints for table `language`
--
ALTER TABLE `language`
  ADD CONSTRAINT `fk_language_category` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`),
  ADD CONSTRAINT `fk_language_region` FOREIGN KEY (`Region_id`) REFERENCES `region` (`Region_id`);

--
-- Constraints for table `prog_lang`
--
ALTER TABLE `prog_lang`
  ADD CONSTRAINT `fk_prog_lan_category` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
