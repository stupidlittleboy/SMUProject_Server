<?php
include ("conn/conn.php");
include ("json_decode.php");

$json = $_GET ['json'];
$json = file_get_contents ( 'php://input' );
$obj = json_decode ( $json );

$result = mysql_query ( "select emp_name, emp_no, emp_phone_no, emp_department from 
	emp_info where emp_name is not null and emp_name <> ''  and emp_phone_no is not null 
	and emp_phone_no <> '' order by emp_department" );

header ( 'Content-type: application/json;charset=UTF-8' );

//ѭ����ȡ����
while ( $row = mysql_fetch_assoc ( $result ) ) {
	$response []  = $row;
}

//����json_decode�еĺ����������е�����ת����utf-8��ʽ
echo JSON($response);


mysql_close ( $conn );
?>
