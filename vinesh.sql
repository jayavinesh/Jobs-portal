-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2017 at 09:44 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinesh`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `C_ID` int(20) NOT NULL,
  `C_NAME` varchar(20) DEFAULT NULL,
  `LOCATION_ID` int(4) DEFAULT NULL,
  `GENER` varchar(20) NOT NULL,
  `No_of_Posts` int(10) DEFAULT NULL,
  `Company_Pin` bigint(10) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Last_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`C_ID`, `C_NAME`, `LOCATION_ID`, `GENER`, `No_of_Posts`, `Company_Pin`, `Password`, `Last_Date`) VALUES
(100, 'EID.PARRY(INDIA)LTD', 1, 'SUGAR FACTORY', 10, 999, '888', '2017-10-10'),
(101, 'HPCL REFINERY', 2, 'FUELS AND GASES', 6, 888, '777', '2017-10-31'),
(102, 'VIZAG STEEL PLANT', 3, 'STEEL FACTORY', 700, 777, '666', '2017-10-16'),
(103, 'APIIC.LTD.', 4, 'INFRASTRUCTURE.CORP', 555, 666, '555', '2017-10-18'),
(104, 'CVR SOFTWARE', 5, 'SOFTWARE SOLUTIONS', 400, 555, '444', '2017-11-15'),
(105, 'CHADALAVADA.LTD', 6, 'TEXTILES', 666, 444, '333', '2017-12-27'),
(106, 'FUSION TECHNOLOG.LTD', 7, 'SOLAR PANELS', 2000, 333, '222', '2017-10-31'),
(107, 'CSRM CONSULTANCY', 8, 'CONSULATANCY SERVICE', 2000, 222, '111', '2017-10-28'),
(108, 'CYIENT', 9, 'SOFTWARE SOLUTIONS', 1000, 111, '000', '2017-10-29'),
(109, 'HERITAGE FOOD.LTD', 10, 'CHILLING UNIT', 500, 123, '321', '2018-01-11'),
(110, 'HARI (INDIA)LTD', 11, 'SUGAR FACTORY', 3000, 456, '654', '2017-12-29');

-- --------------------------------------------------------

--
-- Table structure for table `locs`
--

CREATE TABLE `locs` (
  `location_id` int(4) NOT NULL,
  `LOCATION_NAME` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locs`
--

INSERT INTO `locs` (`location_id`, `LOCATION_NAME`) VALUES
(1, 'srikakulam'),
(2, 'gajuwaka'),
(3, 'vizag'),
(4, 'vizianagaram'),
(5, 'nellore'),
(6, 'guntur'),
(7, 'prakasam'),
(8, 'kurnool'),
(9, 'hyderabad'),
(10, 'warangal'),
(11, 'khammam');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `USERS_NAME` varchar(30) NOT NULL,
  `EMAIL_ID` varchar(30) NOT NULL,
  `GENDER` varchar(15) NOT NULL,
  `ADDRESS` varchar(50) DEFAULT NULL,
  `EXPERIENCE` int(3) DEFAULT NULL,
  `CONTACT_NO` varchar(15) DEFAULT NULL,
  `QUALIFICATION` varchar(30) DEFAULT NULL,
  `Com_ID` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`USERS_NAME`, `EMAIL_ID`, `GENDER`, `ADDRESS`, `EXPERIENCE`, `CONTACT_NO`, `QUALIFICATION`, `Com_ID`) VALUES
('B.NAVEEN', 'B.NAVEEN@GMAIL.COM', 'MALE', 'ONGOLE', 3, '9098529395', 'M.TECH', 105),
('GAYATRI', 'GAYATRI48@GMAIL.COM', 'FEMALE', 'hyderabad', 2, '9091929396', 'M.TECH', 101),
('JAYA VINESH', 'JAYAVINESh89@GMAIL.COM', 'MALE', 'VISAKHAPATNAM', 2, '9091929394', 'B.TECH', 110),
('K.GRIEESH', 'K.GRIEESH@GMAIL.COM', 'MALE', 'GUNTUR', 2, '9091929865', 'M.TECH', 103),
('kiran', 'kiran@gmail.com', 'Male', 'malkapuram', 0, '9505134920', 'b tech', 105),
('manoj', 'manoj@gmail.com', 'Male', 'gajuwaka', 3, '9505281173', 'b tech', 101),
('MEGHANA', 'MEGHANA123@GMAIL.COM', 'FEMALE', 'VIZAG', 0, '9091912345', 'M.TECH', 108),
('murty', 'murty@gmail.com', 'Male', 'visakhapatnam', 10, '7656565656', 'ph.d', 101),
('NAGA KISHORE', 'NAGA KISHORE@GMAIL.COM', 'MALE', 'ANAKAPALLI', 3, '9091925695', 'B.TECH', 107),
('P.ANIL', 'P.ANIL145@GMAIL.COM', 'MALE', 'GAJUWAKA', 2, '8523629395', 'M.TECH', 109),
('PRATYUSHA', 'PRATYUSHA@GMAIL.COM', 'FEMALE', 'GAJUWAKA', 2, '9091929385', 'B.TECH', 102),
('aditya', 'r.c.aditya@gmail.com', 'Male', 'gajuwaka', 1, '8985376038', 'b tech', 100),
('SAI VINAY', 'SAVIDSP@GMAIL.COM', 'MALE', 'ANAKAPALLI', 0, '9091929395', 'M.TECH', 106),
('shankar', 'shankar@gmail.com', 'male', 'gajuwaka', 2, '9866154378', 'm.tech', 101),
('SRI CHARAN', 'SRICHARAN@GMAIL.COM', 'MALE', 'srikakulam', 2, '9091929367', 'M.TECH', 104),
('Vinay', 'vinay@gmail.com', 'Male', 'visakhapatnam', 6, '8567421350', 'btech', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`C_ID`),
  ADD KEY `LOCATION_ID` (`LOCATION_ID`);

--
-- Indexes for table `locs`
--
ALTER TABLE `locs`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`EMAIL_ID`),
  ADD KEY `Com_ID` (`Com_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_ibfk_1` FOREIGN KEY (`LOCATION_ID`) REFERENCES `locs` (`location_id`);

--
-- Constraints for table `users_table`
--
ALTER TABLE `users_table`
  ADD CONSTRAINT `users_table_ibfk_1` FOREIGN KEY (`Com_ID`) REFERENCES `companies` (`C_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
