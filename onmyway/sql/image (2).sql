-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-06-13 03:44:54
-- 服务器版本： 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onmyway`
--

-- --------------------------------------------------------

--
-- 表的结构 `image`
--

CREATE TABLE `image` (
  `id` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `link` varchar(1023) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `keyword` varchar(1023) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `url` varchar(1023) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `image`
--

INSERT INTO `image` (`id`, `name`, `city`, `link`, `keyword`, `url`) VALUES
('26', '入住移动的城堡，维京游轮东欧行', '东欧', 'http://www.mafengwo.cn/i/7022840.html', '', 'http://c4-q.mafengwo.net/s10/M00/45/C6/wKgBZ1kSWpGAfWTVABBYUveoxeM05.jpeg?imageMogr2%2Fthumbnail%2F%21440x300r%2Fgravity%2FCenter%2Fcrop%2F%21440x300%2Fquality%2F90'),
('28', '太白山南北穿越，植物人寻花秦岭', '秦岭', 'http://www.mafengwo.cn/i/7042508.html', '', 'http://b4-q.mafengwo.net/s10/M00/53/16/wKgBZ1kmrjqALrFWAATLLfdHeRA69.jpeg?imageMogr2%2Fthumbnail%2F%21440x300r%2Fgravity%2FCenter%2Fcrop%2F%21440x300%2Fquality%2F90'),
('29', '我不爱你了，但我还是爱吃——我所吃过的澳门', '澳门', 'http://www.mafengwo.cn/i/5531735.html', '', 'http://c3-q.mafengwo.net/s9/M00/3F/0E/wKgBs1d6BR2AcxEPAAfICPAkDOM12.jpeg?imageMogr2%2Fthumbnail%2F%21300x180r%2Fgravity%2FCenter%2Fcrop%2F%21300x180%2Fquality%2F90'),
('30', '【孤独周末暴走咖】5.澳门.愿你在尘世获得幸福，面朝大海春暖花开', '澳门', 'http://www.mafengwo.cn/i/6747314.html', '', 'http://n3-q.mafengwo.net/s10/M00/2E/3E/wKgBZ1iTNDqAAsVEACF4VJd9mX039.jpeg?imageMogr2%2Fthumbnail%2F%21300x180r%2Fgravity%2FCenter%2Fcrop%2F%21300x180%2Fquality%2F90'),
('33', '从名古屋出发寻找战国的踪迹', '日本', 'http://www.mafengwo.cn/i/6995726.html', '', 'http://a2-q.mafengwo.net/s10/M00/8D/EB/wKgBZ1j_DH-AMmnnABJCu8Nsp_Q805.png?imageMogr2%2Fthumbnail%2F%21440x300r%2Fgravity%2FCenter%2Fcrop%2F%21440x300%2Fquality%2F90'),
('4', '4月，清明雨上杭州', '杭州', 'http://www.mafengwo.cn/i/7081412.html', '', 'http://b2-q.mafengwo.net/s10/M00/E0/66/wKgBZ1k0LBmAMpDVAAXUy4lr_m488.jpeg?imageMogr2%2Fthumbnail%2F%21440x300r%2Fgravity%2FCenter%2Fcrop%2F%21440x300%2Fquality%2F90'),
('5', '广西与我和妈妈有个约定，诗和远方的田野就在路上 — 黄姚·阳朔·桂林', '广西', 'http://www.mafengwo.cn/i/7014917.html', '', 'http://n4-q.mafengwo.net/s10/M00/07/B8/wKgBZ1kUCryADESdAAc352jyJ8k33.jpeg?imageMogr2%2Fthumbnail%2F%21440x300r%2Fgravity%2FCenter%2Fcrop%2F%21440x300%2Fquality%2F90'),
('7', '等等我，再吹一吹太平洋的风', '台湾', 'http://www.mafengwo.cn/i/6983801.html', '', 'http://c2-q.mafengwo.net/s10/M00/6B/2A/wKgBZ1kSpO-AF-m9AAcIwa-9rtk82.jpeg?imageMogr2%2Fthumbnail%2F%21440x300r%2Fgravity%2FCenter%2Fcrop%2F%21440x300%2Fquality%2F90');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
