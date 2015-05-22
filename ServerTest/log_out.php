<?php
session_start();
header("Content-type: text/html; charset=utf-8"); 
echo $_SESSION['username'];
session_destroy();
echo "<script>window.location.href='index.php';</script>";
?>
