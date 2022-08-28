-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql303.epizy.com
-- Generation Time: Jun 10, 2020 at 01:30 PM
-- Server version: 5.6.47-87.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_25927711_college3`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'pushpendra', 'pushpendra'),
(2, 'prashant', 'prashant'),
(3, 'prerna', 'prerna'),
(4, 'ramkumar', 'ramkumar');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(11) NOT NULL,
  `order_id` varchar(400) NOT NULL,
  `cust_id` varchar(400) NOT NULL,
  `industry_type_id` varchar(400) NOT NULL,
  `room` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `adhar` varchar(100) NOT NULL,
  `noperson` varchar(50) NOT NULL,
  `checkin` varchar(50) NOT NULL,
  `checkout` varchar(50) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `uid` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `order_id`, `cust_id`, `industry_type_id`, `room`, `phone`, `email`, `adhar`, `noperson`, `checkin`, `checkout`, `amount`, `uid`, `status`) VALUES
(1, 'ORDS97844914', 'pushpendra', 'Retail', 'Deluxe Room', '7906444259', 'psengar@gmail.com', '8934658934658934', '2', '09-06-2020', '10-06-2020', '16', 2, 'successful'),
(2, 'ORDS35847475', 'pushpendra', 'Retail', 'Deluxe Room', '7906444259', 'psengar@gmail.com', '8934658934658934', '2', '09-06-2020', '10-06-2020', '16', 2, ''),
(3, 'ORDS57682093', 'pushpendra', 'Retail', 'Deluxe Room', '09457310925', 'lkmedc@gmail.com', '8934658934658934', '2', '18-06-2020', '20-06-2020', '16', 2, 'successful'),
(4, 'ORDS94318675', 'pushpendra', 'Retail', 'Deluxe Room', '7906444259', 'psengar143@gmail.com', '9837458937458973', '4', '04-08-2020', '12-08-2020', '16', 2, 'successful'),
(5, 'ORDS42384173', 'prerna', 'Retail', 'Deluxe Room', '7906444259', 'psengar143@gmail.com', '8934658934658934', '2', '09-06-2020', '11-06-2020', '16', 3, 'successful'),
(6, 'ORDS51493544', 'prerna', 'Retail', 'Deluxe Room', '', '', '', '', '', '', '16', 3, ''),
(7, 'ORDS65187499', 'prerna', 'Retail', 'Deluxe Room', '7847856378', 'kjsdv@gmail.com', '8934658934658934', '2', '11-06-2020', '18-06-2020', '16', 3, ''),
(8, 'ORDS90662308', 'pushpendra', 'Retail', 'Deluxe Room', '9457310925', 'psengar148@gmail.com', '9837458937458973', '3', '10-06-2020', '12-06-2020', '16', 2, 'successful'),
(9, 'ORDS90662308', 'pushpendra', 'Retail', 'Deluxe Room', '9457310925', 'psengar143@gmail.com', '9837458937458973', '3', '10-06-2020', '12-06-2020', '16', 2, ''),
(10, 'ORDS75921935', 'prashant', 'Retail', 'Deluxe Room', '9760909815', 'prashant.upadhyay_bca17@gla.ac.in', '1515420563183081', '2', '10-06-2020', '13-06-2020', '16', 1, ''),
(11, 'ORDS33494312', 'prashant', 'Retail', 'Deluxe Room', '9760909815', 'prashant.upadhyay_bca17@gla.ac.in', '1515420563183081', '1', '10-06-2020', '11-06-2020', '16', 1, ''),
(12, 'ORDS89833437', 'pushpendra', 'Retail', 'Deluxe Room', '8374658736', 'psengar148@gmail.com', '8495893465873468', '1', '09-06-2020', '10-06-2020', '16', 2, 'successful'),
(13, 'ORDS37793356', 'pushpendra', 'Retail', 'Deluxe Room', '9457310925', 'psengar148@gmail.com', '8934658934658934', '2', '18-06-2020', '19-06-2020', '16', 2, 'successful'),
(14, 'ORDS94026815', 'pushpendra', 'Retail', 'Deluxe Room', 'a897438584', 'psengar148@gmail.com', '8346587674385678', '2', '10-06-2020', '11-06-2020', '16', 2, 'successful');

-- --------------------------------------------------------

--
-- Table structure for table `breakfast`
--

CREATE TABLE `breakfast` (
  `brakst_id` int(11) NOT NULL,
  `brakst_name` varchar(100) NOT NULL,
  `brakst_size` varchar(100) NOT NULL,
  `brakst_price` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breakfast`
--

INSERT INTO `breakfast` (`brakst_id`, `brakst_name`, `brakst_size`, `brakst_price`) VALUES
(10, 'Milk', '1 glass', '35'),
(5, 'Grid sandwich', '2', '60'),
(4, 'mango shake', '1 glass', '50'),
(9, 'paw bhaji', '1 plate', '75'),
(7, 'Kelloggs', '1 bowl', '40'),
(8, 'chole kulche', '1 plate', '70');

-- --------------------------------------------------------

--
-- Table structure for table `contectus`
--

CREATE TABLE `contectus` (
  `con_id` int(11) NOT NULL,
  `con_user_name` varchar(100) NOT NULL,
  `con_user_email` varchar(100) NOT NULL,
  `con_user_phone` varchar(13) NOT NULL,
  `con_user_subject` text NOT NULL,
  `con_user_message` text NOT NULL,
  `con_user_msg_date` varchar(50) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contectus`
--

INSERT INTO `contectus` (`con_id`, `con_user_name`, `con_user_email`, `con_user_phone`, `con_user_subject`, `con_user_message`, `con_user_msg_date`, `u_id`) VALUES
(1, 'pushpendra singh', 'psengar1@gmail.com', '9457310925', 'svsdv', 'rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', '03-06-2020', 3),
(2, 'prerna', 'prerna@gmail.com', '8348576384', 'sdhgiusehrgh', 'ierosrehgiusgkjnsirthgiserjgkshuihgurstgsdhgisrhtgiostr', '03-06-2020', 3),
(3, 'pushpendra singh', 'pushpendra.sin17@gla.ac.in', '9457310925', 'room booking?', 'sjuiehiu her giud hiu hiushe righxc vbzdb viush eru tiuerh gjvbsdgv iusa hduihgseurig iudsuhg iuvbxdvbiuxbz iuelurgiusgrgivbzdlxcvb ilusrdglibdziulvgsiurg iuldzhb glibsdrg.', '09-06-2020', 2);

-- --------------------------------------------------------

--
-- Table structure for table `dinner`
--

CREATE TABLE `dinner` (
  `dinner_id` int(11) NOT NULL,
  `dinner_name` varchar(100) NOT NULL,
  `dinner_size` varchar(100) NOT NULL,
  `dinner_price` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dinner`
--

INSERT INTO `dinner` (`dinner_id`, `dinner_name`, `dinner_size`, `dinner_price`) VALUES
(7, 'chapati', '1', '10'),
(2, 'saahi paneer', '1 plate', '120'),
(3, 'panner do pyaza', '1 plate', '140'),
(4, 'daal makhni', '1 plate', '100'),
(6, 'butter chapati', '1', '15'),
(8, 'channa masala', '1 plate', '100');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `emp_username` varchar(100) NOT NULL,
  `emp_phone` varchar(100) NOT NULL,
  `emp_email` varchar(100) NOT NULL,
  `emp_address` text NOT NULL,
  `emp_city` varchar(100) NOT NULL,
  `emp_state` varchar(100) NOT NULL,
  `emp_dept` varchar(100) NOT NULL,
  `emp_doj` varchar(30) NOT NULL,
  `emp_dob` varchar(30) NOT NULL,
  `emp_salary` varchar(100) NOT NULL,
  `emp_password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_username`, `emp_phone`, `emp_email`, `emp_address`, `emp_city`, `emp_state`, `emp_dept`, `emp_doj`, `emp_dob`, `emp_salary`, `emp_password`) VALUES
(1, 'pushpendra singh', 'ramacharan', '9457310925', 'pushpendra.singh@gla.ac.in', '180/68 , near new ideal public school\r\ngali ganga singh , dholi pyau mathura', 'mathura', 'mathura', 'Driver', '02-06-2020', '04-06-2020', '', 'zzzz'),
(2, 'prashant dev upadhyay', 'prashant', '9852681281', 'prashant.upadhyay@gla.ac.in', 'GLA University Mathura', 'mathura', 'Uttar pradesh', 'management', '04-06-2020', '05-12-2019', '', '987654'),
(3, 'rakesh sharma', 'rakeshSharma', '8764358764', 'rakeshSharma@gmail.com', '23 ,  Modi Corp Tower Delhi', 'Delhi', 'Delhi', 'house keeping', '20-08-2019', '09-05-2016', '', 'rakesh'),
(5, 'MeghnaÂ Â Patel', 'Meghna', '7834658734', 'meghan@gmail.com', 'Rruga Skenderbej, Nr. 14', 'Tirana', 'Tirana', 'receptionist', '09-05-2016', '13-12-2009', '', 'Meghna'),
(6, 'pushpendra singh', 'pushpendra', '9557194160', 'psengar1@gmail.com', '160/80, near new ideal public school,\r\ngali ganga singh ,mathura , up', 'Mathura', 'Uttar Pradesh', 'Management', '10-06-2020', '01-06-2020', '', 'pushpendra123');

-- --------------------------------------------------------

--
-- Table structure for table `employeeleave`
--

CREATE TABLE `employeeleave` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `emp_phone` varchar(13) NOT NULL,
  `emp_email` varchar(100) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  `emp_reason` varchar(300) NOT NULL,
  `emp_explain` text NOT NULL,
  `approved` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeeleave`
--

INSERT INTO `employeeleave` (`id`, `emp_id`, `emp_name`, `emp_phone`, `emp_email`, `start_date`, `end_date`, `emp_reason`, `emp_explain`, `approved`) VALUES
(1, 1, 'pushpendra', '8756546758', 'psengar@gmail.com', '03-12-2020', '08-12-2020', 'feaver', 'ioserhguu serhugi seoirgj oisdbgsiurhguiserhg aidsuuhguishre ghseuidrhg iuhduigh siuerhgiusdgbiushdrgiuhserui gsrg ', 'approved'),
(2, 2, 'prashant sharna', '8368476836', 'prashant.upadhyay_bca17@gla.ac.in', '09-06-2020', '12-06-2020', 'feaver in the ixhdivineriuahnweiu', 'iuerhjlksrdhgui heruihg sed hgiuhsdjsrg uysrghsudihguishdugihsrgcjvksueg kuyhaduvzdg uirhseugdszvbsdgv', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `fullmeal`
--

CREATE TABLE `fullmeal` (
  `fullmeal_id` int(11) NOT NULL,
  `fullmeal_name` varchar(100) NOT NULL,
  `fullmeal_size` varchar(100) NOT NULL,
  `fullmeal_price` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fullmeal`
--

INSERT INTO `fullmeal` (`fullmeal_id`, `fullmeal_name`, `fullmeal_size`, `fullmeal_price`) VALUES
(3, 'iusthg sg', 'small', '50'),
(2, 'thali(2 daal, 2 sabji, rice, salad, 4 roti, desert)', '1 ', '400'),
(4, 'kjdhg sdgh ', 'large', '200'),
(5, 'skjdhg iuusheigr a', 'large', '260'),
(6, 'kjsrhg isgi ser', 'large', '300');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `u_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `adhar` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(50) NOT NULL,
  `u_img` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`u_id`, `fullname`, `username`, `phone`, `adhar`, `email`, `password`, `role`, `u_img`) VALUES
(1, 'prashant singh', 'prashant', '8746583945', '9876543212345678', 'prashant123@gmail.com', 'prashant', 'user', 'image1.jpg'),
(2, 'pushpendra singh', 'pushpendra', '9457310925', '8766566767877672', 'pushpendra.singh_17@gla.ac.in', 'aaaa', '', ''),
(3, 'prerna', 'prerna', '8934658934', '8346584767834525', 'prerna@gmail.com', 'prerna', '', 'prernaProfile.jpg'),
(4, 'PDU', 'PD1010', '9760909815', '4114481575472244', 'prashantdev1703@gmail.com', '1234', '', 'PDU.jpeg'),
(5, 'pratishtha', 'pratishtha', '8121788045', '2266940029415525', 'pratishtha@gmail.com', 'pratishtha', '', ''),
(6, 'ashutosh', 'ashutosh', '9856663257', '2532389797683493', 'ashutosh@gmail.com', 'ashutosh', '', ''),
(7, 'sahil', 'sahil', '9764582655', '7979849859437251', 'sahil@gmail.com', 'sahil', '', ''),
(8, 'shubham', 'shubham', '9655874845', '9429758425214511', 'shubham@gmail.com', 'shubham', '', ''),
(9, 'vishal', 'vishal', '9776827945', '4468848282293755', 'vishal@gmail.com', 'vishal', '', ''),
(10, 'himanshu', 'himanshu', '9979458548', '4874664876487468', 'himanshu@gmail.com', 'himanshu', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `lunch`
--

CREATE TABLE `lunch` (
  `lunch_id` int(11) NOT NULL,
  `lunch_name` varchar(100) NOT NULL,
  `lunch_size` varchar(100) NOT NULL,
  `lunch_price` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lunch`
--

INSERT INTO `lunch` (`lunch_id`, `lunch_name`, `lunch_size`, `lunch_price`) VALUES
(2, 'chole chawal', '1 plate', '80'),
(4, 'thali (sabji, daal, 4 chapati)', 'medium', '120'),
(6, 'sjrihgiusre', 'large', '90'),
(7, 'iusgisiodbg', 'large', '80'),
(8, 'biriyani', 'medium', '130');

-- --------------------------------------------------------

--
-- Table structure for table `replymessage`
--

CREATE TABLE `replymessage` (
  `reply_id` int(11) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `reply` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replymessage`
--

INSERT INTO `replymessage` (`reply_id`, `subject`, `reply`, `user_id`) VALUES
(1, 'sdhgiusehrgh', 'iusdrhgis diog jsiorj hgsrujligkjnsldih gslreuhsd giohs8r hgoishrtgiuhsdglazgesuhioegnkshbgiluhdzjngkjszhbdruighisdrhgkjhxzdlighoisrhlgidiogn liusdhgoisrjth giosrodgsrdg', 3),
(2, 'room booking?', 'jdhg ud hiuvg hseiurjh gkljsdbvilsdlig', 2);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_num` varchar(100) NOT NULL,
  `room_type` varchar(200) NOT NULL,
  `room_bed` varchar(200) NOT NULL,
  `room_size` varchar(200) NOT NULL,
  `room_extra` varchar(200) NOT NULL,
  `room_about` text NOT NULL,
  `room_price` varchar(200) NOT NULL,
  `room_img` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_num`, `room_type`, `room_bed`, `room_size`, `room_extra`, `room_about`, `room_price`, `room_img`) VALUES
(3, '2', 'Deluxe Room', 'Double', '16 X 20 (MEDIUM)', 'T.V + Wifi + Swimming Pool', 'With comfortable, elegant furnishings, an Italian marble bathroom, and modern artworks.\r\n', '16', 'double.jpg'),
(2, '1', 'Single Room', 'Single', '12 X 18 (SMALL)', 'T.V + Wifi', 'All the rooms are fully cleaned and all the facilities are provided from TV to Wi-Fi to Room service.', '1000', 'single-bed.jpg'),
(11, '', 'Single Room', 'Single', '22 X 28 (LARGE)', 'T.V', 'iosdhgionrevhoiehnruv uiaehnvinah euigiuanreiu euitnueyrtiune ueiuariv aneiun uaieiunauv hiuoenvtuweniv e iu', '1200', 'room2.jpg'),
(13, '', 'Superior Room', 'Triple', '16 X 20 (MEDIUM)', 'T.V + Wifi', 'Warm colors, luxurious spaces, and varied views welcome you into your 38 sqm abode, complete with a king/twin bed and 3-fixture washroom. Additionally, Superior rooms come with the comfort and convenience of a Tea/Coffee maker, Flat-screen HDTV, minibar, and complimentary Wi-Fi for 4 devices.', '800', 'maxresdefault.jpg'),
(14, '', 'Guest House', 'King', '22 X 28 (LARGE)', 'T.V + Wifi + Swimming Pool', 'Rooms and suites, which carry the inspiration further, are dressed in silk wallpaper, while carpets that bear local motifs underline warmth and character. Ranging from 28 sqm to 58 sqm, they house creature comforts like WiFi, a smart HD television,\r\n', '1400', '15219736.jpg'),
(16, '', 'Single Room', 'King', '12 X 18 (SMALL)', 'T.V + Wifi', 'uirsg iueiur hguisdhiu ghsiur ghidkh vbsiluryiguhs8re gtsiludhgkjbckvbg ilserhgkjzsdbliugvsrhdgiludgb rhs', '400', 'sonoma-chalet.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `breakfast`
--
ALTER TABLE `breakfast`
  ADD PRIMARY KEY (`brakst_id`);

--
-- Indexes for table `contectus`
--
ALTER TABLE `contectus`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `dinner`
--
ALTER TABLE `dinner`
  ADD PRIMARY KEY (`dinner_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `employeeleave`
--
ALTER TABLE `employeeleave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fullmeal`
--
ALTER TABLE `fullmeal`
  ADD PRIMARY KEY (`fullmeal_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `lunch`
--
ALTER TABLE `lunch`
  ADD PRIMARY KEY (`lunch_id`);

--
-- Indexes for table `replymessage`
--
ALTER TABLE `replymessage`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `breakfast`
--
ALTER TABLE `breakfast`
  MODIFY `brakst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contectus`
--
ALTER TABLE `contectus`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dinner`
--
ALTER TABLE `dinner`
  MODIFY `dinner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employeeleave`
--
ALTER TABLE `employeeleave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fullmeal`
--
ALTER TABLE `fullmeal`
  MODIFY `fullmeal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lunch`
--
ALTER TABLE `lunch`
  MODIFY `lunch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `replymessage`
--
ALTER TABLE `replymessage`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
