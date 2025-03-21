-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2025 at 01:50 PM
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
-- Database: `bnpss`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_1`
--

CREATE TABLE `admin_1` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `role` enum('SuperAdmin','Admin') NOT NULL DEFAULT 'Admin',
  `gender` varchar(6) NOT NULL,
  `salary` bigint(20) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `school_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `principal_1`
--

CREATE TABLE `principal_1` (
  `id` int(11) NOT NULL,
  `principal_full_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `school_no` int(11) DEFAULT NULL,
  `salary` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `principal_1`
--

INSERT INTO `principal_1` (`id`, `principal_full_name`, `date_of_birth`, `email`, `phone`, `qualification`, `address`, `gender`, `school_name`, `school_no`, `salary`) VALUES
(1, 'Jani Kiranben SE', '1984-11-17', 'kiranjani@gmail.com', '9145768938', 'M.A., B.Ed', 'Bharat Nagar, Bhavnagar', 'Female', 'Brahmmasi Vashishth Primary School', 1, 60000.00);

-- --------------------------------------------------------

--
-- Table structure for table `school_1`
--

CREATE TABLE `school_1` (
  `school_no` int(11) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `standard` varchar(10) NOT NULL,
  `principal_name` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_1`
--

INSERT INTO `school_1` (`school_no`, `school_name`, `standard`, `principal_name`, `address`) VALUES
(1, 'Brahmmasi Vashishth Primary School', '1-8', 'Jani Kiranben SE', 'Kumbharwada Circle'),
(2, 'Brahmmasi Vashishth Primary School', '1-8', 'Sagarbhai Jani', 'Kumbharwada Circle'),
(3, 'Chanakya Primary School', '1-5', 'Patel Mitulbhai Shashikantbhai', 'Banubain Wadi, Near Sikotarma Dairy'),
(4, 'Chanakya Primary School', '1-5', 'Ratilal Vanra', 'Banubain Wadi, Near Sheetlama Dairy'),
(5, 'Shri Shaheed Bachubhai Virjibhai Primary School', '1-8', 'Popatbhai B. Bambhniya', 'Kavikant Road, Ranika Shak Market, Near'),
(7, 'Shri Ambika Primary School', '1-8', 'Geetaben Rathod', 'Mamakohta Road'),
(8, 'Shri Vir Savarkar Primary School', '1-8', 'Bhatt Bharatbhai D.', 'Mafatnagar, Prabhudas Talav, Ruvapari Road'),
(10, 'Shri Anandvihar Primary School', '1-8', 'Mehta Nirvabhai Dineshbhai', 'Anandvihar Akhada, Prabhudas Talav'),
(11, 'Shri Bhuta Rugnath Primary School', '1-8', 'Ramoliya Sangeetaben P.', 'Near Walket Gate Police Chowki'),
(12, 'Shri Bhuta Rugnath Primary School', '1-8', 'Joshi Hiteshkumar M.', 'Near Walket Gate Police Chowki'),
(13, 'Shri Lalkrishna Advani Primary School', '1-8', 'Makwana Bhavinbhai B.', 'Savabhaino Chowk, Khedutvas'),
(14, 'Shri Jalarambapa Primary School', '1-8', 'Parmar Rameshbhai D.', 'Behind Jalaram Mandir, Anandnagar'),
(15, 'Shri Jalarambapa Primary School', '1-8', 'Acharya Geetaben G.', 'Behind Jalaram Mandir, Anandnagar'),
(18, 'Mathuriya Bhanji Abji Primary School', '1-8', 'Dabhai Pratapbhai', 'Deepakchok, Anandnagar'),
(19, 'Mathuriya Bhanji Abji Primary School', '1-8', 'Naiya Dineshbhai', 'Deepakchok, Anandnagar'),
(20, 'Shri Rabindranath Tagore Primary School', '1-8', 'Thakkar Neelaben N.', 'Opposite Women\'s College, Diamond Chowk'),
(22, 'Shri Swami Vivekanand Primary School', '1-8', 'Chauhan Ranjitsingh J.', 'Near Yashwantrai Natya Griha'),
(24, 'Shri Subhashchandra Bose Primary School', '1-5', 'Bipinbhai Vaghela', 'Subhashnagar Pul, Aerodrome Road'),
(25, 'Shri A.V. School Primary School', '1-8', 'Hetalkumari M. Thathagar', 'Crescent'),
(28, 'Shri Santkanvaram Primary School', '1-8', 'Devani Kishanchand Rewachand', 'Rasala Camp'),
(30, 'Madhavray Sadhashiv Golwalkar Primary School', '1-8', 'Chouhan Yogeshbhai', 'Opposite Governance Office, Navapara'),
(31, 'Shri Nanimajirajba Primary School', '1-8', 'Geetaben Rajyaguru', 'Near Barton Library'),
(33, 'Shri Nanimajirajba Primary School (Urdu)', '1-5', 'Meru Nishaben', 'Near Barton Library'),
(36, 'Dr. C.V. Raman Primary School', '1-8', 'Joshi Nikulbhai J.', 'Court, Haluria Chowk'),
(37, 'Shri Moti Majirajba Primary School', '1-8', 'Agatsyabhai Pal', 'Martyr Smarak, Haluria Chowk'),
(38, 'Shri Atal Bihari Vajpayee Primary School', '1-8', 'Qureshi Idreesbhai R.', 'Opposite ST Bus Stand, Home Guard Office, Panwadi'),
(40, 'Chhatrapati Shivaji Primary School', '1-8', 'Hinaben', 'Near Fire Station, Nirmal Nagar'),
(42, 'Shri Shaheed Bhagat Singh Primary School', '1-8', 'Baraiya Waljibhai K.', 'Near Sidi Takiya, Vadhva'),
(44, 'Shri Maharana Pratap Primary School', '1-8', 'Dodhiya Maganbhai P.', 'Near Washing Ghat, Bajrangdasbapa Temple'),
(45, 'Shri Maharana Pratap Primary School', '1-8', 'Parmar Savjibhai S.', 'Near Washing Ghat, Bajrangdasbapa Temple'),
(47, 'Shri Lalbahadur Shastri Primary School', '1-8', 'Jorsinghbhai Dholetar', 'Behind Motibag Town Hall'),
(48, 'Shri Kasturba Mohandas Gandhi Primary School', '1-8', 'Gohel Hreshbhai J.', 'Milni Chali Pata, Opposite Kumbharwada'),
(49, 'Jhansi Ki Rani Laxmibai Primary School', '1-8', 'Bambhaniya Jagdishbhai', 'Aksharpark, Kumbharwada'),
(50, 'Dr. Abdul Kalam Primary School', '1-8', 'Joshi Chiragbhai', 'Gujarat Housing Board, Narir Road'),
(51, 'Dr. Abdul Kalam Primary School', '1-8', 'Dave Rajendrabhai R.', 'Gujarat Housing Board, Narir Road'),
(52, 'Jhansi Ki Rani Laxmibai Primary School', '1-8', 'Kaji Mahammadzubair', 'Aksharpark, Kumbharwada, Nari Road'),
(53, 'Shri Pramukh Swami Maharaj Primary School', '1-8', 'Upadhyay Puneet R.', 'Mahadev Nagar, Akhlol Jakat Naka, Chitra'),
(54, 'Sant Shri Mastaram Bapa Primary School', '1-8', 'Shah Paras K.', 'Behind Godown, Chitra'),
(55, 'Gautam Buddha Primary School', '1-8', 'Bhatt Kamlesh N.', 'Mahadev Nagar, Akhlol Jakat Naka, Opposite Chitra Fulser'),
(58, 'Shri Sar Takhtsinghji Primary School', '1-8', 'Amrubhai Jeblia', 'Mapabhai Bharwad Marg, Vithalwadi'),
(59, 'Sardar Patel Primary School', '1-8 (Girls', 'Sarvaiya Pradhumnsingh K.', 'Near Gujarat Housing Board Office, Shastrinagar'),
(60, 'Sardar Patel Primary School', '1-8 (Boys)', 'Narendra Singh Bhagji Zala', 'Near Gujarat Housing Board Office, Shastrinagar'),
(62, 'Shri Mahatma Gandhi Primary School', '1-8', 'Chhatrola Dineshbhai K.', 'Pandya Sheri, Hadanagar'),
(63, 'Shri Mahatma Gandhi Primary School', '1-8', 'Baraiya Manjibhai R.', 'Sarvodaya Society, Talpada Koli Jnati Wadi, Hadanagar'),
(65, 'Shri Gaurishankar Primary School', '1-8', 'Agwan Saleembhai N.', 'Near Boretalav Bal Vatika'),
(67, 'Shri Chandramouli Primary School', '1-8', 'Pareshbhai Khasia', 'Near Akhilesh Circle, Ghogharod'),
(68, 'Shri Krishnapara Primary School', '1-8', 'Mahendra Upadhyay', 'Opposite Ramapir Mandir, Khamach Goshala, Ghogharod'),
(69, 'Pandit Dindayal Upadhyaya Sanskrit Dham', '1-8', 'Pal Janubhai C.', 'Lambehanuman, Near Sardar Nagar'),
(70, 'Pandit Dindayal Upadhyaya Sanskrit Dham', '1-8', 'Vegad Shankarbhai B.', 'Lambehanuman, Near Sardar Nagar'),
(72, 'Dr. Hedgewar Primary School', '1-8', 'Kothariya Sabnamben', 'E Division, Vardhman Nagar, Bharat Nagar'),
(73, 'Sardar Singh Rana Primary School', '1-8', 'Zankha Jalpaben Jaysukhlal', 'Opposite Aryasamaj Hall'),
(76, 'Sardar Vallabhbhai Patel Primary School', '1-8', 'Rajyaguru Hresh Kaneyalal', 'Opposite Rakeshwar Mahadev Mandir'),
(80, 'Dr. Bhimrao Ambedkar Primary School', '1-8', 'Meenakshibhen', 'Near MJ Commerce College, Vidyanagar'),
(81, 'Maharaja Krishnakumarsinhji Primary School', '1-8', 'Mehta Akshaybhai B.', 'Military Society, Bhavnagar Para'),
(83, 'Shri Maruti Yogaksham Primary School', '1-8', 'Madhavjibhai Pandya', 'Opposite Kaminiya Nagar, Near Virani School, Kaliabid');

-- --------------------------------------------------------

--
-- Table structure for table `student_1`
--

CREATE TABLE `student_1` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `standard` int(11) NOT NULL CHECK (`standard` between 1 and 8),
  `roll` int(11) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `mother_phone_number` varchar(15) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `father_phone_number` varchar(15) NOT NULL,
  `blood_group` enum('A+','A-','B+','B-','AB+','AB-','O+','O-') NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `school_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_1`
--

INSERT INTO `student_1` (`id`, `full_name`, `date_of_birth`, `address`, `gender`, `standard`, `roll`, `mother_name`, `mother_phone_number`, `father_name`, `father_phone_number`, `blood_group`, `school_name`, `school_no`) VALUES
(1, 'Harsh Patel', '2017-03-12', 'Krishna Nagar, Bhavnagar', 'Male', 1, 1, 'Meena Patel', '9876543210', 'Rajesh Patel', '9876543201', 'O+', 'Brahmmasi Vashishth Primary School', 1),
(2, 'Jiya Joshi', '2017-07-05', 'Shiv Shakti Society, Bhavnagar', 'Female', 1, 2, 'Rupa Joshi', '9876543211', 'Dinesh Joshi', '9876543202', 'A+', 'Brahmmasi Vashishth Primary School', 1),
(3, 'Aryan Trivedi', '2017-01-20', 'Bhakti Nagar, Bhavnagar', 'Male', 1, 3, 'Anita Trivedi', '9876543212', 'Ketan Trivedi', '9876543203', 'B+', 'Brahmmasi Vashishth Primary School', 1),
(4, 'Rudra Shah', '2017-06-15', 'Ghogha Circle, Bhavnagar', 'Male', 1, 4, 'Falguni Shah', '9876543213', 'Mahesh Shah', '9876543204', 'AB+', 'Brahmmasi Vashishth Primary School', 1),
(5, 'Anaya Mehta', '2017-04-18', 'Kalanala, Bhavnagar', 'Female', 1, 5, 'Sejal Mehta', '9876543214', 'Paresh Mehta', '9876543205', 'O-', 'Brahmmasi Vashishth Primary School', 1),
(6, 'Vihan Dave', '2017-09-08', 'Nari Circle, Bhavnagar', 'Male', 1, 6, 'Rita Dave', '9876543215', 'Mitesh Dave', '9876543206', 'B-', 'Brahmmasi Vashishth Primary School', 1),
(7, 'Mira Desai', '2017-05-23', 'Sardar Nagar, Bhavnagar', 'Female', 1, 7, 'Alpana Desai', '9876543216', 'Manish Desai', '9876543207', 'A-', 'Brahmmasi Vashishth Primary School', 1),
(8, 'Devansh Bhatt', '2017-11-11', 'Tarsamiya, Bhavnagar', 'Male', 1, 8, 'Sonali Bhatt', '9876543217', 'Vipul Bhatt', '9876543208', 'O+', 'Brahmmasi Vashishth Primary School', 1),
(9, 'Kavya Gohil', '2017-02-14', 'Nana Chiloda, Bhavnagar', 'Female', 1, 9, 'Jigna Gohil', '9876543218', 'Raj Gohil', '9876543209', 'A+', 'Brahmmasi Vashishth Primary School', 1),
(10, 'Dhruv Vyas', '2017-10-29', 'Chitra GIDC, Bhavnagar', 'Male', 1, 10, 'Meghna Vyas', '9876543220', 'Hiren Vyas', '9876543219', 'B+', 'Brahmmasi Vashishth Primary School', 1),
(11, 'Tisha Pandya', '2017-08-30', 'Aksharwadi, Bhavnagar', 'Female', 1, 11, 'Neha Pandya', '9876543221', 'Ramesh Pandya', '9876543222', 'O-', 'Brahmmasi Vashishth Primary School', 1),
(12, 'Reyansh Chavda', '2017-07-15', 'Bharatnagar, Bhavnagar', 'Male', 1, 12, 'Pooja Chavda', '9876543223', 'Naresh Chavda', '9876543224', 'AB+', 'Brahmmasi Vashishth Primary School', 1),
(13, 'Ishika Solanki', '2017-03-28', 'Madhav Nagar, Bhavnagar', 'Female', 1, 13, 'Rina Solanki', '9876543225', 'Jitendra Solanki', '9876543226', 'A-', 'Brahmmasi Vashishth Primary School', 1),
(14, 'Karan Zala', '2017-05-09', 'Navapara, Bhavnagar', 'Male', 1, 14, 'Hetal Zala', '9876543227', 'Bhavesh Zala', '9876543228', 'B-', 'Brahmmasi Vashishth Primary School', 1),
(15, 'Rudri Parmar', '2017-12-22', 'Kumbharwada, Bhavnagar', 'Female', 1, 15, 'Payal Parmar', '9876543229', 'Ravi Parmar', '9876543230', 'O+', 'Brahmmasi Vashishth Primary School', 1),
(16, 'Vivaan Rathod', '2017-09-17', 'Vora Bazar, Bhavnagar', 'Male', 1, 16, 'Bhavna Rathod', '9876543231', 'Jignesh Rathod', '9876543232', 'A+', 'Brahmmasi Vashishth Primary School', 1),
(17, 'Saanvi Jadeja', '2017-06-25', 'Vadva, Bhavnagar', 'Female', 1, 17, 'Swati Jadeja', '9876543233', 'Yogesh Jadeja', '9876543234', 'B+', 'Brahmmasi Vashishth Primary School', 1),
(18, 'Parth Gajjar', '2017-01-05', 'Ramnagar, Bhavnagar', 'Male', 1, 18, 'Bina Gajjar', '9876543235', 'Vishal Gajjar', '9876543236', 'AB-', 'Brahmmasi Vashishth Primary School', 1),
(19, 'Nidhi Chauhan', '2017-07-07', 'Subhash Nagar, Bhavnagar', 'Female', 1, 19, 'Roshni Chauhan', '9876543237', 'Ashok Chauhan', '9876543238', 'O-', 'Brahmmasi Vashishth Primary School', 1),
(20, 'Krishna Makwana', '2017-04-14', 'Bhavnagar City, Bhavnagar', 'Male', 1, 20, 'Sarita Makwana', '9876543239', 'Mahendra Makwana', '9876543240', 'A-', 'Brahmmasi Vashishth Primary School', 1),
(21, 'Aarav Patel', '2016-02-10', 'Krishna Nagar, Bhavnagar', 'Male', 2, 1, 'Meena Patel', '9876543250', 'Rajesh Patel', '9876543241', 'O+', 'Brahmmasi Vashishth Primary School', 1),
(22, 'Khushi Joshi', '2016-05-20', 'Shiv Shakti Society, Bhavnagar', 'Female', 2, 2, 'Rupa Joshi', '9876543251', 'Dinesh Joshi', '9876543242', 'A+', 'Brahmmasi Vashishth Primary School', 1),
(23, 'Vihaan Trivedi', '2016-08-15', 'Bhakti Nagar, Bhavnagar', 'Male', 2, 3, 'Anita Trivedi', '9876543252', 'Ketan Trivedi', '9876543243', 'B+', 'Brahmmasi Vashishth Primary School', 1),
(24, 'Reeva Shah', '2016-03-25', 'Ghogha Circle, Bhavnagar', 'Female', 2, 4, 'Falguni Shah', '9876543253', 'Mahesh Shah', '9876543244', 'AB+', 'Brahmmasi Vashishth Primary School', 1),
(25, 'Parth Mehta', '2016-07-12', 'Kalanala, Bhavnagar', 'Male', 2, 5, 'Sejal Mehta', '9876543254', 'Paresh Mehta', '9876543245', 'O-', 'Brahmmasi Vashishth Primary School', 1),
(26, 'Riya Dave', '2016-09-30', 'Nari Circle, Bhavnagar', 'Female', 2, 6, 'Rita Dave', '9876543255', 'Mitesh Dave', '9876543246', 'B-', 'Brahmmasi Vashishth Primary School', 1),
(27, 'Aryan Desai', '2016-01-18', 'Sardar Nagar, Bhavnagar', 'Male', 2, 7, 'Alpana Desai', '9876543256', 'Manish Desai', '9876543247', 'A-', 'Brahmmasi Vashishth Primary School', 1),
(28, 'Aadhya Bhatt', '2016-06-10', 'Tarsamiya, Bhavnagar', 'Female', 2, 8, 'Sonali Bhatt', '9876543257', 'Vipul Bhatt', '9876543248', 'O+', 'Brahmmasi Vashishth Primary School', 1),
(29, 'Kabir Gohil', '2016-04-05', 'Nana Chiloda, Bhavnagar', 'Male', 2, 9, 'Jigna Gohil', '9876543258', 'Raj Gohil', '9876543249', 'A+', 'Brahmmasi Vashishth Primary School', 1),
(30, 'Krisha Vyas', '2016-10-29', 'Chitra GIDC, Bhavnagar', 'Female', 2, 10, 'Meghna Vyas', '9876543260', 'Hiren Vyas', '9876543259', 'B+', 'Brahmmasi Vashishth Primary School', 1),
(31, 'Darsh Pandya', '2016-08-22', 'Aksharwadi, Bhavnagar', 'Male', 2, 11, 'Neha Pandya', '9876543261', 'Ramesh Pandya', '9876543262', 'O-', 'Brahmmasi Vashishth Primary School', 1),
(32, 'Nisha Chavda', '2016-07-16', 'Bharatnagar, Bhavnagar', 'Female', 2, 12, 'Pooja Chavda', '9876543263', 'Naresh Chavda', '9876543264', 'AB+', 'Brahmmasi Vashishth Primary School', 1),
(33, 'Rudra Solanki', '2016-03-08', 'Madhav Nagar, Bhavnagar', 'Male', 2, 13, 'Rina Solanki', '9876543265', 'Jitendra Solanki', '9876543266', 'A-', 'Brahmmasi Vashishth Primary School', 1),
(34, 'Tanvi Zala', '2016-05-19', 'Navapara, Bhavnagar', 'Female', 2, 14, 'Hetal Zala', '9876543267', 'Bhavesh Zala', '9876543268', 'B-', 'Brahmmasi Vashishth Primary School', 1),
(35, 'Jay Parmar', '2016-12-12', 'Kumbharwada, Bhavnagar', 'Male', 2, 15, 'Payal Parmar', '9876543269', 'Ravi Parmar', '9876543270', 'O+', 'Brahmmasi Vashishth Primary School', 1),
(36, 'Ishita Rathod', '2016-09-02', 'Vora Bazar, Bhavnagar', 'Female', 2, 16, 'Bhavna Rathod', '9876543271', 'Jignesh Rathod', '9876543272', 'A+', 'Brahmmasi Vashishth Primary School', 1),
(37, 'Harshil Jadeja', '2016-06-28', 'Vadva, Bhavnagar', 'Male', 2, 17, 'Swati Jadeja', '9876543273', 'Yogesh Jadeja', '9876543274', 'B+', 'Brahmmasi Vashishth Primary School', 1),
(38, 'Moksha Gajjar', '2016-01-07', 'Ramnagar, Bhavnagar', 'Female', 2, 18, 'Bina Gajjar', '9876543275', 'Vishal Gajjar', '9876543276', 'AB-', 'Brahmmasi Vashishth Primary School', 1),
(39, 'Shivam Chauhan', '2016-07-21', 'Subhash Nagar, Bhavnagar', 'Male', 2, 19, 'Roshni Chauhan', '9876543277', 'Ashok Chauhan', '9876543278', 'O-', 'Brahmmasi Vashishth Primary School', 1),
(40, 'Aarya Makwana', '2016-04-14', 'Bhavnagar City, Bhavnagar', 'Female', 2, 20, 'Sarita Makwana', '9876543279', 'Mahendra Makwana', '9876543280', 'A-', 'Brahmmasi Vashishth Primary School', 1),
(41, 'Rohan Patel', '2015-02-10', 'Krishna Nagar, Bhavnagar', 'Male', 3, 1, 'Meena Patel', '9876543241', 'Rajesh Patel', '9876543242', 'O+', 'Brahmmasi Vashishth Primary School', 1),
(42, 'Khushi Joshi', '2015-06-18', 'Shiv Shakti Society, Bhavnagar', 'Female', 3, 2, 'Rupa Joshi', '9876543243', 'Dinesh Joshi', '9876543244', 'A+', 'Brahmmasi Vashishth Primary School', 1),
(43, 'Pratham Trivedi', '2015-01-22', 'Bhakti Nagar, Bhavnagar', 'Male', 3, 3, 'Anita Trivedi', '9876543245', 'Ketan Trivedi', '9876543246', 'B+', 'Brahmmasi Vashishth Primary School', 1),
(44, 'Aarav Shah', '2015-08-14', 'Ghogha Circle, Bhavnagar', 'Male', 3, 4, 'Falguni Shah', '9876543247', 'Mahesh Shah', '9876543248', 'AB+', 'Brahmmasi Vashishth Primary School', 1),
(45, 'Diya Mehta', '2015-05-30', 'Kalanala, Bhavnagar', 'Female', 3, 5, 'Sejal Mehta', '9876543249', 'Paresh Mehta', '9876543250', 'O-', 'Brahmmasi Vashishth Primary School', 1),
(46, 'Yug Dave', '2015-09-12', 'Nari Circle, Bhavnagar', 'Male', 3, 6, 'Rita Dave', '9876543251', 'Mitesh Dave', '9876543252', 'B-', 'Brahmmasi Vashishth Primary School', 1),
(47, 'Naina Desai', '2015-03-19', 'Sardar Nagar, Bhavnagar', 'Female', 3, 7, 'Alpana Desai', '9876543253', 'Manish Desai', '9876543254', 'A-', 'Brahmmasi Vashishth Primary School', 1),
(48, 'Dhruv Bhatt', '2015-11-09', 'Tarsamiya, Bhavnagar', 'Male', 3, 8, 'Sonali Bhatt', '9876543255', 'Vipul Bhatt', '9876543256', 'O+', 'Brahmmasi Vashishth Primary School', 1),
(49, 'Riya Gohil', '2015-02-25', 'Nana Chiloda, Bhavnagar', 'Female', 3, 9, 'Jigna Gohil', '9876543257', 'Raj Gohil', '9876543258', 'A+', 'Brahmmasi Vashishth Primary School', 1),
(50, 'Harsh Vyas', '2015-10-28', 'Chitra GIDC, Bhavnagar', 'Male', 3, 10, 'Meghna Vyas', '9876543259', 'Hiren Vyas', '9876543260', 'B+', 'Brahmmasi Vashishth Primary School', 1),
(51, 'Isha Pandya', '2015-07-14', 'Aksharwadi, Bhavnagar', 'Female', 3, 11, 'Neha Pandya', '9876543261', 'Ramesh Pandya', '9876543262', 'O-', 'Brahmmasi Vashishth Primary School', 1),
(52, 'Kush Chavda', '2015-06-22', 'Bharatnagar, Bhavnagar', 'Male', 3, 12, 'Pooja Chavda', '9876543263', 'Naresh Chavda', '9876543264', 'AB+', 'Brahmmasi Vashishth Primary School', 1),
(53, 'Vrunda Solanki', '2015-03-05', 'Madhav Nagar, Bhavnagar', 'Female', 3, 13, 'Rina Solanki', '9876543265', 'Jitendra Solanki', '9876543266', 'A-', 'Brahmmasi Vashishth Primary School', 1),
(54, 'Keshav Zala', '2015-09-17', 'Navapara, Bhavnagar', 'Male', 3, 14, 'Hetal Zala', '9876543267', 'Bhavesh Zala', '9876543268', 'B-', 'Brahmmasi Vashishth Primary School', 1),
(55, 'Riddhi Parmar', '2015-12-10', 'Kumbharwada, Bhavnagar', 'Female', 3, 15, 'Payal Parmar', '9876543269', 'Ravi Parmar', '9876543270', 'O+', 'Brahmmasi Vashishth Primary School', 1),
(56, 'Ayaan Rathod', '2015-08-15', 'Vora Bazar, Bhavnagar', 'Male', 3, 16, 'Bhavna Rathod', '9876543271', 'Jignesh Rathod', '9876543272', 'A+', 'Brahmmasi Vashishth Primary School', 1),
(57, 'Manya Jadeja', '2015-06-02', 'Vadva, Bhavnagar', 'Female', 3, 17, 'Swati Jadeja', '9876543273', 'Yogesh Jadeja', '9876543274', 'B+', 'Brahmmasi Vashishth Primary School', 1),
(58, 'Rohan Gajjar', '2015-01-18', 'Ramnagar, Bhavnagar', 'Male', 3, 18, 'Bina Gajjar', '9876543275', 'Vishal Gajjar', '9876543276', 'AB-', 'Brahmmasi Vashishth Primary School', 1),
(59, 'Sneha Chauhan', '2015-07-20', 'Subhash Nagar, Bhavnagar', 'Female', 3, 19, 'Roshni Chauhan', '9876543277', 'Ashok Chauhan', '9876543278', 'O-', 'Brahmmasi Vashishth Primary School', 1),
(60, 'Yash Makwana', '2015-04-11', 'Bhavnagar City, Bhavnagar', 'Male', 3, 20, 'Sarita Makwana', '9876543279', 'Mahendra Makwana', '9876543280', 'A-', 'Brahmmasi Vashishth Primary School', 1),
(61, 'Amit Vaghela', '2014-03-21', 'Kaliyabid, Bhavnagar', 'Male', 4, 1, 'Rekha Vaghela', '9876543321', 'Mahesh Vaghela', '9876543322', 'A+', 'Brahmmasi Vashishth Primary School', 1),
(62, 'Pooja Rajput', '2014-07-08', 'Devbagh, Bhavnagar', 'Female', 4, 2, 'Kalpana Rajput', '9876543323', 'Ravindra Rajput', '9876543324', 'O+', 'Brahmmasi Vashishth Primary School', 1),
(63, 'Kishan Gohil', '2014-01-11', 'Chavdigate, Bhavnagar', 'Male', 4, 3, 'Manisha Gohil', '9876543325', 'Suresh Gohil', '9876543326', 'B+', 'Brahmmasi Vashishth Primary School', 1),
(64, 'Sneha Parmar', '2014-05-15', 'Vidhyanagar, Bhavnagar', 'Female', 4, 4, 'Rita Parmar', '9876543327', 'Anil Parmar', '9876543328', 'AB+', 'Brahmmasi Vashishth Primary School', 1),
(65, 'Raj Mehta', '2014-02-28', 'Shastrinagar, Bhavnagar', 'Male', 4, 5, 'Jyoti Mehta', '9876543329', 'Hitesh Mehta', '9876543330', 'O-', 'Brahmmasi Vashishth Primary School', 1),
(66, 'Riya Thakkar', '2014-08-10', 'Sidsar, Bhavnagar', 'Female', 4, 6, 'Hina Thakkar', '9876543331', 'Kamal Thakkar', '9876543332', 'B-', 'Brahmmasi Vashishth Primary School', 1),
(67, 'Tushar Chauhan', '2014-04-17', 'Khodiarnagar, Bhavnagar', 'Male', 4, 7, 'Rupal Chauhan', '9876543333', 'Manoj Chauhan', '9876543334', 'A-', 'Brahmmasi Vashishth Primary School', 1),
(68, 'Bhavya Zala', '2014-09-25', 'Jashonath Chowk, Bhavnagar', 'Female', 4, 8, 'Falguni Zala', '9876543335', 'Jignesh Zala', '9876543336', 'O+', 'Brahmmasi Vashishth Primary School', 1),
(69, 'Karan Rathod', '2014-06-14', 'Ghogha Road, Bhavnagar', 'Male', 4, 9, 'Snehal Rathod', '9876543337', 'Jayesh Rathod', '9876543338', 'A+', 'Brahmmasi Vashishth Primary School', 1),
(70, 'Dharmesh Makwana', '2014-12-03', 'Nutan Society, Bhavnagar', 'Male', 4, 10, 'Komal Makwana', '9876543339', 'Prakash Makwana', '9876543340', 'B+', 'Brahmmasi Vashishth Primary School', 1),
(71, 'Ishita Solanki', '2014-07-19', 'Mahadev Nagar, Bhavnagar', 'Female', 4, 11, 'Vandana Solanki', '9876543341', 'Jiten Solanki', '9876543342', 'O-', 'Brahmmasi Vashishth Primary School', 1),
(72, 'Arjun Dave', '2014-10-01', 'Mota Khutavada, Bhavnagar', 'Male', 4, 12, 'Bina Dave', '9876543343', 'Rajendra Dave', '9876543344', 'AB+', 'Brahmmasi Vashishth Primary School', 1),
(73, 'Pritisha Pandya', '2014-03-07', 'Bhavnagar Station Road, Bhavnagar', 'Female', 4, 13, 'Neeta Pandya', '9876543345', 'Satish Pandya', '9876543346', 'A-', 'Brahmmasi Vashishth Primary School', 1),
(74, 'Ronak Chavda', '2014-05-26', 'Mahila College Road, Bhavnagar', 'Male', 4, 14, 'Rekha Chavda', '9876543347', 'Paresh Chavda', '9876543348', 'B-', 'Brahmmasi Vashishth Primary School', 1),
(75, 'Jinal Joshi', '2014-11-08', 'Vijaynagar, Bhavnagar', 'Female', 4, 15, 'Anjana Joshi', '9876543349', 'Mahendra Joshi', '9876543350', 'O+', 'Brahmmasi Vashishth Primary School', 1),
(76, 'Sahil Gajjar', '2014-09-22', 'Vora Bazaar, Bhavnagar', 'Male', 4, 16, 'Meera Gajjar', '9876543351', 'Bhavesh Gajjar', '9876543352', 'A+', 'Brahmmasi Vashishth Primary School', 1),
(77, 'Mihika Vyas', '2014-06-09', 'Sanjay Nagar, Bhavnagar', 'Female', 4, 17, 'Sarita Vyas', '9876543353', 'Ketan Vyas', '9876543354', 'B+', 'Brahmmasi Vashishth Primary School', 1),
(78, 'Harshil Jadeja', '2014-01-27', 'Paliyad Road, Bhavnagar', 'Male', 4, 18, 'Amisha Jadeja', '9876543355', 'Nirav Jadeja', '9876543356', 'AB-', 'Brahmmasi Vashishth Primary School', 1),
(79, 'Vidhi Chauhan', '2014-07-05', 'Gandhinagar Society, Bhavnagar', 'Female', 4, 19, 'Laxmi Chauhan', '9876543357', 'Sanjay Chauhan', '9876543358', 'O-', 'Brahmmasi Vashishth Primary School', 1),
(80, 'Meet Makwana', '2014-04-12', 'Madhav Park, Bhavnagar', 'Male', 4, 20, 'Sejal Makwana', '9876543359', 'Kamlesh Makwana', '9876543360', 'A-', 'Brahmmasi Vashishth Primary School', 1),
(81, 'Fenil Patel', '2013-08-17', 'Kaliyabid, Bhavnagar', 'Male', 5, 1, 'Falguni Patel', '9876523765', 'Rupesh Patel', '9988843362', 'B+', 'Brahmmasi Vashishth Primary School', 1),
(82, 'Aarohi Shah', '2013-07-22', 'Krishna Nagar, Bhavnagar', 'Female', 5, 2, 'Rekha Shah', '9876543363', 'Mahesh Shah', '9876543364', 'O+', 'Brahmmasi Vashishth Primary School', 1),
(83, 'Vansh Trivedi', '2013-01-10', 'Sidsar, Bhavnagar', 'Male', 5, 3, 'Pooja Trivedi', '9876543365', 'Dinesh Trivedi', '9876543366', 'B+', 'Brahmmasi Vashishth Primary School', 1),
(84, 'Krisha Gohil', '2013-05-25', 'Tarsamiya, Bhavnagar', 'Female', 5, 4, 'Sonal Gohil', '9876543367', 'Rajesh Gohil', '9876543368', 'AB+', 'Brahmmasi Vashishth Primary School', 1),
(85, 'Om Rathod', '2013-02-18', 'Ghogha Circle, Bhavnagar', 'Male', 5, 5, 'Falguni Rathod', '9876543369', 'Jitendra Rathod', '9876543370', 'O-', 'Brahmmasi Vashishth Primary School', 1),
(86, 'Disha Mehta', '2013-09-05', 'Shivaji Nagar, Bhavnagar', 'Female', 5, 6, 'Sejal Mehta', '9876543371', 'Paresh Mehta', '9876543372', 'B-', 'Brahmmasi Vashishth Primary School', 1),
(87, 'Jay Dave', '2013-04-29', 'Sardar Nagar, Bhavnagar', 'Male', 5, 7, 'Kavita Dave', '9876543373', 'Hiren Dave', '9876543374', 'A-', 'Brahmmasi Vashishth Primary School', 1),
(88, 'Bhakti Desai', '2013-11-13', 'Mahila College Road, Bhavnagar', 'Female', 5, 8, 'Meghna Desai', '9876543375', 'Naresh Desai', '9876543376', 'O+', 'Brahmmasi Vashishth Primary School', 1),
(89, 'Darshan Bhatt', '2013-02-07', 'Subhash Nagar, Bhavnagar', 'Male', 5, 9, 'Neeta Bhatt', '9876543377', 'Ramesh Bhatt', '9876543378', 'A+', 'Brahmmasi Vashishth Primary School', 1),
(90, 'Nidhi Zala', '2013-10-21', 'Chitra GIDC, Bhavnagar', 'Female', 5, 10, 'Jigna Zala', '9876543379', 'Bhavesh Zala', '9876543380', 'B+', 'Brahmmasi Vashishth Primary School', 1),
(91, 'Tirth Solanki', '2013-08-30', 'Aksharwadi, Bhavnagar', 'Male', 5, 11, 'Anita Solanki', '9876543381', 'Manish Solanki', '9876543382', 'O-', 'Brahmmasi Vashishth Primary School', 1),
(92, 'Tanishka Parmar', '2013-06-15', 'Ramnagar, Bhavnagar', 'Female', 5, 12, 'Neha Parmar', '9876543383', 'Jitendra Parmar', '9876543384', 'AB+', 'Brahmmasi Vashishth Primary School', 1),
(93, 'Shivam Chavda', '2013-03-09', 'Madhav Nagar, Bhavnagar', 'Male', 5, 13, 'Rupal Chavda', '9876543385', 'Ashok Chavda', '9876543386', 'A-', 'Brahmmasi Vashishth Primary School', 1),
(94, 'Roshni Pandya', '2013-05-11', 'Navapara, Bhavnagar', 'Female', 5, 14, 'Swati Pandya', '9876543387', 'Yogesh Pandya', '9876543388', 'B-', 'Brahmmasi Vashishth Primary School', 1),
(95, 'Rudra Jadeja', '2013-12-22', 'Vadva, Bhavnagar', 'Male', 5, 15, 'Bhavna Jadeja', '9876543389', 'Paresh Jadeja', '9876543390', 'O+', 'Brahmmasi Vashishth Primary School', 1),
(96, 'Meera Chauhan', '2013-09-17', 'Bhakti Nagar, Bhavnagar', 'Female', 5, 16, 'Payal Chauhan', '9876543391', 'Kamal Chauhan', '9876543392', 'A+', 'Brahmmasi Vashishth Primary School', 1),
(97, 'Parth Gajjar', '2013-07-25', 'Vora Bazar, Bhavnagar', 'Male', 5, 17, 'Sonali Gajjar', '9876543393', 'Nirav Gajjar', '9876543394', 'B+', 'Brahmmasi Vashishth Primary School', 1),
(98, 'Simran Makwana', '2013-01-05', 'Jashonath Chowk, Bhavnagar', 'Female', 5, 18, 'Sarita Makwana', '9876543395', 'Mahendra Makwana', '9876543396', 'AB-', 'Brahmmasi Vashishth Primary School', 1),
(99, 'Krishna Vyas', '2013-07-07', 'Nana Chiloda, Bhavnagar', 'Male', 5, 19, 'Roshni Vyas', '9876543397', 'Sanjay Vyas', '9876543398', 'O-', 'Brahmmasi Vashishth Primary School', 1),
(100, 'Anaya Makwana', '2013-04-14', 'Bhavnagar City, Bhavnagar', 'Female', 5, 20, 'Laxmi Makwana', '9876543399', 'Kamlesh Makwana', '9876543400', 'A-', 'Brahmmasi Vashishth Primary School', 1),
(101, 'Devansh Joshi', '2012-03-12', 'Kaliyabid, Bhavnagar', 'Male', 6, 1, 'Hina Joshi', '9876543401', 'Mahesh Joshi', '9876543402', 'A+', 'Brahmmasi Vashishth Primary School', 1),
(102, 'Khushi Patel', '2012-07-18', 'Chitra, Bhavnagar', 'Female', 6, 2, 'Pooja Patel', '9876543403', 'Ketan Patel', '9876543404', 'O+', 'Brahmmasi Vashishth Primary School', 1),
(103, 'Rudra Shah', '2012-01-23', 'Sidsar, Bhavnagar', 'Male', 6, 3, 'Anita Shah', '9876543405', 'Dinesh Shah', '9876543406', 'B+', 'Brahmmasi Vashishth Primary School', 1),
(104, 'Ishani Gohil', '2012-05-10', 'Tarsamiya, Bhavnagar', 'Female', 6, 4, 'Meghna Gohil', '9876543407', 'Raj Gohil', '9876543408', 'AB+', 'Brahmmasi Vashishth Primary School', 1),
(105, 'Aarav Rathod', '2012-02-27', 'Ghogha Circle, Bhavnagar', 'Male', 6, 5, 'Rekha Rathod', '9876543409', 'Jayesh Rathod', '9876543410', 'O-', 'Brahmmasi Vashishth Primary School', 1),
(106, 'Riya Mehta', '2012-09-15', 'Shivaji Nagar, Bhavnagar', 'Female', 6, 6, 'Sarita Mehta', '9876543411', 'Paresh Mehta', '9876543412', 'B-', 'Brahmmasi Vashishth Primary School', 1),
(107, 'Krishna Dave', '2012-04-30', 'Sardar Nagar, Bhavnagar', 'Male', 6, 7, 'Kalpana Dave', '9876543413', 'Hiren Dave', '9876543414', 'A-', 'Brahmmasi Vashishth Primary School', 1),
(108, 'Bhavya Desai', '2012-11-11', 'Mahila College Road, Bhavnagar', 'Female', 6, 8, 'Neeta Desai', '9876543415', 'Naresh Desai', '9876543416', 'O+', 'Brahmmasi Vashishth Primary School', 1),
(109, 'Dhruv Bhatt', '2012-02-08', 'Subhash Nagar, Bhavnagar', 'Male', 6, 9, 'Meena Bhatt', '9876543417', 'Ramesh Bhatt', '9876543418', 'A+', 'Brahmmasi Vashishth Primary School', 1),
(110, 'Ishita Zala', '2012-10-22', 'Chitra GIDC, Bhavnagar', 'Female', 6, 10, 'Laxmi Zala', '9876543419', 'Bhavesh Zala', '9876543420', 'B+', 'Brahmmasi Vashishth Primary School', 1),
(111, 'Karan Solanki', '2012-08-29', 'Aksharwadi, Bhavnagar', 'Male', 6, 11, 'Payal Solanki', '9876543421', 'Manish Solanki', '9876543422', 'O-', 'Brahmmasi Vashishth Primary School', 1),
(112, 'Tanishka Parmar', '2012-06-17', 'Ramnagar, Bhavnagar', 'Female', 6, 12, 'Neha Parmar', '9876543423', 'Jitendra Parmar', '9876543424', 'AB+', 'Brahmmasi Vashishth Primary School', 1),
(113, 'Shivam Chavda', '2012-03-07', 'Madhav Nagar, Bhavnagar', 'Male', 6, 13, 'Rupal Chavda', '9876543425', 'Ashok Chavda', '9876543426', 'A-', 'Brahmmasi Vashishth Primary School', 1),
(114, 'Roshni Pandya', '2012-05-19', 'Navapara, Bhavnagar', 'Female', 6, 14, 'Swati Pandya', '9876543427', 'Yogesh Pandya', '9876543428', 'B-', 'Brahmmasi Vashishth Primary School', 1),
(115, 'Rudra Jadeja', '2012-12-01', 'Vadva, Bhavnagar', 'Male', 6, 15, 'Bhavna Jadeja', '9876543429', 'Paresh Jadeja', '9876543430', 'O+', 'Brahmmasi Vashishth Primary School', 1),
(116, 'Meera Chauhan', '2012-09-16', 'Bhakti Nagar, Bhavnagar', 'Female', 6, 16, 'Payal Chauhan', '9876543431', 'Kamal Chauhan', '9876543432', 'A+', 'Brahmmasi Vashishth Primary School', 1),
(117, 'Parth Gajjar', '2012-07-27', 'Vora Bazar, Bhavnagar', 'Male', 6, 17, 'Sonali Gajjar', '9876543433', 'Nirav Gajjar', '9876543434', 'B+', 'Brahmmasi Vashishth Primary School', 1),
(118, 'Simran Makwana', '2012-01-06', 'Jashonath Chowk, Bhavnagar', 'Female', 6, 18, 'Sarita Makwana', '9876543435', 'Mahendra Makwana', '9876543436', 'AB-', 'Brahmmasi Vashishth Primary School', 1),
(119, 'Krishna Vyas', '2012-07-10', 'Nana Chiloda, Bhavnagar', 'Male', 6, 19, 'Roshni Vyas', '9876543437', 'Sanjay Vyas', '9876543438', 'O-', 'Brahmmasi Vashishth Primary School', 1),
(120, 'Anaya Makwana', '2012-04-20', 'Bhavnagar City, Bhavnagar', 'Female', 6, 20, 'Laxmi Makwana', '9876543439', 'Kamlesh Makwana', '9876543440', 'A-', 'Brahmmasi Vashishth Primary School', 1),
(121, 'Aarav Joshi', '2011-02-10', 'Kaliyabid, Bhavnagar', 'Male', 7, 1, 'Meena Joshi', '9876543441', 'Ramesh Joshi', '9876543442', 'A+', 'Brahmmasi Vashishth Primary School', 1),
(122, 'Avni Patel', '2011-07-22', 'Chitra, Bhavnagar', 'Female', 7, 2, 'Hina Patel', '9876543443', 'Ketan Patel', '9876543444', 'O+', 'Brahmmasi Vashishth Primary School', 1),
(123, 'Darsh Shah', '2011-01-15', 'Sidsar, Bhavnagar', 'Male', 7, 3, 'Anita Shah', '9876543445', 'Dinesh Shah', '9876543446', 'B+', 'Brahmmasi Vashishth Primary School', 1),
(124, 'Jiya Gohil', '2011-05-08', 'Tarsamiya, Bhavnagar', 'Female', 7, 4, 'Meghna Gohil', '9876543447', 'Raj Gohil', '9876543448', 'AB+', 'Brahmmasi Vashishth Primary School', 1),
(125, 'Vihan Rathod', '2011-02-25', 'Ghogha Circle, Bhavnagar', 'Male', 7, 5, 'Rekha Rathod', '9876543449', 'Jayesh Rathod', '9876543450', 'O-', 'Brahmmasi Vashishth Primary School', 1),
(126, 'Diya Mehta', '2011-09-18', 'Shivaji Nagar, Bhavnagar', 'Female', 7, 6, 'Sarita Mehta', '9876543451', 'Paresh Mehta', '9876543452', 'B-', 'Brahmmasi Vashishth Primary School', 1),
(127, 'Parth Dave', '2011-04-30', 'Sardar Nagar, Bhavnagar', 'Male', 7, 7, 'Kalpana Dave', '9876543453', 'Hiren Dave', '9876543454', 'A-', 'Brahmmasi Vashishth Primary School', 1),
(128, 'Riya Desai', '2011-11-12', 'Mahila College Road, Bhavnagar', 'Female', 7, 8, 'Neeta Desai', '9876543455', 'Naresh Desai', '9876543456', 'O+', 'Brahmmasi Vashishth Primary School', 1),
(129, 'Shiv Bhatt', '2011-02-05', 'Subhash Nagar, Bhavnagar', 'Male', 7, 9, 'Meena Bhatt', '9876543457', 'Ramesh Bhatt', '9876543458', 'A+', 'Brahmmasi Vashishth Primary School', 1),
(130, 'Anika Zala', '2011-10-23', 'Chitra GIDC, Bhavnagar', 'Female', 7, 10, 'Laxmi Zala', '9876543459', 'Bhavesh Zala', '9876543460', 'B+', 'Brahmmasi Vashishth Primary School', 1),
(131, 'Reyansh Solanki', '2011-08-29', 'Aksharwadi, Bhavnagar', 'Male', 7, 11, 'Payal Solanki', '9876543461', 'Manish Solanki', '9876543462', 'O-', 'Brahmmasi Vashishth Primary School', 1),
(132, 'Tisha Parmar', '2011-06-17', 'Ramnagar, Bhavnagar', 'Female', 7, 12, 'Neha Parmar', '9876543463', 'Jitendra Parmar', '9876543464', 'AB+', 'Brahmmasi Vashishth Primary School', 1),
(133, 'Moksh Chavda', '2011-03-06', 'Madhav Nagar, Bhavnagar', 'Male', 7, 13, 'Rupal Chavda', '9876543465', 'Ashok Chavda', '9876543466', 'A-', 'Brahmmasi Vashishth Primary School', 1),
(134, 'Sanika Pandya', '2011-05-20', 'Navapara, Bhavnagar', 'Female', 7, 14, 'Swati Pandya', '9876543467', 'Yogesh Pandya', '9876543468', 'B-', 'Brahmmasi Vashishth Primary School', 1),
(135, 'Rudra Jadeja', '2011-12-02', 'Vadva, Bhavnagar', 'Male', 7, 15, 'Bhavna Jadeja', '9876543469', 'Paresh Jadeja', '9876543470', 'O+', 'Brahmmasi Vashishth Primary School', 1),
(136, 'Mahi Chauhan', '2011-09-17', 'Bhakti Nagar, Bhavnagar', 'Female', 7, 16, 'Payal Chauhan', '9876543471', 'Kamal Chauhan', '9876543472', 'A+', 'Brahmmasi Vashishth Primary School', 1),
(137, 'Aryan Gajjar', '2011-07-28', 'Vora Bazar, Bhavnagar', 'Male', 7, 17, 'Sonali Gajjar', '9876543473', 'Nirav Gajjar', '9876543474', 'B+', 'Brahmmasi Vashishth Primary School', 1),
(138, 'Saanvi Makwana', '2011-01-08', 'Jashonath Chowk, Bhavnagar', 'Female', 7, 18, 'Sarita Makwana', '9876543475', 'Mahendra Makwana', '9876543476', 'AB-', 'Brahmmasi Vashishth Primary School', 1),
(139, 'Arjun Vyas', '2011-07-11', 'Nana Chiloda, Bhavnagar', 'Male', 7, 19, 'Roshni Vyas', '9876543477', 'Sanjay Vyas', '9876543478', 'O-', 'Brahmmasi Vashishth Primary School', 1),
(140, 'Navya Makwana', '2011-04-22', 'Bhavnagar City, Bhavnagar', 'Female', 7, 20, 'Laxmi Makwana', '9876543479', 'Kamlesh Makwana', '9876543480', 'A-', 'Brahmmasi Vashishth Primary School', 1),
(141, 'Vedant Joshi', '2010-02-15', 'Kaliyabid, Bhavnagar', 'Male', 8, 1, 'Meena Joshi', '9876543481', 'Ramesh Joshi', '9876543482', 'A+', 'Brahmmasi Vashishth Primary School', 1),
(142, 'Saanvi Patel', '2010-07-21', 'Chitra, Bhavnagar', 'Female', 8, 2, 'Hina Patel', '9876543483', 'Ketan Patel', '9876543484', 'O+', 'Brahmmasi Vashishth Primary School', 1),
(143, 'Reyansh Shah', '2010-01-12', 'Sidsar, Bhavnagar', 'Male', 8, 3, 'Anita Shah', '9876543485', 'Dinesh Shah', '9876543486', 'B+', 'Brahmmasi Vashishth Primary School', 1),
(144, 'Ira Gohil', '2010-05-07', 'Tarsamiya, Bhavnagar', 'Female', 8, 4, 'Meghna Gohil', '9876543487', 'Raj Gohil', '9876543488', 'AB+', 'Brahmmasi Vashishth Primary School', 1),
(145, 'Harsh Rathod', '2010-02-20', 'Ghogha Circle, Bhavnagar', 'Male', 8, 5, 'Rekha Rathod', '9876543489', 'Jayesh Rathod', '9876543490', 'O-', 'Brahmmasi Vashishth Primary School', 1),
(146, 'Kiara Mehta', '2010-09-17', 'Shivaji Nagar, Bhavnagar', 'Female', 8, 6, 'Sarita Mehta', '9876543491', 'Paresh Mehta', '9876543492', 'B-', 'Brahmmasi Vashishth Primary School', 1),
(147, 'Shaurya Dave', '2010-04-29', 'Sardar Nagar, Bhavnagar', 'Male', 8, 7, 'Kalpana Dave', '9876543493', 'Hiren Dave', '9876543494', 'A-', 'Brahmmasi Vashishth Primary School', 1),
(148, 'Jhanvi Desai', '2010-11-10', 'Mahila College Road, Bhavnagar', 'Female', 8, 8, 'Neeta Desai', '9876543495', 'Naresh Desai', '9876543496', 'O+', 'Brahmmasi Vashishth Primary School', 1),
(149, 'Yug Bhatt', '2010-02-04', 'Subhash Nagar, Bhavnagar', 'Male', 8, 9, 'Meena Bhatt', '9876543497', 'Ramesh Bhatt', '9876543498', 'A+', 'Brahmmasi Vashishth Primary School', 1),
(150, 'Mishka Zala', '2010-10-25', 'Chitra GIDC, Bhavnagar', 'Female', 8, 10, 'Laxmi Zala', '9876543499', 'Bhavesh Zala', '9876543500', 'B+', 'Brahmmasi Vashishth Primary School', 1),
(151, 'Aarush Solanki', '2010-08-30', 'Aksharwadi, Bhavnagar', 'Male', 8, 11, 'Payal Solanki', '9876543501', 'Manish Solanki', '9876543502', 'O-', 'Brahmmasi Vashishth Primary School', 1),
(152, 'Tanya Parmar', '2010-06-19', 'Ramnagar, Bhavnagar', 'Female', 8, 12, 'Neha Parmar', '9876543503', 'Jitendra Parmar', '9876543504', 'AB+', 'Brahmmasi Vashishth Primary School', 1),
(153, 'Ayaan Chavda', '2010-03-05', 'Madhav Nagar, Bhavnagar', 'Male', 8, 13, 'Rupal Chavda', '9876543505', 'Ashok Chavda', '9876543506', 'A-', 'Brahmmasi Vashishth Primary School', 1),
(154, 'Ruhi Pandya', '2010-05-22', 'Navapara, Bhavnagar', 'Female', 8, 14, 'Swati Pandya', '9876543507', 'Yogesh Pandya', '9876543508', 'B-', 'Brahmmasi Vashishth Primary School', 1),
(155, 'Vivaan Jadeja', '2010-12-03', 'Vadva, Bhavnagar', 'Male', 8, 15, 'Bhavna Jadeja', '9876543509', 'Paresh Jadeja', '9876543510', 'O+', 'Brahmmasi Vashishth Primary School', 1),
(156, 'Myra Chauhan', '2010-09-18', 'Bhakti Nagar, Bhavnagar', 'Female', 8, 16, 'Payal Chauhan', '9876543511', 'Kamal Chauhan', '9876543512', 'A+', 'Brahmmasi Vashishth Primary School', 1),
(157, 'Kavya Gajjar', '2010-07-26', 'Vora Bazar, Bhavnagar', 'Female', 8, 17, 'Sonali Gajjar', '9876543513', 'Nirav Gajjar', '9876543514', 'B+', 'Brahmmasi Vashishth Primary School', 1),
(158, 'Samar Makwana', '2010-01-07', 'Jashonath Chowk, Bhavnagar', 'Male', 8, 18, 'Sarita Makwana', '9876543515', 'Mahendra Makwana', '9876543516', 'AB-', 'Brahmmasi Vashishth Primary School', 1),
(159, 'Daksh Vyas', '2010-07-13', 'Nana Chiloda, Bhavnagar', 'Male', 8, 19, 'Roshni Vyas', '9876543517', 'Sanjay Vyas', '9876543518', 'O-', 'Brahmmasi Vashishth Primary School', 1),
(160, 'Swayam Shah', '2010-07-07', 'Vora Bazar, Bhavnagar', 'Male', 8, 20, 'Shital Shah', '9765768754', 'Sanket Shah', '9345786545', 'O+', 'Brahmmasi Vashishth Primary School', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject_1`
--

CREATE TABLE `subject_1` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `standard` varchar(10) NOT NULL,
  `subject_teacher` varchar(100) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `school_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject_1`
--

INSERT INTO `subject_1` (`subject_id`, `subject_name`, `standard`, `subject_teacher`, `school_name`, `school_no`) VALUES
(1, 'Mathematics', '1', 'Mehul Desai', 'Brahmmasi Vashishth Primary School', 1),
(2, 'Gujarati', '1', 'Rajesh Patel', 'Brahmmasi Vashishth Primary School', 1),
(3, 'Hindi', '1', 'Bhavna Shah', 'Brahmmasi Vashishth Primary School', 1),
(4, 'Art & Craft', '1', 'Sanjay Trivedi', 'Brahmmasi Vashishth Primary School', 1),
(5, 'Physical Education & Health', '1', 'Jignesh Bhatt', 'Brahmmasi Vashishth Primary School', 1),
(6, 'Mathematics', '2', 'Mehul Desai', 'Brahmmasi Vashishth Primary School', 1),
(7, 'Gujarati', '2', 'Rajesh Patel', 'Brahmmasi Vashishth Primary School', 1),
(8, 'Hindi', '2', 'Bhavna Shah', 'Brahmmasi Vashishth Primary School', 1),
(9, 'Art & Craft', '2', 'Sanjay Trivedi', 'Brahmmasi Vashishth Primary School', 1),
(10, 'Physical Education & Health', '2', 'Jignesh Bhatt', 'Brahmmasi Vashishth Primary School', 1),
(11, 'Mathematics', '3', 'Alpesh Joshi', 'Brahmmasi Vashishth Primary School', 1),
(12, 'Gujarati', '3', 'Dipak Parmar', 'Brahmmasi Vashishth Primary School', 1),
(13, 'Hindi', '3', 'Hiren Vyas', 'Brahmmasi Vashishth Primary School', 1),
(14, 'English', '3', 'Manisha Dave', 'Brahmmasi Vashishth Primary School', 1),
(15, 'EVS', '3', 'Parul Mehta', 'Brahmmasi Vashishth Primary School', 1),
(16, 'Art & Craft', '3', 'Rupal Thakkar', 'Brahmmasi Vashishth Primary School', 1),
(17, 'Physical Education & Health', '3', 'Ajay Dabhi', 'Brahmmasi Vashishth Primary School', 1),
(18, 'Mathematics', '4', 'Alpesh Joshi', 'Brahmmasi Vashishth Primary School', 1),
(19, 'Gujarati', '4', 'Dipak Parmar', 'Brahmmasi Vashishth Primary School', 1),
(20, 'Hindi', '4', 'Hiren Vyas', 'Brahmmasi Vashishth Primary School', 1),
(21, 'English', '4', 'Manisha Dave', 'Brahmmasi Vashishth Primary School', 1),
(22, 'EVS', '4', 'Parul Mehta', 'Brahmmasi Vashishth Primary School', 1),
(23, 'Art & Craft', '4', 'Rupal Thakkar', 'Brahmmasi Vashishth Primary School', 1),
(24, 'Physical Education & Health', '4', 'Ajay Dabhi', 'Brahmmasi Vashishth Primary School', 1),
(25, 'Mathematics', '5', 'Prakash Tiwari', 'Brahmmasi Vashishth Primary School', 1),
(26, 'Science', '5', 'Arvind Pandit', 'Brahmmasi Vashishth Primary School', 1),
(27, 'Social Science', '5', 'Jayanti Zinzuwadia', 'Brahmmasi Vashishth Primary School', 1),
(28, 'Gujarati', '5', 'Vijay Bhanderi', 'Brahmmasi Vashishth Primary School', 1),
(29, 'Hindi', '5', 'Nilesh Gediya', 'Brahmmasi Vashishth Primary School', 1),
(30, 'English', '5', 'Kamini Choksi', 'Brahmmasi Vashishth Primary School', 1),
(31, 'Computer', '5', 'Hetal Gohil', 'Brahmmasi Vashishth Primary School', 1),
(32, 'Work & Art', '5', 'Tejal Kher', 'Brahmmasi Vashishth Primary School', 1),
(33, 'Physical Education & Health', '5', 'Swati Kachhadiya', 'Brahmmasi Vashishth Primary School', 1),
(34, 'Mathematics', '6', 'Prakash Tiwari', 'Brahmmasi Vashishth Primary School', 1),
(35, 'Science', '6', 'Arvind Pandit', 'Brahmmasi Vashishth Primary School', 1),
(36, 'Social Science', '6', 'Jayanti Zinzuwadia', 'Brahmmasi Vashishth Primary School', 1),
(37, 'Gujarati', '6', 'Vijay Bhanderi', 'Brahmmasi Vashishth Primary School', 1),
(38, 'Hindi', '6', 'Nilesh Gediya', 'Brahmmasi Vashishth Primary School', 1),
(39, 'English', '6', 'Kamini Choksi', 'Brahmmasi Vashishth Primary School', 1),
(40, 'Computer', '6', 'Hetal Gohil', 'Brahmmasi Vashishth Primary School', 1),
(41, 'Work & Art', '6', 'Tejal Kher', 'Brahmmasi Vashishth Primary School', 1),
(42, 'Physical Education & Health', '6', 'Swati Kachhadiya', 'Brahmmasi Vashishth Primary School', 1),
(43, 'Mathematics', '7', 'Ketan Thakkar', 'Brahmmasi Vashishth Primary School', 1),
(44, 'Science', '7', 'Ishaan Dave', 'Brahmmasi Vashishth Primary School', 1),
(45, 'Social Science', '7', 'Heena Chauhan', 'Brahmmasi Vashishth Primary School', 1),
(46, 'Gujarati', '7', 'Roshni Trivedi', 'Brahmmasi Vashishth Primary School', 1),
(47, 'Sanskri', '7', 'Aryan Jariwala', 'Brahmmasi Vashishth Primary School', 1),
(48, 'English', '7', 'Bhavesh Rajput', 'Brahmmasi Vashishth Primary School', 1),
(49, 'Computer', '7', 'Jinal Vyas', 'Brahmmasi Vashishth Primary School', 1),
(50, 'Work & Art', '7', 'Lavanya Shukla', 'Brahmmasi Vashishth Primary School', 1),
(51, 'Physical Education & Health', '7', 'Mihir Pandya', 'Brahmmasi Vashishth Primary School', 1),
(52, 'Mathematics', '8', 'Ketan Thakkar', 'Brahmmasi Vashishth Primary School', 1),
(53, 'Science', '8', 'Ishaan Dave', 'Brahmmasi Vashishth Primary School', 1),
(54, 'Social Science', '8', 'Heena Chauhan', 'Brahmmasi Vashishth Primary School', 1),
(55, 'Gujarati', '8', 'Roshni Trivedi', 'Brahmmasi Vashishth Primary School', 1),
(56, 'Sanskri', '8', 'Aryan Jariwala', 'Brahmmasi Vashishth Primary School', 1),
(57, 'English', '8', 'Bhavesh Rajput', 'Brahmmasi Vashishth Primary School', 1),
(58, 'Computer', '8', 'Jinal Vyas', 'Brahmmasi Vashishth Primary School', 1),
(59, 'Work & Art', '8', 'Lavanya Shukla', 'Brahmmasi Vashishth Primary School', 1),
(60, 'Physical Education & Health', '8', 'Mihir Pandya', 'Brahmmasi Vashishth Primary School', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_1`
--

CREATE TABLE `teacher_1` (
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `teacher_phone` varchar(15) NOT NULL,
  `teacher_email` varchar(100) NOT NULL,
  `teacher_salary` decimal(10,2) NOT NULL,
  `teacher_dob` date NOT NULL,
  `teacher_address` text NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `std` varchar(20) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `school_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_1`
--

INSERT INTO `teacher_1` (`teacher_id`, `teacher_name`, `teacher_phone`, `teacher_email`, `teacher_salary`, `teacher_dob`, `teacher_address`, `qualification`, `subject`, `std`, `gender`, `school_name`, `school_no`) VALUES
(1, 'Rajesh Patel', '9876543210', 'rajesh.patel@example.com', 45000.00, '1980-05-12', 'Kaliyabid, Bhavnagar', 'M.A, B.Ed', 'Gujarati', '1,2', 'Male', 'Brahmmasi Vashishth Primary School', 1),
(2, 'Mehul Desai', '9876543211', 'mehul.desai@example.com', 48000.00, '1978-07-19', 'Vidhyanagar, Bhavnagar', 'M.Sc, B.Ed', 'Mathematics', '1,2', 'Male', 'Brahmmasi Vashishth Primary School', 1),
(3, 'Bhavna Shah', '9876543212', 'bhavna.shah@example.com', 47000.00, '1982-09-22', 'Chitra, Bhavnagar', 'M.A, B.Ed', 'Hindi', '1,2', 'Female', 'Brahmmasi Vashishth Primary School', 1),
(4, 'Sanjay Trivedi', '9876543213', 'sanjay.trivedi@example.com', 50000.00, '1975-12-05', 'Shishumangal, Bhavnagar', 'M.Com, B.Ed', 'Art & Craft', '1,2', 'Male', 'Brahmmasi Vashishth Primary School', 1),
(5, 'Jignesh Bhatt', '9876543214', 'jignesh.bhatt@example.com', 46000.00, '1981-03-10', 'Krishna Nagar, Bhavnagar', 'M.Sc, B.Ed', 'Physical Education & Health', '1,2', 'Male', 'Brahmmasi Vashishth Primary School', 1),
(6, 'Alpesh Joshi', '9876543217', 'alpesh.joshi@example.com', 47000.00, '1979-11-30', 'Kumbharwada, Bhavnagar', 'M.Sc, B.Ed', 'Mathematics', '3,4', 'Male', 'Brahmmasi Vashishth Primary School', 1),
(7, 'Dipak Parmar', '9876543218', 'dipak.parmar@example.com', 46000.00, '1985-04-18', 'Ghogha Circle, Bhavnagar', 'M.A, B.Ed', 'Gujarati', '3,4', 'Male', 'Brahmmasi Vashishth Primary School', 1),
(8, 'Hiren Vyas', '9876543219', 'hiren.vyas@example.com', 48000.00, '1981-06-22', 'Chitra, Bhavnagar', 'M.A, B.Ed', 'Hindi', '3,4', 'Male', 'Brahmmasi Vashishth Primary School', 1),
(9, 'Manisha Dave', '9876543220', 'manisha.dave@example.com', 49000.00, '1983-06-25', 'Sardarnagar, Bhavnagar', 'M.A, B.Ed', 'English', '3,4', 'Female', 'Brahmmasi Vashishth Primary School', 1),
(10, 'Parul Mehta', '9876543221', 'parul.mehta@example.com', 45500.00, '1982-02-14', 'Nirmal Nagar, Bhavnagar', 'M.Sc, B.Ed', 'EVS', '3,4', 'Female', 'Brahmmasi Vashishth Primary School', 1),
(11, 'Rupal Thakkar', '9876543222', 'rupal.thakkar@example.com', 47000.00, '1980-09-29', 'Krishna Nagar, Bhavnagar', 'M.A, B.Ed', 'Art & Craft', '3,4', 'Female', 'Brahmmasi Vashishth Primary School', 1),
(12, 'Ajay Dabhi', '9876543223', 'ajay.dabhi@example.com', 45000.00, '1987-12-15', 'Tarsamiya, Bhavnagar', 'B.P.Ed', 'Physical Education & Health', '3,4', 'Male', 'Brahmmasi Vashishth Primary School', 1),
(13, 'Kamini Choksi', '9876543226', 'kamini.choksi@example.com', 48000.00, '1982-11-25', 'Kaliyabid, Bhavnagar', 'M.A, B.Ed', 'English', '5,6', 'Female', 'Brahmmasi Vashishth Primary School', 1),
(14, 'Vijay Bhanderi', '9876543227', 'vijay.bhanderi@example.com', 47000.00, '1980-07-19', 'Vidhyanagar, Bhavnagar', 'M.A, B.Ed', 'Gujarati', '5,6', 'Male', 'Brahmmasi Vashishth Primary School', 1),
(15, 'Nilesh Gediya', '9876543228', 'nilesh.gediya@example.com', 46000.00, '1985-05-10', 'Tarsamiya, Bhavnagar', 'M.A, B.Ed', 'Hindi', '5,6', 'Male', 'Brahmmasi Vashishth Primary School', 1),
(16, 'Swati Kachhadiya', '9876543229', 'swati.kachhadiya@example.com', 49000.00, '1983-04-18', 'Shishumangal, Bhavnagar', 'B.P.Ed', 'Physical Education & Health', '5,6', 'Female', 'Brahmmasi Vashishth Primary School', 1),
(17, 'Jayanti Zinzuwadia', '9876543230', 'jayanti.zinzuwadia@example.com', 47500.00, '1984-09-22', 'Krishna Nagar, Bhavnagar', 'M.A, B.Ed', 'Social Science', '5,6', 'Male', 'Brahmmasi Vashishth Primary School', 1),
(18, 'Arvind Pandit', '9876543231', 'arvind.pandit@example.com', 48500.00, '1981-02-14', 'Nirmal Nagar, Bhavnagar', 'M.Sc, B.Ed', 'Science', '5,6', 'Male', 'Brahmmasi Vashishth Primary School', 1),
(19, 'Tejal Kher', '9876543232', 'tejal.kher@example.com', 45500.00, '1986-03-10', 'Panwadi, Bhavnagar', 'M.A, B.Ed', 'Work & Art', '5,6', 'Female', 'Brahmmasi Vashishth Primary School', 1),
(20, 'Hetal Gohil', '9876543236', 'hetal.gohil@example.com', 47000.00, '1985-07-22', 'Chitra, Bhavnagar', 'M.Sc, B.Ed', 'Computer', '5,6', 'Female', 'Brahmmasi Vashishth Primary School', 1),
(21, 'Prakash Tiwari', '9876543237', 'prakash.tiwari@example.com', 49000.00, '1983-09-15', 'Sardarnagar, Bhavnagar', 'M.Sc, B.Ed', 'Mathematics', '5,6', 'Male', 'Brahmmasi Vashishth Primary School', 1),
(22, 'Roshni Trivedi', '9924956723', 'roshni@example.com', 43000.00, '1984-11-05', 'Panwadi, Bhavnagar', 'M.A, B.Ed', 'Gujarati', '7,8', 'Female', 'Brahmmasi Vashishth Primary School', 1),
(23, 'Bhavesh Rajput', '9898224400', 'bhavesh@example.com', 47000.00, '1984-10-01', 'Krishna Nagar, Bhavnagar', 'M.A, B.Ed', 'English', '7,8', 'Male', 'Brahmmasi Vashishth Primary School', 1),
(24, 'Heena Chauhan', '9876543256', 'heena.chauhan@example.com', 50000.00, '1983-12-10', 'Kaliyabid, Bhavnagar', 'M.A, B.Ed', 'Social Science', '7,8', 'Female', 'Brahmmasi Vashishth Primary School', 1),
(25, 'Ishaan Dave', '9876543257', 'ishaan.dave@example.com', 52000.00, '1985-06-15', 'Vidhyanagar, Bhavnagar', 'M.Sc, B.Ed', 'Science', '7,8', 'Male', 'Brahmmasi Vashishth Primary School', 1),
(26, 'Jinal Vyas', '9876543258', 'jinal.vyas@example.com', 51000.00, '1986-02-25', 'Tarsamiya, Bhavnagar', 'B.C.A, M.C.A', 'Computer', '7,8', 'Female', 'Brahmmasi Vashishth Primary School', 1),
(27, 'Ketan Thakkar', '9876543259', 'ketan.thakkar@example.com', 53000.00, '1984-11-05', 'Shishumangal, Bhavnagar', 'M.Sc, B.Ed', 'Mathematics', '7,8', 'Male', 'Brahmmasi Vashishth Primary School', 1),
(28, 'Lavanya Shukla', '9876543260', 'lavanya.shukla@example.com', 49000.00, '1987-08-18', 'Krishna Nagar, Bhavnagar', 'B.A, B.Ed', 'Work & Art', '7,8', 'Female', 'Brahmmasi Vashishth Primary School', 1),
(29, 'Mihir Pandya', '9876543261', 'mihir.pandya@example.com', 49500.00, '1982-04-20', 'Subhashnagar, Bhavnagar', 'B.A.Ed', 'Physical Education & Health', '7,8', 'Male', 'Brahmmasi Vashishth Primary School', 1),
(30, 'Aryan Jariwala', '9876543262', 'aryan@example.com', 43000.00, '1986-04-20', 'Kaliyabid, Bhavnagar', 'B.A.Ed', 'Sanskrit', '7,8', 'Male', 'Brahmmasi Vashishth Primary School', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_1`
--
ALTER TABLE `admin_1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `school_name` (`school_name`,`school_no`);

--
-- Indexes for table `principal_1`
--
ALTER TABLE `principal_1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `school_name` (`school_name`,`school_no`);

--
-- Indexes for table `school_1`
--
ALTER TABLE `school_1`
  ADD PRIMARY KEY (`school_no`);

--
-- Indexes for table `student_1`
--
ALTER TABLE `student_1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_school_number` (`school_no`),
  ADD KEY `school_name` (`school_name`);

--
-- Indexes for table `subject_1`
--
ALTER TABLE `subject_1`
  ADD PRIMARY KEY (`subject_id`),
  ADD KEY `school_name` (`school_name`,`school_no`);

--
-- Indexes for table `teacher_1`
--
ALTER TABLE `teacher_1`
  ADD PRIMARY KEY (`teacher_id`),
  ADD UNIQUE KEY `teacher_phone` (`teacher_phone`),
  ADD UNIQUE KEY `teacher_email` (`teacher_email`),
  ADD KEY `school_name` (`school_name`,`school_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_1`
--
ALTER TABLE `admin_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `principal_1`
--
ALTER TABLE `principal_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `student_1`
--
ALTER TABLE `student_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `subject_1`
--
ALTER TABLE `subject_1`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `teacher_1`
--
ALTER TABLE `teacher_1`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=602;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_1`
--
ALTER TABLE `student_1`
  ADD CONSTRAINT `fk_school_number` FOREIGN KEY (`school_no`) REFERENCES `school_1` (`school_no`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
