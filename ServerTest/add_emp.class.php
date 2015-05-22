<?php
header("Content-type: text/html; charset=utf-8");
session_start();
include ("../conn/conn.php");

$result = mysql_query ("insert into emp_info (emp_no, emp_department, emp_position, emp_entry_date,
	 emp_identify) values ('".$_POST['empno']."', '".$_POST['department']."', '".$_POST['position']."',
	 '".$_POST['entrydate']."', '".$_POST['identify']."')");
	 
	 if ( $result ) {
	 	echo "<script>alert('添加员工成功！');window.location.href='main.php';</script>";
	} else {
		echo "<script>alert('添加员工失败');history.back();</script>";
	}

?>