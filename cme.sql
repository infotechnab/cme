-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 10, 2013 at 10:43 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cme`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `b_name` varchar(2000) NOT NULL,
  `b_title` varchar(200) NOT NULL,
  `b_code` varchar(200) NOT NULL,
  `person` varchar(200) NOT NULL,
  `ph_number` varchar(100) NOT NULL,
  `mb_number` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `b_name`, `b_title`, `b_code`, `person`, `ph_number`, `mb_number`, `address`) VALUES
(1, 'Manakamana Plala,', 'MD', '002', ' Basantapur bazar, Chitwan, Nepal Phone:056-691759', 'sdf', 'sdf', 'sdf'),
(3, 'hello my new branch', 'TD', '003', 'lsdkjf', 'lskdjf', 'lksjdf', 'lkdjsf'),
(4, 'Head Office', 'HD', '001', 'you', '987', '987', 'chitwan');

-- --------------------------------------------------------

--
-- Table structure for table `cme_agent`
--

CREATE TABLE IF NOT EXISTS `cme_agent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `a_name` varchar(200) NOT NULL,
  `n_name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `a_address` varchar(2000) NOT NULL,
  `a_number` varchar(50) NOT NULL,
  `t_number` varchar(2000) NOT NULL,
  `a_email` varchar(100) NOT NULL,
  `a_principal` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `cme_agent`
--

INSERT INTO `cme_agent` (`id`, `a_name`, `n_name`, `a_address`, `a_number`, `t_number`, `a_email`, `a_principal`, `image`) VALUES
(1, 'new company', '', 'adsf', 'sdfdsf', '', 'ramji@uahoo.com', 'sdfdsfdsf', '1148875_505034842899906_1919721415_n2.jpg'),
(2, 'cme sdfjsdlfj', '', 'dsflj', 'dsfj', '', 'ramji@uahoo.com', 'dsfsdfsf', 'default.jpg'),
(3, 'jljdlf', '', 'ljsdlfj', 'lsjflj', '', 'ljsl@JFJ.FJD', 'dsfsfdf', 'Galvanize_Frequency_v4.gif'),
(5, 'skdljfsdfsdfsdfsdfdsf', '', 'laskdjf', 'jsadlkfj', '', 'lsdjkfa@yaho.com', 'lsadkjf', '1148875_505034842899906_1919721415_n3.jpg'),
(6, 'lasdfjlfjas', 'unicode upade', 'asldkjf', '987987', '', 'ramji@uahoo.com', 'aa', 'delete.jpg'),
(7, 'toll', 'free', 'number', '123', '456789123456', 'ramji@uahoo.com', 'apple', 'flower_n.jpg'),
(8, 'dsfkfj', 'lsakjdf', 'alskdjf', '09890', '0978087098', 'ramji@uahoo.com', 'sdfdsf', '1148875_505034842899906_1919721415_n4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cme_tranzaction`
--

CREATE TABLE IF NOT EXISTS `cme_tranzaction` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_number` varchar(200) NOT NULL,
  `auth_code` varchar(200) NOT NULL,
  `agent` varchar(200) NOT NULL,
  `u_id` int(11) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `s_name` varchar(200) NOT NULL,
  `s_title` varchar(100) NOT NULL,
  `r_title` varchar(50) NOT NULL,
  `country` varchar(200) NOT NULL,
  `amount` int(11) NOT NULL,
  `r_name` varchar(200) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `city` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `source` varchar(200) NOT NULL,
  `relation` varchar(200) NOT NULL,
  `d_type` varchar(200) NOT NULL,
  `d_number` varchar(200) NOT NULL,
  `d_place` varchar(200) NOT NULL,
  `d_date` date NOT NULL,
  `d_expire` date NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`t_id`),
  KEY `u_id` (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=99 ;

--
-- Dumping data for table `cme_tranzaction`
--

INSERT INTO `cme_tranzaction` (`t_id`, `ref_number`, `auth_code`, `agent`, `u_id`, `branch`, `s_name`, `s_title`, `r_title`, `country`, `amount`, `r_name`, `address`, `city`, `contact`, `source`, `relation`, `d_type`, `d_number`, `d_place`, `d_date`, `d_expire`, `date`) VALUES
(69, 'dsfsdf', 'sdf', 'sdfdf', 1, 'Manakamana Plala, Basantapur bazar, Chitwan, Nepal Phone:056-691759', 'sdfds', 'Mrs.', '0', 'Bahrain', 435345, 'sdfsd', 'sdfsdf', 'sdfsdf', 'sdf', 'Business', 'Sister', 'license', 'sdf', 'sdf', '2012-11-12', '2013-08-12', '0000-00-00 00:00:00'),
(70, 'dsf', 'sdf', 'sdfdf', 1, 'Manakamana Plala, Basantapur bazar, Chitwan, Nepal Phone:056-691759', 'sdfds', 'Miss.', '0', 'Aruba', 43534, 'lsjd;fj', 'lsjdflj', 'ljlsjdf', 'ljlsjdf', 'Business', 'Brother', 'citizenship', '038', '`384-89;k;sd', '2012-10-04', '2013-10-05', '2013-09-04 07:09:33'),
(71, 'dsf', 'sdf', 'sdfdf', 1, 'Manakamana Plala, Basantapur bazar, Chitwan, Nepal Phone:056-691759', 'sdfds', 'Miss.', '0', 'Aruba', 43534, 'lsjd;fj', 'lsjdflj', 'ljlsjdf', 'ljlsjdf', 'Business', 'Brother', 'citizenship', '038', '`384-89;k;sd', '2012-10-04', '2013-10-05', '2013-09-04 07:09:06'),
(72, 'erge', 'dsfs', 'sdfdf', 1, 'Manakamana Plala, Basantapur bazar, Chitwan, Nepal Phone:056-691759', 'sdfs', 'Miss.', '0', 'Bahrain', 32, 'ljsldfj', 'jsldfj', 'jlsjdf', 'ljlsjf', 'Business', 'Brother', 'citizenship', '-932-9', 'sjf', '2012-02-12', '2012-01-12', '2013-09-04 08:09:26'),
(73, 'erge', 'dsfs', 'sdfdf', 1, 'Manakamana Plala, Basantapur bazar, Chitwan, Nepal Phone:056-691759', 'sdfs', 'Miss.', '0', 'Bahrain', 32, 'ljsldfj', 'jsldfj', 'jlsjdf', 'ljlsjf', 'Business', 'Brother', 'citizenship', '-932-9', 'sjf', '2012-02-12', '2012-01-12', '2013-09-04 08:09:59'),
(74, 'sdfdsf', '', 'sdfdf', 1, '', 'sdf', 'Mr.', ' Mr.', 'Bangladesh', 3151651, 'bhuwan bhuwan', 'chitwan', 'chitwan', '98456987,', 'Business', 'Brother', 'citizenship', 'sldjf', 'ldkjf', '1991-02-09', '0199-02-05', '0000-00-00 00:00:00'),
(75, 'sdfdsf', 'dfsfdf', 'sdfdf', 1, '', 'sdf', 'Mr.', ' Mr.', 'Bangladesh', 3151651, 'bhuwan bhuwan', 'chitwan', 'chitwan', '98456987,', 'Business', 'Brother', 'citizenship', 'sldjf', 'ldkjf', '1991-02-09', '0199-02-05', '0000-00-00 00:00:00'),
(76, 'sdfdsf', 'dfsfdf', 'sdfdf', 1, '', 'sdf', 'Mr.', ' Mr.', 'Bangladesh', 3151651, 'bhuwan bhuwan', 'chitwan', 'chitwan', '98456987,', 'Business', 'Brother', 'citizenship', 'sldjf', 'ldkjf', '1991-02-09', '0199-02-05', '2013-09-04 10:09:03'),
(77, 'sdfjkaflj', 'lsdakfjaslfsjadf', 'sdfdf', 2, 'Manakamana Plala, Basantapur bazar, Chitwan, Nepal Phone:056-691759', 'saldkfjsal;dfjaflk', 'Mr.', 'Mr.', 'Laos', 654654, 'lsadkjfalsdfj', 'alskdjfsaldfj', 'laksjdflsdfj', '354', 'Business', 'Brother', 'citizenship', 'skldjfh', 'kasdfh', '1991-02-09', '9999-02-09', '2013-09-04 10:09:21'),
(78, '12345', 'iadff', 'cme sdfjsdlfj', 2, '', 'bhuwan', 'Mr.', ' ', 'Nambia', 50000, 'sonam sonam', 'chitwan', 'chitwan', '999,', 'Business', 'Brother', 'citizenship', 'slkdfj', 'alsdkjf', '1991-02-08', '1991-02-09', '2013-09-05 06:09:59'),
(79, '12345', '1234', 'sdfdf', 1, '', 'slkdfh', 'Mr.', ' ', 'Nepal', 78899999, 'ramji subedi', 'mukundapur', 'nawalparisi', '98476,77182', 'Business', 'Brother', 'license', 'sakjdfhk', 'skdjafhdkf', '9999-02-09', '9999-02-09', '2013-09-05 07:09:19'),
(80, '12345', '1234', 'sdfdf', 1, '', 'slkdfh', 'Mr.', ' ', 'Nepal', 78899999, 'ramji subedi', 'mukundapur', 'nawalparisi', '98476,77182', 'Business', 'Brother', 'license', 'sakjdfhk', 'skdjafhdkf', '9999-02-09', '9999-02-09', '2013-09-05 07:09:01'),
(81, '12345', '1234', 'sdfdf', 1, '', 'slkdfh', 'Mr.', ' ', 'Nepal', 78899999, 'ramji subedi', 'mukundapur', 'nawalparisi', '98476,77182', 'Business', 'Brother', 'license', 'sakjdfhk', 'skdjafhdkf', '9999-02-09', '9999-02-09', '2013-09-05 10:09:15'),
(82, 'dfg', 'ldsfkgj', 'sdfdf', 1, '', 'ldjf', 'Mr.', ' Mr.', 'Jamaica', 2147483647, 'ramji subedi', 'mukundapur', 'nawalparisi', '9847677182', 'Business', 'Brother', 'citizenship', 'dlsjkf', 'ldjf', '9999-02-09', '5555-02-08', '2013-09-05 10:09:13'),
(83, 'dsf', 'dfdf', 'cme sdfjsdlfj', 3, '', 'sdfdsf', 'Mr.', ' Mr.', 'Bahamas', 2147483647, 'ramji subedi', 'mukundapur', 'nawalparisi', '9847677182', 'Business', 'Brother', 'citizenship', 'sdff', 'sd;fkjlj', '1991-02-08', '1991-02-08', '2013-09-08 07:09:33'),
(84, '112', 'saldf', 'toll', 1, 'Manakamana Plala,', 'sdlfj', 'Mr.', 'Mr.', 'Nepal', 98098, 'sldjkf', 'ljsdf', 'ldsajf', 'asdljf', 'Business', 'Brother', 'citizenship', '41654', 'sadfh', '1991-02-08', '1991-02-08', '2013-09-08 11:09:01'),
(85, '112', 'saldf', 'toll', 1, 'Manakamana Plala,', 'sdlfj', 'Mr.', 'Mr.', 'Nepal', 98098, 'sldjkf', 'ljsdf', 'ldsajf', 'asdljf', 'Business', 'Brother', 'citizenship', '41654', 'sadfh', '1991-02-08', '1991-02-08', '2013-09-08 11:09:32'),
(86, '112', 'saldf', 'toll', 1, 'Manakamana Plala,', 'sdlfj', 'Mr.', 'Mr.', 'Nepal', 98098, 'sldjkf', 'ljsdf', 'ldsajf', 'asdljf', 'Business', 'Brother', 'citizenship', '41654', 'sadfh', '1991-02-08', '1991-02-08', '2013-09-08 11:09:48'),
(87, '112', 'saldf', 'toll', 1, 'Manakamana Plala,', 'sdlfj', 'Mr.', 'Mr.', 'Nepal', 98098, 'sldjkf', 'ljsdf', 'ldsajf', 'asdljf', 'Business', 'Brother', 'citizenship', '41654', 'sadfh', '1991-02-08', '1991-02-08', '2013-09-08 11:09:35'),
(88, '112', 'saldf', 'toll', 1, 'Manakamana Plala,', 'sdlfj', 'Mr.', 'Mr.', 'Nepal', 98098, 'sldjkf', 'ljsdf', 'ldsajf', 'asdljf', 'Business', 'Brother', 'citizenship', '41654', 'sadfh', '1991-02-08', '1991-02-08', '2013-09-08 11:09:47'),
(89, '112', 'saldf', 'toll', 1, 'Manakamana Plala,', 'sdlfj', 'Mr.', 'Mr.', 'Nepal', 98098, 'sldjkf', 'ljsdf', 'ldsajf', 'asdljf', 'Business', 'Brother', 'citizenship', '41654', 'sadfh', '1991-02-08', '1991-02-08', '2013-09-08 11:09:12'),
(90, 'sdfsdf', 'asldfj', 'new company', 1, 'Manakamana Plala,', 'saldjkf', 'Mr.', 'Mr.', 'Nepal', 908098, 'sladfjk', 'salkjdf', 'lasdkjf', '90877', 'Business', 'Brother', 'citizenship', 'asldkfj', 'asldkfj', '9999-01-08', '9999-01-08', '2013-09-08 12:09:38'),
(91, 'sdf', 'sladkjf', 'new company', 1, 'Manakamana Plala,', 'hello', 'Mr.', 'Mrs.', 'Nepal', 99999, 'hy', 'chitwan', 'chitwan', '999', 'Business', 'Brother', 'citizenship', 'saldfj', 'alskjfd', '9999-01-09', '9999-01-09', '2013-09-09 04:09:18'),
(92, 'sdff', 'asdkjfh', 'new company', 1, 'Manakamana Plala,', 'askhdfkj', 'Mr.', 'Mr.', 'Nepal', 908, 'slakdjf', 'laskjdf', 'lasdjf', 'aslkjdf', 'Business', 'Brother', 'citizenship', 'saldjfk', 'sadljfk', '9999-01-09', '9999-01-09', '2013-09-09 08:09:16'),
(93, 'sdfsf', 'sdfdsfdsf', 'new company', 1, '', 'sdfsf', 'Mr.', ' Mr.', 'Nepal', 5665464, 'ram ram', 'ram', 'ram', '-09-9,-09', 'Business', 'Mother', 'citizenship', '123', 'sdafh', '0000-00-00', '2005-01-08', '2013-09-09 11:09:28'),
(94, 'sdfsf', 'sdfdsfdsf', 'new company', 1, '', 'sdfsf', 'Mr.', ' Mr.', 'Nepal', 5665464, 'ram ram', 'ram', 'ram', '-09-9,-09', 'Business', 'Mother', 'citizenship', '123', 'sdafh', '0000-00-00', '2005-01-08', '2013-09-09 11:09:53'),
(95, 'dfs;glfjg', 'asldfj', 'new company', 1, '', 'alsdkjflkjf', 'Mr.', ' Mr.', 'Nambia', 54654654, 'ram ram', 'ram', 'ram', '-09-9,-09', 'Business', 'Brother', 'citizenship', '123', 'sdafh', '0000-00-00', '2005-01-08', '2013-09-09 11:09:29'),
(96, 'sdfaf', 'saldkjf', 'new company', 1, '', 'sldakjf', 'Mr.', ' Mr.', 'Nambia', 88987, 'ram ram', 'ram', 'ram', '-09-9,-09', 'Business', 'Brother', 'citizenship', '123', 'sdafh', '0000-00-00', '2005-01-08', '2013-09-09 11:09:55'),
(97, 'sdff', 'sdlfkj', 'new company', 1, '', 'lsdkjf', 'Mr.', ' Mr.', 'Nambia', 898798, 'ram ram', 'ram', 'ram', '-09-9,-09', 'Business', 'Brother', 'citizenship', '123', 'sdafh', '1999-02-08', '2005-01-08', '2013-09-09 11:09:19'),
(98, '231213', '32112', 'new company', 1, 'Head Office', 'sldjkfjf', 'Mr.', 'Mr.', 'Bahamas', 2147483647, 'sldfj', 'sjdlf', 'ljsdf', '098098', 'Business', 'Brother', 'citizenship', 'sdlfjlfj', 'jsdfj', '1991-01-08', '1991-02-08', '2013-09-10 08:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE IF NOT EXISTS `customer_info` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `cus_id` varchar(50) NOT NULL,
  `full_id` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(500) NOT NULL,
  `distric` varchar(200) NOT NULL,
  `vdc` varchar(200) NOT NULL,
  `tole` varchar(200) NOT NULL,
  `zone` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `conpersonal` varchar(100) NOT NULL,
  `conhome` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_id`),
  KEY `id` (`id`),
  KEY `u_id` (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`c_id`, `cus_id`, `full_id`, `title`, `fname`, `mname`, `lname`, `gender`, `dob`, `address`, `distric`, `vdc`, `tole`, `zone`, `country`, `conpersonal`, `conhome`, `image`, `email`, `id`, `u_id`) VALUES
(1, '01002', 'HD-001-01002', 'Mr.', 'sdaf', 'alsdkjf', 'asldfkj', 'male', '1991-02-08', 'ldskjf', 'asldfkj', 'lksafjd', 'asfldkj', 'asldkfj', 'Nepal', '', '', '', '', 4, 1),
(2, '01003', 'HD-001-01003', 'Mr.', 'lksadjflkfj', 'lsdjlfkaj', 'alsdjf', 'male', '1998-02-08', 'sda;fj', 'asldkfj', 'as;ldjkf', 'asldfj', 'asdlkfj', 'Nepal', '', '', '', '', 4, 1),
(3, '01004', 'HD-001-01004', 'Mr.', 'lksadjflkfj', 'lsdjlfkaj', 'alsdjf', 'male', '1998-02-08', 'sda;fj', 'asldkfj', 'as;ldjkf', 'asldfj', 'asdlkfj', 'Nepal', '', '', '', '', 4, 1),
(4, '01005', 'HD-001-01005', 'Mr.', 'lksadjflkfj', 'lsdjlfkaj', 'alsdjf', 'male', '1998-02-08', 'sda;fj', 'asldkfj', 'as;ldjkf', 'asldfj', 'asdlkfj', 'Nepal', '', '', '', '', 4, 1),
(5, '01006', 'HD-001-01006', 'Mr.', 'lksadjflkfj', 'lsdjlfkaj', 'alsdjf', 'male', '1998-02-08', 'sda;fj', 'asldkfj', 'as;ldjkf', 'asldfj', 'asdlkfj', 'Nepal', '', '', '', '', 4, 1),
(6, '01007', 'HD-001-01007', 'Mr.', 'lksadjflkfj', 'lsdjlfkaj', 'alsdjf', 'male', '1998-02-08', 'sda;fj', 'asldkfj', 'as;ldjkf', 'asldfj', 'asdlkfj', 'Nepal', '', '', '', '', 4, 1),
(7, '01008', 'HD-001-01008', 'Mr.', 'lksadjflkfj', 'lsdjlfkaj', 'alsdjf', 'male', '1998-02-08', 'sda;fj', 'asldkfj', 'as;ldjkf', 'asldfj', 'asdlkfj', 'Nepal', '', '', '', '', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `identity_detail`
--

CREATE TABLE IF NOT EXISTS `identity_detail` (
  `ci_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(200) NOT NULL,
  `id_number` varchar(300) NOT NULL,
  `issue_place` varchar(500) NOT NULL,
  `issue_date` date NOT NULL,
  `expire_date` date NOT NULL,
  `image` varchar(200) NOT NULL,
  `c_id` int(11) NOT NULL,
  PRIMARY KEY (`ci_id`),
  KEY `c_id` (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=289 ;

--
-- Dumping data for table `identity_detail`
--

INSERT INTO `identity_detail` (`ci_id`, `type`, `id_number`, `issue_place`, `issue_date`, `expire_date`, `image`, `c_id`) VALUES
(261, 'citizenship', '', '', '0000-00-00', '0000-00-00', ' ', 1),
(262, 'license', '', '', '0000-00-00', '0000-00-00', ' ', 1),
(263, 'passport', '', '', '0000-00-00', '0000-00-00', ' ', 1),
(264, 'other', '', '', '0000-00-00', '0000-00-00', ' ', 1),
(265, 'citizenship', '', '', '0000-00-00', '0000-00-00', ' ', 2),
(266, 'license', '', '', '0000-00-00', '0000-00-00', ' ', 2),
(267, 'passport', '', '', '0000-00-00', '0000-00-00', ' ', 2),
(268, 'other', '', '', '0000-00-00', '0000-00-00', ' ', 2),
(269, 'citizenship', '', '', '0000-00-00', '0000-00-00', ' ', 3),
(270, 'license', '', '', '0000-00-00', '0000-00-00', ' ', 3),
(271, 'passport', '', '', '0000-00-00', '0000-00-00', ' ', 3),
(272, 'other', '', '', '0000-00-00', '0000-00-00', ' ', 3),
(273, 'citizenship', '', '', '0000-00-00', '0000-00-00', ' ', 4),
(274, 'license', '', '', '0000-00-00', '0000-00-00', ' ', 4),
(275, 'passport', '', '', '0000-00-00', '0000-00-00', ' ', 4),
(276, 'other', '', '', '0000-00-00', '0000-00-00', ' ', 4),
(277, 'citizenship', '', '', '0000-00-00', '0000-00-00', ' ', 5),
(278, 'license', '', '', '0000-00-00', '0000-00-00', ' ', 5),
(279, 'passport', '', '', '0000-00-00', '0000-00-00', ' ', 5),
(280, 'other', '', '', '0000-00-00', '0000-00-00', ' ', 5),
(281, 'citizenship', '', '', '0000-00-00', '0000-00-00', ' ', 6),
(282, 'license', '', '', '0000-00-00', '0000-00-00', ' ', 6),
(283, 'passport', '', '', '0000-00-00', '0000-00-00', ' ', 6),
(284, 'other', '', '', '0000-00-00', '0000-00-00', ' ', 6),
(285, 'citizenship', '', '', '0000-00-00', '0000-00-00', ' ', 7),
(286, 'license', '', '', '0000-00-00', '0000-00-00', ' ', 7),
(287, 'passport', '', '', '0000-00-00', '0000-00-00', ' ', 7),
(288, 'other', '', '', '0000-00-00', '0000-00-00', ' ', 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(200) NOT NULL,
  `upass` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`u_id`),
  UNIQUE KEY `uname` (`uname`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `uname`, `upass`, `role`, `id`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ad', 4),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'us', 1),
(3, 'ram', '4641999a7679fcaef2df0e26d11e3c72', 'ad', 3),
(4, 'hellodsfsdfdsf', '69a329523ce1ec88bf63061863d9cb14', 'us', 3),
(6, 'newadmin', '21232f297a57a5a743894a0e4a801fc3', 'ad', 1),
(7, 'newuser', 'ee11cbb19052e40b07aac0ca060c23ee', 'us', 3),
(8, 'lastuser', 'ee11cbb19052e40b07aac0ca060c23ee', 'us', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cme_tranzaction`
--
ALTER TABLE `cme_tranzaction`
  ADD CONSTRAINT `cme_tranzaction_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`);

--
-- Constraints for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD CONSTRAINT `customer_info_ibfk_1` FOREIGN KEY (`id`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `customer_info_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`);

--
-- Constraints for table `identity_detail`
--
ALTER TABLE `identity_detail`
  ADD CONSTRAINT `identity_detail_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer_info` (`c_id`),
  ADD CONSTRAINT `identity_detail_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `customer_info` (`c_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id`) REFERENCES `branch` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
