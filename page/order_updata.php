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
	date_default_timezone_set("PRC");
	//$db = new MySQLi("localhost","root","root","gift");
	//!mysqli_connect_error() or die("连接失败！");
	require('conn.php');
	$id = $_GET["id"];
	
	$sql1 = "select * from my_order where oid='{$id}'";
	$r1 = $db->query($sql1);
	$att1 = $r1->fetch_row();
	?>
	<form action="order_updatapost.php" method="post">
		<br><br><center><font color=green size=3><b>修 改 订 单 状 态</b></font></center><br>
		<table cellspacing=0 bordercolordark=#FFFFFF width="80%" bordercolorlight=#000000 border=1 align="center" cellpadding="2">
		<tr bgcolor="#6b8ba8" style="color:FFFFFF">
		    <td width="10%" align="center" valign="bottom" height="19">订单编号ID</td>
		    <td width="10%" align="center" valign="bottom">订单金额</td>
		    <td width="10%" align="center" valign="bottom">商品数量</td>
		    <td width="20%" align="center" valign="bottom">订单时间</td>
		    <td width="30%" align="center" valign="bottom">订单状态(1-待发货,2-已发货,3-已完成)</td>
		    <td width="10%" align="center" valign="bottom">用户ID</td>
		    <td width="10%" align="center" valign="bottom">操作</td>
		</tr>
		<tr>
			<td><input type="text" name="oid"      	value="<?php echo $att1[0] ?>" readonly="readonly"/></td>
			<td><input type="text" name="price"    	value="<?php echo $att1[1] ?>" readonly="readonly"/></td>
			<td><input type="text" name="sumCount" 	value="<?php echo $att1[2] ?>" readonly="readonly"/></td>
			<td><input type="text" name="orderTime"	value="<?php $t = $att1[3]/1000; echo date('Y-m-d H:i:s',$t); ?>" readonly="readonly"/></td>
			<td><input type="text" name="status" 		value="<?php echo $att1[4] ?>" /></td>
			<td><input type="text" name="userId"   	value="<?php echo $att1[5] ?>" readonly="readonly"/></td>
			<td><input type="submit"  value="修改数据"/></td>
		</tr>
		</table>
	</form>
  </body>
</html>