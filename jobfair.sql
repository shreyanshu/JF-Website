-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 08, 2018 at 02:34 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobfair`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `names` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneno` bigint(20) NOT NULL,
  `college` varchar(200) NOT NULL,
  `graduated` varchar(20) NOT NULL,
  `cv_data` blob NOT NULL,
  `cv_name` varchar(255) NOT NULL,
  `cv_mime` varchar(50) NOT NULL,
  `cv_size` bigint(20) NOT NULL,
  `filePath` varchar(300) NOT NULL,
  `created` datetime NOT NULL,
  `registration_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `names`, `email`, `phoneno`, `college`, `graduated`, `cv_data`, `cv_name`, `cv_mime`, `cv_size`, `filePath`, `created`, `registration_number`) VALUES
(26, 'Upendra Regmi', 'uregmi83@gmail.com', 9843419447, 'Morgan College', 'no', '', 'Upendra_Regmi_CV.pdf', 'application/pdf', 22354, 'uploads/Upendra_Regmi_CV.pdf', '2018-01-12 20:15:09', 1001),
(27, 'Bijay Shrestha', 'bstha94@gmail.com', 9841914770, 'Bangalore Technological Institute,Bangalore', 'yes', '', 'BIJAY SHRESTHA.pdf', 'application/pdf', 210805, 'uploads/BIJAY SHRESTHA.pdf', '2018-01-12 21:17:52', 1002),
(28, 'Niraj Basnet', 'badassbasnet@gmail.com', 9860454206, 'Ambition Academy', 'no', '', 'Niraj_basnet_CV.pdf', 'application/pdf', 156366, 'uploads/Niraj_basnet_CV.pdf', '2018-01-16 15:52:31', 1003),
(29, 'Sujan Dahal', 'blackhathack3rr@gmail.com', 9844651771, 'Nobel College', 'no', '', 'Sujan Dahal(CV).pdf', 'application/pdf', 217319, 'uploads/Sujan Dahal(CV).pdf', '2018-01-16 19:24:57', 1004),
(30, 'Rozy Karna', 'rozy.karna331@gmail.com', 9844243342, 'Nepal Engineering College', 'no', '', 'rozee-cv.pdf', 'application/pdf', 153656, 'uploads/rozee-cv.pdf', '2018-01-18 23:21:24', 1005),
(31, 'Durlabh Shahi', 'rakeshshahi517@gmail.com', 9804540399, 'Nobel College', 'yes', '', 'Durlabh_Shahi_CV.pdf', 'application/pdf', 268344, 'uploads/Durlabh_Shahi_CV.pdf', '2018-01-23 12:22:31', 1006),
(32, 'aastha aryal', 'aastha1996aryal@gmail.com', 9843235489, 'Nobel college', 'no', '', 'aastha CV.pdf', 'application/pdf', 7064, 'uploads/aastha CV.pdf', '2018-02-09 15:12:40', 1007),
(33, 'Achyuta Nand Tripathi', 'zantu4a@gmail.com', 9849100657, 'Nepal College of Information Technology', 'yes', '', 'Achyut Nand Tripathi.pdf', 'application/pdf', 378178, 'uploads/Achyut Nand Tripathi.pdf', '2018-02-16 08:20:09', 1008),
(34, 'shreyansh', 'shreyansh.lodha@deerwalk.edu.np', 9813458760, 'DWIT', 'yes', '', 'Shreyansh_JobFair_CV.pdf', 'application/pdf', 106180, 'uploads/Shreyansh_JobFair_CV.pdf', '2018-02-22 13:12:26', 1009),
(35, 'Bijaya Kumar Shrestha', 'shresthabijaya39@gmail.com', 9843855566, 'VTU', 'yes', '', 'cv.pdf', 'application/pdf', 357160, 'uploads/cv.pdf', '2018-02-22 17:33:02', 1010),
(36, 'Bijaya Kumar Shrestha', 'shresthabijaya39@gmail.com', 9779843855566, 'VTU', 'yes', '', 'cv.pdf', 'application/pdf', 357160, 'uploads/cv.pdf', '2018-02-22 17:38:21', 1011),
(37, 'Shishir Karki', 'shishir4913120@gmail.com', 9869718832, 'Kurukshetra University, Kurukshetra', 'no', '', 'Shishir Karki CV.pdf', 'application/pdf', 233926, 'uploads/Shishir Karki CV.pdf', '2018-02-27 10:03:42', 1012),
(38, 'Sakar Shrestha', 'sakar1994@gmail.com', 9849053615, 'NIIT', 'yes', '', 'Sakar Shrestha-Resume  Curriculum Vitae.pdf', 'application/pdf', 463211, 'uploads/Sakar Shrestha-Resume  Curriculum Vitae.pdf', '2018-02-27 10:07:40', 1013),
(39, 'Manish Khatiwoda', 'cool.manis143@gmail.com', 9823564986, 'Sagarmatha college of science and technology', 'no', '', 'Manish cv.pdf', 'application/pdf', 250266, 'uploads/Manish cv.pdf', '2018-02-27 15:14:42', 1014),
(40, 'Biswas Shrestha', 'biswas.shre@gmail.com', 9840070126, 'Nagarjuna College Of IT', 'yes', '', 'cv latest.pdf', 'application/pdf', 181948, 'uploads/cv latest.pdf', '2018-02-27 15:47:09', 1015),
(41, 'Biswas Shrestha', 'biswas.shre@gmail.com', 9840070126, 'Nagarjuna College Of IT', 'yes', '', 'cv latest.pdf', 'application/pdf', 181948, 'uploads/cv latest.pdf', '2018-02-27 15:48:01', 1016),
(42, 'Ashim Chand', 'thakurichand10@gmail.com', 9848789199, 'kantipur engineering college ', 'yes', '', 'ashim_.cv.pdf', 'application/pdf', 136236, 'uploads/ashim_.cv.pdf', '2018-02-27 16:01:35', 1017),
(43, 'Ashim Chand', 'thakurichand10@gmail.com', 9848789199, 'Kantipur engineering college', 'yes', '', 'ashim_.cv.pdf', 'application/pdf', 136236, 'uploads/ashim_.cv.pdf', '2018-02-27 16:02:35', 1018),
(44, 'Ashok kuikel', 'dreamspark71@gmail.com', 9860463251, 'NIST College', 'yes', '', 'cv-ashok.pdf', 'application/pdf', 457392, 'uploads/cv-ashok.pdf', '2018-02-27 17:18:35', 1019),
(45, 'sunil tandukar', 'suniltandukar50@gmail.com', 9843182011, 'National College of Engineering', 'yes', '', 'CV.pdf', 'application/pdf', 136588, 'uploads/CV.pdf', '2018-02-27 18:37:09', 1020),
(46, 'Ashmin Sharma', 'iamashmin@gmail.com', 9808314124, 'National College', 'yes', '', 'CV_Ashmin_Sharma.pdf', 'application/pdf', 164088, 'uploads/CV_Ashmin_Sharma.pdf', '2018-02-27 20:08:29', 1021),
(47, 'Krishna Kumar Shah', 'kks_82@yahoo.com', 9851063825, 'Ace institute of management ', 'yes', '', 'Krishna_CV.pdf', 'application/pdf', 270212, 'uploads/Krishna_CV.pdf', '2018-02-27 21:59:13', 1022),
(48, 'Anish Dhakal', 'anishdhakal2052@gmail.com', 9843490244, 'DWIT', 'no', '', 'Anish Dhakal Resume.pdf', 'application/pdf', 109742, 'uploads/Anish Dhakal Resume.pdf', '2018-02-28 11:16:20', 1023),
(49, 'Bijay Gautam', 'bijayaga@gmail.com', 9846443234, 'Sikkim Manipal University', 'yes', '', 'bijay CV.pdf', 'application/pdf', 476567, 'uploads/bijay CV.pdf', '2018-02-28 13:25:36', 1024),
(50, 'Sandeep Maharjan', 'sandeepmaharjan55@gmail.com', 9843089925, 'Kantipur Engineering College', 'no', '', 'SandeepResume.pdf', 'application/pdf', 71169, 'uploads/SandeepResume.pdf', '2018-02-28 15:05:03', 1025),
(51, 'Puja Shrestha', 'csta.puja@gmail.com', 9823199697, 'Asian College of Higher Studies', 'no', '', 'Puja-Shrestha.pdf', 'application/pdf', 310872, 'uploads/Puja-Shrestha.pdf', '2018-02-28 21:07:22', 1026),
(52, 'Manchana Shrestha', 'sthamanchana@gmail.com', 9840024782, 'Nepal College of Information Technology', 'no', '', 'Resume Manchana.pdf', 'application/pdf', 286211, 'uploads/Resume Manchana.pdf', '2018-02-28 21:30:55', 1027),
(53, 'Pralhad Rijal', 'pralhadrijal999@gmail.com', 9843449163, 'Asian school of management and technology', 'no', '', 'DWIT JOB FAIR  RESUME TEMPLATE.pdf', 'application/pdf', 110031, 'uploads/DWIT JOB FAIR  RESUME TEMPLATE.pdf', '2018-02-28 22:07:26', 1028),
(54, 'Manoj Bhatt', 'mbhatt997@gmail.com', 9843931907, 'Kantipur Engineering College', 'no', '', 'Manoj Bhatt-CV(DWIT-Jobfair).pdf', 'application/pdf', 330992, 'uploads/Manoj Bhatt-CV(DWIT-Jobfair).pdf', '2018-03-01 00:02:46', 1029),
(55, 'Anima Acharya', 'anima.acharya21@gmail.com', 9861292483, 'Kantipur Engineering College', 'no', '', 'ANIMA_ACHARYA_CV_DWIT.pdf', 'application/pdf', 332731, 'uploads/ANIMA_ACHARYA_CV_DWIT.pdf', '2018-03-01 00:32:21', 1030),
(56, 'Ananta Khadka', 'anantakhadka4990@gmail.com', 9843417369, 'The British College', 'yes', '', 'AnantaKhadka_CV.pdf', 'application/pdf', 408223, 'uploads/AnantaKhadka_CV.pdf', '2018-03-01 01:59:11', 1031),
(57, 'Basanta B.K.', 'bbasanta1996@gmail.com', 9843687828, 'Patan College For Professional Studies', 'no', '', 'Basanta_CV.pdf', 'application/pdf', 459835, 'uploads/Basanta_CV.pdf', '2018-03-01 09:22:39', 1032),
(58, 'Pawan Sunuwar', 'pawanman56@gmail.com', 9840060129, 'Asian College of Higher Studies', 'no', '', 'CV_Pawan_Sunuwar_3.pdf', 'application/pdf', 553005, 'uploads/CV_Pawan_Sunuwar_3.pdf', '2018-03-01 19:06:03', 1033),
(59, 'Bikal Nepal', 'bikalnepalsgs4@gmail.com', 9845351551, 'Advanced College of Engineering and Management', 'yes', '', 'Bikal Nepal Resume..pdf', 'application/pdf', 41200, 'uploads/Bikal Nepal Resume..pdf', '2018-03-01 19:22:15', 1034),
(60, 'Shree Sthapit', 'shreesthapit1@gmail.com', 9849748711, 'Shanker Dev Campus', 'yes', '', 'CV.pdf', 'application/pdf', 92074, 'uploads/CV.pdf', '2018-03-02 05:49:52', 1035),
(61, 'Rishi Raj Gautam', 'thunderdfrost@gmail.com', 9741041715, 'Kathmandu University', 'no', '', 'CV_ Rishi Raj Gautam.pdf', 'application/pdf', 475868, 'uploads/CV_ Rishi Raj Gautam.pdf', '2018-03-02 07:42:40', 1036),
(62, 'Suman Shrestha', 'archanzels@gmail.com', 9849935059, 'St. Xavier\'s College', 'no', '', 'Suman.Shrestha.DWIT.pdf', 'application/pdf', 278756, 'uploads/Suman.Shrestha.DWIT.pdf', '2018-03-02 18:45:25', 1037),
(63, 'subin pote', 'potesubin@gmail.com', 9803071819, 'Nepal Banepa Polytechnic Institute', 'no', '', 'cv-internship (1).pdf', 'application/pdf', 192506, 'uploads/cv-internship (1).pdf', '2018-03-03 16:41:44', 1038),
(64, 'Paras Chataut', 'paras.chataut@gmail.com', 9841560231, 'Thapathali Campus', 'yes', '', 'paras-chataut-cv.pdf', 'application/pdf', 65143, 'uploads/paras-chataut-cv.pdf', '2018-03-03 23:59:29', 1039),
(65, 'Paras Chataut', 'paras.chataut@gmail.com', 9841560231, 'Thapathali Campus', 'yes', '', 'paras-chataut-cv.pdf', 'application/pdf', 65143, 'uploads/paras-chataut-cv.pdf', '2018-03-04 00:00:28', 1040),
(66, 'Barsha Dahal', 'dahal.barsha01@gmail.com', 9841335087, 'Deerwalk Institute Of Technology', 'no', '', 'Barsha-Dahal_CV.pdf', 'application/pdf', 143758, 'uploads/Barsha-Dahal_CV.pdf', '2018-03-04 00:23:07', 1041),
(67, 'Dipak Pakhrin', 'dipakpakhrin06@gmail.com', 9812042769, 'Samriddhi College', 'yes', '', 'Dipak Pakhrin CV.pdf', 'application/pdf', 77659, 'uploads/Dipak Pakhrin CV.pdf', '2018-03-04 10:11:10', 1042),
(68, 'Prashan Bajracharya', 'prashanbaj900@gmail.com', 9849713275, 'Kathmandu Engineering College', 'no', '', 'Curriculum Vitae prashan.pdf', 'application/pdf', 43492, 'uploads/Curriculum Vitae prashan.pdf', '2018-03-04 18:57:11', 1043),
(69, 'Prashan Bajracharya', 'prashanbaj900@gmail.com', 9849713275, 'Kathmandu Engineering College', 'no', '', 'Curriculum Vitae prashan.pdf', 'application/pdf', 43492, 'uploads/Curriculum Vitae prashan.pdf', '2018-03-04 19:05:55', 1044),
(70, 'Dipesh Poudel', 'dpshpoudel@hotmail.com', 9803465575, 'DWIT', 'no', '', 'DipeshPoudel_Resume_DWIT_JobFair.pdf', 'application/pdf', 213447, 'uploads/DipeshPoudel_Resume_DWIT_JobFair.pdf', '2018-03-05 08:40:56', 1045),
(71, 'Sawan Maharjan', 'coolsawan21@gmail.com', 9849475103, 'Nepal College Of Information Technology', 'no', '', 'sawan_maharjan.pdf', 'application/pdf', 159827, 'uploads/sawan_maharjan.pdf', '2018-03-05 10:37:57', 1046),
(72, 'pembatshering tamang', 'tamangtshering5@gmail.com', 9860450843, 'Aryan School of Engineering', 'no', '', 'cv.pdf', 'application/pdf', 25189, 'uploads/cv.pdf', '2018-03-05 20:43:42', 1047),
(73, 'Dinesh Poudel', 'ryon_A@hotmail.com', 9779843140904, 'Western Region Campus', 'yes', '', 'CV.pdf', 'application/pdf', 345538, 'uploads/CV.pdf', '2018-03-06 13:03:29', 1048),
(74, 'Avinash Kafle', 'avinashkafle0@gmail.com', 9819388077, 'Asian Collage of Higher Studies(ACHS)', 'no', '', 'resume.pdf', 'application/pdf', 40346, 'uploads/resume.pdf', '2018-03-06 20:51:27', 1049),
(75, 'Shalabh Adhikari', 'galaxyinspire@gmail.com', 9840062248, 'Nepal College of Information Technology', 'no', '', 'Shalabh.pdf', 'application/pdf', 229086, 'uploads/Shalabh.pdf', '2018-03-06 21:23:11', 1050),
(76, 'Krishna Bhandari', 'thecrakerguy@gmail.com', 9848874840, 'Dhangadhi Engineering College (PU)', 'yes', '', 'krishnacv.pdf', 'application/pdf', 365897, 'uploads/krishnacv.pdf', '2018-03-06 21:47:05', 1051),
(77, 'Matina Shrestha', 'shresthamatina21@gmail.com', 9808388929, 'Khwopa Engineering College', 'yes', '', 'new matina cv.pdf', 'application/pdf', 128725, 'uploads/new matina cv.pdf', '2018-03-07 05:45:47', 1052),
(78, 'Sakar Shrestha', 'sakar1994@gmail.com', 9849053615, 'OPJS University', 'yes', '', 'Sakar Shrestha-Resume  Curriculum Vitae.pdf', 'application/pdf', 463211, 'uploads/Sakar Shrestha-Resume  Curriculum Vitae.pdf', '2018-03-07 15:03:17', 1053),
(79, 'Raken Shahi', 'rakenshahi@gmail.com', 9818105344, 'Khwopa Engineering College', 'no', '', 'Myresume-RakenShahi.pdf', 'application/pdf', 347631, 'uploads/Myresume-RakenShahi.pdf', '2018-03-07 19:59:09', 1054),
(80, 'Nikesh Makaju', 'nksmkj7@gmail.com', 9849675804, 'Khwopa Engineering College', 'yes', '', 'new nikesh cv.pdf', 'application/pdf', 1364063, 'uploads/new nikesh cv.pdf', '2018-03-07 20:42:12', 1055),
(81, 'Manish Manandhar', 'coygmanish@gmail.com', 9808643375, 'Khwopa engineering college ', 'no', '', 'Manish-CV.pdf', 'application/pdf', 488758, 'uploads/Manish-CV.pdf', '2018-03-07 20:46:55', 1056),
(82, 'Saru Manandhar', 'sarumdr123@gmail.com', 9843558619, 'Khwopa Engineering College', 'no', '', 'saru resume.pdf', 'application/pdf', 46217, 'uploads/saru resume.pdf', '2018-03-07 20:54:39', 1057),
(83, 'Sarina Byanjankar', 'benzankarsarina@gmail.com', 9818333916, 'Patan College for Professional Studies', 'no', '', 'Curriculum Vitae_SarinaByanjankar.pdf', 'application/pdf', 196421, 'uploads/Curriculum Vitae_SarinaByanjankar.pdf', '2018-03-07 21:03:32', 1058),
(84, 'Shila Shrestha', 'silastha7@gmail.com', 9843633813, 'Patan College for professional studies', 'no', '', 'CV.pdf', 'application/pdf', 77581, 'uploads/CV.pdf', '2018-03-07 21:24:17', 1059),
(85, 'Bikash Saud', 'saudbikash514@gmail.com', 9865619038, 'Amrit Science Campus', '', '', 'Curriculum Vitae1(1).pdf', 'application/pdf', 72361, 'uploads/Curriculum Vitae1(1).pdf', '2018-03-07 22:21:38', 1060),
(86, 'Bikash Saud', 'saudbikash514@gmail.com', 9865619038, 'Amrit Science Campus', 'no', '', 'Curriculum Vitae1(1).pdf', 'application/pdf', 72361, 'uploads/Curriculum Vitae1(1).pdf', '2018-03-07 22:24:01', 1061),
(87, 'Bikash saud', 'saudbikash514@gmail.com', 9865619038, 'Amrit Science Campus', 'no', '', 'Curriculum Vitae1(1).pdf', 'application/pdf', 72361, 'uploads/Curriculum Vitae1(1).pdf', '2018-03-08 11:16:00', 1062),
(88, 'Kiran Kumar Chaudhary', 'kirankchaudhary11@gmail.com', 9843533937, 'Nepal Engineering College', 'yes', '', 'Kiran-Kumar-Chaudhary-Resume.pdf', 'application/pdf', 498766, 'uploads/Kiran-Kumar-Chaudhary-Resume.pdf', '2018-03-08 12:14:16', 1063),
(89, 'Aarya Kshetri', 'aarya_kshetri@outlook.com', 9849467232, 'Apex College', 'no', '', 'resume2018d.pdf', 'application/pdf', 37782, 'uploads/resume2018d.pdf', '2018-03-08 15:01:35', 1064);

-- --------------------------------------------------------

--
-- Table structure for table `register_company`
--

CREATE TABLE `register_company` (
  `id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_number` varchar(15) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `company_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_company`
--

INSERT INTO `register_company` (`id`, `company_name`, `company_number`, `contact_person`, `contact_number`, `contact_email`, `company_address`) VALUES
(1, 'tYJAMRUTFlk', 'pGpVgwPBRjBCbAp', 'jimosa4xf2@hotmail.com', '', 'jimosa4xf2@hotmail.com', 'pD8sJE http://www.LnAJ7K8QSpfMO2wQ8gO.com'),
(2, 'VdPCeqqOzkSPUasaLyn', 'BVvWdNIUHeeg', 'jimosa4xf2@hotmail.com', '', 'jimosa4xf2@hotmail.com', '5YwyvK http://www.LnAJ7K8QSpfMO2wQ8gO.com'),
(3, 'EVFWMlcpQzYS', 'ULuwytEiVQ', 'jimosa4xf2@hotmail.com', '', 'jimosa4xf2@hotmail.com', 'oETAlZ http://www.LnAJ7K8QSpfMO2wQ8gO.com'),
(4, 'SoAni Tech Nepal', '977-1-5532671', 'John Chhetri', '9779841286852', 'john@soanitech.com', '                            Manbhavan, Lalitpur, Nepal'),
(5, 'Hn haun', 'Oag', 'M', '98789787878789', 'ke@gefabeze.org', 'Lomatfiw agvav fohipo afujazu houc ne zisanka si ek zivamgu feel jerawob re vi nehu farid dajapjih. Go kebebuc falege gutuzleh le sa sub hipi mic tiwomgo gokodaza cisatton ridauha lo li tekiviw niirfah. Ho se nusme wogu ca cugewu pu pap rumgein rabda wuzmuz ib vibojbap macofka kep wehbero meh hir. Gefluczuv iztueja topub labu ruhdican pok rov bac ji wage gih tinuj su rasubat uhibal osoosel kihij. Pohim rabhoeg ap homkince ij nu uju ucwuf pil som fif calus of aklomo zadiv ikaduf buaku. Zefjespef suije bofi fek pu emfu ganepi sogow ufure sopeha cot po wut litcimzav lihcobas vivsigof. Aw erewosfe zawfic ezi doagedo itocuger taego mugu lojla fubina wi fag tutasujuw.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_company`
--
ALTER TABLE `register_company`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `register_company`
--
ALTER TABLE `register_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
