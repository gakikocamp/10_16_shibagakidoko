-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 07, 2019 at 02:46 PM
-- Server version: 5.7.24-log
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gs_f02_db16`
--

-- --------------------------------------------------------

--
-- Table structure for table `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `zip` text COLLATE utf8_unicode_ci,
  `address` text COLLATE utf8_unicode_ci,
  `tel` text COLLATE utf8_unicode_ci,
  `comment` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `name`, `zip`, `address`, `tel`, `comment`, `indate`) VALUES
(1, 'ボイボイキャンプ場', '8780201', '大分県竹田市久住町大字久住4050-11', '09079272570', '何も遮るものがない、大分・くじゅう高原約１万坪もの広大な草原が広がる解放感抜群のキャンプ場！', '2019-02-02 18:15:43');

-- --------------------------------------------------------

--
-- Table structure for table `php02_table`
--

CREATE TABLE `php02_table` (
  `id` int(12) NOT NULL,
  `task` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `comment` text COLLATE utf8_unicode_ci,
  `image` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `php02_table`
--

INSERT INTO `php02_table` (`id`, `task`, `deadline`, `comment`, `image`, `indate`) VALUES
(12, 'はやくねる', '2019-02-14', '今日は誕生日', NULL, '2019-02-09 16:08:19'),
(13, 'やること', '2019-02-28', 'いろいろやりたいよ', NULL, '2019-02-16 17:05:08'),
(14, 'aaa', '2019-03-13', 'aaa', 'upload/20190302071558d41d8cd98f00b204e9800998ecf8427e.png', '2019-03-02 16:15:58'),
(15, '１１１', '2019-03-15', 'aaa', 'upload/20190302071622d41d8cd98f00b204e9800998ecf8427e.png', '2019-03-02 16:16:22'),
(16, 'コード', '2019-03-20', 'ggtt', NULL, '2019-03-02 17:39:08'),
(17, 'あああ', '2019-03-20', 'ｑｑｑｑｑ', NULL, '2019-03-02 18:07:35'),
(18, 'あああ', '2019-03-15', '', NULL, '2019-03-02 18:12:04'),
(19, 'ｔｔｔｔ', '2019-03-30', 'ｔｔｔｔ', NULL, '2019-03-02 18:12:38'),
(20, '最新', '2019-03-31', '最新', NULL, '2019-03-02 18:18:10'),
(21, 'やること', '2019-03-31', 'あああ', NULL, '2019-03-02 18:19:14'),
(22, 'あああ', '2019-03-06', 'あああ', NULL, '2019-03-02 18:22:24'),
(23, 'あああ', '2019-03-31', 'ああああ', NULL, '2019-03-02 18:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `php_ajax_table`
--

CREATE TABLE `php_ajax_table` (
  `id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `php_ajax_table`
--

INSERT INTO `php_ajax_table` (`id`, `name`, `comment`, `indate`) VALUES
(1, '111', 'aaaaa', '2019-03-06 00:00:00'),
(2, '3444', 'aaaaa', '2019-03-20 00:00:00'),
(3, '555', 'eeeee', '2019-03-04 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rsv_table`
--

CREATE TABLE `rsv_table` (
  `id` int(12) NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `inday` date NOT NULL,
  `numDays` int(1) NOT NULL,
  `numPeople` int(1) NOT NULL,
  `rental` int(1) NOT NULL,
  `campground` int(1) NOT NULL,
  `car` int(1) NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) DEFAULT '0',
  `life_flg` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(2, '柴垣がきこ', 'gakigaki', 'gakkk', 0, 0),
(3, '橋本きのこ', 'kinokonoko', 'kinoko', 0, 0),
(4, '堀之内かに', 'kanikani', 'kanikani', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `php02_table`
--
ALTER TABLE `php02_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `php_ajax_table`
--
ALTER TABLE `php_ajax_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rsv_table`
--
ALTER TABLE `rsv_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `php02_table`
--
ALTER TABLE `php02_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `php_ajax_table`
--
ALTER TABLE `php_ajax_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rsv_table`
--
ALTER TABLE `rsv_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
