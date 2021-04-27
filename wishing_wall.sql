-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 27, 2021 at 01:29 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wishing_wall`
--

-- --------------------------------------------------------

--
-- Table structure for table `wishes`
--

CREATE TABLE `wishes` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '编号',
  `name` varchar(20) NOT NULL COMMENT '署名',
  `content` varchar(200) NOT NULL COMMENT '许愿内容',
  `color` enum('a1','a2','a3','a4','a5') NOT NULL DEFAULT 'a1' COMMENT '许愿条背景颜色',
  `timestamp` int(10) UNSIGNED NOT NULL COMMENT '时间戳'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wishes`
--

INSERT INTO `wishes` (`id`, `name`, `content`, `color`, `timestamp`) VALUES
(1, 'Ruby', '今年的愿望是想要一把Taylor的电箱旅行琴', 'a4', 1617598353),
(2, 'Hebe', '希望世界和平', 'a3', 1617598353),
(3, 'Helen', '假期快乐', 'a1', 1617715151),
(4, 'Victor', '希望天气快点变暖和呀', 'a4', 1617715267),
(5, 'Aimee', '希望一切变好', 'a1', 1617715408),
(6, 'Ailsa', '疫情快过去吧', 'a3', 1617715441),
(7, 'Nick', '快点找到好工作', 'a1', 1617715471),
(8, 'Ada', '有新的好朋友', 'a2', 1617715643),
(9, 'Sharly', '希望能变得更优秀', 'a1', 1617715755),
(12, 'Jus', '每天都想吃一碗泡面', 'a1', 1617717751),
(13, 'Justin', '每天都要吃2碗泡面', 'a1', 1617717832),
(14, 'Biber', '每天都想吃三碗泡面', 'a1', 1617717947),
(15, 'Snow', '不想再吵架了，开心点不好吗', 'a2', 1617718050);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wishes`
--
ALTER TABLE `wishes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wishes`
--
ALTER TABLE `wishes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '编号', AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
