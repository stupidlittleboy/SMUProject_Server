<?php session_start(); 
header("Content-type: text/html; charset=utf-8"); 
include("../conn/conn.php");
if($_SESSION['username']==true){
	if($_POST['change']){
	$result = mysql_query ( "select * from meeting where meeting_id = '".$_POST['meeting_id']."'" ) or die(mysql_error());
?>

<html>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>修改会议信息</title>
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
            <h1>修改会议信息</h1>
            <?php while ($row = mysql_fetch_array( $result )) {?>
            <form action="change_meeting.class.php" method="post" onsubmit="return chkinput(this)">
            	<input type="hidden" name="meetingId" value="<?php echo $row['meeting_id'] ?>"/>
                <input type="text" name="meetingTheme" class="meetingTheme" placeholder="请输入会议主题！" value="<?php echo $row['meeting_theme']?>"/>
                <input type="text" name="meetingContent" class="meetingContent" placeholder="请输入会议内容！" value="<?php echo $row['meeting_content']?>">
                <input type="text" name="meetingAddress" class="meetingAddress" placeholder="请输入开会地址！" value="<?php echo $row['meeting_address']?>">
								<input type="text" id="meetingStart" name="meetingStart" class="meetingStart" placeholder="请输入会议开始时间！" value="<?php echo $row['meeting_start']?>">
								<input type="text" id="meetingEnd" name="meetingEnd" class="meetingEnd" placeholder="请输入会议结束时间！" value="<?php echo $row['meeting_end']?>">
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
	$result = mysql_query("delete from meeting where meeting_id = '".$_POST['meeting_id']."'");
	if ( $result ) {
	 	echo "<script>alert('会议信息删除成功！');window.location.href='main.php';</script>";
  	} else {
		echo "<script>alert('会议信息删除失败！');history.back();</script>";
	}
}
}else{
echo "<script>alert('请您正确登录！'); window.location.href='index.php';</script>";
}

?>