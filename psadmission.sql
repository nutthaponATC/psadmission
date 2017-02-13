-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2017 at 06:30 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

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
-- Table structure for table `group_type`
--

CREATE TABLE `group_type` (
  `id_group_type` int(11) NOT NULL,
  `id_student_group` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `class_exam` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `score` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `group_type`
--

INSERT INTO `group_type` (`id_group_type`, `id_student_group`, `class_exam`, `score`, `status`) VALUES
(5, '11', '', NULL, 1);

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
  `num_old` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_reg` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `history_ps`
--

INSERT INTO `history_ps` (`id_history`, `type`, `stype`, `radio1`, `radio2`, `radio3`, `radio4`, `radio5`, `radio6`, `radio7`, `radio8`, `radio9`, `radio10`, `radio11`, `radio12`, `radio13`, `input1`, `input2`, `input3`, `input4`, `input5`, `input6`, `input7`, `input8`, `input9`, `input10`, `input11`, `input12`, `input13`, `input14`, `input15`, `input16`, `input17`, `input18`, `input19`, `input20`, `input21`, `input22`, `input23`, `input24`, `input25`, `input26`, `input27`, `input28`, `input29`, `input30`, `input31`, `input32`, `input33`, `input34`, `input35`, `input36`, `input37`, `input38`, `input39`, `input40`, `input41`, `input42`, `input43`, `input44`, `input45`, `input46`, `input47`, `input48`, `input49`, `input50`, `input51`, `input52`, `input53`, `input54`, `input55`, `num_old`, `id_reg`, `date`, `status`) VALUES
(1, 5, 5, 1, 1, 5, 2, 1, 6, 1, 3, 1, 2, 0, 3, 0, '40008', '1102003315231', '4', 'รักษิยา', 'เจนอนุวัฒน์', 'Luxsiya', 'Jenanuwat', 'พุทธ', 'ไทย', 'ไทย', '19', '9', '2544', '10190660279', '49/1', '4', 'พุทธมณฑลสาย 1', 'โชคสมบัติ', '1', 'ตลิ่งชัน', 'บางระมาด', '10170', '-', '0878249619', '', '58', '167', '2', 'เซนต์ปีเตอร์ ธนบุรี', 'คลองขวาง', 'ภาษีเจริญ', '1', 'นาย รักพงษ์ เจนอนุวัฒน์', '', '150000', '3101201376665', '0818904687', 'นาง สุนทรียา เจนอนุวัฒน์', '', '180000', '3101900557138', '0837876977', '2', '2', 'นาง สุนทรียา เจนอนุวัฒน์', '180000', 'มารดา', '3101900557138', '0837876977', '3.71', '85', '0', '0', '', '', '0', NULL, '2017-02-13', 1),
(2, 1, 1, 1, 1, 3, 2, 1, 1, 1, 6, 1, 2, 0, 6, 0, '10061', '1100801537816', '1', 'กรวิชญ์', 'ฉันทวิไลยิ่ง', 'KORAWIT', 'CHANTAVILAIYING', 'พุทธ', 'ไทย', 'ไทย', '24', '7', '2548', '10220858659', '18', '-', 'บางแวก', 'บางแวก 33', '1', 'ภาษีเจริญ', 'บางแวก', '10160', '024105949', '0849294728', '', '30', '140', '4', 'ซางตาครู้สศึกษา', 'วัดกัลยาณ์', 'ธนบุรี', '1', 'นายวีระพงศ์    ฉันทวิไลยิ่ง', '', '360,000.00', '3100800630517', '0813293913', 'นางกนกศรี   ฉันทวิไลยิ่ง', '', '750,000.00', '3500900851121', '0849294728', '2', '2', 'นางกนกศรี   ฉันทวิไลยิ่ง', '750,000.00', 'มารดา', '3500900851121', '0849294728', '3.98', '85', '4.00', '85', '', '', '', NULL, '2017-02-13', 1),
(3, 1, 1, 1, 1, 5, 2, 1, 4, 1, 4, 1, 2, 0, 4, 0, '10022', '1100703713202', '2', 'อาทิตยา', 'เลิศสหกุล', 'Athidaya', 'Lertsahakul', 'พุทธ', 'ไทย', 'ไทย', '20', '3', '2548', '10190618400', '11/193', '', 'ราชพฤกษ์', 'ราชพฤกษ์ 8', '1', 'ตลิ่งชัน', 'บางเชือกหนัง', '10170', '020232450', '0909843547', '', '45.7', '159', '4', 'International Pioneers', '20 ราษฏร์ร่วมเจริญ คลองสาน ', 'คลองสาน', '1', 'ืนายสุชัย เลิศสหกุล', '', '444,000', '3101600861648', '0631879455', 'นางนพมาศ เลิศสหกุล', '', '360,000', '3101502096203', '0985429455', '2', '2', 'นางนพมาศ เลิศสหกุล', '360,000', 'มารดา', '3101502096203', '0985429455', '', '', '', '', '', '', '', NULL, '2017-02-13', 1),
(4, 1, 1, 1, 1, 2, 2, 1, 6, 1, 2, 1, 1, 0, 6, 0, '10048', '1100401247497', '2', 'สวรินทร์', 'เลิศนิธิพรกุล', 'SAVARIN', 'LERTNITIPORNKUL', 'พุทธ', 'ไทย', 'ไทย', '13', '11', '2547', '10200545051', '137/18', '', 'สมเด็จพระปิ่นเกล้า', 'สมเด็จพระปิ่นเกล้า 13', '1', 'บางกอกน้อย', 'อรุณอมรินทร์', '10700', '028831127', '0814965438', '', '43', '159', '4', 'เซนต์ฟรังซิสซาเวียร์คอนแวนต์', 'วชิระ', 'ดุสิต', '1', 'นายสมเกียรติ  เลิศนิธิพรกุล', '', '1000000', '3101500244132', '0814965438', 'น.ส. เพชรรัตน์  อัศวนิเวศน์', '', '1000000', '3100900063843', '0819137333', '2', '2', 'นายสมเกียรติ  เลิศนิธิพรกุล', '1000000', 'บิดา', '3101500244132', '0814965438', '3.81', '75', '4', '80', '', '', '', NULL, '2017-02-13', 1),
(5, 4, 1, 1, 1, 2, 1, 1, 2, 2, 2, 3, 1, 0, 2, 0, '1111', '', '1', '111', '11  ', '111', '11', '1', '1', '1', '1', '9', '2545', '111', '1', '1', '111', '1', '15', '111', '1', '11', '1', '11', '', '11', '11', '1', '11', '1', '11', '10', '11', '', '11', '111', '11', '1111', '11', '111', '11', '111', '1', '1', '11', '11', 'บิดา', '', '11', '2.50', '1', '3.50', '1', '', '', '35685', NULL, '2017-02-13', 1),
(6, 1, 1, 1, 1, 3, 2, 1, 1, 1, 3, 1, 1, 0, 1, 0, '10047', '1100201810112', '1', 'ตุลธร', 'พุ่มพวง', 'tulatorn', 'poompuang', 'พุทธ', 'ไทย', 'ไทย', '20', '4', '2548', '12040291920', '195/25', '1', 'บางกรวย-ไทรน้อย', '6', '26', 'บางบัวทอง', 'บางรักพัฒนา', '11110', '029242204', '0816456409', '', '42', '147', '1', 'วรรัตน์ศึกษา', 'ตลิ่งชัน', 'ตลิ่งชัน', '1', 'บรรเจิด พุ่มพวง', '', '250000', '3540400328003', '0816456409', 'เจริญศรี พุ่มพวง', '', '360000', '3720200543421', '0818654716', '2', '2', 'บรรเจิด พุ่มพวง', '250000', 'บิดา', '3540400328003', '0816456409', '3.20', '73', '3.7', '92', '', '', '', NULL, '2017-02-13', 1),
(7, 1, 1, 1, 2, 5, 2, 1, 6, 1, 4, 1, 1, 0, 6, 0, '10086', '1104800012225', '1', 'จิรพัส', 'คงศิลา', '่่่JIRAPAS', 'KONGSILA', 'พุทธ', 'ไทย', 'ไทย', '16', '9', '2547', '10190037296', '281', '', '-', 'บรมราชชนนี60', '1', 'ตลิ่งชัน', 'ฉิมพลี', '10170', '024485874', '0812796508', '', '50', '151', '3', 'เปรมประชาวัฒนา', 'บางม่วง', 'บางใหญ่', '26', 'มงคล คงศิลา', '', '300000', '3101900613976', '0812796508', 'สุพรรณี ชัยวงศ์เวช', '', '300000', '3101600738218', '0844352095', '1', '1', 'มงคล คงศิลา', '300000', 'บิดา', '3101900613976', '0812796508', '3.95', '', '4', '100', '', '', '', NULL, '2017-02-13', 1),
(8, 1, 1, 1, 1, 5, 2, 1, 1, 1, 4, 1, 2, 0, 4, 0, '10029', '1102200214062', '2', 'พริมา', 'แร่ลี', 'Parima', 'Raelee', 'พุทธ', 'ไทย', 'ไทย', '14', '10', '2547', '10230217737', '1024/47', '7', 'เพชรเกษม', 'เพชรเกษม 106', '1', 'หนองแขม', 'หนองค้างพลู', '10160', '024453750', '0897714770', '', '47', '160', '2', 'ยอแซฟอุปถัมภ์สามพราน', '2 ม.6 ต.ท่าข้าม', 'สามพราน', '19', 'นายณฐกร  แร่ลี', '', '2,200,000', '3730400140959', '0898946318', 'นส.ทิพย์วรรณ  แสงพุทธเงินธานะ', '', '1,200,000.-', '5102400007152', '0897714770', '1', '', 'นส.ทิพย์วรรณ  แสงพุทธเงินธานะ', '1,200,000.-', 'มารดา', '5102400007152', '0897714770', '4.00', '100', '4.00', '100', '', '', '', NULL, '2017-02-13', 1),
(9, 1, 1, 1, 1, 4, 2, 1, 4, 1, 4, 1, 2, 0, 4, 0, '10160', '1104800012136', '1', 'พุฒินาท', 'เรืองรัศมีสรรค์', 'Putinad', 'Ruengrasameeson', 'พุทธ', 'ไทย', 'ไทย', '8', '9', '2547', '10220226679', '14', '-', 'เพชรเกษม', 'เพชรเกษม 72', '1', 'บางแค', 'บางแคเหนือ', '10160', '-', '0846601543', '', '34', '155', '2', 'กรพิทักษ์ศัึกษา', 'หนองแขม', 'หนองแขม', '1', 'จาเร  เอมอิ่ม', '', '360,000.-', '3100502197696', '0941676949', 'รุ่งวิภา  เรืองรัศมีสรรค์', '', '200,000.-', '3102201221743', '0846601543', '1', '1', 'รุ่งวิภา  เรืองรัศมีสรรค์', '200,000.-', 'มารดา', '3102201221743', '0846601543', '4', '87', '90', '90', '', '', '', NULL, '2017-02-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `setting_open`
--

CREATE TABLE `setting_open` (
  `id_setting` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `setting_open`
--

INSERT INTO `setting_open` (`id_setting`, `status`) VALUES
(1, 1),
(2, 0),
(3, 0),
(4, 1),
(5, 1),
(6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_ps`
--

CREATE TABLE `user_ps` (
  `id_user` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_ps`
--

INSERT INTO `user_ps` (`id_user`, `username`, `password`, `status`) VALUES
(1, '1102003315231', '1992544', 1),
(2, '1100801537816', '2472548', 1),
(3, '1100703713202', '2032548', 1),
(4, '1100401247497', '13112547', 1),
(5, '', '192545', 1),
(6, '1100201810112', '2042548', 1),
(7, '1104800012225', '1692547', 1),
(8, '1102200214062', '14102547', 1),
(9, '1104800012136', '892547', 1),
(100001, 'admin', 'Pscomputer1234+', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `group_type`
--
ALTER TABLE `group_type`
  ADD PRIMARY KEY (`id_group_type`);

--
-- Indexes for table `history_ps`
--
ALTER TABLE `history_ps`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `setting_open`
--
ALTER TABLE `setting_open`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `user_ps`
--
ALTER TABLE `user_ps`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history_ps`
--
ALTER TABLE `history_ps`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
