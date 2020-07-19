-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2018 at 08:05 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank`
--

CREATE TABLE `bloodbank` (
  `bloodgroup` varchar(3) NOT NULL,
  `Quantity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodbank`
--

INSERT INTO `bloodbank` (`bloodgroup`, `Quantity`) VALUES
('A-', ''),
('A+', ''),
('B+', ''),
('B-', ''),
('AB+', ''),
('AB-', ''),
('O-', ''),
('A1+', ''),
('A1-', ''),
('A2+', ''),
('A2-', ''),
('A1B', ''),
('A1B', ''),
('A2B', ''),
('A2B', ''),
('A-', ''),
('A+', ''),
('B+', ''),
('B-', ''),
('AB+', ''),
('AB-', ''),
('O-', ''),
('A1+', ''),
('A1-', ''),
('A2+', ''),
('A2-', ''),
('A1B', ''),
('A1B', ''),
('A2B', ''),
('A2B', '');

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup1`
--

CREATE TABLE `bloodgroup1` (
  `bloodgroup` varchar(10) NOT NULL,
  `Quantity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodgroup1`
--

INSERT INTO `bloodgroup1` (`bloodgroup`, `Quantity`) VALUES
('A-', ''),
('A+', ''),
('B+', ''),
('B-', ''),
('AB+', ''),
('AB-', ''),
('O+', ''),
('A1+', ''),
('A1-', ''),
('A2+', ''),
('A1B+', ''),
('A1B-', ''),
('A2B+', ''),
('A2B-', ''),
('O-', ''),
('A2-', ''),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup2`
--

CREATE TABLE `bloodgroup2` (
  `Anegative` int(11) NOT NULL,
  `Apositive` int(11) NOT NULL,
  `Bpositive` int(11) NOT NULL,
  `Bnegative` int(11) NOT NULL,
  `ABpositive` int(11) NOT NULL,
  `ABnegative` int(11) NOT NULL,
  `Opositive` int(11) NOT NULL,
  `Onegative` int(11) NOT NULL,
  `A1positive` int(11) NOT NULL,
  `A1negative` int(11) NOT NULL,
  `A2positive` int(11) NOT NULL,
  `A2negative` int(11) NOT NULL,
  `A1Bpositive` int(11) NOT NULL,
  `A1Bnegative` int(11) NOT NULL,
  `A2Bpositive` int(11) NOT NULL,
  `A2Bnegative` int(11) NOT NULL,
  `keyvalue` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodgroup2`
--

INSERT INTO `bloodgroup2` (`Anegative`, `Apositive`, `Bpositive`, `Bnegative`, `ABpositive`, `ABnegative`, `Opositive`, `Onegative`, `A1positive`, `A1negative`, `A2positive`, `A2negative`, `A1Bpositive`, `A1Bnegative`, `A2Bpositive`, `A2Bnegative`, `keyvalue`) VALUES
(70, 100, 30, 40, 50, 60, 25, 30, 45, 32, 1, 6, 25, 6, 12, 0, 12);

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`username`, `password`) VALUES
('Saviour', 'Saviour'),
('Saviour', 'Saviour');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` char(30) NOT NULL,
  `username` char(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `gender` char(6) NOT NULL,
  `bg` varchar(4) NOT NULL,
  `weight` int(3) NOT NULL,
  `contact` bigint(12) NOT NULL,
  `email` varchar(25) NOT NULL,
  `state` char(30) NOT NULL,
  `city` char(30) NOT NULL,
  `area` char(30) NOT NULL,
  `list` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `username`, `password`, `dob`, `gender`, `bg`, `weight`, `contact`, `email`, `state`, `city`, `area`, `list`) VALUES
('Abdul', '', '', '2018-09-05', 'male', 'AB+', 23, 9892724056, 'abdul@gmail.com', 'Jharkhand', 'Mumbai', 'addd', 'Heart Disease'),
('Aakash', 'aky', 'aky2', '2018-09-02', 'male', 'B+', 40, 456789123, 'aakash@gmail.com', 'Andaman Nicobar', 'mumbai', 'kjas', 'Heart Disease'),
('aku', 'aky1233', 'Sa@123456', '2018-09-26', 'male', 'B+', 23, 5698741223, 'usama@gmail.com', 'karela', 'Vishakapatnam', 'addd', 'Heart Disease'),
('juveriya', 'juv_007', 'hey', '2018-09-07', 'female', 'A-', 45, 123789654, 'abcdef@gmail.com', '', 'mumbai', 'amrut nagar', 'Heart Disease'),
('shruti', 'khan', 'qwer', '2018-08-31', 'female', 'O+', 23, 456789, '123@gmail.com', '', 'varanasi', 'jabalpur', 'Heart Disease'),
('Obaid', 'ObaidKazi', 'obaidkazi', '1998-09-14', 'male', 'B+', 46, 7208337377, 'obaidkazi03@gmail.com', '', 'THANE', 'Mumbra', 'Heart Disease'),
('Obaid23', 'ObaidKazi1', '123456', '2018-09-01', 'male', 'A+', 45, 58456, 'obaidkazi03@gmail.com', '', 'mumbai', 'amrut nagar', 'Heart Disease'),
('kjhak', 'pcclub', 'asdf', '2018-09-05', 'female', 'B-', 56, 58123445, 'qwer@gmail.com', '', 'ewew', 'addd', 'Heart Disease'),
('practice', 'prac', 'prac', '2018-09-06', 'female', 'AB+', 12, 9856523, 'abcdef@gmail.com', 'Karnataka', '', 'jabalpur', 'Heart Disease'),
('prac', 'prac22', 'prac22', '2018-09-07', 'female', 'B+', 78, 562365, 'abcdef@gmail.com', 'Hariyana', 'Mumbai', 'amrut nagar', 'Heart Disease'),
('safu', 's-naaz', 'mnbv', '2018-09-14', 'female', 'B-', 78, 789456123, 'qazi@gmail.com', '', 'parel', 'sharifa road', 'Heart Disease'),
('Safiya1', 'Safiya 1', '1234', '1998-12-30', 'female', 'B+', 45, 123456789, 'safiya.f30@gmail.com', '', 'Thane', 'Mumbra', 'Heart Disease'),
('shafaq naushad', 'shaikh_shafaq', 'shafaque567', '2018-08-29', 'female', 'O+', 23, 569874123, 'qqqw@gmail.com', '', 'THANE', 'amrut nagar', 'Heart Disease'),
('juveriya', 'zxcv1', 'abcd', '2018-09-06', 'female', 'B+', 45, 987654321, 'usamaaaa@gmail.com', '', 'THANE', 'amrut nagar', 'Heart Disease');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `contact` (`contact`);
ALTER TABLE `register` ADD FULLTEXT KEY `name` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
