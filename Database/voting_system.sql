-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2014 at 09:10 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `voting_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE IF NOT EXISTS `candidates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `imagepath` varchar(300) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `student_id`, `position_id`, `imagepath`, `updated_at`, `created_at`) VALUES
(1, 1, 1, '/assets/images/arnold-avatar.jpg', '2014-05-07 01:42:29', '2014-05-07 00:17:41'),
(4, 9, 5, '/assets/images/random-avatar7.jpg', '2014-05-07 01:46:21', '2014-05-07 01:46:21'),
(5, 6, 1, '/assets/images/random-avatar8.jpg', '2014-05-07 01:51:14', '2014-05-07 01:51:14'),
(6, 3, 5, '/assets/images/arnold-avatar.jpg', '2014-05-07 01:51:26', '2014-05-07 01:51:26'),
(7, 8, 2, '/assets/images/peter-avatar.jpg', '2014-05-07 01:52:46', '2014-05-07 01:52:46'),
(8, 32, 2, '/assets/images/random-avatar5.jpg', '2014-05-07 01:52:57', '2014-05-07 01:52:57'),
(9, 12, 6, '/assets/images/george-avatar.jpg', '2014-05-10 02:05:05', '2014-05-10 02:05:05');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `representative` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `representative`, `created_at`, `updated_at`) VALUES
(1, 'BSIT', 'Bachelor Of Science In Information Technology', 1, '2014-05-06 09:32:07', '2014-05-06 10:08:53'),
(2, 'BSHRM', 'Bachelor Of Science In Hotel And Restaurant Management', 1, '2014-05-06 09:32:07', '2014-05-06 09:33:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_04_10_054411_create_usertype_table', 1),
('2014_04_10_060708_create_users_table', 1),
('2014_04_14_162635_create_courses_table', 1),
('2014_04_14_163257_create_students_table', 1),
('2014_04_24_130030_create_positions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE IF NOT EXISTS `positions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ordinality` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `positions_course_id_foreign` (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `course_id`, `name`, `ordinality`, `created_at`, `updated_at`) VALUES
(1, NULL, 'President', 1, '2014-05-06 09:32:09', '2014-05-06 09:32:09'),
(2, 2, 'BSHRM - Representative', NULL, '2014-05-06 09:33:22', '2014-05-06 09:33:22'),
(5, 1, 'BSIT - Representative', NULL, '2014-05-06 10:08:53', '2014-05-06 10:08:53'),
(6, NULL, 'Vice-President', 2, '2014-05-07 18:44:18', '2014-05-07 18:44:18');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` int(10) unsigned NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `students_course_id_foreign` (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=52 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `course_id`, `fname`, `mname`, `lname`, `password`, `created_at`, `updated_at`) VALUES
(1, 2, 'Cedric', 'Smith', 'Calcaben', 'yD5I8i', '2014-05-06 09:32:07', '2014-05-07 16:18:44'),
(2, 2, 'Keanna', 'Williams', 'Ligue', 'o4h7dq', '2014-05-06 09:32:07', '2014-05-07 16:18:45'),
(3, 1, 'Mark', 'Smith', 'Stewart', 'vI5CHp', '2014-05-06 09:32:07', '2014-05-07 16:18:45'),
(4, 2, 'Ivy', 'Smith', 'Calcaben', 'TCCVcn', '2014-05-06 09:32:07', '2014-05-07 16:18:45'),
(5, 2, 'Mark', 'Smith', 'Cagoco', 'EGQnXU', '2014-05-06 09:32:07', '2014-05-07 16:18:45'),
(6, 1, 'Ivy', 'Smith', 'Indoyon', 'Mfxfef', '2014-05-06 09:32:07', '2014-05-07 16:18:45'),
(7, 2, 'Martin', 'Williams', 'Ligue', 'vVEYtx', '2014-05-06 09:32:08', '2014-05-07 16:18:45'),
(8, 2, 'Adam', 'Smith', 'Celada', 'o9lCjy', '2014-05-06 09:32:08', '2014-05-07 16:18:45'),
(9, 1, 'Cedric', 'Williams', 'Cagoco', 'tD3UCR', '2014-05-06 09:32:08', '2014-05-07 16:18:46'),
(10, 2, 'Keanna', 'Williams', 'Celada', 'fOP5gr', '2014-05-06 09:32:08', '2014-05-07 16:18:46'),
(11, 2, 'Kelvin', 'Williams', 'Cagoco', 'BoCSPP', '2014-05-06 09:32:08', '2014-05-07 16:18:46'),
(12, 2, 'Mark', 'Williams', 'Ligue', '/J/ExG', '2014-05-06 09:32:08', '2014-05-07 16:18:46'),
(13, 1, 'Adam', 'Williams', 'Ligue', '/Wjosf', '2014-05-06 09:32:08', '2014-05-07 16:18:46'),
(14, 1, 'Martin', 'Williams', 'Calcaben', 'sLT/uo', '2014-05-06 09:32:08', '2014-05-07 16:18:46'),
(15, 1, 'Kelvin', 'Smith', 'Calcaben', 'yZbQLG', '2014-05-06 09:32:08', '2014-05-07 16:18:46'),
(16, 2, 'Adam', 'Williams', 'Ligue', 'rLQQ0Q', '2014-05-06 09:32:08', '2014-05-07 16:18:46'),
(17, 1, 'Ivy', 'Smith', 'Celada', 'vCI1FH', '2014-05-06 09:32:08', '2014-05-07 16:18:47'),
(18, 1, 'Ivy', 'Smith', 'Celada', 'cNDnXi', '2014-05-06 09:32:08', '2014-05-07 16:18:47'),
(19, 1, 'Martin', 'Williams', 'Indoyon', 'wmgvh6', '2014-05-06 09:32:08', '2014-05-07 16:18:47'),
(20, 2, 'Kelvin', 'Williams', 'Clark', 'llxtib', '2014-05-06 09:32:08', '2014-05-07 16:18:47'),
(21, 2, 'Cedric', 'Williams', 'Indoyon', 'PR1Fx.', '2014-05-06 09:32:08', '2014-05-07 16:18:47'),
(22, 1, 'Adam', 'Williams', 'Stewart', 'KbNiob', '2014-05-06 09:32:08', '2014-05-07 16:18:47'),
(23, 1, 'Kelvin', 'Williams', 'Calcaben', 'BNEKdF', '2014-05-06 09:32:08', '2014-05-07 16:18:47'),
(24, 1, 'Kelvin', 'Smith', 'Celada', 'FD/DFq', '2014-05-06 09:32:08', '2014-05-07 16:18:47'),
(25, 1, 'Keanna', 'Smith', 'Cagoco', 'vzgemQ', '2014-05-06 09:32:08', '2014-05-07 16:18:47'),
(26, 2, 'Mark', 'Williams', 'Stewart', 'mPe8s1', '2014-05-06 09:32:08', '2014-05-07 16:18:48'),
(27, 2, 'Keanna', 'Williams', 'Ligue', 'XNZfms', '2014-05-06 09:32:08', '2014-05-07 16:18:48'),
(28, 2, 'Ivy', 'Williams', 'Indoyon', '7S5Ckx', '2014-05-06 09:32:08', '2014-05-07 16:18:48'),
(29, 2, 'Kelvin', 'Smith', 'Clark', 'CSfRi2', '2014-05-06 09:32:08', '2014-05-07 16:18:48'),
(30, 1, 'Ivy', 'Williams', 'Stewart', 'o29SOw', '2014-05-06 09:32:08', '2014-05-07 16:18:48'),
(31, 1, 'Mark', 'Williams', 'Indoyon', 'CP0Vxm', '2014-05-06 09:32:08', '2014-05-07 16:18:48'),
(32, 2, 'Adam', 'Williams', 'Stewart', 'bVeLNj', '2014-05-06 09:32:08', '2014-05-07 16:18:48'),
(33, 1, 'Adam', 'Smith', 'Ligue', 'JQHOGr', '2014-05-06 09:32:08', '2014-05-07 16:18:48'),
(34, 1, 'Mark', 'Smith', 'Indoyon', 'nEiZtX', '2014-05-06 09:32:08', '2014-05-07 16:18:48'),
(35, 2, 'Cedric', 'Williams', 'Indoyon', 'U2NoE1', '2014-05-06 09:32:08', '2014-05-07 16:18:49'),
(36, 2, 'Keanna', 'Smith', 'Indoyon', 'xD0mKx', '2014-05-06 09:32:08', '2014-05-07 16:18:49'),
(37, 1, 'Cedric', 'Smith', 'Calcaben', 'dsYKb.', '2014-05-06 09:32:08', '2014-05-07 16:18:49'),
(38, 1, 'Cedric', 'Smith', 'Calcaben', 'Mtnltr', '2014-05-06 09:32:08', '2014-05-07 16:18:49'),
(39, 2, 'Mark', 'Smith', 'Celada', '6IFCL7', '2014-05-06 09:32:08', '2014-05-07 16:18:49'),
(40, 1, 'Adam', 'Smith', 'Ligue', 'Dc5VPl', '2014-05-06 09:32:08', '2014-05-07 16:18:49'),
(41, 1, 'Ivy', 'Smith', 'Ligue', '99upmq', '2014-05-06 09:32:08', '2014-05-07 16:18:49'),
(42, 2, 'Adam', 'Williams', 'Calcaben', 'heb2g6', '2014-05-06 09:32:09', '2014-05-07 16:18:50'),
(43, 2, 'Mark', 'Williams', 'Calcaben', 'ThhYVY', '2014-05-06 09:32:09', '2014-05-07 16:18:50'),
(44, 2, 'Mark', 'Williams', 'Stewart', 'gVhsyc', '2014-05-06 09:32:09', '2014-05-07 16:18:50'),
(45, 2, 'Adam', 'Smith', 'Cagoco', '68iaxL', '2014-05-06 09:32:09', '2014-05-07 16:18:50'),
(46, 1, 'Mark', 'Smith', 'Cagoco', 'mKRP1X', '2014-05-06 09:32:09', '2014-05-07 16:18:50'),
(47, 1, 'Cedric', 'Williams', 'Ligue', 'JpFX4T', '2014-05-06 09:32:09', '2014-05-07 16:18:50'),
(48, 2, 'Cedric', 'Williams', 'Stewart', '3YhCnN', '2014-05-06 09:32:09', '2014-05-07 16:18:50'),
(49, 1, 'Adam', 'Smith', 'Cagoco', 'uhNkwg', '2014-05-06 09:32:09', '2014-05-07 16:18:50'),
(51, 1, 'Kelvin Martin', 'Indoyon', 'Ligue', 'odQXaa', '2014-05-06 10:12:55', '2014-05-07 16:18:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usertype_id` int(10) unsigned NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `users_usertype_id_foreign` (`usertype_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype_id`, `fname`, `mname`, `lname`, `username`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'km', NULL, 'ligue', 'kmligue', '$2y$10$w5uzHqU75zildMdEWWphFuEoaIMBu1adBB/41iVlPyzc3rHJ0fwiO', '/assets/images/default.png', '2014-05-06 09:32:07', '2014-05-06 09:32:07');

-- --------------------------------------------------------

--
-- Table structure for table `usertypes`
--

CREATE TABLE IF NOT EXISTS `usertypes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `usertypes`
--

INSERT INTO `usertypes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'administrator', '2014-05-06 09:32:07', '2014-05-06 09:32:07'),
(2, 'guest', '2014-05-06 09:32:07', '2014-05-06 09:32:07');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_users`
--
CREATE TABLE IF NOT EXISTS `v_users` (
`id` int(10) unsigned
,`usertype` varchar(255)
,`fname` varchar(255)
,`mname` varchar(255)
,`lname` varchar(255)
,`username` varchar(255)
,`image` varchar(255)
);
-- --------------------------------------------------------

--
-- Structure for view `v_users`
--
DROP TABLE IF EXISTS `v_users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_users` AS select `users`.`id` AS `id`,`usertypes`.`name` AS `usertype`,`users`.`fname` AS `fname`,`users`.`mname` AS `mname`,`users`.`lname` AS `lname`,`users`.`username` AS `username`,`users`.`image` AS `image` from (`users` join `usertypes`) where (`users`.`usertype_id` = `usertypes`.`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `positions`
--
ALTER TABLE `positions`
  ADD CONSTRAINT `positions_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_usertype_id_foreign` FOREIGN KEY (`usertype_id`) REFERENCES `usertypes` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
