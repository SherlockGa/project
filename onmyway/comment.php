<?php

header('Content-type: text/html; charset=utf-8');


$id = $_GET['id'];
$visitor = $_GET['name'];
$content = $_POST['content'];

$con = mysql_connect("localhost","root","");
mysql_select_db("onmyway",$con);
mysql_query("set names utf8");

$result = mysql_query("select * from detailnote where id = '{$id}'");
$row = mysql_fetch_array($result);

$r = mysql_query("select * from comment");
$n = mysql_num_rows($r);
$owner = $row['user'];
$name = $row['name'];
$sql = "INSERT INTO comment (id,note,visitor,content,lasttime) VALUES ('$n','$id','$visitor','$content',now())";
mysql_query($sql,$con);
$l = mysql_affected_rows($con);

if($l > 0){
	$c = "mynote.php?y=".$id;
	echo "<script>alert('评论成功')</script>";
	echo "<script>window.top.location='{$c}'</script>";
}
else{
	$c = "mynote.php?y=".$id;
	echo "<script>alert('评论失败')</script>";
	echo "<script>window.top.location='{$c}'</script>";		
}