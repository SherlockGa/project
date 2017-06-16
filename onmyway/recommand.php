<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-06-01 13:27:42
 * @version $Id
 */

Class Recommand {
	private function set($name){
		$TempNum = 5; //cookie里面存多少个浏览记录
		$record = $_COOKIE['rec'];
		$recordArray = explode(',', $record);
		$recordnum = count($recordArray);
		if(!in_array($name, $recordArray,TRUE)){
			if($recordnum < $TempNum){
				if($record==""){
					setcookie('rec',$name,time()+3600*24*30,'/');
				}
				else{
					$r = $record.",".$name;
					setcookie("rec",$r,time()+3600*24*30,'/');
				}
			}
			else{ //大于指定大小后，删除第一个，在尾部加入最新的
				$pos = strpos($record, ",")+1; //第一个参数的起始位置
				$first = substr($record, 0,$pos);//去除第一个参数
				$record = str_replace($first, "", $record);
				$r = $record.",".$name; //在尾部加入最新的记录
				setcookie('rec',$r,time()+3600*24*30,'/');
			}
		}
	}
	public static function cc($name,$limit=50){
		$names = explode(',', $name);
		$result = array();
		for($i = 0; $i < count($names); $i++){
			$r = mysql_query("select * from destination where name like '%$names[$i]%'");
			$row = mysql_fetch_array($r);
			$country = $row['dest_country'];
			$continent = $row['dest_continent'];
			$n = $row['name'];
			$rs = mysql_query("select * from destination where (dest_country = '{$country}') or (dest_continent = '{$continent}') or (dest_country = '{$name}')");
			while($w = mysql_fetch_array($rs)){
				if(!in_array($w,$result,TRUE))
					$result[] = $w;
			}
		}
		return $result;
	}
	public static function destSearch($name,$limit = 50){ //亚洲之类的洲也要存在name里
		$names = split(' ',$name);//关键字以空格分割

		$sql = 'where name ';
		if(!$names || empty($names)) return '';
		for($i = 0; $i < count($names); $i++){
			if($i == 0){
				$sql.= "like '%$names[$i]%'";
				if(isset($_COOKIE['rec'])){
					self::set($names[$i]);
				}
				else{
					setcookie('rec',$names[$i],time()+3600*24*30,'/');
				}
			} 
			else{
				$sql.= "or name like '%$names[$i]%'";
				self::set($names[$i]);
			} 
		}
		$limit = "LIMIT 0,{$limit}";
		$s = "select * from destination $sql ".$limit;
		$result = mysql_query($s);

		return $result;
	}
	public static function artSearch($name,$limit = 50){
		$names = split(' ',$name);//关键字以空格分割

		$sql = 'where ';
		if(!$names || empty($names)) return '';
		for($i = 0; $i < count($names); $i++){
			if($i == 0) $sql.= "name like '%$names[$i]%'";
			else $sql.= "or name like '%$names[$i]%'";
			$sql.= "or content like '%$names[$i]%'";
			$sql.= "or city like '%$names[$i]%'";
		}

		$limit = "LIMIT 0,{$limit}";
		$s = "select * from article $sql ".$limit;
		$result = mysql_query($s);
		return $result;
	}
	public static function noteSearch($name,$limit = 50){
		$names = split(' ',$name);//关键字以空格分割

		$sql = 'where ';
		if(!$names || empty($names)) return '';
		for($i = 0; $i < count($names); $i++){
			if($i == 0) $sql.= "name like '%$names[$i]%'";
			else $sql.= "or name like '%$names[$i]%'";
			$sql.= "or city like '%$names[$i]%'";
			$sql.= "or content like '%$names[$i]%'";
		}

		$result = [];
		$limit = "LIMIT 0,{$limit}";
		$s = "select * from note $sql ".$limit;
		$s1 = "select * from detailnote $sql".$limit;
		$result[0] = mysql_query($s);
		$result[1] = mysql_query($s1);
		return $result;
	}
}