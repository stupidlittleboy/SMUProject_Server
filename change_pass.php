<?php
include("conn/conn.php");
include ("json_decode.php");

// $json=$_GET ['json'];
$json = file_get_contents ( 'php://input' );
$obj = json_decode ( $json );

$result = mysql_query ( "update emp_info set emp_password = '".$obj->{'newPass'}."' where
 emp_password='" . $obj->{'oldPass'} . "' and emp_nickname='" . $obj->{'userName'} . "' 
 or emp_no ='" . $obj->{'userName'} . "' or emp_phone_no='" . $obj->{'userName'} . "'" );

header ( 'Content-type: application/json;charset=UTF-8' );

if ($result) {
	$response ["success"] = 1;
} else {
	$response ["success"] = 0;
}

echo JSON($response);
mysql_close ( $conn );

?>