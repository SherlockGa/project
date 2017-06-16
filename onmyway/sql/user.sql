-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-06-10 18:03:07
-- 服务器版本： 10.1.19-MariaDB
-- PHP Version: 5.6.28

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
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `user_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`user_name`, `password`, `image`) VALUES
('admin', '123456', 'http://b2-q.mafengwo.net/s7/M00/AC/0C/wKgB6lO97fSAcqlLAAE58yETSPo24.jpeg?imageMogr2%2Fthumbnail%2F%21200x200r%2Fgravity%2FCenter%2Fcrop%2F%21200x200%2Fquality%2F90'),
('aici', '4342', 'http://a4-q.mafengwo.net/s5/M00/1E/8E/wKgB3FGPG4aAastsAATkpqUIxq4209.png?imageMogr2%2Fthumbnail%2F%21120x120r%2Fgravity%2FCenter%2Fcrop%2F%21120x120%2Fquality%2F90'),
('bigmum', '543421', 'http://c3-q.mafengwo.net/s2/M00/3F/6B/wKgBpU6ZrrLG-2B8AAAXhBhw4Mw66.jpeg?imageMogr2%2Fthumbnail%2F%21120x120r%2Fgravity%2FCenter%2Fcrop%2F%21120x120%2Fquality%2F90'),
('chili', '123456', 'http://a4-q.mafengwo.net/s10/M00/E8/CD/wKgBZ1iZk2SAGbKsAAME0TWzCHE45.jpeg?imageMogr2%2Fthumbnail%2F%2148x48r%2Fgravity%2FCenter%2Fcrop%2F%2148x48%2Fquality%2F90'),
('dfasdfas', '123', 'http://b3-q.mafengwo.net/s9/M00/10/BB/wKgBs1Zr2AyAT51kAAnscI2f1B419.jpeg?imageMogr2%2Fthumbnail%2F%21120x120r%2Fgravity%2FCenter%2Fcrop%2F%21120x120%2Fquality%2F90'),
('gagaga', 'root1234', 'image/21.jpg'),
('grdfg', '1234', 'http://a4-q.mafengwo.net/s10/M00/BD/BA/wKgBZ1k6YpaAIviwAAa1lhFrs3E53.jpeg?imageMogr2%2Fthumbnail%2F%21120x120r%2Fgravity%2FCenter%2Fcrop%2F%21120x120%2Fquality%2F90'),
('kevein', '32414', 'http://c1-q.mafengwo.net/s9/M00/0D/F5/wKgBs1hPb8WAEruUAAGXKCGfy4U06.jpeg?imageMogr2%2Fthumbnail%2F%2148x48r%2Fgravity%2FCenter%2Fcrop%2F%2148x48%2Fquality%2F90'),
('lili', '1453242354', 'http://n1-q.mafengwo.net/s7/M00/CA/F3/wKgB6lUFIIiAH_avAACZmRQfLX064.jpeg?imageMogr2%2Fthumbnail%2F%21120x120r%2Fgravity%2FCenter%2Fcrop%2F%21120x120%2Fquality%2F90'),
('lisa', '', ''),
('loser', '352315432', 'http://n1-q.mafengwo.net/s7/M00/CA/F3/wKgB6lUFIIiAH_avAACZmRQfLX064.jpeg?imageMogr2%2Fthumbnail%2F%21120x120r%2Fgravity%2FCenter%2Fcrop%2F%21120x120%2Fquality%2F90'),
('lufei', '1234566', 'http://a2-q.mafengwo.net/s10/M00/C2/C5/wKgBZ1id2s-AV5zCAANMxs0mFBA15.jpeg?imageMogr2%2Fthumbnail%2F%21120x120r%2Fgravity%2FCenter%2Fcrop%2F%21120x120%2Fquality%2F90'),
('lusa', '5464574', 'http://a4-q.mafengwo.net/s10/M00/BD/BA/wKgBZ1k6YpaAIviwAAa1lhFrs3E53.jpeg?imageMogr2%2Fthumbnail%2F%21120x120r%2Fgravity%2FCenter%2Fcrop%2F%21120x120%2Fquality%2F90'),
('nobody', 'nobody', 'image/1.jpg'),
('wewrwr', '12342453', 'http://n1-q.mafengwo.net/s7/M00/CA/F3/wKgB6lUFIIiAH_avAACZmRQfLX064.jpeg?imageMogr2%2Fthumbnail%2F%21120x120r%2Fgravity%2FCenter%2Fcrop%2F%21120x120%2Fquality%2F90'),
('widiy', '97867564534', 'http://a4-q.mafengwo.net/s10/M00/BD/BA/wKgBZ1k6YpaAIviwAAa1lhFrs3E53.jpeg?imageMogr2%2Fthumbnail%2F%21120x120r%2Fgravity%2FCenter%2Fcrop%2F%21120x120%2Fquality%2F90');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
