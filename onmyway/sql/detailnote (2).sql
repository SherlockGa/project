-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-06-13 03:43:51
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
-- 表的结构 `detailnote`
--

CREATE TABLE `detailnote` (
  `id` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `user` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `content` mediumtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `month` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `days` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `money` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `image` varchar(1023) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `time` datetime(6) DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `link` varchar(1023) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `keyword` varchar(1023) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `hit` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `detailnote`
--

INSERT INTO `detailnote` (`id`, `user`, `name`, `content`, `month`, `days`, `money`, `image`, `time`, `city`, `link`, `keyword`, `hit`) VALUES
('0', 'lufei', '第一次去美国选择美东还是美西？', '相信这是很多人在决定去美国前都必须考虑的问题，美国太大，东西海岸跑的话时间紧，也太累，所以选择去美东还是美西？就成了旅行必须考虑的问题！因为美国联邦制，加上夏威夷和阿拉斯加，一共有6个时区。 妄图用最短的时间横跨东西海岸的人，体验就是一个字——累，两个字——疲惫。所以，你得选！\r\n\r\n美国东部和西部有哪些不一样的气质？\r\n\r\n作为一个在美国留学两年，感受过美东的暴风雪和美西的骄阳，留恋过东海岸的历史感和西海岸硅谷的繁荣，最后扭不过自由女神的魅力毅然决然奔赴纽约的孩纸，我来回答你这个问题。\r\n先上一张图，广义上讲，美国可以被分为东海岸地区、西海岸地区、五大湖区、中部地区和南部地区，当然不同的地域分类会有不一样的地方，但是简单来说可以拿这张图来看。\r\n不过单就题主考虑的第一次去美国旅游的角度来说并不用考虑这么多，可以简化理解为：\r\n美国东部有：纽约，费城，波士顿，芝加哥，底特律等\r\n可以看到自由女神像、曼哈顿夜景、白宫、国会大厦、哈佛大学、麻省理工，还可以到稍微远一点到美国加拿大边境看尼亚加拉大瀑布\r\n美国西部有：洛杉矶，旧金山，西雅图，奥兰多，达拉斯，拉斯维加斯等\r\n可以自驾传说中的1号公路，看到Google、Apple总部所在地的硅谷，斯坦福大学，好莱坞，和环球影城\r\n地方明确了之后，我们来谈谈气质这个问题。\r\n东部历史文艺感VS西部海滩度假潮\r\n\r\n聊完两大行业和行业精英们对中西部气质的影响，再看看东西海岸的城市有哪些不一样的气场。先说东部，个人觉得，只拎出来纽约、波士顿这两大城市，就已经历史感爆棚、文艺感...掉渣了！\r\n以波士顿倾茶事件闻名的波士顿，一条自由之路似乎可以贯穿美国200年的历史，不提它坐拥的哈佛大学和斯坦福大学为这座城增添了怎样的书香气和文化感，另一边，号称The City的纽约，拥有让每个美国人都自豪的自由女神像，曾不止一次得亲眼看到美国人对着自由女神大喊the United States of America！\r\n不过在这里不得不泼一盆冷水，作为第一次来美国旅游的游客来说，如果你想来看看自由女神和哈佛大学，想走一走自由之路逛一逛大都会博物馆，那自然是没什么问题。要是真想感同身受美国人民为了民主自由的奋斗史那还是别抱太大希望了。。。因为。。。看不懂。。。换位思考你可以想象一下拉一个美国哥们去西安的古城墙下走一圈聊一聊商鞅君的变法和合纵连横的故事那是一个什么feel。\r\n这样说来西海岸就亲民的多啦，因为那就是一！片！海！啊，历史看不懂，大海总欣赏的来得，租辆小跑感受下来自太平洋的海风简直是中国留学生最爱干的事情了，于是一号公路神马的，17英里神马的，蒙特雷卡梅尔圣芭芭拉神马的就这样在国内一炮而红成了来美标配了，姑且不说拉斯维加斯、大峡谷、黄石公园的美西大环线了。\r\n其实加州本身就是美国人民的度假圣地，上了一辈子班退休来疗养地，请了年假携全家来度假的，都指着加州的阳光和这片海了，于是西海岸的城市天生比东海岸就少了点历史的厚重感，多了点的休闲度假阳光海滩的味道。', 'm7', '15', '30000', 'image/77.jpg', '2017-06-12 21:41:34.702570', '美国', 'mynote.php?y=0', '美国', 5000),
('1', 'lufei', '迪士尼的烟火', '其实迪士尼并没有什么特别可能是最容易让你找到孩子的感觉吧。比如小的时候我看唐纳德的漫画，总觉得他是个有抠门又事多的老鸭子。可是当我在这里看到唐纳德的小像时总觉得无比亲切，他皱着眉头，一贯铁公鸡的表情。我才发现那些伴随我们成长的东西早就潜移默化的在我们记忆里成为财富。\r\n对于昂坪360这个地方其实没来之前我真的不太熟，只是在港剧里偶尔提到过这个名字，貌似是个徒步的好地方，这次果然看到徒步爱好者沿着山间小路爬得不亦乐乎。香港地不大但是森林覆盖面积可不低，看着这么多郁郁葱葱的树木，即使不用p图也很鲜艳。这的空气湿润、干净。如果有机会我再来昂坪市集的时候也想一路走上来。\r\n游玩过后的一天半主要是购物。来到这个香港购物圣地怎么能不买东西呢。港式小吃都木有怎么吃到，只吃了翠华餐厅不会失望喔。', 'm7', '5', '6000', 'image/78.jpg', '2017-06-12 21:38:31.956342', '香港', 'mynote.php?y=1', '香港', 3750),
('2', 'lufei', '真正的高玩！美国纽约地标建筑的高空玩法全攻略！', '即使游玩过欧美十几个国家，每每再次走进一座城市后，还是会想办法从新的角度看一看。比如美国纽约曼哈顿，有世界上最集中的摩天大楼，这篇“高玩”攻略，就是专门为喜爱城市全景、夜景、俯览图的看官们准备，希望能换个角度，从高空欣赏曼哈顿最华丽的一面。\r\n对曼哈顿的熟悉是因为狂追了电影及美剧《欲望都市》，四位女主角事业成功，美丽时尚。抛开她们非常态的爱情价值观，从一个个镜头中，这座城市繁华与魅力也被呈现的淋漓尽致，点燃了很多人对大都市的幻想和欲望。\r\n无需排队，优先登船，省下更多时间参观自由女神像。  结束自由岛的参观后，继续乘船前往比邻自由女神像的埃利斯岛，参观的埃利斯岛移民博物馆，听导游讲述更多沧桑往事。\r\n帝国大厦也是纽约的经典地标之一，是保持世界最高建筑地位最久的摩天大楼，共102层，含天线在内高度443.18米。这里是众多电影电视剧的取景地，《金刚》、《西雅图夜未眠》、《Gossip Girl》等等……\r\n针对中国游客，还上线了有中文讲解的App帝国大厦官方指南，下载后可选择普通话服务，二楼有免费的无限WIFI链接，根据所到位置播报景点及景色讲解。\r\n全年365天开放，每天上午8：00至凌晨2：00。想要登上帝国大厦观景台有3处需排队：安检处（针对所有参观者），售票处和电梯处，持票可直接到达入口旋杆处。   \r\n中心的至高点在奇异电器大楼（GE Building）上的峭石之巅（Top of the Rock）观景台，被《Time Out New York》杂志评选为“全纽约第一观景点”。有两层，都有专业望远镜供游客欣赏远景', 'm7', '12', '50000', 'image/79.jpg', '2017-06-12 21:39:30.274950', '纽约', 'mynote.php?y=2', '纽约', 4507);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailnote`
--
ALTER TABLE `detailnote`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
