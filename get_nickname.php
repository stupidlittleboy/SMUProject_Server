<?php
include ("conn/conn.php");
include ("json_decode.php");

$json = $_GET ['json'];
$json = file_get_contents ( 'php://input' );
$obj = json_decode ( $json );

$result = mysql_query ( "select emp_nickname, emp_no from emp_info where emp_nickname = '".$obj->{'userName'}."' 
	or emp_phone_no='".$obj->{'userName'}."'	or emp_no='".$obj->{'userName'}."'" );

header ( 'Content-type: application/json;charset=UTF-8' );

//ѭ����ȡ����
while ( $row = mysql_fetch_assoc ( $result ) ) {
	$response  = $row;
}

//����json_decode�еĺ����������е�����ת����utf-8��ʽ
echo JSON($response);


mysql_close ( $conn );
?>
