<?php require 'recommand.php'; ?><!DOCTYPE html>
<html>
<?php 
    if(!isset($_COOKIE["USER"]))
        header("location:gonglue.php");
?>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	
	<meta name="攻略" content="自助游攻略，自由行攻略，旅游指南">
    <link rel="stylesheet" type="text/css" href="css/gonglue.css" />
    <link rel="stylesheet" type="text/css" href="css/header.css" />
    <link href="css/foot.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <title>旅游攻略 - On My Way</title>
</head>
<body>
   <div class="header">
    <div class="header-wrap">
        <div class="logo">
           <a href="home.php"><img class="onmyway-logo" src="image/logo-head.png" ></a>
        </div>
        <ul class="nav">
            <li><a href="home.php">首页</a></li>
            <li><a href="destination.php">目的地</a></li>
            <li><a href="#">旅游攻略</a></li>
            <li><a href="my.php">社区</a></li>
        </ul> 
        <div class="search">
            <form method="post" action="search.php">
                <input type="text" name="query" placeholder="搜目的地/攻略" autocomplele="off">
                <button class="icon-search" type="submit"></button>
            </form>
        </div>
        <div class="login-out">
        <div class="sort">
          <?php if(isset($_COOKIE["USER"])){
            $n = $_COOKIE["USER"];
            $con = mysql_connect("localhost","root","");
            mysql_select_db("onmyway",$con);
            mysql_query("set names utf8");
            $result = mysql_query("select * from user where user_name = '{$n}'");
            $row = mysql_fetch_array($result);
        ?>
            <a href="my.php" style="padding: 0 13px;">
               <img src="<?php echo $row['image'] ?>" style="height: 36px;width: 36px;border-radius: 50%;">
               <?php echo $n;?>
            </a>
            <ul class="dropdown-menu" style="padding: 0">
                <li>
                    <a href="my.php">个人中心</a>
                </li>
                <li>
                    <a href="write.php">写游记</a>
                </li>
                <li>
                    <a href="logout.php">退出</a>
                </li>
            </ul><?PHP } else{?>
            </div>
            <a id="login" href="login.html" style="padding: 0 10px">登录</a>
            <a id="logout" href="regist.html">注册</a>
            <?php } ?> 
        </div> 
  
    </div>
   </div>
   </div>
     <div class="shadow"></div>
   <div class="middle">
       <div class="focus">
          <div class="mdd_nav">
           <div class="gonglve-nav">
            <div class="nav-item"><div class="left-nav-title"><h3>国内旅游</h3>
            <b class="gn-arrow"></b></div>
                <div class="nav-item-hover">
                    <ol>
                    <li class="top3"><em class="rank-num">1</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li class="top3"><em class="rank-num">2</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li class="top3"><em class="rank-num">3</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">4</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">5</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">6</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">7</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">8</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">9</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">10</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    </ol>
                </div>
            </div>
            <div class="nav-item"><div class="left-nav-title"><h3>香港 澳门 台湾</h3><b class="gn-arrow"></b></div>
            <div class="nav-item-hover">
                    <ol>
                    <li class="top3"><em class="rank-num">1</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li class="top3"><em class="rank-num">2</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li class="top3"><em class="rank-num">3</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">4</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">5</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">6</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">7</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">8</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">9</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">10</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    </ol>
                </div>
            </div>
            <div class="nav-item"><div class="left-nav-title"><h3>日本 朝鲜</h3><b class="gn-arrow"></b></div>
            <div class="nav-item-hover">
                    <ol>
                    <li class="top3"><em class="rank-num">1</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li class="top3"><em class="rank-num">2</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li class="top3"><em class="rank-num">3</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">4</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">5</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">6</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">7</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">8</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">9</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">10</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    </ol>
                </div>
            </div>
            <div class="nav-item"><div class="left-nav-title"><h3>东南亚 泰国 南亚</h3><b class="gn-arrow"></b></div>
            <div class="nav-item-hover">
                    <ol>
                    <li class="top3"><em class="rank-num">1</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li class="top3"><em class="rank-num">2</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li class="top3"><em class="rank-num">3</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">4</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">5</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">6</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">7</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">8</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">9</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">10</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    </ol>
                </div>
            </div>
            <div class="nav-item"><div class="left-nav-title"><h3>海岛 马尔代夫</h3><b class="gn-arrow"></b></div>
            <div class="nav-item-hover">
                    <ol>
                    <li class="top3"><em class="rank-num">1</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li class="top3"><em class="rank-num">2</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li class="top3"><em class="rank-num">3</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">4</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">5</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">6</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">7</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">8</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">9</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">10</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    </ol>
                </div>
            </div>
            <div class="nav-item"><div class="left-nav-title"><h3>欧洲 美洲</h3><b class="gn-arrow"></b></div>
            <div class="nav-item-hover">
                    <ol>
                    <li class="top3"><em class="rank-num">1</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li class="top3"><em class="rank-num">2</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li class="top3"><em class="rank-num">3</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">4</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">5</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">6</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">7</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">8</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">9</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    <li><em class="rank-num">10</em>
                    <strong>
                        <a href="#" target="_blank">成都</a>
                    </strong>
                    <a href="#" target="_blank>">当我在成都的街头走一走</a>
                    </li>
                    </ol>
                </div>
            </div>
           </div>
           <div class="search2">
            <div>
                <form method="post" action="detailnote.php"> 
                    <input results="s" id="shuru" type="text" name="query" placeholder="请输入想去的地方，如：香港" autocomplete="off">
                    <button class="icon" type="submit"></button> 
                </form>
            </div> 
           </div>  
          </div>
          <div id="slide">
             <div id="list" style="left: -700px">
            <img src="image/25.jpg" alt="1"/>
            <img src="image/26.jpg" alt="1"/>
            <img src="image/27.jpg" alt="2"/>
            <img src="image/30.jpg" alt="3"/>
            <img src="image/31.jpg" alt="4"/>
            <img src="image/25.jpg" alt="5"/>
            <img src="image/26.jpg" alt="5"/>
             </div>
           <div id="buttons">
            <span index="1" class="on"></span>
            <span index="2"></span>
            <span index="3"></span>
            <span index="4"></span>
            <span index="5"></span>
           </div>
        <a href="javascript:;" id="prev" class="arrow"><</a>
        <a href="javascript:;" id="next" class="arrow">></a>
           </div>
       </div>
       <div class="gonglve">
        <div class="sidebar">
        <div class="side-title">旅游攻略导航</div>
        <div class="in-out-theme">
            <a class="type" href="#">国内</a>
            <a class="type" href="#" style="margin-left: 20px">国外</a>
            <a class="type" href="#" style="margin-left: 20px">主题</a>
        </div>
        <div class="rank">
            <ul>
                <li><div class="number">1</div><a class="cicy-name" href="#">成都</a></li>
                <li><div class="number">2</div><a class="cicy-name" href="#">杭州</a></li>
                <li><div class="number">3</div><a class="cicy-name" href="#">重庆</a></li>
                <li><div class="number">4</div><a class="cicy-name" href="#">厦门</a></li>
                <li><div class="number">5</div><a class="cicy-name" href="#">普吉岛</a></li>
                <li><div class="number">6</div><a class="cicy-name" href="#">大理</a></li>
                <li><div class="number">7</div><a class="cicy-name" href="#">西安</a></li>
                <li><div class="number">8</div><a class="cicy-name" href="#">苏州</a></li>
                <li><div class="number">9</div><a class="cicy-name" href="#">黄山</a></li>
                <li><div class="number">10</div><a class="cicy-name" href="#">香港</a></li>
            </ul>
        </div>
        </div>
        <div class="container">
          <div class="recommend"><h3>推荐攻略</h3></div>
          <div class="recommend-list" style="height: 100%">
              <div class="list-content">
               <a href="#" target="_blank">
                <div class="title">在阳朔旅行有哪些不可错过的地方？</div>
                <div class="text">桂林山水甲天下、阳朔山水甲桂林，这里有一步一景山水炫彩，北起图腾古道，南至月亮山的十里画廊，有以丰富夜生活著称的西街，有刘三姐与阿牛哥抛绣球定终身的大榕树，还有被称为小漓江的遇龙河...下面让我详细的向大家介绍一下怎么玩转阳朔~</div>  
                <div class="pictures">
                    <ul style="padding: 0">
                        <li><img src="image/27.jpg"></li>
                        <li><img src="image/27.jpg"></li>
                        <li><img src="image/27.jpg"></li>
                    </ul>
                </div>         
                </a>        
              </div>
              <div class="list-content">
               <a href="#" target="_blank">
                <div class="title">在阳朔旅行有哪些不可错过的地方？</div>
                <div class="text">桂林山水甲天下、阳朔山水甲桂林，这里有一步一景山水炫彩，北起图腾古道，南至月亮山的十里画廊，有以丰富夜生活著称的西街，有刘三姐与阿牛哥抛绣球定终身的大榕树，还有被称为小漓江的遇龙河...下面让我详细的向大家介绍一下怎么玩转阳朔~</div>  
                <div class="pictures">
                    <ul style="padding: 0">
                        <li><img src="image/30.jpg"></li>
                        <li><img src="image/30.jpg"></li>
                        <li><img src="image/30.jpg"></li>
                    </ul>
                </div>         
                </a>        
              </div>
              <div class="list-content">
               <a href="#" target="_blank">
                <div class="title">在阳朔旅行有哪些不可错过的地方？</div>
                <div class="text">桂林山水甲天下、阳朔山水甲桂林，这里有一步一景山水炫彩，北起图腾古道，南至月亮山的十里画廊，有以丰富夜生活著称的西街，有刘三姐与阿牛哥抛绣球定终身的大榕树，还有被称为小漓江的遇龙河...下面让我详细的向大家介绍一下怎么玩转阳朔~</div>  
                <div class="pictures">
                    <ul style="padding: 0">
                        <li><img src="image/31.jpg"></li>
                        <li><img src="image/31.jpg"></li>
                        <li><img src="image/31.jpg"></li>
                    </ul>
                </div>         
                </a>        
              </div><!--从这里继续添加!-->
          </div>
       </div>
       </div>

   </div>
 <script language="javascript" type="text/javascript">
        
        window.onload = function () {
            var slide = document.getElementById('slide');
            var list = document.getElementById('list');
            var buttons = document.getElementById('buttons').getElementsByTagName('span');
            var prev = document.getElementById('prev');
            var next = document.getElementById('next');
            var index = 1;
            var len = 5;
            var animated = false;
            var interval = 3000;
            var timer;
            function animate (offset) {
                if (offset == 0) {
                    return;
                }
                animated = true;
                var time = 300;
                var inteval = 10;
                var speed = offset/(time/inteval);
                var left = parseInt(list.style.left) + offset;
                var go = function (){
                    if ( (speed > 0 && parseInt(list.style.left) < left) || (speed < 0 && parseInt(list.style.left) > left)) {
                        list.style.left = parseInt(list.style.left) + speed + 'px';
                        setTimeout(go, inteval);
                    }
                    else {
                        list.style.left = left + 'px';
                        if(left>-100){
                            list.style.left = -700 * len + 'px';
                        }
                        if(left<(-700 * len)) {
                            list.style.left = '-700px';
                        }
                        animated = false;
                    }
                }
                go();
            }

            function showButton() {
                for (var i = 0; i < buttons.length ; i++) {
                    if( buttons[i].className == 'on'){
                        buttons[i].className = '';
                        break;
                    }
                }
                buttons[index - 1].className = 'on';
            }

            function play() {
                timer = setTimeout(function () {
                    next.onclick();
                    play();
                }, interval);
            }
            function stop() {
                clearTimeout(timer);
            }

            next.onclick = function () {
                if (animated) {
                    return;
                }
                if (index == 5) {
                    index = 1;
                }
                else {
                    index += 1;
                }
                animate(-700);
                showButton();
            }
            prev.onclick = function () {
                if (animated) {
                    return;
                }
                if (index == 1) {
                    index = 5;
                }
                else {
                    index -= 1;
                }
                animate(700);
                showButton();
            }

            for (var i = 0; i < buttons.length; i++) {
                buttons[i].onclick = function () {
                    if (animated) {
                        return;
                    }
                    if(this.className == 'on') {
                        return;
                    }
                    var myIndex = parseInt(this.getAttribute('index'));
                    var offset = -700 * (myIndex - index);

                    animate(offset);
                    index = myIndex;
                    showButton();
                }
            }

            slide.onmouseover = stop;
            slide.onmouseout = play;

            play();

        }
    </script>
    <script>
      $(".list-content a").hover(function() {
            $(".title",this).toggleClass("bluetitle");
           })
      $(".nav-item").hover(function() {
            $(".nav-title").toggleClass("newnav");
            $(".nav-item-hover",this).css("display","block");
      }).mouseleave(function() {
        $(".nav-item-hover").css("display","none");
      })

    </script>
<script type="text/javascript">
         $(".sort").hover(function() {
            $(".dropdown-menu").css("display","block");
            $(".sort").css("border","1px solid mediumpurple");
         }).mouseleave(function() {
            $(".dropdown-menu").css("display","none");    
         })

</script>
        <div class="footer" style="height: 233px;">
    <div class="ft-content">
        <div class="ft-info clearfix">
            <dl class="ft-info-col ft-info-img">
                <a href=""><img class="onmyway-logo" src="image/logo.png"></a>
            </dl>
            <dl class="ft-info-col ft-info-about">
                <dt>关于我们</dt>
                <dd><a href="" rel="nofollow">关于on my way</a></dd>
                <dd><a href="" rel="nofollow">联系我们</a></dd>
            </dl>
            <dl class="ft-info-col ft-info-service">
                <dt>旅行服务</dt>
                <dd>
                    <ul class="clearfix">
                        <li><a target="_blank" href="">旅游攻略</a></li>
                        <li><a target="_blank" href="">旅游问答</a></li>
                        <li><a target="_blank" href="">旅游指南</a></li>
                        <li><a target="_blank" href="">旅游资讯</a></li>
                        <li><a target="_blank" href="">APP下载</a></li>
                    </ul>
                </dd>
            </dl>
        </div>
     
    </div>  
     <div class="ft-copyright" style="margin-top: 115px;">
            <p>© 2017 on my way.cn 上海市普陀区中山北路 华东师范大学 </p>
        </div>
</div>
</body>
</html>
