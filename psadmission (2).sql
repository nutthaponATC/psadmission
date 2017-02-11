SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `history_ps` (
  `id_history` int(11) NOT NULL,
  `id_group` int(11) DEFAULT NULL,
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
  `date` date NOT NULL,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `user_ps` (
  `id_user` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `user_ps` (`id_user`, `username`, `password`, `status`) VALUES
(100001, 'adminmaster', 'adminpsadmission01', 9);

ALTER TABLE `history_ps`
  ADD PRIMARY KEY (`id_history`);

ALTER TABLE `user_ps`
  ADD PRIMARY KEY (`id_user`);

ALTER TABLE `history_ps`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT;