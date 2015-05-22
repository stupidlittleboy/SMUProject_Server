<?php
header("Content-type: text/html; charset=utf-8");
session_start();
include ("../conn/conn.php");

$result = mysql_query ("update house_info set house_type = '".$_POST['houseType']."', house_area = '".$_POST['houseArea']."',
	 house_price = '".$_POST['housePirce']."', house_flag = '".$_POST['houseFlag']."',
	 house_city = '".$_POST['houseCity']."', house_address = '".$_POST['houseAddress']."', 
	 house_green_rating = '".$_POST['greenRating']."', house_property = '".$_POST['houseProperty']."',
	 house_owner_name = '".$_POST['ownerName']."', house_owner_phone_no = '".$_POST['ownerPhoneNo']."' 
	 where house_no = '".$_POST['houseNo']."'") or die(mysql_error());
	 
	 if ( $result ) {
	 	echo "<script>alert('房源信息修改成功！');window.location.href='main.php';</script>";
	} else {
		echo "<script>alert('房源信息修改失败,请稍候再试！');history.back();</script>";
	}

?>