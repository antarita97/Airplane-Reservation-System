-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 12:13 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airplane_reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `source` varchar(10) NOT NULL,
  `destination` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`source`, `destination`) VALUES
('Kolkata', 'Mumbai'),
('Mumbai', 'Kolkata'),
('Delhi', 'Chennai'),
('Chennai', 'Delhi'),
('Bangalore', 'Hyderabad'),
('Hyderabad', 'Bangalore'),
('Gujarat', 'Kerala'),
('Kerala', 'Gujarat'),
('Rajasthan', 'Punjab'),
('Punjab', 'Rajasthan');

-- --------------------------------------------------------

--
-- Table structure for table `customer_master`
--

CREATE TABLE `customer_master` (
  `User_ID` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Pin` int(10) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `code` mediumint(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer_master`
--

INSERT INTO `customer_master` (`User_ID`, `user_name`, `Address`, `City`, `Pin`, `contactno`, `Password`, `code`, `status`) VALUES
('abhi@gmail.com', 'abhi', 'kolkata', 'kolkata', 700904, '1234567890', 'Abhi@2003', 121836, 'verified'),
('gentfool08@gmail.com', 'SAMADRITA MUKHERJEE', '20 NO CLUB ROAD NALTA DUM DUM CANTONMENT', 'NORTH 24 PARGANAS', 700028, '8327328242', 'Sam@antu123', 492700, 'verified'),
('gentfool1010@gmail.com', 'SAMADRITA MUKHERJEE', '20 NO CLUB ROAD NALTA DUM DUM CANTONMENT', 'NORTH 24 PARGANAS', 700028, '8327328242', 'Gent@1010', 952527, 'verified'),
('gentfool108@gmail.com', 'SAMADRITA MUKHERJEE', '20 NO CLUB ROAD NALTA DUM DUM CANTONMENT', 'NORTH 24 PARGANAS', 700028, '8327328242', 'Gent@123', 639166, 'verified'),
('gentfool10@gmail.com', 'SAMADRITA MUKHERJEE', '20 NO CLUB ROAD NALTA DUM DUM CANTONMENT', 'NORTH 24 PARGANAS', 700028, '8327328242', 'Gent@123', 201737, 'verified'),
('gentfuck@gmail.com', 'SAMADRITA MUKHERJEE', '20 NO CLUB ROAD NALTA DUM DUM CANTONMENT', 'NORTH 24 PARGANAS', 700028, '8327328242', 'Bhalo@123', 113652, 'verified'),
('intelligentfl08@gmail.com', 'SAMADRITA MUKHERJEE', 'intelligentfool08@gmail.com', 'NORTH 24 PARGANAS', 700028, '8535981035345566677', 'Ant@123456', 904028, 'verified'),
('intelligentfool01234@gmail.com', 'SAMADRITA MUKHERJEE', '20 NO CLUB ROAD NALTA DUM DUM CANTONMENT', 'NORTH 24 PARGANAS', 700028, '8327328242', 'Samadrita@1234', 705104, 'verified'),
('intelligentfool0808@gmail.com', 'SAMADRITA MUKHERJEE', 'intelligentfool08@gmail.com', 'NORTH 24 PARGANAS', 123456, '8535981035', 'Saha@123', 642133, 'verified'),
('intelligentfool081234@gmail.co', 'SAMADRITA MUKHERJEE', '20 NO CLUB ROAD NALTA DUM DUM CANTONMENT', 'NORTH 24 PARGANAS', 700021, '8327328242', 'Sama@123', 756542, 'verified'),
('intelligentfool0812@gmail.com', 'SAMADRITA MUKHERJEE', '20 NO CLUB ROAD NALTA DUM DUM CANTONMENT', 'NORTH 24 PARGANAS', 700028, '9343211234', 'Sam12345@12345', 773533, 'verified'),
('intelligentfool082345@gmail.co', 'SAMADRITA MUKHERJEE', '20 NO CLUB ROAD NALTA DUM DUM CANTONMENT', 'NORTH 24 PARGANAS', 700035, '8242326281', 'Sam@1234', 148407, 'verified'),
('intelligentfool08@gmail.com', 'SAMADRITA MUKHERJEE', '20 NO CLUB ROAD NALTA DUM DUM CANTONMENT', 'NORTH 24 PARGANAS', 700021, '8242326281', 'Sam@0802', 548542, 'verified'),
('intelligentfool1212@gmail.com', 'SAMADRITA MUKHERJEE', 'intelligentfool08@gmail.com', 'NORTH 24 PARGANAS', 696969, '8242326281', 'Antarita@1234', 505659, 'verified'),
('intelligentfool123@gmail.com', 'SAMADRITA MUKHERJEE', 'intelligentfool08@gmail.com', 'NORTH 24 PARGANAS', 696969, '8242326281', 'Sam@1234', 907003, 'verified'),
('intelligentfool69@gmail.com', 'SAMADRITA MUKHERJEE', 'intelligentfool08@gmail.com', 'NORTH 24 PARGANAS', 700035, '8535981022', 'Sam@12345', 839050, 'verified'),
('intellitfool08@gmail.com', 'SAMADRITA MUKHERJEE', '20 NO CLUB ROAD NALTA DUM DUM CANTONMENT', 'NORTH 24 PARGANAS', 700023, '7000023344', 'Hentai@123', 315933, 'verified'),
('ligentfool08@gmail.com', 'SAMADRITA MUKHERJEE', '20 NO CLUB ROAD NALTA DUM DUM CANTONMENT', 'NORTH 24 PARGANAS', 700028, '8535981035', 'Samadrita@1234', 720104, 'verified'),
('narena12345@gmail.com', 'SAMADRITA MUKHERJEE', '20 NO CLUB ROAD NALTA DUM DUM CANTONMENT', 'NORTH 24 PARGANAS', 700028, '9343211234', 'Narena@12345', 794826, 'verified'),
('narena1234@gmail.com', 'SAMADRITA MUKHERJEE', '20 NO CLUB ROAD NALTA DUM DUM CANTONMENT', 'NORTH 24 PARGANAS', 700028, '9343211234', 'Narena@1234', 904091, 'verified'),
('narena123@gmail.com', 'SAMADRITA MUKHERJEE', '20 NO CLUB ROAD NALTA DUM DUM CANTONMENT', 'NORTH 24 PARGANAS', 700028, '9343211234', 'Narena@123', 886884, 'verified'),
('notintelligentfool08@gmail.com', 'SAMADRITA MUKHERJEE', '20 NO CLUB ROAD NALTA DUM DUM CANTONMENT', 'NORTH 24 PARGANAS', 700028, '9343211234', 'Nirutor@123', 637166, 'verified'),
('sahelipaul@gmail.com', 'Saheli Paul', '12 pk guha road', 'kolkata', 700021, '9434180361', 'Saheli@123', 455934, 'verified'),
('sam1234@gmail.com', 'Saheli Mukherjee', 'intelligentfool08@gmail.com', 'NORTH 24 PARGANAS', 700035, '8242326281', 'Saheli@123', 632054, 'verified'),
('Samadita@gmail.com', 'samadrita mukh', '', '', 0, '12345', 'Sam@1234', 132363, 'verified'),
('sasha@gmail.com', 'sasha alexander', 'russian mafia den', 'yugoslavia', 123456, '1234567891', 'Sasha@123', 308973, 'verified'),
('saswati@gmail.com', 'Saswati Mukherjee', 'notun bajaar near garia station', 'kolkata', 6969690, '9343211234', 'Saswati@123', 426553, 'verified'),
('susmitahappy108@gmail.com', 'Susmita Mukherjee', '20 NO CLUB ROAD NALTA DUM DUM CANTONMENT', 'NORTH 24 PARGANAS', 700032, '8327328242', 'Susmita@12', 685573, 'verified'),
('zero123@gmail.com', 'zaina khan', 'hanuman mandir near rl station', 'new delhi', 1234567, '432156372', 'Zaina@123', 777129, 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedback`) VALUES
(1, 'SAMADRITA MUKHERJEE', 'intelligentfool08@gmail.com', 'hi'),
(2, 'SAMADRITA MUKHERJEE', '12345@Gmail.com', '234'),
(3, 'Antarita Mukherjee', 'intelligentfool08@gmail.com', 'hi this is Antarita'),
(4, 'SAMADRITA MUKHERJEE', 'hello123@gmail.com', 'Hi '),
(5, 'SAMADRITA MUKHERJEE', 'intelligentfool08@gmail.com', 'hhi   kjjbmnbcdkgwkhsm'),
(6, 'SAMADRITA MUKHERJEE', 'intelligentfool08@gmail.com', 'hhi   kjjbmnbcdkgwkhsm'),
(7, 'SAMADRITA MUKHERJEE', 'intelligentfool08@gmail.com', 'hhi   kjjbmnbcdkgwkhsm'),
(8, 'SAMADRITA MUKHERJEE', 'intelligentfool08@gmail.com', 'zugubugu'),
(9, 'lily', 'lily@gmail.com', 'great experience'),
(10, 'lily', 'lily@gmail.com', 'hello'),
(11, 'lily', 'lily@gmail.com', 'hello'),
(12, 'lily', 'lily@gmail.com', 'hello'),
(13, 'lily', 'lily@gmail.com', 'hello'),
(14, 'lily', 'lily@gmail.com', 'hello'),
(15, 'lily', 'lily@gmail.com', 'hello'),
(16, 'lily', 'lily@gmail.com', 'hello'),
(17, 'lily', 'lily@gmail.com', 'hello'),
(18, 'lily', 'lily@gmail.com', 'hello'),
(19, 'lily', 'lily@gmail.com', 'hello'),
(20, 'lily', 'lily@gmail.com', 'hello'),
(21, 'lily', 'lily@gmail.com', 'hello'),
(22, 'lily', 'lily@gmail.com', 'hello'),
(23, 'lily', 'lily@gmail.com', 'hello'),
(24, 'lily', 'lily@gmail.com', 'hello'),
(25, 'lily', 'lily@gmail.com', 'hello'),
(26, 'lily', 'lily@gmail.com', 'hola'),
(27, 'lily', 'lily@gmail.com', 'hola'),
(28, 'abhi', 'abhi@gmail.com', 'great experience'),
(29, 'abhi', 'abhi@gmail.com', 'hello'),
(30, 'abhi', 'abhi@gmail.com', 'hola hum satisfied');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `flight_id` varchar(10) NOT NULL,
  `flight_name` varchar(30) DEFAULT NULL,
  `airline_name` varchar(30) DEFAULT NULL,
  `arrival` time DEFAULT NULL,
  `departure` time DEFAULT NULL,
  `duration` time DEFAULT NULL,
  `source` varchar(30) DEFAULT NULL,
  `destination` varchar(30) DEFAULT NULL,
  `adult_cost` int(10) DEFAULT NULL,
  `infant_cost` int(10) NOT NULL,
  `senior_citizen_cost` int(10) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`flight_id`, `flight_name`, `airline_name`, `arrival`, `departure`, `duration`, `source`, `destination`, `adult_cost`, `infant_cost`, `senior_citizen_cost`, `type`) VALUES
('fl100', 'airbus_a321', 'indigo', '03:30:00', '01:00:00', '02:30:00', 'Kolkata', 'Mumbai', 6000, 2000, 4000, 'domestic'),
('fl112', 'airbus_b632', 'spicejet', '04:00:00', '02:00:00', '02:00:00', 'Kolkata', 'Mumbai', 7000, 3000, 4000, 'domestic'),
('fl115', 'airbus_s322', 'vistara', '08:25:00', '06:25:00', '02:00:00', 'Delhi', 'Hyderabad', 9000, 6000, 7000, 'domestic'),
('fl117', 'airbus_a435', 'indigo', '05:25:00', '03:25:00', '02:00:00', 'Delhi', 'Hyderabad', 8600, 6600, 7600, 'domestic'),
('fl190', 'airbus_s391', 'Indigo', '14:49:00', '13:50:00', '01:50:00', 'Kolkata', 'Chennai', 9000, 7000, 8000, 'domestic'),
('fl191', 'airbus_v330', 'indigo', '11:56:00', '10:56:00', '01:00:00', 'Kolkata', 'Hyderabad', 10000, 6000, 5000, 'domestic'),
('fl343', 'airbus_6130', 'airindia', '08:00:00', '10:30:00', '02:30:00', 'Chennai', 'Kolkata', 9000, 7000, 8000, 'domestic'),
('fl345', 'airbus_6135', 'airasia', '10:30:00', '08:00:00', '02:30:00', 'Chennai', 'Kolkata', 9000, 7000, 8000, 'domestic'),
('fl347', 'airbus_6137', 'indigo', '04:30:00', '02:00:00', '02:30:00', 'Chennai', 'Kolkata', 8900, 6300, 7600, 'domestic'),
('fl348', 'airbus_6138', 'vistara', '11:30:00', '09:00:00', '02:30:00', 'Chennai', 'Kolkata', 9200, 7600, 8800, 'domestic'),
('fl349', 'airbus_6141', 'airindia', '10:30:00', '08:00:00', '02:30:00', 'Chennai', 'Kolkata', 9000, 7000, 8000, 'domestic'),
('fl411', 'airbus_7123', 'indigo', '06:20:00', '04:00:00', '02:20:00', 'Delhi', 'Chennai', 5900, 3200, 4800, 'domestic'),
('fl412', 'airbus_7124', 'spicejet', '10:00:00', '08:00:00', '02:00:00', 'Delhi', 'Chennai', 6000, 4200, 5800, 'domestic'),
('fl413', 'airbus_7125', 'vistara', '09:20:00', '07:00:00', '02:20:00', 'Delhi', 'Chennai', 6600, 4200, 5800, 'domestic'),
('fl414', 'airbus_7126', 'airasia', '03:30:00', '01:00:00', '02:30:00', 'Delhi', 'Chennai', 7100, 5260, 6800, 'domestic'),
('fl415', 'airbus_7128', 'indigo', '02:20:00', '04:00:00', '06:20:00', 'Chennai', 'Delhi', 6900, 4200, 5800, 'domestic'),
('fl416', 'airbus_7129', 'spicejet', '09:20:00', '07:00:00', '02:20:00', 'Chennai', 'Delhi', 6800, 3500, 4600, 'domestic'),
('fl417', 'airbus_7130', 'airindia', '02:30:00', '12:00:00', '02:30:00', 'Chennai', 'Delhi', 7900, 5200, 6800, 'domestic'),
('fl418', 'airbus_7131', 'airasia', '04:25:00', '02:00:00', '02:25:00', 'Chennai', 'Delhi', 6000, 4000, 5000, 'domestic'),
('fl419', 'airbus_7132', 'indigo', '04:10:00', '03:00:00', '01:10:00', 'Hyderabad', 'Bangalore', 3500, 1500, 2500, 'domestic'),
('fl420', 'airbus_7133', 'spicejet', '05:10:00', '04:00:00', '01:10:00', 'Bangalore', 'Hyderabad', 3500, 1500, 2500, 'domestic'),
('fl421', 'airbus_7134', 'indigo', '06:25:00', '04:00:00', '02:25:00', 'Gujarat', 'Kerala', 6500, 4500, 5500, 'domestic'),
('fl422', 'airbus_7135', 'indigo', '08:45:00', '04:00:00', '04:45:00', 'Rajasthan', 'Punjab', 6500, 4500, 5500, 'domestic'),
('fl522', 'airbus_6133', 'airasia', '17:30:00', '15:00:00', '02:30:00', 'Kolkata', 'Chennai', 8650, 6400, 7080, 'domestic'),
('fl526', 'airbus_8145', 'airindia', '17:00:00', '14:50:00', '02:10:00', 'Kolkata', 'Hyderabad', 7000, 5800, 6500, 'domestic'),
('fl527', 'airbus_8144', 'spicejet', '06:20:00', '04:00:00', '02:20:00', 'Kolkata', 'Hyderabad', 7500, 5600, 6800, 'domestic'),
('fl529', 'airbus_6138', 'indigo', '18:50:00', '16:20:00', '02:30:00', 'Kolkata', 'Chennai', 9000, 7000, 8000, 'domestic'),
('fl530', 'airbus_6139', 'vistara', '12:00:00', '11:00:00', '01:00:00', 'Kolkata', 'Chennai', 8600, 6500, 7500, 'domestic'),
('fl532', 'airbus_6140', 'vistara', '12:00:00', '11:00:00', '01:00:00', 'Kolkata', 'Delhi', 8700, 6600, 7100, 'domestic'),
('fl533', 'airbus_6141', 'indigo', '10:00:00', '09:00:00', '01:00:00', 'Kolkata', 'Delhi', 8100, 5200, 3100, 'domestic'),
('fl500', 'airbus_6145', 'vistara', '12:00:00', '10:30:00', '01:30:00', 'Kolkata', 'Bangalore', 8900, 6100, 7000, 'domestic'),
('fl550', 'airbus_6150', 'spicejet', '10:30:00', '08:30:00', '02:00:00', 'Kolkata', 'Bangalore', 8200, 6100, 7800, 'domestic'),
('fl444', 'airbus_6444', 'indigo', '12:00:00', '11:00:00', '01:00:00', 'Kolkata', 'Kerala', 7700, 5600, 6100, 'domestic'),
('fl446', 'airbus_6446', 'vistara', '15:00:00', '13:00:00', '02:00:00', 'Kolkata', 'Kerala', 6700, 4600, 5600, 'domestic'),
('fl200', 'airbus_6001', 'indigo', '15:00:00', '13:00:00', '02:00:00', 'Kolkata', 'Gujarat', 6200, 4200, 4600, 'domestic'),
('fl135', 'airbus_6102', 'vistara', '13:30:00', '12:00:00', '01:30:00', 'Kolkata', 'Gujarat', 6600, 4500, 4800, 'domestic'),
('fl202', 'airbus_6202', 'spicejet', '03:00:00', '01:00:00', '02:00:00', 'Kolkata', 'Rajasthan', 7200, 6200, 5500, 'domestic'),
('fl620', 'airbus_6220', 'airasia', '04:25:00', '02:00:00', '02:25:00', 'Mumbai', 'Kolkata', 6000, 4000, 5000, 'domestic'),
('fl625', 'airbus_6220', 'airindia', '12:25:00', '10:00:00', '02:25:00', 'Mumbai', 'Kolkata', 6000, 4000, 5000, 'domestic'),
('fl663', 'airbus_6131', 'spicejet', '04:00:00', '02:00:00', '03:00:00', 'Mumbai', 'Chennai', 6030, 4200, 5400, 'domestic'),
('fl636', 'airbus_6233', 'spicejet', '01:40:00', '11:00:00', '02:40:00', 'Mumbai', 'Chennai', 6030, 4200, 5400, 'domestic'),
('fl686', 'airbus_6137', 'indigo', '02:25:00', '00:00:00', '02:25:00', 'Mumbai', 'Chennai', 6030, 4200, 5400, 'domestic'),
('fl662', 'airbus_5531', 'airasia', '04:25:00', '02:00:00', '02:25:00', 'Mumbai', 'Delhi', 5100, 4100, 5400, 'domestic'),
('fl689', 'airbus_5509', 'airindia', '06:40:00', '04:00:00', '02:40:00', 'Mumbai', 'Delhi', 5100, 4100, 5400, 'domestic'),
('fl656', 'airbus_9831', 'indigo', '15:25:00', '13:00:00', '02:25:00', 'Mumbai', 'Rajasthan', 6000, 4000, 5000, 'domestic'),
('fl680', 'airbus_9871', 'spicejet', '03:25:00', '01:00:00', '02:25:00', 'Mumbai', 'Rajasthan', 6000, 4000, 5000, 'domestic'),
('fl777', 'airbus_4339', 'airasia', '08:25:00', '05:00:00', '03:25:00', 'Mumbai', 'Punjab', 7200, 6400, 4800, 'domestic'),
('fl798', 'airbus_4376', 'airindia', '04:25:00', '02:00:00', '02:25:00', 'Mumbai', 'Punjab', 7200, 6400, 4800, 'domestic'),
('fl702', 'airbus_4881', 'indigo', '07:50:00', '05:30:00', '02:20:00', 'Mumbai', 'Punjab', 7200, 6400, 4800, 'domestic'),
('fl667', 'airbus_6631', 'spicejet', '04:25:00', '02:00:00', '02:25:00', 'Mumbai', 'Hyderabad', 7000, 5000, 5000, 'domestic'),
('fl558', 'airbus_8222', 'airasia', '03:50:00', '02:00:00', '01:50:00', 'Mumbai', 'Bangalore', 8000, 3500, 4000, 'domestic'),
('fl595', 'airbus_8299', 'vistara', '06:25:00', '03:00:00', '03:25:00', 'Mumbai', 'Bangalore', 8000, 3500, 4000, 'domestic'),
('fl855', 'airbus_8200', 'vistara', '16:25:00', '14:00:00', '02:25:00', 'Mumbai', 'Bangalore', 8000, 3500, 4000, 'domestic'),
('fl921', 'airbus_2931', 'airasia', '02:30:00', '00:00:00', '02:30:00', 'Mumbai', 'Kerala', 6200, 3800, 5500, 'domestic'),
('fl023', 'airbus_1931', 'airindia', '04:45:00', '02:00:00', '02:45:00', 'Mumbai', 'Gujarat', 6600, 4400, 5500, 'domestic'),
('fl099', 'airbus_1932', 'vistara', '08:10:00', '06:00:00', '02:10:00', 'Mumbai', 'Gujarat', 7200, 5500, 4300, 'domestic'),
('fl025', 'airbus_1933', 'indigo', '09:30:00', '07:00:00', '02:30:00', 'Mumbai', 'Gujarat', 6900, 4500, 5500, 'domestic'),
('fl026', 'airbus_1936', 'spicejet', '11:25:00', '09:00:00', '02:25:00', 'Mumbai', 'Gujarat', 6600, 4600, 4900, 'domestic'),
('fl199', 'airbus_a391', 'indigo', '04:30:00', '02:00:00', '02:30:00', 'Gujarat', 'Mumbai', 6000, 2000, 4000, 'domestic'),
('fl110', 'airbus_c132', 'spicejet', '05:00:00', '03:00:00', '02:00:00', 'Mumbai', 'Gujarat', 6000, 2000, 4000, 'domestic'),
('fl155', 'airbus_s320', 'vistara', '08:25:00', '06:25:00', '02:00:00', 'Gujarat', 'Delhi', 9000, 6000, 7000, 'domestic'),
('fl197', 'airbus_a485', 'indigo', '05:25:00', '03:25:00', '02:00:00', 'Delhi', 'Gujarat', 9000, 6000, 7000, 'domestic'),
('fl180', 'airbus_s399', 'Indigo', '14:49:00', '13:50:00', '01:50:00', 'Gujarat', 'Rajasthan', 4000, 2000, 3000, 'domestic'),
('fl134', 'airbus_v678', 'indigo', '11:49:00', '10:50:00', '01:50:00', 'Rajasthan', 'Gujarat', 4000, 2000, 3000, 'domestic'),
('fl244', 'airbus_6000', 'airindia', '08:00:00', '10:30:00', '02:30:00', 'Chennai', 'Gujarat', 9000, 7000, 8000, 'domestic'),
('fl363', 'airbus_6133', 'airasia', '10:30:00', '08:00:00', '02:30:00', 'Gujarat', 'Chennai', 9000, 7000, 8000, 'domestic'),
('fl399', 'airbus_6135', 'indigo', '04:30:00', '02:00:00', '02:30:00', 'Gujarat', 'Bangalore', 8900, 6300, 7600, 'domestic'),
('fl948', 'airbus_7838', 'vistara', '11:30:00', '09:00:00', '02:30:00', 'Bangalore', 'Gujarat', 9200, 7600, 8800, 'domestic'),
('fl749', 'airbus_7141', 'airindia', '10:30:00', '08:00:00', '02:30:00', 'Rajasthan', 'Kolkata', 9000, 7000, 8000, 'domestic'),
('fl711', 'airbus_7121', 'indigo', '06:20:00', '04:00:00', '02:20:00', 'Kolkata', 'Rajasthan', 5900, 3200, 4800, 'domestic'),
('fl402', 'airbus_7127', 'spicejet', '10:00:00', '08:00:00', '02:00:00', 'Rajasthan', 'Delhi', 6000, 4200, 5800, 'domestic'),
('fl210', 'airbus_a391', 'indigo', '04:30:00', '02:00:00', '02:30:00', 'Rajasthan', 'Mumbai', 6000, 2000, 4000, 'domestic'),
('fl209', 'airbus_c132', 'spicejet', '05:00:00', '03:00:00', '02:00:00', 'Mumbai', 'Rajasthan', 6000, 2000, 4000, 'domestic'),
('fl458', 'airbus_s320', 'vistara', '08:25:00', '06:25:00', '02:00:00', 'Rajasthan', 'Punjab', 9000, 6000, 7000, 'domestic'),
('fl560', 'airbus_c102', 'spicejet', '05:00:00', '03:00:00', '02:00:00', 'Gujarat', 'Rajasthan', 6000, 2000, 4000, 'domestic'),
('fl545', 'airbus_s329', 'vistara', '08:25:00', '06:25:00', '02:00:00', 'Rajasthan', 'Gujarat', 9000, 6000, 7000, 'domestic'),
('fl027', 'airbus_1937', 'indigo', '01:00:00', '11:00:00', '02:00:00', 'Bangalore', 'Mumbai', 4700, 2700, 3700, 'domestic'),
('fl028', 'airbus_1938', 'spicejet', '11:35:00', '09:00:00', '02:35:00', 'Bangalore', 'Kolkata', 5600, 3600, 4600, 'domestic'),
('fl029', 'airbus_1939', 'airasia', '10:00:00', '09:00:00', '01:00:00', 'Bangalore', 'Chennai', 8900, 6900, 7900, 'domestic'),
('fl030', 'airbus_1940', 'indigo', '07:10:00', '04:30:00', '02:40:00', 'Bangalore', 'Delhi', 8900, 6900, 7900, 'domestic'),
('fl031', 'airbus_1941', 'indigo', '08:35:00', '07:25:00', '01:10:00', 'Bangalore', 'Hyderabad', 3200, 1200, 2200, 'domestic'),
('fl032', 'airbus_1942', 'indigo', '13:25:00', '12:20:00', '01:05:00', 'Bangalore', 'Kerala', 3200, 1200, 2200, 'domestic'),
('fl033', 'airbus_1943', 'indigo', '14:20:00', '12:15:00', '02:05:00', 'Bangalore', 'Gujarat', 4200, 2200, 3200, 'domestic'),
('fl035', 'airbus_1945', 'airasia', '10:40:00', '07:55:00', '02:45:00', 'Bangalore', 'Rajasthan', 6500, 4500, 5500, 'domestic'),
('fl036', 'airbus_1946', 'indigo', '03:30:00', '02:00:00', '01:30:00', 'Hyderabad', 'Mumbai', 3600, 1600, 2600, 'domestic'),
('fl037', 'airbus_1947', 'indigo', '01:05:00', '11:00:00', '01:30:00', 'Hyderabad', 'Kolkata', 5500, 3500, 4500, 'domestic'),
('fl039', 'airbus_1949', 'spicejet', '10:10:00', '09:00:00', '01:10:00', 'Hyderabad', 'Chennai', 3000, 1000, 2000, 'domestic'),
('fl390', 'airbus_1949', 'vistara', '08:55:00', '07:00:00', '01:55:00', 'Hyderabad', 'Delhi', 3000, 1000, 2000, 'domestic'),
('fl040', 'airbus_1950', 'indigo', '01:00:00', '11:50:00', '01:10:00', 'Hyderabad', 'Bangalore', 4000, 2000, 3000, 'domestic'),
('fl041', 'airbus_1951', 'indigo', '12:45:00', '11:00:00', '01:45:00', 'Hyderabad', 'Kerala', 5000, 3000, 4000, 'domestic'),
('fl042', 'airbus_1952', 'indigo', '11:45:00', '10:00:00', '01:45:00', 'Hyderabad', 'Gujarat', 5490, 3490, 4490, 'domestic'),
('fl043', 'airbus_1953', 'indigo', '11:45:00', '10:00:00', '01:45:00', 'Hyderabad', 'Punjab', 5490, 3490, 4490, 'domestic'),
('fl044', 'airbus_1954', 'indigo', '12:30:00', '09:25:00', '03:05:00', 'Bangalore', 'Punjab', 12000, 10000, 11000, 'domestic'),
('fl045', 'airbus_1955', 'indigo', '07:20:00', '05:20:00', '02:00:00', 'Hyderabad', 'Rajasthan', 4800, 2800, 3800, 'domestic'),
('fl897', 'airbus_a095', 'spicejet', '12:25:00', '10:25:00', '02:00:00', 'Delhi', 'Kolkata', 8900, 6800, 7200, 'domestic'),
('fl877', 'airbus_a595', 'spicejet', '12:25:00', '10:25:00', '02:00:00', 'Delhi', 'Rajasthan', 8900, 6800, 7200, 'domestic'),
('fl867', 'airbus_a485', 'spicejet', '12:25:00', '10:25:00', '02:00:00', 'Delhi', 'Kerala', 8900, 6800, 7200, 'domestic'),
('fl807', 'airbus_a490', 'spicejet', '12:25:00', '10:25:00', '02:00:00', 'Delhi', 'Bangalore', 8900, 6800, 7200, 'domestic'),
('fl797', 'airbus_a499', 'spicejet', '12:25:00', '10:25:00', '02:00:00', 'Delhi', 'Mumbai', 8900, 6800, 7200, 'domestic'),
('fl857', 'airbus_a496', 'spicejet', '12:25:00', '10:25:00', '02:00:00', 'Delhi', 'Punjab', 8900, 6800, 7200, 'domestic'),
('fl097', 'airbus_a495', 'spicejet', '03:00:00', '00:00:00', '03:00:00', 'Delhi', 'Rajasthan', 8900, 6800, 7200, 'domestic');

-- --------------------------------------------------------

--
-- Table structure for table `flight_details`
--

CREATE TABLE `flight_details` (
  `sl_no` int(10) NOT NULL,
  `source` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `trip_type` varchar(30) NOT NULL,
  `class_type` varchar(30) NOT NULL,
  `departure_date` date NOT NULL,
  `return_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flight_details`
--

INSERT INTO `flight_details` (`sl_no`, `source`, `destination`, `trip_type`, `class_type`, `departure_date`, `return_date`) VALUES
(91, 'Kolkata', 'Mumbai', 'oneway', 'economy', '2023-07-07', '0000-00-00'),
(92, 'Kolkata', 'Mumbai', 'oneway', 'business', '2023-07-07', '0000-00-00'),
(93, 'Kolkata', 'Mumbai', 'oneway', 'business', '2023-07-22', '0000-00-00'),
(100, 'Kolkata', 'Mumbai', 'oneway', 'economy', '2023-07-22', '0000-00-00'),
(101, 'Delhi', 'Hyderabad', 'oneway', 'economy', '2023-07-14', '0000-00-00'),
(102, 'Kolkata', 'Mumbai', 'oneway', 'business', '2023-07-08', '0000-00-00'),
(103, 'Kolkata', 'Mumbai', 'oneway', 'economy', '2023-07-21', '0000-00-00'),
(104, 'Kolkata', 'Mumbai', 'oneway', 'business', '2023-07-20', '0000-00-00'),
(105, 'Kolkata', 'Chennai', 'oneway', 'economy', '2023-07-11', '0000-00-00'),
(106, 'Kolkata', 'Mumbai', 'oneway', 'economy', '2023-07-11', '0000-00-00'),
(107, 'Kolkata', 'Mumbai', 'oneway', 'economy', '2023-07-11', '0000-00-00'),
(108, 'Kolkata', 'Mumbai', 'oneway', 'economy', '2023-07-11', '0000-00-00'),
(109, 'Kolkata', 'Mumbai', 'oneway', 'business', '2023-07-12', '0000-00-00'),
(110, 'Kolkata', 'Mumbai', 'oneway', 'economy', '2023-07-12', '0000-00-00'),
(111, 'Kolkata', 'Mumbai', 'oneway', 'economy', '2023-07-27', '0000-00-00'),
(112, 'Kolkata', 'Mumbai', 'oneway', 'business', '2023-07-28', '0000-00-00'),
(113, 'Kolkata', 'Mumbai', 'oneway', 'primary-economy', '2023-07-28', '0000-00-00'),
(114, 'Kolkata', 'Mumbai', 'oneway', 'business', '2023-07-29', '0000-00-00'),
(115, 'Kolkata', 'Mumbai', 'oneway', 'economy', '2023-07-29', '0000-00-00'),
(116, 'Mumbai', 'Kolkata', 'oneway', 'business', '2023-08-12', '0000-00-00'),
(117, 'Kolkata', 'Mumbai', 'oneway', 'business', '2023-08-25', '0000-00-00'),
(118, 'Delhi', 'Punjab', 'oneway', 'business', '2023-08-25', '0000-00-00'),
(119, 'Delhi', 'Kolkata', 'oneway', 'business', '2023-08-25', '0000-00-00'),
(120, 'Hyderabad', 'Kolkata', 'oneway', 'business', '2023-08-25', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `sl_no` int(10) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sl_no`, `email`, `password`) VALUES
(1, 'dastitili@gmail.com', 'Abc@123'),
(2, 'abc@gmail.com', '87ui8'),
(4, 'intelligentfool08@gmail.com', 'sam068'),
(5, 'intelligentfool08@gmail.com', 'Sam123'),
(6, 'intelligentfool08@gmail.com', 'Sam@0802');

-- --------------------------------------------------------

--
-- Table structure for table `passenger1`
--

CREATE TABLE `passenger1` (
  `sl_no` int(10) NOT NULL,
  `passenger_id` varchar(30) NOT NULL,
  `flight_id` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `passenger_type` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `passenger1`
--

INSERT INTO `passenger1` (`sl_no`, `passenger_id`, `flight_id`, `name`, `passenger_type`, `gender`, `dat`) VALUES
(102, '1$n%u7mz', 'fl100', 'sam', 'adult', 'male', '2023-05-06'),
(103, '1$n%u7mz', 'fl100', 'antarita ', 'infant', 'male', '2023-05-06'),
(104, '1$n%u7mz', 'fl100', 'samadrita', 'senior-citizen', 'others', '2023-05-06'),
(167, '0bwe&alg', 'fl100', 'akash', 'adult', 'male', '2023-07-06'),
(168, '0bwe&alg', 'fl100', 'ruma', 'adult', 'male', '2023-07-06'),
(189, 's8k2#om1', 'fl112', 'abhi', 'adult', 'male', '2023-07-08'),
(190, 'fja&sdbp', 'fl115', 'Aditya Roy Singhania', 'adult', 'male', '2023-07-08'),
(191, ')h$yawde', 'fl100', 'Swastika Mukherjee', 'adult', 'female', '2023-07-08'),
(192, 'inkeruht', 'fl100', 'Saswati Mukherjee', 'adult', 'female', '2023-07-08'),
(193, 'puz6no04', 'fl100', 'abhi', 'adult', 'male', '2023-07-08'),
(194, 'puz6no04', 'fl100', 'Saswati Mukherjee', 'adult', 'female', '2023-07-08'),
(195, '3anxz5pe', 'fl100', 'abhi', 'adult', 'male', '2023-07-10'),
(196, '7h&v3xq$', 'fl100', 'abhi', 'adult', 'male', '2023-07-10'),
(197, 'v$giu&a(', 'fl100', 'abhi', 'adult', 'male', '2023-07-11'),
(198, 'v$giu&a(', 'fl100', 'Swastika Mukherjee', 'infant', 'female', '2023-07-11'),
(199, 'v$giu&a(', 'fl100', 'Pratyusha Roy', 'senior-citizen', 'female', '2023-07-11'),
(200, '%x5$2&qz', 'fl100', 'Abhi Roy', 'adult', 'male', '2023-07-11'),
(201, '%x5$2&qz', 'fl100', 'Swastika Mukherjee', 'infant', 'female', '2023-07-11'),
(202, '%x5$2&qz', 'fl100', 'Sweta Dutta', 'senior-citizen', 'female', '2023-07-11'),
(203, 'd76q@u)*', 'fl100', 'Abhi Roy', 'adult', 'male', '2023-07-11'),
(204, 'z)t@3n7y', 'fl100', 'abhi', 'adult', 'male', '2023-07-28'),
(205, 'z)t@3n7y', 'fl100', 'lily', 'adult', 'female', '2023-07-28'),
(206, '(rviw*%g', 'fl100', 'Aditya Roy Singhania', 'adult', 'male', '2023-07-29'),
(207, 'x7i!&qck', 'fl100', 'abhi', 'adult', 'male', '2023-08-05'),
(208, 'e)(to8mf', 'fl037', 'abhi', 'adult', 'male', '2023-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `session_id` varchar(20) NOT NULL,
  `seat_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`session_id`, `seat_id`, `user_id`) VALUES
('fl100', 'IA1', 'c2wt^p8e'),
('fl100', 'IA2', 'c2wt^p8e'),
('fl100', 'IA3', 'c2wt^p8e'),
('fl115', 'VA1', '1cyzj6@i'),
('fl115', 'VA2', '1cyzj6@i'),
('fl115', 'VD1', '1cyzj6@i'),
('fl100', 'IB1', '#u*gitz1'),
('fl112', 'SA1', '7zjd&8w$'),
('fl100', 'IB2', '6a#b)htc'),
('fl112', 'SA2', 'cu6keh7('),
('fl100', 'IB3', '3@gz)2sf'),
('fl100', 'IC1', ')^!tgqns'),
('fl112', 'SA3', 'qvx^zocd'),
('fl100', 'IC2', 'x#(71mk5'),
('fl100', 'IC2', 'x#(71mk5'),
('fl100', 'IC2', 'x#(71mk5'),
('fl100', 'IC2', 'x#(71mk5'),
('fl100', 'IC2', 'x#(71mk5'),
('fl100', 'IC2', 'x#(71mk5'),
('fl100', 'IC2', 'x#(71mk5'),
('fl100', 'IC2', 'x#(71mk5'),
('fl100', 'IC2', 'x#(71mk5'),
('fl100', 'IC2', 'x#(71mk5'),
('fl100', 'IC2', 'x#(71mk5'),
('fl100', 'IC2', 'x#(71mk5'),
('fl100', 'IC2', 'x#(71mk5'),
('fl100', 'IC2', 'x#(71mk5'),
('fl100', 'IC2', 'x#(71mk5'),
('fl100', 'IC2', 'x#(71mk5'),
('fl100', 'IC2', 'x#(71mk5'),
('fl100', 'IC2', 'x#(71mk5'),
('fl100', 'IC2', 'x#(71mk5'),
('fl100', 'IC2', 'x#(71mk5'),
('fl100', 'IC3', 'x#(71mk5'),
('fl100', 'IC3', 'x#(71mk5'),
('fl100', 'IC3', 'x#(71mk5'),
('fl100', 'IC3', 'x#(71mk5'),
('fl100', 'IC3', 'x#(71mk5'),
('fl100', 'IC3', 'x#(71mk5'),
('fl100', 'IC3', 'x#(71mk5'),
('fl100', 'IC3', 'x#(71mk5'),
('fl100', 'IC3', 'x#(71mk5'),
('fl100', 'IC3', 'x#(71mk5'),
('fl100', 'IC3', 'x#(71mk5'),
('fl100', 'IC3', 'x#(71mk5'),
('fl100', 'IC3', 'x#(71mk5'),
('fl100', 'ID1', '#f35txaj'),
('fl112', 'SB1', 's8k2#om1'),
('fl115', 'VA3', 'fja&sdbp'),
('fl100', 'ID2', ')h$yawde'),
('fl100', 'IE1', 'inkeruht'),
('fl100', 'IE2', 'puz6no04'),
('fl100', 'IE3', 'puz6no04'),
('fl100', 'ID3', '3anxz5pe'),
('fl100', 'IF1', '7h&v3xq$'),
('fl100', 'IF2', 'v$giu&a('),
('fl100', 'IF3', 'v$giu&a('),
('fl100', 'IG1', 'v$giu&a('),
('fl100', 'IG2', '%x5$2&qz'),
('fl100', 'IG3', '%x5$2&qz'),
('fl100', 'IH1', '%x5$2&qz'),
('fl100', 'IH2', 'd76q@u)*'),
('fl100', 'IH3', 'z)t@3n7y'),
('fl100', 'II1', 'z)t@3n7y'),
('fl100', 'II2', '(rviw*%g');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `seat_id` varchar(16) NOT NULL,
  `room_id` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`seat_id`, `room_id`) VALUES
('SA1', 'ROOM-B'),
('SA2', 'ROOM-B'),
('SA3', 'ROOM-B'),
('SB1', 'ROOM-B'),
('SB2', 'ROOM-B'),
('SB3', 'ROOM-B'),
('SC1', 'ROOM-B'),
('SC2', 'ROOM-B'),
('SC3', 'ROOM-B'),
('SD1', 'ROOM-B'),
('SD2', 'ROOM-B'),
('SD3', 'ROOM-B'),
('SE1', 'ROOM-B'),
('SE2', 'ROOM-B'),
('SE3', 'ROOM-B'),
('SF1', 'ROOM-B'),
('SF2', 'ROOM-B'),
('SF3', 'ROOM-B'),
('SG1', 'ROOM-B'),
('SG2', 'ROOM-B'),
('SG3', 'ROOM-B'),
('SH1', 'ROOM-B'),
('SH2', 'ROOM-B'),
('SH3', 'ROOM-B'),
('SI1', 'ROOM-B'),
('SI2', 'ROOM-B'),
('SI3', 'ROOM-B'),
('SJ1', 'ROOM-B'),
('SJ2', 'ROOM-B'),
('SJ3', 'ROOM-B'),
('SK1', 'ROOM-B'),
('SK2', 'ROOM-B'),
('SK3', 'ROOM-B'),
('SL1', 'ROOM-B'),
('SL2', 'ROOM-B'),
('SL3', 'ROOM-B'),
('SM1', 'ROOM-B'),
('SM2', 'ROOM-B'),
('SM3', 'ROOM-B'),
('SN1', 'ROOM-B'),
('SN2', 'ROOM-B'),
('SN3', 'ROOM-B'),
('SO1', 'ROOM-B'),
('SO2', 'ROOM-B'),
('SO3', 'ROOM-B'),
('SP1', 'ROOM-B'),
('SP2', 'ROOM-B'),
('SP3', 'ROOM-B'),
('SQ1', 'ROOM-B'),
('SQ2', 'ROOM-B'),
('SQ3', 'ROOM-B'),
('IA1', 'ROOM-A'),
('IA2', 'ROOM-A'),
('IA3', 'ROOM-A'),
('IB1', 'ROOM-A'),
('IB2', 'ROOM-A'),
('IB3', 'ROOM-A'),
('IC1', 'ROOM-A'),
('IC2', 'ROOM-A'),
('IC3', 'ROOM-A'),
('ID1', 'ROOM-A'),
('ID2', 'ROOM-A'),
('ID3', 'ROOM-A'),
('IE1', 'ROOM-A'),
('IE2', 'ROOM-A'),
('IE3', 'ROOM-A'),
('IF1', 'ROOM-A'),
('IF2', 'ROOM-A'),
('IF3', 'ROOM-A'),
('IG1', 'ROOM-A'),
('IG2', 'ROOM-A'),
('IG3', 'ROOM-A'),
('IH1', 'ROOM-A'),
('IH2', 'ROOM-A'),
('IH3', 'ROOM-A'),
('II1', 'ROOM-A'),
('II2', 'ROOM-A'),
('II3', 'ROOM-A'),
('IJ1', 'ROOM-A'),
('IJ2', 'ROOM-A'),
('IJ3', 'ROOM-A'),
('IK1', 'ROOM-A'),
('IK2', 'ROOM-A'),
('IK3', 'ROOM-A'),
('IL1', 'ROOM-A'),
('IL2', 'ROOM-A'),
('IL3', 'ROOM-A'),
('IM1', 'ROOM-A'),
('IM2', 'ROOM-A'),
('IM3', 'ROOM-A'),
('IN1', 'ROOM-A'),
('IN2', 'ROOM-A'),
('IN3', 'ROOM-A'),
('IO1', 'ROOM-A'),
('IO2', 'ROOM-A'),
('IO3', 'ROOM-A'),
('IP1', 'ROOM-A'),
('IP2', 'ROOM-A'),
('IP3', 'ROOM-A'),
('IQ1', 'ROOM-A'),
('IQ2', 'ROOM-A'),
('IQ3', 'ROOM-A'),
('VA1', 'ROOM-C'),
('VA2', 'ROOM-C'),
('VA3', 'ROOM-C'),
('VB1', 'ROOM-C'),
('VB2', 'ROOM-C'),
('VB3', 'ROOM-C'),
('VC1', 'ROOM-C'),
('VC2', 'ROOM-C'),
('VC3', 'ROOM-C'),
('VD1', 'ROOM-C'),
('VD2', 'ROOM-C'),
('VD3', 'ROOM-C'),
('VE1', 'ROOM-C'),
('VE2', 'ROOM-C'),
('VE3', 'ROOM-C'),
('VF1', 'ROOM-C'),
('VF2', 'ROOM-C'),
('VF3', 'ROOM-C'),
('VG1', 'ROOM-C'),
('VG2', 'ROOM-C'),
('VG3', 'ROOM-C'),
('VH1', 'ROOM-C'),
('VH2', 'ROOM-C'),
('VH3', 'ROOM-C'),
('VI1', 'ROOM-C'),
('VI2', 'ROOM-C'),
('VI3', 'ROOM-C'),
('VJ1', 'ROOM-C'),
('VJ2', 'ROOM-C'),
('VJ3', 'ROOM-C'),
('VK1', 'ROOM-C'),
('VK2', 'ROOM-C'),
('VK3', 'ROOM-C'),
('VL1', 'ROOM-C'),
('VL2', 'ROOM-C'),
('VL3', 'ROOM-C'),
('VM1', 'ROOM-C'),
('VM2', 'ROOM-C'),
('VM3', 'ROOM-C'),
('VN1', 'ROOM-C'),
('VN2', 'ROOM-C'),
('VN3', 'ROOM-C'),
('VO1', 'ROOM-C'),
('VO2', 'ROOM-C'),
('VO3', 'ROOM-C'),
('VP1', 'ROOM-C'),
('VP2', 'ROOM-C'),
('VP3', 'ROOM-C'),
('VQ1', 'ROOM-C'),
('VQ2', 'ROOM-C'),
('VQ3', 'ROOM-C');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `session_id` varchar(20) NOT NULL,
  `room_id` varchar(16) NOT NULL,
  `session_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_id`, `room_id`, `session_date`) VALUES
('1', 'ROOM-A', '2077-06-05 08:00:00'),
('fl100', 'ROOM-A', '2023-07-05 10:22:12'),
('fl112', 'ROOM-B', '2023-07-05 10:22:12'),
('fl115', 'ROOM-C', '2023-07-05 10:22:12');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `sl_no` int(10) NOT NULL,
  `ticket_id` varchar(10) NOT NULL,
  `passenger_id` varchar(30) DEFAULT NULL,
  `flight_id` varchar(10) DEFAULT NULL,
  `trip_type` varchar(30) DEFAULT NULL,
  `source` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `class` varchar(30) DEFAULT NULL,
  `seat_no` varchar(30) DEFAULT NULL,
  `cost` int(10) DEFAULT NULL,
  `departure_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `booking_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`sl_no`, `ticket_id`, `passenger_id`, `flight_id`, `trip_type`, `source`, `destination`, `class`, `seat_no`, `cost`, `departure_date`, `return_date`, `booking_date`) VALUES
(151, 'pid-64a5d6', 'cu6keh7(', 'fl112', 'oneway', 'Kolkata', 'Mumbai', 'business', NULL, 7000, '2023-07-07', '0000-00-00', '2023-07-06'),
(152, 'pid-64a6ce', '3@gz)2sf', 'fl100', 'oneway', 'Kolkata', 'Mumbai', 'economy', NULL, 6000, '2023-07-07', '0000-00-00', '2023-07-07'),
(153, 'pid-64a7a5', ')^!tgqns', 'fl100', 'oneway', 'Kolkata', 'Mumbai', 'economy', NULL, 6000, '2023-07-08', '0000-00-00', '2023-07-08'),
(157, 'pid-64a7f6', 's8k2#om1', 'fl112', 'oneway', 'Kolkata', 'Mumbai', 'economy', NULL, 7000, '2023-07-22', '0000-00-00', '2023-07-08'),
(158, 'pid-64a7f7', 'fja&sdbp', 'fl115', 'oneway', 'Delhi', 'Hyderabad', 'economy', NULL, 9000, '2023-07-14', '0000-00-00', '2023-07-08'),
(159, 'pid-64a7f8', ')h$yawde', 'fl100', 'oneway', 'Kolkata', 'Mumbai', 'business', NULL, 6000, '2023-07-08', '0000-00-00', '2023-07-08'),
(160, 'pid-64a800', 'inkeruht', 'fl100', 'oneway', 'Kolkata', 'Mumbai', 'economy', NULL, 6000, '2023-07-21', '0000-00-00', '2023-07-08'),
(161, 'pid-64a854', 'puz6no04', 'fl100', 'oneway', 'Kolkata', 'Mumbai', 'business', NULL, 12000, '2023-07-20', '0000-00-00', '2023-07-08'),
(162, 'pid-64ab17', '3anxz5pe', 'fl100', 'oneway', 'Kolkata', 'Mumbai', 'economy', NULL, 6000, '2023-07-11', '0000-00-00', '2023-07-10'),
(163, 'pid-64ab19', '7h&v3xq$', 'fl100', 'oneway', 'Kolkata', 'Mumbai', 'economy', NULL, 6000, '2023-07-11', '0000-00-00', '2023-07-10'),
(164, 'pid-64ab19', '7h&v3xq$', 'fl100', 'oneway', 'Kolkata', 'Mumbai', 'economy', NULL, 6000, '2023-07-11', '0000-00-00', '2023-07-10'),
(165, 'pid-64ab19', '7h&v3xq$', 'fl100', 'oneway', 'Kolkata', 'Mumbai', 'economy', NULL, 6000, '2023-07-11', '0000-00-00', '2023-07-10'),
(166, 'pid-64ab19', '7h&v3xq$', 'fl100', 'oneway', 'Kolkata', 'Mumbai', 'economy', NULL, 6000, '2023-07-11', '0000-00-00', '2023-07-10'),
(167, 'pid-64ab1a', '7h&v3xq$', 'fl100', 'oneway', 'Kolkata', 'Mumbai', 'economy', NULL, 6000, '2023-07-11', '0000-00-00', '2023-07-10'),
(168, 'pid-64ab1a', '7h&v3xq$', 'fl100', 'oneway', 'Kolkata', 'Mumbai', 'economy', NULL, 6000, '2023-07-11', '0000-00-00', '2023-07-10'),
(169, 'pid-64ab1a', '7h&v3xq$', 'fl100', 'oneway', 'Kolkata', 'Mumbai', 'economy', NULL, 6000, '2023-07-11', '0000-00-00', '2023-07-10'),
(170, 'pid-64ab1a', '7h&v3xq$', 'fl100', 'oneway', 'Kolkata', 'Mumbai', 'economy', NULL, 6000, '2023-07-11', '0000-00-00', '2023-07-10'),
(171, 'pid-64ab1a', '7h&v3xq$', 'fl100', 'oneway', 'Kolkata', 'Mumbai', 'economy', NULL, 6000, '2023-07-11', '0000-00-00', '2023-07-10'),
(172, 'pid-64ab1a', '7h&v3xq$', 'fl100', 'oneway', 'Kolkata', 'Mumbai', 'economy', NULL, 6000, '2023-07-11', '0000-00-00', '2023-07-10'),
(173, 'pid-64ab83', 'v$giu&a(', 'fl100', 'oneway', 'Kolkata', 'Mumbai', 'economy', NULL, 12000, '2023-07-11', '0000-00-00', '2023-07-11'),
(174, 'pid-64ab83', 'v$giu&a(', 'fl100', 'oneway', 'Kolkata', 'Mumbai', 'economy', NULL, 12000, '2023-07-11', '0000-00-00', '2023-07-11'),
(175, 'pid-64ac2c', '%x5$2&qz', 'fl100', 'oneway', 'Kolkata', 'Mumbai', 'business', NULL, 12000, '2023-07-12', '0000-00-00', '2023-07-11'),
(176, 'pid-64ac2d', 'd76q@u)*', 'fl100', 'oneway', 'Kolkata', 'Mumbai', 'business', NULL, 6000, '2023-07-12', '0000-00-00', '2023-07-11'),
(177, 'pid-64c371', '(rviw*%g', 'fl100', 'oneway', 'Kolkata', 'Mumbai', 'business', NULL, 6000, '2023-07-29', '0000-00-00', '2023-07-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_master`
--
ALTER TABLE `customer_master`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight_details`
--
ALTER TABLE `flight_details`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `passenger1`
--
ALTER TABLE `passenger1`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `session_date` (`session_date`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `flight_details`
--
ALTER TABLE `flight_details`
  MODIFY `sl_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sl_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `passenger1`
--
ALTER TABLE `passenger1`
  MODIFY `sl_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `sl_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
