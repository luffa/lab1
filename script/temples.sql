-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2022 at 07:11 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nst_temples`
--

-- --------------------------------------------------------

--
-- Table structure for table `temples`
--

CREATE TABLE `temples` (
  `rec_id` int(5) NOT NULL,
  `temple_id` varchar(20) NOT NULL,
  `temple_name` varchar(150) NOT NULL,
  `temple_address` varchar(200) NOT NULL,
  `district` varchar(100) NOT NULL,
  `sect` varchar(50) NOT NULL,
  `temple_type` varchar(50) NOT NULL,
  `building_date` varchar(10) DEFAULT NULL,
  `visungra_date` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temples`
--

INSERT INTO `temples` (`rec_id`, `temple_id`, `temple_name`, `temple_address`, `district`, `sect`, `temple_type`, `building_date`, `visungra_date`) VALUES
(1, '5801501001', 'กระดังงา', 'ม.9 ตำบลขนอม', 'อำเภอขนอม', 'มหานิกาย', 'วัดราษฎร์', '2447', '03/07/2528'),
(2, '05801403001', 'กลาง', 'ม.11 ตำบลฉลอง', 'อำเภอสิชล', 'มหานิกาย', 'วัดราษฎร์', '2400', '2440'),
(3, '05801401007', 'กลางพัฒนาราม', 'เขาฝ้าย ม.7 ตำบลสิชล', 'อำเภอสิชล', 'ธรรมยุต', 'วัดราษฎร์', '14/12/2543', NULL),
(4, '05800908002', 'กะโสมใต้', 'ม.4 ตำบลกะปาง', 'อำเภอทุ่งสง', 'มหานิกาย', 'วัดราษฎร์', '2468', '08/08/2556'),
(5, '05800908001', 'กะโสมเหนือ', 'ม.6 ตำบลกะปาง', 'อำเภอทุ่งสง', 'มหานิกาย', 'วัดราษฎร์', '2483', '2518'),
(6, '05802002002', 'กัตสัทธาราม (กัด)', 'วัดกัด ม.1 ตำบลนาสาร', 'อำเภอพระพรหม', 'มหานิกาย', 'วัดราษฎร์', '2315', '2508'),
(7, '05801202004', 'กัลยานฤมิต', 'ม.5 ตำบลคลองน้อย', 'อำเภอปากพนัง', 'ธรรมยุต', 'วัดราษฎร์', '2483', '2502'),
(8, '05800909003', 'ก้างปลา', 'ม.3 ตำบลที่วัง', 'อำเภอทุ่งสง', 'มหานิกาย', 'วัดราษฎร์', '2400', '10/01/2528'),
(9, '05801212001', 'กาญจนาราม', 'ม.3 ตำบลบางพระ', 'อำเภอปากพนัง', 'มหานิกาย', 'วัดราษฎร์', '2310', '2512'),
(10, '05800202001', 'กำแพงถม', 'กำแพงถม ม.5 ตำบลนาเรียง', 'อำเภอพรหมคีรี', 'มหานิกาย', 'วัดราษฎร์', '07/10/2517', '03/07/2523'),
(11, '05800801001', 'ท่าสูง', 'ม.3 ตำบลท่าศาลา', 'อำเภอท่าศาลา', 'มหานิกาย', 'วัดราษฎร์', '2428', '13/07/2536'),
(12, '05801608004', 'ท่าเสริม', 'ท่าซอม ม.2 ตำบลท่าซอม', 'อำเภอหัวไทร', 'มหานิกาย', 'วัดราษฎร์', '2415', NULL),
(13, '05800907002', 'ทุ่งควาย', 'ม.1 ตำบลเขาโร', 'อำเภอทุ่งสง', 'มหานิกาย', 'วัดราษฎร์', '2472', '2518');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `temples`
--
ALTER TABLE `temples`
  ADD PRIMARY KEY (`rec_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `temples`
--
ALTER TABLE `temples`
  MODIFY `rec_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
