-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-06-10 18:02:28
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
-- 表的结构 `article`
--

CREATE TABLE `article` (
  `id` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `link` varchar(1023) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `keyword` varchar(1023) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `content` mediumtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `image` mediumtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `hit` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `name`, `link`, `keyword`, `city`, `content`, `image`, `hit`) VALUES
('1', '去香港购物，这些商场最值得一逛……', 'http://www.mafengwo.cn/gonglve/ziyouxing/1013.html', '', '香港', '说起香港，那一定少不了购物。作为鼎鼎有名的“购物天堂”，从旺角到尖沙咀再到铜锣湾，一路都是大大小小的各式商场，商品齐全，价格优惠，是购物族的心水TOP地标。去香港的首要大事是什么？当然是买买买啦！', 'http://n3-q.mafengwo.net/s9/M00/83/90/wKgBs1hD0qyAd8MzAALTBolEra069.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90%7Cwatermark%2F1%2Fimage%2FaHR0cDovL24xLXEubWFmZW5nd28ubmV0L3MxMC9NMDAvMDgvQjkvd0tnQloxaDExQ0tBRjRUeEFBQXYzcVNMWmRvOTA4LnBuZz9pbWFnZU1vZ3IyJTJGdGh1bWJuYWlsJTJGMTY5eCUyRnF1YWxpdHklMkY5MA%3D%3D%2Fgravity%2FSouthEast%2Fdx%2F10%2Fdy%2F15%2Fdissolve%2F40" data-src="http://n3-q.mafengwo.net/s9/M00/83/90/wKgBs1hD0qyAd8MzAALTBolEra069.jpeg?imageView2%2F2%2Fw%2F680%2Fq%2F90%7Cwatermark%2F1%2Fimage%2FaHR0cDovL2ExLXEubWFmZW5nd28ubmV0L3MxMC9NMDAvOTkvNjIvd0tnQloxaDBxWXFBQUJBYUFBQVhxM2M3d3lrNjg5LnBuZz9pbWFnZU1vZ3IyJTJGdGh1bWJuYWlsJTJGMTY5eCUyRnF1YWxpdHklMkY5MA%3D%3D%2Fgravity%2FSouthEast%2Fdx%2F10%2Fdy%2F15%2Fdissolve%2F40" data-rt-src="http://n3-q.mafengwo.net/s9/M00/83/90/wKgBs1hD0qyAd8MzAALTBolEra069.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90%7Cwatermark%2F1%2Fimage%2FaHR0cDovL24xLXEubWFmZW5nd28ubmV0L3MxMC9NMDAvMDgvQjkvd0tnQloxaDExQ0tBRjRUeEFBQXYzcVNMWmRvOTA4LnBuZz9pbWFnZU1vZ3IyJTJGdGh1bWJuYWlsJTJGMTY5eCUyRnF1YWxpdHklMkY5MA%3D%3D%2Fgravity%2FSouthEast%2Fdx%2F10%2Fdy%2F15%2Fdissolve%2F40', 20),
('10', '百老汇观剧指南丨纽约一夜', 'http://www.mafengwo.cn/gonglve/ziyouxing/5707.html', '', '纽约', '如果说去纽约最值得做的事，上百老汇看场剧必在其中！旅途中若缺少了精神食粮，怎能让一段旅程变得特别而难以忘怀？不关乎艺术的晦涩难懂，亦不关乎语言的不通障碍。当音乐响起，帷幕拉开，只需用心感受，你将领会故事本身和对于自己的意义。', 'http://c4-q.mafengwo.net/s10/M00/9E/5C/wKgBZ1jZ3wyAdHiLABBvyPkvPEk222.png?imageView2%2F2%2Fw%2F1360%2Fq%2F90%7Cwatermark%2F1%2Fimage%2FaHR0cDovL24xLXEubWFmZW5nd28ubmV0L3MxMC9NMDAvMDgvQjkvd0tnQloxaDExQ0tBRjRUeEFBQXYzcVNMWmRvOTA4LnBuZz9pbWFnZU1vZ3IyJTJGdGh1bWJuYWlsJTJGMjYzeCUyRnF1YWxpdHklMkY5MA%3D%3D%2Fgravity%2FSouthEast%2Fdx%2F10%2Fdy%2F15%2Fdissolve%2F40', 2323453),
('11', '最详细的纽约血拼攻略——Woodbury 奥特莱斯', 'http://www.mafengwo.cn/gonglve/ziyouxing/13623.html', '', '纽约', '在美国，购物也是一项重要活动。相对于一些local品牌，到了国内价格连翻几倍，感觉很高档。于是，在美国的outlet，', 'http://c1-q.mafengwo.net/s10/M00/8A/0C/wKgBZ1kxJR-AdM1SAACVu9xpRgc64.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90%7Cwatermark%2F1%2Fimage%2FaHR0cDovL24xLXEubWFmZW5nd28ubmV0L3MxMC9NMDAvMDgvQjkvd0tnQloxaDExQ0tBRjRUeEFBQXYzcVNMWmRvOTA4LnBuZz9pbWFnZU1vZ3IyJTJGdGh1bWJuYWlsJTJGMjE5eCUyRnF1YWxpdHklMkY5MA%3D%3D%2Fgravity%2FSouthEast%2Fdx%2F10%2Fdy%2F15%2Fdissolve%2F40', 142141),
('12', '洛杉矶那些好吃到爆的平价美食，连好莱坞明星都爱！', 'http://www.mafengwo.cn/gonglve/ziyouxing/2138.html', '', '洛杉矶', '听说去美国，吃饭要花不少钱，想想都肉疼。可是无论消费多么高的城市，总会有那么一些平民价格的美食隐藏在各个角落。这不，搜罗了一圈，终于找到了聚集在洛杉矶人气超高还物美价廉的美味餐厅了，听说还有可能偶遇明星？吃货们快进来看看吧。', 'http://c1-q.mafengwo.net/s5/M00/DD/0B/wKgB2lFif_GAYtabAAGnnPAIfyY87.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90%7Cwatermark%2F1%2Fimage%2FaHR0cDovL24xLXEubWFmZW5nd28ubmV0L3MxMC9NMDAvMDgvQjkvd0tnQloxaDExQ0tBRjRUeEFBQXYzcVNMWmRvOTA4LnBuZz9pbWFnZU1vZ3IyJTJGdGh1bWJuYWlsJTJGMTgyeCUyRnF1YWxpdHklMkY5MA%3D%3D%2Fgravity%2FSouthEast%2Fdx%2F10%2Fdy%2F15%2Fdissolve%2F40', 2343),
('2', '八达通攻略，详细到购买、使用、充值每一步！', 'http://www.mafengwo.cn/gonglve/ziyouxing/983.html', '', '香港', '去香港旅行，最麻烦的是什么？对，就是交通！别怕，在香港，只要你拥有一张八达通（香港交通卡），就可以省去大大小小排队买票找零钱的时间，乘车吃饭娱乐购物就连路边停车都可以用，轻松玩遍全港，省时又省事。', 'http://a2-q.mafengwo.net/s9/M00/85/17/wKgBs1hBSXiAXYYhAAEG527O9EI53.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90%7Cwatermark%2F1%2Fimage%2FaHR0cDovL24xLXEubWFmZW5nd28ubmV0L3MxMC9NMDAvMDgvQjkvd0tnQloxaDExQ0tBRjRUeEFBQXYzcVNMWmRvOTA4LnBuZz9pbWFnZU1vZ3IyJTJGdGh1bWJuYWlsJTJGMTg1eCUyRnF1YWxpdHklMkY5MA%3D%3D%2Fgravity%2FSouthEast%2Fdx%2F10%2Fdy%2F15%2Fdissolve%2F40', 32),
('3', '不爱你了，但我还是爱吃——我所吃过的澳门（边吃边更新', 'http://www.mafengwo.cn/i/5531735.html', '', '澳门', '对于一个对食物着迷的人来说，最动听的情话不是“我愿意给你我的一切”，不是“我养你”，不是“陪你去看花花世界”……而是情人的饱嗝。\r\n我几乎已经忘记初恋的模样，却记得放学后和他一起走过的街道，吃过的食物。那大概是最快乐的年少时光，坐在他单车的后座，呼吸着他T恤上被阳光抚慰的味道，车轮滚滚向前，奔向下一个甜品站。\r\n分手后所有的食欲都被冠以疗伤之名，爱情的伤全部变成了脂肪……', 'https://n4-q.mafengwo.net/s9/M00/A8/F0/wKgBs1daipCAPdH-AAdSMtUElbE12.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90', 22),
('4', '愿你在尘世获得幸福，面朝大海春暖花开', 'http://www.mafengwo.cn/i/6747314.html', '', '澳门', '朋友去过澳门，评价奇妙，是一个人流不息，各自喝酒的斑斓小城。\r\n小女孩想着，那就去吧，在川流不息的人群里，啃一块著名的葡式蛋挞；去人头攒动的大三巴，拍一张标准的游客照；到摩肩接踵的赌场中，来一局幸运的百家乐。', 'https://a4-q.mafengwo.net/s10/M00/2E/0E/wKgBZ1iTNAyAEeXEABl2gjYngJc80.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90', 43),
('5', '秋日里的老上海，探寻小情怀，难忘老味道', 'http://www.mafengwo.cn/i/6207866.html', '', '上海', '上海，魔都，繁华之地。\r\n转身之处，遇见另一个更文雅的上海，在一条条梧桐飘落的旧马路上，有着历史悠久的老房子，有着上海人难以忘怀的老味道，有着真正属于上海的独特的情怀。\r\n来此五年，没有机会好好在城市里探寻，实为憾事。\r\n秋日将至，好友二人，用脚步丈量老上海，看老建筑，品老味道。逛吃逛吃逛吃吃', 'https://a4-q.mafengwo.net/s9/M00/77/42/wKgBs1gEQOKAUcO3ABFvjmt_G1g25.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90', 24),
('6', '【一半复古 一半摩登】果子狸婆婆的魔都之旅', 'http://www.mafengwo.cn/i/6640589.html', '', '上海', '我，可能去了假的上海~~', 'https://a4-q.mafengwo.net/s10/M00/7B/C0/wKgBZ1ieg9aAWmE9AAY66wCqAjo12.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90', 53),
('7', '2017香港必买药品清单！', 'http://www.mafengwo.cn/gonglve/ziyouxing/1283.html', '', '香港', '一说香港，你首先想起的是什么？当然是买买买啊，可是买什么呢？除了化妆品、服饰、手表、奢侈品之外，香港的药品也是必买之一。那香港的药房都卖哪些居家常备万灵药呢？让我给你整理个清单，慢慢看！', 'http://n4-q.mafengwo.net/s9/M00/AA/29/wKgBs1hOUxSAVbiKAAKyX3l2cBI35.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90%7Cwatermark%2F1%2Fimage%2FaHR0cDovL24xLXEubWFmZW5nd28ubmV0L3MxMC9NMDAvMDgvQjkvd0tnQloxaDExQ0tBRjRUeEFBQXYzcVNMWmRvOTA4LnBuZz9pbWFnZU1vZ3IyJTJGdGh1bWJuYWlsJTJGMjk5eCUyRnF1YWxpdHklMkY5MA%3D%3D%2Fgravity%2FSouthEast%2Fdx%2F10%2Fdy%2F15%2Fdissolve%2F40', 24),
('8', '深圳去香港怎么走？这么过关最方便！', 'http://www.mafengwo.cn/gonglve/ziyouxing/11838.html', '', '香港', '怎么从深圳去香港？过关要去哪个口岸？哪个口岸最方便快捷吗？一般需要多长时间？相信很多第一次去香港的峰峰都有一股脑的疑问。别怕，今天我就为大家整理了通关全攻略为你解惑答疑。快快收藏起来，以后再也不用担心过关问题啦', 'http://c2-q.mafengwo.net/s10/M00/4E/5C/wKgBZ1kaWGWAcfHNAAIV_OmIqQM55.jpeg?imageView2%2F2%2Fw%2F1360%2Fq%2F90%7Cwatermark%2F1%2Fimage%2FaHR0cDovL24xLXEubWFmZW5nd28ubmV0L3MxMC9NMDAvMDgvQjkvd0tnQloxaDExQ0tBRjRUeEFBQXYzcVNMWmRvOTA4LnBuZz9pbWFnZU1vZ3IyJTJGdGh1bWJuYWlsJTJGMjExeCUyRnF1YWxpdHklMkY5MA%3D%3D%2Fgravity%2FSouthEast%2Fdx%2F10%2Fdy%2F15%2Fdissolve%2F40', 94),
('9', 'TVB和香港电影的常见取景地在哪里？', 'http://www.mafengwo.cn/gonglve/ziyouxing/1562.html', '', '香港', '说起香港，我想，无论如何也绕不开港片和TVB。尽管如今很多人都说TVB早已今非昔比面目全非，但无论如何都无法抹去它曾经风靡一时的辉煌。它陪着我们长大，是我们这一代的记忆。这一次，就让我带你跟着TVB和港片，走过香港的那些大街小巷，寻找当初那些曾经带给我们的感动和温暖吧！', 'http://a3-q.mafengwo.net/s9/M00/BF/9D/wKgBs1hYov-AJvxHAK8EjRoxTN4446.gif?imageView2%2F2%2Fw%2F1360%2Fq%2F90%7Cwatermark%2F1%2Fimage%2FaHR0cDovL24xLXEubWFmZW5nd28ubmV0L3MxMC9NMDAvMDgvQjkvd0tnQloxaDExQ0tBRjRUeEFBQXYzcVNMWmRvOTA4LnBuZz9pbWFnZU1vZ3IyJTJGdGh1bWJuYWlsJTJGMzYweCUyRnF1YWxpdHklMkY5MA%3D%3D%2Fgravity%2FSouthEast%2Fdx%2F10%2Fdy%2F15%2Fdissolve%2F40', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
