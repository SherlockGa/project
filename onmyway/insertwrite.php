<?php

header('Content-type: text/html; charset=utf-8');

$title = $_POST['title'];
$content = $_POST['content'];
$city = $_POST['city'];
$month = $_POST['month'];
$day = $_POST['day'];
$money = $_POST['money'];

$name = $_COOKIE['USER'];

if(strlen($title) == 0){
	echo "标题不能为空！";
	header("location:write.php");
}
else if(strlen($content) == 0){
	echo "内容不能为空！";
	header("location:write.php");
}
else if(strlen($city) == 0){
	echo "目的地不能为空！";
	header("location:write.php");
}
else if(strlen($day) == 0){
	echo "出行天数不能为空";
	header("location:write.php");
}
else if(!preg_match("/^\d*$/",$day)){
    echo "<script>alert('出行天数必须是数字')</script>";
    echo "<script>window.top.location='write.php'</script>";
}
else if(strlen($money) == 0){
    echo "人均花费不能为空！";
	header("location:write.php");
}
else{
	$con = mysql_connect("localhost","root","");
	mysql_select_db("onmyway",$con);
	mysql_query("set names utf8");

	$r = mysql_query("select * from destination where name = '{$city}'");
	$n = mysql_num_rows($r);

    if($n == 0){
		echo "<script>alert('目的地不正确')</script>";
		echo "<script>window.top.location='write.php'</script>";
	}
	else{
		if(isset($_POST['submit'])){
			$filename = 'image/'.time().substr($_FILES['photo']['name'],strrpos($_FILES['photo']['name'],'.')); //什么意思？要自己创建一个photo表吗，表中含有name？
			if(move_uploaded_file($_FILES['photo']['tmp_name'],$filename)){ //将文件从原来的地方移到新的地方，tmp_name指什么，在哪里？
				$l = mysql_query("select * from detailnote");
				$id = mysql_num_rows($l);
				$ss = "mynote.php?y=".$id;
				$a = 0;
				$sql = "INSERT INTO detailnote (id,user,name,content,month,days,money,image,time,city,link,keyword,hit) VALUES ('$id','$name','$title','$content','$month','$day','$money','$filename',now(),'$city','$ss','$city','$a')"; //不用设置link，再写一个页面提取数据库中的东西
				$result = mysql_query($sql,$con);
				$row = mysql_affected_rows($con);

				if($row > 0){
					echo "<script>alert('发表成功')</script>";
					echo "<script>window.top.location='home.php'</script>";
				}
				else{
					echo "<script>alert('发表失败')</script>";
					echo "<script>window.top.location='write.php'</script>";
				}
			}
		}
	}
}