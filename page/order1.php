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
  	<br><br><center><font color=green size=3><b>全 部 订 单 列 表</b></font></center><br>
		<table cellspacing=0 bordercolordark=#FFFFFF width="80%" bordercolorlight=#000000 border=1 align="center" cellpadding="2">
		<tr bgcolor="#6b8ba8" style="color:FFFFFF">
		    <td width="20%" align="center" valign="bottom" height="19">订单编号ID</td>
		    <td width="20%" align="center" valign="bottom">订单金额</td>
		    <td width="10%" align="center" valign="bottom">商品数量</td>
		    <td width="20%" align="center" valign="bottom">订单时间</td>
		    <td width="20%" align="center" valign="bottom">订单状态</td>
		    <td width="10%" align="center" valign="bottom"> 用户ID</td>
		</tr>
		<?php
			require('1_init.php');
			$sql = "SELECT * FROM my_order";
			$result = mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $row['oid'];?></td>
			<td><?php echo $row['price'];?></td>
			<td><?php echo $row['sumCount'];?></td>
			<td><?php echo $row['orderTime'];?></td>
			<td><?php echo $row['status'];?></td>
			<td><?php echo $row['userId'];?></td>
		</tr>
		<?php    
			}
		?>
		</table>
  </body>
</html>
