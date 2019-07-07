-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 07, 2019 at 01:01 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reviewer`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` text NOT NULL,
  `category` text NOT NULL,
  `text` text NOT NULL,
  `correct_answer` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `level`, `category`, `text`, `correct_answer`) VALUES
(1, 'easy', 'Internet', 'A global network of computer to communicate\r\n', 'Internet'),
(2, 'easy', 'World Wide Web ', 'A language used to mark up documents\r\n', 'HTTP'),
(3, 'easy', 'World Wide Web', 'The inventor of the World Wide Web', 'Tim Berners-Lee'),
(4, 'easy', 'World Wide Web ', 'It is used to identify the node in the network.\r\n', 'IP Address'),
(5, 'easy', 'World Wide Web ', 'It typically provided as key = value pairs, with (& - ampersand) separators between key/value pairs.\r\n', 'Query '),
(6, 'easy', 'CSS', 'It is a language used to specify the presentation aspects.\r\n', 'CSS'),
(7, 'easy', 'CSS', 'It helps declare which part of the markup a style applies to by matching tags and attributes in the markup itself. \r\n', 'Selectors'),
(8, 'easy', 'CSS', 'CSS specifications are maintained by ___ ? \r\n', 'World Wide Web Consortium'),
(9, 'easy', 'CSS', 'A protocol that goes to indexes and to your document', 'Gopher'),
(10, 'easy', 'CSS', 'A very small text file', 'Cookie');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
