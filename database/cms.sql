-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 04, 2024 at 09:33 AM
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
(23, 24, 'oter test', 'test@tester.test', 'just hoping will be fine', 'unapproved', '2024-07-19');

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
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `post_views_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`, `post_views_count`) VALUES
(16, 2, 'users code', 'users code', '2024-07-07', 'error.png', 'oiuytrewfghj jhgfd bn jhgf yu gtrew tyui tre tyu \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		', 'user', '3', 'draft', 1),
(24, 2, 'users code', 'users code', '2024-07-19', 'error.png', 'oiuytrewfghj jhgfd bn jhgf yu gtrew tyui tre tyu \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		', 'user', ' ', 'draft', 4),
(25, 8, 'correction', 'curiousemmanuel', '2024-07-19', 'failvim.png', 'after a long morning of trial and error finally i did it', 'corect', ' ', 'active', 0),
(26, 2, 'correction', 'correction', '2024-07-19', 'failvim.png', 'after a long morning of trial and error finally i did it \r\n		', 'corect', ' ', 'active', 0),
(27, 2, 'users code', 'users code', '2024-07-19', 'error.png', 'oiuytrewfghj jhgfd bn jhgf yu gtrew tyui tre tyu \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		', 'user', ' ', 'draft', 0),
(28, 2, 'comment problem test', 'comenter', '2024-07-19', 'displayerrors.png', 'ddddyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy\r\nuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu\r\nyuuuuuuuuuuuuuuuuuuuuuyyyyyyyyyyyyyyyyyyyyyyyyyy\r\n999999999999999999999999999999999999999		', 'comments', ' ', 'active', 0),
(29, 2, 'users code', 'users code', '2024-07-19', 'error.png', 'oiuytrewfghj jhgfd bn jhgf yu gtrew tyui tre tyu \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		', 'user', ' ', 'draft', 0),
(30, 2, 'users code', 'users code', '2024-07-19', 'error.png', 'oiuytrewfghj jhgfd bn jhgf yu gtrew tyui tre tyu \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		', 'user', ' ', 'draft', 0),
(31, 8, 'correction', 'curiousemmanuel', '2024-07-19', 'failvim.png', 'after a long morning of trial and error finally i did it', 'corect', ' ', 'active', 0),
(32, 2, 'correction', 'correction', '2024-07-19', 'failvim.png', 'after a long morning of trial and error finally i did it \r\n		', 'corect', ' ', 'active', 0),
(33, 2, 'users code', 'users code', '2024-07-19', 'error.png', 'oiuytrewfghj jhgfd bn jhgf yu gtrew tyui tre tyu \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		', 'user', ' ', 'draft', 0),
(34, 2, 'comment problem test', 'comenter', '2024-07-19', 'displayerrors.png', 'ddddyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy\r\nuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu\r\nyuuuuuuuuuuuuuuuuuuuuuyyyyyyyyyyyyyyyyyyyyyyyyyy\r\n999999999999999999999999999999999999999		', 'comments', ' ', 'active', 0),
(35, 2, 'users code', 'users code', '2024-07-19', 'error.png', 'oiuytrewfghj jhgfd bn jhgf yu gtrew tyui tre tyu \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		', 'user', '', 'draft', 0),
(36, 2, 'users code', 'users code', '2024-07-19', 'error.png', 'oiuytrewfghj jhgfd bn jhgf yu gtrew tyui tre tyu \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		', 'user', '', 'draft', 0),
(37, 8, 'correction', 'curiousemmanuel', '2024-07-19', 'failvim.png', 'after a long morning of trial and error finally i did it', 'corect', '', 'active', 0),
(38, 2, 'correction', 'correction', '2024-07-19', 'failvim.png', 'after a long morning of trial and error finally i did it \r\n		', 'corect', '', 'active', 0),
(39, 2, 'users code', 'users code', '2024-07-19', 'error.png', 'oiuytrewfghj jhgfd bn jhgf yu gtrew tyui tre tyu \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		', 'user', '', 'draft', 0),
(40, 2, 'comment problem test', 'comenter', '2024-07-19', 'displayerrors.png', 'ddddyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy\r\nuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu\r\nyuuuuuuuuuuuuuuuuuuuuuyyyyyyyyyyyyyyyyyyyyyyyyyy\r\n999999999999999999999999999999999999999		', 'comments', '', 'active', 0),
(41, 2, 'users code', 'users code', '2024-07-19', 'error.png', 'oiuytrewfghj jhgfd bn jhgf yu gtrew tyui tre tyu \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		', 'user', '', 'draft', 0);

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
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$usesomecraxypassword22'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_role`, `randSalt`) VALUES
(3, 'jonny', '123', 'johner', 'doe', 'jonny@gmail.com', 'subscriber', '$2y$10$usesomecraxypassword22'),
(4, 'edd', '$2y$10$usesomecraxypassword2u7CpWoU6odT8Voni6hNAZh9sOJzx/y.W', 'edwin', 'doe', 'edu@gmail.com', 'admin', '$2y$10$usesomecraxypassword22'),
(6, 'moraa', '12345', 'moraa', 'maria', 'moramaria@gmail.com', 'subscriber', '$2y$10$usesomecraxypassword22'),
(7, 'cashy', '12345', 'cash', 'cashy', 'casy@gmail.com', 'subscriber', '$2y$10$usesomecraxypassword22'),
(9, 'trtr', 'oiuytresw', 'tyrtgreg', 'etw4t43t', 'rgreh@def.liooo', 'subscriber', '$2y$10$usesomecraxypassword22'),
(14, 'werre', '12345', 'whatever', 'what', 'what@we.fr', 'subscriber', '$2y$10$usesomecraxypassword22'),
(15, 'newone', '$2y$10$usesomecraxypassword2u7CpWoU6odT8Voni6hNAZh9sOJzx/y.W', 'none', 'none', 'newone@one.new', 'subscriber', '$2y$10$usesomecraxypassword22');

-- --------------------------------------------------------

--
-- Table structure for table `users_online`
--

CREATE TABLE `users_online` (
  `id` int(11) NOT NULL,
  `session` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_online`
--

INSERT INTO `users_online` (`id`, `session`, `time`) VALUES
(1, 'd0nlbgqio16tq689c5u99d23lm', 1721404394),
(2, 'd0nlbgqio16tq689c5u99d23lm', 1721404602),
(3, 'd0nlbgqio16tq689c5u99d23lm', 1721404653),
(4, 'd0nlbgqio16tq689c5u99d23lm', 1721404808),
(5, 'r782fhjvnam8phvv31l0ckfu4u', 1721392134),
(6, 'r782fhjvnam8phvv31l0ckfu4u', 1721392141),
(7, 'r782fhjvnam8phvv31l0ckfu4u', 1721394048),
(8, 'r782fhjvnam8phvv31l0ckfu4u', 1721394048),
(9, 'r782fhjvnam8phvv31l0ckfu4u', 1721394053),
(10, 'r782fhjvnam8phvv31l0ckfu4u', 1721394053),
(11, 'r782fhjvnam8phvv31l0ckfu4u', 1721394066),
(12, 'r782fhjvnam8phvv31l0ckfu4u', 1721394067),
(13, 'r782fhjvnam8phvv31l0ckfu4u', 1721394162),
(14, 'r782fhjvnam8phvv31l0ckfu4u', 1721394162),
(15, 'r782fhjvnam8phvv31l0ckfu4u', 1721394350),
(16, 'r782fhjvnam8phvv31l0ckfu4u', 1721394350),
(17, 'n6tnfs5jr5oeib9jf28h310hgg', 1722656278),
(18, 'n6tnfs5jr5oeib9jf28h310hgg', 1722656377),
(19, 'n6tnfs5jr5oeib9jf28h310hgg', 1722656388),
(20, 'n6tnfs5jr5oeib9jf28h310hgg', 1722656604),
(21, 'n6tnfs5jr5oeib9jf28h310hgg', 1722656604),
(22, 'n6tnfs5jr5oeib9jf28h310hgg', 1722656607),
(23, 'n6tnfs5jr5oeib9jf28h310hgg', 1722656608),
(24, 'n6tnfs5jr5oeib9jf28h310hgg', 1722656951),
(25, 'n6tnfs5jr5oeib9jf28h310hgg', 1722656951),
(26, 'n6tnfs5jr5oeib9jf28h310hgg', 1722656957),
(27, 'n6tnfs5jr5oeib9jf28h310hgg', 1722656957),
(28, 'n6tnfs5jr5oeib9jf28h310hgg', 1722657380),
(29, 'n6tnfs5jr5oeib9jf28h310hgg', 1722657380),
(30, 'n6tnfs5jr5oeib9jf28h310hgg', 1722657385),
(31, 'n6tnfs5jr5oeib9jf28h310hgg', 1722657385),
(32, 'n6tnfs5jr5oeib9jf28h310hgg', 1722665646),
(33, 'n6tnfs5jr5oeib9jf28h310hgg', 1722665646),
(34, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721397754),
(35, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721397754),
(36, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721397762),
(37, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721397762),
(38, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721397775),
(39, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721397776),
(40, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721398518),
(41, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721398518),
(42, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721398540),
(43, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721398540),
(44, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721398866),
(45, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721398866),
(46, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721398888),
(47, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721398888),
(48, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721399056),
(49, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721399056),
(50, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721400100),
(51, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721400100),
(52, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721400671),
(53, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721400672),
(54, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721400775),
(55, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721400775),
(56, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721400940),
(57, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721400941),
(58, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721400948),
(59, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721400948),
(60, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721400955),
(61, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721400955),
(62, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721400960),
(63, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721400960),
(64, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721400985),
(65, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721400985),
(66, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721400986),
(67, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721400986),
(68, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401034),
(69, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401034),
(70, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401042),
(71, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401043),
(72, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401046),
(73, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401046),
(74, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401267),
(75, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401267),
(76, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401298),
(77, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401298),
(78, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401303),
(79, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401303),
(80, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401308),
(81, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401308),
(82, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401311),
(83, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401311),
(84, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401320),
(85, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401320),
(86, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401323),
(87, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401323),
(88, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401327),
(89, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401327),
(90, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401532),
(91, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401532),
(92, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401536),
(93, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401536),
(94, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401539),
(95, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401539),
(96, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401544),
(97, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401544),
(98, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401690),
(99, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401690),
(100, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401727),
(101, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401727),
(102, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401756),
(103, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401756),
(104, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401762),
(105, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401762),
(106, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401767),
(107, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401767),
(108, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401771),
(109, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401771),
(110, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401776),
(111, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401776),
(112, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401779),
(113, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401779),
(114, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401783),
(115, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401783),
(116, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401797),
(117, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401797),
(118, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401800),
(119, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401800),
(120, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401804),
(121, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721401804),
(122, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402362),
(123, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402362),
(124, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402364),
(125, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402364),
(126, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402367),
(127, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402367),
(128, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402370),
(129, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402370),
(130, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402370),
(131, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402370),
(132, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402420),
(133, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402420),
(134, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402420),
(135, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402420),
(136, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402425),
(137, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402425),
(138, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402430),
(139, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402430),
(140, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402604),
(141, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402604),
(142, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402608),
(143, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402608),
(144, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402611),
(145, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402611),
(146, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402611),
(147, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402611),
(148, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402615),
(149, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402615),
(150, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402634),
(151, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402635),
(152, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402637),
(153, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402637),
(154, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402637),
(155, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402637),
(156, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402639),
(157, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402639),
(158, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402639),
(159, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402639),
(160, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402643),
(161, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402643),
(162, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402821),
(163, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402821),
(164, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402824),
(165, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402824),
(166, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402824),
(167, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402824),
(168, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402828),
(169, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402828),
(170, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402828),
(171, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402828),
(172, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402832),
(173, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402832),
(174, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402832),
(175, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402832),
(176, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402845),
(177, 'dpof8tjcue1gm4r8bi1fshpv0a', 1721402845),
(178, 'ita0vl0c4069g6hpk6v1li2bke', 1722756028),
(179, 'ita0vl0c4069g6hpk6v1li2bke', 1722756028),
(180, 'ita0vl0c4069g6hpk6v1li2bke', 1722756032),
(181, 'ita0vl0c4069g6hpk6v1li2bke', 1722756032),
(182, 'ita0vl0c4069g6hpk6v1li2bke', 1722756036),
(183, 'ita0vl0c4069g6hpk6v1li2bke', 1722756036),
(184, 'ita0vl0c4069g6hpk6v1li2bke', 1722756040),
(185, 'ita0vl0c4069g6hpk6v1li2bke', 1722756040),
(186, 'ita0vl0c4069g6hpk6v1li2bke', 1722756041),
(187, 'ita0vl0c4069g6hpk6v1li2bke', 1722756041),
(188, 'ita0vl0c4069g6hpk6v1li2bke', 1722756043),
(189, 'ita0vl0c4069g6hpk6v1li2bke', 1722756043),
(190, 'ita0vl0c4069g6hpk6v1li2bke', 1722756043),
(191, 'ita0vl0c4069g6hpk6v1li2bke', 1722756043),
(192, 'ita0vl0c4069g6hpk6v1li2bke', 1722756052),
(193, 'ita0vl0c4069g6hpk6v1li2bke', 1722756052),
(194, 'ita0vl0c4069g6hpk6v1li2bke', 1722756060),
(195, 'ita0vl0c4069g6hpk6v1li2bke', 1722756060);

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
-- Indexes for table `users_online`
--
ALTER TABLE `users_online`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users_online`
--
ALTER TABLE `users_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
