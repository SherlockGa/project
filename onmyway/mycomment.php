<!DOCTYPE html>
<html>
<?php
if(isset($_COOKIE['USER']))
    header("location:mycommentlogin.php");
$con = mysql_connect("localhost","root","");
mysql_select_db("onmyway",$con);
mysql_query("set names utf8");
?>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <title>个人中心</title>
    <meta name="攻略" content="自助游攻略，自由行攻略，旅游指南">
    <link rel="stylesheet" type="text/css" href="css/my.css" />
    <link href="css/foot.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>

<div class="head">
    <div class="inner-head">
    <div class="nav">
        <ul>
        <li><a href="home.php">首页</a></li>
        <li><a href="destination.php">目的地</a></li>
        <li><a href="gonglue.php">旅游攻略</a></li>
        <li><a href="#">我的家</a></li>
        </ul>
        
    </div>
      <style>
    .login-out {
    float: right;
    padding: 16px 0;
    height: 26px;
    line-height: 26px;
    position: relative;
    right: 75px;
}
.login-out a {
    font-size: 14px;
    color: mediumpurple;
}
.login-out a:hover {
    color: purple;
    text-decoration: underline;
}
.dropdown-menu {
    position: relative;
    z-index: 999;
    display: none;

}
.dropdown-menu li {
    padding:0 10px;

}
.sort {
    position: relative;
    z-index: 1000;
    
    border-radius: 4px;
    background-color: #fff;

}

.sort a img {
    margin-left: -65px;
    position:absolute;
    top: -10px;
}

</style>
    <div class="searcher">
        <form method="post" action="search.php" name="search">
        <input type="text" class="key" name="query" placeholder="我想去：" style="color: white;">
        <input type="submit" class="button">
        </form>
    </div>
    <div class="login-out">
     <div class="sort" style="width:76px;">
        <?php if(isset($_COOKIE["USER"])){?>
            <a href="my.php" style="padding: 0 13px;">
               <img src="<?php 
                            $na = $_COOKIE['USER'];
                            $re = mysql_query("select * from user where user_name = '{$na}'");
                            $rrr = mysql_fetch_array($re);
                            echo $rrr['image'];
                        ?>" style="height: 36px;width: 36px;border-radius: 20px;">
               <?php echo $_COOKIE["USER"];?>
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
                <a href="login.html">登录</a>
                <a href="regist.html">注册</a>
            <?php } ?>    
        </div>
    </div>
</div>
   <script type="text/javascript">
  
         $(".sort").hover(function() {
            $(".dropdown-menu").css("display","block");
            $(".sort").css("height","106px");
            $(".sort").css("border","1px solid mediumpurple");
         }).mouseleave(function() {
            $(".dropdown-menu").css("display","none");
            $(".sort").css("height","27px");
         })

</script>
 <div class="header">
    <div class="header-wrap">
        <ul class="nav-down">
        </ul> 
    <div class="shadow"></div>
    </div>
   </div>
<div class="center">
    <div class="left">
    <div class="information">
     <div style="text-align: center;
    padding-top: 75px;">
        <?php if(isset($_COOKIE["USER"])){ ?>
        <div>
            <img src="<?php 
                        $na = $_COOKIE['USER'];
                        $re = mysql_query("select * from user where user_name = '{$na}'");
                        $rrr = mysql_fetch_array($re);
                        echo $rrr['image'];
                      ?>" style="height: 150px; width: 200px;border-radius:25px;">
        </div>
        </div>
        <div class="myname" style="text-align:center;font-size: 24px;">
            <?php echo $_COOKIE["USER"];?>
        </div>
        <?php }else{ ?>
        <div style="text-align:center;padding-top:55px;">
            <a href="login.html">登录</a>
            <span>/</span>
            <a href="regist.html">注册</a>
        </div>
        <?php } ?> 
    </div>
    </div>
    </div>
    <div class="right">
    <div class="common_block">
        <ul class="clearfix">
        <li >
        <?php if(isset($_COOKIE["USER"])){ ?>
        <a href="write.php">写游记</a>
        <?php }else{  ?>
        <a href="login.html" onclick="c()">写游记</a>
        <?php } ?>
        </li>
        <li><a href="my.php">我的游记</a></li>
        <li><a href="gonglue.php">添加点评</a></li>
        <li><a href="mycomment.php">我的点评</a></li>
        </ul>
    </div>
    <?php if(isset($_COOKIE["USER"])){ 
        $nn = $_COOKIE['USER'];
        $result = mysql_query("select * from comment where visitor = '{$nn}'");
    ?>
    <div class="myyouji">
        <div class="youjititle">
        <h2>我的点评</h2>
        </div>
        <button class="write" onclick="on1()">添加点评</button>
        <div class="neirong">
            <?php while($row = mysql_fetch_array($result)){ 
                    $id = $row['note'];
                    $result1 = mysql_query("select * from detailnote where id = '{$id}'");
                    $row1 = mysql_fetch_array($result1);//文章信息
            ?>
                <div class="everypinglun">
                <div class="pingluntitle">
                    <div class="photo"><a href=""><!--作者主页-->
                    <img src="<?php
                                $n = $row1['user'];
                                $re = mysql_query("select * from user where user_name = '{$n}'");
                                $rrr = mysql_fetch_array($re);
                                echo $rrr['image'];
                                ?>" style="height: 36px;width: 36px;"> <!--作者的头像--></a></div>
                    <div><a href=""><?php echo $row1['user']; ?></a><a href="<?php echo $row1['link']; ?>"><?php echo $row1['name']; ?></a><!--文章标题--></div> <!--链接到用户主页-->
                </div>
                <div class="pingluncontent">
                    <?php echo $row['content'] ?><!--评论内容-->
                </div>
                <div class="pingluntime">
                    <a href="<?php
                                $n = $row['visitor'];
                                $re = mysql_query("select * from user where user_name = '{$n}'");
                                $ppp = mysql_fetch_array($re);
                                echo $ppp['image'];
                                ?>"><?php echo $row['visitor']; ?><!--访客名字--></a><?php echo $row['lasttime'] ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div> 
    <?php }else{   ?>
    <div class="myyouji">
        <div class="youjititle">
        <h2>我的点评</h2>
        </div>
        <button class="write" onclick="on2()">添加点评</button>
        <div class="neirong">
        </div>
    </div>
     <?php } ?>
    </div>
</div>
<script>
    function c(){
        alert('您还未登录，请先登录');
    }
    function on1(){
        window.top.location='gonglue.php';
    }
    function on2(){
        alert('您还未登录，请先登录');
        window.top.location='login.html';
    }
    
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