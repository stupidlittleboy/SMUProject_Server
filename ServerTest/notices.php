<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml">   
<head>   
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
<title>公告信息</title>   
<style type="text/CSS">   
<!--   
.page a:link {   
color: #0000FF;   
text-decoration: none;   
}   
.page a:visited {   
text-decoration: none;   
color: #0000FF;   
}   
.page a:hover {   
text-decoration: none;   
color: #0000FF;   
}   
.page a:active {   
text-decoration: none;   
color: #0000FF;   
}   
.page{color:#0000FF;}   
-->   
</style>   

<script type="text/javascript">
	function click_button(button) {
		window.location.href='add_notices.php';;
	}
	</script>
</head>   
<body>   
	<h1 align="center">公告信息</h1>
	<div   align="right"><button type="submit" name="add" onclick="click_button(this)"> 添加公告信息 </button></div>
<table width="100%" height="auto" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">   
<tr>   
<th width="10%" height="38" bgcolor="#E3E3E3" scope="col">公告主题</th>   
<th width="40%" bgcolor="#E3E3E3" scope="col">公告内容</th>   
<th width="20%" bgcolor="#E3E3E3" scope="col">发布员工</th>
<th width="10%" bgcolor="#E3E3E3" scope="col">发布日期</th>
<th width="10%" bgcolor="#E3E3E3" scope="col">操作</th>
</tr>   
<?php   
/*  
* Created on 2010-4-17  
*  
* Order by Kove Wong  
*/   
include "../conn/conn.php";
  
$Page_size=5;   
  
$result=mysql_query('select * from notice order by notice_date');   
$count = mysql_num_rows($result);   
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
$sql="select * from notice limit $offset,$Page_size";   
$result=mysql_query($sql);   
while ($row=mysql_fetch_array($result)) {   
?>   
<form action="change_notices.php" method="post">
<tr>   
<td bgcolor="#E0EEE0" height="25px"><div align="center">  
	<input type="hidden" name="notice_id" value="<?php echo $row['notice_id'] ?>"/>
<?php echo $row['notice_theme']?>   
</div></td>   
<td bgcolor="#E0EEE"><div align="center">   
<?php echo $row['notice_content']?>   
</div></td>   
<td bgcolor="#E0EEE"><div align="center">   
<?php echo $row['notice_emp_no']?>   
</div></td> 
<td bgcolor="#E0EEE"><div align="center">   
<?php echo $row['notice_date']?>   
</div></td> 
<td bgcolor="#E0EEE"><div align="center">   
<input type="submit" name="change" value="修改">
<input type="submit" name="delete" value="删除">
</div></td> 
</tr>   
</form>
<?php   
}   
$page_len = ($page_len%2)?$page_len:$pagelen+1;//页码个数   
$pageoffset = ($page_len-1)/2;//页码个数左右偏移量   
  
$key='<div class="page">';   
$key.="<span>$page/$pages</span> "; //第几页,共几页   
if($page!=1){   
$key.="<a href=\"".$_SERVER['PHP_SELF']."?page=1\">第一页</a> "; //第一页   
$key.="<a href=\"".$_SERVER['PHP_SELF']."?page=".($page-1)."\">上一页</a>"; //上一页   
}else {   
$key.="第一页 ";//第一页   
$key.="上一页"; //上一页   
}   
if($pages>$page_len){   
//如果当前页小于等于左偏移   
if($page<=$pageoffset){   
$init=1;   
$max_p = $page_len;   
}else{//如果当前页大于左偏移   
//如果当前页码右偏移超出最大分页数   
if($page+$pageoffset>=$pages+1){   
$init = $pages-$page_len+1;   
}else{   
//左右偏移都存在时的计算   
$init = $page-$pageoffset;   
$max_p = $page+$pageoffset;   
}   
}   
}   
for($i=$init;$i<=$max_p;$i++){   
if($i==$page){   
$key.=' <span>'.$i.'</span>';   
} else {   
$key.=" <a href=\"".$_SERVER['PHP_SELF']."?page=".$i."\">".$i."</a>";   
}   
}   
if($page!=$pages&&$pages!=0){   
$key.=" <a href=\"".$_SERVER['PHP_SELF']."?page=".($page+1)."\">下一页</a> ";//下一页   
$key.="<a href=\"".$_SERVER['PHP_SELF']."?page={$pages}\">最后一页</a>"; //最后一页   
}else {   
$key.="下一页 ";//下一页   
$key.="最后一页"; //最后一页   
}   
$key.='</div>';   
?>   
<tr>   
<td colspan="6" height="30"  bgcolor="#E0EEE0"><div align="center"><?php echo $key?></div></td>   
</tr>   
</table>   
</body>   
</html>   