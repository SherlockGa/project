-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-06-13 03:44:38
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
-- 表的结构 `note`
--

CREATE TABLE `note` (
  `id` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `user` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `link` varchar(1023) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `keyword` varchar(1023) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `content` mediumtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `image` varchar(1023) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `hit` int(255) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `note`
--

INSERT INTO `note` (`id`, `user`, `name`, `city`, `link`, `keyword`, `content`, `image`, `hit`, `time`) VALUES
('1', 'admin', '我所爱的香港，这些小众目的地，我只会带最好的朋友去\r\n', '香港', 'http://www.mafengwo.cn/i/6595118.html', '', '楼主研究生在香港中文大学学习，一年时间里，其实去玩的地方不多，大部分时间是跟着老师上课去逛的，不过，这几年累积去过香港数次。想说见证了香港从繁华到衰落的一个过程，也见证了深圳房价暴涨与香港并驾齐驱。', 'https://n3-q.mafengwo.net/s10/M00/CC/18/wKgBZ1iHEjaAIQs-AAwnFb2mqVY27.jpeg?imageView2%2F2%2Fw%2F2048%2Fq%2F90&quot;); opacity: 1;\">\r\n        <img src=\"https://n3-q.mafengwo.net/s10/M00/CC/18/wKgBZ1iHEjaAIQs-AAwnFb2mqVY27.jpeg?imageView2%2F2%2Fw%2F2048%2Fq%2F90\" style=\"display: none', 200, '2017-06-09 10:59:58.076088'),
('10', 'chili', 'CHIC！初夏港岛纳凉风，两人八景十二食', '香港', 'http://www.mafengwo.cn/i/7019399.html', '', 'Joyce和Joyii都是港剧迷，都是吃货，都爱拍照，都酷爱旅行…两个惺惺相惜的人说了很久，捣鼓了攻略，翻阅了美食指南，终于成就了这次还算不错，各自两生欢喜的香港之行！', 'https://n2-q.mafengwo.net/s10/M00/DF/F5/wKgBZ1kdpvCALHuzAAmKJpj9Y4k34.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90', 500, '2017-06-09 10:59:58.076088'),
('11', 'kevein', '下一站，天后', '香港', 'http://www.mafengwo.cn/i/7071701.html', '', '站在大丸前，細心看看我的路，再下个车站到天后当然最好。。。', 'https://a2-q.mafengwo.net/s10/M00/AC/51/wKgBZ1kvamOAPi0nAAY60yWF8vQ78.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90', 2000, '2017-06-09 10:59:58.076088'),
('12', 'bigmum', '长洲岛：文艺小资的香港离岛', '香港', 'http://www.mafengwo.cn/i/7082735.html', '', '拿着包子，我忽然明白，原来有些东西，没有，就是没有。不行，就是不行，没有鱼丸，没有粗面，没去马尔代夫没奖牌没有张保仔的宝藏，而张保仔，也没有吃过那个包子。原来愚蠢，并不那么好笑。\r\n                                                                                                                              ——麦兜《麦兜响当当》\r\n', 'https://a4-q.mafengwo.net/s10/M00/7D/BA/wKgBZ1k1eReAQcOYAAlj1rdeags85.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90', 500, '2017-06-09 10:59:58.076088'),
('13', 'lufei', '香港老了，澳门依旧（下）', '香港', 'http://www.mafengwo.cn/i/7080212.html', '', '从澳门到香港，本来考虑坐直升机，想着要是一千港币左右就体验下。结果到了外港码头，发现要4300港币或3900人民币。看了看干瘪的荷包，我决定还是乘坐153澳门币的喷射飞艇。飞艇大概半小时一班，高峰期十五分钟一班。检票的时候会贴上座位号，对号入座。飞艇在海面上开得很稳也很快，澳门到香港直线距离60公里，一个小时就到了。', 'https://c3-q.mafengwo.net/s10/M00/BA/41/wKgBZ1kz-N6ALM8oAAClzKWGS0c27.jpeg?imageView2%2F2%2Fw%2F600%2Fq%2F90', 4000, '2017-06-09 10:59:58.076088'),
('14', 'aisi', '体验不一样的香港味~经典吃行超详细全攻略', '香港', 'http://www.mafengwo.cn/i/6968420.html', '', '介绍一个APP “OpenRice”，可以认为是香港的大众点评，大家可以在上面多发觉一些好吃的餐厅，里面有很多餐厅评价很有参考价值。\r\nTip 1: 如果要走访那些有名的老店、小店', 'https://b4-q.mafengwo.net/s10/M00/A1/9E/wKgBZ1kOmBWAQ6dxABAx09Fdhkc25.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90', 4000, '2017-06-09 10:59:58.076088'),
('15', 'dfasdfas', '【不看博物馆,不逛比弗利,在加州阳光下只要最简单的快乐】假老师与张先生洛杉矶及圣地亚哥9天自助', '洛杉矶', 'http://www.mafengwo.cn/i/6258758.html', '', '今年是本命年，上半年诸多不顺，好在都顺利度过。如此一来今年的旅行计划就被一直搁浅。可是想出去看世界的心一直在蠢蠢欲动啊！本来计划着完成张先生的夙愿----去日本玩一遭，怎奈日本签证实在麻烦，搞得我兴致索然。一天晚上，我们又在讨论要怎么准备日本签证，张先生突然说：不行就去美国！我如梦初醒，对啊，放着现成的美国签证干嘛不用？！于是马上定了时间买好机票。不好的事情统统给我滚开吧！', 'https://n3-q.mafengwo.net/s9/M00/61/8B/wKgBs1gOsYiAYInsAAiDjG-I1fA50.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90', 24535, '0000-00-00 00:00:00.000000'),
('16', 'grdfg', '这次重回纽约，作一名游客', '纽约', 'http://www.mafengwo.cn/i/6373895.html', '', '在纽约生活了一年半，离开前我对它说，我还会回来的。这次终于作为游客重返纽约。\r\n纽约太丰富了，丰富到几乎可以满足任何喜好的人都能在这里找到适合自己的游玩的方式。\r\n', 'https://b2-q.mafengwo.net/s9/M00/82/CA/wKgBs1hD0SWAGgKiAArL39SLDNk48.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90', 24342, '2017-05-02 00:13:27.280000'),
('17', 'haha', '洛杉矶LA，拉斯维加斯Vegas花样酷炫玩法，不一样的五天四夜', '洛杉矶', 'http://www.mafengwo.cn/i/6717638.html', '', '这次去旅游主要是为了去Vegas参加一个服装面料展，顺便去周边玩一玩。所以每个地方呆的时间不长，住宿交通也是一切从简。大家如果有时间美西应该留个两周好好玩一玩。\r\n', 'https://n1-q.mafengwo.net/s10/M00/B3/EB/wKgBZ1i3MrqASkMoAAWUlWJ7mCg28.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90', 32435, '2017-06-01 06:14:00.000000'),
('18', 'haha', 'Lost In Angeles', '洛杉矶', 'http://www.mafengwo.cn/i/6443033.html', '', '洛杉矶是加州第一大城市，常被称作是City of Angeles，所以We Lost In Angeles Again。', 'https://n3-q.mafengwo.net/s9/M00/13/62/wKgBs1gBGF6AAro_ABNESe0PVGg77.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90', 34553, '2017-05-17 04:14:49.896000'),
('19', 'haha', '洛杉矶环球影城全攻略——不悔梦归处 只恨太匆匆', '洛杉矶', 'http://www.mafengwo.cn/i/6988865.html', '', '此篇为独立的洛杉矶环球影城攻略，稍后有时间会慢慢更新洛杉矶迪斯尼乐园以及圣地亚哥海洋世界和洛杉矶两日游等内容。', 'https://b3-q.mafengwo.net/s10/M00/6F/FC/wKgBZ1kJhi2AEiF1AAS3Uq-3-TE30.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90', 3423, '2017-05-31 07:21:50.607000'),
('2', 'lisa', '真的去了“米老鼠家”——我们仨第9站之童话香港，粑粑麻麻因', '香港', 'http://www.mafengwo.cn/i/7041455.html', '', '米斯嘎，木斯嘎，米老鼠！ M I C K E Y M O U S E~ 就是我 M I C K E Y M O U S E~ 米奇妙妙屋 快进 快进来 非常好玩 …… 妈...', 'https://b2-q.mafengwo.net/s10/M00/17/DA/wKgBZ1kCD8SAA9aOAAVwGlFUMXs67.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90', 1123, '2017-06-09 10:59:58.076088'),
('20', 'haha', '洛 杉 矶 是 彩 色 的', '洛杉矶', 'http://www.mafengwo.cn/i/7086290.html', '', '很多人问我为什么喜欢洛杉矶？\r\n就像当时来北京为什么不去上海\r\n南方阴雨绵绵的天气呆怕了\r\n喜欢北方干燥爽朗\r\n好像理由就是这么简单\r\n加州的阳光应该就是理由\r\n这里有阳光、音乐、舞蹈\r\n还有喜欢的男孩儿', 'https://b3-q.mafengwo.net/s10/M00/E0/7A/wKgBZ1k0LEiAJ9lSAAl76lBskk001.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90', 4523, '2017-06-05 07:21:00.000000'),
('21', 'haha', '穿着婚纱和你去洛杉矶告别科比，在赌城办一场只有两个人的婚礼。', '洛杉矶', 'http://www.mafengwo.cn/i/7088063.html', '', '2017年夏初夜，张太照例要在睡前过目一遍朋友圈里发生了哪些国家大事。忽然发现那一日和我们同时在拉斯维加斯民政局登记并且在同一个chapel结婚的的华裔山东姑娘晒出了她宝宝的婴儿照。\r\n张生瞥了一眼：“你那篇游记到底写好了没有啊？写了一年多了吧？”\r\n“还不是怪你手欠把我手机里的照片都删了！”', 'https://n2-q.mafengwo.net/s10/M00/CB/C7/wKgBZ1kn6UmAXlUlAAf0kAm-hxw64.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90', 2423, '2017-06-04 23:12:00.000000'),
('3', 'widiy', '香港冰室，这里藏着最地道的“港味”', '香港', 'http://www.mafengwo.cn/gonglve/ziyouxing/1268.html', '', '说到香港的冰室，大家可能都会有些陌生，可是如果说它是香港茶餐厅的前身，大家可能就会瞬间秒懂。很久之前，冰室因为只卖冷饮和小食而得名，但随着时代的变迁和发展，后来逐渐加入了常餐和粉面之类的，由此变成了今天我们所常见的茶餐厅。一直以来，香港冰室都作为香港电影电视剧的背景出现，有着厚重的历史年代感和人文情怀，令人心驰神往。那香港最经典的冰室有哪些？让我一一为你推荐！', 'http://a2-q.mafengwo.net/s9/M00/8B/AD/wKgBs1hOEgeAFfOPAA5rIT2z8Ig866.gif?imageView2%2F2%2Fw%2F1360%2Fq%2F90%7Cwatermark%2F1%2Fimage%2FaHR0cDovL24xLXEubWFmZW5nd28ubmV0L3MxMC9NMDAvMDgvQjkvd0tnQloxaDExQ0tBRjRUeEFBQXYzcVNMWmRvOTA4LnBuZz9pbWFnZU1vZ3IyJTJGdGh1bWJuYWlsJTJGMTg1eCUyRnF1YWxpdHklMkY5MA%3D%3D%2Fgravity%2FSouthEast%2Fdx%2F10%2Fdy%2F15%2Fdissolve%2F40', 989, '2017-06-09 10:59:58.076088'),
('4', 'lusa', '香港经典3日游路线怎么安排？', '香港', 'http://www.mafengwo.cn/gonglve/ziyouxing/1295.html', '', '三天两夜去哪里？当然首选香港啦！有人把这里誉为“购物天堂”，有人认为这里是旅游胜地，有人把这里当做是金融中心，还有人痴迷于这里的文化。独具魅力的香港，处处都透着别样的气息。最地道的香港风味在哪里？就在下面这篇攻略里！', 'http://b4-q.mafengwo.net/s5/M00/5B/DB/wKgB3FDK_NGAfNnGAAEawMHScNE68.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90%7Cwatermark%2F1%2Fimage%2FaHR0cDovL24xLXEubWFmZW5nd28ubmV0L3MxMC9NMDAvMDgvQjkvd0tnQloxaDExQ0tBRjRUeEFBQXYzcVNMWmRvOTA4LnBuZz9pbWFnZU1vZ3IyJTJGdGh1bWJuYWlsJTJGMTU4eCUyRnF1YWxpdHklMkY5MA%3D%3D%2Fgravity%2FSouthEast%2Fdx%2F10%2Fdy%2F15%2Fdissolve%2F40', 888, '2017-06-09 10:59:58.076088'),
('5', 'wewrwr', '澳门旅游塔有什么好玩的？', '澳门', 'http://www.mafengwo.cn/gonglve/ziyouxing/1043.html', '', '一提到澳门，你可能会首先想到金碧辉煌的赌场，但如果你对澳门的认知只停留在“赌城”和老虎机上，那你就太OUT了！澳门还有一个大名鼎鼎的旅游塔呢！这里不仅可以看55公里无死角的全澳风景之外，还能玩各种超刺激超酷炫的极限运动。如果你酷爱极限，又或者你的人生清单必做清单里有蹦极这一项，那么就快来这里吧！', 'http://b3-q.mafengwo.net/s9/M00/C5/B1/wKgBs1hFGViAd2iCAAPSYOJ-m2M73.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90%7Cwatermark%2F1%2Fimage%2FaHR0cDovL24xLXEubWFmZW5nd28ubmV0L3MxMC9NMDAvMDgvQjkvd0tnQloxaDExQ0tBRjRUeEFBQXYzcVNMWmRvOTA4LnBuZz9pbWFnZU1vZ3IyJTJGdGh1bWJuYWlsJTJGMjQ2eCUyRnF1YWxpdHklMkY5MA%3D%3D%2Fgravity%2FSouthEast%2Fdx%2F10%2Fdy%2F15%2Fdissolve%2F40', 0, '2017-06-10 12:00:53.681158'),
('6', 'wewrwr', '澳门官也街有哪些必打卡的美食？', '澳门', 'http://www.mafengwo.cn/gonglve/ziyouxing/1223.html', '', '来澳门除了赌赌赌、买买买，还有什么重要的？那当然是吃吃吃啦！去哪里吃？当然是官也街！这条全长仅115米的小巷子里汇聚了中西美食，水蟹粥、猪扒包、木糠布丁、蛋卷、姜糖...应有尽有，馋得你口水直流。那官也街上都有哪些吃货必到的美食店？让我一一带你尝一尝！', 'http://c2-q.mafengwo.net/s8/M00/B2/E0/wKgBpVXNU2-AHoROAA1TMoX5G_Q71.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90%7Cwatermark%2F1%2Fimage%2FaHR0cDovL24xLXEubWFmZW5nd28ubmV0L3MxMC9NMDAvMDgvQjkvd0tnQloxaDExQ0tBRjRUeEFBQXYzcVNMWmRvOTA4LnBuZz9pbWFnZU1vZ3IyJTJGdGh1bWJuYWlsJTJGMzYweCUyRnF1YWxpdHklMkY5MA%3D%3D%2Fgravity%2FSouthEast%2Fdx%2F10%2Fdy%2F15%2Fdissolve%2F40', 0, '2017-06-10 12:00:53.686663'),
('7', 'wewrwr', '澳门文艺小众两日游，带你不走寻常路！', '澳门', 'http://www.mafengwo.cn/gonglve/ziyouxing/1178.html', '', '一说起澳门，你会想起什么？是金碧辉煌的大赌场，还是人山人海的大三巴？其实，在这些众所周知的景点之外，澳门也像威尼斯一样，很文艺，很清新，很美。不信？那你跟着我来咯~', 'http://n4-q.mafengwo.net/s9/M00/43/DF/wKgBs1hJK_qAXVDsAAH0YeqgTm009.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90%7Cwatermark%2F1%2Fimage%2FaHR0cDovL24xLXEubWFmZW5nd28ubmV0L3MxMC9NMDAvMDgvQjkvd0tnQloxaDExQ0tBRjRUeEFBQXYzcVNMWmRvOTA4LnBuZz9pbWFnZU1vZ3IyJTJGdGh1bWJuYWlsJTJGMTU4eCUyRnF1YWxpdHklMkY5MA%3D%3D%2Fgravity%2FSouthEast%2Fdx%2F10%2Fdy%2F15%2Fdissolve%2F40', 0, '2017-06-10 12:00:53.691668'),
('8', 'lili', '上海，远比《小时代》里更美、更棒、更好玩！', '上海', 'http://www.mafengwo.cn/gonglve/ziyouxing/2681.html', '', '一说起上海，很多人也许都会想起堪称“魔都宣传片”的系列电影《小时代》。有人说，这是郭敬明眼中的上海，也有人说，这是上海这个时代最好的样子。其实，在大多数人眼中，《小时代》只是上海奢华的A面，上海还有充满市井气息和文化气韵的B面。A和B加在一起，才是一个完整的、让我们心向往之的上海。', 'http://a4-q.mafengwo.net/s10/M00/DC/2F/wKgBZ1i3rqOAHEW-AAOv7M0JrjQ144.png?imageView2%2F2%2Fw%2F1360%2Fq%2F90%7Cwatermark%2F1%2Fimage%2FaHR0cDovL24xLXEubWFmZW5nd28ubmV0L3MxMC9NMDAvMDgvQjkvd0tnQloxaDExQ0tBRjRUeEFBQXYzcVNMWmRvOTA4LnBuZz9pbWFnZU1vZ3IyJTJGdGh1bWJuYWlsJTJGMTgweCUyRnF1YWxpdHklMkY5MA%3D%3D%2Fgravity%2FSouthEast%2Fdx%2F10%2Fdy%2F15%2Fdissolve%2F40', 1500, '2017-06-09 10:59:58.076088'),
('9', 'loser', '第一次去崇明岛，有哪些不可错过的体验？', '上海', 'http://www.mafengwo.cn/gonglve/ziyouxing/2723.html', '', '也许很多人跟小编一样，第一次听说崇明岛，是从郭敬明笔下的《崇明春天》，那个临近上海市区的小岛，有那么好听的名字，总让人忍不住“心痒”，想去一探究竟。其实，对于上海市，崇明岛大概算是一个后花园的存在，那里有树林、有螃蟹、还有小山羊和湖泊。它是城市繁华中的一片净土，安安静静地在那里，在这个春暖花开的日子里，等你来', 'http://n1-q.mafengwo.net/s9/M00/82/DE/wKgBs1fJEIuAV1hRAAhjSl3TgV495.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90%7Cwatermark%2F1%2Fimage%2FaHR0cDovL24xLXEubWFmZW5nd28ubmV0L3MxMC9NMDAvMDgvQjkvd0tnQloxaDExQ0tBRjRUeEFBQXYzcVNMWmRvOTA4LnBuZz9pbWFnZU1vZ3IyJTJGdGh1bWJuYWlsJTJGMjM4eCUyRnF1YWxpdHklMkY5MA%3D%3D%2Fgravity%2FSouthEast%2Fdx%2F10%2Fdy%2F15%2Fdissolve%2F40', 672, '2017-06-09 10:59:58.076088');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
