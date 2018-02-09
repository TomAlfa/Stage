-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 09, 2018 at 03:32 PM
-- Server version: 5.6.38
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Helpdesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_cform`
--

CREATE TABLE `tb_cform` (
  `ID` int(11) NOT NULL,
  `u_name` text NOT NULL,
  `u_company` text NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_telephone` varchar(15) NOT NULL,
  `u_problem` varchar(200) NOT NULL,
  `u_sollution` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_cform`
--

INSERT INTO `tb_cform` (`ID`, `u_name`, `u_company`, `u_email`, `u_telephone`, `u_problem`, `u_sollution`) VALUES
(1, 'Tom', 'Key2publish', 'tomroelfsema22@gmail.com', '0643078630', 'Test probleem #1 na A_I reset', 'test'),
(4, 'Tom', 'Key2Publish', 'tomroelfsema22@gmail.com', '0643078630', 'K2P API werkt niet meer', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cform`
--
ALTER TABLE `tb_cform`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_cform`
--
ALTER TABLE `tb_cform`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
