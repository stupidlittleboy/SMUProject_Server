<?php
include("conn/conn.php");
include ("json_decode.php");

// $json=$_GET ['json'];
$json = file_get_contents ( 'php://input' );
$obj = json_decode ( $json );

$result = mysql_query ( "select * from emp_info where emp_password='" . $obj->{'PassWord'} . "' and emp_nickname='" . $obj->{'UserName'} . "' 
	or emp_no ='" . $obj->{'UserName'} . "' or emp_phone_no='" . $obj->{'UserName'} . "'" );

header ( 'Content-type: application/json;charset=UTF-8' );

if (mysql_num_rows ( $result ) < 1) {
	$response ["success"] = 0;
	$response ["message"] = "登陆失败";
} else {
	$response ["success"] = 1;
	$response ["message"] = "登陆成功";
}

echo JSON($response);
mysql_close ( $conn );

?>