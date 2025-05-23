-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2025 at 06:44 AM
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
-- Database: `lvsj_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `eoi`
--

CREATE TABLE `eoi` (
  `EOInumber` int(11) NOT NULL,
  `job_reference_number` varchar(7) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `street_address` varchar(40) NOT NULL,
  `suburb_town` varchar(40) NOT NULL,
  `state` varchar(3) NOT NULL,
  `postcode` varchar(4) NOT NULL,
  `email_address` varchar(40) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `skill1` tinyint(1) NOT NULL,
  `skill2` tinyint(1) NOT NULL,
  `skill3` tinyint(1) NOT NULL,
  `other_skills` varchar(400) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eoi`
--

INSERT INTO `eoi` (`EOInumber`, `job_reference_number`, `first_name`, `last_name`, `street_address`, `suburb_town`, `state`, `postcode`, `email_address`, `phone_number`, `skill1`, `skill2`, `skill3`, `other_skills`, `status`) VALUES
(1, 'Softwar', 'Jordan', 'Thomas', '123 Baller St', 'Melbourne', 'VIC', '3004', 'johndoe@gmail.com', '04 123 45678', 0, 0, 0, 'I have no other skills or hobbies or personality traits', 0),
(2, 'Softwar', 'Jordan', 'Thomas', '123 Baller St', 'Melbourne', 'VIC', '3004', 'johndoe@gmail.com', '04 123 45678', 5, 0, 0, 'I have no other skills or hobbies or personality traits', 0),
(3, 'Softwar', 'Jordan', 'Thomas', '123 Baller St', 'Melbourne', 'VIC', '3004', 'johndoe@gmail.com', '04 123 45678', 5, 0, 0, 'I have no other skills or hobbies or personality traits', 0),
(4, 'Softwar', 'Jordan', 'Thomas', '123 Baller St', 'Melbourne', 'VIC', '3004', 'johndoe@gmail.com', '04 123 45678', 5, 0, 0, 'I have no other skills or hobbies or personality traits', 0),
(5, 'Softwar', 'Jordan', 'Thomas', '123 Baller St', 'Melbourne', 'VIC', '3004', 'johndoe@gmail.com', '04 123 45678', 5, 0, 0, 'I have no other skills or hobbies or personality traits', 0),
(6, 'Softwar', 'Jordan', 'Thomas', '123 Baller St', 'Melbourne', 'VIC', '3004', 'johndoe@gmail.com', '04 123 45678', 5, 0, 0, 'I have no other skills or hobbies or personality traits', 0),
(7, 'Softwar', 'Jordan', 'Thomas', '123 Baller St', 'Melbourne', 'VIC', '3004', 'johndoe@gmail.com', '04 123 45678', 5, 0, 0, 'I have no other skills or hobbies or personality traits', 0),
(8, 'Softwar', 'Jordan', 'Thomas', '123 Baller St', 'Melbourne', 'VIC', '3004', 'johndoe@gmail.com', '04 123 45678', 5, 0, 0, 'I have no other skills or hobbies or personality traits', 0),
(9, 'Softwar', 'Jordan', 'Thomas', '123 Baller St', 'Melbourne', 'VIC', '3004', 'johndoe@gmail.com', '04 123 45678', 5, 0, 0, 'I have no other skills or hobbies or personality traits', 0),
(10, 'Softwar', 'Jordan', 'Thomas', '123 Street', 'Melbourne', 'VIC', '3004', 'johndoe@gmail.com', '0412345678', 5, 0, 0, 'No other skills', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `position_reference` varchar(20) DEFAULT NULL,
  `position_title` varchar(100) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `position_overview` text DEFAULT NULL,
  `salary_range` varchar(100) DEFAULT NULL,
  `reports_to` varchar(100) DEFAULT NULL,
  `key_responsibilities` text DEFAULT NULL,
  `essential_qualifications` text DEFAULT NULL,
  `preferable_qualifications` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `position_reference`, `position_title`, `image_path`, `position_overview`, `salary_range`, `reports_to`, `key_responsibilities`, `essential_qualifications`, `preferable_qualifications`) VALUES
(1, 'G01-123', 'Software Developer', 'images/SE.jpg', 'Develop, design, and maintain software applications to meet client requirements.', '$80,000 - $100,000 per annum', 'Lead Software Engineer', '<ul>\r\n        <li>Write efficient and scalable code.</li>\r\n        <li>Collaborate with teams to design software features.</li>\r\n        <li>Maintain and optimize existing applications.</li>\r\n        <li>Participate in code reviews and testing.</li>\r\n    </ul>', '<ul>\r\n        <li>5+ years of experience in software development.</li>\r\n        <li>Proficiency in Java, Python, or C#.</li>\r\n        <li>Strong problem-solving skills.</li>\r\n    </ul>', '<ul>\r\n        <li>Experience with cloud platforms (AWS, Azure).</li>\r\n        <li>Knowledge of Agile methodologies.</li>\r\n    </ul>'),
(2, 'G02-123', 'Network Administrator', 'images/NE.jpg', 'Oversee and maintain the integrity of network systems ensuring reliability and security.', '$70,000 - $90,000 per annum', 'IT Manager', '<ul>\r\n        <li>Monitor network performance and troubleshoot issues.</li>\r\n        <li>Implement network security protocols and policies.</li>\r\n        <li>Ensure system backups and disaster recovery plans are in place.</li>\r\n    </ul>', '<ul>\r\n        <li>3+ years of experience in network administration.</li>\r\n        <li>Proficiency with networking protocols (TCP/IP, DNS, DHCP).</li>\r\n    </ul>', '<ul>\r\n        <li>Certifications such as CCNA, CompTIA Network+.</li>\r\n    </ul>'),
(3, 'G03-123', 'Data Analyst', 'images/DA.jpg', 'Analyze and interpret complex data to support decision-making across departments.', '$60,000 - $80,000 per annum', 'Data Science Manager', '<ul>\r\n        <li>Prepare data for analysis and create reports.</li>\r\n        <li>Identify trends and insights from large data sets.</li>\r\n        <li>Collaborate with teams to define data requirements and goals.</li>\r\n        <li>Present findings to stakeholders with actionable recommendations.</li>\r\n    </ul>', '<ul>\r\n        <li>3+ years of experience in data analysis.</li>\r\n        <li>Proficiency with data analysis tools (Excel, SQL, R, Python).</li>\r\n        <li>Strong analytical and problem-solving skills.</li>\r\n    </ul>', '<ul>\r\n        <li>Experience with data visualization tools (Power BI, Tableau).</li>\r\n        <li>Knowledge of machine learning techniques.</li>\r\n    </ul>'),
(4, 'G04-123', 'Cybersecurity Specialist', 'images/CS.jpg', 'Protect systems, networks, and programs from digital attacks and security breaches.', '$85,000 - $110,000 per annum', 'Chief Information Security Officer (CISO)', '<ul>\r\n        <li>Implement and monitor security measures for the protection of computer systems.</li>\r\n        <li>Investigate and respond to security incidents and breaches.</li>\r\n        <li>Develop and maintain security documentation and policies.</li>\r\n        <li>Conduct vulnerability assessments and penetration testing.</li>\r\n    </ul>', '<ul>\r\n        <li>5+ years of experience in cybersecurity.</li>\r\n        <li>Proficiency in security technologies (firewalls, IDS/IPS, encryption).</li>\r\n        <li>Strong knowledge of cybersecurity threats and countermeasures.</li>\r\n    </ul>', '<ul>\r\n        <li>Certifications such as CISSP, CISM, or CEH.</li>\r\n        <li>Experience with compliance frameworks (GDPR, NIST, ISO).</li>\r\n    </ul>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eoi`
--
ALTER TABLE `eoi`
  ADD PRIMARY KEY (`EOInumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eoi`
--
ALTER TABLE `eoi`
  MODIFY `EOInumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
