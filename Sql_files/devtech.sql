-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 05:49 PM
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
-- Database: `devtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `clientID` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`clientID`) VALUES
(1234567),
(1598742),
(2021397),
(2345678),
(2675438),
(3456789),
(3847612),
(3847614),
(4258763),
(4567890),
(5137892),
(5467890),
(5467891),
(5467892),
(5467893),
(5678901),
(6548901),
(6789012),
(7382156),
(7890123),
(8423965),
(8901234),
(9012345),
(9012346),
(9012347),
(9012348),
(9761235);

-- --------------------------------------------------------

--
-- Table structure for table `clientprojectreq`
--

CREATE TABLE `clientprojectreq` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `budget` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` text NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `clientID` int(7) NOT NULL,
  `deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clientprojectreq`
--

INSERT INTO `clientprojectreq` (`id`, `name`, `budget`, `email`, `message`, `filepath`, `clientID`, `deadline`) VALUES
(6, 'DhakauniProject', 1200, 'ayatullaharefin@gmail.com', 'chetona', '', 1234567, '2023-07-11'),
(7, 'MetroRail', 10000, 'bd@gmail.com', 'mirpur', '', 1234567, '2023-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `client_project`
--

CREATE TABLE `client_project` (
  `clientID` int(7) NOT NULL,
  `projectID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_project`
--

INSERT INTO `client_project` (`clientID`, `projectID`) VALUES
(1234567, 4),
(1234567, 8),
(1234567, 12345696),
(1598742, 12345695),
(2021397, 12345678),
(2345678, 12345694),
(2675438, 12345693),
(3456789, 12345692),
(3847612, 12345691),
(3847614, 12345690),
(4258763, 12345688),
(4567890, 12345687),
(5137892, 12345679),
(5137892, 12345686),
(5467890, 12345683),
(5467891, 12345682),
(5467892, 12345681),
(5467893, 12345680),
(5678901, 12345685),
(6548901, 12345684),
(9761235, 12345689);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empID` int(7) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `joiningDate` date NOT NULL,
  `salary` double NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empID`, `designation`, `joiningDate`, `salary`, `status`) VALUES
(2020367, 'Developer', '2023-05-01', 50000, 'On leave'),
(2021591, 'Developer', '2023-05-01', 60000, 'Active'),
(2022351, 'System Analyst', '2022-05-01', 32000, 'Active'),
(2022352, 'Developer', '2022-05-02', 35500, 'Active'),
(2022353, 'Developer', '2023-04-03', 45000, 'On leave'),
(2022354, 'System Analyst', '2022-05-03', 34000, 'Active'),
(2022355, 'System Analyst', '2023-05-05', 30000, 'Active'),
(2022356, 'System Analyst', '2023-05-15', 29000, 'Active'),
(2022357, 'Visual Designer', '2023-01-28', 34000, 'Active'),
(2022358, 'Visual Designer', '2023-01-24', 37000, 'Active'),
(2022359, 'Visual Designer', '2023-01-17', 31000, 'Active'),
(2022360, 'Visual Designer', '2023-02-01', 40000, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `employee_project`
--

CREATE TABLE `employee_project` (
  `empID` int(7) NOT NULL,
  `projectID` int(8) NOT NULL,
  `taskStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_project`
--

INSERT INTO `employee_project` (`empID`, `projectID`, `taskStatus`) VALUES
(2020367, 12345684, 'Completed'),
(2020367, 12345688, 'Yet to start'),
(2020367, 12345691, 'Completed'),
(2020367, 12345692, 'On going'),
(2021591, 12345679, 'On going'),
(2021591, 12345685, 'Completed'),
(2021591, 12345690, 'Designing'),
(2021591, 12345692, 'Completed'),
(2021591, 12345693, 'Developing'),
(2022351, 12345680, 'Analysing'),
(2022352, 12345682, 'Developing'),
(2022353, 12345678, 'On going'),
(2022353, 12345679, 'Completed'),
(2022353, 12345681, 'Developing'),
(2022353, 12345689, 'Developing'),
(2022353, 12345694, 'Completed'),
(2022354, 12345683, 'Analysing'),
(2022354, 12345692, 'On going'),
(2022355, 12345678, 'On going'),
(2022355, 12345695, 'On going'),
(2022355, 12345696, 'On going'),
(2022356, 12345686, 'Analysing'),
(2022357, 12345687, 'Designing'),
(2022359, 12345692, 'Completed'),
(2022360, 12345678, 'On going'),
(2022360, 12345679, 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `leaveapplication`
--

CREATE TABLE `leaveapplication` (
  `leaveID` int(11) NOT NULL,
  `empID` int(7) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `leaveType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leaveapplication`
--

INSERT INTO `leaveapplication` (`leaveID`, `empID`, `startDate`, `endDate`, `leaveType`) VALUES
(123450, 2022352, '2023-05-19', '2023-05-24', 'Sick'),
(123457, 2022360, '2023-05-02', '2023-05-18', 'Personal'),
(123459, 2022351, '2023-05-02', '2023-05-16', 'Vacation');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `projectID` int(8) NOT NULL,
  `projectName` varchar(50) NOT NULL,
  `projectOverview` varchar(10000) NOT NULL,
  `startingDate` date DEFAULT current_timestamp(),
  `deadline` date NOT NULL,
  `budget` double NOT NULL,
  `projectStatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`projectID`, `projectName`, `projectOverview`, `startingDate`, `deadline`, `budget`, `projectStatus`) VALUES
(4, 'SMC', 'Something', '2023-05-05', '2023-05-26', 1500, 'Yet to start'),
(8, 'PadmaBridge', 'Shopner Padma Shetu', '2023-05-05', '2023-07-27', 199999, 'Yet to start'),
(12345678, 'SPMS', 'In this system IUB students can see their grades, the CLOs they have completed, the mapping of CLOs with PLOs. Faculty can upload grade-sheet and CLO achieved by the students.', '2023-05-01', '2023-05-31', 1000, 'On going'),
(12345679, 'AlumniIUB', 'As we live, our hearts turn colder. Cause pain is what we go through as we become older. We get insulted by others, lose trust for those others. We get back stabbed by friends. It becomes harder for us to give others a hand. We get our heart broken by people we love, even that we give them all', '2023-03-30', '2023-06-30', 1500, 'On going'),
(12345680, 'E-commerce Website', 'analyzing product performance metrics, and developing recommendations to improve online sales', '2023-05-01', '2023-11-01', 50000, 'Developing'),
(12345681, 'CRM System', 'Customer relationship management is a process in which a business or other organization administers its interactions with customers, typically using data analysis to study large amounts of information.', '2023-05-31', '2023-07-20', 40000, 'Developing'),
(12345682, 'Inventory Management System', 'optimizing reorder points, and minimizing overstock and stockouts', '2023-03-14', '2023-09-06', 42222, 'Developing'),
(12345683, 'HR Management System', 'HR Management software helps to manage to facilitate human resources functions and tasks. These tasks are wide-ranging and include the following: payroll, personnel information management, onboarding.', '2023-01-29', '2023-05-31', 60000, 'Beta'),
(12345684, 'Customer Segmentation Analysis', 'Data cleaning, statistical analysis, and developing data visualization techniques to understand customer segments', '2023-01-01', '2023-04-04', 35000, 'Completed'),
(12345685, 'Sales Forecasting', 'Analyze historical sales data to create a forecast for future sales.', '2022-12-01', '2023-03-01', 39999, 'Completed'),
(12345686, 'Marketing Campaign Optimization', 'Analyze customer response data, improve future campaigns', '2023-03-14', '2023-07-21', 34040, 'Analysing'),
(12345687, 'Inventory Optimization', 'Analyze forecasting demand, optimizing reorder points, and minimizing overstock and stockouts', '2023-03-20', '2023-08-12', 39994, 'Designing'),
(12345688, 'Fraud Detection', 'Analyze data to identify fraudulent transactions or activities,develope fraud detection models, identify patterns of fraudulent behavior and develope strategies to prevent fraud', '2023-05-04', '2023-11-30', 70000, 'Designing'),
(12345689, 'Social Media Analytics', 'Analyze data from social media platforms to understand customer behavior, sentiment, and engagement', '2023-04-10', '2023-05-11', 29999, 'Developing'),
(12345690, 'Energy Consumption Analysis', 'Developing energy consumption models, analyzing energy usage patterns, and developing recommendations to reduce costs and improve sustainability.', '2023-02-08', '2023-06-15', 49999, 'Designing'),
(12345691, 'E-commerce Sales Analysis', 'Developing sales models, analyzing product performance metrics, and developing recommendations to improve online sales', '2023-02-01', '2023-05-03', 23233, 'Completed'),
(12345692, 'Risk Management', 'Developing risk models, analyzing risk factors and probabilities, and developing recommendations to improve risk management practices.', '2023-03-08', '2023-05-01', 32323, 'Completed'),
(12345693, 'CMS', 'Customer Relationship Management (CRM) system helps manage customer data. It supports sales management, delivers actionable insights', '2023-04-04', '2023-06-02', 12545, 'Developing'),
(12345694, 'Ph', 'the management of artists, shows and other entertainments we can take care of at the event. Entertainment Management System ', '2023-04-05', '2023-05-10', 70000, 'Completed'),
(12345695, 'AQI', 'An air quality index is used by government agencies to communicate to the public how polluted the air currently is or how polluted it is forecast to become.', '2023-03-13', '2023-07-06', 44534, 'System requirements'),
(12345696, 'SES', 'SES S.A. is a Luxembourgish satellite telecommunications network provider supplying video and data connectivity worldwide to broadcasters, content and internet service providers,', '2023-05-01', '2024-05-01', 100000, 'Analysis');

-- --------------------------------------------------------

--
-- Table structure for table `project_manager`
--

CREATE TABLE `project_manager` (
  `managerID` int(7) NOT NULL,
  `joiningDate` date NOT NULL,
  `salary` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_manager`
--

INSERT INTO `project_manager` (`managerID`, `joiningDate`, `salary`) VALUES
(2021591, '2023-03-22', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `tproject`
--

CREATE TABLE `tproject` (
  `tprojID` int(11) NOT NULL,
  `tprojName` varchar(35) NOT NULL,
  `tprojImage` varchar(255) NOT NULL,
  `tprojRef` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tproject`
--

INSERT INTO `tproject` (`tprojID`, `tprojName`, `tprojImage`, `tprojRef`) VALUES
(1, 'Meal Api', 'images/image.png', 'https://melodious-hummingbird-7672ee.netlify.app'),
(2, 'Cycle News', 'images/project-3.jpg', 'https://www.cyclingnews.com'),
(3, 'Meal Course', 'images/project-4.jpg', 'https://legendary-sundae-6873c3.netlify.app'),
(4, 'Office System', 'images/project-6.jpg', 'https://legendary-sundae-6873c3.netlify.app'),
(5, 'Covid-19 Project', 'images/project-5.jpg', 'http://www.dskbangladesh.org/covid-19-projects'),
(6, 'Overwatch Game', 'images/project-2.png', 'https://preeminent-bombolone-3b8fa7.netlify.app');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(7) NOT NULL,
  `Role` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNumber` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `Role`, `password`, `firstName`, `lastName`, `email`, `phoneNumber`) VALUES
(1234567, 'Client', '654321', 'Liam', 'Smith', 'liam.smith@example.com', '555-1234'),
(1598742, 'Client', '654321', 'Samia', 'Islam', 'samia.islam@example.com', '444-5555'),
(2020367, 'Developer', '12345678', 'Akib', 'Raihan', '2020367@iub.edu.bd', '01234567891'),
(2021397, 'Client', '654321', 'Injamam Ul', 'Haque', '2021397@iub.edu.bd', '679-4969'),
(2021591, 'Manager', '12345678', 'Sayed Al', 'Banna', '2021591@iub.edu.bd', '01321082885'),
(2022351, 'Analyst', '123456', 'Rasheeq Ishmam', ' Priyo', '2022351@gmail.com', '01681161002'),
(2022352, 'Developer', '123456', 'Fahad Zaman', 'Chowdhury', '2022352@gmail.com', '01681161000'),
(2022353, 'Developer', '12345678', 'Ayatullah', 'Arefin', '2022353@iub.edu.bd', '01681161001'),
(2022354, 'Analyst', '123456', 'Al', ' Asif', '2022354@gmail.com', '01681161003'),
(2022355, 'Analyst', '123456', 'Tamim', 'Fatema', '2022355@gmail.com', '01681161005'),
(2022356, 'Analyst', '123456', 'Jaima Jahan', 'Khan', '2022356@gmail.com', '01681161006'),
(2022357, 'Designer', '123456', 'Samnoon', ' Ahmed', '2022357@gmail.com', '01681161007'),
(2022358, 'Designer', '123456', 'Mohaiminul Islam', 'Taky', '2022358@gmail.com', '01681161008'),
(2022359, 'Designer', '123456', 'Rahat', 'Hossain', '2022359@gmail.com', '01681161009'),
(2022360, 'Designer', '123456', 'Nafisa S', 'Kohon', '2022360@gmail.com', '01681162001'),
(2345678, 'Client', '654321', 'Emma', 'Johnson', 'emma.johnson@example.com', '555-5678'),
(2675438, 'Client', '654321', 'Farhana', 'Akter', 'farhana.akter@example.com', '246-8013'),
(3456789, 'Client', '654321', 'Md. Akbar', 'Ali', 'akbar.ali@example.com', ' 555-9012'),
(3847612, 'Client', '654321', 'Sumon', 'Khan', 'sumon.khan@example.com', '111-2222'),
(3847614, 'Client', '654321', 'Shamsul', 'Alam', 'shamsul.alam@example.com', '333-4444'),
(4258763, 'Client', '654321', 'Md.', 'Hasanuzzaman', 'hasanuzzaman@example.com', '777-8888'),
(4567890, 'Client', '654321', 'Fatima', 'Begum', 'fatima.begum@example.com', '555-3456'),
(5137892, 'Client', '654321', 'Sabrina', 'Alam', 'sabrina.alam@gmail.com', '987-6543'),
(5467890, 'Client', '654321', 'Ayesha Binte', 'Hasan', 'ayesha.hasan@example.com', '01721123456'),
(5467891, 'Client', '654321', 'Akib', 'Raihan', 'akib.raihan@example.com', '01721123457'),
(5467892, 'Client', '654321', 'Syed', 'Niaz', 'syed.niaz@example.com', '01721123458'),
(5467893, 'Client', '654321', 'Istiaq', 'Ahmed', 'istiaq.ahmed@example.com', '01721123459'),
(5678901, 'Client', '654321', 'Mohammad', 'Rahman', 'mohammad.rahman@example.com', '555-7890'),
(6548901, 'Client', '654321', 'Abdul', 'Malik', 'abdul.malik@example.com', '888-9999'),
(6789012, 'Client', '654321', 'Tahmina', 'Akter', 'tahmina.akter@example.com', '555-2346'),
(7382156, 'Client', '654321', 'Md. Shohel', 'Rana', 'shohel.rana@example.com', '369-2580'),
(7890123, 'Client', '654321', 'Abu', 'Ahmed', 'abu.ahmed@example.com', '555-6789'),
(8423965, 'Client', '654321', 'Sanzar Adnan', 'Alam', 'sanzar@example.com', '123-4567'),
(8901234, 'Client', '654321', 'Farzana', 'Ahmed', 'farzana.ahmed@example.com', '555-0123'),
(9012345, 'Client', '654321', 'Md. Hasan', 'Ali', 'hasan.ali@example.com', '555-4567'),
(9012346, 'Client', '654321', 'Sumaiya', 'Islam', 'sumaiya.islam@example.com', '555-8901'),
(9012347, 'Client', '654321', 'Md.', 'Abdullah', 'abdullah@example.com', '555-2345'),
(9012348, 'Client', '654321', 'Nusrat', 'Jahan', 'nusrat.jahan@example.com', '555-6780'),
(9761235, 'Client', '654321', 'Tasnim', 'Jahan', 'tasnim.jahan@example.com', '555-1212');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD KEY `clientID` (`clientID`);

--
-- Indexes for table `clientprojectreq`
--
ALTER TABLE `clientprojectreq`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clientID` (`clientID`);

--
-- Indexes for table `client_project`
--
ALTER TABLE `client_project`
  ADD PRIMARY KEY (`clientID`,`projectID`),
  ADD KEY `projectID` (`projectID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empID`);

--
-- Indexes for table `employee_project`
--
ALTER TABLE `employee_project`
  ADD PRIMARY KEY (`empID`,`projectID`),
  ADD KEY `projectID` (`projectID`);

--
-- Indexes for table `leaveapplication`
--
ALTER TABLE `leaveapplication`
  ADD PRIMARY KEY (`leaveID`),
  ADD KEY `empID` (`empID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`projectID`);

--
-- Indexes for table `project_manager`
--
ALTER TABLE `project_manager`
  ADD PRIMARY KEY (`managerID`);

--
-- Indexes for table `tproject`
--
ALTER TABLE `tproject`
  ADD PRIMARY KEY (`tprojID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `phoneNumber` (`phoneNumber`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientprojectreq`
--
ALTER TABLE `clientprojectreq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `leaveapplication`
--
ALTER TABLE `leaveapplication`
  MODIFY `leaveID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123475;

--
-- AUTO_INCREMENT for table `tproject`
--
ALTER TABLE `tproject`
  MODIFY `tprojID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`clientID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `clientprojectreq`
--
ALTER TABLE `clientprojectreq`
  ADD CONSTRAINT `clientprojectreq_ibfk_1` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`);

--
-- Constraints for table `client_project`
--
ALTER TABLE `client_project`
  ADD CONSTRAINT `client_project_ibfk_1` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`),
  ADD CONSTRAINT `client_project_ibfk_2` FOREIGN KEY (`projectID`) REFERENCES `project` (`projectID`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`empID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `employee_project`
--
ALTER TABLE `employee_project`
  ADD CONSTRAINT `employee_project_ibfk_1` FOREIGN KEY (`empID`) REFERENCES `employee` (`empID`),
  ADD CONSTRAINT `employee_project_ibfk_2` FOREIGN KEY (`projectID`) REFERENCES `project` (`projectID`);

--
-- Constraints for table `leaveapplication`
--
ALTER TABLE `leaveapplication`
  ADD CONSTRAINT `leaveapplication_ibfk_1` FOREIGN KEY (`empID`) REFERENCES `employee` (`empID`);

--
-- Constraints for table `project_manager`
--
ALTER TABLE `project_manager`
  ADD CONSTRAINT `project_manager_ibfk_1` FOREIGN KEY (`managerID`) REFERENCES `user` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
