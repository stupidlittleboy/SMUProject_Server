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
        <title>添加会议信息</title>
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
	$('#meetingStart').date({theme:"datetime"});
	$('#meetingEnd').date({theme:"datetime"});
});
</script>
<script language="javascript">
  function chkinput(form){
  
    if(form.meetingTheme.value==""){
        alert("请输入会议主题!");
        form.meetingTheme.select();
        return(false);
    }
    if(form.meetingContent.value==""){
          alert("请输入会议内容!");
	  form.meetingContent.select();
	  return(false);
	}
	if(form.meetingAddress.value==""){
          alert("请输入开会地址!");
	  form.meetingAddress.select();
	  return(false);
	}
	if(form.meetingStart.value==""){
          alert("请输入会议开始时间!");
	  form.meetingStart.select();
	  return(false);
	}
	if(form.meetingEnd.value==""){
          alert("请输入会议结束时间!");
	  form.meetingEnd.select();
	  return(false);
	}
   return(true);
  }

</script>

    </head>

    <body>

        <div class="page-container">
            <h1>添加会议信息</h1>
            <form action="add_meeting.class.php" method="post" onsubmit="return chkinput(this)">
                <input type="text" name="meetingTheme" class="meetingTheme" placeholder="请输入会议主题！">
                <input type="text" name="meetingContent" class="meetingContent" placeholder="请输入会议内容！">
                <input type="text" name="meetingAddress" class="meetingAddress" placeholder="请输入开会地址！">
								<input type="text" id="meetingStart" name="meetingStart" class="meetingStart" placeholder="请输入会议开始时间！">
								<input type="text" id="meetingEnd" name="meetingEnd" class="meetingEnd" placeholder="请输入会议结束时间！">
                <button type="submit" class="submit_button">确认</button>
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