<?php

$con = mysql_connect("localhost","root","");
mysql_select_db("onmyway",$con);
mysql_query("set names utf8");

$id = $_GET['id'];
$class = $_GET['$class'];
$sql = "UPDATE '{$class}' SET hit=hit+1 WHERE id='{$id}'";
$result = mysql_query($sql);
$sql1 = "select * from '{$class}' where id='{$id}'";
$result1 = mysql_query($sql1);
$row = mysql_fetch_array($result1);
$url = $row['link'];
header("location:$url");