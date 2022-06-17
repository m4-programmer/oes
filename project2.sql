-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2021 at 01:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'sunnygkp10@gmail.com', '123456'),
(2, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('600eb667ae0fc', '600eb667bc6cd'),
('600eb66817fed', '600eb6681b9fa'),
('600eb66837a9e', '600eb668465ce'),
('600eb66860583', '600eb66864d46'),
('600eb66880dd6', '600eb6688df6e'),
('600eb668a5ee3', '600eb668abae4'),
('600eb668d6c21', '600eb668de66a'),
('600eb66905301', '600eb6690adc1'),
('600eb66939af3', '600eb669402d4'),
('600eb669604d5', '600eb66964c88'),
('600eb6698f5ba', '600eb6699d986'),
('600eb669cb1fd', '600eb669d4aa9'),
('600eb66a0f3f1', '600eb66a1bc65'),
('600eb66a3c012', '600eb66a45cf2'),
('600eb66a6ac8a', '600eb66a70de8'),
('600eb66a99212', '600eb66aa4830'),
('600eb66abdc84', '600eb66ac4d54'),
('600eb66ae950e', '600eb66af1046'),
('600eb66b2a775', '600eb66b50902'),
('600eb66b95685', '600eb66b9b43b'),
('600ec2480fb4f', '600ec24815326'),
('600ec2484a11c', '600ec2484f7c4'),
('600ec2487042b', '600ec24876ced'),
('600ec248b155d', '600ec248bbf9f'),
('600ec2490b0ae', '600ec24921f0f'),
('600ec2494e074', '600ec2495368e'),
('600ec24972244', '600ec2497a097'),
('600ec249939a9', '600ec249988ea'),
('600ec249bff15', '600ec249c98cb'),
('600ec249f20db', '600ec24a02b42'),
('600ee92d7643b', '600ee92d87a7f'),
('600ee92dc8b56', '600ee92dcfe0e'),
('600ee92df2715', '600ee92e07929'),
('600ee92e32372', '600ee92e3cf23'),
('600ee92e8caff', '600ee92e9b295'),
('600ee92eda341', '600ee92eebe75'),
('600ee92f12d7d', '600ee92f17934'),
('600ee92f31e99', '600ee92f38254'),
('600ee92f58047', '600ee92f5cc19'),
('600ee93003b4e', '600ee9300f176'),
('600effeef2f68', '600effef10d91'),
('600effef7065e', '600effef787ca'),
('600effefb6e77', '600effefc910d'),
('600effefe24dd', '600effefe7eeb'),
('600efff027d2c', '600efff030f7d'),
('600efff05ab23', '600efff05adf5'),
('600efff085a70', '600efff08d82a'),
('600efff0b7cfc', '600efff0bf8a6'),
('600efff108a0b', '600efff112c04'),
('600efff136473', '600efff13e354');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `sn` int(5) NOT NULL,
  `course_id` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`sn`, `course_id`) VALUES
(1, 'Computer Appreciation and Basic'),
(2, 'Graphics Design/ Illustrator'),
(3, 'Photography/Photo Editing'),
(4, 'Cinematography/Video Editing'),
(5, 'Drone Piloting & Maneuvering'),
(6, 'Commercial Printing Technology'),
(7, 'Entrepreneur/Business Development'),
(8, 'Data Analysis With SPSS'),
(9, 'Web Technology & Development'),
(10, 'Database Management System'),
(11, 'Digital marketing'),
(12, 'Oracle '),
(13, 'Electronic Document management System'),
(14, 'Software Engineering'),
(15, 'AutoCad Electrical And instrumentation'),
(16, 'Electronics Accounting System'),
(17, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `subject` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `correct`, `wrong`, `date`, `subject`) VALUES
('1233', '600ea526ebb4e', -6, 20, 7, 13, '2021-01-25 12:36:36', 'Numerical Ability'),
('2020', '600ef4e9b543e', 6, 10, 8, 2, '2021-01-25 17:32:12', 'English Language'),
('2020', '600ee4cadd393', 10, 10, 10, 0, '2021-01-25 17:33:18', 'Ict'),
('2020', '600ebccda5cc0', 8, 10, 9, 1, '2021-01-25 17:34:18', ' Current Affair'),
('2020', '600ea526ebb4e', 0, 20, 10, 10, '2021-01-25 17:36:07', 'Numerical Ability'),
('2021/01-1', '600ef4e9b543e', 4, 10, 7, 3, '2021-01-26 09:04:16', 'English Language'),
('2021/01-1', '600ebccda5cc0', -8, 10, 1, 9, '2021-01-26 09:07:22', ' Current Affair'),
('2021/01-1', '600ea526ebb4e', -4, 20, 8, 12, '2021-01-26 09:19:24', 'Numerical Ability'),
('2021/01-1', '600ee4cadd393', -2, 10, 4, 6, '2021-01-26 09:24:30', 'Ict'),
('2021/03-1', '600ef4e9b543e', -4, 10, 3, 7, '2021-01-27 10:53:55', 'English Language'),
('2021/03-1', '600ee4cadd393', 6, 10, 8, 2, '2021-01-27 10:57:49', 'Ict'),
('2021/03-1', '600ebccda5cc0', -4, 10, 3, 7, '2021-01-27 11:02:18', ' Current Affair'),
('2021/03-1', '600ea526ebb4e', -12, 20, 4, 16, '2021-01-27 11:35:30', 'Numerical Ability');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('600eb667ae0fc', '2x2 + 3yx2 + 10xy + 15y2 + 13y + 10x2 + 2x + 10', '600eb667bc6c0'),
('600eb667ae0fc', '2x3 + 6yx2 + 5xy + 5y2 + 31y + 5x2 + 2x + 10', '600eb667bc6cd'),
('600eb667ae0fc', ' 2x3 + 6xy2 + 5xy + 15y2 + 12y + 10x2 + 2x = 10', '600eb667bc6cf'),
('600eb667ae0fc', '2x2 + 6xy2 + 5xy + 15y2 + 13y + 10x2 + 2x + 10', '600eb667bc6d1'),
('600eb66817fed', '35, 916, 3459, 7197', '600eb6681b9fa'),
('600eb66817fed', '916, 3459, 35 , 7197', '600eb6681ba04'),
('600eb66817fed', '35, 916, 7197, 3459', '600eb6681ba06'),
('600eb66817fed', '916, 35, 7197, 3459', '600eb6681ba08'),
('600eb66837a9e', 'N = kpAD2+cpBD2', '600eb668465c5'),
('600eb66837a9e', 'N = kpAPBD2', '600eb668465ce'),
('600eb66837a9e', 'N = kDAPDB2', '600eb668465d1'),
('600eb66837a9e', 'N = kD2APDB', '600eb668465d3'),
('600eb66860583', ' 8 : 125', '600eb66864d3a'),
('600eb66860583', '2 : 5', '600eb66864d40'),
('600eb66860583', '8 : 25', '600eb66864d43'),
('600eb66860583', '4 : 25', '600eb66864d46'),
('600eb66880dd6', '125o', '600eb6688df66'),
('600eb66880dd6', '82o', '600eb6688df6e'),
('600eb66880dd6', '135o', '600eb6688df71'),
('600eb66880dd6', '105o', '600eb6688df72'),
('600eb668a5ee3', '445', '600eb668abae4'),
('600eb668a5ee3', '465', '600eb668abaed'),
('600eb668a5ee3', '365', '600eb668abaef'),
('600eb668a5ee3', 'None of the above', '600eb668abaf2'),
('600eb668d6c21', '7 < x < 52', '600eb668de65b'),
('600eb668d6c21', '-5 < 7 < x', '600eb668de665'),
('600eb668d6c21', '-7 < x < 5', '600eb668de668'),
('600eb668d6c21', '-7 < x < 52', '600eb668de66a'),
('600eb66905301', '112', '600eb6690adb3'),
('600eb66905301', '211', '600eb6690adbc'),
('600eb66905301', '19300', '600eb6690adbf'),
('600eb66905301', '7200', '600eb6690adc1'),
('600eb66939af3', '55.00km/h', '600eb669402ca'),
('600eb66939af3', '67.50kmh', '600eb669402d4'),
('600eb66939af3', '75.00kmh', '600eb669402d7'),
('600eb66939af3', '. 60.00km/h', '600eb669402d9'),
('600eb669604d5', 'N2,000.00', '600eb66964c88'),
('600eb669604d5', 'N4,000.00', '600eb66964c92'),
('600eb669604d5', 'N6,000.00', '600eb66964c95'),
('600eb669604d5', 'N10,000.00', '600eb66964c97'),
('600eb6698f5ba', ' N7,840.00', '600eb6699d986'),
('600eb6698f5ba', 'N6,250.00', '600eb6699d994'),
('600eb6698f5ba', 'N616.00', '600eb6699d997'),
('600eb6698f5ba', 'N5,833.33', '600eb6699d99a'),
('600eb669cb1fd', '180', '600eb669d4a98'),
('600eb669cb1fd', '60', '600eb669d4aa3'),
('600eb669cb1fd', '25', '600eb669d4aa6'),
('600eb669cb1fd', ' 20', '600eb669d4aa9'),
('600eb66a0f3f1', 'y = 1(z−x2)3', '600eb66a1bc53'),
('600eb66a0f3f1', 'y = 1(z+x2)13', '600eb66a1bc60'),
('600eb66a0f3f1', 'y = 1(zx2)13', '600eb66a1bc63'),
('600eb66a0f3f1', 'y = 3z−x2', '600eb66a1bc65'),
('600eb66a3c012', '12, 3√2, 3√2', '600eb66a45ce5'),
('600eb66a3c012', '12, 3√2, 3√3', '600eb66a45cef'),
('600eb66a3c012', '−12, −3√2, 3√3', '600eb66a45cf2'),
('600eb66a3c012', '12, 3√2, -3√2', '600eb66a45cf4'),
('600eb66a6ac8a', 'x<−32 or x>5', '600eb66a70dde'),
('600eb66a6ac8a', 'x<−5 or x>32', '600eb66a70de8'),
('600eb66a6ac8a', ' −32<x<5', '600eb66a70deb'),
('600eb66a6ac8a', '−5<x<32', '600eb66a70dee'),
('600eb66a99212', 'Y= Mx +C', '600eb66aa4830'),
('600eb66a99212', 'Y= C+ MX', '600eb66aa483a'),
('600eb66a99212', 'C= YX+ M', '600eb66aa483c'),
('600eb66a99212', 'M= Y+Cx', '600eb66aa483e'),
('600eb66abdc84', 'Constant of Proportionality', '600eb66ac4d54'),
('600eb66abdc84', 'Construction of Equation', '600eb66ac4d66'),
('600eb66abdc84', 'Const factor', '600eb66ac4d6c'),
('600eb66abdc84', 'Coefficient ', '600eb66ac4d70'),
('600eb66ae950e', '20', '600eb66af1038'),
('600eb66ae950e', '6', '600eb66af1043'),
('600eb66ae950e', '10', '600eb66af1046'),
('600eb66ae950e', '15', '600eb66af1049'),
('600eb66b2a775', '3.142', '600eb66b50902'),
('600eb66b2a775', '3.133', '600eb66b5090e'),
('600eb66b2a775', '2.142', '600eb66b50911'),
('600eb66b2a775', '3.134', '600eb66b50914'),
('600eb66b95685', '2', '600eb66b9b43b'),
('600eb66b95685', '1.5', '600eb66b9b451'),
('600eb66b95685', '1.25', '600eb66b9b457'),
('600eb66b95685', '0.125', '600eb66b9b45b'),
('600ec2480fb4f', 'Engr Festus Kalu ', '600ec24815319'),
('600ec2480fb4f', 'Engr. Dr. Ibraham Adamu', '600ec24815324'),
('600ec2480fb4f', 'Herbert Macaulay ', '600ec24815326'),
('600ec2480fb4f', 'Engr. Cyril Adebayo ', '600ec24815329'),
('600ec2484a11c', 'Brig. General U. J Esuene', '600ec2484f7c4'),
('600ec2484a11c', 'Lt. Col Ojukwu Odimuke', '600ec2484f7cd'),
('600ec2484a11c', ' Dr. Clement Isong', '600ec2484f7cf'),
('600ec2484a11c', 'Sir Udo Udoma', '600ec2484f7d1'),
('600ec2487042b', 'Margate Ekpo', '600ec24876ce3'),
('600ec2487042b', 'Abongawanwa Emma Brown', '600ec24876ced'),
('600ec2487042b', 'Mrs Diana Folorunsho', '600ec24876cf0'),
('600ec2487042b', ' Dr. Ngozi Ikemba', '600ec24876cf2'),
('600ec248b155d', 'Gen. Ibrahim Babaginda', '600ec248bbf9f'),
('600ec248b155d', 'Gen. Obasenjo Mathew', '600ec248bbfaa'),
('600ec248b155d', 'President Sheu Shagari', '600ec248bbfad'),
('600ec248b155d', 'None of the Above', '600ec248bbfaf'),
('600ec2490b0ae', 'Calabar', '600ec24921f0f'),
('600ec2490b0ae', 'Lagos', '600ec24921f18'),
('600ec2490b0ae', 'Logoja', '600ec24921f1a'),
('600ec2490b0ae', 'Abuja', '600ec24921f1c'),
('600ec2494e074', 'Senator Adamu Ciroma', '600ec24953680'),
('600ec2494e074', 'Sanator  Ike Ekereamadu', '600ec2495368a'),
('600ec2494e074', 'Senator Kinsley Edonegba', '600ec2495368c'),
('600ec2494e074', 'Senator Amed Lawan', '600ec2495368e'),
('600ec24972244', '233', '600ec2497a089'),
('600ec24972244', '6666', '600ec2497a093'),
('600ec24972244', '769', '600ec2497a095'),
('600ec24972244', '774 ', '600ec2497a097'),
('600ec249939a9', 'Dr. Clement Isong', '600ec249988ea'),
('600ec249939a9', 'Dr. Mohhamed Musa', '600ec249988f4'),
('600ec249939a9', 'Mr. Tony Kalu', '600ec249988f6'),
('600ec249939a9', 'Sir Amadu Bello', '600ec249988f8'),
('600ec249bff15', 'United Nation Emancipation Security Concern Organisation', '600ec249c98cb'),
('600ec249bff15', 'United Nation Education Sciencetific and Cultural Organisation', '600ec249c98d4'),
('600ec249bff15', 'United Nation Education Security Cultural Organisation', '600ec249c98d6'),
('600ec249bff15', 'Cultural Organisation Earth Security and Cultural Outreach', '600ec249c98d8'),
('600ec249f20db', 'Szwitzertland', '600ec24a02b42'),
('600ec249f20db', 'USA', '600ec24a02b4b'),
('600ec249f20db', 'CHINA', '600ec24a02b4d'),
('600ec249f20db', 'France', '600ec24a02b4f'),
('600ee92d7643b', '    info@website.com', '600ee92d87a7f'),
('600ee92d7643b', '     care@website.com', '600ee92d87a88'),
('600ee92d7643b', ' carewebsite.com', '600ee92d87a8a'),
('600ee92d7643b', ' care.website.com', '600ee92d87a8c'),
('600ee92dc8b56', 'Buying and selling international goods', '600ee92dcfe02'),
('600ee92dc8b56', 'Buying and selling products and services over the Internet', '600ee92dcfe0e'),
('600ee92dc8b56', ' Buying and selling products and services not found in stores', '600ee92dcfe10'),
('600ee92dc8b56', ') Buying and selling computer products', '600ee92dcfe13'),
('600ee92df2715', 'Downloading', '600ee92e07929'),
('600ee92df2715', ' FTP', '600ee92e07933'),
('600ee92df2715', 'Forwarding', '600ee92e07936'),
('600ee92df2715', 'Uploading', '600ee92e07938'),
('600ee92e32372', 'input Device', '600ee92e3cf23'),
('600ee92e32372', 'Output Device', '600ee92e3cf2d'),
('600ee92e32372', 'RAM', '600ee92e3cf30'),
('600ee92e32372', 'Monitor', '600ee92e3cf32'),
('600ee92e8caff', 'typewriter', '600ee92e9b28c'),
('600ee92e8caff', 'Input device', '600ee92e9b295'),
('600ee92e8caff', 'Oytput Device', '600ee92e9b297'),
('600ee92e8caff', 'Kepad', '600ee92e9b29a'),
('600ee92eda341', 'Portable Digital Association', '600ee92eebe6c'),
('600ee92eda341', 'Portable Digital Assistant', '600ee92eebe75'),
('600ee92eda341', 'Post Digita Access', '600ee92eebe78'),
('600ee92eda341', 'Personal Document Asset', '600ee92eebe7a'),
('600ee92f12d7d', 'Graphical Uniform Intergration', '600ee92f1792b'),
('600ee92f12d7d', 'Graphical User Interface', '600ee92f17934'),
('600ee92f12d7d', 'Gradient Uniform  Interpolation ', '600ee92f17937'),
('600ee92f12d7d', 'Gradle Unversal Internet', '600ee92f17939'),
('600ee92f31e99', 'Post of Service', '600ee92f3824a'),
('600ee92f31e99', 'Point of Sales', '600ee92f38254'),
('600ee92f31e99', 'portable Offer Service', '600ee92f38257'),
('600ee92f31e99', 'Point of Service', '600ee92f38259'),
('600ee92f58047', 'Light Pen', '600ee92f5cc19'),
('600ee92f58047', 'Plotter', '600ee92f5cc23'),
('600ee92f58047', 'Printer', '600ee92f5cc25'),
('600ee92f58047', 'Monitor', '600ee92f5cc28'),
('600ee93003b4e', 'Ada Love', '600ee9300f176'),
('600ee93003b4e', 'Bill Gate', '600ee9300f182'),
('600ee93003b4e', 'Charles Barbage', '600ee9300f185'),
('600ee93003b4e', 'Thomas Edison', '600ee9300f187'),
('600effeef2f68', 'played most brilliantly', '600effef10d79'),
('600effeef2f68', 'played below their usual form', '600effef10d8c'),
('600effeef2f68', 'won unexpectedly', '600effef10d91'),
('600effeef2f68', 'won as expected', '600effef10d95'),
('600effef7065e', ' small boys', '600effef787ca'),
('600effef7065e', 'frivolous people', '600effef787d5'),
('600effef7065e', 'frightened people', '600effef787d8'),
('600effef7065e', 'inexperienced people', '600effef787da'),
('600effefb6e77', ' Emeka started school early as he wished', '600effefc9101'),
('600effefb6e77', 'Emeka regretted starting school early', '600effefc910a'),
('600effefb6e77', 'Emeka regretted not starting school early', '600effefc910d'),
('600effefb6e77', 'Emeka could have started school early if he had wished', '600effefc910f'),
('600effefe24dd', 'coopes', '600effefe7ed1'),
('600effefe24dd', 'coupes', '600effefe7ee2'),
('600effefe24dd', ' coupe', '600effefe7ee7'),
('600effefe24dd', 'coup', '600effefe7eeb'),
('600efff027d2c', 'gag', '600efff030f7d'),
('600efff027d2c', 'shackle', '600efff030f8e'),
('600efff027d2c', ' fetter', '600efff030f93'),
('600efff027d2c', 'bind', '600efff030f97'),
('600efff05ab23', 'integrating ', '600efff05ade4'),
('600efff05ab23', 'finishing', '600efff05adec'),
('600efff05ab23', 'complaining', '600efff05adf1'),
('600efff05ab23', 'initiating ', '600efff05adf5'),
('600efff085a70', 'scorn', '600efff08d82a'),
('600efff085a70', 'shame', '600efff08d83b'),
('600efff085a70', 'dignity', '600efff08d840'),
('600efff085a70', 'cruelty', '600efff08d844'),
('600efff0b7cfc', 'insisted on killing himself too', '600efff0bf892'),
('600efff0b7cfc', 'tried to hide what he had done', '600efff0bf8a6'),
('600efff0b7cfc', 'Was emnitterd about the act', '600efff0bf8ab'),
('600efff0b7cfc', 'decided to raise an alarm', '600efff0bf8b0'),
('600efff108a0b', 'paid', '600efff112bf1'),
('600efff108a0b', 'said', '600efff112c04'),
('600efff108a0b', 'prayed', '600efff112c09'),
('600efff108a0b', 'quay', '600efff112c0e'),
('600efff136473', 'kill', '600efff13e342'),
('600efff136473', 'suite', '600efff13e354'),
('600efff136473', 'will', '600efff13e359'),
('600efff136473', 'live', '600efff13e35d');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('600ea526ebb4e', '600eb667ae0fc', 'Multiply (x + 3y + 5) by (2x2 + 5y)\r\n', 4, 1),
('600ea526ebb4e', '600eb66817fed', 'Arrange 35, 916, 3459 and 7197 in ascending order of magnitude.\r\n', 4, 2),
('600ea526ebb4e', '600eb66837a9e', 'The number of telephone calls N between two cities A and B varies directly as the population PA, PB respectively and inversely as the square of the distance D between A and B. Which of the following equations represents this relation?\r\n', 4, 3),
('600ea526ebb4e', '600eb66860583', 'If a circular paper disc is trimmed in such a way that its circumference is reduced in the ratio 2:5, In what ratio is the surface reduced?\r\n', 4, 4),
('600ea526ebb4e', '600eb66880dd6', 'If the four interior angles of a quadrilateral are (p + 10)o, (p - 30)o, (2p - 450o, and (p + 15)o, then p is', 4, 5),
('600ea526ebb4e', '600eb668a5ee3', 'If A= 345, B= 10,  What is the sum of A and B square? ', 4, 6),
('600ea526ebb4e', '600eb668d6c21', 'If y = 2x2 + 9x - 35. Find the range of values for which y < 0.\r\n', 4, 7),
('600ea526ebb4e', '600eb66905301', 'Father reduced the quantity of food bought for the family by 10% when he found that the cost of living had increased 15%. Thus the fractional increase in the family food bill is now\r\n', 4, 8),
('600ea526ebb4e', '600eb66939af3', 'A train moves from P to Q at an average speed of 90km/h and immediately returns from Q to P through the same route at an average speed of 45km/h. Find the average speed for the entire journey\r\n\r\n', 4, 9),
('600ea526ebb4e', '600eb669604d5', 'Two brothers invested a total of N5,000.00 on a farm project, the farm yield was sold for N 15,000.00 at the end of the season. If the profit was shared in the ratio 2 : 3, what is the difference in the amount to profit received by the brothers?\r\n', 4, 10),
('600ea526ebb4e', '600eb6698f5ba', 'A man invests a sum of money at 4% per annum simple invest. After 3 years, the principal amounts to N7,000.00. Find the sum invested\r\n', 4, 11),
('600ea526ebb4e', '600eb669cb1fd', 'Four boys and ten girls can cut a field in 5 hours if the boys work at 54 the rate at which the girls work. How many boys will be needed to cut the field in 3 hours?\r\n', 4, 12),
('600ea526ebb4e', '600eb66a0f3f1', 'Make y the subject of the formula Z = x2 + 1y3\r\n', 4, 13),
('600ea526ebb4e', '600eb66a3c012', 'the sine, cosine and tangent of 210o are respectively\r\n', 4, 14),
('600ea526ebb4e', '600eb66a6ac8a', 'Find the range of values of x for which 2x2+7x−15>0.\r\n', 4, 15),
('600ea526ebb4e', '600eb66a99212', 'one of these is the correct formula for  Equation of a straight line', 4, 16),
('600ea526ebb4e', '600eb66abdc84', 'The C in the equation of a straight line stand for?', 4, 17),
('600ea526ebb4e', '600eb66ae950e', 'If A+C = 50, and the Value of A = 40. What is the Value of C', 4, 18),
('600ea526ebb4e', '600eb66b2a775', 'What is the Value of Pie ', 4, 19),
('600ea526ebb4e', '600eb66b95685', 'calculate 1/0.5\r\n', 4, 20),
('600ebccda5cc0', '600ec2480fb4f', 'Who was the first Nigerian Civil Engineer\r\n', 4, 1),
('600ebccda5cc0', '600ec2484a11c', 'Who was the first Governor of South Eastern State of Nigeria\r\n', 4, 2),
('600ebccda5cc0', '600ec2487042b', 'Who Was the first Woman Journalist in Nigeria\r\n', 4, 3),
('600ebccda5cc0', '600ec248b155d', 'Which Nigerian President Created Akwa Ibom State? ', 4, 4),
('600ebccda5cc0', '600ec2490b0ae', 'Which City in Nigeria was the first Capital of Nigeria ?\r\n', 4, 5),
('600ebccda5cc0', '600ec2494e074', 'Who  is the current Senate President', 4, 6),
('600ebccda5cc0', '600ec24972244', 'How many local government is in Nigeria\r\n', 4, 7),
('600ebccda5cc0', '600ec249939a9', 'Who was the first  Governor of Central Bank of Nigeria?', 4, 8),
('600ebccda5cc0', '600ec249bff15', 'What is the full Meaning of  UNESCO', 4, 9),
('600ebccda5cc0', '600ec249f20db', 'Where is the Headquarters of World Health Organization', 4, 10),
('600ee4cadd393', '600ee92d7643b', 'Which of the following is a correct format of Email address?\r\n', 4, 1),
('600ee4cadd393', '600ee92dc8b56', 'What is e-commerce?\r\n', 4, 2),
('600ee4cadd393', '600ee92df2715', 'The process of transferring files from a computer on the Internet to your computer is called\r\n', 4, 3),
('600ee4cadd393', '600ee92e32372', 'A Computer is a Device that can accept data through\r\n', 4, 4),
('600ee4cadd393', '600ee92e8caff', 'keyboard is an Example of?', 4, 5),
('600ee4cadd393', '600ee92eda341', 'PDA means', 4, 6),
('600ee4cadd393', '600ee92f12d7d', 'GUI means', 4, 7),
('600ee4cadd393', '600ee92f31e99', 'POS means', 4, 8),
('600ee4cadd393', '600ee92f58047', 'The Following are examples of Output device Except One', 4, 9),
('600ee4cadd393', '600ee93003b4e', 'The First Programmer was', 4, 10),
('600ef4e9b543e', '600effeef2f68', 'Choose the option that best conveys the meaning of the underlined portion in the following sentence;\r\nIn the match against the uplanders team, the sub mariners turned out to be the <u>dark horse</u>\r\n', 4, 1),
('600ef4e9b543e', '600effef7065e', 'Choose the option that best conveys the meaning of the underlined portion in the following sentence;\r\nOnly the <u>small fry</u> get punished for such social misdemeanours\r\n\r\n', 4, 2),
('600ef4e9b543e', '600effefb6e77', 'In the question below select the option that best explains the information conveyed in the sentence:\r\nEmeka wished he had started school early\r\n', 4, 3),
('600ef4e9b543e', '600effefe24dd', 'Fill in the blank spaces in the following sentences making use of the best of the five options:\r\nFor their part in the unsuccessful .... the mutineers were court - martialled\r\n', 4, 4),
('600ef4e9b543e', '600efff027d2c', 'Fill in the blank spaces in the following sentences making use of the best of the five options:\r\nThe way to stop some frivolous publications is to .... the press\r\n', 4, 5),
('600ef4e9b543e', '600efff085a70', 'Instruction : Choose the word opposite in meaning to the underline word. \r\nThe manager who expected to be given <u>respect was treated with-----', 4, 7),
('600ef4e9b543e', '600efff0b7cfc', 'From  the options lettered  A-D choose the one that is the most appropriate interpretation of the expressions in italics:\r\nAfter Uduak had killed his wife, he attempted to cover his <i>tracks</i> by making her death appear like suicide. This means that Uduak:', 4, 8),
('600ef4e9b543e', '600efff108a0b', 'Choose from options A-D the one that has the same vowel sound as the one represented by the underlined letter(s)', 4, 9),
('600ef4e9b543e', '600efff136473', 'Choose from options A-D the one that contains the sound segment represented by the given phonetic symbol /i/.', 4, 10);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `correct`, `wrong`, `total`, `time`, `intro`, `date`) VALUES
('600ea526ebb4e', 'Numerical Ability', 1, 1, 20, 20, 'Please answer each Question correctly:\r\n', '2021-01-25 11:01:58'),
('600ebccda5cc0', ' Current Affair', 1, 1, 10, 4, '', '2021-01-25 12:42:53'),
('600ee4cadd393', 'Ict', 1, 1, 10, 5, '', '2021-01-25 15:33:30'),
('600ef4e9b543e', 'English Language', 1, 1, 10, 5, '', '2021-01-25 16:42:17');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `subject` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`, `subject`) VALUES
('1233', -6, '2021-01-25 12:36:36', 'Numerical Ability'),
('2020', 6, '2021-01-25 17:32:12', 'English Language'),
('2020', 10, '2021-01-25 17:33:18', 'Ict'),
('2020', 8, '2021-01-25 17:34:18', ' Current Affair'),
('2020', 0, '2021-01-25 17:36:07', 'Numerical Ability'),
('2021/01-1', 4, '2021-01-26 09:04:16', 'English Language'),
('2021/01-1', -8, '2021-01-26 09:07:22', ' Current Affair'),
('2021/01-1', -4, '2021-01-26 09:19:24', 'Numerical Ability'),
('2021/01-1', -2, '2021-01-26 09:24:30', 'Ict'),
('2021/03-1', -4, '2021-01-27 10:53:55', 'English Language'),
('2021/03-1', 6, '2021-01-27 10:57:49', 'Ict'),
('2021/03-1', -4, '2021-01-27 11:02:18', ' Current Affair'),
('2021/03-1', -12, '2021-01-27 11:35:30', 'Numerical Ability');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `program` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `gender`, `program`, `email`, `regno`, `password`) VALUES
('Augustine Enyinaya Sunday', 'Male', 'ICT Scholarship', 'augussun@mediacademy.com', '2021/03-1', '2021/03-1'),
('Esther Akim', 'Femal', 'ICT Scholarship', 'esteraakim@scholarship.com', '2021/01-1', '2021/01-1'),
('sam', 'Male', 'ICT Scholarship', 'sam@yahoo.com', '2020', '2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
