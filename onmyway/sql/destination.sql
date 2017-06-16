-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-06-10 18:02:36
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
-- 表的结构 `destination`
--

CREATE TABLE `destination` (
  `id` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `dest_country` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `dest_continent` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `link` varchar(1023) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `keyword` varchar(1023) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `content` mediumtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `image` varchar(1023) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `hit` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `destination`
--

INSERT INTO `destination` (`id`, `name`, `dest_country`, `dest_continent`, `link`, `keyword`, `content`, `image`, `hit`) VALUES
('1', '香港', '中国', '亚洲', 'http://www.mafengwo.cn/travel-scenic-spot/mafengwo/10189.html', '中国以南', '香港，英文名为Hong Kong。它是一个充满诱惑感的城市，是全球最富裕、经济最发达和生活水平最高的地区之一，是“亚洲四小龙”之一，是国际金融商贸中心之一，是世界大都会之一，然而除了这散发着金钱味道的“第...', 'http://a2-q.mafengwo.net/s5/M00/87/12/wKgB3FGMgSCAZo0qAAgGckFTqJA54.jpeg?imageMogr2%2Fthumbnail%2F%211020x540r%2Fgravity%2FCenter%2Fcrop%2F%211020x540%2Fquality%2F100', 23),
('10', '洛杉矶', '美国', '美洲', 'http://www.mafengwo.cn/travel-scenic-spot/mafengwo/10926.html', '', '天使之城洛杉矶(Los Angeles)坐落于美国西海岸加利福尼亚州的南部，是仅次于纽约的美国第二大城市。其三面环山，一面（西部）临海，城市坐落于开阔的盆地之中。洛杉矶除冬季偶有阴雨外，终年阳光明媚，日照充足，日夜温差较大。', 'http://b1-q.mafengwo.net/s8/M00/40/A4/wKgBpVYcw6uASEVPAAQ_w5xqh2k74.jpeg', 1233),
('11', '旧金山', '美国', '美洲', 'http://www.mafengwo.cn/travel-scenic-spot/mafengwo/10742.html', '', '如果说拉斯维加斯像一所热闹的秀场，纽约是一个文化的熔炉，芝加哥仿佛一座庞大的博物馆，那旧金山无疑是画家手中的调色盘，在慵懒与不经意之间成就了美国最多姿多彩的创意之城。橙红色的金门大桥、蔚蓝色的渔人码头、纯白色的泛美金字塔大厦以及四季色彩缤纷的九曲花街，无一不吸引你流连其中，用心灵去感受这个城市的独特气息。', 'http://n3-q.mafengwo.net/s5/M00/83/B9/wKgB3FHANouARlsYAAMMMyfXLvo31.jpeg', 2313),
('12', '纽约', '美国', '美洲', 'http://www.mafengwo.cn/travel-scenic-spot/mafengwo/10579.html', '', '纽约是美国最大城市和第一大港，也是世界第一大城市，全市由五个区组成：曼哈顿(Manhattan)、布鲁克林(Brooklyn)、皇后区(Queens)、布郎克斯(Bronxs)和斯塔滕岛(Staten Island)。美国人经常直呼纽约市为“The City”，因为她拥有许多世界闻名的博物馆和餐厅、激动人心的景点、丰富多彩的娱乐活动以及无与伦比的购物场所。', 'http://c2-q.mafengwo.net/s5/M00/4D/C5/wKgB3FH6oZaAY0hEAAn9MA05uuM33.jpeg', 2431),
('13', '华盛顿', '美国', '美洲', 'http://www.mafengwo.cn/travel-scenic-spot/mafengwo/10745.html', '', '华盛顿•哥伦比亚特区（Washington, District of Columbia）是美国首都华盛顿DC的全称，它是世界最有影响力的城市。走近华盛顿，就是走近星条旗的心脏，这里不但是美国的政治、文化中心，毫无疑问也是美国最重要的旅游城市之一。它拥有美国最丰富的文化旅游资源，大大小小的博物馆、纪念地和标志性建筑每天都要迎接来自世界各地的观光游客。来到这里，只要你肯花时间细细品味，并不亚于读完一本百科全书。', 'http://c1-q.mafengwo.net/s8/M00/67/1D/wKgBpVU_Wn-AYRKXAAeIpBA31kc754.png?imageMogr2%2Fthumbnail%2F%21380x270r%2Fgravity%2FCenter%2Fcrop%2F%21380x270%2Fquality%2F100', 23422),
('14', '西雅图', '美国', '美洲', 'http://www.mafengwo.cn/travel-scenic-spot/mafengwo/10929.html', '', '提及西雅图，许多人会脱口而出一部电影的名字《西雅图不眠夜》！“在西雅图，你可以找到属于你的那个人”，当无数人被电影所感动的时候，这个城市被诠释为幸运和浪漫。然而，在它温情脉脉的背后，微软、波音……一个个重量级的名字又吸引着无数充满斗志的人们。西雅图是清静的，仿佛是蜷缩在美国西北角的一个小镇，从不刻意去追求繁华，可是他的地阔海涵却让人禁不住赞叹。蓝天、碧海中，不可抹去的印第安图腾，空气中飘动的咖啡香，这就是西雅图。\r\n\r\n西雅图是美国西北部太平洋沿岸最大的城市，坐落', 'http://a3-q.mafengwo.net/s7/M00/74/E9/wKgB6lPsiRyAO7DzAAU4Nv4OHRY66.jpeg?imageMogr2%2Fthumbnail%2F%211020x540r%2Fgravity%2FCenter%2Fcrop%2F%211020x540%2Fquality%2F100', 2132),
('15', '伦敦', '英国', '欧洲', 'http://www.mafengwo.cn/travel-scenic-spot/mafengwo/11124.html', '', '两千年前罗马人在这片土地上建立了这座城市，现在伦敦已经成为世界上最重要的政治、经济、文化和艺术中心，而不同的种族、宗教和文化在这里交融，又形成了伦敦独特的多元化。伦敦温文尔雅又个性十足，内敛矜持又前卫张狂。看似矛盾的特质交织杂糅，不经意间成就了伦敦独一无二的气质。300多家博物馆和画廊，400多个音乐现场，让人沉醉在艺术的迷宫里；无数的教堂让人们沉浸在宗教庄严神秘之中；各国美食、各色酒吧花样百出，让人在一次次饕餮中历练；', 'http://c1-q.mafengwo.net/s7/M00/D3/71/wKgB6lSXxdCAMJ-zAAHef4nimgA06.jpeg?imageMogr2%2Fthumbnail%2F%211020x540r%2Fgravity%2FCenter%2Fcrop%2F%211020x540%2Fquality%2F100', 2423),
('16', '巴黎', '法国', '欧洲', 'http://www.mafengwo.cn/travel-scenic-spot/mafengwo/10573.html', '', '在巴黎不胜枚举的世界级景点中成为必打卡的经典，埃菲尔铁塔、巴黎圣母院和凯旋门是象征着巴黎甚至法国的标志，埃菲尔铁塔更是争议与经典并存的不二代表性建筑物。\r\n\r\n博物馆', 'http://c4-q.mafengwo.net/s9/M00/41/FA/wKgBs1gXCMKATkoCAAk9d-uNMUQ00.jpeg', 2323),
('17', '慕尼黑', '德国', '欧洲', 'http://www.mafengwo.cn/travel-scenic-spot/mafengwo/11081.html', '', '慕尼黑（德语：München，英语：Munich）位于德国南部巴伐利亚州的上巴伐利亚高平原，距离阿尔卑斯山北麓只有约45km，是巴伐利亚州的首府。', 'http://n4-q.mafengwo.net/s5/M00/08/85/wKgB3FHfcgyAW7l7AAIkx-DSz2474.jpeg?imageMogr2%2Fthumbnail%2F%211020x540r%2Fgravity%2FCenter%2Fcrop%2F%211020x540%2Fquality%2F100', 244),
('2', '澳门', '中国', '亚洲', 'http://www.mafengwo.cn/travel-scenic-spot/mafengwo/10206.html', '中国以南', '澳门是世界四大赌城之一，是世界上人口最密集的地方之一。澳门是中国所辖的一个特别行政区，400年中西文化的磨合，成就了今日的澳门。澳门自秦朝起已经为中国领土，从明朝开始被葡萄牙人逐渐侵占。直至1999年12...', 'http://c3-q.mafengwo.net/s8/M00/F1/1E/wKgBpVWiLnaAC1-cAA21442UzLk18.jpeg?imageMogr2%2Fthumbnail%2F%211020x540r%2Fgravity%2FCenter%2Fcrop%2F%211020x540%2Fquality%2F100', 111),
('3', '上海', '中国', '亚洲', 'http://www.mafengwo.cn/travel-scenic-spot/mafengwo/10099.html', '沿海', '上海是中国大陆第一大城市；四个中央直辖市之一；是中国大陆的经济、金 融、贸易和航运中心。上海位于中国大陆海岸线中部的长江口。上海是一座极具现代化而又不失中国传统特色的都市。有超过 2000万人居住和生...', 'http://c1-q.mafengwo.net/s5/M00/2B/FB/wKgB3FYu57iAeKCZAADn6gzPV2o53.jpeg?imageMogr2%2Fthumbnail%2F%21300x180r%2Fgravity%2FCenter%2Fcrop%2F%21300x180%2Fquality%2F90', 42),
('4', '广州', '中国', '亚洲', 'http://www.mafengwo.cn/travel-scenic-spot/mafengwo/10088.html', '中国以南', '广州地处华南，广东省的东南部，隔海与香港、澳门特别行政区相望，地理位置优越，是“海上丝绸之路”的起点之一，被称为中国的“南大门”。广州是于上海、北京之后的中国大陆经济规模第三大的城市，与北京、上...', 'http://b3-q.mafengwo.net/s9/M00/21/B3/wKgBs1hjg4yALerTABdyvG9TnO408.jpeg?imageMogr2%2Fthumbnail%2F%21320x170r%2Fgravity%2FCenter%2Fcrop%2F%21320x170%2Fquality%2F100', 546),
('5', '深圳', '中国', '亚洲', 'http://www.mafengwo.cn/travel-scenic-spot/mafengwo/10198.html', '', '深圳，又称为“鹏城”，位于珠江三角洲东岸，与香港一水之隔。是中国最早的经济特区和计划单列 市，创造过“深圳速度”，中国政府将其视为改革开放的“试验田”及展示改革开放成果的窗口。深圳是中国的移民城市...', 'http://a3-q.mafengwo.net/s5/M00/CE/63/wKgB3FECAVCANTk_AAWNVF8sjYw25.jpeg?imageMogr2%2Fthumbnail%2F%211020x540r%2Fgravity%2FCenter%2Fcrop%2F%211020x540%2Fquality%2F100', 55),
('6', '珠海', '中国', '亚洲', 'http://www.mafengwo.cn/travel-scenic-spot/mafengwo/10269.html', '', '珠海市是珠江三角洲南端的一个重要城市，位于广东省珠江口的西南部。珠海的海岸线长 604公里，有大小岛屿147个，故有“百岛之市”的美誉。珠海从昔日一个经济落后的边陲小县，一跃成为新型花园城市。于景在城中...', 'http://n4-q.mafengwo.net/s7/M00/24/34/wKgB6lP0VpCADPDPAAPICO-I-Iw57.jpeg?imageMogr2%2Fthumbnail%2F%211020x540r%2Fgravity%2FCenter%2Fcrop%2F%211020x540%2Fquality%2F100', 87),
('7', '佛山', '中国', '亚洲', 'http://www.mafengwo.cn/travel-scenic-spot/mafengwo/13394.html', '', '佛山是一座历史悠久 的文化名城，是广东省下辖的一个地级市。佛山是闻名的“武术之乡”，这里是黄飞鸿、李小龙的故乡，是中国南派武术的主要发源地。佛山也是粤剧的发源地，有着独特的岭南文化气息，是为岭南文.', 'http://c2-q.mafengwo.net/s7/M00/9E/38/wKgB6lRZ5s6ARJzuAAjCwdIPcK865.jpeg?imageMogr2%2Fthumbnail%2F%211020x540r%2Fgravity%2FCenter%2Fcrop%2F%211020x540%2Fquality%2F100', 4),
('8', '亚洲', '', '', 'http://www.mafengwo.cn/travel-scenic-spot/mafengwo/52314.html', '', '亚洲（Asia）是亚细亚洲的简称，是世界七大洲中面积最大的洲。东临太平洋，南 接印度洋，北濒北冰洋。西面通常以乌拉尔山脉、乌拉尔河、里海、高加索山脉和黑海与欧洲分界；西南面以红海、苏伊士运河与非洲为界...', 'http://a3-q.mafengwo.net/s6/M00/AA/3C/wKgB4lJ1JwGAbysFAAzzip8nY0c77.jpeg?imageMogr2%2Fthumbnail%2F%211020x540r%2Fgravity%2FCenter%2Fcrop%2F%211020x540%2Fquality%2F100', 76),
('9', '美国', '', '北美洲', 'http://www.mafengwo.cn/travel-scenic-spot/mafengwo/10062.html', '', '美国，全称美利坚合众国，是一个由五十个州和一个联邦直辖特区组成的宪政联邦共和制国家。1776年7月4日，大陆会议在费城正式通过《独立宣言》，宣告美国诞生。美国的东西和南北跨度都非常大，因而全国的气候差..', 'http://c2-q.mafengwo.net/s6/M00/66/AE/wKgB4lNYlNGAAVk9AAEXV8mB1dQ40.jpeg?imageMogr2%2Fthumbnail%2F%21300x180r%2Fgravity%2FCenter%2Fcrop%2F%21300x180%2Fquality%2F90', 46);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
