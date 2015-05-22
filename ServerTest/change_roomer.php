<?php session_start(); 
header("Content-type: text/html; charset=utf-8"); 
include("../conn/conn.php");
if($_SESSION['username']==true){
	if($_POST['change']){
	$result = mysql_query("select * from roomer_info where roomer_no = '".$_POST['roomer_no']."'") or die(mysql_error());
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>修改员工信息</title>

<html>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>修改房源信息</title>
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
	$('#roomerDate').date();
});
</script>
		
		<!--  判断输入的值是否为空 -->
<script language="javascript">
  function chkinput(form){
  
    if(form.roomerNo.value==""){
        alert("请输入房客编号！");
        form.roomerNo.select();
        return(false);
    }
    if(form.roomerName.value==""){
          alert("请输入房客姓名！");
	  form.roomerName.select();
	  return(false);
	}
	if(form.roomerSex.value==""){
          alert("请输入房客性别！");
	  form.roomerSex.select();
	  return(false);
	}
	if(form.roomerPhoneNo.value==""){
          alert("请输入房客联系方式！");
	  form.roomerPhoneNo.select();
	  return(false);
	}
	if(form.roomerEmail.value==""){
          alert("请输入房客邮箱！");
	  form.roomerEmail.select();
	  return(false);
	}
	if(form.roomerHouseNo.value==""){
          alert("请输入房源编号！");
	  form.roomerHouseNo.select();
	  return(false);
	}
	if(form.roomerDate.value==""){
          alert("请输入看房日期！");
	  form.roomerDate.select();
	  return(false);
	}
	if(form.roomerPeriod.value==""){
          alert("请输入看房时间段！");
	  form.roomerPeriod.select();
	  return(false);
	}
	if(form.roomerRent.value==""){
          alert("请输入房客需求！");
	  form.roomerRent.select();
	  return(false);
	}
	if(form.ownerPhoneNo.value==""){
          alert("请输入房东联系方式！");
	  form.ownerPhoneNo.select();
	  return(false);
	}
   return(true);
  }

</script>

    </head>

    <body>

        <div class="page-container">
            <h1>添加房源信息</h1>
            <?php while ( $row = mysql_fetch_array($result) ) {  ?>
            <form action="change_roomer.class.php" method="post" onsubmit="return chkinput(this)">
                <input type="text" name="roomerNo" class="roomerNo" value="<?php echo $row['roomer_no'] ?>" placeholder="请输入房客编号！" readonly="readonly">
                <input type="text" name="roomerName" class="roomerName" placeholder="请输入房客姓名！" value="<?php echo $row['roomer_name'] ?>">
                <input type="text" name="roomerSex" class="roomerSex" placeholder="请输入房客性别！" value="<?php echo $row['roomer_sex'] ?>">
								<input type="text" name="roomerPhoneNo" class="roomerPhoneNo" placeholder="请输入房客联系方式！" value="<?php echo $row['roomer_phone_no'] ?>">
								<input type="text" name="roomerEmail" class="roomerEmail" placeholder="请输入房客邮箱！" value="<?php echo $row['roomer_email'] ?>">
								<input type="text" name="roomerHouseNo" class="roomerHouseNo" placeholder="请输入房源编号！" value="<?php echo $row['roomer_house_no'] ?>">
								<input type="text" id="roomerDate" name="roomerDate" class="roomerDate" placeholder="请输入看房日期！" value="<?php echo $row['roomer_date'] ?>">
								<input type="text" name="roomerPeriod" class="roomerPeriod" placeholder="请输入看房时间段—1,2,3,4！" value="<?php echo $row['roomer_period'] ?>">
								<input type="text" name="roomerRent" class="roomerRent" placeholder="请输入房客需求—0：租，1：买！" value="<?php echo $row['roomer_rent'] ?>">
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
	$result = mysql_query("delete from roomer_info where roomer_no = '".$_POST['roomer_no']."'");
	if ( $result ) {
	 	echo "<script>alert('客户信息删除成功！');window.location.href='main.php';</script>";
  	} else {
		echo "<script>alert('客户信息删除失败！');history.back();</script>";
	}
}
}else{
echo "<script>alert('请您正确登录！'); window.location.href='index.php';</script>";
}

?>