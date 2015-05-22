<?php
include("conn/conn.php");
include ("json_decode.php");

// $json=$_GET ['json'];
$json = file_get_contents ( 'php://input' );
$obj = json_decode ( $json );

$result = mysql_query ( "select emp_password from emp_info where emp_no = '".$obj->{'empNo'}."' and 
	emp_phone_no = '".$obj->{'phoneNo'}."' and emp_identify = '".$obj->{'identify'}."'" );

header ( 'Content-type: application/json;charset=UTF-8' );

if ($row = mysql_fetch_assoc ( $result )) {
	$response = $row;
}

echo JSON($response);
mysql_close ( $conn );

?>