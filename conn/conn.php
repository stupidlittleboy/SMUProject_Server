<?php
$conn = mysql_connect("localhost", "root", "111") or die(mysql_error());
mysql_select_db("projectforsmu", $conn);
mysql_query("set names 'utf-8'");
?>