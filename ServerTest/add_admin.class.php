<?php
header("Content-type: text/html; charset=utf-8");
session_start();
include ("../conn/conn.php");

$result = mysql_query ("insert into login values (null, '".$_POST['username']."',
	 '".$_POST['password']."', '".$_POST['empNo']."')");
	 
	 if ( $result ) {
	 	echo "<script>alert('管理员添加成功！');window.location.href='main.php';</script>";
	} else {
		echo "<script>alert('管理员添加失败');history.back();</script>";
	}

?>