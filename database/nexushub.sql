-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2023 at 12:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
  `photo` varchar(50) NOT NULL,
  `prog_desc` text NOT NULL,
  `prog_content` text NOT NULL,
  `reference` varchar(100) DEFAULT NULL,
  `prog_video` varchar(100) NOT NULL,
  `prog_test` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `publish_date` date NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prog_lang`
--

INSERT INTO `prog_lang` (`prog_id`, `prog_title`, `photo`, `prog_desc`, `prog_content`, `reference`, `prog_video`, `prog_test`, `cat_id`, `publish_date`, `time`) VALUES
(1, 'What is Python', 'blog-1.png', 'Python is a high-level, general-purpose, and very popular programming language. Python programming language (latest Python 3) is being used in web development, Machine Learning applications, along with all cutting-edge technology in Software Industry.\n\nPython language is being used by almost all tech-giant companies like – Google, Amazon, Facebook, Instagram, Dropbox, Uber… etc.', 'Python is a general-purpose, dynamic, high-level, and interpreted programming language. It supports Object Oriented programming approach to develop applications. It is simple and easy to learn and provides lots of high-level data structures.\n\nPython is an easy-to-learn yet powerful and versatile scripting language, which makes it attractive for Application Development.\n\nWith its interpreted nature, Python\'s syntax and dynamic typing make it an ideal language for scripting and rapid application development.\n\nPython supports multiple programming patterns, including object-oriented, imperative, and functional or procedural programming styles.\n\nPython is not intended to work in a particular area, such as web programming. It is a multipurpose programming language because it can be used with web, enterprise, 3D CAD, etc.\n\nWe don\'t need to use data types to declare variable because it is dynamically typed, so we can write a=10 to assign an integer value in an integer variable.\n\nPython makes development and debugging fast because no compilation step is included in Python development, and the edit-test-debug cycle is very fast.\n\nPython has many web-based assets, open-source projects, and a vibrant community. Learning the language, working together on projects, and contributing to the Python ecosystem are all made very easy for developers.\n\nBecause of its straightforward language framework, Python is easier to understand and write code in. This makes it a fantastic programming language for novices. Additionally, it assists seasoned programmers in writing clearer, error-free code.\n\nPython is an open-source, cost-free programming language. It is utilized in several sectors and disciplines as a result.\n\nIn Python, code readability and maintainability are important. As a result, even if the code was developed by someone else, it is easy to understand and adapt by some other developer.\n\nPython has many third-party libraries that can be used to make its functionality easier. These libraries cover many domains, for example, web development, scientific computing, data analysis, and more.', 'https://www.geeksforgeeks.org/python-programming-language/', 'https://www.youtube.com/embed/Y8Tko2YC5hA?si=eAYW0RDWIzVlVw0L', 'https', 1, '2023-12-16', '2023-12-28 00:05:00'),
(2, 'What is Java?', 'blog-2.png', 'Java is a programming language and a platform. Java is a high level, robust, object-oriented and secure programming language.\n\nJava was developed by Sun Microsystems (which is now the subsidiary of Oracle) in the year 1995. James Gosling is known as the father of Java. Before Java, its name was Oak. Since Oak was already a registered company, so James Gosling and his team changed the name from Oak to Java.', 'Application\nAccording to Sun, 3 billion devices run Java. There are many devices where Java is currently used. Some of them are as follows:\n\nDesktop Applications such as acrobat reader, media player, antivirus, etc.\nWeb Applications such as irctc.co.in, javatpoint.com, etc.\nEnterprise Applications such as banking applications.\nMobile\nEmbedded System\nSmart Card\nRobotics\nGames, etc.\nTypes of Java Applications\nThere are mainly 4 types of applications that can be created using Java programming:\n\n1) Standalone Application\nStandalone applications are also known as desktop applications or window-based applications. These are traditional software that we need to install on every machine. Examples of standalone application are Media player, antivirus, etc. AWT and Swing are used in Java for creating standalone applications.\n\n2) Web Application\nAn application that runs on the server side and creates a dynamic page is called a web application. Currently, Servlet, JSP, Struts, Spring, Hibernate, JSF, etc. technologies are used for creating web applications in Java.\n\n3) Enterprise Application\nAn application that is distributed in nature, such as banking applications, etc. is called an enterprise application. It has advantages like high-level security, load balancing, and clustering. In Java, EJB is used for creating enterprise applications.\n\n4) Mobile Application\nAn application which is created for mobile devices is called a mobile application. Currently, Android and Java ME are used for creating mobile applications.\n\nJava Platforms / Editions\nThere are 4 platforms or editions of Java:\n\n1) Java SE (Java Standard Edition)\nIt is a Java programming platform. It includes Java programming APIs such as java.lang, java.io, java.net, java.util, java.sql, java.math etc. It includes core topics like OOPs, String, Regex, Exception, Inner classes, Multithreading, I/O Stream, Networking, AWT, Swing, Reflection, Collection, etc.\n\n2) Java EE (Java Enterprise Edition)\nIt is an enterprise platform that is mainly used to develop web and enterprise applications. It is built on top of the Java SE platform. It includes topics like Servlet, JSP, Web Services, EJB, JPA, etc.\n\n3) Java ME (Java Micro Edition)\nIt is a micro platform that is dedicated to mobile applications.\n\n4) JavaFX\nIt is used to develop rich internet applications. It uses a lightweight user interface API.\n\nPrerequisite\nTo learn Java, you must have the basic knowledge of C/C++ programming language.', 'https://www.javatpoint.com/java-tutorial', 'https://www.youtube.com/embed/mAtkPQO1FcA', 'http', 2, '2023-12-16', '2023-12-28 00:07:00'),
(3, 'What is PHP Programming', 'blog-3.png', 'PHP is an open-source, interpreted, and object-oriented scripting language that can be executed at the server-side. PHP is well suited for web development. Therefore, it is used to develop web applications (an application that executes on the server and generates the dynamic page.).', 'PHP is an open-source, interpreted, and object-oriented scripting language that can be executed at the server-side. PHP is well suited for web development. Therefore, it is used to develop web applications (an application that executes on the server and generates the dynamic page.).\n\nPHP was created by Rasmus Lerdorf in 1994 but appeared in the market in 1995. PHP 7.4.0 is the latest version of PHP, which was released on 28 November. Some important points need to be noticed about PHP are as followed:\n\nPHP stands for Hypertext Preprocessor.\nPHP is an interpreted language, i.e., there is no need for compilation.\nPHP is faster than other scripting languages, for example, ASP and JSP.\nPHP is a server-side scripting language, which is used to manage the dynamic content of the website.\nPHP can be embedded into HTML.\nPHP is an object-oriented language.\nPHP is an open-source scripting language.\nPHP is simple and easy to learn language.\nWhy use PHP\nPHP is a server-side scripting language, which is used to design the dynamic web applications with MySQL database.\n\nIt handles dynamic content, database as well as session tracking for the website.\nYou can create sessions in PHP.\nIt can access cookies variable and also set cookies.\nIt helps to encrypt the data and apply validation.\nPHP supports several protocols such as HTTP, POP3, SNMP, LDAP, IMAP, and many more.\nUsing PHP language, you can control the user to access some pages of your website.\nAs PHP is easy to install and set up, this is the main reason why PHP is the best language to learn.\nPHP can handle the forms, such as - collect the data from users using forms, save it into the database, and return useful information to the user..', 'https://www.javatpoint.com/php-tutorial', 'https://www.youtube.com/embed/KBT2gmAfav4', 'abc', 3, '2023-12-16', '2023-12-28 00:03:00'),
(4, 'HTML', 'blog-5.png', 'HTML tutorial or HTML 5 tutorial provides basic and advanced concepts of HTML. Our HTML tutorial is developed for beginners and professionals. In our tutorial, every topic is given step-by-step so that you can learn it in a very easy way. ', 'HTML stands for Hyper Text Markup Language\nHTML is the standard markup language for creating Web pages\nHTML describes the structure of a Web page\nHTML consists of a series of elements\nHTML elements tell the browser how to display the content\nHTML elements label pieces of content such as \"this is a heading\", \"this is a paragraph\", \"this is a link\", etc.', 'https://www.javatpoint.com/html-tutorial', 'https://www.youtube.com/embed/i94zoNYSFik', 'abc', 4, '2023-12-16', '2023-12-28 00:00:00');

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

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `username` varchar(20) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`username`, `fullname`, `password`, `email`, `phone`, `gender`) VALUES
('prakash', '', '123', '', 0, ''),
('kishan', '', '123', '', 0, ''),
('khant', 'kishan', '123', 'khan', 123, 'none'),
('khant', 'kishan', '123', 'khan', 123, 'none'),
('shizu', 'shehnaz', '123', 's@123', 1234, 'female');

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
