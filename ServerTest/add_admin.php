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
        <title>添加管理员</title>
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
        
        <script language="javascript">
  function chkinput(form){
  
    if(form.username.value==""){
        alert("用户名不能为空!");
        form.username.select();
        return(false);
    }
    if(form.empNo.value==""){
        alert("员工号不能为空!");
        form.empNo.select();
        return(false);
    }
    if(form.password.value==""){
          alert("密码不能为空!");
	  form.password.select();
	  return(false);
	}
	if(form.confirmPassword.value==""){
          alert("确认密码不能为空!");
	  form.confirmPassword.select();
	  return(false);
	}
	if(form.confirmPassword.value!=form.password.value){
          alert("两次输入的密码不一致!");
	  form.password.select();
	  return(false);
	}
	
   return(true);
  }

</script>

    </head>

    <body>

        <div class="page-container">
            <h1>添加管理员</h1>
            <form action="add_admin.class.php" method="post" onsubmit="return chkinput(this)">
                <input type="text" name="username" class="username" placeholder="请输入用户名！">
                <input type="text" name="empNo" class="empNo" placeholder="请输入员工号！">
                <input type="password" name="password" class="password" placeholder="请输入用户密码！">
                <input type="password" name="confirmPassword" class="confirmPassword" placeholder="请再次输入用户密码！">
                <button type="submit" class="submit_button">确认</button>
                <button type="submit" class="register_button">重置</button>
                <div class="error"><span>+</span></div>
            </form>
            
        </div>
		
        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js" ></script>
        <script src="assets/js/supersized.3.2.7.min.js" ></script>
        <script src="assets/js/supersized-init.js" ></script>
        <script src="assets/js/scripts.js" ></script>

    </body>

</html>

<?php 
}else{
echo "<script>alert('请您正确登录！'); window.location.href='index.php';</script>";
}

?>