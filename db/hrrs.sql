-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2011 at 05:55 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hrrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `authassignment`
--

CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authassignment`
--

INSERT INTO `authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('RBAC Manager', '1', NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `authitem`
--

CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authitem`
--

INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('RBAC Manager', 2, 'Manages Auth Items and Role Assignments. RBAM required role.', NULL, 'N;'),
('Auth Items Manager', 2, 'Manages Auth Items. RBAM required role.', NULL, 'N;'),
('Auth Assignments Manager', 2, 'Manages Role Assignments. RBAM required role.', NULL, 'N;'),
('Authenticated', 2, 'Default role for users that are logged in. RBAC default role.', 'return !Yii::app()->getUser()->getIsGuest();', 'N;'),
('Guest', 2, 'Default role for users that are not logged in. RBAC default role.', 'return Yii::app()->getUser()->getIsGuest();', 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `authitemchild`
--

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authitemchild`
--

INSERT INTO `authitemchild` (`parent`, `child`) VALUES
('RBAC Manager', 'Auth Assignments Manager'),
('RBAC Manager', 'Auth Items Manager');

-- --------------------------------------------------------

--
-- Table structure for table `hr_category`
--

CREATE TABLE IF NOT EXISTS `hr_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hr_category`
--

INSERT INTO `hr_category` (`id`, `name`) VALUES
(2, 'Accounting'),
(3, 'It'),
(1, 'Marketing'),
(4, 'NGO');

-- --------------------------------------------------------

--
-- Table structure for table `hr_company`
--

CREATE TABLE IF NOT EXISTS `hr_company` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `com_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `com_type` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `com_info` text COLLATE utf8_unicode_ci,
  `com_address` text CHARACTER SET utf8,
  `com_contact_no` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `com_web` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `com_logo` blob,
  `create_time` int(11) DEFAULT NULL,
  `com_user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=41 ;

--
-- Dumping data for table `hr_company`
--

INSERT INTO `hr_company` (`com_id`, `com_name`, `com_type`, `com_info`, `com_address`, `com_contact_no`, `com_web`, `com_logo`, `create_time`, `com_user_id`) VALUES
(1, NULL, 'dsa', 'ghgh', 'hghg', 'ghgh', 'ghg', 0x686768, NULL, 60),
(2, NULL, 'bhg', 'hgh', 'ghgh', 'ghg', 'hg', 0x68676a, NULL, 61),
(3, NULL, 'telecom', 'desc', 'addr', '2313sdad', 'hasds', 0x6768, NULL, 78),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 82),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 83),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 84),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 85),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 86),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 87),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 88),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 89),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 90),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 91),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 92),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 93),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 94),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 95),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 96),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 97),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 98),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 99),
(23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100),
(24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 101),
(25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 102),
(26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 103),
(27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 104),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 107),
(29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 110),
(30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 111),
(31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 112),
(32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 113),
(33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 114),
(34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 115),
(35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 117),
(36, NULL, 'test com', 'dsfsdf\r\nsdfg\r\nsd\r\nsd\r\ngsdf', 'sdfsdg\r\nsdfgsdg\r\nsd\r\ngs\r\ng\r\nsf', 'dfgfgdf', 'ggg', 0x676767, NULL, 119),
(37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 120),
(38, NULL, 'aswdf', 'aewdf', 'adss', '', '', '', NULL, 124),
(39, NULL, 'sadfsg', 'hsghd', '', '', '', '', NULL, 126),
(40, NULL, 'Application Developing Firm', 'An application Developing Firm', 'Baridhara', '01717647592', 'http://cavecoder.com', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hr_com_js`
--

CREATE TABLE IF NOT EXISTS `hr_com_js` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `js_id` int(11) NOT NULL DEFAULT '0',
  `job_id` int(11) NOT NULL DEFAULT '0',
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `hr_com_js`
--


-- --------------------------------------------------------

--
-- Table structure for table `hr_country`
--

CREATE TABLE IF NOT EXISTS `hr_country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `hr_country`
--

INSERT INTO `hr_country` (`id`, `code`, `name`) VALUES
(1, 88, 'Bangladesh'),
(2, 78, 'India'),
(3, 45, 'China');

-- --------------------------------------------------------

--
-- Table structure for table `hr_job_posting1`
--

CREATE TABLE IF NOT EXISTS `hr_job_posting1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `responsibility` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `experience` int(11) DEFAULT NULL,
  `recruit_number` int(11) DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `skills_req` text COLLATE utf8_unicode_ci,
  `salary_min` int(11) DEFAULT NULL,
  `salary_max` int(11) DEFAULT NULL,
  `com_user_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `published` int(11) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `hr_job_posting1`
--

INSERT INTO `hr_job_posting1` (`id`, `title`, `category`, `responsibility`, `description`, `experience`, `recruit_number`, `deadline`, `skills_req`, `salary_min`, `salary_max`, `com_user_id`, `status`, `published`, `create_time`) VALUES
(1, 'test', 1, 'jhjhjh\r\njhdfd\r\nsfsdf\r\n\r\nsdfg\r\nds', 'fsrr\r\ntre\r\nyter\r\nyter\r\nyteryer', 2, 2, '0000-00-00', 'bewewrwer\r\nwerewr', 121223333, 123213333, 60, NULL, NULL, 231232),
(2, 'sdfsd', 2, 'hhhhash\r\nsdfsad\r\nfasdfasdf\r\nasdfasdf\r\nsadf', 'sdrfgdssd\r\nsdf\r\nsdf\r\nsdfgsd\r\nfsd', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'sdff', 2, 'hsdjhfhjdsf', '', NULL, NULL, NULL, '', NULL, NULL, 78, NULL, NULL, 1284621090),
(4, 'testt ', 2, 'vjdsfjd', 'shfjdjfj', 3, 7, '0000-00-00', 'hhjh', 87, 78, 78, NULL, NULL, 1284623464),
(5, 'sdds', 2, 'sdfdf', '', NULL, NULL, NULL, '', NULL, NULL, 78, NULL, NULL, 1284636643),
(6, 'hxzchgh', 2, 'ghdgh', 'ghdshf', NULL, NULL, NULL, '', NULL, NULL, 86, NULL, NULL, 1284645076),
(7, 'dff', 2, 'ghghfg\r\n', '', NULL, NULL, NULL, '', NULL, NULL, 78, NULL, NULL, 1284647621),
(8, 'dff', 2, 'ghghfg\r\n', '', NULL, NULL, NULL, '', NULL, NULL, 78, NULL, NULL, 1284647833),
(9, 'rfr', 2, '', '', NULL, NULL, NULL, '', NULL, NULL, 78, NULL, NULL, 1284647935),
(10, 'sadsad', 2, 'sdfdsfsd', 'werre', NULL, NULL, NULL, '', NULL, NULL, 78, NULL, NULL, 1284648120),
(11, 'zsdsds', 2, 'sfd', '', NULL, NULL, '0000-00-00', '', NULL, NULL, 109, NULL, NULL, 1284790032),
(12, 'ertrer', 2, 'sdfefe', '', NULL, NULL, '0000-00-00', '', NULL, NULL, 121, NULL, NULL, 1284903155),
(13, 'wewe', 2, 'wrwq', '', NULL, NULL, '0000-00-00', '', NULL, NULL, 12, NULL, NULL, 1305993199),
(14, 'erer', 1, 'were', '', NULL, NULL, '0000-00-00', '', NULL, NULL, 12, NULL, NULL, 1305995898),
(15, 'job4', 2, 'job4', '', NULL, NULL, '0000-00-00', '', NULL, NULL, 12, NULL, NULL, 1305996181),
(16, 'job6', 2, 'ewr', '', NULL, NULL, '0000-00-00', '', NULL, NULL, 12, NULL, NULL, 1305996219),
(17, 'job7', 2, '', '', NULL, NULL, '0000-00-00', '', NULL, NULL, 12, NULL, NULL, 1306048622);

-- --------------------------------------------------------

--
-- Table structure for table `hr_job_posting2`
--

CREATE TABLE IF NOT EXISTS `hr_job_posting2` (
  `id` int(11) NOT NULL,
  `gender` int(11) DEFAULT NULL,
  `accademic_req` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `age_from` int(11) DEFAULT NULL,
  `age_to` int(11) DEFAULT NULL,
  `additional_req` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `job_type` int(11) DEFAULT NULL,
  `job_level` int(11) DEFAULT NULL,
  `interview_location` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `job_location` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hr_job_posting2`
--

INSERT INTO `hr_job_posting2` (`id`, `gender`, `accademic_req`, `age_from`, `age_to`, `additional_req`, `job_type`, `job_level`, `interview_location`, `job_location`) VALUES
(1, 3, 'asdfs\r\nsadf\r\nsdf\r\nasd\r\nfasd\r\nfasdf', 12, 35, 'ewrerw\r\nerf\r\nerf\r\ner\r\nfrferf', 2, 3, 'rernj', 'hjfrfr'),
(2, 3, 'ewfe\r\nsdfd\r\nasdf\r\nasdf\r\n', NULL, NULL, '', 1, 1, '', ''),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 1, '', NULL, NULL, '', 1, 1, '', ''),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 1, '', NULL, NULL, 'ewdr', 1, 1, '', ''),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hr_js_additional`
--

CREATE TABLE IF NOT EXISTS `hr_js_additional` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `js_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hr_js_additional`
--

INSERT INTO `hr_js_additional` (`id`, `js_id`, `name`, `description`) VALUES
(1, 109, 'ghghg', 'ghghsada\r\nsfg\r\nsd\r\nasd\r\nfasd'),
(2, 109, 'sdfd', 'sfdfsd'),
(3, 109, 'sdfd', 'sdf'),
(4, 109, 'fxfnbh', 'sdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `hr_js_degree`
--

CREATE TABLE IF NOT EXISTS `hr_js_degree` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `degree_name` varchar(100) DEFAULT NULL,
  `user_id` int(11) DEFAULT '0',
  `institute` varchar(100) DEFAULT NULL,
  `year` int(11) NOT NULL,
  `result` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `hr_js_degree`
--

INSERT INTO `hr_js_degree` (`id`, `degree_name`, `user_id`, `institute`, `year`, `result`) VALUES
(1, '1', 108, NULL, 0, '0'),
(2, 'CSE', 108, 'NSTU', 2010, '3.6'),
(4, 'test', 109, 'sdas', 2004, '3.45'),
(5, 'sads', 109, 'sad', 424, 'sdfas'),
(6, 'ASd', 109, 'sad', 233, '');

-- --------------------------------------------------------

--
-- Table structure for table `hr_js_education`
--

CREATE TABLE IF NOT EXISTS `hr_js_education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `js_id` int(11) NOT NULL,
  `degree` varchar(100) DEFAULT NULL,
  `institute` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `result` varchar(30) DEFAULT NULL,
  `outof` varchar(30) DEFAULT NULL,
  `degree_type` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `hr_js_education`
--


-- --------------------------------------------------------

--
-- Table structure for table `hr_js_experience`
--

CREATE TABLE IF NOT EXISTS `hr_js_experience` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `js_id` int(11) NOT NULL DEFAULT '0',
  `position` varchar(100) NOT NULL,
  `organization` varchar(100) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `responsibility` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hr_js_experience`
--

INSERT INTO `hr_js_experience` (`id`, `js_id`, `position`, `organization`, `start_date`, `end_date`, `responsibility`) VALUES
(1, 109, 'sdafsdfasdfa', 'adf', '0000-00-00', '0000-00-00', ''),
(2, 109, 'asds', 'sdasd', '0000-00-00', '0000-00-00', ''),
(3, 109, 'adsf', 'adfd', '0000-00-00', '0000-00-00', ''),
(4, 109, 'dadsf', 'adsf', '0000-00-00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `hr_js_info`
--

CREATE TABLE IF NOT EXISTS `hr_js_info` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middle_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `objectives` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salary` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` blob,
  `address` text COLLATE utf8_unicode_ci,
  `city` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `postal_code` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `experince_year` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hr_js_info`
--

INSERT INTO `hr_js_info` (`id`, `first_name`, `last_name`, `middle_name`, `objectives`, `contact_no`, `website`, `gender`, `salary`, `photo`, `address`, `city`, `country`, `postal_code`, `state`, `experince_year`) VALUES
(109, 'sdfsf', 'asf', 'asfas', 'asfdasfs', 'sefdfd', 'sadfasdf', '0', 'zsdfd', 0x736466, 'sadfa', 'asdfa', 2, 'sadfaf', 'asdf', 'asdfad'),
(122, 'Hossain', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(123, 'khaled', 'saikat', 'Hossain', 'edDasdfs', '', '', '0', '', '', '', '', 1, '', '', ''),
(124, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(125, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hr_js_refernce`
--

CREATE TABLE IF NOT EXISTS `hr_js_refernce` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `js_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `designation` varchar(30) DEFAULT NULL,
  `dept` varchar(30) DEFAULT NULL,
  `company_name` varchar(30) DEFAULT NULL,
  `contact_no` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `relation` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hr_js_refernce`
--

INSERT INTO `hr_js_refernce` (`id`, `js_id`, `name`, `designation`, `dept`, `company_name`, `contact_no`, `email`, `relation`) VALUES
(1, 109, 'asdf', 'dsafdf', 'sdf', 'asfdsf', '', '', ''),
(2, 109, 'ASD', 'asf', 'asfSA', '', '', '', ''),
(3, 109, 'ZCXCZX', 'ZXCXZ', '', '', '', '', ''),
(4, 109, 'sdf', 'sdf', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hr_js_skills`
--

CREATE TABLE IF NOT EXISTS `hr_js_skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `js_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `hr_js_skills`
--

INSERT INTO `hr_js_skills` (`id`, `js_id`, `name`, `description`) VALUES
(1, 0, 'sadsa', 'hghdgfhssa\r\ndfgr\r\ngdf\r\ngfdgsd\r\n'),
(2, 0, 'sdfs', 'sadscsdcsdsd\r\nf\r\nsdf\r\nsadfasdf'),
(3, 0, 'gfffyf', 'fgdfhhrgfhreherfe\r\nerfr'),
(5, 109, 'zcxc', 'dfvgdfgg\r\n'),
(6, 109, 'asd', 'sdfd'),
(7, 109, 'sad', 'asd'),
(8, 109, 'sdf', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `hr_lookup`
--

CREATE TABLE IF NOT EXISTS `hr_lookup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `code` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `hr_lookup`
--

INSERT INTO `hr_lookup` (`id`, `name`, `code`, `type`, `position`) VALUES
(1, 'Draft', 1, 'PostStatus', 1),
(2, 'Published', 2, 'PostStatus', 2),
(3, 'Archived', 3, 'PostStatus', 3),
(4, 'Pending Approval', 1, 'CommentStatus', 1),
(5, 'Approved', 2, 'CommentStatus', 2),
(6, 'admin', 1, 'role', 3),
(7, 'company', 2, 'role', 2),
(8, 'js', 3, 'role', 1),
(9, 'Male', 1, 'gender', 1),
(10, 'Female', 2, 'gender', 2),
(12, 'Full Time', 1, 'job_type', 1),
(13, 'Part Time', 2, 'job_type', 2),
(14, 'Contract', 3, 'job_type', 3),
(15, 'Entry Level', 1, 'job_level', 1),
(16, 'Mid Level', 2, 'job_level', 2),
(17, 'Expert', 3, 'job_level', 3),
(18, 'Yes', 1, 'published', 1),
(19, 'No', 0, 'published', 2),
(20, 'Male', 1, 'js_gender', 1),
(21, 'Female', 2, 'js_gender', 2),
(22, 'Degree1', 1, 'degree', 1),
(23, 'degree2', 2, 'degree', 2),
(24, '$', 1, 'currency', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hr_profiles`
--

CREATE TABLE IF NOT EXISTS `hr_profiles` (
  `user_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hr_profiles`
--

INSERT INTO `hr_profiles` (`user_id`, `lastname`, `firstname`, `birthday`) VALUES
(1, 'Admin', 'Administrator', '0000-00-00'),
(2, 'Demo', 'Demo', '0000-00-00'),
(3, '', '', '0000-00-00'),
(4, '', '', '0000-00-00'),
(5, '', '', '0000-00-00'),
(6, '', '', '0000-00-00'),
(7, '', '', '0000-00-00'),
(8, '', '', '0000-00-00'),
(9, '', '', '0000-00-00'),
(10, '', '', '0000-00-00'),
(11, '', '', '0000-00-00'),
(12, '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `hr_profiles_fields`
--

CREATE TABLE IF NOT EXISTS `hr_profiles_fields` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` int(3) NOT NULL DEFAULT '0',
  `field_size_min` int(3) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(5000) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`,`widget`,`visible`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `hr_profiles_fields`
--

INSERT INTO `hr_profiles_fields` (`id`, `varname`, `title`, `field_type`, `field_size`, `field_size_min`, `required`, `match`, `range`, `error_message`, `other_validator`, `default`, `widget`, `widgetparams`, `position`, `visible`) VALUES
(1, 'lastname', 'Last Name', 'VARCHAR', 50, 3, 0, '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', 1, 3),
(2, 'firstname', 'First Name', 'VARCHAR', 50, 3, 0, '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', 0, 3),
(3, 'birthday', 'Birthday', 'DATE', 0, 0, 0, '', '', '', '', '0000-00-00', 'UWjuidate', '{"ui-theme":"redmond"}', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `hr_users`
--

CREATE TABLE IF NOT EXISTS `hr_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `createtime` int(10) NOT NULL DEFAULT '0',
  `lastvisit` int(10) NOT NULL DEFAULT '0',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `usertype` varchar(10) DEFAULT NULL COMMENT 'admin,company,applicant',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `hr_users`
--

INSERT INTO `hr_users` (`id`, `username`, `password`, `email`, `activkey`, `createtime`, `lastvisit`, `superuser`, `status`, `usertype`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '9a24eff8c15a6a141ece27eb6947da0f', 1261146094, 1305900627, 1, 1, 'company'),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example.com', '099f825543f7850cc038b90aaff39fac', 1261146096, 0, 0, 1, NULL),
(12, 'saikat', '81dc9bdb52d04dc20036dbd8313ed055', 'saikat@gmail.com', 'd8070910fa72185c88426682f63e978a', 1305990126, 1306086130, 0, 1, 'company'),
(13, 'mushfiq', '81dc9bdb52d04dc20036dbd8313ed055', 'mushfiq@newscred.com', 'd8070910fa72185c88426682f63e978a', 0, 0, 0, 0, 'company');

-- --------------------------------------------------------

--
-- Table structure for table `hr_user_access`
--

CREATE TABLE IF NOT EXISTS `hr_user_access` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` int(11) NOT NULL DEFAULT '0',
  `operation` int(11) NOT NULL DEFAULT '0',
  `value` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `role` (`role`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `hr_user_access`
--

INSERT INTO `hr_user_access` (`id`, `role`, `operation`, `value`) VALUES
(1, 1, 1, 0),
(2, 1, 2, 1),
(3, 1, 3, 1),
(4, 2, 1, 1),
(5, 2, 2, 0),
(6, 2, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hr_user_bkp`
--

CREATE TABLE IF NOT EXISTS `hr_user_bkp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL DEFAULT '',
  `password` varchar(128) DEFAULT '',
  `salt` varchar(128) DEFAULT NULL,
  `full_name` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `role` int(11) DEFAULT '0',
  `create_time` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=127 ;

--
-- Dumping data for table `hr_user_bkp`
--

INSERT INTO `hr_user_bkp` (`id`, `username`, `password`, `salt`, `full_name`, `email`, `role`, `create_time`) VALUES
(58, 'vvv', '', '4c904dee223544.27081743', 'vvv', 'dsdsas@sadsd.sdef', 0, 1284525550),
(59, 'testttt', '7cffd636682d98d33c97f3a759f8ee02', '4c9056eb4e2161.71883864', 'test', '', 0, 1284527851),
(60, 'HJHJH', '7a521f2dae7f384e47790c15ab8a7526', '4c90578f4abc20.57130504', 'FGF', '', 0, 1284528015),
(85, 'ghghgasds', '31a62b5c3810189097c918695cdaaba4', '4c91f0eacab681.33725227', 'dff', '', 0, 1284632810),
(86, 'aaaa', 'e399d344dcd0f8d2e8e298213ff363e4', '4c91f4bd097e73.86486431', 'test com', 'test@te.cc', 0, 1284633789),
(87, 'axx', 'rrr', '4c91f95ae45788.16600364', 'telecom com v', 'ddfd@fsds.sdfd', 0, 1284634970),
(88, 'asdfadsfaf', 'dfeefff1e053f6ba9caf8c87bd7d83d7', '4c930e31701820.19153607', 'sfd', '', 0, 1284705841),
(89, 'comm', 'b39a747ffc232a2b37b4b51c5d259723', '4c9313fca2d5b5.68182425', 'com', '', 0, 1284707324),
(90, 'ddd', '2734f3714fd7510510ea5f9e0ec623ca', '4c931472cc8541.53657016', 'dcdass', '', 0, 1284707442),
(91, 'ddddddd', '197d39ca6fc1af76dea49a9c7d73b3ce', '4c93148acb7fd0.23621200', 'dcdass', '', 0, 1284707466),
(92, 'sddfsdfsf', 'cf3b51d3fc83a7e541e51fad5cc74134', '4c9316107d57e5.88611008', 'sdfsd', '', 0, 1284707856),
(93, 'sddfsdfsfxxx', 'b9eca301a8cacdb3f2840b5459279580', '4c931618f37906.55421241', 'sdfsd', '', 0, 1284707865),
(94, 'sddfsdfsscdsacdefxxx', 'a4e3851795b5c74a6bfb30c9aeb815b3', '4c9316221617f5.37555651', 'sdfsd', '', 0, 1284707874),
(97, 'xzxzx', '46fa735b9adc95fd025866d5bb64a562', '4c931726f365a2.89226168', 'sss', '', 0, 1284708134),
(98, 'nnn', 'a82d426602626cb7c0d1fe2149228ca2', '4c9317d8863f23.98554046', 'sdsd', '', 0, 1284708312),
(99, 'ss', 'a92f156ad57fca350b9e8dfffc5ec5b2', '4c9318a7adae25.69580832', 'sds', '', 5, 1284708519),
(100, 'sscc', 'b57ac606cd2ae2ace0011503dca60a1b', '4c9319a530ab35.62672118', 'sds', '', 0, 1284708773),
(101, 'ssv', '31d3d140b7d22d7c7d81bc547c65f17a', '4c9319cd53f7f1.59704230', 'sds', '', 0, 1284708813),
(102, 'njnj', '05a4bf820c4874202f2603ec36e6ba41', '4c931ab69fcee9.37417525', 'sd', '', 4, 1284709046),
(103, 'hh', '78230b98cf55493ddc2fe4afd92901d2', '4c931c626d00b5.09191597', 'sads', '', 2, 1284709474),
(104, 'jk', '0f504d00ac38d22904e12e0e596b49b6', '4c931cb9367028.33284574', 'sds', '', 3, 1284709561),
(105, 'jkjk', '0c5a03841a27905ce17ff427dee55221', '4c9326c97435a4.20777395', 'xff', '', 3, 1284712137),
(106, 'hhj', '61c57ffe457bab69b2065020909b7936', '4c93271b8beea3.87110616', 'dsf', '', 3, 1284712219),
(107, 'nmnm', '1e1242996308d9c6ab8d5ba0789243f8', '4c935d730cfa35.59338219', 'com', '', 2, 1284726131),
(108, 'admin', 'd268ae7a0a0d9af5833dd2d7e6e28a6c', '4c935db6a5b8f2.58987327', 'khaled Hossain', 'asa@sdfd.sdf', 1, 1284726198),
(109, 'js', 'd268ae7a0a0d9af5833dd2d7e6e28a6c', '4c935db6a5b8f2.58987327', 'jss', 'dsdsas@sadsd.sdef', 3, 1284784382),
(110, 'comdsd', 'fb2c9b3aa418e0aa9dbdd7a220a7a756', '4c95c3c0473fd9.72559883', 'sdf', '', 2, 1284825922),
(111, 'xcxc', 'ea97be7d0a144b5b63cabf851307bf74', '4c94fe30c02d10.59166542', 'asds', '', 2, 1284832816),
(112, 'mmnnm', '1f2574d9d3b50a06e74f77210ed4c143', '4c94ff322d3ad9.64686490', 'ada', '', 2, 1284833074),
(113, 'xcxcx', 'd3e12133242d98c05963b2f2f9f8e6ed', '4c94ffa9bb6c30.17351310', 'sadd', '', 2, 1284833193),
(114, 'xcxcxn', '08b4fcf32a3069516e89a2ba0ff5b76c', '4c94fffc9ebda0.68947140', 'sadd', '', 2, 1284833276),
(115, 'xcxcxnvb', '12b39a3d8e23d35cf099cb84c11e690b', '4c9500698f80f1.09206557', 'sadd', '', 2, 1284833385),
(116, 'tss', '37017fd1e7af34e31ed508636f7c5cae', '4c95011f8405d5.50567547', 'tss', '', 3, 1284833567),
(117, 'b', '3b49d2f71d4f2e64d995c56ac9b6e162', '4c9501a3602056.61973877', 'sdsd', '', 2, 1284833699),
(118, 'compan', '0a9e80aa0f894a55b265984983487931', '4c95de62c84c33.64327035', 'cq', '', 2, 1284890210),
(119, 'comd', '47a13fa88ca11fb486c55019d2d7e93b', '4c95e30bc14168.22832160', 'com', '', 2, 1284891403),
(120, 'z', '02453cd53e676e2092680b05817d63d1', '4c95f2718e55f2.57477899', 'z', '', 2, 1284895345),
(121, 'n', '45a722f3bc5eaa6876712afc8936cb91', '4c9610c80781f0.30111404', 'v', '', 2, 1284903112),
(122, 'skt', '1b85bb6a3dcd256c3b75d00d2bf351f0', '4c96ed69cc58a3.94435277', 'khaled Hossain saikat', 'sad@edsa.sadf', 3, 1284959593),
(123, 'zz', '1defa80c2f062d2204b9f5cc3f46ce21', '4c96edeb61ef36.64428642', 'khaled Hossain saikat', '', 3, 1284959723),
(124, 'com1', '42a6a64f449333cc61726af06c9b1687', '4c970f17373ae7.75908523', 'com1', '', 2, 1284968215),
(125, 'com2', '83e278e42f5c371cb535e65206b151c6', '4c9718cbc5b989.72638254', 'com2', '', 2, 1284970699),
(126, 'com3', '04b38b2129f8ccee3383fc9e6d7bfcef', '4c97197c388d35.44861832', 'com3', '', 2, 1284970876);
