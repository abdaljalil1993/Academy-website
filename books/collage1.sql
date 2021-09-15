-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 02 مايو 2019 الساعة 10:40
-- إصدار الخادم: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collage1`
--

-- --------------------------------------------------------

--
-- بنية الجدول `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `lecture` varchar(255) NOT NULL,
  `coursename` varchar(233) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `courses`
--

INSERT INTO `courses` (`id`, `cname`, `dname`, `sem`, `lecture`, `coursename`) VALUES
(1, 'plc', 'belal', 'second', '', ''),
(2, 'java', 'ahmad', '1', '', ''),
(3, 'dsa', '', 'dsa', '', ''),
(4, 'dsada', '', 'dsada', '', ''),
(5, 'dsa', '', 'dsa', '', ''),
(6, 'dsa', '', 'dsa', '', ''),
(7, 'ss', '', 'ss', '1.jfif', ''),
(8, 'ss', '', 'ss', '1.jfif', ''),
(9, 'dsa', '', 'dsa', 'download (1).jpg', 'dsad');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `section` varchar(11) NOT NULL,
  `type` int(11) NOT NULL,
  UNIQUE KEY `id_2` (`id`,`email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `address`, `section`, `type`) VALUES
(1, 'شمس', 'shams@sh.com', '123', '123', 'اللاذقية', 'computer', 3),
(2, 'k', 'k@k.com', 'k', '123', 'Ø§Ù„Ù„Ø§Ø°Ù‚ÙŠØ©', 'computer', 3),
(3, 'maha', 'maha@maha.com', 'maha', '123', 'Ø§Ù„Ù„Ø§Ø°Ù‚ÙŠØ©', 'computer', 3),
(4, 'nour', 'nour@n.com', 'n', '123', 'Ø§Ù„Ù„Ø§Ø°Ù‚ÙŠØ©', 'computer', 3),
(5, 'h', 'h@h.com', 'h', '123', 'Ø§Ù„Ù„Ø§Ø°Ù‚ÙŠØ©', 'computer', 3),
(6, 'sami', 'sami@s.com', 's', '123', 'Ø§Ù„Ù„Ø§Ø°Ù‚ÙŠØ©', 'computer', 3),
(7, 'd', 'd', 'd', 'd', 'd', 'd', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
