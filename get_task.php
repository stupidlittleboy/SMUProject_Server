<?php
include ("conn/conn.php");
include ("json_decode.php");

$json = $_GET ['json'];
$json = file_get_contents ( 'php://input' );
$obj = json_decode ( $json );

$result1 = mysql_query ( "select emp_no from emp_info where emp_no = '".$obj->{'userName'}."'
	or emp_phone_no = '".$obj->{'userName'}."' or emp_nickname = '".$obj->{'userName'}."'" );
$row1 = mysql_fetch_array( $result1 );

$result = mysql_query ( "update roomer_info set roomer_emp_no = '".$row1[0]."' where roomer_no = '".$obj->{'roomerNo'}."'" );
$result2 = mysql_query ( "update house_info set house_emp_no = '".$row1[0]."' where house_no = '".$obj->{'roomerHouseNo'}."'" );

header ( 'Content-type: application/json;charset=UTF-8' );

//ѭ����ȡ����

if ( $result && $result2 ){
	$response ["success"] = 1;
	$response ["emp_no"] = $row1[0];
} else {
	$response ["success"] = 0;
	$response ["emp_no"] = $row1[0];
}

//����json_decode�еĺ����������е�����ת����utf-8��ʽ
echo JSON($response);


mysql_close ( $conn );
?>
