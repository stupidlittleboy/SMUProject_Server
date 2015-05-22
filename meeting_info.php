<?php
include ("conn/conn.php");
include ("json_decode.php");

$json = $_GET ['json'];
$json = file_get_contents ( 'php://input' );
$obj = json_decode ( $json );

$result = mysql_query ( "select * from meeting order by meeting_start desc" );

header ( 'Content-type: application/json;charset=UTF-8' );

//循环获取数据
while ( $row = mysql_fetch_assoc ( $result ) ) {
	$response[]  = $row;
}

//调用json_decode中的函数将数据中的中文转换成utf-8格式
echo JSON($response);

mysql_close ( $conn );
?>
