<?php
header("Content-type: text/html; charset=utf-8");
session_start();

include ("../conn/conn.php");


$result = mysql_query ("update roomer_info set roomer_name = '".$_POST['roomerName']."', 
 roomer_sex = '".$_POST['roomerSex']."', roomer_phone_no = '".$_POST['roomerPhoneNo']."',
	 roomer_email = '".$_POST['roomerEmail']."', roomer_house_no = '".$_POST['roomerHouseNo']."',
	  roomer_date = '".$_POST['roomerDate']."', roomer_period = '".$_POST['roomerPeriod']."',
	   roomer_rent = '".$_POST['roomerRent']."'	where roomer_no = '".$_POST['roomerNo']."'")
	    or die(mysql_error());
	 
	 if ( $result ) {
		
	 	echo "<script>alert('客户信息修改成功！');window.location.href='main.php';</script>";
	} else {
		echo "<script>alert('客户信息修改失败！');history.back();</script>";
	}

?>