-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2017 at 09:16 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `natawut`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `agent_id` char(4) NOT NULL,
  `bus_name` varchar(20) NOT NULL,
  `contract_fname` varchar(20) NOT NULL,
  `contract_lname` varchar(50) NOT NULL,
  `bus_add` varchar(50) NOT NULL,
  `tel` char(10) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`agent_id`, `bus_name`, `contract_fname`, `contract_lname`, `bus_add`, `tel`, `mail`) VALUES
('A001', 'แดง แหนมเนือง', 'สมศรี', 'มีสุข', '526-527 ถนนริมโขง อำเภอเมือง จังหวัดหนองคาย 43000', '042461911', 'dangnamnuang_nongkhai@yahoo.com'),
('A002', 'ตลาด', '', '', '', '', ''),
('A003', 'Makro', 'Makro', '', 'เลขที่ 176 หมู่ที่ 5 ตำบลบ้านใหญ่ อำเภอเมืองนครนาย', '037631280', '-');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` char(3) NOT NULL,
  `branch_add` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_add`) VALUES
('1', 'Nearby Happy Bew'),
('2', 'ริมน้ำปราจีนบุรี');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cus_id` char(5) NOT NULL,
  `cus_fname` varchar(20) NOT NULL,
  `cus_lname` varchar(20) NOT NULL,
  `cus_add` varchar(50) NOT NULL,
  `cus_tel` char(10) NOT NULL,
  `cus_email` varchar(40) NOT NULL,
  `cus_pass` varchar(16) NOT NULL,
  `authen` int(2) NOT NULL,
  `status` int(11) NOT NULL,
  `note` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cus_id`, `cus_fname`, `cus_lname`, `cus_add`, `cus_tel`, `cus_email`, `cus_pass`, `authen`, `status`, `note`) VALUES
('C0001', 'Napon', 'Boonlao', 'Prachin', '0882240900', 'abcd', '123456', 0, 1, 'ปกติ');

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `deord_id` varchar(6) NOT NULL,
  `ordraw_id` char(6) NOT NULL,
  `raw_id` char(4) NOT NULL,
  `raw_price` int(5) NOT NULL,
  `amount` int(5) NOT NULL,
  `unit_id` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_order`
--

INSERT INTO `detail_order` (`deord_id`, `ordraw_id`, `raw_id`, `raw_price`, `amount`, `unit_id`) VALUES
('DRD001', 'ORD001', 'R004', 20, 10, 'U02'),
('DRD002', 'ORD001', 'R005', 10, 10, 'U02'),
('DRD003', 'ORD001', 'R002', 5, 2, 'U01'),
('DRD004', 'ORD001', 'R003', 5, 3, 'U02'),
('DRD005', 'ORD002', 'R001', 25, 10, 'U03');

-- --------------------------------------------------------

--
-- Table structure for table `detail_ream`
--

CREATE TABLE `detail_ream` (
  `de_ream_id` varchar(7) NOT NULL,
  `ream_id` varchar(6) NOT NULL,
  `raw_id` char(4) NOT NULL,
  `amount` int(4) NOT NULL,
  `unit_id` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_ream`
--

INSERT INTO `detail_ream` (`de_ream_id`, `ream_id`, `raw_id`, `amount`, `unit_id`) VALUES
('DREA001', 'REA001', 'R005', 5, 'U02');

-- --------------------------------------------------------

--
-- Table structure for table `de_sell`
--

CREATE TABLE `de_sell` (
  `de_sell_id` varchar(6) NOT NULL,
  `sell_id` char(5) NOT NULL,
  `menu_id` varchar(4) NOT NULL,
  `price` int(4) NOT NULL,
  `amount` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `de_sell`
--

INSERT INTO `de_sell` (`de_sell_id`, `sell_id`, `menu_id`, `price`, `amount`) VALUES
('DS0001', 'SE001', 'M009', 90, 3);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` char(4) NOT NULL,
  `emp_fname` varchar(40) NOT NULL,
  `emp_lname` varchar(40) NOT NULL,
  `emp_no` char(13) NOT NULL,
  `emp_date` date NOT NULL,
  `emp_sex` varchar(7) NOT NULL,
  `emp_add` varchar(50) NOT NULL,
  `emp_tel` varchar(50) NOT NULL,
  `emp_datework` date NOT NULL,
  `emp_branch` varchar(4) NOT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `authen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_fname`, `emp_lname`, `emp_no`, `emp_date`, `emp_sex`, `emp_add`, `emp_tel`, `emp_datework`, `emp_branch`, `user`, `password`, `authen`) VALUES
('E001', 'ณพล', 'บุญเล่า', '1250800060144', '1994-10-24', 'ชาย', 'ปราจีนบุรี', '0882240900', '1994-10-24', '2', 'Napon', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `input_table`
--

CREATE TABLE `input_table` (
  `input_id` varchar(6) NOT NULL,
  `ordraw_id` char(6) NOT NULL,
  `emp_name` varchar(20) NOT NULL,
  `input_date` date NOT NULL,
  `branch_id` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `input_table`
--

INSERT INTO `input_table` (`input_id`, `ordraw_id`, `emp_name`, `input_date`, `branch_id`) VALUES
('IN0001', 'ORD001', 'Test', '2017-06-13', '2');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` varchar(4) NOT NULL,
  `Type_id` char(3) NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `menu_size` varchar(6) NOT NULL,
  `menu_price` int(4) NOT NULL,
  `foodPic` varchar(100) NOT NULL,
  `branch` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `Type_id`, `menu_name`, `menu_size`, `menu_price`, `foodPic`, `branch`) VALUES
('M001', 'T01', 'ก๊วยเตี่ยวหมูตุ๋น', 'S01', 25, '', '1'),
('M002', 'T01', 'ก๊วยเตี่ยเนื้อตุ๋น', 'S01', 30, '', '2'),
('M003', 'T02', 'ต้มยำไก่', 'S02', 40, '', '1'),
('M004', 'T02', 'ต้มยำทะเล', 'S01', 30, '', '1'),
('M005', 'T03', 'ข้าวไข่เจียว', 'S03', 40, '', '1'),
('M006', 'T03', 'ข้าวหมูกระเทียม', 'S01', 30, '', '1'),
('M007', 'T03', 'ผัดผัก', 'S02', 30, '', '1'),
('M008', 'T03', 'ผัดกระเพรา', 'S02', 30, '', '1'),
('M009', 'T05', 'แกงป่า', 'S01', 30, '', '1'),
('M010', 'T05', 'แกงหมู', 'S01', 20, '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `orderraw`
--

CREATE TABLE `orderraw` (
  `ordraw_id` char(6) NOT NULL,
  `date` date NOT NULL,
  `emp_name` varchar(20) NOT NULL,
  `bus_name` varchar(30) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderraw`
--

INSERT INTO `orderraw` (`ordraw_id`, `date`, `emp_name`, `bus_name`, `status`) VALUES
('ORD001', '2017-06-13', 'Hi', 'A002', 0),
('ORD002', '2017-06-13', 'Test', 'A001', 0);

-- --------------------------------------------------------

--
-- Table structure for table `raw`
--

CREATE TABLE `raw` (
  `raw_id` char(4) NOT NULL,
  `raw_name` varchar(50) NOT NULL,
  `unit_id` char(3) NOT NULL,
  `bus_name` varchar(20) NOT NULL,
  `raw_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `raw`
--

INSERT INTO `raw` (`raw_id`, `raw_name`, `unit_id`, `bus_name`, `raw_price`) VALUES
('R001', 'แหนมเนือง', 'U03', 'A001', 25),
('R002', 'ผักกาด', 'U01', 'A002', 5),
('R003', 'พริก', 'U02', 'A002', 5),
('R004', 'น้ำตาล', 'U02', 'A002', 20),
('R005', 'เกลือ', 'U02', 'A002', 10);

-- --------------------------------------------------------

--
-- Table structure for table `rawstore1`
--

CREATE TABLE `rawstore1` (
  `rs_id` char(5) NOT NULL,
  `raw_id` char(4) NOT NULL,
  `rs_amount` int(4) NOT NULL,
  `rs_op` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rawstore1`
--

INSERT INTO `rawstore1` (`rs_id`, `raw_id`, `rs_amount`, `rs_op`) VALUES
('RS001', 'R004', 10, 0),
('RS002', 'R005', 5, 0),
('RS003', 'R002', 2, 0),
('RS004', 'R003', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rawstore2`
--

CREATE TABLE `rawstore2` (
  `rs_id` char(5) NOT NULL,
  `rs_name` varchar(20) NOT NULL,
  `rs_amount` int(4) NOT NULL,
  `rs_op` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ream_raw`
--

CREATE TABLE `ream_raw` (
  `ream_id` varchar(6) NOT NULL,
  `emp_name` varchar(20) NOT NULL,
  `branch` int(3) NOT NULL,
  `ream_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ream_raw`
--

INSERT INTO `ream_raw` (`ream_id`, `emp_name`, `branch`, `ream_date`) VALUES
('REA001', 'test', 2, '2017-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `sell_order`
--

CREATE TABLE `sell_order` (
  `sell_id` char(5) NOT NULL,
  `emp_name` varchar(20) NOT NULL,
  `branch` char(3) NOT NULL,
  `table_id` char(4) NOT NULL,
  `sell_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sell_order`
--

INSERT INTO `sell_order` (`sell_id`, `emp_name`, `branch`, `table_id`, `sell_date`) VALUES
('SE001', 'Test', '1', 'T001', '2017-06-30 10:32:00');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `size_id` varchar(3) NOT NULL,
  `size_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`size_id`, `size_name`) VALUES
('S01', 'เล็ก'),
('S02', 'กลาง'),
('S03', 'ใหญ่');

-- --------------------------------------------------------

--
-- Table structure for table `table_food`
--

CREATE TABLE `table_food` (
  `table_id` char(4) NOT NULL,
  `table_num` varchar(3) NOT NULL,
  `branch` varchar(3) NOT NULL,
  `table_note` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_food`
--

INSERT INTO `table_food` (`table_id`, `table_num`, `branch`, `table_note`) VALUES
('T001', '1', '1', 'ใกล้ตู้');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_img`
--

CREATE TABLE `tbl_img` (
  `img_id` char(6) NOT NULL,
  `img_name` varchar(20) NOT NULL,
  `img_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_img`
--

INSERT INTO `tbl_img` (`img_id`, `img_name`, `img_file`) VALUES
('IMG001', 'test', 'img_5857777f65ee4.jpg'),
('IMG002', 'test2', 'img_585cd40f44d2d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `temp_detail_order`
--

CREATE TABLE `temp_detail_order` (
  `deord_id` varchar(6) NOT NULL,
  `ordraw_id` char(6) NOT NULL,
  `raw_id` char(4) NOT NULL,
  `raw_price` int(5) NOT NULL,
  `amount` int(5) NOT NULL,
  `unit_id` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `temp_detail_order`
--

INSERT INTO `temp_detail_order` (`deord_id`, `ordraw_id`, `raw_id`, `raw_price`, `amount`, `unit_id`) VALUES
('DRD001', 'ORD001', 'R004', 20, 10, 'U02'),
('DRD002', 'ORD001', 'R005', 10, 10, 'U02'),
('DRD003', 'ORD001', 'R002', 5, 2, 'U01'),
('DRD004', 'ORD001', 'R003', 5, 3, 'U02'),
('DRD005', 'ORD002', 'R001', 25, 10, 'U03');

-- --------------------------------------------------------

--
-- Table structure for table `temp_detail_ream`
--

CREATE TABLE `temp_detail_ream` (
  `de_ream_id` varchar(7) NOT NULL,
  `ream_id` varchar(6) NOT NULL,
  `raw_id` char(4) NOT NULL,
  `amount` int(4) NOT NULL,
  `unit_id` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `temp_detail_ream`
--

INSERT INTO `temp_detail_ream` (`de_ream_id`, `ream_id`, `raw_id`, `amount`, `unit_id`) VALUES
('DREA001', 'REA001', 'R005', 5, 'U02');

-- --------------------------------------------------------

--
-- Table structure for table `temp_orderraw`
--

CREATE TABLE `temp_orderraw` (
  `ordraw_id` char(6) NOT NULL,
  `date` date NOT NULL,
  `emp_name` varchar(20) NOT NULL,
  `bus_name` varchar(30) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `temp_orderraw`
--

INSERT INTO `temp_orderraw` (`ordraw_id`, `date`, `emp_name`, `bus_name`, `status`) VALUES
('ORD001', '2017-06-12', 'Hello', 'A002', 0),
('ORD002', '2017-06-13', 'Test', 'A001', 0);

-- --------------------------------------------------------

--
-- Table structure for table `type_food`
--

CREATE TABLE `type_food` (
  `Type_id` char(3) NOT NULL,
  `type_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type_food`
--

INSERT INTO `type_food` (`Type_id`, `type_name`) VALUES
('T05', 'ตุ๋น'),
('T01', 'ต้ม'),
('T04', 'ทอด'),
('T02', 'ผัด'),
('T03', 'แกง');

-- --------------------------------------------------------

--
-- Table structure for table `type_raw`
--

CREATE TABLE `type_raw` (
  `tr_id` char(5) NOT NULL,
  `tr_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type_raw`
--

INSERT INTO `type_raw` (`tr_id`, `tr_name`) VALUES
('TR001', 'ของแห้ง');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_id` char(3) NOT NULL,
  `unit_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_id`, `unit_name`) VALUES
('U01', 'กรัม'),
('U04', 'กล่อง'),
('U06', 'ขวด'),
('U02', 'ขีด'),
('U07', 'ชิ้น'),
('U03', 'ชุด'),
('U05', 'แพ็ค');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`agent_id`),
  ADD UNIQUE KEY `bus_name` (`bus_name`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`),
  ADD UNIQUE KEY `branch_add` (`branch_add`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`deord_id`);

--
-- Indexes for table `detail_ream`
--
ALTER TABLE `detail_ream`
  ADD PRIMARY KEY (`de_ream_id`);

--
-- Indexes for table `de_sell`
--
ALTER TABLE `de_sell`
  ADD PRIMARY KEY (`de_sell_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `emp_no` (`emp_no`);

--
-- Indexes for table `input_table`
--
ALTER TABLE `input_table`
  ADD PRIMARY KEY (`input_id`),
  ADD KEY `ordraw_id` (`ordraw_id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `menu_size` (`menu_size`),
  ADD KEY `Type_id` (`Type_id`);

--
-- Indexes for table `orderraw`
--
ALTER TABLE `orderraw`
  ADD PRIMARY KEY (`ordraw_id`),
  ADD KEY `bus_name` (`bus_name`);

--
-- Indexes for table `raw`
--
ALTER TABLE `raw`
  ADD PRIMARY KEY (`raw_id`),
  ADD UNIQUE KEY `raw_name` (`raw_name`),
  ADD KEY `unit_id` (`unit_id`),
  ADD KEY `bus_name` (`bus_name`);

--
-- Indexes for table `rawstore1`
--
ALTER TABLE `rawstore1`
  ADD PRIMARY KEY (`rs_id`);

--
-- Indexes for table `rawstore2`
--
ALTER TABLE `rawstore2`
  ADD PRIMARY KEY (`rs_id`);

--
-- Indexes for table `ream_raw`
--
ALTER TABLE `ream_raw`
  ADD PRIMARY KEY (`ream_id`);

--
-- Indexes for table `sell_order`
--
ALTER TABLE `sell_order`
  ADD PRIMARY KEY (`sell_id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `table_food`
--
ALTER TABLE `table_food`
  ADD PRIMARY KEY (`table_id`),
  ADD KEY `branch` (`branch`);

--
-- Indexes for table `tbl_img`
--
ALTER TABLE `tbl_img`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `temp_detail_order`
--
ALTER TABLE `temp_detail_order`
  ADD PRIMARY KEY (`deord_id`);

--
-- Indexes for table `temp_detail_ream`
--
ALTER TABLE `temp_detail_ream`
  ADD PRIMARY KEY (`de_ream_id`);

--
-- Indexes for table `temp_orderraw`
--
ALTER TABLE `temp_orderraw`
  ADD PRIMARY KEY (`ordraw_id`);

--
-- Indexes for table `type_food`
--
ALTER TABLE `type_food`
  ADD PRIMARY KEY (`Type_id`),
  ADD UNIQUE KEY `type_name` (`type_name`);

--
-- Indexes for table `type_raw`
--
ALTER TABLE `type_raw`
  ADD PRIMARY KEY (`tr_id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`),
  ADD UNIQUE KEY `unit_name` (`unit_name`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `input_table`
--
ALTER TABLE `input_table`
  ADD CONSTRAINT `input_table_ibfk_1` FOREIGN KEY (`ordraw_id`) REFERENCES `orderraw` (`ordraw_id`),
  ADD CONSTRAINT `input_table_ibfk_2` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`menu_size`) REFERENCES `size` (`size_id`),
  ADD CONSTRAINT `menu_ibfk_2` FOREIGN KEY (`Type_id`) REFERENCES `type_food` (`Type_id`);

--
-- Constraints for table `orderraw`
--
ALTER TABLE `orderraw`
  ADD CONSTRAINT `orderraw_ibfk_1` FOREIGN KEY (`bus_name`) REFERENCES `agent` (`agent_id`);

--
-- Constraints for table `raw`
--
ALTER TABLE `raw`
  ADD CONSTRAINT `raw_ibfk_1` FOREIGN KEY (`unit_id`) REFERENCES `unit` (`unit_id`),
  ADD CONSTRAINT `raw_ibfk_2` FOREIGN KEY (`bus_name`) REFERENCES `agent` (`agent_id`);

--
-- Constraints for table `table_food`
--
ALTER TABLE `table_food`
  ADD CONSTRAINT `table_food_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branch` (`branch_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
