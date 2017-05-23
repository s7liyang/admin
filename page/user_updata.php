<!DOCTYPE HTML>
<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta name="keywords" content="scclui框架">
	<meta name="description" content="scclui为轻量级的网站后台管理系统模版。">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Cache-Control" content="no-siteapp" />
  <title>首页</title>
 </head>
  <body>
	<h1>修改数据</h1>
	<?php
	//$db = new MySQLi("localhost","root","root","gift");
	//!mysqli_connect_error() or die("连接失败！");
	require('conn.php');
	$id = $_GET["id"];
	
	$sql1 = "select * from user where userid='{$id}'";
	$r1 = $db->query($sql1);
	$att1 = $r1->fetch_row();
	?>
	<form action="user_updatapost.php" method="post">
    <div>用户ID(不能修改 ):<input type="text" name="userid" readonly="readonly" value="<?php echo $att1[0] ?>" /></div>
    <div>用户名：<input type="text" name="username" value="<?php echo $att1[1] ?>" /></div>
    <div>密码：<input type="text" name="password" value="<?php echo $att1[2] ?>" /></div>
    <div>昵称：<input type="text" name="nickname" value="<?php echo $att1[3] ?>" /></div>
    <div>余额：<input type="text" name="money" value="<?php echo $att1[4] ?>" /></div>
    <div>用户头像：<input type="text" name="userimg" value="<?php echo $att1[5] ?>" /></div>
    <div>邮箱：<input type="text" name="email" value="<?php echo $att1[6] ?>" /></div>
    <div>手机：<input type="text" name="phone" value="<?php echo $att1[7] ?>" /></div>
    <div>性别：
         <input type="radio" value="男" name="sex" <?php echo $att1[8] ? "checked='checked'" : ""; ?> />男
         <input type="radio" value="女" name="sex" <?php echo $att1[8] ? "" : "checked='checked'"; ?> />女
    </div>
		<div>生日：<input type="text" name="birth" value="<?php echo $att1[9] ?>"/></div>
		<div>心情：<input type="text" name="sign" value="<?php echo $att1[10] ?>"/></div>
		<div>抽奖次数：<input type="text" name="time" value="<?php echo $att1[11] ?>"/></div>
		<div><input type="submit" value="修改数据" /></div>
	</form>
  </body>
</html>