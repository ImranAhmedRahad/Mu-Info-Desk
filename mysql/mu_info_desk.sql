-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2024 at 01:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mu_info_desk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fName`, `lName`, `username`, `email`, `password`) VALUES
(1, 'Admin', 'Time', 'admin', 'admin@mail.com', '$2y$10$OITYIyqn3OYGlPnSQ7l3Ou4l4QeIMBpHtKOHVZYXE7aRqedrLvKN2');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `batchNo` int(255) NOT NULL,
  `teacher_id` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_credit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `dept`, `batchNo`, `teacher_id`, `section`, `course_name`, `course_code`, `course_credit`) VALUES
(7, 'CSE', 56, '220-141-104', 'B', 'Project-300', 'CSE 300', '1.5'),
(8, 'CSE', 56, '220-141-105', 'B', 'WPL', 'CSE 323', '3'),
(9, 'CSE', 56, '220-141-106', 'A,B', 'CP', ' CSE 200', '1.5');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `eventTItle` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `eventPhoto` varchar(255) NOT NULL,
  `timtestemp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `eventTItle`, `description`, `eventPhoto`, `timtestemp`) VALUES
(1, ' Lorem ipsum', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.', 'Untitled.jpeg', '2024-05-07 14:02:33'),
(2, 'robotics ', 'organizing sec\r\n', '440455397_942599037664653_8114746236762242256_n.jpg', '2024-05-16 13:23:14');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `jobTitle` varchar(255) NOT NULL,
  `jobDesc` text NOT NULL,
  `contactInfo` text NOT NULL,
  `timtestemp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `jobTitle`, `jobDesc`, `contactInfo`, `timtestemp`) VALUES
(1, 'Need a teacher for CSE department', 'coming soon .........', 'Bateshwar,Sylhet,Bangladesh\r\n\r\ninfo@metrouni.edu.bd\r\n\r\n01313-050066', '2024-05-18 07:59:14'),
(2, 'Need a teacher for english department', 'coming soon..................please wait ', 'Bateshwar,Sylhet,Bangladesh\r\n\r\ninfo@metrouni.edu.bd\r\n\r\n01313-050066', '2024-05-18 10:08:28'),
(5, 'Need a teacher for software department', 'coming soon...............', 'Bateshwar,Sylhet,Bangladesh\r\n\r\ninfo@metrouni.edu.bd\r\n\r\n01313-050066', '2024-05-18 10:22:50');

-- --------------------------------------------------------

--
-- Table structure for table `mess`
--

CREATE TABLE `mess` (
  `mess_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mess`
--

INSERT INTO `mess` (`mess_id`, `name`, `subject`, `email`, `message`, `timeStamp`) VALUES
(1, 'Lorem', 'Lorem Ipsum', 'lorem@mail.com', 'It is a long established fact that a reader will be distracted by the readable content of a page when lookinometimes by accident, sometimes on purpose (injected humour and the like).', '2024-05-12 06:23:36');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `dept` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `section` char(255) NOT NULL,
  `addr` text NOT NULL,
  `student_photo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fName`, `lName`, `mobile`, `dob`, `dept`, `student_id`, `batch`, `section`, `addr`, `student_photo`, `mail`) VALUES
(2, 'Redwan', 'Ahmed', '01787878720', '0000-00-00', 'CSE', '221-115-047', '56', 'B', 'Dakshinbhag,barlekha', 'IMG-20240426-WA0006.jpg', 'redwanahmed2025@gmail.com'),
(3, 'Mowly', 'Ray', '01615504566', '0000-00-00', 'CSE', '221-115-045', '56', 'B', 'Shibgonj,sylhet ', 'IMG-20240426-WA0005.jpg', 'mowlyray421@gmail.com'),
(4, 'Moumita Datta Sristy ', 'Sristy ', '01302192489', '0000-00-00', 'CSE', '221-115-062', '56', 'B', 'Barlekha,Moulvibazar ', '062.jpg', 'moumitadatta489@gmail.com'),
(5, 'Imran Ahmed', ' Rahad', '01893357215', '0000-00-00', 'CSE', '221-115-061', '56', 'B', 'Ambarkana,sylhet ', '61.jpg', 'imranahmedrahad10@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `teacher_id` varchar(255) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `teacher_id`, `fName`, `lName`, `email`, `mobile`, `addr`, `designation`, `dept`) VALUES
(1, '220-141-102', 'Nasif Istiak', 'Remon', 'nasif@metrouni.edu.bd', '01754892383', 'Sylhet', 'Lecturer', 'CSE'),
(2, '220-141-106', 'Dewan Ahmed', 'Muhthasim ', 'dsga@mail.com', '+60166757838', 'Sylhet', 'Lecturer', 'CSE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `mess`
--
ALTER TABLE `mess`
  ADD PRIMARY KEY (`mess_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mess`
--
ALTER TABLE `mess`
  MODIFY `mess_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
