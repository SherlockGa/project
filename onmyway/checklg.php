<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-05-31 16:35:23
 * @version $Id$
 */
header("content-type:text/html;charset=utf-8");
$con = mysql_connect("localhost","root","");
mysql_select_db("onmyway",$con);
mysql_query("set names utf8");
$name = $_POST['username'];
$pw = $_POST['password'];
$result = mysql_query("select * from user where user_name = '{$name}'");
$num = mysql_num_rows($result);
if($num){
	$row = mysql_fetch_array($result);
	if($pw == $row['password']){
		setcookie("USER",$name,time()+3600*24);
		echo "<script>alert('登录成功')</script>";
		echo '<script>window.top.location="home.php"</script>';
	}
	else{
		setcookie("USER",'',time()-1);
		echo "<script>alert('密码错误')</script>";
		echo '<script>window.top.location="login.html"</script>';
	}
}
else{
	echo "<script>alert('用户名不存在')</script>";
	echo '<script>window.top.location="login.html"</script>';
}


mysql_close($con);