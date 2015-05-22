<?php
header("Content-type: text/html; charset=utf-8");
session_start();
include ("../conn/conn.php");

$result = mysql_query ("insert into house_info (house_no, house_type, house_area,
	 house_price, house_flag, house_city, house_address, house_green_rating, house_property, 
	 house_owner_name, house_owner_phone_no) 
	 values ('".$_POST['houseNo']."', '".$_POST['houseType']."', '".$_POST['houseArea']."',
	 '".$_POST['housePirce']."', '".$_POST['houseFlag']."', '".$_POST['houseCity']."', 
	 '".$_POST['houseAddress']."', '".$_POST['greenRating']."', '".$_POST['houseProperty']."',
	  '".$_POST['ownerName']."', '".$_POST['ownerPhoneNo']."')");
	 
	 if ( $result ) {
	 	echo "<script>alert('房源信息添加成功！');window.location.href='main.php';</script>";
	} else {
		echo "<script>alert('房源信息添加失败,请稍候再试！');history.back();</script>";
	}

?>