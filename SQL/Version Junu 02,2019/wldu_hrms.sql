-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 03, 2019 at 04:38 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wldu_hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `date`, `content`, `status`) VALUES
(1, '2019-05-26', ' Hey this for check! check1 2 2 3 ', 1),
(2, '2019-05-26', ' Check 1 2 3 ', 1),
(3, '2019-05-26', ' To: Computer Science Department\r\nThis is to announce  that your employee request is approved. and we have a meeting in auditrium hall at 4:00 am.', 1),
(4, '2019-05-26', ' Is Ok!', 1),
(5, '2019-05-26', ' Hey there', 1),
(6, '2019-05-26', 'Hey U', 1),
(7, '2019-05-26', ' Last', 1),
(8, '2019-05-26', ' ,jklj', 1),
(9, '2019-05-26', ' khikhk', 1);

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE IF NOT EXISTS `applicant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vacancy_no` int(11) NOT NULL,
  `Date` date NOT NULL,
  `FName` varchar(50) NOT NULL,
  `MName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `CGPA` varchar(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `disposition` varchar(20) NOT NULL DEFAULT 'attachment',
  `Status` varchar(50) NOT NULL DEFAULT 'unseen',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`id`, `vacancy_no`, `Date`, `FName`, `MName`, `LName`, `sex`, `email`, `CGPA`, `filename`, `disposition`, `Status`) VALUES
(19, 7, '0000-00-00', 'Dawit', 'Debebe', 'Dawud', 'male', 'demsewdd@gmail.com', '3.40', 'HRMS V2.docx', 'attachment', 'seen'),
(20, 7, '0000-00-00', 'Bete', 'Tefera', 'Teshome', 'female', 'bete14@gmail.com', '4.00', 'New Text Document.txt', 'attachment', 'seen'),
(22, 7, '0000-00-00', 'Yilfa', 'Hailu', 'Tekle', 'female', 'yilfa14@gmail.com', '3.10', 'HRMS V2.docx', 'attachment', 'seen'),
(23, 7, '0000-00-00', 'Nigussie', 'Tikse', 'Tura', 'male', 'nigussie14@gmail.com', '3.00', 'HRMS V2.docx', 'attachment', 'seen'),
(24, 7, '0000-00-00', 'Dawit', 'Debebe', 'Dawud', 'male', 'testgyt@gmail.com', '3.10', 'HRMS V2.docx', 'attachment', 'seen'),
(25, 7, '0000-00-00', 'Daniel', 'Lemma', 'Dawud', 'male', 'you@gmail.com', '3.40', 'HRMS V2.docx', 'attachment', 'seen'),
(26, 7, '0000-00-00', 'Dawit', 'Debebe', 'Dawud', 'male', 'tesfkiort@gmail.com', '3.50', 'New Text Document.txt', 'attachment', 'seen'),
(27, 7, '0000-00-00', 'Dawit', 'Debebe', 'Dawud', 'male', 'demsedddw@gmail.com', '4.00', 'New Text Document.txt', 'attachment', 'seen'),
(28, 7, '0000-00-00', 'Dawit', 'Debebe', 'Dawud', 'male', 'danieloiura14@gmail.com', '3.50', 'HRMS V2.docx', 'attachment', 'seen'),
(29, 7, '0000-00-00', 'Dawit', 'Teshome', 'Dawud', 'male', 'danieltefera45@gmail.com', '4.50', 'New Text Document.txt', 'attachment', 'seen'),
(30, 7, '0000-00-00', 'Dawit', 'Debebe', 'Tekle', 'male', 'tefera189@gmail.com', '4.25', 'HRMS V2.docx', 'attachment', 'seen'),
(31, 7, '0000-00-00', 'Dawit', 'Teshome', 'Tura', 'male', 'test897@gmail.comm', '3.65', 'HRMS V2.docx', 'attachment', 'seen'),
(32, 7, '0000-00-00', 'Daniel', 'Tefera', 'Teshome', 'male', 'danieltefera11@gmail.com', '4.00', 'Dinner in the morning.pdf', 'attachment', 'seen'),
(33, 7, '0000-00-00', 'Daniel', 'Debebe', 'Dawud', 'male', 'birudebelbe335@gmail.com', '4.00', 'Dinner in the morning.pdf', 'attachment', 'seen'),
(34, 7, '0000-00-00', 'Demsew', 'Asfaw', 'Lemma', 'male', 'demseiuw@gmail.com', '4.00', 'Dinner in the morning.pdf', 'attachment', 'seen'),
(35, 7, '0000-00-00', 'Dawit', 'Debebe', 'Dawud', 'female', 'fifnal@gmail.com', '4.00', 'D DANIEL.docx', 'attachment', 'seen'),
(36, 7, '0000-00-00', 'Dawit', 'Debebe', 'Dawud', 'male', 'deguale@gmail.com', '4.00', 'berechekow.docx', 'attachment', 'seen'),
(37, 7, '0000-00-00', 'Dawit', 'Debebe', 'Dawud', 'female', 'samyg@gmail.com', '4.00', 'dengay sidib new wey.docx', 'attachment', 'seen'),
(38, 7, '0000-00-00', 'Dawit', 'Debebe', 'Dawud', 'male', 'danieltefhtera14@gmail.com', '4.00', 'dn daniel 1.docx', 'attachment', 'seen'),
(39, 77, '2019-05-15', 'Daniel', 'Asrat', 'fente', 'male', 'fifnall@gmail.com', '3.50', 'daniel.docx', 'attachment', 'seen'),
(40, 8, '0000-00-00', 'Birey', 'Temam', 'Temesgen', 'female', 'birey335@gmail.com', '4.00', 'aba luqa and aba tadra.pdf', 'attachment', 'seen'),
(41, 8, '0000-00-00', 'Demsew', 'Asrat', 'Dawud', 'male', 'degualejh@gmail.com', '3.55', 'atabqin 2.pdf', 'attachment', 'seen'),
(42, 8, '2019-05-21', 'Dawit', 'Debebe', 'Dawud', 'male', 'dedeguale@gmail.com', '4.00', 'beauty contest.pdf', 'attachment', 'seen'),
(43, 8, '2019-05-21', 'Dawit', 'Debebe', 'Dawud', 'male', 'danieltefhyera14@gmail.com', '4.00', 'beand yezemde bet.pdf', 'attachment', 'seen');

-- --------------------------------------------------------

--
-- Table structure for table `educational_info`
--

CREATE TABLE IF NOT EXISTS `educational_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `elementary` varchar(255) NOT NULL,
  `high_school` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `cirteficate` varchar(255) NOT NULL,
  `education_type` varchar(255) NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `educational_info`
--

INSERT INTO `educational_info` (`id`, `elementary`, `high_school`, `university`, `cirteficate`, `education_type`, `emp_id`) VALUES
(1, 'sholla', 'Bulga', 'woldia', 'Degree', 'Computer Sience', 'FOT(R)1699/08'),
(2, 'Bole', 'Bole', 'AA', 'Degree', 'IT', 'FOT(R)1214/05');

-- --------------------------------------------------------

--
-- Table structure for table `emergency_contact`
--

CREATE TABLE IF NOT EXISTS `emergency_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `wereda` varchar(255) NOT NULL,
  `kebele` varchar(255) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `emergency_contact`
--

INSERT INTO `emergency_contact` (`id`, `full_name`, `region`, `zone`, `wereda`, `kebele`, `phone_no`, `emp_id`) VALUES
(1, 'Tefera Teshome', '3', 'North Shoa', 'Hagere Mariam', '01', 922362129, 'FOT(R)1699/08'),
(2, 'Teshome Nigussie', '03', 'North Wollo', 'Harbu', '02', 912329234, 'FOT(R)7456/09');

-- --------------------------------------------------------

--
-- Table structure for table `employee_request`
--

CREATE TABLE IF NOT EXISTS `employee_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datee` varchar(50) NOT NULL,
  `fromm` varchar(100) NOT NULL,
  `job_name` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `salary` int(11) NOT NULL,
  `job_type` varchar(100) NOT NULL,
  `job_position` varchar(100) NOT NULL,
  `required_skill` text NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `request_by` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Not Seen',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `employee_request`
--

INSERT INTO `employee_request` (`id`, `datee`, `fromm`, `job_name`, `level`, `salary`, `job_type`, `job_position`, `required_skill`, `start_date`, `request_by`, `status`) VALUES
(1, '2019-05-15', 'CS', 'Assistant', '2', 100000, 'Permanent', 'new assigned', ' MSc in Computer Science or IT\r\n', '2019-05-31', 'Demeke', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `family_situation`
--

CREATE TABLE IF NOT EXISTS `family_situation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `martial_status` varchar(255) NOT NULL,
  `husbund_or_wife_name` varchar(255) NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `family_situation`
--

INSERT INTO `family_situation` (`id`, `martial_status`, `husbund_or_wife_name`, `emp_id`) VALUES
(1, 'Maried', 'Alem', 'FOT(R)1699/08'),
(2, 'Divorced', 'TekileBirhan_WeldeSenbet_HabiteFergusen', 'FOT(R)2154/10'),
(4, 'Single', 'Daniel', 'FOT(R)9658/11'),
(5, 'Maried', 'Demsew', 'FOT(R)7854/05');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` longtext NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `comment`, `status`) VALUES
('Dani', 'danieltefera14@gmail.com', 'I am the first!!', 1),
('Biruk', 'birudebebe335@gmail.com', 'Me is the second?', 1),
('Last Check', 'last@gmail.com', 'Abstract- Cloud computing that has become an increasingly important trend, is a virtualization technology that uses the\r\ninternet and central remote servers to offer the sharing of resources that include infrastructures, software, applications\r\nand business processes to the market environment to fulfill the elastic demand. In today’s competitive environment, the\r\nservice vitality, elasticity, choices and flexibility offered by this scalable technology are too attractive that makes the cloud\r\ncomputing to increasingly becoming an integral part of the enterprise computing environment. This paper presents a\r\nsurvey of the current state of Cloud Computing. It includes a discussion of the evolution process of cloud computing,\r\ncharacteristics of Cloud, current technologies adopted in cloud computing, This paper also presents a comparative study\r\nof cloud computing platforms (Amazon, Google and Microsoft), and its challenges. ', 1),
('Uf', 'Uf@gmail.com', 'A. Software-as-a-Service\r\nThis was the earliest cloud service and the first to enjoy widespread adoption. In a nutshell, SaaS is the online\r\ndelivery of software functionality and capability without the need for locally running software. Rather, SaaS runs on a\r\nWeb browser. Gmail and Salesforce are two popular SaaS products. Thousands of others exist delivering everything\r\nfrom graphics design to CRM to online security to basic word processing. Enterprise level SaaS providers deliver a\r\nwide variety of sophisticated applications such as product lifecycle management, supply chain management, and\r\nmany other vertical applications. Direct benefits of SaaS include reduced hardware costs, reduced software licensing\r\ncosts, and more flexible IT resources that can be dialed up or down quickly on demand. Secondary benefits include\r\nreduced or outsourced software support overhead and simpler licensing and product lifecycle management\r\nrequirements. Equally important, SaaS applications allow users to access and manipulate their data anywhere they\r\nhave a data connection from any device – an important consideration in a world where nearly everyone has several\r\ncompute platforms (mobile, laptop, tablet).\r\nDrawbacks include less ability to customize the application for specific business requirements, difficulty\r\nintegrating SaaS with existing software based infrastructure, and budgeting uncertainties inherent in pay-as you-go\r\npricing models. Increasingly, SaaS solutions are accepted by even the largest enterprises as viable replacements for\r\ntraditional software which resides on an individual computer or is delivered over a local area network. ', 1),
('Dani', 'GSGD@gmail.com', '1) Any newly appointed civil servant shall be\r\npaid the base salary as fixed by the civil\r\nservice salary scale for the position he has\r\nbeen appointed.\r\n2) The agency shall issue detailed directives on\r\nthe circumstances in which government\r\ninstitutions may decide to pay a higher base\r\nsalary to new recruits and the directives may\r\ninclude the types of position, the extent of\r\ndeparture from the base salary, the eligibility\r\ncriteria and other relevant matters.\r\n20. Probation\r\n1) The purpose of probation shall be to prove\r\nthe competence of a newly appointed civil\r\nservant through follow-up of his\r\nperformance.\r\n2) The period of probation of a civil servant on\r\nthe position of his appointment shall be for\r\nsix months; provided however, if the\r\nperformance result is below satisfactory, it\r\nmay be extended for an additional period of\r\nthree months.', 1),
('New', 'new@gmail.com', 'This email is for notification checking purpose', 1),
('Dani', 'dawa@gmail.com', 'mhj', 1),
('Dani', 'dawa@gmail.com', 'FG', 1),
('Dani', 'danieltefera14@gmail.com', 'H', 1),
('jm', 'habtamdessie@gmail.com', 'jy', 1),
('Sammy', 'samy@gmail.com', 'Hey', 1),
('Daniel', 'danieltefpoera14@gmail.com', 'Final OO PHP Check!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `guaranter_contact`
--

CREATE TABLE IF NOT EXISTS `guaranter_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `wereda` varchar(255) NOT NULL,
  `kebele` varchar(255) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `guaranter_contact`
--

INSERT INTO `guaranter_contact` (`id`, `full_name`, `region`, `zone`, `wereda`, `kebele`, `phone_no`, `emp_id`) VALUES
(1, 'Tefera Teshome', '3', 'North Shoa', 'Hagere Mariam', '01', '0922362129', 'FOT(R)1699/08');

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE IF NOT EXISTS `leave` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(50) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `reason` text NOT NULL,
  `datee` date NOT NULL,
  `leave_type` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Not Seen',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `leave`
--

INSERT INTO `leave` (`id`, `emp_id`, `FName`, `LName`, `reason`, `datee`, `leave_type`, `status`) VALUES
(1, 'FOT(R)1699/08', 'biruk debebe', 'tefera', 'seek', '2019-05-26', 'Annual leave', 'Approved'),
(2, 'FOT(R)1599/09', 'biruk ', 'tefera', 'Marriage', '2019-05-26', 'Annual leave', 'Approved'),
(3, 'FOT(R)1699/08', 'daniel', 'tefera', 'vacation', '2019-05-29', 'annual leave', 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE IF NOT EXISTS `personal_info` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  `datee` date NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `birth_place` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `nation` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `salary` int(255) NOT NULL,
  `level` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`id`, `emp_id`, `datee`, `first_name`, `middle_name`, `last_name`, `birth_place`, `birth_date`, `nation`, `gender`, `email`, `salary`, `level`, `position`) VALUES
(0, 'FOT(R)1245/78', '2019-05-16', 'Abush', 'Zeleke', 'Bewketu', 'Sholla', '0000-00-00', 'Oromo', 'Male', 'abush@gmail.com', 1000, 'III', 'Cashier'),
(0, 'FOT(R)1622/09', '2019-05-21', 'New', 'Newa', 'Newi', 'Woldia', '0000-00-00', 'Beshangul', 'Male', 'new@gmail.com', 20000, 'I', 'Coder'),
(2, 'FOT(R)1665/08', '2019-05-25', 'Biruk', 'Debebe', 'Bogale', 'Borena', '0000-00-00', 'Amhara', 'male', 'birukdebe435@gmail.com', 20000, 'II', 'Instractor'),
(1, 'FOT(R)1699/08', '2019-05-23', 'Dawit', 'Asrat', 'Derbe', 'Legehida', '1250-10-10', 'Tigray', 'Male', 'dawit23@gmail.com', 50000, 'I', 'Manager'),
(0, 'xczx', '2019-05-24', 'xzc', 'xzc', 'zc', 'zxc', '0000-00-00', 'zc', 'zc', 'zxczc', 0, 'zxc', 'zc');

-- --------------------------------------------------------

--
-- Table structure for table `resetpassword`
--

CREATE TABLE IF NOT EXISTS `resetpassword` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `resetpassword`
--

INSERT INTO `resetpassword` (`id`, `code`, `email`) VALUES
(1, 'sgjdhshfkswdl', 'danieltefera14@gmail.com'),
(3, 'codecode', 'birukdebebe432@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `residential_address`
--

CREATE TABLE IF NOT EXISTS `residential_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `wereda` varchar(255) NOT NULL,
  `kebele` varchar(255) NOT NULL,
  `house_no` varchar(255) NOT NULL,
  `phone_no` bigint(15) NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `residential_address`
--

INSERT INTO `residential_address` (`id`, `region`, `city`, `zone`, `wereda`, `kebele`, `house_no`, `phone_no`, `emp_id`) VALUES
(1, 'Tigray', 'Mekele', '70 Anderta', 'kemey', '02', 'mk2254', 965987411, 'FOT(R)1699/08'),
(2, 'Amharaa', 'Debre birhan', 'North shoa', 'Baso', '08', 'm215', 919319791, 'FOT(R)1622/07');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE IF NOT EXISTS `transfer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(50) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `reason` text NOT NULL,
  `datee` date NOT NULL,
  `reciever` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Not Seen',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`id`, `emp_id`, `FName`, `LName`, `reason`, `datee`, `reciever`, `status`) VALUES
(1, 'FOT(R)1699/08', 'daniel', 'tefera', 'we can say any thing here', '2019-06-03', 'aau', 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `username`, `email`, `password`, `status`) VALUES
(1, 'Daniel', 'admin', 'admin', 'danieltefera14@gmail.com', '25e4ee4e9229397b6b17776bfceaf8e7', 1),
(2, 'Biruk', 'manager', 'manager', 'birukdebebe432@gmail.com', '3fd7488b6fd40f33c5a8e857b6a944aa', 1),
(3, 'Kassim', 'record_officer', 'record_officer', 'kassim@gmail.com', '696aa207fd96934d5ddb67e213d17cf9', 1),
(4, 'Alelign', 'college_dean', 'college_dean', 'alexof21@gmail.com', 'f27f6f1c7c5cbf4e3e192e0a47b85300', 1),
(5, 'Ayalinesh', 'employee', 'employee', 'ayalnesh@gmail.com', 'feb42c4e40078da311a2d7c4722a34ba', 1),
(7, 'Habtam', 'manager', 'manager2', 'habtamdessie@gmail.com', '4124bc0a9335c27f086f24ba207a4912', 0),
(9, 'Demsew', 'admin', 'Demsew', 'demsew@gmail.com', 'd506c57cd376cd865cad1c58b4c08add', 0),
(10, 'Deguale', 'employee', 'Deguale', 'deguale@gmail.com', '3aed0145f7bff5df7611b47e97adab2f', 1),
(11, 'Test', 'manager', 'Test', 'test@gmail.com', '2f3bc18c0d3e6b1b8a445075535d26e9', 1),
(14, 'Che', 'admin', 'Che', 'che12@gmail.com', '5d41402abc4b2a76b9719d911017c592', 1),
(15, 'Semaw', 'college_dean', 'college_dean', 'semaw@gmail.com', 'e918bc6c0aa4a48627cbc2283949a610', 1),
(18, 'wende', 'manager', 'wende', 'wende@gmail.com', '7a56ef7acd2d572fcce89f11a9763f11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE IF NOT EXISTS `vacancy` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Number` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Campany_name` varchar(100) NOT NULL,
  `Position_name` varchar(100) NOT NULL,
  `Vacancy_position` varchar(100) NOT NULL,
  `Level` varchar(100) NOT NULL,
  `Salary` int(11) NOT NULL,
  `Minimum_GPA` varchar(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Skill` text NOT NULL,
  `Evidence` longtext NOT NULL,
  `Position_behavior` text NOT NULL,
  `Benefit` text NOT NULL,
  `Registration_place` varchar(100) NOT NULL,
  `Registration_date` date NOT NULL,
  `Status` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`ID`, `Number`, `Date`, `Campany_name`, `Position_name`, `Vacancy_position`, `Level`, `Salary`, `Minimum_GPA`, `Amount`, `Skill`, `Evidence`, `Position_behavior`, `Benefit`, `Registration_place`, `Registration_date`, `Status`) VALUES
(2, 2333, '2018-05-24', 'cvbvcb', 'vbc', 'released', 'vb', 4554, '3.00', 654, ' 5654', ' 546546', '565', ' 5656', '565', '2018-05-25', 'closed'),
(3, 345, '2018-05-26', 'DBU', 'Lecturer DD', 'new assigned', 'II', 4500, '3.50', 3, ' fgfg', ' fgfg', 'fgfg', ' gffg', 'ghg', '2018-06-08', 'closed'),
(4, 0, '2019-04-11', 'WDU', 'RecordOfficer', 'new assigned', '2', 10000, '3.20', 2, ' BSC degree', ' Grade 8,10,12 Paper ', 'Easy', ' Car if you have driving licence', 'Woldia', '2019-04-30', 'closed'),
(5, 124, '2019-04-26', 'WLDU', 'Teacher', 'new assigned', 'I', 5000, '3.00', 2, ' Msc', 'Grade 10 papers\r\nGrade 12 papers\r\nDegree papers\r\nMsc papers\r\n', 'Permanent', ' Free Education', 'Woldia', '2019-04-29', 'closed'),
(7, 23, '2019-04-27', 'NASA', 'Assistant DD', 'new assigned', 'II', 5500, '3.50', 2, 'Degree in Computer Science\r\nMsc in IT', 'Degree Certeficate \r\nMsc Certeficate', 'Temporary', ' Free Education based on the service ', 'DC', '2019-05-03', 'closed'),
(8, 77, '2019-05-21', 'AAU', 'manager', 'new assigned', '2', 6000, '3.00', 10, ' Degree', ' Degree Certeficate', 'Permanent', ' Bonus', 'AA', '2019-05-31', 'closed');
