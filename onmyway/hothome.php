<?php require 'recommand.php'; ?><!DOCTYPE html>
<html lang="en">
<?php 
$con = mysql_connect("localhost","root","");
mysql_select_db("onmyway",$con);
mysql_query("set names utf8");
?>
<head>
    <meta charset="UTF-8">
    <link href="css/header.css" rel="stylesheet" type="text/css"/>
    <link href="css/top.css" rel="stylesheet" type="text/css"/>
    <link href="css/container.css" rel="stylesheet" type="text/css"/>
    <link href="css/foot.css" rel="stylesheet" type="text/css"/>
    <script  src="js/1.js" type="text/javascript"></script>
    <script  src="js/js.js" type="text/javascript"></script>
    <script  src="js/jquery.min.js" type="text/javascript"></script>
    <title>Welcome - On My Way</title>
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
            <li><a href="gonglue.php">旅游攻略</a></li>
            <li><a href="my.php">社区</a></li>
        </ul>
        <div class="login-out">
        <div class="sort">
          <?php if(isset($_COOKIE["USER"])){
            $n = $_COOKIE["USER"];
            $result = mysql_query("select * from user where user_name = '{$n}'");
            $row = mysql_fetch_array($result);
        ?>
            <a href="my.php" style="padding: 0 13px;">
               <img src="<?php echo $row['image'] ?>" style="height: 36px;width: 36px;border-radius: 50%;">
               <?php echo $n;?>
            </a>
            <ul class="dropdown-menu">
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
                <a id="login" href="login.html">登录</a>
                <a id="logout" href="regist.html">注册</a>
          <?php } ?>     
        </div>
    </div>
</div>
<script type="text/javascript">
         $(".sort").hover(function() {
            $(".dropdown-menu").css("display","block");
            $(".sort").css("border","1px solid mediumpurple");
         }).mouseleave(function() {
            $(".dropdown-menu").css("display","none");
         })

</script>
 <div class="shadow"></div>
<div class="top">
    <div class="show-slider" id="_j_top_pic_container">
        <ul class="show-image">
            <li class="first" >
                <a href="#" target="_blank" class="show-pic"><img src="image/30.jpg"></a>
                <a href="#" target="_blank" class="show-title dark">
                    <div class="date">
                        <span class="day">17 </span>/ May , 2017
                    </div>
                    <h3>我的大宋干 vs 你的小清迈~</h3>
                </a>
                <p class="show-info">图片来自于<font color="#ff9900"><a href="">清迈></a>图片。</font>，此目的共收藏了<font color="#ff9900"><a href="">100</a></font>张<a href="">清迈</a></p>
            </li>
            <li >
                <a href="#" target="_blank" class="show-pic"><img src="image/25.jpg"></a>
                <a href="#" target="_blank" class="show-title dark">
                    <div class="date">
                        <span class="day">21 </span>/ June , 2017
                    </div>
                    <h3>风吹过的路依旧远，你的故事讲到了哪</h3>
                </a>
                <p class="show-info">图片来自于<font color="#ff9900"><a href="">清迈></a>图片。</font>，此目的共收藏了<font color="#ff9900"><a href="">100</a></font>张<a href="">清迈</a></p>
            </li>
            <li >
                <a href="#" target="_blank" class="show-pic"><img src="image/27.jpg"></a>
                <a href="#" target="_blank" class="show-title dark">
                    <div class="date">
                        <span class="day">28 </span>/ March , 2017
                    </div>
                    <h3>城市·花园，一缘一会</h3>
                </a>
                <p class="show-info">图片来自于<font color="#ff9900"><a href="">清迈></a>图片。</font>，此目的共收藏了<font color="#ff9900"><a href="">100</a></font>张<a href="">清迈</a></p>
            </li>
            <li >
                <a href="#" target="_blank" class="show-pic"><img src="image/20.JPG"></a>
                <a href="#" target="_blank" class="show-title dark">
                    <div class="date">
                        <span class="day">05 </span>/ May , 2017
                    </div>
                    <h3>香港·香港——因电影而心心念念，不停不住</h3>
                </a>
                <p class="show-info">图片来自于<font color="#ff9900"><a href="">清迈></a>图片。</font>，此目的共收藏了<font color="#ff9900"><a href="">100</a></font>张<a href="">清迈</a></p>
            </li>
        </ul>
        <ul class="show-nav">
            <li><a href="javascript:"><img src="image/30.jpg" height="62" width="110"><span></span></a></li>
            <li><a href="javascript:"><img src="image/25.jpg" height="62" width="110"><span></span></a></li>
            <li><a href="javascript:"><img src="image/27.jpg" height="62" width="110"><span></span></a></li>
            <li><a href="javascript:"><img src="image/20.JPG" height="62" width="110"><span></span></a></li>
        </ul>
    </div>
    <div class="top-search" id="_j_index_search">
        <div class="search-group">
            <div class="searchtab" id="_j_index_search_tab">
                <ul class="clearfix">
                    <li class="tab-selected" data-index="0"><i></i>全部</li>
                </ul>
            </div>
            <!-- 全部 begin -->
            <div class="searchbar" id="_j_index_search_bar_all">
                <div class="search-wrapper">
                    <div class="search-input">
                        <form action="search.php" method="post">
                            <input name="query" type="text" placeholder="搜目的地/攻略" id="_j_index_search_input_all" autocomplete="off">
                            <button type="submit"><i class="icon-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- 全部 end -->
        </div>
    </div>
</div>
<?php
$r = mysql_query("select * from image");
?>
<div class="container">
        <div class="banner"></div>
        <div class="remai" id="_j_sales">
            <div class="hd">热门景点推荐</div>
            <div class="bd">
                <ul class="clearfix">
                <?php 
                    while($row = mysql_fetch_array($r)){
                ?>
                    <li class="qiang">
                        <a href="" target="_blank">
                            <div class="image">
                                <img src="<?php echo $row['url'] ?>" height="135" width="220">
                            </div>
                            <h3><?php echo $row['name'] ?></h3>
                        </a>
                    </li>
                <?php } ?>  
                </ul>
            </div>
        </div>

        <div class="travel" id="_j_tn">
            <div class="navbar clearfix">
                <ul class="tn-nav" id="_j_tn_nav">

                    <li class="active tab"><a href="hothome.php?page=1" rel="nofollow" data-type="0" data-objid="0">热门游记</a><span class="tn-menu _j_open_search"><i class="tn-menu-icon"></i>筛选</span></li>
                    <li class="tab"><a href="newhome.php?page=1" rel="nofollow" data-type="3">最新发表</a></li>
                </ul>
                <div class="tn-write"><a class="btn-add" href="write.php" target="_blank" rel="nofollow"><i></i>写游记</a></div>
                <a class="tn-tips" href="" target="_blank"><i></i>我要上首页</a>
            </div>
            <div class="tn-dropdown-pop _j_gs_container" style="display:none;">
                <span class="underline"></span>
                <a class="close _j_close" href="javascript:void(0);">×</a>
                <div class="section clearfix">
                    <div class="label">目的地</div>
                    <div class="section-cont">
                        <div class="mui-search">
                            <input class="mui-search-inp _j_gs_input" type="text" placeholder="输入你想查看的目的地">

                            <div class="m-search-suggest tn-search-suggest hide _j_sr_container">

                            </div>
                        </div>
                        <div class="hot-place">
                            <a class="_j_gs_item _j_gs_sn_11058_2" href="javascript:void(0);" data-objid="11058" data-type="2" data-name="斯里兰卡">斯里兰卡</a>
                            <a class="_j_gs_item _j_gs_sn_11030_2" href="javascript:void(0);" data-objid="11030" data-type="2" data-name="济州岛">济州岛</a>
                            <a class="_j_gs_item _j_gs_sn_10189_2" href="javascript:void(0);" data-objid="10189" data-type="2" data-name="香港">香港</a>
                            <a class="_j_gs_item _j_gs_sn_10065_2" href="javascript:void(0);" data-objid="10065" data-type="2" data-name="北京">北京</a>
                            <a class="_j_gs_item _j_gs_sn_12711_2" href="javascript:void(0);" data-objid="12711" data-type="2" data-name="云南">云南</a>
                            <a class="_j_gs_item _j_gs_sn_10083_2" href="javascript:void(0);" data-objid="10083" data-type="2" data-name="泰国">泰国</a>
                            <a class="_j_gs_item _j_gs_sn_10799_2" href="javascript:void(0);" data-objid="10799" data-type="2" data-name="青海湖">青海湖</a>
                            <a class="_j_gs_item _j_gs_sn_10183_2" href="javascript:void(0);" data-objid="10183" data-type="2" data-name="日本">日本</a>


                        </div>
                    </div>
                </div>
                <div class="section clearfix">
                    <div class="label">兴趣</div>
                    <div class="section-cont">
                        <ul class="interest-list clearfix">
                            <li class="_j_gs_item _j_gs_sn_417_1" data-objid="417" data-type="1" data-name="吃遍天下">
                                <a href="javascript:void(0);">
                                    <span class="img"><img width="110" src="https://a3-q.mafengwo.net/s9/M00/4C/88/wKgBs1d8dTCAcpbjAACantFj9Lc31.jpeg?imageMogr2%2Fthumbnail%2F%21220x150r%2Fgravity%2FCenter%2Fcrop%2F%21220x150%2Fquality%2F90"></span>
                                    <h3>吃遍天下</h3>
                                    <p>无敌手</p>
                                </a>
                            </li>
                            <li class="_j_gs_item _j_gs_sn_452_1" data-objid="452" data-type="1" data-name="带着对象">
                                <a href="javascript:void(0);">
                                    <span class="img"><img width="110" src="https://c2-q.mafengwo.net/s9/M00/72/E2/wKgBs1d8s0eAIzOxAADHUDzpwyk33.jpeg?imageMogr2%2Fthumbnail%2F%21220x150r%2Fgravity%2FCenter%2Fcrop%2F%21220x150%2Fquality%2F90"></span>
                                    <h3>带着对象</h3>
                                    <p>去虐狗</p>
                                </a>
                            </li>
                            <li class="_j_gs_item _j_gs_sn_427_1" data-objid="427" data-type="1" data-name="姑娘漂亮">
                                <a href="javascript:void(0);">
                                    <span class="img"><img width="110" src="https://n2-q.mafengwo.net/s9/M00/4D/44/wKgBs1d8diWAeEuVAACQdwKycrM19.jpeg?imageMogr2%2Fthumbnail%2F%21220x150r%2Fgravity%2FCenter%2Fcrop%2F%21220x150%2Fquality%2F90"></span>
                                    <h3>姑娘漂亮</h3>
                                    <p>就是美</p>
                                </a>
                            </li>
                            <li class="_j_gs_item _j_gs_sn_436_1" data-objid="436" data-type="1" data-name="带着孩子">
                                <a href="javascript:void(0);">
                                    <span class="img"><img width="110" src="https://n2-q.mafengwo.net/s9/M00/52/74/wKgBs1d8fXSASKT6AAA5t6CGBs050.jpeg?imageMogr2%2Fthumbnail%2F%21220x150r%2Fgravity%2FCenter%2Fcrop%2F%21220x150%2Fquality%2F90"></span>
                                    <h3>带着孩子</h3>
                                    <p>看世界</p>
                                </a>
                            </li>
                            <li class="_j_gs_item _j_gs_sn_423_1" data-objid="423" data-type="1" data-name="登山徒步">
                                <a href="javascript:void(0);">
                                    <span class="img"><img width="110" src="https://n3-q.mafengwo.net/s9/M00/4F/92/wKgBs1d8eTWAdEVhAACSUDmMgdg66.jpeg?imageMogr2%2Fthumbnail%2F%21220x150r%2Fgravity%2FCenter%2Fcrop%2F%21220x150%2Fquality%2F90"></span>
                                    <h3>登山徒步</h3>
                                    <p>用脚走</p>
                                </a>
                            </li>
                            <li class="_j_gs_item _j_gs_sn_435_1" data-objid="435" data-type="1" data-name="带着父母">
                                <a href="javascript:void(0);">
                                    <span class="img"><img width="110" src="https://a2-q.mafengwo.net/s9/M00/50/9E/wKgBs1d8eqqAU6M-AACLbzgALD438.jpeg?imageMogr2%2Fthumbnail%2F%21220x150r%2Fgravity%2FCenter%2Fcrop%2F%21220x150%2Fquality%2F90"></span>
                                    <h3>带着父母</h3>
                                    <p>去远方</p>
                                </a>
                            </li>
                            <li class="_j_gs_item _j_gs_sn_451_1" data-objid="451" data-type="1" data-name="独自一人">
                                <a href="javascript:void(0);">
                                    <span class="img"><img width="110" src="https://a2-q.mafengwo.net/s9/M00/75/2E/wKgBs1d8tf6Abj2cAACmlG9smLk15.jpeg?imageMogr2%2Fthumbnail%2F%21220x150r%2Fgravity%2FCenter%2Fcrop%2F%21220x150%2Fquality%2F90"></span>
                                    <h3>独自一人</h3>
                                    <p>最自由</p>
                                </a>
                            </li>
                            <li class="_j_gs_item _j_gs_sn_453_1" data-objid="453" data-type="1" data-name="短途周末">
                                <a href="javascript:void(0);">
                                    <span class="img"><img width="110" src="https://c2-q.mafengwo.net/s9/M00/74/0C/wKgBs1d8tJqAOm22AAAlduuXCi410.jpeg?imageMogr2%2Fthumbnail%2F%21220x150r%2Fgravity%2FCenter%2Fcrop%2F%21220x150%2Fquality%2F90"></span>
                                    <h3>短途周末</h3>
                                    <p>散散心</p>
                                </a>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
            <div id="pagelet-block-51718898fb11774f07a499d904b58483" class="pagelet-block" data-api=":note:pagelet:recommendNoteApi" data-params="{"type":"0"}" data-async="1" data-controller="/js/index/ControllerRecommend">
            <?php

                $result = mysql_query("select * from note");
                $result1 = mysql_query("select * from detailnote");
                $n = mysql_num_rows($result);
                $n1 = mysql_num_rows($result1);
                $num = $n+$n1;
                $pagenum = ceil($num/6);
                $page = $_GET['page'];
                if(!isset($page))
                    $page = 1;
                $start = ($page-1)*3;

                $sql = "select * from note order by hit desc limit $start,3";
                $sql1= "select * from detailnote order by hit desc limit $start,3";
                $res = mysql_query($sql);
                $res1 = mysql_query($sql1);
            ?>
            <div id="_j_tn_content">
                <div class="tn-list">
                <?php while($row = mysql_fetch_array($res)){ ?>
                    <div class="tn-item clearfix">
                        <div class="tn-image">
                            <img class data-src="<?php echo $row['link']; ?>" src="<?php echo $row['image'] ?>" style="display: inline;">
                        </div>
                        <div class="tn-wrapper">
                            <dl style="margin: 0">
                                <dt>
                                    <a href="<?php echo $row['link']; ?>" target="_blank"><?php echo $row['name'] ?></a>
                                </dt>
                                <dd>
                                    <a href="<?php echo $row['link']; ?>" target="_blank">
                                        <?php echo $row['content'] ?>
                                    </a>
                                </dd>
                            </dl>
                            <div class="tn-extra">
                                <span class="tn-user">
                                      <a href="" target="_blank" rel="nofollow"><?php echo $row['user'] ?></a>
                                      </span>
                                <span class="tn-nums">
                                      <i></i> 
                                      <?php echo $row['hit'] ?>
                                      </span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php while($row1 = mysql_fetch_array($res1)){ ?>
                    <div class="tn-item clearfix">
                        <div class="tn-image">
                            <img class data-src="<?php echo $row1['link']; ?>" src="<?php echo $row1['image'] ?>" style="display: inline;">
                        </div>
                        <div class="tn-wrapper">
                            <dl style="margin: 0">
                                <dt>
                                    <a href="" target="_blank"><?php echo $row1['name'] ?></a>
                                </dt>
                                <dd>
                                    <a href="<?php echo $row1['link']; ?>" target="_blank">
                                        <?php echo $row1['content'] ?>
                                    </a>
                                </dd>
                            </dl>
                            <div class="tn-extra">
                                <span class="tn-user">
                                      <a href="" target="_blank" rel="nofollow"><?php echo $row1['user'] ?></a>
                                      </span>
                                <span class="tn-nums">
                                      <i></i> 
                                      <?php echo $row1['hit'] ?>
                                      </span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
                <div align="right" class="m-pagination" id="_j_tn_pagination" data-type="0" data-objid="0">
                    <span class="count"><?php echo "共".$pagenum."页 / ".$num."条" ?></span>
                    <a href="hothome.php?page=1">首页</a>
                    <?php if($page != 1){ ?>
                    <a href="hothome.php?page=<?php echo $page-1; ?>">上一页</a>
                    <?php } ?>
                    <?php echo $page; ?>
                    <a href="hothome.php?page=<?php echo $page+1; ?>">下一页</a>
                </div>
            </div>
        </div>
    <div class="da-banner da-banner-row"></div>
</div>
</div>
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
<script type="text/javascript">

    var $topPicContainer = $('#_j_top_pic_container'),
        topPicSlideCnt = $topPicContainer.find('.show-image');

    function respondTopPicSize(ev) {
        var clientWidth = $(window).width(),
            picHeight = Math.round(clientWidth / 3);
        $topPicContainer.height(picHeight);
        topPicSlideCnt.find('img').each(function(idx, ele) {
            var $img = $(ele),
                imgHeight = parseInt($img.css('height'), 10);
            if(imgHeight > picHeight) {
                $img.css('marginTop', -Math.round((imgHeight - picHeight) / 2));
            }
        });
    }
    $(window).on('resize', respondTopPicSize).trigger('resize');
</script>

<script language="javascript" type="text/javascript">
    if (typeof M !== "undefined" && typeof M.loadResource === "function") {
        M.loadResource("js/js.js");
    }
</script>
<script>
    
        window.onload=function() {
            var oremai=document.getElementById("_j_sales");
            var oUl=oremai.children[1].children[0];
            var oLi=oUl.children;
            oUl.innerHTML+=oUl.innerHTML;
            oUl.style.width=oLi.length*oLi[0].offsetWidth+'px';    
         
    setInterval(function(){    
        var l=oUl.offsetLeft+5;    
        if(l>=0){    
            l=-oUl.offsetWidth/2;    
        }    
        oUl.style.left=l+'px';    
    },200);    
        };

    </script>

</body>
</html>