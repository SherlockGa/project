<!DOCTYPE html>
<html>
<?php 
$con = mysql_connect("localhost","root","");
mysql_select_db("onmyway",$con);
mysql_query("set names utf8");
?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="">
<meta name="keywords" content="">
<link href="css/gonglue.css" rel="stylesheet" />
<link href="css/write.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/header.css" />
<link href="css/foot.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/jquery.min.js"></script>
<title>写 游 记</title>
</head>
<body>
    <div class="header">
    <div class="header-wrap">
        <div class="logo">
            <a class="onmyway-logo" href="#"></a>
        </div>
        <ul class="nav">
            <li><a href="home.php">首页</a></li>
            <li><a href="destination.php">目的地</a></li>
            <li><a href="gonglue.php">旅游攻略</a></li>
            <li><a href="my.php">社区</a></li>
        </ul> 
        <div class="search">
            <form method="post" action="search.php">
                <input type="text" name="query" placeholder="搜目的地/攻略" autocomplele="off">
                <button type="submit"  class="icon-search"></button>
            </form>
        </div>
        <div class="login-out">
        <div class="sort">
        <?php if(isset($_COOKIE["USER"])){ 
        	$n = $_COOKIE["USER"];
            $result = mysql_query("select * from user where user_name = '{$n}'");
            $row = mysql_fetch_array($result);
        ?>
            <a href="my.php" style="padding: 0 13px;">
               <img src="<?php echo $row['image'] ?>" style="height: 36px;width: 36px;border-radius: 50%;">
               <?php echo $_COOKIE["USER"];?>
            </a>
            <ul class="dropdown-menu" style="font: while;padding:0;">
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
   	<div class="shadow"></div>
      <script type="text/javascript">
         $(".sort").hover(function() {
            $(".dropdown-menu").css("display","block");
            $(".sort").css("border","1px solid mediumpurple");
         }).mouseleave(function() {
            $(".dropdown-menu").css("display","none");    
         })

</script>
   	<div class="line"></div>
	<div class="wrapper">
		<div class="title">写   游   记</div>
		<ul class="step">
			<li><label>1</label>撰写游记</li>
			<li style="font-weight: bold">→</li>
			<li style="margin-right: 10px;"><label>2</label>完成</li>
		</ul>
		<form id="bxForm" action="insertwrite.php" method="post" enctype="multipart/form-data">
		<div class="youjititle">
					<input type="text" id="title" name="title" placeholder="填写游记标题" maxlength="25">
		</div>
		
		<div class="down">
				<div class="write">
				<div class="gongneng">
					<div class="word" style="margin-right: 30px;">
						<i></i>
						<span>添加文字:</span>
					</div>
					<div class="tt">
						<textarea id="content" name="content" placeholder="在这儿添加游记文字..." ></textarea>
					</div>
				</div>
				<div class="gongneng">
					<label style="margin-right: 25px;">
						<span>*</span>
						目的地：
					</label>
					<div class="tt">
						<input type="text" id="city" name="city" maxlength="255">
					</div>
				</div>
				<div class="gongneng">
					<label>
						<span>*</span>
						出发时间：
					</label>
					<div class="tt">
						<select id="month" name="month">
							<option value="m1">1-2月</option>
							<option value="m3">3-4月</option>
							<option value="m5">5-6月</option>
							<option value="m7">7-8月</option>
							<option value="m9">9-10月</option>
							<option value="m11">11-12月</option>
						</select>
					</div>
				</div>
				<div class="gongneng">
					<label>
						<span>*</span>
						出行天数：
					</label>
					<div class="tt">
						<input type="text" id="day" name="day" maxlength="3">
						<span>天</span>
					</div>
				</div>
				<div class="gongneng">
					<label>
						<span>*</span>
						人均花费：
					</label>
					<div class="tt">
						<input type="text" id="money" name="money" maxlength="9">
						<span>元</span>
					</div>
				</div>
				<div class="gongneng">
					<div class="word" style="margin-left: 260px;margin-right: 20px;">
						<i></i>
						<span>添加照片:</span> <!--只能添加一张照片-->
					</div>
					<div class="tt">
						<input type="hidden" name="images[]">
						<div>
							<input style="border:none;" id="button" type="file" name="photo" accept="image/*" multiple="multiple" onchange="viewmypic(showimg,this.form.photo);">
						</div>
						<ul>
							<li><img name="showimg" style="display: none;" alt="预览图片" src="undefined" /><br /></li>
						</ul>
					</div>
					<p >
						<input class="submit" type="submit" name="submit" value="发表游记" onclick="checksubmit();">
					</p>
				</div>
				</div>	
		</div>
		</form>
	</div>
    <script>
    	function getFileName(ob){ //提取图片名字
			var position = ob.lastIndexOf("\\");
			return ob.substring(position+1);
		}
		function viewmypic(mypic,imgfile){ //图片预览
			if(imgfile.value){
				var src1 = getFileName(imgfile.value);
				src1 = "image/" + src1;
				mypic.src = src1;
				mypic.style.display = "";
				mypic.border = 1;
				console.log(src1);
			}
		}
    </script>
    <script>
    	function checksubmit(){
    		if(document.getElementById("title").value==""){
    			window.location.hash="#title";
    			alert("标题不能为空");
    			return false;
    		}
    		else if(document.getElementById("content").value==""){
    			window.location.hash="#content";
    			alert("游记内容不能为空");
    			return false;
    		}
    		else if(document.getElementById("city").value==""){
    			window.location.hash="#city";
    			alert("目的地不能为空");
    			return false;
    		}
    		else if(document.getElementById("month").value==""){
    			window.location.hash="#month";
    			alert("必须选择出行时间");
    			return false;
    		}
    		else if(document.getElementById("money").value==""){
    			window.location.hash="#money";
    			alert("人均花费不能为空");
    			return false;
    		}
    		else{
    			$('bxForm').submit();
    		}
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