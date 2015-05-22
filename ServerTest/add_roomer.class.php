<?php
header("Content-type: text/html; charset=utf-8");
session_start();
//Jpush功能
require_once 'vendor/autoload.php';

use JPush\Model as M;
use JPush\JPushClient;
use JPush\Exception\APIConnectionException;
use JPush\Exception\APIRequestException;

$app_key = $_SESSION['app_key'];
$master_secret = $_SESSION['master_secret'];

include ("../conn/conn.php");

$result = mysql_query ("insert into roomer_info (roomer_no, roomer_name, roomer_sex, roomer_phone_no,
	 roomer_email, roomer_house_no, roomer_date, roomer_period, roomer_rent, roomer_complete) 
	 values ('".$_POST['roomerNo']."', '".$_POST['roomerName']."', '".$_POST['roomerSex']."',
	 '".$_POST['roomerPhoneNo']."', '".$_POST['roomerEmail']."', '".$_POST['roomerHouseNo']."',
	  '".$_POST['roomerDate']."',	 '".$_POST['roomerPeriod']."', '".$_POST['roomerRent']."', '0')");
	 
	 if ( $result ) {
		$client = new JPushClient($app_key, $master_secret);

		$result = $client->push()
    ->setPlatform(M\all)
    ->setAudience(M\all)
    ->setNotification(M\notification('有新客户发布了需求，请及时查看！'))
    ->send();
	 	echo "<script>alert('客户需求添加成功！');window.location.href='main.php';</script>";
	} else {
		echo "<script>alert('客户需求添加失败，请稍候再试！');history.back();</script>";
	}

?>