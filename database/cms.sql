-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 17, 2024 at 06:12 PM
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
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(2, 'JavaScript'),
(3, 'PHP'),
(7, 'JAVA'),
(8, 'Bootstrap'),
(9, 'Rust'),
(10, 'Rust');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(13, 17, 'anonymous', 'ano@nm.mi', 'trying a new comment', 'unapproved', '2024-05-01'),
(14, 17, '`anosk', 'sg@hd.vk', 'wdfghjk', 'approved', '2024-05-01'),
(15, 19, 'regre', 'regre@fg.io', 't6thbtr', 'unapproved', '2024-05-01');

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
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` varchar(255) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(16, 2, 'users code', 'users code', '2024-06-17', 'error.png', 'oiuytrewfghj jhgfd bn jhgf yu gtrew tyui tre tyu \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		', 'usersdfghjkl;', '1', 'published'),
(17, 2, 'cms', 'cms', '2024-06-17', 'businessplandaimatowers.png', 'wervgbrhntjymku,oipo g5hjukijh gf3d 5hwjk ujh gr f wf  c s regeg vkejijr9mvinvidvj ij io m   ufwuf ug u 8g \r\n		cvbvcx \r\n		 \r\n		', 'rust,cms,me', '3', 'publshed'),
(18, 2, '65u56', '65u56', '2024-06-16', 'kevincms3.png', '		56u56u5 \r\n		', '5u56', '1', 'draft'),
(19, 2, 'cms', 'cms', '2024-05-01', 'businessplandaimatowers.png', 'lorem ipsum dola sit ammetdwjfslcnqwbci bfvnkddcwlj jnbjsdnclkncsak nliewdklnfe fwe twe gwe g ger reh er re qe we g rh h rth th t  rt rter t te ter ter erg reg er er t eyt y ey re yre yre we rw  we qw et rt rt rt rt et er er  ty y y y y y y	orem ipsum dola sit ammetdwjfslcnqwbci bfvnkddcwlj jnbjsdnclkncsak nliewdklnfe fwe twe gwe g ger reh er re qe we g rh h rth th t  rt rter t te ter ter erg reg er er t eyt y ey re yre yre we rw  we qw et rt rt rt rt et er er  ty y y y y y y	orem ipsum dola sit ammetdwjfslcnqwbci bfvnkddcwlj jnbjsdnclkncsak nliewdklnfe fwe twe gwe g ger reh er re qe we g rh h rth th t  rt rter t te ter ter erg reg er er t eyt y ey re yre yre we rw  we qw et rt rt rt rt et er er  ty y y y y y y	orem ipsum dola sit ammetdwjfslcnqwbci bfvnkddcwlj jnbjsdnclkncsak nliewdklnfe fwe twe gwe g ger reh er re qe we g rh h rth th t  rt rter t te ter ter erg reg er er t eyt y ey re yre yre we rw  we qw et rt rt rt rt et er er  ty y y y y y y	orem ipsum dola sit ammetdwjfslcnqwbci bfvnkddcwlj jnbjsdnclkncsak nliewdklnfe fwe twe gwe g ger reh er re qe we g rh h rth th t  rt rter t te ter ter erg reg er er t eyt y ey re yre yre we rw  we qw et rt rt rt rt et er er  ty y y y y y y	orem ipsum dola sit ammetdwjfslcnqwbci bfvnkddcwlj jnbjsdnclkncsak nliewdklnfe fwe twe gwe g ger reh er re qe we g rh h rth th t  rt rter t te ter ter erg reg er er t eyt y ey re yre yre we rw  we qw et rt rt rt rt et er er  ty y y y y y y	orem ipsum dola sit ammetdwjfslcnqwbci bfvnkddcwlj jnbjsdnclkncsak nliewdklnfe fwe twe gwe g ger reh er re qe we g rh h rth th t  rt rter t te ter ter erg reg er er t eyt y ey re yre yre we rw  we qw et rt rt rt rt et er er  ty y y y y y y	orem ipsum dola sit ammetdwjfslcnqwbci bfvnkddcwlj jnbjsdnclkncsak nliewdklnfe fwe twe gwe g ger reh er re qe we g rh h rth th t  rt rter t te ter ter erg reg er er t eyt y ey re yre yre we rw  we qw et rt rt rt rt et er er  ty y y y y y y	 \r\n		', 'rust,cms,me', '2', 'published');

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
  `user_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_role`) VALUES
(3, 'jonny', '123', 'johner', 'doe', 'jonny@gmail.com', 'subscriber'),
(4, 'edd', '12345', 'edwin', 'doe', 'edu@gmail.com', 'admin'),
(6, 'moraa', '12345', 'moraa', 'maria', 'moramaria@gmail.com', 'subscriber'),
(7, 'cashy', '12345', 'cash', 'cashy', 'casy@gmail.com', 'subscriber');

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
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
