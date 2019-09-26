-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2016 at 08:25 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ep`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `pro_pic` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`, `pro_pic`) VALUES
(1, 'rashed', 'rashed', '729c2fa58aaa451.JPG'),
(2, 'a', '1', ''),
(3, 'abcd', 'd41d8cd98f00b204e980', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin_set_meal`
--

CREATE TABLE `admin_set_meal` (
  `id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `day` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_set_meal`
--

INSERT INTO `admin_set_meal` (`id`, `date`, `day`, `status`) VALUES
(1, '25 August, 2016', 'Friday', 'on'),
(2, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `create_employee`
--

CREATE TABLE `create_employee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_employee`
--

INSERT INTO `create_employee` (`id`, `name`, `email`, `password`, `section`, `position`) VALUES
(8, 'r', 'r@a.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Web Development', 'Web Designer'),
(9, 'a', 'a@a.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Web Development', 'Web Developer');

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `birth_date` varchar(255) NOT NULL,
  `fathers_name` varchar(255) NOT NULL,
  `fathers_occupation` varchar(255) NOT NULL,
  `fathers_contact_number` varchar(255) NOT NULL,
  `mothers_name` varchar(255) NOT NULL,
  `mothers_occupation` varchar(255) NOT NULL,
  `mothers_contact_number` varchar(255) NOT NULL,
  `current_address` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `employee_contact_number` varchar(255) NOT NULL,
  `official_email` varchar(255) NOT NULL,
  `other_email` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `joining_year` int(6) NOT NULL,
  `joining_month` varchar(255) NOT NULL,
  `employee_section` varchar(255) NOT NULL,
  `employee_position` varchar(255) NOT NULL,
  `pro_pic` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`id`, `employee_name`, `birth_date`, `fathers_name`, `fathers_occupation`, `fathers_contact_number`, `mothers_name`, `mothers_occupation`, `mothers_contact_number`, `current_address`, `permanent_address`, `employee_contact_number`, `official_email`, `other_email`, `blood_group`, `marital_status`, `joining_year`, `joining_month`, `employee_section`, `employee_position`, `pro_pic`) VALUES
(11, 'r', '', '', '', '', 'dfnsdjfhsdjfsd', '', '', '', '', '', 'r@a.com', '', 'A+', 'Unmarried', 2016, 'October', 'Web Development', 'Web Developer', ''),
(12, 'a', '', '', '', '', '', '', '', '', '', '', 'a@a.com', '', 'A+', 'Married', 0, 'January', 'Web Development', 'Web Developer', '2eb490073ea97fdac1b58c0a1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employee_pro_pic`
--

CREATE TABLE `employee_pro_pic` (
  `id` int(255) NOT NULL,
  `employee_id` int(100) NOT NULL,
  `pro_pic` varchar(255) NOT NULL,
  `time` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `give-project`
--

CREATE TABLE `give-project` (
  `id` int(255) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `employee_name` varchar(100) NOT NULL,
  `task_headline` text NOT NULL,
  `task_details` text NOT NULL,
  `file` varchar(10000) NOT NULL,
  `time` time(5) NOT NULL,
  `date` date NOT NULL,
  `status` int(100) NOT NULL,
  `estimated_time` varchar(100) NOT NULL,
  `admin_status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `meal_booking`
--

CREATE TABLE `meal_booking` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `for_meal` varchar(255) NOT NULL,
  `for_meal_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `official_rules`
--

CREATE TABLE `official_rules` (
  `id` int(225) NOT NULL,
  `en_title` varchar(100) NOT NULL,
  `en_details` text NOT NULL,
  `bn_title` varchar(100) NOT NULL,
  `bn_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `official_rules`
--

INSERT INTO `official_rules` (`id`, `en_title`, `en_details`, `bn_title`, `bn_details`) VALUES
(1, 'dsgdgSDGD', 'SGDGDSGDS', 'à¦¸à§à¦«à¦¶à¦«à¦¶à¦«à¦¶à¦¾à¦«à¦¶à¦¾', 'à¦¡à¦—à¦¡à¦—à¦¡à¦—à¦¡à¦¶à¦—à¦¾à¦¡à¦— '),
(2, 'wfrwrqwewtewtewewt', 'ewqweryqreyreyhreqreyhreqhreherhrehqrefhdfadso fif js FSDIOFIDSOFI BYF 9SF UEFG DYGus fguysfKU YSUFLiisfhliuSFI UDSF8L8SUGDFU SIfululsfugilL UGFII Hgkusufhyuk asgf uilUILGUSIFGSD LFYUSKUYFGUKGUKSGUKFYGUSYFUS', 'à¦“ à¦à¦°à¦¾ à¦ªà¦¾à¦¤à¦¾', 'à¦“ à¦à¦°à¦¾ à¦ªà¦¾à¦¤à¦¾, à¦“ à¦à¦°à¦¾ à¦ªà¦¾à¦¤à¦¾ à¦—à§‹ à¦¤à§‹à¦®à¦¾à¦° à¦¸à¦¾à¦¥à§‡ à¦†à¦®à¦¾à¦° à¦°à¦¾à¦¤ à¦ªà§‹à¦¹à¦¾à¦¬à¦¾à¦° à¦•à¦¥à¦¾ à¦—à§‹ ');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `name`) VALUES
(1, 'Web Developer'),
(2, 'Web Designer'),
(3, 'Web');

-- --------------------------------------------------------

--
-- Table structure for table `reporting`
--

CREATE TABLE `reporting` (
  `re_id` int(225) NOT NULL,
  `employee_id` int(50) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `task_title` varchar(50) NOT NULL,
  `task_details` text NOT NULL,
  `task_create_date` varchar(50) NOT NULL,
  `task_create_time` varchar(20) NOT NULL,
  `file` varchar(200) NOT NULL,
  `reporting_time` varchar(20) NOT NULL,
  `report_status` varchar(25) NOT NULL,
  `reported_time` varchar(20) NOT NULL,
  `task_status` varchar(20) NOT NULL,
  `task_direction` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reporting`
--

INSERT INTO `reporting` (`re_id`, `employee_id`, `admin_username`, `task_title`, `task_details`, `task_create_date`, `task_create_time`, `file`, `reporting_time`, `report_status`, `reported_time`, `task_status`, `task_direction`) VALUES
(1, 11, 'rashed', 'asddsf', 'sdsdsd', '', '2016-08-27 00:57:09', '', '1.00 am', '', '2016-08-27 00:57:09', '', ''),
(2, 12, 'rashed', 'test', 'test', '', '2016-08-27 00:59:04', '', '2 pm', '', '', '', ''),
(3, 12, 'rashed', 'test', 'test', '', '2016-08-27 00:59:44', '', '4 am', '', '', '', ''),
(4, 11, 'rashed', 'dsfsd', 'dfdsf', 'August 27, 2016', '', '', '3 am', '', '', '', ''),
(5, 11, 'rashed', 'hfhjf', 'jhghghjg', 'August 27, 2016', '22:19:27', '', '1 am', '', '', '', ''),
(6, 11, 'rashed', 'ghdfg', 'hhvnvb', 'August 27, 2016', '10:22 pm', '', '5 am', '', '', '', ''),
(7, 0, 'rashed', '', '', 'August 27, 2016', '', '', ' am', '', '', '', ''),
(8, 0, 'rashed', '', '', 'August 27, 2016', '1:00 am', '', ' am', '', '', '', ''),
(9, 0, 'rashed', '', '', 'August 27, 2016', '1:00 am', '', ' am', '', '', '', ''),
(10, 0, 'rashed', '', '', 'August 27, 2016', '1:00 am', '', ' am', '', '', '', ''),
(11, 0, 'rashed', '', '', 'August 27, 2016', '10:47 pm', '', ' am', '', '', '', ''),
(12, 0, 'rashed', '', '', 'August 27, 2016', '2:48 am', '', ' am', '', '', '', ''),
(13, 12, 'rashed', 'weqw we q qw dsd  wdfwfgiuljlopboulopopgoiiu 8lhho', 'weofuoulolilasdafsdfds hdf h', 'August 27, 2016', '3:48 am', '', '4 am', 'Re Directed', '', '', 'fuck of'),
(14, 0, 'rashed', '', '', 'August 27, 2016', '4:40 am', '', ' ', '', '', '', ''),
(15, 11, 'rashed', 'dfdsfsdfsdfsd', 'dfsdfsdfsdf', 'August 27, 2016', '5:05 am', '', '5 am', 'not done', 'nothing found', 'done', 'not yet directed'),
(16, 12, 'rashed', 'rfgdfgdfg', 'fgdfgdfgdfg', 'August 27, 2016', '5:07 am', '', '6 am', 'Re Directed', 'nothing found', 'done', 'check that sheet '),
(17, 11, 'rashed', 'bbmmbnmbnmbnm', 'bnmbnmbnmmhjghj', 'August 27, 2016', '5:08 am', '', '7 am', 'Re Directed', 'nothing found', 'done', 'hggyugttyffxyj'),
(18, 11, 'rashed', 'fgdfsgsdfg', 'sdfgdsfgdsfgdfsg', '27 August, 2016', '6:45 am', '', '3 am', 'Re Directed', 'nothing found', 'done', 'fgh\r\n'),
(19, 0, 'rashed', '', '', '27 August, 2016', '6:02 pm', '', ' ', 'not reported', 'nothing found', 'not done', 'not yet directed'),
(20, 0, 'rashed', '', '', '27 August, 2016', '6:46 pm', '', ' ', 'not reported', 'nothing found', 'not done', 'not yet directed'),
(21, 0, 'rashed', '', '', '27 August, 2016', '6:47 pm', '', ' ', 'not reported', 'nothing found', 'not done', 'not yet directed'),
(22, 0, 'rashed', '', '', '27 August, 2016', '9:47 pm', '', ' ', 'not reported', 'nothing found', 'not done', 'not yet directed'),
(23, 0, 'rashed', '', '', '27 August, 2016', '9:53 pm', '', ' ', 'not reported', 'nothing found', 'not done', 'not yet directed'),
(24, 0, 'rashed', '', '', '27 August, 2016', '10:00 pm', '', ' ', 'not reported', 'nothing found', 'not done', 'not yet directed'),
(25, 0, 'rashed', '', '', '28 August, 2016', '1:00 am', '', ' ', 'not reported', 'nothing found', 'not done', 'not yet directed');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `name`) VALUES
(2, 'Web Development'),
(3, 'Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `super_admin_login`
--

CREATE TABLE `super_admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `super_admin_login`
--

INSERT INTO `super_admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_set_meal`
--
ALTER TABLE `admin_set_meal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_employee`
--
ALTER TABLE `create_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_pro_pic`
--
ALTER TABLE `employee_pro_pic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meal_booking`
--
ALTER TABLE `meal_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `official_rules`
--
ALTER TABLE `official_rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reporting`
--
ALTER TABLE `reporting`
  ADD PRIMARY KEY (`re_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `super_admin_login`
--
ALTER TABLE `super_admin_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admin_set_meal`
--
ALTER TABLE `admin_set_meal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `create_employee`
--
ALTER TABLE `create_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `employee_pro_pic`
--
ALTER TABLE `employee_pro_pic`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `meal_booking`
--
ALTER TABLE `meal_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `official_rules`
--
ALTER TABLE `official_rules`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reporting`
--
ALTER TABLE `reporting`
  MODIFY `re_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `super_admin_login`
--
ALTER TABLE `super_admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
