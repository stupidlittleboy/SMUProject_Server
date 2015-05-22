<?php session_start(); 
include("../conn/conn.php");
header("Content-type: text/html; charset=utf-8"); 
if($_SESSION['username']==true){
	if($_POST['change']){
	$result = mysql_query ("select * from house_info where house_no = '".$_POST['house_no']."'") or die(mysql_error());
?>

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
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/supersized.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="assets/js/html5.js"></script>
        <![endif]-->
		
		<!--  判断输入的值是否为空 -->
<script language="javascript">
  function chkinput(form){
  
    if(form.houseNo.value==""){
        alert("请输入房源编号！");
        form.houseNo.select();
        return(false);
    }
    if(form.houseType.value==""){
          alert("请输入房子类型！");
	  form.houseType.select();
	  return(false);
	}
	if(form.houseArea.value==""){
          alert("请输入房子面积！");
	  form.houseArea.select();
	  return(false);
	}
	if(form.houseFlag.value==""){
          alert("请输入租售标识！");
	  form.houseFlag.select();
	  return(false);
	}
	if(form.housePirce.value==""){
          alert("请输入租售价格！");
	  form.housePirce.select();
	  return(false);
	}
	if(form.houseCity.value==""){
          alert("请输入房子所在城市！");
	  form.houseCity.select();
	  return(false);
	}
	if(form.houseAddress.value==""){
          alert("请输入房子的详细地址！");
	  form.houseAddress.select();
	  return(false);
	}
	if(form.greenRating.value==""){
          alert("请输入小区绿化面积！");
	  form.greenRating.select();
	  return(false);
	}
	if(form.houseProperty.value==""){
          alert("请输入小区物业！");
	  form.houseProperty.select();
	  return(false);
	}
	if(form.ownerName.value==""){
          alert("请输入房东姓名！");
	  form.ownerName.select();
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
            <h1>修改房源信息</h1>
            <?php while ($row = mysql_fetch_array($result)) {?>
            <form action="change_house.class.php" method="post" onsubmit="return chkinput(this)">
                <input type="text" name="houseNo" class="houseNo" placeholder="请输入房源编号！" value="<?php echo $row['house_no'] ?>" readonly="readonly">
                <input type="text" name="houseType" class="houseType" placeholder="请输入房子类型！" value="<?php echo $row['house_type'] ?>">
                <input type="text" name="houseArea" class="houseArea" placeholder="请输入房子面积！"  value="<?php echo $row['house_area'] ?>">
								<input type="text" name="housePirce" class="housePirce" placeholder="请输入租售价格！" value="<?php echo $row['house_price'] ?>">
								 <input type="text" name="houseFlag" class="houseFlag" placeholder="请输入租售标识—0：租，1：售！" value="<?php echo $row['house_flag'] ?>">
								<input type="text" name="houseCity" class="houseCity" placeholder="请输入房子所在城市！" value="<?php echo $row['house_city'] ?>">
								<input type="text" name="houseAddress" class="houseAddress" placeholder="请输入房子的详细地址！" value="<?php echo $row['house_address'] ?>">
								<input type="text" name="greenRating" class="greenRating" placeholder="请输入小区绿化面积！" value="<?php echo $row['house_green_rating'] ?>">
								<input type="text" name="houseProperty" class="houseProperty" placeholder="请输入小区物业！" value="<?php echo $row['house_property'] ?>">
								<input type="text" name="ownerName" class="ownerName" placeholder="请输入房东姓名！" value="<?php echo $row['house_owner_name'] ?>">
								<input type="text" name="ownerPhoneNo" class="ownerPhoneNo" placeholder="请输入房东联系方式！" value="<?php echo $row['house_owner_phone_no'] ?>">
                <button type="submit" class="submit_button">确认修改</button>
                <div class="error"><span>+</span></div>
            </form>
            <?php } ?>
        </div>
		
        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js" ></script>
        <script src="assets/js/supersized.3.2.7.min.js" ></script>
        <script src="assets/js/supersized-init.js" ></script>
        <script src="assets/js/scripts.js" ></script>

    </body>

</html>

<?php 
} else {
	$result = mysql_query("delete from house_info where house_no = '".$_POST['house_no']."'");
	if ( $result ) {
	 	echo "<script>alert('房源信息删除成功！');window.location.href='main.php';</script>";
  	} else {
		echo "<script>alert('房源信息删除失败');history.back();</script>";
	}
}
}else{
echo "<script>alert('请您正确登录！'); window.location.href='index.php';</script>";
}

?>