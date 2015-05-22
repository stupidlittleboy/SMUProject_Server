<?php
header("Content-type: text/html; charset=utf-8");
session_start();

include ("../conn/conn.php");

$result = mysql_query ("update notice set notice_theme = '".$_POST['noticeTheme']."',
 notice_content = '".$_POST['noticeContent']."', notice_emp_no = '".$_SESSION['loginEmpNo']."', 
 notice_date = '".$_POST['noticeDate']."'where notice_id = '".$_POST['noticeId']."'");
 
	 if ( $result ) {
	 	echo "<script>alert('公告信息修改成功！');window.location.href='main.php';</script>";	 	
	} else {
		echo "<script>alert('公告信息修改失败');history.back();</script>";
	}

?>