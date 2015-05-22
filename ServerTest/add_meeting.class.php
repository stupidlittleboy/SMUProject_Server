<?php
header("Content-type: text/html; charset=utf-8");
session_start();

require_once 'vendor/autoload.php';

use JPush\Model as M;
use JPush\JPushClient;
use JPush\Exception\APIConnectionException;
use JPush\Exception\APIRequestException;

$app_key = $_SESSION['app_key'];
$master_secret = $_SESSION['master_secret'];

include ("../conn/conn.php");

$result = mysql_query ("insert into meeting values (null, '".$_POST['meetingTheme']."',
	 '".$_POST['meetingContent']."', '".$_POST['meetingAddress']."',  '".$_POST['meetingStart']."',
	  '".$_POST['meetingEnd']."')");
	 
	 
	 if ( $result ) {
	 	echo "<script>alert('会议信息添加成功！');window.location.href='main.php';</script>";
	 	$client = new JPushClient($app_key, $master_secret);

		$result = $client->push()
    ->setPlatform(M\all)
    ->setAudience(M\all)
    ->setNotification(M\notification('有新的会议发布，请及时查看！'))
    ->send();
	} else {
		echo "<script>alert('会议信息添加失败');history.back();</script>";
	}

?>