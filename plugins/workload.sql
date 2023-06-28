-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2018 at 10:38 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `workload`
--

-- --------------------------------------------------------

--
-- Table structure for table `division_inspection`
--

CREATE TABLE IF NOT EXISTS `division_inspection` (
  `div_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `Unit_Name` varchar(200) NOT NULL,
  `Address` text NOT NULL,
  `State` varchar(200) NOT NULL,
  `RD_Name` varchar(200) NOT NULL,
  `Sector` varchar(200) NOT NULL,
  `Reason` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `Target_Month` date NOT NULL,
  `Reference` varchar(200) NOT NULL,
  `Other` varchar(250) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `Parameters` varchar(250) NOT NULL,
  `Data_Available_at_Portal` varchar(250) NOT NULL,
  `year` varchar(100) NOT NULL,
  `Reason_for_Revert` text NOT NULL,
  `revert_date` date NOT NULL,
  `Completed` int(11) NOT NULL DEFAULT '0',
  `created` varchar(200) NOT NULL,
  PRIMARY KEY (`div_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_monthly_report`
--

CREATE TABLE IF NOT EXISTS `tbl_monthly_report` (
  `monthly_id` int(11) NOT NULL AUTO_INCREMENT,
  `monthly_user_id` int(11) NOT NULL,
  `m_rd` varchar(250) NOT NULL,
  `month` varchar(250) NOT NULL,
  `data_1` varchar(250) NOT NULL,
  `data_2` varchar(250) NOT NULL,
  `data_3` varchar(250) NOT NULL,
  `data_4` varchar(250) NOT NULL,
  `data_5` varchar(250) NOT NULL,
  `data_6` varchar(250) NOT NULL,
  `data_7` varchar(250) NOT NULL,
  `data_8` varchar(250) NOT NULL,
  `data_9` varchar(250) NOT NULL,
  `data_10` varchar(250) NOT NULL,
  `data_11` varchar(250) NOT NULL,
  `data_12` varchar(250) NOT NULL,
  `total_pending_sms` int(11) NOT NULL,
  `data_13` varchar(250) NOT NULL,
  `data_14` varchar(250) NOT NULL,
  `data_15` varchar(250) NOT NULL,
  `data_16` varchar(250) NOT NULL,
  `data_17` varchar(250) NOT NULL,
  `data_18` varchar(250) NOT NULL,
  `data_19` varchar(250) NOT NULL,
  `data_20` varchar(250) NOT NULL,
  `data_21` varchar(250) NOT NULL,
  `data_22` varchar(250) NOT NULL,
  `data_23` varchar(250) NOT NULL,
  `data_24` varchar(250) NOT NULL,
  `data_25` varchar(250) NOT NULL,
  `data_26` varchar(250) NOT NULL,
  `data_27` varchar(250) NOT NULL,
  `data_28` varchar(250) NOT NULL,
  `data_29` varchar(250) NOT NULL,
  `data_30` varchar(250) NOT NULL,
  `data_31` text NOT NULL,
  `data_32` text NOT NULL,
  `data_33` text NOT NULL,
  `data_34` text NOT NULL,
  `data_35` int(11) NOT NULL,
  `data_36` int(11) NOT NULL,
  `total_pending_ganga` int(11) NOT NULL,
  `data_37` int(11) NOT NULL,
  `data_38` int(11) NOT NULL,
  `data_39` int(11) NOT NULL,
  `data_40` int(11) NOT NULL,
  `total_pending_ngt` int(11) NOT NULL,
  `data_41` int(11) NOT NULL,
  `data_42` int(11) NOT NULL,
  `total_pending_complaints` int(11) NOT NULL,
  `data_43` int(11) NOT NULL,
  `data_44` int(11) NOT NULL,
  `total_pending_vip` int(11) NOT NULL,
  `data_45` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`monthly_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_monthly_report`
--

INSERT INTO `tbl_monthly_report` (`monthly_id`, `monthly_user_id`, `m_rd`, `month`, `data_1`, `data_2`, `data_3`, `data_4`, `data_5`, `data_6`, `data_7`, `data_8`, `data_9`, `data_10`, `data_11`, `data_12`, `total_pending_sms`, `data_13`, `data_14`, `data_15`, `data_16`, `data_17`, `data_18`, `data_19`, `data_20`, `data_21`, `data_22`, `data_23`, `data_24`, `data_25`, `data_26`, `data_27`, `data_28`, `data_29`, `data_30`, `data_31`, `data_32`, `data_33`, `data_34`, `data_35`, `data_36`, `total_pending_ganga`, `data_37`, `data_38`, `data_39`, `data_40`, `total_pending_ngt`, `data_41`, `data_42`, `total_pending_complaints`, `data_43`, `data_44`, `total_pending_vip`, `data_45`, `status`) VALUES
(1, 82, 'RD Kolkata', 'Feb-2018', '18', '8', '20', '12', '21', '20', '45', '22', '21', '20', '4', '3', 1, '5', '5', '12', '12', '25', '25', '21', '20', '22', '22', '25', '24', '26', '24', '12', '10', '1', '1', 'N.A', '', 'N.A', '', 45, 40, 5, 21, 21, 5, 5, 0, 10, 9, 1, 3, 3, 0, 'N.A', 0),
(2, 78, 'RD Bengaluru', 'Feb-2018', '11', '10', '22', '05', '34', '12', '41', '33', '52', '14', '60', '45', 15, '17', '02', '78', '40', '19', '01', '10', '04', '11', '06', '12', '05', '13', '10', '14', '11', '15', '08', '16', '04', '17', '09', 18, 11, 7, 19, 10, 20, 3, 17, 21, 2, 19, 22, 1, 21, '', 0),
(3, 81, 'RD Vadodara', 'Feb-2018', '45', '40', '44', '42', '42', '40', '40', '38', '25', '20', '30', '22', 8, '21', '20', '22', '2', '23', '20', '56', '50', '58', '57', '54', '54', '45', '45', '45', '44', '54', '50', 'NIO Meeting', '', 'N.A', '', 40, 32, 8, 10, 9, 6, 3, 3, 4, 1, 3, 1, 1, 0, 'N.A', 0),
(4, 79, 'RD Lucknow', 'Feb-2018', '45', '14', '33', '22', '15', '06', '42', '12', '29', '11', '52', '28', 24, '16', '05', '52', '16', '26', '05', '17', '02', '47', '18', '18', '07', '19', '07', '51', '25', '18', '02', 'NA', '', 'NA', '', 48, 5, 43, 42, 18, 52, 18, 34, 12, 9, 3, 28, 5, 23, 'NA', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_monthly_report_backup`
--

CREATE TABLE IF NOT EXISTS `tbl_monthly_report_backup` (
  `monthly_id` int(11) NOT NULL AUTO_INCREMENT,
  `monthly_user_id` int(11) NOT NULL,
  `m_rd` varchar(250) NOT NULL,
  `month` varchar(250) NOT NULL,
  `data_1` varchar(250) NOT NULL,
  `data_2` varchar(250) NOT NULL,
  `data_3` varchar(250) NOT NULL,
  `data_4` varchar(250) NOT NULL,
  `data_5` varchar(250) NOT NULL,
  `data_6` varchar(250) NOT NULL,
  `data_7` varchar(250) NOT NULL,
  `data_8` varchar(250) NOT NULL,
  `data_9` varchar(250) NOT NULL,
  `data_10` varchar(250) NOT NULL,
  `data_11` varchar(250) NOT NULL,
  `data_12` varchar(250) NOT NULL,
  `data_13` varchar(250) NOT NULL,
  `data_14` varchar(250) NOT NULL,
  `data_15` varchar(250) NOT NULL,
  `data_16` varchar(250) NOT NULL,
  `data_17` varchar(250) NOT NULL,
  `data_18` varchar(250) NOT NULL,
  `data_19` varchar(250) NOT NULL,
  `data_20` varchar(250) NOT NULL,
  `data_21` varchar(250) NOT NULL,
  `data_22` varchar(250) NOT NULL,
  `data_23` varchar(250) NOT NULL,
  `data_24` varchar(250) NOT NULL,
  `data_25` varchar(250) NOT NULL,
  `data_26` varchar(250) NOT NULL,
  `data_27` varchar(250) NOT NULL,
  `data_28` varchar(250) NOT NULL,
  `data_29` varchar(250) NOT NULL,
  `data_30` varchar(250) NOT NULL,
  `data_31` text NOT NULL,
  `data_32` text NOT NULL,
  `data_33` text NOT NULL,
  `data_34` text NOT NULL,
  `data_35` int(11) NOT NULL,
  `data_36` int(11) NOT NULL,
  `data_37` int(11) NOT NULL,
  `data_38` int(11) NOT NULL,
  `data_39` int(11) NOT NULL,
  `data_40` int(11) NOT NULL,
  `data_41` int(11) NOT NULL,
  `data_42` int(11) NOT NULL,
  `data_43` int(11) NOT NULL,
  `data_44` int(11) NOT NULL,
  `data_45` text NOT NULL,
  `statusData` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`monthly_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_monthly_report_backup`
--

INSERT INTO `tbl_monthly_report_backup` (`monthly_id`, `monthly_user_id`, `m_rd`, `month`, `data_1`, `data_2`, `data_3`, `data_4`, `data_5`, `data_6`, `data_7`, `data_8`, `data_9`, `data_10`, `data_11`, `data_12`, `data_13`, `data_14`, `data_15`, `data_16`, `data_17`, `data_18`, `data_19`, `data_20`, `data_21`, `data_22`, `data_23`, `data_24`, `data_25`, `data_26`, `data_27`, `data_28`, `data_29`, `data_30`, `data_31`, `data_32`, `data_33`, `data_34`, `data_35`, `data_36`, `data_37`, `data_38`, `data_39`, `data_40`, `data_41`, `data_42`, `data_43`, `data_44`, `data_45`, `statusData`) VALUES
(1, 82, 'RD Kolkata', 'Feb-2018', '18', '8', '20', '12', '21', '20', '45', '22', '21', '20', '4', '3', '5', '5', '12', '12', '25', '25', '21', '20', '22', '22', '25', '24', '26', '24', '12', '10', '1', '1', 'N.A', '', 'N.A', '', 45, 40, 21, 21, 5, 5, 10, 9, 3, 3, 'N.A', 1),
(2, 78, 'RD Bengaluru', 'Feb-2018', '11', '10', '22', '05', '34', '12', '41', '33', '52', '14', '60', '45', '17', '02', '78', '40', '19', '01', '10', '04', '11', '06', '12', '05', '13', '10', '14', '11', '15', '08', '16', '04', '17', '09', 18, 11, 19, 10, 20, 3, 21, 2, 22, 1, '', 1),
(3, 81, 'RD Vadodara', 'Feb-2018', '45', '40', '44', '42', '42', '40', '40', '38', '25', '20', '30', '22', '21', '20', '22', '2', '23', '20', '56', '50', '58', '57', '54', '54', '45', '45', '45', '44', '54', '50', 'NIO Meeting', '', 'N.A', '', 40, 32, 10, 9, 6, 3, 4, 1, 1, 1, 'N.A', 1),
(4, 79, 'RD Lucknow', 'Feb-2018', '45', '14', '33', '22', '15', '06', '42', '12', '29', '11', '52', '28', '16', '05', '52', '16', '26', '05', '17', '02', '47', '18', '18', '07', '19', '07', '51', '25', '18', '02', 'NA', '', 'NA', '', 48, 5, 42, 18, 52, 18, 12, 9, 28, 5, 'NA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rd`
--

CREATE TABLE IF NOT EXISTS `tbl_rd` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `RD` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_rd`
--

INSERT INTO `tbl_rd` (`id`, `RD`) VALUES
(1, 'RD Vadodara'),
(2, 'RD Bengaluru'),
(3, 'RD Kolkata'),
(4, 'RD Bhopal'),
(5, 'RD Lucknow'),
(6, 'RD Shilong');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sector`
--

CREATE TABLE IF NOT EXISTS `tbl_sector` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Sector` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `tbl_sector`
--

INSERT INTO `tbl_sector` (`id`, `Sector`) VALUES
(1, 'Chlor Alkali'),
(2, 'Dyes&Dye'),
(3, 'Fertilizer'),
(4, 'Oil Refineries'),
(5, 'Pesticides'),
(6, 'Petro-Chemicals'),
(7, 'Pharmaceuticals'),
(10, 'Aluminum'),
(11, 'Copper'),
(12, 'Zinc'),
(13, 'Integrated Iron & Steel'),
(16, 'Cement'),
(17, 'Thermal Power Plants'),
(21, 'Sugar'),
(22, 'Distillery'),
(32, 'Tanneries'),
(34, 'Pulp & Paper');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE IF NOT EXISTS `tbl_state` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(50) NOT NULL,
  `Latitude` float NOT NULL,
  `Longitude` float NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`state_id`, `state_name`, `Latitude`, `Longitude`) VALUES
(1, 'ANDHRA PRADESH', 16.3142, 80.435),
(2, 'ASSAM', 26.2442, 92.5378),
(3, 'ARUNACHAL PRADESH', 27.8451, 95.2473),
(4, 'GUJRAT', 22.3094, 72.1362),
(5, 'BIHAR', 25.6127, 85.1589),
(6, 'HARYANA', 29.0658, 76.0405),
(7, 'HIMACHAL PRADESH', 32.0842, 77.5712),
(8, 'JAMMU & KASHMIR', 34.0837, 74.7973),
(9, 'KARNATAKA', 15.3173, 75.7139),
(10, 'KERALA', 10.8505, 76.2711),
(11, 'MADHYA PRADESH', 25.794, 78.1165),
(12, 'MAHARASHTRA', 19.6633, 75.3003),
(13, 'MANIPUR', 24.814, 93.9503),
(14, 'MEGHALAYA', 25.4874, 90.4127),
(15, 'MIZORAM', 23.7271, 92.7176),
(16, 'NAGALAND', 25.9063, 93.7276),
(17, 'ORISSA', 20.9409, 84.8035),
(18, 'PUNJAB', 0, 0),
(19, 'RAJASTHAN', 27.3913, 73.4326),
(20, 'SIKKIM', 0, 0),
(21, 'TAMIL NADU', 11.1271, 78.6569),
(22, 'TRIPURA', 23.7451, 91.7468),
(23, 'UTTAR PRADESH', 28.2076, 79.8267),
(24, 'WEST BENGAL', 22.9786, 87.7478),
(25, 'DELHI', 28.6448, 77.2167),
(26, 'GOA', 15.4968, 73.8278),
(27, 'PONDICHERY', 0, 0),
(28, 'LAKSHDWEEP', 10.328, 72.7846),
(29, 'DAMAN & DIU', 20.4283, 72.8397),
(31, 'CHANDIGARH', 30.7333, 76.7794),
(32, 'ANDAMAN & NICOBAR', 11.7401, 92.6586),
(33, 'UTTARANCHAL', 0, 0),
(34, 'JHARKHAND', 23.6344, 85.5264),
(35, 'CHATTISGARH', 21.2514, 81.6296);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `emailid` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `Officer` varchar(200) NOT NULL,
  `board` varchar(250) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `emailid`, `phone`, `Officer`, `board`, `user_type`) VALUES
(1, 'admin@gmail.com', 'admin@123', 'archit.uprit@gmail.com', '', 'Admin', '', 'Admin'),
(75, 'ms', 'ms', 'sudhakar.cpcb@nic.in', '', 'A.Sudhakar', '', 'MS'),
(78, 'zo_bengaluru.cpcb', 'Zobengaluru@123', 'ssuresh.cpcb@nic.in', '9958161440', 'S. Suresh', 'RD Bengaluru', 'SPCB'),
(79, 'zo_lucknow.cpcb', 'Zolucknow@123', 'lucknow.cpcb@nic.in', '9958161440', 'PK Mishra', 'RD Lucknow', 'SPCB'),
(80, 'bhopal.zo', 'Zobhopal@123', 'bhopal.cpcb@gmail.com', '9958161440', 'P JAGAN', 'RD Bhopal', 'SPCB'),
(81, 'zo_vadodara.cpcb', 'Zovadodara@123', 'brnaidu.cpcb@nic.in', '9958161440', 'BR NAIDU', 'RD Vadodara', 'SPCB'),
(82, 'zo_kolkata.cpcb', 'Zokolkata@123', 'rcsaxenaa@rediffmail.com', '9958161440', 'RC SAXENA', 'RD Kolkata', 'SPCB'),
(83, 'zo_shilong.cpcb', 'Zoshilong@123', '', '9958161440', 'SHILLONG', 'RD Shilong', 'SPCB'),
(84, 'gurnamsingh.cpcb', 'Gurunamsingh@123', 'gurnam.cpcb@nic.in', '9958161440', 'Gurnam Singh', '', 'CPCB');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
