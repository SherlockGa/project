-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-06-10 18:02:53
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
-- 表的结构 `near`
--

CREATE TABLE `near` (
  `id` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `link` varchar(1023) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `keyword` varchar(1023) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `image` mediumtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `near`
--

INSERT INTO `near` (`id`, `name`, `city`, `link`, `keyword`, `image`) VALUES
('1', '维多利亚港', '香港', 'http://www.mafengwo.cn/poi/484.html', '', 'http://a4-q.mafengwo.net/s5/M00/0C/F7/wKgB3FE9mbyAAU2vAAfBkKP7hr034.jpeg?imageMogr2%2Fthumbnail%2F%21690x370r%2Fgravity%2FCenter%2Fcrop%2F%21690x370%2Fquality%2F100'),
('10', '圣莫妮卡海滩', '洛杉矶', 'http://www.mafengwo.cn/poi/30766.html', '', 'http://c4-q.mafengwo.net/s5/M00/76/B6/wKgB3FFvblmAcFNNAA8KZrWVCJU36.jpeg?imageMogr2%2Fthumbnail%2F%21690x370r%2Fgravity%2FCenter%2Fcrop%2F%21690x370%2Fquality%2F100'),
('11', '洛杉矶迪士尼乐园', '洛杉矶', 'http://www.mafengwo.cn/poi/30632.html', '', 'http://a2-q.mafengwo.net/s9/M00/B9/AB/wKgBs1alkTKAK7MCAAaEF3Ymno867.jpeg?imageMogr2%2Fthumbnail%2F%21690x370r%2Fgravity%2FCenter%2Fcrop%2F%21690x370%2Fquality%2F100'),
('12', '好莱坞星光大道', '洛杉矶', 'http://www.mafengwo.cn/poi/30693.html', '', 'http://n3-q.mafengwo.net/s6/M00/65/0C/wKgB4lNfX_6AFDmVAASGivNqDzc89.jpeg?imageMogr2%2Fthumbnail%2F%21690x370r%2Fgravity%2FCenter%2Fcrop%2F%21690x370%2Fquality%2F100'),
('13', '格里菲斯天文台', '洛杉矶', 'http://www.mafengwo.cn/poi/30733.html', '', 'http://a1-q.mafengwo.net/s7/M00/83/6D/wKgB6lPkuwCAVu_rAGi_lCtwrvU03.jpeg?imageMogr2%2Fthumbnail%2F%21690x370r%2Fgravity%2FCenter%2Fcrop%2F%21690x370%2Fquality%2F100'),
('14', '比弗利山庄', '洛杉矶', 'http://www.mafengwo.cn/poi/30649.html', '', 'http://n2-q.mafengwo.net/s7/M00/1C/F9/wKgB6lR2jx6AeEP5ACpiyaQzsPY95.jpeg?imageMogr2%2Fthumbnail%2F%21690x370r%2Fgravity%2FCenter%2Fcrop%2F%21690x370%2Fquality%2F100'),
('15', '好莱坞标志', '洛杉矶', 'http://www.mafengwo.cn/poi/31342.html', '', 'http://c3-q.mafengwo.net/s8/M00/75/0B/wKgBpVXJx16Afs_RAAQe_QWm5kc89.jpeg?imageMogr2%2Fthumbnail%2F%21690x370r%2Fgravity%2FCenter%2Fcrop%2F%21690x370%2Fquality%2F100'),
('16', '盖蒂中心', '洛杉矶', 'http://www.mafengwo.cn/poi/30727.html', '', 'http://b3-q.mafengwo.net/s6/M00/FC/BD/wKgB4lKFg7GALXOkAAPTdzob3Sk63.jpeg?imageMogr2%2Fthumbnail%2F%21690x370r%2Fgravity%2FCenter%2Fcrop%2F%21690x370%2Fquality%2F100'),
('2', '香港太平山顶', '香港', 'http://www.mafengwo.cn/poi/518.html', '', 'http://c2-q.mafengwo.net/s8/M00/34/A5/wKgBpVVVvxOAGOruAAjcXx2WXv039.jpeg?imageMogr2%2Fthumbnail%2F%21690x370r%2Fgravity%2FCenter%2Fcrop%2F%21690x370%2Fquality%2F100'),
('3', '太平山山顶缆车', '香港', 'http://www.mafengwo.cn/poi/6042418.html', '', 'http://a2-q.mafengwo.net/s5/M00/BF/62/wKgB3FHTp0OADqZ2AAIIZn1DqJY93.jpeg?imageMogr2%2Fthumbnail%2F%21480x320r%2Fgravity%2FCenter%2Fcrop%2F%21480x320%2Fquality%2F90'),
('4', '香港海洋公园', '香港', 'http://www.mafengwo.cn/poi/488.html', '', 'http://c1-q.mafengwo.net/s6/M00/05/8D/wKgB4lKsDxSAZW-vABCSLoetlFM12.jpeg?imageMogr2%2Fthumbnail%2F%21690x370r%2Fgravity%2FCenter%2Fcrop%2F%21690x370%2Fquality%2F100'),
('5', '迪士尼专列地铁', '香港', 'http://www.mafengwo.cn/poi/6093541.html', '', 'http://b2-q.mafengwo.net/s3/M00/EF/5E/wKgBt09-dmby7fz2AAVmketsr-856.jpeg?imageMogr2%2Fthumbnail%2F%21480x320r%2Fgravity%2FCenter%2Fcrop%2F%21480x320%2Fquality%2F90'),
('6', '星光大道', '香港', 'http://www.mafengwo.cn/poi/483.html', '', 'http://a4-q.mafengwo.net/s5/M00/36/BB/wKgB21AcaE-xyWHlAAGK6vijyxo34.jpeg?imageMogr2%2Fthumbnail%2F%21690x370r%2Fgravity%2FCenter%2Fcrop%2F%21690x370%2Fquality%2F100'),
('7', '香港迪士尼乐园', '香港', 'http://www.mafengwo.cn/poi/520.html', '', 'http://c1-q.mafengwo.net/s8/M00/34/91/wKgBpVVVvu-AOs6NAA93_jik_oE41.jpeg?imageMogr2%2Fthumbnail%2F%21690x370r%2Fgravity%2FCenter%2Fcrop%2F%21690x370%2Fquality%2F100'),
('8', '香港国际机场 ', '香港', 'http://www.mafengwo.cn/poi/5504806.html', '', 'http://c4-q.mafengwo.net/s5/M00/B7/7C/wKgB21BWApHF7TLkAAL-0xYn51k94.jpeg?imageMogr2%2Fthumbnail%2F%21480x320r%2Fgravity%2FCenter%2Fcrop%2F%21480x320%2Fquality%2F90'),
('9', '好莱坞环球影城', '洛杉矶', 'http://www.mafengwo.cn/poi/6673956.html', '', 'http://n3-q.mafengwo.net/s2/M00/2E/F3/wKgBpU4d_jOCUsNqAAPMhTRN2cI38.jpeg?imageMogr2%2Fthumbnail%2F%21690x370r%2Fgravity%2FCenter%2Fcrop%2F%21690x370%2Fquality%2F100');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `near`
--
ALTER TABLE `near`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
