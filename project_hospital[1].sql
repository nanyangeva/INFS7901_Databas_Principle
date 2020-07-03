-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2018 at 11:56 AM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dep_name` varchar(200) NOT NULL,
  `hos_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_name`, `hos_name`) VALUES
('Burn Center', 'Little Rabbit Hospital'),
('Endoscopy Unit', 'Little Rabbit Hospital'),
('On-call Room', 'Little Rabbit Hospital'),
('Operating Room', 'Little Rabbit Hospital'),
('Physical Therapy', 'Little Rabbit Hospital');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doc_id` int(11) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `doc_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doc_id`, `age`, `doc_name`) VALUES
(1, 43, 'Gabey Corradengo'),
(2, 51, 'Carrie Hammon'),
(3, 35, 'Spenser Pund'),
(4, 64, 'Alyse Dukelow'),
(5, 32, 'Morissa Gettings');

-- --------------------------------------------------------

--
-- Table structure for table `doc_dep`
--

CREATE TABLE `doc_dep` (
  `doc_id` int(11) NOT NULL,
  `dep_name` varchar(200) NOT NULL,
  `if_contract` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doc_dep`
--

INSERT INTO `doc_dep` (`doc_id`, `dep_name`, `if_contract`) VALUES
(1, 'Burn Center', 1),
(1, 'Endoscopy Unit', 0),
(2, 'Endoscopy Unit', 1),
(2, 'On-call Room', 0),
(2, 'Operating Room', 0),
(3, 'On-call Room', 0),
(3, 'Operating Room', 1),
(3, 'Physical Therapy', 0),
(4, 'On-call Room', 0),
(4, 'Operating Room', 0),
(4, 'Physical Therapy', 1),
(5, 'On-call Room', 0),
(5, 'Operating Room', 0),
(5, 'Physical Therapy', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hos_name` varchar(200) NOT NULL,
  `address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hos_name`, `address`) VALUES
('Little Rabbit Hospital', 'No1 Delaware Ave');

-- --------------------------------------------------------

--
-- Table structure for table `patient_1`
--

CREATE TABLE `patient_1` (
  `pat_id` int(11) NOT NULL,
  `hos_name` varchar(200) NOT NULL,
  `visit_date` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `pat_name` varchar(200) DEFAULT NULL,
  `gender` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient_1`
--

INSERT INTO `patient_1` (`pat_id`, `hos_name`, `visit_date`, `age`, `pat_name`, `gender`, `address`) VALUES
(1, 'Little Rabbit Hospital', '2005-07-02', 80, 'Ronnie Adamsen', 'Male', '78 Ronald Regan Alley'),
(2, 'Little Rabbit Hospital', '1998-07-03', 22, 'Marlyn Bloys', 'Male', '43381 Meadow Vale Center'),
(3, 'Little Rabbit Hospital', '2008-02-11', 51, 'Darell Cabell', 'Female', '947 Springs Plaza'),
(4, 'Little Rabbit Hospital', '2014-04-06', 18, 'Cornie Brewood', 'Male', '31314 Basil Lane'),
(5, 'Little Rabbit Hospital', '2012-11-26', 27, 'Barth Gullifant', 'Male', '63257 Sunbrook Crossing'),
(6, 'Little Rabbit Hospital', '2004-06-16', 39, 'Xerxes Vettore', 'Female', '400 Granby Plaza'),
(7, 'Little Rabbit Hospital', '2015-04-03', 77, 'Justus Isacoff', 'Male', '38069 Cottonwood Street'),
(8, 'Little Rabbit Hospital', '2007-01-14', 48, 'Lu Polotti', 'Female', '43170 Arrowood Parkway'),
(9, 'Little Rabbit Hospital', '1998-02-19', 31, 'Steffen Beat', 'Female', '2 Mifflin Court'),
(10, 'Little Rabbit Hospital', '2014-09-22', 47, 'Nickie Yakunikov', 'Male', '529 Meadow Vale Drive');

-- --------------------------------------------------------

--
-- Table structure for table `patient_2`
--

CREATE TABLE `patient_2` (
  `pat_id` int(11) NOT NULL,
  `hos_name` varchar(200) NOT NULL,
  `symptom` varchar(200) DEFAULT NULL,
  `dur_in_hos` int(11) DEFAULT NULL,
  `T` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient_2`
--

INSERT INTO `patient_2` (`pat_id`, `hos_name`, `symptom`, `dur_in_hos`, `T`) VALUES
(1, 'Little Rabbit Hospital', 'Numbness or tingling in hands', NULL, 0),
(2, 'Little Rabbit Hospital', 'Sore throat', NULL, 0),
(3, 'Little Rabbit Hospital', 'Urinary problems', 7, 1),
(4, 'Little Rabbit Hospital', 'Constipation', 3, 1),
(5, 'Little Rabbit Hospital', 'Decreased hearing', NULL, 0),
(6, 'Little Rabbit Hospital', 'Headaches', NULL, 0),
(7, 'Little Rabbit Hospital', 'Nausea or vomiting', 4, 1),
(8, 'Little Rabbit Hospital', 'Sore throat', NULL, 0),
(9, 'Little Rabbit Hospital', 'Nasal congestion', 21, 1),
(10, 'Little Rabbit Hospital', 'Foot swelling or leg swelling', 17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pat_doc_1`
--

CREATE TABLE `pat_doc_1` (
  `pat_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pat_doc_1`
--

INSERT INTO `pat_doc_1` (`pat_id`, `doc_id`, `date`) VALUES
(1, 3, '2005-07-05'),
(2, 2, '1998-07-06'),
(3, 1, '2008-02-14'),
(4, 4, '2014-04-09'),
(5, 1, '2012-11-29'),
(6, 3, '2004-06-19'),
(7, 4, '2015-04-06'),
(8, 2, '2007-01-17'),
(9, 3, '1998-02-22'),
(10, 5, '2014-09-25');

-- --------------------------------------------------------

--
-- Table structure for table `pat_doc_2`
--

CREATE TABLE `pat_doc_2` (
  `pat_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `if_surge` int(11) DEFAULT NULL,
  `disease` varchar(200) DEFAULT NULL,
  `treatment` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pat_doc_2`
--

INSERT INTO `pat_doc_2` (`pat_id`, `doc_id`, `if_surge`, `disease`, `treatment`) VALUES
(1, 3, 1, 'Turner Syndrome', 'Cognitive Therapy'),
(2, 2, 0, 'Growth Hormone Deficiency', 'Drug Therapy'),
(3, 1, 1, 'Sickle Cell Disease', 'Drug Therapy'),
(4, 4, 0, 'Depression', 'Behavioral Therapy'),
(5, 1, 1, 'Seizure Disorder', 'Occupational Therapy'),
(6, 3, 0, 'Deafness', 'Drug Therapy'),
(7, 4, 0, 'Congenital Heart Defects', 'Physical Therapy'),
(8, 2, 1, 'Cancer', 'Physical Therapy'),
(9, 3, 0, 'Birth Defects', 'Drug Therapy'),
(10, 5, 0, 'Salmonella', 'Occupational Therapy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dep_name`),
  ADD KEY `hos_name` (`hos_name`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `doc_dep`
--
ALTER TABLE `doc_dep`
  ADD PRIMARY KEY (`doc_id`,`dep_name`),
  ADD KEY `dep_name` (`dep_name`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hos_name`);

--
-- Indexes for table `patient_1`
--
ALTER TABLE `patient_1`
  ADD PRIMARY KEY (`pat_id`),
  ADD KEY `hos_name` (`hos_name`),
  ADD KEY `hos_name_2` (`hos_name`),
  ADD KEY `pat_id` (`pat_id`),
  ADD KEY `hos_name_3` (`hos_name`);

--
-- Indexes for table `patient_2`
--
ALTER TABLE `patient_2`
  ADD PRIMARY KEY (`pat_id`),
  ADD KEY `hos_name` (`hos_name`);

--
-- Indexes for table `pat_doc_1`
--
ALTER TABLE `pat_doc_1`
  ADD PRIMARY KEY (`pat_id`,`doc_id`),
  ADD KEY `pat_doc_1_ibfk_1` (`doc_id`);

--
-- Indexes for table `pat_doc_2`
--
ALTER TABLE `pat_doc_2`
  ADD PRIMARY KEY (`pat_id`,`doc_id`),
  ADD KEY `pat_doc_2_ibfk_1` (`doc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `doc_dep`
--
ALTER TABLE `doc_dep`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `patient_1`
--
ALTER TABLE `patient_1`
  MODIFY `pat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `patient_2`
--
ALTER TABLE `patient_2`
  MODIFY `pat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `pat_doc_1`
--
ALTER TABLE `pat_doc_1`
  MODIFY `pat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pat_doc_2`
--
ALTER TABLE `pat_doc_2`
  MODIFY `pat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`hos_name`) REFERENCES `hospital` (`hos_name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `doc_dep`
--
ALTER TABLE `doc_dep`
  ADD CONSTRAINT `doc_dep_ibfk_1` FOREIGN KEY (`doc_id`) REFERENCES `doctor` (`doc_id`) ON UPDATE CASCADE;

--
-- Constraints for table `patient_1`
--
ALTER TABLE `patient_1`
  ADD CONSTRAINT `patient_1_ibfk_1` FOREIGN KEY (`hos_name`) REFERENCES `hospital` (`hos_name`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `patient_2`
--
ALTER TABLE `patient_2`
  ADD CONSTRAINT `patient_2_ibfk_1` FOREIGN KEY (`hos_name`) REFERENCES `hospital` (`hos_name`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pat_doc_1`
--
ALTER TABLE `pat_doc_1`
  ADD CONSTRAINT `pat_doc_1_ibfk_1` FOREIGN KEY (`doc_id`) REFERENCES `doctor` (`doc_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pat_doc_1_ibfk_2` FOREIGN KEY (`pat_id`) REFERENCES `patient_1` (`pat_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pat_doc_1_ibfk_3` FOREIGN KEY (`pat_id`) REFERENCES `patient_2` (`pat_id`) ON UPDATE CASCADE;

--
-- Constraints for table `pat_doc_2`
--
ALTER TABLE `pat_doc_2`
  ADD CONSTRAINT `pat_doc_2_ibfk_1` FOREIGN KEY (`doc_id`) REFERENCES `doctor` (`doc_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pat_doc_2_ibfk_3` FOREIGN KEY (`pat_id`) REFERENCES `patient_1` (`pat_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pat_doc_2_ibfk_4` FOREIGN KEY (`pat_id`) REFERENCES `patient_2` (`pat_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
