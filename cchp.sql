-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2013 at 03:51 PM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cchp`
--

-- --------------------------------------------------------

--
-- Table structure for table `ccregister`
--

CREATE TABLE IF NOT EXISTS `ccregister` (
  `cc_id` int(10) NOT NULL AUTO_INCREMENT,
  `pr_no` varchar(40) NOT NULL,
  `pr_name` varchar(30) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `address` varchar(300) NOT NULL,
  `ph_no` varchar(10) NOT NULL,
  `aph_no` varchar(10) NOT NULL,
  `e_id` varchar(30) NOT NULL,
  `location` int(30) NOT NULL,
  `s_date` date NOT NULL,
  `w_year` int(10) NOT NULL,
  `query` varchar(300) NOT NULL,
  `c_date` date NOT NULL,
  `ho_status` varchar(20) NOT NULL,
  `tl_status` int(20) NOT NULL,
  `er_status` int(20) NOT NULL,
  `c_status` int(10) NOT NULL,
  `t_status` int(10) NOT NULL,
  `h_status` int(10) NOT NULL,
  `regi_id` int(10) NOT NULL,
  `solvedate` date NOT NULL,
  PRIMARY KEY (`cc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `ccregister`
--

INSERT INTO `ccregister` (`cc_id`, `pr_no`, `pr_name`, `c_name`, `address`, `ph_no`, `aph_no`, `e_id`, `location`, `s_date`, `w_year`, `query`, `c_date`, `ho_status`, `tl_status`, `er_status`, `c_status`, `t_status`, `h_status`, `regi_id`, `solvedate`) VALUES
(1, 'S7562(Pure White)', 'samsung', 'shraddha', 'mehsana', '1234567890', '1234567890', 'gajjarshraddha1@gmail.com', 1, '2011-12-25', 2, 'not working properly', '2013-01-24', 'ho1shraddha', 3, 1, 1, 1, 1, 0, '2013-04-15'),
(2, 'S7562(Pure Black)', 'samsung', 'shraddha', 'mehsana', '1234567890', '1234567890', 'gajjarshraddha1@gmail.com', 2, '2011-12-25', 2, 'not working properly', '2013-01-24', 'ho1shraddha', 4, 0, 0, 0, 0, 0, '0000-00-00'),
(3, 'S5360 (Absolute Black)', 'samsung', 'sahil', 'mehsana', '1234567890', '1234567890', 'asd@gmail.com', 3, '2013-01-24', 3, 'not working', '2013-01-24', 'ho1shraddha', 12, 6, 1, 1, 0, 0, '0000-00-00'),
(4, 'S5360 (Absolute Black)', 'samsung', 'pooja', 'mehsana', '1234567890', '1234567890', 'asd@gmail.com', 4, '2013-01-24', 3, 'not working', '2013-01-24', 'ho1shraddha', 6, 8, 1, 0, 0, 0, '0000-00-00'),
(5, 'S7562(Pure Black)', 'samsung', 'sarthak', 'mehsana', '1234567890', '1234567890', 'qwe@qwe.com', 5, '2013-01-24', 3, 'not working', '2013-01-24', 'ho1shraddha', 7, 12, 1, 0, 0, 0, '0000-00-00'),
(6, 'gt-c-3200', 'samsung', 'avani', 'mehsana', '1234567890', '1234567890', 'qwe@qwe.com', 6, '2013-01-24', 3, 'not working', '2013-01-24', 'ho1shraddha', 8, 13, 1, 1, 1, 0, '2013-04-08'),
(7, 'gt-c-3200', 'samsung', 'shilpa', 'mehsana', '1234567890', '1234567890', 'qwe@qwe.com', 7, '2013-01-24', 3, 'not working', '2013-01-24', 'ho1shraddha', 9, 15, 1, 1, 1, 0, '2013-04-24'),
(8, 'gt-c-3200', 'samsung', 'pooja', 'mehsana', '1234567890', '1234567890', 'asd@gmail.com', 8, '2013-01-24', 0, 'not working prolerly', '2013-03-08', 'ho1shraddha', 13, 17, 1, 1, 1, 0, '2013-04-22'),
(9, 'gt-c-3200', 'samsung', 'shraddha', 'MEHSANA', '1234567890', '1234567890', 'asd@gmail.com', 9, '2013-01-24', 0, 'NOT WORKING', '2013-03-09', '1', 0, 0, 0, 0, 0, 0, '0000-00-00'),
(10, '1', 'samsung', 'komal', '15,abc,\r\nxyz', '1234567890', '1234567890', 'asd@gmail.com', 10, '2013-01-24', 0, 'its not working', '2013-03-18', '1', 0, 0, 0, 0, 0, 0, '0000-00-00'),
(11, '2', 'samsung', 'shraddha', 'mehsana', '1234567890', '1234567890', 'asd@gmail.com', 11, '0000-00-00', 0, 'not working properly', '2013-03-25', '1', 0, 0, 0, 0, 0, 0, '0000-00-00'),
(12, '4', 'htc', 'shraddha', 'mehsana', '1234567890', '1234567890', 'asd@gmail.com', 12, '2012-03-18', 0, 'not working', '2013-03-25', '1', 0, 0, 0, 0, 0, 0, '0000-00-00'),
(13, '5', 'htc', 'pooja', 'mehsana', '1234567890', '1234567890', 'asd@gmail.com', 13, '2013-03-10', 4, 'not working', '2013-03-25', '1', 0, 0, 0, 0, 0, 2, '0000-00-00'),
(14, '6', 'samsung', 'shinny', 'mehsana', '1234567890', '1234567890', 'asd@gmail.com', 14, '2012-03-12', 3, 'not working', '2013-03-30', '1', 0, 0, 0, 0, 0, 1, '0000-00-00'),
(15, 'S7562(Pure White)', 'Samsung Galaxy S Duos', 'xyz', 'Ahmedvad', '1234567890', '1234567890', 'asd@gmail.com', 1, '2012-04-09', 2, 'Not Working', '2013-04-09', '1', 0, 0, 0, 0, 0, 1, '0000-00-00'),
(16, 'S7562(Pure White)', 'Samsung Galaxy S Duos', 'Sandip Prajapati', 'Patan', '1234567890', '8978978978', 'jjhjhjhkjh@gmail.com', 1, '2013-05-25', 1, 'Damage', '2013-04-26', 'ho1shraddha', 3, 0, 0, 0, 0, 0, '0000-00-00'),
(17, 'S7562(Pure White)', 'Samsung Galaxy S Duos', 'priya', 'Ahmedabad', '1234567890', '1234567890', 'asd@gmail.com', 3, '2013-04-09', 0, 'not working perfeclty', '2013-04-28', 'ho1shraddha', 12, 0, 0, 0, 0, 0, '0000-00-00'),
(18, 'S7562(Pure White)', 'Samsung Galaxy S Duos', 'binal', 'mehsana', '1234567890', '1234567890', 'binal07@gmail.com', 11, '2013-03-31', 0, 'Not working..', '2013-04-28', '1', 0, 0, 0, 0, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `engineerdetail`
--

CREATE TABLE IF NOT EXISTS `engineerdetail` (
  `e_no` int(10) NOT NULL AUTO_INCREMENT,
  `teamno` int(10) NOT NULL,
  `ho_no` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(300) NOT NULL,
  `location` int(30) NOT NULL,
  `p_no` varchar(10) NOT NULL,
  `e_id` varchar(30) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `joindate` date NOT NULL,
  PRIMARY KEY (`e_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `engineerdetail`
--

INSERT INTO `engineerdetail` (`e_no`, `teamno`, `ho_no`, `name`, `address`, `location`, `p_no`, `e_id`, `username`, `password`, `joindate`) VALUES
(1, 3, 0, 'er1', 'Ahmedabad', 1, '1234567890', 'asd@gmail.com', 'er1', 'er1', '2013-02-20'),
(2, 3, 0, 'er2', 'Ahmedabad', 1, '1234567890', 'asd@gmail.com', 'er2', 'er2', '2013-03-05'),
(3, 3, 0, 'er3', 'Ahmedabad', 1, '1234567890', 'asd@gmail.com', 'er3', 'er3', '2013-04-04'),
(4, 4, 0, 'er4', 'Bharuch', 2, '1234567890', 'asd@gmail.com', 'er4', 'er4', '2013-04-04'),
(12, 7, 0, 'er11', 'Diu', 5, '1234567890', 'asd@gmail.com', 'er11', 'er11', '2013-04-07'),
(5, 4, 0, 'er5', 'Bharuch', 2, '1234567890', 'asd@gmail.com', 'er5', 'er5', '2013-04-04'),
(6, 12, 0, 'er6', 'Baroda', 3, '1234567890', 'asd@gmail.com', 'er6', 'er6', '2013-04-05'),
(7, 12, 0, 'er7', 'Baroda', 3, '1234567890', 'asd@gmail.com', 'er7', 'er7', '2013-04-05'),
(8, 6, 0, 'er8', 'Bhavnagar', 4, '1234567890', 'asd@gmail.com', 'er8', 'er8', '2013-04-05'),
(10, 6, 0, 'er9', 'Bhavnagar', 4, '1234567890', 'asd@gmail.com', 'er9', 'er9', '2013-04-05'),
(11, 7, 0, 'er10', 'Diu', 5, '1234567890', 'asd@gmail.com', 'er10', 'er10', '2013-04-05'),
(13, 8, 0, 'er12', 'Dwarka', 6, '1234567890', 'asd@gmail.com', 'er12', 'er12', '2013-04-07'),
(14, 8, 0, 'er13', 'Dwarka', 6, '1234567890', 'asd@gmail.com', 'er13', 'er13', '2013-04-07'),
(15, 9, 0, 'er14', 'Gandhinagar', 7, '1234567890', 'asd@gmail.com', 'er14', 'er14', '2013-04-07'),
(16, 9, 0, 'er15', 'Gandhinagar', 7, '1234567890', 'asd@gmail.com', 'er15', 'er15', '2013-04-07'),
(17, 13, 0, 'er16', 'Jamnagar', 8, '1234567890', 'asd@gmail.com', 'er16', 'er16', '2013-04-07'),
(18, 13, 0, 'er17', 'Jamnagar', 8, '1234567890', 'asd@gmail.com', 'er17', 'er17', '2013-04-07'),
(19, 14, 0, 'er18', 'Junagadh', 9, '1234567890', 'asd@gmail.com', 'er18', 'er18', '2013-04-07'),
(20, 14, 0, 'er19', 'Junagadh', 9, '1234567890', 'asd@gmail.com', 'er19', 'er19', '2013-04-07'),
(21, 15, 0, 'er20', 'Kutch', 10, '1234567890', 'asd@gmail.com', 'er20', 'er20', '2013-04-07'),
(22, 15, 0, 'er21', 'Kutch', 10, '1234567890', 'asd@gmail.com', 'er21', 'er21', '2013-04-07'),
(23, 16, 0, 'er22', 'Mehsana', 11, '1234567890', 'asd@gmail.com', 'er22', 'er22', '2013-04-07'),
(24, 16, 0, 'er23', 'Mehsana', 11, '1234567890', 'asd@gmail.com', 'er23', 'er23', '2013-04-07'),
(25, 16, 0, 'er24', 'Mehsana', 11, '1234567890', 'asd@gmail.com', 'er24', 'er24', '2013-04-07'),
(26, 17, 0, 'er25', 'Morbi', 12, '1234567890', 'asd@gmail.com', 'er25', 'er25', '2013-04-07'),
(27, 17, 0, 'er26', 'Morbi', 12, '1234567890', 'asd@gmail.com', 'er26', 'er26', '2013-04-07'),
(28, 18, 0, 'er27', 'Patan', 13, '1234567890', 'asd@gmail.com', 'er27', 'er27', '2013-04-07'),
(29, 18, 0, 'er28', 'Patan', 13, '1234567890', 'asd@gmail.com', 'er28', 'er28', '2013-04-07'),
(30, 19, 0, 'er29', 'Nadiad', 14, '1234567890', 'asd@gmail.com', 'er29', 'er29', '2013-04-07'),
(31, 19, 0, 'er30', 'Nadiad', 14, '1234567890', 'asd@gmail.com', 'er30', 'er30', '2013-04-07'),
(32, 20, 0, 'er31', 'Rajkot', 15, '1234567890', 'asd@gmail.com', 'er31', 'er31', '2013-04-07'),
(33, 20, 0, 'er32', 'Rajkot', 15, '1234567890', 'asd@gmail.com', 'er32', 'er32', '2013-04-07'),
(34, 21, 0, 'er33', 'Surat', 16, '1234567890', 'asd@gmail.com', 'er33', 'er33', '2013-04-07'),
(35, 21, 0, 'er34', 'Surat', 16, '1234567890', 'asd@gmail.com', 'er34', 'er34', '2013-04-07'),
(36, 22, 0, 'er35', 'Valsad', 17, '1234567890', 'asd@gmail.com', 'er35', 'er35', '2013-04-07'),
(37, 22, 0, 'er36', 'Valsad', 17, '1234567890', 'asd@gmail.com', 'er36', 'er36', '2013-04-07');

-- --------------------------------------------------------

--
-- Table structure for table `hodetail`
--

CREATE TABLE IF NOT EXISTS `hodetail` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `ph_no` varchar(10) NOT NULL,
  `aph_no` varchar(10) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `joindate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hodetail`
--

INSERT INTO `hodetail` (`id`, `name`, `address`, `ph_no`, `aph_no`, `email_id`, `username`, `password`, `joindate`) VALUES
(1, 'shraddha', 'mehsana', '1234567890', '1234567890', 'asd@gmail.com', 'ho1shraddha', 'luck', '2013-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `loca_id` int(11) NOT NULL AUTO_INCREMENT,
  `loca_name` varchar(300) NOT NULL,
  PRIMARY KEY (`loca_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`loca_id`, `loca_name`) VALUES
(1, 'Ahmedabad'),
(2, 'Bharuch'),
(3, 'Baroda'),
(4, 'Bhavnagar'),
(5, 'Diu'),
(6, 'Dwarka'),
(7, 'Gandhinagar'),
(8, 'Jamnagar'),
(9, 'Junagadh'),
(10, 'Kutch'),
(11, 'Mehsana'),
(12, 'Morbi'),
(13, 'Patan'),
(14, 'Nadiad'),
(15, 'Rajkot'),
(16, 'Surat'),
(17, 'Valsad');

-- --------------------------------------------------------

--
-- Table structure for table `phoneoperator`
--

CREATE TABLE IF NOT EXISTS `phoneoperator` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `location` int(30) NOT NULL,
  `p_no` varchar(20) NOT NULL,
  `e_id` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `joindate` date NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `phoneoperator`
--

INSERT INTO `phoneoperator` (`p_id`, `name`, `address`, `location`, `p_no`, `e_id`, `username`, `password`, `joindate`) VALUES
(1, 'phoneoperator1', 'Mehsana', 11, '1234567890', 'qwe@qwe.com', 'pho1', 'pho1', '2013-04-01'),
(2, 'phoneoperator2', 'Ahmedabad', 1, '1234567890', 'asd@gmail.com', 'pho2', 'pho2', '2013-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `productdetail`
--

CREATE TABLE IF NOT EXISTS `productdetail` (
  `product_no` varchar(50) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `feature` varchar(300) NOT NULL,
  `review` varchar(100) NOT NULL,
  `pipath` varchar(400) NOT NULL,
  PRIMARY KEY (`product_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productdetail`
--

INSERT INTO `productdetail` (`product_no`, `p_name`, `price`, `feature`, `review`, `pipath`) VALUES
('S7562(Pure White)', 'Samsung Galaxy S Duos', 14900, '', 'good', '../proimage/samsung-galaxy1.jpeg'),
('S7562(Pure Black)', 'Samsung Galaxy S Duos', 14900, '', 'good', '../proimage/samsung-galaxy2.jpeg'),
(' S5360 (Absolute Black)', ' Samsung Galaxy Y', 6290, 'Android v2.3 OS 2 MP Primary Camer ', 'good', '../proimage/samsung-galaxy3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `reportingdetail`
--

CREATE TABLE IF NOT EXISTS `reportingdetail` (
  `r_id` int(10) NOT NULL AUTO_INCREMENT,
  `cc_id` int(10) NOT NULL,
  `ho_id` int(10) NOT NULL,
  `teamno` int(10) NOT NULL,
  `er_no` int(10) NOT NULL,
  `reporting` varchar(300) NOT NULL,
  `rpath` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `t_replay` varchar(100) NOT NULL,
  `h_replay` varchar(100) NOT NULL,
  `t_cr` int(10) NOT NULL,
  `h_cr` int(10) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `reportingdetail`
--

INSERT INTO `reportingdetail` (`r_id`, `cc_id`, `ho_id`, `teamno`, `er_no`, `reporting`, `rpath`, `date`, `t_replay`, `h_replay`, `t_cr`, `h_cr`) VALUES
(37, 0, 0, 0, 0, '0', '0', '2013-03-24', '0', '0', 0, 0),
(39, 4, 0, 6, 8, 'solve by er succeffully', '../er/report/c4.txt', '2013-04-26', '', '', 0, 0),
(38, 1, 1, 3, 1, 'ffff', '../er/report/c1report.txt', '2013-04-13', 'Good Work', 'good work', 1, 1),
(40, 5, 0, 7, 12, 'efretegeg', '../er/report/c5.txt', '2013-04-26', '', '', 0, 0),
(42, 6, 1, 8, 13, 'solve succeffully', '../er/report/c6er12.txt', '2013-04-26', '', 'Work will be done by you perfectly', 0, 1),
(43, 7, 1, 9, 15, 'Done all the complain of customer', '../er/report/c7er14.txt', '2013-04-26', 'good work try your best', 'Good work done perfectlly', 1, 1),
(44, 8, 1, 13, 17, 'complain solve', '../er/report/c8er16.txt', '2013-04-26', ' Good Work', '', 1, 0),
(45, 3, 1, 12, 6, 'solve perfectly', '../er/report/c3er6.txt', '2013-04-28', 'Good work\r\nTry next time batter work', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teamdetail`
--

CREATE TABLE IF NOT EXISTS `teamdetail` (
  `teamno` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `location` int(10) NOT NULL,
  `p_no` varchar(10) NOT NULL,
  `e_id` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `joindate` date NOT NULL,
  `e_no` int(10) NOT NULL,
  `ho_no` int(10) NOT NULL,
  PRIMARY KEY (`teamno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `teamdetail`
--

INSERT INTO `teamdetail` (`teamno`, `name`, `address`, `location`, `p_no`, `e_id`, `username`, `password`, `joindate`, `e_no`, `ho_no`) VALUES
(13, 'team8', 'Jamnagar', 8, '1234567890', 'asd@gmail.com', 'team8', 'team8', '2013-04-07', 0, 0),
(3, 'team1', 'ahmedabad', 1, '012345678', 'asd@aa.com', 'team1', 'team1', '2013-03-25', 0, 0),
(4, 'team2', 'Bharuch', 2, '0123456789', 'asd@aa.com', 'team2', 'team2', '2013-02-19', 0, 0),
(12, 'team3', 'Baroda', 3, '1234567890', 'asd@gmail.com', 'team3', 'team3', '2013-03-09', 0, 0),
(6, 'team4', 'Bhavnagar', 4, '1234567890', 'asd@aa.com', 'team4', 'team4', '2013-02-19', 0, 0),
(7, 'team5', 'Diu', 5, '0123456789', 'asd@aa.com', 'team5', 'team5', '2013-02-19', 0, 0),
(8, 'team6', 'Dwarka', 6, '0123456789', 'asd@aa.com', 'team6', 'team6', '2013-02-19', 0, 0),
(9, 'team7', 'Gandhinagar', 7, '0123456789', 'asd@aa.com', 'team7', 'team7', '2013-02-19', 0, 0),
(15, 'team10', 'Kutch', 10, '1234567890', 'asd@gmail.com', 'team10', 'team10', '2013-04-07', 0, 0),
(16, 'shraddha', 'Mehsana', 11, '1234567890', 'asd@gmail.com', 'team11shraddha', 'luck', '2013-04-07', 0, 0),
(17, 'team12', 'Morbi', 12, '1234567890', 'asd@gmail.com', 'team12', 'team12', '2013-04-07', 0, 0),
(18, 'team13', 'Patan', 13, '1234567890', 'asd@gmail.com', 'team13', 'team13', '2013-04-07', 0, 0),
(19, 'team14', 'Nadiad', 14, '1234567890', 'asd@gmail.com', 'team14', 'team14', '2013-04-07', 0, 0),
(20, 'team15', 'Rajkot', 15, '1234567890', 'asd@gmail.com', 'team15', 'team15', '2013-04-07', 0, 0),
(21, 'team16', 'Surat', 16, '1234567890', 'asd@gmail.com', 'team16', 'team16', '2013-04-07', 0, 0),
(22, 'team17', 'Valsad', 17, '1234567890', 'asd@gmail.com', 'team17', 'team17', '2013-04-07', 0, 0);
