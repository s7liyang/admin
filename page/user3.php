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
  	<br><br><center><font color=green size=3><b>用 户 收 货 地 址 列 表</b></font></center><br>
		<table cellspacing=0 bordercolordark=#FFFFFF width="80%" bordercolorlight=#000000 border=1 align="center" cellpadding="2">
		<tr bgcolor="#6b8ba8" style="color:FFFFFF">
		    <td width="15%" align="center" valign="bottom" height="19">用户编号ID</td>
		    <td width="15%" align="center" valign="bottom">收货人姓名</td>
		    <td width="15%" align="center" valign="bottom">联系电话</td>
		    <td width="15%" align="center" valign="bottom">邮政编码</td>
		    <td width="15%" align="center" valign="bottom">收货地址</td>
		    <td width="25%" align="center" valign="bottom">详细地址</td>
		</tr>
		<?php
			require('1_init.php');
			$sql = "SELECT * FROM address";
			$result = mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $row['userid'];?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['phone'];?></td>
			<td><?php echo $row['postcode'];?></td>
			<td><?php echo $row['area'];?></td>
			<td><?php echo $row['detail'];?></td>
		</tr>
		<?php    
			}
		?>
		</table>
  </body>
</html>
