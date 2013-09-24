-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 23, 2013 at 11:56 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cme_agent`
--

INSERT INTO `cme_agent` (`id`, `a_name`, `n_name`, `a_address`, `a_number`, `t_number`, `a_email`, `a_principal`, `image`) VALUES
(1, 'english', 'नेपाली', 'address', '00999', '898989', 'cme@gmal.com', 'cme', '1148875_505034842899906_1919721415_n8.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `cme_tranzaction`
--

INSERT INTO `cme_tranzaction` (`t_id`, `ref_number`, `auth_code`, `agent`, `u_id`, `branch`, `s_name`, `s_title`, `r_title`, `country`, `amount`, `r_name`, `address`, `city`, `contact`, `source`, `relation`, `d_type`, `d_number`, `d_place`, `d_date`, `d_expire`, `date`) VALUES
(1, '25566', '256', 'Western Union', 1, 'Head Office', 'Baburam Adhikari', 'Mr.', 'Mr.', 'Nepal', 54000, 'Ujjwal Ghimire', 'Saradanagar', 'HP', '9845052497', 'Business', 'Other', 'citizenship', '78-4549', 'fmrkfg', '1991-01-12', '0000-00-00', '2013-09-11 11:09:56'),
(2, '25566', '256', 'Western Union', 1, 'Head Office', 'Baburam Adhikari', 'Mr.', 'Mr.', 'Nepal', 54000, 'Ujjwal Ghimire', 'Saradanagar', 'HP', '9845052497', 'Business', 'Other', 'citizenship', '78-4549', 'fmrkfg', '1991-01-12', '0000-00-00', '2013-09-11 11:09:27'),
(3, 'sadfsdf', 'lsdfj', 'Western Union', 1, 'Head Office', 'sdlkjfa', 'Mrs.', 'Mr.', 'Afganistan', 970978907, 'lkdsjf', 'ljdksaf', 'lksdajf', 'lskadjf', 'Business', 'Brother', 'citizenship', 'saldkfj', 'asdlfkj', '1991-02-12', '0000-00-00', '2013-09-11 11:09:56'),
(4, '2331321', 'dsf', 'Western Union', 1, 'Head Office', 'sdjfkljflja', 'Mr.', 'Mr.', 'Bahamas', 897987897, 'ujjawal', 'lsdjf', 'laskjdf', '90098', 'Business', 'Brother', 'citizenship', 'sadf', 'ktm', '1998-02-02', '0000-00-00', '2013-09-11 12:09:04'),
(6, 'lsdfkj', 'lsajfdk', 'Western Union', 1, 'Head Office', 'sldkfj', 'Mr.', 'Mr.', 'Albania', 898787, 'sldkjf', 'lsajfd', 'sdjlfk', '08709', 'Business', 'Brother', 'citizenship', '1998', 'sdf', '1991-02-08', '0000-00-00', '2013-09-18 07:09:58'),
(7, 'sdfsdfdsfsdf', 'sdfdfdsf', 'english', 1, 'Head Office', 'sdfsdfsdf', 'Mr.', 'Mr.', 'Nepal', 656454, 'lsdjf', 'dsalfj', 'alsdkfj', 'asdlkfj', 'Business', 'Brother', 'citizenship', 'sldkfj', 'dslkfj', '1991-02-08', '0000-00-00', '2013-09-20 06:09:54'),
(8, 'sdf', 'sdlf', 'english', 1, 'Head Office', 'sdfjk', 'Mr.', 'Mr.', 'Nambia', 87987987, 'sdlkfj', 'lsdjf', 'jsdakf', 'ksdjf', 'Business', 'Brother', 'citizenship', 'sldkjf', 'sdkjf', '1999-01-08', '0000-00-00', '2013-09-22 12:09:50'),
(9, 'sdfdf', 'sdff', 'english', 1, 'Head Office', 'sldfkj', 'Mr.', 'Mr.', 'Nambia', 98098080, 'sdflkj', 'slkjdf', 'sldajfk', '897987', 'Business', 'Brother', 'citizenship', 'sdf', 'sdkfh', '1991-02-08', '1998-02-08', '2013-09-23 11:09:35');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`c_id`, `cus_id`, `full_id`, `title`, `fname`, `mname`, `lname`, `gender`, `dob`, `address`, `distric`, `vdc`, `tole`, `zone`, `country`, `conpersonal`, `conhome`, `image`, `email`, `id`, `u_id`) VALUES
(1, '01001', 'HD-001-01001', 'Mrs.', 'test', 'test', 'test', 'male', '0000-00-00', 'address', 'distric', 'vdc', 'tole', 'zone', 'Nepal', '789654', '789654', '', 'ramjisubedi1991@yahoo.com', 4, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=329 ;

--
-- Dumping data for table `identity_detail`
--

INSERT INTO `identity_detail` (`ci_id`, `type`, `id_number`, `issue_place`, `issue_date`, `expire_date`, `image`, `c_id`) VALUES
(325, 'Citizenship', '', '', '1970-01-01', '0000-00-00', ' ', 1),
(326, 'Licences', '', '', '1970-01-01', '1970-01-01', ' ', 1),
(327, 'Passport', '', '', '1970-01-01', '1970-01-01', ' ', 1),
(328, 'Other', '', '', '0000-00-00', '0000-00-00', ' ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(200) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone_number` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `upass` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`u_id`),
  UNIQUE KEY `uname` (`uname`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `uname`, `full_name`, `address`, `phone_number`, `email`, `upass`, `role`, `id`) VALUES
(1, 'admin', '', '', '', '', '21232f297a57a5a743894a0e4a801fc3', 'admin', 4),
(2, 'user', '', '', '', '', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 1),
(3, 'rsubedi', 'Ramji Subedi', 'chitwan', '98476771822222', 'ramjisubedi1991@yahoo.com', '4641999a7679fcaef2df0e26d11e3c72', 'admin', 1);

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
