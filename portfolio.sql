SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `address` (
  `id` varchar(20) NOT NULL,
  `streetName` varchar(40) NOT NULL,
  `state` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL,
  `zipcode` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;


INSERT INTO `address` (`id`, `streetName`, `state`, `city`, `zipcode`) VALUES
('1529336794', '2069  Quarry Drive', 'NC', 'Greensboro', '27409'),
('1618560538', 'Demo Street', 'asd', 'Dity', '454545'),
('1618595358', '526  Broadcast Drive', 'WV', 'CHARMCO', '227550'),
('1618597791', '387 timber Oak Drive', 'Arizona', 'Bellemont', '224580');



CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `pass_key` varchar(20) NOT NULL,
  `securekey` varchar(20) NOT NULL,
  `Full_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;



INSERT INTO `admin` (`username`, `pass_key`, `securekey`, `Full_name`) VALUES
('admin', 'password', 'admin1', 'Gymadmin');


CREATE TABLE `enrolls_to` (
  `et_id` int(5) NOT NULL,
  `pid` varchar(8) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `paid_date` varchar(15) DEFAULT NULL,
  `expire` varchar(15) DEFAULT NULL,
  `renewal` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;


INSERT INTO `enrolls_to` (`et_id`, `pid`, `uid`, `paid_date`, `expire`, `renewal`) VALUES
(1, 'POQKJC', '1529336794', '2018-06-18', '2018-07-18', 'no'),
(2, 'POQKJC', '1618560538', '2021-04-16', '2021-05-16', 'yes'),
(3, 'POQKJC', '1529336794', '2021-04-16', '2021-05-16', 'yes'),
(4, 'QVTDSI', '1618595358', '2021-04-16', '2021-07-16', 'yes'),
(5, 'POQKJC', '1618597791', '2021-04-17', '2021-05-17', 'no'),
(6, 'QVTDSI', '1618597791', '2021-04-17', '2021-07-17', 'yes');


CREATE TABLE `health_status` (
  `hid` int(5) NOT NULL,
  `calorie` varchar(8) DEFAULT NULL,
  `height` varchar(8) DEFAULT NULL,
  `weight` varchar(8) DEFAULT NULL,
  `fat` varchar(8) DEFAULT NULL,
  `remarks` varchar(200) DEFAULT NULL,
  `uid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;


INSERT INTO `health_status` (`hid`, `calorie`, `height`, `weight`, `fat`, `remarks`, `uid`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, '1529336794'),
(2, NULL, NULL, NULL, NULL, NULL, '1618560538'),
(3, NULL, NULL, NULL, NULL, NULL, '1618595358'),
(4, NULL, NULL, NULL, NULL, NULL, '1618597791');


CREATE TABLE `plan` (
  `pid` varchar(8) NOT NULL,
  `planName` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `validity` varchar(20) NOT NULL,
  `amount` int(10) NOT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;


INSERT INTO `plan` (`pid`, `planName`, `description`, `validity`, `amount`, `active`) VALUES
('KVTEFO', 'Six Months', 'Activates for 6 months', '6', 2950, 'yes'),
('POQKJC', 'Monthly Plan', 'A monthly subscription that unlocks the entire Gym Plan app and coach support on chat.', '1', 600, 'yes'),
('QVTDSI', 'Three Months', '3 month subscription that unlocks the entire Gym Plan app.', '3', 1600, 'yes');



CREATE TABLE `timetable` (
  `tid` int(12) NOT NULL,
  `tname` varchar(45) DEFAULT NULL,
  `day1` varchar(200) DEFAULT NULL,
  `day2` varchar(200) DEFAULT NULL,
  `day3` varchar(200) DEFAULT NULL,
  `day4` varchar(200) DEFAULT NULL,
  `day5` varchar(200) DEFAULT NULL,
  `day6` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;


INSERT INTO `timetable` (`tid`, `tname`, `day1`, `day2`, `day3`, `day4`, `day5`, `day6`) VALUES
(1, 'Beginnerâ€™s Gym Workout', 'Chest Day', 'Back Day', 'Shoulder Day', 'Arms Day', 'ABS', 'Leg Day');



CREATE TABLE `users` (
  `userid` varchar(20) NOT NULL,
  `username` varchar(40) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `joining_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;



INSERT INTO `users` (`userid`, `username`, `gender`, `mobile`, `email`, `dob`, `joining_date`) VALUES
('1529336794', 'Christiana Mayberry', 'Male', '3362013747', 'christiani@gmail.com', '1968-04-13', '2018-06-18'),
('1618560538', 'Bruno Den', 'Male', '7545554521', 'bruno@gmail.com', '1996-10-24', '2021-03-04'),
('1618595358', 'Joseph', 'Male', '4520002451', 'joseph@gmail.com', '1995-04-01', '2021-04-12'),
('1618597791', 'Billy Osborn', 'Male', '8542221250', 'osbornb@gmail.com', '1992-07-16', '2021-03-18');


ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`) USING BTREE;


ALTER TABLE `enrolls_to`
  ADD PRIMARY KEY (`et_id`) USING BTREE,
  ADD KEY `user_ID` (`uid`) USING BTREE,
  ADD KEY `plan_ID_idx` (`pid`) USING BTREE;


ALTER TABLE `health_status`
  ADD PRIMARY KEY (`hid`) USING BTREE,
  ADD KEY `userID_idx` (`uid`) USING BTREE;

ALTER TABLE `plan`
  ADD PRIMARY KEY (`pid`) USING BTREE,
  ADD KEY `pid` (`pid`) USING BTREE;


ALTER TABLE `timetable`
  ADD PRIMARY KEY (`tid`) USING BTREE;


ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`) USING BTREE,
  ADD KEY `userid` (`userid`) USING BTREE;


ALTER TABLE `enrolls_to`
  MODIFY `et_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `health_status`
--
ALTER TABLE `health_status`
  MODIFY `hid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `tid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

