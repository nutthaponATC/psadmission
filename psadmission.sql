-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2017 at 07:20 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psadmission`
--

-- --------------------------------------------------------

--
-- Table structure for table `history_ps`
--

CREATE TABLE `history_ps` (
  `id_history` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `stype` int(11) NOT NULL,
  `radio1` int(11) DEFAULT NULL,
  `radio2` int(11) DEFAULT NULL,
  `radio3` int(11) DEFAULT NULL,
  `radio4` int(11) DEFAULT NULL,
  `radio5` int(11) DEFAULT NULL,
  `radio6` int(11) DEFAULT NULL,
  `radio7` int(11) DEFAULT NULL,
  `radio8` int(11) DEFAULT NULL,
  `radio9` int(11) DEFAULT NULL,
  `radio10` int(11) DEFAULT NULL,
  `radio11` int(11) DEFAULT NULL,
  `radio12` int(11) DEFAULT NULL,
  `radio13` int(11) DEFAULT NULL,
  `input1` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input2` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input3` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input4` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input5` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input6` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input7` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input8` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input9` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input10` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input11` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input12` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input13` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input14` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input15` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input16` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input17` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input18` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input19` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input20` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input21` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input22` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input23` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input24` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input25` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input26` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input27` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input28` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input29` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input30` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input31` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input32` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input33` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input34` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input35` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input36` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input37` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input38` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input39` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input40` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input41` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input42` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input43` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input44` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input45` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input46` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input47` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input48` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input49` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input50` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input51` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input52` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input53` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input54` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input55` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history_ps`
--
ALTER TABLE `history_ps`
  ADD PRIMARY KEY (`id_history`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history_ps`
--
ALTER TABLE `history_ps`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
