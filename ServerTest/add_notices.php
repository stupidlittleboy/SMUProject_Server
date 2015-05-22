<?php session_start(); 
include("../conn/conn.php");
header("Content-type: text/html; charset=utf-8"); 
if($_SESSION['username']==true){
?>

<html>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>添加公告信息</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

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
	$('#noticeDate').date();
});
</script>
		
		<!--  判断输入的值是否为空 -->
<script language="javascript">
  function chkinput(form){
  
    if(form.noticeTheme.value==""){
        alert("请输入公告主题！");
        form.noticeTheme.select();
        return(false);
    }
    if(form.noticeContent.value==""){
          alert("请输入公告内容！");
	  form.noticeContent.select();
	  return(false);
	}
	if(form.noticeDate.value==""){
          alert("请输入发布日期！");
	  form.noticeDate.select();
	  return(false);
	}
   return(true);
  }

</script>

    </head>

    <body>

        <div class="page-container">
            <h1>添加公告信息</h1>
            <form action="add_notices.class.php" method="post" onsubmit="return chkinput(this)">
                <input type="text" name="noticeTheme" class="noticeTheme" placeholder="请输入公告主题！">
                <input type="text" name="noticeContent" class="noticeContent" placeholder="请输入公告内容！">
                <input type="text" id="noticeDate" name="noticeDate" class="noticeDate" placeholder="请输入发布日期！">
                <button type="submit" class="submit_button">发布</button>
                <button type="reset" class="register_button">重置</button>
                <div class="error"><span>+</span></div>
            </form>            
        </div>
        <div id="datePlugin"></div>
    </body>

</html>

<?php 
}else{
echo "<script>alert('请您正确登录！'); window.location.href='index.php';</script>";
}

?>