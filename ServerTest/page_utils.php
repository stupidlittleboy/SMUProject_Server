<?php

function page_head($Page_size=2, $table){
 
$result=mysql_query("select * from ".$table);   
$count = mysql_num_rows($result);   

$offset = page_head($Page_size,$count);
$page_count = ceil($count/$Page_size);   
  
$init=1;   
$page_len=7;   
$max_p=$page_count;   
$pages=$page_count;   
  
//判断当前页码   
if(empty($_GET['page'])||$_GET['page']<0){   
$page=1;   
}else {   
$page=$_GET['page'];   
}   
  
$offset=$Page_size*($page-1);   
$sql="select * from ".$table." limit $offset,$Page_size";   
$result=mysql_query($sql);
return $result;
}