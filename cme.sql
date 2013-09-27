-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 27, 2013 at 09:47 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `b_name`, `b_title`, `b_code`, `person`, `ph_number`, `mb_number`, `address`) VALUES
(1, 'Tandi Branch', 'TD', '002', 'Ramesh Paudel', '05645645', '9852025200', 'Sauraha Chowck, Tandi, Ratnanagar - 1, Chitwan'),
(4, 'Head Office', 'HQ', '001', 'Bigyan', '987', '987', 'Prem Market, Sahid Chowck, Narayangadh, Chitwan, Nepal'),
(5, 'Madi Branch', 'MB', '005', 'Jivan Mahato', '0348508', '9802072672', 'Manakamana Plaza, Basantapur Bazar, Baghauda - 2, Madi, Chitwan');

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
  `login` varchar(500) NOT NULL,
  `web` varchar(500) NOT NULL,
  `cus_id` varchar(200) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `access_code` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cme_agent`
--

INSERT INTO `cme_agent` (`id`, `a_name`, `n_name`, `a_address`, `a_number`, `t_number`, `a_email`, `a_principal`, `login`, `web`, `cus_id`, `user_id`, `access_code`, `image`) VALUES
(1, 'english', 'नेपाली', 'address', '00999', '898989', 'cme@gmal.com', 'cme', 'www.yahoo.com', 'www,google.com', '', '', '0', '1148875_505034842899906_1919721415_n8.jpg'),
(2, 'lsdjfl', 'ljdslj', 'qljsdljf', 'ljdlsjf', 'ljsldjf', 'ljsdlfj@ljdlf.com', 'ljslfj', '', '', '', '', '', '8_n4.jpg'),
(3, 'New Remittance Company', 'न्यु रेमित्तंस कम्पनी', 'Address', '908', '0987', 'cme@gmal.com', '', 'www.yahoo.com', 'www.facebook.com', '897', '897', '0', '8_n5.jpg');

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
  `cid` varchar(11) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `s_name` varchar(200) NOT NULL,
  `s_title` varchar(100) NOT NULL,
  `r_title` varchar(50) NOT NULL,
  `country` varchar(200) NOT NULL,
  `amount` double NOT NULL,
  `r_name` varchar(200) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `city2` varchar(200) NOT NULL,
  `s_contact` varchar(200) NOT NULL,
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
  `total_amount` float NOT NULL,
  PRIMARY KEY (`t_id`),
  KEY `u_id` (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `cme_tranzaction`
--

INSERT INTO `cme_tranzaction` (`t_id`, `ref_number`, `auth_code`, `agent`, `u_id`, `cid`, `branch`, `s_name`, `s_title`, `r_title`, `country`, `amount`, `r_name`, `address`, `city2`, `s_contact`, `city`, `contact`, `source`, `relation`, `d_type`, `d_number`, `d_place`, `d_date`, `d_expire`, `date`, `total_amount`) VALUES
(1, '25566', '256', 'Western Union', 1, '', 'Head Office', 'Baburam Adhikari', 'Mr.', 'Mr.', 'Nepal', 54000, 'Ujjwal Ghimire', 'Saradanagar', '', '', 'HP', '9845052497', 'Business', 'Other', 'citizenship', '78-4549', 'fmrkfg', '1991-01-12', '0000-00-00', '2013-09-11 11:09:56', 0),
(2, '25566', '256', 'Western Union', 1, '', 'Head Office', 'Baburam Adhikari', 'Mr.', 'Mr.', 'Nepal', 54000, 'Ujjwal Ghimire', 'Saradanagar', '', '', 'HP', '9845052497', 'Business', 'Other', 'citizenship', '78-4549', 'fmrkfg', '1991-01-12', '0000-00-00', '2013-09-11 11:09:27', 0),
(3, 'sadfsdf', 'lsdfj', 'Western Union', 1, '', 'Head Office', 'sdlkjfa', 'Mrs.', 'Mr.', 'Afganistan', 9709, 'lkdsjf', 'ljdksaf', '', '', 'lksdajf', 'lskadjf', 'Business', 'Brother', 'citizenship', 'saldkfj', 'asdlfkj', '1991-02-12', '0000-00-00', '2013-09-11 11:09:56', 0),
(4, '2331321', 'dsf', 'Western Union', 1, '', 'Head Office', 'sdjfkljflja', 'Mr.', 'Mr.', 'Bahamas', 89798, 'ujjawal', 'lsdjf', '', '', 'laskjdf', '900', 'Business', 'Brother', 'citizenship', 'sadf', 'ktm', '1998-02-02', '0000-00-00', '2013-09-11 12:09:04', 0),
(6, 'lsdfkj', 'lsajfdk', 'Western Union', 1, '', 'Head Office', 'sldkfj', 'Mr.', 'Mr.', 'Albania', 898, 'sldkjf', 'lsajfd', '', '', 'sdjlfk', '08709', 'Business', 'Brother', 'citizenship', '1998', 'sdf', '1991-02-08', '0000-00-00', '2013-09-18 07:09:58', 0),
(7, 'sdfsdfdsfsdf', 'sdfdfdsf', 'english', 1, '', 'Head Office', 'sdfsdfsdf', 'Mr.', 'Mr.', 'Nepal', 6564, 'lsdjf', 'dsalfj', '', '', 'alsdkfj', 'asdlkfj', 'Business', 'Brother', 'citizenship', 'sldkfj', 'dslkfj', '1991-02-08', '0000-00-00', '2013-09-20 06:09:54', 0),
(8, 'sdf', 'sdlf', 'english', 1, '', 'Head Office', 'sdfjk', 'Mr.', 'Mr.', 'Nambia', 8798, 'sdlkfj', 'lsdjf', '', '', 'jsdakf', 'ksdjf', 'Business', 'Brother', 'citizenship', 'sldkjf', 'sdkjf', '1999-01-08', '0000-00-00', '2013-09-22 12:09:50', 0),
(9, 'sdfdf', 'sdff', 'english', 1, '', 'Head Office', 'sldfkj', 'Mr.', 'Mr.', 'Nambia', 9809, 'sdflkj', 'slkjdf', '', '', 'sldajfk', '897987', 'Business', 'Brother', 'citizenship', 'sdf', 'sdkfh', '1991-02-08', '1998-02-08', '2013-09-23 11:09:35', 0),
(12, 'sdfsdf', 'lsakdfj', 'english', 1, '1', 'Head Office', 'lsakdfj', 'Mrs.', 'Mr.', 'Bahamas', 89, 'lsadkjf', 'lsadkjf', '', '', 'lasdfjk', 'iuy', 'Business', 'Brother', 'citizenship', 'skjadfh', 'asdhf', '1998-02-08', '0000-00-00', '2013-09-24 06:09:20', 0),
(13, 'lksdjklfj', 'alskjdf', 'english', 2, '', 'Manakamana Plala,', 'slkdfja', 'Mr.', 'Mrs.', 'Cambodia', 54, 'sladkfj', 'asldkjf', '', '', 'asdlkfj', 'asdklfj', 'Business', 'Brother', 'citizenship', 'sakldjf', 'asldfjk', '1998-01-08', '0000-00-00', '2013-09-24 07:09:27', 0),
(14, '1234567890', '', 'lsdjfl', 1, '', 'Head Office', 'Tej Rai', 'Mr.', 'Mrs.', 'Nepal', 10000, 'Khusenichho', ' Bafal, Kathmandu Nepal', '', '', '', '9802028365', 'Business', 'Other', 'citizenship', '123', 'Kathmandu', '0000-00-00', '0000-00-00', '2013-09-25 06:09:47', 0),
(15, 'sdfdsfdf', 'sdfdsfdf', 'english', 1, '3', '0', 'sdfdsfdf', 'Mr.', 'Mr.', 'Bangladesh', 989, 'Ujjwal Thapa', 'sdfjkj', '', '', 'chitwan', '987456,056885', 'Business', 'Brother', 'Citizenship', 'sdkfh', 'ksdfh', '0000-00-00', '0000-00-00', '2013-09-26 06:09:41', 0),
(16, 'dsff', 'sldkjf', 'english', 2, '', 'Tandi Branch', 'saldkfj', 'Mrs.', 'Mr.', 'Bahamas', 808, 'alsdfj', 'laskdjf', '', '', 'lasdjf', 'lskdfj', 'Business', 'Brother', 'citizenship', 'lsdjkf', 'sdlkfj', '0000-00-00', '0000-00-00', '2013-09-26 11:09:28', 990698),
(17, 'dsfj', 'sdlfj', 'english', 1, '', 'Head Office', 'sadlfj', 'Mr.', 'Mr.', 'Bahamas', 100.5, 'ldsjf', 'lkjdf', '', '', 'djsf', 'dlskfj', 'Business', 'Brother', 'citizenship', 'dsf', 'dlsfjk', '0000-00-00', '0000-00-00', '2013-09-27 09:09:36', 0);

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
  `ward` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`c_id`, `cus_id`, `full_id`, `title`, `fname`, `mname`, `lname`, `gender`, `dob`, `address`, `ward`, `city`, `distric`, `vdc`, `tole`, `zone`, `country`, `conpersonal`, `conhome`, `image`, `email`, `id`, `u_id`) VALUES
(1, '01001', 'HD-001-01001', 'Mrs.', 'test', 'test', 'test', 'male', '0000-00-00', 'address', '', '', 'distric', 'vdc', 'tole', 'zone', 'Nepal', '789654', '123456', '8_n13.jpg', 'ramjisubedi1991@yahoo.com', 4, 1),
(2, '01002', 'HD-001-01002', 'Mr.', 'Ram', '', 'Mahato', 'male', '1980-06-01', 'Manakamana Plaza, Basantapur Bazar, Madi', '', '', 'Chitwan', 'Baghauda', 'Basantapur', 'Narayani', 'Nepal', '98202072672', '056965265', 'ashu.jpg', 'fsadfsdaf@afsdfsd.com', 4, 1),
(3, '01003', 'HQ-001-01003', 'Mr.', 'Ujjwal', 'Ram', 'Thapa', 'male', '1981-04-13', 'sdfjkj', '5', 'chitwan', 'chitwan', 'chitwan', 'chitwan', 'narayani', 'Nepal', '987456', '056885', '', '', 4, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=337 ;

--
-- Dumping data for table `identity_detail`
--

INSERT INTO `identity_detail` (`ci_id`, `type`, `id_number`, `issue_place`, `issue_date`, `expire_date`, `image`, `c_id`) VALUES
(325, 'Citizenship', '', '', '1970-01-01', '0000-00-00', ' ', 1),
(326, 'Licences', '', '', '1970-01-01', '1970-01-01', ' ', 1),
(327, 'Passport', '', '', '1970-01-01', '1970-01-01', ' ', 1),
(328, 'Other', '', '', '1970-01-01', '1970-01-01', ' ', 1),
(329, 'Citizenship', '221', 'Chitwan', '1999-08-21', '0000-00-00', 'delete1.jpg', 2),
(330, 'Licences', '', '', '0000-00-00', '0000-00-00', ' ', 2),
(331, 'Passport', '', '', '0000-00-00', '0000-00-00', ' ', 2),
(332, 'Other', '', '', '0000-00-00', '0000-00-00', ' ', 2),
(333, 'Citizenship', '', '', '0000-00-00', '0000-00-00', ' ', 3),
(334, 'Licences', '', '', '0000-00-00', '0000-00-00', ' ', 3),
(335, 'Passport', '', '', '0000-00-00', '0000-00-00', ' ', 3),
(336, 'Other', '', '', '0000-00-00', '0000-00-00', ' ', 3);

-- --------------------------------------------------------

--
-- Table structure for table `send_transaction`
--

CREATE TABLE IF NOT EXISTS `send_transaction` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `ref_number` varchar(200) NOT NULL,
  `auth_code` varchar(200) NOT NULL,
  `agent` varchar(200) NOT NULL,
  `s_title` varchar(200) NOT NULL,
  `s_name` varchar(200) NOT NULL,
  `s_village` varchar(200) NOT NULL,
  `s_ward` varchar(200) NOT NULL,
  `s_tole` varchar(200) NOT NULL,
  `s_city` varchar(200) NOT NULL,
  `s_distric` varchar(200) NOT NULL,
  `s_zone` varchar(200) NOT NULL,
  `s_country` varchar(200) NOT NULL,
  `s_relation` varchar(200) NOT NULL,
  `s_contact` varchar(200) NOT NULL,
  `r_title` varchar(100) NOT NULL,
  `r_name` varchar(200) NOT NULL,
  `r_address` varchar(200) NOT NULL,
  `r_contact` varchar(200) NOT NULL,
  `r_id_type` varchar(200) NOT NULL,
  `r_id_number` varchar(200) NOT NULL,
  `amount` float NOT NULL,
  `c_amount` varchar(200) NOT NULL,
  `amt_figure` varchar(200) NOT NULL,
  `total_amount` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `send_transaction`
--

INSERT INTO `send_transaction` (`s_id`, `u_id`, `cid`, `branch`, `ref_number`, `auth_code`, `agent`, `s_title`, `s_name`, `s_village`, `s_ward`, `s_tole`, `s_city`, `s_distric`, `s_zone`, `s_country`, `s_relation`, `s_contact`, `r_title`, `r_name`, `r_address`, `r_contact`, `r_id_type`, `r_id_number`, `amount`, `c_amount`, `amt_figure`, `total_amount`, `date`) VALUES
(10, 1, 0, 'Head Office', 'sdafdsf', 'sadlf', 'english', 'Mr.', 'sladkfj', 'sladfj', 'lsdfj', 'lsqdfj', 'askdfj', 'lksjdf', 'lkjsdaf', 'Nepal', 'Brother', 'alskdfj', 'Mr.', 'lsdfj', 'laksdfj', 'lkasdjf', 'citizenship', 'sdalkfj', 12000, '200', 'lskadfj', 0, '2013-09-26 06:24:16'),
(11, 2, 0, 'Tandi Branch', 'sdfsf', 's;dlfk', 'english', 'Mr.', 's;adlkf', ';sdklf', ';asldkf', ';slkdf', ';sdkf', ';lksdf', ';ksdf', 'Nepal', 'Brother', ';sadfk', 'Mr.', 'as;ldkf', ';lsdakf', ';ksdf', 'citizenship', 'sdklfj', 9909910, '1255', 'sdjfhn', 0, '2013-09-27 02:24:15');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `uname`, `full_name`, `address`, `phone_number`, `email`, `upass`, `role`, `id`) VALUES
(1, 'admin', 'admin', 'admin', '', '', '21232f297a57a5a743894a0e4a801fc3', 'admin', 4),
(2, 'user', 'user', 'user', '', '', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 1),
(3, 'rsubedi', 'Ramji Subedi', 'chitwan', '98476771822222', 'ramjisubedi1991@yahoo.com', '4641999a7679fcaef2df0e26d11e3c72', 'admin', 1),
(4, 'bigyan', 'Bigyan', 'Saradpur', '9802073648', 'cmeremit@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user', 4);

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
