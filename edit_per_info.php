<?php
include("conn/conn.php");
include ("json_decode.php");

// $json=$_GET ['json'];
$json = file_get_contents ( 'php://input' );
$obj = json_decode ( $json );

$result = mysql_query ( "update emp_info set emp_nickname = '".$obj->{'nickname'}."', emp_name = '".$obj->{'name'}."', 
	emp_sex = '".$obj->{'sex'}."', emp_age = '".$obj->{'age'}."', emp_phone_no = '".$obj->{'phoneNo'}."',
	emp_email = '".$obj->{'email'}."', emp_borthday = '".$obj->{'birthday'}."', emp_nation = '".$obj->{'nation'}."',
	emp_city = '".$obj->{'city'}."', emp_address = '".$obj->{'address'}."' where emp_no = '".$obj->{'empNo'}."'" );

header ( 'Content-type: application/json;charset=UTF-8' );

if (mysql_num_rows ( $result ) < 1) {
	$response ["success"] = 1;
} else {
	$response ["success"] = 0;
}

echo JSON($response);
mysql_close ( $conn );

?>