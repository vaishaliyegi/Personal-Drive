-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2017 at 12:52 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


-- Database: `book_store`

-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(4) NOT NULL,
  `u_fnm` varchar(35) NOT NULL,
  `u_unm` varchar(25) NOT NULL,
  `u_pwd` varchar(20) NOT NULL,
  `u_email` varchar(35) NOT NULL,
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_fnm`, `u_unm`, `u_pwd`, `u_email`) VALUES
(1, 'admin', 'admin', 'admin123', 'admin@gmail.com'),
(7, 'Pravesh', 'Pravesh', 'Pravesh', 'ppravesh.jain2015@vit.ac.in'),
(8, 'Chirag', 'Chirag', 'Chirag', 'chirag.arora2015@vit.ac.in'),
(26,'Vaishali','Vaishali','Vaishali','vaishaliyegi@gmail.com'),
(9, 'C', 'C', 'C', 'C'),
(10, 'Namo', 'Namo', 'Namo', 'Namo'),
(11, 'Chirag', 'Chirag123', 'Chirag123', 'chirag.arora.6939@gmail.com'),
(12, 'A', 'A', 'A', 'A'),
(13, 'b', 'b', 'b', 'b'),
(14, 'Chirag ', 'Arora', 'hbacb', 'kjsbvkb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
