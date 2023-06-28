-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 08:20 AM
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
-- Table structure for table `tbl_activities0`
--

CREATE TABLE IF NOT EXISTS `tbl_activities0` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `rd_id` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  `target_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities1`
--

CREATE TABLE IF NOT EXISTS `tbl_activities1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `rd_id` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  `target_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_activities1`
--

INSERT INTO `tbl_activities1` (`id`, `main_id`, `user_id`, `activities_id`, `Unit_Name`, `rd_id`, `file`, `status`, `final_Status`, `target_date`) VALUES
(1, 1, 84, 17, 'Station at Howarh', 'RD Kolkata', '152333798477822.pdf', 1, 2, '2018-04-24'),
(2, 1, 84, 17, 'station at west bengal ', 'RD Kolkata', '152333798477822.pdf', 0, 0, '2018-04-24'),
(3, 1, 84, 17, 'Station at Haridwar', 'RD Lucknow', '152333798477822.pdf', 1, 2, '2018-04-24'),
(4, 1, 84, 17, 'station at Bhagalpur', 'RD Kolkata', '152333798477822.pdf', 0, 0, '2018-04-24'),
(5, 1, 84, 17, 'station at Kaveri', 'RD Bengaluru', '152333798477822.pdf', 1, 1, '2018-04-24'),
(6, 1, 84, 17, 'station at and verification of Tapi river', 'RD Vadodara', '152333798477822.pdf', 1, 1, '2018-04-24'),
(7, 1, 84, 17, 'Monitoting at Brhamputra in A.P.', 'RD Shilong', '152333798477822.pdf', 0, 0, '2018-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities2`
--

CREATE TABLE IF NOT EXISTS `tbl_activities2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `rd_id` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  `target_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities3`
--

CREATE TABLE IF NOT EXISTS `tbl_activities3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `rd_id` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  `target_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities4`
--

CREATE TABLE IF NOT EXISTS `tbl_activities4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `rd_id` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  `target_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities5`
--

CREATE TABLE IF NOT EXISTS `tbl_activities5` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `rd_id` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  `target_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities6`
--

CREATE TABLE IF NOT EXISTS `tbl_activities6` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `rd_id` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  `target_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities7`
--

CREATE TABLE IF NOT EXISTS `tbl_activities7` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `rd_id` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  `target_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities8`
--

CREATE TABLE IF NOT EXISTS `tbl_activities8` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `rd_id` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  `target_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities9`
--

CREATE TABLE IF NOT EXISTS `tbl_activities9` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `rd_id` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  `target_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_activities9`
--

INSERT INTO `tbl_activities9` (`id`, `main_id`, `user_id`, `activities_id`, `Unit_Name`, `rd_id`, `file`, `status`, `final_Status`, `target_date`) VALUES
(1, 1, 84, 3, 'M/S Aditya Birla, Bhiwani', 'RD Bhopal', '15233379841373510.pdf', 0, 0, '2018-04-25'),
(2, 1, 84, 3, 'M/S Kota Phama Ltd.', 'RD Lucknow', '15233379841373510.pdf', 0, 0, '2018-04-25'),
(3, 1, 84, 3, 'M/s Uadapi , Bengaluru', 'RD Bengaluru', '15233379841373510.pdf', 0, 0, '2018-04-25'),
(4, 1, 84, 3, 'M/s Magazon', 'RD Vadodara', '15233379841373510.pdf', 0, 0, '2018-04-25'),
(5, 3, 84, 3, '16 industires of Bhaglapur, Bihar', 'RD Kolkata', '15233400123006510.pdf', 1, 2, '2018-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities10`
--

CREATE TABLE IF NOT EXISTS `tbl_activities10` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `rd_id` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  `target_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities11`
--

CREATE TABLE IF NOT EXISTS `tbl_activities11` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `rd_id` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  `target_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities12`
--

CREATE TABLE IF NOT EXISTS `tbl_activities12` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `rd_id` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  `target_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities13`
--

CREATE TABLE IF NOT EXISTS `tbl_activities13` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `rd_id` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  `target_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities14`
--

CREATE TABLE IF NOT EXISTS `tbl_activities14` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `rd_id` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  `target_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities15`
--

CREATE TABLE IF NOT EXISTS `tbl_activities15` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `rd_id` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  `target_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities16`
--

CREATE TABLE IF NOT EXISTS `tbl_activities16` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `rd_id` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  `target_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities17`
--

CREATE TABLE IF NOT EXISTS `tbl_activities17` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `rd_id` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  `target_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_activities17`
--

INSERT INTO `tbl_activities17` (`id`, `main_id`, `user_id`, `activities_id`, `Unit_Name`, `rd_id`, `file`, `status`, `final_Status`, `target_date`) VALUES
(1, 1, 84, 5, 'M/s centura', 'RD Lucknow', '', 0, 0, '2018-04-30'),
(2, 1, 84, 5, 'M/s paper mils', 'RD Kolkata', '', 0, 0, '2018-04-30'),
(3, 1, 84, 5, 'M/s Kotdwara', 'RD Bhopal', '', 0, 0, '2018-04-30'),
(4, 2, 84, 5, 'M/S Varanasi', 'RD Lucknow', '', 0, 0, '2018-05-02'),
(5, 2, 84, 5, 'M/s xyz', 'RD Kolkata', '', 1, 1, '2018-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities_main`
--

CREATE TABLE IF NOT EXISTS `tbl_activities_main` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_activities_main`
--

INSERT INTO `tbl_activities_main` (`id`, `user_id`) VALUES
(1, 84),
(2, 84),
(3, 84);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities_main_rd`
--

CREATE TABLE IF NOT EXISTS `tbl_activities_main_rd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `month` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_activities_main_rd`
--

INSERT INTO `tbl_activities_main_rd` (`id`, `user_id`, `month`) VALUES
(3, 78, 'Apr-2018'),
(4, 82, 'Apr-2018');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities_rd0`
--

CREATE TABLE IF NOT EXISTS `tbl_activities_rd0` (
  `rdid` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `month` varchar(25) NOT NULL,
  `target_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rdid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_activities_rd0`
--

INSERT INTO `tbl_activities_rd0` (`rdid`, `main_id`, `user_id`, `activities_id`, `Unit_Name`, `month`, `target_date`, `status`, `final_Status`) VALUES
(1, 4, 82, 18, 'abc, howarh', 'Apr-2018', '0000-00-00', 0, 0),
(2, 4, 82, 18, '1234', 'Apr-2018', '0000-00-00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities_rd1`
--

CREATE TABLE IF NOT EXISTS `tbl_activities_rd1` (
  `rdid` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `month` varchar(25) NOT NULL,
  `target_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rdid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_activities_rd1`
--

INSERT INTO `tbl_activities_rd1` (`rdid`, `main_id`, `user_id`, `activities_id`, `Unit_Name`, `month`, `target_date`, `status`, `final_Status`) VALUES
(1, 4, 82, 17, '1234', 'Apr-2018', '0000-00-00', 0, 0),
(2, 4, 82, 17, 'xyz', 'Apr-2018', '0000-00-00', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities_rd2`
--

CREATE TABLE IF NOT EXISTS `tbl_activities_rd2` (
  `rdid` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `month` varchar(25) NOT NULL,
  `target_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rdid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_activities_rd2`
--

INSERT INTO `tbl_activities_rd2` (`rdid`, `main_id`, `user_id`, `activities_id`, `Unit_Name`, `month`, `target_date`, `status`, `final_Status`) VALUES
(1, 4, 82, 16, 'River Ganga ', 'Apr-2018', '0000-00-00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities_rd3`
--

CREATE TABLE IF NOT EXISTS `tbl_activities_rd3` (
  `rdid` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `month` varchar(25) NOT NULL,
  `target_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rdid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_activities_rd3`
--

INSERT INTO `tbl_activities_rd3` (`rdid`, `main_id`, `user_id`, `activities_id`, `Unit_Name`, `month`, `target_date`, `status`, `final_Status`) VALUES
(1, 4, 82, 15, 'brahmputra', 'Apr-2018', '0000-00-00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities_rd4`
--

CREATE TABLE IF NOT EXISTS `tbl_activities_rd4` (
  `rdid` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `month` varchar(25) NOT NULL,
  `target_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rdid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities_rd5`
--

CREATE TABLE IF NOT EXISTS `tbl_activities_rd5` (
  `rdid` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `month` varchar(25) NOT NULL,
  `target_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rdid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities_rd6`
--

CREATE TABLE IF NOT EXISTS `tbl_activities_rd6` (
  `rdid` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `month` varchar(25) NOT NULL,
  `target_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rdid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities_rd7`
--

CREATE TABLE IF NOT EXISTS `tbl_activities_rd7` (
  `rdid` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `month` varchar(25) NOT NULL,
  `target_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rdid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities_rd8`
--

CREATE TABLE IF NOT EXISTS `tbl_activities_rd8` (
  `rdid` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `month` varchar(25) NOT NULL,
  `target_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rdid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities_rd9`
--

CREATE TABLE IF NOT EXISTS `tbl_activities_rd9` (
  `rdid` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `month` varchar(25) NOT NULL,
  `target_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rdid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities_rd10`
--

CREATE TABLE IF NOT EXISTS `tbl_activities_rd10` (
  `rdid` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `month` varchar(25) NOT NULL,
  `target_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rdid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities_rd11`
--

CREATE TABLE IF NOT EXISTS `tbl_activities_rd11` (
  `rdid` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `month` varchar(25) NOT NULL,
  `target_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rdid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities_rd12`
--

CREATE TABLE IF NOT EXISTS `tbl_activities_rd12` (
  `rdid` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `month` varchar(25) NOT NULL,
  `target_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rdid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities_rd13`
--

CREATE TABLE IF NOT EXISTS `tbl_activities_rd13` (
  `rdid` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `month` varchar(25) NOT NULL,
  `target_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rdid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities_rd14`
--

CREATE TABLE IF NOT EXISTS `tbl_activities_rd14` (
  `rdid` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `month` varchar(25) NOT NULL,
  `target_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rdid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities_rd15`
--

CREATE TABLE IF NOT EXISTS `tbl_activities_rd15` (
  `rdid` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `month` varchar(25) NOT NULL,
  `target_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rdid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities_rd16`
--

CREATE TABLE IF NOT EXISTS `tbl_activities_rd16` (
  `rdid` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `month` varchar(25) NOT NULL,
  `target_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rdid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_activities_rd16`
--

INSERT INTO `tbl_activities_rd16` (`rdid`, `main_id`, `user_id`, `activities_id`, `Unit_Name`, `month`, `target_date`, `status`, `final_Status`) VALUES
(1, 3, 78, 5, 'Q1', 'Apr-2018', '0000-00-00', 0, 0),
(2, 3, 78, 5, 'Q2', 'Apr-2018', '0000-00-00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities_rd17`
--

CREATE TABLE IF NOT EXISTS `tbl_activities_rd17` (
  `rdid` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  `Unit_Name` text NOT NULL,
  `month` varchar(25) NOT NULL,
  `target_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `final_Status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rdid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_activities_rd17`
--

INSERT INTO `tbl_activities_rd17` (`rdid`, `main_id`, `user_id`, `activities_id`, `Unit_Name`, `month`, `target_date`, `status`, `final_Status`) VALUES
(1, 3, 78, 5, 'R1', 'Apr-2018', '0000-00-00', 0, 0),
(2, 3, 78, 5, 'R2', 'Apr-2018', '0000-00-00', 0, 0),
(3, 4, 82, 5, 'Ganga at Kolkata', 'Apr-2018', '0000-00-00', 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `emailid`, `phone`, `Officer`, `board`, `user_type`) VALUES
(1, 'admin@gmail.com', 'admin@123', 'archit.uprit@gmail.com', '', 'Admin', '', 'Admin'),
(75, 'ms', 'ms', 'sudhakar.cpcb@nic.in', '', 'A.Sudhakar', '', 'MS'),
(78, 'zo_bengaluru.cpcb', 'Zobengaluru@123', 'ssuresh.cpcb@nic.in', '9958161440', 'S. Suresh', 'RD Bengaluru', 'SPCB'),
(79, 'zo_lucknow.cpcb', 'Zolucknow@123', 'lucknow.cpcb@nic.in', '7678997444', 'S.K. Gupta', 'RD Lucknow', 'SPCB'),
(80, 'bhopal.zo', 'Zobhopal@123', 'bhopal.cpcb@gmail.com', '9958161440', 'P.K. Behera', 'RD Bhopal', 'SPCB'),
(81, 'zo_vadodara.cpcb', 'Zovadodara@123', 'brnaidu.cpcb@nic.in', '9958161440', 'B.R. Naidu', 'RD Vadodara', 'SPCB'),
(82, 'zo_kolkata.cpcb', 'Zokolkata@123', 'rcsaxenaa@rediffmail.com', '7044098469', 'R.C. Saxena', 'RD Kolkata', 'SPCB'),
(83, 'zo_shilong.cpcb', 'Zoshilong@123', 'zchangsan.cpcb@nic.in', '9436334978', 'Z. Changsan', 'RD Shilong', 'SPCB'),
(84, 'gurnamsingh.cpcb', 'Gurnamsingh@123', 'gurnam.cpcb@nic.in', '9958161440', 'Gurnam Singh', '', 'CPCB'),
(86, 'pk.cpcb', 'pk@123', 'pk@gmail.com', '9958161440', 'PK Gupta', '', 'CPCB');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_activities`
--

CREATE TABLE IF NOT EXISTS `tbl_user_activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Activities` text NOT NULL,
  `type` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbl_user_activities`
--

INSERT INTO `tbl_user_activities` (`id`, `Activities`, `type`) VALUES
(1, 'Inspections for VIP complaint verification', 'P1'),
(2, 'Inspections related with NGT/court matter', 'P1'),
(3, 'Inspections based on SMS alerts from OCEMS of units', 'P2'),
(4, 'Inspections for ganga complaint verification', 'P2'),
(5, 'Inspections for public complaint verification', 'P3'),
(6, 'Re-inspections/Follow-up visits of units', 'P3'),
(7, 'Meetings/workshops/Training', 'P3'),
(8, 'CETPs', 'P4'),
(9, 'CHWTSDF', 'P4'),
(10, 'CBMWTF', 'P4'),
(11, 'STPs', 'P4'),
(12, 'SLFs(MSW)', 'P4'),
(13, 'Inspections related with import of hazardous & other waste', 'P4'),
(14, 'Monitoring for trail run under HWM Rules', 'P4'),
(15, 'Monitoring of river/rivulets/drains', 'P4'),
(16, 'Inter state river monitoring', 'P4'),
(17, 'Ambient air quality monitoring stations & no. of inspection during the month', 'P4'),
(18, 'Water quality monitoring stations & no. of inspection during the month', 'P4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_activities_date_wise`
--

CREATE TABLE IF NOT EXISTS `tbl_user_activities_date_wise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Activities` text NOT NULL,
  `type` varchar(11) NOT NULL,
  `dateMonth` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbl_user_activities_date_wise`
--

INSERT INTO `tbl_user_activities_date_wise` (`id`, `Activities`, `type`, `dateMonth`) VALUES
(1, 'Inspections for VIP complaint verification', 'P1', '0000-00-00'),
(2, 'Inspections related with NGT/court matter', 'P1', '0000-00-00'),
(3, 'Inspections based on SMS alerts from OCEMS of units', 'P2', '0000-00-00'),
(4, 'Inspections for ganga complaint verification', 'P2', '0000-00-00'),
(5, 'Inspections for public complaint verification', 'P3', '0000-00-00'),
(6, 'Re-inspections/Follow-up visits of units', 'P3', '0000-00-00'),
(7, 'Meetings/workshops/Training', 'P3', '0000-00-00'),
(8, 'CETPs', 'P4', '0000-00-00'),
(9, 'CHWTSDF', 'P4', '0000-00-00'),
(10, 'CBMWTF', 'P4', '0000-00-00'),
(11, 'STPs', 'P4', '0000-00-00'),
(12, 'SLFs(MSW)', 'P4', '0000-00-00'),
(13, 'Inspections related with import of hazardous & other waste', 'P4', '0000-00-00'),
(14, 'Monitoring for trail run under HWM Rules', 'P4', '0000-00-00'),
(15, 'Monitoring of river/rivulets/drains', 'P4', '0000-00-00'),
(16, 'Inter state river monitoring', 'P4', '0000-00-00'),
(17, 'Ambient air quality monitoring stations & no. of inspection during the month', 'P4', '0000-00-00'),
(18, 'Water quality monitoring stations & no. of inspection during the month', 'P4', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_activities_list`
--

CREATE TABLE IF NOT EXISTS `tbl_user_activities_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `activities_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `tbl_user_activities_list`
--

INSERT INTO `tbl_user_activities_list` (`id`, `user_id`, `activities_id`) VALUES
(28, 84, 17),
(29, 84, 3),
(30, 84, 4),
(38, 86, 17),
(39, 86, 10),
(40, 86, 8),
(41, 86, 9),
(42, 86, 3),
(43, 86, 4),
(44, 86, 5),
(45, 86, 1),
(46, 86, 13),
(47, 86, 2),
(48, 86, 16),
(49, 86, 7),
(50, 86, 14),
(51, 86, 15),
(52, 86, 6),
(53, 86, 12),
(54, 86, 11),
(55, 86, 18);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
