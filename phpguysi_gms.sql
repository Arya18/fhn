-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2018 at 11:29 AM
-- Server version: 5.5.51-38.2
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phpguysi_gms`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(11) NOT NULL,
  `doc_name` varchar(50) NOT NULL,
  `doc_email` varchar(50) NOT NULL,
  `doc_mobile` varchar(10) NOT NULL,
  `doc_address` varchar(100) NOT NULL,
  `doc_registration` varchar(50) NOT NULL,
  `doc_spec` varchar(50) NOT NULL,
  `doc_password` varchar(50) NOT NULL,
  `doc_dob` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `doc_name`, `doc_email`, `doc_mobile`, `doc_address`, `doc_registration`, `doc_spec`, `doc_password`, `doc_dob`) VALUES
(2, 'anil', 'anildubey1401@gmail.com', '2147483647', 'noida', '123', 'mbbs', '123456', '2018-03-15 00:00:00'),
(3, 'Dr.Arun', 'drarun@gmail.com', '2147483647', 'Bapu Dham Sarsol, G.T Road', '123123', 'Dermatologist', '12341234', '1954-11-21 00:00:00'),
(4, 'Ved', 'ved@gmail.com', '2147483647', 'Delhi', '234567891012', 'Dermatologist', 'ved123456', '1889-03-18 00:00:00'),
(5, 'anil', 'aa@aaaa.com', '9821345670', 'noida', '123456765', 'doc', '123456222', '2018-03-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `aadhar` varchar(16) NOT NULL,
  `dob` datetime NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `mobile`, `address`, `aadhar`, `dob`, `password`) VALUES
(1, 'Bijendra Kumar Singh', 'bijendravns@gmail.com', '7503764192', 'varanasi', '123443211234', '2018-03-09 00:00:00', '123456'),
(2, 'Neeraj', 'nrj@gmail.com', '9650108299', 'Varanasi', '123456789012', '2018-03-15 00:00:00', '123456'),
(3, 'anil', 'aa@gmail.com', '9821718023', '', '123456789011', '0000-00-00 00:00:00', '123456'),
(4, 'Arun Arya', 'aryanpra16dec@gmail.com', '9958156706', 'E-201,Concorde Manhattans Apt., Neeladari Road near wipro gate #16,Electronic city.', '843504771075', '2134-03-22 00:00:00', '123456'),
(5, 'Arun Arya', 'aryanpra16@gmail.com', '9821718025', 'noida', '889922334456', '2017-12-13 00:00:00', '123456'),
(6, 'Arun Arya', 'aryanpradec@gmail.com', '9958156765', 'E-201,Concorde Manhattans Apt., Neeladari Road near wipro gate #16,Electronic city.', '107734562132', '1234-03-21 00:00:00', '123456'),
(7, 'ravi', 'ravi@gmail.com', '2345678910', 'noida', '187623456056', '2100-03-12 00:00:00', '123456'),
(8, 'Shivani', 'shivani@gmail.com', '9358253032', 'Aligarh', '123845671234', '2018-03-23 00:00:00', 'shivani'),
(9, 'Ashish', 'finadviz01@gmail.com', '8510033377', 'South ex', '137338733883', '2018-03-22 00:00:00', 'hanuman79'),
(10, 'rishabh bhalla', 'rishabhbhalla1@gmail.com', '8285111192', 'a-1 acharya niketan mayur vihar phase 1', '984992879235', '2018-03-11 00:00:00', 'rishabh11'),
(11, 'john', 'john12@gmail.com', '8126889932', 'noida', '123456789014', '2014-02-12 00:00:00', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
