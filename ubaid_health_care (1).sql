-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 03:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ubaid_health_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(165) DEFAULT NULL,
  `pic` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `password`, `pic`) VALUES
('Ubaid', 'Ubaid@gmail.com', '12345678', 'AdminImages/02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `app_id` int(11) NOT NULL,
  `specialist` varchar(100) DEFAULT NULL,
  `doctor` varchar(100) DEFAULT NULL,
  `availability` varchar(100) DEFAULT NULL,
  `app_date` date DEFAULT NULL,
  `app_name` varchar(100) DEFAULT NULL,
  `app_num` int(11) DEFAULT NULL,
  `app_message` varchar(250) DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`app_id`, `specialist`, `doctor`, `availability`, `app_date`, `app_name`, `app_num`, `app_message`, `patient_id`, `status`) VALUES
(1, 'Dentist', 'minhaj', '22:32:00 To 20:33:00', '2023-05-19', 'zahid', 123123, ';lasldkl;asdsldalsmd;asd', 5, 'Approved'),
(2, 'Medicine', 'ubaid', '19:33:00 To 21:33:00', '2023-05-19', 'komail', 234234, 'sdfsdfsdfkljsdflksdjflkslhksfdjfskdfjsldkfjslkdfpiruweipruwetiuertwf', 5, 'Approved'),
(3, 'Dentist', 'minhaj', '22:32:00 To 20:33:00', '2023-06-10', 'jamal', 2147483647, 'asda', 5, 'Approved'),
(4, 'Dentist', 'minhaj', '22:32:00 To 20:33:00', '2023-05-04', 'kashif', 124325354, 'lalsjdklajsdla', 6, NULL),
(5, 'Medicine', 'ubaid', '19:33:00 To 21:33:00', '2023-05-04', 'danish', 23123123, 'askdlasdjklasjd;lkasjd', 8, NULL),
(6, 'Dentist', 'minhaj', '22:32:00 To 20:33:00', '2023-05-05', 'jameel', 123123, 'as;ldla;skdjas\r\n', 8, 'Approved'),
(7, 'Dentist', 'minhaj', '22:32:00 To 20:33:00', '2023-06-06', '', 0, '', 6, NULL),
(8, 'Medicine', 'ubaid', '19:33:00 To 21:33:00', '2023-06-13', 'Saad', 2147483647, '...', 6, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_name`) VALUES
(3, 'Karachi'),
(4, 'Lahore'),
(5, 'Faisalabad'),
(6, 'Rawalpindi'),
(7, 'Multan'),
(8, 'Gujranwala'),
(9, 'Hyderabad'),
(10, 'Quetta'),
(12, 'Peshawar'),
(16, 'malir'),
(19, 'clifton');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dID` int(11) NOT NULL,
  `depart_Name` varchar(100) NOT NULL,
  `depart_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `d_id` int(11) NOT NULL,
  `dName` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `prevention` varchar(100) NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`d_id`, `dName`, `description`, `prevention`, `pic`) VALUES
(1, 'covid-19', 'mskjsksj', 'destrouy', ''),
(4, 'Allergies', 'An allergy is where your body reacts', 'avoid your allergy This is very important', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `docID` int(11) NOT NULL,
  `addDoc_fname` varchar(50) NOT NULL,
  `addDoc_lname` varchar(50) NOT NULL,
  `addDoc_email` varchar(255) NOT NULL,
  `addDoc_specialist` varchar(100) DEFAULT NULL,
  `addDoc_Qualification` varchar(100) DEFAULT NULL,
  `pic` varchar(255) DEFAULT '',
  `addDoc_city` varchar(100) DEFAULT NULL,
  `addDoc_password` varchar(225) DEFAULT NULL,
  `addDoc_time` time DEFAULT NULL,
  `addDoc_endtime` time DEFAULT NULL,
  `addDoc_days` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`docID`, `addDoc_fname`, `addDoc_lname`, `addDoc_email`, `addDoc_specialist`, `addDoc_Qualification`, `pic`, `addDoc_city`, `addDoc_password`, `addDoc_time`, `addDoc_endtime`, `addDoc_days`) VALUES
(1, 'minhaj', 'ahmed', 'minhaj@gmail.com', 'Dentist', 'MBBS', 'userImages/646378149a4a5IMG_20180911_134409_417.jpg', 'Gujranwala', '$2y$10$aR50vo4QXBpeUnSgwlzcBOGMzYIWdRgkeGnDurOxfWcO73sRZBAAu', '22:32:00', '20:33:00', 'Mon,Tues'),
(2, 'ubaid', 'khan', 'ubaid@gmail.com', 'Medicine', 'MBBS', 'userImages/6463784cd625dIMG_20190505_172145_400.jpg', 'malir', '$2y$10$OIElfRcE7xP74rzgAj6q4uqHRc7Ases0VkcAZY47bfzlC0/USjeEq', '19:33:00', '21:33:00', 'Wed,Thus');

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `id` int(11) NOT NULL,
  `p_fname` varchar(100) DEFAULT NULL,
  `p_lname` varchar(100) DEFAULT NULL,
  `p_address` varchar(100) DEFAULT NULL,
  `p_phone` int(11) DEFAULT NULL,
  `p_gender` varchar(100) DEFAULT NULL,
  `P_age` int(11) DEFAULT NULL,
  `p_email` varchar(100) DEFAULT NULL,
  `p_password` varchar(100) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`id`, `p_fname`, `p_lname`, `p_address`, `p_phone`, `p_gender`, `P_age`, `p_email`, `p_password`, `pic`) VALUES
(3, 'Muhammad', 'minhaj', 'malir', 2147483647, 'male', 21, 'minhajahmed@gmail.com', 'minhaj', NULL),
(5, 'Muhammad', 'Fahad', 'Moinabad Malir Karachi', 2147483647, 'male', 20, 'fahadrashid@gmail.com', '$2y$10$Dvto..M6zcFAEfBKvYUC0eUu61uPpdvSkootN/QemGmMkdhJ7k6Jq', NULL),
(6, 'Adbul', 'Rafay', 'Gulshan ', 2147483647, 'male', 22, 'abdulrafay@gmail.com', '$2y$10$.iBdXOz0NTTPIgMoPF13IuNzL3gkyW3B/uJnl4rv5QYc0k2yQ6K6i', NULL),
(7, 'temmor', 'khan', 'jaspdjasdp', 2147483647, 'male', 123, 'temmor@gmail.com', '$2y$10$EGN3qc13F8kbNzlv8ZLhxuBrHxVDxahi/OxmyXtshuBu2vrLg32Zi', NULL),
(8, 'Nimra', 'Sagheer', 'malir', 748327498, 'female', 12, 'nimra@gmail.com', '$2y$10$PzfND/izFKatmIPLI8Oqn.CdlGQ0xQKKjyhNnBZXZJHF1bDzcLHI.', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`app_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dID`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`docID`);

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `docID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient_details`
--
ALTER TABLE `patient_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `patient_id` FOREIGN KEY (`patient_id`) REFERENCES `patient_details` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
