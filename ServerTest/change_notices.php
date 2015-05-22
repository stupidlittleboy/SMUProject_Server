<?php session_start(); 
header("Content-type: text/html; charset=utf-8"); 
include("../conn/conn.php");
if($_SESSION['username']==true){
	if($_POST['change']){
	$result = mysql_query ( "select * from notice where notice_id = '".$_POST['notice_id']."'" );
?>

<html>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>修改公告信息</title>
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
            <h1>修改公告信息</h1>
            <?php while ( $row = mysql_fetch_array($result)) { ?>
            <form action="change_notices.class.php" method="post" onsubmit="return chkinput(this)">
            	<input type="hidden" name="noticeId" value="<?php echo $row['notice_id'] ?>"/>
                <input type="text" name="noticeTheme" class="noticeTheme" placeholder="请输入公告主题！" value="<?php echo $row['notice_theme'] ?>">
                <input type="text" name="noticeContent" class="noticeContent" placeholder="请输入公告内容！" value="<?php echo $row['notice_content'] ?>">
                <input type="text" id="noticeDate" name="noticeDate" class="noticeDate" placeholder="请输入发布日期！" value="<?php echo $row['notice_date'] ?>">
                <button type="submit" class="submit_button">确认修改</button>
                <div class="error"><span>+</span></div>
            </form>   
          <?php } ?>         
        </div>
        <div id="datePlugin"></div>
    </body>

</html>

<?php 
} else {
	$result = mysql_query("delete from notice where notice_id = '".$_POST['notice_id']."'");
	if ( $result ) {
	 	echo "<script>alert('员工信息删除成功！');window.location.href='main.php';</script>";
  	} else {
		echo "<script>alert('员工信息删除失败！');history.back();</script>";
	}
}
}else{
echo "<script>alert('请您正确登录！'); window.location.href='index.php';</script>";
}

?>