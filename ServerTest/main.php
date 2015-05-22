<?php session_start(); 
header("Content-type: text/html; charset=utf-8"); 
include("../conn/conn.php");
if($_SESSION['username']==true){

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>移动办公系统-Server</title>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!--<link rel="stylesheet" type="text/css" href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" />-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
 <!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="css/bootstrap-ie6.min.css"/>
<link rel="stylesheet" type="text/css" href="css/ie.css"/>
    <![endif]-->
<style type="text/css">
body{
	background: #eee;
	font-size:20px;
	font-family:"黑体","Trebuchet MS", Arial, Helvetica, sans-serif;
	}
#items{
	margin:15em auto;
	width:25em;
	}
#tools{
	width:10em;
	position:absolute;
	top:2em;
	left:4em;
	border:#999 medium solid;
	opacity:0.5;
	}
#tools-r{
    width:5em;
    position:absolute;
    top:2em;
    right:4em;
    border:#999 medium solid;
    opacity:0.5;
}
.export{
	height:4.5em;
	width:4.5em;
	}
.sum{
	height:4.5em;
	width:4.5em;
}
.tool1{
	width:4.5em;
	height:6.5em;
	float:left;
	text-align:center;
	margin-left:0.25em;
	cursor:pointer;
	}
.tool2{
	width:4.5em;
	height:6.5em;
	float:right;
	text-align:center;
	margin-right:0.25em;
	cursor:pointer;
	}
.tool2-r{
    width:4.5em;
    height:6.5em;
    float:right;
    text-align:center;
    margin-right:0.25em;
    cursor:pointer;
}

.insert_emp{
	height:6.5em;
	width:6.5em;
	}
.insert_house{
	height:6.5em;
	width:6.5em;
}
.insert_roomer{
	height:6.5em;
	width:6.5em;
}
.icon1{
	float:left;
	}
.info1{
	clear:both;
	height:2em;
	line-height:2em;
	font-size:18px;
	font-family:"黑体",Arial, Helvetica, sans-serif;
	cursor:default;
	}
.item1{
	width:6.5em;
	height:8.5em;
	float:left;
	text-align:center;
	}
.item2{
	width:6.5em;
	height:8.5em;
	float:right;
	text-align:center;
	}
.item3{
	width:6.5em;
	height:8.5em;
	float:center;
	text-align:center;
	}
.icon{
	float:left;
	margin-bottom:0.5em;
	}
.info{
	clear:both;
	height:2em;
	line-height:2em;
	font-size:18px;
	font-family:"黑体",Arial, Helvetica, sans-serif;
	cursor:default;
	}
.logOut{
	background:url(images/font-417.png) no-repeat center;
	position:absolute;
	width:6em;
	height:6em;
	right:40px;
	bottom:40px;
	opacity:0.5;
	}
    .logOut-text{
        position:absolute;
        right:80px;
        bottom:10px;
        opacity:0.5;
        font-size: 18px;
    }
</style>
</head>

<body>
<div id="tools">
<div class="tool1">
<div class="icon1"><img src="images/meeting.png" class="export" /></div>
<div class="info1"><p>会议信息</p></div>
</div>
<div class="tool2">
<div class="icon1"><img src="images/notices.png" class="sum" /></div>
<div class="info1"><p>公告信息</p></div>
</div>

</div>
<div id="tools-r">
    <div class="tool2-r">
        <div class="icon1"><img src="images/admin.png" class="sum" /></div>
        <div class="info1"><p>添加管理员</p></div>
    </div>

</div>


<div id="items">
<div class="item1">
<div class="icon"><img src="images/compose.png" class="insert_emp" /></div>
<div class="info"><p>员工信息</p></div>
</div>
<div class="item2">
<div class="icon"><img src="images/magnifyingglass.png" class="insert_house" /></div>
<div class="info"><p>房源信息</p></div>
</div>
<div class="item3">
<div class="icon"><img src="images/customer.png" class="insert_roomer" /></div>
<div class="info"><p>客户信息</p></div>
</div>

</div>

<a href="#" class="logOut" data-toggle="tooltip" data-placement="top" title="退出登录"></a>
<span class="logOut-text">退出登录</span>
<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<!--<script src="js/fun.js" type="text/javascript"></script>-->
  <!--[if lte IE 6]>
<script src="js/bootstrap-ie.js" type="text/javascript"></script>
  <![endif]-->
 <script type="text/javascript">
 $(function(){
	  $("html,body").click(function(e){
		 if($(e.target).closest("#items").length==0){
		$(".item1,.item2,.item3").css("outline","none");
		$(".item1 .info,.item2 .info,.item3.info").css({
		"background-color":"#eee",
		"color":"#000"
		});
			 }

	 });
$(".item1").dblclick(function(){
	window.location.href="emp.php";
	}).click(function(){
		$(this).css("outline","#C90 dotted thin");
		$(".item1 .info").css({
		"background-color":"#C90",
		"color":"#FFF"
		});
	});
$(".item2").dblclick(function(){
	window.location.href="house.php";
	}).click(function(){
		$(this).css("outline","#C90 dotted thin");
		$(".item2 .info").css({
		"background-color":"#C90",
		"color":"#FFF"
		});
	});
$(".item3").dblclick(function(){
	window.location.href="roomer.php";
	}).click(function(){
		$(this).css("outline","#C90 dotted thin");
		$(".item3 .info").css({
		"background-color":"#C90",
		"color":"#FFF"
		});
	});
$(".tool1").click(function(){
		window.location.href="meeting.php";
		$(this).css("outline","#C90 dotted thin");
		$(".tool1 .info1").css({
		"background-color":"#C90",
		"color":"#FFF"
		});
	});
     $(".tool2-r").click(function(){
         window.location.href="add_admin.php";
        $(this).css("outline","#C90 dotted thin");
        $(".tool1-r .info1").css({
            "background-color":"#C90",
            "color":"#FFF"
        });
    });
$(".tool2").click(function(){
		window.location.href="notices.php";
		$(this).css("outline","#C90 dotted thin");
		$(".tool2 .info1").css({
		"background-color":"#C90",
		"color":"#FFF"
		});
	});
//$(".item1").myDrag();
//$(".item2").myDrag();
//$("#tools").myDrag();
		$(".logOut").mouseover(function(){
			$(this).tooltip('show');
			$(this).css("opacity","1");
            $(".logOut-text").css("opacity","1");
			}).mouseout(function(){
			  $(this).css("opacity","0.5");
            $(".logOut-text").css("opacity","0.5");
			  }).click(function(){
			window.location.href="log_out.php";	
				});
		$("#tools,#tools-r").mouseover(function(){
			$(this).tooltip('show');
			$(this).css("opacity","1");
			}).mouseout(function(){
			  $(this).css("opacity","0.5");
			  });
	 });

 </script>

</body>
</html>

<?php 
}else{
echo "<script>alert('请您正确登录！'); window.location.href='index.php';</script>";
}

?>
