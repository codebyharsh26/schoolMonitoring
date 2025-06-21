-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 26, 2025 at 02:34 PM
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
-- Table structure for table `admin_bmc`
--

CREATE TABLE `admin_bmc` (
  `id` int(11) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_bmc`
--

INSERT INTO `admin_bmc` (`id`, `email_address`, `password`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `principal_1`
--

CREATE TABLE `principal_1` (
  `id` int(11) NOT NULL,
  `principal_image` varchar(255) NOT NULL,
  `principal_full_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(16) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `salary` decimal(10,2) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `school_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `principal_1`
--

INSERT INTO `principal_1` (`id`, `principal_image`, `principal_full_name`, `date_of_birth`, `email`, `password`, `phone`, `address`, `gender`, `qualification`, `salary`, `school_name`, `school_no`) VALUES
(1, 'p_female.jpg', 'Jani Kiranben SE', '1984-11-17', 'kiranjani@gmail.com', 'janikiranben', '9145768938', 'Bharat Nagar, Bhavnagar', 'Female', 'M.A, B.Ed', 70000.00, 'Brahmmasi Vashishth Primary School', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_1`
--

CREATE TABLE `school_1` (
  `school_no` int(11) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `standard` varchar(10) NOT NULL,
  `principal_name` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_1`
--

INSERT INTO `school_1` (`school_no`, `school_name`, `email_address`, `standard`, `principal_name`, `address`) VALUES
(1, 'Brahmmasi Vashishth Primary School', 'brahmmasivashishth@school.com', '1-8', 'Jani Kiranben SE', 'Kumbharwada Circle'),
(2, 'Brahmmasi Vashishth Primary School', 'brahmmasivashishth@school.com', '1-8', 'Sagarbhai Jani', 'Kumbharwada Circle'),
(3, 'Chanakya Primary School', 'chanakya@school.com', '1-5', 'Patel Mitulbhai Shashikantbhai', 'Banubain Wadi, Near Sikotarma Dairy'),
(4, 'Chanakya Primary School', 'chanakya@school.com', '1-5', 'Ratilal Vanra', 'Banubain Wadi, Near Sheetlama Dairy'),
(5, 'Shri Shaheed Bachubhai Virjibhai Primary School', 'shaheedbachubhai@school.com', '1-8', 'Popatbhai B. Bambhniya', 'Kavikant Road, Ranika Shak Market, Near'),
(7, 'Shri Ambika Primary School', 'ambika@school.com', '1-8', 'Geetaben Rathod', 'Mamakohta Road'),
(8, 'Shri Vir Savarkar Primary School', 'virsavarkar@school.com', '1-8', 'Bhatt Bharatbhai D.', 'Mafatnagar, Prabhudas Talav, Ruvapari Road'),
(10, 'Shri Anandvihar Primary School', 'anandvihar@school.com', '1-8', 'Mehta Nirvabhai Dineshbhai', 'Anandvihar Akhada, Prabhudas Talav'),
(11, 'Shri Bhuta Rugnath Primary School', 'bhutarugnath@school.com', '1-8', 'Ramoliya Sangeetaben P.', 'Near Walket Gate Police Chowki'),
(12, 'Shri Bhuta Rugnath Primary School', 'bhutarugnath@school.com', '1-8', 'Joshi Hiteshkumar M.', 'Near Walket Gate Police Chowki'),
(13, 'Shri Lalkrishna Advani Primary School', 'lalkrishnaadvani@school.com', '1-8', 'Makwana Bhavinbhai B.', 'Savabhaino Chowk, Khedutvas'),
(14, 'Shri Jalarambapa Primary School', 'jalarambapa@school.com', '1-8', 'Parmar Rameshbhai D.', 'Behind Jalaram Mandir, Anandnagar'),
(15, 'Shri Jalarambapa Primary School', 'jalarambapa@school.com', '1-8', 'Acharya Geetaben G.', 'Behind Jalaram Mandir, Anandnagar'),
(18, 'Mathuriya Bhanji Abji Primary School', 'mathuriyabhanji@school.com', '1-8', 'Dabhai Pratapbhai', 'Deepakchok, Anandnagar'),
(19, 'Mathuriya Bhanji Abji Primary School', 'mathuriyabhanji@school.com', '1-8', 'Naiya Dineshbhai', 'Deepakchok, Anandnagar'),
(20, 'Shri Rabindranath Tagore Primary School', 'rabindranathtagore@school.com', '1-8', 'Thakkar Neelaben N.', 'Opposite Women\'s College, Diamond Chowk'),
(22, 'Shri Swami Vivekanand Primary School', 'swamivivekanand@school.com', '1-8', 'Chauhan Ranjitsingh J.', 'Near Yashwantrai Natya Griha'),
(24, 'Shri Subhashchandra Bose Primary School', 'subhashchandrabose@school.com', '1-5', 'Bipinbhai Vaghela', 'Subhashnagar Pul, Aerodrome Road'),
(25, 'Shri A.V. School Primary School', 'avschool@school.com', '1-8', 'Hetalkumari M. Thathagar', 'Crescent'),
(28, 'Shri Santkanvaram Primary School', 'santkanvaram@school.com', '1-8', 'Devani Kishanchand Rewachand', 'Rasala Camp'),
(30, 'Madhavray Sadhashiv Golwalkar Primary School', 'madhavraysadhashiv@school.com', '1-8', 'Chouhan Yogeshbhai', 'Opposite Governance Office, Navapara'),
(31, 'Shri Nanimajirajba Primary School', 'nanimajirajba@school.com', '1-8', 'Geetaben Rajyaguru', 'Near Barton Library'),
(33, 'Shri Nanimajirajba Primary School (Urdu)', 'nanimajirajbaurdu@school.com', '1-5', 'Meru Nishaben', 'Near Barton Library'),
(36, 'Dr. C.V. Raman Primary School', 'cvraman@school.com', '1-8', 'Joshi Nikulbhai J.', 'Court, Haluria Chowk'),
(37, 'Shri Moti Majirajba Primary School', 'motimajirajba@school.com', '1-8', 'Agatsyabhai Pal', 'Martyr Smarak, Haluria Chowk'),
(38, 'Shri Atal Bihari Vajpayee Primary School', 'atalbiharivajpayee@school.com', '1-8', 'Qureshi Idreesbhai R.', 'Opposite ST Bus Stand, Home Guard Office, Panwadi'),
(40, 'Chhatrapati Shivaji Primary School', 'chhatrapatishivaji@school.com', '1-8', 'Hinaben', 'Near Fire Station, Nirmal Nagar'),
(42, 'Shri Shaheed Bhagat Singh Primary School', 'shaheedbhagatsingh@school.com', '1-8', 'Baraiya Waljibhai K.', 'Near Sidi Takiya, Vadhva'),
(44, 'Shri Maharana Pratap Primary School', 'maharanapratap@school.com', '1-8', 'Dodhiya Maganbhai P.', 'Near Washing Ghat, Bajrangdasbapa Temple'),
(45, 'Shri Maharana Pratap Primary School', 'maharanapratap@school.com', '1-8', 'Parmar Savjibhai S.', 'Near Washing Ghat, Bajrangdasbapa Temple'),
(47, 'Shri Lalbahadur Shastri Primary School', 'lalbahadurshastri@school.com', '1-8', 'Jorsinghbhai Dholetar', 'Behind Motibag Town Hall'),
(48, 'Shri Kasturba Mohandas Gandhi Primary School', 'kasturbagandhi@school.com', '1-8', 'Gohel Hreshbhai J.', 'Milni Chali Pata, Opposite Kumbharwada'),
(49, 'Jhansi Ki Rani Laxmibai Primary School', 'jhansikirani@school.com', '1-8', 'Bambhaniya Jagdishbhai', 'Aksharpark, Kumbharwada'),
(50, 'Dr. Abdul Kalam Primary School', 'abdulkalam@school.com', '1-8', 'Joshi Chiragbhai', 'Gujarat Housing Board, Narir Road'),
(51, 'Dr. Abdul Kalam Primary School', 'abdulkalam@school.com', '1-8', 'Dave Rajendrabhai R.', 'Gujarat Housing Board, Narir Road'),
(52, 'Jhansi Ki Rani Laxmibai Primary School', 'jhansikirani@school.com', '1-8', 'Kaji Mahammadzubair', 'Aksharpark, Kumbharwada, Nari Road'),
(53, 'Shri Pramukh Swami Maharaj Primary School', 'pramukhswami@school.com', '1-8', 'Upadhyay Puneet R.', 'Mahadev Nagar, Akhlol Jakat Naka, Chitra'),
(54, 'Sant Shri Mastaram Bapa Primary School', 'mastarambapa@school.com', '1-8', 'Shah Paras K.', 'Behind Godown, Chitra'),
(55, 'Gautam Buddha Primary School', 'gautambuddha@school.com', '1-8', 'Bhatt Kamlesh N.', 'Mahadev Nagar, Akhlol Jakat Naka, Opposite Chitra Fulser'),
(58, 'Shri Sar Takhtsinghji Primary School', 'sartakhtsinghji@school.com', '1-8', 'Amrubhai Jeblia', 'Mapabhai Bharwad Marg, Vithalwadi'),
(59, 'Sardar Patel Primary School', 'sardarpatelgirls@school.com', '1-8 (Girls', 'Sarvaiya Pradhumnsingh K.', 'Near Gujarat Housing Board Office, Shastrinagar'),
(60, 'Sardar Patel Primary School', 'sardarpatelboys@school.com', '1-8 (Boys)', 'Narendra Singh Bhagji Zala', 'Near Gujarat Housing Board Office, Shastrinagar'),
(62, 'Shri Mahatma Gandhi Primary School', 'mahatmagandhi@school.com', '1-8', 'Chhatrola Dineshbhai K.', 'Pandya Sheri, Hadanagar'),
(63, 'Shri Mahatma Gandhi Primary School', 'mahatmagandhi@school.com', '1-8', 'Baraiya Manjibhai R.', 'Sarvodaya Society, Talpada Koli Jnati Wadi, Hadanagar'),
(65, 'Shri Gaurishankar Primary School', 'gaurishankar@school.com', '1-8', 'Agwan Saleembhai N.', 'Near Boretalav Bal Vatika'),
(67, 'Shri Chandramouli Primary School', 'chandramouli@school.com', '1-8', 'Pareshbhai Khasia', 'Near Akhilesh Circle, Ghogharod'),
(68, 'Shri Krishnapara Primary School', 'krishnapara@school.com', '1-8', 'Mahendra Upadhyay', 'Opposite Ramapir Mandir, Khamach Goshala, Ghogharod'),
(69, 'Pandit Dindayal Upadhyaya Sanskrit Dham', 'dindayalupadhyaya@school.com', '1-8', 'Pal Janubhai C.', 'Lambehanuman, Near Sardar Nagar'),
(70, 'Pandit Dindayal Upadhyaya Sanskrit Dham', 'dindayalupadhyaya@school.com', '1-8', 'Vegad Shankarbhai B.', 'Lambehanuman, Near Sardar Nagar'),
(72, 'Dr. Hedgewar Primary School', 'hedgewar@school.com', '1-8', 'Kothariya Sabnamben', 'E Division, Vardhman Nagar, Bharat Nagar'),
(73, 'Sardar Singh Rana Primary School', 'sardarsinghrana@school.com', '1-8', 'Zankha Jalpaben Jaysukhlal', 'Opposite Aryasamaj Hall'),
(76, 'Sardar Vallabhbhai Patel Primary School', 'vallabhbhaipatel@school.com', '1-8', 'Rajyaguru Hresh Kaneyalal', 'Opposite Rakeshwar Mahadev Mandir'),
(80, 'Dr. Bhimrao Ambedkar Primary School', 'bhimraoambedkar@school.com', '1-8', 'Meenakshibhen', 'Near MJ Commerce College, Vidyanagar'),
(81, 'Maharaja Krishnakumarsinhji Primary School', 'krishnakumarsinhji@school.com', '1-8', 'Mehta Akshaybhai B.', 'Military Society, Bhavnagar Para'),
(83, 'Shri Maruti Yogaksham Primary School', 'marutiyogaksham@school.com', '1-8', 'Madhavjibhai Pandya', 'Opposite Kaminiya Nagar, Near Virani School, Kaliabid');

-- --------------------------------------------------------

--
-- Table structure for table `student_1`
--

CREATE TABLE `student_1` (
  `student_image` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `roll_number` int(11) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `blood_group` enum('A+','A-','B+','B-','AB+','AB-','O+','O-') NOT NULL,
  `residential_address` text NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `father_phone_number` varchar(10) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `mother_phone_number` varchar(10) NOT NULL,
  `standard` varchar(50) NOT NULL,
  `academic_year` varchar(10) DEFAULT NULL,
  `school_name` varchar(50) DEFAULT NULL,
  `school_number` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_1`
--

INSERT INTO `student_1` (`student_image`, `id`, `full_name`, `roll_number`, `date_of_birth`, `gender`, `blood_group`, `residential_address`, `father_name`, `father_phone_number`, `mother_name`, `mother_phone_number`, `standard`, `academic_year`, `school_name`, `school_number`, `password`) VALUES
('male.jpg', 1, 'Harsh Patel', 1, '2017-08-17', 'Male', 'O+', 'Krishna Nagar, Bhavnagar', 'Rajesh Patel', '9876543201', 'Meena Patel', '9876543210', '1', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '11Hars'),
('female.jpg', 2, 'Jiya Joshi', 2, '2017-07-05', 'Female', 'A+', 'Shiv Shakti Society, Bhavnagar', 'Dinesh Joshi', '9876543202', 'Rupa Joshi', '9876543211', '1', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '22Jiya'),
('male.jpg', 3, 'Aryan Trivedi', 3, '2017-01-20', 'Male', 'B+', 'Bhakti Nagar, Bhavnagar', 'Ketan Trivedi', '9876543203', 'Anita Trivedi', '9876543212', '1', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '33Arya'),
('male.jpg', 4, 'Rudra Shah', 4, '2017-06-15', 'Male', 'AB+', 'Ghogha Circle, Bhavnagar', 'Mahesh Shah', '9876543204', 'Falguni Shah', '9876543213', '1', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '44Rudr'),
('female.jpg', 5, 'Anaya Mehta', 5, '2017-04-18', 'Female', 'O-', 'Kalanala, Bhavnagar', 'Paresh Mehta', '9876543205', 'Sejal Mehta', '9876543214', '1', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '55Anay'),
('male.jpg', 6, 'Vihan Dave', 6, '2017-09-08', 'Male', 'B-', 'Nari Circle, Bhavnagar', 'Mitesh Dave', '9876543206', 'Rita Dave', '9876543215', '1', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '66Viha'),
('female.jpg', 7, 'Mira Desai', 7, '2017-05-23', 'Female', 'A-', 'Sardar Nagar, Bhavnagar', 'Manish Desai', '9876543207', 'Alpana Desai', '9876543216', '1', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '77Mira'),
('male.jpg', 8, 'Devansh Bhatt', 8, '2017-11-11', 'Male', 'O+', 'Tarsamiya, Bhavnagar', 'Vipul Bhatt', '9876543208', 'Sonali Bhatt', '9876543217', '1', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '88Deva'),
('female.jpg', 9, 'Kavya Gohil', 9, '2017-02-14', 'Female', 'A+', 'Nana Chiloda, Bhavnagar', 'Raj Gohil', '9876543209', 'Jigna Gohil', '9876543218', '1', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '99Kavy'),
('male.jpg', 10, 'Dhruv Vyas', 10, '2017-10-29', 'Male', 'B+', 'Chitra GIDC, Bhavnagar', 'Hiren Vyas', '9876543219', 'Meghna Vyas', '9876543220', '1', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1010Dhru'),
('female.jpg', 11, 'Tisha Pandya', 11, '2017-08-30', 'Female', 'O-', 'Aksharwadi, Bhavnagar', 'Ramesh Pandya', '9876543222', 'Neha Pandya', '9876543221', '1', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1111Tish'),
('male.jpg', 12, 'Reyansh Chavda', 12, '2017-07-15', 'Male', 'AB+', 'Bharatnagar, Bhavnagar', 'Naresh Chavda', '9876543224', 'Pooja Chavda', '9876543223', '1', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1212Reya'),
('female.jpg', 13, 'Ishika Solanki', 13, '2017-03-28', 'Female', 'A-', 'Madhav Nagar, Bhavnagar', 'Jitendra Solanki', '9876543226', 'Rina Solanki', '9876543225', '1', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1313Ishi'),
('male.jpg', 14, 'Karan Zala', 14, '2017-05-09', 'Male', 'B-', 'Navapara, Bhavnagar', 'Bhavesh Zala', '9876543228', 'Hetal Zala', '9876543227', '1', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1414Kara'),
('female.jpg', 15, 'Rudri Parmar', 15, '2017-12-22', 'Female', 'O+', 'Kumbharwada, Bhavnagar', 'Ravi Parmar', '9876543230', 'Payal Parmar', '9876543229', '1', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1515Rudr'),
('male.jpg', 16, 'Vivaan Rathod', 16, '2017-09-17', 'Male', 'A+', 'Vora Bazar, Bhavnagar', 'Jignesh Rathod', '9876543232', 'Bhavna Rathod', '9876543231', '1', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1616Viva'),
('female.jpg', 17, 'Saanvi Jadeja', 17, '2017-06-25', 'Female', 'B+', 'Vadva, Bhavnagar', 'Yogesh Jadeja', '9876543234', 'Swati Jadeja', '9876543233', '1', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1717Saan'),
('male.jpg', 18, 'Parth Gajjar', 18, '2017-01-05', 'Male', 'AB-', 'Ramnagar, Bhavnagar', 'Vishal Gajjar', '9876543236', 'Bina Gajjar', '9876543235', '1', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1818Part'),
('female.jpg', 19, 'Nidhi Chauhan', 19, '2017-07-07', 'Female', 'O-', 'Subhash Nagar, Bhavnagar', 'Ashok Chauhan', '9876543238', 'Roshni Chauhan', '9876543237', '1', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1919Nidh'),
('male.jpg', 20, 'Krishna Makwana', 20, '2017-04-14', 'Male', 'A-', 'Bhavnagar City, Bhavnagar', 'Mahendra Makwana', '9876543240', 'Sarita Makwana', '9876543239', '1', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '2020Kris'),
('male.jpg', 21, 'Aarav Patel', 1, '2016-02-10', 'Male', 'O+', 'Krishna Nagar, Bhavnagar', 'Rajesh Patel', '9876543241', 'Meena Patel', '9876543250', '2', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '121Aara'),
('female.jpg', 22, 'Khushi Joshi', 2, '2016-05-20', 'Female', 'A+', 'Shiv Shakti Society, Bhavnagar', 'Dinesh Joshi', '9876543242', 'Rupa Joshi', '9876543251', '2', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '222Khus'),
('male.jpg', 23, 'Vihaan Trivedi', 3, '2016-08-15', 'Male', 'B+', 'Bhakti Nagar, Bhavnagar', 'Ketan Trivedi', '9876543243', 'Anita Trivedi', '9876543252', '2', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '323Viha'),
('female.jpg', 24, 'Reeva Shah', 4, '2016-03-25', 'Female', 'AB+', 'Ghogha Circle, Bhavnagar', 'Mahesh Shah', '9876543244', 'Falguni Shah', '9876543253', '2', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '424Reev'),
('male.jpg', 25, 'Parth Mehta', 5, '2016-07-12', 'Male', 'O-', 'Kalanala, Bhavnagar', 'Paresh Mehta', '9876543245', 'Sejal Mehta', '9876543254', '2', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '525Part'),
('female.jpg', 26, 'Riya Dave', 6, '2016-09-30', 'Female', 'B-', 'Nari Circle, Bhavnagar', 'Mitesh Dave', '9876543246', 'Rita Dave', '9876543255', '2', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '626Riya'),
('male.jpg', 27, 'Aryan Desai', 7, '2016-01-18', 'Male', 'A-', 'Sardar Nagar, Bhavnagar', 'Manish Desai', '9876543247', 'Alpana Desai', '9876543256', '2', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '727Arya'),
('female.jpg', 28, 'Aadhya Bhatt', 8, '2016-06-10', 'Female', 'O+', 'Tarsamiya, Bhavnagar', 'Vipul Bhatt', '9876543248', 'Sonali Bhatt', '9876543257', '2', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '828Aadh'),
('male.jpg', 29, 'Kabir Gohil', 9, '2016-04-05', 'Male', 'A+', 'Nana Chiloda, Bhavnagar', 'Raj Gohil', '9876543249', 'Jigna Gohil', '9876543258', '2', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '929Kabi'),
('female.jpg', 30, 'Krisha Vyas', 10, '2016-10-29', 'Female', 'B+', 'Chitra GIDC, Bhavnagar', 'Hiren Vyas', '9876543259', 'Meghna Vyas', '9876543260', '2', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1030Kris'),
('male.jpg', 31, 'Darsh Pandya', 11, '2016-08-22', 'Male', 'O-', 'Aksharwadi, Bhavnagar', 'Ramesh Pandya', '9876543262', 'Neha Pandya', '9876543261', '2', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1131Dars'),
('female.jpg', 32, 'Nisha Chavda', 12, '2016-07-16', 'Female', 'AB+', 'Bharatnagar, Bhavnagar', 'Naresh Chavda', '9876543264', 'Pooja Chavda', '9876543263', '2', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1232Nish'),
('male.jpg', 33, 'Rudra Solanki', 13, '2016-03-08', 'Male', 'A-', 'Madhav Nagar, Bhavnagar', 'Jitendra Solanki', '9876543266', 'Rina Solanki', '9876543265', '2', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1333Rudr'),
('female.jpg', 34, 'Tanvi Zala', 14, '2016-05-19', 'Female', 'B-', 'Navapara, Bhavnagar', 'Bhavesh Zala', '9876543268', 'Hetal Zala', '9876543267', '2', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1434Tanv'),
('male.jpg', 35, 'Jay Parmar', 15, '2016-12-12', 'Male', 'O+', 'Kumbharwada, Bhavnagar', 'Ravi Parmar', '9876543270', 'Payal Parmar', '9876543269', '2', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1535Jay '),
('female.jpg', 36, 'Ishita Rathod', 16, '2016-09-02', 'Female', 'A+', 'Vora Bazar, Bhavnagar', 'Jignesh Rathod', '9876543272', 'Bhavna Rathod', '9876543271', '2', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1636Ishi'),
('male.jpg', 37, 'Harshil Jadeja', 17, '2016-06-28', 'Male', 'B+', 'Vadva, Bhavnagar', 'Yogesh Jadeja', '9876543274', 'Swati Jadeja', '9876543273', '2', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1737Hars'),
('female.jpg', 38, 'Moksha Gajjar', 18, '2016-01-07', 'Female', 'AB-', 'Ramnagar, Bhavnagar', 'Vishal Gajjar', '9876543276', 'Bina Gajjar', '9876543275', '2', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1838Moks'),
('male.jpg', 39, 'Shivam Chauhan', 19, '2016-07-21', 'Male', 'O-', 'Subhash Nagar, Bhavnagar', 'Ashok Chauhan', '9876543278', 'Roshni Chauhan', '9876543277', '2', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1939Shiv'),
('female.jpg', 40, 'Aarya Makwana', 20, '2016-04-14', 'Female', 'A-', 'Bhavnagar City, Bhavnagar', 'Mahendra Makwana', '9876543280', 'Sarita Makwana', '9876543279', '2', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '2040Aary'),
('male.jpg', 41, 'Rohan Patel', 1, '2015-02-10', 'Male', 'O+', 'Krishna Nagar, Bhavnagar', 'Rajesh Patel', '9876543242', 'Meena Patel', '9876543241', '3', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '141Roha'),
('female.jpg', 42, 'Khushi Joshi', 2, '2015-06-18', 'Female', 'A+', 'Shiv Shakti Society, Bhavnagar', 'Dinesh Joshi', '9876543244', 'Rupa Joshi', '9876543243', '3', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '242Khus'),
('male.jpg', 43, 'Pratham Trivedi', 3, '2015-01-22', 'Male', 'B+', 'Bhakti Nagar, Bhavnagar', 'Ketan Trivedi', '9876543246', 'Anita Trivedi', '9876543245', '3', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '343Prat'),
('male.jpg', 44, 'Aarav Shah', 4, '2015-08-14', 'Male', 'AB+', 'Ghogha Circle, Bhavnagar', 'Mahesh Shah', '9876543248', 'Falguni Shah', '9876543247', '3', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '444Aara'),
('female.jpg', 45, 'Diya Mehta', 5, '2015-05-30', 'Female', 'O-', 'Kalanala, Bhavnagar', 'Paresh Mehta', '9876543250', 'Sejal Mehta', '9876543249', '3', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '545Diya'),
('male.jpg', 46, 'Yug Dave', 6, '2015-09-12', 'Male', 'B-', 'Nari Circle, Bhavnagar', 'Mitesh Dave', '9876543252', 'Rita Dave', '9876543251', '3', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '646Yug '),
('female.jpg', 47, 'Naina Desai', 7, '2015-03-19', 'Female', 'A-', 'Sardar Nagar, Bhavnagar', 'Manish Desai', '9876543254', 'Alpana Desai', '9876543253', '3', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '747Nain'),
('male.jpg', 48, 'Dhruv Bhatt', 8, '2015-11-09', 'Male', 'O+', 'Tarsamiya, Bhavnagar', 'Vipul Bhatt', '9876543256', 'Sonali Bhatt', '9876543255', '3', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '848Dhru'),
('female.jpg', 49, 'Riya Gohil', 9, '2015-02-25', 'Female', 'A+', 'Nana Chiloda, Bhavnagar', 'Raj Gohil', '9876543258', 'Jigna Gohil', '9876543257', '3', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '949Riya'),
('male.jpg', 50, 'Harsh Vyas', 10, '2015-10-28', 'Male', 'B+', 'Chitra GIDC, Bhavnagar', 'Hiren Vyas', '9876543260', 'Meghna Vyas', '9876543259', '3', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1050Hars'),
('female.jpg', 51, 'Isha Pandya', 11, '2015-07-14', 'Female', 'O-', 'Aksharwadi, Bhavnagar', 'Ramesh Pandya', '9876543262', 'Neha Pandya', '9876543261', '3', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1151Isha'),
('male.jpg', 52, 'Kush Chavda', 12, '2015-06-22', 'Male', 'AB+', 'Bharatnagar, Bhavnagar', 'Naresh Chavda', '9876543264', 'Pooja Chavda', '9876543263', '3', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1252Kush'),
('female.jpg', 53, 'Vrunda Solanki', 13, '2015-03-05', 'Female', 'A-', 'Madhav Nagar, Bhavnagar', 'Jitendra Solanki', '9876543266', 'Rina Solanki', '9876543265', '3', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1353Vrun'),
('male.jpg', 54, 'Keshav Zala', 14, '2015-09-17', 'Male', 'B-', 'Navapara, Bhavnagar', 'Bhavesh Zala', '9876543268', 'Hetal Zala', '9876543267', '3', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1454Kesh'),
('female.jpg', 55, 'Riddhi Parmar', 15, '2015-12-10', 'Female', 'O+', 'Kumbharwada, Bhavnagar', 'Ravi Parmar', '9876543270', 'Payal Parmar', '9876543269', '3', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1555Ridd'),
('male.jpg', 56, 'Ayaan Rathod', 16, '2015-08-15', 'Male', 'A+', 'Vora Bazar, Bhavnagar', 'Jignesh Rathod', '9876543272', 'Bhavna Rathod', '9876543271', '3', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1656Ayaa'),
('female.jpg', 57, 'Manya Jadeja', 17, '2015-06-02', 'Female', 'B+', 'Vadva, Bhavnagar', 'Yogesh Jadeja', '9876543274', 'Swati Jadeja', '9876543273', '3', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1757Many'),
('male.jpg', 58, 'Rohan Gajjar', 18, '2015-01-18', 'Male', 'AB-', 'Ramnagar, Bhavnagar', 'Vishal Gajjar', '9876543276', 'Bina Gajjar', '9876543275', '3', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1858Roha'),
('female.jpg', 59, 'Sneha Chauhan', 19, '2015-07-20', 'Female', 'O-', 'Subhash Nagar, Bhavnagar', 'Ashok Chauhan', '9876543278', 'Roshni Chauhan', '9876543277', '3', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1959Sneh'),
('male.jpg', 60, 'Yash Makwana', 20, '2015-04-11', 'Male', 'A-', 'Bhavnagar City, Bhavnagar', 'Mahendra Makwana', '9876543280', 'Sarita Makwana', '9876543279', '3', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '2060Yash'),
('male.jpg', 61, 'Amit Vaghela', 1, '2014-03-21', 'Male', 'A+', 'Kaliyabid, Bhavnagar', 'Mahesh Vaghela', '9876543322', 'Rekha Vaghela', '9876543321', '4', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '161Amit'),
('female.jpg', 62, 'Pooja Rajput', 2, '2014-07-08', 'Female', 'O+', 'Devbagh, Bhavnagar', 'Ravindra Rajput', '9876543324', 'Kalpana Rajput', '9876543323', '4', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '262Pooj'),
('male.jpg', 63, 'Kishan Gohil', 3, '2014-01-11', 'Male', 'B+', 'Chavdigate, Bhavnagar', 'Suresh Gohil', '9876543326', 'Manisha Gohil', '9876543325', '4', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '363Kish'),
('female.jpg', 64, 'Sneha Parmar', 4, '2014-05-15', 'Female', 'AB+', 'Vidhyanagar, Bhavnagar', 'Anil Parmar', '9876543328', 'Rita Parmar', '9876543327', '4', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '464Sneh'),
('male.jpg', 65, 'Raj Mehta', 5, '2014-02-28', 'Male', 'O-', 'Shastrinagar, Bhavnagar', 'Hitesh Mehta', '9876543330', 'Jyoti Mehta', '9876543329', '4', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '565Raj '),
('female.jpg', 66, 'Riya Thakkar', 6, '2014-08-10', 'Female', 'B-', 'Sidsar, Bhavnagar', 'Kamal Thakkar', '9876543332', 'Hina Thakkar', '9876543331', '4', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '666Riya'),
('male.jpg', 67, 'Tushar Chauhan', 7, '2014-04-17', 'Male', 'A-', 'Khodiarnagar, Bhavnagar', 'Manoj Chauhan', '9876543334', 'Rupal Chauhan', '9876543333', '4', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '767Tush'),
('female.jpg', 68, 'Bhavya Zala', 8, '2014-09-25', 'Female', 'O+', 'Jashonath Chowk, Bhavnagar', 'Jignesh Zala', '9876543336', 'Falguni Zala', '9876543335', '4', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '868Bhav'),
('male.jpg', 69, 'Karan Rathod', 9, '2014-06-14', 'Male', 'A+', 'Ghogha Road, Bhavnagar', 'Jayesh Rathod', '9876543338', 'Snehal Rathod', '9876543337', '4', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '969Kara'),
('male.jpg', 70, 'Dharmesh Makwana', 10, '2014-12-03', 'Male', 'B+', 'Nutan Society, Bhavnagar', 'Prakash Makwana', '9876543340', 'Komal Makwana', '9876543339', '4', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1070Dhar'),
('female.jpg', 71, 'Ishita Solanki', 11, '2014-07-19', 'Female', 'O-', 'Mahadev Nagar, Bhavnagar', 'Jiten Solanki', '9876543342', 'Vandana Solanki', '9876543341', '4', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1171Ishi'),
('male.jpg', 72, 'Arjun Dave', 12, '2014-10-01', 'Male', 'AB+', 'Mota Khutavada, Bhavnagar', 'Rajendra Dave', '9876543344', 'Bina Dave', '9876543343', '4', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1272Arju'),
('female.jpg', 73, 'Pritisha Pandya', 13, '2014-03-07', 'Female', 'A-', 'Bhavnagar Station Road, Bhavnagar', 'Satish Pandya', '9876543346', 'Neeta Pandya', '9876543345', '4', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1373Prit'),
('male.jpg', 74, 'Ronak Chavda', 14, '2014-05-26', 'Male', 'B-', 'Mahila College Road, Bhavnagar', 'Paresh Chavda', '9876543348', 'Rekha Chavda', '9876543347', '4', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1474Rona'),
('female.jpg', 75, 'Jinal Joshi', 15, '2014-11-08', 'Female', 'O+', 'Vijaynagar, Bhavnagar', 'Mahendra Joshi', '9876543350', 'Anjana Joshi', '9876543349', '4', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1575Jina'),
('male.jpg', 76, 'Sahil Gajjar', 16, '2014-09-22', 'Male', 'A+', 'Vora Bazaar, Bhavnagar', 'Bhavesh Gajjar', '9876543352', 'Meera Gajjar', '9876543351', '4', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1676Sahi'),
('female.jpg', 77, 'Mihika Vyas', 17, '2014-06-09', 'Female', 'B+', 'Sanjay Nagar, Bhavnagar', 'Ketan Vyas', '9876543354', 'Sarita Vyas', '9876543353', '4', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1777Mihi'),
('male.jpg', 78, 'Harshil Jadeja', 18, '2014-01-27', 'Male', 'AB-', 'Paliyad Road, Bhavnagar', 'Nirav Jadeja', '9876543356', 'Amisha Jadeja', '9876543355', '4', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1878Hars'),
('female.jpg', 79, 'Vidhi Chauhan', 19, '2014-07-05', 'Female', 'O-', 'Gandhinagar Society, Bhavnagar', 'Sanjay Chauhan', '9876543358', 'Laxmi Chauhan', '9876543357', '4', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1979Vidh'),
('male.jpg', 80, 'Meet Makwana', 20, '2014-04-12', 'Male', 'A-', 'Madhav Park, Bhavnagar', 'Kamlesh Makwana', '9876543360', 'Sejal Makwana', '9876543359', '4', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '2080Meet'),
('male.jpg', 81, 'Fenil Patel', 1, '2013-08-17', 'Male', 'B+', 'Kaliyabid, Bhavnagar', 'Rupesh Patel', '9988843362', 'Falguni Patel', '9876523765', '5', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '181Feni'),
('female.jpg', 82, 'Aarohi Shah', 2, '2013-07-22', 'Female', 'O+', 'Krishna Nagar, Bhavnagar', 'Mahesh Shah', '9876543364', 'Rekha Shah', '9876543363', '5', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '282Aaro'),
('male.jpg', 83, 'Vansh Trivedi', 3, '2013-01-10', 'Male', 'B+', 'Sidsar, Bhavnagar', 'Dinesh Trivedi', '9876543366', 'Pooja Trivedi', '9876543365', '5', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '383Vans'),
('female.jpg', 84, 'Krisha Gohil', 4, '2013-05-25', 'Female', 'AB+', 'Tarsamiya, Bhavnagar', 'Rajesh Gohil', '9876543368', 'Sonal Gohil', '9876543367', '5', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '484Kris'),
('male.jpg', 85, 'Om Rathod', 5, '2013-02-18', 'Male', 'O-', 'Ghogha Circle, Bhavnagar', 'Jitendra Rathod', '9876543370', 'Falguni Rathod', '9876543369', '5', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '585Om R'),
('female.jpg', 86, 'Disha Mehta', 6, '2013-09-05', 'Female', 'B-', 'Shivaji Nagar, Bhavnagar', 'Paresh Mehta', '9876543372', 'Sejal Mehta', '9876543371', '5', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '686Dish'),
('male.jpg', 87, 'Jay Dave', 7, '2013-04-29', 'Male', 'A-', 'Sardar Nagar, Bhavnagar', 'Hiren Dave', '9876543374', 'Kavita Dave', '9876543373', '5', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '787Jay '),
('female.jpg', 88, 'Bhakti Desai', 8, '2013-11-13', 'Female', 'O+', 'Mahila College Road, Bhavnagar', 'Naresh Desai', '9876543376', 'Meghna Desai', '9876543375', '5', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '888Bhak'),
('male.jpg', 89, 'Darshan Bhatt', 9, '2013-02-07', 'Male', 'A+', 'Subhash Nagar, Bhavnagar', 'Ramesh Bhatt', '9876543378', 'Neeta Bhatt', '9876543377', '5', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '989Dars'),
('female.jpg', 90, 'Nidhi Zala', 10, '2013-10-21', 'Female', 'B+', 'Chitra GIDC, Bhavnagar', 'Bhavesh Zala', '9876543380', 'Jigna Zala', '9876543379', '5', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1090Nidh'),
('male.jpg', 91, 'Tirth Solanki', 11, '2013-08-30', 'Male', 'O-', 'Aksharwadi, Bhavnagar', 'Manish Solanki', '9876543382', 'Anita Solanki', '9876543381', '5', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1191Tirt'),
('female.jpg', 92, 'Tanishka Parmar', 12, '2013-06-15', 'Female', 'AB+', 'Ramnagar, Bhavnagar', 'Jitendra Parmar', '9876543384', 'Neha Parmar', '9876543383', '5', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1292Tani'),
('male.jpg', 93, 'Shivam Chavda', 13, '2013-03-09', 'Male', 'A-', 'Madhav Nagar, Bhavnagar', 'Ashok Chavda', '9876543386', 'Rupal Chavda', '9876543385', '5', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1393Shiv'),
('female.jpg', 94, 'Roshni Pandya', 14, '2013-05-11', 'Female', 'B-', 'Navapara, Bhavnagar', 'Yogesh Pandya', '9876543388', 'Swati Pandya', '9876543387', '5', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1494Rosh'),
('male.jpg', 95, 'Rudra Jadeja', 15, '2013-12-22', 'Male', 'O+', 'Vadva, Bhavnagar', 'Paresh Jadeja', '9876543390', 'Bhavna Jadeja', '9876543389', '5', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1595Rudr'),
('female.jpg', 96, 'Meera Chauhan', 16, '2013-09-17', 'Female', 'A+', 'Bhakti Nagar, Bhavnagar', 'Kamal Chauhan', '9876543392', 'Payal Chauhan', '9876543391', '5', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1696Meer'),
('male.jpg', 97, 'Parth Gajjar', 17, '2013-07-25', 'Male', 'B+', 'Vora Bazar, Bhavnagar', 'Nirav Gajjar', '9876543394', 'Sonali Gajjar', '9876543393', '5', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1797Part'),
('female.jpg', 98, 'Simran Makwana', 18, '2013-01-05', 'Female', 'AB-', 'Jashonath Chowk, Bhavnagar', 'Mahendra Makwana', '9876543396', 'Sarita Makwana', '9876543395', '5', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1898Simr'),
('male.jpg', 99, 'Krishna Vyas', 19, '2013-07-07', 'Male', 'O-', 'Nana Chiloda, Bhavnagar', 'Sanjay Vyas', '9876543398', 'Roshni Vyas', '9876543397', '5', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1999Kris'),
('female.jpg', 100, 'Anaya Makwana', 20, '2013-04-14', 'Female', 'A-', 'Bhavnagar City, Bhavnagar', 'Kamlesh Makwana', '9876543400', 'Laxmi Makwana', '9876543399', '5', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '20100Anay'),
('male.jpg', 101, 'Devansh Joshi', 1, '2012-03-12', 'Male', 'A+', 'Kaliyabid, Bhavnagar', 'Mahesh Joshi', '9876543402', 'Hina Joshi', '9876543401', '6', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1101Deva'),
('female.jpg', 102, 'Khushi Patel', 2, '2012-07-18', 'Female', 'O+', 'Chitra, Bhavnagar', 'Ketan Patel', '9876543404', 'Pooja Patel', '9876543403', '6', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '2102Khus'),
('male.jpg', 103, 'Rudra Shah', 3, '2012-01-23', 'Male', 'B+', 'Sidsar, Bhavnagar', 'Dinesh Shah', '9876543406', 'Anita Shah', '9876543405', '6', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '3103Rudr'),
('female.jpg', 104, 'Ishani Gohil', 4, '2012-05-10', 'Female', 'AB+', 'Tarsamiya, Bhavnagar', 'Raj Gohil', '9876543408', 'Meghna Gohil', '9876543407', '6', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '4104Isha'),
('male.jpg', 105, 'Aarav Rathod', 5, '2012-02-27', 'Male', 'O-', 'Ghogha Circle, Bhavnagar', 'Jayesh Rathod', '9876543410', 'Rekha Rathod', '9876543409', '6', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '5105Aara'),
('female.jpg', 106, 'Riya Mehta', 6, '2012-09-15', 'Female', 'B-', 'Shivaji Nagar, Bhavnagar', 'Paresh Mehta', '9876543412', 'Sarita Mehta', '9876543411', '6', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '6106Riya'),
('male.jpg', 107, 'Krishna Dave', 7, '2012-04-30', 'Male', 'A-', 'Sardar Nagar, Bhavnagar', 'Hiren Dave', '9876543414', 'Kalpana Dave', '9876543413', '6', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '7107Kris'),
('female.jpg', 108, 'Bhavya Desai', 8, '2012-11-11', 'Female', 'O+', 'Mahila College Road, Bhavnagar', 'Naresh Desai', '9876543416', 'Neeta Desai', '9876543415', '6', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '8108Bhav'),
('male.jpg', 109, 'Dhruv Bhatt', 9, '2012-02-08', 'Male', 'A+', 'Subhash Nagar, Bhavnagar', 'Ramesh Bhatt', '9876543418', 'Meena Bhatt', '9876543417', '6', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '9109Dhru'),
('female.jpg', 110, 'Ishita Zala', 10, '2012-10-22', 'Female', 'B+', 'Chitra GIDC, Bhavnagar', 'Bhavesh Zala', '9876543420', 'Laxmi Zala', '9876543419', '6', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '10110Ishi'),
('male.jpg', 111, 'Karan Solanki', 11, '2012-08-29', 'Male', 'O-', 'Aksharwadi, Bhavnagar', 'Manish Solanki', '9876543422', 'Payal Solanki', '9876543421', '6', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '11111Kara'),
('female.jpg', 112, 'Tanishka Parmar', 12, '2012-06-17', 'Female', 'AB+', 'Ramnagar, Bhavnagar', 'Jitendra Parmar', '9876543424', 'Neha Parmar', '9876543423', '6', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '12112Tani'),
('male.jpg', 113, 'Shivam Chavda', 13, '2012-03-07', 'Male', 'A-', 'Madhav Nagar, Bhavnagar', 'Ashok Chavda', '9876543426', 'Rupal Chavda', '9876543425', '6', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '13113Shiv'),
('female.jpg', 114, 'Roshni Pandya', 14, '2012-05-19', 'Female', 'B-', 'Navapara, Bhavnagar', 'Yogesh Pandya', '9876543428', 'Swati Pandya', '9876543427', '6', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '14114Rosh'),
('male.jpg', 115, 'Rudra Jadeja', 15, '2012-12-01', 'Male', 'O+', 'Vadva, Bhavnagar', 'Paresh Jadeja', '9876543430', 'Bhavna Jadeja', '9876543429', '6', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '15115Rudr'),
('female.jpg', 116, 'Meera Chauhan', 16, '2012-09-16', 'Female', 'A+', 'Bhakti Nagar, Bhavnagar', 'Kamal Chauhan', '9876543432', 'Payal Chauhan', '9876543431', '6', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '16116Meer'),
('male.jpg', 117, 'Parth Gajjar', 17, '2012-07-27', 'Male', 'B+', 'Vora Bazar, Bhavnagar', 'Nirav Gajjar', '9876543434', 'Sonali Gajjar', '9876543433', '6', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '17117Part'),
('female.jpg', 118, 'Simran Makwana', 18, '2012-01-06', 'Female', 'AB-', 'Jashonath Chowk, Bhavnagar', 'Mahendra Makwana', '9876543436', 'Sarita Makwana', '9876543435', '6', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '18118Simr'),
('male.jpg', 119, 'Krishna Vyas', 19, '2012-07-10', 'Male', 'O-', 'Nana Chiloda, Bhavnagar', 'Sanjay Vyas', '9876543438', 'Roshni Vyas', '9876543437', '6', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '19119Kris'),
('female.jpg', 120, 'Anaya Makwana', 20, '2012-04-20', 'Female', 'A-', 'Bhavnagar City, Bhavnagar', 'Kamlesh Makwana', '9876543440', 'Laxmi Makwana', '9876543439', '6', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '20120Anay'),
('male.jpg', 121, 'Aarav Joshi', 1, '2011-02-10', 'Male', 'A+', 'Kaliyabid, Bhavnagar', 'Ramesh Joshi', '9876543442', 'Meena Joshi', '9876543441', '7', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1121Aara'),
('female.jpg', 122, 'Avni Patel', 2, '2011-07-22', 'Female', 'O+', 'Chitra, Bhavnagar', 'Ketan Patel', '9876543444', 'Hina Patel', '9876543443', '7', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '2122Avni'),
('male.jpg', 123, 'Darsh Shah', 3, '2011-01-15', 'Male', 'B+', 'Sidsar, Bhavnagar', 'Dinesh Shah', '9876543446', 'Anita Shah', '9876543445', '7', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '3123Dars'),
('female.jpg', 124, 'Jiya Gohil', 4, '2011-05-08', 'Female', 'AB+', 'Tarsamiya, Bhavnagar', 'Raj Gohil', '9876543448', 'Meghna Gohil', '9876543447', '7', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '4124Jiya'),
('male.jpg', 125, 'Vihan Rathod', 5, '2011-02-25', 'Male', 'O-', 'Ghogha Circle, Bhavnagar', 'Jayesh Rathod', '9876543450', 'Rekha Rathod', '9876543449', '7', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '5125Viha'),
('female.jpg', 126, 'Diya Mehta', 6, '2011-09-18', 'Female', 'B-', 'Shivaji Nagar, Bhavnagar', 'Paresh Mehta', '9876543452', 'Sarita Mehta', '9876543451', '7', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '6126Diya'),
('male.jpg', 127, 'Parth Dave', 7, '2011-04-30', 'Male', 'A-', 'Sardar Nagar, Bhavnagar', 'Hiren Dave', '9876543454', 'Kalpana Dave', '9876543453', '7', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '7127Part'),
('female.jpg', 128, 'Riya Desai', 8, '2011-11-12', 'Female', 'O+', 'Mahila College Road, Bhavnagar', 'Naresh Desai', '9876543456', 'Neeta Desai', '9876543455', '7', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '8128Riya'),
('male.jpg', 129, 'Shiv Bhatt', 9, '2011-02-05', 'Male', 'A+', 'Subhash Nagar, Bhavnagar', 'Ramesh Bhatt', '9876543458', 'Meena Bhatt', '9876543457', '7', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '9129Shiv'),
('female.jpg', 130, 'Anika Zala', 10, '2011-10-23', 'Female', 'B+', 'Chitra GIDC, Bhavnagar', 'Bhavesh Zala', '9876543460', 'Laxmi Zala', '9876543459', '7', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '10130Anik'),
('male.jpg', 131, 'Reyansh Solanki', 11, '2011-08-29', 'Male', 'O-', 'Aksharwadi, Bhavnagar', 'Manish Solanki', '9876543462', 'Payal Solanki', '9876543461', '7', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '11131Reya'),
('female.jpg', 132, 'Tisha Parmar', 12, '2011-06-17', 'Female', 'AB+', 'Ramnagar, Bhavnagar', 'Jitendra Parmar', '9876543464', 'Neha Parmar', '9876543463', '7', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '12132Tish'),
('male.jpg', 133, 'Moksh Chavda', 13, '2011-03-06', 'Male', 'A-', 'Madhav Nagar, Bhavnagar', 'Ashok Chavda', '9876543466', 'Rupal Chavda', '9876543465', '7', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '13133Moks'),
('female.jpg', 134, 'Sanika Pandya', 14, '2011-05-20', 'Female', 'B-', 'Navapara, Bhavnagar', 'Yogesh Pandya', '9876543468', 'Swati Pandya', '9876543467', '7', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '14134Sani'),
('male.jpg', 135, 'Rudra Jadeja', 15, '2011-12-02', 'Male', 'O+', 'Vadva, Bhavnagar', 'Paresh Jadeja', '9876543470', 'Bhavna Jadeja', '9876543469', '7', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '15135Rudr'),
('female.jpg', 136, 'Mahi Chauhan', 16, '2011-09-17', 'Female', 'A+', 'Bhakti Nagar, Bhavnagar', 'Kamal Chauhan', '9876543472', 'Payal Chauhan', '9876543471', '7', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '16136Mahi'),
('male.jpg', 137, 'Aryan Gajjar', 17, '2011-07-28', 'Male', 'B+', 'Vora Bazar, Bhavnagar', 'Nirav Gajjar', '9876543474', 'Sonali Gajjar', '9876543473', '7', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '17137Arya'),
('female.jpg', 138, 'Saanvi Makwana', 18, '2011-01-08', 'Female', 'AB-', 'Jashonath Chowk, Bhavnagar', 'Mahendra Makwana', '9876543476', 'Sarita Makwana', '9876543475', '7', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '18138Saan'),
('male.jpg', 139, 'Arjun Vyas', 19, '2011-07-11', 'Male', 'O-', 'Nana Chiloda, Bhavnagar', 'Sanjay Vyas', '9876543478', 'Roshni Vyas', '9876543477', '7', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '19139Arju'),
('female.jpg', 140, 'Navya Makwana', 20, '2011-04-22', 'Female', 'A-', 'Bhavnagar City, Bhavnagar', 'Kamlesh Makwana', '9876543480', 'Laxmi Makwana', '9876543479', '7', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '20140Navy'),
('male.jpg', 141, 'Vedant Joshi', 1, '2010-02-15', 'Male', 'A+', 'Kaliyabid, Bhavnagar', 'Ramesh Joshi', '9876543482', 'Meena Joshi', '9876543481', '8', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '1141Veda'),
('female.jpg', 142, 'Saanvi Patel', 2, '2010-07-21', 'Female', 'O+', 'Chitra, Bhavnagar', 'Ketan Patel', '9876543484', 'Hina Patel', '9876543483', '8', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '2142Saan'),
('male.jpg', 143, 'Reyansh Shah', 3, '2010-01-12', 'Male', 'B+', 'Sidsar, Bhavnagar', 'Dinesh Shah', '9876543486', 'Anita Shah', '9876543485', '8', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '3143Reya'),
('female.jpg', 144, 'Ira Gohil', 4, '2010-05-07', 'Female', 'AB+', 'Tarsamiya, Bhavnagar', 'Raj Gohil', '9876543488', 'Meghna Gohil', '9876543487', '8', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '4144Ira '),
('male.jpg', 145, 'Harsh Rathod', 5, '2010-02-20', 'Male', 'O-', 'Ghogha Circle, Bhavnagar', 'Jayesh Rathod', '9876543490', 'Rekha Rathod', '9876543489', '8', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '5145Hars'),
('female.jpg', 146, 'Kiara Mehta', 6, '2010-09-17', 'Female', 'B-', 'Shivaji Nagar, Bhavnagar', 'Paresh Mehta', '9876543492', 'Sarita Mehta', '9876543491', '8', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '6146Kiar'),
('male.jpg', 147, 'Shaurya Dave', 7, '2010-04-29', 'Male', 'A-', 'Sardar Nagar, Bhavnagar', 'Hiren Dave', '9876543494', 'Kalpana Dave', '9876543493', '8', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '7147Shau'),
('female.jpg', 148, 'Jhanvi Desai', 8, '2010-11-10', 'Female', 'O+', 'Mahila College Road, Bhavnagar', 'Naresh Desai', '9876543496', 'Neeta Desai', '9876543495', '8', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '8148Jhan'),
('male.jpg', 149, 'Yug Bhatt', 9, '2010-02-04', 'Male', 'A+', 'Subhash Nagar, Bhavnagar', 'Ramesh Bhatt', '9876543498', 'Meena Bhatt', '9876543497', '8', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '9149Yug '),
('female.jpg', 150, 'Mishka Zala', 10, '2010-10-25', 'Female', 'B+', 'Chitra GIDC, Bhavnagar', 'Bhavesh Zala', '9876543500', 'Laxmi Zala', '9876543499', '8', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '10150Mish'),
('male.jpg', 151, 'Aarush Solanki', 11, '2010-08-30', 'Male', 'O-', 'Aksharwadi, Bhavnagar', 'Manish Solanki', '9876543502', 'Payal Solanki', '9876543501', '8', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '11151Aaru'),
('female.jpg', 152, 'Tanya Parmar', 12, '2010-06-19', 'Female', 'AB+', 'Ramnagar, Bhavnagar', 'Jitendra Parmar', '9876543504', 'Neha Parmar', '9876543503', '8', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '12152Tany'),
('male.jpg', 153, 'Ayaan Chavda', 13, '2010-03-05', 'Male', 'A-', 'Madhav Nagar, Bhavnagar', 'Ashok Chavda', '9876543506', 'Rupal Chavda', '9876543505', '8', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '13153Ayaa'),
('female.jpg', 154, 'Ruhi Pandya', 14, '2010-05-22', 'Female', 'B-', 'Navapara, Bhavnagar', 'Yogesh Pandya', '9876543508', 'Swati Pandya', '9876543507', '8', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '14154Ruhi'),
('male.jpg', 155, 'Vivaan Jadeja', 15, '2010-12-03', 'Male', 'O+', 'Vadva, Bhavnagar', 'Paresh Jadeja', '9876543510', 'Bhavna Jadeja', '9876543509', '8', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '15155Viva'),
('female.jpg', 156, 'Myra Chauhan', 16, '2010-09-18', 'Female', 'A+', 'Bhakti Nagar, Bhavnagar', 'Kamal Chauhan', '9876543512', 'Payal Chauhan', '9876543511', '8', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '16156Myra'),
('female.jpg', 157, 'Kavya Gajjar', 17, '2010-07-26', 'Female', 'B+', 'Vora Bazar, Bhavnagar', 'Nirav Gajjar', '9876543514', 'Sonali Gajjar', '9876543513', '8', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '17157Kavy'),
('male.jpg', 158, 'Samar Makwana', 18, '2010-01-07', 'Male', 'AB-', 'Jashonath Chowk, Bhavnagar', 'Mahendra Makwana', '9876543516', 'Sarita Makwana', '9876543515', '8', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '18158Sama'),
('male.jpg', 159, 'Daksh Vyas', 19, '2010-07-13', 'Male', 'O-', 'Nana Chiloda, Bhavnagar', 'Sanjay Vyas', '9876543518', 'Roshni Vyas', '9876543517', '8', '2024-25', 'Brahmmasi Vashishth Primary School', '1', '19159Daks');

-- --------------------------------------------------------

--
-- Table structure for table `student_marks`
--

CREATE TABLE `student_marks` (
  `marks_id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `roll_number` int(11) NOT NULL,
  `class` varchar(50) NOT NULL,
  `exam_type` varchar(50) NOT NULL DEFAULT 'Final Exam',
  `mathematics` int(11) DEFAULT NULL CHECK (`mathematics` between 0 and 100),
  `gujarati` int(11) DEFAULT NULL CHECK (`gujarati` between 0 and 100),
  `hindi` int(11) DEFAULT NULL CHECK (`hindi` between 0 and 100),
  `art_craft` int(11) DEFAULT NULL CHECK (`art_craft` between 0 and 100),
  `physical_education` int(11) DEFAULT NULL CHECK (`physical_education` between 0 and 100),
  `teacher_comments` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_marks`
--

INSERT INTO `student_marks` (`marks_id`, `student_name`, `roll_number`, `class`, `exam_type`, `mathematics`, `gujarati`, `hindi`, `art_craft`, `physical_education`, `teacher_comments`, `created_at`, `updated_at`) VALUES
(1, 'Harsh Patel', 1, '1', 'Final Exam', 85, 78, 90, 88, 95, 'Excellent performance!', '2025-03-19 19:13:59', '2025-03-19 19:13:59'),
(2, 'Jiya Joshi', 2, '1', 'Final Exam', 55, 52, 58, 50, 53, 'Needs improvement, work harder.', '2025-03-19 19:13:59', '2025-03-19 19:13:59'),
(3, 'Aryan Trivedi', 3, '1', 'Final Exam', 45, 48, 40, 42, 47, 'Needs more practice and attention.', '2025-03-19 19:13:59', '2025-03-19 19:13:59'),
(4, 'Rudra Shah', 4, '1', 'Final Exam', 95, 92, 90, 98, 99, 'Outstanding work!', '2025-03-19 19:13:59', '2025-03-19 19:13:59'),
(5, 'Anaya Mehta', 5, '1', 'Final Exam', 78, 82, 79, 80, 85, 'Very good, keep it up.', '2025-03-19 19:13:59', '2025-03-19 19:13:59'),
(6, 'Vihan Dave', 6, '1', 'Final Exam', 55, 60, 58, 50, 59, 'Can improve with effort.', '2025-03-19 19:13:59', '2025-03-19 19:13:59'),
(7, 'Mira Desai', 7, '1', 'Final Exam', 40, 42, 38, 45, 43, 'Needs significant improvement.', '2025-03-19 19:13:59', '2025-03-19 19:13:59'),
(8, 'Devansh Bhatt', 8, '1', 'Final Exam', 88, 90, 85, 92, 95, 'Great work!', '2025-03-19 19:13:59', '2025-03-19 19:13:59'),
(9, 'Kavya Gohil', 9, '1', 'Final Exam', 62, 65, 60, 67, 70, 'Good, but can do better.', '2025-03-19 19:13:59', '2025-03-19 19:13:59'),
(10, 'Dhruv Vyas', 10, '1', 'Final Exam', 91, 88, 94, 90, 89, 'Excellent performance!', '2025-03-19 19:13:59', '2025-03-19 19:13:59'),
(11, 'Tisha Pandya', 11, '1', 'Final Exam', 48, 46, 45, 42, 49, 'Needs to focus more.', '2025-03-19 19:13:59', '2025-03-19 19:13:59'),
(12, 'Reyansh Chavda', 12, '1', 'Final Exam', 78, 75, 80, 82, 85, 'Very good performance.', '2025-03-19 19:13:59', '2025-03-19 19:13:59'),
(13, 'Ishika Solanki', 13, '1', 'Final Exam', 30, 35, 40, 32, 38, 'Needs significant improvement.', '2025-03-19 19:13:59', '2025-03-19 19:13:59'),
(14, 'Karan Zala', 14, '1', 'Final Exam', 95, 97, 98, 96, 99, 'Exceptional performance!', '2025-03-19 19:13:59', '2025-03-19 19:13:59'),
(15, 'Rudri Parmar', 15, '1', 'Final Exam', 72, 74, 70, 76, 78, 'Good work, keep going.', '2025-03-19 19:13:59', '2025-03-19 19:13:59'),
(16, 'Vivaan Rathod', 16, '1', 'Final Exam', 48, 45, 42, 47, 49, 'Can improve with more effort.', '2025-03-19 19:13:59', '2025-03-19 19:13:59'),
(17, 'Saanvi Jadeja', 17, '1', 'Final Exam', 85, 88, 82, 90, 89, 'Very impressive performance.', '2025-03-19 19:13:59', '2025-03-19 19:13:59'),
(18, 'Parth Gajjar', 18, '1', 'Final Exam', 41, 44, 40, 42, 45, 'Needs more dedication and practice.', '2025-03-19 19:13:59', '2025-03-19 19:13:59'),
(19, 'Nidhi Chauhan', 19, '1', 'Final Exam', 68, 70, 72, 65, 75, 'Good progress, keep it up.', '2025-03-19 19:13:59', '2025-03-19 19:13:59'),
(20, 'Krishna Makwana', 20, '1', 'Final Exam', 48, 46, 45, 43, 47, 'Fair performance, needs to push harder.', '2025-03-19 19:13:59', '2025-03-19 19:13:59');

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
  `teacher_image` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `date_of_birth` date NOT NULL,
  `blood_group` enum('A+','A-','B+','B-','AB+','AB-','O+','O-') NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `emergency_contact_number` varchar(10) DEFAULT NULL,
  `email_address` varchar(100) NOT NULL,
  `residential_address` text NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `standard` varchar(50) NOT NULL,
  `salary_monthly` decimal(10,2) DEFAULT NULL,
  `qualification` varchar(100) NOT NULL,
  `first_language` varchar(50) DEFAULT NULL,
  `language_known` varchar(255) DEFAULT NULL,
  `school_name` varchar(50) DEFAULT NULL,
  `school_number` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_1`
--

INSERT INTO `teacher_1` (`teacher_image`, `id`, `full_name`, `gender`, `date_of_birth`, `blood_group`, `phone_number`, `emergency_contact_number`, `email_address`, `residential_address`, `subject_name`, `standard`, `salary_monthly`, `qualification`, `first_language`, `language_known`, `school_name`, `school_number`, `password`) VALUES
('t_male.jpg', 1, 'Rajesh Patel', 'Male', '1980-05-12', 'O+', '9876543210', '9876543210', 'rajesh.patel@example.com', 'Kaliyabid, Bhavnagar', 'Gujarati', '1,2', 45000.00, 'M.A, B.Ed', 'Gujarati', 'Gujarati, Hindi, English', 'Brahmmasi Vashishth Primary School', '1', 'Raje1O+'),
('t_male.jpg', 2, 'Mehul Desai', 'Male', '1978-07-19', 'A+', '9876543211', '9876543211', 'mehul.desai@example.com', 'Vidhyanagar, Bhavnagar', 'Mathematics', '1,2', 48000.00, 'M.Sc, B.Ed', 'Gujarati', 'Gujarati, Hindi, English', 'Brahmmasi Vashishth Primary School', '1', 'Mehu2A+'),
('t_female.jpg', 3, 'Bhavna Shah', 'Female', '1982-09-22', 'B+', '9876543212', '9876543212', 'bhavna.shah@example.com', 'Chitra, Bhavnagar', 'Hindi', '1,2', 47000.00, 'M.A, B.Ed', 'Hindi', 'Hindi, Gujarati, English', 'Brahmmasi Vashishth Primary School', '1', 'Bhav3B+'),
('t_male.jpg', 4, 'Sanjay Trivedi', 'Male', '1975-12-05', 'AB+', '9876543213', '9876543213', 'sanjay.trivedi@example.com', 'Shishumangal, Bhavnagar', 'Art & Craft', '1,2', 50000.00, 'M.Com, B.Ed', 'Gujarati', 'Gujarati, Hindi, English', 'Brahmmasi Vashishth Primary School', '1', 'Sanj4AB+'),
('t_male.jpg', 5, 'Jignesh Bhatt', 'Male', '1981-03-10', 'O-', '9876543214', '9876543214', 'jignesh.bhatt@example.com', 'Krishna Nagar, Bhavnagar', 'Physical Education & Health', '1,2', 46000.00, 'M.Sc, B.Ed', 'Gujarati', 'Gujarati, Hindi, English', 'Brahmmasi Vashishth Primary School', '1', 'Jign5O-'),
('t_male.jpg', 6, 'Alpesh Joshi', 'Male', '1979-11-30', 'A-', '9876543217', '9876543217', 'alpesh.joshi@example.com', 'Kumbharwada, Bhavnagar', 'Mathematics', '3,4', 47000.00, 'M.Sc, B.Ed', 'Gujarati', 'Gujarati, Hindi, English', 'Brahmmasi Vashishth Primary School', '1', 'Alpe6A-'),
('t_male.jpg', 7, 'Dipak Parmar', 'Male', '1985-04-18', 'B-', '9876543218', '9876543218', 'dipak.parmar@example.com', 'Ghogha Circle, Bhavnagar', 'Gujarati', '3,4', 46000.00, 'M.A, B.Ed', 'Gujarati', 'Gujarati, Hindi, English', 'Brahmmasi Vashishth Primary School', '1', 'Dipa7B-'),
('t_male.jpg', 8, 'Hiren Vyas', 'Male', '1981-06-22', 'AB-', '9876543219', '9876543219', 'hiren.vyas@example.com', 'Chitra, Bhavnagar', 'Hindi', '3,4', 48000.00, 'M.A, B.Ed', 'Hindi', 'Hindi, Gujarati, English', 'Brahmmasi Vashishth Primary School', '1', 'Hire8AB-'),
('t_female.jpg', 9, 'Manisha Dave', 'Female', '1983-06-25', 'O+', '9876543220', '9876543220', 'manisha.dave@example.com', 'Sardarnagar, Bhavnagar', 'English', '3,4', 49000.00, 'M.A, B.Ed', 'English', 'English, Gujarati, Hindi', 'Brahmmasi Vashishth Primary School', '1', 'Mani9O+'),
('t_female.jpg', 10, 'Parul Mehta', 'Female', '1982-02-14', 'A+', '9876543221', '9876543221', 'parul.mehta@example.com', 'Nirmal Nagar, Bhavnagar', 'EVS', '3,4', 45500.00, 'M.Sc, B.Ed', 'Gujarati', 'Gujarati, Hindi, English', 'Brahmmasi Vashishth Primary School', '1', 'Paru10A+'),
('t_female.jpg', 11, 'Rupal Thakkar', 'Female', '1980-09-29', 'B+', '9876543222', '9876543222', 'rupal.thakkar@example.com', 'Krishna Nagar, Bhavnagar', 'Art & Craft', '3,4', 47000.00, 'M.A, B.Ed', 'Gujarati', 'Gujarati, Hindi, English', 'Brahmmasi Vashishth Primary School', '1', 'Rupa11B+'),
('t_male.jpg', 12, 'Ajay Dabhi', 'Male', '1987-12-15', 'AB+', '9876543223', '9876543223', 'ajay.dabhi@example.com', 'Tarsamiya, Bhavnagar', 'Physical Education & Health', '3,4', 45000.00, 'B.P.Ed', 'Gujarati', 'Gujarati, Hindi, English', 'Brahmmasi Vashishth Primary School', '1', 'Ajay12AB+'),
('t_female.jpg', 13, 'Kamini Choksi', 'Female', '1982-11-25', 'O-', '9876543226', '9876543226', 'kamini.choksi@example.com', 'Kaliyabid, Bhavnagar', 'English', '5,6', 48000.00, 'M.A, B.Ed', 'English', 'English, Gujarati, Hindi', 'Brahmmasi Vashishth Primary School', '1', 'Kami13O-'),
('t_male.jpg', 14, 'Vijay Bhanderi', 'Male', '1980-07-19', 'A-', '9876543227', '9876543227', 'vijay.bhanderi@example.com', 'Vidhyanagar, Bhavnagar', 'Gujarati', '5,6', 47000.00, 'M.A, B.Ed', 'Gujarati', 'Gujarati, Hindi, English', 'Brahmmasi Vashishth Primary School', '1', 'Vija14A-'),
('t_male.jpg', 15, 'Nilesh Gediya', 'Male', '1985-05-10', 'B-', '9876543228', '9876543228', 'nilesh.gediya@example.com', 'Tarsamiya, Bhavnagar', 'Hindi', '5,6', 46000.00, 'M.A, B.Ed', 'Hindi', 'Hindi, Gujarati, English', 'Brahmmasi Vashishth Primary School', '1', 'Nile15B-'),
('t_female.jpg', 16, 'Swati Kachhadiya', 'Female', '1983-04-18', 'AB-', '9876543229', '9876543229', 'swati.kachhadiya@example.com', 'Shishumangal, Bhavnagar', 'Physical Education & Health', '5,6', 49000.00, 'B.P.Ed', 'Gujarati', 'Gujarati, Hindi, English', 'Brahmmasi Vashishth Primary School', '1', 'Swat16AB-'),
('t_male.jpg', 17, 'Jayanti Zinzuwadia', 'Male', '1984-09-22', 'O+', '9876543230', '9876543230', 'jayanti.zinzuwadia@example.com', 'Krishna Nagar, Bhavnagar', 'Social Science', '5,6', 47500.00, 'M.A, B.Ed', 'Gujarati', 'Gujarati, Hindi, English', 'Brahmmasi Vashishth Primary School', '1', 'Jaya17O+'),
('t_male.jpg', 18, 'Arvind Pandit', 'Male', '1981-02-14', 'A+', '9876543231', '9876543231', 'arvind.pandit@example.com', 'Nirmal Nagar, Bhavnagar', 'Science', '5,6', 48500.00, 'M.Sc, B.Ed', 'Gujarati', 'Gujarati, Hindi, English', 'Brahmmasi Vashishth Primary School', '1', 'Arvi18A+'),
('t_female.jpg', 19, 'Tejal Kher', 'Female', '1986-03-10', 'B+', '9876543232', '9876543232', 'tejal.kher@example.com', 'Panwadi, Bhavnagar', 'Work & Art', '5,6', 45500.00, 'M.A, B.Ed', 'Gujarati', 'Gujarati, Hindi, English', 'Brahmmasi Vashishth Primary School', '1', 'Teja19B+'),
('t_female.jpg', 20, 'Hetal Gohil', 'Female', '1985-07-22', 'AB+', '9876543236', '9876543236', 'hetal.gohil@example.com', 'Chitra, Bhavnagar', 'Computer', '5,6', 47000.00, 'M.Sc, B.Ed', 'Gujarati', 'Gujarati, Hindi, English', 'Brahmmasi Vashishth Primary School', '1', 'Heta20AB+'),
('t_male.jpg', 21, 'Prakash Tiwari', 'Male', '1983-09-15', 'O-', '9876543237', '9876543237', 'prakash.tiwari@example.com', 'Sardarnagar, Bhavnagar', 'Mathematics', '5,6', 49000.00, 'M.Sc, B.Ed', 'Gujarati', 'Gujarati, Hindi, English', 'Brahmmasi Vashishth Primary School', '1', 'Prak21O-'),
('t_female.jpg', 22, 'Roshni Trivedi', 'Female', '1984-11-05', 'A-', '9924956723', '9924956723', 'roshni@example.com', 'Panwadi, Bhavnagar', 'Gujarati', '7,8', 43000.00, 'M.A, B.Ed', 'Gujarati', 'Gujarati, Hindi, English', 'Brahmmasi Vashishth Primary School', '1', 'Rosh22A-'),
('t_male.jpg', 23, 'Bhavesh Rajput', 'Male', '1984-10-01', 'B-', '9898224400', '9898224400', 'bhavesh@example.com', 'Krishna Nagar, Bhavnagar', 'English', '7,8', 47000.00, 'M.A, B.Ed', 'English', 'English, Gujarati, Hindi', 'Brahmmasi Vashishth Primary School', '1', 'Bhav23B-'),
('t_female.jpg', 24, 'Heena Chauhan', 'Female', '1983-12-10', 'AB-', '9876543256', '9876543256', 'heena.chauhan@example.com', 'Kaliyabid, Bhavnagar', 'Social Science', '7,8', 50000.00, 'M.A, B.Ed', 'Gujarati', 'Gujarati, Hindi, English', 'Brahmmasi Vashishth Primary School', '1', 'Heen24AB-'),
('t_male.jpg', 25, 'Ishaan Dave', 'Male', '1985-06-15', 'O+', '9876543257', '9876543257', 'ishaan.dave@example.com', 'Vidhyanagar, Bhavnagar', 'Science', '7,8', 52000.00, 'M.Sc, B.Ed', 'Gujarati', 'Gujarati, Hindi, English', 'Brahmmasi Vashishth Primary School', '1', 'Isha25O+'),
('t_female.jpg', 26, 'Jinal Vyas', 'Female', '1986-02-25', 'A+', '9876543258', '9876543258', 'jinal.vyas@example.com', 'Tarsamiya, Bhavnagar', 'Computer', '7,8', 51000.00, 'B.C.A, M.C.A', 'Gujarati', 'Gujarati, Hindi, English', 'Brahmmasi Vashishth Primary School', '1', 'Jina26A+'),
('t_male.jpg', 27, 'Ketan Thakkar', 'Male', '1984-11-05', 'B+', '9876543259', '9876543259', 'ketan.thakkar@example.com', 'Shishumangal, Bhavnagar', 'Mathematics', '7,8', 53000.00, 'M.Sc, B.Ed', 'Gujarati', 'Gujarati, Hindi, English', 'Brahmmasi Vashishth Primary School', '1', 'Keta27B+'),
('t_female.jpg', 28, 'Lavanya Shukla', 'Female', '1987-08-18', 'AB+', '9876543260', '9876543260', 'lavanya.shukla@example.com', 'Krishna Nagar, Bhavnagar', 'Work & Art', '7,8', 49000.00, 'B.A, B.Ed', 'Gujarati', 'Gujarati, Hindi, English', 'Brahmmasi Vashishth Primary School', '1', 'Lava28AB+'),
('t_male.jpg', 29, 'Mihir Pandya', 'Male', '1982-04-20', 'O-', '9876543261', '9876543261', 'mihir.pandya@example.com', 'Subhashnagar, Bhavnagar', 'Physical Education & Health', '7,8', 49500.00, 'B.A.Ed', 'Gujarati', 'Gujarati, Hindi, English', 'Brahmmasi Vashishth Primary School', '1', 'Mihi29O-'),
('t_male.jpg', 30, 'Aryan Jariwala', 'Male', '1986-04-20', 'A-', '9876543262', '9876543262', 'aryan@example.com', 'Kaliyabid, Bhavnagar', 'Sanskrit', '7,8', 43000.00, 'B.A.Ed', 'Sanskrit', 'Sanskrit, Gujarati, Hindi', 'Brahmmasi Vashishth Primary School', '1', 'Arya30A-');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_leave_application`
--

CREATE TABLE `teacher_leave_application` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `teacher_email` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `reason` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_leave_application`
--

INSERT INTO `teacher_leave_application` (`id`, `name`, `teacher_email`, `start_date`, `end_date`, `reason`, `submitted_at`, `status`) VALUES
(3, 'Rajesh Patel', 'rajesh.patel@example.com', '2025-03-27', '2025-03-29', 'zcx', '2025-03-21 18:27:44', 'accepted'),
(4, 'Mehul Desai', 'mehul.desai@example.com', '2025-03-25', '2025-03-28', 'kp', '2025-03-21 18:52:25', 'rejected'),
(5, 'Mehul Desai', 'mehul.desai@example.com', '2025-03-25', '2025-03-28', 'kp', '2025-03-21 18:54:36', 'rejected'),
(6, 'Mehul Desai', 'mehul.desai@example.com', '2025-03-25', '2025-03-28', 'kp', '2025-03-21 18:56:51', 'accepted'),
(7, 'Rajesh Patel', 'rajesh.patel@example.com', '2025-03-23', '2025-03-28', '[[', '2025-03-21 19:02:09', 'accepted'),
(8, 'Rajesh Patel', 'rajesh.patel@example.com', '2025-03-23', '2025-03-28', '[[', '2025-03-21 19:09:21', 'rejected'),
(9, 'Rajesh Patel', 'rajesh.patel@example.com', '2025-03-23', '2025-03-28', '[[', '2025-03-21 19:12:19', 'accepted'),
(10, 'Mehul Desai', 'mehul.desai@example.com', '2025-03-26', '2025-03-29', 'xzcc ', '2025-03-21 19:34:50', 'accepted'),
(11, 'Bhavna Shah', 'bhavna.shah@example.com', '2025-03-25', '2025-03-29', 's', '2025-03-21 20:36:44', 'accepted'),
(12, 'Bhavna Shah', 'bhavna.shah@example.com', '2025-03-25', '2025-03-29', 's', '2025-03-21 20:48:30', 'accepted'),
(13, 'Mehul Desai', 'mehul.desai@example.com', '2025-03-28', '2025-03-29', 'a', '2025-03-21 20:49:31', 'rejected'),
(14, 'Mehul Desai', 'mehul.desai@example.com', '2025-03-28', '2025-03-29', 'a', '2025-03-21 20:51:58', 'rejected'),
(15, 'Mehul Desai', 'mehul.desai@example.com', '2025-03-28', '2025-03-29', 'a', '2025-03-21 21:04:11', 'Accepted'),
(16, 'Mehul Desai', 'mehul.desai@example.com', '2025-03-28', '2025-03-29', 'a', '2025-03-21 21:14:59', 'Rejected'),
(17, 'personal leave', 'mehul.desai@example.com', '2025-03-26', '2025-03-28', 'i want leave for my Dubai trip.', '2025-03-25 12:18:43', 'Accepted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_bmc`
--
ALTER TABLE `admin_bmc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_address` (`email_address`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_marks`
--
ALTER TABLE `student_marks`
  ADD PRIMARY KEY (`marks_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_address` (`email_address`);

--
-- Indexes for table `teacher_leave_application`
--
ALTER TABLE `teacher_leave_application`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_email` (`teacher_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_bmc`
--
ALTER TABLE `admin_bmc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `principal_1`
--
ALTER TABLE `principal_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_1`
--
ALTER TABLE `student_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `student_marks`
--
ALTER TABLE `student_marks`
  MODIFY `marks_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `subject_1`
--
ALTER TABLE `subject_1`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `teacher_1`
--
ALTER TABLE `teacher_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `teacher_leave_application`
--
ALTER TABLE `teacher_leave_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `teacher_leave_application`
--
ALTER TABLE `teacher_leave_application`
  ADD CONSTRAINT `teacher_leave_application_ibfk_1` FOREIGN KEY (`teacher_email`) REFERENCES `teacher_1` (`email_address`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
