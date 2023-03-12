-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2023 at 01:46 PM
-- Server version: 8.0.32
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizdbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` int NOT NULL,
  `answer` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `ans_id` int NOT NULL,
  `id` int NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answer`, `ans_id`, `id`, `is_correct`) VALUES
(1, 'हेडलाइट बालेर', 1, 1, 0),
(2, 'हर्न बजाएर र हेडलाइट बालेर', 1, 1, 0),
(3, 'हर्न बजाएर', 1, 1, 0),
(4, 'स्लोडउनको इसारा दिएर', 1, 1, 1),
(5, 'संस्थानको', 2, 2, 0),
(6, 'ट्राफिकको', 2, 2, 0),
(7, 'निजी कारको', 2, 2, 0),
(8, 'पर्यटनको', 2, 2, 1),
(9, '२ ', 3, 3, 0),
(10, '३', 3, 3, 0),
(11, '६', 3, 3, 1),
(12, '७', 3, 3, 0),
(13, 'ओभरटेक गर्नी\r\n', 4, 4, 0),
(14, 'बिरामी बोकेको आवस्थामा\r\n', 4, 4, 0),
(15, 'हतार भएको बेलामा\r\n', 4, 4, 0),
(16, 'माथिको सबै\r\n', 4, 4, 1),
(17, '८\r\n', 5, 5, 1),
(18, '१२\r\n', 5, 5, 0),
(19, '१६\r\n', 5, 5, 0),
(20, '१४\r\n', 5, 5, 0),
(21, 'मोबिलले', 6, 6, 1),
(22, 'खाने तेलले', 6, 6, 0),
(23, 'पेट्रोल', 6, 6, 0),
(24, 'माथिका सबै', 6, 6, 0),
(25, '१७ वर्ष', 7, 0, 0),
(26, '१४ वर्ष', 7, 7, 0),
(27, '१६ वर्ष', 7, 7, 1),
(28, '१८ वर्ष', 7, 7, 0),
(29, 'हेड लाईट', 8, 8, 0),
(30, 'इमर्जेन्सी लाईट', 8, 8, 0),
(31, 'साइड लाईट', 8, 8, 0),
(32, 'ब्रेक लाईट', 8, 8, 1),
(33, 'रोटर', 9, 9, 1),
(34, 'कट आउट', 9, 9, 0),
(35, 'एयर कुलर', 9, 9, 0),
(36, 'कुनै पनि हैन', 9, 9, 0),
(37, '२०४९', 10, 10, 0),
(38, '२०५४', 10, 10, 0),
(39, '२०७०', 10, 10, 0),
(40, '२०५६', 10, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int NOT NULL,
  `question` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `ans_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `ans_id`) VALUES
(1, 'Q.1 ओभरटेक गर्दा आगाडिको गाडीलाई कसरी संखेत दिने ?', 1),
(2, 'Q.2 पहेंलो नम्बर प्लेटले कुन सबारीलाई जनाउँछ?', 2),
(3, 'Q.3 नेपालमा सवारी साधनका नम्बर प्लेट कति किसिमका हुन्छन?', 3),
(4, 'Q.4 इमर्जेन्सी लाइट कुन समयमा बाल्नुपर्छ?', 4),
(5, 'Q.5 जीपमा चालक सहित बढीमा कति जनासम्म यत्रि राखने सिट संख्या हुन्छ?', 5),
(6, 'Q.6 इन्जिनको पार्ट पुर्जा चिल्लो बनाउने काम के ले गर्छ?', 6),
(7, 'Q.7 लाइसेनस लिन पाउने सबैभन्दा कम उमेर कति हो ?', 7),
(8, ' Q.8 गाडी चलिरहेको बेलामा रोक्न परेमा कुन सिग्नल दिएर रोक्ने??', 8),
(9, 'Q.9 ब्याट्रीलाई ओभरचार्जा हुनबाट के ले बचाउँछ?', 9),
(10, 'Q.10 सवारी प्रदूषण मापदण्ड कैले बाट लागू भयको हो?<br>\r\n    ', 10),
(11, '?dfgtsadfghfsdffd', 11);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int NOT NULL,
  `first_name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` text COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `aid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
