<?php session_start(); 
include("../conn/conn.php");
header("Content-type: text/html; charset=utf-8"); 
if($_SESSION['username']==true){
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>添加员工信息</title>
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
            <h1>添加员工信息</h1>
            <form action="add_emp.class.php" method="post" onsubmit="return chkinput(this)">
                <input type="text" name="empno" class="empno" placeholder="请输入员工工号！">
                <input type="text" name="department" class="department" placeholder="请输入员工所属部门！">
                <input type="text" name="position" class="position" placeholder="请输入员工职位！">
								<input id="entrydate" name="entrydate" class="entrydate" placeholder="请输入员工入职日期！">
								<input type="text" name="identify" class="identify" placeholder="请输入员工身份证号！">
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