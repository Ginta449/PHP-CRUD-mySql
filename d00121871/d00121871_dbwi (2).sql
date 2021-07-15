-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 03:38 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d00121871_dbwi`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_email` varchar(50) NOT NULL,
  `prefix_id` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `address3` varchar(50) NOT NULL,
  `county_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `project_type_id` int(11) NOT NULL,
  `company_password` varchar(128) NOT NULL,
  `user_status` int(1) NOT NULL,
  `joined` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_email`, `prefix_id`, `phone`, `address1`, `address2`, `address3`, `county_id`, `country_id`, `project_type_id`, `company_password`, `user_status`, `joined`) VALUES
(1, 'Kids Entertainment Ltd', 'kidse@email.com', 3, 8777777, 'Disney', 'Land', 'woohoo', 34, 61, 2, '', 1, '2020-12-28 20:09:00'),
(2, 'Action Movies Ltd', 'movieland@email.com', 6, 8666666, 'action', 'island', 'gogogo', 34, 187, 1, '', 1, '2020-12-28 20:09:00'),
(4, 'Breakfast Radio', 'radiogk@email.com', 4, 566788798, 'sdefawef', 'dsvfawfe', 'dfcafawe', 24, 82, 3, '', 1, '2020-12-28 20:09:00'),
(5, 'Nightline Radio', 'nightradio@email.com', 14, 5463465, 'bfdxbdz', 'cbdfgbd', 'bfdzgb', 34, 9, 3, '', 1, '2020-12-28 20:09:00'),
(11, 'starstruck', 'starstruck@gmail.com', 73, 5555555, 'starstruck', 'road', 'twenty', 34, 34, 1, '78fb49068dbd87d40fb7a5a8dbeaee1646846b38bfbcfc2f1854c1c0649c13a0368e669ca62aaf40b2d9475fc85c91572c825a2f4856f19024b8057d275b97d1', 0, '2020-12-28 20:09:00'),
(13, 'nastajasheeTV', 'na@email.com', 3, 2222222, 'ggg', 'ggg', 'ggg', 34, 34, 2, 'adca488ddf98f6ab8222c8922f72d3fff881f7efc8db6c5ca81a9a450a098932c5725492145917dfe230b956f604ae0734e479a8e66851d98e81e796bc15060d', 1, '2020-12-31 16:38:35'),
(14, 'Ordinary', 'ordinary@email.com', 1, 1234567, 'ggg', 'ggg', 'ggg', 1, 1, 1, 'd89ac82ad6533748beb0538a9cf1e96e074453d290ab1983da180efcb3f709e316bb28c237aa31ba9924e8b069b4e814ec948ae4729b29d3f6b27c705a262ea5', 1, '2021-01-01 20:12:16'),
(15, 'honor', 'honor@email.com', 2, 0, 'sss', 'sss', 'sss', 1, 1, 1, 'a8bf037343d9859b26c3d7e970eebe48e21e138eb854dc80c978627a08a910f096905b5923f52530fd2fd99fba8757aba94ed3b115d86981c8097c9f27ee26a0', 1, '2021-01-02 12:53:09'),
(16, 'a', 'ginta6290@gmail.com', 3, 2147483647, '10 Cois Carraig', 'Doohamlet', '', 2, 2, 1, '62517ee971f9020234030d0c62294f3e3d4ff833a56d8eb14564da10b5d860b36b54122bb2e99545530c1a32a98b9cd684cdae644285cb9326b37ffa24f112a9', 1, '2021-01-02 13:08:59'),
(46, 'HappyFeet', 'happy@email.com', 7, 23456, 'snowy', 'hill', 'ocean', 34, 34, 1, '61ee7cafceb333ec29071611857e765183ec21ec8e90ae062be5b425b7bfb05fef933797a157594da4cc136756727407aaefff81f705585dd9414777dd1448dd', 1, '2021-01-03 15:14:17'),
(47, 'TIGER', 'tiger@email.com', 2, 2147483647, '10 Cois Carraig', 'Doohamlet', 'tttt', 1, 1, 2, 'f3066bbee33be2879056223133416172e1d90c09eaf1fececfc96525d04f6d14a1431a9a8ff5be7cc08aac40f01286a3acd0cb9d5fd6ecfbc058d5461b18fc67', 1, '2021-01-03 20:23:16'),
(48, 'Damite', 'dama@email.com', 4, 2147483647, '10 Cois Carraig', 'Doohamlet', '', 3, 3, 2, 'f3066bbee33be2879056223133416172e1d90c09eaf1fececfc96525d04f6d14a1431a9a8ff5be7cc08aac40f01286a3acd0cb9d5fd6ecfbc058d5461b18fc67', 1, '2021-01-04 12:46:05'),
(49, 'ginta', 'ginta@email.com', 3, 2147483647, '10 Cois Carraig', 'Doohamlet', '', 3, 3, 2, 'dac094af7e219df30784721a7af765e4f3401e23671f6ad64f67292bc011b844cd336440f1de6e634e245f527165b2f7c968c3e64132a1546f968a117f01cdda', 1, '2021-01-04 14:43:11'),
(50, 'Peppa', 'peppa@email.com', 2, 7777, 'dddd', 'dddd', '', 24, 24, 3, '61ee7cafceb333ec29071611857e765183ec21ec8e90ae062be5b425b7bfb05fef933797a157594da4cc136756727407aaefff81f705585dd9414777dd1448dd', 1, '2021-01-04 18:39:29');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'Afghanistan'),
(2, 'Albania'),
(3, 'Algeria'),
(4, 'Andorra'),
(5, 'Angola'),
(6, 'Antigua and Barbuda'),
(7, 'Argentina'),
(8, 'Armenia'),
(9, 'Australia'),
(10, 'Austria'),
(11, 'Azerbaijan'),
(12, 'Bahamas'),
(13, 'Bahrain'),
(14, 'Bangladesh'),
(15, 'Barbados'),
(16, 'Belarus'),
(17, 'Belgium'),
(18, 'Belize'),
(19, 'Benin'),
(20, 'Bhutan'),
(21, 'Bolivia'),
(22, 'Bosnia and Herzegovina'),
(23, 'Botswana'),
(24, 'Brazil'),
(25, 'Brunei'),
(26, 'Bulgaria'),
(27, 'Burkina Faso'),
(28, 'Burundi'),
(29, 'Côte d\'Ivoire'),
(30, 'Cabo Verde'),
(31, 'Cambodia'),
(32, 'Cameroon'),
(33, 'Canada'),
(34, 'Central African Republic'),
(35, 'Chad'),
(36, 'Chile'),
(37, 'China'),
(38, 'Colombia'),
(39, 'Comoros'),
(40, 'Congo (Congo-Brazzaville)'),
(41, 'Costa Rica'),
(42, 'Croatia'),
(43, 'Cuba'),
(44, 'Cyprus'),
(45, 'Czechia (Czech Republic)'),
(46, 'Democratic Republic of the Congo'),
(47, 'Denmark'),
(48, 'Djibouti'),
(49, 'Dominica'),
(50, 'Dominican Republic'),
(51, 'Ecuador'),
(52, 'Egypt'),
(53, 'El Salvador'),
(54, 'Equatorial Guinea'),
(55, 'Eritrea'),
(56, 'Estonia'),
(57, 'Eswatini (fmr. \"Swaziland\")'),
(58, 'Ethiopia'),
(59, 'Fiji'),
(60, 'Finland'),
(61, 'France'),
(62, 'Gabon'),
(63, 'Gambia'),
(64, 'Georgia'),
(65, 'Germany'),
(66, 'Ghana'),
(67, 'Greece'),
(68, 'Grenada'),
(69, 'Guatemala'),
(70, 'Guinea'),
(71, 'Guinea-Bissau'),
(72, 'Guyana'),
(73, 'Haiti'),
(74, 'Holy See'),
(75, 'Honduras'),
(76, 'Hungary'),
(77, 'Iceland'),
(78, 'India'),
(79, 'Indonesia'),
(80, 'Iran'),
(81, 'Iraq'),
(82, 'Ireland'),
(83, 'Israel'),
(84, 'Italy'),
(85, 'Jamaica'),
(86, 'Japan'),
(87, 'Jordan'),
(88, 'Kazakhstan'),
(89, 'Kenya'),
(90, 'Kiribati'),
(91, 'Kuwait'),
(92, 'Kyrgyzstan'),
(93, 'Laos'),
(94, 'Latvia'),
(95, 'Lebanon'),
(96, 'Lesotho'),
(97, 'Liberia'),
(98, 'Libya'),
(99, 'Liechtenstein'),
(100, 'Lithuania'),
(101, 'Luxembourg'),
(102, 'Madagascar'),
(103, 'Malawi'),
(104, 'Malaysia'),
(105, 'Maldives'),
(106, 'Mali'),
(107, 'Malta'),
(108, 'Marshall Islands'),
(109, 'Mauritania'),
(110, 'Mauritius'),
(111, 'Mexico'),
(112, 'Micronesia'),
(113, 'Moldova'),
(114, 'Monaco'),
(115, 'Mongolia'),
(116, 'Montenegro'),
(117, 'Morocco'),
(118, 'Mozambique'),
(119, 'Myanmar (formerly Burma)'),
(120, 'Namibia'),
(121, 'Nauru'),
(122, 'Nepal'),
(123, 'Netherlands'),
(124, 'New Zealand'),
(125, 'Nicaragua'),
(126, 'Niger'),
(127, 'Nigeria'),
(128, 'North Korea'),
(129, 'North Macedonia'),
(130, 'Norway'),
(131, 'Oman'),
(132, 'Pakistan'),
(133, 'Palau'),
(134, 'Palestine State'),
(135, 'Panama'),
(136, 'Papua New Guinea'),
(137, 'Paraguay'),
(138, 'Peru'),
(139, 'Philippines'),
(140, 'Poland'),
(141, 'Portugal'),
(142, 'Qatar'),
(143, 'Romania'),
(144, 'Russia'),
(145, 'Rwanda'),
(146, 'Saint Kitts and Nevis'),
(147, 'Saint Lucia'),
(148, 'Saint Vincent and the Grenadines'),
(149, 'Samoa'),
(150, 'San Marino'),
(151, 'Sao Tome and Principe'),
(152, 'Saudi Arabia'),
(153, 'Senegal'),
(154, 'Serbia'),
(155, 'Seychelles'),
(156, 'Sierra Leone'),
(157, 'Singapore'),
(158, 'Slovakia'),
(159, 'Slovenia'),
(160, 'Solomon Islands'),
(161, 'Somalia'),
(162, 'South Africa'),
(163, 'South Korea'),
(164, 'South Sudan'),
(165, 'Spain'),
(166, 'Sri Lanka'),
(167, 'Sudan'),
(168, 'Suriname'),
(169, 'Sweden'),
(170, 'Switzerland'),
(171, 'Syria'),
(172, 'Tajikistan'),
(173, 'Tanzania'),
(174, 'Thailand'),
(175, 'Timor-Leste'),
(176, 'Togo'),
(177, 'Tonga'),
(178, 'Trinidad and Tobago'),
(179, 'Tunisia'),
(180, 'Turkey'),
(181, 'Turkmenistan'),
(182, 'Tuvalu'),
(183, 'Uganda'),
(184, 'Ukraine'),
(185, 'United Arab Emirates'),
(186, 'United Kingdom'),
(187, 'United States of America'),
(188, 'Uruguay'),
(189, 'Uzbekistan'),
(190, 'Vanuatu'),
(191, 'Venezuela'),
(192, 'Vietnam'),
(193, 'Yemen'),
(194, 'Zambia'),
(195, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `county`
--

CREATE TABLE `county` (
  `county_id` int(11) NOT NULL,
  `county_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `county`
--

INSERT INTO `county` (`county_id`, `county_name`) VALUES
(1, 'Antrim'),
(2, 'Armagh'),
(3, 'Carlow'),
(4, 'Cavan'),
(5, 'Clare'),
(6, 'Cork'),
(7, 'Derry'),
(8, 'Donegal'),
(9, 'Down'),
(10, 'Dublin'),
(11, 'Fermanagh'),
(12, 'Galway'),
(13, 'Kerry'),
(14, 'Kildare'),
(15, 'Kilkenny'),
(16, 'Laois'),
(17, 'Leitrim'),
(18, 'Limerick'),
(19, 'Derry'),
(20, 'Longford'),
(21, 'Louth'),
(22, 'Mayo'),
(23, 'Meath'),
(24, 'Monaghan'),
(25, 'Offaly'),
(26, 'Roscommon'),
(27, 'Sligo'),
(28, 'Tipperary'),
(29, 'Westmeath'),
(30, 'Tyrone'),
(31, 'Wexford'),
(32, 'Waterford'),
(33, 'Wicklow'),
(34, 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `currency_id` int(11) NOT NULL,
  `curency_name` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`currency_id`, `curency_name`) VALUES
(1, 'EUR'),
(2, 'RUB'),
(3, 'GBP'),
(4, 'AUD'),
(5, 'CAD'),
(6, 'HKD'),
(7, 'IDR'),
(8, 'JPY'),
(9, 'NZD'),
(10, 'USD');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `equipment_id` int(11) NOT NULL,
  `equipment_type_id` int(11) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `model` varchar(7) NOT NULL,
  `equipment_description` varchar(100) NOT NULL,
  `currency_id` int(11) NOT NULL,
  `equipment_cost` decimal(10,0) NOT NULL,
  `equipment_img` varchar(30) NOT NULL,
  `purchase_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `equipment_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`equipment_id`, `equipment_type_id`, `manufacturer_id`, `model`, `equipment_description`, `currency_id`, `equipment_cost`, `equipment_img`, `purchase_date`, `equipment_name`) VALUES
(1, 1, 1, '33333', 'A digital camera is a camera that captures photographs in digital memory. Most cameras produced toda', 1, '2000', 'media/sonyPro.jpeg', '2021-01-04 20:14:48', 'Sony Camera'),
(2, 3, 2, '8888', 'Great sound quality!', 1, '3000', 'media/cameoSound.jpg', '2021-01-04 14:57:54', 'Cameo Sound System'),
(3, 4, 4, '0', 'Great quality and durable costumes for actors of all  genres.', 4, '10000', 'media/invisibleMan.jpg', '2021-01-04 14:57:59', 'Ronald Costumes'),
(4, 3, 4, '00000', 'Best sound equipment available on the market.', 1, '550000', 'media/dj.jpg', '2021-01-04 14:58:06', 'Ronald Sound System'),
(5, 4, 4, '0', 'Wide range of horror costumes.', 2, '2000000000', 'media/alienvspredator.jpg', '2021-01-04 14:58:15', 'Ronald Horror Costumes');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_type`
--

CREATE TABLE `equipment_type` (
  `equipment_type_id` int(11) NOT NULL,
  `equipment_type_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipment_type`
--

INSERT INTO `equipment_type` (`equipment_type_id`, `equipment_type_name`) VALUES
(1, 'Camera'),
(2, 'Lights'),
(3, 'Sound'),
(4, 'Costume'),
(5, 'Makeup');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `gender_id` int(11) NOT NULL,
  `gender_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`gender_id`, `gender_name`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `manufacturer_id` int(11) NOT NULL,
  `manufacturer_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`manufacturer_id`, `manufacturer_name`) VALUES
(1, 'Sony'),
(2, 'Cameo'),
(3, 'ATEM'),
(4, 'Roland'),
(5, 'GK_Special');

-- --------------------------------------------------------

--
-- Table structure for table `prefix`
--

CREATE TABLE `prefix` (
  `prefix_id` int(11) NOT NULL,
  `prefix_value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prefix`
--

INSERT INTO `prefix` (`prefix_id`, `prefix_value`) VALUES
(1, 93),
(2, 35818),
(3, 355),
(4, 213),
(5, 1684),
(6, 376),
(7, 244),
(8, 1264),
(9, 1268),
(10, 54),
(11, 374),
(12, 297),
(13, 247),
(14, 61),
(15, 6721),
(16, 672),
(17, 43),
(18, 994),
(19, 1242),
(20, 973),
(21, 880),
(22, 1246),
(23, 1268),
(24, 375),
(25, 32),
(26, 501),
(27, 229),
(28, 1441),
(29, 975),
(30, 591),
(31, 5997),
(32, 387),
(33, 267),
(34, 55),
(35, 246),
(36, 1284),
(37, 673),
(38, 359),
(39, 226),
(40, 257),
(41, 238),
(42, 855),
(43, 237),
(44, 1),
(45, 5993),
(46, 1345),
(47, 236),
(48, 235),
(49, 64),
(50, 56),
(51, 86),
(52, 6189164),
(53, 6189162),
(54, 57),
(55, 269),
(56, 242),
(57, 243),
(58, 682),
(59, 506),
(60, 225),
(61, 385),
(62, 53),
(63, 5999),
(64, 357),
(65, 420),
(66, 45),
(67, 246),
(68, 253),
(69, 1809),
(70, 56),
(71, 593),
(72, 20),
(73, 503),
(74, 240),
(75, 291),
(76, 372),
(77, 268),
(78, 251),
(79, 500),
(80, 298),
(81, 679),
(82, 358),
(83, 33),
(84, 596),
(85, 594),
(86, 689),
(87, 241),
(88, 220),
(89, 995),
(90, 49),
(91, 233),
(92, 350),
(93, 881),
(94, 30),
(95, 299),
(96, 1473),
(97, 353),
(98, 4428),
(99, 44);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `project_type_id` int(11) NOT NULL,
  `currency_id` int(11) DEFAULT NULL,
  `project_name` varchar(255) DEFAULT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_type_id`, `currency_id`, `project_name`, `company_id`) VALUES
(1, 1, 4, 'Adams Family', 0),
(2, 2, 3, 'BBC', 0),
(3, 3, 7, 'iRadio', 0),
(4, 1, 2, 'American_Horror_Story', 0),
(5, 3, 3, 'Kardashians', 0);

-- --------------------------------------------------------

--
-- Table structure for table `project_type`
--

CREATE TABLE `project_type` (
  `project_type_id` int(11) NOT NULL,
  `project_type_name` varchar(20) NOT NULL,
  `project_type_image_name` varchar(50) DEFAULT NULL,
  `project_type_video_name` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_type`
--

INSERT INTO `project_type` (`project_type_id`, `project_type_name`, `project_type_image_name`, `project_type_video_name`) VALUES
(1, 'Movie', 'media/movieset.jpeg', 'media/securityPeppa.mp4'),
(2, 'TV Show', 'media/tvshow.jpg', 'media/babyTiger.mp4'),
(3, 'Radio Show', 'media/radio.jpg', 'media/AntAndDec.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `query_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `query_desc` varchar(300) NOT NULL,
  `query_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`query_id`, `name`, `email`, `query_desc`, `query_date`) VALUES
(1, 'Ginta Kivite', 'ginta6290@gmail.com', 'I am a freelance actress who would like the opportunity to work with Starstruck. Contact: 000000', '2021-01-05 15:14:17'),
(4, 'tiger', 'tiger@email.com', 'moew moew moew moew moew moew moew moeeewww', '2021-01-05 15:26:05');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_description`) VALUES
(1, 'Sound Technician'),
(2, 'Hairdresser'),
(3, 'Makeup Artist'),
(4, 'Costume Designer'),
(5, 'Driver'),
(6, 'Producer'),
(7, 'Comedy Actor'),
(8, 'Light Technician'),
(9, 'Camera Man/Woman'),
(10, 'Editor'),
(11, 'Horror Actor'),
(12, 'Action Movie Actor');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `worker_id` int(11) NOT NULL,
  `worke_type_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `prefix_id` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `address3` varchar(50) NOT NULL,
  `county_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `project_type_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `gender_id` int(11) DEFAULT NULL,
  `sign_up_date` datetime DEFAULT NULL,
  `currency_id` int(11) DEFAULT NULL,
  `price_per_day` decimal(10,0) DEFAULT NULL,
  `worker_image` varchar(255) DEFAULT NULL,
  `worker_description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`worker_id`, `worke_type_id`, `fname`, `lname`, `email`, `prefix_id`, `phone`, `address1`, `address2`, `address3`, `county_id`, `country_id`, `password`, `project_type_id`, `project_id`, `gender_id`, `sign_up_date`, `currency_id`, `price_per_day`, `worker_image`, `worker_description`) VALUES
(1, 1, 'Tom', 'Cruise', 'cruise@email.com', 1, 8777777, 'cruise Island', 'Legendary', 'actionhero', 34, 187, 12345, 1, 1, 1, '2020-11-01 19:26:18', 1, '10000', 'media/tom.jpg', 'With handsome movie star looks and a charismatic smile, within 5 years Tom Cruise was starring in some of the top-grossing films of the 1980s including Top Gun (1986); The Color of Money (1986), Rain Man (1988) and Born on the Fourth of July (1989). By the 1990s he was one of the highest-paid actors in the world earning an average 15 million dollars a picture in such blockbuster hits as Interview with the Vampire: The Vampire Chronicles (1994), Mission: Impossible (1996) and Jerry Maguire (1996), for which he received an Academy Award Nomination for best actor. Tom Cruise\'s biggest franchise, Mission Impossible, has also earned a total of 3 billion dollars worldwide. Tom Cruise has also shown lots of interest in producing, with his biggest producer credits being the Mission Impossible franchise.\r\n'),
(5, 1, 'James', 'Bond', 'bondjames@email.com', 7, 0, 'top ', 'secret', 'mission', 34, 23, 7, 1, 5, 1, '2020-12-16 18:56:36', 10, '800', 'media/bond.jpg', 'The stereotype of a spy, detective, martial artist and assassin, Bond is a highly unique individual. He appears to be of sound mind and strong spirit. He is highly intelligent, exceedingly cunning and diabolically independent. He is also extremely sensible, calm, mature and sly. Like most who lose parents in their youth, Bond has abandonment issues, which is why he never makes friends or long-lasting relationships, his only relationship being with Vesper. He professes to have never fallen in love. He maintains no friendships from before his parents’ death and only the most irregular contact with friends from his late teens.'),
(12, 2, 'Donald', 'Trump', 'dumb@email.com', 3, 0, 'great', 'wall', 'trump', 34, 187, 0, 1, 4, 2, '0000-00-00 00:00:00', 2, '50', 'media/trump.jpg', '\"I will build a great wall – and nobody builds walls better than me, believe me – and I’ll build them very inexpensively. I will build a great, great wall on our southern border, and I will make Mexico pay for that wall. Mark my words.\"-Donald Trump'),
(14, 1, 'Tiger', 'Meow', 'tiger@email.com', 2, 1234567, 'bbb', 'bbb', 'bbb', 1, 4, 0, 1, 1, 1, '2021-01-01 18:57:16', 10, '3000', 'media/tiger.jpg', 'All ginger cats are tabbies as they all have the “agouti” gene, but all tabbies are not orange. One characteristic to look for in tabby cats is an “M” marking on their forehead. Tabbies are also often referred to as “tigers” for obvious reasons.'),
(15, 1, 'dailava', 'mana', 'dailava@email.com', 1, 2222222, '10 Cois Carraig', 'Doohamlet', '', 2, 82, 0, 1, 4, 2, '2021-01-03 21:24:33', 1, '3000', 'media/marge.jpg', 'A film producer is a person who oversees film production. Either employed by a production company or working independently, producers plan and coordinate various aspects of film production, such as selecting the script; coordinating writing, directing, editing; and arranging financing.'),
(19, 3, 'Daniel', 'K', 'daniel@email.com', 1, 444, 'KIKK', 'KKK', '', 24, 186, 0, 3, 3, 1, '2021-01-04 20:39:00', NULL, '44', 'media/daniel.jpg', 'Radio show technician intern.');

-- --------------------------------------------------------

--
-- Table structure for table `worker_type`
--

CREATE TABLE `worker_type` (
  `worker_type_id` int(11) NOT NULL,
  `worker_type_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `worker_type`
--

INSERT INTO `worker_type` (`worker_type_id`, `worker_type_name`) VALUES
(1, 'Actor'),
(2, 'Makeup'),
(3, 'Technician');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`),
  ADD KEY `country_id` (`country_id`),
  ADD KEY `county_id` (`county_id`),
  ADD KEY `prefix_id` (`prefix_id`),
  ADD KEY `project_type_id` (`project_type_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `county`
--
ALTER TABLE `county`
  ADD PRIMARY KEY (`county_id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`currency_id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`equipment_id`),
  ADD KEY `currency_id` (`currency_id`),
  ADD KEY `equipment_type_id` (`equipment_type_id`),
  ADD KEY `manufacturer_id` (`manufacturer_id`);

--
-- Indexes for table `equipment_type`
--
ALTER TABLE `equipment_type`
  ADD PRIMARY KEY (`equipment_type_id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`gender_id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `prefix`
--
ALTER TABLE `prefix`
  ADD PRIMARY KEY (`prefix_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `project_type_id` (`project_type_id`),
  ADD KEY `currency_id` (`currency_id`);

--
-- Indexes for table `project_type`
--
ALTER TABLE `project_type`
  ADD PRIMARY KEY (`project_type_id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`query_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`worker_id`),
  ADD KEY `country_id` (`country_id`),
  ADD KEY `county_id` (`county_id`),
  ADD KEY `prefix_id` (`prefix_id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `project_type_id` (`project_type_id`),
  ADD KEY `gender_id` (`gender_id`),
  ADD KEY `currency_id` (`currency_id`),
  ADD KEY `worke_type_id` (`worke_type_id`);

--
-- Indexes for table `worker_type`
--
ALTER TABLE `worker_type`
  ADD PRIMARY KEY (`worker_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `county`
--
ALTER TABLE `county`
  MODIFY `county_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `currency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `equipment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `equipment_type`
--
ALTER TABLE `equipment_type`
  MODIFY `equipment_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `gender_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `manufacturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prefix`
--
ALTER TABLE `prefix`
  MODIFY `prefix_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project_type`
--
ALTER TABLE `project_type`
  MODIFY `project_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `query_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `worker`
--
ALTER TABLE `worker`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `worker_type`
--
ALTER TABLE `worker_type`
  MODIFY `worker_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`),
  ADD CONSTRAINT `company_ibfk_2` FOREIGN KEY (`county_id`) REFERENCES `county` (`county_id`),
  ADD CONSTRAINT `company_ibfk_3` FOREIGN KEY (`prefix_id`) REFERENCES `prefix` (`prefix_id`),
  ADD CONSTRAINT `company_ibfk_4` FOREIGN KEY (`project_type_id`) REFERENCES `project_type` (`project_type_id`);

--
-- Constraints for table `equipment`
--
ALTER TABLE `equipment`
  ADD CONSTRAINT `equipment_ibfk_1` FOREIGN KEY (`currency_id`) REFERENCES `currency` (`currency_id`),
  ADD CONSTRAINT `equipment_ibfk_2` FOREIGN KEY (`equipment_type_id`) REFERENCES `equipment_type` (`equipment_type_id`),
  ADD CONSTRAINT `equipment_ibfk_3` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturer` (`manufacturer_id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`project_type_id`) REFERENCES `project_type` (`project_type_id`),
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`currency_id`) REFERENCES `currency` (`currency_id`);

--
-- Constraints for table `worker`
--
ALTER TABLE `worker`
  ADD CONSTRAINT `worker_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`),
  ADD CONSTRAINT `worker_ibfk_10` FOREIGN KEY (`worke_type_id`) REFERENCES `worker_type` (`worker_type_id`),
  ADD CONSTRAINT `worker_ibfk_2` FOREIGN KEY (`county_id`) REFERENCES `county` (`county_id`),
  ADD CONSTRAINT `worker_ibfk_3` FOREIGN KEY (`prefix_id`) REFERENCES `prefix` (`prefix_id`),
  ADD CONSTRAINT `worker_ibfk_4` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `worker_ibfk_5` FOREIGN KEY (`project_type_id`) REFERENCES `project_type` (`project_type_id`),
  ADD CONSTRAINT `worker_ibfk_7` FOREIGN KEY (`worke_type_id`) REFERENCES `project_type` (`project_type_id`),
  ADD CONSTRAINT `worker_ibfk_8` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`gender_id`),
  ADD CONSTRAINT `worker_ibfk_9` FOREIGN KEY (`currency_id`) REFERENCES `currency` (`currency_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
