<?php

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>大气实用jQuery手机移动端日历日期选择插件 - JS代码网</title>

<!-- CSS -->
<link href="css/common.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="assets/css/reset.css">
<link rel="stylesheet" href="assets/css/supersized.css">
<link rel="stylesheet" href="assets/css/style.css">

<!-- Javascript -->
<script type="text/javascript" src="js/jquery-1.9.1.js" ></script>
<script type="text/javascript" src="js/date.js" ></script>
<script type="text/javascript" src="js/iscroll.js" ></script>
<script src="assets/js/supersized.3.2.7.min.js" ></script>
<script src="assets/js/supersized-init.js" ></script>
<script type="text/javascript">
$(function(){
	$('#position').date();
	$('#endTime').date({theme:"datetime"});
});
</script></head>
<body>   
<div>
	<h1>添加员工信息</h1>
            <form action="add_emp.class.php" method="post" onsubmit="return chkinput(this)">
	<div class="lie">日期设置-1:<input  id="beginTime" class="kbtn" /></div>
	<div class="lie">日期设置-2:<input id="endTime" class="kbtn" /></div>
	<input type="text" id="position" class="position" placeholder="请输入员工职位！">
</form>
</div>
<div id="datePlugin"></div>
</body>
</html>



