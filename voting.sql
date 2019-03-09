-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 11, 2018 at 03:02 PM
-- Server version: 5.7.19
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
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pic` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `aid` (`id`),
  UNIQUE KEY `contact` (`contact`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `pass`, `contact`, `email`, `city`, `pic`) VALUES
('A001', 'Yash', '612e9463accae2cac96562a83cbe0d97141f04ac', '8223520041', 'yash@gmail.com', 'London', 'Adminpics/anim1.jpg'),
('A002', 'check', '8cb2237d0679ca88db6464eac60da96345513964', '9658745336', 'check@gmail.com', 'London', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `cregister`
--

DROP TABLE IF EXISTS `cregister`;
CREATE TABLE IF NOT EXISTS `cregister` (
  `eid` varchar(10) NOT NULL,
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(1000) NOT NULL,
  `lname` varchar(1000) NOT NULL,
  `pass` varchar(1000) NOT NULL,
  `mail` varchar(2000) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `year` varchar(3) NOT NULL,
  `dept1` varchar(250) DEFAULT NULL,
  `dept2` varchar(250) DEFAULT NULL,
  `dept3` varchar(250) DEFAULT NULL,
  `candid` varchar(100) DEFAULT NULL,
  `cdpt` varchar(250) NOT NULL,
  `votes` varchar(500) NOT NULL DEFAULT '0',
  `upic` varchar(1000) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `mobile` (`mobile`),
  UNIQUE KEY `eid` (`eid`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cregister`
--

INSERT INTO `cregister` (`eid`, `uid`, `fname`, `lname`, `pass`, `mail`, `mobile`, `year`, `dept1`, `dept2`, `dept3`, `candid`, `cdpt`, `votes`, `upic`) VALUES
('ECC1505009', 1, 'Yash', 'Kesarwani', '8cb2237d0679ca88db6464eac60da96345513964', 'ke@yash.com', '9632587410', '3', 'phy', 'CA', '', 'prez', '', '4', ''),
('ECC1503002', 2, 'Amarendra', 'Mishra', '71518705b3112f451a492af2cdad4f241ace0dfc', 'msihra@mail.com', '9874312600', '3', 'phy', 'stat', '', 'vprez', '', '4', ''),
('ECC1504011', 3, 'Kumar', 'Vishwash', 'ed49eb1e93f7700323a1cb9acbce69471fbdf268', 'Kumar@gmail.com', '846512452', '3', 'phy', 'ele', '', 'treasurer', '', '1', ''),
('ECC1505005', 4, 'Ram', 'Manohar', '92c6f24d9d0a29a0a2e70646af03d25e262bbfc7', 'manohar@gmail.com', '5956348673', '2', 'phy', 'CA', 'maths', 'cr', 'phy', '1', 'Users/Userpics/eb6bdcc8f74d88bc64877eab8126b518--minion-emoji-minion-face.jpg'),
('ECC1502001', 5, 'Manohar', 'Shukla', 'f6219aea49987dc3046c2e75553782f638a4359d', 'shuklam@gmail.com', '9653158662', '3', 'phy', '', 'maths', 'cr', 'maths', '3', ''),
('ECC1504003', 6, 'Akshay', 'SIngh', '9703b1967202ef2a71ea370e411b3e19bdf19dda', 'akshay@gmail.com', '9874521036', '2', 'phy', 'ele', 'maths', 'cr', 'maths', '3', ''),
('ECC1503023', 7, 'Rajay', 'Kumar', '35db8a95ade796e016264cac4370d81a10fae3c2', 'rajay@kumar.com', '9632014587', '3', 'phy', '', 'maths', 'cr', 'maths', '3', ''),
('ECC1504009', 8, 'Umar', 'Abdulla ', '81993076a566336839a3af3c9d179ce3245f7cdb', 'umar@abdulla.com', '987630145', '3', 'phy', 'ele', '', 'cr', 'ele', '1', ''),
('ECC1502010', 9, 'Amar', 'Shankar', '6391c18a291fc8647c73747d39c1199cec74cdc2', 'shankar@amar.com', '9860123546', '3', '', 'chem', 'maths', 'prez', ' ', '4', ''),
('ECC1504040', 10, 'Aman', 'Shukla', 'b593251ddc6e16afec0ada2a4ba50bc97beb65e7', 'aman3@shukla.com', '93012548714', '2', 'phy', 'ele', 'maths', 'vprez', ' ', '1', ''),
('ECC1504036', 11, 'Abhishek', 'Kumar', 'b47d926911d4e6b8201f801a151f5b82d513cf09', 'ascg@mail.ocm', '984015563', '1', 'phy', 'ele', 'maths', 'treasurer', ' ', '1', ''),
('ECC1504020', 12, 'Adnan', 'Shami', '571dc718cd8446e9ea41b7123b78f30fa654dc17', 'adnan@gmail.com', '96584223666', '3', 'phy', 'ele', '', 'prez', ' ', '0', ''),
('ECC1504024', 13, 'Akash', 'Mishra', '8cb2237d0679ca88db6464eac60da96345513964', 'akash@mishra.com', '9963255684', '3', 'phy', 'ele', '', 'cr', 'phy', '0', ''),
('ECC1502021', 14, 'Rohan', 'Chaturvedi', 'c0b7328375112fa1453128677e22d01fb5caa868', 'rohan@mail.com', '9654830156', '2', 'phy', 'chem', 'maths', 'cr', 'chem', '0', ''),
('ECC1503022', 15, 'Suraj', 'Sinha', 'eecf715265df0b0780aff183233248d2c01d2cba', 'suraj@redifmail.com', '9845662113', '3', 'phy', 'stat', '', 'cr', 'stat', '0', ''),
('ECC1505015', 16, 'Arav', 'Kapoor', 'c028580e82103b21c67c8745f8fb9ae87f045edc', 'arav@gmail.com', '9654123087', '3', '', 'CA', 'maths', 'cr', 'CA', '0', ''),
('NOTA0', 17, 'NOTA', '', '', '', '0', '', NULL, NULL, NULL, 'cr', 'phy', '0', ''),
('NOTA', 18, 'NOTA', '', '', '', '1', '', NULL, NULL, NULL, 'cr', 'chem', '0', ''),
('NOTA2', 19, 'NOTA', '', '', '', '2', '', NULL, NULL, NULL, 'cr', 'stat', '0', ''),
('NOTA3', 20, 'NOTA', '', '', '', '3', '', NULL, NULL, NULL, 'cr', 'ele', '0', ''),
('NOTA4', 21, 'NOTA', '', '', '', '4', '', NULL, NULL, NULL, 'cr', 'CA', '0', ''),
('NOTA5', 22, 'NOTA', '', '', '', '5', '', NULL, NULL, NULL, 'cr', 'maths', '0', ''),
('NOTA6', 23, 'NOTA', '', '', '', '6', '', NULL, NULL, NULL, 'prez', '', '0', ''),
('NOTA7', 24, 'NOTA', '', '', '', '7', '', NULL, NULL, NULL, 'vprez', '', '0', ''),
('NOTA8', 25, 'NOTA', '', '', '', '8', '', NULL, NULL, NULL, 'treasurer', '', '0', ''),
('ECC1502150', 26, 'Rakesh', 'Arora', '8cb2237d0679ca88db6464eac60da96345513964', 'rakesh@gmail.com', '9652301410', '3', 'phy', '', 'maths', 'treasurer', ' ', '0', ''),
('ECC1504029', 27, 'Shubham ', 'Kapoor', '8cb2237d0679ca88db6464eac60da96345513964', 'shubham@gmail.com', '9874445666', '3', 'phy', '', 'maths', 'treasurer', ' ', '0', ''),
('ECC1506010', 28, 'Shekhar', 'Shukla', '8cb2237d0679ca88db6464eac60da96345513964', 'shekhar@mail.com', '9652314506', '2', 'phy', 'ele', 'maths', 'cr', 'phy', '0', 'Users/Userpics/2015_minions-t2.jpg'),
('ECC1504022', 29, 'Rajveer', 'Shekhawat', '8cb2237d0679ca88db6464eac60da96345513964', 'rajveer@gmail.com', '9666333252', '3', '', 'ele', 'maths', 'vprez', ' ', '0', 'Users/Userpics/eb6bdcc8f74d88bc64877eab8126b518--minion-emoji-minion-face.jpg'),
('ECC1503020', 30, 'Sahbaz', 'Alam', '8cb2237d0679ca88db6464eac60da96345513964', 'sahbaz@gmail.com', '9654123088', '2', 'phy', 'stat', 'maths', 'cr', 'stat', '0', 'Users/Userpics/images.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `vregister`
--

DROP TABLE IF EXISTS `vregister`;
CREATE TABLE IF NOT EXISTS `vregister` (
  `eid` varchar(10) NOT NULL,
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(1000) NOT NULL,
  `lname` varchar(1000) NOT NULL,
  `pass` varchar(1000) NOT NULL,
  `mail` varchar(2000) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `year` varchar(3) NOT NULL,
  `dept1` varchar(250) DEFAULT NULL,
  `dept2` varchar(250) DEFAULT NULL,
  `dept3` varchar(250) DEFAULT NULL,
  `post` varchar(250) NOT NULL,
  `vdpt` varchar(200) NOT NULL,
  `cast` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `mobile` (`mobile`),
  UNIQUE KEY `eid` (`eid`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `vregister`
--

INSERT INTO `vregister` (`eid`, `uid`, `fname`, `lname`, `pass`, `mail`, `mobile`, `year`, `dept1`, `dept2`, `dept3`, `post`, `vdpt`, `cast`) VALUES
('ECC1505006', 1, 'Ashish', 'Rastogi', '33fefce72c787a661b297063e9764f2498ae9e8a', 'ashish@mail.com', '9364131641', '3', 'phy', '', 'maths', 'cr', 'maths', 0),
('ECC1505046', 2, 'Yash', 'Kesarwani', '8cb2237d0679ca88db6464eac60da96345513964', 'yash@gmail.com', '8418876460', '3', '', 'CA', 'maths', 'cr', 'maths', 1),
('ECC1605024', 3, 'Rahul', 'Agrawal', '8cb2237d0679ca88db6464eac60da96345513964', 'rahul@gmail.com', '9685741320', '3', '', 'CA', 'maths', 'cr', 'maths', 1),
('ECC1404006', 4, 'Akshay ', 'Singh', '278ea56504f7f21e5b036239c31ea3bb60e63999', 'akshaY@mail.com', '9745632100', '2', 'phy', 'ele', 'maths', 'cr', 'ele', 1),
('ECC1504010', 5, 'Abc', 'Xyz', '8cb2237d0679ca88db6464eac60da96345513964', 'abc@xyz.com', '9632014587', '3', 'phy', '', 'maths', 'prez', ' ', 1),
('ECC1505048', 6, 'Abhinav ', 'Bindra', '8cb2237d0679ca88db6464eac60da96345513964', 'abhinav@mail.com', '9685032145', '1', 'phy', 'CA', 'maths', 'vprez', ' ', 1),
('ECC1504026', 7, 'Mayank', 'Agrawal', '8cb2237d0679ca88db6464eac60da96345513964', 'mayank@gmail.com', '9653201545', '2', 'phy', 'ele', 'maths', 'treasurer', ' ', 1),
('ECC1505056', 8, 'Shubham', 'Singh', '8cb2237d0679ca88db6464eac60da96345513964', 'singh@gmail.com', '9654123078', '2', 'phy', 'CA', 'maths', 'prez', ' ', 1),
('ECC1504016', 9, 'Halwa', 'Singh', '8cb2237d0679ca88db6464eac60da96345513964', 'halwa@mail.com', '9658742310', '2', 'phy', 'ele', 'maths', 'prez', ' ', 1),
('ECC1504023', 10, 'Shriyam', 'Verma', '8cb2237d0679ca88db6464eac60da96345513964', 'shriyam@gmail.com', '9632011478', '2', 'phy', 'ele', 'maths', 'cr', 'maths', 1),
('ECC1502010', 11, 'Ashok', 'Shukla', '8cb2237d0679ca88db6464eac60da96345513964', 'ashok@gmail.com', '9654300213', '2', 'phy', 'chem', 'maths', 'vprez', ' ', 1),
('ECC1504042', 12, 'Rohit', 'Singh', '8cb2237d0679ca88db6464eac60da96345513964', 'rohit@yahoo.co.in', '9877541236', '3', 'phy', 'ele', '', 'treasurer', ' ', 0),
('ECC1504001', 13, 'Shankar', 'Verma', '8cb2237d0679ca88db6464eac60da96345513964', 'shankar@mail.com', '9658741232', '3', 'phy', 'ele', '', 'vprez', ' ', 0),
('ECC1504012', 14, 'xyz', 'abc', '8cb2237d0679ca88db6464eac60da96345513964', 'xyz@gmail.cpom', '9632541088', '3', 'phy', 'ele', 'maths', 'cr', 'phy', 1),
('ECC1503001', 15, 'Sabbir ', 'Ahmad', '8cb2237d0679ca88db6464eac60da96345513964', 'sabbir@gmail.com', '9654120032', '2', 'phy', 'stat', 'maths', 'cr', 'stat', 0),
('ECC1504013', 16, 'Mashruf', 'Khan', '8cb2237d0679ca88db6464eac60da96345513964', 'mashruf@gmail.com', '9665223010', '2', 'phy', 'ele', 'maths', 'cr', 'phy', 0),
('ECC1403010', 19, 'Aniket', 'Gupta', '8cb2237d0679ca88db6464eac60da96345513964', 'aniket@gmail.com', '9652103254', '2', 'phy', '', 'maths', 'vprez', ' ', 0),
('ECC1505005', 20, 'Shivam', 'Pandey', '8cb2237d0679ca88db6464eac60da96345513964', 'shivam@gmail.com', '9632155488', '3', '', 'CA', 'maths', 'prez', ' ', 1),
('ECC1302001', 21, 'Akash ', 'Shukla', '8cb2237d0679ca88db6464eac60da96345513964', 'akash@gmail.com', '9654112302', '3', '', 'chem', 'maths', 'cr', 'chem', 0),
('ECC1505010', 22, 'Arnav', 'Kapoor', '8cb2237d0679ca88db6464eac60da96345513964', 'arnav@gmail.com', '9632154870', '3', 'phy', 'CA', '', 'prez', ' ', 0),
('ECC1504002', 23, 'Vinay', 'Singh', '8cb2237d0679ca88db6464eac60da96345513964', 'vinay@gmail.com', '9665123012', '2', 'phy', 'ele', 'maths', 'cr', 'maths', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
