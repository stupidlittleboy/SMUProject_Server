<?php
include ("conn/conn.php");
include ("json_decode.php");

$json = $_GET ['json'];
$json = file_get_contents ( 'php://input' );
$obj = json_decode ( $json );

if ( empty ( $obj->{'empNo'} ) ){

	$result = mysql_query ( "select roomer_info.*,house_city, house_address from roomer_info, 
		house_info where roomer_info.roomer_house_no = house_info.house_no and roomer_emp_no is null 
		or roomer_emp_no = '' order by roomer_date desc, roomer_period asc" );
} else {
	$result = mysql_query ( "select roomer_info.*,house_city, house_address from roomer_info, 
		house_info where roomer_info.roomer_house_no = house_info.house_no and roomer_emp_no = '".$obj->{'empNo'}."'
		order by roomer_date desc, roomer_period asc" );
}

header ( 'Content-type: application/json;charset=UTF-8' );

//ѭ����ȡ����
while ( $row = mysql_fetch_assoc ( $result ) ) {
	$response [] = $row;
}

//����json_decode�еĺ����������е�����ת����utf-8��ʽ
echo JSON($response);


mysql_close ( $conn );
?>
