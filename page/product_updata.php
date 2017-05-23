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
	<?php
	//$db = new MySQLi("localhost","root","root","gift");
	//!mysqli_connect_error() or die("连接失败！");
	require('conn.php');
	$id = $_GET["id"];
	
	$sql1 = "select * from product where pid='{$id}'";
	$r1 = $db->query($sql1);
	$att1 = $r1->fetch_row();
	?>
	<form action="product_updatapost.php" method="post">
		<br><br><center><font color=green size=3><b>修 改 商 品 数 据</b></font></center><br>
		<table cellspacing=0 bordercolordark=#FFFFFF width="80%" bordercolorlight=#000000 border=1 align="center" cellpadding="2">
		<tr bgcolor="#6b8ba8" style="color:FFFFFF">
		    <td width="20%" align="center" valign="bottom" height="19">商品ID(不能修改)</td>
		    <td width="20%" align="center" valign="bottom">商品名称</td>
		    <td width="20%" align="center" valign="bottom">商品价格</td>
		    <td width="20%" align="center" valign="bottom">商品图片地址</td>
		    <td width="20%" align="center" valign="bottom">操作</td>
		</tr>
		<tr>
			<td><input type="text" name="pid"   value="<?php echo $att1[0] ?>" readonly="readonly"/></td>
			<td><input type="text" name="pname" value="<?php echo $att1[1] ?>" /></td>
			<td><input type="text" name="price" value="<?php echo $att1[2] ?>" /></td>
			<td><input type="text" name="pic"   value="<?php echo $att1[3] ?>" /></td>
			<td><input type="submit"  value="修改数据"/></td>
		</tr>
		</table>
	</form>
  </body>
</html>