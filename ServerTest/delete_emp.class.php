<?php
header("Content-type: text/html; charset=utf-8");
session_start();
include ("../conn/conn.php");

	$result = mysql_query ("delete from emp_info where emp_no = '".$_POST['emp_no']."'");
		
		if ( $result ) {
			echo "<script>alert('员工信息删除成功！');window.location.href='main.php';</script>";
		} else {		
			echo "<script>alert('员工信息删除成功！');window.location.href='emp.php';</script>";
		}

?>;