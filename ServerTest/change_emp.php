<?php session_start(); 
header("Content-type: text/html; charset=utf-8"); 
include("../conn/conn.php");
if($_SESSION['username']==true){
	if($_POST['change']){
	$result = mysql_query ( "select * from emp_info where emp_no = '".$_POST['emp_no']."'" ) or die(mysql_error());
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>修改员工信息</title>
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
	$('#entrydate').date();
	$('#endTime').date({theme:"datetime"});
});
</script>
		
		<!--  判断输入的值是否为空 -->
<script language="javascript">
  function chkinput(form){
  
    if(form.empno.value==""){
        alert("请输入用户名!");
        form.empno.select();
        return(false);
    }
    if(form.department.value==""){
          alert("请输入员工所属部门!");
	  form.department.select();
	  return(false);
	}
	if(form.position.value==""){
          alert("请输入员工职位!");
	  form.position.select();
	  return(false);
	}
	if(form.entrydate.value==""){
          alert("请输入员工入职日期!");
	  form.entrydate.select();
	  return(false);
	}
	if(form.identify.value==""){
          alert("请输入员工身份证号!");
	  form.identify.select();
	  return(false);
	}
   return(true);
  }
</script>

    </head>

    <body>

        <div class="page-container">
            <h1>修改员工信息</h1>
           <?php while ( $row = mysql_fetch_array($result) ) {  ?>
            <form action="change_emp.class.php" method="post" onsubmit="return chkinput(this)" >
                <input type="text" name="empno" class="empno" placeholder="请输入员工工号！" value="<?php echo $row['emp_no'] ?>" readonly="readonly">
                <input type="text" name="department" class="department" placeholder="请输入员工所属部门！" value="<?php echo $row['emp_department'] ?>">
                <input type="text" name="position" class="position" placeholder="请输入员工职位！" value="<?php echo $row['emp_position'] ?>">
								<input id="entrydate" name="entrydate" class="entrydate" placeholder="请输入员工入职日期！" value="<?php echo $row['emp_entry_date'] ?>">
								<input type="text" name="identify" class="identify" placeholder="请输入员工身份证号！" value="<?php echo $row['emp_identify'] ?>">
                <button type="submit" class="submit_button">确认修改</button>
                <div class="error"><span>+</span></div>
            </form>
          <?php }  ?>
        </div>
        <div id="datePlugin"></div>
	    </body>

</html>

<?php 
} else {
	$result = mysql_query("delete from emp_info where emp_no = '".$_POST['emp_no']."'");
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