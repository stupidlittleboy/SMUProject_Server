<?php
include("conn/conn.php");
// $json=$_GET ['json'];
$json = file_get_contents ( 'php://input' );
$obj = json_decode ( $json );
// echo $json;
// Save

$result = mysql_query ( "update emp_info set emp_nickname = '".$obj->{'empNickname'}."', 
	emp_name = '".$obj->{'empName'}."', emp_phone_no = '".$obj->{'empPhoneNo'}."',
	emp_password = '".$obj->{'pass'}."' where emp_no = '".$obj->{'empNo'}."'" );
	

if ($result) {
	$response ["success"] = 1;
} else {
	$response ["success"] = 0;
}

header ( 'Content-type: application/json' );
echo json_encode ( $response );
mysql_close ( $conn );

?>