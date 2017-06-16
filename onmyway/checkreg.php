<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-05-31 13:14:30
 * @version $Id$
 */
header('Content-type: text/html; charset=utf-8');

function myException($exception){
	echo "<b>Exception:</b> ".$exception->getMessage();
}

set_exception_handler('myException');

$name = $_POST['username'];
$pw = $_POST['password'];
$pwa = $_POST['passwordagain'];

if(test_name($name) && test_pw($pw,$pwa)){
	$con = mysql_connect("localhost","root","");
	if(!$con){
		die('Could not connect: '.mysql_error());
	}

	mysql_select_db("onmyway",$con);

	mysql_query("set names utf8");
	$result = mysql_query("select * from user where user_name = '{$name}'");
	$num = mysql_num_rows($result);

	if($num){
		echo "<script> alert('用户名已存在')</script>";
		echo "\n";
		echo "<script>window.top.location='regist.html'</script>";
	}
	else{

		mysql_query("INSERT INTO user(user_name,password,image) VALUES ('$name','$pw','')",$con);

		$row = mysql_affected_rows($con);
		if($row > 0){
			echo "<script> alert('注册成功')</script>";
			echo '<script>window.top.location="login.html"</script>';
		}
		else{
			echo "<script> alert('注册失败')</script>";
	        echo "<script>window.top.location='regist.html'</script>";
		}
	}
	mysql_close($con);
}

//	echo "<script>window.top.location='regist.html'</script>";


function test_name($data){
	if(strpos($data,' ')){
		echo "<script>alert('姓名格式不对！')</script>";
		return false;
	}
	if(preg_match("/[^\w\u4e00-\u9fa5]/g",$data)){
		echo "<script>alert('姓名格式不对！')</script>";
		return false;
	}
	$n = strlen($data);
	if(empty($data)){
		echo "<script>alert('姓名不能为空')</script>";
		return false;
	}
	elseif($n < 6 || $n > 25){
		echo "<script>alert('姓名为5-25个字符！')</script>";
		return false;
	}
	return true;
}

function test_pw($data,$ag){
	$n = strlen($data);
	if(empty($data)){
		echo "<script>alert('密码不能为空')</script>";
		return false;
	}
	elseif($n < 6 || $n > 16){
		echo "<script>alert('密码为5到16位')</script>";
		return false;
	}
	elseif(preg_match("/[^\w\u4e00-\u9fa5]/g",$data)){
		echo "<script>alert('密码格式不对')</script>";
		return false;
	}
	elseif(preg_match("/^\d*$/",$data)){
		echo "<script>alert('密码格式不对')</script>";
		return false;
	}
	elseif(preg_match("/^[a-z]*$/i",$data)){
		echo "<script>alert('密码格式不对')</script>";
		return false;
	}
	if(strcmp($data,$ag) != 0){
		echo "<script>alert('两次输入的密码不一致！')</script>";
		return false;
	}
	return true;
}
