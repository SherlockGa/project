<!DOCTYPE html>
<html>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("onmyway",$con);
mysql_query("set names utf8");
$id = $_GET['y'];
$result = mysql_query("select * from detailnote where id = '{$id}'");
$row = mysql_fetch_array($result);

$comm = mysql_query("select * from comment where note = '{$id}'");
$i = 0;
?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta name="description" content="">
<meta name="keywords" content="">
<link href="css/header.css" rel="stylesheet" type="text/css"/>
<link href="css/mynote.css" rel="stylesheet" type="text/css"/>
<link href="css/foot.css" rel="stylesheet" type="text/css"/>
<script  src="js/jquery.min.js" type="text/javascript"></script>
<title><?php echo $row['name']." - On my way" ?></title>
</head>
<body>
    <div class="header">
    <div class="header-wrap">
        <div class="logo">
             <a href="#"><img class="onmyway-logo" src="image/1490412678_721996.png" ></a>
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
        ?>
            <a href="" style="padding: 0 13px;">
               <img src="<?php 
                            $na = $_COOKIE['USER'];
                            $re = mysql_query("select * from user where user_name = '{$na}'");
                            $rrr = mysql_fetch_array($re);
                            echo $rrr['image'];
                          ?>" style="height: 36px;width: 36px;border-radius: 20px;"> <!--//默认头像图-->
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
            </ul>
            <?PHP } else{?>
            </div>
            <a id="login" href="login.html" style="padding: 0 10px">登录</a>
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
   <div class="main">
   		<div id="_j_top_pic_container" class="show">
   			<div class="show-image"><a href="#"><img src="<?php echo $row['image'] ?>"></a></div>
        <div class="touxiang">
        <a href="#"><img src="<?php 
                                  $na = $row['user'];
                                  $re = mysql_query("select * from user where user_name = '{$na}'");
                                  $rrr = mysql_fetch_array($re);
                                  echo $rrr['image'];
                              ?>"></a><!--用户头像-->
        </div>
        <div class="youjititle">
        <h1><?php echo $row['name'] ?></h1>
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
   		<div class="blank">
      <div class="vc_time"><span class="time"><?php echo $row['time'] ?></span></div>
      </div>
   		<div class="youji">
      <div class="view">
   		<div>
   			
   			<span class="num_click"><?php echo $row['hit'] ?></span>
   		</div>
   		<div class="travel_directory">
   			<ul>
   				<li>
   					出行天数
   					<span>/</span>
   					<?php echo $row['days'] ?>
   				</li>
   				<li>
   					人均花费
   					<span>/</span>
   					<?php echo $row['money'] ?>
   				</li>
   				<li>
   					目的地
   					<span>/</span>
   					<?php echo $row['city'] ?>
   				</li>
   			</ul>
   		</div>
   		<div class="content">
   			<?php echo $row['content'] ?>
   		</div>
   		<div class="pinglun">
   		<?php 
   		while($com = mysql_fetch_array($comm)){ 
   			$i = $i + 1;
   		?>
   			<div class="everypinglun">
        <?php
            $nnn = $com['visitor'];
            $re = mysql_query("select * from user where user_name = '{$nnn}'");
            $rrr = mysql_fetch_array($re);
                            
        ?>
   				<div class="pingluntitle">
   					<div class="photo"><a href="">
            <img src="<?php echo $rrr['image']; ?>" style="height: 50px;width: 50px;"> <!--浏览者的头像--></a></div>
            <div><a href=""><?php echo $com['visitor'] ?></a><div class="floor"><?php echo $i."F"?></div></div> <!--链接到用户主页-->
   					
   				</div>
   				<div class="pingluncontent">
   					<?php echo $com['content'] ?>
   				</div>
   				<div class="pingluntime">
   					<?php echo $com['lasttime'] ?>
   				</div>
   			</div>
   		<?php } ?>
   		</div>
   		<div class="message">
   			<h2>回复游记</h2>
   			<?php if(isset($_COOKIE['USER'])){ 
            $na = $_COOKIE['USER'];
            $re = mysql_query("select * from user where user_name = '{$na}'");
            $rrr = mysql_fetch_array($re);
        ?>
   			<form action="comment.php?id=<?php echo $id; ?>&name=<?php echo $_COOKIE['USER'] ?>" method="post" name="myform" onsubmit="return CheckPost();">

   			<div class="reply">
   				<div><div style="width: 48px;height: 48px;position: absolute;left: 0;">
                <img src="<?php echo $rrr['image']; ?>" style="height: 50px;width: 50px;"> <!--评论人头像-->
              </div>
   					<div>
   						
   						<div class="replycontent">
   							<textarea name="content" placeholder="我也插句话..."></textarea>
   						</div>
   					</div>
   					<div style="margin-top: 20px;float: right;">
   						<span>
   						
   						<button type="submit" class="fabiao" >评论</button>
   						</span>
   					</div>
   				</div>
   				<div>
   		
   				</div>
   			</div>
   			</form>
   			<?php }else{ ?> <!--上面那段复制下来，除了form,textarea,button有改动-->
   			<div class="reply">
   				<div><div style="width: 48px;height: 48px;position: absolute;left: 0;">
               <img src="image/u.jpg" style="height: 50px;width: 50px;"> <!--评论人头像-->
              </div>
   					<div>
   						
   						<div class="replycontent">
   							<textarea placeholder="我也插句话..."></textarea>
   						</div>
   					</div>
   					<div style="margin-top: 20px;float: right;">
   						<span>
   					
   						<button class="fabiao" onclick="check()" >评论</button>
   						</span>
   					</div>
   				</div>
   				<div class="page">
   					
   				</div>
   			</div>
   			<?php } ?>
   		</div>
   
   <?php
   $ccc = $row['city'];
   $ppp = mysql_query("select * from destination where name = '{$ccc}'");
   $rrr = mysql_fetch_array($ppp);

   require('recommand.php');
   $tnotes = Recommand::noteSearch($row['city'],50);
   $tnote = $tnotes[0];
   $tnote1 = $tnotes[1];
   ?>
   </div>
   <style>
   .eye {
    width: 10px;
    height: 10px;

   }
   .eye img {
    width: 10px;
    height: 10px;
   }
   </style>
   <div class="xiangguan">
   		<div class="dest">
   			相关目的地：
   			<a href="<?php echo $rrr['link'] ?>"><?php echo $row['city'] ?></a>
   		</div>
   		<div class="note">
   			<div class="note-title">相关游记</div>
   			<ul class="catalog">
        <?php $j = 0; ?>
   			<?php while($lll = mysql_fetch_array($tnote)){ ?>
   				<li>
   					<i><?php 
              $j++;
              if($j < 10)
                echo "0".$j;
              else
                echo $j;
            ?></i>
   					<a href="<?php echo $lll['link'] ?>"><?php echo $lll['name'] ?></a>
            <span class="eye"><img src="image/eye.png"></span>
   					<span style="font-size:10px;color: #ccc;"><?php echo $lll['hit'] ?></span> 
   				</li>
   			<?php } ?>
   			<?php while($lll = mysql_fetch_array($tnote1)){ ?>
   				<li>
   					<i><?php 
              $j++;
              if($j < 10)
                echo "0".$j;
              else
                echo $j;
            ?></i>
   					<a href="<?php echo $lll['link'] ?>"><?php echo $lll['name'] ?></a>
            <span class="eye"><img src="image/eye.png"></span>
   					<span style="font-size:10px;color: #ccc;"><?php echo $lll['hit'] ?></span>
   				</li>
   			<?php } ?>
   			</ul>
   		</div>
   </div>
   </div>
   </div>
   <script>
   		function CheckPost(){
   			if (myform.content.value=="")  
    		{  
        		alert("必须要填写留言内容");  
       			myform.content.focus();  
        		return false;  
    		}
    		else{
    			return true;
    		}  
   		}
	</script>
	<script>
   		function check() {
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