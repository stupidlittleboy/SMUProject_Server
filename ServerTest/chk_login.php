<?php
header("Content-type: text/html; charset=utf-8");
session_start();
include ("../conn/conn.php");

	$result = mysql_query ("select * from login where username = '".$_POST['username']."' 
		and password = '".$_POST['password']."'");
		
		if (mysql_num_rows ( $result ) < 1) {
			echo "<script>alert('该用户不存在！');history.back();</script>";
		} else {
			$row = mysql_fetch_assoc ( $result );
			$_SESSION['username']=$_POST['username'];
			$_SESSION['loginEmpNo'] = $row['login_emp_no'];
			$_SESSION['app_key'] = "5257eaf1ffea935bcf2a6609";
			$_SESSION['master_secret'] = "4ef9681a4cb842264c64935b";
			echo "<script>alert('登陆成功！');window.location.href='main.php';</script>";
		}

?>;