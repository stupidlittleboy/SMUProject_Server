<?php
include ("conn/conn.php");
include ("json_decode.php");

$json = $_GET ['json'];
$json = file_get_contents ( 'php://input' );
$obj = json_decode ( $json );


$result = mysql_query ( "update roomer_info set roomer_emp_no = null where roomer_no = '".$obj->{'roomerNo'}."'" );

$result1 = mysql_query ( "update house_info set house_emp_no = null where house_no = '".$obj->{'roomerHouseNo'}."'" );

header ( 'Content-type: application/json;charset=UTF-8' );

//ѭ����ȡ����

if ( $result && $result1 ){
	$response ["success"] = 1;
} else {
	$response ["success"] = 0;
}

//����json_decode�еĺ����������е�����ת����utf-8��ʽ
echo JSON($response);


mysql_close ( $conn );
?>
