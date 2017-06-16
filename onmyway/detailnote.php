<!DOCTYPE html>
<html>
<?php
require('recommand.php');
$con = mysql_connect("localhost","root","");
mysql_select_db("onmyway",$con);
mysql_query("set names utf8");
if($_SERVER["REQUEST_METHOD"] == "POST")
	$name = $_POST['query'];
else if($_SERVER["REQUEST_METHOD"] == "GET")
	$name = $_GET['y'];
$art = Recommand::artSearch($name,50);
$tnotes = Recommand::noteSearch($name,50);
$tnote = $tnotes[0];
$tnote1 = $tnotes[1];
?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="">
<meta name="keywords" content="">

<link rel="stylesheet" type="text/css" href="css/detailnote.css">
<link rel="stylesheet" type="text/css" href="css/search.css">
<link href="css/foot.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/jquery.min.js"></script>
<title><?php echo $name." - On my way"; ?></title>
</head>
 <style>
    #login-out {
    float: right;
    padding: 16px 0;
    height: 26px;
    line-height: 26px;
    position: relative;
    right: 75px;
    margin:-9px;
}
#login-out a {
    font-size: 14px;
    color: mediumpurple;
}
#login-out a:hover {
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
ul {
	margin:0;
}
#s-head-logo a{
	text-decoration: none;
	color: wheat;
}
    </style>
<body>
    <div class="head">
		<div class="wrapper" style="width:1000px;margin:0 auto;">
			<div id="s-head-logo" ><a href="home.php">On My Way</a></div>
			<div id="s-search" class="header">
				<form action="search.php" method="post">
					<input type="text" name="query" value="<?php echo $name; ?>" placeholder="搜目的地/攻略" autocomplele="off">
	                <button type="submit"></button>
	            </form>
			</div>
			<div id="login-out" class="header">
			 <div class="sort" style="width:76px;">
				<?php if(isset($_COOKIE["USER"])){
					$n = $_COOKIE["USER"];
		            $result = mysql_query("select * from user where user_name = '{$n}'");
		            $row = mysql_fetch_array($result);
       				 ?>
		            <a href="my.php" style="padding: 0 13px;">
		               <img src="<?php echo $row['image'] ?>" style="height: 36px;width: 36px;border-radius: 50%;"> 
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
	<div class="nav">
	    <div class="wid">
	        <div class="nav-list">
	            <a href="search.php?y=<?php echo $name; ?>">全部</a>
	            <a href="detailgonglue.php?y=<?php echo $name; ?>">攻略</a>
	            <a href="#">游记</a>
	        </div>
	    </div>
	</div>
	<div class="main">
	<div class="left">
	<div class="att-list">
		<ul>
		<?php while($row = mysql_fetch_array($tnote)){ ?>
			<li>
				<div class="img">
					<a href="<?php echo $row['link'] ?>">
						<img src="<?php echo $row['image'] ?>">
					</a>
				</div>
				<div class="txt about">
					<h3><a href="<?php echo $row['link'] ?>"><?php echo $row['name'] ?></a></h3>
					<p><?php echo $row['content'] ?></p>
				</div>
			</li>
		<?php } ?>
		<?php while($row = mysql_fetch_array($tnote1)){ ?>
			<li>
				<div class="img">
					<a href="<?php echo $row['link'] ?>">
						<img src="<?php echo $row['image'] ?>">
					</a>
				</div>
				<div class="txt about">
					<h3><a href="<?php echo $row['link'] ?>"><?php echo $row['name'] ?></a></h3>
					<p><?php echo $row['content'] ?></p>
				</div>
			</li>
		<?php } ?>
		</ul>
	</div>
	</div>
	<div class="right">
	<div id="recommand-search">
				<div class="title">
					<h2>猜你想去</h2>
				</div>
				<ul class="imgs">
				<?php 
					if(isset($_COOKIE['rec'])){ 
					$names = split(' ',$name);
					$result = Recommand::cc($_COOKIE['rec'],50);
					for($i=0;$i<count($result);$i++){
						$rrr = $result[$i];
						for($j = 0; $j<count($names);$j++){
							if(strcmp($rrr['name'],$names[$j]) == 0){
								$i++;
								if($i == count($result)){
									break;
								}
								$rrr = $result[$i];
								break;
							}	
						}
						if($i == count($result))
							break;		
				?>
					<li> 
						<a href="<?php echo $rrr['link'] ?>"><img src="<?php echo $rrr['image'] ?>" style="width: 90px;height: 90px;"></a>
						<p><?php echo $rrr['name'] ?></p>
					</li>
					<?php }} ?>
				</ul>
			</div>
		</div>
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
</body>
</html>