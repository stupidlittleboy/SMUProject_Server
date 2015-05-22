<?php
header("Content-type: text/html; charset=utf-8");
session_start();
include ("../conn/conn.php");

$result = mysql_query ("update emp_info set emp_department = '".$_POST['department']."',
 emp_position = '".$_POST['position']."', emp_entry_date = '".$_POST['entrydate']."',
	 emp_identify = '".$_POST['identify']."' where  emp_no = ".$_POST['empno']."'");
	 
	 if ( $result ) {
	 	echo "<script>alert('添加员工成功！');window.location.href='main.php';</script>";
	} else {
		echo "<script>alert('添加员工失败');history.back();</script>";
	}

?>