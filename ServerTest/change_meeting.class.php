<?php
header("Content-type: text/html; charset=utf-8");
session_start();

include ("../conn/conn.php");

$result = mysql_query ("update meeting set meeting_theme = '".$_POST['meetingTheme']."',
	meeting_content =  '".$_POST['meetingContent']."', meeting_address = '".$_POST['meetingAddress']."',  
	meeting_start = '".$_POST['meetingStart']."', meeting_end = '".$_POST['meetingEnd']."' 
	where meeting_id = '".$_POST['meetingId']."'");
	 
	 
	 if ( $result ) {
	 	echo "<script>alert('会议信息修改成功！');window.location.href='main.php';</script>";
  	} else {
		echo "<script>alert('会议信息修改失败');history.back();</script>";
	}

?>