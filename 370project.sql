-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2021 at 11:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `370project`
--

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE `alogin` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`id`, `email`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin2', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` mediumtext NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `nid` int(20) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `dept` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `pic` mediumtext NOT NULL,
  `fathersName` varchar(255) NOT NULL,
  `contractType` char(100) NOT NULL,
  `jobTime` varchar(100) NOT NULL,
  `pripadnostZaednici` varchar(255) NOT NULL,
  `birthAddress` varchar(100) NOT NULL,
  `jobaddress` varchar(100) NOT NULL,
  `knowledgeLevel` varchar(100) NOT NULL,
  `opisZanimanje` varchar(100) NOT NULL,
  `staz` varchar(100) NOT NULL,
  `checkInvalidity` varchar(100) NOT NULL,
  `sifraEmployee` varchar(100) NOT NULL,
  `nazivRab` varchar(100) NOT NULL,
  `sedistRab` varchar(100) NOT NULL,
  `brojDelovniotSub` varchar(100) NOT NULL,
  `osnoVaPrest` varchar(100) NOT NULL,
  `pocDate` date NOT NULL,
  `prestanokDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstName`, `lastName`, `email`, `password`, `birthday`, `gender`, `contact`, `nid`, `address`, `dept`, `degree`, `pic`, `fathersName`, `contractType`, `jobTime`, `pripadnostZaednici`, `birthAddress`, `jobaddress`, `knowledgeLevel`, `opisZanimanje`, `staz`, `checkInvalidity`, `sifraEmployee`, `nazivRab`, `sedistRab`, `brojDelovniotSub`, `osnoVaPrest`, `pocDate`, `prestanokDate`) VALUES
(103, 'Steven', 'Wilson', 'wilson@xyz.corp', '1234', '1990-02-02', 'Male', '5252', 6262, 'Thames, UK', 'Creative', 'MSc', 'images/sw-google.png', '', 'Indifinitely', 'Full Time', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00'),
(104, 'Guthrie', 'Govan', 'guthrie@xyz.corp', '1234', '1971-12-01', 'Male', '9595', 5959, 'Chemsford, USA', 'Програмирање', 'MSc', 'images/test.jpg', 'GuthriesFather', 'Indifinitely', 'Full Time', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00'),
(105, 'Elon', 'Musk', 'elon@spacex.com', '1234', '1971-06-28', 'Male', '8585', 5858, 'LA, USA', 'Програмирање', 'BSc', 'images/330px-Elon_Musk_Royal_Society.jpg', 'ElonsFather', 'Indifinitely', 'Full Time', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00'),
(106, 'Hacker', 'Man', 'hackerman@xyz.corp', '1234', '1990-02-02', 'Male', '7575', 5757, 'Underground, Dhaka', 'NetworkSecurity', 'MSc', 'images/hacker.png', '', 'Definitely', 'Part Time', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00'),
(107, 'Wonder ', 'Woman', 'woman@xyz.corp', '1234', '1993-03-03', 'Female', '4545', 5454, 'USA', 'Creative', 'MS', 'images/no.jpg', '', 'Indifinitely', 'Full Time', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00'),
(108, 'Andrew', ' Ng', 'andrew@xyz.corp', '1234', '1976-04-16', 'Male', '758758', 857857, 'USA', 'ЦСТ', 'PhD', 'images/download.jpeg', '', 'Definitely', 'Full Time', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00'),
(109, 'Ian ', 'Goodfellow', 'ian@xyz.corp', '1234', '1985-01-01', 'Male', '852852', 258258, 'USA', 'AI', 'PhD', 'images/1-5.jpg', '', 'Indifinitely', 'Part Time', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00'),
(110, 'Christopher ', 'Manning', 'christopher@xyz.corp', '1234', '1965-09-18', 'Male', '147147', 741741, 'USA', 'ЦСТ', 'PhD', 'images/download (1).jpeg', '', 'Indifinitely', 'Full Time', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00'),
(111, 'Jon', 'Snow', 'john@xyz.corp', '1234', '2011-02-01', 'Male', '0187282', 112233, 'Winterfell', 'Програмирање', 'BSc.', 'images/jon-snow.jpg', '', 'Definitely', 'Part Time', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00'),
(112, 'Agon', 'Jakupi', 'agon.jakupi@hotmail.com', '1234', '2010-11-29', 'Male', '4', 1, 'Road 15 number 1338 Aracinovo', 'IT', 'Bachelor', 'images/20180313_100926.jpg', '', 'Indifinitely', 'Full Time', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00'),
(116, 'testfname', 'test', 'tst@mail.com', '1234', '2020-01-01', 'Female', '33123213', 109939393, 'Road 5 n 32', 'IT', 'CST', 'images/no.jpg', '', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00'),
(123, 'Besnik', 'Jakupi', 'bessoo_2023@hotmail.com', '1234', '2021-01-12', 'Male', '4234234234', 2147483647, 'Skopje', 'Creative', 'Bachelor', 'images/man-300x300.png', 'Murtez', 'indifinetely', 'fullTime', 'Albanian', 'Skopje', 'Skopje', '/', '/', '/', 'ne', '43234', 'Skopje', 'Skopje', '321/2-32', '/', '2021-01-17', '0000-00-00'),
(145, 'Азир', 'Алиу', 'azir.aliu@gmail.com', '1234', '2020-01-01', 'Male', '0099999', 111111, 'aaaaa  bbbbb ', 'Marketing', 'VO', 'images/no.jpg', 'Рамиз', 'Неопределено', 'Полно', 'Albanec', 'Gostivar', 'Cair', 'SSO', '1223`', '10`', 'ne', '11', 'Digital Skul', 'GV', 'qas', 'nema', '2020-01-10', '0000-00-00'),
(156, 'test', 'test', 'test@mail.com', '1234', '1996-01-01', 'Male', '070 248 888', 2147483647, 'Skopje', 'Програмирање', 'Факултет', 'images/no.jpg', 'test', 'Неопределено', 'Полно', 'Албанец', 'Skopje', 'Аеродром булевард 3', 'ПКВ', '123123', '12312', 'НЕ', '43234', 'Балдомеро', 'Булевард македонија бр 3', '3', '/', '2021-07-22', '0000-00-00'),
(157, 'test2', 'test2', 'test2@mail.com', '1234', '2021-06-01', 'Male', '0000000', 0, 'Skopje', 'Програмирање', 'Факултет', 'images/no.jpg', 'test2', 'Определено', 'Полно', 'Албанец', 'Skopje', 'Аеродром булевард 3', 'ПКВ', '0000', '0000', 'НЕ', '000', 'Балдомеро', 'Булевард македонија бр 3', '123/13', '/', '2021-07-28', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `employee_leave`
--

CREATE TABLE `employee_leave` (
  `id` int(11) DEFAULT NULL,
  `token` int(11) NOT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `reason` char(100) DEFAULT NULL,
  `status` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_leave`
--

INSERT INTO `employee_leave` (`id`, `token`, `start`, `end`, `reason`, `status`) VALUES
(103, 306, '2019-04-08', '2019-04-08', 'Concert Tour', 'Approved'),
(105, 308, '2021-02-22', '2021-03-06', 'Launching Tesla Model Y', 'Approved'),
(111, 309, '2021-03-05', '2021-02-26', 'Visit to Kings Landing', 'Cancelled'),
(104, 310, '2019-04-08', '2019-04-09', 'Emergency Leave', 'Approved'),
(112, 311, '2021-02-02', '2021-02-05', 'test 3', 'Approved'),
(112, 312, '2021-02-22', '2021-02-26', '', 'Cancelled'),
(112, 331, '2021-05-28', '2021-05-28', 'Urgent chill days', 'Pending'),
(156, 332, '2021-09-01', '2021-09-11', '', 'Approved'),
(156, 333, '2021-08-01', '2021-08-05', 'boleduvanje', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `managertable`
--

CREATE TABLE `managertable` (
  `IdManager` int(11) NOT NULL,
  `emailMan` text NOT NULL,
  `passwordMan` text NOT NULL,
  `manCat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managertable`
--

INSERT INTO `managertable` (`IdManager`, `emailMan`, `passwordMan`, `manCat`) VALUES
(1122, 'manager@mail.com', '1234', 'Програмирање'),
(1133, 'manager2@mail.com', '1234', 'Creative');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `pid` int(11) NOT NULL,
  `eid` int(11) DEFAULT NULL,
  `pname` varchar(100) DEFAULT NULL,
  `duedate` date DEFAULT NULL,
  `subdate` date DEFAULT '0000-00-00',
  `mark` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pid`, `eid`, `pname`, `duedate`, `subdate`, `mark`, `status`) VALUES
(215, 105, 'Tesla Model Y', '2019-04-19', '2019-04-06', 10, 'Submitted'),
(216, 106, 'Hack', '2019-05-04', '2019-04-05', 5, 'Submitted'),
(217, 111, 'Do Nothing', '2019-04-02', '2019-04-01', 10, 'Submitted'),
(218, 105, 'Tesla Model X', '2019-04-03', '2019-04-03', 43, 'Submitted'),
(220, 110, 'Data Analysis', '2019-04-16', '2019-04-04', 8, 'Submitted'),
(221, 110, 'Data Analysis', '2019-04-16', '2019-04-04', 7, 'Submitted'),
(222, 103, 'Statistical', '2019-04-19', '2019-04-04', 6, 'Submitted'),
(223, 108, 'Software Scema', '2019-04-09', '2019-04-02', 5, 'Submitted'),
(224, 107, 'Security Check', '2019-04-26', '2019-04-05', 9, 'Submitted'),
(225, 109, 'ML', '2019-04-03', '2019-04-04', 6, 'Submitted'),
(226, 112, 'Update database', '2020-12-07', '2021-01-16', -10, 'Submitted'),
(229, 112, 'certificate', '2021-01-08', '2021-01-03', 30, 'Submitted'),
(230, 112, 'test test test', '2021-02-01', '0000-00-00', 0, 'Due'),
(240, 105, 'Update database', '2021-03-11', '0000-00-00', 0, 'Due'),
(273, 105, 'Python course 2.0', '2021-03-13', '0000-00-00', 0, 'Due'),
(276, 145, 'Unit testing selenium', '2021-02-20', '0000-00-00', 15, 'Due'),
(307, 110, '123123', '2021-03-12', '0000-00-00', 0, 'Due'),
(308, 108, 'tst tst', '2021-03-13', '0000-00-00', 0, 'Due'),
(315, 104, 'C# certificate', '2021-03-05', '0000-00-00', 0, 'Due'),
(316, 108, 'tttaaa', '2021-03-04', '0000-00-00', 0, 'Due'),
(317, 104, 'ttt', '2021-03-05', '0000-00-00', 0, 'Due'),
(319, 105, 'tttbjjjjjjjjjjjjjjjj', '2021-03-04', '0000-00-00', 0, 'Due'),
(320, 108, 'test kot', '2021-03-05', '0000-00-00', 0, 'Due'),
(321, 123, 'test koti', '2021-03-13', '0000-00-00', 0, 'Due'),
(322, 156, 'c# intermediate', '2022-01-01', '2021-07-27', 0, 'Submitted'),
(323, 112, 'javascript intermediate', '2021-09-10', '0000-00-00', 0, 'Due'),
(324, 105, 'task 2', '2021-08-28', '0000-00-00', 0, 'Due'),
(325, 145, 'Sistematski pregled', '2022-01-10', '0000-00-00', 0, 'Due'),
(326, 156, 'Sistematski pregled ||', '2022-01-10', '0000-00-00', 0, 'Due');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `eid` int(11) NOT NULL,
  `points` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`eid`, `points`) VALUES
(103, 0),
(104, 0),
(105, 43),
(106, 5),
(107, 0),
(108, 5),
(109, 0),
(110, 0),
(111, -10),
(112, 30),
(116, 0),
(123, 0),
(145, 15),
(156, 0),
(157, 0);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `base` int(11) NOT NULL,
  `bonus` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `reasonSal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `base`, `bonus`, `total`, `reasonSal`) VALUES
(103, 65000, 0, 65000, ''),
(104, 78000, 0, 600000, 'ppppppppppppppp'),
(105, 105000, 43, 150150, ''),
(106, 60000, 5, 63000, ''),
(107, 77000, 0, 77000, ''),
(108, 50000, 5, 52500, ''),
(109, 85000, 0, 85000, ''),
(110, 47000, 0, 47000, ''),
(111, 45000, -10, 40500, 'qeeefff'),
(112, 32000, 30, 41600, ''),
(116, 180000, 0, 180000, ''),
(123, 600000, 0, 600000, ''),
(145, 200, 15, 230, ''),
(156, 35000, 0, 35000, ''),
(157, 90000, 0, 90000, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alogin`
--
ALTER TABLE `alogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `employee_leave`
--
ALTER TABLE `employee_leave`
  ADD PRIMARY KEY (`token`),
  ADD KEY `employee_leave_ibfk_1` (`id`);

--
-- Indexes for table `managertable`
--
ALTER TABLE `managertable`
  ADD PRIMARY KEY (`IdManager`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `project_ibfk_1` (`eid`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alogin`
--
ALTER TABLE `alogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `employee_leave`
--
ALTER TABLE `employee_leave`
  MODIFY `token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=334;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=327;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_leave`
--
ALTER TABLE `employee_leave`
  ADD CONSTRAINT `employee_leave_ibfk_1` FOREIGN KEY (`id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rank`
--
ALTER TABLE `rank`
  ADD CONSTRAINT `rank_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
