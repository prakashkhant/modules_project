-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2024 at 06:39 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Python'),
(2, 'Java'),
(3, 'PHP'),
(4, 'Java Script'),
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
(15, 'Culture'),
(16, 'Engish'),
(17, 'Korean'),
(18, 'German');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `photopath` text NOT NULL,
  `videopath` text NOT NULL,
  `test_link` text NOT NULL,
  `publish_by` text NOT NULL,
  `publish_date` date NOT NULL,
  `module_id` int(11) NOT NULL,
  `categorie` int(50) NOT NULL,
  `keywords` varchar(50) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `title`, `description`, `content`, `photopath`, `videopath`, `test_link`, `publish_by`, `publish_date`, `module_id`, `categorie`, `keywords`, `time`) VALUES
(1, 'What is Python', 'Python is a simple, general purpose, high level, and object-oriented programming language.', 'Python is a general-purpose, dynamic, high-level, and interpreted programming language. It supports Object Oriented programming approach to develop applications. It is simple and easy to learn and provides lots of high-level data structures.\r\n\r\nPython is an easy-to-learn yet powerful and versatile scripting language, which makes it attractive for Application Development.\r\n\r\nWith its interpreted nature, Python\'s syntax and dynamic typing make it an ideal language for scripting and rapid application development.\r\n\r\nPython supports multiple programming patterns, including object-oriented, imperative, and functional or procedural programming styles.\r\n\r\nPython is not intended to work in a particular area, such as web programming. It is a multipurpose programming language because it can be used with web, enterprise, 3D CAD, etc.\r\n\r\nWe don\'t need to use data types to declare variable because it is dynamically typed, so we can write a=10 to assign an integer value in an integer variable.\r\n\r\nPython makes development and debugging fast because no compilation step is included in Python development, and the edit-test-debug cycle is very fast.\r\n\r\nPython has many web-based assets, open-source projects, and a vibrant community. Learning the language, working together on projects, and contributing to the Python ecosystem are all made very easy for developers.\r\n\r\nBecause of its straightforward language framework, Python is easier to understand and write code in. This makes it a fantastic programming language for novices. Additionally, it assists seasoned programmers in writing clearer, error-free code.\r\n\r\nPython is an open-source, cost-free programming language. It is utilized in several sectors and disciplines as a result.\r\n\r\nIn Python, code readability and maintainability are important. As a result, even if the code was developed by someone else, it is easy to understand and adapt by some other developer.\r\n\r\nPython has many third-party libraries that can be used to make its functionality easier. These libraries cover many domains, for example, web development, scientific computing, data analysis, and more.', 'python.jpg', 'https://www.youtube.com/embed/Y8Tko2YC5hA?si=r6JewjoT4cLz6i_Q', '', 'Shehnaz Saiyad', '2024-01-04', 4, 1, 'python,', '00:03:08'),
(2, 'What is Android', 'Android is a software package and linux based operating system for mobile devices such as tablet computers and smartphones.', 'The important features of android are given below:\r\n\r\n1) It is open-source.\r\n\r\n2) Anyone can customize the Android Platform.\r\n\r\n3) There are a lot of mobile applications that can be chosen by the consumer.\r\n\r\n4) It provides many interesting features like weather details, opening screen, live RSS (Really Simple Syndication) feeds etc.\r\n\r\nIt provides support for messaging services(SMS and MMS), web browser, storage (SQLite), connectivity (GSM, CDMA, Blue Tooth, Wi-Fi etc.), media, handset layout etc.', 'images/android.jpg', 'https://www.youtube.com/embed/NCoekcDxbrI?si=p6rS449oP7q_RpD6', '#', 'Prakash Khant', '2024-01-02', 4, 5, 'android, programming', '00:03:08'),
(3, 'What is JavaScript', 'JavaScript is an object-based scripting language which is lightweight and cross-platform.\r\n\r\nJavaScript is not a compiled language, but it is a translated language. The JavaScript Translator (embedded in the browser) is responsible for translating the JavaScript code for the web browser.', 'JavaScript (js) is a light-weight object-oriented programming language which is used by several websites for scripting the webpages. It is an interpreted, full-fledged programming language that enables dynamic interactivity on websites when applied to an HTML document. It was introduced in the year 1995 for adding programs to the webpages in the Netscape Navigator browser. Since then, it has been adopted by all other graphical web browsers. With JavaScript, users can build modern web applications to interact directly without reloading the page every time. The traditional website uses js to provide several forms of interactivity and simplicity.\r\n\r\nAlthough, JavaScript has no connectivity with Java programming language. The name was suggested and provided in the times when Java was gaining popularity in the market. In addition to web browsers, databases such as CouchDB and MongoDB uses JavaScript as their scripting and query language.\r\n\r\n', 'images/javascript.jpg', 'https://www.youtube.com/embed/DHjqpvDnNGE?si=QyqvYQBqfrdCLwOJ', '#', 'Jenu Patel', '2023-12-12', 4, 4, 'javascript, programming', '00:03:08'),
(4, 'What is PHP', 'PHP is an open-source, interpreted, and object-oriented scripting language that can be executed at the server-side. PHP is well suited for web development. Therefore, it is used to develop web applications (an application that executes on the server and generates the dynamic page.).', 'PHP was created by Rasmus Lerdorf in 1994 but appeared in the market in 1995. PHP 7.4.0 is the latest version of PHP, which was released on 28 November. Some important points need to be noticed about PHP are as followed:\r\n\r\nPHP stands for Hypertext Preprocessor.\r\nPHP is an interpreted language, i.e., there is no need for compilation.\r\nPHP is faster than other scripting languages, for example, ASP and JSP.\r\nPHP is a server-side scripting language, which is used to manage the dynamic content of the website.\r\nPHP can be embedded into HTML.\r\nPHP is an object-oriented language.\r\nPHP is an open-source scripting language.\r\nPHP is simple and easy to learn language.', 'images/php.jpg', 'https://www.youtube.com/embed/a7_WFUlFS94?si=Fngpev6udMntsHt-', '#', 'Kim Taehyung', '2023-11-22', 4, 3, 'php, programming', '00:03:08'),
(5, 'What is Java', 'Our core Java programming tutorial is designed for students and working professionals. Java is an object-oriented, class-based, concurrent, secured and general-purpose computer-programming language. It is a widely used robust technology.', 'Java is a programming language and a platform. Java is a high level, robust, object-oriented and secure programming language.\r\n\r\nJava was developed by Sun Microsystems (which is now the subsidiary of Oracle) in the year 1995. James Gosling is known as the father of Java. Before Java, its name was Oak. Since Oak was already a registered company, so James Gosling and his team changed the name from Oak to Java.\r\n\r\nPlatform: Any hardware or software environment in which a program runs, is known as a platform. Since Java has a runtime environment (JRE) and API, it is called a platform.', 'images/java.jpg', 'https://www.youtube.com/embed/mAtkPQO1FcA?si=4JYKZCvzG9u1te6B', '#', 'Park Jimin', '2023-12-25', 4, 2, 'java, programming', '00:03:08'),
(6, 'What is the English', 'nglish is a West Germanic language in the Indo-European language family, whose speakers, called Anglophones, originated in early medieval England. The namesake of the language is the Angles, one of the ancient Germanic peoples that migrated to the island of Great Britain.', 'Five of the letters in the English Alphabet are vowels: A, E, I, O, U.\r\nThe remaining 21 letters are consonants: B, C, D, F, G, H, J, K, L, M, N, P, Q, R, S, T, V, X, Z, and usually W and Y.\r\nWritten English includes the digraphs: ch ci ck gh ng ph qu rh sc sh th ti wh wr zh. These are not considered separate letters of the alphabet.\r\nTwo letters, “A” and “I,” also constitute words.', 'images/english.jpg', 'https://www.youtube.com/embed/hQEeGqZxhgA?si=u884lR0SN4j20d_t', '#', '', '0000-00-00', 3, 16, 'english, language', '00:10:00'),
(17, 'What is Korean Language', 'The Korean written language is properly called Hangul, although its English spelling is not always identical across sources. Korean was written with Chinese characters, but this was replaced by the hangul alphabet.', 'Hangul is the writing system of the Korean language. Hangul is made up of 14 consonants and 10 vowels, making it an alphabet with a total of 24 letters. It is the official writing system in South Korea and North Korea (where it is known as Chos?n muntcha), and it is used by diaspora Koreans across the world.', 'images/hangul.jpg', 'https://www.youtube.com/embed/KN4mysljHYc?si=RHtwl7RSLQVrU0I', '#', '', '0000-00-00', 3, 17, 'korean,hangul, language', '00:10:00'),
(18, 'What is German Language', 'The German language is a West Germanic language spoken by 121 million native speakers and used by around 80 million non-native speakers. Combined, this makes the German language the tenth most spoken language worldwide.', 'Much like the English alphabet, German has 26 standard letters. However, the German alphabet contains one additional character and umlauted forms of three vowels.\r\n\r\nThe German ligature (additional character): The letter ß, is also known as the \"sharp S\", \"eszett\" or \"scharfes S\", and is the only German letter that is not part of the Latin/Roman alphabet. The letter is pronounced (like the \"s\" in \"see\"). The ß is not used in any other language.', 'images/german.jpg', 'https://www.youtube.com/embed/nf1rzqG3nvA?si=4Chu-uB4aEtzD79V', '3', '', '0000-00-00', 3, 18, 'german, language', '00:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `mid` int(11) NOT NULL,
  `module_name` varchar(30) NOT NULL,
  `photo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`mid`, `module_name`, `photo`) VALUES
(1, 'Entertaimnets', ''),
(2, 'Blog', ''),
(3, 'Languages', ''),
(4, 'Programming Languages', ''),
(5, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `flc_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `liked` tinyint(1) NOT NULL,
  `item_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `uid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`uid`, `username`, `fullname`, `password`, `email`, `phone`, `gender`) VALUES
(1, 'prakash', '', '123', '', 0, ''),
(2, 'kishan', '', '123', '', 0, ''),
(3, 'khant', 'kishan', '123', 'khan', 123, 'none'),
(4, 'khant', 'kishan', '123', 'khan', 123, 'none'),
(5, 'shizu', 'shehnaz', '123', 's@123', 1234, 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module_id` (`module_id`),
  ADD KEY `categories` (`categorie`),
  ADD KEY `categorie` (`categorie`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`flc_id`),
  ADD KEY `forign key` (`uid`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `flc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `modules` (`mid`),
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`categorie`) REFERENCES `category` (`cat_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `userdetails` (`uid`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
