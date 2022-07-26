-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Lug 26, 2022 alle 11:04
-- Versione del server: 10.4.24-MariaDB
-- Versione PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `editortest`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `objects`
--

CREATE TABLE `objects` (
  `data_id` int(11) DEFAULT NULL,
  `data_name` varchar(19) CHARACTER SET utf8 DEFAULT NULL,
  `data_position` varchar(29) CHARACTER SET utf8 DEFAULT NULL,
  `data_salary` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `data_start_date` datetime DEFAULT NULL,
  `data_office` varchar(13) CHARACTER SET utf8 DEFAULT NULL,
  `data_extn` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `objects`
--

INSERT INTO `objects` (`data_id`, `data_name`, `data_position`, `data_salary`, `data_start_date`, `data_office`, `data_extn`) VALUES
(1, 'Tiger Nixon', 'System Architect', '$320,800', '2011-04-25 00:00:00', 'Edinburgh', 5421),
(2, 'Garrett Winters', 'Accountant', '$170,750', '2011-07-25 00:00:00', 'Tokyo', 8422),
(3, 'Ashton Cox', 'Junior Technical Author', '$86,000', '2009-01-12 00:00:00', 'San Francisco', 1562),
(4, 'Cedric Kelly', 'Senior Javascript Developer', '$433,060', '2012-03-29 00:00:00', 'Edinburgh', 6224),
(5, 'Airi Satou', 'Accountantsssss', '$162,700', '2008-11-28 00:00:00', 'Tokyo', 5407),
(6, 'Brielle Williamson', 'Integration Specialist', '$372,000', '2012-12-02 00:00:00', 'New York', 4804),
(7, 'Herrod Chandler', 'Sales Assistant', '$137,500', '2012-08-06 00:00:00', 'San Francisco', 9608),
(8, 'Rhona Davidson', 'Integration Specialist', '$327,900', '2010-10-14 00:00:00', 'Tokyo', 6200),
(9, 'Colleen Hurst', 'Javascript Developer', '$205,500', '2009-09-15 00:00:00', 'San Francisco', 2360),
(10, 'Sonya Frost', 'Software Engineer', '$103,600', '2008-12-13 00:00:00', 'Edinburgh', 1667),
(11, 'Jena Gaines', 'Office Manager', '$90,560', '2008-12-19 00:00:00', 'London', 3814),
(12, 'Quinn Flynn', 'Support Lead', '$342,000', '2013-03-03 00:00:00', 'Edinburgh', 9497),
(13, 'Charde Marshall', 'Regional Director', '$470,600', '2008-10-16 00:00:00', 'San Francisco', 6741),
(14, 'Haley Kennedy', 'Senior Marketing Designer', '$313,500', '2012-12-18 00:00:00', 'London', 3597),
(15, 'Tatyana Fitzpatrick', 'Regional Director', '$385,750', '2010-03-17 00:00:00', 'London', 1965),
(16, 'Michael Silva', 'Marketing Designer', '$198,500', '2012-11-27 00:00:00', 'London', 1581),
(17, 'Paul Byrd', 'Chief Financial Officer (CFO)', '$725,000', '2010-06-09 00:00:00', 'New York', 3059),
(18, 'Gloria Little', 'Systems Administrator', '$237,500', '2009-04-10 00:00:00', 'New York', 1721),
(19, 'Bradley Greer', 'Software Engineer', '$132,000', '2012-10-13 00:00:00', 'London', 2558),
(20, 'Dai Rios', 'Personnel Lead', '$217,500', '2012-09-26 00:00:00', 'Edinburgh', 2290),
(21, 'Jenette Caldwell', 'Development Lead', '$345,000', '2011-09-03 00:00:00', 'New York', 1937),
(22, 'Yuri Berry', 'Chief Marketing Officer (CMO)', '$675,000', '2009-06-25 00:00:00', 'New York', 6154),
(23, 'Caesar Vance', 'Pre-Sales Support', '$106,450', '2011-12-12 00:00:00', 'New York', 8330),
(24, 'Doris Wilder', 'Sales Assistant', '$85,600', '2010-09-20 00:00:00', 'Sydney', 3023),
(25, 'Angelica Ramos', 'Chief Executive Officer (CEO)', '$1,200,000', '2009-10-09 00:00:00', 'London', 5797),
(26, 'Gavin Joyce', 'Developer', '$92,575', '2010-12-22 00:00:00', 'Edinburgh', 8822),
(27, 'Jennifer Chang', 'Regional Director', '$357,650', '2010-11-14 00:00:00', 'Singapore', 9239),
(28, 'Brenden Wagner', 'Software Engineer', '$206,850', '2011-06-07 00:00:00', 'San Francisco', 1314),
(29, 'Fiona Green', 'Chief Operating Officer (COO)', '$850,000', '2010-03-11 00:00:00', 'San Francisco', 2947),
(30, 'Shou Itou', 'Regional Marketing', '$163,000', '2011-08-14 00:00:00', 'Tokyo', 8899),
(31, 'Michelle House', 'Integration Specialist', '$95,400', '2011-06-02 00:00:00', 'Sydney', 2769),
(32, 'Suki Burks', 'Developer', '$114,500', '2009-10-22 00:00:00', 'London', 6832),
(33, 'Prescott Bartlett', 'Technical Author', '$145,000', '2011-05-07 00:00:00', 'London', 3606),
(34, 'Gavin Cortez', 'Team Leader', '$235,500', '2008-10-26 00:00:00', 'San Francisco', 2860),
(35, 'Martena Mccray', 'Post-Sales support', '$324,050', '2011-03-09 00:00:00', 'Edinburgh', 8240),
(36, 'Unity Butler', 'Marketing Designer', '$85,675', '2009-12-09 00:00:00', 'San Francisco', 5384),
(37, 'Howard Hatfield', 'Office Manager', '$164,500', '2008-12-16 00:00:00', 'San Francisco', 7031),
(38, 'Hope Fuentes', 'Secretary', '$109,850', '2010-02-12 00:00:00', 'San Francisco', 6318),
(39, 'Vivian Harrell', 'Financial Controller', '$452,500', '2009-02-14 00:00:00', 'San Francisco', 9422),
(40, 'Timothy Mooney', 'Office Manager', '$136,200', '2008-12-11 00:00:00', 'London', 7580),
(41, 'Jackson Bradshaw', 'Director', '$645,750', '2008-09-26 00:00:00', 'New York', 1042),
(42, 'Olivia Liang', 'Support Engineer', '$234,500', '2011-02-03 00:00:00', 'Singapore', 2120),
(43, 'Bruno Nash', 'Software Engineer', '$163,500', '2011-05-03 00:00:00', 'London', 6222),
(44, 'Sakura Yamamoto', 'Support Engineer', '$139,575', '2009-08-19 00:00:00', 'Tokyo', 9383),
(45, 'Thor Walton', 'Developer', '$98,540', '2013-08-11 00:00:00', 'New York', 8327),
(46, 'Finn Camacho', 'Support Engineer', '$87,500', '2009-07-07 00:00:00', 'San Francisco', 2927),
(47, 'Serge Baldwin', 'Data Coordinator', '$138,575', '2012-04-09 00:00:00', 'Singapore', 8352),
(48, 'Zenaida Frank', 'Software Engineer', '$125,250', '2010-01-04 00:00:00', 'New York', 7439),
(49, 'Zorita Serrano', 'Software Engineer', '$115,000', '2012-06-01 00:00:00', 'San Francisco', 4389),
(50, 'Jennifer Acosta', 'Junior Javascript Developer', '$75,650', '2013-02-01 00:00:00', 'Edinburgh', 3431),
(51, 'Cara Stevens', 'Sales Assistant', '$145,600', '2011-12-06 00:00:00', 'New York', 3990),
(52, 'Hermione Butler', 'Regional Director', '$356,250', '2011-03-21 00:00:00', 'London', 1016),
(53, 'Lael Greer', 'Systems Administrator', '$103,500', '2009-02-27 00:00:00', 'London', 6733),
(54, 'Jonas Alexander', 'Developer', '$86,500', '2010-07-14 00:00:00', 'San Francisco', 8196),
(55, 'Shad Decker', 'Regional Director', '$183,000', '2008-11-13 00:00:00', 'Edinburgh', 6373),
(56, 'Michael Bruce', 'Javascript Developer', '$183,000', '2011-06-27 00:00:00', 'Singapore', 5384),
(57, 'Donna Snider', 'Customer Support', '$112,000', '2011-01-25 00:00:00', 'New York', 4226);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
